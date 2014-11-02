/* phpSecureSite 0.1.2
 * Database structure for Microsoft SQL Server
 *
 *
 * Copyright (c) 2002-2003 Erik Grinaker
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
*/

/* Table structure for table 'phpss_account' */

CREATE TABLE phpss_account (
	id int NOT NULL identity(1,1) CONSTRAINT phpss_account_pkey PRIMARY KEY CLUSTERED,
	username varchar(255) COLLATE SQL_Latin1_General_CP1_CS_AS NOT NULL CONSTRAINT phpss_account_username_key UNIQUE,
	password varchar(255) COLLATE SQL_Latin1_General_CP1_CS_AS NOT NULL,
	active tinyint NOT NULL CONSTRAINT phpss_account_active_default DEFAULT 1
)
GO


/* Table structure for table 'phpss_group' */

CREATE TABLE phpss_group (
	id smallint NOT NULL identity(1,1) CONSTRAINT phpss_group_pkey PRIMARY KEY CLUSTERED,
	name varchar(255) COLLATE SQL_Latin1_General_CP1_CS_AS NOT NULL CONSTRAINT phpss_group_name_key UNIQUE
)
GO


/* Table structure for table 'phpss_account_group' */

CREATE TABLE phpss_account_group (
	accountfid int NOT NULL CONSTRAINT phpss_account_group_accountfid_key FOREIGN KEY REFERENCES phpss_account (id),
	groupfid smallint NOT NULL CONSTRAINT phpss_account_group_groupfid_key FOREIGN KEY REFERENCES phpss_group (id),
	CONSTRAINT phpss_account_group_pkey PRIMARY KEY CLUSTERED (accountfid, groupfid)
)
GO


/* Table structure for table 'phpss_ip' */

CREATE TABLE phpss_ip (
	id int NOT NULL identity(1,1) CONSTRAINT phpss_ip_pkey PRIMARY KEY CLUSTERED,
	ip varchar(15) COLLATE SQL_Latin1_General_CP1_CS_AS NOT NULL CONSTRAINT phpss_ip_ip_key UNIQUE
)
GO


/* Table structure for table 'phpss_session' */

CREATE TABLE phpss_session (
	id int NOT NULL identity(1,1) CONSTRAINT phpss_session_pkey PRIMARY KEY CLUSTERED,
	sessionkey char(32) COLLATE SQL_Latin1_General_CP1_CS_AS NOT NULL CONSTRAINT phpss_session_sessionkey_key UNIQUE,
	accountfid int NULL,
	ipfid int NOT NULL CONSTRAINT phpss_session_ipfid_key FOREIGN KEY REFERENCES phpss_ip (id),
	created int NOT NULL,
	lastrequest int NOT NULL,
	active tinyint NOT NULL
)
GO


/* Table structure for table 'phpss_log' */

CREATE TABLE phpss_log (
	time int NOT NULL,
	class varchar(8) NOT NULL,
	sessionfid int NULL,
	accountfid int NULL,
	ipfid int NOT NULL CONSTRAINT phpss_log_ipfid_key FOREIGN KEY REFERENCES phpss_ip (id),
	uri varchar(255) COLLATE SQL_Latin1_General_CP1_CS_AS NOT NULL,
	module varchar(64) COLLATE SQL_Latin1_General_CP1_CS_AS NOT NULL,
	moduletype varchar(8) COLLATE SQL_Latin1_General_CP1_CS_AS NOT NULL,
	message varchar(255) COLLATE SQL_Latin1_General_CP1_CS_AS NOT NULL,
	info varchar(255) COLLATE SQL_Latin1_General_CP1_CS_AS NOT NULL
)
GO


/* Table structure for table 'phpss_bruteforce_account_fail' */

CREATE TABLE phpss_bruteforce_account_fail (
	accountfid int NOT NULL,
	time int NOT NULL
)

CREATE CLUSTERED INDEX phpss_bruteforce_account_fail_accountfid_key ON phpss_bruteforce_account_fail (accountfid)
GO


/* Table structure for table phpss_bruteforce_account_lock */

CREATE TABLE phpss_bruteforce_account_lock(
	accountfid int NOT NULL,
	time int NOT NULL
)

CREATE CLUSTERED INDEX phpss_bruteforce_account_lock_accountfid_key ON phpss_bruteforce_account_lock (accountfid)
GO


/* Table structure for table phpss_bruteforce_ip_fail */

CREATE TABLE phpss_bruteforce_ip_fail (
	ipfid int NOT NULL,
	time int NOT NULL
)

CREATE CLUSTERED INDEX phpss_bruteforce_ip_fail_ipfid_key ON phpss_bruteforce_ip_fail (ipfid)
GO


/* Table structure for table phpss_bruteforce_ip_lock */

CREATE TABLE phpss_bruteforce_ip_lock (
	ipfid int NOT NULL,
	time int NOT NULL
)

CREATE CLUSTERED INDEX phpss_bruteforce_ip_lock_ipfid_key ON phpss_bruteforce_ip_lock (ipfid)
GO


/* Table structure for table phpss_ipaccess */

CREATE TABLE phpss_ipaccess (
	ip varchar(15) COLLATE SQL_Latin1_General_CP1_CS_AS NOT NULL CONSTRAINT phpss_ipaccess_pkey PRIMARY KEY CLUSTERED,
	access tinyint NOT NULL
)
GO


/* Table structure for table phpss_ipaccess_account */

CREATE TABLE phpss_ipaccess_account (
	ip varchar(15) COLLATE SQL_Latin1_General_CP1_CS_AS NOT NULL,
	accountfid int NOT NULL,
	access tinyint NOT NULL,
	CONSTRAINT phpss_ipaccess_account_pkey PRIMARY KEY CLUSTERED (ip, accountfid)
)
GO


/* Table structure for table `phpss_ipaccess_group` */

CREATE TABLE phpss_ipaccess_group (
	ip varchar(15) COLLATE SQL_Latin1_General_CP1_CS_AS NOT NULL,
	groupfid smallint NOT NULL,
	access tinyint NOT NULL,
	CONSTRAINT phpss_ipaccess_group_pkey PRIMARY KEY CLUSTERED (ip, groupfid)
)
GO


/* Table structure for table 'phpss_svars' */

CREATE TABLE phpss_svars (
	sessionfid int NOT NULL,
	name varchar(255) COLLATE SQL_Latin1_General_CP1_CS_AS NOT NULL,
	data text NOT NULL,
	CONSTRAINT phpss_svars_pkey PRIMARY KEY CLUSTERED (sessionfid, name)
)
GO


/* Table structure for table phpss_usertrack_url */

CREATE TABLE phpss_usertrack_url (
	id int NOT NULL identity(1,1) CONSTRAINT phpss_usertrack_url_pkey PRIMARY KEY CLUSTERED,
	url varchar(255) COLLATE SQL_Latin1_General_CP1_CS_AS NOT NULL
)

CREATE INDEX phpss_usertrack_url_url_key ON phpss_usertrack_url (url)
GO


/* Table structure for table 'phpss_usertrack_req' */

CREATE TABLE phpss_usertrack_req (
	id int NOT NULL identity(1,1) CONSTRAINT phpss_usertrack_req_pkey PRIMARY KEY CLUSTERED,
	sessionfid int NOT NULL,
	accountfid int NOT NULL,
	time int NOT NULL,
	usertrack_urlfid int NOT NULL CONSTRAINT phpss_usertrack_req_urlfid_key FOREIGN KEY REFERENCES phpss_usertrack_url (id)
)
GO

