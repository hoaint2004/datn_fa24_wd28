-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 17, 2024 at 04:10 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datn_fa24_wd28`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `order_datetime` datetime NOT NULL,
  `total_amount` int NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `order_datetime`, `total_amount`, `status`, `shipping_address`, `created_at`, `updated_at`) VALUES
(1, 11111111, '2024-10-15 03:47:05', 23223, 'Cô gái biết chọn giày cho bạn có thể là một cô gái đặc biệt, tuy nhiên, cô gái biết làm cho bạn yêu thích từng bước đi mới mới thực sự đặc biệt.', 'Số 31\r\n\r\nTừ khu dân cư Tân Quy - khu dân cư Bình Lợi', NULL, NULL),
(2, 23242, '2024-10-15 03:47:05', 32423, 'Tình yêu giống như một đôi giày yêu thích – khi bạn tìm thấy, bạn sẽ không bao giờ muốn buông nó ra.', 'Số 31\r\n\r\nTừ khu dân cư Tân Quy - khu dân cư Bình Lợi', NULL, NULL),
(3, 333, '2024-10-15 03:48:42', 3342, 'Yêu là như một cặp giày hoàn hảo, chúng phải vừa vặn và đi cùng nhau suốt quãng đường đời. – Stt về đôi giày vừa chân', 'Số 36\r\n\r\nTừ Bến Thành đến Thời An', NULL, NULL),
(4, 23242, '2024-10-15 03:48:42', 32423, 'Chân đi dép trái, yêu anh là phải', 'Số 36\r\n\r\nTừ Bến Thành đến Thời An', NULL, NULL),
(5, 11111111, '2024-10-15 03:49:31', 23223, 'Việc tìm kiếm tình yêu giống như việc tìm đôi giày hoàn hảo – bạn cần bỏ thời gian để tìm ra đúng cái.', 'Số 36\r\n\r\nTừ Bến Thành đến Thời An', NULL, NULL),
(6, 23242, '2024-10-15 03:49:31', 32423, 'Những đôi giày yêu thích và tình yêu đích thực đều có khả năng biến một ngày bình thường thành đặc biệt.', 'Số 36\r\n\r\nTừ Bến Thành đến Thời An', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
