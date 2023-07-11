-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2023 at 06:56 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_pekerja`
--

CREATE TABLE `info_pekerja` (
  `id` int(3) NOT NULL,
  `nama_pekerja` varchar(50) NOT NULL,
  `no_kp` varchar(12) NOT NULL,
  `jantina` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info_pekerja`
--

INSERT INTO `info_pekerja` (`id`, `nama_pekerja`, `no_kp`, `jantina`, `no_hp`) VALUES
(1, 'ANIQ NAUFAL BIN MUHAMMAD AZRAEI', '020828160169', 'Lelaki', '01162190345'),
(2, 'MUHAMMAD ANAS BIN SUHAIMI ', '030531100199', 'Lelaki', '0169520918'),
(3, 'ISHUARIYAA A/P PONAN', '030610080616', 'Perempuan', '01133688927'),
(4, 'ANIQ NAUFAL SALEHUDDIN ', '031021101671', 'Lelaki', '801117141009'),
(5, 'ANIS ZAHIRA BINTI AZRAF ', '080820106422', 'Perempuan', '0192606424'),
(6, 'MUHAMMAD ADAM BIN NAZRI ', '850902140975', 'Lelaki', '0133138765');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nama` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nama`, `pass`) VALUES
('ishu', 'ishu123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_pekerja`
--
ALTER TABLE `info_pekerja`
  ADD PRIMARY KEY (`no_kp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
