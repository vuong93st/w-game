# MySQL-Front 5.0  (Build 1.0)

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;


# Host: localhost    Database: b2b
# ------------------------------------------------------
# Server version 5.0.45-community-nt-log

#
# Table structure for table tb_membercaches
#

DROP TABLE IF EXISTS `tb_membercaches`;
CREATE TABLE `tb_membercaches` (
  `member_id` int(10) NOT NULL default '-1',
  `data1` text NOT NULL,
  `data2` text NOT NULL,
  `expiration` int(10) NOT NULL default '0',
  PRIMARY KEY  (`member_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40000 ALTER TABLE `tb_membercaches` ENABLE KEYS */;
UNLOCK TABLES;

#
# Table structure for table tb_memberfields
#

DROP TABLE IF EXISTS `tb_memberfields`;
CREATE TABLE `tb_memberfields` (
  `member_id` int(10) NOT NULL default '0',
  `today_logins` smallint(6) NOT NULL default '0',
  `total_logins` smallint(6) NOT NULL default '0',
  `area_id1` smallint(6) NOT NULL default '0',
  `area_id2` smallint(6) NOT NULL default '0',
  `area_id3` smallint(6) NOT NULL default '0',
  `first_name` varchar(25) NOT NULL default '',
  `last_name` varchar(25) NOT NULL default '',
  `gender` tinyint(1) NOT NULL default '0',
  `tel` varchar(25) NOT NULL default '',
  `fax` varchar(25) NOT NULL default '',
  `mobile` varchar(25) NOT NULL default '',
  `qq` varchar(12) NOT NULL default '',
  `msn` varchar(50) NOT NULL default '',
  `icq` varchar(12) NOT NULL default '',
  `yahoo` varchar(50) NOT NULL default '',
  `skype` varchar(50) NOT NULL default '',
  `address` varchar(50) NOT NULL default '',
  `zipcode` varchar(16) NOT NULL default '',
  `site_url` varchar(100) NOT NULL default '',
  `question` varchar(50) NOT NULL default '',
  `answer` varchar(50) NOT NULL default '',
  `reg_ip` varchar(25) NOT NULL default '0',
  PRIMARY KEY  (`member_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `tb_memberfields` VALUES (1,0,0,6,7,9,'steven','chow',1,'','','','','','','','','','','','','','127.0.0.1');
INSERT INTO `tb_memberfields` VALUES (2,0,0,0,0,0,'lucky','liu',0,'','','','','','','','','','','','','','127.0.0.1');
/*!40000 ALTER TABLE `tb_memberfields` ENABLE KEYS */;
UNLOCK TABLES;

#
# Table structure for table tb_membergroups
#

DROP TABLE IF EXISTS `tb_membergroups`;
CREATE TABLE `tb_membergroups` (
  `id` smallint(3) NOT NULL auto_increment,
  `membertype_id` tinyint(1) NOT NULL default '-1',
  `name` varchar(50) NOT NULL default '',
  `description` text,
  `type` enum('define','special','system') NOT NULL default 'define',
  `system` enum('private','public') NOT NULL default 'private',
  `picture` varchar(50) NOT NULL default 'default.gif',
  `point_max` smallint(6) NOT NULL default '0',
  `point_min` smallint(6) NOT NULL default '0',
  `max_offer` smallint(3) NOT NULL default '0',
  `max_product` smallint(3) NOT NULL default '0',
  `max_job` smallint(3) NOT NULL default '0',
  `max_companynews` smallint(3) NOT NULL default '0',
  `max_producttype` smallint(3) NOT NULL default '3',
  `max_album` smallint(3) NOT NULL default '0',
  `max_attach_size` smallint(6) NOT NULL default '0',
  `max_size_perday` smallint(6) NOT NULL default '0',
  `max_favorite` smallint(3) NOT NULL default '0',
  `is_default` tinyint(1) NOT NULL default '0',
  `allow_offer` tinyint(1) NOT NULL default '0',
  `allow_market` tinyint(1) NOT NULL default '0',
  `allow_company` tinyint(1) NOT NULL default '0',
  `allow_product` tinyint(1) NOT NULL default '0',
  `allow_job` tinyint(1) NOT NULL default '0',
  `allow_companynews` tinyint(1) NOT NULL default '1',
  `allow_album` tinyint(1) NOT NULL default '0',
  `allow_space` tinyint(1) NOT NULL default '1',
  `default_live_time` tinyint(1) NOT NULL default '1',
  `after_live_time` tinyint(1) NOT NULL default '1',
  `exempt` tinyint(1) unsigned zerofill NOT NULL default '0',
  `created` int(10) NOT NULL default '0',
  `modified` int(10) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
INSERT INTO `tb_membergroups` VALUES (1,1,'Associate members','','system','private','informal.gif',0,-32767,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,2,0,0,1274002638);
INSERT INTO `tb_membergroups` VALUES (2,1,'Member','','system','private','formal.gif',32767,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,1,0,2,25,0,1274002638);
INSERT INTO `tb_membergroups` VALUES (3,1,'Pending Member','Wait for verification','special','private','special_checking.gif',0,0,0,0,0,0,3,0,0,0,0,0,1,1,1,1,1,1,1,1,1,2,0,0,1274002638);
INSERT INTO `tb_membergroups` VALUES (4,1,'No Access','No Access Site','special','private','special_novisit.gif',0,0,0,0,0,0,3,0,0,0,0,0,1,1,1,1,1,1,1,1,1,2,0,0,1274002638);
INSERT INTO `tb_membergroups` VALUES (5,1,'Prohibits the publication of','Prohibition of any information published in the Business Room','special','private','special_noperm.gif',0,0,0,0,0,0,3,0,0,0,0,0,1,1,1,1,1,1,1,1,1,2,0,0,1274002638);
INSERT INTO `tb_membergroups` VALUES (6,1,'Prohibition of landing','Prohibition of landing business room','special','private','special_nologin.gif',0,0,0,0,0,0,3,0,0,0,0,0,1,1,1,1,1,1,1,1,1,2,0,0,1274002638);
INSERT INTO `tb_membergroups` VALUES (7,1,'Ordinary Members','General Level Member','define','public','copper.gif',0,0,5,0,0,0,3,0,0,0,0,1,2,1,1,1,1,1,1,0,1,8,24,0,1274002638);
INSERT INTO `tb_membergroups` VALUES (8,1,'Member','Individual members','define','public','silver.gif',0,0,0,0,0,0,3,0,0,0,0,0,1,1,1,1,1,1,1,1,2,6,25,0,1274002638);
INSERT INTO `tb_membergroups` VALUES (9,2,'Corporate Member','This level of corporate members of the general','define','public','gold.gif',0,0,2,2,0,0,3,0,0,0,0,0,2,2,2,2,2,2,2,1,1,2,31,0,1274002638);
INSERT INTO `tb_membergroups` VALUES (10,2,'VIP Member','Senior Corporate Member','define','public','vip.gif',0,0,0,0,0,0,3,0,0,0,0,0,3,3,3,3,3,3,3,1,1,2,31,0,1274002638);
/*!40000 ALTER TABLE `tb_membergroups` ENABLE KEYS */;
UNLOCK TABLES;

#
# Table structure for table tb_members
#

DROP TABLE IF EXISTS `tb_members`;
CREATE TABLE `tb_members` (
  `id` int(10) NOT NULL auto_increment,
  `space_name` varchar(255) NOT NULL default '',
  `templet_id` smallint(3) NOT NULL default '0',
  `username` varchar(25) NOT NULL default '',
  `userpass` varchar(50) NOT NULL default '',
  `email` varchar(100) NOT NULL default '',
  `points` smallint(6) NOT NULL default '0',
  `credits` smallint(6) NOT NULL default '0',
  `balance_amount` float(7,2) NOT NULL default '0.00',
  `trusttype_ids` varchar(25) NOT NULL default '',
  `status` enum('3','2','1','0') NOT NULL default '0',
  `photo` varchar(100) NOT NULL default '',
  `membertype_id` smallint(3) NOT NULL default '0',
  `membergroup_id` smallint(3) NOT NULL default '0',
  `last_login` varchar(11) NOT NULL default '0',
  `last_ip` varchar(25) NOT NULL default '0',
  `service_start_date` varchar(11) NOT NULL default '0',
  `service_end_date` varchar(11) NOT NULL default '0',
  `office_redirect` smallint(6) NOT NULL default '0',
  `created` varchar(10) NOT NULL default '0',
  `modified` varchar(10) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
INSERT INTO `tb_members` VALUES (1,'',0,'admin','21232f297a57a5a743894a0e4a801fc3','x82011@yahoo.com',1,0,0,'','1','',2,9,'1292945615','2130706433','0','0',0,'1292945570','1292945570');
INSERT INTO `tb_members` VALUES (2,'athena',1,'athena','e10adc3949ba59abbe56e057f20f883e','phpb2b@163.com',81,80,0,'1,2','1','',2,9,'1292945577','2130706433','1292945577','1293031977',0,'1292945577','0');
/*!40000 ALTER TABLE `tb_members` ENABLE KEYS */;
UNLOCK TABLES;

#
# Table structure for table tb_membertypes
#

DROP TABLE IF EXISTS `tb_membertypes`;
CREATE TABLE `tb_membertypes` (
  `id` smallint(3) NOT NULL auto_increment,
  `default_membergroup_id` smallint(3) NOT NULL default '0',
  `name` varchar(50) NOT NULL default '',
  `description` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
INSERT INTO `tb_membertypes` VALUES (1,7,'Individual Member','');
INSERT INTO `tb_membertypes` VALUES (2,9,'Corporate Member','');
/*!40000 ALTER TABLE `tb_membertypes` ENABLE KEYS */;
UNLOCK TABLES;

/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
