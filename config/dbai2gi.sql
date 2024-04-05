-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 18, 2024 at 06:46 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbai2gi`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `employee_id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `date_of_birth` varchar(20) DEFAULT NULL,
  `gender` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `social_security_card` varchar(50) NOT NULL,
  `social_security_number` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `alt_phone_number` varchar(20) NOT NULL,
  `home_address` varchar(255) DEFAULT NULL,
  `created_on` varchar(20) DEFAULT NULL,
  `updated_on` varchar(20) DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '',
  PRIMARY KEY (`employee_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_id`, `full_name`, `date_of_birth`, `gender`, `social_security_card`, `social_security_number`, `email`, `password`, `role`, `phone_number`, `alt_phone_number`, `home_address`, `created_on`, `updated_on`, `status`) VALUES
(6, 'Sumesh K', '', '', '', '', 'sandkobiz@gmail.com', '123', 'Employee', '', '', '', '2024-03-13 17:20:23', '2024-03-13 17:20:23', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `employment_details`
--

DROP TABLE IF EXISTS `employment_details`;
CREATE TABLE IF NOT EXISTS `employment_details` (
  `employment_details_id` int NOT NULL,
  `employee_id` int DEFAULT NULL,
  `employee_reg_id` varchar(50) NOT NULL,
  `position` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `manager_supervisor` int DEFAULT NULL,
  `join_date` varchar(20) NOT NULL,
  `employment_status` varchar(1) DEFAULT NULL,
  `branch` int DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  `pay_frequency` varchar(20) DEFAULT NULL,
  `account_holder_name` varchar(255) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `bank_branch_name` varchar(255) NOT NULL,
  `account_number` varchar(20) NOT NULL,
  `bank_name_ifsc_code` varchar(20) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `created_on` varchar(20) DEFAULT NULL,
  `updated_on` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`employment_details_id`),
  UNIQUE KEY `account_number` (`account_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
