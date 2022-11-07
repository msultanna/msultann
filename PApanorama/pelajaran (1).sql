-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Nov 2022 pada 13.51
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelajaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(225) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `nama`, `username`, `password`) VALUES
(1, 'qwe', 'qwe', '$2y$10$2AqLQ.ptzC7S49M9VPZia.nqqpDjHIrTB0rSi82a9YbjmqPCtUL4i'),
(2, 'asd', 'asd', '$2y$10$yc0s3k0/DavRCnq2n3MFEelvxUhOIzqW8bEXmo32sNbF5MMZ0i0gK'),
(3, 'saya', 'saya', '$2y$10$RoTKqhJ4EyzSYwSLqnJx8.Q0jJ8BS.pbcALjmvGDtGFu1VNwHzNnm'),
(4, 'dsa', 'dsa', '$2y$10$.2wM0UOwfFEd5GRkRlTCpu642o5D5FE5NqjVxX496bburdEr9f/R2'),
(5, 'as', 'as', '$2y$10$9wr6a6ya.2euSHWKaahMoukuuLZSZz2bKaYK3ngMJyZyE2Dj.Ryne'),
(6, '1', '1', '$2y$10$fAkF4fx8rMlC4S9iY8fU8.vuTvi4hnjtE3OaJzcTaIfmH5/Ly6n9q'),
(7, '2', '2', '$2y$10$gGGd1Y8uRYmmx7w5gkMIEObYLR6ccVhno/qmm1u7eqp.F05X0/etO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelajaran`
--

CREATE TABLE `pelajaran` (
  `id` int(11) NOT NULL,
  `pelajaran` varchar(64) NOT NULL,
  `kelas` int(11) NOT NULL,
  `gambar` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelajaran`
--

INSERT INTO `pelajaran` (`id`, `pelajaran`, `kelas`, `gambar`) VALUES
(17, 'saya', 0, '.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelajaran`
--
ALTER TABLE `pelajaran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pelajaran`
--
ALTER TABLE `pelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
