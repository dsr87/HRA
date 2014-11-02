<?php

/*
 * phpSecureSite 0.1.2 - database auth module
 *
 * modules/auth/database.php
 *
 * Database authentication handler which will use phpSecureSite's
 * already established database link for communication
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

phpss_module_register("database", PHPSS_MODULE_AUTH);

phpss_register_handler(PHPSS_HANDLER_AUTH_AUTHENTICATE, "phpss_auth_database_authenticate");
phpss_register_handler(PHPSS_HANDLER_AUTH_ACCOUNTDATA, "phpss_auth_database_get_account_data");
phpss_register_handler(PHPSS_HANDLER_AUTH_ACCOUNTGROUPS, "phpss_auth_database_get_account_groups");
phpss_register_handler(PHPSS_HANDLER_AUTH_ACCOUNTID, "phpss_auth_database_get_account_id");
phpss_register_handler(PHPSS_HANDLER_AUTH_GROUPDATA, "phpss_auth_database_get_group_data");
phpss_register_handler(PHPSS_HANDLER_AUTH_GROUPID, "phpss_auth_database_get_group_id");

// int phpss_auth_database_authenticate(str username, str password)
// attempts to authenticate a user by the given identification tokens
function phpss_auth_database_authenticate($username, $password) {

	$query = "	SELECT
				id,
				username,
				password,
				active
			FROM
				phpss_account
			WHERE
				username = '" . phpss_db_escape_string($username) . "'
				AND password = '" . phpss_db_escape_string($password) . "'
				AND active > 0";
	$rs = phpss_db_query($query);

	return (sizeof($rs) == 1 && $rs[0][1] == $username && $rs[0][2] == $password && $rs[0][3] > 0 ? $rs[0][0] : false);
}

// arr phpss_auth_database_get_account_data(int accountid)
// retrieves account data
function phpss_auth_database_get_account_data($accountid) {

	$rs = phpss_db_query("SELECT id, username, password, active FROM phpss_account WHERE id = '" . phpss_db_escape_string($accountid) . "'");

	if (sizeof($rs) == 0) {
		$data = false;
	} else {
		$data = array(
			"id" => $rs[0][0],
			"username" => $rs[0][1],
			"password" => $rs[0][2],
			"active" => ($rs[0][3] > 0 ? true : false)
		);
	}

	return $data;
}

// arr phpss_auth_database_get_account_groups(int accountid)
// retrieves the groups an account is a member of
function phpss_auth_database_get_account_groups($accountid) {

	$rs = phpss_db_query("SELECT groupfid FROM phpss_account_group WHERE accountfid = '" . phpss_db_escape_string($accountid) . "'");

	$groups = array();
	foreach($rs AS $row)
		$groups[] = $row[0];

	return $groups;
}

// int phpss_auth_database_get_account_id(str username)
// looks up an account id based on a username
function phpss_auth_database_get_account_id($username) {
	$rs = phpss_db_query("SELECT id FROM phpss_account WHERE username = '" . phpss_db_escape_string($username) . "'");
	return (sizeof($rs) > 0 ? $rs[0][0] : false);
}

// arr phpss_auth_database_get_group_data(int groupid)
// retrieves group data
function phpss_auth_database_get_group_data($groupid) {

	$rs = phpss_db_query("SELECT id, name FROM phpss_group WHERE id = '" . phpss_db_escape_string($groupid) . "'");

	if (sizeof($rs) == 0) {
		$data = false;
	} else {
		$data["id"] = $rs[0][0];
		$data["name"] = $rs[0][1];
	}

	return $data;
}

// int phpss_auth_database_get_group_id(str groupname)
// looks up the id of a group from its name
function phpss_auth_database_get_group_id($groupname) {
	$rs = phpss_db_query("SELECT id FROM phpss_group WHERE name = '" . phpss_db_escape_string($groupname) . "'");
	return (sizeof($rs) > 0 ? $rs[0][0] : false);
}

?>
