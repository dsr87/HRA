<?php

/*
 * phpSecureSite 0.1.2 - Session functions
 *
 * func/session.php
 *
 * Functions related to session generation / validation
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


// str phpss_create_session(int accountid)
// creates a session for the specified account (sets cookie etc)
function phpss_create_session($accountid) {
	
	$sessionkey = phpss_generate_sessionkey();

	phpss_db_query("	INSERT INTO
					phpss_session
				(
					sessionkey,
					accountfid,
					ipfid,
					created,
					lastrequest,
					active
				) VALUES (
					'" . phpss_db_escape_string($sessionkey) . "',
					'" . phpss_db_escape_string($accountid) . "',
					'" . phpss_db_escape_string(phpss_get_ip_id($_SERVER["REMOTE_ADDR"])) . "',
					'" . phpss_db_escape_string(date("U")) . "',
					'" . phpss_db_escape_string(date("U")) . "',
					1
				)");

	phpss_create_session_cookie($sessionkey);

	return $sessionkey;
}

// void phpss_create_session_cookie(str sessionkey)
// creates a session cookie
function phpss_create_session_cookie($sessionkey) {
	$cfg = phpss_module_get_config("phpss", PHPSS_MODULE_CORE);
	setcookie($cfg["cookie_name"], $sessionkey, 0, $cfg["cookie_path"], $cfg["cookie_domain"], 0);
	$_COOKIE[$cfg["cookie_name"]] = $sessionkey;
}

// void phpss_destroy_session(str sessionkey)
// destroys a session
function phpss_destroy_session($sessionkey) {
	phpss_destroy_session_cookie();
	phpss_db_query("UPDATE phpss_session SET active = 0 WHERE sessionkey = '" . phpss_db_escape_string($sessionkey) . "'");
}

// void phpss_destroy_session_cookie()
// destroys the session cookie
function phpss_destroy_session_cookie() {
	$cfg = phpss_module_get_config("phpss", PHPSS_MODULE_CORE);

	if (isset($_COOKIE[$cfg["cookie_name"]]) == true) {
		setcookie($cfg["cookie_name"], "", 1, $cfg["cookie_path"], $cfg["cookie_domain"], 0);
		unset($_COOKIE[$cfg["cookie_name"]]);
	}
}

// str phpss_fetch_sessionkey()
// retreives the session key from the cookie, or false if not found
function phpss_fetch_sessionkey() {
	$cfg = phpss_module_get_config("phpss", PHPSS_MODULE_CORE);
	return isset($_COOKIE[$cfg["cookie_name"]]) == true ? $_COOKIE[$cfg["cookie_name"]] : false;
}

// str phpss_generate_sessionkey()
// generates a unique, unused session key
function phpss_generate_sessionkey() {
	
	// generate a new key until an unused one is found
	do {
		$key = md5(uniqid(rand()));	// generate a 32-byte session key
		$rs = phpss_db_query("SELECT COUNT(id) FROM phpss_session WHERE sessionkey = '" . phpss_db_escape_string($key) . "'");
	} while($rs[0][0] > 0);

	return $key;
}

// arr phpss_get_session_data(str sessionkey)
// returns an array of data about the session, or false if the session doesn't exist
function phpss_get_session_data($sessionkey) {

	// check in cache
	if (($data = phpss_cache_get("phpss", PHPSS_CACHE_SESSIONDATA, $sessionkey, PHPSS_MODULE_CORE)) != PHPSS_CACHE_NOTFOUND)
		return $data;

	// fetch data from database
	$query = "	SELECT
				id,
				sessionkey,
				accountfid,
				ipfid,
				created,
				lastrequest,
				active
			FROM
				phpss_session
			WHERE
				sessionkey = '" . phpss_db_escape_string($sessionkey) . "'";
	$rs = phpss_db_query($query);

	if (sizeof($rs) > 0) {
		$data = array(
			"id"		=> $rs[0][0],
			"sessionkey"	=> $rs[0][1],
			"accountid"	=> $rs[0][2],
			"ipid"		=> $rs[0][3],
			"created"	=> $rs[0][4],
			"lastrequest"	=> $rs[0][5],
			"active"	=> ($rs[0][6] > 0 ? true : false)
		);
	} else {
		$data = false;
	}

	// store result in cache
	phpss_cache_set("phpss", PHPSS_CACHE_SESSIONDATA, $sessionkey, $data, PHPSS_MODULE_CORE);

	return $data;
}

// void phpss_set_session_lastrequest([str sessionkey[, int time])
// sets the last request time for a session
function phpss_set_session_lastrequest($sessionkey = "", $time = 0) {

	if ($sessionkey == false)
		$sessionkey = phpss_fetch_sessionkey();

	if ($time == false)
		$time = date("U");

	phpss_db_query("UPDATE phpss_session SET lastrequest = '" . phpss_db_escape_string($time) . "' WHERE sessionkey = '" . phpss_db_escape_string($sessionkey) . "'");

	// update cache
	$cachedata = phpss_cache_get("phpss", PHPSS_CACHE_SESSIONDATA, $sessionkey, PHPSS_MODULE_CORE);
	if ($cachedata != PHPSS_CACHE_NOTFOUND) {
		$cachedata["lastrequest"] = $time;
		phpss_cache_set("phpss", PHPSS_CACHE_SESSIONDATA, $sessionkey, $cachedata, PHPSS_MODULE_CORE);
	}
}

?>
