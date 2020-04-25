-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2020 at 05:09 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covup`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(3) NOT NULL,
  `nama_dokter` varchar(255) NOT NULL,
  `id_level` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `id_level`) VALUES
(1, 'ahmad', 1),
(2, 'ridha', 1),
(3, 'pasha', 1),
(4, 'andra', 1);

-- --------------------------------------------------------

--
-- Table structure for table `karantina`
--

CREATE TABLE `karantina` (
  `id_karantina` int(3) NOT NULL,
  `id_pasien` int(3) NOT NULL,
  `suhu` int(10) NOT NULL,
  `tgl_cek` date NOT NULL,
  `keadaan` varchar(255) NOT NULL,
  `id_dokter` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karantina`
--

INSERT INTO `karantina` (`id_karantina`, `id_pasien`, `suhu`, `tgl_cek`, `keadaan`, `id_dokter`) VALUES
(7, 9, 30, '2020-04-11', 'sangat sehat', 2),
(8, 18, 39, '2020-04-17', 'sakiy', 1),
(11, 8, 56, '2020-04-14', 'meninggoi', 2),
(12, 19, 35, '2020-04-09', 'sehat', 2);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(3) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `level`) VALUES
(1, 'dokter'),
(2, 'pasien');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_level` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`, `id_level`) VALUES
(1, 'dokter1', 'dokter1', 1),
(2, 'pasien1', 'pasien1', 2),
(3, 'pasien2', 'pasien2', 2),
(4, 'dokter2', 'dokter2', 2),
(5, 'asawinka', 'haritsuddin', 2),
(6, 'asawinka', 'asawinka', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(3) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nohp` int(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `id_level` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama`, `nohp`, `email`, `tgl_lahir`, `id_level`) VALUES
(7, 'adi maryudi', 89873738, 'maryudi@gmail.com', '2003-09-23', 2),
(8, 'hakim prasaja', 9828282, 'pras@gmail.com', '2020-04-08', 2),
(9, 'rahmad setiawan', 45677890, 'setia@gmail.com', '2020-04-01', 2),
(10, 'pras kirana', 9019101, 'karina@gmail.com', '2020-04-14', 2),
(11, 'ruben junaedi', 907090090, 'juna@gmail.com', '2020-04-07', 2),
(13, 'huda al hamid', 89989878, 'hud@gmail.com', '2020-04-14', 2),
(15, 'idunisia baki', 99878909, 'idunisia@gmail.com', '2020-04-25', 2),
(16, 'khusnul qotimin', 9989098, 'khot@gmail.com', '2020-04-15', 2),
(17, 'kareem al jabbar', 989808909, 'al@gmail.com', '2020-04-28', 2),
(18, 'faqih ulbaiza', 9989098, 'fakih@gmail.com', '2020-04-09', 2),
(19, 'kothimun abi', 2117291, 'abi@gmail.com', '2020-04-22', 2),
(21, 'asawinka haritsuddin', 2147483647, 'asawinka@gmail.com', '0000-00-00', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD KEY `id_level` (`id_level`);

--
-- Indexes for table `karantina`
--
ALTER TABLE `karantina`
  ADD PRIMARY KEY (`id_karantina`),
  ADD KEY `id_pasien` (`id_pasien`,`id_dokter`),
  ADD KEY `id_dokter` (`id_dokter`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`),
  ADD KEY `id_level` (`id_level`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`),
  ADD KEY `id_level` (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `karantina`
--
ALTER TABLE `karantina`
  MODIFY `id_karantina` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `dokter_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `karantina`
--
ALTER TABLE `karantina`
  ADD CONSTRAINT `karantina_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `karantina_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `pasien_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
