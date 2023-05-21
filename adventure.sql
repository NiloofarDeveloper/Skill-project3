-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2023 at 03:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adventure`
--

-- --------------------------------------------------------

--
-- Table structure for table `adventureevent`
--

CREATE TABLE `adventureevent` (
  `id` int(11) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `tripDate` date NOT NULL,
  `duration` varchar(100) NOT NULL,
  `Summary` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adventureevent`
--

INSERT INTO `adventureevent` (`id`, `heading`, `tripDate`, `duration`, `Summary`) VALUES
(0, 'Dartmouth ', '2023-05-30', '7', 'vacation'),
(1, 'halifax', '2023-05-24', '3', 'going around'),
(76, 'Lunenburg', '2023-05-27', '7', 'going around'),
(77, 'Sydney ', '2023-05-24', '3', 'vacation'),
(78, 'Terror Bay', '2023-06-07', '7', 'vacation');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adventureevent`
--
ALTER TABLE `adventureevent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adventureevent`
--
ALTER TABLE `adventureevent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
