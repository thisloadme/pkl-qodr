-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2018 at 05:16 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkl_qodr`
--

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `kode_skill` int(11) NOT NULL,
  `nama_skill` varchar(121) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`kode_skill`, `nama_skill`) VALUES
(1, 'Web Design'),
(2, 'Web Databaser'),
(3, 'Graphics Design'),
(4, 'System Analyses');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `kode` int(4) NOT NULL,
  `nama` varchar(121) NOT NULL,
  `nick` varchar(121) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `kode_skill` enum('1','2','3','4') NOT NULL,
  `tempat_lahir` varchar(212) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `bergabung` datetime NOT NULL,
  `alamat` varchar(121) NOT NULL,
  `nationality` varchar(121) NOT NULL,
  `no_hp` int(12) NOT NULL,
  `email` varchar(212) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`kode`, `nama`, `nick`, `gambar`, `kode_skill`, `tempat_lahir`, `tanggal_lahir`, `bergabung`, `alamat`, `nationality`, `no_hp`, `email`) VALUES
(1, 'Dion Budi Riyanto', 'Thisloadme', 'img/nur.jpg', '1', 'Kendari', '2018-02-05', '0000-00-00 00:00:00', 'Banjar', 'Indonesia', 2147483647, 'dionbudi7@gmail.com'),
(2, 'Novendo Allansyah', 'Unlimited Code', 'img/smk.png', '3', 'Banjarnegara', '2000-02-02', '2018-02-11 04:06:45', 'Parakan Canggah', 'Indonesia', 892313, 'nallansyah15@gmail.com'),
(3, 'Rasyid Rama Maulana', 'iPenzela', 'img/qodr.png', '3', 'Banjarnegara', '2017-02-23', '2018-02-15 02:33:34', 'Banjarnegara', 'Indonesia', 7310381, 'rasid@gmail.com'),
(4, 'Pandu Ari Wibisono', 'Ary Fury', 'img/pandu.jpg', '4', 'Banjarnegara', '2018-02-04', '2018-02-05 11:08:02', 'Krandegan', 'Indonesia', 8312931, 'panduariwibisono@gmail.com'),
(5, 'Althaf Fathi Dhya Ulhaq', 'Empty Knowledge Full Idiot', 'img/logo.png', '4', 'Banjarnegara', '2018-02-20', '2018-02-05 11:16:43', 'Parakan Canggah', 'Indonesia', 42312, 'althaf@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`kode_skill`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`kode`,`nick`,`kode_skill`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `kode_skill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `kode` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
