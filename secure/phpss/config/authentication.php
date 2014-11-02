<?php

/*
 * phpSecureSite 0.1.2 - authentication config
 *
 * config/authentication.php
 *
 * Configuration file for authentication and auth modules. Detailed
 * explanations of config options and modules are available in the
 * documentation.
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


// Set the name of the authentication module to use here.
// Leave this as "database" unless you know what you're doing.
// You only need to configure the authentication module that you
// define here.
$phpss_cfg["phpss"]["auth_module"]	= "database";


// Set the format of passwords in the backend. Valid values are:
// md5       : encrypted using md5
// mysql     : encrypted using mysqls password() algorithm
// sha1      : encrypted using sha1
// crypt     : encrypted using the UNIX crypt() system call
// plaintext : no encryption
$phpss_cfg["phpss"]["auth_pwtype"]	= "md5";




/*
 * database auth module - authentication against the standard phpss database
 *
 * Performs authentication over the internal phpSecureSite database connection,
 * against the standard phpsecuresite database.
 *
 * Normally, you REALLY want to use this one!
 *
*/

$phpss_cfg["auth"]["database"] = array(
	"modulefile"		=> PHPSS_ROOT_FS . "/modules/auth/database.php",

	// no options, it just works
);



/*
 * ldap auth module - authentication against an ldap directory
 *
 * Performs authentication against an LDAP server. Uses posixAccount, posixGroup
 * and nis classes to look up data.
 *
*/

$phpss_cfg["auth"]["ldap"] = array(
	"modulefile"		=> PHPSS_ROOT_FS . "/modules/auth/ldap.php",

	// ldap server address
	"hostname"		=> "localhost",

	// ldap server port (ldap uses 389 by default)
	"port"			=> 389,

	// entry to bind as, and password for entry
	"binddn"		=> "cn=Manager, dc=domain, dc=com",
	"bindpw"		=> "secret",

	// base dn
	"basedn"		=> "dc=domain, dc=com"
);



/*
 * mysql auth module - authentication against a mysql server
 *
 * Performs authentication against a MySQL database server. It is meant for
 * authentication against a different database server than the one you are
 * using for phpSecureSite.
 *
 * WARNING: If you use the normal phpsecuresite database for account data,
 * then please use the database auth module instead.
 *
*/

$phpss_cfg["auth"]["mysql"] = array(
	"modulefile"		=> PHPSS_ROOT_FS . "/modules/auth/mysql.php",

	// database server address (fully-qualified domain name or ip address)
	"hostname"		=> "localhost",

	// tcp port number to connect to (mysql uses 3306 by default)
	"port"			=> 3306,

	// username and password to connect with
	"username"		=> "notroot",
	"password"		=> "secret",

	// the database to use
	"database"		=> "accounts",


	// query for authenticating users. it must return the account id,
	// username and password. variables are:
	// %u : username
	// %p : password (encrypted, based on the pwtype option)
	"query_auth"		=> "SELECT id, username, password FROM account WHERE username = '%u' AND password = '%p'",

	// query for retreiving account data. it must return the accounts
	// id, username and password. Variables:
	// %i : the account id which data is to be returned for
	"query_accountdata"	=> "SELECT id, username, password FROM account WHERE id = '%i'",

	// query for getting an accounts id based on the username.
	// valid variables are:
	// %u : username
	"query_accountid"	=> "SELECT id FROM account WHERE username = '%u'",


	// query for getting the groups which the account is a member of.
	// the query must return the id of the groups, one per row.
	// if you do not have any groups, then set this empty. variables are:
	// %i : the account id to fetch groups for
	"query_accountgroups"	=> "SELECT group.id FROM account, group, account_group WHERE account.id = %i AND account_group.accountfid = account.id AND account_group.groupfid = group.id",

	// query for getting group data. it must return the id and name of
	// the group. if you have no groups then just make this empty.
	// variables are:
	// %i : the group id
	"query_groupdata"	=> "SELECT id, name FROM group WHERE id = %i",

	// query for getting the id of a group based on its name.
	// if you have no groups then just make this empty.
	// variables are:
	// %g : the group name
	"query_groupid"		=> "SELECT id FROM group WHERE name = %g"

);




/*
 * pgsql auth module - authentication against a postgresql server
 *
 * Performs authentication against a PostgreSQL database server. It is meant
 * for authentication against a different database server than the one you are
 * using for phpSecureSite.
 *
 * WARNING: If you use the normal phpsecuresite database for account data,
 * then please use the database auth module instead.
 *
*/

$phpss_cfg["auth"]["pgsql"] = array(
	"modulefile"		=> PHPSS_ROOT_FS . "/modules/auth/pgsql.php",

	// database server address (fully-qualified domain name or ip address)
	"hostname"		=> "localhost",

	// tcp port number to connect to (postgresql uses 5432 by default)
	"port"			=> 5432,

	// username and password to connect with
	"username"		=> "notroot",
	"password"		=> "secret",

	// the database to use
	"database"		=> "accounts",


	// query for authenticating users. it must return the account id,
	// username and password. variables are:
	// %u : username
	// %p : password (encrypted, based on the pwtype option)
	"query_auth"		=> "SELECT id, username, password FROM account WHERE username = '%u' AND password = '%p'",

	// query for retreiving account data. it must return the accounts
	// id, username and password. Variables:
	// %i : the account id which data is to be returned for
	"query_accountdata"	=> "SELECT id, username, password FROM account WHERE id = '%i'",

	// query for getting an accounts id based on the username.
	// valid variables are:
	// %u : username
	"query_accountid"	=> "SELECT id FROM account WHERE username = '%u'",


	// query for getting the groups which the account is a member of.
	// the query must return the id of the groups, one per row.
	// if you do not have any groups, then set this empty. variables are:
	// %i : the account id to fetch groups for
	"query_accountgroups"	=> "SELECT \"group\".id FROM account, \"group\", account_group WHERE account.id = '%i' AND account_group.accountfid = account.id AND account_group.groupfid = \"group\".id",

	// query for getting group data. it must return the id and name of
	// the group. if you have no groups then just make this empty.
	// variables are:
	// %i : the group id
	"query_groupdata"	=> "SELECT id, name FROM \"group\" WHERE id = '%i'",

	// query for getting the id of a group based on its name.
	// if you have no groups then just make this empty.
	// variables are:
	// %g : the group name
	"query_groupid"		=> "SELECT id FROM \"group\" WHERE name = '%g'"
);

?>
