-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02/11/2024 às 18:06
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_bigvacation_lock`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_houses`
--

CREATE TABLE `tb_houses` (
  `id` int(11) NOT NULL,
  `address_` varchar(200) NOT NULL,
  `house_name` varchar(100) NOT NULL,
  `door_code` varchar(10) NOT NULL,
  `gate_code` varchar(10) NOT NULL,
  `community_pool` varchar(20) NOT NULL,
  `fitness_center` varchar(30) NOT NULL,
  `wifi_network` varchar(30) NOT NULL,
  `wifi_password` varchar(200) NOT NULL,
  `observations` text NOT NULL,
  `house_photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_houses`
--

INSERT INTO `tb_houses` (`id`, `address_`, `house_name`, `door_code`, `gate_code`, `community_pool`, `fitness_center`, `wifi_network`, `wifi_password`, `observations`, `house_photo`) VALUES
(5, '4427 Shiva Loop, Kissimmee, FL 34746', 'Super Homey', '590159', '1021', '0-3-6-5', '5-4-3-5#', 'spectumsetup-84', 'Northverse715', '', 'assets/images/houses/4427-Shiva-Loop--Kissimmee--FL-34746.'),
(6, '4427 Shiva Loop, Kissimmee, FL 34746', 'Super Cozy', '590159', '1021', '0-3-6-5', '5-4-3-5#', 'spectumsetup-84', 'Northverse715', '', 'assets/images/houses/4427-Shiva-Loop--Kissimmee--FL-34746.'),
(7, '4427 Shiva Loop, Kissimmee, FL 34746', 'Super Cozy', '590159', '1021', '0-3-6-5', '5-4-3-5#', 'spectumsetup-84', 'Northverse715', '', 'assets/images/houses/4427-Shiva-Loop--Kissimmee--FL-34746.'),
(8, '4427 Shiva Loop, Kissimmee, FL 34746', 'Super Cozy', '590159', '1021', '0-3-6-5', '5-4-3-5#', 'spectumsetup-84', 'Northverse715', '', 'assets/images/houses/4427-Shiva-Loop--Kissimmee--FL-34746.'),
(9, '4427 Shiva Loop, Kissimmee, FL 34746', 'Super Cozy', '590159', '1021', '0-3-6-5', '5-4-3-5#', 'spectumsetup-84', 'Northverse715', '', 'assets/images/houses/default_img.jpg'),
(10, '4427 Shiva Loop, Kissimmee, FL 34746', 'Super Cozy', '590159', '1021', '0-3-6-5', '5-4-3-5#', 'spectumsetup-84', 'Northverse715', '', 'assets/images/houses/default_img.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_houses`
--
ALTER TABLE `tb_houses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_houses`
--
ALTER TABLE `tb_houses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
