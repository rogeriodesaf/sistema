-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Jan-2020 às 20:48
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores`
--

CREATE TABLE `fornecedores` (
  `id_fornecedor` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nrofa` varchar(100) NOT NULL,
  `consumidor` varchar(100) NOT NULL,
  `fornecedor` varchar(150) NOT NULL,
  `relator` varchar(100) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `valor_2` float(10,2) NOT NULL,
  `data` date NOT NULL,
  `ano` int(11) NOT NULL,
  `recurso` varchar(100) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `fornecedores`
--

INSERT INTO `fornecedores` (`id_fornecedor`, `id_usuario`, `nrofa`, `consumidor`, `fornecedor`, `relator`, `valor`, `valor_2`, `data`, `ano`, `recurso`, `total`) VALUES
(232, 7, '1', 'joao', 'oi', 'Demetrius', '25.50', 1.00, '2020-01-01', 2019, 'Tempestivo', 0),
(234, 7, '1', 'joao', 'oi', 'Demetrius', '1.00', 2500.00, '2020-02-01', 2020, 'Tempestivo', 0),
(236, 7, '1', '1', '1', 'Demetrius', '0.00', 2.00, '2020-01-01', 2020, 'Tempestivo', 0),
(237, 7, '1', '1', 'tim', 'Demetrius', '1.00', 1.00, '2020-01-01', 2020, 'Tempestivo', 0),
(238, 7, '1', '1', '1', 'Demetrius', '50.00', 4.00, '2020-03-01', 2020, 'Tempestivo', 0),
(240, 7, '1', '1', '1', 'Demetrius', '1.00', 1.00, '2020-04-01', 2018, 'Tempestivo', 0),
(241, 7, '1', 'joao', 'tim', 'Filipe', '1.00', 1.00, '2020-03-01', 2018, 'Intempestivo', 0),
(242, 7, '1', '1', '2', 'Demetrius', '1.00', 0.00, '2020-05-01', 2018, 'Tempestivo', 0),
(243, 7, '1', 'joao', 'tim', 'Demetrius', '1.00', 0.00, '2020-05-01', 2018, 'Intempestivo', 0),
(245, 7, '1', '1', '122222222222222', 'Filipe', '1.00', 1.00, '2020-07-01', 2018, 'Tempestivo', 0),
(246, 7, '1', '1', '1', 'Demetrius', '1.00', 2.00, '2020-08-01', 2018, 'Tempestivo', 0),
(248, 7, '1', '1', '1', 'Demetrius', '1.00', 1.00, '2020-10-01', 2020, 'Tempestivo', 0),
(249, 7, '2', '1', '1', 'Demetrius', '1.00', 1.00, '2020-10-01', 2018, 'Tempestivo', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores2`
--

CREATE TABLE `fornecedores2` (
  `id_fornecedor2` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nrofa2` int(11) NOT NULL,
  `consumidor2` varchar(100) NOT NULL,
  `fornecedor2` varchar(100) NOT NULL,
  `camara2` varchar(100) NOT NULL,
  `relator2` varchar(100) NOT NULL,
  `valor2` decimal(50,0) NOT NULL,
  `data2` date NOT NULL,
  `ano2` int(11) NOT NULL,
  `recurso2` varchar(100) NOT NULL,
  `total2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `fornecedores2`
--

INSERT INTO `fornecedores2` (`id_fornecedor2`, `id_usuario`, `nrofa2`, `consumidor2`, `fornecedor2`, `camara2`, `relator2`, `valor2`, `data2`, `ano2`, `recurso2`, `total2`) VALUES
(10, 7, 1, '1', '1', '1', 'Demetrius', '1', '2020-02-01', 2020, 'Tempestivo', 0),
(11, 7, 1, '1', '1', '1', 'Demetrius', '1', '2020-03-01', 2020, 'Tempestivo', 0),
(12, 7, 1, '1', '1', '1', 'Demetrius', '1', '2020-03-01', 2020, 'Tempestivo', 0),
(14, 7, 2147483647, 'maria', 'oi', '2', 'SÃ©rgio', '9882', '2020-01-21', 2017, 'Intempestivo', 0),
(15, 7, 1, '1', '1', '1', 'Demetrius', '250', '2020-04-01', 2020, 'Tempestivo', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `relatores`
--

CREATE TABLE `relatores` (
  `id_relator` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `cpf` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `dataCaptura` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `user`, `email`, `senha`, `dataCaptura`) VALUES
(7, 'admin', 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2018-05-17'),
(10, 'RogÃ©rio  de SÃ¡', 'RogÃ©rio', 'rogeriodesaf@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2019-12-26');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`id_fornecedor`);

--
-- Índices para tabela `fornecedores2`
--
ALTER TABLE `fornecedores2`
  ADD PRIMARY KEY (`id_fornecedor2`);

--
-- Índices para tabela `relatores`
--
ALTER TABLE `relatores`
  ADD PRIMARY KEY (`id_relator`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `id_fornecedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT de tabela `fornecedores2`
--
ALTER TABLE `fornecedores2`
  MODIFY `id_fornecedor2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `relatores`
--
ALTER TABLE `relatores`
  MODIFY `id_relator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
