<?php

/*
 * phpSecureSite 0.1.2 - Authentication functions
 *
 * func/auth.php
 *
 * Authentication-related functions, mostly wrappers for authentication
 * handlers
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


// int phpss_authenticate(str username, str password)
// Authenticates a user - returns a positive account id on success, or
// false if the provided username/password is wrong
function phpss_authenticate($username, $password) {
	$cryptpw = phpss_encrypt_password($password);
	return @call_user_func(phpss_get_handler(PHPSS_HANDLER_AUTH_AUTHENTICATE), $username, $cryptpw);
}

// str phpss_encrypt_password(str password[, str algorithm])
// Encrypts the password for comparison with password stored in the
// authentication backend. Valid algorithms can be found in the
// authentication config, if algorithm is not defined the configured
// one will be used.
function phpss_encrypt_password($password, $algorithm = "") {

	if ($algorithm == "") {
		$cfg = phpss_module_get_config("phpss", PHPSS_MODULE_CORE);
		$algorithm = $cfg["auth_pwtype"];
	}

	switch($algorithm) {
		case "crypt":
			return crypt($password, $password);

		case "md5":
			return md5($password);

		case "mysql":
			return phpss_encrypt_mysql($password);

		case "sha1":
			return sha1($password);

		case "plaintext":
			return $password;

		default:
			phpss_error("phpss", "Invalid password encryption type", "Password type '" . $algorithm . "'", PHPSS_MODULE_CORE);
	}
}

// arr phpss_get_account_data(int accountid)
// Returns the id, username and password of an account as an array,
// or false if the account doesn't exist
function phpss_get_account_data($accountid) {

	if (($data = phpss_cache_get("phpss", PHPSS_CACHE_ACCOUNTDATA, $accountid, PHPSS_MODULE_CORE)) != PHPSS_CACHE_NOTFOUND)
		return $data;

	$data = @call_user_func(phpss_get_handler(PHPSS_HANDLER_AUTH_ACCOUNTDATA), $accountid);

	phpss_cache_set("phpss", PHPSS_CACHE_ACCOUNTDATA, $accountid, $data, PHPSS_MODULE_CORE);

	return $data;
}

// arr phpss_get_account_groups(int accountid)
// Returns an array with ids of groups that an account is a member of.
// If the account doesn't exist, an empty array will be returned.
function phpss_get_account_groups($accountid) {

	if (($data = phpss_cache_get("phpss", PHPSS_CACHE_ACCOUNTGROUPS, $accountid, PHPSS_MODULE_CORE)) != PHPSS_CACHE_NOTFOUND)
		return $data;

	$data = @call_user_func(phpss_get_handler(PHPSS_HANDLER_AUTH_ACCOUNTGROUPS), $accountid);

	phpss_cache_set("phpss", PHPSS_CACHE_ACCOUNTGROUPS, $accountid, $data, PHPSS_MODULE_CORE);

	return $data;
}

// int phpss_get_account_id(str username)
// Returns the account id of a username, or false if the username
// doesn't exist.
function phpss_get_account_id($username) {

	if (($data = phpss_cache_get("phpss", PHPSS_CACHE_ACCOUNTID, $username, PHPSS_MODULE_CORE)) != PHPSS_CACHE_NOTFOUND)
		return $data;

	$data = @call_user_func(phpss_get_handler(PHPSS_HANDLER_AUTH_ACCOUNTID), $username);

	phpss_cache_set("phpss", PHPSS_CACHE_ACCOUNTID, $username, $data, PHPSS_MODULE_CORE);

	return $data;
}

// arr phpss_get_group_data(int groupid)
// Returns the id and name of a group, or false if the group doesn't
// exist
function phpss_get_group_data($groupid) {

	if (($data = phpss_cache_get("phpss", PHPSS_CACHE_GROUPDATA, $groupid, PHPSS_MODULE_CORE)) != PHPSS_CACHE_NOTFOUND)
		return $data;

	$data = @call_user_func(phpss_get_handler(PHPSS_HANDLER_AUTH_GROUPDATA), $groupid);

	phpss_cache_set("phpss", PHPSS_CACHE_GROUPDATA, $groupid, $data, PHPSS_MODULE_CORE);

	return $data;
}

// int phpss_get_group_id(str groupname)
// Returns the id of a group based on the group name, or false if
// the group doesn't exist
function phpss_get_group_id($groupname) {

	if (($data = phpss_cache_get("phpss", PHPSS_CACHE_GROUPID, $groupname, PHPSS_MODULE_CORE)) != PHPSS_CACHE_NOTFOUND)
		return $data;

	$data = @call_user_func(phpss_get_handler(PHPSS_HANDLER_AUTH_GROUPID), $groupname);

	phpss_cache_set("phpss", PHPSS_CACHE_GROUPID, $groupname, $data, PHPSS_MODULE_CORE);

	return $data;
}

?>
