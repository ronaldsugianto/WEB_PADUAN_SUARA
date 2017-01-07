-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 07 Jan 2017 pada 11.54
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `adminpadus`
--

INSERT INTO `adminpadus` (`id`, `nama`, `email`, `password`) VALUES
(1, 'adminpadus', 'adminpadus001@yahoo.com', '9d2df1576ac7b654b52a907c7e0a047e');

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `anggotaukm`
--

INSERT INTO `anggotaukm` (`id`, `nim`, `nama`, `jurusan`, `email`) VALUES
(7, 51014001, 'ady', 'Sistem Informasi', 'ady.wijaya38@gmail.com'),
(8, 51014021, 'ronald', 'Sistem Informasi', 'ronaldsugianto_15@kharisma.ac.id'),
(10, 51014000, 'randy', 'Sistem Informasi', 'randy@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
