<?php

/*
 * phpSecureSite 0.1.2 - pgsql auth module
 *
 * modules/database/pgsql.php
 *
 * PostgreSQL database backend module. Allows you to use a PostgreSQL
 * database server for data storage.
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

phpss_module_register("pgsql", PHPSS_MODULE_DATABASE);

phpss_register_handler(PHPSS_HANDLER_DB_CLOSE, "phpss_database_pgsql_close");
phpss_register_handler(PHPSS_HANDLER_DB_CONNECT, "phpss_database_pgsql_connect");
phpss_register_handler(PHPSS_HANDLER_DB_ESCAPESTRING, "phpss_database_pgsql_escape_string");
phpss_register_handler(PHPSS_HANDLER_DB_QUERY, "phpss_database_pgsql_query");

phpss_module_set_default_config("pgsql", array(
	"hostname"		=> "localhost",
	"port"			=> 5432,
	"username"		=> "notroot",
	"password"		=> "secret",
	"database"		=> "phpss"
), PHPSS_MODULE_DATABASE);

// void phpss_database_pgsql_close()
// closes the database link
function phpss_database_pgsql_close() {
	$link = phpss_module_get_data("pgsql", "dblink", PHPSS_MODULE_DATABASE);
	pg_close($link);
	phpss_module_set_data("pgsql", "dblink", false, PHPSS_MODULE_DATABASE);
}

// res phpss_database_pgsql_connect(str hostname, int port, str username, str password, str database)
// connects to a database server
function phpss_database_pgsql_connect() {
	$cfg = phpss_module_get_config("pgsql", PHPSS_MODULE_DATABASE);

	$connstring = "host=" . $cfg["hostname"] . " port=" . $cfg["port"] . " dbname=" . $cfg["database"] . " user=" . $cfg["username"] . " password=" . $cfg["password"];
	if (($link = pg_connect($connstring)) == false)
		phpss_error("pgsql", "Unable to connect to database server", "PostgreSQL said: '" . pg_last_error(), PHPSS_MODULE_DATABASE);

	// store the link identifier
	phpss_module_set_data("pgsql", "dblink", $link, PHPSS_MODULE_DATABASE);
}

// str phpss_database_pgsql_escape_string(str string)
// returns the string with all quotes escaped
function phpss_database_pgsql_escape_string($string) {
	return pg_escape_string($string);
}

// arr phpss_database_pgsql_query(str query)
// runs a query against a database, returns the result as a matrix
function phpss_database_pgsql_query($query) {

	$link = phpss_module_get_data("pgsql", "dblink", PHPSS_MODULE_DATABASE);

	if ($link == false)
		phpss_error("pgsql", "No database link available when executing query", "Query was '" . $query . "'", PHPSS_MODULE_DATABASE);

	if (($rs = pg_query($link, $query)) == false)
		phpss_error("pgsql", "A database query failed", "Query was '" . $query . "', PostgreSQL said: " . pg_last_error(), PHPSS_MODULE_DATABASE);

	$matrix = array();
	while($row = pg_fetch_row($rs))
		$matrix[] = $row;

	pg_free_result($rs);

	return $matrix;
}

?>
