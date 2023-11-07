-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 05:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('12202437', 'himi'),
('12202437', 'himi');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacksystem`
--

CREATE TABLE `feedbacksystem` (
  `id` int(100) NOT NULL,
  `names` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile` int(11) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `feedbackType` varchar(22) NOT NULL,
  `feedback` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbacksystem`
--

INSERT INTO `feedbacksystem` (`id`, `names`, `email`, `mobile`, `gender`, `feedbackType`, `feedback`) VALUES
(1, 'abc', 'abc@gmail.com', 124567892, 'male', 'asdfghj', 'sdfghjkl'),
(2, 'HIMANSHU SHEKHAR', 'chulbul7061@gmail.com', 2147483647, 'male', 'lpuhospital', 'cvbnm,.'),
(5, 'rohan kumar', 'xyzabc@gmail.com', 53535242, 'male', 'lpuonlinecourse', 'hi how are you');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedbacksystem`
--
ALTER TABLE `feedbacksystem`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedbacksystem`
--
ALTER TABLE `feedbacksystem`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
