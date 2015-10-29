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
-- Database: `DSCHICK_advising`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblCourses`
--

CREATE TABLE IF NOT EXISTS `tblCourses` (
  `pmkCourseNumber` int(255) NOT NULL DEFAULT '0',
  `fldSemester` varchar(100) DEFAULT NULL,
  `fldDept` varchar(100) DEFAULT NULL,
  `fldDeptNum` int(100) NOT NULL,
  `fldCatYear` varchar(100) DEFAULT NULL,
  `fnkTeacherId` varchar(100) DEFAULT NULL,
  `fldCourseName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblCourses`
--

INSERT INTO `tblCourses` (`pmkCourseNumber`, `fldSemester`, `fldDept`, `fldDeptNum`, `fldCatYear`, `fnkTeacherId`, `fldCourseName`) VALUES
(95470, 'Fall', 'CS', 148, '2015', 'rerickso', 'Database Design for the Web');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblCourses`
--
ALTER TABLE `tblCourses`
 ADD PRIMARY KEY (`pmkCourseNumber`), ADD UNIQUE KEY `pmkCourseNumber` (`pmkCourseNumber`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
