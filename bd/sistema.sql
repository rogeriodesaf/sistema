-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Out-2019 às 21:19
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
-- 
--
-- Estrutura da tabela `fornecedores`
--

CREATE TABLE `fornecedores` (
  `id_fornecedor` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nrofa` int(11) NOT NULL,
  `consumidor` varchar(100) NOT NULL,
  `fornecedor` varchar(150) NOT NULL,
  `camara` varchar(100) NOT NULL,
  `relator` varchar(100) NOT NULL,
  `valor` decimal(50,0) NOT NULL,
  `data` date NOT NULL,
  `ano` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `fornecedores`
--

INSERT INTO `fornecedores` (`id_fornecedor`, `id_usuario`, `nrofa`, `consumidor`, `fornecedor`, `camara`, `relator`, `valor`, `data`, `ano`, `total`) VALUES
(4, 7, 546, 'Lohana', 'Unipe', '2 sessÃ£o', 'Filipe', '258', '2018-01-01', 2019, 0),
(5, 7, 20, 'RogÃ©rio', 'Celular', '1 sessÃ£o', 'Demetrius', '80', '2019-09-23', 2019, 0),
(6, 7, 25, 'maria', 'insinuante', '2 sessÃ£o', 'Demetrius', '30', '2019-09-06', 2017, 0),
(7, 7, 55555, 'maria', 'claro', '2 sessÃ£o', 'Demetrius', '50', '2019-09-06', 2017, 0),
(8, 7, 1, 'rqerqrqr', 'insinuante', '1 sessÃ£o', 'Demetrius', '7', '2019-09-10', 2000, 0),
(9, 7, 50, 'rqerqrqr', 'bmg', '1 sessÃ£o', 'Demetrius', '500', '2019-09-19', 2000, 0),
(10, 7, 46, 'oi', 'qrqrer', '2 sessÃ£o', 'Filipe', '20', '2019-09-06', 2000, 0),
(11, 7, 20, 'josÃ©', 'ANATEL', '2 sessÃ£o', 'Fernando', '500', '2019-09-07', 2001, 0);

-- --------------------------------------------------------

--
-- ;

-- --------------------------------------------------------

--
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
(6, 'Hugo Freitas', 'hugofreitas', 'hugovasconcelosf@hotmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2018-05-17'),
(7, 'admin', 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2018-05-17');

-- --------------------------------------------------------

--
-- 


--
-- Índices para tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`id_fornecedor`);

--
-- Índices para tabela `imagens`
--
-- ALTER TABLE `imagens`
--   ADD PRIMARY KEY (`id_imagem`);

--
-- Índices para tabela `produtos`
--
-- ALTER TABLE `produtos`
--   ADD PRIMARY KEY (`id_produto`);

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
-- AUTO_INCREMENT de tabela `camara`
--
-- ALTER TABLE `camara`
--   MODIFY `id_camara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `id_fornecedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 

--
-- AUTO_INCREMENT de tabela `relatores`
--
ALTER TABLE `relatores`
  MODIFY `id_relator` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
