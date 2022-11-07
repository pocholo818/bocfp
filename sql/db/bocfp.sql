-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 06:09 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bocfp`
--

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `id` int(11) NOT NULL,
  `fname` varchar(48) NOT NULL,
  `lname` varchar(48) NOT NULL,
  `bdate` varchar(10) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `guardian` varchar(48) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `purok` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`id`, `fname`, `lname`, `bdate`, `sex`, `guardian`, `contact`, `purok`) VALUES
(1, 'Arataki', 'Itto', '2000-06-01', 'M', 'Kuki Shinobu', '09999999999', 11),
(6, 'Pocholo', 'Gopez', '2000-06-05', 'M', 'Mey', '09454123288', 11),
(23, 'Rebecca', 'Lee', '2000-11-18', 'F', 'Megumi Toyoguchi', '09665454981', 7),
(30, 'Amir El', 'Amari', '2013-02-06', 'M', 'Nabil Elouahabi', '09781235488', 1),
(31, 'Liam ', 'Byrne', '2015-04-29', 'M', 'Steve Blum', '09881665165', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(48) NOT NULL,
  `purok` int(2) NOT NULL,
  `contact_number` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `purok`, `contact_number`) VALUES
(1, 'Pocholo Gopez', 11, '09454123288');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `child`
--
ALTER TABLE `child`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
