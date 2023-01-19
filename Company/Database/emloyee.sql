-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 01:04 AM
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
-- Table structure for table `emloyee`
--

CREATE TABLE `emloyee` (
  `id` bigint(20) NOT NULL,
  `FullName` varchar(45) NOT NULL,
  `Gender` varchar(9) NOT NULL,
  `DOB` date NOT NULL,
  `Country` varchar(23) NOT NULL,
  `Hobbies` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emloyee`
--

INSERT INTO `emloyee` (`id`, `FullName`, `Gender`, `DOB`, `Country`, `Hobbies`) VALUES
(1, 'ShiyalPradipAlpeshbhai', 'Male', '2022-11-21', 'India', 'Dance,Cooking,Learning'),
(2, 'Makwana Pradip Natubhai', 'Male', '2022-12-05', 'Mexico', 'Dance,Cooking,Shopping'),
(3, 'Joliya Rajesh Shambhai', 'Male', '2022-02-03', 'New Zealand', 'Dance,Cooking,Learning,Photography,Shopping');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emloyee`
--
ALTER TABLE `emloyee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emloyee`
--
ALTER TABLE `emloyee`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
