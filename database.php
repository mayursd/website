-- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: localhost    Database: wtl
-- ------------------------------------------------------
-- Server version	5.7.25-0ubuntu0.16.04.2

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
-- Table structure for table `conference`
--

DROP TABLE IF EXISTS `conference`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conference` (
  `name` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `mob` bigint(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `reservation` varchar(20) DEFAULT NULL,
  `contype` varchar(30) DEFAULT NULL,
  `nog` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conference`
--

LOCK TABLES `conference` WRITE;
/*!40000 ALTER TABLE `conference` DISABLE KEYS */;
INSERT INTO `conference` VALUES ('Nupur Puranik','Pune',87541216,'nupurpuranik2406@gmail.com','2019-10-17',NULL,NULL),('Nupur Puranik','Pune',7845121,'nupurpuranik2406@gmail.com','2019-06-09',NULL,NULL),('Nupur Puranik','Pune',78452100,'nupurpuranik2406@gmail.com','2020-02-12',NULL,NULL),('Nupur Puranik','Pune',8446519862,'nupurpuranik2406@gmail.com','2019-07-07',NULL,NULL);
/*!40000 ALTER TABLE `conference` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dining`
--

DROP TABLE IF EXISTS `dining`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dining` (
  `name` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `mob` bigint(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `reservation` varchar(20) DEFAULT NULL,
  `nog` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dining`
--

LOCK TABLES `dining` WRITE;
/*!40000 ALTER TABLE `dining` DISABLE KEYS */;
INSERT INTO `dining` VALUES (NULL,NULL,NULL,NULL,'1970-01-01',NULL),(NULL,NULL,NULL,NULL,'1970-01-01',NULL),(NULL,'Pune',NULL,'nupurpuranik2406@gmail.com','1970-01-01',NULL),(NULL,'Pune',4512145127,'nupurpuranik2406@gmail.com','1970-01-01',NULL),(NULL,'Pune',4512145127,'nupurpuranik2406@gmail.com','1970-01-01',NULL),(NULL,'Pune',4512145127,'nupurpuranik2406@gmail.com','1970-01-01',NULL),('Nupur Puranik','Pune',NULL,'nupurpuranik2406@gmail.com','2019-04-12',NULL),('Nupur Puranik','Pune',7387905648,'nupurpuranik2406@gmail.com','2020-01-18',NULL);
/*!40000 ALTER TABLE `dining` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wedding`
--

DROP TABLE IF EXISTS `wedding`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wedding` (
  `name` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `mob` bigint(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `reservation` varchar(20) DEFAULT NULL,
  `wedpack` varchar(10) DEFAULT NULL,
  `nog` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wedding`
--

LOCK TABLES `wedding` WRITE;
/*!40000 ALTER TABLE `wedding` DISABLE KEYS */;
INSERT INTO `wedding` VALUES ('Nupur Puranik','Pune',97463113,'nupurpuranik2406@gmail.com','2019-04-12',NULL,NULL),('Nupur Puranik','Pune',8754512,'nupurpuranik2406@gmail.com','2019-07-11',NULL,NULL),('Nupur Puranik','Pune',7845421245,'nupurpuranik2406@gmail.com','2019-05-07',NULL,NULL),('Nupur Puranik','Pune',45446854,'nupurpuranik2406@gmail.com','2019-12-12',NULL,NULL),('Nupur Puranik','Pune',785487545,'nupurpuranik2406@gmail.com','2019-04-11',NULL,NULL),('Mitesh','Pune',785451,'nupurpuranik2406@gmail.com','2020-12-12',NULL,NULL);
/*!40000 ALTER TABLE `wedding` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-04-09 23:52:23
