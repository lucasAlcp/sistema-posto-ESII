-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Nov-2021 às 22:43
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `posto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `abastecimentos`
--

CREATE TABLE `abastecimentos` (
  `id` int(11) NOT NULL,
  `frentista_id` int(11) NOT NULL,
  `combustivel_id` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `bomba_id` int(11) NOT NULL,
  `precoTotal` float NOT NULL,
  `data` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `abastecimentos`
--

INSERT INTO `abastecimentos` (`id`, `frentista_id`, `combustivel_id`, `quantidade`, `bomba_id`, `precoTotal`, `data`) VALUES
(4, 107, 79, 1, 75, 10, '2021-11-20'),
(5, 107, 79, 25, 75, 250, '2021-11-20'),
(6, 108, 79, 10, 75, 100, '2021-11-20'),
(7, 108, 82, 5, 76, 52.5, '2021-11-20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `bombas`
--

CREATE TABLE `bombas` (
  `id` int(11) NOT NULL,
  `combustivelDisp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `bombas`
--

INSERT INTO `bombas` (`id`, `combustivelDisp`) VALUES
(74, '[\"82\"]'),
(75, '[\"79\"]'),
(76, '[\"79\",\"82\"]');

-- --------------------------------------------------------

--
-- Estrutura da tabela `combustiveis`
--

CREATE TABLE `combustiveis` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `valorPorLitro` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `combustiveis`
--

INSERT INTO `combustiveis` (`id`, `nome`, `valorPorLitro`) VALUES
(79, 'Gasolina', 10),
(82, 'Alcool', 10.5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `frentistas`
--

CREATE TABLE `frentistas` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `frentistas`
--

INSERT INTO `frentistas` (`id`, `nome`) VALUES
(107, 'Frentista 1'),
(108, 'frentista 2');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `abastecimentos`
--
ALTER TABLE `abastecimentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `bombas`
--
ALTER TABLE `bombas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `combustiveis`
--
ALTER TABLE `combustiveis`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `frentistas`
--
ALTER TABLE `frentistas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `abastecimentos`
--
ALTER TABLE `abastecimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `bombas`
--
ALTER TABLE `bombas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de tabela `combustiveis`
--
ALTER TABLE `combustiveis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT de tabela `frentistas`
--
ALTER TABLE `frentistas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
