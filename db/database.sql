-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 14, 2022 at 04:45 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leyonex_simple_lanka_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad_main_categories`
--

CREATE TABLE `ad_main_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ad_main_categories`
--

INSERT INTO `ad_main_categories` (`id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Electronics', '', 1, NULL, NULL),
(2, 'Fashion & Beauty', '', 1, NULL, NULL),
(3, 'Essentials', '', 1, NULL, NULL),
(4, 'Home & Garden', '', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ad_sub_categories`
--

CREATE TABLE `ad_sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `main_category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ad_sub_categories`
--

INSERT INTO `ad_sub_categories` (`id`, `main_category_id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mobile Phones', NULL, 1, NULL, NULL),
(2, 1, 'Computer Accessories', NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ad_types`
--

CREATE TABLE `ad_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Colombo', 1, NULL, NULL),
(2, 'Gampaha', 1, NULL, NULL),
(3, 'Kalutara', 1, NULL, NULL),
(4, 'Kandy', 1, NULL, NULL),
(5, 'Matale', 1, NULL, NULL),
(6, 'Nuwara Eliya', 1, NULL, NULL),
(7, 'Galle', 1, NULL, NULL),
(8, 'Matara', 1, NULL, NULL),
(9, 'Hambantota', 1, NULL, NULL),
(10, 'Jaffna', 1, NULL, NULL),
(11, 'Kilinochchi', 1, NULL, NULL),
(12, 'Mannar', 1, NULL, NULL),
(13, 'Vavuniya', 1, NULL, NULL),
(14, 'Mullaitivu', 1, NULL, NULL),
(15, 'Batticaloa', 1, NULL, NULL),
(16, 'Ampara', 1, NULL, NULL),
(17, 'Trincomalee', 1, NULL, NULL),
(18, 'Kurunegala', 1, NULL, NULL),
(19, 'Puttalam', 1, NULL, NULL),
(20, 'Anuradhapura', 1, NULL, NULL),
(21, 'Polonnaruwa', 1, NULL, NULL),
(22, 'Badulla', 1, NULL, NULL),
(23, 'Moneragala', 1, NULL, NULL),
(24, 'Ratnapura', 1, NULL, NULL),
(25, 'Kegalle', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `user_id`, `image`, `alt`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, '1665003757fitted2.jpeg', '1665003757fitted2.jpeg', 1, '2022-10-05 15:32:37', '2022-10-05 15:32:37'),
(3, 1, '1665003757fitted.jpeg', '1665003757fitted.jpeg', 1, '2022-10-05 15:32:37', '2022-10-05 15:32:37'),
(4, 1, '1665027583fitted2.jpeg', '1665027583fitted2.jpeg', 1, '2022-10-05 22:09:43', '2022-10-05 22:09:43'),
(5, 1, '1665027583fitted.jpeg', '1665027583fitted.jpeg', 1, '2022-10-05 22:09:43', '2022-10-05 22:09:43'),
(6, 1, '16650504162.jpeg', '16650504162.jpeg', 1, '2022-10-06 04:30:16', '2022-10-06 04:30:16'),
(7, 1, '16650504161.jpeg', '16650504161.jpeg', 1, '2022-10-06 04:30:16', '2022-10-06 04:30:16'),
(8, 1, '16650549871.jpeg', '16650549871.jpeg', 1, '2022-10-06 05:46:27', '2022-10-06 05:46:27'),
(9, 1, '16650549872.jpeg', '16650549872.jpeg', 1, '2022-10-06 05:46:27', '2022-10-06 05:46:27'),
(10, 1, '16650549871.jpeg', '16650549871.jpeg', 1, '2022-10-06 05:46:27', '2022-10-06 05:46:27'),
(11, 1, '16650564363.jpeg', '16650564363.jpeg', 1, '2022-10-06 06:10:36', '2022-10-06 06:10:36'),
(12, 1, '16650564364.jpeg', '16650564364.jpeg', 1, '2022-10-06 06:10:36', '2022-10-06 06:10:36');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_19_095427_create_ad_types_table', 1),
(6, '2022_05_19_095515_create_ad_main_categories_table', 1),
(8, '2022_05_19_095554_create_user_types_table', 1),
(9, '2022_09_21_172131_create_districts_table', 1),
(11, '2014_10_12_000000_create_users_table', 2),
(13, '2022_10_01_053150_create_shops_table', 3),
(16, '2022_05_19_095535_create_ad_sub_categories_table', 4),
(26, '2022_10_03_100344_create_media_table', 9),
(28, '2022_10_01_070621_create_posts_table', 10),
(29, '2022_10_03_100633_create_post_has_media_table', 10);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_category` int(11) NOT NULL,
  `sub_category` int(11) NOT NULL,
  `regular_price` double DEFAULT NULL,
  `sale_price` double DEFAULT NULL,
  `price_condition` int(11) NOT NULL DEFAULT 1,
  `ad_type` int(11) NOT NULL DEFAULT 1,
  `product_condition` int(11) NOT NULL DEFAULT 1,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avg_rating` int(11) NOT NULL DEFAULT 6,
  `avg_views` int(11) NOT NULL DEFAULT 0,
  `avg_clicks` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `main_category`, `sub_category`, `regular_price`, `sale_price`, `price_condition`, `ad_type`, `product_condition`, `description`, `avg_rating`, `avg_views`, `avg_clicks`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Samsung Galaxy A32 (Used)', 1, 1, 72500, 0, 1, 1, 1, 'Condition:\r\nUsed\r\nBrand:\r\nSamsung\r\nModel:\r\nGalaxy A32\r\nFeatures\r\nBluetooth, Camera, Dual-Lens Camera, Dual SIM, Expandable Memory, Fingerprint Sensor, GPS, 4G, Touch screen\r\n\r\nDescription\r\nFull set with mint condition', 6, 0, 0, 1, '2022-10-06 05:46:27', '2022-10-06 05:46:27'),
(2, 1, 'Samsung Galaxy M32 (Used)', 1, 1, 62500, 55750, 1, 1, 1, 'Condition:\r\nUsed\r\nBrand:\r\nSamsung\r\nModel:\r\nGalaxy M32\r\nDescription\r\n128 GB Memory\r\n\r\n8GB Ram\r\n\r\nBlack colour\r\n\r\nPhone & Chager\r\n\r\nGood Condition 99%\r\n\r\nUsed Only 8 month', 6, 0, 0, 1, '2022-10-06 06:10:36', '2022-10-06 06:10:36');

-- --------------------------------------------------------

--
-- Table structure for table `post_has_media`
--

CREATE TABLE `post_has_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  `media_type` tinyint(4) NOT NULL DEFAULT 2,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_has_media`
--

INSERT INTO `post_has_media` (`id`, `post_id`, `media_id`, `media_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 8, 1, 1, '2022-10-06 05:46:27', '2022-10-06 05:46:27'),
(2, 1, 9, 2, 1, '2022-10-06 05:46:27', '2022-10-06 05:46:27'),
(3, 1, 10, 2, 1, '2022-10-06 05:46:27', '2022-10-06 05:46:27'),
(4, 2, 11, 1, 1, '2022-10-06 06:10:36', '2022-10-06 06:10:36'),
(5, 2, 12, 2, 1, '2022-10-06 06:10:36', '2022-10-06 06:10:36');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `agent_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_id` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `register_type` int(11) NOT NULL DEFAULT 1,
  `register_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registration_document_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `user_id`, `agent_id`, `name`, `city`, `district_id`, `address`, `tel1`, `tel2`, `logo`, `register_type`, `register_no`, `registration_document_image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'Simple Lanka', 'Wadduwa', 1, 'No 22/16 M.E Cooray Mawatha', '0773447633', '0777145263', '1664605598Organic.png', 2, 'PV7t347ufgd', NULL, 'test', 1, '2022-10-01 00:56:38', '2022-10-01 00:56:38'),
(2, 1, NULL, 'Simple Lanka', 'Wadduwa', 1, 'No 22/16 M.E Cooray Mawatha', '0773447633', '0777123654', '1664605710Sub-Category logos 250X250-01.png', 2, 'PV7t347ufgd', NULL, NULL, 1, '2022-10-01 00:58:30', '2022-10-01 00:58:30'),
(3, 1, NULL, 'Simple Lanka', 'Wadduwa', 1, 'No 22/16 M.E Cooray Mawatha', '0773447633', '0773447633', '1664605768Sub-Category logos 250X250-19.png', 2, 'PV7t347ufgd', NULL, 'test', 1, '2022-10-01 00:59:28', '2022-10-01 00:59:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` tinyint(4) DEFAULT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype_id` int(11) NOT NULL DEFAULT 3,
  `district_id` int(11) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `membership` int(11) NOT NULL DEFAULT 1,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `image`, `gender`, `mobile_number`, `email`, `usertype_id`, `district_id`, `address`, `city`, `email_verified_at`, `password`, `membership`, `website`, `whatsapp`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sandaruwan', 'Fernando', '1664378984kitchenaid-stand-mixer-pistachio.png', 1, '0712375399', 'userr@gmail.com', 3, 1, 'Main road, 2nd Street', 'Colombo 02', NULL, '$2y$10$aTTu.d4rW9lFjG5rWGRnxu4eluhGgeoAafqdL6miN8yggeuk0bc86', 1, NULL, '0712375399', 1, NULL, '2022-09-28 07:32:04', '2022-09-28 10:12:57'),
(2, 'Admin', NULL, NULL, NULL, NULL, 'admin@gmail.com', 3, NULL, NULL, NULL, NULL, '$2y$10$u1Yl316Re2ZtHHQ8/rCwYOFMSHv3zXALLBI6eBSdpHKW0B6i9n26S', 1, NULL, NULL, 1, NULL, '2022-11-14 10:02:59', '2022-11-14 10:02:59');

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Normal User', 1, NULL, NULL),
(2, 'Agent', 1, NULL, NULL),
(3, 'Shop Admin', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad_main_categories`
--
ALTER TABLE `ad_main_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad_sub_categories`
--
ALTER TABLE `ad_sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad_types`
--
ALTER TABLE `ad_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_has_media`
--
ALTER TABLE `post_has_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad_main_categories`
--
ALTER TABLE `ad_main_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ad_sub_categories`
--
ALTER TABLE `ad_sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ad_types`
--
ALTER TABLE `ad_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post_has_media`
--
ALTER TABLE `post_has_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
