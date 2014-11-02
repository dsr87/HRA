<?php

/*
 * phpSecureSite 0.1.2 - mssql database module
 *
 * modules/database/mssql.php
 *
 * Microsoft SQL Server database backend module. Allows you to use a SQL Server
 * database for data storage.
 *
 *
 * Contributed by Dave Rich <drich@nea-online.net> and
 * Mike Hore <mike@nea-online.net>
 *
 * Copyright (C) 2002-2003 Erik Grinaker, Dave Rich, Mike Hore
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

phpss_module_register("mssql", PHPSS_MODULE_DATABASE);

phpss_register_handler(PHPSS_HANDLER_DB_CLOSE, "phpss_database_mssql_close");
phpss_register_handler(PHPSS_HANDLER_DB_CONNECT, "phpss_database_mssql_connect");
phpss_register_handler(PHPSS_HANDLER_DB_ESCAPESTRING, "phpss_database_mssql_escape_string");
phpss_register_handler(PHPSS_HANDLER_DB_QUERY, "phpss_database_mssql_query");

phpss_module_set_default_config("mssql", array(
	"hostname"		=> "localhost",
	"username"		=> "notsa",
	"password"		=> "secret",
	"database"		=> "phpss"
), PHPSS_MODULE_DATABASE);

// void phpss_database_mssql_close()
// closes the database link
function phpss_database_mssql_close() {
	$link = phpss_module_get_data("mssql", "dblink", PHPSS_MODULE_DATABASE);
	mssql_close($link);
	phpss_module_set_data("mssql", "dblink", false, PHPSS_MODULE_DATABASE);
}

// void phpss_database_mssql_connect()
// establish connection to the sql server
function phpss_database_mssql_connect() {
	$cfg = phpss_module_get_config("mssql", PHPSS_MODULE_DATABASE);

	if (($link = mssql_connect($cfg["hostname"], $cfg["username"], $cfg["password"]))  == false) 
		phpss_error("mssql", "Unable to connect to database server", "SQL Server said: " . mssql_get_last_message(), PHPSS_MODULE_DATABASE);

	if (mssql_select_db($cfg["database"], $link) == false)
		phpss_error("mssql", "Unable to select database", "SQL Server said: " . mssql_get_last_message(), PHPSS_MODULE_DATABASE);

	// store db link
	phpss_module_set_data("mssql", "dblink", $link, PHPSS_MODULE_DATABASE);
}

// str phpss_database_mssql_escape_string(str string)
// returns the string with all quotes escaped (using '')
function phpss_database_mssql_escape_string($string) {
	return str_replace("'", "''", $string);
}

// arr phpss_database_mssql_query(str query)
// executes the query, returns result as a matrix
function phpss_database_mssql_query($query) {

	$link = phpss_module_get_data("mssql", "dblink", PHPSS_MODULE_DATABASE);

	if ($link == false)
		phpss_error("mysql", "No database link available when executing query", "Query was '" . $query . "'", PHPSS_MODULE_DATABASE);

	if (($rs = mssql_query($query, $link)) == false)
		phpss_error("mssql", "A database query failed", "Query was '" . $query . "', SQL Server said: " . mssql_get_last_message(), PHPSS_MODULE_DATABASE);

	$matrix = array();
	while($row = mssql_fetch_row($rs))
		$matrix[] = $row;

	mssql_free_result($rs);

	return $matrix;
}

?>
