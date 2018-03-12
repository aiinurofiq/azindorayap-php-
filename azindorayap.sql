-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2018 at 05:21 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `azindorayap`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_user` int(1) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_user`, `username`, `password`) VALUES
(1, 'super_admin', 'super_admin');

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `id_harga` int(3) NOT NULL,
  `luas` char(7) NOT NULL,
  `hrg_3thn` char(11) NOT NULL,
  `hrg_5thn` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`id_harga`, `luas`, `hrg_3thn`, `hrg_5thn`) VALUES
(1, '20 m2', '700.000', '1.000.000'),
(4, '50 m2', '1.750.000', '2.500.000'),
(5, '100 m2', '3.500.000', '5.000.000'),
(6, '200 m2', '7.000.000', '10.000.000');

-- --------------------------------------------------------

--
-- Table structure for table `harga_pra`
--

CREATE TABLE `harga_pra` (
  `id_harga_pra` tinyint(2) NOT NULL,
  `luas_pra` char(6) NOT NULL,
  `harga_pra` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harga_pra`
--

INSERT INTO `harga_pra` (`id_harga_pra`, `luas_pra`, `harga_pra`) VALUES
(3, '20 m2', '700.000'),
(4, '50 m2', '3.250.000'),
(5, '100 m2', '6.500.000'),
(6, '200 m2', '13.000.000'),
(7, '1000m2', '60.000.000');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `isi_laporan` text NOT NULL,
  `username_member` char(30) NOT NULL,
  `status` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `tanggal`, `isi_laporan`, `username_member`, `status`) VALUES
(44, '2017-11-27', '1. Telah dilakukan treatment Tremite Control dengan metode Inject dan Spray di area Gudang Dinas Kesehatan Probolinggo (21/11/2017)<br />\r\n<br />\r\n2. Spray di sisi tepi gudang dengan chemical mengandung imidakloropit dengan dosis 1:25<br />\r\n<br />\r\n3. Telah dilakukan penutupan lubang dengan semen putih.', 'admin', 'lama');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `nama_member` char(100) NOT NULL,
  `username_member` char(30) NOT NULL,
  `password_member` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`nama_member`, `username_member`, `password_member`) VALUES
('Dinas Kesehatan Probolinggo', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `hubungi` char(10) NOT NULL,
  `status` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `email`, `tanggal`, `nohp`, `hubungi`, `status`) VALUES
(40, 'Rofiq', 'azindopest@gmail.com', '2017-11-11', '08563184061', 'telepon', 'lama');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id_post` tinyint(5) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` char(80) NOT NULL,
  `image` char(100) NOT NULL,
  `isi_post` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id_post`, `tanggal`, `judul`, `image`, `isi_post`) VALUES
(6, '2017-11-24', 'Anti Rayap PT. Sumber Setia Abadi', '02032018101337a.jpg', 'Pengerjaan treatment Termite Control (anti rayap) di PT. Sumber Setia Abadi, Surabaya.<br />\r\nMerupakan gudang penyimpanan furnitur yang berbahan kayu olahan.<br />\r\nUntuk menghindari serangan rayap diperlukan injeksi ke beberapa titik, agar rayap tanah tidak sampai naik ke permukaan lantai yang kembali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id_harga`);

--
-- Indexes for table `harga_pra`
--
ALTER TABLE `harga_pra`
  ADD PRIMARY KEY (`id_harga_pra`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`),
  ADD KEY `username_member` (`username_member`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`username_member`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_user` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
  MODIFY `id_harga` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `harga_pra`
--
ALTER TABLE `harga_pra`
  MODIFY `id_harga_pra` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` tinyint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `relasi_member` FOREIGN KEY (`username_member`) REFERENCES `member` (`username_member`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
