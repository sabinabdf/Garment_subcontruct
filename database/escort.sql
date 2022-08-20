-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2022 at 05:02 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `escort`
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
(1, 'Cutting machine', '2022-06-18 12:40:11', '2022-07-19 13:59:44'),
(2, 'Fabrics inspection machine', '2022-06-18 16:30:53', '2022-06-18 16:30:53'),
(3, 'Plotter printing machine', '2022-06-18 16:34:53', '2022-06-18 16:34:53'),
(4, 'Embroidery machine', '2022-06-18 16:35:20', '2022-06-18 16:35:20'),
(5, 'Sewing machine', '2022-06-18 16:35:40', '2022-06-18 16:35:40'),
(6, 'Thread Trimmer machine', '2022-06-18 16:35:56', '2022-06-18 16:35:56'),
(7, 'Pull test machine', '2022-07-19 12:03:52', '2022-07-19 12:03:52'),
(8, 'Metal detector machine', '2022-07-19 12:04:33', '2022-07-19 12:04:33'),
(9, 'Heat seal joining the machine', '2022-07-19 14:00:54', '2022-07-19 14:03:26'),
(12, 'Case label printing machine', '2022-07-19 14:06:29', '2022-07-19 14:06:29'),
(14, 'Boiler machine', '2022-07-19 14:08:00', '2022-07-19 14:08:00');

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deal_id` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `collection_date` date NOT NULL,
  `received_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive','pending') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `deal_id`, `amount`, `collection_date`, `received_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 20000, '2022-07-14', 'Azgar', 'pending', '2022-07-17 06:27:15', '2022-07-17 06:27:15'),
(2, 2, 100000, '2022-07-16', 'Tapos', 'active', '2022-07-17 06:04:51', '2022-07-17 06:04:51'),
(3, 1, 50000, '2022-07-16', 'Anamika', 'active', '2022-07-18 06:04:51', '2022-07-18 06:04:51'),
(4, 1, 500000, '2022-07-19', 'arif', 'pending', '2022-07-18 14:29:55', '2022-07-18 14:29:55'),
(5, 1, 22222, '2022-07-20', 'arif', 'pending', '2022-07-18 14:31:08', '2022-07-18 14:31:08');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_bio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_profile_one` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_profile_two` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trade_license` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certificates` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`certificates`)),
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `machine_post_limits` int(11) NOT NULL,
  `work_post_limits` int(11) NOT NULL,
  `status` enum('active','inactive','pending') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `address`, `company_bio`, `company_profile_one`, `company_profile_two`, `trade_license`, `logo`, `certificates`, `phone`, `map`, `email`, `email_verified_at`, `photo`, `machine_post_limits`, `work_post_limits`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Ha-Meem Group', 'Phoenix Tower (4th Floor), 407, Tejgaon Industrial Area, Dhaka-1215, Bangladesh.', 'A leading wholesale clothing manufacturer in Bangladesh', 'Ha-Meem Group, a Bangladeshi clothing manufacturer, is leading supplier of readymade garments and denim fabric in the world. We are one of the top clothing companies in Bangladesh. The company produces some of the most fashionable denim fabrics and garment products and owns one of the most comprehensive and resourceful manufacturing facilities in Bangladesh.', 'Ha-Meem Group has earned name and fame both at home and abroad as one of the top clothing companies in Bangladesh. The continuous growth of this group is moving forward hand on hand with the industrialization of the home country Bangladesh. Moreover we as a Bangladeshi clothing manufacturer have been contributing immensely in the financial growth of the nation.', 'a760880003e7ddedfef56acb3b09697f.jpg', 'a760880003e7ddedfef56acb3b09697f.jpg', '\"[\\\"5c0c792ad6dfe0f79a20857e42b8ae7b.jpg\\\",\\\"e1a1a8e77922878c293b4f679656b077.jpg\\\",\\\"518734f959c6bd684801406e71d1d2a4.jpg\\\"]\"', '+8801979212357', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7304.372329089054!2d90.36795207130496!3d23.74073988837637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf4a5de53a75%3A0xf27ef22645e193c6!2z4Kac4Ka_4KaX4Ka-4Kak4Kay4Ka-LCDgpqLgpr7gppXgpr4gMTIwNQ!5e0!3m2!1sbn!2sbd!4v1655551467075!5m2!1sbn!2sbd', 'delwar@hameemgroup.com', NULL, 'bd686fd640be98efaae0091fa301e613.jpg', 5, 5, 'active', NULL, '2022-06-18 05:25:04', '2022-06-18 17:41:28'),
(4, 'ZEX Fashion Bangladesh', 'House-09, Road-04, Sector-12, Uttara, Dhaka-1230, Bangladesh', 'Evolved into a rapidly growing multi-dimensional conglomerate', 'It all started as a small family business of knit apparel manufacturing and since then has evolved into a rapidly growing multi-dimensional conglomerate. ZEX Fashion Bangladesh considers itself as an end-to-end apparel solution provider, starting from sourcing the cotton and going all the way to providing logistical services to its’ clients', 'dsfjkhsdjfhsdjhjsdfhjsdfjd', 'a760880003e7ddedfef56acb3b09697f.jpg', 'a760880003e7ddedfef56acb3b09697f.jpg', '\"[\\\"4cd52e10342f4155ce60fbe832abc5ef.jpg\\\",\\\"97d5bf89c22d86286852d304f6ea922e.jpg\\\",\\\"3d90dd5c78b3823b1c43416d3379ca7e.jpg\\\"]\"', '+88-01684564925', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.213815179679!2d90.3686381139962!3d23.739753584594627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf359b74ba23%3A0x256215d92c0c66d9!2sBhuiyan%20IT%20Ltd!5e0!3m2!1sen!2sbd!4v1655589530327!5m2!1sen!2sbd', 'info@zexfashionbd.com', NULL, 'bd686fd640be98efaae0091fa301e613.jpg', 5, 5, 'inactive', NULL, '2022-06-18 16:00:12', '2022-06-18 17:49:47'),
(6, 'Md. Zakir Hossain Molla', '308/1, Dhanmondi 15 no(old new 8/a)', 'jdhjashdjasdjadjhdjhsdj', 'djkhjhdahjhjdfhsa', 'dsfjkhsdjfhsdjhjsdfhjsdfjd', 'a760880003e7ddedfef56acb3b09697f.jpg', 'cb70ab375662576bd1ac5aaf16b3fca4.jpg', '\"[\\\"4cd52e10342f4155ce60fbe832abc5ef.jpg\\\",\\\"97d5bf89c22d86286852d304f6ea922e.jpg\\\",\\\"3d90dd5c78b3823b1c43416d3379ca7e.jpg\\\"]\"', '01303182771', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.213815179679!2d90.3686381139962!3d23.739753584594627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf359b74ba23%3A0x256215d92c0c66d9!2sBhuiyan%20IT%20Ltd!5e0!3m2!1sen!2sbd!4v1655589530327!5m2!1sen!2sbd', 'rakiba@gmail.com', NULL, 'bd686fd640be98efaae0091fa301e613.jpg', 5, 5, 'active', NULL, '2022-06-18 16:06:04', '2022-06-18 16:06:04'),
(8, 'jahdia', 'Mohammadpur', 'fklwejkfjd', 'folejfklflkjfkljd', 'dfklfkljsdfkjslkfjs', 'a760880003e7ddedfef56acb3b09697f.jpg', 'a760880003e7ddedfef56acb3b09697f.jpg', '\"[\\\"5c0c792ad6dfe0f79a20857e42b8ae7b.jpg\\\",\\\"e1a1a8e77922878c293b4f679656b077.jpg\\\",\\\"518734f959c6bd684801406e71d1d2a4.jpg\\\"]\"', '01627809808', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7304.372329089054!2d90.36795207130496!3d23.74073988837637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf4a5de53a75%3A0xf27ef22645e193c6!2z4Kac4Ka_4KaX4Ka-4Kak4Kay4Ka-LCDgpqLgpr7gppXgpr4gMTIwNQ!5e0!3m2!1sbn!2sbd!4v1655551467075!5m2!1sbn!2sbd', 'admino@gmail.com', NULL, '3a835d3215755c435ef4fe9965a3f2a0.jpg', 5, 5, 'active', NULL, '2022-06-18 17:26:21', '2022-06-18 17:26:21'),
(11, 'MD. AZIZ', 'MODHUPUR VOTTO', 'sdcfdafjkdasfh', 'kdfhklsdfkldsjfklsdjk', 'smdhnfsdjfksdjfklds', '71a3cb155f8dc89bf3d0365288219936.jpg', '0f840be9b8db4d3fbd5ba2ce59211f55.jpg', '\"[\\\"88157b090505cc9f638211ec1e0911e0.jpg\\\",\\\"5e83f888aa1e96cfd59fa902286851c3.jpg\\\",\\\"af76d0838d7ec88619115c3d204564c9.jpg\\\"]\"', '01925923276', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7304.372329089054!2d90.36795207130496!3d23.74073988837637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf4a5de53a75%3A0xf27ef22645e193c6!2z4Kac4Ka_4KaX4Ka-4Kak4Kay4Ka-LCDgpqLgpr7gppXgpr4gMTIwNQ!5e0!3m2!1sbn!2sbd!4v1655551467075!5m2!1sbn!2sbd', 'po@gmail.com', NULL, 'f9a40a4780f5e1306c46f1c8daecee3b.png', 6, 6, 'inactive', NULL, '2022-06-18 21:42:04', '2022-06-18 21:42:04');

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `merchant_id` bigint(20) UNSIGNED NOT NULL,
  `seller_id` bigint(20) UNSIGNED NOT NULL,
  `machine_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specifications` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`specifications`)),
  `budget` int(11) NOT NULL,
  `advance_amount` int(11) NOT NULL DEFAULT 0,
  `advance_paid` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `deadline` date NOT NULL,
  `quantity` int(11) NOT NULL,
  `quality_related` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive','pending','completed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`id`, `merchant_id`, `seller_id`, `machine_id`, `title`, `specifications`, `budget`, `advance_amount`, `advance_paid`, `deadline`, `quantity`, `quality_related`, `status`, `created_at`, `updated_at`) VALUES
(1, 7, 7, 6, 'test title', '{\"Roller\":\"2\"}', 1000, 10, 'yes', '2022-06-30', 100, 'best product wanted', 'active', NULL, NULL),
(2, 10, 7, 6, 'deal sone one', '{\"name\":\"John\", \"age\":30, \"car\":null}', 25000, 250, 'no', '2022-07-23', 3, 'goodo', 'completed', '2022-07-17 06:02:08', '2022-07-17 06:02:08'),
(3, 7, 8, 1, 'deal done', '{\"name\":\"John\", \"age\":30, \"car\":null}', 50000, 25000, 'no', '2022-07-27', 5, 'not so bad', 'completed', '2022-07-16 06:02:08', '2022-07-16 06:02:08');

-- --------------------------------------------------------

--
-- Table structure for table `deliverymans`
--

CREATE TABLE `deliverymans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive','pending') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deliveryrequests`
--

CREATE TABLE `deliveryrequests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deal_id` bigint(20) UNSIGNED NOT NULL,
  `merchant_id` bigint(20) UNSIGNED NOT NULL,
  `seller_id` bigint(20) UNSIGNED NOT NULL,
  `merchant_approval` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `seller_approval` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `deliveryman_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `designs`
--

CREATE TABLE `designs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jobschedule_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designs`
--

INSERT INTO `designs` (`id`, `jobschedule_id`, `title`, `photo`, `created_at`, `updated_at`) VALUES
(1, 22, 'gg', '8c19f571e251e61cb8dd3612f26d5ecf.jpg', '2022-07-19 19:33:54', '2022-07-19 19:33:54'),
(2, 23, 'gg', 'fe7ee8fc1959cc7214fa21c4840dff0a.jpg', '2022-07-19 19:43:55', '2022-07-19 19:43:55'),
(3, 24, 'gg', 'da0d1111d2dc5d489242e60ebcbaf988.jpg', '2022-07-19 19:44:04', '2022-07-19 19:44:04'),
(4, 25, 'gg', '86b122d4358357d834a87ce618a55de0.jpg', '2022-07-19 19:44:38', '2022-07-19 19:44:38'),
(5, 26, 'gg', 'da4fb5c6e93e74d3df8527599fa62642.jpg', '2022-07-19 19:45:26', '2022-07-19 19:45:26'),
(6, 27, 'gg', '5ef059938ba799aaa845e1c2e8a762bd.jpg', '2022-07-19 19:45:59', '2022-07-19 19:45:59');

-- --------------------------------------------------------

--
-- Table structure for table `disputes`
--

CREATE TABLE `disputes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deal_id` bigint(20) UNSIGNED NOT NULL,
  `issue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('active','inactive','pending') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deal_id` bigint(20) UNSIGNED NOT NULL,
  `merchant_id` bigint(20) UNSIGNED NOT NULL,
  `seller_id` bigint(20) UNSIGNED NOT NULL,
  `stars` int(11) NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobfiles`
--

CREATE TABLE `jobfiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jobschedule_id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedback` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobfiles`
--

INSERT INTO `jobfiles` (`id`, `jobschedule_id`, `photo`, `video`, `feedback`, `created_at`, `updated_at`) VALUES
(3, 18, '670e8a43b246801ca1eaca97b3e19189.png', '8f85517967795eeef66c225f7883bdcb.jpg', NULL, '2022-07-19 19:30:47', '2022-07-19 19:30:47'),
(4, 19, '8b16ebc056e613024c057be590b542eb.png', 'ac1dd209cbcc5e5d1c6e28598e8cbbe8.jpg', NULL, '2022-07-19 19:31:18', '2022-07-19 19:31:18'),
(5, 20, 'cf004fdc76fa1a4f25f62e0eb5261ca3.png', 'fae0b27c451c728867a567e8c1bb4e53.jpg', NULL, '2022-07-19 19:31:45', '2022-07-19 19:31:45'),
(6, 21, 'c203d8a151612acf12457e4d67635a95.jpg', '6c9882bbac1c7093bd25041881277658.png', NULL, '2022-07-19 19:32:45', '2022-07-19 19:32:45'),
(7, 22, 'f5deaeeae1538fb6c45901d524ee2f98.jpg', '86b122d4358357d834a87ce618a55de0.png', NULL, '2022-07-19 19:33:54', '2022-07-19 19:33:54'),
(8, 23, '357a6fdf7642bf815a88822c447d9dc4.jpg', '019d385eb67632a7e958e23f24bd07d7.png', NULL, '2022-07-19 19:43:54', '2022-07-19 19:43:54'),
(9, 24, '1aa48fc4880bb0c9b8a3bf979d3b917e.jpg', 'faa9afea49ef2ff029a833cccc778fd0.png', NULL, '2022-07-19 19:44:04', '2022-07-19 19:44:04'),
(10, 25, 'bd686fd640be98efaae0091fa301e613.jpg', 'f387624df552cea2f369918c5e1e12bc.png', NULL, '2022-07-19 19:44:38', '2022-07-19 19:44:38'),
(11, 26, '705f2172834666788607efbfca35afb3.jpg', '07cdfd23373b17c6b337251c22b7ea57.png', NULL, '2022-07-19 19:45:26', '2022-07-19 19:45:26'),
(12, 27, 'e5841df2166dd424a57127423d276bbe.jpg', '22ac3c5a5bf0b520d281c122d1490650.png', NULL, '2022-07-19 19:45:59', '2022-07-19 19:45:59');

-- --------------------------------------------------------

--
-- Table structure for table `jobschedules`
--

CREATE TABLE `jobschedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deal_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `feedback` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive','pending','completed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobschedules`
--

INSERT INTO `jobschedules` (`id`, `deal_id`, `title`, `description`, `start_date`, `end_date`, `feedback`, `status`, `created_at`, `updated_at`) VALUES
(18, 2, 'u', 'v', '2022-07-13', '2022-07-19', 'w', 'completed', NULL, NULL),
(19, 2, 'u', 'v', '2022-07-13', '2022-07-19', 'w', 'pending', NULL, NULL),
(20, 2, 'u', 'v', '2022-07-13', '2022-07-19', 'w', 'completed', NULL, NULL),
(21, 2, 'ii', 'ff', '2022-07-13', '2022-07-14', 'hh', 'completed', NULL, NULL),
(22, 2, 'ii', 'ff', '2022-07-13', '2022-07-14', 'hh', 'completed', NULL, NULL),
(23, 2, 'iia', 'ffa', '2022-07-13', '2022-07-14', 'hha', 'pending', NULL, NULL),
(24, 2, 'iia', 'ffa', '2022-07-13', '2022-07-14', 'hha', 'pending', NULL, NULL),
(25, 2, 'iia', 'ffa', '2022-07-13', '2022-07-14', 'hha', 'completed', NULL, NULL),
(26, 2, 'iia', 'ffa', '2022-07-13', '2022-07-14', 'hha', 'pending', NULL, NULL),
(27, 2, 'iia', 'ffa', '2022-07-13', '2022-07-14', 'hha', 'pending', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `machineposts`
--

CREATE TABLE `machineposts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usermachine_id` bigint(20) UNSIGNED NOT NULL,
  `number_of_machine` int(11) NOT NULL,
  `status` enum('active','inactive','pending') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `machineposts`
--

INSERT INTO `machineposts` (`id`, `title`, `usermachine_id`, `number_of_machine`, `status`, `created_at`, `updated_at`) VALUES
(5, 'machine Post Title', 2, 50, 'active', '2022-06-21 22:33:23', NULL),
(7, 'machine post title 3', 6, 50, 'pending', '2022-06-23 18:00:00', NULL),
(8, 'rakib 2 needs', 6, 10, 'active', '2022-06-19 21:23:37', '2022-06-19 21:23:37');

-- --------------------------------------------------------

--
-- Table structure for table `machines`
--

CREATE TABLE `machines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `specifications` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`specifications`)),
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive','pending') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `machines`
--

INSERT INTO `machines` (`id`, `name`, `category_id`, `specifications`, `brand`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Fusing machine', 1, '{\"Roller\":\"2\"}', 'HASHIMA', 'uploads/20220618224951.jpg', 'active', '2022-06-18 06:40:54', '2022-07-18 14:48:30'),
(3, '2-Needle chain stitch machine', 1, '{\"No. of Needle\":\"2\",\"Looper\":\"2\",\"Thread\":\"4\"}', 'JUKI', 'uploads/20220618225156.jpg', 'inactive', '2022-06-18 07:24:17', '2022-07-18 14:48:39'),
(4, 'Single needle lock stitch sewing machine', 5, '{\"No. of Needle\":\"1\",\"RPM\":\"4000\"}', 'JACK', 'uploads/20220618224706.jpg', 'active', '2022-06-18 16:47:06', '2022-06-18 16:47:06'),
(5, '5-thread overlock sewing machine', 5, '{\"No. of Needle\":\"2\",\"Looper\":\"3\",\"Stitch class\":\"516\"}', 'JUKI', 'uploads/20220618225424.jpg', 'pending', '2022-06-18 16:54:24', '2022-06-18 16:54:24'),
(6, 'Fabric Inspection Machine (Maruto)', 2, '{\"Country origin\":\"Thailand\",\"Model No.\":\"Serial No. 295\",\"No. of machine\":\"02\",\"Speed of the machine :\":\"13 meters \\/ minute (Depends upon the quality) premium. h) Fabric waste : 0.7%-1.0% due to swatch cutting from each roll.\",\"Production capacity per day\":\"2X(13X1420X.55) =20163 mts\"}', 'Maruto', 'uploads/20220618225957.jpg', 'active', '2022-06-18 16:59:57', '2022-06-26 04:25:07'),
(9, 'Arif', 3, '{\"No. of Needle\":\"2\",\"Roller\":\"2\"}', 'Akij beba', 'uploads/20220628071417.jpg', 'pending', '2022-06-28 01:14:17', '2022-06-28 01:14:17');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_12_025549_create_categories_table', 1),
(6, '2022_06_12_033939_create_machines_table', 1),
(7, '2022_06_12_033940_create_companies_table', 1),
(8, '2022_06_12_040341_create_usermachines_table', 1),
(9, '2022_06_12_041116_create_workorders_table', 1),
(10, '2022_06_12_041628_create_machineposts_table', 1),
(11, '2022_06_22_094528_create_proposals_table', 1),
(12, '2022_06_25_103103_create_deals_table', 1),
(13, '2022_07_16_214741_create_jobschedules_table', 1),
(14, '2022_07_16_215238_create_withdrawals_table', 1),
(15, '2022_07_16_220803_create_collections_table', 1),
(16, '2022_07_16_222128_create_jobfiles_table', 1),
(17, '2022_07_16_222948_create_designs_table', 1),
(18, '2022_07_16_223419_create_deliverymans_table', 1),
(19, '2022_07_16_224058_create_deliveryrequests_table', 1),
(20, '2022_07_16_225014_create_feedbacks_table', 1),
(21, '2022_07_16_225323_create_disputes_table', 1);

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
-- Table structure for table `proposals`
--

CREATE TABLE `proposals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `workorder_id` bigint(20) UNSIGNED NOT NULL,
  `machinepost_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `budget` bigint(20) NOT NULL,
  `deadline` date NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `quality_related` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive','pending') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proposals`
--

INSERT INTO `proposals` (`id`, `workorder_id`, `machinepost_id`, `user_id`, `title`, `budget`, `deadline`, `quantity`, `quality_related`, `message`, `status`, `created_at`, `updated_at`) VALUES
(9, 7, 7, 4, 'workorder title', 50000, '2022-07-01', 100, 'the best quality work in the town', 'test message', 'pending', '2022-06-25 03:35:21', '2022-06-25 03:35:21');

-- --------------------------------------------------------

--
-- Table structure for table `usermachines`
--

CREATE TABLE `usermachines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `machine_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specifications` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`specifications`)),
  `number_of_machine` int(11) NOT NULL,
  `purchase_date` date NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_available` int(11) NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('busy','available') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'available',
  `approved` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usermachines`
--

INSERT INTO `usermachines` (`id`, `company_id`, `category_id`, `machine_id`, `title`, `specifications`, `number_of_machine`, `purchase_date`, `photo`, `number_of_available`, `brand`, `status`, `approved`, `created_at`, `updated_at`) VALUES
(2, 2, 1, 1, 'All is well', '{\"Roller\":\"2\"}', 5, '2022-06-17', '20220619033348.jpg', 4, 'Maruto', 'available', 'yes', '2022-06-18 21:33:48', '2022-06-18 21:33:48'),
(3, 2, 5, 3, 'Need two machine', '{\"No. of Needle\":\"2\",\"Looper\":\"2\",\"Thread\":\"4\"}', 5, '2021-10-19', '20220619002832.jpg', 4, 'Maruto', 'available', 'yes', '2022-06-18 18:28:32', '2022-06-18 18:28:32'),
(6, 11, 5, 4, 'New', '{\"Roller\":\"2\"}', 50, '2022-06-25', '20220626094811.jpg', 40, 'JD', 'busy', 'yes', NULL, '2022-06-26 03:48:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `phone`, `company_id`, `designation`, `photo`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '+88001234567891', NULL, 'Admin', 'admin.webp', 'admin', '$2y$10$9kihlmOmPRi5zTTlgz4nSOJl0/Ca2zeRzplT9otcDFgMPdTwinDd6', NULL, '2022-06-18 03:51:52', '2022-06-18 03:51:52'),
(2, 'Alu', 'alu@gmail.com', NULL, '01234664', 4, 'CEO', '20220618012906.jpg', 'user', '$2y$10$uoxXuavusnHfcytifMhYVufXxEgPPTpVeQWN8t6mcWzKuCnoIUf.a', NULL, '2022-06-18 07:28:29', '2022-06-18 07:29:06'),
(4, 'jahid', 'jahid@gmail.com', NULL, '01627809808', 6, 'CEO', 'avater.jpg', 'user', '$2y$10$/tKIr5Ef2Z.Ie2Wr4qirVOFSQBJpBfApkOsaGCcci4sLifbh9.f8W', NULL, '2022-06-21 04:25:07', '2022-06-21 04:25:07'),
(5, 'Hasan', 'hasan@gmail.com', NULL, '01627809808', 2, 'CEO', 'avater.jpg', 'user', '123456789', NULL, NULL, NULL),
(6, 'Naim', 'naim@gmail.com', NULL, '01627809808', 8, 'CEO', 'avater.jpg', 'user', '123456789', NULL, NULL, NULL),
(7, 'Jack', 'jack@gmail.com', NULL, '01627809808', 11, 'CEO', 'avater.jpg', 'user', '123456789', NULL, NULL, NULL),
(8, 'Arif', 'arif@gmail.com', NULL, '17171717', 2, 'Student', '20220628034008.png', 'user', '$2y$10$9kihlmOmPRi5zTTlgz4nSOJl0/Ca2zeRzplT9otcDFgMPdTwinDd6', NULL, '2022-06-27 14:18:14', '2022-06-27 21:40:08');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

CREATE TABLE `withdrawals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deal_id` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `posted_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive','pending') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `payment_date` date NOT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdrawals`
--

INSERT INTO `withdrawals` (`id`, `deal_id`, `amount`, `posted_by`, `status`, `payment_date`, `bank_name`, `account_no`, `created_at`, `updated_at`) VALUES
(1, 1, 10000, 'Shimran', 'pending', '2022-06-28', 'Shimaran bank', '12345', '2022-06-26 06:25:03', '2022-06-26 06:30:46'),
(2, 2, 100000, 'Ratan', 'active', '2022-07-17', 'Rupali Bank Ltd', '15042364', '2022-07-18 02:10:25', '2022-07-18 02:10:25'),
(3, 1, 15000, 'maisa', 'active', '2022-07-17', 'Agraniu Bank', '15042364', '2022-07-18 02:10:25', '2022-07-18 02:10:25');

-- --------------------------------------------------------

--
-- Table structure for table `workorders`
--

CREATE TABLE `workorders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `machine_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specifications` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`specifications`)),
  `budget` int(11) NOT NULL,
  `deadline` date NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quality_related` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive','pending') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workorders`
--

INSERT INTO `workorders` (`id`, `company_id`, `category_id`, `machine_id`, `title`, `specifications`, `budget`, `deadline`, `quantity`, `quality_related`, `status`, `created_at`, `updated_at`) VALUES
(7, 6, 1, 6, 'work order title', '{\"test\":\"test\"}', 1000, '2022-06-25', '50', 'best', 'inactive', NULL, '2022-07-19 14:22:20'),
(8, 2, 3, 5, '8 machin urgently need', '{\"test\":\"test\"}', 500000, '2022-06-28', 'not bad', 'good', 'inactive', '2022-06-13 07:23:35', '2022-06-28 01:16:00'),
(9, 2, 4, 6, 'Need 10 machine', '{\"name\":\"John\", \"age\":30, \"car\":null}', 25000, '2022-07-17', '10', 'good', 'active', '2022-06-13 07:23:35', '2022-06-12 07:31:52'),
(10, 2, 3, 1, 'Need well machine for work', '{\"name\":\"John\", \"age\":30, \"car\":null}', 58700, '2022-07-17', 'not bad', 'not bad so', 'active', '2022-07-04 07:18:34', '2022-07-04 07:18:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `collections_deal_id_foreign` (`deal_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `companies_email_unique` (`email`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deals_machine_id_foreign` (`machine_id`),
  ADD KEY `deals_merchant_id_foreign` (`merchant_id`),
  ADD KEY `deals_seller_id_foreign` (`seller_id`);

--
-- Indexes for table `deliverymans`
--
ALTER TABLE `deliverymans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deliveryrequests`
--
ALTER TABLE `deliveryrequests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deliveryrequests_deal_id_foreign` (`deal_id`),
  ADD KEY `deliveryrequests_merchant_id_foreign` (`merchant_id`),
  ADD KEY `deliveryrequests_seller_id_foreign` (`seller_id`),
  ADD KEY `deliveryrequests_deliveryman_id_foreign` (`deliveryman_id`);

--
-- Indexes for table `designs`
--
ALTER TABLE `designs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `designs_jobschedule_id_foreign` (`jobschedule_id`);

--
-- Indexes for table `disputes`
--
ALTER TABLE `disputes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `disputes_company_id_foreign` (`company_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feedbacks_deal_id_foreign` (`deal_id`),
  ADD KEY `feedbacks_merchant_id_foreign` (`merchant_id`),
  ADD KEY `feedbacks_seller_id_foreign` (`seller_id`);

--
-- Indexes for table `jobfiles`
--
ALTER TABLE `jobfiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobfiles_jobschedule_id_foreign` (`jobschedule_id`);

--
-- Indexes for table `jobschedules`
--
ALTER TABLE `jobschedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobschedules_deal_id_foreign` (`deal_id`);

--
-- Indexes for table `machineposts`
--
ALTER TABLE `machineposts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `machineposts_usermachine_id_foreign` (`usermachine_id`);

--
-- Indexes for table `machines`
--
ALTER TABLE `machines`
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
-- Indexes for table `proposals`
--
ALTER TABLE `proposals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proposals_workorder_id_foreign` (`workorder_id`),
  ADD KEY `proposals_machinepost_id_foreign` (`machinepost_id`),
  ADD KEY `proposals_user_id_foreign` (`user_id`);

--
-- Indexes for table `usermachines`
--
ALTER TABLE `usermachines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usermachines_company_id_foreign` (`company_id`),
  ADD KEY `usermachines_category_id_foreign` (`category_id`),
  ADD KEY `usermachines_machine_id_foreign` (`machine_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `withdrawals_deal_id_foreign` (`deal_id`);

--
-- Indexes for table `workorders`
--
ALTER TABLE `workorders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `workorders_company_id_foreign` (`company_id`),
  ADD KEY `workorders_category_id_foreign` (`category_id`),
  ADD KEY `workorders_machine_id_foreign` (`machine_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `deliverymans`
--
ALTER TABLE `deliverymans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deliveryrequests`
--
ALTER TABLE `deliveryrequests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `designs`
--
ALTER TABLE `designs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `disputes`
--
ALTER TABLE `disputes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobfiles`
--
ALTER TABLE `jobfiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `jobschedules`
--
ALTER TABLE `jobschedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `machineposts`
--
ALTER TABLE `machineposts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `machines`
--
ALTER TABLE `machines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proposals`
--
ALTER TABLE `proposals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `usermachines`
--
ALTER TABLE `usermachines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `workorders`
--
ALTER TABLE `workorders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `collections`
--
ALTER TABLE `collections`
  ADD CONSTRAINT `collections_deal_id_foreign` FOREIGN KEY (`deal_id`) REFERENCES `deals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `deals`
--
ALTER TABLE `deals`
  ADD CONSTRAINT `deals_machine_id_foreign` FOREIGN KEY (`machine_id`) REFERENCES `machines` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `deals_merchant_id_foreign` FOREIGN KEY (`merchant_id`) REFERENCES `workorders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `deals_seller_id_foreign` FOREIGN KEY (`seller_id`) REFERENCES `machineposts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `deliveryrequests`
--
ALTER TABLE `deliveryrequests`
  ADD CONSTRAINT `deliveryrequests_deal_id_foreign` FOREIGN KEY (`deal_id`) REFERENCES `deals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `deliveryrequests_deliveryman_id_foreign` FOREIGN KEY (`deliveryman_id`) REFERENCES `deliverymans` (`id`),
  ADD CONSTRAINT `deliveryrequests_merchant_id_foreign` FOREIGN KEY (`merchant_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `deliveryrequests_seller_id_foreign` FOREIGN KEY (`seller_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `designs`
--
ALTER TABLE `designs`
  ADD CONSTRAINT `designs_jobschedule_id_foreign` FOREIGN KEY (`jobschedule_id`) REFERENCES `jobschedules` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `disputes`
--
ALTER TABLE `disputes`
  ADD CONSTRAINT `disputes_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD CONSTRAINT `feedbacks_deal_id_foreign` FOREIGN KEY (`deal_id`) REFERENCES `deals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `feedbacks_merchant_id_foreign` FOREIGN KEY (`merchant_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `feedbacks_seller_id_foreign` FOREIGN KEY (`seller_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jobfiles`
--
ALTER TABLE `jobfiles`
  ADD CONSTRAINT `jobfiles_jobschedule_id_foreign` FOREIGN KEY (`jobschedule_id`) REFERENCES `jobschedules` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jobschedules`
--
ALTER TABLE `jobschedules`
  ADD CONSTRAINT `jobschedules_deal_id_foreign` FOREIGN KEY (`deal_id`) REFERENCES `deals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `machineposts`
--
ALTER TABLE `machineposts`
  ADD CONSTRAINT `machineposts_usermachine_id_foreign` FOREIGN KEY (`usermachine_id`) REFERENCES `usermachines` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `proposals`
--
ALTER TABLE `proposals`
  ADD CONSTRAINT `proposals_machinepost_id_foreign` FOREIGN KEY (`machinepost_id`) REFERENCES `machineposts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proposals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proposals_workorder_id_foreign` FOREIGN KEY (`workorder_id`) REFERENCES `workorders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usermachines`
--
ALTER TABLE `usermachines`
  ADD CONSTRAINT `usermachines_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usermachines_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usermachines_machine_id_foreign` FOREIGN KEY (`machine_id`) REFERENCES `machines` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD CONSTRAINT `withdrawals_deal_id_foreign` FOREIGN KEY (`deal_id`) REFERENCES `deals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `workorders`
--
ALTER TABLE `workorders`
  ADD CONSTRAINT `workorders_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `workorders_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `workorders_machine_id_foreign` FOREIGN KEY (`machine_id`) REFERENCES `machines` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
