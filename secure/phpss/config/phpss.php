<?php

/*
 * phpSecureSite 0.1.2 - core config
 *
 * config/phpss.php
 *
 * Configuration file for the phpSecureSite system. Detailed explanations
 * of config options is available in the documentation.
 *
 * Remember that configuration of database backends, authentication handlers
 * logging backends and modules is done in the files database.php,
 * authentication.php, logging.php and modules.php respectively.
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


// Error reporting options.

// here you can specify a function to handle error messages
$phpss_cfg["phpss"]["error_handler"]	= "";

// WARNING: when enabling any of the following options, extra information about
// your system will be provided which could be used to plan an attack.
// Only enable these when debugging a known problem, and do not leave
// any of these on during normal operation.

// displays additional information about an error, if available
$phpss_cfg["phpss"]["error_extrainfo"]	= false;

// include backtrace of error
$phpss_cfg["phpss"]["error_backtrace"]	= false;


// Enable cache system - caches data lookups, resulting in less database load
$phpss_cfg["phpss"]["cache"]		= true;


// Session cookie settings

// The name of the cookie
$phpss_cfg["phpss"]["cookie_name"]	= "sessionkey";

// The URL path under which the cookie is valid
$phpss_cfg["phpss"]["cookie_path"]	= "/";

// The domain where the cookie is valid (defaults to server hostname)
$phpss_cfg["phpss"]["cookie_domain"]	= "";


// load database, auth, log and module configuration
require(PHPSS_ROOT_FS . "/config/database.php");
require(PHPSS_ROOT_FS . "/config/authentication.php");
require(PHPSS_ROOT_FS . "/config/logging.php");
require(PHPSS_ROOT_FS . "/config/modules.php");

?>
