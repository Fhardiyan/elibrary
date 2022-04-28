-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2022 at 05:25 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `nosis` int(10) NOT NULL,
  `nama` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `tempat_lahir` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('l','p') COLLATE latin1_general_ci NOT NULL,
  `jabatan` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`nosis`, `nama`, `tempat_lahir`, `tgl_lahir`, `jk`, `jabatan`, `tgl_input`) VALUES
(2016210004, 'Narti', 'Makassar', '2019-07-16', 'p', 'V', '2019-07-28 14:30:30'),
(2016210002, 'Putri Mawar', 'Makassar', '2019-07-03', 'p', 'VI', '2019-07-31 19:33:02'),
(2016210003, 'Dony Pratama', 'Makassar', '2019-07-12', 'p', 'V', '2019-07-28 21:42:43'),
(2016210001, 'Nawirah', 'Makassar', '2019-07-02', 'l', 'VI', '2019-07-28 21:43:12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id_buku` int(255) NOT NULL,
  `judul` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `pengarang` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `penerbit` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `kategori` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `isbn` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `lokasi` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `fotobuku` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `buku` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `judul`, `pengarang`, `penerbit`, `kategori`, `isbn`, `lokasi`, `fotobuku`, `buku`, `tgl_input`) VALUES
(48, 'BELA NEGARA', 'LEMDIKLAT POLRI', 'LEMDIKLAT POLRI', 'HANJAR', '0000000000', 'Rak 1', 'BELA NEGARA.png', 'BELA NEGARA.pdf', '2022-04-18 13:18:52'),
(47, 'ADMINISTRASI POLRI', 'LEMDIKLAT POLRI', 'LEMDIKLAT POLRI', 'HANJAR', '000000000000000', 'Rak 1', 'ADMINISTRASI POLRI.png', 'ADMINISTRASI POLRI.pdf', '2022-04-10 15:04:35'),
(52, 'DASAR-DASAR KOMPUTER', 'LEMDIKLAT POLRI', 'LEMDIKLAT POLRI', 'HANJAR', '0000000000', 'Rak 1', 'DASAR-DASAR KOMPUTER.png', 'DASAR-DASAR KOMPUTER.pdf', '2022-04-23 12:53:07'),
(53, 'DEMOKRATISASI DAN GLOBALISASI', 'LEMDIKLAT POLRI', 'LEMDIKLAT POLRI', 'HANJAR', '0000000000', 'Rak 1', 'DEMOKRATISASI.png', 'DEMOKRATISASI DAN GLOBALISASI.pdf', '2022-04-23 12:53:57'),
(54, 'ETIKA DAN BUDAYA POLRI', 'LEMDIKLAT POLRI', 'LEMDIKLAT POLRI', 'HANJAR', '0000000000', 'Rak 1', 'ETIKA DAN BUDAYA POLRI.png', 'ETIKA DAN BUDAYA POLRI.pdf', '2022-04-23 12:54:50'),
(55, 'HAKEKAT GANGGUAN KAMTIBMAS', 'LEMDIKLAT POLRI', 'LEMDIKLAT POLRI', 'HANJAR', '0000000000', 'Rak 1', 'HAKEKAT GANGGUAN.png', 'HAKEKAT GANGGUAN KAMTIBMAS.pdf', '2022-04-23 12:57:20'),
(56, 'HAK ASASI MANUSIA', 'LEMDIKLAT POLRI', 'LEMDIKLAT POLRI', 'HANJAR', '0000000000', 'Rak 1', 'HAM.png', 'HAM.pdf', '2022-04-23 12:58:34'),
(57, 'HUBUNGAN ANTAR SUKU BANGSA', 'LEMDIKLAT POLRI', 'LEMDIKLAT POLRI', 'HANJAR', '0000000000', 'Rak 1', 'HUBUNGAN ANTAR SUKU.png', 'HUBUNGAN ANTAR SUKU BANGSA.pdf', '2022-04-23 12:59:19'),
(58, 'HUBUNGAN POLRI DENGAN MASYARAKAT', 'LEMDIKLAT POLRI', 'LEMDIKLAT POLRI', 'HANJAR', '0000000000', 'Rak 1', 'HUBUNGAN POLRI DG MASYARAKAT.png', 'HUBUNGAN POLISI DENGAN MASYARAKAT.pdf', '2022-04-23 13:00:29'),
(59, 'KOMUNIKASI MULTIMEDIA', 'LEMDIKLAT POLRI', 'LEMDIKLAT POLRI', 'HANJAR', '0000000000', 'Rak 1', 'KOMUNIKASI MULTIMEDIA.png', 'KOMUNIKASI MULTIMEDIA.pdf', '2022-04-23 13:05:39'),
(60, 'MEDIA SOSIAL', 'MEDIA SOSIAL', 'LEMDIKLAT POLRI', 'HANJAR', '0000000000', 'Rak 1', 'MEDIA SOSIAL.png', 'MEDIA SOSIAL.pdf', '2022-04-23 13:06:36'),
(61, 'ORGANISASI POLRI', 'LEMDIKLAT POLRI', 'LEMDIKLAT POLRI', 'HANJAR', '0000000000', 'Rak 1', 'ORGANISASI POLRI.png', 'ORGANISASI POLRI.pdf', '2022-04-23 13:07:15'),
(62, 'IDEOLOGI PANCASILA', 'LEMDIKLAT POLRI', 'LEMDIKLAT POLRI', 'HANJAR', '0000000000', 'Rak 1', 'PANCASILA SEBAGAI IDEOLOGI.png', 'IDEOLOGI PANCASILA.pdf', '2022-04-23 13:08:03'),
(63, 'PERUBAHAN MINDSET DAN CULTURESET', 'LEMDIKLAT POLRI', 'LEMDIKLAT POLRI', 'HANJAR', '0000000000', 'Rak 1', 'PERUBAHAN MINDSET DAN CULTURESET.png', 'PERUBAHAN MINDSET CULTURE.pdf', '2022-04-23 13:36:18'),
(64, 'POLMAS', 'LEMDIKLAT POLRI', 'LEMDIKLAT POLRI', 'HANJAR', '0000000000', 'Rak 1', 'POLMAS.png', 'POLMAS.pdf', '2022-04-23 13:37:00'),
(65, 'RADIO POLRI', 'LEMDIKLAT POLRI', 'LEMDIKLAT POLRI', 'HANJAR', '0000000000', 'Rak 1', 'RADIO POLRI.png', 'RADIO POLRI.pdf', '2022-04-23 13:37:36'),
(66, 'REVOLUSI INDUSTRI ERA 4.0 KE 5.0', 'LEMDIKLAT POLRI', 'LEMDIKLAT POLRI', 'HANJAR', '0000000000', 'Rak 1', 'REVOLUSI INDUSTRI 4.0 KE 5.0.png', 'ERA 4.0 MENUJU 5.0.pdf', '2022-04-23 13:38:30'),
(67, 'SEJARAH INDONESIA', 'LEMDIKLAT POLRI', 'LEMDIKLAT POLRI', 'HANJAR', '0000000000', 'Rak 1', 'SEJARAH INDONESIA.png', 'SEJARAH INDONESIA.pdf', '2022-04-23 13:39:38'),
(68, 'SEJARAH KEPOLISIAN', 'LEMDIKLAT POLRI', 'LEMDIKLAT POLRI', 'HANJAR', '0000000000', 'Rak 1', 'SEJARAH KEPOLISIAN.png', 'SEJARAH POLRI.pdf', '2022-04-23 13:41:18'),
(69, 'WAWASAN KEBANGSAAN', 'LEMDIKLAT POLRI', 'LEMDIKLAT POLRI', 'HANJAR', '0000000000', 'Rak 1', 'WAWASAN KEBANGSAAN.png', 'WAWASAN KEBANGSAAN.pdf', '2022-04-23 13:41:56');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lokasi`
--

CREATE TABLE `tb_lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `lokasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lokasi`
--

INSERT INTO `tb_lokasi` (`id_lokasi`, `lokasi`) VALUES
(1, 'Rak 1'),
(4, 'Rak 2'),
(5, 'Rak 3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `judul` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `nis` int(11) NOT NULL,
  `nama` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `tgl_pinjam` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `tgl_kembali` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id`, `id_buku`, `judul`, `nis`, `nama`, `tgl_pinjam`, `tgl_kembali`, `status`, `tgl_input`) VALUES
(379, 27, 'Bahasa Indonesia', 2016210004, 'Narti', '02-08-2019', '01-08-2020', 'Pinjam', '2019-08-02 12:10:18'),
(377, 27, 'Bahasa Indonesia', 2016210002, 'Putri Mawar', '02-08-2019', '01-08-2020', 'Pinjam', '2019-08-02 12:07:59');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `level` enum('admin','user') COLLATE latin1_general_ci NOT NULL,
  `foto` varchar(200) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `nama`, `level`, `foto`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'My-Account-Icon.jpg'),
(2, 'user', 'user', 'user', 'user', 'login.png'),
(11, 'narti', 'narti', 'Narti', 'user', 'My-Account-Icon.jpg'),
(10, 'nurul', 'nurul', 'Nurul Husnul', 'admin', 'My-Account-Icon.jpg'),
(12, 'adminas', 'adminas', 'Bakpia', 'admin', 'PRODIKLAT.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`nosis`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id_buku` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=380;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
