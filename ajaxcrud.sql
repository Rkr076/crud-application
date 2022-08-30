-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2022 at 04:46 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajaxcrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `ajaxinsert`
--

CREATE TABLE `ajaxinsert` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ajaxinsert`
--

INSERT INTO `ajaxinsert` (`id`, `username`, `password`) VALUES
(19, 'shivam', 'Raj@123'),
(20, 'seema', 'Saran@123'),
(21, 'Raman', 'Raghav@123'),
(22, 'Rajat', 'Priyadarshi@123'),
(23, 'Rashid', 'Khan@123'),
(24, 'Ravish', 'Guleria@123'),
(25, 'jasmine', 'Raj@123'),
(26, 'Raushan', 'Vidyarthi@123'),
(27, 'Sajjan', 'Singh@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ajaxinsert`
--
ALTER TABLE `ajaxinsert`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ajaxinsert`
--
ALTER TABLE `ajaxinsert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
