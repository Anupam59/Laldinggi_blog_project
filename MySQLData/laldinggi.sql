-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2024 at 12:06 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laldinggi`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(10) UNSIGNED NOT NULL,
  `cat_title` varchar(100) NOT NULL,
  `cat_slug` varchar(100) NOT NULL,
  `cat_en_name` varchar(100) NOT NULL,
  `cat_bn_name` varchar(100) NOT NULL,
  `cat_en_desc` varchar(300) NOT NULL,
  `cat_bn_desc` varchar(300) NOT NULL,
  `cat_en_key` varchar(300) DEFAULT NULL,
  `cat_bn_key` varchar(300) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `creator` int(11) NOT NULL,
  `modifier` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_title`, `cat_slug`, `cat_en_name`, `cat_bn_name`, `cat_en_desc`, `cat_bn_desc`, `cat_en_key`, `cat_bn_key`, `status`, `creator`, `modifier`, `created_date`, `modified_date`) VALUES
(1, 'Politics', 'politics', 'Politics', 'রাজনীতি', 'Politics', 'রাজনীতি', 'রাজনীতি,politics,laldinggi', NULL, 1, 1, 1, '2024-05-06 18:01:04', '2024-05-07 15:31:00'),
(2, 'Bangladesh', 'bangladesh', 'Bangladesh', 'বাংলাদেশ', 'Bangladesh', 'বাংলাদেশ', 'বাংলাদেশ,Bangladesh,laldinggi', NULL, 1, 1, 1, '2024-05-06 18:02:55', '2024-05-07 15:32:01'),
(3, 'Entertainment', 'entertainment', 'Entertainment', 'বিনোদন', 'Entertainment', 'বিনোদন', 'বিনোদন,Entertainment,laldinggi', NULL, 1, 1, 1, '2024-05-07 15:33:21', '2024-05-07 15:33:21'),
(4, 'Sports', 'sports', 'Sports', 'খেলা', 'Sports', 'খেলা', 'খেলা,Sports,laldinggi', NULL, 1, 1, 1, '2024-05-07 15:34:21', '2024-05-07 15:34:21'),
(5, 'International', 'international', 'International', 'আন্তর্জাতিক', 'International', 'আন্তর্জাতিক', 'আন্তর্জাতিক,International', NULL, 1, 1, 1, '2024-05-07 15:35:42', '2024-05-07 15:35:42'),
(6, 'Lifestyle', 'lifestyle', 'Life Style', 'জীবনযাপন', 'Life Style', 'জীবনযাপন', 'জীবনযাপন,lifestyle', NULL, 1, 1, 1, '2024-05-07 15:41:09', '2024-05-07 15:41:09'),
(7, 'Religion', 'religion', 'Religion', 'ধর্ম', 'Religion', 'ধর্ম', 'ধর্ম,Religion', NULL, 1, 1, 1, '2024-05-07 15:42:55', '2024-05-07 15:42:55'),
(8, 'Business', 'business', 'Business', 'বাণিজ্য', 'Business', 'বাণিজ্য', 'বাণিজ্য,Business', NULL, 1, 1, 1, '2024-05-07 15:44:27', '2024-05-07 15:44:27');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `district_id` int(10) UNSIGNED NOT NULL,
  `district_slug` varchar(80) NOT NULL,
  `division_id` tinyint(4) NOT NULL,
  `district_name` varchar(70) NOT NULL,
  `district_bn_name` varchar(70) NOT NULL,
  `position` tinyint(4) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `creator` int(11) NOT NULL,
  `modifier` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `division_id` int(10) UNSIGNED NOT NULL,
  `division_slug` varchar(80) NOT NULL,
  `division_name` varchar(70) NOT NULL,
  `division_bn_name` varchar(70) NOT NULL,
  `position` tinyint(4) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `creator` int(11) NOT NULL,
  `modifier` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gal_id` int(10) UNSIGNED NOT NULL,
  `gal_bn_caption` varchar(300) NOT NULL,
  `gal_en_caption` varchar(300) NOT NULL,
  `gal_image` varchar(50) NOT NULL,
  `gal_link` varchar(300) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `creator` int(11) NOT NULL,
  `modifier` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(10) UNSIGNED NOT NULL,
  `menu_title` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `creator` int(11) NOT NULL,
  `modifier` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_title`, `status`, `creator`, `modifier`, `created_date`, `modified_date`) VALUES
(1, 'Top Menu', 1, 1, 1, '2024-05-07 14:13:55', '2024-05-07 14:13:55'),
(2, 'Tab Menu', 1, 1, 1, '2024-05-20 09:56:31', '2024-05-20 09:56:31');

-- --------------------------------------------------------

--
-- Table structure for table `menu_item`
--

CREATE TABLE `menu_item` (
  `menu_item_id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(11) NOT NULL,
  `menu_item_title` varchar(100) NOT NULL,
  `menu_item_bn_title` varchar(100) NOT NULL,
  `menu_item_link` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `creator` int(11) NOT NULL,
  `modifier` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_item`
--

INSERT INTO `menu_item` (`menu_item_id`, `menu_id`, `menu_item_title`, `menu_item_bn_title`, `menu_item_link`, `status`, `creator`, `modifier`, `created_date`, `modified_date`) VALUES
(1, 1, 'Politics', 'রাজনীতি', '/politics', 1, 1, 1, '2024-05-07 14:15:14', '2024-06-06 13:10:08'),
(2, 1, 'Bangladesh', 'বাংলাদেশ', '/bangladesh', 1, 1, 1, '2024-05-07 14:15:37', '2024-06-06 13:10:54'),
(3, 1, 'Entertainment', 'বিনোদন', '/entertainment', 1, 1, 1, '2024-05-07 14:15:58', '2024-06-06 13:11:15'),
(4, 1, 'Sports', 'খেলা', '/sports', 1, 1, 1, '2024-05-07 14:16:31', '2024-06-06 13:11:31'),
(5, 1, 'International', 'আন্তর্জাতিক', '/international', 1, 1, 1, '2024-05-07 14:16:59', '2024-06-06 13:11:48'),
(6, 1, 'Life Style', 'জীবনযাপন', '/lifestyle', 1, 1, 1, '2024-05-07 14:17:19', '2024-06-06 13:12:17'),
(7, 1, 'Religion', 'ধর্ম', '/religion', 1, 1, 1, '2024-05-07 14:17:46', '2024-06-06 13:12:34'),
(8, 1, 'Business', 'বাণিজ্য', '/business', 1, 1, 1, '2024-05-07 14:18:05', '2024-06-06 13:12:57'),
(9, 2, 'Politics', 'রাজনীতি', '1', 1, 1, 1, '2024-05-20 10:02:30', '2024-05-20 10:02:30'),
(10, 2, 'Bangladesh', 'বাংলাদেশ', '2', 1, 1, 1, '2024-05-20 10:03:00', '2024-05-20 10:03:00'),
(11, 2, 'Sports', 'খেলা', '4', 1, 1, 1, '2024-05-20 10:04:35', '2024-05-20 10:04:35'),
(12, 2, 'Religion', 'ধর্ম', '7', 1, 1, 1, '2024-05-20 10:05:37', '2024-05-20 10:05:37'),
(13, 2, 'Business', 'বাণিজ্য', '8', 1, 1, 1, '2024-05-20 10:06:43', '2024-05-20 10:06:43');

-- --------------------------------------------------------

--
-- Table structure for table `menu_sub_item`
--

CREATE TABLE `menu_sub_item` (
  `menu_sub_item_id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(11) NOT NULL,
  `menu_item_id` int(11) NOT NULL,
  `menu_sub_item_title` varchar(100) NOT NULL,
  `menu_sub_item_bn_title` varchar(100) NOT NULL,
  `menu_sub_item_link` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `creator` int(11) NOT NULL,
  `modifier` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_sub_item`
--

INSERT INTO `menu_sub_item` (`menu_sub_item_id`, `menu_id`, `menu_item_id`, `menu_sub_item_title`, `menu_sub_item_bn_title`, `menu_sub_item_link`, `status`, `creator`, `modifier`, `created_date`, `modified_date`) VALUES
(1, 1, 2, 'Capital', 'রাজধানী', '/bangladesh/capital', 1, 1, 1, '2024-05-07 14:44:36', '2024-06-06 13:18:24'),
(2, 1, 2, 'Crime', 'অপরাধ', '/bangladesh/crime', 1, 1, 1, '2024-05-07 14:44:57', '2024-06-06 13:18:39'),
(3, 1, 2, 'Environment', 'পরিবেশ', '/bangladesh/environment', 1, 1, 1, '2024-05-07 14:45:19', '2024-06-06 13:19:11'),
(4, 1, 3, 'TV', 'টেলিভিশন', '/entertainment/tv', 1, 1, 1, '2024-06-06 13:18:00', '2024-06-06 13:20:59'),
(5, 1, 3, 'Dhallywood', 'ঢালিউড', '/entertainment/dhallywood', 1, 1, 1, '2024-06-06 13:18:00', '2024-06-06 13:23:13'),
(6, 1, 3, 'Dollywood', 'বলিউড', '/entertainment/dollywood', 1, 1, 1, '2024-06-06 13:18:00', '2024-06-06 13:24:04'),
(7, 1, 4, 'Cricket', 'ক্রিকেট', '/sports/cricket', 1, 1, 1, '2024-06-06 13:26:37', '2024-06-06 13:26:37'),
(8, 1, 4, 'Football', 'ফুটবল', '/sports/football', 1, 1, 1, '2024-06-06 13:26:37', '2024-06-06 13:29:53'),
(9, 1, 4, 'Tennis', 'টেনিস', '/sports/tennis', 1, 1, 1, '2024-06-06 13:26:37', '2024-06-06 13:30:21'),
(10, 1, 6, 'Travel', 'ভ্রমণ', '/lifestyle/travel', 1, 1, 1, '2024-06-06 13:32:52', '2024-06-06 13:32:52'),
(11, 1, 6, 'Relation', 'সম্পর্ক', '/lifestyle/relation', 1, 1, 1, '2024-06-06 13:33:41', '2024-06-06 13:33:41');

-- --------------------------------------------------------

--
-- Table structure for table `menu_sub_sub_item`
--

CREATE TABLE `menu_sub_sub_item` (
  `menu_sub_sub_item_id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(11) NOT NULL,
  `menu_item_id` int(11) NOT NULL,
  `menu_sub_item_id` int(11) NOT NULL,
  `menu_sub_sub_item_title` varchar(100) NOT NULL,
  `menu_sub_sub_item_bn_title` varchar(100) NOT NULL,
  `menu_sub_sub_item_link` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `creator` int(11) NOT NULL,
  `modifier` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2015_08_18_162244_create_role_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_28_164927_create_category_table', 1),
(6, '2023_05_28_180215_create_sub_category_table', 1),
(7, '2023_05_28_180220_create_sub_sub_category_table', 1),
(8, '2023_05_28_182300_create_gallery_table', 1),
(9, '2023_06_14_200607_create_site_common_table', 1),
(10, '2023_06_17_174523_create_menu_table', 1),
(11, '2023_06_18_170418_create_menu_item_table', 1),
(12, '2023_06_23_205449_create_menu_sub_item_table', 1),
(13, '2023_07_15_093739_create_menu_sub_sub_item_table', 1),
(14, '2023_07_16_131751_create_news_status_table', 1),
(15, '2023_07_21_160908_create_news_page_table', 1),
(16, '2023_07_22_052138_create_news_type_table', 1),
(17, '2023_07_22_121720_create_division_table', 1),
(18, '2023_07_22_121739_create_district_table', 1),
(19, '2023_07_22_121843_create_upazila_table', 1),
(20, '2023_07_22_130006_create_news_table', 1),
(21, '2023_07_29_144308_create_news_seo_table', 1),
(22, '2023_07_29_202302_create_news_tag_table', 1),
(23, '2023_09_27_173525_create_news_series_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` bigint(20) UNSIGNED NOT NULL,
  `news_head_title` varchar(300) NOT NULL,
  `news_slug` varchar(350) NOT NULL,
  `news_head_caption_tag` varchar(150) DEFAULT NULL,
  `news_details_brief` varchar(500) DEFAULT NULL,
  `news_details` longtext DEFAULT NULL,
  `news_image` varchar(100) DEFAULT NULL,
  `news_image_caption` varchar(300) DEFAULT NULL,
  `news_vidos` varchar(300) DEFAULT NULL,
  `news_vidos_caption` varchar(300) DEFAULT NULL,
  `news_audio` varchar(100) DEFAULT NULL,
  `news_audio_caption` varchar(300) DEFAULT NULL,
  `news_source` varchar(300) DEFAULT NULL,
  `news_source_link` varchar(300) DEFAULT NULL,
  `news_zone` varchar(100) DEFAULT NULL,
  `division_id` tinyint(4) DEFAULT NULL,
  `district_id` tinyint(4) DEFAULT NULL,
  `upazila_id` tinyint(4) DEFAULT NULL,
  `news_writer` varchar(300) DEFAULT NULL,
  `news_reporter` varchar(300) DEFAULT NULL,
  `cat_id` tinyint(4) DEFAULT NULL,
  `sub_cat_id` tinyint(4) DEFAULT NULL,
  `sub_sub_cat_id` tinyint(4) DEFAULT NULL,
  `news_page_id` tinyint(4) DEFAULT NULL,
  `news_type_id` tinyint(4) DEFAULT NULL,
  `news_series_id` int(11) DEFAULT NULL,
  `news_status_id` tinyint(4) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `approver` int(11) DEFAULT NULL,
  `creator` int(11) NOT NULL,
  `modifier` int(11) NOT NULL,
  `publish_date` timestamp NULL DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_head_title`, `news_slug`, `news_head_caption_tag`, `news_details_brief`, `news_details`, `news_image`, `news_image_caption`, `news_vidos`, `news_vidos_caption`, `news_audio`, `news_audio_caption`, `news_source`, `news_source_link`, `news_zone`, `division_id`, `district_id`, `upazila_id`, `news_writer`, `news_reporter`, `cat_id`, `sub_cat_id`, `sub_sub_cat_id`, `news_page_id`, `news_type_id`, `news_series_id`, `news_status_id`, `status`, `approver`, `creator`, `modifier`, `publish_date`, `created_date`, `modified_date`) VALUES
(1, 'নেতানিয়াহুর বিচার দাবিতে জগন্নাথ বিশ্ববিদ্যালয়ে ছাত্রলীগের মিছিল–সমাবেশ', 'netaniyahur-bicar-dabite-jgnnath-biswbidzalye-chatrleeger-michil-smabes', 'ফিলিস্তিন', 'ফিলিস্তিনে ইসরায়েলের আগ্রাসনের প্রতিবাদে জগন্নাথ বিশ্ববিদ্যালয়ে বিক্ষোভ মিছিল করেছেন ছাত্রলীগের বিশ্ববিদ্যালয় শাখার নেতা-কর্মীরা।', '<p>ফিলিস্তিনে ইসরায়েলের আগ্রাসনের প্রতিবাদে জগন্নাথ বিশ্ববিদ্যালয়ে বিক্ষোভ মিছিল করেছেন ছাত্রলীগের বিশ্ববিদ্যালয় শাখার নেতা-কর্মীরা। গাজায় সাধারণ ফিলিস্তিনিদের ওপর চালানো গণহত্যা ও নৃশংসতাকে মুক্তিযুদ্ধের সময় পাকিস্তানি হানাদার বাহিনীর বর্বতার সঙ্গে তুলনা করেন সংগঠনের নেতারা। এ ঘটনায় ইসরায়েলের প্রধানমন্ত্রী বেনিয়ামিন নেতানিয়াহুকে বিচারের আওতায় আনার দাবি জানিয়েছেন তাঁরা।</p><p>আজ সোমবার জগন্নাথ বিশ্ববিদ্যালয়ের কেন্দ্রীয় শহীদ মিনার চত্বর থেকে মিছিল শুরু হয়। বিশ্ববিদ্যালয় শাখা ছাত্রলীগের সভাপতি ইব্রাহিম ফরাজী ও সাধারণ সম্পাদক আক্তার হোসাইনের নেতৃত্বে মিছিলটি বিশ্ববিদ্যালয়ের প্রধান সড়কগুলো প্রদক্ষিণ করে ক্যাম্পাসের আশপাশের শাঁখারীবাজার, রায়সাহেব বাজার, বাহাদুর শাহ পার্ক ঘুরে প্রশাসনিক ভবনের সামনে এসে শেষ হয়।</p><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">মিছিল শেষে সংক্ষিপ্ত সমাবেশের আয়োজন করা হয়। এ সময় আক্তার হোসাইন বলেন, ১৯৭১ সালে পাকিস্তানি হানাদার বাহিনী যেভাবে বর্বরতা চালিয়েছে, সন্ত্রাসী ইসরায়েল গাজায় একইভাবে নৃশংসতা চালাচ্ছে। গণহত্যার দায়ে ইসরায়েলের প্রধানমন্ত্রী বেনিয়ামিন নেতানিয়াহুর অবিলম্বে গ্রেপ্তার করে বিচার ও শাস্তি নিশ্চিত করা প্রয়োজন।</p><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">সমাবেশে শাখা ছাত্রলীগের সভাপতি ইব্রাহিম ফরাজী বলেন, গাজা যুদ্ধে ইন্ধনদাতা যুক্তরাষ্ট্রের বিরুদ্ধে দাঁড়ানোর সময় এসে গেছে।</p><p><br></p>', '/Images/news-img/1715113362.jpg', 'ফিলিস্তিন', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ফিলিস্তিন', NULL, 2, 1, NULL, 1, 3, NULL, 1, 1, NULL, 1, 1, NULL, '2024-05-06 18:11:04', '2024-05-31 12:44:30'),
(2, 'অধ্যাপক নাদির জুনাইদের বিরুদ্ধে অভিযোগের প্রাথমিক সত্যতা পেয়েছে কমিটি', 'odhzapk-nadir-junaider-biruddhe-ovizoger-prathmik-stzta-peyeche-kmiti', 'যৌন নিপীড়ন', 'ঢাকা বিশ্ববিদ্যালয়ের গণযোগাযোগ ও সাংবাদিকতা বিভাগের অধ্যাপক নাদির জুনাইদের বিরুদ্ধে বিভাগের এক ছাত্রীর করা যৌন নিপীড়নের অভিযোগের প্রাথমিক সত্যতা পেয়েছে তথ্যানুসন্ধান কমিটি।', '<p>ঢাকা বিশ্ববিদ্যালয়ের গণযোগাযোগ ও সাংবাদিকতা বিভাগের অধ্যাপক নাদির জুনাইদের বিরুদ্ধে বিভাগের এক ছাত্রীর করা যৌন নিপীড়নের অভিযোগের প্রাথমিক সত্যতা পেয়েছে তথ্যানুসন্ধান কমিটি। অভিযোগটি অধিকতর তদন্তের জন্য বিশ্ববিদ্যালয়ের যৌন নিপীড়নবিরোধী সেলে পাঠানো হয়েছে। আগামী দুই মাস এই তদন্ত চলবে। এ সময় অধ্যাপক নাদির জুনাইদকে বিশ্ববিদ্যালয়ের একাডেমিক ও প্রশাসনিক সব কার্যক্রম থেকে অব্যাহতি দেওয়া হয়েছে৷</p><p><span style=\"font-size: 1rem;\">মঙ্গলবার সন্ধ্যায় বিশ্ববিদ্যালয়ের সর্বোচ্চ নীতিনির্ধারণী ফোরাম সিন্ডিকেটের সভায় এই সিদ্ধান্ত হয়। সিন্ডিকেট সভায় ফারসি ভাষা ও সাহিত্য বিভাগের এক অধ্যাপকের পিএইচডি অভিসন্দর্ভে জালিয়াতির অভিযোগ তদন্তে আরেকটি কমিটি গঠন করা হয়েছে। এই কমিটিকে এক মাসের মধ্যে প্রতিবেদন দিতে বলা হয়েছে।</span></p><p><span style=\"font-size: 1rem;\">সিন্ডিকেটের দুজন সদস্য প্রথম আলোকে বলেন, গত ১০ ফেব্রুয়ারি অধ্যাপক নাদির জুনাইদের বিরুদ্ধে যৌন হয়রানির অভিযোগ করেন বিভাগেরই এক ছাত্রী। এই প্রেক্ষাপটে ক্লাস বর্জনসহ শিক্ষার্থীদের আন্দোলনের মুখে ওই মাসের দ্বিতীয় সপ্তাহে তাঁকে তিন মাসের ছুটিতে পাঠায় বিশ্ববিদ্যালয় কর্তৃপক্ষ৷ গত মাসের শেষ সপ্তাহে এই অধ্যাপকের বিরুদ্ধে যৌন হয়রানির অভিযোগ করেন আরেকটি বিশ্ববিদ্যালয়ের সাবেক এক ছাত্রী। এমন পরিস্থিতিতে সিন্ডিকেটের সভায় অভিযোগ তদন্তে তিন সদস্যের তথ্যানুসন্ধান কমিটি করা হয়। সেই কমিটির প্রতিবেদন মঙ্গলবারের সিন্ডিকেট সভায় উত্থাপন করা হয়।</span></p><p><span style=\"font-size: 1rem;\">সিন্ডিকেট সদস্যরা জানান, অধ্যাপক নাদিরের বিরুদ্ধে ছাত্রীর অভিযোগের প্রাথমিক সত্যতা পাওয়া গেছে বলে তথ্যানুসন্ধান কমিটির প্রতিবেদনে উল্লেখ করা হয়েছে। বিষয়টির অধিকতর তদন্তের জন্য বিশ্ববিদ্যালয়ের যৌন নিপীড়নবিরোধী সেলে পাঠানো হয়েছে। এই তদন্ত শেষ করতে সেলকে দুই মাস সময় দেওয়া হয়েছে। তদন্ত শেষ না হওয়া পর্যন্ত অধ্যাপক নাদির জুনাইদকে বিশ্ববিদ্যালয়ের একাডেমিক ও প্রশাসনিক সব কার্যক্রম থেকে অব্যাহতি দেওয়া হয়েছে৷</span><br></p><p><br></p>', '/Images/news-img/1715113039.jpg', 'যৌন নিপীড়ন', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Writer1', '1', 2, 1, NULL, 1, 1, NULL, 1, 1, NULL, 1, 1, NULL, '2024-05-07 15:17:20', '2024-05-08 13:36:39'),
(3, 'র‍্যাবের উদ্ধার করা আট কেজি সোনা বৈধ, মামলায় খালাস সেই মনির', 'rzaber-uddhar-kra-at-keji-sona-boidh-mamlay-khalas-sei-mnir', 'মামলা', 'অস্ত্র আইনের মামলার পর এবার বিশেষ ক্ষমতা আইনে করা মামলা থেকে খালাস পেলেন মনির হোসেন ওরফে ‘গোল্ডেন’ মনির।', '<p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">অস্ত্র আইনের মামলার পর এবার বিশেষ ক্ষমতা আইনে করা মামলা থেকে খালাস পেলেন মনির হোসেন ওরফে ‘গোল্ডেন’ মনির। ঢাকার সপ্তম অতিরিক্ত মহানগর দায়রা জজ তেহসিন ইফতেখার গত রোববার এ রায় দেন।</p><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">সোনা ও টাকা উদ্ধারের ঘটনায় বিশেষ ক্ষমতা আইনের মামলাটি করা হয়েছিল। রায়ের তথ্য বলছে, বাড্ডায় মনিরের বাসা ও ব্যবসাপ্রতিষ্ঠান থেকে র‍্যাবের জব্দ করা ১ কোটি ৯ লাখ টাকা, আট কেজি সোনা ও বৈদেশিক মুদ্রা বৈধ উপার্জনের মাধ্যমে অর্জিত। রাষ্ট্রপক্ষ মনিরের বিরুদ্ধে আনা বিশেষ ক্ষমতা আইনের অভিযোগ প্রমাণে চূড়ান্তভাবে ব্যর্থ হয়েছে।</p><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\"><br></p><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">রায়ের বিষয়ে আসামিপক্ষের আইনজীবী আশরাফুল করিম প্রথম আলোকে বলেন, মনির আদালতের কাছ থেকে ন্যায়বিচার পেয়েছেন।</p><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">অবশ্য রাষ্ট্রপক্ষে মামলা পরিচালনাকারী পাবলিক প্রসিকিউটর মো. মাহবুবুর রহমান দাবি করেন, রায়ে ন্যায়বিচার প্রতিষ্ঠিত হয়নি। তিনি প্রথম আলোকে বলেন, মামলাটিতে একজন পুলিশ কর্মকর্তা আদালতে সাক্ষ্য দিয়েছেন। তিনি মনিরের সম্পদের মালিকানা যাচাইয়ের পর আদালতে প্রতিবেদন দিয়ে জানিয়েছেন, মনিরের বাসা ও প্রতিষ্ঠান থেকে র‍্যাবের জব্দ করা সম্পদ বৈধ।</p>', '/Images/news-img/1715150520.jpg', 'মামলা', 'MviEoBoT3XA', 'গোল্ডেন মনিরের', NULL, NULL, 'Jamuna TV', 'https://jamuna.tv/', NULL, NULL, NULL, NULL, NULL, '1', 3, NULL, NULL, NULL, 2, NULL, NULL, 1, NULL, 1, 1, NULL, '2024-05-07 15:40:24', '2024-06-01 10:34:46'),
(4, 'ড্রিম ভিলেজ পার্কের দুই উদ্ভিদ', 'drim-vilej-parker-dui-udvid', 'ড্রিম ভিলেজ', 'ডাবুরের আদি নিবাস ভারত ও দক্ষিণ এশিয়া। এটি উপকূলীয় লবণাক্ত জলাবন এবং জলাভূমিতে দারুণভাবে বৃদ্ধি পায়। এই উদ্ভিদ শক্তিশালী বিষ উৎপন্ন করে, যা খেলে মানুষ মারা যায়।', '<p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">জানুয়ারি মাসের মাঝামাঝি গিয়েছিলাম ময়মনসিংহের বৈলরের ড্রিম ভিলেজ পার্কে। প্রকৃতিতে তখন শীতের আমেজ। পার্কে বড় এক মাঠের ধারে পাশাপাশি দুটি কটেজ। কটেজের পেছনে লেক, লেকের ধারে পাকা রাস্তা। এই রাস্তায় হাঁটতে বেরিয়ে ছোট গুল্মজাতীয় উদ্ভিদ চোখে পড়ল। ওখানে রাস্তার পাশে, পুকুরের ধারে বেশ কিছু লাল ঠোঁট গাছ চোখে পড়ল। ঝোপালো এই গাছকে ছাঁটাই করে সুন্দর বল বা ব্যাঙের ছাতার আকৃতি দেওয়া হয়েছে। দেখতে গুলাচি বা কাঠগোলাপের মতো। ভালো করে দেখে বুঝলাম এটি ডাবুর। এ ছাড়া ওখানে রাস্তার পাশে, পুকুরের ধারে বেশ কিছু লাল ঠোঁট গাছ চোখে পড়ল।<br><p>ঝোপালো ডাবুরগাছকে ছাঁটাই করে সুন্দর বল বা ব্যাঙের ছাতার আকৃতি দেওয়া হয়েছে। এ ছাড়া ডাবুরের গাঢ় সবুজ, বেগুনি বা লাল পাতা দেখতে গুলাচির পাতার মতো, গাছের আকৃতিও ও রকম। ফুল আকর্ষণীয় গোলাপি এবং সাদা হালকা সুগন্ধি। ডাবুর সুনিষ্কাশিত, কম্পোস্টযুক্ত মাটি পছন্দ করে। আংশিক আলো–ছায়াপূর্ণ রোদ এদের পছন্দ। এরা তুষারপাত এবং খরা সহনশীল।<br>উদ্ভিদের ভ্যারাইটির নাম Cerbera odollam rubra, এটি Apocynaceae পরিবারের উদ্ভিদ। করবী আর ডাবুর একই পরিবারের সদস্য। এটি ইংরেজিতে সুইসাইড ট্রি, গ্রে মিল্কউড, জঙ্গলি আম, পং পং, সামুদ্রিক আম, হলুদ-চোখের সারবেরা ইত্যাদি নামে পরিচিত। রাস্তার দুপাশে, পুকুর, লেকের ধারে এই উদ্ভিদের ঝোপ খুব সুন্দর মানায়।<br>ডাবুরের আদি নিবাস ভারত ও দক্ষিণ এশিয়া। এটি উপকূলীয় লবণাক্ত জলাবন এবং জলাভূমিতে দারুণভাবে বৃদ্ধি পায়। এই উদ্ভিদ শক্তিশালী বিষ উৎপন্ন করে, যা খেলে মানুষ মারা যায়। ডাবুরের ফুল সাদা, উজ্জ্বল, তারকা আকৃতির, ৫-৭ সেন্টিমিটার দৈর্ঘ্যের, ফুলের একটি ছোট হলুদ কেন্দ্র থাকে। পাতাগুলো ১২-৩০ সেন্টিমিটার লম্বা, ডিম্বাকৃতি, গাঢ় সবুজ এবং চকচকে। পাতা শাখার আগায় ঘন সর্পিলাকারে আটকে থাকে। ফল যখন সবুজ থাকে, তখন ছোট আমের মতো দেখায়। ফলের ভেতরে সাদা শাঁস থাকে। এই শাঁস বাতাসের সংস্পর্শে এলে বেগুনি, তারপর গাঢ় ধূসর এবং শেষ পর্যন্ত বাদামি বা কালো হয়ে যায়। গাছ থেকে সাদা রঙের ল্যাটেক্স বা তরুক্ষীর বের হয়, যা খুব বিষাক্ত।<br>লাল ঠোঁট চিরসবুজ ঝোপ বা গুল্মজাতীয় উদ্ভিদ। কচি পাতা প্রথমে লাল থাকে এবং শেষে সবুজ হয়ে যায়। প্রশাখার অগ্রভাগে লাল পাতাগুলো থাকে, দেখতে যেন সবুজ টিয়া পাখির লাল ঠোঁট। এ জন্যই হয়তো ইংরেজিতে এই উদ্ভিদকে রেড লিপ এবং বাংলায় লাল ঠোঁট বলা হয়। এর বৈজ্ঞানিক নাম Syzygium myrtifolium, এটি Myrtaceae পরিবারের উদ্ভিদ। উদ্ভিদটি ডালপালাসহ ২০ মিটার পর্যন্ত লম্বা হয়।<br>এর পত্রবিন্যাস বিপরীত, পাতা উপবৃত্তাকার থেকে ল্যান্স আকৃতির, বোঁটাযুক্ত, প্রায় ৭.৫ সেন্টিমিটার লম্বা এবং ২.৫ সেন্টিমিটার চওড়া। কচি পাতা প্রথমে লালচে হয়ে ওঠে, পরে লাল-বাদামি, তারপর সবুজ হয়ে যায়। পুষ্পমঞ্জরি শাখান্বিত, ৪ সেন্টিমিটার পর্যন্ত লম্বা হয়। ফুল ক্রিম থেকে সাদা রঙের হয়। ফল গোলাকার থেকে উপবৃত্তাকার, রসাল ও মাংসল। ফলগুলো গাঢ় লাল থেকে লালচে বেগুনি রঙের, পুরোটা পাকলে কালো হয়ে যায়। ফল প্রায় ৯ মিলিমিটার চওড়া।<br>এই উদ্ভিদ নিম্নভূমির বনে, উপকূলীয় বনে, মিঠাপানির জলাভূমির কাছাকাছি এবং নদীর তীরে জন্মে। রেড লিপ উদ্ভিদের আদি নিবাস বাংলাদেশ, মালয়েশিয়া। দক্ষিণ–পূর্ব এশিয়ায় আলংকারিক উদ্ভিদ হিসেবে লাগানো হয়। বাগানের উদ্ভিদ হিসেবে, সাধারণত বেড়া হিসেবে লাগানো হয়। পুকুর, সড়ক বা লেকের ধারে লাগালে খুব ভালো দেখায়। এই গাছ দ্রুত বৃদ্ধি পায়। ছাঁটাই করে রাখলে ভালো দেখায়। সবচেয়ে বড় সুবিধা হলো এই উদ্ভিদকে ছেঁটে বিভিন্ন আকৃতি দেওয়া যায়।</p></p><p><br></p>', '/Images/news-img/1715149161.jpg', 'ড্রিম ভিলেজ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 3, NULL, NULL, 2, NULL, NULL, 1, NULL, 1, 1, NULL, '2024-05-08 13:19:22', '2024-05-08 17:11:38'),
(5, 'ডোনাল্ড লু বিএনপির কাছে এতটা গুরুত্বপূর্ণ নন: নজরুল ইসলাম খান', 'donald-lu-bienpir-kache-etta-gurutwpuurn-nn-njrul-islam-khan', 'ডোনাল্ড লু বিএনপির', 'ঢাকার গুলশানে বিএনপির চেয়ারপারসনের কার্যালয়ে শরিক জাতীয়তাবাদী সমমনা জোটের নেতাদের সঙ্গে বৈঠক শেষে এক প্রেস ব্রিফিংয়ে বক্তব্য দেন বিএনপি নেতা নজরুল ইসলাম খান।', '<p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">ডোনাল্ড লু বিএনপির কাছে এতটা গুরুত্বপূর্ণ নন বলে মন্তব্য করেছেন বিএনপির স্থায়ী কমিটির সদস্য নজরুল ইসলাম খান। তিনি বলেছেন, ‘আমাদের কাছে ডোনাল্ড লুর চেয়ে পার্বত্য চট্টগ্রামের সশস্ত্র গোষ্ঠী ‘কুকি- চিনের’ আচরণ গুরুত্বপূর্ণ। কারণ, সরকার এই সশস্ত্র গোষ্ঠীর তৎপরতা নিয়ন্ত্রণে ব্যর্থ হয়েছে।</p><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">যুক্তরাষ্ট্রের দক্ষিণ ও মধ্য এশিয়াবিষয়ক সহকারী পররাষ্ট্রমন্ত্রী ডোনাল্ড লুর আগামীকাল মঙ্গলবার ঢাকা সফর সম্পর্কে আজ সাংবাদিকদের এক প্রশ্নের জবাবে নজরুল ইসলাম খান এ কথা বলেন।</p><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">ডোনাল্ড লুর এ সফর নিয়ে আওয়ামী লীগের সাধারণ সম্পাদক এবং সড়ক পরিবহন ও সেতুমন্ত্রী ওবায়দুল কাদের আজ এক সংবাদ সম্মেলনে মন্তব্য করেন, ‘বাইরে থেকে এসে কেউ বিএনপিকে মদদ দেবে, চাঙা করবে, এমন পরিস্থিতি নেই। যারা দাপট দেখাবে, তাদের ক্ষমতা মধ্যপ্রাচ্যেই সংকুচিত হয়ে আছে।’ডোনাল্ড লু বিএনপির কাছে এতটা গুরুত্বপূর্ণ নন বলে মন্তব্য করেছেন বিএনপির স্থায়ী কমিটির সদস্য নজরুল ইসলাম খান। তিনি বলেছেন, ‘আমাদের কাছে ডোনাল্ড লুর চেয়ে পার্বত্য চট্টগ্রামের সশস্ত্র গোষ্ঠী ‘কুকি- চিনের’ আচরণ গুরুত্বপূর্ণ। কারণ, সরকার এই সশস্ত্র গোষ্ঠীর তৎপরতা নিয়ন্ত্রণে ব্যর্থ হয়েছে।</p><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">যুক্তরাষ্ট্রের দক্ষিণ ও মধ্য এশিয়াবিষয়ক সহকারী পররাষ্ট্রমন্ত্রী ডোনাল্ড লুর আগামীকাল মঙ্গলবার ঢাকা সফর সম্পর্কে আজ সাংবাদিকদের এক প্রশ্নের জবাবে নজরুল ইসলাম খান এ কথা বলেন।</p><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">ডোনাল্ড লুর এ সফর নিয়ে আওয়ামী লীগের সাধারণ সম্পাদক এবং সড়ক পরিবহন ও সেতুমন্ত্রী ওবায়দুল কাদের আজ এক সংবাদ সম্মেলনে মন্তব্য করেন, ‘বাইরে থেকে এসে কেউ বিএনপিকে মদদ দেবে, চাঙা করবে, এমন পরিস্থিতি নেই। যারা দাপট দেখাবে, তাদের ক্ষমতা মধ্যপ্রাচ্যেই সংকুচিত হয়ে আছে।’ডোনাল্ড লু বিএনপির কাছে এতটা গুরুত্বপূর্ণ নন বলে মন্তব্য করেছেন বিএনপির স্থায়ী কমিটির সদস্য নজরুল ইসলাম খান। তিনি বলেছেন, ‘আমাদের কাছে ডোনাল্ড লুর চেয়ে পার্বত্য চট্টগ্রামের সশস্ত্র গোষ্ঠী ‘কুকি- চিনের’ আচরণ গুরুত্বপূর্ণ। কারণ, সরকার এই সশস্ত্র গোষ্ঠীর তৎপরতা নিয়ন্ত্রণে ব্যর্থ হয়েছে।</p><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">যুক্তরাষ্ট্রের দক্ষিণ ও মধ্য এশিয়াবিষয়ক সহকারী পররাষ্ট্রমন্ত্রী ডোনাল্ড লুর আগামীকাল মঙ্গলবার ঢাকা সফর সম্পর্কে আজ সাংবাদিকদের এক প্রশ্নের জবাবে নজরুল ইসলাম খান এ কথা বলেন।</p><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">ডোনাল্ড লুর এ সফর নিয়ে আওয়ামী লীগের সাধারণ সম্পাদক এবং সড়ক পরিবহন ও সেতুমন্ত্রী ওবায়দুল কাদের আজ এক সংবাদ সম্মেলনে মন্তব্য করেন, ‘বাইরে থেকে এসে কেউ বিএনপিকে মদদ দেবে, চাঙা করবে, এমন পরিস্থিতি নেই। যারা দাপট দেখাবে, তাদের ক্ষমতা মধ্যপ্রাচ্যেই সংকুচিত হয়ে আছে।’</p>', '/Images/news-img/1715612787.jpg', 'ডোনাল্ড', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'প্রতিনিধি', '1', 1, NULL, NULL, NULL, 3, NULL, 1, 1, NULL, 1, 1, NULL, '2024-05-13 10:06:28', '2024-05-13 10:06:28'),
(6, 'বিদেশি কেউ বিএনপিকে মদদ দেবে, এমন পরিস্থিতি নেই: ওবায়দুল কাদের', 'bidesi-keu-bienpike-mdd-debe-emn-pristhiti-nei-oobaydul-kader', 'ওবায়দুল কাদের', 'রাজধানীর ধানমন্ডিতে আওয়ামী লীগ সভাপতির কার্যালয়ে আজ সোমবার দুপুরে এক সংবাদ সম্মেলনে বক্তব্য দেন দলের সাধারণ সম্পাদক ওবায়দুল কাদের।', '<p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">বাইরে থেকে এসে কেউ বিএনপিকে মদদ দেবে, চাঙা করবে, এমন পরিস্থিতি নেই, এই মন্তব্য করেছেন আওয়ামী লীগের সাধারণ সম্পাদক এবং সড়ক পরিবহন ও সেতুমন্ত্রী ওবায়দুল কাদের। তিনি বলেছেন, &nbsp;‘যারা দাপট দেখাবে, তাদের ক্ষমতা মধ্যপ্রাচ্যেই সংকুচিত হয়ে আছে। এখানে সম্প্রসারিত করবে, এমনটা মনে করার কোনো কারণ নেই।’</p><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">আজ সোমবার দুপুরে রাজধানীর ধানমন্ডিতে আওয়ামী লীগ সভাপতির কার্যালয়ে এক সংবাদ সম্মেলনে বক্তব্য দেন ওবায়দুল কাদের। তিনি বলেন, ‘মার্কিন সহকারী পররাষ্ট্রমন্ত্রী ডোনাল্ড লু বাংলাদেশে আসছেন দুই দেশের সম্পর্ককে আরও এগিয়ে নিতে। প্রধানমন্ত্রী শেখ হাসিনাকে পাঠানো চিঠিতে মার্কিন প্রেসিডেন্ট জো বাইডেন যা বলছেন, তার বাস্তবায়নটা আমরা দেখব।’</p><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">সেতুমন্ত্রী বলেন, ‘এখানে কে আসছে, তা নিয়ে ভাবছি না। যাদের প্রেসিডেন্টের কথা ইসরায়েলই শোনে না। আমরা যারা জনগণের ভোটে নির্বাচিত সরকার, আমরা কাকে ভয় পাব?’বাইরে থেকে এসে কেউ বিএনপিকে মদদ দেবে, চাঙা করবে, এমন পরিস্থিতি নেই, এই মন্তব্য করেছেন আওয়ামী লীগের সাধারণ সম্পাদক এবং সড়ক পরিবহন ও সেতুমন্ত্রী ওবায়দুল কাদের। তিনি বলেছেন, &nbsp;‘যারা দাপট দেখাবে, তাদের ক্ষমতা মধ্যপ্রাচ্যেই সংকুচিত হয়ে আছে। এখানে সম্প্রসারিত করবে, এমনটা মনে করার কোনো কারণ নেই।’</p><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">আজ সোমবার দুপুরে রাজধানীর ধানমন্ডিতে আওয়ামী লীগ সভাপতির কার্যালয়ে এক সংবাদ সম্মেলনে বক্তব্য দেন ওবায়দুল কাদের। তিনি বলেন, ‘মার্কিন সহকারী পররাষ্ট্রমন্ত্রী ডোনাল্ড লু বাংলাদেশে আসছেন দুই দেশের সম্পর্ককে আরও এগিয়ে নিতে। প্রধানমন্ত্রী শেখ হাসিনাকে পাঠানো চিঠিতে মার্কিন প্রেসিডেন্ট জো বাইডেন যা বলছেন, তার বাস্তবায়নটা আমরা দেখব।’</p><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">সেতুমন্ত্রী বলেন, ‘এখানে কে আসছে, তা নিয়ে ভাবছি না। যাদের প্রেসিডেন্টের কথা ইসরায়েলই শোনে না। আমরা যারা জনগণের ভোটে নির্বাচিত সরকার, আমরা কাকে ভয় পাব?’</p>', '/Images/news-img/1715613050.jpg', 'বাস্তবায়নটা', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'বাস্তবায়নটা', '1', 1, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, 1, 1, NULL, '2024-05-13 10:10:51', '2024-05-13 10:10:51'),
(7, 'বিভাজন ছেড়ে গণতন্ত্র প্রতিষ্ঠার কাজ করা উচিত: ফখরুল', 'bivajn-chere-gntntr-prtishthar-kaj-kra-ucit-fkhrul', NULL, 'কেন্দ্রীয় শহীদ মিনারে বাংলাদেশ কমিউনিস্ট পার্টিতে -সংগৃহীত ছবি', '<p style=\"text-align: justify; margin-bottom: 0px; line-height: 1.5;\">দুর্ভাগ্যজনকভাবে বাংলাদেশে বিভাজন সৃষ্টি হয়েছে মন্তব্য করে বিএনপি মহাসচিব ফখরুল ইসলাম আলমগীর বলেছেন, সেই বিভাজন থেকে সবাইকে বের হয়ে আসা উচিত। বাংলাদেশের মানুষের জন্য ও গণতন্ত্র প্রতিষ্ঠার জন্য কাজ করা উচিত।</p><p style=\"text-align: justify; margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"text-align: justify; margin-bottom: 0px; line-height: 1.5;\">সোমবার (১৩ মে) কেন্দ্রীয় শহীদ মিনারে বাংলাদেশ কমিউনিস্ট পার্টির উপদেষ্টা হায়দার আকবর খান রনোর কফিনে বিএনপির পক্ষ থেকে শ্রদ্ধা নিবেদন শেষে সাংবাদিকদের প্রশ্নের জবাবে তিনি একথা বলেন।</p><div class=\"google-auto-placed ap_container\" style=\"width: 755.859px; height: auto; clear: both;\"><div id=\"aswift_1_host\" style=\"display: inline-block; margin: 0px; height: 0px; border: none; width: 756px; padding: 0px; position: relative; visibility: visible; overflow: hidden; opacity: 0;\"><iframe id=\"aswift_1\" name=\"aswift_1\" browsingtopics=\"true\" sandbox=\"allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation\" width=\"756\" height=\"0\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" vspace=\"0\" hspace=\"0\" allowtransparency=\"true\" scrolling=\"no\" allow=\"attribution-reporting; run-ad-auction\" src=\"https://googleads.g.doubleclick.net/pagead/ads?gdpr=0&amp;client=ca-pub-8218161053775536&amp;output=html&amp;h=280&amp;adk=159221134&amp;adf=1697139896&amp;pi=t.aa~a.3208726436~i.10~rp.4&amp;w=756&amp;abgtt=6&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1715654403&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=7549195306&amp;ad_type=text_image&amp;format=756x280&amp;url=https%3A%2F%2Fwww.sunamganjerkhobor.com%2Fdetails%2F11362&amp;fwr=0&amp;pra=3&amp;rh=189&amp;rw=755&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTI0LjAuNjM2Ny4yMDEiLG51bGwsMCxudWxsLCI2NCIsW1siQ2hyb21pdW0iLCIxMjQuMC42MzY3LjIwMSJdLFsiR29vZ2xlIENocm9tZSIsIjEyNC4wLjYzNjcuMjAxIl0sWyJOb3QtQS5CcmFuZCIsIjk5LjAuMC4wIl1dLDBd&amp;dt=1715654333570&amp;bpp=6&amp;bdt=2749&amp;idt=6&amp;shv=r20240509&amp;mjsv=m202405080101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3Dcb9eaba49148f185%3AT%3D1715654335%3ART%3D1715654335%3AS%3DALNI_MZJE4qRXwvQsNwkF5PtQ61fE9-m_Q&amp;gpic=UID%3D00000e1bbb51b917%3AT%3D1715654335%3ART%3D1715654335%3AS%3DALNI_MYRMAF2x-5kvXh1czrnl1EjwoVQug&amp;eo_id_str=ID%3D3e63acb4c038d281%3AT%3D1715654335%3ART%3D1715654335%3AS%3DAA-AfjZDOyjnoK7j3epDizec9Iwb&amp;prev_fmts=0x0%2C383x280&amp;nras=2&amp;correlator=5742967073429&amp;frm=20&amp;pv=1&amp;ga_vid=2118376343.1715654332&amp;ga_sid=1715654333&amp;ga_hid=554698877&amp;ga_fc=1&amp;u_tz=-420&amp;u_his=2&amp;u_h=768&amp;u_w=1366&amp;u_ah=687&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=86&amp;ady=1437&amp;biw=1349&amp;bih=600&amp;scr_x=0&amp;scr_y=0&amp;eid=44759875%2C44759926%2C44759837%2C31083636%2C95329723%2C95331974%2C95331982%2C95330887%2C95331711%2C95332403%2C95332416%2C31078663%2C31078665%2C31078668%2C31078670&amp;oid=2&amp;pvsid=39641876950786&amp;tmod=72301595&amp;uas=0&amp;nvt=1&amp;fc=1408&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C687%2C1366%2C600&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=128&amp;bc=31&amp;bz=1&amp;td=1&amp;psd=W251bGwsbnVsbCxudWxsLDNd&amp;nt=1&amp;ifi=2&amp;uci=a!2&amp;btvi=1&amp;fsb=1&amp;dtd=69513\" data-google-container-id=\"a!2\" tabindex=\"0\" title=\"Advertisement\" aria-label=\"Advertisement\" data-google-query-id=\"CMSRutqOjIYDFXIIewcdtrkJZQ\" data-load-complete=\"true\" style=\"text-align: justify; left: 0px; position: absolute; top: 0px; border-width: 0px; border-style: initial; width: 756px; height: 0px;\"></iframe><span style=\"text-align: left;\"><div style=\"text-align: justify;\"><div id=\"aswift_1_host\" style=\"font-size: 1rem; display: inline-block; margin: 0px; height: 0px; border: none; width: 756px; padding: 0px; position: relative; visibility: visible; overflow: hidden; opacity: 0;\">ফখরুল বলেন, হায়দার আকবর খান রনো সারা জীবন দেশের জন্য, সমাজ পরিবর্তনের জন্য, মানুষের মুক্তির জন্য, কৃষক ও শ্রমজীবী মানুষের জন্য কাজ করেছেন। তার চলে যাওয়া নিঃসন্দেহে শূন্যতা সৃষ্টি করেছে। একজন মুক্তিযোদ্ধা, আন্দোলন-সংগঠক হিসেবে বাংলাদেশকে যা দেখতে চেয়েছিলেন, দুর্ভাগ্যজনকভাবে সেই বাংলাদেশ তিনি দেখতে পাননি। আমরা তার আত্মার মাগফেরাত কামনা করছি</div><span style=\"font-size: 1rem;\">বিএনপি চেয়ারপারসন খালেদা জিয়া ও ভারপ্রাপ্ত চেয়ারম্যান তারেক রহমানের পক্ষ থেকে গভীর শ্রদ্ধা নিবেদন ও পরিবারের প্রতি সমবেদনা জানান মির্জা ফখরুল।</span></div></span></div></div><p style=\"text-align: justify; margin-bottom: 0px; line-height: 1.5;\">সাংবাদিকের প্রশ্নের জবাবে ফখরুল বলেন, দুর্ভাগ্যজনকভাবে দেশে বিভাজন সৃষ্টি হয়েছে। সেই বিভাজন থেকে সবাইকে বেরিয়ে আসা উচিত। বাংলাদেশের মানুষের জন্য ও গণতন্ত্র প্রতিষ্ঠার জন্য কাজ করা উচিত।</p><p style=\"text-align: justify; margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"text-align: justify; margin-bottom: 0px; line-height: 1.5;\">এ সময় উপস্থিত ছিলেন, বিএনপি চেয়ারপারসনের উপদেষ্টা মনিরুল হক চৌধুরী, আব্দুস সালাম, ভাইস চেয়ারম্যান বরকত উল্লাহ বুলু, চেয়াপারসনের বিশেষ সহকারী অ্যাডভোকেট শামসুর রহমান শিমুল বিশ্বাস, জলবায়ু বিষয়ক সহ-সম্পাদক মোস্তাফিজুর রহমান বাবুল, মিডিয়া সেলের আহ্বায়ক জহির উদ্দিন স্বপন প্রমুখ।</p>', '/Images/news-img/1715654621.jpg', 'কমিউনিস্ট পার্টিতে', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'সু.খবর ডেস্ক', NULL, 1, NULL, NULL, NULL, 3, NULL, NULL, 1, NULL, 1, 1, NULL, '2024-05-14 09:43:41', '2024-05-15 16:37:59'),
(8, 'মধ্যনগরে নির্বাচনী কার্যালয় উদ্বোধন', 'mdhzngre-nirwacnee-karzaly-udwodhn', NULL, 'মধ্যনগরে আসন্ন উপজেলা পরিষদ নির্বাচনকে সামনে রেখে চেয়ারম্যান পদপ্রার্থী আব্দুর রাজ্জাক ভূঁইয়ার', '<p style=\"margin-bottom: 0px; line-height: 1.5;\">মধ্যনগরে আসন্ন উপজেলা পরিষদ নির্বাচনকে সামনে রেখে চেয়ারম্যান পদপ্রার্থী আব্দুর রাজ্জাক ভূঁইয়ার নির্বাচনী কার্যালয়ের উদ্বোধন করা হয়েছে। সোমবার বিকাল সাড়ে ৩টার দিকে উপজেলার মধ্যনগর বাজারস্থ চাল মহালে নির্বাচনী কার্যালয়ের উদ্বোধন করা হয়।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">এসময় উপস্থিত ছিলেন মোবারক হোসেন তালুকদার, উপজেলা যুবলীগের সভাপতি মোস্তাক আহমেদ, সাংগঠনিক সম্পাদক মো. কামাল হোসেনসহ কর্মী সমর্থকবৃন্দ।</p>', '/Images/news-img/1715655878.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, NULL, '2024-05-14 10:04:39', '2024-05-14 10:04:39'),
(9, 'হজযাত্রীদের ভিসা অনুমোদনের সময় বাড়ানোর আহ্বান প্রধানমন্ত্রীর', 'hjzatreeder-visa-onumodner-smy-baranor-ahwan-prdhanmntreer', NULL, 'সৌদি রাষ্ট্রদূত বাংলাদেশে কিছু প্রকল্প বাস্তবায়নে তার দেশের বিনিয়োগকারী ও কোম্পানির আগ্রহ প্রকাশ করেন এবং সেসব প্রকল্পের একটি তালিকা প্রধানমন্ত্রীর কাছে হস্তান্তর করেন।', '<p style=\"margin-bottom: 0px; line-height: 1.5;\">প্রধানমন্ত্রী শেখ হাসিনা হজযাত্রীদের সবাই যাতে পবিত্র হজ পালন করতে পারেন সেজন্য ভিসা অনুমোদনের সময় বাড়াতে সৌদি আরবের প্রতি আহ্বান জানিয়েছেন।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">সোমবার (১৩ মে) সকালে বাংলাদেশে সৌদি আরবের রাষ্ট্রদূত ঈসা ইউসুফ ঈসা আল দুহাইলান প্রধানমন্ত্রী শেখ হাসিনার সঙ্গে তার সরকারি বাসভবন গণভবনে সৌজন্য সাক্ষাৎ করতে এলে তিনি এ আহ্বান জানান।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"margin-bottom: 0px; line-height: 1.5;\"><br>বৈঠক শেষে সাংবাদিকদের ব্রিফিংয়ে প্রধানমন্ত্রীর স্পিচ রাইটার মো. নজরুল ইসলাম তাকে (প্রধানমন্ত্রী) উদ্ধৃত করে বলেন, ‘সৌদি আরবের উচিত হজযাত্রীদের জন্য ভিসা অনুমোদনের সময় বাড়ানো যাতে, তারা পবিত্র হজ পালন করতে পারেন।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">নজরুল ইসলাম বলেন, প্রধানমন্ত্রী শেখ হাসিনা হজ যাত্রীদের ভিসা অনুমোদনের সময় বাড়ানোর বিষয়টি উত্থাপন করেছেন।</p><div class=\"google-auto-placed ap_container\" style=\"width: 755.859px; height: auto; clear: both; text-align: center;\"><div id=\"aswift_2_host\" style=\"display: inline-block; margin: 0px; height: 0px; border: none; width: 756px; padding: 0px; position: relative; visibility: visible; overflow: hidden; opacity: 0;\"><iframe id=\"aswift_2\" name=\"aswift_2\" browsingtopics=\"true\" sandbox=\"allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation\" width=\"756\" height=\"0\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" vspace=\"0\" hspace=\"0\" allowtransparency=\"true\" scrolling=\"no\" allow=\"attribution-reporting; run-ad-auction\" src=\"https://googleads.g.doubleclick.net/pagead/ads?gdpr=0&amp;client=ca-pub-8218161053775536&amp;output=html&amp;h=280&amp;adk=159221134&amp;adf=1697139896&amp;pi=t.aa~a.3208726436~i.18~rp.4&amp;w=756&amp;abgtt=6&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1715655919&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=7549195306&amp;ad_type=text_image&amp;format=756x280&amp;url=https%3A%2F%2Fwww.sunamganjerkhobor.com%2Fdetails%2F11354&amp;fwr=0&amp;pra=3&amp;rh=189&amp;rw=755&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTI0LjAuNjM2Ny4yMDEiLG51bGwsMCxudWxsLCI2NCIsW1siQ2hyb21pdW0iLCIxMjQuMC42MzY3LjIwMSJdLFsiR29vZ2xlIENocm9tZSIsIjEyNC4wLjYzNjcuMjAxIl0sWyJOb3QtQS5CcmFuZCIsIjk5LjAuMC4wIl1dLDBd&amp;dt=1715655919729&amp;bpp=1&amp;bdt=566&amp;idt=-M&amp;shv=r20240509&amp;mjsv=m202405080101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3Dcb9eaba49148f185%3AT%3D1715654335%3ART%3D1715655911%3AS%3DALNI_MZJE4qRXwvQsNwkF5PtQ61fE9-m_Q&amp;gpic=UID%3D00000e1bbb51b917%3AT%3D1715654335%3ART%3D1715655911%3AS%3DALNI_MYRMAF2x-5kvXh1czrnl1EjwoVQug&amp;eo_id_str=ID%3D3e63acb4c038d281%3AT%3D1715654335%3ART%3D1715655911%3AS%3DAA-AfjZDOyjnoK7j3epDizec9Iwb&amp;prev_fmts=0x0%2C1200x280&amp;nras=3&amp;correlator=506631982422&amp;frm=20&amp;pv=1&amp;ga_vid=2118376343.1715654332&amp;ga_sid=1715655919&amp;ga_hid=194509200&amp;ga_fc=1&amp;u_tz=-420&amp;u_his=7&amp;u_h=768&amp;u_w=1366&amp;u_ah=687&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=86&amp;ady=1246&amp;biw=1349&amp;bih=600&amp;scr_x=0&amp;scr_y=0&amp;eid=44759875%2C44759926%2C44759837%2C31083437%2C31083637%2C95331983%2C95331036%2C95331712%2C95332402%2C95332416%2C21065725%2C31078663%2C31078665%2C31078668%2C31078670&amp;oid=2&amp;pvsid=4412067134351394&amp;tmod=72301595&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.sunamganjerkhobor.com%2Fnational&amp;fc=1408&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C687%2C1366%2C600&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=128&amp;bc=31&amp;bz=1&amp;td=1&amp;psd=W251bGwsbnVsbCxudWxsLDNd&amp;nt=1&amp;ifi=3&amp;uci=a!3&amp;btvi=1&amp;fsb=1&amp;dtd=215\" data-google-container-id=\"a!3\" tabindex=\"0\" title=\"Advertisement\" aria-label=\"Advertisement\" data-google-query-id=\"CPfI3a2UjIYDFZWKuQUdvNgDqg\" data-load-complete=\"true\" style=\"left: 0px; position: absolute; top: 0px; border-width: 0px; border-style: initial; width: 756px; height: 0px;\"></iframe></div></div><p style=\"margin-bottom: 0px; line-height: 1.5;\">রাষ্ট্রদূত বলেন, যেসব হজযাত্রী এখনো হজ পালনের জন্য ভিসা পাননি তাদের ভিসা দেওয়ার উদ্যোগ নিচ্ছেন তিনি।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">বিভিন্ন জটিলতায় সৌদি আরব থেকে এখনও ভিসা পাননি ১০ হাজারের বেশি হজযাত্রী।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">সৌদি রাষ্ট্রদূত বাংলাদেশে কিছু প্রকল্প বাস্তবায়নে তার দেশের বিনিয়োগকারী ও কোম্পানির আগ্রহ প্রকাশ করেন এবং সেসব প্রকল্পের একটি তালিকা প্রধানমন্ত্রীর কাছে হস্তান্তর করেন।</p>', '/Images/news-img/1716182795.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, NULL, '2024-05-14 10:06:12', '2024-06-03 15:05:04'),
(10, 'অঝোরে কাঁদলেন অভিনেত্রী মেহজাবীন, কেন?', 'ojhore-kanndlen-ovinetree-mehjabeen-ken', NULL, NULL, '<p><span style=\"font-size: 1rem;\">এদন অভিনেত্রী মেহজাবীন চৌধুরীর মা গাজালা চৌধুরীকেও পুরস্কৃত করা হয়। এসময় নিজের মাকে সম্মানিত হতে দেখে অঝোরে কাঁদতে থাকেন মেহজাবীন। এরপর মাকে নিয়ে স্মৃতিচারণ করেন তিনি।</span><br></p><p style=\"margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">অভিনেত্রী বলেন, ‘নিজের কাজের জন্য মাকে সম্মানিত হতে দেখার আনন্দটা ভাষায় প্রকাশ করার মতো না। আমার মনে হয়, প্রত্যেকটা সন্তানই যখন তার মা সম্পর্কে কথা বলতে যায় তখন সবার চোখেই পানি চলে আসে।&nbsp; আজকে আমার যে অবস্থান তার পেছনে আমার মায়ের অবদান অনেক। আমাকে এখানে আসতে সহযোগিতা করতে গিয়ে মা যে কতটা ত্যাগ করেছেন সেটা হয়ত আমি এখানে বলতে পারব না! সেই ত্যাগের কথা বলে তাকে ছোট করতে চাই না এই মঞ্চে। ’</p><div class=\"google-auto-placed ap_container\" style=\"width: 755.859px; height: auto; clear: both; text-align: center;\"><div id=\"aswift_2_host\" style=\"display: inline-block; margin: 0px; height: 0px; border: none; width: 756px; padding: 0px; position: relative; visibility: visible; overflow: hidden; opacity: 0;\"><br></div></div><p style=\"margin-bottom: 0px; line-height: 1.5;\">ক্যারিয়ারের শুরুর দিকের সময়ের কথা স্মরণ করে মেহজাবীন বলেন, ‘২০০৯ সালের দিকে লাক্স চ্যানেল আই সুপারস্টার প্রতিযোগিতা দেখে এতে অংশগ্রহণ করার ইচ্ছে জাগে আমার। এরপর আমি লুকিয়ে সেখানে অংশগ্রহণ করি এবং মাকে জানাই, আমি এখানে সুযোগ পেয়েছি। এরপর মায়ের কাছে সামনে এগিয়ে যাওয়ার সুযোগ চাই। তিনি সম্মতি দেন। ট্রেনিংয়ের জন্য চট্টগ্রাম থেকে মা এবং আমার সাড়ে তিন বছরের ছোট ভাইকে নিয়ে ঢাকায় আসি। তখন ঢাকায় সেভাবে থাকার জায়গা ছিল না, আত্মীয় থাকলেও তাদেরকে জানাতে মাকে নিষেধ করি। কারণ যদি প্রতিযোগিতায় যদি হেরে যাই তাহলে সেটা খুবই লজ্জাজনক হবে। এরপর মা আর ছোট ভাইকে নিয়ে হোটেলে উঠি। সেখান থেকে ক্যাম্পিং করতাম আর প্রতিদিন মায়ের বিষণ্ন মুখটা দেখতাম, আমার জন্য মা কতটা কষ্ট করেছেন। ’</p>', '/Images/news-img/1716182893.webp', 'অভিনেত্রী মেহজাবীন চৌধুরী সংগৃহীত ছবি', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, 3, NULL, NULL, 1, NULL, 1, 1, NULL, '2024-05-14 10:08:30', '2024-06-03 15:04:49'),
(11, 'তারকাদের সঙ্গে ছবি তুলেই ওরির দিনে আয় ৫০ লাখ রুপি!', 'tarkader-sngoe-chbi-tulei-oorir-dine-ay-50-lakh-rupi', NULL, NULL, '<p style=\"text-align: justify; margin-bottom: 0px; line-height: 1.5;\">মাত্র দুই বছরের মধ্যে বলিপাড়ার তারকাদের ‘নয়নের মণি’ হয়ে উঠেছেন ওরহান অবত্রমানি ওরফে ওরি। জাহ্নবী কাপুর, সুহানা খান থেকে সারা আলি খান, অনন্যা পাণ্ডে, এমনকি দীপিকা পাড়ুকোন, ক্যাটরিনা কাইফের মতো তারকাদের পাশেও দেখা গেছে ওরিকে।</p><p style=\"text-align: justify; margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"text-align: justify; margin-bottom: 0px; line-height: 1.5;\">যদিও ওরি ছবিতে অভিনয় করেন না। শুধুই ছবি তোলেন। তার সঙ্গে ছবি নেই, ভারতে এমন তারকা খুঁজে পাওয়াই দুষ্কর! তারকাদের সঙ্গে ছবি তুলেই নাকি লক্ষ লক্ষ রুপি উপার্জন করেন তিনি! সেই অর্থের অঙ্কটা নাকি দৈনিক ২০-৩০ লাখ আবার কখনও কখনও ৫০ লাখ ছোঁয়।</p><div class=\"google-auto-placed ap_container\" style=\"width: 755.859px; height: auto; clear: both;\"><div id=\"aswift_1_host\" style=\"display: inline-block; margin: 0px; height: 0px; border: none; width: 756px; padding: 0px; position: relative; visibility: visible; overflow: hidden; opacity: 0;\"><iframe id=\"aswift_1\" name=\"aswift_1\" browsingtopics=\"true\" sandbox=\"allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation\" width=\"756\" height=\"0\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" vspace=\"0\" hspace=\"0\" allowtransparency=\"true\" scrolling=\"no\" allow=\"attribution-reporting; run-ad-auction\" src=\"https://googleads.g.doubleclick.net/pagead/ads?gdpr=0&amp;client=ca-pub-8218161053775536&amp;output=html&amp;h=280&amp;adk=159221134&amp;adf=1697139896&amp;pi=t.aa~a.3208726436~i.10~rp.4&amp;w=756&amp;abgtt=6&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1715656218&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=7549195306&amp;ad_type=text_image&amp;format=756x280&amp;url=https%3A%2F%2Fwww.sunamganjerkhobor.com%2Fdetails%2F11346&amp;fwr=0&amp;pra=3&amp;rh=189&amp;rw=755&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTI0LjAuNjM2Ny4yMDEiLG51bGwsMCxudWxsLCI2NCIsW1siQ2hyb21pdW0iLCIxMjQuMC42MzY3LjIwMSJdLFsiR29vZ2xlIENocm9tZSIsIjEyNC4wLjYzNjcuMjAxIl0sWyJOb3QtQS5CcmFuZCIsIjk5LjAuMC4wIl1dLDBd&amp;dt=1715656218261&amp;bpp=1&amp;bdt=839&amp;idt=-M&amp;shv=r20240509&amp;mjsv=m202405080101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3Dcb9eaba49148f185%3AT%3D1715654335%3ART%3D1715655911%3AS%3DALNI_MZJE4qRXwvQsNwkF5PtQ61fE9-m_Q&amp;gpic=UID%3D00000e1bbb51b917%3AT%3D1715654335%3ART%3D1715655911%3AS%3DALNI_MYRMAF2x-5kvXh1czrnl1EjwoVQug&amp;eo_id_str=ID%3D3e63acb4c038d281%3AT%3D1715654335%3ART%3D1715655911%3AS%3DAA-AfjZDOyjnoK7j3epDizec9Iwb&amp;prev_fmts=0x0&amp;nras=2&amp;correlator=5536387578015&amp;frm=20&amp;pv=1&amp;ga_vid=2118376343.1715654332&amp;ga_sid=1715656218&amp;ga_hid=632648278&amp;ga_fc=1&amp;u_tz=-420&amp;u_his=10&amp;u_h=768&amp;u_w=1366&amp;u_ah=687&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=86&amp;ady=1232&amp;biw=1349&amp;bih=600&amp;scr_x=0&amp;scr_y=200&amp;eid=44759875%2C44759926%2C44759837%2C95331688%2C95331983%2C95330889%2C95331712%2C95332402%2C95332416%2C31078663%2C31078665%2C31078668%2C31078670&amp;oid=2&amp;pvsid=4422842781839886&amp;tmod=72301595&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.sunamganjerkhobor.com%2Fdetails%2F11363&amp;fc=1408&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C687%2C1366%2C600&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=128&amp;bc=31&amp;bz=1&amp;td=1&amp;psd=W251bGwsbnVsbCxudWxsLDNd&amp;nt=1&amp;ifi=2&amp;uci=a!2&amp;btvi=1&amp;fsb=1&amp;dtd=296\" data-google-container-id=\"a!2\" tabindex=\"0\" title=\"Advertisement\" aria-label=\"Advertisement\" data-google-query-id=\"CIrAjryVjIYDFWQmewcdfuEAPw\" data-load-complete=\"true\" style=\"text-align: justify; left: 0px; position: absolute; top: 0px; border-width: 0px; border-style: initial; width: 756px; height: 0px;\"></iframe></div><span style=\"text-align: left;\"><div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\">বলিপাড়ার যেকোনও পার্টি হোক, কিংবা বিয়েবাড়ি অথবা জন্মদিন, ওরি ছাড়া যেন অনুষ্ঠান অসম্পূর্ণ। নেটপাড়ায় তিনি পরিচত মুখ। তার নিত্যনতুন দামি পোশাক কিংবা ফোনের কভার অথবাো চুলের ছাঁট নিয়ে নেটিজেনদের উৎসাহ রয়েছে। পাশপাশি, অনেকেরই কৌতহূল রয়েছে তার আয়ের উৎস নিয়ে।&nbsp;&nbsp;</span></div></span></div><p style=\"text-align: justify; margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"text-align: justify; margin-bottom: 0px; line-height: 1.5;\">কীভাবে রোজগার করেন যে, এমন বিলাসবহুল জীবন যাপন করতে পারেন তিনি? এ বার নিজের ঢাক যেন নিজেই পেটালেন ওরি। সম্প্রতি একটি পডকাস্ট শোয়ে এসে তিনি জানান, ছবি তুলেই নাকি লক্ষ লক্ষ টাকা আয় করেন তিনি। করণ জোহরের এজেন্সি তার কাজ দেখাশোনা করে। তবে সিনেমা করতে রাজি নন তিনি। অতো খাটাখাটনি করতে পারবেন না, সাফ কথা এই তারকার।</p><p style=\"text-align: justify; margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"text-align: justify; margin-bottom: 0px; line-height: 1.5;\">স্রেফ তারকাদের সঙ্গে সেলফি তুলে সামাজিক যোগাযোগমাধ্যমের পাতায় পোস্ট করেই নাকি লক্ষ লক্ষ টাকা উপার্জন করেন তিনি। ওরির কথায়, ‘বিভিন্ন অনুষ্ঠানে গিয়ে আমি ছবি তুলি, আর সেই ছবি পোস্ট করার জন্য আমি টাকা পাই। এক রাতেই ওই সব ছবি পোস্ট করে আমি ২০-৩০ লক্ষ টাকা রোজগার করি। তা ছাড়া আমাকে বিয়েতে লোকে ডাকেন। তাদের বিয়েতে ছবি তোলার জন্য ১৫-২০ লক্ষ টাকা দেন। ’ সেই ছবি নিজের সামাজিক যোগাযোগমাধ্যমে পোস্ট করলে নাকি বাড়ে টাকার অঙ্ক! পাশপাশি, ওরি এ-ও জানান শুধুই কাজ নয়, মানুষকে আনন্দ দিতেও চান তিনি।</p>', '/Images/news-img/1715656306.jpg', 'ওরহান অবত্রমানি -সংগৃহীত ছবি', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, NULL, '2024-05-14 10:11:46', '2024-05-14 10:11:46'),
(12, 'মা হচ্ছেন ফারিয়া শাহরিন, মা দিবসেই দিলেন সুখবর', 'ma-hcchen-fariza-sahrin-ma-dibsei-dilen-sukhbr', NULL, NULL, '<p style=\"margin-bottom: 0px; line-height: 1.5;\">ছোট পর্দার জনপ্রিয় অভিনেত্রী ও মডেল ফারিয়া শাহরিন। দীর্ঘদিনের প্রেমিক মুনিম মাহফুজ রিয়ানের সঙ্গে ২০২১ সালে বাগদান সেরেছিলেন ‘ব্যাচেলর পয়েন্ট’খ্যাত এই অভিনেত্রী।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">এরপর গেল বছর পারিবারিকভাবে তাদের বিয়ের আনুষ্ঠানিকতা সম্পন্ন হয়। আর রোববার (১২ মে) মা দিবসে এই অভিনেত্রী দিলেন সুখবর। জানালেন, মা হচ্ছেন তিনি।</p><div class=\"google-auto-placed ap_container\" style=\"width: 755.859px; height: auto; clear: both; text-align: center;\"><div id=\"aswift_1_host\" style=\"display: inline-block; margin: 0px; height: 0px; border: none; width: 756px; padding: 0px; position: relative; visibility: visible; overflow: hidden; opacity: 0;\"><iframe id=\"aswift_1\" name=\"aswift_1\" browsingtopics=\"true\" sandbox=\"allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation\" width=\"756\" height=\"0\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" vspace=\"0\" hspace=\"0\" allowtransparency=\"true\" scrolling=\"no\" allow=\"attribution-reporting; run-ad-auction\" src=\"https://googleads.g.doubleclick.net/pagead/ads?gdpr=0&amp;client=ca-pub-8218161053775536&amp;output=html&amp;h=280&amp;adk=159221134&amp;adf=1697139896&amp;pi=t.aa~a.3208726436~i.10~rp.4&amp;w=756&amp;abgtt=6&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1715656318&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=7549195306&amp;ad_type=text_image&amp;format=756x280&amp;url=https%3A%2F%2Fwww.sunamganjerkhobor.com%2Fdetails%2F11308&amp;fwr=0&amp;pra=3&amp;rh=189&amp;rw=755&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTI0LjAuNjM2Ny4yMDEiLG51bGwsMCxudWxsLCI2NCIsW1siQ2hyb21pdW0iLCIxMjQuMC42MzY3LjIwMSJdLFsiR29vZ2xlIENocm9tZSIsIjEyNC4wLjYzNjcuMjAxIl0sWyJOb3QtQS5CcmFuZCIsIjk5LjAuMC4wIl1dLDBd&amp;dt=1715656317931&amp;bpp=1&amp;bdt=1177&amp;idt=-M&amp;shv=r20240509&amp;mjsv=m202405080101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3Dcb9eaba49148f185%3AT%3D1715654335%3ART%3D1715656218%3AS%3DALNI_MZJE4qRXwvQsNwkF5PtQ61fE9-m_Q&amp;gpic=UID%3D00000e1bbb51b917%3AT%3D1715654335%3ART%3D1715656218%3AS%3DALNI_MYRMAF2x-5kvXh1czrnl1EjwoVQug&amp;eo_id_str=ID%3D3e63acb4c038d281%3AT%3D1715654335%3ART%3D1715656218%3AS%3DAA-AfjZDOyjnoK7j3epDizec9Iwb&amp;prev_fmts=0x0&amp;nras=2&amp;correlator=3505641089464&amp;rume=1&amp;frm=20&amp;pv=1&amp;ga_vid=2118376343.1715654332&amp;ga_sid=1715656317&amp;ga_hid=315196659&amp;ga_fc=1&amp;u_tz=-420&amp;u_his=11&amp;u_h=768&amp;u_w=1366&amp;u_ah=687&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=86&amp;ady=1122&amp;biw=1349&amp;bih=600&amp;scr_x=0&amp;scr_y=200&amp;eid=44759875%2C44759926%2C44759837%2C44719339%2C95331982%2C95331712%2C95332402%2C95332416%2C31061691%2C31061692%2C31078663%2C31078665%2C31078668%2C31078670&amp;oid=2&amp;pvsid=2511738406362677&amp;tmod=72301595&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.sunamganjerkhobor.com%2Fdetails%2F11346&amp;fc=1408&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C687%2C1366%2C600&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=128&amp;bc=31&amp;bz=1&amp;td=1&amp;psd=W251bGwsbnVsbCxudWxsLDNd&amp;nt=1&amp;ifi=2&amp;uci=a!2&amp;btvi=1&amp;fsb=1&amp;dtd=278\" data-google-container-id=\"a!2\" tabindex=\"0\" title=\"Advertisement\" aria-label=\"Advertisement\" data-google-query-id=\"CLyr0uuVjIYDFcwTewcd5f4NDA\" data-load-complete=\"true\" style=\"left: 0px; position: absolute; top: 0px; border-width: 0px; border-style: initial; width: 756px; height: 0px;\"></iframe></div></div><p style=\"margin-bottom: 0px; line-height: 1.5;\"><br></p><p style=\"margin-bottom: 0px; line-height: 1.5;\">ফারিয়া শাহরিন বলেন, মা হওয়ার অনুভূতি মুখে প্রকাশ করে বোঝানো যাবে না। স্বপ্ন সত্যি হলো। আল্লাহর উপহার, তিনি নিজ হাতে এটি পাঠাচ্ছেন। সবাই আমাদের জন্য দোয়া করবেন।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">তিনি জানান, প্রথমে মা হওয়ার খবরটি নিজেদের মধ্যে রাখতে চেয়েছিলেন। তার মতে, অনেক কিছুতে বদ নজর লাগে তার। অসুস্থও হয়ে যান তিনি। আর সে কারণেই খুশির এই সংবাদটি পরিবারের মধ্যেই সীমাবদ্ধ রাখতে চেয়েছিলেন এই অভিনেত্রী।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\"><br></p><p style=\"margin-bottom: 0px; line-height: 1.5;\">ফারিয়া শাহরিনের কথায়, ক্যারিয়ারের সঙ্গে ব্যক্তিগত জীবনও এগিয়ে নিতে হবে। ক্যারিয়ারের জন্য সন্তান না নিয়ে, শুধু এর পেছনে ছুটলেই হবে না। শেষ বয়সে এসে হতাশাগ্রস্ত হয়ে যেতে হবে। আমি তেমন জীবন চাই না।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">অভিনেত্রীর কোলজুড়ে নতুন অতিথি আসার বিষয়টি জানার পর, আপাতত শুটিং থেকে দূরে থাকার সিদ্ধান্ত নিয়েছেন তিনি। আর মাতৃত্বকালীন পুরো সময়টা নিজের জন্যই রেখেছেন ফারিয়া শাহরিন।</p>', '/Images/news-img/1715656371.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, NULL, '2024-05-14 10:12:51', '2024-05-14 10:12:51'),
(13, 'তাসকিনের রিপোর্ট যুক্তরাষ্ট্রে, বিকল্প ভাবনায় হাসান মাহমুদ', 'taskiner-riport-zuktrashtre-biklp-vabnay-hasan-mahmud', NULL, 'মিরপুরে গণমাধ্যমকর্মীদের ভিড় সোমবার সকাল থেকে। দুপুরের দিক থেকে থেমে থেমে এসেছে বৃষ্টি।', '<p style=\"margin-bottom: 0px; line-height: 1.5;\">মিরপুরে গণমাধ্যমকর্মীদের ভিড় সোমবার সকাল থেকে। দুপুরের দিক থেকে থেমে থেমে এসেছে বৃষ্টি।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\"><br>এর মধ্যেই হঠাৎ বিসিবি একাডেমির পথ ধরলেন হেড কোচ চন্ডিকা হাথুরুসিংহে। পাশেই জিমে থাকা পেসার হাসান মাহমুদের সঙ্গে কথা বলেছেন তিনি। &nbsp;<br>জিম্বাবুয়ের বিপক্ষে পাঁচ ম্যাচ টি-টোয়েন্টি সিরিজের শেষটির আগে পেশিতে টান লাগে তাসকিন আহমেদের। তাকে নিয়ে দুশ্চিন্তায় আছে বিসিবিও। রোববারই তার এমআরআই করানো হয়।</p><div class=\"google-auto-placed ap_container\" style=\"width: 755.859px; height: auto; clear: both; text-align: center;\"><div id=\"aswift_2_host\" style=\"display: inline-block; margin: 0px; height: 0px; border: none; width: 756px; padding: 0px; position: relative; visibility: visible; overflow: hidden; opacity: 0;\"><iframe id=\"aswift_2\" name=\"aswift_2\" browsingtopics=\"true\" sandbox=\"allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation\" width=\"756\" height=\"0\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" vspace=\"0\" hspace=\"0\" allowtransparency=\"true\" scrolling=\"no\" allow=\"attribution-reporting; run-ad-auction\" src=\"https://googleads.g.doubleclick.net/pagead/ads?gdpr=0&amp;client=ca-pub-8218161053775536&amp;output=html&amp;h=280&amp;adk=159221134&amp;adf=1697139896&amp;pi=t.aa~a.3208726436~i.8~rp.4&amp;w=756&amp;abgtt=6&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1715656407&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=7549195306&amp;ad_type=text_image&amp;format=756x280&amp;url=https%3A%2F%2Fwww.sunamganjerkhobor.com%2Fdetails%2F11355&amp;fwr=0&amp;pra=3&amp;rh=189&amp;rw=755&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTI0LjAuNjM2Ny4yMDEiLG51bGwsMCxudWxsLCI2NCIsW1siQ2hyb21pdW0iLCIxMjQuMC42MzY3LjIwMSJdLFsiR29vZ2xlIENocm9tZSIsIjEyNC4wLjYzNjcuMjAxIl0sWyJOb3QtQS5CcmFuZCIsIjk5LjAuMC4wIl1dLDBd&amp;dt=1715656406993&amp;bpp=1&amp;bdt=689&amp;idt=-M&amp;shv=r20240509&amp;mjsv=m202405080101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3Dcb9eaba49148f185%3AT%3D1715654335%3ART%3D1715656218%3AS%3DALNI_MZJE4qRXwvQsNwkF5PtQ61fE9-m_Q&amp;gpic=UID%3D00000e1bbb51b917%3AT%3D1715654335%3ART%3D1715656218%3AS%3DALNI_MYRMAF2x-5kvXh1czrnl1EjwoVQug&amp;eo_id_str=ID%3D3e63acb4c038d281%3AT%3D1715654335%3ART%3D1715656218%3AS%3DAA-AfjZDOyjnoK7j3epDizec9Iwb&amp;prev_fmts=0x0%2C1200x280&amp;nras=3&amp;correlator=1815146449217&amp;frm=20&amp;pv=1&amp;ga_vid=2118376343.1715654332&amp;ga_sid=1715656407&amp;ga_hid=936769256&amp;ga_fc=1&amp;u_tz=-420&amp;u_his=13&amp;u_h=768&amp;u_w=1366&amp;u_ah=687&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=86&amp;ady=1474&amp;biw=1349&amp;bih=600&amp;scr_x=0&amp;scr_y=332&amp;eid=44759875%2C44759926%2C44759837%2C95331696%2C95331983%2C95331712%2C95332402%2C95332416%2C31078663%2C31078665%2C31078668%2C31078670&amp;oid=2&amp;pvsid=2759698152489252&amp;tmod=72301595&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.sunamganjerkhobor.com%2Fsport&amp;fc=1408&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C687%2C1366%2C600&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=128&amp;bc=31&amp;bz=1&amp;td=1&amp;psd=W251bGwsbnVsbCxudWxsLDNd&amp;nt=1&amp;ifi=3&amp;uci=a!3&amp;btvi=1&amp;fsb=1&amp;dtd=314\" data-google-container-id=\"a!3\" tabindex=\"0\" title=\"Advertisement\" aria-label=\"Advertisement\" data-google-query-id=\"CMy7j5aWjIYDFQEwewcdff4PPg\" data-load-complete=\"true\" style=\"left: 0px; position: absolute; top: 0px; border-width: 0px; border-style: initial; width: 756px; height: 0px;\"></iframe></div></div><p style=\"margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">সেই রিপোর্ট সোমবার পাঠানো হয়েছে যুক্তরাষ্ট্রের চিকিৎসকদের কাছে। তাদের কাছ থেকে সংকেত পাওয়ার পরই চূড়ান্ত সিদ্ধান্ত নেওয়া হবে। আপাতত তাসকিনের চোট সম্পর্কে যা জানা গেছে, দুই থেকে তিন সপ্তাহ অবধি তাকে মাঠের বাইরে থাকতে হবে।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">এমন হলে যুক্তরাষ্ট্রের বিপক্ষে তিন ম্যাচের টি-টোয়েন্টি সিরিজ তো বটেই, বিশ্বকাপও কিছুটা অনিশ্চিত তার। তবে তাসকিন বিশ্বকাপে নিতে চায় বিসিবি। সেক্ষেত্রে তাসকিনের জায়গায় যুক্তরাষ্ট্রের বিপক্ষে খেলতে পারেন হাসান মাহমুদ।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">বিশ্বকাপ দলের সবকিছু চূড়ান্ত হলেও শেষ মুহূর্তে তাসকিনের চোটে জটিলতা তৈরি হয়েছে। সোমবার বিকেলে বিসিবিতে বৈঠকে বসার কথা রয়েছে নির্বাচকদের। মঙ্গলবার দুপুর সাড়ে বারোটায় ঘোষণা হবে দল।</p>', '/Images/news-img/1716306504.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 7, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, NULL, '2024-05-14 10:14:30', '2024-05-21 10:48:24');
INSERT INTO `news` (`news_id`, `news_head_title`, `news_slug`, `news_head_caption_tag`, `news_details_brief`, `news_details`, `news_image`, `news_image_caption`, `news_vidos`, `news_vidos_caption`, `news_audio`, `news_audio_caption`, `news_source`, `news_source_link`, `news_zone`, `division_id`, `district_id`, `upazila_id`, `news_writer`, `news_reporter`, `cat_id`, `sub_cat_id`, `sub_sub_cat_id`, `news_page_id`, `news_type_id`, `news_series_id`, `news_status_id`, `status`, `approver`, `creator`, `modifier`, `publish_date`, `created_date`, `modified_date`) VALUES
(14, 'হার দিয়ে ঘরের মাঠকে বিদায় এমবাপ্পের', 'har-diye-ghrer-mathke-biday-embapper', NULL, NULL, '<p style=\"margin-bottom: 0px; line-height: 1.5;\">প্যারিসে কিলিয়ান এমবাপ্পের শেষ ম্যাচে। এ ম্যাচে পিএসজির মাঠে নিজের শেষ ম্যাচটা রাঙাতে মরিয়া ছিলেন ফরাসি তারকা। কিন্তু পারলেন না। এমবাপ্পে গোল পেলেও ঘরের মাঠে তুলুজের কাছে পিএসজি হেরেছে ৩-১ গোলে। এ ম্যাচ জিতে শিরোপা উৎসব করতে চেয়েছিল লুইস এনরিকের শিষ্যরা। চলতি মৌসুমে লিগে দ্বিতীয় হারে মাটি হয়ে যায় সেই উৎসব। তাই তো ম্যাচে শেষে পিএসজির ফরাসি তারকার উসমান দেম্বেলে বলেন, ‘ঘরের মাঠের এই হার, আমাদের পার্টি কিছুটা নষ্ট করে দিয়েছে। এমনিতে হার সব সময়ই হতাশার, চ্যাম্পিয়ন হওয়ার পরও। আর নিজেদের সমর্থকদের সামনে এভাবে হারাটা অনেক হতাশার।’</p><p style=\"margin-bottom: 0px; line-height: 1.5;\"><br>ফরাসি লিগে এখনো পিএসজির দুটি ম্যাচ বাকি। সঙ্গে বাকি রয়েছে ফ্রেঞ্চ কাপের ফাইনালও। তবে এর কোনোটিই পিএসজির মাঠ পার্ক দ্য প্রিন্সেসে নয়। ফলে পিএসজি ছাড়ার আনুষ্ঠানিক ঘোষনা দেওয়ার পর ঘরের মাঠে শেষ ম্যাচ খেলতে নামেন এমবাপ্পে। শুরুটাও করেন দুর্দান্ত। ম্যাচের ৮ মিনিটে ফরাসি তারকা পেয়ে যান গোলের দেখা। তখন ধারণা করা হচ্ছিল ঘরের মাঠে নিজের শেষ ম্যাচটা রাঙাতে সব কিছুই করবেন বিশ্বকাপজয়ী এই তারকা। তবে পাঁচ মিনিট পর বদলে যায় সেই চিত্র। তুলুজকে সমতায় ফেরান থিস ডালিঙ্গা।</p><div class=\"google-auto-placed ap_container\" style=\"width: 755.859px; height: auto; clear: both; text-align: center;\"><div id=\"aswift_1_host\" style=\"display: inline-block; margin: 0px; height: 0px; border: none; width: 756px; padding: 0px; position: relative; visibility: visible; overflow: hidden; opacity: 0;\"><iframe id=\"aswift_1\" name=\"aswift_1\" browsingtopics=\"true\" sandbox=\"allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation\" width=\"756\" height=\"0\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" vspace=\"0\" hspace=\"0\" allowtransparency=\"true\" scrolling=\"no\" allow=\"attribution-reporting; run-ad-auction\" src=\"https://googleads.g.doubleclick.net/pagead/ads?gdpr=0&amp;client=ca-pub-8218161053775536&amp;output=html&amp;h=280&amp;adk=159221134&amp;adf=1697139896&amp;pi=t.aa~a.3208726436~i.8~rp.4&amp;w=756&amp;abgtt=6&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1715656479&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=7549195306&amp;ad_type=text_image&amp;format=756x280&amp;url=https%3A%2F%2Fwww.sunamganjerkhobor.com%2Fdetails%2F11336&amp;fwr=0&amp;pra=3&amp;rh=189&amp;rw=755&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTI0LjAuNjM2Ny4yMDEiLG51bGwsMCxudWxsLCI2NCIsW1siQ2hyb21pdW0iLCIxMjQuMC42MzY3LjIwMSJdLFsiR29vZ2xlIENocm9tZSIsIjEyNC4wLjYzNjcuMjAxIl0sWyJOb3QtQS5CcmFuZCIsIjk5LjAuMC4wIl1dLDBd&amp;dt=1715656479244&amp;bpp=2&amp;bdt=885&amp;idt=-M&amp;shv=r20240509&amp;mjsv=m202405080101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3Dcb9eaba49148f185%3AT%3D1715654335%3ART%3D1715656218%3AS%3DALNI_MZJE4qRXwvQsNwkF5PtQ61fE9-m_Q&amp;gpic=UID%3D00000e1bbb51b917%3AT%3D1715654335%3ART%3D1715656218%3AS%3DALNI_MYRMAF2x-5kvXh1czrnl1EjwoVQug&amp;eo_id_str=ID%3D3e63acb4c038d281%3AT%3D1715654335%3ART%3D1715656218%3AS%3DAA-AfjZDOyjnoK7j3epDizec9Iwb&amp;prev_fmts=0x0&amp;nras=2&amp;correlator=1148257983146&amp;frm=20&amp;pv=1&amp;ga_vid=2118376343.1715654332&amp;ga_sid=1715656479&amp;ga_hid=2136010619&amp;ga_fc=1&amp;u_tz=-420&amp;u_his=14&amp;u_h=768&amp;u_w=1366&amp;u_ah=687&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=86&amp;ady=1347&amp;biw=1349&amp;bih=600&amp;scr_x=0&amp;scr_y=0&amp;eid=44759875%2C44759926%2C44759837%2C31083360%2C31083437%2C31083639%2C95329722%2C95331695%2C95331983%2C95331712%2C95332402%2C95332416%2C31078663%2C31078665%2C31078668%2C31078670&amp;oid=2&amp;pvsid=1274256165459693&amp;tmod=72301595&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.sunamganjerkhobor.com%2Fdetails%2F11355&amp;fc=1408&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C687%2C1366%2C600&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=128&amp;bc=31&amp;bz=1&amp;td=1&amp;psd=W251bGwsbnVsbCxudWxsLDNd&amp;nt=1&amp;ifi=2&amp;uci=a!2&amp;btvi=1&amp;fsb=1&amp;dtd=308\" data-google-container-id=\"a!2\" tabindex=\"0\" title=\"Advertisement\" aria-label=\"Advertisement\" data-google-query-id=\"CKvryriWjIYDFdXFTAIdfu0BcA\" data-load-complete=\"true\" style=\"left: 0px; position: absolute; top: 0px; border-width: 0px; border-style: initial; width: 756px; height: 0px;\"></iframe></div></div><p style=\"margin-bottom: 0px; line-height: 1.5;\"><br>ম্যাচের বাকি সময়ে প্রতিপক্ষের রক্ষণে মুহুমুহু আক্রমণ করেও গোলের দেখায় পায়নি পিএসজি। উল্টো ৬৮ মিনিটে ইয়ান গোবো’র গোলে ২-১ ব্যবধানে পিছিয়ে পড়ে ফরাসি চ্যাম্পিয়নরা। আর ম্যাচের ইনজুরি টাইমে ফ্রাঙ্ক মাগরি গোলে, ৩-১ ব্যবধানের জয় পায় তুলুজ।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\"><br>যদিও ম্যাচ শেষে লিগ শিরোপার ট্রফি নিয়ে উৎসব করে পিএসজির ফুটবলারা। পরে পিএসজির স্প্যানিশ কোচ লুইস এনরিকে গণমাধ্যমকে জানান, ‘সমর্থকেরা এমবাপ্পেকে শ্রদ্ধা জানানো হয়েছে, এটা তার প্রাপ্যও। বয়স কম হলেও সে ক্লাবের কিংবদন্তি। আমাদের সঙ্গে আরও কয়েকটা ম্যাচে সে আছে। আমি ওর (এমবাপ্পে) ভবিষ্যতের জন্য শুভকামনা জানাই।’</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">ফরাসি লিগে পিএসজির আরও দুটি ম্যাচ রয়েছে। ১৫ মে নিস ও ২৯ মে মেৎসের বিপক্ষে লিগ ম্যাচ খেলবে ফরাসি জায়ান্টরা। এ ছাড়া আগামী ২৫ মে ফ্রেঞ্চ কাপের ফাইনাল লিওঁর মুখোমুখি হবে পিএসজি। এটি হবে ফরাসি তারকার প্যারিসের ক্লাবটির জার্সিতে শেষ ম্যাচে।</p>', '/Images/news-img/1715656528.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 8, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, NULL, '2024-05-14 10:15:28', '2024-05-14 10:15:28'),
(15, 'মায়ামির দারুণ জয়ের দিনেও ক্ষুব্ধ মেসি', 'mayamir-darun-jyer-dineoo-kshubdh-mesi', NULL, NULL, '<p style=\"margin-bottom: 0px; line-height: 1.5;\">দুই গোলে পিছিয়ে ইন্টার মায়ামি। প্রথমার্ধ শেষ হতে আর মাত্র কয়েক মিনিট বাকি।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\"><br>এমন সময় ফ্রি-কিক আদায় করে নেন লিওনেল মেসি। কিন্তু সেই ফ্রি কিক নিজে নিতে পারেননি মেজর লিগ সকারের নিয়মের কারণে। মেসি না পারলেও ফ্রি-কিক থেকে ঠিকই গোল এনে দেন মাতিয়াস রোহাস। এরপর ঘুরে দাঁড়ানোর গল্প লিখে মন্ট্রিয়লের বিপক্ষে ৩-২ গোলের জয় নিয়ে মাঠ ছাড়ে মায়ামি।<br>দল দারুণ এক জয় পেলেও ফ্রি-কিক না নিতে পারায় ক্ষুব্ধ মেসি। জর্জ ক্যাম্পবেলের দ্বারা ফাউলের শিকার হওয়ার পর প্রাথমিক চিকিৎসা নিতে ১৫ সেকেন্ডের বেশি সময় লেগেছে তারা। মেজর লিগ সকারের নিয়ম অনুযায়ী, কোনো কফুটবলার প্রাথমিক চিকিৎসায় ১৫ সেকেন্ডের বেশি সময় নিলে তাকে দুই মিনিট মাঠের বাইরে থাকতে হবে।</p><div class=\"google-auto-placed ap_container\" style=\"width: 755.859px; height: auto; clear: both; text-align: center;\"><div id=\"aswift_1_host\" style=\"display: inline-block; margin: 0px; height: 0px; border: none; width: 756px; padding: 0px; position: relative; visibility: visible; overflow: hidden; opacity: 0;\"><iframe id=\"aswift_1\" name=\"aswift_1\" browsingtopics=\"true\" sandbox=\"allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation\" width=\"756\" height=\"0\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" vspace=\"0\" hspace=\"0\" allowtransparency=\"true\" scrolling=\"no\" allow=\"attribution-reporting; run-ad-auction\" src=\"https://googleads.g.doubleclick.net/pagead/ads?gdpr=0&amp;client=ca-pub-8218161053775536&amp;output=html&amp;h=280&amp;adk=159221134&amp;adf=832712619&amp;pi=t.aa~a.3208726436~i.8~rp.4&amp;w=756&amp;abgtt=6&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1715656535&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=7549195306&amp;ad_type=text_image&amp;format=756x280&amp;url=https%3A%2F%2Fwww.sunamganjerkhobor.com%2Fdetails%2F11304&amp;fwr=0&amp;pra=3&amp;rh=189&amp;rw=755&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTI0LjAuNjM2Ny4yMDEiLG51bGwsMCxudWxsLCI2NCIsW1siQ2hyb21pdW0iLCIxMjQuMC42MzY3LjIwMSJdLFsiR29vZ2xlIENocm9tZSIsIjEyNC4wLjYzNjcuMjAxIl0sWyJOb3QtQS5CcmFuZCIsIjk5LjAuMC4wIl1dLDBd&amp;dt=1715656535044&amp;bpp=2&amp;bdt=570&amp;idt=-M&amp;shv=r20240509&amp;mjsv=m202405080101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3Dcb9eaba49148f185%3AT%3D1715654335%3ART%3D1715656218%3AS%3DALNI_MZJE4qRXwvQsNwkF5PtQ61fE9-m_Q&amp;gpic=UID%3D00000e1bbb51b917%3AT%3D1715654335%3ART%3D1715656218%3AS%3DALNI_MYRMAF2x-5kvXh1czrnl1EjwoVQug&amp;eo_id_str=ID%3D3e63acb4c038d281%3AT%3D1715654335%3ART%3D1715656218%3AS%3DAA-AfjZDOyjnoK7j3epDizec9Iwb&amp;prev_fmts=0x0&amp;nras=2&amp;correlator=1153438870728&amp;frm=20&amp;pv=1&amp;ga_vid=2118376343.1715654332&amp;ga_sid=1715656535&amp;ga_hid=333806069&amp;ga_fc=1&amp;u_tz=-420&amp;u_his=15&amp;u_h=768&amp;u_w=1366&amp;u_ah=687&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=86&amp;ady=838&amp;biw=1349&amp;bih=600&amp;scr_x=0&amp;scr_y=0&amp;eid=44759875%2C44759926%2C44759837%2C95329725%2C95331982%2C95331712%2C95332402%2C95332416%2C31078663%2C31078665%2C31078668%2C31078670&amp;oid=2&amp;pvsid=994565194180774&amp;tmod=72301595&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.sunamganjerkhobor.com%2Fdetails%2F11336&amp;fc=1408&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C687%2C1366%2C600&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=128&amp;bc=31&amp;bz=1&amp;td=1&amp;psd=W251bGwsbnVsbCxudWxsLDNd&amp;nt=1&amp;ifi=2&amp;uci=a!2&amp;btvi=1&amp;fsb=1&amp;dtd=272\" data-google-container-id=\"a!2\" tabindex=\"0\" title=\"Advertisement\" aria-label=\"Advertisement\" data-google-query-id=\"CMG4ldOWjIYDFaVsDwId17UDRw\" data-load-complete=\"true\" style=\"left: 0px; position: absolute; top: 0px; border-width: 0px; border-style: initial; width: 756px; height: 0px;\"></iframe></div></div><p style=\"margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">ম্যাচশেষে এ নিয়ম নিয়ে মেসি বলেন, ‘এ ধরনের নিয়ম খেলায় বাজে প্রভাব ফেলছে। ’ মেসির মতোই সুর মায়ামি কোচ তাতা মার্তিনোর। তিনি বলেন, \'মেসিকে স্পষ্টভাবে ফাউল করা হয়েছে।&nbsp; সেই ফুটবলারের হলুদ কার্ড প্রাপ্য। যার অর্থ মেসিকে কখনোই দুই মিনিটের জন্য মাঠ ছাড়তে হতো না। যে দল ফাউলের শিকার হয়েছে তাকেই শাস্তি পেতে হলো। এ ধরনের পরিস্থিতিতে নিয়মের সংশোধন আনা উচিত। ফাউলটি পরিষ্কার ছিল এবং হলুদ কার্ডও, কিন্তু ক্ষতিটা আমাদেরই হয়েছে কারণ মেসিকে আমরা দুই মিনিটের জন্য পাইনি।\'</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">সাপুতো স্টেডিয়ামে ম্যাচের ৩২ মিনিটেই দুই গোলে এগিয়ে যায় মন্ট্রিয়ল। এরপর ৪৪ মিনিটে মেসির এনে দেওয়া ফ্রি-কিক থেকে ব্যবধান কমান রোহাস। প্রথমার্ধের যোগ করা সময়ে সমতা ফেরান লুইস সুয়ারেস। বিরতির পর ৫৯ মিনিটে জয়সূচক গোলটি করেন বেঞ্জমিন ক্রেমাসচি।</p>', '/Images/news-img/1715656582.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 8, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, NULL, '2024-05-14 10:16:22', '2024-05-14 10:16:22'),
(16, 'কোপা আমেরিকার দলে যোগ দিতে পারেন নেইমার, জানালেন কোচ', 'kopa-amerikar-dle-zog-dite-paren-neimar-janalen-koc', NULL, 'যুক্তরাষ্ট্রে ২০ জুন শুরু হতে যাওয়া কোপা আমেরিকার জন্য গতকাল ২৩ জনের স্কোয়াড ঘোষণা করেছে ব্রাজিল।', '<p style=\"margin-bottom: 0px; line-height: 1.5;\">যুক্তরাষ্ট্রে ২০ জুন শুরু হতে যাওয়া কোপা আমেরিকার জন্য গতকাল ২৩ জনের স্কোয়াড ঘোষণা করেছে ব্রাজিল। চোটের কারণে একাধিক তারকা খেলয়াড়কে হারিয়েছে তারা। সেই তালিকায় সবচেয়ে বড় নাম নেইমার জুনিয়র। লম্বা সময় ধরে তিনি চোটের মধ্যে আছেন। অবশ্য নেইমার স্কোয়াডে না থাকলেও কোপায় তার খেলার সম্ভাবনা এখনই শেষ হয়ে যাচ্ছে না।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\"><br>আগামী ২৩ জুন পর্যন্ত কোপার স্কোয়াড পরিবর্তনের সুযোগ আছে। যেহেতু ব্রাজিল ২৩ জনের নাম ঘোষণা করছে, তাই তারা আরও ৩ জন ফুটবলার স্কোয়াডে যোগ করতে পারবে। সেই সুযোগে নেইমার দলে ফিরলে অবাক হওয়ার কিছু থাকবে না। এমনকি ব্রাজিল কোচ দরিভাল জুনিয়রও নেইমারকে নিয়ে আশা দেখছেন। গতকাল স্কোয়াড ঘোষণার পর কোচ বলেন, \'আমাদের নায়কের প্রয়োজন এবং একজন নায়ক নয়..দায়িত্বের বিভাজন আমাদের দলে শক্তি বাড়াবে। সৃষ্টিকর্তা চাইলে, নেইমারের মতো খেলোয়াড়ের খেলার কিছুটা হলেও সম্ভাবনা আছে।</p><div class=\"google-auto-placed ap_container\" style=\"width: 755.859px; height: auto; clear: both; text-align: center;\"><div id=\"aswift_1_host\" style=\"display: inline-block; margin: 0px; height: 0px; border: none; width: 756px; padding: 0px; position: relative; visibility: visible; overflow: hidden; opacity: 0;\"><iframe id=\"aswift_1\" name=\"aswift_1\" browsingtopics=\"true\" sandbox=\"allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation\" width=\"756\" height=\"0\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" vspace=\"0\" hspace=\"0\" allowtransparency=\"true\" scrolling=\"no\" allow=\"attribution-reporting; run-ad-auction\" src=\"https://googleads.g.doubleclick.net/pagead/ads?gdpr=0&amp;client=ca-pub-8218161053775536&amp;output=html&amp;h=280&amp;adk=159221134&amp;adf=1697139896&amp;pi=t.aa~a.3208726436~i.8~rp.4&amp;w=756&amp;abgtt=6&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1715656593&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=7549195306&amp;ad_type=text_image&amp;format=756x280&amp;url=https%3A%2F%2Fwww.sunamganjerkhobor.com%2Fdetails%2F11253&amp;fwr=0&amp;pra=3&amp;rh=189&amp;rw=755&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTI0LjAuNjM2Ny4yMDEiLG51bGwsMCxudWxsLCI2NCIsW1siQ2hyb21pdW0iLCIxMjQuMC42MzY3LjIwMSJdLFsiR29vZ2xlIENocm9tZSIsIjEyNC4wLjYzNjcuMjAxIl0sWyJOb3QtQS5CcmFuZCIsIjk5LjAuMC4wIl1dLDBd&amp;dt=1715656593271&amp;bpp=2&amp;bdt=686&amp;idt=-M&amp;shv=r20240509&amp;mjsv=m202405080101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3Dcb9eaba49148f185%3AT%3D1715654335%3ART%3D1715656536%3AS%3DALNI_MZJE4qRXwvQsNwkF5PtQ61fE9-m_Q&amp;gpic=UID%3D00000e1bbb51b917%3AT%3D1715654335%3ART%3D1715656536%3AS%3DALNI_MYRMAF2x-5kvXh1czrnl1EjwoVQug&amp;eo_id_str=ID%3D3e63acb4c038d281%3AT%3D1715654335%3ART%3D1715656536%3AS%3DAA-AfjZDOyjnoK7j3epDizec9Iwb&amp;prev_fmts=0x0&amp;nras=2&amp;correlator=5869600113815&amp;frm=20&amp;pv=1&amp;ga_vid=2118376343.1715654332&amp;ga_sid=1715656593&amp;ga_hid=1431149650&amp;ga_fc=1&amp;u_tz=-420&amp;u_his=16&amp;u_h=768&amp;u_w=1366&amp;u_ah=687&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=86&amp;ady=888&amp;biw=1349&amp;bih=600&amp;scr_x=0&amp;scr_y=0&amp;eid=44759875%2C44759926%2C44759837%2C31083438%2C95329717%2C95331983%2C95330889%2C95331712%2C95332402%2C95332416%2C31078663%2C31078665%2C31078668%2C31078670&amp;oid=2&amp;pvsid=3087579080542494&amp;tmod=72301595&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.sunamganjerkhobor.com%2Fdetails%2F11304&amp;fc=1408&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C687%2C1366%2C600&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=128&amp;bc=31&amp;bz=1&amp;td=1&amp;psd=W251bGwsbnVsbCxudWxsLDNd&amp;nt=1&amp;ifi=2&amp;uci=a!2&amp;btvi=1&amp;fsb=1&amp;dtd=342\" data-google-container-id=\"a!2\" tabindex=\"0\" title=\"Advertisement\" aria-label=\"Advertisement\" data-google-query-id=\"CMjx-u6WjIYDFZNEDwId3owAGA\" data-load-complete=\"true\" style=\"left: 0px; position: absolute; top: 0px; border-width: 0px; border-style: initial; width: 756px; height: 0px;\"></iframe></div></div><p style=\"margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">ক্লাবের হয়ে ম্যাচে চোটে পড়ায় রিচার্লিসনের জায়গা হয়নি বলে জানিয়েছেন দরিভাল। তাছাড়া পারফরম্যান্সের জন্য বাদ পড়েছেন ম্যানচেস্টার ইউনাইটেডের ডিফেন্সিভ মিডফিল্ডার কাসেমিরো। ৩২ বছর বয়সী কাসেমিরোর বাদ পড়া প্রসঙ্গে সংবাদ সম্মেলনে ব্রাজিল কোচ দরিভাল জুনিয়র বলেছেন, ‘ম্যানচেস্টারে তিন মাস আগে তার সঙ্গে আমার কথা হয়েছে। তার এবং দল নিয়ে আমার ভাবনা কী, সেসব তাকে বুঝিয়ে বলেছি।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">সর্বশেষ ২০২১ কোপা আমেরিকার ফাইনালে আর্জেন্টিনার কাছে ১-০ গোলে হেরেছিল ব্রাজিল। সর্বশেষ ২০১৯ সালে কোপা আমেরিকা জিতেছিল পাঁচবারের বিশ্ব চ্যাম্পিয়নরা।</p>', '/Images/news-img/1715656667.jpg', 'সংগৃহীত ছবি', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'সু.খবর ডেস্ক', NULL, 4, 8, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, NULL, '2024-05-14 10:17:47', '2024-05-14 10:17:47'),
(17, 'ইন্দোনেশিয়ায় হড়কা বান ও ‘শীতল লাভা’র স্রোত, নিহত ৪১', 'indonesiyay-hrka-ban-oo-seetl-lavar-srot-niht-41', NULL, 'ইন্দোনেশিয়ার পশ্চিমাঞ্চলে প্রবল বৃষ্টিতে হড়কা বান, আগ্নেয়গিরির শীতল লাভার স্রোতে অন্তত ৪১ জনের প্রাণহানি ঘটেছে।', '<p style=\"margin-bottom: 0px; line-height: 1.5;\">ইন্দোনেশিয়ার পশ্চিমাঞ্চলে প্রবল বৃষ্টিতে হড়কা বান, আগ্নেয়গিরির শীতল লাভার স্রোতে অন্তত ৪১ জনের প্রাণহানি ঘটেছে।<br><br>আঞ্চলিক দুর্যোগ কর্মকর্তা বার্তাসংস্থা এএফপিকে বলেন, শনিবার রাতে মুষলধারে বৃষ্টির পর সুমাত্রা দ্বীপের সবচেয়ে সক্রিয় আগ্নেয়গিরি মাউন্ট মারাপির নিচের দিকে ছাই ও বড় বড় পাথর ভেসে আসার ঘটনায় অন্তত ১৭ জন নিখোঁজ রয়েছেন।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">পশ্চিম সুমাত্রার দুর্যোগ প্রশমন সংস্থার কর্মকর্তা ইলহাম ওহাব এএফপিকে বলেন, আগাম জেলায় তিনজন এবং তানাহ দাতারে ১৪ জন নিখোঁজ রয়েছেন। দুই জেলা-ই বন্যায় ক্ষতিগ্রস্ত হয়েছে, যেখানে লাখ লাখ লোকের বাস।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">নিখোঁজদের উদ্ধারে পুলিশ, সেনা, স্থানীয় উদ্ধারকারী দলের অন্তত ৪০০ সদস্য মোতায়েন করা হয়েছে। আটটি এক্সকাভেটর ও ড্রোন ব্যবহার করা হচ্ছে। &nbsp;</p><div class=\"google-auto-placed ap_container\" style=\"width: 755.859px; height: auto; clear: both; text-align: center;\"><div id=\"aswift_2_host\" style=\"display: inline-block; margin: 0px; height: 0px; border: none; width: 756px; padding: 0px; position: relative; visibility: visible; overflow: hidden; opacity: 0;\"><iframe id=\"aswift_2\" name=\"aswift_2\" browsingtopics=\"true\" sandbox=\"allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation\" width=\"756\" height=\"0\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" vspace=\"0\" hspace=\"0\" allowtransparency=\"true\" scrolling=\"no\" allow=\"attribution-reporting; run-ad-auction\" src=\"https://googleads.g.doubleclick.net/pagead/ads?gdpr=0&amp;client=ca-pub-8218161053775536&amp;output=html&amp;h=280&amp;adk=159221134&amp;adf=1697139896&amp;pi=t.aa~a.3208726436~i.18~rp.4&amp;w=756&amp;abgtt=6&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1715656703&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=7549195306&amp;ad_type=text_image&amp;format=756x280&amp;url=https%3A%2F%2Fwww.sunamganjerkhobor.com%2Fdetails%2F11356&amp;fwr=0&amp;pra=3&amp;rh=189&amp;rw=755&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTI0LjAuNjM2Ny4yMDEiLG51bGwsMCxudWxsLCI2NCIsW1siQ2hyb21pdW0iLCIxMjQuMC42MzY3LjIwMSJdLFsiR29vZ2xlIENocm9tZSIsIjEyNC4wLjYzNjcuMjAxIl0sWyJOb3QtQS5CcmFuZCIsIjk5LjAuMC4wIl1dLDBd&amp;dt=1715656702921&amp;bpp=1&amp;bdt=530&amp;idt=-M&amp;shv=r20240509&amp;mjsv=m202405080101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3Dcb9eaba49148f185%3AT%3D1715654335%3ART%3D1715656536%3AS%3DALNI_MZJE4qRXwvQsNwkF5PtQ61fE9-m_Q&amp;gpic=UID%3D00000e1bbb51b917%3AT%3D1715654335%3ART%3D1715656536%3AS%3DALNI_MYRMAF2x-5kvXh1czrnl1EjwoVQug&amp;eo_id_str=ID%3D3e63acb4c038d281%3AT%3D1715654335%3ART%3D1715656536%3AS%3DAA-AfjZDOyjnoK7j3epDizec9Iwb&amp;prev_fmts=0x0%2C1200x280&amp;nras=3&amp;correlator=5579393845993&amp;frm=20&amp;pv=1&amp;ga_vid=2118376343.1715654332&amp;ga_sid=1715656703&amp;ga_hid=851792646&amp;ga_fc=1&amp;u_tz=-420&amp;u_his=18&amp;u_h=768&amp;u_w=1366&amp;u_ah=687&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=86&amp;ady=1232&amp;biw=1349&amp;bih=600&amp;scr_x=0&amp;scr_y=0&amp;eid=44759875%2C44759926%2C44759837%2C42531705%2C95331690%2C95331695%2C95331982%2C95331712%2C95332402%2C95332416%2C31078663%2C31078665%2C31078668%2C31078670&amp;oid=2&amp;pvsid=4069211399575526&amp;tmod=72301595&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.sunamganjerkhobor.com%2Finternational&amp;fc=1408&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C687%2C1366%2C600&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=128&amp;bc=31&amp;bz=1&amp;td=1&amp;psd=W251bGwsbnVsbCxudWxsLDNd&amp;nt=1&amp;ifi=3&amp;uci=a!3&amp;btvi=1&amp;fsb=1&amp;dtd=237\" data-google-container-id=\"a!3\" tabindex=\"0\" title=\"Advertisement\" aria-label=\"Advertisement\" data-google-query-id=\"COvYl6OXjIYDFdXFTAIdfu0BcA\" data-load-complete=\"true\" style=\"left: 0px; position: absolute; top: 0px; border-width: 0px; border-style: initial; width: 756px; height: 0px;\"></iframe></div></div><p style=\"margin-bottom: 0px; line-height: 1.5;\">গেল ডিসেম্বরে মারাপি আগ্নেয়গিরির অগ্ন্যুৎপাতে ২০ জনের বেশি মানুষের প্রাণহানি ঘটে।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">শীতল লাভা, লাহার নামেও পরিচিত। এটি বৃষ্টিতে আগ্নেয়গিরির ঢাল থেকে নেমে আসা এমন এক ধরনের উপাদান, যাতে ছাই, বালি ও নুড়ি পাথর মিশ্রিত থাকে।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">বৃষ্টিতে পথঘাট কাদার নদীতে পরিণত হয়েছে, যানবাহন ভেসে গেছে, বাড়িঘরসহ বিভিন্ন ভবন ক্ষতিগ্রস্ত হয়েছে। সড়ক ক্ষতিগ্রস্ত হওয়ায় উদ্ধার তৎপরতা ব্যাহত হচ্ছে।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">বর্ষাকালে ইন্দোনেশিয়া ভূমিধস ও বন্যার ঝুঁকিতে থাকে। ২০২২ সালে বন্যার কারণে সুমাত্রা থেকে ২৪ হাজার বাসিন্দাকে সরিয়ে নেওয়া হয়েছিল। তখন দুই শিশুর প্রাণহানিও ঘটে। পরিবেশবাদীরা এসব দুর্যোগের কারণ হিসেবে গাছ কেটে বন উজাড়কে দায়ী করে থাকেন।</p>', '/Images/news-img/1716348888.webp', 'সংগৃহীত ছবি', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'সু.খবর ডেস্ক', NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, NULL, '2024-05-14 10:19:49', '2024-05-22 10:34:48'),
(18, 'আফগানিস্তানে আকস্মিক বন্যায় নিহত অন্তত ৬০, আহত শতাধিক', 'afganistane-aksmik-bnzaz-niht-ontt-60-aht-stadhik', NULL, NULL, '<p style=\"margin-bottom: 0px; line-height: 1.5;\">আফগানিস্তানের বাঘলান প্রদেশের নাহরিন জেলার লোগারিহা গ্রামে আকস্মিক বন্যা।<br>উত্তর আফগানিস্তানে ভয়াবহ আকস্মিক বন্যায় মৃতের সংখ্যা বেড়ে দাঁড়িয়েছে ৬২ জনে। নিহতদের মধ্যে বেশিরভাগ &nbsp;নারী ও শিশু বলে জানিয়েছেন একজন কর্মকর্তা। স্থানীয় সময় গতকাল শুক্রবার &nbsp;এই ঘটনা ঘটে। আফগানিস্তান জলবায়ু পরিবর্তনের জন্য অত্যন্ত ঝুঁকিপূর্ণ একটি দেশ।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">প্রতিবেদনে বলা হয়েছে, বাঘলানের উত্তরাঞ্চলীয় প্রদেশের একজন দুর্যোগ ব্যবস্থাপনা কর্মকর্তা জানিয়েছেন, ভারী মৌসুমী বৃষ্টির কারণে আকস্মিক বন্যার ঘটনা ঘটেছে। স্থানীয় বাসিন্দারা হঠাৎ এমন বন্যার জন্য অপ্রস্তুত ছিলেন না।প্রাদেশিক প্রাকৃতিক দুর্যোগ ব্যবস্থাপনা বিভাগের প্রধান হেদায়াতুল্লাহ হামদর্দ এএফপিকে বলেছেন, ‘বাগলান প্রদেশে আজকের বন্যায় মৃতের সংখ্যা বেড়ে দাঁড়িয়েছে ৬২।</p><div class=\"google-auto-placed ap_container\" style=\"width: 755.859px; height: auto; clear: both; text-align: center;\"><div id=\"aswift_1_host\" style=\"display: inline-block; margin: 0px; height: 0px; border: none; width: 756px; padding: 0px; position: relative; visibility: visible; overflow: hidden; opacity: 0;\"><iframe id=\"aswift_1\" name=\"aswift_1\" browsingtopics=\"true\" sandbox=\"allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation\" width=\"756\" height=\"0\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" vspace=\"0\" hspace=\"0\" allowtransparency=\"true\" scrolling=\"no\" allow=\"attribution-reporting; run-ad-auction\" src=\"https://googleads.g.doubleclick.net/pagead/ads?gdpr=0&amp;client=ca-pub-8218161053775536&amp;output=html&amp;h=280&amp;adk=159221134&amp;adf=1697139896&amp;pi=t.aa~a.3208726436~i.12~rp.4&amp;w=756&amp;abgtt=6&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1715656811&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=7549195306&amp;ad_type=text_image&amp;format=756x280&amp;url=https%3A%2F%2Fwww.sunamganjerkhobor.com%2Fdetails%2F11257&amp;fwr=0&amp;pra=3&amp;rh=189&amp;rw=755&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTI0LjAuNjM2Ny4yMDEiLG51bGwsMCxudWxsLCI2NCIsW1siQ2hyb21pdW0iLCIxMjQuMC42MzY3LjIwMSJdLFsiR29vZ2xlIENocm9tZSIsIjEyNC4wLjYzNjcuMjAxIl0sWyJOb3QtQS5CcmFuZCIsIjk5LjAuMC4wIl1dLDBd&amp;dt=1715656811219&amp;bpp=3&amp;bdt=1111&amp;idt=-M&amp;shv=r20240509&amp;mjsv=m202405080101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3Dcb9eaba49148f185%3AT%3D1715654335%3ART%3D1715656536%3AS%3DALNI_MZJE4qRXwvQsNwkF5PtQ61fE9-m_Q&amp;gpic=UID%3D00000e1bbb51b917%3AT%3D1715654335%3ART%3D1715656536%3AS%3DALNI_MYRMAF2x-5kvXh1czrnl1EjwoVQug&amp;eo_id_str=ID%3D3e63acb4c038d281%3AT%3D1715654335%3ART%3D1715656536%3AS%3DAA-AfjZDOyjnoK7j3epDizec9Iwb&amp;prev_fmts=0x0&amp;nras=2&amp;correlator=5295849639784&amp;frm=20&amp;pv=1&amp;ga_vid=2118376343.1715654332&amp;ga_sid=1715656810&amp;ga_hid=1004275179&amp;ga_fc=1&amp;u_tz=-420&amp;u_his=19&amp;u_h=768&amp;u_w=1366&amp;u_ah=687&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=86&amp;ady=1332&amp;biw=1349&amp;bih=600&amp;scr_x=0&amp;scr_y=0&amp;eid=44759875%2C44759926%2C44759837%2C31083636%2C95330000%2C95331983%2C95331712%2C95332402%2C95332416%2C21065725%2C31078663%2C31078665%2C31078668%2C31078670&amp;oid=2&amp;pvsid=2547729777808594&amp;tmod=72301595&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.sunamganjerkhobor.com%2Fdetails%2F11356&amp;fc=1408&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C687%2C1366%2C600&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=128&amp;bc=31&amp;bz=1&amp;td=1&amp;psd=W251bGwsbnVsbCxudWxsLDNd&amp;nt=1&amp;ifi=2&amp;uci=a!2&amp;btvi=1&amp;fsb=1&amp;dtd=283\" data-google-container-id=\"a!2\" tabindex=\"0\" title=\"Advertisement\" aria-label=\"Advertisement\" data-google-query-id=\"CNOx79aXjIYDFUkjewcdf2cLPw\" data-load-complete=\"true\" style=\"left: 0px; position: absolute; top: 0px; border-width: 0px; border-style: initial; width: 756px; height: 0px;\"></iframe></div></div><p style=\"margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">এই সংখ্যা আরো বাড়ার সম্ভবনা রয়েছে।’ প্রদেশের একাধিক জেলায় গতকাল রাত পর্যন্ত হালকা বৃষ্টি অব্যাহত ছিল। উদ্ধারকর্মীরা কাদা এবং ধ্বংসস্তূপের নীচ থেকে ক্ষতিগ্রস্থদের উদ্ধারের চেষ্টা করছে। এ ছাড়া জাতীয় সেনাবাহিনী ও পুলিশের নিরাপত্তা বাহিনীও কাজ করছে বলে হামদর্দ জানিয়েছেন।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">তিনি আরো বলেন, ‘যারা ঘরবাড়ি হারিয়েছে তাদেরকে তাঁবু, কম্বল এবং খাবার সরবরাহ করা হয়েছে। সোশ্যাল মিডিয়ায় দেখা ভিডিও ফুটেজে দেখা যায়, জলাবদ্ধ রাস্তা এবং মৃতদেহগুলো সাদা ও কালো কাপড়ে ঢেকে রাখা হয়েছে। পৃথক একটি ভিডিও দেখা গেছে, চারদিকে শিশুদের কান্নার আওয়াজ এবং অনেকে বন্যার পানিতে ভেসে যাওয়া ঘরের ভাঙা কাঠ এবং ধ্বংসাবশেষ দিকে অসহায়ের মতো তাকিয়ে আছেন।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">কর্তৃপক্ষের মতে, এপ্রিলের মাঝামাঝি থেকে আকস্মিক বন্যা এবং অন্যান্য বন্যার কারণে আফগানিস্তানের ১০টি প্রদেশে প্রায় ১০০ জনের মৃত্যু হয়েছে। কোনো অঞ্চল রেহাই পায়নি।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\"><br>কৃষিজমি পানিতে ডুবে গেছে। দেশটিতে ৪০ মিলিয়নেরও বেশি লোকের ৮০ শতাংশ কৃষির ওপর নির্ভরশীল। গতকাল শুক্রবারও বৃষ্টির কারণে উত্তর-পূর্ব বাদাখশান প্রদেশ এবং মধ্য ঘোর প্রদেশে ব্যাপক ক্ষয়ক্ষতি হয়েছে বলে কর্মকর্তারা জানিয়েছেন। তালেবান সরকারের মুখপাত্র জাবিহুল্লাহ মুজাহিদ বলেছেন, কর্তৃপক্ষ সারা দেশে বন্যায় ক্ষতিগ্রস্তদের সহায়তা দেবে। বাদাখশানের প্রাকৃতিক দুর্যোগ ব্যবস্থাপনার প্রাদেশিক পরিচালক মোহাম্মদ আকরাম আকবরী বলেছেন, ‘পার্বত্য প্রদেশটি বন্যার কারণে... বেশ কয়েকটি এলাকায় ব্যাপক আর্থিক ক্ষতি সম্মুখীন হয়েছে।’</p>', '/Images/news-img/1715656864.jpg', 'সু.খবর ডেস্ক', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, NULL, '2024-05-14 10:21:04', '2024-05-14 10:21:04'),
(19, 'ফিলিস্তিনের পক্ষে ভোট দিয়েছে বাংলাদেশও', 'filistiner-pkshe-vot-diyeche-bangladesoo', NULL, 'জাতিসংঘের সাধারণ পরিষদ ফিলিস্তিনিদের পূর্ণ জাতিসংঘের সদস্য হওয়ার জন্য যোগ্য হিসেবে স্বীকৃতি দিয়ে সমর্থন করেছে এবং জাতিসংঘ নিরাপত্তা পরিষদকে বিষয়টি অনুকূলভাবে পুনর্বিবেচনা করার সুপারিশ করেছে।', '<p style=\"margin-bottom: 0px; line-height: 1.5;\">জাতিসংঘের সাধারণ পরিষদ ফিলিস্তিনিদের পূর্ণ জাতিসংঘের সদস্য হওয়ার জন্য যোগ্য হিসেবে স্বীকৃতি দিয়ে সমর্থন করেছে এবং জাতিসংঘ নিরাপত্তা পরিষদকে বিষয়টি অনুকূলভাবে পুনর্বিবেচনা করার সুপারিশ করেছে।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\"><br></p><p style=\"margin-bottom: 0px; line-height: 1.5;\">শুক্রবার (১০ মে) ১৯৩ সদস্যের&nbsp;জাতিসংঘে সাধারণ পরিষদে এ সংক্রান্ত প্রস্তাবে ভোট হয়।</p><div class=\"google-auto-placed ap_container\" style=\"width: 755.859px; height: auto; clear: both; text-align: center;\"><div id=\"aswift_1_host\" style=\"display: inline-block; margin: 0px; height: 0px; border: none; width: 756px; padding: 0px; position: relative; visibility: visible; overflow: hidden; opacity: 0;\"><iframe id=\"aswift_1\" name=\"aswift_1\" browsingtopics=\"true\" sandbox=\"allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation\" width=\"756\" height=\"0\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" vspace=\"0\" hspace=\"0\" allowtransparency=\"true\" scrolling=\"no\" allow=\"attribution-reporting; run-ad-auction\" src=\"https://googleads.g.doubleclick.net/pagead/ads?gdpr=0&amp;client=ca-pub-8218161053775536&amp;output=html&amp;h=280&amp;adk=159221134&amp;adf=1697139896&amp;pi=t.aa~a.3208726436~i.10~rp.4&amp;w=756&amp;abgtt=6&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1715656880&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=7549195306&amp;ad_type=text_image&amp;format=756x280&amp;url=https%3A%2F%2Fwww.sunamganjerkhobor.com%2Fdetails%2F11269&amp;fwr=0&amp;pra=3&amp;rh=189&amp;rw=755&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTI0LjAuNjM2Ny4yMDEiLG51bGwsMCxudWxsLCI2NCIsW1siQ2hyb21pdW0iLCIxMjQuMC42MzY3LjIwMSJdLFsiR29vZ2xlIENocm9tZSIsIjEyNC4wLjYzNjcuMjAxIl0sWyJOb3QtQS5CcmFuZCIsIjk5LjAuMC4wIl1dLDBd&amp;dt=1715656879477&amp;bpp=1&amp;bdt=767&amp;idt=-M&amp;shv=r20240509&amp;mjsv=m202405080101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3Dcb9eaba49148f185%3AT%3D1715654335%3ART%3D1715656536%3AS%3DALNI_MZJE4qRXwvQsNwkF5PtQ61fE9-m_Q&amp;gpic=UID%3D00000e1bbb51b917%3AT%3D1715654335%3ART%3D1715656536%3AS%3DALNI_MYRMAF2x-5kvXh1czrnl1EjwoVQug&amp;eo_id_str=ID%3D3e63acb4c038d281%3AT%3D1715654335%3ART%3D1715656536%3AS%3DAA-AfjZDOyjnoK7j3epDizec9Iwb&amp;prev_fmts=0x0&amp;nras=2&amp;correlator=6055977271737&amp;frm=20&amp;pv=1&amp;ga_vid=2118376343.1715654332&amp;ga_sid=1715656879&amp;ga_hid=260585987&amp;ga_fc=1&amp;u_tz=-420&amp;u_his=20&amp;u_h=768&amp;u_w=1366&amp;u_ah=687&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=86&amp;ady=1117&amp;biw=1349&amp;bih=600&amp;scr_x=0&amp;scr_y=300&amp;eid=44759875%2C44759926%2C44759837%2C31083637%2C95329717%2C95331696%2C95331982%2C95330889%2C31083182%2C95331712%2C95332402%2C95332416%2C31078663%2C31078665%2C31078668%2C31078670&amp;oid=2&amp;pvsid=621636674462468&amp;tmod=72301595&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.sunamganjerkhobor.com%2Fdetails%2F11257&amp;fc=1408&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C687%2C1366%2C600&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=128&amp;bc=31&amp;bz=1&amp;td=1&amp;psd=W251bGwsbnVsbCxudWxsLDNd&amp;nt=1&amp;ifi=2&amp;uci=a!2&amp;btvi=1&amp;fsb=1&amp;dtd=553\" data-google-container-id=\"a!2\" tabindex=\"0\" title=\"Advertisement\" aria-label=\"Advertisement\" data-google-query-id=\"CJ37wveXjIYDFeWESwUdGtsKZA\" data-load-complete=\"true\" style=\"left: 0px; position: absolute; top: 0px; border-width: 0px; border-style: initial; width: 756px; height: 0px;\"></iframe></div></div><p style=\"margin-bottom: 0px; line-height: 1.5;\"><br></p><p style=\"margin-bottom: 0px; line-height: 1.5;\">ফিলিস্তিনের সদস্যপদ পাওয়ার প্রস্তাবে ১৪৩টি দেশ পক্ষে ভোট দেয়। বাংলাদেশও ফিলিস্তিনের পক্ষে ভোট দিয়েছে।<br>যুক্তরাষ্ট্র ও ইসরায়েলসহ নয়টি দেশ বিপক্ষে ভোট দেয়। ২৫টি দেশ ভোট দেওয়া থেকে বিরত থাকে। সাধারণ পরিষদের এ ভোট অবশ্য জাতিসংঘে ফিলিস্তিনকে পূর্ণ সদস্যপদ দেয় না, তবে দেশটি যোগদানের ক্ষেত্রে যোগ্য বলে স্বীকৃতি দেয়।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">&nbsp;&nbsp;</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">ভোটের আগে জাতিসংঘে নিযুক্ত ফিলিস্তিনি রাষ্ট্রদূত সাধারণ পরিষদের সদস্য দেশগুলোর উদ্দেশে বলেন, প্রস্তাবে হ্যাঁ বলা-ই হবে সঠিক কাজ। আমি আশ্বস্ত করছি, এ অন্ধকার সময়ে স্বাধীনতা, ন্যায়বিচার ও শান্তির পক্ষে দাঁড়ানোর জন্য আগামীতে আপনি ও আপনার দেশ গর্ব বোধ করবেন।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">ফিলিস্তিনের প্রেসিডেন্ট মাহমুদ আব্বাস বলেন, প্রস্তাব পাস হওয়ায় এটি দেখা গেছে যে, বিশ্ব ফিলিস্তিনিদের অধিকার ও স্বাধীনতার পক্ষে, ইসরায়েলের দখলদারত্বের বিপক্ষে।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">আল জাজিরার জ্যেষ্ঠ রাজনৈতিক বিশ্লেষক মারওয়ান বিশারা বলেন, আমি মনে করি, কৌশলগতভাবে বলতে গেলে এটি (ভোট) গাজায় কোনো পরিবর্তন ঘটাতে যাচ্ছে না। এটি অনেকটাই প্রতীকী। বিশ্ব পরিমণ্ডলে মর্যাদা অর্জনের জন্য এটি ফিলিস্তিনের জন্য একটি গুরুত্বপূর্ণ মাইলফলক।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">জাতিসংঘে নিযুক্ত ইসরায়েলের রাষ্ট্রদূত গিলাদ এরদান ভোটের নিন্দা জানান এবং বলেন, জাতিসংঘ এখন একটি সন্ত্রাসী রাষ্ট্রকে স্বাগত জানাচ্ছে।</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'সু.খবর ডেস্ক', NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, NULL, '2024-05-14 10:22:15', '2024-05-14 10:22:15'),
(20, 'সকালের নাশতায় যে খাবারগুলো খেলে ওজন নিয়ন্ত্রণে থাকবে', 'skaler-nastay-ze-khabargulo-khele-oojn-niyntrne-thakbe', NULL, NULL, '<p>সুস্থ থাকতে এবং সঠিক ওজন বজায় রাখতে সকালের নাশতা খুব গুরুত্বপূর্ণ। অনেকেই সকালের নাশতা বাদ দেন, কেউবা নাকেমুখে কিছু গুঁজে ছোটেন কাজে। অনেকে আবার দেরি করে ব্রেকফাস্ট করেন। এর কোনোটাই স্বাস্থ্যকর নয়। সকালের নাশতায় এমন খাবার বেছে নিন, যাতে সারা দিন পর্যাপ্ত শক্তি পাওয়া যায়, আবার অতিরিক্ত শর্করা বা স্নেহজাতীয় উপকরণও না থাকে। রাজার মতো খাবার দিয়ে দিন শুরু করার আসল অর্থ কিন্তু এটাই। এতে ওজন থাকবে নিয়ন্ত্রণে, আপনি থাকবেন সুস্থ। সকালের নাশতা বাদ দেওয়ার ভুলটা কিন্তু ভুলেও করা যাবে না। এখন কিছু স্বাস্থ্যকর ব্রেকফাস্টের খবর নেওয়া যাক।</p><div id=\"1a568a49-9299-4e41-873d-da6a61c72514\" style=\"\"><div class=\"storyCard eyOoS\" style=\"--borderColor: var(--primaryColor); margin: var(--space2_4) auto 0; max-width: 622px;\"><div class=\"   \r\n                  story-element\" style=\"margin-bottom: 0px;\"><div class=\"story-element story-element-text\" style=\"margin: 0px auto; max-width: 622px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">ডিম</p><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">ডিম দারুণ পুষ্টিকর এক খাবার। সকালে ডিমের যেকোনো একটি পদ খেয়ে নিন। সেদ্ধ হলে আরও ভালো, এতে কোনো তেল লাগে না। </p><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">গোটা শস্যের পাউরুটি</p><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">সাদা পাউরুটি নয়, গোটা শস্যের বাদামি পাউরুটি খেতে পারেন। সঙ্গে খেতে পারেন বাদামের মাখন, তাতে আমিষের চাহিদাও মিটবে, আর পাবেন‘ভালো’ ধরনের স্নেহজাতীয় উপাদান।</p><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">স্যান্ডউইচ</p><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">এই পাউরুটি দিয়েই তৈরি করতে পারেন স্যান্ডউইচ। মুরগির মাংস বা ডিমের স্যান্ডউইচ দারুণ নাশতা। সবজি দিয়েও হতে পারে স্যান্ডউইচ। স্যান্ডউইচের জন্য লো ফ্যাট পনির বেছে নিন। স্যান্ডউইচে মেয়োনেজ দেবেন না যেন। </p></div></div></div><div><div class=\"print-adslot adsBox n5kiG\" style=\"min-height: var(--space2_4);\"><div data-lang=\"বিজ্ঞাপন\" class=\"dfp-ad-unit \" style=\"margin: auto;\"><div class=\"adunitContainer\"><div class=\"AV63da4154806c125548059f08\" style=\"width: 640px; margin: 0px auto; max-width: 640px;\"><div id=\"aniBox\" style=\"overflow: hidden; transition: height 1s ease 0s; opacity: 0; width: 640px; height: 1px;\"><div id=\"aniplayer_AV63da4154806c125548059f08-1715657011729\" style=\"visibility: hidden;\"><div id=\"aniplayer_AV63da4154806c125548059f08-1715657011729gui\"><div id=\"av-caption\" style=\"line-height: 18px; position: relative; text-align: center; width: 640px;\"><span id=\"av-label\" style=\"display: inline-block; line-height: 10px; margin: 0px; padding: 4px; vertical-align: top; z-index: 83;\"></span></div><div id=\"av-container\" class=\" av-desktop hide-controls\" style=\"height: 360px; margin: 0px; overflow: hidden; pointer-events: auto; position: relative; text-align: initial; width: 640px;\"><div id=\"av-inner\" style=\"position: absolute; height: 360px; left: 0px; top: 0px; width: 640px;\"><div id=\"slot\" style=\"position: absolute; box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 0px 1px inset; height: 360px; width: 640px;\"><div id=\"imgpreloader\" style=\"position: static;\"></div><div id=\"videoslot\" class=\"loaded\" style=\"position: absolute; inset: 180px 0px 0px; object-fit: fill; opacity: 1; transform: translateY(-50%); width: 640px; animation: 0.5s ease 0s 1 normal none running fade-in; height: 360px;\"></div></div><div id=\"gui\" style=\"position: static;\"><div id=\"buttons\" style=\"position: absolute; display: flex; opacity: 0; bottom: 0px; justify-content: space-between; left: 0px; padding: 0px 13px 11px; right: 0px; transition: all 0.15s ease-in-out 0s;\"><div id=\"left\" style=\"position: static; height: 24px;\"></div><div id=\"right\" style=\"position: static; height: 24px; right: 13px;\"></div></div><div id=\"aniview-credit\" style=\"left: 5px; top: 2px; right: 2px; position: absolute; height: 24px; line-height: 24px; cursor: pointer; display: inline;\"><span style=\"background-image: url(&quot;https://assets.prothomalo.com/prothomalo/assets/default-9cdca736f114c54b34fe.svg&quot;); background-repeat: no-repeat; background-size: cover; display: inline-block; height: 24px; vertical-align: top; width: 24px;\"></span></div><div id=\"ad-icon\" style=\"position: static;\"></div></div></div></div></div><div id=\"anibid\"></div></div></div></div><div class=\" adBox\" id=\"mcanvas1x1-2f4508e2-713a-47f8-9775-18a54dbd26ba-0-0\" data-google-query-id=\"CKuh-rWYjIYDFTeIZgIdEToLrg\" style=\"text-align: center;\"><div id=\"google_ads_iframe_85406138/mCanvas_1x1_0__container__\" style=\"border: 0pt none;\"><iframe id=\"google_ads_iframe_85406138/mCanvas_1x1_0\" name=\"google_ads_iframe_85406138/mCanvas_1x1_0\" title=\"3rd party ad content\" width=\"1\" height=\"1\" scrolling=\"no\" marginwidth=\"0\" marginheight=\"0\" frameborder=\"0\" aria-label=\"Advertisement\" tabindex=\"0\" allow=\"attribution-reporting\" data-google-container-id=\"c\" data-load-complete=\"true\" style=\"border-width: 0px; border-style: initial; vertical-align: bottom;\"></iframe></div></div></div></div></div></div></div><div id=\"c11ddd19-f569-4dc3-b444-a56b5beb7abc\" style=\"\"><div class=\"storyCard eyOoS\" style=\"--borderColor: var(--primaryColor); margin-top: 0px; max-width: 622px;\"><div class=\"   \r\n                  story-element\" style=\"margin-bottom: var(--space1_6);\"><div class=\"story-element story-element-text\" style=\"margin: 0px auto; max-width: 622px; padding: 0px;\"><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">ওটস</p><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">সকালে ওটস খেতে পারেন। ওটস দিয়ে খিচুড়ি হতে পারে, আবার ওটসের সঙ্গে ফলও মেশাতে পারেন। ওটসে আমিষ আর আঁশ দুটোই পাবেন।</p><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">ফলের সালাদ</p><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">ফলের রসের চেয়ে গোটা ফল খেলেই পুষ্টি পাবেন বেশি। আঁশসমৃদ্ধ ফল খেলে সহজে ক্ষুধাও পাবে না। সালাদ ড্রেসিং করতে পারেন টক দই দিয়ে।</p></div></div></div></div><p><br></p>', '/Images/news-img/1715657094.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'জীবনযাপন ডেস্ক', NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, NULL, '2024-05-14 10:24:54', '2024-05-14 10:24:54'),
(21, 'সব বয়সেই কি সাঁতার শেখা যায়', 'sb-bysei-ki-sanntar-sekha-zay', NULL, NULL, '<p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">গ্রামে বাড়ির কাছেই অনেক সময় নদী থাকে। দল বেঁধে নদীতে ঝাঁপিয়ে পড়া যায়! শহুরে শিশুদের অবশ্য সেই সুযোগ কম। তবে শহরেও সাঁতার কাটার জায়গা আছে। সাঁতার শেখানোও হয় অনেক জায়গায়। কেবল শিশুদের জন্যই নয়, আছে বড়দেরও সুযোগ।</p><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">কেন সাঁতার শেখা উচিত, নতুন করে তা বলার অপেক্ষা হয়তো রাখে না। সাঁতার কেবল আনন্দের উৎস কিংবা শরীরচর্চার একটা ধরনই নয়, সাঁতার জীবনরক্ষারও কৌশল। সাঁতার জানা থাকলে অন্যকেও বাঁচানো সম্ভব। নিয়মিত সাঁতার কাটলে যেমন ওজন কমে, তেমনি শরীরের নানান ব্যথার উপশমও হয়। কিন্তু সব বয়সে কি সাঁতার শেখা যায়?</p><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">জেনে নিন সাঁতার সম্পর্কে আরও কিছু বিষয় :</p><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: var(--space1_6); padding: 0px; list-style-position: initial; list-style-image: initial;\"><li style=\"line-height: 1.6;\"><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">সাঁতারের আগে এবং পরে অবশ্যই পর্যাপ্ত পানি খেতে হবে। সাঁতার শুরুর অন্তত আধা ঘণ্টা আগে পানি খান। সাঁতার শেষে ৫ থেকে ৭ মিনিট পরও পানি খাবেন।</p></li><li style=\"line-height: 1.6;\"><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">জলাশয়ের পানি যাতে পেটে না যায়, সেদিকে লক্ষ রাখতে হবে।</p></li><li style=\"line-height: 1.6;\"><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">সাঁতারের উপযোগী পোশাক বেছে নিতে হবে।</p></li><li style=\"line-height: 1.6;\"><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">নিজের দক্ষতা বিবেচনায় রেখে সাঁতার কাটতে হবে।</p></li><li style=\"line-height: 1.6;\"><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">অনেকটা সময় সাঁতার কাটতে চাইলে মাঝে বিরতি দিন। সাঁতারে দক্ষ হয়ে ওঠার পরও নিয়মটি মেনে চলতে হবে।</p></li><li style=\"line-height: 1.6;\"><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">বয়োজ্যেষ্ঠ ব্যক্তিদের ক্ষেত্রে লাফ দিয়ে জলাশয়ে নামাটা ঝুঁকিপূর্ণ। তাঁদের ক্ষেত্রে ধীরে সুস্থে পানিতে নামাই ভালো। সাঁতার তো নানানভাবেই কাটা যায়। তবে উল্টোভাবে সাঁতার কাটা এবং মাছের মতো </p></li></ul><p style=\"font-family: Shurjo, &quot;Siyam Rupali&quot;, Roboto, Arial, Helvetica, monospace; margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; white-space-collapse: break-spaces; color: rgb(18, 18, 18);\"><br></p>', '/Images/news-img/1715657167.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, NULL, '2024-05-14 10:26:07', '2024-05-14 10:26:07'),
(22, 'এই গরমে সবচেয়ে ভালো ব্যায়াম কী, জানেন?', 'ei-grme-sbceye-valo-bzayam-kee-janen', NULL, 'তাপপ্রবাহের দিনগুলোতে রুটিনমাফিক শরীরচর্চা চালিয়ে যাওয়াটা কষ্টকর। সবচেয়ে দারুণ হয়, ব্যায়ামটাই যদি পানিতে করা যায়। তাই এ সময় সাঁতার হতে পারে চমৎকার একটি ব্যায়াম।', '<p>তাপপ্রবাহের দিনগুলোতে রুটিনমাফিক শরীরচর্চা চালিয়ে যাওয়াটা কষ্টকর। সবচেয়ে দারুণ হয়, ব্যায়ামটাই যদি পানিতে করা যায়। তাই এ সময় সাঁতার হতে পারে চমৎকার একটি ব্যায়াম। এতে শরীরও ঠান্ডা হলো, আবার শরীরচর্চাও করা হলো। সাঁতার জানা না থাকলে শিখে নিতে পারেন এ গরমেই। প্রশিক্ষকসহ ভালো কোনো সুইমিংপুল বেছে নিন। তবে শুরুতে একটানা লম্বা সময় সাঁতার কাটবেন না। এতে পেশিতে টান পড়ার ঝুঁকি আছে। আর জলাশয়ে পেশিতে টান ধরলে ভয়ংকর দুর্ঘটনা পর্যন্ত ঘটতে পারে। অবশ্যই সাঁতারের আগে ও পরে পর্যাপ্ত পানি পান করবেন। পানিশূন্যতার কারণেও পেশিতে টান পড়ে। দিনের উষ্ণতর সময় এবং খোলা সুইমিংপুলে রোদের মধ্যে সাঁতার কাটবেন না। ভোরবেলা, বিকেল, সন্ধ্যা বা রাতে সাঁতার কাটতে পারেন। রোদ থাকলে সাঁতার কাটার আগে নিয়মমাফিক সানস্ক্রিনসামগ্রী লাগিয়ে নিন। আর অবশ্যই সাঁতারের উপযোগী পোশাক নির্বাচন করুন। ঢিলেঢালা পোশাক পায়ে জড়িয়ে দুর্ঘটনা ঘটতে পারে। সাঁতারের জন্য টাইট সাঁতারের পোশাক পরতে হবে।<br></p>', '/Images/news-img/1716147613.webp', 'সাঁতার দিনটাকে সহজ করে দেবে অনেকটাই', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'জীবনযাপন ডেস্ক', NULL, 6, NULL, NULL, NULL, 2, NULL, NULL, 1, NULL, 1, 1, NULL, '2024-05-14 10:27:51', '2024-05-19 14:40:14'),
(23, 'আল্লাহর সঙ্গে তাঁর বান্দার যোগাযোগ হয় সুরা ফাতিহা পড়লে', 'allahr-sngoe-tannr-bandar-zogazog-hy-sura-fatiha-prle', NULL, NULL, '<p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">সুরা ফাতিহা কোরআন শরিফের প্রথম সুরা। ‘ফাতিহা’ শব্দের অর্থ ‘সূচনা’, ‘উদ্বোধন’ বা ‘প্রারম্ভিকা’। এ অর্থ থেকেই এ সুরার গুরুত্ব বোঝা যায়। নামাজে অন্য যেকোনো সুরা পড়ার আগে এটি পড়তে হয়। এর মানে নামাজ পড়তে সুরা ফাতিহা পাঠের মাধ্যমে অন্য সুরা বা আয়াতগুলো পড়তে হয়।</p><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">সুরাটির পঞ্চম আয়াতে বলা হচ্ছে, তুমি আমাদের সরল পথ দেখাও। এর পরেই কথাটি আরেকটু বিশদ করে পর পর দুই আয়াতে বলা হয়েছে, আল্লাহ যাঁদের পরম অনুগ্রহ করেছেন, তাঁদেরকে দেখানো পথটিই হলো এ সরল পথ। কারা আল্লাহর এই অনুগ্রহ পেয়েছেন? যাঁরা পথভ্রষ্ট হননি। এ জন্য তাঁরা আল্লাহর ক্রোধেরও শিকার হননি।</p><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">সুরা ফাতিহা এমন এক সুরা, কেউ যখন এর একটি করে আয়াত পড়তে থাকে, আল্লাহ সঙ্গে সঙ্গে সেই আয়াতের জবাব দিতে থাকেন। এই সুরা যেন আল্লাহর সঙ্গে তাঁর বান্দার সরাসরি যোগাযোগ।</p>', '/Images/news-img/1716147662.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ফেরদৌস ফয়সাল', NULL, 7, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, NULL, '2024-05-14 10:31:30', '2024-05-19 14:41:02'),
(24, 'মাঘ মাসে শুক্লপক্ষের পঞ্চমী তিথিতে সরস্বতী পূজা', 'magh-mase-suklpksher-pncmee-tithite-srswtee-puuja', NULL, 'সরস্বতী শুক্লবর্ণা, শুক্লবসনা, বীণাধারিণী  ও চন্দ্রের শোভাযুক্ত  রাজহংসবাহনা বিদ্যাদেবী। হিন্দুশাস্ত্র দেবী ভাগবতমতে, তিনি সৃষ্টিকর্তা ব্রহ্মার স্ত্রী।', '<p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">সরস্বতী শুক্লবর্ণা, শুক্লবসনা, বীণাধারিণী &nbsp;ও চন্দ্রের শোভাযুক্ত &nbsp;রাজহংসবাহনা বিদ্যাদেবী। হিন্দুশাস্ত্র দেবী ভাগবতমতে, তিনি সৃষ্টিকর্তা ব্রহ্মার স্ত্রী। ব্রহ্মবৈবর্ত পুরাণমতে, লক্ষ্মী ও সরস্বতী দুজনই নারায়ণের স্ত্রী। সরস্বতী বর্ণনায় সাদা বর্ণের প্রাধান্য দেখা যায়, যা তাঁর শুদ্ধতার প্রতীক এবং স্বভাবে সাত্ত্বিক গুণের পরিচায়ক। দেবতা শিব ও বিষ্ণু পর্যন্ত তাঁকে শ্রদ্ধা করেন।</p><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">ঋগ্বেদের দুটি মন্ত্রে সরস্বতীর উল্লেখ আছে। প্রাচীন ভারতে সরস্বতী নামে একটি নদী ছিল বলে জানা যায়। তবে এই নদী কোন পথে প্রবাহিত হতো, তার সন্ধান পাওয়া যায়নি; তাই একে সাধারণত গুপ্তগামিনী হিসেবে বিবেচনা করা হয়। পবিত্র ভূমি প্রয়াগে গঙ্গা, যমুনা ও সরস্বতীর মিলনস্থল সঙ্গম নামে পরিচিত। ধর্মীয় দিক থেকে এই সঙ্গমস্থান হিন্দুদের কাছে খুবই পবিত্র ও গুরুত্বপূর্ণ বলে বিবেচিত হয়। তাদের বিশ্বাস, জীবনে অন্তত একবার প্রয়াগ দর্শন করা উচিত। এভাবে সরস্বতী দেবী ও নদী হিসেবে দ্বৈত ভূমিকায় অবতীর্ণ। তাঁর নানা নাম—বীণাপাণি, ভারতী ইত্যাদি। তিনি ভক্তদের ভেতর থেকে অজ্ঞানতা দূর করে তাদের জ্ঞান দান করেন। তাঁর আশীর্বাদ পেলে মূর্খও জ্ঞানী হতে পারে—ভক্তদের মধ্যে এ বিশ্বাস প্রচলিত। সরস্বতী কবিদের ইষ্টদেবতা। কালিদাসকে বলা হয় সরস্বতীর বরপুত্র।</p>', '/Images/news-img/1716147690.webp', 'সরস্বতী প্রতিমা', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ধর্ম ডেস্ক', NULL, 7, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, NULL, '2024-05-14 10:32:58', '2024-05-19 14:41:30');
INSERT INTO `news` (`news_id`, `news_head_title`, `news_slug`, `news_head_caption_tag`, `news_details_brief`, `news_details`, `news_image`, `news_image_caption`, `news_vidos`, `news_vidos_caption`, `news_audio`, `news_audio_caption`, `news_source`, `news_source_link`, `news_zone`, `division_id`, `district_id`, `upazila_id`, `news_writer`, `news_reporter`, `cat_id`, `sub_cat_id`, `sub_sub_cat_id`, `news_page_id`, `news_type_id`, `news_series_id`, `news_status_id`, `status`, `approver`, `creator`, `modifier`, `publish_date`, `created_date`, `modified_date`) VALUES
(25, 'বাড়তি কর পরিশোধে বেশি আয়ের পরও কম মুনাফা আইডিএলসির', 'barti-kr-prisodhe-besi-ayer-proo-km-munafa-aidielsir', NULL, NULL, '<p style=\"text-align: justify; margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">চলতি বছরের প্রথম তিন মাসে কর–পরবর্তী মুনাফা করেছে ৩৫ কোটি টাকা আইডিএলসি ফাইন্যান্স। গত বছরের একই সময়ের তুলনায় ব্যাংকবহির্ভূত এই আর্থিক প্রতিষ্ঠানটির মুনাফা এক কোটি টাকা বেড়েছে। গত বছরের প্রথম ৩ মাসে প্রতিষ্ঠানটি মুনাফা করেছিল ৩৪ কোটি টাকা। শেয়ারবাজারে তালিকাভুক্ত কোম্পানি হিসেবে আইডিএলসি আজ সোমবার চলতি বছরের প্রথম প্রান্তিকের যে আর্থিক প্রতিবেদন প্রকাশ করেছে, সেখান থেকে এ তথ্য পাওয়া গেছে। প্রধান শেয়ারবাজার ঢাকা স্টক এক্সচেঞ্জের (ডিএসই) মাধ্যমে শেয়ারধারীদের মুনাফা এ তথ্য জানিয়েছে কোম্পানিটি। আর্থিক প্রতিবেদনের তথ্য অনুযায়ী, চলতি বছরের প্রথম প্রান্তিকে কোম্পানিটি গত বছরের একই সময়ে তুলনায় ভালো ব্যবসা করেছে। এ সময়ে কোম্পানিটির সুদ আয় বৃদ্ধির পাশাপাশি বিনিয়োগের বিপরীতেও ভালো আয় করেছে। আবার ঋণের বিপরীতে নিরাপত্তা সঞ্চিতি বা প্রভিশনিংও কমেছে। এতে প্রতিষ্ঠানটির আয় গত বছরের একই সময়ের চেয়ে উল্লেখযোগ্য পরিমাণে বেড়েছে। কিন্তু কর বাবদ খরচ বেড়ে যাওয়ায় আয়ের তুলনায় মুনাফা ততটা বাড়েনি। আর্থিক প্রতিবেদনের তথ্য অনুযায়ী, চলতি বছরের প্রথম তিন মাসে আইডিএলসি ঋণের সুদ বাবদ ৩৩৪ কোটি টাকা আয় করেছে। গত বছরের একই সময়ে যার পরিমাণ ছিল ২৯৯ কোটি টাকা। সেই হিসাবে ১ বছরের ব্যবধানে প্রতিষ্ঠানটির সুদ বাবদ আয় ৩৫ কোটি টাকা বা প্রায় ১২ শতাংশ বেড়েছে। সুদ আয় বৃদ্ধির পাশাপাশি আমানত ও ঋণের বিপরীতে সুদ পরিশোধও বেড়েছে। গত জানুয়ারি–মার্চ সময়কালে প্রতিষ্ঠানটি আমানত ও ঋণের সুদ বাবদ পরিশোধ করেছে ২০৬ কোটি টাকা। গত বছরের একই সময়ে যার পরিমাণ ছিল ১৭৩ কোটি টাকা। সেই হিসাবে এক বছরের ব্যবধানে এ খাতে আইডিএলসির খরচ বেড়েছে ৩৩ কোটি টাকা। সাধারণত ব্যাংকবহির্ভূত আর্থিক প্রতিষ্ঠানগুলো ব্যক্তি আমানতের পাশাপাশি প্রাতিষ্ঠানিক আমানত ও ব্যাংক থেকে ঋণ নিয়ে বেশি সুদে তা বিতরণের মাধ্যমে ব্যবসা পরিচালনা করে। এ কারণে ব্যাংকের তুলনায় ঋণ ও আমানতে বেশি সুদ গুনতে হয় আর্থিক প্রতিষ্ঠানকে। আর্থিক প্রতিবেদনের তথ্য অনুযায়ী, গত জানুয়ারি–মার্চ সময়কালে আইডিএলসি কর বাবদপরিশোধ করেছে প্রায় ২৯ কোটি টাকা, গত বছরের একই সময়ে এ খাতে প্রতিষ্ঠানটির খরচ ছিল সাড়ে ১১ কোটি টাকা। সেই হিসাবে, কর বাবদ আইডিএলসির খরচ বেড়েছে সাড়ে ১৭ কোটি টাকা বেড়েছে। এ কারণে কর–পূর্ববর্তী কোম্পানিটি যে মুনাফা করেছিল বাড়তি করের কারণে কর পরিশোধের পর তা অনেকাংশে কমে গেছে। আইডিএলসি জানিয়েছে, চলতি বছরের প্রথম তিন মাসে বিনিয়োগের বিপরীতে প্রতিষ্ঠানটির আয় বেড়ে প্রায় দ্বিগুণ হয়ে গেছে। গত জানুয়ারি–মার্চে আইডিএলসি এ খাত থেকে আয় করেছে প্রায় ১১ কোটি টাকা। গত বছরের একই সময়ে যার পরিমাণ ছিল ৬ কোটি টাকা।<br></p>', '/Images/news-img/1716147750.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'নিজস্ব প্রতিবেদক', NULL, 8, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, NULL, '2024-05-14 10:35:45', '2024-05-19 14:42:30'),
(26, 'নির্বাচনের পর আরও ভয়ঙ্কর হয়ে উঠেছে সরকার : ফখরুল', 'nirwacner-pr-aroo-vznkr-hze-utheche-srkar-fkhrul', NULL, NULL, '<p style=\"margin-bottom: 0px; line-height: 1.5;\">দ্বাদশ সংসদ নির্বাচনের পর আওয়ামী লীগ সরকার আরও বেশি ভয়ঙ্কর হয়ে উঠেছে বলে অভিযোগ করেছেন বিএনপির মহাসচিব মির্জা ফখরুল ইসলাম আলমগীর।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\"><br></p><p style=\"margin-bottom: 0px; line-height: 1.5;\">সোমবার (২০ মে) বিকেলে দলের সহ-দপ্তর সম্পাদক তাইফুল ইসলাম টিপু স্বাক্ষরিত এক বিবৃতিতে এ অভিযোগ করেন তিনি।</p><div class=\"google-auto-placed ap_container\" style=\"width: 755.859px; height: auto; clear: both;\"><div id=\"aswift_2_host\" style=\"display: inline-block; margin: 0px; height: 0px; border: none; width: 756px; padding: 0px; position: relative; visibility: visible; overflow: hidden; opacity: 0;\"><iframe id=\"aswift_2\" name=\"aswift_2\" browsingtopics=\"true\" sandbox=\"allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation\" width=\"756\" height=\"0\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" vspace=\"0\" hspace=\"0\" allowtransparency=\"true\" scrolling=\"no\" allow=\"attribution-reporting; run-ad-auction\" src=\"https://googleads.g.doubleclick.net/pagead/ads?gdpr=0&amp;client=ca-pub-8218161053775536&amp;output=html&amp;h=280&amp;adk=159221134&amp;adf=1697139896&amp;pi=t.aa~a.3208726436~i.10~rp.4&amp;w=756&amp;abgtt=6&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1716214837&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=7549195306&amp;ad_type=text_image&amp;format=756x280&amp;url=https%3A%2F%2Fwww.sunamganjerkhobor.com%2Fdetails%2F11585&amp;fwr=0&amp;pra=3&amp;rh=189&amp;rw=755&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTI0LjAuNjM2Ny4yMDgiLG51bGwsMCxudWxsLCI2NCIsW1siQ2hyb21pdW0iLCIxMjQuMC42MzY3LjIwOCJdLFsiR29vZ2xlIENocm9tZSIsIjEyNC4wLjYzNjcuMjA4Il0sWyJOb3QtQS5CcmFuZCIsIjk5LjAuMC4wIl1dLDBd&amp;dt=1716214836991&amp;bpp=1&amp;bdt=581&amp;idt=-M&amp;shv=r20240515&amp;mjsv=m202405140101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3Dcb9eaba49148f185%3AT%3D1715654335%3ART%3D1716214798%3AS%3DALNI_MZJE4qRXwvQsNwkF5PtQ61fE9-m_Q&amp;gpic=UID%3D00000e1bbb51b917%3AT%3D1715654335%3ART%3D1716214798%3AS%3DALNI_MYRMAF2x-5kvXh1czrnl1EjwoVQug&amp;eo_id_str=ID%3D3e63acb4c038d281%3AT%3D1715654335%3ART%3D1716214798%3AS%3DAA-AfjZDOyjnoK7j3epDizec9Iwb&amp;prev_fmts=0x0%2C1200x280&amp;nras=3&amp;correlator=3816626571440&amp;frm=20&amp;pv=1&amp;ga_vid=2118376343.1715654332&amp;ga_sid=1716214837&amp;ga_hid=2125521004&amp;ga_fc=1&amp;u_tz=-420&amp;u_his=5&amp;u_h=768&amp;u_w=1366&amp;u_ah=687&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=86&amp;ady=1445&amp;biw=1349&amp;bih=600&amp;scr_x=0&amp;scr_y=0&amp;eid=44759875%2C44759926%2C44759837%2C95331689%2C95331983%2C31083764%2C95331712%2C95332416%2C31078663%2C31078665%2C31078668%2C31078670&amp;oid=2&amp;pvsid=118988470572044&amp;tmod=1385624347&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.sunamganjerkhobor.com%2F&amp;fc=1408&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C687%2C1366%2C600&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=128&amp;bc=31&amp;bz=1&amp;td=1&amp;psd=W251bGwsbnVsbCxudWxsLDNd&amp;nt=1&amp;ifi=3&amp;uci=a!3&amp;btvi=1&amp;fsb=1&amp;dtd=181\" data-google-container-id=\"a!3\" tabindex=\"0\" title=\"Advertisement\" aria-label=\"Advertisement\" data-google-query-id=\"COTS0762nIYDFX4V-QAdnD8Myg\" data-load-complete=\"true\" style=\"left: 0px; position: absolute; top: 0px; border-width: 0px; border-style: initial; width: 756px; height: 0px;\"></iframe></div></div><p style=\"margin-bottom: 0px; line-height: 1.5;\">ঢাকা জেলা বিএনপির সভাপতি খন্দকার আবু আশফাক এবং দোহার উপজেলা শাখার সভাপতি নজরুল ইসলাম মেসের ও সাধারণ সম্পাদক মাসুদ পারভেজের জামিন নামঞ্জুর করে কারাগারে প্রেরণের ঘটনায় গভীর উদ্বেগ প্রকাশ করে গণমাধ্যমে এই বিবৃতি দেন মির্জা ফখরুল।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">বিবৃতিতে বিএনপি মহাসচিব বলেন, ৭ জানুয়ারির আওয়ামী ডামি সরকার নব্য বাকশালী শাসন প্রতিষ্ঠার মাধ্যমে তাদের অবৈধ ক্ষমতাকে পাকাপোক্ত করতে দেশব্যাপী বিএনপিসহ বিরোধী দলের নেতাকর্মীদের উপর অবর্ণনীয় জুলুম-অত্যাচার অব্যাহত রেখেছে। সেটিরই ধারাবাহিকতায় খন্দকার আবু আশফাক, নজরুল ইসলাম মেসের ও মাসুদ পারভেজের জামিন নামঞ্জুর করে কারাগারে পাঠানো হলো। তিনি তাদের মামলা প্রত্যাহারসহ অবিলম্বে নিঃশর্ত মুক্তির জোর আহ্বান জানান।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\"><br></p><p style=\"margin-bottom: 0px; line-height: 1.5;\">মির্জা ফখরুল বলেন, আওয়ামী লীগ সরকার আদালতকে দিয়ে বিএনপিসহ বিরোধী দল ও মতের নেতাকর্মীদের জামিন নামঞ্জুরের মাধ্যমে কারান্তরীণের অমানবিক খেলায় বেপরোয়া হয়ে উঠেছে। ক্ষমতাসীনদের নির্মম আচরণ, দৌরাত্ম্য এবং দাপটে মানুষ এখন উদ্বেগ-উৎকণ্ঠার মধ্যে দিনাতিপাত করছে। এই সরকার তাদের সকল অপকর্মকে আড়াল করতেই সরকারি জুলুমের মাত্রা বৃদ্ধি করেছে। অপরাধ না করেও মিথ্যা মামলায় আসামি হওয়া, গ্রেপ্তার হওয়া ও কারাগারে যাওয়া এখন নিয়মে পরিণত হয়েছে। আইনের শাসনহীন এই দেশে নিরপরাধ মানুষরাই সরকারি নিপীড়নের শিকার হচ্ছেন। ৭ জানুয়ারির ডামি নির্বাচনের পর কর্তৃত্ববাদী আওয়ামী সরকার তাদের দুঃশাসন চালাতে আরও বেশি ভয়ঙ্কর হয়ে উঠেছে। তবে এই শ্বাসরুদ্ধকর পরিস্থিতির অবসান ঘটাতে সংগ্রামী জনগণ ঐক্যবদ্ধভাবে আন্দোলন-সংগ্রামে ঝাঁপিয়ে পড়তে দৃঢ়প্রতিজ্ঞ।</p>', '/Images/news-img/1716216051.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'সু.খবর ডেস্ক', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, NULL, '2024-05-20 09:22:36', '2024-05-20 09:40:51'),
(27, 'বঙ্গবন্ধু শান্তি পদক চালু করতে যাচ্ছে বাংলাদেশ', 'bngobndhu-santi-pdk-calu-krte-zacche-banglades', NULL, NULL, '<p style=\"margin-bottom: 0px; line-height: 1.5;\">জাতির পিতা বঙ্গবন্ধু শেখ মুজিবুর রহমানের নামে শান্তি পদক চালু করতে যাচ্ছে বাংলাদেশ। সোমবার (২০ মে) সকালে প্রধানমন্ত্রীর কার্যালয়ে মন্ত্রিসভার বৈঠকে এ পদক চালুর খসড়া অনুমোদন দেওয়া হয়েছে।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">বৈঠক শেষে সচিবালয়ে ব্রিফিংয়ে এ তথ্য জানান মন্ত্রিপরিষদ সচিব মাহবুব হোসেন।</p><div class=\"google-auto-placed ap_container\" style=\"width: 755.859px; height: auto; clear: both;\"><div id=\"aswift_1_host\" style=\"display: inline-block; margin: 0px; height: 0px; border: none; width: 756px; padding: 0px; position: relative; visibility: visible; overflow: hidden; opacity: 0;\"><iframe id=\"aswift_1\" name=\"aswift_1\" browsingtopics=\"true\" sandbox=\"allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation\" width=\"756\" height=\"0\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" vspace=\"0\" hspace=\"0\" allowtransparency=\"true\" scrolling=\"no\" allow=\"attribution-reporting; run-ad-auction\" src=\"https://googleads.g.doubleclick.net/pagead/ads?gdpr=0&amp;client=ca-pub-8218161053775536&amp;output=html&amp;h=280&amp;adk=159221134&amp;adf=1697139896&amp;pi=t.aa~a.3208726436~i.10~rp.4&amp;w=756&amp;abgtt=6&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1716214983&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=7549195306&amp;ad_type=text_image&amp;format=756x280&amp;url=https%3A%2F%2Fwww.sunamganjerkhobor.com%2Fdetails%2F11581&amp;fwr=0&amp;pra=3&amp;rh=189&amp;rw=755&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTI0LjAuNjM2Ny4yMDgiLG51bGwsMCxudWxsLCI2NCIsW1siQ2hyb21pdW0iLCIxMjQuMC42MzY3LjIwOCJdLFsiR29vZ2xlIENocm9tZSIsIjEyNC4wLjYzNjcuMjA4Il0sWyJOb3QtQS5CcmFuZCIsIjk5LjAuMC4wIl1dLDBd&amp;dt=1716214982915&amp;bpp=2&amp;bdt=840&amp;idt=-M&amp;shv=r20240515&amp;mjsv=m202405140101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3Dcb9eaba49148f185%3AT%3D1715654335%3ART%3D1716214798%3AS%3DALNI_MZJE4qRXwvQsNwkF5PtQ61fE9-m_Q&amp;gpic=UID%3D00000e1bbb51b917%3AT%3D1715654335%3ART%3D1716214798%3AS%3DALNI_MYRMAF2x-5kvXh1czrnl1EjwoVQug&amp;eo_id_str=ID%3D3e63acb4c038d281%3AT%3D1715654335%3ART%3D1716214798%3AS%3DAA-AfjZDOyjnoK7j3epDizec9Iwb&amp;prev_fmts=0x0&amp;nras=2&amp;correlator=1923093481535&amp;frm=20&amp;pv=1&amp;ga_vid=2118376343.1715654332&amp;ga_sid=1716214982&amp;ga_hid=64954272&amp;ga_fc=1&amp;u_tz=-420&amp;u_his=6&amp;u_h=768&amp;u_w=1366&amp;u_ah=687&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=86&amp;ady=644&amp;biw=1349&amp;bih=600&amp;scr_x=0&amp;scr_y=0&amp;eid=44759875%2C44759926%2C44759837%2C31083359%2C31083637%2C31083639%2C31083822%2C42532524%2C44798934%2C95331690%2C95331982%2C31083764%2C95330887%2C95331712%2C95332416%2C31078663%2C31078665%2C31078668%2C31078670&amp;oid=2&amp;pvsid=3598005688293877&amp;tmod=1385624347&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.sunamganjerkhobor.com%2Fdetails%2F11585&amp;fc=1408&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C687%2C1366%2C600&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=128&amp;bc=31&amp;bz=1&amp;td=1&amp;psd=W251bGwsbnVsbCxudWxsLDNd&amp;nt=1&amp;ifi=2&amp;uci=a!2&amp;btvi=1&amp;fsb=1&amp;dtd=372\" data-google-container-id=\"a!2\" tabindex=\"0\" title=\"Advertisement\" aria-label=\"Advertisement\" data-google-query-id=\"CJfBqIS3nIYDFWkI-QAdVRELdQ\" data-load-complete=\"true\" style=\"left: 0px; position: absolute; top: 0px; border-width: 0px; border-style: initial; width: 756px; height: 0px;\"></iframe></div></div><p style=\"margin-bottom: 0px; line-height: 1.5;\">তিনি জানান, এ বিষয়ে একটি নিরপেক্ষ ও আন্তর্জাতিক জুরি বোর্ড গঠন করা হবে। সেই সঙ্গে একটি নীতিমালাও করা হবে।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">মন্ত্রিপরিষদ সচিব বলেন, প্রতি দুই বছর পরপর ১৭ মার্চ পুরস্কারপ্রাপ্তদের নাম ঘোষণা করা হবে। পাশাপাশি ২৩ মে পুরস্কার প্রদান করা হবে। পুরস্কারপ্রাপ্ত ব্যক্তি ১ লাখ মার্কিন ডলার সমপরিমাণের আর্থিক পুরস্কারের সঙ্গে ১৮ ক্যারেটের ৫০ গ্রাম ওজনের স্বর্ণ পদক পাবেন।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">তিনি আরও বলেন, বিশ্বশান্তি প্রতিষ্ঠায় অবদান, মানবাধিকার, ক্ষুধা ও দারিদ্র্যবিমোচনে অবদানের স্বীকৃতিস্বরূপ ২০২৫ সাল থেকে প্রতি দুই বছর পরপর সম্মানজনক এই পদক দেওয়া হবে। বাংলাদেশসহ বিশ্বের যে কোনো দেশের নাগরিক, কোনো দেশের রাষ্ট্রপতি-প্রধানমন্ত্রী, সমাজসেবক, রাজনীতিক এ পদকের জন্য বিবেচিত হতে পারেন। এ ছাড়াও নোবেল বিজয়ী ও বাংলাদেশে অবস্থিত দূতাবাসের প্রধানরা সংশ্লিষ্ট দেশের জন্য নাম প্রস্তাব করতে পারবেন।</p>', '/Images/news-img/1716216036.jpg', 'বঙ্গবন্ধু শেখ মুজিবুর রহমান। -ছবি : সংগৃহীত', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'সু.খবর ডেস্ক', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, NULL, '2024-05-20 09:24:37', '2024-05-20 09:40:36'),
(28, 'ব্যাটারিচালিত রিকশা চালু রাখার নির্দেশ দিয়েছেন প্রধানমন্ত্রী : কাদের', 'bzataricalit-riksha-calu-rakhar-nirdes-diyechen-prdhanmntree-kader', NULL, NULL, '<p style=\"text-align: justify; margin-bottom: 0px; line-height: 1.5;\">প্রধানমন্ত্রী শেখ হাসিনা ব্যাটারিচালিত রিকশা চালু রাখার নির্দেশ দিয়েছেন বলে জানিয়েছেন সড়ক পরিবহন ও সেতুমন্ত্রী ওবায়দুল কাদের। তবে, দেশের ২২টি মহাসড়কে ব্যাটারিচালিত রিকশা বন্ধ থাকবে বলে জানান তিনি।</p><p style=\"text-align: justify; margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"text-align: justify; margin-bottom: 0px; line-height: 1.5;\">সোমবার (২০ মে) দুপুরে গুলিস্তান বঙ্গবন্ধু এভিনিউয়ে আওয়ামী লীগের কেন্দ্রীয় কার্যালয়ে ওলামা লীগের প্রথম প্রতিষ্ঠাবার্ষিকীর আলোচনা একথা জানান সড়ক পরিবহনমন্ত্রী।</p><div class=\"google-auto-placed ap_container\" style=\"width: 755.859px; height: auto; clear: both; text-align: center;\"><div style=\"text-align: justify;\"></div><div id=\"aswift_1_host\" style=\"display: inline-block; margin: 0px; height: 0px; border: none; width: 756px; padding: 0px; position: relative; visibility: visible; overflow: hidden; opacity: 0;\"><iframe id=\"aswift_1\" name=\"aswift_1\" browsingtopics=\"true\" sandbox=\"allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation\" width=\"756\" height=\"0\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" vspace=\"0\" hspace=\"0\" allowtransparency=\"true\" scrolling=\"no\" allow=\"attribution-reporting; run-ad-auction\" src=\"https://googleads.g.doubleclick.net/pagead/ads?gdpr=0&amp;client=ca-pub-8218161053775536&amp;output=html&amp;h=280&amp;adk=159221134&amp;adf=1697139896&amp;pi=t.aa~a.3208726436~i.10~rp.4&amp;w=756&amp;abgtt=6&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1716215093&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=7549195306&amp;ad_type=text_image&amp;format=756x280&amp;url=https%3A%2F%2Fwww.sunamganjerkhobor.com%2Fdetails%2F11576&amp;fwr=0&amp;pra=3&amp;rh=189&amp;rw=755&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTI0LjAuNjM2Ny4yMDgiLG51bGwsMCxudWxsLCI2NCIsW1siQ2hyb21pdW0iLCIxMjQuMC42MzY3LjIwOCJdLFsiR29vZ2xlIENocm9tZSIsIjEyNC4wLjYzNjcuMjA4Il0sWyJOb3QtQS5CcmFuZCIsIjk5LjAuMC4wIl1dLDBd&amp;dt=1716215093498&amp;bpp=2&amp;bdt=769&amp;idt=-M&amp;shv=r20240515&amp;mjsv=m202405140101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3Dcb9eaba49148f185%3AT%3D1715654335%3ART%3D1716214798%3AS%3DALNI_MZJE4qRXwvQsNwkF5PtQ61fE9-m_Q&amp;gpic=UID%3D00000e1bbb51b917%3AT%3D1715654335%3ART%3D1716214798%3AS%3DALNI_MYRMAF2x-5kvXh1czrnl1EjwoVQug&amp;eo_id_str=ID%3D3e63acb4c038d281%3AT%3D1715654335%3ART%3D1716214798%3AS%3DAA-AfjZDOyjnoK7j3epDizec9Iwb&amp;prev_fmts=0x0&amp;nras=2&amp;correlator=8511598824687&amp;frm=20&amp;pv=1&amp;ga_vid=2118376343.1715654332&amp;ga_sid=1716215093&amp;ga_hid=1376086083&amp;ga_fc=1&amp;u_tz=-420&amp;u_his=7&amp;u_h=768&amp;u_w=1366&amp;u_ah=687&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=86&amp;ady=1188&amp;biw=1349&amp;bih=600&amp;scr_x=0&amp;scr_y=0&amp;eid=44759875%2C44759926%2C44759837%2C42531706%2C42532523%2C44798934%2C95331687%2C95331983%2C31083764%2C95330887%2C95331712%2C95332416%2C31078663%2C31078665%2C31078668%2C31078670&amp;oid=2&amp;pvsid=3381498356393622&amp;tmod=1385624347&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.sunamganjerkhobor.com%2Fdetails%2F11581&amp;fc=1408&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C687%2C1366%2C600&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=128&amp;bc=31&amp;bz=1&amp;td=1&amp;psd=W251bGwsbnVsbCxudWxsLDNd&amp;nt=1&amp;ifi=2&amp;uci=a!2&amp;btvi=1&amp;fsb=1&amp;dtd=445\" data-google-container-id=\"a!2\" tabindex=\"0\" title=\"Advertisement\" aria-label=\"Advertisement\" data-google-query-id=\"CLiXirm3nIYDFVYq-QAdkWUMSQ\" data-load-complete=\"true\" style=\"text-align: justify; left: 0px; position: absolute; top: 0px; border-width: 0px; border-style: initial; width: 756px; height: 0px;\"></iframe></div></div><p style=\"text-align: justify; margin-bottom: 0px; line-height: 1.5;\">এ সময় ওবায়দুল কাদের বলেন, দুর্মূল্যের বাজারে মেহেনতি মানুষের দুঃখ-দুর্দশা, বর্তমান বিশ্ব পরিস্থিতি ও দ্রব্যমূল্যের কথা চিন্তা করে সিটি এলাকায় ব্যাটারিচালিত রিকশা চালু রাখার নির্দেশ দিয়েছেন প্রধানমন্ত্রী শেখ হাসিনা।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\"><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\">আওয়ামী ওলামা লীগের সভাপতি মাওলানা কে এম আব্দুল মমিন সিরাজীর সভাপতিত্বে ও সাধারণ সম্পাদক মো. আমিনুল হকের সঞ্চালনায় সভায় আরও উপস্থিত ছিলেন আওয়ামী লীগের যুগ্ম-সাধারণ সম্পাদক ও পররাষ্ট্রমন্ত্রী হাছান মাহমুদ, প্রচার ও প্রকাশনা সম্পাদক আব্দুস সোবহান গোলাপ, ধর্মবিষয়ক সম্পাদক সিরাজুল মোস্তফা প্রমুখ।</span></div></p>', '/Images/news-img/1716216021.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'সু.খবর ডেস্ক', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, NULL, '2024-05-20 09:26:04', '2024-05-20 09:40:21'),
(29, 'জনগণ সরকারকে ক্ষমতা থেকে টেনেহিঁচড়ে নামাবে: আমিনুল হক', 'jngn-srkarke-kshmta-theke-tenehinncre-namabe-aminul-hk', NULL, NULL, '<p style=\"margin-bottom: 0px; line-height: 1.5;\">বিএনপির কেন্দ্রীয় কমিটির ক্রীড়া বিষয়ক সম্পাদক ও ঢাকা মহানগর উত্তর বিএনপির সদস্য সচিব আমিনুল হক বলেছেন, গত ১৫ বছরে আওয়ামী লীগ বিএনপির কয়েক হাজার নেতাকর্মীকে হত্যা করেছে। লাখ লাখ নেতাকর্মীর নামে ষড়যন্ত্রমূলক মিথ্যা মামলা দিয়েছে।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">হাজার হাজার নেতাকর্মী আজ জেলে রয়েছে, তারপরও বিএনপি মামলা হামলা ও নির্যাতনে ভয় করে না। বিএনপির হারানোর কিছু নেই, নির্যাতন ও নিপীড়ন বিএনপির সয়ে গেছে।</p><div class=\"google-auto-placed ap_container\" style=\"width: 755.859px; height: auto; clear: both;\"><div id=\"aswift_2_host\" style=\"display: inline-block; margin: 0px; height: 0px; border: none; width: 756px; padding: 0px; position: relative; visibility: visible; overflow: hidden; opacity: 0;\"><iframe id=\"aswift_2\" name=\"aswift_2\" browsingtopics=\"true\" sandbox=\"allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation\" width=\"756\" height=\"0\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" vspace=\"0\" hspace=\"0\" allowtransparency=\"true\" scrolling=\"no\" allow=\"attribution-reporting; run-ad-auction\" src=\"https://googleads.g.doubleclick.net/pagead/ads?gdpr=0&amp;client=ca-pub-8218161053775536&amp;output=html&amp;h=280&amp;adk=159221134&amp;adf=1697139896&amp;pi=t.aa~a.3208726436~i.12~rp.4&amp;w=756&amp;abgtt=6&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1716215219&amp;num_ads=1&amp;rafmt=1&amp;armr=3&amp;sem=mc&amp;pwprc=7549195306&amp;ad_type=text_image&amp;format=756x280&amp;url=https%3A%2F%2Fwww.sunamganjerkhobor.com%2Fdetails%2F11584&amp;fwr=0&amp;pra=3&amp;rh=189&amp;rw=755&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;fa=27&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTI0LjAuNjM2Ny4yMDgiLG51bGwsMCxudWxsLCI2NCIsW1siQ2hyb21pdW0iLCIxMjQuMC42MzY3LjIwOCJdLFsiR29vZ2xlIENocm9tZSIsIjEyNC4wLjYzNjcuMjA4Il0sWyJOb3QtQS5CcmFuZCIsIjk5LjAuMC4wIl1dLDBd&amp;dt=1716215219462&amp;bpp=1&amp;bdt=655&amp;idt=-M&amp;shv=r20240515&amp;mjsv=m202405140101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3Dcb9eaba49148f185%3AT%3D1715654335%3ART%3D1716215181%3AS%3DALNI_MZJE4qRXwvQsNwkF5PtQ61fE9-m_Q&amp;gpic=UID%3D00000e1bbb51b917%3AT%3D1715654335%3ART%3D1716215181%3AS%3DALNI_MYRMAF2x-5kvXh1czrnl1EjwoVQug&amp;eo_id_str=ID%3D3e63acb4c038d281%3AT%3D1715654335%3ART%3D1716215181%3AS%3DAA-AfjZDOyjnoK7j3epDizec9Iwb&amp;prev_fmts=0x0%2C1200x280&amp;nras=3&amp;correlator=7762754242134&amp;frm=20&amp;pv=1&amp;ga_vid=2118376343.1715654332&amp;ga_sid=1716215219&amp;ga_hid=263021027&amp;ga_fc=1&amp;u_tz=-420&amp;u_his=9&amp;u_h=768&amp;u_w=1366&amp;u_ah=687&amp;u_aw=1366&amp;u_cd=24&amp;u_sd=1&amp;dmc=4&amp;adx=86&amp;ady=1545&amp;biw=1349&amp;bih=600&amp;scr_x=0&amp;scr_y=0&amp;eid=44759875%2C44759926%2C44759837%2C31083588%2C31083638%2C44795922%2C95331696%2C95331982%2C31083764%2C95331712%2C95332416%2C31078663%2C31078665%2C31078668%2C31078670&amp;oid=2&amp;pvsid=397042403199557&amp;tmod=1385624347&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.sunamganjerkhobor.com%2F&amp;fc=1408&amp;brdim=0%2C0%2C0%2C0%2C1366%2C0%2C1366%2C687%2C1366%2C600&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=128&amp;bc=31&amp;bz=1&amp;td=1&amp;psd=W251bGwsbnVsbCxudWxsLDNd&amp;nt=1&amp;ifi=3&amp;uci=a!3&amp;btvi=1&amp;fsb=1&amp;dtd=271\" data-google-container-id=\"a!3\" tabindex=\"0\" title=\"Advertisement\" aria-label=\"Advertisement\" data-google-query-id=\"CIjaiPW3nIYDFWkI-QAdVRELdQ\" data-load-complete=\"true\" style=\"left: 0px; position: absolute; top: 0px; border-width: 0px; border-style: initial; width: 756px; height: 0px;\"></iframe></div></div><p style=\"margin-bottom: 0px; line-height: 1.5;\"><br>তিনি আরও বলেন, অবৈধ বিনা ভোটের ডামি সরকার তাদের ক্ষমতাকে দীর্ঘায়িত করতে একের পর এক মিথ্যা ও বানোয়াট মামলায় আদালতে ফরমায়েসি সাজার মাধ্যমে ঢাকা মহানগরীসহ সারাদেশের হাজার হাজার নেতাকর্মীকে জেলখানায় দিনের পর দিন আটকে রাখা হচ্ছে। আওয়ামী সরকারের অবৈধ এ ক্ষমতাকে দীর্ঘায়িত করতেই তারা এসব অপকর্ম করছেন।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">আমিনুল হক বলেন, দেশে কোনো আইনের শাসন নেই, দেশে দুর্নীতি ও অপশাসন চলছে। সরকার দলীয় লোকজন জনগণের টাকা লুটপাট করে সেই টাকা বিদেশে পাচার করে বিলাসী জীবনযাপন করছেন। আর পক্ষান্তরে জনগণ অসহায় জীবন যাপন করছেন।</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">&nbsp;</p><p style=\"margin-bottom: 0px; line-height: 1.5;\">তিনি বলেন, যারা দেশের টাকা লুটপাট করে পাচার করে ক্ষমতা আঁকড়ে ধরে রাখতে চায়, জনগণ তাদের ক্ষমা করবে না। জনগণ জবরদখলবাজ এ অবৈধ সরকারকে ক্ষমতা থেকে টেনেহিঁচড়ে নামাবে।</p>', '/Images/news-img/1716216002.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'সু.খবর ডেস্ক', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, NULL, '2024-05-20 09:28:18', '2024-05-20 09:40:02'),
(30, 'টসে হেরে ব্যাটিংয়ে বাংলাদেশ', 'tse-here-bzatingye-banglades', 'যুক্তরাষ্ট্র সিরিজ', NULL, '<p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">যুক্তরাষ্ট্রের বিপক্ষে সিরিজের প্রথম টি-টোয়েন্টিতে টসে হেরে ব্যাটিংয়ে নামছে বাংলাদেশ। হিউস্টনের ম্যাচটি হতে যাচ্ছে দুই দলের মধ্যে প্রথম আন্তর্জাতিক ম্যাচ।</p><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">টসে হেরে বাংলাদেশ অধিনায়ক নাজমুল হোসেন বলেছেন, টসে জিতলে তিনিও ফিল্ডিং নিতেন। বিশ্বকাপের আগে আগে এ সিরিজকে ভালো প্রস্তুতির সুযোগ হিসেবেই দেখছেন তিনি। </p><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">বিশ্বকাপে থাকা দলটিই খেলছে এ সিরিজে। চোটের কারণে তাসকিন আহমেদ ছিটকে গেছেন আগেই। এর বাইরে প্রথম ম্যাচের একাদশে সুযোগ হয়নি তানজিদ হাসান, তানভীর ইসলাম ও তানজিম হাসানের।</p><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">দুই পেসার মোস্তাফিজুর রহমান ও শরীফুল ইসলামের সঙ্গে আছেন বিশেষজ্ঞ স্পিনার মেহেদী হাসান ও রিশাদ হোসেন, সঙ্গে অলরাউন্ডার সাকিব আল হাসান।</p>', '/Images/news-img/1716306918.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ক্রীড়া প্রতিবেদক', NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, NULL, '2024-05-21 10:51:29', '2024-05-21 10:55:18'),
(31, 'ধোনির ১১০ মিটার ছক্কাই চেন্নাইয়ের বিদায়ের কারণ', 'dhonir-110-mitar-chkkai-cennayer-bidayer-karn', NULL, NULL, '<p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">৬ বলে ১৭ রান দরকার—এমন সমীকরণে প্রথম বলেই ছয় হাঁকিয়েছিলেন মহেন্দ্র সিং ধোনি। যেনতেন ছক্কা নয়, বল রীতিমতো গ্যালারির ছাদে। দূরত্বের হিসাবে ১১০ মিটার। ধোনির বিশাল ওই ছক্কায় প্লে–অফে উঠতে প্রয়োজনীয় রান চলে আসে চেন্নাই সুপার কিংসের নাগালের মধ্যে।</p><p style=\"margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">তবে কাল রাতে রয়্যাল চ্যালেঞ্জার্স বেঙ্গালুরুর বিপক্ষে লক্ষ্যটা পূরণ করতে পারেনি চেন্নাই। ইয়াশ দয়ালের দ্বিতীয় বলে ধোনি আউট হওয়ার পর অন্যরাও বাকি রান তুলতে পারেননি। নির্ধারিত লক্ষ্য থেকে ১০ রান দূরে থাকায় লিগ পর্ব থেকেই বিদায় হয়ে যায় গতবারের চ্যাম্পিয়নদের, <a target=\"_blank\" href=\"https://www.prothomalo.com/sports/cricket/c07ji5qv90\" style=\"\">শেষ চারে</a> ওঠে বেঙ্গালুরু।ম্যাচ শেষে বেঙ্গালুরু অধিনায়কসহ অনেকেই দয়ালের ভূয়সী প্রশংসা করেছেন। ফাফ ডু প্লেসি তো নিজের ম্যাচসেরার পুরস্কারটি দয়ালেরই প্রাপ্য বলে মন্তব্য করেছেন। তবে বেঙ্গালুরুরই উইকেটকিপার–ব্যাটসম্যান দিনেশ কার্তিকের কথায় মনে হতে পারে, দয়ালের দক্ষতা বিশেষ কাজে দেয়নি। কার্তিকের মতে, চেন্নাই শেষ চারে উঠতে পারেনি ধোনির ছক্কার কারণে।বেঙ্গালুরুর এম চিন্নাস্বামী স্টেডিয়ামের ম্যাচটিতে বিরাট কোহলিরা প্রথমে ব্যাট করে তোলেন ৫ উইকেটে ২১৮ রান। বেঙ্গালুরুর চেয়ে ২ এগিয়ে থাকায় চেন্নাইয়ের জয় জরুরি ছিল না, দরকার ছিল ২০১ রান, যাতে হারলেও রান রেটে এগিয়ে থাকা যায়। বৃষ্টিবিঘ্নিত ম্যাচে শেষ দিকে বল ছিল ভেজা, বোলারদের জন্য গ্রিপ করা কঠিন ছিল।</p>ওই অবস্থায় ম্যাচের শেষ ওভারে বল হাতে নেন দয়াল।', '/Images/news-img/1716306933.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'খেলা ডেস্ক', NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, NULL, '2024-05-21 10:53:47', '2024-05-21 10:55:33'),
(32, 'রাইসির স্মরণে নিরাপত্তা পরিষদে এক মিনিট নীরবতা, চটেছে ইসরায়েল', 'raisir-smrne-niraptta-prishde-ek-minit-neerbta-cteche-israyel', NULL, NULL, '<p style=\"text-align: justify; margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">হেলিকপ্টার বিধ্বস্তে নিহত ইরানের প্রেসিডেন্ট ইব্রাহিম রাইসি ও তাঁর সফরসঙ্গীদের স্মরণে গতকাল সোমবার এক মিনিট নীরবতা পালন করেছে জাতিসংঘের নিরাপত্তা পরিষদের সদস্যরা। এই ঘটনায় ক্ষুব্ধ প্রতিক্রিয়া জানিয়েছে ইরানের চিরশত্রু ইসরায়েল।</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">হেলিকপ্টারটি গত রোববার দুপুরের দিকে ইরানের পূর্ব আজারবাইজান প্রদেশের পর্বতঘেরা ভারজাগান এলাকায় বিধ্বস্ত হয়। হেলিকপ্টারটিতে রাইসি, পররাষ্ট্রমন্ত্রী হোসেইন আমির আবদোল্লাহিয়ানসহ ৯ আরোহী ছিলেন। গতকাল সকালে হেলিকপ্টারটির ধ্বংসাবশেষের খোঁজ পাওয়া যায়। এরপর রাইসিসহ হেলিকপ্টারটির সব আরোহীর মৃত্যুর খবর নিশ্চিত করে ইরান সরকার।</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">জাতিসংঘ নিরাপত্তা পরিষদে চলতি মে মাসের প্রেসিডেন্ট মোজাম্বিক। জাতিসংঘে নিযুক্ত মোজাম্বিকের রাষ্ট্রদূত পেদ্রো কমিসারিও আফনসো ইরানের প্রেসিডেন্ট রাইসিসহ তাঁর সফরসঙ্গীদের স্মরণে নিরাপত্তা পরিষদের সদস্যদের দাঁড়িয়ে এক মিনিট নীরবতা পালন করতে বলেন। তাঁর আহ্বানে সাড়া দিয়ে যুক্তরাষ্ট্রসহ নিরাপত্তা পরিষদের সদস্যরা এক মিনিট নীরবতা পালন করেন।</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">এই ঘটনায় ক্ষুব্ধ প্রতিক্রিয়া জানান জাতিসংঘে নিযুক্ত ইসরায়েলের রাষ্ট্রদূত গিলাদ এরদান। তিনি এই পদক্ষেপকে লজ্জাজনক ঘটনা হিসেবে অভিহিত করেন।</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">এক্সে দেওয়া এক ভিডিও বার্তায় গিলাদ বলেন, ‘আপনারা ঠিকই দেখেছেন। জাতিসংঘের নিরাপত্তা পরিষদ ইরানের গণহত্যাকারী প্রেসিডেন্ট রাইসির স্মরণে এক মিনিট নীরবতা পালন করেছে। কী লজ্জাজনক!</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">নিরাপত্তা পরিষদ বিশ্বশান্তি ও নিরাপত্তার জন্য হুমকি হয়ে উঠেছে বলেও মন্তব্য করেন ইসরায়েলি রাষ্ট্রদূত।</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">গত ৭ অক্টোবর ইসরায়েলে হামলা চালায় হামাস। এই ঘটনার পর থেকে গিলাদ ক্রমবর্ধমানভাবে জাতিসংঘের সমালোচনা করে আসছেন।</p>', '/Images/news-img/1716349129.webp', 'ইরানের প্রেসিডেন্ট ইব্রাহিম রাইসি হেলিকপ্টার বিধ্বস্ত হয়ে নিহত হয়েছেনফাইল ছবি: এএফপি', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'এএফপি', NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, NULL, '2024-05-22 10:37:56', '2024-05-22 10:38:49'),
(33, 'অর্থনীতির চলমান সংকটের সুরাহায় ব্যবস্থা না নিলে পরিণতি ভয়াবহ', 'orthneetir-clman-sngkter-surahay-bzbstha-na-nile-printi-vyabh', NULL, NULL, '<p style=\"text-align: justify; margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">আগামী বাজেট দেশে বৈষম্য আরও বাড়াবে বলে মনে করেন বাংলাদেশের কমিউনিস্ট পার্টির (সিপিবি) নেতারা। তাঁরা বলেছেন, বর্তমানে দেশের সব ক্ষেত্রে আকাশচুম্বী বৈষম্য সৃষ্টি হয়েছে। এবারের বাজেট বৈষম্য বৃদ্ধির ধারাকে আরও এগিয়ে নেবে। ২০২৪-২৫ অর্থবছরের বাজেট সামনে রেখে এক সংবাদ সম্মেলনে সিপিবির নেতারা এসব কথা বলেন। আজ রোববার দুপুরে রাজধানীর পুরানা পল্টনের মুক্তি ভবনে এ সংবাদ সম্মেলনের আয়োজন করে সিপিবি। সংবাদ সম্মেলনে লিখিত বক্তব্য পাঠ করেন সিপিবির কেন্দ্রীয় কমিটির সদস্য অর্থনীতির অধ্যাপক এম এম আকাশ। এ সময় আরও উপস্থিত ছিলেন সিপিবির সাধারণ সম্পাদক রুহিন হোসেন (প্রিন্স), সহকারী সাধারণ সম্পাদক মিহির ঘোষ, সভাপতিমণ্ডলীর সদস্য শাহীন রহমান, লক্ষ্মী চক্রবর্তী, কোষাধ্যক্ষ ফজলুর রহমান প্রমুখ। সংবাদ সম্মেলনে সিপিবি নেতারা বলেন, ধনী গোষ্ঠী দেশের বাইরে অর্থ পাচার করায় ডলারের সংকট সৃষ্টি হয়েছে। এর মধ্যে অসৎ আমলা, অসৎ ব্যবসায়ী ও অসৎ রাজনীতিবিদ রয়েছেন। মুদ্রাস্ফীতি সর্বোচ্চ পর্যায়ে পৌঁছেছে উল্লেখ করে সংবাদ সম্মেলনে বলা হয়, দেশে প্রবৃদ্ধির গতি ও বৈদেশিক মুদ্রার রিজার্ভ নিম্নমুখী। বিদেশে টাকা পাচারের প্রবণতায় খেলাপি ঋণ বেড়েই চলেছে। বৈদেশিক দেনা বাড়ছে এবং ঋণ পরিশোধের তৎপরতা দৃশ্যমান হচ্ছে। সেই সঙ্গে আঞ্চলিক বৈষম্য, নারী-পুরুষের বৈষম্য বাড়ছে। জলবায়ু পরিবর্তনে অনেক এলাকায়, বিশেষ করে উপকূলীয় অঞ্চলে জানমালের ও সুপেয় পানির ঝুঁকি বাড়ছে। সাধারণ মানুষের প্রকৃত আয় কমে গেছে। বর্তমান যে সংকট তৈরি হয়েছে, এ বিষয়ে এখনই জরুরিভাবে ব্যবস্থা না নিতে পারলে পরিণতি ভয়াবহ হওয়ার আশঙ্কা রয়েছে। মুক্তিযুদ্ধের ধারার অর্থনৈতিক ব্যবস্থায় বাজেট প্রণয়নের দাবি জানিয়ে সিপিবি বলেছে, অতীতের গণবিরোধী ধারায় বর্তমান সরকার এটিকে (মুক্তিযুদ্ধের ধারার বাজেট) উপেক্ষা করে পুঁজিবাদী তথা নয়া উদারনীতি অর্থনৈতিক ব্যবস্থার মোড়কে গত বছরের বাজেট উপস্থাপন করেছে। এবারও তার ব্যতিক্রম হবে না।<br></p>', '/Images/news-img/1717392798.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'নিজস্ব প্রতিবেদক', NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, 1, NULL, 1, 1, NULL, '2024-06-03 12:33:18', '2024-06-03 12:33:18'),
(34, 'বেনজীরকে সরকার দেশত্যাগে সহায়তা করেছে: মির্জা ফখরুল', 'benjeerke-srkar-destzage-shayta-kreche-mirja-fkhrul', NULL, NULL, '<p style=\"text-align: justify; margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">বিএনপির মহাসচিব মির্জা ফখরুল ইসলাম আলমগীর বলেছেন, ‘আমরা যখন চিকিৎসার জন্য বাইরে যেতে চাই তখন ভিসা নিয়ে এয়ারপোর্টে গেলে দেড় থেকে দুই ঘণ্টা বসিয়ে রাখে। আর তাঁকে (বেনজীরকে) জামাই আদর করে সিঙ্গাপুর এয়ারলাইনসে তুলে দিয়েছে, যেন দেশ থেকে বেরিয়ে যেতে পারে। সেই ব্যবস্থাটা করেছে এই সরকার।’</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">আজ শনিবার সন্ধ্যায় গাজীপুরে জিয়াউর রহমানের ৪৩তম শাহাদাতবার্ষিকী উপলক্ষে আলোচনা সভা, দোয়া মাহফিল ও তবারক বিতরণ অনুষ্ঠানে প্রধান অতিথির বক্তব্যে বিএনপির মহাসচিব মির্জা ফখরুল এসব কথা বলেন। জেলার চান্দনা চৌরস্তার একটি কমিউনিটি সেন্টারে ওই অনুষ্ঠান হয়।</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; line-height: 1.7;\">মির্জা ফখরুল আরও বলেন, এই সরকার হচ্ছে চোরের রাজা বাটপার। যারা চুরি করে তাদের সব সময় প্রশ্রয় দেয়। কারণ, তারা বাটপারি করে। আরেকজন সেনাবাহিনীর সাবেক প্রধান জেনারেল (অব.) আজিজ, যার একটা ভিডিও ছড়িয়ে পড়েছিল আল–জাজিরাতে। সেখানে দেখেছি কীভাবে তিনি তাঁদের ভাইদের রক্ষা করার জন্য প্রভাব খাটিয়ে তাঁদের মুক্ত করেন। পরে পাসপোর্ট ও ভিসা দিয়ে বিদেশে পাঠিয়ে দিয়েছেন। তার বিরুদ্ধে আমেরিকা নিষেধাজ্ঞা দেওয়ার পর এখন টনক নড়েছে। তারা বলছে, এখন নাকি তারা তদন্ত করবে। শুধু একটা বেনজীর বা একটা আজিজ নয়, হাজার হাজার বেনজীর ও আজিজ তৈরি করেছে সরকার।</p>', '/Images/news-img/1717393018.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'প্রতিনিধি', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, NULL, '2024-06-03 12:36:58', '2024-06-03 12:36:58'),
(35, 'বিপ্লবী ছাত্র মৈত্রীর নতুন কমিটি, সভাপতি দিলীপ-সা. সম্পাদক জাবির', 'biplbee-chatr-moitreer-ntun-kmiti-svapti-dileep-sa-smpadk-jabir', NULL, NULL, '<div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\">দুই দিনব্যাপী কাউন্সিল শেষে আজ শুক্রবার বিপ্লবী ছাত্র মৈত্রীর কেন্দ্রীয় কমিটি গঠন করা হয়। ১৭ সদস্যের নতুন কমিটিতে দুটি সদস্যপদ ফাঁকা রাখা হয়েছে।&nbsp; গতকাল বৃহস্পতিবার দুপুরে ঢাকা বিশ্ববিদ্যালয়ের বটতলায় ১৬তম জাতীয় কাউন্সিলের উদ্বোধন করেন ঐতিহাসিক ১১ দফার অন্যতম প্রণেতা ও উনসত্তরের গণ-অভ্যুত্থানের অন্যতম সংগঠক দীপা দত্ত। উদ্বোধনী সমাবেশ শেষে কাউন্সিল অধিবেশন শুরু হয়। কাউন্সিলে নতুন কমিটি গঠন করা হয়।&nbsp; &nbsp; বিপ্লবী ছাত্র মৈত্রীর এই কমিটিতে সহসভাপতি হয়েছেন ফারহা তাহসিন ও শুভ মিস্ত্রি। সহসাধারণ সম্পাদক হয়েছেন খন্দকার শাহরিয়ার আলিফ। সাংগঠনিক সম্পাদক হয়েছেন শাকিল হোসেন। কমিটিতে তৈয়ব ইসলামকে দপ্তর সম্পাদক, সামি আব্দুল্লাহ্ রাজনৈতিক শিক্ষা ও সংস্কৃতিবিষয়ক সম্পাদক, নূজিয়া হাসিন রাশাকে অর্থ সম্পাদক এবং জশদ জাকিরকে করা হয়েছে প্রচার ও প্রকাশনা সম্পাদক।&nbsp; কমিটিতে সদস্য হয়েছেন সেলিম হাসান, ফারিয়া ইসলাম, সরফরাজ সানোয়ার, আবিদ ইসলাম ও সোমা ডুমরী।</span></div>', '/Images/news-img/1717393210.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'প্রতিনিধি', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, NULL, '2024-06-03 12:40:10', '2024-06-03 12:40:10');

-- --------------------------------------------------------

--
-- Table structure for table `news_page`
--

CREATE TABLE `news_page` (
  `news_page_id` int(10) UNSIGNED NOT NULL,
  `news_page_title` varchar(100) NOT NULL,
  `news_page_slug` varchar(100) NOT NULL,
  `news_page_en_name` varchar(100) NOT NULL,
  `news_page_bn_name` varchar(100) NOT NULL,
  `news_page_en_desc` varchar(300) DEFAULT NULL,
  `news_page_bn_desc` varchar(300) DEFAULT NULL,
  `news_page_en_key` varchar(300) DEFAULT NULL,
  `news_page_bn_key` varchar(300) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `creator` int(11) NOT NULL,
  `modifier` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_page`
--

INSERT INTO `news_page` (`news_page_id`, `news_page_title`, `news_page_slug`, `news_page_en_name`, `news_page_bn_name`, `news_page_en_desc`, `news_page_bn_desc`, `news_page_en_key`, `news_page_bn_key`, `status`, `creator`, `modifier`, `created_date`, `modified_date`) VALUES
(1, 'First Page', 'first-page', 'First Page', 'প্রথম পাতা', 'First Page', 'প্রথম পাতা', 'প্রথম পাতা,First Page', NULL, 1, 1, 1, '2024-05-07 13:43:29', '2024-05-07 13:46:51'),
(2, 'End Page', 'end-page', 'End Page', 'শেষের পাতা', 'End Page', 'শেষের পাতা', 'শেষের পাতা,End Page', NULL, 1, 1, 1, '2024-05-07 13:44:18', '2024-05-07 13:44:18');

-- --------------------------------------------------------

--
-- Table structure for table `news_seo`
--

CREATE TABLE `news_seo` (
  `news_seo_id` bigint(20) UNSIGNED NOT NULL,
  `news_id` bigint(20) NOT NULL,
  `news_seo_title` varchar(300) DEFAULT NULL,
  `news_seo_description` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_series`
--

CREATE TABLE `news_series` (
  `news_series_id` int(10) UNSIGNED NOT NULL,
  `news_series_title` varchar(100) NOT NULL,
  `news_series_slug` varchar(100) NOT NULL,
  `news_series_en_name` varchar(100) NOT NULL,
  `news_series_bn_name` varchar(100) NOT NULL,
  `news_series_en_desc` varchar(300) DEFAULT NULL,
  `news_series_bn_desc` varchar(300) DEFAULT NULL,
  `news_series_en_key` varchar(300) DEFAULT NULL,
  `news_series_bn_key` varchar(300) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `creator` int(11) NOT NULL,
  `modifier` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_status`
--

CREATE TABLE `news_status` (
  `news_status_id` int(10) UNSIGNED NOT NULL,
  `news_status_title` varchar(100) NOT NULL,
  `news_status_slug` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `creator` int(11) NOT NULL,
  `modifier` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_status`
--

INSERT INTO `news_status` (`news_status_id`, `news_status_title`, `news_status_slug`, `status`, `creator`, `modifier`, `created_date`, `modified_date`) VALUES
(1, 'Public', 'public', 1, 1, 1, '2024-05-07 14:03:04', '2024-05-07 14:03:04'),
(2, 'Private', 'private', 1, 1, 1, '2024-05-07 14:03:33', '2024-05-07 14:03:33'),
(3, 'Pending', 'pending', 1, 1, 1, '2024-05-07 14:05:07', '2024-05-07 14:05:07');

-- --------------------------------------------------------

--
-- Table structure for table `news_tag`
--

CREATE TABLE `news_tag` (
  `news_tag_id` bigint(20) UNSIGNED NOT NULL,
  `news_id` bigint(20) NOT NULL,
  `news_tag_keyword` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_tag`
--

INSERT INTO `news_tag` (`news_tag_id`, `news_id`, `news_tag_keyword`) VALUES
(1, 3, 'অস্ত্র আইনের,র‍্যাব,রাজনীতি'),
(2, 4, 'ড্রিম ভিলেজ,অস্ত্র আইনের,রাজনীতি'),
(3, 1, 'ফিলিস্তিন,বিশ্ববিদ্যালয়,রাজনীতি'),
(4, 2, 'যৌন নিপীড়ন,রাজনীতি'),
(5, 5, 'ডোনাল্ড,অস্ত্র আইনের,রাজনীতি'),
(6, 6, 'বাস্তবায়নটা,রাজনীতি'),
(7, 7, 'কেন্দ্রীয় শহীদ,রাজনীতি'),
(8, 33, 'অর্থনীতি,সিপিবি,রাজনীতি'),
(9, 34, 'বিএনপি,ঢাকা বিভাগ,রাজনীতি'),
(10, 35, 'রাজনীতি'),
(11, 10, 'রাজনীতি'),
(12, 9, 'রাজনীতি');

-- --------------------------------------------------------

--
-- Table structure for table `news_type`
--

CREATE TABLE `news_type` (
  `news_type_id` int(10) UNSIGNED NOT NULL,
  `news_type_title` varchar(100) NOT NULL,
  `news_type_slug` varchar(100) NOT NULL,
  `news_type_en_name` varchar(100) NOT NULL,
  `news_type_bn_name` varchar(100) NOT NULL,
  `news_type_en_desc` varchar(300) DEFAULT NULL,
  `news_type_bn_desc` varchar(300) DEFAULT NULL,
  `news_type_en_key` varchar(300) DEFAULT NULL,
  `news_type_bn_key` varchar(300) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `creator` int(11) NOT NULL,
  `modifier` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_type`
--

INSERT INTO `news_type` (`news_type_id`, `news_type_title`, `news_type_slug`, `news_type_en_name`, `news_type_bn_name`, `news_type_en_desc`, `news_type_bn_desc`, `news_type_en_key`, `news_type_bn_key`, `status`, `creator`, `modifier`, `created_date`, `modified_date`) VALUES
(1, 'Lead News', 'lead-news', 'Lead News', 'প্রধান খবর', 'Lead News', 'প্রধান খবর', 'প্রধান খবর,Lead News', NULL, 1, 1, 1, '2024-05-07 13:54:10', '2024-05-07 13:54:10'),
(2, 'Top News', 'top-news', 'Top News', 'শীর্ষ সংবাদ', 'Top News', 'শীর্ষ সংবাদ', 'শীর্ষ সংবাদ,Top News', NULL, 1, 1, 1, '2024-05-07 13:55:06', '2024-05-07 13:55:06'),
(3, 'Selective', 'selective', 'Selective', 'নির্বাচনী', 'Selective', 'নির্বাচনী', 'Selective', NULL, 1, 1, 1, '2024-05-13 09:38:45', '2024-05-13 09:38:45'),
(4, 'Video', 'video', 'Video', 'ভিডিও', 'Video', 'ভিডিও', 'Video', NULL, 1, 1, 1, '2024-05-13 09:58:18', '2024-05-13 09:58:18'),
(5, 'Audio', 'audio', 'Audio', 'অডিও', 'Audio', 'অডিও', 'Audio', NULL, 1, 1, 1, '2024-05-13 09:59:25', '2024-05-13 09:59:25');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `role_title` varchar(100) NOT NULL,
  `role_title_bn` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `creator` int(11) NOT NULL,
  `modifier` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_title`, `role_title_bn`, `status`, `creator`, `modifier`, `created_date`, `modified_date`) VALUES
(1, 'Super Admin', 'Super Admin', 1, 1, 1, '2024-05-08 10:19:49', '2024-05-08 10:19:49');

-- --------------------------------------------------------

--
-- Table structure for table `site_common`
--

CREATE TABLE `site_common` (
  `site_common_id` int(10) UNSIGNED NOT NULL,
  `time_zone` varchar(100) DEFAULT NULL,
  `site_name` varchar(100) DEFAULT NULL,
  `site_email` varchar(100) DEFAULT NULL,
  `site_contact` varchar(100) DEFAULT NULL,
  `site_bn_contact` varchar(100) DEFAULT NULL,
  `site_title` varchar(200) DEFAULT NULL,
  `site_keyword` varchar(300) DEFAULT NULL,
  `site_description` varchar(500) DEFAULT NULL,
  `site_link` varchar(200) DEFAULT NULL,
  `site_address` varchar(200) DEFAULT NULL,
  `site_bn_address` varchar(200) DEFAULT NULL,
  `site_fb_link` varchar(300) DEFAULT NULL,
  `site_tw_link` varchar(300) DEFAULT NULL,
  `site_yt_link` varchar(300) DEFAULT NULL,
  `site_ig_link` varchar(300) DEFAULT NULL,
  `site_in_link` varchar(300) DEFAULT NULL,
  `site_spe_link` varchar(300) DEFAULT NULL,
  `site_logo` varchar(100) DEFAULT NULL,
  `site_logo_big` varchar(100) DEFAULT NULL,
  `site_favicon` varchar(100) DEFAULT NULL,
  `site_default_img` varchar(100) DEFAULT NULL,
  `site_about_title` varchar(200) DEFAULT NULL,
  `site_about_description` text DEFAULT NULL,
  `site_about_bn_title` varchar(200) DEFAULT NULL,
  `site_about_bn_description` text DEFAULT NULL,
  `site_about_img` varchar(100) DEFAULT NULL,
  `site_privacy_policy` text DEFAULT NULL,
  `site_terms` text DEFAULT NULL,
  `site_communication` text DEFAULT NULL,
  `site_bn_privacy_policy` text DEFAULT NULL,
  `site_bn_terms` text DEFAULT NULL,
  `site_bn_communication` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `creator` int(11) NOT NULL,
  `modifier` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_common`
--

INSERT INTO `site_common` (`site_common_id`, `time_zone`, `site_name`, `site_email`, `site_contact`, `site_bn_contact`, `site_title`, `site_keyword`, `site_description`, `site_link`, `site_address`, `site_bn_address`, `site_fb_link`, `site_tw_link`, `site_yt_link`, `site_ig_link`, `site_in_link`, `site_spe_link`, `site_logo`, `site_logo_big`, `site_favicon`, `site_default_img`, `site_about_title`, `site_about_description`, `site_about_bn_title`, `site_about_bn_description`, `site_about_img`, `site_privacy_policy`, `site_terms`, `site_communication`, `site_bn_privacy_policy`, `site_bn_terms`, `site_bn_communication`, `status`, `creator`, `modifier`, `created_date`, `modified_date`) VALUES
(1, 'Dhaka', 'Laldiggi', 'laldiggi@gmail.com', '01771050040', 'Laldiggi', 'Laldiggi', 'Laldiggi', 'Laldiggi', 'Laldiggi', 'Laldiggi', 'Laldiggi', 'Laldiggi', 'https://x.com/AnupamT60115918', 'Laldiggi', 'Laldiggi', 'Laldiggi', 'Laldiggi', 'Laldiggi', 'Laldiggi', 'Laldiggi', 'Laldiggi', 'Laldiggi', 'Laldiggi', 'Laldiggi', 'Laldiggi', 'Laldiggi', 'Laldiggi', 'Laldiggi', 'Laldiggi', 'Laldiggi', 'Laldiggi', 'Laldiggi', 1, 1, 1, '2024-05-06 22:55:40', '2024-06-08 14:10:10');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_cat_id` int(10) UNSIGNED NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_cat_title` varchar(100) NOT NULL,
  `sub_cat_slug` varchar(100) NOT NULL,
  `sub_cat_en_name` varchar(100) NOT NULL,
  `sub_cat_bn_name` varchar(100) NOT NULL,
  `sub_cat_en_desc` varchar(300) NOT NULL,
  `sub_cat_bn_desc` varchar(300) NOT NULL,
  `sub_cat_en_key` varchar(300) DEFAULT NULL,
  `sub_cat_bn_key` varchar(300) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `creator` int(11) NOT NULL,
  `modifier` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_cat_id`, `cat_id`, `sub_cat_title`, `sub_cat_slug`, `sub_cat_en_name`, `sub_cat_bn_name`, `sub_cat_en_desc`, `sub_cat_bn_desc`, `sub_cat_en_key`, `sub_cat_bn_key`, `status`, `creator`, `modifier`, `created_date`, `modified_date`) VALUES
(1, 2, 'Capital', 'capital', 'Capital', 'রাজধানী', 'Capital', 'রাজধানী', 'রাজধানী', NULL, 1, 1, 1, '2024-05-07 15:58:46', '2024-05-07 15:58:46'),
(2, 2, 'Crime', 'crime', 'Crime', 'অপরাধ', 'Crime', 'অপরাধ', 'অপরাধ,Crime', NULL, 1, 1, 1, '2024-05-07 15:59:48', '2024-05-07 15:59:48'),
(3, 2, 'Environment', 'environment', 'Environment', 'পরিবেশ', 'Environment', 'পরিবেশ', 'পরিবেশ,Environment', NULL, 1, 1, 1, '2024-05-07 16:02:13', '2024-05-07 16:02:13'),
(4, 3, 'TV', 'tv', 'TV', 'টেলিভিশন', 'TV', 'টেলিভিশন', 'টেলিভিশন,tv', NULL, 1, 1, 1, '2024-05-07 16:04:08', '2024-05-07 16:04:08'),
(5, 3, 'Dhallywood', 'dhallywood', 'Dhallywood', 'ঢালিউড', 'Dhallywood', 'ঢালিউড', 'ঢালিউড,Dhallywood', NULL, 1, 1, 1, '2024-05-07 16:04:56', '2024-05-07 16:04:56'),
(6, 3, 'Dollywood', 'dollywood', 'Dollywood', 'বলিউড', 'Dollywood', 'বলিউড', 'বলিউড,bollywood', NULL, 1, 1, 1, '2024-05-07 16:05:51', '2024-05-07 16:05:51'),
(7, 4, 'Cricket', 'cricket', 'Cricket', 'ক্রিকেট', 'Cricket', 'ক্রিকেট', 'ক্রিকেট,Cricket', NULL, 1, 1, 1, '2024-05-07 16:07:21', '2024-05-07 16:07:21'),
(8, 4, 'Football', 'football', 'Football', 'ফুটবল', 'Football', 'ফুটবল', 'ফুটবল,Football', NULL, 1, 1, 1, '2024-05-07 16:10:15', '2024-05-07 16:10:15'),
(9, 4, 'Tennis', 'tennis', 'Tennis', 'টেনিস', 'Tennis', 'টেনিস', 'টেনিস,Tennis', NULL, 1, 1, 1, '2024-05-07 16:10:53', '2024-05-07 16:10:53'),
(10, 6, 'Travel', 'travel', 'Travel', 'ভ্রমণ', 'Travel', 'ভ্রমণ', 'ভ্রমণ,Travel', NULL, 1, 1, 1, '2024-05-07 16:12:25', '2024-05-07 16:12:25'),
(11, 6, 'Relation', 'relation', 'Relation', 'সম্পর্ক', 'Relation', 'সম্পর্ক', 'সম্পর্ক,Relation', NULL, 1, 1, 1, '2024-05-07 16:13:46', '2024-05-07 16:13:46');

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_category`
--

CREATE TABLE `sub_sub_category` (
  `sub_sub_cat_id` int(10) UNSIGNED NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `sub_sub_cat_title` varchar(100) NOT NULL,
  `sub_sub_cat_slug` varchar(100) NOT NULL,
  `sub_sub_cat_en_name` varchar(100) NOT NULL,
  `sub_sub_cat_bn_name` varchar(100) NOT NULL,
  `sub_sub_cat_en_desc` varchar(300) NOT NULL,
  `sub_sub_cat_bn_desc` varchar(300) NOT NULL,
  `sub_sub_cat_en_key` varchar(300) DEFAULT NULL,
  `sub_sub_cat_bn_key` varchar(300) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `creator` int(11) NOT NULL,
  `modifier` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `upazila`
--

CREATE TABLE `upazila` (
  `upazila_id` int(10) UNSIGNED NOT NULL,
  `upazila_slug` varchar(80) NOT NULL,
  `district_id` tinyint(4) NOT NULL,
  `division_id` tinyint(4) NOT NULL,
  `upazila_name` varchar(70) NOT NULL,
  `upazila_bn_name` varchar(70) NOT NULL,
  `position` tinyint(4) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `creator` int(11) NOT NULL,
  `modifier` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` tinyint(4) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `creator` int(11) NOT NULL,
  `modifier` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `number`, `username`, `password`, `role_id`, `status`, `creator`, `modifier`, `created_date`, `modified_date`) VALUES
(1, 'Anupam talukder', 'anupam@gmail.com', '01771050040', 'anupam@gmail.com', '$2y$10$E2oMZNVspRLC5AsvpAo9TOfUSjh/TUbCh17Zm8gREA0zBH.wzk6Le', 1, 1, 1, 1, '2024-05-08 17:20:34', '2024-05-08 17:20:34'),
(3, 'Tanupam talukder', 'tanupam@gmail.com', '01771050041', 'tanupam@gmail.com', '$2y$10$E2oMZNVspRLC5AsvpAo9TOfUSjh/TUbCh17Zm8gREA0zBH.wzk6Le', 1, 1, 1, 1, '2024-05-08 17:20:34', '2024-05-08 17:20:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`),
  ADD UNIQUE KEY `category_cat_title_unique` (`cat_title`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`district_id`),
  ADD UNIQUE KEY `district_district_slug_unique` (`district_slug`),
  ADD UNIQUE KEY `district_district_name_unique` (`district_name`),
  ADD UNIQUE KEY `district_district_bn_name_unique` (`district_bn_name`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`division_id`),
  ADD UNIQUE KEY `division_division_slug_unique` (`division_slug`),
  ADD UNIQUE KEY `division_division_name_unique` (`division_name`),
  ADD UNIQUE KEY `division_division_bn_name_unique` (`division_bn_name`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gal_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`),
  ADD UNIQUE KEY `menu_menu_title_unique` (`menu_title`);

--
-- Indexes for table `menu_item`
--
ALTER TABLE `menu_item`
  ADD PRIMARY KEY (`menu_item_id`);

--
-- Indexes for table `menu_sub_item`
--
ALTER TABLE `menu_sub_item`
  ADD PRIMARY KEY (`menu_sub_item_id`);

--
-- Indexes for table `menu_sub_sub_item`
--
ALTER TABLE `menu_sub_sub_item`
  ADD PRIMARY KEY (`menu_sub_sub_item_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `news_page`
--
ALTER TABLE `news_page`
  ADD PRIMARY KEY (`news_page_id`),
  ADD UNIQUE KEY `news_page_news_page_title_unique` (`news_page_title`);

--
-- Indexes for table `news_seo`
--
ALTER TABLE `news_seo`
  ADD PRIMARY KEY (`news_seo_id`);

--
-- Indexes for table `news_series`
--
ALTER TABLE `news_series`
  ADD PRIMARY KEY (`news_series_id`),
  ADD UNIQUE KEY `news_series_news_series_title_unique` (`news_series_title`);

--
-- Indexes for table `news_status`
--
ALTER TABLE `news_status`
  ADD PRIMARY KEY (`news_status_id`),
  ADD UNIQUE KEY `news_status_news_status_title_unique` (`news_status_title`),
  ADD UNIQUE KEY `news_status_news_status_slug_unique` (`news_status_slug`);

--
-- Indexes for table `news_tag`
--
ALTER TABLE `news_tag`
  ADD PRIMARY KEY (`news_tag_id`);

--
-- Indexes for table `news_type`
--
ALTER TABLE `news_type`
  ADD PRIMARY KEY (`news_type_id`),
  ADD UNIQUE KEY `news_type_news_type_title_unique` (`news_type_title`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `role_role_title_unique` (`role_title`),
  ADD UNIQUE KEY `role_role_title_bn_unique` (`role_title_bn`);

--
-- Indexes for table `site_common`
--
ALTER TABLE `site_common`
  ADD PRIMARY KEY (`site_common_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_cat_id`),
  ADD UNIQUE KEY `sub_category_sub_cat_title_unique` (`sub_cat_title`);

--
-- Indexes for table `sub_sub_category`
--
ALTER TABLE `sub_sub_category`
  ADD PRIMARY KEY (`sub_sub_cat_id`),
  ADD UNIQUE KEY `sub_sub_category_sub_sub_cat_title_unique` (`sub_sub_cat_title`);

--
-- Indexes for table `upazila`
--
ALTER TABLE `upazila`
  ADD PRIMARY KEY (`upazila_id`),
  ADD UNIQUE KEY `upazila_upazila_slug_unique` (`upazila_slug`),
  ADD UNIQUE KEY `upazila_upazila_name_unique` (`upazila_name`),
  ADD UNIQUE KEY `upazila_upazila_bn_name_unique` (`upazila_bn_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_number_unique` (`number`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `district_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `division_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gal_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu_item`
--
ALTER TABLE `menu_item`
  MODIFY `menu_item_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `menu_sub_item`
--
ALTER TABLE `menu_sub_item`
  MODIFY `menu_sub_item_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `menu_sub_sub_item`
--
ALTER TABLE `menu_sub_sub_item`
  MODIFY `menu_sub_sub_item_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `news_page`
--
ALTER TABLE `news_page`
  MODIFY `news_page_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news_seo`
--
ALTER TABLE `news_seo`
  MODIFY `news_seo_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news_series`
--
ALTER TABLE `news_series`
  MODIFY `news_series_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news_status`
--
ALTER TABLE `news_status`
  MODIFY `news_status_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news_tag`
--
ALTER TABLE `news_tag`
  MODIFY `news_tag_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `news_type`
--
ALTER TABLE `news_type`
  MODIFY `news_type_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `site_common`
--
ALTER TABLE `site_common`
  MODIFY `site_common_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_cat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sub_sub_category`
--
ALTER TABLE `sub_sub_category`
  MODIFY `sub_sub_cat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `upazila`
--
ALTER TABLE `upazila`
  MODIFY `upazila_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
