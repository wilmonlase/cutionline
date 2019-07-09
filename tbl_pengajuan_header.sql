-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jul 2019 pada 11.22
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
-- Database: `somasi_cuti`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengajuan_header`
--

CREATE TABLE `tbl_pengajuan_header` (
  `id_pengajuan` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` int(18) NOT NULL,
  `pangkat/golongan` varchar(10) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `unit_kerja` varchar(50) NOT NULL,
  `jenis_cuti` varchar(20) NOT NULL,
  `lama_cuti` int(11) NOT NULL,
  `tujuan_cuti` text NOT NULL,
  `mulai_tgl` date NOT NULL,
  `s/d_tgl` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `lampiran` varchar(20) NOT NULL,
  `nip_atasan` int(18) NOT NULL,
  `nama_atasan` varchar(50) NOT NULL,
  `jabatan_atasan` varchar(50) NOT NULL,
  `unit_kerja_atasan` varchar(50) NOT NULL,
  `opd` varchar(50) NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `status_acc` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
