-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/04/2021 às 22:34
-- Versão do servidor: 10.4.17-MariaDB
-- Versão do PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lesgocare`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `motorista`
--

CREATE TABLE `motorista` (
  `nome` varchar(50) DEFAULT NULL,
  `sobrenome` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(20) DEFAULT NULL,
  `endereco` varchar(200) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `celular` varchar(13) DEFAULT NULL,
  `termo` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `passageiro`
--

CREATE TABLE `passageiro` (
  `nome` varchar(50) DEFAULT NULL,
  `sobrenome` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(20) DEFAULT NULL,
  `celular` varchar(14) DEFAULT NULL,
  `termo` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `motorista`
--
ALTER TABLE `motorista`
  ADD PRIMARY KEY (`email`);

--
-- Índices de tabela `passageiro`
--
ALTER TABLE `passageiro`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
