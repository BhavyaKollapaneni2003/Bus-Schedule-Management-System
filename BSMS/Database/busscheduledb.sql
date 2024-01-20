-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2021 at 07:54 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `busscheduledb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmpassword` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `user`, `password`, `confirmpassword`, `status`) VALUES
(5, 'sony', 'soo', 'SaiEesha', 'saieesha', 'saieesha', 'Admin'),
(7, 'bhavya', 'chowdary', 'bhavya.kollapaneni272@gmail.com', 'f21048619dd740ffe89b550bc250c324', 'f21048619dd740ffe89b550bc250c324', 'CLIENT');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `BUS_ID` int(30) NOT NULL,
  `BUS_NAME` text NOT NULL,
  `DRIVER_ID` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`BUS_ID`, `BUS_NAME`, `DRIVER_ID`) VALUES
(1, 'Contractual Bus1', 3),
(2, 'Contractual Bus2', 1),
(3, 'Institute Bus', 4);

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `DRIVER_ID` int(30) NOT NULL,
  `DRIVER_NAME` varchar(50) NOT NULL,
  `EMPLOY_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`DRIVER_ID`, `DRIVER_NAME`, `EMPLOY_DATE`) VALUES
(0, 'Badong', '2018-11-09'),
(1, 'Bebot Baja', '2019-02-02'),
(3, 'DAROY', '2018-05-15'),
(4, 'Kanor', '2018-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `ROUTE_ID` int(50) NOT NULL,
  `START` varchar(50) NOT NULL,
  `FINISH` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`ROUTE_ID`, `START`, `FINISH`) VALUES
(1, 'Institute', 'Sadar'),
(2, 'Institute', 'Gadheri'),
(3, 'Hexagonal Canteen', 'Sadar'),
(4, 'Institute', 'Mehgawan'),
(5, 'Mehgawan', 'Sadar'),
(6, 'NR2', 'School'),
(7, 'Reliance Fresh', 'Institute'),
(8, 'Institute', 'Suarkol'),
(9, 'NR2', 'Sadar'),
(10, 'NR2', 'Russel Chowk');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `BUS_ID` int(11) NOT NULL,
  `START` varchar(50) NOT NULL,
  `END` varchar(50) NOT NULL,
  `OUT_TIME` time NOT NULL,
  `day` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`BUS_ID`, `START`, `END`, `OUT_TIME`, `day`) VALUES
(1, 'Institute', 'Sadar', '15:30:00', 'Mon-Fri'),
(1, 'Sadar', 'Institute', '16:15:00', 'Mon-Fri'),
(1, 'Institute', 'Gadheri', '17:30:00', 'Mon-Fri'),
(1, 'Gadheri', 'Institute', '17:45:00', 'Mon-Fri'),
(1, 'Institute', 'sadar', '18:30:00', 'Mon-Fri'),
(1, 'sadar', 'Institute', '20:20:00', 'Mon-Fri'),
(1, 'Institute', 'Sadar', '21:00:00', 'Mon-Fri'),
(1, 'Sadar', 'Institute', '21:40:00', 'Mon-Fri'),
(2, 'Sadar', 'Institute', '16:55:00', 'Mon-Fri'),
(2, 'Hexagonal Canteen', 'Sadar', '17:50:00', 'Mon-Fri'),
(2, 'sadar', 'Institute', '18:30:00', 'Mon-Fri'),
(2, 'Institute', 'Gadheri', '19:40:00', 'Mon-Fri'),
(2, 'Gadheri', 'Institute', '19:50:00', 'Mon-Fri'),
(2, 'Institute', 'Mehgawan', '20:00:00', 'Mon-Fri'),
(2, 'Mehgawan', 'Sadar', '20:05:00', 'Mon-Fri'),
(3, 'NR2', 'School', '06:45:00', 'Mon-Fri'),
(3, 'Reliance Fresh', 'Institute', '08:15:00', 'Mon-Fri'),
(3, 'NR2', 'School', '12:30:00', 'Mon-Fri'),
(3, 'School', 'NR2', '00:00:00', 'Mon-Fri'),
(3, 'Institute', 'Suarkol', '17:40:00', 'Mon-Fri'),
(3, 'Suarkol', 'Institute', '17:50:00', 'Mon-Fri'),
(3, 'Institute', 'Suarkol', '19:40:00', 'Mon-Fri'),
(1, 'Institute', 'Gadheri', '16:40:00', 'sat'),
(1, 'Gadheri', 'Institute', '16:50:00', 'sat'),
(1, 'Institute', 'Gadheri', '19:00:00', 'sat'),
(3, 'NR2', 'sadar', '11:00:00', 'sat'),
(3, 'Sadar', 'NR2', '11:20:00', 'sat'),
(3, 'NR2', 'sadar', '12:30:00', 'sat'),
(3, 'Sadar', 'NR2', '13:00:00', 'sat'),
(3, 'NR2', 'School', '06:45:00', 'sat'),
(3, 'Reliance fresh', 'Institute', '08:15:00', 'sat'),
(3, 'NR2', 'sadar', '15:30:00', 'sat-sun'),
(3, 'Sadar', 'NR2', '16:45:00', 'sat-sun'),
(3, 'NR2', 'sadar', '17:20:00', 'sat-sun'),
(3, 'Sadar', 'NR2', '18:15:00', 'sat-sun'),
(3, 'NR2', 'sadar', '19:00:00', 'sat-sun'),
(3, 'Sadar', 'NR2', '20:20:00', 'sat-sun'),
(3, 'NR2', 'Russel Chowk', '21:00:00', 'sat-sun'),
(3, 'Russel Chowk', 'NR2', '21:40:00', 'sat-sun');

-- --------------------------------------------------------

--
-- Table structure for table `stop`
--

CREATE TABLE `stop` (
  `LOCATION_ID` varchar(50) NOT NULL,
  `LOCATION_NAME` varchar(40) NOT NULL,
  `ROUTE_ID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stop`
--

INSERT INTO `stop` (`LOCATION_ID`, `LOCATION_NAME`, `ROUTE_ID`) VALUES
('L01', 'Sadar', 1),
('L02', 'Sadar', 3),
('L03', 'Sadar', 5),
('L04', 'Sadar', 9),
('L05', 'Institute', 1),
('L06', 'Institute', 2),
('L07', 'Institute', 4),
('L08', 'Institute', 7),
('L09', 'Institute', 8),
('L10', 'Gadheri', 2),
('L11', 'Mehgawan', 4),
('L12', 'Mehgawan', 5),
('L13', 'NR2', 6),
('L14', 'NR2', 9),
('L15', 'NR2', 10),
('L16', 'Hexagonal Canteen', 3),
('L17', 'School', 6),
('L18', 'Suarkol', 8),
('L19', 'Reliance Fresh', 7),
('L20', 'Russel Chowk', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`BUS_ID`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`DRIVER_ID`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`ROUTE_ID`);

--
-- Indexes for table `stop`
--
ALTER TABLE `stop`
  ADD PRIMARY KEY (`LOCATION_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `BUS_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
