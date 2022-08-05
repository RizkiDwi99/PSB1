-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2022 at 12:41 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'rizkidwi', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_pendaftaran` char(10) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `thn_ajaran` varchar(9) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `nama_peserta` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `agama` varchar(15) NOT NULL,
  `alamat_peserta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_pendaftaran`, `tgl_daftar`, `thn_ajaran`, `jurusan`, `nama_peserta`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `alamat_peserta`) VALUES
('P202200005', '2022-08-03', '2022/2023', 'Teknik Listrik', 'MAKRUP', 'bontang', '2022-08-31', 'laki-laki', 'Islam', 'bungkal'),
('P202200006', '2022-08-03', '2022/2023', 'Teknik Otomotif', 'ripin', 'ponorogo', '2022-08-08', 'laki-laki', 'Islam', 'ponorogo'),
('P202200007', '2022-08-03', '2022/2023', 'Teknik Otomotif', 'ripin', 'ponorogo', '2022-08-08', 'laki-laki', 'Kristen', 'ponorogo'),
('P202200008', '2022-08-03', '2022/2023', 'Teknik Otomotif', 'ripin', 'ponorogo', '2022-08-08', 'laki-laki', 'Kristen', 'ponorogo'),
('P202200009', '2022-08-03', '2022/2023', 'Teknik Otomotif', 'ripin', 'ponorogo', '2022-08-08', 'laki-laki', 'Kristen', 'ponorogo'),
('P202200010', '2022-08-03', '2022/2023', 'Teknik Otomotif', 'ripin', 'ponorogo', '2022-08-08', 'laki-laki', 'Kristen', 'ponorogo'),
('P202200011', '2022-08-03', '2022/2023', 'Teknik Otomotif', 'ripin', 'ponorogo', '2022-08-08', 'laki-laki', 'Kristen', 'ponorogo'),
('P202200012', '2022-08-03', '2022/2023', 'Teknik Otomotif', 'ripin', 'ponorogo', '2022-08-08', 'laki-laki', 'Kristen', 'ponorogo'),
('P202200013', '2022-08-03', '2022/2023', 'Teknik Otomotif', 'ripin', 'ponorogo', '2022-08-08', 'laki-laki', 'Kristen', 'ponorogo'),
('P202200014', '2022-08-05', '2022/2023', '', 'rizki dwi sasongko', 'nambak', '2022-08-09', 'laki-laki', 'Islam', 'nambak bungkal'),
('P202200015', '2022-08-05', '2022/2023', 'Teknik Las', 'sirup', 'ppp', '2022-08-05', 'perempuan', 'Islam', 'desa isni');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
