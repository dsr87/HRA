<?php

/*
 * phpSecureSite 0.1.2 - IPAccess module
 *
 * modules/ipaccess.php
 *
 * Allow or deny access based on the clients IP address. See docs for
 * more information.
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

phpss_module_register("ipaccess");

phpss_event_register_hook(PHPSS_EVENT_LOGIN_AUTH, "phpss_ipaccess_hook_login");
phpss_event_register_hook(PHPSS_EVENT_VALIDATE_CHECK, "phpss_ipaccess_hook_session");

phpss_module_set_default_config("ipaccess", array(
	"policy"	=> "allow",
	"preferred"	=> "allow"
));

define("PHPSS_IPACCESS_ALLOW", 2);
define("PHPSS_IPACCESS_DENY", 1);
define("PHPSS_IPACCESS_UNKNOWN", "");

define("PHPSS_IPACCESS_CACHE_ACCOUNT", "account");
define("PHPSS_IPACCESS_CACHE_GROUP", "group");
define("PHPSS_IPACCESS_CACHE_GLOBAL", "global");

// bool phpss_ipaccess_hook_login(str event, arr data)
// Handles checks at login-time
function phpss_ipaccess_hook_login($event, $data) {

	if ($data["accountid"] != false && phpss_ipaccess_check($data["accountid"], $_SERVER["REMOTE_ADDR"]) == false) {
		phpss_log("ipaccess", PHPSS_LOG_NOTICE, "Login denied for ip address");
		return "phpss_login_ipaccess_deny";
	}
}

// bool phpss_ipaccess_hook_session(str event, arr data)
// Handles checks at session validation time
function phpss_ipaccess_hook_session($event, $data) {

	$sessiondata = phpss_get_session_data($data["sessionkey"]);
	$accountid = $sessiondata["accountid"];

	if (phpss_ipaccess_check($accountid, $_SERVER["REMOTE_ADDR"]) == false) {
		phpss_log("ipaccess", PHPSS_LOG_NOTICE, "Access denied for ip address");
		return "phpss_validate_ipaccess_deny";
	}
}

// bool phpss_ipaccess_check(int accountid, str ip)
// Checks if a client is allowed access
function phpss_ipaccess_check($accountid, $ip) {
	$cfg = phpss_module_get_config("ipaccess");

	// check account access
	$access = phpss_ipaccess_get_account_access($accountid, $ip);

	// check group access
	if ($access == PHPSS_IPACCESS_UNKNOWN)
		$access = phpss_ipaccess_get_group_access($accountid, $ip);

	// check global access
	if ($access == PHPSS_IPACCESS_UNKNOWN)
		$access = phpss_ipaccess_get_global_access($ip);

	// if no access found yet, use policy
	if ($access == PHPSS_IPACCESS_UNKNOWN)
		$access = $cfg["policy"] == "allow" ? PHPSS_IPACCESS_ALLOW : PHPSS_IPACCESS_DENY;

	return ($access == PHPSS_IPACCESS_ALLOW ? true : false);
}

// int phpss_ipaccess_get_account_access(int accountid, str ip)
// Checks if an account is allowed access
function phpss_ipaccess_get_account_access($accountid, $ip) {

	if (($data = phpss_cache_get("ipaccess", PHPSS_IPACCESS_CACHE_ACCOUNT, $accountid . ":" . $ip)) != PHPSS_CACHE_NOTFOUND)
		return $data;

	$rs = phpss_db_query("SELECT access FROM phpss_ipaccess_account WHERE accountfid = '" . phpss_db_escape_string($accountid) . "' AND ip = '" . phpss_db_escape_string($ip) . "'");

	if (sizeof($rs) > 0) {
		$status = $rs[0][0] > 0 ? PHPSS_IPACCESS_ALLOW : PHPSS_IPACCESS_DENY;
	} else {
		$status = PHPSS_IPACCESS_UNKNOWN;
	}

	phpss_cache_set("ipaccess", PHPSS_IPACCESS_CACHE_ACCOUNT, $accountid . ":" . $ip, $status);

	return $status;	
}

// int phpss_ipaccess_get_global_access(str ip)
// Checks if an ip address is allowed access
function phpss_ipaccess_get_global_access($ip) {

	if (($status = phpss_cache_get("ipaccess", PHPSS_IPACCESS_CACHE_GLOBAL, $ip)) != PHPSS_CACHE_NOTFOUND)
		return $status;

	$rs = phpss_db_query("SELECT access FROM phpss_ipaccess WHERE ip = '" . phpss_db_escape_string($ip) . "'");

	// check access
	if (sizeof($rs) > 0) {
		$status = $rs[0][0] > 0 ? PHPSS_IPACCESS_ALLOW : PHPSS_IPACCESS_DENY;
	} else {
		$status = PHPSS_IPACCESS_UNKNOWN;
	}

	phpss_cache_set("ipaccess", PHPSS_IPACCESS_CACHE_GLOBAL, $ip, $status);

	return $status;
}

// int phpss_ipaccess_get_group_access(int accountid, str ip)
// Checks if group(s) are allowed access
function phpss_ipaccess_get_group_access($accountid, $ip) {
	$cfg = phpss_module_get_config("ipaccess");

	// get account groups
	$groups = phpss_get_account_groups($accountid);

	// get access rules for each group
	$accesses = array();
	foreach($groups AS $group) {

		if (($status = phpss_cache_get("ipaccess", PHPSS_IPACCESS_CACHE_GROUP, $group . ":" . $ip)) != PHPSS_CACHE_NOTFOUND) {
			$accesses[] = $status;
			continue;
		}

		$rs = phpss_db_query("SELECT access FROM phpss_ipaccess_group WHERE groupfid = '" . phpss_db_escape_string($group) . "' AND ip = '" . phpss_db_escape_string($ip) . "'");
	
		if (sizeof($rs) > 0) {
			$access = ($rs[0][0] > 0 ? PHPSS_IPACCESS_ALLOW : PHPSS_IPACCESS_DENY);
			phpss_cache_set("ipaccess", PHPSS_IPACCESS_CACHE_GROUP, $group . ":" . $ip, $access);
			$accesses[] = $access;
		}
	}

	// get unique access rules
	$uniqueaccesses = array_values(array_unique($accesses));

	// check if any access rules were found
	if (sizeof($uniqueaccesses) == 0) {
		$access = PHPSS_IPACCESS_UNKNOWN;

	// check if only one access type was found
	} elseif (sizeof($uniqueaccesses) == 1) {
		$access = $uniqueaccesses[0];

	// check for several conflicting access types
	} else {
		$access = ($cfg["preferred"] == "allow" ? PHPSS_IPACCESS_ALLOW : PHPSS_IPACCESS_DENY);
	}

	// return access
	return $access;
}

?>
