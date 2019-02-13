-- MySQL dump 10.13  Distrib 5.5.60, for debian-linux-gnu (armv8l)
--
-- Host: localhost    Database: se17
-- ------------------------------------------------------
-- Server version	5.5.60-0+deb8u1

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
-- Current Database: `se17`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `se17` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `se17`;

--
-- Table structure for table `doc`
--

DROP TABLE IF EXISTS `doc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doc` (
  `docid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(45) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `text` varchar(5000) DEFAULT NULL,
  `tt` varchar(45) DEFAULT NULL,
  `commit` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`docid`)
) ENGINE=InnoDB AUTO_INCREMENT=123 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doc`
--

LOCK TABLES `doc` WRITE;
/*!40000 ALTER TABLE `doc` DISABLE KEYS */;
INSERT INTO `doc` VALUES (22,'u01','임진수 피자먹이기 에 관한 건','진수가 피자를 먹고싶대요.\r\n','2017-06-11 03:14:14','Y'),(23,'u02','이정우학생 에 관한 건','정우가 발표를 합니다.','2017-06-11 04:15:15',NULL),(97,'u01','금주 시험 일정 보고','2017년 6월 16일 (금) <br> \r 금주 시험 일정 보고 입니다.<br>\r <br>\r 1. 소프트웨어공학 기말고사<br>\r 2. 알고리즘 기말고사<br>\r 3. 컴퓨터 보안 기말고사<br>\r 4. 종합설계 프로젝트 발표<br>\r 5. 소프트웨어공학 프로젝트 발표 <br>','2017-06-15 12:56:10',NULL),(98,'u01','엔터 테스트','1<br>\r\n2<br>\r\n3<br>\r\n4<br>','2017-06-15 12:58:51',NULL),(102,'u01','진수꿀꿀','사장님,부장님받아요','2017-06-15 01:28:24','Y'),(103,'u01','유림 꿀꿀','유림 꿀꿀','2017-06-15 01:31:11','Y'),(104,'u03','과장이 쓴다','받아라 김사장','2017-06-15 02:01:27',NULL),(106,'u03','과장 작성','부장 수신<br>\r\n사장 수신<br>\r\n','2017-06-15 02:04:27',NULL),(108,'u02','도서구매 기안','사내 도서 구매를 위한 기안요청입니다.<br>\r\n<br><br>\r\n\r\n1. 책1: 출판사1 : 금액 20000원 <br>\r\n1. 책2: 출판사2 : 금액 10000원 <br>\r\n<br>\r\n<br>\r\n위와 같이 기안하오니 승인 부탁드립니다.<br>','2017-06-15 03:30:11','Y'),(109,'u03','발표발표','승인부탁드립니다.','2017-06-15 11:03:36','Y'),(110,'u02','asds','a','2017-06-20 08:43:52','Y'),(111,'u01 ','11111','1111','2018-05-03 10:55:35','Y'),(112,'u01 ','test1','test','2018-05-03 10:57:00','Y'),(113,'u01','테스트 0501','ㅍ','2018-06-20 03:52:12',NULL),(114,'u01 ','VERIZON','ㅇ','2018-07-11 09:27:02',NULL),(115,'u01','비나이다','ㅎㅇ','2018-09-14 10:04:17',NULL),(116,'u01','ddddd','dd','2018-10-12 10:13:13',NULL),(117,'u01','dasda','asdasdas','2018-10-12 10:13:31',NULL),(118,'u01','dasda','asdasdas','2018-10-12 10:13:36',NULL),(119,'u01','이사원의 결재','','2019-02-12 09:59:34','Y'),(120,'u01','테스트','그냥 테스트입니다','2019-02-13 02:59:33','Y'),(121,'u05','aa','a','2019-02-13 11:42:15',NULL),(122,'u02','SE 17 전자 결재 시스템 테스트입니다','SE 17 전자 결재 시스템 테스트입니다\r\n\r\n위와 같이 결재 합니다.','2019-02-13 11:55:17','Y');
/*!40000 ALTER TABLE `doc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `managers`
--

DROP TABLE IF EXISTS `managers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `managers` (
  `userid` varchar(45) DEFAULT NULL,
  `manager` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `managers`
--

LOCK TABLES `managers` WRITE;
/*!40000 ALTER TABLE `managers` DISABLE KEYS */;
INSERT INTO `managers` VALUES ('u01','u02'),('u01','u03'),('u01','u04'),('u01','u05'),('u02','u03'),('u02','u04'),('u02','u05'),('u03','u04'),('u03','u05'),('u04','u05');
/*!40000 ALTER TABLE `managers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `progress`
--

DROP TABLE IF EXISTS `progress`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `progress` (
  `docid` varchar(45) NOT NULL,
  `userid` varchar(45) NOT NULL,
  `status` varchar(45) DEFAULT NULL,
  `tt` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`docid`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `progress`
--

LOCK TABLES `progress` WRITE;
/*!40000 ALTER TABLE `progress` DISABLE KEYS */;
INSERT INTO `progress` VALUES ('102','u04','Y','2017-06-15 01:28:24'),('102','u05','Y','2017-06-15 01:28:24'),('103','u03','Y','2017-06-15 01:31:11'),('103','u04','N','2017-06-15 01:31:11'),('104','u05','N','2017-06-15 02:01:27'),('106','u04',NULL,'2017-06-15 02:04:27'),('106','u05',NULL,'2017-06-15 02:04:27'),('108','u03','Y','2017-06-15 03:30:11'),('108','u04','Y','2017-06-15 03:30:11'),('108','u05','Y','2017-06-15 03:30:11'),('109','u04','Y','2017-06-15 11:03:36'),('109','u05','Y','2017-06-15 11:03:36'),('110','u03','Y','2017-06-20 08:43:52'),('111','u05','Y','2018-05-03 10:55:35'),('112','u02','Y','2018-05-03 10:57:00'),('112','u03','Y','2018-05-03 10:57:00'),('113','u02','Y','2018-06-20 03:52:12'),('113','u03',NULL,'2018-06-20 03:52:12'),('113','u04','N','2018-06-20 03:52:12'),('113','u05','Y','2018-06-20 03:52:12'),('114','u03',NULL,'2018-07-11 09:27:02'),('115','u03',NULL,'2018-09-14 10:04:17'),('116','u02',NULL,'2018-10-12 10:13:13'),('117','u02',NULL,'2018-10-12 10:13:31'),('117','u03',NULL,'2018-10-12 10:13:31'),('117','u04',NULL,'2018-10-12 10:13:31'),('117','u05',NULL,'2018-10-12 10:13:31'),('118','u02',NULL,'2018-10-12 10:13:36'),('118','u03',NULL,'2018-10-12 10:13:36'),('118','u04',NULL,'2018-10-12 10:13:36'),('118','u05',NULL,'2018-10-12 10:13:36'),('119','u02','Y','2019-02-12 09:59:34'),('120','u03','Y','2019-02-13 02:59:33'),('120','u04','Y','2019-02-13 02:59:33'),('122','u05','Y','2019-02-13 11:55:17'),('22','u02','Y',NULL),('22','u03','Y',NULL),('23','u03','N',NULL),('23','u04',NULL,NULL),('97','u02','Y','2017-06-15 12:56:10'),('97','u03','Y','2017-06-15 12:56:10'),('97','u04',NULL,'2017-06-15 12:56:10'),('97','u05','N','2017-06-15 12:56:10'),('98','u02',NULL,'2017-06-15 12:58:51');
/*!40000 ALTER TABLE `progress` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` varchar(45) NOT NULL,
  `pw` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `rank` varchar(45) DEFAULT NULL,
  `manager` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('u01','u','이사원','사원','u02'),('u02','u','임대리','대리','u03'),('u03','u','이과장','과장','u04'),('u04','u','김부장','부장','u05'),('u05','u','김사장','사장','0'),('u06','u','김봉봉','사원','u02'),('u07','u','최봉봉','대리','u03'),('u08','u','박봉봉','과장','u04'),('u09','u','김이박','부장','u05'),('u10','u','최이박','사원','u02'),('u11','u','최박김','사원','u02');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-02-13 12:02:31
