-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 02, 2025 at 12:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `produit_image`
--

CREATE TABLE `produit_image` (
  `id` int(11) NOT NULL,
  `produit_id` int(11) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produit_image`
--

INSERT INTO `produit_image` (`id`, `produit_id`, `image_path`) VALUES
(30, 265, '68399d9e3e834_0be5e36320729cf37f735e9ee851d826.jpg'),
(31, 265, '68399d9e3f6c4_0c17b6aa216039da6f07b3a15e6b0c6b.jpg'),
(32, 265, '68399d9e40160_0ce9a076f28824e7f185bb9c11416ee4.jpg'),
(33, 266, '6839b4e63a844_0be5e36320729cf37f735e9ee851d826.jpg'),
(34, 266, '6839b4e63baa7_0c17b6aa216039da6f07b3a15e6b0c6b.jpg'),
(35, 266, '6839b4e63cd8f_0ce9a076f28824e7f185bb9c11416ee4.jpg'),
(36, 267, '6839b515e0469_0b8a826cb6eacdd1819860a8bda4f748.jpg'),
(37, 267, '6839b515e0b1f_0be5e36320729cf37f735e9ee851d826.jpg'),
(38, 267, '6839b515e14aa_0c17b6aa216039da6f07b3a15e6b0c6b.jpg'),
(39, 267, '6839b515e29a8_0ce9a076f28824e7f185bb9c11416ee4.jpg'),
(40, 268, '6839b5c2ee3d1_5d5e6151b999b07c7158d6b7ad499182.jpg'),
(41, 268, '6839b5c2ef4b0_6c5d890e3d03323d88780b9934ff5d15.jpg'),
(42, 268, '6839b5c2f098a_6d8f7cc2d23353e5172f0b60ec856dbd.jpg'),
(43, 268, '6839b5c2f1505_6e56353b38eae488a86b447371eaf43a.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produit_image`
--
ALTER TABLE `produit_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produit_id` (`produit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produit_image`
--
ALTER TABLE `produit_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produit_image`
--
ALTER TABLE `produit_image`
  ADD CONSTRAINT `produit_image_ibfk_1` FOREIGN KEY (`produit_id`) REFERENCES `produit` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
