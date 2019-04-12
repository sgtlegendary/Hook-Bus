-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2019 at 07:48 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpsamples`
--

-- --------------------------------------------------------

--
-- Table structure for table `6545`
--

CREATE TABLE `6545` (
  `Time` time(6) NOT NULL,
  `Route` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `6545`
--

INSERT INTO `6545` (`Time`, `Route`) VALUES
('08:00:00.000000', 'Eva Mall'),
('08:10:00.000000', 'Tagore Road'),
('08:15:00.000000', 'Rajhans Cinema'),
('08:20:00.000000', 'Soma talav'),
('08:35:00.000000', 'Gurukul Chowkdi'),
('08:45:00.000000', 'Parivar Char Rasta'),
('08:50:00.000000', 'Vrundavan'),
('08:55:00.000000', 'Vaikunth-1'),
('09:00:00.000000', 'Waghodia Chowkdi '),
('09:20:00.000000', 'Parul');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
