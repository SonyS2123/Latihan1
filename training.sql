-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2022 at 01:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `training`
--

-- --------------------------------------------------------

--
-- Table structure for table `instruktur`
--

CREATE TABLE `instruktur` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggalLahir` datetime NOT NULL,
  `usia` int(11) NOT NULL,
  `kelamin` varchar(6) DEFAULT NULL,
  `isMenikah` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instruktur`
--

INSERT INTO `instruktur` (`id`, `nama`, `tanggalLahir`, `usia`, `kelamin`, `isMenikah`) VALUES
(1, 'Sony S', '1996-04-13 00:00:00', 26, 'Pria', 0),
(2, 'Sony S', '1996-04-13 00:00:00', 26, 'Pria', 0),
(3, 'Sony S', '1996-04-13 00:00:00', 26, 'Pria', 0),
(4, 'Sony S', '1996-04-13 00:00:00', 26, 'Pria', 0),
(5, 'Sony S', '1996-04-13 00:00:00', 26, 'Pria', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pelatihan`
--

CREATE TABLE `pelatihan` (
  `id_nama` int(11) NOT NULL,
  `ruang` varchar(25) NOT NULL,
  `tanggal` datetime NOT NULL,
  `materi` varchar(50) NOT NULL,
  `id_instruktur` int(11) NOT NULL,
  `id_peserta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelatihan`
--

INSERT INTO `pelatihan` (`id_nama`, `ruang`, `tanggal`, `materi`, `id_instruktur`, `id_peserta`) VALUES
(1, 'Meeting Room 5', '2022-08-15 00:00:00', 'Web Development', 1, 18),
(3, 'Meeting Room 5', '2022-08-15 00:00:00', 'Web Development', 1, 21),
(5, 'Meeting Room 5', '2022-08-15 00:00:00', 'Web Development', 1, 24);

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `usia` int(11) NOT NULL DEFAULT 17,
  `kelamin` varchar(6) NOT NULL,
  `isMenikah` tinyint(1) DEFAULT NULL,
  `tanggalLahir` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id`, `nama`, `usia`, `kelamin`, `isMenikah`, `tanggalLahir`) VALUES
(594, 'Kepleh', 22, 'Pria', 1, '2022-08-22 00:00:00'),
(597, 'Celeng', 33, 'Pria', 1, '2022-08-02 00:00:00'),
(598, 'Samsudin', 44, 'Pria', 0, '2022-08-17 00:00:00'),
(600, 'Ling Ling', 21, 'Wanita', 0, '2022-08-02 00:00:00'),
(601, 'Chi Ling', 21, 'Wanita', 1, '2022-08-29 00:00:00');

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewpelatihan`
-- (See below for the actual view)
--
CREATE TABLE `viewpelatihan` (
`ruang` varchar(25)
,`tanggal` datetime
,`materi` varchar(50)
,`murid` varchar(50)
,`guru` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewpelatihan1`
-- (See below for the actual view)
--
CREATE TABLE `viewpelatihan1` (
`id_nama` int(11)
,`ruang` varchar(25)
,`tanggal` datetime
,`materi` varchar(50)
,`murid` varchar(50)
,`guru` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `view_pelatihan`
--

CREATE TABLE `view_pelatihan` (
  `idview` int(11) NOT NULL,
  `ruang` varchar(25) NOT NULL,
  `tanggal` datetime NOT NULL,
  `materi` varchar(50) CHARACTER SET utf8 NOT NULL,
  `murid` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `guru` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure for view `viewpelatihan`
--
DROP TABLE IF EXISTS `viewpelatihan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewpelatihan`  AS SELECT `latih`.`ruang` AS `ruang`, `latih`.`tanggal` AS `tanggal`, `latih`.`materi` AS `materi`, `serta`.`nama` AS `murid`, `struktur`.`nama` AS `guru` FROM ((`pelatihan` `latih` left join `peserta` `serta` on(`latih`.`id_peserta` = `serta`.`id`)) left join `instruktur` `struktur` on(`latih`.`id_instruktur` = `struktur`.`id`))  ;

-- --------------------------------------------------------

--
-- Structure for view `viewpelatihan1`
--
DROP TABLE IF EXISTS `viewpelatihan1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewpelatihan1`  AS SELECT `latih`.`id_nama` AS `id_nama`, `latih`.`ruang` AS `ruang`, `latih`.`tanggal` AS `tanggal`, `latih`.`materi` AS `materi`, `serta`.`nama` AS `murid`, `struktur`.`nama` AS `guru` FROM ((`pelatihan` `latih` left join `peserta` `serta` on(`serta`.`id` = `latih`.`id_peserta`)) left join `instruktur` `struktur` on(`struktur`.`id` = `latih`.`id_instruktur`)) WHERE 11  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instruktur`
--
ALTER TABLE `instruktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD PRIMARY KEY (`id_nama`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `instruktur`
--
ALTER TABLE `instruktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pelatihan`
--
ALTER TABLE `pelatihan`
  MODIFY `id_nama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=609;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
