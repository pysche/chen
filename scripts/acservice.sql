-- MySQL dump 10.14  Distrib 5.5.32-MariaDB, for osx10.8 (i386)
--
-- Host: localhost    Database: acservice
-- ------------------------------------------------------
-- Server version	5.5.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Lja_ArticleCategories`
--

DROP TABLE IF EXISTS `Lja_ArticleCategories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Lja_ArticleCategories` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) NOT NULL,
  `SortNum` smallint(4) unsigned zerofill NOT NULL DEFAULT '9999',
  `CreateTime` datetime NOT NULL,
  `Uid` int(8) unsigned NOT NULL,
  `Uname` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='文章分类';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Lja_ArticleCategories`
--

LOCK TABLES `Lja_ArticleCategories` WRITE;
/*!40000 ALTER TABLE `Lja_ArticleCategories` DISABLE KEYS */;
INSERT INTO `Lja_ArticleCategories` VALUES (1,'新闻公告',4444,'0000-00-00 00:00:00',0,'');
/*!40000 ALTER TABLE `Lja_ArticleCategories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Lja_Articles`
--

DROP TABLE IF EXISTS `Lja_Articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Lja_Articles` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `Title` varchar(200) NOT NULL,
  `CreateTime` datetime NOT NULL,
  `Category` int(8) unsigned NOT NULL,
  `Content` text NOT NULL,
  `PubFlag` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `SortNum` smallint(4) unsigned zerofill NOT NULL DEFAULT '9999',
  `Tags` varchar(200) NOT NULL,
  `Uid` int(8) unsigned NOT NULL,
  `Uname` varchar(50) NOT NULL,
  `FirstAttach` char(32) NOT NULL,
  `Hash` char(32) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `PubFlag` (`PubFlag`),
  KEY `SortNum` (`SortNum`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COMMENT='文章';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Lja_Articles`
--

LOCK TABLES `Lja_Articles` WRITE;
/*!40000 ALTER TABLE `Lja_Articles` DISABLE KEYS */;
INSERT INTO `Lja_Articles` VALUES (7,'新闻标题新闻标题新闻标题新闻标题新闻标题新闻标题新闻标题新闻标题','2013-08-25 23:20:29',1,'',1,9999,'',1,'test','','9e35a8c3e9d8552c7457cfd647671858'),(8,'新闻标题新闻标题新闻标题新闻标题新闻标题新闻标题新闻标题新闻标题','2013-08-26 15:44:49',1,'',1,9999,'',1,'test','','aeef3586eea3ee6ffa3575e9d07daf43'),(9,'新闻标题新闻标题新闻标题新闻标题新闻标题新闻标题新闻标题','2013-08-26 15:44:55',1,'',1,9999,'',1,'test','','669df1e1f1a28a281a66619e4c604e2b'),(10,'新闻标题新闻标题新闻标题新闻标题新闻标题新闻标题新闻标题','2013-08-26 15:45:01',1,'',1,9999,'',1,'test','','a4ced6b9b36ace99b4f31476d8f7d283'),(11,'新闻标题新闻标题新闻标题新闻标题新闻标题新闻标题新闻标题','2013-08-26 15:45:07',1,'',1,9999,'',1,'test','','8ed392d76591dcc55989a3c33b3a18b6'),(12,'新闻标题新闻标题新闻标题新闻标题新闻标题新闻标题新闻标题','2013-08-26 15:45:13',1,'',1,9999,'',1,'test','','c37d757cb27e1fedd5f6cf97e2291033'),(13,'新闻标题新闻标题新闻标题新闻标题新闻标题新闻标题新闻标题','2013-08-26 15:45:22',1,'',1,9999,'',1,'test','','55e833ae01f1b06378d3a1d6dbf4247e'),(14,'新闻标题新闻标题新闻标题新闻标题新闻标题新闻标题新闻标题','2013-08-26 15:45:28',1,'',1,9999,'',1,'test','','6d6e0d85aa9e0f9e9de4bf428163fe6d'),(15,'新闻标题新闻标题新闻标题新闻标题新闻标题新闻标题新闻标题','2013-08-26 15:45:34',1,'',1,9999,'',1,'test','','e36f81291b2a9c9b3299096bd08959ad'),(16,'新闻标题新闻标题新闻标题新闻标题新闻标题新闻标题新闻标题','2013-08-26 15:45:45',1,'',1,9999,'',1,'test','','98e4002a60988e8f4b31cdf86348748b');
/*!40000 ALTER TABLE `Lja_Articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Lja_Attachment`
--

DROP TABLE IF EXISTS `Lja_Attachment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Lja_Attachment` (
  `id` char(32) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `MimeType` varchar(40) NOT NULL,
  `Size` int(8) unsigned NOT NULL DEFAULT '0',
  `Uid` int(8) unsigned NOT NULL,
  `Uname` varchar(50) NOT NULL,
  `Hash` char(32) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Width` int(8) unsigned NOT NULL,
  `Height` int(8) unsigned NOT NULL,
  `CreateTime` datetime NOT NULL,
  `OrderNo` smallint(4) unsigned NOT NULL DEFAULT '9999',
  `Ext` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Lja_Attachment`
--

LOCK TABLES `Lja_Attachment` WRITE;
/*!40000 ALTER TABLE `Lja_Attachment` DISABLE KEYS */;
INSERT INTO `Lja_Attachment` VALUES ('073185b4023bee53358303c019df73c0','loading.gif','image/gif',1787,0,'','9e35a8c3e9d8552c7457cfd647671858','',32,32,'2013-08-25 23:18:00',1000,'gif'),('24f4acf1862e9a391d6d9f503eb7ab9f','man_01.jpg','image/jpeg',29412,0,'','bf3e68f752396b7d0e9dee6ab22e7138','',120,150,'2013-08-26 15:49:16',1000,'jpg'),('2a817bcc9c526a4d44483ca99aba683e','pic_03.gif','image/gif',26379,0,'','c6c2ee701c7115aed0de1834d7304314','',200,241,'2013-08-26 16:06:25',1000,'gif'),('420b5b5b3f1c616bc6c28449cdfdfbbd','index_2013_06.gif','image/gif',6265,0,'','c6c2ee701c7115aed0de1834d7304314','',112,134,'2013-08-26 16:11:27',1030,'gif'),('549bfbe8cc868f4a6683ed9f2fb1abba','banner01.jpg','image/jpeg',180590,0,'','864be8de9f6b7d4869f5ca277ab141aa','',806,225,'2013-08-26 16:35:21',1000,'jpg'),('5ae9e1c07913a054c3c862fb8442be3c','loading.gif','image/gif',1787,0,'','9e35a8c3e9d8552c7457cfd647671858','',32,32,'2013-08-25 23:20:27',1010,'gif'),('6714aa22147f74fb423548b484ac1738','pic_01.gif','image/gif',36784,0,'','84c10a2fe6b03e544a8c72c46b950156','',300,194,'2013-08-26 16:04:53',1000,'gif'),('69f65df72a09f7c79dafc2488fd87364','man_01.jpg','image/jpeg',29412,0,'','69916b3773fd53be9d749e543fee83f0','',120,150,'2013-08-26 15:54:34',1000,'jpg'),('6a0355156327501d876bff7c609c8522','banner02.jpg','image/jpeg',142417,0,'','864be8de9f6b7d4869f5ca277ab141aa','',806,225,'2013-08-26 16:35:29',1010,'jpg'),('75406f3443c24994e3b3d45286f1f2c9','pic_01.gif','image/gif',36784,0,'','b71401025bf2cda4152560fe06e062da','',300,194,'2013-08-26 16:06:01',1000,'gif'),('79a8c3d3fd54cf90a6857f62dfb2befe','man_01.jpg','image/jpeg',29412,0,'','8acf707274a7ac211ef1336b514bb4cd','',120,150,'2013-08-26 15:54:16',1000,'jpg'),('8752e432192b040b0faf33df2b4d516d','ac_g_10.gif','image/gif',12099,0,'','c6c2ee701c7115aed0de1834d7304314','',198,225,'2013-08-26 16:11:21',1010,'gif'),('9a12d18349bf5c1f6763fcfbe3b50be9','man_01.jpg','image/jpeg',29412,0,'','6aeef301c5be68910c68c58db236ce70','',120,150,'2013-08-26 15:53:35',1000,'jpg'),('b4785c96f365f57ca0f42627dea091c9','loading.gif','image/gif',1787,0,'','9e35a8c3e9d8552c7457cfd647671858','',32,32,'2013-08-25 23:18:33',1020,'gif'),('b7eec54390add437e29df7422dde6bc8','ac_g_11.gif','image/gif',2712,0,'','c6c2ee701c7115aed0de1834d7304314','',209,56,'2013-08-26 16:11:24',1020,'gif'),('baf903989933ecbd769a3d1b735b035d','man_01.jpg','image/jpeg',29412,0,'','aaab483eddd86fc6d0ce928d0ad7825c','',120,150,'2013-08-26 15:53:50',1000,'jpg'),('c06e50e9227359e7279d392dfe295ed2','ac_g_10.gif','image/gif',12099,0,'','cc05aa85cfd73c9c719ca82bc8a31268','',198,225,'2013-08-26 16:03:48',1000,'gif'),('c54c330bf2db765a1334dec239c259eb','banner03.jpg','image/jpeg',145398,0,'','864be8de9f6b7d4869f5ca277ab141aa','',806,225,'2013-08-26 16:35:36',1020,'jpg'),('d4c0c16d94470d31e84e54ee2607a332','man_01.jpg','image/jpeg',29412,0,'','6365d3a1e88a6e3e6b9b429b96809f6c','',120,150,'2013-08-26 15:53:17',1000,'jpg'),('fd6570d3180170f232f5713a2a36f3ec','loading.gif','image/gif',1787,0,'','9e35a8c3e9d8552c7457cfd647671858','',32,32,'2013-08-25 23:18:25',1030,'gif');
/*!40000 ALTER TABLE `Lja_Attachment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Lja_Cooperate`
--

DROP TABLE IF EXISTS `Lja_Cooperate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Lja_Cooperate` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `Title` varchar(200) NOT NULL,
  `CreateTime` datetime NOT NULL,
  `Content` text NOT NULL,
  `PubFlag` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `SortNum` smallint(4) unsigned zerofill NOT NULL DEFAULT '9999',
  `Tags` varchar(200) NOT NULL,
  `Uid` int(8) unsigned NOT NULL,
  `Uname` varchar(50) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Category` varchar(200) NOT NULL,
  `ContactInfo` varchar(200) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `MemberPrice` varchar(20) NOT NULL,
  `PositionLongitude` float NOT NULL,
  `PositionLatitude` float NOT NULL,
  `Specials` varchar(200) NOT NULL,
  `Hash` char(32) NOT NULL,
  `FirstAttach` char(32) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `PubFlag` (`PubFlag`),
  KEY `SortNum` (`SortNum`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='文章';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Lja_Cooperate`
--

LOCK TABLES `Lja_Cooperate` WRITE;
/*!40000 ALTER TABLE `Lja_Cooperate` DISABLE KEYS */;
INSERT INTO `Lja_Cooperate` VALUES (1,'1111','2013-08-26 11:19:46','212',1,9999,'',1,'test','34','3434','','456456','456456',120.625,31.3117,'4545','bf3e68f752396b7d0e9dee6ab22e7138','24f4acf1862e9a391d6d9f503eb7ab9f'),(2,'23421341234','2013-08-26 12:18:59','',1,9999,'',1,'test','','','','','',120.727,31.3307,'','cc05aa85cfd73c9c719ca82bc8a31268','c06e50e9227359e7279d392dfe295ed2'),(3,'testest','2013-08-26 16:04:44','',1,9999,'',1,'test','aaaaaaaa','','','','',120.669,31.3078,'','84c10a2fe6b03e544a8c72c46b950156','6714aa22147f74fb423548b484ac1738'),(4,'test33333','2013-08-26 16:05:06','',1,9999,'',1,'test','ddddddd','','','','',120.605,31.3354,'','b71401025bf2cda4152560fe06e062da','75406f3443c24994e3b3d45286f1f2c9'),(5,'测试酒店','2013-08-26 16:06:28','介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍',1,9999,'',1,'test','地址地址地址地址地址地址地址地址','菜系','0512-88888888','100','80',120.682,31.2991,'特色','c6c2ee701c7115aed0de1834d7304314','2a817bcc9c526a4d44483ca99aba683e');
/*!40000 ALTER TABLE `Lja_Cooperate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Lja_Drivers`
--

DROP TABLE IF EXISTS `Lja_Drivers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Lja_Drivers` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `Title` varchar(200) NOT NULL,
  `CreateTime` datetime NOT NULL,
  `Category` int(8) unsigned NOT NULL,
  `Content` text NOT NULL,
  `PubFlag` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `SortNum` smallint(4) unsigned zerofill NOT NULL DEFAULT '9999',
  `Tags` varchar(200) NOT NULL,
  `Uid` int(8) unsigned NOT NULL,
  `Uname` varchar(50) NOT NULL,
  `Hash` char(32) NOT NULL,
  `FirstAttach` char(32) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `PubFlag` (`PubFlag`),
  KEY `SortNum` (`SortNum`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='文章';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Lja_Drivers`
--

LOCK TABLES `Lja_Drivers` WRITE;
/*!40000 ALTER TABLE `Lja_Drivers` DISABLE KEYS */;
INSERT INTO `Lja_Drivers` VALUES (1,'张三','2013-08-26 10:25:53',0,'张三张三张三张三张三',1,9999,'',1,'test','bf3e68f752396b7d0e9dee6ab22e7138','24f4acf1862e9a391d6d9f503eb7ab9f'),(2,'李四','2013-08-26 15:53:19',0,'',1,9999,'',1,'test','6365d3a1e88a6e3e6b9b429b96809f6c','d4c0c16d94470d31e84e54ee2607a332'),(3,'王五','2013-08-26 15:53:36',0,'',1,9999,'',1,'test','6aeef301c5be68910c68c58db236ce70','9a12d18349bf5c1f6763fcfbe3b50be9'),(4,'小二','2013-08-26 15:53:52',0,'',1,9999,'',1,'test','aaab483eddd86fc6d0ce928d0ad7825c','baf903989933ecbd769a3d1b735b035d'),(5,'李氏','2013-08-26 15:54:19',0,'',1,9999,'',1,'test','8acf707274a7ac211ef1336b514bb4cd','79a8c3d3fd54cf90a6857f62dfb2befe'),(6,'张氏','2013-08-26 15:54:36',0,'',1,9999,'',1,'test','69916b3773fd53be9d749e543fee83f0','69f65df72a09f7c79dafc2488fd87364');
/*!40000 ALTER TABLE `Lja_Drivers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Lja_Logs`
--

DROP TABLE IF EXISTS `Lja_Logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Lja_Logs` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `Uid` int(8) unsigned NOT NULL,
  `ActTime` datetime NOT NULL,
  `Ip` varchar(15) NOT NULL,
  `Message` varchar(200) NOT NULL,
  `Uname` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8 COMMENT='系统日志';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Lja_Logs`
--

LOCK TABLES `Lja_Logs` WRITE;
/*!40000 ALTER TABLE `Lja_Logs` DISABLE KEYS */;
INSERT INTO `Lja_Logs` VALUES (1,1,'0000-00-00 00:00:00','','退出系统',''),(2,1,'0000-00-00 00:00:00','127.0.0.1','登录系统',''),(3,1,'0000-00-00 00:00:00','127.0.0.1','登录系统',''),(4,1,'0000-00-00 00:00:00','127.0.0.1','登录系统',''),(5,1,'0000-00-00 00:00:00','127.0.0.1','退出系统',''),(6,1,'0000-00-00 00:00:00','127.0.0.1','登录系统',''),(7,1,'0000-00-00 00:00:00','127.0.0.1','登录系统',''),(8,1,'0000-00-00 00:00:00','127.0.0.1','登录系统',''),(9,1,'0000-00-00 00:00:00','127.0.0.1','登录系统',''),(10,1,'0000-00-00 00:00:00','127.0.0.1','登录系统',''),(11,1,'0000-00-00 00:00:00','127.0.0.1','登录系统',''),(12,1,'0000-00-00 00:00:00','127.0.0.1','登录系统',''),(13,1,'0000-00-00 00:00:00','127.0.0.1','登录系统',''),(14,1,'0000-00-00 00:00:00','127.0.0.1','登录系统',''),(15,1,'0000-00-00 00:00:00','127.0.0.1','登录系统',''),(16,1,'0000-00-00 00:00:00','127.0.0.1','登录系统',''),(17,1,'0000-00-00 00:00:00','127.0.0.1','登录系统',''),(18,1,'0000-00-00 00:00:00','127.0.0.1','登录系统',''),(19,1,'0000-00-00 00:00:00','127.0.0.1','登录系统',''),(20,1,'0000-00-00 00:00:00','127.0.0.1','退出系统',''),(21,0,'0000-00-00 00:00:00','127.0.0.1','登录系统',''),(22,0,'0000-00-00 00:00:00','127.0.0.1','登录系统',''),(23,0,'0000-00-00 00:00:00','127.0.0.1','退出系统',''),(24,0,'0000-00-00 00:00:00','127.0.0.1','退出系统',''),(25,0,'0000-00-00 00:00:00','127.0.0.1','登录系统',''),(26,0,'0000-00-00 00:00:00','127.0.0.1','登录系统',''),(27,0,'0000-00-00 00:00:00','127.0.0.1','登录系统',''),(28,0,'0000-00-00 00:00:00','127.0.0.1','登录系统',''),(29,0,'0000-00-00 00:00:00','127.0.0.1','登录系统',''),(30,0,'0000-00-00 00:00:00','127.0.0.1','登录系统',''),(31,0,'0000-00-00 00:00:00','127.0.0.1','登录系统',''),(32,0,'0000-00-00 00:00:00','127.0.0.1','登录系统',''),(33,0,'0000-00-00 00:00:00','127.0.0.1','登录系统',''),(34,0,'0000-00-00 00:00:00','127.0.0.1','登录系统',''),(35,0,'2013-08-22 08:44:00','127.0.0.1','登录系统',''),(36,0,'2013-08-22 12:25:48','127.0.0.1','登录系统',''),(37,0,'2013-08-22 14:55:07','127.0.0.1','登录系统',''),(38,0,'2013-08-22 19:53:23','127.0.0.1','登录系统',''),(39,0,'2013-08-23 14:39:44','127.0.0.1','登录系统',''),(40,0,'2013-08-23 17:25:43','127.0.0.1','退出系统',''),(41,0,'2013-08-23 17:25:48','127.0.0.1','登录系统',''),(42,0,'2013-08-23 20:07:57','127.0.0.1','登录系统',''),(43,0,'2013-08-23 20:23:07','127.0.0.1','退出系统',''),(44,0,'2013-08-23 20:23:10','127.0.0.1','登录系统',''),(45,0,'2013-08-23 22:31:11','127.0.0.1','登录系统',''),(46,0,'2013-08-23 23:04:50','127.0.0.1','登录系统',''),(47,0,'2013-08-23 23:24:04','127.0.0.1','登录系统',''),(48,0,'2013-08-23 23:56:36','10.211.55.3','登录系统',''),(49,0,'0000-00-00 00:00:00','127.0.0.1','登录系统',''),(50,0,'0000-00-00 00:00:00','127.0.0.1','登录系统',''),(51,0,'0000-00-00 00:00:00','127.0.0.1','登录系统',''),(52,0,'2013-08-25 22:57:24','127.0.0.1','登录系统',''),(53,0,'2013-08-25 23:10:01','127.0.0.1','登录系统',''),(54,0,'2013-08-26 09:51:48','127.0.0.1','登录系统',''),(55,0,'2013-08-26 11:30:10','127.0.0.1','登录系统',''),(56,0,'2013-08-26 12:18:27','127.0.0.1','登录系统',''),(57,0,'2013-08-26 12:49:43','127.0.0.1','登录系统',''),(58,0,'2013-08-26 12:50:32','127.0.0.1','登录系统',''),(59,0,'2013-08-26 13:53:37','127.0.0.1','登录系统',''),(60,0,'2013-08-26 13:59:41','127.0.0.1','退出系统',''),(61,0,'2013-08-26 14:01:27','127.0.0.1','登录系统',''),(62,0,'2013-08-26 14:01:42','127.0.0.1','退出系统',''),(63,0,'2013-08-26 14:01:48','127.0.0.1','登录系统',''),(64,0,'2013-08-26 15:36:10','127.0.0.1','登录系统',''),(65,0,'2013-08-26 15:40:30','127.0.0.1','登录系统',''),(66,0,'2013-08-26 16:36:49','127.0.0.1','登录系统','');
/*!40000 ALTER TABLE `Lja_Logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Lja_Params`
--

DROP TABLE IF EXISTS `Lja_Params`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Lja_Params` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `Uid` int(8) unsigned NOT NULL,
  `Uname` varchar(20) NOT NULL,
  `CreateTime` datetime NOT NULL,
  `Content` varchar(100) NOT NULL,
  `Memo` varchar(200) NOT NULL,
  `Category` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Category` (`Category`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Lja_Params`
--

LOCK TABLES `Lja_Params` WRITE;
/*!40000 ALTER TABLE `Lja_Params` DISABLE KEYS */;
INSERT INTO `Lja_Params` VALUES (1,1,'test','2013-08-23 15:26:41','32323','43434',''),(3,1,'test','2013-08-23 15:55:40','安装','','service_type'),(4,1,'test','2013-08-23 15:55:48','定期维护','','service_type'),(5,1,'test','2013-08-23 15:55:54','维修','','service_type'),(6,1,'test','2013-08-23 15:56:05','张三','','service_executor'),(7,1,'test','2013-08-23 15:56:25','李四','','service_executor'),(8,1,'test','2013-08-23 15:56:34','好','','feedback_level'),(9,1,'test','2013-08-23 15:56:48','不好','','feedback_level'),(10,1,'test','2013-08-23 16:00:51','合同购买','','sales_source'),(11,1,'test','2013-08-23 16:01:23','网上购买','','sales_source'),(12,1,'test','2013-08-23 16:01:59','现金购买','','sales_source'),(13,1,'test','2013-08-23 16:02:06','招投标','','sales_source'),(14,1,'test','2013-08-23 16:02:16','个','','unit'),(15,1,'test','2013-08-23 16:02:22','台','','unit'),(16,1,'test','2013-08-23 16:02:28','张','','unit'),(17,1,'test','2013-08-23 16:02:34','套','','unit'),(18,1,'test','2013-08-23 16:02:43','已审核','','audit'),(19,1,'test','2013-08-23 16:02:55','客户拒绝回访','','visit_failed_reasons'),(20,1,'test','2013-08-23 16:03:01','客户比较忙','','visit_failed_reasons'),(21,1,'test','2013-08-23 16:03:08','电话没人接','','visit_failed_reasons'),(22,1,'test','2013-08-23 16:03:26','调查客户对公司服务的满意度','','visit_destination'),(23,1,'test','2013-08-23 16:03:36','调查公司对公司产品的满意度','','visit_destination'),(24,1,'test','2013-08-23 16:03:54','超过使用年限报废','','part_discard_reasons'),(25,1,'test','2013-08-23 16:04:02','强行报废','','part_discard_reasons'),(26,1,'test','2013-08-23 16:04:10','无法使用报废','','part_discard_reasons'),(27,1,'test','2013-08-23 16:04:18','物品损坏报废','','part_discard_reasons'),(28,1,'test','2013-08-23 16:04:24','正常报废','','part_discard_reasons'),(29,1,'test','2013-08-23 16:04:44','王五','','partin_actor'),(30,1,'test','2013-08-23 16:04:49','小三','','partin_actor'),(31,1,'test','2013-08-23 16:04:58','老大','','salesman'),(32,1,'test','2013-08-23 16:05:03','小二','','salesman'),(33,1,'test','2013-08-23 16:05:13','无法开机','','problem_types'),(34,1,'test','2013-08-23 16:05:19','无法联网','','problem_types'),(35,1,'test','2013-08-23 16:05:29','完全修复','','repair_memo'),(36,1,'test','2013-08-23 16:05:34','部分修复','','repair_memo'),(37,1,'test','2013-08-23 16:09:09','代理商','','sales_source'),(38,1,'test','2013-08-23 16:13:27','其他','','complain_category'),(39,1,'test','2013-08-23 16:13:33','提出意见','','complain_category'),(40,1,'test','2013-08-23 16:13:39','投诉公司员工','','complain_category'),(41,1,'test','2013-08-23 16:13:45','服务投诉','','complain_category'),(42,1,'test','2013-08-23 16:13:51','质量投诉','','complain_category'),(43,1,'test','2013-08-23 16:17:38','其他方式','','visit_method'),(44,1,'test','2013-08-23 16:17:43','短信回访','','visit_method'),(45,1,'test','2013-08-23 16:17:49','上门回访','','visit_method'),(46,1,'test','2013-08-23 16:17:55','邮件回访','','visit_method'),(47,1,'test','2013-08-23 16:18:01','电话回访','','visit_method'),(48,1,'test','2013-08-23 16:18:20','不满意','','visit_level'),(49,1,'test','2013-08-23 16:18:30','基本满意','','visit_level'),(50,1,'test','2013-08-23 16:18:36','满意','','visit_level'),(51,1,'test','2013-08-23 16:18:43','非常满意','','visit_level'),(52,1,'test','2013-08-23 16:26:40','测试1组','','customers_group'),(53,1,'test','2013-08-23 16:26:48','测试2组','','customers_group');
/*!40000 ALTER TABLE `Lja_Params` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Lja_Users`
--

DROP TABLE IF EXISTS `Lja_Users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Lja_Users` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) NOT NULL,
  `Password` char(32) NOT NULL,
  `Realname` varchar(20) NOT NULL,
  `LastLogin` datetime NOT NULL,
  `AuthMask` text,
  `Uid` int(8) unsigned NOT NULL,
  `Uname` varchar(50) NOT NULL,
  `Display` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `Super` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `Username` (`Username`),
  KEY `Display` (`Display`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='系统用户';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Lja_Users`
--

LOCK TABLES `Lja_Users` WRITE;
/*!40000 ALTER TABLE `Lja_Users` DISABLE KEYS */;
INSERT INTO `Lja_Users` VALUES (1,'pysche','5093b0ecbefed9907361c7ce0aec6907','test','0000-00-00 00:00:00','a:6:{s:5:\"users\";a:4:{i:0;s:4:\"list\";i:1;s:3:\"add\";i:2;s:6:\"update\";i:3;s:6:\"delete\";}s:4:\"logs\";a:4:{i:0;s:4:\"list\";i:1;s:3:\"add\";i:2;s:6:\"update\";i:3;s:6:\"delete\";}s:4:\"news\";a:4:{i:0;s:4:\"list\";i:1;s:3:\"add\";i:2;s:6:\"update\";i:3;s:6:\"delete\";}s:7:\"drivers\";a:4:{i:0;s:4:\"list\";i:1;s:3:\"add\";i:2;s:6:\"update\";i:3;s:6:\"delete\";}s:9:\"cooperate\";a:4:{i:0;s:4:\"list\";i:1;s:3:\"add\";i:2;s:6:\"update\";i:3;s:6:\"delete\";}s:7:\"banners\";a:4:{i:0;s:4:\"list\";i:1;s:3:\"add\";i:2;s:6:\"update\";i:3;s:6:\"delete\";}}',0,'',1,0),(7,'system','54b53072540eeeb8f8e9343e71f28176','系统管理员','0000-00-00 00:00:00','',1,'test',0,1);
/*!40000 ALTER TABLE `Lja_Users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-08-26 16:37:43
