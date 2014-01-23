CREATE DATABASE  IF NOT EXISTS `safaribooks` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `safaribooks`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: safaribooks
-- ------------------------------------------------------
-- Server version	5.6.11

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
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `address` (
  `zipCode` int(4) NOT NULL,
  `cityName` varchar(45) NOT NULL,
  `provName` varchar(45) NOT NULL,
  `areaCode` int(2) NOT NULL,
  PRIMARY KEY (`zipCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `address`
--

LOCK TABLES `address` WRITE;
/*!40000 ALTER TABLE `address` DISABLE KEYS */;
/*!40000 ALTER TABLE `address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book` (
  `bkID` int(7) NOT NULL,
  `bkTitle` varchar(150) NOT NULL,
  `bkAuthor` varchar(70) NOT NULL,
  `bkPubDate` date NOT NULL,
  `bkQnty` int(100) NOT NULL,
  `bkRating` decimal(2,1) NOT NULL,
  `bkPrice` decimal(6,2) NOT NULL,
  `bkDiscPrice` decimal(6,2) DEFAULT NULL,
  `bkStat` tinyint(1) NOT NULL,
  `bkAddedDate` date NOT NULL,
  `bkSnippet` longtext NOT NULL,
  `bkCover` varchar(250) NOT NULL,
  PRIMARY KEY (`bkID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book`
--

LOCK TABLES `book` WRITE;
/*!40000 ALTER TABLE `book` DISABLE KEYS */;
INSERT INTO `book` VALUES (1209001,'Learning PHP, MySQL, JavaScript, & CSS','Robin Nixon','2012-09-03',330,0.0,27.00,NULL,0,'2014-01-10','If you\'re familiar with HTML, using the information in Learning PHP, MySQL, JavaScript and CSS, you will quickly learn how to build interactive, data-driven websites with the powerful combination of PHP, MySQL, JavaScript and CSS - the top technologies for creating modern sites. This hands-on guide explains each technology separately, shows you how to combine them, and introduces valuable web programming concepts such as objects, XHTML, cookies, and session management.\r\n\r\nCarefully paced for non-programmers, this second edition of the top-selling guide to web development now also provides an extensive introduction to CSS, and benefits from reader questions and suggestions about the first edition, making the new edition even easier to follow and more information-packed than ever.\r\n\r\nPlus, to ensure your have understood all the main points, you\'ll practice what you\'ve learned with review questions at the end of each chapter, and there\'s even a sample social networking platform built with the elements introduced in this book.','covers/1209001.jpg'),(1210001,'Programming Android Java Programming for the New Generation of Mobile Devices','Zigurd Mednieks','2012-10-19',650,0.0,29.39,22.89,0,'2013-12-20','Get thoroughly up to speed on Android programming, and learn how to create up-to-date user experiences for both handsets and tablets. With this book\'s extensively revised second edition, you\'ll focus on Android tools and programming essentials, including best practices for using Android 4 APIs. If you\'re experienced with Java or Objective-C, you\'ll gain the knowledge necessary for building well-engineered applications.\r\nProgramming Android is organized into four parts:\r\n- Part One helps programmers with some Java or iOS experience get off to a fast start with the Android SDK and Android programming basics.\r\n- Part Two delves into the Android framework, focusing on user interface and graphics class hierarchies, concurrency, and databases. It\'s a solid foundation for understanding of how the most important parts of an Android application work.\r\n- Part Three features code skeletons and patterns for accelerating the development of apps that use web data and Android 4 user interface conventions and Apis.\r\n- Part Four delivers practical coverage of Android\'s multimedia, search, location, sensor, and account Apis, plus the Native Development Kit, enabling developers to add advanced capabilities.\r\n\r\nThis updated edition of Programming Android focuses on the knowledge and developer priorities that are essential for successful Android development projects.','covers/1210001.jpg'),(1311001,'Turned','Morgan Rice','2013-11-14',100,0.0,6.99,1.13,0,'2013-11-23','In TURNED (Book #1 of the Vampire Journals series), eighteen year old Caitlin Paine finds herself uprooted from her nice suburb and forced to attend a dangerous New York City high school when her Mom moves again. The one ray of light in her new surroundings is Jonah, a new classmate who takes an instant liking to her. But before their romance can blossom, Caitlin suddenly finds herself changing. She is overcome by a superhuman strength, a sensitivity to light, a desire to feed--by feelings she does not understand. She seeks answers to what\'s happening to her, and her cravings lead her to the wrong place at the wrong time. Her eyes are opened to a hidden world, right beneath her feet, thriving underground in New York City. She finds herself caught between two dangerous covens, right in the middle of a vampire war. It is at this moment that Caitlin meets Caleb, a mysterious and powerful vampire who rescues her from the dark forces. He needs her to help lead him to the legendary lost artifact. And she needs him for answers, and for protection. Together, they will need to answer one crucial question: who was her real father? But Caitlin finds herself caught between two men as something else arises between them: a forbidden love. A love between the races that will risk both of their lives, and will force them to decide whether to risk it all for each other...','covers/1311001.jpg'),(9909001,'Harry Potter and the Sorcerer\'s Stone','J.K. Rowling','1999-09-08',5,0.0,6.59,NULL,0,'2013-08-24','Harry Potter has no idea how famous he is. That\'s because he\'s being raised by his miserable aunt and uncle who are terrified Harry will learn that he\'s really a wizard, just as his parents were. But everything changes when Harry is summoned to attend an infamous school for wizards, and he begins to discover some clues about his illustrious birthright. From the surprising way he is greeted by a lovable giant, to the unique curriculum and colorful faculty at his unusual school, Harry finds himself drawn deep inside a mystical world he never knew existed and closer to his own noble destiny.','covers/9909001.jpg');
/*!40000 ALTER TABLE `book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cart` (
  `crtID` int(11) NOT NULL AUTO_INCREMENT,
  `usrID` char(8) NOT NULL,
  `bkID` int(5) NOT NULL,
  `crtQnty` int(11) NOT NULL,
  `crtShip` decimal(7,2) NOT NULL,
  PRIMARY KEY (`crtID`),
  KEY `fk_cart_book1_idx` (`bkID`),
  KEY `fk_cart_user1_idx` (`usrID`),
  CONSTRAINT `fk_cart_book1` FOREIGN KEY (`bkID`) REFERENCES `book` (`bkID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cart_user1` FOREIGN KEY (`usrID`) REFERENCES `user` (`usrID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `checkout`
--

DROP TABLE IF EXISTS `checkout`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `checkout` (
  `chkID` int(11) NOT NULL AUTO_INCREMENT,
  `usrID` char(8) NOT NULL,
  `usedCC` int(16) NOT NULL,
  `cpnID` char(20) DEFAULT NULL,
  `chkDate` timestamp NULL DEFAULT NULL,
  `chkTprice` decimal(7,2) NOT NULL,
  PRIMARY KEY (`chkID`),
  KEY `fk_checkout_coupon1_idx` (`cpnID`),
  KEY `fk_checkout_user1_idx` (`usrID`),
  CONSTRAINT `fk_checkout_coupon1` FOREIGN KEY (`cpnID`) REFERENCES `coupon` (`cpnID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_checkout_user1` FOREIGN KEY (`usrID`) REFERENCES `user` (`usrID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `checkout`
--

LOCK TABLES `checkout` WRITE;
/*!40000 ALTER TABLE `checkout` DISABLE KEYS */;
/*!40000 ALTER TABLE `checkout` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coupon`
--

DROP TABLE IF EXISTS `coupon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coupon` (
  `cpnID` char(20) NOT NULL,
  `cpnType` tinyint(1) NOT NULL,
  `cpnParam` decimal(7,2) DEFAULT NULL,
  `cpnDetail` varchar(100) NOT NULL,
  `cpnStat` tinyint(1) NOT NULL,
  PRIMARY KEY (`cpnID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coupon`
--

LOCK TABLES `coupon` WRITE;
/*!40000 ALTER TABLE `coupon` DISABLE KEYS */;
/*!40000 ALTER TABLE `coupon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `credit`
--

DROP TABLE IF EXISTS `credit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `credit` (
  `ccNum` int(16) NOT NULL,
  `usrID` char(8) NOT NULL,
  `ccType` char(10) NOT NULL,
  PRIMARY KEY (`ccNum`),
  KEY `fk_credit_user1_idx` (`usrID`),
  CONSTRAINT `fk_credit_user1` FOREIGN KEY (`usrID`) REFERENCES `user` (`usrID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `credit`
--

LOCK TABLES `credit` WRITE;
/*!40000 ALTER TABLE `credit` DISABLE KEYS */;
/*!40000 ALTER TABLE `credit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `noshipping`
--

DROP TABLE IF EXISTS `noshipping`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `noshipping` (
  `provName` varchar(45) NOT NULL,
  `areaCode` int(2) NOT NULL,
  PRIMARY KEY (`provName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noshipping`
--

LOCK TABLES `noshipping` WRITE;
/*!40000 ALTER TABLE `noshipping` DISABLE KEYS */;
/*!40000 ALTER TABLE `noshipping` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `procure`
--

DROP TABLE IF EXISTS `procure`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `procure` (
  `prcID` int(5) NOT NULL,
  `bkID` int(5) NOT NULL,
  `prcQnty` int(11) NOT NULL,
  `prcLprice` decimal(6,2) NOT NULL,
  `usrID` char(8) NOT NULL,
  `prcStat` tinyint(1) NOT NULL,
  PRIMARY KEY (`prcID`),
  KEY `fk_procure_book1_idx` (`bkID`),
  KEY `fk_procure_user1_idx` (`usrID`),
  CONSTRAINT `fk_procure_book1` FOREIGN KEY (`bkID`) REFERENCES `book` (`bkID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_procure_user1` FOREIGN KEY (`usrID`) REFERENCES `user` (`usrID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `procure`
--

LOCK TABLES `procure` WRITE;
/*!40000 ALTER TABLE `procure` DISABLE KEYS */;
/*!40000 ALTER TABLE `procure` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `review` (
  `revID` int(11) NOT NULL AUTO_INCREMENT,
  `usrID` char(8) NOT NULL,
  `empID` char(8) DEFAULT NULL,
  `bkID` int(5) NOT NULL,
  `revDesc` varchar(100) NOT NULL,
  `revRating` int(1) NOT NULL,
  `revStat` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`revID`),
  KEY `fk_review_book1_idx` (`bkID`),
  KEY `fk_review_user1_idx` (`usrID`),
  CONSTRAINT `fk_review_book1` FOREIGN KEY (`bkID`) REFERENCES `book` (`bkID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_review_user1` FOREIGN KEY (`usrID`) REFERENCES `user` (`usrID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review`
--

LOCK TABLES `review` WRITE;
/*!40000 ALTER TABLE `review` DISABLE KEYS */;
/*!40000 ALTER TABLE `review` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `usrID` char(8) NOT NULL,
  `usrEmail` varchar(45) NOT NULL,
  `usrPass` char(40) NOT NULL,
  `usrPassOld` char(40) DEFAULT NULL,
  `usrFname` varchar(45) NOT NULL,
  `usrLname` varchar(45) NOT NULL,
  `usrAddress1` varchar(45) NOT NULL,
  `usrAddress2` varchar(45) DEFAULT NULL,
  `usrCity` varchar(45) NOT NULL,
  `usrProvince` varchar(45) NOT NULL,
  `usrZIP` int(4) NOT NULL,
  `usrPhone` int(11) NOT NULL,
  `usrSSN` int(10) DEFAULT NULL,
  `usrRole` int(1) NOT NULL,
  `usrStat` tinyint(1) NOT NULL,
  PRIMARY KEY (`usrID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('manaalfr','manager@safaribooks.com','89190c6e37d842f9a5b1a2d02ca62e545eec006d',NULL,'Alfrenido','Manager','Somewhere','Bask','Cebu City','Cebu',6000,2147483647,1234567890,3,0);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wishlist` (
  `wshID` int(11) NOT NULL AUTO_INCREMENT,
  `usrID` char(8) NOT NULL,
  `bkID` int(5) NOT NULL,
  PRIMARY KEY (`wshID`),
  KEY `fk_wishlist_book1_idx` (`bkID`),
  KEY `fk_wishlist_user1_idx` (`usrID`),
  CONSTRAINT `fk_wishlist_book1` FOREIGN KEY (`bkID`) REFERENCES `book` (`bkID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_wishlist_user1` FOREIGN KEY (`usrID`) REFERENCES `user` (`usrID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wishlist`
--

LOCK TABLES `wishlist` WRITE;
/*!40000 ALTER TABLE `wishlist` DISABLE KEYS */;
/*!40000 ALTER TABLE `wishlist` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-01-22 21:27:06
