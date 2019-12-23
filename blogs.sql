-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2019 at 08:35 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogs`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Health', NULL, NULL),
(2, 'Food', '2019-10-22 10:03:04', '2019-10-22 10:03:04'),
(3, 'Art', '2019-10-22 21:29:22', '2019-10-22 21:29:22'),
(4, 'Education', '2019-10-23 23:12:17', '2019-10-23 23:12:17'),
(5, 'DIY', '2019-10-30 06:15:41', '2019-10-30 06:15:41'),
(6, 'Entertainment', '2019-10-31 00:22:24', '2019-10-31 00:22:24'),
(7, 'Festivals', '2019-10-31 00:22:34', '2019-10-31 00:22:34'),
(8, 'Games', '2019-10-31 00:22:41', '2019-10-31 00:22:41');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_10_22_035944_create_posts_table', 2),
(5, '2019_10_22_065050_create_categories_table', 3),
(6, '2019_10_22_065946_add_category_id_to_posts', 3),
(7, '2019_10_22_105047_add_user_id_to_posts', 4),
(10, '2019_10_23_111333_create_tags_table', 5),
(12, '2019_10_30_114901_create_post_tag_table', 6),
(14, '2019_10_31_061732_change_content_type_in_posts_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `category_id`, `created_at`, `updated_at`, `user_id`) VALUES
(10, 'Make almond butter at home', '<p><em>Almond butter is an healthy alternative to most of the factory-made, pre processed foods out there. And it is just as easy to make as its name.</em></p>', 2, '2019-10-24 00:22:35', '2019-10-30 06:18:10', 2),
(11, 'How to have an amazing day?', '<p>The power lies in your hands to have the amazing day that you always wish to have.</p>', 1, '2019-10-24 20:25:53', '2019-10-24 20:25:53', 3),
(13, 'sample from Ankita', '<p>This post has been created to just test it out.</p>', 3, '2019-10-27 23:12:31', '2019-10-30 23:47:33', 2),
(14, 'sample 2', '<p>This is the next tag that has been created just to delete it.</p>', 2, '2019-10-27 23:13:38', '2019-10-27 23:13:38', 2),
(15, 'Coffee', '<p>Coffee has become a favourite household drink in the Nepalese society in the past few years. Nepalese people have always been the tea-drinkers whether it\'s at home or at the local shop nearby.&nbsp;</p>', 2, '2019-10-29 23:32:39', '2019-10-29 23:32:39', 4),
(16, 'Dashain', '<p><em>Dashain always brings joy in me. The fresh air in the morning, the big, bright and blue sky in the afternoon bring out the child in me. When I was younger, i used to go play swing at 5 in the morning with my sister, the cold breeze wouldn\'t scare us. We would go prepared, with beanies covering our heads, big jackets, and even a pair of gloves. This was the adventure we would always look forward to. We would play swing until the other kids came and crowded the place, there would always be some sort of fight brewing between us kids cause we all wanted to play and none of us wanted to get off. I never flew a kite but the way sky looked with all those colourful kites always mesmerized me, I wanted to fly one but never got a chance maybe because the kites flying game was very competitive, in the blink of an eye one could lose his kite.&nbsp;</em></p>', 7, '2019-10-31 00:42:23', '2019-10-31 01:25:32', 2);

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 15, 9, NULL, NULL),
(2, 15, 10, NULL, NULL),
(3, 15, 13, NULL, NULL),
(4, 10, 8, NULL, NULL),
(5, 13, 10, NULL, NULL),
(6, 13, 11, NULL, NULL),
(7, 13, 12, NULL, NULL),
(8, 14, 8, NULL, NULL),
(9, 14, 9, NULL, NULL),
(10, 14, 10, NULL, NULL),
(11, 16, 8, NULL, NULL),
(12, 16, 9, NULL, NULL),
(13, 16, 12, NULL, NULL),
(14, 16, 16, NULL, NULL),
(15, 16, 17, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(8, 'homecooked', '2019-10-30 06:08:55', '2019-10-30 06:08:55'),
(9, 'drinks', '2019-10-30 06:09:02', '2019-10-30 06:09:02'),
(10, 'beverages', '2019-10-30 06:09:15', '2019-10-30 06:09:15'),
(11, 'gym', '2019-10-30 06:09:24', '2019-10-30 06:09:24'),
(12, 'outdoors', '2019-10-30 06:09:34', '2019-10-30 06:09:34'),
(13, 'coffee', '2019-10-30 06:09:38', '2019-10-30 06:09:38'),
(14, 'self-care', '2019-10-30 06:09:47', '2019-10-30 06:09:47'),
(15, 'mindfulness', '2019-10-30 06:09:57', '2019-10-30 06:09:57'),
(16, 'fun', '2019-10-31 00:37:28', '2019-10-31 00:37:28'),
(17, 'celebration', '2019-10-31 00:37:35', '2019-10-31 00:37:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Manita', 'Manita007@gmail.com', NULL, '$2y$10$9Fs6aBWmwJSQyhkB7YcSEujTYlfGf4BltKtcjOzDfrz/FnHeMpzAK', NULL, '2019-10-22 04:58:17', '2019-10-22 04:58:17'),
(2, 'Ankita', 'Anku01paudel@gmail.com', NULL, '$2y$10$/U6z77sGpWz75rn06/NbiO/Js.3jclvL/oy8DY2oYB8FDyTruLQta', NULL, '2019-10-22 21:28:50', '2019-10-22 21:28:50'),
(3, 'User', 'user0123@gmail.com', NULL, '$2y$10$7q3EMrcowD3.rP6G.kBT1.e0bhc2.Hne0IvapiC2IX6lOG8Sz020W', NULL, '2019-10-24 20:20:16', '2019-10-24 20:20:16'),
(4, 'Pramila', 'Pari123@gmail.com', NULL, '$2y$10$dQmbIERhnXcbqpB6ANvFku4FikGptC7SrVgY7raduPEFW9aDMbyU2', NULL, '2019-10-28 07:18:30', '2019-10-28 07:18:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
