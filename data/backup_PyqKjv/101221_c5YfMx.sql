DROP TABLE IF EXISTS tb_adminfields;
CREATE TABLE tb_adminfields (
  member_id int(10) NOT NULL,
  depart_id tinyint(1) NOT NULL default '0',
  first_name varchar(25) NOT NULL default '',
  last_name varchar(25) NOT NULL default '',
  `level` tinyint(1) NOT NULL default '0',
  last_login int(10) NOT NULL default '0',
  last_ip varchar(25) NOT NULL default '',
  expired int(10) NOT NULL default '0',
  permissions text NOT NULL,
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (member_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO tb_adminfields VALUES ('1','0','',0x61646d696e6973747261746f72,'0','1292945627',0x3132372e302e302e31,'0','','1292945570','1292945570');

DROP TABLE IF EXISTS tb_adminmodules;
CREATE TABLE tb_adminmodules (
  id smallint(3) NOT NULL auto_increment auto_increment,
  parent_id smallint(3) NOT NULL default '0',
  `name` varchar(50) NOT NULL default '',
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_adminnotes;
CREATE TABLE tb_adminnotes (
  id int(10) NOT NULL auto_increment auto_increment,
  member_id int(10) NOT NULL default '0',
  title varchar(100) NOT NULL default '',
  content text,
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_adminprivileges;
CREATE TABLE tb_adminprivileges (
  id int(5) NOT NULL auto_increment auto_increment,
  adminmodule_id int(5) NOT NULL default '0',
  `name` varchar(25) NOT NULL default '',
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_adminroles;
CREATE TABLE tb_adminroles (
  id tinyint(2) NOT NULL auto_increment auto_increment,
  `name` varchar(25) default NULL,
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_adses;
CREATE TABLE tb_adses (
  id smallint(6) NOT NULL auto_increment auto_increment,
  adzone_id smallint(3) NOT NULL default '0',
  title varchar(50) NOT NULL default '',
  description text,
  is_image tinyint(1) NOT NULL default '1',
  source_name varchar(100) NOT NULL default '',
  source_type varchar(100) NOT NULL default '',
  source_url varchar(255) NOT NULL default '',
  target_url varchar(255) NOT NULL default '',
  width smallint(6) NOT NULL default '0',
  height smallint(6) NOT NULL default '0',
  alt_words varchar(25) NOT NULL default '',
  start_date int(10) NOT NULL default '0',
  end_date int(10) NOT NULL default '0',
  priority tinyint(1) NOT NULL default '0',
  clicked smallint(6) NOT NULL default '1',
  target enum('_parent','_self','_blank') NOT NULL default '_blank',
  seq tinyint(1) NOT NULL default '0',
  state tinyint(1) NOT NULL default '1',
  `status` tinyint(1) NOT NULL default '0',
  picture_replace varchar(255) NOT NULL default '',
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 AUTO_INCREMENT=19;

INSERT INTO tb_adses VALUES ('1','1',0x474946,0x53616d706c6520416431,'1','',0x696d6167652f676966,0x6174746163686d656e742f73616d706c652f64656661756c742f626c75652e676966,'','152','52','','0','0','0','1','_blank','0','1','1','','1292945577','0');
INSERT INTO tb_adses VALUES ('2','1',0x4a5047,0x53616d706c6520416432,'1','',0x696d6167652f676966,0x6174746163686d656e742f73616d706c652f64656661756c742f626c75652e676966,'','152','52','','0','0','0','1','_blank','0','1','1','','1292945577','0');
INSERT INTO tb_adses VALUES ('3','1',0x504e47,0x53616d706c6520416433,'1','',0x696d6167652f676966,0x6174746163686d656e742f73616d706c652f64656661756c742f626c75652e676966,'','152','52','','0','0','0','1','_blank','0','1','1','','1292945577','0');
INSERT INTO tb_adses VALUES ('4','1',0x53616d706c6520416434,'','1','',0x696d6167652f676966,0x6174746163686d656e742f73616d706c652f64656661756c742f626c75652e676966,'','152','52','','0','0','0','1','_blank','0','1','1','','1292945577','0');
INSERT INTO tb_adses VALUES ('5','1',0x53616d706c6520416435,0x504e47,'1','',0x696d6167652f676966,0x6174746163686d656e742f73616d706c652f64656661756c742f626c75652e676966,'','152','52','','0','0','0','1','_blank','0','1','1','','1292945577','0');
INSERT INTO tb_adses VALUES ('6','1',0x53616d706c6520416436,'','1','',0x696d6167652f676966,0x6174746163686d656e742f73616d706c652f64656661756c742f626c75652e676966,'','152','52','','0','0','0','1','_blank','0','1','1','','1292945577','0');
INSERT INTO tb_adses VALUES ('7','2',0x452d636f6d6d6572636520706c6174666f726d20666f72206e6578742d67656e65726174696f6e20696e647573747279,'','1','',0x696d6167652f706a706567,0x6174746163686d656e742f73616d706c652f6578616d706c655f3935382e6a7067,0x687474703a2f2f7777772e7068706232622e636f6d,'958','62','','1292945577','0','0','1','_blank','0','1','1',0x6174746163686d656e742f73616d706c652f6578616d706c655f3935382e6a7067,'1292945577','0');
INSERT INTO tb_adses VALUES ('8','3',0x4164766572746973696e67204f70706f7274756e6974696573,'','1','',0x696d6167652f706a706567,0x6174746163686d656e742f73616d706c652f627265617468652d6f66666572312e6a7067,'','477','170','','1292945577','0','0','1','_blank','0','1','1',0x696d616765732f6e6f706963747572655f736d616c6c2e676966,'1292945577','0');
INSERT INTO tb_adses VALUES ('9','3',0x57656c636f6d65205265676973746572,0x526567697374726174696f6e,'1','',0x696d6167652f706a706567,0x6174746163686d656e742f73616d706c652f627265617468652d6f66666572322e6a7067,'','477','170','','1292945577','1293031977','0','1','_blank','0','1','1',0x696d616765732f6e6f706963747572655f736d616c6c2e676966,'1292945577','0');
INSERT INTO tb_adses VALUES ('15','4',0x486f6d65204269672050696374757265,'','1','',0x696d6167652f706a706567,0x6174746163686d656e742f73616d706c652f627265617468652d70726f64756374312e6a7067,'','500','200','','1292945577','0','0','1','_blank','0','1','1',0x696d616765732f6e6f706963747572655f736d616c6c2e676966,'1292945577','0');
INSERT INTO tb_adses VALUES ('16','5',0x486f6d65204269672050696374757265,'','1','',0x696d6167652f706a706567,0x6174746163686d656e742f73616d706c652f627265617468652d696e646578312e6a7067,'','500','200','','1292945577','0','0','1','_blank','0','1','1',0x696d616765732f6e6f706963747572655f736d616c6c2e676966,'1292945577','0');
INSERT INTO tb_adses VALUES ('18','4',0x5369676e20757020627573696e657373206f70706f7274756e6974696573,'','1','',0x696d6167652f706a706567,0x6174746163686d656e742f73616d706c652f627265617468652d70726f64756374322e6a7067,'','570','170','','1292945577','0','0','1','_blank','0','1','1',0x696d616765732f6e6f706963747572655f736d616c6c2e676966,'1292945577','0');
INSERT INTO tb_adses VALUES ('17','5',0x4d656d626572204164766572746973696e67,0x61736466,'1','',0x696d6167652f706a706567,0x6174746163686d656e742f73616d706c652f627265617468652d696e646578322e6a7067,'','500','200','','1292945577','0','0','1','_blank','0','1','1',0x696d616765732f6e6f706963747572655f736d616c6c2e676966,'1292945577','0');

DROP TABLE IF EXISTS tb_adzones;
CREATE TABLE tb_adzones (
  id smallint(6) NOT NULL auto_increment auto_increment,
  membergroup_ids varchar(50) NOT NULL default '',
  what varchar(10) NOT NULL default '',
  style tinyint(1) NOT NULL default '0',
  `name` varchar(100) NOT NULL default '',
  description text,
  additional_adwords text,
  price float(9,2) NOT NULL default '0.00',
  file_name varchar(100) NOT NULL default '',
  width smallint(6) NOT NULL default '0',
  height smallint(6) NOT NULL default '0',
  wrap smallint(6) NOT NULL default '0',
  max_ad smallint(6) NOT NULL default '0',
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 AUTO_INCREMENT=6;

INSERT INTO tb_adzones VALUES ('1',0x382c39,0x31,'0',0x486f6d652061742074686520746f70206f66206120736d616c6c20696d61676520616473,0x362070696374757265206c696e652c20486f6d652053686f77,'','1000.00',0x696e6465782e706870,'760','52','6','12','1292945577','0');
INSERT INTO tb_adzones VALUES ('2','0',0x31,'0',0x486f6d652062616e6e657220616473,0x46726565206f70656e2d736f757263652c20737570706f727473206d756c7469706c65206c616e6775616765732c205048504232422061206e65772067656e65726174696f6e206f6620652d636f6d6d65726365206170706c69636174696f6e20706c6174666f726d,'','3000.00',0x696e6465782e706870,'958','62','0','0','1292945577','0');
INSERT INTO tb_adzones VALUES ('3','',0x31,'1',0x486f6d65204164766572746973696e67204f70706f7274756e6974696573,0x4c6f6f6b20666f7220627573696e657373206f70706f7274756e697469657320686f6d65,'','1000.00','','380','270','0','0','1292945577','0');
INSERT INTO tb_adzones VALUES ('4','',0x31,'1',0x50726f6475637420486f6d65204164766572746973696e67,'','','0.00','','570','170','0','0','1292945577','0');
INSERT INTO tb_adzones VALUES ('5','',0x31,'1',0x486f6d65204269672050696374757265204164766572746973696e67,0x486f6d65205075626c6963697479,'','0.00','','473','170','0','0','1292945577','0');

DROP TABLE IF EXISTS tb_albums;
CREATE TABLE tb_albums (
  id int(10) NOT NULL auto_increment auto_increment,
  member_id int(10) NOT NULL default '0',
  attachment_id int(10) NOT NULL default '0',
  type_id smallint(3) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_albumtypes;
CREATE TABLE tb_albumtypes (
  id smallint(3) NOT NULL auto_increment auto_increment,
  `name` varchar(255) NOT NULL default '',
  display_order tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 AUTO_INCREMENT=4;

INSERT INTO tb_albumtypes VALUES ('1',0x436f6d70616e7920616c62756d,'0');
INSERT INTO tb_albumtypes VALUES ('2',0x50726f6475637420496d616765,'0');
INSERT INTO tb_albumtypes VALUES ('3',0x4164766572746973696e67,'0');

DROP TABLE IF EXISTS tb_announcements;
CREATE TABLE tb_announcements (
  id smallint(6) unsigned NOT NULL auto_increment auto_increment,
  announcetype_id smallint(3) NOT NULL default '0',
  `subject` varchar(255) NOT NULL default '',
  message text,
  display_order tinyint(1) NOT NULL default '0',
  display_expiration int(10) unsigned NOT NULL default '0',
  created int(10) unsigned NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 AUTO_INCREMENT=15;

INSERT INTO tb_announcements VALUES ('13','0',0x486f7720746f20706f736974696f6e20796f75722070726f6475637420636c6f73657220746f2074686520746f70,'','0','0','1292945577','0');
INSERT INTO tb_announcements VALUES ('14','0',0x576562204d656d626572205365727669636573,0x427920476f6c64206d656d6265722c20796f752063616e206e6f74206a757374207468656972206f776e20627573696e6573732c2070726f6475637420616e64206f7468657220636f6d6d65726369616c20696e666f726d6174696f6e207075626c6973686564206f6e2074686520496e7465726e65742c2063616e20616c736f2074616b652074686520696e697469617469766520746f2065737461626c69736820636f6e746163742077697468206d616e79206275796572732e,'0','0','1292945577','0');
INSERT INTO tb_announcements VALUES ('11','0',0x323030392c20353030204368696e65736520656e7465727072697365732072656c6561736564,'','0','0','1292945577','0');
INSERT INTO tb_announcements VALUES ('12','0',0x4f70656e20676f6c64206d6564616c2057616e67205075,'','0','0','1292945577','0');
INSERT INTO tb_announcements VALUES ('4','1',0x576f6e64657266756c204578706f2c20636f6e6365726e65642061626f757420656e7669726f6e6d656e74616c2070726f74656374696f6e20,'','0','0','1292945577','0');

DROP TABLE IF EXISTS tb_announcementtypes;
CREATE TABLE tb_announcementtypes (
  id smallint(3) NOT NULL auto_increment auto_increment,
  `name` varchar(255) NOT NULL default '',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 AUTO_INCREMENT=3;

INSERT INTO tb_announcementtypes VALUES ('1',0x53697465204e6f74696365);
INSERT INTO tb_announcementtypes VALUES ('2',0x4164766572746973696e672074696d65);

DROP TABLE IF EXISTS tb_areas;
CREATE TABLE tb_areas (
  id smallint(6) NOT NULL auto_increment auto_increment,
  attachment_id int(10) NOT NULL default '0',
  areatype_id smallint(3) NOT NULL default '0',
  child_ids text,
  top_parentid smallint(6) NOT NULL default '0',
  `level` tinyint(1) NOT NULL default '1',
  `name` varchar(255) NOT NULL default '',
  url varchar(255) NOT NULL default '',
  alias_name varchar(255) NOT NULL default '',
  highlight tinyint(1) NOT NULL default '0',
  parent_id smallint(6) NOT NULL default '0',
  display_order tinyint(1) NOT NULL default '0',
  description text,
  available tinyint(1) NOT NULL default '1',
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8 AUTO_INCREMENT=52;

INSERT INTO tb_areas VALUES ('1','0','0','','0','1',0x4175737472616c6961,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('2','0','0','','0','1',0x496e646f6e65736961,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('3','0','0','','0','1',0x4e6577205a65616c616e64,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('4','0','0','','0','1',0x536f757468204b6f726561,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('5','0','0','','0','1',0x4368696e61,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('6','0','0','','0','1',0x4972616e,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('7','0','0','','0','1',0x50616b697374616e,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('8','0','0','','0','1',0x54616977616e,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('9','0','0','','0','1',0x486f6e67204b6f6e67,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('10','0','0','','0','1',0x4a6170616e,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('11','0','0','','0','1',0x5068696c697070696e6573,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('12','0','0','','0','1',0x546861696c616e64,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('13','0','0','','0','1',0x496e646961,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('14','0','0','','0','1',0x4d616c6179736961,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('15','0','0','','0','1',0x53696e6761706f7265,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('16','0','0','','0','1',0x566965746e616d,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('17','0','0','','0','1',0x417267656e74696e61,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('18','0','0','','0','1',0x43616e616461,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('19','0','0','','0','1',0x436f6c6f6d626961,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('20','0','0','','0','1',0x50657275,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('21','0','0','','0','1',0x4272617a696c,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('22','0','0','','0','1',0x4368696c65,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('23','0','0','','0','1',0x4d657869636f,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('24','0','0','','0','1',0x556e6974656420537461746573,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('25','0','0','','0','1',0x42656c6769756d,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('26','0','0','','0','1',0x4765726d616e79,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('27','0','0','','0','1',0x506f6c616e64,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('28','0','0','','0','1',0x53776564656e,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('29','0','0','','0','1',0x42756c6761726961,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('30','0','0','','0','1',0x477265656365,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('31','0','0','','0','1',0x506f72747567616c,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('32','0','0','','0','1',0x537769747a65726c616e64,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('33','0','0','','0','1',0x437a6563682052657075626c6963,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('34','0','0','','0','1',0x4963656c616e64,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('35','0','0','','0','1',0x526f6d616e6961,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('36','0','0','','0','1',0x5475726b6579,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('37','0','0','','0','1',0x44656e6d61726b,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('38','0','0','','0','1',0x4974616c79,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('39','0','0','','0','1',0x527573736961,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('40','0','0','','0','1',0x556b7261696e65,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('41','0','0','','0','1',0x4672616e6365,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('42','0','0','','0','1',0x4e65746865726c616e6473,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('43','0','0','','0','1',0x537061696e,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('44','0','0','','0','1',0x556e69746564204b696e67646f6d,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('45','0','0','','0','1',0x49737261656c,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('46','0','0','','0','1',0x5379726961,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('47','0','0','','0','1',0x556e69746564204172616220,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('48','0','0','','0','1',0x456d697261746573,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('49','0','0','','0','1',0x536175646920417261626961,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('50','0','0','','0','1',0x4567797074,'','','0','0','0','','1','0','0');
INSERT INTO tb_areas VALUES ('51','0','0','','0','1',0x536f75746820416672696361,'','','0','0','0','','1','0','0');

DROP TABLE IF EXISTS tb_areatypes;
CREATE TABLE tb_areatypes (
  id smallint(3) NOT NULL auto_increment auto_increment,
  `name` varchar(64) NOT NULL default '',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 AUTO_INCREMENT=9;

INSERT INTO tb_areatypes VALUES ('1',0x4e6f727468204368696e61);
INSERT INTO tb_areatypes VALUES ('2',0x4e6f72746865617374);
INSERT INTO tb_areatypes VALUES ('3',0x45617374204368696e61);
INSERT INTO tb_areatypes VALUES ('4',0x43656e7472616c204368696e61);
INSERT INTO tb_areatypes VALUES ('5',0x536f75746877657374);
INSERT INTO tb_areatypes VALUES ('6',0x4e6f72746877657374);
INSERT INTO tb_areatypes VALUES ('7',0x536f757468204368696e61);
INSERT INTO tb_areatypes VALUES ('8',0x534152);

DROP TABLE IF EXISTS tb_attachments;
CREATE TABLE tb_attachments (
  id int(10) NOT NULL auto_increment auto_increment,
  attachmenttype_id smallint(3) NOT NULL default '0',
  member_id int(10) NOT NULL default '-1',
  file_name char(100) NOT NULL default '',
  attachment char(255) NOT NULL default '',
  title char(100) NOT NULL default '',
  description text,
  file_type char(50) NOT NULL default '0',
  file_size mediumint(8) NOT NULL default '0',
  thumb varchar(100) NOT NULL default '',
  remote varchar(100) NOT NULL default '',
  is_image tinyint(1) NOT NULL default '1',
  `status` tinyint(1) NOT NULL default '1',
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_attachmenttypes;
CREATE TABLE tb_attachmenttypes (
  id tinyint(1) NOT NULL auto_increment auto_increment,
  `name` varchar(25) NOT NULL default '',
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_banned;
CREATE TABLE tb_banned (
  id smallint(6) NOT NULL auto_increment auto_increment,
  ip1 char(3) NOT NULL default '',
  ip2 char(3) NOT NULL default '',
  ip3 char(3) NOT NULL default '',
  ip4 char(3) NOT NULL default '',
  expiration int(10) NOT NULL default '0',
  created int(10) NOT NULL default '0',
  PRIMARY KEY  (id),
  UNIQUE KEY ip1 (ip1,ip2,ip3,ip4)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_brands;
CREATE TABLE tb_brands (
  id smallint(6) NOT NULL auto_increment auto_increment,
  member_id int(10) NOT NULL default '-1',
  company_id int(10) NOT NULL default '-1',
  type_id smallint(3) NOT NULL default '0',
  if_commend tinyint(1) NOT NULL default '0',
  `name` varchar(100) NOT NULL default '',
  alias_name varchar(100) NOT NULL default '',
  picture varchar(255) NOT NULL,
  description text NOT NULL,
  hits smallint(6) NOT NULL default '0',
  ranks smallint(3) NOT NULL default '0',
  letter varchar(2) NOT NULL default '',
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 AUTO_INCREMENT=33;

INSERT INTO tb_brands VALUES ('1','-1','0','1','1',0x70616c6d,0x70616c6d,0x73616d706c652f6272616e642f312e6a7067,'','1','0',0x70,'1292945577','0');
INSERT INTO tb_brands VALUES ('2','-1','0','1','1',0x4c47,0x4c47,0x73616d706c652f6272616e642f322e6a7067,'','1','0',0x6c,'1292945577','0');
INSERT INTO tb_brands VALUES ('3','-1','0','1','0',0x4d6f746f726f6c61,0x6d6f746f6c6f6c61,0x73616d706c652f6272616e642f332e6a7067,'','1','0',0x6d,'1292945577','0');
INSERT INTO tb_brands VALUES ('4','-1','1','1','1',0x4e6f6b6961,0x6e6f6b6961,0x73616d706c652f6272616e642f342e6a7067,'','1','0',0x6e,'1292945577','0');
INSERT INTO tb_brands VALUES ('5','1','1','4','1',0x5068696c697073,0x7068696c697073,0x73616d706c652f6272616e642f352e6a7067,'','0','0',0x66,'1292945577','0');
INSERT INTO tb_brands VALUES ('26','-1','1','4','0',0x53616d73756e67,0x73616d73756e67,0x73616d706c652f6272616e642f362e6a7067,'','0','0',0x73,'1292945577','0');
INSERT INTO tb_brands VALUES ('27','-1','-1','4','0',0x4d617473757368697461,0x70616e61736f6e6963,0x73616d706c652f6272616e642f372e6a7067,'','0','0',0x73,'1292945577','0');
INSERT INTO tb_brands VALUES ('28','-1','0','4','0',0x536f6e79204572696373736f6e,0x736f6e79,0x73616d706c652f6272616e642f382e6a7067,'','0','0',0x73,'1292945577','0');
INSERT INTO tb_brands VALUES ('29','-1','-1','4','0',0x5369656d656e73,0x73696d656e73,0x73616d706c652f6272616e642f392e6a7067,'','0','0',0x78,'1292945577','0');
INSERT INTO tb_brands VALUES ('32','1','1','275','0',0x416c636174656c,0x616c636174656c,0x73616d706c652f6272616e642f31302e6a7067,0x61736466,'0','0',0x61,'1292945577','0');

DROP TABLE IF EXISTS tb_brandtypes;
CREATE TABLE tb_brandtypes (
  id smallint(3) NOT NULL auto_increment auto_increment,
  parent_id smallint(3) NOT NULL default '0',
  `level` tinyint(1) NOT NULL default '1',
  `name` varchar(100) NOT NULL default '',
  display_order tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 AUTO_INCREMENT=13;

INSERT INTO tb_brandtypes VALUES ('1','0','1',0x4465636f726174697665206275696c64696e67206d6174657269616c73,'0');
INSERT INTO tb_brandtypes VALUES ('2','0','1',0x436c6f7468696e6720616e642073686f6573,'0');
INSERT INTO tb_brandtypes VALUES ('3','0','1',0x486f757365686f6c64204675726e6974757265,'0');
INSERT INTO tb_brandtypes VALUES ('4','0','1',0x466f6f64,'0');
INSERT INTO tb_brandtypes VALUES ('5','0','1',0x4469676974616c20686f6d65206170706c69616e636573,'0');
INSERT INTO tb_brandtypes VALUES ('6','0','1',0x4175746f205265616c20457374617465,'0');
INSERT INTO tb_brandtypes VALUES ('7','0','1',0x44696e696e6720456e7465727461696e6d656e74,'0');
INSERT INTO tb_brandtypes VALUES ('8','0','1',0x4d656368616e6963616c204368656d6963616c,'0');
INSERT INTO tb_brandtypes VALUES ('9','5','2',0x57617368696e67206d616368696e65,'0');
INSERT INTO tb_brandtypes VALUES ('10','5','2',0x4472696e6b696e67,'0');
INSERT INTO tb_brandtypes VALUES ('11','5','2',0x436f6d7075746572,'0');
INSERT INTO tb_brandtypes VALUES ('12','5','2',0x4d6f62696c65,'0');

DROP TABLE IF EXISTS tb_companies;
CREATE TABLE tb_companies (
  id int(10) NOT NULL auto_increment auto_increment,
  member_id int(10) NOT NULL default '0',
  cache_spacename varchar(255) NOT NULL default '',
  cache_membergroupid smallint(3) NOT NULL default '0',
  cache_credits smallint(6) NOT NULL default '0',
  topleveldomain varchar(255) NOT NULL default '',
  industry_id1 smallint(6) NOT NULL default '0',
  industry_id2 smallint(6) NOT NULL default '0',
  industry_id3 smallint(6) NOT NULL default '0',
  area_id1 char(6) NOT NULL default '0',
  area_id2 char(6) NOT NULL default '0',
  area_id3 char(6) NOT NULL default '0',
  type_id tinyint(2) NOT NULL default '0',
  `name` char(255) NOT NULL default '',
  description text,
  english_name char(100) NOT NULL default '',
  keywords varchar(50) NOT NULL default '',
  boss_name varchar(25) NOT NULL default '',
  manage_type varchar(25) NOT NULL default '',
  year_annual tinyint(2) NOT NULL default '0',
  property tinyint(1) NOT NULL default '0',
  configs text,
  bank_from varchar(50) NOT NULL default '',
  bank_account varchar(50) NOT NULL default '',
  main_prod varchar(100) NOT NULL default '',
  employee_amount varchar(25) NOT NULL default '',
  found_date char(10) NOT NULL default '0',
  reg_fund tinyint(2) NOT NULL default '0',
  reg_address varchar(200) NOT NULL default '',
  address varchar(200) NOT NULL default '',
  zipcode varchar(15) NOT NULL default '',
  main_brand varchar(100) NOT NULL default '',
  main_market varchar(200) NOT NULL default '',
  main_biz_place varchar(50) NOT NULL default '',
  main_customer varchar(200) NOT NULL default '',
  link_man varchar(25) NOT NULL default '',
  link_man_gender tinyint(1) NOT NULL default '0',
  position tinyint(1) NOT NULL default '0',
  tel varchar(25) NOT NULL default '',
  fax varchar(25) NOT NULL default '',
  mobile varchar(25) NOT NULL default '',
  email varchar(100) NOT NULL default '',
  site_url varchar(100) NOT NULL default '',
  picture varchar(50) NOT NULL default '',
  `status` tinyint(1) NOT NULL default '0',
  first_letter char(2) NOT NULL default '',
  if_commend tinyint(1) NOT NULL default '0',
  clicked int(5) NOT NULL default '1',
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id),
  KEY member_id (member_id)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 AUTO_INCREMENT=14;

INSERT INTO tb_companies VALUES ('1','1',0x61646d696e,'10','0','','1','11','24',0x31,0x32,0x33,'2',0x55616c696e6b20452d436f6d6d65726365,0x504850423242,0x55414c494e4b,'',0x53746576656e2063686f77,0x34,'3','1',0x613a313a7b733a31323a2274656d706c65745f6e616d65223b623a303b7d,0x4265696a696e672042616e6b,0x3132333432313433,0x55616c696e6b,0x34,0x393735353432343030,'5',0x4265696a696e67,0x4265696a696e672043697479,0x313030303130,0x55616c696e6b,'',0x4265696a696e672043697479,'',0x53746576656e63686f77,'1','4',0x283038362931302d3834313238393132,0x283038362931302d3834313238393132,0x3133303132333435363738,0x73657276696365407068706232622e636f6d,0x687474703a2f2f7777772e7068706232622e636f6d2f,0x73616d706c652f636f6d70616e792f312e6a7067,'1',0x5a,'1','1','1292945577','1292945577');
INSERT INTO tb_companies VALUES ('13','1',0x61646d696e,'9','0','','0','0','0',0x31,'0','0','2',0x4265696a696e672055616c696e6b20452d436f6d6d6572636520496e632e,0x4265696a696e672055616c696e6b20452d436f6d6d6572636520496e632e,0x55616c696e6b,'','','0','0','1','','','',0x55616c696e6b,'','','5',0x4265696a696e67,0x446f6e676368656e672044697374726963742c204265696a696e67,0x313030303130,0x55616c696e6b,'',0x4265696a696e67,'','','1','4',0x283030302931302d3834313238393132,0x283030302931302d3834313238393132,'',0x73657276696365407068706232622e636f6d,0x687474703a2f2f7777772e7068706232622e636f6d2f,0x73616d706c652f636f6d70616e792f312e6a7067,'1',0x5a,'1','1','1292945577','0');
INSERT INTO tb_companies VALUES ('3','2',0x617468656e6131,'9','0','','0','0','0',0x31,0x32,0x33,'0',0x446f6e676775616e2043686f6e6720596920506c61737469637320436f,0x54686973206973207468652070726573656e746174696f6e206f6620646174612c20646f206e6f742067756172616e746565207468652061757468656e746963697479206f66207468652064617461,'','','','0','0','1','','','','','','','0','','','','','','','','','1','7','','','','','',0x73616d706c652f636f6d70616e792f6e6f2e6a7067,'1',0x5a,'1','1','1292945577','0');
INSERT INTO tb_companies VALUES ('4','2',0x617468656e6132,'9','0','','0','0','0',0x31,0x32,0x33,'0',0x436f7070657220436f2e2c204c74642e204e696e67626f204a69616e67646f6e672058696e672046656e67,0x54686973206973207468652070726573656e746174696f6e206f6620646174612c20646f206e6f742067756172616e746565207468652061757468656e746963697479206f66207468652064617461,'','','','0','0','1','','','','','','','0','','','','','','','','','1','7','','','','','',0x73616d706c652f636f6d70616e792f6e6f2e6a7067,'1',0x5a,'1','1','1292945577','0');
INSERT INTO tb_companies VALUES ('5','2',0x617468656e6133,'9','0','','0','0','0',0x31,0x32,0x33,'0',0x5368656e7a68656e20456c656374726f6e696320546563686e6f6c6f677920436f2e2c204c74642e206c6574746572204e6f6461,0x54686973206973207468652070726573656e746174696f6e206f6620646174612c20646f206e6f742067756172616e746565207468652061757468656e746963697479206f66207468652064617461,'','','','0','0','1','','','','','','','0','','','','','','','','','1','7','','','','','',0x73616d706c652f636f6d70616e792f6e6f2e6a7067,'1',0x5a,'1','1','1292945577','0');
INSERT INTO tb_companies VALUES ('6','2',0x617468656e6134,'9','0','','0','0','0',0x31,0x32,0x33,'0',0x4672696374696f6e204d6174657269616c20436f2e2c204c74642e2048616e677a686f75204a6f6e6168,0x54686973206973207468652070726573656e746174696f6e206f6620646174612c20646f206e6f742067756172616e746565207468652061757468656e746963697479206f66207468652064617461,'','','','0','0','1','','','','','','','0','','','','','','','','','1','7','','','','','',0x73616d706c652f636f6d70616e792f6e6f2e6a7067,'1',0x5a,'1','1','1292945577','0');
INSERT INTO tb_companies VALUES ('7','2',0x617468656e6135,'9','0','','0','0','0',0x31,0x32,0x33,'0',0x5368656e7a68656e204875616c69616e20547261646520436f2e2c204c74642e,0x54686973206973207468652070726573656e746174696f6e206f6620646174612c20646f206e6f742067756172616e746565207468652061757468656e746963697479206f66207468652064617461,'','','','0','0','1','','','','','','','0','','','','','','','','','1','7','','','','','',0x73616d706c652f636f6d70616e792f6e6f2e6a7067,'1',0x5a,'1','1','1292945577','0');
INSERT INTO tb_companies VALUES ('8','2',0x617468656e6136,'9','0','','0','0','0',0x31,0x32,0x33,'0',0x4275696c64696e67204465636f726174696f6e20436f2e2c204c74642e204265696a696e67205875616e2053742e,0x54686973206973207468652070726573656e746174696f6e206f6620646174612c20646f206e6f742067756172616e746565207468652061757468656e746963697479206f66207468652064617461,'','','','0','0','1','','','','','','','0','','','','','','','','','1','7','','','','','',0x73616d706c652f636f6d70616e792f6e6f2e6a7067,'1',0x5a,'1','1','1292945577','0');
INSERT INTO tb_companies VALUES ('9','2',0x617468656e6137,'9','0','','0','0','0',0x31,0x32,0x33,'0',0x4f6e204861697869626f736920466c6f7720436f6e74726f6c20436f2e2c204c74642e,0x54686973206973207468652070726573656e746174696f6e206f6620646174612c20646f206e6f742067756172616e746565207468652061757468656e746963697479206f66207468652064617461,'','','','0','0','1','','','','','','','0','','','','','','','','','1','7','','','','','',0x73616d706c652f636f6d70616e792f6e6f2e6a7067,'1',0x5a,'1','1','1292945577','0');
INSERT INTO tb_companies VALUES ('10','2',0x617468656e6138,'9','0','','0','0','0',0x31,0x32,0x33,'0',0x5369636875616e204a696e204d696e67204275696c64696e67204d6174657269616c20436f2e2c204c74642e,0x54686973206973207468652070726573656e746174696f6e206f6620646174612c20646f206e6f742067756172616e746565207468652061757468656e746963697479206f66207468652064617461,'','','','0','0','1','','','','','','','0','','','','','','','','','1','7','','','','','',0x73616d706c652f636f6d70616e792f6e6f2e6a7067,'1',0x5a,'1','1','1292945577','0');
INSERT INTO tb_companies VALUES ('11','2',0x617468656e6139,'9','0','','0','0','0',0x31,0x32,0x33,'0',0x4d6173746572204175746f6d6174696f6e2053757a686f7520456e7669726f6e6d656e74616c2050726f74656374696f6e2045717569706d656e7420436f2e2c204c74642e20313030,0x54686973206973207468652070726573656e746174696f6e206f6620646174612c20646f206e6f742067756172616e746565207468652061757468656e746963697479206f66207468652064617461,'','','','0','0','1','','','','','','','0','','','','','','','','','1','7','','','','','',0x73616d706c652f636f6d70616e792f6e6f2e6a7067,'1',0x5a,'1','1','1292945577','0');

DROP TABLE IF EXISTS tb_companyfields;
CREATE TABLE tb_companyfields (
  company_id int(10) NOT NULL default '0',
  map_longitude varchar(25) NOT NULL default '',
  map_latitude varchar(25) NOT NULL default '',
  PRIMARY KEY  (company_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS tb_companynewses;
CREATE TABLE tb_companynewses (
  id int(10) NOT NULL auto_increment auto_increment,
  member_id int(10) NOT NULL default '-1',
  company_id int(10) NOT NULL default '-1',
  type_id smallint(3) NOT NULL default '0',
  title varchar(100) NOT NULL default '',
  content text,
  picture varchar(100) NOT NULL default '',
  `status` tinyint(1) NOT NULL default '0',
  clicked int(5) NOT NULL default '1',
  created int(11) NOT NULL default '0',
  modified int(11) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_companynewstypes;
CREATE TABLE tb_companynewstypes (
  id smallint(3) NOT NULL auto_increment auto_increment,
  `name` varchar(255) NOT NULL default '',
  display_order tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_companytypes;
CREATE TABLE tb_companytypes (
  id smallint(3) NOT NULL auto_increment auto_increment,
  `name` varchar(100) NOT NULL,
  display_order tinyint(1) NOT NULL,
  url varchar(100) NOT NULL,
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_dicts;
CREATE TABLE tb_dicts (
  id int(10) NOT NULL auto_increment auto_increment,
  dicttype_id smallint(6) NOT NULL default '0',
  extend_dicttypeid varchar(25) NOT NULL default '',
  word varchar(255) NOT NULL default '',
  word_name varchar(255) NOT NULL default '',
  digest varchar(255) NOT NULL default '',
  content text,
  picture varchar(255) NOT NULL default '',
  refer tinytext,
  hits int(10) NOT NULL default '1',
  closed tinyint(1) NOT NULL default '0',
  if_commend tinyint(1) NOT NULL default '0',
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 AUTO_INCREMENT=3;

INSERT INTO tb_dicts VALUES ('1','7','',0x436f737420616e642066726569676874,0x436f737420616e642046726569676874,0x436f737420616e642066726569676874efbc88436f737420616e642046726569676874efbc89286e616d656420706f7274206f6620736869706d656e7429efbc8c4e616d656420706f7274206f662064657374696e6174696f6ee380823c2f703e,0x3c703e436f737420616e642066726569676874efbc88436f737420616e642046726569676874efbc89286e616d656420706f7274206f6620736869706d656e7429efbc8c4e616d656420706f7274206f662064657374696e6174696f6ee380824974206d65616e73207468652073656c6c6572206d757374207061792074686520676f6f647320746f20746865206e616d656420706f7274206f662064657374696e6174696f6e2c20636f737420616e6420667265696768742c2062757420676f6f647320746f207468652073686970206465636b2c2074686520636172676f207269736b2c206c6f7373206f722064616d61676520616e64206163636964656e747320726573756c74696e672066726f6d20746865206164646974696f6e616c20657870656e64697475726520696e2074686520676f6f64732070617373207468652064657369676e6174656420706f727420736869702c207468652062757264656e206f6e20746865206275796572206279207468652073656c6c6572efbc8e416c736f207265717569726573207468652073656c6c6572206f6620676f6f647320637573746f6d7320636c656172616e63652070726f636564757265732e20546865207465726d20666f7220736561206f7220696e6c616e64207761746572776179207472616e73706f72742e,'','','2','0','0','1292945577','1292945577');
INSERT INTO tb_dicts VALUES ('2','0','',0x4d756c74696d6f64616c207472616e73706f7274,'',0x4d756c74696d6f64616c207472616e73706f72742c2069732074686520736869706d656e7420746f2064657374696e6174696f6e2066726f6d20746865207472616e73706f72742070726f6365737320636f6e7461696e732074776f206f72206d6f7265206d6f646573206f66207472616e73706f72742c207365612c206c616e642c206169722c20726976657220616e6420736f206f6e2e,'','','','1','0','0','1292945577','1292945577');

DROP TABLE IF EXISTS tb_dicttypes;
CREATE TABLE tb_dicttypes (
  id smallint(6) NOT NULL auto_increment auto_increment,
  `name` varchar(255) NOT NULL default '',
  parent_id smallint(6) NOT NULL default '0',
  display_order tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 AUTO_INCREMENT=15;

INSERT INTO tb_dicttypes VALUES ('1',0x4c6f67697374696373206b6e6f776c65646765,'0','0');
INSERT INTO tb_dicttypes VALUES ('2',0x4c6f67697374696373204d616e6167656d656e74,'0','0');
INSERT INTO tb_dicttypes VALUES ('3',0x4c6f67697374696373,'0','0');
INSERT INTO tb_dicttypes VALUES ('4',0x4c61777320616e6420726567756c6174696f6e73,'0','0');
INSERT INTO tb_dicttypes VALUES ('5',0x452d636f6d6d65726365,'0','0');
INSERT INTO tb_dicttypes VALUES ('6',0x4b6e6f776c65646765,'0','0');
INSERT INTO tb_dicttypes VALUES ('7',0x436f6d6d6f6e205465726d73,'1','0');
INSERT INTO tb_dicttypes VALUES ('8',0x5472616e73706f7274206b6e6f776c65646765,'1','0');
INSERT INTO tb_dicttypes VALUES ('9',0x53746f72616765206f66206b6e6f776c65646765,'1','0');
INSERT INTO tb_dicttypes VALUES ('10',0x4c6f676973746963732045717569706d656e74,'1','0');
INSERT INTO tb_dicttypes VALUES ('11',0x4c6f6769737469637320496e737572616e6365,'1','0');
INSERT INTO tb_dicttypes VALUES ('12',0x5468697264205061727479204c6f67697374696373,'1','0');
INSERT INTO tb_dicttypes VALUES ('13',0x537570706c7920436861696e,'1','0');
INSERT INTO tb_dicttypes VALUES ('14',0x4f74686572,'1','0');

DROP TABLE IF EXISTS tb_expoes;
CREATE TABLE tb_expoes (
  id int(10) NOT NULL auto_increment auto_increment,
  expotype_id smallint(3) NOT NULL default '0',
  `name` varchar(100) NOT NULL default '',
  description text,
  begin_time int(10) NOT NULL default '0',
  end_time int(10) NOT NULL default '0',
  industry_ids varchar(100) NOT NULL default '0',
  industry_id1 smallint(6) NOT NULL default '0',
  industry_id2 smallint(6) NOT NULL default '0',
  industry_id3 smallint(6) NOT NULL default '0',
  area_id1 smallint(6) NOT NULL default '0',
  area_id2 smallint(6) NOT NULL default '0',
  area_id3 smallint(6) NOT NULL default '0',
  address varchar(100) NOT NULL default '',
  stadium_name varchar(100) NOT NULL default '',
  refresh_method varchar(100) NOT NULL default '',
  scope varchar(100) NOT NULL default '',
  `hosts` varchar(255) NOT NULL default '',
  organisers varchar(255) NOT NULL default '',
  co_organisers varchar(255) NOT NULL default '',
  sponsors varchar(255) NOT NULL default '',
  contacts text,
  important_notice text,
  picture varchar(100) NOT NULL default '',
  if_commend tinyint(1) NOT NULL default '0',
  `status` tinyint(1) NOT NULL default '0',
  hits smallint(6) NOT NULL default '1',
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 AUTO_INCREMENT=13;

INSERT INTO tb_expoes VALUES ('1','1',0x5468652031347468204368696e6120426561757479204578706f206f70656e696e67,'','1292945577','1295537577','0','0','0','0','0','0','0','','','','','','','','','','','','0','1','1','1292945577','0');
INSERT INTO tb_expoes VALUES ('2','1',0x5468652032397468204775616e677a686f7520496e7465726e6174696f6e616c2042656175747920466169722041737065637420776f6e64657266756c2073686f77,'','1292945577','1295537577','0','0','0','0','0','0','0','','','','','','','','','','','','0','1','1','1292945577','0');
INSERT INTO tb_expoes VALUES ('3','1',0x4e7574726974696f6e20616e64204865616c7468206f66207468652054656e7468204368696e6120496e7465726e6174696f6e616c20496e6475737472792046616972,'','1292945577','1295537577','0','0','0','0','0','0','0','','','','','','','','','','','','0','1','1','1292945577','0');
INSERT INTO tb_expoes VALUES ('4','1',0x5368616e676861692c204368696e612c2054657874696c657320616e64204e6f6e776f76656e732045786869626974696f6e,'','1292945577','1295537577','0','0','0','0','0','0','0','','','','','','','','','','','','0','1','1','1292945577','0');
INSERT INTO tb_expoes VALUES ('5','2',0x546f6b796f20496e7465726e6174696f6e616c2045786869626974696f6e206f6620666f6f747765617220616e64206c6561746865722070726f6475637473,'','1292945577','1295537577','0','0','0','0','0','0','0','','','','','','','','','','','','0','1','1','1292945577','0');
INSERT INTO tb_expoes VALUES ('6','2',0x5468204368696e6120496e7465726e6174696f6e616c20476c61737320496e647573747269616c20546563686e6963616c2045786869626974696f6e,'','1292945577','1295537577','0','0','0','0','0','0','0','','','','','','','','','','','','0','1','1','1292945577','0');
INSERT INTO tb_expoes VALUES ('7','1',0x466966746820496e6e6572204d6f6e676f6c69612c204368696e6120466f6f642050726f63657373696e6720616e64205061636b6167696e67204d616368696e6572792045786869626974696f6e,'','1292945577','1295537577','0','0','0','0','0','0','0','','','','','','','','','','','','0','1','1','1292945577','0');
INSERT INTO tb_expoes VALUES ('8','2',0x536576656e7468204368696e6120496e7465726e6174696f6e616c20466f6f642050726f63657373696e6720616e64205061636b6167696e672045717569706d656e742045786869626974696f6e,'','1292945577','1295537577','0','0','0','0','0','0','0','','','','','','','','','','','','0','1','1','1292945577','0');
INSERT INTO tb_expoes VALUES ('9','1',0x54656e7468204368696e61204265696a696e6720496e7465726e6174696f6e616c20477265656e20466f6f6420616e64204f7267616e696320466f6f642046616972,'','1292945577','1295537577','0','0','0','0','0','0','0','','','','','','','','','','','','0','1','1','1292945577','0');
INSERT INTO tb_expoes VALUES ('10','2',0x31357468204368696e6120496e7465726e6174696f6e616c204275696c64696e67204465636f726174696f6e204d6174657269616c732045786869626974696f6e,'','1292945577','1295537577','0','0','0','0','0','0','0','','','','','','','','','','','','0','1','1','1292945577','0');
INSERT INTO tb_expoes VALUES ('11','1',0x5468697264205765737465726e204368696e61204275696c64696e6720546563686e6f6c6f67792045786869626974696f6e,'','1292945577','1295537577','0','0','0','0','0','0','0','','','','','','','','','','',0x73616d706c652f6f746865722f666169722d322e6a7067,'1','1','1','1292945577','0');
INSERT INTO tb_expoes VALUES ('12','1',0x576f726c64204578706f2032303130205368616e67686169204368696e61,0x5368616e6768616920576f726c64204578706f206973206f7572206f70706f7274756e697479,'1292945577','1295537577','0','0','0','0','0','0','0','','','','','','','','','','',0x73616d706c652f6f746865722f666169722d312e6a7067,'1','1','1','1292945577','0');

DROP TABLE IF EXISTS tb_expomembers;
CREATE TABLE tb_expomembers (
  id smallint(6) NOT NULL auto_increment auto_increment,
  expo_id smallint(6) NOT NULL default '0',
  member_id int(10) NOT NULL,
  company_id int(10) NOT NULL,
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id),
  UNIQUE KEY expo_id (expo_id,member_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_expostadiums;
CREATE TABLE tb_expostadiums (
  id smallint(6) NOT NULL auto_increment auto_increment,
  sa varchar(100) default '',
  country_id smallint(6) default '0',
  province_id smallint(6) default '0',
  city_id smallint(6) default '0',
  sb varchar(200) default '',
  sc varchar(150) default '',
  sd varchar(150) default '',
  se varchar(150) default '',
  sf varchar(150) default '',
  sg text,
  sh smallint(6) default '0',
  created int(10) default NULL,
  modified int(10) default NULL,
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_expotypes;
CREATE TABLE tb_expotypes (
  id smallint(3) NOT NULL auto_increment auto_increment,
  `name` varchar(50) NOT NULL default '',
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 AUTO_INCREMENT=3;

INSERT INTO tb_expotypes VALUES ('1',0x4368696e612045786869626974696f6e,'0','0');
INSERT INTO tb_expotypes VALUES ('2',0x496e7465726e6174696f6e616c2045786869626974696f6e,'0','0');

DROP TABLE IF EXISTS tb_favorites;
CREATE TABLE tb_favorites (
  id int(10) NOT NULL auto_increment auto_increment,
  member_id int(10) NOT NULL default '-1',
  target_id int(10) NOT NULL,
  type_id tinyint(1) NOT NULL,
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id),
  UNIQUE KEY member_id (member_id,target_id,type_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_feeds;
CREATE TABLE tb_feeds (
  id int(10) NOT NULL auto_increment auto_increment,
  type_id tinyint(1) NOT NULL default '0',
  `type` varchar(100) NOT NULL default '',
  member_id int(10) NOT NULL default '0',
  username varchar(100) NOT NULL default '',
  `data` text NOT NULL,
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_formattributes;
CREATE TABLE tb_formattributes (
  id int(10) NOT NULL auto_increment auto_increment,
  type_id tinyint(1) NOT NULL,
  form_id smallint(3) NOT NULL default '0',
  formitem_id smallint(3) NOT NULL default '0',
  primary_id int(10) NOT NULL,
  attribute text,
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_formitems;
CREATE TABLE tb_formitems (
  id smallint(3) NOT NULL auto_increment auto_increment,
  form_id smallint(3) NOT NULL default '0',
  title varchar(100) NOT NULL default '',
  description text,
  identifier varchar(50) NOT NULL default '',
  `type` enum('checkbox','select','radio','calendar','url','image','textarea','email','number','text') NOT NULL default 'text',
  rules text,
  display_order tinyint(1) NOT NULL,
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 AUTO_INCREMENT=7;

INSERT INTO tb_formitems VALUES ('1','0',0x4e756d62657273,'',0x70726f647563745f7175616e74697479,0x74657874,'','0');
INSERT INTO tb_formitems VALUES ('2','0',0x5061636b6167696e67,'',0x7061636b696e67,0x74657874,'','0');
INSERT INTO tb_formitems VALUES ('3','0',0x5072696365204465736372697074696f6e,'',0x70726f647563745f7072696365,0x74657874,'','0');
INSERT INTO tb_formitems VALUES ('4','0',0x53706563696669636174696f6e73,'',0x70726f647563745f73706563696669636174696f6e,0x74657874,'','0');
INSERT INTO tb_formitems VALUES ('5','0',0x494420436f6465,'',0x73657269616c5f6e756d626572,0x74657874,'','0');
INSERT INTO tb_formitems VALUES ('6','0',0x506c616365,'',0x70726f64756374696f6e5f706c616365,0x74657874,'','0');

DROP TABLE IF EXISTS tb_forms;
CREATE TABLE tb_forms (
  id smallint(3) NOT NULL auto_increment auto_increment,
  type_id tinyint(1) NOT NULL,
  `name` varchar(100) NOT NULL default '',
  items text,
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 AUTO_INCREMENT=3;

INSERT INTO tb_forms VALUES ('1','1',0x537570706c7920616e642064656d616e64206f6620637573746f6d206669656c6473,0x312c322c332c342c352c36);
INSERT INTO tb_forms VALUES ('2','2',0x50726f6475637420437573746f6d204669656c6473,0x312c322c332c342c352c36);

DROP TABLE IF EXISTS tb_friendlinks;
CREATE TABLE tb_friendlinks (
  id smallint(3) NOT NULL auto_increment auto_increment,
  friendlinktype_id tinyint(1) NOT NULL default '0',
  industry_id smallint(6) NOT NULL default '0',
  area_id smallint(6) NOT NULL default '0',
  title varchar(50) NOT NULL default '',
  logo varchar(100) NOT NULL default '',
  url varchar(50) NOT NULL default '',
  priority smallint(3) NOT NULL default '0',
  `status` tinyint(1) NOT NULL default '1',
  description text,
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 AUTO_INCREMENT=3;

INSERT INTO tb_friendlinks VALUES ('1','1','0','0',0x55616c696e6b,'',0x687474703a2f2f7777772e7068706232622e636f6d2f,'0','1','','1292945577','0');
INSERT INTO tb_friendlinks VALUES ('2','2','0','0',0x55616c696e6b20452d636f6d6d65726365205765622044656d6f,'',0x687474703a2f2f64656d6f2e7068706232622e636f6d2f,'0','1','','1292945577','0');

DROP TABLE IF EXISTS tb_friendlinktypes;
CREATE TABLE tb_friendlinktypes (
  id tinyint(1) NOT NULL auto_increment auto_increment,
  `name` varchar(25) NOT NULL default '',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 AUTO_INCREMENT=3;

INSERT INTO tb_friendlinktypes VALUES ('1',0x4c696e6b73);
INSERT INTO tb_friendlinktypes VALUES ('2',0x506172746e657273);

DROP TABLE IF EXISTS tb_goods;
CREATE TABLE tb_goods (
  id smallint(6) NOT NULL auto_increment auto_increment,
  `name` varchar(255) NOT NULL default '',
  description text,
  price float(9,2) NOT NULL default '0.00',
  closed tinyint(1) NOT NULL default '1',
  picture varchar(100) NOT NULL default '',
  if_commend tinyint(1) NOT NULL default '0',
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 AUTO_INCREMENT=3;

INSERT INTO tb_goods VALUES ('1',0x47656e6572616c204d656d626572736869702055706772616465,'','1000.00','1','','0','1292945577','1292945577');
INSERT INTO tb_goods VALUES ('2',0x53656e696f72204d656d6265722055706772616465,'','1500.00','1','','0','1292945577','1292945577');

DROP TABLE IF EXISTS tb_helps;
CREATE TABLE tb_helps (
  id smallint(6) NOT NULL auto_increment auto_increment,
  helptype_id smallint(3) NOT NULL default '0',
  title varchar(100) NOT NULL default '',
  content text,
  highlight tinyint(1) NOT NULL default '0',
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_helptypes;
CREATE TABLE tb_helptypes (
  id smallint(3) NOT NULL auto_increment auto_increment,
  title varchar(100) NOT NULL default '',
  description varchar(100) NOT NULL default '',
  parent_id smallint(3) NOT NULL default '0',
  `level` tinyint(1) NOT NULL default '0',
  display_order tinyint(1) NOT NULL default '0',
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_htmlcaches;
CREATE TABLE tb_htmlcaches (
  id int(5) NOT NULL auto_increment auto_increment,
  page_name varchar(100) NOT NULL default '',
  last_cached_time int(10) NOT NULL default '0',
  cache_cycle_time int(10) NOT NULL default '86400',
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_industries;
CREATE TABLE tb_industries (
  id smallint(6) NOT NULL auto_increment auto_increment,
  attachment_id int(9) NOT NULL default '0',
  industrytype_id smallint(3) NOT NULL default '0',
  child_ids text,
  `name` varchar(255) NOT NULL default '',
  url varchar(255) NOT NULL default '',
  alias_name varchar(255) NOT NULL default '',
  highlight tinyint(1) NOT NULL default '0',
  parent_id smallint(6) NOT NULL default '0',
  top_parentid smallint(6) NOT NULL default '0',
  `level` tinyint(1) NOT NULL default '1',
  display_order tinyint(1) NOT NULL default '0',
  description text,
  available tinyint(1) NOT NULL default '1',
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=87 DEFAULT CHARSET=utf8 AUTO_INCREMENT=87;

INSERT INTO tb_industries VALUES ('1','0','0','',0x4167726963756c74757265,'','','0','0','0','1','0','','1','0','0');
INSERT INTO tb_industries VALUES ('2','0','0','',0x4170706172656c2646617368696f6e,'','','0','0','0','1','0','','1','0','0');
INSERT INTO tb_industries VALUES ('3','0','0','',0x4175746f6d6f62696c65,'','','0','0','0','1','0','','1','0','0');
INSERT INTO tb_industries VALUES ('4','0','0','',0x427573696e6573735365727669636573,'','','0','0','0','1','0','','1','0','0');
INSERT INTO tb_industries VALUES ('5','0','0','',0x4368656d6963616c73,'','','0','0','0','1','0','','1','0','0');
INSERT INTO tb_industries VALUES ('6','0','0','',0x436f6d70757465724861726477617265536f667477617265,'','','0','0','0','1','0','','1','0','0');
INSERT INTO tb_industries VALUES ('7','0','0','',0x436f6e737472756374696f6e265265616c457374617465,'','','0','0','0','1','0','','1','0','0');
INSERT INTO tb_industries VALUES ('8','0','0','',0x456c656374726f6e69637326456c656374726963616c,'','','0','0','0','1','0','','1','0','0');
INSERT INTO tb_industries VALUES ('9','0','0','',0x456e65726779,'','','0','0','0','1','0','','1','0','0');
INSERT INTO tb_industries VALUES ('10','0','0','',0x456e7669726f6e6d656e74,'','','0','0','0','1','0','','1','0','0');
INSERT INTO tb_industries VALUES ('11','0','0','',0x457863657373496e76656e746f7279,'','','0','0','0','1','0','','1','0','0');
INSERT INTO tb_industries VALUES ('12','0','0','',0x466f6f64264265766572616765,'','','0','0','0','1','0','','1','0','0');
INSERT INTO tb_industries VALUES ('13','0','0','',0x476966747326437261667473,'','','0','0','0','1','0','','1','0','0');
INSERT INTO tb_industries VALUES ('14','0','0','',0x4865616c746826426561757479,'','','0','0','0','1','0','','1','0','0');
INSERT INTO tb_industries VALUES ('15','0','0','',0x486f6d654170706c69616e636573,'','','0','0','0','1','0','','1','0','0');
INSERT INTO tb_industries VALUES ('16','0','0','',0x486f6d65537570706c696573,'','','0','0','0','1','0','','1','0','0');
INSERT INTO tb_industries VALUES ('17','0','0','',0x496e647573747269616c537570706c696573,'','','0','0','0','1','0','','1','0','0');
INSERT INTO tb_industries VALUES ('18','0','0','',0x4d696e6572616c732c4d6574616c73264d6174657269616c73,'','','0','0','0','1','0','','1','0','0');
INSERT INTO tb_industries VALUES ('19','0','0','',0x4f6666696365537570706c696573,'','','0','0','0','1','0','','1','0','0');
INSERT INTO tb_industries VALUES ('20','0','0','',0x5061636b6167696e67265061706572,'','','0','0','0','1','0','','1','0','0');
INSERT INTO tb_industries VALUES ('21','0','0','',0x5072696e74696e67265075626c697368696e67,'','','0','0','0','1','0','','1','0','0');
INSERT INTO tb_industries VALUES ('22','0','0','',0x53656375726974792650726f74656374696f6e,'','','0','0','0','1','0','','1','0','0');
INSERT INTO tb_industries VALUES ('23','0','0','',0x53706f72747326456e7465727461696e6d656e74,'','','0','0','0','1','0','','1','0','0');
INSERT INTO tb_industries VALUES ('24','0','0','',0x54656c65636f6d6d756e69636174696f6e73,'','','0','0','0','1','0','','1','0','0');
INSERT INTO tb_industries VALUES ('25','0','0','',0x54657874696c6573264c65617468657250726f6475637473,'','','0','0','0','1','0','','1','0','0');
INSERT INTO tb_industries VALUES ('26','0','0','',0x546f7973,'','','0','0','0','1','0','','1','0','0');
INSERT INTO tb_industries VALUES ('27','0','0','',0x5472616e73706f72746174696f6e,'','','0','0','0','1','0','','1','0','0');
INSERT INTO tb_industries VALUES ('28','0','0','',0x4167726963756c747572652642792d70726f647563744167656e74,'','','0','1','1','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('29','0','0','',0x4167726963756c7475726550726f6475637453746f636b73,'','','0','1','1','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('30','0','0','',0x4167726f6368656d6963616c732650657374696369646573,'','','0','1','1','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('31','0','0','',0x416e696d616c45787472616374,'','','0','1','1','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('32','0','0','',0x416e696d616c466f6464657273,'','','0','1','1','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('33','0','0','',0x416e696d616c48757362616e647279,'','','0','1','1','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('34','0','0','',0x42616d626f6f2652617474616e50726f6475637473,'','','0','1','1','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('35','0','0','',0x4265616e73,'','','0','1','1','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('36','0','0','',0x43696761726574746526546f626163636f,'','','0','1','1','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('37','0','0','',0x45676773,'','','0','1','1','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('38','0','0','',0x4661726d4d616368696e657326546f6f6c73,'','','0','1','1','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('39','0','0','',0x466973686572794d616368696e657279,'','','0','1','1','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('40','0','0','',0x466c6f7765727326506c616e74,'','','0','1','1','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('41','0','0','',0x466f726573744d616368696e657279,'','','0','1','1','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('42','0','0','',0x4672756974,'','','0','1','1','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('43','0','0','',0x477261696e,'','','0','1','1','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('44','0','0','',0x4d757368726f6f6d2654727566666c65,'','','0','1','1','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('45','0','0','',0x4e757473264b65726e656c73,'','','0','1','1','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('46','0','0','',0x4f7468657273,'','','0','1','1','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('47','0','0','',0x506c616e7426416e696d616c4f696c,'','','0','1','1','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('48','0','0','',0x506c616e7445787472616374,'','','0','1','1','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('49','0','0','',0x506c616e7453656564,'','','0','1','1','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('50','0','0','',0x506f756c747279264c69766573746f636b,'','','0','1','1','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('51','0','0','',0x566567657461626c65,'','','0','1','1','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('52','0','0','',0x4170706172656c20262046617368696f6e204167656e7473,'','','0','16','16','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('53','0','0','',0x4170706172656c2053746f636b73,'','','0','16','16','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('54','0','0','',0x4174686c657469632057656172,'','','0','16','16','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('55','0','0','',0x42617468726f6265,'','','0','16','16','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('56','0','0','',0x4368696c6472656e204761726d656e74,'','','0','16','16','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('57','0','0','',0x436f7374756d65202620436572656d6f6e79,'','','0','16','16','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('58','0','0','',0x446f776e204761726d656e74,'','','0','16','16','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('59','0','0','',0x4574686e6963204761726d656e74,'','','0','16','16','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('60','0','0','',0x46617368696f6e204163636573736f72696573,'','','0','16','16','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('61','0','0','',0x42656c74732026204163636573736f72696573204861747320262043617073206d6f7265466f6f7477656172,'','','0','16','16','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('62','0','0','',0x53706f7274732053686f657320426f6f7473206d6f7265467572204761726d656e74,'','','0','16','16','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('63','0','0','',0x4761726d656e74204163636573736f72696573,'','','0','16','16','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('64','0','0','',0x427574746f6e732026204275636b6c6573204f7468657273206d6f7265476c6f7665732026204d697474656e73,'','','0','16','16','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('65','0','0','',0x496e66616e74204761726d656e74,'','','0','16','16','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('66','0','0','',0x4a61636b6574,'','','0','16','16','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('67','0','0','',0x4a65616e73,'','','0','16','16','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('68','0','0','',0x4c656174686572204761726d656e74,'','','0','16','16','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('69','0','0','',0x4c6569737572652057656172,'','','0','16','16','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('70','0','0','',0x4f7468657273,'','','0','16','16','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('71','0','0','',0x4f7574657277656172,'','','0','16','16','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('72','0','0','',0x50616e747320262054726f7573657273,'','','0','16','16','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('73','0','0','',0x52656c61746564204d616368696e65,'','','0','16','16','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('74','0','0','',0x536577696e67204d616368696e657279,'','','0','16','16','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('75','0','0','',0x536869727473202620426c6f75736573,'','','0','16','16','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('76','0','0','',0x53696c6b204761726d656e74,'','','0','16','16','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('77','0','0','',0x536b6972747320262044726573736573,'','','0','16','16','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('78','0','0','',0x536f636b7320262053746f636b696e6773,'','','0','16','16','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('79','0','0','',0x5370656369616c697479,'','','0','16','16','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('80','0','0','',0x537569747320262054757865646f,'','','0','16','16','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('81','0','0','',0x5377656174657273,'','','0','16','16','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('82','0','0','',0x5377696d77656172202620426561636877656172,'','','0','16','16','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('83','0','0','',0x542d536869727473,'','','0','16','16','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('84','0','0','',0x556e646572776561722026204e6967687477656172,'','','0','16','16','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('85','0','0','',0x427261732026204c696e676572696520556e6465727765617220536574206d6f7265556e69666f726d73202620576f726b77656172,'','','0','16','16','2','0','','1','0','0');
INSERT INTO tb_industries VALUES ('86','0','0','',0x5573656420436c6f74686573,'','','0','16','16','2','0','','1','0','0');

DROP TABLE IF EXISTS tb_industryfields;
CREATE TABLE tb_industryfields (
  industry_id smallint(6) NOT NULL,
  type_id enum('offer','company','product','fair','market','news','hr') NOT NULL default 'offer',
  keyword_ids text,
  PRIMARY KEY  (industry_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS tb_industrymodels;
CREATE TABLE tb_industrymodels (
  industry_id smallint(6) NOT NULL,
  model_id enum('offers','products','companies') NOT NULL default 'offers',
  PRIMARY KEY  (industry_id,model_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS tb_industrytypes;
CREATE TABLE tb_industrytypes (
  id smallint(3) NOT NULL auto_increment auto_increment,
  `name` varchar(64) NOT NULL default '',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 AUTO_INCREMENT=6;

INSERT INTO tb_industrytypes VALUES ('1',0x496e647573747269616c);
INSERT INTO tb_industrytypes VALUES ('2',0x436f6e73756d657220676f6f6473);
INSERT INTO tb_industrytypes VALUES ('3',0x526177206d6174657269616c73);
INSERT INTO tb_industrytypes VALUES ('4',0x427573696e657373205365727669636573);
INSERT INTO tb_industrytypes VALUES ('5',0x4f74686572);

DROP TABLE IF EXISTS tb_inqueries;
CREATE TABLE tb_inqueries (
  id int(10) NOT NULL auto_increment auto_increment,
  to_member_id int(10) default NULL,
  to_company_id int(10) default NULL,
  title varchar(50) NOT NULL default '',
  content text,
  send_achive tinyint(1) default NULL,
  know_more varchar(50) NOT NULL default '',
  exp_quantity varchar(15) NOT NULL default '',
  exp_price float(9,2) NOT NULL default '0.00',
  contacts text,
  user_ip varchar(11) default '',
  created int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_jobs;
CREATE TABLE tb_jobs (
  id int(10) NOT NULL auto_increment auto_increment,
  member_id int(10) NOT NULL default '-1',
  company_id int(10) NOT NULL default '-1',
  cache_spacename varchar(25) NOT NULL default '',
  industry_id1 smallint(6) NOT NULL default '0',
  industry_id2 smallint(6) NOT NULL default '0',
  industry_id3 smallint(6) NOT NULL default '0',
  area_id1 smallint(6) NOT NULL default '0',
  area_id2 smallint(6) NOT NULL default '0',
  area_id3 smallint(6) NOT NULL default '0',
  `name` varchar(150) NOT NULL default '',
  work_station varchar(50) NOT NULL default '',
  content text,
  require_gender_id tinyint(1) NOT NULL default '0',
  peoples varchar(5) NOT NULL default '',
  require_education_id tinyint(1) NOT NULL default '0',
  require_age varchar(10) NOT NULL default '',
  salary_id tinyint(1) NOT NULL default '0',
  worktype_id tinyint(1) NOT NULL default '0',
  `status` tinyint(1) NOT NULL default '0',
  clicked int(5) NOT NULL default '1',
  expire_time int(10) NOT NULL default '0',
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_jobtypes;
CREATE TABLE tb_jobtypes (
  id smallint(6) NOT NULL auto_increment auto_increment,
  parent_id smallint(6) NOT NULL default '0',
  `level` tinyint(1) NOT NULL default '1',
  `name` varchar(255) NOT NULL default '',
  display_order tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 AUTO_INCREMENT=19;

INSERT INTO tb_jobtypes VALUES ('1','0','1',0x736f6674776172652063617465676f7279,'0');
INSERT INTO tb_jobtypes VALUES ('2','0','1',0x73697465206e6574776f726b206d616e6167656d656e74,'0');
INSERT INTO tb_jobtypes VALUES ('3','0','1',0x44617461626173652074797065,'0');
INSERT INTO tb_jobtypes VALUES ('4','0','1',0x4954204d616e6167656d656e74,'0');
INSERT INTO tb_jobtypes VALUES ('5','0','1',0x4954205175616c697479204173737572616e636520616e6420746563686e6963616c20737570706f7274,'0');
INSERT INTO tb_jobtypes VALUES ('6','0','1',0x636f6d6d756e69636174696f6e2063617465676f7279,'0');
INSERT INTO tb_jobtypes VALUES ('7','0','1',0x64657369676e20636c617373,'0');
INSERT INTO tb_jobtypes VALUES ('8','0','1',0x637573746f6d6572207365727669636520636c617373,'0');
INSERT INTO tb_jobtypes VALUES ('9','0','1',0x53616c657320436f6e73756c74616e7420436c617373,'0');
INSERT INTO tb_jobtypes VALUES ('10','0','1',0x6d61726b65742074797065,'0');
INSERT INTO tb_jobtypes VALUES ('11','0','1',0x6f74686572,'0');
INSERT INTO tb_jobtypes VALUES ('12','1','2',0x536f66747761726520456e67696e656572,'0');
INSERT INTO tb_jobtypes VALUES ('13','1','2',0x53656e696f7220536f66747761726520456e67696e656572,'0');
INSERT INTO tb_jobtypes VALUES ('14','1','2',0x73797374656d7320617263686974656374,'0');
INSERT INTO tb_jobtypes VALUES ('15','1','2',0x73797374656d7320616e616c797374,'0');
INSERT INTO tb_jobtypes VALUES ('16','1','2',0x73797374656d20696e746567726174696f6e20656e67696e65657273,'0');
INSERT INTO tb_jobtypes VALUES ('17','1','2',0x736f6674776172652074657374696e67,'0');
INSERT INTO tb_jobtypes VALUES ('18','1','2',0x6f74686572,'0');

DROP TABLE IF EXISTS tb_keywords;
CREATE TABLE tb_keywords (
  id int(5) NOT NULL auto_increment auto_increment,
  title varchar(25) NOT NULL default '',
  target_id int(10) NOT NULL default '0',
  target_position tinyint(1) NOT NULL default '0',
  type_name enum('trades','companies','newses','products') NOT NULL default 'trades',
  hits smallint(6) NOT NULL default '1',
  `status` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (id),
  KEY title (title)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_logs;
CREATE TABLE tb_logs (
  id int(10) NOT NULL auto_increment auto_increment,
  handle_type enum('error','info','warning') NOT NULL default 'info',
  source_module varchar(50) NOT NULL default '',
  description text,
  ip_address int(10) NOT NULL default '0',
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_markets;
CREATE TABLE tb_markets (
  id int(10) NOT NULL auto_increment auto_increment,
  `name` varchar(255) NOT NULL default '',
  content text,
  area_id1 smallint(6) NOT NULL default '0',
  area_id2 smallint(6) NOT NULL default '0',
  area_id3 smallint(6) NOT NULL default '0',
  industry_id1 smallint(6) NOT NULL default '0',
  industry_id2 smallint(6) NOT NULL default '0',
  industry_id3 smallint(6) NOT NULL default '0',
  picture varchar(50) NOT NULL default '',
  ip_address int(10) NOT NULL default '0',
  `status` tinyint(1) NOT NULL default '0',
  clicked smallint(6) NOT NULL default '1',
  if_commend tinyint(1) NOT NULL default '0',
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 AUTO_INCREMENT=5;

INSERT INTO tb_markets VALUES ('1',0x48617264776172652070726f6475637473206d61726b6574,'','0','0','0','2','0','0',0x73616d706c652f6d61726b65742f30312e6a7067,'0','1','1','1','1292945577','0');
INSERT INTO tb_markets VALUES ('2',0x46696265722070726f66657373696f6e616c206d61726b6574,'','0','0','0','2','0','0',0x73616d706c652f6d61726b65742f30322e6a7067,'0','1','1','1','1292945577','0');
INSERT INTO tb_markets VALUES ('3',0x4861696e696e67204368696e61204c65617468657220546f776e,'','0','0','0','0','0','0',0x73616d706c652f6d61726b65742f30332e6a7067,'0','1','1','1','1292945577','0');
INSERT INTO tb_markets VALUES ('4',0x46757220576f726c642c205a68656a69616e672043686f6e676675,'','0','0','0','0','0','0',0x73616d706c652f6d61726b65742f30342e6a7067,'0','1','1','1','1292945577','0');

DROP TABLE IF EXISTS tb_markettypes;
CREATE TABLE tb_markettypes (
  id smallint(3) NOT NULL auto_increment auto_increment,
  `name` varchar(255) NOT NULL default '',
  display_order tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_membercaches;
CREATE TABLE tb_membercaches (
  member_id int(10) NOT NULL default '-1',
  data1 text NOT NULL,
  data2 text NOT NULL,
  expiration int(10) NOT NULL default '0',
  PRIMARY KEY  (member_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS tb_memberfields;
CREATE TABLE tb_memberfields (
  member_id int(10) NOT NULL default '0',
  today_logins smallint(6) NOT NULL default '0',
  total_logins smallint(6) NOT NULL default '0',
  area_id1 smallint(6) NOT NULL default '0',
  area_id2 smallint(6) NOT NULL default '0',
  area_id3 smallint(6) NOT NULL default '0',
  first_name varchar(25) NOT NULL default '',
  last_name varchar(25) NOT NULL default '',
  gender tinyint(1) NOT NULL default '0',
  tel varchar(25) NOT NULL default '',
  fax varchar(25) NOT NULL default '',
  mobile varchar(25) NOT NULL default '',
  qq varchar(12) NOT NULL default '',
  msn varchar(50) NOT NULL default '',
  icq varchar(12) NOT NULL default '',
  yahoo varchar(50) NOT NULL default '',
  skype varchar(50) NOT NULL default '',
  address varchar(50) NOT NULL default '',
  zipcode varchar(16) NOT NULL default '',
  site_url varchar(100) NOT NULL default '',
  question varchar(50) NOT NULL default '',
  answer varchar(50) NOT NULL default '',
  reg_ip varchar(25) NOT NULL default '0',
  PRIMARY KEY  (member_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO tb_memberfields VALUES ('1','0','0','6','7','9',0x73746576656e,0x63686f77,'1','','','','','','','','','','','','','',0x3132372e302e302e31);
INSERT INTO tb_memberfields VALUES ('2','0','0','0','0','0',0x6c75636b79,0x6c6975,'0','','','','','','','','','','','','','',0x3132372e302e302e31);

DROP TABLE IF EXISTS tb_membergroups;
CREATE TABLE tb_membergroups (
  id smallint(3) NOT NULL auto_increment auto_increment,
  membertype_id tinyint(1) NOT NULL default '-1',
  `name` varchar(50) NOT NULL default '',
  description text,
  `type` enum('define','special','system') NOT NULL default 'define',
  system enum('private','public') NOT NULL default 'private',
  picture varchar(50) NOT NULL default 'default.gif',
  point_max smallint(6) NOT NULL default '0',
  point_min smallint(6) NOT NULL default '0',
  max_offer smallint(3) NOT NULL default '0',
  max_product smallint(3) NOT NULL default '0',
  max_job smallint(3) NOT NULL default '0',
  max_companynews smallint(3) NOT NULL default '0',
  max_producttype smallint(3) NOT NULL default '3',
  max_album smallint(3) NOT NULL default '0',
  max_attach_size smallint(6) NOT NULL default '0',
  max_size_perday smallint(6) NOT NULL default '0',
  max_favorite smallint(3) NOT NULL default '0',
  is_default tinyint(1) NOT NULL default '0',
  allow_offer tinyint(1) NOT NULL default '0',
  allow_market tinyint(1) NOT NULL default '0',
  allow_company tinyint(1) NOT NULL default '0',
  allow_product tinyint(1) NOT NULL default '0',
  allow_job tinyint(1) NOT NULL default '0',
  allow_companynews tinyint(1) NOT NULL default '1',
  allow_album tinyint(1) NOT NULL default '0',
  allow_space tinyint(1) NOT NULL default '1',
  default_live_time tinyint(1) NOT NULL default '1',
  after_live_time tinyint(1) NOT NULL default '1',
  exempt tinyint(1) unsigned zerofill NOT NULL default '0',
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 AUTO_INCREMENT=11;

INSERT INTO tb_membergroups VALUES ('1','1',0x4173736f6369617465206d656d62657273,'','system','private',0x696e666f726d616c2e676966,'0','-32767','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','1','0','2','0','0','1274002638');
INSERT INTO tb_membergroups VALUES ('2','1',0x4d656d626572,'','system','private',0x666f726d616c2e676966,'32767','0','0','0','0','0','0','0','0','0','0','0','0','0','0','1','0','0','0','1','0','2','25','0','1274002638');
INSERT INTO tb_membergroups VALUES ('3','1',0x50656e64696e67204d656d626572,0x5761697420666f7220766572696669636174696f6e,'special','private',0x7370656369616c5f636865636b696e672e676966,'0','0','0','0','0','0','3','0','0','0','0','0','1','1','1','1','1','1','1','1','1','2','0','0','1274002638');
INSERT INTO tb_membergroups VALUES ('4','1',0x4e6f20416363657373,0x4e6f204163636573732053697465,'special','private',0x7370656369616c5f6e6f76697369742e676966,'0','0','0','0','0','0','3','0','0','0','0','0','1','1','1','1','1','1','1','1','1','2','0','0','1274002638');
INSERT INTO tb_membergroups VALUES ('5','1',0x50726f68696269747320746865207075626c69636174696f6e206f66,0x50726f6869626974696f6e206f6620616e7920696e666f726d6174696f6e207075626c697368656420696e2074686520427573696e65737320526f6f6d,'special','private',0x7370656369616c5f6e6f7065726d2e676966,'0','0','0','0','0','0','3','0','0','0','0','0','1','1','1','1','1','1','1','1','1','2','0','0','1274002638');
INSERT INTO tb_membergroups VALUES ('6','1',0x50726f6869626974696f6e206f66206c616e64696e67,0x50726f6869626974696f6e206f66206c616e64696e6720627573696e65737320726f6f6d,'special','private',0x7370656369616c5f6e6f6c6f67696e2e676966,'0','0','0','0','0','0','3','0','0','0','0','0','1','1','1','1','1','1','1','1','1','2','0','0','1274002638');
INSERT INTO tb_membergroups VALUES ('7','1',0x4f7264696e617279204d656d62657273,0x47656e6572616c204c6576656c204d656d626572,'define','public',0x636f707065722e676966,'0','0','5','0','0','0','3','0','0','0','0','1','2','1','1','1','1','1','1','0','1','8','24','0','1274002638');
INSERT INTO tb_membergroups VALUES ('8','1',0x4d656d626572,0x496e646976696475616c206d656d62657273,'define','public',0x73696c7665722e676966,'0','0','0','0','0','0','3','0','0','0','0','0','1','1','1','1','1','1','1','1','2','6','25','0','1274002638');
INSERT INTO tb_membergroups VALUES ('9','2',0x436f72706f72617465204d656d626572,0x54686973206c6576656c206f6620636f72706f72617465206d656d62657273206f66207468652067656e6572616c,'define','public',0x676f6c642e676966,'0','0','2','2','0','0','3','0','0','0','0','0','2','2','2','2','2','2','2','1','1','2','31','0','1274002638');
INSERT INTO tb_membergroups VALUES ('10','2',0x564950204d656d626572,0x53656e696f7220436f72706f72617465204d656d626572,'define','public',0x7669702e676966,'0','0','0','0','0','0','3','0','0','0','0','0','3','3','3','3','3','3','3','1','1','2','31','0','1274002638');

DROP TABLE IF EXISTS tb_members;
CREATE TABLE tb_members (
  id int(10) NOT NULL auto_increment auto_increment,
  space_name varchar(255) NOT NULL default '',
  templet_id smallint(3) NOT NULL default '0',
  username varchar(25) NOT NULL default '',
  userpass varchar(50) NOT NULL default '',
  email varchar(100) NOT NULL default '',
  points smallint(6) NOT NULL default '0',
  credits smallint(6) NOT NULL default '0',
  balance_amount float(7,2) NOT NULL default '0.00',
  trusttype_ids varchar(25) NOT NULL default '',
  `status` enum('3','2','1','0') NOT NULL default '0',
  photo varchar(100) NOT NULL default '',
  membertype_id smallint(3) NOT NULL default '0',
  membergroup_id smallint(3) NOT NULL default '0',
  last_login varchar(11) NOT NULL default '0',
  last_ip varchar(25) NOT NULL default '0',
  service_start_date varchar(11) NOT NULL default '0',
  service_end_date varchar(11) NOT NULL default '0',
  office_redirect smallint(6) NOT NULL default '0',
  created varchar(10) NOT NULL default '0',
  modified varchar(10) NOT NULL default '0',
  PRIMARY KEY  (id),
  UNIQUE KEY username (username)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 AUTO_INCREMENT=3;

INSERT INTO tb_members VALUES ('1','','0',0x61646d696e,0x3231323332663239376135376135613734333839346130653461383031666333,0x783832303131407961686f6f2e636f6d,'1','0','0.00','','1','','2','9',0x31323932393435363135,0x32313330373036343333,'0','0','0',0x31323932393435353730,0x31323932393435353730);
INSERT INTO tb_members VALUES ('2',0x617468656e61,'1',0x617468656e61,0x6531306164633339343962613539616262653536653035376632306638383365,0x706870623262403136332e636f6d,'81','80','0.00',0x312c32,'1','','2','9',0x31323932393435353737,0x32313330373036343333,0x31323932393435353737,0x31323933303331393737,'0',0x31323932393435353737,'0');

DROP TABLE IF EXISTS tb_membertypes;
CREATE TABLE tb_membertypes (
  id smallint(3) NOT NULL auto_increment auto_increment,
  default_membergroup_id smallint(3) NOT NULL default '0',
  `name` varchar(50) NOT NULL default '',
  description text,
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 AUTO_INCREMENT=3;

INSERT INTO tb_membertypes VALUES ('1','7',0x496e646976696475616c204d656d626572,'');
INSERT INTO tb_membertypes VALUES ('2','9',0x436f72706f72617465204d656d626572,'');

DROP TABLE IF EXISTS tb_messages;
CREATE TABLE tb_messages (
  id int(10) NOT NULL auto_increment auto_increment,
  `type` enum('system','user','inquery') NOT NULL default 'user',
  from_member_id int(10) NOT NULL default '-1',
  cache_from_username varchar(25) NOT NULL default '',
  to_member_id int(10) NOT NULL default '-1',
  cache_to_username varchar(25) NOT NULL default '',
  title varchar(255) NOT NULL default '',
  content text,
  `status` tinyint(1) NOT NULL default '0',
  created int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_navs;
CREATE TABLE tb_navs (
  id smallint(3) NOT NULL auto_increment auto_increment,
  parent_id smallint(3) NOT NULL default '0',
  `name` varchar(50) NOT NULL default '',
  description varchar(255) NOT NULL default '',
  url varchar(255) NOT NULL default '',
  target enum('_blank','_self') NOT NULL default '_self',
  `status` tinyint(1) NOT NULL default '1',
  display_order smallint(3) NOT NULL default '0',
  highlight tinyint(1) NOT NULL default '0',
  `level` tinyint(1) NOT NULL default '0',
  class_name varchar(25) NOT NULL default '',
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 AUTO_INCREMENT=12;

INSERT INTO tb_navs VALUES ('1','0',0x486f6d65,'',0x696e6465782e706870,'_self','1','1','0','0','','1292945577','0');
INSERT INTO tb_navs VALUES ('2','0',0x4275796572,'',0x6275792f,'_self','1','2','0','0','','1292945577','0');
INSERT INTO tb_navs VALUES ('3','0',0x53656c6c6572,'',0x73656c6c2f,'_self','1','3','0','0','','1292945577','0');
INSERT INTO tb_navs VALUES ('4','0',0x57686f6c6573616c65,'',0x6f666665722f6c6973742e7068703f7479706569643d37266e617669643d34,'_self','1','4','0','0','','1292945577','0');
INSERT INTO tb_navs VALUES ('5','0',0x5072696365,'',0x70726f647563742f70726963652e706870,'_self','1','5','0','0','','1292945577','0');
INSERT INTO tb_navs VALUES ('6','0',0x51756f7465,'',0x6d61726b65742f71756f74652e706870,'_self','1','7','0','0','','1292945577','0');
INSERT INTO tb_navs VALUES ('7','0',0x4d61726b6574,'',0x6d61726b65742f696e6465782e706870,'_self','1','8','0','0','','1292945577','0');
INSERT INTO tb_navs VALUES ('8','0',0x46616972,'',0x666169722f696e6465782e706870,'_self','1','9','0','0','','1292945577','0');
INSERT INTO tb_navs VALUES ('9','0',0x4a6f6273,'',0x68722f696e6465782e706870,'_self','1','10','0','0','','1292945577','0');
INSERT INTO tb_navs VALUES ('10','0',0x4272616e6473,'',0x6272616e642e706870,'_self','1','6','0','0','','1292945577','0');
INSERT INTO tb_navs VALUES ('11','0',0x44696374696f6e6179,'',0x646963742f,'_self','1','11','0','0','','1292945577','0');

DROP TABLE IF EXISTS tb_newscomments;
CREATE TABLE tb_newscomments (
  id int(10) NOT NULL auto_increment auto_increment,
  news_id int(10) NOT NULL default '0',
  member_id int(10) NOT NULL default '-1',
  cache_username varchar(25) NOT NULL default '',
  message text,
  ip_address char(15) NOT NULL default '',
  invisible tinyint(1) NOT NULL default '1',
  created int(10) NOT NULL default '0',
  date_line datetime NOT NULL,
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_newses;
CREATE TABLE tb_newses (
  id int(10) NOT NULL auto_increment auto_increment,
  type_id smallint(3) NOT NULL default '0',
  `type` tinyint(1) NOT NULL default '0',
  industry_id smallint(3) NOT NULL default '0',
  area_id smallint(3) NOT NULL default '0',
  title varchar(255) NOT NULL default '',
  content text,
  `source` varchar(25) NOT NULL default '',
  picture varchar(50) NOT NULL default '',
  if_focus tinyint(1) NOT NULL default '0',
  if_commend tinyint(1) NOT NULL default '0',
  highlight tinyint(1) NOT NULL default '0',
  clicked int(10) NOT NULL default '1',
  `status` tinyint(1) NOT NULL default '1',
  flag tinyint(1) NOT NULL default '0',
  require_membertype varchar(15) NOT NULL default '0',
  tag_ids varchar(255) default '',
  created int(10) NOT NULL default '0',
  create_time datetime NOT NULL default '0000-00-00 00:00:00',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 AUTO_INCREMENT=14;

INSERT INTO tb_newses VALUES ('1','1','0','0','0',0x4f72616c20616e642063756c747572616c20646576656c6f706d656e74206f6620646f6d6573746963206f70706f7274756e6974696573206d6f746976617465,'','','','0','0','0','1','1','0','0','','1292945577','2010-12-21 22:32:57','0');
INSERT INTO tb_newses VALUES ('2','1','0','0','0',0x51204345502063657274696669636174696f6e206973737565732072656c6174656420746f204555,'','','','0','0','0','1','1','0','0','','1292945577','2010-12-21 22:32:57','0');
INSERT INTO tb_newses VALUES ('3','1','0','0','0',0x4865616c74682050726f647563747320636f756e7465726665697420647275672073616c657320696e20746865207369782077617973,'','','','0','0','0','4','1','0','0','','1292945577','2010-12-21 22:32:57','0');
INSERT INTO tb_newses VALUES ('4','1','0','0','0',0x4769667420696465617320746f2070726f6d6f746520627573696e65737320696e204368696e61,'','',0x73616d706c652f6e6577732f312e6a7067,'0','0','0','1','1','0','0','','1292945577','2010-12-21 22:32:57','0');
INSERT INTO tb_newses VALUES ('5','2','0','0','0',0x49726f6e206f72652070726f6a65637420776f726b7320616761696e737420666c6f746174696f6e2054656e646572204e6f74696365,'','','','0','0','0','2','1','0','0','','1292945577','2010-12-21 22:32:57','0');
INSERT INTO tb_newses VALUES ('6','2','0','0','0',0x5075626c69632073686f65206272616e64206d61726b6574696e67207761722073746172746564,'','','','0','0','0','3','1','0','0','','1292945577','2010-12-21 22:32:57','0');
INSERT INTO tb_newses VALUES ('7','2','0','0','0',0x5374757069642072617420617574756d6e20616e642077696e7465722077696c6c2062652061207375636365737366756c20626174746c65206f72646572,'','','','0','0','0','1','1','0','0','','1292945577','2010-12-21 22:32:57','0');
INSERT INTO tb_newses VALUES ('8','2','0','0','0',0x436f636f61204d61676963205061726164697365206475636b20736f6e6720736f756e646564206861707079206368696c64686f6f64,'','',0x73616d706c652f6e6577732f312e6a7067,'0','0','0','2','1','0','0','','1292945577','2010-12-21 22:32:57','0');
INSERT INTO tb_newses VALUES ('9','2','0','0','0',0x496e74657276696577207769746820426c7565205374617220476c61737320436f6d70616e792053616c6573204469726563746f722048616e204c696a756e,'','',0x73616d706c652f6e6577732f322e6a7067,'0','0','0','4','1','0','0','','1292945577','2010-12-21 22:32:57','0');
INSERT INTO tb_newses VALUES ('10','2','0','0','0',0x5a68656a69616e6720627573696e6573736d656e20736574746c65642074776f206d696c6c696f6e206974656d73206f6620676c617373206469616d6f6e64732057756e696e67,'','',0x73616d706c652f6e6577732f332e6a7067,'0','0','0','4','1','0','0','','1292945577','2010-12-21 22:32:57','0');
INSERT INTO tb_newses VALUES ('11','2','0','0','0',0x426c75652053686f7720746f20656e68616e636520697473206272616e6420696d616765,'','',0x73616d706c652f6e6577732f342e6a7067,'0','0','0','3','1','0','0','','1292945577','2010-12-21 22:32:57','0');
INSERT INTO tb_newses VALUES ('12','2','0','0','0',0x32303130204e616e6a696e672053746f6e65204d61726b65742053746174757320616e642046757475726520416e616c79736973,'','',0x73616d706c652f6e6577732f352e6a7067,'0','0','0','6','1','0','0','','1292945577','2010-12-21 22:32:57','0');
INSERT INTO tb_newses VALUES ('13','2','0','0','0',0x4368696e612c20746865207265766973696f6e206f662070726f66657373696f6e616c207374616e6461726473206f662070656e73,'','',0x73616d706c652f6e6577732f362e6a7067,'0','0','0','13','1','0','0','','1292945577','2010-12-21 22:32:57','0');

DROP TABLE IF EXISTS tb_newstypes;
CREATE TABLE tb_newstypes (
  id smallint(3) NOT NULL auto_increment auto_increment,
  `name` varchar(25) NOT NULL default '',
  level_id tinyint(1) NOT NULL default '1',
  `status` tinyint(1) NOT NULL default '1',
  parent_id smallint(3) NOT NULL default '0',
  created int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 AUTO_INCREMENT=9;

INSERT INTO tb_newstypes VALUES ('1',0x496e64757374727920466f637573,'1','1','0','1292945577');
INSERT INTO tb_newstypes VALUES ('2',0x486561646c696e65204e657773,'1','1','0','1292945577');
INSERT INTO tb_newstypes VALUES ('3',0x53697465204e657773,'1','1','0','1292945577');
INSERT INTO tb_newstypes VALUES ('4',0x436f6d70616e79207265706f727473,'1','1','0','1292945577');
INSERT INTO tb_newstypes VALUES ('5',0x4d6564696120486967686c6967687473,'1','1','0','1292945577');
INSERT INTO tb_newstypes VALUES ('6',0x486f7420746f70696373,'1','1','0','1292945577');
INSERT INTO tb_newstypes VALUES ('7',0x486967682d656e6420696e74657276696577,'1','1','0','1292945577');
INSERT INTO tb_newstypes VALUES ('8',0x4e6577732045787072657373,'1','1','0','1292945577');

DROP TABLE IF EXISTS tb_ordergoods;
CREATE TABLE tb_ordergoods (
  goods_id smallint(6) NOT NULL default '0',
  order_id smallint(6) unsigned zerofill NOT NULL default '000000',
  amount smallint(3) NOT NULL default '1',
  PRIMARY KEY  (goods_id,order_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS tb_orders;
CREATE TABLE tb_orders (
  id smallint(6) unsigned zerofill NOT NULL auto_increment auto_increment,
  member_id int(10) NOT NULL default '-1',
  anonymous tinyint(1) NOT NULL default '0',
  cache_username varchar(25) NOT NULL default '',
  total_price float(9,2) NOT NULL default '0.00',
  content text,
  `status` tinyint(1) NOT NULL default '0',
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_passports;
CREATE TABLE tb_passports (
  id smallint(3) NOT NULL auto_increment auto_increment,
  `name` varchar(25) NOT NULL default '',
  title varchar(25) NOT NULL default '',
  description text,
  url varchar(25) NOT NULL default '',
  config text,
  available tinyint(1) NOT NULL default '1',
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_payments;
CREATE TABLE tb_payments (
  id smallint(3) NOT NULL auto_increment auto_increment,
  `name` varchar(25) NOT NULL default '',
  title varchar(25) NOT NULL default '',
  description text,
  config text,
  available tinyint(1) NOT NULL default '1',
  if_online_support tinyint(1) NOT NULL default '0',
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_personals;
CREATE TABLE tb_personals (
  member_id int(10) NOT NULL,
  resume_status tinyint(1) NOT NULL default '0',
  max_education tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (member_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS tb_plugins;
CREATE TABLE tb_plugins (
  id smallint(3) NOT NULL auto_increment auto_increment,
  `name` varchar(25) NOT NULL default '',
  title varchar(25) NOT NULL default '',
  description text,
  copyright varchar(25) NOT NULL default '',
  version varchar(15) NOT NULL default '',
  pluginvar text,
  available tinyint(1) NOT NULL default '1',
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 AUTO_INCREMENT=11;

INSERT INTO tb_plugins VALUES ('1',0x68656c6c6f,0x44656d6f20706c75672d696e73,0x5468697320697320612064656d6f2076657273696f6e,0x5042205445414d,0x312e30,0x613a353a7b733a353a226d6f766965223b733a32343a22706c7567696e732f68656c6c6f2f6263617374722e737766223b733a353a227769647468223b733a333a22343733223b733a363a22686569676874223b733a333a22313730223b733a373a226267636f6c6f72223b733a373a2223666630303030223b733a393a22666c61736876617273223b733a32373a22786d6c3d706c7567696e732f68656c6c6f2f68656c6c6f2e786d6c223b7d,'1','1292945577','0');
INSERT INTO tb_plugins VALUES ('2',0x676f6f676c65736974656d6170,0x476f6f676c65736974656d6170,0x55736520476f6f676c6520736974656d61702043616e20696d70726f76652074686520736974652f50616765732053455250205468652072616e6b696e67206f66,0x5042205445414d,0x312e30,0x613a313a7b733a373a226c6173746d6f64223b733a31393a22323030392d31322d30382031323a31323a3132223b7d,'1','1260263957','1260263957');
INSERT INTO tb_plugins VALUES ('3',0x766361737472,0x456e746572707269736520566964656f2059656c6c6f775061,0x5468697320706c75672d696e2063616e2063616c6c2074686520636f72706f7261746520766964656f2c2075736520746865206d6574686f64207365652074686520706c75672d696e2063616c6c65643a3c7b706c7567696e206e616d653d22766361737472227d3e,0x5042205445414d,0x312e30,0x613a353a7b733a353a226d6f766965223b733a32373a22706c7567696e732f7663617374722f76636173747232322e737766223b733a393a22666c61736876617273223b733a32343a22706c7567696e732f7663617374722f766964656f2e786d6c223b733a353a227769647468223b733a333a22343130223b733a363a22686569676874223b733a333a22313930223b733a31303a22666c6173687469746c65223b733a363a22504850423242223b7d,'1','1292945577','0');
INSERT INTO tb_plugins VALUES ('4',0x717173657276696365,0x5151206f6e6c696e652053657276696365,0x5468697320706c75672d696e206e6f7720737570706f7274206f6e6c696e652051512c204d534e2c20616e64206d61696c207365727669636573206f6e6c696e65,0x5042205445414d,0x312e30,0x613a343a7b733a333a2275726c223b733a32323a22687474703a2f2f7777772e7068706232622e636f6d2f223b733a353a22656d61696c223b733a31373a2273746576656e407068706232622e636f6d223b733a323a227171223b733a383a223437373331343733223b733a333a226d736e223b733a32313a2273746576656e63686f77383131403136332e636f6d223b7d,'1','1292945577','0');
INSERT INTO tb_plugins VALUES ('5',0x6261696475736974656d6170,0x426169647520736974656d6170,0x426169647520496e7465726e657420666f72756d207573696e67206f70656e2070726f746f636f6c732063616e20696e63726561736520796f757220736974652074726166666963,0x5042205445414d,0x312e30,'','1','1292945577','0');
INSERT INTO tb_plugins VALUES ('6',0x6f6b7171,0x5151206f6e6c696e652053657276696365,0x5151206f6e6c696e652053657276696365,0x5042205445414d,0x312e30,'','1','1292945577','0');
INSERT INTO tb_plugins VALUES ('7',0x63617264,0x427573696e6573732063617264,0x427920666c6173682052657665616c20427573696e6573732063617264efbc8c43616c6c20746865206d6574686f643a3c7b706c7567696e206e616d653d2263617264227d3e,0x50425f5445414d,0x312e302e30,'','1','1292945577','0');
INSERT INTO tb_plugins VALUES ('8',0x7472616e736c617465,0x476f6f676c65205472616e736c6174696f6e20506c7567696e,0x55736520476f6f676c65207472616e736c6174696f6e20706c7567696e2c207468652065737461626c6973686d656e74206f662074696d656c79207472616e736c6174696f6e2077656273697465,0x5042205445414d,0x312e30,'','1','1292945577','0');
INSERT INTO tb_plugins VALUES ('9',0x676f6f676c656d6170,0x476f6f676c656d6170204d6170,0x55736520476f6f676c65206d617020436f6d70616e79204d6170,0x5042205445414d,0x312e30,0x613a363a7b733a333a226b6579223b733a38363a2241425149414141416e667337624b453832716762335a63325979532d6f4254327958705f5a4159385f7566433343465868484945314e76776b785379537a5f52457050712d34575a4132374f77676274795233566341223b733a393a227a6f6f6d6c6576656c223b733a323a223135223b733a353a227769647468223b733a333a22353030223b733a363a22686569676874223b733a333a22353030223b733a333a226c6174223b733a31383a2232392e323634393131373335303636393633223b733a333a226c6e67223b733a31383a223132302e3234353434373135383831333437223b7d,'1','1292945577','0');
INSERT INTO tb_plugins VALUES ('10',0x766964656f,0x566964656f20706c6179657220706c75672d696e,0x566964656f20706c6179657220706c75672d696eefbc8c557365204a5720506c617965722e,0x50425f5445414d,0x312e302e30,0x613a343a7b733a353a226d6f766965223b733a32343a22706c7567696e732f766964656f2f706c617965722e737766223b733a353a227769647468223b733a333a22343733223b733a363a22686569676874223b733a333a22313730223b733a373a226267636f6c6f72223b733a373a2223666630303030223b7d,'1','1292945577','0');

DROP TABLE IF EXISTS tb_pointlogs;
CREATE TABLE tb_pointlogs (
  id int(10) NOT NULL auto_increment auto_increment,
  member_id int(10) NOT NULL,
  action_name varchar(25) NOT NULL default '',
  points smallint(3) NOT NULL default '0',
  description text,
  ip_address varchar(15) NOT NULL default '',
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 AUTO_INCREMENT=2;

INSERT INTO tb_pointlogs VALUES ('1','1',0x6c6f6767696e67,'1','',0x3132372e302e302e31,'1292945615','0');

DROP TABLE IF EXISTS tb_productcategories;
CREATE TABLE tb_productcategories (
  id smallint(6) NOT NULL auto_increment auto_increment,
  parent_id smallint(6) NOT NULL default '0',
  `level` tinyint(1) NOT NULL default '1',
  `name` varchar(255) NOT NULL default '',
  display_order tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=utf8 AUTO_INCREMENT=76;

INSERT INTO tb_productcategories VALUES ('1','0','1',0x454c454354524f4e494320454c454d454e5453,'0');
INSERT INTO tb_productcategories VALUES ('2','0','1',0x6265617574792074726561746d656e74,'0');
INSERT INTO tb_productcategories VALUES ('3','0','1',0x6d65646963616c2063617265,'0');
INSERT INTO tb_productcategories VALUES ('4','0','1',0x696e737472756d656e74,'0');
INSERT INTO tb_productcategories VALUES ('5','0','1',0x686f757365686f6c6420676f6f6473,'0');
INSERT INTO tb_productcategories VALUES ('6','0','1',0x676966747320616e6420746f7973,'0');
INSERT INTO tb_productcategories VALUES ('7','0','1',0x4175746f6d6f62696c657320616e6420646973747269627574696f6e,'0');
INSERT INTO tb_productcategories VALUES ('8','0','1',0x4d6574616c6c75726779206f6620737465656c,'0');
INSERT INTO tb_productcategories VALUES ('9','0','1',0x7061636b616765,'0');
INSERT INTO tb_productcategories VALUES ('10','0','1',0x636f6d707574657220736f667477617265,'0');
INSERT INTO tb_productcategories VALUES ('11','0','1',0x6275696c64696e67206d6174657269616c73,'0');
INSERT INTO tb_productcategories VALUES ('12','0','1',0x7072696e74,'0');
INSERT INTO tb_productcategories VALUES ('13','0','1',0x6170706c69616e636573,'0');
INSERT INTO tb_productcategories VALUES ('14','0','1',0x7472616e73706f7274,'0');
INSERT INTO tb_productcategories VALUES ('15','0','1',0x636f6d6d756e69636174696f6e,'0');
INSERT INTO tb_productcategories VALUES ('16','0','1',0x6c6967687420696e647573747279,'0');
INSERT INTO tb_productcategories VALUES ('17','0','1',0x456c65637472696320456c656374726963,'0');
INSERT INTO tb_productcategories VALUES ('18','0','1',0x706574726f6368656d6963616c73,'0');
INSERT INTO tb_productcategories VALUES ('19','0','1',0x5061696e74696e6720616e6420746865207461626c65,'0');
INSERT INTO tb_productcategories VALUES ('20','0','1',0x7275626265722c20706c617374696373,'0');
INSERT INTO tb_productcategories VALUES ('21','0','1',0x7365637572697479,'0');
INSERT INTO tb_productcategories VALUES ('22','0','1',0x4f666669636520537570706c696573,'0');
INSERT INTO tb_productcategories VALUES ('23','0','1',0x6d65646961,'0');
INSERT INTO tb_productcategories VALUES ('24','0','1',0x656e7669726f6e6d656e74616c2070726f74656374696f6e20616e642077617465722074726561746d656e74,'0');
INSERT INTO tb_productcategories VALUES ('25','0','1',0x6d616368696e657279,'0');
INSERT INTO tb_productcategories VALUES ('26','0','1',0x4861726477617265,'0');
INSERT INTO tb_productcategories VALUES ('27','0','1',0x6c656973757265,'0');
INSERT INTO tb_productcategories VALUES ('28','0','1',0x7061706572,'0');
INSERT INTO tb_productcategories VALUES ('29','0','1',0x74657874696c6520616e64206c656174686572,'0');
INSERT INTO tb_productcategories VALUES ('30','0','1',0x636c6f7468696e67,'0');
INSERT INTO tb_productcategories VALUES ('31','0','1',0x6167726963756c74757265,'0');
INSERT INTO tb_productcategories VALUES ('32','0','1',0x666f6f6420616e64206472696e6b,'0');
INSERT INTO tb_productcategories VALUES ('33','0','1',0x636c6f7468696e67,'0');
INSERT INTO tb_productcategories VALUES ('34','0','1',0x627573696e657373207365727669636573,'0');
INSERT INTO tb_productcategories VALUES ('35','0','1',0x6d616368696e65727920696e6475737472696573,'0');
INSERT INTO tb_productcategories VALUES ('36','1','2',0x74686520696e737572616e636520636f6d706f6e656e74,'0');
INSERT INTO tb_productcategories VALUES ('37','1','2',0x73656d69636f6e647563746f7273,'0');
INSERT INTO tb_productcategories VALUES ('38','1','2',0x6f7468657220656c656374726f6e6963206d6174657269616c73,'0');
INSERT INTO tb_productcategories VALUES ('39','1','2',0x636170616369746f72,'0');
INSERT INTO tb_productcategories VALUES ('40','1','2',0x6f7468657220656c656374726f6e696320636f6d706f6e656e7473,'0');
INSERT INTO tb_productcategories VALUES ('41','1','2',0x7472616e736973746f72,'0');
INSERT INTO tb_productcategories VALUES ('42','1','2',0x64696f646573,'0');
INSERT INTO tb_productcategories VALUES ('43','1','2',0x6672657175656e637920636f6d706f6e656e7473,'0');
INSERT INTO tb_productcategories VALUES ('44','1','2',0x696e766572746572,'0');
INSERT INTO tb_productcategories VALUES ('45','1','2',0x696e647563746f7273,'0');
INSERT INTO tb_productcategories VALUES ('46','1','2',0x656c656374726f2d61636f757374696320616e6420636f6d706f6e656e7473,'0');
INSERT INTO tb_productcategories VALUES ('47','1','2',0x656c656374726f2d61636f75737469632064657669636573,'0');
INSERT INTO tb_productcategories VALUES ('48','1','2',0x656c656374726f6e69632076616375756d2064657669636573,'0');
INSERT INTO tb_productcategories VALUES ('49','1','2',0x636f6e6e6563742067656e65726174696e6720756e697473,'0');
INSERT INTO tb_productcategories VALUES ('50','1','2',0x72656c6179,'0');
INSERT INTO tb_productcategories VALUES ('51','1','2',0x7069657a6f656c656374726963206372797374616c206d6174657269616c73,'0');
INSERT INTO tb_productcategories VALUES ('52','1','2',0x656c656374726f6e6963207061737465,'0');
INSERT INTO tb_productcategories VALUES ('53','1','2',0x656c656374726f6e696320706c61737469632070726f6475637473,'0');
INSERT INTO tb_productcategories VALUES ('54','1','2',0x464554,'0');
INSERT INTO tb_productcategories VALUES ('55','1','2',0x656c656374726f6e69632070726f63657373696e67,'0');
INSERT INTO tb_productcategories VALUES ('56','1','2',0x6d61676e6574696320616e6420636f6d706f6e656e7473,'0');
INSERT INTO tb_productcategories VALUES ('57','1','2',0x504342,'0');
INSERT INTO tb_productcategories VALUES ('58','1','2',0x737769746368696e6720656c656d656e74,'0');
INSERT INTO tb_productcategories VALUES ('59','1','2',0x4f70746f656c656374726f6e69637320616e6420446973706c61792044657669636573,'0');
INSERT INTO tb_productcategories VALUES ('60','1','2',0x706f74656e74696f6d65746572,'0');
INSERT INTO tb_productcategories VALUES ('61','1','2',0x646973706c617920646576696365,'0');
INSERT INTO tb_productcategories VALUES ('62','1','2',0x73656e736f7273,'0');
INSERT INTO tb_productcategories VALUES ('63','1','2',0x656c656374726963616c206d6561737572696e6720696e737472756d656e74,'0');
INSERT INTO tb_productcategories VALUES ('64','1','2',0x656c65637472696320636572616d6963206d6174657269616c73,'0');
INSERT INTO tb_productcategories VALUES ('65','1','2',0x4943,'0');
INSERT INTO tb_productcategories VALUES ('66','1','2',0x7265736973746f72,'0');
INSERT INTO tb_productcategories VALUES ('67','1','2',0x666c6170,'0');
INSERT INTO tb_productcategories VALUES ('68','1','2',0x736869656c64696e67,'0');
INSERT INTO tb_productcategories VALUES ('69','1','2',0x496e66726172656420546563686e6f6c6f677920616e64204170706c69636174696f6e,'0');
INSERT INTO tb_productcategories VALUES ('70','1','2',0x652d70726f6a65637420636f6f7065726174696f6e,'0');
INSERT INTO tb_productcategories VALUES ('71','1','2',0x5472616e73666f726d657273,'0');
INSERT INTO tb_productcategories VALUES ('72','1','2',0x6c617365722064657669636573,'0');
INSERT INTO tb_productcategories VALUES ('73','1','2',0x656c656374726f6e6963206861726477617265,'0');
INSERT INTO tb_productcategories VALUES ('74','1','2',0x696e647573747269616c20656e636f646572,'0');
INSERT INTO tb_productcategories VALUES ('75','1','2',0x636f7070657220636c6164206c616d696e617465206d6174657269616c73,'0');

DROP TABLE IF EXISTS tb_productprices;
CREATE TABLE tb_productprices (
  id int(10) NOT NULL auto_increment auto_increment,
  type_id tinyint(1) NOT NULL default '1',
  product_id int(10) NOT NULL default '-1',
  brand_id smallint(6) NOT NULL default '-1',
  member_id int(10) NOT NULL default '-1',
  company_id int(10) NOT NULL default '-1',
  area_id smallint(6) NOT NULL default '0',
  price_trends tinyint(1) NOT NULL default '0',
  category_id smallint(6) NOT NULL default '0',
  `source` varchar(255) NOT NULL default '',
  title varchar(255) NOT NULL default '',
  description text NOT NULL,
  units tinyint(1) NOT NULL default '1',
  currency tinyint(1) NOT NULL default '1',
  price float(9,2) NOT NULL default '0.00',
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_products;
CREATE TABLE tb_products (
  id int(10) NOT NULL auto_increment auto_increment,
  member_id int(10) NOT NULL,
  company_id int(10) NOT NULL default '0',
  cache_companyname varchar(100) NOT NULL default '',
  sort_id tinyint(1) NOT NULL default '1',
  brand_id smallint(6) NOT NULL default '0',
  category_id smallint(6) NOT NULL default '0',
  industry_id1 smallint(6) NOT NULL default '0',
  industry_id2 smallint(6) NOT NULL default '0',
  industry_id3 smallint(6) NOT NULL default '0',
  area_id1 smallint(6) NOT NULL default '0',
  area_id2 smallint(6) NOT NULL default '0',
  area_id3 smallint(6) NOT NULL default '0',
  `name` varchar(255) NOT NULL default '',
  price float(9,2) NOT NULL default '0.00',
  sn varchar(20) NOT NULL default '',
  spec varchar(20) NOT NULL default '',
  produce_area varchar(50) NOT NULL default '',
  packing_content varchar(100) NOT NULL default '',
  picture varchar(50) NOT NULL default '',
  content text,
  producttype_id smallint(6) NOT NULL default '0',
  `status` tinyint(1) NOT NULL default '0',
  state tinyint(1) NOT NULL default '1',
  ifnew tinyint(1) NOT NULL default '0',
  ifcommend tinyint(1) NOT NULL default '0',
  priority tinyint(1) NOT NULL default '0',
  tag_ids varchar(255) default '',
  clicked smallint(6) NOT NULL default '1',
  formattribute_ids text,
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 AUTO_INCREMENT=11;

INSERT INTO tb_products VALUES ('1','1','13',0x55616c696e6b20452d436f6d6d6572636520496e632e,'0','0','0','5','196','0','1','0','0',0x33322d696e6368204844204c4344205456,'0.00','','','','',0x73616d706c652f70726f647563742f312e6a7067,'','0','1','1','0','1','0','','1','','1292945577','1261978847');
INSERT INTO tb_products VALUES ('2','1','13',0x55616c696e6b20452d436f6d6d6572636520496e632e,'1','0','0','1','0','0','1','0','0',0x64765f73785f633130,'0.00','','','','',0x73616d706c652f70726f647563742f322e6a7067,'','0','1','1','0','1','0','','1','','1292945577','1261992494');
INSERT INTO tb_products VALUES ('3','1','13',0x55616c696e6b20452d436f6d6d6572636520496e632e,'1','0','0','1','0','0','1','0','0',0x456c656374726f6e69632044696374696f6e617279,'0.00','','','','',0x73616d706c652f70726f647563742f332e6a7067,'','0','1','1','0','1','0','','2','','1292945577','1261992725');
INSERT INTO tb_products VALUES ('4','1','13',0x55616c696e6b20452d436f6d6d6572636520496e632e,'1','0','0','1','0','0','1','0','0',0x65206e617669676174696f6e,'0.00','','','','',0x73616d706c652f70726f647563742f342e6a7067,'','0','1','1','0','0','0','','1','','1292945577','1261992649');
INSERT INTO tb_products VALUES ('5','1','13',0x55616c696e6b20452d436f6d6d6572636520496e632e,'1','0','0','1','0','0','0','0','0',0x56616c756520696e646570656e64656e63652077657265204e6f7465626f6f6b,'0.00','','','','',0x73616d706c652f70726f647563742f352e6a7067,'','0','1','1','0','0','0','','1','','1292945577','0');
INSERT INTO tb_products VALUES ('6','1','13',0x55616c696e6b20452d436f6d6d6572636520496e632e,'1','0','0','1','0','0','0','0','0',0x4d503420766964656f20706c61796572,'0.00','','','','',0x73616d706c652f70726f647563742f362e6a7067,'','0','1','1','0','0','0','','1','','1292945577','0');
INSERT INTO tb_products VALUES ('7','1','13',0x55616c696e6b20452d436f6d6d6572636520496e632e,'1','0','0','1','0','0','0','0','0',0x506f6f72206e6f62696c6974792048442031303830,'0.00','','','','',0x73616d706c652f70726f647563742f372e6a7067,'','0','1','1','0','0','0','','1','','1292945577','0');
INSERT INTO tb_products VALUES ('8','1','13',0x55616c696e6b20452d436f6d6d6572636520496e632e,'1','0','0','1','0','0','0','0','0',0x43616e206265206261636b2d7479706520626167,'0.00','','','','',0x73616d706c652f70726f647563742f382e6a7067,'','0','1','1','0','0','0','','3','','1292945577','0');
INSERT INTO tb_products VALUES ('9','1','13',0x55616c696e6b20452d436f6d6d6572636520496e632e,'1','0','0','1','0','0','1','24','0',0x3130206d696c6c696f6e20706978656c206469676974616c2063616d657261,'0.00','','','','',0x73616d706c652f70726f647563742f392e6a7067,'','0','1','1','0','0','0','','1','','1292945577','0');
INSERT INTO tb_products VALUES ('10','1','13',0xe58f8be982bbe794b5e5ad90e59586e58aa1e7bd91,'1','0','0','1','0','0','1','28','0',0x46617368696f6e204456,'0.00','','','','',0x73616d706c652f70726f647563742f31302e6a7067,'','0','1','1','0','1','0','','11','','1292945577','0');

DROP TABLE IF EXISTS tb_productsorts;
CREATE TABLE tb_productsorts (
  id smallint(3) NOT NULL auto_increment auto_increment,
  `name` varchar(255) NOT NULL default '',
  display_order tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 AUTO_INCREMENT=4;

INSERT INTO tb_productsorts VALUES ('1',0x4e65772050726f6475637473,'0');
INSERT INTO tb_productsorts VALUES ('2',0x53746f636b,'0');
INSERT INTO tb_productsorts VALUES ('3',0x47656e6572616c2050726f6475637473,'0');

DROP TABLE IF EXISTS tb_producttypes;
CREATE TABLE tb_producttypes (
  id int(10) NOT NULL auto_increment auto_increment,
  member_id int(10) NOT NULL,
  company_id int(10) NOT NULL,
  `name` varchar(25) NOT NULL default '',
  `level` tinyint(1) NOT NULL default '0',
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_quotes;
CREATE TABLE tb_quotes (
  id smallint(6) NOT NULL auto_increment auto_increment,
  product_id int(10) NOT NULL default '-1',
  market_id smallint(6) NOT NULL default '-1',
  type_id smallint(6) NOT NULL default '0',
  title varchar(255) NOT NULL default '',
  content text NOT NULL,
  area_id smallint(6) NOT NULL default '0',
  area_id1 smallint(6) NOT NULL default '0',
  area_id2 smallint(6) NOT NULL default '0',
  area_id3 smallint(6) NOT NULL default '0',
  max_price float(9,2) NOT NULL default '0.00',
  min_price float(9,2) NOT NULL default '0.00',
  units tinyint(1) NOT NULL default '1',
  currency tinyint(1) NOT NULL default '1',
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_quotetypes;
CREATE TABLE tb_quotetypes (
  id smallint(6) NOT NULL auto_increment auto_increment,
  parent_id smallint(6) NOT NULL default '0',
  `level` tinyint(1) NOT NULL default '1',
  `name` varchar(255) NOT NULL default '',
  display_order tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_roleadminers;
CREATE TABLE tb_roleadminers (
  id int(5) NOT NULL auto_increment auto_increment,
  adminrole_id int(2) default NULL,
  adminer_id int(2) default NULL,
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_roleprivileges;
CREATE TABLE tb_roleprivileges (
  id int(5) NOT NULL auto_increment auto_increment,
  adminrole_id int(2) default NULL,
  adminprivilege_id int(2) default NULL,
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_segmentcaches;
CREATE TABLE tb_segmentcaches (
  id int(10) NOT NULL auto_increment auto_increment,
  title varchar(255) NOT NULL default '',
  `data` text,
  display_order smallint(3) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_segmentdicts;
CREATE TABLE tb_segmentdicts (
  id int(10) NOT NULL auto_increment auto_increment,
  word varchar(64) NOT NULL default '',
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_services;
CREATE TABLE tb_services (
  id smallint(6) NOT NULL auto_increment auto_increment,
  member_id int(10) NOT NULL,
  title varchar(25) NOT NULL default '',
  content text,
  nick_name varchar(25) default '',
  email varchar(25) NOT NULL default '',
  user_ip varchar(11) NOT NULL default '',
  type_id tinyint(1) NOT NULL default '0',
  `status` tinyint(1) NOT NULL default '0',
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  revert_content text,
  revert_date int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_sessions;
CREATE TABLE tb_sessions (
  sesskey char(32) NOT NULL default '',
  expiry int(10) NOT NULL default '0',
  expireref char(64) NOT NULL default '',
  `data` text,
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  KEY sess2_expiry (expiry),
  KEY sess2_expireref (expireref)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS tb_settings;
CREATE TABLE tb_settings (
  id smallint(3) NOT NULL auto_increment auto_increment,
  type_id tinyint(1) NOT NULL default '0',
  variable varchar(150) NOT NULL default '',
  valued text,
  PRIMARY KEY  (id),
  UNIQUE KEY variable (variable)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8 AUTO_INCREMENT=64;

INSERT INTO tb_settings VALUES ('58','0',0x736974655f6e616d65,0x67616d65687562);
INSERT INTO tb_settings VALUES ('59','0',0x736974655f7469746c65,0x67616d65687562202d20506f776572656420427920504850423242);
INSERT INTO tb_settings VALUES ('3','0',0x736974655f62616e6e65725f776f7264,0x546865206d6f73742070726f66657373696f6e616c20652d636f6d6d65726365207765627369746520696e647573747279);
INSERT INTO tb_settings VALUES ('4','0',0x636f6d70616e795f6e616d65,0x576562207369746520636f70797269676874);
INSERT INTO tb_settings VALUES ('61','0',0x736974655f75726c,0x687474703a2f2f6c6f63616c686f73743a383038302f6232622f);
INSERT INTO tb_settings VALUES ('6','0',0x6963705f6e756d626572,0x494350204e756d626572);
INSERT INTO tb_settings VALUES ('7','0',0x736572766963655f74656c,0x2838362931302d3834313238393132);
INSERT INTO tb_settings VALUES ('8','0',0x73616c655f74656c,0x2838362931302d3834313238393132);
INSERT INTO tb_settings VALUES ('9','0',0x736572766963655f7171,0x313030383634383235);
INSERT INTO tb_settings VALUES ('10','0',0x736572766963655f6d736e,0x7365727669636540686f73742e636f6d);
INSERT INTO tb_settings VALUES ('11','0',0x736572766963655f656d61696c,0x7365727669636540686f73742e636f6d);
INSERT INTO tb_settings VALUES ('12','1',0x736974655f6465736372697074696f6e,0x536974652064657461696c6564206465736372697074696f6e206f6620746865);
INSERT INTO tb_settings VALUES ('13','0',0x63705f70696374757265,'0');
INSERT INTO tb_settings VALUES ('14','0',0x72656769737465725f70696374757265,'0');
INSERT INTO tb_settings VALUES ('15','0',0x6c6f67696e5f70696374757265,'0');
INSERT INTO tb_settings VALUES ('16','0',0x766973706f73745f61757468,0x31);
INSERT INTO tb_settings VALUES ('17','0',0x77617465726d61726b,0x31);
INSERT INTO tb_settings VALUES ('62','0',0x776174657274657874,0x687474703a2f2f6c6f63616c686f73743a383038302f6232622f);
INSERT INTO tb_settings VALUES ('19','0',0x7761746572636f6c6f72,0x23393930303030);
INSERT INTO tb_settings VALUES ('20','0',0x6164645f6d61726b65745f636865636b,0x31);
INSERT INTO tb_settings VALUES ('21','0',0x726567636865636b,'0');
INSERT INTO tb_settings VALUES ('22','0',0x7669735f706f7374,0x31);
INSERT INTO tb_settings VALUES ('23','0',0x7669735f706f73745f636865636b,0x31);
INSERT INTO tb_settings VALUES ('24','0',0x73656c6c5f6c6f67696e636865636b,0x31);
INSERT INTO tb_settings VALUES ('25','0',0x6275795f6c6f67696e636865636b,'0');
INSERT INTO tb_settings VALUES ('57','0',0x696e7374616c6c5f646174656c696e65,0x31323932393435353730);
INSERT INTO tb_settings VALUES ('27','0',0x6c6173745f6261636b7570,0x31323932393435353737);
INSERT INTO tb_settings VALUES ('28','0',0x736d74705f736572766572,0x736d74702e796f7572646f6d61696e2e636f6d);
INSERT INTO tb_settings VALUES ('29','0',0x736d74705f706f7274,0x3235);
INSERT INTO tb_settings VALUES ('30','0',0x736d74705f61757468,0x31);
INSERT INTO tb_settings VALUES ('31','0',0x6d61696c5f66726f6d,0x61646d696e6973747261746f7240686f73742e636f6d);
INSERT INTO tb_settings VALUES ('32','0',0x6d61696c5f66726f6d77686f,0x5765626d6173746572);
INSERT INTO tb_settings VALUES ('33','0',0x617574685f757365726e616d65,0x61646d696e6973747261746f7240686f73742e636f6d);
INSERT INTO tb_settings VALUES ('34','0',0x617574685f70617373776f7264,0x70617373776f7264);
INSERT INTO tb_settings VALUES ('35','0',0x73656e645f6d61696c,0x32);
INSERT INTO tb_settings VALUES ('36','0',0x73656e646d61696c5f73696c656e74,0x31);
INSERT INTO tb_settings VALUES ('37','0',0x6d61696c5f64656c696d69746572,'0');
INSERT INTO tb_settings VALUES ('38','0',0x7265675f66696c656e616d65,0x72656769737465722e706870);
INSERT INTO tb_settings VALUES ('39','0',0x6e65775f7573657261757468,'0');
INSERT INTO tb_settings VALUES ('40','0',0x706f73745f66696c656e616d65,0x706f73742e706870);
INSERT INTO tb_settings VALUES ('41','0',0x666f726269645f6970,'');
INSERT INTO tb_settings VALUES ('42','0',0x69705f7265675f736570,'0');
INSERT INTO tb_settings VALUES ('60','0',0x6261636b75705f646972,0x5079714b6a76);
INSERT INTO tb_settings VALUES ('44','0',0x636170745f6c6f6767696e67,'0');
INSERT INTO tb_settings VALUES ('45','0',0x636170745f7265676973746572,0x31);
INSERT INTO tb_settings VALUES ('46','0',0x636170745f706f73745f66726565,'0');
INSERT INTO tb_settings VALUES ('47','0',0x636170745f6164645f6d61726b6574,0x31);
INSERT INTO tb_settings VALUES ('48','0',0x636170745f6c6f67696e5f61646d696e,'0');
INSERT INTO tb_settings VALUES ('49','0',0x636170745f6170706c795f667269656e646c696e6b,0x31);
INSERT INTO tb_settings VALUES ('50','0',0x636170745f73657276696365,0x31);
INSERT INTO tb_settings VALUES ('51','0',0x6261636b75705f74797065,0x31);
INSERT INTO tb_settings VALUES ('52','0',0x72656769737465725f74797065,0x6f70656e5f636f6d6d6f6e5f726567);
INSERT INTO tb_settings VALUES ('63','0',0x617574685f6b6579,0x5440794c4e793652);
INSERT INTO tb_settings VALUES ('54','0',0x6b6579776f72645f62696464696e67,'0');
INSERT INTO tb_settings VALUES ('55','0',0x70617373706f72745f737570706f7274,'0');
INSERT INTO tb_settings VALUES ('56','0',0x736974655f6c6f676f,0x696d616765732f6c6f676f2e6a7067);

DROP TABLE IF EXISTS tb_spacecaches;
CREATE TABLE tb_spacecaches (
  cache_spacename varchar(255) NOT NULL default '',
  company_id int(10) NOT NULL default '-1',
  data1 text NOT NULL,
  data2 text NOT NULL,
  expiration int(10) NOT NULL default '0',
  PRIMARY KEY  (company_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS tb_spacelinks;
CREATE TABLE tb_spacelinks (
  id int(10) NOT NULL auto_increment auto_increment,
  member_id int(10) NOT NULL,
  company_id int(10) NOT NULL,
  display_order smallint(3) NOT NULL default '0',
  title varchar(100) NOT NULL default '',
  url varchar(255) NOT NULL default '',
  is_outlink tinyint(1) NOT NULL default '0',
  description varchar(100) NOT NULL default '',
  logo varchar(255) NOT NULL default '',
  highlight tinyint(1) NOT NULL default '0',
  created int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_spreads;
CREATE TABLE tb_spreads (
  keyword_id int(10) NOT NULL,
  target_id int(10) NOT NULL,
  type_name enum('trades','companies','newses','products') NOT NULL default 'trades',
  expiration int(10) NOT NULL default '0',
  display_order tinyint(1) NOT NULL,
  PRIMARY KEY  (keyword_id),
  KEY spread (keyword_id,target_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS tb_standards;
CREATE TABLE tb_standards (
  id smallint(6) NOT NULL auto_increment auto_increment,
  attachment_id smallint(6) NOT NULL default '0',
  type_id smallint(6) NOT NULL default '0',
  title varchar(255) NOT NULL default '',
  `source` varchar(255) NOT NULL,
  digest varchar(255) NOT NULL default '',
  content text NOT NULL,
  publish_time int(10) NOT NULL default '0',
  force_time int(10) NOT NULL default '0',
  clicked smallint(6) NOT NULL default '1',
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_standardtypes;
CREATE TABLE tb_standardtypes (
  id smallint(3) NOT NULL auto_increment auto_increment,
  `name` varchar(100) NOT NULL default '',
  display_order tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_stats;
CREATE TABLE tb_stats (
  id smallint(6) NOT NULL auto_increment auto_increment,
  sa varchar(25) default '',
  sb varchar(50) default '',
  description varchar(50) NOT NULL default '',
  sc int(10) default NULL,
  sd int(10) default NULL,
  se smallint(6) default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_tags;
CREATE TABLE tb_tags (
  id int(10) NOT NULL auto_increment auto_increment,
  member_id int(10) NOT NULL,
  `name` varchar(255) NOT NULL default '',
  numbers smallint(6) NOT NULL default '0',
  closed tinyint(1) NOT NULL default '0',
  flag tinyint(1) NOT NULL default '0',
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id),
  KEY title (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_templets;
CREATE TABLE tb_templets (
  id smallint(3) NOT NULL auto_increment auto_increment,
  `name` varchar(25) NOT NULL default '',
  title varchar(25) NOT NULL default '',
  `directory` varchar(100) NOT NULL default '',
  `type` enum('system','user') NOT NULL default 'system',
  author varchar(100) NOT NULL default '',
  style varchar(255) NOT NULL default '',
  description text,
  is_default tinyint(1) NOT NULL default '0',
  require_membertype varchar(100) NOT NULL default '0',
  require_membergroups varchar(100) NOT NULL default '0',
  `status` tinyint(1) NOT NULL default '1',
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_topicnews;
CREATE TABLE tb_topicnews (
  topic_id smallint(6) NOT NULL default '0',
  news_id smallint(6) NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS tb_topics;
CREATE TABLE tb_topics (
  id smallint(6) NOT NULL auto_increment auto_increment,
  title varchar(255) NOT NULL default '',
  picture varchar(255) NOT NULL default '',
  description text,
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 AUTO_INCREMENT=4;

INSERT INTO tb_topics VALUES ('1',0x4578706c6f726520746865206d7973746572696f75732072656420706c616e6574204d617273,0x73616d706c652f6e6577732f746f706963312e6a7067,'','1292945577','0');
INSERT INTO tb_topics VALUES ('2',0x566f6c63616e6963206572757074696f6e20696e20736f75746865726e204963656c616e6420616761696e,0x73616d706c652f6e6577732f746f706963322e6a7067,'','1292945577','0');
INSERT INTO tb_topics VALUES ('3',0x4578706c6f7265207468652077686f6c6520456172746820486f7572204c69766520,0x73616d706c652f6e6577732f746f706963332e6a7067,'','1292945577','0');

DROP TABLE IF EXISTS tb_tradefields;
CREATE TABLE tb_tradefields (
  trade_id int(10) NOT NULL default '0',
  member_id int(10) NOT NULL default '0',
  link_man varchar(100) NOT NULL default '',
  address varchar(100) NOT NULL default '',
  company_name varchar(100) NOT NULL default '',
  email varchar(100) NOT NULL default '',
  prim_tel tinyint(1) NOT NULL default '0',
  prim_telnumber varchar(25) NOT NULL default '',
  prim_im tinyint(1) NOT NULL default '0',
  prim_imaccount varchar(100) NOT NULL default '',
  PRIMARY KEY  (trade_id),
  UNIQUE KEY trade_id (trade_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS tb_trades;
CREATE TABLE tb_trades (
  id int(10) NOT NULL auto_increment auto_increment,
  type_id enum('8','7','6','5','4','3','2','1') NOT NULL default '1',
  industry_id1 smallint(6) NOT NULL default '0',
  industry_id2 smallint(6) NOT NULL default '0',
  industry_id3 smallint(6) NOT NULL default '0',
  area_id1 smallint(6) NOT NULL default '0',
  area_id2 smallint(6) NOT NULL default '0',
  area_id3 smallint(6) NOT NULL default '0',
  member_id int(10) NOT NULL default '0',
  company_id int(5) NOT NULL default '0',
  cache_username varchar(25) NOT NULL default '',
  cache_companyname varchar(100) NOT NULL default '',
  cache_contacts varchar(255) NOT NULL default '',
  title varchar(100) NOT NULL default '',
  content text,
  price float(9,2) NOT NULL default '0.00',
  measuring_unit varchar(15) NOT NULL default '0',
  monetary_unit varchar(15) NOT NULL default '0',
  packing varchar(150) NOT NULL default '',
  quantity varchar(25) NOT NULL default '',
  display_order tinyint(1) NOT NULL default '0',
  display_expiration int(10) NOT NULL default '0',
  spec varchar(200) NOT NULL default '',
  sn varchar(25) NOT NULL default '',
  picture varchar(50) NOT NULL default '',
  picture_remote varchar(50) NOT NULL default '',
  `status` tinyint(2) NOT NULL default '0',
  submit_time int(10) NOT NULL default '0',
  expire_time int(10) NOT NULL default '0',
  expire_days int(3) NOT NULL default '0',
  if_commend tinyint(1) NOT NULL default '0',
  if_urgent enum('0','1') NOT NULL default '0',
  if_locked enum('0','1') NOT NULL default '0',
  require_point smallint(6) NOT NULL default '0',
  require_membertype smallint(6) NOT NULL default '0',
  require_freedate int(10) NOT NULL default '0',
  ip_addr varchar(15) NOT NULL default '',
  clicked int(10) NOT NULL default '1',
  tag_ids varchar(255) default '',
  formattribute_ids text,
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 AUTO_INCREMENT=30;

INSERT INTO tb_trades VALUES ('1','1','0','0','0','0','0','0','1','13','','','',0x42757920646f75626c652d646f6f7220737461696e6c65737320737465656c207461626c6520,'','0.00','0','0','','','0','0','','',0x73616d706c652f6f666665722f31322e6a7067,'','1','1292945577','1293031977','0','1','1','0','0','0','0','','1','','','1292945577','0');
INSERT INTO tb_trades VALUES ('2','1','0','0','0','0','0','0','1','13','','','',0x42757920726963652c207065616e7574732c20726564206265616e20636f726e,'','0.00','0','0','','','0','0','','','','','1','1292945577','1293031977','0','1','1','0','0','0','0','','1','','','1292945577','0');
INSERT INTO tb_trades VALUES ('3','1','0','0','0','0','0','0','1','13','','','',0x4573746f6e69616e20627573696e6573736d656e20707572636861736520667265736877617465722062617373,'','0.00','0','0','','','0','0','','','','','1','1292945577','1293031977','0','1','1','0','0','0','0','','1','','','1292945577','0');
INSERT INTO tb_trades VALUES ('4','1','0','0','0','0','0','0','1','13','','','',0x534c454550434f436f6d70616e7920427579,'','0.00','0','0','','','0','0','','','','','1','1292945577','1293031977','0','1','1','0','0','0','0','','1','','','1292945577','0');
INSERT INTO tb_trades VALUES ('5','1','0','0','0','0','0','0','1','13','','','',0x4275792063616d70686f722070696e6520726563727569747320616e64,'','0.00','0','0','','','0','0','','','','','1','1292945577','1293031977','0','1','1','0','0','0','0','','1','','','1292945577','0');
INSERT INTO tb_trades VALUES ('6','1','0','0','0','0','0','0','1','13','','','',0x4275792077617465726d656c6f6e,'','0.00','0','0','','','0','0','','','','','1','1292945577','1293031977','0','1','1','0','0','0','0','','1','','','1292945577','0');
INSERT INTO tb_trades VALUES ('7','1','0','0','0','0','0','0','1','13','','','',0x417369616e20627573696e657373204368696e6573652d6d616465206d6574616c206675726e697475726520427579,'','0.00','0','0','','','0','0','','','','','1','1292945577','1293031977','0','1','1','0','0','0','0','','1','','','1292945577','0');
INSERT INTO tb_trades VALUES ('8','1','0','0','0','0','0','0','1','13','','','',0x4e6570616c20546f626163636f2074656e646572,'','0.00','0','0','','','0','0','','','','','1','1292945577','1293031977','0','1','1','0','0','0','0','','1','','','1292945577','0');
INSERT INTO tb_trades VALUES ('9','1','0','0','0','0','0','0','1','13','','','',0x417369616e20627573696e657373204368696e6573652d6d61646520666f6f64207061636b6167696e672065717569706d656e7420427579,'','0.00','0','0','','','0','0','','','','','1','1292945577','1293031977','0','1','1','0','0','0','0','','1','','','1292945577','0');
INSERT INTO tb_trades VALUES ('10','1','0','0','0','0','0','0','1','13','','','',0x4173696120427573696e65737320427579204368696e6120666162726963,'','0.00','0','0','','','0','0','','',0x73616d706c652f6f666665722f382e6a7067,'','1','1292945577','1293031977','0','1','1','0','0','0','0','','2','','','1292945577','0');
INSERT INTO tb_trades VALUES ('11','1','0','0','0','0','0','0','1','13','','','',0x4173696120427573696e6573732042757920636f6d7075746572207061727473206d61646520696e204368696e61,'','0.00','0','0','','','0','0','','',0x73616d706c652f6f666665722f392e6a7067,'','1','1292945577','1293031977','0','0','0','0','0','0','0','','1','','','1292945577','0');
INSERT INTO tb_trades VALUES ('12','1','0','0','0','0','0','0','1','13','','','',0x4c696279616e20627573696e6573736d656e20696e746572657374656420696e20627579696e67204368696e6573652d6d616465204672656e63682066726965732070726f64756374696f6e2065717569706d656e74,'','0.00','0','0','','','0','0','','',0x73616d706c652f6f666665722f31312e6a7067,'','1','1292945577','1293031977','0','0','0','0','0','0','0','','1','','','1292945577','0');
INSERT INTO tb_trades VALUES ('13','2','0','0','0','0','0','0','1','13','','','',0x54686520737570706c79206f66204a6170616e657365206c6172636820736565646c696e6773,'','0.00','0','0','','','0','0','','',0x73616d706c652f6f666665722f31322e6a7067,'','1','1292945577','1293031977','0','0','0','0','0','0','0','','1','','','1292945577','0');
INSERT INTO tb_trades VALUES ('14','2','0','0','0','0','0','0','1','13','','','',0x537570706c7920616c6c206b696e6473206f6620666c6f77657273,'','0.00','0','0','','','0','0','','','','','1','1292945577','1293031977','0','0','0','0','0','0','0','','1','','','1292945577','0');
INSERT INTO tb_trades VALUES ('15','2','0','0','0','0','0','0','1','13','','','',0x417370656e2054727573742047726f757020746f207365656b20636f6f7065726174696f6e2077697468204368696e65736520636f6d70616e696573,'','0.00','0','0','','','0','0','','','','','1','1292945577','1293031977','0','0','0','0','0','0','0','','1','','','1292945577','0');
INSERT INTO tb_trades VALUES ('16','2','0','0','0','0','0','0','1','13','','','',0x46696e642062757965727320686f6e6579,'','0.00','0','0','','','0','0','','','','','1','1292945577','1293031977','0','0','0','0','0','0','0','','1','','','1292945577','0');
INSERT INTO tb_trades VALUES ('17','2','0','0','0','0','0','0','1','13','','','',0x43726f6174696120796163687420636f6d70616e792077616e747320746f2073656c6c20746865207961636874,'','0.00','0','0','','','0','0','','','','','1','1292945577','1293031977','0','0','0','0','0','0','0','','1','','','1292945577','0');
INSERT INTO tb_trades VALUES ('18','2','0','0','0','0','0','0','1','13','','','',0x49737261656c692066727569747320616e6420766567657461626c657320616e64206167726963756c747572616c20636f6d70616e69657320746f207365656b20646f6d657374696320627579657273,'','0.00','0','0','','','0','0','','','','','1','1292945577','1293031977','0','0','0','0','0','0','0','','1','','','1292945577','0');
INSERT INTO tb_trades VALUES ('19','2','0','0','0','0','0','0','1','13','','','',0x53656374696f6e203120636f636f612070726f63657373696e6720636f6d70616e69657320746f207365656b2062757965727320696e204368696e61,'','0.00','0','0','','','0','0','','','','','1','1292945577','1293031977','0','0','0','0','0','0','0','','1','','','1292945577','0');
INSERT INTO tb_trades VALUES ('20','2','0','0','0','0','0','0','1','13','','','',0x4972656c616e642045434f4255494c442045786869626974696f6e,'','0.00','0','0','','','0','0','','','','','1','1292945577','1293031977','0','0','0','0','0','0','0','','1','','','1292945577','0');
INSERT INTO tb_trades VALUES ('21','2','0','0','0','0','0','0','1','13','','','',0x596f75206b696e64206f6620796f756e67206672756974207472656520737570706c792054616977616e,'','0.00','0','0','','','0','0','','','','','1','1292945577','1293031977','0','0','0','0','0','0','0','','1','','','1292945577','0');
INSERT INTO tb_trades VALUES ('22','2','0','0','0','0','0','0','1','13','','','',0x537570706c792074686520656e74697265207061726167726170682037207975616e20542073686972742077686f6c6573616c6520636c6f7468696e6720696e76656e746f7279,'','0.00','0','0','','','0','0','','',0x73616d706c652f6f666665722f372e6a7067,'','1','1292945577','1293031977','0','0','0','0','0','0','0','','1','','','1292945577','0');
INSERT INTO tb_trades VALUES ('23','2','0','0','0','0','0','0','1','13','','','',0x50726f6d6f74696f6e616c20576f6f64656e20436f6d6220,'','0.00','0','0','','','0','0','','',0x73616d706c652f6f666665722f362e6a7067,'','1','1292945577','1293031977','0','0','0','0','0','0','0','','1','','','1292945577','0');
INSERT INTO tb_trades VALUES ('24','2','0','0','0','0','0','0','1','13','','','',0x53656c6c20416964612041726d2043686169727320,'','0.00','0','0','','','0','0','','',0x73616d706c652f6f666665722f352e6a7067,'','1','1292945577','1293031977','0','0','0','0','0','0','0','','1','','','1292945577','0');
INSERT INTO tb_trades VALUES ('25','2','0','0','0','0','0','0','1','13','','','',0x56616375756d2044656879647261746f7220466f7220456d756c736966696564,'','0.00','0','0','','','0','0','','',0x73616d706c652f6f666665722f342e6a7067,'','1','1292945577','1293031977','0','0','0','0','0','0','0','','1','','','1292945577','0');
INSERT INTO tb_trades VALUES ('26','2','0','0','0','0','0','0','1','13','','','',0x53616d73756e672043617274726964676520436869707320,'','0.00','0','0','','','0','0','','',0x73616d706c652f6f666665722f332e6a7067,'','1','1292945577','1293031977','0','0','0','0','0','0','0','','1','','','1292945577','0');
INSERT INTO tb_trades VALUES ('27','2','0','0','0','0','0','0','1','13','','','',0x53656c6c20506f6c6172697a6564204c656e73,'','0.00','0','0','','','0','0','','',0x73616d706c652f6f666665722f322e6a7067,'','1','1292945577','1293031977','0','0','0','0','0','0','0','','1','','','1292945577','0');
INSERT INTO tb_trades VALUES ('28','1','0','0','0','0','0','0','1','13','','','',0x42757920436174746c652046656e63652046726f6d,'','0.00','0','0','','','0','0','','',0x73616d706c652f6f666665722f31322e6a7067,'','1','1292945577','1293031977','0','0','0','0','0','0','0','','1','','','1292945577','0');
INSERT INTO tb_trades VALUES ('29','1','0','0','0','0','0','0','1','13','','','',0x426f73636820456e67696e65,'','0.00','0','0','','','0','0','','',0x73616d706c652f6f666665722f312e6a7067,'','1','1292945577','1293031977','0','0','0','0','0','0','0','','1','','','1292945577','0');

DROP TABLE IF EXISTS tb_tradetypes;
CREATE TABLE tb_tradetypes (
  id smallint(3) NOT NULL auto_increment auto_increment,
  parent_id smallint(3) NOT NULL default '0',
  `name` varchar(25) NOT NULL default '',
  `level` tinyint(1) NOT NULL default '1',
  display_order tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 AUTO_INCREMENT=9;

INSERT INTO tb_tradetypes VALUES ('1','0',0x427579,'1','0');
INSERT INTO tb_tradetypes VALUES ('2','0',0x53656c6c,'1','0');
INSERT INTO tb_tradetypes VALUES ('3','0',0x50726f7879,'1','0');
INSERT INTO tb_tradetypes VALUES ('4','0',0x436f6f7065726174696f6e,'1','0');
INSERT INTO tb_tradetypes VALUES ('5','0',0x4d65726368616e7473,'1','0');
INSERT INTO tb_tradetypes VALUES ('6','0',0x4a6f696e,'1','0');
INSERT INTO tb_tradetypes VALUES ('7','0',0x57686f6c6573616c65,'1','0');
INSERT INTO tb_tradetypes VALUES ('8','0',0x53746f636b73,'1','0');

DROP TABLE IF EXISTS tb_trustlogs;
CREATE TABLE tb_trustlogs (
  member_id int(10) NOT NULL auto_increment auto_increment,
  trusttype_id smallint(3) NOT NULL default '0',
  PRIMARY KEY  (member_id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_trusttypes;
CREATE TABLE tb_trusttypes (
  id smallint(3) NOT NULL auto_increment auto_increment,
  `name` varchar(64) NOT NULL default '',
  description text,
  image varchar(255) NOT NULL default '',
  display_order tinyint(1) NOT NULL default '0',
  `status` tinyint(1) NOT NULL default '1',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 AUTO_INCREMENT=3;

INSERT INTO tb_trusttypes VALUES ('1',0x5265616c2d6e616d652061757468656e7469636174696f6e,'',0x747275656e616d652e676966,'0','1');
INSERT INTO tb_trusttypes VALUES ('2',0x5175616c696669636174696f6e2043657274696669636174696f6e,'',0x636f6d70616e792e676966,'0','1');

DROP TABLE IF EXISTS tb_typemodels;
CREATE TABLE tb_typemodels (
  id smallint(3) NOT NULL auto_increment auto_increment,
  title varchar(50) NOT NULL default '',
  type_name varchar(50) NOT NULL default '',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 AUTO_INCREMENT=24;

INSERT INTO tb_typemodels VALUES ('1',0x65787069726174696f6e2074696d65,0x6f666665725f657870697265);
INSERT INTO tb_typemodels VALUES ('2',0x54797065,0x6d616e6167655f74797065);
INSERT INTO tb_typemodels VALUES ('3',0x6d616a6f72206d61726b657473,0x6d61696e5f6d61726b6574);
INSERT INTO tb_typemodels VALUES ('4',0x72656769737465726564206361706974616c,0x7265675f66756e64);
INSERT INTO tb_typemodels VALUES ('5',0x7475726e6f766572,0x796561725f616e6e75616c);
INSERT INTO tb_typemodels VALUES ('6',0x65636f6e6f6d792074797065,0x65636f6e6f6d69635f74797065);
INSERT INTO tb_typemodels VALUES ('7',0x6d6f6465726174696f6e20737461747573,0x636865636b5f737461747573);
INSERT INTO tb_typemodels VALUES ('8',0x656d706c6f79656573,0x656d706c6f7965655f616d6f756e74);
INSERT INTO tb_typemodels VALUES ('9',0x737461747573,0x636f6d6d6f6e5f737461747573);
INSERT INTO tb_typemodels VALUES ('10',0x7468652070726f706f7365642074797065,0x736572766963655f74797065);
INSERT INTO tb_typemodels VALUES ('11',0x656475636174696f6e616c20657870657269656e6365,0x656475636174696f6e);
INSERT INTO tb_typemodels VALUES ('12',0x7761676573,0x73616c617279);
INSERT INTO tb_typemodels VALUES ('13',0x746865206e6174757265,0x776f726b5f74797065);
INSERT INTO tb_typemodels VALUES ('14',0x4a6f62205469746c65,0x706f736974696f6e);
INSERT INTO tb_typemodels VALUES ('15',0x67656e646572,0x67656e646572);
INSERT INTO tb_typemodels VALUES ('16',0x50686f6e652054797065,0x70686f6e655f74797065);
INSERT INTO tb_typemodels VALUES ('17',0x696e7374616e74206d6573736167696e672063617465676f7279,0x696d5f74797065);
INSERT INTO tb_typemodels VALUES ('18',0x6f7074696f6e,0x636f6d6d6f6e5f6f7074696f6e);
INSERT INTO tb_typemodels VALUES ('19',0x686f6e6f7269666963,0x63616c6c73);
INSERT INTO tb_typemodels VALUES ('20',0x756e697473,0x6d6561737572696e67);
INSERT INTO tb_typemodels VALUES ('21',0x63757272656e6379,0x6d6f6e6574617279);
INSERT INTO tb_typemodels VALUES ('22',0x71756f74652074797065,0x70726963655f74797065);
INSERT INTO tb_typemodels VALUES ('23',0x7072696365207472656e64,0x70726963655f7472656e6473);

DROP TABLE IF EXISTS tb_typeoptions;
CREATE TABLE tb_typeoptions (
  id smallint(3) NOT NULL auto_increment auto_increment,
  typemodel_id smallint(3) NOT NULL default '0',
  option_value varchar(50) NOT NULL default '',
  option_label varchar(50) NOT NULL default '',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=131 DEFAULT CHARSET=utf8 AUTO_INCREMENT=131;

INSERT INTO tb_typeoptions VALUES ('1','1',0x3130,0x31302064617973);
INSERT INTO tb_typeoptions VALUES ('2','1',0x3330,0x6d6f6e7468);
INSERT INTO tb_typeoptions VALUES ('3','1',0x3930,0x7468726565);
INSERT INTO tb_typeoptions VALUES ('4','1',0x313830,0x736978);
INSERT INTO tb_typeoptions VALUES ('5','2',0x31,0x70726f64756374696f6e);
INSERT INTO tb_typeoptions VALUES ('6','2',0x32,0x74726164652074797065);
INSERT INTO tb_typeoptions VALUES ('7','2',0x33,0x73657276696365);
INSERT INTO tb_typeoptions VALUES ('8','2',0x34,0x74686520476f7665726e6d656e74206f72206f74686572206167656e63696573);
INSERT INTO tb_typeoptions VALUES ('9','3',0x31,0x4368696e61);
INSERT INTO tb_typeoptions VALUES ('10','3',0x32,0x486f6e67204b6f6e672c204d6163616f20616e642054616977616e);
INSERT INTO tb_typeoptions VALUES ('11','3',0x33,0x4e6f72746820416d6572696361);
INSERT INTO tb_typeoptions VALUES ('12','3',0x34,0x536f75746820416d6572696361);
INSERT INTO tb_typeoptions VALUES ('13','3',0x35,0x4575726f7065);
INSERT INTO tb_typeoptions VALUES ('14','3',0x36,0x41736961);
INSERT INTO tb_typeoptions VALUES ('15','3',0x37,0x416672696361);
INSERT INTO tb_typeoptions VALUES ('16','3',0x38,0x4f6365616e6961);
INSERT INTO tb_typeoptions VALUES ('17','3',0x39,0x6f74686572206d61726b6574);
INSERT INTO tb_typeoptions VALUES ('18','4','0',0x636c6f736564);
INSERT INTO tb_typeoptions VALUES ('19','4',0x31,0x6f6e652068756e647265642074686f7573616e64207975616e206c657373);
INSERT INTO tb_typeoptions VALUES ('20','4',0x32,0x524d422031302d3330206d696c6c696f6e);
INSERT INTO tb_typeoptions VALUES ('21','4',0x33,0x524d422033302d3530206d696c6c696f6e);
INSERT INTO tb_typeoptions VALUES ('22','4',0x34,0x524d422035302d313030206d696c6c696f6e);
INSERT INTO tb_typeoptions VALUES ('23','4',0x35,0x524d42203130302d333030206d696c6c696f6e);
INSERT INTO tb_typeoptions VALUES ('24','4',0x36,0x524d42203330302d353030206d696c6c696f6e);
INSERT INTO tb_typeoptions VALUES ('25','4',0x37,0x524d42203530302d312c303030206d696c6c696f6e);
INSERT INTO tb_typeoptions VALUES ('26','4',0x38,0x6d696c6c696f6e20524d4220313030302d35303030);
INSERT INTO tb_typeoptions VALUES ('27','4',0x39,0x6d6f7265207468616e20524d42203530206d696c6c696f6e);
INSERT INTO tb_typeoptions VALUES ('28','4',0x3130,0x6f74686572);
INSERT INTO tb_typeoptions VALUES ('29','5',0x31,0x524d42203130206d696c6c696f6e206f72206c6573732f79656172);
INSERT INTO tb_typeoptions VALUES ('30','5',0x32,0x524d422031302d3330206d696c6c696f6e2f79656172);
INSERT INTO tb_typeoptions VALUES ('31','5',0x33,0x524d422033302d3530206d696c6c696f6e2f79656172);
INSERT INTO tb_typeoptions VALUES ('32','5',0x34,0x524d422035302d313030206d696c6c696f6e2f79656172);
INSERT INTO tb_typeoptions VALUES ('33','5',0x35,0x524d42203130302d333030206d696c6c696f6e2f79656172);
INSERT INTO tb_typeoptions VALUES ('34','5',0x36,0x524d42203330302d353030206d696c6c696f6e2f79656172);
INSERT INTO tb_typeoptions VALUES ('35','5',0x37,0x524d42203530302d312c303030206d696c6c696f6e2f79656172);
INSERT INTO tb_typeoptions VALUES ('36','5',0x38,0x524d4220313030302d35303030206d696c6c696f6e2f79656172);
INSERT INTO tb_typeoptions VALUES ('37','5',0x39,0x6d6f7265207468616e203530206d696c6c696f6e20524d422f79656172);
INSERT INTO tb_typeoptions VALUES ('38','5',0x3130,0x6f74686572);
INSERT INTO tb_typeoptions VALUES ('39','6',0x31,0x73746174652d6f776e656420656e746572707269736573);
INSERT INTO tb_typeoptions VALUES ('40','6',0x32,0x636f6c6c65637469766520656e746572707269736573);
INSERT INTO tb_typeoptions VALUES ('41','6',0x33,0x436f72706f726174696f6e73);
INSERT INTO tb_typeoptions VALUES ('42','6',0x34,0x6a6f696e742076656e74757265);
INSERT INTO tb_typeoptions VALUES ('43','6',0x35,0x6c696d69746564206c696162696c69747920636f6d70616e79);
INSERT INTO tb_typeoptions VALUES ('44','6',0x36,0x436f72706f726174696f6e);
INSERT INTO tb_typeoptions VALUES ('45','6',0x37,0x70726976617465);
INSERT INTO tb_typeoptions VALUES ('46','6',0x38,0x696e646976696475616c20656e7465727072697365);
INSERT INTO tb_typeoptions VALUES ('47','6',0x39,0x6e6f6e2d70726f666974206f7267616e697a6174696f6e);
INSERT INTO tb_typeoptions VALUES ('48','6',0x3130,0x6f74686572);
INSERT INTO tb_typeoptions VALUES ('49','7','0',0x696e76616c6964);
INSERT INTO tb_typeoptions VALUES ('50','7',0x31,0x656666656374697665);
INSERT INTO tb_typeoptions VALUES ('51','7',0x32,0x6177616974696e6720617070726f76616c);
INSERT INTO tb_typeoptions VALUES ('52','7',0x33,0x6175646974206973206e6f7420706173736564);
INSERT INTO tb_typeoptions VALUES ('53','8',0x31,0x35206c657373);
INSERT INTO tb_typeoptions VALUES ('54','8',0x32,0x352d31302070656f706c65);
INSERT INTO tb_typeoptions VALUES ('55','8',0x33,0x31312d35302070656f706c65);
INSERT INTO tb_typeoptions VALUES ('56','8',0x34,0x35312d3130302070656f706c65);
INSERT INTO tb_typeoptions VALUES ('57','8',0x35,0x3130312d35303020706572736f6e73);
INSERT INTO tb_typeoptions VALUES ('58','8',0x36,0x3530312d3130303020706572736f6e);
INSERT INTO tb_typeoptions VALUES ('59','8',0x37,0x31303030206f72206d6f7265);
INSERT INTO tb_typeoptions VALUES ('60','10',0x31,0x636f6e73756c746174696f6e);
INSERT INTO tb_typeoptions VALUES ('61','10',0x32,0x70726f706f73616c);
INSERT INTO tb_typeoptions VALUES ('62','10',0x33,0x636f6d706c61696e7473);
INSERT INTO tb_typeoptions VALUES ('63','11','0',0x6f74686572);
INSERT INTO tb_typeoptions VALUES ('64','11',0x2d31,0x6e6f74207265717569726564);
INSERT INTO tb_typeoptions VALUES ('65','11',0x2d32,0x6f70656e);
INSERT INTO tb_typeoptions VALUES ('66','11',0x31,0x446f63746f72);
INSERT INTO tb_typeoptions VALUES ('67','11',0x32,0x4d6173746572);
INSERT INTO tb_typeoptions VALUES ('68','11',0x33,0x756e6465726772616475617465);
INSERT INTO tb_typeoptions VALUES ('69','11',0x34,0x636f6c6c656765);
INSERT INTO tb_typeoptions VALUES ('70','11',0x35,0x7365636f6e64617279);
INSERT INTO tb_typeoptions VALUES ('71','11',0x36,0x746563686e6963616c207363686f6f6c);
INSERT INTO tb_typeoptions VALUES ('72','11',0x37,0x68696768);
INSERT INTO tb_typeoptions VALUES ('73','11',0x38,0x6d6964646c65);
INSERT INTO tb_typeoptions VALUES ('74','11',0x39,0x7072696d617279);
INSERT INTO tb_typeoptions VALUES ('75','12','0',0x6e6f2063686f696365);
INSERT INTO tb_typeoptions VALUES ('76','12',0x2d31,0x496e74657276696577);
INSERT INTO tb_typeoptions VALUES ('77','12',0x31,0x31353030206c657373);
INSERT INTO tb_typeoptions VALUES ('78','12',0x32,0x313530302d3139393920524d422f6d6f6e7468);
INSERT INTO tb_typeoptions VALUES ('79','12',0x33,0x323030302d32393939207975616e2f6d6f6e7468);
INSERT INTO tb_typeoptions VALUES ('80','12',0x34,0x333030302d34393939207975616e2f6d6f6e7468);
INSERT INTO tb_typeoptions VALUES ('81','12',0x35,0x353030302061626f7665);
INSERT INTO tb_typeoptions VALUES ('82','13','0',0x6e6f2063686f696365);
INSERT INTO tb_typeoptions VALUES ('83','13',0x31,0x66756c6c);
INSERT INTO tb_typeoptions VALUES ('84','13',0x32,0x706172742d74696d65);
INSERT INTO tb_typeoptions VALUES ('85','13',0x33,0x70726f766973696f6e616c);
INSERT INTO tb_typeoptions VALUES ('86','13',0x34,0x7072616374696365);
INSERT INTO tb_typeoptions VALUES ('87','13',0x35,0x6f74686572);
INSERT INTO tb_typeoptions VALUES ('88','14','0',0x6e6f2063686f696365);
INSERT INTO tb_typeoptions VALUES ('89','14',0x31,0x63686169726d616e2c20707265736964656e7420616e64206465707574696573);
INSERT INTO tb_typeoptions VALUES ('90','14',0x32,0x74686520657865637574697665206272616e6368206d616e61676572732f65786563757469766573);
INSERT INTO tb_typeoptions VALUES ('91','14',0x33,0x746563686e6963616c206d616e616765722f746563686e6963616c207374616666);
INSERT INTO tb_typeoptions VALUES ('92','14',0x34,0x70726f64756374696f6e206d616e616765722f70726f64756374696f6e207374616666);
INSERT INTO tb_typeoptions VALUES ('93','14',0x35,0x6d61726b6574696e67206d616e616765722f6d61726b6574696e67207374616666);
INSERT INTO tb_typeoptions VALUES ('94','14',0x362c,0x70757263686173696e67206465706172746d656e74206d616e616765722f70726f637572656d656e74206f666669636572);
INSERT INTO tb_typeoptions VALUES ('95','14',0x37,0x73616c6573206d616e616765722f73616c6573);
INSERT INTO tb_typeoptions VALUES ('96','14',0x38,0x6f74686572);
INSERT INTO tb_typeoptions VALUES ('97','15','0',0x6e6f2063686f696365);
INSERT INTO tb_typeoptions VALUES ('98','15',0x31,0x4d616c65);
INSERT INTO tb_typeoptions VALUES ('99','15',0x32,0x46656d616c65);
INSERT INTO tb_typeoptions VALUES ('100','15',0x2d31,0x6f70656e);
INSERT INTO tb_typeoptions VALUES ('101','16',0x31,0x6d6f62696c652070686f6e65);
INSERT INTO tb_typeoptions VALUES ('102','16',0x32,0x7265736964656e7469616c);
INSERT INTO tb_typeoptions VALUES ('103','16',0x33,0x627573696e6573732070686f6e65);
INSERT INTO tb_typeoptions VALUES ('104','16',0x34,0x6f74686572);
INSERT INTO tb_typeoptions VALUES ('105','17',0x31,0x5151);
INSERT INTO tb_typeoptions VALUES ('106','17',0x32,0x494351);
INSERT INTO tb_typeoptions VALUES ('107','17',0x33,0x4d534e204d657373656e676572);
INSERT INTO tb_typeoptions VALUES ('108','17',0x34,0x5961686f6f204d657373656e676572);
INSERT INTO tb_typeoptions VALUES ('109','17',0x35,0x536b797065);
INSERT INTO tb_typeoptions VALUES ('110','17',0x36,0x6f74686572);
INSERT INTO tb_typeoptions VALUES ('111','17','0',0x6e6f2063686f696365);
INSERT INTO tb_typeoptions VALUES ('112','16','0',0x6e6f2063686f696365);
INSERT INTO tb_typeoptions VALUES ('113','6','0',0x6e6f2063686f696365);
INSERT INTO tb_typeoptions VALUES ('114','9','0',0x696e76616c6964);
INSERT INTO tb_typeoptions VALUES ('115','9',0x31,0x656666656374697665);
INSERT INTO tb_typeoptions VALUES ('116','18','0',0x6e6f);
INSERT INTO tb_typeoptions VALUES ('117','18',0x31,0x796573);
INSERT INTO tb_typeoptions VALUES ('118','19',0x31,0x4d722e);
INSERT INTO tb_typeoptions VALUES ('119','19',0x32,0x4d732e);
INSERT INTO tb_typeoptions VALUES ('120','20',0x31,0x73696e676c65);
INSERT INTO tb_typeoptions VALUES ('121','20',0x32,0x706965636573);
INSERT INTO tb_typeoptions VALUES ('122','21',0x31,0x656c656d656e74);
INSERT INTO tb_typeoptions VALUES ('123','21',0x33,0x555344);
INSERT INTO tb_typeoptions VALUES ('124','22',0x31,0x627579);
INSERT INTO tb_typeoptions VALUES ('125','22',0x32,0x73656c6c);
INSERT INTO tb_typeoptions VALUES ('126','23',0x31,0x7570);
INSERT INTO tb_typeoptions VALUES ('127','23',0x32,0x737461626c65);
INSERT INTO tb_typeoptions VALUES ('128','23',0x33,0x646f776e);
INSERT INTO tb_typeoptions VALUES ('129','23',0x34,0x756e6365727461696e);
INSERT INTO tb_typeoptions VALUES ('130','21',0x32,0x6d696c6c696f6e);

DROP TABLE IF EXISTS tb_userpages;
CREATE TABLE tb_userpages (
  id int(5) NOT NULL auto_increment auto_increment,
  templet_name varchar(50) NOT NULL default '',
  `name` varchar(50) NOT NULL default '',
  title varchar(50) NOT NULL default '',
  digest varchar(50) NOT NULL default '',
  content text,
  url varchar(100) NOT NULL default '',
  display_order tinyint(1) NOT NULL default '0',
  created int(10) NOT NULL default '0',
  modified int(10) NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 AUTO_INCREMENT=10;

INSERT INTO tb_userpages VALUES ('1','',0x61626f75747573,0x41626f7574205573,'',0x4e6f7465206f6e207468652077656273697465,'','0','1292945577','1292945577');
INSERT INTO tb_userpages VALUES ('2','',0x636f6e746163747573,0x436f6e74616374207573,'',0x436f6e74616374,'','0','1292945577','1292945577');
INSERT INTO tb_userpages VALUES ('3','',0x61626f7574616473,0x4164766572746973696e67,'',0x4465736372697074696f6e206f66206164766572746973696e6720616e64207072696365,'','0','1292945577','1292945577');
INSERT INTO tb_userpages VALUES ('4','',0x736974656d6170,0x53697465204d6170,'',0x5765622053697465204d6170,0x736974656d61702e706870,'0','1292945577','1292945577');
INSERT INTO tb_userpages VALUES ('5','',0x61677265656d656e74,0x4c6567616c204e6f7469636573,'',0x4c6567616c204e6f7469636573,0x61677265656d656e742e706870,'0','1292945577','0');
INSERT INTO tb_userpages VALUES ('6','',0x667269656e646c696e6b,0x4c696e6b73,'',0x4170706c69636174696f6e204c696e6b73,0x667269656e646c696e6b2e706870,'0','1292945577','0');
INSERT INTO tb_userpages VALUES ('7','',0x68656c70,0x48656c702043656e746572,'',0x48656c702043656e746572,'','0','1292945577','1292945577');
INSERT INTO tb_userpages VALUES ('8','',0x73657276696365,0x436f6d6d656e747320636f6d706c61696e7473,'',0x436f6d6d656e747320616e642073756767657374696f6e732c20636f6d706c61696e7473,'','0','1292945577','1292945577');
INSERT INTO tb_userpages VALUES ('9','',0x7370656369616c,0x5375622d73746174696f6e2070726f6a656374,'',0x496e647573747279206f7220726567696f6e616c207375622d73746174696f6e73,0x7370656369616c2f,'0','1292945577','1292945577');

DROP TABLE IF EXISTS tb_visitlogs;
CREATE TABLE tb_visitlogs (
  id smallint(6) NOT NULL auto_increment auto_increment,
  salt varchar(32) NOT NULL default '',
  date_line varchar(15) NOT NULL default '',
  type_name varchar(15) NOT NULL default '',
  PRIMARY KEY  (id),
  KEY salt (salt)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


DROP TABLE IF EXISTS tb_words;
CREATE TABLE tb_words (
  id smallint(6) NOT NULL auto_increment auto_increment,
  title varchar(50) NOT NULL default '',
  replace_to varchar(50) NOT NULL default '',
  expiration int(10) NOT NULL default '0',
  PRIMARY KEY  (id),
  UNIQUE KEY word (title)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


