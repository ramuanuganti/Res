-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb17.biz.nf
-- Generation Time: May 01, 2018 at 05:37 PM
-- Server version: 5.7.20-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2393426_rathnam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sno` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sno`, `username`, `password`) VALUES
(1, 'admin', 'paul');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `sno` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `chicken` int(20) NOT NULL,
  `mutton` int(20) NOT NULL,
  `veg` int(20) NOT NULL,
  `salad` int(20) NOT NULL,
  `roti` int(20) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`sno`, `username`, `chicken`, `mutton`, `veg`, `salad`, `roti`, `total`) VALUES
(1, 'rathnam', 500, 300, 0, 100, 0, 900),
(2, 'rathnam', 500, 300, 0, 100, 0, 900),
(3, 'rathnam', 500, 300, 0, 100, 0, 900),
(4, 'rathnam', 500, 300, 0, 100, 0, 900),
(5, 'rathnam', 500, 300, 0, 100, 0, 900),
(6, 'rathnam', 500, 300, 0, 100, 0, 900),
(7, 'rathnam', 500, 300, 0, 100, 0, 900),
(8, 'rathnam', 500, 0, 0, 0, 0, 500),
(9, 'rathnam', 500, 0, 0, 0, 0, 500),
(10, 'rathnam', 500, 0, 200, 0, 0, 700),
(11, 'rathnam', 500, 0, 200, 0, 0, 700),
(12, 'rathnam', 500, 0, 200, 0, 0, 700),
(13, 'rathnam', 0, 300, 0, 0, 0, 300),
(14, 'rathnam', 0, 300, 0, 0, 0, 300),
(15, 'rathnam', 0, 300, 0, 0, 0, 300),
(16, 'rathnam', 0, 0, 200, 0, 0, 200),
(17, 'rathnam', 0, 0, 200, 0, 0, 200),
(18, 'rathnam', 0, 0, 200, 0, 0, 200),
(19, 'rathnam', 0, 0, 200, 0, 0, 200),
(20, 'rathnam', 0, 0, 200, 0, 0, 200),
(21, 'rathnam', 0, 0, 200, 0, 0, 200),
(22, 'rathnam', 0, 0, 200, 0, 0, 200),
(23, 'rathnam', 0, 0, 200, 0, 0, 200),
(24, 'rathnam', 0, 0, 200, 0, 0, 200),
(25, 'rathnam', 0, 0, 200, 0, 0, 200),
(26, 'rathnam', 0, 0, 200, 0, 0, 200),
(27, 'rathnam', 0, 0, 200, 0, 0, 200),
(28, 'rathnam', 0, 0, 200, 0, 0, 200),
(29, 'rathnam', 0, 0, 200, 0, 0, 200),
(30, 'rathnam', 0, 0, 200, 0, 0, 200),
(31, 'rathnam', 0, 0, 200, 0, 0, 200),
(32, 'rathnam', 0, 0, 200, 0, 0, 200),
(33, 'rathnam', 0, 0, 200, 0, 0, 200),
(34, 'rathnam', 500, 0, 0, 0, 0, 500),
(35, 'rathnam', 500, 0, 0, 0, 0, 500),
(36, 'rathnam', 0, 300, 200, 0, 0, 500),
(37, 'rathnam', 0, 0, 200, 0, 0, 200),
(38, 'paul', 500, 0, 0, 0, 0, 500),
(39, 'paul', 0, 0, 200, 0, 0, 200),
(40, 'Paul', 0, 300, 0, 0, 0, 300),
(41, 'paul', 500, 0, 200, 0, 0, 700),
(42, 'anil', 500, 0, 200, 100, 0, 800),
(43, 'rk', 0, 0, 200, 100, 0, 300),
(44, 'paul', 0, 300, 0, 0, 0, 300),
(45, 'paul', 500, 0, 200, 100, 0, 800),
(46, 'harish', 0, 0, 200, 100, 0, 300),
(47, 'vj', 0, 300, 200, 0, 0, 500),
(48, 'akhila', 0, 0, 0, 0, 0, 0),
(49, 'akhila', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(11) NOT NULL,
  `password` varchar(30) NOT NULL,
  `password2` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `username`, `email`, `mobile`, `password`, `password2`) VALUES
(2, 'admin', 'rathnam1@gmail.com', 2147483647, 'paul', ''),
(3, 'admin1', 'admin12@gmail.com', 2147483647, 'ppppp', ''),
(7, 'Rk', 'aarhish@gmail.com', 2147483647, 'rk', ''),
(5, 'paul', 'paul@gmail.com', 2147483647, 'paul', ''),
(8, 'rathnam', 'rathnam137@gmail.com', 2147483647, 'paul', ''),
(9, 'rathnam', 'rathnam137@gmail.com', 2147483647, 'paul', ''),
(10, 'harish', 'harish.karanam12@gmail.com', 2147483647, '8099977782', ''),
(11, 'vj', 'vj@gmail.com', 2147483647, 'vj', ''),
(12, 'akhila', 'sagdg@gmail.com', 2147483647, '11189121', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `sno` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
