-- phpMyAdmin SQL Dump 
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Sep 2019 pada 03.13
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gtsbascombandung`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin` 
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gts`
--

CREATE TABLE `tb_gts` (
  `id` int(11) NOT NULL,
  `nis` varchar(64) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(16) NOT NULL,
  `jurusan` varchar(16) NOT NULL,
  `email` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_gts`
--

INSERT INTO `tb_gts` (`id`, `nis`, `nama`, `jenis_kelamin`, `jurusan`, `email`) VALUES
(1, '180914057', 'Arief Dwi Muhidin', 'laki-laki', 'RPL', 'ariefdmofficial0@gmail.com'),
(2, '109146589', 'Figit Audri Wijaya', 'laki-laki', 'TKJ', 'figit28383@gmail.com'),
(3, '180914567', 'M Arief jayana', 'laki-laki', 'Multimedia', 'mariefjayy0@gmail.com'),
(4, '180914077', 'Yossi K', 'perempuan', 'RPL', 'yossi1234@gmail.com'),
(5, '180914145', 'Fida', 'perempuan', 'TKJ', 'fida191919@gmail.com'),
(6, '180916178', 'Rafiiiiiiiii', 'laki-laki', 'RPL', 'rfiiofficial0@gmail.com'),
(9, '1809140579', 'muia', 'perempuan', 'RPL', 'muliaaaaa@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_gts`
--
ALTER TABLE `tb_gts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_gts`
--
ALTER TABLE `tb_gts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
