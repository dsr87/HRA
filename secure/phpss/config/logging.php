<?php

/*
 * phpSecureSite 0.1.2 - log config
 *
 * config/logging.php
 *
 * Configuration file for log modules. Detailed explanations of config options
 * and modules are available in the documentation. Log backend modules takes
 * care of storing log messages.
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

// Enable logging?
$phpss_cfg["phpss"]["log_enable"]	= true;

// Name of the log module to use
$phpss_cfg["phpss"]["log_module"]	= "database";

// Set the message class to log. All messages from this class or a more
// severe class will be logged, while less severe messages will be ignored.
// The log classes are (from least to most severe):
//
// PHPSS_LOG_INFO    : informational messages (user login/logout etc)
// PHPSS_LOG_NOTICE  : significant but normal messages (db cleanups etc)
// PHPSS_LOG_WARNING : warnings (session hijack attempts etc)
// PHPSS_LOG_ERROR   : system errors (database connection failures etc)
$phpss_cfg["phpss"]["log_class"] = PHPSS_LOG_INFO;



/*
 * database log module - logs to the phpsecuresite database
 *
 * Log entries are stored in the phpss_log table, which is part of the
 * phpSecureSite database.
 *
*/

$phpss_cfg["log"]["database"] = array(
	"modulefile"		=> PHPSS_ROOT_FS . "/modules/log/database.php"

	// no config options, it just works
);




/*
 * file log module - sends log data to a file or pipe
 *
 * Log entries are passed to a file, or to a command through a pipe.
 * The format of log data can be specified.
 *
*/

$phpss_cfg["log"]["file"] = array(
	"modulefile"		=> PHPSS_ROOT_FS . "/modules/log/file.php",

	// the file to send log data to. you can specify a pipe to
	// pass it to a program by starting with the | symbol - for
	// example "| /bin/cat >> /tmp/phpsslog"
	"file"			=> "/var/log/phpss.log",

	// the format of the log data. valid identifiers are:
	//
	// %% : A percent sign
	// %a : Account id (0 if not logged in)
	// %A : Account name (username)
	// %c : Log class
	// %i : IP address of the client
	// %l : Log message
	// %L : Extra information
	// %m : Module which sent the message
	// %M : Type of module
	// %s : Session id
	// %S : Session key
	// %t : Time in UNIX timestamp format
	// %T : Time in ISO format
	// %u : Page URI
	"format"		=> "%T (module %m [%M]) %c: %l (%L) in %u [from %i account %a (%A) session %s (key %S)]\n"
);



/*
 * syslog log module - logs to the unix syslog
 *
 * Log entries are sent to the UNIX syslog system. On Windows, this might
 * (according to the PHP website) log to the event logger, but this has never
 * been tested. 
 *
*/

$phpss_cfg["log"]["syslog"] = array(
	"modulefile"		=> PHPSS_ROOT_FS . "/modules/log/syslog.php",

	// Log facility to use (see syslog(3) man page for info)
	"facility"		=> LOG_AUTHPRIV
);

?>
