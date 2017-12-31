-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2017 at 04:58 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nkea`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `desc_bank` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `desc_bank`) VALUES
(1, 'BANK ISLAM'),
(2, 'BANK RAKYAT'),
(3, 'CIMB'),
(4, 'MAYBANK'),
(5, 'RHB BANK');

-- --------------------------------------------------------

--
-- Table structure for table `blok_tersier`
--

CREATE TABLE `blok_tersier` (
  `id` int(11) NOT NULL,
  `kod_blok` varchar(11) NOT NULL,
  `no_blok` varchar(11) NOT NULL,
  `jum_lot_total` varchar(11) NOT NULL,
  `anggaran_kos` double(10,2) NOT NULL,
  `bil_lot_batal` varchar(11) NOT NULL,
  `lokaliti` varchar(15) NOT NULL,
  `bil_lot_bayar` varchar(11) NOT NULL,
  `phase` varchar(100) NOT NULL,
  `baki_lot` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blok_tersier`
--

INSERT INTO `blok_tersier` (`id`, `kod_blok`, `no_blok`, `jum_lot_total`, `anggaran_kos`, `bil_lot_batal`, `lokaliti`, `bil_lot_bayar`, `phase`, `baki_lot`) VALUES
(1, '1', 'ALBD', '50', 123.00, '12', 'A1', '36', '1', '2'),
(2, '2', 'ACLBD 3', '15', 15000.00, '55', 'A2', '50', '1', '5'),
(3, '3', 'LBRBD', '15', 124.00, '8', 'F2', '6', '2', '1'),
(4, '4', 'SCRBD 1-3', '5', 5000.00, '1', 'E4', '3', '3', '1');

-- --------------------------------------------------------

--
-- Table structure for table `borangh`
--

CREATE TABLE `borangh` (
  `id` int(11) NOT NULL,
  `blok` varchar(11) NOT NULL,
  `fasa` varchar(11) NOT NULL,
  `negeri` varchar(11) NOT NULL,
  `daerah` varchar(11) NOT NULL,
  `mukim` varchar(11) NOT NULL,
  `pakej` varchar(11) NOT NULL,
  `no_lot` varchar(11) NOT NULL,
  `no_hakmilik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_kp` varchar(255) NOT NULL,
  `status_penerima` int(3) NOT NULL,
  `pecahan` varchar(255) NOT NULL,
  `nilai_tanah` decimal(8,2) NOT NULL,
  `status_tanah` int(11) NOT NULL,
  `luas_ambil` decimal(5,2) NOT NULL,
  `kategori_pam` int(11) NOT NULL,
  `amaun_pam` decimal(8,2) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `no_akaun` varchar(255) NOT NULL,
  `kaedah_bayar` int(1) NOT NULL,
  `no_baucer` varchar(20) NOT NULL,
  `t_baucer` date NOT NULL,
  `no_cek` varchar(50) NOT NULL,
  `t_cek` date NOT NULL,
  `status` int(2) NOT NULL,
  `catatan` text NOT NULL,
  `rujukan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borangh`
--

INSERT INTO `borangh` (`id`, `blok`, `fasa`, `negeri`, `daerah`, `mukim`, `pakej`, `no_lot`, `no_hakmilik`, `nama`, `no_kp`, `status_penerima`, `pecahan`, `nilai_tanah`, `status_tanah`, `luas_ambil`, `kategori_pam`, `amaun_pam`, `bank`, `no_akaun`, `kaedah_bayar`, `no_baucer`, `t_baucer`, `no_cek`, `t_cek`, `status`, `catatan`, `rujukan`) VALUES
(1, '3', '2', '2', '2', '1', '4', 'sad123', 'asd123', 'mohd akmal', '1234567890', 2, '123', '123.00', 2, '123.00', 1, '123.00', '2', '123123425', 1, 'asd123', '2017-09-13', 'asd123', '2017-09-13', 2, 'asd123', 'asda123'),
(2, '1', '1', '1', '1', '1', '1', 'asd123', 'asd123', 'firdaus', '56564432', 1, '12', '123.00', 1, '123.00', 1, '123.00', '1', '1235654', 1, 'asd213', '2017-09-14', 'asd123', '2017-09-14', 1, 'asdq21', 'asd123'),
(3, '2', '2', '1', '1', '2', '5', '1234', 'kdsfhj123124', 'nizam', '5263548925', 2, '5', '123.56', 2, '23.00', 2, '22000.00', '3', '8612856451', 2, 'asd6854132', '2017-12-18', 'asd1234', '2017-12-18', 2, 'testing', 'asda123'),
(4, '3', '4', '2', '2', '2', '3', '1234', 'kdsfhj123124', 'nizam', '898989989889', 2, '5', '123.56', 2, '23.00', 1, '22000.00', '1', '85643545', 1, 'asd6854133', '2017-12-18', 'asd12345', '2017-12-18', 2, 'testing', 'asda123');

-- --------------------------------------------------------

--
-- Table structure for table `borangk`
--

CREATE TABLE `borangk` (
  `id` int(11) NOT NULL,
  `blok` int(11) NOT NULL,
  `fasa` int(11) NOT NULL,
  `negeri` int(11) NOT NULL,
  `daerah` int(11) NOT NULL,
  `mukim` int(11) NOT NULL,
  `pakej` int(11) NOT NULL,
  `no_lot` varchar(255) NOT NULL,
  `hak_milik` varchar(255) NOT NULL,
  `tarikh_k` date NOT NULL,
  `rujukan_k` varchar(200) NOT NULL,
  `fail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borangk`
--

INSERT INTO `borangk` (`id`, `blok`, `fasa`, `negeri`, `daerah`, `mukim`, `pakej`, `no_lot`, `hak_milik`, `tarikh_k`, `rujukan_k`, `fail`) VALUES
(1, 3, 4, 2, 2, 1, 3, '1234', 'kdsfhj123124', '2017-12-18', 'sd123asd12', 'asqh12');

-- --------------------------------------------------------

--
-- Table structure for table `daerah`
--

CREATE TABLE `daerah` (
  `id` int(11) NOT NULL,
  `kod_daerah` varchar(11) NOT NULL,
  `desc_daerah` varchar(50) NOT NULL,
  `kod_negeri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daerah`
--

INSERT INTO `daerah` (`id`, `kod_daerah`, `desc_daerah`, `kod_negeri`) VALUES
(1, '1', 'KOTA SETAR', 1),
(2, '2', 'KUBANG PASU', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fasa`
--

CREATE TABLE `fasa` (
  `id` int(11) NOT NULL,
  `kod_fasa` int(4) NOT NULL,
  `desc_fasa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasa`
--

INSERT INTO `fasa` (`id`, `kod_fasa`, `desc_fasa`) VALUES
(1, 1, 'Fasa I'),
(2, 2, 'Fasa I A'),
(3, 3, 'Fasa II'),
(4, 4, 'Fasa III'),
(5, 5, 'Fasa IV'),
(6, 6, 'Fasa V');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mukim`
--

CREATE TABLE `mukim` (
  `id` int(11) NOT NULL,
  `kod_mukim` varchar(11) NOT NULL,
  `desc_mukim` varchar(50) NOT NULL,
  `kod_daerah` int(11) NOT NULL,
  `kod_negeri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `negeri`
--

CREATE TABLE `negeri` (
  `id` int(11) NOT NULL,
  `kod_negeri` int(11) NOT NULL,
  `desc_negeri` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `negeri`
--

INSERT INTO `negeri` (`id`, `kod_negeri`, `desc_negeri`) VALUES
(1, 1, 'Kedah'),
(2, 2, 'Perlis');

-- --------------------------------------------------------

--
-- Table structure for table `pakej`
--

CREATE TABLE `pakej` (
  `id` int(11) NOT NULL,
  `kod_pakej` varchar(11) NOT NULL,
  `desc_pakej` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pakej`
--

INSERT INTO `pakej` (`id`, `kod_pakej`, `desc_pakej`) VALUES
(1, '1', 'Pakej 1'),
(2, '2', 'Pakej 2'),
(3, '3', 'Pakej 3'),
(4, '4', 'Pakej 4'),
(5, '5', 'Tambahan 1'),
(6, '6', 'Tambahan 2'),
(7, '7', 'Tambahan 3');

-- --------------------------------------------------------

--
-- Table structure for table `pampasan`
--

CREATE TABLE `pampasan` (
  `id` int(11) NOT NULL,
  `desc_pampasan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pampasan`
--

INSERT INTO `pampasan` (`id`, `desc_pampasan`) VALUES
(1, 'Kategori 1'),
(2, 'Kategori 2');

-- --------------------------------------------------------

--
-- Table structure for table `payment_mode`
--

CREATE TABLE `payment_mode` (
  `id` int(11) NOT NULL,
  `desc_payment` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_mode`
--

INSERT INTO `payment_mode` (`id`, `desc_payment`) VALUES
(1, 'Cek / Cheque'),
(2, 'EFT');

-- --------------------------------------------------------

--
-- Table structure for table `perbicaraan`
--

CREATE TABLE `perbicaraan` (
  `id` int(11) NOT NULL,
  `no_blok` varchar(11) NOT NULL,
  `fasa` varchar(11) NOT NULL,
  `negeri` varchar(11) NOT NULL,
  `daerah` varchar(11) NOT NULL,
  `mukim` varchar(11) NOT NULL,
  `pakej` varchar(11) NOT NULL,
  `no_lot` varchar(255) NOT NULL,
  `no_hakmilik` varchar(255) NOT NULL,
  `jajaran` varchar(255) NOT NULL,
  `t_bicara` date NOT NULL,
  `status_bicara` varchar(11) NOT NULL,
  `status_tanah` varchar(11) NOT NULL,
  `bil_pemilik` varchar(11) NOT NULL,
  `luas_pengambilan` decimal(8,2) NOT NULL,
  `nilai_tanah` decimal(8,2) NOT NULL,
  `pampasan` decimal(8,2) NOT NULL,
  `lain_pampasan` decimal(8,2) NOT NULL,
  `jum_pampasan` decimal(8,2) NOT NULL,
  `catatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perbicaraan`
--

INSERT INTO `perbicaraan` (`id`, `no_blok`, `fasa`, `negeri`, `daerah`, `mukim`, `pakej`, `no_lot`, `no_hakmilik`, `jajaran`, `t_bicara`, `status_bicara`, `status_tanah`, `bil_pemilik`, `luas_pengambilan`, `nilai_tanah`, `pampasan`, `lain_pampasan`, `jum_pampasan`, `catatan`) VALUES
(1, '3', '3', '1', '2', '2', '4', 'sad123', 'asd123asd', 'asd123', '2017-09-13', '2', '0', '123', '123.00', '123.00', '123.00', '123.00', '123.00', 'asd123'),
(2, '2', '3', '1', '2', '3', '2', '1234', 'kdsfhj123124', 'ampang jajar', '2017-12-18', '2', '2', '3', '23.00', '123.56', '120.50', '50.50', '171.00', 'testing'),
(3, '1', '3', '1', '1', '1', '2', '33', '70/3072', 'kurong hitam', '2017-12-18', '2', '1', '5', '0.43', '54935.00', '40046.00', '3000.00', '57935.00', 'testing perbicaraan');

-- --------------------------------------------------------

--
-- Table structure for table `ppk`
--

CREATE TABLE `ppk` (
  `id` int(11) NOT NULL,
  `kod_ppk` int(4) NOT NULL,
  `desc_ppk` varchar(11) NOT NULL,
  `kod_wilayah` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ppk`
--

INSERT INTO `ppk` (`id`, `kod_ppk`, `desc_ppk`, `kod_wilayah`) VALUES
(1, 1001, 'A1', '1'),
(2, 1002, 'B1', '1'),
(3, 1003, 'C1', '1'),
(4, 1004, 'D1', '1'),
(5, 1005, 'E1', '1'),
(6, 2001, 'A2', '2'),
(7, 2002, 'B2', '2'),
(8, 2003, 'C2', '2'),
(9, 2004, 'D2', '2'),
(10, 2005, 'E2', '2'),
(11, 2006, 'F2', '2'),
(12, 2007, 'G2', '2'),
(13, 2008, 'H2', '2'),
(14, 2009, 'I2', '2'),
(15, 3001, 'A3', '3'),
(16, 3002, 'B3', '3'),
(17, 3003, 'C3', '3'),
(18, 3004, 'D3', '3'),
(19, 3005, 'E3', '3'),
(20, 3006, 'F3', '3'),
(21, 4001, 'A4', '4'),
(22, 4002, 'B4', '4'),
(23, 4003, 'C4', '4'),
(24, 4004, 'D4', '4'),
(25, 4005, 'E4', '4'),
(26, 4006, 'F4', '4'),
(27, 4007, 'G4', '4');

-- --------------------------------------------------------

--
-- Table structure for table `status_bicara`
--

CREATE TABLE `status_bicara` (
  `id` int(11) NOT NULL,
  `kod_bicara` int(11) NOT NULL,
  `desc_bicara` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_bicara`
--

INSERT INTO `status_bicara` (`id`, `kod_bicara`, `desc_bicara`) VALUES
(1, 1, 'Selesai'),
(2, 2, 'Semak Jajaran'),
(3, 3, 'Batal'),
(4, 4, 'Tidak Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `status_penerima`
--

CREATE TABLE `status_penerima` (
  `id` int(11) NOT NULL,
  `desc_penerima` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_penerima`
--

INSERT INTO `status_penerima` (`id`, `desc_penerima`) VALUES
(1, 'Pemilik'),
(2, 'Penyewa');

-- --------------------------------------------------------

--
-- Table structure for table `status_tanah`
--

CREATE TABLE `status_tanah` (
  `id` int(11) NOT NULL,
  `kod_tanah` int(4) NOT NULL,
  `desc_tanah` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_tanah`
--

INSERT INTO `status_tanah` (`id`, `kod_tanah`, `desc_tanah`) VALUES
(1, 1, 'Teknologi'),
(2, 2, 'Pertanian'),
(3, 3, 'Perumahan / Pembangunan'),
(4, 4, 'Industri'),
(5, 5, 'Institusi');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `ic` varchar(12) NOT NULL,
  `size` varchar(2) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `ic`, `size`, `date`) VALUES
(1, 'akmal', '0', '0', '0000-00-00'),
(2, 'mohd akmal', '890403025307', '0', '0000-00-00'),
(3, 'mohd akmal', '890403025307', '1', '0000-00-00'),
(4, 'akmal', '890403025307', '4', '0000-00-00'),
(5, 'akmal', '890403025307', '2', '2017-09-11'),
(6, 'tikah', '1234567890', '4', '2017-09-11'),
(7, 'akmal', '890403025307', '2', '2017-09-11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'AKMAL', 'mretong@gmail.com', '$2y$10$RPsLee9IT3g.JoEBTNU73OjFojoy1oWXnxSnuCFejlGGS9Lpc6AFm', '9Xux32k3y5ARQmtdbtWHa3X9Yjn3kr4dkvy7EvsYS6Prs5Pnso5qxHdD5l1W', '2017-12-13 16:26:11', '2017-12-13 16:26:11');

-- --------------------------------------------------------

--
-- Table structure for table `warta`
--

CREATE TABLE `warta` (
  `id` int(11) NOT NULL,
  `kod_blok` varchar(11) NOT NULL,
  `fasa` varchar(11) NOT NULL,
  `negeri` varchar(11) NOT NULL,
  `daerah` varchar(11) NOT NULL,
  `mukim` varchar(11) NOT NULL,
  `pakej` varchar(11) NOT NULL,
  `no_lot` varchar(11) NOT NULL,
  `no_hakmilik` varchar(255) NOT NULL,
  `t_warta` date NOT NULL,
  `t_luputwarta` date NOT NULL,
  `jilid` varchar(255) NOT NULL,
  `no_warta` varchar(255) NOT NULL,
  `rujukan` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warta`
--

INSERT INTO `warta` (`id`, `kod_blok`, `fasa`, `negeri`, `daerah`, `mukim`, `pakej`, `no_lot`, `no_hakmilik`, `t_warta`, `t_luputwarta`, `jilid`, `no_warta`, `rujukan`, `catatan`) VALUES
(5, '3', '2', '1', '1', '3', '2', '33', '77/3077', '2017-12-25', '2017-12-27', '59', '4613', 'mada/bvjksd/jhfdkas', 'testing 3'),
(6, '2', '4', '2', '1', '2', '2', '1234', '894567/2', '2017-12-27', '2017-12-27', '15', 'bptm', 'mada/bvjksd/asdw4r1', 'tgddwqer'),
(7, '2', '3', '1', '1', '3', '1', '1234', '70/3072', '2017-12-31', '2017-12-31', '59', 'asd123', '69 dlm.RPM 1/93/Jld.3', 'testing warta2');

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `id` int(11) NOT NULL,
  `kod_wilayah` int(4) NOT NULL,
  `desc_wilayah` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`id`, `kod_wilayah`, `desc_wilayah`) VALUES
(1, 1, 'Wilayah I'),
(2, 2, 'Wilayah II'),
(3, 3, 'Wilayah III'),
(4, 4, 'Wilayah IV');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blok_tersier`
--
ALTER TABLE `blok_tersier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borangh`
--
ALTER TABLE `borangh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borangk`
--
ALTER TABLE `borangk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daerah`
--
ALTER TABLE `daerah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fasa`
--
ALTER TABLE `fasa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mukim`
--
ALTER TABLE `mukim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `negeri`
--
ALTER TABLE `negeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakej`
--
ALTER TABLE `pakej`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pampasan`
--
ALTER TABLE `pampasan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_mode`
--
ALTER TABLE `payment_mode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perbicaraan`
--
ALTER TABLE `perbicaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppk`
--
ALTER TABLE `ppk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_bicara`
--
ALTER TABLE `status_bicara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_penerima`
--
ALTER TABLE `status_penerima`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_tanah`
--
ALTER TABLE `status_tanah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warta`
--
ALTER TABLE `warta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `blok_tersier`
--
ALTER TABLE `blok_tersier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `borangh`
--
ALTER TABLE `borangh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `borangk`
--
ALTER TABLE `borangk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `daerah`
--
ALTER TABLE `daerah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `fasa`
--
ALTER TABLE `fasa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mukim`
--
ALTER TABLE `mukim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `negeri`
--
ALTER TABLE `negeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pakej`
--
ALTER TABLE `pakej`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pampasan`
--
ALTER TABLE `pampasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `payment_mode`
--
ALTER TABLE `payment_mode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `perbicaraan`
--
ALTER TABLE `perbicaraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ppk`
--
ALTER TABLE `ppk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `status_bicara`
--
ALTER TABLE `status_bicara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `status_penerima`
--
ALTER TABLE `status_penerima`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `status_tanah`
--
ALTER TABLE `status_tanah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `warta`
--
ALTER TABLE `warta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `wilayah`
--
ALTER TABLE `wilayah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
