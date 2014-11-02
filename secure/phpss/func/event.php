<?php

/*
 * phpSecureSite 0.1.2 - Event functions
 *
 * func/event.php
 *
 * Event-related functions
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

// mixed phpss_event(str event[, arr data])
// Emits an event, by calling all the event hooks in the order they
// were defined. The hooks are passed the data contained in $data.
// If a hook returns a value, the event will be aborted and the
// value returned to the caller.
function phpss_event($event, $data = array()) {
	global $phpss_reg;

	if (phpss_event_exists($event) == false)
		phpss_error("phpss", "Unable to emit event: event doesn't exist", "Event '" . $event . "'", PHPSS_MODULE_CORE);

	// run hooks. if a hook returns a value other than "" the event will be
	// aborted, and the value returned to the caller
	foreach($phpss_reg["events"][$event] AS $hook)
		if (($status = call_user_func($hook, $event, $data)) != "")
			return $status;
}

// bool phpss_event_exists(str event)
// Check if an event exists
function phpss_event_exists($event) {
	global $phpss_reg;
	return isset($phpss_reg["events"][$event]);
}

// void phpss_event_register_hook(str event, str hook)
// Registers an event hook, the hook parameter is the name of the
// hook function. Hooks will be called in the registered order when
// the event is emitted.
function phpss_event_register_hook($event, $hook) {
	global $phpss_reg;

	if (phpss_event_exists($event) == false)
		phpss_error("phpss", "No such event when registering hook", "Event '" . $event . "', hook '" . $hook . "'", PHPSS_MODULE_CORE);

	if (function_exists($hook) == false)
		phpss_error("phpss", "Function not found when registering event hook", "Attempted hook name is '" . $hook . "', for event '" . $event . "'", PHPSS_MODULE_CORE);

	$phpss_reg["events"][$event][] = $hook;
}

// str &phpss_get_handler(str handlertype[, bool hardfail])
// Returns the name of the function which is registered as a handler
function &phpss_get_handler($handlertype, $hardfail = true) {
	global $phpss_reg;

	if (isset($phpss_reg["handlers"][$handlertype]) == false) {
		if ($hardfail == true) {
			phpss_error("phpss", "Invalid handler type when getting handler", "Type '" . $handlertype . "'", PHPSS_MODULE_CORE);
		} else {
			return -1;
		}
	}

	return $phpss_reg["handlers"][$handlertype];
}

// bool phpss_handler_type_exists(str handler)
// Checks if a handler type exists (is valid)
function phpss_handler_type_exists($handler) {
	return phpss_get_handler($handler, false) == -1 ? false : true;
}

// void phpss_register_handler(str handlertype, str function)
// Registers a handler function
function phpss_register_handler($handlertype, $function) {

	if (function_exists($function) == false)
		phpss_error("phpss", "Non-existant function when registering handler", "Handler '" . $handlertype . "', function '" . $function . "'", PHPSS_MODULE_CORE);

	if (phpss_handler_type_exists($handlertype) == false)
		phpss_error("phpss", "Invalid handler type when registering handler", "Type '" . $handlertype . "'", PHPSS_MODULE_CORE);

	$handlerref = &phpss_get_handler($handlertype);
	$handlerref = $function;
}

?>
