-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jan 2021 pada 17.49
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devclass`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `nama`, `role`) VALUES
(1, 'nickyyuda@gmail.com', '$2y$10$1Y/rlehhS3Wh16spkjHE..phI1.ss6bFRHJtbZuJa/hc1DQADZZa6', 'Nicky Yuda Apriyanto', 'user'),
(2, 'bem@fasilkom.narotama.ac.id', '$2y$10$1Y/rlehhS3Wh16spkjHE..phI1.ss6bFRHJtbZuJa/hc1DQADZZa6', 'BEM FASILKOM NAROTAMA', 'user'),
(3, 'nickyyuda123@gmail.com', '$2y$10$1Y/rlehhS3Wh16spkjHE..phI1.ss6bFRHJtbZuJa/hc1DQADZZa6', 'Nicky Yuda', 'user'),
(4, 'nickyyuda_tes@gmail.com', '$2y$10$1Y/rlehhS3Wh16spkjHE..phI1.ss6bFRHJtbZuJa/hc1DQADZZa6', 'Nicky Yuda', 'user'),
(5, 'robot@gmail.com', '$2y$10$1Y/rlehhS3Wh16spkjHE..phI1.ss6bFRHJtbZuJa/hc1DQADZZa6', 'Robot', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
