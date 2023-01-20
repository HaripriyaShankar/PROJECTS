-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2021 at 08:15 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `railway`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `dbid` int(11) NOT NULL,
  `dbname` text NOT NULL,
  `dbage` text NOT NULL,
  `dbgender` text NOT NULL,
  `dbdob` date NOT NULL,
  `dbaddress` text NOT NULL,
  `dbmobno` int(15) NOT NULL,
  `dbaadhar` int(15) NOT NULL,
  `dbtrano` int(10) NOT NULL,
  `dbclass` text NOT NULL,
  `dbtickno` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`dbid`, `dbname`, `dbage`, `dbgender`, `dbdob`, `dbaddress`, `dbmobno`, `dbaadhar`, `dbtrano`, `dbclass`, `dbtickno`) VALUES
(23, 'Haripriya', '20', 'FEMALE', '2021-12-09', 'xyz', 2147483647, 2147483647, 12603, 'AC FIRST CLASS', 17972),
(25, 'Hari', '20', 'FEMALE', '2021-12-09', 'xyz', 2147483647, 2147483647, 12603, 'FIRST CLASS', 19327);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `dbid` int(11) NOT NULL,
  `dbtraname` text NOT NULL,
  `dbtrano` int(10) NOT NULL,
  `dbsource` text NOT NULL,
  `dbdestination` text NOT NULL,
  `dbarrival` datetime(6) NOT NULL,
  `dbdept` datetime(6) NOT NULL,
  `dbacfirstclass` int(50) NOT NULL,
  `dbfirstclass` int(50) NOT NULL,
  `dbsleeperclass` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`dbid`, `dbtraname`, `dbtrano`, `dbsource`, `dbdestination`, `dbarrival`, `dbdept`, `dbacfirstclass`, `dbfirstclass`, `dbsleeperclass`) VALUES
(4, 'CHENNAI LTT EXPRESS', 11074, 'CHENNAI', 'PUNE', '2021-11-16 00:00:00.000000', '2021-11-18 00:00:00.000000', 99, 47, 19),
(5, 'HYDERABAD EXPRESS', 12603, 'CHENNAI', 'HYDERABAD', '2021-11-23 07:00:00.000000', '2021-11-24 18:00:00.000000', 194, 89, 496),
(6, 'COROMANDEL EXPRESS', 12842, 'CHENNAI', 'KOLKATA', '2021-11-26 00:00:00.000000', '2021-11-28 00:00:00.000000', 250, 100, 300);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `dbid` int(11) NOT NULL,
  `dbname` varchar(50) NOT NULL,
  `dbage` int(10) NOT NULL,
  `dbgender` varchar(15) NOT NULL,
  `dbphno` bigint(15) NOT NULL,
  `dbaadhar` bigint(15) NOT NULL,
  `dbusername` varchar(256) NOT NULL,
  `dbpassword` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`dbid`, `dbname`, `dbage`, `dbgender`, `dbphno`, `dbaadhar`, `dbusername`, `dbpassword`) VALUES
(4, 'haripriya', 20, 'Female', 9876543213, 9876434568, 'hari', '1234'),
(5, 'swathi', 18, 'Female', 48374837434, 58475845555, 'hari', 'hari'),
(6, 'gg', 43, 'gg', 44444444, 43434334, 'hari', '1234'),
(7, 'haripriya', 20, 'gg', 9876543213, 9876434568, 'hari', 'grjgg'),
(8, 'haripriya', 20, 'Female', 9876543213, 9876434568, 'hari', '9876'),
(9, 'haripriya', 18, 'Female', 9876543213, 9876434568, 'hari', '0987'),
(10, 'Haripriya', 20, 'Gender', 48374837434, 9876434568, 'hari', '1234'),
(11, 'Mageswari', 47, 'Female', 9876544325, 234568483947, 'magi', 'hari');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`dbid`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`dbid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`dbid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `dbid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `dbid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `dbid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
