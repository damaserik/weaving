-- phpMyAdmin SQL Dump
-- version 4.5.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 31, 2022 at 03:39 AM
-- Server version: 5.7.10-log
-- PHP Version: 5.6.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wv_ajl`
--

-- --------------------------------------------------------

--
-- Table structure for table `benang`
--

CREATE TABLE `benang` (
  `kd_benang` varchar(10) NOT NULL,
  `ne` varchar(20) DEFAULT NULL,
  `asal_benang` varchar(20) DEFAULT NULL,
  `lot` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `benang`
--

INSERT INTO `benang` (`kd_benang`, `ne`, `asal_benang`, `lot`) VALUES
('BNG001', '40 CD', 'DANLIRIS', '-'),
('BNG002', '40 CD', 'KNB', '-'),
('BNG003', '40 CD', 'SCS', '-'),
('BNG004', '40 CD', 'TTI', '-'),
('BNG005', '40 CD', 'PNT', '-'),
('BNG007', '40 CD', 'PMT', '-'),
('BNG008', '40 CD', 'PRIMA', '-'),
('BNG009', '32 CD', 'DANLIRIS', '-'),
('BNG010', '30 RY', 'PNT', '-'),
('BNG011', '30 RY', 'PMT', '-'),
('BNG012', '30 RY', 'TTI', '-'),
('BNG013', '60 RY', 'TTI', '-');

-- --------------------------------------------------------

--
-- Table structure for table `benang_shtl3`
--

CREATE TABLE `benang_shtl3` (
  `kd_benang` varchar(10) NOT NULL,
  `ne` varchar(20) DEFAULT NULL,
  `asal_benang` varchar(20) DEFAULT NULL,
  `lot` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `benang_shtl3`
--

INSERT INTO `benang_shtl3` (`kd_benang`, `ne`, `asal_benang`, `lot`) VALUES
('BNG001', '50CM', 'KONDOBO', '-');

-- --------------------------------------------------------

--
-- Table structure for table `input_ajl`
--

CREATE TABLE `input_ajl` (
  `kd_ajl` int(10) NOT NULL,
  `tgl_input` date DEFAULT NULL,
  `no_mesin` varchar(10) DEFAULT NULL,
  `jns_konstruksi` varchar(20) DEFAULT NULL,
  `kd_benang` varchar(10) DEFAULT NULL,
  `no_beam` int(5) DEFAULT NULL,
  `kwal_kanji` varchar(5) DEFAULT NULL,
  `tgl_pasang` date DEFAULT NULL,
  `tgl_kanji` date DEFAULT NULL,
  `visco_1` double DEFAULT NULL,
  `visco_2` double DEFAULT NULL,
  `spu` varchar(5) DEFAULT NULL,
  `set_kanji` varchar(5) DEFAULT NULL,
  `kd_mtc` varchar(10) DEFAULT NULL,
  `kd_kagrup` varchar(10) DEFAULT NULL,
  `eff` double DEFAULT NULL,
  `putus_lusi` double DEFAULT NULL,
  `wf_1` double DEFAULT NULL,
  `wf_2` double DEFAULT NULL,
  `putus_pakan` double DEFAULT NULL,
  `weff` varchar(10) DEFAULT NULL,
  `rpm` int(9) DEFAULT NULL,
  `msn` double DEFAULT NULL,
  `gulung_mtr` double DEFAULT NULL,
  `gulung_yrd` double DEFAULT NULL,
  `mc` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `input_ajl`
--

INSERT INTO `input_ajl` (`kd_ajl`, `tgl_input`, `no_mesin`, `jns_konstruksi`, `kd_benang`, `no_beam`, `kwal_kanji`, `tgl_pasang`, `tgl_kanji`, `visco_1`, `visco_2`, `spu`, `set_kanji`, `kd_mtc`, `kd_kagrup`, `eff`, `putus_lusi`, `wf_1`, `wf_2`, `putus_pakan`, `weff`, `rpm`, `msn`, `gulung_mtr`, `gulung_yrd`, `mc`) VALUES
(1, '2019-02-22', 'JC01', 'KA 1222 WRT', 'BNG003', 12, 'B', '2019-02-20', '2019-02-16', 12, 12, '12', '3', 'MTC001', 'KG001', 10, 5, 2, 2, 4, '0-59', 2, 2, 2, 2, '2.00'),
(2, '2019-02-22', 'JB01', 'KA 1222 WRT', 'BNG003', 213, 'C', '2019-02-18', '2019-02-20', 12, 12, '10', '3', 'MTC001', 'KG001', 10, 1.21, 0.5, 0.5, 1, '0-59', 600, 220, 30000, 32000, '300.00'),
(3, '2019-02-20', 'JA01', 'KA 1222 WRT', 'BNG003', 3, 'B', '2019-02-17', '2019-02-19', 12, 12, '12', '3', 'MTC001', 'KG001', 9, 123, 123, 123, 123, '0-59', 123, 123.2, 12.3, 12.1, '12.30'),
(4, '2019-02-22', 'JB01', 'KA 1255', 'BNG013', 12, 'C', '2019-02-20', '2019-02-21', 12, 12, '11', '3', 'MTC007', 'KG001', 8, 2, 1, 1, 2, '0-59', 600, 123, 213, 214, '132.00'),
(5, '2019-01-01', 'JA02', 'KA 1222 WRT', 'BNG003', 2, 'C', '2019-02-28', '2019-02-28', 12, 12, '12', '3', 'MTC001', 'KG001', 7, 1, 1, 1, 2, '0-59', 222, 22, 22, 22, '2.00'),
(6, '2019-01-15', 'JB02', 'KA 1222 WRT', 'BNG003', 112, 'A', '2019-01-10', '2019-01-11', 10, 10, '9', '3', 'MTC001', 'KG001', 5, 1.2, 1.5, 1.5, 3, '0-59', 210, 540, 433, 450, '532.00'),
(7, '2019-01-15', 'JC02', 'KA 1222 WRT', 'BNG003', 112, 'A', '2019-01-10', '2019-01-11', 10, 10, '9', '3', 'MTC001', 'KG001', 5, 1.2, 1.5, 1.5, 3, '0-59', 210, 540, 433, 450, '532.00'),
(8, '2019-03-14', 'JA02', 'KA 1222 WRT', 'BNG003', 112, 'A', '2019-01-10', '2019-01-11', 10, 10, '9', '3', 'MTC001', 'KG001', 10, 1.2, 1.5, 1.5, 3, '0-59', 210, 540, 433, 450, '532.00'),
(9, '2019-01-15', 'JB02', 'KA 1255', 'BNG003', 112, 'A', '2019-01-10', '2019-01-11', 10, 10, '9', '3', 'MTC001', 'KG001', 7, 1.2, 1.5, 1.5, 3, '0-59', 210, 540, 433, 450, '532.00'),
(10, '2019-02-15', 'JB02', 'KA 1255', 'BNG003', 112, 'A', '2019-01-10', '2019-01-11', 10, 10, '9', '3', 'MTC001', 'KG001', 9, 1.2, 1.5, 1.5, 3, '0-59', 210, 540, 433, 450, '532.00'),
(11, '2019-02-15', 'JC02', 'KA 1255', 'BNG003', 112, 'A', '2019-01-10', '2019-01-11', 10, 10, '9', '3', 'MTC001', 'KG001', 7, 1.2, 1.5, 1.5, 3, '0-59', 210, 540, 433, 450, '532.00'),
(12, '2019-02-14', 'JC02', 'KA 1255', 'BNG003', 112, 'A', '2019-01-10', '2019-01-11', 10, 10, '9', '3', 'MTC001', 'KG001', 4, 1.2, 1.5, 1.5, 3, '0-59', 210, 540, 433, 450, '532.00'),
(13, '2019-02-15', 'JB02', 'KA 1255', 'BNG003', 112, 'A', '2019-01-10', '2019-01-11', 10, 10, '9', '3', 'MTC001', 'KG001', 3, 1.2, 1.5, 1.5, 3, '0-59', 210, 540, 433, 450, '532.00'),
(14, '2019-03-15', 'JA02', 'KA 1222 WRT', 'BNG003', 112, 'A', '2019-01-10', '2019-01-11', 10, 10, '9', '3', 'MTC001', 'KG001', 8, 1.2, 0.5, 0.5, 1, '0-59', 210, 540, 433, 450, '532.00'),
(15, '2019-03-16', 'JA11', 'KA 1222 WRT', 'BNG007', 123, 'C', '2019-03-27', '2019-03-25', 12, 11, '11', '3', 'MTC001', 'KG001', 9, 1, 2, 1, 3, '0-59', 600, 232.26, 224.03, 245, '254.00'),
(16, '2019-03-16', 'JC03', 'KA 136', 'BNG002', 123, 'B', '2019-03-06', '2019-02-05', 11, 11, '10', '3', 'MTC002', 'KG002', 10, 2, 1, 1, 2, '0-59', 450, 112.47, 112.47, 123, '123.00'),
(17, '2019-03-08', 'JA05', 'KA 309', 'BNG002', 666, 'B', '2019-03-05', '2019-03-06', 11, 12, '11', '3', 'MTC006', 'KG002', 7, 1, 2.11, 2.1, 4.21, '0-59', 500, 1931.21, 1931.21, 2112, '2112.00'),
(18, '2019-03-08', 'JA06', 'KA 1217', 'BNG003', 21, 'B', '2019-03-05', '2019-03-07', 12, 12, '11', '3', 'MTC005', 'KG002', 8.5, 1, 1, 1, 2, '0-59', 211, 1108.25, 1108.25, 1212, '1212.00'),
(19, '2019-03-08', 'JB06', 'KA 309', 'BNG002', 32, 'B', '2019-03-01', '2019-03-04', 11, 11, '10', '3', 'MTC006', 'KG002', 9, 2, 1.23, 2.3, 3.53, '0-59', 125, 2151.58, 21516.75, 2353, '2353.00'),
(20, '2019-04-01', 'JA07', 'KA 2272', 'BNG007', 2, 'B', '2019-03-29', '2019-03-30', 10, 10, '11', '3', 'MTC003', 'KG001', 6.5, 1, 1.2, 2.3, 3.5, '0-59', 300, 112.47, 112.47, 123, '123.00'),
(21, '2019-04-01', 'JB07', 'KA 6606', 'BNG005', 45, 'B', '2019-03-26', '2019-04-25', 11, 11, '10', '3', 'MTC005', 'KG002', 6.7, 2, 1.1, 1.5, 2.6, '0-59', 300, 384.96, 384.96, 421, '421.00'),
(22, '2019-04-01', 'JC07', 'KA 1217 J810', 'BNG003', 75, 'B', '2019-03-27', '2019-03-28', 11, 12, '10', '3', 'MTC002', 'KG001', 7.1, 1.2, 1.3, 1.4, 2.7, '0-59', 300, 211.23, 211.23, 231, '231.00');

-- --------------------------------------------------------

--
-- Table structure for table `input_shtl3`
--

CREATE TABLE `input_shtl3` (
  `kd_sht3` int(10) NOT NULL,
  `tgl_input` date DEFAULT NULL,
  `no_mesin` varchar(10) DEFAULT NULL,
  `jns_konstruksi` varchar(20) DEFAULT NULL,
  `kd_benang` varchar(10) DEFAULT NULL,
  `kd_mtc` varchar(10) DEFAULT NULL,
  `kd_kagrup` varchar(10) DEFAULT NULL,
  `eff` double DEFAULT NULL,
  `produksi` double DEFAULT NULL,
  `pick` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `input_shtl3`
--

INSERT INTO `input_shtl3` (`kd_sht3`, `tgl_input`, `no_mesin`, `jns_konstruksi`, `kd_benang`, `kd_mtc`, `kd_kagrup`, `eff`, `produksi`, `pick`) VALUES
(1, '2019-02-26', 'W24', '309', 'BNG001', 'MTC001', 'KG001', 4, 2, 72),
(2, '2019-03-20', 'W24', '309', 'BNG001', 'MTC001', 'KG001', 7, 3, 72),
(3, '2019-04-01', 'W24', '309', 'BNG001', 'MTC001', 'KG001', 6, 2, 72),
(4, '2019-02-14', 'W25', '357', 'BNG001', 'MTC002', 'KG002', 9, 5, 72),
(5, '2019-03-13', 'W25', '357', 'BNG001', 'MTC002', 'KG002', 5, 1, 72),
(6, '2019-04-01', 'W25', '357', 'BNG001', 'MTC002', 'KG002', 7, 2, 72);

-- --------------------------------------------------------

--
-- Table structure for table `kagrup`
--

CREATE TABLE `kagrup` (
  `kd_kagrup` varchar(10) NOT NULL,
  `nama_kagrup` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kagrup`
--

INSERT INTO `kagrup` (`kd_kagrup`, `nama_kagrup`) VALUES
('KG001', 'YUSUF S'),
('KG002', 'WIDIYANTO');

-- --------------------------------------------------------

--
-- Table structure for table `kagrup_shtl3`
--

CREATE TABLE `kagrup_shtl3` (
  `kd_kagrup` varchar(10) NOT NULL,
  `nama_kagrup` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kagrup_shtl3`
--

INSERT INTO `kagrup_shtl3` (`kd_kagrup`, `nama_kagrup`) VALUES
('KG001', 'KUSWANTO'),
('KG002', 'MEIDI');

-- --------------------------------------------------------

--
-- Table structure for table `konstruksi`
--

CREATE TABLE `konstruksi` (
  `jns_konstruksi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konstruksi`
--

INSERT INTO `konstruksi` (`jns_konstruksi`) VALUES
('KA 1135'),
('KA 1191'),
('KA 1207'),
('KA 1217'),
('KA 1217 J810'),
('KA 1222 WRT'),
('KA 1226'),
('KA 1230 WRT'),
('KA 1242 WRT'),
('KA 1250'),
('KA 1251 SB 16'),
('KA 1255'),
('KA 1256'),
('KA 133'),
('KA 136'),
('KA 2272'),
('KA 309'),
('KA 6606'),
('KA 6627 SB 26'),
('KA 6628 SB 26'),
('KA 673 SB 73');

-- --------------------------------------------------------

--
-- Table structure for table `konstruksi_shtl3`
--

CREATE TABLE `konstruksi_shtl3` (
  `jns_konstruksi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konstruksi_shtl3`
--

INSERT INTO `konstruksi_shtl3` (`jns_konstruksi`) VALUES
('309'),
('357');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE `maintenance` (
  `kd_mtc` varchar(10) NOT NULL,
  `nama_mtc` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`kd_mtc`, `nama_mtc`) VALUES
('MTC001', 'AGUS K'),
('MTC002', 'SIGIT N'),
('MTC003', 'SAMIJO'),
('MTC004', 'WIDIYANTO'),
('MTC005', 'BAMBANG JP'),
('MTC006', 'ANDRI PURWANTO'),
('MTC007', 'AHMAD JANUAR'),
('MTC008', 'YUSUF 1');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance_shtl3`
--

CREATE TABLE `maintenance_shtl3` (
  `kd_mtc` varchar(10) NOT NULL,
  `nama_mtc` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maintenance_shtl3`
--

INSERT INTO `maintenance_shtl3` (`kd_mtc`, `nama_mtc`) VALUES
('MTC001', 'IDA BAGUS'),
('MTC002', 'SUPRIYONO');

-- --------------------------------------------------------

--
-- Table structure for table `mesin`
--

CREATE TABLE `mesin` (
  `no_mesin` varchar(10) NOT NULL,
  `zona` varchar(5) DEFAULT NULL,
  `rs` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mesin`
--

INSERT INTO `mesin` (`no_mesin`, `zona`, `rs`) VALUES
('JA01', 'I', '170'),
('JA02', 'I', '170'),
('JA03', 'I', '170'),
('JA05', 'II', '170'),
('JA06', 'II', '170'),
('JA07', 'IIIA', '170'),
('JA08', 'III', '170'),
('JA09', 'III', '170'),
('JA10', 'III', '170'),
('JA11', 'IIIA', 'JAT810'),
('JB01', 'I', '170'),
('JB02', 'I', '170'),
('JB03', 'I', '170'),
('JB05', 'II', '170'),
('JB06', 'II', '170'),
('JB07', 'IIIA', '170'),
('JB08', 'III', '170'),
('JB09', 'III', '170'),
('JB10', 'III', '170'),
('JB11', 'IIIA', 'JAT810'),
('JC01', 'I', '170'),
('JC02', 'I', '170'),
('JC03', 'I', '170'),
('JC05', 'II', '170'),
('JC06', 'II', '170'),
('JC07', 'IIIA', '170'),
('JC08', 'III', '170'),
('JC09', 'III', '170'),
('JC10', 'III', '170'),
('JC11', 'IIIA', 'JAT810');

-- --------------------------------------------------------

--
-- Table structure for table `mesin_shtl3`
--

CREATE TABLE `mesin_shtl3` (
  `no_mesin` varchar(10) NOT NULL,
  `daerah` varchar(5) DEFAULT NULL,
  `line` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mesin_shtl3`
--

INSERT INTO `mesin_shtl3` (`no_mesin`, `daerah`, `line`) VALUES
('W24', 'II', '24'),
('W25', 'II', '25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `benang`
--
ALTER TABLE `benang`
  ADD PRIMARY KEY (`kd_benang`);

--
-- Indexes for table `benang_shtl3`
--
ALTER TABLE `benang_shtl3`
  ADD PRIMARY KEY (`kd_benang`);

--
-- Indexes for table `input_ajl`
--
ALTER TABLE `input_ajl`
  ADD PRIMARY KEY (`kd_ajl`),
  ADD KEY `FK_input_ajl` (`kd_benang`),
  ADD KEY `FK_konstruksi` (`jns_konstruksi`),
  ADD KEY `FK_mtc` (`kd_mtc`),
  ADD KEY `FK_input` (`no_mesin`),
  ADD KEY `FK_kagrup` (`kd_kagrup`);

--
-- Indexes for table `input_shtl3`
--
ALTER TABLE `input_shtl3`
  ADD PRIMARY KEY (`kd_sht3`);

--
-- Indexes for table `kagrup`
--
ALTER TABLE `kagrup`
  ADD PRIMARY KEY (`kd_kagrup`);

--
-- Indexes for table `kagrup_shtl3`
--
ALTER TABLE `kagrup_shtl3`
  ADD PRIMARY KEY (`kd_kagrup`);

--
-- Indexes for table `konstruksi`
--
ALTER TABLE `konstruksi`
  ADD PRIMARY KEY (`jns_konstruksi`);

--
-- Indexes for table `konstruksi_shtl3`
--
ALTER TABLE `konstruksi_shtl3`
  ADD PRIMARY KEY (`jns_konstruksi`);

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`kd_mtc`);

--
-- Indexes for table `maintenance_shtl3`
--
ALTER TABLE `maintenance_shtl3`
  ADD PRIMARY KEY (`kd_mtc`);

--
-- Indexes for table `mesin`
--
ALTER TABLE `mesin`
  ADD PRIMARY KEY (`no_mesin`);

--
-- Indexes for table `mesin_shtl3`
--
ALTER TABLE `mesin_shtl3`
  ADD PRIMARY KEY (`no_mesin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `input_ajl`
--
ALTER TABLE `input_ajl`
  MODIFY `kd_ajl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `input_shtl3`
--
ALTER TABLE `input_shtl3`
  MODIFY `kd_sht3` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
