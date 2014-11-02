-- phpSecureSite 0.1.2
-- Database structure for MySQL

--
-- Copyright (c) 2002-2003 Erik Grinaker
--
-- This program is free software; you can redistribute it and/or
-- modify it under the terms of the GNU General Public License
-- as published by the Free Software Foundation; either version 2
-- of the License, or (at your option) any later version.
--
-- This program is distributed in the hope that it will be useful,
-- but WITHOUT ANY WARRANTY; without even the implied warranty of
-- MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
-- GNU General Public License for more details.
--
-- You should have received a copy of the GNU General Public License
-- along with this program; if not, write to the Free Software
-- Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
--

--
-- Table structure for table 'phpss_account'
--

CREATE TABLE phpss_account (
	id int NOT NULL auto_increment PRIMARY KEY,
	username varchar(255) binary NOT NULL UNIQUE,
	password varchar(255) binary NOT NULL,
	active tinyint NOT NULL default 1
);

--
-- Table structure for table 'phpss_account_group'
--

CREATE TABLE phpss_account_group (
	accountfid int NOT NULL,
	groupfid smallint NOT NULL,
	PRIMARY KEY (accountfid, groupfid)
);

--
-- Table structure for table 'phpss_bruteforce_account_fail'
--

CREATE TABLE phpss_bruteforce_account_fail (
	accountfid int NOT NULL,
	time int NOT NULL,
	INDEX accountfid (accountfid)
);

--
-- Table structure for table phpss_bruteforce_account_lock
--

CREATE TABLE phpss_bruteforce_account_lock(
	accountfid int NOT NULL,
	time int NOT NULL,
	INDEX accountfid (accountfid)
);

--
-- Table structure for table phpss_bruteforce_ip_fail
--

CREATE TABLE phpss_bruteforce_ip_fail (
	ipfid int NOT NULL,
	time int NOT NULL,
	INDEX ipfid (ipfid)
);

--
-- Table structure for table phpss_bruteforce_ip_lock
--

CREATE TABLE phpss_bruteforce_ip_lock (
	ipfid int NOT NULL,
	time int NOT NULL,
	INDEX ipfid (ipfid)
);

--
-- Table structure for table phpss_group
--

CREATE TABLE phpss_group (
	id smallint NOT NULL auto_increment PRIMARY KEY,
	name varchar(255) binary NOT NULL UNIQUE
);

--
-- Table structure for table 'phpss_ip'
--

CREATE TABLE phpss_ip (
	id int NOT NULL auto_increment PRIMARY KEY,
	ip varchar(15) binary NOT NULL UNIQUE
);

--
-- Table structure for table 'phpss_ipaccess'
--

CREATE TABLE phpss_ipaccess (
	ip varchar(15) binary NOT NULL PRIMARY KEY,
	access tinyint NOT NULL
);

--
-- Table structure for table phpss_ipaccess_account
--

CREATE TABLE phpss_ipaccess_account (
	ip varchar(15) binary NOT NULL,
	accountfid int NOT NULL,
	access tinyint NOT NULL,
	PRIMARY KEY (ip, accountfid)
);

--
-- Table structure for table `phpss_ipaccess_group`
--

CREATE TABLE phpss_ipaccess_group (
	ip varchar(15) binary NOT NULL,
	groupfid smallint NOT NULL,
	access tinyint NOT NULL,
	PRIMARY KEY (ip, groupfid)
);

--
-- Table structure for table 'phpss_log'
--

CREATE TABLE phpss_log (
	time int NOT NULL,
	class varchar(8) binary NOT NULL,
	sessionfid int NULL,
	accountfid int NULL,
	ipfid int NOT NULL,
	uri varchar(255) binary NOT NULL,
	module varchar(64) binary NOT NULL,
	moduletype varchar(8) NOT NULL,
	message varchar(255) binary NOT NULL,
	info varchar(255) binary NOT NULL
);

--
-- Table structure for table phpss_session
--

CREATE TABLE phpss_session (
	id int NOT NULL auto_increment PRIMARY KEY,
	sessionkey char(32) binary NOT NULL UNIQUE,
	accountfid int NULL,
	ipfid int NOT NULL,
	created int NOT NULL,
	lastrequest int NOT NULL,
	active tinyint NOT NULL
);

--
-- Table structure for table 'phpss_svars'
--

CREATE TABLE phpss_svars (
	sessionfid int NOT NULL,
	name varchar(255) binary NOT NULL,
	data longtext NOT NULL,
	PRIMARY KEY (sessionfid, name)
);

--
-- Table structure for table 'phpss_usertrack_req'
--

CREATE TABLE phpss_usertrack_req (
	id int NOT NULL auto_increment PRIMARY KEY,
	sessionfid int NOT NULL,
	accountfid int NOT NULL,
	time int NOT NULL,
	usertrack_urlfid int NOT NULL
);

--
-- Table structure for table 'phpss_usertrack_url'
--

CREATE TABLE phpss_usertrack_url (
	id int NOT NULL auto_increment PRIMARY KEY,
	url varchar(255) binary NOT NULL,
	INDEX url (url)
);

