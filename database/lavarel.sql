-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2015 at 09:22 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lavarel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL,
  `cat_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cat_status` int(11) NOT NULL,
  `cat_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `cat_status`, `cat_url`) VALUES
(1, 'Codeigiter', 0, 'codeigniter'),
(2, 'Đồ họa', 1, 'codeigniter'),
(3, 'Laravel', 1, 'laravel'),
(4, 'Thiết kế Website', 1, 'thiet-ke-website'),
(5, 'Yii', 1, 'yii'),
(6, 'Yii2', 1, 'yii2');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_08_17_070828_create_news_table', 1),
('2015_08_17_071107_create_categories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL,
  `news_tittle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `news_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `news_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `news_status` int(11) NOT NULL,
  `news_detail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `news_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_tittle`, `news_category`, `news_image`, `news_status`, `news_detail`, `news_url`) VALUES
(1, 'Học thiết kế web cấp tốc', '1', 'Koala.jpg', 1, '<p>Học thiết kế web cho người không biết lập trình” là khóa học được thiết kế đặc biệt dành cho những người không biết &nbsp;lập trình, kỹ thuật máy tính… sử dụng CMS</p><p>Học thiết kế web cho người không biết lập trình” là khóa học được thiết kế đặc biệ', 'hoc-thiet-ke-web-cap-toc'),
(2, 'Học thiết kế website để làm gì?', '2', 'Penguins.jpg', 0, '<p style="text-align: start; margin-bottom: 0px; padding: 5px 0px; outline: none; z-index: 1;"></p><p style="color: rgb(51, 51, 51);">Ngày nay, công nghệ thông tin và Internet đã tạo nên những thay đổi sâu sắc trong cách thức xử lý công việc của chúng ta.', 'hoc-thiet-ke-website-de-lam-gi'),
(3, 'Bootrap 3', '3', 'Desert.jpg', 1, 'Bootstrap là Front-end framework, là một bộ sưu tập miễn phí các công cụ để tạo ra các trang web và các ứng dụng web. Nó chứa HTML và CSS dựa trên các mẫu thiết kế cho kiểu chữ, hình thức, các nút, chuyển hướng và các thành phần giao diện khác, cũng như m', 'bootrap-3'),
(4, 'Học đồ họa như thế nào?', '4', 'Hydrangeas.jpg', 1, '<p>Ngày nay, công nghệ thông tin và Internet đã tạo nên những thay đổi sâu sắc trong cách thức xử lý công việc của chúng ta. Trong doanh nghiệp, sự thay đổi lớn nhất, dễ nhận thấy nhất.</p><p>Ngày nay, công nghệ thông tin và Internet đã tạo nên những thay', 'hoc-do-hoa-nhu-the-nao'),
(5, 'Laravel là gì?', '5', 'Hydrangeas.jpg', 1, '<p>Laravel được “sinh” ra vào tháng 04-2011 và “cha đẻ” của nó là Taylor Otwell. Nó là 1 framework khá mới mẻ nhưng bù lại nó có “hướng dẫn sử dụng” ( Document ) khá đầy đủ, rỏ ràng và dễ hiểu và nhiều ưu điểm hấp dẫn. Nếu bạn đã từng làm việc với các fra', 'laravel-la-gi'),
(6, 'Hướng dẫn học Codeigniter', '6', 'Jellyfish.jpg', 1, '<p>Codeigniter Framework được xem là một PHP framework phổ biến và dễ tiếp cận nhất so với các PHP framework hiện hành. Codeigniter được xây dựng và ra mắt vào ngày 28-02-2006. Trải qua nhiều lần cải biên và phát triển, hiện phiên bản mới nhất tính cho tớ', 'huong-dan-hoc-codeigniter'),
(7, 'Lập trình PHP', '1', 'Tulips.jpg', 1, 'PHP (viết tắt hồi quy "PHP: Hypertext Preprocessor") là một ngôn ngữ lập trình kịch bản hay một loại mã lệnh chủ yếu được dùng để phát triển các ứng dụng viết cho máy chủ, mã nguồn mở, dùng cho mục đích tổng quát. Nó rất thích hợp với web và có thể dễ dàn', 'lap-trinh-php'),
(8, 'Yii Framework', '2', 'Koala.jpg', 1, '<p>Yii là 1 PHP Framework mã nguồn mở và hoàn toàn miễn phí, có hiệu năng cao, giúp bạn phát triển tốt nhất các ứng dụng Web 2.0. Yii cho phép tái sử dụng tối đa các thành phần của ứng dụng để tăng tốc độ viết ứng dụng.</p><p>Yii là 1 PHP Framework mã ngu', 'yii-framework'),
(9, 'Mô Hình MVC', '3', 'Penguins.jpg', 1, '<p><span style="color: rgb(68, 68, 68); font-family: arial; font-size: 13px; line-height: 24px;">Mô hình MVC (Model - View - Controller) là một kiến trúc phần mềm hay mô hình thiết kế được sử dụng trong kỹ thuật phần mềm. Nó giúp cho các developer tách ứn', 'mo-hinh-mvc');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'vietlh18', 'vietlh18@gmail.com', '$2y$10$sCvfaOD8ZfuvtyjWwkQlUuuXI6SWqcosLMOtVH2mjsQbIdU3hw21e', 1, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'vietlh19', 'vietlh19@gmail.com', '$2y$10$Br0D6h7WW5uSM7KdgYK/FOchX1MCSSxdRuwb9w33b2FQpuKElVFUi', 1, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'vietlh20', 'vietlh20@gmail.com', '$2y$10$XHsz3tt/DLjkj2DbajhEyOHJ16MX5AHEDPzQnay/aPBpCS0cR4H6W', 2, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'vietlh21', 'vietlh21@gmail.com', '$2y$10$j3NjujDMdY4NDc6tFNzaT.HGMnundyamO9x7aEj6tGPZ722pYjoFu', 2, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'vietlh22', 'vietlh2@gmail.com', '$2y$10$A0DXpOvNR5o01awP9gMvduX0Gm0tgX5ljtIHi2muE1qXccb4okO2S', 2, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'vietlh23', 'vietlh23@gmail.com', '$2y$10$qRAsMP3uHWyxR268TDSgAedIXQ89PZQWsy6cQGjPpgv8QmfQ09QJC', 2, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
