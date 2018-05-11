<<<<<<< HEAD
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: coursenotes
-- ------------------------------------------------------
-- Server version	5.7.20-log

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
INSERT INTO `account` VALUES ('admin','adminpass','Kimberly','Lopez','accepted','admin'),('coco','coco','Poco','Loco','accepted','member'),('kimo','123','kimo','lopez','accepted','member'),('loco','loco','loco','loco','accepted','member'),('mary','mary','jak','kaka','accepted','member'),('poco','poco','asdf','asdf','accepted','member');
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
INSERT INTO `question` VALUES (1,1,'In rules of naming variables, the variable should be all in capital letters. ','True','','','False'),(2,1,'Php is a general purpose scripting language use for web development and can be embedded into HTML ','False','','','True'),(3,1,'Php command ends with ','True','','','False'),(4,1,'A (period) is use to concatenate a String ','False','','','True'),(5,1,'There are two types of string declaration, single quotation mark (‘ ’) and double quotation mark (“ ”)','False','','','True'),(6,1,'Arithmetic Operations are used to perform mathematical calculations ','False','','','True'),(7,1,'Assignment Operators are used to assign values to a variable ','False','','','True'),(8,1,'Logical Operators are used to compare two items like if statements ','True','','','False'),(9,1,'To declare  a variable, $number = 10; ','False',NULL,NULL,'True'),(10,1,'Functions are used to separate out sections in the code to perform particular tasks.','False',NULL,NULL,'True'),(11,1,'$_GET are variables passed to the current script via the HTTP Post method ','True','','','False'),(12,1,'Cookie is an item of data that a web server saves to your computer’s hard disk via web browser','False','','','True'),(13,1,'The PHP session start by starting or calling the function of session_begin()','True','','','False'),(14,1,'To destroy a session in PHP use the funciton session_destroy() ','False',NULL,NULL,'True'),(15,1,'Php stands for Hypertext Preprocessor ','False',NULL,NULL,'True'),(16,2,'This is an object hosted in a servlet container.','HTTP Servlet','SMTP Servlet','FTP Servlet','Java Servlet'),(17,2,'This  is an object hosted in a web container.','SMTP Servlet','FTP Servlet','Java Servlet','HTTP Servlet'),(18,2,'Servlet container is a/an ___________','class','package','generics','environment'),(19,2,'This method is use before unloading the servlet and invoke only once','instantiation','initialization','request handling','destruction'),(20,2,'This servlet lifecycle use service() method.','destruction','initiation','initialization','request handling'),(21,2,'This servlet is hosted in servlet container.','SMTP Servlet','HTTP Servlet','FTP Servlet','Java Servlet'),(22,2,'The web container is used in hosting this servlet.','Java Servlet','FTP Servlet','SMTP Servlet','HTTP Servlet'),(23,2,'This method call is routed is routed to a doXXX() call.','do()','doRemove()','doGet()','service()'),(24,2,'This are object representation of the HTTP request that are sent by the client','HTTP Request Method','HTTPServletResponse','HTTP Query String','HTTPServerRequest'),(25,2,'This method is use for the deployment of web.xml or the descriptor of for the web application.','destruction','destruction','initialization','instantiation'),(26,2,'This servlet lifecycle use int() method','destruction','destruction','instantiation','initialization'),(27,3,'Node.js was developed by ','James Gosling','Tim Berner\'s Lee','Albert Einstein','Ryan Dahl'),(28,3,'The file extension of node is .node','False',NULL,NULL,'True'),(29,3,'The following are some of the features of Node.js','Very Fast','Asynchronous and Event Driven','No Buffering','All of the above'),(30,3,'One example of text editor that can be use to write your program in node.js is Sublime Text','False',NULL,NULL,'True'),(31,3,'To run node.js file type in node <name of the file>','False','',NULL,'True'),(32,3,'It is a server-side platform built on Google Chrome’s JavaScript Engine (V8 Engine)','JavaScript','Express','JSP','Node.js'),(33,4,'Apache Tomcat is commonly referred as Tomcat Server','False',NULL,NULL,'True'),(34,4,'The recommended file extension for JSP is ','.js','.xml','.html','.jsp'),(35,4,'It is a technology that helps software and developers to create dynamically generated web pages on any browser language.','Node','Php','JavaScript','JSP'),(36,4,'JSP is an alternative to ___','JavaScript','Hypertext Preprocessor(PHP)','Hypertext Transfer Protocol (HTTP)','Active Server Page (ASP)'),(37,4,'<%-- ..  --%> The syntax is use for JSP Comments','False',NULL,NULL,'True');
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
INSERT INTO `result` VALUES ('coco',2,2,4),('coco',3,5,5),('loco',1,0,5),('loco',2,2,3),('mary',3,5,5),('poco',1,1,5),('poco',2,4,4);
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
INSERT INTO `test` VALUES (1,'PHP',15),(2,'Servlet',11),(3,'Node',6),(4,'JSP',5);
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

-- Dump completed on 2018-05-12  5:57:49
=======
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: coursenotes
-- ------------------------------------------------------
-- Server version	5.7.20-log

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
INSERT INTO `account` VALUES ('admin','adminpass','Kimberly','Lopez','accepted','admin'),('coco','coco','Poco','Loco','accepted','member'),('kimo','123','kimo','lopez','accepted','member'),('loco','loco','loco','loco','accepted','member'),('mary','mary','jak','kaka','accepted','member'),('poco','poco','asdf','asdf','accepted','member');
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
INSERT INTO `question` VALUES (1,1,'In rules of naming variables, the variable should be all in capital letters. ','True','','','False'),(2,1,'Php is a general purpose scripting language use for web development and can be embedded into HTML ','False','','','True'),(3,1,'Php command ends with ','True','','','False'),(4,1,'A (period) is use to concatenate a String ','False','','','True'),(5,1,'There are two types of string declaration, single quotation mark (‘ ’) and double quotation mark (“ ”)','False','','','True'),(6,1,'Arithmetic Operations are used to perform mathematical calculations ','False','','','True'),(7,1,'Assignment Operators are used to assign values to a variable ','False','','','True'),(8,1,'Logical Operators are used to compare two items like if statements ','True','','','False'),(9,1,'To declare  a variable, $number = 10; ','False',NULL,NULL,'True'),(10,1,'Functions are used to separate out sections in the code to perform particular tasks.','False',NULL,NULL,'True'),(11,1,'$_GET are variables passed to the current script via the HTTP Post method ','True','','','False'),(12,1,'Cookie is an item of data that a web server saves to your computer’s hard disk via web browser','False','','','True'),(13,1,'The PHP session start by starting or calling the function of session_begin()','True','','','False'),(14,1,'To destroy a session in PHP use the funciton session_destroy() ','False',NULL,NULL,'True'),(15,1,'Php stands for Hypertext Preprocessor ','False',NULL,NULL,'True'),(16,2,'This is an object hosted in a servlet container.','HTTP Servlet','SMTP Servlet','FTP Servlet','Java Servlet'),(17,2,'This  is an object hosted in a web container.','SMTP Servlet','FTP Servlet','Java Servlet','HTTP Servlet'),(18,2,'Servlet container is a/an ___________','class','package','generics','environment'),(19,2,'This method is use before unloading the servlet and invoke only once','instantiation','initialization','request handling','destruction'),(20,2,'This servlet lifecycle use service() method.','destruction','initiation','initialization','request handling'),(21,2,'This servlet is hosted in servlet container.','SMTP Servlet','HTTP Servlet','FTP Servlet','Java Servlet'),(22,2,'The web container is used in hosting this servlet.','Java Servlet','FTP Servlet','SMTP Servlet','HTTP Servlet'),(23,2,'This method call is routed is routed to a doXXX() call.','do()','doRemove()','doGet()','service()'),(24,2,'This are object representation of the HTTP request that are sent by the client','HTTP Request Method','HTTPServletResponse','HTTP Query String','HTTPServerRequest'),(25,2,'This method is use for the deployment of web.xml or the descriptor of for the web application.','destruction','destruction','initialization','instantiation'),(26,2,'This servlet lifecycle use int() method','destruction','destruction','instantiation','initialization'),(27,3,'Node.js was developed by ','James Gosling','Tim Berner\'s Lee','Albert Einstein','Ryan Dahl'),(28,3,'The file extension of node is .node','False',NULL,NULL,'True'),(29,3,'The following are some of the features of Node.js','Very Fast','Asynchronous and Event Driven','No Buffering','All of the above'),(30,3,'One example of text editor that can be use to write your program in node.js is Sublime Text','False',NULL,NULL,'True'),(31,3,'To run node.js file type in node <name of the file>','False','',NULL,'True'),(32,3,'It is a server-side platform built on Google Chrome’s JavaScript Engine (V8 Engine)','JavaScript','Express','JSP','Node.js'),(33,4,'Apache Tomcat is commonly referred as Tomcat Server','False',NULL,NULL,'True'),(34,4,'The recommended file extension for JSP is ','.js','.xml','.html','.jsp'),(35,4,'It is a technology that helps software and developers to create dynamically generated web pages on any browser language.','Node','Php','JavaScript','JSP'),(36,4,'JSP is an alternative to ___','JavaScript','Hypertext Preprocessor(PHP)','Hypertext Transfer Protocol (HTTP)','Active Server Page (ASP)'),(37,4,'<%-- ..  --%> The syntax is use for JSP Comments','False',NULL,NULL,'True');
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
INSERT INTO `result` VALUES ('coco',2,2,4),('coco',3,5,5),('loco',1,0,5),('loco',2,2,3),('mary',3,5,5),('poco',1,1,5),('poco',2,4,4);
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
INSERT INTO `test` VALUES (1,'PHP',15),(2,'Servlet',11),(3,'Node',6),(4,'JSP',5);
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

-- Dump completed on 2018-05-12  5:57:49
>>>>>>> ddf19f4b59fc0f7c3114c94c945d7ac58c52cce4
