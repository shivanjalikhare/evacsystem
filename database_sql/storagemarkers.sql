-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2017 at 11:12 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `storagemarkers`
--

CREATE TABLE `storagemarkers` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `address` varchar(60) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `storagemarkers`
--

INSERT INTO `storagemarkers` (`id`, `name`, `address`, `lat`, `lng`, `type`) VALUES
(1, 'Lafayette', 'Life Storage #212 313 Guilbeau Road, Lafayette, LA 70506', 30.195101, -92.064537, 'Life Storage in Lafayette'),
(2, 'Lafayette', 'Life Storage #300 4706 West Congress St., Lafayette, LA ', 30.196508, -92.089821, 'Life Storage in Lafayette'),
(3, 'Lafayette', '300 Westgate Rd, Lafayette, LA 70506, USA', 30.230438, -92.087631, 'Life Storage in Lafayette'),
(4, 'Baton Rouge', 'Vault Self Storage', 30.412741, -91.053314, 'Storage Unit'),
(5, 'Baton Rouge', 'Carrollton Self Storage Baton Rouge LA 70806', 30.457920, -91.123787, 'Storage Unit'),
(6, 'New Iberia', 'LeBlanc & Son\'s Storage New Iberia LA 70560', 29.987774, -91.783699, 'Storage Unit'),
(7, 'New Iberia', 'Fremin Store & Lock New Iberia LA 70560 ', 29.991121, -91.812233, 'Storage Unit'),
(8, 'New Orleans', '1901 St Charles Ave New Orleans, LA 70130', 29.936052, -90.078712, 'Storage'),
(9, 'New Orleans', '3440 S Carrollton Ave, New Orleans, LA 70118, USA', 29.964214, -90.112480, 'Storage');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `storagemarkers`
--
ALTER TABLE `storagemarkers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `storagemarkers`
--
ALTER TABLE `storagemarkers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
