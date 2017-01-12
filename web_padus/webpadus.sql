-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 11 Jan 2017 pada 10.15
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `webpadus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `adminpadus`
--

CREATE TABLE IF NOT EXISTS `adminpadus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `adminpadus`
--

INSERT INTO `adminpadus` (`id`, `nama`, `email`, `password`) VALUES
(1, 'adminpadus', 'adminpadus001@yahoo.com', '9d2df1576ac7b654b52a907c7e0a047e'),
(2, 'adminpaduansuara', 'paduansuara5@gmail.com', '1c8235b2ad85e316a7327bc45fed3d34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggotaukm`
--

CREATE TABLE IF NOT EXISTS `anggotaukm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nim` int(10) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `jurusan` varchar(32) NOT NULL,
  `email` varchar(60) NOT NULL,
  `point` int(5) NOT NULL,
  `status` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data untuk tabel `anggotaukm`
--

INSERT INTO `anggotaukm` (`id`, `nim`, `nama`, `jurusan`, `email`, `point`, `status`) VALUES
(10, 51014021, 'Ronald Sugianto', 'Manajemen Informatika', 'ronaldsugianto_15@kharisma.ac.id', 20, 'Aktiv'),
(11, 51014024, 'Triyanti kusuma bangsa', 'Sistem Informasi', 'fanglikcu@gmail.com', 10, 'Aktiv'),
(12, 51014008, 'elza juliani', 'Sistem Informasi', 'felicia_elza@yahoo.com', 20, 'Aktiv'),
(13, 51014011, 'Giovanno michael ', 'Sistem Informasi', 'giovanno_michael_fransisco@yahoo.co.id', 10, 'Aktiv'),
(18, 51018080, 'pinkan jumbo', 'Sistem Informasi', 'pinkan@mambo.com', 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
