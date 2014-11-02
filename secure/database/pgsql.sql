-- phpSecureSite 0.1.2
-- Database structure for PostgreSQL

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

CREATE SEQUENCE phpss_account_id_seq MINVALUE 1 MAXVALUE 2147483647 START 1 INCREMENT 1 CACHE 1;

CREATE TABLE phpss_account (
	id int DEFAULT nextval('phpss_account_id_seq') NOT NULL,
	username varchar(255) DEFAULT '' NOT NULL,
	password varchar(255) DEFAULT '' NOT NULL,
	active smallint DEFAULT 1 NOT NULL,
	CONSTRAINT phpss_account_pkey PRIMARY KEY (id),
	CONSTRAINT phpss_account_username_key UNIQUE (username)
);

--
-- Table structure for table 'phpss_group'
--

CREATE SEQUENCE phpss_group_id_seq MINVALUE 1 MAXVALUE 32767 START 1 INCREMENT 1 CACHE 1;

CREATE TABLE phpss_group (
	id smallint DEFAULT nextval('phpss_account_id_seq') NOT NULL,
	name varchar(255) DEFAULT '' NOT NULL,
	CONSTRAINT phpss_group_pkey PRIMARY KEY (id),
	CONSTRAINT phpss_group_name_key UNIQUE (name)
);

--
-- Table structure for table 'phpss_account_group'
--

CREATE TABLE phpss_account_group (
	accountfid int DEFAULT 0 NOT NULL,
	groupfid smallint DEFAULT 0 NOT NULL,
	CONSTRAINT phpss_account_group_pkey PRIMARY KEY (accountfid, groupfid),
	CONSTRAINT phpss_account_group_accountfid_fkey FOREIGN KEY (accountfid) REFERENCES phpss_account (id),
	CONSTRAINT phpss_account_group_groupfid_fkey FOREIGN KEY (groupfid) REFERENCES phpss_group (id)
);

--
-- Table structure for table 'phpss_ip'
--

CREATE SEQUENCE phpss_ip_id_seq MINVALUE 1 MAXVALUE 2147483647 START 1 INCREMENT 1 CACHE 1;

CREATE TABLE phpss_ip (
	id int DEFAULT nextval('phpss_ip_id_seq') NOT NULL,
	ip varchar(15) DEFAULT '' NOT NULL,
	CONSTRAINT phpss_ip_pkey PRIMARY KEY (id),
	CONSTRAINT phpss_ip_ip_key UNIQUE (ip)
);

--
-- Table structure for table 'phpss_session'
--

CREATE SEQUENCE phpss_session_id_seq MINVALUE 1 MAXVALUE 2147483647 START 1 INCREMENT 1 CACHE 1;

CREATE TABLE phpss_session (
	id int DEFAULT nextval('phpss_session_id_seq') NOT NULL,
	sessionkey char(32) DEFAULT '' NOT NULL,
	accountfid int DEFAULT NULL NULL,
	ipfid int DEFAULT 0 NOT NULL,
	created int DEFAULT 0 NOT NULL,
	lastrequest int DEFAULT 0 NOT NULL,
	active smallint DEFAULT 0 NOT NULL,
	CONSTRAINT phpss_session_pkey PRIMARY KEY (id),
	CONSTRAINT phpss_session_sessionkey_key UNIQUE (sessionkey),
	CONSTRAINT phpss_session_ipfid_fkey FOREIGN KEY (ipfid) REFERENCES phpss_ip (id)
);

--
-- Table structure for table 'phpss_log'
--

CREATE TABLE phpss_log (
	time int DEFAULT 0 NOT NULL,
	class varchar(8) DEFAULT '' NOT NULL,
	sessionfid int DEFAULT NULL NULL,
	accountfid int DEFAULT NULL NULL,
	ipfid int DEFAULT 0 NOT NULL,
	uri varchar(255) DEFAULT '' NOT NULL,
	module varchar(64) DEFAULT '' NOT NULL,
	moduletype varchar(8) DEFAULT '' NOT NULL,
	message varchar(255) DEFAULT '' NOT NULL,
	info varchar(255) DEFAULT '' NOT NULL,
	CONSTRAINT phpss_log_ipfid_fkey FOREIGN KEY (ipfid) REFERENCES phpss_ip (id)
);

--
-- Table structure for table 'phpss_bruteforce_account_fail'
--

CREATE TABLE phpss_bruteforce_account_fail (
	accountfid int DEFAULT 0 NOT NULL,
	time int DEFAULT 0 NOT NULL
);

CREATE INDEX phpss_bruteforce_account_fail_accountfid_key ON phpss_bruteforce_account_fail (accountfid);

--
-- Table structure for table phpss_bruteforce_account_lock
--

CREATE TABLE phpss_bruteforce_account_lock (
	accountfid int DEFAULT 0 NOT NULL,
	time int DEFAULT 0 NOT NULL
);

CREATE INDEX phpss_bruteforce_account_lock_accountfid_key ON phpss_bruteforce_account_lock (accountfid);

--
-- Table structure for table phpss_bruteforce_ip_fail
--

CREATE TABLE phpss_bruteforce_ip_fail (
	ipfid int DEFAULT 0 NOT NULL,
	time int DEFAULT 0 NOT NULL,
	CONSTRAINT phpss_bruteforce_ip_fail_ipfid_fkey FOREIGN KEY (ipfid) REFERENCES phpss_ip (id)
);

CREATE INDEX phpss_bruteforce_ip_fail_ipfid_key ON phpss_bruteforce_ip_fail (ipfid);

--
-- Table structure for table phpss_bruteforce_ip_lock
--

CREATE TABLE phpss_bruteforce_ip_lock (
	ipfid int DEFAULT 0 NOT NULL,
	time int DEFAULT 0 NOT NULL,
	CONSTRAINT phpss_bruteforce_ip_lock_ipfid_fkey FOREIGN KEY (ipfid) REFERENCES phpss_ip (id)
);

CREATE INDEX phpss_bruteforce_ip_lock_ipfid_key ON phpss_bruteforce_ip_lock (ipfid);

--
-- Table structure for table phpss_ipaccess
--

CREATE TABLE phpss_ipaccess (
	ip varchar(15) DEFAULT '' NOT NULL,
	access smallint DEFAULT 0 NOT NULL,
	CONSTRAINT phpss_ipaccess_pkey PRIMARY KEY (ip)
);

--
-- Table structure for table 'phpss_ipaccess_account'
--

CREATE TABLE phpss_ipaccess_account (
	ip varchar(15) DEFAULT ''  NOT NULL,
	accountfid int DEFAULT 0 NOT NULL,
	access smallint DEFAULT 0 NOT NULL,
	CONSTRAINT phpss_ipaccess_account_pkey PRIMARY KEY (ip, accountfid)
);

--
-- Table structure for table 'phpss_ipaccess_group'
--

CREATE TABLE phpss_ipaccess_group (
	ip varchar(15) DEFAULT '' NOT NULL,
	groupfid int DEFAULT 0 NOT NULL,
	access smallint DEFAULT 0 NOT NULL,
	CONSTRAINT phpss_ipaccess_group_pkey PRIMARY KEY (ip, groupfid)
);

--
-- Table structure for table 'phpss_svars'
--

CREATE TABLE phpss_svars (
	sessionfid int DEFAULT 0 NOT NULL,
	name varchar(255) DEFAULT '' NOT NULL,
	data text DEFAULT '' NOT NULL,
	CONSTRAINT phpss_svars_pkey PRIMARY KEY (sessionfid, name),
	CONSTRAINT phpss_svars_sessionfid_fkey FOREIGN KEY (sessionfid) REFERENCES phpss_session (id)
);

--
-- Table structure for table 'phpss_usertrack_url'
--

CREATE SEQUENCE phpss_usertrack_url_id_seq MINVALUE 1 MAXVALUE 2147483647 START 1 INCREMENT 1 CACHE 1;

CREATE TABLE phpss_usertrack_url (
	id int DEFAULT nextval('phpss_usertrack_url_id_seq') NOT NULL,
	url varchar(255) DEFAULT '' NOT NULL,
	CONSTRAINT phpss_usertrack_url_pkey PRIMARY KEY (id)
);

CREATE INDEX phpss_usertrack_url_url_key ON phpss_usertrack_url (url);

--
-- Table structure for table 'phpss_usertrack_req
--

CREATE SEQUENCE phpss_usertrack_req_id_seq MINVALUE 1 MAXVALUE 2147483647 START 1 INCREMENT 1 CACHE 1;

CREATE TABLE phpss_usertrack_req (
	id int DEFAULT nextval('phpss_usertrack_req_id_seq') NOT NULL,
	sessionfid int DEFAULT 0 NOT NULL,
	accountfid int DEFAULT 0 NOT NULL,
	time int DEFAULT 0 NOT NULL,
	usertrack_urlfid int NOT NULL,
	CONSTRAINT phpss_usertrack_req_pkey PRIMARY KEY (id),
	CONSTRAINT phpss_usertrack_req_usertrack_urlfid_fkey FOREIGN KEY (usertrack_urlfid) REFERENCES phpss_usertrack_url (id)
);

