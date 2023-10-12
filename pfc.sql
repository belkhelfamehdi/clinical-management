-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220607.1684aa8b89
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 14 juin 2022 à 11:21
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pfc`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(225) NOT NULL,
  `fullname` varchar(225) NOT NULL,
  `user` varchar(225) NOT NULL,
  `pwd` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `user`, `pwd`) VALUES
(1, 'admin', 'BasicAdmin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `num` int(11) NOT NULL,
  `id_p` int(11) NOT NULL,
  `id_e` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`num`, `id_p`, `id_e`) VALUES
(2, 16, 14);

-- --------------------------------------------------------

--
-- Structure de la table `cong`
--

CREATE TABLE `cong` (
  `num_cn` int(11) NOT NULL,
  `id_em` int(11) NOT NULL,
  `dated` date NOT NULL,
  `datef` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cong`
--

INSERT INTO `cong` (`num_cn`, `id_em`, `dated`, `datef`) VALUES
(10, 8, '2022-07-02', '2022-07-10'),
(11, 5, '2022-06-11', '2022-07-08');

-- --------------------------------------------------------

--
-- Structure de la table `consultation`
--

CREATE TABLE `consultation` (
  `num` int(11) NOT NULL,
  `date` date NOT NULL,
  `id_p` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `donneur`
--

CREATE TABLE `donneur` (
  `id` int(11) NOT NULL,
  `nom` varchar(225) NOT NULL,
  `prenom` varchar(225) NOT NULL,
  `numero` int(11) NOT NULL,
  `gs` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `donneur`
--

INSERT INTO `donneur` (`id`, `nom`, `prenom`, `numero`, `gs`) VALUES
(2, 'belkhelfa', 'mehdi', 2134854851, 'O+');

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE `employe` (
  `id` int(11) NOT NULL,
  `nom` varchar(225) NOT NULL,
  `prenom` varchar(225) NOT NULL,
  `daten` date NOT NULL,
  `dateem` date NOT NULL,
  `gen` varchar(225) NOT NULL,
  `num` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `fonction` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`id`, `nom`, `prenom`, `daten`, `dateem`, `gen`, `num`, `email`, `fonction`) VALUES
(4, 'larid', 'redouane', '2001-10-19', '2022-05-06', 'Homme', 2147483647, 'mehdi.belkhelfa@se.univ-bejaia.dz', ''),
(5, 'cjouieb', 'asma', '2022-05-20', '2022-06-04', 'Femme', 2147483647, 'faresbensalem87@gmail.com', ''),
(8, 'bensalem', 'fares', '2022-07-02', '2022-07-10', 'Homme', 2147483647, 'midou8687@gmail.com', ''),
(9, 'belkhelfa', 'khaled', '2022-06-11', '2022-06-25', 'Homme', 674666757, 'midou8687@gmail.com', ''),
(10, 'belkhelfa', 'mehdi', '2022-01-14', '2022-06-04', 'Femme', 2147483647, 'faresbensalem87@gmail.com', ''),
(12, 'guebghid', 'rocklee', '2022-06-10', '2022-06-25', 'Femme', 778558555, 'fisdeprutmaluemire@vtf.porn', 'Médecin'),
(13, 'fff', 'rr', '0000-00-00', '0000-00-00', '', 0, '', ''),
(14, 'bensalem', 'fares', '2022-06-15', '2022-06-02', 'Homme', 854545, 'faresbensalem87@gmail.com', 'Médecin'),
(16, 'bensalem', 'fares', '2022-06-02', '2022-06-11', 'Homme', 5875555, '', ''),
(17, 'fedf', '', '0000-00-00', '0000-00-00', '', 0, '', ''),
(18, 'bensalem', 'fares', '2022-06-21', '2022-06-16', 'Homme', 1615, 'faresbensalem87@gmail.com', 'Infirmier');

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `num` int(11) NOT NULL,
  `Montant` float NOT NULL,
  `id_p` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `facture`
--

INSERT INTO `facture` (`num`, `Montant`, `id_p`) VALUES
(7043, 6000, 18),
(15090, 500, 16),
(15165, 32000, 18);

-- --------------------------------------------------------

--
-- Structure de la table `medicament`
--

CREATE TABLE `medicament` (
  `numM` int(11) NOT NULL,
  `nom` varchar(225) NOT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `medicament`
--

INSERT INTO `medicament` (`numM`, `nom`, `quantite`) VALUES
(5236, 'ppp', 5),
(6875, 'gg', 25),
(55655, 'nm', 0);

-- --------------------------------------------------------

--
-- Structure de la table `ordonnance`
--

CREATE TABLE `ordonnance` (
  `id` int(11) NOT NULL,
  `date_ord` date NOT NULL,
  `id_em` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE `patient` (
  `id` int(50) NOT NULL,
  `nom` varchar(225) NOT NULL,
  `prenom` varchar(225) NOT NULL,
  `daten` date NOT NULL,
  `gen` varchar(225) NOT NULL,
  `num` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `addr` varchar(225) NOT NULL,
  `gs` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`id`, `nom`, `prenom`, `daten`, `gen`, `num`, `email`, `addr`, `gs`) VALUES
(15, 'belkhelfa', 'maroua', '2022-06-24', 'Homme', 674666594, 'midou8687@gmail.com', '56 S Liberty Dr, Stony Point', 'A-'),
(16, 'bensalem', 'fares', '2001-05-09', 'Homme', 674666945, 'faresbensalem87@gmail.com', 'ahemam', 'A+'),
(17, 'belkhelfa', 'mehdi', '2022-06-11', 'Homme', 778584819, 'midou8687@gmail.com', 'tichy', 'AB+'),
(18, 'tairi', 'mayess', '2010-06-09', 'Homme', 55848952, 'mehdi.belkhelfa@se.univ-bejaia.dz', 'Aokas, tizi nberber', 'A-');

-- --------------------------------------------------------

--
-- Structure de la table `salaire`
--

CREATE TABLE `salaire` (
  `id` int(11) NOT NULL,
  `salaire` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `salaire`
--

INSERT INTO `salaire` (`id`, `salaire`) VALUES
(4, 10000),
(5, 300000),
(9, 250000);

-- --------------------------------------------------------

--
-- Structure de la table `stocks`
--

CREATE TABLE `stocks` (
  `gs` varchar(225) NOT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `stocks`
--

INSERT INTO `stocks` (`gs`, `quantite`) VALUES
('A+', 10),
('A-', 11),
('B+', 5),
('B-', 0),
('AB+', 0),
('AB-', 0),
('O+', 4),
('O-', 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`num`),
  ADD KEY `chambre_ibfk_1` (`id_p`),
  ADD KEY `chambre_ibfk_2` (`id_e`);

--
-- Index pour la table `cong`
--
ALTER TABLE `cong`
  ADD PRIMARY KEY (`num_cn`),
  ADD KEY `cong_ibfk_1` (`id_em`);

--
-- Index pour la table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`num`);

--
-- Index pour la table `donneur`
--
ALTER TABLE `donneur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`num`),
  ADD KEY `id_p` (`id_p`);

--
-- Index pour la table `medicament`
--
ALTER TABLE `medicament`
  ADD PRIMARY KEY (`numM`);

--
-- Index pour la table `ordonnance`
--
ALTER TABLE `ordonnance`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `salaire`
--
ALTER TABLE `salaire`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `cong`
--
ALTER TABLE `cong`
  MODIFY `num_cn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `donneur`
--
ALTER TABLE `donneur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `employe`
--
ALTER TABLE `employe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `ordonnance`
--
ALTER TABLE `ordonnance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD CONSTRAINT `chambre_ibfk_1` FOREIGN KEY (`id_p`) REFERENCES `patient` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `chambre_ibfk_2` FOREIGN KEY (`id_e`) REFERENCES `employe` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `cong`
--
ALTER TABLE `cong`
  ADD CONSTRAINT `cong_ibfk_1` FOREIGN KEY (`id_em`) REFERENCES `employe` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `facture_ibfk_1` FOREIGN KEY (`id_p`) REFERENCES `patient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `salaire`
--
ALTER TABLE `salaire`
  ADD CONSTRAINT `salaire_ibfk_1` FOREIGN KEY (`id`) REFERENCES `employe` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



