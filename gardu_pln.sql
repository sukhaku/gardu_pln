-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2016 at 06:50 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gardu_pln`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_gardu`
--

CREATE TABLE IF NOT EXISTS `data_gardu` (
  `id_gardu` int(20) NOT NULL AUTO_INCREMENT,
  `nama_gardu` varchar(60) NOT NULL,
  `id_trafo` int(20) NOT NULL,
  `jenis_gardu` int(50) NOT NULL,
  `gi_gardu` int(50) NOT NULL,
  `alamat_gardu` varchar(200) NOT NULL,
  `temp_gardu` varchar(100) NOT NULL,
  PRIMARY KEY (`id_gardu`),
  KEY `id_gardu` (`id_gardu`,`id_trafo`),
  KEY `jenis_gardu` (`jenis_gardu`),
  KEY `gi_gardu` (`gi_gardu`),
  KEY `id_trafo` (`id_trafo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `data_gardu`
--

INSERT INTO `data_gardu` (`id_gardu`, `nama_gardu`, `id_trafo`, `jenis_gardu`, `gi_gardu`, `alamat_gardu`, `temp_gardu`) VALUES
(9, 'Gardu Utara', 2, 2, 1, 'Jakarta plosok', 'forever'),
(10, 'rizal', 2, 1, 2, 'bojongsoang', 'sementara'),
(11, 'Gardu ndeso', 1, 2, 1, 'klaten', '234');

-- --------------------------------------------------------

--
-- Table structure for table `data_trafo`
--

CREATE TABLE IF NOT EXISTS `data_trafo` (
  `id_trafo` int(20) NOT NULL AUTO_INCREMENT,
  `name_trafo` int(20) NOT NULL,
  `sn_trafo` varchar(60) NOT NULL,
  `kapasitas_trafo` varchar(50) NOT NULL,
  `hvnominal_trafo` varchar(50) NOT NULL,
  `lvnominal_trafo` varchar(50) NOT NULL,
  `temp_oil_trafo` varchar(30) NOT NULL,
  `born_trafo` varchar(20) NOT NULL,
  `type_trafo` int(20) NOT NULL,
  PRIMARY KEY (`id_trafo`),
  KEY `name_trafo` (`name_trafo`,`type_trafo`),
  KEY `type_trafo` (`type_trafo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gi_gardu_list`
--

CREATE TABLE IF NOT EXISTS `gi_gardu_list` (
  `id_gi_gardu` int(50) NOT NULL AUTO_INCREMENT,
  `nama_gi_gardu` varchar(60) NOT NULL,
  PRIMARY KEY (`id_gi_gardu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gi_gardu_list`
--

INSERT INTO `gi_gardu_list` (`id_gi_gardu`, `nama_gi_gardu`) VALUES
(1, 'Gi Gardu jooz'),
(2, 'Gi Gardu lelet');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_gardu_list`
--

CREATE TABLE IF NOT EXISTS `jenis_gardu_list` (
  `id_jenis_gardu` int(50) NOT NULL AUTO_INCREMENT,
  `nama_jenis_gardu` varchar(60) NOT NULL,
  PRIMARY KEY (`id_jenis_gardu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `jenis_gardu_list`
--

INSERT INTO `jenis_gardu_list` (`id_jenis_gardu`, `nama_jenis_gardu`) VALUES
(1, 'Gardu A'),
(2, 'Gardu B');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `id_jurusan` int(20) NOT NULL,
  `name_jurusan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_jurusan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kebocoran_list`
--

CREATE TABLE IF NOT EXISTS `kebocoran_list` (
  `id_bocor` int(20) NOT NULL AUTO_INCREMENT,
  `name_bocor` varchar(50) NOT NULL,
  `nilai_bocor` int(60) NOT NULL,
  PRIMARY KEY (`id_bocor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `kondisi_trafo`
--

CREATE TABLE IF NOT EXISTS `kondisi_trafo` (
  `id_trafo` int(20) NOT NULL,
  `tap_trafo` int(20) NOT NULL,
  `kebocoran_trafo` int(20) NOT NULL,
  `silicagel_trafo` varchar(50) NOT NULL,
  `oil_level_trafo` int(20) NOT NULL,
  `oti_trafo` varchar(50) NOT NULL,
  `oti_max_trafo` varchar(50) NOT NULL,
  `gassing_trafo` varchar(50) NOT NULL,
  `grounding_trafo` varchar(50) NOT NULL,
  KEY `id_trafo` (`id_trafo`,`tap_trafo`,`kebocoran_trafo`,`oil_level_trafo`),
  KEY `tap_trafo` (`tap_trafo`),
  KEY `oil_level_trafo` (`oil_level_trafo`),
  KEY `kebocoran_trafo` (`kebocoran_trafo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `name_trafo_list`
--

CREATE TABLE IF NOT EXISTS `name_trafo_list` (
  `id_name` int(20) NOT NULL AUTO_INCREMENT,
  `name_trafo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `name_trafo_list`
--

INSERT INTO `name_trafo_list` (`id_name`, `name_trafo`) VALUES
(1, 'trafo A'),
(2, 'trafo B');

-- --------------------------------------------------------

--
-- Table structure for table `note_gardu`
--

CREATE TABLE IF NOT EXISTS `note_gardu` (
  `id_gardu` int(20) NOT NULL,
  `note_gardu` varchar(200) NOT NULL,
  KEY `id_gardu` (`id_gardu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `note_rak`
--

CREATE TABLE IF NOT EXISTS `note_rak` (
  `id_rak` int(20) NOT NULL,
  `note_rak` varchar(200) NOT NULL,
  KEY `id_rak` (`id_rak`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `note_trafo`
--

CREATE TABLE IF NOT EXISTS `note_trafo` (
  `id_trafo` int(20) NOT NULL,
  `note_trafo` varchar(200) NOT NULL,
  KEY `id_trafo` (`id_trafo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `oil_level_list`
--

CREATE TABLE IF NOT EXISTS `oil_level_list` (
  `id_level` int(20) NOT NULL AUTO_INCREMENT,
  `name_level` varchar(50) NOT NULL,
  `nilai_level` int(50) NOT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rk_tr`
--

CREATE TABLE IF NOT EXISTS `rk_tr` (
  `id_gardu` int(20) NOT NULL,
  `id_rak` int(20) NOT NULL,
  `name_rak` varchar(100) NOT NULL,
  `kapasitas_rak` int(100) NOT NULL,
  `jmljurusan_rak` int(100) NOT NULL,
  PRIMARY KEY (`id_rak`),
  KEY `id_gardu` (`id_gardu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rst_jurusan`
--

CREATE TABLE IF NOT EXISTS `rst_jurusan` (
  `id_rst_jurusan` int(20) NOT NULL AUTO_INCREMENT,
  `id_jurusan` int(20) NOT NULL,
  `name_rst` varchar(60) NOT NULL,
  PRIMARY KEY (`id_rst_jurusan`),
  KEY `id_jurusan` (`id_jurusan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rst_tabel`
--

CREATE TABLE IF NOT EXISTS `rst_tabel` (
  `id_rst` int(20) NOT NULL AUTO_INCREMENT,
  `name_rst2` varchar(50) NOT NULL,
  PRIMARY KEY (`id_rst`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tap_list`
--

CREATE TABLE IF NOT EXISTS `tap_list` (
  `id_tap_list` int(20) NOT NULL AUTO_INCREMENT,
  `name_tap` varchar(50) NOT NULL,
  `nilai_tap` int(50) NOT NULL,
  PRIMARY KEY (`id_tap_list`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tegangan_pq`
--

CREATE TABLE IF NOT EXISTS `tegangan_pq` (
  `id_jurusan` int(20) NOT NULL,
  `id_rst` int(20) NOT NULL,
  `nilai_rst` int(50) NOT NULL,
  KEY `id_jurusan` (`id_jurusan`,`id_rst`),
  KEY `id_rst` (`id_rst`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `type_trafo_list`
--

CREATE TABLE IF NOT EXISTS `type_trafo_list` (
  `id_type_trafo` int(20) NOT NULL AUTO_INCREMENT,
  `name_type_trafo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_type_trafo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ukur_pq`
--

CREATE TABLE IF NOT EXISTS `ukur_pq` (
  `id_rst_jurusan` int(20) NOT NULL,
  `id_ukur_pq` int(20) NOT NULL AUTO_INCREMENT,
  `beban_ukur` int(50) NOT NULL,
  `fuse_ukur` int(50) NOT NULL,
  `cosphi_ukur` int(50) NOT NULL,
  PRIMARY KEY (`id_ukur_pq`),
  KEY `id_rst_jurusan` (`id_rst_jurusan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `level` int(2) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_gardu`
--
ALTER TABLE `data_gardu`
  ADD CONSTRAINT `data_gardu_ibfk_3` FOREIGN KEY (`id_trafo`) REFERENCES `name_trafo_list` (`id_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_gardu_ibfk_1` FOREIGN KEY (`gi_gardu`) REFERENCES `gi_gardu_list` (`id_gi_gardu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_gardu_ibfk_2` FOREIGN KEY (`jenis_gardu`) REFERENCES `jenis_gardu_list` (`id_jenis_gardu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_trafo`
--
ALTER TABLE `data_trafo`
  ADD CONSTRAINT `data_trafo_ibfk_2` FOREIGN KEY (`type_trafo`) REFERENCES `type_trafo_list` (`id_type_trafo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kondisi_trafo`
--
ALTER TABLE `kondisi_trafo`
  ADD CONSTRAINT `kondisi_trafo_ibfk_1` FOREIGN KEY (`id_trafo`) REFERENCES `data_trafo` (`id_trafo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kondisi_trafo_ibfk_2` FOREIGN KEY (`tap_trafo`) REFERENCES `tap_list` (`id_tap_list`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kondisi_trafo_ibfk_3` FOREIGN KEY (`oil_level_trafo`) REFERENCES `oil_level_list` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kondisi_trafo_ibfk_4` FOREIGN KEY (`kebocoran_trafo`) REFERENCES `kebocoran_list` (`id_bocor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `note_rak`
--
ALTER TABLE `note_rak`
  ADD CONSTRAINT `note_rak_ibfk_1` FOREIGN KEY (`id_rak`) REFERENCES `rk_tr` (`id_rak`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `note_trafo`
--
ALTER TABLE `note_trafo`
  ADD CONSTRAINT `note_trafo_ibfk_1` FOREIGN KEY (`id_trafo`) REFERENCES `data_trafo` (`id_trafo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rst_jurusan`
--
ALTER TABLE `rst_jurusan`
  ADD CONSTRAINT `rst_jurusan_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tegangan_pq`
--
ALTER TABLE `tegangan_pq`
  ADD CONSTRAINT `tegangan_pq_ibfk_1` FOREIGN KEY (`id_rst`) REFERENCES `rst_tabel` (`id_rst`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tegangan_pq_ibfk_2` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ukur_pq`
--
ALTER TABLE `ukur_pq`
  ADD CONSTRAINT `ukur_pq_ibfk_1` FOREIGN KEY (`id_rst_jurusan`) REFERENCES `rst_jurusan` (`id_rst_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
