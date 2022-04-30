-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2022 at 08:02 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokumendn`
--

CREATE TABLE `dokumendn` (
  `Id` int(50) NOT NULL,
  `Nidn` varchar(50) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Instansi` varchar(50) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `KTP` varchar(50) NOT NULL,
  `SPPPTS` varchar(50) NOT NULL,
  `SKPDT` varchar(50) NOT NULL,
  `IJ` varchar(50) NOT NULL,
  `SKJT` varchar(50) NOT NULL,
  `SKKP` varchar(50) NOT NULL,
  `SPB` varchar(50) NOT NULL,
  `FRD` varchar(50) NOT NULL,
  `ES` varchar(50) NOT NULL,
  `Ket` enum('Masih Diproses','ACC','Belum ACC','') NOT NULL,
  `Note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokumendn`
--

INSERT INTO `dokumendn` (`Id`, `Nidn`, `Nama`, `Email`, `Instansi`, `Alamat`, `KTP`, `SPPPTS`, `SKPDT`, `IJ`, `SKJT`, `SKKP`, `SPB`, `FRD`, `ES`, `Ket`, `Note`) VALUES
(25, '001', 'Sedry Muhammad Iqbal', 'sendrym94@gmail.com', 'Politeknik Negeri Sriwijaya', 'Jl. Kutilang No. 44 Rt. 01 Rw. 01 Kel.  Pasar 1 Kec. Prabumulih Utara', 'R2-35-SEDRY MUHAMMAD IQBAL-LAPORAN KP.pdf', 'R2-35-SEDRY MUHAMMAD IQBAL-LAPORAN KP.pdf', 'R2-35-SEDRY MUHAMMAD IQBAL-LAPORAN KP.pdf', 'R2-35-SEDRY MUHAMMAD IQBAL-LAPORAN KP.pdf', 'R2-35-SEDRY MUHAMMAD IQBAL-LAPORAN KP.pdf', 'R2-35-SEDRY MUHAMMAD IQBAL-LAPORAN KP.pdf', 'R2-35-SEDRY MUHAMMAD IQBAL-LAPORAN KP.pdf', 'R2-35-SEDRY MUHAMMAD IQBAL-LAPORAN KP.pdf', 'R2-35-SEDRY MUHAMMAD IQBAL-LAPORAN KP.pdf', 'ACC', ''),
(26, '001', 'Sedry Muhammad Iqbal', 'sendrym94@gmail.com', 'Politeknik Negeri Sriwijaya', 'Jl. Bukit', 'LAPORAN SELESAI NN.pdf', 'LAPORAN SELESAI NN.pdf', 'R2-35-SEDRY MUHAMMAD IQBAL-LAPORAN KP.pdf', 'R2-35-SEDRY MUHAMMAD IQBAL-LAPORAN KP.pdf', 'R2-35-SEDRY MUHAMMAD IQBAL-LAPORAN KP.pdf', 'R2-35-SEDRY MUHAMMAD IQBAL-LAPORAN KP.pdf', 'LAPORAN SELESAI NN.pdf', 'R2-35-SEDRY MUHAMMAD IQBAL-LAPORAN KP.pdf', 'LAPORAN SELESAI NN.pdf', 'Belum ACC', 'berkas lengkap ktp belum d masukan');

-- --------------------------------------------------------

--
-- Table structure for table `dokumenln`
--

CREATE TABLE `dokumenln` (
  `Id` int(50) NOT NULL,
  `Nidn` varchar(50) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Instansi` varchar(50) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `KTP` varchar(50) NOT NULL,
  `SPPPTS` varchar(50) NOT NULL,
  `SKPDT` varchar(50) NOT NULL,
  `IJ` varchar(50) NOT NULL,
  `SKJT` varchar(50) NOT NULL,
  `SKKP` varchar(50) NOT NULL,
  `SPB` varchar(50) NOT NULL,
  `SI` varchar(50) NOT NULL,
  `TOF` varchar(50) NOT NULL,
  `LOA` varchar(50) NOT NULL,
  `RPP` varchar(50) NOT NULL,
  `KPB` varchar(50) NOT NULL,
  `Ket` enum('Masih Diproses','ACC','Belum ACC','') NOT NULL,
  `Note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokumenln`
--

INSERT INTO `dokumenln` (`Id`, `Nidn`, `Nama`, `Email`, `Instansi`, `Alamat`, `KTP`, `SPPPTS`, `SKPDT`, `IJ`, `SKJT`, `SKKP`, `SPB`, `SI`, `TOF`, `LOA`, `RPP`, `KPB`, `Ket`, `Note`) VALUES
(20, '001', 'Sedry Muhammad Iqbal', 'sendrym94@gmail.com', 'Politeknik Negeri Sriwijaya', 'Jl. Kutilang No. 44 Rt. 01 Rw. 01 Kel.  Pasar 1 Kec. Prabumulih Utara', 'R2-35-SEDRY MUHAMMAD IQBAL-LAPORAN KP.pdf', 'R2-35-SEDRY MUHAMMAD IQBAL-LAPORAN KP.pdf', 'R2-35-SEDRY MUHAMMAD IQBAL-LAPORAN KP.pdf', 'R2-35-SEDRY MUHAMMAD IQBAL-LAPORAN KP.pdf', 'R2-35-SEDRY MUHAMMAD IQBAL-LAPORAN KP.pdf', 'R2-35-SEDRY MUHAMMAD IQBAL-LAPORAN KP.pdf', 'R2-35-SEDRY MUHAMMAD IQBAL-LAPORAN KP.pdf', 'R2-35-SEDRY MUHAMMAD IQBAL-LAPORAN KP.pdf', 'R2-35-SEDRY MUHAMMAD IQBAL-LAPORAN KP.pdf', 'R2-35-SEDRY MUHAMMAD IQBAL-LAPORAN KP.pdf', 'R2-35-SEDRY MUHAMMAD IQBAL-LAPORAN KP.pdf', 'R2-35-SEDRY MUHAMMAD IQBAL-LAPORAN KP.pdf', 'ACC', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` enum('admin','user','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_lengkap`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin', 'admin'),
(2, 'user2', 'user', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokumendn`
--
ALTER TABLE `dokumendn`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `dokumenln`
--
ALTER TABLE `dokumenln`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokumendn`
--
ALTER TABLE `dokumendn`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `dokumenln`
--
ALTER TABLE `dokumenln`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
