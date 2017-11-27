-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2017 at 05:10 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cake-auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `volunteerregistration`
--

CREATE TABLE `volunteerregistration` (
  `regid` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `supporttype` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteerregistration`
--

INSERT INTO `volunteerregistration` (`regid`, `name`, `emailid`, `profession`, `supporttype`, `location`, `notes`) VALUES
(1, 'Razin', 'razin2good@gmail.com', 'Student', 'Evacuation', 'Louisiana', 'I am available currently. I can extend help in other ways too like transportation. Please let me know.'),
(2, 'Priyanka', 'padmajapriyanka2012@gmail.com', 'Doctor', 'Food', 'Louisiana', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `volunteerregistration`
--
ALTER TABLE `volunteerregistration`
  ADD PRIMARY KEY (`regid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `volunteerregistration`
--
ALTER TABLE `volunteerregistration`
  MODIFY `regid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
