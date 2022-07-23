-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2022 at 02:48 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentlogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `RollNo` bigint(12) DEFAULT NULL,
  `Registration` int(5) NOT NULL,
  `Semester` int(2) NOT NULL,
  `Department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Fname`, `Lname`, `RollNo`, `Registration`, `Semester`, `Department`) VALUES
('Rahul', 'Nandi', 11100119012, 2152, 6, 'Computer Science and Engineering'),
('Ayan', 'Mukutmoni', 11100119030, 2156, 6, 'Computer science and engineering'),
('Arup Kumar', 'Mondal', 11100119017, 2158, 6, 'Computer Science and Engineering'),
('Supriya', 'Sen', 11100119001, 2159, 6, 'Computer Science and Engineering');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Registration`),
  ADD UNIQUE KEY `RollNo` (`RollNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
