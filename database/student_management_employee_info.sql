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
-- Table structure for table `employee_info`
--

DROP TABLE IF EXISTS `employee_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employee_info` (
  `emp_id` int NOT NULL AUTO_INCREMENT,
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
  `relegion` char(25) NOT NULL,
  `caste` char(25) NOT NULL,
  `nationaliy` char(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `r_address` varchar(25) NOT NULL,
  `pincode` int NOT NULL,
  `emp_email` varchar(25) NOT NULL,
  `emp_degree` varchar(25) NOT NULL,
  `emp_area_of_specalization` varchar(25) NOT NULL,
  `emp_sslc_percent` decimal(3,2) NOT NULL,
  `emp_hslc_percent` decimal(3,2) NOT NULL,
  `emp_degree_percent` decimal(3,2) NOT NULL,
  `emp_user_name` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `emp_department` varchar(25) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`emp_id`,`emp_user_name`,`emp_department`),
  UNIQUE KEY `emp_user_name_UNIQUE` (`emp_user_name`),
  UNIQUE KEY `emp_department_UNIQUE` (`emp_department`),
  UNIQUE KEY `emp_id_UNIQUE` (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee_info`
--

LOCK TABLES `employee_info` WRITE;
/*!40000 ALTER TABLE `employee_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `employee_info` ENABLE KEYS */;
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
