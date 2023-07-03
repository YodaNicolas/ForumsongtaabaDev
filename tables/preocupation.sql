-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 03 juil. 2023 à 10:46
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `forum_dclic`
--

-- --------------------------------------------------------

--
-- Structure de la table `preocupation`
--

CREATE TABLE `preocupation` (
  `id_preocupation` int(11) NOT NULL,
  `id_sujet` int(11) NOT NULL,
  `id_etat` int(11) NOT NULL,
  `id_preocupe` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `preocupation`
--
ALTER TABLE `preocupation`
  ADD PRIMARY KEY (`id_preocupation`),
  ADD KEY `id_sujet` (`id_sujet`),
  ADD KEY `id_etat` (`id_etat`),
  ADD KEY `id_preocupe` (`id_preocupe`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `preocupation`
--
ALTER TABLE `preocupation`
  MODIFY `id_preocupation` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
