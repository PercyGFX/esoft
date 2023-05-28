-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 28, 2023 at 05:24 AM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emc_mobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(245) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `qty` varchar(45) DEFAULT NULL,
  `discription` varchar(245) DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL,
  `hamantota` varchar(45) DEFAULT NULL,
  `matara` varchar(45) DEFAULT NULL,
  `galle` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `image`, `name`, `qty`, `discription`, `price`, `color`, `hamantota`, `matara`, `galle`) VALUES
(1, 'Product_1198_1666623718.png', 'i phone 12', '10', 'ytdrutyk yftyfy tyf tyf ty fyif i', '1250000', 'Red', 'Available', NULL, NULL),
(2, 'Product_1198_1666623718.png', 'iPhone 14 Pro Max', '10', 'jgysud fhdsfdsu uf dsgfg udsg uyf', '469,030', 'Red', NULL, 'Available', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(145) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `status`, `role`) VALUES
(1, 'keshan', '827ccb0eea8a706c4c34a16891f84e7b', 'Active', 'Admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
