-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2019 at 08:35 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mhs_sela`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(20) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `no_hp_lama` varchar(50) NOT NULL,
  `no_hp_baru` varchar(50) NOT NULL,
  `tgl_diubah` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `nim`, `no_hp_lama`, `no_hp_baru`, `tgl_diubah`) VALUES
(1, '161240000551', '087776543232', '0877765436', '2019-11-03 07:39:48'),
(7, '161240000557', '082', '082243434942', '2019-11-14 23:17:53'),
(8, '161240000534', '089767555432', '089767555432', '2019-11-14 23:18:02'),
(9, '161240000557', '082243434942', '082243434942', '2019-11-15 01:39:52'),
(12, '161240000557', '082243434942', '082243434', '2019-11-15 02:12:43');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(10) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama_mahasiswa`, `jk`, `alamat`, `no_hp`) VALUES
(1, '161240000589', 'Desi Amelina Suryani', 'P', 'Bangsri', '081225250249'),
(2, '161240000551', 'Retno Nur Cahyanti', 'P', 'Demaan', '0877765436'),
(3, '161240000533', 'Qorinul Hikam Ikhsanillah', 'L', 'Panggang', '082325466767'),
(5, '161240000534', 'Farid Hernando', 'L', 'Mlonggo', '089767555432'),
(6, '161240000557', 'Sela Anjayani', 'P', 'Mlonggo', '082243434');

--
-- Triggers `mahasiswa`
--
DELIMITER $$
CREATE TRIGGER `membuat_log` BEFORE UPDATE ON `mahasiswa` FOR EACH ROW INSERT INTO history
SET nim = old.nim,
    no_hp_lama = old.no_hp,
    no_hp_baru = new.no_hp,
    tgl_diubah = NOW()
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
