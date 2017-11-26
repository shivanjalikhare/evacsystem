-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2017 at 12:35 AM
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
-- Table structure for table `orgteam`
--

CREATE TABLE `orgteam` (
  `teamid` int(100) NOT NULL,
  `teamname` varchar(255) NOT NULL,
  `members` int(100) NOT NULL,
  `details` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orgteam`
--

INSERT INTO `orgteam` (`teamid`, `teamname`, `members`, `details`, `contact`) VALUES
(1, 'Transportation', 5, 'Priyanka, Khare, Razin, Shivanjali, Padmaja', 'padmajapriyanka2012@gmail.com'),
(2, 'Evacuation', 6, 'Ram, Sujith, Vinay, Aditya, Suresh, Razin', 'razin2good@gmail.com'),
(3, 'Food', 4, 'Raghul, Kirthu, Bose, Mathew', 'shivanjali.khare@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orgteam`
--
ALTER TABLE `orgteam`
  ADD PRIMARY KEY (`teamid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orgteam`
--
ALTER TABLE `orgteam`
  MODIFY `teamid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
