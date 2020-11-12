-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Nov-2020 às 14:50
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jogos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipas`
--

CREATE TABLE `equipas` (
  `id_equipa` int(11) NOT NULL,
  `designacao` varchar(255) NOT NULL,
  `designacao_outra` varchar(5) NOT NULL,
  `localidade` varchar(155) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `equipas`
--

INSERT INTO `equipas` (`id_equipa`, `designacao`, `designacao_outra`, `localidade`) VALUES
(1, 'Clube Desportivo das Aves', 'CDA', 'Vila das Aves'),
(2, 'Futebol Clube do Porto', 'FCP', 'Porto'),
(3, 'Sport Lisboa e Benfica', 'SLB', ''),
(4, 'Sporting Clube de Portugal', 'SCP', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogadores`
--

CREATE TABLE `jogadores` (
  `id_jogador` int(11) NOT NULL,
  `id_equipa` int(11) DEFAULT NULL,
  `nome` varchar(255) NOT NULL,
  `nacionalidade` varchar(100) DEFAULT NULL,
  `data_nascimento` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `jogadores`
--

INSERT INTO `jogadores` (`id_jogador`, `id_equipa`, `nome`, `nacionalidade`, `data_nascimento`) VALUES
(1, 2, 'Pepe', 'Portuguesa', NULL),
(2, 1, 'Cláudio Falcão', 'Brasileiro', NULL),
(3, 3, 'Otamendi', 'Argentino', '1988-02-12 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipas`
--
ALTER TABLE `equipas`
  ADD PRIMARY KEY (`id_equipa`);

--
-- Indexes for table `jogadores`
--
ALTER TABLE `jogadores`
  ADD PRIMARY KEY (`id_jogador`),
  ADD KEY `id_equipa` (`id_equipa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equipas`
--
ALTER TABLE `equipas`
  MODIFY `id_equipa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jogadores`
--
ALTER TABLE `jogadores`
  MODIFY `id_jogador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
