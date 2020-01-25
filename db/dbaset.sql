-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2020 at 06:11 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbaset`
--

-- --------------------------------------------------------

--
-- Table structure for table `aset`
--

CREATE TABLE IF NOT EXISTS `aset` (
`id_aset` int(11) NOT NULL,
  `nama_barang` varchar(100) DEFAULT NULL,
  `tanggal_beli` date DEFAULT NULL,
  `merek` varchar(100) DEFAULT NULL,
  `jumlah` varchar(100) DEFAULT NULL,
  `satuan` varchar(50) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `ket` varchar(100) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `aset`
--

INSERT INTO `aset` (`id_aset`, `nama_barang`, `tanggal_beli`, `merek`, `jumlah`, `satuan`, `status`, `ket`) VALUES
(1, 'Speda Motor', '2020-01-02', 'honda', '2', 'Buah', 'Digunakan', 'Digunakan Pegawai'),
(4, 'laptop', '2020-12-31', 'apple', '3', 'Buah', 'Ada', 'Digunakan Dikantor'),
(6, 'Printer', '2020-01-02', 'Epson', '3', 'Unit', 'Ada', 'Digunakan Dikantor'),
(7, 'komputer', '2020-01-02', 'acer', '10', 'Unit', 'Ada', 'Digunakan di kontor'),
(8, 'Meja', '2020-01-02', '-', '20', 'Unit', 'Ada', 'Digunakan di kantor'),
(9, 'mobil', '2020-01-04', 'avanza', '1', 'Unit', 'Ada', 'Digunakan di kantor');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
`id` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `nm_pengguna` varchar(100) NOT NULL,
  `tgl_digunakan` varchar(100) NOT NULL,
  `tgl_kembali` varchar(100) NOT NULL,
  `lama_guna` int(100) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama_barang`, `nm_pengguna`, `tgl_digunakan`, `tgl_kembali`, `lama_guna`, `ket`) VALUES
(3, 'laptop', 'aa', '2020-01-09', '2020-01-25', 16, '-'),
(4, 'Printer', 'ss', '2020-01-17', '2020-01-20', 3, '-'),
(6, 'Speda Motor', 'qq', '2020-01-04', 'Belum Kembali', 0, '-');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(50) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@user.com', 'admin', 1, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aset`
--
ALTER TABLE `aset`
 ADD PRIMARY KEY (`id_aset`), ADD UNIQUE KEY `nama_barang` (`nama_barang`), ADD UNIQUE KEY `nama_barang_2` (`nama_barang`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aset`
--
ALTER TABLE `aset`
MODIFY `id_aset` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
