<?php

/*
 * phpSecureSite 0.1.2 - mysql auth module
 *
 * modules/auth/mysql.php
 *
 * MySQL authentication module. Allows for authentication
 * with account data stored in MySQL database.
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

// NOTE: This module should only be used for accessing account data in
// a different database (possible on another server) than the normal
// phpSecureSite database. Otherwise you should really use the database
// authentication handler instead.

phpss_module_register("mysql", PHPSS_MODULE_AUTH);

phpss_register_handler(PHPSS_HANDLER_AUTH_AUTHENTICATE, "phpss_auth_mysql_authenticate");
phpss_register_handler(PHPSS_HANDLER_AUTH_ACCOUNTDATA, "phpss_auth_mysql_get_account_data");
phpss_register_handler(PHPSS_HANDLER_AUTH_ACCOUNTGROUPS, "phpss_auth_mysql_get_account_groups");
phpss_register_handler(PHPSS_HANDLER_AUTH_ACCOUNTID, "phpss_auth_mysql_get_account_id");
phpss_register_handler(PHPSS_HANDLER_AUTH_GROUPDATA, "phpss_auth_mysql_get_group_data");
phpss_register_handler(PHPSS_HANDLER_AUTH_GROUPID, "phpss_auth_mysql_get_group_id");

phpss_event_register_hook(PHPSS_EVENT_SYSTEM_SHUTDOWN, "phpss_auth_mysql_hook_shutdown");

phpss_module_set_default_config("mysql", array(
	"hostname"		=> "localhost",
	"port"			=> 3306,
	"username"		=> "notroot",
	"password"		=> "secret",
	"database"		=> "accounts",

	"query_auth"		=> "SELECT id, username, password FROM account WHERE username = '%u' AND password = '%p'",
	"query_accountdata"	=> "SELECT id, username, password FROM account WHERE id = '%i'",
	"query_accountid"	=> "SELECT id FROM account WHERE username = '%u'",
	"query_accountgroups"	=> "SELECT group.id FROM account, group, account_group WHERE account.id = %i AND account_group.accountfid = account.id AND account_group.groupfid = group.id",

	"query_groupdata"	=> "SELECT id, name FROM group WHERE id = %i",
	"query_groupid"		=> "SELECT id FROM group WHERE name = %g"
), PHPSS_MODULE_AUTH);

// int phpss_auth_mysql_authenticate(str username, str password)
// attempts to authenticate a user against the MySQL database
function phpss_auth_mysql_authenticate($username, $password) {
	$cfg = phpss_module_get_config("mysql", PHPSS_MODULE_AUTH);

	// expand query variables
	$transmap = array("%u" => mysql_escape_string($username), "%p" => mysql_escape_string($password));
	$query = strtr($cfg["query_auth"], $transmap);

	$rs = phpss_auth_mysql_dbquery($query);
	return (sizeof($rs) == 1 && $rs[0][1] == $username && $rs[0][2] == $password ? $rs[0][0] : false);
}

// void phpss_auth_mysql_hook_shutdown(str event, arr data)
// cleans up
function phpss_auth_mysql_hook_shutdown($event, $data) {
	phpss_auth_mysql_dbclose();
}

// void phpss_auth_mysql_dbclose()
// closes a database connection
function phpss_auth_mysql_dbclose() {
	$link = phpss_module_get_data("mysql", "dblink", PHPSS_MODULE_AUTH);
	if ($link != false)
		mysql_close($link);
	phpss_module_set_data("mysql", "dblink", false, PHPSS_MODULE_AUTH);
}

// void phpss_auth_mysql_dbinit()
// sets up a database connection
function phpss_auth_mysql_dbinit() {
	$cfg = phpss_module_get_config("mysql", PHPSS_MODULE_AUTH);

	if (($link = mysql_connect($cfg["hostname"] . ":" . $cfg["port"], $cfg["username"], $cfg["password"], true)) == false)
		phpss_error("mysql", "Unable to connect to authentication database server", "MySQL said: " . mysql_error(), PHPSS_MODULE_AUTH);

	if (mysql_select_db($cfg["database"], $link) == false)
		phpss_error("mysql", "Unable to select authentication database", "MySQL said: " . mysql_error($link), PHPSS_MODULE_AUTH);

	// store link
	phpss_module_set_data("mysql", "dblink", $link, PHPSS_MODULE_AUTH);
}

// arr phpss_auth_mysql_dbquery(str query)
// executes a query
function phpss_auth_mysql_dbquery($query) {

	// fetch link, or open new if none are found
	$link = phpss_module_get_data("mysql", "dblink", PHPSS_MODULE_AUTH);
	if ($link == false) {
		phpss_auth_mysql_dbinit();
		$link = phpss_module_get_data("mysql", "dblink", PHPSS_MODULE_AUTH);
	}

	if(($rs = mysql_query($query, $link)) == false)
		phpss_error("mysql", "An authentication query failed", "Query was: " . $query . ", MySQL said: " . mysql_error(), PHPSS_MODULE_AUTH);

	$data = array();
	if (is_resource($rs) == true) {

		while($row = mysql_fetch_row($rs))
			$data[] = $row;

		mysql_free_result($rs);
	}

	return $data;
}

// arr phpss_auth_mysql_get_account_data(int accountid)
// retrieves account data
function phpss_auth_mysql_get_account_data($accountid) {
	$cfg = phpss_module_get_config("mysql", PHPSS_MODULE_AUTH);

	// expand query variables
	$transmap = array("%i" => (int)$accountid);
	$query = strtr($cfg["query_accountdata"], $transmap);

	$rs = phpss_auth_mysql_dbquery($query);

	if (sizeof($rs) > 0) {
		$data = array(
			"id"		=> $rs[0][0],
			"username"	=> $rs[0][1],
			"password"	=> $rs[0][2]
		);
	} else {
		$data = false;
	}

	return $data;
}

// arr phpss_auth_mysql_get_account_groups(int accountid)
// retrieves the groups an account is a member of
function phpss_auth_mysql_get_account_groups($accountid) {
	$cfg = phpss_module_get_config("mysql", PHPSS_MODULE_AUTH);

	// return empty array if no query is set
	if (isset($cfg["query_accountgroups"]) == false || $cfg["query_accountgroups"] == "")
		return array();

	// expand query variables
	$transmap = array("%i" => (int)$accountid);
	$query = strtr($cfg["query_accountgroups"], $transmap);

	$rs = phpss_auth_mysql_dbquery($query);

	$groups = array();
	foreach($rs AS $row)
		$groups[] = $row[0];

	return $groups;
}

// int phpss_auth_mysql_get_account_id(str username)
// looks up an account id based on a username
function phpss_auth_mysql_get_account_id($username) {
	$cfg = phpss_module_get_config("mysql", PHPSS_MODULE_AUTH);

	// expand query variables
	$transmap = array("%u" => mysql_escape_string($username));
	$query = strtr($cfg["query_accountid"], $transmap);

	$rs = phpss_auth_mysql_dbquery($query);
	return (sizeof($rs) > 0 ? $rs[0][0] : false);
}

// arr phpss_auth_mysql_get_group_data(int groupid)
// retrieves group data
function phpss_auth_mysql_get_group_data($groupid) {
	$cfg = phpss_module_get_config("mysql", PHPSS_MODULE_AUTH);

	// if query is empty, return false
	if (isset($cfg["query_groupdata"]) == false || $cfg["query_groupdata"] == "")
		return false;

	// expand query variables
	$transmap = array("%i" => (int)$groupid);
	$query = strtr($cfg["query_groupdata"], $transmap);

	$rs = phpss_auth_mysql_dbquery($query);

	if (sizeof($rs) > 0) {
		$data = array(
			"id"	=> $rs[0][0],
			"name"	=> $rs[0][1]
		);
	} else {
		$data = false;
	}

	return $data;
}

// int phpss_auth_mysql_get_group_id(str groupname)
// looks up the id of a group from its name
function phpss_auth_mysql_get_group_id($groupname) {
	$cfg = phpss_module_get_config("mysql", PHPSS_MODULE_AUTH);

	// return false if no query is set
	if (isset($cfg["query_groupid"]) == false || $cfg["query_groupid"] == "")
		return false;

	// expand query variables
	$transmap = array("%g" => mysql_escape_string($groupname));
	$query = strtr($cfg["query_groupid"], $transmap);

	$rs = phpss_auth_mysql_dbquery($query);
	return (sizeof($rs) > 0 ? $rs[0][0] : false);
}

?>
