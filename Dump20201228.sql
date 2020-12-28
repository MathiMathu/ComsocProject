-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: compsoc
-- ------------------------------------------------------
-- Server version	8.0.22

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
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `article` (
  `ArticleID` int NOT NULL AUTO_INCREMENT,
  `RegistrationNo` varchar(12) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  PRIMARY KEY (`ArticleID`),
  KEY `RegNo1_idx` (`RegistrationNo`),
  CONSTRAINT `RegNo1` FOREIGN KEY (`RegistrationNo`) REFERENCES `students` (`RegistrationNo`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `competionregister`
--

DROP TABLE IF EXISTS `competionregister`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `competionregister` (
  `CompetitionID` int NOT NULL,
  `RegistrationNo` varchar(12) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `YOS` tinyint(1) NOT NULL,
  `Email` varchar(50) NOT NULL,
  PRIMARY KEY (`CompetitionID`),
  KEY `RegNo4_idx` (`RegistrationNo`),
  CONSTRAINT `RegNo4` FOREIGN KEY (`RegistrationNo`) REFERENCES `students` (`RegistrationNo`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `competionregister`
--

LOCK TABLES `competionregister` WRITE;
/*!40000 ALTER TABLE `competionregister` DISABLE KEYS */;
/*!40000 ALTER TABLE `competionregister` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `competition`
--

DROP TABLE IF EXISTS `competition`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `competition` (
  `CompetitionID` int NOT NULL AUTO_INCREMENT,
  `CompetitionName` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Duration` int NOT NULL,
  PRIMARY KEY (`CompetitionID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `competition`
--

LOCK TABLES `competition` WRITE;
/*!40000 ALTER TABLE `competition` DISABLE KEYS */;
/*!40000 ALTER TABLE `competition` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eventdetails`
--

DROP TABLE IF EXISTS `eventdetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `eventdetails` (
  `EventID` int NOT NULL,
  `Title` varchar(50) NOT NULL,
  `StartDate` date NOT NULL,
  `StartTime` time NOT NULL,
  `EventDuration` int NOT NULL,
  `Guest` varchar(50) NOT NULL,
  `Venue` varchar(50) NOT NULL,
  PRIMARY KEY (`EventID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventdetails`
--

LOCK TABLES `eventdetails` WRITE;
/*!40000 ALTER TABLE `eventdetails` DISABLE KEYS */;
/*!40000 ALTER TABLE `eventdetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `financesupport`
--

DROP TABLE IF EXISTS `financesupport`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `financesupport` (
  `RegistrationNo` varchar(12) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `MonthlyIncome` decimal(8,2) NOT NULL,
  `NoOfSiblings` tinyint NOT NULL,
  `FatherName` varchar(50) NOT NULL,
  `FatherOccupation` varchar(50) DEFAULT NULL,
  `MotherName` varchar(50) NOT NULL,
  `MotherOccupation` varchar(50) DEFAULT NULL,
  KEY `RegNo3_idx` (`RegistrationNo`),
  CONSTRAINT `RegNo3` FOREIGN KEY (`RegistrationNo`) REFERENCES `students` (`RegistrationNo`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `financesupport`
--

LOCK TABLES `financesupport` WRITE;
/*!40000 ALTER TABLE `financesupport` DISABLE KEYS */;
/*!40000 ALTER TABLE `financesupport` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `galleries` (
  `GalleryID` int NOT NULL AUTO_INCREMENT,
  `GalleryName` varchar(50) NOT NULL,
  PRIMARY KEY (`GalleryID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries`
--

LOCK TABLES `galleries` WRITE;
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
/*!40000 ALTER TABLE `galleries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `member` (
  `MemberID` int NOT NULL AUTO_INCREMENT,
  `RegistrationNo` varchar(12) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `MemberPosition` varchar(50) NOT NULL,
  PRIMARY KEY (`MemberID`),
  KEY `RegistrationNo_idx` (`RegistrationNo`),
  CONSTRAINT `RegistrationNo` FOREIGN KEY (`RegistrationNo`) REFERENCES `students` (`RegistrationNo`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parkregister`
--

DROP TABLE IF EXISTS `parkregister`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `parkregister` (
  `BookID` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `RegistrationNo` varchar(12) NOT NULL,
  `Event` varchar(50) NOT NULL,
  PRIMARY KEY (`BookID`),
  KEY `RegNo5_idx` (`RegistrationNo`),
  CONSTRAINT `RegNo5` FOREIGN KEY (`RegistrationNo`) REFERENCES `students` (`RegistrationNo`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parkregister`
--

LOCK TABLES `parkregister` WRITE;
/*!40000 ALTER TABLE `parkregister` DISABLE KEYS */;
/*!40000 ALTER TABLE `parkregister` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seminar`
--

DROP TABLE IF EXISTS `seminar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `seminar` (
  `SeminarID` int NOT NULL AUTO_INCREMENT,
  `RegistrationNo` varchar(12) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Place` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Language` varchar(30) NOT NULL,
  PRIMARY KEY (`SeminarID`),
  KEY `RegNo2_idx` (`RegistrationNo`),
  CONSTRAINT `RegNo` FOREIGN KEY (`RegistrationNo`) REFERENCES `students` (`RegistrationNo`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seminar`
--

LOCK TABLES `seminar` WRITE;
/*!40000 ALTER TABLE `seminar` DISABLE KEYS */;
/*!40000 ALTER TABLE `seminar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `students` (
  `RegistrationNo` varchar(12) NOT NULL,
  `Fname` varchar(40) NOT NULL,
  `Lname` varchar(40) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `YOS` tinyint(1) NOT NULL,
  PRIMARY KEY (`RegistrationNo`),
  UNIQUE KEY `Email_UNIQUE` (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subject` (
  `SeminarID` int NOT NULL,
  `RegistrationNo` varchar(12) NOT NULL,
  `SubjectName` varchar(50) NOT NULL,
  KEY `SeminarID_idx` (`SeminarID`),
  KEY `RegNo2_idx` (`RegistrationNo`),
  CONSTRAINT `RegNo2` FOREIGN KEY (`RegistrationNo`) REFERENCES `students` (`RegistrationNo`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `SeminarID` FOREIGN KEY (`SeminarID`) REFERENCES `seminar` (`SeminarID`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subject`
--

LOCK TABLES `subject` WRITE;
/*!40000 ALTER TABLE `subject` DISABLE KEYS */;
/*!40000 ALTER TABLE `subject` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-28 14:34:24
