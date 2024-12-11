-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 11 déc. 2024 à 08:53
-- Version du serveur : 8.3.0
-- Version de PHP : 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gamelib`
--

-- --------------------------------------------------------

--
-- Structure de la table `amiibo`
--

DROP TABLE IF EXISTS `amiibo`;
CREATE TABLE IF NOT EXISTS `amiibo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `etat_amiibo_id` int DEFAULT NULL,
  `id_amiibo` int NOT NULL,
  `nom_amiibo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_amiibo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_9826F36A3E0FFA31` (`etat_amiibo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `amiibo`
--

INSERT INTO `amiibo` (`id`, `etat_amiibo_id`, `id_amiibo`, `nom_amiibo`, `img_amiibo`) VALUES
(1, 1, 301, 'Link - Archer', 'link_archer.png'),
(2, 2, 302, 'Mario - Classic', 'mario_classic.png'),
(3, 3, 303, 'Samus - Varia Suit', 'samus_varia.png');

-- --------------------------------------------------------

--
-- Structure de la table `console`
--

DROP TABLE IF EXISTS `console`;
CREATE TABLE IF NOT EXISTS `console` (
  `id` int NOT NULL AUTO_INCREMENT,
  `etat_console_id` int DEFAULT NULL,
  `id_console` int NOT NULL,
  `nom_console` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_console` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_3603CFB6DBB5E18A` (`etat_console_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `console`
--

INSERT INTO `console` (`id`, `etat_console_id`, `id_console`, `nom_console`, `img_console`) VALUES
(1, 1, 101, 'Nintendo Switch', 'nintendo_switch.png'),
(2, 2, 102, 'PlayStation 5', 'playstation_5.png'),
(3, 3, 103, 'Xbox Series X', 'xbox_series_x.png');

-- --------------------------------------------------------

--
-- Structure de la table `etat`
--

DROP TABLE IF EXISTS `etat`;
CREATE TABLE IF NOT EXISTS `etat` (
  `id` int NOT NULL AUTO_INCREMENT,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etat`
--

INSERT INTO `etat` (`id`, `etat`) VALUES
(1, 'complet'),
(2, 'incomplet'),
(3, 'dégradé');

-- --------------------------------------------------------

--
-- Structure de la table `jeu`
--

DROP TABLE IF EXISTS `jeu`;
CREATE TABLE IF NOT EXISTS `jeu` (
  `id` int NOT NULL AUTO_INCREMENT,
  `console_jeu_id` int DEFAULT NULL,
  `etat_jeu_id` int NOT NULL,
  `id_jeu` int NOT NULL,
  `nom_jeu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_jeu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_82E48DB54456D5FB` (`console_jeu_id`),
  KEY `IDX_82E48DB53E65A52A` (`etat_jeu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `jeu`
--

INSERT INTO `jeu` (`id`, `console_jeu_id`, `etat_jeu_id`, `id_jeu`, `nom_jeu`, `img_jeu`) VALUES
(1, 1, 1, 201, 'The Legend of Zelda: Breath of the Wild', 'zelda_botw.png'),
(2, 2, 2, 202, 'Spider-Man: Miles Morales', 'spiderman_mm.png'),
(3, 3, 3, 203, 'Halo Infinite', 'halo_infinite.png');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mdp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `mdp`) VALUES
(1, 'Monseigneur Dallier', 'admin123');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `amiibo`
--
ALTER TABLE `amiibo`
  ADD CONSTRAINT `FK_9826F36A3E0FFA31` FOREIGN KEY (`etat_amiibo_id`) REFERENCES `etat` (`id`);

--
-- Contraintes pour la table `console`
--
ALTER TABLE `console`
  ADD CONSTRAINT `FK_3603CFB6DBB5E18A` FOREIGN KEY (`etat_console_id`) REFERENCES `etat` (`id`);

--
-- Contraintes pour la table `jeu`
--
ALTER TABLE `jeu`
  ADD CONSTRAINT `FK_82E48DB53E65A52A` FOREIGN KEY (`etat_jeu_id`) REFERENCES `etat` (`id`),
  ADD CONSTRAINT `FK_82E48DB54456D5FB` FOREIGN KEY (`console_jeu_id`) REFERENCES `console` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
