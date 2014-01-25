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
INSERT INTO `address` VALUES (1000,'Manila Central Post Office','Manila',2),(1001,'Quiapo','Manila',2),(1002,'Intramuros','Manila',2),(1003,'Santa Cruz South','Manila',2),(1004,'Malate','Manila',2),(1005,'San Miguel','Manila',2),(1006,'Binondo','Manila',2),(1007,'Paco','Manila',2),(1008,'Sampaloc East','Manila',2),(1009,'Santa Ana','Manila',2),(1010,'San Nicolas','Manila',2),(1011,'Pandacan','Manila',2),(1012,'Tondo South','Manila',2),(1013,'Tondo North','Manila',2),(1014,'Santa Cruz North','Manila',2),(1015,'Sampaloc West','Manila',2),(1016,'Santa Mesa','Manila',2),(1017,'San Andres','Manila',2),(1018,'Port Area South','Manila',2),(1100,'Project 6','Quezon City',2),(1101,'Botocan','Quezon City',2),(1102,'Amihan','Quezon City',2),(1103,'Kamuning','Quezon City',2),(1104,'Diliman','Quezon City',2),(1105,'Katipunan','Quezon City',2),(1106,'Balintawak','Quezon City',2),(1107,'New Era','Quezon City',2),(1108,'Loyola Heights','Quezon City',2),(1109,'Cubao','Quezon City',2),(1110,'Libis','Quezon City',2),(1111,'Crame','Quezon City',2),(1112,'Valencia','Quezon City',2),(1113,'San Isidro','Quezon City',2),(1114,'La Loma','Quezon City',2),(1115,'San Jose','Quezon City',2),(1116,'Tandang Sora','Quezon City',2),(1117,'San Agustin','Quezon City',2),(1118,'Fairview','Quezon City',2),(1119,'Payatas','Quezon City',2),(1120,'BF Homes','Quezon City',2),(1121,'North Fairview','Quezon City',2),(1122,'South Fairview','Quezon City',2),(1123,'Novaliches Proper','Quezon City',2),(1124,'Kaligayahan','Quezon City',2),(1125,'Doña Faustina Subdivision','Quezon City',2),(1126,'Capitol Hills','Quezon City',2),(1127,'Holy Spirit','Quezon City',2),(1128,'Culiat','Quezon City',2),(1200,'Makati Central Post Office','Makati City',2),(1201,'Fort Bonifacio','Makati City',2),(1202,'Fort Bonifacio Naval Station','Makati City',2),(1203,'San Antonio Village','Makati City',2),(1204,'La Paz','Makati City',2),(1205,'Santa Cruz','Makati City',2),(1206,'Kasilawan','Makati City',2),(1207,'Carmona','Makati City',2),(1208,'Valenzuela','Makati City',2),(1209,'Bel-Air','Makati City',2),(1210,'Poblacion','Makati City',2),(1211,'Guadalupe Viejo','Makati City',2),(1212,'Guadalupe Nuevo','Makati City',2),(1213,'Pinagkaisahan - Pitogo','Makati City',2),(1214,'Cembo','Makati City',2),(1215,'West Rembo','Makati City',2),(1216,'East Rembo','Makati City',2),(1217,'Comembo','Makati City',2),(1218,'Pembo','Makati City',2),(1219,'Forbes Park North','Makati City',2),(1220,'Forbes Park South','Makati City',2),(1221,'Dasmariñas Village North','Makati City',2),(1222,'Dasmariñas Village South','Makati City',2),(1223,'San Lorenzo Village','Makati City',2),(1224,'Makati Commercial Center','Makati City',2),(1225,'Urdaneta Village','Makati City',2),(1226,'Ayala Avenue-Paseo de Roxas','Makati City',2),(1227,'Salcedo Village','Makati City',2),(1228,'Greenbelt','Makati City',2),(1229,'Legaspi Village','Makati City',2),(1230,'Pio del Pilar','Makati City',2),(1231,'Pasong Tamo','Makati City',2),(1232,'Magallanes Village','Makati City',2),(1233,'Bangkal','Makati City',2),(1234,'San Isidro','Makati City',2),(1235,'Palanan','Makati City',2),(1300,'Pasay City Central Post Office','Pasay City',2),(1301,'Domestic Airport Post Office','Pasay City',2),(1302,'San Rafael','Pasay City',2),(1303,'San Roque','Pasay City',2),(1304,'Santa Clara','Pasay City',2),(1305,'San Jose','Pasay City',2),(1306,'San Isidro','Pasay City',2),(1307,'Philippine International Convention Center','Pasay City',2),(1308,'Bay City','Pasay City',2),(1309,'Villamor Airbase','Pasay City',2),(1400,'Caloocan City Central Post Office','Caloocan City',2),(1401,'Baesa','Caloocan City',2),(1402,'Santa Quiteria','Caloocan City',2),(1403,'Grace Park East','Caloocan City',2),(1404,'San Jose','Caloocan City',2),(1405,'First Avenue to Seventh Avenue West','Caloocan City',2),(1406,'Grace Park West','Caloocan City',2),(1407,'University Hills','Caloocan City',2),(1408,'Sangandaan','Caloocan City',2),(1409,'Kaunlaran Village','Caloocan City',2),(1410,'Maypajo','Caloocan City',2),(1411,'Fish Market','Caloocan City',2),(1412,'Isla de Cocomo','Caloocan City',2),(1413,'Kapitbayahan','Caloocan City',2),(1420,'Kaybiga/Deparo','Caloocan City',2),(1421,'Bagumbong/Pag-asa','Caloocan City',2),(1422,'Novaliches North','Caloocan City',2),(1423,'Lilles Ville Subdivision','Caloocan City',2),(1424,'Captol Parkland Subdivision','Caloocan City',2),(1425,'Amparo Subdivision','Caloocan City',2),(1426,'Bankers Village','Caloocan City',2),(1427,'Tala Leprosarium and Victory Heights','Caloocan City',2),(1428,'Bagong Silang','Caloocan City',2),(1440,'Valenzuela Central Post Office','Valenzuela City',2),(1441,'Karuhatan','Valenzuela City',2),(1442,'Paso de Blas','Valenzuela City',2),(1443,'West Canumay','Valenzuela City',2),(1444,'Arkong Bato','Valenzuela City',2),(1445,'Balangkas','Valenzuela City',2),(1446,'Lingunan','Valenzuela City',2),(1447,'East Canumay','Valenzuela City',2),(1448,'Mapulang Lupa','Valenzuela City',2),(1470,'Tinajeros','Malabon City',2),(1471,'Flores','Malabon City',2),(1472,'Longos','Malabon City',2),(1473,'Tonsuya','Malabon City',2),(1474,'Acacia','Malabon City',2),(1475,'Potrero','Malabon City',2),(1476,'Araneta Subdivision','Malabon City',2),(1477,'Maysilo','Malabon City',2),(1478,'Santolan','Malabon City',2),(1479,'Muzon','Malabon City',2),(1480,'Dampalit','Malabon City',2),(1485,'Navotas','Navotas City',2),(1489,'Tangos','Navotas City',2),(1490,'Tanza','Navotas City',2),(1500,'San Juan Central Post Office','San Juan',2),(1502,'Greenhills Post Office','San Juan',2),(1503,'Greenhills North','San Juan',2),(1504,'Eisenhower','San Juan',2),(1550,'Barangay Plainview','Mandaluyong City',2),(1551,'Vergara','Mandaluyong City',2),(1552,'Shaw Boulevard','Mandaluyong City',2),(1553,'National Center for Mental Health','Mandaluyong City',2),(1554,'East EDSA','Mandaluyong City',2),(1555,'Wack Wack','Mandaluyong City',2),(1556,'Greenhills South','Mandaluyong City',2),(1600,'Pasig Central Post Office','Pasig City',2),(1601,'San Joaquin','Pasig City',2),(1602,'Pinagbuhatan','Pasig City',2),(1603,'Kapitolyo','Pasig City',2),(1604,'Ugong','Pasig City',2),(1605,'Ortigas Post Office','Pasig City',2),(1606,'Caniogan','Pasig City',2),(1607,'Maybunga','Pasig City',2),(1608,'Santa Lucia','Pasig City',2),(1609,'Rosario','Pasig City',2),(1610,'Santolan','Pasig City',2),(1611,'Manggahan','Pasig City',2),(1612,'Green Park','Pasig City',2),(1620,'Aguho','Pateros',2),(1621,'Santa Ana','Pateros',2),(1622,'San Roque','Pateros',2),(1630,'Western Bicutan','Taguig City',2),(1631,'Bicutan','Taguig City',2),(1632,'Lower Bicutan','Taguig City',2),(1633,'Upper Bicutan','Taguig City',2),(1634,'Nichols','Taguig City',2),(1636,'Bay Breeze Executive Village','Taguig City',2),(1637,'Tuktukan','Taguig City',2),(1638,'Ligid','Taguig City',2),(1700,'Parañaque Central Post Office','Parañaque City',2),(1701,'Tambo','Parañaque City',2),(1702,'Baclaran','Parañaque City',2),(1703,'Marina Subdivision','Parañaque City',2),(1704,'Santo Niño','Parañaque City',2),(1705,'Ninoy Aquino International Airport','Parañaque City',2),(1706,'Pulo','Parañaque City',2),(1707,'San Antonio Valley 11','Parañaque City',2),(1708,'Multinational Village','Parañaque City',2),(1709,'South Admiral Village','Parañaque City',2),(1710,'Executive Heights Subdivision','Parañaque City',2),(1711,'Better Living Subdivision','Parañaque City',2),(1712,'Miramar Subdivision','Parañaque City',2),(1713,'United Parañaque Subdivision','Parañaque City',2),(1714,'Ireneville Subdivision II','Parañaque City',2),(1715,'San Antonio Valley 1','Parañaque City',2),(1716,'Maywood Village II','Parañaque City',2),(1717,'Manila Memorial Park','Parañaque City',2),(1718,'BF Homes 2','Parañaque City',2),(1719,'Ireneville Subdivision I','Parañaque City',2),(1720,'BF Homes 1','Parañaque City',2),(1740,'Las Piñas Central Post Office','Las Piñas City',2),(1741,'Greymarville Subdivision','Las Piñas City',2),(1742,'Pulang Lupa and Zapote','Las Piñas City',2),(1743,'Cut-cut','Las Piñas City',2),(1744,'Manuyo','Las Piñas City',2),(1745,'Gatchalian Subdivision','Las Piñas City',2),(1746,'Verdant Acres Subdivision','Las Piñas City',2),(1747,'Talon Moonwalk','Las Piñas City',2),(1748,'Manila Doctors Village','Las Piñas City',2),(1749,'Angela Village','Las Piñas City',2),(1750,'Almanza','Las Piñas City',2),(1751,'T.S. Cruz Subdivision','Las Piñas City',2),(1752,'Soldiers Hills Subdivision','Las Piñas City',2),(1770,'Muntinlupa Central Post Office','Muntinlupa City',2),(1771,'Buli/Cupang','Muntinlupa City',2),(1772,'Bayanan/Putatan','Muntinlupa City',2),(1773,'Tunasan','Muntinlupa City',2),(1800,'Marikina Central Post Office','Marikina City',2),(1801,'San Roque-Calumpang','Marikina City',2),(1802,'Industrial Valley','Marikina City',2),(1803,'Barangka','Marikina City',2),(1804,'J. De La Peña','Marikina City',2),(1805,'Malanday','Marikina City',2),(1806,'Marikina River','Marikina City',2),(1807,'Concepcion 1','Marikina City',2),(1808,'Nangka','Marikina City',2),(1809,'Parang','Marikina City',2),(1810,'Marikina Heights','Marikina City',2),(1811,'Concepcion 2','Marikina City',2),(1820,'Bagong Nayon','Marikina City',2),(1850,'San Mateo','Rizal',2),(1860,'Rodriguez, Montalban','Rizal',2),(1870,'Antipolo City','Rizal',2),(1880,'Teresa','Rizal',2),(1900,'Cainta','Rizal',2),(1910,'Pililla','Rizal',2),(1920,'Taytay','Rizal',2),(1930,'Angono','Rizal',2),(1940,'Binangonan','Rizal',2),(1950,'Cardona','Rizal',2),(1960,'Morong','Rizal',2),(1970,'Baras','Rizal',2),(1980,'Tanay','Rizal',2),(1990,'Jalajala','Rizal',2),(2000,'San Fernando City','Pampanga',45),(2001,'Bacolor','Pampanga',45),(2002,'Santa Rita','Pampanga',45),(2003,'Guagua','Pampanga',45),(2004,'Sasmuan','Pampanga',45),(2005,'Lubao','Pampanga',45),(2006,'Floridablanca','Pampanga',45),(2007,'Basa Airbase','Pampanga',45),(2008,'Porac','Pampanga',45),(2009,'Angeles City','Pampanga',45),(2010,'Mabalacat City','Pampanga',45),(2011,'Magalang','Pampanga',45),(2012,'Arayat','Pampanga',45),(2013,'Candaba','Pampanga',45),(2014,'San Luis','Pampanga',45),(2015,'San Simon','Pampanga',45),(2016,'Apalit','Pampanga',45),(2017,'Masantol','Pampanga',45),(2018,'Macabebe','Pampanga',45),(2019,'Minalin','Pampanga',45),(2020,'Santo Tomas','Pampanga',45),(2021,'Mexico','Pampanga',45),(2022,'Santa Ana','Pampanga',45),(2024,'Barangay Balibago, Angeles City','Pampanga',45),(2100,'Balanga City','Bataan',47),(2101,'Pilar','Bataan',47),(2102,'Orion','Bataan',47),(2103,'Limay','Bataan',47),(2104,'Lamao','Bataan',47),(2105,'Mariveles','Bataan',47),(2106,'Bataan Export Processing Zone','Bataan',47),(2107,'Bagac','Bataan',47),(2108,'Morong','Bataan',47),(2109,'Refugee Processing Center','Bataan',47),(2110,'Dinalupihan','Bataan',47),(2111,'Hermosa','Bataan',47),(2112,'Orani','Bataan',47),(2113,'Samal','Bataan',47),(2114,'Abucay','Bataan',47),(2200,'Olongapo City','Zambales',47),(2201,'Iba','Zambales',47),(2202,'Botolan','Zambales',47),(2203,'Cabangan','Zambales',47),(2204,'San Felipe','Zambales',47),(2205,'San Narciso','Zambales',47),(2206,'San Antonio','Zambales',47),(2207,'San Marcelino','Zambales',47),(2208,'Castillejos','Zambales',47),(2209,'Subic','Zambales',47),(2210,'Palauig','Zambales',47),(2211,'Masinloc','Zambales',47),(2212,'Candelaria','Zambales',47),(2213,'Santa Cruz','Zambales',47),(2222,'Subic Bay Freeport Zone','Zambales',47),(2300,'Tarlac City','Tarlac',45),(2301,'San Miguel, Tarlac City','Tarlac',45),(2302,'Gerona','Tarlac',45),(2303,'Santa Ignacia','Tarlac',45),(2304,'Mayantoc','Tarlac',45),(2305,'San Clemente','Tarlac',45),(2306,'Camiling','Tarlac',45),(2307,'Paniqui','Tarlac',45),(2308,'Moncada','Tarlac',45),(2309,'San Manuel','Tarlac',45),(2310,'Anao','Tarlac',45),(2311,'Ramos','Tarlac',45),(2312,'Pura','Tarlac',45),(2313,'Victoria','Tarlac',45),(2314,'La Paz','Tarlac',45),(2315,'Capas','Tarlac',45),(2316,'Concepcion','Tarlac',45),(2317,'Bamban','Tarlac',45),(2318,'San Jose','Tarlac',45),(3000,'Malolos City','Bulacan',44),(3001,'Paombong','Bulacan',44),(3002,'Hagonoy','Bulacan',44),(3003,'Calumpit','Bulacan',44),(3004,'Plaridel','Bulacan',44),(3005,'Pulilan','Bulacan',44),(3006,'Baliuag','Bulacan',44),(3007,'Bustos','Bulacan',44),(3008,'San Rafael','Bulacan',44),(3009,'Doña Remedios Trinidad','Bulacan',44),(3010,'San Ildefonso','Bulacan',44),(3011,'San Miguel','Bulacan',44),(3012,'Angat','Bulacan',44),(3013,'Norzagaray','Bulacan',44),(3014,'Pandi','Bulacan',44),(3015,'Guiguinto','Bulacan',44),(3016,'Balagtas','Bulacan',44),(3017,'Bulacan','Bulacan',44),(3018,'Bocaue','Bulacan',44),(3019,'Marilao','Bulacan',44),(3020,'Meycauayan City','Bulacan',44),(3021,'Obando','Bulacan',2),(3022,'Santa Maria','Bulacan',44),(3023,'San Jose del Monte City','Bulacan',44),(3024,'Sapang Palay, San Jose del Monte City','Bulacan',44),(3100,'Cabanatuan City','Nueva Ecija',44),(3101,'Santa Rosa','Nueva Ecija',44),(3102,'San Leonardo','Nueva Ecija',44),(3103,'Peñaranda','Nueva Ecija',44),(3104,'General Tinio','Nueva Ecija',44),(3105,'Gapan City','Nueva Ecija',44),(3106,'San Isidro','Nueva Ecija',44),(3107,'Cabiao','Nueva Ecija',44),(3108,'San Antonio','Nueva Ecija',44),(3109,'Jaen','Nueva Ecija',44),(3110,'Zaragoza','Nueva Ecija',44),(3111,'Aliaga','Nueva Ecija',44),(3112,'Licab','Nueva Ecija',44),(3113,'Quezon','Nueva Ecija',44),(3114,'Talavera','Nueva Ecija',44),(3115,'Guimba','Nueva Ecija',44),(3116,'Nampicuan','Nueva Ecija',44),(3117,'Cuyapo','Nueva Ecija',44),(3118,'Talugtug','Nueva Ecija',44),(3119,'Science City of Muñoz','Nueva Ecija',44),(3120,'Central Luzon State University','Nueva Ecija',44),(3121,'San Jose City','Nueva Ecija',44),(3122,'Lupao','Nueva Ecija',44),(3123,'Carranglan','Nueva Ecija',44),(3124,'Pantabangan','Nueva Ecija',44),(3125,'General Mamerto Natividad','Nueva Ecija',44),(3126,'Llanera','Nueva Ecija',44),(3127,'Rizal','Nueva Ecija',44),(3128,'Bongabon','Nueva Ecija',44),(3129,'Laur','Nueva Ecija',44),(3130,'Fort Magsaysay','Nueva Ecija',44),(3131,'Gabaldon','Nueva Ecija',44),(3132,'Palayan City','Nueva Ecija',44),(3133,'Santo Domingo','Nueva Ecija',44),(3200,'Baler','Aurora',42),(3201,'San Luis','Aurora',42),(3202,'Maria Aurora','Aurora',42),(3203,'Dipaculao','Aurora',42),(3204,'Casiguran','Aurora',42),(3205,'Dilasag','Aurora',42),(3206,'Dinalungan','Aurora',42),(3207,'Dingalan','Aurora',42),(4000,'San Pablo City','Laguna',49),(4001,'Alaminos','Laguna',49),(4002,'Nagcarlan','Laguna',49),(4003,'Rizal','Laguna',49),(4004,'Liliw','Laguna',49),(4005,'Majayjay','Laguna',49),(4006,'Botocan, Magdalena','Laguna',49),(4007,'Magdalena','Laguna',49),(4008,'Pagsanjan','Laguna',49),(4009,'Santa Cruz','Laguna',49),(4010,'Pila','Laguna',49),(4011,'Victoria','Laguna',49),(4012,'Calauan','Laguna',49),(4013,'Cavinti','Laguna',49),(4014,'Lumban','Laguna',49),(4015,'Kalayaan','Laguna',49),(4016,'Paete','Laguna',49),(4017,'Pakil','Laguna',49),(4018,'Pangil','Laguna',49),(4019,'Siniloan','Laguna',49),(4020,'Mabitac','Laguna',49),(4021,'Famy','Laguna',49),(4022,'Santa Maria','Laguna',49),(4023,'San Pedro','Laguna',49),(4024,'Biñan City','Laguna',49),(4025,'Cabuyao City','Laguna',49),(4026,'Santa Rosa City','Laguna',49),(4027,'Calamba City','Laguna',49),(4028,'Canlubang, Calamba City','Laguna',49),(4029,'Camp Vicente Lim','Laguna',49),(4030,'Los Baños','Laguna',49),(4031,'University of the Philippines, Los Baños','Laguna',49),(4032,'Luisiana','Laguna',49),(4033,'Bay','Laguna',49),(4100,'Cavite City','Cavite',46),(4101,'Sangley Point Naval Base','Cavite',46),(4102,'Bacoor City','Cavite',46),(4103,'Imus City','Cavite',46),(4104,'Kawit','Cavite',46),(4105,'Noveleta','Cavite',46),(4106,'Rosario','Cavite',46),(4107,'General Trias','Cavite',46),(4108,'Tanza','Cavite',46),(4109,'Trece Martires City','Cavite',46),(4110,'Naic','Cavite',46),(4111,'Ternate','Cavite',46),(4112,'Maragondon','Cavite',46),(4113,'Magallanes','Cavite',46),(4114,'Dasmariñas City','Cavite',46),(4115,'Dasmarinas Resettlement Area','Cavite',46),(4116,'Carmona','Cavite',46),(4117,'General Mariano Alvarez','Cavite',46),(4118,'Silang','Cavite',46),(4119,'Amadeo','Cavite',46),(4120,'Tagaytay City','Cavite',46),(4121,'Mendez','Cavite',46),(4122,'Indang','Cavite',46),(4123,'Alfonso','Cavite',46),(4124,'General Emilio Aguinaldo','Cavite',46),(4125,'Corregidor Island','Cavite',46),(4126,'First Cavite Industrial Estate','Cavite',46),(4200,'Concepcion','Batangas',43),(4202,'Mabini','Batangas',43),(4203,'Tingloy','Batangas',43),(4204,'San Pascual','Batangas',43),(4206,'Santa Teresita','Batangas',43),(4207,'San Nicolas','Batangas',43),(4208,'Taal','Batangas',43),(4209,'Lemery','Batangas',43),(4210,'San Luis','Batangas',43),(4211,'Agoncillo','Batangas',43),(4214,'Tuy','Batangas',43),(4216,'Lian','Batangas',43),(4217,'Lipa City','Batangas',43),(4218,'Fernando Air Base','Batangas',43),(4220,'Talisay','Batangas',43),(4221,'Laurel','Batangas',43),(4222,'Cuenca','Batangas',43),(4223,'Mataas na Kahoy','Batangas',43),(4224,'Padre Garcia','Batangas',43),(4225,'Rosario','Batangas',43),(4226,'San Juan','Batangas',43),(4227,'San Jose','Batangas',43),(4228,'Taysan','Batangas',43),(4229,'Lobo','Batangas',43),(4230,'Ibaan','Batangas',43),(4231,'Nasugbu','Batangas',43),(4232,'Tanauan City','Batangas',43),(4233,'Malvar','Batangas',43),(4234,'Santo Tomas','Batangas',43),(4300,'Provincial Capitol, Lucena City','Quezon',42),(4301,'Lucena City','Quezon',42),(4302,'Pagbilao','Quezon',42),(4303,'Padre Burgos','Quezon',42),(4304,'Agdangan','Quezon',42),(4305,'Unisan','Quezon',42),(4306,'Plaridel','Quezon',42),(4307,'Gumaca','Quezon',42),(4308,'Pitogo','Quezon',42),(4309,'Macalelon','Quezon',42),(4310,'General Luna, Quezon','Quezon',42),(4311,'Catanauan','Quezon',42),(4312,'Mulanay','Quezon',42),(4313,'San Narciso','Quezon',42),(4314,'San Andres','Quezon',42),(4315,'San Francisco','Quezon',42),(4316,'Lopez','Quezon',42),(4317,'Hondagua, Lopez','Quezon',42),(4318,'Calauag','Quezon',42),(4319,'Guinayangan','Quezon',42),(4320,'Buenavista','Quezon',42),(4321,'Tagkawayan','Quezon',42),(4322,'Sariaya','Quezon',42),(4323,'Candelaria','Quezon',42),(4324,'San Antonio','Quezon',42),(4325,'Tiaong','Quezon',42),(4326,'Dolores','Quezon',42),(4327,'Tayabas','Quezon',42),(4328,'Lucban','Quezon',42),(4329,'Sampaloc','Quezon',42),(4330,'Mauban','Quezon',42),(4331,'Atimonan','Quezon',42),(4332,'Quezon','Quezon',42),(4333,'Alabat','Quezon',42),(4334,'Perez','Quezon',42),(4335,'Real','Quezon',42),(4336,'Infanta','Quezon',42),(4337,'Panukulan','Quezon',42),(4338,'General Nakar','Quezon',42),(4339,'Polilio','Quezon',42),(4340,'Burdeos','Quezon',42),(4341,'Patnanungan','Quezon',42),(4342,'Jomalig','Quezon',42),(4400,'Naga City','Camarines Sur',54),(4401,'Camaligan','Camarines Sur',54),(4402,'Canaman','Camarines Sur',54),(4403,'Magarao','Camarines Sur',54),(4404,'Bombon','Camarines Sur',54),(4405,'Calabanga','Camarines Sur',54),(4406,'Cabusao','Camarines Sur',54),(4407,'Libmanan','Camarines Sur',54),(4408,'Sipocot','Camarines Sur',54),(4409,'Lupi','Camarines Sur',54),(4410,'Ragay','Camarines Sur',54),(4411,'Del Gallego','Camarines Sur',54),(4412,'Gainza','Camarines Sur',54),(4413,'Milaor','Camarines Sur',54),(4414,'Minalabac','Camarines Sur',54),(4415,'San Fernando','Camarines Sur',54),(4416,'Pamplona','Camarines Sur',54),(4417,'Pasacao','Camarines Sur',54),(4418,'Pili','Camarines Sur',54),(4419,'Ocampo','Camarines Sur',54),(4420,'Tigaon','Camarines Sur',54),(4421,'Sagñay','Camarines Sur',54),(4422,'Goa','Camarines Sur',54),(4423,'San Jose','Camarines Sur',54),(4424,'Presentacion','Camarines Sur',54),(4425,'Lagonoy','Camarines Sur',54),(4426,'Tinambac','Camarines Sur',54),(4427,'Siruma','Camarines Sur',54),(4428,'Garchitorena','Camarines Sur',54),(4429,'Caramoan','Camarines Sur',54),(4430,'Bula','Camarines Sur',54),(4431,'Iriga City','Camarines Sur',54),(4432,'Baao','Camarines Sur',54),(4433,'Buhi','Camarines Sur',54),(4434,'Nabua','Camarines Sur',54),(4435,'Bato','Camarines Sur',54),(4436,'Balatan','Camarines Sur',54),(4500,'Legazpi City','Albay',52),(4501,'Daraga','Albay',52),(4502,'Camalig','Albay',52),(4503,'Guinobatan','Albay',52),(4504,'Ligao City','Albay',52),(4505,'Oas','Albay',52),(4506,'Polangui','Albay',52),(4507,'Libon','Albay',52),(4508,'Santo Domingo','Albay',52),(4509,'Bacacay','Albay',52),(4510,'Malilipot','Albay',52),(4511,'Tabaco City','Albay',52),(4512,'Malinao','Albay',52),(4513,'Tiwi','Albay',52),(4514,'Manito','Albay',52),(4515,'Jovellar','Albay',52),(4516,'Pio Duran','Albay',52),(4517,'Rapu-Rapu','Albay',52),(4600,'Daet','Camarines Norte',54),(4601,'Mercedes','Camarines Norte',54),(4602,'Talisay','Camarines Norte',54),(4603,'Vinzons','Camarines Norte',54),(4604,'Labo','Camarines Norte',54),(4605,'Paracale','Camarines Norte',54),(4606,'Jose Panganiban','Camarines Norte',54),(4607,'Capalonga','Camarines Norte',54),(4608,'Basud','Camarines Norte',54),(4609,'San Vicente','Camarines Norte',54),(4610,'San Lorenzo Ruiz','Camarines Norte',54),(4611,'Santa Elena','Camarines Norte',54),(4612,'Tulay-na-Lupa','Camarines Norte',54),(4700,'Sorsogon City','Sorsogon',56),(4701,'Bacon','Sorsogon',56),(4702,'Casiguran','Sorsogon',56),(4703,'Juban','Sorsogon',56),(4704,'Bulusan','Sorsogon',56),(4705,'Magallanes','Sorsogon',56),(4706,'Bulan','Sorsogon',56),(4707,'Irosin','Sorsogon',56),(4708,'Matnog','Sorsogon',56),(4709,'Santa Magdalena','Sorsogon',56),(4710,'Gubat','Sorsogon',56),(4711,'Prieto Diaz','Sorsogon',56),(4712,'Barcelona','Sorsogon',56),(4713,'Castilla','Sorsogon',56),(4714,'Pilar','Sorsogon',56),(4715,'Donsol','Sorsogon',56),(4900,'Boac','Marinduque',42),(4901,'Mogpog','Marinduque',42),(4902,'Santa Cruz','Marinduque',42),(4903,'Torrijos','Marinduque',42),(4904,'Buenavista','Marinduque',42),(4905,'Gasan','Marinduque',42),(5000,'Iloilo City','Iloilo',33),(5001,'Pavia','Iloilo',33),(5002,'Santa Barbara','Iloilo',33),(5003,'Leganes','Iloilo',33),(5004,'Zarraga','Iloilo',33),(5005,'New Lucena','Iloilo',33),(5006,'Dumangas','Iloilo',33),(5007,'Barotac Nuevo','Iloilo',33),(5008,'Pototan','Iloilo',33),(5009,'Anilao','Iloilo',33),(5010,'Banate','Iloilo',33),(5011,'Barotac Viejo','Iloilo',33),(5012,'Ajuy','Iloilo',33),(5013,'Concepcion','Iloilo',33),(5014,'Sara','Iloilo',33),(5015,'San Dionisio','Iloilo',33),(5016,'Batad','Iloilo',33),(5017,'Estancia','Iloilo',33),(5018,'Balasan','Iloilo',33),(5019,'Carles','Iloilo',33),(5020,'Oton','Iloilo',33),(5021,'Tigbauan','Iloilo',33),(5022,'Guimbal','Iloilo',33),(5023,'Miagao','Iloilo',33),(5024,'San Joaquin','Iloilo',33),(5025,'San Miguel','Iloilo',33),(5026,'Leon','Iloilo',33),(5027,'Tubungan','Iloilo',33),(5028,'Alimodian','Iloilo',33),(5029,'Igbaras','Iloilo',33),(5030,'Maasin','Iloilo',33),(5031,'Cabatuan','Iloilo',33),(5032,'Mina','Iloilo',33),(5033,'Badiangan','Iloilo',33),(5034,'Janiuay','Iloilo',33),(5035,'Dingle','Iloilo',33),(5036,'San Enrique','Iloilo',33),(5037,'Passi City','Iloilo',33),(5038,'Duenas','Iloilo',33),(5039,'San Rafael','Iloilo',33),(5040,'Calinog','Iloilo',33),(5041,'Bingawan','Iloilo',33),(5042,'Lambunao','Iloilo',33),(5043,'Lemery','Iloilo',33),(5044,'Buenavista','Guimaras',33),(5045,'Jordan','Guimaras',33),(5046,'Nueva Valencia','Guimaras',33),(5047,'San Lorenzo','Guimaras',33),(5048,'Sibunag','Guimaras',33),(5100,'San Jose','Occidental Mindoro',43),(5101,'Magsaysay','Occidental Mindoro',43),(5102,'Calintaan','Occidental Mindoro',43),(5103,'Rizal','Occidental Mindoro',43),(5104,'Sablayan','Occidental Mindoro',43),(5105,'Santa Cruz','Occidental Mindoro',43),(5106,'Mamburao','Occidental Mindoro',43),(5107,'Paluan','Occidental Mindoro',43),(5108,'Abra de Ilog','Occidental Mindoro',43),(5109,'Lubang','Occidental Mindoro',43),(5110,'Tilik','Occidental Mindoro',43),(5111,'Looc','Occidental Mindoro',43),(5200,'Calapan City','Oriental Mindoro',43),(5201,'Baco','Oriental Mindoro',43),(5202,'San Teodoro','Oriental Mindoro',43),(5203,'Puerto Galera','Oriental Mindoro',43),(5204,'Naujan','Oriental Mindoro',43),(5205,'Victoria','Oriental Mindoro',43),(5206,'Pola','Oriental Mindoro',43),(5207,'Socorro','Oriental Mindoro',43),(5208,'Pinamalayan','Oriental Mindoro',43),(5209,'Gloria','Oriental Mindoro',43),(5210,'Bansud','Oriental Mindoro',43),(5211,'Bongabong','Oriental Mindoro',43),(5212,'Roxas','Oriental Mindoro',43),(5213,'Mansalay','Oriental Mindoro',43),(5214,'Bulalacao','Oriental Mindoro',43),(5300,'Puerto Princesa','Palawan',48),(5301,'Iwahig Penal Colony','Palawan',48),(5302,'Aborlan','Palawan',48),(5303,'Narra','Palawan',48),(5304,'Quezon','Palawan',48),(5305,'Brooke\'s Point','Palawan',48),(5306,'Bataraza','Palawan',48),(5307,'Balabac','Palawan',48),(5308,'Roxas','Palawan',48),(5309,'San Vicente','Palawan',48),(5310,'Dumaran','Palawan',48),(5311,'Araceli','Palawan',48),(5312,'Taytay','Palawan',48),(5313,'El Nido','Palawan',48),(5314,'Linapacan','Palawan',48),(5315,'Culion','Palawan',48),(5316,'Coron','Palawan',48),(5317,'Busuanga','Palawan',48),(5318,'Cuyo','Palawan',48),(5319,'Magsaysay','Palawan',48),(5320,'Agutaya','Palawan',48),(5321,'Cagayancillo','Palawan',48),(5322,'Kalayaan','Palawan',48),(5456,'Bugasong','Antique',36),(5500,'Romblon','Romblon',42),(5501,'San Agustin','Romblon',42),(5502,'Santa Maria','Romblon',42),(5503,'Calatrava','Romblon',42),(5504,'San Andres','Romblon',42),(5505,'Odiongan','Romblon',42),(5506,'Ferrol','Romblon',42),(5507,'Looc','Romblon',42),(5508,'Santa Fe','Romblon',42),(5509,'Alcantara','Romblon',42),(5510,'San Jose','Romblon',42),(5511,'Magdiwang','Romblon',42),(5512,'Cajidiocan','Romblon',42),(5513,'San Fernando','Romblon',42),(5514,'Corcuera','Romblon',42),(5515,'Banton','Romblon',42),(5516,'Concepcion','Romblon',42),(5600,'Kalibo','Aklan',36),(5601,'Banga','Aklan',36),(5602,'Libacao','Aklan',36),(5603,'Madalag','Aklan',36),(5604,'Numancia','Aklan',36),(5605,'Lezo','Aklan',36),(5606,'Malinao','Aklan',36),(5607,'Nabas','Aklan',36),(5608,'Malay','Aklan',36),(5609,'Buruanga','Aklan',36),(5610,'New Washington','Aklan',36),(5611,'Makato','Aklan',36),(5612,'Tangalan','Aklan',36),(5613,'Ibajay','Aklan',36),(5614,'Balete','Aklan',36),(5615,'Batan','Aklan',36),(5616,'Altavas','Aklan',36),(5700,'San Jose','Antique',36),(5701,'Belison','Antique',36),(5702,'Patnongon','Antique',36),(5703,'Valderrama','Antique',36),(5705,'Laua-an','Antique',36),(5706,'Barbaza','Antique',36),(5707,'Tibiao','Antique',36),(5708,'Culasi','Antique',36),(5709,'Sebaste','Antique',36),(5710,'Libertad','Antique',36),(5711,'Caluya','Antique',36),(5712,'Pandan','Antique',36),(5713,'Sibalom','Antique',36),(5714,'San Remigio','Antique',36),(5715,'Hamtic','Antique',36),(5716,'Tobias Fornier','Antique',36),(5717,'Anini-y','Antique',36),(5800,'Roxas City','Capiz',36),(5801,'Panay','Capiz',36),(5802,'Pontevedra','Capiz',36),(5803,'President Roxas','Capiz',36),(5804,'Pilar','Capiz',36),(5805,'Ivisan','Capiz',36),(5806,'Sapian','Capiz',36),(5807,'Mambusao','Capiz',36),(5808,'Jamindan','Capiz',36),(5809,'Ma-ayon','Capiz',36),(5810,'Dao','Capiz',36),(5811,'Cuartero','Capiz',36),(5812,'Dumarao','Capiz',36),(5813,'Dumalag','Capiz',36),(5814,'Tapaz','Capiz',36),(5815,'Panitan','Capiz',36),(5816,'Sigma','Capiz',36),(6000,'Cebu City','Cebu',32),(6001,'Consolacion','Cebu',32),(6002,'Liloan','Cebu',32),(6003,'Compostela','Cebu',32),(6004,'Danao City','Cebu',32),(6005,'Carmen','Cebu',32),(6006,'Catmon','Cebu',32),(6007,'Sogod','Cebu',32),(6008,'Borbon','Cebu',32),(6009,'Tabogon','Cebu',32),(6010,'Bogo City','Cebu',32),(6011,'San Remigio','Cebu',32),(6012,'Medellin','Cebu',32),(6013,'Daanbantayan','Cebu',32),(6014,'Mandaue City','Cebu',32),(6015,'Lapu-Lapu City','Cebu',32),(6016,'Mactan Airport','Cebu',32),(6017,'Cordova','Cebu',32),(6018,'San Fernando','Cebu',32),(6019,'Carcar City','Cebu',32),(6020,'Sibonga','Cebu',32),(6021,'Argao','Cebu',32),(6022,'Dalaguete','Cebu',32),(6023,'Alcoy','Cebu',32),(6024,'Boljoon','Cebu',32),(6025,'Oslob','Cebu',32),(6026,'Santander','Cebu',32),(6027,'Samboan','Cebu',32),(6028,'Ginatilan','Cebu',32),(6029,'Malabuyoc','Cebu',32),(6030,'Alegria','Cebu',32),(6031,'Badian','Cebu',32),(6032,'Moalboal','Cebu',32),(6033,'Alcantara','Cebu',32),(6034,'Ronda','Cebu',32),(6035,'Dumanjug','Cebu',32),(6036,'Barili','Cebu',32),(6037,'Naga City','Cebu',32),(6038,'Toledo City','Cebu',32),(6039,'Pinamungajan','Cebu',32),(6040,'Aloguinsan','Cebu',32),(6041,'Balamban','Cebu',32),(6042,'Asturias','Cebu',32),(6043,'Tuburan','Cebu',32),(6044,'Tabuelan','Cebu',32),(6045,'Talisay City','Cebu',32),(6046,'Minglanilla','Cebu',32),(6047,'Santa Fe','Cebu',32),(6048,'Pilar','Cebu',32),(6049,'Poro','Cebu',32),(6050,'San Francisco','Cebu',32),(6051,'Tudela','Cebu',32),(6052,'Bantayan','Cebu',32),(6053,'Madridejos','Cebu',32),(6100,'Bacolod City','Negros Occidental',34),(6101,'Bago City','Negros Occidental',34),(6102,'Pulupandan','Negros Occidental',34),(6103,'Valladolid','Negros Occidental',34),(6104,'San Enrique','Negros Occidental',34),(6105,'Pontevedra','Negros Occidental',34),(6106,'Hinigaran','Negros Occidental',34),(6107,'Binalbagan','Negros Occidental',34),(6108,'Himamaylan City','Negros Occidental',34),(6109,'Ilog','Negros Occidental',34),(6110,'Candoni','Negros Occidental',34),(6111,'Kabankalan City','Negros Occidental',34),(6112,'Cauayan','Negros Occidental',34),(6113,'Sipalay City','Negros Occidental',34),(6114,'Hinoba-an','Negros Occidental',34),(6115,'Talisay City','Negros Occidental',34),(6116,'Silay City','Negros Occidental',34),(6117,'Silay Hawaiian Central','Negros Occidental',34),(6118,'Enrique B. Magalona','Negros Occidental',34),(6119,'Victorias City','Negros Occidental',34),(6120,'Manapla','Negros Occidental',34),(6121,'Cadiz City','Negros Occidental',34),(6122,'Sagay City','Negros Occidental',34),(6123,'Paraiso','Negros Occidental',34),(6124,'Escalante City','Negros Occidental',34),(6125,'Toboso','Negros Occidental',34),(6126,'Calatrava','Negros Occidental',34),(6127,'San Carlos City','Negros Occidental',34),(6128,'Isabela','Negros Occidental',34),(6129,'Murcia','Negros Occidental',34),(6130,'La Carlota City','Negros Occidental',34),(6131,'La Castellana','Negros Occidental',34),(6132,'Moises Padilla','Negros Occidental',34),(6200,'Dumaguete City','Negros Oriental',35),(6201,'Sibulan','Negros Oriental',35),(6202,'San Jose','Negros Oriental',35),(6203,'Amlan','Negros Oriental',35),(6204,'Tanjay City','Negros Oriental',35),(6205,'Pamplona','Negros Oriental',35),(6206,'Bais City','Negros Oriental',35),(6207,'Mabinay','Negros Oriental',35),(6208,'Manjuyod','Negros Oriental',35),(6209,'Bindoy','Negros Oriental',35),(6210,'Ayungon','Negros Oriental',35),(6211,'Tayasan','Negros Oriental',35),(6212,'Jimalalud','Negros Oriental',35),(6213,'La Libertad','Negros Oriental',35),(6214,'Guihulngan','Negros Oriental',35),(6215,'Valencia','Negros Oriental',35),(6216,'Bacong','Negros Oriental',35),(6217,'Dauin','Negros Oriental',35),(6218,'Zamboanguita','Negros Oriental',35),(6219,'Siaton','Negros Oriental',35),(6220,'Santa Catalina','Negros Oriental',35),(6221,'Bayawan City','Negros Oriental',35),(6222,'Basay','Negros Oriental',35),(6223,'Canlaon City','Negros Oriental',35),(6224,'VallVallehermoso','Negros Oriental',35),(6225,'Siquijor','Siquijor',35),(6226,'Larena','Siquijor',35),(6227,'San Juan','Siquijor',35),(6228,'Lazi','Siquijor',35),(6229,'Maria','Siquijor',35),(6230,'Enrique Villanueva','Siquijor',35),(6300,'Tagbilaran City','Bohol',38),(6301,'Baclayon','Bohol',38),(6302,'Alburquerque','Bohol',38),(6303,'Loay','Bohol',38),(6304,'Lila','Bohol',38),(6305,'Dimiao','Bohol',38),(6306,'Valencia','Bohol',38),(6307,'Garcia Hernandez','Bohol',38),(6308,'Jagna','Bohol',38),(6309,'Duero','Bohol',38),(6310,'Guindulman','Bohol',38),(6311,'Anda','Bohol',38),(6312,'Candijay','Bohol',38),(6313,'Mabini','Bohol',38),(6314,'Alicia','Bohol',38),(6315,'Ubay','Bohol',38),(6316,'Loboc','Bohol',38),(6317,'Bilar','Bohol',38),(6318,'Batuan','Bohol',38),(6319,'Carmen','Bohol',38),(6320,'Sierra Bullones','Bohol',38),(6321,'Pilar','Bohol',38),(6322,'Dagohoy','Bohol',38),(6323,'San Miguel','Bohol',38),(6324,'Trinidad','Bohol',38),(6325,'Talibon','Bohol',38),(6326,'Bien Unido','Bohol',38),(6327,'Loon','Bohol',38),(6328,'Calape','Bohol',38),(6329,'Tubigon','Bohol',38),(6330,'Clarin','Bohol',38),(6331,'Sagbayan','Bohol',38),(6332,'Inabanga','Bohol',38),(6333,'Buenavista','Bohol',38),(6334,'Jetafe','Bohol',38),(6335,'Antequera','Bohol',38),(6336,'Maribojoc','Bohol',38),(6337,'Corella','Bohol',38),(6338,'Sikatuna','Bohol',38),(6339,'Dauis','Bohol',38),(6340,'Panglao','Bohol',38),(6341,'Cortes','Bohol',38),(6342,'Balilihan','Bohol',38),(6343,'Catigbian','Bohol',38),(6344,'Danao','Bohol',38),(6345,'San Isidro','Bohol',38),(6346,'Pres. Carlos P. Garcia','Bohol',38),(6347,'Sevilla','Bohol',38),(6400,'Catarman','Northern Samar',55),(6401,'Bobon','Northern Samar',55),(6402,'San Jose','Northern Samar',55),(6403,'Lope de Vega','Northern Samar',55),(6404,'Lavezares','Northern Samar',55),(6405,'Allen','Northern Samar',55),(6406,'Victoria','Northern Samar',55),(6407,'San Antonio','Northern Samar',55),(6408,'Capul','Northern Samar',55),(6409,'San Isidro','Northern Samar',55),(6410,'Biri','Northern Samar',55),(6411,'Laoang','Northern Samar',55),(6412,'Mapanas','Northern Samar',55),(6413,'Pambujan','Northern Samar',55),(6414,'Silvino Lobos','Northern Samar',55),(6415,'San Roque','Northern Samar',55),(6416,'Rosario','Northern Samar',55),(6417,'Mondragon','Northern Samar',55),(6418,'Catubig','Northern Samar',55),(6419,'San Vicente','Northern Samar',55),(6420,'Las Navas','Northern Samar',55),(6421,'Palapag','Northern Samar',55),(6422,'Gamay','Northern Samar',55),(6423,'Lapinig','Northern Samar',55),(6500,'Tacloban City','Leyte',53),(6501,'Palo','Leyte',53),(6502,'Tanauan','Leyte',53),(6503,'Tolosa','Leyte',53),(6504,'Tabontabon','Leyte',53),(6505,'Dulag','Leyte',53),(6506,'Julita','Leyte',53),(6507,'Mayorga','Leyte',53),(6508,'La Paz','Leyte',53),(6509,'MacArthur','Leyte',53),(6510,'Abuyog','Leyte',53),(6511,'Javier','Leyte',53),(6512,'Mahaplag','Leyte',53),(6513,'Santa Fe','Leyte',53),(6514,'Pastrana','Leyte',53),(6515,'Dagami','Leyte',53),(6516,'Burauen','Leyte',53),(6517,'Alangalang','Leyte',53),(6518,'San Miguel','Leyte',53),(6519,'Barugo','Leyte',53),(6520,'Babatngon','Leyte',53),(6521,'Baybay City','Leyte',53),(6522,'Inopacan','Leyte',53),(6523,'Hindang','Leyte',53),(6524,'Hilongos','Leyte',53),(6525,'Bato','Leyte',53),(6526,'Matalom','Leyte',53),(6527,'Jaro','Leyte',53),(6528,'Tunga','Leyte',53),(6529,'Carigara','Leyte',53),(6530,'Capoocan','Leyte',53),(6531,'Kananga','Leyte',53),(6532,'Matag-ob','Leyte',53),(6533,'Leyte','Leyte',53),(6534,'Calubian','Leyte',53),(6535,'San Isidro','Leyte',53),(6536,'Tabango','Leyte',53),(6537,'Villaba','Leyte',53),(6538,'Palompon','Leyte',53),(6539,'Isabel','Leyte',53),(6540,'Merida','Leyte',53),(6541,'Ormoc City','Leyte',53),(6542,'Albuera','Leyte',53),(6543,'Naval','Biliran',53),(6544,'Almeria','Biliran',53),(6545,'Kawayan','Biliran',53),(6546,'Maripipi','Biliran',53),(6547,'Culaba','Biliran',53),(6548,'Caibiran','Biliran',53),(6549,'Biliran','Biliran',53),(6550,'Cabucgayan','Biliran',53),(6600,'Maasin City','Southern Leyte',53),(6601,'Macrohon','Southern Leyte',53),(6602,'Padre Burgos','Southern Leyte',53),(6603,'Malitbog','Southern Leyte',53),(6604,'Bontoc','Southern Leyte',53),(6605,'Tomas Oppus','Southern Leyte',53),(6606,'Sogod','Southern Leyte',53),(6607,'Silago','Southern Leyte',53),(6608,'Hinunangan','Southern Leyte',53),(6609,'Hinundayan','Southern Leyte',53),(6610,'Anahawan','Southern Leyte',53),(6611,'San Juan','Southern Leyte',53),(6612,'Liloan','Southern Leyte',53),(6613,'San Francisco','Southern Leyte',53),(6614,'Pintuyan','Southern Leyte',53),(6615,'Libagon','Southern Leyte',53),(6616,'Saint Bernard','Southern Leyte',53),(6617,'San Ricardo','Southern Leyte',53),(6700,'Catbalogan City','Samar',55),(6701,'Jiabong','Samar',55),(6702,'Motiong','Samar',55),(6703,'Paranas','Samar',55),(6704,'Tarangnan','Samar',55),(6705,'Pagsanghan','Samar',55),(6706,'Gandara','Samar',55),(6707,'San Jorge','Samar',55),(6708,'Matuguinao','Samar',55),(6709,'Santa Margarita','Samar',55),(6710,'Calbayog City','Samar',55),(6711,'Santo Niño','Samar',55),(6712,'Tagapul-an','Samar',55),(6713,'Hinabangan','Samar',55),(6714,'San Sebastian','Samar',55),(6715,'Calbiga','Samar',55),(6716,'Pinabacdao','Samar',55),(6717,'Villareal','Samar',55),(6718,'Santa Rita','Samar',55),(6719,'Talalora','Samar',55),(6720,'Basey','Samar',55),(6721,'Marabut','Samar',55),(6722,'Daram','Samar',55),(6723,'San Jose De Buan','Samar',55),(6724,'Almagro','Samar',55),(6725,'Zumarraga','Samar',55),(6800,'Borongan City','Eastern Samar',55),(6801,'Balangkayan','Eastern Samar',55),(6802,'Maydolong','Eastern Samar',55),(6803,'Llorente','Eastern Samar',55),(6804,'Hernani','Eastern Samar',55),(6805,'General MacArthur','Eastern Samar',55),(6806,'Can-avid','Eastern Samar',55),(6807,'Salcedo','Eastern Samar',55),(6808,'Mercedes','Eastern Samar',55),(6809,'Guiuan','Eastern Samar',55),(6810,'Quinapondan','Eastern Samar',55),(6811,'Giporlos','Eastern Samar',55),(6812,'Balangiga','Eastern Samar',55),(6813,'Lawaan','Eastern Samar',55),(6814,'San Julian','Eastern Samar',55),(6815,'Sulat','Eastern Samar',55),(6816,'Taft','Eastern Samar',55),(6817,'Dolores','Eastern Samar',55),(6818,'Oras','Eastern Samar',55),(6819,'Jipapad','Eastern Samar',55),(6820,'Maslog','Eastern Samar',55),(6821,'San Policarpo','Eastern Samar',55),(6822,'Arteche','Eastern Samar',55),(7000,'Zamboanga City','Zamboanga del Sur',62),(7011,'Bayog','Zamboanga del Sur',62),(7013,'Kumalarang','Zamboanga del Sur',62),(7014,'Lakewood','Zamboanga del Sur',62),(7015,'Dumalinao','Zamboanga del Sur',62),(7016,'Pagadian City','Zamboanga del Sur',62),(7017,'Labangan','Zamboanga del Sur',62),(7019,'Tukuran','Zamboanga del Sur',62),(7020,'Aurora','Zamboanga del Sur',62),(7021,'Midsalip','Zamboanga del Sur',62),(7022,'Sominot','Zamboanga del Sur',62),(7023,'Molave','Zamboanga del Sur',62),(7024,'Ramon Magsaysay','Zamboanga del Sur',62),(7025,'Tambulig','Zamboanga del Sur',62),(7026,'Mahayag','Zamboanga del Sur',62),(7027,'Josefina','Zamboanga del Sur',62),(7028,'Dumingag','Zamboanga del Sur',62),(7029,'San Miguel','Zamboanga del Sur',62),(7030,'Dinas','Zamboanga del Sur',62),(7031,'San Pablo','Zamboanga del Sur',62),(7032,'Dimataling','Zamboanga del Sur',62),(7033,'Pitogo','Zamboanga del Sur',62),(7034,'Tabina','Zamboanga del Sur',62),(7035,'Margosatubig','Zamboanga del Sur',62),(7036,'Vincenzo A. Sagun','Zamboanga del Sur',62),(7037,'Lapuyan','Zamboanga del Sur',62),(7042,'Guipos','Zamboanga del Sur',62),(7043,'Tigbao','Zamboanga del Sur',62),(7100,'Dipolog City','Zamboanga del Norte',65),(7101,'Dapitan City','Zamboanga del Norte',65),(7102,'Roxas','Zamboanga del Norte',65),(7103,'Sibutad','Zamboanga del Norte',65),(7104,'Rizal','Zamboanga del Norte',65),(7105,'Piñan','Zamboanga del Norte',65),(7106,'Polanco','Zamboanga del Norte',65),(7107,'Mutia','Zamboanga del Norte',65),(7108,'Sergio Osmeña','Zamboanga del Norte',65),(7109,'Katipunan','Zamboanga del Norte',65),(7110,'Manukan','Zamboanga del Norte',65),(7111,'Jose Dalman','Zamboanga del Norte',65),(7112,'Sindangan','Zamboanga del Norte',65),(7113,'Siayan','Zamboanga del Norte',65),(7114,'Salug','Zamboanga del Norte',65),(7115,'Liloy','Zamboanga del Norte',65),(7116,'Tampilisan','Zamboanga del Norte',65),(7117,'Labason','Zamboanga del Norte',65),(7118,'Gutalac','Zamboanga del Norte',65),(7119,'La Libertad','Zamboanga del Norte',65),(7120,'Siocon','Zamboanga del Norte',65),(7121,'Sirawai','Zamboanga del Norte',65),(7122,'Sibuco','Zamboanga del Norte',65),(7123,'Baliguian','Zamboanga del Norte',65),(7124,'Kalawit','Zamboanga del Norte',65),(7200,'Ozamiz City','Misamis Occidental',88),(7201,'Clarin','Misamis Occidental',88),(7202,'Tudela','Misamis Occidental',88),(7203,'Sinacaban','Misamis Occidental',88),(7204,'Jimenez','Misamis Occidental',88),(7205,'Panaon','Misamis Occidental',88),(7206,'Aloran','Misamis Occidental',88),(7207,'Oroquieta City','Misamis Occidental',88),(7208,'Lopez Jaena','Misamis Occidental',88),(7209,'Plaridel','Misamis Occidental',88),(7210,'Calamba','Misamis Occidental',88),(7211,'Baliangao','Misamis Occidental',88),(7212,'Sapang Dalaga','Misamis Occidental',88),(7213,'Concepcion','Misamis Occidental',88),(7214,'Tangub City','Misamis Occidental',88),(7215,'Bonifacio','Misamis Occidental',88),(8100,'Tagum City','Davao del Norte',84),(8101,'Carmen','Davao del Norte',84),(8102,'Asuncion','Davao del Norte',84),(8104,'New Corella','Davao del Norte',84),(8105,'Panabo City','Davao del Norte',84),(8112,'Santo Tomas','Davao del Norte',84),(8113,'Kapalong','Davao del Norte',84),(8118,'Babak','Davao del Norte',84),(8119,'Samal City','Davao del Norte',84),(8120,'Kaputian','Davao del Norte',84),(8300,'Tandag City','Surigao del Sur',86),(8301,'San Miguel','Surigao del Sur',86),(8302,'Tago','Surigao del Sur',86),(8303,'Bayabas','Surigao del Sur',86),(8304,'Cagwait','Surigao del Sur',86),(8305,'San Agustin','Surigao del Sur',86),(8306,'Marihatag','Surigao del Sur',86),(8307,'Lianga','Surigao del Sur',86),(8308,'Tagbina','Surigao del Sur',86),(8309,'Barobo','Surigao del Sur',86),(8310,'Hinatuan','Surigao del Sur',86),(8311,'Bislig City','Surigao del Sur',86),(8312,'Lingig','Surigao del Sur',86),(8313,'Cortes','Surigao del Sur',86),(8314,'Lanuza','Surigao del Sur',86),(8315,'Carmen','Surigao del Sur',86),(8316,'Madrid','Surigao del Sur',86),(8317,'Cantilan','Surigao del Sur',86),(8318,'Carrascal','Surigao del Sur',86),(8400,'Surigao City','Surigao del Norte',86),(8401,'San Francisco','Surigao del Norte',86),(8402,'Malimono','Surigao del Norte',86),(8403,'Tagana-an','Surigao del Norte',86),(8404,'Sison','Surigao del Norte',86),(8405,'Placer','Surigao del Norte',86),(8407,'Mainit','Surigao del Norte',86),(8408,'Bacuag','Surigao del Norte',86),(8409,'Gigaquit','Surigao del Norte',86),(8410,'Claver','Surigao del Norte',86),(8416,'Socorro','Surigao del Norte',86),(8417,'Dapa','Surigao del Norte',86),(8418,'Del Carmen','Surigao del Norte',86),(8419,'General Luna','Surigao del Norte',86),(8420,'Pilar','Surigao del Norte',86),(8421,'San Isidro','Surigao del Norte',86),(8422,'Santa Monica','Surigao del Norte',86),(8423,'San Benito','Surigao del Norte',86),(8424,'Burgos','Surigao del Norte',86),(8425,'Alegria','Surigao del Norte',86),(8500,'Prosperidad','Agusan del Sur',85),(8501,'San Francisco','Agusan del Sur',85),(8502,'Bayugan','Agusan del Sur',85),(8503,'Sibagat','Agusan del Sur',85),(8504,'Rosario','Agusan del Sur',85),(8505,'Trento','Agusan del Sur',85),(8506,'Bunawan','Agusan del Sur',85),(8507,'Loreto','Agusan del Sur',85),(8508,'La Paz','Agusan del Sur',85),(8509,'Veruela','Agusan del Sur',85),(8510,'Talacogon','Agusan del Sur',85),(8511,'San Luis','Agusan del Sur',85),(8512,'Santa Josefa','Agusan del Sur',85),(8513,'Esperanza','Agusan del Sur',85),(8600,'Butuan City','Agusan del Norte',85),(8601,'Buenavista','Agusan del Norte',85),(8602,'Nasipit','Agusan del Norte',85),(8604,'Magallanes','Agusan del Norte',85),(8605,'Cabadbaran City','Agusan del Norte',85),(8606,'Tubay','Agusan del Norte',85),(8607,'Jabonga','Agusan del Norte',85),(8608,'Santiago','Agusan del Norte',85),(8609,'Kitcharao','Agusan del Norte',85),(8610,'Las Nieves','Agusan del Norte',85),(8611,'Remedios T. Romualdez','Agusan del Norte',85),(8700,'Malaybalay City','Bukidnon',88),(8701,'Sumilao','Bukidnon',88),(8702,'Impasugong','Bukidnon',88),(8703,'Manolo Fortich','Bukidnon',88),(8704,'Malitbog','Bukidnon',88),(8705,'Phillips','Bukidnon',88),(8706,'Libona','Bukidnon',88),(8707,'Baungon','Bukidnon',88),(8708,'Talakag','Bukidnon',88),(8709,'Valencia City','Bukidnon',88),(8710,'Musuan','Bukidnon',88),(8711,'San Fernando','Bukidnon',88),(8712,'Don Carlos','Bukidnon',88),(8713,'Kadingilan','Bukidnon',88),(8714,'Maramag','Bukidnon',88),(8715,'Quezon','Bukidnon',88),(8716,'Kitaotao','Bukidnon',88),(8717,'Pangantucan','Bukidnon',88),(8718,'Kalilangan','Bukidnon',88),(8719,'Dangcagan','Bukidnon',88),(8720,'Kibawe','Bukidnon',88),(8721,'Damulog','Bukidnon',88),(8722,'Lantapan','Bukidnon',88),(8723,'Cabanglasan','Bukidnon',88),(9000,'Cagayan de Oro City','Misamis Oriental',88),(9001,'Tagoloan','Misamis Oriental',88),(9002,'Villanueva','Misamis Oriental',88),(9003,'Jasaan','Misamis Oriental',88),(9004,'Claveria','Misamis Oriental',88),(9005,'Balingasag','Misamis Oriental',88),(9006,'Lagonglong','Misamis Oriental',88),(9007,'Salay','Misamis Oriental',88),(9008,'Binuangan','Misamis Oriental',88),(9009,'Sugbongcogon','Misamis Oriental',88),(9010,'Kinoguitan','Misamis Oriental',88),(9011,'Balingoan','Misamis Oriental',88),(9012,'Talisayan','Misamis Oriental',88),(9013,'Medina','Misamis Oriental',88),(9014,'Gingoog City','Misamis Oriental',88),(9015,'Magsaysay','Misamis Oriental',88),(9016,'Opol','Misamis Oriental',88),(9017,'El Salvador','Misamis Oriental',88),(9018,'Alubijid','Misamis Oriental',88),(9019,'Laguindingan','Misamis Oriental',88),(9020,'Gitagum','Misamis Oriental',88),(9021,'Libertad','Misamis Oriental',88),(9022,'Initao','Misamis Oriental',88),(9023,'Naawan','Misamis Oriental',88),(9024,'Manticao','Misamis Oriental',88),(9025,'Lugait','Misamis Oriental',88),(9100,'Mambajao','Camiguin',88),(9101,'Mahinog','Camiguin',88),(9102,'Guinsiliban','Camiguin',88),(9103,'Sagay','Camiguin',88),(9104,'Catarman','Camiguin',88),(9200,'Iligan City','Lanao del Norte',63),(9201,'Linamon','Lanao del Norte',63),(9202,'Kauswagan','Lanao del Norte',63),(9203,'Matungao','Lanao del Norte',63),(9204,'Poona Piagapo','Lanao del Norte',63),(9205,'Bacolod','Lanao del Norte',63),(9206,'Maigo','Lanao del Norte',63),(9207,'Kolambugan','Lanao del Norte',63),(9208,'Pantao Ragat','Lanao del Norte',63),(9209,'Tubod','Lanao del Norte',63),(9210,'Baroy','Lanao del Norte',63),(9211,'Lala','Lanao del Norte',63),(9212,'Salvador','Lanao del Norte',63),(9213,'Sapad','Lanao del Norte',63),(9214,'Kapatagan','Lanao del Norte',63),(9215,'Sultan Naga Dimaporo','Lanao del Norte',63),(9216,'Nunungan','Lanao del Norte',63),(9217,'Baloi','Lanao del Norte',63),(9218,'Pantar','Lanao del Norte',63),(9219,'Munai','Lanao del Norte',63),(9220,'Tangcal','Lanao del Norte',63),(9221,'Magsaysay','Lanao del Norte',63),(9222,'Tagoloan','Lanao del Norte',63),(9300,'Malabang','Lanao del Sur',63),(9301,'Picong','Lanao del Sur',63),(9302,'Balabagan','Lanao del Sur',63),(9303,'Marogong','Lanao del Sur',63),(9304,'Tubaran','Lanao del Sur',63),(9305,'Butig','Lanao del Sur',63),(9306,'Lumbayanague','Lanao del Sur',63),(9307,'Lumbatan','Lanao del Sur',63),(9308,'Lumbaca-Unayan','Lanao del Sur',63),(9309,'Bayang','Lanao del Sur',63),(9310,'Binidayan','Lanao del Sur',63),(9311,'Ganassi','Lanao del Sur',63),(9312,'Pagayawan','Lanao del Sur',63),(9313,'Pualas','Lanao del Sur',63),(9314,'Madamba','Lanao del Sur',63),(9315,'Madalum','Lanao del Sur',63),(9316,'Bacolod-Kalawi','Lanao del Sur',63),(9317,'Tugaya','Lanao del Sur',63),(9318,'Balindong','Lanao del Sur',63),(9319,'Calanogas','Lanao del Sur',63),(9320,'Bumbaran','Lanao del Sur',63),(9321,'Tagoloan II','Lanao del Sur',63),(9400,'Kidapawan City','North Cotabato',64),(9401,'Makilala','North Cotabato',64),(9402,'M\'Lang','North Cotabato',64),(9403,'Tulunan','North Cotabato',64),(9404,'Magpet','North Cotabato',64),(9405,'President Roxas','North Cotabato',64),(9406,'Matalam','North Cotabato',64),(9407,'Kabacan','North Cotabato',64),(9408,'Carmen','North Cotabato',64),(9409,'Pikit','North Cotabato',64),(9410,'Midsayap','North Cotabato',64),(9411,'Libungan','North Cotabato',64),(9412,'Pigkawayan','North Cotabato',64),(9413,'Alamada','North Cotabato',64),(9414,'Antipas','North Cotabato',64),(9415,'Aleosan','North Cotabato',64),(9416,'Banisilan','North Cotabato',64),(9417,'Arakan','North Cotabato',64),(9700,'Marawi City','Lanao del Sur',63),(9701,'Saguiaran','Lanao del Sur',63),(9702,'Mulondo','Lanao del Sur',63),(9703,'Lumba-Bayabao','Lanao del Sur',63),(9704,'Tamparan','Lanao del Sur',63),(9705,'Poona Bayabao','Lanao del Sur',63),(9706,'Masiu','Lanao del Sur',63),(9708,'Bubong','Lanao del Sur',63),(9709,'Kapai','Lanao del Sur',63),(9710,'Piagapo','Lanao del Sur',63),(9711,'Marantao','Lanao del Sur',63),(9712,'Taraka','Lanao del Sur',63),(9713,'Ditsaan-Ramain','Lanao del Sur',63),(9714,'Buadiposo-Buntong','Lanao del Sur',63),(9715,'Maguing','Lanao del Sur',63),(9716,'Wao','Lanao del Sur',63);
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
INSERT INTO `book` VALUES (1209001,'Learning PHP, MySQL, JavaScript, & CSS','Robin Nixon','2012-09-03',330,0.0,27.00,NULL,0,'2014-01-10','If you\'re familiar with HTML, using the information in Learning PHP, MySQL, JavaScript and CSS, you will quickly learn how to build interactive, data-driven websites with the powerful combination of PHP, MySQL, JavaScript and CSS - the top technologies for creating modern sites. This hands-on guide explains each technology separately, shows you how to combine them, and introduces valuable web programming concepts such as objects, XHTML, cookies, and session management.\r\n\r\nCarefully paced for non-programmers, this second edition of the top-selling guide to web development now also provides an extensive introduction to CSS, and benefits from reader questions and suggestions about the first edition, making the new edition even easier to follow and more information-packed than ever.\r\n\r\nPlus, to ensure your have understood all the main points, you\'ll practice what you\'ve learned with review questions at the end of each chapter, and there\'s even a sample social networking platform built with the elements introduced in this book.','covers/1209001.jpg'),(1210001,'Programming Android Java Programming for the New Generation of Mobile Devices','Zigurd Mednieks','2012-10-19',650,0.0,29.39,22.89,1,'2013-12-20','Get thoroughly up to speed on Android programming, and learn how to create up-to-date user experiences for both handsets and tablets. With this book\'s extensively revised second edition, you\'ll focus on Android tools and programming essentials, including best practices for using Android 4 APIs. If you\'re experienced with Java or Objective-C, you\'ll gain the knowledge necessary for building well-engineered applications.\r\nProgramming Android is organized into four parts:\r\n- Part One helps programmers with some Java or iOS experience get off to a fast start with the Android SDK and Android programming basics.\r\n- Part Two delves into the Android framework, focusing on user interface and graphics class hierarchies, concurrency, and databases. It\'s a solid foundation for understanding of how the most important parts of an Android application work.\r\n- Part Three features code skeletons and patterns for accelerating the development of apps that use web data and Android 4 user interface conventions and Apis.\r\n- Part Four delivers practical coverage of Android\'s multimedia, search, location, sensor, and account Apis, plus the Native Development Kit, enabling developers to add advanced capabilities.\r\n\r\nThis updated edition of Programming Android focuses on the knowledge and developer priorities that are essential for successful Android development projects.','covers/1210001.jpg'),(1311001,'Turned','Morgan Rice','2013-11-14',100,0.0,6.99,1.13,0,'2013-11-23','In TURNED (Book #1 of the Vampire Journals series), eighteen year old Caitlin Paine finds herself uprooted from her nice suburb and forced to attend a dangerous New York City high school when her Mom moves again. The one ray of light in her new surroundings is Jonah, a new classmate who takes an instant liking to her. But before their romance can blossom, Caitlin suddenly finds herself changing. She is overcome by a superhuman strength, a sensitivity to light, a desire to feed--by feelings she does not understand. She seeks answers to what\'s happening to her, and her cravings lead her to the wrong place at the wrong time. Her eyes are opened to a hidden world, right beneath her feet, thriving underground in New York City. She finds herself caught between two dangerous covens, right in the middle of a vampire war. It is at this moment that Caitlin meets Caleb, a mysterious and powerful vampire who rescues her from the dark forces. He needs her to help lead him to the legendary lost artifact. And she needs him for answers, and for protection. Together, they will need to answer one crucial question: who was her real father? But Caitlin finds herself caught between two men as something else arises between them: a forbidden love. A love between the races that will risk both of their lives, and will force them to decide whether to risk it all for each other...','covers/1311001.jpg'),(1312001,'Microsoft Access 2013: Comprehensive (Shelly Cashman)','Philip J. Pratt','2013-12-31',35,0.0,133.98,NULL,0,'2014-01-03','Introduce your students to the latest that Microsoft Office has to offer with the new generation of Shelly Cashman Series books! For the past three decades, the Shelly Cashman Series has effectively introduced computer skills to millions of students. With MICROSOFT ACCESS 2013, we\'re continuing our history of innovation by enhancing our proven pedagogy to reflect the learning styles of today\'s students. In this text you\'ll find features that are specifically designed to engage students, improve retention, and prepare them for future success. Our trademark step-by-step, screen-by-screen approach now encourages students to expand their understanding of MICROSOFT ACCESS 2013 through experimentation, critical thought, and personalization. With these enhancements and more, the Shelly Cashman Series continues to deliver the most effective educational materials for you and your students.','covers/1312001.jpg'),(8608001,'The Lord of the Rings - The Fellowship of the Ring','J.R.R. Tolkien','1986-08-12',2,0.0,9.43,8.09,0,'2014-01-10','The dark, fearsome Ringwraiths are searching for a Hobbit. Frodo Baggins knows that they are seeking him and the Ring he bearsâ€”the Ring of Power that will enable evil Sauron to destroy all that is good in Middle-earth. Now it is up to Frodo and his faithful servant, Sam, with a small band of companions, to carry the Ring to the one place it can be destroyed: Mount Doom, in the very center of Sauronâ€™s realm.','covers/8608001.jpg'),(9909001,'Harry Potter and the Sorcerer\'s Stone','J.K. Rowling','1999-09-08',3,0.0,6.59,NULL,0,'2013-08-24','Harry Potter has no idea how famous he is. That\'s because he\'s being raised by his miserable aunt and uncle who are terrified Harry will learn that he\'s really a wizard, just as his parents were. But everything changes when Harry is summoned to attend an infamous school for wizards, and he begins to discover some clues about his illustrious birthright. From the surprising way he is greeted by a lovable giant, to the unique curriculum and colorful faculty at his unusual school, Harry finds himself drawn deep inside a mystical world he never knew existed and closer to his own noble destiny.','covers/9909001.jpg');
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
INSERT INTO `noshipping` VALUES ('Abra',74),('Apayao',74),('Basilan',62),('Batanes',78),('Benguet',74),('Cagayan',78),('Catanduanes',52),('Compostela Valley',87),('Davao del Sur',82),('Davao Oriental',87),('Dinagat Islands',86),('Ifugao',74),('Ilocos Norte',77),('Ilocos Sur',77),('Isabela',78),('Kalinga',74),('La Union',72),('Maguindanao',64),('Masbate',56),('Mountain Province',74),('Nueva Vizcaya',78),('Pangasinan',75),('Quirino',78),('Sarangani',83),('South Cotabato',83),('Sultan Kudarat',64),('Sulu',68),('Tawi-Tawi',68),('Zamboanga Sibugay',62);
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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
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
INSERT INTO `user` VALUES ('custcust','customer@safaribooks.com','1fae942f9fb3eba290e70b2031277ae850e5e49e',NULL,'Customer','Customer','Basak','','Cebu City','Cebu',6000,2147483647,2147483647,1,0),('emplempl','employee@safaribooks.com','1fae942f9fb3eba290e70b2031277ae850e5e49e',NULL,'Employee','Employee','Basak','','Cebu City','Cebu',6000,2147483647,2147483647,2,0),('manamana','manager@safaribooks.com','1fae942f9fb3eba290e70b2031277ae850e5e49e',NULL,'Manager','Manager','Basak','','Cebu City','Cebu',6000,2147483647,1234567890,3,0);
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

-- Dump completed on 2014-01-25 13:21:44
