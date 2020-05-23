-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 23, 2020 at 10:14 AM
-- Server version: 5.7.21
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `livreor`
--

-- --------------------------------------------------------

--
-- Table structure for table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `commentaire` text NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commentaires`
--

INSERT INTO `commentaires` (`id`, `commentaire`, `id_utilisateur`, `date`) VALUES
(1, 'super expo trop colis', 2, '2020-05-20 13:10:38'),
(2, 'dégoûté de ce que j\'ai vu', 1, '2020-05-20 13:13:33'),
(3, 'super mega top ce musée', 22, '2020-05-20 13:30:39'),
(23, 'super visite j\'ai adoré l\'expo je reviendrai promis juré craché', 2, '2020-05-20 14:38:54'),
(41, 'merci pour cette top visire', 23, '2020-05-20 20:44:51'),
(56, 'trop génial ce musée de ouf', 23, '2020-05-20 20:49:50'),
(57, 'je galère avec la jointure là !', 2, '2020-05-21 09:34:02'),
(58, 'merci pour ce moment ', 23, '2020-05-21 10:39:14'),
(59, 'c\'était vraiment très intéressant de visiter ce museum of marseille', 32, '2020-05-23 11:17:12'),
(60, 'super canon le museum of marseille', 23, '2020-05-23 11:19:02'),
(61, 'super canon le museum of marseille', 23, '2020-05-23 11:20:04'),
(62, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 23, '2020-05-23 11:21:14');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(1, 'jean', 'password'),
(2, 'marc', 'mdp'),
(22, 'julien', 'password'),
(23, 'Marie-Jeanne', 'password'),
(29, 'marc', 'mdp'),
(30, 'marc', 'mdp'),
(31, 'hello', 'pass'),
(32, 'paul', 'pass');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
