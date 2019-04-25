-- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: localhost    Database: outpass
-- ------------------------------------------------------
-- Server version	5.7.25-0ubuntu0.18.04.2

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
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faculty` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Block` varchar(3) NOT NULL,
  `Room` varchar(4) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Contact` varchar(13) NOT NULL,
  `Designation` varchar(255) NOT NULL DEFAULT 'Faculty',
  `Department` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  PRIMARY KEY (`No`),
  UNIQUE KEY `No` (`No`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faculty`
--

LOCK TABLES `faculty` WRITE;
/*!40000 ALTER TABLE `faculty` DISABLE KEYS */;
INSERT INTO `faculty` VALUES (1,'Mahesh Jangid','B4','414','mahesh.jangid@jaipur.manipal.edu','9799969068','Faculty','Computer Science & Engineering','mahesh','maheshjangid');
/*!40000 ALTER TABLE `faculty` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `itsvagabond`
--

DROP TABLE IF EXISTS `itsvagabond`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `itsvagabond` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `DepartureDate` date NOT NULL,
  `DepartureTime` time NOT NULL,
  `ArivalDate` date NOT NULL,
  `ArivalTime` time NOT NULL,
  `Reason` text NOT NULL,
  `Status` varchar(255) NOT NULL DEFAULT 'Waiting',
  `RequestTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `No` (`No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itsvagabond`
--

LOCK TABLES `itsvagabond` WRITE;
/*!40000 ALTER TABLE `itsvagabond` DISABLE KEYS */;
/*!40000 ALTER TABLE `itsvagabond` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maheshjangid`
--

DROP TABLE IF EXISTS `maheshjangid`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maheshjangid` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `Student` varchar(255) NOT NULL,
  `Departure` date NOT NULL,
  `Arival` date NOT NULL,
  `Reason` text NOT NULL,
  `Status` varchar(255) NOT NULL DEFAULT 'Waiting',
  `GuardianName` varchar(255) NOT NULL,
  `GuardianRel` varchar(255) NOT NULL,
  `GuardianEmail` varchar(255) NOT NULL,
  `Request` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `GuardianContact` varchar(13) NOT NULL,
  `ID` int(11) NOT NULL,
  `Applicant` varchar(255) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maheshjangid`
--

LOCK TABLES `maheshjangid` WRITE;
/*!40000 ALTER TABLE `maheshjangid` DISABLE KEYS */;
INSERT INTO `maheshjangid` VALUES (1,'Shivang Sarat','2019-04-25','2019-04-29','test1','Forwarded','Sudin Kumar','Father','sudin.kumar@sbi.co.in','2019-04-11 23:00:32','9431337333',5,'shivangsarat');
/*!40000 ALTER TABLE `maheshjangid` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `omkar`
--

DROP TABLE IF EXISTS `omkar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `omkar` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `DepartureDate` date NOT NULL,
  `DepartureTime` time NOT NULL,
  `ArivalDate` date NOT NULL,
  `ArivalTime` time NOT NULL,
  `Reason` text NOT NULL,
  `Status` varchar(255) NOT NULL DEFAULT 'Waiting',
  `RequestTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `No` (`No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `omkar`
--

LOCK TABLES `omkar` WRITE;
/*!40000 ALTER TABLE `omkar` DISABLE KEYS */;
/*!40000 ALTER TABLE `omkar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `register` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `RegNo` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `Contact` varchar(13) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `GuardianName` varchar(255) NOT NULL,
  `GuardianRelationship` varchar(255) NOT NULL,
  `GuardianContact` varchar(13) NOT NULL,
  `GuardianEmail` varchar(255) NOT NULL,
  `Block` varchar(3) NOT NULL,
  `Room` varchar(5) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Status` varchar(255) DEFAULT 'Student',
  PRIMARY KEY (`No`),
  UNIQUE KEY `No` (`No`),
  UNIQUE KEY `RegNo` (`RegNo`),
  UNIQUE KEY `Username` (`Username`),
  UNIQUE KEY `Email` (`Email`),
  UNIQUE KEY `GuardianEmail` (`GuardianEmail`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `register`
--

LOCK TABLES `register` WRITE;
/*!40000 ALTER TABLE `register` DISABLE KEYS */;
INSERT INTO `register` VALUES (1,'Shivang Sarat','169105179','shivangsarat','Male','9460525915','shivangsarat@gmail.com','Sudin Kumar','Father','9431337333','sudin.kumar@sbi.co.in','B4','445','vibhi2112','Student'),(2,'Shivam Solanki','169105178','ssolanki','male','9988776655','solanki@gmail.com','Solanki Senior','Uncle','8877665544','seniorsolanki@gmail.com','B5','333','solanki','Student'),(10,'Aniket Kumar','169105032','itsvagabond','male','9876543210','itsvagabond@gmail.com','Aniket Senior','Uncle','9758643210','senioraniket@gmail.com','B3','219','aniket','Student'),(11,'Omkar Kulkarni','169105119','omkar','male','9876543211','omkarsk98@gmail.com','Omkar Senior','Brother','9758643211','Omkarsenior@gmail.com','B3','235','omkar','Student'),(12,'Tanuj Sahal','169105205','tsahal','male','9532187652','tanujsahal@gmail.com','Manoj sahal','Uncle','9537595305','manojsahal@gmail.com','B5','410','tanuj','Student'),(14,'Soumik Mallik','169105194','smallik','male','7295396709','smallik@gmail.com','Senior malik','Brother','9025796253','seniormallik@gmail.com','B1','123','soumik','Student'),(15,'','','','','','','','','','','','','','Student');
/*!40000 ALTER TABLE `register` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shivangsarat`
--

DROP TABLE IF EXISTS `shivangsarat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shivangsarat` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `DepartureDate` date NOT NULL,
  `DepartureTime` time NOT NULL,
  `ArivalDate` date NOT NULL,
  `ArivalTime` time NOT NULL,
  `Reason` text NOT NULL,
  `Status` varchar(255) NOT NULL DEFAULT 'Waiting',
  `RequestTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `No` (`No`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shivangsarat`
--

LOCK TABLES `shivangsarat` WRITE;
/*!40000 ALTER TABLE `shivangsarat` DISABLE KEYS */;
INSERT INTO `shivangsarat` VALUES (1,'2019-04-13','12:00:00','2019-04-14','13:00:00','City','Waiting','2019-04-11 20:18:15'),(2,'2019-04-13','12:00:00','2019-04-14','13:00:00','City','Waiting','2019-04-11 20:18:15'),(3,'2019-05-18','12:30:00','2019-08-01','17:30:00','Summer Holidays ','Waiting','2019-04-11 21:13:54'),(4,'2019-04-24','21:03:00','2019-04-30','23:45:00','test0','Waiting','2019-04-11 22:57:22'),(5,'2019-04-25','21:03:00','2019-04-29','23:45:00','test1','Accepted','2019-04-11 23:00:32');
/*!40000 ALTER TABLE `shivangsarat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `smallik`
--

DROP TABLE IF EXISTS `smallik`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `smallik` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `DepartureDate` date NOT NULL,
  `DepartureTime` time NOT NULL,
  `ArivalDate` date NOT NULL,
  `ArivalTime` time NOT NULL,
  `Reason` text NOT NULL,
  `Status` varchar(255) DEFAULT 'Waiting',
  `RequestTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `No` (`No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `smallik`
--

LOCK TABLES `smallik` WRITE;
/*!40000 ALTER TABLE `smallik` DISABLE KEYS */;
/*!40000 ALTER TABLE `smallik` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ssolanki`
--

DROP TABLE IF EXISTS `ssolanki`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ssolanki` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `DepartureDate` date NOT NULL,
  `DepartureTime` time NOT NULL,
  `ArivalDate` date NOT NULL,
  `ArivalTime` time NOT NULL,
  `Reason` text NOT NULL,
  `Status` varchar(255) NOT NULL DEFAULT 'Waiting',
  `RequestTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `No` (`No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ssolanki`
--

LOCK TABLES `ssolanki` WRITE;
/*!40000 ALTER TABLE `ssolanki` DISABLE KEYS */;
/*!40000 ALTER TABLE `ssolanki` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tsahal`
--

DROP TABLE IF EXISTS `tsahal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tsahal` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `DepartureDate` date NOT NULL,
  `DepartureTime` time NOT NULL,
  `ArivalDate` date NOT NULL,
  `ArivalTime` time NOT NULL,
  `Reason` text NOT NULL,
  `Status` varchar(255) NOT NULL DEFAULT 'Waiting',
  `RequestTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `No` (`No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tsahal`
--

LOCK TABLES `tsahal` WRITE;
/*!40000 ALTER TABLE `tsahal` DISABLE KEYS */;
/*!40000 ALTER TABLE `tsahal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL DEFAULT 'Student',
  `Block` varchar(3) NOT NULL,
  PRIMARY KEY (`No`),
  UNIQUE KEY `No` (`No`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'shivangsarat','vibhi2112','Student','B4'),(2,'ssolanki','solanki','Student','B5'),(3,'itsvagabond','aniket','Student','B3'),(4,'omkar','omkar','Student','B3'),(5,'tsahal','tanuj','Student','B5'),(6,'maheshjangid','mahesh','Faculty','B4'),(8,'smallik','soumik','Student','B1'),(9,'cheifwarden','warden','Warden','ALL'),(10,'','','Student','');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `warden`
--

DROP TABLE IF EXISTS `warden`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `warden` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `Student` varchar(255) NOT NULL,
  `Departure` date NOT NULL,
  `Arival` date NOT NULL,
  `Reason` text NOT NULL,
  `Status` varchar(255) NOT NULL DEFAULT 'Waiting',
  `GuardianName` varchar(255) NOT NULL,
  `GuardianRel` varchar(255) NOT NULL,
  `GuardianEmail` varchar(255) NOT NULL,
  `GuardianContact` varchar(13) NOT NULL,
  `Request` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ID` int(11) NOT NULL,
  `Applicant` varchar(255) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `warden`
--

LOCK TABLES `warden` WRITE;
/*!40000 ALTER TABLE `warden` DISABLE KEYS */;
INSERT INTO `warden` VALUES (1,'Shivang Sarat','2019-04-25','2019-04-29','test1','Forwarded','Sudin Kumar','Father','sudin.kumar@sbi.co.in','9431337333','2019-04-19 03:43:45',5,'shivangsarat');
/*!40000 ALTER TABLE `warden` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wardeninfo`
--

DROP TABLE IF EXISTS `wardeninfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wardeninfo` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Contact` varchar(13) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`No`),
  UNIQUE KEY `No` (`No`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wardeninfo`
--

LOCK TABLES `wardeninfo` WRITE;
/*!40000 ALTER TABLE `wardeninfo` DISABLE KEYS */;
INSERT INTO `wardeninfo` VALUES (1,'Col. Rajender Singh','chief.warden@jaipur.manipal.edu','01413999108','Warden','Mechanical','cheifwarden','warden');
/*!40000 ALTER TABLE `wardeninfo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-04-24 13:05:13
