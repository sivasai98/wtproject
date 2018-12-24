-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2018 at 04:35 PM
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
-- Database: `siva`
--

-- --------------------------------------------------------

--
-- Table structure for table `addfaculty`
--

CREATE TABLE `addfaculty` (
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `confirmpassword` varchar(25) NOT NULL,
  `postalcode` varchar(25) NOT NULL,
  `phonenumber` varchar(25) NOT NULL,
  `mailid` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addfaculty`
--

INSERT INTO `addfaculty` (`firstname`, `lastname`, `username`, `password`, `confirmpassword`, `postalcode`, `phonenumber`, `mailid`) VALUES
('uma', 'mahesh', 'umamahesh', '1234', '1234', '518502', '999885816', 'umamahesh@gmail.com'),
('basheer', 'khaja', 'basheer', '1234', '1234', '518502', '7775556688', 'basheer@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `addstudent`
--

CREATE TABLE `addstudent` (
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `confirmpassword` varchar(25) NOT NULL,
  `postalcode` varchar(25) NOT NULL,
  `phonenumber` varchar(25) NOT NULL,
  `mailid` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addstudent`
--

INSERT INTO `addstudent` (`firstname`, `lastname`, `username`, `password`, `confirmpassword`, `postalcode`, `phonenumber`, `mailid`) VALUES
('student1', 'svec', '1201', '1234', '1234', '518501', '9999988888', 'stu1@gmail.com'),
('student2', 'svec', '1202', '1234', '1234', '518502', '9999999', 'stu2@gmail.com'),
('student3', 'svec', '1203', '1234', '1234', '518502', '9999888555', 'stu3@gmail.com'),
('student4', 'svec', '1204', '1234', '1234', '518502', '9999988858', 'stu4@gmail.com'),
('student5', 'svec', '1205', '1234', '1234', '55555', '8887774455', 'stu5@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `adminregister`
--

CREATE TABLE `adminregister` (
  `adminid` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminregister`
--

INSERT INTO `adminregister` (`adminid`, `password`) VALUES
('admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `storeattendance`
--

CREATE TABLE `storeattendance` (
  `firstname` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
