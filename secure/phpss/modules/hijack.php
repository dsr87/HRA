<?php

/*
 * phpSecureSite 0.1.2 - Hijack module
 *
 * modules/hijack.php
 *
 * This module is a session hijacking countermeasure. It checks the IP
 * address from which a request comes, and denies access if the IP
 * is different from the address the session was created from.
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

phpss_module_register("hijack");

phpss_event_register_hook(PHPSS_EVENT_VALIDATE_CHECK, "phpss_hijack_hook_check");

// bool phpss_hijack_hook_check(str event, arr data)
// Main event handler, checks if a sessions ip has changed
function phpss_hijack_hook_check($event, $data) {

	$sessiondata = phpss_get_session_data($data["sessionkey"]);
	$ip = phpss_get_ip($sessiondata["ipid"]);

	if ($_SERVER["REMOTE_ADDR"] != $ip) {
		phpss_log("hijack", PHPSS_LOG_WARNING, "Possible session hijack attempt");
		return "phpss_validate_hijack_fail";
	}
}

?>
