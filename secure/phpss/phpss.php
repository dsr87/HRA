<?php

/*
 * phpSecureSite 0.1.2 - Main phpSecureSite file
 *
 * phpss.php
 *
 * This file initializes the phpSecureSite system for use.
 * It must be included on every page the system is to be used for
 * (preferrably through a global-include).
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

// set filesystem root
define("PHPSS_ROOT_FS", dirname(__FILE__));

require(PHPSS_ROOT_FS . "/func/auth.php");
require(PHPSS_ROOT_FS . "/func/cache.php");
require(PHPSS_ROOT_FS . "/func/database.php");
require(PHPSS_ROOT_FS . "/func/event.php");
require(PHPSS_ROOT_FS . "/func/log.php");
require(PHPSS_ROOT_FS . "/func/main.php");
require(PHPSS_ROOT_FS . "/func/misc.php");
require(PHPSS_ROOT_FS . "/func/module.php");
require(PHPSS_ROOT_FS . "/func/session.php");

phpss_setup();

if (defined("PHPSS_NOINIT") == false || PHPSS_NOINIT == false)
	phpss_init();

?>
