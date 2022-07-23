-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2022 at 02:50 PM
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
-- Database: `studentresult`
--

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `Registration` int(5) NOT NULL,
  `RollNo` bigint(12) DEFAULT NULL,
  `sub1` float(3,2) DEFAULT NULL,
  `sub2` float(3,2) DEFAULT NULL,
  `sub3` float(3,2) DEFAULT NULL,
  `sub4` float(3,2) DEFAULT NULL,
  `sub5` float(3,2) DEFAULT NULL,
  `semester` int(2) DEFAULT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`Registration`, `RollNo`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `semester`, `name`) VALUES
(2152, 11100119012, 9.80, 9.50, 9.60, 9.70, 9.99, 6, 'Rahul Nandi'),
(2156, 11100119030, 9.50, 9.30, 9.50, 9.60, 9.99, 6, 'Ayan Mukutmoni'),
(2158, 11100119017, 9.80, 9.40, 9.40, 9.90, 9.99, 6, 'Arup Kumar Mondal'),
(2159, 11100119001, 9.90, 9.80, 9.60, 9.50, 9.99, 6, 'Supriya Sen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`Registration`),
  ADD UNIQUE KEY `RollNo` (`RollNo`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `res_reg_fk` FOREIGN KEY (`Registration`) REFERENCES `studentlogin`.`student` (`Registration`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
