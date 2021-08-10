-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 10, 2021 at 06:52 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

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

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `username`, `pass`) VALUES
(1, 'Buldoser', 'buldoser', '$2y$10$gzE.B6hK0nJNmlGrR1XRsOEujwr/xiqtFJJTOYFDzIvW3CmcteIuy');

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
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `nama_panggilan` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `domisili` int(11) DEFAULT NULL,
  `umur` int(11) DEFAULT NULL,
  `jk` varchar(20) DEFAULT NULL,
  `tinggi` int(11) DEFAULT NULL,
  `berat` int(11) DEFAULT NULL,
  `ukuran_baju` varchar(4) DEFAULT NULL,
  `ukuran_celana` int(11) DEFAULT NULL,
  `ukuran_sepatu` int(11) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` varchar(13) DEFAULT NULL,
  `email` varchar(125) DEFAULT NULL,
  `pass` varchar(80) DEFAULT NULL,
  `ig` varchar(100) DEFAULT NULL,
  `fb` varchar(100) DEFAULT NULL,
  `pendidikan_terakhir` varchar(100) DEFAULT NULL,
  `prestasi` text DEFAULT NULL,
  `keahlian` varchar(100) DEFAULT NULL,
  `keahlian_lainnya` varchar(100) DEFAULT NULL,
  `motivasi` text DEFAULT NULL,
  `perwakilan` int(11) DEFAULT NULL,
  `nama_perwakilan` varchar(255) DEFAULT NULL,
  `foto` varchar(80) DEFAULT NULL,
  `foto_fullbody` varchar(80) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_peserta`
--

INSERT INTO `tb_peserta` (`id_peserta`, `nama_lengkap`, `nama_panggilan`, `tempat_lahir`, `tgl_lahir`, `domisili`, `umur`, `jk`, `tinggi`, `berat`, `ukuran_baju`, `ukuran_celana`, `ukuran_sepatu`, `alamat`, `no_hp`, `email`, `pass`, `ig`, `fb`, `pendidikan_terakhir`, `prestasi`, `keahlian`, `keahlian_lainnya`, `motivasi`, `perwakilan`, `nama_perwakilan`, `foto`, `foto_fullbody`, `created_by`, `created_at`, `updated_at`) VALUES
(46, 'Arif Supu', 'Xupu', 'Gorontalo', '2001-06-30', 25, 20, 'Laki-laki', 164, 70, 'S', 40, 44, 'Tabongo, Batudaa', '0834121212', 'arifsupu@gmail.com', '$2y$10$U.hPgzYbvVgIltEdUi/lr.RLP/61X2JKXyp.hDIBJ9sMiA58H7y2u', 'arif_xupu', 'Arif Supu', 'Sekolah Menegah Kejuruan (SMK)', 'Juara 3 Kompetisi Taekwondo Se-Tabongo', 'Public Speaking,Menyanyi,Sastra Lisan Gorontalo', 'Dolor nisi corporis ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 10, 'SMB-Team', '1628484213.10046110b2751882d.jpg', '1628484213.10056110b27518880.jpg', 'buldoser', '2021-08-08 22:43:33', '2021-08-08 22:43:33'),
(47, 'Ducimus aliquid nih', 'Tempore non omnis a', 'Corrupti ea cupidit', '2020-12-11', 30, 91, 'Laki-laki', 167, 56, 'M', 27, 15, 'In velit id totam o', '7', 'bepabil@mailinator.com', '$2y$10$YN1mt0R/6Cpnf4i.3K65ZucteWh9cU/7eyj/0i6kXguivyEBY9.kK', 'Voluptate blanditiis', 'Maxime eligendi a vo', 'Sed est nisi digniss', 'Non ea est qui commo', 'Public Speaking,Menyanyi', 'Voluptatem Ad volup', 'Non suscipit possimu', 11, 'Quia rerum perspicia', '1628486171.76026110ba1bb9993.jpg', '1628486171.76066110ba1bb9afe.jpg', 'buldoser', '2021-08-08 23:16:11', '2021-08-08 23:16:11');

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

-- --------------------------------------------------------

--
-- Table structure for table `tb_token_admin`
--

CREATE TABLE `tb_token_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `token` varchar(80) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_token_admin`
--

INSERT INTO `tb_token_admin` (`id`, `username`, `token`, `time`) VALUES
(1, 'buldoser', '6XfOAeKUE8', '2021-08-09 04:35:50');

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
-- Indexes for table `tb_token_admin`
--
ALTER TABLE `tb_token_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_operator`
--
ALTER TABLE `tb_operator`
  MODIFY `id_operator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tb_token_admin`
--
ALTER TABLE `tb_token_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
