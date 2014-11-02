<?php

/*
 * phpSecureSite 0.1.2 - Bruteforce module
 *
 * modules/bruteforce.php
 *
 * Account bruteforce attack countermeasure. Will deny access to an
 * account or from an IP address after x failed login attempts.
 *
 *
 * Copyright (C) 2002-2003 Erik Grinaker
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
*/

phpss_module_register("bruteforce");

phpss_event_register_hook(PHPSS_EVENT_SYSTEM_DBCLEAN, "phpss_bruteforce_hook_dbclean");
phpss_event_register_hook(PHPSS_EVENT_LOGIN_PRE, "phpss_bruteforce_hook_check");
phpss_event_register_hook(PHPSS_EVENT_LOGIN_FAIL, "phpss_bruteforce_hook_fail");
phpss_event_register_hook(PHPSS_EVENT_LOGIN_SUCCESS, "phpss_bruteforce_hook_success");

phpss_module_set_default_config("bruteforce", array(
	"account_enable"	=> true,
	"account_threshold"	=> 5,
	"account_thresholdtime"	=> 600,
	"account_locktime"	=> 1800,

	"ip_enable"		=> true,
	"ip_threshold"		=> 10,
	"ip_thresholdtime"	=> 1200,
	"ip_locktime"		=> 3600
));

// void phpss_bruteforce_hook_dbclean(str event, arr data)
// Removes stale and orphaned fails/locks
function phpss_bruteforce_hook_dbclean($event, $data) {
	$cfg = phpss_module_get_config("bruteforce");

	foreach(array("account", "ip") AS $type) {

		if ($cfg[$type . "_thresholdtime"] > 0)
			phpss_bruteforce_remove_fails($type, 0, $cfg[$type . "_thresholdtime"]);
	
		if ($cfg[$type . "_locktime"] > 0)
			phpss_bruteforce_remove_locks($type, 0, $cfg[$type . "_locktime"]);

		phpss_bruteforce_remove_orphans($type);
	}
}

// void phpss_bruteforce_hook_fail(str event, arr data)
// Registers a fail or lock
function phpss_bruteforce_hook_fail($event, $data) {
	$cfg = phpss_module_get_config("bruteforce");

	if ($cfg["ip_enable"] == true) {

		$ipid = phpss_get_ip_id($_SERVER["REMOTE_ADDR"]);
		phpss_bruteforce_register_fail("ip", $ipid);

		// register lock if threshold is reached
		if (phpss_bruteforce_get_fails("ip", $ipid, $cfg["ip_thresholdtime"]) >= $cfg["ip_threshold"]) {
			phpss_bruteforce_register_lock("ip", $ipid);
			phpss_bruteforce_remove_fails("ip", $ipid);
			phpss_log("bruteforce", PHPSS_LOG_WARNING, "IP address lock placed");
		}
	}

	if ($cfg["account_enable"] == true && ($accountid = phpss_get_account_id($data["username"])) != false) {

		phpss_bruteforce_register_fail("account", $accountid);

		// register lock if threshold is reached
		if (phpss_bruteforce_get_fails("account", $accountid, $cfg["account_thresholdtime"]) >= $cfg["account_threshold"]) {
			phpss_bruteforce_register_lock("account", $accountid);
			phpss_bruteforce_remove_fails("account", $accountid);
			phpss_log("bruteforce", PHPSS_LOG_WARNING, "Account lock placed");
		}
	}
}

// void phpss_bruteforce_hook_check(str event, arr data)
// Checks if any locks are present when authenticating users
function phpss_bruteforce_hook_check($event, $data) {
	$cfg = phpss_module_get_config("bruteforce");

	// check for any srcip locks
	if ($cfg["ip_enable"] == true && phpss_bruteforce_lock_exists("ip", phpss_get_ip_id($_SERVER["REMOTE_ADDR"]), $cfg["ip_locktime"]) == true) {
		phpss_log("bruteforce", PHPSS_LOG_NOTICE, "Login denied, IP is locked");
		return "phpss_login_bruteforce_iplock";
	}

	// check for any account locks
	if (	$cfg["account_enable"] == true
		&& ($accountid = phpss_get_account_id($data["username"])) == true
		&& phpss_bruteforce_lock_exists("account", $accountid, $cfg["account_locktime"]) == true
	) {
		phpss_log("bruteforce", PHPSS_LOG_NOTICE, "Login denied, account is locked");
		return "phpss_login_bruteforce_accountlock";
	}
}

// void phpss_bruteforce_hook_success(str event, arr data)
// Removes any previous failed login records
function phpss_bruteforce_hook_success($event, $data) {
	$cfg = phpss_module_get_config("bruteforce");

	if ($cfg["ip_enable"] == true) {
		$ipid = phpss_get_ip_id($_SERVER["REMOTE_ADDR"]);
		phpss_bruteforce_remove_fails("ip", $ipid);
		phpss_bruteforce_remove_locks("ip", $ipid);
	}

	if ($cfg["account_enable"] == true){
		phpss_bruteforce_remove_fails("account", $data["accountid"]);
		phpss_bruteforce_remove_locks("account", $data["accountid"]);
	}
}

// bool phpss_bruteforce_lock_exists(str type, int id[, int locktime])
// Checks if a lock exists
function phpss_bruteforce_lock_exists($type, $id, $locktime = 0) {

	$query = "SELECT COUNT(*) FROM phpss_bruteforce_" . $type . "_lock WHERE " . $type . "fid = '" . phpss_db_escape_string($id) . "'";

	if ($locktime > 0)
		$query .= " AND time > '" . phpss_db_escape_string(date("U") - $locktime) . "'";

	$rs = phpss_db_query($query);
	return $rs[0][0] > 0;
}

// int phpss_bruteforce_get_fails(str type, int id[, int timelimit])
// Returns the number of fails
function phpss_bruteforce_get_fails($type, $id, $timelimit = 0) {

	$query = "SELECT COUNT(*) FROM phpss_bruteforce_" . $type . "_fail WHERE " . $type . "fid = '" . phpss_db_escape_string($id) . "'";
	
	if ($timelimit > 0)
		$query .= " AND time > '" . phpss_db_escape_string(date("U") - $timelimit) . "'";

	$rs = phpss_db_query($query);
	return $rs[0][0];
}

// void phpss_bruteforce_register_fail(str type, int id)
// Registers a failed account login attempt
function phpss_bruteforce_register_fail($type, $id) {

	$query = "	INSERT INTO
				phpss_bruteforce_" . $type . "_fail
			(
				" . $type . "fid,
				time
			) VALUES (
				'" . phpss_db_escape_string($id) . "',
				'" . phpss_db_escape_string(date("U")) . "'
			)";
	phpss_db_query($query);
}

// void phpss_bruteforce_register_lock(str type, int id)
// Registers a lock
function phpss_bruteforce_register_lock($type, $id) {

	$query = "	INSERT INTO
				phpss_bruteforce_" . $type . "_lock
			(
				" . $type . "fid,
				time
			) VALUES (
				'" . phpss_db_escape_string($id) . "',
				'" . phpss_db_escape_string(date("U")) . "'
			)";
	phpss_db_query($query);
}

// void phpss_bruteforce_remove_fails(str type[, int id[, int timelimit]])
// Removes any failed login attempts
function phpss_bruteforce_remove_fails($type, $id = 0, $timelimit = 0) {

	$query = "	DELETE FROM
				phpss_bruteforce_" . $type . "_fail
			WHERE
				time <= '" . phpss_db_escape_string(date("U") - $timelimit) . "'";
	
	if ($id > 0)
		$query .= " AND " . $type . "fid = '" . phpss_db_escape_string($id) . "'";

	phpss_db_query($query);
}

// void phpss_bruteforce_remove_locks(str type[, int id[, int timelimit]])
// Removes locks
function phpss_bruteforce_remove_locks($type, $id = 0, $timelimit = 0) {

	$query = "	DELETE FROM
				phpss_bruteforce_" . $type . "_lock
			WHERE
				time <= '" . phpss_db_escape_string(date("U") - $timelimit) . "'";
	
	if ($id > 0)
		$query .= " AND " . $type . "fid = '" . phpss_db_escape_string($id) . "'";
				 
	phpss_db_query($query);
}

// void phpss_bruteforce_remove_orphans(str type)
// Removes orphaned fails and locks
function phpss_bruteforce_remove_orphans($type) {

	foreach (array("fail", "lock") AS $f) {

		// get list of nonexistant fids
		$query = "	SELECT DISTINCT
					phpss_bruteforce_" . $type . "_" . $f . "." . $type . "fid
				FROM
					phpss_bruteforce_" . $type . "_" . $f . "
					LEFT JOIN
						phpss_" . $type . "
							ON phpss_bruteforce_" . $type . "_" . $f . "." . $type . "fid = phpss_" . $type . ".id
				WHERE
					phpss_" . $type . ".id IS NULL";
		$rs = phpss_db_query($query);

		// remove fails
		if (sizeof($rs) > 0) {
		
			// get sql where part
			$t = array();
			foreach($rs AS $row)
				$t[] = $type . "fid = '" . $row[0] . "'";
			$wheresql = implode(" OR ", $t);

			phpss_db_query("DELETE FROM phpss_bruteforce_" . $type . "_" . $f . " WHERE " . $wheresql);
		}
	}
}

?>
