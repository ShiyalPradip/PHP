-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2023 at 10:39 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `databaseoperations`
--

CREATE TABLE `databaseoperations` (
  `RollNo` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `databaseoperations`
--

INSERT INTO `databaseoperations` (`RollNo`, `Name`, `Email`) VALUES
(10, 'Vinod Sir', 'VinodSir369@gmail.com'),
(18, 'Makwana Pradip', 'MakwanaPradip123@gmail.com'),
(20, 'Sondagar Umesh', 'UmeshSondagar@gmail.com'),
(21, 'Shiyal Pradip', 'Pradip369@gmail.com'),
(22, 'Shiyal Rajesh', 'RajeshShiyal21@gmail.com');

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

-- --------------------------------------------------------

--
-- Table structure for table `emloyee1`
--

CREATE TABLE `emloyee1` (
  `Id` bigint(20) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Salary` bigint(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(18) NOT NULL,
  `MobileNo` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emloyee1`
--

INSERT INTO `emloyee1` (`Id`, `Name`, `Salary`, `Email`, `Password`, `MobileNo`) VALUES
(5, 'Makwana Pradip', 8900000, 'MakwanaPradip369@gmail.com', 'PradipMakwana369', 9837457823);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` bigint(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `Username`, `Password`) VALUES
(22, 'Shiyal Pradip', '123456789'),
(23, 'Makwana Pradip', '123'),
(24, 'Makwana Rajesh', '21112003');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_information`
--
ALTER TABLE `customer_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `databaseoperations`
--
ALTER TABLE `databaseoperations`
  ADD PRIMARY KEY (`RollNo`);

--
-- Indexes for table `emloyee`
--
ALTER TABLE `emloyee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emloyee1`
--
ALTER TABLE `emloyee1`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_information`
--
ALTER TABLE `customer_information`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `databaseoperations`
--
ALTER TABLE `databaseoperations`
  MODIFY `RollNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `emloyee`
--
ALTER TABLE `emloyee`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `emloyee1`
--
ALTER TABLE `emloyee1`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
