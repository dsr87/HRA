<?php

/*
 * phpSecureSite 0.1.2 - database cleanup tool
 *
 * dbclean.php
 *
 * A command-line tool for cleaning the phpsecuresite database.
 * Should be run as a cron job once every night.
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

// configuration options
$config = array(

	// full path to phpsecuresite
	"phpss_path"	=> "/opt/phpsecuresite/phpss/phpss.php",


	// Number of idle hours before an active session is marked as
	// inactive, ie before any data may be removed for it.
	"idlelimit"	=> 72,

	// Whether to remove inactive sessions. This will give a great
	// performance gain when there are many entries in the phpss_session
	// table, but note that this will remove data which may be useful when
	// reading logs, or for historical reference.
	"removesessions"	=> false
);


// load phpsecuresite 
if (is_readable($config["phpss_path"]) == false)
	exit("Unable to load phpsecuresite from '" . $config["phpss_path"] . "', please set its full path in the config\n");
require($config["phpss_path"]);

// register tool as a module
phpss_module_register("dbclean", PHPSS_MODULE_TOOL);
phpss_module_set_config("dbclean", $config, PHPSS_MODULE_TOOL);


phpss_log("dbclean", PHPSS_LOG_NOTICE, "Database cleanup started", "", PHPSS_MODULE_TOOL);
phpss_dbclean_clean();
phpss_log("dbclean", PHPSS_LOG_NOTICE, "Database cleanup completed", "", PHPSS_MODULE_TOOL);

print("phpsecuresite database successfully cleaned\n");




// void phpss_dbclean_clean()
// performs the database cleanup
function phpss_dbclean_clean() {
	$cfg = phpss_module_get_config("dbclean", PHPSS_MODULE_TOOL);

	$sessions = phpss_dbclean_get_inactive_sessions($cfg["idlelimit"] * 60);

	phpss_event(PHPSS_EVENT_SYSTEM_DBCLEAN, array("sessions" => $sessions));

	if ($cfg["removesessions"] == true) {

		// remove inactive sessions
		foreach($sessions AS $s)
			phpss_db_query("DELETE FROM phpss_session WHERE id = '" . $s . "'");

	} else {

		// deactivate timed out sessions
		foreach($sessions AS $s)
			phpss_db_query("UPDATE phpss_session SET active = 'false' WHERE active = 'true' AND id = '" . $s . "'");
	}

	phpss_dbclean_remove_orphaned_account_group_links();
}


// arr phpss_db_clean_get_inactive_sessions(int idlelimit)
// returns a list of inactive or timed out sessions. idlelimit is the number
// of minutes a session may be idle before marked as inactive.
function phpss_dbclean_get_inactive_sessions($idlelimit) {

	$rs = phpss_db_query("SELECT id FROM phpss_session WHERE active = 'false' OR lastrequest < '" . (date("U") - $idlelimit) . "'");

	$sessions = array();
	foreach($rs AS $row)
		$sessions[] = $row[0];

	return $sessions;
}

// void phpss_db_clean_remove_orphaned_account_group_links()
// removes orphaned account/group links
function phpss_dbclean_remove_orphaned_account_group_links() {

	$query = "	SELECT
				phpss_account_group.accountfid,
				phpss_account_group.groupfid
			FROM
				phpss_account_group
				LEFT JOIN phpss_account ON phpss_account_group.accountfid = phpss_account.id
				LEFT JOIN phpss_group ON phpss_account_group.groupfid = phpss_group.id
			WHERE
				phpss_account.id IS NULL
				OR phpss_group.id IS NULL";
	$rs = phpss_db_query($query);

	foreach($rs AS $row)
		phpss_db_query("DELETE FROM phpss_account_group WHERE accountfid = '" . $row[0] . "' AND groupfid = '" . $row[1] . "'");
}

?>
