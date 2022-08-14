-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2022 at 03:21 PM
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
-- Database: `webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `blooddonar`
--

CREATE TABLE `blooddonar` (
  `donarid` int(10) NOT NULL,
  `donarname` varchar(40) NOT NULL,
  `age` int(10) NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `phoneno` varchar(11) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blooddonar`
--

INSERT INTO `blooddonar` (`donarid`, `donarname`, `age`, `bloodgroup`, `phoneno`, `address`) VALUES
(1, 'sreejan', 22, 'O ', '01776755205', 'House: 215, Road: 8, Block: C'),
(2, 'adi', 23, 'o( ve)', '01712356987', 'House: 215, Road: 8, Block: C'),
(3, 'sam', 25, 'ab', '01342568975', 'House: 215, Road: 8, Block: C'),
(4, 'Smith', 24, 'A positive', '01712356987', 'House: 215, Road: 8, Block: C'),
(5, 'uday', 42, 'o( ve)', '01776755205', 'House: 215, Road: 8, Block: C');

-- --------------------------------------------------------

--
-- Table structure for table `emailtable`
--

CREATE TABLE `emailtable` (
  `id` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emailtable`
--

INSERT INTO `emailtable` (`id`, `name`, `email`, `message`) VALUES
(1, 'Apurba Saha', 'apurbajyotisaha@gmail.com', 'I need update my profile.'),
(2, 'adi', 'adi@gmail.com', 'I need update my profile name.');

-- --------------------------------------------------------

--
-- Table structure for table `mediteam`
--

CREATE TABLE `mediteam` (
  `id` int(10) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mediteam`
--

INSERT INTO `mediteam` (`id`, `username`, `password`, `firstname`, `lastname`, `gender`, `email`, `phone`) VALUES
(1, 'Uday2480', '123456', 'Apurba', 'Saha', 'male', 'apurbajyotisaha@gmail.com', 2147483647),
(5, 'Uday', '123456', 'Apurba', 'Saha', 'male', 'apurbajyotisaha@gmail.com', 1776755205),
(6, 'sreejan24', '123456', 'Sreejan', 'Roy', 'Male', 'sreejanroy@gmail.com', 1712345678),
(7, 'adi', '987654', 'Adi', 'Islam', 'Male', 'adi@gmail.com', 1725896342),
(8, 'sayom', '654321', 'Sayom', 'Shakib', 'Male', 'sayom@gmail.com', 1326548975);

-- --------------------------------------------------------

--
-- Table structure for table `prescriptiontable`
--

CREATE TABLE `prescriptiontable` (
  `id` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `age` int(10) NOT NULL,
  `medicine` varchar(50) NOT NULL,
  `no_of_medicine` int(10) NOT NULL,
  `photo` varchar(31) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescriptiontable`
--

INSERT INTO `prescriptiontable` (`id`, `name`, `age`, `medicine`, `no_of_medicine`, `photo`, `description`) VALUES
(1, 'sreejan', 23, 'Napa', 10, '', 'Per day 2 piece.'),
(4, 'adi', 23, 'histacine', 10, '', 'per day 6 picec');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `ReportersId` int(10) NOT NULL,
  `RepotersName` varchar(40) NOT NULL,
  `RepotersPhoneNo` varchar(40) NOT NULL,
  `RepotersEmail` varchar(40) NOT NULL,
  `ReportTopic` varchar(100) NOT NULL,
  `Details` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`ReportersId`, `RepotersName`, `RepotersPhoneNo`, `RepotersEmail`, `ReportTopic`, `Details`) VALUES
(1, 'sreejan', '01712345645', 'apurbajyotisaha@gmail.com', 'for medicine', 'we need more medicine.'),
(3, 'adi', '01712345645', 'adi@gmail.com', 'about medicine', 'We need more medicine.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blooddonar`
--
ALTER TABLE `blooddonar`
  ADD PRIMARY KEY (`donarid`);

--
-- Indexes for table `emailtable`
--
ALTER TABLE `emailtable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mediteam`
--
ALTER TABLE `mediteam`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `prescriptiontable`
--
ALTER TABLE `prescriptiontable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`ReportersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blooddonar`
--
ALTER TABLE `blooddonar`
  MODIFY `donarid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `emailtable`
--
ALTER TABLE `emailtable`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mediteam`
--
ALTER TABLE `mediteam`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `prescriptiontable`
--
ALTER TABLE `prescriptiontable`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
