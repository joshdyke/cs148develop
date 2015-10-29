-- phpMyAdmin SQL Dump
-- version 4.2.9
-- http://www.phpmyadmin.net
--
-- Host: webdb.uvm.edu
-- Generation Time: Oct 27, 2015 at 08:13 PM
-- Server version: 5.5.45-37.4-log
-- PHP Version: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `JRDYKE_advising`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblSemester`
--

CREATE TABLE IF NOT EXISTS `tblSemester` (
  `fnkYear` int(20) DEFAULT NULL,
  `fnkPlanId` int(20) DEFAULT NULL,
  `fnkTerm` varchar(15) DEFAULT NULL,
  `fldNumCredits` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblSemester`
--

INSERT INTO `tblSemester` (`fnkYear`, `fnkPlanId`, `fnkTerm`, `fldNumCredits`) VALUES
(2015, 6506, 'Fall', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblSemester`
--
ALTER TABLE `tblSemester`
 ADD UNIQUE KEY `fnkPlanId` (`fnkPlanId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
