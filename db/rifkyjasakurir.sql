-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2022 at 01:19 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rifkyjasakurir`
--

-- --------------------------------------------------------

--
-- Table structure for table `datapaket`
--

CREATE TABLE `datapaket` (
  `noresi` varchar(10) NOT NULL,
  `tanggalmasuk` date NOT NULL,
  `jenisbarang` varchar(25) NOT NULL,
  `jenispengiriman` varchar(25) NOT NULL,
  `namapengirim` varchar(50) NOT NULL,
  `teleponpengirim` varchar(13) NOT NULL,
  `namapenerima` varchar(50) NOT NULL,
  `teleponpenerima` varchar(13) NOT NULL,
  `alamatpenerima` varchar(100) NOT NULL,
  `statuspengiriman` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datapaket`
--

INSERT INTO `datapaket` (`noresi`, `tanggalmasuk`, `jenisbarang`, `jenispengiriman`, `namapengirim`, `teleponpengirim`, `namapenerima`, `teleponpenerima`, `alamatpenerima`, `statuspengiriman`) VALUES
('RES1008291', '2022-07-14', 'Dokumen Penting', 'Xpress Sameday', 'PT. AEL', '021928382', 'Rifky Yusuf Mahfuz', '0895333074521', 'Jl. Asem Jaya Kota Bekasi', 'Diterima Di Cabang C29'),
('RES1008292', '2022-07-14', 'Makanan', 'Xpress Sameday', 'PT. Alam Semesta', '0219473822', 'Anisa', '083827361626', 'Tambun', 'Proses Sortir');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
