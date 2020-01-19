-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 19, 2020 at 03:45 PM
-- Server version: 5.6.37
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lending`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_history`
--

CREATE TABLE IF NOT EXISTS `tbl_history` (
  `hid` int(7) NOT NULL,
  `currentamount` double(7,3) NOT NULL,
  `currentbalance` double(7,3) NOT NULL,
  `penalty` double(7,3) NOT NULL,
  `dop` date NOT NULL COMMENT 'date of payment',
  `tid` int(7) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_history`
--

INSERT INTO `tbl_history` (`hid`, `currentamount`, `currentbalance`, `penalty`, `dop`, `tid`) VALUES
(1, 2000.000, 2200.000, 0.000, '0000-00-00', 1),
(2, 3000.000, 3300.000, 300.000, '2020-01-19', 1),
(3, 5000.000, 5500.000, 0.000, '0000-00-00', 2),
(4, 1500.000, 1650.000, 150.000, '2020-01-19', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction`
--

CREATE TABLE IF NOT EXISTS `tbl_transaction` (
  `tid` int(7) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `loaninterest` int(7) NOT NULL,
  `amount` int(7) NOT NULL,
  `top` int(7) NOT NULL,
  `tp` double(7,3) NOT NULL,
  `mp` double(7,3) NOT NULL,
  `dd` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaction`
--

INSERT INTO `tbl_transaction` (`tid`, `fname`, `lname`, `address`, `loaninterest`, `amount`, `top`, `tp`, `mp`, `dd`) VALUES
(1, 'Elijah', 'Abgao', 'Montana', 10, 2000, 1, 3300.000, 275.000, '2020-08-18'),
(2, 'James', 'Apal', 'Ila kyasu dapit', 10, 5000, 1, 1650.000, 137.500, '2020-08-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_history`
--
ALTER TABLE `tbl_history`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_history`
--
ALTER TABLE `tbl_history`
  MODIFY `hid` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  MODIFY `tid` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
