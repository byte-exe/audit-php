-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2022 at 10:46 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_audit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
('', 'admin', 'admin'),
('002', 'responden', 'responden');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` varchar(20) NOT NULL,
  `pertanyaan` text NOT NULL,
  `ss` float NOT NULL,
  `s` float NOT NULL,
  `ks` float NOT NULL,
  `ts` float NOT NULL,
  `sts` float NOT NULL,
  `hasil` float NOT NULL,
  `persen` float NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` varchar(20) NOT NULL,
  `pertanyaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `pertanyaan`) VALUES
('ID001', 'apakah ada penurangan proses dalam pelaporannya dianggap sudah tidak sesuai lagi dengan tujuan pada sistem informasi pembelian dan penjualan?'),
('ID002', 'apakah data yang dibutuhkan dalam setiap pengawasan selalu terpenuhi  atau tidak ?\r\n'),
('ID003', 'apakah metode yang digunakan selama ini berhasil?\r\n'),
('ID004', 'apakah sistem informasi pembelian dan penjualan memiliki kerangka kerja untuk pengawasan kinerja TI secara umum?\r\n'),
('ID005', 'berdasarkan pengawasan kinerja TI yang telah dilakukan, pakah kinerja TI yang ada telah berjalan sesuai dengan target secara keseluruhan?\r\n'),
('ID006', 'apakah sistem informasi pembelian dan penjualan sudah sesuai dengan visi misi perusahaan?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
