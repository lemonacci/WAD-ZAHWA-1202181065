-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2020 at 12:10 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_modul3_zahwa`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `mulai` time NOT NULL,
  `berakhir` time NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `benefit` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `name`, `deskripsi`, `gambar`, `kategori`, `tanggal`, `mulai`, `berakhir`, `tempat`, `harga`, `benefit`) VALUES
(1, 'Open Mind ESD Laboratory', 'open mind dari esd laboratory. #FSE', 'banner.jpg', 'Online', '2020-11-13', '19:00:00', '21:00:00', 'Zoom Meeting', 10000, 'Sertifikat'),
(2, 'Open Mind EDE Laboratory', 'open mind dari ede laboratory. #FSE', 'j-event.png', 'Online', '2020-11-24', '19:00:00', '20:30:00', 'Zoom Meeting', 10000, 'Souvenir'),
(3, 'Prodase Charity', 'Sedeqah Onlen', '1.png', 'Online', '2020-11-25', '19:00:00', '21:00:00', 'Zoom Meeting', 0, 'Souvenir\r\n'),
(15, 'KomiTalks!', 'komit komit komit', 'kt-2.png', 'Online', '2020-11-11', '17:00:00', '21:00:00', 'mnsd', 15000, 'Snacks,Souvenir'),
(16, 'Grow Enfa', 'Susu enfagrow', 'kt-2.png', 'Online', '2020-11-05', '17:00:00', '20:00:00', 'Google Meet', 5000, 'Snacks,Sertifikat,Souvenir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
