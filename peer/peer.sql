-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2019 at 08:23 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peer`
--

-- --------------------------------------------------------

--
-- Table structure for table `alu`
--

CREATE TABLE `alu` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(100) NOT NULL,
  `deg` varchar(111) NOT NULL,
  `Q_1` varchar(100) NOT NULL,
  `Q_2` varchar(100) NOT NULL,
  `Q_3` varchar(100) NOT NULL,
  `Q_4` varchar(100) NOT NULL,
  `Q_5` varchar(100) NOT NULL,
  `Q_6` varchar(100) NOT NULL,
  `Q_7` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(100) NOT NULL,
  `deg` varchar(111) NOT NULL,
  `Q_1` varchar(100) NOT NULL,
  `Q_2` varchar(100) NOT NULL,
  `Q_3` varchar(100) NOT NULL,
  `Q_4` varchar(100) NOT NULL,
  `Q_5` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(100) NOT NULL,
  `deg` varchar(111) NOT NULL,
  `Q_1` varchar(100) NOT NULL,
  `Q_2` varchar(100) NOT NULL,
  `Q_3` varchar(100) NOT NULL,
  `Q_4` varchar(100) NOT NULL,
  `Q_5` varchar(100) NOT NULL,
  `Q_6` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `public`
--

CREATE TABLE `public` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(100) NOT NULL,
  `deg` varchar(111) NOT NULL,
  `Q_1` varchar(100) NOT NULL,
  `Q_2` varchar(100) NOT NULL,
  `Q_3` varchar(100) NOT NULL,
  `Q_4` varchar(100) NOT NULL,
  `Q_5` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(100) NOT NULL,
  `deg` varchar(111) NOT NULL,
  `Q_1` varchar(100) NOT NULL,
  `Q_2` varchar(100) NOT NULL,
  `Q_3` varchar(100) NOT NULL,
  `Q_4` varchar(100) NOT NULL,
  `Q_5` varchar(100) NOT NULL,
  `Q_6` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
