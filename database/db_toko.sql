-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2020 at 09:04 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `notelp` varchar(13) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `jk`, `notelp`, `username`, `password`) VALUES
(2, 'Arini Firdausiyah', 'Perempuan', '081335373470', 'rinrin', '32d871f40492ea15c187ce6bed5cdecc');

-- --------------------------------------------------------

--
-- Table structure for table `info_buka`
--

CREATE TABLE `info_buka` (
  `id` int(11) NOT NULL,
  `hari` varchar(15) NOT NULL,
  `jam_buka` time NOT NULL,
  `jam_tutup` time NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_buka`
--

INSERT INTO `info_buka` (`id`, `hari`, `jam_buka`, `jam_tutup`, `status`) VALUES
(1, 'Senin', '07:00:00', '19:00:00', 'Open'),
(2, 'Selasa', '06:00:00', '18:00:00', 'Open'),
(3, 'Rabu', '06:00:00', '05:00:00', 'Open'),
(4, 'Kamis', '01:00:00', '23:00:00', 'Open'),
(5, 'Jum\'at', '13:00:00', '21:00:00', 'Open'),
(6, 'Sabtu', '01:00:00', '01:00:00', 'Closed'),
(7, 'Minggu', '10:00:00', '18:00:00', 'Closed');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kat` int(11) NOT NULL,
  `nama_kat` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kat`, `nama_kat`) VALUES
(1, 'Makanan'),
(2, 'Minuman'),
(3, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `harga_menu` int(11) NOT NULL,
  `desk_menu` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL DEFAULT 'default.png',
  `id_kat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `harga_menu`, `desk_menu`, `gambar`, `id_kat`) VALUES
(9, 'Americano (ice/hot)', 10000, 'Kopi americano', 'americano.jpg', 2),
(10, 'Bibimbap', 30000, 'Nasi campur saus cabai Korea \'Gochujang\'\r\nBibimbap adalah nasi yang dicampur lauk dan sayur, Gochujang (saus sambal yang difermentasi). ', 'bibimbap.jpg', 1),
(12, 'Kimchi', 5000, 'sayur yang difermentasi dengan bumbu khas korea', 'kimchi.jpg', 1),
(13, 'Cafe Latte (ice/hot)', 15000, 'cafe latte', 'cafe_latte.jpg', 2),
(14, 'Cappuccino (ice/hot)', 12000, 'cappuccino', 'cappucino.jpg', 2),
(15, 'Kimbap', 30000, 'Nasi gulung rumput laut.\r\nNasi + Rumput Laut + Sayuran + Daging Sapi', 'kimbab.jpg', 1),
(16, 'Patbingsu', 25000, 'Es salju kacang merah.\r\nes salju + kacang merah + eskrim + aneka buah', 'patbingsu.jpg', 2),
(17, 'Rabokki', 35000, 'Mie goreng dengan bumbu korea', 'rabokki.jpg', 1),
(18, 'Ramyeon', 20000, 'Mie Korea', 'ramyeon.png', 1),
(19, 'Tea (ice/hot)', 8000, 'Teh khas korea', 'teh.jpg', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `info_buka`
--
ALTER TABLE `info_buka`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hari` (`hari`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `kategori` (`id_kat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `info_buka`
--
ALTER TABLE `info_buka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `kategori` FOREIGN KEY (`id_kat`) REFERENCES `kategori` (`id_kat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
