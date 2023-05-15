-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2023 at 03:18 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shehab`
--

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `flight_number` varchar(10) NOT NULL,
  `departure_city` varchar(50) DEFAULT NULL,
  `destination_city` varchar(50) DEFAULT NULL,
  `departure_date` date DEFAULT NULL,
  `departure_time` time DEFAULT NULL,
  `arrival_time` time DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`flight_number`, `departure_city`, `destination_city`, `departure_date`, `departure_time`, `arrival_time`, `price`) VALUES
('ABC123', 'New York', 'London', '2023-05-15', '12:00:00', '18:00:00', 500.00),
('DEF456', 'Los Angeles', 'Paris', '2023-05-16', '10:30:00', '17:45:00', 600.00),
('GHI789', 'Tokyo', 'Sydney', '2023-05-17', '08:15:00', '22:30:00', 800.00),
('JKL012', 'Chicago', 'Madrid', '2023-05-18', '14:45:00', '22:00:00', 700.00),
('MNO345', 'London', 'Dubai', '2023-05-19', '09:30:00', '16:45:00', 900.00),
('PQR678', 'Sydney', 'New York', '2023-05-20', '11:00:00', '22:30:00', 1000.00),
('STU901', 'Paris', 'Tokyo', '2023-05-21', '16:30:00', '10:45:00', 1200.00),
('VWX234', 'Madrid', 'Los Angeles', '2023-05-22', '13:15:00', '23:30:00', 1100.00),
('YZA567', 'Dubai', 'Chicago', '2023-05-23', '10:45:00', '19:00:00', 950.00),
('BCD890', 'London', 'Sydney', '2023-05-24', '08:30:00', '21:45:00', 850.00),
('EFG123', 'New York', 'Paris', '2023-05-25', '09:15:00', '16:30:00', 750.00),
('HIJ456', 'Cairo', 'Dubai', '2023-05-26', '10:00:00', '13:30:00', 450.00),
('KLM789', 'London', 'Moscow', '2023-05-27', '14:30:00', '19:45:00', 550.00),
('NOP012', 'Paris', 'Rome', '2023-05-28', '11:45:00', '14:30:00', 300.00),
('QRS345', 'New York', 'Toronto', '2023-05-29', '08:30:00', '10:00:00', 200.00),
('TUV678', 'Berlin', 'Vienna', '2023-05-30', '13:00:00', '15:30:00', 350.00),
('WXY901', 'Madrid', 'Lisbon', '2023-05-31', '16:45:00', '18:30:00', 250.00),
('ZAB234', 'Cairo', 'Istanbul', '2023-06-01', '09:30:00', '12:15:00', 400.00),
('CDE567', 'Cairo', 'Athens', '2023-06-02', '14:30:00', '17:15:00', 350.00),
('FGH890', 'Dubai', 'Mumbai', '2023-06-03', '11:15:00', '14:30:00', 450.00),
('IJK123', 'Sydney', 'Singapore', '2023-06-04', '10:45:00', '13:30:00', 300.00),
('LMN456', 'London', 'Berlin', '2023-06-05', '13:00:00', '15:30:00', 200.00),
('OPQ789', 'New York', 'Miami', '2023-06-06', '08:30:00', '10:00:00', 150.00),
('RST012', 'Paris', 'Barcelona', '2023-06-07', '11:00:00', '13:15:00', 250.00),
('UVW345', 'Tokyo', 'Seoul', '2023-06-08', '15:30:00', '17:00:00', 200.00),
('XYZ678', 'Madrid', 'Amsterdam', '2023-06-09', '14:15:00', '16:45:00', 300.00),
('ABC901', 'Dubai', 'Abu Dhabi', '2023-06-10', '10:30:00', '11:00:00', 100.00),
('DEF234', 'London', 'Edinburgh', '2023-06-11', '09:00:00', '10:00:00', 150.00);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
