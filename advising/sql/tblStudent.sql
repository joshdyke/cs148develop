-- phpMyAdmin SQL Dump
-- version 4.2.9
-- http://www.phpmyadmin.net
--
-- Host: webdb.uvm.edu
-- Generation Time: Oct 27, 2015 at 08:16 PM
-- Server version: 5.5.45-37.4-log
-- PHP Version: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `CEATKINS_advising`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblStudent`
--

CREATE TABLE IF NOT EXISTS `tblStudent` (
  `fnkFirstName` varchar(25) NOT NULL,
  `fnkLastName` varchar(25) NOT NULL,
  `fldMajor` varchar(25) NOT NULL,
  `fldMinor` varchar(25) NOT NULL,
  `fldAdvisor` varchar(25) NOT NULL,
  `fldNumCredits` int(50) NOT NULL,
  `fldYear` int(4) NOT NULL,
  `pmkNetID` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblStudent`
--

INSERT INTO `tblStudent` (`fnkFirstName`, `fnkLastName`, `fldMajor`, `fldMinor`, `fldAdvisor`, `fldNumCredits`, `fldYear`, `pmkNetID`) VALUES
('Corey', 'Atkins', '', '', '', 0, 0, 'ceatkins');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
