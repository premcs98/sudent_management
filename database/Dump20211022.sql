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
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin_login` (
  `admin_id` int NOT NULL AUTO_INCREMENT,
  `admin_user_name` varchar(25) NOT NULL,
  `admin_password` varchar(25) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_login`
--

LOCK TABLES `admin_login` WRITE;
/*!40000 ALTER TABLE `admin_login` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emp_attendance`
--

DROP TABLE IF EXISTS `emp_attendance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `emp_attendance` (
  `emp_id` int NOT NULL,
  `emp_status` varchar(25) NOT NULL,
  `emp_user_name` varchar(25) NOT NULL,
  `emp_department` varchar(25) NOT NULL,
  `section` varchar(25) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  KEY `emp_id_idx` (`emp_id`),
  KEY `emp_department_idx` (`emp_department`),
  KEY `emp_user_name_idx` (`emp_user_name`),
  CONSTRAINT `emp_department` FOREIGN KEY (`emp_department`) REFERENCES `employee_info` (`emp_department`),
  CONSTRAINT `emp_id` FOREIGN KEY (`emp_id`) REFERENCES `employee_info` (`emp_id`),
  CONSTRAINT `emp_user_name` FOREIGN KEY (`emp_user_name`) REFERENCES `employee_info` (`emp_user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emp_attendance`
--

LOCK TABLES `emp_attendance` WRITE;
/*!40000 ALTER TABLE `emp_attendance` DISABLE KEYS */;
/*!40000 ALTER TABLE `emp_attendance` ENABLE KEYS */;
UNLOCK TABLES;

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

--
-- Table structure for table `stu_attendance`
--

DROP TABLE IF EXISTS `stu_attendance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `stu_attendance` (
  `s_id` int NOT NULL,
  `admission_date` date NOT NULL,
  `admission_status` char(25) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `department` varchar(25) NOT NULL,
  `section` varchar(25) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  KEY `s_id_idx` (`s_id`),
  KEY `department_idx` (`department`),
  KEY `section_idx` (`section`),
  KEY `user_name_idx` (`user_name`),
  CONSTRAINT `department` FOREIGN KEY (`department`) REFERENCES `student_info` (`department`),
  CONSTRAINT `s_id` FOREIGN KEY (`s_id`) REFERENCES `student_info` (`s_id`),
  CONSTRAINT `section` FOREIGN KEY (`section`) REFERENCES `student_info` (`section`),
  CONSTRAINT `user_name` FOREIGN KEY (`user_name`) REFERENCES `student_info` (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stu_attendance`
--

LOCK TABLES `stu_attendance` WRITE;
/*!40000 ALTER TABLE `stu_attendance` DISABLE KEYS */;
/*!40000 ALTER TABLE `stu_attendance` ENABLE KEYS */;
UNLOCK TABLES;

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

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subject` (
  `sub_id` int NOT NULL AUTO_INCREMENT,
  `sub_name` varchar(25) NOT NULL,
  `department` varchar(25) NOT NULL,
  `academic_year` year NOT NULL,
  `semester` varchar(25) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`sub_id`,`sub_name`,`department`,`academic_year`,`semester`),
  UNIQUE KEY `sub_name` (`sub_name`),
  UNIQUE KEY `department` (`department`),
  UNIQUE KEY `academic_year` (`academic_year`),
  UNIQUE KEY `semester` (`semester`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subject`
--

LOCK TABLES `subject` WRITE;
/*!40000 ALTER TABLE `subject` DISABLE KEYS */;
/*!40000 ALTER TABLE `subject` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'student_management'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-10-22 18:29:36
