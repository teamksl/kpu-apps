-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Nov 2017 pada 07.35
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_kpu`
--
CREATE DATABASE IF NOT EXISTS `db_kpu` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_kpu`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `partai`
--

CREATE TABLE IF NOT EXISTS `partai` (
`id_partai` tinyint(2) NOT NULL,
  `nama_partai` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `partai`
--

INSERT INTO `partai` (`id_partai`, `nama_partai`) VALUES
(1, 'partai segitiga'),
(2, 'partai lingkaran'),
(3, 'partai kotak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilih`
--

CREATE TABLE IF NOT EXISTS `pemilih` (
  `nim` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `partai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemilih`
--

INSERT INTO `pemilih` (`nim`, `nama`, `fakultas`, `partai`) VALUES
(1511501015, 'Soleh Hudin', 'Fakultas Teknologi Informasi', '1'),
(1511501288, 'achmad anhar anggoro', 'Fakultas Teknologi Informasi', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `partai`
--
ALTER TABLE `partai`
 ADD PRIMARY KEY (`id_partai`);

--
-- Indexes for table `pemilih`
--
ALTER TABLE `pemilih`
 ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `partai`
--
ALTER TABLE `partai`
MODIFY `id_partai` tinyint(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
