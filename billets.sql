-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Dim 23 Juillet 2017 à 19:40
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `billets`
--

CREATE TABLE `billets` (
  `id` int(11) NOT NULL,
  `auteur` varchar(255) COLLATE utf8_bin NOT NULL,
  `titre` varchar(255) COLLATE utf8_bin NOT NULL,
  `contenu` text COLLATE utf8_bin NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `billets`
--

INSERT INTO `billets` (`id`, `auteur`, `titre`, `contenu`, `date`) VALUES
(54, 'Isis', 'HiHaaaan !', 'HiHaaaan ! HiHaaaan !', NULL),
(52, 'Olivier', 'C\'est pas mal !', 'Combien de temps ça prend à réaliser ?', NULL),
(53, 'Mars', '...', 'scrrrr...', NULL),
(50, 'Christine', 'Ah oui, c\'est bien ça !', 'C\'est ça qu\'il me faut.', NULL),
(51, 'Elise', 'Ça doit pas être bien compliqué à réaliser...', 'Enfin je pense.', NULL),
(49, 'Patrick', 'Woowh ! ', 'Comme ça marche bien !', NULL),
(47, 'Mado', 'Quel beau blog !', 'Je le trouve super !', NULL),
(48, 'Jacques', 'C\'est incroyable !', 'C\'est un blog très fonctionnel.', NULL),
(42, 'Nestor', 'Moi, j\'suis un bébé', 'Donc je ne comprends rien à toutes ces histoires...', NULL),
(41, 'Priam', 'J\'adore ce Blog !', 'Même si je suis trop petit pour savoir lire !', NULL),
(37, 'Harmo', 'Mon premier message', 'Ceci est mon premier message sur le mini-blog que j\'ai créé !', NULL),
(38, 'boris', 'C\'est un super Blog !', 'Il fonctionne vraiment bien !', NULL),
(55, 'Elliot', 'Pfhhrrrrr', 'Pfhhrrrrr', '2017-07-23 19:38:35'),
(56, 'Grand Papi Jacques', 'C\'est trop d\'la balle', 'Et je ne mâche pas mes mots.', '2017-07-23 19:39:53');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `billets`
--
ALTER TABLE `billets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `billets`
--
ALTER TABLE `billets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
