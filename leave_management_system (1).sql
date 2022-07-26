-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2022 at 08:31 AM
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
(11, 53, '', '2022-07-07', '13:11:00', '14:11:00', 'District Hospital'),
(12, 53, '', '2022-07-02', '14:19:00', '12:19:00', ''),
(13, 6, '', '2022-07-21', '14:33:00', '14:43:00', 'Office work'),
(14, 123, '', '2022-07-08', '17:34:00', '19:34:00', 'Office work'),
(15, 78, '', '2022-07-11', '12:36:00', '15:36:00', ''),
(16, 78, '', '2022-07-04', '11:36:00', '12:36:00', 'Personal work'),
(17, 953, '', '2022-07-05', '13:38:00', '14:38:00', ''),
(18, 60, '', '2022-07-07', '11:41:00', '13:42:00', '');

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
(2, '053', 'Shruti Singh', 'Non-Industrial', 'FCRC', 'Female', 'shruti53', 2),
(3, '006', 'Vishwnath Pratap Singh', 'Industrial', 'TT CELL', 'Male', 'vishwa006', 2),
(4, '010', 'Yamini Chahar', 'Industrial', 'CRC', 'Female', 'yamini010', 2),
(5, '93', 'Aditya Soni', 'Non-Industrial', 'FCRC', 'Male', 'adi093', 2),
(10, '123', 'Somya Sharma', 'Industrial', 'DET', 'Female', 'somya123', 2),
(11, '56', 'Amit Kumar', 'Non-industrial', 'D/OFFICE', 'Male', 'amit56', 2),
(12, '90', 'Khushi Gupta', 'Industrial', 'M', 'Female', 'khushi90', 2),
(13, '45', 'Aadhya Kulshreshtha', 'Industrial', 'HQ', 'Female', 'aadhya45', 2),
(14, '78', 'Mohit Kumar', 'Non-industrial', 'M/CELL', 'Male', 'MOHIT78', 2),
(15, '49', 'Ankit Bansal', 'Non-industrial', 'CASO', 'Male', 'Ankit49', 2),
(16, '39', 'Ayush Bagla', 'Industrial', 'DEV', 'Male', 'AYUSH39', 2),
(17, '60', 'Soha Ali Khan', 'Non-industrial', 'IN', 'Female', 'soha87', 2),
(18, '876', 'Abhishek Sharma', 'Non-industrial', 'ALWC', 'Male', 'abhisg67', 2),
(19, '84', 'Manish Dixit', 'Industrial', 'CRC', 'Male', 'manish67', 2),
(20, '94', 'Rohit Sharma', 'Industrial', 'LPO', 'Male', 'rohit72', 2),
(21, '53', 'Sandali Shivhare', 'Non-industrial', 'M', 'Female', 'sand48', 2),
(22, '953', 'Manoj Kumar', 'Industrial', 'ARCC', 'Male', 'manoj25', 2),
(23, '72', 'Akansha Solanki', 'Industrial', 'IN', 'Female', 'akas40', 2),
(24, '197', 'Anushka Gupta', 'Industrial', 'EST', 'Female', 'anu83', 2),
(25, '235', 'Shalini Saxena ', 'Non-industrial', 'IN', 'Female', 'SHALI86', 2),
(26, '674', 'Vijay Goyal', 'Industrial', 'CES', 'Male', 'vijay51', 2),
(27, '682', 'Dhruv Arora', 'Non-industrial', 'CRC', 'Male', '874shggf', 2),
(28, '8753', 'Isha Rathore', 'Industrial', 'DET', 'Female', '5hsf5', 2),
(29, '2354', 'Yashwant Saxena', 'Industrial', 'CASO', 'Female', 'bfde35', 2),
(30, '32679', 'Gayatri Yadav', 'Industrial', 'M/CELL', 'Female', 'nhy78', 2),
(31, '43', 'Shruti Jadon', 'Industrial', 'IN', 'Female', 'nbvvv', 1),
(32, '1267', 'Pratyush Chahar', 'Industrial', 'TT', 'Male', '1267', 1),
(33, '1234', 'Shanaya', 'Industrial', 'TT', 'Female', '12345', 1),
(35, '12460', 'Akansha Solanki', 'Industrial', 'TT CELL', 'Female', '12345', 1),
(36, '19', 'Bhor Kulshreshtha', 'Industrial', 'FCRC', 'Female', 'bhor19', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
