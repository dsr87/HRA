<?php

/*
 * phpSecureSite 0.1.2 - syslog log module
 *
 * modules/log/syslog.php
 *
 * Log backend for logging to the UNIX syslog (or the event log on
 * windows). Log priorities are currently not implemented, LOG_INFO
 * is always used.
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

phpss_module_register("syslog", PHPSS_MODULE_LOG);

phpss_register_handler(PHPSS_HANDLER_LOG_MESSAGE, "phpss_log_syslog_handler");

phpss_event_register_hook(PHPSS_EVENT_SYSTEM_INIT, "phpss_log_syslog_hook_init");

phpss_module_set_default_config("syslog", array(
	"facility"		=> LOG_AUTHPRIV
), PHPSS_MODULE_LOG);

// void phpss_log_syslog_handler(str module, str moduletype, int class, str time, str sessionkey, str ip, str uri, str message, str info)
// sends a log message to the syslog
function phpss_log_syslog_handler($module, $moduletype, $class, $time, $sessionkey, $ip, $uri, $message, $info) {
	$cfg = phpss_module_get_config("syslog", PHPSS_MODULE_LOG);

	if (openlog("phpss", (LOG_NDELAY | LOG_PID), $cfg["facility"]) == false)
		phpss_error("syslog", "Unable to open log backend", "Failed to open syslog backend", PHPSS_MODULE_LOG);

	$loglevel = phpss_log_syslog_get_log_level($class);
	$sessiondata = phpss_get_session_data($sessionkey);

	if (is_array($sessiondata) && $sessiondata["accountid"] > 0)
		$accountdata = phpss_get_account_data($sessiondata["accountid"]);

	$entry = "(module " . $module . " [" . $moduletype . "]) " . phpss_log_class_name($class) . ": ";
	$entry .= $message . " (" . $info . ") in " . $uri . " ";
	$entry .= "[from " . $ip . " account " . (isset($accountdata["id"]) ? $accountdata["id"] : "0") . " (" . (isset($accountdata["username"]) ? $accountdata["username"] : "anonymous") . ") session " . (is_array($sessiondata) ? $sessiondata["id"] : "?") . " (key " . ($sessionkey != "" ? $sessionkey : "?") . ")]";

	syslog($loglevel, $entry);

	closelog();
}

// void phpss_log_syslog_hook_init(str event, arr data)
// initializes the syslog system
function phpss_log_syslog_hook_init($event, $data) {
	define_syslog_variables();
}

// int phpss_log_syslog_get_log_level(int class)
// returns the syslog log level for a class
function phpss_log_syslog_get_log_level($class) {

	switch($class) {
		case PHPSS_LOG_INFO:
			return LOG_INFO;

		case PHPSS_LOG_NOTICE:
			return LOG_NOTICE;

		case PHPSS_LOG_WARNING:
			return LOG_WARN;

		case PHPSS_LOG_ERROR:
			return LOG_ERROR;
	}
}

?>
