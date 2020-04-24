-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 23 Avril 2020 à 16:34
-- Version du serveur :  5.7.29-0ubuntu0.18.04.1
-- Version de PHP :  7.2.24-0ubuntu0.18.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `aventurier`
--

-- --------------------------------------------------------

--
-- Structure de la table `familier`
--

CREATE TABLE `familier` (
  `id_familier` int(11) NOT NULL,
  `nom_familier` varchar(255) DEFAULT NULL,
  `vie_max_familier` int(11) DEFAULT NULL,
  `vie_familier` int(11) DEFAULT NULL,
  `force_familier` int(11) DEFAULT NULL,
  `niveau_familier` int(11) DEFAULT NULL,
  `photo_familier` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `heros_id_heros` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `familier`
--

INSERT INTO `familier` (`id_familier`, `nom_familier`, `vie_max_familier`, `vie_familier`, `force_familier`, `niveau_familier`, `photo_familier`, `created_at`, `heros_id_heros`) VALUES
(1, 'Drahakko', 50, 42, 31, 11, 'familier4.png', '2020-04-23', 2),
(2, 'Trikats', 35, 35, 22, 7, 'familier1.png', '2020-04-23', 1),
(3, 'Bluepix', 30, 22, 28, 9, 'familier2.png', '2020-04-23', 1),
(4, 'Wolff', 40, 38, 33, 19, 'familier3.png', '2020-04-23', 2),
(5, 'Zarby', 17, 17, 8, 1, 'familier5.png', '2020-04-23', 1);

-- --------------------------------------------------------

--
-- Structure de la table `heros`
--

CREATE TABLE `heros` (
  `id_heros` int(11) NOT NULL,
  `nom_heros` varchar(255) DEFAULT NULL,
  `vie_max_heros` int(11) DEFAULT NULL,
  `vie_heros` int(11) DEFAULT NULL,
  `force_heros` int(11) DEFAULT NULL,
  `niveau_heros` int(11) DEFAULT NULL,
  `photo_heros` varchar(255) DEFAULT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `heros`
--

INSERT INTO `heros` (`id_heros`, `nom_heros`, `vie_max_heros`, `vie_heros`, `force_heros`, `niveau_heros`, `photo_heros`, `created_at`) VALUES
(1, 'Sayuka', 20, 17, 13, 5, 'guerriere.png', '2020-04-23'),
(2, 'Alahazar', 22, 15, 12, 4, 'guerrier.png', '2020-04-23');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `familier`
--
ALTER TABLE `familier`
  ADD PRIMARY KEY (`id_familier`),
  ADD KEY `fk_familier_heros_idx` (`heros_id_heros`);

--
-- Index pour la table `heros`
--
ALTER TABLE `heros`
  ADD PRIMARY KEY (`id_heros`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `familier`
--
ALTER TABLE `familier`
  MODIFY `id_familier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `heros`
--
ALTER TABLE `heros`
  MODIFY `id_heros` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `familier`
--
ALTER TABLE `familier`
  ADD CONSTRAINT `fk_familier_heros` FOREIGN KEY (`heros_id_heros`) REFERENCES `heros` (`id_heros`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
