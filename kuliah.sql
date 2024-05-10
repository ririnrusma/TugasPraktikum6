-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2024 at 06:40 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuliah`
--

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE `krs` (
  `id` int(11) NOT NULL,
  `mahasiswa_npm` char(13) DEFAULT NULL,
  `matakuliah_kodemk` char(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `krs`
--

INSERT INTO `krs` (`id`, `mahasiswa_npm`, `matakuliah_kodemk`) VALUES
(0, '2210631170044', 'FIK513'),
(1, '2210631170043', 'FIK522'),
(2, '2210631170043', 'FIK615'),
(2147483647, '2210631170051', 'FIK523');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `npm` char(13) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jurusan` enum('Teknik Informatika','Sistem Informasi') DEFAULT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`npm`, `nama`, `jurusan`, `alamat`) VALUES
('2210631170043', 'Ririn Medistarani', 'Teknik Informatika', 'Cikarang'),
('2210631170044', 'Ririn Rusmayanti', 'Teknik Informatika', 'karawang'),
('2210631170047', 'Ruth Tika Sarwanti', 'Teknik Informatika', 'Bekasi'),
('2210631170049', 'Siti Nurlaela', 'Teknik Informatika', 'Karawang'),
('2210631170051', 'Widianingsih', 'Teknik Informatika', 'Karawang'),
('2210631170052', 'Yonatan Yusak Lestari', 'Teknik Informatika', 'Cianjur'),
('2210631170053', 'Ahista Tasya Kamila', 'Teknik Informatika', 'Cirebon'),
('2210631170058', 'Benedict Raditya Pradipta Ginting', 'Teknik Informatika', 'Kosambi'),
('2210631170061', 'Dandy Febryan Adham', 'Teknik Informatika', 'Bekasi'),
('2210631170137', 'Muhammad Hafiz Fathurrohman', 'Teknik Informatika', 'Cikampek');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kodemk` char(6) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jumlah_sks` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`kodemk`, `nama`, `jumlah_sks`) VALUES
('FIK513', 'Sistem Operasi', 3),
('FIK519', 'Rekayasa Perangkat Lunak', 3),
('FIK520', 'Statistika Dan Probabilitas', 3),
('FIK522', 'Kecerdasan Buatan', 3),
('FIK523', 'Embedded Intelligent Systems', 3),
('FIK615', 'Pemrograman Berbasis Web', 3),
('FIK616', 'Analisis Desain Algoritma', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mahasiswa_npm` (`mahasiswa_npm`),
  ADD KEY `matakuliah_kodemk` (`matakuliah_kodemk`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kodemk`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `krs`
--
ALTER TABLE `krs`
  ADD CONSTRAINT `krs_ibfk_1` FOREIGN KEY (`mahasiswa_npm`) REFERENCES `mahasiswa` (`npm`),
  ADD CONSTRAINT `krs_ibfk_2` FOREIGN KEY (`matakuliah_kodemk`) REFERENCES `matakuliah` (`kodemk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
