-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  Dim 18 mars 2018 à 19:25
-- Version du serveur :  5.7.21-0ubuntu0.16.04.1
-- Version de PHP :  7.2.3-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `foodtruck`
--

-- --------------------------------------------------------

--
-- Structure de la table `accompagnement`
--

CREATE TABLE `accompagnement` (
  `idaccompagnement` int(11) NOT NULL,
  `accompagnement` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `accompagnement`
--

INSERT INTO `accompagnement` (`idaccompagnement`, `accompagnement`) VALUES
(1, 'frites'),
(2, 'potatoes');

-- --------------------------------------------------------

--
-- Structure de la table `boisson`
--

CREATE TABLE `boisson` (
  `idboisson` int(11) NOT NULL,
  `boisson` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `boisson`
--

INSERT INTO `boisson` (`idboisson`, `boisson`) VALUES
(1, 'coca'),
(2, 'fanta');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `idcommande` int(11) NOT NULL,
  `idmembre` int(11) DEFAULT NULL,
  `idqrcode` int(11) DEFAULT NULL,
  `date_creation` date NOT NULL,
  `date_livraison` date NOT NULL,
  `idcommandemenu` int(11) DEFAULT NULL,
  `idcommandeplat` int(11) DEFAULT NULL,
  `idcommandeboissson` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `composition_commande`
--

CREATE TABLE `composition_commande` (
  `idcomposition_commande` int(11) NOT NULL,
  `idcommande` int(11) NOT NULL,
  `idmenu` int(11) DEFAULT NULL,
  `idplat` int(11) DEFAULT NULL,
  `idboisson` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `legume`
--

CREATE TABLE `legume` (
  `idlegume` int(11) NOT NULL,
  `legume` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `legume`
--

INSERT INTO `legume` (`idlegume`, `legume`) VALUES
(1, 'salade'),
(2, 'tomate'),
(3, 'oignon');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `idmembre` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmation_token` varchar(255) NOT NULL,
  `actif` tinyint(1) DEFAULT '0',
  `date_creation` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE `menu` (
  `idmenu` int(11) NOT NULL,
  `idplat` int(11) DEFAULT NULL,
  `menu` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `menu`
--

INSERT INTO `menu` (`idmenu`, `idplat`, `menu`) VALUES
(1, 1, 'Kebab');

-- --------------------------------------------------------

--
-- Structure de la table `menu_boisson`
--

CREATE TABLE `menu_boisson` (
  `idmenu` int(11) NOT NULL,
  `idboisson` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `idmessage` int(11) NOT NULL,
  `idsujet` int(11) NOT NULL COMMENT '	',
  `idmembre` int(11) NOT NULL,
  `message` longtext,
  `date_creation` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `plat`
--

CREATE TABLE `plat` (
  `idplat` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `prix` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `plat`
--

INSERT INTO `plat` (`idplat`, `nom`, `prix`) VALUES
(1, 'kebab', 5.5),
(2, 'tacos', 5.3),
(3, 'bucket', 4.3);

-- --------------------------------------------------------

--
-- Structure de la table `plat_accompagnement`
--

CREATE TABLE `plat_accompagnement` (
  `idplat` int(11) NOT NULL,
  `idacompagnement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `plat_accompagnement`
--

INSERT INTO `plat_accompagnement` (`idplat`, `idacompagnement`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `plat_legume`
--

CREATE TABLE `plat_legume` (
  `idplat` int(11) NOT NULL,
  `idlegume` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `plat_legume`
--

INSERT INTO `plat_legume` (`idplat`, `idlegume`) VALUES
(1, 1),
(1, 2),
(1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `plat_quantite`
--

CREATE TABLE `plat_quantite` (
  `idplat` int(11) NOT NULL,
  `idquantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `plat_sauce`
--

CREATE TABLE `plat_sauce` (
  `idplat` int(11) NOT NULL,
  `idsauce` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `plat_viande`
--

CREATE TABLE `plat_viande` (
  `idplat` int(11) NOT NULL,
  `idviande` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `plat_viande`
--

INSERT INTO `plat_viande` (`idplat`, `idviande`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 2),
(2, 3);

-- --------------------------------------------------------

--
-- Structure de la table `quantite`
--

CREATE TABLE `quantite` (
  `idquantite` int(11) NOT NULL,
  `quantite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sauce`
--

CREATE TABLE `sauce` (
  `idsauce` int(11) NOT NULL,
  `sauce` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `viande`
--

CREATE TABLE `viande` (
  `idviande` int(11) NOT NULL,
  `viande` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `viande`
--

INSERT INTO `viande` (`idviande`, `viande`) VALUES
(1, 'poulet'),
(2, 'kebab'),
(3, 'chili');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `accompagnement`
--
ALTER TABLE `accompagnement`
  ADD PRIMARY KEY (`idaccompagnement`);

--
-- Index pour la table `boisson`
--
ALTER TABLE `boisson`
  ADD PRIMARY KEY (`idboisson`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`idcommande`),
  ADD UNIQUE KEY `idqrcode_UNIQUE` (`idqrcode`);

--
-- Index pour la table `composition_commande`
--
ALTER TABLE `composition_commande`
  ADD PRIMARY KEY (`idcomposition_commande`);

--
-- Index pour la table `legume`
--
ALTER TABLE `legume`
  ADD PRIMARY KEY (`idlegume`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`idmembre`),
  ADD UNIQUE KEY `pseudo_UNIQUE` (`pseudo`);

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idmenu`);

--
-- Index pour la table `menu_boisson`
--
ALTER TABLE `menu_boisson`
  ADD PRIMARY KEY (`idmenu`),
  ADD KEY `fk_menu_boisson_2_idx` (`idboisson`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`idmessage`),
  ADD KEY `fk_message_2_idx` (`idmembre`);

--
-- Index pour la table `plat`
--
ALTER TABLE `plat`
  ADD PRIMARY KEY (`idplat`);

--
-- Index pour la table `plat_accompagnement`
--
ALTER TABLE `plat_accompagnement`
  ADD KEY `fk_plat_accompagnement_2_idx` (`idplat`),
  ADD KEY `fk_plat_accompagnement_1_idx` (`idacompagnement`) USING BTREE;

--
-- Index pour la table `plat_sauce`
--
ALTER TABLE `plat_sauce`
  ADD KEY `fk_plat_sauce_sauce1_idx` (`idsauce`);

--
-- Index pour la table `quantite`
--
ALTER TABLE `quantite`
  ADD PRIMARY KEY (`idquantite`);

--
-- Index pour la table `sauce`
--
ALTER TABLE `sauce`
  ADD PRIMARY KEY (`idsauce`);

--
-- Index pour la table `viande`
--
ALTER TABLE `viande`
  ADD PRIMARY KEY (`idviande`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `boisson`
--
ALTER TABLE `boisson`
  MODIFY `idboisson` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `composition_commande`
--
ALTER TABLE `composition_commande`
  MODIFY `idcomposition_commande` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `legume`
--
ALTER TABLE `legume`
  MODIFY `idlegume` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `idmembre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `menu`
--
ALTER TABLE `menu`
  MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `plat`
--
ALTER TABLE `plat`
  MODIFY `idplat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `quantite`
--
ALTER TABLE `quantite`
  MODIFY `idquantite` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `sauce`
--
ALTER TABLE `sauce`
  MODIFY `idsauce` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `viande`
--
ALTER TABLE `viande`
  MODIFY `idviande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `menu_boisson`
--
ALTER TABLE `menu_boisson`
  ADD CONSTRAINT `fk_menu_boisson_1` FOREIGN KEY (`idmenu`) REFERENCES `menu` (`idmenu`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_menu_boisson_2` FOREIGN KEY (`idboisson`) REFERENCES `boisson` (`idboisson`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `fk_message_2` FOREIGN KEY (`idmembre`) REFERENCES `membre` (`idmembre`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Contraintes pour la table `plat_accompagnement`
--
ALTER TABLE `plat_accompagnement`
  ADD CONSTRAINT `fk_plat_accompagnement_1` FOREIGN KEY (`idacompagnement`) REFERENCES `accompagnement` (`idaccompagnement`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_plat_accompagnement_2` FOREIGN KEY (`idplat`) REFERENCES `plat` (`idplat`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `plat_sauce`
--
ALTER TABLE `plat_sauce`
  ADD CONSTRAINT `fk_plat_sauce_sauce1` FOREIGN KEY (`idsauce`) REFERENCES `sauce` (`idsauce`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;