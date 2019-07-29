-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 29, 2019 at 05:07 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `berkas_calon`
--

CREATE TABLE `berkas_calon` (
  `id_berkas` int(15) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `pas_foto` varchar(200) NOT NULL,
  `kk` varchar(200) NOT NULL,
  `akta` varchar(200) NOT NULL,
  `ijazah` varchar(200) NOT NULL,
  `transkip_nilai` varchar(200) NOT NULL,
  `no_ijazah` varchar(15) NOT NULL,
  `s1` varchar(5) NOT NULL,
  `s2` varchar(5) NOT NULL,
  `s3` varchar(5) NOT NULL,
  `s4` varchar(5) NOT NULL,
  `s5` varchar(5) NOT NULL,
  `s6` varchar(5) NOT NULL,
  `un` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berkas_calon`
--

INSERT INTO `berkas_calon` (`id_berkas`, `id_pengguna`, `pas_foto`, `kk`, `akta`, `ijazah`, `transkip_nilai`, `no_ijazah`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `un`) VALUES
(1, 9003, ' ', ' ', ' ', ' ', ' ', ' ', '8', '8', '8', '8', '8', '8', '89');

-- --------------------------------------------------------

--
-- Table structure for table `calon_siswa`
--

CREATE TABLE `calon_siswa` (
  `id_pendaftaran` int(15) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calon_siswa`
--

INSERT INTO `calon_siswa` (`id_pendaftaran`, `id_pengguna`, `nama`, `tgl_lahir`, `jk`, `no_telp`, `email`, `jurusan`, `alamat`, `asal_sekolah`, `status`, `created`) VALUES
(12, 9003, 'Fuad', '2019-07-03', 'L', '08566666', 'fuadcahkiran@gmail.com', 'TKJ', 'Klaten', 'SMK Sinduadi', '1', '2019-07-29'),
(14, 9003, 'Fuad', '2019-07-03', 'L', '08566666', 'fuadcahkiran@gmail.com', 'TKJ', 'Klaten', 'SMK Sinduadi', '0', '2019-07-29');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_pengguna` int(16) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_posisi` enum('0','1') NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_pengguna`, `email`, `password`, `id_posisi`, `created`) VALUES
(1, 'fuad@demo.isc.id', '81dc9bdb52d04dc20036dbd8313ed055', '1', '2019-07-29'),
(9003, 'fuadcahkiran@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '0', '2019-07-29'),
(9004, 'fuad@demo.isc.id0', '81dc9bdb52d04dc20036dbd8313ed055', '0', '2019-07-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berkas_calon`
--
ALTER TABLE `berkas_calon`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indexes for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berkas_calon`
--
ALTER TABLE `berkas_calon`
  MODIFY `id_berkas` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  MODIFY `id_pendaftaran` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_pengguna` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9005;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
