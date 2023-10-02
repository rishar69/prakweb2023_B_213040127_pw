-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 02, 2023 at 09:11 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pw`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `nama_buku` varchar(50) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`nama_buku`, `penulis`, `penerbit`, `gambar`) VALUES
('Bumi Manusia', 'Pramoedya Ananta Toer', 'Gramedia', ''),
('Laskar Pelangi', ' Andrea Hirata', 'Gramedia', ''),
('Anak Semua Bangsa', 'Pramoedya Ananta Toer', 'Gramedia', ''),
(' Ronggeng Dukuh Paruk', 'Ahmad Tohari ', 'Gramedia', ''),
(' Negeri 5 Menara', 'Ahmad Fuadi', 'Gramedia', ''),
('Daun yang Jatuh Tak Pernah Membenci Angin', 'Tere Liye ', 'Gramedia', ''),
('Cantik itu Luka', 'Eka Kurniawan', 'Gramedia', ''),
('Rumah Kaca', 'Pramoedya Ananta ', 'Gramedia', ''),
('Sang Pemimpi', 'Andrea Hirata', 'Gramedia', ''),
('Perahu Kertas', 'Andrea Hirata', 'Gramedia', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
