-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2022 at 03:59 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bengkel`
--

-- --------------------------------------------------------

--
-- Table structure for table `service_motor`
--

CREATE TABLE `service_motor` (
  `Nama` varchar(50) NOT NULL,
  `No_Kendaraan` varchar(20) NOT NULL,
  `Keluhan` text NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_motor`
--

INSERT INTO `service_motor` (`Nama`, `No_Kendaraan`, `Keluhan`, `Tanggal`) VALUES
('Mamad', 'AE 6423 DF', 'Kabel Terbakar', '2022-12-22'),
('Reza', 'AE 3321 DW', 'Service Berat', '2022-12-22'),
('Maya', 'AE 1111 BN', 'Oli Habis', '2022-12-15'),
('Supar', 'AE 1010 KW', 'Suspensi bocor', '2022-12-19'),
('Andri', 'AE 2312 KN', 'Klep patah', '2022-12-21'),
('Daffa', 'AE 9090 CV', 'Stang Bengkok', '2022-12-19');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
