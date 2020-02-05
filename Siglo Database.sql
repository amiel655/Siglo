-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2017 at 12:46 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siglorecords`
--

-- --------------------------------------------------------

--
-- Table structure for table `sigloadmin`
--

CREATE TABLE `sigloadmin` (
  `Admin_ID` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `sigloadmin`
--

INSERT INTO `sigloadmin` (`Admin_ID`, `Username`, `Password`) VALUES
(1, 'rvdelapaz', 'Siglofinecuts');

-- --------------------------------------------------------

--
-- Table structure for table `sigloreservation`
--

CREATE TABLE `sigloreservation` (
  `Customer_ID` int(11) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Contact` varchar(11) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `TimeSlot` varchar(30) NOT NULL,
  `Barber` varchar(20) NOT NULL,
  `Message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `sigloreservation`
--

INSERT INTO `sigloreservation` (`Customer_ID`, `Fname`, `Lname`, `Contact`, `Date`, `TimeSlot`, `Barber`, `Message`) VALUES
(12, 'Shernon', 'Severino', '09055910252', '08/18/2017', 'Slot1:10:00am-11:00am', 'DUD', 'sdcsdcsdcsdc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sigloadmin`
--
ALTER TABLE `sigloadmin`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `sigloreservation`
--
ALTER TABLE `sigloreservation`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sigloreservation`
--
ALTER TABLE `sigloreservation`
  MODIFY `Customer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
