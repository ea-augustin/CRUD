-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 07, 2019 at 07:15 AM
-- Server version: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MVC`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(45) CHARACTER SET utf8 NOT NULL,
  `lastname` varchar(45) CHARACTER SET utf8 NOT NULL,
  `password` varchar(45) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `password`) VALUES
(96, 'Bobby', 'Firmino', 'LFC'),
(97, 'Sadio', 'Mané', 'LFC'),
(98, 'Mohamed', 'Salah', 'LFC'),
(99, 'Ezra', 'Augustin', 'LFC'),
(100, 'Shawn', 'Augustin', 'LFC'),
(117, 'test', 'test', 'test'),
(118, 'test', 'test', 'test'),
(119, 'test', 'test', 'test'),
(120, 'test', 'test', 'test'),
(121, 'Ezra', 'Augustin', 'test'),
(122, 'Ezra', 'Augustin', 'test'),
(123, 'Ezra', 'Augustin', 'test'),
(124, 'Ezra', 'Augustin', 'test'),
(125, 'Ezra', 'Augustin', 'test'),
(126, 'kim', 'kim', 'Dta2018!'),
(127, 'kim', 'kim', 'Dta2018!'),
(128, '', 'root', 'Dta2018!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
