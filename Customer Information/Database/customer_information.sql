-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2022 at 02:49 PM
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
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_information`
--

CREATE TABLE `customer_information` (
  `id` bigint(20) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `EMail` varchar(45) NOT NULL,
  `ConNo` bigint(10) NOT NULL,
  `Gender` mediumtext NOT NULL,
  `Pincode` int(6) NOT NULL,
  `Country` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_information`
--

INSERT INTO `customer_information` (`id`, `Name`, `EMail`, `ConNo`, `Gender`, `Pincode`, `Country`) VALUES
(6, 'Makwana Pradip Natubhai', 'pradip571@gmail.com', 6352777973, 'Male', 364290, 'India'),
(12, 'Makwana Rajesh Kishanbhai', 'RajeshMakwana12@gmail.com', 9856749043, 'Male', 6790, 'India'),
(13, 'Sondagar Umeshkumar Ashokbhai', 'urvaumesh@gmail.com', 9664675404, 'Male', 364290, 'Canada'),
(14, 'Shiyal Pradip Alpeshbhai', 'ProProgrammer@gmail.com', 9878564356, 'Male', 364290, 'India');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_information`
--
ALTER TABLE `customer_information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_information`
--
ALTER TABLE `customer_information`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
