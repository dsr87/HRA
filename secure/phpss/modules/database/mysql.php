<?php

/*
 * phpSecureSite 0.1.2 - mysql auth module
 *
 * modules/database/mysql.php
 *
 * MySQL database backend module. Allows you to use a MySQL
 * database for data storage.
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

phpss_module_register("mysql", PHPSS_MODULE_DATABASE);

phpss_register_handler(PHPSS_HANDLER_DB_CLOSE, "phpss_database_mysql_close");
phpss_register_handler(PHPSS_HANDLER_DB_CONNECT, "phpss_database_mysql_connect");
phpss_register_handler(PHPSS_HANDLER_DB_ESCAPESTRING, "phpss_database_mysql_escape_string");
phpss_register_handler(PHPSS_HANDLER_DB_QUERY, "phpss_database_mysql_query");

phpss_module_set_default_config("mysql", array(
	"hostname"		=> "localhost",
	"port"			=> 3306,
	"username"		=> "notroot",
	"password"		=> "secret",
	"database"		=> "phpss"
), PHPSS_MODULE_DATABASE);

// void phpss_database_mysql_close()
// closes the database connection
function phpss_database_mysql_close() {
	$link = phpss_module_get_data("mysql", "dblink", PHPSS_MODULE_DATABASE);
	mysql_close($link);
	phpss_module_set_data("mysql", "dblink", false, PHPSS_MODULE_DATABASE);
}

// void phpss_database_mysql_connect()
// connects to a database server
function phpss_database_mysql_connect() {
	$cfg = phpss_module_get_config("mysql", PHPSS_MODULE_DATABASE);

	if(($link = mysql_connect($cfg["hostname"] . ":" . $cfg["port"], $cfg["username"], $cfg["password"], true)) == false)
		phpss_error("mysql", "Unable to connect to database server", "MySQL said: " . mysql_error(), PHPSS_MODULE_DATABASE);

	if (mysql_select_db($cfg["database"], $link) == false)
		phpss_error("mysql", "Unable to select database", "MySQL said: " . mysql_error(), PHPSS_MODULE_DATABASE);

	// store link identifier
	phpss_module_set_data("mysql", "dblink", $link, PHPSS_MODULE_DATABASE);
}

// str phpss_database_mysql_escape_string(str string)
// escapes the string, so it is safe for use in mysql queries
function phpss_database_mysql_escape_string($string) {
	return mysql_escape_string($string);
}

// arr phpss_database_mysql_query(str query)
// runs a query against a database, returns the result as a matrix
function phpss_database_mysql_query($query) {

	$link = phpss_module_get_data("mysql", "dblink", PHPSS_MODULE_DATABASE);

	if ($link == false)
		phpss_error("mysql", "No database link available when executing query", "Query was '" . $query . "'", PHPSS_MODULE_DATABASE);

	if (($rs = mysql_query($query, $link)) == false)
		phpss_error("mysql", "A database query failed", "Query was '" . $query . "', MySQL said: " . mysql_error(), PHPSS_MODULE_DATABASE);

	$matrix = array();
	if (is_resource($rs) == true) {

		while($row = mysql_fetch_row($rs))
			$matrix[] = $row;

		mysql_free_result($rs);
	}

	return $matrix;
}

?>
