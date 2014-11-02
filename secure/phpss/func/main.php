<?php

/*
 * phpSecureSite 0.1.2 - Main functions
 *
 * func/main.php
 *
 * Main phpSecureSite functions
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

// void phpss_init()
// Initializes phpSecureSite
function phpss_init() {
	phpss_db_connect();
	phpss_event(PHPSS_EVENT_SYSTEM_INIT);
}

// str phpss_login(str username, str password)
// Attempts to log a user in, and creates a session if successful
function phpss_login($username, $password) {

	// destroy session if present (left from earlier)
	phpss_destroy_session_cookie();

	if (($status = phpss_event(PHPSS_EVENT_LOGIN_PRE, array("username" => $username, "password" => $password))) != "")
		return $status;

	// attempt to authenticate user
	if (($accountid  = phpss_authenticate($username, $password)) == false) {
		$status = "phpss_login_authfail";
		phpss_log("phpss", PHPSS_LOG_NOTICE, "Login failed", "Username '" . $username . "'", PHPSS_MODULE_CORE);
	}

	if ($status != false || ($status = phpss_event(PHPSS_EVENT_LOGIN_AUTH, array("username" => $username, "password" => $password, "accountid" => $accountid))) != false) {
		phpss_event(PHPSS_EVENT_LOGIN_FAIL, array("username" => $username, "password" => $password));
		return $status;
	}

	$sessionkey = phpss_create_session($accountid);

	global $phpss_sessionkey, $phpss_account;
	$phpss_account = $accountid;
	$phpss_sessionkey = $sessionkey;

	phpss_log("phpss", PHPSS_LOG_INFO, "User login", "", PHPSS_MODULE_CORE);
	if (($status = phpss_event(PHPSS_EVENT_LOGIN_SUCCESS, array("accountid" => $accountid))) != false)
		return $status;

	return "phpss_login_allow";
}

// void phpss_logout()
// Logs a user out
function phpss_logout() {

	$sessionkey = phpss_fetch_sessionkey();

	phpss_event(PHPSS_EVENT_LOGOUT_PRE, array("sessionkey" => $sessionkey));

	// send log message before destroying session, so that the session data
	// is available in the log message
	phpss_log("phpss", PHPSS_LOG_INFO, "User logout", "", PHPSS_MODULE_CORE);
	phpss_destroy_session($sessionkey);

	phpss_event(PHPSS_EVENT_LOGOUT_POST, array("sessionkey" => $sessionkey));
}

// void phpss_setup()
// Sets up phpsecuresite
function phpss_setup() {
	global $phpss_reg;

	// module types
	define("PHPSS_MODULE_CORE", "core");
	define("PHPSS_MODULE_NORMAL", "normal");
	define("PHPSS_MODULE_DATABASE", "database");
	define("PHPSS_MODULE_AUTH", "auth");
	define("PHPSS_MODULE_LOG", "log");
	define("PHPSS_MODULE_TOOL", "tool");

	// events
	define("PHPSS_EVENT_SYSTEM_INIT", "system_init");
	define("PHPSS_EVENT_SYSTEM_DBCLEAN", "system_dbclean");
	define("PHPSS_EVENT_SYSTEM_SHUTDOWN", "system_shutdown");
	define("PHPSS_EVENT_LOGIN_PRE", "login_pre");
	define("PHPSS_EVENT_LOGIN_AUTH", "login_auth");
	define("PHPSS_EVENT_LOGIN_FAIL", "login_fail");
	define("PHPSS_EVENT_LOGIN_SUCCESS", "login_success");
	define("PHPSS_EVENT_VALIDATE_PRE", "validate_pre");
	define("PHPSS_EVENT_VALIDATE_CHECK", "validate_check");
	define("PHPSS_EVENT_VALIDATE_FAIL", "validate_fail");
	define("PHPSS_EVENT_VALIDATE_SUCCESS", "validate_success");
	define("PHPSS_EVENT_LOGOUT_PRE", "logout_pre");
	define("PHPSS_EVENT_LOGOUT_POST", "logout_post");

	// handler types
	define("PHPSS_HANDLER_DB_CLOSE", "database_close");
	define("PHPSS_HANDLER_DB_CONNECT", "database_connect");
	define("PHPSS_HANDLER_DB_ESCAPESTRING", "database_escapestring");
	define("PHPSS_HANDLER_DB_QUERY", "database_query");

	define("PHPSS_HANDLER_AUTH_AUTHENTICATE", "auth_authenticate");
	define("PHPSS_HANDLER_AUTH_ACCOUNTDATA", "auth_accountdata");
	define("PHPSS_HANDLER_AUTH_GROUPDATA", "auth_groupdata");
	define("PHPSS_HANDLER_AUTH_ACCOUNTGROUPS", "auth_accountgroups");
	define("PHPSS_HANDLER_AUTH_ACCOUNTID", "auth_accountid");
	define("PHPSS_HANDLER_AUTH_GROUPID", "auth_groupid");

	define("PHPSS_HANDLER_LOG_MESSAGE", "log_message");

	// log classes
	define("PHPSS_LOG_ERROR", 1);
	define("PHPSS_LOG_WARNING", 2);
	define("PHPSS_LOG_NOTICE", 3);
	define("PHPSS_LOG_INFO", 4);

	// cache types
	define("PHPSS_CACHE_ACCOUNTDATA", "accountdata");
	define("PHPSS_CACHE_ACCOUNTGROUPS", "accountgroups");
	define("PHPSS_CACHE_ACCOUNTID", "accountid");
	define("PHPSS_CACHE_GROUPDATA", "groupdata");
	define("PHPSS_CACHE_GROUPID", "groupid");
	define("PHPSS_CACHE_IPID", "ipid");
	define("PHPSS_CACHE_SESSIONDATA", "sessiondata");

	// value returned when item is not found in cache.
	// may clash with stored value, but if so will only
	// result in a database lookup
	define("PHPSS_CACHE_NOTFOUND", -189471305);

	$phpss_reg = array(

		"backends"	=> array(
			PHPSS_MODULE_AUTH		=> array(),
			PHPSS_MODULE_DATABASE		=> array(),
			PHPSS_MODULE_LOG		=> array()
		),

		"cache"		=> array(),

		"config"	=> array(),

		"events"	=> array(
			PHPSS_EVENT_SYSTEM_INIT		=> array(),
			PHPSS_EVENT_SYSTEM_DBCLEAN	=> array(),
			PHPSS_EVENT_SYSTEM_SHUTDOWN	=> array(),
			PHPSS_EVENT_LOGIN_PRE		=> array(),
			PHPSS_EVENT_LOGIN_AUTH		=> array(),
			PHPSS_EVENT_LOGIN_FAIL		=> array(),
			PHPSS_EVENT_LOGIN_SUCCESS	=> array(),
			PHPSS_EVENT_VALIDATE_PRE	=> array(),
			PHPSS_EVENT_VALIDATE_CHECK	=> array(),
			PHPSS_EVENT_VALIDATE_FAIL	=> array(),
			PHPSS_EVENT_VALIDATE_SUCCESS	=> array(),
			PHPSS_EVENT_LOGOUT_PRE		=> array(),
			PHPSS_EVENT_LOGOUT_POST		=> array()
		),

		"handlers"	=> array(
			PHPSS_HANDLER_AUTH_AUTHENTICATE	=> "",
			PHPSS_HANDLER_AUTH_ACCOUNTDATA	=> "",
			PHPSS_HANDLER_AUTH_ACCOUNTGROUPS	=> "",
			PHPSS_HANDLER_AUTH_ACCOUNTID	=> "",
			PHPSS_HANDLER_AUTH_GROUPDATA	=> "",
			PHPSS_HANDLER_AUTH_GROUPID	=> "",

			PHPSS_HANDLER_DB_CLOSE		=> "",
			PHPSS_HANDLER_DB_CONNECT	=> "",
			PHPSS_HANDLER_DB_ESCAPESTRING	=> "",
			PHPSS_HANDLER_DB_QUERY		=> "",

			PHPSS_HANDLER_LOG_MESSAGE	=> ""
		),

		"modules"	=> array(),

		"tools"		=> array()

	);


	// load configuration
	require(defined("PHPSS_CONFIGFILE") ? PHPSS_CONFIGFILE : PHPSS_ROOT_FS . "/config/phpss.php");

	phpss_module_set_config("phpss", $phpss_cfg["phpss"], PHPSS_MODULE_CORE);

	phpss_module_set_default_config("phpss", array(
		"auth_module"		=> "database",
		"auth_pwtype"		=> "md5",

		"cache"			=> true,

		"cookie_name"		=> "sessionkey",
		"cookie_path"		=> "/",
		"cookie_domain"		=> "",

		"database_module"	=> "mysql",

		"error_handler"		=> "",
		"error_extrainfo"	=> false,
		"error_backtrace"	=> false,

		"log_enable"		=> false,
		"log_module"		=> "database",
		"log_class"		=> PHPSS_LOG_INFO
	), PHPSS_MODULE_CORE);

	$coreconfig = phpss_module_get_config("phpss", PHPSS_MODULE_CORE);

	// load backends
	foreach(array(PHPSS_MODULE_AUTH, PHPSS_MODULE_DATABASE, PHPSS_MODULE_LOG) AS $backend) {

		if ($backend == PHPSS_MODULE_LOG && $coreconfig["log_enable"] == false)
			continue;

		$module = $coreconfig[$backend . "_module"];
		phpss_module_load($phpss_cfg[$backend][$module]["modulefile"], $module, $phpss_cfg[$backend][$module], $backend);
	}

	// load normal modules
	foreach($phpss_cfg["module"] AS $module => $moduleconfig) {

		if ($moduleconfig["enable"] == false)
			continue;

		phpss_module_load($moduleconfig["modulefile"], $module, $moduleconfig);
	}

	// load extra modules
	if (is_array($phpss_cfg["extramodules"]) == true)
		foreach($phpss_cfg["extramodules"] AS $module)
			phpss_module_load($module);

	register_shutdown_function("phpss_shutdown");
}

// void phpss_shutdown()
// Called when script execution is completed, during the php shutdown phase
function phpss_shutdown() {
	phpss_db_close();
	phpss_event(PHPSS_EVENT_SYSTEM_SHUTDOWN);
}

// str phpss_validate()
// Makes sure the session is valid, and sets a few vars if so.
function phpss_validate() {

	$sessionkey = phpss_fetch_sessionkey();
	if (($status = phpss_event(PHPSS_EVENT_VALIDATE_PRE, array("sessionkey" => $sessionkey))) != false)
		return $status;

	$sessiondata = ($sessionkey != "" ? phpss_get_session_data($sessionkey) : false);

	if ($sessiondata == false || $sessiondata["active"] == false) {
		$status = "phpss_validate_nosession";
		phpss_log("phpss", PHPSS_LOG_NOTICE, "Invalid session", "", PHPSS_MODULE_CORE);
	}

	if ($status != false || ($status = phpss_event(PHPSS_EVENT_VALIDATE_CHECK, array("sessionkey" => $sessionkey))) != false) {
		phpss_event(PHPSS_EVENT_VALIDATE_FAIL);
		return $status;
	}

	// set last request timestamp to current time
	phpss_set_session_lastrequest($sessionkey, date("U"));

	global $phpss_sessionkey, $phpss_account;
	$phpss_sessionkey = $sessionkey;
	$phpss_account = $sessiondata["accountid"];

	if (($status = phpss_event(PHPSS_EVENT_VALIDATE_SUCCESS, array("sessionkey" => $sessionkey))) != false)
		return $status;

	return "phpss_validate_allow";
}

?>
