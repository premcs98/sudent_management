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
-- Table structure for table `student_info`
--

DROP TABLE IF EXISTS `student_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `student_info` (
  `s_id` int NOT NULL AUTO_INCREMENT,
  `fname` char(25) NOT NULL,
  `mname` char(25) NOT NULL,
  `lname` char(25) NOT NULL,
  `f_fname` char(25) NOT NULL,
  `f_mname` char(25) NOT NULL,
  `f_lname` char(25) NOT NULL,
  `m_fname` char(25) NOT NULL,
  `m_mname` char(25) NOT NULL,
  `m_lname` char(25) NOT NULL,
  `dob` date NOT NULL,
  `religion` char(25) NOT NULL,
  `caste` char(25) NOT NULL,
  `f_occupation` char(25) NOT NULL,
  `m_occupaion` char(25) NOT NULL,
  `nationality` char(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `r_address` varchar(25) NOT NULL,
  `s_email` varchar(25) NOT NULL,
  `pincode` int NOT NULL,
  `academic_from` year NOT NULL,
  `academic_to` year NOT NULL,
  `department` varchar(25) NOT NULL,
  `section` varchar(25) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`s_id`,`section`,`department`,`user_name`),
  UNIQUE KEY `department_UNIQUE` (`department`),
  UNIQUE KEY `section_UNIQUE` (`section`),
  UNIQUE KEY `user_name_UNIQUE` (`user_name`),
  UNIQUE KEY `s_id_UNIQUE` (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_info`
--

LOCK TABLES `student_info` WRITE;
/*!40000 ALTER TABLE `student_info` DISABLE KEYS */;
INSERT INTO `student_info` VALUES (1,'prem','c','s','saravanan','c','s','krishnaveni','c','s','1998-10-26','hindu','bc','farmer','housewife','indian','2/75b1','2/75b1','',639004,2016,2020,'cse','c','16csr151','hello','2021-10-20 00:00:00','2021-10-19 18:30:00',NULL);
/*!40000 ALTER TABLE `student_info` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-10-22 17:45:59
