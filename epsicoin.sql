-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 10 avr. 2018 à 13:34
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `epsicoin`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(25) DEFAULT NULL,
  `Prenom` varchar(25) DEFAULT NULL,
  `Annee` varchar(25) DEFAULT NULL,
  `Identifiant` varchar(25) DEFAULT NULL,
  `Mdp` varchar(25) DEFAULT NULL,
  `RefGroupe` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `FK_Etudiant_RefGroupe_1` (`RefGroupe`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`Id`, `Nom`, `Prenom`, `Annee`, `Identifiant`, `Mdp`, `RefGroupe`) VALUES
(1, 'Cavrois', 'Benoit', 'B3', 'etudiant', 'password', 1),
(2, 'Duisant', 'Cristofer', 'B3', 'etudiant', 'password', 1),
(3, 'Lotigier', 'Louis', 'B3', 'etudiant', 'password', 1),
(4, 'Bouslah', 'Nadir', 'B3', 'etudiant', 'password', 1),
(5, 'Clerbout', 'Jérôme', 'B3', 'etudiant', 'password', 1),
(6, 'Desoomer', 'Pierre-Henri', 'B3', 'etudiant', 'password', 2),
(7, 'Desmis', 'Gabin', 'B3', 'etudiant', 'password', 2),
(8, 'Coupé', 'Paul', 'B3', 'etudiant', 'password', 2),
(9, 'Guittard', 'Jonathan', 'B3', 'etudiant', 'password', 2),
(10, 'Minne', 'Pierre-Yves', 'B3', 'etudiant', 'password', 2),
(11, 'Taibi', 'Hasnae', 'B3', 'etudiant', 'password', 3),
(12, 'Pakhomoff', 'Aliocha', 'B3', 'etudiant', 'password', 3),
(13, 'Guazzoni', 'Damien', 'B3', 'etudiant', 'password', 3),
(14, 'Maton', 'Maxence', 'B3', 'etudiant', 'password', 3);

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

DROP TABLE IF EXISTS `groupe`;
CREATE TABLE IF NOT EXISTS `groupe` (
  `RefGroupe` int(11) NOT NULL AUTO_INCREMENT,
  `NomGroupe` varchar(25) DEFAULT NULL,
  `JetonA` int(11) DEFAULT NULL,
  `JetonB` int(11) DEFAULT NULL,
  `JetonC` int(11) DEFAULT NULL,
  `Id_Projet` int(11) DEFAULT NULL,
  PRIMARY KEY (`RefGroupe`),
  KEY `FK_Groupe_Id_Projet_1` (`Id_Projet`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `groupe`
--

INSERT INTO `groupe` (`RefGroupe`, `NomGroupe`, `JetonA`, `JetonB`, `JetonC`, `Id_Projet`) VALUES
(1, 'Groupe1', 3, 2, 1, 1),
(2, 'Groupe2', 3, 2, 1, 1),
(3, 'Groupe3', 3, 2, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `intervenant`
--

DROP TABLE IF EXISTS `intervenant`;
CREATE TABLE IF NOT EXISTS `intervenant` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Identifiant` varchar(25) DEFAULT NULL,
  `Mdp` varchar(25) DEFAULT NULL,
  `Nom` varchar(25) DEFAULT NULL,
  `Prenom` varchar(25) DEFAULT NULL,
  `Specialite` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `intervenant`
--

INSERT INTO `intervenant` (`Id`, `Identifiant`, `Mdp`, `Nom`, `Prenom`, `Specialite`) VALUES
(1, 'intervenant', 'password', 'Dubois', 'Julien', 'Réseau'),
(2, 'intervenant', 'password', 'Even', 'Rémi', 'Java'),
(3, 'intervenant', 'password', 'Deliessche', 'Christian', 'Infrastructure');

-- --------------------------------------------------------

--
-- Structure de la table `jeton`
--

DROP TABLE IF EXISTS `jeton`;
CREATE TABLE IF NOT EXISTS `jeton` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `JetonA` int(11) DEFAULT NULL,
  `JetonB` int(11) DEFAULT NULL,
  `JetonC` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `jeton`
--

INSERT INTO `jeton` (`Id`, `JetonA`, `JetonB`, `JetonC`) VALUES
(1, 5, 15, 30);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE IF NOT EXISTS `projet` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `NomProjet` varchar(25) DEFAULT NULL,
  `Id_Responsable_pedagogique` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`Id`, `NomProjet`, `Id_Responsable_pedagogique`) VALUES
(1, 'Workshop', 1);

-- --------------------------------------------------------

--
-- Structure de la table `responsable_pedagogique`
--

DROP TABLE IF EXISTS `responsable_pedagogique`;
CREATE TABLE IF NOT EXISTS `responsable_pedagogique` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(25) DEFAULT NULL,
  `Prenom` varchar(25) DEFAULT NULL,
  `Identifiant` varchar(25) DEFAULT NULL,
  `Mdp` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `responsable_pedagogique`
--

INSERT INTO `responsable_pedagogique` (`Id`, `Nom`, `Prenom`, `Identifiant`, `Mdp`) VALUES
(1, 'Alamasset', 'Eddie', 'pedago', 'password');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `FK_Etudiant_RefGroupe_1` FOREIGN KEY (`RefGroupe`) REFERENCES `groupe` (`RefGroupe`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
