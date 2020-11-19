-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Nov 2020 pada 12.03
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
-- Struktur dari tabel `access_menu`
--

CREATE TABLE `access_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `access_menu`
--

INSERT INTO `access_menu` (`id`, `menu`) VALUES
(1, 'Home'),
(2, 'Data_Pt'),
(3, 'Data_Tka'),
(4, 'Data_Voucher'),
(5, 'Data_Rptka'),
(6, 'Data_Visa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan_rptka`
--

CREATE TABLE `jabatan_rptka` (
  `id` int(255) NOT NULL,
  `rptka_id` int(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `terpakai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pt`
--

CREATE TABLE `pt` (
  `id` int(11) NOT NULL,
  `nama_pt` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `nama_client` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `input_by_id` varchar(255) NOT NULL,
  `tgl_input` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` int(2) NOT NULL,
  `role_id` int(2) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id`, `role_id`, `role`) VALUES
(1, 1, 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rptka`
--

CREATE TABLE `rptka` (
  `id` int(11) NOT NULL,
  `id_pt` int(11) NOT NULL,
  `no_rptka` int(11) NOT NULL,
  `tgl_terbit` int(11) NOT NULL,
  `jumlah_rptka` int(11) NOT NULL,
  `ket` int(11) NOT NULL,
  `input_by_id` int(11) NOT NULL,
  `tgl_input` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sidebar_access_menu`
--

CREATE TABLE `sidebar_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sidebar_access_menu`
--

INSERT INTO `sidebar_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(3, 1, 1),
(4, 1, 2),
(5, 1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tka`
--

CREATE TABLE `tka` (
  `id` int(255) NOT NULL,
  `id_pt` int(255) NOT NULL,
  `nama_mandarin` varchar(255) NOT NULL,
  `nama_latin` varchar(255) NOT NULL,
  `kewarganegaraan` varchar(255) NOT NULL,
  `passport` varchar(255) NOT NULL,
  `expired_passport` int(11) NOT NULL,
  `tgl_lahir` int(11) NOT NULL,
  `ket` varchar(255) NOT NULL,
  `input_by_id` int(255) NOT NULL,
  `tgl_input` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `is_active` int(2) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `image`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Andi Rahmadi', 'andimohan2601@gmail.com', '$2y$10$4xj9oF6Q2EG0rrF0CLoj6e8VNdY2kGvnVPNKwaLvMwywh.vlh0BrK', '', '1', 1, 0),
(2, 'Iqbal Adhis', 'iqbaladhis@gmail.com', '$2y$10$4xj9oF6Q2EG0rrF0CLoj6e8VNdY2kGvnVPNKwaLvMwywh.vlh0BrK', '', '1', 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `access_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`, `access_id`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 2),
(3, 1, 2, 3),
(4, 1, 2, 4),
(5, 1, 2, 5),
(6, 1, 2, 6),
(7, 1, 3, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Dashboard'),
(2, 'Manajemen Data'),
(3, 'Manajemen User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Operator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `judul`, `url`, `icon`) VALUES
(1, 1, 'Home', 'Home', 'metismenu-icon pe-7s-home'),
(2, 2, 'Data PT', 'Data_Pt', 'metismenu-icon pe-7s-portfolio'),
(3, 2, 'Data TKA', 'Data_Tka', 'metismenu-icon pe-7s-users'),
(4, 2, 'Data Voucher', 'Data_Voucher', 'metismenu-icon pe-7s-ticket'),
(5, 2, 'Data Visa', 'Data_Visa', 'metismenu-icon pe-7s-photo-gallery'),
(6, 2, 'Data RPTKA', 'Data_Rptka', 'metismenu-icon pe-7s-share'),
(7, 3, 'User', 'User_list', 'metismenu-icon pe-7s-user');

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
(12, 'andimohan2601@gmail.com', 'tIbewhD8F2XtG27n3ACC7dc/DP/gyMuJ7Pcfnlq9K8g=', 1605080916),
(13, 'andimohan2601@gmail.com', 'TP75epqmGTsnO4dmUIE1zNJPktD1hFLlXdN8DMnygVw=', 1605437547);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `access_menu`
--
ALTER TABLE `access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jabatan_rptka`
--
ALTER TABLE `jabatan_rptka`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pt`
--
ALTER TABLE `pt`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_pt` (`nama_pt`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rptka`
--
ALTER TABLE `rptka`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_rptka` (`no_rptka`);

--
-- Indeks untuk tabel `sidebar_access_menu`
--
ALTER TABLE `sidebar_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tka`
--
ALTER TABLE `tka`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `passport` (`passport`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `access_menu`
--
ALTER TABLE `access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `jabatan_rptka`
--
ALTER TABLE `jabatan_rptka`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pt`
--
ALTER TABLE `pt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `rptka`
--
ALTER TABLE `rptka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sidebar_access_menu`
--
ALTER TABLE `sidebar_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tka`
--
ALTER TABLE `tka`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
