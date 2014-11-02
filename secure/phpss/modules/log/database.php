<?php

/*
 * phpSecureSite 0.1.2 - database log module
 *
 * modules/log/database.php
 *
 * Log backend for logging to a database, uses the phpSecureSite database
 * and database connection
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

phpss_module_register("database", PHPSS_MODULE_LOG);

phpss_register_handler(PHPSS_HANDLER_LOG_MESSAGE, "phpss_log_database_message_handler");

// void phpss_log_database_message_handler(str module, int moduletype, int class, str time, str sessionkey, str ip, str uri, str message, str info)
// writes log data to a database table
function phpss_log_database_message_handler($module, $moduletype, $class, $time, $sessionkey, $ip, $uri, $message, $info) {

	$sessiondata = phpss_get_session_data($sessionkey);
	if ($sessiondata["id"] == "") {
		$sessionid = "NULL";
		$accountid = "NULL";
	} else {
		$sessionid = "'" . phpss_db_escape_string($sessiondata["id"]) . "'";
		$accountid = "'" . phpss_db_escape_string($sessiondata["accountid"]) . "'";
	}

	$ipid = phpss_get_ip_id($ip);
	$classname = phpss_log_class_name($class);

	$query = "	INSERT INTO
				phpss_log
			(
				time,
				class,
				sessionfid,
				accountfid,
				ipfid,
				module,
				moduletype,
				uri,
				message,
				info
			) VALUES (
				'" . phpss_db_escape_string($time) . "',
				'" . phpss_db_escape_string($classname) . "',
				" . $sessionid . ",
				" . $accountid . ",
				'" . phpss_db_escape_string($ipid) . "',
				'" . phpss_db_escape_string($module) . "',
				'" . phpss_db_escape_string($moduletype) . "',
				'" . phpss_db_escape_string($uri) . "',
				'" . phpss_db_escape_string($message) . "',
				'" . phpss_db_escape_string($info) . "'
			)";
	phpss_db_query($query);
}

?>
