-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2021 at 05:56 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metodesaw`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `penghasilan` varchar(50) NOT NULL,
  `jml_tanggungan` varchar(50) NOT NULL,
  `usia` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `id_warga`, `pekerjaan`, `penghasilan`, `jml_tanggungan`, `usia`, `status`) VALUES
(1, 10, '1', '2000000', '4', '3', '3'),
(2, 9, '2', '1000000', '5', '2', '2'),
(3, 8, '3', '500000', '3', '4', '4'),
(4, 7, '3', '500000', '2', '5', '2'),
(5, 1, '3', '500000', '2', '5', '2'),
(9, 15, '4', '300000', '4', '5', '3');

-- --------------------------------------------------------

--
-- Table structure for table `data_warga`
--

CREATE TABLE `data_warga` (
  `id_warga` int(11) NOT NULL,
  `nama_kk` varchar(50) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_warga`
--

INSERT INTO `data_warga` (`id_warga`, `nama_kk`, `no_ktp`, `jenis_kelamin`, `alamat`, `no_hp`) VALUES
(1, 'La Teni', '12345676654', 'Laki-laki', 'Telaga Pange l', '082287635620'),
(7, 'Lantaro', '075422122345678', 'Laki-laki', 'Telaga Pange', '234567890'),
(8, 'Wa Guli', '876543212345', 'Perempuan', 'Telaga Pange', '09876325678'),
(9, 'Sarlim', '25789876543', 'Laki-laki', 'Telaga Pange', '87657890098'),
(10, 'La Harimin', '0987547689086', 'Laki-laki', 'Telaga Pange', '098765432'),
(15, 'baru', '075422122345678', 'Laki-laki', 'k', '987654'),
(16, 'lll', '075422122345678', 'Laki-laki', 'kj', '87657890098');

-- --------------------------------------------------------

--
-- Table structure for table `normalisasi`
--

CREATE TABLE `normalisasi` (
  `id_normalisasi` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `c1` float NOT NULL,
  `c2` float NOT NULL,
  `c3` float NOT NULL,
  `c4` float NOT NULL,
  `c5` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `normalisasi`
--

INSERT INTO `normalisasi` (`id_normalisasi`, `id_warga`, `c1`, `c2`, `c3`, `c4`, `c5`) VALUES
(1, 10, 0.25, 0.5, 0.8, 0.6, 0.75),
(2, 9, 0.5, 1, 1, 0.4, 0.5),
(3, 8, 0.75, 2, 0.6, 0.8, 1),
(4, 7, 0.75, 2, 0.4, 1, 0.5),
(5, 1, 0.75, 2, 0.4, 1, 0.5),
(6, 15, 1, 3.33333, 0.8, 1, 0.75);

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `id_score` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `score` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`id_score`, `id_warga`, `score`) VALUES
(1, 10, 0.525),
(2, 9, 0.76),
(3, 8, 1.1775),
(4, 7, 1.1425),
(5, 1, 1.1425),
(6, 15, 1.76417);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `data_warga`
--
ALTER TABLE `data_warga`
  ADD PRIMARY KEY (`id_warga`);

--
-- Indexes for table `normalisasi`
--
ALTER TABLE `normalisasi`
  ADD PRIMARY KEY (`id_normalisasi`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`id_score`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `data_warga`
--
ALTER TABLE `data_warga`
  MODIFY `id_warga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `normalisasi`
--
ALTER TABLE `normalisasi`
  MODIFY `id_normalisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `id_score` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
