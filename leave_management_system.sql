-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2022 at 09:31 AM
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
-- Database: `leave_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `ntr`
--

CREATE TABLE `ntr` (
  `id` int(11) NOT NULL,
  `EmpId` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `NTR_Date` date NOT NULL,
  `NTR_From` time NOT NULL,
  `NTR_To` time NOT NULL,
  `Reason` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ntr`
--

INSERT INTO `ntr` (`id`, `EmpId`, `Name`, `NTR_Date`, `NTR_From`, `NTR_To`, `Reason`) VALUES
(1, 53, '', '2022-07-01', '10:35:00', '04:00:00', 'QWERTYASDFGHJKL'),
(2, 6, '', '2022-07-02', '12:30:00', '04:00:00', 'ZXCVBNM55612'),
(6, 53, '', '2022-07-02', '12:33:00', '04:33:00', 'qwertyu'),
(7, 6, '', '2022-07-03', '12:40:00', '04:30:00', '');

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
  `DepartmentId` int(11) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Password` varchar(59) NOT NULL,
  `Role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblemployees`
--

INSERT INTO `tblemployees` (`id`, `EmpId`, `Name`, `Group`, `DepartmentId`, `Department`, `Gender`, `Password`, `Role`) VALUES
(1, '001', 'Bhor Kulshreshtha', 'Industrial', 10, 'FCRC', 'Female', 'bhor19', 1),
(2, '053', 'Shruti Singh', 'Non-Industrial', 10, 'FCRC', 'Female', 'shruti53', 2),
(3, '006', 'Vishwnath Pratap Singh', 'Industrial', 32, 'TT CELL', 'Male', 'vishwa006', 2),
(4, '010', 'Yamini Chahar', 'Industrial', 5, 'CRC', 'Female', 'yamini010', 2),
(5, '93', 'Aditya Soni', 'Non-Industrial', 10, 'FCRC', 'Male', 'adi093', 2),
(7, '029', 'Shanaya', 'Industrial', 0, '16', 'Male', 'shanaya29', 2),
(8, '34', 'Abcd', 'Industrial', 0, '18', 'Male', 'abcd', 2);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ntr`
--
ALTER TABLE `ntr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbldepartments`
--
ALTER TABLE `tbldepartments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tblemployees`
--
ALTER TABLE `tblemployees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
