-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2024 at 05:29 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `major`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `A_Id` int(3) NOT NULL,
  `A_Name` varchar(15) NOT NULL,
  `A_DOB` date NOT NULL,
  `A_Gender` varchar(6) NOT NULL,
  `A_Phone` varchar(10) NOT NULL,
  `A_Email` varchar(20) NOT NULL,
  `A_Address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_Id`, `A_Name`, `A_DOB`, `A_Gender`, `A_Phone`, `A_Email`, `A_Address`) VALUES
(1, 'sanjay patra', '1990-07-20', 'male', '9854672219', 'sanjay@gmail.com', 'beltola guwahati'),
(2, 'manik ghosh', '1990-07-21', 'male', '9435550302', 'manik@gmail.com', 'jayanagar guwahati');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `E_Id` int(3) NOT NULL,
  `E_Name` varchar(15) NOT NULL,
  `E_DOB` date NOT NULL,
  `E_Gender` varchar(6) NOT NULL,
  `E_Phone` varchar(10) NOT NULL,
  `E_Email` varchar(20) NOT NULL,
  `E_Address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`E_Id`, `E_Name`, `E_DOB`, `E_Gender`, `E_Phone`, `E_Email`, `E_Address`) VALUES
(1, 'boi ghosh', '2002-07-20', 'female', '6003177203', 'boi@gmail.com', 'jayanagar guwahati'),
(2, 'bishal ghosh', '2008-07-21', 'male', '9401448909', 'bishal@gmail.com', 'jayanagar guwahati'),
(3, 'mohd uzaif', '2000-04-21', 'male', '8755516441', 'uzaif@email.com', 'roorkee uttrakhand'),
(4, 'gauri patra', '1990-07-30', 'female', '9134682045', 'gauri@gmail.com', 'beltola guwhati'),
(5, 'rakhi ghosh', '1976-01-30', 'female', '7002616840', 'rakhi@gmail.com', 'jayanagar guwahati'),
(6, 'jash patra', '2001-01-01', 'male', '9120667889', 'jash@gmail.com', 'beltola guwhati');

-- --------------------------------------------------------

--
-- Table structure for table `feb_month`
--

CREATE TABLE `feb_month` (
  `id` int(6) UNSIGNED NOT NULL,
  `Achieved` varchar(255) NOT NULL,
  `Shortfall` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feb_month`
--

INSERT INTO `feb_month` (`id`, `Achieved`, `Shortfall`) VALUES
(1, '1', '1'),
(2, '1', '1'),
(3, '1', '1'),
(4, '1', '1'),
(5, '1', '1'),
(6, '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `july_month`
--

CREATE TABLE `july_month` (
  `id` int(6) UNSIGNED NOT NULL,
  `Achieved` varchar(255) NOT NULL,
  `Shortfall` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `july_month`
--

INSERT INTO `july_month` (`id`, `Achieved`, `Shortfall`) VALUES
(1, '2', '3'),
(2, '4', '5'),
(3, '6', '7');

-- --------------------------------------------------------

--
-- Table structure for table `june_month`
--

CREATE TABLE `june_month` (
  `id` int(6) UNSIGNED NOT NULL,
  `Achieved` varchar(255) NOT NULL,
  `Shortfall` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `june_month`
--

INSERT INTO `june_month` (`id`, `Achieved`, `Shortfall`) VALUES
(1, '1', '1'),
(2, '1', '1'),
(3, '1', '1'),
(4, '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `pe`
--

CREATE TABLE `pe` (
  `s_no` int(11) NOT NULL,
  `rabill_no` varchar(12) NOT NULL,
  `month` varchar(10) NOT NULL,
  `work_done` decimal(10,2) NOT NULL,
  `variation` decimal(10,2) NOT NULL,
  `escalation_amt` decimal(10,2) NOT NULL,
  `l_base` decimal(10,2) NOT NULL,
  `l_current` decimal(10,2) NOT NULL,
  `l_amt` decimal(10,2) NOT NULL,
  `m_base` decimal(10,2) NOT NULL,
  `m_current` decimal(10,2) NOT NULL,
  `m_amt` decimal(10,2) NOT NULL,
  `f_base` decimal(10,2) NOT NULL,
  `f_current` decimal(10,2) NOT NULL,
  `f_amt` decimal(10,2) NOT NULL,
  `c_base` decimal(10,2) NOT NULL,
  `c_current` decimal(10,2) NOT NULL,
  `c_amt` decimal(10,2) NOT NULL,
  `s_base` decimal(10,2) NOT NULL,
  `s_current` decimal(10,2) NOT NULL,
  `s_amt` decimal(10,2) NOT NULL,
  `b_base` decimal(10,2) NOT NULL,
  `b_current` decimal(10,2) NOT NULL,
  `b_amt` decimal(10,2) NOT NULL,
  `p_base` decimal(10,2) NOT NULL,
  `p_current` decimal(10,2) NOT NULL,
  `p_amt` decimal(10,2) NOT NULL,
  `total_amt` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pe`
--

INSERT INTO `pe` (`s_no`, `rabill_no`, `month`, `work_done`, `variation`, `escalation_amt`, `l_base`, `l_current`, `l_amt`, `m_base`, `m_current`, `m_amt`, `f_base`, `f_current`, `f_amt`, `c_base`, `c_current`, `c_amt`, `s_base`, `s_current`, `s_amt`, `b_base`, `b_current`, `b_amt`, `p_base`, `p_current`, `p_amt`, `total_amt`) VALUES
(0, '', '', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(1, 'rabill_1', 'jan-march', 99999999.99, 0.00, 67455120.00, 173.00, 191.00, 1491421.00, 154.20, 170.10, 2660474.55, 40.77, 48.23, 524568.21, 153.00, 172.00, 361634.39, 155.10, 166.90, 218109.24, 43192.25, 51058.72, 1044258.23, 130.90, 138.80, 173018.00, 6473483.63),
(2, 'rabill_2', 'april-june', 99999999.99, 0.00, 11524714.00, 173.00, 189.00, 226498.06, 154.20, 171.30, 488849.12, 40.77, 48.27, 90103.39, 153.00, 171.30, 58584.17, 155.10, 166.50, 36000.92, 43192.25, 51212.50, 181899.99, 130.90, 138.80, 29560.25, 1111495.89);

-- --------------------------------------------------------

--
-- Table structure for table `planning`
--

CREATE TABLE `planning` (
  `id` int(6) UNSIGNED NOT NULL,
  `Quantity` varchar(255) NOT NULL,
  `Wtg` varchar(255) NOT NULL,
  `july_month` varchar(255) DEFAULT NULL,
  `may_month` varchar(255) DEFAULT NULL,
  `june_month` varchar(255) DEFAULT NULL,
  `feb_month` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `planning`
--

INSERT INTO `planning` (`id`, `Quantity`, `Wtg`, `july_month`, `may_month`, `june_month`, `feb_month`) VALUES
(1, '1', '1', '1', NULL, NULL, ''),
(2, '1', '1', '', NULL, NULL, '2'),
(3, '1', '1', '', '1', '1', ''),
(4, '1', '1', '', NULL, NULL, ''),
(5, '1', '1', '', '1', '1', '2'),
(6, '1', '1', '', NULL, NULL, ''),
(7, '1', '1', '', NULL, NULL, '2'),
(8, '1', '1', '1', NULL, NULL, ''),
(9, '1', '1', '', NULL, NULL, ''),
(10, '1', '1', '', NULL, NULL, ''),
(11, '1', '1', '', NULL, NULL, '2'),
(12, '1', '1', '', NULL, NULL, ''),
(13, '1', '1', '', NULL, NULL, ''),
(14, '1', '1', '', '1', '1', ''),
(15, '1', '1', '1', NULL, NULL, '2'),
(16, '1', '1', '', NULL, NULL, ''),
(17, '1', '1', '', NULL, NULL, ''),
(18, '1', '1', '', NULL, NULL, ''),
(19, '1', '1', '', NULL, NULL, ''),
(20, '1', '1', '', NULL, NULL, ''),
(21, '1', '1', '', '1', '1', ''),
(22, '1', '1', '', NULL, NULL, ''),
(23, '1', '1', '', NULL, NULL, ''),
(24, '1', '1', '', NULL, NULL, '2'),
(25, '1', '1', '', NULL, NULL, ''),
(26, '1', '1', '', NULL, NULL, ''),
(27, '1', '1', '', NULL, NULL, ''),
(28, '1', '1', '', NULL, NULL, ''),
(29, '1', '1', '', NULL, NULL, ''),
(30, '1', '1', '', NULL, NULL, ''),
(31, '1', '1', '', NULL, NULL, ''),
(32, '1', '1', '', NULL, NULL, ''),
(33, '1', '1', '', NULL, NULL, ''),
(34, '0', '0', '21', NULL, NULL, '24'),
(35, '0', '0', '22', NULL, NULL, '24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`A_Id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`E_Id`);

--
-- Indexes for table `feb_month`
--
ALTER TABLE `feb_month`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `july_month`
--
ALTER TABLE `july_month`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `june_month`
--
ALTER TABLE `june_month`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pe`
--
ALTER TABLE `pe`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `planning`
--
ALTER TABLE `planning`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `A_Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `E_Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `feb_month`
--
ALTER TABLE `feb_month`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `july_month`
--
ALTER TABLE `july_month`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `june_month`
--
ALTER TABLE `june_month`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `planning`
--
ALTER TABLE `planning`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
