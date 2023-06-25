-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 03:45 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ailearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_06_24_154100_create_siswa_table', 2),
(3, '2023_06_24_041536_create_users_table', 3),
(4, '2023_06_24_045512_guru', 3),
(5, '2023_06_24_045520_siswa', 3),
(6, '2023_06_24_045525_admin', 3),
(7, '2023_06_24_184607_create_sessions_table', 3),
(8, '2023_06_24_214958_create_siswas_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('WBdpNRTAeHi1vixqU0nstzRbf0Ob1xApRSzFCNiM', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVkdNUUlSSlBxYzdHWHpwSDhRa2drblBFd2RyMmNJVXRGRm94aEtyMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2VyL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo4OiJtZXNzYWdlcyI7YTo1OntpOjA7YToyOntzOjQ6InJvbGUiO3M6Njoic3lzdGVtIjtzOjc6ImNvbnRlbnQiO3M6Mjk6InlvdSBhcmUgTGFyYXZlbCBjaGF0Z3B0IGNsb25lIjt9aToxO2E6Mjp7czo0OiJyb2xlIjtzOjQ6InVzZXIiO3M6NzoiY29udGVudCI7czo0OiJ0ZXN0Ijt9aToyO2E6Mjp7czo0OiJyb2xlIjtzOjk6ImFzc2lzdGFudCI7czo3OiJjb250ZW50IjtzOjM0OiJIZWxsbyEgSG93IGNhbiBJIGFzc2lzdCB5b3UgdG9kYXk/Ijt9aTozO2E6Mjp7czo0OiJyb2xlIjtzOjQ6InVzZXIiO3M6NzoiY29udGVudCI7czo5OiJha3Ugc2FuZ2UiO31pOjQ7YToyOntzOjQ6InJvbGUiO3M6OToiYXNzaXN0YW50IjtzOjc6ImNvbnRlbnQiO3M6MTc1OiJJJ20gc29ycnksIGJ1dCBJIGFtIGFuIEFJIGxhbmd1YWdlIG1vZGVsIGFuZCBJIGFtIG5vdCBwcm9ncmFtbWVkIHRvIGVuZ2FnZSBpbiBvciByZXNwb25kIHRvIGluYXBwcm9wcmlhdGUgb3Igb2ZmZW5zaXZlIGxhbmd1YWdlLiBJcyB0aGVyZSBzb21ldGhpbmcgZWxzZSBJIGNhbiBhc3Npc3QgeW91IHdpdGg/Ijt9fX0=', 1687636737);

-- --------------------------------------------------------

--
-- Table structure for table `siswas`
--

CREATE TABLE `siswas` (
  `id_siswa` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `kode_kelas` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswas`
--

INSERT INTO `siswas` (`id_siswa`, `username`, `email`, `password`, `kode_kelas`, `created_at`, `updated_at`) VALUES
(1, 'bagus12', 'bagusromadhon007@gmail.com', '$2y$10$FdYqyTfmnH6DoqWNFMMroOyYQO4yDG3t8bQznQQRF9zLRdDsPMGA2', NULL, '2023-06-24 14:53:35', '2023-06-24 14:53:35'),
(3, 'bagusko', 'siswa@gmail.com', '$2y$10$ZEOX4Z0L5.mcncJPcrQsnOApxkBVq/UPUYvSidazDoMs4Ot2IFfKa', NULL, '2023-06-24 16:09:12', '2023-06-24 16:09:12'),
(4, 'bagus12', 'bagus11@gmail.com', '$2y$10$O8jk/tIPmsQFj0BWdreE.eM2F9iyersoP9KiDsOex2gcoQT5lC2kS', NULL, '2023-06-24 18:10:46', '2023-06-24 18:10:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id_siswa`),
  ADD UNIQUE KEY `siswas_email_unique` (`email`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id_siswa` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
