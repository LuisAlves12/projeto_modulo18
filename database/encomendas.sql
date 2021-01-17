-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Jan-2021 às 16:10
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `encomendas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `morada` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` int(11) NOT NULL DEFAULT 1,
  `ficheiro_cliente` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagem_cliente` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome`, `morada`, `telefone`, `email`, `id_user`, `ficheiro_cliente`, `imagem_cliente`, `updated_at`, `created_at`) VALUES
(1, 'José Alves', 'Rua 25 de Abril', '913345665', 'jalves@gmail.com', 1, NULL, NULL, '2020-11-05 00:00:00', '2020-11-05 00:00:00'),
(2, 'Antonio Pereira', 'Rua Nuno Alveres', '913334442', 'apereira@gmail.com', 1, NULL, NULL, '2020-11-05 00:00:00', '2020-11-05 00:00:00'),
(3, 'Rafael Ferreira', 'Rua Vasco da gama', '913346665', 'rferreira@gmail.com', 1, NULL, NULL, '2020-11-05 00:00:00', '2020-11-05 00:00:00'),
(4, 'João Manuel', 'Rua da ponte', '918976253', 'jmanuel@gmail.com', 1, NULL, NULL, '2020-11-05 00:00:00', '2020-11-05 00:00:00'),
(5, 'Inês Fonseca', 'Rua António Palha', '913678925', 'ifonseca@gmail.com', 1, NULL, NULL, '2020-11-05 00:00:00', '2020-11-05 00:00:00'),
(11, 'Luis Alves', 'Rua 25 de abril', '1234567890123', 'luisalves@aedah.pt', 1, NULL, NULL, '2021-01-08 17:23:36', '2021-01-08 17:23:28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `encomendas`
--

CREATE TABLE `encomendas` (
  `id_encomenda` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL DEFAULT 0,
  `id_vendedor` int(11) NOT NULL DEFAULT 0,
  `data` date DEFAULT NULL,
  `observacoes` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `encomendas`
--

INSERT INTO `encomendas` (`id_encomenda`, `id_cliente`, `id_vendedor`, `data`, `observacoes`, `updated_at`, `created_at`) VALUES
(1, 1, 1, '2020-12-02', 'Entregar durante a tarde.', '2020-12-02 00:00:00', '2020-12-02 00:00:00'),
(2, 1, 2, '2020-12-03', NULL, '2020-12-31 00:00:00', '2020-12-31 00:00:00'),
(3, 3, 1, '2020-12-23', 'O Cliente ficou insatisfeito com a última encomenda.', '2020-12-22 00:00:00', '2020-12-31 00:00:00'),
(4, 4, 2, '2020-12-24', 'Muito bons', '2020-12-24 00:00:00', '2020-12-25 00:00:00'),
(5, 0, 0, '2021-01-01', 'ola', '2021-01-08 16:44:20', '2021-01-08 16:44:20'),
(6, 0, 0, '2021-01-01', 'ola', '2021-01-08 16:47:34', '2021-01-08 16:47:34'),
(7, 0, 0, '2021-01-01', 'ola', '2021-01-08 16:49:55', '2021-01-08 16:49:55'),
(8, 0, 0, '2021-01-01', 'ola', '2021-01-08 16:59:51', '2021-01-08 16:59:51'),
(9, 0, 0, '2021-01-01', 'aaaaaaa', '2021-01-08 17:19:33', '2021-01-08 17:19:33'),
(10, 3, 2, '2021-01-01', 'aaaaaaa', '2021-01-08 17:21:11', '2021-01-08 17:21:11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `encomendas_produtos`
--

CREATE TABLE `encomendas_produtos` (
  `id_enc_prod` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `id_encomenda` int(11) NOT NULL,
  `quantidade` int(11) DEFAULT 0,
  `preco` double DEFAULT 0,
  `desconto` double DEFAULT 0,
  `obervacoes` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `encomendas_produtos`
--

INSERT INTO `encomendas_produtos` (`id_enc_prod`, `id_produto`, `id_encomenda`, `quantidade`, `preco`, `desconto`, `obervacoes`, `updated_at`, `created_at`) VALUES
(1, 1, 1, 2, 1.5, 0, NULL, '2020-12-02 00:00:00', '2020-12-31 00:00:00'),
(2, 2, 1, 3, 10.5, 0, NULL, '2020-12-03 00:00:00', '2020-12-25 00:00:00'),
(3, 3, 3, 3, 11.5, 0, NULL, '2020-12-11 00:00:00', '2020-12-22 00:00:00'),
(4, 4, 4, 2, 21.5, 0, NULL, '2020-12-03 00:00:00', '2020-12-31 00:00:00'),
(6, 1, 11, 0, 0, 0, NULL, '2021-01-15 16:09:32', '2021-01-15 16:09:32');

-- --------------------------------------------------------

--
-- Estrutura da tabela `likes`
--

CREATE TABLE `likes` (
  `id_produto` int(11) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `id_like` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `likes`
--

INSERT INTO `likes` (`id_produto`, `id_user`, `id_like`) VALUES
(1, 3, 1),
(NULL, 3, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `designacao` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `imagem_produto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stock` int(9) DEFAULT 0,
  `preco` double DEFAULT 0,
  `observacoes` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `designacao`, `imagem_produto`, `stock`, `preco`, `observacoes`, `updated_at`, `created_at`) VALUES
(1, 'TV LG', NULL, 100, 150, NULL, '2020-12-02 00:00:00', '2020-12-02 00:00:00'),
(2, 'TV SONY', NULL, 200, 50, NULL, '2020-12-25 00:00:00', '2020-12-31 00:00:00'),
(3, 'PC ASUS', NULL, 50, 250, NULL, '2020-12-04 00:00:00', '2020-12-30 00:00:00'),
(4, 'Apple iPhone', NULL, 200, 1000, NULL, '2020-12-02 00:00:00', '2020-12-31 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_user` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'normal' COMMENT 'normal ou admin',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `tipo_user`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Luis Alves', 'a15016@aedah.pt', NULL, '$2y$10$oqih4teIkH2T8pD9xjSGVu0Vyy2FEbMsllo3pX/xDhQALAc5b8GFu', 'admin', NULL, '2021-01-15 16:06:03', '2021-01-15 16:06:03'),
(2, 'Luis Filipe', 'a1234@aedah.pt', NULL, '$2y$10$koBC6JqhXm/ZZtN8QVqxAO2Z4z7uyCtEUX7GI2Z1uQoh3Y/V3/T96', 'normal', NULL, '2021-01-15 16:06:33', '2021-01-15 16:06:33'),
(3, 'Luis Silva', 'luisalve627@gmail.com', NULL, '$2y$10$ip6IJc55T9YFcGRZ3UytBOkDNEZm9xtOUmuH3CPoqbvqVMhZ4WEWK', 'normal', NULL, '2021-01-17 14:12:08', '2021-01-17 14:12:08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedores`
--

CREATE TABLE `vendedores` (
  `id_vendedor` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `especialidade` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `vendedores`
--

INSERT INTO `vendedores` (`id_vendedor`, `nome`, `especialidade`, `email`, `updated_at`, `created_at`) VALUES
(1, 'Manuel Pacheco', 'eletronica', 'mpacheco@Gmail.com', '2020-11-05 00:00:00', '2020-11-05 00:00:00'),
(2, 'Noé Silva', 'Informática', 'nsilva@gmail.com', '2020-11-05 00:00:00', '2020-11-05 00:00:00'),
(3, 'Luís Gomes', 'eletromecanica', 'lgomes', '2020-11-05 00:00:00', '2020-11-05 00:00:00'),
(4, 'António Filipe', 'Medicina', 'afilipe@gmail.com', '2020-11-05 00:00:00', '2020-11-05 00:00:00'),
(5, 'Tiago Machado', 'Bicicletas', 'tmachado@gmail.com', '2020-11-05 00:00:00', '2020-11-05 00:00:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `encomendas`
--
ALTER TABLE `encomendas`
  ADD PRIMARY KEY (`id_encomenda`);

--
-- Índices para tabela `encomendas_produtos`
--
ALTER TABLE `encomendas_produtos`
  ADD PRIMARY KEY (`id_enc_prod`);

--
-- Índices para tabela `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id_like`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vendedores`
--
ALTER TABLE `vendedores`
  ADD PRIMARY KEY (`id_vendedor`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `encomendas`
--
ALTER TABLE `encomendas`
  MODIFY `id_encomenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `encomendas_produtos`
--
ALTER TABLE `encomendas_produtos`
  MODIFY `id_enc_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `likes`
--
ALTER TABLE `likes`
  MODIFY `id_like` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `vendedores`
--
ALTER TABLE `vendedores`
  MODIFY `id_vendedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
