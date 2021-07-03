-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2021 at 09:11 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greedy`
--

-- --------------------------------------------------------

--
-- Table structure for table `jarak`
--

CREATE TABLE `jarak` (
  `kode_jarak` int(25) NOT NULL,
  `kec_awal` varchar(100) DEFAULT NULL,
  `kec_tujuan` varchar(100) DEFAULT NULL,
  `jarak` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jarak`
--

INSERT INTO `jarak` (`kode_jarak`, `kec_awal`, `kec_tujuan`, `jarak`) VALUES
(1, 'Bondowoso', 'Tenggarang', 2870),
(2, 'Bondowoso ', 'Tegalampel', 1680),
(3, 'Bondowoso', 'Wringin', 12110),
(4, 'Bondowoso ', 'Binakal', 5740),
(5, 'Bondowoso ', 'Curahdami', 3430),
(6, 'Bondowoso', 'Grujukan', 7840),
(7, 'Bondowoso ', 'Tamanan', 11970),
(8, 'Tegalampel', 'Bondowoso', 1680),
(9, 'Tegalampel ', 'Wringin', 11480),
(10, 'Tegalampel ', 'Tenggarang', 2800),
(11, 'Tegalampel ', 'Taman Krocok', 6720),
(12, 'Tenggarang', 'Bondowoso', 2870),
(13, 'Tenggarang', 'Taman Krocok', 5950),
(14, 'Tenggarang', 'Wonosari', 5600),
(15, 'Tenggarang', 'Jamvesari Darusholah', 7560),
(16, 'Taman Krocok', 'Wonosari', 1960),
(17, 'Taman Krocok', 'Tapen', 5810),
(18, 'Taman Krocok', 'Tenggarang', 5950),
(19, 'Taman Krocok', 'Tegalampel', 6720),
(20, 'Wonosari', 'Tapen', 6020),
(21, 'Wonosari', 'Sukosari', 10290),
(22, 'Tapen', 'Klabang', 3430),
(23, 'Tapen', 'Taman Krocok', 5810),
(24, 'Klabang ', 'Botolinggo', 3710),
(25, 'Klabang ', 'Prajekan', 5320),
(26, 'Prajekan ', 'Cermee', 7630),
(27, 'Prajekan ', 'Klabang', 5320),
(28, 'Cermee ', 'Botolinggo', 8400),
(29, 'Cermee ', 'Sempol', 27230);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `nama_kecamatan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `nama_kecamatan`) VALUES
(1, 'Bondowoso'),
(2, 'Tegalampel'),
(3, 'Tenggarang'),
(4, 'Wonosari'),
(5, 'Tapen'),
(6, 'Klabang'),
(7, 'Botolinggo'),
(8, 'Prajekan'),
(9, 'Cermee'),
(10, 'Sukosari'),
(11, 'Sumber Wringin'),
(12, 'Sempol'),
(13, 'Tlogosari'),
(14, 'Pujer'),
(15, 'Jambesari Darus Sholah'),
(16, 'Tamanan'),
(17, 'Maesan'),
(18, 'Grujugan'),
(19, 'Curahdami'),
(20, 'Binakal'),
(21, 'Pakem'),
(22, 'Wringin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `kd_user` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jarak`
--
ALTER TABLE `jarak`
  ADD PRIMARY KEY (`kode_jarak`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`kd_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jarak`
--
ALTER TABLE `jarak`
  MODIFY `kode_jarak` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `kd_user` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
