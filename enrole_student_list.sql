-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2023 at 06:41 PM
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
-- Database: `online_edu`
--

-- --------------------------------------------------------

--
-- Table structure for table `enrole_student_list`
--

CREATE TABLE `enrole_student_list` (
  `enrole_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `pay_status` tinyint(4) NOT NULL,
  `student_account` varchar(191) DEFAULT NULL,
  `student_payment_type` varchar(191) NOT NULL,
  `teacher_pay` decimal(30,2) NOT NULL,
  `t_pay` tinyint(4) NOT NULL,
  `teacher_account` varchar(191) DEFAULT NULL,
  `teacher_payment_type` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrole_student_list`
--

INSERT INTO `enrole_student_list` (`enrole_id`, `student_id`, `course_id`, `price`, `pay_status`, `student_account`, `student_payment_type`, `teacher_pay`, `t_pay`, `teacher_account`, `teacher_payment_type`) VALUES
(39, 1, 2, '5555', 0, '234578', 'Nogod', '4999.50', 1, '545454', 'Bkash'),
(40, 1, 3, '0', 1, '01767654345', 'Bkash', '0.00', 0, NULL, NULL),
(41, 1, 13, '7000', 1, '45678909654', 'Nogod', '6300.00', 0, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enrole_student_list`
--
ALTER TABLE `enrole_student_list`
  ADD PRIMARY KEY (`enrole_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enrole_student_list`
--
ALTER TABLE `enrole_student_list`
  MODIFY `enrole_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
