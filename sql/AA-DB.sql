-- phpMyAdmin SQL Dump
-- version 4.0.3
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2013 at 07:41 PM
-- Server version: 5.1.69
-- PHP Version: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `AA-DB`
--
CREATE DATABASE IF NOT EXISTS `AA-DB` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `AA-DB`;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `iso` varchar(2) NOT NULL,
  `country` varchar(120) NOT NULL,
  `missing_children` varchar(6) NOT NULL,
  `emergency` varchar(3) NOT NULL,
  `local_a` varchar(25) NOT NULL,
  `local_b` varchar(25) NOT NULL,
  `local_c` varchar(25) NOT NULL,
  `local_d` varchar(25) NOT NULL,
  PRIMARY KEY (`iso`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`iso`, `country`, `missing_children`, `emergency`, `local_a`, `local_b`, `local_c`, `local_d`) VALUES
('GR', 'Greece', '116000', '112', '1056', '', '', ''),
('NL', 'The Netherlands', '116000', '112', '0800 6070', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

