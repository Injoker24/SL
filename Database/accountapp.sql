-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 03:30 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accountapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(45) NOT NULL,
  `namaDepan` varchar(45) NOT NULL,
  `namaTengah` varchar(45) NOT NULL,
  `namaBelakang` varchar(45) NOT NULL,
  `tempatLahir` varchar(45) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `nik` char(16) NOT NULL,
  `wargaNegara` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `noHP` varchar(45) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kodePos` char(5) NOT NULL,
  `fotoProfil` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `namaDepan`, `namaTengah`, `namaBelakang`, `tempatLahir`, `tanggalLahir`, `nik`, `wargaNegara`, `email`, `noHP`, `alamat`, `kodePos`, `fotoProfil`) VALUES
('1212', '1212', 'Michael', 'Christian', 'Lee', 'Jakarta', '2002-02-11', '3171016001770003', 'Indonesia', 'mcl2411@gmail.com', '02123121324', 'Jl. Hadiah 5\r\n-', '10152', 'E8AnkNmVcAMu8TH.jpg'),
('12123', '1212', 'Lisa', 'Mega', 'Kusumo', 'Indonesia', '2002-04-16', '3171016001770001', 'Indonesia', 'lisamega@gmail.com', '089999999999', 'Jl. Makian No. 15\r\n-', '10150', 'FreshKit-01.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
