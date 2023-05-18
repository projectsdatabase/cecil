-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 04:42 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `b_details`
--

CREATE TABLE `b_details` (
  `plocation` longtext NOT NULL,
  `dlocation` longtext NOT NULL,
  `pdate` longtext NOT NULL,
  `ptime` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `b_details`
--

INSERT INTO `b_details` (`plocation`, `dlocation`, `pdate`, `ptime`) VALUES
('[Accra]', '[Tema]', '[8th may]', '[8:00]');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `car_name` longtext NOT NULL,
  `num_plate` longtext NOT NULL,
  `car_own` longtext NOT NULL,
  `car_type` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`car_name`, `num_plate`, `car_own`, `car_type`) VALUES
('Mercedes-Benz V20', '333-GF-Z', 'Mercedes-Benz Auto Rental', 'Mini Van'),
('Mercedes-Benz VS', 'B22-I-99', 'Sam Rentals', 'Van'),
('Mercedes-Benz VS', 'B22-I-99', 'Sam Rentals', 'Van'),
('accra', 'team', '2:15', '3:15'),
('accra', 'team', '2:15', '3:15'),
('accra', 'team', '2:15', '3:15'),
('accra', 'team', '2:15', '3:15'),
('accra', 'team', '2:15', '3:15'),
('accra', 'team', '2:15', '3:15');

-- --------------------------------------------------------

--
-- Table structure for table `c_details`
--

CREATE TABLE `c_details` (
  `fname` longtext NOT NULL,
  `lname` longtext NOT NULL,
  `email` longtext NOT NULL,
  `num` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `c_details`
--

INSERT INTO `c_details` (`fname`, `lname`, `email`, `num`) VALUES
('cecil', 'agebsar', 'agebsar@20', '+233242523718'),
('cecil', 'agebsar', 'agebsar@20', '+233242523718'),
('cecil', 'agebsar', 'agebsar@20', '+233242523718'),
('cecil', 'agebsar', 'agebsar@20', '+233242523718'),
('cecil', 'agebsar', 'agebsar@20', '+233242523718'),
('cecil', 'agebsar', 'agebsar@20', '+233242523718'),
('cecil', 'agebsar', 'agebsar@20', '+233242523718'),
('cecil', 'agebsar', 'agebsar@20', '+233242523718');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
