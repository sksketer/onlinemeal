-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2021 at 06:56 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sketer`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `email` varchar(25) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`email`, `description`) VALUES
('ksamrit', ''),
('ksamrit121@gmail.com', 'I am admin'),
('ksamrit121@gmail.com', 'I am admin and owner'),
('himanshu.pant_cs18@gla.ac', 'i am a user');

-- --------------------------------------------------------

--
-- Table structure for table `form-data`
--

CREATE TABLE `form-data` (
  `sno` int(30) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form-data`
--

INSERT INTO `form-data` (`sno`, `fname`, `lname`, `email`, `password`, `dob`, `gender`) VALUES
(1, 'sketer', ' I SK', 'ksamrit121@gmail.com', 'IamAdmin', '2001-10-20', 'Male'),
(17, 'Anuj', 'kumar', 'anuj.kumar_cs18@gla.ac.in', '12345679', '2000-11-06', 'Male'),
(21, 'Amit', 'Munda', 'amit.munda_cs18@gla.ac.in', 'munda001', '2001-12-25', 'Male'),
(23, 'Long username', 'ha', 'longusernameha@sketeramrit.com', 'sketeramrit', '2020-11-24', 'Male'),
(24, 'Disha', 'Agarwal', 'disha.agarwal@gmail.com', '12345', '1009-06-19', 'Female'),
(27, 'Himanshu', 'Pant', 'himanshu.pant_cs18@gla.ac.in', '12345', '2021-01-19', 'Male'),
(28, 'Hacker ', 'I SK', 'hacker@sketer.com', 'hellosk', '2021-03-04', 'Male'),
(29, 'aman', 'saxena', 'aman.saxena_cs18@gla.ac.in', '12345', '2020-11-10', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form-data`
--
ALTER TABLE `form-data`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form-data`
--
ALTER TABLE `form-data`
  MODIFY `sno` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
