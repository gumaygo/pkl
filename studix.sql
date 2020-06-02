-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2020 at 10:29 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studix`
--

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `name_file` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `date`, `name_file`) VALUES
(1, '2020-04-28', '202004281588040310Keluhan_mahasiswa_dan_Pernyatan_sikap_Bem_KBM_Polinela.pdf'),
(2, '2020-04-28', '202004281588065085Keluhan_mahasiswa_dan_Pernyatan_sikap_Bem_KBM_Polinela.pdf'),
(3, '2020-05-03', ''),
(4, '2020-05-21', '202005211590042270Edaran_Kuliah_Daring_1_April.pdf'),
(5, '2020-05-21', '202005211590042489Keluhan_mahasiswa_dan_Pernyatan_sikap_Bem_KBM_Polinela.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `npm` varchar(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `Semester` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`npm`, `nama`, `Semester`, `prodi`, `jurusan`, `alamat`) VALUES
('17753042', 'GumayGo', '6', 'Manajemen Informatika', 'Ekonomi dan Bisnis', 'wwkkwkwwkwkwkwwkkww');

-- --------------------------------------------------------

--
-- Table structure for table `permintaan_surat`
--

CREATE TABLE `permintaan_surat` (
  `id` int(2) NOT NULL,
  `nama_permintaan` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permintaan_surat`
--

INSERT INTO `permintaan_surat` (`id`, `nama_permintaan`) VALUES
(1, 'Surat Keterangan Masih Kuliah'),
(2, 'Cuti');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(3) NOT NULL,
  `npm` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `id_permintaan` varchar(25) NOT NULL,
  `nama_orangtua` varchar(30) NOT NULL,
  `nip_orangtua` varchar(30) NOT NULL,
  `pekerjaan_orangtua` varchar(30) NOT NULL,
  `pangkat_orangtua` varchar(30) NOT NULL,
  `instansi_orangtua` varchar(30) NOT NULL,
  `alamat_orangtua` varchar(30) NOT NULL,
  `foto_ukt` varchar(100) NOT NULL,
  `foto_daftarulang` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `surat` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `npm`, `status`, `id_permintaan`, `nama_orangtua`, `nip_orangtua`, `pekerjaan_orangtua`, `pangkat_orangtua`, `instansi_orangtua`, `alamat_orangtua`, `foto_ukt`, `foto_daftarulang`, `tanggal`, `surat`) VALUES
(1, '17753042', '2', '1', 'Rohela Wati', '1006', 'Dosen', 'Dosen Tetap', 'Polinela', 'yo wasap gais', '600b3171588505495BUKTI 1.png', '985ceed1588505495BUKTI 2.png', '2020-05-04', '202005101589117229xZ0poqALFV.pdf'),
(2, '17753042', '2', '1', 'AS', '1775345', 'guru', 'guru', 'polinela', 'oke', '5be77fc1588565988BUKTI 1.png', '15036971588565988BUKTI 2.png', '2020-05-04', '202005101589117241SEGgF4yhjK.pdf'),
(11, '17753042', '3', '1', 'test', 'test', 'test', 'test', 'test', 'fsdferfs', 'e670de915900405501.PNG', '85e4c13159004055010.PNG', '2020-05-21', NULL),
(12, '17753042', '2', '1', 'rohela wati', '1000000', 'guru', 'guru tetap', 'sdn 2 negri katon', '2277 Locust View Drive', '3ca703c15900413581.PNG', '6c1340115900413582.PNG', '2020-05-21', '2020052115900416222r0fUnUqRY.pdf'),
(13, '17753042', '2', '2', 'asdi fitri', '1000000', 'bumn', 'direktur', 'pertamina', 'v', 'e157e3115900418903.PNG', '50fe45715900418904.PNG', '2020-05-21', '2020052115900421850ltLbA5OaJ.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `request2`
--

CREATE TABLE `request2` (
  `id` int(3) NOT NULL,
  `npm` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `id_permintaan` varchar(25) NOT NULL,
  `nama_orangtua` varchar(30) NOT NULL,
  `nip_orangtua` varchar(30) NOT NULL,
  `pekerjaan_orangtua` varchar(30) NOT NULL,
  `pangkat_orangtua` varchar(30) NOT NULL,
  `instansi_orangtua` varchar(30) NOT NULL,
  `alamat_orangtua` varchar(30) NOT NULL,
  `foto_ukt` varchar(100) NOT NULL,
  `foto_daftarulang` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `surat` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request2`
--

INSERT INTO `request2` (`id`, `npm`, `status`, `id_permintaan`, `nama_orangtua`, `nip_orangtua`, `pekerjaan_orangtua`, `pangkat_orangtua`, `instansi_orangtua`, `alamat_orangtua`, `foto_ukt`, `foto_daftarulang`, `tanggal`, `surat`) VALUES
(1, '17753042', '2', '1', 'Rohela Wati', '1006', 'Dosen', 'Dosen Tetap', 'Polinela', 'yo wasap gais', '600b3171588505495BUKTI 1.png', '985ceed1588505495BUKTI 2.png', '2020-05-04', '202005101589117229xZ0poqALFV.pdf'),
(2, '17753042', '2', '1', 'AS', '1775345', 'guru', 'guru', 'polinela', 'oke', '5be77fc1588565988BUKTI 1.png', '15036971588565988BUKTI 2.png', '2020-05-04', '202005101589117241SEGgF4yhjK.pdf'),
(3, '17753042', '2', '1', 'naruto', '19999999', 'DOSEN', 'DOSEN TETAP', 'Darmajaya', '2277 Locust View Drive', 'f7873e11589117081ah.PNG', 'f680e8f1589117081canva.PNG', '2020-05-04', '202005101589117251H2Pdcw7v4f.pdf'),
(4, '17753042', '0', '2', 'a', 'a', 'a', 'a', 'a', 'a', '8fcc6911589117363BUKTI 1.png', 'ed488d71589117363BUKTI 2.png', '2020-05-10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `last_login` varchar(25) NOT NULL,
  `token` varchar(100) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `email`, `last_login`, `token`, `level`) VALUES
(2, 'gumaygo', '33fcf766cfff7b8266404efeaf9158c5', 'gumaygo', 'gumaygo@polinela.ac.id', '10-10-1000', 'wfy2ARo7N4YWyM0yhxWAnSnh2zwfQACIdgmRf49L', '13'),
(3, '17753042', '33fcf766cfff7b8266404efeaf9158c5', 'mahasiswa', 'mahasiswa@polinela.ac.id', '10-10-1000', 'wfy2ARo7N4YWyM0yhxWAnSnh2zwfQACIdgmRf49L', '11'),
(4, 'baakpsi', '33fcf766cfff7b8266404efeaf9158c5', 'baakpsi', 'baakpsi@polinela.ac.id', '10-10-1000', 'wfy2ARo7N4YWyM0yhxWAnSnh2zwfQACIdgmRf49L', '10'),
(5, 'pudir1', '33fcf766cfff7b8266404efeaf9158c5', 'pudir1', 'pudir1@polinela.ac.id', '10-10-1000', 'wfy2ARo7N4YWyM0yhxWAnSnh2zwfQACIdgmRf49L', '2'),
(6, 'root', '33fcf766cfff7b8266404efeaf9158c5', 'root', 'root@polinela.ac.id', '10-10-1000', 'wfy2ARo7N4YWyM0yhxWAnSnh2zwfQACIdgmRf49L', '0'),
(7, 'direktur', '33fcf766cfff7b8266404efeaf9158c5', 'direktur', 'direktur@polinela.ac.id', '10-10-1000', 'ahha', '1'),
(8, 'kajur', '33fcf766cfff7b8266404efeaf9158c5', 'kajur', 'kajur@polinela.ac.id', '10-10-1000', 'sfgrg', '3'),
(9, 'kprodi', '33fcf766cfff7b8266404efeaf9158c5', 'kprodi', 'kprodi@polinela.ac.id', '10-10-1000', 'asfdfdf', '4'),
(10, 'dosenwali', '33fcf766cfff7b8266404efeaf9158c5', 'dosenwali', 'dosenwali@polinela.ac.id', '10-10-1000', 'dosenwali', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permintaan_surat`
--
ALTER TABLE `permintaan_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request2`
--
ALTER TABLE `request2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permintaan_surat`
--
ALTER TABLE `permintaan_surat`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `request2`
--
ALTER TABLE `request2`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
