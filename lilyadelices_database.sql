-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 20 juin 2022 à 22:48
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lilyadelices`
--

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `contactId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sujet` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `customer`
--

CREATE TABLE `customer` (
  `customerId` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `nationality` varchar(11) DEFAULT NULL,
  `shippingId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `customer`
--

INSERT INTO `customer` (`customerId`, `firstname`, `lastname`, `nationality`, `shippingId`) VALUES
(4, 'Raddah ', 'Achraf', 'AF', 10),
(5, 'c', 'a', 'AF', 21),
(6, 'qsd', 'qsdq', 'AF', 22),
(7, 'Raddah ', 'a', 'DO', 23);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `OrderId` int(11) NOT NULL,
  `productId` int(11) DEFAULT NULL,
  `countity` int(10) DEFAULT NULL,
  `initiateDate` date DEFAULT NULL,
  `shippingId` int(11) DEFAULT NULL,
  `customerId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`OrderId`, `productId`, `countity`, `initiateDate`, `shippingId`, `customerId`) VALUES
(4, 2, 1, '2022-06-20', 10, 4),
(5, 2, 1, '2022-06-20', 17, -1),
(6, 2, 1, '2022-06-20', 18, -1),
(7, 2, 1, '2022-06-20', 19, -1),
(8, 2, 1, '2022-06-20', 20, -1),
(9, 2, 1, '2022-06-20', 21, 5),
(10, 2, 1, '2022-06-20', 22, 6),
(11, 1, 1, '2022-06-20', 23, 7);

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `productId` int(11) NOT NULL,
  `imgLink` varchar(255) NOT NULL,
  `name` varchar(256) DEFAULT NULL,
  `cost` float NOT NULL DEFAULT 0,
  `stockCount` int(11) NOT NULL DEFAULT 0,
  `mass` float DEFAULT NULL,
  `tempreture` float DEFAULT NULL,
  `category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`productId`, `imgLink`, `name`, `cost`, `stockCount`, `mass`, `tempreture`, `category`) VALUES
(1, 'img/Patissrie/pat01.jpg', 'Barry Red Cake', 25, 216, 1230, -18, 0),
(2, 'img/Patissrie/pat02.jpg', 'Carrot Cake', 30, 215, 2350, -18, 0),
(3, 'img/Patissrie/pat03.jpg', 'Berry White Cake', 25, 215, 1250, -18, 0),
(4, 'img/Patissrie/pat04.jpg', 'Red Valvet Cake', 25, 215, 1900, -18, 0),
(5, 'img/Patissrie/pat05.jpg', 'Mango Passion Cake', 30, 215, 1320, -18, 0),
(6, 'img/Patissrie/pat06.jpg', 'Honey Cake', 25, 215, 1700, -18, 0),
(7, 'img/Patissrie/pat07.jpg', 'Yuzu Cake', 25, 215, 1500, -18, 0),
(8, 'img/Patissrie/pat08.jpg', 'Matcha Tea Cake', 25, 215, 1250, -18, 0),
(9, 'img/Patissrie/pat09.jpg', 'Chales Grey Cake', 25, 215, 1450, -18, 0),
(10, 'img/Patissrie/pat28.jpg', 'White Chocolate Cheesecake Prague', 10, 288, 1200, -18, 1),
(11, 'img/Patissrie/pat29.jpg', 'Dark Cheesecake', 15, 260, 1600, -18, 1),
(12, 'img/Patissrie/pat30.jpg', 'Strawberry Marble Cheesecake', 15, 52, 1600, -18, 1),
(13, 'img/Patissrie/pat31.jpg', 'Salted Caramel Marble Cheesecake', 10, 288, 1600, -18, 1),
(14, 'img/Patissrie/pat32.jpg', 'Lemon Marble Cheesecake', 15, 52, 1600, -18, 1),
(15, 'img/Patissrie/pat33.jpg', 'Blueberry Marble Cheesecake', 15, 260, 1600, -18, 1),
(16, 'img/Patissrie/pat34.jpg', 'Choco Marble Cheesecake', 10, 52, 1600, -18, 1),
(17, 'img/Patissrie/pat35.jpg', 'Raspberry Marble Cheesecake', 15, 288, 1600, -18, 1),
(18, 'img/Patissrie/pat36.jpg', 'Target Cappuccino Choco Cheesecake', 15, 215, 1800, -18, 1),
(19, 'img/Patissrie/pat57.jpg', 'Apple Cinnamon Muffin', 2.5, 512, 130, -18, 2),
(20, 'img/Patissrie/pat58.jpg', 'Blueberry Muffin', 2.5, 451, 130, -18, 2),
(21, 'img/Patissrie/pat59.jpg', 'Cherry Almond Muffin', 2.5, 252, 130, -18, 2),
(22, 'img/Patissrie/pat60.jpg', 'Chocolate Muffin', 2.5, 525, 130, -18, 2),
(23, 'img/Patissrie/pat61.jpg', 'Vanilla Muffin', 2.5, 42, 130, -18, 2),
(24, 'img/Patissrie/pat62.jpg', 'Caramel Muffin', 2.5, 215, 130, -18, 2),
(25, 'img/Patissrie/pat63.jpg', 'Spice & Raisins Muffin', 2.5, 521, 130, -18, 2),
(26, 'img/Patissrie/pat64.jpg', 'Red Valvet Muffin', 2.5, 215, 130, -18, 2);

-- --------------------------------------------------------

--
-- Structure de la table `productsreviews`
--

CREATE TABLE `productsreviews` (
  `reviewId` int(11) NOT NULL,
  `starRange` int(11) DEFAULT NULL,
  `reviewDesc` varchar(250) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `productsreviews`
--

INSERT INTO `productsreviews` (`reviewId`, `starRange`, `reviewDesc`, `productId`) VALUES
(1, 3, 'Comment_1', 1),
(2, 4, 'Comment_1', 2),
(3, 5, 'Comment_1', 3),
(4, 5, 'Comment_1', 4),
(5, 5, 'Comment_1', 5),
(6, 5, 'Comment_1', 6),
(7, 4, 'Comment_1', 7),
(8, 4, 'Comment_1', 8),
(9, 4, 'Comment_1', 9),
(10, 3, 'Comment_1', 10),
(11, 3, 'Comment_1', 11),
(12, 3, 'Comment_1', 12),
(13, 3, 'Comment_1', 13),
(14, 3, 'Comment_1', 14),
(15, 3, 'Comment_1', 15),
(16, 3, 'Comment_1', 16),
(17, 3, 'Comment_1', 17),
(18, 3, 'Comment_1', 18),
(19, 3, 'Comment_1', 19),
(20, 3, 'Comment_1', 20),
(21, 3, 'Comment_1', 21),
(22, 3, 'Comment_1', 22),
(23, 3, 'Comment_1', 23),
(24, 4, 'Comment_1', 24),
(25, 4, 'Comment_1', 25),
(26, 4, 'Comment_1', 26),
(27, 3, 'Comment_2', 1),
(28, 7, 'Comment_2', 2),
(29, 7, 'Comment_2', 3),
(30, 7, 'Comment_2', 4),
(31, 7, 'Comment_2', 5),
(32, 7, 'Comment_2', 6),
(33, 4, 'Comment_2', 7),
(34, 4, 'Comment_2', 8),
(35, 4, 'Comment_2', 9),
(36, 3, 'Comment_2', 10),
(37, 3, 'Comment_2', 11),
(38, 3, 'Comment_2', 12),
(39, 4, 'Comment_2', 13),
(40, 4, 'Comment_2', 14),
(41, 4, 'Comment_2', 15),
(42, 4, 'Comment_2', 16),
(43, 4, 'Comment_2', 17),
(44, 4, 'Comment_2', 18),
(45, 4, 'Comment_2', 19),
(46, 4, 'Comment_2', 20),
(47, 4, 'Comment_2', 21),
(48, 4, 'Comment_2', 22),
(49, 3, 'Comment_2', 23),
(50, 4, 'Comment_2', 24),
(51, 4, 'Comment_2', 25),
(52, 4, 'Comment_2', 26),
(53, 3, 'Comment_3', 1),
(54, 4, 'Comment_3', 2),
(55, 5, 'Comment_3', 3),
(56, 5, 'Comment_3', 4),
(57, 5, 'Comment_3', 5),
(58, 5, 'Comment_3', 6),
(59, 4, 'Comment_3', 7),
(60, 4, 'Comment_3', 8),
(61, 4, 'Comment_3', 9),
(62, 3, 'Comment_3', 10),
(63, 5, 'Comment_3', 11),
(64, 5, 'Comment_3', 12),
(65, 5, 'Comment_3', 13),
(66, 5, 'Comment_3', 14),
(67, 5, 'Comment_3', 15),
(68, 5, 'Comment_3', 16),
(69, 5, 'Comment_3', 17),
(70, 5, 'Comment_3', 18),
(71, 5, 'Comment_3', 19),
(72, 5, 'Comment_3', 20),
(73, 5, 'Comment_3', 21),
(74, 5, 'Comment_3', 22),
(75, 5, 'Comment_3', 23),
(76, 5, 'Comment_3', 24),
(77, 5, 'Comment_3', 25),
(78, 5, 'Comment_3', 26);

-- --------------------------------------------------------

--
-- Structure de la table `shippingadresses`
--

CREATE TABLE `shippingadresses` (
  `shippingId` int(11) NOT NULL,
  `country` int(11) DEFAULT NULL,
  `shippingAddress` varchar(255) DEFAULT NULL,
  `codePostal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `shippingadresses`
--

INSERT INTO `shippingadresses` (`shippingId`, `country`, `shippingAddress`, `codePostal`) VALUES
(10, 0, 'HEY', 42),
(11, 0, 'HEY', 24),
(12, 0, 'HEY', 24),
(13, 0, 'HEY', 24),
(14, 0, 'HEY', 24),
(15, 0, 'HEY', 24),
(16, 0, 'HEY', 24),
(17, 0, 'HEY', 24),
(18, 0, 'HEY', 24),
(19, 0, 'HEY', 24),
(20, 0, 'HEY', 24),
(21, 0, 'dq', 312),
(22, 0, 'HEY', 123),
(23, 0, 'HEY', 421);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contactId`);

--
-- Index pour la table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerId`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderId`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`);

--
-- Index pour la table `productsreviews`
--
ALTER TABLE `productsreviews`
  ADD PRIMARY KEY (`reviewId`);

--
-- Index pour la table `shippingadresses`
--
ALTER TABLE `shippingadresses`
  ADD PRIMARY KEY (`shippingId`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contactId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `productsreviews`
--
ALTER TABLE `productsreviews`
  MODIFY `reviewId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT pour la table `shippingadresses`
--
ALTER TABLE `shippingadresses`
  MODIFY `shippingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
