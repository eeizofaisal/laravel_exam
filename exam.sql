-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 17, 2022 at 12:40 PM
-- Server version: 10.3.34-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_id` int(11) DEFAULT NULL,
  `option_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option_four` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correct_option` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `option_one`, `option_two`, `option_three`, `option_four`, `correct_option`, `created_at`, `updated_at`) VALUES
(1, 1, 'Qadeer Ahmed Khan', 'Mohid Khan', 'Maeir Khan', 'Atif Khan', '1', '2022-06-16 15:16:53', '2022-06-16 15:16:53'),
(2, 2, 'Qadeer Ahmed Khan', 'Mohid Khan', 'Maeir Khan', 'Atif Khan', '1', '2022-06-16 15:16:53', '2022-06-16 15:16:53'),
(3, 3, 'Qadeer Ahmed Khan', 'Mohid Khan', 'Maeir Khan', 'Atif Khan', '1', '2022-06-16 15:16:53', '2022-06-16 15:16:53'),
(4, 4, 'Qadeer Ahmed Khan', 'Mohid Khan', 'Maeir Khan', 'Atif Khan', '1', '2022-06-16 15:16:53', '2022-06-16 15:16:53'),
(5, 5, 'Qadeer Ahmed Khan', 'Mohid Khan', 'Maeir Khan', 'Atif Khan', '1', '2022-06-16 15:16:53', '2022-06-16 15:16:53'),
(6, 6, 'Qadeer Ahmed Khan', 'Mohid Khan', 'Maeir Khan', 'Atif Khan', '1', '2022-06-16 15:16:53', '2022-06-16 15:16:53'),
(7, 7, 'Qadeer Ahmed Khan', 'Mohid Khan', 'Maeir Khan', 'Atif Khan', '1', '2022-06-16 15:16:53', '2022-06-16 15:16:53'),
(8, 8, 'Qadeer Ahmed Khan', 'Mohid Khan', 'Maeir Khan', 'Atif Khan', '1', '2022-06-16 15:16:53', '2022-06-16 15:16:53'),
(9, 9, 'Qadeer Ahmed Khan', 'Mohid Khan', 'Maeir Khan', 'Atif Khan', '1', '2022-06-16 15:16:53', '2022-06-16 15:16:53'),
(10, 10, 'Qadeer Ahmed Khan', 'Mohid Khan', 'Maeir Khan', 'Atif Khan', '1', '2022-06-16 15:16:53', '2022-06-16 15:16:53'),
(11, 11, 'Qadeer Ahmed Khan', 'Mohid Khan', 'Maeir Khan', 'Atif Khan', '1', '2022-06-16 15:16:53', '2022-06-16 15:16:53'),
(12, 12, 'Qadeer Ahmed Khan', 'Mohid Khan', 'Maeir Khan', 'Atif Khan', '1', '2022-06-16 15:16:53', '2022-06-16 15:16:53'),
(13, 13, 'Qadeer Ahmed Khan', 'Mohid Khan', 'Maeir Khan', 'Atif Khan', '1', '2022-06-16 15:16:53', '2022-06-16 15:16:53'),
(14, 14, 'Qadeer Ahmed Khan', 'Mohid Khan', 'Maeir Khan', 'Atif Khan', '1', '2022-06-16 15:16:53', '2022-06-16 15:16:53'),
(15, 15, 'Qadeer Ahmed Khan', 'Mohid Khan', 'Maeir Khan', 'Atif Khan', '1', '2022-06-16 15:16:53', '2022-06-16 15:16:53'),
(16, 16, 'Qadeer Ahmed Khan', 'Mohid Khan', 'Maeir Khan', 'Atif Khan', '1', '2022-06-16 15:16:53', '2022-06-16 15:16:53'),
(17, 17, 'Qadeer Ahmed Khan', 'Mohid Khan', 'Maeir Khan', 'Atif Khan', '1', '2022-06-16 15:16:53', '2022-06-16 15:16:53'),
(18, 18, 'Qadeer Ahmed Khan', 'Mohid Khan', 'Maeir Khan', 'Atif Khan', '1', '2022-06-16 15:16:53', '2022-06-16 15:16:53'),
(19, 19, 'Qadeer Ahmed Khan', 'Mohid Khan', 'Maeir Khan', 'Atif Khan', '1', '2022-06-16 15:16:53', '2022-06-16 15:16:53'),
(20, 20, 'Qadeer Ahmed Khan', 'Mohid Khan', 'Maeir Khan', 'Atif Khan', '1', '2022-06-16 15:16:53', '2022-06-16 15:16:53');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2022_06_16_194521_create_questions_table', 1),
(4, '2022_06_16_194604_create_answers_table', 1),
(5, '2022_06_16_194615_create_results_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `created_at`, `updated_at`) VALUES
(1, 'What is one your name', '2022-06-16 15:13:17', '2022-06-16 15:13:17'),
(2, 'What is two your name', '2022-06-16 15:13:17', '2022-06-16 15:13:17'),
(3, 'What is three your name', '2022-06-16 15:13:17', '2022-06-16 15:13:17'),
(4, 'What is four your name', '2022-06-16 15:13:17', '2022-06-16 15:13:17'),
(5, 'What is five your name', '2022-06-16 15:13:17', '2022-06-16 15:13:17'),
(6, 'What is six your name', '2022-06-16 15:13:17', '2022-06-16 15:13:17'),
(7, 'What is seven your name', '2022-06-16 15:13:17', '2022-06-16 15:13:17'),
(8, 'What is eight your name', '2022-06-16 15:13:17', '2022-06-16 15:13:17'),
(9, 'What is nine your name', '2022-06-16 15:13:17', '2022-06-16 15:13:17'),
(10, 'What is ten your name', '2022-06-16 15:13:17', '2022-06-16 15:13:17'),
(11, 'What is 11 your name', '2022-06-16 15:13:17', '2022-06-16 15:13:17'),
(12, 'What is 12 your name', '2022-06-16 15:13:17', '2022-06-16 15:13:17'),
(13, 'What is 13 your name', '2022-06-16 15:13:17', '2022-06-16 15:13:17'),
(14, 'What is 14 your name', '2022-06-16 15:13:17', '2022-06-16 15:13:17'),
(15, 'What is 15 your name', '2022-06-16 15:13:17', '2022-06-16 15:13:17'),
(16, 'What is 16 your name', '2022-06-16 15:13:17', '2022-06-16 15:13:17'),
(17, 'What is 17 your name', '2022-06-16 15:13:17', '2022-06-16 15:13:17'),
(18, 'What is 18 your name', '2022-06-16 15:13:17', '2022-06-16 15:13:17'),
(19, 'What is 19 your name', '2022-06-16 15:13:17', '2022-06-16 15:13:17'),
(20, 'What is 20 your name', '2022-06-16 15:13:17', '2022-06-16 15:13:17');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `correct_ans` int(11) DEFAULT NULL,
  `wrong_ans` int(11) DEFAULT NULL,
  `skp_ans` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
