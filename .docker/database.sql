-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2019 at 04:09 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cardapion`
--

-- --------------------------------------------------------

--
-- Table structure for table `cardapios`
--

CREATE TABLE `cardapios` (
  `id_cardapio` int(10) UNSIGNED NOT NULL,
  `id_estabelecimento` int(10) UNSIGNED NOT NULL,
  `id_usuario` bigint(20) UNSIGNED NOT NULL,
  `foto_cardapio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cardapios`
--

INSERT INTO `cardapios` (`id_cardapio`, `id_estabelecimento`, `id_usuario`, `foto_cardapio`, `created_at`, `updated_at`) VALUES
(1, 4, 2, '040414201912175df853be0abc0.jpeg', '2019-12-17 08:04:14', '2019-12-17 08:04:14'),
(2, 7, 2, '040758201912175df8549e7c479.png', '2019-12-17 08:07:58', '2019-12-17 08:07:58'),
(3, 6, 2, '040814201912175df854ae8a2bc.jpeg', '2019-12-17 08:08:14', '2019-12-17 08:08:14'),
(4, 6, 2, '050819201912175df862c3cbb65.jpeg', '2019-12-17 09:08:19', '2019-12-17 09:08:19'),
(5, 4, 5, '115355201912175df8c1d3e2032.png', '2019-12-17 15:53:56', '2019-12-17 15:53:56'),
(6, 8, 8, '173534201912175df911e600b0f.jpeg', '2019-12-17 21:35:34', '2019-12-17 21:35:34'),
(7, 9, 9, '184042201912175df9212a13a5f.png', '2019-12-17 22:40:42', '2019-12-17 22:40:42');

-- --------------------------------------------------------

--
-- Table structure for table `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(10) UNSIGNED NOT NULL,
  `conteudo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nota` int(10) UNSIGNED NOT NULL,
  `id_usuario` bigint(20) UNSIGNED NOT NULL,
  `id_estabelecimento` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `conteudo`, `nota`, `id_usuario`, `id_estabelecimento`, `created_at`, `updated_at`) VALUES
(7, 'pas', 4, 6, 6, '2019-01-17 16:46:34', '2019-12-17 16:46:34'),
(9, 'voltarei em breve, obrigadx', 5, 1, 6, '2019-12-17 16:49:56', '2019-12-17 16:49:56'),
(12, 'nao gostei da comida, sem sal', 1, 1, 6, '2019-12-17 18:04:07', '2019-12-17 18:04:07'),
(13, 'nao sei nao sei', 5, 1, 6, '2019-12-17 18:23:48', '2019-12-17 18:23:48'),
(14, 'topssimo', 5, 1, 4, '2019-12-17 18:25:00', '2019-12-17 18:25:00'),
(15, 't o p', 5, 1, 4, '2019-12-17 18:26:40', '2019-12-17 18:26:40'),
(16, 'muy bueno', 5, 1, 4, '2019-12-17 18:26:54', '2019-12-17 18:26:54'),
(17, 'testando', 5, 1, 4, '2019-12-17 18:27:12', '2019-12-17 18:27:12'),
(18, 'mediano mas ok', 5, 1, 1, '2019-12-17 18:28:33', '2019-12-17 18:28:33'),
(19, 'eu gostei', 5, 1, 1, '2019-12-17 18:28:47', '2019-12-17 18:28:47'),
(20, 'meio pombo', 3, 1, 1, '2019-12-17 18:29:03', '2019-12-17 18:29:03'),
(21, 'testando', 5, 1, 5, '2019-12-17 18:35:01', '2019-12-17 18:35:01'),
(23, 'uashdas', 5, 1, 5, '2019-12-17 18:36:32', '2019-12-17 18:36:32'),
(24, 'testando 2', 5, 1, 4, '2019-12-17 18:37:42', '2019-12-17 18:37:42'),
(25, 'ate q os precos valem a pena', 4, 1, 6, '2019-12-17 18:38:06', '2019-12-17 18:38:06'),
(26, 'meio pombo mesmo', 2, 1, 1, '2019-12-17 18:38:27', '2019-12-17 18:38:27'),
(27, 'avaliando hehe', 4, 8, 2, '2019-12-17 21:32:51', '2019-12-17 21:32:51'),
(28, 'estou avaliando voces', 4, 8, 3, '2019-12-17 21:33:16', '2019-12-17 21:33:16'),
(29, 'MUITO CARO !!!', 1, 8, 3, '2019-12-17 21:33:37', '2019-12-17 21:33:37'),
(30, 'mto bom', 3, 8, 8, '2019-12-17 21:36:28', '2019-12-17 21:36:28'),
(31, 'mto bom', 4, 9, 9, '2019-12-17 22:41:30', '2019-12-17 22:41:30'),
(32, 'haha', 5, 10, 6, '2019-12-18 01:14:13', '2019-12-18 01:14:13'),
(33, 'melhor estabelecimento', 5, 11, 9, '2019-12-18 01:30:22', '2019-12-18 01:30:22');

-- --------------------------------------------------------

--
-- Table structure for table `estabelecimentos`
--

CREATE TABLE `estabelecimentos` (
  `id_estabelecimento` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `horario_inicial` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `horario_final` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dias_funcionamento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_nota` decimal(2,1) DEFAULT NULL,
  `classe` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_filial` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `estabelecimentos`
--

INSERT INTO `estabelecimentos` (`id_estabelecimento`, `nome`, `endereco`, `horario_inicial`, `horario_final`, `dias_funcionamento`, `media_nota`, `classe`, `id_filial`, `created_at`, `updated_at`) VALUES
(1, 'teste', 'rua teste', '08:00', '00:00', 'Domingo a Domingo', '3.8', '$$$', NULL, '2019-12-15 05:10:35', '2019-12-17 18:38:28'),
(2, 'teste2', 'teste2', '01:01', '12:12', 'Segunda a Sexta', '4.0', '$', NULL, '2019-12-15 05:31:41', '2019-12-17 21:32:52'),
(3, 'teste3', 'iuiou', '08:59', '08:59', 'Segunda a Sábado', '2.5', '$$$$$', NULL, '2019-12-15 05:32:06', '2019-12-17 21:33:38'),
(4, 'estabelecimento top', 'rua dos bobs', '07:08', '23:00', 'Domingo a Domingo', '5.0', '$$', NULL, '2019-12-15 05:32:28', '2019-12-17 18:37:42'),
(5, 'teste ultimate', 'ksjkflds', '01:01', '12:01', 'Segunda a Sábado', '5.0', '$$', NULL, '2019-12-15 05:32:46', '2019-12-17 18:36:32'),
(6, 'Cardapion Estabelecimento', 'rua dos bobos', '07:00', '18:00', 'Segunda a Sábado', '4.0', '$$$', NULL, '2019-12-15 06:06:39', '2019-12-18 01:14:14'),
(7, 'uhu', 'uhuh', '08:59', '09:08', 'Domingo a Domingo', NULL, '$$', NULL, '2019-12-17 07:38:10', '2019-12-17 07:38:10'),
(8, 'exemplo', 'rua do exemplo', '09:00', '23:00', 'Segunda a Sexta', '3.0', '$$$', NULL, '2019-12-17 21:34:50', '2019-12-17 21:36:28'),
(9, 'ufam', 'rua bla bla', '09:59', '18:00', 'Segunda a Sábado', '4.5', '$$$', NULL, '2019-12-17 22:39:53', '2019-12-18 01:30:22');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_053923_create_estabelecimentos_table', 1),
(5, '2019_12_15_045247_create_produtos_table', 2),
(6, '2019_12_15_045938_create_cardapios_table', 3),
(7, '2019_12_16_210950_create_produtos_table', 4),
(8, '2019_12_17_120948_create_comentarios_table', 5),
(9, '2019_12_17_122108_create_notas_table', 6),
(10, '2019_12_17_133709_create_respostas_comentarios_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `notas`
--

CREATE TABLE `notas` (
  `id_nota` int(10) UNSIGNED NOT NULL,
  `nota` int(10) UNSIGNED NOT NULL,
  `id_usuario` bigint(20) UNSIGNED NOT NULL,
  `id_estabelecimento` int(10) UNSIGNED NOT NULL,
  `id_comentario` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notas`
--

INSERT INTO `notas` (`id_nota`, `nota`, `id_usuario`, `id_estabelecimento`, `id_comentario`, `created_at`, `updated_at`) VALUES
(1, 4, 6, 6, 7, '2019-12-17 16:48:28', '2019-12-17 16:48:28'),
(2, 5, 1, 6, 9, '2019-12-17 16:51:42', '2019-12-17 16:51:42'),
(3, 3, 1, 4, 9, '2019-12-17 17:25:20', '2019-12-17 17:25:20'),
(4, 1, 1, 6, 9, '2019-12-17 18:04:07', '2019-12-17 18:04:07'),
(5, 5, 1, 6, 9, '2019-12-17 18:23:48', '2019-12-17 18:23:48'),
(6, 5, 1, 4, 9, '2019-12-17 18:25:00', '2019-12-17 18:25:00'),
(7, 5, 1, 4, 9, '2019-12-17 18:26:40', '2019-12-17 18:26:40'),
(8, 5, 1, 4, 9, '2019-12-17 18:26:54', '2019-12-17 18:26:54'),
(9, 5, 1, 4, 9, '2019-12-17 18:27:12', '2019-12-17 18:27:12'),
(10, 5, 1, 1, 9, '2019-12-17 18:28:33', '2019-12-17 18:28:33'),
(11, 5, 1, 1, 9, '2019-12-17 18:28:47', '2019-12-17 18:28:47'),
(12, 3, 1, 1, 9, '2019-12-17 18:29:03', '2019-12-17 18:29:03'),
(13, 5, 1, 5, 9, '2019-12-17 18:35:02', '2019-12-17 18:35:02'),
(14, 5, 1, 5, 9, '2019-12-17 18:35:17', '2019-12-17 18:35:17'),
(15, 5, 1, 5, 9, '2019-12-17 18:36:32', '2019-12-17 18:36:32'),
(16, 5, 1, 4, 9, '2019-12-17 18:37:42', '2019-12-17 18:37:42'),
(17, 4, 1, 6, 9, '2019-12-17 18:38:06', '2019-12-17 18:38:06'),
(18, 2, 1, 1, 9, '2019-12-17 18:38:27', '2019-12-17 18:38:27'),
(19, 4, 8, 2, 27, '2019-12-17 21:32:52', '2019-12-17 21:32:52'),
(20, 4, 8, 3, 27, '2019-12-17 21:33:16', '2019-12-17 21:33:16'),
(21, 1, 8, 3, 27, '2019-12-17 21:33:37', '2019-12-17 21:33:37'),
(22, 3, 8, 8, 27, '2019-12-17 21:36:28', '2019-12-17 21:36:28'),
(23, 4, 9, 9, 31, '2019-12-17 22:41:30', '2019-12-17 22:41:30'),
(24, 5, 10, 6, 32, '2019-12-18 01:14:14', '2019-12-18 01:14:14'),
(25, 5, 11, 9, 33, '2019-12-18 01:30:22', '2019-12-18 01:30:22');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` decimal(5,2) NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_estabelecimento` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`id_produto`, `nome`, `preco`, `foto`, `id_estabelecimento`, `created_at`, `updated_at`) VALUES
(1, 'julia prato', '10.00', NULL, 6, '2019-12-17 07:38:51', '2019-12-17 07:38:51'),
(2, 'testseteste', '3.00', NULL, 5, '2019-12-17 08:10:18', '2019-12-17 08:10:18'),
(3, 'aa', '22.00', '041137201912175df85579cec2c.jpeg', 4, '2019-12-17 08:11:37', '2019-12-17 08:11:37'),
(4, 'macarronada', '40.00', NULL, 4, '2019-12-17 18:55:04', '2019-12-17 18:55:04'),
(5, 'pizza', '20.00', NULL, 7, '2019-12-17 19:10:31', '2019-12-17 19:10:31'),
(6, 'klasd', '34.00', NULL, 9, '2019-12-17 22:41:03', '2019-12-17 22:41:03');

-- --------------------------------------------------------

--
-- Table structure for table `respostas_comentarios`
--

CREATE TABLE `respostas_comentarios` (
  `id_resposta` int(10) UNSIGNED NOT NULL,
  `conteudo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_usuario` bigint(20) UNSIGNED NOT NULL,
  `id_estabelecimento` int(10) UNSIGNED NOT NULL,
  `id_comentario` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `respostas_comentarios`
--

INSERT INTO `respostas_comentarios` (`id_resposta`, `conteudo`, `id_usuario`, `id_estabelecimento`, `id_comentario`, `created_at`, `updated_at`) VALUES
(1, 'tem sal simm', 1, 6, 12, '2019-12-17 18:05:45', '2019-12-17 18:05:45'),
(2, 'nao tem nao', 1, 6, 12, '2019-12-17 18:06:45', '2019-12-17 18:06:45'),
(3, 'HAHAHAHA', 1, 6, 12, '2019-12-17 18:07:51', '2019-12-17 18:07:51'),
(4, 'pq??? DONO AQUI', 1, 1, 20, '2019-12-17 18:38:46', '2019-12-17 18:38:46'),
(5, 'o q vc quis dizer com isso ?', 1, 5, 23, '2019-12-17 19:11:28', '2019-12-17 19:11:28'),
(6, 'é bom mesmo !!', 8, 8, 30, '2019-12-17 21:36:49', '2019-12-17 21:36:49'),
(7, 'vdd mto bom', 9, 9, 31, '2019-12-17 22:41:53', '2019-12-17 22:41:53'),
(8, 'É verdade', 1, 6, 25, '2019-12-17 23:41:40', '2019-12-17 23:41:40'),
(9, 'vdd mesmo', 10, 6, 25, '2019-12-18 01:13:55', '2019-12-18 01:13:55'),
(10, 'Gostei', 11, 8, 30, '2019-12-18 01:26:13', '2019-12-18 01:26:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'julia', 'jl@g.com', NULL, '$2y$10$r7xnoiFv97Q8zvaCSl1a5u75uSAiqgUxkT4OlpiUk2lr0L8YaEhYC', NULL, '2019-12-15 05:06:22', '2019-12-15 05:06:22'),
(2, 'julia', 'julia@g.com', NULL, '$2y$10$4unIr2aWvx7ajgIiOZOHe.jF8SdDP/WdccC7mYTcFmc3tL.fPhWB6', NULL, '2019-12-17 07:30:28', '2019-12-17 07:30:28'),
(3, 'testando', 'tt@gmail.com', NULL, '$2y$10$04qSPhY8ArPlQv9tIKFjSeAP5hD2v5REqXx3iHuSX0L7ogBmffQ9u', NULL, '2019-12-17 15:47:12', '2019-12-17 15:47:12'),
(4, 'mano', 'a@gmail.com', NULL, '$2y$10$cKRMtHedEuqTUz9625eZ8.OfJOKZYUtPstTmgxYkSOi5PqXc3MacO', NULL, '2019-12-17 15:51:00', '2019-12-17 15:51:00'),
(5, 'manooo', 'mano@g.com', NULL, '$2y$10$zVNLOHG0A7eaIt2D4H2oRuZznmMqboz2C6NAoLJhIIhkdGaYUq8O.', NULL, '2019-12-17 15:52:44', '2019-12-17 15:52:44'),
(6, 'andre', 'andre@bd.com', NULL, '$2y$10$CspKEmf7rYENFbEQIkyfFuzM3X25AVTQxf6Rcst2Tf6WDPL/TlV5m', NULL, '2019-12-17 16:33:51', '2019-12-17 16:33:51'),
(8, 'exemplo', 'exemplo@gmail.com', NULL, '$2y$10$nSwksSilxVijV6ceSeyMSO5S/.NaFOaBZ56lgou8VWkNfpMTJnEuG', NULL, '2019-12-17 21:31:22', '2019-12-17 21:31:22'),
(9, 'test', 'test@gmail.com', NULL, '$2y$10$eKghaU155dXx/RkAsQ79TecUyEV9nIeDczpj1N4ZYwvIvvmWewz8a', NULL, '2019-12-17 22:38:27', '2019-12-17 22:38:27'),
(10, 'elton', 'elton@gmail.com', NULL, '$2y$10$eoyR1U7hJoiUCThWtbExqOVUaJitqhy2pjSWyDSTZeFDNekrUUEQ.', NULL, '2019-12-18 01:12:36', '2019-12-18 01:12:36'),
(11, 'Amélia', 'amelia@icomp.ufam.edu.br', NULL, '$2y$10$4m9VsxGF/0DjjoQVtsetCuduHdOfv3VaAAvZrWBcJfa4jteYwjClm', NULL, '2019-12-18 01:24:31', '2019-12-18 01:24:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cardapios`
--
ALTER TABLE `cardapios`
  ADD PRIMARY KEY (`id_cardapio`),
  ADD KEY `cardapios_id_estabelecimento_foreign` (`id_estabelecimento`),
  ADD KEY `cardapios_id_usuario_foreign` (`id_usuario`);

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `comentarios_id_estabelecimento_foreign` (`id_estabelecimento`),
  ADD KEY `comentarios_id_usuario_foreign` (`id_usuario`);

--
-- Indexes for table `estabelecimentos`
--
ALTER TABLE `estabelecimentos`
  ADD PRIMARY KEY (`id_estabelecimento`),
  ADD KEY `estabelecimentos_id_filial_foreign` (`id_filial`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id_nota`),
  ADD KEY `notas_id_estabelecimento_foreign` (`id_estabelecimento`),
  ADD KEY `notas_id_usuario_foreign` (`id_usuario`),
  ADD KEY `notas_id_comentario_foreign` (`id_comentario`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `produtos_id_estabelecimento_foreign` (`id_estabelecimento`);

--
-- Indexes for table `respostas_comentarios`
--
ALTER TABLE `respostas_comentarios`
  ADD PRIMARY KEY (`id_resposta`),
  ADD KEY `respostas_comentarios_id_estabelecimento_foreign` (`id_estabelecimento`),
  ADD KEY `respostas_comentarios_id_usuario_foreign` (`id_usuario`),
  ADD KEY `respostas_comentarios_id_comentario_foreign` (`id_comentario`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cardapios`
--
ALTER TABLE `cardapios`
  MODIFY `id_cardapio` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `estabelecimentos`
--
ALTER TABLE `estabelecimentos`
  MODIFY `id_estabelecimento` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `notas`
--
ALTER TABLE `notas`
  MODIFY `id_nota` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `respostas_comentarios`
--
ALTER TABLE `respostas_comentarios`
  MODIFY `id_resposta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cardapios`
--
ALTER TABLE `cardapios`
  ADD CONSTRAINT `cardapios_id_estabelecimento_foreign` FOREIGN KEY (`id_estabelecimento`) REFERENCES `estabelecimentos` (`id_estabelecimento`),
  ADD CONSTRAINT `cardapios_id_usuario_foreign` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`);

--
-- Constraints for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_id_estabelecimento_foreign` FOREIGN KEY (`id_estabelecimento`) REFERENCES `estabelecimentos` (`id_estabelecimento`),
  ADD CONSTRAINT `comentarios_id_usuario_foreign` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`);

--
-- Constraints for table `estabelecimentos`
--
ALTER TABLE `estabelecimentos`
  ADD CONSTRAINT `estabelecimentos_id_filial_foreign` FOREIGN KEY (`id_filial`) REFERENCES `estabelecimentos` (`id_estabelecimento`);

--
-- Constraints for table `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `notas_id_comentario_foreign` FOREIGN KEY (`id_comentario`) REFERENCES `comentarios` (`id_comentario`),
  ADD CONSTRAINT `notas_id_estabelecimento_foreign` FOREIGN KEY (`id_estabelecimento`) REFERENCES `estabelecimentos` (`id_estabelecimento`),
  ADD CONSTRAINT `notas_id_usuario_foreign` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`);

--
-- Constraints for table `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_id_estabelecimento_foreign` FOREIGN KEY (`id_estabelecimento`) REFERENCES `estabelecimentos` (`id_estabelecimento`);

--
-- Constraints for table `respostas_comentarios`
--
ALTER TABLE `respostas_comentarios`
  ADD CONSTRAINT `respostas_comentarios_id_comentario_foreign` FOREIGN KEY (`id_comentario`) REFERENCES `comentarios` (`id_comentario`),
  ADD CONSTRAINT `respostas_comentarios_id_estabelecimento_foreign` FOREIGN KEY (`id_estabelecimento`) REFERENCES `estabelecimentos` (`id_estabelecimento`),
  ADD CONSTRAINT `respostas_comentarios_id_usuario_foreign` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
