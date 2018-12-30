-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2018 at 05:02 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mumm_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(3, 'Lifestyle', 'Lifestyle Description   Lifestyle Description   Lifestyle Description   Lifestyle Description   Lifestyle Description   Lifestyle Description   Lifestyle Description   Lifestyle Description   Lifestyle Description   Lifestyle Description   Lifestyle Description   Lifestyle Description   Lifestyle Description   Lifestyle Description   Lifestyle Description   Lifestyle Description   Lifestyle Description   Lifestyle Description   Lifestyle Description   Lifestyle Description   Lifestyle Description   Lifestyle Description', '2018-12-29 22:07:05', '2018-12-29 22:07:05'),
(4, 'Music', 'Music Description  Music Description  Music Description  Music Description  Music Description  Music Description  Music Description  Music Description  Music Description  Music Description  Music Description  Music Description  Music Description', '2018-12-29 22:22:15', '2018-12-29 22:23:01'),
(5, 'Creativity', 'Creativity Description   Creativity Description   Creativity Description', '2018-12-29 23:51:45', '2018-12-29 23:51:45');

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
(3, '2018_12_28_210725_create_categories_table', 1),
(4, '2018_12_28_210749_create_posts_table', 1),
(5, '2018_12_28_232338_add_user_type_to_users', 2),
(6, '2018_12_30_013415_add_image_to_posts', 3);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `image`, `category_id`, `title`, `description`, `content`, `created_at`, `updated_at`) VALUES
(1, 'posts_1546136595.jpg', 4, 'What Your Music Preference Says About You and Your Personality', 'Post little description Post little description Post little description Post little description Post little description', '<h4>What Your Music Preference Says About You and Your Personality</h4><p>&nbsp;</p><p>What Your Music Preference Says About You and Your Personality<br>What Your Music Preference Says About You and Your Personality<br>What Your Music Preference Says About You and Your Personality.</p><ol><li>What Your Music Preference Says About You and Your Personality</li><li>What Your Music Preference Says About You and Your Personality</li><li>What Your Music Preference Says About You and Your Personality</li><li>What Your Music Preference Says About You and Your Personality</li><li>What Your Music Preference Says About You and Your Personality</li><li>What Your Music Preference Says About You and Your Personality</li><li>What Your Music Preference Says About You and Your Personality</li><li>What Your Music Preference Says About You and Your Personality</li></ol><ul><li>What Your Music Preference Says About You and Your Personality</li><li>What Your Music Preference Says About You and Your Personality</li><li>What Your Music Preference Says About You and Your Personality</li></ul><p>&nbsp;</p>', '2018-12-29 23:33:12', '2018-12-30 00:23:15'),
(2, 'posts_1546135320.jpg', 5, 'The Pomodoro Technique Really Works', 'Description Description Description Description Description', '<p><a href=\"single-standard.html\">The Pomodoro Technique Really Works.</a></p><p>The Pomodoro Technique Really Works The Pomodoro Technique Really Works The Pomodoro Technique Really Works The Pomodoro Technique Really Works The Pomodoro Technique Really Works The Pomodoro Technique Really Works The Pomodoro Technique Really Works&nbsp;The Pomodoro Technique Really Works&nbsp;The Pomodoro Technique Really Works&nbsp;The Pomodoro Technique Really Works&nbsp;The Pomodoro Technique Really Works&nbsp;The Pomodoro Technique Really Works&nbsp;The Pomodoro Technique Really Works&nbsp;The Pomodoro Technique Really Works&nbsp;The Pomodoro Technique Really Works&nbsp;The Pomodoro Technique Really Works&nbsp;The Pomodoro Technique Really Works&nbsp;The Pomodoro Technique Really Works&nbsp;The Pomodoro Technique Really Works&nbsp;The Pomodoro Technique Really Works&nbsp;The Pomodoro Technique Really Works&nbsp;The Pomodoro Technique Really Works&nbsp;The Pomodoro Technique Really Works&nbsp;The Pomodoro Technique Really Works&nbsp;The Pomodoro Technique Really Works&nbsp;The Pomodoro Technique Really Works&nbsp;The Pomodoro Technique Really Works&nbsp;The Pomodoro Technique Really Works&nbsp;The Pomodoro Technique Really Works&nbsp;The Pomodoro Technique Really Works&nbsp;The Pomodoro Technique Really Works&nbsp;The Pomodoro Technique Really Works&nbsp;The Pomodoro Technique Really Works&nbsp;The Pomodoro Technique Really Works&nbsp;The Pomodoro Technique Really Works&nbsp;.</p><p>&nbsp;</p><ul><li>The Pomodoro Technique Really Works</li><li>The Pomodoro Technique Really Works</li><li>The Pomodoro Technique Really Works</li></ul><blockquote><p><strong>The Pomodoro Technique Really Works&nbsp;</strong></p></blockquote>', '2018-12-30 00:02:00', '2018-12-30 00:02:00'),
(4, 'posts_1546137579.jpg', 5, 'Gardening: The Secret to Happiness.', 'Description Description Description Description Description', '<p><a href=\"single-standard.html\">Gardening: The Secret to Happiness.&nbsp;</a><br><br>Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness Gardening: The Secret to Happiness.</p>', '2018-12-30 00:39:39', '2018-12-30 00:41:27'),
(5, 'posts_1546137665.jpg', 5, 'An Examination of Minimalistic Design.', 'Description here', '<p><strong>An Examination of Minimalistic Design An Examination of Minimalistic Design. An Examination of Minimalistic Design. An Examination of Minimalistic Design. An Examination of Minimalistic Design. An Examination of Minimalistic Design. An Examination of Minimalistic Design. An Examination of Minimalistic Design.</strong><br>&nbsp;</p><p>An Examination of Minimalistic Design&nbsp;An Examination of Minimalistic Design&nbsp;An Examination of Minimalistic Design&nbsp;An Examination of Minimalistic Design&nbsp;An Examination of Minimalistic Design&nbsp;An Examination of Minimalistic Design&nbsp;An Examination of Minimalistic Design&nbsp;An Examination of Minimalistic Design&nbsp;An Examination of Minimalistic Design&nbsp;An Examination of Minimalistic Design&nbsp;An Examination of Minimalistic Design&nbsp;An Examination of Minimalistic Design&nbsp;An Examination of Minimalistic Design&nbsp;An Examination of Minimalistic Design&nbsp;An Examination of Minimalistic Design&nbsp;An Examination of Minimalistic Design&nbsp;An Examination of Minimalistic Design&nbsp;An Examination of Minimalistic Design&nbsp;An Examination of Minimalistic Design&nbsp;An Examination of Minimalistic Design&nbsp;An Examination of Minimalistic Design&nbsp;An Examination of Minimalistic Design&nbsp;An Examination of Minimalistic Design&nbsp;An Examination of Minimalistic Design&nbsp;An Examination of Minimalistic Design&nbsp;An Examination of Minimalistic Design&nbsp;An Examination of Minimalistic Design&nbsp;An Examination of Minimalistic Design&nbsp;An Examination of Minimalistic Design&nbsp;An Examination of Minimalistic Design&nbsp;An Examination of Minimalistic Design&nbsp;An Examination of Minimalistic Design&nbsp;An Examination of Minimalistic Design&nbsp;.</p><p>&nbsp;</p>', '2018-12-30 00:41:05', '2018-12-30 00:41:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `user_type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin@email.com', '2018-12-28 22:00:00', '$2y$10$6cbcn4mGIFOQW.lnP0aliOObQD6SaB0eanpyH8TksxC7ot7t0.AAq', 1, '1lMHCucNOQRsiSgpUBKAFRDy04K9L4dYut5qlmzRIFWT49QdTjwSYx78WHjb', '2018-12-28 22:00:00', '2018-12-28 22:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
