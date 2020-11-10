-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Nov 2020 pada 14.58
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_blitz_baru`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `role_id` varchar(2) NOT NULL,
  `is_active` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `image`, `role_id`, `is_active`) VALUES
(1, 'Andi Rahmadi', 'andimohan2601@gmail.com', '$2y$10$4xj9oF6Q2EG0rrF0CLoj6e8VNdY2kGvnVPNKwaLvMwywh.vlh0BrK', '', '1', 1),
(2, 'adhi', 'iqbaladhis31@gmail.com', '$2y$10$juxSD8aStJipVCuAXDlOge.Te0bbbSky29.dhw.VoPwp2ahAHEjAO', '', '1', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(1, 'andimohan2601@gmail.com', 'IAMZ5dEd9ntbyi4jELTfN73GRKwr5/fqKO9BceU+ztU=', 1605009647),
(2, 'andimohan2601@gmail.com', '5MOThsYWyuZ5VyhNx02Z+pVm72W2DlwtC5Rt+RCoOQE=', 1605009935),
(3, 'andimohan2601@gmail.com', 'zcwfPm3F4OAQIB94DApfRhQTcMnv3QYUvmYlNdofKs0=', 1605011438),
(4, 'andimohan2601@gmail.com', '5pwnhrS7OuwRxnRqDhhUDbd6l8P31wcQeoxV7R4FE6I=', 1605011471),
(5, 'andimohan2601@gmail.com', 'w9GT0L93SOctTxZ0gByylhFHabZqVGcrDfoEGLPlNIs=', 1605011624),
(6, 'andimohan2601@gmail.com', 'OU4xRJSH7EVZ+IBxlY0igjPKmE0ljNiY46dGFs7X7tE=', 1605011749),
(7, 'andimohan2601@gmail.com', '5dPsqKClqoJCVZffAYRWAb9Lnt8botLAYz/Gl8y+8NE=', 1605011934),
(8, 'andimohan2601@gmail.com', 'oVxNpGnSjvOzQdc81tJMuHGkmf6SiTbtQv+TbW1TX2w=', 1605012574),
(9, 'iqbaladhis31@gmail.com', '3JqfqttSCqbrvP2Ba0REp6DIn3xhNjmFwkXVCPDuOIk=', 1605012751),
(10, 'iqbaladhis31@gmail.com', 'C+XqbAlopK8nsjCPYEde1co8NOGJjnkuXPlKr7R1i5w=', 1605013106),
(11, 'andimohan2601@gmail.com', 'MlW03Yw7jhWQ7wqGLrWn9rqXPllnAxlTDpMBdgispP8=', 1605015861);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
