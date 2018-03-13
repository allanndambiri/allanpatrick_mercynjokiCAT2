-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2018 at 01:10 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `6470`
--

-- --------------------------------------------------------

--
-- Table structure for table `6470users`
--

CREATE TABLE `6470users` (
  `ID` int(255) NOT NULL,
  `USERNAME` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PASSWORD_HASH` char(250) COLLATE utf8_unicode_ci NOT NULL,
  `PHONE` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `6470users`
--

INSERT INTO `6470users` (`ID`, `USERNAME`, `PASSWORD_HASH`, `PHONE`) VALUES
(1, 'allan_pato', 'pato', '0708362897'),
(2, 'bruce', 'itel1402', '789098789'),
(3, 'george', 'george', '074325469'),
(8, 'Lucy kinuthia', 'lucy', '0719275452'),
(9, 'Mercy Njoki', 'njoki', '078999999'),
(10, 'gladys mwihaki', 'gladys', '0721525483'),
(11, 'julius ndambiri', 'julius', '0721359883'),
(12, 'lynett nduta', 'nduta', '0726948394');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(255) NOT NULL,
  `task` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `task`, `username`) VALUES
(1, 'go to the market', 'george'),
(2, 'go to school', 'bruce'),
(4, 'play game', 'bruce'),
(5, 'buy phone', 'bruce'),
(6, 'delete', 'bruce'),
(7, 'buy watch', 'bruce'),
(14, 'Reading watt pad', 'lucy kinuthia'),
(15, 'digging', 'allan_pato'),
(19, 'climbing', 'allan_pato'),
(21, 'singing', 'allan_pato'),
(23, 'banking', 'julius ndambiri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `6470users`
--
ALTER TABLE `6470users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `USERNAME` (`USERNAME`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `6470users`
--
ALTER TABLE `6470users`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
