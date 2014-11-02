<?php

/*
 * phpSecureSite 0.1.2 - database auth module
 *
 * modules/auth/database.php
 *
 * Authentication handler for authenticating users against an LDAP
 * directory. Uses the posixAccount and posixGroup objecttypes.
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

phpss_module_register("ldap", PHPSS_MODULE_AUTH);

phpss_register_handler(PHPSS_HANDLER_AUTH_AUTHENTICATE, "phpss_auth_ldap_authenticate");
phpss_register_handler(PHPSS_HANDLER_AUTH_ACCOUNTDATA, "phpss_auth_ldap_accountdata");
phpss_register_handler(PHPSS_HANDLER_AUTH_ACCOUNTID, "phpss_auth_ldap_accountid");
phpss_register_handler(PHPSS_HANDLER_AUTH_ACCOUNTGROUPS, "phpss_auth_ldap_accountgroups");
phpss_register_handler(PHPSS_HANDLER_AUTH_GROUPDATA, "phpss_auth_ldap_groupdata");
phpss_register_handler(PHPSS_HANDLER_AUTH_GROUPID, "phpss_auth_ldap_groupid");

phpss_module_set_default_config("ldap", array(
	"hostname"		=> "localhost",
	"port"			=> 389,
	"binddn"		=> "cn=Manager, dc=domain, dc=com",
	"bindpw"		=> "secret",
	"basedn"		=> "dc=domain, dc=com"
), PHPSS_MODULE_AUTH);


// int phpss_auth_ldap_authenticate(str username, str password)
// attempts to authenticate a user
function phpss_auth_ldap_authenticate($username, $password) {
	$result = phpss_auth_ldap_search("(&
		(objectClass=posixAccount)
		(uid=" . phpss_auth_ldap_escape_string($username) . ")
		(userPassword=" . phpss_auth_ldap_escape_string($password) . ")
	)", array("uidNumber"));

	// validate the result
	if (sizeof($result) == 1 && isset($result[0]["uidnumber"][0]) == true) {
		return $result[0]["uidnumber"][0];
	} else {
		return false;
	}
}

// arr phpss_auth_ldap_accountdata(int id)
// fetches account data
function phpss_auth_ldap_accountdata($id) {
	$result = phpss_auth_ldap_search("(&
		(objectClass=posixAccount)
		(uidNumber=" . phpss_auth_ldap_escape_string($id) . ")
	)", array("uidNumber", "uid", "userPassword"));

	// validate the result
	if (sizeof($result) == 1) {
		return array(
			"id"		=> $result[0]["uidnumber"][0],
			"username"	=> $result[0]["uid"][0],
			"password"	=> $result[0]["userpassword"][0]
		);
	} else {
		return false;
	}
}

// int phpss_auth_ldap_accountid(str username)
// returns the id for a username
function phpss_auth_ldap_accountid($username) {
	$result = phpss_auth_ldap_search("(&
		(objectClass=posixAccount)
		(uid=" . phpss_auth_ldap_escape_string($username) . ")
	)", array("uidNumber"));

	if (sizeof($result) == 1) {
		return $result[0]["uidnumber"][0];
	} else {
		return false;
	}
}

// arr phpss_auth_ldap_accountgroups(int id)
// returns an array with all groups of an account
function phpss_auth_ldap_accountgroups($id) {

	$adata = phpss_get_account_data($id);
	if ($adata == false)
		return array();

	$result = phpss_auth_ldap_search("(&
		(objectClass=posixGroup)
		(memberUid=" . phpss_auth_ldap_escape_string($adata["username"]) . ")
	)", array("gidnumber"));

	// fetch groups
	$groups = array();
	foreach($result AS $r)
		$groups[] = $r["gidnumber"][0];

	return $groups;
}

// arr phpss_auth_ldap_groupdata(int id)
// returns data for a groups
function phpss_auth_ldap_groupdata($id) {
	$result = phpss_auth_ldap_search("(&
		(objectClass=posixGroup)
		(gidNumber=" . phpss_auth_ldap_escape_string($id) . ")
	)", array("gidnumber", "cn"));

	if (sizeof($result) == 1) {
		return array(
			"id"	=> $result[0]["gidnumber"][0],
			"name"	=> $result[0]["cn"][0]
		);
	} else {
		return false;
	}
}

// int phpss_auth_ldap_groupid(str groupname)
// returns the id of a group
function phpss_auth_ldap_groupid($groupname) {
	$result = phpss_auth_ldap_search("(&
		(objectClass=posixGroup)
		(cn=" . phpss_auth_ldap_escape_string($groupname) . ")
	)", array("gidnumber"));

	if (sizeof($result) == 1) {
		return $result[0]["gidnumber"]["0"];
	} else {
		return false;
	}
}

// int phpss_auth_ldap_connect()
// connects and binds to the ldap server
function phpss_auth_ldap_connect() {
	$cfg = phpss_module_get_config("ldap", PHPSS_MODULE_AUTH);

	if (($link = ldap_connect($cfg["hostname"], $cfg["port"])) == false || ldap_bind($link, $cfg["binddn"], $cfg["bindpw"]) == false)
		phpss_error("ldap", "Unable to connect to authentication server", "", PHPSS_MODULE_AUTH);

	// store link
	phpss_module_set_data("ldap", "link", $link, PHPSS_MODULE_AUTH);
}

// str phpss_auth_ldap_escape_string(str string)
// escapes special chars in a string, so it is safe to place in an ldap filter
function phpss_auth_ldap_escape_string($string) {

	$map = array(
		"*"	=> "\2a",
		"("	=> "\28",
		")"	=> "\29",
		"\\"	=> "\5c"
	);

	$string = strtr($string, $map);

	return $string;
}

// arr phpss_auth_ldap_search(str filter[, arr attributes])
// searches for an ldap entry, and returns data if found
function phpss_auth_ldap_search($filter, $attributes = array()) {
	$cfg = phpss_module_get_config("ldap", PHPSS_MODULE_AUTH);

	if (($link = phpss_module_get_data("ldap", "link", PHPSS_MODULE_AUTH)) == false) {
		phpss_auth_ldap_connect();
		$link = phpss_module_get_data("ldap", "link", PHPSS_MODULE_AUTH);
	}

	$sr = ldap_search($link, $cfg["basedn"], $filter, $attributes);
	$entries = ldap_get_entries($link, $sr);

	return phpss_auth_ldap_clean_result($entries);
}

// arr phpss_auth_ldap_clean_result(arr entries)
// cleans up the result entries from an ldap query
function phpss_auth_ldap_clean_result($entries) {
	
	unset($entries["count"]);

	foreach($entries AS $entryindex => $entrydata) {

		unset($entries[$entryindex]["count"]);

		foreach($entries[$entryindex] AS $attr => $attrdata) {

			if (is_numeric($attr) == true) {
				unset($entries[$entryindex][$attr]);
			} else {
				unset($entries[$entryindex][$attr]["count"]);
			}

		}
	}

	return $entries;
}

?>
