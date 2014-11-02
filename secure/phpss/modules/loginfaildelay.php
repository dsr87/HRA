<?php

/*
 * phpSecureSite 0.1.2 - Loginfaildelay module
 *
 * modules/loginfaildelay.php
 *
 * This module attempts to slow down brute force account attacks and
 * password guessing by creating a delay before the login denied message
 * is displayed.
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

phpss_module_register("loginfaildelay");

phpss_event_register_hook(PHPSS_EVENT_LOGIN_FAIL, "phpss_loginfaildelay_hook_fail");

phpss_module_set_default_config("loginfaildelay", array(
	"delay"		=> 3
));

// void phpss_loginfaildelay_hook_fail(str event, arr data)
// Delays "login failed" messages
function phpss_loginfaildelay_hook_fail($event, $data) {
	$cfg = phpss_module_get_config("loginfaildelay");
	sleep($cfg["delay"]);
}

?>
