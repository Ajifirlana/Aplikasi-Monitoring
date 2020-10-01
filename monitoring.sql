-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2020 at 10:22 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `databidang`
--

CREATE TABLE `databidang` (
  `id_komentar` int(11) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `isi_komentar` text DEFAULT NULL,
  `id_berita` tinytext DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `jam` time DEFAULT NULL,
  `tampil` varchar(10) DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `databidang`
--

INSERT INTO `databidang` (`id_komentar`, `nama_lengkap`, `isi_komentar`, `id_berita`, `tgl`, `jam`, `tampil`) VALUES
(6, 'Promosi  kesehatan  (promkes)', '<p>semangat pejuang wabah&nbsp;!!</p>\r\n', '35', '2017-03-29', '08:17:20', 'Public'),
(7, 'Surveylains', '<p>artikelnya bagus, sangat membantu dalam pelayanan informasi.. terima kasih</p>\r\n\r\n<p>dan jangan lupa update informasi terbaru ya</p>\r\n', '31', '2017-03-30', '11:26:01', 'Private'),
(8, 'Kesehatan ibu dan anak', NULL, NULL, NULL, NULL, 'N'),
(22, 'Perkesmas', NULL, NULL, NULL, NULL, 'N'),
(23, 'Kesehatan Lingkungan', NULL, NULL, NULL, NULL, 'N');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_berita` int(11) NOT NULL,
  `capaian` varchar(10000) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `created_at` date NOT NULL,
  `username` varchar(100) NOT NULL,
  `create_by` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_berita`, `capaian`, `kategori`, `keterangan`, `image`, `created_at`, `username`, `create_by`) VALUES
(229, 'Terlaksana', 'Promosi  kesehatan  (promkes)', 'YA', 'Screenshot_2020-02-23_Aplikasi_Penduduk_Desa_Dukuhdalem_-_Ciawigebang.png', '2020-08-01', 'admin', '1'),
(230, 'Pembelian Sepatu Kerja', 'Promosi  kesehatan  (promkes)', 'Pembelian Sepatu Kerja', '104219177_147235593552058_2160942829053814162_n.jpg', '2020-08-01', 'admin', '1'),
(231, 'Tugas Baru', 'Promosi  kesehatan  (promkes)', 'Tugas Baru', 'Untitled.png', '2020-08-04', 'admin', '1');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_user`
--

CREATE TABLE `kegiatan_user` (
  `id_berita` int(11) NOT NULL,
  `capaian` varchar(10000) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `created_at` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `create_by` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan_user`
--

INSERT INTO `kegiatan_user` (`id_berita`, `capaian`, `kategori`, `keterangan`, `image`, `created_at`, `username`, `create_by`) VALUES
(196, 'Terlaksana', 'Promosi  kesehatan  (promkes)', 'Pembelian Barang Sepatu Terlaksana', '103960483_147235563552061_3584042536384082644_n.jpg', '2020-08-02', 'http://caramengatasimasalahmu.blogspot.com/', '25'),
(197, 'Terlaksana', 'Promosi  kesehatan  (promkes)', 'Pembelian Barang', 'Untitled1.png', '2020-08-02', 'http://caramengatasimasalahmu.blogspot.com/', '25'),
(199, '', 'Promosi  kesehatan  (promkes)', 'Pembelian Barang', '103664485_147235550218729_8204074848246438512_n.jpg', '2020-08-04', 'http://caramengatasimasalahmu.blogspot.com/', '25'),
(193, 'Terlaksana', 'Promosi  kesehatan  (promkes)', 'Melakukan Sosialisasi', 'Screenshot_2020-03-21_Rumah_Zakat.png', '2020-08-01', 'http://caramengatasimasalahmu.blogspot.com/', '25'),
(192, 'Tugas Kesehatan Lingkungan Hari ini', 'Promosi  kesehatan  (promkes)', 'Pembelian Barang', 'Screenshot_2020-03-21_Tb_Sumber_Rejeki_-_Login.jpg', '2020-08-08', 'http://caramengatasimasalahmu.blogspot.com/', '25');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`, `kategori`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', ''),
(18, 'arif lukman', '698d51a19d8a121ce581499d7b701668', 'User', 'Promosi  kesehatan  (promkes)'),
(24, 'Handoko', '698d51a19d8a121ce581499d7b701668', 'User', 'Promosi  kesehatan  (promkes)'),
(25, 'http://caramengatasimasalahmu.blogspot.com/', '698d51a19d8a121ce581499d7b701668', 'User', 'Promosi  kesehatan  (promkes)'),
(29, 'Yulianti', '698d51a19d8a121ce581499d7b701668', 'User', 'Kesehatan Lingkungan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `databidang`
--
ALTER TABLE `databidang`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `kegiatan_user`
--
ALTER TABLE `kegiatan_user`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `databidang`
--
ALTER TABLE `databidang`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=236;

--
-- AUTO_INCREMENT for table `kegiatan_user`
--
ALTER TABLE `kegiatan_user`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
