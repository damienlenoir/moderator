-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2016 at 12:11 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sosamazon`
--

-- --------------------------------------------------------

--
-- Table structure for table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `id_article` varchar(50) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  `date` date NOT NULL,
  `verif` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commentaires`
--

INSERT INTO `commentaires` (`id`, `id_article`, `auteur`, `commentaire`, `date`, `verif`) VALUES
(1, 'ouverture', 'inconnu', 'Super article, merci', '2016-11-18', 1),
(4, 'buybox', 'Georges', 'Merci pour votre aide, j\'ai maintenant la buybox pour tous mes articles', '2016-11-11', 1),
(5, 'pao', 'Maxime', 'Interessant, je sais maintenant comment rédiger un PAO', '2016-11-09', 1),
(18, 'ouverture', 'kiki', 'sympa cet article pour ouvrir un compte', '2016-11-21', 1),
(7, 'ouverture', 'Steph', 'cool', '2016-11-01', 0),
(8, 'ouverture', 'Steph', 'cool', '2016-11-01', 1),
(17, 'az', 'test', 'test', '2016-11-21', 0),
(10, 'ouverture', 'clément', 'interressant', '2016-11-20', 1),
(11, 'ouverture', 'bobo', 'YOLO', '2016-11-20', 0),
(12, 'ouverture', 'Mimie', 'C\'est nul ! ', '2016-11-20', 0),
(13, 'autoentrepreneur', 'kagoude', 'Merci pour cet article :)', '2016-11-20', 0),
(14, 'adresses', 'Pedro', 'très utile, merci', '2016-11-20', 1),
(15, 'adresses', 'Christophe', 'fabuleux', '2016-11-20', 0),
(16, 'typeevaluation', 'Steeve', 'bon article', '2016-11-20', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
