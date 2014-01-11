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
  `usrFname` varchar(45) NOT NULL,
  `usrLname` varchar(45) NOT NULL,
  `usrAddress1` varchar(45) NOT NULL,
  `usrAddress2` varchar(45) DEFAULT NULL,
  `usrCity` varchar(45) NOT NULL,
  `usrProvince` varchar(45) NOT NULL,
  `usrZIP` int(4) NOT NULL,
  `usrPhone` int(11) NOT NULL,
  `usrSSN` int(10) NOT NULL,
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

-- Dump completed on 2014-01-10 21:42:18
