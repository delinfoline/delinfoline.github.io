-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2020 at 10:42 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `delinfoline`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_delinfoline`
--

CREATE TABLE `user_delinfoline` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `instansi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_delinfoline`
--

INSERT INTO `user_delinfoline` (`id`, `username`, `password`, `nama`, `email`, `instansi`) VALUES
(1, 'muhammadabia', '$2y$10$kXLRddct9rhQChhrC92kTescuZtLr54tB20PeseZLLtpy89xNNVfS', 'Abia', 'muhammad.abia@gmail.com', 'UPI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_delinfoline`
--
ALTER TABLE `user_delinfoline`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_delinfoline`
--
ALTER TABLE `user_delinfoline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
