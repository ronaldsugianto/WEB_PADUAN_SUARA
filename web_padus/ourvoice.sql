-- phpMyAdmin SQL Dump
-- version 4.6.4deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 11, 2017 at 02:09 PM
-- Server version: 5.7.17-0ubuntu0.16.10.1
-- PHP Version: 7.0.13-0ubuntu0.16.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ourvoice`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminpadus`
--

CREATE TABLE `adminpadus` (
  `idadmin` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminpadus`
--

INSERT INTO `adminpadus` (`idadmin`, `nama`, `email`, `password`) VALUES
(1, 'adminpadus', 'adminpadus001@yahoo.com', '9d2df1576ac7b654b52a907c7e0a047e'),
(2, 'adminpaduansuara', 'paduansuara5@gmail.com', '1c8235b2ad85e316a7327bc45fed3d34');

-- --------------------------------------------------------

--
-- Table structure for table `anggotaukm`
--

CREATE TABLE `anggotaukm` (
  `id` int(11) NOT NULL,
  `nim` int(10) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `jurusan` varchar(32) NOT NULL,
  `email` varchar(60) NOT NULL,
  `point` int(5) NOT NULL,
  `status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggotaukm`
--

INSERT INTO `anggotaukm` (`id`, `nim`, `nama`, `jurusan`, `email`, `point`, `status`) VALUES
(11, 51014024, 'Triyanti kusuma bangsa', 'Sistem Informasi', 'fanglikcu@gmail.com', 15, 'Aktiv'),
(12, 51014008, 'elza juliani n', 'Sistem Informasi', 'felicia_elza@yahoo.com', 20, 'Aktiv'),
(13, 51014011, 'Giovanno michael ', 'Sistem Informasi', 'giovanno_michael_fransisco@yahoo.co.id', 10, 'Aktiv'),
(21, 51014030, 'dimassk', 'Sistem Informasi', 'dimass@gmail.com', 20, ''),
(23, 51014021, 'Ronald Sugianto', 'Sistem Informasi', 'ronaldsugianto_15@kharisma.ac.id', 30, ''),
(24, 51014006, 'melisa mila', 'Sistem Informasi', 'melisa@gmail.com', 20, ''),
(25, 51014031, 'mikatan', 'Sistem Informasi', 'mika@kima.com', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatanukm`
--

CREATE TABLE `kegiatanukm` (
  `idkegiatan` int(11) NOT NULL,
  `waktu` varchar(11) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `kegiatan` varchar(60) NOT NULL,
  `tempat` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatanukm`
--

INSERT INTO `kegiatanukm` (`idkegiatan`, `waktu`, `tanggal`, `kegiatan`, `tempat`) VALUES
(1, '12:00-14:00', '12-des-2016', 'ulangtahun ukm', 'stimik kharisma makassar'),
(2, '11:00-14:00', '12-des-2017', 'Malam minggu bersama', 'Mal ratuindah '),
(3, '10:00-12:00', '12-januari-2016', 'bernyanyi bersama', 'stimik kharisma makassar'),
(4, '12:00-14:00', '12-april-2017', 'mengisi acara musik', 'Mal. GTC'),
(8, '15:00-17:00', '29-april-2016', 'evaluasi kinerja anggoraUkm', 'stimik kharisma makassar');

-- --------------------------------------------------------

--
-- Table structure for table `organisasi`
--

CREATE TABLE `organisasi` (
  `id` tinyint(3) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `linktwit` varchar(60) NOT NULL,
  `link` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisasi`
--

INSERT INTO `organisasi` (`id`, `nama`, `jabatan`, `linktwit`, `link`) VALUES
(1, 'Swandy Sumbogo', 'Ketua UKM', '', 'https://www.facebook.com/suwandysumbogo'),
(2, 'jono', 'Sekertaris UKM', '', ''),
(3, 'Sugiono', 'Wakil ketua UKM', '', 'https://www.facebook.com/sugianto.ronald');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminpadus`
--
ALTER TABLE `adminpadus`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `anggotaukm`
--
ALTER TABLE `anggotaukm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatanukm`
--
ALTER TABLE `kegiatanukm`
  ADD PRIMARY KEY (`idkegiatan`);

--
-- Indexes for table `organisasi`
--
ALTER TABLE `organisasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminpadus`
--
ALTER TABLE `adminpadus`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `anggotaukm`
--
ALTER TABLE `anggotaukm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `kegiatanukm`
--
ALTER TABLE `kegiatanukm`
  MODIFY `idkegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
