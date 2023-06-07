-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 07, 2023 at 08:10 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bvdienmay_bvdienmay`
--

-- --------------------------------------------------------

--
-- Table structure for table `advises`
--

CREATE TABLE `advises` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advises`
--

INSERT INTO `advises` (`id`, `name`, `phone`, `email`, `service`, `content`, `created_at`, `updated_at`) VALUES
(14, 'Nguyen Quang Hai', '0359808267', 'admin@admin.com', 'Liên hệ', 'a', '2023-06-05 20:28:54', '2023-06-05 20:28:54'),
(15, 'Nguyễn Anh Tú', '0984365746', 'content@gmail.com', 'Vệ sinh máy lạnh treo tường', 'liên hệ giúp tôi', '2023-06-05 20:49:40', '2023-06-05 20:49:40'),
(16, 'Nguyễn Thị Quỳnh', '09383829', 'quynh@gmail.com', 'Vệ sinh máy lạnh âm trần', 'Tư vấn giúp tôi', '2023-06-05 20:57:28', '2023-06-05 20:57:28'),
(18, 'Nguyen Quang Hai', '0359808267', 'admin@admin.com', 'Vệ sinh máy lạnh treo tường', 'a', '2023-06-06 17:50:25', '2023-06-06 17:50:25');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `multiImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `image`, `status`, `type`, `created_at`, `updated_at`, `multiImage`) VALUES
(1, 'Banner', 'banners\\June2023\\KUE0gNfuxcEknhkh9RYt.jpg', 'ACTIVE', 'home_banner', '2023-06-02 00:33:00', '2023-06-04 18:06:38', '[]'),
(2, 'Banner Middle', NULL, 'ACTIVE', 'middle_home', '2023-06-04 17:59:50', '2023-06-04 17:59:50', '[\"banners/am-thanh-1-2048x915.jpg\",\"banners/am-thanh-2-2048x915.jpg\"]');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `hour` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `services` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtotal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `phone`, `address1`, `address2`, `date`, `hour`, `services`, `subtotal`, `created_at`, `updated_at`, `content`, `status`) VALUES
(49, 'Nguyễn quang hải', '0350808267', 'Tỉnh Bắc Giang | Huyện Lạng Giang | Xã Mỹ Hà', 'thôn Nhuần', '2023-06-08 00:00:00', 'Trước 12h', 'Vệ sinh máy lạnh treo tường,', '400,000', '2023-06-05 20:45:00', '2023-06-05 20:47:16', 'đến sửa giúp tôi', 'da-sua'),
(50, 'Nguyễn Thị Hoa', '0983565', 'Tỉnh Thái Nguyên | Huyện Phú Bình | Xã Kha Sơn', 'gần cầu Mây', '2023-06-08 00:00:00', 'Trước 12h', 'Vệ sinh máy lạnh treo tường,  Bảo dưỡng máy lọc nước,', '735,000', '2023-06-05 20:48:00', '2023-06-05 20:50:20', 'allo', 'dang-hen'),
(51, 'Nguyễn Văn Thành', '09774355', 'Tỉnh Phú Thọ | Huyện Thanh Thuỷ | Xã Hoàng Xá', 'xóm đụn', '2023-06-08 00:00:00', 'Trước 12h', 'Vệ sinh máy lạnh âm trần,', '135,000', '2023-06-05 20:52:50', '2023-06-05 20:52:50', 'Sửa máy lạnh', 'dang-hen'),
(52, 'Nguyễn Thị Quỳnh', '092838393', 'Tỉnh Lạng Sơn | Huyện Bình Gia | Xã Hồng Phong', 'Gần đường quốc lộ 15', '2023-06-16 00:00:00', 'Trước 15h', 'Bảo dưỡng máy lọc nước,', '535,000', '2023-06-05 20:56:28', '2023-06-05 20:56:28', 'Liên hệ trước ngày 15', 'dang-hen'),
(53, 'Nguyen Quang hai', '0359808267', 'Tỉnh Thái Nguyên , Huyện Đại Từ , Xã Tân Linh', 'dg', '2023-06-08 00:00:00', 'Trước 12h', 'Vệ sinh máy lạnh âm trần,', '135,000', '2023-06-06 06:04:35', '2023-06-06 06:04:35', 'hello', 'dang-hen'),
(54, 'Nguyễn Văn Thành', '092735256', 'Tỉnh Phú Thọ , Huyện Thanh Sơn , Xã Yên Lãng', 'xóm Ngoài', '2023-06-09 00:00:00', 'Trước 12h', 'Vệ sinh máy lạnh treo tường,', '200,000', '2023-06-06 18:09:29', '2023-06-06 18:09:29', 'Sửa điều hòa', 'dang-hen');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Tin tức', 'tin-tuc', '2023-06-01 19:44:55', '2023-06-04 18:11:18'),
(2, NULL, 1, 'Category 2', 'category-2', '2023-06-01 19:44:55', '2023-06-01 19:44:55');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(25, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 4),
(26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, NULL, 6),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, '{}', 2),
(31, 5, 'category_id', 'text', 'Category', 0, 0, 1, 1, 1, 0, '{}', 3),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 0, 0, 1, 1, 1, 1, '{}', 5),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, '{}', 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"width\":\"310\",\"height\":\"206\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 0, 0, 1, 1, 1, 1, '{}', 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 0, 0, 1, 1, 1, 1, '{}', 10),
(39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, '{}', 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, '{}', 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, '{}', 2),
(46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 3),
(47, 6, 'excerpt', 'text_area', 'Excerpt', 0, 0, 1, 1, 1, 1, '{}', 4),
(48, 6, 'body', 'rich_text_box', 'Body', 0, 0, 1, 1, 1, 1, '{}', 5),
(49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(50, 6, 'meta_description', 'text', 'Meta Description', 0, 0, 1, 1, 1, 1, '{}', 7),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 0, 0, 1, 1, 1, 1, '{}', 8),
(52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 10),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 11),
(55, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, '{}', 12),
(56, 7, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(57, 7, 'title', 'text', 'Tiêu đề', 0, 1, 1, 1, 1, 1, '{}', 2),
(58, 7, 'image', 'image', 'Hình ảnh', 0, 1, 1, 1, 1, 1, '{}', 3),
(59, 7, 'status', 'select_dropdown', 'Trạng thái', 0, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 4),
(60, 7, 'type', 'text', 'Type', 0, 1, 1, 1, 1, 1, '{}', 5),
(61, 7, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(62, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(63, 8, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(64, 8, 'title', 'text', 'Tiêu đề', 0, 1, 1, 1, 1, 1, '{}', 2),
(65, 8, 'slug', 'text', 'Slug', 0, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:services,slug\"}}', 3),
(66, 8, 'desc', 'text_area', 'Mô tả', 0, 0, 1, 1, 1, 1, '{}', 4),
(67, 8, 'price', 'text', 'Giá dịch vụ', 0, 1, 1, 1, 1, 1, '{}', 5),
(68, 8, 'image', 'image', 'Hình ảnh', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"width\":\"322\",\"height\":\"215\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 6),
(69, 8, 'body', 'rich_text_box', 'Nội dung', 0, 0, 1, 1, 1, 1, '{}', 7),
(70, 8, 'status', 'select_dropdown', 'Trạng thái', 0, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 8),
(71, 8, 'type', 'text', 'Type', 0, 0, 1, 1, 1, 1, '{}', 9),
(72, 8, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 1, 0, 1, '{}', 10),
(73, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 11),
(74, 9, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(75, 9, 'name', 'text', 'Họ Tên', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"}}', 2),
(76, 9, 'phone', 'text', 'Số điện thoại', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"}}', 3),
(80, 9, 'date', 'timestamp', 'Ngày hẹn', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"}}', 7),
(81, 9, 'hour', 'text', 'Khung giờ', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"}}', 8),
(82, 9, 'services', 'text_area', 'Dịch vụ đặt', 0, 1, 1, 1, 1, 1, '{}', 10),
(83, 9, 'subtotal', 'text', 'Tổng chi phí', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"4\"}}', 11),
(84, 9, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 1, 0, 1, '{}', 12),
(85, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 13),
(86, 9, 'content', 'text_area', 'Ghi chú', 0, 0, 1, 1, 1, 1, '{}', 9),
(89, 7, 'multiImage', 'media_picker', 'Nhiều hình ảnh', 0, 1, 1, 1, 1, 1, '{\"max\":10,\"min\":0,\"expanded\":true,\"show_folders\":true,\"show_toolbar\":true,\"allow_upload\":true,\"allow_move\":true,\"allow_delete\":true,\"allow_create_folder\":true,\"allow_rename\":true,\"allow_crop\":true,\"allowed\":[],\"hide_thumbnails\":false,\"quality\":90,\"watermark\":{\"source\":\"...\",\"position\":\"top-left\",\"x\":0,\"y\":0}}', 8),
(90, 10, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(91, 10, 'name', 'text', 'Họ Tên', 0, 1, 1, 1, 1, 1, '{}', 2),
(92, 10, 'phone', 'text', 'Số điện thoại', 0, 1, 1, 1, 1, 1, '{}', 3),
(93, 10, 'email', 'text', 'Email', 0, 1, 1, 1, 1, 1, '{}', 4),
(94, 10, 'service', 'text', 'Dịch vụ tư vấn', 0, 1, 1, 1, 1, 1, '{}', 5),
(95, 10, 'content', 'text', 'Nội Dung', 0, 1, 1, 1, 1, 1, '{}', 6),
(96, 10, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 7),
(97, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(98, 11, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(99, 11, 'questions', 'text', 'Câu hỏi thường gặp', 0, 1, 1, 1, 1, 1, '{}', 2),
(100, 11, 'answer', 'text_area', 'Câu trả lời', 0, 0, 1, 1, 1, 1, '{}', 3),
(101, 11, 'status', 'select_dropdown', 'Status', 0, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 4),
(102, 11, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(103, 11, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(104, 9, 'status', 'select_dropdown', 'Trạng thái', 0, 1, 1, 1, 1, 1, '{\"default\":\"dang-hen\",\"options\":{\"dang-hen\":\"\\u0110ang h\\u1eb9n\",\"da-sua\":\"\\u0110\\u00e3 s\\u1eeda\",\"Huy-hen\":\"H\\u1ee7y h\\u1eb9n\"}}', 14),
(105, 9, 'address1', 'text', 'Tỉnh, huyện, xã', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"}}', 4),
(106, 9, 'address2', 'text', 'Địa chỉ chi tiết', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":\"6\"}}', 5);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, NULL, '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2023-06-01 19:44:56', '2023-06-06 01:44:10'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2023-06-01 19:44:56', '2023-06-04 18:48:37'),
(7, 'banners', 'banners', 'Banner', 'Banners', 'voyager-photos', 'App\\Banner', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2023-06-02 00:31:56', '2023-06-04 17:59:13'),
(8, 'services', 'services', 'Dịch vụ sửa chữa', 'Dịch vụ sửa chữa', 'voyager-thumbs-up', 'App\\Service', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2023-06-02 00:55:36', '2023-06-06 01:59:59'),
(9, 'books', 'books', 'Đặt lịch', 'Đặt lịch', 'voyager-basket', 'App\\Book', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2023-06-03 02:34:16', '2023-06-05 20:44:15'),
(10, 'advises', 'advises', 'Yêu cầu tư vấn', 'Yêu cầu tư vấn', 'voyager-mail', 'App\\Advise', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2023-06-04 18:38:03', '2023-06-04 18:38:03'),
(11, 'questions', 'questions', 'Question', 'Questions', 'voyager-chat', 'App\\Question', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2023-06-04 19:09:52', '2023-06-04 19:12:06');

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
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(2, 'home_menu', '2023-06-02 00:24:51', '2023-06-02 00:24:51'),
(3, 'footer_menu', '2023-06-04 23:47:58', '2023-06-04 23:47:58');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2023-06-01 19:44:55', '2023-06-01 19:44:55', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 7, '2023-06-01 19:44:55', '2023-06-05 00:20:51', 'voyager.media.index', NULL),
(3, 1, 'Tài khoản', '', '_self', 'voyager-person', '#000000', 31, 2, '2023-06-01 19:44:55', '2023-06-05 00:21:00', 'voyager.users.index', 'null'),
(4, 1, 'Phân quyền', '', '_self', 'voyager-lock', '#000000', 31, 1, '2023-06-01 19:44:55', '2023-06-05 00:21:09', 'voyager.roles.index', 'null'),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 8, '2023-06-01 19:44:55', '2023-06-05 00:20:51', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2023-06-01 19:44:55', '2023-06-02 00:32:05', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2023-06-01 19:44:55', '2023-06-02 00:32:05', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2023-06-01 19:44:55', '2023-06-02 00:32:05', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2023-06-01 19:44:55', '2023-06-02 00:32:05', 'voyager.bread.index', NULL),
(10, 1, 'Cấu hình hệ thống', '', '_self', 'voyager-settings', '#000000', NULL, 9, '2023-06-01 19:44:55', '2023-06-05 00:21:26', 'voyager.settings.index', 'null'),
(11, 1, 'Danh mục bài viết', '', '_self', 'voyager-categories', '#000000', 23, 3, '2023-06-01 19:44:55', '2023-06-03 02:27:01', 'voyager.categories.index', 'null'),
(12, 1, 'Bài viết', '', '_self', 'voyager-news', '#000000', 23, 2, '2023-06-01 19:44:56', '2023-06-03 02:27:12', 'voyager.posts.index', 'null'),
(13, 1, 'Trang giới thiệu', '', '_self', 'voyager-file-text', '#000000', 23, 4, '2023-06-01 19:44:56', '2023-06-03 02:26:50', 'voyager.pages.index', 'null'),
(14, 2, 'Trang chủ', '/', '_self', NULL, '#000000', NULL, 1, '2023-06-02 00:25:14', '2023-06-02 00:26:31', NULL, ''),
(15, 2, 'Dịch vụ', '/services', '_self', NULL, '#000000', NULL, 3, '2023-06-02 00:25:26', '2023-06-02 02:31:46', NULL, ''),
(16, 2, 'Tư vấn', '/advises', '_self', NULL, '#000000', NULL, 4, '2023-06-02 00:25:45', '2023-06-02 02:31:46', NULL, ''),
(17, 2, 'Giới thiệu', '/about', '_self', NULL, '#000000', NULL, 2, '2023-06-02 00:25:59', '2023-06-02 02:31:46', NULL, ''),
(18, 2, 'Liên hệ', '/contact', '_self', NULL, '#000000', NULL, 7, '2023-06-02 00:26:11', '2023-06-02 01:20:28', NULL, ''),
(19, 2, 'Tin tức', '/posts', '_self', NULL, '#000000', NULL, 6, '2023-06-02 00:26:29', '2023-06-02 01:20:28', NULL, ''),
(20, 1, 'Banners', '', '_self', 'voyager-photos', NULL, 23, 1, '2023-06-02 00:31:56', '2023-06-03 02:26:32', 'voyager.banners.index', NULL),
(21, 1, 'Dịch vụ sửa chữa', '', '_self', 'voyager-browser', '#000000', NULL, 2, '2023-06-02 00:55:36', '2023-06-03 02:27:43', 'voyager.services.index', 'null'),
(22, 2, 'Bảng giá', '/price-list', '_self', NULL, '#000000', NULL, 5, '2023-06-02 01:20:25', '2023-06-04 21:06:21', NULL, ''),
(23, 1, 'Quản lý nội dung', '', '_self', 'voyager-categories', '#000000', NULL, 5, '2023-06-03 02:26:26', '2023-06-04 18:38:12', NULL, ''),
(24, 1, 'Đặt lịch', '', '_self', 'voyager-basket', NULL, NULL, 3, '2023-06-03 02:34:16', '2023-06-03 02:36:37', 'voyager.books.index', NULL),
(25, 1, 'Yêu cầu tư vấn', '', '_self', 'voyager-mail', NULL, NULL, 4, '2023-06-04 18:38:03', '2023-06-04 18:38:12', 'voyager.advises.index', NULL),
(26, 1, 'Questions', '', '_self', 'voyager-chat', NULL, 23, 5, '2023-06-04 19:09:52', '2023-06-04 19:10:02', 'voyager.questions.index', NULL),
(27, 3, 'Trang chủ', '/', '_self', NULL, '#000000', NULL, 11, '2023-06-04 23:48:11', '2023-06-04 23:48:11', NULL, ''),
(28, 3, 'Dịch vụ', '/services', '_self', NULL, '#000000', NULL, 12, '2023-06-04 23:48:23', '2023-06-04 23:48:23', NULL, ''),
(29, 3, 'Tư vấn', '/advises', '_self', NULL, '#000000', NULL, 13, '2023-06-04 23:48:38', '2023-06-04 23:48:38', NULL, ''),
(30, 3, 'Giới thiệu', '/about', '_self', NULL, '#000000', NULL, 14, '2023-06-04 23:48:54', '2023-06-04 23:48:54', NULL, ''),
(31, 1, 'Quản lý tài khoản', '', '_self', 'voyager-categories', '#000000', NULL, 6, '2023-06-05 00:20:35', '2023-06-05 00:20:42', NULL, '');

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
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2016_01_01_000000_create_pages_table', 2),
(25, '2016_01_01_000000_create_posts_table', 2),
(26, '2016_02_15_204651_create_categories_table', 2),
(27, '2017_04_11_000000_alter_post_nullable_fields_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'BỆNH VIỆN ĐIỆN MÁY - TỔNG KHO ĐIỆN MÁY 2T - ĐỒNG HÀNH CÙNG SỰ TIN CẬY', 'Bạn đang gặp phải vấn đề về điện máy và cần một đơn vị uy tín để sửa chữa và bảo dưỡng? Hãy để chúng tôi giúp bạn! Với nhiều năm kinh nghiệm trong ngành, Tổng kho điện máy 2T tự hào cung cấp dịch vụ sửa chữa và bảo dưỡng điện máy chất lượng, đáng tin cậy và chuyên nghiệp.', '<div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\">\r\n<div dir=\"auto\">Bạn đang gặp phải vấn đề về điện m&aacute;y v&agrave; cần một đơn vị uy t&iacute;n để sửa chữa v&agrave; bảo dưỡng? H&atilde;y để ch&uacute;ng t&ocirc;i gi&uacute;p bạn! Với nhiều năm kinh nghiệm trong ng&agrave;nh, Tổng kho điện m&aacute;y 2T tự h&agrave;o cung cấp dịch vụ sửa chữa v&agrave; bảo dưỡng điện m&aacute;y chất lượng, đ&aacute;ng tin cậy v&agrave; chuy&ecirc;n nghiệp.</div>\r\n</div>\r\n<div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\">\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t3c/1/16/1f4a1.png\" alt=\"💡\" width=\"16\" height=\"16\"></span> Ch&uacute;ng t&ocirc;i c&oacute; đội ngũ kỹ thuật vi&ecirc;n gi&agrave;u kinh nghiệm v&agrave; được đ&agrave;o tạo chuy&ecirc;n s&acirc;u về c&aacute;c loại thiết bị điện m&aacute;y, từ m&aacute;y lạnh, m&aacute;y giặt, tủ lạnh, m&aacute;y nước n&oacute;ng đến m&aacute;y m&oacute;c gia đ&igrave;nh v&agrave; c&ocirc;ng nghiệp kh&aacute;c. Với sự am hiểu s&acirc;u sắc về c&aacute;c thương hiệu h&agrave;ng đầu, ch&uacute;ng t&ocirc;i tự tin c&oacute; thể khắc phục mọi sự cố v&agrave; mang lại hiệu suất hoạt động tối ưu cho thiết bị của bạn.</div>\r\n</div>\r\n<div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\">\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t52/1/16/1f527.png\" alt=\"🔧\" width=\"16\" height=\"16\"></span> Dịch vụ của ch&uacute;ng t&ocirc;i bao gồm: <span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t52/1/16/1f527.png\" alt=\"🔧\" width=\"16\" height=\"16\"></span></div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t33/1/16/2705.png\" alt=\"✅\" width=\"16\" height=\"16\"></span> Kiểm tra, chuẩn đo&aacute;n sự cố v&agrave; tư vấn miễn ph&iacute;</div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t33/1/16/2705.png\" alt=\"✅\" width=\"16\" height=\"16\"></span> Sửa chữa, thay thế linh kiện v&agrave; n&acirc;ng cấp thiết bị</div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t33/1/16/2705.png\" alt=\"✅\" width=\"16\" height=\"16\"></span> Vệ sinh v&agrave; bảo dưỡng định kỳ để duy tr&igrave; hiệu suất tối ưu</div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t33/1/16/2705.png\" alt=\"✅\" width=\"16\" height=\"16\"></span> Bảo h&agrave;nh v&agrave; hỗ trợ sau b&aacute;n h&agrave;ng</div>\r\n</div>\r\n<div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\">\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t52/1/16/1f527.png\" alt=\"🔧\" width=\"16\" height=\"16\"></span> Lợi &iacute;ch khi chọn Tổng kho điện m&aacute;y 2T: <span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t52/1/16/1f527.png\" alt=\"🔧\" width=\"16\" height=\"16\"></span></div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/te0/1/16/1f31f.png\" alt=\"🌟\" width=\"16\" height=\"16\"></span> Đội ngũ kỹ thuật vi&ecirc;n chuy&ecirc;n nghiệp, tận t&acirc;m v&agrave; trung thực</div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/te0/1/16/1f31f.png\" alt=\"🌟\" width=\"16\" height=\"16\"></span> Sử dụng linh kiện ch&iacute;nh h&atilde;ng v&agrave; c&ocirc;ng nghệ ti&ecirc;n tiến</div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/te0/1/16/1f31f.png\" alt=\"🌟\" width=\"16\" height=\"16\"></span> Thời gian đ&aacute;p ứng nhanh ch&oacute;ng v&agrave; dịch vụ tận nh&agrave; khi cần thiết</div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/te0/1/16/1f31f.png\" alt=\"🌟\" width=\"16\" height=\"16\"></span> Gi&aacute; cả cạnh tranh v&agrave; cam kết chất lượng</div>\r\n<div dir=\"auto\">-------------------------------------</div>\r\n<div dir=\"auto\">𝐓𝐎̂̉𝐍𝐆 𝐊𝐇𝐎 Đ𝐈𝐄̣̂𝐍 𝐌𝐀́𝐘 𝟐𝐓</div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t51/1/16/1f449.png\" alt=\"👉\" width=\"16\" height=\"16\"></span> 𝑪𝒉𝒊 𝒏𝒉𝒂́𝒏𝒉 1: Đường Bắc Sơn, Ho&agrave;ng Văn Thụ, TP Th&aacute;i Nguy&ecirc;n</div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t51/1/16/1f449.png\" alt=\"👉\" width=\"16\" height=\"16\"></span> 𝑪𝒉𝒊 𝒏𝒉𝒂́𝒏𝒉 2: Khu Đ&ocirc; Thị CROWN VILLAS - 586 đường CMT8,</div>\r\n<div dir=\"auto\">P. Gia S&agrave;ng, TP. Th&aacute;i Nguy&ecirc;n</div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t51/1/16/1f449.png\" alt=\"👉\" width=\"16\" height=\"16\"></span> 𝑪𝒉𝒊 𝒏𝒉𝒂́𝒏𝒉 3: Ng&atilde; tư chợ Đồn, Kha Sơn, Ph&uacute; B&igrave;nh, Th&aacute;i Nguy&ecirc;n</div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t4d/1/16/1f4de.png\" alt=\"📞\" width=\"16\" height=\"16\"></span> 𝑯𝒐𝒕𝒍𝒊𝒏𝒆 : 0975 508 128 - 0979 508 128 - 0988 508 128</div>\r\n</div>', 'pages/June2023/zoTU3kZ31Jk0pbrnqb0S.jpg', 'about', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2023-06-01 19:44:56', '2023-06-06 01:20:18'),
(3, 1, 'Bảng giá', NULL, '<h2>DỊCH VỤ BAO GỒM: Vệ sinh cục n&oacute;ng &amp; cục lạnh, ch&acirc;m th&ecirc;m gas</h2>\r\n<table>\r\n<tbody>\r\n<tr>\r\n<th>Vệ sinh m&aacute;y lạnh treo tường</th>\r\n<th class=\"unit-price\">Đơn gi&aacute;<br>(nh&acirc;n c&ocirc;ng)</th>\r\n</tr>\r\n<tr>\r\n<td class=\"product-name\"><span class=\"name\">M&aacute;y lạnh từ 1HP-1.5HP</span></td>\r\n<td class=\"product-price\">200.000₫</td>\r\n</tr>\r\n<tr>\r\n<td class=\"product-name\"><span class=\"name\">M&aacute;y lạnh từ 2HP- 3HP</span></td>\r\n<td class=\"product-price\">250.000₫</td>\r\n</tr>\r\n<tr>\r\n<td class=\"product-name\"><span class=\"name\">M&aacute;y lạnh multi (1 d&agrave;n n&oacute;ng + 2 d&agrave;n lạnh)</span></td>\r\n<td class=\"product-price\">700.000₫</td>\r\n</tr>\r\n<tr>\r\n<td class=\"product-name\"><span class=\"name\">M&aacute;y lạnh multi (1 d&agrave;n n&oacute;ng + 3 d&agrave;n lạnh)</span></td>\r\n<td class=\"product-price\">750.000₫</td>\r\n</tr>\r\n</tbody>\r\n</table>', NULL, 'bang-gia', NULL, NULL, 'ACTIVE', '2023-06-04 18:48:02', '2023-06-04 18:48:02');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(2, 'browse_bread', NULL, '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(3, 'browse_database', NULL, '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(4, 'browse_media', NULL, '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(5, 'browse_compass', NULL, '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(6, 'browse_menus', 'menus', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(7, 'read_menus', 'menus', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(8, 'edit_menus', 'menus', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(9, 'add_menus', 'menus', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(10, 'delete_menus', 'menus', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(11, 'browse_roles', 'roles', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(12, 'read_roles', 'roles', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(13, 'edit_roles', 'roles', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(14, 'add_roles', 'roles', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(15, 'delete_roles', 'roles', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(16, 'browse_users', 'users', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(17, 'read_users', 'users', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(18, 'edit_users', 'users', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(19, 'add_users', 'users', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(20, 'delete_users', 'users', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(21, 'browse_settings', 'settings', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(22, 'read_settings', 'settings', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(23, 'edit_settings', 'settings', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(24, 'add_settings', 'settings', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(25, 'delete_settings', 'settings', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(26, 'browse_categories', 'categories', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(27, 'read_categories', 'categories', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(28, 'edit_categories', 'categories', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(29, 'add_categories', 'categories', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(30, 'delete_categories', 'categories', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(31, 'browse_posts', 'posts', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(32, 'read_posts', 'posts', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(33, 'edit_posts', 'posts', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(34, 'add_posts', 'posts', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(35, 'delete_posts', 'posts', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(36, 'browse_pages', 'pages', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(37, 'read_pages', 'pages', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(38, 'edit_pages', 'pages', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(39, 'add_pages', 'pages', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(40, 'delete_pages', 'pages', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(41, 'browse_banners', 'banners', '2023-06-02 00:31:56', '2023-06-02 00:31:56'),
(42, 'read_banners', 'banners', '2023-06-02 00:31:56', '2023-06-02 00:31:56'),
(43, 'edit_banners', 'banners', '2023-06-02 00:31:56', '2023-06-02 00:31:56'),
(44, 'add_banners', 'banners', '2023-06-02 00:31:56', '2023-06-02 00:31:56'),
(45, 'delete_banners', 'banners', '2023-06-02 00:31:56', '2023-06-02 00:31:56'),
(46, 'browse_services', 'services', '2023-06-02 00:55:36', '2023-06-02 00:55:36'),
(47, 'read_services', 'services', '2023-06-02 00:55:36', '2023-06-02 00:55:36'),
(48, 'edit_services', 'services', '2023-06-02 00:55:36', '2023-06-02 00:55:36'),
(49, 'add_services', 'services', '2023-06-02 00:55:36', '2023-06-02 00:55:36'),
(50, 'delete_services', 'services', '2023-06-02 00:55:36', '2023-06-02 00:55:36'),
(51, 'browse_books', 'books', '2023-06-03 02:34:16', '2023-06-03 02:34:16'),
(52, 'read_books', 'books', '2023-06-03 02:34:16', '2023-06-03 02:34:16'),
(53, 'edit_books', 'books', '2023-06-03 02:34:16', '2023-06-03 02:34:16'),
(54, 'add_books', 'books', '2023-06-03 02:34:16', '2023-06-03 02:34:16'),
(55, 'delete_books', 'books', '2023-06-03 02:34:16', '2023-06-03 02:34:16'),
(56, 'browse_advises', 'advises', '2023-06-04 18:38:03', '2023-06-04 18:38:03'),
(57, 'read_advises', 'advises', '2023-06-04 18:38:03', '2023-06-04 18:38:03'),
(58, 'edit_advises', 'advises', '2023-06-04 18:38:03', '2023-06-04 18:38:03'),
(59, 'add_advises', 'advises', '2023-06-04 18:38:03', '2023-06-04 18:38:03'),
(60, 'delete_advises', 'advises', '2023-06-04 18:38:03', '2023-06-04 18:38:03'),
(61, 'browse_questions', 'questions', '2023-06-04 19:09:52', '2023-06-04 19:09:52'),
(62, 'read_questions', 'questions', '2023-06-04 19:09:52', '2023-06-04 19:09:52'),
(63, 'edit_questions', 'questions', '2023-06-04 19:09:52', '2023-06-04 19:09:52'),
(64, 'add_questions', 'questions', '2023-06-04 19:09:52', '2023-06-04 19:09:52'),
(65, 'delete_questions', 'questions', '2023-06-04 19:09:52', '2023-06-04 19:09:52');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(6, 1, 1, 'Hướng dẫn Gắn Ron Máy Giặt Cửa Ngang', NULL, 'Thay ron cửa mới cho máy giặt sẽ giúp kìm hãm độ rung lắc trong quá trình hoạt động, giảm thiểu tình trạng rò rỉ nước, đóng rêu xanh, có mùi hôi,... làm ảnh hưởng đến chất lượng quần áo. Bài viết sau sẽ hướng dẫn bạn gắn ron cửa máy giặt cửa ngang đơn giản nhất. Cùng tham khảo nhé!', '<p>Thay ron cửa mới cho m&aacute;y giặt sẽ gi&uacute;p k&igrave;m h&atilde;m độ rung lắc trong qu&aacute; tr&igrave;nh hoạt động, giảm thiểu t&igrave;nh trạng r&ograve; rỉ nước, đ&oacute;ng r&ecirc;u xanh, c&oacute; m&ugrave;i h&ocirc;i,... l&agrave;m ảnh hưởng đến chất lượng quần &aacute;o. B&agrave;i viết sau sẽ hướng dẫn bạn gắn ron cửa m&aacute;y giặt cửa ngang đơn giản nhất. C&ugrave;ng tham khảo nh&eacute;!&nbsp;</p>\r\n<h3>1. Chuẩn bị dụng cụ gắn ron m&aacute;y giặt</h3>\r\n<p>Trước khi tiến h&agrave;nh gắn ron cửa, bạn h&atilde;y chuẩn bị đầy đủ c&aacute;c dụng cụ sau:</p>\r\n<ul>\r\n<li>1 ron cửa ph&ugrave; hợp với m&aacute;y giặt của bạn.</li>\r\n<li>1 l&ograve; xo ron m&aacute;y giặt.</li>\r\n<li>1 đ&ocirc;i găng tay bảo hộ.</li>\r\n<li>1 c&aacute;i&nbsp;<a title=\"k&igrave;m\" href=\"https://www.dienmayxanh.com/kim\" target=\"_blank\" rel=\"noopener\">k&igrave;m</a>.</li>\r\n</ul>\r\n<p><img title=\"Ron cửa m&aacute;y giặt cửa ngang\" src=\"https://cdn.tgdd.vn/Files/2021/10/28/1394159/r1.jpg\" alt=\"Ron cửa m&aacute;y giặt cửa ngang\" width=\"730\" height=\"410\" data-original=\"https://cdn.tgdd.vn/Files/2021/10/28/1394159/r1.jpg\"></p>\r\n<h3>2. Quy tr&igrave;nh gắn ron m&aacute;y giặt cửa ngang</h3>\r\n<p><strong>Bước 1:&nbsp;&Eacute;p ron đều đặn v&agrave;o m&eacute;p cửa </strong></p>\r\n<p>Bạn d&ugrave;ng tay v&agrave; &eacute;p ron cao su v&agrave;o m&eacute;p cửa m&aacute;y giặt, kiểm tra lại đ&atilde; đ&uacute;ng vị tr&iacute; chưa nhằm tr&aacute;nh t&igrave;nh trạng đ&oacute;ng cửa kh&ocirc;ng được, m&aacute;y rung lắc trong khi hoạt động.</p>\r\n<p><img title=\"&Eacute;p ron v&agrave;o m&eacute;p cửa\" src=\"https://cdn.tgdd.vn/Files/2021/10/28/1394159/b1f1bfeb36c3fe9da7d2.jpg\" alt=\"&Eacute;p ron v&agrave;o m&eacute;p cửa\" width=\"730\" height=\"410\" data-original=\"https://cdn.tgdd.vn/Files/2021/10/28/1394159/b1f1bfeb36c3fe9da7d2.jpg\"></p>\r\n<p><strong>Bước 2:</strong>&nbsp;<strong>Đưa hướng l&ograve; xo ron ngay chốt cửa</strong></p>\r\n<p>Bạn sử dụng k&igrave;m nhọn k&eacute;o l&ograve; xo để cố định ron cửa chắc chắn, d&ugrave;ng đầu gối &eacute;p một lực vừa phải v&agrave; kh&ocirc;ng để trượt c&aacute;p.</p>\r\n<p><img title=\"Đưa hướng l&ograve; xo ron ngay chốt cửa\" src=\"https://cdn.tgdd.vn/Files/2021/10/28/1394159/50b4f3af7a87b2d9eb96.jpg\" alt=\"Đưa hướng l&ograve; xo ron ngay chốt cửa\" width=\"730\" height=\"412\" data-original=\"https://cdn.tgdd.vn/Files/2021/10/28/1394159/50b4f3af7a87b2d9eb96.jpg\"></p>\r\n<p><strong>C&oacute; thể bạn chưa biết:&nbsp;</strong>Dịch vụ Tận T&acirc;m l&agrave; th&agrave;nh vi&ecirc;n của TGDĐ v&agrave; ĐMX, cung cấp c&aacute;c giải ph&aacute;p sửa chữa, lắp đặt v&agrave; vệ sinh m&aacute;y giặt với mức gi&aacute; v&ocirc; c&ugrave;ng hợp l&yacute;. Bạn c&oacute; thể đặt dịch vụ&nbsp;<a title=\"tại đ&acirc;y\" href=\"https://www.dichvutantam.com/dat-dich-vu\" target=\"_blank\" rel=\"noopener\">tại đ&acirc;y</a>, ch&uacute;ng t&ocirc;i sẽ x&aacute;c nhận trong v&ograve;ng 2h, hoặc gọi v&agrave;o hotline&nbsp;<a title=\"1800.1783\" href=\"tel: 18001783\">1800.1783</a>&nbsp;để được tư vấn tận t&igrave;nh nh&eacute;!</p>', 'posts\\June2023\\aT5cLSNEJTtEsxvpIgS6.jpg', 'huong-dan-gan-ron-may-giat-cua-ngang', NULL, NULL, 'PUBLISHED', 0, '2023-06-04 18:13:51', '2023-06-04 18:13:51'),
(7, 1, 1, 'Hướng dẫn Sạc Gas Máy Lạnh', NULL, 'Sạc gas máy lạnh là việc làm quan trọng trong quá trình sử dụng, đòi hỏi bạn phải có đầy đủ dụng cụ chuyên dụng và kỹ năng thực hiện chuyên môn. Để giúp khách hàng hiểu rõ hơn về quy trình này, dịch vụ Tận Tâm sẽ hướng dẫn sạc gas máy lạnh qua bài viết sau. Cùng theo dõi nhé!', '<p>Sạc gas m&aacute;y lạnh l&agrave; việc l&agrave;m quan trọng trong qu&aacute; tr&igrave;nh sử dụng, đ&ograve;i hỏi bạn phải c&oacute; đầy đủ dụng cụ chuy&ecirc;n dụng v&agrave; kỹ năng thực hiện chuy&ecirc;n m&ocirc;n. Để gi&uacute;p kh&aacute;ch h&agrave;ng hiểu r&otilde; hơn về quy tr&igrave;nh n&agrave;y, dịch vụ Tận T&acirc;m sẽ hướng dẫn sạc gas m&aacute;y lạnh qua b&agrave;i viết sau. C&ugrave;ng theo d&otilde;i nh&eacute;!</p>\r\n<h3>1. Chuẩn bị dụng cụ nạp gas m&aacute;y lạnh</h3>\r\n<p>Nạp gas điều ho&agrave; l&agrave; c&ocirc;ng việc kh&aacute; phức tạp, bạn cần chuẩn bị đủ c&aacute;c dụng cụ sau để qu&aacute; tr&igrave;nh diễn ra thuận lợi.</p>\r\n<ul>\r\n<li>01&nbsp;<a title=\"mỏ lết đa năng\" href=\"https://www.dienmayxanh.com/co-le-mo-let\" target=\"_blank\" rel=\"noopener\">mỏ lết đa năng</a>.</li>\r\n<li>01&nbsp;<a title=\"b&igrave;nh ga điều ho&agrave;\" href=\"https://www.dienmayxanh.com/kinh-nghiem-hay/cac-loai-gas-tren-may-lanh-588213\" target=\"_blank\" rel=\"noopener\">b&igrave;nh gas điều ho&agrave;</a>&nbsp;R32, R410A, R22.</li>\r\n<li>01&nbsp;<a title=\"tua v&iacute;t 4 cạnh\" href=\"https://www.dienmayxanh.com/tua-vit\" target=\"_blank\" rel=\"noopener\">tua v&iacute;t 4 cạnh</a>.</li>\r\n<li>01 đồng hồ đo gas điều ho&agrave;, tối thiểu phải c&oacute; 2 d&acirc;y.</li>\r\n<li>01 đồng hồ kẹp d&ograve;ng (ampe k&igrave;m).</li>\r\n<li>01 m&aacute;y h&uacute;t ch&acirc;n kh&ocirc;ng.</li>\r\n</ul>\r\n<p><img title=\"Chuẩn bị dụng cụ nạp ga\" src=\"https://cdn.tgdd.vn/Files/2021/10/28/1394155/vlcsnap-2021-11-02-10h22m14s235-1.png\" alt=\"Chuẩn bị dụng cụ nạp ga\" width=\"730\" height=\"410\" data-original=\"https://cdn.tgdd.vn/Files/2021/10/28/1394155/vlcsnap-2021-11-02-10h22m14s235-1.png\"></p>\r\n<h3>2. Quy tr&igrave;nh sạc gas m&aacute;y lạnh</h3>\r\n<p><strong>Bước 1: Kiểm tra c&aacute;c mối nối d&acirc;y</strong></p>\r\n<p>Đầu ti&ecirc;n, bạn h&atilde;y kiểm tra c&aacute;c mối d&acirc;y bằng việc d&ugrave;ng&nbsp;<strong>van chống bỏng</strong>&nbsp;v&agrave; siết chặt ch&uacute;ng lại ở trạng th&aacute;i mở, điều n&agrave;y sẽ gi&uacute;p hạn chế t&igrave;nh trạng r&ograve; rỉ gas tốt hơn.</p>\r\n<p><img title=\"Sử dụng van chống bỏng\" src=\"https://cdn.tgdd.vn/Files/2021/10/28/1394155/vlcsnap-2021-11-02-10h28m18s645.png\" alt=\"Sử dụng van chống bỏng\" width=\"730\" height=\"410\" data-original=\"https://cdn.tgdd.vn/Files/2021/10/28/1394155/vlcsnap-2021-11-02-10h28m18s645.png\"></p>\r\n<p><strong>Bước 2:&nbsp;Tiến h&agrave;nh mở m&aacute;y h&uacute;t ch&acirc;n kh&ocirc;ng</strong></p>\r\n<p>Bạn tiến h&agrave;nh mở m&aacute;y h&uacute;t ch&acirc;n kh&ocirc;ng v&agrave; cho h&uacute;t&nbsp;<strong>tr&ecirc;n 15 ph&uacute;t</strong>. Khi thấy kim đồng hồ chỉ&nbsp;<strong>dưới 0 (-30 mmhg)&nbsp;</strong>c&oacute; nghĩa l&agrave; hệ thống đ&atilde; được r&uacute;t hết kh&ocirc;ng kh&iacute;. Sau đ&oacute;, bạn cho&nbsp;<strong>kho&aacute; van đồng hồ&nbsp;</strong>trước khi tắt m&aacute;y h&uacute;t.</p>\r\n<p><img title=\"Thời gian h&uacute;t tr&ecirc;n 15 ph&uacute;t\" src=\"https://cdn.tgdd.vn/Files/2021/10/28/1394155/vlcsnap-2021-11-02-10h29m21s020.png\" alt=\"Thời gian h&uacute;t tr&ecirc;n 15 ph&uacute;t\" width=\"730\" height=\"410\" data-original=\"https://cdn.tgdd.vn/Files/2021/10/28/1394155/vlcsnap-2021-11-02-10h29m21s020.png\"></p>\r\n<p><strong>Bước 3:&nbsp;Tiến h&agrave;nh sạc gas</strong></p>\r\n<p>Trước khi bắt đầu sạc, bạn phải kiểm tra đ&uacute;ng loại gas ph&ugrave; hợp cho m&aacute;y. Tiếp đ&oacute;, bạn h&atilde;y<strong>&nbsp;x&atilde; gi&oacute;&nbsp;</strong>đường d&acirc;y dẫn gas, khởi động m&aacute;y hoạt động ổn định khoảng&nbsp;<strong>3 - 5 ph&uacute;t&nbsp;</strong>rồi mới cho gas v&agrave;o.</p>\r\n<p><img title=\"X&atilde; gi&oacute; đường d&acirc;y dẫn ga\" src=\"https://cdn.tgdd.vn/Files/2021/10/28/1394155/vlcsnap-2021-11-02-10h30m57s574.png\" alt=\"X&atilde; gi&oacute; đường d&acirc;y dẫn ga\" width=\"730\" height=\"410\" data-original=\"https://cdn.tgdd.vn/Files/2021/10/28/1394155/vlcsnap-2021-11-02-10h30m57s574.png\"></p>\r\n<p>Để sạc gas, bạn bắt buộc phải c&oacute;&nbsp;<strong>ampe k&igrave;m</strong>. Tuỳ theo d&ograve;ng chạy ti&ecirc;u chuẩn của m&aacute;y m&agrave; ch&uacute;ng ta sẽ sạc theo ampe.</p>\r\n<p><img title=\"Ampe k&igrave;m\" src=\"https://cdn.tgdd.vn/Files/2021/10/28/1394155/vlcsnap-2021-11-02-10h38m57s306.png\" alt=\"Ampe k&igrave;m\" width=\"730\" height=\"410\" data-original=\"https://cdn.tgdd.vn/Files/2021/10/28/1394155/vlcsnap-2021-11-02-10h38m57s306.png\"></p>\r\n<p>Khi sạc gas, bạn cần chia th&agrave;nh nhiều đợt v&agrave; nạp từ từ, tuyệt đối&nbsp;<strong>kh&ocirc;ng nạp hết 1 lần</strong>. B&ecirc;n cạnh đ&oacute;, bạn phải li&ecirc;n tục kiểm tra d&ograve;ng điện hoạt động của m&aacute;y lạnh. C&agrave;ng về gần 20 ph&uacute;t cuối, bạn h&atilde;y&nbsp;<strong>nạp chậm&nbsp;</strong>để c&acirc;n chỉnh lượng gas ch&iacute;nh x&aacute;c.</p>\r\n<p><img title=\"Nạp chậm gần 20 ph&uacute;t cuối\" src=\"https://cdn.tgdd.vn/Files/2021/10/28/1394155/vlcsnap-2021-11-02-10h42m40s780.png\" alt=\"Nạp chậm gần 20 ph&uacute;t cuối\" width=\"730\" height=\"410\" data-original=\"https://cdn.tgdd.vn/Files/2021/10/28/1394155/vlcsnap-2021-11-02-10h42m40s780.png\"></p>\r\n<h3>3. Những lưu &yacute; cần biết khi sạc gas</h3>\r\n<p>Đầu ti&ecirc;n, bạn cần kiểm tra v&agrave; xử l&yacute; x&igrave; gas trước khi nạp. Bạn nhớ chia th&agrave;nh nhiều đợt sạc v&agrave; h&atilde;y sạc từ từ, tuỳ v&agrave;o d&ograve;ng điện được in tr&ecirc;n d&agrave;n n&oacute;ng.</p>\r\n<p>Nếu bạn nạp gas bổ sung th&igrave; h&atilde;y sử dụng loại R22 v&agrave; R32. Trường hợp bạn sạc mới h&atilde;y d&ugrave;ng R410A v&igrave; n&oacute; x&igrave; k&eacute;m lạnh, phải h&uacute;t ch&acirc;n kh&ocirc;ng mới d&ugrave;ng được.</p>\r\n<p><img title=\"Những lưu &yacute; khi sạc ga m&aacute;y lạnh\" src=\"https://cdn.tgdd.vn/Files/2021/10/28/1394155/huong-dan-nap-gas-may-lanh-dung-chuan-2.jpg\" alt=\"Những lưu &yacute; khi sạc ga m&aacute;y lạnh\" width=\"730\" height=\"381\" data-original=\"https://cdn.tgdd.vn/Files/2021/10/28/1394155/huong-dan-nap-gas-may-lanh-dung-chuan-2.jpg\"></p>\r\n<p><strong>C&oacute; thể bạn chưa biết:&nbsp;</strong>Dịch vụ Tận T&acirc;m l&agrave; th&agrave;nh vi&ecirc;n của TGDĐ v&agrave; ĐMX, cung cấp c&aacute;c giải ph&aacute;p sửa chữa, lắp đặt v&agrave; vệ sinh m&aacute;y lạnh với mức gi&aacute; v&ocirc; c&ugrave;ng hợp l&yacute;. Bạn c&oacute; thể đặt dịch vụ&nbsp;<a title=\"tại đ&acirc;y\" href=\"https://www.dichvutantam.com/dat-dich-vu\" target=\"_blank\" rel=\"noopener\">tại đ&acirc;y</a>, ch&uacute;ng t&ocirc;i sẽ x&aacute;c nhận trong v&ograve;ng 2h, hoặc gọi v&agrave;o hotline&nbsp;<a title=\"1800.1783\" href=\"tel: 18001783\">1800.1783</a>&nbsp;để được tư vấn tận t&igrave;nh nh&eacute;!</p>', 'posts\\June2023\\GJHaAyIg4eIOo4m4sII2.jpg', 'huong-dan-sac-gas-may-lanh', NULL, NULL, 'PUBLISHED', 0, '2023-06-04 18:14:45', '2023-06-04 18:14:45'),
(8, 1, 1, 'CHÀO HÈ XANH - ƯU ĐÃI KHÔNG PHANH', 'CHÀO HÈ XANH - ƯU ĐÃI KHÔNG PHANH', 'Hãy nhanh tay đến Tổng kho Điện máy 2T để không bỏ lỡ cơ hội mua sắm và nhận quà tặng hấp dẫn này nhé!', '<div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\">\r\n<div dir=\"auto\">Bạn sẽ c&oacute;:</div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t50/1/16/1f525.png\" alt=\"🔥\" width=\"16\" height=\"16\"></span>Cơ hội để bạn sở hữu những sản phẩm điện m&aacute;y y&ecirc;u th&iacute;ch v&agrave; mong muốn được ƯU Đ&Atilde;I L&Ecirc;N ĐẾN 50%</div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t50/1/16/1f525.png\" alt=\"🔥\" width=\"16\" height=\"16\"></span>Cơ hội ĐỔI ĐỒ CŨ lấy ĐỒ MỚI chưa bao giờ lớn đến thế</div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t50/1/16/1f525.png\" alt=\"🔥\" width=\"16\" height=\"16\"></span>Cơ hội mua sắm v&agrave; nhận th&ecirc;m qu&agrave; trị gi&aacute; 390 000đ</div>\r\n</div>\r\n<div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\">\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb0/1/16/1f3af.png\" alt=\"🎯\" width=\"16\" height=\"16\"></span> H&atilde;y nhanh tay đến Tổng kho Điện m&aacute;y 2T để kh&ocirc;ng bỏ lỡ cơ hội mua sắm v&agrave; nhận qu&agrave; tặng hấp dẫn n&agrave;y nh&eacute;!</div>\r\n<div dir=\"auto\">Ch&uacute;c qu&yacute; kh&aacute;ch h&agrave;ng một kỳ nghỉ lễ vui vẻ v&agrave; hạnh ph&uacute;c!</div>\r\n<div dir=\"auto\">-------------------------------------</div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tac/1/16/1f4cc.png\" alt=\"📌\" width=\"16\" height=\"16\"></span> Chi tiết vui l&ograve;ng li&ecirc;n hệ: 𝐓𝐎̂̉𝐍𝐆 𝐊𝐇𝐎 Đ𝐈𝐄̣̂𝐍 𝐌𝐀́𝐘 𝟐𝐓</div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t51/1/16/1f449.png\" alt=\"👉\" width=\"16\" height=\"16\"></span> 𝑪𝒉𝒊 𝒏𝒉𝒂́𝒏𝒉 1: Đường Bắc Sơn, Ho&agrave;ng Văn Thụ, TP Th&aacute;i Nguy&ecirc;n</div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t51/1/16/1f449.png\" alt=\"👉\" width=\"16\" height=\"16\"></span> 𝑪𝒉𝒊 𝒏𝒉𝒂́𝒏𝒉 2: Khu Đ&ocirc; Thị CROWN VILLAS - 586 đường CMT8,</div>\r\n<div dir=\"auto\">P. Gia S&agrave;ng, TP. Th&aacute;i Nguy&ecirc;n</div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t51/1/16/1f449.png\" alt=\"👉\" width=\"16\" height=\"16\"></span> 𝑪𝒉𝒊 𝒏𝒉𝒂́𝒏𝒉 3: Ng&atilde; tư chợ Đồn, Kha Sơn, Ph&uacute; B&igrave;nh, Th&aacute;i Nguy&ecirc;n</div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t4d/1/16/1f4de.png\" alt=\"📞\" width=\"16\" height=\"16\"></span> 𝑯𝒐𝒕𝒍𝒊𝒏𝒆 : 0975 508 128 - 0979 508 128 - 0988 508 128</div>\r\n</div>', 'posts/June2023/7wykNfHTEjK2wvoVJdpd.jpg', 'chao-he-xanh-uu-dai-khong-phanh', 'Hãy nhanh tay đến Tổng kho Điện máy 2T để không bỏ lỡ cơ hội mua sắm và nhận quà tặng hấp dẫn này nhé!', 'Hãy nhanh tay đến Tổng kho Điện máy 2T để không bỏ lỡ cơ hội mua sắm và nhận quà tặng hấp dẫn này nhé!', 'PUBLISHED', 0, '2023-06-06 01:39:02', '2023-06-06 01:39:02');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `questions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `questions`, `answer`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Quý khách cần đặt dịch vụ, liên hệ cho chúng tôi bằng các hình thức nào?', '1. Quý khách có thể gọi điện thoại trực tiếp tới các số điện thoại: 0123456789 hoặc 0123456789.\r\n2. Gửi tin nhắn vào số 0123456789 hoặc 0123456789. Quý khách cho địa chỉ, số điện thoại liên hệ, dịch vụ Bạn đang cần, Chúng tôi sẽ chủ động liên hệ lại.\r\n3. Gửi yêu cầu vào ổ bên phải của quý khách. Chúng tôi sẽ chủ động liên hệ đến quý khách.', 'ACTIVE', '2023-06-04 19:11:22', '2023-06-04 19:11:22'),
(2, 'Làm thế nào để biết được là nhân viên Công ty đến sửa chữa?', '1. Quý khách có thể gọi điện thoại trực tiếp tới các số điện thoại: 0123456789 hoặc 0123456789.\r\n2. Gửi tin nhắn vào số 0123456789 hoặc 0123456789. Quý khách cho địa chỉ, số điện thoại liên hệ, dịch vụ Bạn đang cần, Chúng tôi sẽ chủ động liên hệ lại.\r\n3. Gửi yêu cầu vào ổ bên phải của quý khách. Chúng tôi sẽ chủ động liên hệ đến quý khách.', 'ACTIVE', '2023-06-04 19:11:40', '2023-06-04 19:11:40'),
(3, 'Khi cần bảo hành, tôi liên hệ như thế nào?', '1. Quý khách có thể gọi điện thoại trực tiếp tới các số điện thoại: 0123456789 hoặc 0123456789.\r\n2. Gửi tin nhắn vào số 0123456789 hoặc 0123456789. Quý khách cho địa chỉ, số điện thoại liên hệ, dịch vụ Bạn đang cần, Chúng tôi sẽ chủ động liên hệ lại.\r\n3. Gửi yêu cầu vào ổ bên phải của quý khách. Chúng tôi sẽ chủ động liên hệ đến quý khách.', 'ACTIVE', '2023-06-04 19:11:57', '2023-06-04 19:11:57');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2023-06-01 19:44:55', '2023-06-01 19:44:55'),
(2, 'user', 'Normal User', '2023-06-01 19:44:55', '2023-06-01 19:44:55');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `slug`, `desc`, `price`, `image`, `body`, `status`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Vệ sinh máy lạnh treo tường', 've-sinh-may-lanh-treo-tuong', 'Chúng tôi kính gửi đến quý khách hàng chương trình khuyến mãi dịch vụ vệ sinh máy lạnh treo tường 1 - 1.5HP tháng 05/2023.', 200000, 'services/June2023/AEWh6HrC3mFgN1HdWlUZ.jpg', '<p>Khuyến m&atilde;i của dịch vụ Vệ Sinh M&aacute;y Lạnh sẽ được &aacute;p dụng to&agrave;n quốc từ ng&agrave;y 01/03/23 đến 31/03/2023.</p>\r\n<ul>\r\n<li>Đơn gi&aacute; đ&atilde; bao gồm VAT.</li>\r\n<li>C&aacute;c trường hợp cục n&oacute;ng lắp cao&nbsp;<strong>tr&ecirc;n 4m</strong>&nbsp;th&igrave; kh&aacute;ch h&agrave;ng hỗ trợ thu&ecirc; thang leo hoặc d&agrave;n gi&aacute;o nếu c&oacute; ph&aacute;t sinh.</li>\r\n<li>Kh&ocirc;ng &aacute;p dụng cho h&agrave;ng NỘI ĐỊA.</li>\r\n<li>Những ph&aacute;t sinh ngo&agrave;i quy tr&igrave;nh vệ sinh sẽ được b&aacute;o gi&aacute; chi ph&iacute; như: thay thế, sửa chữa, di dời, th&aacute;o lắp</li>\r\n</ul>', 'ACTIVE', NULL, '2023-06-02 01:06:00', '2023-06-06 01:24:40'),
(2, 'Vệ sinh máy lạnh âm trần', 've-sinh-may-lanh-am-tran', 'Hiện nay, máy lạnh âm trần được sử dụng phổ biến tại các nhà hàng – khách sạn, văn phòng công ty, căn hộ lớn – cao cấp, cửa hàng kinh doanh…', 135000, 'services/June2023/mHYCzUozEOHuSsfpR7sn.jpg', '<h2>Quy tr&igrave;nh l&agrave;m vệ sinh m&aacute;y lạnh &acirc;m trần</h2>\r\n<h3>Vệ sinh d&agrave;n lạnh</h3>\r\n<ul>\r\n<li>Th&aacute;o vỏ v&agrave; mặt nạ m&aacute;y để lau ch&ugrave;i, n&ecirc;n th&aacute;o bo mắt nhận t&iacute;n hiệu v&agrave; b&agrave;n ph&iacute;m điều khiển ra v&igrave; để giảm nguy cơ tiếp x&uacute;c với nước sẽ l&agrave;m chập mạch điện.</li>\r\n<li>Th&aacute;o bo mạch điều khiển, vệ sinh v&agrave; sấy hong kh&ocirc; bo mạch.</li>\r\n<li>R&uacute;t n&uacute;m xả đ&aacute;y của m&aacute;ng nước để nước c&ograve;n đọng lại tr&ecirc;n m&aacute;ng tho&aacute;t xuống hết nhằm tr&aacute;nh việc nước sẽ xối xuống ph&iacute;a dưới l&agrave;m ướt s&agrave;n, ướt đồ vật. Sau đ&oacute;, th&aacute;o m&aacute;ng hứng nước xuống để l&agrave;m vệ sinh.</li>\r\n<li>Th&aacute;o quạt d&agrave;n lạnh để vệ sinh ph&iacute;a ngo&agrave;i, đồng thời kiểm tra bạc đạn v&agrave; tra dầu cho quạt.</li>\r\n<li>Treo bạt hứng nước để vệ sinh d&agrave;n lạnh bằng nước &aacute;p lực cao, d&ugrave;ng c&aacute;c chất tẩy rửa nếu kh&ocirc;ng thể vệ sinh c&aacute;c chất bẩn b&aacute;m tr&ecirc;n d&agrave;n bằng nước thường.</li>\r\n<li>Điều chỉnh &aacute;p lực nước đủ mạnh, ph&ugrave; hợp với t&igrave;nh trạng b&aacute;m bụi của d&agrave;n lạnh v&agrave; phải vệ sinh thật kỹ để c&oacute; thể l&agrave;m sạch ho&agrave;n to&agrave;n d&agrave;n lạnh do d&agrave;n m&aacute;y &acirc;m trần thường rất d&agrave;y, bơm nước yếu sẽ kh&oacute; l&agrave;m tr&ocirc;i hết c&aacute;c chất cặn b&aacute;m ở đấy.</li>\r\n<li>Th&ocirc;ng đường ống tho&aacute;t nước.</li>\r\n<li>Lau kh&ocirc; v&agrave; lắp lại d&agrave;n m&aacute;y theo quy tr&igrave;nh bộ phần n&agrave;o th&aacute;o trước.</li>\r\n</ul>', 'ACTIVE', NULL, '2023-06-02 01:10:00', '2023-06-06 01:01:19'),
(3, 'Bảo dưỡng máy lọc nước', 'bao-duong-may-loc-nuoc', 'Khi sử dụng dịch vụ Bảo Dưỡng Máy Lọc Nước, khách hàng ở các tỉnh áp dụng chương trình khuyến mãi sẽ được giảm giá 20%/máy.', 535000, 'services\\June2023\\JeZx1pBPHi5x6GLdDvdC.jpg', '<h3>3. Lưu &yacute;&nbsp;khi đặt dịch vụ&nbsp;Bảo Dưỡng M&aacute;y Lọc Nước</h3>\r\n<p>Bạn h&atilde;y tham khảo c&aacute;c tỉnh được &aacute;p dụng v&agrave; kh&ocirc;ng &aacute;p dụng chương tr&igrave;nh khuyến m&atilde;i ở tr&ecirc;n để nhận được lợi &iacute;ch tốt nhất khi đặt dịch vụ Bảo Dưỡng M&aacute;y Lọc Nước nh&eacute;!</p>\r\n<p>1. Đơn gi&aacute; đ&atilde; bao gồm VAT.</p>\r\n<p>2. Kh&ocirc;ng &aacute;p dụng cho h&agrave;ng NỘI ĐỊA.</p>\r\n<p>3. Những ph&aacute;t sinh ngo&agrave;i quy tr&igrave;nh vệ sinh sẽ được b&aacute;o gi&aacute; chi ph&iacute; như: thay thế, sửa chữa, di dời, th&aacute;o lắp.</p>', 'ACTIVE', NULL, '2023-06-02 01:12:00', '2023-06-03 01:07:41');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Tổng kho điện máy 2T', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Hàng hoá tại Tổng Kho Điện Máy 2T vô cùng đa dạng, từ các nhóm hàng lớn như Tivi, Tủ Lạnh, Máy Giặt, Máy Lạnh…', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', 'settings\\June2023\\bUfRSXZ3H8JYa9GLe8nG.png', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Voyager', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin'),
(11, 'site.working_time', 'working_time', 'Từ 8h00 đến 21h00', NULL, 'text', 6, 'Site'),
(12, 'site.map_contact', 'map_contact', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3709.6872849043875!2d105.83230167603712!3d21.598126367978292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313526e362849c9d%3A0xf40d37e385db4cfc!2zMTIgxJDGsOG7nW5nIELhuq9jIFPGoW4sIEjDoG5nIFbEg24gVGjhu6UwLCBUaMOgbmggcGjhu5EgVGjDoWkgTmd1ecOqbiwgVGjDoWkgTmd1ecOqbiwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1685930224580!5m2!1svi!2s\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', NULL, 'text', 7, 'Site'),
(13, 'site.address', 'address', '586 đường CMT8 - P. Gia Sàng -TP. Thái Nguyên', NULL, 'text', 8, 'Site'),
(14, 'site.phone', 'phone', '0975.508.128 - 0979.508.128', NULL, 'text', 9, 'Site'),
(15, 'site.email', 'email', 'tongkhodienmay2t@gmail.com', NULL, 'text', 10, 'Site'),
(16, 'site.website', 'website', 'https://tongkhodienmay2t.com/', NULL, 'text', 11, 'Site'),
(17, 'site.description_footer', 'description_footer', 'Bạn đang gặp phải vấn đề về điện máy và cần một đơn vị uy tín để sửa chữa và bảo dưỡng? Hãy để chúng tôi giúp bạn!', NULL, 'text_area', 12, 'Site'),
(18, 'site.breadcrumb', 'breadcrumb', 'settings/June2023/X0CuhXfPEF4WQNNOHUyb.jpg', NULL, 'image', 13, 'Site'),
(19, 'site.phone_contact', 'phone_contact', '0975508128', NULL, 'text', 14, 'Site');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2023-06-01 19:44:56', '2023-06-01 19:44:56'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2023-06-01 19:44:56', '2023-06-01 19:44:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users\\June2023\\EVK0whsdjKYc9u3KqczL.png', NULL, '$2y$10$a9xrXCN4ZaPzlPVsmQ8A7eRyjWeNFYS5mHiN83YRv78IxdffOl65m', '61Bx0CfNq6puVczLJg1YkqeZ97KNCaEKCYxU8190zkkbveMChRBuUOygY0iY', '{\"locale\":\"vi\"}', '2023-06-01 19:44:56', '2023-06-02 00:55:59');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advises`
--
ALTER TABLE `advises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advises`
--
ALTER TABLE `advises`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
