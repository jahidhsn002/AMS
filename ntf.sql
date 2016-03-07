-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2016 at 11:10 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ntf`
--

-- --------------------------------------------------------

--
-- Table structure for table `mr_company`
--

CREATE TABLE `mr_company` (
  `uid` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `person` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `entry` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mr_company`
--

INSERT INTO `mr_company` (`uid`, `name`, `address`, `person`, `designation`, `email`, `phone`, `comment`, `entry`) VALUES
('4', 'Chutia', 'Bypass road', 'Abul', 'Chodonbaz', 'cb@xnxx.com', '01977777', 'Baintut', '1457340195'),
('5', 'Chutia', 'Bypass road', 'Abul', 'Chodonbazzz', 'cb@xnxx.com', '01977777', 'Baintut', '1457341463');

-- --------------------------------------------------------

--
-- Table structure for table `mr_data`
--

CREATE TABLE `mr_data` (
  `name` varchar(50) NOT NULL,
  `value` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mr_data`
--

INSERT INTO `mr_data` (`name`, `value`) VALUES
('id', '5');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
