<?php

/*
 * phpSecureSite 0.1.2 - Database functions
 *
 * func/database.php
 *
 * Database-related functions, mainly wrappers for database handlers
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

// void phpss_db_close()
// Closes the database link
function phpss_db_close() {
	@call_user_func(phpss_get_handler(PHPSS_HANDLER_DB_CLOSE));
}

// void phpss_db_connect()
// Connects to the database server
function phpss_db_connect() {
	@call_user_func(phpss_get_handler(PHPSS_HANDLER_DB_CONNECT));
}

// str phpss_db_escape_string(str string)
// Returns the string with quotes and special chars escaped, so it is
// safe to place in a database query
function phpss_db_escape_string($string) {
	return @call_user_func(phpss_get_handler(PHPSS_HANDLER_DB_ESCAPESTRING), $string);
}

// arr phpss_db_query(str query)
// Executes a database query. The result set is returned as a matrix
// (a two-dimensional array), with a numeric row index as the first element,
// and a numeric column index as the second. If the query fails to execute,
// phpSecureSite will exit with an error
function phpss_db_query($query) {
	return @call_user_func(phpss_get_handler(PHPSS_HANDLER_DB_QUERY), $query);
}

?>
