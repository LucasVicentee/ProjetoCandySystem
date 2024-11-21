-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21/11/2024 às 12:47
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

create database confeitaria;

use confeitaria;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `confeitaria`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `pk_funcionario` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL,
  `fk_funcao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `funcionarios`
--

INSERT INTO `funcionarios` (`pk_funcionario`, `nome`, `cpf`, `telefone`, `endereco`, `senha`, `fk_funcao`) VALUES
(1, 'zeca', NULL, NULL, NULL, 'tilapia123', NULL),
(2, 'lincoln', NULL, NULL, NULL, 'coxinha123', NULL),
(3, 'Ana', '10101010', '19191919', 'Presidente Prudente', 'coxinha123', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcoes`
--

CREATE TABLE `funcoes` (
  `pk_funcao` int(11) NOT NULL,
  `funcao` varchar(20) DEFAULT NULL,
  `salario` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `funcoes`
--

INSERT INTO `funcoes` (`pk_funcao`, `funcao`, `salario`) VALUES
(1, 'Gerente', 10000),
(2, 'Atendente', 2000);

-- --------------------------------------------------------

--
-- Estrutura para tabela `ingredientes`
--

CREATE TABLE `ingredientes` (
  `id_ingrediente` int(11) NOT NULL,
  `nome_ingrediente` varchar(50) NOT NULL,
  `data_validade_ingre` date DEFAULT NULL,
  `qtd_ingredientes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `ingredientes`
--

INSERT INTO `ingredientes` (`id_ingrediente`, `nome_ingrediente`, `data_validade_ingre`, `qtd_ingredientes`) VALUES
(1, 'maçã', '2003-12-07', 20),
(2, 'maçã', '1011-10-10', 10);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `nome_produto` varchar(50) NOT NULL,
  `data_fabricacao` date DEFAULT NULL,
  `data_validade` date DEFAULT NULL,
  `descricao_produto` varchar(250) NOT NULL,
  `qtd_produto` int(11) DEFAULT NULL,
  `preco` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `nome_produto`, `data_fabricacao`, `data_validade`, `descricao_produto`, `qtd_produto`, `preco`) VALUES
(1, 'Banana', '1111-11-11', '1010-10-10', 'aaaaaaaaaaaa', 1, 1010);

-- --------------------------------------------------------

--
-- Estrutura para tabela `receitas`
--

CREATE TABLE `receitas` (
  `nome_receita` varchar(50) NOT NULL,
  `descricao_receita` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`pk_funcionario`),
  ADD KEY `fk_funcao` (`fk_funcao`);

--
-- Índices de tabela `funcoes`
--
ALTER TABLE `funcoes`
  ADD PRIMARY KEY (`pk_funcao`);

--
-- Índices de tabela `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD PRIMARY KEY (`id_ingrediente`),
  ADD UNIQUE KEY `id_ingrediente` (`id_ingrediente`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`),
  ADD UNIQUE KEY `id_produto` (`id_produto`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `pk_funcionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `funcoes`
--
ALTER TABLE `funcoes`
  MODIFY `pk_funcao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `ingredientes`
--
ALTER TABLE `ingredientes`
  MODIFY `id_ingrediente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD CONSTRAINT `funcionarios_ibfk_1` FOREIGN KEY (`fk_funcao`) REFERENCES `funcoes` (`pk_funcao`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
