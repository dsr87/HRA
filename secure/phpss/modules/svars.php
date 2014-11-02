<?php

/*
 * phpSecureSite 0.1.2 - Svars module
 *
 * modules/svars.php
 *
 * Provides session variables functionality
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

phpss_module_register("svars");

phpss_event_register_hook(PHPSS_EVENT_SYSTEM_DBCLEAN, "phpss_svars_hook_dbclean");
phpss_event_register_hook(PHPSS_EVENT_VALIDATE_SUCCESS, "phpss_svars_hook_autoget");
phpss_event_register_hook(PHPSS_EVENT_LOGOUT_POST, "phpss_svars_hook_autodel");

phpss_module_set_default_config("svars", array(
	"autoset"	=> true
));

define("PHPSS_SVARS_CACHE_SVARS", "svars");

// void phpss_svars_hook_autoget(str event, arr data)
// Fetches all session variables, and sets them in the global scope
function phpss_svars_hook_autoget($event, $data) {
	$cfg = phpss_module_get_config("svars");

	if ($cfg["autoset"] == false)
		return;

	$sessionid = phpss_svars_get_session_id($data["sessionkey"]);

	$rs = phpss_db_query("SELECT name, data FROM phpss_svars WHERE sessionfid = '" . phpss_db_escape_string($sessionid) . "'");

	// set all variables in the global scope
	global $phpss_svars;
	if (is_array($phpss_svars) == false)
		$phpss_svars = array();

	foreach($rs AS $row) {
		$name = $row[0];
		$data = unserialize($row[1]);
		$phpss_svars[$name] = $data;
		phpss_cache_set("svars", PHPSS_SVARS_CACHE_SVARS, $name, $data);
	}
}

// void phpss_svars_hook_autodel(str event, arr data)
// Removes all svars for a given session
function phpss_svars_hook_autodel($event, $data) {
	$sessionid = phpss_svars_get_session_id($data["sessionkey"]);
	phpss_db_query("DELETE FROM phpss_svars WHERE sessionfid = '" . phpss_db_escape_string($sessionid) . "'");
	phpss_cache_clear("svars", PHPSS_SVARS_CACHE_SVARS);
}

// void phpss_svars_hook_dbclean(str event, arr data)
// Removes unused session variables
function phpss_svars_hook_dbclean($event, $data) {

	// remove session variables for inactive sessions
	if (sizeof($data["sessions"]) > 0) {

		// generate sql for invalid sessions
		$t = array();
		foreach($data["sessions"] AS $s)
			$t[] = "sessionfid = '" . phpss_db_escape_string($s) . "'";
		$sessionsql = implode(" OR ", $t);

		phpss_db_query("DELETE FROM phpss_svars WHERE " . $sessionsql);
	}

	// remove orphaned session variables
	$rs = phpss_db_query("SELECT DISTINCT phpss_svars.sessionfid FROM phpss_svars LEFT JOIN phpss_session ON phpss_svars.sessionfid = phpss_session.id WHERE phpss_session.id IS NULL");
	if (sizeof($rs) > 0) {

		// generate sql where part
		$t = array();
		foreach($rs AS $row)
			$t[] = "sessionfid = '" . phpss_db_escape_string($row[0]) . "'";
		$sessionsql = implode(" OR ", $t);

		phpss_db_query("DELETE FROM phpss_svars WHERE " . $sessionsql);
	}
}

// mixed phpss_svars_get(str name)
// Fetches a session variable from the database
function phpss_svars_get($name) {

	if (($var = phpss_cache_get("svars", PHPSS_SVARS_CACHE_SVARS, $name)) != PHPSS_CACHE_NOTFOUND)
		return $var;

	$sessionid = phpss_svars_get_session_id();

	$query = "SELECT data FROM phpss_svars WHERE name = '" . phpss_db_escape_string($name) . "' AND sessionfid = '" . phpss_db_escape_string($sessionid) . "'";
	$rs = phpss_db_query($query);

	$var = sizeof($rs) > 0 ? unserialize($rs[0][0]) : false;
	phpss_cache_set("svars", PHPSS_SVARS_CACHE_SVARS, $name, $var);

	return $var;
}

// void phpss_svars_set(str name, mixed data)
// Stores a session variable in the database
function phpss_svars_set($name, $data) {
	$cfg = phpss_module_get_config("svars");

	$sessionid = phpss_svars_get_session_id();

	// serialize data, and escape special chars
	$sqldata = phpss_db_escape_string(serialize($data));

	// check whether to update or insert the entry
	if (phpss_svars_exists($name, true) == true) {
		$query = "UPDATE phpss_svars SET data = '" . $sqldata . "' WHERE sessionfid = '" . phpss_db_escape_string($sessionid) . "' AND name = '" . phpss_db_escape_string($name) . "'";
	} else {
		$query = "	INSERT INTO
					phpss_svars
				(
					sessionfid,
					name,
					data
				) VALUES (
					'" . phpss_db_escape_string($sessionid) . "',
					'" . phpss_db_escape_string($name) . "',
					'" . $sqldata . "'
				)";
	}

	phpss_db_query($query);

	// set var in global scope if autoset is on
	if ($cfg["autoset"] == true) {

		global $phpss_svars;
		if (is_array($phpss_svars) == false)
			$phpss_svars = array();

		$phpss_svars[$name] = $data;
	}

	phpss_cache_set("svars", PHPSS_SVARS_CACHE_SVARS, $name, $data);
}

// bool phpss_svars_exists(str name[, bool ignorecache])
// Checks if a session variable exists
function phpss_svars_exists($name, $ignorecache = false) {

	if ($ignorecache == false && phpss_cache_exists("svars", PHPSS_SVARS_CACHE_SVARS, $name) == true)
		return true;

	$sessionid = phpss_svars_get_session_id();
	
	$query = "SELECT COUNT(*) FROM phpss_svars WHERE name = '" . phpss_db_escape_string($name) . "' AND sessionfid = '" . phpss_db_escape_string($sessionid) . "'";
	$rs = phpss_db_query($query);

	return ($rs[0][0] > 0 ? true : false);
}

// int phpss_svars_get_session_id([str sessionkey])
// Fetches a session id
function phpss_svars_get_session_id($sessionkey = "") {

	if ($sessionkey == "")
		$sessionkey = phpss_fetch_sessionkey();

	$sessiondata = phpss_get_session_data($sessionkey);
	return $sessiondata["id"];
}

?>
