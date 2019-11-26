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
-- Estrutura da tabela `camara`
--

CREATE TABLE `camara` (
  `id_camara` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nome_camara` varchar(100) NOT NULL,
  `dataCaptura` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `camara`
--

INSERT INTO `camara` (`id_camara`, `id_usuario`, `nome_camara`, `dataCaptura`) VALUES
(16, 7, '1 Sessão', '2019-09-27');

-- --------------------------------------------------------

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
-- Estrutura da tabela `imagens`
--

CREATE TABLE `imagens` (
  `id_imagem` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `dataUpload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `imagens`
--

INSERT INTO `imagens` (`id_imagem`, `id_categoria`, `nome`, `url`, `dataUpload`) VALUES
(4, 7, 'camisa social.jpg', '../../arquivos/camisa social.jpg', '2018-05-22'),
(5, 7, 'camisa.jpg', '../../arquivos/camisa.jpg', '2018-05-22'),
(6, 3, 'calca.jpg', '../../arquivos/calca.jpg', '2018-05-22'),
(7, 5, 'tenis feminino.jpg', '../../arquivos/tenis feminino.jpg', '2018-05-22'),
(8, 5, 'tenis.jpg', '../../arquivos/tenis.jpg', '2018-05-22'),
(11, 9, 'Untitled-1.html.txt', '../../arquivos/Untitled-1.html.txt', '2019-09-26'),
(13, 10, 'Untitled-1.txt', '../../arquivos/Untitled-1.txt', '2019-09-26'),
(15, 11, 'select.txt', '../../arquivos/select.txt', '2019-09-26');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_imagem` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `preco` float NOT NULL,
  `dataCaptura` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `id_categoria`, `id_imagem`, `id_usuario`, `nome`, `descricao`, `quantidade`, `preco`, `dataCaptura`) VALUES
(13, 10, 13, 7, '1 Grau', '...', -20, 1, '2019-09-26'),
(15, 11, 15, 7, '2 Grau', '..', -50, 1, '2019-09-26');

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
(6, 'Hugo Freitas', 'hugofreitas', 'hugovasconcelosf@hotmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2018-05-17'),
(7, 'admin', 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2018-05-17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id_venda` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `preco` float NOT NULL,
  `quantidade` int(11) NOT NULL,
  `total_venda` float NOT NULL,
  `dataCompra` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id_venda`, `id_cliente`, `id_produto`, `id_usuario`, `preco`, `quantidade`, `total_venda`, `dataCompra`) VALUES
(1, 0, 0, 7, 0, 0, 0, '2019-09-26'),
(1, 0, 0, 7, 0, 0, 0, '2019-09-26'),
(1, 0, 0, 7, 0, 2, 0, '2019-09-26'),
(1, 0, 0, 7, 0, -1, 0, '2019-09-26'),
(1, 0, 0, 7, 0, -1, 0, '2019-09-26'),
(1, 0, 0, 7, 0, -1, 0, '2019-09-26'),
(1, 0, 0, 7, 0, -1, 0, '2019-09-26'),
(1, 0, 0, 7, 0, -1, 0, '2019-09-26'),
(1, 0, 0, 7, 0, -1, 0, '2019-09-26'),
(1, 0, 4, 7, 90, 20, 1800, '2019-09-26'),
(1, 0, 4, 7, 90, 20, 1800, '2019-09-26'),
(1, 0, 4, 7, 90, 20, 1800, '2019-09-26'),
(2, 0, 13, 7, 1, 20000, 20000, '2019-09-26'),
(3, 8, 13, 7, 1, 20000, 20000, '2019-09-26'),
(4, 0, 13, 7, 1, 10, 10, '2019-09-26'),
(5, 11, 15, 7, 1, 5000, 5000, '2019-09-26'),
(6, 11, 13, 7, 1, 50000, 50000, '2019-09-26'),
(7, 0, 15, 7, 1, 1, 1, '2019-09-26'),
(8, 11, 15, 7, 1, 2, 2, '2019-09-26'),
(9, 9, 15, 7, 1, 50000, 50000, '2019-09-26'),
(10, 9, 15, 7, 1, 50, 50, '2019-09-26'),
(10, 8, 13, 7, 1, 20, 20, '2019-09-26'),
(11, 8, 13, 7, 1, 1, 1, '2019-09-26'),
(11, 8, 15, 7, 1, 1, 1, '2019-09-26'),
(12, 8, 13, 7, 0, 42, 0, '2019-09-26'),
(13, 8, 13, 7, 0, 20, 0, '2019-09-26'),
(14, 8, 15, 7, 0, 20, 0, '2019-09-26'),
(14, 8, 15, 7, 0, 20, 0, '2019-09-26'),
(15, 8, 13, 7, 0, 20, 0, '2019-09-26'),
(15, 8, 15, 7, 1, 25, 25, '2019-09-26'),
(16, 8, 13, 7, 0, 20, 0, '2019-09-26'),
(17, 8, 15, 7, 0, 50, 0, '2019-09-26'),
(18, 8, 13, 7, 0, 20, 0, '2019-09-27'),
(18, 8, 13, 7, 0, 20, 0, '2019-09-27');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `camara`
--
ALTER TABLE `camara`
  ADD PRIMARY KEY (`id_camara`);

--
-- Índices para tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`id_fornecedor`);

--
-- Índices para tabela `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`id_imagem`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`);

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
ALTER TABLE `camara`
  MODIFY `id_camara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `id_fornecedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `imagens`
--
ALTER TABLE `imagens`
  MODIFY `id_imagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
