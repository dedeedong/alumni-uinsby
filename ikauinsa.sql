-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2018 at 07:14 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ikauinsa`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `NIM` varchar(12) NOT NULL,
  `ID_DATALAMAR` varchar(7) DEFAULT NULL,
  `NAMA` varchar(200) NOT NULL,
  `GENDER` varchar(10) DEFAULT NULL,
  `FAKULTAS` varchar(50) DEFAULT NULL,
  `PRODI` varchar(30) DEFAULT NULL,
  `AGAMA` varchar(10) DEFAULT NULL,
  `TEMPAT_LAHIR` varchar(30) DEFAULT NULL,
  `TANGGAL_LAHIR` date DEFAULT NULL,
  `ALAMAT` varchar(300) DEFAULT NULL,
  `KODEPOS` char(7) DEFAULT NULL,
  `KOTA` varchar(30) DEFAULT NULL,
  `ALAMAT_ASAL` varchar(300) DEFAULT NULL,
  `KOTA_ASAL` varchar(30) DEFAULT NULL,
  `WARGANEG` varchar(20) DEFAULT NULL,
  `NO_HP` char(13) DEFAULT NULL,
  `NO_TLP` char(13) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `SOSMED` char(10) DEFAULT NULL,
  `STATUS` varchar(20) DEFAULT NULL,
  `KETERSEDIAAN` varchar(30) DEFAULT NULL,
  `ANGKATAN` char(4) DEFAULT NULL,
  `IPK` decimal(4,0) DEFAULT NULL,
  `LULUS` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `ID_BERITA` int(7) NOT NULL,
  `ISI_BERITA` text,
  `JUDUL` varchar(50) DEFAULT NULL,
  `STATUS_BERITA` varchar(12) DEFAULT NULL,
  `TGL_BERITA` date NOT NULL,
  `STATUS` varchar(10) NOT NULL,
  `GAMBAR` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `butuh_hardskill`
--

CREATE TABLE `butuh_hardskill` (
  `ID_LOWONGAN` varchar(7) NOT NULL,
  `TINGKAT` varchar(30) NOT NULL,
  `ID_HARDSKILL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `butuh_language`
--

CREATE TABLE `butuh_language` (
  `ID_LOWONGAN` varchar(7) NOT NULL,
  `ID_LANGUAGE` int(11) NOT NULL,
  `TINGKAT` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `butuh_softskill`
--

CREATE TABLE `butuh_softskill` (
  `ID_LOWONGAN` varchar(7) NOT NULL,
  `ID_SOFTSKILL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_melamar`
--

CREATE TABLE `data_melamar` (
  `ID_DATALAMAR` varchar(7) NOT NULL,
  `NIM` varchar(12) NOT NULL,
  `POSISI_TERAKHIR` varchar(30) DEFAULT NULL,
  `JENIS_PERUSAHAAN` varchar(30) DEFAULT NULL,
  `GAJI_AKHIR` varchar(15) DEFAULT NULL,
  `GAJI_HARAP` varchar(15) DEFAULT NULL,
  `PROMOSI` text,
  `PENDIDIKAN_NONFORMAL` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dokumentasi`
--

CREATE TABLE `dokumentasi` (
  `ID_DOK` varchar(10) NOT NULL,
  `ISI_DOK` longblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hardskill`
--

CREATE TABLE `hardskill` (
  `ID_HARDSKILL` int(11) NOT NULL,
  `HARDSKILL` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hardskill`
--

INSERT INTO `hardskill` (`ID_HARDSKILL`, `HARDSKILL`) VALUES
(1, 'Analis'),
(2, 'Java'),
(3, 'PHP'),
(4, 'JavaScript');

-- --------------------------------------------------------

--
-- Table structure for table `lamaran`
--

CREATE TABLE `lamaran` (
  `ID_LAMARAN` int(7) NOT NULL,
  `ID_LOWONGAN` varchar(7) NOT NULL,
  `NIM` varchar(12) NOT NULL,
  `STATUS_LAMARAN` char(10) DEFAULT NULL,
  `TGL_APPLY` date DEFAULT NULL,
  `DIR_FILE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `language_skill`
--

CREATE TABLE `language_skill` (
  `ID_LANGUAGE` int(11) NOT NULL,
  `LANGUAGE` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language_skill`
--

INSERT INTO `language_skill` (`ID_LANGUAGE`, `LANGUAGE`) VALUES
(1, 'Germany'),
(2, 'English'),
(3, 'Korea');

-- --------------------------------------------------------

--
-- Table structure for table `list_perusahaan`
--

CREATE TABLE `list_perusahaan` (
  `ID_LIST` int(5) NOT NULL,
  `NAMA` varchar(100) NOT NULL,
  `STATUS` varchar(10) DEFAULT NULL,
  `BIDANG` varchar(30) DEFAULT NULL,
  `SKALA` varchar(30) DEFAULT NULL,
  `ALAMAT` varchar(300) DEFAULT NULL,
  `KOTA` varchar(30) DEFAULT NULL,
  `KODEPOS` varchar(8) DEFAULT NULL,
  `NO_TLP` varchar(15) DEFAULT NULL,
  `NO_FAX` varchar(15) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `ID_LOWONGAN` varchar(7) NOT NULL,
  `ID_REKAN` varchar(7) NOT NULL,
  `POSISI_LOWONGAN` varchar(30) DEFAULT NULL,
  `KOTA` varchar(30) DEFAULT NULL,
  `TGL_POSTING` date DEFAULT NULL,
  `TGL_SELESAI` date DEFAULT NULL,
  `STATUS_LOWONGAN` char(11) DEFAULT NULL,
  `BURSA_KERJA` char(1) DEFAULT NULL,
  `JURUSAN` text,
  `IPK_MINIMUM` float NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `BATASAN_USIA` varchar(15) NOT NULL,
  `PENGALAMAN_KERJA` varchar(30) NOT NULL,
  `JAM_KERJA` varchar(12) NOT NULL,
  `STATUS_PERNIKAHAN` varchar(15) NOT NULL,
  `KETERANGAN_LOWONGAN` text NOT NULL,
  `HARDSKILL` text,
  `SOFTSKILL` text,
  `BHSSKILL` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `memiliki_hardskill`
--

CREATE TABLE `memiliki_hardskill` (
  `NIM` varchar(12) NOT NULL,
  `ID_HARDSKILL` int(11) NOT NULL,
  `TINGKAT` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `memiliki_language`
--

CREATE TABLE `memiliki_language` (
  `NIM` varchar(12) NOT NULL,
  `ID_LANGUAGE` int(11) NOT NULL,
  `TINGKAT` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `memiliki_softskill`
--

CREATE TABLE `memiliki_softskill` (
  `NIM` varchar(12) NOT NULL,
  `ID_SOFTSKILL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `ID_PENGURUS` varchar(12) NOT NULL,
  `NAMA_PENGURUS` char(200) NOT NULL,
  `STATUS_PENGURUS` varchar(15) NOT NULL,
  `JABATAN` varchar(50) NOT NULL,
  `PASSWORD` varchar(225) NOT NULL,
  `USERNAME` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rekan_ika`
--

CREATE TABLE `rekan_ika` (
  `ID_REKAN` varchar(7) NOT NULL,
  `NAMA_REKAN` varchar(50) NOT NULL,
  `DESKRIPSI` varchar(300) DEFAULT NULL,
  `ALAMAT_REKAN` varchar(300) DEFAULT NULL,
  `STATUS` varchar(10) DEFAULT NULL,
  `BIDANG_USAHA` varchar(20) DEFAULT NULL,
  `SKALA` varchar(10) DEFAULT NULL,
  `THN_BERDIRI` varchar(5) DEFAULT NULL,
  `JML_KARYAWAN` varchar(10) DEFAULT NULL,
  `KOTA_REKAN` varchar(20) DEFAULT NULL,
  `KODEPOS` varchar(10) DEFAULT NULL,
  `NO_TELP` varchar(20) DEFAULT NULL,
  `NO_FAX` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `WEBSITE` varchar(100) DEFAULT NULL,
  `NEGARA_PABRIK` varchar(20) DEFAULT NULL,
  `KOTA_PABRIK` varchar(20) DEFAULT NULL,
  `ALAMAT_PABRIK` varchar(300) DEFAULT NULL,
  `NAMA_CP` varchar(30) DEFAULT NULL,
  `KODEPOS_CP` varchar(10) DEFAULT NULL,
  `JABATAN_CP` varchar(20) DEFAULT NULL,
  `EMAIL_CP` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `LOGIN` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_kerja`
--

CREATE TABLE `riwayat_kerja` (
  `ID_RIWAYAT` varchar(7) NOT NULL,
  `NIM` varchar(12) NOT NULL,
  `NAMA_PERUSAHAAN` varchar(50) DEFAULT NULL,
  `POSISI` varchar(30) DEFAULT NULL,
  `THN_MASUK` year(4) DEFAULT NULL,
  `THN_KELUAR` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `softskill`
--

CREATE TABLE `softskill` (
  `ID_SOFTSKILL` int(11) NOT NULL,
  `SOFTSKILL` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `softskill`
--

INSERT INTO `softskill` (`ID_SOFTSKILL`, `SOFTSKILL`) VALUES
(1, 'Jujur'),
(3, 'Komunikatif'),
(5, 'Kreatif'),
(7, 'Mandiri'),
(9, 'Mau Belajar'),
(11, 'Rapi'),
(13, 'Self Motivated'),
(15, 'Kharismatik'),
(17, 'Suka Tantangan'),
(19, 'Teliti'),
(21, 'Tanggung Jawab'),
(23, 'On Target'),
(25, 'Team Work'),
(27, 'Tegas'),
(29, 'Terampil'),
(31, 'Ulet'),
(33, 'Wawasan Luas');

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `ID_TENTANG` varchar(10) NOT NULL,
  `ISI_TENTANG` char(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tracer_study`
--

CREATE TABLE `tracer_study` (
  `ID_SOAL` varchar(5) NOT NULL,
  `NIM` varchar(12) NOT NULL,
  `ID_TRACER` int(5) NOT NULL,
  `jawaban` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`NIM`),
  ADD KEY `FK_MEMILIKI_DATA` (`ID_DATALAMAR`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`ID_BERITA`);

--
-- Indexes for table `data_melamar`
--
ALTER TABLE `data_melamar`
  ADD PRIMARY KEY (`ID_DATALAMAR`),
  ADD UNIQUE KEY `NIM` (`NIM`),
  ADD KEY `FK_MEMILIKI_DATA2` (`NIM`);

--
-- Indexes for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  ADD PRIMARY KEY (`ID_DOK`);

--
-- Indexes for table `hardskill`
--
ALTER TABLE `hardskill`
  ADD PRIMARY KEY (`ID_HARDSKILL`);

--
-- Indexes for table `lamaran`
--
ALTER TABLE `lamaran`
  ADD PRIMARY KEY (`ID_LAMARAN`),
  ADD KEY `FK_MENDAPATKAN` (`ID_LOWONGAN`),
  ADD KEY `FK_MENGAJUKAN` (`NIM`);

--
-- Indexes for table `language_skill`
--
ALTER TABLE `language_skill`
  ADD PRIMARY KEY (`ID_LANGUAGE`);

--
-- Indexes for table `list_perusahaan`
--
ALTER TABLE `list_perusahaan`
  ADD PRIMARY KEY (`ID_LIST`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`ID_LOWONGAN`),
  ADD KEY `FK_MEMBUKA` (`ID_REKAN`);

--
-- Indexes for table `memiliki_hardskill`
--
ALTER TABLE `memiliki_hardskill`
  ADD PRIMARY KEY (`NIM`,`ID_HARDSKILL`),
  ADD KEY `FK_MEMILIKI_HARDSKILL2` (`ID_HARDSKILL`);

--
-- Indexes for table `memiliki_language`
--
ALTER TABLE `memiliki_language`
  ADD PRIMARY KEY (`NIM`,`ID_LANGUAGE`),
  ADD KEY `FK_MEMILIKI_LANGUAGE2` (`ID_LANGUAGE`);

--
-- Indexes for table `memiliki_softskill`
--
ALTER TABLE `memiliki_softskill`
  ADD PRIMARY KEY (`NIM`,`ID_SOFTSKILL`),
  ADD KEY `FK_MEMILIKI_SOFTSKILL2` (`ID_SOFTSKILL`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`ID_PENGURUS`);

--
-- Indexes for table `rekan_ika`
--
ALTER TABLE `rekan_ika`
  ADD PRIMARY KEY (`ID_REKAN`);

--
-- Indexes for table `riwayat_kerja`
--
ALTER TABLE `riwayat_kerja`
  ADD PRIMARY KEY (`ID_RIWAYAT`),
  ADD KEY `FK_MEMILIKI_RIWAYAT_KERJA` (`NIM`);

--
-- Indexes for table `softskill`
--
ALTER TABLE `softskill`
  ADD PRIMARY KEY (`ID_SOFTSKILL`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`ID_TENTANG`);

--
-- Indexes for table `tracer_study`
--
ALTER TABLE `tracer_study`
  ADD PRIMARY KEY (`ID_TRACER`) USING BTREE,
  ADD KEY `FK_TRACER_STUDY2` (`NIM`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `ID_BERITA` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `lamaran`
--
ALTER TABLE `lamaran`
  MODIFY `ID_LAMARAN` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `list_perusahaan`
--
ALTER TABLE `list_perusahaan`
  MODIFY `ID_LIST` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tracer_study`
--
ALTER TABLE `tracer_study`
  MODIFY `ID_TRACER` int(5) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumni`
--
ALTER TABLE `alumni`
  ADD CONSTRAINT `FK_MEMILIKI_DATA` FOREIGN KEY (`ID_DATALAMAR`) REFERENCES `data_melamar` (`ID_DATALAMAR`);

--
-- Constraints for table `data_melamar`
--
ALTER TABLE `data_melamar`
  ADD CONSTRAINT `FK_MEMILIKI_DATA2` FOREIGN KEY (`NIM`) REFERENCES `alumni` (`NIM`);

--
-- Constraints for table `lamaran`
--
ALTER TABLE `lamaran`
  ADD CONSTRAINT `FK_MENDAPATKAN` FOREIGN KEY (`ID_LOWONGAN`) REFERENCES `lowongan` (`ID_LOWONGAN`),
  ADD CONSTRAINT `FK_MENGAJUKAN` FOREIGN KEY (`NIM`) REFERENCES `alumni` (`NIM`);

--
-- Constraints for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD CONSTRAINT `FK_MEMBUKA` FOREIGN KEY (`ID_REKAN`) REFERENCES `rekan_ika` (`ID_REKAN`);

--
-- Constraints for table `memiliki_hardskill`
--
ALTER TABLE `memiliki_hardskill`
  ADD CONSTRAINT `FK_MEMILIKI_HARDSKILL` FOREIGN KEY (`NIM`) REFERENCES `alumni` (`NIM`),
  ADD CONSTRAINT `FK_MEMILIKI_HARDSKILL2` FOREIGN KEY (`ID_HARDSKILL`) REFERENCES `hardskill` (`ID_HARDSKILL`);

--
-- Constraints for table `memiliki_language`
--
ALTER TABLE `memiliki_language`
  ADD CONSTRAINT `FK_MEMILIKI_LANGUAGE` FOREIGN KEY (`NIM`) REFERENCES `alumni` (`NIM`),
  ADD CONSTRAINT `FK_MEMILIKI_LANGUAGE2` FOREIGN KEY (`ID_LANGUAGE`) REFERENCES `language_skill` (`ID_LANGUAGE`);

--
-- Constraints for table `memiliki_softskill`
--
ALTER TABLE `memiliki_softskill`
  ADD CONSTRAINT `FK_MEMILIKI_SOFTSKILL` FOREIGN KEY (`NIM`) REFERENCES `alumni` (`NIM`),
  ADD CONSTRAINT `FK_MEMILIKI_SOFTSKILL2` FOREIGN KEY (`ID_SOFTSKILL`) REFERENCES `softskill` (`ID_SOFTSKILL`);

--
-- Constraints for table `riwayat_kerja`
--
ALTER TABLE `riwayat_kerja`
  ADD CONSTRAINT `FK_MEMILIKI_RIWAYAT_KERJA` FOREIGN KEY (`NIM`) REFERENCES `alumni` (`NIM`);

--
-- Constraints for table `tracer_study`
--
ALTER TABLE `tracer_study`
  ADD CONSTRAINT `FK_TRACER_STUDY2` FOREIGN KEY (`NIM`) REFERENCES `alumni` (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
