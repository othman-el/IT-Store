-- phpMyAdmin SQL Dump
 -- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 02, 2025 at 01:32 PM
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
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `lebelle` varchar(250) NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT current_timestamp(),
  `icon` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id`, `lebelle`, `date_creation`, `icon`) VALUES
(1, 'PC Bureau', '2025-05-19 14:58:14', 'fa-solid fa-computer'),
(2, 'Ecran', '2025-05-19 15:09:32', 'fa-solid fa-desktop'),
(3, 'Imprimante et Scanner', '2025-05-19 15:09:41', ''),
(4, 'Accessoire & Périphérique', '2025-05-19 15:09:53', 'fa-solid fa-keyboard'),
(5, 'Logiciel & OS', '2025-05-19 15:10:01', ''),
(6, 'Réseau', '2025-05-19 15:10:10', 'fa-solid fa-network-wired'),
(7, 'Serveur', '2025-05-19 15:10:17', 'fa-solid fa-server'),
(8, 'Tablette & Téléphone', '2025-05-19 15:10:25', 'fa-solid fa-tablet'),
(9, 'Image & Son', '2025-05-19 15:10:33', 'fa-solid fa-images'),
(10, 'Consommables', '2025-05-19 15:10:41', ''),
(11, 'Onduleur', '2025-05-19 15:10:48', ''),
(12, 'PC portable', '2025-05-19 15:29:56', 'fa-solid fa-laptop');

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `lebelle` varchar(250) NOT NULL,
  `description` varchar(256) NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `image` varchar(150) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id`, `lebelle`, `description`, `prix`, `image`, `id_categorie`, `date_creation`) VALUES
(271, 'fruits', 'test', 2000, '683d7dcd1685e_0b8a826cb6eacdd1819860a8bda4f748.jpg', 12, '2025-06-02 11:32:45'),
(272, 'fruits', 'tets', 2000, '683d891b0d58a_0ce9a076f28824e7f185bb9c11416ee4.jpg', 12, '2025-06-02 12:20:59');

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
(50, 271, '683d7dcd17662_0b8a826cb6eacdd1819860a8bda4f748.jpg'),
(51, 271, '683d7dcd17e27_0be5e36320729cf37f735e9ee851d826.jpg'),
(52, 271, '683d7dcd19048_0c17b6aa216039da6f07b3a15e6b0c6b.jpg'),
(53, 272, '683d891b0e3e2_0ce9a076f28824e7f185bb9c11416ee4.jpg'),
(54, 272, '683d891b0ecad_0d5ea33513280e0e04d63fa530fe7015.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `date_creation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `date_creation`) VALUES
(3, 'othman', '', '2025-05-16'),
(4, 'etst', '', '2025-05-16'),
(5, 'test', '123', '2025-05-19'),
(6, 'othman', '123', '2025-05-19'),
(7, 'othman khrouf', '123', '2025-05-26'),
(8, 'test', '123', '2025-05-27'),
(9, 'mohammed', '123', '2025-05-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produit_image`
--
ALTER TABLE `produit_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produit_id` (`produit_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=273;

--
-- AUTO_INCREMENT for table `produit_image`
--
ALTER TABLE `produit_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
