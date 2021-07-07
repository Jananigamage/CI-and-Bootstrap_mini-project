-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 02, 2020 at 04:27 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rad`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `custNIC` varchar(12) NOT NULL,
  `custPassword` char(32) NOT NULL COMMENT 'size is 32 characters. suitable for md5 hash algorithm. if you use another algorithm, change the size\\n',
  `custName` varchar(50) NOT NULL,
  `custTelephone` varchar(10) NOT NULL,
  `custEmail` varchar(45) NOT NULL,
  `custStatus` int(11) NOT NULL DEFAULT '1' COMMENT '0 : deleted\n1 : active\n',
  PRIMARY KEY (`custNIC`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`custNIC`, `custPassword`, `custName`, `custTelephone`, `custEmail`, `custStatus`) VALUES
('912343219V', 'a1931ec126bbad3fa7a3fc64209fd921', 'Nimal Sepala', '0712345678', 'Nimal@gmail.com', 1),
('953245690V', 'b2ca678b4c936f905fb82f2733f5297f', 'Naduni Gunathilaka', '0765434234', 'Naduni@gmail.com', 1),
('976390103V', 'cb42e130d1471239a27fca6228094f0e', 'Kamal Perera', '0766784696', 'Kamal123@gmail.com', 1),
('986390104V', '77963b7a931377ad4ab5ad6a9cd718aa', 'Nisali perera', '0713032786', 'Nisali@gmail.com', 1),
('986832134V', 'f0b9b5d4bc6fc22c407555fc00ceb526', 'Nimani Herath', '0713032786', 'Nimani@gmail.com', 1),
('987856789V', '47bce5c74f589f4867dbd57e9ca9f808', 'Kasun Jayasinghe', '0785645345', 'kasun1998@gmail.com', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
