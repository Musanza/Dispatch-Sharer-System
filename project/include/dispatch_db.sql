-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 23, 2020 at 03:17 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dispatch_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `dispatch`
--

DROP TABLE IF EXISTS `dispatch`;
CREATE TABLE IF NOT EXISTS `dispatch` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `state` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `user` varchar(50) NOT NULL,
  `p_officer` varchar(20) NOT NULL DEFAULT 'Not yet',
  `h_officer` varchar(20) NOT NULL DEFAULT 'Not yet',
  `f_fighter` varchar(20) NOT NULL DEFAULT 'Not yet',
  `submitted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dispatch`
--

INSERT INTO `dispatch` (`id`, `state`, `district`, `area`, `description`, `user`, `p_officer`, `h_officer`, `f_fighter`, `submitted`, `date`) VALUES
(1, 'Southern Province', 'Choma', 'Choma town', 'Shop on fire', 'chibutakayashi@gmail.com', 'responded', 'responded', 'responded', '2020-09-22 22:23:41', '2020-09-23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `state` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `account` enum('Admin','Police Officer','Health Officer','Fire Fighter') NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'Unconfirmed',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `state`, `district`, `account`, `status`, `date`) VALUES
(1, 'Chibuta William Kayashi', 'chibutakayashi@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Southern Province', 'Choma', 'Admin', 'Confirmed', '2020-09-22 21:58:30');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
