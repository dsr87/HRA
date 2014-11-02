<?php

/*
 * phpSecureSite 0.1.2 - ACL module
 *
 * modules/acl.php
 *
 * A module which provides access control lists.
 * Documented in the main phpSecureSite documentation.
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

phpss_module_register("acl");

phpss_event_register_hook(PHPSS_EVENT_SYSTEM_INIT, "phpss_acl_hook_init");
phpss_event_register_hook(PHPSS_EVENT_VALIDATE_CHECK, "phpss_acl_hook_check");

phpss_module_set_default_config("acl", array(
	"policy"	=> "allow",
	"preferred"	=> "allow"
));

// void phpss_acl_hook_init(str event, arr data)
// Sets up data structures
function phpss_acl_hook_init($event, $data) {
	$cfg = phpss_module_get_config("acl");

	define("PHPSS_ACL_UNKNOWN", "");
	define("PHPSS_ACL_DENY", "deny");
	define("PHPSS_ACL_ALLOW", "allow");

	phpss_acl_set_policy($cfg["policy"]);
	phpss_acl_set_preferred($cfg["preferred"]);

	phpss_module_set_data("acl", "account", array());
	phpss_module_set_data("acl", "group", array());
}

// int phpss_acl_hook_check(str event, arr data)
// Performs checks for an account
function phpss_acl_hook_check($event, $data) {

	$sessiondata = phpss_get_session_data($data["sessionkey"]);
	$accountid = $sessiondata["accountid"];

	// check for account access
	$access = phpss_acl_get_account_access($accountid);

	// check for group access if account access unknown
	if ($access == PHPSS_ACL_UNKNOWN)
		$access = phpss_acl_get_group_access_multiple(phpss_get_account_groups($accountid));

	// if no access rules are found use access policy
	if ($access == PHPSS_ACL_UNKNOWN)
		$access = phpss_acl_get_policy();

	if ($access == PHPSS_ACL_DENY) {
		phpss_log("acl", PHPSS_LOG_NOTICE, "Access denied by acl");
		return "phpss_validate_acl_deny";
	}

}

// str phpss_acl_get_account_access(int accountid)
// Returns the access status for an account, or nothing if no access is set
function phpss_acl_get_account_access($accountid) {
	$accountacl = phpss_module_get_data("acl", "account");
	$access = isset($accountacl[$accountid]) ? $accountacl[$accountid] : PHPSS_ACL_UNKNOWN;
	return (phpss_acl_valid_access($access, true) ? $access : PHPSS_ACL_DENY);
}

// str phpss_acl_get_policy()
// Returns the current access policy
function phpss_acl_get_policy() {
	$access = phpss_module_get_data("acl", "policy");
	return (phpss_acl_valid_access($access) ? $access : PHPSS_ACL_DENY);
}

// str phpss_acl_get_group_access(int groupid)
// Returns the access status for a group, or PHPSS_ACL_UNKNOWN if not set
function phpss_acl_get_group_access($groupid) {
	$groupacl = phpss_module_get_data("acl", "group");
	$access = isset($groupacl[$groupid]) ? $groupacl[$groupid] : PHPSS_ACL_UNKNOWN;
	return (phpss_acl_valid_access($access, true) ? $access : PHPSS_ACL_DENY);
}

// str phpss_acl_get_group_access_multiple(arr groups)
// Returns an access for a set of groups (applies preferred access if conflicting)
function phpss_acl_get_group_access_multiple($groups) {

	$groupaccess = array();
	foreach($groups AS $groupid)
		if (($curgroupaccess = phpss_acl_get_group_access($groupid)) != PHPSS_ACL_UNKNOWN)
			$groupaccess[] = $curgroupaccess;

	$uniqueaccess = sizeof(array_unique($groupaccess));

	switch (true) {
		case $uniqueaccess > 1:
			return phpss_acl_get_preferred();

		case $uniqueaccess == 1:
			return $groupaccess[0];

		default:
			return PHPSS_ACL_UNKNOWN;
	}
}

// str phpss_acl_get_preferred()
// Returns the preferred access (for groups with conflicting access rules)
function phpss_acl_get_preferred() {
	$access = phpss_module_get_data("acl", "preferred");
	return (phpss_acl_valid_access($access) ? $access : PHPSS_ACL_DENY);
}

// void phpss_acl_set_account_access(int accountid, str access)
// Registers an account access status
function phpss_acl_set_account_access($accountid, $access) {

	if (phpss_acl_valid_access($access) == false)
		phpss_error("acl", "Invalid acl account access definition", "Access definition '" . $access . "' for account " . $accountid);

	$accountacl = &phpss_module_get_data("acl", "account");
	$accountacl[$accountid] = $access;
}

// void phpss_acl_set_group_access(int groupid, str access)
// Registers a group access status
function phpss_acl_set_group_access($groupid, $access) {

	if (phpss_acl_valid_access($access) == false)
		phpss_error("acl", "Invalid acl group access definition", "Access definition '" . $access . "' for group " . $groupid);

	$groupacl = &phpss_module_get_data("acl", "group");
	$groupacl[$groupid] = $access;
}

// void phpss_acl_set_policy(str access)
// Sets the acl policy for the page to either allow or deny
function phpss_acl_set_policy($access) {

	if (phpss_acl_valid_access($access) == false)
		phpss_error("acl", "Invalid acl policy definition", "Access definition '" . $access . "'");

	phpss_module_set_data("acl", "policy", $access);
}

// void phpss_acl_set_preferred(str access)
// Sets the preferred access
function phpss_acl_set_preferred($access) {

	if (phpss_acl_valid_access($access) == false)
		phpss_error("acl", "Invalid acl preferred access definition", "Access definition '" . $access . "'");

	phpss_module_set_data("acl", "preferred", $access);
}

// bool phpss_acl_valid_access(str access[, bool unknownvalid])
// Checks if an access definition is valid
function phpss_acl_valid_access($access, $unknownvalid = false) {
	return ($access == PHPSS_ACL_ALLOW || $access == PHPSS_ACL_DENY || ($unknownvalid == true &&$access == PHPSS_ACL_UNKNOWN) ? true : false);
}

?>
