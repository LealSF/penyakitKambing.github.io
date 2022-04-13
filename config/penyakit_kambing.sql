-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2022 at 01:01 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penyakit_kambing`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id_admin` int(10) NOT NULL,
  `admin_nama` varchar(45) NOT NULL,
  `admin_username` varchar(45) NOT NULL,
  `admin_password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `aturan_tbl`
--

CREATE TABLE `aturan_tbl` (
  `id_aturan` varchar(10) NOT NULL,
  `id_penyakit` varchar(10) NOT NULL,
  `id_gejala` varchar(10) NOT NULL,
  `mb_aturan` float NOT NULL,
  `md_aturan` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gejala_tbl`
--

CREATE TABLE `gejala_tbl` (
  `id_gejala` varchar(10) NOT NULL,
  `gejala_nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penyakit_tbl`
--

CREATE TABLE `penyakit_tbl` (
  `id_penyakit` varchar(10) NOT NULL,
  `penyakit_nama` varchar(100) NOT NULL,
  `penyakit_penjelasan` text NOT NULL,
  `penaykit_penanganan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
