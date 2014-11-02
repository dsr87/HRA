<?php

/*
 * phpSecureSite 0.1.2 - Log functions
 *
 * func/log.php
 *
 * Log-related functions
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

// void phpss_error(str module, str error[, str info[, str type]])
// Prints an error message and exits. Info is any extra info which may help in
// solving the problem, and type is the type of module (defaults to
// a normal module)
function phpss_error($module, $error, $info = "", $type = PHPSS_MODULE_NORMAL) {
	$cfg = phpss_module_get_config("phpss", PHPSS_MODULE_CORE);

	// avoid loops
	static $called;
	if ($called == true)
		exit();
	$called = true;

	$trace = debug_backtrace();

	$errortext = "";
	$errortext = "<p>";
	$errortext .= ($cfg["error_handler"] == "" ? "<b>phpss error :</b> " : "");
	$errortext .= $error;
	$errortext .= ($cfg["error_extrainfo"] != "" && $info != "" ? " (" . $info . ")" : "");
	$errortext .= "</p>\n";
	$errortext .= ($cfg["error_extrainfo"] != "" ? "<p>Error received from module '" . $module . "' (type '" . $type . "')</p>\n" : "");
	$errortext .= ($cfg["error_extrainfo"] != "" ? "<p>Error occured in file <b>" . $trace[0]["file"] . "</b> somewhere around <b>line " . $trace[0]["line"] . "</b></p>\n" : "");

	if ($cfg["error_backtrace"] == true) {
		$errortext .= "<b>Error call backtrace:</b>\n";
		$errortext .= "<ul>\n";
		foreach($trace AS $t)
			$errortext .= "	<li><b>" . $t["function"] . "()</b> call in " . (isset($t["file"]) == false || $t["file"] == "" ? "unknown file" : "file <b>" . $t["file"] . "</b> on <b>line " . $t["line"] . "</b>" . "\n") . "</li>\n";
		$errortext .= "</ul>\n";
	}

	if ($cfg["error_handler"] == "") {
		print($errortext);
	} elseif (function_exists($cfg["error_handler"]) == false) {
		print("<b>phpss error</b>: invalid function set as error handler");
	} else {
		call_user_func($cfg["error_handler"], $errortext);
	}

	phpss_log($module, PHPSS_LOG_ERROR, $error, $info, $type);

	exit();
}

// void phpss_log(str module, int class, str message[, str info[, str type]])
// Sends a message to the log subsystem. Class is the message class, info is any
// extra info and type is the module type
function phpss_log($module, $class, $message, $info = "", $type = PHPSS_MODULE_NORMAL) {
	$cfg = phpss_module_get_config("phpss", PHPSS_MODULE_CORE);

	if ($cfg["log_enable"] == false)
		return;

	if (phpss_log_class_exists($class) == false)
		phpss_error("phpss", "Invalid class passed to log handler", "Class '" . $class . "', from module '" . $module . "'", PHPSS_MODULE_CORE);

	// always log event if log class config value is invalid
	if (phpss_log_class_exists($cfg["log_class"]) == true && $class > $cfg["log_class"])
		return;

	if($module != "phpss" && phpss_module_exists($module, $type) == false)
		phpss_error("phpss", "Log message received from unknown module", "Message '" . $message . "' received from module '" . $module . "'", PHPSS_MODULE_CORE);

	$sessionkey = phpss_fetch_sessionkey();
	@call_user_func(phpss_get_handler(PHPSS_HANDLER_LOG_MESSAGE), $module, $type, $class, date("U"), $sessionkey, $_SERVER["REMOTE_ADDR"], $_SERVER["REQUEST_URI"], $message, $info);
}

// bool phpss_log_class_exists(int class)
// Checks if a class exists
function phpss_log_class_exists($class) {
	return phpss_log_class_name($class) != false ? true : false;
}

// string phpss_log_class_name(int class)
// Returns the name of a log class, or false if the class doesn't exist
function phpss_log_class_name($class) {
	switch($class) {
		case PHPSS_LOG_INFO:	return "info";
		case PHPSS_LOG_NOTICE:	return "notice";
		case PHPSS_LOG_WARNING:	return "warning";
		case PHPSS_LOG_ERROR:	return "error";
		default: return false;
	}
}

?>
