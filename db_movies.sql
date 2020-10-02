-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2018 at 09:30 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_movies`
--
CREATE DATABASE IF NOT EXISTS `db_movies` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_movies`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_hall`
--

CREATE TABLE `tb_hall` (
  `ID` int(15) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `SeatNo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_movies`
--

CREATE TABLE `tb_movies` (
  `ID` int(15) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Director` varchar(25) NOT NULL,
  `Producer` varchar(25) NOT NULL,
  `Duration` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_sales`
--

CREATE TABLE `tb_sales` (
  `ID` int(15) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Designation` varchar(10) NOT NULL,
  `Signature` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_show`
--

CREATE TABLE `tb_show` (
  `ID` int(15) NOT NULL,
  `ST` varchar(6) NOT NULL,
  `ET` varchar(6) NOT NULL,
  `NS` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_show`
--

INSERT INTO `tb_show` (`ID`, `ST`, `ET`, `NS`) VALUES
(1, '02:03', '15:05', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_ticket`
--

CREATE TABLE `tb_ticket` (
  `ID` int(15) NOT NULL,
  `SN` varchar(10) NOT NULL,
  `Price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_hall`
--
ALTER TABLE `tb_hall`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tb_movies`
--
ALTER TABLE `tb_movies`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tb_sales`
--
ALTER TABLE `tb_sales`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tb_show`
--
ALTER TABLE `tb_show`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tb_ticket`
--
ALTER TABLE `tb_ticket`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
