-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 11 2021 г., 15:40
-- Версия сервера: 5.7.29
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- База данных: `napaautomotive`
--

-- --------------------------------------------------------

--
-- Структура таблицы `attachmentable`
--

CREATE TABLE `attachmentable` (
  `id` int(10) UNSIGNED NOT NULL,
  `attachmentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachmentable_id` int(10) UNSIGNED NOT NULL,
  `attachment_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `attachments`
--

CREATE TABLE `attachments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extension` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '0',
  `path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `alt` text COLLATE utf8mb4_unicode_ci,
  `hash` text COLLATE utf8mb4_unicode_ci,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'public',
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `attachments`
--

INSERT INTO `attachments` (`id`, `name`, `original_name`, `mime`, `extension`, `size`, `sort`, `path`, `description`, `alt`, `hash`, `disk`, `user_id`, `group`, `created_at`, `updated_at`) VALUES
(1, 'b8bb6647aba358858669a6e092f19fef1858016b', 'blob', 'image/png', 'png', 531909, 0, '2021/01/23/', NULL, NULL, '78616fd0eb6ffad311243ac03e825624f4bf6eb3', 'public', 1, NULL, '2021-01-23 03:57:17', '2021-01-23 03:57:17'),
(2, '7ccbb1d7a13d8c1dd3c00638a2a212662aae3250', 'photo_2020-08-07_12-37-42.jpg', 'image/jpeg', 'jpg', 64773, 0, '2021/01/23/', NULL, NULL, '257c6bce08f289d493f6397d49abde83a2d91831', 'public', 1, NULL, '2021-01-23 04:19:54', '2021-01-23 04:19:54'),
(3, '5ddc8cde15752c9374dcfb16f893fe312c22278e', 'photo_2020-10-30_13-57-57.jpg', 'image/jpeg', 'jpg', 110340, 0, '2021/01/23/', NULL, NULL, '4b27ac4e89994b6899dc40353e1d42fdfa469c5e', 'public', 1, NULL, '2021-01-23 04:27:40', '2021-01-23 04:27:40'),
(5, 'eead99e96c908ceebfffea2f39c982aabc2ff888', 'blob', 'image/png', 'png', 836428, 0, '2021/01/23/', NULL, NULL, '18f31cedd931f00cfd42b26a8682f29226c082a9', 'public', 1, NULL, '2021-01-23 05:54:31', '2021-01-23 05:54:31'),
(6, 'c14f0f0ebc26416665cba651c858da1403edd127', 'blob', 'image/png', 'png', 563286, 0, '2021/01/23/', NULL, NULL, 'a8e7d7c0cb3166455bab3241d189cac65134e604', 'public', 1, NULL, '2021-01-23 05:55:11', '2021-01-23 05:55:11'),
(7, '1367de2a517581c775c94b125a0a8181a7f4ec00', 'blob', 'image/png', 'png', 800114, 0, '2021/01/23/', NULL, NULL, '4365c21b9fd69a62d55a7ce06500bc9f1c050d0e', 'public', 1, NULL, '2021-01-23 06:27:50', '2021-01-23 06:27:50'),
(8, '42d5547cb4af18d238dca59bb4d62b4583eda3f2', 'blob', 'image/png', 'png', 1747149, 0, '2021/01/23/', NULL, NULL, '8294ec26e745c36764f212811fcc40362588111a', 'public', 1, NULL, '2021-01-23 06:29:42', '2021-01-23 06:29:42'),
(9, 'da1ce6ac6bb24c6838edfdd04cb90a4e67844ae2', 'blob', 'image/png', 'png', 1270382, 0, '2021/01/23/', NULL, NULL, '19956ac9984a384fec377ae9be79a2b7833ab375', 'public', 1, NULL, '2021-01-23 06:31:00', '2021-01-23 06:31:00'),
(10, '675902bf0ba81ce6d5ee0ec7b2cd70649c331528', 'blob', 'image/png', 'png', 55006, 0, '2021/01/24/', NULL, NULL, 'e4373a6dae35d643602d85f0f9a564c3cec1f1ee', 'public', 1, NULL, '2021-01-24 01:29:52', '2021-01-24 01:29:52'),
(11, 'edd22fff3d45794b0d47a2de0e6d04db3e57c10a', 'blob', 'image/png', 'png', 46216, 0, '2021/01/24/', NULL, NULL, 'f1cfeb891545bed11b833861f5a15a08fb17f7cc', 'public', 1, NULL, '2021-01-24 01:50:12', '2021-01-24 01:50:12'),
(12, '8511c67b76d999fa5672c510f0b84425360c6c3b', 'blob', 'image/png', 'png', 1515015, 0, '2021/01/24/', NULL, NULL, '35a4705a2183de05934d297c653c615f90accbcc', 'public', 1, NULL, '2021-01-24 01:56:51', '2021-01-24 01:56:51'),
(13, 'cbcc09f320b82173d283d9d6a6bff8da904f009f', 'blob', 'image/png', 'png', 1455, 0, '2021/01/24/', NULL, NULL, '30c6b63ec65d7682f30f3fe82a4619e937ac829c', 'public', 1, NULL, '2021-01-24 02:08:17', '2021-01-24 02:08:17'),
(14, '2b7f9528f1936787a6becacdb6af0b735593311b', 'blob', 'image/png', 'png', 105770, 0, '2021/01/24/', NULL, NULL, 'd73f747c33647b9af0db82f24971a3b4c0ae1526', 'public', 1, NULL, '2021-01-24 02:08:47', '2021-01-24 02:08:47'),
(15, 'ce2c9ee53ab7611b293bd304a55b58ae41bae39b', 'blob', 'image/png', 'png', 1210292, 0, '2021/01/24/', NULL, NULL, '3a22b684c328f966cd5a6d2a536b02cf6345f87f', 'public', 1, NULL, '2021-01-24 02:17:51', '2021-01-24 02:17:51'),
(16, '009d6e086773654a69f87766f694f74074ea965a', 'blob', 'image/png', 'png', 53830, 0, '2021/01/25/', NULL, NULL, '294c4a748a6da776f318c2c23580c834e4280f00', 'public', 1, NULL, '2021-01-24 23:10:47', '2021-01-24 23:10:47'),
(17, '4bf2a9c8baf3893454136af6715a40e01437811d', 'banner1-4.jpg', 'image/jpeg', 'jpg', 156005, 0, '2021/01/25/', NULL, NULL, '74282c8e392cbf750494309634f982a9316c2a4d', 'public', 1, NULL, '2021-01-24 23:33:48', '2021-01-24 23:33:48'),
(18, 'ca1e1b37a908d48570f65a69ccae88dc87d526f8', 'blob', 'image/png', 'png', 46043, 0, '2021/03/11/', NULL, NULL, 'b7196fdbcd52ed3c6fc2821e96e7cc8a4b297230', 'public', 1, NULL, '2021-03-11 06:21:56', '2021-03-11 06:21:56'),
(19, '19e0a92f25661d08fad419816425ba78cdb28de8', 'banner1-1.jpg', 'image/jpeg', 'jpg', 116972, 0, '2021/03/11/', NULL, NULL, '10166611b578c238d5106b566097de8602c1d74c', 'public', 1, NULL, '2021-03-11 06:41:00', '2021-03-11 06:41:00'),
(20, '6b0269f21adc01c5773ca255a0e26b8fddb5e095', 'aboutus1.png', 'image/png', 'png', 80002, 0, '2021/03/11/', NULL, NULL, '6e6ce8d422d7b43f11339ee303136ad0f863ed1e', 'public', 1, NULL, '2021-03-11 06:42:16', '2021-03-11 06:42:16'),
(21, 'ca1e1b37a908d48570f65a69ccae88dc87d526f8', 'blob', 'image/png', 'png', 46043, 0, '2021/03/11/', NULL, NULL, 'b7196fdbcd52ed3c6fc2821e96e7cc8a4b297230', 'public', 1, NULL, '2021-03-11 06:49:20', '2021-03-11 06:49:20'),
(22, 'ca1e1b37a908d48570f65a69ccae88dc87d526f8', 'blob', 'image/png', 'png', 46043, 0, '2021/03/11/', NULL, NULL, 'b7196fdbcd52ed3c6fc2821e96e7cc8a4b297230', 'public', 1, NULL, '2021-03-11 06:49:35', '2021-03-11 06:49:35'),
(23, 'd81f498be69f1769a0f7070d92fb773eaa18e06e', 'blob', 'image/png', 'png', 23069, 0, '2021/03/11/', NULL, NULL, '2f96340801e611ad2b0cdba6937797bc681227a6', 'public', 1, NULL, '2021-03-11 06:49:50', '2021-03-11 06:49:50'),
(24, 'efe90c2ac20d39770e524760f3daab26fd1bcc0b', 'blob', 'image/png', 'png', 24606, 0, '2021/03/11/', NULL, NULL, 'e6ed3708e26f362b5be5dfc1acf355807ba65835', 'public', 1, NULL, '2021-03-11 06:55:48', '2021-03-11 06:55:48'),
(25, '6b0269f21adc01c5773ca255a0e26b8fddb5e095', 'aboutus1.png', 'image/png', 'png', 80002, 0, '2021/03/11/', NULL, NULL, '6e6ce8d422d7b43f11339ee303136ad0f863ed1e', 'public', 1, NULL, '2021-03-11 07:05:57', '2021-03-11 07:05:57'),
(26, '693be63ad16e14ac0c677eb42641c841430b6ed9', 'blob', 'image/png', 'png', 1202308, 0, '2021/03/11/', NULL, NULL, '6be7c9941912493a567915b55360f6c0cebf3a70', 'public', 1, NULL, '2021-03-11 07:06:19', '2021-03-11 07:06:19'),
(27, '30f017be72dbe2227ee14b61d4e32819d46535f6', 'blob', 'image/png', 'png', 25905, 0, '2021/03/11/', NULL, NULL, '17d95feef9940f2b3056b6832e7abe6e91e572fd', 'public', 1, NULL, '2021-03-11 07:15:01', '2021-03-11 07:15:01'),
(28, '2580c590fd3dc6ec47b12be409ae3978ec581816', 'blob', 'image/png', 'png', 281192, 0, '2021/03/11/', NULL, NULL, '89638c868d1e51d2e4ab838afd0c3516a99c82d8', 'public', 1, NULL, '2021-03-11 07:20:16', '2021-03-11 07:20:16'),
(29, 'ea21f1280c7fbfbca4813a07dbab1b5c884b44bd', 'blob', 'image/png', 'png', 5230, 0, '2021/03/11/', NULL, NULL, '0c7cb2bb7af6a3bd1769e8a8cd9facf1740be2c3', 'public', 1, NULL, '2021-03-11 07:32:01', '2021-03-11 07:32:01'),
(30, '5d96e38030cff066d22e3cbaba786b01cafd4354', 'blob', 'image/png', 'png', 31404, 0, '2021/03/11/', NULL, NULL, '94db70bc49de34e2378256db0cf5976c31fd9d2c', 'public', 1, NULL, '2021-03-11 07:33:53', '2021-03-11 07:33:53'),
(31, 'c040c1597102e54afc3eb8b1e67ec650d1841b4b', 'blob', 'image/png', 'png', 3334, 0, '2021/03/11/', NULL, NULL, 'a1f34e05082032e4f17c9e6bc64f91bf5c92f5d0', 'public', 1, NULL, '2021-03-11 07:34:44', '2021-03-11 07:34:44'),
(32, '92180fa41721f30d11acb7407c943112c6a543b5', 'blob', 'image/png', 'png', 17731, 0, '2021/03/11/', NULL, NULL, '82a8009bcf2a1c284c16d6582b63b1a373cc6f84', 'public', 1, NULL, '2021-03-11 07:37:31', '2021-03-11 07:37:31'),
(33, 'a21965164f8e330d60ea180271879a305be89a49', 'blob', 'image/png', 'png', 11237, 0, '2021/03/11/', NULL, NULL, '48a94fe5f64bafb569dab26c771aa37637c0fb47', 'public', 1, NULL, '2021-03-11 07:38:26', '2021-03-11 07:38:26'),
(34, '4df3e12ddcbe004914a68aefd95d467bde55e824', 'blob', 'image/png', 'png', 46107, 0, '2021/03/11/', NULL, NULL, '2d1134b5d5c458820b180a30e145d1b54f963978', 'public', 1, NULL, '2021-03-11 07:38:56', '2021-03-11 07:38:56');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(37, '2014_10_12_000000_create_users_table', 1),
(38, '2014_10_12_100000_create_password_resets_table', 1),
(39, '2015_04_12_000000_create_orchid_users_table', 1),
(40, '2015_10_19_214424_create_orchid_roles_table', 1),
(41, '2015_10_19_214425_create_orchid_role_users_table', 1),
(42, '2016_08_07_125128_create_orchid_attachmentstable_table', 1),
(43, '2017_09_17_125801_create_notifications_table', 1),
(44, '2019_08_19_000000_create_failed_jobs_table', 1),
(45, '2021_01_22_065932_create_posts_table', 1),
(57, '2021_01_24_062548_create_teams_table', 2),
(58, '2021_01_24_065226_create_partners_table', 2),
(59, '2021_01_24_065912_create_thoughts_table', 2),
(60, '2021_01_24_071251_create_services_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `partners`
--

INSERT INTO `partners` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '/storage/2021/03/11/5d96e38030cff066d22e3cbaba786b01cafd4354.png', '2021-03-11 07:32:02', '2021-03-11 07:33:56'),
(2, '/storage/2021/03/11/c040c1597102e54afc3eb8b1e67ec650d1841b4b.png', '2021-03-11 07:34:45', '2021-03-11 07:34:45'),
(3, '/storage/2021/03/11/92180fa41721f30d11acb7407c943112c6a543b5.png', '2021-03-11 07:37:32', '2021-03-11 07:37:32'),
(4, '/storage/2021/03/11/a21965164f8e330d60ea180271879a305be89a49.png', '2021-03-11 07:38:28', '2021-03-11 07:38:28'),
(5, '/storage/2021/03/11/4df3e12ddcbe004914a68aefd95d467bde55e824.png', '2021-03-11 07:38:58', '2021-03-11 07:38:58');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `body`, `image`, `created_at`, `updated_at`) VALUES
(3, 'dsfe', 'wdadawdawd', 'okoookokkkokokokoko', '5', '2021-01-23 05:54:32', '2021-01-23 05:54:32'),
(4, 'dwadawdawd', 'awdawdaw', 'dawdawdawdawdawdawdawd', '/storage/2021/01/23/c14f0f0ebc26416665cba651c858da1403edd127.png', '2021-01-23 05:55:13', '2021-01-23 05:55:13'),
(5, '123', '123', '123456789765432134567876543212345678765432123456', '/storage/2021/01/23/1367de2a517581c775c94b125a0a8181a7f4ec00.png', '2021-01-23 06:27:53', '2021-01-23 06:27:53'),
(6, 'awd', 'dawd', 'dawdawd', '/storage/2021/01/24/675902bf0ba81ce6d5ee0ec7b2cd70649c331528.png', '2021-01-24 01:29:55', '2021-01-24 01:29:55');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `role_users`
--

CREATE TABLE `role_users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Разработка ТЗ для автоматизированных систем', 'Создание систем обработки и хранения данных, центров обработки данных', '/storage/2021/03/11/2580c590fd3dc6ec47b12be409ae3978ec581816.png', '2021-01-24 02:17:53', '2021-03-11 07:20:19');

-- --------------------------------------------------------

--
-- Структура таблицы `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `teams`
--

INSERT INTO `teams` (`id`, `name`, `job`, `image`, `facebook`, `twitter`, `instagram`, `created_at`, `updated_at`) VALUES
(5, 'Umid Abdusattorov', 'CEO', '/storage/2021/03/11/30f017be72dbe2227ee14b61d4e32819d46535f6.png', 'https://www.facebook.com/abdusattorov', 'https://twitter.com/', 'https://www.instagram.com/u.abdusattorov/', '2021-03-11 07:15:04', '2021-03-11 07:15:04');

-- --------------------------------------------------------

--
-- Структура таблицы `thoughts`
--

CREATE TABLE `thoughts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `star` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `thoughts`
--

INSERT INTO `thoughts` (`id`, `name`, `job`, `description`, `star`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Umid Abdusattorov', 'CEO', 'В настоящее время мы являемся партнерами-исполнителями государственного  предприятия «Уз Авто Саноат» по проекту «Автоматизация Бизнес процессов»', '/storage/2021/03/11/6b0269f21adc01c5773ca255a0e26b8fddb5e095.png', '/storage/2021/03/11/693be63ad16e14ac0c677eb42641c841430b6ed9.png', '2021-03-11 07:06:21', '2021-03-11 07:06:21');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `permissions` json DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `permissions`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$g6w4pGGPz7GvSXEjKmAuuO4IX0DrQdYk8gbiAix8UoCxshyUDnFoK', 'DisKATWFrE62qamJ363nm0yYgs0pZYZcg3cuH8ThEXYKFvKSrP13S4XHv3Tx', '2021-01-23 03:57:00', '2021-01-23 03:57:00', '{\"platform.index\": true, \"platform.systems.index\": true, \"platform.systems.roles\": true, \"platform.systems.users\": true, \"platform.systems.attachment\": true}');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `attachmentable`
--
ALTER TABLE `attachmentable`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attachmentable_attachmentable_type_attachmentable_id_index` (`attachmentable_type`,`attachmentable_id`),
  ADD KEY `attachmentable_attachment_id_foreign` (`attachment_id`);

--
-- Индексы таблицы `attachments`
--
ALTER TABLE `attachments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Индексы таблицы `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Индексы таблицы `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_users_role_id_foreign` (`role_id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `thoughts`
--
ALTER TABLE `thoughts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `attachmentable`
--
ALTER TABLE `attachmentable`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `attachments`
--
ALTER TABLE `attachments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT для таблицы `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `thoughts`
--
ALTER TABLE `thoughts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `attachmentable`
--
ALTER TABLE `attachmentable`
  ADD CONSTRAINT `attachmentable_attachment_id_foreign` FOREIGN KEY (`attachment_id`) REFERENCES `attachments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `role_users`
--
ALTER TABLE `role_users`
  ADD CONSTRAINT `role_users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;
