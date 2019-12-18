-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2019 at 04:57 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lancar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tujuan_kendaraan`
--

CREATE TABLE `tbl_tujuan_kendaraan` (
  `id_tujuan_kendaraan` int(11) NOT NULL,
  `kota_asal` varchar(50) NOT NULL,
  `kota_tujuan` varchar(100) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `minimum` int(11) NOT NULL,
  `motor_kecil` int(11) NOT NULL,
  `motor_besar` int(11) NOT NULL,
  `estimasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tujuan_kendaraan`
--

INSERT INTO `tbl_tujuan_kendaraan` (`id_tujuan_kendaraan`, `kota_asal`, `kota_tujuan`, `kode`, `harga`, `minimum`, `motor_kecil`, `motor_besar`, `estimasi`) VALUES
(1, 'JAKARTA', 'BUKITTINGGI', 'BKT', 2500, 20, 650000, 950000, '2-4 Hari'),
(2, 'JAKARTA', 'PAYAKUMBUH', 'PYK', 2500, 20, 850000, 1200000, '2-4 Hari'),
(3, 'JAKARTA', 'PADANG', 'PDG', 2800, 20, 1000000, 1300000, '2-4 Hari'),
(4, 'JAKARTA', 'PADANG PANJANG', 'PP', 2500, 20, 850000, 1200000, '2-4 Hari'),
(5, 'JAKARTA', 'PEKANBARU', 'PKU', 2500, 20, 850000, 1200000, '2-4 Hari'),
(6, 'JAKARTA', 'DUMAI', 'DUMAI', 4000, 20, 1400000, 1700000, '3-5 Hari'),
(7, 'JAKARTA', 'SIAK', 'SIAK', 4000, 20, 1400000, 1700000, '3-5 Hari'),
(8, 'JAKARTA', 'PANGKALAN KERINCI', 'P.KRCI', 3500, 20, 1225000, 1525000, '3-5 Hari'),
(9, 'JAKARTA', 'SOREK', 'SOREK', 3500, 20, 1225000, 1525000, '3-5 Hari'),
(10, 'JAKARTA', 'TEMBILAHAN', 'TBH', 4000, 20, 1400000, 1700000, '3-5 Hari'),
(11, 'JAKARTA', 'DURI', 'DURI', 3500, 20, 1225000, 1525000, '3-5 Hari'),
(12, 'JAKARTA', 'UJUNG BATU', 'UJNGBT', 3500, 20, 1225000, 1525000, '3-5 Hari'),
(13, 'JAKARTA', 'ROKAN HULU', 'ROHUL', 4000, 20, 1400000, 1700000, '3-5 Hari'),
(14, 'JAKARTA', 'ROKAN HILIR', 'ROHIL', 4500, 20, 1600000, 1900000, '3-5 Hari'),
(15, 'JAKARTA', 'TELUK KUANTAN', 'T.KUANTAN', 3500, 20, 1225000, 1525000, '3-5 Hari'),
(16, 'JAKARTA', 'UKUI', 'UKUI', 3500, 20, 1225000, 1525000, '3-5 Hari'),
(17, 'JAKARTA', 'AIR MOLEK', 'AIR MOLEK', 3500, 20, 1225000, 1525000, '3-5 Hari'),
(18, 'JAKARTA', 'PALEMBANG', 'PLG', 2500, 20, 650000, 950000, '1-3 Hari'),
(19, 'JAKARTA', 'JAMBI', 'PLB', 2800, 20, 1000000, 1300000, '2-4 Hari'),
(20, 'JAKARTA', 'MEDAN', 'MDN', 3500, 20, 1225000, 1525000, '3-5 Hari'),
(21, 'JAKARTA', 'ACEH', 'ACEH', 5000, 20, 1750000, 2050000, '4-6 Hari'),
(22, 'JAKARTA', 'BATAM', 'BTH', 6500, 20, 0, 0, '5-7 Hari'),
(23, 'JAKARTA', 'TANJUNG PINANG', 'TJ PNG', 7000, 20, 0, 0, '5-7 HarI'),
(24, 'JAKARTA', 'TJ BALAI KARIMUN', 'TBK', 7500, 20, 0, 0, '5-7 Hari');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
