-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 18, 2018 lúc 04:47 AM
-- Phiên bản máy phục vụ: 10.1.33-MariaDB
-- Phiên bản PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `do_an_tot_nghiep`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_customer` int(11) DEFAULT NULL,
  `date_order` date DEFAULT NULL,
  `total` float DEFAULT NULL COMMENT 'tổng tiền',
  `payment` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'hình thức thanh toán',
  `note` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `bills`
--

INSERT INTO `bills` (`id`, `id_customer`, `date_order`, `total`, `payment`, `note`, `created_at`, `updated_at`) VALUES
(14, 14, '2017-03-23', 160000, 'COD', 'k', '2017-03-23 04:46:05', '2017-03-23 04:46:05'),
(13, 13, '2017-03-21', 400000, 'ATM', 'Vui lòng giao hàng trước 5h', '2017-03-21 07:29:31', '2017-03-21 07:29:31'),
(12, 12, '2017-03-21', 520000, 'COD', 'Vui lòng chuyển đúng hạn', '2017-03-21 07:20:07', '2017-03-21 07:20:07'),
(11, 11, '2017-03-21', 420000, 'COD', 'không chú', '2017-03-21 07:16:09', '2017-03-21 07:16:09'),
(15, 15, '2017-03-24', 220000, 'COD', 'e', '2017-03-24 07:14:32', '2017-03-24 07:14:32'),
(16, 16, '2018-09-09', 300000, 'COD', 'aaaaa', '2018-09-09 08:57:29', '2018-09-09 08:57:29'),
(17, 17, '2018-09-09', 440000, 'COD', 'Aa', '2018-09-09 09:33:13', '2018-09-09 09:33:13'),
(18, 18, '2018-09-10', 160000, 'COD', '256+', '2018-09-10 07:17:54', '2018-09-10 07:17:54'),
(19, 19, '2018-09-11', 270000, 'COD', 'adsd', '2018-09-11 00:37:06', '2018-09-11 00:37:06'),
(20, 20, '2018-09-11', 380000, 'COD', 'zsxzx', '2018-09-11 02:33:04', '2018-09-11 02:33:04'),
(21, 21, '2018-09-11', 120000, 'COD', 'anh đàng', '2018-09-11 02:40:39', '2018-09-11 02:40:39'),
(22, 22, '2018-09-17', 130000, 'COD', '123456', '2018-09-17 09:38:12', '2018-09-17 09:38:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_bill` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `quantity` int(11) NOT NULL COMMENT 'số lượng',
  `unit_price` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `id_bill`, `id_product`, `quantity`, `unit_price`, `created_at`, `updated_at`) VALUES
(18, 15, 62, 5, 220000, '2017-03-24 07:14:32', '2017-03-24 07:14:32'),
(17, 14, 2, 1, 160000, '2017-03-23 04:46:05', '2017-03-23 04:46:05'),
(16, 13, 60, 1, 200000, '2017-03-21 07:29:31', '2017-03-21 07:29:31'),
(15, 13, 59, 1, 200000, '2017-03-21 07:29:31', '2017-03-21 07:29:31'),
(14, 12, 60, 2, 200000, '2017-03-21 07:20:07', '2017-03-21 07:20:07'),
(13, 12, 61, 1, 120000, '2017-03-21 07:20:07', '2017-03-21 07:20:07'),
(12, 11, 61, 1, 120000, '2017-03-21 07:16:09', '2017-03-21 07:16:09'),
(11, 11, 57, 2, 150000, '2017-03-21 07:16:09', '2017-03-21 07:16:09'),
(19, 16, 37, 1, 300000, '2018-09-09 08:57:29', '2018-09-09 08:57:29'),
(20, 17, 2, 2, 160000, '2018-09-09 09:33:13', '2018-09-09 09:33:13'),
(21, 17, 1, 1, 120000, '2018-09-09 09:33:13', '2018-09-09 09:33:13'),
(22, 18, 7, 1, 160000, '2018-09-10 07:17:54', '2018-09-10 07:17:54'),
(23, 19, 48, 1, 140000, '2018-09-11 00:37:06', '2018-09-11 00:37:06'),
(24, 19, 42, 1, 130000, '2018-09-11 00:37:06', '2018-09-11 00:37:06'),
(25, 20, 47, 1, 140000, '2018-09-11 02:33:04', '2018-09-11 02:33:04'),
(26, 20, 46, 1, 120000, '2018-09-11 02:33:04', '2018-09-11 02:33:04'),
(27, 20, 44, 1, 120000, '2018-09-11 02:33:04', '2018-09-11 02:33:04'),
(28, 21, 43, 1, 120000, '2018-09-11 02:40:39', '2018-09-11 02:40:39'),
(29, 22, 42, 1, 130000, '2018-09-17 09:38:12', '2018-09-17 09:38:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address_no` tinyint(100) NOT NULL DEFAULT '0',
  `phone_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `name`, `gender`, `email`, `address`, `address_no`, `phone_number`, `note`, `created_at`, `updated_at`) VALUES
(15, 'ê', 'Nữ', 'huongnguyen@gmail.com', 'e', 0, 'e', 'e', '2017-03-24 07:14:32', '2017-03-24 07:14:32'),
(14, 'hhh', 'nam', 'huongnguyen@gmail.com', 'Lê thị riêng', 0, '99999999999999999', 'k', '2017-03-23 04:46:05', '2017-03-23 04:46:05'),
(13, 'Hương Hương', 'Nữ', 'huongnguyenak96@gmail.com', 'Lê Thị Riêng, Quận 1', 0, '23456789', 'Vui lòng giao hàng trước 5h', '2017-03-21 07:29:31', '2017-03-21 07:29:31'),
(12, 'Khoa phạm', 'Nam', 'khoapham@gmail.com', 'Lê thị riêng', 0, '1234567890', 'Vui lòng chuyển đúng hạn', '2017-03-21 07:20:07', '2017-03-21 07:20:07'),
(11, 'Hương Hương', 'Nữ', 'huongnguyenak96@gmail.com', 'Lê Thị Riêng, Quận 1', 0, '234567890-', 'không chú', '2017-03-21 07:16:09', '2017-03-21 07:16:09'),
(16, 'SÂSASA', 'nam', 'tsoolauj1234@gmail.com', 'CCCVZC', 0, '123465787', 'aaaaa', '2018-09-09 08:57:29', '2018-09-09 08:57:29'),
(17, 'Cu Chung', 'nam', 't@gmail.com', 'Mường Báng - Tủa Chùa - Điện Biên', 0, '916406413', 'Aa', '2018-09-09 09:33:13', '2018-09-09 09:33:13'),
(18, 'Cu Chung', 'nam', 't@gmail.com', 'Mường Báng - Tủa Chùa - Điện Biên', 0, '916406413', '256+', '2018-09-10 07:17:54', '2018-09-10 07:17:54'),
(19, 'Cu Chung', 'nam', 't@gmail.com', 'Mường Báng - Tủa Chùa - Điện Biên', 0, '916406413', 'adsd', '2018-09-11 00:37:06', '2018-09-11 00:37:06'),
(20, 'Cu Chung', 'nam', 't@gmail.com', 'Mường Báng - Tủa Chùa - Điện Biên', 0, '916406413', 'zsxzx', '2018-09-11 02:33:04', '2018-09-11 02:33:04'),
(21, 'Cu Chung', 'nam', 't@gmail.com', 'Mường Báng - Tủa Chùa - Điện Biên', 0, '916406413', 'anh đàng', '2018-09-11 02:40:39', '2018-09-11 02:40:39'),
(22, 'Cu Chung', 'nam', 'haha@gmail.com', 'Mường Báng - Tủa Chùa - Điện Biên', 0, '916406413', '123456', '2018-09-17 09:38:11', '2018-09-17 09:38:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `notes`, `created_at`, `updated_at`) VALUES
(1, 'Cu', 'chung@gmail.com', 'dâdasd', '2018-09-08 23:23:34', '2018-09-08 23:23:34'),
(2, 'ahah', 't@gmail.com', 'Gửi bạn địa chỉ', '2018-09-08 23:42:05', '2018-09-08 23:42:05'),
(3, 'Cu', 'chung@gmail.com', 'ạks', '2018-09-09 13:47:40', '2018-09-09 13:47:40'),
(4, 'Cu', 'chung@gmail.com', 'QSấ S', '2018-09-10 14:23:53', '2018-09-10 14:23:53'),
(5, 'sd', 't@gmail.com', 'v', '2018-09-10 15:43:20', '2018-09-10 15:43:20'),
(6, 'Cu', 't@gmail.com', 'sd', '2018-09-11 00:43:38', '2018-09-11 00:43:38'),
(7, 'a', 't@gmail.com', '15456', '2018-09-11 00:47:24', '2018-09-11 00:47:24'),
(8, 'cu', 't@gmail.com', 'â', '2018-09-11 01:32:21', '2018-09-11 01:32:21'),
(9, 'Cu', 't@gmail.com', 'adsd', '2018-09-17 07:42:10', '2018-09-17 07:42:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_09_09_062116_feedback', 2),
(4, '2018_09_10_143213_admin', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'tiêu đề',
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'nội dung',
  `image` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'hình',
  `new` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`, `new`, `created_at`, `updated_at`) VALUES
(1, 'Mùa trung thu năm nay, Hỷ Lâm Môn muốn gửi đến quý khách hàng sản phẩm mới xuất hiện lần đầu tiên tại Việt nam \"Bánh trung thu Bơ Sữa HongKong\".', 'Những ý tưởng dưới đây sẽ giúp bạn sắp xếp tủ quần áo trong phòng ngủ chật hẹp của mình một cách dễ dàng và hiệu quả nhất. ', 'bai1.jpg', 0, '2018-09-18 02:25:18', '0000-00-00 00:00:00'),
(2, 'Tư vấn cải tạo phòng ngủ nhỏ sao cho thoải mái và thoáng mát', 'Chúng tôi sẽ tư vấn cải tạo và bố trí nội thất để giúp phòng ngủ của chàng trai độc thân thật thoải mái, thoáng mát và sáng sủa nhất. ', 'bai2.jpg', 0, '2018-09-18 02:25:24', '0000-00-00 00:00:00'),
(3, 'Đồ gỗ nội thất và nhu cầu, xu hướng sử dụng của người dùng', 'Đồ gỗ nội thất ngày càng được sử dụng phổ biến nhờ vào hiệu quả mà nó mang lại cho không gian kiến trúc. Xu thế của các gia đình hiện nay là muốn đem thiên nhiên vào nhà ', 'bai3.jpg', 0, '2018-09-18 02:25:31', '0000-00-00 00:00:00'),
(4, 'Hướng dẫn sử dụng bảo quản đồ gỗ, nội thất.', 'Ngày nay, xu hướng chọn vật dụng làm bằng gỗ để trang trí, sử dụng trong văn phòng, gia đình được nhiều người ưa chuộng và quan tâm. Trên thị trường có nhiều sản phẩm mẫu ', 'bai4.jpg', 0, '2018-09-18 02:25:37', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_type` int(10) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `unit_price` float DEFAULT NULL,
  `promotion_price` float DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `new` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `id_type`, `description`, `unit_price`, `promotion_price`, `image`, `unit`, `new`, `created_at`, `updated_at`) VALUES
(5, 'Bánh Crepe DâuCÁ SABA NƯ', 5, 'ngon', 160000, 0, '6.png', 'hộp', 0, '2016-10-26 03:00:16', '2018-09-17 04:42:13'),
(6, 'CÁ SABA', 5, '', 200000, 180000, '7.png', 'hộp', 0, '2016-10-26 03:00:16', '2016-10-24 22:11:00'),
(7, 'CÁ HỒI NƯỚNG SỐT BƠ', 5, '', 160000, 0, 'a7.JPG', 'hộp', 1, '2016-10-26 03:00:16', '2016-10-24 22:11:00'),
(8, 'CÁ HỒI NƯỚNG SỐT', 5, '', 160000, 150000, '9.png', 'hộp', 0, '2016-10-26 03:00:16', '2016-10-24 22:11:00'),
(9, 'CÁ HỒI NƯỚNG ', 5, '', 160000, 150000, '10.png', 'hộp', 0, '2016-10-26 03:00:16', '2016-10-24 22:11:00'),
(11, 'CÁ HỒI ', 3, '', 250000, 0, '11.png', 'cái', 6, '2016-10-12 02:00:00', '2016-10-27 02:24:00'),
(12, 'SỐT BƠ TỎI', 3, '', 200000, 180000, '12.png', '', 0, '2016-10-12 02:00:00', '2016-10-27 02:24:00'),
(13, 'CƠM CHAY NHẬT BẢN', 3, '', 300000, 280000, 't1.JPG', 'cái', 1, '2016-10-12 02:00:00', '2016-10-27 02:24:00'),
(18, 'CHAY NHẬT', 2, '', 180000, 0, 't5.JPG', 'hộp', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(19, 'CƠM CÁ KHO SỐT NHẬT', 2, '', 150000, 0, 't6.JPG', 'hộp', 1, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(20, 'CƠM CÁ KHO SỐT', 2, '', 150000, 0, 't8.JPG', 'hộp', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(21, 'CƠM CÁ KHO', 2, '', 160000, 150000, 'a1.JPG', 'cái', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(22, 'CƠM CÁ ', 1, '', 160000, 150000, 'a2.JPG', 'hộp', 1, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(23, 'CƠM THỊT LỢN KHO SỐT NHẬT', 1, '', 180000, 0, 'a3.JPG', 'hộp', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(24, 'CƠM THỊT LỢN KHO SỐT', 1, '', 180000, 0, 'a4.JPG', 'hộp', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(25, 'CƠM THỊT LỢN', 1, '', 80000, 70000, 'a5.JPG', 'hộp', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(26, 'CƠM THỊT', 1, 'Cơm Sushi, Thanh Cua, Dưa Chuột, Trứng, Rau Xanh, Trứng Tôm và Mayonnaise', NULL, NULL, 'a6.JPG', 'hộp', 2, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(27, 'CƠM BÒ NƯỚNG', 1, 'Cơm sushi, Thanh Cua, Dưa Chuột, Rau Xanh, Củ Cải và Mayonnaise', NULL, NULL, 'a8.JPG', 'hộp', 2, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(28, 'CƠM BÒ', 1, 'Cá Saba kho sốt Nhật, Cơm Trắng nén, Rau Củ Luộc chấm vừng, Súp Miso và Tráng miệng', NULL, NULL, 'a9.JPG', 'hộp', 2, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(29, 'Bánh mì Loaf I', 1, 'Mỹ Ramen Xào sốt Nhật, Cơm cuộn chay, Cà Tím sốt, Đậu phụ Nhật, Súp Miso và Tráng miệng', NULL, NULL, 'a10.JPG', 'hộp', 2, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(30, ' BÒ NƯỚNG', 4, 'Cá Saba nướng muối, Cơm trắng, Bánh Korokke, Salad, Súp Miso và Tráng miệng', NULL, NULL, 'a11.JPG', 'cái', 2, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(31, 'CƠM NƯỚNG', 4, 'Cá Saba kho sốt Nhật, Cơm Trắng nén, Rau Củ Luộc chấm vừng, Súp Miso và Tráng miệng', NULL, NULL, 'a13.JPG', 'cái', 2, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(32, 'CƠM GÀ SỐT NẤM', 4, 'Cá Saba nướng muối, Cơm trắng, Bánh Korokke, Salad, Súp Miso và Tráng miệng', NULL, NULL, 'a12.JPG', 'cái', 2, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(33, 'CƠM GÀ SỐT', 4, 'Mỹ Ramen Xào sốt Nhật, Cơm cuộn chay, Cà Tím sốt, Đậu phụ Nhật, Súp Miso và Tráng miệng', NULL, NULL, 'a14.JPG', 'cái', 2, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(34, 'CƠM GÀ', 4, '', 280000, 0, 'a15.JPG', 'cái', 1, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(35, 'GÀ SỐT NẤM', 4, '', 320000, 300000, 'a16.JPG', 'cái', 1, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(36, 'SỐT NẤM', 4, '', 320000, 300000, 'a17.JPG', 'cái', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(37, 'CƠM GÀ  NẤM', 4, '', 320000, 300000, 'a18.JPG', 'cái', 1, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(38, 'CƠM NẤM', 4, '', 350000, 330000, 'a19.JPG', 'cái', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(39, 'SUSHI RAU CỦ TẨM VỪNG', 4, '', 350000, 330000, 'a20.JPG', 'cái', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(40, 'SUSHI RAU CỦ TẨM', 4, '', 350000, 330000, 'a21.JPG', 'cái', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(41, 'SUSHI RAU CỦ ', 4, '', 350000, 330000, 't9.JPG', 'cái', 0, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(42, 'SUSHI RAU ', 6, 'Thịt bò xay, ngô, sốt BBQ, phô mai mozzarella', 150000, 130000, 't10.JPG', 'cái', 4, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(43, ' CỦ TẨM VỪNG', 6, 'Sốt cà chua, ham , dứa, pho mai mozzarella', 120000, 0, 't11.JPG', 'cái', 4, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(44, 'RAU CỦ VỪNG', 6, 'Gà hun khói,nấm, sốt cà chua, pho mai mozzarella.', 120000, 0, 't12.JPG', 'cái', 4, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(45, 'SUSHI RAU VỪNG', 6, 'Xúc xích klobasa, Nấm, Ngô, sốtcà chua, pho mai Mozzarella.', 120000, 0, 't13.JPG', 'cái', 5, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(46, 'SUSHI TRỨNG TÔM', 6, 'Tôm , mực, xào cay,ớt xanh, hành tây, cà chua, phomai mozzarella.', 120000, 0, 't14.JPG', 'cái', 5, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(47, 'All Meaty Pizza', 6, 'Ham, bacon, chorizo, pho mai mozzarella.', 140000, 0, '	\r\n13.png', 'cái', 6, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(48, 'SUSHI TRỨNG', 6, 'Cá Ngừ, sốt Mayonnaise,sốt càchua, hành tây, pho mai Mozzarella', 140000, 0, '	\r\n14.png', 'cái', 6, '2016-10-13 02:20:00', '2016-10-19 03:20:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `link` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `link`, `image`) VALUES
(1, '', 'banner1.png'),
(2, '', 'banner2.png'),
(3, '', 'banner3.png'),
(4, '', 'banner4.png'),
(5, '', 'banner5.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_products`
--

CREATE TABLE `type_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_products`
--

INSERT INTO `type_products` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Bánh mặn', 'Nếu từng bị mê hoặc bởi các loại tarlet ngọt thì chắn chắn bạn không thể bỏ qua những loại tarlet mặn. Ngoài hình dáng bắt mắt, lớp vở bánh giòn giòn cùng với nhân mặn như thịt gà, nấm, thị heo ,… của bánh sẽ chinh phục bất cứ ai dùng thử.', 'banh-man-thu-vi-nhat-1.jpg', NULL, NULL),
(2, 'Bánh ngọt', 'Bánh ngọt là một loại thức ăn thường dưới hình thức món bánh dạng bánh mì từ bột nhào, được nướng lên dùng để tráng miệng. Bánh ngọt có nhiều loại, có thể phân loại dựa theo nguyên liệu và kỹ thuật chế biến như bánh ngọt làm từ lúa mì, bơ, bánh ngọt dạng bọt biển. Bánh ngọt có thể phục vụ những mục đính đặc biệt như bánh cưới, bánh sinh nhật, bánh Giáng sinh, bánh Halloween..', '20131108144733.jpg', '2016-10-12 02:16:15', '2016-10-13 01:38:35'),
(3, 'Bánh trái cây', 'Bánh trái cây, hay còn gọi là bánh hoa quả, là một món ăn chơi, không riêng gì của Huế nhưng khi \"lạc\" vào mảnh đất Cố đô, món bánh này dường như cũng mang chút tinh tế, cầu kỳ và đặc biệt. Lấy cảm hứng từ những loại trái cây trong vườn, qua bàn tay khéo léo của người phụ nữ Huế, món bánh trái cây ra đời - ngọt thơm, dịu nhẹ làm đẹp lòng biết bao người thưởng thức.', 'banhtraicay.jpg', '2016-10-18 00:33:33', '2016-10-15 07:25:27'),
(4, 'Bánh kem', 'Với người Việt Nam thì bánh ngọt nói chung đều hay được quy về bánh bông lan – một loại tráng miệng bông xốp, ăn không hoặc được phủ kem lên thành bánh kem. Tuy nhiên, cốt bánh kem thực ra có rất nhiều loại với hương vị, kết cấu và phương thức làm khác nhau chứ không chỉ đơn giản là “bánh bông lan” chung chung đâu nhé!', 'banhkem.jpg', '2016-10-26 03:29:19', '2016-10-26 02:22:22'),
(5, 'Bánh crepe', 'Crepe là một món bánh nổi tiếng của Pháp, nhưng từ khi du nhập vào Việt Nam món bánh đẹp mắt, ngon miệng này đã làm cho biết bao bạn trẻ phải “xiêu lòng”', 'crepe.jpg', '2016-10-28 04:00:00', '2016-10-27 04:00:23'),
(6, 'Bánh Pizza', 'Pizza đã không chỉ còn là một món ăn được ưa chuộng khắp thế giới mà còn được những nhà cầm quyền EU chứng nhận là một phần di sản văn hóa ẩm thực châu Âu. Và để được chứng nhận là một nhà sản xuất pizza không hề đơn giản. Người ta phải qua đủ mọi các bước xét duyệt của chính phủ Ý và liên minh châu Âu nữa… tất cả là để đảm bảo danh tiếng cho món ăn này.', 'pizza.jpg', '2016-10-25 17:19:00', NULL),
(7, 'Bánh su kem', 'Bánh su kem là món bánh ngọt ở dạng kem được làm từ các nguyên liệu như bột mì, trứng, sữa, bơ.... đánh đều tạo thành một hỗn hợp và sau đó bằng thao tác ép và phun qua một cái túi để định hình thành những bánh nhỏ và cuối cùng được nướng chín. Bánh su kem có thể thêm thành phần Sô cô la để tăng vị hấp dẫn. Bánh có xuất xứ từ nước Pháp.', 'sukemdau.jpg', '2016-10-25 17:19:00', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `phone`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Cu Chung', 'tsoolauj1234@gmail.com', '$2y$10$tXktSS/MHp.bhVG9wDJGKOAXkw9w1CGVyQk1hTn6Vm3UvuqvZxaZi', 916406413, 'Mường Báng - Tủa Chùa - Điện Biên', 'wEt8RZm8EeVNddzalRiuo4034aBCQADFzR4MH514v9oYPJnrTaHfarxbgCol', '2018-09-08 22:32:47', '2018-09-08 22:32:47'),
(2, 'Cu Chung', 'haha@gmail.com', '$2y$10$gopXRUacM.Xg8ZK4Xr4OMeuEJKx9zUlp9JVccBJ754M.vUXoqyf/W', 916406413, 'Mường Báng - Tủa Chùa - Điện Biên', 'dSeUPTIRg441IhPsMe3xtfQ0kxSvd7kK4YbHe6rv594C7t2q0SkaGHdefxLl', '2018-09-11 00:48:07', '2018-09-11 00:48:07'),
(5, 'anh chung', 'chung@gmail.com', '121212', 123658997, 'Muong Bang - Tua Chua - Dien Bien', NULL, '2018-09-17 08:38:33', '2018-09-17 08:38:33');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_ibfk_1` (`id_customer`);

--
-- Chỉ mục cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_detail_ibfk_2` (`id_product`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_id_type_foreign` (`id_type`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `type_products`
--
ALTER TABLE `type_products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `type_products`
--
ALTER TABLE `type_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_id_type_foreign` FOREIGN KEY (`id_type`) REFERENCES `type_products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
