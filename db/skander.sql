-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2021 at 08:06 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skander`
--

-- --------------------------------------------------------

--
-- Table structure for table `datap`
--

CREATE TABLE `datap` (
  `id` int(11) NOT NULL,
  `itemName` varchar(100) NOT NULL,
  `annee` int(11) NOT NULL,
  `matiere` varchar(255) NOT NULL,
  `pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datap`
--

INSERT INTO `datap` (`id`, `itemName`, `annee`, `matiere`, `pdf`) VALUES
(37, 'L ecole', 3, 'Français', 'AA1_introduction.pdf'),
(39, 'Puissance matrice carré', 3, 'Math', 'AA6_Calcul des puissances d’une matrice carrée.pdf'),
(40, 'Billinéaire Symétrique', 3, 'Math', 'AA2_Formes bilinéaires symétriques.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datap`
--
ALTER TABLE `datap`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datap`
--
ALTER TABLE `datap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
