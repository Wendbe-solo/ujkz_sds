-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 20 mai 2022 à 21:06
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sds`
--

-- --------------------------------------------------------

--
-- Structure de la table `tuteur`
--

CREATE TABLE `tuteur` (
  `id` int(11) NOT NULL,
  `nomtu` varchar(255) NOT NULL,
  `prenomtu` varchar(255) NOT NULL,
  `emailtu` varchar(255) NOT NULL,
  `numerotu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tuteur`
--

INSERT INTO `tuteur` (`id`, `nomtu`, `prenomtu`, `emailtu`, `numerotu`) VALUES
(1, 'SAWADOGO', 'WENDBE', 'wendbenorbertsawadogo@gmail.com', 73737373),
(2, 'OUREDRAOGO', 'GERMAIN', 'fofofofofof@gmail.com', 23232323),
(3, 'Kabore', 'safi', 'safikabore@gmail.com', 2323868),
(4, 'Kabore', 'Pascao', 'pascaline@gmail.com', 72727272),
(5, 'KABORE', 'Aminata', 'aminata@gmail.com', 20020020),
(6, 'eeejej', 'jjjddj', 'kdkdkkds@gmail.com', 3984933);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tuteur`
--
ALTER TABLE `tuteur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tuteur`
--
ALTER TABLE `tuteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
