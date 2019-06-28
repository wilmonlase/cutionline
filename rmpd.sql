-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2018 at 08:53 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rmpd`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `id_faq` int(11) NOT NULL,
  `pertanyaan` text NOT NULL,
  `jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`id_faq`, `pertanyaan`, `jawaban`) VALUES
(2, 'Apakah Nama Resi Warung makan ini?', '<p>RM Madinah</p>\r\n'),
(3, 'Apakah RM Madinah menerima catering bulanan?', 'ya, kami menerima catering bulanan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_halaman_utama`
--

CREATE TABLE `tbl_halaman_utama` (
  `id_gambar` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `kode_menu` varchar(10) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `kategori_menu` varchar(30) NOT NULL,
  `status_menu` varchar(15) NOT NULL DEFAULT 'tersedia',
  `menu_depan` varchar(10) NOT NULL DEFAULT 'tidak'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`kode_menu`, `nama_menu`, `harga`, `satuan`, `deskripsi`, `gambar`, `kategori_menu`, `status_menu`, `menu_depan`) VALUES
('M01', 'Patin Asam Padeh', '7000', 'porsi', '<p>Kepala ikan patin dengan bumbu utama sambal, merica dan serta nenas yang enak</p>\r\n', 'M01.jpg', 'Menu Harian', 'tersedia', 'tidak'),
('M02', 'Nila Gulai', '7000', 'porsi', 'Ikan nila gulai dengan bahan utama santan dan cabe', 'G02.jpg', 'Menu Harian', 'tersedia', 'tidak'),
('M03', 'Tongkol Asam', '7000', 'porsi', 'Ikan tongkol dengan bumbu utama cabe dan nenas', 'G03.jpg', 'Menu Harian', 'tersedia', 'ya'),
('M04', 'Ayam Bakar', '7000', 'porsi', 'Ayambakar dengan bumbu utama kecap dan saos cabe merah', 'G04.jpg', 'Menu Harian', 'tersedia', 'tidak'),
('M05', 'Ayam Gulai', '7000', 'porsi', 'Ayam gulai dengan bumbu utama santan dan cabe', 'G05.jpg', 'Menu Harian', 'tersedia', 'tidak'),
('M06', 'Ayam Sambal', '7000', 'porsi', 'ayam goreng dengan tambahan merica dan cabe', 'G06.jpg', 'Menu Harian', 'tersedia', 'tidak'),
('M07', 'Ikan Gembung ', '7000', 'porsi', 'Ikan gembung yang dibakar dengan balutan daun pisang, dengan bumbu utama serutan kelapa dan cabe merah', 'G07.jpg', 'Menu Harian', 'tersedia', 'tidak'),
('M08', 'Telur Bulat Sambal', '7000', 'porsi', 'Telur rebus yang di goreng diberi sambal', 'G08.jpg', 'Menu Harian', 'tersedia', 'ya'),
('M09', 'Lele Bakar', '7000', 'porsi', 'Ikan lele bakar dengan bumbu utama kecap dan cabe merah', 'G09.jpg', 'Menu Harian', 'tersedia', 'tidak'),
('M10', 'Ikan Mujair Bakar', '7000', 'porsi', 'Ikan mujair yang dibakar diatas tungku dengan bumbu utama cabe merah dan kecap manis', 'G10.jpg', 'Menu Harian', 'tersedia', 'tidak'),
('M11', 'Mujair Asam Padeh', '7000', 'porsi', 'Ikan mujair dengan bumbu utama sambal dan nenas', 'G11.jpg', 'Menu Harian', 'tersedia', 'tidak'),
('M12', 'Jus Apel ', '7000', 'cup', '', 'G12.jpg', 'Menu Harian', 'tersedia', 'tidak'),
('M13', 'Jus  Jeruk', '7000', 'cup', '', 'G13.jpg', 'Menu Harian', 'tersedia', 'tidak'),
('M14', 'Jus Alpukat', '7000', 'cup', '', 'G14.jpg', 'Menu Harian', 'tersedia', 'tidak'),
('M15', 'Jus Semangka', '7000', 'cup', '', 'G15.jpg', 'Menu Harian', 'tersedia', 'tidak'),
('M16', 'Jus Sirsak', '7000', 'cup', '', 'G16.jpg', 'Menu Harian', 'tersedia', 'tidak'),
('M17', 'Jus Wortel', '7000', 'cup', '', 'G17.jpg', 'Menu Harian', 'tersedia', 'tidak'),
('M18', 'Paket A', '25000', 'paket', 'nasi kuning + ayam goreng + pergedel + tempe + mihun goreng + timun + sambal + aqua gelas + pisang', 'G18.jpg', 'Menu Katering Acara', 'tersedia', 'tidak'),
('M19', 'Paket B', '25000', 'paket', 'nasi putih + ayam sambal + sayur + mie kuning goreng + pisang + aqua gelas ', 'G19.jpg', 'Menu Katering Acara', 'tersedia', 'tidak'),
('M20', 'Paket C', '25000', 'paket', 'nasi putih + sayur + tempe + tahu + sambal + ayam goreng + pisang + aqua gelas', 'G20.jpg', 'Menu Katering Acara', 'tersedia', 'tidak'),
('M21', 'Paket D', '25000', 'paket', 'nasi putih + lele goreng + tahu + tempe + sayur + sambal + timun + pisang + aqua gelas ', 'G21.jpg', 'Menu Katering Acara', 'tersedia', 'tidak'),
('M22', 'Paket E', '25000', 'paket', 'nasi kuning + teri campur + pergedel + ayam sambal + timun + sayur + sambal + pisang + aqua gelas', 'G22.jpg', 'Menu Katering Acara', 'tersedia', 'tidak'),
('M23', 'Paket F', '25000', 'paket', 'nasi kuning + ayam rendang + tempe + teri campur + sayur + timun + sambal + pisang + aqua gelas', 'G23.jpg', 'Menu Katering Acara', 'tersedia', 'ya'),
('M24', 'Nasi Kantoran', '600000', 'bulan', 'nasi kotak yang diantar setiap harinya akan berbeda-beda, jjika ada pengecualian menu yang tidak diinginkan, silahkan buat dalam catatan tambahan', 'G25.jpg', 'Menu Katering Bulanan', 'tersedia', 'tidak'),
('M25', 'Sayur 2 Rantang', '600000', 'bulan', 'sayur dua rantang yang diantar setiap harinya akan berbeda-beda. sayur yang diantar setiap harinya sebanyak dua rantang.', 'G24.jpg', 'Menu Katering Bulanan', 'tersedia', 'tidak'),
('M26', 'Sayur 3 Rantang', '900000', 'bulan', 'sayur tiga rantang yang diantar setiap harinya akan berbeda-beda. sayur yang diantar setiap harinya sebanyak tiga rantang.', 'G24.jpg', 'Menu Katering Bulanan', 'tersedia', 'tidak'),
('M27', 'Sayur 4 Rantang', '1200000', 'bulan', '<p>sayur empat rantang yang diantar setiap harinya akan berbeda-beda. sayur yang diantar setiap harinya sebanyak empat rantang.</p>\r\n', 'G24.jpg', 'Menu Katering Bulanan', 'tersedia', 'tidak');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id_pengguna` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kata_sandi` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `nomor_hp` varchar(14) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `jawaban` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id_pengguna`, `nama_lengkap`, `email`, `kata_sandi`, `alamat`, `kelurahan`, `kecamatan`, `nomor_hp`, `pertanyaan`, `jawaban`) VALUES
('edindzeko', 'Edin Dzeko S.Kom', 'edindzeko@gmail.com', 'edindzeko', 'jl wajid hasyim no 21 condong catur sleman', 'Harjosari I', 'Medan Amplas', '08990423789', 'guru', 'agus'),
('loren', 'Loren Illairon', 'lorenillairon@gmail.com', 'loren', 'jl wahid hasyim no 21 ', 'Harjosari I ', 'Medan Amplas', '085543578597', 'guru', 'agus'),
('pelanggan1', 'pelanggan setia', 'pelanggan@gmail.com', 'pelanggan1', 'Jln. H.M Joni no. 14', 'Teladan Timur', 'Medan Kota', '082277436555', 'teman', 'a'),
('suparji002', 'Suparji Setiawan', 'suparji@gmail.com', 'suparji002', 'Jln. Sakti Lubis no. 23', 'Siti Rejo I', 'Medan Kota', '082234332123', 'teman', 'a'),
('test', 'test test', 'test@gmail.com', 'qwerdy', 'jalan jalan', 'Kota Matsum I', 'Medan Maimun', '082234346766', 'teman', 'a'),
('tukiyem', 'Tukiyem Supreme', 'tukiyem@gmail.com', 'qwerty', 'jalan damai', 'Pasar Merah Timur', 'Medan Medan Timur', '082234345676', 'teman', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembayaran`
--

CREATE TABLE `tbl_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_pemesanan` varchar(20) NOT NULL,
  `no_rekening` varchar(50) NOT NULL,
  `rekening_penyetor` varchar(50) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `nama_penyetor` varchar(50) NOT NULL,
  `nominal_transfer` decimal(10,0) NOT NULL,
  `bukti_bayar` varchar(50) NOT NULL,
  `tanggal_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pembayaran`
--

INSERT INTO `tbl_pembayaran` (`id_pembayaran`, `id_pemesanan`, `no_rekening`, `rekening_penyetor`, `bank`, `nama_penyetor`, `nominal_transfer`, `bukti_bayar`, `tanggal_bayar`) VALUES
(1, '201808070001', '0178305704', '0175015961', 'BNI', 'Edin', '50000', '20180807135043bni_3435.jpg', '2018-08-07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemesanan_detail`
--

CREATE TABLE `tbl_pemesanan_detail` (
  `id_pemesanan` varchar(20) NOT NULL,
  `kode_menu` varchar(10) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `subtotal` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pemesanan_detail`
--

INSERT INTO `tbl_pemesanan_detail` (`id_pemesanan`, `kode_menu`, `kuantitas`, `subtotal`) VALUES
('201808070001', 'M23', 2, '50000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesanan_header`
--

CREATE TABLE `tbl_pesanan_header` (
  `id_pemesanan` varchar(20) NOT NULL,
  `id_pengguna` varchar(50) NOT NULL,
  `waktu_pemesanan` datetime NOT NULL,
  `waktu_diterima` datetime NOT NULL,
  `alamat_pengiriman` varchar(50) NOT NULL,
  `nama_penerima` varchar(50) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `nomor_hp` varchar(14) NOT NULL,
  `tanggal_kirim` date NOT NULL,
  `waktu_kirim` varchar(30) NOT NULL,
  `tanggal_mulai_langganan` date NOT NULL,
  `tanggal_berakhir_langganan` date NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `catatan_tambahan` text NOT NULL,
  `metode_pembayaran` varchar(20) NOT NULL,
  `no_rekening` varchar(40) NOT NULL,
  `status_pemesanan` varchar(20) NOT NULL,
  `status_pembayaran` varchar(20) NOT NULL,
  `status_pengiriman` varchar(20) NOT NULL,
  `penerima_pesanan` varchar(50) NOT NULL,
  `kurir` varchar(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pesanan_header`
--

INSERT INTO `tbl_pesanan_header` (`id_pemesanan`, `id_pengguna`, `waktu_pemesanan`, `waktu_diterima`, `alamat_pengiriman`, `nama_penerima`, `kelurahan`, `kecamatan`, `kode_pos`, `nomor_hp`, `tanggal_kirim`, `waktu_kirim`, `tanggal_mulai_langganan`, `tanggal_berakhir_langganan`, `total`, `catatan_tambahan`, `metode_pembayaran`, `no_rekening`, `status_pemesanan`, `status_pembayaran`, `status_pengiriman`, `penerima_pesanan`, `kurir`, `keterangan`) VALUES
('201808070001', 'edindzeko', '2018-08-07 13:48:41', '0000-00-00 00:00:00', 'jl wajid hasyim no 21 condong catur sleman', 'Edin Dzeko S.Kom', 'Harjosari I', 'Medan Amplas', '', '08990423789', '2018-08-07', '12.00 sd 13.00 WIB', '0000-00-00', '0000-00-00', '50000', 'mohon plastik tiap box dipisah', '', '0178305704', 'Diproses', 'Lunas', 'Selesai', 'edin', 'agus_k1', 'pesanan siap dikirim');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profil`
--

CREATE TABLE `tbl_profil` (
  `latar_belakang` text NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kontak` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_profil`
--

INSERT INTO `tbl_profil` (`latar_belakang`, `alamat`, `kontak`) VALUES
('<p>Kalo makan Indomie terkesan ga gaul dan keren, kalo di Warunk RM Madinah beda ceritanya. Di sini kamu bisa makan Indomie (everyone knows our fav food for all time kan Indomie ;)) dengan gaul, sambil nongki2 happy..</p>\r\n\r\n<p>Selain Indomie dengan cita rasa yang beragam dan kerennn... (dari mulai keju sampai kikil, dari mulai manis sampai pedazzz) kalian juga bisa nikmatin roti bakar, nasi wagyu, pisang bakar, alpukat kerok, dessert2 maniz, susu dan kopi yang nikmat di mulut ramah di kantong!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Paling penting, di Warunk RM Madinah kamu bisa habiskan waktu berharga bareng sahabat, pacar, partner bisnis (ngomongin mimpi2 kamu di masa depan) sambil main UNO, denger lagu2 heitzz, main ular tangga, atau sekedar wifian buka 9GAG bareng.. so kamu ditunggu di Warunk RM Madinah!</p>\r\n', 'Jl Gurameh Raya no 123', 'Telp: 08990423789');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rekening`
--

CREATE TABLE `tbl_rekening` (
  `no_rekening` varchar(50) NOT NULL,
  `nama_bank` varchar(20) NOT NULL,
  `atas_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rekening`
--

INSERT INTO `tbl_rekening` (`no_rekening`, `nama_bank`, `atas_nama`) VALUES
('0178305704', 'BANK BNI', 'Rumah Makan Madinah 1'),
('034101000765330', 'BANK BRI', 'Rumah Makan Madinah 2'),
('043334556543456', 'BANK BRI', 'Rumah Makan Madinah 3'),
('1560009861578', 'BANK MANDIRI', 'Rumah Makan Madinah 4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ulasan`
--

CREATE TABLE `tbl_ulasan` (
  `id_ulasan` int(11) NOT NULL,
  `id_pengguna` varchar(50) NOT NULL,
  `kode_menu` varchar(10) NOT NULL,
  `ulasan` text NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'sembunyikan'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ulasan`
--

INSERT INTO `tbl_ulasan` (`id_ulasan`, `id_pengguna`, `kode_menu`, `ulasan`, `status`) VALUES
(1, 'edindzeko', 'M03', '<p>menu tongkolnya enak</p>\r\n', 'tampilkan'),
(2, 'edindzeko', 'M03', 'sambalnya pas', 'tampilkan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_pengguna` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nomor_hp` varchar(14) NOT NULL,
  `kata_sandi` varchar(30) NOT NULL,
  `hak_akses` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'tidak aktif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_pengguna`, `nama_lengkap`, `nomor_hp`, `kata_sandi`, `hak_akses`, `status`) VALUES
('agus_k1', 'Agustianto', '082254446787', 'agus_k1', 'Kurir', 'aktif'),
('budiman01', 'Budiman Sandi', '082211234323', 'budiman01', 'Pemilik', 'aktif'),
('santi_a1', 'Santiana', '082234566654', 'santi_a1', 'Admin', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indexes for table `tbl_halaman_utama`
--
ALTER TABLE `tbl_halaman_utama`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`kode_menu`);

--
-- Indexes for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `tbl_pemesanan_detail`
--
ALTER TABLE `tbl_pemesanan_detail`
  ADD PRIMARY KEY (`id_pemesanan`,`kode_menu`);

--
-- Indexes for table `tbl_pesanan_header`
--
ALTER TABLE `tbl_pesanan_header`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `tbl_rekening`
--
ALTER TABLE `tbl_rekening`
  ADD PRIMARY KEY (`no_rekening`);

--
-- Indexes for table `tbl_ulasan`
--
ALTER TABLE `tbl_ulasan`
  ADD PRIMARY KEY (`id_ulasan`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_ulasan`
--
ALTER TABLE `tbl_ulasan`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
