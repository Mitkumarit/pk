-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2023 at 04:04 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `v_id` int(11) NOT NULL,
  `v_url` varchar(250) NOT NULL,
  `v_date` date NOT NULL,
  `v_uni_no` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`v_id`, `v_url`, `v_date`, `v_uni_no`) VALUES
(33, 'A7XbKKY5Jv4', '2023-11-09', 2198333596611424),
(34, '_ONbHy_a2og', '2023-11-09', 1563599085565965),
(37, 'ZgigavsfP_s', '2023-11-09', 9277266568366195),
(38, 'JjWpi9WhuOY', '2023-11-09', 4284147162161568),
(39, '2zk6-5iGp44', '2023-11-09', 1437462790974656),
(40, 'ypRm8ORPR_U', '2023-11-09', 2925768912883816),
(41, 'h4UajRJCvsI', '2023-11-09', 3370552880447442),
(42, 'iMv6aMMtXF4', '2023-11-09', 6138379666418431),
(43, 'pZImOqnMz38', '2023-11-09', 4920828578794173),
(44, 'vznSBlrp6v4', '2023-11-09', 9044941874615474),
(45, '9tWenL0MvOA', '2023-11-09', 4092244939930536),
(46, '93LIJMLbnvA', '2023-11-09', 5171658479694456),
(47, 'TgRQLozxKmc', '2023-11-09', 8840831206789700),
(48, 'OD8J8isRxxQ', '2023-11-09', 5815995083463326),
(49, 'QnGuQHGzvsc', '2023-11-09', 4808656106446522),
(50, 'bQS7kIhpYd4', '2023-11-09', 9187016862922727),
(51, '9JqNeKep_8Q', '2023-11-09', 2354428557073478);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`v_id`),
  ADD UNIQUE KEY `v_uni_no` (`v_uni_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
