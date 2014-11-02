<?php

/*
 * phpSecureSite 0.1.2 - Misc functions
 *
 * func/misc.php
 *
 * Miscellaneous functions
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

// str phpss_encrypt_mysql(str string)
// Generates a hash using mysqls password() algorithm
function phpss_encrypt_mysql($string) {

	$magic = 1345345333;
	$moremagic = 0x12345671;
	$add = 7;

	for ($idx = 0; $idx < strlen($string); $idx++) {

		$char = $string[$idx];

		if ($char == " " || $char == "\t")
			continue;

		$ascii = ord($char);

		$magic = $magic ^ (((($magic & 63) + $add) * $ascii) + ($magic << 8));
		$moremagic = $moremagic + (($moremagic << 8) ^ $magic);
		$add = $add + $ascii;
	}

	$hash = str_pad(dechex($magic & ((1 << 31) - 1)), 8, "0", STR_PAD_LEFT) . str_pad(dechex($moremagic & ((1 << 31) - 1)), 8, "0", STR_PAD_LEFT);

	return $hash;
}

// str phpss_get_ip(int id)
// fetches an ip address based on its database id
function phpss_get_ip($id) {

	if (($ip = phpss_cache_search("phpss", PHPSS_CACHE_IPID, $id, PHPSS_MODULE_CORE)) != PHPSS_CACHE_NOTFOUND && $ip != false)
		return $ip;

	$rs = phpss_db_query("SELECT ip FROM phpss_ip WHERE id = '" . phpss_db_escape_string($id) . "'");
	$ip = sizeof($rs) > 0 ? $rs[0][0] : false;

	phpss_cache_set("phpss", PHPSS_CACHE_IPID, $ip, $id, PHPSS_MODULE_CORE);

	return $ip;
}

// int phpss_get_ip_id(str ip[, bool autoreg])
// Fetches the id of an ip-address
function phpss_get_ip_id($ip, $autoreg = true) {

	if (($id = phpss_cache_get("phpss", PHPSS_CACHE_IPID, $ip, PHPSS_MODULE_CORE)) != PHPSS_CACHE_NOTFOUND)
		return $id;

	$rs = phpss_db_query("SELECT id AS ipid FROM phpss_ip WHERE ip = '" . phpss_db_escape_string($ip) . "'");

	if ($autoreg == true && sizeof($rs) == 0) {
		phpss_register_ip($ip);
		$rs = phpss_db_query("SELECT id AS ipid FROM phpss_ip WHERE ip = '" . phpss_db_escape_string($ip) . "'");
	}

	phpss_cache_set("phpss", PHPSS_CACHE_IPID, $ip, $rs[0][0], PHPSS_MODULE_CORE);

	return $rs[0][0];
}

// void phpss_register_ip(str ip)
// creates a new ip address entry
function phpss_register_ip($ip) {
	phpss_db_query("INSERT INTO phpss_ip (ip) VALUES ('" . phpss_db_escape_string($ip) . "')");
}

?>
