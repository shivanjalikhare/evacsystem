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
-- Table structure for table `emergencychecklist`
--

CREATE TABLE `emergencychecklist` (
  `id` int(11) NOT NULL,
  `checklist` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emergencychecklist`
--

INSERT INTO `emergencychecklist` (`id`, `checklist`) VALUES
(2, 'Credit cards, passport and other documents'),
(3, 'Special iteams for infants, elderly or disabled family members'),
(4, 'Blankets or sleeping bags'),
(5, 'Pair of clothes'),
(6, 'Torch');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emergencychecklist`
--
ALTER TABLE `emergencychecklist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emergencychecklist`
--
ALTER TABLE `emergencychecklist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
