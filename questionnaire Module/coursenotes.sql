CREATE DATABASE  IF NOT EXISTS `coursenotes` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `coursenotes`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: coursenotes
-- ------------------------------------------------------
-- Server version	5.7.19-log

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
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `account` (
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `fName` varchar(45) NOT NULL,
  `lName` varchar(45) NOT NULL,
  `status` enum('pending','accepted') DEFAULT 'pending',
  `type` enum('member','admin') NOT NULL DEFAULT 'member',
  PRIMARY KEY (`username`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `account`
--

LOCK TABLES `account` WRITE;
/*!40000 ALTER TABLE `account` DISABLE KEYS */;
INSERT INTO `account` VALUES ('admin','adminpass','Kimberly','Lopez','accepted','admin'),('coco','coco','Poco','Loco','accepted','member'),('kimo','123','kimo','lopez','accepted','member'),('loco','loco','loco','loco','accepted','member'),('poco','poco','asdf','asdf','accepted','member');
/*!40000 ALTER TABLE `account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question` (
  `id` int(40) NOT NULL,
  `testID` int(40) NOT NULL,
  `question` varchar(200) NOT NULL,
  `choiceA` varchar(200) NOT NULL,
  `choiceB` varchar(200) DEFAULT NULL,
  `choiceC` varchar(200) DEFAULT NULL,
  `answer` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `errter_idx` (`testID`),
  CONSTRAINT `dfdsf` FOREIGN KEY (`testID`) REFERENCES `test` (`testID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question`
--

LOCK TABLES `question` WRITE;
/*!40000 ALTER TABLE `question` DISABLE KEYS */;
INSERT INTO `question` VALUES (1,1,'What is my name','Hello','World','Name','Kim'),(2,1,'Who killed Voldemort','Hermione','Ron','Draco','Harry'),(3,1,'The boy who lived','Draco','Ron','Neville','Harry'),(4,1,'Voldermort\'s snake','me','you','him','Nagini'),(5,1,'My house','Griffindor','Slytherin','Hufflepuff','ravenclaw'),(6,2,'My lastname','potter','jackson','nothing','lopez'),(7,2,'Harry\'s mother','petunia','me','minerva','lily'),(8,2,'Harry\'s father','sirius','lupin','pettigrew','james'),(9,2,'I am a girl','False',NULL,NULL,'True');
/*!40000 ALTER TABLE `question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `result`
--

DROP TABLE IF EXISTS `result`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `result` (
  `username` varchar(45) NOT NULL,
  `testID` int(40) NOT NULL,
  `score` int(40) NOT NULL DEFAULT '0',
  `total` int(40) NOT NULL DEFAULT '0',
  PRIMARY KEY (`username`,`testID`),
  KEY `sadfsd_idx` (`testID`),
  CONSTRAINT `sadfsd` FOREIGN KEY (`testID`) REFERENCES `test` (`testID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `sdaf` FOREIGN KEY (`username`) REFERENCES `account` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `result`
--

LOCK TABLES `result` WRITE;
/*!40000 ALTER TABLE `result` DISABLE KEYS */;
INSERT INTO `result` VALUES ('loco',1,0,5),('loco',2,2,3),('poco',1,1,5),('poco',2,4,4);
/*!40000 ALTER TABLE `result` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test` (
  `testID` int(40) NOT NULL,
  `testName` varchar(200) NOT NULL,
  `totalQuestions` int(40) NOT NULL DEFAULT '0',
  PRIMARY KEY (`testID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test`
--

LOCK TABLES `test` WRITE;
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
INSERT INTO `test` VALUES (1,'PHP',5),(2,'Servlet',3);
/*!40000 ALTER TABLE `test` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-11 21:31:00
