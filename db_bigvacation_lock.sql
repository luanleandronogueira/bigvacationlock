-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/11/2024 às 04:24
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
-- Estrutura para tabela `tb_handymans`
--

CREATE TABLE `tb_handymans` (
  `id_handyman` int(11) NOT NULL,
  `name_handyman` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_handymans`
--

INSERT INTO `tb_handymans` (`id_handyman`, `name_handyman`) VALUES
(1, 'Antônio'),
(2, 'Gabriel');

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
  `house_photo` varchar(200) NOT NULL,
  `owner` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_houses`
--

INSERT INTO `tb_houses` (`id`, `address_`, `house_name`, `door_code`, `gate_code`, `community_pool`, `fitness_center`, `wifi_network`, `wifi_password`, `observations`, `house_photo`, `owner`) VALUES
(25, '4427 Shiva Loop, Kissimmee, FL 34746', 'Super Cozy', '590159', '1021', '0-3-6-5', '5-4-3-5#', 'spectumsetup-84', 'Northverse715', 'Who takes care of this house?', 'assets/images/houses/4427-Shiva-Loop--Kissimmee--FL-34746.jpeg', 2),
(26, '2554 Shanti, Kissimmee, FL 34746', 'Super Large', '590159', '# 8-1-6-5', '0-3-6-5', '5-4-3-5#', 'spectumsetup-84', 'Northverse715', '', 'assets/images/houses/default_house.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_maitenances`
--

CREATE TABLE `tb_maitenances` (
  `id_maitenance` int(11) NOT NULL,
  `date_maitenance` date NOT NULL,
  `shift_maitenance` varchar(100) NOT NULL,
  `handyman_maitenance` int(11) NOT NULL,
  `obs_maitenance` text NOT NULL,
  `status_maitenances` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_owners`
--

CREATE TABLE `tb_owners` (
  `id_owner` int(11) NOT NULL,
  `name_owner` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_owners`
--

INSERT INTO `tb_owners` (`id_owner`, `name_owner`) VALUES
(1, 'Justin'),
(2, 'Desirée'),
(3, 'Owner');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_handymans`
--
ALTER TABLE `tb_handymans`
  ADD PRIMARY KEY (`id_handyman`);

--
-- Índices de tabela `tb_houses`
--
ALTER TABLE `tb_houses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_owner` (`owner`);

--
-- Índices de tabela `tb_maitenances`
--
ALTER TABLE `tb_maitenances`
  ADD PRIMARY KEY (`id_maitenance`);

--
-- Índices de tabela `tb_owners`
--
ALTER TABLE `tb_owners`
  ADD PRIMARY KEY (`id_owner`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_handymans`
--
ALTER TABLE `tb_handymans`
  MODIFY `id_handyman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_houses`
--
ALTER TABLE `tb_houses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `tb_maitenances`
--
ALTER TABLE `tb_maitenances`
  MODIFY `id_maitenance` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_owners`
--
ALTER TABLE `tb_owners`
  MODIFY `id_owner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tb_houses`
--
ALTER TABLE `tb_houses`
  ADD CONSTRAINT `fk_owner` FOREIGN KEY (`owner`) REFERENCES `tb_owners` (`id_owner`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
