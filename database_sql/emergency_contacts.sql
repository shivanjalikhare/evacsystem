-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2017 at 01:52 AM
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
-- Table structure for table `emergency_contacts`
--

CREATE TABLE `emergency_contacts` (
  `eid` int(200) NOT NULL,
  `etype` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emergency_contacts`
--

INSERT INTO `emergency_contacts` (`eid`, `etype`, `name`, `phone`, `email`, `Address`) VALUES
(1, 'transport', 'Lafayette Evacuation Transport System', '3374531208', 'thomas.eden@gmail.com', '254 east lewis street, Lafayette, LA - 70503'),
(2, 'medical', 'Lafayette General Medical Center', '3372897991', 'lafayettegeneral@gmail.com', '1214 Coolidge Street\r\nLafayette, LA 70503'),
(3, 'Food', 'Evacuation Emergency Food Service', '3375626512', 'evac.food@example.com', '1103 W Pinhook Rd, Lafayette, LA 70503');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emergency_contacts`
--
ALTER TABLE `emergency_contacts`
  ADD PRIMARY KEY (`eid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emergency_contacts`
--
ALTER TABLE `emergency_contacts`
  MODIFY `eid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
