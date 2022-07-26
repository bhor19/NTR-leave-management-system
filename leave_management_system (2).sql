-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220503.92457c1607
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2022 at 04:10 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leave_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `dtr`
--

CREATE TABLE `dtr` (
  `id` int(11) NOT NULL,
  `EmpId` varchar(20) NOT NULL,
  `DTR_Date` date NOT NULL,
  `DTR_From` time NOT NULL,
  `DTR_To` time NOT NULL,
  `Reason` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dtr`
--

INSERT INTO `dtr` (`id`, `EmpId`, `DTR_Date`, `DTR_From`, `DTR_To`, `Reason`) VALUES
(1, '053', '2022-07-12', '20:59:00', '20:59:00', 'DFBN');

-- --------------------------------------------------------

--
-- Table structure for table `ntr`
--

CREATE TABLE `ntr` (
  `id` int(11) NOT NULL,
  `EmpId` varchar(11) NOT NULL,
  `NTR_Date` date NOT NULL,
  `NTR_From` time NOT NULL,
  `NTR_To` time NOT NULL,
  `Reason` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ntr`
--

INSERT INTO `ntr` (`id`, `EmpId`, `NTR_Date`, `NTR_From`, `NTR_To`, `Reason`) VALUES
(1, '53', '2022-07-01', '01:00:00', '04:20:50', 'qwertyui'),
(2, '6', '2022-07-01', '22:59:52', '22:59:52', 'qwertyu'),
(3, '53', '2022-07-02', '23:00:52', '23:22:52', 'sdfgh'),
(8, '6', '2022-07-02', '23:25:00', '12:25:00', 'qwertyui'),
(10, '53', '2022-07-05', '14:17:00', '16:17:00', 'zxcvb'),
(12, '53', '2022-07-06', '20:38:00', '20:38:00', 'abcdefghijkl'),
(13, '53', '2022-07-07', '08:57:00', '04:57:00', 'asdfgh'),
(14, '6', '2022-07-07', '09:52:00', '04:52:00', 'asdfghjk'),
(15, '53', '2022-07-08', '12:02:00', '16:02:00', 'qwertyu'),
(17, '53', '2022-07-09', '12:15:00', '16:15:00', 'qwertyui'),
(18, '053', '2022-07-09', '17:36:00', '17:36:00', 'qwertyu');

-- --------------------------------------------------------

--
-- Table structure for table `tbldepartments`
--

CREATE TABLE `tbldepartments` (
  `id` int(11) NOT NULL,
  `DepartmentId` int(11) NOT NULL,
  `Department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbldepartments`
--

INSERT INTO `tbldepartments` (`id`, `DepartmentId`, `Department`) VALUES
(1, 1, 'ALWC'),
(2, 2, 'ARCC'),
(3, 3, 'CASO'),
(4, 4, 'CES'),
(5, 5, 'CRC'),
(6, 6, 'D/OFFICE'),
(7, 7, 'DET BWG'),
(8, 8, 'DEV LAB'),
(9, 9, 'EST'),
(10, 10, 'FCRC'),
(11, 11, 'FIN'),
(12, 12, 'FIRE STN'),
(13, 13, 'GE'),
(14, 14, 'HQ'),
(15, 15, 'IN'),
(16, 16, 'IN DIG CELL'),
(17, 17, 'LPO'),
(18, 18, 'M & R'),
(19, 19, 'M/CELL'),
(20, 20, 'MCO'),
(21, 21, 'ME'),
(22, 22, 'MFR CELL'),
(23, 23, 'MI ROOM'),
(24, 24, 'MR'),
(25, 25, 'MT'),
(26, 26, 'OSS'),
(27, 27, 'P & P'),
(28, 28, 'PM OFFICE'),
(29, 29, 'QM OFFICE'),
(30, 30, 'RG'),
(31, 31, 'TL'),
(32, 32, 'TT CELL'),
(33, 33, 'WSG');

-- --------------------------------------------------------

--
-- Table structure for table `tblemployees`
--

CREATE TABLE `tblemployees` (
  `id` int(11) NOT NULL,
  `EmpId` varchar(50) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Group` varchar(50) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Password` varchar(59) NOT NULL,
  `Role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblemployees`
--

INSERT INTO `tblemployees` (`id`, `EmpId`, `Name`, `Group`, `Department`, `Gender`, `Password`, `Role`) VALUES
(1, '001', 'Bhor Kulshreshtha', 'Industrial', 'FCRC', 'Female', 'bhor19', 1),
(2, '053', 'Shruti Singh', 'Non-Industrial', 'FCRC', 'Female', 'shruti53', 2),
(3, '006', 'Vishwnath Pratap Singh', 'Industrial', 'TT CELL', 'Male', 'vishwa006', 2),
(4, '010', 'Yamini Chahar', 'Industrial', 'CRC', 'Female', 'yamini010', 2),
(5, '93', 'Aditya Soni', 'Non-Industrial', 'FCRC', 'Male', 'adi093', 2),
(7, '029', 'Shanaya', 'Industrial', '16', 'Male', 'shanaya29', 2),
(12, '15', 'Atharv Singh Jadon', 'Industrial', 'TL', 'Male', 'atharv15', 1),
(14, '12670', 'Pratyush  Chahar', 'Industrial', 'TT', 'Male', '12345', 1),
(15, '458', 'Mohit Kumar', 'Non-Industrial', 'EST', 'Male', 'mohit56', 2),
(16, '23459', 'Soha Ali Khan', 'Industrial', 'DEV', 'Female', 'soha123', 2),
(17, '1254', 'Sandali Shivhare', 'Non-Industrial', 'CES', 'Female', 'sandali123', 2),
(19, '7543', 'Akansha Solanki', 'Industrial', 'CASO', 'Female', 'akansha234', 2),
(20, '8765', 'Somya Sharma', 'Non-Industrial', 'LPO', 'Female', 'somya654', 2),
(21, '4567', 'Ajay Kumar', 'Industrial', 'GE', 'Male', 'dfghjkl', 2),
(22, '3456', 'Manoj Kumar', 'Industrial', 'MFR', 'Male', 'lkjhbgvc', 2),
(23, '1086', 'Saroj Khan', 'Non-Industrial', 'QM', 'Female', '00000000000', 2),
(24, '963245', 'Sunita ', 'Industrial', 'FIRE', 'Female', '9876', 2),
(27, '8765re', 'fgbhunjimk', 'Industrial', 'IN', 'Male', '7654321dcvbnm', 1),
(28, '65453', 'abcd', 'Industrial', 'M', 'Female', '76543', 2);

-- --------------------------------------------------------

--
-- Table structure for table `visitor_logs`
--

CREATE TABLE `visitor_logs` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `user_ip_address` varchar(100) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor_logs`
--

INSERT INTO `visitor_logs` (`id`, `Name`, `user_ip_address`, `user_agent`, `created`) VALUES
(32, '', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-13 19:01:24'),
(33, '', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-13 19:01:56'),
(34, '', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-13 19:02:05'),
(35, 'Bhor Kulshreshtha', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-13 19:02:14'),
(36, '', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-13 19:02:28'),
(37, '', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-13 19:02:53'),
(38, '', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-13 19:03:43'),
(39, '', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-13 19:04:51'),
(40, '', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-13 19:06:08'),
(41, '', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-13 19:06:09'),
(42, 'Bhor Kulshreshtha', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-13 19:10:52'),
(43, 'Bhor Kulshreshtha', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-13 19:11:15'),
(44, 'Bhor Kulshreshtha', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-13 19:16:48'),
(45, 'Bhor Kulshreshtha', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-13 19:16:50'),
(46, 'Bhor Kulshreshtha', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-13 19:16:52'),
(47, '', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-13 19:32:40'),
(48, '', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-13 19:32:43'),
(49, '', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-13 19:33:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dtr`
--
ALTER TABLE `dtr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ntr`
--
ALTER TABLE `ntr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbldepartments`
--
ALTER TABLE `tbldepartments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblemployees`
--
ALTER TABLE `tblemployees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor_logs`
--
ALTER TABLE `visitor_logs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dtr`
--
ALTER TABLE `dtr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ntr`
--
ALTER TABLE `ntr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbldepartments`
--
ALTER TABLE `tbldepartments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tblemployees`
--
ALTER TABLE `tblemployees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `visitor_logs`
--
ALTER TABLE `visitor_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



