-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2021 at 05:57 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_nouuti`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kecamatan`
--

CREATE TABLE `tb_kecamatan` (
  `id` int(11) NOT NULL,
  `nama_kecamatan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kecamatan`
--

INSERT INTO `tb_kecamatan` (`id`, `nama_kecamatan`) VALUES
(1, 'Asparaga'),
(2, 'Batudaa'),
(3, 'Batudaa Pantai'),
(4, 'Bilato'),
(5, 'Biluhu'),
(6, 'Boliyohuto'),
(7, 'Bongomeme'),
(8, 'Dungalio'),
(9, 'Limboto'),
(10, 'Limboto barat'),
(11, 'Mootilango'),
(12, 'Pulubala'),
(13, 'Tabongo'),
(14, 'Talaga Jaya'),
(15, 'Talaga'),
(16, 'Talaga Biru'),
(17, 'Tibawa'),
(18, 'Tilango'),
(19, 'Tolangohula');

-- --------------------------------------------------------

--
-- Table structure for table `tb_operator`
--

CREATE TABLE `tb_operator` (
  `id_operator` int(11) NOT NULL,
  `nama_operator` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(80) NOT NULL,
  `akses` varchar(10) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_operator`
--

INSERT INTO `tb_operator` (`id_operator`, `nama_operator`, `username`, `pass`, `akses`, `id_kecamatan`, `created_at`, `updated_at`) VALUES
(12, 'Arif Rahman Supu', 'arifsupu', '$2y$10$kRMtL5MuAcpNjQG/my7COOSZclahoBup.Coei6n4lB1JKtMiaISbO', 'kecamatan', 13, '2021-07-25 15:43:54', '2021-07-25 15:44:09'),
(13, 'Andi Moh Soreang', 'andimoh', '$2y$10$24VItcLOycNmAcQsEP4cue8kROsztSTfc96i1s.Gm19ceQ1oe2ceW', 'umum', 0, '2021-07-25 15:44:52', '2021-07-25 15:44:52');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peserta`
--

CREATE TABLE `tb_peserta` (
  `id_peserta` int(11) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `nama_panggilan` varchar(10) DEFAULT NULL,
  `id_provinsi` int(11) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `umur` int(11) DEFAULT NULL,
  `jk` tinyint(4) DEFAULT NULL,
  `tinggi` int(11) DEFAULT NULL,
  `berat` int(11) DEFAULT NULL,
  `ukuran_baju` varchar(4) DEFAULT NULL,
  `ukuran_celana` varchar(4) DEFAULT NULL,
  `ukuran_sepatu` varchar(4) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` varchar(13) DEFAULT NULL,
  `email` varchar(125) DEFAULT NULL,
  `pass` varchar(80) DEFAULT NULL,
  `ig` varchar(30) DEFAULT NULL,
  `fb` varchar(50) DEFAULT NULL,
  `pendidikan_terakhir` varchar(10) DEFAULT NULL,
  `keahlian` varchar(100) DEFAULT NULL,
  `motivasi` text DEFAULT NULL,
  `perwakilan` tinyint(4) DEFAULT NULL,
  `nama_perwakilan` varchar(255) DEFAULT NULL,
  `foto` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_provinsi`
--

CREATE TABLE `tb_provinsi` (
  `id` int(11) NOT NULL,
  `nama_provinsi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_provinsi`
--

INSERT INTO `tb_provinsi` (`id`, `nama_provinsi`) VALUES
(1, 'Aceh'),
(2, 'Sumatra Utara'),
(3, 'Sumatra Barat'),
(4, 'Riau'),
(5, 'Kepulauan Riau'),
(6, 'Jambi'),
(7, 'Bengkulu'),
(8, 'Sumatra Selatan'),
(9, 'Kepulauan Bangka Belitung'),
(10, 'Lampung'),
(11, 'DKI Jakarta'),
(12, 'Banten'),
(13, 'Jawa Barat'),
(14, 'Jawa Tengah'),
(15, 'Daerah Istimewa Yogyakarta'),
(16, 'Jawa Timur'),
(17, 'Bali'),
(18, 'Nusa Tenggara Barat'),
(19, 'Nusa Tenggara Timur'),
(20, 'Kalimantan Barat'),
(21, 'Kalimantan Tengah'),
(22, 'Kalimantan Selatan'),
(23, 'Kalimantan Timur'),
(24, 'Kalimantan Utara'),
(25, 'Sulawesi Utara'),
(26, 'Gorontalo'),
(27, 'Sulawesi Tengah'),
(28, 'Sulawesi Barat'),
(29, 'Sulawesi Selatan'),
(30, 'Sulawesi Tenggara'),
(31, 'Maluku Utara'),
(32, 'Maluku'),
(33, 'Papua Barat'),
(34, 'Papua');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_operator`
--
ALTER TABLE `tb_operator`
  ADD PRIMARY KEY (`id_operator`);

--
-- Indexes for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indexes for table `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_operator`
--
ALTER TABLE `tb_operator`
  MODIFY `id_operator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
