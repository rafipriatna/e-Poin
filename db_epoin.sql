-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2018 at 02:37 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_epoin`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_datadispen`
--

CREATE TABLE `tb_datadispen` (
  `id_dispen` int(11) NOT NULL,
  `id_pelajar` int(11) NOT NULL,
  `nama_dispen` varchar(50) NOT NULL,
  `deskripsi_dispen` text NOT NULL,
  `id_guru` int(11) NOT NULL,
  `dari_kapan` time NOT NULL,
  `sampai_kapan` time NOT NULL,
  `tgl_dibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_datadispen`
--

INSERT INTO `tb_datadispen` (`id_dispen`, `id_pelajar`, `nama_dispen`, `deskripsi_dispen`, `id_guru`, `dari_kapan`, `sampai_kapan`, `tgl_dibuat`) VALUES
(1, 1, 'Pulang', 'Pulang sebentar, lupa bawa tas', 1, '09:00:00', '09:30:00', '2018-07-16 05:47:50'),
(2, 2, 'Gak tau', 'testing aja', 1, '10:25:00', '12:00:00', '2018-07-16 06:13:58'),
(3, 2, 'pulang kali', 'gak tau deh', 1, '10:11:00', '23:00:00', '2018-07-16 06:15:32'),
(4, 2, 'tes', 'testing ea', 1, '10:10:00', '12:10:00', '2018-07-16 06:19:09'),
(5, 2, 'tes', 'testing ea', 1, '10:10:00', '12:10:00', '2018-07-16 06:19:22'),
(6, 2, 'test lagi', 'test lagi', 1, '12:00:00', '13:00:00', '2018-07-16 06:20:46'),
(7, 1, 'Pulang', 'Mau pulang sebentar ,karena ada barang yang tertingal. Dan barang ini sangat penting. Ya udah cuma tes tulisan panjang aja.', 2, '12:00:00', '13:00:00', '2018-07-16 08:40:06'),
(8, 1, 'Pulang', 'Izin pulang sebentar karena ada buku yang tertinggal', 2, '10:00:00', '10:15:00', '2018-07-17 11:03:29');

-- --------------------------------------------------------

--
-- Table structure for table `tb_datapelanggar`
--

CREATE TABLE `tb_datapelanggar` (
  `id` int(11) NOT NULL,
  `id_pelajar` int(11) NOT NULL,
  `id_pelanggaran` int(11) NOT NULL,
  `poin_pelanggaran` varchar(100) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `tanggal_pelanggaran` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_datapelanggar`
--

INSERT INTO `tb_datapelanggar` (`id`, `id_pelajar`, `id_pelanggaran`, `poin_pelanggaran`, `id_guru`, `tanggal_pelanggaran`) VALUES
(1, 1, 1, '10', 1, '2018-07-16 02:29:59'),
(2, 1, 1, '', 1, '2018-07-16 03:30:45'),
(3, 1, 2, '', 1, '2018-07-16 03:30:52'),
(4, 1, 2, '5', 1, '2018-07-16 03:32:04'),
(5, 1, 1, '10', 1, '2018-07-16 03:32:15'),
(6, 1, 1, '10', 1, '2018-07-16 05:28:41'),
(7, 1, 2, '5', 2, '2018-07-16 08:39:34'),
(8, 1, 1, '10', 1, '2018-07-19 12:33:06');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelajar`
--

CREATE TABLE `tb_pelajar` (
  `id_pelajar` int(11) NOT NULL,
  `nis_pelajar` varchar(50) NOT NULL,
  `nama_pelajar` varchar(50) NOT NULL,
  `pass_pelajar` varchar(255) NOT NULL,
  `telp_pelajar` varchar(15) NOT NULL,
  `surel_pelajar` varchar(150) NOT NULL,
  `foto_pelajar` varchar(255) NOT NULL,
  `status_pelajar` enum('Aktif','Nonaktif') NOT NULL,
  `poin_pelajar` varchar(255) NOT NULL,
  `level_pelajar` enum('Pelajar') NOT NULL,
  `terakhir_masuk` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pelajar`
--

INSERT INTO `tb_pelajar` (`id_pelajar`, `nis_pelajar`, `nama_pelajar`, `pass_pelajar`, `telp_pelajar`, `surel_pelajar`, `foto_pelajar`, `status_pelajar`, `poin_pelajar`, `level_pelajar`, `terakhir_masuk`) VALUES
(1, '151610124', 'Rafi Priatna Kasbiantoro', '$2y$10$AxvRKexbwqmn.GnTPCd/iuqzopufMCH0IlGU2MoikEjZJZB432fd6', '085123456789', 'root@rafipriatna.web.id', '5603eccadc5f9407027516d8b96bdc87fb171e10', 'Aktif', '65', 'Pelajar', '2018-07-19 12:33:06'),
(2, '1234567821', 'Jennie', '$2y$10$jiizDyIDSa3xntOwl92ZAOdVMx4UysN9xlO5vPOgCp/FYbYaeARpq', '021234567812', 'jennie@smankeren.sch.id', '5e38a138e1c771ac21d3faa2ed93ef0749f3b225', 'Aktif', '0', 'Pelajar', '2018-07-16 13:14:48');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggaran`
--

CREATE TABLE `tb_pelanggaran` (
  `id_pelanggaran` int(11) NOT NULL,
  `nama_pelanggaran` varchar(255) NOT NULL,
  `deskripsi_pelanggaran` varchar(255) NOT NULL,
  `poin_pelanggaran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pelanggaran`
--

INSERT INTO `tb_pelanggaran` (`id_pelanggaran`, `nama_pelanggaran`, `deskripsi_pelanggaran`, `poin_pelanggaran`) VALUES
(1, 'Telat', 'Terlambat masuk ke sekolah', '10'),
(2, 'Seragam tidak lengkap', 'Jika seragam berupa topi, dasi, dan gesper tidak lengkap.', '5');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username_pengguna` varchar(25) NOT NULL,
  `pass_pengguna` varchar(255) NOT NULL,
  `nama_pengguna` varchar(255) NOT NULL,
  `foto_pengguna` varchar(255) NOT NULL,
  `level_pengguna` enum('Admin','Guru') NOT NULL,
  `telp_pengguna` varchar(15) NOT NULL,
  `surel_pengguna` varchar(100) NOT NULL,
  `terakhir_masuk` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `username_pengguna`, `pass_pengguna`, `nama_pengguna`, `foto_pengguna`, `level_pengguna`, `telp_pengguna`, `surel_pengguna`, `terakhir_masuk`) VALUES
(1, 'rafipriatna', '$2y$10$AxvRKexbwqmn.GnTPCd/iuqzopufMCH0IlGU2MoikEjZJZB432fd6', 'Rafi Priatna Kasbiantoro', 'af4d2935073bc0ac814b2503441755fa4fd50b46', 'Admin', '085123456789', 'root@rafipriatna.web.id', '2018-07-19 12:32:19'),
(2, 'guru', '$2y$10$eQtohKS.td8z6ETqxWbbUu.3KY0lZFQzzzfu6lsVjwrVZEIe7VF..', 'Saya guru', 'f1a5b8b5db2c62b4e386d8580aa52c2c9cbfa3b4', 'Guru', '02134567891', 'guru@smankeren.sch.id', '2018-07-13 14:40:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_datadispen`
--
ALTER TABLE `tb_datadispen`
  ADD PRIMARY KEY (`id_dispen`);

--
-- Indexes for table `tb_datapelanggar`
--
ALTER TABLE `tb_datapelanggar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pelajar`
--
ALTER TABLE `tb_pelajar`
  ADD PRIMARY KEY (`id_pelajar`);

--
-- Indexes for table `tb_pelanggaran`
--
ALTER TABLE `tb_pelanggaran`
  ADD PRIMARY KEY (`id_pelanggaran`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_datadispen`
--
ALTER TABLE `tb_datadispen`
  MODIFY `id_dispen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_datapelanggar`
--
ALTER TABLE `tb_datapelanggar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_pelajar`
--
ALTER TABLE `tb_pelajar`
  MODIFY `id_pelajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pelanggaran`
--
ALTER TABLE `tb_pelanggaran`
  MODIFY `id_pelanggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
