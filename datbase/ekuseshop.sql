-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2019 at 12:17 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekuseshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `adds`
--

CREATE TABLE `adds` (
  `adds_id` int(11) NOT NULL,
  `adds_title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `adds_link` varchar(555) CHARACTER SET utf8 DEFAULT '#',
  `media_id` int(11) NOT NULL,
  `adds_type` varchar(7) DEFAULT 'sidebar'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adds`
--

INSERT INTO `adds` (`adds_id`, `adds_title`, `adds_link`, `media_id`, `adds_type`) VALUES
(1, 'tt', 'ttt', 406, 'home'),
(2, 'dd', 'dd', 406, 'home'),
(3, 'ggg', 'ggggggg', 406, 'home');

-- --------------------------------------------------------

--
-- Table structure for table `affiliate_information`
--

CREATE TABLE `affiliate_information` (
  `id` int(10) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `referral_website` varchar(1000) NOT NULL,
  `payment_type` int(10) NOT NULL,
  `payment_information` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `affiliate_information`
--

INSERT INTO `affiliate_information` (`id`, `user_id`, `referral_website`, `payment_type`, `payment_information`) VALUES
(1, '', 'dsfgdsfgdf', 3, 'dsfgdsf'),
(2, '123456', 'dgsdfgdf', 3, 'sdfgdsfgdf'),
(3, '123456', 'dsfgdsfgdf', 3, 'dsfgdfgdf');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `media_id` int(11) DEFAULT NULL,
  `medium_banner` int(11) DEFAULT NULL,
  `category_title` varchar(155) CHARACTER SET utf8 NOT NULL,
  `category_name` varchar(155) CHARACTER SET utf8 NOT NULL,
  `parent_id` int(11) DEFAULT 0,
  `rank_order` int(11) DEFAULT 0,
  `top_menu` varchar(1) DEFAULT '0',
  `category_gallery1` int(11) DEFAULT NULL,
  `category_gallery2` int(11) DEFAULT NULL,
  `category_gallery3` int(11) DEFAULT NULL,
  `target_url1` text CHARACTER SET utf8 DEFAULT NULL,
  `target_url2` text CHARACTER SET utf8 DEFAULT NULL,
  `target_url3` text CHARACTER SET utf8 DEFAULT NULL,
  `seo_title` text CHARACTER SET utf8 DEFAULT NULL,
  `seo_meta_title` text CHARACTER SET utf8 DEFAULT NULL,
  `seo_keywords` text CHARACTER SET utf8 DEFAULT NULL,
  `seo_content` text CHARACTER SET utf8 DEFAULT NULL,
  `seo_meta_content` text CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `media_id`, `medium_banner`, `category_title`, `category_name`, `parent_id`, `rank_order`, `top_menu`, `category_gallery1`, `category_gallery2`, `category_gallery3`, `target_url1`, `target_url2`, `target_url3`, `seo_title`, `seo_meta_title`, `seo_keywords`, `seo_content`, `seo_meta_content`) VALUES
(56, 0, 229, 'সকল পন্য', 'all-product', 0, 1, NULL, 233, 234, NULL, '#1', '#2', '', 'Sss SEO Title', 'jj', 'jj', 'jj', 'jjj'),
(58, NULL, 229, 'গৃহস্থালী পণ্য', 'home-appliance', 0, 2, NULL, 231, 230, NULL, '#1', '#2', '#3', '', '', '', '', ''),
(59, NULL, NULL, 'স্বাস্থ্য সুরক্ষা পণ্য', 'helth-care', 0, 3, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', ''),
(80, NULL, NULL, 'বেবী অ্যান্ড কিডস', 'baby-item', 0, 8, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', ''),
(81, NULL, NULL, 'ইলেকট্রনিক্স পণ্য ', 'electronics-product', 0, 4, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', ''),
(82, NULL, NULL, ' ছেলেদের শপিং ', 'mens-shopping', 0, 6, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', ''),
(83, NULL, NULL, 'মেয়েদের শপিং ', 'woment-shoping', 0, 7, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', ''),
(84, NULL, NULL, 'স্বাস্থ্য সহায়ক পন্য', 'Health products ', 84, 5, NULL, NULL, NULL, NULL, '#1', '#2', '#2', '', '', '', '', ''),
(85, NULL, NULL, 'কসমেটিক্স', 'cosmetics', 0, 9, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', ''),
(86, NULL, NULL, 'Exclusive Watch', 'watch', 0, 0, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', ''),
(88, NULL, NULL, 'curren watch', 'curren-watch', 86, 23, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', ''),
(89, NULL, NULL, 'nibosi watch', 'nibosi-watch', 86, 52, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', ''),
(90, NULL, NULL, 'women watch', 'women-watch', 86, 10, '1', NULL, NULL, NULL, '', '', '', '', '', '', '', ''),
(91, NULL, NULL, 'Gents watch', 'gents-watch', 86, 0, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', ''),
(92, NULL, NULL, ' Ladies watch ', '-ladies-watch-', 86, 0, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', ''),
(93, NULL, NULL, 'Smart Watch', 'smart-watch', 86, 0, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', ''),
(94, NULL, NULL, ' Couple Watch ', '-couple-watch-', 86, 0, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', ''),
(95, NULL, NULL, 'Kids Watch ', 'kids-watch-', 86, 0, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', ''),
(96, NULL, NULL, 'Original Brand ', 'original-brand-', 86, 0, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', ''),
(97, NULL, NULL, 'Table Clock ', 'table-clock-', 0, 0, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', ''),
(98, NULL, NULL, 'Wall Clock ', 'wall-clock-', 0, 0, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', ''),
(99, NULL, NULL, 'Projection Clock', 'projection-clock', 86, 0, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', ''),
(100, NULL, NULL, 'latest wath', 'latest-wath', 86, 5, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', ''),
(101, NULL, NULL, 'human watch', 'human-watch', 88, 0, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', ''),
(102, NULL, NULL, 'hot watch', 'hot-watch', 86, 5, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', ''),
(103, NULL, NULL, 'watc hot', 'watc-hot', 91, 9, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', ''),
(104, NULL, NULL, 'product category', 'product-category', 91, 2, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', ''),
(105, NULL, NULL, 'latest wath f', 'latest-wath-f', 86, 2, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('onos5817su1menvsb7qndu347tah1qes', '::1', 1569387496, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536393338373439363b),
('1enul402ge4snnu69q1cltiuqmeoh9q6', '::1', 1569388280, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536393338383036363b),
('ojtg37vjo1g5qs92lha5rkh8la8hg7hh', '::1', 1569388066, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536393338383036363b),
('i23iv14ck20an1gptq44rjgsbk199ec4', '::1', 1569386682, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536393338363638323b),
('1aue08dohjn0d649hrcsa4itqmomhgf5', '::1', 1569401808, 0x5f5f63695f6c6173745f726567656e65726174657c693a313536393430313739393b);

-- --------------------------------------------------------

--
-- Table structure for table `courier`
--

CREATE TABLE `courier` (
  `courier_id` int(11) NOT NULL,
  `courier_name` varchar(255) NOT NULL,
  `courier_status` tinyint(4) NOT NULL COMMENT '1 for inside 2 outside'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courier`
--

INSERT INTO `courier` (`courier_id`, `courier_name`, `courier_status`) VALUES
(1, 'sundorbob', 2);

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `expense_id` int(11) NOT NULL,
  `expense_type` text DEFAULT NULL,
  `expense_title` text DEFAULT NULL,
  `expense_total` float DEFAULT NULL,
  `expense_data` longtext DEFAULT NULL,
  `expense_summary` text DEFAULT NULL,
  `expense_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `expense_category`
--

CREATE TABLE `expense_category` (
  `expense_cat_id` int(11) NOT NULL,
  `expense_cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hitcounter`
--

CREATE TABLE `hitcounter` (
  `hitcounter_id` int(11) NOT NULL,
  `client_ip` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homeslider`
--

CREATE TABLE `homeslider` (
  `homeslider_id` int(11) NOT NULL,
  `homeslider_title` varchar(555) CHARACTER SET utf8 NOT NULL DEFAULT '#',
  `homeslider_text` text CHARACTER SET utf8 DEFAULT NULL,
  `target_url` varchar(555) CHARACTER SET utf8 NOT NULL DEFAULT '#',
  `homeslider_banner` varchar(555) CHARACTER SET utf8 NOT NULL,
  `created_time` datetime NOT NULL,
  `modified_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homeslider`
--

INSERT INTO `homeslider` (`homeslider_id`, `homeslider_title`, `homeslider_text`, `target_url`, `homeslider_banner`, `created_time`, `modified_time`) VALUES
(3, 'yyy', 'FFf', 'yyy', 'uploads/sliders/12-09-2019-lence.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'yyyyyy', 'FFf', 'gggg', 'uploads/sliders/12-09-2019-mobile.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `inquiry_id` int(11) NOT NULL,
  `name` varchar(155) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(250) NOT NULL,
  `subject` varchar(555) CHARACTER SET utf8 NOT NULL,
  `status` varchar(6) NOT NULL DEFAULT '0',
  `message` text CHARACTER SET utf8 NOT NULL,
  `created_time` datetime NOT NULL,
  `modified_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`inquiry_id`, `name`, `phone`, `subject`, `status`, `message`, `created_time`, `modified_time`) VALUES
(1, 'suzon', '', 'fff', 'unread', 'ff', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'sssssssssss', 'sssssssssssss', 'sssssssssssss', '0', 'ssssssssssssssssssss', '2019-09-12 00:00:00', '2019-09-25 00:27:00');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `media_id` int(11) NOT NULL,
  `media_title` varchar(555) CHARACTER SET utf8 DEFAULT '#',
  `media_path` varchar(555) CHARACTER SET utf8 NOT NULL,
  `product_id` int(15) NOT NULL,
  `feature_image` varchar(50) NOT NULL,
  `galery_image` varchar(50) NOT NULL,
  `created_time` datetime NOT NULL,
  `modified_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`media_id`, `media_title`, `media_path`, `product_id`, `feature_image`, `galery_image`, `created_time`, `modified_time`) VALUES
(57, 'T8 GSM Smart Watch Phone', 'uploads/16-37-03-05-09-2019-T8-GSM-Smart-Watch-Phone.jpg', 0, '', '', '2019-09-05 03:37:16', '2019-09-05 03:37:16'),
(58, 'T8 GSM Smart Watch Phone', 'uploads/16-37-03-05-09-2019-PicsArt_06-12-10.16.25-min.jpg', 0, '', '', '2019-09-05 03:37:16', '2019-09-05 03:37:16'),
(59, 'T8 GSM Smart Watch Phone', 'uploads/16-37-03-05-09-2019-PicsArt_06-12-10.16.16-min.jpg', 0, '', '', '2019-09-05 03:37:16', '2019-09-05 03:37:16'),
(60, 'ড্রিল মেশিন সেট (১২০ পিছ)', 'uploads/43-41-03-05-09-2019-dril-machine.jpg', 0, '', '', '2019-09-05 03:41:43', '2019-09-05 03:41:43'),
(61, 'Full HD 1080P স্পোর্টস অ্যাকশন ওয়াটারপ্রুফ ক্যামেরা 12MP - Black', 'uploads/52-44-03-05-09-2019-Full-HD-1080P.jpg', 0, '', '', '2019-09-05 03:44:52', '2019-09-05 03:44:52'),
(62, 'Cheerlux C6 Home Entertainment Projector', 'uploads/07-53-03-05-09-2019-Cheerlux.jpg', 0, '', '', '2019-09-05 03:53:07', '2019-09-05 03:53:07'),
(63, 'Cheerlux C6 Home Entertainment Projector', 'uploads/07-53-03-05-09-2019-Cheerlux-one.jpg', 0, '', '', '2019-09-05 03:53:07', '2019-09-05 03:53:07'),
(64, 'Cheerlux C6 Home Entertainment Projector', 'uploads/07-53-03-05-09-2019-Cheerlux-two.jpg', 0, '', '', '2019-09-05 03:53:07', '2019-09-05 03:53:07'),
(65, 'Cheerlux C6 Home Entertainment Projector', 'uploads/07-53-03-05-09-2019-Cheerlux-three.jpg', 0, '', '', '2019-09-05 03:53:07', '2019-09-05 03:53:07'),
(66, 'USB মিনি এয়ার কুলার', 'uploads/36-56-03-05-09-2019-usb-mini-air-cooler.jpg', 0, '', '', '2019-09-05 03:56:36', '2019-09-05 03:56:36'),
(67, 'USB মিনি এয়ার কুলার', 'uploads/36-56-03-05-09-2019-usb-mini-air.jpg', 0, '', '', '2019-09-05 03:56:36', '2019-09-05 03:56:36'),
(68, 'Multi-coloured umbrella', 'uploads/17-02-04-05-09-2019-Multi-coloured-umbrella.jpg', 0, '', '', '2019-09-05 04:02:17', '2019-09-05 04:02:17'),
(69, 'Multi-coloured umbrella', 'uploads/17-02-04-05-09-2019-Multi-coloured-umbrella-one.jpg', 0, '', '', '2019-09-05 04:02:17', '2019-09-05 04:02:17'),
(70, 'Multi-coloured umbrella', 'uploads/17-02-04-05-09-2019-Multi-coloured-umbrella-tewo.jpg', 0, '', '', '2019-09-05 04:02:17', '2019-09-05 04:02:17'),
(71, 'অটোমেটিক টুথপেস্ট ডিসপেন্সার', 'uploads/27-05-04-05-09-2019-automatic-toothpaste.jpg', 0, '', '', '2019-09-05 04:05:27', '2019-09-05 04:05:27'),
(72, 'অটোমেটিক টুথপেস্ট ডিসপেন্সার', 'uploads/27-05-04-05-09-2019-automatic-toothpaste-dispencer.jpg', 0, '', '', '2019-09-05 04:05:27', '2019-09-05 04:05:27'),
(73, 'Multi-function Cleaning Brush', 'uploads/44-08-04-05-09-2019-Multi-function- Cleaning-Brush.jpg', 0, '', '', '2019-09-05 04:08:44', '2019-09-05 04:08:44'),
(74, 'ইলেকট্রিক সিঙ্গেল চুলা', 'uploads/22-11-04-05-09-2019-electric-single-oven-stove.jpg', 0, '', '', '2019-09-05 04:11:22', '2019-09-05 04:11:22'),
(75, 'ড্রিম মাশরুম লাইট', 'uploads/54-14-04-05-09-2019-led-drim-light.jpg', 0, '', '', '2019-09-05 04:14:54', '2019-09-05 04:14:54'),
(76, 'দই বানানো মেশিন', 'uploads/06-20-04-05-09-2019-doi-maker.jpg', 0, '', '', '2019-09-05 04:20:06', '2019-09-05 04:20:06'),
(77, 'দই বানানো মেশিন', 'uploads/06-20-04-05-09-2019-doi-maker-two.jpg', 0, '', '', '2019-09-05 04:20:06', '2019-09-05 04:20:06'),
(78, 'দই বানানো মেশিন', 'uploads/06-20-04-05-09-2019-doi-maker-three.jpg', 0, '', '', '2019-09-05 04:20:06', '2019-09-05 04:20:06'),
(79, 'দই বানানো মেশিন', 'uploads/06-20-04-05-09-2019-doi-maker-four.jpg', 0, '', '', '2019-09-05 04:20:06', '2019-09-05 04:20:06'),
(80, ' Arctic এয়ার কুলার আলট্রা', 'uploads/20-24-04-05-09-2019-Ultra-New-Arctic-Air-Cooler.jpg', 0, '', '', '2019-09-05 04:24:20', '2019-09-05 04:24:20'),
(81, ' Arctic এয়ার কুলার আলট্রা', 'uploads/20-24-04-05-09-2019-Ultra-New-Arctic-Air.jpg', 0, '', '', '2019-09-05 04:24:20', '2019-09-05 04:24:20'),
(82, ' Arctic এয়ার কুলার আলট্রা', 'uploads/20-24-04-05-09-2019-Ultra-New-Arctic.jpg', 0, '', '', '2019-09-05 04:24:20', '2019-09-05 04:24:20'),
(83, 'Capsule Umbrella', 'uploads/43-27-04-05-09-2019-capsule-umbrella.jpg', 0, '', '', '2019-09-05 04:27:43', '2019-09-05 04:27:43'),
(84, 'Capsule Umbrella', 'uploads/43-27-04-05-09-2019-capsule-umbrella-two.jpg', 0, '', '', '2019-09-05 04:27:43', '2019-09-05 04:27:43'),
(85, 'Capsule Umbrella', 'uploads/43-27-04-05-09-2019-capsule-umbrella-three.jpg', 0, '', '', '2019-09-05 04:27:43', '2019-09-05 04:27:43'),
(86, 'Manual Meat Grinder', 'uploads/51-30-04-05-09-2019-manual-meat-grinder.jpg', 0, '', '', '2019-09-05 04:30:51', '2019-09-05 04:30:51'),
(87, 'Manual Meat Grinder', 'uploads/51-30-04-05-09-2019-manual-meat-grinder-two.jpg', 0, '', '', '2019-09-05 04:30:51', '2019-09-05 04:30:51'),
(88, 'V8 স্মার্ট ওয়াচ -সিম সাপোর্টেড', 'uploads/05-35-04-05-09-2019-v8mobil-watch.jpg', 0, '', '', '2019-09-05 04:35:05', '2019-09-05 04:35:05'),
(89, 'V8 স্মার্ট ওয়াচ -সিম সাপোর্টেড', 'uploads/05-35-04-05-09-2019-v8mobil-watch-two.jpg', 0, '', '', '2019-09-05 04:35:05', '2019-09-05 04:35:05'),
(90, 'V8 স্মার্ট ওয়াচ -সিম সাপোর্টেড', 'uploads/05-35-04-05-09-2019-v8mobil-watch-three.jpg', 0, '', '', '2019-09-05 04:35:05', '2019-09-05 04:35:05'),
(91, 'V8 স্মার্ট ওয়াচ -সিম সাপোর্টেড', 'uploads/05-35-04-05-09-2019-v8mobil-watch-four.jpg', 0, '', '', '2019-09-05 04:35:05', '2019-09-05 04:35:05'),
(92, 'Mini WiFi Wireless HD Camera 1080P', 'uploads/16-39-04-05-09-2019-mini-wifi-wireless-hd-camera-1080p.jpg', 0, '', '', '2019-09-05 04:39:16', '2019-09-05 04:39:16'),
(93, 'Mini WiFi Wireless HD Camera 1080P', 'uploads/16-39-04-05-09-2019-mini-wifi-wireless-hd-camera-1080p-two.jpg', 0, '', '', '2019-09-05 04:39:16', '2019-09-05 04:39:16'),
(94, 'Mini WiFi Wireless HD Camera 1080P', 'uploads/16-39-04-05-09-2019-mini-wifi-wireless-hd-camera-1080p-three.jpg', 0, '', '', '2019-09-05 04:39:16', '2019-09-05 04:39:16'),
(95, 'Revoflex Xtreme workout set', 'uploads/26-45-04-05-09-2019-revoflex-xtreme-workout.jpg', 0, '', '', '2019-09-05 04:45:26', '2019-09-05 04:45:26'),
(96, 'Revoflex Xtreme workout set', 'uploads/26-45-04-05-09-2019-revoflex-xtreme-workout-two.jpg', 0, '', '', '2019-09-05 04:45:26', '2019-09-05 04:45:26'),
(97, 'Revoflex Xtreme workout set', 'uploads/26-45-04-05-09-2019-revoflex-xtreme-workout-three.jpg', 0, '', '', '2019-09-05 04:45:26', '2019-09-05 04:45:26'),
(98, 'Revoflex Xtreme workout set', 'uploads/26-45-04-05-09-2019-revoflex-xtreme-workout-four.jpg', 0, '', '', '2019-09-05 04:45:26', '2019-09-05 04:45:26'),
(99, 'SERVO K07 Pen mini Cellphone', 'uploads/09-50-04-05-09-2019-pen-mini-cellphone.jpg', 0, '', '', '2019-09-05 04:50:09', '2019-09-05 04:50:09'),
(100, 'SERVO K07 Pen mini Cellphone', 'uploads/09-50-04-05-09-2019-pen-mini-cellphone-four.jpeg', 0, '', '', '2019-09-05 04:50:09', '2019-09-05 04:50:09'),
(101, 'SERVO K07 Pen mini Cellphone', 'uploads/09-50-04-05-09-2019-PicsArt_02-20-07.07.43.jpg', 0, '', '', '2019-09-05 04:50:09', '2019-09-05 04:50:09'),
(102, 'SERVO K07 Pen mini Cellphone', 'uploads/09-50-04-05-09-2019-pen-mini-cellphone-two.jpg', 0, '', '', '2019-09-05 04:50:09', '2019-09-05 04:50:09'),
(103, 'Scitech Smart Watch', 'uploads/41-53-04-05-09-2019-scitech-smart-watch.jpg', 0, '', '', '2019-09-05 04:53:41', '2019-09-05 04:53:41'),
(104, 'Scitech Smart Watch', 'uploads/41-53-04-05-09-2019-scitech-smart-watch-two.jpg', 0, '', '', '2019-09-05 04:53:41', '2019-09-05 04:53:41'),
(105, 'Scitech Smart Watch', 'uploads/41-53-04-05-09-2019-scitech-smart-watch-three.jpg', 0, '', '', '2019-09-05 04:53:41', '2019-09-05 04:53:41'),
(106, 'Bushnell Professional Binoculars', 'uploads/32-56-04-05-09-2019-bushnell-professional-binoculars.jpg', 0, '', '', '2019-09-05 04:56:32', '2019-09-05 04:56:32'),
(107, 'Bushnell Professional Binoculars', 'uploads/32-56-04-05-09-2019-bushnell-professional-binoculars-one.jpg', 0, '', '', '2019-09-05 04:56:32', '2019-09-05 04:56:32'),
(108, 'সিকিউরিটি অ্যালার্ম ক্লক', 'uploads/00-59-04-05-09-2019-alarm-Lock.jpg', 0, '', '', '2019-09-05 04:59:00', '2019-09-05 04:59:00'),
(109, 'Pretty Doomz Plus Capsules  ', 'uploads/24-02-05-05-09-2019-pretty-doomz-plus-capsules.jpg', 0, '', '', '2019-09-05 05:02:24', '2019-09-05 05:02:24'),
(110, 'Pretty Doomz Plus Capsules  ', 'uploads/24-02-05-05-09-2019-pretty-doomz-plus-capsules-two.jpg', 0, '', '', '2019-09-05 05:02:24', '2019-09-05 05:02:24'),
(111, 'পোর্টেবল ইউএসবি জুস মেকার', 'uploads/10-10-05-05-09-2019-porteble-usb-jussar.jpg', 0, '', '', '2019-09-05 05:10:10', '2019-09-05 05:10:10'),
(112, 'পোর্টেবল ইউএসবি জুস মেকার', 'uploads/10-10-05-05-09-2019-porteble-usb-jussar-two.jpg', 0, '', '', '2019-09-05 05:10:10', '2019-09-05 05:10:10'),
(113, 'পোর্টেবল ইউএসবি জুস মেকার', 'uploads/10-10-05-05-09-2019-porteble-usb-jussarthree.jpg', 0, '', '', '2019-09-05 05:10:10', '2019-09-05 05:10:10'),
(114, 'ভেজিটেবল কাটার অ্যান্ড স্লাইসার', 'uploads/59-12-05-05-09-2019-vegetable-cutter-sliceer.jpg', 0, '', '', '2019-09-05 05:12:59', '2019-09-05 05:12:59'),
(115, 'ভেজিটেবল কাটার অ্যান্ড স্লাইসার', 'uploads/59-12-05-05-09-2019-vegetable-cutter-sliceer-two.jpg', 0, '', '', '2019-09-05 05:12:59', '2019-09-05 05:12:59'),
(116, 'নাইসার ডাইসার প্লাস', 'uploads/28-15-05-05-09-2019-nicer-dicer-plus.jpg', 0, '', '', '2019-09-05 05:15:28', '2019-09-05 05:15:28'),
(117, 'নাইসার ডাইসার প্লাস', 'uploads/28-15-05-05-09-2019-nicer-dicer-plus-box.jpg', 0, '', '', '2019-09-05 05:15:28', '2019-09-05 05:15:28'),
(118, 'HUAWEI GSM WIRELESS CORDLESS PHONE', 'uploads/34-27-05-05-09-2019-huawei-gsmwire-lesscordless-phone.jpg', 0, '', '', '2019-09-05 05:27:34', '2019-09-05 05:27:34'),
(119, 'HUAWEI GSM WIRELESS CORDLESS PHONE', 'uploads/34-27-05-05-09-2019-huawei-gsmwire-lesscordless.jpg', 0, '', '', '2019-09-05 05:27:34', '2019-09-05 05:27:34'),
(120, 'Ferrari Car Mobile Phone', 'uploads/51-30-05-05-09-2019-ferrari-car-mobile-phone.jpg', 0, '', '', '2019-09-05 05:30:51', '2019-09-05 05:30:51'),
(121, 'Ferrari Car Mobile Phone', 'uploads/51-30-05-05-09-2019-ferrari-car-mobile-phone-two.jpg', 0, '', '', '2019-09-05 05:30:51', '2019-09-05 05:30:51'),
(122, ' L-Gluta 5 Berry Capsule ', 'uploads/24-36-05-05-09-2019-l-gluta-5-berry.jpg', 0, '', '', '2019-09-05 05:36:24', '2019-09-05 05:36:24'),
(123, ' L-Gluta 5 Berry Capsule ', 'uploads/24-36-05-05-09-2019-l-gluta-5-berry-br.jpg', 0, '', '', '2019-09-05 05:36:24', '2019-09-05 05:36:24'),
(124, 'রিমোট কন্ট্রোলড ইলেকট্রিক সুইচ', 'uploads/01-39-05-05-09-2019-remote-control-sweige.jpg', 0, '', '', '2019-09-05 05:39:01', '2019-09-05 05:39:01'),
(125, 'রিমোট কন্ট্রোলড ইলেকট্রিক সুইচ', 'uploads/01-39-05-05-09-2019-remote-control.jpg', 0, '', '', '2019-09-05 05:39:01', '2019-09-05 05:39:01'),
(126, 'ড্রিল মেশিন সেট (১০০ পিস)', 'uploads/36-42-05-05-09-2019-drilmachine.jpg', 0, '', '', '2019-09-05 05:42:36', '2019-09-05 05:42:36'),
(127, 'S9 RC Mini Foldable Pocket Drone', 'uploads/04-46-05-05-09-2019-s9-rc-mini-foldable-pocket-drone.jpg', 0, '', '', '2019-09-05 05:46:04', '2019-09-05 05:46:04'),
(128, 'S9 RC Mini Foldable Pocket Drone', 'uploads/04-46-05-05-09-2019-s9-rc-mini-foldable-pocket-drone-one.jpg', 0, '', '', '2019-09-05 05:46:04', '2019-09-05 05:46:04'),
(129, 'S9 RC Mini Foldable Pocket Drone', 'uploads/04-46-05-05-09-2019-s9-rc-mini-foldable-pocket-drone-two.jpg', 0, '', '', '2019-09-05 05:46:04', '2019-09-05 05:46:04'),
(130, 'S9 RC Mini Foldable Pocket Drone', 'uploads/04-46-05-05-09-2019-s9-rc-mini-foldable-pocket-drone-three.jpg', 0, '', '', '2019-09-05 05:46:04', '2019-09-05 05:46:04'),
(131, 'নাইফ শার্পনার', 'uploads/01-50-05-05-09-2019-Knife-sharpner.jpg', 0, '', '', '2019-09-05 05:50:01', '2019-09-05 05:50:01'),
(132, 'নাইফ শার্পনার', 'uploads/01-50-05-05-09-2019-Knife-sharpner-two.jpg', 0, '', '', '2019-09-05 05:50:01', '2019-09-05 05:50:01'),
(133, 'নাইফ শার্পনার', 'uploads/01-50-05-05-09-2019-Knife-sharpner-three.jpg', 0, '', '', '2019-09-05 05:50:01', '2019-09-05 05:50:01'),
(134, 'Supermoon রিচার্জ্যাবল টেবিল ফ্যান উইথ লাইট', 'uploads/39-53-05-05-09-2019-supermoon-light-fan.jpg', 0, '', '', '2019-09-05 05:53:39', '2019-09-05 05:53:39'),
(135, 'Supermoon রিচার্জ্যাবল টেবিল ফ্যান উইথ লাইট', 'uploads/39-53-05-05-09-2019-supermoon-light-fan-one.jpg', 0, '', '', '2019-09-05 05:53:39', '2019-09-05 05:53:39'),
(136, 'Supermoon রিচার্জ্যাবল টেবিল ফ্যান উইথ লাইট', 'uploads/39-53-05-05-09-2019-supermoon-light-fan-two.jpg', 0, '', '', '2019-09-05 05:53:39', '2019-09-05 05:53:39'),
(137, 'DSLR Type Mini HD Video Camera', 'uploads/35-17-06-05-09-2019-dslr-type-mini-hd-video-camera.jpg', 0, '', '', '2019-09-05 06:17:35', '2019-09-05 06:17:35'),
(138, 'Button Video Camera', 'uploads/16-25-06-05-09-2019-button-video-camera.jpg', 0, '', '', '2019-09-05 06:25:16', '2019-09-05 06:25:16'),
(139, 'Button Video Camera', 'uploads/16-25-06-05-09-2019-button-video-camera-one.jpg', 0, '', '', '2019-09-05 06:25:16', '2019-09-05 06:25:16'),
(140, ' WS1816 Wireless Bluetooth Karaoke ', 'uploads/29-28-06-05-09-2019-ws1816-wireless-bluetooth-karaoke.jpg', 0, '', '', '2019-09-05 06:28:29', '2019-09-05 06:28:29'),
(141, ' WS1816 Wireless Bluetooth Karaoke ', 'uploads/29-28-06-05-09-2019-ws1816-wireless-bluetooth-karaoke-one.jpg', 0, '', '', '2019-09-05 06:28:29', '2019-09-05 06:28:29'),
(142, ' WS1816 Wireless Bluetooth Karaoke ', 'uploads/29-28-06-05-09-2019-ws1816-wireless-bluetooth-karaoke-two.jpg', 0, '', '', '2019-09-05 06:28:29', '2019-09-05 06:28:29'),
(143, 'Mini Q7 Mini Wifi Camera', 'uploads/43-35-06-05-09-2019-mini-q7-mini-wifi-camera.jpg', 0, '', '', '2019-09-05 06:35:43', '2019-09-05 06:35:43'),
(144, 'Mini Q7 Mini Wifi Camera', 'uploads/43-35-06-05-09-2019-mini-q7-mini-wifi-camera-one.jpg', 0, '', '', '2019-09-05 06:35:43', '2019-09-05 06:35:43'),
(145, '5 Leaves Electric Clip Fan', 'uploads/05-38-06-05-09-2019-5-leaves-electric-clip-fan.jpg', 0, '', '', '2019-09-05 06:38:05', '2019-09-05 06:38:05'),
(146, '5 Leaves Electric Clip Fan', 'uploads/05-38-06-05-09-2019-5-leaves-electric-clip-fan-one.jpg', 0, '', '', '2019-09-05 06:38:05', '2019-09-05 06:38:05'),
(147, 'ইলেকট্রিক হট শাওয়ার', 'uploads/34-41-06-05-09-2019-hot-shower.jpg', 0, '', '', '2019-09-05 06:41:34', '2019-09-05 06:41:34'),
(148, 'ইলেকট্রিক হট শাওয়ার', 'uploads/34-41-06-05-09-2019-hot-shower-one.jpg', 0, '', '', '2019-09-05 06:41:34', '2019-09-05 06:41:34'),
(149, 'ইলেকট্রিক হট শাওয়ার', 'uploads/34-41-06-05-09-2019-hot-shower-two.jpg', 0, '', '', '2019-09-05 06:41:34', '2019-09-05 06:41:34'),
(150, 'ইলেকট্রিক হট শাওয়ার', 'uploads/34-41-06-05-09-2019-hot-shower-three.jpg', 0, '', '', '2019-09-05 06:41:34', '2019-09-05 06:41:34'),
(151, '45 in 1 multi screw driver set', 'uploads/14-44-06-05-09-2019-45-in-1-multi-screw-driver-set.jpg', 0, '', '', '2019-09-05 06:44:14', '2019-09-05 06:44:14'),
(152, '45 in 1 multi screw driver set', 'uploads/14-44-06-05-09-2019-45-in-1-multi-screw-driver-set-one.jpg', 0, '', '', '2019-09-05 06:44:14', '2019-09-05 06:44:14'),
(153, 'J9 সুপার মিনি ফ্লিপ ফোন', 'uploads/16-47-06-05-09-2019-j9-mini-mobile.jpg', 0, '', '', '2019-09-05 06:47:16', '2019-09-05 06:47:16'),
(154, 'J9 সুপার মিনি ফ্লিপ ফোন', 'uploads/16-47-06-05-09-2019-j9-mini-mobile-one.jpg', 0, '', '', '2019-09-05 06:47:16', '2019-09-05 06:47:16'),
(155, 'J9 সুপার মিনি ফ্লিপ ফোন', 'uploads/16-47-06-05-09-2019-j9-mini-mobile-two.jpg', 0, '', '', '2019-09-05 06:47:16', '2019-09-05 06:47:16'),
(156, 'পোর্টেবল এন্ড ফোল্ডেবল ল্যাপটপ টেবিল', 'uploads/30-49-06-05-09-2019-Portable-Foldable-Laptop-Table.jpg', 0, '', '', '2019-09-05 06:49:30', '2019-09-05 06:49:30'),
(157, 'Original Sweat Slim Belt', 'uploads/01-53-06-05-09-2019-sweat-slim-belt.jpg', 0, '', '', '2019-09-05 06:53:01', '2019-09-05 06:53:01'),
(158, 'Original Sweat Slim Belt', 'uploads/01-53-06-05-09-2019-sweat-slim-belt-two.jpg', 0, '', '', '2019-09-05 06:53:01', '2019-09-05 06:53:01'),
(159, 'Original Sweat Slim Belt', 'uploads/01-53-06-05-09-2019-sweat-slim-belt-three.jpg', 0, '', '', '2019-09-05 06:53:01', '2019-09-05 06:53:01'),
(160, 'NOKIA 3310 (2018)', 'uploads/53-56-06-05-09-2019-nokia-3310-2018.jpg', 0, '', '', '2019-09-05 06:56:53', '2019-09-05 06:56:53'),
(161, 'NOKIA 3310 (2018)', 'uploads/53-56-06-05-09-2019-nokia-3310-2018-one.jpg', 0, '', '', '2019-09-05 06:56:53', '2019-09-05 06:56:53'),
(162, 'NOKIA 3310 (2018)', 'uploads/53-56-06-05-09-2019-nokia-3310-2018-three.jpg', 0, '', '', '2019-09-05 06:56:53', '2019-09-05 06:56:53'),
(163, 'বেবী বাউন্সার ব্যলেন্স সফট', 'uploads/36-00-07-05-09-2019-baby-bouncer-balance-soft.jpg', 0, '', '', '2019-09-05 07:00:36', '2019-09-05 07:00:36'),
(164, 'বেবী বাউন্সার ব্যলেন্স সফট', 'uploads/36-00-07-05-09-2019-baby-bouncer-balance-soft-one.jpg', 0, '', '', '2019-09-05 07:00:36', '2019-09-05 07:00:36'),
(165, 'BM10 ডুয়েল সিম কার্ড', 'uploads/39-04-07-05-09-2019-bm10-duyel-sim-phone.jpg', 0, '', '', '2019-09-05 07:04:39', '2019-09-05 07:04:39'),
(166, 'BM10 ডুয়েল সিম কার্ড', 'uploads/39-04-07-05-09-2019-bm10-duyel-sim-phone-three.jpg', 0, '', '', '2019-09-05 07:04:39', '2019-09-05 07:04:39'),
(167, 'BM10 ডুয়েল সিম কার্ড', 'uploads/39-04-07-05-09-2019-bm10-duyel-sim-phone-two.jpg', 0, '', '', '2019-09-05 07:04:39', '2019-09-05 07:04:39'),
(168, 'সুপার স্লিমিং হারবস', 'uploads/34-09-07-05-09-2019-super-slim-herb.jpg', 0, '', '', '2019-09-05 07:09:34', '2019-09-05 07:09:34'),
(169, 'সুপার স্লিমিং হারবস', 'uploads/34-09-07-05-09-2019-super-slim-herbtwo.jpg', 0, '', '', '2019-09-05 07:09:34', '2019-09-05 07:09:34'),
(170, 'MI 20000mah Power Bank', 'uploads/59-12-07-05-09-2019-mi-20000mah-power-bank.jpg', 0, '', '', '2019-09-05 07:12:59', '2019-09-05 07:12:59'),
(171, 'MI 20000mah Power Bank', 'uploads/59-12-07-05-09-2019-mi-20000mah-power-bankone.jpg', 0, '', '', '2019-09-05 07:12:59', '2019-09-05 07:12:59'),
(172, 'MI 20000mah Power Bank', 'uploads/59-12-07-05-09-2019-mi-20000mah-power-bank-two.jpg', 0, '', '', '2019-09-05 07:12:59', '2019-09-05 07:12:59'),
(173, 'MI 20000mah Power Bank', 'uploads/59-12-07-05-09-2019-mi-20000mah-power-bankthree.jpg', 0, '', '', '2019-09-05 07:12:59', '2019-09-05 07:12:59'),
(174, 'Multimedia LED 1080p projector', 'uploads/04-16-07-05-09-2019-multimedia-led-1080p-projector.jpg', 0, '', '', '2019-09-05 07:16:04', '2019-09-05 07:16:04'),
(175, 'Multimedia LED 1080p projector', 'uploads/04-16-07-05-09-2019-multimedia-led-1080p-projector-one.jpg', 0, '', '', '2019-09-05 07:16:04', '2019-09-05 07:16:04'),
(176, 'ফ্রুট এন্ড ভেজিটেবল জুসার', 'uploads/54-19-07-05-09-2019-Vegetable-Juicer.jpg', 0, '', '', '2019-09-05 07:19:54', '2019-09-05 07:19:54'),
(177, 'ফ্রুট এন্ড ভেজিটেবল জুসার', 'uploads/54-19-07-05-09-2019-Vegetable-Juicer-one.jpg', 0, '', '', '2019-09-05 07:19:54', '2019-09-05 07:19:54'),
(178, 'ফ্রুট এন্ড ভেজিটেবল জুসার', 'uploads/55-19-07-05-09-2019-Vegetable-Juicer-three.jpg', 0, '', '', '2019-09-05 07:19:55', '2019-09-05 07:19:55'),
(179, 'ফ্রুট এন্ড ভেজিটেবল জুসার', 'uploads/55-19-07-05-09-2019-Vegetable-Juicertwo.jpg', 0, '', '', '2019-09-05 07:19:55', '2019-09-05 07:19:55'),
(180, '10000mah Xiaomi পাওয়ার ব্যাংক', 'uploads/44-22-07-05-09-2019-10000mah-xiaomi-power-bank.jpg', 0, '', '', '2019-09-05 07:22:44', '2019-09-05 07:22:44'),
(181, '10000mah Xiaomi পাওয়ার ব্যাংক', 'uploads/44-22-07-05-09-2019-10000mah-xiaomi-power-bank-one.jpg', 0, '', '', '2019-09-05 07:22:44', '2019-09-05 07:22:44'),
(182, 'ইলেকট্রনিক Mosquito কিলার', 'uploads/07-26-07-05-09-2019-mosquito-Killar-lamp.jpg', 0, '', '', '2019-09-05 07:26:07', '2019-09-05 07:26:07'),
(183, 'ইলেকট্রনিক Mosquito কিলার', 'uploads/07-26-07-05-09-2019-mosquito-Killar-lamp-one.jpg', 0, '', '', '2019-09-05 07:26:07', '2019-09-05 07:26:07'),
(184, 'ইলেকট্রনিক Mosquito কিলার', 'uploads/07-26-07-05-09-2019-mosquito-Killar-lamp-two.jpg', 0, '', '', '2019-09-05 07:26:07', '2019-09-05 07:26:07'),
(185, 'Rechargeable Bluetooth Karaoke Trolly Speaker', 'uploads/44-38-07-05-09-2019-rechargeable-bluetooth-karaoke.jpg', 0, '', '', '2019-09-05 07:38:44', '2019-09-05 07:38:44'),
(186, 'Rechargeable Bluetooth Karaoke Trolly Speaker', 'uploads/44-38-07-05-09-2019-rechargeable-bluetooth-karaoke-one.jpg', 0, '', '', '2019-09-05 07:38:44', '2019-09-05 07:38:44'),
(187, 'Rechargeable Bluetooth Karaoke Trolly Speaker', 'uploads/44-38-07-05-09-2019-rechargeable-bluetooth-karaoke-two.jpg', 0, '', '', '2019-09-05 07:38:44', '2019-09-05 07:38:44'),
(188, 'Mini LED Philips Projector', 'uploads/35-41-07-05-09-2019-mini-led-philips-projector.jpg', 0, '', '', '2019-09-05 07:41:35', '2019-09-05 07:41:35'),
(189, 'Mini LED Philips Projector', 'uploads/35-41-07-05-09-2019-mini-led-philips-projector-one.jpg', 0, '', '', '2019-09-05 07:41:35', '2019-09-05 07:41:35'),
(190, 'OMRON Automatic BP Monitor', 'uploads/29-44-07-05-09-2019-omron-automatic-bp-monitor.jpg', 0, '', '', '2019-09-05 07:44:29', '2019-09-05 07:44:29'),
(191, 'POSTURE ব্যাক সাপোর্ট মেরুদন্ড সোজা করে', 'uploads/24-50-07-05-09-2019-posture-back-saport.jpg', 0, '', '', '2019-09-05 07:50:24', '2019-09-05 07:50:24'),
(192, 'POSTURE ব্যাক সাপোর্ট মেরুদন্ড সোজা করে', 'uploads/24-50-07-05-09-2019-posture-back-saport-two.jpg', 0, '', '', '2019-09-05 07:50:24', '2019-09-05 07:50:24'),
(193, 'POSTURE ব্যাক সাপোর্ট মেরুদন্ড সোজা করে', 'uploads/24-50-07-05-09-2019-posture-back-saport-one.jpg', 0, '', '', '2019-09-05 07:50:24', '2019-09-05 07:50:24'),
(194, 'Kiyome kinoki detox foot pads ', 'uploads/36-54-07-05-09-2019-kiyome-kinoki-detox.jpg', 0, '', '', '2019-09-05 07:54:36', '2019-09-05 07:54:36'),
(195, 'Kiyome kinoki detox foot pads ', 'uploads/37-54-07-05-09-2019-kiyome-kinoki-detox-one.jpg', 0, '', '', '2019-09-05 07:54:37', '2019-09-05 07:54:37'),
(196, 'Kiyome kinoki detox foot pads ', 'uploads/37-54-07-05-09-2019-kiyome-kinoki-detox-two.jpg', 0, '', '', '2019-09-05 07:54:37', '2019-09-05 07:54:37'),
(197, 'Kiyome kinoki detox foot pads ', 'uploads/37-54-07-05-09-2019-kiyome-kinoki-detox-three.jpg', 0, '', '', '2019-09-05 07:54:37', '2019-09-05 07:54:37'),
(198, '4 in 1 ইলেকট্রিক সুইয়িং মেশিন', 'uploads/27-58-07-05-09-2019-swing-machine.jpg', 0, '', '', '2019-09-05 07:58:27', '2019-09-05 07:58:27'),
(199, '4 in 1 ইলেকট্রিক সুইয়িং মেশিন', 'uploads/27-58-07-05-09-2019-swing-machine-one.jpg', 0, '', '', '2019-09-05 07:58:27', '2019-09-05 07:58:27'),
(200, 'অ্যাল্যুমিনিয়াম কিচেন র‍্যাক', 'uploads/52-01-08-05-09-2019-aluminiyam-rack.jpg', 0, '', '', '2019-09-05 08:01:52', '2019-09-05 08:01:52'),
(201, 'অ্যাল্যুমিনিয়াম কিচেন র‍্যাক', 'uploads/52-01-08-05-09-2019-aluminiyam-rack-two.jpg', 0, '', '', '2019-09-05 08:01:52', '2019-09-05 08:01:52'),
(202, 'অ্যাল্যুমিনিয়াম কিচেন র‍্যাক', 'uploads/52-01-08-05-09-2019-aluminiyam-rack-three.jpg', 0, '', '', '2019-09-05 08:01:52', '2019-09-05 08:01:52'),
(203, 'অ্যাল্যুমিনিয়াম কিচেন র‍্যাক', 'uploads/52-01-08-05-09-2019-aluminiyam-rack-four.jpg', 0, '', '', '2019-09-05 08:01:52', '2019-09-05 08:01:52'),
(204, 'Wireless Headset Sunglasses', 'uploads/29-05-08-05-09-2019-wireless-headset-sunglasses.jpg', 0, '', '', '2019-09-05 08:05:29', '2019-09-05 08:05:29'),
(205, 'Wireless Headset Sunglasses', 'uploads/29-05-08-05-09-2019-wireless-headset-sunglasses-one.jpg', 0, '', '', '2019-09-05 08:05:29', '2019-09-05 08:05:29'),
(206, 'Wireless Headset Sunglasses', 'uploads/29-05-08-05-09-2019-wireless-headset-sunglassestwo.jpg', 0, '', '', '2019-09-05 08:05:29', '2019-09-05 08:05:29'),
(207, 'Wireless Headset Sunglasses', 'uploads/29-05-08-05-09-2019-wireless-headset-sunglasses-three.jpg', 0, '', '', '2019-09-05 08:05:29', '2019-09-05 08:05:29'),
(208, 'VIBRO-SHAPE স্লিমিং বেল্ট', 'uploads/44-08-08-05-09-2019-vibro-shape.jpg', 0, '', '', '2019-09-05 08:08:44', '2019-09-05 08:08:44'),
(209, 'GM50 মিনি LED প্রোজেক্টর 150 Lumen', 'uploads/21-11-08-05-09-2019-gm50-mini-led-projector-150-lumen.jpg', 0, '', '', '2019-09-05 08:11:21', '2019-09-05 08:11:21'),
(210, 'GM50 মিনি LED প্রোজেক্টর 150 Lumen', 'uploads/21-11-08-05-09-2019-gm50-mini-led-projector-150-lumen-one.jpg', 0, '', '', '2019-09-05 08:11:21', '2019-09-05 08:11:21'),
(211, 'GM50 মিনি LED প্রোজেক্টর 150 Lumen', 'uploads/21-11-08-05-09-2019-gm50-mini-led-projector-150-lumen-two.jpg', 0, '', '', '2019-09-05 08:11:21', '2019-09-05 08:11:21'),
(212, '6 in 1 Magnative Sunglass', 'uploads/40-14-08-05-09-2019-magnative-sunglass.jpg', 0, '', '', '2019-09-05 08:14:40', '2019-09-05 08:14:40'),
(213, '6 in 1 Magnative Sunglass', 'uploads/40-14-08-05-09-2019-magnative-sunglass-two.jpg', 0, '', '', '2019-09-05 08:14:40', '2019-09-05 08:14:40'),
(214, '6 in 1 Magnative Sunglass', 'uploads/40-14-08-05-09-2019-magnative-sunglass-three.jpg', 0, '', '', '2019-09-05 08:14:40', '2019-09-05 08:14:40'),
(215, 'A8 Mini সিম ডিভাইস ভয়েস ট্র্যাকার', 'uploads/58-17-08-05-09-2019-mini-a8-sim-divice.jpg', 0, '', '', '2019-09-05 08:17:58', '2019-09-05 08:17:58'),
(216, 'A8 Mini সিম ডিভাইস ভয়েস ট্র্যাকার', 'uploads/58-17-08-05-09-2019-mini-a8-sim-divice-one.jpg', 0, '', '', '2019-09-05 08:17:58', '2019-09-05 08:17:58'),
(217, 'M4 স্মার্ট ব্রেসলেট ব্যান্ড ফিটনেস ট্র্যাকার', 'uploads/54-20-08-05-09-2019-m4-smart-band.jpg', 0, '', '', '2019-09-05 08:20:54', '2019-09-05 08:20:54'),
(218, 'M4 স্মার্ট ব্রেসলেট ব্যান্ড ফিটনেস ট্র্যাকার', 'uploads/54-20-08-05-09-2019-m4-smart-band-one.jpg', 0, '', '', '2019-09-05 08:20:54', '2019-09-05 08:20:54'),
(219, 'M4 স্মার্ট ব্রেসলেট ব্যান্ড ফিটনেস ট্র্যাকার', 'uploads/54-20-08-05-09-2019-m4-smart-band-two.jpg', 0, '', '', '2019-09-05 08:20:54', '2019-09-05 08:20:54'),
(220, 'M4 স্মার্ট ব্রেসলেট ব্যান্ড ফিটনেস ট্র্যাকার', 'uploads/54-20-08-05-09-2019-m4-smart-band-three.jpg', 0, '', '', '2019-09-05 08:20:54', '2019-09-05 08:20:54'),
(221, 'Bestway Double Mattress Air Bed', 'uploads/58-08-11-06-09-2019-bestway-double-mattress-air-bed.jpg', 0, '', '', '2019-09-06 11:08:58', '2019-09-06 11:08:58'),
(222, 'Bestway Double Mattress Air Bed', 'uploads/58-08-11-06-09-2019-bestway-double-mattress-air-bed-one.jpg', 0, '', '', '2019-09-06 11:08:58', '2019-09-06 11:08:58'),
(223, 'Electric Egg Bitter', 'uploads/25-14-11-06-09-2019-electric-egg-bitter.jpg', 0, '', '', '2019-09-06 11:14:25', '2019-09-06 11:14:25'),
(224, 'Electric Egg Bitter', 'uploads/25-14-11-06-09-2019-electric-egg-bitter-one.jpg', 0, '', '', '2019-09-06 11:14:25', '2019-09-06 11:14:25'),
(225, 'S7 LED Night Vision RC Drone ', 'uploads/40-19-11-06-09-2019-s7-led-night-vision-rc-drone.jpg', 0, '', '', '2019-09-06 11:19:40', '2019-09-06 11:19:40'),
(226, 'S7 LED Night Vision RC Drone ', 'uploads/40-19-11-06-09-2019-s7-led-night-vision-rc-drone-two.jpg', 0, '', '', '2019-09-06 11:19:40', '2019-09-06 11:19:40'),
(227, 'S7 LED Night Vision RC Drone ', 'uploads/40-19-11-06-09-2019-s7-led-night-vision-rc-drone-three.jpg', 0, '', '', '2019-09-06 11:19:40', '2019-09-06 11:19:40'),
(228, 'kalerhaatlogo', 'uploads/06-09-2019-logo.png', 0, '', '', '2019-09-06 01:22:51', '0000-00-00 00:00:00'),
(229, 'SQ11 Mini Camera 1080P HD DVR - Black', 'uploads/26-23-11-06-09-2019-sq11-mini-camera.jpg', 0, '', '', '2019-09-06 11:23:26', '2019-09-06 11:23:26'),
(230, 'SQ11 Mini Camera 1080P HD DVR - Black', 'uploads/26-23-11-06-09-2019-sq11-mini-camera-two.jpg', 0, '', '', '2019-09-06 11:23:26', '2019-09-06 11:23:26'),
(231, 'SQ11 Mini Camera 1080P HD DVR - Black', 'uploads/26-23-11-06-09-2019-sq11-mini-camera-three.jpg', 0, '', '', '2019-09-06 11:23:26', '2019-09-06 11:23:26'),
(232, 'SQ11 Mini Camera 1080P HD DVR - Black', 'uploads/26-23-11-06-09-2019-sq11-mini-camera-one.jpg', 0, '', '', '2019-09-06 11:23:26', '2019-09-06 11:23:26'),
(233, 'Panasonic সাপোর্টেড ল্যান্ডফোন 2 সিম', 'uploads/33-26-11-06-09-2019-panasonic-sapoted-landphone.jpg', 0, '', '', '2019-09-06 11:26:33', '2019-09-06 11:26:33'),
(234, 'Panasonic সাপোর্টেড ল্যান্ডফোন 2 সিম', 'uploads/33-26-11-06-09-2019-panasonic-sapoted-landphone-one.jpg', 0, '', '', '2019-09-06 11:26:33', '2019-09-06 11:26:33'),
(235, 'N11 Mini GSM/GPRS/GPS Tracker (Magnetic)', 'uploads/30-30-11-06-09-2019-n11-mini-gsm-gprs-gps-tracker.jpg', 0, '', '', '2019-09-06 11:30:30', '2019-09-06 11:30:30'),
(236, 'N11 Mini GSM/GPRS/GPS Tracker (Magnetic)', 'uploads/30-30-11-06-09-2019-n11-mini-gsm-gprs-gps-tracker-one.jpg', 0, '', '', '2019-09-06 11:30:30', '2019-09-06 11:30:30'),
(237, 'N11 Mini GSM/GPRS/GPS Tracker (Magnetic)', 'uploads/30-30-11-06-09-2019-n11-mini-gsm-gprs-gps-tracker-three.jpg', 0, '', '', '2019-09-06 11:30:30', '2019-09-06 11:30:30'),
(238, 'N11 Mini GSM/GPRS/GPS Tracker (Magnetic)', 'uploads/30-30-11-06-09-2019-n11-mini-gsm-gprs-gps-tracker-two.jpg', 0, '', '', '2019-09-06 11:30:30', '2019-09-06 11:30:30'),
(239, 'স্পাই ভিডিও ওয়াচ 32GB', 'uploads/28-34-11-06-09-2019-video-watch-32gb.jpg', 0, '', '', '2019-09-06 11:34:28', '2019-09-06 11:34:28'),
(240, 'স্পাই ভিডিও ওয়াচ 32GB', 'uploads/28-34-11-06-09-2019-video-watch-32gb-one.jpg', 0, '', '', '2019-09-06 11:34:28', '2019-09-06 11:34:28'),
(241, 'স্পাই ভিডিও ওয়াচ 32GB', 'uploads/28-34-11-06-09-2019-video-watch-32gb-two.jpg', 0, '', '', '2019-09-06 11:34:28', '2019-09-06 11:34:28'),
(242, 'স্পাই ভিডিও ওয়াচ 32GB-(Raber Belt)', 'uploads/05-38-11-06-09-2019-video-watch-32gb-raber-belt.jpg', 0, '', '', '2019-09-06 11:38:05', '2019-09-06 11:38:05'),
(243, 'স্পাই ভিডিও ওয়াচ 32GB-(Raber Belt)', 'uploads/05-38-11-06-09-2019-video-watch-32gb-raber-belt-two.jpg', 0, '', '', '2019-09-06 11:38:05', '2019-09-06 11:38:05'),
(244, '2 in 1 Nima ইলেকট্রিক স্পাইস গ্রাইন্ডার ', 'uploads/32-42-11-06-09-2019-2-in-1-nima-grander.jpg', 0, '', '', '2019-09-06 11:42:32', '2019-09-06 11:42:32'),
(245, '2 in 1 Nima ইলেকট্রিক স্পাইস গ্রাইন্ডার ', 'uploads/32-42-11-06-09-2019-2-in-1-nima-grander-one.jpg', 0, '', '', '2019-09-06 11:42:32', '2019-09-06 11:42:32'),
(246, '2 in 1 Nima ইলেকট্রিক স্পাইস গ্রাইন্ডার ', 'uploads/32-42-11-06-09-2019-2-in-1-nima-grander-two.jpg', 0, '', '', '2019-09-06 11:42:32', '2019-09-06 11:42:32'),
(247, 'Xiaomi Mi Band 4 Smart Fitness Band', 'uploads/12-46-11-06-09-2019-xiaomi-mi-band-4-smart-fitness-band.jpg', 0, '', '', '2019-09-06 11:46:12', '2019-09-06 11:46:12'),
(248, 'Xiaomi Mi Band 4 Smart Fitness Band', 'uploads/12-46-11-06-09-2019-xiaomi-mi-band-4-smart-fitness-band-one.jpg', 0, '', '', '2019-09-06 11:46:12', '2019-09-06 11:46:12'),
(249, 'Xiaomi Mi Band 4 Smart Fitness Band', 'uploads/12-46-11-06-09-2019-xiaomi-mi-band-4-smart-fitness-band-two.jpg', 0, '', '', '2019-09-06 11:46:12', '2019-09-06 11:46:12'),
(250, 'Xiaomi Mi Band 4 Smart Fitness Band', 'uploads/12-46-11-06-09-2019-xiaomi-mi-band-4-smart-fitness-band-three.jpg', 0, '', '', '2019-09-06 11:46:12', '2019-09-06 11:46:12'),
(251, 'Haodier Crossbody Fashion Bag', 'uploads/31-50-11-06-09-2019-haodier-fashion-bag.jpg', 0, '', '', '2019-09-06 11:50:31', '2019-09-06 11:50:31'),
(252, 'Haodier Crossbody Fashion Bag', 'uploads/31-50-11-06-09-2019-haodier-fashion-bag-one.jpg', 0, '', '', '2019-09-06 11:50:31', '2019-09-06 11:50:31'),
(253, 'Haodier Crossbody Fashion Bag', 'uploads/31-50-11-06-09-2019-haodier-fashion-bag-two.jpg', 0, '', '', '2019-09-06 11:50:31', '2019-09-06 11:50:31'),
(254, 'Haodier Crossbody Fashion Bag', 'uploads/31-50-11-06-09-2019-haodier-fashion-bag-three.jpg', 0, '', '', '2019-09-06 11:50:31', '2019-09-06 11:50:31'),
(255, 'Long Height Capsule(লম্বা হওয়ার ভিটামিন)', 'uploads/21-53-11-06-09-2019-long-height-capsule.jpg', 0, '', '', '2019-09-06 11:53:21', '2019-09-06 11:53:21'),
(256, 'Car Back Seat Organizer Holder', 'uploads/44-55-11-06-09-2019-car.jpg', 0, '', '', '2019-09-06 11:55:44', '2019-09-06 11:55:44'),
(257, 'Slim N Lift স্লিমিং ভেস্ট (ফর মেন)', 'uploads/14-58-11-06-09-2019-slim-n-lift2.jpg', 0, '', '', '2019-09-06 11:58:14', '2019-09-06 11:58:14'),
(258, 'Slim N Lift স্লিমিং ভেস্ট (ফর মেন)', 'uploads/14-58-11-06-09-2019-slim-n-lift2-one.jpg', 0, '', '', '2019-09-06 11:58:14', '2019-09-06 11:58:14'),
(259, 'Q7 ব্লুটুথ মাইক্রোফোন স্পীকার', 'uploads/48-01-12-06-09-2019-q7-Speakar.jpg', 0, '', '', '2019-09-06 12:01:48', '2019-09-06 12:01:48'),
(260, 'Q7 ব্লুটুথ মাইক্রোফোন স্পীকার', 'uploads/48-01-12-06-09-2019-q7-Speakar-one.jpg', 0, '', '', '2019-09-06 12:01:48', '2019-09-06 12:01:48'),
(261, 'Q7 ব্লুটুথ মাইক্রোফোন স্পীকার', 'uploads/48-01-12-06-09-2019-q7-Speakar-two.jpg', 0, '', '', '2019-09-06 12:01:48', '2019-09-06 12:01:48'),
(262, 'ম্যাজিক সিলিকন ডিশ ওয়াশিং গ্লাভস ', 'uploads/04-05-12-06-09-2019-magic-silicone-gloves.jpg', 0, '', '', '2019-09-06 12:05:04', '2019-09-06 12:05:04'),
(263, 'ম্যাজিক সিলিকন ডিশ ওয়াশিং গ্লাভস ', 'uploads/04-05-12-06-09-2019-magic-silicone-gloves-one.jpg', 0, '', '', '2019-09-06 12:05:04', '2019-09-06 12:05:04'),
(264, 'ম্যাজিক সিলিকন ডিশ ওয়াশিং গ্লাভস ', 'uploads/04-05-12-06-09-2019-magic-silicone-gloves-two.jpg', 0, '', '', '2019-09-06 12:05:04', '2019-09-06 12:05:04'),
(265, 'ম্যাজিক সিলিকন ডিশ ওয়াশিং গ্লাভস ', 'uploads/04-05-12-06-09-2019-magic-silicone-gloves-three.jpg', 0, '', '', '2019-09-06 12:05:04', '2019-09-06 12:05:04'),
(266, 'ফুট ম্যাসাজার', 'uploads/41-08-12-06-09-2019-foot-massager.jpg', 0, '', '', '2019-09-06 12:08:41', '2019-09-06 12:08:41'),
(267, 'ফুট ম্যাসাজার', 'uploads/41-08-12-06-09-2019-foot-massager-one.jpg', 0, '', '', '2019-09-06 12:08:41', '2019-09-06 12:08:41'),
(268, 'ফুট ম্যাসাজার', 'uploads/41-08-12-06-09-2019-foot-massager-three.jpg', 0, '', '', '2019-09-06 12:08:41', '2019-09-06 12:08:41'),
(269, 'ফুট ম্যাসাজার', 'uploads/41-08-12-06-09-2019-foot-massager-two.jpg', 0, '', '', '2019-09-06 12:08:41', '2019-09-06 12:08:41'),
(270, 'আকুপাংচার ফুট মেসেজ সুজ', 'uploads/12-13-12-06-09-2019-foot-reflex-footwear.jpg', 0, '', '', '2019-09-06 12:13:12', '2019-09-06 12:13:12'),
(271, 'আকুপাংচার ফুট মেসেজ সুজ', 'uploads/12-13-12-06-09-2019-foot-reflex-footwear-one.jpg', 0, '', '', '2019-09-06 12:13:12', '2019-09-06 12:13:12'),
(272, 'আকুপাংচার ফুট মেসেজ সুজ', 'uploads/12-13-12-06-09-2019-foot-reflex-footwear-two.jpg', 0, '', '', '2019-09-06 12:13:12', '2019-09-06 12:13:12'),
(273, 'ওয়্যারলেস WiFi ভিডিও ক্যামেরা ডোরবেল', 'uploads/09-16-12-06-09-2019-doorbell-1080p-hd-security-camera.jpg', 0, '', '', '2019-09-06 12:16:09', '2019-09-06 12:16:09'),
(274, 'ওয়্যারলেস WiFi ভিডিও ক্যামেরা ডোরবেল', 'uploads/09-16-12-06-09-2019-doorbell-1080p-hd-security-camera-two.jpg', 0, '', '', '2019-09-06 12:16:09', '2019-09-06 12:16:09'),
(275, 'ওয়্যারলেস WiFi ভিডিও ক্যামেরা ডোরবেল', 'uploads/09-16-12-06-09-2019-doorbell-1080p-hd-security-camera-three.jpg', 0, '', '', '2019-09-06 12:16:09', '2019-09-06 12:16:09'),
(276, 'Nima ইলেকট্রিক স্পাইস গ্রাইন্ডার', 'uploads/38-18-12-06-09-2019-nima-electic-grander.jpg', 0, '', '', '2019-09-06 12:18:38', '2019-09-06 12:18:38'),
(277, 'Nima ইলেকট্রিক স্পাইস গ্রাইন্ডার', 'uploads/38-18-12-06-09-2019-nima-electic-grander-two.jpg', 0, '', '', '2019-09-06 12:18:38', '2019-09-06 12:18:38'),
(278, 'Swan স্টেইনলেস স্টিল কফি স্পুন', 'uploads/13-21-12-06-09-2019-swan-span-set-stainless-steel.jpg', 0, '', '', '2019-09-06 12:21:13', '2019-09-06 12:21:13'),
(279, 'Kemei ট্রিমার PG-100', 'uploads/52-23-12-06-09-2019-kemei-trimar-pg-100.jpg', 0, '', '', '2019-09-06 12:23:52', '2019-09-06 12:23:52'),
(280, 'Lunch Box - Electric Auto heater', 'uploads/14-26-12-06-09-2019-electric-auto-heater.jpg', 0, '', '', '2019-09-06 12:26:14', '2019-09-06 12:26:14'),
(281, 'Plastic Corner Triangle Shelf(3pcs)', 'uploads/59-28-12-06-09-2019-plastic-corner-triangle.jpg', 0, '', '', '2019-09-06 12:28:59', '2019-09-06 12:28:59'),
(282, 'Plastic Corner Triangle Shelf(3pcs)', 'uploads/59-28-12-06-09-2019-plastic-corner-triangle-one.jpg', 0, '', '', '2019-09-06 12:28:59', '2019-09-06 12:28:59'),
(283, 'Plastic Corner Triangle Shelf(3pcs)', 'uploads/59-28-12-06-09-2019-plastic-corner-triangle-two.jpg', 0, '', '', '2019-09-06 12:28:59', '2019-09-06 12:28:59'),
(284, 'Weight Loss Capsule MAX 7', 'uploads/46-30-12-06-09-2019-weight-loss-capsule.jpg', 0, '', '', '2019-09-06 12:30:46', '2019-09-06 12:30:46'),
(285, 'Jamaican Black Castor Oil', 'uploads/14-33-12-06-09-2019-black-castor-oil.jpg', 0, '', '', '2019-09-06 12:33:14', '2019-09-06 12:33:14'),
(286, 'Jamaican Black Castor Oil', 'uploads/14-33-12-06-09-2019-black-castor-oil-one.jpg', 0, '', '', '2019-09-06 12:33:14', '2019-09-06 12:33:14'),
(287, 'Flawless Facial Hair Remover', 'uploads/50-35-12-06-09-2019-facial-hair-remover.jpg', 0, '', '', '2019-09-06 12:35:50', '2019-09-06 12:35:50'),
(288, 'Flawless Facial Hair Remover', 'uploads/50-35-12-06-09-2019-facial-hair-remover-one.jpg', 0, '', '', '2019-09-06 12:35:50', '2019-09-06 12:35:50'),
(289, 'Maya Breast Firming Cream 100g.', 'uploads/36-39-12-06-09-2019-maya-breast-100g.jpg', 0, '', '', '2019-09-06 12:39:36', '2019-09-06 12:39:36'),
(290, 'BIOAQUA Snail repair & brightening Skincare', 'uploads/20-43-12-06-09-2019-bioaqua-snail-brightening.jpg', 0, '', '', '2019-09-06 12:43:20', '2019-09-06 12:43:20'),
(291, 'MISS BELT বডি শেপার', 'uploads/10-46-12-06-09-2019-miss-belt.jpg', 0, '', '', '2019-09-06 12:46:10', '2019-09-06 12:46:10'),
(292, '12 in 1Spice Rack', 'uploads/21-48-12-06-09-2019-spice-rack.jpg', 0, '', '', '2019-09-06 12:48:21', '2019-09-06 12:48:21'),
(293, ' ফ্রুট অ্যান্ড ভেজিটেবল জুসার', 'uploads/33-50-12-06-09-2019-Jussar.jpg', 0, '', '', '2019-09-06 12:50:33', '2019-09-06 12:50:33'),
(294, 'APPLE স্মার্ট ওয়াচ (কপি)-সিম সাপোর্টেড', 'uploads/13-52-12-06-09-2019-apple-smart-watch.jpg', 0, '', '', '2019-09-06 12:52:13', '2019-09-06 12:52:13'),
(295, 'WaxVac ইয়ার ক্লিনার', 'uploads/10-54-12-06-09-2019-waxvac.jpg', 0, '', '', '2019-09-06 12:54:10', '2019-09-06 12:54:10'),
(296, 'ভার্চুয়াল রিয়ালিটি 3D গ্লাস', 'uploads/12-56-12-06-09-2019-3d-glasses-for-smartphone.jpg', 0, '', '', '2019-09-06 12:56:12', '2019-09-06 12:56:12'),
(297, 'ডিজিটাল ব্লাড প্রেসার মনিটর', 'uploads/16-59-12-06-09-2019-pasher-machin.jpg', 0, '', '', '2019-09-06 12:59:16', '2019-09-06 12:59:16'),
(298, 'ডিজিটাল ব্লাড প্রেসার মনিটর', 'uploads/16-59-12-06-09-2019-pasher-machin-one.jpg', 0, '', '', '2019-09-06 12:59:16', '2019-09-06 12:59:16'),
(299, 'VWash Plus Intimate Hygiene Wash - 100 ml', 'uploads/21-58-02-06-09-2019-vwash-plus-intimate.jpg', 0, '', '', '2019-09-06 02:58:21', '2019-09-06 02:58:21'),
(300, 'VWash Plus Intimate Hygiene Wash - 100 ml', 'uploads/21-58-02-06-09-2019-vwash-plus-intimate-last.jpg', 0, '', '', '2019-09-06 02:58:21', '2019-09-06 02:58:21'),
(301, 'VWash Plus Intimate Hygiene Wash - 100 ml', 'uploads/21-58-02-06-09-2019-vwash-plus-intimate-one.jpg', 0, '', '', '2019-09-06 02:58:21', '2019-09-06 02:58:21'),
(302, 'VWash Plus Intimate Hygiene Wash - 100 ml', 'uploads/21-58-02-06-09-2019-vwash-plus-intimate-two.jpg', 0, '', '', '2019-09-06 02:58:21', '2019-09-06 02:58:21'),
(303, 'Virgin Again Vagina', 'uploads/47-00-03-06-09-2019-virgin-again-vagina.jpg', 0, '', '', '2019-09-06 03:00:47', '2019-09-06 03:00:47'),
(304, 'Virgin Again Vagina', 'uploads/47-00-03-06-09-2019-virgin-again-vagina-one.jpg', 0, '', '', '2019-09-06 03:00:47', '2019-09-06 03:00:47'),
(305, 'HP ষ্টীল বডি পেনড্রাইভ - 32GB', 'uploads/12-03-03-06-09-2019-HP-Steel-Body-Pen-Drive.jpg', 0, '', '', '2019-09-06 03:03:12', '2019-09-06 03:03:12'),
(306, 'HP ষ্টীল বডি পেনড্রাইভ - 32GB', 'uploads/12-03-03-06-09-2019-HP-Steel-Body-Pen-Drive-one.jpg', 0, '', '', '2019-09-06 03:03:12', '2019-09-06 03:03:12'),
(307, 'Caboki hair Building Fiber', 'uploads/36-05-03-06-09-2019-cabokihairbuildingfiber.jpg', 0, '', '', '2019-09-06 03:05:36', '2019-09-06 03:05:36'),
(308, 'Toppik hair building fibers ', 'uploads/48-09-03-06-09-2019-toppik-hair-building-fibers.jpg', 0, '', '', '2019-09-06 03:09:48', '2019-09-06 03:09:48'),
(309, 'Toppik hair building fibers ', 'uploads/48-09-03-06-09-2019-toppik-hair-building-fibers-one.jpg', 0, '', '', '2019-09-06 03:09:48', '2019-09-06 03:09:48'),
(310, 'Toppik hair building fibers ', 'uploads/48-09-03-06-09-2019-toppik-hair-building-fibers-two.jpg', 0, '', '', '2019-09-06 03:09:48', '2019-09-06 03:09:48'),
(311, 'Magic Capsul Cutter ', 'uploads/20-12-03-06-09-2019-magic-capsul-cutter.jpg', 0, '', '', '2019-09-06 03:12:20', '2019-09-06 03:12:20'),
(312, 'Magic Capsul Cutter ', 'uploads/20-12-03-06-09-2019-magic-capsul-cutter-two.jpg', 0, '', '', '2019-09-06 03:12:20', '2019-09-06 03:12:20'),
(313, 'Kemei Professional 2 in 1 Hair Straightening-KM1055', 'uploads/32-14-03-06-09-2019-kemei-professional.jpg', 0, '', '', '2019-09-06 03:14:32', '2019-09-06 03:14:32'),
(314, 'Kemei Professional 2 in 1 Hair Straightening-KM1055', 'uploads/32-14-03-06-09-2019-kemei-professional-one.jpg', 0, '', '', '2019-09-06 03:14:32', '2019-09-06 03:14:32'),
(315, 'ডিজিটাল পেন হোল্ডার ক্লক', 'uploads/54-16-03-06-09-2019-digital-pen-holder.jpg', 0, '', '', '2019-09-06 03:16:54', '2019-09-06 03:16:54'),
(316, 'BOYA BY-MM1 Universal Cardiod Shotgun Microphone', 'uploads/58-19-03-06-09-2019-boya-by-mm1-universal-cardiod.jpg', 0, '', '', '2019-09-06 03:19:58', '2019-09-06 03:19:58'),
(317, 'BOYA BY-MM1 Universal Cardiod Shotgun Microphone', 'uploads/58-19-03-06-09-2019-boya-by-mm1-universal-cardiod-one.jpg', 0, '', '', '2019-09-06 03:19:58', '2019-09-06 03:19:58'),
(318, 'BOYA BY-MM1 Universal Cardiod Shotgun Microphone', 'uploads/58-19-03-06-09-2019-boya-by-mm1-universal-cardiod-two.jpg', 0, '', '', '2019-09-06 03:19:58', '2019-09-06 03:19:58'),
(319, 'BOYA BY-MM1 Universal Cardiod Shotgun Microphone', 'uploads/58-19-03-06-09-2019-boya-by-mm1-universal-cardiod-three.jpg', 0, '', '', '2019-09-06 03:19:58', '2019-09-06 03:19:58'),
(320, 'Q18 Smart watch (Golden)', 'uploads/42-22-03-06-09-2019-q18-smart-watch-golden.jpg', 0, '', '', '2019-09-06 03:22:42', '2019-09-06 03:22:42'),
(321, 'Q18 Smart watch (Golden)', 'uploads/42-22-03-06-09-2019-q18-smart-watch-golden-two.jpg', 0, '', '', '2019-09-06 03:22:42', '2019-09-06 03:22:42'),
(322, 'ব্রাইটিনিং গূলটা সেট', 'uploads/37-24-03-06-09-2019-Brightening-white-gluta-set.jpg', 0, '', '', '2019-09-06 03:24:37', '2019-09-06 03:24:37'),
(323, 'Cathy doll sexy soon', 'uploads/40-29-03-06-09-2019-cathy-doll-sexy-soon.jpg', 0, '', '', '2019-09-06 03:29:40', '2019-09-06 03:29:40'),
(324, 'পাওয়ার টুইস্টার', 'uploads/58-31-03-06-09-2019-power-tools.jpg', 0, '', '', '2019-09-06 03:31:58', '2019-09-06 03:31:58'),
(325, 'Wireless ip camera 2 Antenna ', 'uploads/16-35-03-06-09-2019-wireless-ip-camera.jpg', 0, '', '', '2019-09-06 03:35:16', '2019-09-06 03:35:16'),
(326, 'Wireless ip camera 2 Antenna ', 'uploads/16-35-03-06-09-2019-wireless-ip-camera-one.jpg', 0, '', '', '2019-09-06 03:35:16', '2019-09-06 03:35:16'),
(327, 'Wireless ip camera 2 Antenna ', 'uploads/16-35-03-06-09-2019-wireless-ip-camera-two.jpg', 0, '', '', '2019-09-06 03:35:16', '2019-09-06 03:35:16'),
(328, 'Slim N Lift স্লিমিং ভেস্ট (ফর মেন)', 'uploads/30-37-03-06-09-2019-slim-n-lift.jpg', 0, '', '', '2019-09-06 03:37:30', '2019-09-06 03:37:30'),
(329, 'Bluetooth KARAOKE Microphone', 'uploads/04-40-03-06-09-2019-bluetooth-karaoke.jpg', 0, '', '', '2019-09-06 03:40:04', '2019-09-06 03:40:04'),
(330, 'Bluetooth KARAOKE Microphone', 'uploads/04-40-03-06-09-2019-bluetooth-karaoke-one.jpg', 0, '', '', '2019-09-06 03:40:04', '2019-09-06 03:40:04'),
(331, 'Himalaya Ayur Slim Tea(10tea bag) +Capsules (60pice)packeg', 'uploads/57-42-03-06-09-2019-himalaya-ayur-slim-tea.jpg', 0, '', '', '2019-09-06 03:42:57', '2019-09-06 03:42:57'),
(332, 'Temulawak Cream সাবান সহ', 'uploads/01-45-03-06-09-2019-temu-lawak-cream.jpg', 0, '', '', '2019-09-06 03:45:01', '2019-09-06 03:45:01'),
(333, 'MAKEUP RACK COMBINATION With MAKE-UP RACK', 'uploads/28-47-03-06-09-2019-makeup-rack-combination-with-make-up-rack.jpg', 0, '', '', '2019-09-06 03:47:28', '2019-09-06 03:47:28'),
(334, 'MAKEUP RACK COMBINATION With MAKE-UP RACK', 'uploads/28-47-03-06-09-2019-makeup-rack-combination-with-make-up-rack-one.jpg', 0, '', '', '2019-09-06 03:47:28', '2019-09-06 03:47:28'),
(335, 'Camera Lens Coffee Mug', 'uploads/34-49-03-06-09-2019-camera-lens-coffee-mug.jpg', 0, '', '', '2019-09-06 03:49:34', '2019-09-06 03:49:34'),
(336, 'Camera Lens Coffee Mug', 'uploads/34-49-03-06-09-2019-camera-lens-coffee-mug-one.jpg', 0, '', '', '2019-09-06 03:49:34', '2019-09-06 03:49:34'),
(337, 'Night Vision Hidden Camera', 'uploads/43-52-03-06-09-2019-night-vision-hidden-camera.jpg', 0, '', '', '2019-09-06 03:52:43', '2019-09-06 03:52:43'),
(338, 'Night Vision Hidden Camera', 'uploads/43-52-03-06-09-2019-night-vision-hidden-camera-two.jpg', 0, '', '', '2019-09-06 03:52:43', '2019-09-06 03:52:43'),
(339, 'Night Vision Hidden Camera', 'uploads/43-52-03-06-09-2019-night-vision-hidden-camera-one.jpg', 0, '', '', '2019-09-06 03:52:43', '2019-09-06 03:52:43'),
(340, 'Indulekha Bringha oil & Shampoo', 'uploads/31-56-03-06-09-2019-indulekha-bringha-oil-shampoo.jpg', 0, '', '', '2019-09-06 03:56:31', '2019-09-06 03:56:31'),
(341, 'SPORT WAIST BAGS', 'uploads/46-58-03-06-09-2019-sport-waist-bags.jpg', 0, '', '', '2019-09-06 03:58:46', '2019-09-06 03:58:46'),
(342, 'SPORT WAIST BAGS', 'uploads/46-58-03-06-09-2019-sport-waist-bags-one.jpg', 0, '', '', '2019-09-06 03:58:46', '2019-09-06 03:58:46'),
(343, 'APPLE স্মার্ট ওয়াচ', 'uploads/40-00-04-06-09-2019-smart-watch-applee.jpg', 0, '', '', '2019-09-06 04:00:40', '2019-09-06 04:00:40'),
(344, 'USB লাইটিং মস্কুইটো কিলার ল্যাম্প', 'uploads/46-03-04-06-09-2019-usb-mosquito-killer-lamp.jpg', 0, '', '', '2019-09-06 04:03:46', '2019-09-06 04:03:46'),
(345, 'USB লাইটিং মস্কুইটো কিলার ল্যাম্প', 'uploads/46-03-04-06-09-2019-usb-mosquito-killer-lamp-two.jpg', 0, '', '', '2019-09-06 04:03:46', '2019-09-06 04:03:46'),
(346, 'USB লাইটিং মস্কুইটো কিলার ল্যাম্প', 'uploads/46-03-04-06-09-2019-usb-mosquito-killer-lamp-three.jpg', 0, '', '', '2019-09-06 04:03:46', '2019-09-06 04:03:46'),
(347, 'USB লাইটিং মস্কুইটো কিলার ল্যাম্প', 'uploads/46-03-04-06-09-2019-usb-mosquito-killer-lamp-one.jpg', 0, '', '', '2019-09-06 04:03:46', '2019-09-06 04:03:46'),
(348, 'DEXE BLACK HAIR SHAMPOO', 'uploads/55-05-04-06-09-2019-dexe-black-hair-shampoo.jpg', 0, '', '', '2019-09-06 04:05:55', '2019-09-06 04:05:55'),
(349, 'DEXE BLACK HAIR SHAMPOO', 'uploads/55-05-04-06-09-2019-dexe-black-hair-shampoo-one.jpg', 0, '', '', '2019-09-06 04:05:55', '2019-09-06 04:05:55'),
(350, 'Frying Pan Rack', 'uploads/31-08-04-06-09-2019-frying-pan-rack.jpg', 0, '', '', '2019-09-06 04:08:31', '2019-09-06 04:08:31'),
(351, 'Frying Pan Rack', 'uploads/31-08-04-06-09-2019-frying-pan-rack-two.jpg', 0, '', '', '2019-09-06 04:08:31', '2019-09-06 04:08:31'),
(352, 'Stainless steel fruit fork western restaurant gift set', 'uploads/20-11-04-06-09-2019-stainless-steel-fruit-gift-set.jpg', 0, '', '', '2019-09-06 04:11:20', '2019-09-06 04:11:20'),
(353, 'Stainless steel fruit fork western restaurant gift set', 'uploads/20-11-04-06-09-2019-stainless-steel-fruit-gift-set-one.jpg', 0, '', '', '2019-09-06 04:11:20', '2019-09-06 04:11:20'),
(354, 'Stainless steel fruit fork western restaurant gift set', 'uploads/20-11-04-06-09-2019-stainless-steel-fruit-gift-set-two.jpg', 0, '', '', '2019-09-06 04:11:20', '2019-09-06 04:11:20'),
(355, 'Gulta Frosta Plus(Made in thailand)', 'uploads/18-14-04-06-09-2019-gulta-frosta-plus.jpg', 0, '', '', '2019-09-06 04:14:18', '2019-09-06 04:14:18'),
(356, 'Gulta Frosta Plus(Made in thailand)', 'uploads/18-14-04-06-09-2019-gulta-frosta-plus-two.jpg', 0, '', '', '2019-09-06 04:14:18', '2019-09-06 04:14:18'),
(357, 'Gulta Frosta Plus(Made in thailand)', 'uploads/18-14-04-06-09-2019-gulta-frosta-plus-one.jpg', 0, '', '', '2019-09-06 04:14:18', '2019-09-06 04:14:18'),
(358, 'Soumis Can Anti Wrinkle Cream ', 'uploads/09-16-04-06-09-2019-soumis-can-anti-wrinkle-cream.jpg', 0, '', '', '2019-09-06 04:16:09', '2019-09-06 04:16:09'),
(359, 'Keda Lady Shaver', 'uploads/53-18-04-06-09-2019-keda-lady-shaver.jpg', 0, '', '', '2019-09-06 04:18:53', '2019-09-06 04:18:53'),
(360, 'Keda Lady Shaver', 'uploads/53-18-04-06-09-2019-keda-lady-shaver-one.jpg', 0, '', '', '2019-09-06 04:18:53', '2019-09-06 04:18:53'),
(361, 'Keda Lady Shaver', 'uploads/53-18-04-06-09-2019-keda-lady-shaver-two.jpg', 0, '', '', '2019-09-06 04:18:53', '2019-09-06 04:18:53'),
(362, 'Dr. White melasma white clear cream', 'uploads/05-21-04-06-09-2019-dr-white-melasma-white-clear-cream.jpg', 0, '', '', '2019-09-06 04:21:05', '2019-09-06 04:21:05'),
(363, 'Cathy Doll White Milk Shine Body Lotion', 'uploads/41-23-04-06-09-2019-milk-shine-body-lotion.jpg', 0, '', '', '2019-09-06 04:23:41', '2019-09-06 04:23:41'),
(364, 'Cathy Doll White Milk Shine Body Lotion', 'uploads/41-23-04-06-09-2019-milk-shine-body-lotion-one.jpg', 0, '', '', '2019-09-06 04:23:41', '2019-09-06 04:23:41'),
(365, 'Ponds Pure white face Wash', 'uploads/46-25-04-06-09-2019-ponds-pure-white-face-wash.jpg', 0, '', '', '2019-09-06 04:25:46', '2019-09-06 04:25:46'),
(366, 'Ponds Pure white face Wash', 'uploads/47-25-04-06-09-2019-ponds-pure-white-face-wash-one.jpg', 0, '', '', '2019-09-06 04:25:47', '2019-09-06 04:25:47'),
(367, 'Patanjali Multani Mati Face Pack', 'uploads/10-28-04-06-09-2019-patanjali-multani-mati-face-pack.jpg', 0, '', '', '2019-09-06 04:28:10', '2019-09-06 04:28:10'),
(368, 'Patanjali Multani Mati Face Pack', 'uploads/10-28-04-06-09-2019-patanjali-multani-mati-face-pack-one.jpg', 0, '', '', '2019-09-06 04:28:10', '2019-09-06 04:28:10'),
(369, 'ডিজিটাল ওয়েট স্কেল', 'uploads/47-30-04-06-09-2019-digital-weight-scale.jpg', 0, '', '', '2019-09-06 04:30:47', '2019-09-06 04:30:47'),
(370, 'ডিজিটাল ওয়েট স্কেল', 'uploads/47-30-04-06-09-2019-digital-weight-scale-one.jpg', 0, '', '', '2019-09-06 04:30:47', '2019-09-06 04:30:47'),
(371, 'Tomato blink serum', 'uploads/53-34-04-06-09-2019-tomato-blink-serum.jpg', 0, '', '', '2019-09-06 04:34:53', '2019-09-06 04:34:53'),
(372, 'Tomato blink serum', 'uploads/53-34-04-06-09-2019-tomato-blink-serum-one.jpg', 0, '', '', '2019-09-06 04:34:53', '2019-09-06 04:34:53'),
(373, 'Tomato blink serum', 'uploads/53-34-04-06-09-2019-tomato-blink-serum-two.jpg', 0, '', '', '2019-09-06 04:34:53', '2019-09-06 04:34:53'),
(374, 'WHITENING SET VENUT WHITE', 'uploads/16-37-04-06-09-2019-whitening-set-venut-white.jpg', 0, '', '', '2019-09-06 04:37:16', '2019-09-06 04:37:16'),
(375, 'S-line Pills 34 Capsules', 'uploads/29-39-04-06-09-2019-s-line-pills-34-capsules.jpg', 0, '', '', '2019-09-06 04:39:29', '2019-09-06 04:39:29'),
(376, 'Endura Mass Waight Gainer', 'uploads/21-41-04-06-09-2019-endura-mass-waight-gainer.jpg', 0, '', '', '2019-09-06 04:41:21', '2019-09-06 04:41:21'),
(377, 'মিমি হোয়াইট আহা সোপ এবং সিরাম', 'uploads/08-44-04-06-09-2019-Mimi-white-AHA-Soap.jpg', 0, '', '', '2019-09-06 04:44:08', '2019-09-06 04:44:08'),
(378, 'মিমি হোয়াইট আহা সোপ এবং সিরাম', 'uploads/08-44-04-06-09-2019-Mimi-white-AHA-Soap-three.jpg', 0, '', '', '2019-09-06 04:44:08', '2019-09-06 04:44:08'),
(379, 'মিমি হোয়াইট আহা সোপ এবং সিরাম', 'uploads/08-44-04-06-09-2019-Mimi-white-AHA-Soap-two.jpg', 0, '', '', '2019-09-06 04:44:08', '2019-09-06 04:44:08'),
(380, 'BIOAQUA 24K Gold Face Whitening Essence Serum', 'uploads/48-45-04-06-09-2019-bioaqua-24k-gold-face-whitening.jpg', 0, '', '', '2019-09-06 04:45:48', '2019-09-06 04:45:48');
INSERT INTO `media` (`media_id`, `media_title`, `media_path`, `product_id`, `feature_image`, `galery_image`, `created_time`, `modified_time`) VALUES
(381, 'Fade out Advanced whitening night cream', 'uploads/02-48-04-06-09-2019-advanced-whitening-night-cream.jpg', 0, '', '', '2019-09-06 04:48:02', '2019-09-06 04:48:02'),
(382, 'Fade out Advanced whitening night cream', 'uploads/02-48-04-06-09-2019-advanced-whitening-night-cream-one.jpg', 0, '', '', '2019-09-06 04:48:02', '2019-09-06 04:48:02'),
(383, 'Deurspion met camera - Perel ', 'uploads/36-50-04-06-09-2019-deurspion-met-camera-perel.jpg', 0, '', '', '2019-09-06 04:50:36', '2019-09-06 04:50:36'),
(384, 'Deurspion met camera - Perel ', 'uploads/36-50-04-06-09-2019-deurspion-met-camera-perel-one.jpg', 0, '', '', '2019-09-06 04:50:36', '2019-09-06 04:50:36'),
(385, 'বেবী ওয়াকার', 'uploads/42-52-04-06-09-2019-baby-walker.jpg', 0, '', '', '2019-09-06 04:52:42', '2019-09-06 04:52:42'),
(386, 'বেবী ওয়াকার', 'uploads/10-53-04-06-09-2019-baby-walker.jpg', 0, '', '', '2019-09-06 04:53:10', '2019-09-06 04:53:10'),
(387, 'Stick hand blander', 'uploads/00-55-04-06-09-2019-stick-hand-blander.jpg', 0, '', '', '2019-09-06 04:55:00', '2019-09-06 04:55:00'),
(388, 'Wardrobe Storage Organizer for Clothes', 'uploads/01-57-04-06-09-2019-wardrobe-storage-organizer-for-clothes.jpg', 0, '', '', '2019-09-06 04:57:01', '2019-09-06 04:57:01'),
(389, 'Wardrobe Storage Organizer for Clothes', 'uploads/01-57-04-06-09-2019-wardrobe-storage-organizer-for-clothes-one.jpg', 0, '', '', '2019-09-06 04:57:01', '2019-09-06 04:57:01'),
(390, 'Globe Drink Dispenser', 'uploads/15-59-04-06-09-2019-globe-drink-dispenser.jpg', 0, '', '', '2019-09-06 04:59:15', '2019-09-06 04:59:15'),
(391, 'Globe Drink Dispenser', 'uploads/15-59-04-06-09-2019-globe-drink-dispenser-one.jpg', 0, '', '', '2019-09-06 04:59:15', '2019-09-06 04:59:15'),
(392, 'Globe Drink Dispenser', 'uploads/15-59-04-06-09-2019-globe-drink-dispenser-two.jpg', 0, '', '', '2019-09-06 04:59:15', '2019-09-06 04:59:15'),
(394, 'logo valushop', 'uploads/08-09-2019-logo - Copy.png', 0, '', '', '2019-09-08 01:33:59', '0000-00-00 00:00:00'),
(395, 'new wath collection', 'uploads/58-11-05-13-09-2019-05-54-05-31-08-2019-PicsArt_06-29-06.22.55_thumb.jpg', 0, '', '', '2019-09-13 05:11:58', '2019-09-13 05:11:58'),
(396, 'new wath collection', 'uploads/49-18-05-13-09-2019-05-46-11-29-08-2019-4-tap-3509_thumb.jpg', 0, '', '', '2019-09-13 05:18:49', '2019-09-13 05:18:49'),
(397, 'latest watch collection', 'uploads/39-18-02-14-09-2019-2K-500x500.jpg', 0, '', '', '2019-09-14 02:18:39', '2019-09-14 02:18:39'),
(398, 'new wath collection', 'uploads/16-31-02-14-09-2019-02_thumb.jpg', 0, '', '', '2019-09-14 02:31:16', '2019-09-14 02:31:16'),
(399, 'Anti-Theft Security Dirt Bike Brake Lever Locksf', 'uploads/23-33-02-14-09-2019-02_MyPassportLumen.jpg.imgw.1000.1000.jpg', 0, '', '', '2019-09-14 02:33:23', '2019-09-14 02:33:23'),
(400, 'dd', 'uploads/15-09-2019-abashionMela1.png', 0, '', '', '0000-00-00 00:00:00', '2019-09-15 11:41:00'),
(401, 'tt', 'uploads/15-09-2019-SLIDER_ONE.jpg', 0, '', '', '0000-00-00 00:00:00', '2019-09-15 11:41:00'),
(402, 'Exclusive Watch', 'uploads/Screenshot_3.png', 0, '', '', '2019-09-16 13:05:09', '2019-09-16 13:05:09'),
(403, 'ggg', 'uploads/17-09-2019-SLIDER_ONE.jpg', 0, '', '', '2019-09-17 07:35:00', '0000-00-00 00:00:00'),
(404, 'dd', 'uploads/17-09-2019-abashionMela1.png', 0, '', '', '0000-00-00 00:00:00', '2019-09-17 07:41:00'),
(405, 'tt', 'uploads/17-09-2019-$(KGrHqJHJBYFHKY96gDPBR0)PCFJbg--60_58.JPG', 0, '', '', '0000-00-00 00:00:00', '2019-09-17 07:41:00'),
(406, 'ggg', 'uploads/17-09-2019-offer_banner_21.png', 0, '', '', '0000-00-00 00:00:00', '2019-09-17 07:47:00'),
(407, 'dd', 'uploads/17-09-2019-offer_banner_21.png', 0, '', '', '0000-00-00 00:00:00', '2019-09-17 07:47:00'),
(408, 'tt', 'uploads/17-09-2019-offer_banner_21.png', 0, '', '', '0000-00-00 00:00:00', '2019-09-17 07:47:00'),
(410, 'demo isolution product', 'uploads/37-42-05-17-09-2019-final card.ai.png', 0, '', '', '2019-09-17 05:42:37', '2019-09-17 05:42:37'),
(411, 'demo isolution product', 'uploads/23-50-05-17-09-2019-final card.ai.png', 0, '', '', '2019-09-17 05:50:23', '2019-09-17 05:50:23'),
(412, 'demo isolution product', 'uploads/48-44-03-19-09-2019-iuu.png', 0, '', '', '2019-09-19 03:44:48', '2019-09-19 03:44:48'),
(413, 'new wath collectioniii', 'uploads/14-47-03-19-09-2019-2K-500x500.jpg', 0, '', '', '2019-09-19 03:47:14', '2019-09-19 03:47:14'),
(414, 'product price', 'uploads/48-50-03-19-09-2019-2K-500x500.jpg', 0, '', '', '2019-09-19 03:50:48', '2019-09-19 03:50:48'),
(415, 'ddddd', 'uploads/07-53-03-19-09-2019-15-db0187au.jpg', 0, '', '', '2019-09-19 03:53:07', '2019-09-19 03:53:07'),
(416, 'new product', 'uploads/58-55-03-19-09-2019-2K-500x500.jpg', 0, '', '', '2019-09-19 03:55:58', '2019-09-19 03:55:58');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `newsletter_id` int(11) NOT NULL,
  `newsletter_email` varchar(155) NOT NULL,
  `created_time` datetime NOT NULL,
  `modified_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `option_id` int(11) NOT NULL,
  `option_name` varchar(255) DEFAULT NULL,
  `option_value` mediumtext CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`option_id`, `option_name`, `option_value`) VALUES
(1, 'site_title', 'Ekuseshop'),
(2, 'logo', 'http://kalerhaat.isolutionsbd.com/uploads/08-09-2019-logo - Copy.png'),
(3, 'icon', ''),
(4, 'phone', '01738305670'),
(5, 'phone_order', '<h4 style=\"font-size:24px;margin: 15px 0 15px 0;text-align:center;color:red;font-weight:900;text-align: left\"> \r\n                                                   <i class=\"fa fa-phone-square\" style=\"padding-left:20px;color: green;\">   </i> 01760 442 442 <br>\r\n                                                   <i class=\"fa fa-phone-square\" style=\"padding-left:20px;color: green;\"> </i> 01841 305 335 <br>\r\n                                                   <i class=\"fa fa-phone-square\" style=\"padding-left:20px;color: green;\"> </i>  01405 955 855<br>\r\n                                                 </h4>'),
(6, 'email', ''),
(7, 'admin_email', ''),
(8, 'support_box', ''),
(9, 'footer', '<div class=\"col-lg-12\">\r\n						<div class=\"xs-footer-logo footer-logo-v2\">\r\n							<a href=\"index.html\">\r\n								<img src=\"\" alt=\"\">\r\n							</a>\r\n						</div>\r\n					</div>\r\n					<div class=\"col-lg-5 col-md-5 media\">\r\n						<span class=\"icon icon-support color-yellow d-flex\"></span>\r\n						<div class=\"media-body\">\r\n							<h5>Got Question? Call us 24/7 <strong>01976266670</strong></h5>\r\n							<address>\r\n								Address:160 Muktobangla Shopping Complex (7th Floor)Mirpur-1, Dhaka.\r\n							</address>\r\n							<a href=\"https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom\" class=\"xs-map-popup btn btn-warning\"><i class=\"icon icon-placeholder\"></i>View On Map</a>\r\n						</div>\r\n					</div><!-- .media END -->\r\n				'),
(10, 'copyright', 'jjj'),
(11, 'default_product_terms', 'কীভাবে মূল্য ফেরত নেবেন অনলাইন পেমেণ্ট এর ক্ষেত্রে অতিরিক্ত মূল্য পরিশোধিত হলে ২৪ ঘণ্টার মধ্যে জানাতে হবে । এক্ষেত্রে info@okshop এ মেইল করে জানানোর জন্য অনুরোধ করা হচ্ছে । ১. নষ্ট বা ক্ষতিগ্রস্ত পণ্যের ক্ষেত্রে পণ্য গ্রহন না করে পন্যবাহকের কাছে পণ্য ফেরত দেবার জন্য বলা হচ্ছে এবং আমাদেরকে টেলিফোন/ ইমেইল করে অবহিত করার জন্য অনুরোধ করা হচ্ছে। ২. নষ্ট পণ্য সাথে সাথে বাহকের কাছে ফেরত দিতে সমর্থ না হলে পরবর্তীতে ফেরত দেবার ক্ষেত্রে যাবতীয় পরিবহন খরচ ক্রেতাকে বহন করতে হবে। ৩. ব্যবহার করা পণ্যের ক্ষেত্রে কোনভাবেই মূল্য ফেরত দেওয়া হবে না। ৪. ট্রাভেল ডিল এর ক্ষেত্রে যাত্রা বাতিল করে মূল্য ফেরত নেবার জন্য নির্দিষ্ট সময়ের মধ্যে আমাদেরকে অবহিত করার জন্য অনুরোধ করা হচ্ছে । ৫. পরিশোধকৃত মূল্য ফেরত নেবার ক্ষেত্রে অবশ্যই ক্রেতাকে আমাদের অফিসে এসে মূল্য ফেরত নিতে হবে (অনলাইন পেমেন্ট এর ক্ষেএে প্রযোজ্য নয়)। ৬. মূল্য ফেরত পাবার জন্য অবহিত করার পর ৭ থেকে ২১ দিন পর্যন্ত অপেক্ষা করতে হতে পারে। ৭. অনলাইন পেমেন্ট ফেরত নেবার ক্ষেত্রে ক্রেতার ব্যাংক স্টেটমেন্ট দিতে হতে পারে। .'),
(12, 'shipping_charge_in_dhaka', '60'),
(13, 'shipping_charge_out_of_dhaka', '100'),
(14, 'home_cat_section', '86,82,58'),
(15, 'home_seo_title', ''),
(16, 'home_seo_keywords', ''),
(17, 'home_seo_content', 'g'),
(18, 'home_about_title', ''),
(19, 'home_about_content', ''),
(26, 'top_weekly_category', '86,82'),
(27, 'facebook', 'g'),
(28, 'twitter', 't'),
(29, 'youtube', 'tt'),
(30, 'instagram', 'tt'),
(31, 'delevery_timing', '5'),
(32, 'customer_service', '5'),
(33, 'easy_return', '5');

-- --------------------------------------------------------

--
-- Table structure for table `order_data`
--

CREATE TABLE `order_data` (
  `order_id` int(11) NOT NULL,
  `created_by` varchar(55) CHARACTER SET utf8 DEFAULT 'customer',
  `staff_id` int(11) DEFAULT NULL,
  `order_total` varchar(155) NOT NULL,
  `shipping_charge` int(11) NOT NULL,
  `order_status` varchar(55) CHARACTER SET utf8 NOT NULL DEFAULT 'new',
  `payment_type` varchar(55) CHARACTER SET utf8 DEFAULT NULL,
  `products` text CHARACTER SET utf8 NOT NULL,
  `courier_service` varchar(155) CHARACTER SET utf8 DEFAULT NULL,
  `courier_code` varchar(155) CHARACTER SET utf8 DEFAULT NULL,
  `shipment_time` datetime NOT NULL,
  `created_time` datetime NOT NULL,
  `modified_time` datetime NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `delevery_address` varchar(250) NOT NULL,
  `order_area` varchar(255) NOT NULL,
  `order_note` text NOT NULL,
  `discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_data`
--

INSERT INTO `order_data` (`order_id`, `created_by`, `staff_id`, `order_total`, `shipping_charge`, `order_status`, `payment_type`, `products`, `courier_service`, `courier_code`, `shipment_time`, `created_time`, `modified_time`, `customer_name`, `customer_phone`, `customer_email`, `customer_address`, `delevery_address`, `order_area`, `order_note`, `discount`) VALUES
(33, 'customer', NULL, '1154', 60, 'new', 'cash_on_delivery', 'a:1:{s:5:\"items\";a:1:{i:169;a:7:{s:4:\"Size\";s:2:\"38\";s:5:\"Color\";s:5:\"Black\";s:3:\"qty\";s:1:\"2\";s:14:\"featured_image\";s:114:\"http://localhost/Ekusheshop/uploads/58-11-05-13-09-2019-05-54-05-31-08-2019-PicsArt_06-29-06.22.55_thumb_thumb.jpg\";s:5:\"price\";s:3:\"547\";s:4:\"name\";s:81:\"new wath collection new wath collection new wath collection  new wath collection \";s:8:\"subtotal\";s:4:\"1094\";}}}', NULL, NULL, '2019-09-21 12:00:00', '2019-09-21 16:17:23', '2019-09-21 13:01:07', 'Shahinul islam', '01738305670', 'suzonice15@gmail', '										    											    											    	dhaka 1																											', '										    											    											    	dhaka 1																											', '', '													good job																																', 0),
(34, 'customer', NULL, '110.00', 60, 'ready_to_deliver', 'cash_on_delivery', 'a:1:{s:5:\"items\";a:1:{i:169;a:7:{s:4:\"Size\";s:5:\"12222\";s:5:\"Color\";s:3:\"abc\";s:3:\"qty\";s:1:\"1\";s:14:\"featured_image\";s:114:\"http://localhost/Ekusheshop/uploads/58-11-05-13-09-2019-05-54-05-31-08-2019-PicsArt_06-29-06.22.55_thumb_thumb.jpg\";s:5:\"price\";s:5:\"50.00\";s:4:\"name\";s:81:\"new wath collection new wath collection new wath collection  new wath collection \";s:8:\"subtotal\";s:5:\"50.00\";}}}', NULL, NULL, '2019-09-21 12:00:00', '2019-09-21 16:20:59', '2019-09-21 12:22:39', 'Mutyk', '01738305670', 'suzonice15@gmail.com', '										    	ok									', '										    	ok									', '', '																									', 0),
(35, 'customer', NULL, '110.00', 60, 'ready_to_deliver', 'cash_on_delivery', 'a:1:{s:5:\"items\";a:1:{i:169;a:7:{s:4:\"Size\";s:5:\"12222\";s:5:\"Color\";s:3:\"abc\";s:3:\"qty\";s:1:\"1\";s:14:\"featured_image\";s:114:\"http://localhost/Ekusheshop/uploads/58-11-05-13-09-2019-05-54-05-31-08-2019-PicsArt_06-29-06.22.55_thumb_thumb.jpg\";s:5:\"price\";s:5:\"50.00\";s:4:\"name\";s:81:\"new wath collection new wath collection new wath collection  new wath collection \";s:8:\"subtotal\";s:5:\"50.00\";}}}', NULL, NULL, '2019-09-21 12:00:00', '2019-09-21 16:29:05', '2019-09-21 12:30:02', 'Shahinul islam', '01738305670', 'suzonice15@gmail.com', '										    	ff									', '										    	ff									', '', '																									', 0),
(36, 'customer', NULL, '110.00', 60, 'new', 'cash_on_delivery', 'a:1:{s:5:\"items\";a:1:{i:165;a:7:{s:14:\"featured_image\";s:77:\"http://localhost/Ekusheshop/uploads/10-53-04-06-09-2019-baby-walker_thumb.jpg\";s:3:\"qty\";s:1:\"1\";s:5:\"price\";s:5:\"50.00\";s:8:\"subtotal\";s:5:\"50.00\";s:4:\"size\";s:0:\"\";s:5:\"color\";s:0:\"\";s:4:\"name\";s:693:\"বেবী ওয়াকার বেবী ওয়াকার বেবী ওয়াকারবেবী ওয়াকার বেবী ওয়াকার বেবী ওয়াকারবেবী ওয়াকার বেবী ওয়াকার বেবী ওয়াকারবেবী ওয়াকার বেবী ওয়াকার বেবী ওয়াকারবেবী ওয়াকার বেবী ওয়াকার বেবী ওয়াকারবেবী ওয়াকার বেবী ওয়াকার বেবী ওয়াকারবেবী ওয়াকার বেবী ওয়াকার বেবী ওয়াকারবেবী ওয়াকা\";}}}', NULL, NULL, '2019-09-21 16:33:00', '2019-09-21 16:33:00', '2019-09-21 16:33:00', 'g', '01738305670', 'suzonice15@gmail', 'gg', 'gg', '', '', 0),
(37, 'customer', 2, '', 0, 'new', NULL, '', 'sundorbob', NULL, '2019-09-21 00:00:00', '2019-09-21 17:23:11', '2019-09-21 17:23:11', '', '', '', '', '', '', '', 0),
(38, 'customer', 2, '', 0, 'new', NULL, '', 'sundorbob', NULL, '2019-09-21 00:00:00', '2019-09-21 17:23:59', '2019-09-21 17:23:59', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `page_id` int(11) NOT NULL,
  `page_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `page_link` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `page_template` varchar(50) CHARACTER SET utf8 NOT NULL,
  `page_content` text CHARACTER SET utf8 NOT NULL,
  `created_time` datetime NOT NULL,
  `page_order` int(11) NOT NULL,
  `page_position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`page_id`, `page_name`, `page_link`, `page_template`, `page_content`, `created_time`, `page_order`, `page_position`) VALUES
(2, 'Conditions', 'terms', 'default', '\r\n		কীভাবে মূল্য ফেরত নেবেন অনলাইন পেমেণ্ট এর ক্ষেত্রে অতিরিক্ত মূল্য পরিশোধিত হলে ২৪ ঘণ্টার মধ্যে জানাতে হবে । এক্ষেত্রে info@okshop এ মেইল করে জানানোর জন্য অনুরোধ করা হচ্ছে । ১. নষ্ট বা ক্ষতিগ্রস্ত পণ্যের ক্ষেত্রে পণ্য গ্রহন না করে পন্যবাহকের কাছে পণ্য ফেরত দেবার জন্য বলা হচ্ছে এবং আমাদেরকে টেলিফোন/ ইমেইল করে অবহিত করার জন্য অনুরোধ করা হচ্ছে। ২. নষ্ট পণ্য সাথে সাথে বাহকের কাছে ফেরত দিতে সমর্থ না হলে পরবর্তীতে ফেরত দেবার ক্ষেত্রে যাবতীয় পরিবহন খরচ ক্রেতাকে বহন করতে হবে। ৩. ব্যবহার করা পণ্যের ক্ষেত্রে কোনভাবেই মূল্য ফেরত দেওয়া হবে না। ৪. ট্রাভেল ডিল এর ক্ষেত্রে যাত্রা বাতিল করে মূল্য ফেরত নেবার জন্য নির্দিষ্ট সময়ের মধ্যে আমাদেরকে অবহিত করার জন্য অনুরোধ করা হচ্ছে । ৫. পরিশোধকৃত মূল্য ফেরত নেবার ক্ষেত্রে অবশ্যই ক্রেতাকে আমাদের অফিসে এসে মূল্য ফেরত নিতে হবে (অনলাইন পেমেন্ট এর ক্ষেএে প্রযোজ্য নয়)। ৬. মূল্য ফেরত পাবার জন্য অবহিত করার পর ৭ থেকে ২১ দিন পর্যন্ত অপেক্ষা করতে হতে পারে। ৭. অনলাইন পেমেন্ট ফেরত নেবার ক্ষেত্রে ক্রেতার ব্যাংক স্টেটমেন্ট দিতে হতে পারে। .						', '2019-09-18 09:56:56', 0, 'home'),
(3, 'রিপ্লেসমেন্ট পলিসি', 'replacement', 'trackorder', '		রিপ্লেসমেন্ট পলিসিঃ\r\n\r\nযে সকল প্রোডাক্টটের মূল্য ২০০০ টাকার বেশি শুধুমাত্র সেগুলোর ক্ষেত্রে কাস্টমার নিম্নের শর্ত সাপেক্ষে প্রোডাক্টটির রিপ্লেসমেন্ট সুবিধা পাবে।\r\n<br/>\r\n১) প্রোডাক্টের সমস্যার (যেমন : প্রোডাক্ট ভাঙ্গা, ছেঁড়া, ভুল সাইজ, প্রোডাক্ট কাজ না করা, ছবির সাথে প্রোডাক্টের মিল না থাকা ইত্যাদি) ক্ষেত্রে আপনি রিপ্লেসমেন্ট পেতে পারেন।\r\n<br/>\r\n২) প্রোডাক্টটির বাক্স সহ সম্পূর্ণ অক্ষত অবস্থায় থাকতে হবে।\r\n<br/>\r\n\r\n৩) ডেলিভারি গ্রহনের পর সর্বোচ্চ ৪৮ ঘন্টার মধ্যে আপনাকে infokalerhaat@gmail.com এ মেইল করতে হবে অথবা 01796-000007 নাম্বারে কমপ্লেইন রেজিস্টার করতে হবে।\r\n<br/>\r\n৪) আপনাকে উক্ত প্রোডাক্টটি কালেরহাট-এর অফিসে অবশ্যই সর্বোচ্চ ৭ কার্যদিবসের মধ্যে নিজ দায়িত্বে ফেরত পাঠাতে হবে। বিঃ দ্রঃ পণ্য ও সার্ভিস সম্পর্কিত কোনো অভিযোগের জন্য আমাদের কমপ্লেইন্ট টীম আপনাকে ফোন করবেন। এ জন্য আপনার অভিযোগটি সমাধান না হওয়া পর্যন্ত আপনাকে আমরা ফোনে সক্রিয় পেতে চাই। আপনার যোগাযোগে দেওয়া নম্বরটি সক্রিয় না থাকলে বিকল্প কোনো নম্বর সক্রিয় থাকতে হবে। রিফান্ডের জন্য আপনাকে টাকাটি ফেরতের মাধ্যম আমাদের জানাতে হবে। আমরা আপনার কোনো প্রকার সহযোগিতা ১৫ কার্যদিবসের মধ্যে ফোনে অথবা ইমেইলে না পেলে আপনার অভিযোগটি নিস্পত্তি বলে মনে করবো।			\r\n<br/>									', '2019-08-31 10:40:05', 0, ''),
(4, 'About Us', 'about', 'default', 'kalerhaat.com একটি অনলাইন শপিং সপ, যেখানে আপনি ইলেক্ট্রনিক্স ও সিকিউরিটি প্রোডাক্টের সর্বাধিক নির্বাচন, বাংলাদেশে বাড়ির অন্যান্য যন্ত্রপাতি এবং আপনার সুবিধার সাথে সরাসরি আপনার বাড়ির বা অফিসে সরাসরি পাঠাতে পারেন! আমরা ডেলিভারি নগদ সহ বিনামূল্যে রিটার্ন এবং বিভিন্ন পেমেন্ট বিকল্প অফার। সাশ্রয়ী মূল্যের মূল্য এবং পণ্যগুলির মাধ্যমে আপনাকে আপনার অর্ডার সরাসরি পাঠানো আপনার  মধ্যে একটি কেনাকাটা অভিজ্ঞতা ভোগ করে। ফেসবুক এবং টুইটারে আমাদের সর্বশেষ আপডেট এবং কালেরহাট পণ্য আপডেট। শুভ কেনাকাটা', '2019-09-01 07:02:26', 0, ''),
(5, 'Terms and Conditions', 'terms', 'default', '		কীভাবে মূল্য ফেরত নেবেন অনলাইন পেমেণ্ট এর ক্ষেত্রে অতিরিক্ত মূল্য পরিশোধিত হলে ২৪ ঘণ্টার মধ্যে জানাতে হবে । এক্ষেত্রে info@okshop এ মেইল করে জানানোর জন্য অনুরোধ করা হচ্ছে । ১. নষ্ট বা ক্ষতিগ্রস্ত পণ্যের ক্ষেত্রে পণ্য গ্রহন না করে পন্যবাহকের কাছে পণ্য ফেরত দেবার জন্য বলা হচ্ছে এবং আমাদেরকে টেলিফোন/ ইমেইল করে অবহিত করার জন্য অনুরোধ করা হচ্ছে। ২. নষ্ট পণ্য সাথে সাথে বাহকের কাছে ফেরত দিতে সমর্থ না হলে পরবর্তীতে ফেরত দেবার ক্ষেত্রে যাবতীয় পরিবহন খরচ ক্রেতাকে বহন করতে হবে। ৩. ব্যবহার করা পণ্যের ক্ষেত্রে কোনভাবেই মূল্য ফেরত দেওয়া হবে না। ৪. ট্রাভেল ডিল এর ক্ষেত্রে যাত্রা বাতিল করে মূল্য ফেরত নেবার জন্য নির্দিষ্ট সময়ের মধ্যে আমাদেরকে অবহিত করার জন্য অনুরোধ করা হচ্ছে । ৫. পরিশোধকৃত মূল্য ফেরত নেবার ক্ষেত্রে অবশ্যই ক্রেতাকে আমাদের অফিসে এসে মূল্য ফেরত নিতে হবে (অনলাইন পেমেন্ট এর ক্ষেএে প্রযোজ্য নয়)। ৬. মূল্য ফেরত পাবার জন্য অবহিত করার পর ৭ থেকে ২১ দিন পর্যন্ত অপেক্ষা করতে হতে পারে। ৭. অনলাইন পেমেন্ট ফেরত নেবার ক্ষেত্রে ক্রেতার ব্যাংক স্টেটমেন্ট দিতে হতে পারে। .		', '2019-09-18 09:54:55', 0, 'home'),
(6, 'অর্ডার ট্র্যাক করুন', 'trackorder', 'trackorder', '১। পণ্যের ডেলিভারী আপডেট পেতে আপনার বুকিং কোড / Product Order Number নাম্বার দিয়ে অর্ডার ট্র্যাক করুন।\r\n\r\n২। আপনার অর্ডার করা পণ্যের ডেলিভারীর বর্তমান অবস্থা জানতে নিম্নের “টেক্সট বক্স” এ অর্ডারের বুকিং কোড / Product Order Number নাম্বার টি প্রদান করুন এবং “ট্র্যাক অর্ডার” বাটনে ক্লিক করুন।', '2019-09-01 07:03:53', 0, ''),
(7, 'Contact Us', 'contact', 'contact', '		', '2019-09-01 07:06:38', 0, ''),
(8, 'Return Policy', 'return_policy', 'full_width', '**If your product arrives damaged or faulty, please do not accept it. If you did accept it, please get in contact with our customer service team on 16492**\r\n\r\n\r\nCan I return this product?\r\n\r\nYou can return this product for a replacement or a refund, within 7 days after receiving your original order.\r\n\r\nOnly Custom or Made-to-order products; Imported On-order products and delivered out of Bangladesh products cannot be returned.\r\n\r\n\r\nWhat are the required conditions?\r\n\r\nCondition A:\r\n\r\n    If the product is not as you expected/not as advertised; or\r\n    If you don\'t want the product anymore\r\n\r\nThe product must be returned unused, in original packaging and with all seals & tags intact.\r\n\r\nCondition B:\r\n\r\n    If the product is damaged, defective or counterfeit; or\r\n    If your fashion product is the wrong size\r\n\r\nThe product must be returned in its original packaging. All accessories, tags and free gifts must also be returned.\r\n\r\n\r\nHow to return this product?\r\n\r\nTo return a product, simply follow the steps below:\r\n\r\nYou can also request a return by calling Customer Service at 16492\r\n\r\n\r\nStep 1: Start the Easy & Fast Return\r\n\r\n    Go to Returns or call us at 16492\r\n    Select your order and click \"Return a product\"\r\n    Choose your preferred return and replacement/refund method\r\n\r\n\r\nStep 2: Pack your product\r\n\r\n    Pack your product according to the return conditions\r\n    Include all tags, accessories or free gifts you received\r\n    Fill and include the \"Easy & Fast Return\" form included in your package\r\n\r\n\r\nStep 3: Return your product\r\n\r\n    If you requested a pickup, we will contact you to arrange a pickup time\r\n    For further information please visit Help\r\n\r\n\r\n\r\nWhat\'s next?\r\n\r\nWe will send you a tracking number via SMS after the package has been picked up or dropped off. We will immediately initiate your replacement or refund when we have received your package and it has passed our Quality Evaluation. For expected timelines please visit Help\r\n\r\n', '2019-09-01 07:07:54', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `product_price` double NOT NULL,
  `purchase_price` double NOT NULL,
  `discount_price` double NOT NULL,
  `discount_date_from` datetime NOT NULL,
  `discount_date_to` datetime NOT NULL,
  `product_summary` longtext CHARACTER SET utf8 DEFAULT NULL,
  `product_description` longtext CHARACTER SET utf8 DEFAULT NULL,
  `product_specification` longtext CHARACTER SET utf8 DEFAULT NULL,
  `product_terms` text CHARACTER SET utf8 DEFAULT NULL,
  `sku` varchar(255) NOT NULL,
  `product_stock` int(11) NOT NULL,
  `product_of_size` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `discount_type` varchar(255) NOT NULL,
  `product_color` varchar(255) CHARACTER SET utf8 NOT NULL,
  `product_video` varchar(255) NOT NULL,
  `product_availability` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 active 0 in active',
  `product_type` varchar(15) CHARACTER SET utf8 DEFAULT 'general',
  `created_time` datetime NOT NULL,
  `modified_time` datetime NOT NULL,
  `seo_title` text NOT NULL,
  `seo_keywords` text NOT NULL,
  `seo_content` text NOT NULL,
  `product_percent_tag` decimal(10,0) NOT NULL,
  `delever_charge_in_dhaka` varchar(50) DEFAULT NULL,
  `delever_charge_out_dhaka` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_title`, `product_name`, `product_price`, `purchase_price`, `discount_price`, `discount_date_from`, `discount_date_to`, `product_summary`, `product_description`, `product_specification`, `product_terms`, `sku`, `product_stock`, `product_of_size`, `discount_type`, `product_color`, `product_video`, `product_availability`, `status`, `product_type`, `created_time`, `modified_time`, `seo_title`, `seo_keywords`, `seo_content`, `product_percent_tag`, `delever_charge_in_dhaka`, `delever_charge_out_dhaka`) VALUES
(20, 'T8 GSM Smart Watch Phone', 't8-gsm-smart-watch-phone', 2500, 1800, 300, '2019-06-06 00:00:00', '2019-06-06 00:00:00', '  ', '<li>Brand	LYNWO<li><li/>\r\nModel	T8<li><li/>\r\nColor	Black,White,Blue<li><li/>\r\nSupport GSM	GSM 2GB 850/900/1800/1900<li><li/>\r\nbluetooth Version	bluetooth 3.0<li><li/>\r\nLanguage	English,French,Spanish, polish, Portuguese, Italian, German, Czech, Turkish, Russian, Arabic, Greek, Persian<li><li/>\r\nWeight	50g<li><li/>\r\nSystem	Nucleus<li><li/>\r\nCamera	30W/8W<li><li/>\r\nMIC	4015/-42db<li><li/>\r\nKey	FPC Key<li><li/>\r\nSpeaker	8?/0.8W<li><li/>\r\nCharge	Micro USB<li><li/>', NULL, '', '1067', 49995, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 03:37:16', '2019-09-05 03:37:16', '', '', '', '0', '0', '0'),
(21, 'ড্রিল মেশিন সেট (১২০ পিছ)', 'dril-machin-120pcs', 2400, 1900, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>ব্রান্ড:কিংসাই (KINGSAY) <li>প্যাকেটে আছে: <li><li/>১ পিস ড্রিল (৫০০ ওয়ার্ট) <li><li/>১ পিস ড্রিল মেশিনের কার্বন <li><li/>১ পিস হ্যামার হ্যান্ডেল <li><li/>১ পিস হাতুড়ি <li><li/>১ পিস স্ক্রু ড্রাইভার<li><li/> ১ পিস কম্বিনেশন প্লাস <li><li/>১ পিস সিলাই রেন্জ <li><li/>১ পিস কেবল কাটার<li><li/> ১ পিস মেজারিং টেপ <li><li/>৯ পিস সকেট রেন্জ (গুটি সেট) <li><li/>১২ পিস স্ক্রু সেট (১২ রকমের)<li><li/> ১৫ পিস ড্রিল বিট <li><li/>৫০ পিস রয়েল প্লাগ<li><li/> ১ পিস টুল বক্স', NULL, '', '1511', 48147, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 03:41:43', '2019-09-05 03:41:43', '', '', '', '0', '0', '0'),
(22, 'Full HD 1080P স্পোর্টস অ্যাকশন ওয়াটারপ্রুফ ক্যামেরা 12MP - Black', 'full-hd-1080p-----12mp---black', 2800, 2200, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', 'Product details of Full HD 1080P Sports Action Waterproof Camera 12MP - Black 2 inches LCD display for previewing. 12MP Pixel 170 degree wide-angle 6 tier glass lens Water Resistance up to 30 meters/ 99 feet Video format: MOV(1080P) Image format: JPEG 4032*3024 Output: HDMI/ USB/ AV Battery Capacity: 3.7V 900mAh lithium battery Language Support: English (default)/French/Italian/Russian/Spanish/Thai/traditional Chinese/Japanese/Portuguese/German/Dutch Image Resolution: 12M(4032*3024)/10M(3648*2736)/8M((3264*2448)/5M(2592*1944) Video resolution: 1920*1080 30fps/ 1280*720 60fps', NULL, '', '1731', 39991, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 03:44:52', '2019-09-05 03:44:52', '', '', '', '0', '0', '0'),
(23, 'Cheerlux C6 Home Entertainment Projector', 'cheerlux-c6-home-entertainment-projector', 9500, 5200, 200, '2019-03-05 00:00:00', '2019-03-05 00:00:00', '  ', '<li>কোন ক্যাবল ছাড়াই আপনার স্মার্টফোনের ভিডিও/পিকচার সরাসরি প্রজেক্টরে দেখতে পারবেন<li><li/> এই প্রোজেক্টর এর মাধ্যমে ডিশ লাইন লাগিয়ে সরাসরি টিভি দেখা যায় <li><li/>Projects up to 120” <li><li/>Convenient Inputs Support VGA, USB and SD, <li><li/>Full HD 1920-1080 Supported <li><li/>Resolution: 1920*1080 Brightness: 1200 Lumens.<li><li/>', NULL, '', '1750', 4987, '', 'fixed', '', '', 'In stock', 1, 'bestsell', '2019-09-05 03:53:07', '2019-09-05 03:53:07', '', '', '', '0', '0', '0'),
(24, 'USB মিনি এয়ার কুলার', 'usb-air-cular', 850, 380, 200, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '  ', '<li>ইলেকট্রিসিটি না থাকলেও USB/ ব্যাটারি দিয়ে চলবে <li><li/>এই এয়ার কুলার আকারে ছোট,  <li><li/>কাজেই যে কোন জায়গায় রেখে পাওয়া যাবে ঠান্ডা বাতাস এবং সাথে নিয়ে ঘুরতে পারবেন  <li><li/>বেশী ঠান্ডা বাতাসের জন্য পানি বা বরফ রাখার ছোট্ট বক্স আছে,  <li><li/>সাথে দেয়া আছে কুলার-জেল এর মনোমুগ্ধকর বাতাস  <li><li/>আপনার সকল ক্লান্তি দূর করে করবে সজীব  <li><li/>ডাইমেনশন্স: ১৪*১১.৫*১০.৫ সেমি  <li><li/>কালার: র‌্যান্ডম<li><li/>', NULL, '', '1054', 4915, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 03:56:36', '2019-09-05 03:56:36', '', '', '', '0', '0', '0'),
(25, 'Multi-coloured umbrella', 'multi-coloured-umbrella', 399, 220, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>Car Umbrella,<li><li/> Color: Multicolor,<li><li/> High Quality Product', NULL, '', '1671', 1862, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 04:02:17', '2019-09-05 04:02:17', '', '', '', '0', '0', '0'),
(26, 'অটোমেটিক টুথপেস্ট ডিসপেন্সার', 'automatic-toothpaste-disposers', 490, 220, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>এটি অটোমেটিক ভাবে বাথরুমের দেয়ালে আটকে থাকে।(কোন প্রকার পিন বা পেরেক ছাড়াই)<li><li/> টুথব্রাশ প্রবেশ করানোর সাথে সাথেই অটোমেটিক ভাবে টুথপেষ্ট ব্রাশে প্রয়োজনমত জমা হবে।<li><li/>  একসাথে টুথব্রাশ ডিসপেনসার এবং টুথব্রাশ হোল্ডার<li><li/> ', NULL, '', '1371', 49794, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 04:05:27', '2019-09-05 04:05:27', '', '', '', '0', '0', '0'),
(27, 'Multi-function Cleaning Brush', 'multi-function-cleaning-brush', 2050, 2850, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>বাথ্রুম বা রান্না ঘর এর টাইলস পরিষ্কার করা খুব কষ্টের ও ভালো ভাবে পরিষ্কার ও হয় না ,  <li><li/>\r\nএটা দিয়ে আপনি খুব সুন্দর করে যে কোন টাইপের টাইলস ও স্টিলের সব কিছু পরস্কার করতে পাবেন <li><li/>\r\n\r\n যে কোনো ধরণের টাইলস খুব সুন্দর ভাবে করতে পাবেন <li><li/>\r\n স্টিলের সিঙ্ক থেকে সব কিছুই ব্রাশ করতে পারবেন <li><li/>\r\n বাথরুমের টাইলস পরিষ্কার এর জন্য খুবই দরকারি একটা ব্রাশ ।  <li><li/>\r\n এটা একটা অটোম্যাটিক ব্রাশ  <li><li/>\r\n চার্জ সিস্টেম <li><li/>\r\n রিচারজেবেল বলে ব্যাবহার করতে <li><li/>\r\n এক বার চার্জ দিয়ে ৪০-৫০ মিনিট চালাতে পারবেন। <li><li/>\r\n ৩ ধরণের ব্রাশ থাকবে সাথে <li><li/>', NULL, '', '1843', 494, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 04:08:44', '2019-09-05 04:08:44', '', '', '', '0', '0', '0'),
(28, 'ইলেকট্রিক সিঙ্গেল চুলা', 'electric-single-oven-stove', 1500, 700, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>সিঙ্গেল বার্নার <li><li/>কালারঃ ব্ল্যাক <li><li/>ডায়মেনশনঃ 8\" W x 8\" D <li><li/>কুকিং সার্ফেস ডায়ামিটারঃ 3.75 \" <li><li/>ওজনঃ 4.5 lbs <li><li/>পাওয়ারঃ 1100W', NULL, '', '1026', 49979, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 04:11:22', '2019-09-05 04:11:22', '', '', '', '0', '0', '0'),
(29, 'ড্রিম মাশরুম লাইট', 'led-drim-light', 300, 100, 101, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '  ', '<li>অটো অন/অফ সেন্সরযুক্ত ড্রিম মাশরুম লাইট<li><li/> ৯৫% পর্যন্ত ইলেকট্রিসিটি সাশ্রয় করে<li><li/> ৭ টি ভিন্ন ভিন্ন রঙ (স্বয়ংক্রিয় রঙ পরিবর্তিত হয়) <li><li/>পাওয়ার: ০.৩ ওয়াট <li><li/>ড্রাইভ; ২২০ ভোল্ট <li><li/>সাইজ: ৫৮ ×৪৭ ×১৫০ মি.মি', NULL, '', '1008', 4592, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 04:14:54', '2019-09-05 04:14:54', '', '', '', '0', '0', '0'),
(30, 'দই বানানো মেশিন', 'doi-maker', 1200, 400, 450, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '   ', '<li>হাতের কোন স্পর্শ ও পরিশ্রম ছাড়াই তৈরি হবে দই<li><li/>\r\nঘরে বসে সহজেই দই তৈরী করুন<li><li/>\r\nOn/Off সুইচ<li><li/>', NULL, '', '1493', 4888, '', 'fixed', '', '', 'In stock', 1, 'bestsell', '2019-09-05 04:20:45', '2019-09-05 04:20:45', '', '', '', '0', '0', '0'),
(31, ' Arctic এয়ার কুলার আলট্রা', 'Ultra-New-Arctic-Air-Cooler', 2800, 1600, 400, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '  ', '<li> এই এয়ার কুলারটি বায়ু থেকে বায়ু উত্তোলন করে তার বাষ্পীয় জল ফিল্টারের মাধ্যমে শিতল, আরামদায়ক ও পরিছন্ন বাতাস তৈরি করে।<li><li/>\r\n\r\nশুধু মাত্র ১ বার পানি দিয়ে ভরাট করলে ৮ ঘন্টা পর্যন্ত চলবে।<li><li/>\r\n\r\nএটি ঠান্ডা তাপমাত্রা ৬ – ৮ ডিগ্রি পর্যন্ত হয়ে থাকে যা এসি থেকে কোন অংশে কম নয়।<li><li/>\r\n\r\nবিদ্যুত খরচ একে বারেই কম। এটি Car Charger, Powerbank, Mobile Adaptor, Laptop এর চার্জিং পোর্ট দিয়ে ব্যবহার করা যাবে।<li><li/>\r\n\r\nএই এয়ার কুলারটি চালু করে আপনি রাতে আরামে ঘুমাতে পারবেন কোন প্রকার এসির ঝামেলা ছাড়াই।<li><li/>', NULL, '', '1875', 19879, '', 'fixed', '', '', 'In stock', 1, 'bestsell', '2019-09-05 04:24:20', '2019-09-05 04:24:20', '', '', '', '0', '0', '0'),
(32, 'Capsule Umbrella', 'capsule-umbrella', 790, 350, 100, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '  ', '<li>Package Dimensions: 6.9 x 2.4 x 2.3 inches<li><li/>\r\nItem Weight: 9.6 ounces<li><li/>\r\nShipping Weight: 9.6 ounces<li><li/>', NULL, '', '1851', 4981, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 04:27:43', '2019-09-05 04:27:43', '', '', '', '0', '0', '0'),
(33, 'Manual Meat Grinder', 'manual-meat-grinder', 1750, 1000, 250, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '  ', '<li>এর মাধ্যমে মাংসের কিমা তৈরি করা যায় খুব সহজে<li><li/>\r\nম্যাটেরিয়াল: Aluminum  মাংসের সসেজ, <li><li/>\r\nপ্যাটিস বা জার্কি বানানোর জন্য আদর্শ<li><li/>\r\n এরগোনমিক ডিজাইন<li><li/>  \r\nহাই কোয়ালিটি ও ব্র্যান্ড নিউ প্রোডাক্ট<li><li/>', NULL, '', '1833', 4993, '', 'fixed', '', '', 'In stock', 1, 'bestsell', '2019-09-05 04:30:51', '2019-09-05 04:30:51', '', '', '', '0', '0', '0'),
(34, 'V8 স্মার্ট ওয়াচ -সিম সাপোর্টেড', 'v8mobil-watch', 1300, 2200, 100, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '  ', '<li>V8 স্মার্ট ওয়াচ -সিম সাপোর্টেড এই চমৎকার ঘড়িটি আপনার স্মার্ট মোবাইলের এক্সট্রা গিয়ার হিসেবে কাজ করবে<li><li/> চাইলে এতে সিম ভরে মোবাইল হিসেবেও ব্যবহার করতে পারবেন<li><li/> CPU: MTK6261D;<li><li/> ডিসপ্লেঃ 1.22\" LCD <li><li/>রেজ্যুলেশনঃ 240X240 <li><li/>মেমোরি কার্ড সাপোর্টঃ 32GB <li><li/>ব্লুটুথ ভার্সনঃ 3.0; <li><li/>ক্যামেরা: 2M <li><li/>সিমঃ মাইক্রো সিম (১টি)<li><li/> ব্যাটারি:280mAh <li><li/>ফিচারঃ Dial, Hands-free Calls, Call History, Phone Book;', NULL, '', '1050', 49732, '', 'fixed', '', '', 'In stock', 1, 'bestsell', '2019-09-05 04:35:05', '2019-09-05 04:35:05', '', '', '', '0', '0', '0'),
(35, 'Mini WiFi Wireless HD Camera 1080P', 'mini-wifi-wireless-hd-camera-1080p', 3800, 2400, 300, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '  ', '<li><li/>Allows you to control children, nannies, the elderly and their caregivers, domestic animals, to control business and much more in seconds during your absence. <li><li/>\r\n– Great for traveling to keep an eye on your hotel room.<li><li/>\r\n– It is applicable as a spy security camera for your office, business or home.\r\n– Used anywhere where an electrical outlet is present<li><li/>\r\n1xAOBO Mini Spy Camera <li><li/>\r\n1xEnglish Instruction<li><li/>\r\n1x Bracket<li><li/>\r\n1x Iron Sheets<li><li/>\r\n1x Card Reader<li><li/>\r\n2x USB Charging Cables<li><li/>', NULL, '', '1720', 49972, '', 'fixed', '', 'fPh8-okHooY', 'In stock', 1, 'general', '2019-09-05 04:39:16', '2019-09-05 04:39:16', '', '', '', '0', '0', '0'),
(36, 'Revoflex Xtreme workout set', 'revoflex-xtreme-workout', 1490, 420, 600, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '  ', '<li>একের ভিতর সব। একটি মাত্র যন্ত্র দিয়ে সব ব্যায়াম চালিয়ে যাবেন নিজের বাসায়।<li><li/>\r\nOffers up to 6 levels of training, 44 different exercises.<li><li/>\r\nExpand chest, back, arms, shoulders and abs in one motion.<li><li/>\r\nShape your body quickly, easily and effortlessly.<li><li/>\r\nCompact so that you can take it anywhere!<li><li/>\r\nMaterial: Pressured PP, ABS plastic, latex rubber rope, and EVA pad<li><li/>\r\nDimensions: 43*19* 13sm.<li><li/>\r\nWeight: 900gr<li><li/>\r\nPackage includes<li><li/>', NULL, '', '1318', 3946, '', 'fixed', '', 'G3nqomnWcV0', 'In stock', 1, 'general', '2019-09-05 04:45:26', '2019-09-05 04:45:26', '', '', '', '0', '0', '0'),
(37, 'SERVO K07 Pen mini Cellphone', 'pen-mini-cellphone', 3200, 1700, 210, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '  ', '<li>SEVO K07 Pen mini Phone<li><li/>\r\n0.96 inch Tiny Screen<li><li/>\r\nBluetooth control distance (10m )<li><li/>\r\nHealthy living ultra-low radiation<li><li/>\r\nDual SIM cards Dual standby ( 2 Nano SIM card)<li><li/>\r\nRecording Pen<li><li/>\r\nMemory Card (Maximum support 32GB expansion )<li><li/>\r\nSize: 117*21mm<li><li/> Battery : 300mAh <li><li/> Single camera : 2MP <li><li/>\r\n( Weight 33g )<li><li/>\r\nBluetooth Dialer Sync contacts you can receive incoming call number/contact<li><li/>', NULL, '', '1440', 4890, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 04:50:09', '2019-09-05 04:50:09', '', '', '', '0', '0', '0'),
(38, 'Scitech Smart Watch', 'scitech-smart-watch', 1800, 1350, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>Description<li><li/>\r\nCaméra: 1.3M<li><li/>\r\nVersion Bluetooth: 3.0<li><li/>\r\nCPU (processeur<li><li/>)\r\nBracelet: silicone\r\nAffichage: écran LCD IPS HD de 1,54 po<li><li/>\r\nDétails du produit<li><li/>\r\nEcran tactile haute résolution<li><li/>\r\nSim Card Slot<li><li/>\r\nFonction appel téléphonique<li><li/>\r\nAppareil photo<li><li/>\r\nFente pour carte TF<li><li/>\r\nCaméra: 1.3M<li><li/>\r\nVersion Bluetooth: 3.0<li><li/>\r\nCPU (processeur<li><li/>)\r\nBracelet: silicone<li><li/>\r\nAffichage: écran LCD IPS HD de 1,54 po<li><li/>', NULL, '', '1865', 5000, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 04:53:41', '2019-09-05 04:53:41', '', '', '', '0', '0', '0'),
(39, 'Bushnell Professional Binoculars', 'bushnell-professional-binoculars', 2000, 1300, 200, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '  ', '<li>দূরের জিনিস এখন আর দূরে নয়, \r\n<li><li/>আপনি দূরের যে কোন কিছু খুব সহজে পরিষ্কার দেখতে পারবেন<li><li/>\r\nযারা বাইরে ভ্রমনের কথা ভাবছেন, তারা সাথে রাখতে পারেন এই আকর্ষণীয় বাইনোকুলারটি<li><li/>\r\nম্যাটেরিয়ালঃ প্লাস্টিক<li><li/>\r\nগ্লিম নাইট ভিশন<li><li/>\r\nজুম: 10x – 90x<li><li/>\r\nঅবজেক্টিভ ডায়ামিটার: 80 x<li><li/>\r\nইফেক্টিভ ডায়ামিটার অফ অবজেক্টিভ: 60 mm<li><li/>\r\nপ্যাকেজে যা রয়েছে: একটি Bushnell বাইনোকুলার, ক্যারিং ব্যাগ, ক্যারিং স্ট্র্যাপ ও মিরর ক্লিনিং ফেব্রিক<li><li/>', NULL, '', '1404', 4977, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 04:56:32', '2019-09-05 04:56:32', '', '', '', '0', '0', '0'),
(40, 'সিকিউরিটি অ্যালার্ম ক্লক', 'alarm-Lock', 750, 380, 50, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '  ', '<li> বাইক ও হাউজ সিকিউরিটি অ্যালার্ম ক্লক<li><li/>\r\n* অসৎ উদ্দেশে লকের গায়ে সামান্য আঘাত প্রদান মাত্রই উচ্চ শব্দে অ্যালার্ম (১১০ ডেসিবল)বেজে উঠবে <li><li/>\r\n* ফল্স অ্যালার্ম প্রটেক্টেড, <li><li/>\r\n*আর তাই যে কেউ ধরা মাত্রই(আঘাত প্রদান ব্যতীত)বেজে উঠে আপনাকে বিভ্রান্ত করে তুলবে না <li><li/>\r\n* মোটরসাইকেল, বাইসাইকেল এবং বাসা বাড়ির নিরাপত্তায় বিশেষভাবে উপযোগী<li><li/>\r\n* সম্পূর্ণ স্টেইনলেস স্টিলের তৈরি তাই যথেষ্ট মজবুত <li><li/>\r\n* দু’ভাবেই ব্যবহারযোগ্য, আর তাই ব্যবহার করা যাবে সাধারণ তালা হিসেবেও <li><li/>\r\n* অ্যালার্ম বিহীন দীর্ঘস্থায়ী ব্যাটারি, তাই চলে বহুদিন <li><li/>\r\n* ব্যাটারি সহজলভ্য হওয়ায় খুব সহজেই প্রতিস্থাপনযোগ্য।<li><li/>', NULL, '', '1027', 49838, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 04:59:00', '2019-09-05 04:59:00', '', '', '', '0', '0', '0'),
(41, 'Pretty Doomz Plus Capsules  ', 'pretty-doomz-plus-capsules', 1600, 100, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>স্তনকে আকারে বড়,<li><li/>\r\nটানটান এবং স্তনকে উজ্জ্বল ও ফর্সা করে।<li><li/>\r\nPretty Doomz Plus বিশেষভাবে মেয়েদের জন্য তৈরি ।<li><li/>\r\nএটি হরমোন এর ভারসাম্য সামঞ্জস্য রক্ষা করে এবং হরমোন বৃদ্ধি করে যার ফলে স্তনবৃদ্ধি হয়।<li><li/>\r\nআর স্তনের সৌন্দর্য্য বাড়ানোর সাথে সাথে স্তনকে টানটান করে।<li><li/>\r\nএটি কোন ঔষধ নয় এটি একটি ভিটামিন যেটিতে আছে গূলটা, কোলাজেন, মেরিন কোলাজেন, জিংসিং, পাইনবার্ক।<li><li/> এটি ব্যবহারে আপনার স্তন বর্ধিতকরণ সহ আপনার স্তনের আকৃতি সুগঠিত করবে ও ত্বক পারমানেন্ট উজ্জল হবে এবং আপনার ভারজিন টাইট করবে ।<li><li/> এটি FDA এবং GMP দ্বারা পরিচালিত।<li><li/>\r\nএই ক্যাপ্সুলটি সম্পূর্ণ প্রাকৃতিকভাবে তৈরি করা হয়। <li><li/>\r\nএটি সরাসরি thailand থেকে আমদানি করা হয়।<li><li/>\r\nএর কোন পার্শ্বপ্রতিক্রিয়া নাই।<li><li/>\r\nব্যবহার বিধিঃ-\r\nপ্রতিদিন সকাল এবং রাত্রে খাবার এর ১০ মিনিট আগে ১ টা করে ক্যাপসুল ।', NULL, '', '2480', 5000, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 05:02:24', '2019-09-05 05:02:24', '', '', '', '0', '0', '0'),
(42, 'পোর্টেবল ইউএসবি জুস মেকার', 'porteble-usb-jussar', 1550, 750, 300, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '  ', '<li>চলে এসেছে গ্রীষ্মকাল।\r\n <li><li/>গ্রীষ্মকাল মানেই ফলের মাস। <li><li/>গ্রীষ্মকাল নানারকমের রসালো, ঠাণ্ডা, মিষ্টি ফলের সময়; যেমন: আম, তরমুজ, জামরুল, লিচু, কাঁঠাল ইত্যাদি ।<li><li/>\r\nতাই ফলের জুস বানানোর জন্য নিয়ে এলাম পোর্টেবল জুস মেকার। <li><li/>খুব সহজেই বানিয়ে নিতে পারবেন আপনার মনের মতো জুস এই পোর্টেবল ইউএসবি জুস মেকার এর মাধ্যমে।<li><li/>\r\nস্মল সাইজ<li><li/>\r\nমাল্টি-ইউজ  কাপ/ জুসার ব্লেন্ডার/ পাওয়ার ব্যাংক<li><li/>\r\nবিভিন্ন ফল ও সব্জী মিক্স করতে পারে<li><li/>\r\nস্বাস্হ্যসম্মত ও পরিবেশবান্ধব<li><li/>\r\nনন-টক্সিক ফুড গ্রেড PP/PC ম্যাটেরিয়াল<li><li/>\r\nডাবল সেফটি প্রোটেকশন সুইচ<li><li/>\r\nচার্জ/ ডিসচার্জ প্রোটেকশন<li><li/>\r\nকুইক স্পিড, ১ মিনিটেই তৈরি হয়ে যায় জুস<li><li/>', NULL, '', '1703', 4926, '', 'fixed', '', 'VpT_N6b0DRE', 'In stock', 1, 'general', '2019-09-05 05:10:10', '2019-09-05 05:10:10', '', '', '', '0', '0', '0'),
(43, 'ভেজিটেবল কাটার অ্যান্ড স্লাইসার', 'vegetable-cutter-sliceer', 1650, 1850, 200, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '  ', '<li>সকল ধরনের সবজী কুচি করতে পারবেন<li><li/>  \r\nনিজের ইচ্ছা মত সালাদ করতে পারবেন <li><li/>  \r\nবিস্কুট কুচি, মাংস কিমা করতে পারবেন<li><li/>  ', NULL, '', '1832', 4987, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 05:12:59', '2019-09-05 05:12:59', '', '', '', '0', '0', '0'),
(44, 'নাইসার ডাইসার প্লাস', 'nicer-dicer-plus', 750, 450, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>Nicer Dicer Plus -এর সাহায্যে সালাদ/ফল কাটুন খুব তাড়াতাড়ি <li><li/>স্পেস সেভিং<li><li/> ক্যাপাসিটি: ১৫০০ মিলি<li><li/> ৫টি আলাদা পার্টসের সাহায্যে বিভিন্নভাবে সালাদ/ফল কাটা যায়', NULL, '', '1006', 480, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 05:15:28', '2019-09-05 05:15:28', '', '', '', '0', '0', '0'),
(45, 'HUAWEI GSM WIRELESS CORDLESS PHONE', 'huawei-gsmwire-lesscordless-phone', 2850, 4500, 50, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '  ', '<li>Brand: Huawei Huawei<li><li/>\r\nWarranty: 12 months<li><li/>\r\n* SUPPORTS THE <li><li/>GSM850/900/1800/1900 MHz STANDARD<li><li/>\r\n* SUPPORTS MULTIPLE SUPPLEMENTARY SERVICES<li><li/>\r\n* 1.8TFT COLOUR LCD<li><li/>\r\n* SUPPORTS HIGH QUALITY VOICE SERVICE<li><li/>\r\n* SUPPORTS SMS<li><li/>\r\n* FM RADIO<li><li/>\r\n* BIG BUTTON FONT<li><li/>\r\n* ELEGANT DESIGN<li><li/>', NULL, '', '1836', 4996, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 05:27:34', '2019-09-05 05:27:34', '', '', '', '0', '0', '0'),
(46, 'Ferrari Car Mobile Phone', 'ferrari-car-mobile-phone', 2500, 1350, 510, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '  ', '<li>Model No.	NEWMIND F15<li><li/>\r\nDimensions	102*47*21.8mm <li><li/>\r\nNet Weight	95g <li><li/>\r\nService Provide	Unlocked <li><li/>\r\nStyle	Flip <li><li/>\r\nShell Material	Plastic<li><li/>\r\nBand	GSM850/900/1800/1900MHz; GPRS <li><li/>\r\nSim Card	Dual SIM card dual standby <li><li/>\r\nScreen	1.77 inch QCIF TFT LCD hard screen, 160*128px <li><li/>\r\nPlatform	RDA8851CL <li><li/>\r\nPhonebook	100 <li><li/>\r\nInput	Keypad <li><li/>\r\nMessage	SMS <li><li/>\r\nRingtones Type	Polyphonic/MP3 <li><li/>\r\nCamera	Single 0.08MP back camera, up to 320*240px <li><li/>\r\nFM Radio	Yes, need plug in earphone<li><li/>\r\nMemory	Support TF card up to 8GB max<li><li/>\r\nAudio File Format	MP3/MIDI/WAV/AMR <li><li/>\r\nVideo File Format	AVI,3GP,MP4 <li><li/>\r\nEarphone Port	12PIN Micro USB <li><li/>\r\nBluetooth	Yes, support <li><li/>\r\nStandby Time	up to 200 hours <li><li/>\r\nOther Features	Tasks, alarm, calender, E-book, sound recorder etc. <li><li/>\r\nLanguages	English, French, Portuguese, Russian, Arabic, Indian, Persian. <li><li/>\r\nColor	Black, yellow, red, golden, green, white, blue <li><li/>\r\nAccessories	1 x 800mAh battery(BL-4C) <li><li/>\r\n <li><li/>1 x Charger<li><li/>\r\n', NULL, '', '1897', 4899, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 05:30:51', '2019-09-05 05:30:51', '', '', '', '0', '0', '0'),
(47, ' L-Gluta 5 Berry Capsule ', 'l-gluta-5-berry', 1800, 780, 500, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '  ', '<li>শরীর ফর্সা করতে ১০০% কার্যকর। <li><li/>\r\nসরাসরি থাইল্যান্ড থেকে  আমদানিকৃত<li><li/> L-Gluta 5 Berry Capsule খেয়ে মাত্র কয়েক দিনের মধ্যেই\r\nআপনি হয়ে উঠবেন ভিতর থেকে সুন্দর কমল ও\r\nলাবণ্যময়,<li><li/> হয়ে উঠুন সকলের নিকট অাকর্ষণীয়। <li><li/>\r\nএই ক্যাপসুল খেলে আপনার যা যা উপকার\r\nহবে :<li><li/>\r\nমুখ ও পুরো শরীর ফর্সা করে স্থায়ী ভাবে।<li><li/>\r\nব্রণ ও কালো দাগ দূর করবে,<li><li/>\r\nবয়সের ছাপ মুছে দিবে<li><li/>\r\nকুচকে যাওয়া ত্বককে টানটান করবে<li><li/>\r\nচোখের নিচে কালো দাগ দূর করে<li><li/>\r\nনতুন স্কীন উঠতে সাহায্য করবে<li><li/>\r\nস্কিনকে নরম ও কমল করে তুলবে<li><li/>\r\nস্কীনের তৈলাক্ত ভাব দূর করে<li><li/>\r\nত্বকের ডার্কসার্কেল দূর করবে<li><li/>\r\nস্কিনের মৃত্য কোষ দূর করবে<li><li/>\r\nস্কিনের হোয়াইটহেডস দূর্র করবে<li><li/>\r\nত্বকের ছিদ্র টাইট করতে সাহায্য করবে<li><li/>\r\nআপনি ভিতর থেকে স্থায়ীভাবে ফর্সা<li><li/>\r\nহবেন \r\nসমস্ত শরীর ফর্সা করবে৷<li><li/>\r\nলিভার, ফুসফুস, কিডনির ক্ষতিকর টক্সিন দূর\r\nকরবে।<li><li/>\r\nধুমপায়ী ও এ্যলকহোল পানকারীদের\r\nড্যামেজ কমাবে।<li><li/>\r\nআপনার মুখে ব্রন থাকলে চলে যাবে <li><li/>\r\nকোন দাগ বা ঘা ফাসড়া থাকলেও চলে\r\nযাবে। কারন এখানে নিম এবং হলুদ আছে।<li><li/>\r\nরক্ত পরিষ্কার করবে৷<li><li/>\r\nস্কিনকে স্মুথ এবং গ্লো করবে৷<li><li/>\r\n১ টা করে ক্যাপসুল লাঞ্চ ও ডিনারের\r\n৩০মিনিট আগে খেতে হবে।<li><li/>\r\n(সাবধান !!!)<li><li/>\r\nবৃদ্ধ এবং শিশুদের জন্য ইহা গ্রহন যোগ্য নয়<li><li/>\r\nগর্ভাবস্থা বা স্তন খাওয়ানোর সময়<li><li/>\r\nব্যবহার করবেন না।<li><li/>\r\nশিশুদের এবং সূর্যালোক থেকে দূরে থাকুন<li><li/>\r\nঅবশ্যই স্বাভাবিক খাবারের তালিকায়\r\nপুস্তিকর খাবার রাখুন<li><li/>\r\nL-Gluta 5 Berry Capsule  শরীরের ভিতর ও বাহির থেকে\r\nকাজ করে।<li><li/> যার কোন পার্শ্বপ্রতিক্রিয়া\r\nনেই।<li><li/>', NULL, '', '2024', 4942, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 05:36:24', '2019-09-05 05:36:24', '', '', '', '0', '0', '0'),
(48, 'রিমোট কন্ট্রোলড ইলেকট্রিক সুইচ', 'remote-control-sweige', 790, 450, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>এই রিমোট কন্ট্রোল দিয়ে আপনার বাসা বা অফিসের দুইটি লাইট অফ/ অন<li><li/> এবং একটি ফ্যান অফ/ অন, ফ্যানটির গতি নয়টি অবস্থায় নিয়ন্ত্রণ করতে সাহায্য করবে; <li><li/>রিমোট টি ৪০ ফিট দূর থেকে কাজ করবে <li><li/>আপনার পরিবারকে বৈদ্যুতিক শক থেকে নিরাপদ রাখবে <li><li/>আপনার বাসায় যে বৃদ্ধ বাবা ,মা অথবা দাদা, দাদী তাহারা বিছানায় শুয়ে রিমোট কন্ট্রোলারটির সাহায্যে ফ্যান/লাইট অন-অফ করতে পারবে <li><li/>অসুস্থ মানুষের জন্য এটি খুবই প্রয়োজনীয় মশারির ভিতর থেকে ফ্যান লাইট অফ অন করতে পারবেন <li><li/>এতে মশারির মধ্যে আর মশা যাবার কোন সুযোগ নাই <li><li/>দুই বছরের গ্যারান্টি<li><li/>', NULL, '', '1389', 4844, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 05:39:01', '2019-09-05 05:39:01', '', '', '', '0', '0', '0'),
(49, 'ড্রিল মেশিন সেট (১০০ পিস)', 'drilmachine', 2300, 2600, 200, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '  ', '<li>Brand:কিংসাই পাওয়ার টুলস সাথে যা যা থাকছেঃ <li/><li>১ পিস ড্রিল ১ পিস ড্রিল মেশিনের কার্বন <li/><li> ১ পিস হ্যামার হ্যান্ডেল <li/><li> ১ পিস হাতুড়ি <li/><li> ১ পিস স্ক্রু ড্রাইভার <li/><li> ১ পিস কম্বিনেশন প্লাস <li/><li> ১ পিস সিলাই রেন্জ <li/><li> ১ পিস কেবল কাটার <li/><li> ১ পিস মেজারিং টেপ  <li/><li>৯ পিস সকেট রেন্জ (গুটি সেট) <li/><li>  <li/><li>১২ পিস স্ক্রু সেট  (১২ রকমের) <li/><li> ১৫ পিস ড্রিল বিট <li/><li> ৫০ পিস রয়েল প্লাগ', NULL, '', '1010', 3899981, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 05:42:36', '2019-09-05 05:42:36', '', '', '', '0', '0', '0'),
(50, 'S9 RC Mini Foldable Pocket Drone', 's9-rc-mini-foldable-pocket-drone', 5200, 3600, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>S9 is a micro foldable RC quadcopter intended for beginners, <li><li/>it is even smaller than your fist.<li><li/> Just unfold the arms of the drone manually, <li><li/>and you will be able to fly the drone without any difficulty. <li><li/>Headless Mode allows you to fly freely to wherever you like regardless of the orientation.<li><li/> You can also make the drone perform the awesome 3D stunt and recall it to the home point effortlessly.<li><li/>\r\n\r\nMain Features:<li><li/>\r\n1.Extremely portable, 6.2 x 4.9 x 3cm, as big as a kiwi when it is folded;<li><li/>\r\n2.Headless Mode gives you maximum freedom in piloting the drone;<li><li/>\r\n3.One Key Return makes it extremely facile to recall the quadcopter;<li><li/>\r\n4.Speed Switch - adapt the flying speed to the environment immediately;<li><li/>\r\n5.360-degree Flip, namely, awesome performance of 3D aerobatics.<li><li/>', NULL, '', '1725', 39984, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 05:46:04', '2019-09-05 05:46:04', '', '', '', '0', '0', '0'),
(51, 'নাইফ শার্পনার', 'Knife-sharpner', 550, 190, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>ম্যাটারিয়াল: Polypropylene<li><li/>\r\n\r\n৪টি AA ব্যাটারিতে চলবে (সংযুক্ত )li><li/>\r\n\r\nহাই কোয়ালিটি নাইফ শার্পনারli><li/>\r\n\r\nপুরাতন ছুরি নতুনের মত ধার করার li><li/>অসাধারণ গ্যাজেট\r\n\r\nঘরে বসেই ধার করুন আপনার ছুরি-কাচি এই গ্যাজেট এর মাধ্যমেli><li/>\r\n', NULL, '', '1078', 49877, '', 'fixed', '', '5MQ9rhbC8Tg', 'In stock', 1, 'general', '2019-09-05 05:50:01', '2019-09-05 05:50:01', '', '', '', '0', '0', '0'),
(52, 'Supermoon রিচার্জ্যাবল টেবিল ফ্যান উইথ লাইট', 'supermoon-light-fan', 1250, 680, 100, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '  ', '<li>ব্র্যান্ডঃ Supermoon <li><li/>মডেলঃ 6610 <li><li/>টাইপঃ টেবিল ফ্যান উইথ লাইট রিচার্জ্যাবল; <li><li/>ফুল চার্জে ফ্যান ৪ ঘন্টা এবং লাইট ৮ ঘন্টা জ্বলবে <li><li/>স্টাইলিশ ফোল্ডিং ডিজাইন এয়ার ভলিউম (কিউবিক মিটার/ মিনিট): 14 <li><li/>ব্যাটারী ক্যাপাসিটি: 3000 mAh <li><li/>প্রপেলার সাইজঃ 5\" 2 <li><li/>স্পিড সেটিং ফ্যান <li><li/>স্পিডঃ 2100 RPM LED <li><li/>লাইট ভোল্টেজঃ 220 V, 50 Hz <li><li/>পাওয়ারঃ ২৫ ওয়াট লো এন্ড হাই লাইট <li><li/>অ্যাডজাস্টেবল সুইচ<li><li/> কন্ট্রোলঃ পুশ বাটন <li><li/>ওয়েটঃ ২ কেজি <li><li/>ম্যাটেরিয়াল: PVC প্লাস্টিক <li><li/>কালারঃ র‌্যান্ডম', NULL, '', '1021', 4920, '', 'fixed', '', '5jcpNqZGraU', 'In stock', 1, 'general', '2019-09-05 05:53:39', '2019-09-05 05:53:39', '', '', '', '0', '0', '0'),
(53, 'DSLR Type Mini HD Video Camera', 'dslr-type-mini-hd-video-camera', 2500, 1500, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>Video Form: AVI<li><li/>\r\nVideo Coding: M-JPEG<li><li/>\r\nVideo Resolution: 1280 x 720<li><li/>\r\nFrame Rate: 30FPS<li><li/>\r\nPicture Mode: JPG<li><li/>\r\nImage Ratio: 7:5<li><li/>\r\nCharging Voltage: DC-5V<li><li/>\r\nMemory 32GB Supported (not included)<li><li/>\r\nDimensions (L x W x H): 5 x 3 x 1.8cm<li><li/>', NULL, '', '1872', 39996, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 06:17:35', '2019-09-05 06:17:35', '', '', '', '0', '0', '0'),
(54, 'Button Video Camera', 'button-video-camera', 1650, 1000, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li><li/>Long time video option<li><li/>\r\n32GB Memory card supported<li><li/>\r\nCharging directly from USB port<li><li/>\r\nSensor: CMOS<li><li/>\r\nPhoto Resolution: 1280 x 960<li><li/>\r\nRecords Video, Audio<li><li/>', NULL, '', '1873', 4990, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 06:25:16', '2019-09-05 06:25:16', '', '', '', '0', '0', '0'),
(55, ' WS1816 Wireless Bluetooth Karaoke ', 'ws1816-wireless-bluetooth-karaoke', 1600, 1200, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '', NULL, '', '1876', 49999, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 06:28:29', '2019-09-05 06:28:29', '', '', '', '0', '0', '0'),
(56, 'Mini Q7 Mini Wifi Camera', 'mini-q7-mini-wifi-camera', 2000, 1400, 110, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '  ', '<li>Product Name: WIFI/P2P network camera\r\n<li><li/>\r\nVideo Format: AVI<li><li/>\r\nVideo Coding: M-JPEG<li><li/>\r\nRemote Video Resolution: 1080*600 HD<li><li/>\r\nVideo Frame Rate: 15fps±1fps<li><li/>\r\nSensor: 1/3\" Color CMOS<li><li/>\r\nAntenna: 2.4G 802.11n WIFI Built in Antenna<li><li/>\r\nStorage: Support TF card, can be extended to 32G<li><li/>\r\nVideo Software: Operating System Software or Mainstream Audio Playing<li><li/>\r\nImage ratio: 4:3<li><li/>\r\nCharging voltage: DC-5V<li><li/>\r\nSupport Micro SD Card (TF Card)<li><li/>\r\nBattery high capacity polymer lithium battery.<li><li/>\r\nPakcage:<li><li/>\r\n\r\n1* Camera.<li><li/>\r\n1* USB cable.<li><li/>\r\n1* Card reader.<li><li/>\r\n1* User Manual.<li><li/>', NULL, '', '1870', 4993, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 06:35:43', '2019-09-05 06:35:43', '', '', '', '0', '0', '0'),
(57, '5 Leaves Electric Clip Fan', '5-leaves-electric-clip-fan', 900, 450, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '', NULL, '', '1717', 0, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 06:38:05', '2019-09-05 06:38:05', '', '', '', '0', '0', '0'),
(58, 'ইলেকট্রিক হট শাওয়ার', 'hot-shower', 1800, 700, 200, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '  ', '<li>শীতে ঠাণ্ডাকে জয় করতে ব্যবহার করুন হট শাওয়ার ঠান্ডা পানি গরম করার মেশিন। <li><li/>\r\nব্রাজিলিয়ান টেকনোলজীতে তৈরী অটোমেটিক হট ওয়াটার শাওয়ার। <li><li/>ব্যবহার করা সহজ।<li><li/> শাওয়ারটি বৈদ্যুতিক লাইনের সাথে সেট করে সুইচ টিপলেই তাৎক্ষনিক হট ওয়াটার বের হবে। <li><li/>ইন্সটলেশন খুবই সহজ।<li><li/>', NULL, '', '1866', 4995, '', 'fixed', '', '', 'In stock', 1, 'home', '2019-09-05 06:41:34', '2019-09-05 06:41:34', '', '', '', '0', '0', '0'),
(59, '45 in 1 multi screw driver set', '45-in-1-multi-screw-driver-set', 650, 350, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>45 In 1 মাল্টি ফাংশন হার্ডওয়ার টুলস<li><li/>\r\nহাই কোয়ালিটি প্রোডাক্ট <li><li/>\r\nদৈনন্দিন জীবনে মোবাইল কম্পিউটার সহ টুকিটাকি অনেক কাজের ছোটো বড় নানান ধরনের স্ক্রু/ টুল খুলতে বা লাগাতে হতে পারে তার জন্য দরকার একটি টুল বক্স<li><li/>\r\nএই 45 in 1 টুল বক্সটি অনায়াসে আপনার কাজে সাহায্য করতে পারে, <li><li/>অফিস কিংবা বাসায় প্রয়োজনে নিজের কাজটুকু সেরে নিতে রাখতে পারেন এই টুল বক্স ব্যবহার করে<li><li/>', NULL, '', '1704', 4972, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 06:44:14', '2019-09-05 06:44:14', '', '', '', '0', '0', '0'),
(60, 'J9 সুপার মিনি ফ্লিপ ফোন', 'j9-mini-mobile', 2800, 1800, 300, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '  ', '<li>j9 Super Mini Flip Phone 1Sim <li><li/> Bluetooth Dialer Smallest Mobile Phone 18gm Weight<li><li/> Brand : LONG-CZ <li><li/>Model : j9 <li><li/>Platform : SC6531<li><li/> Network : GSM850/900/1800/1900 MHz<li><li/> Memory : 64MB + 64MB External<li><li/> Memory : NO<li><li/> Screen : OLED 0.66 Inch <li><li/>Size : Length 44mm <li><li/> Width24mm <li><li/> Height 16mm<li><li/> Colour : Black.Pink <li><li/>Weight : 18.5g <li><li/>Camera : NO<li><li/> Sim Card : Support: Mirco Iphone4<li><li/> Sim Card Double Standby (BT Bluetooth +GSM)<li><li/> Battery : 300mAh<li><li/>', NULL, '', '18510', 499873, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 06:47:16', '2019-09-05 06:47:16', '', '', '', '0', '0', '0'),
(61, 'পোর্টেবল এন্ড ফোল্ডেবল ল্যাপটপ টেবিল', 'PortableFoldableLaptopTable', 1400, 900, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>শুয়ে শুয়ে এখন ল্যাপটপ ব্যবহার করা<li><li/>মুভি দেখা হবে আগের চেয়ে অনেক সহজে ও স্বাস্থ্যের কোন ক্ষতি ছাড়াই\r\nইচ্ছেমত অ্যাডজাস্ট করা যায়<li><li/>\r\nখুব হাল্কা ও ফোল্ডেবল<li><li/>\r\nউন্নত এবং ইউজার ফ্রেন্ডলি<li><li/>\r\nUSB ইন্টারফেস<li><li/>\r\nডুয়াল কুলিং ফ্যান<li><li/>', NULL, '', '1034', 39949, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 06:49:30', '2019-09-05 06:49:30', '', '', '', '0', '0', '0'),
(62, 'Original Sweat Slim Belt', 'sweat-slim-belt', 1200, 280, 300, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '  ', '<li>সরাসরি ইন্ডিয়া থেকে আমদানি কৃত।<li><li/>\r\n<li>আপনার পেটের অতিরিক্ত মেদ (ভুঁড়ি) ও চর্বি খুব সহজেই কমানোর জন্য আমরা আপনার জন্য নিয়ে এসেছি  Original Sweat Slim Belt<li><li/>যা খুব দ্রুত (এটি পরীক্ষিত ) ১০০% গ্যারান্টি আপনার অতিরিক্ত মেদ (ভুঁড়ি) ও চর্বি কমিয়ে আপনাকে স্লিম ও আকর্ষণীয় করে তুলবে ।<li><li/> এটি ব্যবহার করা খুবি সহজ ।<li><li/>\r\nআপনাদের সুবিধার্থে কিছু অরজিনাল ছবি দেওয়া হয়েছে ।<li><li/>\r\n• মহিলা ও পুরুষদের জন্য একটি অনন্য গেজেট (যা আপনার অতিরিক্ত মেদ কমাতে সাহায্য করবে)।<li><li/>\r\n• আপনার ফিগার শেপ এর মধ্যে থাকবে।<li><li/>\r\n• খুব সহজেই ব্যবহার উপযোগী ।<li><li/>\r\n• এটি আপনি বাসায়, হাঁটার সময়, কাজের মধ্যে , শপিং এ , জগিং এ ব্যবহার করতে পারেন ।<li><li/>\r\n• এটির ব্যবহারে আপনার বিরক্তিবোধ করবেন না, স্বস্তি ও আরামদায়ক মনে হবে ।<li><li/>\r\n• এটি আপনাকে আরও আকর্ষণীয় ও স্লিম করে তুলবে।<li><li/>', NULL, '', '1044', 9960, '', 'fixed', '', 'czJMw9z4b4Q', 'In stock', 1, 'general', '2019-09-05 06:53:01', '2019-09-05 06:53:01', '', '', '', '0', '0', '0'),
(63, 'NOKIA 3310 (2018)', 'nokia-3310-2018', 2800, 750, 900, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '  ', '<li>নোকিয়া ৩৩১০ স্পষ্ট কথা বলার জন্য এই ফোনটি অন্যতম।<li><li/>\r\nBattery Type Lithium-ion 1200 mAh ২২ ঘণ্টা টক টাইম।<li><li/>\r\n২ টা সিম কার্ড ব্যবহার করতে পারবেন।<li><li/>\r\nহাই কোয়ালিটি নেটওয়ার্ক পাবেন।লং লাইম চার্জ থাকে।<li><li/>\r\nAlert types Vibration; MP3 ringtones ,Bluetooth v3.0, A2DP<li><li/>\r\nCamera 2 Megapixel (LED Flash), Radio FM radio ,3.5mm Jack Yes<li><li/>', NULL, '', '1047', 49824, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 06:56:53', '2019-09-05 06:56:53', '', '', '', '0', '0', '0'),
(64, 'বেবী বাউন্সার ব্যলেন্স সফট', 'baby-bouncer-balance-soft', 2200, 3500, 200, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '  ', ' <li>চমৎকার একটি পন্য যা দিয়ে আপনার বাচ্চা আনন্দের সাথে খেলা করবে। <li><li/> বাচ্চা পা নাড়াচাড়া করলে এটাও বাওঞ্চ(দুলতে) করতে থাকবে ।  <li><li/>এটা ব্যাবহারে আপনার বাচ্চা নিজে নিজে খেলতে থাকবে ঘণ্টার পর ঘণ্টা।  <li><li/>তাই এখনি আপনার বাচ্চার জন্য পন্যটি সংগ্রহ করুন।', NULL, '', '1052', 699981, '', 'fixed', '', 'BdhrBSU_ry4', 'In stock', 1, 'general', '2019-09-05 07:00:36', '2019-09-05 07:00:36', '', '', '', '0', '0', '0'),
(65, 'BM10 ডুয়েল সিম কার্ড', 'bm10-duyel-sim-phone', 1490, 950, 100, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '  ', '<li>RAM:128MB<li><li/>\r\nROM:128MB<li><li/>\r\nResolution:480X360 প্রদর্শন করা হবে<li><li/>\r\nFeature:with mp3 সাথে mp3<li><li/>\r\nডুয়েল sim কার্ড<li><li/>\r\nব্যাটারি (mah): 350 mah<li><li/>\r\nরেকর্ড করা হচ্ছে Definition:360P<li><li/>\r\nNetwork:GSM900 gsm1800 gsm1900 gsm850<li><li/>\r\nমেমরি কার্ড to:32GB<li><li/>\r\nডিফল্ট: meetingresp<li><li/>\r\nBm মিনি ওয়ারলেস ডায়ালার / মিনি ফোন\r\n– 32 জিবি<li><li/>\r\nআকার: 68*28*12 মিমি<li><li/>\r\nবাজার নতুন ডিজাইন এবং মানের উপর একদম নতুন<li><li/>\r\nহাতের আকারের ফোন তোমার হাতের হাতের চেয়ে ছোট.<li><li/>', NULL, '', '1661', 793, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 07:04:39', '2019-09-05 07:04:39', '', '', '', '0', '0', '0'),
(66, 'সুপার স্লিমিং হারবস', 'super-slim-herb', 1600, 750, 300, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '  ', '<li/>Natural Super Slimming Herb Belly Weight Loss Diet Pills 30 Capsules\r\n<li><li/>\r\nসুপার স্লিমিং হারবস (Made in Thailand)<li><li/>\r\nমাএ ৩০ দিনে ৮-১০কেজি ওজন কমাবে<li><li/>\r\nকাজ না হলে ১০০% টাকা ফেরতের গ্যারান্টি!<li><li/>\r\n\r\nFor Both Men and Woman<li><li/>\r\nNo need diet <li><li/>\r\nNo need exercise<li><li/>\r\n\r\nSize: 1 Box = 30 Capsules<li><li/>\r\n\r\nঅতিরিক্ত ওজনের কারনে হচ্ছে Stroke; বিভিন্ন রোগ। সঠিক সময়ে ওজন কমিয়ে নিজেকে রাখুন রোগমুক্ত এবং ফিট। <li><li/>এতে আছে ১০০% প্রাকৃতিক উপাদান কোন side effect ছাড়া।<li><li/>\r\n\r\nFat Burn করবে<li><li/>\r\nখাবারকে দ্রত হজম করাবে<li><li/>\r\nDiet,Exercises ছাড়া ওজন কমাবে<li><li/>\r\nপুরো শরীরের চর্বি কমিয়ে আকর্ষণীয়<li><li/>\r\nসুন্দর ফিগার গড়ে তুলবে<li><li/>\r\nমাএ ৩০ দিনে ৮-১০কেজি ওজন কমাবে<li><li/>\r\nনতুন চর্বি গঠন দমন করবে<li><li/>\r\nরক্তের লিপিড কমাবে<li><li/>\r\nরক্ত সঞ্চালন উদ্দীপিত করবে<li><li/>\r\nসরাসরি উপাদানগুলির ব্যালেন্স পুষ্টি করবে<li><li/>\r\nপুরো শরীর এর চর্বি কমাবে।<li><li/>\r\n\r\n খাওয়ার নিয়ম: ১ টা করে ক্যাপসুল ডিনারে ১০/১৫ মিনিট আগে খেতে হবে।<li><li/>\r\n\r\nসরাসরি থাইল্যান্ড থেকে আমদানিকৃত ১০০% অরিজিনাল পন্য।<li><li/>', NULL, '', '2025', 49992, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 07:09:34', '2019-09-05 07:09:34', '', '', '', '0', '0', '0'),
(67, 'MI 20000mah Power Bank', 'mi-20000mah-power-bank', 2290, 1600, 300, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '  ', '<li>ব্র্যান্ড: Xiaomi <li><li/>\r\n ক্যাপাসিটি: 20000mAh<li><li/>\r\nপাওয়ার সোর্স: DC 5V<li><li/>\r\nইনপুট ভোল্টেজ: DC 5.1V<li><li/>\r\nইনপুট কারেন্ট: 0A(TYP)<li><li/>\r\nচার্জিং টাইম: 8 hrs<li><li/>\r\n2 টি USB পোর্ট<li><li/>\r\nওভার ভোল্টেজ প্রটেকশন\r\n 5V/2A<li><li/>\r\n প্লাগ অ্যান্ড ষ্ট্যাণ্ডার্ড ক্যাবল<li><li/>\r\n প্রোডাক্টের গায়ে উল্লিখিত ক্যাপাসিটি থেকে ক্ষেত্রবিশেষে 20%-25% পাওয়ারের তারতম্য হতে পারে<li><li/>', NULL, '', '1800', 4994, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 07:12:59', '2019-09-05 07:12:59', '', '', '', '0', '0', '0'),
(68, 'Multimedia LED 1080p projector', 'multimedia-led-1080p-projector', 5200, 2800, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>বিশ্বের অন্যতম ডলফিন কোম্পানির ১২০ ইঞ্চি পর্দার টিভি প্রজেক্টর <li><li/>১ বছরের ওয়ারেন্টি।<li><li/>\r\nযে সকল মাধ্যমে খুব সহজে চালাতে পারবেনঃ <li><li/>\r\n১. সরাসরি চলবে টিভি। কোন টিভি কার্ড এর দরকার নেই,<li><li/> ডিশ দিয়ে চলবে সব চ্যানেল।<li><li/>\r\n২. সরাসরি মেমোরি কার্ড, পেনড্রাইভ, মোবাইল, ল্যাপটপ, থেকে ভিডিও দেখতে পারবেন। <li><li/>\r\n৩. এটি বিদ্যুৎ সাশ্রয়ী। এক টানা ২০,০০০ ঘন্টা চালাতে পারবেন।<li><li/>\r\nডলফিন প্রজেক্টরের বৈশিষ্ট্যঃ<li><li/><li>\r\n1.This projector adopts the TFT projection technology, with high power white light LED, and audio and video playback function.<li><li/>\r\n2.Single LED Panel Display Technology<li><li/>\r\n3.High Brightness LED; Lamp life 20,000 hours<li><li/>\r\n4.Can realize rolling-over and rear projection quickly through menu selection<li><li/>\r\n5.The justification range of projection screen size is 10 to 60 inch<li><li/>\r\n6.Resolution: 320*240 pixels<li><li/>\r\n7.Resolution: 1092*1080, HD 1080P<li><li/>\r\n8.Brightness: 80 lumens<li><li/>\r\n9.Contrast: 800:1<li><li/>\r\n10.Displayable Color: Full color (1.67 millions)<li><li/>\r\n11.Multi interfaces for connecting to various multimedia devices<li><li/>\r\n12.Manual adjusting focus to get clear image and video<li><li/>\r\n13.Low power consumption<li><li/>\r\n14.Easy operation with a remote control<li><li/>\r\n15.LCD, LED display technology<li><li/>\r\n16.Equipped with inputs such as 1*HDMI/<li><li/> 1*USB/ 1*VGA/ TV etc…<li><li/>\r\n17.Application: High-end electronic gifts, family education, business, etc…<li><li/><li><li/>\r\n \r\nSpecification of Dolphin Projector:<li><li/>\r\n\r\n1.Technology Type:Single LED Panel Display Technology<li><li/>\r\n2.Resolution:320*240 Pixels<li><li/>\r\n3.Support Resolution:1092*1080, HD 1080P<li><li/>\r\n4.Brightness:50 lumens<li><li/>\r\n5.Contrast:800:1<li><li/>\r\n6.Optical parameters:the original aspect ratio of 4:3. 16:9 compatible<li><li/>\r\n7.Displayable Color:Full color(1.67 millions)<li><li/>\r\n8.Projection Method:Front, Rear, Ceiling projection<li><li/>\r\n9.Projection Lens:Manual Focus<li><li/>\r\n10.Keystone Correction:automatic<li><li/>', NULL, '', '1035', 369944, '', 'fixed', '', 'tnw_bUFUTkU', 'In stock', 1, 'general', '2019-09-05 07:16:04', '2019-09-05 07:16:04', '', '', '', '0', '0', '0'),
(69, 'ফ্রুট এন্ড ভেজিটেবল জুসার', 'Vegetable-Juicer', 1250, 750, 50, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '  ', '<li>ম্যানুয়াল হ্যান্ড জুসার এখন এই হ্যান্ডি জুস মেকার এর সাহায্যে<li><li/> ঘরেই তৈরি করুন বিভিন্ন রখম ভেজিটেবল ও ফলের জুস<li><li/> ম্যাটেরিয়াল: প্লাস্টিক ও স্টেইনলেস স্টিল<li><li/> আলুসহ বিভিন্ন ধরণের ভর্তাও তৈরি করতে পারবেন<li><li/> হাই কোয়ালিটি<li><li/> ব্র্যান্ড নিউ প্রোডাক্ট', NULL, '', '1048', 9950, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 07:19:54', '2019-09-05 07:19:54', '', '', '', '0', '0', '0'),
(70, '10000mah Xiaomi পাওয়ার ব্যাংক', '10000mah-xiaomi-power-bank', 1200, 500, 150, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '  ', '<li>If you\'\'ve grown tired of eating cold lunches every day, Or are just paranoid about the harmful effects of microwave cooking, this electronic lunch box is just the thing for you! Witha 600ml capacity, and a detachable container, you\'\'ll be able to easily pack your rice, vegetables, and meat for your meals rather than having to eat out every day. Just plug your lunch box into an electrical socket and you\'\'ll be able to enjoy piping hot food anywhere, any time! Brand: Other Color: Other Condition: New Weight: 1.00', NULL, '', '1722', 49965, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 07:22:44', '2019-09-05 07:22:44', '', '', '', '0', '0', '0'),
(71, 'ইলেকট্রনিক Mosquito কিলার', 'mosquito-Killar-lamp', 1250, 570, 300, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '  ', '<li>মশার যন্ত্রনা? ব্যবহার করুন এ গ্যাজেটটি। মশা মরবেই।<li><li/>\r\nইলেকট্রনিক Mosquito কিলার এর সাহায্যে এখন মশার হাত থেকে বাঁচুন, <li><li/>\r\nমশা ছাড়াও অন্যান্য পোকামাকড় ধ্বংস করে,<li><li/> \r\nকোনো রাসায়নিক ধোঁয়া বা গন্ধ নেই; তাই মানব শরীরের জন্য ক্ষতিকর নয়, <li><li/>\r\nএকটি শক্তিশালী আলোর সাহায্যে পতঙ্গকে আকৃষ্ট করে এবং ইলেক্ট্রিক Fan দিয়ে ধ্বংস করে দেয়।<li><li/>', NULL, '', '1715', 49858, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 07:26:07', '2019-09-05 07:26:07', '', '', '', '0', '0', '0'),
(72, 'Rechargeable Bluetooth Karaoke Trolly Speaker', 'rechargeable-bluetooth-karaoke', 7500, 4200, 1000, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '  ', '<li><Rechargeable Bluetooth Karaoke Trolly Speaker with wireless Microphone<li><li/>\r\n<li>স্পিকার বিশিষ্ট কারাওকে সাউন্ড বক্স।\r\n<li><li/> সহজেই মোবাইলে ব্লুটুথ কানেকশন করা যায়।<li><li/>\r\nকোন প্রকার ক্যাবল কানেকশন লাগবে না।<li><li/>\r\nসাইন্ড কোয়ালিটি হাই।<li><li/>\r\nসাইন্ড আপ/ ডাউন করতে পারবেন।<li><li/>\r\nইকো সিস্টেম দেয়া আছে,সাইন্ড সিস্টেম করতে পারবেন।<li><li/>\r\nব্লুটুথে কানেকশন দিয়ে কারাউকি মিউজিক এর সাথে গান গাইতে পারবেন।<li><li/>\r\nসরাসরি পেনড্রাইভ অথবা মেমোরি কার্ড ব্যবহার করতে পারবেন।<li><li/>\r\nএফ,এম রেডিও<li><li/>\r\nরেকডিং সিস্টেম<li><li/>\r\n<li><li/> Rechargeable\r\n<li><li/> 12\" Loud Speaker+ 3\"x1 Horn\r\n<li><li/> Box height : 22 inch\r\n<li><li/> Output- 100~300W\r\n<li><li/> Voltage: AC 110 ~220V / 50Hz\r\n<li><li/> DC/ 7.4V / mAh\r\n<li><li/>Frequency Response : 60Hz -- 18KHz\r\n<li><li/> The best part, its mobile and has a battery backup of more than 10 to 15 hrs of playback (depending on the volume)\r\n<li><li/> USB/SD/AUX Input\r\n<li><li/> Dual Microphone Input\r\n<li><li/> FM Radio\r\n<li><li/> Compatible With : VCD/DVD/CD/TUNER/BT\r\n<li><li/> Carrying Handle\r\n<li><li/> Dual Power Source (Batteries or Power Cord)', NULL, '', '1508', 49968, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 07:38:44', '2019-09-05 07:38:44', '', '', '', '0', '0', '0'),
(73, 'Mini LED Philips Projector', 'mini-led-philips-projector', 5800, 4000, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>Color: White, Black <li><li/>\r\nMaterial: Plastic, Glass<li><li/>\r\nDisplay Type: LCD<li><li/>\r\nDISPLAY SIZE 20 TO 100 iNCHES<li><li/>\r\nNative Resolution: 320 x 240<li><li/>\r\nAspect Ratio : 16:9 / 4:3<li><li/>\r\nResolution Support: 1920 x 1080<li><li/>\r\nBrightness: 60 Lumens<li><li/>\r\nContrast Ratio: 300:1<li><li/>\r\nLamp Life: 20000 hours<li><li/>\r\nProjection Distance: 1.25 - 4.0 m<li><li/>\r\nLens : F=125<li><li/>\r\nLamp: LED<li><li/>\r\nInterface: USB, SD Card Slot, HDMI, VGA<li><li/>', NULL, '', '1056', 5000, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 07:41:35', '2019-09-05 07:41:35', '', '', '', '0', '0', '0'),
(74, 'OMRON Automatic BP Monitor', 'omron-automatic-bp-monitor', 2390, 1800, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>Simple one-touch operation. <li><li/>Cuff Wrapping Guide Hypertension Indicator <li><li/> Body Movement Detection  <li><li/>Last memory Intellisense Technology  <li><li/>Origin: Made In Vietnam <li><li/>', NULL, '', '1115', 997, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 07:44:29', '2019-09-05 07:44:29', '', '', '', '0', '0', '0'),
(75, 'POSTURE ব্যাক সাপোর্ট মেরুদন্ড সোজা করে', 'posture-back-saport', 750, 300, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>ROYAL POSTURE ব্যাক সাপোর্ট\r\n<li><li/>\r\nম্যাটেরিয়ালঃ 70% Neoprene, 30% পলিস্টার<li><li/>\r\nযারা কুঁজো হয়ে হাঁটেন, দীর্ঘক্ষন কম্পিউটারের সামনে বসে থেকে যাদের পিঠ ব্যথা, সোজা হয়ে কাজ করতে পারেন না তাদের জন্য<li><li/>\r\nএটা ব্যবহারে মেরুদন্ড বাকা হতে দেবে না<li><li/>\r\nসোজা হয়েই কাজ করতে বা পড়তে পারবেন<li><li/>\r\nছেলে মেয়ে এবং যে কোন বয়সীদের জন্য<li><li/>\r\nফ্রিল্যান্সার থেকে শুরু করে যাদের কম্পিউটারের সামনে ঝুকে কাজ করতে হয় সবার জন্য<li><li/>\r\nএটা মেরুদন্ডকে সোজা রাখতে সাহায্য করবে, যার ফলে আপনাকে লম্বা ও ফিট দেখাবে<li><li/>', NULL, '', '1650', 4867, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 07:50:24', '2019-09-05 07:50:24', '', '', '', '0', '0', '0'),
(76, 'Kiyome kinoki detox foot pads ', 'kiyome-kinoki-detox', 650, 100, 200, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '   ', '<li>KINOKI ব্যবহারে বাতের ব্যাথা, হাটু ব্যথা, কোমর ব্যথা এবং মাংসপেশীর ব্যথা কমিয়ে শরীরকে ঝরঝরে করে তোলে<li><li/>\r\nকাজ না করলে ১০০% টাকা ব্যাক<li><li/>\r\namazon, walmart, aliexpress এর মত আন্তর্জাতিক মানসম্পুন ই কর্মাস সাইট গুলোতে টপ সেল প্রোডাক্টস Kiyomi Kinoki DETOX বিশ্বজয় করে এখন বাংলাদেশে ।<li><li/>\r\n\r\n\r\nউপকারিতাঃ<li><li/>\r\nশরীরের মধ্যে অতিরিক্ত চর্বি জাতীয় পর্দাথ শোষন করে, রক্তের কোলেষ্টরেল কমাতে সাহায্য করে ব্লাড প্রেসার নিয়ন্ত্রনে রাখে।<li><li/> চামড়ার কালো দাগ ও কুচকানো রোধ করে। <li><li/>এ্যাজমা ও ব্রংকাইটিসে বিশেষ উপকারী।<li><li/> ঘামের দূগর্ন্ধ ও পায়ের মোজার দূগর্ন্ধ দূর করে। <li><li/>পরিপাক যন্ত্রের কার্যকারীতা বাড়িয়ে দেয়। <li><li/>রক্ত পরিষ্কার ও রক্ত প্রবাহ রাড়িয়ে দেয়। <li><li/>শরীর সূস্থ ও সতেজ করে। <li><li/>তাই KINOKI ব্যবহার করুন সুস্থ সবল জীবন গড়ুন।<li><li/>\r\nKINOKI ব্যবহার বিধিঃ<li><li/>\r\nKINOKI ডিটক্স প্যাড রাতে ঘুমানোর পূর্বে পায়ের তলায় ব্যবহার করতে হবে।<li><li/>৭-৮ঘন্টা ব্যবহারের পর সকালে খুলে ফেলতে হবে।<li><li/>কেন ব্যাবহার করবেন।<li><li/>\r\nপ্রতিদিন আমরা যা খাচ্ছি তা বিষাক্ত রাসায়নিক পর্দাথ যুক্ত। <li><li/>প্রতিদিন আমরা যে কসমেটিকস ব্যবহার করছি তা কতটুকু নিরাপদ? <li><li/>প্রতিদিন আপনার ব্যবহৃত মোবাইল, কম্পিউটার টেলিভিশন ইত্যাদি রেডিয়েশন এর ক্ষতিকর পর্দাথ মানবদেহে প্রবেশ করে এবং প্রতিদিন পরিবেশ দূষন হইতে মানবদেহে মারাত্নক স্বাস্থ্য হানিকর পদার্থের প্রবেশ ঘটছে।<li><li/>\r\n বিশেষ দ্রষ্টব্যঃ<li><li/>\r\nএটি একটি Organic Health Product , শুধু মাত্র বাহ্যিক ব্যবহারের জন্য তাই এর কোনো প্রকার পার্শ্ব প্রতিক্রিয়া নেই। <li><li/>১৮ বছর বয়সের নিচের ও অন্তঃসত্বা অবস্থায় ব্যবহারের পূর্বে ডাক্তার এর পরামর্শ নিয়ে নিবেন।<li><li/>\r\nএক প্যাকেটে ১০টি প্যাড থাকে, ৫ দিন ব্যবহার করা যাবে।<li><li/> ভালো ফলাফলের জন্য ২ প্যাকেট ১০ দিন ব্যবহার করতে হবে<li><li/>\r\n', NULL, '', '2250', 49424, '', 'fixed', '', 'M4Giw9_oVRI', 'In stock', 1, 'general', '2019-09-05 07:54:58', '2019-09-05 07:54:58', '', '', '', '0', '0', '0'),
(77, '4 in 1 ইলেকট্রিক সুইয়িং মেশিন', 'swing-machine', 1700, 950, 300, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '  ', '<li>* সিঙ্গেল থ্রেড, সিঙ্গেল স্পিড<li><li/>\r\n* ৬ ভোল্ট পাওয়ারে চলে <li><li/>\r\n* কাপড়, প্যান্ট এবং টেক্সটাইলের জন্য উপযোগী <li><li/>\r\n* পাওয়ার সাপ্লাই: ৪টি AA ব্যাটারি অথবা AC/DC > 6V 800MA <li><li/>\r\n* অ্যাডাপ্টারের সাহায্যে চলে (সংযুক্ত নয়)<li><li/>\r\n* ম্যাটেরিয়াল: ABS + স্টেইনলেস স্টীল <li><li/>\r\n* ফ্যামিলি ব্যবহারের জন্য আদর্শ মিনি সাইজ, <li><li/>\r\n* হালকা ও বহনযোগ্য<li><li/>', NULL, '', '1079', 49921, '', 'fixed', '', 'S0U34N9_dCA', 'In stock', 1, 'general', '2019-09-05 07:58:27', '2019-09-05 07:58:27', '', '', '', '0', '0', '0'),
(78, 'অ্যাল্যুমিনিয়াম কিচেন র‍্যাক', 'aluminiyam-rack', 1450, 800, 200, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '  ', '<li>২ . টি পট<li><li/>\r\n২. ছুড়ি বা কেঁচি রাখার স্লট<li><li/>\r\n৩. ৮-টি চামচ বা ফ্রাইপেন ঝুলানোর হূক<li><li/>\r\n৪. ৫টি মশলা রাখার তাক<li><li/>\r\n৫. তোয়ালে বা রুমাল রাখার স্ট্যান্ড<li><li/>\r\n6) সম্পূর্ণ এলুমিনিয়াম <li><li/>একবার কিনবেন ১০ বছরেও কিছু হবে না<li><li/>\r\n7) বাথরুম বা রান্না ঘরে বা যে কোন ভারী কিছু রাখার জন্য ব্যাবহার করতে পারেবন এই র‍্যাকটি<li><li/>\r\n8) আপনার ইচ্ছে অনুযায়ী যে কোনো জায়গায় রাখতে পারবেন<li><li/>\r\n9) আপনার বাসা বা অফিসের জন্য খুবই সুন্দর ও আনকমণ একটি প্রোডাক্ট<li><li/>\r\n10 ) খুবই মজবুত ও রুচিশিল<li><li/>\r\n', NULL, '', '1581', 4923, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 08:01:52', '2019-09-05 08:01:52', '', '', '', '0', '0', '0'),
(79, 'Wireless Headset Sunglasses', 'wireless-headset-sunglasses', 1650, 850, 200, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '  ', '<li>Stereo music support,mobile music support<li><li/>\r\ndesigned for sports,make sports more active, Fashion<li><li/>\r\nHeadphones Features: Hi-metal headphones, super bass, ear headphones, pluggable, long wear no pain, ergonomic engineering <li><li/>Built-in 180mA lithium polymer battery,safety and beautiful\r\n<li><li/>Sunglasses+MP3+wireless ,Anti-UV400', NULL, '', '1022', 85, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 08:05:29', '2019-09-05 08:05:29', '', '', '', '0', '0', '0'),
(80, 'VIBRO-SHAPE স্লিমিং বেল্ট', 'vibro-shape', 1800, 1000, 200, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '  ', '<li>VIBRO-SHAPE হাই-পার্ফরম্যান্স স্লিমিং বেল্ট <li><li/>আপনার বাসা কিংবা অফিসে বসেই Vibro Shape নিয়ে প্রতিদিন মাত্র ১০ থেকে ১৫ মিনিট সময় কাটান, <li><li/>আর Vibro Shape থেকে নিন স্লিম ফিগার! <li><li/>Vibro Shape একটি সহজে ব্যবহারযোগ্য<li><li/> স্লিমিং প্রোডাক্ট এটি আপনার দেহের নির্দিষ্ট অংশে মুভমেন্টের মাধ্যমে রক্ত সঞ্চালন বাড়িয়ে দেহকে স্লিম আকৃতি দেয় <li><li/>Controllabe speed & direction of rotation অটো OFF <li><li/>ফাংশন: 10 মিনিট শরীরের বিভিন্ন অংশে ব্যবহারের জন্য প্রযোজ্য (Abdomen, waist, back, hips, thigh, calf) <li><li/>ডাইমেনশন (ট্রাভেল ব্যাগ): ৪৫০ মি.মি.×১৫০ মি.মি.×৯০ মি.মি <li><li/>এনার্জি সোর্স: পাওয়ার অ্যাডাপ্টার হ্যান্ডেল <li><li/>স্টোরেজ কেস', NULL, '', '1028', 487, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 08:08:44', '2019-09-05 08:08:44', '', '', '', '0', '0', '0');
INSERT INTO `product` (`product_id`, `product_title`, `product_name`, `product_price`, `purchase_price`, `discount_price`, `discount_date_from`, `discount_date_to`, `product_summary`, `product_description`, `product_specification`, `product_terms`, `sku`, `product_stock`, `product_of_size`, `discount_type`, `product_color`, `product_video`, `product_availability`, `status`, `product_type`, `created_time`, `modified_time`, `seo_title`, `seo_keywords`, `seo_content`, `product_percent_tag`, `delever_charge_in_dhaka`, `delever_charge_out_dhaka`) VALUES
(81, 'GM50 মিনি LED প্রোজেক্টর 150 Lumen', 'gm50-mini-led-projector-150-lumen', 9800, 8000, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>মিনি মাল্টিমিডিয়া LCD ইমেজ সিস্টেমে LED প্রোজেক্টর <li><li/>ম্যানুয়াল ফোকাস নিয়ন্ত্রণযোগ্য<li><li/> 2টি AAA ব্যাটারী দ্বারা চালিত কন্ট্রোলার (প্যাকেটের সাথে পাচ্ছেন না, আলাদা করে কিনতে হবে) <li><li/>এক্সটার্নাল SD মেমোরি কার্ড ব্যবহার করা যাবে সর্বোচ্চ 32GB পর্যন্ত (প্যাকেটের সাথে পাচ্ছেন না) <li><li/>পাওয়ার ব্যাংক বা DC পাওয়ার সাপ্লাই দ্বারা চালনা করা যাবে<li><li/> AV কানেক্টরের মাধ্যমে ভিডিও গেম কনসোল বা DVD প্লেয়ার চালনা করা যাবে<li><li/> এই প্রোজেক্টরটি বিশেষতভাবে বাসা এবং অফিসের জন্য ডিজাইন করা হয়েছে <li><li/>আকার এবং ওজনে হালকা, দেখতে ছোট, সহজে বহনযোগ্য<li><li/> বিশেষ উল্লেখ:  ইমেজিং প্রযুক্তি: TFT, LCD <li><li/> উজ্জ্বলতা: 150 lumens  <li><li/>কনট্রাস্ট: 500: 1<li><li/>  নেটিভ রেজোলিউশনে: 153600 (RGB)<li><li/> পিক্সেল  সার্পোটেড রেজোলিউশন: 1920 X 1080<li><li/>  আলো: LED<li><li/>  লাইফ টাইম: 30000 ঘন্টা <li><li/> লেন্স: Multichip Coated Lens (F = 125)  <li><li/>অপারেশন মোড: ম্যানুয়াল অপারেশন  প্র<li><li/>জেক্শন দূরত্ব: 1.07 - 3.31M  <li><li/> প্রজেকশনস্ক্রিন সাইজ: 120\"<li><li/>', NULL, '', '1862', 4998, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 08:11:21', '2019-09-05 08:11:21', '', '', '', '0', '0', '0'),
(82, '6 in 1 Magnative Sunglass', 'magnative-sunglass', 990, 500, 100, '2019-09-05 00:00:00', '2019-09-05 00:00:00', '  ', '<li>এটি একটি সাধারণ সানগ্লাসের মত\r\nএটির ফ্রেমের সাথে থাকা চুম্বক অতিরিক্ত লেন্স এর চুম্বককে আকর্ষণের মাধ্যমে কানেক্ট হয়ে যায়<li><li/>\r\nখুব সাধারণ একটা পুশের মাধ্যমে আপনি লেন্সটি খুলতে পারবেন।<li><li/>\r\nপ্যাকেজে পাচ্ছেন একটি লেন্স এবং তিনটি ফ্রেম<li><li/>\r\n', NULL, '', '1140', 9990, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 08:14:40', '2019-09-05 08:14:40', '', '', '', '0', '0', '0'),
(83, 'A8 Mini সিম ডিভাইস ভয়েস ট্র্যাকার', 'mini-a8-sim-divice', 1200, 650, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>Work frequency ( 900MHz, 1800MHz, 1900MHz) <li><li/> Excellent stand by and working time, comparing to other similar products <li><li/> Prominent sound quality makes more reliable <li><li/> Power Supply: 24 hours <li><li/> Non-stop Card Compatible: GSM / SIM <li><li/> Microphone Range (Meter): 5~7 (Radius) <li><li/>', NULL, '', '1912', 4999, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 08:17:58', '2019-09-05 08:17:58', '', '', '', '0', '0', '0'),
(84, 'M4 স্মার্ট ব্রেসলেট ব্যান্ড ফিটনেস ট্র্যাকার', 'm4-smart-band', 890, 600, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>Screen BrightnessUp to 400 nits (max brightness), brightness adjustable<li><li/>\r\nTouchscreen typeOn-cell capacitive touchscreen\r\n<li><li/>Screen protection2.5D tempered glass with anti-fingerprint coating<li><li/>\r\nWater Resistance Rating5 ATM<li><li/>\r\nDisplay TypeAMOLED<li><li/>\r\nBatteryLiPo, 135mAh<li><li/>', NULL, '', '1910', 49984, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-05 08:20:54', '2019-09-05 08:20:54', '', '', '', '0', '0', '0'),
(85, 'Bestway Double Mattress Air Bed', 'bestway-double-mattress-air-bed', 4800, 3500, 300, '2019-09-06 00:00:00', '2019-09-06 00:00:00', '  ', '<li/>1.91m x 1.37m x 22cm / 75″ x 54″ x 8.5″<li><li/>\r\nComfortable flocked sleeping surface\r\nGreat for indoor use<li><li/>\r\nIncludes a Sidewinder<li><li/> AC Air Pump<li><li/>\r\nInflates in 160 seconds & travel bag included<li><li/>', NULL, '', '1066', 4996, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 11:08:58', '2019-09-06 11:08:58', '', '', '', '0', '0', '0'),
(86, 'Electric Egg Bitter', 'electric-egg-bitter', 1000, 550, 50, '2019-09-06 00:00:00', '2019-09-06 00:00:00', '  ', '<li>ইলেকট্রিক এগ বিটার এন্ড মিক্সার <li><li/>\r\n 7 টি স্পীড এডজাস্টম্যান্ট সুইচ <li><li/>\r\n  ভোল্টেজ:  <li><li/>\r\n  ফ্রিকোয়েন্সি: 50Hz  পাওয়ার: 150W  <li><li/>\r\n স্টেইনলেস স্টিল হুক  <li><li/>\r\n  সহজে পরিষ্কার করা যায় <li><li/>\r\n  এগ বিটিং এবং কোন কিছু ব্লেন্ডিং-এর জন্য উপযুক্ত <li><li/>', NULL, '', '1839', 492, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 11:14:25', '2019-09-06 11:14:25', '', '', '', '0', '0', '0'),
(87, 'S7 LED Night Vision RC Drone ', 's7-led-night-vision-rc-drone', 7500, 5500, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>Camera module, LED light module can be switched at will\r\n<li><li/>WiFi APP control: 750 mAh high-capacity battery for longer play.\r\n<li><li/>Throttle lift, left/right rotation, front/rear/left/right flight, 360 degree roll,\r\n<li><li/>Headless mode Air pressure set high level One button start/land\r\n<li><li/>The flight shooting screen is transmitted in real time through the mobile phone, allowing the player to experience the fun of flight control in real time, with rubber paint remote control and better feel.\r\n\r\n<li><li/>Specifications:\r\n\r\n<li><li/>Aerial Photography: Yes\r\n<li><li/>Remote Distance: 100m\r\n<li><li/>Control Channels: 4 Channels\r\n<li><li/>Camera Features: Dedicated Camera Compatible\r\n<li><li/>FPV Operration: No\r\n<li><li/>Model Number: S7\r\n<li><li/>Frequency: other\r\n<li><li/>Sensor Size: None\r\n<li><li/>Connectivity: Wi-Fi Connection, Remote Control, APP Controller\r\n<li><li/>Main Rotor Diameter: other\r\n<li><li/>Action Time: Others\r\n<li><li/>Camera Integration: Camera Not Included\r\n<li><li/>Gyro: other\r\n<li><li/>Without Camera: WIFI\r\n<li><li/>app: Remote Control\r\n<li><li/>LED Night Vision: 360 Rolling\r\n<li><li/>Quadcopter : black\r\n<li><li/>Body battery: 3.7V 750Mah\r\n<li><li/>Flight time: 7-9 minutes\r\n<li><li/>Size: 33*33*12 CM\r\n<li><li/>Charging time: about 100 minutes\r\n<li><li/>Remote control distance: about 100 meters\r\n<li><li/>Figure distance: about 80 meters\r\n<li><li/>Remote control battery: 3*AAA battery( Not Included)\r\n\r\n<li><li/>Package Included:<li><li/>\r\n\r\n1 x RC Drone<li><li/>\r\n1 x Transmitter<li><li/>\r\n2 x Spare Blades<li><li/>\r\n1 x Screwdriver<li><li/>\r\n1 x USB Cable<li><li/>\r\n1 x User Manual<li><li/>\r\n1 x LED Light Module<li><li/>', NULL, '', '1860', 4993, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 11:19:39', '2019-09-06 11:19:39', '', '', '', '0', '0', '0'),
(88, 'SQ11 Mini Camera 1080P HD DVR - Black', 'sq11-mini-camera', 2350, 850, 100, '2019-09-06 00:00:00', '2019-09-06 00:00:00', '  ', '<li> 120 degree FOV provides you wide view\r\n<li><li/> Night vision supports capturing high definition pictures during night or dark environment\r\n<li><li/> Advanced H.264 photography compression technology keeps high quality videos and plays a part of saving storage as well\r\n<li><li/>  Time stamp is conducive to look through\r\n <li><li/> One key to lock the video in case of emergent situation\r\n <li><li/> Loop-cycle recording, saves the storage space efficiently\r\n <li><li/> Support maximum 32GB TF card memory storage ( not included )\r\n<li><li/> Support 5 - 10m motion detection distance\r\n <li><li/> Built in 200mAh Li-ion battery', NULL, '', '1863', 4831, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 11:23:26', '2019-09-06 11:23:26', '', '', '', '0', '0', '0'),
(89, 'Panasonic সাপোর্টেড ল্যান্ডফোন 2 সিম', 'panasonic-sapoted-landphone', 2600, 2000, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>দুইটি সিম সাপোর্টেড ল্যান্ডফোন <li><li/>\r\n72 ঘন্টা স্ট্যান্ড বাই টাইম <li><li/>রিচার্জেবেল তাই যেকোনো জায়গায় সহজেই নিয়ে যেতে পারবেন<li><li/> সাপ্লিমেন্টারি সার্ভিস: কলার আইডি, কল ফরোয়াডিং, কল ওয়েটিং, কল হোল্ড, <li><li/>থ্রি-ওয়ে কলিংশর্ট <li><li/>মেসেজ ২০০ এন্ট্রি ফোনবুক<li><li/> ডট ম্যাট্রিক্স<li><li/> LCD স্ক্রিন<li><li/> রিঙ্গার ভলিয়ুম <li><li/>SMS ফিচার <li><li/>3G নেটওয়ার্ক<li><li/> ক্যালেন্ডার<li><li/> A/C ইনপুট: 240V<li><li/>', NULL, '', '1107', 29946, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 11:26:33', '2019-09-06 11:26:33', '', '', '', '0', '0', '0'),
(90, 'N11 Mini GSM/GPRS/GPS Tracker (Magnetic)', 'n11-mini-gsm-gprs-gps-tracker', 2500, 1200, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>GSM frequency ranges: 850/900/1800/1900\r\n<li><li/>\r\nGPRS: Upload60,TCP/IP<li><li/>\r\nWorking voltage: 3.4—4.2V DC<li><li/>\r\nStandby current: ≈2.5mA<li><li/>\r\nStart sound-controlling current: ≈30mA<li><li/>\r\nSpeaking current: ≈150mA<li><li/>\r\nGSM positioning time: 35s<li><li/>\r\nWorking ambient temperature: -20℃~+70℃<li><li/>\r\nWorking ambient humidity: 20%~80% RH<li><li/>\r\nDimensions: 41 (L) × 23 (W) × 14.5(H) mm<li><li/>', NULL, '', '1915', 50000, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 11:30:30', '2019-09-06 11:30:30', '', '', '', '0', '0', '0'),
(91, 'স্পাই ভিডিও ওয়াচ 32GB', 'video-watch-32gb', 2550, 1800, 300, '2019-09-06 00:00:00', '2019-09-06 00:00:00', '  ', '<li>Inter Memory: 32GB<li><li/>\r\nBuiltin MIC: Yes<li><li/>\r\nVideo file format: AVI<li><li/>\r\nVideo file resolution: 1920*1080p<li><li/>\r\nVideo frame: 30 fps<li><li/>\r\nPhoto format:1920*1080p JPEG<li><li/>\r\nAudio: 16bit Mono 8.000 kHz@128kbps<li><li/>\r\nAngel:90 degree<li><li/>\r\nNight Vision & 3ATM Waterproof<li><li/>\r\nBattery capacity 150mah,after a full charge can use time: 40 ~ 60 minutes\r\nPower supply: Built in Li-battery <li><li/>(Recharge by USB or Charger)<li><li/>\r\nUSB interface: USB 2.0<li><li/>\r\nWindows ME / 2000 / XP / Mac OS 9.2.2 or above does not require a driver installation<li><li/>\r\n\r\nPackage Included:<li><li/>\r\n1 x HD 1080P Watch DVR<li><li/>\r\n1 x USB cable<li><li/>\r\n1 x User Manual<li><li/>', NULL, '', '1662', 4952, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 11:34:28', '2019-09-06 11:34:28', '', '', '', '0', '0', '0'),
(92, 'স্পাই ভিডিও ওয়াচ 32GB-(Raber Belt)', 'video-watch-32gb-raber-belt', 2250, 1600, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>1.Video Resolution: 1280 x 960 <li><li/>\r\n2.Video Format: AVI, 30fps <li><li/>\r\n3.Camera Photo: 1280 x 1024,JPG <li><li/>\r\n4.Memory: 32GB<li><li/> \r\n5.Connect to computor: USB 2.0 <li><li/>\r\n6.Flash: 32G <li><li/>\r\n7.Charger Voltage limit: 4.2v battery<li><li/> norm:3.7v/260mAh <li><li/>\r\n8.Charge hours: 2-3 hours <li><li/>\r\n9.Electric current: 110-120mAh <li><li/>\r\n\r\nPackage included: <li><li/>\r\n\r\n\r\n1 x Mini HD Camera Watch Video Recorder <li><li/>\r\n1 x USB <li><li/>\r\n1 x Instruction book<li><li/>', NULL, '', '1913', 5000, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 11:38:05', '2019-09-06 11:38:05', '', '', '', '0', '0', '0'),
(93, '2 in 1 Nima ইলেকট্রিক স্পাইস গ্রাইন্ডার ', '2-in-1-nima-grander', 1250, 650, 150, '2019-09-06 00:00:00', '2019-09-06 00:00:00', '  ', '<li>আর নয় ঝামেলা মশলা পিশানো। <li><li/>\r\nযেকোন শুকনা, ভেজা ও পানিযুক্ত মশলা গুড়া করা যাবে খুব সহজেই <li><li/>আকর্ষনীয় ডিজাইন। <li><li/>কালোজিরা, শুকনা মরিচ, জিরা, মেথি, সরিষা, গোলমরিচ, এলাচি, দারুচিনি, যেকোন ধরনের ডাল, কালোজিরা, যেকোন ধরনের বাদাম ইত্যাদি গুড়া বা পাউডার করা যাবে মাত্র কয়েক সেকেন্ড হতে ১ মিনিটের মধ্যে।<li><li/>', NULL, '', '1016', 3835, '', 'fixed', '', 'vsY4LSqenZU', 'In stock', 1, 'general', '2019-09-06 11:42:32', '2019-09-06 11:42:32', '', '', '', '0', '0', '0'),
(94, 'Xiaomi Mi Band 4 Smart Fitness Band', 'xiaomi-mi-band-4-smart-fitness-band', 2800, 2000, 300, '2019-09-06 00:00:00', '2019-09-06 00:00:00', '  ', '<li>Display: 0.95\" AMOLED Display, 120*240 Pixels<li><li/>\r\nBattery: 135mAh battery compacity, Up to 20 days (Recharging time ~2 Hours)<li><li/>\r\nWater resistance: 5ATM water resistance up to 50m<li><li/>\r\nRAM+ROM: 512K RAM+16MB ROM<li><li/>\r\nActivity Tracking: Count steps, distance, calories burned<li><li/>\r\nHealthy monitoring: 24/7 Heart rate monitoring<li><li/>\r\nSensor: 3-axis accelerometer, 3-axis gyroscope,<li><li/>\r\nConnective: Bluetooth 5.0<li><li/>\r\nSystem requirement: Android 4.4, IOS 9 and above<li><li/>', NULL, '', '1846', 499986, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 11:46:12', '2019-09-06 11:46:12', '', '', '', '0', '0', '0'),
(95, 'Haodier Crossbody Fashion Bag', 'haodier-fashion-bag', 1200, 420, 310, '2019-09-06 00:00:00', '2019-09-06 00:00:00', '  ', '<li>কোরিয়ান ট্রাভেল Haodier Crossbody Fashion ব্যাকপ্যাক, \r\n<li><li/>হাই কোয়ালিটি ব্যাগ\r\nআপনার পছন্দের স্টাইলিশ ব্যাগ, হালকা ওজন, এবং মজবুত ডিজাইনের ফুল লেদার ব্যাকপ্যাক।<li><li/>\r\n\r\nBrand Name: Haodier<li><li/>\r\nStyle: Fashion<li><li/>\r\nMain Material: Leather<li><li/>\r\nBackpacks Type: Softback<li><li/>\r\nClosure Type: Zippe<li><li/>\r\nColors: Brown <li><li/>', NULL, '', '1018', 49719, '', 'fixed', '', 'pnXh0MY1V70', 'In stock', 1, 'general', '2019-09-06 11:50:31', '2019-09-06 11:50:31', '', '', '', '0', '0', '0'),
(96, 'Long Height Capsule(লম্বা হওয়ার ভিটামিন)', 'long-height-capsule', 1250, 600, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>৩-৫ ইঞ্চি র্যন্ত লম্বা হওয়ার ভিটামিন<li><li/>\r\n\r\nসম্পূর্ণ হারবাল উপাদান দিয়ে তৈরী <li><li/>লম্বা হওয়ার ভিটামিন যেটি আপানার গ্লান্ড একটিভ রাখে<li><li/> শরীরের গ্রস্থি হরমন কে বৃদ্ধি করতে এবং আপনার লম্বা হতে।<li><li/>এটাতে আছে লো ভাসমা, ডাল চিনি, জাই ফল ও অনান্য প্রাকৃতিক উপাদান।<li><li/>\r\n\r\nখাওয়ার নিয়মঃ<li><li/>\r\nপ্রতিদিন খাওয়ার পর তিন বেলা তিন টি ক্যাপ্সুল খাবেন।<li><li/>', NULL, '', '2330', 59933, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 11:53:21', '2019-09-06 11:53:21', '', '', '', '0', '0', '0'),
(97, 'Car Back Seat Organizer Holder', 'car-back-seat-organizer-holder', 750, 350, 100, '2019-09-06 00:00:00', '2019-09-06 00:00:00', '  ', '<li>Product Type: Car Back Seat Organizer<li><li/>\r\nHigh quality product<li><li/>\r\nEasy to use<li><li/>\r\nEasy to carry<li><li/>', NULL, '', '1840', 4982, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 11:55:44', '2019-09-06 11:55:44', '', '', '', '0', '0', '0'),
(98, 'Slim N Lift স্লিমিং ভেস্ট (ফর মেন)', 'slim-n-lift2', 600, 300, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>Slim N Lift একটি কার্যকর বডি স্লিমিং ভেস্ট (ফর মেন)<li><li/>\r\nএটি নিয়মিত ব্যবহারে আপনার ভুঁড়ি ২-৩ ইঞ্চি কমে যাবে<li><li/>\r\nআরামদায়ক ফেব্রিক<li><li/>\r\nস্মার্ট লুক<li><li/>\r\nসাইজ: M,L, XL, XXL<li><li/>\r\nসহজেই আপনার পোশাকের নিচে ব্যবহার করতে পারেন<li><li/>', NULL, '', '1032', 99868, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 11:58:14', '2019-09-06 11:58:14', '', '', '', '0', '0', '0'),
(99, 'Q7 ব্লুটুথ মাইক্রোফোন স্পীকার', 'q7-Speakar', 1600, 700, 200, '2019-09-06 00:00:00', '2019-09-06 00:00:00', '  ', '<li>মডেলঃ Q7<li><li/>\r\nপ্রোডাক্ট টাইপঃ ফুল মেটাল K সং মাইক্রোফোন<li><li/>\r\n ফ্রিকুয়েন্সি রেঞ্জঃ 100HZ-10KZ<li><li/>\r\nআউটপুট পাওয়ারঃ 3WX2 (স্পীকার)<li><li/>\r\nম্যাক্সিমাম সাউন্ড প্রেশারঃ > 115db 1kz THD1%<li><li/>\r\nরিভার্ব মুডঃ ইকো সাউন্ড রিভার্বেশন<li><li/>\r\n ব্যাটারি ক্যাপাসিটিঃ 2600 mAh<li><li/>\r\nপাওয়ার সাপ্লাইঃ বিল্ট ইন লিথিয়াম পলিমার ব্যাটারি<li><li/>\r\nচার্জিং পাওয়ার সাপ্লাইঃ DC5V<li><li/>', NULL, '', '1040', 99963, '', 'fixed', '', 'taWhHx17Shk', 'In stock', 1, 'general', '2019-09-06 12:01:48', '2019-09-06 12:01:48', '', '', '', '0', '0', '0'),
(100, 'ম্যাজিক সিলিকন ডিশ ওয়াশিং গ্লাভস ', 'magic-silicone-gloves', 650, 190, 150, '2019-09-06 00:00:00', '2019-09-06 00:00:00', '  ', '<li>থালা-বাসন মাজতে গিয়ে আর হাতের ক্ষতি নয়! <li><li/>এবার হাতকে রাখুন পানি থেকে দূরে! <li><li/>ব্যবহার করুন সম্পূর্ণ ওয়াটারপ্রুফ – Silicone Dish Washing Gloves. <li><li/>দৈনন্দিন থালাবাসন, হাঁড়িপাতিল এই জাতিয় সকল জিনিসপত্র পরিষ্কারের সময় একটি ভাল মানের সিলিকনের গ্লাভস হতে পারে অত্যন্ত উপকারী ।<li><li/> নিচে সিলিকন ডিস ওয়াশিং গ্লাভসের উপকারী দিকগুলি তুলে ধরা হল :<li><li/>\r\n থালাবাসন বা হাঁড়িপাতিল পরিষ্কার এর জন্য আলাদা স্ক্রাবার প্রয়োজন হবেনা।<li><li/>\r\n গ্লাভসটি সিলিকন ম্যাটেরিয়াল দিয়ে তৈরি হওয়ায় যথেষ্ট ফ্লেকজিবল।\r\n গ্লাভসটি আপনার হাত ও হাতের আগুল রক্ষা করবে ।<li><li/>হাতকে রাখবে সম্পূর্ণ জীবাণু ও ব্যাকটেরিয়া মুক্ত ।<li><li/>এটির এক্সট্রা গ্রিপ থাকায় থালাবাসন হাত থেকে পড়ে ভেঙ্গে যাওয়ার কোন সম্ভবনা নাই ।<li><li/>\r\n\r\n', NULL, '', '1841', 36224, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 12:05:04', '2019-09-06 12:05:04', '', '', '', '0', '0', '0'),
(101, 'ফুট ম্যাসাজার', 'foot-massager', 1900, 1300, 300, '2019-09-06 00:00:00', '2019-09-06 00:00:00', '  ', '<li>ডায়বেটিস রুগিদের জন্য অত্যন্ত কার্যকর<li><li/>\r\nএটি ব্যবহারে ফলে অতিরিক্ত মেদ সহজেই কমে যায়, <li><li/>\r\nরক্ত সঞ্চালনে সহায়তা করে<li><li/>\r\nইনফ্রারেড ফুট মাসেঞ্জার শারীরিক,চৌম্বকীয় একটি জৈব কম্পন ম্যাসেজ থেরাপি<li><li/>\r\nসঠিকভাবে রক্তপ্রবাহ, ব্যথা উপশম, পেশী ক্লান্তি নিষ্কাশনে সহায়ক<li><li/>\r\nপ্রতিদিন ১০ মিনিট ব্যবহার সুফল পেতে পারেন<li><li/>\r\nএটি সম্পুর্ন এক্সটারনাল তাই কোন পার্শপ্রতিক্রিয়া নেই<li><li/>\r\nপরিবারের সবার জন্য ব্যবহার উপযোগী<li><li/>', NULL, '', '1835', 99954, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 12:08:41', '2019-09-06 12:08:41', '', '', '', '0', '0', '0'),
(102, 'আকুপাংচার ফুট মেসেজ সুজ', 'foot-reflex-footwear', 1250, 400, 300, '2019-09-06 00:00:00', '2019-09-06 00:00:00', '  ', '<li>এই ফুটওয়্যার -এ রয়েছে ৮২টি মাসাজিং টিপ <li><li>যা হাঁটার সময় আপনার পায়ের তলায় “reflex” পয়েন্টগুলিতে চমৎকার মাসাজের মাধ্যমে সারা শরীরে রক্ত সঞ্চালন প্রবাহ বৃদ্ধি করবে। <li><li>\r\nFoot reflexology নার্ভ সার্কুলেশন বাড়ায়, যা শরীরের অঙ্গসমূহের ব্যালান্স নিশ্চিত করবে। <li><li>\r\nপায়ের ব্যথা উপশমে সহায়তা করবে। <li><li>\r\nএটি হাই কোয়ালিটি প্রোডাক্ট যা দিয়ে হাঁটার সময় আপনার টেনশন কমবে। <li><li>\r\nUNISEX প্রোডাক্ট। ১০০% কাজ করবে (পরীক্ষিত )<li><li>', NULL, '', '1118', 29868, '', 'fixed', '', 'uCyVv2hXq_E', 'In stock', 1, 'general', '2019-09-06 12:13:12', '2019-09-06 12:13:12', '', '', '', '0', '0', '0'),
(103, 'ওয়্যারলেস WiFi ভিডিও ক্যামেরা ডোরবেল', 'doorbell-1080p-hd-security-camera', 6500, 3900, 300, '2019-09-06 00:00:00', '2019-09-06 00:00:00', '  ', '<li>Product Name:	Wifi Smart Doorbell<li><li/>\r\nFunction:Monitoring Outdoor <li><li/>\r\nType:	IP System <li><li/>\r\nColor:	Black/Silver/Black-Silver <li><li/>\r\nWake up the way:	PIR Body Detection Wake Up <li><li/>\r\nLens/visual Angle:	1.7mm@ F2.4/166° <li><li/>\r\nStorage:	8G/16G/32G/64GB<li><li/>\r\nMaterial:	ABS <li><li/>\r\nResolution:	720P<li><li/>\r\nPower consumption:	Standby Current <li><li/>400 uA Working Current 200MA<li><li/>', NULL, '', '1714', 4997, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 12:16:09', '2019-09-06 12:16:09', '', '', '', '0', '0', '0'),
(104, 'Nima ইলেকট্রিক স্পাইস গ্রাইন্ডার', 'nima-electic-grander', 750, 450, 51, '2019-09-06 00:00:00', '2019-09-06 00:00:00', '  ', '<li> Nima ইলেকট্রিক স্পাইস গ্রাইন্ডার\r\n<li><li/>\r\nযেকোন মশলা গুড়া করা যাবে খুব সহজে<li><li/>\r\nআকর্ষনীয় ডিজাইন<li><li/>\r\nস্টেইনলেস স্টিল ব্লেড<li><li/>\r\nশক্তিশালী মটর<li><li/>', NULL, '', '2017', 9877, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 12:18:38', '2019-09-06 12:18:38', '', '', '', '0', '0', '0'),
(105, 'Swan স্টেইনলেস স্টিল কফি স্পুন', 'swan-span-set-stainless-steel', 1090, 1050, 300, '2019-09-06 00:00:00', '2019-09-06 00:00:00', '  ', '<li>স্পুন সেট উইথ সোয়ান স্ট্যান্ড<li><li/>\r\n১  পিস চামচ ও ১ পিস সোয়ান আকৃতির স্ট্যান্ড<li><li/>\r\n ম্যাটেরিয়াল: জিঙ্ক অ্যালয় মেটাল স্ট্যান্ড<li><li/>\r\n সাইজ: ৭X১৫.৫ সে.মি<li><li/>\r\n স্পুন লেন্থ: ১২ সে.মি<li><li/>\r\n আকর্ষণীয় ডিজাইনের<li><li/>', NULL, '', '1844', 497, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 12:21:13', '2019-09-06 12:21:13', '', '', '', '0', '0', '0'),
(106, 'Kemei ট্রিমার PG-100', 'kemei-trimar-pg-100', 1250, 700, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>Kemei ওয়াটারপ্রুফ ইলেকট্রিক হেয়ার ট্রিমার <li><li/>সিলভার অ্যালয় মোটর দেয় <li><li/>হাই রোটেশনাল স্পীড অ্যাডভান্সড <li><li/>কাটিং সিস্টেম টাইটেনিয়াম প্লেটেড স্টেশনারি ব্লেড মিউট ডিজাইন <li><li/>Ergonomic ডিজাইন ওয়্যারলেস, তাই ব্যবহার করা সুবিধাজনক<li><li/>চাজিং টাইম: ৮ ঘন্টা <li><li/>একবার ফুল চার্জে টানা ৩৫ মিনিট ব্যবহার করা যায়<li><li/> লো-চার্জ ইন্ডিকেটর লাইট নিরাপদ ব্যবহার <li><li/>ওয়্যাশ্যকাবল', NULL, '', '1098', 2600, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 12:23:52', '2019-09-06 12:23:52', '', '', '', '0', '0', '0'),
(107, 'Lunch Box - Electric Auto heater', 'electric-auto-heater', 850, 540, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>আপনার খাবার গরম রাখবে , এবং খাবারের মান ঠিক রাখবে ।<li><li/>\r\nইলেকট্রিক লাঞ্চ বক্স<li><li/>\r\nডাইমেনশন: 180mm x 115mm x 247mm <li><li/>ডিটাচেবল কন্টেইনার সাইজ: 75mm x 135mm x 61mm<li><li/>\r\nওজন: 830g<li><li/>\r\nভোল্টেজ: 220V<li><li/>\r\nফিক্সড কারেন্ট: 40W<li><li/>\r\nক্যাপাসিটি: 600 ml<li><li/>\r\nডিটাচেবল বক্স ক্যাপাসিটি: 450 ml<li><li/>', NULL, '', '2002', 9996, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 12:26:14', '2019-09-06 12:26:14', '', '', '', '0', '0', '0'),
(108, 'Plastic Corner Triangle Shelf(3pcs)', 'plastic-corner-triangle', 1250, 900, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '', NULL, '', '2010', 99990, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 12:28:59', '2019-09-06 12:28:59', '', '', '', '0', '0', '0'),
(109, 'Weight Loss Capsule MAX 7', 'weight-loss-capsule', 1800, 600, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>বিশ্ব বিখ্যাত Max 7 Days Capsules যা মাত্র ৭ দিনেই ওজন কমিয়ে আপনাকে করবে সুন্দর দেহের অধিকারী ।<li><li/>\r\nNo Need Diet<li><li/>\r\nNo Need Exercise<li><li/> অতিরিক্ত ওজনের কারনে হচ্ছে Stroke; Pregnancy এবং বিভিন্ন রোগ।<li><li/>\r\nসঠিক সময়ে ওজন কমিয়ে নিজেকে রাখুন রোগমুক্ত এবং ফিট।<li><li/>\r\n পুরো শরীর এর চর্বি কমাবে।<li><li/>\r\nপেটকে কমিয়ে সুন্দর ফিগার ও আকর্ষণীও করবে।<li><li/>\r\nওজন মাএ ৩০ দিনে ৭-৮ কেজি কমাবে <li><li/>\r\n Diet,Exercises ছাড়া ওজন কমাবে।<li><li/>সুন্দর ফিগার গড়ে তুলবে।<li><li/>পুরো শরীরের চর্বি কমিয়ে আকর্ষণীয় ।<li><li/>মাএ ৩০ দিনে ৫-৭ কেজি ওজন কমাবে ।<li><li/>\r\nখাবারকে দ্রত হজম করাবে ।<li><li/>\r\n Fat Burn করবে ।<li><li/>\r\nসরাসরি উপাদানগুলির ব্যালেন্স পুষ্টি করবে।<li><li/>\r\n\r\n খাবারের নিয়ম: ১টা করে ক্যাপসুল লাঞ্চ অথবা ডিনারের পরে খেতে হবে।<li><li/>', NULL, '', '2028', 4997, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 12:30:46', '2019-09-06 12:30:46', '', '', '', '0', '0', '0'),
(110, 'Jamaican Black Castor Oil', 'black-castor-oil', 950, 350, 150, '2019-09-06 00:00:00', '2019-09-06 00:00:00', '  ', '<li>চুল পরা ১০০% বন্ধ করবে <li><li/>\r\nনতুন চুল গজাতে সাহায্য করে<li><li/>\r\nএই অয়েল চুলের গোড়া মজবুত করবে <li><li/>\r\nআগা ফাটা রোধ করবে এবং মাথা ঠান্ডা রাখবে <li><li/>\r\nচুল রাতারাতি লম্বা এবং ঘন করবে <li><li/>\r\nচুল ঝলমলে ও উজ্জল করে <li><li/>\r\nচুলের গোড়ায় প্রয়োজনীয় পুষ্টি সরবরাহ করে <li><li/>\r\nএটি প্রাকৃতিক উপাদান দিয়ে তৈরি <li><li/>\r\nHow to Use: <li><li/>\r\nপ্রত্যেকবার রাতে নারিকেল তেলের(50:50) সাথে Castor Oil মিক্স করে চুলের গোড়া ও সম্পূর্ণ চুলে তেলটি লাগাবেন তারপর \r\n২-২.৩০ ঘন্টা পর শাম্পু দিয়ে চুল ধুয়ে ফেলবেন!!<li><li/> সপ্তাহে তিনবার বার ব্যবহার করলে দেখবেন আপনার চুল ঝলমল ও চুল পড়া বন্ধ হয়ে যাবে<li><li/> এছাড়া নতুন চুল গজাবে।<li><li/> যেকোন ব্যক্তি নিশ্চিতে ব্যবহার করতে পারবে.<li><li/>', NULL, '', '2029', 493, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 12:33:14', '2019-09-06 12:33:14', '', '', '', '0', '0', '0'),
(111, 'Flawless Facial Hair Remover', 'facial-hair-remover', 650, 2036, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '', NULL, '', '2036', 99986, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 12:35:50', '2019-09-06 12:35:50', '', '', '', '0', '0', '0'),
(112, 'Maya Breast Firming Cream 100g.', 'maya-breast-100g', 1200, 600, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>Brand : Dr. Chopra<li><li/>\r\nWet. : 100g.<li><li/>\r\nAll Skin Type : Undeveloped or maldeveloped breast loose & sagged breast<li><li/>\r\nUses :<li><li/><li><li/>\r\nPour a little cream inside hand and massage the breast softly in upward and circular movements. we recommend massage for minimum 15-20 minutes twice in a day morning & night<li><li/><li><li/>\r\n\r\nMaya Breast Firming cream can increase/enhance substantial breast size. regular use of cream results in round and nicely shaped breasts. It increase your personality and give more sexier looks. Its continous use will make you confident and elegant.<li><li/>', NULL, '', '2037', 4900, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 12:39:36', '2019-09-06 12:39:36', '', '', '', '0', '0', '0'),
(113, 'BIOAQUA Snail repair & brightening Skincare', 'bioaqua-snail-brightening', 1500, 950, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>আপনি কি আজে বাজে ক্রিম ব্যাবহার করে ত্বক নষ্ট করে ফেলেছেন ? <li><li/>ত্বক স্থায়ীভাবে ফর্সা হচ্ছে না?  <li><li/>ব্রণ এর দাগ মেস্তার দাগ যাচ্ছে না?  <li><li/>কোন সমস্যা নেই......  <li><li/>এখন সব কিছুর সমাধান হবে একটি ক্রিম <li><li/>\r\n\r\nএতে আছে প্রাকৃতিক এলোভেরা সহ নানান উপাদান যা করবে <li><li/>\r\n\r\nত্বক স্থায়ীভাবে ফর্সা <li><li/>\r\nসকল প্রকার দাগ দূর করবে <li><li/>\r\nমেস্তা দুর করে <li><li/>\r\nব্রণ দূর হবে অতি সহজে <li><li/>\r\nত্বক এর গর্ত দুর করে <li><li/>\r\nত্বক এর লাবণ্যতা বারাবে বহুগুন <li><li/>\r\nতেলতেলে ভাব দুর করবে <li><li/>\r\nআপনি পাবেন এক সুন্দর ত্বক যা  <li><li/> আপনাকে করবে আরও আকর্ষণীও। \r\n<li><li/>\r\nMade in Korea. Size-100g <li><li/>', NULL, '', '20370', 498, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 12:43:20', '2019-09-06 12:43:20', '', '', '', '0', '0', '0'),
(114, 'MISS BELT বডি শেপার', 'miss-belt', 650, 450, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>আপনার পেটের অতিরিক্ত মেদ (ভুঁড়ি) ও চর্বি খুব সহজেই কমানোর জন্য আমরা আপনার জন্য নিয়ে এসেছি Hot Shaper Belt .<li><li/> যা খুব দ্রুত (এটি পরীক্ষিত ) ১০০% গ্যারান্টি আপনার অতিরিক্ত মেদ (ভুঁড়ি) ও চর্বি কমিয়ে আপনাকে স্লিম ও আকর্ষণীয় করে তুলবে ।<li><li/>\r\n<li><li/>আপনার বডি ফিগার কে আরও আকর্ষণীয় আরও স্লিম করতে সাহায্য করে এই MISS BELT বডি শেপারটি\r\n<li><li/>এটি আপনি বাসায়, হাঁটার সময়, কাজের মধ্যে , শপিং এ , জগিং এ ব্যবহার করতে পারেন ।<li><li/>\r\nমহিলা ও পুরুষদের জন্য একটি অনন্য গেজেট (যা আপনার অতিরিক্ত মেদ কমাতে সাহায্য করবে)।<li><li/>\r\n• আপনার ফিগার শেপ এর মধ্যে থাকবে।<li><li/>\r\nম্যাটেরিয়ালঃ পলিয়েস্টার, স্প্যানডেক্স, নাইলন, রাবার\r\n<li><li/>সাইজ: L, XL, XXL', NULL, '', '2040', 9300, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 12:46:10', '2019-09-06 12:46:10', '', '', '', '0', '0', '0'),
(115, '12 in 1Spice Rack', 'spice-rack', 1990, 600, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>প্রয়োজনীয় স্পাইস, জিরা পাউডার, লবন, চিনি বা যেকোনো মসলা এতে সহজেই রাখা যায়<li><li/>\r\nআকর্ষনীয় এবং কার্যকরি ডিজাইন<li><li/>\r\n১২ টি লাইনার সেট<li><li/>\r\nম্যাটেরিয়াল: প্লাস্টিক<li><li/>', NULL, '', '1017', 5000, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 12:48:21', '2019-09-06 12:48:21', '', '', '', '0', '0', '0'),
(116, ' ফ্রুট অ্যান্ড ভেজিটেবল জুসার', 'Jussar', 990, 750, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', 'এখন এই হ্যান্ডি জুস মেকার এর সাহায্যে ঘরেই তৈরি করুন বিভিন্ন ফলের জুস ম্যাটেরিয়াল- প্লাস্টিক ও স্টেইনলেস স্টিল আলুসহ বিভিন্ন ধরণের ভর্তাও তৈরি করতে পারবেন', NULL, '', 'Jussar', 9700, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 12:50:33', '2019-09-06 12:50:33', '', '', '', '0', '0', '0'),
(117, 'APPLE স্মার্ট ওয়াচ (কপি)-সিম সাপোর্টেড', 'apple-smart-watch', 1200, 800, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>এই চমৎকার ঘড়িটি আপনার স্মার্ট মোবাইলের এক্সট্রা গিয়ার হিসেবে কাজ করবে<li><li/> ডিসপ্লেঃ 1.54\"<li><li/> ক্যামেরাঃ 2 MP <li><li/>সিমঃ সিঙ্গেল সিম <li><li/>১৬ জিবি মেমোরি কার্ড সাপোর্টেড <li><li/>টাচ স্ক্রিন <li><li/>লিথিয়াম আয়ন ব্যাটারি <li><li/>অ্যালার্ম, <li><li/>ক্যালেন্ডার, ক্যালকুলেটর, ফাইল ম্যানেজার <li><li/>অডিও প্লেয়ার<li><li/> থিম সেটিং <li><li/>ভিডিও রেকর্ডার ইমেজ ভিউয়ার ভিডিও প্লেয়ার সাউন্ড রেকর্ডার সহ সবকিছু', NULL, '', '1053', 6800, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 12:52:13', '2019-09-06 12:52:13', '', '', '', '0', '0', '0'),
(118, 'WaxVac ইয়ার ক্লিনার', 'waxvac', 550, 250, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', 'WaxVac ইয়ার ক্লিনার আপনার কান পরিস্কারের সহজ ও নিরাপদ উপায় ব্যবহার করা সহজ, কোন পার্শ্ব প্রতিক্রিয়া নাই। শিশু থেকে শুরু করে সবাই ব্যবহার করতে পারবে WaxVac আলতো করে কান থেকে আর্দ্রতা, ময়লা বের করে নিয়ে আসে কোমল এবং কার্যকর ইউনিক সেফটি গাইড টিপ আপনার কানের ক্যানালকে রাখে নিরাপদ ব্যবহারযোগ্য ৮ টি কালারকোডেড সিলিকন টিপস এবং হ্যান্ডি ক্লিনিং ব্রাশ ব্যাটারি চালিতএকটি শক্তিশালী পরীক্ষণ লাইট টিপ ম্যাটেরিয়াল: নন-টক্সিক সিলিকন পাওয়ার: ২×AA ব্যাটারি (ব্যাটারি সাথে দেয়া নেই) প্যাকে থাকছে : ১ টি WaxVac Ear Cleaner ১ টি Cleaner Dong Brush ৮ টি Non Toxic Silicone Tips ( Assorted Colors ) ১ টি ইউজার ম্যানুয়াল', NULL, '', '1063', 0, '', 'fixed', '', '481', 'In stock', 1, 'general', '2019-09-06 12:54:10', '2019-09-06 12:54:10', '', '', '', '0', '0', '0'),
(119, 'ভার্চুয়াল রিয়ালিটি 3D গ্লাস', '3d-glasses-for-smartphone', 850, 400, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', 'Compatible: 4.7\"- 6\" screen mobile phones Only for left-right 3D films, supports Android & IOS Environmentally friendly, fully enclosed design Secret images, other people cannot see anything except the wearer Convenient to use: watch anytime, anywhere whether sitting, lying, standing You will not feel visual fatigue / dizzy even when using for a long time w/ the resin lens 3D picture of the screen effect is super good, awesome feeling Made of ABS & spherical resin lens material without stimulation plastic sheet Distance between phone & lens design can be adjusted to suit people w/ different visions', NULL, '', '1064', 4400, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 12:56:12', '2019-09-06 12:56:12', '', '', '', '0', '0', '0'),
(120, 'ডিজিটাল ব্লাড প্রেসার মনিটর', 'pasher-machin', 1900, 1200, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>ডিজিটাল ব্লাড প্রেশার মনিটর (৩ বছরের ওয়ারেন্টি)<li/>\r\nযারা রক্তচাপ নির্ণয়ে ব্লাড প্রেসার মনিটর বাড়ি অথবা বাড়ির বাহিরেও বহন করতে ইচ্ছুক তাদের জন্য সহজ সমাধান।<li/>\r\n\r\nবয়স ৩০ এর উর্ধে যাওয়ার সাথে সাথে মানুষের রক্ত চাপ বাড়তে থাকে যা জানাটা খুবই প্রয়োজন<li/> তাই নিজের শরিরের কথা চিন্তা করেই বাড়ীতে একটা প্রেশার মাপার মেশিন রাখুন।<li/>গভীর রাতে অথবা পরিবারের কোন মুমূর্ষু ব্যক্তির অথবা প্রেশার আপ-ডাউন হয় এমন ব্যক্তির যে কোন সময় রক্তচাপ মাপার জন্যে অন্তত বাসায় এই যন্ত্রটি থাকা উচিত<li/>\r\n\r\n<li/>Accu Max ব্লাড প্রেশার মনিটর<li/>\r\nএক্সট্রা লার্জ LCD ডিসপ্লে উইথ ডিজিটাল ডিসপ্লে সিস্টেম<li/>\r\n১২০ মেমোরি স্টোরেজ<li/>\r\nব্লাড প্রেসার লেভেল ইন্ডিকেটর<li/>\r\nডিটেক্ট ইরেগুলার হার্টবিট ডিটেক্ট<li/>\r\nমুভমেন্ট ডিটেকশন<li/>\r\nCharger/ ৪টি AA ব্যাটারি দ্বারা চালিত<li/>\r\nমেইড ইন তাইওয়ান<li/>\r\n৩ বছরের ওয়ারেন্টি<li/>', NULL, '', '1065', 1977, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 12:59:16', '2019-09-06 12:59:16', '', '', '', '0', '0', '0'),
(121, 'VWash Plus Intimate Hygiene Wash - 100 ml', 'vwash-plus-intimate', 1290, 550, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>এখন ৫০ বছর বয়সেও কুমারির মত থাকা সম্ভব।<li><li/>\r\n\r\nগোপন অংগ (সংকুচিত)টাইট করে।\r\nদুরগন্ধ দূর করে।<li><li/>\r\nগোপন অংগের কালো দাগ দূর করে।<li><li/>', NULL, '', '2050', 5000, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 02:58:21', '2019-09-06 02:58:21', '', '', '', '0', '0', '0'),
(122, 'Virgin Again Vagina', 'virgin-again-vagina', 1200, 600, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>গোপন অংগ (সংকুচিত)টাইট করে। \r\nদুরগন্ধ দূর করে।<li><li/>\r\nগোপন অংগের কালো দাগ দূর করে।<li><li/>', NULL, '', '2056', 399998, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 03:00:47', '2019-09-06 03:00:47', '', '', '', '0', '0', '0'),
(123, 'HP ষ্টীল বডি পেনড্রাইভ - 32GB', 'HP-Steel-Body-Pen-Drive', 890, 450, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>Interface: USB 2/3.0 Storage <li><li/>Capacity: 32 GB <li><li/> Easy Plug-In Fast transfer files with <li><li/> USB 3.0 speed  <li><li/>No software installation required  <li><li/>Handy cap-less design with a durable metal finish <li><li/>', NULL, '', '1641', 69255, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 03:03:12', '2019-09-06 03:03:12', '', '', '', '0', '0', '0'),
(124, 'Caboki hair Building Fiber', 'cabokihairbuildingfiber', 1500, 2600, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', 'টাক সমস্যার সমাধান মাত্র ১ মিনিটে। ১০০% গ্যারান্টি।\r\nCaboki hair Building Fiber USA 25g কৃত্রিম চুল তৈরী করে।\r\n\r\n১.ইহা একটি ফ্যাশন্যাবেল পন্য।\r\n২.ইহা আমেরিকার তৈরী একটি বিশেষ পাউডার,যার কোন প্বার্শ প্রতিক্রিয়া নেই।\r\n৩.যা ব্যবহারের সাথে সাথেই, আপনার টাক মাথায় এক ধরনের কৃত্রিম চুলের তৈরী করবে।\r\n৪.আপনি এটা সত্তর বার অথবা তার অধিক বার ব্যবহার করতে পারবেন।\r\n৫.একবার লাগানোর পর,যেই কৃত্রিম চুলটা আপনি পাবেন তা আপনার মাথায় পরবর্তী গোসল করার আগ পর্যন্ত থাকবে,এভাবে সত্তর বার আপনি পাবেন টাকবিহীন এক অসাধারন হেয়ার লুক\r\n৬.ইহা আপনি যে কোন সাদা পোষাকের সাথেও ব্যবহার করতে পারবেন কারন ইহাতে পানি লাগলেও কোন কালির সৃষ্টি করেনা।\r\n৭. ধূসর প্যাচ বা পাতলা-লম্বা চুলের সাথে কৃত্রিম চুল তৈরী করে চেহারা খুব দ্রুত দর্শনীয় করে তোলে ।\r\n৮. আপনার চুল ঘন করা এবং একটি প্রাকৃতিক চেহারা প্রদান করা।\r\n৯. মহিলাদের এবং পুরুষদের উভয়ের জন্য ব্যবহারর উপযোগী।\r\n১০.৭০ বার ব্যবহার করতে পারার সুযোগ।\r\n১১.ওজন: 200gm', NULL, '', '1041', 4900, '', 'fixed', '', 'YVSlsbWJcjQ', 'In stock', 1, 'general', '2019-09-06 03:05:36', '2019-09-06 03:05:36', '', '', '', '0', '0', '0'),
(125, 'Toppik hair building fibers ', 'toppik-hair-building-fibers', 1200, 550, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li><li/>টাক সমস্যার সমাধান মাত্র ১ মিনিটে। \r\n১০০% গ্যারান্টি কৃত্রিম চুল তৈরী করে।<li><li/>\r\n\r\n১. ইহা একটি ফ্যাশন্যাবেল পন্য।<li><li/>\r\n২. ইহা আমেরিকার তৈরী একটি বিশেষ পাউডার, যার কোন প্বার্শ প্রতিক্রিয়া নেই।<li><li/>\r\n৩. যা ব্যবহারের সাথে সাথেই, আপনার টাক মাথায় এক ধরনের কৃত্রিম চুলের তৈরী করবে।<li><li/>\r\n৪. আপনি এটা সত্তর বার অথবা তার অধিক বার ব্যবহার করতে পারবেন।<li><li/>\r\n৫. একবার লাগানোর পর,যেই কৃত্রিম চুলটা আপনি পাবেন তা আপনার মাথায় পরবর্তী গোসল করার আগ পর্যন্ত থাকবে,এভাবে সত্তর বার আপনি পাবেন টাকবিহীন এক অসাধারন হেয়ার লুক<li><li/>\r\n৬. ইহা আপনি যে কোন সাদা পোষাকের সাথেও ব্যবহার করতে পারবেন কারন ইহাতে পানি লাগলেও কোন কালির সৃষ্টি করেনা।<li><li/>\r\n৭. ধূসর প্যাচ বা পাতলা-লম্বা চুলের সাথে কৃত্রিম চুল তৈরী করে চেহারা খুব দ্রুত দর্শনীয় করে তোলে ।<li><li/>\r\n৮. আপনার চুল ঘন করা এবং একটি প্রাকৃতিক চেহারা প্রদান করা।<li><li/>\r\n৯. মহিলাদের এবং পুরুষদের উভয়ের জন্য ব্যবহারর উপযোগী।<li><li/>\r\n১০. ৭০ বার ব্যবহার করতে পারার সুযোগ।<li><li/>', NULL, '', '10980', 4997, '', 'fixed', '', 'YVSlsbWJcjQ', 'In stock', 1, 'general', '2019-09-06 03:09:48', '2019-09-06 03:09:48', '', '', '', '0', '0', '0'),
(126, 'Magic Capsul Cutter ', 'magic-capsul-cutter', 1390, 990, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>সব ধারনের কাটার,ব্লেন্ডার,গ্রিন্ডার একসাথে<li><li/>\r\n এখন মাংস কিমা থেকে শুরু করে আদা রসুন পেস্ট, মসলা গুঁড়া, বরফ কুচি, যে কোনো ফলের জুস করুন এক মেশিনেই<li><li/>\r\n\r\nব্লেড: স্টেইনলেস স্টিল<li><li/> ম্যাটেরিয়াল বডি: ABS প্লাস্টিক <li><li/>\r\nকভার: ট্রাইটোন <li><li/>Cup: ট্রাইটোন <li><li/>\r\nপাওয়ার কনজাম্পশন: 200W<li><li/>\r\nরেটেড ভোল্টেজ: 100V, 50 / 60 Hz <li><li/>\r\nগাইড: আপ্রক্স. 200 g (কাপ MAX লাইন বিফোর)<li><li/>\r\n সাইজ: (WxDxH)11.6 x11.6 x 23.3 cm <li><li/>\r\nওয়েট: 1.04kg<li><li/>', NULL, '', '1105', 4998, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 03:12:20', '2019-09-06 03:12:20', '', '', '', '0', '0', '0'),
(127, 'Kemei Professional 2 in 1 Hair Straightening-KM1055', 'kemei-professional', 890, 550, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '', NULL, '', '1303', 4998, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 03:14:32', '2019-09-06 03:14:32', '', '', '', '0', '0', '0'),
(128, 'ডিজিটাল পেন হোল্ডার ক্লক', 'digital-pen-holder', 850, 450, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>পেনহোল্ডার অ্যান্ড ক্লক \r\n<li><li/>কাউন্টডাউন টাইম ডিসপ্লে<li><li/> অ্যালার্ম ফাংশন <li><li/>টেম্পারেচার ডিসপ্লে কালার: সিলভার <li><li/>আকর্ষনীয় ডিজাইন', NULL, '', '1321', 49996, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 03:16:54', '2019-09-06 03:16:54', '', '', '', '0', '0', '0'),
(129, 'BOYA BY-MM1 Universal Cardiod Shotgun Microphone', 'boya-by-mm1-universal-cardiod', 2400, 1600, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', 'BY-MM1 comes out in compact size and light weight aluminium constructure , it will not be a heavy burden while shooting. Plug and play design,no need to worry the battery status. Included inside with a anti-shock mount,which can effectively reduce unwanted vibration, cable and handling noise. Also included a furry windproof shield,which specially used for minimizing the wind and environmental noise for outdoor recording , make sure the sound crystal clear.', NULL, '', '1325', 10000, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 03:19:58', '2019-09-06 03:19:58', '', '', '', '0', '0', '0'),
(130, 'Q18 Smart watch (Golden)', 'q18-smart-watch-golden', 2250, 1323, 1000, '2019-09-06 00:00:00', '2019-09-06 00:00:00', '  ', '<li>এই চমৎকার ঘড়িটি আপনার স্মার্ট মোবাইলের এক্সট্রা গিয়ার হিসেবে কাজ করবে <li><li/>এবং চাইলে এতে সিম ভরে মোবাইল হিসেবেও ব্যবহার করতে পারবেন <li><li/>CPU : MTK6260 <li><li/>সব অ্যান্ড্রয়েড, iphone স্মার্ট গিয়ার+সিম সাপোর্ট TF কার্ড সাপোর্ট 32জিবি পর্যন্ত <li><li/>ডিসপ্লে : 1.54 inch TFT HD LCD <li><li/>রেজ্যুলেশন : 240*240 pixel<li><li/> ব্লুটুথ ভার্সন. 3.0 <li><li/>ক্যামেরা : 2MP <li><li/>ব্যাটারি : 400mAh <li><li/>নেটওয়ার্ক : GSM/GPRS 850/900/1800/1900 <li><li/>ফিচারঃ : MP3 ,clock, Anti lost remind , Step motion meter/Calories calculation/Sports mileage records,Seep monitoring, Alarm clock <li><li/>ডাইমেনশনঃ 60*40*12.5mm <li><li/>Package: 1 X Q18s Smart Watch 1 X Chinese/English Manual 1 X USB Cable', NULL, '', '1323', 9982, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 03:22:42', '2019-09-06 03:22:42', '', '', '', '0', '0', '0'),
(131, 'ব্রাইটিনিং গূলটা সেট', 'Brightening-white-gluta-set', 990, 500, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>ব্রাইটিনিং গূলটা সেট<li><li/>\r\nমাত্র ৫ দিনে ফুল ব্রাইট<li><li/>\r\n\r\nব্রাইটিনিং গূলটা সেট থাইল্যান্ডের বিখ্যাত, <li><li/>যেটি আপনার ত্বককে রাখে সম্পুর্ন নিরাপদ রাখে। <li><li/>ব্রাইটিনিং হোয়াইট গূলটা সেটে আছে ৩ টি পণ্য ১)সাবান,\r\n২) ডে ক্রিম<li><li/>\r\n৩) নাইট ক্রিম।<li><li/>\r\n\r\nব্রাইটিনিং গূলটা সেট কিকি কাজ করে?<li><li/>\r\n\r\nমাত্র ৫ দিনে ত্বক ব্রাইট করে ৫ শেড পর্যন্ত<li><li/>\r\nত্বকের মেছতা দূর করে<li><li/>\r\nত্বকের কালো দাগ দূর করে<li><li/>\r\nত্বক নরম রাখে<li><li/>\r\nত্বক মসৃণ রাখে<li><li/>\r\nত্বকের সূর্যের পোড়া দাগ দূর করে<li><li/>\r\nত্বকে ব্রণের দাগ দূর করে<li><li/>\r\n\r\nব্যবহারঃ প্রথমে সাবান ব্যবহার করবেন এবং শুকনা ত্বকে নাইট ক্রিম লাগাবেন <li><li/>সকালে সাবান দিয়ে ওয়াস করে ডে ক্রিমটি ব্যবহার করবেন।<li><li/>', NULL, '', '2201', 5000, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 03:24:37', '2019-09-06 03:24:37', '', '', '', '0', '0', '0'),
(132, 'Cathy doll sexy soon', 'cathy-doll-sexy-soon', 899, 450, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>স্তন বর্ধিতকরণ সঙ্গে আপনার স্তনের আকৃতি সুগঠিত করে।<li><li/>\r\n\r\nCathy doll sexy soon তন বর্ধিতকরণ সঙ্গে আপনার স্তনের আকৃতি সুগঠিত করে। <li><li/>এটি কোরিয়ার বেষ্ট সেলিং পণ্য। আমরা দিচ্ছি মানিব্যাগ গ্যারান্টী।<li><li/>\r\n\r\n* বক্ষ আকার বাড়ে।<li><li/>\r\n* অনুপস্থিত ভলিউম পুরূন করে।<li><li/>\r\n* স্তনের আকৃতি সুগঠিত করে।<li><li/>\r\n* পাশে ঝুলিয়া পড়া সুগঠিত করে।<li><li/>\r\n* স্তন দৃঢ় করে।<li><li/>', NULL, '', '2202', 5000, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 03:29:40', '2019-09-06 03:29:40', '', '', '', '0', '0', '0'),
(133, 'পাওয়ার টুইস্টার', 'power-tools', 790, 450, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>Super K Power Twister ১পিস<li><li/>\r\nপেশি রিস্ট ও মাসল ঠিক রাখার জন্য আদর্শ\r\nএকটি উপকরণ।<li><li/>', NULL, '', '1330', 498, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 03:31:58', '2019-09-06 03:31:58', '', '', '', '0', '0', '0'),
(134, 'Wireless ip camera 2 Antenna ', 'wireless-ip-camera', 2400, 2000, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>১। ক্যামেরা রেজুলেশন : 1.3 Mega Pixel (HD)<li><li/>\r\n২। অটো নাইট ভিসন, রাতে অন্ধকারে ক্লিয়ার ভিডিও দেখা যাবে ।)<li><li/>\r\n৩। মেমোরি কার্ডে ভিডিও রেকর্ডিং সিস্টেম।)<li><li/>\r\n৪। দুই প্রান্ত থেকে কথা বলা ও শোনা যাবে। )(Same Like Mobile))<li><li/>\r\n৫। Mobile বা Computer বা TAB যে কোন ডিভাইস থেকে চালানো যাবে।)<li><li/>\r\n৬। দীর্ঘ দূরত্ব নজরদারির জন্য শক্তিশালী লেন্স।)<li><li/>\r\n৭। পৃথিবীর সব জায়গা থেকে আপনার কাংখিত জায়গাগুলো সরাসরি মনিটরিং করতে পারবেন।)<li><li/>\r\n৮।ওয়াল, ছাঁদ বা টেবিল যে কোন জায়গায় সেট করা যাবে।)<li><li/>\r\n৯। Still Picture তোলা যায়।)<li><li/>\r\n১০। HD কুয়ালিটি ভিডিও আউটপুট।)<li><li/>\r\n১১। স্মার্ট এলারমিং সিস্টেম।)<li><li/>\r\n১২। Power Supply : 5 volt)<li><li/>\r\n১৩। Brand Name: H-Cam)<li><li/>\r\n১৪। Six Month Service warranty)<li><li/>\r\n১৫। Software : CamHi / Keye)<li><li/>', NULL, '', '1013', 249947, '', 'fixed', '', 'HXdmb4z53Kk', 'In stock', 1, 'general', '2019-09-06 03:35:16', '2019-09-06 03:35:16', '', '', '', '0', '0', '0'),
(135, 'Slim N Lift স্লিমিং ভেস্ট (ফর মেন)', 'slim-n-lift', 600, 280, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '* Slim N Lift একটি কার্যকর বডি স্লিমিং ভেস্ট (ফর মেন)\r\n* এটি নিয়মিত ব্যবহারে আপনার ভুঁড়ি ২-৩ ইঞ্চি কমে যাবে\r\n* আরামদায়ক ফেব্রিক\r\n* স্মার্ট লুক\r\n* সাইজ: L, XL, XXL\r\n* সহজেই আপনার পোশাকের নিচে ব্যবহার করতে পারেন', NULL, '', '1075', 43, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 03:37:30', '2019-09-06 03:37:30', '', '', '', '0', '0', '0'),
(136, 'Bluetooth KARAOKE Microphone', 'bluetooth-karaoke', 1600, 2600, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', ' আপনার মোবাইল ফোন এবং এই মাইক্রোফোনের সাহায্যে বানিয়ে নিন হোম কারাওকে আর মাতুন বন্ধুদের সাথে।\r\n★ মাইকের সাথে স্পিকার।\r\n★ এবার বাসায় হবে পার্টি, DJ.\r\n★ যে কোন পার্টি, যে কোন ছোট অনুষ্ঠান, টুরিস্ট গাড়িতে, BBQ,DJ, স্কুল ও গানের স্কুল, মিলাদ সহ যে কোন ঘরোয়া অনুষ্ঠানের জন্য Q7 Microphone Speaker হতে পারে অনন্য।\r\n★ কোন প্রকার ভিন্ন মাইক বা স্পিকার এর প্রয়োজন নেই।\r\n★ যে কোন জায়গায় সহজে বহন করা যাবে।\r\n★ Bluetooth কানেকশন এর মাধ্যমে ও শোনা যাবে। যেমনঃ মোবাইল ফোন, কম্পিউটার, সাউন্ড সিস্টেম।\r\n★ Reachargeable.\r\n★ প্রয়োজনে বড় স্পিকার এর সাথে কানেক্ট করা যাবে।', NULL, '', '1055', 4300, '', 'fixed', '', 'q5rerWG1QAQ', 'In stock', 1, 'general', '2019-09-06 03:40:04', '2019-09-06 03:40:04', '', '', '', '0', '0', '0'),
(137, 'Himalaya Ayur Slim Tea(10tea bag) +Capsules (60pice)packeg', 'himalaya-ayur-slim-tea', 1200, 650, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>ব্যায়াম ছাড়াই কোমর, পেট ইত্যাদির চর্বি/ মেদ কমাবে<li><li/>\r\nহারবাল চা তাই side effects এর ভয় নেই।<li><li/>পেট কমবে।<li><li/>\r\nবারতি চরবি কাটবে।<li><li/>\r\nহিপ কমবে।<li><li/>\r\nবাথরুম পরিষ্কার হবে। গ্যাস এবং মুখের ব্রন দূর হবে।<li><li/>\r\nস্কিন সুন্দর এবং টানটান হবে।<li><li/>\r\nওজন কমবে অনেক দ্রুত।<li><li/>\r\nপুরা শরীর কমবে।<li><li/>\r\nস্কিন টাইট করবে<li><li/>\r\n১০০% অরিজিনাল প্রোডাক্ট এর গ্যারান্টি।<li><li/>পেইজে লাইক দিয়ে সাথেই থাকুন।<li><li/>\r\nক্যাপস্যুল এরব্যবহারের নিয়মাবলী <li><li/>\r\nপ্রতিদিন ২ বেলা ১- টি মোট ২ টা<li><li/>\r\nক্যাপস্যুল খেতে হবে। <li><li/>ক্যাপস্যুল যতদিন খাবেন পানি বেশি খেতে হবে। <li><li/>1 মাসের মধ্যে কাঙ্ক্ষিত ফলাফল পাওয়া যাবে।<li><li/>', NULL, '', '2022', 1998, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 03:42:57', '2019-09-06 03:42:57', '', '', '', '0', '0', '0'),
(138, 'Temulawak Cream সাবান সহ', 'temu-lawak-cream', 750, 350, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>100% original product guaranteed<li><li/>\r\nMade in Malaysia<li><li/>\r\nএকটা ডে ক্রিম + একটা নাইট ক্রিম + সাবান<li><li/>\r\nকাঁচা হলুদ ও প্রাকৃতিক উপাদান দিয়ে তৈরী <li><li/>টেমুলাওয়াক ক্রিম ত্বকে দাগ, ব্রণ ও ব্রণের দাগ, মেছতা, ত্বকে ভাঁজ পড়া বর্জন করে ফর্সা করুন। <li><li/>এই ক্রীম ব্যবহারে আপনার ত্বক দেখাবে উজ্জাল ও তরুন.<li><li/>\r\nEliminate dark spots, acne and wrinkled skin.<li><li/>\r\n৯৫% রিভিউ ভালো google এ।<li><li/> ক্রিম টি আপনার ত্বক কে গভীর থেকে স্থায়ী ভাবে ফর্সা করবে।<li><li/>\r\nএটি সাধারণত ২-৩ শেড পর্যন্ত ফর্সা করে।<li><li/>\r\nউপকারিতা :<li><li/>\r\n✔ত্বক ফর্সা ও উজ্জ্বল করে<li><li/>\r\n✔ ত্বকের কালচে ভাব দূর করে<li><li/>\r\n✔ চোখের নিচের কালো ভাব দূর করে<li><li/>\r\n✔ ত্বক নরম করে<li><li/>\r\n✔যে কোন দাগ দূর করে।<li><li/>\r\n✔ ত্বক কে করবে লাবণ্যময়।<li><li/>\r\nব্যবহারবিধি :<li><li/>\r\n1. ডে ক্রিমটি মুখে এমনভাবে ব্যাবহার করতে হবে যাতে মুখের সাথে মিশে যায়।<li><li/>\r\n2. নাইট ক্রিম রাতে লাগিয়ে রাখবেন এবং ্কাবলে ওয়াস করে ফেলবেন।<li><li/>', NULL, '', '2027', 5000, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 03:45:01', '2019-09-06 03:45:01', '', '', '', '0', '0', '0'),
(139, 'MAKEUP RACK COMBINATION With MAKE-UP RACK', 'makeup-rack-combination-with-make-up-rack', 1950, 1750, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', 'Every girl is aware of their impersonation. Different cosmetics are needed as a part to represent yourself beautifully. It is very important to take care of these tools and keep knowledge how to take care of them. If the cosmetic material is not well stored, then it has the possibility to be damaged. These problems might be solved this cosmetics organizer. This makeup storage box has some characteristics which you will give a variety of benefits. Please check cosmetics storage box price in BD before buying.', NULL, '', '1370', 499, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 03:47:28', '2019-09-06 03:47:28', '', '', '', '0', '0', '0'),
(140, 'Camera Lens Coffee Mug', 'camera-lens-coffee-mug', 990, 650, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>Camera Lens Coffee Mug/Cup With Lid,<li><li/>Photo Coffee Mugs Stainless Steel<li><li/> Travel Lens Mug Thermos\r\nThe creative mug design is a 1:1 replica of Canon<li><li/> Lens EF 24-105mm f / 4L IS USM Lens.<li><li/>\r\nFood grade ABS plastic materials <li><li/>outside is 100% BPA free and extra-fine stainless steel interior with 13.5oz / 400ml Capacity when filled up.<li><li/>\r\nSipping lid is convenient for drinking coffee or beverages.<li><li/>\r\nPerfect unique gift for the every one in your life, <li><li/>especially a Photographer. <li><li/>They’ll love this novelty mug set. Great birthday, holiday & graduation gift.<li><li/> Ideal for videographers, too.<li><li/>', NULL, '', '1379', 500, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 03:49:34', '2019-09-06 03:49:34', '', '', '', '0', '0', '0'),
(141, 'Night Vision Hidden Camera', 'night-vision-hidden-camera', 6200, 4200, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>Description<li><li/>\r\n\r\nStrong Function: This hidden mini camera Supports real-time video recording, night vision, snapshot. <li><li/>\r\nNight Vision Camera: 6pcs black LED around the lens, it\'s an ideal portable home security camera. <li><li/>\r\nMotion Detection: When object moves on the front of the obscure lens, motion detection will be activated and the device will start recording automatically.<li><li/> \r\nEasy To Operate: Video recording, take photos and infrared light all can be achieved by this mufti-functional item. <li><li/>Moreover, they can be enabled with the simple touch of a button. <li><li/>Portable size and lightweight makes it easy to wear and carry. <li><li/>\r\nNote: <li><li/>\r\n1. Please read manual before using this product! <li><li/>\r\n2. Please charging camera 3-5 hours at first time. <li><li/>\r\nMain Specifications: <li><li/>\r\n1. Video Format ：AVI <li><li/>\r\n2. Video Resolution: 1920*1080P <li><li/>1280*720P 640*480P 25fps \r\n3. Cycle Record : 5 minutes per section. <li><li/>\r\n4. The working temperature is -10℃-55℃.The battery is >-20℃.please use the camera in a suitable temperature. <li><li/>\r\n5. Battery capacity: 3.7V/500 mAH Lithium Battery <li><li/>\r\n6. Recording last time: 70 minutes <li><li/>', NULL, '', '1380', 5000, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 03:52:43', '2019-09-06 03:52:43', '', '', '', '0', '0', '0'),
(142, 'Indulekha Bringha oil & Shampoo', 'indulekha-bringha-oil-shampoo', 1550, 990, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>চুল পড়া নিয়ে দুশ্চিন্তার সময় শেষ !\r\n<li><li/>চুল নিয়ে ভাবনা আর নয়, সারা পৃথিবী জয় করে এখন বাংলাদেশে পাওয়া যাচ্ছে Indulekha Bringha oil<li><li/>\r\n✪এটি ব্যবহারে আপনার চুল নতুন করে <li><li/>গজাবে।এছাড়াও এটি আপনার চুলকে করবে গনো,কালো ও মজবুুত।<li><li/>\r\n✪কোন পার্শ্ব প্রতিক্রিয়া নাই।<li><li/>\r\n✪ক্ষতিগ্রস্থ চুলকে পুনরুদ্ধার করে।<li><li/>\r\n✪অনুজ্বল চুলকে উজ্জল করে।<li><li/>\r\n✪আপনার চুল কালো চকচকে হবার পাশাপাশি করবেআরও শক্তিশালী ।<li><li/>\r\n✪চুল এর খুস্কি দূর করবে।<li><li/>\r\n✪চুল পড়া বন্ধ করবে ।<li><li/>\r\n✪ছেলে-মেয়ে উভয়ই ব্যবহার করতে পাড়বে।<li><li/>', NULL, '', '2350', 4999, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 03:56:31', '2019-09-06 03:56:31', '', '', '', '0', '0', '0'),
(143, 'SPORT WAIST BAGS', 'sport-waist-bags', 480, 280, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '', NULL, '', '1403', 998, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 03:58:46', '2019-09-06 03:58:46', '', '', '', '0', '0', '0'),
(144, 'APPLE স্মার্ট ওয়াচ', 'smart-watch-applee', 1250, 800, 69, '2019-09-11 00:00:00', '2019-09-13 00:00:00', '    ', '<li>এই চমৎকার ঘড়িটি আপনার স্মার্ট মোবাইলের এক্সট্রা গিয়ার হিসেবে কাজ করবে এবং চাইলে এতে সিম ভরে মোবাইল হিসেবেও ব্যবহার করতে পারবেন <li><li/> ডিসপ্লেঃ ১.৫৪\"<li><li/>  ক্যামেরাঃ 2 মেগাপিক্সেল<li><li/>  মেমোরি কার্ড স্লট সিমঃ সিঙ্গেল সিম<li><li/>  টাচ স্ক্রিন লিথিয়াম আয়ন ব্যাটারি: 300 mAh<li><li/>  ফাংশনঃ অ্যালার্ম, ক্যালেন্ডার, ক্যালকুলেটর, ফাইল ম্যানেজার, অডিও প্লেয়ার, থিম সেটিং, ক্যমেরা, ভিডিও রেকর্ডার, ইমেজ ভিউয়ার, ভিডিও প্লেয়ার, সাউন্ড রেকর্ডার সহ সবকিছু<li><li/> ', NULL, '', '1108', 4948, '', 'percent', '', '', 'In stock', 1, 'general', '2019-09-11 06:48:53', '2019-09-11 06:48:53', '', '', '', '0', '0', '0');
INSERT INTO `product` (`product_id`, `product_title`, `product_name`, `product_price`, `purchase_price`, `discount_price`, `discount_date_from`, `discount_date_to`, `product_summary`, `product_description`, `product_specification`, `product_terms`, `sku`, `product_stock`, `product_of_size`, `discount_type`, `product_color`, `product_video`, `product_availability`, `status`, `product_type`, `created_time`, `modified_time`, `seo_title`, `seo_keywords`, `seo_content`, `product_percent_tag`, `delever_charge_in_dhaka`, `delever_charge_out_dhaka`) VALUES
(145, 'USB লাইটিং মস্কুইটো কিলার ল্যাম্প', 'usb-mosquito-killer-lamp', 990, 480, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>মশার যন্ত্রনা? ব্যবহার করুন এ গ্যাজেটটি। মশা মরবেই।<li><li/>\r\nUSB ইলেকট্রনিক Mosquito কিলার এর সাহায্যে এখন মশার হাত থেকে বাঁচুন,<li><li/>\r\nমশা ছাড়াও অন্যান্য পোকামাকড় ধ্বংস করে,<li><li/>\r\nকোনো রাসায়নিক ধোঁয়া বা গন্ধ নেই; তাই মানব শরীরের জন্য ক্ষতিকর নয়,<li><li/>\r\nএকটি শক্তিশালী আলোর সাহায্যে পতঙ্গকে আকৃষ্ট করে এবং ধ্বংস করে দেয়।<li><li/>', NULL, '', '1858', 705, '', 'fixed', '', 'FIa_u-239uI', 'In stock', 1, 'general', '2019-09-06 04:03:46', '2019-09-06 04:03:46', '', '', '', '0', '0', '0'),
(146, 'DEXE BLACK HAIR SHAMPOO', 'dexe-black-hair-shampoo', 290, 190, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>পাকা চুল এর ঝামেলা?  <li><li/> এখনি সব চিন্তা বাদ।<li><li/> আমাদের হারবাল & ১০০% হালাল এই শ্যাম্পু টি মাত্র ১ বার মাথায় শ্যাম্পু এর মত দিলেই সমস্যা সমাধান। <li><li/> সকল প্রকার সাইড ইফেক্ট ছাড়াই আপনি আপনার ন্যাচারাল হেয়ার কালার ফিরে পাবেন। <li><li/> এটা স্কিন এর  ক্ষতি করবে না। <li><li/> ১০০% কাজ করবে পরিক্ষিত <li><li/> ', NULL, '', '2030', 1961, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 04:05:55', '2019-09-06 04:05:55', '', '', '', '0', '0', '0'),
(147, 'Frying Pan Rack', 'frying-pan-rack', 850, 730, 46, '2019-09-11 00:00:00', '2019-09-13 00:00:00', '   ', '', NULL, '', '1421', 5000, '', 'percent', '', '', 'In stock', 1, 'general', '2019-09-11 06:49:13', '2019-09-11 06:49:13', '', '', '', '0', '0', '0'),
(148, 'Stainless steel fruit fork western restaurant gift set', 'stainless-steel-fruit-gift-set', 790, 650, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '', NULL, '', '1422', 3979, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 04:11:20', '2019-09-06 04:11:20', '', '', '', '0', '0', '0'),
(149, 'Gulta Frosta Plus(Made in thailand)', 'gulta-frosta-plus', 4500, 3500, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', 'গ্লুটফ্রাস্টা প্লাস হল একটি খাদ্যতালিকাগত সাপ্লিমেন্টারী ক্যাপ্সুল যার উচ্চ মানের নিশ্চিত করার জন্য সতর্কতার সাথে গবেষণা করা হয়েছে। গ্লুট ফ্রস্টা প্লাসটি এশিয়ান জনগণের ত্বক এবং জীবনধারা চাহিদা পূরণের জন্য স্পষ্টভাবে প্রণয়ন করা হয়। GlutaFrosta প্লাস  সামগ্রিক স্বাস্থ্য এবং পুষ্টিকর চামড়া তৈরীতে সাহায্য করে। ফলে আপনার চারপাশে সবাই লক্ষ্য যে এত অসাধারণ গুনাগুন।\r\nGlutaFrosta প্লাস সত্যিই চামড়া সমস্যা বুঝতে। অতএব, আমরা ত্বককে আরও সুস্থ ও উজ্জ্বল ও ফরসা করার জন্য  সারা বিশ্ব থেকে সেরা পুষ্টিগুলি সাবধানে নির্বাচন করে গুল্টা ফ্রস্টা প্লাস তৈরী করা হয়েছে। GlutaFrosts প্লাস আপনার ত্বকের জন্য চূড়ান্ত চয়েজ। \r\nসুন্দর ত্বক অর্জন করার সবচেয়ে সহজ  উপায়।\r\n\r\nসার্টিফিকেশন: থাইল্যান্ড সরকার কর্তৃক অনুমোদিত এফডিএ। জিএমপি প্রত্যয়িত। হালাল। জাপান, মার্কিন যুক্তরাষ্ট্র এবং ইউরোপ থেকে আমদানি করা উপকরণ।\r\n\r\nআকার: বাক্স প্রতি 30 ক্যাপসুল\r\n\r\nফলাফল: নিয়মিত গ্রহণ করলে  1-2 সপ্তাহের মধ্যে ফলাফল।\r\n\r\nশরীর ফর্সা করতে ১০০% কার্যকর।\r\n\r\nGulta Frosta Plus ক্যাপসুল খেলে আপনার যা যা উপকার হবে :\r\n√মুখ ও পুরো শরীর ফর্সা করে স্থায়ী ভাবে।\r\n√ব্রণ ও কালো দাগ দূর করবে,\r\n√বয়সের ছাপ মুছে দিবে\r\n√কুচকে যাওয়া ত্বককে টানটান করবে\r\n√চোখের নিচে কালো দাগ দূর করে\r\n√নতুন স্কীন উঠতে সাহায্য করবে\r\n√স্কিনকে নরম ও কমল করে তুলবে\r\n√স্কীনের তৈলাক্ত ভাব দূর করে\r\n√ত্বকের ডার্কসার্কেল দূর করবে\r\n√স্কিনের মৃত্য কোষ দূর করবে\r\n√স্কিনের হোয়াইটহেডস দূর্র করবে\r\n√ত্বকের ছিদ্র টাইট করতে সাহায্য করবে\r\n√আপনি ভিতর থেকে স্থায়ীভাবে ফর্সা\r\nহবেন \r\n√সমস্ত শরীর ফর্সা করবে৷\r\n√লিভার, ফুসফুস, কিডনির ক্ষতিকর টক্সিন দূর করবে।\r\n√ধুমপায়ী ও এ্যলকহোল পানকারীদের ড্যামেজ কমাবে।\r\n√আপনার মুখে ব্রন থাকলে চলে যাবে\r\n√কোন দাগ বা ঘা ফাসড়া থাকলেও চলে যাবে। কারন এখানে নিম এবং হলুদ আছে।\r\n√রক্ত পরিষ্কার করবে৷\r\n√স্কিনকে স্মুথ এবং গ্লো করবে৷\r\n\r\n(সাবধান !!!)\r\nবৃদ্ধ এবং শিশুদের জন্য ইহা গ্রহন যোগ্য নয়\r\nগর্ভাবস্থা বা স্তন খাওয়ানোর সময়\r\nব্যবহার করবেন না।\r\nশিশুদের এবং সূর্যালোক থেকে দূরে থাকুন অবশ্যই স্বাভাবিক খাবারের তালিকায় পুস্তিকর খাবার রাখুন)\r\n\r\nGulta Frosta Plus শরীরের ভিতর ও বাহির থেকে কাজ করে।\r\nযার কোন পার্শ্বপ্রতিক্রিয়া নেই।', NULL, '', '2323', 9995, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 04:14:18', '2019-09-06 04:14:18', '', '', '', '0', '0', '0'),
(150, 'Soumis Can Anti Wrinkle Cream ', 'soumis-can-anti-wrinkle-cream', 398, 200, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li/>Soumis Can Anti Wrinkle Cream : Size: 50 gm,<li><li/>\r\n\r\nIt helps to reduce fine lines and also helps to enhance the elasticity of the skin, which gives a younger look to your skin. It can be used for sensitive skin.,<li><li/>\r\n\r\nএটি সূক্ষ্ম রেখাগুলিকে কম করতে সাহায্য করে, যার ফলে আপনার ত্বকের চেহারাকে করে তারুণ্যে ভরপুর।,<li><li/>\r\n\r\n ', NULL, '', '2303', 4999, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 04:16:09', '2019-09-06 04:16:09', '', '', '', '0', '0', '0'),
(151, 'Keda Lady Shaver', 'keda-lady-shaver', 899, 550, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li><li/>Brand : Keda<li><li/>\r\n\r\nModel : KD-187<li><li/>\r\n\r\nShoulder width : 14 mm<li><li/>\r\n\r\nDepth : 22 mm<li><li/>\r\n\r\nHeight : 5.5 mm<li><li/>\r\n\r\nPower type : Rechargeable<li><li/>\r\n\r\nMaterial : Plastic<li><li/>\r\n\r\nWaterproof/washable : Yes<li><li/>\r\n\r\nDesigned by Streamline<li><li/>\r\n\r\nEpilation of the whole body area<li><li/>\r\n\r\nAccessory Board stand, power cord, <li><li/>\r\n\r\ncleaning brush, case, manual<li><li/>\r\n\r\nOperating voltage : Ac110v-240v / 50Hz-60Hz<li><li/>\r\n\r\nCharging time : 8 hours<li><li/>\r\n\r\nWorking environment : \"-30 ~ 60\" <li><li/>Celsius, less than 95% RH\r\n\r\nWeight : 300 g (with box)<li><li/>\r\n\r\nCertifications : Ce, ROHS<li><li/>', NULL, '', '1302', 497, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 04:18:53', '2019-09-06 04:18:53', '', '', '', '0', '0', '0'),
(152, 'Dr. White melasma white clear cream', 'dr-white-melasma-white-clear-cream', 1490, 1200, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li><li/>মেস্তা দূর হবে।\r\nবাদামী তিল দূর হবে।<li><li/>\r\nব্রন ও ব্রনের দাগ দূর হবে।<li><li/>\r\nরোদে পোড়া কালো দাগ দূর হবে।<li><li/>\r\npigmentation দূর করে<li><li/>\r\nফেস ফর্সা করবে স্থায়ী ভাবে।<li><li/>\r\nত্বক ৩-৪ শেড উজ্জল করে এবং দীর্ঘকালীনের জন্য<li><li/>\r\nত্বকের ছিদ্র টাইট করে ও ট্বক করে একেবারে মসৃণ।<li><li/>\r\nক্রিম টি বাবহারে আপনার ত্বক এর ফেয়ারনেস বাড়াবে। <li><li/>যা ক্রিম ব্যাবহার বন্ধ করে দিলে ও থাকবে।<li><li/>\r\n\r\nএটি সেনসিটিভ ত্বকে ব্যবহার করা যার।সব ধরনের ত্বক এবং ছেলে-মেয়ে উভয়ের জন্য উপযোগী।<li><li/>\r\nবাংলাদেশের আবহাওয়াতে এই ক্রিমটি অনেক ভাল কাজ করে।<li><li/> ফলে ইতোমধ্যে অনেকের কাছে এটি বেশ প্রিয় হয়ে উঠেছে।<li><li/>', NULL, '', '2360', 3998, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 04:21:05', '2019-09-06 04:21:05', '', '', '', '0', '0', '0'),
(153, 'Cathy Doll White Milk Shine Body Lotion', 'milk-shine-body-lotion', 985, 700, 56, '2019-09-11 00:00:00', '2019-09-18 00:00:00', '   ', '<li><li/>ত্বকের উজ্জলতা বৃদ্ধি করে মাত্র ৭ দিনে ।\r\nত্বকে ব্রনের দাগ দূর করে।<li><li/>\r\nরোদ্রে পোড়া দাগ দূর করে।<li><li/>\r\nআগুনে পোড়া দাগ দূর করে।<li><li/>\r\nস্কীনের তৈলাক্ত ভাব দূর করে।<li><li/>\r\nত্বকে ময়েশ্চারাইজার আনে।<li><li/>\r\nকোন ক্ষতিকর উপাদান নাই।<li><li/>', NULL, '', '2370', 5000, '', 'percent', '', '', 'In stock', 1, 'general', '2019-09-11 06:48:14', '2019-09-11 06:48:14', '', '', '', '0', '0', '0'),
(154, 'Ponds Pure white face Wash', 'ponds-pure-white-face-wash', 295, 150, 60, '2019-09-11 00:00:00', '2019-09-14 00:00:00', '   ', '', NULL, '', '2371', 499, '', 'percent', '', '', 'In stock', 1, 'general', '2019-09-11 06:48:33', '2019-09-11 06:48:33', '', '', '', '0', '0', '0'),
(155, 'Patanjali Multani Mati Face Pack', 'patanjali-multani-mati-face-pack', 200, 100, 26, '2019-09-11 00:00:00', '2019-09-11 00:00:00', '   ', '✔️ ত্বকের উপরিভাগের ময়লা ও তেল দূর করতে সাহায্য করে।\r\n✔️ ত্বকের জ্বালা ও সান_বার্ন দূর করেতে পারে।\r\n✔️ ত্বকের ছিদ্রকে ছোট করতে সাহায্য করে মুলতানি মাটি।\r\n✔️ বলিরেখা ও ফাইন লাইন দূর করতেও সাহায্য করে মুলতানি', NULL, '', '2400', 500, '', 'percent', '', '', 'In stock', 1, 'general', '2019-09-11 05:26:33', '2019-09-11 05:26:33', '', '', '', '0', '0', '0'),
(156, 'ডিজিটাল ওয়েট স্কেল', 'digital-weight-scale', 650, 250, 100, '2019-09-17 00:00:00', '2019-09-17 00:00:00', '   ', '<li>LCD ডিসপ্লে <li><li/>পকেট সাইজ, <li><li/>সহজে বহনযোগ্য <li><li/>যে কোন বস্তু হুকে ঝুলিয়ে মাপা যায় <li><li/>১০ গ্রাম হতে ৫০ কেজি পর্যন্ত ওজন মাপা যায় <li><li/>আউন্স অথবা পাউন্ডে ওজন কনভার্ট করা যায় খালি পাত্রের ওজনকে শুন্য করে নেয়া যায় <li><li/>মাত্র ২টি পেন্সিল (AAA সাইজের) ব্যাটারীতে চলে', NULL, '', '1350', 49733, '', '', '', '', 'In stock', 1, 'home', '2019-09-17 03:31:40', '2019-09-17 03:31:40', '', '', '', '15', '0', '0'),
(157, 'Tomato blink serum', 'tomato-blink-serum', 590, 300, 30, '2019-09-14 00:00:00', '2019-09-14 00:00:00', '    ', '<li>আপনার মুখের যে কোন দাগ ( ব্রনস্পট, মেসতা, রোদে পুড়া দাগ ) দুর করে মুখের উজ্জলতা বৃদ্ধি করে।<li><li/>\r\nএকনি ব্রন ও ব্রনের দাগ দুর করে।<li><li/>\r\nত্বক উজ্জ্বল করে ।\r\n<li><li/>স্কিনের ছিদ্র টাইট করে।\r\n<li><li/>বয়সের ছাপ ও কালো দাগ দুর করে।\r\n<li><li/>ত্বককে প্রাকৃতিক ভাবে সুস্থ, ফর্সা ও সুন্দর করে।<li><li/>\r\n\r\nব্যবহার<li><li/>\r\nপ্রতিদিন রাতে ঘুমানোর আগে ব্যবহার করবেন।<li><li/>\r\nরোদে বা তাপে না গেলে দিনে ও ব্যবহার করা যায়<li><li/>', NULL, '', '2390', 5000, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-14 10:46:25', '2019-09-14 10:46:25', '', '', '', '0', '0', '0'),
(158, 'WHITENING SET VENUT WHITE', 'whitening-set-venut-white', 998, 750, 15, '2019-09-14 00:00:00', '2019-09-14 00:00:00', '   ', '<li><li/>The following is a list of possible side-effects that may occur from all constituting ingredients of LS Bl Cream. <li><li/>This is not a comprehensive list. <li><li/>These side-effects are possible, but do not always occur. <li><li/>Some of the side-effects may be rare but serious. <li><li/>Consult your doctor if you observe any of the following side-effects, especially if they do not go away.<li><li/>\r\n#Itching of skin<li><li/>\r\n#Irritation of skin<li><li/>\r\n#Irritation<li><li/>\r\n#Bleeding<li><li/>\r\n#Skin hives<li><li/>\r\n#Redness of skin.<li><li/>', NULL, '', '2353', 9880, '', 'percent', '', '', 'In stock', 1, 'general', '2019-09-14 10:41:55', '2019-09-14 10:41:55', '', '', '', '0', '0', '0'),
(159, 'S-line Pills 34 Capsules', 's-line-pills-34-capsules', 2850, 2490, 45, '2019-09-11 00:00:00', '2019-09-27 00:00:00', '   ', '<li><li/>Fat Burn করবে\r\n<li><li/>খাবারকে দ্রত হজম করাবে\r\n<li><li/>Diet,Exercises ছাড়া ওজন কমাবে\r\n<li><li/>পুরো শরীরের চর্বি কমিয়ে আকর্ষণীয়\r\n<li><li/>সুন্দর ফিগার গড়ে তুলবে\r\n<li><li/>মাএ ৩০ দিনে ৮-১০কেজি ওজন কমাবে\r\n<li><li/>নতুন চর্বি গঠন দমন করবে\r\n<li><li/>রক্তের লিপিড কমাবে\r\n<li><li/>রক্ত সঞ্চালন উদ্দীপিত করবে\r\n<li><li/>সরাসরি উপাদানগুলির ব্যালেন্স পুষ্টি করবে\r\n<li><li/>পুরো শরীর এর চর্বি কমাবে।', NULL, '', '2304', 400, '', 'percent', '', '', 'In stock', 1, 'general', '2019-09-11 05:08:22', '2019-09-11 05:08:22', '', '', '', '0', '0', '0'),
(160, 'Endura Mass Waight Gainer', 'endura-mass-waight-gainer', 2390, 2000, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '  ', '<li>শরীরের ওজন বৃদ্ধি করতে ১০০% কার্যকরী।<li><li/>\r\nপ্রোটিনের অভাব দূর করে।<li><li/>\r\n\r\nব্যবহার বিধিঃ<li><li/>\r\nএকটি গ্লাস বা দুধ বা রস মধ্যে 10-30 গ্রাম (2-3 চা চামচ) Endura ভর যোগ করুন। ভালভাবে মেশান.<li><li/> এই পানীয়টি এক থেকে তিনবার পান করুন। দ্রুত ফল লাভের জন্য 2 টি কলা সহ পূর্ণ ক্রিম দুধের এক গ্লাসে এ 2-3 চা চামচ মেশান।<li><li/>', NULL, '', '2308', 40000, '', 'fixed', '', '', 'In stock', 1, 'general', '2019-09-06 04:41:21', '2019-09-06 04:41:21', '', '', '', '0', '0', '0'),
(161, 'মিমি হোয়াইট আহা সোপ এবং সিরাম', 'Mimi-white-AHA-Soap', 1300, 1100, 15, '2019-09-13 00:00:00', '2019-09-13 00:00:00', '    ', '<li><li/> হোয়াইট আহা সোপ এবং সিরাম অত্যন্ত পপুলার ও কার্যকারী পণ্য কোন প্রকার ক্ষতি ছাড়ায় আপনার ত্বক করবে মাত্র দিন দিনে ফর্সা ও উজ্জল, <li><li/>AHA হল Alpha Hydroxy Acids যেটি আপনার ত্বক ফর্সা সহ বয়সের ছেপের কাজ করে ত্বকে বিলিমিস দূর করে এবং ত্বক করে মসৃণ।<li><li/>\r\n\r\nকি কি কাজ করেঃ<li><li/>\r\n\r\n>স্থায়ী ভাবে ত্বক উজ্জল করে।<li><li/>\r\n>ত্বকে দাগ দূর করে।<li><li/>\r\n>ত্বক মসৃণ রাখে। <li><li/>\r\n>ঘাড়ের কালো দাগ দূর করে।<li><li/>\r\n>বগলের কালো দাগ দূর। <li><li/>\r\n>হাটুর কালো দাগ দূর করে।<li><li/>\r\n>কনুয়ের কালো দাগ দূর করে।<li><li/>\r\n>বয়সের ছাপের কাজ করে।<li><li/>\r\n\r\nব্যবহারঃ<li><li/>\r\nআপনার ত্বকে ভাল করে সাবান ব্যবহার করুন তারপর ২-৩ ফোটা সিরাম বা পরিমান মত সিরাম ব্যবহার করুন আর উপভোগ করুন নতুন উজ্জল ত্বক।<li><li/>', NULL, '', '2023', 500, '', 'percent', '', '', 'In stock', 1, 'general', '2019-09-13 05:47:00', '2019-09-13 05:47:00', '', '', '', '0', '0', '0'),
(162, 'BIOAQUA 24K Gold Face Whitening Essence Serum', 'bioaqua-24k-gold-face-whitening', 390, 200, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '   ', ' <li><li/>ত্বক অসমান এবং কুচকানো থাকলে তা সমান এবং মসৃণ করে<li><li/>\r\nএটি কোলাজেন এবং Jojoba Oil দিয়ে প্রস্তুত<li><li/> যা আপনার ত্বকের স্বাভাবিক উজ্জলতা ফিরিয়ে আনে<li><li/> এবং ২৪কে এ্যাক্টিভ গোল্ড দেয়, <li><li/>গোল্ডের মত গ্লো, যা আপনার ত্বককে করবে আরো সুন্দর এবং আকর্ষনীয় ।<li><li/>\r\nআপনার ত্বকের মরা বা ডেড সেল গুলিকে দূর করে আরো Younger লুক প্রদান করতে সহায়তা করবে<li><li/>', NULL, '', '2351', 5000, '', 'fixed', '', '', 'In stock', 1, 'home', '2019-09-06 06:04:36', '2019-09-06 06:04:36', '', '', '', '0', '0', '0'),
(163, 'Fade out Advanced whitening night cream', 'advanced-whitening-night-cream', 1190, 600, 10, '2019-09-11 00:00:00', '2019-09-26 00:00:00', '    ', '<li><li/>ত্বক ফর্সাকারী, অযাচিত দাগ দূরকারী নাইট ক্রিম ।<li><li/>\r\nসরাসরি UK থেকে আমাদানিকৃত<li><li/>\r\nFade out<li><li/>\r\nAdvanced whitening night cream<li><li/>\r\nNet : 75 ml<li><li/>\r\nImported from UK<li><li/>\r\nMade in Uk <li><li/>', NULL, '', '2101', 5000, '', 'fixed', '', '', 'In stock', 1, 'home', '2019-09-11 05:51:00', '2019-09-11 05:51:00', '', '', '', '0', '0', '0'),
(164, 'Deurspion met camera - Perel ', 'deurspion-met-camera-perel', 4500, 300, 20, '2019-09-11 00:00:00', '2019-09-11 00:00:00', '    ', '<li>Stores photo and video on a microSD card. (Not included)<li><li/>\r\nDiscrete camera<li><li/>\r\nEnergy-saving function<li><li/>\r\nMonitor dimensions: 135 x 75 x 17 mm<li><li/>\r\nDoor thickness: 35 - 105 mm<li><li/>\r\nCamera diameter: 30 mm<li><li/>\r\nBatteries: 3 x AA (not included)<li><li/>', NULL, '', '1433', 4999, '', 'percent', '', '', 'In stock', 1, 'home', '2019-09-11 05:08:01', '2019-09-11 05:08:01', '', '', '', '0', '0', '0'),
(165, 'বেবী ওয়াকার বেবী ওয়াকার বেবী ওয়াকারবেবী ওয়াকার বেবী ওয়াকার বেবী ওয়াকারবেবী ওয়াকার বেবী ওয়াকার বেবী ওয়াকারবেবী ওয়াকার বেবী ওয়াকার বেবী ওয়াকারবেবী ওয়াকার বেবী ওয়াকার বেবী ওয়াকারবেবী ওয়াকার বেবী ওয়াকার বেবী ওয়াকারবেবী ওয়াকার বেবী ওয়াকার বেবী ওয়াকারবেবী ওয়াকা', 'tt', 500, 300, 50, '2019-09-19 00:00:00', '2019-09-19 00:00:00', '        ', '<li>আপনার সোনামনিকে হাঁটা শেখানোর জন্য সহায়ক।<li><li/>\r\nধরে রাখার জন্য একটা শক্ত হ্তল রয়েছে ।\r\nম্যাটেরিয়াল: কটন।<li><li/>\r\nডায়মেনশন: ৬৬ x ৩১ সেমি।<li><li/>\r\n৬ থেকে ১৪ মাসের বাচ্চাদের ক্ষেত্রে প্রযোজ্য।<li><li/>', NULL, '', '1491', 0, '', 'percent', '', '', 'In stock', 1, 'home', '2019-09-19 11:16:44', '2019-09-19 11:16:44', '', '', '', '10', '0', '0'),
(166, 'Stick hand blander', 'stick-hand-blander', 1650, 1200, 15, '2019-09-14 00:00:00', '2019-09-14 00:00:00', '   ', '<li>হাই পারফর্মেন্স   <li><li/>\r\nপাওয়ারফুল মোটর<li><li/>\r\nস্মুদি, স্যুপ, বেবি ফুড ইত্যাদি তৈরির জন্য আদর্শ<li><li/>\r\nলার্জ ব্লেন্ডিং হেড<li><li/>', NULL, '', '1495', 5000, '', 'percent', '', '', 'In stock', 1, 'general', '2019-09-14 10:42:05', '2019-09-14 10:42:05', '', '', '', '0', '0', '0'),
(167, 'Wardrobe Storage Organizer for Clothes', 'wardrobe-storage-organizer-for-clothes', 2500, 1500, 2000, '2019-09-20 00:00:00', '2019-09-20 00:00:00', '      ', '<li>বাইরের কাভারটা কাপরের ও বডি মেটাল এর<li><li/>\r\nএটা খুলে বক্স বা ব্যাগে করে যে যে কোনো জায়গায় নিয়ে যেতে পারবেন খুব সহজেই<li><li/>\r\nপ্রতি তাকে 8 কেজি করে রাখাতে পারবেন<li><li/>\r\n৫০-৬০ কেজি ওজন দিতে পারবেন <li><li/>সম্পূর্ণ আলমিরাতে ও ১০-১৫ টি শার্ট জুলাতে পারবেন<li><li/>', NULL, '', '1582', 1000, '', 'percent', '', '', 'In stock', 1, 'home', '2019-09-20 12:02:21', '2019-09-20 12:02:21', '', '', '', '20', '0', '0'),
(168, 'Globe Drink Dispenser', 'globe-drink-dispenser', 1450, 700, 15, '2019-09-13 00:00:00', '2019-09-13 00:00:00', '        ', '<li>A novelty globe shaped yet completely functional drinks dispenser<li><li/>\r\n\r\nCan be used as a whisky decanter, beverage or water dispenser<li><li/>\r\n\r\nComes with pull tap to control the quantity of liquid dispensed<li><li/>', NULL, '', '1500', 4994, '', 'percent', '', '', 'In stock', 1, 'hotsell', '2019-09-13 05:48:18', '2019-09-13 05:48:18', '', '', '', '0', '0', '0'),
(169, 'new wath collection new wath collection new wath collection  new wath collection ', 'new-wath-collection-new-wath-collection-new-wath-collection--new-wath-collection-', 547, 356, 50, '2019-09-18 00:00:00', '2019-09-18 00:00:00', '     ', 'web', NULL, '', '5368', 0, '38,39,40', 'percent', 'Black,Red,Blue', '', 'Out of stock', 1, 'general', '2019-09-18 02:40:26', '2019-09-18 02:40:26', '', '', '', '9', '0', '0'),
(171, 'latest watch collection', 'latest-watch-collection', 36, 25, 15, '2019-09-17 00:00:00', '2019-09-17 00:00:00', '    ', '', NULL, '', '7975', 0, '', 'percent', '', '', 'In stock', 1, 'home', '2019-09-17 12:50:14', '2019-09-17 12:50:14', '', '', '', '42', '0', '0'),
(172, 'new wath collection', 'new-wath-collectiones', 500, 555, 50, '2019-09-17 00:00:00', '2019-09-17 00:00:00', '    ', '', NULL, '', '3522', 0, '', '', '', '', 'In stock', 1, 'home', '2019-09-17 02:17:30', '2019-09-17 02:17:30', '', '', '', '10', '0', '0'),
(174, 'demo isolution product', 'demo-isolution-product', 400, 0, 500, '2019-09-17 00:00:00', '2019-09-17 00:00:00', ' ', '', NULL, '', '1556', 222, '', 'percent', 'Black', '', 'In stock', 1, 'home', '2019-09-17 05:42:37', '2019-09-17 05:42:37', '', '', '', '125', '1000', '20000'),
(175, 'demo isolution product', 'demo-isolution-productes', 500, 0, 400, '2019-09-20 00:00:00', '2019-09-20 00:00:00', '   ', '', NULL, '', '9145', 50, '', 'percent', '', '', 'In stock', 1, 'general', '2019-09-20 06:47:05', '2019-09-20 06:47:05', '', '', '', '20', '', ''),
(176, 'demo isolution product', 'demo-isolution-productes', 500, 0, 100, '2019-09-19 00:00:00', '2019-09-19 00:00:00', ' ', '', NULL, '', '4962', 0, '40,45', 'percent', 'White', '', 'In stock', 1, 'general', '2019-09-19 03:44:48', '2019-09-19 03:44:48', '', '', '', '500', '', ''),
(177, 'new wath collectioniii', 'new-wath-collectioniii', 500, 0, 250, '2019-09-19 00:00:00', '2019-09-24 00:00:00', ' ', '', NULL, '', '1857', 0, NULL, 'percent', '', '', 'In stock', 1, 'hotsell', '2019-09-19 03:47:14', '2019-09-19 03:47:14', '', '', '', '200', '', ''),
(178, 'product price', 'product-price', 500, 0, 250, '2019-09-19 00:00:00', '2019-09-19 00:00:00', ' ', '', NULL, '', '1311', 0, NULL, 'percent', '', '', 'In stock', 1, 'hotsell', '2019-09-19 03:50:48', '2019-09-19 03:50:48', '', '', '', '200', '', ''),
(179, 'ddddd', 'ddddd', 500, 0, 250, '2019-09-20 00:00:00', '2019-09-20 00:00:00', '  ', '', NULL, '', '9964', 0, NULL, 'percent', '', '', 'In stock', 1, 'hotsell', '2019-09-20 06:44:04', '2019-09-20 06:44:04', '', '', '', '50', '', ''),
(180, 'new product', 'new-product', 1000, 0, 500, '2019-09-21 00:00:00', '2019-09-21 00:00:00', '    ', '', NULL, '', '4139', 0, '39,40,45', 'percent', 'Red,Blue,White', '', 'In stock', 1, 'hotsell', '2019-09-21 11:17:52', '2019-09-21 11:17:52', '', '', '', '50', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `productmeta`
--

CREATE TABLE `productmeta` (
  `meta_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `productmeta`
--

INSERT INTO `productmeta` (`meta_id`, `product_id`, `meta_key`, `meta_value`) VALUES
(29, 20, 'featured_image', '57'),
(30, 20, 'gallery_image', '58,59'),
(31, 21, 'featured_image', '60'),
(32, 21, 'gallery_image', '60'),
(33, 22, 'featured_image', '61'),
(34, 23, 'featured_image', '62'),
(35, 23, 'gallery_image', '63,64,65'),
(36, 24, 'featured_image', '66'),
(37, 24, 'gallery_image', '67'),
(38, 25, 'featured_image', '68'),
(39, 25, 'gallery_image', '69,70'),
(40, 26, 'featured_image', '71'),
(41, 26, 'gallery_image', '72'),
(42, 27, 'featured_image', '73'),
(43, 28, 'featured_image', '74'),
(44, 29, 'featured_image', '75'),
(45, 30, 'featured_image', '76'),
(46, 30, 'gallery_image', '77,78,79'),
(47, 31, 'featured_image', '80'),
(48, 31, 'gallery_image', '81,82'),
(49, 32, 'featured_image', '83'),
(50, 32, 'gallery_image', '84,85'),
(51, 33, 'featured_image', '86'),
(52, 33, 'gallery_image', '87'),
(53, 34, 'featured_image', '88'),
(54, 34, 'gallery_image', '89,90,91'),
(55, 35, 'featured_image', '92'),
(56, 35, 'gallery_image', '93,94'),
(57, 36, 'featured_image', '95'),
(58, 36, 'gallery_image', '96,97,98'),
(59, 37, 'featured_image', '99'),
(60, 37, 'gallery_image', '100,101,102'),
(61, 38, 'featured_image', '103'),
(62, 38, 'gallery_image', '104,105'),
(63, 39, 'featured_image', '106'),
(64, 39, 'gallery_image', '107'),
(65, 40, 'featured_image', '108'),
(66, 41, 'featured_image', '109'),
(67, 41, 'gallery_image', '110'),
(68, 42, 'featured_image', '111'),
(69, 42, 'gallery_image', '112,113'),
(70, 43, 'featured_image', '114'),
(71, 43, 'gallery_image', '115'),
(72, 44, 'featured_image', '116'),
(73, 44, 'gallery_image', '117'),
(74, 45, 'featured_image', '118'),
(75, 45, 'gallery_image', '119'),
(76, 46, 'featured_image', '120'),
(77, 46, 'gallery_image', '121'),
(78, 47, 'featured_image', '122'),
(79, 47, 'gallery_image', '123'),
(80, 48, 'featured_image', '124'),
(81, 48, 'gallery_image', '125'),
(82, 49, 'featured_image', '126'),
(83, 50, 'featured_image', '127'),
(84, 50, 'gallery_image', '128,129,130'),
(85, 51, 'featured_image', '131'),
(86, 51, 'gallery_image', '132,133'),
(87, 52, 'featured_image', '134'),
(88, 52, 'gallery_image', '135,136'),
(89, 53, 'featured_image', '137'),
(90, 54, 'featured_image', '138'),
(91, 54, 'gallery_image', '139'),
(92, 55, 'featured_image', '140'),
(93, 55, 'gallery_image', '141,142'),
(94, 56, 'featured_image', '143'),
(95, 56, 'gallery_image', '144'),
(96, 57, 'featured_image', '145'),
(97, 57, 'gallery_image', '146'),
(98, 58, 'featured_image', '147'),
(99, 58, 'gallery_image', '148,149,150'),
(100, 59, 'featured_image', '151'),
(101, 59, 'gallery_image', '152'),
(102, 60, 'featured_image', '153'),
(103, 60, 'gallery_image', '154,155'),
(104, 61, 'featured_image', '156'),
(105, 62, 'featured_image', '157'),
(106, 62, 'gallery_image', '158,159'),
(107, 63, 'featured_image', '160'),
(108, 63, 'gallery_image', '161,162'),
(109, 64, 'featured_image', '163'),
(110, 64, 'gallery_image', '164'),
(111, 65, 'featured_image', '165'),
(112, 65, 'gallery_image', '166,167'),
(113, 66, 'featured_image', '168'),
(114, 66, 'gallery_image', '169'),
(115, 67, 'featured_image', '170'),
(116, 67, 'gallery_image', '171,172,173'),
(117, 68, 'featured_image', '174'),
(118, 68, 'gallery_image', '175'),
(119, 69, 'featured_image', '176'),
(120, 69, 'gallery_image', '177,178,179'),
(121, 70, 'featured_image', '180'),
(122, 70, 'gallery_image', '181'),
(123, 71, 'featured_image', '182'),
(124, 71, 'gallery_image', '183,184'),
(125, 72, 'featured_image', '185'),
(126, 72, 'gallery_image', '186,187'),
(127, 73, 'featured_image', '188'),
(128, 73, 'gallery_image', '189'),
(129, 74, 'featured_image', '190'),
(130, 75, 'featured_image', '191'),
(131, 75, 'gallery_image', '192,193'),
(132, 76, 'featured_image', '194'),
(133, 76, 'gallery_image', '195,196,197'),
(134, 77, 'featured_image', '198'),
(135, 77, 'gallery_image', '199'),
(136, 78, 'featured_image', '200'),
(137, 78, 'gallery_image', '201,202,203'),
(138, 79, 'featured_image', '204'),
(139, 79, 'gallery_image', '205,206,207'),
(140, 80, 'featured_image', '208'),
(141, 81, 'featured_image', '209'),
(142, 81, 'gallery_image', '210,211'),
(143, 82, 'featured_image', '212'),
(144, 82, 'gallery_image', '213,214'),
(145, 83, 'featured_image', '215'),
(146, 83, 'gallery_image', '216'),
(147, 84, 'featured_image', '217'),
(148, 84, 'gallery_image', '218,219,220'),
(149, 85, 'featured_image', '221'),
(150, 85, 'gallery_image', '222'),
(151, 86, 'featured_image', '223'),
(152, 86, 'gallery_image', '224'),
(153, 87, 'featured_image', '225'),
(154, 87, 'gallery_image', '226,227'),
(155, 88, 'featured_image', '229'),
(156, 88, 'gallery_image', '230,231,232'),
(157, 89, 'featured_image', '233'),
(158, 89, 'gallery_image', '234'),
(159, 90, 'featured_image', '235'),
(160, 90, 'gallery_image', '236,237,238'),
(161, 91, 'featured_image', '239'),
(162, 91, 'gallery_image', '240,241'),
(163, 92, 'featured_image', '242'),
(164, 92, 'gallery_image', '243'),
(165, 93, 'featured_image', '244'),
(166, 93, 'gallery_image', '245,246'),
(167, 94, 'featured_image', '247'),
(168, 94, 'gallery_image', '248,249,250'),
(169, 95, 'featured_image', '251'),
(170, 95, 'gallery_image', '252,253,254'),
(171, 96, 'featured_image', '255'),
(172, 97, 'featured_image', '256'),
(173, 98, 'featured_image', '257'),
(174, 98, 'gallery_image', '258'),
(175, 99, 'featured_image', '259'),
(176, 99, 'gallery_image', '260,261'),
(177, 100, 'featured_image', '262'),
(178, 100, 'gallery_image', '263,264,265'),
(179, 101, 'featured_image', '266'),
(180, 101, 'gallery_image', '267,268,269'),
(181, 102, 'featured_image', '270'),
(182, 102, 'gallery_image', '271,272'),
(183, 103, 'featured_image', '273'),
(184, 103, 'gallery_image', '274,275'),
(185, 104, 'featured_image', '276'),
(186, 104, 'gallery_image', '277'),
(187, 105, 'featured_image', '278'),
(188, 106, 'featured_image', '279'),
(189, 107, 'featured_image', '280'),
(190, 108, 'featured_image', '281'),
(191, 108, 'gallery_image', '282,283'),
(192, 109, 'featured_image', '284'),
(193, 110, 'featured_image', '285'),
(194, 110, 'gallery_image', '286'),
(195, 111, 'featured_image', '287'),
(196, 111, 'gallery_image', '288'),
(197, 112, 'featured_image', '289'),
(198, 113, 'featured_image', '290'),
(199, 114, 'featured_image', '291'),
(200, 115, 'featured_image', '292'),
(201, 116, 'featured_image', '293'),
(202, 117, 'featured_image', '294'),
(203, 118, 'featured_image', '295'),
(204, 119, 'featured_image', '296'),
(205, 120, 'featured_image', '297'),
(206, 120, 'gallery_image', '298'),
(207, 121, 'featured_image', '299'),
(208, 121, 'gallery_image', '300,301,302'),
(209, 122, 'featured_image', '303'),
(210, 122, 'gallery_image', '304'),
(211, 123, 'featured_image', '305'),
(212, 123, 'gallery_image', '306'),
(213, 124, 'featured_image', '307'),
(214, 125, 'featured_image', '308'),
(215, 125, 'gallery_image', '309,310'),
(216, 126, 'featured_image', '311'),
(217, 126, 'gallery_image', '312'),
(218, 127, 'featured_image', '313'),
(219, 127, 'gallery_image', '314'),
(220, 128, 'featured_image', '315'),
(221, 129, 'featured_image', '316'),
(222, 129, 'gallery_image', '317,318,319'),
(223, 130, 'featured_image', '320'),
(224, 130, 'gallery_image', '321'),
(225, 131, 'featured_image', '322'),
(226, 132, 'featured_image', '323'),
(227, 133, 'featured_image', '324'),
(228, 134, 'featured_image', '325'),
(229, 134, 'gallery_image', '326,327'),
(230, 135, 'featured_image', '328'),
(231, 136, 'featured_image', '329'),
(232, 136, 'gallery_image', '330'),
(233, 137, 'featured_image', '331'),
(234, 138, 'featured_image', '332'),
(235, 139, 'featured_image', '333'),
(236, 139, 'gallery_image', '334'),
(237, 140, 'featured_image', '335'),
(238, 140, 'gallery_image', '336'),
(239, 141, 'featured_image', '337'),
(240, 141, 'gallery_image', '338,339'),
(241, 142, 'featured_image', '340'),
(242, 143, 'featured_image', '341'),
(243, 143, 'gallery_image', '342'),
(244, 144, 'featured_image', '343'),
(245, 145, 'featured_image', '344'),
(246, 145, 'gallery_image', '345,346,347'),
(247, 146, 'featured_image', '348'),
(248, 146, 'gallery_image', '349'),
(249, 147, 'featured_image', '350'),
(250, 147, 'gallery_image', '351'),
(251, 148, 'featured_image', '352'),
(252, 148, 'gallery_image', '353,354'),
(253, 149, 'featured_image', '355'),
(254, 149, 'gallery_image', '356,357'),
(255, 150, 'featured_image', '358'),
(256, 151, 'featured_image', '359'),
(257, 151, 'gallery_image', '360,361'),
(258, 152, 'featured_image', '362'),
(259, 153, 'featured_image', '363'),
(260, 153, 'gallery_image', '364'),
(261, 154, 'featured_image', '365'),
(262, 154, 'gallery_image', '366'),
(263, 155, 'featured_image', '367'),
(264, 155, 'gallery_image', '368'),
(265, 156, 'featured_image', '369'),
(266, 156, 'gallery_image', '370'),
(267, 157, 'featured_image', '371'),
(268, 157, 'gallery_image', '372,373'),
(269, 158, 'featured_image', '374'),
(270, 159, 'featured_image', '375'),
(271, 160, 'featured_image', '376'),
(272, 161, 'featured_image', '377'),
(273, 161, 'gallery_image', '378,379'),
(274, 162, 'featured_image', '380'),
(275, 163, 'featured_image', '381'),
(276, 163, 'gallery_image', '382'),
(277, 164, 'featured_image', '383'),
(278, 164, 'gallery_image', '384'),
(279, 165, 'featured_image', '386'),
(280, 166, 'featured_image', '387'),
(281, 167, 'featured_image', '388'),
(282, 167, 'gallery_image', '389'),
(283, 168, 'featured_image', '390'),
(284, 168, 'gallery_image', '391,392'),
(285, 169, 'featured_image', '395'),
(286, 170, 'featured_image', '396'),
(287, 171, 'featured_image', '397'),
(288, 172, 'featured_image', '398'),
(289, 173, 'featured_image', '399'),
(290, 172, 'gallery_image', '409'),
(291, 174, 'featured_image', '410'),
(292, 175, 'featured_image', '411'),
(293, 176, 'featured_image', '412'),
(294, 177, 'featured_image', '413'),
(295, 178, 'featured_image', '414'),
(296, 179, 'featured_image', '415'),
(297, 180, 'featured_image', '416');

-- --------------------------------------------------------

--
-- Table structure for table `product_color`
--

CREATE TABLE `product_color` (
  `product_color_id` int(11) NOT NULL,
  `product_color_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_color`
--

INSERT INTO `product_color` (`product_color_id`, `product_color_name`) VALUES
(1, 'Black'),
(2, 'Red'),
(3, 'Blue'),
(4, 'White');

-- --------------------------------------------------------

--
-- Table structure for table `product_hit_count`
--

CREATE TABLE `product_hit_count` (
  `id` int(10) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `unique_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_hit_count`
--

INSERT INTO `product_hit_count` (`id`, `user_id`, `unique_number`) VALUES
(1, 'URC1155', '315860'),
(2, 'URC1155', '129755');

-- --------------------------------------------------------

--
-- Table structure for table `product_link`
--

CREATE TABLE `product_link` (
  `id` int(10) NOT NULL,
  `link_name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_link`
--

INSERT INTO `product_link` (`id`, `link_name`) VALUES
(1, 'http://localhost/ekusheshop/product/product-price'),
(2, 'http://localhost/ekusheshop/product/v8mobil-watch');

-- --------------------------------------------------------

--
-- Table structure for table `product_link_info`
--

CREATE TABLE `product_link_info` (
  `id` int(10) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `product_id` varchar(10) NOT NULL,
  `product_link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_link_info`
--

INSERT INTO `product_link_info` (`id`, `user_id`, `product_id`, `product_link`) VALUES
(1, 'URC1155', '1', 'http://localhost/ekusheshop/home/affiliate_check_controller//t8-gsm-smart-watch-phone/URC1155'),
(2, 'URC1155', '1', 'http://localhost/ekusheshop/home/affiliate_check_controller//product/t8-gsm-smart-watch-phone/URC1155'),
(3, 'URC1155', '1', 'http://localhost/ekusheshop/home/affiliate_check_controller/product/t8-gsm-smart-watch-phone/URC1155');

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

CREATE TABLE `product_size` (
  `product_size_id` int(25) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_size`
--

INSERT INTO `product_size` (`product_size_id`, `name`) VALUES
(1, '38'),
(2, '39'),
(3, '40'),
(4, '45');

-- --------------------------------------------------------

--
-- Table structure for table `product_specification`
--

CREATE TABLE `product_specification` (
  `specification_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT 0,
  `key` varchar(556) DEFAULT NULL,
  `value` varchar(556) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_specification`
--

INSERT INTO `product_specification` (`specification_id`, `product_id`, `key`, `value`) VALUES
(16057, 161, '', ''),
(16058, 161, '', ''),
(16059, 161, '', ''),
(16066, 168, 'Name', 'watch'),
(16079, 158, '', ''),
(16080, 166, '', ''),
(16081, 157, '', ''),
(16082, 170, 'Name', 'water'),
(16083, 170, 'weight', '3654'),
(16084, 170, 'keword', '456'),
(16088, 173, '', ''),
(16092, 171, '', ''),
(16093, 172, '', ''),
(16098, 156, '', ''),
(16100, 174, '', ''),
(16102, 169, 'Name', 'watch'),
(16103, 169, 'price', '30'),
(16105, 165, '', ''),
(16107, 176, '', ''),
(16108, 177, '', ''),
(16109, 178, '', ''),
(16113, 167, '', ''),
(16115, 179, '', ''),
(16116, 175, '', ''),
(16117, 180, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `rating` varchar(5) DEFAULT '1',
  `review_active` int(11) NOT NULL DEFAULT 0,
  `created_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `product_id`, `name`, `email`, `comment`, `rating`, `review_active`, `created_time`) VALUES
(1, 84, 'sujon', 'suzonice15@gmail.com', 'good', '5', 0, NULL),
(2, 84, 'mitul', 'fjjfjf@fmao.com', 'ok		', '3', 1, '2019-09-20 05:40:29'),
(3, 169, 'suzon', 'suzonice15@gmail.com', 'ttt', '5', 1, '2019-09-19 14:14:06'),
(4, 169, 'suzon', 'suzonice15@gmail.com', 'hh				', '5', 1, '2019-09-20 05:40:22'),
(5, 169, 'suzon', 'suzonice15@gmail.com', 'ok', '3', 1, '2019-09-19 14:17:05'),
(8, 180, 'sumon', 'suzonice15@gmail.com', 'ddd', '5', 0, '2019-09-20 09:42:36'),
(9, 167, 'mitul', 'suzonice1@gmal.com', 'hhh', '5', 0, '2019-09-20 16:28:07'),
(10, 169, 'raihan', 'mitul@gmail.com', 'ddd', '5', 0, '2019-09-20 16:30:26'),
(11, 169, 'abu', 'abu@gmail.com', 'ok\n', '5', 1, '2019-09-20 16:34:44');

-- --------------------------------------------------------

--
-- Table structure for table `stock_product`
--

CREATE TABLE `stock_product` (
  `stock_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `stock_status` varchar(55) NOT NULL,
  `stock_qty` varchar(11) NOT NULL,
  `created_time` datetime NOT NULL,
  `modified_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `term_relation`
--

CREATE TABLE `term_relation` (
  `product_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `term_relation`
--

INSERT INTO `term_relation` (`product_id`, `term_id`) VALUES
(20, 86),
(21, 58),
(22, 81),
(23, 81),
(24, 81),
(25, 58),
(26, 58),
(27, 58),
(28, 58),
(29, 81),
(30, 58),
(31, 81),
(32, 58),
(33, 58),
(34, 86),
(35, 81),
(36, 59),
(37, 81),
(38, 86),
(39, 81),
(40, 81),
(41, 85),
(42, 81),
(43, 58),
(44, 58),
(45, 58),
(46, 81),
(47, 83),
(48, 81),
(49, 58),
(50, 81),
(51, 58),
(52, 81),
(53, 81),
(54, 81),
(55, 81),
(56, 59),
(56, 81),
(57, 81),
(58, 58),
(58, 81),
(59, 58),
(60, 81),
(61, 81),
(62, 59),
(62, 82),
(62, 83),
(63, 81),
(64, 58),
(64, 80),
(65, 81),
(66, 82),
(66, 83),
(66, 85),
(67, 81),
(68, 81),
(69, 58),
(69, 81),
(70, 81),
(71, 81),
(72, 81),
(73, 81),
(74, 58),
(74, 59),
(75, 59),
(76, 58),
(76, 59),
(77, 58),
(78, 58),
(79, 81),
(80, 59),
(81, 81),
(82, 82),
(82, 83),
(83, 81),
(84, 86),
(85, 58),
(86, 81),
(87, 80),
(88, 81),
(89, 81),
(90, 81),
(91, 86),
(92, 86),
(93, 58),
(94, 86),
(95, 82),
(95, 83),
(96, 83),
(97, 58),
(98, 59),
(98, 82),
(99, 58),
(99, 81),
(100, 58),
(100, 59),
(101, 59),
(102, 58),
(102, 59),
(103, 81),
(104, 58),
(105, 58),
(106, 59),
(106, 82),
(107, 58),
(107, 81),
(108, 58),
(109, 82),
(109, 83),
(110, 59),
(110, 83),
(111, 83),
(111, 85),
(112, 83),
(112, 85),
(113, 82),
(113, 83),
(113, 85),
(114, 83),
(114, 85),
(115, 58),
(116, 58),
(117, 86),
(118, 59),
(119, 81),
(120, 59),
(121, 85),
(122, 85),
(123, 81),
(124, 59),
(125, 59),
(125, 82),
(125, 83),
(126, 58),
(127, 83),
(127, 85),
(128, 81),
(128, 86),
(129, 81),
(130, 86),
(131, 85),
(132, 85),
(133, 82),
(134, 58),
(134, 81),
(135, 59),
(136, 58),
(136, 81),
(137, 82),
(137, 83),
(137, 85),
(138, 85),
(139, 58),
(139, 83),
(139, 85),
(140, 58),
(141, 81),
(142, 85),
(143, 58),
(144, 86),
(145, 58),
(145, 81),
(146, 82),
(146, 83),
(146, 85),
(147, 58),
(148, 58),
(149, 82),
(149, 83),
(149, 85),
(150, 85),
(151, 83),
(151, 85),
(152, 85),
(153, 85),
(154, 85),
(155, 85),
(156, 58),
(156, 86),
(157, 85),
(158, 85),
(159, 85),
(160, 85),
(161, 82),
(161, 83),
(161, 85),
(162, 85),
(163, 85),
(164, 81),
(165, 80),
(165, 86),
(166, 58),
(167, 58),
(167, 86),
(168, 58),
(169, 88),
(170, 86),
(171, 86),
(172, 86),
(173, 88),
(174, 86),
(175, 56),
(176, 81),
(177, 86),
(178, 86),
(179, 56),
(179, 86),
(180, 56),
(180, 86);

-- --------------------------------------------------------

--
-- Table structure for table `usermeta`
--

CREATE TABLE `usermeta` (
  `user_meta_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `meta_key` varchar(255) NOT NULL,
  `meta_value` longtext CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `user_phone` varchar(55) CHARACTER SET utf8 DEFAULT NULL,
  `user_email` varchar(155) CHARACTER SET utf8 DEFAULT NULL,
  `user_pass` varchar(64) NOT NULL,
  `user_type` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `user_status` varchar(9) CHARACTER SET utf8 DEFAULT NULL,
  `registered_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  `user_picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_phone`, `user_email`, `user_pass`, `user_type`, `user_status`, `registered_date`, `updated_date`, `user_picture`) VALUES
(1, 'sujon', '010738305670', 'suzonice15@gmail.com', '689a9d9ce03c2058942bc449bc364871', 'super-admin', 'active', '2019-09-11 00:00:00', '0000-00-00 00:00:00', 'uploads/user/07-09-2019-26167021_389042014841435_3182062281064845159_n.jpg'),
(2, 'isolutions', '0173830567', 'admin@isolutionsbd.com', '7ece99e593ff5dd200e2b9233d9ba654', 'super-admin', 'active', '2019-09-12 00:00:00', '0000-00-00 00:00:00', 'uploads/user/05-09-2019-final card.ai.png'),
(3, 'dd', 'dd', 'demo.admifn@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'office-staff', 'active', '2019-09-17 00:00:00', '0000-00-00 00:00:00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adds`
--
ALTER TABLE `adds`
  ADD PRIMARY KEY (`adds_id`);

--
-- Indexes for table `affiliate_information`
--
ALTER TABLE `affiliate_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `courier`
--
ALTER TABLE `courier`
  ADD PRIMARY KEY (`courier_id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`expense_id`);

--
-- Indexes for table `expense_category`
--
ALTER TABLE `expense_category`
  ADD PRIMARY KEY (`expense_cat_id`);

--
-- Indexes for table `hitcounter`
--
ALTER TABLE `hitcounter`
  ADD PRIMARY KEY (`hitcounter_id`);

--
-- Indexes for table `homeslider`
--
ALTER TABLE `homeslider`
  ADD PRIMARY KEY (`homeslider_id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`inquiry_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`media_id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`newsletter_id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`option_id`);

--
-- Indexes for table `order_data`
--
ALTER TABLE `order_data`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `productmeta`
--
ALTER TABLE `productmeta`
  ADD PRIMARY KEY (`meta_id`);

--
-- Indexes for table `product_color`
--
ALTER TABLE `product_color`
  ADD PRIMARY KEY (`product_color_id`);

--
-- Indexes for table `product_hit_count`
--
ALTER TABLE `product_hit_count`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_link`
--
ALTER TABLE `product_link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_link_info`
--
ALTER TABLE `product_link_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`product_size_id`),
  ADD KEY `product_size_id` (`product_size_id`);

--
-- Indexes for table `product_specification`
--
ALTER TABLE `product_specification`
  ADD PRIMARY KEY (`specification_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `stock_product`
--
ALTER TABLE `stock_product`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `term_relation`
--
ALTER TABLE `term_relation`
  ADD PRIMARY KEY (`product_id`,`term_id`),
  ADD KEY `term_taxonomy_id` (`term_id`);

--
-- Indexes for table `usermeta`
--
ALTER TABLE `usermeta`
  ADD PRIMARY KEY (`user_meta_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adds`
--
ALTER TABLE `adds`
  MODIFY `adds_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `affiliate_information`
--
ALTER TABLE `affiliate_information`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `courier`
--
ALTER TABLE `courier`
  MODIFY `courier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `expense_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expense_category`
--
ALTER TABLE `expense_category`
  MODIFY `expense_cat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hitcounter`
--
ALTER TABLE `hitcounter`
  MODIFY `hitcounter_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homeslider`
--
ALTER TABLE `homeslider`
  MODIFY `homeslider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `inquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=417;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `newsletter_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `option_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `order_data`
--
ALTER TABLE `order_data`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `productmeta`
--
ALTER TABLE `productmeta`
  MODIFY `meta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=298;

--
-- AUTO_INCREMENT for table `product_color`
--
ALTER TABLE `product_color`
  MODIFY `product_color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_hit_count`
--
ALTER TABLE `product_hit_count`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_link`
--
ALTER TABLE `product_link`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_link_info`
--
ALTER TABLE `product_link_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_size`
--
ALTER TABLE `product_size`
  MODIFY `product_size_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_specification`
--
ALTER TABLE `product_specification`
  MODIFY `specification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16118;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `stock_product`
--
ALTER TABLE `stock_product`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usermeta`
--
ALTER TABLE `usermeta`
  MODIFY `user_meta_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
