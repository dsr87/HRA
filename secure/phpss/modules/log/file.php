<?php

/*
 * phpSecureSite 0.1.2 - file log module
 *
 * modules/log/file.php
 *
 * Log backend for passing data to a file or pipe
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

phpss_module_register("file", PHPSS_MODULE_LOG);

phpss_register_handler(PHPSS_HANDLER_LOG_MESSAGE, "phpss_log_file_message_handler");

phpss_event_register_hook(PHPSS_EVENT_SYSTEM_SHUTDOWN, "phpss_log_file_hook_shutdown");

phpss_module_set_default_config("file", array(
	"file"			=> "/var/log/phpss.log",
	"format"		=> "%T (module %m [%M]) %c: %l (%L) in %u [from %i account %a (%A) session %s (key %S)]\n"
), PHPSS_MODULE_LOG);

// void phpss_log_file_message_handler(str module, str moduletime, int class, int time, str sessionkey, str ip, str uri, str message, str info)
// Logs the event to a file or pipe
function phpss_log_file_message_handler($module, $moduletype, $class, $time, $sessionkey, $ip, $uri, $message, $info) {
	$cfg = phpss_module_get_config("file", PHPSS_MODULE_LOG);

	// parse the format string
	$logdata = phpss_log_file_parseformat($cfg["format"], $module, $moduletype, $class, $time, $sessionkey, $ip, $uri, $message, $info);

	phpss_log_file_write($cfg["file"], $logdata);
}

// void phpss_log_file_hook_shutdown(str event, arr data)
// cleans up
function phpss_log_file_hook_shutdown($event, $data) {
	phpss_log_file_close_fp();
}

// void phpss_log_file_close_fp()
// closes a file pointer
function phpss_log_file_close_fp() {
	$fp = &phpss_module_get_data("file", "filepointer", PHPSS_MODULE_LOG);
	if (is_resource($fp) == true)
		fclose($fp);
	phpss_module_set_data("file", "filepointer", false, PHPSS_MODULE_LOG);
}

// void phpss_log_file_open_fp(str file)
// opens a file pointer
function phpss_log_file_open_fp($file) {
	
	// determine file or pipe
	if (substr(trim($file), 0, 1) == "|") {

		$command = trim(substr($file, strpos($file, "|") + 1));

		$program = substr($command, 0, strpos($command, " "));

		if (is_executable($program) == false)
			phpss_error("file", "Unable to open log backend", "The program '" . $program . "' doesn't exist or isn't executable", PHPSS_MODULE_LOG);

		$fp = popen($command, "w");

	} else {

		if (($fp = fopen($file, "a")) == false)
			phpss_error("file", "Unable to open log backend", "Couldn't open the file '" . $file . "' in write mode", PHPSS_MODULE_LOG);
	}

	// store file pointer
	phpss_module_set_data("file", "filepointer", $fp, PHPSS_MODULE_LOG);
}

// str phpss_log_file_parseformat(str format, str module, str moduletype, int class, int time, str sessionkey, str ip, str uri, str message, str info)
// parses the format string and returns the log data
function phpss_log_file_parseformat($format, $module, $moduletype, $class, $time, $sessionkey, $ip, $uri, $message, $info) {

	if ($sessionkey != "")
		$sessiondata = phpss_get_session_data($sessionkey);
	
	if (isset($sessiondata["accountid"]) && $sessiondata["accountid"] > 0)
		$accountdata = phpss_get_account_data($sessiondata["accountid"]);

	// set up translation map
	$transmap = array(

		// percent sign (escape)
		"%%"	=> "%",

		// account id
		"%a"	=> (isset($accountdata["id"]) ? $accountdata["id"] : "0"),

		// account username
		"%A"	=> (isset($accountdata["username"]) ? $accountdata["username"] : "anonymous"),

		// log message class
		"%c"	=> phpss_log_class_name($class),

		// ip address
		"%i"	=> $ip,

		// log message
		"%l"	=> $message,

		// log info
		"%L"	=> $info,

		// module name
		"%m"	=> $module,

		// module type
		"%M"	=> $moduletype,

		// session id
		"%s"	=> (isset($sessiondata["id"]) ? $sessiondata["id"] : "?"),

		// session key
		"%S"	=> ($sessionkey != "" ? $sessionkey : "?"),

		// time, unix format
		"%t"	=> $time,
		
		// time, iso format
		"%T"	=> strftime("%Y-%m-%d %H:%M:%S", $time),

		// request uri
		"%u"	=> $uri
	);

	// parse data
	$logdata = strtr($format, $transmap);

	return $logdata;
}

// void phpss_log_file_write(str file, str data)
// writes the log data to a file pointer
function phpss_log_file_write($file, $data) {

	// fetch file pointer
	$fp = phpss_module_get_data("file", "filepointer", PHPSS_MODULE_LOG);
	if ($fp == false) {
		phpss_log_file_open_fp($file);
		$fp = phpss_module_get_data("file", "filepointer", PHPSS_MODULE_LOG);
	}

	// write log data
	if (fwrite($fp, $data) == false)
		phpss_error("file", "Couldn't write log entry", "", PHPSS_MODULE_LOG);
}

?>
