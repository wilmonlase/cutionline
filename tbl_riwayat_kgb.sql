-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Bulan Mei 2019 pada 04.21
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nomor_batch`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_riwayat_kgb`
--

CREATE TABLE `tbl_riwayat_kgb` (
  `nomor_urut` int(11) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_riwayat_kgb`
--

INSERT INTO `tbl_riwayat_kgb` (`nomor_urut`, `nip`, `nama_lengkap`) VALUES
(0, '198407172009031013', 'RIDWAN JULLINUS LASE');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_riwayat_kgb`
--
ALTER TABLE `tbl_riwayat_kgb`
  ADD PRIMARY KEY (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
