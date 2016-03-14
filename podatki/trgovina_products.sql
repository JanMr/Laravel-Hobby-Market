-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: trgovina
-- ------------------------------------------------------
-- Server version	5.7.10

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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `packing_unit_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `unit_price` double(8,2) NOT NULL,
  `img_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'GARNITURA ORODJA MTECH 1/2 IN 1/4 144 DELNA QG',4,2,'\r\n                 Obseg dobave: 13 kos nasadni ključi 6,3 mm (1/4\") zevi Quattro Grip 4-14 mm, 11 kos dolgi ključi 6,3 mm (1/4\") 4-14 mm, ročaj, reducirna nastavka, 14 kos viličasto obročni ključi 6-19 mm, 9 kos ključi inbus 1,5-10 mm, 20 kos nasadni ključi 12,7 mm (1/2\") QG 8-32 mm, 5 kos dolgi ključi 8-19 mm, 4 kos podaljški, TM glava, T ročica, raglji, kardanska zgloba, ključa za svečke 16 in 21 mm, 50 kos vijačni nastavki inbus, križni PH, PZ,matični, ploščati, torx, magnetni nastavek, ključ s polžem 200 mm, klešče kombi 150 mm, papiga 250 mm, ščipalke 150 mm, teleskopski ročaj v kovčku.\r\n       ',270.00,'http://cdn.merkurimg.si/media/catalog/product/cache/1/image/163b81649b7ef7bc8a00b0066e59ae0a/g/a/garnitura-orodja-mtech-1_2-in-1_4-144-delna-qg_1579383_.jpg','2016-03-12 17:55:49','2016-03-12 17:55:49'),(2,'KLEŠČE ZA SNEM. IZOLACIJE UNIOR 160/0.6-10 MM KROMIRANE ART. 478BI',1,2,'Klešče za snemanje izolacije - 478/1BI, material: specialno orodno jeklo, kovane, v celoti poboljšane, robovi rezil induktivno kaljeni, glava klešč polirana, površinska zaščita: kromirane po EN12540, ročaji izolirani z dvo-komponentnimi tulci, Sposobnost snemanja: max. od 0,6-10mm?\r\n                        ',21.50,'http://cdn.merkurimg.si/media/catalog/product/cache/1/image/163b81649b7ef7bc8a00b0066e59ae0a/k/l/klesce-za-snem.izol.-unior-160_0.6-10-mm-kromirane-art.-478bi_791578_.jpg','2016-03-13 07:44:09','2016-03-13 07:44:09'),(3,'TESARSKO KLADIVO UNIOR 550 G Z MAGNETOM ART. 805/1',1,2,'Kladivo krovsko z magnetom - 805A, material: specialno orodno jeklo, kovano, udarna ploskev in konica induktivno kaljeni, površinska zaščita: lakirano, kromiran kovinski ročaj izoliran s plastičnim tulcem, v celoti izdelan v skladu s standardom DIN 7239\r\n                        ',42.50,'http://cdn.merkurimg.si/media/catalog/product/cache/1/image/163b81649b7ef7bc8a00b0066e59ae0a/t/e/tesarsko-kladivo-unior-550-g-z-magnetom-art.-805_1_630703_.jpg','2016-03-13 08:06:57','2016-03-13 08:06:57');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-03-14 11:47:20
