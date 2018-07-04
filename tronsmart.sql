-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 04, 2018 at 10:24 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tronsmart`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_tipe_barang`
--

CREATE TABLE `m_tipe_barang` (
  `TIPEID` int(11) NOT NULL,
  `TIPE` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_tipe_barang`
--

INSERT INTO `m_tipe_barang` (`TIPEID`, `TIPE`) VALUES
(1, 'Audio'),
(2, 'Power Banks'),
(3, 'Charger'),
(4, 'Cable & Hubs');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `BARANGID` int(11) NOT NULL,
  `NAMA` varchar(100) NOT NULL,
  `SERIAL` varchar(20) NOT NULL,
  `DESKRIPSI` text NOT NULL,
  `TANGGALGARANSI` text NOT NULL,
  `GAMBAR` varchar(100) NOT NULL,
  `JENISID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`BARANGID`, `NAMA`, `SERIAL`, `DESKRIPSI`, `TANGGALGARANSI`, `GAMBAR`, `JENISID`) VALUES
(1, 'PIPO', 'X10NI6070359', 'PIPO X9S Tablet, Mini PC, TV Box 8.9 inch - RAM 4 GB, 64 Gb Storage', '', 'pipo_x9s.jpg', 0),
(3, 'BEELINK', 'S912BKKE30305', 'Beelink GT1 Android TV Box Octa Core Amlogic S912 - 2GB+16GB', '', 'belink_gt1_android.jpg', 0),
(4, 'MINI TV BOX SERIES', '905XAKJH70026', 'Mini M8S II 4K Smart Android TV Box Amlogic S905X ROM OS Marshmallow 6.0 - Ver. 2GB', '', 'mini_m8s.jpg', 0),
(5, 'MEDE8ER', 'M140031KB002420', 'Mede8er med800X3D - 3D FULL ', '', 'mede8er.jpg', 0),
(6, 'AC RYAN', 'M140006K6000267', 'AC Ryan pv73920 Playon HD Mini 3', '', 'ac_ryan_pv73920.jpg', 0),
(7, 'AC RYAN', 'M110395EV0949', 'AC Ryan  pv73500 Playon HD-Essential', '', 'ac_ryan_pv73500.jpg', 0),
(8, 'AC RYAN \r\n', 'M140041M3000077', 'AC RYAN Playon HD 2', '', 'ac_ryan_playon.jpg', 0),
(9, 'AC RYAN ', 'M140041M3000077', 'AC Ryan -pv73901- Playon HD 3', '', 'ac_ryan_pv73901.jpg', 0),
(10, 'TRONSMART', 'Z368BAKF1016816G', 'Tronsmart Orion R68 Meta mini PC\r\n', '', 'tronsmart_orion_r68.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendaftar`
--

CREATE TABLE `tbl_pendaftar` (
  `PENDAFTARID` int(11) NOT NULL,
  `NAMA` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `NOTELP` varchar(20) NOT NULL,
  `ALAMAT` text NOT NULL,
  `TANGGAL` date NOT NULL,
  `BARANGID` int(5) NOT NULL,
  `TIPEID` int(11) NOT NULL,
  `TOKEN` varchar(6) NOT NULL,
  `VERIFIKASI` int(11) NOT NULL,
  `PROGRESSID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pendaftar`
--

INSERT INTO `tbl_pendaftar` (`PENDAFTARID`, `NAMA`, `EMAIL`, `NOTELP`, `ALAMAT`, `TANGGAL`, `BARANGID`, `TIPEID`, `TOKEN`, `VERIFIKASI`, `PROGRESSID`) VALUES
(4, 'Novi', 'novia@gmail.com', '08918292891', 'Jakarta Selatan', '2018-06-01', 3, 3, '000001', 1, 4),
(5, 'Rofik', 'rofik@gmail.com', '012891218', 'Banjarnegara', '2018-06-03', 4, 2, '000002', 1, 4),
(7, 'Hanafiq', 'ss', 's', 's', '2018-07-01', 6, 2, '000003', 1, 4),
(8, '', '', '', '', '2018-07-03', 6, 4, '000004', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_progress`
--

CREATE TABLE `tbl_progress` (
  `PROGRESSID` int(11) NOT NULL,
  `PRESENTASE` int(11) NOT NULL,
  `DESKRIPSI` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_progress`
--

INSERT INTO `tbl_progress` (`PROGRESSID`, `PRESENTASE`, `DESKRIPSI`) VALUES
(1, 0, 'Barang Belum dikirim ke kantor'),
(2, 30, 'Sedang dalam pengemasan'),
(3, 75, 'Sedang dalam pengiriman'),
(4, 100, 'Barang sudah sampai tujuan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `USERID` int(11) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`USERID`, `USERNAME`, `PASSWORD`) VALUES
(1, 'novi', '0cc175b9c0f1b6a831c399e269772661');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_tipe_barang`
--
ALTER TABLE `m_tipe_barang`
  ADD PRIMARY KEY (`TIPEID`);

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`BARANGID`);

--
-- Indexes for table `tbl_pendaftar`
--
ALTER TABLE `tbl_pendaftar`
  ADD PRIMARY KEY (`PENDAFTARID`);

--
-- Indexes for table `tbl_progress`
--
ALTER TABLE `tbl_progress`
  ADD PRIMARY KEY (`PROGRESSID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`USERID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_tipe_barang`
--
ALTER TABLE `m_tipe_barang`
  MODIFY `TIPEID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `BARANGID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_pendaftar`
--
ALTER TABLE `tbl_pendaftar`
  MODIFY `PENDAFTARID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_progress`
--
ALTER TABLE `tbl_progress`
  MODIFY `PROGRESSID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `USERID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
