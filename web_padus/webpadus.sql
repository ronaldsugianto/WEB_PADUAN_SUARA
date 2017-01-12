-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12 Jan 2017 pada 09.51
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webpadus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `adminpadus`
--

CREATE TABLE `adminpadus` (
  `idadmin` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `adminpadus`
--

INSERT INTO `adminpadus` (`idadmin`, `nama`, `email`, `password`) VALUES
(1, 'adminpadus', 'adminpadus001@yahoo.com', '9d2df1576ac7b654b52a907c7e0a047e'),
(2, 'adminpaduansuara', 'paduansuara5@gmail.com', '1c8235b2ad85e316a7327bc45fed3d34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggotaukm`
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
-- Dumping data untuk tabel `anggotaukm`
--

INSERT INTO `anggotaukm` (`id`, `nim`, `nama`, `jurusan`, `email`, `point`, `status`) VALUES
(11, 51014024, 'Triyanti kusuma bangsa', 'Sistem Informasi', 'fanglikcu@gmail.com', 10, 'Aktiv'),
(12, 51014008, 'elza juliani', 'Sistem Informasi', 'felicia_elza@yahoo.com', 20, 'Aktiv'),
(13, 51014011, 'Giovanno michael ', 'Sistem Informasi', 'giovanno_michael_fransisco@yahoo.co.id', 10, 'Aktiv'),
(18, 51018080, 'pinkan jumbo', 'Sistem Informasi', 'pinkan@mambo.com', 0, ''),
(20, 51014021, 'Ronald Sugianto', 'Sistem Informasi', 'ronaldsugianto_15@kharisma.ac.id', 0, ''),
(21, 5101111, 'Sasaaaaasdfsdf', 'Sistem Informasi', 'RRRRR@SDFassdfsd', 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatanukm`
--

CREATE TABLE `kegiatanukm` (
  `idkegiatan` int(11) NOT NULL,
  `waktu` varchar(11) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `kegiatan` varchar(60) NOT NULL,
  `tempat` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kegiatanukm`
--

INSERT INTO `kegiatanukm` (`idkegiatan`, `waktu`, `tanggal`, `kegiatan`, `tempat`) VALUES
(1, '12:00-14:00', '12-des-2016', 'mammamam', 'sadfasdf'),
(2, '11:00-14:00', '12-des-2017', 'Malam minggu bersama', 'Mal ratuindah '),
(3, '10:00-12:00', '12-januari-2016', 'bernyanyi bersama', 'stimik kharisma makassar'),
(4, 'sdfasd', 'asdfasdgas', 'dgasdfa', 'asdfadsf'),
(8, 'rr1', 'rrr1', 'rrr1', 'rrr1');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `kegiatanukm`
--
ALTER TABLE `kegiatanukm`
  MODIFY `idkegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
