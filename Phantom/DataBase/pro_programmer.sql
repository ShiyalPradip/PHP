-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql311.byetcluster.com
-- Generation Time: Feb 14, 2023 at 07:10 PM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_33284004_ProProgrammer`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookmaster`
--

CREATE TABLE `bookmaster` (
  `BookId` bigint(20) NOT NULL,
  `BookName` varchar(30) NOT NULL,
  `AuthorName` varchar(20) NOT NULL,
  `Price` float NOT NULL,
  `Quantity` int(10) NOT NULL,
  `NetAmount` mediumint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookmaster`
--

INSERT INTO `bookmaster` (`BookId`, `BookName`, `AuthorName`, `Price`, `Quantity`, `NetAmount`) VALUES
(2, 'C Language ', 'E_Balaguru Swami', 320, 3, 960),
(3, 'Black Book VB.NET ', 'Holzner Steven', 540, 1, 540),
(4, 'PHP ', 'Holzner Steven', 400, 4, 1600),
(5, 'Java ', 'Harbert Schitdt', 650, 2, 1300),
(9, 'ccndsbdwcbdwucbuw ', 'SKSNCISCINN', 770, 6, 4620),
(10, ' DJD J ', 'BCBDB', 759, 2, 1518);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Id` bigint(20) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Gross_Salary` mediumint(10) NOT NULL,
  `Net_Salary` mediumint(10) NOT NULL,
  `Mobile_No` bigint(10) NOT NULL,
  `Basic_Salary` mediumint(10) NOT NULL,
  `Ta` float NOT NULL,
  `Da` float NOT NULL,
  `Hra` float NOT NULL,
  `Pf` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Id`, `Name`, `Email`, `Gross_Salary`, `Net_Salary`, `Mobile_No`, `Basic_Salary`, `Ta`, `Da`, `Hra`, `Pf`) VALUES
(3, 'Sarvaiya Manoj ', 'mrManoj21@gmail.com', 106860, 97110, 9089897878, 78000, 7800, 9360, 11700, 9750),
(5, 'Shiyal Rajesh ', 'MrRajesh23@gmail.com', 116450, 105825, 9378909099, 85000, 8500, 10200, 12750, 10625),
(6, 'Sarvaiya Kishan ', 'KishanSarvaiya56@gmail.com', 123300, 112050, 9578676676, 90000, 9000, 10800, 13500, 11250),
(8, 'Shiyal Kishan ', 'ShiyalKishan@gmail.com', 46580, 42330, 9390907586, 34000, 3400, 4080, 5100, 4250),
(9, 'Sarvaiya Rajesh ', 'MrHackerRajesh@gmail.com', 123300, 112050, 9289221234, 90000, 9000, 10800, 13500, 11250),
(10, 'Joliya Ramanlal ', 'MrJoliya21@gmail.com', 107545, 97733, 9033784767, 78500, 7850, 9420, 11775, 9812.5);

-- --------------------------------------------------------

--
-- Table structure for table `login_logout`
--

CREATE TABLE `login_logout` (
  `Id` int(11) NOT NULL,
  `Role` tinyint(1) NOT NULL DEFAULT 0,
  `Name` varchar(30) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(18) NOT NULL,
  `LoginDate` varchar(12) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `ContactNumber` bigint(10) NOT NULL,
  `Photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_logout`
--

INSERT INTO `login_logout` (`Id`, `Role`, `Name`, `Username`, `Password`, `LoginDate`, `Address`, `Email`, `Gender`, `ContactNumber`, `Photo`) VALUES
(1, 1, 'Shiyal Pradip', 'ShiyalPradip', 'Pr@dip369', '13/02/23', 'Mahuva', 'ShiyalPradip@gmail.com', 'Male', 9875894643, 'Photos/Channel Logo.png'),
(2, 0, 'Makwana Pradip', 'MakwanaPradip', 'Pradip07', '07/02/23', 'Rajula', 'MakwanaPradip4563@gmail.com', 'Male', 9746347867, 'Photos/Gaming.jpg'),
(3, 0, 'Solanki Rajesh ', 'SolankiRajesh', 'Rajesh@123', '25/01/23', ' Rajkot,New Road', 'RajeshSolanki@gmail.com', 'Male', 9483348922, 'Photos/Temp2.png'),
(4, 0, 'Shiyal Rajesh', 'ShiyalRajesh', 'Rajesh@123', '02/02/23', ' 34,Python Road, Jaamnagar   ', 'ShiyalRajesh21@gmail.com', 'Male', 9389448589, 'Photos/krishna.1jpg.jpg '),
(5, 0, 'Joliya Prakash', 'JoliyaPrakash', 'Prakash@123', '04/02/23', '   34,Nilam Road, Gandhinagar ', 'JolliyaPrakash@gmail.com', 'Other', 9389097894, 'Photos/BK3.jpg '),
(6, 0, 'Vmm', 'Navya', 'navya123', '06/02/23', '    Mahuva  ', 'vmm@gmail.com', 'Male', 9904010366, 'Photos/Screenshot_20230108-122047_Call.jpg '),
(7, 0, 'Shiyal Ramesh', 'ShiyalRamesh', 'Ramesh@123', '', ' 23,Rajula Road   ', 'ShiyalRamesh21@gmail.com', 'Other', 9378903475, 'Photos/Hacker2.png '),
(8, 0, 'Hello', 'Good ', '123456788998', '', '   Njmkkh ', 'hello@gmail.com', 'Male', 6885655565, 'Photos/IMG_20221108_163417_349.jpg '),
(9, 0, 'Hello', 'Good ', '1234567890', '07/02/23', '   Hnnnnhg ', 'hello@gmail.com', 'Male', 6885655565, 'Photos/IMG_20230115_211356_968.jpg '),
(10, 0, 'vmm', 'vmm', 'vinod12345678', '11/02/23', ' mahuva   ', 'vmm@gmail.com', 'Male', 9999999999, 'Photos/15_18_FINAL.jpg '),
(11, 0, 'Ashish', 'Ashish_07', 'black@&09', '13/02/23', '   Mahuva ', 'ashishbill45@gmail.com', 'Male', 8849355354, 'Photos/images.jpeg ');

-- --------------------------------------------------------

--
-- Table structure for table `login_signup`
--

CREATE TABLE `login_signup` (
  `Id` bigint(20) NOT NULL,
  `Username` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_signup`
--

INSERT INTO `login_signup` (`Id`, `Username`, `Password`) VALUES
(1, 'ShiyalPradip', 'Pr@dip369'),
(2, 'MakwanaPradip', 'Pradip@123'),
(3, 'SolankiRajesh', 'Rajesh@123');

-- --------------------------------------------------------

--
-- Table structure for table `student_reg`
--

CREATE TABLE `student_reg` (
  `Id` bigint(20) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `Hobbies` varchar(40) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Country` varchar(10) NOT NULL,
  `Pincode` int(8) NOT NULL,
  `Mobile` bigint(11) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_reg`
--

INSERT INTO `student_reg` (`Id`, `Name`, `Gender`, `Hobbies`, `Address`, `Country`, `Pincode`, `Mobile`, `Email`) VALUES
(1, 'Shiyal Pradip', 'Male', 'Blogging,Gardening,Hacking', '23,Rajula Road', 'India ', 364290, 9347589390, 'ShiyalPradip@gmail.com'),
(2, 'Makwana Prkash', 'Other', 'Blogging,Gardening', 'Mahuva', 'India ', 364290, 8945738947, 'PrkashBlogar@gmail.com'),
(3, 'Sarvaiya Mahendra', 'Male', 'Blogging,Gardening,Hacking', 'Rajula', 'India ', 365560, 9323239098, 'SarvaiyaMahendraBhai@gmail.com'),
(4, 'Jaani Rajvir', 'Other', 'Gardening,Camping', 'Bandra', 'India ', 360330, 9090834576, 'RajvirSigh@gmail.com'),
(5, 'Denish Ritche', 'Male', 'Hacking', 'Mancio Lima', 'Brazil ', 69990, 8723479087, 'At&TBellLab@gmail.com'),
(6, 'Ken Thompson', 'Female', 'Blogging,Gardening,Hacking', 'Canapi', 'Brazil ', 57530, 9034859222, 'ThompanLebs@gmail.com'),
(7, 'Vishav Jeet Singh', 'Male', 'Blogging,Hacking', 'Panjab', 'India ', 34090, 9595893090, 'JeetSingh@gmail.com'),
(8, 'Asif Mailk', 'Other', 'Blogging,Gardening,Hacking,Camping', 'Kaanpur', 'Canada ', 909047, 8739085769, 'AsifAlibro@gmail.com'),
(9, 'Avinash Sharma', 'Other', 'Blogging', 'Panorama Hills', 'Canada ', 459089, 8778789909, 'SharmaAvinash@gmail.com'),
(10, 'Raval Janvi', 'Female', 'Blogging,Gardening,Hacking,Camping', 'Amareli', 'Egypt ', 9078, 9434908798, 'JanviRaval21230@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `stud_tbl_1`
--

CREATE TABLE `stud_tbl_1` (
  `Stud_Id` bigint(20) NOT NULL,
  `Stud_Name` varchar(20) NOT NULL,
  `Stud_Email` varchar(54) NOT NULL,
  `Stud_DOB` date NOT NULL,
  `Stud_Gender` varchar(7) NOT NULL,
  `Stud_Tol_Marks` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stud_tbl_1`
--

INSERT INTO `stud_tbl_1` (`Stud_Id`, `Stud_Name`, `Stud_Email`, `Stud_DOB`, `Stud_Gender`, `Stud_Tol_Marks`) VALUES
(3, 'Sarvaiya Kishan', 'MrKishan@gmail.com', '2023-02-15', 'Female', 890),
(4, 'Sondagar Ramesh', 'RameshSondagar@gmail.com', '2022-12-28', 'Other', 230),
(5, 'Baraiya bhurabhai', 'MrRajesh21@gmail.com', '2022-12-26', 'Female', 230),
(6, 'Sondagar Ramesh', 'RameshSondagar@gmail.com', '2023-01-06', 'Male', 234),
(8, 'Shiyal Chiman', 'Chiman@gmail.com', '2023-02-23', 'Male', 340);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookmaster`
--
ALTER TABLE `bookmaster`
  ADD PRIMARY KEY (`BookId`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `login_logout`
--
ALTER TABLE `login_logout`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `login_signup`
--
ALTER TABLE `login_signup`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `student_reg`
--
ALTER TABLE `student_reg`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `stud_tbl_1`
--
ALTER TABLE `stud_tbl_1`
  ADD PRIMARY KEY (`Stud_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookmaster`
--
ALTER TABLE `bookmaster`
  MODIFY `BookId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `login_logout`
--
ALTER TABLE `login_logout`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `login_signup`
--
ALTER TABLE `login_signup`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_reg`
--
ALTER TABLE `student_reg`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stud_tbl_1`
--
ALTER TABLE `stud_tbl_1`
  MODIFY `Stud_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
