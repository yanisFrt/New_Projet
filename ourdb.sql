-- phpMyAdmin SQL Dump
-- version 2.9.2
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Lundi 21 Mars 2022 à 12:17
-- Version du serveur: 5.0.27
-- Version de PHP: 5.2.1
--
-- Base de données: `ourdb`
--

-- --------------------------------------------------------

--
-- Structure de la table `user_V`
--

CREATE TABLE `user_v` (
  `id_v` int(11) NOT NULL auto_increment,
  `nom_utilisateur` varchar(255) collate utf8_unicode_ci NOT NULL,
  `email` varchar(255) collate utf8_unicode_ci NOT NULL,
  `mot_de_passe` varchar(255) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id_v`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Contenu de la table `user_V`
--
