-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2017 at 02:52 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siakad`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_user`, `username`, `password`) VALUES
(1, 'pengguna', '8b097b8a86f9d6a991357d40d3d58634');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna_grup`
--

CREATE TABLE `pengguna_grup` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `kode_barang` int(5) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `merk` varchar(200) NOT NULL,
  `seri` varchar(200) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `tahun` int(4) NOT NULL,
  `asal_barang` varchar(200) NOT NULL,
  `keadaan` enum('BAIK','KURANG BAIK','RUSAK','HILANG') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`kode_barang`, `nama_barang`, `merk`, `seri`, `jumlah`, `tahun`, `asal_barang`, `keadaan`) VALUES
(1, 'Lemari Besi 2 Pintu', 'VIP', '', 11, 2013, 'Pengadaan', 'BAIK'),
(3, 'asdasd', 'asdwqe', 'asdasd', 0, 0, 'asdasdas', 'BAIK');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang_admin`
--

CREATE TABLE `tbl_barang_admin` (
  `kode_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `seri` varchar(100) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `tahun` int(4) NOT NULL,
  `asal_barang` varchar(100) NOT NULL,
  `keadaan` enum('BAIK','KURANG BAIK','RUSAK','HILANG') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang_admin`
--

INSERT INTO `tbl_barang_admin` (`kode_barang`, `nama_barang`, `merk`, `seri`, `jumlah`, `tahun`, `asal_barang`, `keadaan`) VALUES
(1, 'jsg', 'sfjk', 'skd1', 112, 1996, 'Pengadaan', 'BAIK');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang_dua`
--

CREATE TABLE `tbl_barang_dua` (
  `kode_barang` int(5) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `merk` varchar(200) NOT NULL,
  `seri` varchar(200) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `tahun` int(4) NOT NULL,
  `asal_barang` varchar(200) NOT NULL,
  `keadaan` enum('BAIK','KURANG BAIK','RUSAK','HILANG') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang_dua`
--

INSERT INTO `tbl_barang_dua` (`kode_barang`, `nama_barang`, `merk`, `seri`, `jumlah`, `tahun`, `asal_barang`, `keadaan`) VALUES
(1, 'jhdsjsjsjjdsjdjdjddj', 'jdhs', 'hjshd', 4, 2016, 'dsjhfk', 'BAIK'),
(2, 'jfsj', 'jhfs', 'fdfh', 11, 2016, 'TA', 'RUSAK');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang_kom`
--

CREATE TABLE `tbl_barang_kom` (
  `kode_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `seri` varchar(100) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `tahun` int(4) NOT NULL,
  `asal_barang` varchar(100) NOT NULL,
  `keadaan` enum('BAIK','KURANG BAIK','RUSAK','HILANG') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang_kom`
--

INSERT INTO `tbl_barang_kom` (`kode_barang`, `nama_barang`, `merk`, `seri`, `jumlah`, `tahun`, `asal_barang`, `keadaan`) VALUES
(2, 'sjf', 'jshdf', 'kdsfhsk', 292, 2012, 'p', 'BAIK');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang_kom_dua`
--

CREATE TABLE `tbl_barang_kom_dua` (
  `kode_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `seri` varchar(100) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `tahun` int(4) NOT NULL,
  `asal_barang` varchar(100) NOT NULL,
  `keadaan` enum('BAIK','KURANG BAIK','RUSAK','HILANG') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang_kom_dua`
--

INSERT INTO `tbl_barang_kom_dua` (`kode_barang`, `nama_barang`, `merk`, `seri`, `jumlah`, `tahun`, `asal_barang`, `keadaan`) VALUES
(2, 'jdhf', 'kjhsg', 'kjhfs', 96, 1996, 'Pengadaan', 'BAIK');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang_tiga`
--

CREATE TABLE `tbl_barang_tiga` (
  `kode_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `seri` varchar(100) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `tahun` int(4) NOT NULL,
  `asal_barang` varchar(100) NOT NULL,
  `keadaan` enum('BAIK','KURANG BAIK','RUSAK','HILANG') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang_tiga`
--

INSERT INTO `tbl_barang_tiga` (`kode_barang`, `nama_barang`, `merk`, `seri`, `jumlah`, `tahun`, `asal_barang`, `keadaan`) VALUES
(2, 'Lemari Besi 2 Pintu', 'nokia', 'x99', 8, 1998, 'TA', 'BAIK');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jurusan`
--

CREATE TABLE `tbl_jurusan` (
  `kode_jurusan` int(5) NOT NULL,
  `jurusan` varchar(200) NOT NULL,
  `singkatan` varchar(200) NOT NULL,
  `nik` int(5) NOT NULL,
  `akreditasi` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jurusan`
--

INSERT INTO `tbl_jurusan` (`kode_jurusan`, `jurusan`, `singkatan`, `nik`, `akreditasi`) VALUES
(3112, 'Teknik Mesin', 'TM', 9981001, 'A'),
(3113, 'Salon', 'SL', 8777, 'B');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pinjam`
--

CREATE TABLE `tbl_pinjam` (
  `id_pinjam` varchar(7) NOT NULL,
  `kode_barang` varchar(10) DEFAULT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `waktu_pinjam` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nama` varchar(50) NOT NULL,
  `stok` int(100) NOT NULL,
  `jumlah_pinjam` int(100) NOT NULL,
  `sisa` int(100) NOT NULL,
  `status` enum('Sedang Dipinjam','Sudah Dikembalikan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stok`
--

CREATE TABLE `tbl_stok` (
  `id_stok` int(10) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `stok` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_stok`
--

INSERT INTO `tbl_stok` (`id_stok`, `nama_barang`, `stok`) VALUES
(1, 'tajud', '100');

-- --------------------------------------------------------

--
-- Table structure for table `teknisi`
--

CREATE TABLE `teknisi` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teknisi`
--

INSERT INTO `teknisi` (`id_user`, `username`, `password`) VALUES
(1, 'teknisi', 'e21394aaeee10f917f581054d24b031f');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `id_pengguna_grup` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_pengguna_grup`, `email`, `password`, `nama`, `foto`) VALUES
(1, 0, 'admin@admin.com', '7488e331b8b64e5794da3fa4eb10ad5d', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `pengguna_grup`
--
ALTER TABLE `pengguna_grup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `tbl_barang_admin`
--
ALTER TABLE `tbl_barang_admin`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `tbl_barang_dua`
--
ALTER TABLE `tbl_barang_dua`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `tbl_barang_kom`
--
ALTER TABLE `tbl_barang_kom`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `tbl_barang_kom_dua`
--
ALTER TABLE `tbl_barang_kom_dua`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `tbl_barang_tiga`
--
ALTER TABLE `tbl_barang_tiga`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD PRIMARY KEY (`kode_jurusan`);

--
-- Indexes for table `tbl_pinjam`
--
ALTER TABLE `tbl_pinjam`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `tbl_stok`
--
ALTER TABLE `tbl_stok`
  ADD PRIMARY KEY (`id_stok`);

--
-- Indexes for table `teknisi`
--
ALTER TABLE `teknisi`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pengguna_grup`
--
ALTER TABLE `pengguna_grup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `kode_barang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_barang_admin`
--
ALTER TABLE `tbl_barang_admin`
  MODIFY `kode_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_barang_dua`
--
ALTER TABLE `tbl_barang_dua`
  MODIFY `kode_barang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_barang_kom`
--
ALTER TABLE `tbl_barang_kom`
  MODIFY `kode_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_barang_kom_dua`
--
ALTER TABLE `tbl_barang_kom_dua`
  MODIFY `kode_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_barang_tiga`
--
ALTER TABLE `tbl_barang_tiga`
  MODIFY `kode_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  MODIFY `kode_jurusan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3114;
--
-- AUTO_INCREMENT for table `teknisi`
--
ALTER TABLE `teknisi`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
