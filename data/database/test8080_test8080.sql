-- MySQL dump 10.13  Distrib 8.0.19, for macos10.15 (x86_64)
--
-- Host: 127.0.0.1    Database: test8080
-- ------------------------------------------------------
-- Server version	5.7.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `test8080`
--

DROP TABLE IF EXISTS `test8080`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `test8080` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('DRAFT','ACTIVE','DELETED') DEFAULT 'DRAFT',
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test8080`
--

LOCK TABLES `test8080` WRITE;
/*!40000 ALTER TABLE `test8080` DISABLE KEYS */;
INSERT INTO `test8080` VALUES (1,'Заразившегося коронавирусом Зеленского госпитализировали','Президент Украины Владимир Зеленский и руководитель его офиса Андрей Ермак находятся в клинической больнице \"Феофания\" Государственного управления делами, там их лечат от COVID-19, сообщил \"Украинской правде\" советник Ермака Михаил Подоляк.','2020-11-12 07:51:27','DRAFT',NULL),(2,'Правящий блок Армении предложил оппозиции назвать альтернативу миротворцам в Карабахе','ЕРЕВАН, 12 ноября. / ТАСС/. Правящий блок \"Мой шаг\" предложил армянской оппозиции выступить с заявлением по трем пунктам, в том числе о готовности оппозиции отказаться от российского посредничества в нагорнокарабахском урегулировании и продолжить войну.','2020-11-12 08:19:36','DRAFT',NULL),(3,'1234','22','2020-11-14 08:28:34','DRAFT',NULL),(4,'dfsfd4','vvfdvdvdfvdfdsbb','2020-11-14 08:28:53','DRAFT',NULL);
/*!40000 ALTER TABLE `test8080` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-19 12:26:51
