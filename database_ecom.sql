-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2019 at 06:15 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `no` int(255) DEFAULT NULL,
  `pname` varchar(50) DEFAULT NULL,
  `unitprice` varchar(50) DEFAULT NULL,
  `qty` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`no`, `pname`, `unitprice`, `qty`) VALUES
(NULL, NULL, NULL, ''),
(NULL, 'oooo', '90', '1'),
(NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `account` varchar(50) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pnumber` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`account`, `fname`, `email`, `pnumber`, `password`) VALUES
('empity223', 'ryan novanda', 'ryannovanda25@gmail.com', '089631676695', 'eerrtryty'),
('empity2233', 'gooks', 'lun@ggg.com', '8897', 'asdqwe1245'),
('loo3345', 'ryan novandan', 'aggg@gmail.com', '88977', '123456'),
('ryann', 'assszzz', 'rizki_yuli12@yahoo.com', '089631676695', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE `rekening` (
  `namabank` varchar(50) DEFAULT NULL,
  `norek` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekening`
--

INSERT INTO `rekening` (`namabank`, `norek`) VALUES
('Bank BCA', 'ssdwrrw'),
('Bank BCA', 'eeetewqqqrr'),
('Bank BRI', '3335111``'),
('Bank BNI', '1112341'),
('Bank BCA', '12234566432'),
('Bank BCA', '445342');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`account`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
