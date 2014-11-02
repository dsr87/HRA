<?php

/*
 * phpSecureSite 0.1.2 - Cache functions
 *
 * func/cache.php
 *
 * Cache subsystem functions
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

// void phpss_cache_clear(str module, str cachename[, str moduletype])
// clears a cache
function phpss_cache_clear($module, $cachename, $moduletype = PHPSS_MODULE_NORMAL) {
	if (phpss_cache_enabled() == false)
		return;

	$cache = &phpss_cache_get_struct($module, $moduletype);
	unset($cache[$cachename]);
}

// void phpss_cache_delete(str module, str cachename, mixed key[, str moduletype])
// removes a cache entry
function phpss_cache_delete($module, $cachename, $key, $moduletype = PHPSS_MODULE_NORMAL) {
	if (phpss_cache_enabled() == false)
		return;

	$cache = &phpss_cache_get_struct($module, $moduletype);
	unset($cache[$cachename][$key]);
}

// bool phpss_cache_enabled()
// checks if the cache system is enabled
function phpss_cache_enabled() {
	$cfg = phpss_module_get_config("phpss", PHPSS_MODULE_CORE);
	return $cfg["cache"] == true ? true : false;
}

// bool phpss_cache_exists(str module, str cachename, mixed key[, str moduletype])
// checks if a cache entry exists
function phpss_cache_exists($module, $cachename, $key, $moduletype = PHPSS_MODULE_NORMAL) {
	if (phpss_cache_enabled() == false)
		return false;

	$cache = &phpss_cache_get_struct($module, $moduletype);
	return isset($cache[$cachename][$key]);
}

// mixed phpss_cache_get(str module, str cachename, mixed key[, str moduletype])
// fetches a cache entry
function phpss_cache_get($module, $cachename, $key, $moduletype = PHPSS_MODULE_NORMAL) {
	if (phpss_cache_enabled() == false)
		return PHPSS_CACHE_NOTFOUND;

	$cache = &phpss_cache_get_struct($module, $moduletype);
	return (isset($cache[$cachename][$key]) ? $cache[$cachename][$key] : PHPSS_CACHE_NOTFOUND);
}

// arr phpss_cache_get_struct(str module, str moduletype)
// fetches the cache structure for a module
function phpss_cache_get_struct($module, $moduletype = PHPSS_MODULE_NORMAL) {
	$reg = &phpss_module_get_reg_struct($module, $moduletype);
	return $reg["cache"];
}

// mixed phpss_cache_search(str module, str cachename, mixed value[, str moduletype])
// searches the cache for a value, returns the key. only useful for simple
// key/value caches
function phpss_cache_search($module, $cachename, $value, $moduletype = PHPSS_MODULE_CORE) {
	if (phpss_cache_enabled() == false)
		return PHPSS_CACHE_NOTFOUND;

	$cache = &phpss_cache_get_struct($module, $moduletype);
	return isset($cache[$cachename]) == true ? array_search($value, $cache[$cachename]) : PHPSS_CACHE_NOTFOUND;
}

// void phpss_cache_set(str module, str cachename, mixed key, mixed data[, str moduletype])
// stores an entry with the cache system
function phpss_cache_set($module, $cachename, $key, $data, $moduletype = PHPSS_MODULE_NORMAL) {
	if (phpss_cache_enabled() == false)
		return;

	$cache = &phpss_cache_get_struct($module, $moduletype);

	if (isset($cache[$cachename]) == false || is_array($cache[$cachename]) == false)
		$cache[$cachename] = array();

	$cache[$cachename][$key] = $data;
}

?>
