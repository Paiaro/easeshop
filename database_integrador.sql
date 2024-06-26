-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2024 at 07:30 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_integrador`
--
CREATE DATABASE IF NOT EXISTS `database_integrador` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `database_integrador`;

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `imagem`) VALUES
(10, 'Havit HV-H2232d - Fone de Ouvido', 114.90, '../uploads/Havit HV-H2232d.jpg'),
(11, 'Headphone Fone de Ouvido Havit HV-H2002d', 169.90, '../uploads/71sV-QnV8TL._AC_UY218_.jpg'),
(13, 'Computador Gamer Pc Completo Intel Core i5', 180.12, '../uploads/Computador Gamer Pc Intel Core i5.jpg'),
(14, 'Pc Gamer Cpu Ryzen 7 8700G / SSD 2TB M.2 NVMe', 9869.00, '../uploads/51mY3KbAY3L._AC_UL320_.jpg'),
(15, 'PC GAMER AMD RYZEN 5 4600G - 16GB DDR4 - NVME 256GB - RADEON VEGA 7', 2390.00, '../uploads/613fZQDMveL._AC_UL320_.jpg'),
(16, 'Notebook Gamer ASUS TUF F15 Intel Core i7 12700h 2,3 GHz 8GB RAM 512GB SSD Linux KeepOS NVidia GeFor', 5804.00, '../uploads/7183e2xk8iL._AC_UL320_.jpg'),
(17, 'Notebook Gamer ROG Strix G16, NVidia RTX4060, CORE I9, 16 GB, 512 GB', 11499.00, '../uploads/51O4bS147tL._AC_UL320_.jpg'),
(18, 'Notebook Gamer Legion Slim 5 Intel Core i5-13420H 16GB 512GB RTX 3050 6GB', 5999.00, '../uploads/71sqxJweoYL._AC_UL320_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tipo` enum('admin','cliente') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `senha`, `email`, `tipo`) VALUES
(20, 'admin', '$2y$10$Bpe71/MJ0YdSPsL9BM9Vc.BPzgR1Sz8nFTTZTqX/K6M.Zq0wJ/BQa', 'admin@admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
