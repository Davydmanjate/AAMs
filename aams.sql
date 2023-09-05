-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Jul-2023 às 21:36
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `aams`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avances`
--

CREATE TABLE `avances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `custum_id` bigint(20) UNSIGNED NOT NULL,
  `case_id` bigint(20) UNSIGNED NOT NULL,
  `layer_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `avances`
--

INSERT INTO `avances` (`id`, `custum_id`, `case_id`, `layer_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 11, 6, 4, 'Em andamento', '2023-07-04 11:51:47', '2023-07-04 13:21:45'),
(2, 10, 9, 2, 'Concluído', '2023-07-04 11:57:07', '2023-07-04 13:18:52'),
(3, 7, 10, 4, 'Cancelado', '2023-07-04 11:57:33', '2023-07-04 11:57:33'),
(4, 13, 12, 1, 'Concluído', '2023-07-05 09:31:58', '2023-07-05 09:33:11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cases`
--

CREATE TABLE `cases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `custum_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `audience` date NOT NULL,
  `marital_status` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cases`
--

INSERT INTO `cases` (`id`, `custum_id`, `name`, `province`, `audience`, `marital_status`, `age`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(6, 11, 'José Nuvunga', 'Maputo', '2023-09-13', 'Solteiro/a', '45', 'Requisição de um Defensor', 'O YouTube.com é o recurso de hospedagem de vídeos mais popular e o terceiro site mais popular do mundo.', '2023-07-02 17:41:21', '2023-07-02 17:41:21'),
(7, 8, 'Francisco Massango', 'Manica', '2023-11-21', 'Viúvo/a', '43', 'Requisição de um Defensor', 'Clique no botão verde \"Download\" para salvar o musica ou selecione o formato desejado (MP3, MP4, WEBM, 3GP).', '2023-07-02 17:42:28', '2023-07-02 17:42:28'),
(9, 10, 'Nelma Mabunda', 'Cabo Delgado', '2023-12-06', 'Divorciado/a', '41', 'Requisição de um Defensor', 'Ola, minha mulher pediu divorcio eu lhe dei mas agora volta a me exigir tecto para crianca e pensao de alimento sem que eu tenha a mandado embora.', '2023-07-02 17:46:06', '2023-07-02 17:46:06'),
(10, 7, 'Venâncio Sanhco', 'Gaza', '2023-11-20', 'Divorciado/a', '53', 'Requisição de um Defensor', 'Clique no botão verde \"Download\" para salvar o musica ou selecione o formato desejado (MP3, MP4, WEBM, 3GP).', '2023-07-02 17:47:46', '2023-07-02 17:47:46'),
(11, 12, 'Fernando Manhiça', 'Niassa', '2023-11-22', 'Casado/a', '38', 'Pedido de Assessoria', 'Clique no botão verde \"Download\" para salvar o musica ou selecione o formato desejado (MP3, MP4, WEBM, 3GP).', '2023-07-04 11:23:38', '2023-07-04 11:23:38'),
(12, 13, 'Albertina Puza', 'Zambézia', '2023-07-20', 'Viúvo/a', '56', 'Requisição de um Defensor', 'Clique no botão verde \"Download\" para salvar o musica ou selecione o formato desejado (MP3, MP4, WEBM, 3GP).', '2023-07-04 11:24:51', '2023-07-04 11:24:51');

-- --------------------------------------------------------

--
-- Estrutura da tabela `custums`
--

CREATE TABLE `custums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `custums`
--

INSERT INTO `custums` (`id`, `name`, `email`, `telefone`, `password`, `created_at`, `updated_at`) VALUES
(7, 'Venâncio Sanhco', 'venancio@gmail.com', '870091001', '$2y$10$6Q84.wf64FJ8WRa/gh1dWeEcj992eWneLA2CnXI4XD7lvP4t7eca.', '2023-07-02 17:26:25', '2023-07-02 17:27:13'),
(8, 'Francisco Massango', 'francisco@gmail.com', '820033300', '$2y$10$svGgwITe.iZfE5/Ma4hr5.qVMmWfExt8QX1qjx/OCR8pj.MZJXHSm', '2023-07-02 17:28:06', '2023-07-02 17:39:19'),
(9, 'Audência Quive', 'audence@gmail.com', '8200033003', '$2y$10$z3lkzu9P94oOZZNDnzcilO6kNyHrxF4mPZGLBloIRt41MsBqXVFCm', '2023-07-02 17:28:46', '2023-07-02 17:28:46'),
(10, 'Nelma Mabunda', 'nelma@gmail.com', '859000900', '$2y$10$2FCyRQmt/nXalNhvC06Z8O4xTsDo/MeK4rId1Eexurbg9r.NgAjNi', '2023-07-02 17:29:10', '2023-07-02 17:29:10'),
(11, 'José Nuvunga', 'jose@gmail.com', '843004005', '$2y$10$.aZZm13Pt/XK8E3NBfCM6.gMc1..oghP6eQhup7X.uChdGmZbRepG', '2023-07-02 17:30:19', '2023-07-02 17:30:19'),
(12, 'Fernando Manhiça', 'fernando@gmail.com', '859100900', '$2y$10$Efc8RTJy3AvoMNXcRcXrEOfdQ1S/JIQvOx5n1y3jg5b3ZtNBtNzjm', '2023-07-04 11:20:03', '2023-07-04 11:20:03'),
(13, 'Albertina Puza', 'albertina@hotmail.com', '862003004', '$2y$10$yG.z5sFTtYDt9yawAhDkh.XGOC9.y7mncbYaQS4HRABeaHlXut0p2', '2023-07-04 11:21:02', '2023-07-04 11:21:02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `layers`
--

CREATE TABLE `layers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `layers`
--

INSERT INTO `layers` (`id`, `name`, `email`, `telefone`, `category`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Vitória Adolfo', 'vitoria@hotmail.com', '843004005', 'Advogada da 3ª Ordem', 'Nampula', '2023-06-29 20:13:23', '2023-07-02 17:13:12'),
(2, 'Elton Nhantumbo', 'elton@gmail.com', '820003300', 'Advogada da 1ª Ordem', 'Cabo Delgado', '2023-06-29 20:14:13', '2023-07-02 17:13:28'),
(3, 'Marcia Saveca', 'marcia@gmail.com', '859000900', 'Advogado da 2ª Ordem', 'Tete', '2023-06-29 20:14:40', '2023-06-29 20:14:40'),
(4, 'Gerson Tembe', 'gersoni@gmail.com', '860100100', 'Advogado da 2ª Ordem', 'Gaza', '2023-07-02 18:15:50', '2023-07-08 17:00:57');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(26, '2023_06_13_211703_create_custums_table', 2),
(27, '2023_06_15_105141_create_layers_table', 2),
(28, '2023_06_22_204239_create_cases_table', 2),
(32, '2023_06_28_185237_create_avances_table', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'David', 'david@gmail.com', NULL, '$2y$10$QEJkHuVJCn6VviF.mk5yEecWeFntyWps48G.NdAwAsA4j4zu9VjC6', 'Admin', NULL, '2023-06-15 11:36:50', '2023-06-15 11:36:50'),
(2, 'Feijao', 'feijao@outlook.com', NULL, '$2y$10$uJ4QmIfncrnZt97tUGxshObsjEAAORzKcH.9x1PxVb0SrnBlyG/gm', 'Admin', NULL, '2023-06-15 11:37:15', '2023-06-15 11:37:15'),
(3, 'Fidel', 'fidel@hotmail.com', NULL, '$2y$10$KldkNyWktLb5ErLegynU/eQrl/6sVVS/BsxSKdMFa0Cw43qxDvG92', 'Admin', NULL, '2023-07-08 16:57:15', '2023-07-08 16:57:15');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `avances`
--
ALTER TABLE `avances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `avances_layer_id_foreign` (`layer_id`),
  ADD KEY `avances_custum_id_foreign` (`custum_id`),
  ADD KEY `avances_case_id_foreign` (`case_id`);

--
-- Índices para tabela `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cases_custum_id_foreign` (`custum_id`);

--
-- Índices para tabela `custums`
--
ALTER TABLE `custums`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `custums_email_unique` (`email`),
  ADD UNIQUE KEY `custums_telefone_unique` (`telefone`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `layers`
--
ALTER TABLE `layers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `layers_email_unique` (`email`),
  ADD UNIQUE KEY `layers_telefone_unique` (`telefone`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `avances`
--
ALTER TABLE `avances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `cases`
--
ALTER TABLE `cases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `custums`
--
ALTER TABLE `custums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `layers`
--
ALTER TABLE `layers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `avances`
--
ALTER TABLE `avances`
  ADD CONSTRAINT `avances_case_id_foreign` FOREIGN KEY (`case_id`) REFERENCES `cases` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `avances_custum_id_foreign` FOREIGN KEY (`custum_id`) REFERENCES `custums` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `avances_layer_id_foreign` FOREIGN KEY (`layer_id`) REFERENCES `layers` (`id`);

--
-- Limitadores para a tabela `cases`
--
ALTER TABLE `cases`
  ADD CONSTRAINT `cases_custum_id_foreign` FOREIGN KEY (`custum_id`) REFERENCES `custums` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
