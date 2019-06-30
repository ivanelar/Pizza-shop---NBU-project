-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2017 at 05:33 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizzashop`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `second_name` varchar(60) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(60) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `selected_meals` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `second_name`, `password`, `address`, `phone`, `email`, `selected_meals`) VALUES
(1, 'hmfgvdhfg', 'mjrufh,dfjh', 'mfmfj', 'bfmsjfb', 533333, '`kdgufj', '	ksgfjkgsd'),
(2, 'babab', 'babab', 'babab', 'babab', 0, 'babab', 'babab'),
(3, 'ivet', 'metodie', '123', 'kolet', 156787, 'ivet@tt.rt', ''),
(4, 'iveet', 'metodie', '123', 'KOTEL', 32145, 'ivejht@gr.com', ''),
(5, 'admin', 'admin', '123', 'admin', 1234456, 'admin@admin.com', ''),
(6, 'are', 'are', '123', 'mom', 8774658, 'are@rr.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
