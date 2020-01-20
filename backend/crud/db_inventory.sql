-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2020 at 03:52 AM
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
-- Database: `db_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_product`
--

CREATE TABLE `table_product` (
  `id` int(11) NOT NULL,
  `kode_produk` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_product`
--

INSERT INTO `table_product` (`id`, `kode_produk`, `nama`, `description`, `foto`) VALUES
(1, 'A-0001', 'Nivea Body Lotion', 'Body Lotion', 'Nivea.jpg'),
(2, 'A-0002', 'Maybelline Newyork', 'Lipstick', 'Maybelline.jpg'),
(3, 'A-0003', 'Wardah Lippen', 'Lipstick', 'Lippen.jpg'),
(4, 'A-0004', 'Biore Wash BBM', 'Face Wash', 'BBM.jpg'),
(5, 'A-0005', 'Ganrnier Sunlight', 'Sunlight', 'Garnier.jpg'),
(6, 'A-0006', 'Rexona', 'Wangi', 'Rexona.jpg'),
(7, 'A-0007', 'Kispray', 'Mawar', 'Mawar.jpg'),
(8, 'A-0008', 'Kispray Melati', 'Melati', 'Melati.jpg'),
(9, 'A-0009', 'Molto ', 'Pewangi Baju', 'Molto.jpg'),
(10, 'A-0010', 'Bulgari Men', 'Parfum', 'Bulgari.jpg'),
(11, 'A-0001', 'Nivea Body Lotion', '', '5 - TIESTO.jpg'),
(12, '', '', '', ''),
(13, 'A-0001', 'Nivea Body Lotion', '', ''),
(14, 'A-0001', 'Nivea Body Lotion', 'ajsajsh', ''),
(15, 'A-0001', 'Nivea Body Lotion', 'ajsajsh', ''),
(16, 'A-0001', 'Nivea Body Lotion', 'ajsajsh', ''),
(17, 'A-0001', 'hjhjhjhj', 'hjhjhjh', '5 - TIESTO.jpg'),
(18, 'A-0001', 'hjhjhjhj', 'hjhjhjh', '5 - TIESTO.jpg'),
(19, 'A-0001', 'hjhjhjhj', 'hjhjhjh', '5 - TIESTO.jpg'),
(20, 'A-0001', 'hjhjhjhj', 'hjhjhjh', '5 - TIESTO.jpg'),
(21, 'A-0001', 'hjhjhjhj', 'hjhjhjh', '5 - TIESTO.jpg'),
(22, 'A-0001', 'hjhjhjhj', 'hjhjhjh', '5 - TIESTO.jpg'),
(23, 'A-0001', 'Nivea Body Lotion', 'tttt', '5 - TIESTO.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_product`
--
ALTER TABLE `table_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_product`
--
ALTER TABLE `table_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
