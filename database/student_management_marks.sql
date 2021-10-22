CREATE DATABASE  IF NOT EXISTS `student_management` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `student_management`;
-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: student_management
-- ------------------------------------------------------
-- Server version	8.0.27

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
-- Table structure for table `marks`
--

DROP TABLE IF EXISTS `marks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `marks` (
  `s_id` int NOT NULL,
  `user_name` varchar(25) DEFAULT NULL,
  `sub_id` int NOT NULL,
  `sub_name` varchar(25) NOT NULL,
  `department` varchar(25) NOT NULL,
  `academic_year` year NOT NULL,
  `semester` varchar(25) NOT NULL,
  `percentage` decimal(3,2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`percentage`),
  KEY `s_id_idx` (`s_id`),
  KEY `user_name_idx` (`user_name`),
  KEY `sub_id_idx` (`sub_id`),
  KEY `sub_name_idx` (`sub_name`),
  KEY `department_idx` (`department`),
  KEY `academic_year_idx` (`academic_year`),
  KEY `semester_idx` (`semester`),
  CONSTRAINT `academic_year` FOREIGN KEY (`academic_year`) REFERENCES `subject` (`academic_year`),
  CONSTRAINT `department_ik` FOREIGN KEY (`department`) REFERENCES `subject` (`department`),
  CONSTRAINT `s_id_ik` FOREIGN KEY (`s_id`) REFERENCES `student_info` (`s_id`),
  CONSTRAINT `semester` FOREIGN KEY (`semester`) REFERENCES `subject` (`semester`),
  CONSTRAINT `sub_id` FOREIGN KEY (`sub_id`) REFERENCES `subject` (`sub_id`),
  CONSTRAINT `sub_name` FOREIGN KEY (`sub_name`) REFERENCES `subject` (`sub_name`),
  CONSTRAINT `user_name_ik` FOREIGN KEY (`user_name`) REFERENCES `student_info` (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marks`
--

LOCK TABLES `marks` WRITE;
/*!40000 ALTER TABLE `marks` DISABLE KEYS */;
/*!40000 ALTER TABLE `marks` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-10-22 17:46:00
