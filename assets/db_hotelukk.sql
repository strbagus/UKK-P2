-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 11, 2022 at 08:17 AM
-- Server version: 8.0.27-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotelukk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_fhotel`
--

CREATE TABLE `tb_fhotel` (
  `fh_id` int NOT NULL,
  `fh_fasilitas` varchar(35) COLLATE utf8mb4_general_ci NOT NULL,
  `fh_keterangan` varchar(65) COLLATE utf8mb4_general_ci NOT NULL,
  `fh_image` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_fhotel`
--

INSERT INTO `tb_fhotel` (`fh_id`, `fh_fasilitas`, `fh_keterangan`, `fh_image`) VALUES
(1, 'Swimming Pool', 'Kolam renang 2.5m', NULL),
(2, 'golf field', 'lapangan golf di tengah danau', NULL),
(5, 'bar', 'tempat minum', NULL),
(7, 'lapangan basket', 'tempat bermain basket', NULL),
(8, 'ruang bermain anak', 'anak disediakan tempat bermain', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_fkamar`
--

CREATE TABLE `tb_fkamar` (
  `fk_id` int NOT NULL,
  `fk_tipe` int NOT NULL,
  `fk_jumlah` int NOT NULL,
  `fk_fasilitas` varchar(65) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_fkamar`
--

INSERT INTO `tb_fkamar` (`fk_id`, `fk_tipe`, `fk_jumlah`, `fk_fasilitas`) VALUES
(8, 2, 1, 'Balkon pemandangan kolam renang'),
(9, 1, 1, 'Balkon'),
(10, 2, 2, 'Kamar Mandi '),
(11, 1, 2, 'Kamar Mandi'),
(13, 1, 7, 'kas'),
(15, 6, 6, 'ju'),
(16, 1, 2, 'Tv 38 Inch'),
(17, 1, 2, 'Tv 38 Inch'),
(18, 1, 2, 'Tv 40 Inch'),
(19, 6, 1, 'kamar mandi'),
(20, 2, 4, 'wc'),
(21, 7, 2, 'single bed'),
(22, 7, 1, 'AC');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jkamar`
--

CREATE TABLE `tb_jkamar` (
  `jk_id` int NOT NULL,
  `jk_tipe` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jk_jumlah` int NOT NULL,
  `jk_tersedia` int DEFAULT NULL,
  `jk_terpakai` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_jkamar`
--

INSERT INTO `tb_jkamar` (`jk_id`, `jk_tipe`, `jk_jumlah`, `jk_tersedia`, `jk_terpakai`) VALUES
(1, 'Superior', 15, NULL, NULL),
(2, 'Deluxe', 20, NULL, NULL),
(6, 'Large', 30, NULL, NULL),
(7, 'mini', 30, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_reservasi`
--

CREATE TABLE `tb_reservasi` (
  `res_id` int NOT NULL,
  `res_cekin` date NOT NULL,
  `res_cekout` date NOT NULL,
  `res_namapesan` varchar(35) COLLATE utf8mb4_general_ci NOT NULL,
  `res_email` varchar(35) COLLATE utf8mb4_general_ci NOT NULL,
  `res_nohp` int NOT NULL,
  `res_namatamu` varchar(35) COLLATE utf8mb4_general_ci NOT NULL,
  `res_tipe` int NOT NULL,
  `res_jumlah` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_reservasi`
--

INSERT INTO `tb_reservasi` (`res_id`, `res_cekin`, `res_cekout`, `res_namapesan`, `res_email`, `res_nohp`, `res_namatamu`, `res_tipe`, `res_jumlah`) VALUES
(3, '2022-02-01', '2022-02-03', 'indah', 'indahggs@gmail.com', 92523623, 'jejee', 6, 1),
(4, '2022-01-12', '2022-01-13', 'akang', 'akang@gmail.com', 3266326, 'ggees', 1, 2),
(6, '2022-02-01', '2022-02-03', 'bagus wibowo', 'baguswibowo365@gmail.com', 2154135, 'bagus juga', 2, 1),
(7, '2022-01-12', '2022-01-15', 'bagas', 'jga@gmail.com', 96236236, 'kkl', 1, 3),
(8, '2022-01-29', '2022-02-01', 'rafi', 'satrio.baguswbw@gmail.com', 462642, 'nata', 2, 2),
(9, '2022-02-01', '2022-02-02', 'Revana', 'revana@gmail.com', 81523953, 'revana ', 2, 2),
(11, '2022-02-04', '2022-02-06', 'Erdogan', 'turkies@gmail.com', 8124324, 'Erdogan', 1, 1),
(12, '2022-02-02', '2022-02-05', 'Al Biden', 'bidenus01@gmail.com', 823521332, 'Biden', 1, 1),
(13, '2022-02-08', '2022-02-09', 'Mahfud MD', 'mahfudMD002@gmail.com', 82312351, 'Mahfud', 2, 1),
(14, '2022-02-02', '2022-02-07', 'Benjamin', 'benjamin43tahu@gmail.com', 823512632, 'Benjamin', 6, 1),
(15, '2022-02-09', '2022-02-11', 'Vladimir', 'vladimir002@gmail.com', 81268393, 'Al Putin', 1, 2),
(16, '2022-02-06', '2022-02-08', 'bagus ', 'aduhlaliaku123@gmail.com', 86543223, 'ggessa', 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int NOT NULL,
  `user_username` varchar(35) COLLATE utf8mb4_general_ci NOT NULL,
  `user_role` enum('admin','resep') COLLATE utf8mb4_general_ci NOT NULL,
  `user_password` varchar(35) COLLATE utf8mb4_general_ci NOT NULL,
  `user_name` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_username`, `user_role`, `user_password`, `user_name`) VALUES
(1, 'bagus', 'admin', 'a89407b9014f6f6d9a85f2d5b6a2c118', 'Satrio Bagus'),
(2, 'adit', 'resep', '357344787fa3d91429f000604af9667f', 'Ananda Aditya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_fhotel`
--
ALTER TABLE `tb_fhotel`
  ADD PRIMARY KEY (`fh_id`);

--
-- Indexes for table `tb_fkamar`
--
ALTER TABLE `tb_fkamar`
  ADD PRIMARY KEY (`fk_id`),
  ADD KEY `tipe_fk` (`fk_tipe`);

--
-- Indexes for table `tb_jkamar`
--
ALTER TABLE `tb_jkamar`
  ADD PRIMARY KEY (`jk_id`);

--
-- Indexes for table `tb_reservasi`
--
ALTER TABLE `tb_reservasi`
  ADD PRIMARY KEY (`res_id`),
  ADD KEY `tipekamarreservasi` (`res_tipe`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_username` (`user_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_fhotel`
--
ALTER TABLE `tb_fhotel`
  MODIFY `fh_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_fkamar`
--
ALTER TABLE `tb_fkamar`
  MODIFY `fk_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_jkamar`
--
ALTER TABLE `tb_jkamar`
  MODIFY `jk_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_reservasi`
--
ALTER TABLE `tb_reservasi`
  MODIFY `res_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_fkamar`
--
ALTER TABLE `tb_fkamar`
  ADD CONSTRAINT `tipe_fk` FOREIGN KEY (`fk_tipe`) REFERENCES `tb_jkamar` (`jk_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `tb_reservasi`
--
ALTER TABLE `tb_reservasi`
  ADD CONSTRAINT `tipekamarreservasi` FOREIGN KEY (`res_tipe`) REFERENCES `tb_jkamar` (`jk_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
