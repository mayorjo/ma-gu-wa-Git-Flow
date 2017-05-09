-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 05 Avril 2017 à 15:06
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db_gesproj2`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_former`
--

CREATE TABLE `t_former` (
  `idFormer` int(11) NOT NULL,
  `forName` varchar(25) NOT NULL,
  `forFirstname` varchar(25) NOT NULL,
  `forAddress` varchar(35) NOT NULL,
  `forEmail` varchar(55) NOT NULL,
  `forPhoneNumber` varchar(25) NOT NULL,
  `forJob` varchar(25) NOT NULL,
  `forAVSNumber` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `t_former`
--

INSERT INTO `t_former` (`idFormer`, `forName`, `forFirstname`, `forAddress`, `forEmail`, `forPhoneNumber`, `forJob`, `forAVSNumber`) VALUES
(1, 'Gruaz', 'Gilbert', 'Route du bourgot 4', 'ggz@signe.ch', '01450174521', 'Professeur', '132.7894.6545.76'),
(2, 'Stucki', 'Isabelle', 'Rue dela cuisine 1', 'jes@ispas.moi', '465988635441', 'Professeur', '784.6514.3548.56'),
(3, 'Karim', 'Bourhala', 'Ch. de la casquette du diable 5', 'vouallebien@assitantsocial.ch', '654654654654', 'Professeur', '546.4916.5845.66'),
(4, 'Patrick', 'Chenaux', 'Avenue du couloir infini 42', 'ilestpasla@infiniti.com', '654651635161', 'Professeur', '654.7841.4986.35');

-- --------------------------------------------------------

--
-- Structure de la table `t_participate`
--

CREATE TABLE `t_participate` (
  `parValidate` tinyint(1) NOT NULL,
  `idTraining` int(11) NOT NULL,
  `idStudent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `t_participate`
--

INSERT INTO `t_participate` (`parValidate`, `idTraining`, `idStudent`) VALUES
(0, 1, 6),
(0, 1, 7),
(0, 2, 2),
(0, 2, 8),
(0, 3, 1),
(0, 3, 5),
(0, 4, 3),
(0, 4, 4),
(0, 4, 9);

-- --------------------------------------------------------

--
-- Structure de la table `t_sequence`
--

CREATE TABLE `t_sequence` (
  `idSequence` int(11) NOT NULL,
  `seqDate` date NOT NULL,
  `seqTime` time NOT NULL,
  `seqStartTime` time NOT NULL,
  `idTraining` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `t_sequence`
--

INSERT INTO `t_sequence` (`idSequence`, `seqDate`, `seqTime`, `seqStartTime`, `idTraining`) VALUES
(1, '2017-04-12', '01:30:00', '08:00:00', 1),
(2, '2017-04-19', '01:30:00', '08:00:00', 1),
(3, '2017-05-31', '02:00:00', '13:10:00', 2),
(4, '2017-06-07', '02:00:00', '13:10:00', 2),
(5, '2017-03-31', '01:15:00', '09:55:00', 3),
(6, '2017-04-07', '01:15:00', '09:55:00', 3),
(7, '2017-04-14', '01:15:00', '09:55:00', 3),
(8, '2017-04-21', '01:15:00', '09:55:00', 3);

-- --------------------------------------------------------

--
-- Structure de la table `t_student`
--

CREATE TABLE `t_student` (
  `idStudent` int(11) NOT NULL,
  `stuName` varchar(25) NOT NULL,
  `stuFirstname` varchar(25) NOT NULL,
  `stuAddress` varchar(55) NOT NULL,
  `stuEmail` varchar(35) NOT NULL,
  `stuPhoneNumber` varchar(25) NOT NULL,
  `stuAVSNumber` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `t_student`
--

INSERT INTO `t_student` (`idStudent`, `stuName`, `stuFirstname`, `stuAddress`, `stuEmail`, `stuPhoneNumber`, `stuAVSNumber`) VALUES
(1, 'Trou', 'Jean', 'Ch. des fleurs toutes vertes 3', 'trouje@hotmail.com', '079 479 81 87', '123.1234.1234.12'),
(2, 'Terrieur', 'Alex', 'Rte. de l’intérieur 8', 'jsuisdedans@yahoo.fr', '077 654 25 78', '147.1478.1478.41'),
(3, 'Colombo', 'Fabian', 'Rte de l\'inspecteur 3', 'jesuisunwarrior@hotmail.com', '078 471 62 95', '164.1456.6154.20'),
(4, 'Jonathan', 'Mayor', 'Ch. de la Chine 7', 'mayorjonat@yahoo.fr', '021 955 53 58', '768.1654.5245.32'),
(5, 'Gomes', 'André', 'Route de la gare 8', 'gomess@gmail.com', '079 562 84 35', '156.3786.1987.20'),
(6, 'Thomas', 'Aurélien', 'Rte. de la Grèce 9', 'oreille@yahoo.fr', '077 652 84 61', '543.1985.4532.23'),
(7, 'Jérome', 'Wassenberg', 'Ch. de l\'eau de la montagne 9', 'wassebeje@etml.educanet2.ch', '076 264 95 34', '032.7686.7368.32'),
(8, 'Dadié', 'Samuel', 'Route sombre 2', 'daddy@gmail.com', '079 523 95 59', '213.3786.1879.56'),
(9, 'Poget', 'Poget', 'Rue marine 7', 'imbluedabudidabuda@yahoo.fr', '078 621 35 95', '235.2548.2659.36');

-- --------------------------------------------------------

--
-- Structure de la table `t_training`
--

CREATE TABLE `t_training` (
  `idTraining` int(11) NOT NULL,
  `traWording` varchar(25) NOT NULL,
  `traDuration` time NOT NULL,
  `traStartDate` date NOT NULL,
  `traMinPlace` int(11) NOT NULL,
  `traMaxPlace` int(11) NOT NULL,
  `idFormer` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `t_training`
--

INSERT INTO `t_training` (`idTraining`, `traWording`, `traDuration`, `traStartDate`, `traMinPlace`, `traMaxPlace`, `idFormer`) VALUES
(1, 'Hardware', '03:00:00', '2017-04-12', 5, 15, 2),
(2, 'Prog', '04:00:00', '2017-05-31', 3, 10, 4),
(3, 'Réseau ', '05:00:00', '2017-03-31', 3, 10, 3),
(4, 'Powershell', '04:00:00', '2017-02-21', 6, 8, 4);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `t_former`
--
ALTER TABLE `t_former`
  ADD PRIMARY KEY (`idFormer`);

--
-- Index pour la table `t_participate`
--
ALTER TABLE `t_participate`
  ADD PRIMARY KEY (`idTraining`,`idStudent`),
  ADD KEY `FK_t_participate_idStudent` (`idStudent`);

--
-- Index pour la table `t_sequence`
--
ALTER TABLE `t_sequence`
  ADD PRIMARY KEY (`idSequence`),
  ADD KEY `FK_t_sequence_idTraining` (`idTraining`);

--
-- Index pour la table `t_student`
--
ALTER TABLE `t_student`
  ADD PRIMARY KEY (`idStudent`);

--
-- Index pour la table `t_training`
--
ALTER TABLE `t_training`
  ADD PRIMARY KEY (`idTraining`),
  ADD KEY `FK_t_training_idFormer` (`idFormer`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `t_former`
--
ALTER TABLE `t_former`
  MODIFY `idFormer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `t_sequence`
--
ALTER TABLE `t_sequence`
  MODIFY `idSequence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `t_student`
--
ALTER TABLE `t_student`
  MODIFY `idStudent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `t_training`
--
ALTER TABLE `t_training`
  MODIFY `idTraining` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `t_participate`
--
ALTER TABLE `t_participate`
  ADD CONSTRAINT `FK_t_participate_idStudent` FOREIGN KEY (`idStudent`) REFERENCES `t_student` (`idStudent`),
  ADD CONSTRAINT `FK_t_participate_idTraining` FOREIGN KEY (`idTraining`) REFERENCES `t_training` (`idTraining`);

--
-- Contraintes pour la table `t_sequence`
--
ALTER TABLE `t_sequence`
  ADD CONSTRAINT `FK_t_sequence_idTraining` FOREIGN KEY (`idTraining`) REFERENCES `t_training` (`idTraining`);

--
-- Contraintes pour la table `t_training`
--
ALTER TABLE `t_training`
  ADD CONSTRAINT `FK_t_training_idFormer` FOREIGN KEY (`idFormer`) REFERENCES `t_former` (`idFormer`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
