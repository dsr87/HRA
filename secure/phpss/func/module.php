<?php

/*
 * phpSecureSite 0.1.2 - Module functions
 *
 * func/module.php
 *
 * Functions for the module infrastructure
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

// bool phpss_module_exists(str module[, int type])
// Checks if a module has been registered
function phpss_module_exists($module, $type = PHPSS_MODULE_NORMAL) {
	global $phpss_reg;

	switch($type) {
		case PHPSS_MODULE_CORE:
			return true;

		case PHPSS_MODULE_NORMAL:
			return isset($phpss_reg["modules"][$module]);

		case PHPSS_MODULE_DATABASE:
			return $phpss_reg["backends"]["database"]["module"] == $module;

		case PHPSS_MODULE_AUTH:
			return $phpss_reg["backends"]["auth"]["module"] == $module;

		case PHPSS_MODULE_LOG:
			return $phpss_reg["backends"]["log"]["module"] == $module;

		case PHPSS_MODULE_TOOL:
			return isset($phpss_reg["tools"][$module]);

		default:
			phpss_error("phpss", "Unknown module type passed to phpss_module_exists()", "Module '" . $module . "', type '" . $type . "'", PHPSS_MODULE_CORE);
	}

}

// arr &phpss_module_get_config(str module, [, int type])
// Retrieves a modules configuration as an array
function &phpss_module_get_config($module, $type = PHPSS_MODULE_NORMAL) {
	$modulestruct = &phpss_module_get_reg_struct($module, $type);
	return $modulestruct["config"];
}

// mixed &phpss_module_get_data(str module, str name[, str type])
// Fetches a piece of data for a module
function &phpss_module_get_data($module, $name, $type = PHPSS_MODULE_NORMAL) {
	$modulestruct = &phpss_module_get_reg_struct($module, $type);

	if (isset($modulestruct["data"][$name]) == false)
		return false;

	return $modulestruct["data"][$name];
}

// array &phpss_module_get_reg_struct(str module[, int type])
// Returns a reference to the modules data structure in the registry
function &phpss_module_get_reg_struct($module, $type = PHPSS_MODULE_NORMAL) {
	global $phpss_reg;

	if (phpss_module_exists($module, $type) == false)
		phpss_error("phpss", "Module not found when fetching data registry", "Module '" . $module . "', type '" . $type . "'", PHPSS_MODULE_CORE);

	switch($type) {
		case PHPSS_MODULE_CORE:
			return $phpss_reg;

		case PHPSS_MODULE_NORMAL:
			return $phpss_reg["modules"][$module];

		case PHPSS_MODULE_AUTH:
			return $phpss_reg["backends"]["auth"];

		case PHPSS_MODULE_DATABASE:
			return $phpss_reg["backends"]["database"];

		case PHPSS_MODULE_LOG:
			return $phpss_reg["backends"]["log"];

		case PHPSS_MODULE_TOOL:
			return $phpss_reg["tools"][$module];
	}
}

// void phpss_module_load(str file[, str module[, arr config[, str type]]])
// Loads a module, can optionally register the modules configuration
// at the same time
function phpss_module_load($file, $module = "", $config = array(), $type = PHPSS_MODULE_NORMAL) {

	if (is_readable($file) == false)
		phpss_error("phpss", "Unable to load module", "Attempted to load " . ($module != "" ? "'" . $module . "' (type '" . $type . "')" : "unknown") . " module from file '" . $file . "'", PHPSS_MODULE_CORE);

	require($file);

	if (sizeof($config) > 0) {
		unset($config["enable"], $config["modulefile"]);
		phpss_module_set_config($module, $config, $type);
	}
}

// void phpss_module_register(str module[, int type])
// Registers a module, type indicates module type
function phpss_module_register($module, $type = PHPSS_MODULE_NORMAL) {
	global $phpss_reg;

	if (($type == PHPSS_MODULE_NORMAL || $type == PHPSS_MODULE_TOOL) && phpss_module_exists($module, $type) == true)
		phpss_error("phpss", "A module named '" . $module . "' is already loaded", "", PHPSS_MODULE_CORE);
	
	if ($type != PHPSS_MODULE_NORMAL && $type != PHPSS_MODULE_TOOL && phpss_module_type_loaded($type) == true)
		phpss_error("phpss", "A " . $type . " module already exists", "", PHPSS_MODULE_CORE);

	$template = array(
		"module"	=> $module,
		"cache"		=> array(),
		"config"	=> array(),
		"data"		=> array()
	);

	// register module
	switch($type) {
		case PHPSS_MODULE_NORMAL:
			$phpss_reg["modules"][$module] = $template;
			break;

		case PHPSS_MODULE_TOOL:
			$phpss_reg["tools"][$module] = $template;
			break;

		case PHPSS_MODULE_DATABASE:
			$phpss_reg["backends"]["database"] = $template;;
			break;

		case PHPSS_MODULE_AUTH:
			$phpss_reg["backends"]["auth"] = $template;
			break;

		case PHPSS_MODULE_LOG:
			$phpss_reg["backends"]["log"] = $template;
			break;
	}
}

// void phpss_module_set_config(str module, arr config[, int type])
// Stores a module configuration setting, does not overwrite existing
// keys which are not defined in the passed config
function phpss_module_set_config($module, $config, $type = PHPSS_MODULE_NORMAL) {
	$modulestruct = &phpss_module_get_reg_struct($module, $type);

	if (isset($modulestruct["config"]) == false || is_array($modulestruct["config"]) == false)
		$modulestruct["config"] = array();

	foreach($config AS $key => $value)
		$modulestruct["config"][$key] = $value;
}

// void phpss_module_set_data(str module, str name, mixed data[, str type])
// Stores a piece of data for a module
function phpss_module_set_data($module, $name, $data, $type = PHPSS_MODULE_NORMAL) {
	$modulestruct = &phpss_module_get_reg_struct($module, $type);
	$modulestruct["data"][$name] = $data;
}

// void phpss_module_set_default_config(str module, arr config[, int type])
// Sets a default configuration, sets all config options which are not found
// in the current config, but doesn't overwrite existing ones. Use as safeguard
// against missing settings in the config.
function phpss_module_set_default_config($module, $config, $type = PHPSS_MODULE_NORMAL) {
	$currentconfig = &phpss_module_get_config($module, $type);

	foreach($config AS $key => $value)
		if (isset($currentconfig[$key]) == false)
			$currentconfig[$key] = $value;
}

// bool phpss_module_type_loaded(int type)
// Checks if a module type has been loaded
function phpss_module_type_loaded($type) {
	global $phpss_reg;

	switch ($type) {
		case PHPSS_MODULE_CORE:
			return true;

		case PHPSS_MODULE_NORMAL:
			return sizeof($phpss_reg["modules"]) > 0;

		case PHPSS_MODULE_DATABASE:
			return isset($phpss_reg["backends"]["database"]["module"]);

		case PHPSS_MODULE_AUTH:
			return isset($phpss_reg["backends"]["auth"]["module"]);

		case PHPSS_MODULE_LOG:
			return isset($phpss_reg["backends"]["log"]["module"]);

		case PHPSS_MODULE_TOOL:
			return sizeof($phpss_reg["tools"]) > 0;

		default:
			phpss_error("phpss", "Invalid module type passed to phpss_module_type_loaded()", "Type '" . $type . "'", PHPSS_MODULE_CORE);
	}
}

?>
