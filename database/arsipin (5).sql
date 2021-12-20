-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 09:46 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsipin`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_arsip`
--

CREATE TABLE `data_arsip` (
  `id_arsip` int(20) NOT NULL,
  `nama_arsip` varchar(50) NOT NULL,
  `id_jenis` varchar(30) NOT NULL,
  `tgl_upload` date NOT NULL,
  `file_arsip` text NOT NULL,
  `id_pengguna` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_arsip`
--

INSERT INTO `data_arsip` (`id_arsip`, `nama_arsip`, `id_jenis`, `tgl_upload`, `file_arsip`, `id_pengguna`) VALUES
(1, 'Akte Perusahaan CV. Hummasoft ', '1', '2021-11-24', '', 0),
(2, 'MOU Perusahaan CV. Hummasoft T', '2', '2021-11-24', '', 0),
(4, 'Kontrak Kerja Perusahaan', '3', '2021-11-25', 'Kontrak_Kerja_Perusahaan-1637818757.pdf', 0),
(5, 'Akte Perusahaan CV. Sinar Tera', '1', '2021-11-26', '', 0),
(6, 'Akte Perusahaan CV. Hummasoft Technology', '4', '2021-12-03', '', 1),
(7, 'Akte Perusahaan CV', '4', '2021-12-02', 'Akte_Perusahaan_CV-1638429509.pdf', 1),
(12, 'Sebuah Arsip Pimpinan', '5', '2021-12-06', 'Sebuah_Arsip_Pimpinan-1638757807.pdf', 2),
(13, 'testing ini nama arsip', '6', '2021-12-06', 'testing_ini_nama_arsip-1638765683.pdf', 1),
(14, 'Arsip 1', '7', '2021-12-20', 'Arsip_1-1639988450.pdf', 3);

-- --------------------------------------------------------

--
-- Table structure for table `data_divisi`
--

CREATE TABLE `data_divisi` (
  `id_divisi` int(8) NOT NULL,
  `jenis_divisi` varchar(20) NOT NULL,
  `nama_divisi` varchar(30) NOT NULL,
  `email_divisi` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL,
  `foto` text NOT NULL,
  `id_role` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_divisi`
--

INSERT INTO `data_divisi` (`id_divisi`, `jenis_divisi`, `nama_divisi`, `email_divisi`, `username`, `password`, `foto`, `id_role`) VALUES
(3, 'HRD', 'hxjs', 'jhdj', 'emonggg', 'hjd', '0', 0),
(4, 'HRD', 'cd', 'w', 'w', 'r', 'b2dd887b53bfda7b5753350bac02ffd8.png', 0),
(5, 'HRD', 'hs', 'nx', 'liki', 'uy', '26fb29619d5c3e6dd38010df4fe510dc.png', 0),
(7, '4', 'oui', 'iyu', 'tr', 'jhg', '20211116_044036.jpg', 0),
(8, '2', 'jjjj', 'jjj', 'jjj', 'jj', '20211116_044259.jpg', 0),
(9, '2', 'jkhf', 'jhd', 'kjhf', 'jhdf', '20211124_145338.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_pengguna`
--

CREATE TABLE `data_pengguna` (
  `id_user` int(8) NOT NULL,
  `nama_pengguna` varchar(30) NOT NULL,
  `email_pengguna` varchar(50) NOT NULL,
  `id_role` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pengguna`
--

INSERT INTO `data_pengguna` (`id_user`, `nama_pengguna`, `email_pengguna`, `id_role`, `username`, `password`, `foto`) VALUES
(1, 'makhmuda', 'makhmudanurul10@gmail.com', '1', 'admin', 'admin', '20211125_112045.jpg'),
(2, 'kotim', 'rul10@gmail.com', '2', 'pimpinan', 'pimpinan', ''),
(3, 'salma', 's', '3', 'resepsionis', 'resepsio', '20211214_034757.png'),
(10, 'elyas', 'divisi@gmail.com', '6', 'divisi', 'divisi', '20211207_075840.jpg'),
(13, 'ebi', 'ebi@gmail.com', '7', '123', '123', '20211210_055252.png');

-- --------------------------------------------------------

--
-- Table structure for table `disposisi`
--

CREATE TABLE `disposisi` (
  `id_disposisi` int(8) NOT NULL,
  `batas_waktu_dis` date NOT NULL,
  `jenis_divisi` varchar(30) NOT NULL,
  `isi_dis` varchar(300) NOT NULL,
  `catatan_dis` varchar(30) NOT NULL,
  `file_dis` text NOT NULL,
  `id_pengguna` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `disposisi`
--

INSERT INTO `disposisi` (`id_disposisi`, `batas_waktu_dis`, `jenis_divisi`, `isi_dis`, `catatan_dis`, `file_dis`, `id_pengguna`) VALUES
(22, '2021-12-16', '6', 'Segeraa', 'Rapat Pertemuan', 'Surat_Rapat_Pertemuan-1639449260.pdf', 0),
(23, '2021-12-23', '6', 'success', 'test diis', 'smtes-1639988611.pdf', 0),
(25, '2021-12-22', '6', 'ini testing', 'hhh', 'bismillah_tes-1639989333.pdf', 0),
(26, '2021-12-24', '6', 'kkk', 'lll', 'ii-1639989677.pdf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_arsip`
--

CREATE TABLE `jenis_arsip` (
  `id_jenis_arsip` int(8) NOT NULL,
  `jenis_arsip` varchar(30) NOT NULL,
  `id_pengguna` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_arsip`
--

INSERT INTO `jenis_arsip` (`id_jenis_arsip`, `jenis_arsip`, `id_pengguna`) VALUES
(1, 'Akte Perusahaan', 0),
(2, 'MOU', 0),
(3, 'Kontrak Kerja', 0),
(4, 'Akte Perusahaan', 1),
(5, 'Arsip Pimpinan', 2),
(6, 'testing arsip', 1),
(7, 'Arsip Resepsionis', 3);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_divisi`
--

CREATE TABLE `jenis_divisi` (
  `id` int(10) NOT NULL,
  `jenis_divisi` varchar(30) NOT NULL,
  `id_pengguna` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_divisi`
--

INSERT INTO `jenis_divisi` (`id`, `jenis_divisi`, `id_pengguna`) VALUES
(4, 'kk', 1),
(6, 'Humas', 1),
(7, 'Marketing', 0);

-- --------------------------------------------------------

--
-- Table structure for table `master_user`
--

CREATE TABLE `master_user` (
  `id_role` varchar(20) NOT NULL,
  `nama_role` varchar(20) NOT NULL,
  `id_pengguna` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_user`
--

INSERT INTO `master_user` (`id_role`, `nama_role`, `id_pengguna`) VALUES
('1', 'admin', 1),
('2', 'pimpinan', 1),
('3', 'resepsionis', 1);

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id_sk` int(11) NOT NULL,
  `no_sk` varchar(8) NOT NULL,
  `tgl_sk` date NOT NULL,
  `tujuan_sk` varchar(30) NOT NULL,
  `perihal_sk` varchar(20) NOT NULL,
  `file_sk` text NOT NULL,
  `tgl_disetujui_sk` date NOT NULL,
  `status` enum('teruskan','pending') NOT NULL,
  `oleh_pimpinan` enum('disetujui','diabaikan','pending') NOT NULL,
  `id_pengguna` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat_keluar`
--

INSERT INTO `surat_keluar` (`id_sk`, `no_sk`, `tgl_sk`, `tujuan_sk`, `perihal_sk`, `file_sk`, `tgl_disetujui_sk`, `status`, `oleh_pimpinan`, `id_pengguna`) VALUES
(1, '001', '2021-12-14', 'Polinemaaa', 'Magang', 'Magang-1639449468.pdf', '2021-12-14', 'teruskan', 'disetujui', 1),
(2, '99', '2021-12-20', 'Shopee', 'kkk', 'kkk-1639989839.pdf', '2021-12-20', 'teruskan', 'disetujui', 1);

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_sm` int(11) NOT NULL,
  `no_sm` varchar(8) NOT NULL,
  `tgl_sm` date NOT NULL,
  `tgl_terima_sm` date NOT NULL,
  `asal_sm` varchar(30) NOT NULL,
  `perihal_sm` varchar(30) NOT NULL,
  `file_sm` text NOT NULL,
  `tgl_dilaksanakan_sm` date NOT NULL,
  `tgl_disetujui_sm` date NOT NULL,
  `status_divisi` enum('dilaksanakan','diabaikan','pending') NOT NULL,
  `status_pimpinan` enum('disetujui','diabaikan','pending') NOT NULL,
  `status_disposisi` enum('didisposisi','belum didisposisi') NOT NULL,
  `id_pengguna` int(5) NOT NULL,
  `divisi_tujuan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`id_sm`, `no_sm`, `tgl_sm`, `tgl_terima_sm`, `asal_sm`, `perihal_sm`, `file_sm`, `tgl_dilaksanakan_sm`, `tgl_disetujui_sm`, `status_divisi`, `status_pimpinan`, `status_disposisi`, `id_pengguna`, `divisi_tujuan`) VALUES
(1, '001', '2021-12-14', '2021-12-14', 'Poliyeay', 'Surat Rapat Pertemuan', 'Surat_Rapat_Pertemuan-1639449260.pdf', '2021-12-14', '2021-12-14', 'dilaksanakan', 'disetujui', 'didisposisi', 3, 6),
(2, '002', '2021-12-20', '2021-12-20', 'tess', 'smtes', 'smtes-1639988611.pdf', '0000-00-00', '0000-00-00', 'pending', 'pending', 'didisposisi', 3, 7),
(3, '003', '2021-12-21', '2021-12-21', 'bismillah', 'bismillah tes', 'bismillah_tes-1639989333.pdf', '2021-12-20', '2021-12-20', 'dilaksanakan', 'disetujui', 'didisposisi', 3, 6),
(4, '5', '2021-12-20', '2021-12-20', 'Politeknik ', 'ii', 'ii-1639989677.pdf', '2021-12-20', '2021-12-20', 'dilaksanakan', 'disetujui', 'didisposisi', 3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notif`
--

CREATE TABLE `tbl_notif` (
  `id` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `pengirim` varchar(200) NOT NULL,
  `tgl_notif` date NOT NULL,
  `is_read` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_notif`
--

INSERT INTO `tbl_notif` (`id`, `judul`, `pengirim`, `tgl_notif`, `is_read`) VALUES
(49, 'Disposisi', 'Divisi Humas', '2021-12-16', 0),
(50, 'Surat masuk', 'tess', '2021-12-20', 0),
(51, 'Disposisi', 'Divisi Humas', '2021-12-23', 0),
(52, 'Disposisi', 'Divisi Marketing', '2021-12-23', 0),
(53, 'Surat masuk', 'bismillah', '2021-12-21', 0),
(54, 'Disposisi', 'Divisi Humas', '2021-12-22', 0),
(55, 'Surat masuk', 'Politeknik ', '2021-12-20', 0),
(56, 'Disposisi', 'Divisi Humas', '2021-12-24', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_arsip`
--
ALTER TABLE `data_arsip`
  ADD PRIMARY KEY (`id_arsip`);

--
-- Indexes for table `data_divisi`
--
ALTER TABLE `data_divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `data_pengguna`
--
ALTER TABLE `data_pengguna`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `nama_role` (`id_role`);

--
-- Indexes for table `disposisi`
--
ALTER TABLE `disposisi`
  ADD PRIMARY KEY (`id_disposisi`);

--
-- Indexes for table `jenis_arsip`
--
ALTER TABLE `jenis_arsip`
  ADD PRIMARY KEY (`id_jenis_arsip`);

--
-- Indexes for table `jenis_divisi`
--
ALTER TABLE `jenis_divisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_user`
--
ALTER TABLE `master_user`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id_sk`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_sm`);

--
-- Indexes for table `tbl_notif`
--
ALTER TABLE `tbl_notif`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_arsip`
--
ALTER TABLE `data_arsip`
  MODIFY `id_arsip` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `data_divisi`
--
ALTER TABLE `data_divisi`
  MODIFY `id_divisi` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `data_pengguna`
--
ALTER TABLE `data_pengguna`
  MODIFY `id_user` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `disposisi`
--
ALTER TABLE `disposisi`
  MODIFY `id_disposisi` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `jenis_arsip`
--
ALTER TABLE `jenis_arsip`
  MODIFY `id_jenis_arsip` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jenis_divisi`
--
ALTER TABLE `jenis_divisi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id_sk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_sm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_notif`
--
ALTER TABLE `tbl_notif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
