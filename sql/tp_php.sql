-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 03 Avril 2017 à 11:53
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tp_php`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `price` float NOT NULL,
  `picture` text NOT NULL,
  `stock` int(4) NOT NULL,
  `id_category` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `name`, `content`, `price`, `picture`, `stock`, `id_category`) VALUES
(1, 'The first édition', 'Whiskay is love, Whiskay is life !', 42, 'img/whisky/article1.jpg', 2, 0),
(2, 'Auchentochan', 'Whiskay qsdis love, Whiskagrgrgdgrgy is life !', 32, 'img/whisky/article2.jpg', 2, 0),
(3, 'The BenRiach', 'Whiskayqqqqqqqq is love, Whiskaddddddy is life !', 52, 'img/whisky/article5.jpg', 2, 0),
(5, 'Glenfarclas', '', 86, 'img/whisky/article7.jpg', 3, 0),
(6, 'Glenfiddich 18 ans', '', 86, 'img/whisky/article9.jpg', 3, 0),
(7, 'Glenfiddich', '', 86, 'img/whisky/article10.jpg', 3, 0),
(8, 'IPA Experiment', '', 86, 'img/whisky/article11.jpg', 3, 0),
(9, 'Nikka', '', 86, 'img/whisky/article13.jpg', 3, 0),
(10, 'Penderyn', '', 86, 'img/whisky/article16.jpg', 3, 0),
(11, 'cigard', 'azeazeeazeaeaeaeeazea', 9, 'img/cigar/cigar2.jpg', 20, 1),
(12, 'cigard', 'azeazeeazeaeaeaeeazea', 9, 'img/cigar/cigar3.jpg', 18, 1),
(13, 'cigard', 'azeazeeazeaeaeaeeazea', 9, 'img/cigar/cigar4.jpg', 27, 1),
(14, 'cigard', 'azeazeeazeaeaeaeeazea', 18, 'img/cigar/cigar5.jpg', 8, 1),
(15, 'cigard', 'azeazeeazeaeaeaeeazea', 32, 'img/cigar/cigar6.jpg', 2, 1),
(16, 'cigard', 'azezaeeaaeaeaz', 11, 'img/cigar/cigar1.jpg', 45, 1);

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `whisky` int(1) NOT NULL,
  `cigard` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `email` varchar(200) NOT NULL,
  `birthday` date NOT NULL,
  `password` varchar(200) NOT NULL,
  `genre` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
