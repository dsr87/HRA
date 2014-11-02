<?php

/*
 * phpSecureSite 0.1.2 - Timeout module
 *
 * modules/timeout.php
 *
 * Session timeout module
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

phpss_module_register("timeout");

phpss_event_register_hook(PHPSS_EVENT_VALIDATE_CHECK, "phpss_timeout_hook_check");

phpss_module_set_default_config("timeout", array(
	"timeout"	=> 20
));

// int phpss_timeout_hook_check(str event, arr data)
// Checks if a session has been idle for too long
function phpss_timeout_hook_check($event, $data) {
	$cfg = phpss_module_get_config("timeout");

	$timeout = $cfg["timeout"];

	$sessiondata = phpss_get_session_data($data["sessionkey"]);
	$lastreq = $sessiondata["lastrequest"];
	$now = date("U");

	$diff = $now - $lastreq;

	if ($diff > $timeout * 60) {
		phpss_log("timeout", PHPSS_LOG_NOTICE, "Request from timed-out session");
		return "phpss_validate_timeout_fail";
	}
}

?>
