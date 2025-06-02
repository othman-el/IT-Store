-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
<<<<<<< HEAD
-- Généré le : mer. 28 mai 2025 à 11:12
=======
-- Généré le : mer. 28 mai 2025 à 11:02
>>>>>>> 2b04545 (modifie)
-- Version du serveur : 9.1.0
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

<<<<<<< HEAD

=======
 
>>>>>>> 19f7322821a3b8d20ca2c309b777a2f82dbca029
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int NOT NULL AUTO_INCREMENT,
  `lebelle` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `icon` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categorie`
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
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int NOT NULL AUTO_INCREMENT,
  `lebelle` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `id_categorie` int NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=253 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `lebelle`, `description`, `prix`, `image`, `id_categorie`, `date_creation`) VALUES
(12, 'Lenevo ThinkPad E14 Gen 4 (14', 'Intel Core i3-1215U (12e génération)\r\n 16GB DDR4, multitâches fluide  SSD 256GB, rapidité & espace sécurisé 14,0″ Full HD (1920×1080), visuels nets\r\nChâssis robuste, design professionnel\r\nClavier confortable \r\n', 3500, '6835d0fb09ba2lenovo-laptops-thinkpad-E14-gen-4-14-amd-hero.avif', 12, '2025-05-27 15:49:31'),
(32, 'MSI PRO MP243 IPS 23.8', '1920 x 1080 pixels - 5 ms (gris à gris) \r\n', 1600, '6835c69d58e07msi-pro-mp243-ips-238.jpg', 2, '2025-05-27 15:05:17'),
(251, 'HP 15-fc0017nk (886J7EA)', 'AMD Ryzen™ 5 7520U (jusqu’à 4,3 GHz de fréquence Boost maximale, mémoire cache L3 4 Mo, 4 cœurs, 8 threads)\r\nRAM: 8 Go de mémoire RAM LPDDR5-5500 MHz (intégrée)\r\nDisque dur: SSD PCIe® NVMe™ M.2 512 Go\r\nÉcran: Full HD d’une diagonale de 39,6 cm (15,6 pouces', 6000, '6836d5b2991a823c1_intel_opp_rameses_14_ffplus_wwan_n1_1_.jpg', 12, '2025-05-28 10:21:54'),
(252, 'Asus Vivobook 15 X1504VA-NJ814W', 'Intel® Core™ i3-1315U Processor 1.2 GHz (10MB Cache, up to 4.5 GHz, 6 cores, 8 Threads)\r\nRAM: 8GB DDR4 on board\r\nDisque dur: 512GB M.2 NVMe™ PCIe® 3.0 SSD\r\nÉcran: 15.6\" FHD (1920 x 1080) 16:9 aspect ratio, 60Hz refresh rate, 250nits\r\nCarte graphique: Intel', 5520, '6836d6ac17e1a4cdec86c17d881163ef77401a7b6b1d8.jpg', 12, '2025-05-28 10:26:04');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `date_creation` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `date_creation`) VALUES
(3, 'othman', '', '2025-05-16'),
(4, 'etst', '', '2025-05-16'),
(5, 'test', '123', '2025-05-19'),
(6, 'othman', '123', '2025-05-19'),
(7, 'othman khrouf', '123', '2025-05-26'),
(8, 'test', '123', '2025-05-27');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
