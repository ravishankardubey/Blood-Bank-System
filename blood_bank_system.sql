-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.9-MariaDB


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema blood_bank_system
--

CREATE DATABASE IF NOT EXISTS blood_bank_system;
USE blood_bank_system;

--
-- Definition of table `blood_request`
--

DROP TABLE IF EXISTS `blood_request`;
CREATE TABLE `blood_request` (
  `sn` int(5) NOT NULL,
  `receiver` varchar(45) NOT NULL,
  `hospital` varchar(45) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `units` int(5) NOT NULL,
  `status` varchar(15) NOT NULL,
  `time_stamp` datetime NOT NULL,
  PRIMARY KEY (`sn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_request`
--

/*!40000 ALTER TABLE `blood_request` DISABLE KEYS */;
/*!40000 ALTER TABLE `blood_request` ENABLE KEYS */;


--
-- Definition of table `blood_sample`
--

DROP TABLE IF EXISTS `blood_sample`;
CREATE TABLE `blood_sample` (
  `email` varchar(45) NOT NULL,
  `a_plus` int(5) NOT NULL DEFAULT '0',
  `b_plus` int(5) NOT NULL DEFAULT '0',
  `o_plus` int(5) NOT NULL DEFAULT '0',
  `a_neg` int(5) NOT NULL DEFAULT '0',
  `b_neg` int(5) NOT NULL DEFAULT '0',
  `o_neg` int(5) NOT NULL DEFAULT '0',
  `ab_plus` int(5) NOT NULL DEFAULT '0',
  `ab_neg` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_sample`
--

/*!40000 ALTER TABLE `blood_sample` DISABLE KEYS */;
/*!40000 ALTER TABLE `blood_sample` ENABLE KEYS */;


--
-- Definition of table `hospital`
--

DROP TABLE IF EXISTS `hospital`;
CREATE TABLE `hospital` (
  `hname` varchar(45) NOT NULL,
  `cname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `mob` bigint(13) NOT NULL,
  `city` varchar(45) NOT NULL,
  `pin` int(10) NOT NULL,
  `address` text NOT NULL,
  `time_stamp` datetime NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

/*!40000 ALTER TABLE `hospital` DISABLE KEYS */;
/*!40000 ALTER TABLE `hospital` ENABLE KEYS */;


--
-- Definition of table `receiver`
--

DROP TABLE IF EXISTS `receiver`;
CREATE TABLE `receiver` (
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `blood_group` varchar(3) NOT NULL,
  `weight` int(3) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `mob` bigint(10) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(45) NOT NULL,
  `pin` int(10) NOT NULL,
  `time_stamp` datetime NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receiver`
--

/*!40000 ALTER TABLE `receiver` DISABLE KEYS */;
/*!40000 ALTER TABLE `receiver` ENABLE KEYS */;


--
-- Definition of table `user_details`
--

DROP TABLE IF EXISTS `user_details`;
CREATE TABLE `user_details` (
  `email` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`email`),
  KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

/*!40000 ALTER TABLE `user_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_details` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
