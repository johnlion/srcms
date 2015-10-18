CREATE DATABASE  IF NOT EXISTS `website` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `website`;
-- MySQL dump 10.13  Distrib 5.6.13, for osx10.6 (i386)
--
-- Host: 127.0.0.1    Database: website
-- ------------------------------------------------------
-- Server version	5.0.96-log

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
-- Not dumping tablespaces as no INFORMATION_SCHEMA.FILES table on this server
--

--
-- Table structure for table `sys_group_permission`
--

DROP TABLE IF EXISTS `sys_group_permission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_group_permission` (
  `id` varchar(16) NOT NULL,
  `sys_module_id` varchar(16) NOT NULL,
  `user_group_id` varchar(16) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_group_permission`
--

LOCK TABLES `sys_group_permission` WRITE;
/*!40000 ALTER TABLE `sys_group_permission` DISABLE KEYS */;
INSERT INTO `sys_group_permission` VALUES ('3sc3elcros0g','3sbv2uecis04','3sbsuljdlov8'),('3sc002al71ug','3sbv2rcf12c8','3sbsuljdlov8'),('3sc001u1q4pg','3sbv2mfamveo','3sbsuljdlov8'),('3sc002oss1ho','3sbu88q1brb0','3sbsuljdlov8'),('3sc3ehj6go70','3sbv2j07uddo','3sbsuljdlov8'),('3sc3el4nld4c','3sbv337029r0','3sbsuljdlov8'),('3sc3ek86bj54','3sbv30pg40a4','3sbsuljdlov8'),('3sc4h7713euc','3sc4h52adpng','3sbsuljdlov8'),('3sc4a6vrsajg','3sbv30pg40a4','3sbt068mh1vo'),('3sc4a6nm04sc','3sbv0813j82g','3sbt068mh1vo'),('3sc4a11v8g9s','3sbv2mfamveo','3sbt068mh1vo'),('3sc4a6nmar5g','3sbu88q1brb0','3sbt068mh1vo'),('3sc4a6vrvb64','3sbv2j07uddo','3sbt068mh1vo'),('3sc53dmgn0no','ce0gapm3148','3sbsuljdlov8');
/*!40000 ALTER TABLE `sys_group_permission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_log`
--

DROP TABLE IF EXISTS `sys_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_log` (
  `id` varchar(16) NOT NULL,
  `log_content` varchar(200) NOT NULL,
  `log_date` datetime NOT NULL,
  `log_type` tinyint(4) NOT NULL default '0',
  `user_id` int(10) unsigned NOT NULL,
  `log_ip` varchar(20) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_log`
--

LOCK TABLES `sys_log` WRITE;
/*!40000 ALTER TABLE `sys_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_module`
--

DROP TABLE IF EXISTS `sys_module`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_module` (
  `id` varchar(16) NOT NULL,
  `module_icon` varchar(20) default NULL,
  `module_name` varchar(20) NOT NULL,
  `module_parent_id` varchar(16) default NULL,
  `module_type` varchar(10) default NULL,
  `module_resource` varchar(60) default NULL,
  `module_order` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_module`
--

LOCK TABLES `sys_module` WRITE;
/*!40000 ALTER TABLE `sys_module` DISABLE KEYS */;
INSERT INTO `sys_module` VALUES ('3sbu5avp533c','fa-file-text-o','系统日志',NULL,'module','',2),('3sbu88q1brb0','','操作日志','3sbu5avp533c','page','index.php?c=sys_log',2),('3sbv0813j82g','','内容修改','3sbu88q1brb0','action','index.php?c=sys_log&m=edit',0),('3sbv1v0kumj8','','日志删除','3sbu88q1brb0','action','index.php?c=sys_log&m=delete',0),('3sbv2cmqqisg','fa-cog','系统管理','','module','',3),('3sbv2j07uddo',NULL,'系统用户管理','3sbv2cmqqisg','page','index.php?c=sys_user',3),('3sbv2mfamveo','','用户组管理','3sbv2cmqqisg','page','index.php?c=sys_user_group',4),('3sbv2rcf12c8','','模块管理','3sbv2cmqqisg','page','index.php?c=sys_module',5),('3sbv2uecis04','','添加用户','3sbv2j07uddo','action','index.php?c=sys_user&m=add',0),('3sbv30pg40a4','','修改用户','3sbv2j07uddo','action','index.php?c=sys_user&m=edit',0),('3sbv337029r0','','删除用户','3sbv2j07uddo','action','index.php?c=sys_user&m=delete',0),('3sbv3d35se2k','','添加组','3sbv2mfamveo','action','index.php?c=sys_user_group&m=add',0),('3sc4gr7f8bps','fa-bar-chart-o','数据统计','','module','',1),('3sc4h52adpng','','用户统计','3sc4gr7f8bps','page','index.php?c=stat_user',1),('3sc538k8apt8','fa-gears','运营管理','','module','',0),('ce0gapm3148','','用户管理','3sc538k8apt8','page','index.php?c=user',0);
/*!40000 ALTER TABLE `sys_module` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_user`
--

DROP TABLE IF EXISTS `sys_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_user` (
  `id` varchar(16) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(45) NOT NULL,
  `truename` varchar(45) default NULL,
  `email` varchar(80) default NULL,
  `createdate` datetime NOT NULL,
  `sys_group_id` varchar(16) NOT NULL,
  `flag_valid` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_user`
--

LOCK TABLES `sys_user` WRITE;
/*!40000 ALTER TABLE `sys_user` DISABLE KEYS */;
INSERT INTO `sys_user` VALUES ('3sbtlnrakr1o','tom','9db06bcff9248837f86d1a6bcf41c9e7','刘德华','tomc@ddd.cc','0000-00-00 00:00:00','3sbsvudd5glg',1),('3sbtnds7ht6k','jerry','433333','周惠','ddd@mm.com','0000-00-00 00:00:00','3sbt025107mc',0),('3sc4efprua2s','admin','35a50fedd77cd290a0dadfbb8af2b44c','超人','admin@jfyapp.com','0000-00-00 00:00:00','3sbsuljdlov8',1);
/*!40000 ALTER TABLE `sys_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_user_group`
--

DROP TABLE IF EXISTS `sys_user_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_user_group` (
  `id` varchar(24) NOT NULL,
  `group_name` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_user_group`
--

LOCK TABLES `sys_user_group` WRITE;
/*!40000 ALTER TABLE `sys_user_group` DISABLE KEYS */;
INSERT INTO `sys_user_group` VALUES ('3sbsuljdlov8','超级管理员'),('3sbsv5h9dr80','系统维护员'),('3sbsvudd5glg','运营管理'),('3sbt025107mc','市场销售'),('3sbt068mh1vo','客服人员');
/*!40000 ALTER TABLE `sys_user_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'website'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-05-18 14:46:24
