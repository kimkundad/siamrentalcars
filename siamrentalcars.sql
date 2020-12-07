-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 07, 2020 at 09:19 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siamrentalcars`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `deposit` int(11) NOT NULL DEFAULT '0',
  `grear` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` int(11) DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_p` int(11) NOT NULL DEFAULT '0',
  `insurance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bags` int(11) NOT NULL DEFAULT '0',
  `branch` int(11) DEFAULT '0',
  `detail` text COLLATE utf8mb4_unicode_ci,
  `service` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '0',
  `views` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `cat_id`, `sub_cat_id`, `price`, `deposit`, `grear`, `code`, `size`, `image`, `total_p`, `insurance`, `bags`, `branch`, `detail`, `service`, `status`, `views`, `created_at`, `updated_at`) VALUES
(3, 'Nissan note', 4, 3, 800, 3000, 'เกียร์อัตโนมัติ', '100', 0, '1565341175.jpg', 4, 'ประกันภัยรถยนต์ประเภท 1', 3, NULL, '<p><span style="color: rgb(102, 102, 102); font-family: Prompt, sans-serif; font-size: 12px; background-color: rgb(255, 255, 255);">เครื่องยนต์ Eco Car ขนาด 1.2 ลิตร เกียร์อัตโนมัติ</span></p>', '<p>- FM Radio</p><p>- USB/AUX</p><p>- MP3/CD</p>', 0, 0, '2019-08-09 08:59:35', '2020-05-04 08:10:09'),
(12, 'Toyota Yaris ATIV 2018 (หรือเทียบเท่า)', 1, 2, 900, 3000, 'เกียร์อัตโนมัติ', 'KOP001', 0, '1583576197.png', 4, 'ประกันภัยรถยนต์ประเภท 1', 2, NULL, '<p><span style="color: rgb(102, 102, 102); font-family: Prompt, sans-serif; font-size: 12px; background-color: rgb(255, 255, 255);">เครื่องยนต์ Eco Car ขนาด 1.2 ลิตร เกียร์อัตโนมัติ</span></p>', '<p>- FM Radio</p><p>- USB/AUX</p><p>- MP3/CD</p>', 1, 0, '2020-03-07 17:16:37', '2020-05-04 07:10:56'),
(13, 'Toyota Yaris 2018 (หรือเทียบเท่า)', 1, 2, 900, 3000, 'เกียร์อัตโนมัติ', 'KOP002', 0, '1583582442.jpg', 4, 'ประกันภัยรถยนต์ประเภท 1', 2, NULL, '<p><span style="color: rgb(102, 102, 102); font-family: Prompt, sans-serif; font-size: 12px; background-color: rgb(255, 255, 255);">เครื่องยนต์ Eco car ขนาด 1.2 ลิตร เกียร์อัตโนมัติ</span></p>', '<p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: Prompt, sans-serif; font-size: 12px; background-color: rgb(255, 255, 255);">- <span style="margin: 0px; padding: 0px; font-family: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif; font-size: 14px;">FM/AM Radio</span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: Prompt, sans-serif; font-size: 12px; background-color: rgb(255, 255, 255);"><span style="margin: 0px; padding: 0px; font-family: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif; font-size: 14px;">- </span><span style="margin: 0px; padding: 0px; font-family: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif; font-size: 14px;">USB/AUX</span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(102, 102, 102); font-family: Prompt, sans-serif; font-size: 12px; background-color: rgb(255, 255, 255);"><span style="margin: 0px; padding: 0px; font-family: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif; font-size: 14px;">- </span><span style="margin: 0px; padding: 0px; font-family: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif; font-size: 14px;"> </span><span style="margin: 0px; padding: 0px; font-family: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif; font-size: 14px;">CD/MP3</span></p>', 1, 0, '2020-03-07 19:00:42', '2020-05-04 04:11:04'),
(14, 'Honda Brio 2017 (หรือเทียบเท่า)', 2, 2, 900, 2000, 'เกียร์อัตโนมัติ', 'KOP003', 0, '1583582726.jpeg', 4, 'ประกันภัยรถยนต์ประเภท 1', 2, NULL, '<p><span style="color: rgb(102, 102, 102); font-family: Prompt, sans-serif; font-size: 12px; background-color: rgb(255, 255, 255);">รถยนต์ Eco car ขนาดเครื่อง 1.2 ลิตร  เกียร์อัตโนมัติ</span></p>', '<p><br></p><table class="table detail" style="margin: 0px 0px 1rem; padding: 0px; width: 672px; max-width: 100%; background-color: rgb(255, 255, 255); color: rgb(102, 102, 102); font-family: Prompt, sans-serif; font-size: 15px;"><tbody style="margin: 0px; padding: 0px;"><tr style="margin: 0px; padding: 0px;"><td style="margin: 0px; padding: 0.55rem; vertical-align: top; border-top-color: rgb(222, 226, 230); font-size: 12px;"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;">- <span style="margin: 0px; padding: 0px; font-family: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif;"> </span><span style="margin: 0px; padding: 0px; font-family: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif;">FM/AM Radio</span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-family: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif;">- </span><span style="margin: 0px; padding: 0px; font-family: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif;">USB/AUX</span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-family: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif;">- </span><span style="margin: 0px; padding: 0px; font-family: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif;">CD/MP3</span></p></td></tr></tbody></table><p><br></p>', 1, 0, '2020-03-07 19:05:26', '2020-03-07 19:52:20'),
(15, 'Toyota Vios 2018 (หรือเทียบเท่า)', 1, 2, 1100, 3000, 'เกียร์อัตโนมัติ', 'KOP004', 0, '1583582952.png', 4, 'ประกันภัยรถยนต์ประเภท 1', 3, NULL, '<p><br></p><table class="table detail" style="margin: 0px 0px 1rem; padding: 0px; width: 672px; max-width: 100%; background-color: rgb(255, 255, 255); color: rgb(102, 102, 102); font-family: Prompt, sans-serif; font-size: 15px;"><tbody style="margin: 0px; padding: 0px;"><tr style="margin: 0px; padding: 0px;"><td style="margin: 0px; padding: 0.55rem; vertical-align: top; border-top-color: rgb(222, 226, 230); font-size: 12px;"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;">รถยนต์ Eco car ขนาดเครื่อง 1.2 ลิตร  เกียร์อัตโนมัติ</p></td></tr></tbody></table>', '<p><br></p><table class="table detail" style="margin: 0px 0px 1rem; padding: 0px; width: 672px; max-width: 100%; background-color: rgb(255, 255, 255); color: rgb(102, 102, 102); font-family: Prompt, sans-serif; font-size: 15px;"><tbody style="margin: 0px; padding: 0px;"><tr style="margin: 0px; padding: 0px;"><td style="margin: 0px; padding: 0.55rem; vertical-align: top; border-top-color: rgb(222, 226, 230); font-size: 12px;"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;">- <span style="margin: 0px; padding: 0px; font-family: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif;"> </span><span style="margin: 0px; padding: 0px; font-family: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif;">FM/AM Radio</span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-family: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif;">- </span><span style="margin: 0px; padding: 0px; font-family: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif;">USB/AUX</span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-family: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif;">- </span><span style="margin: 0px; padding: 0px; font-family: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif;">CD/MP3</span></p></td></tr></tbody></table>', 1, 0, '2020-03-07 19:09:12', '2020-05-04 07:11:24'),
(16, 'Honda Jazz 2018 (หรือเทียบเท่า)', 2, 3, 1100, 2000, 'เกียร์อัตโนมัติ', 'KOP005', 0, '1583585498.jpg', 4, 'ประกันภัยรถยนต์ประเภท 1', 3, NULL, '<p><span lang="TH" style="margin: 0px; padding: 0px; font-family: &quot;Angsana New&quot;, serif; color: rgb(102, 102, 102); background: rgb(255, 255, 255); font-size: 14pt; line-height: 19.9733px;">รถยนต์ขนาดเล็ก</span><span style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; color: rgb(102, 102, 102); background: rgb(255, 255, 255); font-size: 14pt; line-height: 19.9733px;">&nbsp;</span><span lang="TH" style="margin: 0px; padding: 0px; font-family: &quot;Angsana New&quot;, serif; color: rgb(102, 102, 102); background: rgb(255, 255, 255); font-size: 14pt; line-height: 19.9733px;">ขนาดเครื่อง&nbsp;</span><span style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; color: rgb(102, 102, 102); background: rgb(255, 255, 255); font-size: 14pt; line-height: 19.9733px;">1.5&nbsp;</span><span lang="TH" style="margin: 0px; padding: 0px; font-family: &quot;Angsana New&quot;, serif; color: rgb(102, 102, 102); background: rgb(255, 255, 255); font-size: 14pt; line-height: 19.9733px;">ลิตร</span><span style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; color: rgb(102, 102, 102); background: rgb(255, 255, 255); font-size: 14pt; line-height: 19.9733px;">&nbsp;&nbsp;</span><span lang="TH" style="margin: 0px; padding: 0px; font-family: &quot;Angsana New&quot;, serif; color: rgb(102, 102, 102); background: rgb(255, 255, 255); font-size: 14pt; line-height: 19.9733px;">เกียร์อัตโนมัติ</span></p>', '<p><br></p><table class="table detail" style="margin: 0px 0px 1rem; padding: 0px; width: 672px; max-width: 100%; background-color: rgb(255, 255, 255); color: rgb(102, 102, 102); font-family: Prompt, sans-serif; font-size: 15px;"><tbody style="margin: 0px; padding: 0px;"><tr style="margin: 0px; padding: 0px;"><td style="margin: 0px; padding: 0.55rem; vertical-align: top; border-top-color: rgb(222, 226, 230);"><span style="font-size: 14px;">- FM/AM</span><br><p class="MsoNormal" style="font-size: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-family: Helvetica, sans-serif; font-size: 10.5pt; line-height: 14.98px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">- USB/AUX</span><o:p style="margin: 0px; padding: 0px;"></o:p></p><p style="font-size: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;"></p><p class="MsoNormal" style="font-size: 12px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-family: Helvetica, sans-serif; font-size: 10.5pt; line-height: 14.98px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">- CD/MP3</span></p></td></tr></tbody></table>', 1, 0, '2020-03-07 19:51:38', '2020-03-07 19:51:54'),
(17, 'Honda City 2018 (หรือเทียบเท่า)', 2, 3, 1100, 3000, 'เกียร์อัตโนมัติ', 'KOP006', 0, '1583585776.png', 4, 'ประกันภัยรถยนต์ประเภท 1', 3, NULL, '<p><br></p><table class="table detail" style="margin: 0px 0px 1rem; padding: 0px; width: 672px; max-width: 100%; background-color: rgb(255, 255, 255); color: rgb(102, 102, 102); font-family: Prompt, sans-serif; font-size: 15px;"><tbody style="margin: 0px; padding: 0px;"><tr style="margin: 0px; padding: 0px;"><td style="margin: 0px; padding: 0.55rem; vertical-align: top; border-top-color: rgb(222, 226, 230); font-size: 12px;"><p class="MsoNormal" style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;"><span lang="TH" style="margin: 0px; padding: 0px; font-family: "Angsana New", serif; line-height: 19.26px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-size: 18px;">รถยนต์ขนาดเล็ก </span><span lang="TH" style="margin: 0px; padding: 0px; font-family: "Angsana New", serif; line-height: 19.26px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-size: 18px;">ขนาดเครื่อง </span><span style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; line-height: 19.26px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-size: 18px;">1.5 </span><span lang="TH" style="margin: 0px; padding: 0px; font-family: "Angsana New", serif; line-height: 19.26px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-size: 18px;">ลิตร</span><span style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; line-height: 19.26px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-size: 18px;">  </span><span lang="TH" style="margin: 0px; padding: 0px; font-family: "Angsana New", serif; line-height: 19.26px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-size: 18px;">เกียร์อัตโนมัติ</span></p></td></tr></tbody></table>', '<p><br></p><table class="table detail" style="margin: 0px 0px 1rem; padding: 0px; width: 672px; max-width: 100%; background-color: rgb(255, 255, 255); color: rgb(102, 102, 102); font-family: Prompt, sans-serif; font-size: 15px;"><tbody style="margin: 0px; padding: 0px;"><tr style="margin: 0px; padding: 0px;"><td style="margin: 0px; padding: 0.55rem; vertical-align: top; border-top-color: rgb(222, 226, 230); font-size: 12px;"><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;">- <span style="margin: 0px; padding: 0px; font-family: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif;">FM/AM Radio</span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-family: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif;">- </span><span style="margin: 0px; padding: 0px; font-family: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif;">USB/AUX</span></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-family: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif;">- </span><span style="margin: 0px; padding: 0px; font-family: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif;"> </span><span style="margin: 0px; padding: 0px; font-family: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif;">CD/MP3</span></p></td></tr></tbody></table>', 1, 0, '2020-03-07 19:56:16', '2020-05-04 07:12:26'),
(18, 'Toyota Altis 2017 (หรือเทียบเท่า)', 1, 4, 1600, 3000, 'เกียร์อัตโนมัติ', 'KOP007', 0, '1583586180.png', 4, 'ประกันภัยรถยนต์ประเภท 1', 3, NULL, '<p><span lang="TH" style="margin: 0px; padding: 0px; font-family: "Angsana New", serif; color: rgb(102, 102, 102); background: rgb(255, 255, 255); font-size: 14pt; line-height: 19.9733px;">รถยนต์</span><span lang="TH" style="margin: 0px; padding: 0px; font-family: "Angsana New", serif; color: rgb(102, 102, 102); background: rgb(255, 255, 255); font-size: 14pt; line-height: 19.9733px;">ขนาดเครื่อง </span><span style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; color: rgb(102, 102, 102); background: rgb(255, 255, 255); font-size: 14pt; line-height: 19.9733px;">1.5 </span><span lang="TH" style="margin: 0px; padding: 0px; font-family: "Angsana New", serif; color: rgb(102, 102, 102); background: rgb(255, 255, 255); font-size: 14pt; line-height: 19.9733px;">ลิตร</span><span style="margin: 0px; padding: 0px; font-family: Arial, sans-serif; color: rgb(102, 102, 102); background: rgb(255, 255, 255); font-size: 14pt; line-height: 19.9733px;">  </span><span lang="TH" style="margin: 0px; padding: 0px; font-family: "Angsana New", serif; color: rgb(102, 102, 102); background: rgb(255, 255, 255); font-size: 14pt; line-height: 19.9733px;">เกียร์อัตโนมัติ</span></p>', '<p><br></p><table class="table detail" style="margin: 0px 0px 1rem; padding: 0px; width: 672px; max-width: 100%; background-color: rgb(255, 255, 255); color: rgb(102, 102, 102); font-family: Prompt, sans-serif; font-size: 15px;"><tbody style="margin: 0px; padding: 0px;"><tr style="margin: 0px; padding: 0px;"><td style="margin: 0px; padding: 0.55rem; vertical-align: top; border-top-color: rgb(222, 226, 230); font-size: 12px;"><p class="MsoNormal" style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-size: 16pt; line-height: 22.8267px;">- </span><span style="margin: 0px; padding: 0px; font-family: Helvetica, sans-serif; font-size: 10.5pt; line-height: 14.98px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">FM/AM Radio</span><o:p style="margin: 0px; padding: 0px;"></o:p></p><p class="MsoNormal" style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-family: Helvetica, sans-serif; font-size: 10.5pt; line-height: 14.98px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">- USB/AUX</span><o:p style="margin: 0px; padding: 0px;"></o:p></p><p style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;"></p><p class="MsoNormal" style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-family: Helvetica, sans-serif; font-size: 10.5pt; line-height: 14.98px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">- CD/MP3</span></p></td></tr></tbody></table>', 1, 0, '2020-03-07 20:03:00', '2020-05-04 07:11:51'),
(19, 'Toyota Commuter 2017 (หรือเทียบเท่า)', 1, 1, 1900, 3000, 'เกียร์อัตโนมัติ', 'KOP008', 0, '1583586582.jpg', 10, 'ประกันภัยรถยนต์ประเภท 1', 5, NULL, '<p>รถตู้พร้อมคนขับ</p>', '<ul style="margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style-type: none; font-variant-numeric: normal; font-variant-east-asian: normal; background-color: transparent; color: rgb(51, 63, 72); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; font-size: 14px;"><li style="margin: 0px; padding: 0px; list-style-type: none;">FM/AM Radio</li><li style="margin: 0px; padding: 0px; list-style-type: none;">USB/AUX</li><li style="margin: 0px; padding: 0px; list-style-type: none;">CD/MP3</li><li></li></ul>', 1, 0, '2020-03-07 20:09:42', '2020-05-04 07:12:08'),
(20, 'Nissan March', 4, 2, 900, 3000, 'เกียร์อัตโนมัติ', 'KOP006', 0, '1588566636.png', 4, 'ประกันภัยรถยนต์ประเภท 1', 2, NULL, '<p><span style="color: rgb(102, 102, 102); font-family: Prompt, sans-serif; font-size: 12px; background-color: rgb(255, 255, 255);">เครื่องยนต์ Eco Car ขนาด 1.2 ลิตร เกียร์อัตโนมัติ</span></p>', '<p>- FM Radio</p><p>- USB/AUX</p><p>- MP3/CD</p>', 1, 0, '2020-05-04 04:30:36', '2020-05-04 04:30:46'),
(21, 'Nissan Note', 4, 2, 900, 3000, 'เกียร์อัตโนมัติ', 'KOP008', 0, '1588579866.jpg', 4, 'ประกันภัยรถยนต์ประเภท 1', 2, NULL, '<p><span style="color: rgb(102, 102, 102); font-family: Prompt, sans-serif; font-size: 12px; background-color: rgb(255, 255, 255);">เครื่องยนต์ Eco Car ขนาด 1.2 ลิตร เกียร์อัตโนมัติ</span></p>', '<p>- FM Radio</p><p>- USB/AUX</p><p>- MP3/CD</p>', 1, 0, '2020-05-04 08:11:06', '2020-05-04 08:13:48');

-- --------------------------------------------------------

--
-- Table structure for table `car_parts`
--

CREATE TABLE `car_parts` (
  `id` int(10) UNSIGNED NOT NULL,
  `prov_id` int(11) NOT NULL,
  `partn_id` int(11) NOT NULL,
  `cars_id` int(11) NOT NULL,
  `cars_price` double(8,2) NOT NULL,
  `position_car` int(11) NOT NULL DEFAULT '0',
  `view_car` int(11) NOT NULL DEFAULT '0',
  `total_car` int(11) NOT NULL DEFAULT '0',
  `car_part_status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_parts`
--

INSERT INTO `car_parts` (`id`, `prov_id`, `partn_id`, `cars_id`, `cars_price`, `position_car`, `view_car`, `total_car`, `car_part_status`, `created_at`, `updated_at`) VALUES
(4, 2, 2, 4, 1200.00, 0, 0, 0, 1, '2020-01-15 07:30:47', '2020-01-15 14:26:44'),
(5, 38, 2, 6, 1000.00, 0, 0, 0, 1, '2020-01-15 07:33:24', '2020-01-15 14:26:51'),
(6, 2, 2, 11, 1400.00, 0, 0, 0, 1, '2020-01-15 07:35:09', '2020-01-15 14:26:45'),
(7, 2, 2, 9, 1800.00, 0, 0, 0, 1, '2020-01-15 07:44:55', '2020-01-15 14:26:46'),
(8, 39, 2, 8, 1600.00, 0, 0, 0, 1, '2020-01-15 07:45:20', '2020-01-15 14:26:56'),
(9, 39, 2, 6, 1000.00, 0, 0, 0, 1, '2020-01-15 07:45:29', '2020-01-15 14:26:57'),
(10, 11, 3, 8, 1200.00, 0, 0, 0, 1, '2020-01-15 13:53:43', '2020-01-15 14:26:24'),
(11, 11, 3, 10, 2700.00, 0, 0, 0, 1, '2020-01-15 13:53:51', '2020-01-15 14:26:25'),
(12, 12, 3, 9, 1700.00, 0, 0, 0, 1, '2020-01-15 13:54:14', '2020-01-15 14:26:31'),
(13, 12, 3, 5, 900.00, 0, 0, 0, 1, '2020-01-15 13:54:25', '2020-01-15 14:26:32'),
(14, 13, 3, 11, 1400.00, 0, 0, 0, 1, '2020-01-15 13:54:41', '2020-01-15 14:26:37'),
(15, 13, 3, 8, 1600.00, 0, 0, 0, 1, '2020-01-15 13:54:50', '2020-01-15 14:26:37'),
(16, 39, 3, 6, 1000.00, 0, 0, 0, 0, '2020-01-15 16:41:34', '2020-01-15 16:41:34'),
(17, 39, 3, 8, 1600.00, 0, 0, 0, 0, '2020-01-15 16:41:50', '2020-01-15 16:41:50'),
(18, 39, 3, 9, 1800.00, 0, 0, 0, 0, '2020-01-15 16:42:18', '2020-01-15 16:42:18'),
(19, 36, 4, 12, 990.00, 0, 0, 0, 1, '2020-03-07 17:24:00', '2020-10-27 14:25:14'),
(20, 36, 4, 13, 990.00, 0, 0, 0, 1, '2020-03-07 19:01:16', '2020-10-27 14:25:21'),
(21, 36, 4, 14, 990.00, 0, 0, 0, 1, '2020-03-07 19:06:13', '2020-10-27 14:25:29'),
(22, 36, 4, 15, 1250.00, 0, 0, 0, 1, '2020-03-07 19:11:13', '2020-10-27 14:23:07'),
(23, 36, 4, 16, 1250.00, 0, 0, 0, 1, '2020-03-07 19:53:04', '2020-10-27 14:23:17'),
(24, 36, 4, 17, 1250.00, 0, 0, 0, 1, '2020-03-07 19:58:10', '2020-10-27 14:23:27'),
(25, 36, 4, 18, 1500.00, 0, 0, 0, 1, '2020-03-07 20:03:25', '2020-06-14 09:21:34'),
(26, 36, 4, 19, 1900.00, 0, 0, 0, 1, '2020-03-07 20:10:05', '2020-03-10 14:22:09'),
(27, 35, 4, 12, 990.00, 0, 0, 0, 1, '2020-03-07 20:14:03', '2020-10-27 14:24:21'),
(28, 35, 4, 13, 990.00, 0, 0, 0, 1, '2020-03-07 20:14:14', '2020-10-27 14:24:29'),
(29, 35, 4, 15, 1250.00, 0, 0, 0, 1, '2020-03-07 20:14:27', '2020-10-27 14:24:07'),
(30, 35, 4, 18, 1600.00, 0, 0, 0, 1, '2020-03-07 20:14:42', '2020-03-07 20:14:45'),
(31, 35, 4, 16, 1250.00, 0, 0, 0, 1, '2020-03-07 20:14:54', '2020-10-27 14:23:58'),
(32, 20, 4, 12, 950.00, 0, 0, 0, 1, '2020-03-07 20:15:32', '2020-03-10 14:14:05'),
(33, 20, 4, 13, 950.00, 0, 0, 0, 1, '2020-03-07 20:15:41', '2020-03-10 14:14:20'),
(34, 20, 4, 19, 1900.00, 0, 0, 0, 1, '2020-03-07 20:15:49', '2020-03-07 20:15:53'),
(36, 23, 5, 20, 950.00, 0, 0, 0, 1, '2020-05-04 04:31:35', '2020-05-04 04:31:41'),
(37, 23, 5, 13, 1200.00, 0, 0, 0, 1, '2020-05-04 04:35:12', '2020-05-04 04:35:14'),
(38, 23, 5, 15, 1500.00, 0, 0, 0, 1, '2020-05-04 04:37:14', '2020-05-04 04:37:18'),
(39, 23, 5, 18, 2100.00, 0, 0, 0, 1, '2020-05-04 04:39:04', '2020-05-04 04:39:06'),
(40, 29, 7, 12, 1200.00, 0, 0, 0, 1, '2020-05-04 08:06:04', '2020-05-04 08:08:11'),
(43, 29, 7, 21, 1200.00, 0, 0, 0, 1, '2020-05-04 08:12:21', '2020-05-04 08:12:24'),
(44, 29, 7, 15, 1350.00, 0, 0, 0, 1, '2020-05-04 08:15:03', '2020-05-04 08:15:05'),
(45, 29, 7, 17, 1350.00, 0, 0, 0, 1, '2020-05-04 08:15:15', '2020-05-04 08:15:18');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_cat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name_cat`, `created_at`, `updated_at`) VALUES
(1, 'Toyota (โตโยต้า).', '2019-08-07 08:49:30', '2019-08-07 08:54:34'),
(2, 'Honda (ฮอนด้า).', '2019-08-07 08:49:52', '2019-08-07 08:49:52'),
(3, 'Mitsubishi (มิตซูบิชิ)', '2019-08-07 08:50:00', '2019-08-07 08:50:00'),
(4, 'Nissan (นิสสัน)', '2019-08-07 08:51:10', '2019-08-07 08:51:10'),
(5, 'Mazda (มาสด้า)', '2019-08-07 08:51:15', '2019-08-07 08:51:15'),
(6, 'Chevrolet (เชฟโรเลต)', '2019-08-07 08:51:21', '2019-08-07 08:51:21'),
(7, 'BMW (บีเอ็มดับเบิ้ลยู)', '2019-08-07 08:51:28', '2019-08-07 08:51:28'),
(8, 'Benz (เบนซ์)', '2019-08-07 08:51:37', '2019-08-07 08:51:37'),
(9, 'Ford (ฟอร์ด)', '2019-08-07 08:51:42', '2019-08-07 08:51:42'),
(10, 'Volvo (วอลโว)', '2019-08-07 08:51:47', '2019-08-07 08:51:47'),
(11, 'Suzuki', '2019-08-07 08:51:53', '2019-08-07 08:51:53');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `detail`, `status`, `created_at`, `updated_at`) VALUES
(1, 'kim', 'kikm@gmail.com', '0811007753', '1254588', 0, '2019-08-05 17:00:00', '2019-08-05 17:00:00'),
(2, 'kim', 'kikm@gmail.com', '0811007753', '1254588', 0, '2019-08-05 17:00:00', '2019-08-05 17:00:00'),
(3, 'kim', 'kim@gmail.com', '0000000', '1233', 0, '2020-01-30 00:31:30', NULL),
(4, 'kim', 'kim@gmail.com', '00000', 'test data', 0, '2020-01-30 00:32:23', NULL),
(5, 'kim', 'kim@gmail.com', '00000', 'tard ewe 2 3', 0, '2020-01-30 00:34:17', NULL),
(6, 'sdsd', 'dsdsd', 'sds', 'sdsd', 0, '2020-03-23 02:02:17', NULL),
(7, 'ds', 'sdsd', 'dsd', 'sds', 0, '2020-03-23 02:02:33', NULL),
(8, 'Malinee Chanasuek', 'mam775@gmail.com', '0866540933', 'จองรเช่ารถ นครพนมค่ะ 8-9-10 พ.ย.  รับ-ส่งที่สนามบิน\r\n8 พย.  ถึงสนามบิน 16.00 FD3396\r\n10 พย.  กลับ 16.50 FD3397', 0, '2020-11-02 03:10:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_31_143752_create_roles_table', 2),
(4, '2019_07_31_143806_create_role_user_table', 2),
(5, '2019_08_02_132421_create_partners_table', 3),
(6, '2019_08_02_133132_create_categories_table', 3),
(7, '2019_08_02_133230_create_sub_categories_table', 3),
(8, '2019_08_02_133534_create_contacts_table', 3),
(9, '2019_08_02_133618_create_reviews_table', 3),
(10, '2019_08_07_200210_create_cars_table', 4),
(11, '2019_08_13_191421_create_provi_partners_table', 5),
(12, '2019_08_29_053606_create_positions_table', 6),
(15, '2019_09_09_135757_create_car_parts_table', 7),
(16, '2020_01_31_100748_create_orders_table', 8),
(17, '2020_02_16_235129_create_subscribes_table', 8),
(18, '2020_02_17_063140_create_regis_partners_table', 9),
(19, '2020_02_17_063317_create_regis_partner_provs_table', 9),
(20, '2020_02_20_113625_create_promotions_table', 10),
(21, '2020_02_20_113838_create_promotion_provs_table', 10),
(22, '2020_02_20_115415_create_promotion_users_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_ids` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `pro_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `prov_id` int(11) NOT NULL,
  `part_id` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci,
  `remark` text COLLATE utf8mb4_unicode_ci,
  `re_car` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `se_car` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `re_car_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `se_car_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `status_2` int(11) NOT NULL DEFAULT '0',
  `branch` int(11) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '0',
  `promotion_id` int(10) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_ids`, `user_id`, `pro_id`, `position_id`, `prov_id`, `part_id`, `day`, `total`, `detail`, `remark`, `re_car`, `se_car`, `re_car_time`, `se_car_time`, `phone`, `email`, `name`, `status`, `status_2`, `branch`, `active`, `promotion_id`, `created_at`, `updated_at`) VALUES
(56, '154942', 5, 12, 9, 35, 4, 3, 2423, 'สกลนคร   , สนามบินสกลนคร, ทำธุระในตัวเมืองและบริเวณใกล้เคียง', NULL, '10/10/2020', '13/10/2020', '14:30', '8:30', '0644416465', 'Arinyaka.s@gmail.com', 'อริญญกา สุขคำมีภัธ', 1, 0, 0, 0, 2, '2020-09-13 05:38:11', '2020-09-23 02:34:01'),
(59, '933115', 7, 12, 1, 36, 4, 1, 680, 'นครพนม   , สนามบินนครพนม, ขาไป 7/11/63 FD3398 ดอนเมือง-นครพนม 8.35-10.00\r\nขากลับ 8/11/63 FD3399 นครพนม-ดอนเมือง 10.25-11.35', NULL, '07/11/2020', '08/11/2020', '10:00', '10:00', '66891693131', 'wonton2ton@hotmail.com', 'อรรถกร จารุศรีวรรณา', 1, 0, 0, 0, 2, '2020-09-22 09:30:22', '2020-09-23 02:33:56'),
(60, '991674', 6, 12, 1, 36, 4, 2, 1445, 'นครพนม   , สนามบินนครพนม, รับรถที่สนามบินนครพนม', NULL, '09/10/2020', '11/10/2020', '9:30', '16:00', '0634143399', 'mook241.mata@gmail.com', 'เมธาวีย์ นาคสีหราช', 1, 0, 0, 0, 2, '2020-09-24 03:56:07', '2020-10-05 14:16:00'),
(64, '714148', 10, 12, 9, 35, 4, 1, 808, 'สกลนคร   , สนามบินสกลนคร, รับ และ คืน ที่สนามบิน', NULL, '18/10/2020', '19/10/2020', '8:00', '8:00', '0958734528', 'modandtone@gmail.com', 'กรกานต์ ศรีโยธี', 1, 0, 0, 0, 2, '2020-10-05 08:12:54', '2020-10-05 14:22:20'),
(65, '276350', 0, 12, 1, 36, 4, 2, 1900, 'นครพนม   , สนามบินนครพนม, -', NULL, '10/10/2020', '12/10/2020', '18:00', '17:00', '0851483611', 'p.poundere@gmail.com', 'ชยาภรณ์ วงษ์ใหญ่', 1, 0, 0, 0, 0, '2020-10-08 01:48:48', '2020-10-10 03:09:31'),
(67, '650293', 0, 12, 1, 36, 4, 1, 950, 'นครพนม   , สนามบินนครพนม, รับรถสนามบินนครพนม เที่ยวบิน FD 3398', NULL, '13/11/2020', '13/11/2020', '10:00', '17:30', '0611519556', 'pearka556@gmail.com', 'เพ็ญนภา ปวนกาศ', 1, 0, 0, 0, 0, '2020-10-14 13:34:38', '2020-10-16 02:51:32'),
(69, '537937', 11, 12, 1, 36, 4, 2, 1615, 'นครพนม   , สนามบินนครพนม, รับรถที่สนามบินนครพนม', NULL, '07/11/2020', '09/11/2020', '16:00', '16:00', '0845592727', 'Sam8462277@gmail.com', 'สิริวัส เปี่ยมวิทย์', 1, 0, 0, 0, 2, '2020-10-17 10:03:50', '2020-10-24 12:00:04'),
(70, '282602', 0, 13, 9, 35, 4, 1, 950, 'สกลนคร   , สนามบินสกลนคร, -', NULL, '22/10/2020', '23/10/2020', '9:00', '13:30', '0623833990', 'golfp_p@hotmail.com', 'ปรเมศวร์ เพชรมั่น', 1, 0, 0, 0, 0, '2020-10-19 10:12:56', '2020-10-24 12:00:05'),
(71, '645702', 12, 12, 1, 36, 4, 1, 808, 'นครพนม   , สนามบินนครพนม, เป็นผญ ขับค่ะ', NULL, '08/11/2020', '08/11/2020', '10:00', '16:00', '0969955693', 'WanniPa267@gmail.com', 'Wannipa Chumoop', 1, 0, 0, 0, 2, '2020-10-27 11:37:43', '2020-11-15 12:53:15'),
(72, '454557', 0, 13, 9, 35, 4, 1, 990, 'สกลนคร   , สนามบินสกลนคร, -', NULL, '13/11/2020', '14/11/2020', '8:00', '17:30', '0959528330', 'jengie.natthida@gmail.com', 'ณัฐธิดา วิสิฐวรัญญู', 1, 0, 0, 0, 0, '2020-10-29 05:01:52', '2020-11-15 12:53:21'),
(74, '883695', 13, 12, 1, 36, 4, 2, 1683, 'นครพนม   , สนามบินนครพนม, จองรก ATIV  8-9-10 พ.ย.    8 พย.  ถึงสนามบิน 16.00 น.  FD 3396    ขากลับ FD 3397 16.50 น.', NULL, '08/11/2020', '10/11/2020', '16:00', '16:00', '0866640933', 'mam775@gmail.com', 'มาลินี ชนะศึก', 1, 0, 0, 0, 2, '2020-11-02 03:15:18', '2020-11-15 12:53:42'),
(76, '151347', 16, 12, 1, 36, 4, 1, 842, 'นครพนม   , สนามบินนครพนม, สนามบินนครพนม', NULL, '28/11/2020', '29/11/2020', '16:30', '16:30', '0815938821', 'top_ukr@hotmail.com', 'จตุรพบ โภคกุลกานนท์', 0, 0, 0, 0, 2, '2020-11-17 06:23:41', '2020-11-17 06:23:41');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `part_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `part_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `part_owner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `part_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `part_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `part_address` text COLLATE utf8mb4_unicode_ci,
  `part_detail` text COLLATE utf8mb4_unicode_ci,
  `part_short` int(11) NOT NULL DEFAULT '0',
  `part_status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `part_name`, `part_image`, `part_owner`, `part_email`, `part_phone`, `part_address`, `part_detail`, `part_short`, `part_status`, `created_at`, `updated_at`) VALUES
(1, 'onsale', '1565082611.jpg', 'kim kundad', 'kim.kundad@gmail.com', '0811007752', '20/426', '00000', 0, 0, '2019-08-06 09:10:11', '2020-03-07 17:19:11'),
(2, 'Motor Empire', '1579070823.png', 'คุณเอ', 'a@gmail.com', '123456789', '123', NULL, 0, 0, '2020-01-15 06:47:03', '2020-03-07 17:19:10'),
(3, 'Plan B', '1579070867.jpg', 'คุณ B', 'b@gmail.com', '123456789', '123', NULL, 0, 0, '2020-01-15 06:47:47', '2020-03-07 17:19:08'),
(4, 'นครโคราช', '1583575584.JPG', 'นครโคราช', 'info@nakhonkoratcarrent.com', '0818721215', '507/2 ถ.อภิบาลบัญชา ต.ในเมือง อ.เมือง จ.นครพนม 48000', NULL, 0, 1, '2020-03-07 17:06:24', '2020-03-07 17:18:38'),
(5, 'CHH Ubon', '1588565068.jpg', 'คุณ วี', 'chhubon@gmail.com', '0817904218', '46/1 ถ.นครบาล ต.ในเมือง อ.เมือง จ.อุบลราชธานี', 'https://www.ch-h-uboncarrent.com/?gclid=Cj0KCQjw17n1BRDEARIsAFDHFexMdkWUMHc2go2479ML5TPU82c5E6Sfe9T_vXHxB_NiawZMi5k2ukYaAmN_EALw_wcB', 0, 1, '2020-05-04 04:04:29', '2020-05-04 04:05:31'),
(6, '116U Car Rent', '1588577617.JPG', 'คุณ แอ', 'sayada_1979@hotmail.com', '086-955-4265 , 086-798-4498', '138/11 ถ. นครบาล ต. ในเมือง \r\nอ. เมือง จ. อุบลราชธานี 34000', 'https://www.168ucarrent.com/', 0, 0, '2020-05-04 07:33:37', '2020-05-04 07:33:37'),
(7, 'Udon Centre Car Rent', '1588579464.JPG', 'คุณวิเชียร จารีรัตน์', 'sandying9@gmail.com', '087 565 1616', '111⁄3 หมู่ 2 ตำบล นาดี อำเภอเมือง\r\nจังหวัดอุดรธานี 41000', 'http://www.udoncentrecarrent.com/', 0, 1, '2020-05-04 08:04:24', '2020-05-04 08:04:32');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('kim.kundad@gmail.com', '$2y$10$zMmWMPWhYhlBVFbbgprPQ.aZ4WyGiYMVcuS.rIC0vMPLxSRgvILwy', '2020-03-09 14:17:20');

-- --------------------------------------------------------

--
-- Table structure for table `position_links`
--

CREATE TABLE `position_links` (
  `id` int(10) UNSIGNED NOT NULL,
  `prov_id` int(11) NOT NULL,
  `position_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position_status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `position_links`
--

INSERT INTO `position_links` (`id`, `prov_id`, `position_name`, `position_status`, `created_at`, `updated_at`) VALUES
(1, 36, 'สนามบินนครพนม', 0, NULL, NULL),
(2, 36, 'ตัวเมืองนครพนม', 0, NULL, NULL),
(3, 38, 'สนามบินเชียงใหม่', 0, NULL, NULL),
(4, 38, 'ตัวเมืองเชียงใหม่', 0, NULL, NULL),
(5, 20, 'สนามบินบุรีรัมย์', 0, NULL, NULL),
(6, 20, 'ตัวเมืองบุรีรัมย์', 0, NULL, NULL),
(7, 23, 'สนามบินอุบลราชธานี', 0, NULL, NULL),
(8, 23, 'ตัวเมืองอุบลราชธานี', 0, NULL, NULL),
(9, 35, 'สนามบินสกลนคร', 0, NULL, NULL),
(10, 35, 'ตัวเมืองสกลนคร', 0, NULL, NULL),
(11, 29, 'สนามบินอุดรธานี', 0, NULL, NULL),
(12, 29, 'ตัวเมืองอุดรธานี', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `id` int(10) UNSIGNED NOT NULL,
  `promotion_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promotion_detail` text COLLATE utf8mb4_unicode_ci,
  `promotion_amount` double(8,2) NOT NULL,
  `promotion_limit` int(11) NOT NULL DEFAULT '0',
  `promotion_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promotion_type` int(11) NOT NULL DEFAULT '0',
  `promotion_status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`id`, `promotion_name`, `promotion_detail`, `promotion_amount`, `promotion_limit`, `promotion_image`, `promotion_type`, `promotion_status`, `created_at`, `updated_at`) VALUES
(1, 'ส่วนลด ทั่วไทย 10%', NULL, 10.00, 100, '1583741509.jpg', 0, 1, '2020-03-09 15:11:50', '2020-03-09 15:11:54'),
(2, 'เช่ารถภาคอีสาน 15%', NULL, 15.00, 100, '1583741672.jpg', 1, 1, '2020-03-09 15:14:32', '2020-10-27 14:40:41'),
(3, 'เช่ารถเที่ยวเชียงใหม่ 15%', NULL, 15.00, 100, '1583741788.jpg', 1, 1, '2020-03-09 15:16:28', '2020-03-09 15:16:32');

-- --------------------------------------------------------

--
-- Table structure for table `promotion_provs`
--

CREATE TABLE `promotion_provs` (
  `id` int(10) UNSIGNED NOT NULL,
  `promotion_id` int(11) NOT NULL,
  `prov_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promotion_provs`
--

INSERT INTO `promotion_provs` (`id`, `promotion_id`, `prov_id`, `created_at`, `updated_at`) VALUES
(11, 3, 38, NULL, NULL),
(12, 2, 20, NULL, NULL),
(13, 2, 23, NULL, NULL),
(14, 2, 29, NULL, NULL),
(15, 2, 35, NULL, NULL),
(16, 2, 36, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `promotion_users`
--

CREATE TABLE `promotion_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `promotion_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `get_status` int(10) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promotion_users`
--

INSERT INTO `promotion_users` (`id`, `promotion_id`, `user_id`, `get_status`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 1, '2020-09-13 05:04:16', '2020-09-13 05:04:16'),
(2, 2, 5, 1, '2020-09-13 05:20:49', '2020-09-13 05:20:49'),
(3, 1, 2, 0, '2020-09-13 05:29:59', '2020-09-13 05:29:59'),
(4, 2, 6, 1, '2020-09-17 05:44:52', '2020-09-17 05:44:52'),
(5, 2, 7, 1, '2020-09-22 09:26:12', '2020-09-22 09:26:12'),
(6, 2, 7, 0, '2020-09-22 09:31:57', '2020-09-22 09:31:57'),
(7, 2, 8, 0, '2020-09-28 03:24:27', '2020-09-28 03:24:27'),
(8, 2, 10, 1, '2020-10-05 08:11:09', '2020-10-05 08:11:09'),
(9, 2, 6, 0, '2020-10-06 07:38:21', '2020-10-06 07:38:21'),
(10, 2, 11, 1, '2020-10-17 09:55:23', '2020-10-17 09:55:23'),
(11, 2, 12, 1, '2020-10-27 11:05:11', '2020-10-27 11:05:11'),
(12, 2, 13, 1, '2020-11-01 15:34:48', '2020-11-01 15:34:48'),
(13, 2, 14, 0, '2020-11-07 11:59:40', '2020-11-07 11:59:40'),
(14, 2, 15, 0, '2020-11-11 02:54:36', '2020-11-11 02:54:36'),
(15, 2, 16, 1, '2020-11-17 04:32:16', '2020-11-17 04:32:16');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `PROVINCE_ID` int(5) NOT NULL,
  `PROVINCE_CODE` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `PROVINCE_NAME` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `GEO_ID` int(5) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`PROVINCE_ID`, `PROVINCE_CODE`, `PROVINCE_NAME`, `GEO_ID`) VALUES
(1, '10', 'กรุงเทพมหานคร   ', 2),
(2, '11', 'สมุทรปราการ   ', 2),
(3, '12', 'นนทบุรี   ', 2),
(4, '13', 'ปทุมธานี   ', 2),
(5, '14', 'พระนครศรีอยุธยา   ', 2),
(6, '15', 'อ่างทอง   ', 2),
(7, '16', 'ลพบุรี   ', 2),
(8, '17', 'สิงห์บุรี   ', 2),
(9, '18', 'ชัยนาท   ', 2),
(10, '19', 'สระบุรี', 2),
(11, '20', 'ชลบุรี   ', 5),
(12, '21', 'ระยอง   ', 5),
(13, '22', 'จันทบุรี   ', 5),
(14, '23', 'ตราด   ', 5),
(15, '24', 'ฉะเชิงเทรา   ', 5),
(16, '25', 'ปราจีนบุรี   ', 5),
(17, '26', 'นครนายก   ', 2),
(18, '27', 'สระแก้ว   ', 5),
(19, '30', 'นครราชสีมา   ', 3),
(20, '31', 'บุรีรัมย์   ', 3),
(21, '32', 'สุรินทร์   ', 3),
(22, '33', 'ศรีสะเกษ   ', 3),
(23, '34', 'อุบลราชธานี   ', 3),
(24, '35', 'ยโสธร   ', 3),
(25, '36', 'ชัยภูมิ   ', 3),
(26, '37', 'อำนาจเจริญ   ', 3),
(27, '39', 'หนองบัวลำภู   ', 3),
(28, '40', 'ขอนแก่น   ', 3),
(29, '41', 'อุดรธานี   ', 3),
(30, '42', 'เลย   ', 3),
(31, '43', 'หนองคาย   ', 3),
(32, '44', 'มหาสารคาม   ', 3),
(33, '45', 'ร้อยเอ็ด   ', 3),
(34, '46', 'กาฬสินธุ์   ', 3),
(35, '47', 'สกลนคร   ', 3),
(36, '48', 'นครพนม   ', 3),
(37, '49', 'มุกดาหาร   ', 3),
(38, '50', 'เชียงใหม่   ', 1),
(39, '51', 'ลำพูน   ', 1),
(40, '52', 'ลำปาง   ', 1),
(41, '53', 'อุตรดิตถ์   ', 1),
(42, '54', 'แพร่   ', 1),
(43, '55', 'น่าน   ', 1),
(44, '56', 'พะเยา   ', 1),
(45, '57', 'เชียงราย   ', 1),
(46, '58', 'แม่ฮ่องสอน   ', 1),
(47, '60', 'นครสวรรค์   ', 2),
(48, '61', 'อุทัยธานี   ', 2),
(49, '62', 'กำแพงเพชร   ', 2),
(50, '63', 'ตาก   ', 4),
(51, '64', 'สุโขทัย   ', 2),
(52, '65', 'พิษณุโลก   ', 2),
(53, '66', 'พิจิตร   ', 2),
(54, '67', 'เพชรบูรณ์   ', 2),
(55, '70', 'ราชบุรี   ', 4),
(56, '71', 'กาญจนบุรี   ', 4),
(57, '72', 'สุพรรณบุรี   ', 2),
(58, '73', 'นครปฐม   ', 2),
(59, '74', 'สมุทรสาคร   ', 2),
(60, '75', 'สมุทรสงคราม   ', 2),
(61, '76', 'เพชรบุรี   ', 4),
(62, '77', 'ประจวบคีรีขันธ์   ', 4),
(63, '80', 'นครศรีธรรมราช   ', 6),
(64, '81', 'กระบี่   ', 6),
(65, '82', 'พังงา   ', 6),
(66, '83', 'ภูเก็ต   ', 6),
(67, '84', 'สุราษฎร์ธานี   ', 6),
(68, '85', 'ระนอง   ', 6),
(69, '86', 'ชุมพร   ', 6),
(70, '90', 'สงขลา   ', 6),
(71, '91', 'สตูล   ', 6),
(72, '92', 'ตรัง   ', 6),
(73, '93', 'พัทลุง   ', 6),
(74, '94', 'ปัตตานี   ', 6),
(75, '95', 'ยะลา   ', 6),
(76, '96', 'นราธิวาส   ', 6),
(77, '97', 'บึงกาฬ', 3);

-- --------------------------------------------------------

--
-- Table structure for table `provi_partners`
--

CREATE TABLE `provi_partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `part_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provi_partners`
--

INSERT INTO `provi_partners` (`id`, `part_id`, `pro_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 1, 4, NULL, NULL),
(5, 1, 34, NULL, NULL),
(6, 1, 69, NULL, NULL),
(7, 1, 72, NULL, NULL),
(8, 2, 2, NULL, NULL),
(9, 2, 38, NULL, NULL),
(10, 2, 39, NULL, NULL),
(11, 3, 11, NULL, NULL),
(12, 3, 12, NULL, NULL),
(13, 3, 13, NULL, NULL),
(14, 3, 39, NULL, NULL),
(15, 4, 36, NULL, NULL),
(16, 4, 20, NULL, NULL),
(17, 4, 35, NULL, NULL),
(18, 5, 23, NULL, NULL),
(19, 7, 29, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `regis_partners`
--

CREATE TABLE `regis_partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_car` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `active` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `regis_partner_provs`
--

CREATE TABLE `regis_partner_provs` (
  `id` int(10) UNSIGNED NOT NULL,
  `regis_partner_id` int(11) NOT NULL,
  `prov_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `position`, `avatar`, `detail`, `status`, `created_at`, `updated_at`) VALUES
(1, 'กอล์ฟ', 'หัวหน้าฝ่าย', '1565091576.png', 'Compare 900 companies at over 53,000 locations. Best price guaranteed1010.0', 1, '2019-08-06 11:36:36', '2019-09-09 12:13:08');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'manager', 'A Manager User', '2019-07-30 17:00:00', '2019-07-30 17:00:00'),
(2, 'employee', 'A Employee User', '2019-07-30 17:00:00', '2019-07-30 17:00:00'),
(3, 'customer', 'A Customer User', '2019-07-30 17:00:00', '2019-07-30 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`) VALUES
(1, 1, 2),
(2, 1, 3),
(3, 3, 4),
(4, 3, 5),
(5, 3, 6),
(6, 3, 7),
(7, 3, 8),
(8, 3, 9),
(9, 3, 10),
(10, 3, 11),
(11, 3, 12),
(12, 3, 13),
(13, 3, 14),
(14, 3, 15),
(15, 3, 16),
(16, 3, 17);

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `active`, `created_at`, `updated_at`) VALUES
(1, 'krissada_bkk@hotmail.com', 0, '2020-02-22 15:07:24', '2020-02-22 15:07:24'),
(2, 'rabbit_limp@hotmail.com', 0, '2020-03-10 06:41:14', '2020-03-10 06:41:14'),
(3, 'arinyaka.s@gmail.com', 0, '2020-09-13 02:23:29', '2020-09-13 02:23:29'),
(4, 'leng160668@gmail.com', 0, '2020-09-14 08:07:28', '2020-09-14 08:07:28'),
(5, 'komsan111@hotmail.com', 0, '2020-09-14 15:03:54', '2020-09-14 15:03:54'),
(6, 'mam775@gmail.com', 0, '2020-11-02 03:07:22', '2020-11-02 03:07:22'),
(7, 'nmttech@yahoo.co.th', 0, '2020-11-04 11:22:31', '2020-11-04 11:22:31');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `sub_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `sub_name`, `created_at`, `updated_at`) VALUES
(1, 'พร้อมคนขับ', '2019-08-07 09:18:20', '2019-08-07 09:18:20'),
(2, 'รุ่นประหยัด', '2019-08-07 09:20:16', '2019-08-07 09:20:16'),
(3, 'ขนาดเล็ก', '2019-08-07 09:20:25', '2019-08-07 09:20:25'),
(4, 'ขนาดกลาง', '2019-08-07 09:20:55', '2019-08-07 09:20:55'),
(5, 'ขนาดใหญ่', '2019-08-07 09:20:59', '2019-08-07 09:20:59'),
(6, 'เอนกประสงค์', '2019-08-07 09:21:04', '2019-08-07 09:21:04'),
(7, 'พรีเมี่ยม', '2019-08-07 09:21:10', '2019-08-07 09:21:10'),
(8, 'รถตู้/รถตู้เล็ก', '2019-08-07 09:21:14', '2019-08-07 09:21:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `access_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `birthday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_admin`, `provider`, `provider_id`, `access_token`, `avatar`, `phone`, `address`, `birthday`, `zipcode`, `country`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'kimkundad', 'kim.kundad@gmail.com', '$2y$10$lUruVkDnvUIzOOKSASwi1ekaOLMIzspQdhvgXySd031sEqKcH4XsW', 0, 'google', '117677690022727761275', 'ya29.a0AfH6SMD09EC8LwsGInzVg-oxpA7N1yWQKEWRAjdU6EOLt-MvuoNQsW5dg3IOcMUYdnsU-iQNgh07oq7iZ4VfSr6zun6hsh2iE9t3fdvFvGrqyMnKpFLHWxnhMgU_d96dfr7Mq6xIFIFHWIhe4-Rc8qMmjvMcozzSxuPGIA', 'https://lh3.googleusercontent.com/a-/AOh14Gge-r3kY45u-_ze-uM4Ago08NynKIbAuuhf4PE9', NULL, NULL, NULL, NULL, NULL, 'HRzIoRoqxqNO65n4U0MuNWFSXlwce0ziG0gh3imtBwzIaZWvx9YDnBYrukdL', '2019-07-31 07:55:22', '2020-08-19 03:23:44'),
(3, 'krissada_bkk@hotmail.com', 'krissada_bkk@hotmail.com', '$2y$10$PaKuIy/oYJDgPOm3DgvsmOzPpQ6HI2M84tTXe4BpPVaGJPWpyPqLK', 0, 'email', NULL, NULL, '1483556686.png', NULL, NULL, NULL, NULL, NULL, 'W4oPvONHA7TMK2etTpIBlsvxsQCZ4HTC5PGPRrLIg3MG3bYASJuBV3Ie5bIX', '2020-02-22 15:10:20', '2020-02-22 15:10:20'),
(4, 'Tipprapa', 'rabbit_limp@hotmail.com', '$2y$10$8158sG0jBg7UBcKi0lQK2uJ5BT4qDGLsD9LF.DOU7fI.LoqaWBCy2', 0, 'email', NULL, NULL, '1483537975.png', NULL, NULL, NULL, NULL, NULL, NULL, '2020-03-10 06:40:27', '2020-03-10 06:40:27'),
(5, 'อริญญกา สุขคํามีภัธ', 'arinyaka.s@gmail.com', '', NULL, 'google', '105994942830958152023', 'ya29.a0AfH6SMAdeupFSEjaU8PT6AhvYbvs_CYmT7RxAXaa2sIH53ryZjGnIOX7yFzz_Ebt48wP3f95prYCbHh06_gnihmPZ-XcKaaL6rt2J5wTD8uAjd59CT_wgPtJlhopDPYIZoqALcBKh_FQv_d6HAYV5AU9fVC06PCJFMM', 'https://lh3.googleusercontent.com/-5khzbCZbgS8/AAAAAAAAAAI/AAAAAAAAAAA/AMZuuclUjLUkDS7gh8ZcLxOylPlmhSXacQ/photo.jpg', NULL, NULL, NULL, NULL, NULL, 'bMyeMRgIi2sWLNTEYIiPRiZTIKosgD2VH7ctMAMRNmHkKuZf67oiJBOIuEIQ', '2020-09-13 02:29:02', '2020-09-13 02:29:02'),
(6, 'matavee', 'mook241.mata@gmail.com', '$2y$10$mgIqlNzsx0Pv3iPmnRN8FuseFDLs0xJ/M1ve4Ms4THDGSKjhyEWpC', 0, 'email', NULL, NULL, '1483556686.png', NULL, NULL, NULL, NULL, NULL, NULL, '2020-09-17 05:44:37', '2020-09-17 05:44:37'),
(7, 'wonton2ton', 'wonton2ton@hotmail.com', '$2y$10$CKrRDKyr6XJhJ6YY5s9u2uNSSa70/2cER2bvsHzNk5xJUIgIQaXiy', 0, 'email', NULL, NULL, '1483556686.png', NULL, NULL, NULL, NULL, NULL, 'AWU9ilTox6cBnGzinkxFF0mQrqqaurX7HxzIa59sKqszozEdMt2FScb8hrLS', '2020-09-22 09:26:03', '2020-09-22 09:26:03'),
(8, 'tom Thanadul', 'khammool01@gmail.com', '', NULL, 'google', '110304694958784478990', 'ya29.a0AfH6SMBRoG2lnByXEgpC0ziNuhCSdjmjbHapi2S6l4ZQ0oYtKHFlkcf6ASeN7T9vKk0pmgul7HvST8ExIMjTAeEnl2-8n6MmqpoVR1T2ykppZ3tNsdq63j7KkIQC1IEztPkzeiCxDFNwvYZGAbzf5K2K36sICghXVMM', 'https://lh5.googleusercontent.com/-v9ZE4ZlXv6E/AAAAAAAAAAI/AAAAAAAAAAA/AMZuuckSWZ_42F4xvEiDOotWMcuci_g1uw/photo.jpg', NULL, NULL, NULL, NULL, NULL, 'ar87BYSRnq9QQYcttQNPk3VqlbJA822YyegM0B9txELaAS8hEe9sSnBDxsxy', '2020-09-28 03:23:56', '2020-09-28 03:23:56'),
(9, 'Atchara Kakkar', 'atcharakakkar@gmail.com', '', NULL, 'google', '109352708584311502644', 'ya29.a0AfH6SMDseFGXoOnDXZtiaO8SGBLC9aiBr5qUDbz-yyQ2Av-LcezqxiLxf4YPY-hZEaQ0towD4DhiPxTgQHTFEpFlSWjkr4Si6DnOy_J2OJFWDdrT32obVNTBQNfP_kd6Qm7wsfkdd4Z6N9WqFIfeGFfuPLX5dtuTIqA', 'https://lh3.googleusercontent.com/a-/AOh14GhNdX-fGo9FlHrXYYrvbhR-cIakM0cAZXrSO0Th', NULL, NULL, NULL, NULL, NULL, 'BG5K2aESgNVEV9hLMpdAJslsK26pM6yZHrN27vOeKJX0uH62Z9UlnQSOWgTm', '2020-09-28 06:31:17', '2020-09-28 06:31:17'),
(10, 'moda ndtone', 'modandtone@gmail.com', '', NULL, 'google', '102047171194541780947', 'ya29.a0AfH6SMA-szJEJknV7_9350wU96idQ9Uu-DEvEa5mhuRPLsBhGOemnZZSfCPIv_kucqPTZZAmqhGFlSxT6XpvuXlUTNCtoaDqAB4Sq4ARdG8LmAl2EXMOaRnLCujI-BkIGhOZatxV5kXqO-aSFp_r-m2-8sOhI0OQXbk', 'https://lh3.googleusercontent.com/a-/AOh14GjnQDH6mkj8gAH3POLMsV0WVJRiFtXLy30h3zN9KA', NULL, NULL, NULL, NULL, NULL, 'lTEXiJHkQncSFqSPhM89XZ4lEuRVakn3HValff8677fZNsXz3EBuJFeNjBbg', '2020-10-05 08:11:02', '2020-10-05 08:11:02'),
(11, 'Sam', 'Sam8462277@gmail.com', '$2y$10$jN7mN235Ntcue.YS5JZKX.oCDqnikBIUdnSzegz9MZNXzvWL1cgta', 0, 'email', NULL, NULL, '1483537975.png', NULL, NULL, NULL, NULL, NULL, NULL, '2020-10-17 09:54:57', '2020-10-17 09:54:57'),
(12, 'Wannipa Chumoop', 'wannipa267@gmail.com', '', NULL, 'google', '108674562198753383455', 'ya29.A0AfH6SMC6u5kA-Ta-WCGxHGqXXaNmz-rEKKQgFWz-_qv86ToiMaH8HRABA8Hg7aI92VhDxuZ9_BlYVenx5wncbs1MocbmzhyVVOjU8N6UsGZhiY0vYCtZ3ogXdYw7Ugr7zB-zC_ORE_b2SLTAlamOcBp-iMobQDZTvLRx1GiPFiY', 'https://lh3.googleusercontent.com/a-/AOh14Gjs4AxSAfVRDPTS6xFUdHk2cB4qqWPQLdXVd-d0JQ=s96-c', NULL, NULL, NULL, NULL, NULL, '1uQxmtMzlfMuVpt7tmQaFSixZc35ONcjEJMznWrcHja00FhIju7jSfXRQD3e', '2020-10-27 11:04:59', '2020-10-27 11:04:59'),
(13, 'MALINEE CHANASUEK', 'mam775@gmail.com', '$2y$10$UzmYilQZTnGM/inHWVAJM.yqbymIFRSSbGN2BlEVYYkAdpXu5ozwO', 0, 'email', NULL, NULL, '1483556686.png', NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-01 15:34:30', '2020-11-01 15:34:30'),
(14, 'Jirayu Udomsilpa', 'nakang074@gmail.com', '', NULL, 'google', '110336901322260461976', 'ya29.A0AfH6SMAUWMINg635ejcj__xlPdNCJw81gHjOlC9XPfj8hg8TdWRpl7ZlmQ66hkFB3fEylFe-xn0Rl1FZvb3EuLWhrIcCLkir8JQI5K7z940ruwHaMEVrTCjnjp_ZaHyNkXpop047zNZc5NhkoFrlbPNI2VY0T5Fx906tItqDVGw', 'https://lh3.googleusercontent.com/a-/AOh14GhUXWW1Pci45Ipb9jVeFeCK-Mcnv94C-pyYVG_rjTg=s96-c', NULL, NULL, NULL, NULL, NULL, 'fT2A0AItlv66Q0YD93hTHETmf6MjEQ2WKnnhkB0eq3yzp9zL3ki0BpkDyv8e', '2020-11-07 11:58:09', '2020-11-07 11:58:09'),
(15, 'Thanaporn', 'Thanapornkook.zany@gmail.co', '$2y$10$3Dw03YDU5zvLpiZ4fGBT6eoHsRNt0HISFeAihTPHCjYJPzr4q0hDe', 0, 'email', NULL, NULL, '1483556686.png', NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-11 02:54:18', '2020-11-11 02:54:18'),
(16, 'Panipak Jearsiriporn', 'panipak_j@muangthai.co.th', '', NULL, 'google', '117472786708397577017', 'ya29.A0AfH6SMBTgwgUKEWAobNSssW0NJ09ek1Ecxlqo1fCU0UDYaQmFu4w62mKLYkn5S6J5xnx66KKq_W5PJTVr3yEDC59X6DtdmUHakgvDmx2OsRuGR1ZXkWQrq1F6_rs4zb1f90piXl6BG4jmFc0pMTghRskX-bk0TlTMUI_s7jXEgc', 'https://lh3.googleusercontent.com/a-/AOh14GhpCa6MkRSFpmbBfzt_LjjvWA_NWtt3AEiqUPM3og=s96-c', NULL, NULL, NULL, NULL, NULL, 'Z6g0fAXPLb0KNj4QBhtb58cJYEQrGwANbuc9z0YrwM3XCfLF5T1qxHVe2Cas', '2020-11-17 04:28:05', '2020-11-17 04:28:05'),
(17, 'Fattynj', 'notturno-s-venusto@live.com', '$2y$10$cicmLKMgRnP.IRegHsN9f.zxKTgaUq.d80o.vFjs0WWMaPQa9zXIm', 0, 'email', NULL, NULL, '1483556517.png', NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-17 04:59:23', '2020-11-17 04:59:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_parts`
--
ALTER TABLE `car_parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `position_links`
--
ALTER TABLE `position_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotion_provs`
--
ALTER TABLE `promotion_provs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotion_users`
--
ALTER TABLE `promotion_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`PROVINCE_ID`);

--
-- Indexes for table `provi_partners`
--
ALTER TABLE `provi_partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regis_partners`
--
ALTER TABLE `regis_partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regis_partner_provs`
--
ALTER TABLE `regis_partner_provs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `car_parts`
--
ALTER TABLE `car_parts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `position_links`
--
ALTER TABLE `position_links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `promotion_provs`
--
ALTER TABLE `promotion_provs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `promotion_users`
--
ALTER TABLE `promotion_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `PROVINCE_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `provi_partners`
--
ALTER TABLE `provi_partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `regis_partners`
--
ALTER TABLE `regis_partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `regis_partner_provs`
--
ALTER TABLE `regis_partner_provs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
