-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 08, 2021 at 02:11 PM
-- Server version: 5.7.24
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devclassblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `artikel` text NOT NULL,
  `penulis` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `artikel`, `penulis`, `foto`, `created_at`, `updated_at`) VALUES
(4, 'Artikel Pertama', 'ISI ARTIKEL BOS', 6, '07022021135400.jpg', '2021-02-07 13:41:46', '2021-02-07 13:54:00'),
(6, 'asdasd', 'asdasd', 6, '07022021141020.jpg', '2021-02-07 14:10:20', '2021-02-07 14:10:20');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `nama`, `role`) VALUES
(1, 'nickyyuda@gmail.com', '$2y$10$1Y/rlehhS3Wh16spkjHE..phI1.ss6bFRHJtbZuJa/hc1DQADZZa6', 'Nicky Yuda Apriyanto', 'user'),
(2, 'bem@fasilkom.narotama.ac.id', '$2y$10$1Y/rlehhS3Wh16spkjHE..phI1.ss6bFRHJtbZuJa/hc1DQADZZa6', 'BEM FASILKOM NAROTAMA', 'user'),
(3, 'nickyyuda123@gmail.com', '$2y$10$1Y/rlehhS3Wh16spkjHE..phI1.ss6bFRHJtbZuJa/hc1DQADZZa6', 'Nicky Yuda', 'user'),
(4, 'nickyyuda_tes@gmail.com', '$2y$10$1Y/rlehhS3Wh16spkjHE..phI1.ss6bFRHJtbZuJa/hc1DQADZZa6', 'Nicky Yuda', 'user'),
(5, 'robot@gmail.com', '$2y$10$1Y/rlehhS3Wh16spkjHE..phI1.ss6bFRHJtbZuJa/hc1DQADZZa6', 'Robot', 'user'),
(6, 'admin@admin.com', '$2y$10$hUYlqIsIFQqcBWRskwruse/VnJiZu8cIcyAyFGjMvKrx6w7tOzAL.', 'admin', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
