-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2018 at 01:58 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ydityausr`
--

-- --------------------------------------------------------

--
-- Table structure for table `buat`
--

CREATE TABLE `buat` (
  `nama_komunitas` varchar(20) DEFAULT NULL,
  `id_event` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `id_user` varchar(20) DEFAULT NULL,
  `nama_komunitas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
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

CREATE TABLE `ikut` (
  `id_user` varchar(20) DEFAULT NULL,
  `id_event` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(20) NOT NULL,
  `nama_kategori` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
('01', 'Bisnis & UKM'),
('02', 'Fashion'),
('03', 'Gaya Hidup'),
('04', 'Keagamaan'),
('05', 'Kepemudaan'),
('06', 'Kesehatan'),
('07', 'Lingkungan Hidup'),
('08', 'Olahraga'),
('09', 'Pendidikan'),
('10', 'Perempuan'),
('11', 'Politik'),
('12', 'Profesi & Alumni'),
('13', 'Sains & Teknologi'),
('14', 'Sejarah'),
('15', 'Selebriti & Hiburan'),
('16', 'Seni & Budaya'),
('17', 'Sosial'),
('18', 'Wisata & Kuliner');

-- --------------------------------------------------------

--
-- Table structure for table `komunitas`
--

CREATE TABLE `komunitas` (
  `nama_komunitas` varchar(50) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `kontak` varchar(20) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `bio` text,
  `id_kategori` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komunitas`
--

INSERT INTO `komunitas` (`nama_komunitas`, `email`, `kontak`, `alamat`, `bio`, `id_kategori`) VALUES
('adika', 'adika@gmail.com', '1233456', 'adika', 'adika', '01'),
('yuda', 'yuda@gmail.com', '131532764', 'yuda', 'adika', '01'),
('yudaa', 'yuda@gmail.com', '1315327641', 'yuda', 'adika', '01');

-- --------------------------------------------------------

--
-- Table structure for table `milik`
--

CREATE TABLE `milik` (
  `id_kategori` varchar(20) DEFAULT NULL,
  `nama_komunitas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `nama`, `email`, `password`, `no_hp`, `jenis_kelamin`) VALUES
('budi99', 'budi', 'budi99@gmail.com', '00dfc53ee86af02e742515cdcf075ed3', '09140419089', 'L'),
('israf', 'isra', 'israfarliadi@gmail.com', '9c31adb100476509d9ffac112ddb0758', '00809987', 'L'),
('topik', 'taufik', 'topik88@gmail.com', '48c78db2dbea27286f9da14712baabf0', '2439i4305i0wi50', 'L'),
('yuda', 'Yuda', 'yuda@gmail.com', '2e56858ebbb5bd2d2754e3c236efe7c3847d167a833dc90095cbcb5c67e6ba29', '82165132808', 'Laki-Laki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buat`
--
ALTER TABLE `buat`
  ADD KEY `id_komunitas` (`nama_komunitas`),
  ADD KEY `id_event` (`id_event`);

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `nama_komunitas` (`nama_komunitas`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `ikut`
--
ALTER TABLE `ikut`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_event` (`id_event`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `komunitas`
--
ALTER TABLE `komunitas`
  ADD PRIMARY KEY (`nama_komunitas`),
  ADD UNIQUE KEY `komunitas_kontak` (`kontak`),
  ADD KEY `f_kategori` (`id_kategori`);

--
-- Indexes for table `milik`
--
ALTER TABLE `milik`
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `nama_komunitas` (`nama_komunitas`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `Email_Unique` (`email`),
  ADD UNIQUE KEY `Nomor_Unique` (`no_hp`);

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
  ADD CONSTRAINT `daftar_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`username`),
  ADD CONSTRAINT `daftar_ibfk_2` FOREIGN KEY (`nama_komunitas`) REFERENCES `komunitas` (`nama_komunitas`);

--
-- Constraints for table `ikut`
--
ALTER TABLE `ikut`
  ADD CONSTRAINT `ikut_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`username`),
  ADD CONSTRAINT `ikut_ibfk_2` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`);

--
-- Constraints for table `komunitas`
--
ALTER TABLE `komunitas`
  ADD CONSTRAINT `f_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `milik`
--
ALTER TABLE `milik`
  ADD CONSTRAINT `milik_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
  ADD CONSTRAINT `milik_ibfk_2` FOREIGN KEY (`nama_komunitas`) REFERENCES `komunitas` (`nama_komunitas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
