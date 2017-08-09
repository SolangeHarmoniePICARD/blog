-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 09 Août 2017 à 21:00
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
  `id_billet` int(11) NOT NULL,
  `auteur_billet` varchar(255) COLLATE utf8_bin NOT NULL,
  `titre_billet` varchar(255) COLLATE utf8_bin NOT NULL,
  `contenu_billet` text COLLATE utf8_bin NOT NULL,
  `date_billet` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `billets`
--

INSERT INTO `billets` (`id_billet`, `auteur_billet`, `titre_billet`, `contenu_billet`, `date_billet`) VALUES
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
(56, 'Grand Papi Jacques', 'C\'est trop d\'la balle', 'Et je ne mâche pas mes mots.', '2017-07-23 19:39:53'),
(57, 'Mamie Paul', 'Je teste TinyMCE', '&lt;p&gt;&lt;strong&gt;Bonjour !&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p&gt;Comment allez-vous les&lt;em&gt; enfants ?&lt;/em&gt;&lt;/p&gt;\r\n&lt;p&gt;Ceci est un test !&lt;/p&gt;', '2017-07-23 19:50:53'),
(58, 'Le testeur fou !', 'Ceci est le premier test du testeur fou !', '<p>Mais ce ne sera pas le dernier !</p>', '2017-07-23 19:52:21'),
(59, 'Le testeur fou !', 'Deuxième message du testeur fou', '<p>Car j\'ai oubli&eacute; de faire mes <em>tests</em> sur le pr&eacute;c&eacute;dent <strong>message</strong> !</p>\r\n<p style="padding-left: 30px;">Trop malin !</p>', '2017-07-23 19:53:30'),
(60, 'Le testeur fou !', 'Gros test de sécurité', '<p>&lt;p style="color:red;"&gt;Est-ce que je peux formater du texte en HTML et CSS depuis l\'&eacute;diteur TinyMCE ?!&lt;/p&gt;</p>', '2017-07-23 19:54:54'),
(61, 'Le testeur fou !', 'Et là, ça fonctionne ?', '<p style="color:red;">Est-ce que je peux formater du texte en HTML et CSS depuis l\'éditeur TinyMCE quand je désactive le JavaScript ?!</p>', '2017-07-23 19:58:11'),
(62, 'Le testeur fou !', 'coucou', '<p>je ne sais si j\'aime bien ce blog !</p>', '2017-07-24 14:24:49'),
(63, 'Le testeur fou', 'ghfchufgyugyc', '<p>hftgcyuj<strong>ghijfcgnfty</strong>hjrtfcrfc</p>', '2017-07-24 14:51:26'),
(64, 'Le testeur fou reborn', 'le retour', '<p>:7</p>', '2017-08-09 19:38:09'),
(65, 'Harmo', 'Les commentaires fonctionnent !', '<p>C\'est super, &ccedil;a fonctionne enfin !</p>', '2017-08-09 20:50:42');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `billets`
--
ALTER TABLE `billets`
  ADD PRIMARY KEY (`id_billet`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `billets`
--
ALTER TABLE `billets`
  MODIFY `id_billet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
