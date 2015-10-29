-- phpMyAdmin SQL Dump
-- version 4.2.9
-- http://www.phpmyadmin.net
--
-- Host: webdb.uvm.edu
-- Generation Time: Oct 27, 2015 at 08:12 PM
-- Server version: 5.5.45-37.4-log
-- PHP Version: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `DSCHICK_advising`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl4YP`
--

CREATE TABLE IF NOT EXISTS `tbl4YP` (
  `fldStudentName` varchar(100) DEFAULT NULL,
  `fldNumCredits` int(50) DEFAULT NULL,
  `fldAdvisorId` varchar(100) DEFAULT NULL,
  `fldMajor` varchar(100) DEFAULT NULL,
  `fldMinor` varchar(100) DEFAULT NULL,
  `fldCatYear` year(4) DEFAULT NULL,
  `fldDateCreated` date DEFAULT NULL,
`pmkPlanId` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl4YP`
--

INSERT INTO `tbl4YP` (`fldStudentName`, `fldNumCredits`, `fldAdvisorId`, `fldMajor`, `fldMinor`, `fldCatYear`, `fldDateCreated`, `pmkPlanId`) VALUES
('Danny Schick', 16, 'cskalka', 'Computer Science', 'NULL', 2015, '2015-10-27', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl4YP`
--
ALTER TABLE `tbl4YP`
 ADD PRIMARY KEY (`pmkPlanId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl4YP`
--
ALTER TABLE `tbl4YP`
MODIFY `pmkPlanId` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
