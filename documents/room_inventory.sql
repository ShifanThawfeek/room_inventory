-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 27, 2022 at 08:25 AM
-- Server version: 5.7.24
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `room_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_no` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nic` varchar(45) DEFAULT NULL,
  `address` text,
  `mobile` varchar(45) DEFAULT NULL,
  `secondary_contact` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL,
  `room_category` enum('Single','Shared') DEFAULT NULL,
  `advance_payment` double(22,2) DEFAULT NULL,
  `monthly_rental` double(22,2) DEFAULT NULL,
  `room_entered_date` date DEFAULT NULL,
  `outstanding` decimal(22,2) NOT NULL DEFAULT '0.00',
  `status` enum('Active','Inactive') NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `reg_no` (`reg_no`),
  UNIQUE KEY `nic` (`nic`),
  UNIQUE KEY `mobile` (`mobile`),
  KEY `room_no` (`room_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `reg_no`, `name`, `nic`, `address`, `mobile`, `secondary_contact`, `email`, `room_id`, `room_category`, `advance_payment`, `monthly_rental`, `room_entered_date`, `outstanding`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'A1003', 'Shilmy Yoosuf', '898563081V', '42, Godapola Road', '777936796', '2424234234', 'shilmy.yoosuf@gmail.com', 1, 'Single', 5000.00, 6000.00, '2021-02-22', '0.00', 'Active', 1, '2018-01-22 09:55:00', 1, '2018-01-22 09:55:00'),
(2, 'A1001', 'Shilmy Y', '891683562V', 'No. 34/16A, Mayura Gardens, Mayura Mawatha,\r\nBellanwila, Boralesgamuwa', '777937796', '2424234234', 'shilmy.yoosuf@gmail.com', 2, 'Shared', 5000.00, 6000.00, '2004-02-22', '0.00', 'Active', 1, '2018-01-22 09:51:00', 1, '2018-01-22 09:51:00'),
(3, 'A1002', 'Yoosuf A', '891683569V', '27A Amarasekara Mawatha, Colombo', '777937789', '2424234234', 'shilmy.yoosuf@gmail.com', 3, 'Single', 5000.12, 6000.12, '2014-02-22', '0.00', 'Inactive', 1, '2018-01-22 09:53:00', 1, '2018-01-22 09:53:00'),
(5, 'A1004', 'Shermal P', '891563201V', 'Address', '777954475', '777998989', 'shilmy@dtech.lk', 4, 'Single', 5000.00, 60000.00, '2031-01-22', '0.00', 'Active', 1, '2018-01-22 10:34:00', 1, '2018-01-22 10:34:00'),
(6, 'A1006', 'Dilani Ravihari', '898963081V', '27A,\r\nAmarasekara Mawatha\r\nColombo 05', '777986797', '777986797', 'softwarepurchase@dtech', 2, 'Shared', 5000.12, 6000.12, '2020-01-22', '0.00', 'Active', 1, '2018-01-22 13:12:00', 1, '2018-01-22 13:12:00'),
(7, 'A1007', 'Shilmy Yoosuf', '1533529556V', '42, Godapola Road', '777565563', '115663562', 'shilmy2@gmail.com', 1, 'Single', 5000.00, 6000.00, '2021-02-22', '0.00', 'Active', 1, '2018-01-22 09:55:00', 1, '2018-01-22 09:55:00'),
(8, 'A1008', 'Shilmy Y', '15324549524X', 'No. 34/16A, Mayura Gardens, Mayura Mawatha,\r\nBellanwila, Boralesgamuwa', '777556563', '115856562', 'shilmy3@gmail.com', 2, 'Shared', 5000.00, 6000.00, '2004-02-22', '0.00', 'Active', 1, '2018-01-22 09:51:00', 1, '2018-01-22 09:51:00'),
(9, 'A1009', 'Yoosuf A', '1536623556V', '27A Amarasekara Mawatha, Colombo', '777547563', '116049562', 'shilmy.yoosuf@gmail.com', 3, 'Single', 5000.12, 6000.12, '2014-02-22', '0.00', 'Active', 1, '2018-01-22 09:53:00', 1, '2018-01-22 09:53:00'),
(10, 'A1010', 'Shermal P', '1523549524X', 'Address', '777538563', '116242562', 'shilmy@dtech.lk', 4, 'Single', 5000.00, 60000.00, '2031-01-22', '0.00', 'Active', 1, '2018-01-22 10:34:00', 1, '2018-01-22 10:34:00'),
(11, 'A1011', 'Dilani ', '1535223556V', '27A,\r\nAmarasekara Mawatha\r\nColombo 05', '777529563', '116435562', 'softwarepurchase@dtech', 2, 'Shared', 5000.12, 6000.12, '2020-01-22', '0.00', 'Inactive', 1, '2018-01-22 13:12:00', 1, '2018-01-22 13:12:00'),
(12, 'A1012', 'Ravihari', '15235549524X', '27A Amarasekara Mawatha, Colombo', '777520563', '116628562', '', 1, 'Single', 6000.00, 6000.00, '2021-02-22', '100.00', 'Active', 1, '2018-01-22 09:55:00', 1, '2018-01-22 09:55:00'),
(13, 'A1013', 'Perera', '23', '27A Amarasekara Mawatha, Colombo', '777511563', '116821562', '', 2, 'Shared', 5000.00, 6000.00, '2004-02-22', '500.00', 'Active', 1, '2018-01-22 09:55:00', 1, '2018-01-22 09:55:00'),
(14, 'A1014', 'Amarasinga', '15331524X', '27A Amarasekara Mawatha, Colombo', '777502563', '117014562', '', 3, 'Single', 4000.00, 6000.12, '2014-02-22', '300.00', 'Active', 1, '2018-01-22 09:55:00', 1, '2018-01-22 09:55:00'),
(15, 'A1015', 'Dulaj', '15361356V', '27A Amarasekara Mawatha, Colombo', '777493563', '117207562', '', 4, 'Single', 3000.00, 60000.00, '2031-01-22', '0.00', 'Active', 1, '2018-01-22 09:55:00', 1, '2018-01-22 09:55:00'),
(16, 'A1016', 'Kanchana', '1532349524X', '27A Amarasekara Mawatha, Colombo', '777484563', '117400562', '', 2, 'Shared', 2000.00, 6000.12, '2020-01-22', '0.00', 'Inactive', 1, '2018-01-22 09:55:00', 1, '2018-01-22 09:55:00'),
(17, 'A1017', 'Imalsha', '152489556V', '27A Amarasekara Mawatha, Colombo', '777475563', '117593562', '', 1, 'Single', 500.00, 6000.00, '2021-02-22', '0.00', 'Active', 1, '2018-01-22 09:55:00', 1, '2018-01-22 09:55:00'),
(18, 'A1018', 'Champa', '15324524X', '27A Amarasekara Mawatha, Colombo', '777466563', '117786562', '', 5, 'Shared', 6000.00, 6000.00, '2004-02-22', '200.00', 'Active', 1, '2018-01-22 09:55:00', 1, '2018-01-22 09:55:00'),
(19, 'A1019', 'Randima', '15366895423V', '27A Amarasekara Mawatha, Colombo', '777457563', '117979562', '', 6, 'Single', 5000.00, 6000.12, '2014-02-22', '1000.00', 'Active', 1, '2018-01-22 09:55:00', 1, '2018-01-22 09:55:00'),
(20, 'A1020', 'Tharindu', '113549524X', '27A Amarasekara Mawatha, Colombo', '777448563', '118172562', '', 7, 'Single', 4000.00, 60000.00, '2031-01-22', '2000.00', 'Active', 1, '2018-01-22 09:55:00', 1, '2018-01-22 09:55:00'),
(21, 'A1021', 'Rathnayaka', '153661316V', '27A Amarasekara Mawatha, Colombo', '777439563', '118365562', '', 8, 'Shared', 3000.00, 6000.12, '2020-01-22', '2000.00', 'Inactive', 1, '2018-01-22 09:55:00', 1, '2018-01-22 09:55:00'),
(22, 'A1022', 'Anjana', '1534134524X', '27A Amarasekara Mawatha, Colombo', '777430563', '118558562', '', 1, 'Single', 2000.00, 6000.00, '2021-02-22', '300.00', 'Active', 1, '2018-01-22 09:55:00', 1, '2018-01-22 09:55:00'),
(23, 'A1023', 'Akalanka', '153657556V', '27A Amarasekara Mawatha, Colombo', '777421563', '118751562', '', 4, 'Shared', 500.00, 6000.00, '2004-02-22', '5000.00', 'Active', 1, '2018-01-22 09:55:00', 1, '2018-01-22 09:55:00'),
(24, 'A1024', 'Shalani', '1512349524X', '27A Amarasekara Mawatha, Colombo', '777412563', '118944562', '', 5, 'Single', 6000.00, 6000.12, '2014-02-22', '500.00', 'Active', 1, '2018-01-22 09:55:00', 1, '2018-01-22 09:55:00'),
(25, 'A1025', 'Nethmali', '15312456V', '27A Amarasekara Mawatha, Colombo', '777403563', '119137562', '', 6, 'Single', 5000.00, 60000.00, '2031-01-22', '200.00', 'Active', 1, '2018-01-22 09:55:00', 1, '2018-01-22 09:55:00'),
(26, 'A1026', 'Kulathunga', '15345141524X', '27A Amarasekara Mawatha, Colombo', '777394563', '119330562', '', 2, 'Shared', 4000.00, 6000.12, '2020-01-22', '200.00', 'Inactive', 1, '2018-01-22 09:55:00', 1, '2018-01-22 09:55:00'),
(27, 'A1027', 'Rajapaksha', '112489556V', '27A Amarasekara Mawatha, Colombo', '777385563', '119523562', '', 3, 'Single', 3000.00, 6000.00, '2021-02-22', '1000.00', 'Active', 1, '2018-01-22 09:55:00', 1, '2018-01-22 09:55:00'),
(28, 'A1028', 'Pavithra', '15345235424X', '27A Amarasekara Mawatha, Colombo', '777376563', '119716562', '', 4, 'Shared', 2000.00, 6000.00, '2004-02-22', '2000.00', 'Active', 1, '2018-01-22 09:55:00', 1, '2018-01-22 09:55:00'),
(29, 'A1029', 'Kumari', '1241289556V', '27A Amarasekara Mawatha, Colombo', '777367563', '119909562', '', 8, 'Single', 500.00, 6000.12, '2014-02-22', '2000.00', 'Active', 1, '2018-01-22 09:55:00', 1, '2018-01-22 09:55:00'),
(30, 'A1030', 'Kasun', '1531241524X', '27A Amarasekara Mawatha, Colombo', '777358563', '120102562', '', 1, 'Single', 6000.00, 60000.00, '2031-01-22', '300.00', 'Active', 1, '2018-01-22 09:55:00', 1, '2018-01-22 09:55:00'),
(31, 'A1031', 'Madusanka', '24', '27A Amarasekara Mawatha, Colombo', '777349563', '120295562', '', 5, 'Shared', 5000.00, 6000.12, '2020-01-22', '5000.00', 'Inactive', 1, '2018-01-22 09:55:00', 1, '2018-01-22 09:55:00'),
(32, 'A1032', 'Palitha', '1512411549524X', '27A Amarasekara Mawatha, Colombo', '777340563', '120488562', '', 5, 'Single', 4000.00, 6000.00, '2021-02-22', '500.00', 'Active', 1, '2018-01-22 09:55:00', 1, '2018-01-22 09:55:00'),
(33, 'A1033', 'Paviharai', '1531249556V', '27A Amarasekara Mawatha, Colombo', '777331563', '120681562', '', 1, 'Shared', 3000.00, 6000.00, '2004-02-22', '200.00', 'Active', 1, '2018-01-22 09:55:00', 1, '2018-01-22 09:55:00'),
(34, 'A1034', 'Pathbima', '124124124', '27A Amarasekara Mawatha, Colombo', '777322563', '120874562', '', 4, 'Single', 2000.00, 6000.12, '2014-02-22', '200.00', 'Active', 1, '2018-01-22 09:55:00', 1, '2018-01-22 09:55:00'),
(35, 'A1035', 'Virajini', '153661412416V', '27A Amarasekara Mawatha, Colombo', '777313563', '121067562', '', 5, 'Single', 500.00, 60000.00, '2031-01-22', '1000.00', 'Active', 1, '2018-01-22 09:55:00', 1, '2018-01-22 09:55:00'),
(36, 'A1036', 'Nethma', '1241124524X', '27A Amarasekara Mawatha, Colombo', '777304563', '121260562', '', 2, 'Shared', 6000.00, 6000.12, '2020-01-22', '2000.00', 'Inactive', 1, '2018-01-22 09:55:00', 1, '2018-01-22 09:55:00'),
(37, 'A1037', 'Weerasinga', '1124124124', '27A Amarasekara Mawatha, Colombo', '777295563', '121453562', '', 6, 'Single', 5000.00, 6000.00, '2021-02-22', '2000.00', 'Active', 1, '2018-01-22 09:55:00', 1, '2018-01-22 09:55:00'),
(38, 'A1038', 'Dulajini', '15449524X', '27A Amarasekara Mawatha, Colombo', '777286563', '121646562', '', 2, 'Shared', 4000.00, 6000.00, '2004-02-22', '300.00', 'Active', 1, '2018-01-22 09:55:00', 1, '2018-01-22 09:55:00'),
(39, 'A1039', 'Kalhara', '1536689556V', '27A Amarasekara Mawatha, Colombo', '777277563', '121839562', '', 3, 'Single', 3000.00, 6000.12, '2014-02-22', '5000.00', 'Active', 1, '2018-01-22 09:55:00', 1, '2018-01-22 09:55:00'),
(40, 'A1040', 'Thisara', '1534549524X', '27A Amarasekara Mawatha, Colombo', '777268563', '122032562', '', 2, 'Single', 2000.00, 60000.00, '2031-01-22', '500.00', 'Active', 1, '2018-01-22 09:55:00', 1, '2018-01-22 09:55:00');

-- --------------------------------------------------------

--
-- Table structure for table `audit_log`
--

DROP TABLE IF EXISTS `audit_log`;
CREATE TABLE IF NOT EXISTS `audit_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `task` varchar(255) NOT NULL,
  `type` enum('add','update','delete') NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `created_by` (`created_by`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `general`
--

DROP TABLE IF EXISTS `general`;
CREATE TABLE IF NOT EXISTS `general` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `vale` varchar(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general`
--

INSERT INTO `general` (`id`, `name`, `vale`, `status`) VALUES
(1, 'company_name', 'Company Name', 'Active'),
(2, 'company_email', 'company@gmail.com', 'Active'),
(3, 'company_phone', '+ (94) 11 256 5566', 'Active'),
(4, 'company_address', 'No. 103, Galle Road, <br> Colombo 03,<br>Sri Lanka.', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `account_id` int(11) NOT NULL,
  `type` enum('Rent','Extra') NOT NULL,
  `amount` double(11,2) NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `account_id` (`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rent_generation`
--

DROP TABLE IF EXISTS `rent_generation`;
CREATE TABLE IF NOT EXISTS `rent_generation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) NOT NULL,
  `month` enum('January','February','March','April','May','June','July','August','September','October','November','December') NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rent_generation_item`
--

DROP TABLE IF EXISTS `rent_generation_item`;
CREATE TABLE IF NOT EXISTS `rent_generation_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rent_generation_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `amount` double(11,2) NOT NULL,
  `sms` enum('1','0') NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `rent_generation_id` (`rent_generation_id`),
  KEY `rent_generation_item_ibfk_1` (`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `room_no`
--

DROP TABLE IF EXISTS `room_no`;
CREATE TABLE IF NOT EXISTS `room_no` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room_no` varchar(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `room_no` (`room_no`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_no`
--

INSERT INTO `room_no` (`id`, `room_no`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, '1001', 'Active', 1, '2022-01-27 12:05:11', 1, '2022-01-25 09:56:31'),
(2, '1002', 'Active', 1, '2022-01-27 12:05:11', 1, '2022-01-25 09:56:31'),
(3, '1003', 'Active', 1, '2022-01-27 12:05:11', 1, '2022-01-25 09:56:31'),
(4, '1004', 'Active', 1, '2022-01-27 12:05:11', 1, '2022-01-25 09:56:31'),
(5, '1005', 'Active', 1, '2022-01-27 12:05:11', 1, '2022-01-25 09:56:31'),
(6, '1006', 'Active', 1, '2022-01-27 12:05:11', 1, '2022-01-25 09:56:31'),
(7, '1007', 'Active', 1, '2022-01-27 12:05:11', 1, '2022-01-25 09:56:31'),
(8, '1008', 'Active', 1, '2022-01-27 12:05:11', 1, '2022-01-25 09:56:31');

-- --------------------------------------------------------

--
-- Table structure for table `sys_user`
--

DROP TABLE IF EXISTS `sys_user`;
CREATE TABLE IF NOT EXISTS `sys_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(155) NOT NULL,
  `username` varchar(155) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sys_user`
--

INSERT INTO `sys_user` (`id`, `name`, `username`, `email`, `password`, `status`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'Administrator', 'sys_admin', 'admin@admin.com', 'c93ccd78b2076528346216b3b2f701e6', 'Active', 0, '0000-00-00 00:00:00', NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `accounts_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `room_no` (`id`);

--
-- Constraints for table `audit_log`
--
ALTER TABLE `audit_log`
  ADD CONSTRAINT `audit_log_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `sys_user` (`id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`);

--
-- Constraints for table `rent_generation_item`
--
ALTER TABLE `rent_generation_item`
  ADD CONSTRAINT `rent_generation_item_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`),
  ADD CONSTRAINT `rent_generation_item_ibfk_2` FOREIGN KEY (`rent_generation_id`) REFERENCES `rent_generation` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
