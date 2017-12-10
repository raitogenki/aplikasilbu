-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2017 at 02:27 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasilbu`
--

-- --------------------------------------------------------

--
-- Table structure for table `form04`
--

CREATE TABLE `form04` (
  `form_id` int(11) NOT NULL,
  `create_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `laporan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `jenis` varchar(2) NOT NULL,
  `jenis_valuta` varchar(3) NOT NULL,
  `jangka_mulai` date NOT NULL,
  `jangka_jatuh_tempo` date NOT NULL,
  `suku_bunga` decimal(18,2) NOT NULL,
  `jumlah` decimal(18,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form12`
--

CREATE TABLE `form12` (
  `form_id` int(11) NOT NULL,
  `create_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `laporan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `perusahaan_emiten_golongan` varchar(4) NOT NULL,
  `perusahaan_emiten_status` int(1) NOT NULL,
  `metode_penyertaan` int(1) NOT NULL,
  `negara_tujuan` varchar(3) NOT NULL,
  `jenis_valuta` varchar(3) NOT NULL,
  `kualitas` int(1) NOT NULL,
  `tujuan_penyertaan` int(1) NOT NULL,
  `waktu_penyertaan` date NOT NULL,
  `bagian_penyertaan` decimal(18,2) NOT NULL,
  `nominal` decimal(18,2) NOT NULL,
  `jumlah_bulan_lalu` decimal(18,2) NOT NULL,
  `jumlah_debet` decimal(18,2) NOT NULL,
  `jumlah_kredit` decimal(18,2) NOT NULL,
  `jumlah_lainnya` decimal(18,2) NOT NULL,
  `jumlah_bulan_laporan` decimal(18,2) NOT NULL,
  `nilai_agunan_diperhitungkan` decimal(18,2) NOT NULL,
  `cadangan_kerugian_individu` decimal(18,2) NOT NULL,
  `cadangan_kerugian_kolektif` decimal(18,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form16`
--

CREATE TABLE `form16` (
  `form_id` int(11) NOT NULL,
  `create_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `laporan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `jenis` varchar(3) NOT NULL,
  `tanggal_penetapan` date NOT NULL,
  `jenis_valuta` int(1) NOT NULL,
  `metode_pengukuran` int(1) NOT NULL,
  `biaya_perolehan` decimal(18,2) NOT NULL,
  `cadangan_kerugian` decimal(18,2) NOT NULL,
  `akumulasi_penyusutan` decimal(18,2) NOT NULL,
  `jumlah` decimal(18,2) NOT NULL,
  `kualitas` int(1) NOT NULL,
  `ppanp_dibentuk` decimal(18,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form20`
--

CREATE TABLE `form20` (
  `form_id` int(11) NOT NULL,
  `create_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `laporan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `sandi_kantor` varchar(3) NOT NULL,
  `jenis` varchar(3) NOT NULL,
  `jenis_valuta` varchar(3) NOT NULL,
  `suku_bunga` decimal(18,2) NOT NULL,
  `jumlah_bulan_lalu` decimal(18,2) NOT NULL,
  `jumlah_debet` decimal(18,2) NOT NULL,
  `jumlah_kredit` decimal(18,2) NOT NULL,
  `jumlah_lainnya` decimal(18,2) NOT NULL,
  `jumlah_bulan_laporan` decimal(18,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form28`
--

CREATE TABLE `form28` (
  `form_id` int(11) NOT NULL,
  `create_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `laporan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `nomer_referensi_transaksi` varchar(20) NOT NULL,
  `jenis` varchar(2) NOT NULL,
  `kontrak` int(1) NOT NULL,
  `jenis_valuta` varchar(3) NOT NULL,
  `variabel_mendasar` int(1) NOT NULL,
  `pihak_lawan_golongan` varchar(4) NOT NULL,
  `pihak_lawan_hubungan_bank` int(1) NOT NULL,
  `pihak_lawan_status` int(1) NOT NULL,
  `negara_pihak_lawan` varchar(3) NOT NULL,
  `jumlah_kewajiban_bulan_lalu` decimal(18,2) NOT NULL,
  `jumlah_kewajiban_bulan_` decimal(18,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form36`
--

CREATE TABLE `form36` (
  `form_id` int(11) NOT NULL,
  `create_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `laporan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `jenis` varchar(2) NOT NULL,
  `jenis_valuta` varchar(3) NOT NULL,
  `kreditur_golongan` varchar(4) NOT NULL,
  `kreditur_hubungan_bank` int(1) NOT NULL,
  `kreditur_status` int(1) NOT NULL,
  `suku_bunga` decimal(18,2) NOT NULL,
  `jumlah_bulan_lalu` decimal(18,2) NOT NULL,
  `jumlah_debet` decimal(18,2) NOT NULL,
  `jumlah_kredit` decimal(18,2) NOT NULL,
  `jumlah_lainnya` decimal(18,2) NOT NULL,
  `jumlah_bulan_laporan` decimal(18,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `laporan_id` int(11) NOT NULL,
  `bulan` varchar(20) NOT NULL,
  `tahun` int(4) NOT NULL,
  `create_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `cabang` varchar(200) NOT NULL,
  `role` varchar(20) NOT NULL,
  `auth_key` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form04`
--
ALTER TABLE `form04`
  ADD PRIMARY KEY (`form_id`),
  ADD KEY `laporan_id` (`laporan_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `form12`
--
ALTER TABLE `form12`
  ADD PRIMARY KEY (`form_id`),
  ADD KEY `laporan_id` (`laporan_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `form16`
--
ALTER TABLE `form16`
  ADD PRIMARY KEY (`form_id`),
  ADD KEY `laporan_id` (`laporan_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `form20`
--
ALTER TABLE `form20`
  ADD PRIMARY KEY (`form_id`),
  ADD KEY `laporan_id` (`laporan_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `form28`
--
ALTER TABLE `form28`
  ADD PRIMARY KEY (`form_id`),
  ADD KEY `laporan_id` (`laporan_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `form36`
--
ALTER TABLE `form36`
  ADD PRIMARY KEY (`form_id`),
  ADD KEY `laporan_id` (`laporan_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`laporan_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form04`
--
ALTER TABLE `form04`
  MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form12`
--
ALTER TABLE `form12`
  MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form16`
--
ALTER TABLE `form16`
  MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form20`
--
ALTER TABLE `form20`
  MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form28`
--
ALTER TABLE `form28`
  MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form36`
--
ALTER TABLE `form36`
  MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `laporan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `form04`
--
ALTER TABLE `form04`
  ADD CONSTRAINT `form04_ibfk_1` FOREIGN KEY (`laporan_id`) REFERENCES `laporan` (`laporan_id`),
  ADD CONSTRAINT `form04_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `form12`
--
ALTER TABLE `form12`
  ADD CONSTRAINT `form12_ibfk_1` FOREIGN KEY (`laporan_id`) REFERENCES `laporan` (`laporan_id`),
  ADD CONSTRAINT `form12_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `form16`
--
ALTER TABLE `form16`
  ADD CONSTRAINT `form16_ibfk_1` FOREIGN KEY (`laporan_id`) REFERENCES `laporan` (`laporan_id`),
  ADD CONSTRAINT `form16_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `form20`
--
ALTER TABLE `form20`
  ADD CONSTRAINT `form20_ibfk_1` FOREIGN KEY (`laporan_id`) REFERENCES `laporan` (`laporan_id`),
  ADD CONSTRAINT `form20_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `form28`
--
ALTER TABLE `form28`
  ADD CONSTRAINT `form28_ibfk_1` FOREIGN KEY (`laporan_id`) REFERENCES `laporan` (`laporan_id`),
  ADD CONSTRAINT `form28_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `form36`
--
ALTER TABLE `form36`
  ADD CONSTRAINT `form36_ibfk_1` FOREIGN KEY (`laporan_id`) REFERENCES `laporan` (`laporan_id`),
  ADD CONSTRAINT `form36_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
