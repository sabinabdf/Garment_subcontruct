-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2022 at 01:39 PM
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
-- Database: `broker`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Cutting machine', 'icon-bargraph', '2022-06-18 12:40:11', '2022-07-19 13:59:44'),
(2, 'Fabrics inspection machine', 'icon-tools', '2022-06-18 16:30:53', '2022-06-18 16:30:53'),
(3, 'Plotter printing machine', 'ti-briefcase', '2022-06-18 16:34:53', '2022-06-18 16:34:53'),
(4, 'Embroidery machine', 'ti-ruler-pencil', '2022-06-18 16:35:20', '2022-06-18 16:35:20'),
(5, 'Sewing machine', 'icon-briefcase', '2022-06-18 16:35:40', '2022-06-18 16:35:40'),
(6, 'Thread Trimmer machine', 'icon-wine', '2022-06-18 16:35:56', '2022-06-18 16:35:56'),
(7, 'Pull test machine', 'ti-world', '2022-07-19 12:03:52', '2022-07-19 12:03:52'),
(8, '2022-07-19 18:03:52', 'ti-desktop', '2022-07-19 12:04:33', '2022-07-19 12:04:33'),
(9, 'Heat seal joining the machine', 'icon-bargraph', '2022-07-19 14:00:54', '2022-07-19 14:03:26'),
(10, 'Case label printing machine', 'icon-tools', '2022-07-19 14:06:29', '2022-07-19 14:06:29'),
(11, 'Boiler machine', 'ti-briefcase', '2022-07-19 14:08:00', '2022-07-19 14:08:00'),
(13, 'Heat seal joining the machine', 'ffgfdg', '2022-08-09 21:20:05', '2022-08-09 21:20:05');

-- --------------------------------------------------------

--
-- Table structure for table `chating`
--

CREATE TABLE `chating` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deal_id` bigint(20) UNSIGNED NOT NULL,
  `merchant_id` bigint(20) UNSIGNED NOT NULL,
  `seller_id` bigint(20) UNSIGNED NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chating`
--

INSERT INTO `chating` (`id`, `deal_id`, `merchant_id`, `seller_id`, `message`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 3, 11, 6, 'ami valo', 4, '2022-07-24 23:13:46', '2022-07-24 23:13:46'),
(2, 3, 11, 6, 'tui', 4, '2022-07-25 14:16:23', '2022-07-25 14:16:23'),
(3, 3, 11, 6, 'oi akkas', 4, '2022-07-26 20:49:31', '2022-07-26 20:49:31'),
(4, 3, 11, 6, 'ki kuddus', 4, '2022-07-29 18:43:48', '2022-07-29 18:43:48'),
(5, 3, 11, 6, 'oi kaj hoiche?', 7, '2022-07-29 18:44:28', '2022-07-29 18:44:28');

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
(2, 2, 100000, '2022-07-16', 'Tapos', 'active', '2022-07-17 06:04:51', '2022-07-17 06:04:51');

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
(4, 'ZEX Fashion Bangladesh', 'House-09, Road-04, Sector-12, Uttara, Dhaka-1230, Bangladesh', 'Evolved into a rapidly growing multi-dimensional conglomerate', 'It all started as a small family business of knit apparel manufacturing and since then has evolved into a rapidly growing multi-dimensional conglomerate. ZEX Fashion Bangladesh considers itself as an end-to-end apparel solution provider, starting from sourcing the cotton and going all the way to providing logistical services to its’ clients', 'dsfjkhsdjfhsdjhjsdfhjsdfjd', '26e359e83860db1d11b6acca57d8ea88.png', '076a0c97d09cf1a0ec3e19c7f2529f2b.jpg', '\"[\\\"2e1d2aad916952995981e1b572532dc1.jpg\\\"]\"', '+8801684564925', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.213815179679!2d90.3686381139962!3d23.739753584594627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf359b74ba23%3A0x256215d92c0c66d9!2sBhuiyan%20IT%20Ltd!5e0!3m2!1sen!2sbd!4v1655589530327!5m2!1sen!2sbd', 'info@zexfashionbd.com', NULL, '58a2fc6ed39fd083f55d4182bf88826d.jpg', 5, 5, 'active', NULL, '2022-06-18 16:00:12', '2022-08-09 18:32:01'),
(6, 'Md. Zakir Hossain Molla', '308/1, Dhanmondi 15 no(old new 8/a)', 'jdhjashdjasdjadjhdjhsdj', 'djkhjhdahjhjdfhsa', 'dsfjkhsdjfhsdjhjsdfhjsdfjd', 'a760880003e7ddedfef56acb3b09697f.jpg', 'cb70ab375662576bd1ac5aaf16b3fca4.jpg', '\"[\\\"4cd52e10342f4155ce60fbe832abc5ef.jpg\\\",\\\"97d5bf89c22d86286852d304f6ea922e.jpg\\\",\\\"3d90dd5c78b3823b1c43416d3379ca7e.jpg\\\"]\"', '01303182771', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.213815179679!2d90.3686381139962!3d23.739753584594627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf359b74ba23%3A0x256215d92c0c66d9!2sBhuiyan%20IT%20Ltd!5e0!3m2!1sen!2sbd!4v1655589530327!5m2!1sen!2sbd', 'rakiba@gmail.com', NULL, 'bd686fd640be98efaae0091fa301e613.jpg', 5, 5, 'active', NULL, '2022-06-18 16:06:04', '2022-06-18 16:06:04'),
(8, 'jahdia', 'Mohammadpur', 'fklwejkfjd', 'folejfklflkjfkljd', 'dfklfkljsdfkjslkfjs', 'd395771085aab05244a4fb8fd91bf4ee.png', '81e74d678581a3bb7a720b019f4f1a93.jpg', '\"[\\\"da1a462172a12414125754084b741427.jpg\\\"]\"', '01627809808', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7304.372329089054!2d90.36795207130496!3d23.74073988837637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf4a5de53a75%3A0xf27ef22645e193c6!2z4Kac4Ka_4KaX4Ka-4Kak4Kay4Ka-LCDgpqLgpr7gppXgpr4gMTIwNQ!5e0!3m2!1sbn!2sbd!4v1655551467075!5m2!1sbn!2sbd', 'admino@gmail.com', NULL, '8d3bba7425e7c98c50f52ca1b52d3735.jpg', 5, 5, 'active', NULL, '2022-06-18 17:26:21', '2022-08-09 18:29:34'),
(11, 'MD. AZIZ', 'MODHUPUR VOTTO', 'sdcfdafjkdasfh', 'kdfhklsdfkldsjfklsdjk', 'smdhnfsdjfksdjfklds', '8f85517967795eeef66c225f7883bdcb.jpg', 'c8fbbc86abe8bd6a5eb6a3b4d0411301.jpg', '\"[\\\"9b4cd5587bcdbf8090e4468536063a76.jpg\\\"]\"', '01925923276', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7304.372329089054!2d90.36795207130496!3d23.74073988837637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf4a5de53a75%3A0xf27ef22645e193c6!2z4Kac4Ka_4KaX4Ka-4Kak4Kay4Ka-LCDgpqLgpr7gppXgpr4gMTIwNQ!5e0!3m2!1sbn!2sbd!4v1655551467075!5m2!1sbn!2sbd', 'po@gmail.com', NULL, 'f76a89f0cb91bc419542ce9fa43902dc.jpg', 6, 6, 'active', NULL, '2022-06-18 21:42:04', '2022-08-09 18:29:01');

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
(2, 4, 2, 3, 'deal sone one', '{\"name\":\"John\", \"age\":30, \"car\":null}', 25000, 250, 'yes', '2022-07-23', 12, 'goodo', 'active', '2022-07-17 06:02:08', '2022-07-17 06:02:08'),
(3, 11, 6, 6, 'deal done', '{\"name\":\"John\", \"age\":30, \"car\":null}', 50000, 25000, 'yes', '2022-07-27', 52, 'not so bad', 'active', '2022-07-16 06:02:08', '2022-07-16 06:02:08'),
(4, 6, 11, 6, 'djkghasd', '[]', 2565655, 657654, 'yes', '2022-07-11', 100, 'sdfsajkldhashd', 'active', '2022-07-24 04:58:20', '2022-07-24 04:58:20');

-- --------------------------------------------------------

--
-- Table structure for table `deliverymans`
--

CREATE TABLE `deliverymans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive','pending') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deliverymans`
--

INSERT INTO `deliverymans` (`id`, `name`, `phone`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(11, 'Rejaul', '01808', 'a1140a3d0df1c81e24ae954d935e8926.png', 'active', '2022-07-28 00:07:20', '2022-07-28 00:19:13'),
(12, 'Sumon', '+88 01712-526763', '371bce7dc83817b7893bcdeed13799b5.jpg', 'active', '2022-07-28 00:07:58', '2022-07-28 00:28:54'),
(13, 'Karima', '016065', '84117275be999ff55a987b9381e01f96.jpg', 'pending', '2022-07-28 00:14:53', '2022-07-28 00:19:00');

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
  `deliveryman_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deliveryrequests`
--

INSERT INTO `deliveryrequests` (`id`, `deal_id`, `merchant_id`, `seller_id`, `merchant_approval`, `seller_approval`, `deliveryman_id`, `created_at`, `updated_at`) VALUES
(16, 3, 11, 6, 'yes', 'yes', 11, '2022-07-26 20:29:22', '2022-08-02 22:34:25');

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
(9, 30, 'Follow its', 'fa3a3c407f82377f55c19c5d403335c7.jpg', '2022-08-06 20:13:49', '2022-08-06 20:13:49'),
(14, 37, 'baiNeed badly', 'f4be00279ee2e0a53eafdaa94a151e2c.jpg', '2022-08-06 21:28:41', '2022-08-06 23:58:07'),
(15, 38, 'b', '4b04a686b0ad13dce35fa99fa4161c65.jpg', '2022-08-06 21:29:24', '2022-08-06 21:29:24');

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
  `merchant_id` bigint(20) UNSIGNED DEFAULT NULL,
  `seller_id` bigint(20) UNSIGNED DEFAULT NULL,
  `stars` int(11) NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `deal_id`, `merchant_id`, `seller_id`, `stars`, `message`, `created_at`, `updated_at`) VALUES
(1, 3, 11, NULL, 5, 'rasel', '2022-07-24 23:23:44', '2022-07-24 23:23:44');

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
(17, 38, 'cfa0860e83a4c3a763a7e62d825349f7.jpg', 'ca46c1b9512a7a8315fa3c5a946e8265.png', 'firstly done mehedi rasel', '2022-08-07 17:45:11', '2022-08-07 17:45:11'),
(18, 38, 'd490d7b4576290fa60eb31b5fc917ad1.jpg', '8fecb20817b3847419bb3de39a609afe.jpg', 'firstly done mehedi rasel', '2022-08-07 18:01:14', '2022-08-07 18:01:14');

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
  `feedback` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive','pending','completed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobschedules`
--

INSERT INTO `jobschedules` (`id`, `deal_id`, `title`, `description`, `start_date`, `end_date`, `feedback`, `status`, `created_at`, `updated_at`) VALUES
(30, 4, 'Need it mehedi rasel', 'good quality mehedi rasel', '2022-08-10', '2022-08-20', 'firstly done mehedi rasel', 'inactive', NULL, '2022-08-06 23:25:49'),
(37, 4, 'ALAl we need it', 'caka caku need two', '2022-08-10', '2022-08-20', 'dasi dasu need not much', 'completed', NULL, '2022-08-06 23:58:07'),
(38, 4, 'a', 'c', '2022-08-07', '2022-08-17', 'd', 'active', NULL, NULL);

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
(5, 'machine Post Title', 2, 50, 'active', '2022-06-21 22:33:23', '2022-08-10 19:43:08'),
(7, 'machine post title 3', 6, 50, 'pending', '2022-06-23 18:00:00', NULL),
(8, 'rakib 2 needs', 6, 10, 'inactive', '2022-06-19 21:23:37', '2022-06-19 21:23:37'),
(9, 'Cutter Plus', 7, 100, 'active', '2022-06-13 07:23:35', '2022-08-09 22:21:52');

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
(1, 'Fusing machine', 1, '{\"Roller\":\"2\"}', 'HASHIMA', 'uploads/20220811042011.jpg', 'active', '2022-06-18 06:40:54', '2022-08-10 22:20:11'),
(3, '2-Needle chain stitch machine', 1, '{\"No. of Needle\":\"2\",\"Looper\":\"2\",\"Thread\":\"4\"}', 'JUKI', 'uploads/20220618225156.jpg', 'active', '2022-06-18 07:24:17', '2022-08-09 23:19:20'),
(4, 'Single needle lock stitch sewing machine', 5, '{\"No. of Needle\":\"1\",\"RPM\":\"4000\"}', 'JACK', 'uploads/20220618224706.jpg', 'active', '2022-06-18 16:47:06', '2022-06-18 16:47:06'),
(5, '5-thread overlock sewing machine', 5, '{\"No. of Needle\":\"2\",\"Looper\":\"3\",\"Stitch class\":\"516\"}', 'JUKI', 'uploads/20220618225424.jpg', 'active', '2022-06-18 16:54:24', '2022-08-09 23:18:15'),
(6, 'Fabric Inspection Machine (Maruto)', 2, '{\"Country origin\":\"Thailand\",\"Model No.\":\"Serial No. 295\",\"No. of machine\":\"02\",\"Speed of the machine :\":\"13 meters \\/ minute (Depends upon the quality) premium. h) Fabric waste : 0.7%-1.0% due to swatch cutting from each roll.\",\"Production capacity per day\":\"2X(13X1420X.55) =20163 mts\"}', 'Maruto', 'uploads/20220618225957.jpg', 'active', '2022-06-18 16:59:57', '2022-08-09 23:19:23'),
(9, 'Arif', 3, '{\"No. of Needle\":\"2\",\"Roller\":\"2\"}', 'Akij beba', 'uploads/20220628071417.jpg', 'active', '2022-06-28 01:14:17', '2022-08-09 21:23:35');

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
(21, '2022_07_16_225323_create_disputes_table', 1),
(22, '2022_07_20_095416_create_chating_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('jahid@gmail.com', '$2y$10$P93lzSgglmx2sy9Tq0PpquEn8/DhB46G8TJV0z1mwnCSfo6Pbrfte', '2022-08-08 17:01:56');

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
(2, 2, 1, 1, 'All is well', '{\"Roller\":\"2\"}', 5, '2022-06-17', '20220811041503.png', 4, 'Maruto', 'available', 'yes', '2022-06-18 21:33:48', '2022-08-10 22:15:03'),
(3, 2, 5, 3, 'we need help', '{\"No. of Needle\":\"2\",\"Looper\":\"2\",\"Thread\":\"4\"}', 5, '2021-10-19', '20220811041444.jpg', 4, 'Maruto', 'available', 'yes', '2022-06-18 18:28:32', '2022-08-10 22:14:44'),
(6, 11, 5, 4, 'New arif', '{\"Roller\":\"2\"}', 75, '2022-06-25', '20220626094811.jpg', 0, 'JD', 'busy', 'yes', NULL, '2022-08-08 18:28:48'),
(7, 6, 2, 6, 'not new yitle', '{\"Roller\":\"5\"}', 100, '2022-07-13', '20220811041624.jpg', 95, 'sdasd', 'available', 'no', '2022-07-25 07:57:43', '2022-08-10 22:16:24'),
(8, 6, 3, 3, 'test title', '{\"No. of Needle\":\"2\",\"Looper\":\"2\",\"Thread\":\"4\"}', 52, '2021-06-09', '20220811041757.jpg', 40, 'kabila', 'available', 'yes', '2022-08-08 18:18:49', '2022-08-10 22:17:57'),
(10, 6, 10, 9, 'fhfghdcok title', '[\"No. of Needle\",\"Looper\",\"Thread\"]', 10, '2022-07-13', 'ffgdfg', 100, 'gfgfgf', 'available', 'yes', '2022-06-13 07:23:35', '2022-08-10 19:55:27');

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
(4, 'Jahid', 'jahid@gmail.com', NULL, '01627809800', 6, 'CEO', '20220808114548.png', 'user', '$2y$10$/tKIr5Ef2Z.Ie2Wr4qirVOFSQBJpBfApkOsaGCcci4sLifbh9.f8W', NULL, '2022-06-21 04:25:07', '2022-08-08 17:45:48'),
(5, 'Hasan', 'hasan@gmail.com', NULL, '01627809808', 2, 'CEO', 'avater.jpg', 'user', '123456789', NULL, NULL, NULL),
(6, 'Naim', 'naim@gmail.com', NULL, '01627809808', 8, 'CEO', 'avater.jpg', 'user', '123456789', NULL, NULL, NULL),
(7, 'Jack', 'jack@gmail.com', NULL, '01627809808', 11, 'CEO', 'avater.jpg', 'user', '$2y$10$/tKIr5Ef2Z.Ie2Wr4qirVOFSQBJpBfApkOsaGCcci4sLifbh9.f8W', NULL, NULL, NULL),
(8, 'Arif', 'arif@gmail.com', NULL, '17171717', 2, 'Student', '20220628034008.png', 'user', '$2y$10$9kihlmOmPRi5zTTlgz4nSOJl0/Ca2zeRzplT9otcDFgMPdTwinDd6', NULL, '2022-06-27 14:18:14', '2022-06-27 21:40:08'),
(12, 'raku', 'raku@gmail.com', NULL, '+8801925923276', 6, 'CEO', '20220808080621.jpg', 'user', '$2y$10$qYh7XCFgSct1bRnRe.JS3.ldxG4t0LchoUrvbPyDRQSp0HAfaVBoK', NULL, '2022-08-08 02:06:21', '2022-08-08 02:06:21'),
(13, 'sabu', 'sabu@gmail.com', NULL, '8801925923276', 13, 'Student', '2b24d495052a8ce66358eb576b8912c8.jpg', 'user', '$2y$10$RIOAPZRldSc0dVK3uuYlU.IL8lBiPZXSRlIBodkROlDPjpv0dvx2i', NULL, '2022-08-08 02:24:24', '2022-08-09 20:40:17');

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
(2, 2, 100000, 'Ratan', 'active', '2022-07-17', 'Rupali Bank Ltd', '15042364', '2022-07-18 02:10:25', '2022-07-18 02:10:25');

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
(7, 6, 1, 6, 'hellow workorder', '{\"test\":\"test\"}', 1000, '2022-06-25', '50', 'best', 'active', NULL, '2022-08-10 19:56:41'),
(8, 2, 1, 5, '8 machin urgently need', '{\"test\":\"test\"}', 500000, '2022-06-28', 'not bad', 'good', 'active', '2022-06-13 07:23:35', '2022-06-28 01:16:00'),
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
-- Indexes for table `chating`
--
ALTER TABLE `chating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chating_deal_id_foreign` (`deal_id`),
  ADD KEY `chating_merchant_id_foreign` (`merchant_id`),
  ADD KEY `chating_seller_id_foreign` (`seller_id`),
  ADD KEY `chating_user_id_foreign` (`user_id`);

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
  ADD KEY `deals_merchant_id_foreign` (`merchant_id`),
  ADD KEY `deals_seller_id_foreign` (`seller_id`),
  ADD KEY `deals_machine_id_foreign` (`machine_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `chating`
--
ALTER TABLE `chating`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `deliverymans`
--
ALTER TABLE `deliverymans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `deliveryrequests`
--
ALTER TABLE `deliveryrequests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `designs`
--
ALTER TABLE `designs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobfiles`
--
ALTER TABLE `jobfiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `jobschedules`
--
ALTER TABLE `jobschedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `machineposts`
--
ALTER TABLE `machineposts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `machines`
--
ALTER TABLE `machines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
-- Constraints for table `chating`
--
ALTER TABLE `chating`
  ADD CONSTRAINT `chating_deal_id_foreign` FOREIGN KEY (`deal_id`) REFERENCES `deals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chating_merchant_id_foreign` FOREIGN KEY (`merchant_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chating_seller_id_foreign` FOREIGN KEY (`seller_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chating_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `collections`
--
ALTER TABLE `collections`
  ADD CONSTRAINT `collections_deal_id_foreign` FOREIGN KEY (`deal_id`) REFERENCES `deals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `deals`
--
ALTER TABLE `deals`
  ADD CONSTRAINT `deals_machine_id_foreign` FOREIGN KEY (`machine_id`) REFERENCES `usermachines` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `deals_merchant_id_foreign` FOREIGN KEY (`merchant_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `deals_seller_id_foreign` FOREIGN KEY (`seller_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `deliveryrequests`
--
ALTER TABLE `deliveryrequests`
  ADD CONSTRAINT `deliveryrequests_deal_id_foreign` FOREIGN KEY (`deal_id`) REFERENCES `deals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `deliveryrequests_deliveryman_id_foreign` FOREIGN KEY (`deliveryman_id`) REFERENCES `deliverymans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
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
-- Constraints for table `machines`
--
ALTER TABLE `machines`
  ADD CONSTRAINT `machines_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
