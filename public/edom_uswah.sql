-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2020 at 07:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edom_uswah`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Inti', 'Pengurus inti LDK USWAH UPN Veteran Jakarta', '2020-07-06 22:26:48', '2020-07-07 01:45:53'),
(2, 'Kaderisasi dan Pembinaan', '⁣KPU adalah salah satu divisi yang berada di UKM Uswah yang bergerak di bidang kaderisasi dan pembinaan.', '2020-07-07 01:47:16', '2020-07-07 01:47:16'),
(3, 'Sosial Keumatan', 'Sosial Keumatan (SOULMATE) adalah salah satu departemen yang berada di UKM Uswah yang bergerak dalam menyikapi isu keumatan dan Kemanusiaan . ⁣', '2020-07-07 01:49:06', '2020-07-07 01:49:06'),
(4, 'Ilmy', 'ILMY yaitu salah satu departemen yang berada di UKM Uswah yang bergerak di bidang keilmuan.', '2020-07-07 01:49:36', '2020-07-07 01:49:36'),
(5, 'Syi\'ar', 'Syi\'ar adalah salah satu departemen di UKM Uswah yang membangun dakwah secara aktif dan kondusif serta menjadi sarana kehumasan dakwah kampus ⁣', '2020-07-07 01:50:07', '2020-07-07 01:50:07'),
(6, 'Rumah tangga', 'Rumah tangga (RUMGA), adalah salah satu departemen yang berada di UKM Uswah yang bergerak di bidang kesekretariatan. ⁣', '2020-07-07 01:50:39', '2020-07-07 01:50:39');

-- --------------------------------------------------------

--
-- Table structure for table `edom_aspects`
--

CREATE TABLE `edom_aspects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `aspect_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `edom_aspects`
--

INSERT INTO `edom_aspects` (`id`, `aspect_name`, `created_at`, `updated_at`) VALUES
(1, 'Kemampuan melaksanakan tanggung jawab yang diberikan', NULL, NULL),
(2, 'Kemampuan mendengarkan pendapat orang lain', NULL, NULL),
(3, 'Keaktifan dalam memberikan pendapat', NULL, NULL),
(4, 'Keaktifan di group organisasi', NULL, NULL),
(5, 'Keaktifan dalam mengikuti program kerja organisasi', NULL, NULL),
(6, 'Kemampuan menjaga nama baik organisasi', NULL, NULL),
(7, 'Kemampuan menjadi pribadi yang merepresentasikan agama', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `edom_ratings`
--

CREATE TABLE `edom_ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rater_id` bigint(20) UNSIGNED NOT NULL,
  `rated_id` bigint(20) UNSIGNED NOT NULL,
  `aspect_id` bigint(20) UNSIGNED NOT NULL,
  `score` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `edom_ratings`
--

INSERT INTO `edom_ratings` (`id`, `rater_id`, `rated_id`, `aspect_id`, `score`, `created_at`, `updated_at`) VALUES
(1, 19, 6, 1, 4, '2020-07-07 08:44:05', '2020-07-07 08:44:05'),
(2, 19, 6, 2, 4, '2020-07-07 08:44:06', '2020-07-07 08:44:06'),
(3, 19, 6, 3, 4, '2020-07-07 08:44:06', '2020-07-07 08:44:06'),
(4, 19, 6, 4, 4, '2020-07-07 08:44:06', '2020-07-07 08:44:06'),
(5, 19, 6, 5, 4, '2020-07-07 08:44:06', '2020-07-07 08:44:06'),
(6, 19, 6, 6, 4, '2020-07-07 08:44:06', '2020-07-07 08:44:06'),
(7, 19, 6, 7, 4, '2020-07-07 08:44:07', '2020-07-07 08:44:07'),
(8, 19, 7, 1, 3, '2020-07-07 09:18:23', '2020-07-07 09:18:23'),
(9, 19, 7, 2, 3, '2020-07-07 09:18:24', '2020-07-07 09:18:24'),
(10, 19, 7, 3, 3, '2020-07-07 09:18:24', '2020-07-07 09:18:24'),
(11, 19, 7, 4, 3, '2020-07-07 09:18:24', '2020-07-07 09:18:24'),
(12, 19, 7, 5, 3, '2020-07-07 09:18:24', '2020-07-07 09:18:24'),
(13, 19, 7, 6, 3, '2020-07-07 09:18:24', '2020-07-07 09:18:24'),
(14, 19, 7, 7, 3, '2020-07-07 09:18:24', '2020-07-07 09:18:24'),
(15, 7, 6, 1, 3, '2020-07-07 09:20:04', '2020-07-07 09:20:04'),
(16, 7, 6, 2, 2, '2020-07-07 09:20:04', '2020-07-07 09:20:04'),
(17, 7, 6, 3, 4, '2020-07-07 09:20:04', '2020-07-07 09:20:04'),
(18, 7, 6, 4, 3, '2020-07-07 09:20:04', '2020-07-07 09:20:04'),
(19, 7, 6, 5, 3, '2020-07-07 09:20:05', '2020-07-07 09:20:05'),
(20, 7, 6, 6, 4, '2020-07-07 09:20:05', '2020-07-07 09:20:05'),
(21, 7, 6, 7, 1, '2020-07-07 09:20:05', '2020-07-07 09:20:05');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `department_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `gender`, `created_at`, `updated_at`, `department_id`) VALUES
(1, 'admin', 'l', '2020-07-06 22:27:15', '2020-07-06 23:29:59', 1),
(6, 'Muhammad Amar', 'l', '2020-07-07 02:02:47', '2020-07-07 02:03:55', 1),
(7, 'Norma Amalia', 'p', '2020-07-07 02:07:44', '2020-07-07 02:07:44', 1),
(8, 'Komaruddin', 'l', '2020-07-07 02:08:14', '2020-07-07 02:08:14', 1),
(10, 'Sinta Andriani', 'p', '2020-07-07 02:14:25', '2020-07-07 02:14:25', 1),
(11, 'Reza Arnada', 'l', '2020-07-07 02:15:21', '2020-07-07 02:15:21', 1),
(12, 'Puteri Bilqis H', 'p', '2020-07-07 02:16:11', '2020-07-07 02:16:11', 1),
(13, 'Hana Vania A', 'p', '2020-07-07 02:16:37', '2020-07-07 02:16:37', 1),
(14, 'M Dzulqarnain', 'l', '2020-07-07 02:17:30', '2020-07-07 02:17:30', 2),
(15, 'Weldy Bilhuda', 'l', '2020-07-07 02:18:10', '2020-07-07 02:18:10', 2),
(16, 'Yusuf Maulana', 'l', '2020-07-07 02:18:51', '2020-07-07 02:18:51', 2),
(17, 'Mia Eka W', 'p', '2020-07-07 02:19:20', '2020-07-07 02:19:20', 2),
(18, 'Nazzari Azka I', 'p', '2020-07-07 02:19:47', '2020-07-07 02:19:47', 2),
(19, 'Siti Fatimah', 'p', '2020-07-07 02:20:18', '2020-07-07 02:20:18', 2),
(20, 'Adly Yustar Afif', 'l', '2020-07-07 02:21:19', '2020-07-07 02:21:19', 4),
(21, 'Adrian Ramadhan', 'l', '2020-07-07 02:21:52', '2020-07-07 02:21:52', 4),
(22, 'Indra K Mukti', 'l', '2020-07-07 02:22:24', '2020-07-07 02:22:24', 4),
(23, 'Nadia Ayu C', 'p', '2020-07-07 02:22:57', '2020-07-07 02:22:57', 4),
(24, 'Salsa Farah D', 'p', '2020-07-07 02:23:34', '2020-07-07 02:23:34', 4),
(25, 'Salsabila', 'p', '2020-07-07 02:24:00', '2020-07-07 02:24:00', 4);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_08_19_000000_create_failed_jobs_table', 1),
(2, '2020_07_06_103428_create_departments_table', 1),
(3, '2020_07_06_104256_create_members_table', 1),
(4, '2020_07_06_141318_add_department_id_to_members_table', 1),
(5, '2020_07_07_034509_create_model_users_table', 2),
(6, '2020_07_07_091139_add_index_to_username_column_in_users_table', 3),
(7, '2020_07_07_140142_create_edom_aspects_table', 4),
(8, '2020_07_07_140226_create_edom_ratings_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `member_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin', 1, NULL, NULL, NULL),
(3, 'muhammad_amar', 'F6obs2UXuVOB', 6, NULL, '2020-07-07 02:02:48', '2020-07-07 02:02:48'),
(4, 'norma_amalia', 'dIc2ilGmFPuJ', 7, NULL, '2020-07-07 02:07:44', '2020-07-07 02:07:44'),
(5, 'komaruddin', '9WYLyoEKAClj', 8, NULL, '2020-07-07 02:08:14', '2020-07-07 02:08:14'),
(7, 'sinta_andriani', 'sSpwG41a1nDO', 10, NULL, '2020-07-07 02:14:25', '2020-07-07 02:14:25'),
(8, 'reza_arnada', 'oO4egRcQ2Tw8', 11, NULL, '2020-07-07 02:15:21', '2020-07-07 02:15:21'),
(9, 'puteri_bilqis_h', 'IjfPqmeXPzXF', 12, NULL, '2020-07-07 02:16:11', '2020-07-07 02:16:11'),
(10, 'hana_vania_a', 'vTeBll2BT66z', 13, NULL, '2020-07-07 02:16:37', '2020-07-07 02:16:37'),
(11, 'm_dzulqarnain', 'uA3HVwllYXjG', 14, NULL, '2020-07-07 02:17:30', '2020-07-07 02:17:30'),
(12, 'weldy_bilhuda', 'VCxHK0OjCPCb', 15, NULL, '2020-07-07 02:18:10', '2020-07-07 02:18:10'),
(13, 'yusuf_maulana', 'UNswNGI7f453', 16, NULL, '2020-07-07 02:18:51', '2020-07-07 02:18:51'),
(14, 'mia_eka_w', 'iwMCFh1Lwjhh', 17, NULL, '2020-07-07 02:19:20', '2020-07-07 02:19:20'),
(15, 'nazzari_azka_i', 'UufSTDaRmN9M', 18, NULL, '2020-07-07 02:19:48', '2020-07-07 02:19:48'),
(16, 'siti_fatimah', 'iejKWmx0NDAa', 19, NULL, '2020-07-07 02:20:18', '2020-07-07 02:20:18'),
(17, 'adly_yustar_afif', 'il21hNQQ5mox', 20, NULL, '2020-07-07 02:21:20', '2020-07-07 02:21:20'),
(18, 'adrian_ramadhan', 'viVzasTVDTfb', 21, NULL, '2020-07-07 02:21:52', '2020-07-07 02:21:52'),
(19, 'indra_k_mukti', 'FdepYk1Vqreg', 22, NULL, '2020-07-07 02:22:24', '2020-07-07 02:22:24'),
(20, 'nadia_ayu_c', 'DokqVBXbIxBC', 23, NULL, '2020-07-07 02:22:57', '2020-07-07 02:22:57'),
(21, 'salsa_farah_d', 'BKmADgHxZ9Pt', 24, NULL, '2020-07-07 02:23:34', '2020-07-07 02:23:34'),
(22, 'salsabila', 'H8FzI4kD6MMy', 25, NULL, '2020-07-07 02:24:00', '2020-07-07 02:24:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `edom_aspects`
--
ALTER TABLE `edom_aspects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `edom_ratings`
--
ALTER TABLE `edom_ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `edom_ratings_rater_id_foreign` (`rater_id`),
  ADD KEY `edom_ratings_rated_id_foreign` (`rated_id`),
  ADD KEY `edom_ratings_aspect_id_foreign` (`aspect_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `members_department_id_foreign` (`department_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD KEY `users_member_id_foreign` (`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `edom_aspects`
--
ALTER TABLE `edom_aspects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `edom_ratings`
--
ALTER TABLE `edom_ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `edom_ratings`
--
ALTER TABLE `edom_ratings`
  ADD CONSTRAINT `edom_ratings_aspect_id_foreign` FOREIGN KEY (`aspect_id`) REFERENCES `edom_aspects` (`id`),
  ADD CONSTRAINT `edom_ratings_rated_id_foreign` FOREIGN KEY (`rated_id`) REFERENCES `members` (`id`),
  ADD CONSTRAINT `edom_ratings_rater_id_foreign` FOREIGN KEY (`rater_id`) REFERENCES `members` (`id`);

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
