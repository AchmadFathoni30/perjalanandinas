-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2018 at 03:25 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sppd`
--

-- --------------------------------------------------------

--
-- Table structure for table `dasar`
--

CREATE TABLE `dasar` (
  `kd_dasar` int(4) NOT NULL,
  `nama_dasar` varchar(50) NOT NULL,
  `tgl_dasar` date NOT NULL,
  `no_dasar` varchar(30) NOT NULL,
  `peruntukan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dasar`
--

INSERT INTO `dasar` (`kd_dasar`, `nama_dasar`, `tgl_dasar`, `no_dasar`, `peruntukan`) VALUES
(2, 'Surat Perintah Sekretaris Daerah Kota', '2018-05-03', '893/1758-BKPSDM/2018', 'untuk kepentingan Dinas');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `kd_jabatan` int(4) NOT NULL,
  `nama_jabatan` varchar(40) NOT NULL,
  `uang_harian` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`kd_jabatan`, `nama_jabatan`, `uang_harian`) VALUES
(1, 'Camat', 600000),
(2, 'Sekretaris Camat', 500000),
(3, 'Kelompok Jabatan Fungsional', 400000),
(4, 'Sub Bagian Umum & Kepegawaian', 400000),
(5, 'Sub Bagian Perencanaan & Keuangan', 400000),
(6, 'Seksi Kemasyarakatan', 300000),
(7, 'Seksi Pelayanan Umum', 300000),
(8, 'Seksi Ekonomi Pembangunan', 300000),
(9, 'Seksi Ketertiban & Ketentraman', 300000),
(10, 'Seksi Tata Pemerintahan', 300000);

-- --------------------------------------------------------

--
-- Table structure for table `kwitansi`
--

CREATE TABLE `kwitansi` (
  `kd_kwitansi` int(4) NOT NULL,
  `kd_tujuan` int(4) NOT NULL,
  `no_spt` int(4) NOT NULL,
  `kd_user` int(4) NOT NULL,
  `kd_jabatan` int(4) NOT NULL,
  `kd_tempat` int(4) NOT NULL,
  `tgl_kwitansi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kwitansi`
--

INSERT INTO `kwitansi` (`kd_kwitansi`, `kd_tujuan`, `no_spt`, `kd_user`, `kd_jabatan`, `kd_tempat`, `tgl_kwitansi`) VALUES
(28, 9, 21, 7, 7, 13, '2018-06-27');

-- --------------------------------------------------------

--
-- Table structure for table `spt`
--

CREATE TABLE `spt` (
  `no_spt` int(4) NOT NULL,
  `kd_dasar` int(4) NOT NULL,
  `dalam_rangka` varchar(200) NOT NULL,
  `kd_tujuan` int(4) NOT NULL,
  `kd_tempat` int(4) NOT NULL,
  `lamanya` int(3) NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `kd_user` int(4) NOT NULL,
  `kd_jabatan` int(4) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `status` varchar(30) NOT NULL,
  `tempat_keluar` varchar(20) NOT NULL,
  `hasil_perjalanan` text NOT NULL,
  `tempat_laporan` varchar(30) NOT NULL,
  `tgl_laporan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spt`
--

INSERT INTO `spt` (`no_spt`, `kd_dasar`, `dalam_rangka`, `kd_tujuan`, `kd_tempat`, `lamanya`, `tgl_berangkat`, `tgl_kembali`, `kd_user`, `kd_jabatan`, `tgl_keluar`, `status`, `tempat_keluar`, `hasil_perjalanan`, `tempat_laporan`, `tgl_laporan`) VALUES
(21, 2, 'mengikuti studi banding', 9, 13, 2, '2018-07-01', '2018-07-02', 7, 7, '2018-06-27', 'Telah Dilaksanakan', 'Tangerang', 'sudah mengikuti studi banding', 'Tangerang', '2018-07-03');

-- --------------------------------------------------------

--
-- Table structure for table `tempat`
--

CREATE TABLE `tempat` (
  `kd_tempat` int(4) NOT NULL,
  `nama_tempat` varchar(50) NOT NULL,
  `tarif_tempat` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempat`
--

INSERT INTO `tempat` (`kd_tempat`, `nama_tempat`, `tarif_tempat`) VALUES
(6, 'Yasmin Hotel Karawaci', 500000),
(10, 'Hotel Narita', 350000),
(11, 'Hotel Flamboyan', 450000),
(12, 'Hotel Bali', 500000),
(13, 'Hotel GWR', 488000),
(14, 'Gateway', 470000);

-- --------------------------------------------------------

--
-- Table structure for table `tujuan`
--

CREATE TABLE `tujuan` (
  `kd_tujuan` int(4) NOT NULL,
  `nama_tujuan` varchar(50) NOT NULL,
  `tarif_transport` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tujuan`
--

INSERT INTO `tujuan` (`kd_tujuan`, `nama_tujuan`, `tarif_transport`) VALUES
(6, 'Bali', 3000000),
(7, 'Bandung', 950000),
(8, 'Yogyakarta', 1500000),
(9, 'Serang', 600000),
(10, 'Semarang', 1500000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `kd_user` int(4) NOT NULL,
  `nip` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `role` varchar(8) NOT NULL,
  `golongan` varchar(5) NOT NULL,
  `kd_jabatan` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`kd_user`, `nip`, `username`, `password`, `nama_lengkap`, `role`, `golongan`, `kd_jabatan`) VALUES
(1, 101, 'achmdfathoni', 'admin', 'Achmad Fathoni', 'admin', 'II', 0),
(3, 20120, 'amir', 'pegawai', 'Amir Abdurrahman', 'pegawai', 'III', 5),
(5, 20220, 'milea', 'pegawai', 'Milea Adnan Husen', 'pegawai', 'III', 4),
(6, 20320, 'abdul', 'pegawai', 'Abdul Dilan', 'pegawai', 'III', 3),
(7, 20420, 'bella', 'pegawai', 'Bella Saphira', 'pegawai', 'II', 7),
(8, 20520, 'lia', 'pegawai', 'Lia Amalia', 'pegawai', 'IV', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dasar`
--
ALTER TABLE `dasar`
  ADD PRIMARY KEY (`kd_dasar`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`kd_jabatan`);

--
-- Indexes for table `kwitansi`
--
ALTER TABLE `kwitansi`
  ADD PRIMARY KEY (`kd_kwitansi`);

--
-- Indexes for table `spt`
--
ALTER TABLE `spt`
  ADD PRIMARY KEY (`no_spt`);

--
-- Indexes for table `tempat`
--
ALTER TABLE `tempat`
  ADD PRIMARY KEY (`kd_tempat`);

--
-- Indexes for table `tujuan`
--
ALTER TABLE `tujuan`
  ADD PRIMARY KEY (`kd_tujuan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`kd_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dasar`
--
ALTER TABLE `dasar`
  MODIFY `kd_dasar` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `kd_jabatan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `kwitansi`
--
ALTER TABLE `kwitansi`
  MODIFY `kd_kwitansi` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `spt`
--
ALTER TABLE `spt`
  MODIFY `no_spt` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tempat`
--
ALTER TABLE `tempat`
  MODIFY `kd_tempat` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tujuan`
--
ALTER TABLE `tujuan`
  MODIFY `kd_tujuan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `kd_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
