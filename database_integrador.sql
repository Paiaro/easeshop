-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2024 at 12:38 PM
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
(1, 'Notebook Acer Nitro V15 ANV15-51-58AZ 13ª Geração Intel Core i5-13420H, 8GB RAM, 512GB SSD, NVIDIA R', 5.00, '../uploads/51Wv-tEUn6L._AC_SL1000_.jpg'),
(2, 'Notebook Acer Nitro V15 ANV15-51-58AZ 13ª Geração Intel Core i5-13420H, 8GB RAM, 512GB SSD, NVIDIA R', 5.00, '../uploads/51Wv-tEUn6L._AC_SL1000_.jpg'),
(5, 'Notebook Acer Nitro V15', 2.00, '../uploads/51Wv-tEUn6L._AC_SL1000_.jpg'),
(6, 'Notebook Acer Aspire 3', 2.00, '../uploads/512JJoQh4lL.__AC_SX300_SY300_QL70_ML2_.jpg'),
(7, 'Notebook Acer Aspire 3', 2.00, '../uploads/512JJoQh4lL.__AC_SX300_SY300_QL70_ML2_.jpg'),
(8, 'Notebook Gamer ASUS TUF F15 Intel Core i7 12700h', 5000.00, '../uploads/71zxWLbeYYL.__AC_SX300_SY300_QL70_ML2_.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
