-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 16 déc. 2024 à 09:38
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
-- Base de données : `fortress`
--

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

DROP TABLE IF EXISTS `joueur`;
CREATE TABLE IF NOT EXISTS `joueur` (
  `id_joueur` int NOT NULL AUTO_INCREMENT,
  `pseudo` text COLLATE utf8mb4_general_ci NOT NULL,
  `email` text COLLATE utf8mb4_general_ci NOT NULL,
  `date_inscription` date NOT NULL,
  `score` int NOT NULL,
  PRIMARY KEY (`id_joueur`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `joueur`
--

INSERT INTO `joueur` (`id_joueur`, `pseudo`, `email`, `date_inscription`, `score`) VALUES
(1, 'noah', 'noah@gmail.com', '2024-12-10', 1500),
(2, 'jordan', 'jordan@gmail.com', '2024-12-08', 1250),
(3, 'romaric', 'romaric@gmail.com', '2024-12-04', 250),
(4, 'romain', 'romain@gmail.com', '2019-12-04', 2);

-- --------------------------------------------------------

--
-- Structure de la table `partie`
--

DROP TABLE IF EXISTS `partie`;
CREATE TABLE IF NOT EXISTS `partie` (
  `id_partie` int NOT NULL AUTO_INCREMENT,
  `id_joueur` int NOT NULL,
  `date_partie` date NOT NULL,
  `score` int NOT NULL,
  PRIMARY KEY (`id_partie`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `partie`
--

INSERT INTO `partie` (`id_partie`, `id_joueur`, `date_partie`, `score`) VALUES
(14, 13, '2024-12-13', 250),
(13, 12, '2024-12-13', 750),
(11, 11, '2024-12-13', 1500);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `parties_sans_utilisateur`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `parties_sans_utilisateur`;
CREATE TABLE IF NOT EXISTS `parties_sans_utilisateur` (
`id_partie` int
,`date_partie` date
,`score` int
);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `login` text COLLATE utf8mb4_general_ci NOT NULL,
  `mdp` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `mdp`) VALUES
(1, 'user', 'code=4AGERB26'),
(2, 'admin', 'code=4AGERB26'),
(3, 'utilisateur', 'code=4AGERB26');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `utilisateurs_sans_email`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `utilisateurs_sans_email`;
CREATE TABLE IF NOT EXISTS `utilisateurs_sans_email` (
`id_joueur` int
,`pseudo` text
,`date_inscription` date
,`score` int
);

-- --------------------------------------------------------

--
-- Structure de la vue `parties_sans_utilisateur`
--
DROP TABLE IF EXISTS `parties_sans_utilisateur`;

DROP VIEW IF EXISTS `parties_sans_utilisateur`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `parties_sans_utilisateur`  AS SELECT `partie`.`id_partie` AS `id_partie`, `partie`.`date_partie` AS `date_partie`, `partie`.`score` AS `score` FROM `partie` ORDER BY `partie`.`date_partie` DESC LIMIT 0, 3 ;

-- --------------------------------------------------------

--
-- Structure de la vue `utilisateurs_sans_email`
--
DROP TABLE IF EXISTS `utilisateurs_sans_email`;

DROP VIEW IF EXISTS `utilisateurs_sans_email`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `utilisateurs_sans_email`  AS SELECT `joueur`.`id_joueur` AS `id_joueur`, `joueur`.`pseudo` AS `pseudo`, `joueur`.`date_inscription` AS `date_inscription`, `joueur`.`score` AS `score` FROM `joueur` ORDER BY `joueur`.`date_inscription` DESC LIMIT 0, 3 ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
