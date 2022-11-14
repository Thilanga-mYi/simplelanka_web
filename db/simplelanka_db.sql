/*
 Navicat Premium Data Transfer

 Source Server         : LOCALHOST
 Source Server Type    : MySQL
 Source Server Version : 80028
 Source Host           : localhost:3306
 Source Schema         : simplelanka_db

 Target Server Type    : MySQL
 Target Server Version : 80028
 File Encoding         : 65001

 Date: 14/11/2022 23:43:12
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for ad_main_categories
-- ----------------------------
DROP TABLE IF EXISTS `ad_main_categories`;
CREATE TABLE `ad_main_categories`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` int NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ad_main_categories
-- ----------------------------
INSERT INTO `ad_main_categories` VALUES (1, 1, 'Electronics', '', 1, NULL, NULL);
INSERT INTO `ad_main_categories` VALUES (2, 1, 'Fashion & Beauty', '', 1, NULL, NULL);
INSERT INTO `ad_main_categories` VALUES (3, 1, 'Essentials', '', 1, NULL, NULL);
INSERT INTO `ad_main_categories` VALUES (4, 1, 'Home & Garden', '', 1, NULL, NULL);

-- ----------------------------
-- Table structure for ad_sub_categories
-- ----------------------------
DROP TABLE IF EXISTS `ad_sub_categories`;
CREATE TABLE `ad_sub_categories`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `main_category_id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ad_sub_categories
-- ----------------------------
INSERT INTO `ad_sub_categories` VALUES (1, 1, 'Mobile Phones', NULL, 1, NULL, NULL);
INSERT INTO `ad_sub_categories` VALUES (2, 1, 'Computer Accessories', NULL, 1, NULL, NULL);

-- ----------------------------
-- Table structure for ad_types
-- ----------------------------
DROP TABLE IF EXISTS `ad_types`;
CREATE TABLE `ad_types`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ad_types
-- ----------------------------

-- ----------------------------
-- Table structure for districts
-- ----------------------------
DROP TABLE IF EXISTS `districts`;
CREATE TABLE `districts`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of districts
-- ----------------------------
INSERT INTO `districts` VALUES (1, 'Colombo', 1, NULL, NULL);
INSERT INTO `districts` VALUES (2, 'Gampaha', 1, NULL, NULL);
INSERT INTO `districts` VALUES (3, 'Kalutara', 1, NULL, NULL);
INSERT INTO `districts` VALUES (4, 'Kandy', 1, NULL, NULL);
INSERT INTO `districts` VALUES (5, 'Matale', 1, NULL, NULL);
INSERT INTO `districts` VALUES (6, 'Nuwara Eliya', 1, NULL, NULL);
INSERT INTO `districts` VALUES (7, 'Galle', 1, NULL, NULL);
INSERT INTO `districts` VALUES (8, 'Matara', 1, NULL, NULL);
INSERT INTO `districts` VALUES (9, 'Hambantota', 1, NULL, NULL);
INSERT INTO `districts` VALUES (10, 'Jaffna', 1, NULL, NULL);
INSERT INTO `districts` VALUES (11, 'Kilinochchi', 1, NULL, NULL);
INSERT INTO `districts` VALUES (12, 'Mannar', 1, NULL, NULL);
INSERT INTO `districts` VALUES (13, 'Vavuniya', 1, NULL, NULL);
INSERT INTO `districts` VALUES (14, 'Mullaitivu', 1, NULL, NULL);
INSERT INTO `districts` VALUES (15, 'Batticaloa', 1, NULL, NULL);
INSERT INTO `districts` VALUES (16, 'Ampara', 1, NULL, NULL);
INSERT INTO `districts` VALUES (17, 'Trincomalee', 1, NULL, NULL);
INSERT INTO `districts` VALUES (18, 'Kurunegala', 1, NULL, NULL);
INSERT INTO `districts` VALUES (19, 'Puttalam', 1, NULL, NULL);
INSERT INTO `districts` VALUES (20, 'Anuradhapura', 1, NULL, NULL);
INSERT INTO `districts` VALUES (21, 'Polonnaruwa', 1, NULL, NULL);
INSERT INTO `districts` VALUES (22, 'Badulla', 1, NULL, NULL);
INSERT INTO `districts` VALUES (23, 'Moneragala', 1, NULL, NULL);
INSERT INTO `districts` VALUES (24, 'Ratnapura', 1, NULL, NULL);
INSERT INTO `districts` VALUES (25, 'Kegalle', 1, NULL, NULL);

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for media
-- ----------------------------
DROP TABLE IF EXISTS `media`;
CREATE TABLE `media`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of media
-- ----------------------------
INSERT INTO `media` VALUES (2, 1, '1665003757fitted2.jpeg', '1665003757fitted2.jpeg', 1, '2022-10-05 15:32:37', '2022-10-05 15:32:37');
INSERT INTO `media` VALUES (3, 1, '1665003757fitted.jpeg', '1665003757fitted.jpeg', 1, '2022-10-05 15:32:37', '2022-10-05 15:32:37');
INSERT INTO `media` VALUES (4, 1, '1665027583fitted2.jpeg', '1665027583fitted2.jpeg', 1, '2022-10-05 22:09:43', '2022-10-05 22:09:43');
INSERT INTO `media` VALUES (5, 1, '1665027583fitted.jpeg', '1665027583fitted.jpeg', 1, '2022-10-05 22:09:43', '2022-10-05 22:09:43');
INSERT INTO `media` VALUES (6, 1, '16650504162.jpeg', '16650504162.jpeg', 1, '2022-10-06 04:30:16', '2022-10-06 04:30:16');
INSERT INTO `media` VALUES (7, 1, '16650504161.jpeg', '16650504161.jpeg', 1, '2022-10-06 04:30:16', '2022-10-06 04:30:16');
INSERT INTO `media` VALUES (8, 1, '16650549871.jpeg', '16650549871.jpeg', 1, '2022-10-06 05:46:27', '2022-10-06 05:46:27');
INSERT INTO `media` VALUES (9, 1, '16650549872.jpeg', '16650549872.jpeg', 1, '2022-10-06 05:46:27', '2022-10-06 05:46:27');
INSERT INTO `media` VALUES (10, 1, '16650549871.jpeg', '16650549871.jpeg', 1, '2022-10-06 05:46:27', '2022-10-06 05:46:27');
INSERT INTO `media` VALUES (11, 1, '16650564363.jpeg', '16650564363.jpeg', 1, '2022-10-06 06:10:36', '2022-10-06 06:10:36');
INSERT INTO `media` VALUES (12, 1, '16650564364.jpeg', '16650564364.jpeg', 1, '2022-10-06 06:10:36', '2022-10-06 06:10:36');
INSERT INTO `media` VALUES (29, 1, 'thum_1668447843.jpg', 'thum_1668447843.jpg', 1, '2022-11-14 12:14:03', '2022-11-14 12:14:03');
INSERT INTO `media` VALUES (30, 1, 'pro_1668447843.jpg', 'pro_1668447843.jpg', 1, '2022-11-14 12:14:03', '2022-11-14 12:14:03');
INSERT INTO `media` VALUES (31, 1, 'thum_1668448403.jpg', 'thum_1668448403.jpg', 1, '2022-11-14 12:23:23', '2022-11-14 12:23:23');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 30 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (5, '2022_05_19_095427_create_ad_types_table', 1);
INSERT INTO `migrations` VALUES (6, '2022_05_19_095515_create_ad_main_categories_table', 1);
INSERT INTO `migrations` VALUES (8, '2022_05_19_095554_create_user_types_table', 1);
INSERT INTO `migrations` VALUES (9, '2022_09_21_172131_create_districts_table', 1);
INSERT INTO `migrations` VALUES (11, '2014_10_12_000000_create_users_table', 2);
INSERT INTO `migrations` VALUES (13, '2022_10_01_053150_create_shops_table', 3);
INSERT INTO `migrations` VALUES (16, '2022_05_19_095535_create_ad_sub_categories_table', 4);
INSERT INTO `migrations` VALUES (26, '2022_10_03_100344_create_media_table', 9);
INSERT INTO `migrations` VALUES (28, '2022_10_01_070621_create_posts_table', 10);
INSERT INTO `migrations` VALUES (29, '2022_10_03_100633_create_post_has_media_table', 10);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token` ASC) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type` ASC, `tokenable_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for post_has_media
-- ----------------------------
DROP TABLE IF EXISTS `post_has_media`;
CREATE TABLE `post_has_media`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `post_id` int NOT NULL,
  `media_id` int NOT NULL,
  `media_type` tinyint NOT NULL DEFAULT 2,
  `status` tinyint NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of post_has_media
-- ----------------------------
INSERT INTO `post_has_media` VALUES (1, 1, 8, 1, 1, '2022-10-06 05:46:27', '2022-10-06 05:46:27');
INSERT INTO `post_has_media` VALUES (2, 1, 9, 2, 1, '2022-10-06 05:46:27', '2022-10-06 05:46:27');
INSERT INTO `post_has_media` VALUES (3, 1, 10, 2, 1, '2022-10-06 05:46:27', '2022-10-06 05:46:27');
INSERT INTO `post_has_media` VALUES (4, 2, 11, 1, 1, '2022-10-06 06:10:36', '2022-10-06 06:10:36');
INSERT INTO `post_has_media` VALUES (5, 2, 12, 2, 1, '2022-10-06 06:10:36', '2022-10-06 06:10:36');
INSERT INTO `post_has_media` VALUES (10, 7, 17, 1, 1, '2022-11-14 12:06:20', '2022-11-14 12:06:20');
INSERT INTO `post_has_media` VALUES (11, 7, 18, 2, 1, '2022-11-14 12:06:20', '2022-11-14 12:06:20');
INSERT INTO `post_has_media` VALUES (22, 13, 29, 1, 1, '2022-11-14 12:14:03', '2022-11-14 12:14:03');
INSERT INTO `post_has_media` VALUES (23, 13, 30, 2, 1, '2022-11-14 12:14:03', '2022-11-14 12:14:03');
INSERT INTO `post_has_media` VALUES (24, 14, 31, 1, 1, '2022-11-14 12:23:23', '2022-11-14 12:23:23');

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_category` int NOT NULL,
  `sub_category` int NOT NULL,
  `regular_price` double NULL DEFAULT NULL,
  `sale_price` double NULL DEFAULT NULL,
  `price_condition` int NOT NULL DEFAULT 1,
  `ad_type` int NOT NULL DEFAULT 1,
  `product_condition` int NOT NULL DEFAULT 1,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `avg_rating` int NOT NULL DEFAULT 6,
  `avg_views` int NOT NULL DEFAULT 0,
  `avg_clicks` int NOT NULL DEFAULT 0,
  `status` tinyint NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES (13, 1, 'sdsd', 1, 1, 3434, 34343, 1, 1, 2, 'sdsdsdsd', 6, 0, 0, 1, '2022-11-14 12:14:03', '2022-11-14 12:14:03');
INSERT INTO `posts` VALUES (14, 1, 'sdsds', 1, 1, 450, 500, 1, 2, 1, 'sds ds\r\nd \r\nsd\r\n s\r\nd s\r\nd', 6, 0, 0, 1, '2022-11-14 12:23:23', '2022-11-14 12:23:23');

-- ----------------------------
-- Table structure for shops
-- ----------------------------
DROP TABLE IF EXISTS `shops`;
CREATE TABLE `shops`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `agent_id` int NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_id` int NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tel1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tel2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `register_type` int NOT NULL DEFAULT 1,
  `register_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `registration_document_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `status` tinyint NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of shops
-- ----------------------------
INSERT INTO `shops` VALUES (1, 1, NULL, 'Simple Lanka', 'Wadduwa', 1, 'No 22/16 M.E Cooray Mawatha', '0773447633', '0777145263', '1664605598Organic.png', 2, 'PV7t347ufgd', NULL, 'test', 1, '2022-10-01 00:56:38', '2022-10-01 00:56:38');
INSERT INTO `shops` VALUES (2, 1, NULL, 'Simple Lanka', 'Wadduwa', 1, 'No 22/16 M.E Cooray Mawatha', '0773447633', '0777123654', '1664605710Sub-Category logos 250X250-01.png', 2, 'PV7t347ufgd', NULL, NULL, 1, '2022-10-01 00:58:30', '2022-10-01 00:58:30');
INSERT INTO `shops` VALUES (3, 1, NULL, 'Simple Lanka', 'Wadduwa', 1, 'No 22/16 M.E Cooray Mawatha', '0773447633', '0773447633', '1664605768Sub-Category logos 250X250-19.png', 2, 'PV7t347ufgd', NULL, 'test', 1, '2022-10-01 00:59:28', '2022-10-01 00:59:28');

-- ----------------------------
-- Table structure for user_types
-- ----------------------------
DROP TABLE IF EXISTS `user_types`;
CREATE TABLE `user_types`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_types
-- ----------------------------
INSERT INTO `user_types` VALUES (1, 'Normal User', 1, NULL, NULL);
INSERT INTO `user_types` VALUES (2, 'Agent', 1, NULL, NULL);
INSERT INTO `user_types` VALUES (3, 'Shop Admin', 1, NULL, NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `gender` tinyint NULL DEFAULT NULL,
  `mobile_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype_id` int NOT NULL DEFAULT 3,
  `district_id` int NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `membership` int NOT NULL DEFAULT 1,
  `website` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `whatsapp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT 1,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Sandaruwan', 'Fernando', '1664378984kitchenaid-stand-mixer-pistachio.png', 1, '0712375399', 'user@gmail.com', 3, 1, 'Main road, 2nd Street', 'Colombo 02', NULL, '$2y$10$aTTu.d4rW9lFjG5rWGRnxu4eluhGgeoAafqdL6miN8yggeuk0bc86', 1, NULL, '0712375399', 1, NULL, '2022-09-28 07:32:04', '2022-09-28 10:12:57');
INSERT INTO `users` VALUES (2, 'Admin', NULL, NULL, NULL, NULL, 'admin@gmail.com', 3, NULL, NULL, NULL, NULL, '$2y$10$u1Yl316Re2ZtHHQ8/rCwYOFMSHv3zXALLBI6eBSdpHKW0B6i9n26S', 1, NULL, NULL, 1, NULL, '2022-11-14 10:02:59', '2022-11-14 10:02:59');

SET FOREIGN_KEY_CHECKS = 1;
