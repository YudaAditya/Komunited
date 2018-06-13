-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 13, 2018 at 08:52 AM
-- Server version: 5.5.58-0+deb8u1
-- PHP Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ydityausr`
--

-- --------------------------------------------------------

--
-- Table structure for table `buat`
--

CREATE TABLE IF NOT EXISTS `buat` (
  `nama_komunitas` varchar(20) DEFAULT NULL,
  `id_event` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE IF NOT EXISTS `daftar` (
  `id_user` varchar(20) DEFAULT NULL,
  `nama_komunitas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id_event` int(11) NOT NULL,
  `nama_event` varchar(100) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `tempat` varchar(50) DEFAULT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ikut`
--

CREATE TABLE IF NOT EXISTS `ikut` (
  `id_user` varchar(20) DEFAULT NULL,
  `id_event` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` varchar(20) NOT NULL,
  `nama_kategori` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komunitas`
--

CREATE TABLE IF NOT EXISTS `komunitas` (
  `nama_komunitas` varchar(50) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `kontak` int(20) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `bio` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `milik`
--

CREATE TABLE IF NOT EXISTS `milik` (
  `id_kategori` varchar(20) DEFAULT NULL,
  `nama_komunitas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `no_hp`, `jenis_kelamin`) VALUES
('budi99', 'budi', 'budi99@gmail.com', '00dfc53ee86af02e742515cdcf075ed3', '09140419089', 'L'),
('israf', 'isra', 'israfarliadi@gmail.com', '9c31adb100476509d9ffac112ddb0758', '00809987', 'L'),
('topik', 'taufik', 'topik88@gmail.com', '48c78db2dbea27286f9da14712baabf0', '2439i4305i0wi50', 'L'),
('user', 'Yuda Aditya', 'yudaaditya98@gmail.com', 'ac9053a8bd7632586c3eb663a6cf15e4', 'user', 'L');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buat`
--
ALTER TABLE `buat`
 ADD KEY `id_komunitas` (`nama_komunitas`), ADD KEY `id_event` (`id_event`);

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
 ADD KEY `id_user` (`id_user`), ADD KEY `nama_komunitas` (`nama_komunitas`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
 ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `ikut`
--
ALTER TABLE `ikut`
 ADD KEY `id_user` (`id_user`), ADD KEY `id_event` (`id_event`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `komunitas`
--
ALTER TABLE `komunitas`
 ADD PRIMARY KEY (`nama_komunitas`), ADD UNIQUE KEY `komunitas_email` (`email`), ADD UNIQUE KEY `komunitas_kontak` (`kontak`);

--
-- Indexes for table `milik`
--
ALTER TABLE `milik`
 ADD KEY `id_kategori` (`id_kategori`), ADD KEY `nama_komunitas` (`nama_komunitas`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`), ADD UNIQUE KEY `Email_Unique` (`email`), ADD UNIQUE KEY `Nomor_Unique` (`no_hp`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buat`
--
ALTER TABLE `buat`
ADD CONSTRAINT `buat_ibfk_1` FOREIGN KEY (`nama_komunitas`) REFERENCES `komunitas` (`nama_komunitas`),
ADD CONSTRAINT `buat_ibfk_2` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`);

--
-- Constraints for table `daftar`
--
ALTER TABLE `daftar`
ADD CONSTRAINT `daftar_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
ADD CONSTRAINT `daftar_ibfk_2` FOREIGN KEY (`nama_komunitas`) REFERENCES `komunitas` (`nama_komunitas`);

--
-- Constraints for table `ikut`
--
ALTER TABLE `ikut`
ADD CONSTRAINT `ikut_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
ADD CONSTRAINT `ikut_ibfk_2` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`);

--
-- Constraints for table `milik`
--
ALTER TABLE `milik`
ADD CONSTRAINT `milik_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
ADD CONSTRAINT `milik_ibfk_2` FOREIGN KEY (`nama_komunitas`) REFERENCES `komunitas` (`nama_komunitas`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
