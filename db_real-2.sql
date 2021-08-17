-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th8 17, 2021 lúc 03:50 PM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_real`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `ad_id` varchar(50) DEFAULT NULL,
  `sodienthoai` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `hoten` varchar(100) DEFAULT NULL,
  `diachi` varchar(100) DEFAULT NULL,
  `matkhau` varchar(100) DEFAULT NULL,
  `capnhatmk` timestamp NULL DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL,
  `nguoitao` varchar(100) DEFAULT 'admin',
  `nguoisua` varchar(100) DEFAULT 'admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `ad_id`, `sodienthoai`, `email`, `hoten`, `diachi`, `matkhau`, `capnhatmk`, `trangthai`, `nguoitao`, `nguoisua`, `created_at`, `updated_at`) VALUES
(1, 'ad001', '0123123123', 'admin001@gmail.com', 'Ho Van Ten', 'Thanh hoa 123 street', 'abc123123', NULL, 1, 'admin', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `attachmentable`
--

CREATE TABLE `attachmentable` (
  `id` int(10) UNSIGNED NOT NULL,
  `attachmentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachmentable_id` int(10) UNSIGNED NOT NULL,
  `attachment_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `attachments`
--

CREATE TABLE `attachments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extension` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) NOT NULL DEFAULT 0,
  `sort` int(11) NOT NULL DEFAULT 0,
  `path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hash` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'public',
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `attachments`
--

INSERT INTO `attachments` (`id`, `name`, `original_name`, `mime`, `extension`, `size`, `sort`, `path`, `description`, `alt`, `hash`, `disk`, `user_id`, `group`, `created_at`, `updated_at`) VALUES
(1, 'b1a872327a5c54dd02718bdc8452e48cfabf91f2', 'Ảnh background 1.png', 'image/png', 'png', 348062, 0, '2021/08/07/', NULL, NULL, '8bb4a9a708dae3b6472e83aace2bb6108b87274d', 'public', 2, NULL, '2021-08-07 07:11:28', '2021-08-07 07:11:28'),
(2, '3b3fe996fc019f894084f9b640ec5b45663c7efd', 'Ảnh chụp Màn hình 2021-08-09 lúc 23.15.12.png', 'image/png', 'png', 668005, 0, '2021/08/10/', NULL, NULL, 'b601928c4a423ebc76c020744115866ef18a4f9c', 'public', 2, NULL, '2021-08-09 23:50:01', '2021-08-09 23:50:01'),
(3, 'f112eaec511b03cc175f06b6553943faffeddfd3', 'Ảnh chụp Màn hình 2021-08-02 lúc 14.03.08.png', 'image/png', 'png', 1325052, 0, '2021/08/10/', NULL, NULL, 'eba17f1a0c11e8feb68376bf96bbd90e01a5a772', 'public', 2, NULL, '2021-08-09 23:52:19', '2021-08-09 23:52:19'),
(4, 'cba7b26acd6d3c90aca5695be1262d87fa6e1596', 'Ảnh chụp Màn hình 2021-08-02 lúc 15.35.27.png', 'image/png', 'png', 1131861, 0, '2021/08/10/', NULL, NULL, 'bb21a824e38e2f9029916e54b2d5320f532b65a8', 'public', 2, NULL, '2021-08-10 00:32:43', '2021-08-10 00:32:43'),
(5, 'cf1b868fd0969676e78da5e9d9964a09811ee5b3', 'Ảnh chụp Màn hình 2021-08-03 lúc 13.35.54.png', 'image/png', 'png', 1779549, 0, '2021/08/10/', NULL, NULL, '254bc53e8b3c582d3310e3a79d0211fdc648301c', 'public', 2, NULL, '2021-08-10 00:35:13', '2021-08-10 00:35:13'),
(6, 'bb33c15724d9d735f1f62bfcb4d803e792204afb', 'Ảnh chụp Màn hình 2021-08-02 lúc 15.25.27.png', 'image/png', 'png', 508147, 0, '2021/08/10/', NULL, NULL, '98de3d834561305f2d7e0e747830146b889f1ee9', 'public', 2, NULL, '2021-08-10 00:35:20', '2021-08-10 00:35:20'),
(7, '3b3fe996fc019f894084f9b640ec5b45663c7efd', 'Ảnh chụp Màn hình 2021-08-09 lúc 23.15.12.png', 'image/png', 'png', 668005, 0, '2021/08/10/', NULL, NULL, 'b601928c4a423ebc76c020744115866ef18a4f9c', 'public', 2, NULL, '2021-08-10 06:09:59', '2021-08-10 06:09:59'),
(8, '45b40a983bc1fb14daf046c3f0320a379f872a2b', 'Ảnh chụp Màn hình 2021-08-02 lúc 15.21.37.png', 'image/png', 'png', 353407, 0, '2021/08/10/', NULL, NULL, 'a903c6b2c18025f30dc4c6954b612c2295d9c38e', 'public', 2, NULL, '2021-08-10 06:10:03', '2021-08-10 06:10:03'),
(9, 'c1446b6cde52694743a6a28616275e97159898f5', 'Ảnh chụp Màn hình 2021-08-02 lúc 15.28.24.png', 'image/png', 'png', 134698, 0, '2021/08/10/', NULL, NULL, '65cedc7fd2bedc02b854a26d400818d31908e558', 'public', 2, NULL, '2021-08-10 06:10:08', '2021-08-10 06:10:08'),
(10, '42bac5fced0886f80c90700337d667c0d49a1508', 'Ảnh chụp Màn hình 2021-08-02 lúc 13.43.11.png', 'image/png', 'png', 2081354, 0, '2021/08/10/', NULL, NULL, 'b88ca0d6c8540c904882e6a6acf00ec923cf43cb', 'public', 2, NULL, '2021-08-10 06:20:37', '2021-08-10 06:20:37'),
(11, '6ec25d0943755f694f4db976272187c6cd7f318b', 'Ảnh chụp Màn hình 2021-08-02 lúc 15.30.56.png', 'image/png', 'png', 39557, 0, '2021/08/10/', NULL, NULL, '66ab75b35eacf61ed2959852cb207c126dd8e645', 'public', 2, NULL, '2021-08-10 06:20:41', '2021-08-10 06:20:41'),
(12, '5c6cd0211053148c7a04b2c0fd8e3509686fcb7c', 'Ảnh chụp Màn hình 2021-08-02 lúc 15.21.33.png', 'image/png', 'png', 512543, 0, '2021/08/10/', NULL, NULL, 'c47071c561655f8c66d65255b9d7bfee28ea1b5d', 'public', 2, NULL, '2021-08-10 06:23:40', '2021-08-10 06:23:40'),
(13, '4aefe3329906bed6a3a0c2ff89467a5f097cee47', 'Ảnh chụp Màn hình 2021-08-02 lúc 13.42.29.png', 'image/png', 'png', 1535970, 0, '2021/08/10/', NULL, NULL, '879725f52d70a997ede137657e34af02bbb20b94', 'public', 2, NULL, '2021-08-10 06:23:44', '2021-08-10 06:23:44'),
(14, '4aefe3329906bed6a3a0c2ff89467a5f097cee47', 'Ảnh chụp Màn hình 2021-08-02 lúc 13.42.29.png', 'image/png', 'png', 1535970, 0, '2021/08/10/', NULL, NULL, '879725f52d70a997ede137657e34af02bbb20b94', 'public', 2, NULL, '2021-08-10 06:27:33', '2021-08-10 06:27:33'),
(15, 'f112eaec511b03cc175f06b6553943faffeddfd3', 'Ảnh chụp Màn hình 2021-08-02 lúc 14.03.08.png', 'image/png', 'png', 1325052, 0, '2021/08/10/', NULL, NULL, 'eba17f1a0c11e8feb68376bf96bbd90e01a5a772', 'public', 2, NULL, '2021-08-10 06:27:36', '2021-08-10 06:27:36'),
(16, 'f112eaec511b03cc175f06b6553943faffeddfd3', 'Ảnh chụp Màn hình 2021-08-02 lúc 14.03.08.png', 'image/png', 'png', 1325052, 0, '2021/08/10/', NULL, NULL, 'eba17f1a0c11e8feb68376bf96bbd90e01a5a772', 'public', 2, NULL, '2021-08-10 06:53:17', '2021-08-10 06:53:17'),
(17, '45b40a983bc1fb14daf046c3f0320a379f872a2b', 'Ảnh chụp Màn hình 2021-08-02 lúc 15.21.37.png', 'image/png', 'png', 353407, 0, '2021/08/10/', NULL, NULL, 'a903c6b2c18025f30dc4c6954b612c2295d9c38e', 'public', 2, NULL, '2021-08-10 06:53:20', '2021-08-10 06:53:20'),
(18, '469a9d8e032916a1c082f29b7e93fc319cd9a366', 'Ảnh chụp Màn hình 2021-08-02 lúc 13.27.08.png', 'image/png', 'png', 426054, 0, '2021/08/10/', NULL, NULL, '06cb2e6c7eae9852f6b030ab4ecba731ca73ea73', 'public', 2, NULL, '2021-08-10 06:53:24', '2021-08-10 06:53:24'),
(19, 'f112eaec511b03cc175f06b6553943faffeddfd3', 'Ảnh chụp Màn hình 2021-08-02 lúc 14.03.08.png', 'image/png', 'png', 1325052, 0, '2021/08/10/', NULL, NULL, 'eba17f1a0c11e8feb68376bf96bbd90e01a5a772', 'public', 2, NULL, '2021-08-10 07:21:54', '2021-08-10 07:21:54'),
(20, '7c65b10ed8741f04372215a696cee2a82cd0e161', 'Ảnh chụp Màn hình 2021-08-14 lúc 23.31.03.png', 'image/png', 'png', 56571, 0, '2021/08/16/', NULL, NULL, '31f7dc964e910703d23d7d20939f56e07a544ecd', 'public', 2, NULL, '2021-08-16 07:27:46', '2021-08-16 07:27:46'),
(21, 'e219d6b9f9890b84a297fd2c14c10b138016de44', 'Ảnh chụp Màn hình 2021-08-11 lúc 14.00.30.png', 'image/png', 'png', 257831, 0, '2021/08/16/', NULL, NULL, 'de24d18ece106e38f7698ec917f21ba2102706c0', 'public', 2, NULL, '2021-08-16 07:27:50', '2021-08-16 07:27:50'),
(22, '755e43610e4e2b7e9e48ec960ed0d36f76b4a189', 'Ảnh chụp Màn hình 2021-08-11 lúc 14.02.16.png', 'image/png', 'png', 171418, 0, '2021/08/16/', NULL, NULL, '838bb0f7e9c95cddc234c9891abe32c03236fb67', 'public', 2, NULL, '2021-08-16 07:27:54', '2021-08-16 07:27:54'),
(23, 'a324bad956cf8eabd422afa39efbcf94db52829e', 'dt1.jpg', 'image/jpeg', 'jpg', 131013, 0, '2021/08/17/', NULL, NULL, 'a322c7463e2feb846edfbb28db26c9345e1d29a3', 'public', 2, NULL, '2021-08-16 19:09:03', '2021-08-16 19:09:03'),
(24, 'b626e798e1f56ae2685b3d57ff8561959f8975d2', 'dt1a.jpg', 'image/jpeg', 'jpg', 13519, 0, '2021/08/17/', NULL, NULL, '4649d84dc08017d8b91df4eef99ffc1826fcc4dd', 'public', 2, NULL, '2021-08-16 19:09:13', '2021-08-16 19:09:13'),
(25, '9be61d68d312336be97f1e78f1386e444d66a84d', 'dt1b.jpg', 'image/jpeg', 'jpg', 127473, 0, '2021/08/17/', NULL, NULL, 'c28563c865ad954a3ab9e876ee28202fea14917a', 'public', 2, NULL, '2021-08-16 19:09:22', '2021-08-16 19:09:22'),
(26, 'a324bad956cf8eabd422afa39efbcf94db52829e', 'dt1.jpg', 'image/jpeg', 'jpg', 131013, 0, '2021/08/17/', NULL, NULL, 'a322c7463e2feb846edfbb28db26c9345e1d29a3', 'public', 2, NULL, '2021-08-16 19:17:37', '2021-08-16 19:17:37'),
(27, 'b626e798e1f56ae2685b3d57ff8561959f8975d2', 'dt1a.jpg', 'image/jpeg', 'jpg', 13519, 0, '2021/08/17/', NULL, NULL, '4649d84dc08017d8b91df4eef99ffc1826fcc4dd', 'public', 2, NULL, '2021-08-16 19:17:48', '2021-08-16 19:17:48'),
(28, '9be61d68d312336be97f1e78f1386e444d66a84d', 'dt1b.jpg', 'image/jpeg', 'jpg', 127473, 0, '2021/08/17/', NULL, NULL, 'c28563c865ad954a3ab9e876ee28202fea14917a', 'public', 2, NULL, '2021-08-16 19:17:53', '2021-08-16 19:17:53'),
(29, 'ee13d09dd29a29c15118e94d17796db09f7f6680', 'dt2.jpg', 'image/jpeg', 'jpg', 44327, 0, '2021/08/17/', NULL, NULL, '4401a43c53e42b3aea09a54c89074b3a23370af9', 'public', 2, NULL, '2021-08-16 19:25:32', '2021-08-16 19:25:32'),
(30, 'db78516a66cfc9378fc4256433a3cf9ad635500c', 'dt2a.jpg', 'image/jpeg', 'jpg', 55262, 0, '2021/08/17/', NULL, NULL, 'e9f13ec47be08330b5f023737ffbda9c8e9cd97a', 'public', 2, NULL, '2021-08-16 19:25:41', '2021-08-16 19:25:41'),
(31, 'cff417a339e8b5c007c6872ad67a4663044f3777', 'dt2b.jpg', 'image/jpeg', 'jpg', 55724, 0, '2021/08/17/', NULL, NULL, 'a953512d104c45b2cea81c680d6ac218039907a6', 'public', 2, NULL, '2021-08-16 19:25:48', '2021-08-16 19:25:48'),
(32, '1c75a53a641497ffba837cd693a196c939ebece3', 'dt3.jpg', 'image/jpeg', 'jpg', 32966, 0, '2021/08/17/', NULL, NULL, '6b3b086401c1618e309ff5e86c7d78c1679757dd', 'public', 2, NULL, '2021-08-16 19:35:15', '2021-08-16 19:35:15'),
(33, 'f8b58ad9e31ee32673d26c37417864fd864a4794', 'dt3a.jpg', 'image/jpeg', 'jpg', 33246, 0, '2021/08/17/', NULL, NULL, '06c0f402329715b016295a8338ccb1917bad1d27', 'public', 2, NULL, '2021-08-16 19:35:23', '2021-08-16 19:35:23'),
(34, 'c9ff3c2a8abc704172accbfd82430c53cc549aef', 'dt3b.jpg', 'image/jpeg', 'jpg', 38156, 0, '2021/08/17/', NULL, NULL, '7060d82ea59110eb20b2995d2142160260cc4e47', 'public', 2, NULL, '2021-08-16 19:35:36', '2021-08-16 19:35:36'),
(35, '668dbee8e87e33fc0ce0c9a85782542c398adb57', 'dt4.jpg', 'image/jpeg', 'jpg', 54258, 0, '2021/08/17/', NULL, NULL, 'afd822442612d51a900312ff567fe8e6daafffba', 'public', 2, NULL, '2021-08-16 19:38:53', '2021-08-16 19:38:53'),
(36, '935f23b5790b18baa89d9c9fa81ac990c63ab294', 'dt4a.jpg', 'image/jpeg', 'jpg', 14313, 0, '2021/08/17/', NULL, NULL, '036555d02ed6560859e13f3b4a994593b363eb66', 'public', 2, NULL, '2021-08-16 19:39:02', '2021-08-16 19:39:02'),
(37, '92b01efa9510c092ea97e736ff0fe2b43ef2cbf3', 'dt4b.jpg', 'image/jpeg', 'jpg', 28262, 0, '2021/08/17/', NULL, NULL, 'a9023c44b07067f694458caf10ec1156952c129a', 'public', 2, NULL, '2021-08-16 19:39:09', '2021-08-16 19:39:09'),
(38, '482dc72451fda26e22dc98ccb741c2941cc938e2', 'dt5.jpg', 'image/jpeg', 'jpg', 31249, 0, '2021/08/17/', NULL, NULL, '423c9554f0d285a66c05cdf73e01ad3639e062c0', 'public', 2, NULL, '2021-08-16 19:49:54', '2021-08-16 19:49:54'),
(39, '9791c4a9e786f69adbee0716c47af3c9d8886957', 'dt5a.jpg', 'image/jpeg', 'jpg', 35101, 0, '2021/08/17/', NULL, NULL, '671f7718f397fe51624ccc58538e675bb3365e30', 'public', 2, NULL, '2021-08-16 19:50:03', '2021-08-16 19:50:03'),
(40, 'e47f9d38fab6c9ae145df2fbe19ab12bd3e752a4', 'dt5b.jpg', 'image/jpeg', 'jpg', 34182, 0, '2021/08/17/', NULL, NULL, 'b33a8470d97c3bd75df952e9829c5127259ffa83', 'public', 2, NULL, '2021-08-16 19:50:12', '2021-08-16 19:50:12'),
(41, '7764072892773f5f589b66fb72662bd010183573', 'dt6.jpg', 'image/jpeg', 'jpg', 34709, 0, '2021/08/17/', NULL, NULL, 'd88b54503659fa120d877cf08fd69913dfee7694', 'public', 2, NULL, '2021-08-16 19:52:09', '2021-08-16 19:52:09'),
(42, '29371558dcece57c4b10808bc5c12886a0855fe5', 'dt6a.jpg', 'image/jpeg', 'jpg', 11053, 0, '2021/08/17/', NULL, NULL, 'cf71de089c7a191b08a4433a3354f01a7ef78ec7', 'public', 2, NULL, '2021-08-16 19:52:18', '2021-08-16 19:52:18'),
(43, 'cf0ceb71d80668cdb4e52406f9650bcf0647b6c0', 'dt6b.jpg', 'image/jpeg', 'jpg', 11376, 0, '2021/08/17/', NULL, NULL, '8ba720aa6e1b7649cd57e25193776b4853e9a7c5', 'public', 2, NULL, '2021-08-16 19:52:39', '2021-08-16 19:52:39'),
(44, '0fb0869dc798d1b644053d85834fffe68c68edae', 'ip1.jpg', 'image/jpeg', 'jpg', 29294, 0, '2021/08/17/', NULL, NULL, 'eba3ba4db9329e4aebd97782ef807f25da5e44ab', 'public', 2, NULL, '2021-08-16 19:56:17', '2021-08-16 19:56:17'),
(45, 'ec9745cc89518847993e50b5422d1c0a8c9e0968', 'ip1a.jpg', 'image/jpeg', 'jpg', 19890, 0, '2021/08/17/', NULL, NULL, 'e3a0610fc371b26a70b6815aba5bc7d32d282a84', 'public', 2, NULL, '2021-08-16 19:56:28', '2021-08-16 19:56:28'),
(46, 'b798cde40c87f0638e9c8e5bc1a346e0a26ab325', 'ip1b.jpg', 'image/jpeg', 'jpg', 22610, 0, '2021/08/17/', NULL, NULL, '0d304701cc22bc1e0bc3d70b4aeb7ab313ab404e', 'public', 2, NULL, '2021-08-16 19:56:40', '2021-08-16 19:56:40'),
(47, 'f22fa5028bbb3e23f91f45071df23dc7edec4213', 'ip2.jpg', 'image/jpeg', 'jpg', 23317, 0, '2021/08/17/', NULL, NULL, '6e7bcfd107c3954657f790c43a057c383e0e31b2', 'public', 2, NULL, '2021-08-16 20:01:09', '2021-08-16 20:01:09'),
(48, '52588ec744049993e06094745d1becceebc8a183', 'ip2a.jpg', 'image/jpeg', 'jpg', 25569, 0, '2021/08/17/', NULL, NULL, 'b236ea78ad8e7e1d457f84246fd1ec3c9a1995fc', 'public', 2, NULL, '2021-08-16 20:01:22', '2021-08-16 20:01:22'),
(49, '31769f1a946b262c34e348994617bafd841eadb6', 'ip2b.jpg', 'image/jpeg', 'jpg', 28496, 0, '2021/08/17/', NULL, NULL, 'a02da2bdfbb9e7f746cb630327e60d3cc7131e0c', 'public', 2, NULL, '2021-08-16 20:01:38', '2021-08-16 20:01:38'),
(50, 'a987fcbdd8a66f6c05755673b45faf226284e720', 'ip3.jpg', 'image/jpeg', 'jpg', 30531, 0, '2021/08/17/', NULL, NULL, '5c69c3a833ae2e9a71547d50586acc164a0ba585', 'public', 2, NULL, '2021-08-16 20:25:46', '2021-08-16 20:25:46'),
(51, '7b58a5c2dcb553bd2cd22645f67bb43d1824af16', 'ip3a.jpg', 'image/jpeg', 'jpg', 95667, 0, '2021/08/17/', NULL, NULL, '96b74216573e242eb0af4c72486901cbe76b5ae7', 'public', 2, NULL, '2021-08-16 20:25:58', '2021-08-16 20:25:58'),
(52, '796ed05b979811b4205e507232723778fe045e42', 'ip3b.jpg', 'image/jpeg', 'jpg', 26839, 0, '2021/08/17/', NULL, NULL, '51c5590cf63ef55014c2839475a7e7420b2cf8d3', 'public', 2, NULL, '2021-08-16 20:26:13', '2021-08-16 20:26:13'),
(53, 'b6eca0274bdd9424508df91a375334cf61941d53', 'ip4.jpg', 'image/jpeg', 'jpg', 24572, 0, '2021/08/17/', NULL, NULL, '9d17725bfaef3d7e964a5771e2f9452197059cfc', 'public', 2, NULL, '2021-08-16 20:28:04', '2021-08-16 20:28:04'),
(54, '45e8fc7501d0a644d256b95f02603ba76cb94745', 'ip4a.jpg', 'image/jpeg', 'jpg', 42981, 0, '2021/08/17/', NULL, NULL, '734f31031a71d04d8f9e0657751cceda05551a6b', 'public', 2, NULL, '2021-08-16 20:28:16', '2021-08-16 20:28:16'),
(55, 'be2fb866989de83e511475028dc344e1bc6af198', 'ip4b.jpg', 'image/jpeg', 'jpg', 49277, 0, '2021/08/17/', NULL, NULL, 'c2c954bd25f503b9406000289509895421a039ad', 'public', 2, NULL, '2021-08-16 20:28:26', '2021-08-16 20:28:26'),
(56, '0d1059f3e6aaff2fef5192842e9cc5619b23ca5d', 'ip5.jpg', 'image/jpeg', 'jpg', 24905, 0, '2021/08/17/', NULL, NULL, '4a86043895326ebe3d520be962b3da64ceff9ac5', 'public', 2, NULL, '2021-08-16 20:30:25', '2021-08-16 20:30:25'),
(57, 'a987fcbdd8a66f6c05755673b45faf226284e720', 'ip5a.jpg', 'image/jpeg', 'jpg', 30531, 0, '2021/08/17/', NULL, NULL, '5c69c3a833ae2e9a71547d50586acc164a0ba585', 'public', 2, NULL, '2021-08-16 20:30:35', '2021-08-16 20:30:35'),
(58, '1289a5bb9d0183af4b63906729ce96365fede395', 'ip5b.jpg', 'image/jpeg', 'jpg', 26529, 0, '2021/08/17/', NULL, NULL, 'cd0643cd5a2c2abdefc6281f5028c0ee191d3e93', 'public', 2, NULL, '2021-08-16 20:30:45', '2021-08-16 20:30:45'),
(59, '52588ec744049993e06094745d1becceebc8a183', 'ip6.jpg', 'image/jpeg', 'jpg', 25569, 0, '2021/08/17/', NULL, NULL, 'b236ea78ad8e7e1d457f84246fd1ec3c9a1995fc', 'public', 2, NULL, '2021-08-16 20:32:28', '2021-08-16 20:32:28'),
(60, '5d963696dbdbfcb5c22b6932db13dab6e7d74ee8', 'ip6a.jpg', 'image/jpeg', 'jpg', 32404, 0, '2021/08/17/', NULL, NULL, '923a91bb50d4d9c05f9c975e23df048276c7b784', 'public', 2, NULL, '2021-08-16 20:32:39', '2021-08-16 20:32:39'),
(61, '44e9649d80ad3dfbc68f37d9feea307b2c1fb986', 'ip6b.jpg', 'image/jpeg', 'jpg', 30874, 0, '2021/08/17/', NULL, NULL, 'd34c6dbd28bc68a2e046bffbd2e1eaf398a9868d', 'public', 2, NULL, '2021-08-16 20:32:49', '2021-08-16 20:32:49'),
(62, 'bef5a910e9b6237ad063ab94144e8e180d689e51', 'xi1.jpg', 'image/jpeg', 'jpg', 32476, 0, '2021/08/17/', NULL, NULL, 'e688e9919cb754f52f4661a04aae57eaf44db3f3', 'public', 2, NULL, '2021-08-16 20:34:57', '2021-08-16 20:34:57'),
(63, 'f05f1e60074e967205506a5f6a7c3715d658bdf6', 'xi1a.jpg', 'image/jpeg', 'jpg', 26906, 0, '2021/08/17/', NULL, NULL, 'f5a1519f10334ebf1d29be66b46654337cee5ca4', 'public', 2, NULL, '2021-08-16 20:35:07', '2021-08-16 20:35:07'),
(64, '4a23d8d2b4eea82e50861708a96fbb96f2dca171', 'xi1b.jpg', 'image/jpeg', 'jpg', 27762, 0, '2021/08/17/', NULL, NULL, '487e17402acb4c5d000d7d33d03d46c26ed8871e', 'public', 2, NULL, '2021-08-16 20:35:18', '2021-08-16 20:35:18'),
(65, '41dd8143febe6730a8722be5c72562623a9304b0', 'xi2.jpg', 'image/jpeg', 'jpg', 40595, 0, '2021/08/17/', NULL, NULL, '96256771b2fd14c8844a21ab83d512f21925651d', 'public', 2, NULL, '2021-08-16 20:37:01', '2021-08-16 20:37:01'),
(66, 'bc38910299f6ca47bf3158e16727878ccc52e9c0', 'xi2a.jpg', 'image/jpeg', 'jpg', 36293, 0, '2021/08/17/', NULL, NULL, '58103f997c8bbfea089c0a5923ad4d0bb89320e3', 'public', 2, NULL, '2021-08-16 20:37:10', '2021-08-16 20:37:10'),
(67, '8bd2eef76adf8e8784b2829160772f3131771232', 'xi2b.jpg', 'image/jpeg', 'jpg', 43249, 0, '2021/08/17/', NULL, NULL, '27b795f7cdd40bab5e19081d56e71e54dfbdd989', 'public', 2, NULL, '2021-08-16 20:37:19', '2021-08-16 20:37:19'),
(68, '8f7f3e8b32783092373ecb3186d03f5d42544829', 'xi3.jpg', 'image/jpeg', 'jpg', 42299, 0, '2021/08/17/', NULL, NULL, '5c032d792e15daea801e960f1321ca9b2902fcbc', 'public', 2, NULL, '2021-08-16 20:41:25', '2021-08-16 20:41:25'),
(69, '6d64620949de688d32ff08f68ed48c837381bd60', 'xi3a.jpg', 'image/jpeg', 'jpg', 65405, 0, '2021/08/17/', NULL, NULL, '86e8ad4f0fa070c60dd0b4411dc5caffa1b88063', 'public', 2, NULL, '2021-08-16 20:41:36', '2021-08-16 20:41:36'),
(70, '9bfe6ddb30ce5c3c146f7d0cb84a20facd7a5f58', 'xi3b.jpg', 'image/jpeg', 'jpg', 76397, 0, '2021/08/17/', NULL, NULL, '7f977c859e9d6b57f4022ef760d3258c5927c313', 'public', 2, NULL, '2021-08-16 20:41:47', '2021-08-16 20:41:47'),
(71, 'e1bd774831f5c4b244880b985080507765a04044', 'xi4.jpg', 'image/jpeg', 'jpg', 37098, 0, '2021/08/17/', NULL, NULL, '8bd13aef02348b8f49eaf970e1239e3aee7457bd', 'public', 2, NULL, '2021-08-16 20:47:17', '2021-08-16 20:47:17'),
(72, '87469aa8dd157121b871b0bed8211030a0da2756', 'xi4a.jpg', 'image/jpeg', 'jpg', 39642, 0, '2021/08/17/', NULL, NULL, '50273a2e62d5927780f12a1759550da5f3fe6d0f', 'public', 2, NULL, '2021-08-16 20:47:29', '2021-08-16 20:47:29'),
(73, 'e5e2efbd9ceec90d7d91b34e4cd41299572e32eb', 'xi4b.jpg', 'image/jpeg', 'jpg', 25365, 0, '2021/08/17/', NULL, NULL, '30656c5337b72e6f82053b9be26ee2e7646dd32c', 'public', 2, NULL, '2021-08-16 20:47:42', '2021-08-16 20:47:42'),
(74, '16ce0bc7f00484861b73250b2ed60f62ad75102c', 'xi5.jpg', 'image/jpeg', 'jpg', 36142, 0, '2021/08/17/', NULL, NULL, '009d8484692604d7ff32986e10d23dc706689933', 'public', 2, NULL, '2021-08-16 20:50:08', '2021-08-16 20:50:08'),
(75, 'ee546688196ddc8461febc98114ee55783b423b4', 'xi5a.jpg', 'image/jpeg', 'jpg', 45012, 0, '2021/08/17/', NULL, NULL, 'ac9619afe15c3be7c1d99e85a7448cad12d9e299', 'public', 2, NULL, '2021-08-16 20:50:16', '2021-08-16 20:50:16'),
(76, '30a3de2f0d271c463aefcc5a393373479ab9c3cb', 'xi5b.jpg', 'image/jpeg', 'jpg', 62126, 0, '2021/08/17/', NULL, NULL, '94ef0927a0791fb984591709aa45dc87990f753f', 'public', 2, NULL, '2021-08-16 20:50:25', '2021-08-16 20:50:25'),
(77, '1d079a084d1d9104d77e23210c96897791a27df3', 'xi6.jpg', 'image/jpeg', 'jpg', 35206, 0, '2021/08/17/', NULL, NULL, 'c747ae963cfd255e3a8f23f491f65b7d05ac3352', 'public', 2, NULL, '2021-08-16 20:55:52', '2021-08-16 20:55:52'),
(78, 'fda9de744af5e07dc1a345a6195aa061e4dc5b72', 'xi6a.jpg', 'image/jpeg', 'jpg', 38775, 0, '2021/08/17/', NULL, NULL, '930e2a17deaca02b566d417c2c11cf38647a0ed1', 'public', 2, NULL, '2021-08-16 20:56:00', '2021-08-16 20:56:00'),
(79, '13c85da8ecea867b998391ddaaebf15b5426acf4', 'xi6b.jpg', 'image/jpeg', 'jpg', 33476, 0, '2021/08/17/', NULL, NULL, '2ab484a52e533a3c5678bf447efc2034ea926c26', 'public', 2, NULL, '2021-08-16 20:56:09', '2021-08-16 20:56:09'),
(80, 'cd1d00f6de56cf318a87b5b5427a3ea3cef9e8e3', 'ap1.jpg', 'image/jpeg', 'jpg', 39723, 0, '2021/08/17/', NULL, NULL, '483b42f0ab4b89b69e0ed3b9824198e390ac8b2c', 'public', 2, NULL, '2021-08-16 20:58:01', '2021-08-16 20:58:01'),
(81, '06bb679d0a7cf94d89dbb653d97fff3dc974b953', 'ap1a.jpg', 'image/jpeg', 'jpg', 35320, 0, '2021/08/17/', NULL, NULL, '5502eb7faf91939aef876d3fdf97f34e6d1adacd', 'public', 2, NULL, '2021-08-16 20:58:05', '2021-08-16 20:58:05'),
(82, '4388a97624c32f2ce7e4bc9af5bb84892415f354', 'ap1b.jpg', 'image/jpeg', 'jpg', 29627, 0, '2021/08/17/', NULL, NULL, '47acf4ac9c68def581f6aa743ebd2355f5986f91', 'public', 2, NULL, '2021-08-16 20:58:09', '2021-08-16 20:58:09'),
(83, 'a30029f7406cd0f0d272d18160b0e75479be3d91', 'ap2.jpg', 'image/jpeg', 'jpg', 28849, 0, '2021/08/17/', NULL, NULL, 'f96f1be3dbee0e53b4d248485f09181c8f1bf0e9', 'public', 2, NULL, '2021-08-16 21:00:27', '2021-08-16 21:00:27'),
(84, 'e00e37f2ffdbd471cd0fd8497f5d56c3c2a7aa6b', 'ap2a.jpg', 'image/jpeg', 'jpg', 82756, 0, '2021/08/17/', NULL, NULL, '757e39d4aaa906e41e1406126be7c319e802ca1f', 'public', 2, NULL, '2021-08-16 21:00:33', '2021-08-16 21:00:33'),
(85, 'f29046c5b8115409565d30989e1a8e513e43a87f', 'ap2b.jpg', 'image/jpeg', 'jpg', 30530, 0, '2021/08/17/', NULL, NULL, '930adf0d97c6d0f518e20de4815f5e591156c588', 'public', 2, NULL, '2021-08-16 21:00:37', '2021-08-16 21:00:37'),
(86, '2eb8796d85c574059ead0ca65d300e954438a16c', 'ap3.jpg', 'image/jpeg', 'jpg', 44427, 0, '2021/08/17/', NULL, NULL, '835837702acdc4c49c69481aa7c863b76cc44f7f', 'public', 2, NULL, '2021-08-16 21:05:27', '2021-08-16 21:05:27'),
(87, '5afea9c781072654110f8d3cf1bafaf3024f0c41', 'ap3a.jpg', 'image/jpeg', 'jpg', 62202, 0, '2021/08/17/', NULL, NULL, 'a89815cd98ab0b92f2006fb521729910eaa85d71', 'public', 2, NULL, '2021-08-16 21:05:31', '2021-08-16 21:05:31'),
(88, 'ac850f5e611cdda8d0e2d98e9f5453d096151d72', 'ap3b.jpg', 'image/jpeg', 'jpg', 57621, 0, '2021/08/17/', NULL, NULL, 'b4cc27df6fd632a54ed2fd0b073d8b828e05e081', 'public', 2, NULL, '2021-08-16 21:05:35', '2021-08-16 21:05:35'),
(89, 'ab7dceaa145fc6c3bb9781deb158e33befcc2950', 'ap4.jpg', 'image/jpeg', 'jpg', 16520, 0, '2021/08/17/', NULL, NULL, '2d5d8b08cf86a40ee0996affbba073a793484a01', 'public', 2, NULL, '2021-08-16 21:07:28', '2021-08-16 21:07:28'),
(90, '736e16c5e2b45a2f5785a2b7c08591a1f7dd1a33', 'ap4a.jpg', 'image/jpeg', 'jpg', 23668, 0, '2021/08/17/', NULL, NULL, 'a2692f97300e7cf7bd2729bfad6c1f7a571323c2', 'public', 2, NULL, '2021-08-16 21:07:32', '2021-08-16 21:07:32'),
(91, '7ae7f1f2d0d06e572b8b539a9045ee18d947a5ba', 'ap4b.jpg', 'image/jpeg', 'jpg', 7109, 0, '2021/08/17/', NULL, NULL, '4de1837f92a9006dc0f556494440db1d80d8f40e', 'public', 2, NULL, '2021-08-16 21:07:36', '2021-08-16 21:07:36'),
(92, '9d4eaf6751c831444c61bb242dc741cffccf136c', 'ap5.jpg', 'image/jpeg', 'jpg', 27565, 0, '2021/08/17/', NULL, NULL, 'fcc3e56edaa713634caad51ec7f51a778c18fecf', 'public', 2, NULL, '2021-08-16 21:09:11', '2021-08-16 21:09:11'),
(93, '02941b8faf1a9f62ad903c75386362879fe07c2a', 'ap5a.jpg', 'image/jpeg', 'jpg', 16238, 0, '2021/08/17/', NULL, NULL, 'b3ad079bf5d60a955293bd4a69c3d2419e1371af', 'public', 2, NULL, '2021-08-16 21:09:17', '2021-08-16 21:09:17'),
(94, '2f07b0b85c2b2689151656f0cf5af3e7ca17dd02', 'ap5b.jpg', 'image/jpeg', 'jpg', 30516, 0, '2021/08/17/', NULL, NULL, 'fba339535c5d0696240b335df586777fdd1ae465', 'public', 2, NULL, '2021-08-16 21:09:25', '2021-08-16 21:09:25'),
(95, '0a34a4dc2bf905cfb831d502160542854551ac92', 'ap6.jpg', 'image/jpeg', 'jpg', 48597, 0, '2021/08/17/', NULL, NULL, '0578da9e49b43d5aa5d0f3799616b7dbbc594630', 'public', 2, NULL, '2021-08-16 21:11:08', '2021-08-16 21:11:08'),
(96, '9eb569235d87820288f65e2c758138716d21ba82', 'ap6a.jpg', 'image/jpeg', 'jpg', 106865, 0, '2021/08/17/', NULL, NULL, 'ddc1b78c2b4935a3b3da3d48a844589405a2d061', 'public', 2, NULL, '2021-08-16 21:11:14', '2021-08-16 21:11:14'),
(97, '4d11c572e67de7ea33d504ba751f336d02e549bc', 'ap6b.jpg', 'image/jpeg', 'jpg', 115779, 0, '2021/08/17/', NULL, NULL, '7740491c54276c88bb3510fffddb6394eafa7ee0', 'public', 2, NULL, '2021-08-16 21:11:21', '2021-08-16 21:11:21'),
(98, '514725b5b0e62a079404c4bb32f9ee09932dca27', 'ap7.jpg', 'image/jpeg', 'jpg', 25978, 0, '2021/08/17/', NULL, NULL, '3b1fca9e9696eea96cb738cc1b7294cfc419416f', 'public', 2, NULL, '2021-08-16 21:12:51', '2021-08-16 21:12:51'),
(99, '5add4d852ef5aff56b2de0fbb3a7107cae1b0992', 'ap7a.jpg', 'image/jpeg', 'jpg', 23131, 0, '2021/08/17/', NULL, NULL, 'f55b5c83503f191a9291cfe02cae405a3896e658', 'public', 2, NULL, '2021-08-16 21:12:57', '2021-08-16 21:12:57'),
(100, 'b20c8aefa397c0eca8b68d9c513522730cee9eb9', 'ap7b.jpg', 'image/jpeg', 'jpg', 27661, 0, '2021/08/17/', NULL, NULL, '08c540ec77170339044cd27fb7d783c8bade5849', 'public', 2, NULL, '2021-08-16 21:13:07', '2021-08-16 21:13:07'),
(101, '35ca8597d94d4b454e0b65391669cdba3b70c71a', 'ap8.jpg', 'image/jpeg', 'jpg', 29504, 0, '2021/08/17/', NULL, NULL, '1046b8d109798513860fd64a48468098441f3981', 'public', 2, NULL, '2021-08-16 21:18:01', '2021-08-16 21:18:01'),
(102, 'e0d5703be0508d349f657fcb20f1213e51d0cda2', 'ap8a.jpg', 'image/jpeg', 'jpg', 20006, 0, '2021/08/17/', NULL, NULL, '64a04a47a7acb92fe5df8a5a1e5675b98206b90b', 'public', 2, NULL, '2021-08-16 21:18:06', '2021-08-16 21:18:06'),
(103, 'ffe8237f5ce69681a63209b9ad545ba9946c995e', 'ap8b.jpg', 'image/jpeg', 'jpg', 20340, 0, '2021/08/17/', NULL, NULL, '7deadb0e6f49ebd09200eacc0ae8e429962c8d54', 'public', 2, NULL, '2021-08-16 21:18:12', '2021-08-16 21:18:12'),
(104, 'f85e5b5e5ed8b650eb639c047866975b21f152de', 'ap9.jpg', 'image/jpeg', 'jpg', 29444, 0, '2021/08/17/', NULL, NULL, '279469a6ae1962620cb8aafca317a61a7a27e545', 'public', 2, NULL, '2021-08-16 22:41:09', '2021-08-16 22:41:09'),
(105, '0c7f8b3f2435300c93207df018c1261dabc3d086', 'ap9a.png', 'image/png', 'png', 122378, 0, '2021/08/17/', NULL, NULL, '4581aafdc73ab3d82968cb60ad96b1be4a0bf303', 'public', 2, NULL, '2021-08-16 22:41:15', '2021-08-16 22:41:15'),
(106, '28152f65289daf8c7285f16507f84ed869db7620', 'ap9b.png', 'image/png', 'png', 154041, 0, '2021/08/17/', NULL, NULL, '2c320db48c26f6b0abac9bbc1168ba84c07b8209', 'public', 2, NULL, '2021-08-16 22:41:22', '2021-08-16 22:41:22'),
(107, '6c0920c4ccc04bba39718f113938b77931a2bb47', 'vs1.jpg', 'image/jpeg', 'jpg', 35604, 0, '2021/08/17/', NULL, NULL, 'f8d06e4dd62959bb92f09a85fdd471180ac1b2df', 'public', 2, NULL, '2021-08-16 22:45:22', '2021-08-16 22:45:22'),
(108, '24fe33ea2d2ed005b11e83af0d2b9d8feb18989e', 'vs1a.jpg', 'image/jpeg', 'jpg', 33034, 0, '2021/08/17/', NULL, NULL, '7fcb8a1e9c5f99a6c083644bd2f3d54f706695c0', 'public', 2, NULL, '2021-08-16 22:45:30', '2021-08-16 22:45:30'),
(109, 'd76839ed1229a037824c842b2e2c82afae825271', 'vs1b.jpg', 'image/jpeg', 'jpg', 38741, 0, '2021/08/17/', NULL, NULL, '4e13bb45c5f282d3fba73377d4e49443b0ebf54d', 'public', 2, NULL, '2021-08-16 22:45:39', '2021-08-16 22:45:39'),
(110, '4c7a8ce1489e73a814a044fda9484457b2059931', 'vs2.png', 'image/png', 'png', 72706, 0, '2021/08/17/', NULL, NULL, '08b3b082e3af6ec0863f8bf8d840aeb36bb87b29', 'public', 2, NULL, '2021-08-16 22:47:12', '2021-08-16 22:47:12'),
(111, '77e8b7b4126f70d2ba5161b5ed387825f481a773', 'vs2a.png', 'image/png', 'png', 70686, 0, '2021/08/17/', NULL, NULL, '256e6bf38da86aac3351a97d4d64a5c0b9d7d8cd', 'public', 2, NULL, '2021-08-16 22:47:22', '2021-08-16 22:47:22'),
(112, '5b12bf3ef39b029911fd78fad732e6dd71ce1f9e', 'vs2b.png', 'image/png', 'png', 65101, 0, '2021/08/17/', NULL, NULL, '80b98149d2fbcd783a0e8c3c41e876aa5b76131f', 'public', 2, NULL, '2021-08-16 22:47:32', '2021-08-16 22:47:32'),
(113, '609b7e081ae3fca716da640da0be90d8cb911e4d', 'vs3.png', 'image/png', 'png', 70682, 0, '2021/08/17/', NULL, NULL, '5fa78b3a4a02f3064a03e58d47b9fb9c93bc7a5e', 'public', 2, NULL, '2021-08-16 22:49:42', '2021-08-16 22:49:42'),
(114, '19a6857d070a4b0ae73a687904cf1a60701f41c3', 'vs3a.png', 'image/png', 'png', 72657, 0, '2021/08/17/', NULL, NULL, '5c71800b3b17a023eaf8b20db782e8215ed2dcf6', 'public', 2, NULL, '2021-08-16 22:49:49', '2021-08-16 22:49:49'),
(115, '9e8177cf23d2e5c89ffbef7489419104bb52e285', 'vs3b.png', 'image/png', 'png', 76476, 0, '2021/08/17/', NULL, NULL, 'd3b2a98977949bf50d8c97f9ec647c5c91c087af', 'public', 2, NULL, '2021-08-16 22:49:58', '2021-08-16 22:49:58'),
(116, '2d94d699cfbc4a26fc3a3ab32de5d2009a607767', 'vs4.jpg', 'image/jpeg', 'jpg', 24928, 0, '2021/08/17/', NULL, NULL, 'bef312f9e1090e78c82f4c31075cb45b3230e693', 'public', 2, NULL, '2021-08-16 22:53:05', '2021-08-16 22:53:05'),
(117, 'adb98f8c3b6f6b7858c6ca5bcdaabfdb9eaa5be5', 'vs4a.jpg', 'image/jpeg', 'jpg', 33486, 0, '2021/08/17/', NULL, NULL, '927cd62d8d336558d19959da18e53db8f9d31bea', 'public', 2, NULL, '2021-08-16 22:53:13', '2021-08-16 22:53:13'),
(118, '265ff462e37f39778517b099e825d08800b71cfc', 'vs4b.jpg', 'image/jpeg', 'jpg', 18949, 0, '2021/08/17/', NULL, NULL, 'c1612de1bdecbba07108d227cbb1323c43f9731f', 'public', 2, NULL, '2021-08-16 22:53:23', '2021-08-16 22:53:23'),
(119, 'b2a696fa0ef1cec0f0d3c5187c48210e25a830b7', 'vs5.jpg', 'image/jpeg', 'jpg', 39567, 0, '2021/08/17/', NULL, NULL, '2991685342601ce6420613b0ed4798a94ad58fe5', 'public', 2, NULL, '2021-08-16 22:59:22', '2021-08-16 22:59:22'),
(120, 'ddddc68e835f9a7827596e3b3384eaf1775e23c1', 'vs5a.jpg', 'image/jpeg', 'jpg', 37932, 0, '2021/08/17/', NULL, NULL, 'e9f8f35736616580fefb08801467bcb7db7e40c5', 'public', 2, NULL, '2021-08-16 22:59:37', '2021-08-16 22:59:37'),
(121, 'd9a1e958e65a2be43df7e9fa809fa5b7cdc22cf5', 'vs5b.jpg', 'image/jpeg', 'jpg', 38160, 0, '2021/08/17/', NULL, NULL, 'ad94f6eeb72ff13cdc5908e64d2bdb65687d320c', 'public', 2, NULL, '2021-08-16 22:59:46', '2021-08-16 22:59:46'),
(122, 'fdb78709879909aa6e3f12aa035f76aae5f25433', 'vs6.jpg', 'image/jpeg', 'jpg', 24050, 0, '2021/08/17/', NULL, NULL, 'bd048cabd9ba5ccdaf65924f2d01395935cb7605', 'public', 2, NULL, '2021-08-16 23:03:58', '2021-08-16 23:03:58'),
(123, '3f120c9133688a6112f68146d8f8cb4e650c0d19', 'vs6a.jpg', 'image/jpeg', 'jpg', 37252, 0, '2021/08/17/', NULL, NULL, 'bd89b9b70aa4cdcedd59b21025b36b7360bbf638', 'public', 2, NULL, '2021-08-16 23:04:07', '2021-08-16 23:04:07'),
(124, '0de15d415321276d5cfbb2c041fbe7b16a9b9496', 'vs6b.png', 'image/png', 'png', 181266, 0, '2021/08/17/', NULL, NULL, 'c9443234531673804184e2e7c5c907755497c128', 'public', 2, NULL, '2021-08-16 23:04:15', '2021-08-16 23:04:15'),
(125, 'b06519c16fef0dbf8c4180c471d159374f14dc5b', 'op1.jpg', 'image/jpeg', 'jpg', 36259, 0, '2021/08/17/', NULL, NULL, '3b1250325ee9a2167b1c50a8ebf10a781ca91fd2', 'public', 2, NULL, '2021-08-16 23:08:57', '2021-08-16 23:08:57'),
(126, 'f7f0b2348acb45ce35c668e47caa3bdf903b702e', 'op1a.jpg', 'image/jpeg', 'jpg', 41901, 0, '2021/08/17/', NULL, NULL, '40ac1dbd3e0f60541ae35ed15b844c9c73073cfa', 'public', 2, NULL, '2021-08-16 23:09:07', '2021-08-16 23:09:07'),
(127, '15162bb1e298c79349c5b08cb24595323688e960', 'op1b.jpg', 'image/jpeg', 'jpg', 73480, 0, '2021/08/17/', NULL, NULL, '597d665da9a7844a2b1f3b5d215079be6780a8f9', 'public', 2, NULL, '2021-08-16 23:09:16', '2021-08-16 23:09:16'),
(128, '9240edf1c7271b1224da035a0057b82e54914b41', 'op2.jpg', 'image/jpeg', 'jpg', 36720, 0, '2021/08/17/', NULL, NULL, 'c3ee689005570153188d3f953617d3f27b7b5819', 'public', 2, NULL, '2021-08-16 23:10:51', '2021-08-16 23:10:51'),
(129, '1f3b641ed8c3e5d5aed535c32152fc742f5e4e4c', 'op2a.jpg', 'image/jpeg', 'jpg', 33825, 0, '2021/08/17/', NULL, NULL, '6b9900e40f18b5f19b10393aefcbfd9348229c93', 'public', 2, NULL, '2021-08-16 23:10:58', '2021-08-16 23:10:58'),
(130, 'b4c37aaac378e71586bd542eba75963578ad245b', 'op2b.png', 'image/png', 'png', 895062, 0, '2021/08/17/', NULL, NULL, '7313c4d15df690d3e6e4f15ae50ca08a512c44d9', 'public', 2, NULL, '2021-08-16 23:11:05', '2021-08-16 23:11:05'),
(131, 'f0a28f34a056728aed87beb871f110e9c20f4514', 'op3.jpg', 'image/jpeg', 'jpg', 32552, 0, '2021/08/17/', NULL, NULL, '0fccda28fff8263f3340db224e51a59d6d3ed8d2', 'public', 2, NULL, '2021-08-16 23:12:34', '2021-08-16 23:12:34'),
(132, 'ff8c67b36eea7d23dc75f73fbd0ad8d847a2f6ee', 'op3a.jpg', 'image/jpeg', 'jpg', 39015, 0, '2021/08/17/', NULL, NULL, '9cf9e3a54fff33fa402cb06aed5fe695d92d8c05', 'public', 2, NULL, '2021-08-16 23:12:50', '2021-08-16 23:12:50'),
(133, 'e57e70bf2197ab4e8e870bf9a953ae682d4a1c60', 'op3b.jpg', 'image/jpeg', 'jpg', 128246, 0, '2021/08/17/', NULL, NULL, '12588b41e51cce4b4cff1e64b7e95afd5f3cae22', 'public', 2, NULL, '2021-08-16 23:12:57', '2021-08-16 23:12:57'),
(134, 'ee1b62d11365a8523564efd8d56ac0e042b1f221', 'no1.jpg', 'image/jpeg', 'jpg', 38763, 0, '2021/08/17/', NULL, NULL, 'af6a21e07a9b17b8e7df067015e722fd87de9272', 'public', 2, NULL, '2021-08-17 05:28:46', '2021-08-17 05:28:46'),
(135, '944839539a0b0cec017e243d80905bdcd95c01c8', 'no1a.jpg', 'image/jpeg', 'jpg', 30662, 0, '2021/08/17/', NULL, NULL, '184b6b33304d67a77dc7558700ddd2905f367da0', 'public', 2, NULL, '2021-08-17 05:28:54', '2021-08-17 05:28:54'),
(136, '6c9040fc11ea8fa2b4c3decb243cb1f5cf255f2b', 'no1b.jpg', 'image/jpeg', 'jpg', 39505, 0, '2021/08/17/', NULL, NULL, '8c55289caddb03c36bbbe50c945418f65407249f', 'public', 2, NULL, '2021-08-17 05:29:01', '2021-08-17 05:29:01'),
(137, '196475287420ac9766cb1d8fbf461f75cbedde2b', 'ap12.jpg', 'image/jpeg', 'jpg', 29304, 0, '2021/08/17/', NULL, NULL, '58b85dd5862f8a3004c2e32de5b796ae9d4838a9', 'public', 2, NULL, '2021-08-17 06:18:50', '2021-08-17 06:18:50'),
(138, 'ae321da7eea86d64edba016cb626dd654c9094b6', 'ap12a.webp', 'image/webp', 'webp', 87548, 0, '2021/08/17/', NULL, NULL, '8849338519b1b080f3df098bfaaf08866756396a', 'public', 2, NULL, '2021-08-17 06:19:03', '2021-08-17 06:19:03'),
(139, 'ed7af6d88e2c854bcbc0926b046d0d2c85d9d1a7', 'ap16.jpg', 'image/jpeg', 'jpg', 28903, 0, '2021/08/17/', NULL, NULL, 'c352ec75d360125f7f8aff31e61b911106bcc037', 'public', 2, NULL, '2021-08-17 06:19:12', '2021-08-17 06:19:12'),
(140, 'cd1d00f6de56cf318a87b5b5427a3ea3cef9e8e3', 'ap1.jpg', 'image/jpeg', 'jpg', 39723, 0, '2021/08/17/', NULL, NULL, '483b42f0ab4b89b69e0ed3b9824198e390ac8b2c', 'public', 2, NULL, '2021-08-17 06:31:16', '2021-08-17 06:31:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

CREATE TABLE `danhgia` (
  `danhgiaid` int(11) NOT NULL,
  `sp_id` int(11) DEFAULT NULL,
  `sosao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhgia`
--

INSERT INTO `danhgia` (`danhgiaid`, `sp_id`, `sosao`) VALUES
(27, 8, 5),
(28, 8, 3),
(29, 8, 1),
(30, 8, 1),
(31, 8, 5),
(32, 8, 4),
(33, 8, 5),
(34, 15, 4),
(35, 15, 5),
(36, 15, 3),
(37, 15, 4),
(38, 15, 3),
(39, 15, 3),
(40, 15, 1),
(41, 15, 3),
(42, 15, 5),
(43, 15, 5),
(44, 2, 4),
(45, 2, 4),
(46, 2, 5),
(47, 2, 1),
(48, 2, 1),
(49, 2, 1),
(50, 8, 5),
(51, 8, 4),
(52, 8, 5),
(53, 8, 5),
(54, 8, 3),
(55, 8, 3),
(56, 8, 3),
(57, 8, 4),
(58, 8, 3),
(59, 8, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucsp`
--

CREATE TABLE `danhmucsp` (
  `id` int(11) NOT NULL,
  `dmsp_id` varchar(50) DEFAULT NULL,
  `tendn` varchar(100) DEFAULT NULL,
  `mota` varchar(500) DEFAULT NULL,
  `parent_id` varchar(50) DEFAULT NULL,
  `nguoitao` varchar(100) DEFAULT 'admin',
  `nguoisua` varchar(100) DEFAULT 'admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `danhmucsp`
--

INSERT INTO `danhmucsp` (`id`, `dmsp_id`, `tendn`, `mota`, `parent_id`, `nguoitao`, `nguoisua`, `created_at`, `updated_at`) VALUES
(1, 'danhmuc001', 'Samsung', 'samsung_brand001', 'pr_danhmuc001', 'admin', 'admin', NULL, NULL),
(2, 'danhmuc002', 'Iphone', 'apple_brand002', 'pr_danhmuc002', 'admin', 'admin', NULL, NULL),
(3, 'danhmuc003', 'Xiaomi', 'xiaomi_brand003', 'pr_danhmuc003', 'admin', 'admin', NULL, NULL),
(4, 'danhmuc004', 'VSmart', 'vsmart_brand004', 'pr_danhmuc004', 'admin', 'admin', NULL, NULL),
(5, 'danhmuc005', 'Oppo', 'oppo_brand005', 'pr_danhmuc005', 'admin', 'admin', NULL, NULL),
(6, 'danhmuc006', 'Nokia', 'Nokia_brand006', 'pr_danhmuc006', 'admin', 'admin', NULL, NULL),
(7, 'danhmuc007', 'Appliances', 'app_brand007', 'pr_danhmuc007', 'admin', 'admin', NULL, NULL),
(8, 'danhmuc008', 'RealMe', 'Danh mục của real me', NULL, 'admin', 'admin', '2021-08-09 21:49:44', '2021-08-09 21:49:44'),
(9, 'danhmuc009', 'Oneplus', 'hjád', NULL, 'admin', 'admin', '2021-08-16 07:29:56', '2021-08-16 07:29:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `giaohang_id` int(11) DEFAULT NULL,
  `khachhang_id` int(11) DEFAULT NULL,
  `ngaytao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tongtien` varchar(10) DEFAULT NULL,
  `thanhtoan_id` int(11) DEFAULT NULL,
  `trangthai` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `giaohang_id`, `khachhang_id`, `ngaytao`, `tongtien`, `thanhtoan_id`, `trangthai`) VALUES
(44, 18, 4, '2021-08-17 06:38:09', '350.90', 19, 'Pending'),
(45, 19, 4, '2021-08-17 12:07:10', '544.50', 20, 'Pending'),
(46, 20, 4, '2021-08-17 12:07:49', '522.72', 21, 'Pending');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang_chitiet`
--

CREATE TABLE `donhang_chitiet` (
  `id` int(11) NOT NULL,
  `tensanpham` varchar(100) DEFAULT NULL,
  `dh_id` int(11) DEFAULT NULL,
  `sp_id` int(11) DEFAULT NULL,
  `sotien` float DEFAULT NULL,
  `soluong` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `donhang_chitiet`
--

INSERT INTO `donhang_chitiet` (`id`, `tensanpham`, `dh_id`, `sp_id`, `sotien`, `soluong`) VALUES
(18, 'iPhone 11 I Authorized Reseller', 44, 57, 290, 1),
(19, 'Xiaomi Redmi Note 10', 45, 63, 150, 3),
(20, 'Bluetooth JBL Pulse 3(LB.063)', 46, 75, 108, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `giaohang`
--

CREATE TABLE `giaohang` (
  `shipping` int(11) NOT NULL,
  `ngaytao` timestamp NULL DEFAULT NULL,
  `tongtien` float DEFAULT NULL,
  `diachidonhang` varchar(200) DEFAULT NULL,
  `sodienthoai` bigint(13) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tennguoinhan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `giaohang`
--

INSERT INTO `giaohang` (`shipping`, `ngaytao`, `tongtien`, `diachidonhang`, `sodienthoai`, `email`, `tennguoinhan`) VALUES
(1, NULL, NULL, '12 Tran Nhat Duat Street', 123123123, 'dinhvantien1995@gmail.com', 'Van Dung'),
(2, NULL, NULL, '232 Truc Khe Street', 123123123, 'virusCompany1995@gmail.com', 'Chien Thang'),
(3, NULL, NULL, '518 My Dinh 2 Street', 123123123, 'thanhbaongan@gmail.com', 'Bao Ngan'),
(4, NULL, NULL, '518 My Dinh 2 Street', 123123123, 'thanhbaongan@gmail.com', 'Bao Ngan'),
(5, NULL, NULL, '518 My Dinh 2 Street', 123123123, 'thanhbaongan@gmail.com', 'Bao Ngan'),
(6, NULL, NULL, 'Thai Binh Mo Hoi Roi', 123123123, 'TienZombieV5@gmail.com', 'Dinh Van Tien'),
(7, NULL, NULL, 'Thai Binh Mo Hoi Roi', 123123123, 'TienZombieV5@gmail.com', 'Dinh Van Tien'),
(8, NULL, NULL, 'Thai Binh Mo Hoi Roi', 123123123, 'TienZombieV5@gmail.com', 'Dinh Van Tien'),
(9, NULL, NULL, '128 Dang Van Ngu Street', 456456456, 'NguVan2008@gmail.com', 'Dang Van Ngu'),
(10, NULL, NULL, 'hanoi', 985895640, 'hai@gmail.com', 'hải'),
(11, NULL, NULL, 'Hà nội', 985895640, 'hai@gmail.com', 'hải'),
(12, NULL, NULL, 'ádf', 89, 'sdf@gmail.com', 'abf'),
(13, NULL, NULL, '13124', 89127349823, 'hai@gmail.com', 'jkh'),
(14, NULL, NULL, 'jhakd', 978236432, 'hai@gmail.com', 'abd'),
(15, NULL, NULL, '250 Nguyen Khang , Quan Caugiay , Hanoi', 969215418, 'khachhang001@gmail.com', 'Hoang dada'),
(16, NULL, NULL, '250 Nguyen Khang , Quan Caugiay , Hanoi', 969215418, 'khachhang001@gmail.com', 'Hoang dada'),
(17, NULL, NULL, 'Hà Nội', 985895640, 'hai@gmail.com', 'Hải'),
(18, NULL, NULL, 'Ha', 985895640, 'hai@gmail.com', 'HIeesu'),
(19, NULL, NULL, 'Hà Nội', 985895640, 'hainghiatan@gmail.com', 'Lê Thanh Hiêus'),
(20, NULL, NULL, 'Hà Nội', 985895640, 'hai@gmail.com', 'Hải');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gopy`
--

CREATE TABLE `gopy` (
  `id` int(11) NOT NULL,
  `ad_id` int(11) DEFAULT NULL,
  `tenkhachhang` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `noidung` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `gopy`
--

INSERT INTO `gopy` (`id`, `ad_id`, `tenkhachhang`, `email`, `noidung`) VALUES
(1, NULL, 'Thuy Trang', 'khachhang001@gmail.com', NULL),
(5, NULL, 'Thuy Trang', 'khachhang001@gmail.com', 'Hello my name is Linguamarina, i\'m from Russia.'),
(6, NULL, 'Lionel Messi', 'LeoArgentina123@gmail.com', 'Hello i from argentina. I\'m wondering about one thing that can i pay money everymonth (Like Installment) after i bought a new brand mobile ??'),
(7, NULL, 'Dang Thu Giang', 'gianglulu@gmail.com', 'this is a great a day traveling around the word with my classmate. all my stuff like bags with my needed items, shoes, hat, teeth brush , etc... have been prepared already by me. We\'re gonna start our journey on this sunday morning. Ok, now let\'s take a look to know what will happens next on this webpage ..?');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `ad_id` int(11) DEFAULT NULL,
  `kh_id` varchar(50) DEFAULT NULL,
  `sodienthoai` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tenkh` varchar(100) DEFAULT NULL,
  `matkhau` varchar(100) DEFAULT NULL,
  `diachi` varchar(100) DEFAULT NULL,
  `gioitinh` int(11) DEFAULT NULL,
  `ngaytao` timestamp NULL DEFAULT NULL,
  `ngaysinh` timestamp NULL DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `ad_id`, `kh_id`, `sodienthoai`, `email`, `tenkh`, `matkhau`, `diachi`, `gioitinh`, `ngaytao`, `ngaysinh`, `trangthai`) VALUES
(1, 1, NULL, '0123123456', 'khachhang001@gmail.com', 'Thuy Trang', '123123', 'Thanh hoa 123 street', 1, NULL, NULL, 1),
(2, NULL, 'kh002', '0969215418', 'hoangdada123@gmail.com', 'Hoang dada', '123123', '250 Nguyen Khang , Quan Caugiay , Hanoi', NULL, NULL, NULL, NULL),
(3, NULL, NULL, '0985895640', 'hai@gmail.com', 'Hải hie4éu', '123456789', 'Hanoi', 0, NULL, NULL, NULL),
(4, NULL, NULL, '0985895640', 'hainghiatan@gmail.com', 'Hiếu', '12345678', 'Hà Nội', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `id` int(11) NOT NULL,
  `km_id` varchar(50) DEFAULT NULL,
  `sp_id` int(11) DEFAULT NULL,
  `tenkm` varchar(100) DEFAULT NULL,
  `motakm` varchar(500) DEFAULT NULL,
  `giatrikm` float DEFAULT NULL,
  `nguoitao` varchar(100) DEFAULT 'admin',
  `nguoisua` varchar(100) DEFAULT 'admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`id`) VALUES
(1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham2`
--

CREATE TABLE `loaisanpham2` (
  `loaisp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham2`
--

INSERT INTO `loaisanpham2` (`loaisp`) VALUES
('BrandNew'),
('LikeNew');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu_id` varchar(50) DEFAULT NULL,
  `ad_id` int(11) DEFAULT NULL,
  `tenmenu` varchar(100) DEFAULT NULL,
  `mota` varchar(500) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `icon` blob DEFAULT NULL,
  `parent_id` varchar(50) DEFAULT NULL,
  `nguoitao` varchar(100) DEFAULT 'admin',
  `nguoisua` varchar(100) DEFAULT 'admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(3, '2015_04_12_000000_create_orchid_users_table', 1),
(4, '2015_10_19_214424_create_orchid_roles_table', 1),
(5, '2015_10_19_214425_create_orchid_role_users_table', 1),
(6, '2016_08_07_125128_create_orchid_attachmentstable_table', 1),
(7, '2017_09_17_125801_create_notifications_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanxet`
--

CREATE TABLE `nhanxet` (
  `id` int(11) NOT NULL,
  `tennhanxet` varchar(100) DEFAULT NULL,
  `sp_id` int(11) DEFAULT NULL,
  `thongtinnhanxet` varchar(500) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nhanxet`
--

INSERT INTO `nhanxet` (`id`, `tennhanxet`, `sp_id`, `thongtinnhanxet`, `created_at`) VALUES
(33, 'Minh', 52, 'xzczxczxc zxczxczxc', '2021-08-14 04:24:30'),
(36, 'Ariana', 57, 'Super cup', '2021-08-14 04:57:14'),
(37, 'Ariana', 71, 'Super cup', '2021-08-14 04:57:39'),
(38, 'Minh Nghi', 73, 'An thi Thuy', '2021-08-14 04:58:18'),
(43, 'Ronaldo', 71, 'really love that samsung item, helps me alot in my works', '2021-08-14 09:03:05'),
(44, 'Messi Lionel', 74, 'i love barcelona', '2021-08-14 09:20:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `notifications`
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
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission`
--

CREATE TABLE `permission` (
  `id` int(11) NOT NULL,
  `quyen_id` varchar(50) DEFAULT NULL,
  `ad_id` int(11) DEFAULT NULL,
  `tenquyen` varchar(100) DEFAULT NULL,
  `nguoitao` varchar(100) DEFAULT 'admin',
  `nguoisua` varchar(100) DEFAULT 'admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role_id` varchar(50) DEFAULT NULL,
  `ad_id` int(11) DEFAULT NULL,
  `tenvaitro` varchar(100) DEFAULT NULL,
  `nguoitao` varchar(100) DEFAULT 'admin',
  `nguoisua` varchar(100) DEFAULT 'admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`permissions`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_users`
--

CREATE TABLE `role_users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `sp_id` varchar(50) DEFAULT NULL,
  `tendaydu` varchar(100) DEFAULT NULL,
  `nguoiban_id` varchar(50) DEFAULT NULL,
  `hang` varchar(50) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `xuatxu_id` varchar(50) DEFAULT NULL,
  `danhmuc_id` int(11) DEFAULT NULL,
  `mota` varchar(500) DEFAULT NULL,
  `loaisp` varchar(50) DEFAULT NULL,
  `loaisanpham` int(11) DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL,
  `nguoitao` varchar(100) DEFAULT 'admin',
  `nguoisua` varchar(100) DEFAULT 'admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `anhdaidien` varchar(255) DEFAULT NULL,
  `anhdaidien2` varchar(255) DEFAULT NULL,
  `anhdaidien3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `sp_id`, `tendaydu`, `nguoiban_id`, `hang`, `price`, `xuatxu_id`, `danhmuc_id`, `mota`, `loaisp`, `loaisanpham`, `trangthai`, `nguoitao`, `nguoisua`, `created_at`, `updated_at`, `anhdaidien`, `anhdaidien2`, `anhdaidien3`) VALUES
(51, 'samsung001', 'Samsung Galaxy Note 20 Ultra 5G', NULL, NULL, 200, NULL, 1, NULL, 'LikeNew', NULL, 1, 'admin', 'admin', '2021-08-16 19:17:55', '2021-08-16 19:17:55', 'http://localhost:8000/storage/2021/08/17/a324bad956cf8eabd422afa39efbcf94db52829e.jpg', 'http://localhost:8000/storage/2021/08/17/b626e798e1f56ae2685b3d57ff8561959f8975d2.jpg', 'http://localhost:8000/storage/2021/08/17/9be61d68d312336be97f1e78f1386e444d66a84d.jpg'),
(52, 'samsung002', 'Samsung Galaxy S21', NULL, NULL, 350, NULL, 1, NULL, 'LikeNew', NULL, 1, 'admin', 'admin', '2021-08-16 19:25:50', '2021-08-16 19:25:50', 'http://localhost:8000/storage/2021/08/17/ee13d09dd29a29c15118e94d17796db09f7f6680.jpg', 'http://localhost:8000/storage/2021/08/17/db78516a66cfc9378fc4256433a3cf9ad635500c.jpg', 'http://localhost:8000/storage/2021/08/17/cff417a339e8b5c007c6872ad67a4663044f3777.jpg'),
(53, 'samsung003', 'Samsung Galaxy S20 FE', NULL, NULL, 150, NULL, 1, NULL, 'LikeNew', NULL, 1, 'admin', 'admin', '2021-08-16 19:35:38', '2021-08-16 19:35:38', 'http://localhost:8000/storage/2021/08/17/1c75a53a641497ffba837cd693a196c939ebece3.jpg', 'http://localhost:8000/storage/2021/08/17/f8b58ad9e31ee32673d26c37417864fd864a4794.jpg', 'http://localhost:8000/storage/2021/08/17/c9ff3c2a8abc704172accbfd82430c53cc549aef.jpg'),
(55, 'samsung005', 'Samsung Galaxy A52', NULL, 'Samsung', 320, NULL, 1, NULL, 'LikeNew', NULL, 1, 'admin', 'admin', '2021-08-16 19:50:14', '2021-08-16 19:50:14', 'http://localhost:8000/storage/2021/08/17/482dc72451fda26e22dc98ccb741c2941cc938e2.jpg', 'http://localhost:8000/storage/2021/08/17/9791c4a9e786f69adbee0716c47af3c9d8886957.jpg', 'http://localhost:8000/storage/2021/08/17/e47f9d38fab6c9ae145df2fbe19ab12bd3e752a4.jpg'),
(56, 'samsung006', 'Samsung Galaxy A32', NULL, 'Samsung', 390, NULL, 1, NULL, 'LikeNew', NULL, 1, 'admin', 'admin', '2021-08-16 19:52:41', '2021-08-16 19:52:41', 'http://localhost:8000/storage/2021/08/17/7764072892773f5f589b66fb72662bd010183573.jpg', 'http://localhost:8000/storage/2021/08/17/29371558dcece57c4b10808bc5c12886a0855fe5.jpg', 'http://localhost:8000/storage/2021/08/17/cf0ceb71d80668cdb4e52406f9650bcf0647b6c0.jpg'),
(57, 'iphone001', 'iPhone 11 I Authorized Reseller', NULL, 'Iphone', 290, NULL, 2, NULL, 'BrandNew', NULL, 1, 'admin', 'admin', '2021-08-16 19:56:47', '2021-08-16 19:56:47', 'http://localhost:8000/storage/2021/08/17/0fb0869dc798d1b644053d85834fffe68c68edae.jpg', 'http://localhost:8000/storage/2021/08/17/ec9745cc89518847993e50b5422d1c0a8c9e0968.jpg', 'http://localhost:8000/storage/2021/08/17/b798cde40c87f0638e9c8e5bc1a346e0a26ab325.jpg'),
(58, 'iphone002', 'iPhone 12 Pro Max I Authorized Reseller', NULL, 'Iphone', 320, NULL, 2, NULL, 'BrandNew', NULL, 1, 'admin', 'admin', '2021-08-16 20:01:51', '2021-08-16 20:01:51', 'http://localhost:8000/storage/2021/08/17/f22fa5028bbb3e23f91f45071df23dc7edec4213.jpg', 'http://localhost:8000/storage/2021/08/17/52588ec744049993e06094745d1becceebc8a183.jpg', 'http://localhost:8000/storage/2021/08/17/31769f1a946b262c34e348994617bafd841eadb6.jpg'),
(59, 'iphone003', 'iPhone 12 I Authorized Reseller', NULL, 'Iphone', 300, NULL, 2, NULL, 'LikeNew', NULL, 1, 'admin', 'admin', '2021-08-16 20:26:16', '2021-08-16 20:26:16', 'http://localhost:8000/storage/2021/08/17/a987fcbdd8a66f6c05755673b45faf226284e720.jpg', 'http://localhost:8000/storage/2021/08/17/7b58a5c2dcb553bd2cd22645f67bb43d1824af16.jpg', 'http://localhost:8000/storage/2021/08/17/796ed05b979811b4205e507232723778fe045e42.jpg'),
(60, 'iphone004', 'iPhone XR I Authorized Reseller', NULL, 'Iphone', 280, NULL, 2, NULL, 'BrandNew', NULL, 1, 'admin', 'admin', '2021-08-16 20:28:32', '2021-08-16 20:28:32', 'http://localhost:8000/storage/2021/08/17/b6eca0274bdd9424508df91a375334cf61941d53.jpg', 'http://localhost:8000/storage/2021/08/17/45e8fc7501d0a644d256b95f02603ba76cb94745.jpg', 'http://localhost:8000/storage/2021/08/17/be2fb866989de83e511475028dc344e1bc6af198.jpg'),
(61, 'iphone005', 'iPhone 12 mini 256GB I Authorized Reseller', NULL, 'Iphone', 310, NULL, 2, NULL, 'BrandNew', NULL, 1, 'admin', 'admin', '2021-08-16 20:30:51', '2021-08-16 20:30:51', 'http://localhost:8000/storage/2021/08/17/0d1059f3e6aaff2fef5192842e9cc5619b23ca5d.jpg', 'http://localhost:8000/storage/2021/08/17/a987fcbdd8a66f6c05755673b45faf226284e720.jpg', 'http://localhost:8000/storage/2021/08/17/1289a5bb9d0183af4b63906729ce96365fede395.jpg'),
(62, 'iphone006', 'iPhone 12 Pro 512GB I Authorized Reseller', NULL, 'Iphone', 320, NULL, 2, NULL, 'BrandNew', NULL, 1, 'admin', 'admin', '2021-08-16 20:32:55', '2021-08-16 20:32:55', 'http://localhost:8000/storage/2021/08/17/52588ec744049993e06094745d1becceebc8a183.jpg', 'http://localhost:8000/storage/2021/08/17/5d963696dbdbfcb5c22b6932db13dab6e7d74ee8.jpg', 'http://localhost:8000/storage/2021/08/17/44e9649d80ad3dfbc68f37d9feea307b2c1fb986.jpg'),
(63, 'xiaomi001', 'Xiaomi Redmi Note 10', NULL, 'Xiaomi', 150, NULL, 3, NULL, 'BrandNew', NULL, 1, 'admin', 'admin', '2021-08-16 20:35:22', '2021-08-16 20:35:22', 'http://localhost:8000/storage/2021/08/17/bef5a910e9b6237ad063ab94144e8e180d689e51.jpg', 'http://localhost:8000/storage/2021/08/17/f05f1e60074e967205506a5f6a7c3715d658bdf6.jpg', 'http://localhost:8000/storage/2021/08/17/4a23d8d2b4eea82e50861708a96fbb96f2dca171.jpg'),
(64, 'xiaomi002', 'Xiaomi Redmi Note 10 5G', NULL, 'Xiaomi', 180, NULL, 3, NULL, 'BrandNew', NULL, 1, 'admin', 'admin', '2021-08-16 20:37:31', '2021-08-16 20:37:31', 'http://localhost:8000/storage/2021/08/17/41dd8143febe6730a8722be5c72562623a9304b0.jpg', 'http://localhost:8000/storage/2021/08/17/bc38910299f6ca47bf3158e16727878ccc52e9c0.jpg', 'http://localhost:8000/storage/2021/08/17/8bd2eef76adf8e8784b2829160772f3131771232.jpg'),
(65, 'xiaomi003', 'Xiaomi Redmi 9T 6GB 128GB', NULL, 'Xiaomi', 280, NULL, 3, NULL, 'LikeNew', NULL, 1, 'admin', 'admin', '2021-08-16 20:41:49', '2021-08-16 20:41:49', 'http://localhost:8000/storage/2021/08/17/8f7f3e8b32783092373ecb3186d03f5d42544829.jpg', 'http://localhost:8000/storage/2021/08/17/6d64620949de688d32ff08f68ed48c837381bd60.jpg', 'http://localhost:8000/storage/2021/08/17/9bfe6ddb30ce5c3c146f7d0cb84a20facd7a5f58.jpg'),
(66, 'xiaomi004', 'Xiaomi POCO X3 NFC 128GB', NULL, 'Xiaomi', 280, NULL, 3, NULL, 'BrandNew', NULL, 1, 'admin', 'admin', '2021-08-16 20:47:48', '2021-08-16 20:47:48', 'http://localhost:8000/storage/2021/08/17/e1bd774831f5c4b244880b985080507765a04044.jpg', 'http://localhost:8000/storage/2021/08/17/87469aa8dd157121b871b0bed8211030a0da2756.jpg', 'http://localhost:8000/storage/2021/08/17/e5e2efbd9ceec90d7d91b34e4cd41299572e32eb.jpg'),
(67, 'xiaomi005', 'Xiaomi Mi 11 5G 128GB', NULL, 'Xiaomi', 255, NULL, 3, NULL, 'BrandNew', NULL, 1, 'admin', 'admin', '2021-08-16 20:50:30', '2021-08-16 20:50:30', 'http://localhost:8000/storage/2021/08/17/16ce0bc7f00484861b73250b2ed60f62ad75102c.jpg', 'http://localhost:8000/storage/2021/08/17/ee546688196ddc8461febc98114ee55783b423b4.jpg', 'http://localhost:8000/storage/2021/08/17/30a3de2f0d271c463aefcc5a393373479ab9c3cb.jpg'),
(68, 'xiaomi006', 'Xiaomi Redmi 91 4G(4GB - 64GB)', NULL, 'Xiaomi', 215, NULL, 3, NULL, 'BrandNew', NULL, 1, 'admin', 'admin', '2021-08-16 20:56:14', '2021-08-16 20:56:14', 'http://localhost:8000/storage/2021/08/17/1d079a084d1d9104d77e23210c96897791a27df3.jpg', 'http://localhost:8000/storage/2021/08/17/fda9de744af5e07dc1a345a6195aa061e4dc5b72.jpg', 'http://localhost:8000/storage/2021/08/17/13c85da8ecea867b998391ddaaebf15b5426acf4.jpg'),
(69, 'app001', 'Samsung Galaxy Watch 3 (PKDH.094)', NULL, 'Samsung', 105, NULL, 1, NULL, 'BrandNew', NULL, 1, 'admin', 'admin', '2021-08-16 20:58:17', '2021-08-16 20:58:17', 'http://localhost:8000/storage/2021/08/17/cd1d00f6de56cf318a87b5b5427a3ea3cef9e8e3.jpg', 'http://localhost:8000/storage/2021/08/17/06bb679d0a7cf94d89dbb653d97fff3dc974b953.jpg', 'http://localhost:8000/storage/2021/08/17/4388a97624c32f2ce7e4bc9af5bb84892415f354.jpg'),
(70, 'app002', 'Samsung Galaxy Fit 2', NULL, 'Samsung', 95, NULL, 1, NULL, 'BrandNew', NULL, 1, 'admin', 'admin', '2021-08-16 21:00:51', '2021-08-16 21:00:51', 'http://localhost:8000/storage/2021/08/17/a30029f7406cd0f0d272d18160b0e75479be3d91.jpg', 'http://localhost:8000/storage/2021/08/17/e00e37f2ffdbd471cd0fd8497f5d56c3c2a7aa6b.jpg', 'http://localhost:8000/storage/2021/08/17/f29046c5b8115409565d30989e1a8e513e43a87f.jpg'),
(71, 'app003', 'Samsung Galaxy Watch Active 2 40mm', NULL, 'Samsung', 95, NULL, 1, NULL, 'BrandNew', NULL, 1, 'admin', 'admin', '2021-08-16 21:05:40', '2021-08-16 21:05:40', 'http://localhost:8000/storage/2021/08/17/2eb8796d85c574059ead0ca65d300e954438a16c.jpg', 'http://localhost:8000/storage/2021/08/17/5afea9c781072654110f8d3cf1bafaf3024f0c41.jpg', 'http://localhost:8000/storage/2021/08/17/ac850f5e611cdda8d0e2d98e9f5453d096151d72.jpg'),
(72, 'app004', 'Bluetooth Apple AirPods 2 VN/A', NULL, 'Iphone', 205, NULL, 2, NULL, 'BrandNew', NULL, 1, 'admin', 'admin', '2021-08-16 21:07:41', '2021-08-16 21:07:41', 'http://localhost:8000/storage/2021/08/17/ab7dceaa145fc6c3bb9781deb158e33befcc2950.jpg', 'http://localhost:8000/storage/2021/08/17/736e16c5e2b45a2f5785a2b7c08591a1f7dd1a33.jpg', 'http://localhost:8000/storage/2021/08/17/7ae7f1f2d0d06e572b8b539a9045ee18d947a5ba.jpg'),
(73, 'app005', 'Apple AirPods Max', NULL, 'Iphone', 305, NULL, 2, NULL, 'BrandNew', NULL, 1, 'admin', 'admin', '2021-08-16 21:09:31', '2021-08-16 21:09:31', 'http://localhost:8000/storage/2021/08/17/9d4eaf6751c831444c61bb242dc741cffccf136c.jpg', 'http://localhost:8000/storage/2021/08/17/02941b8faf1a9f62ad903c75386362879fe07c2a.jpg', 'http://localhost:8000/storage/2021/08/17/2f07b0b85c2b2689151656f0cf5af3e7ca17dd02.jpg'),
(74, 'app006', 'Bluetooth JBL GO 2', NULL, 'Appliances', 95, NULL, 7, NULL, 'LikeNew', NULL, 1, 'admin', 'admin', '2021-08-16 21:11:26', '2021-08-16 21:11:26', 'http://localhost:8000/storage/2021/08/17/0a34a4dc2bf905cfb831d502160542854551ac92.jpg', 'http://localhost:8000/storage/2021/08/17/9eb569235d87820288f65e2c758138716d21ba82.jpg', 'http://localhost:8000/storage/2021/08/17/4d11c572e67de7ea33d504ba751f336d02e549bc.jpg'),
(75, 'app007', 'Bluetooth JBL Pulse 3(LB.063)', NULL, 'Appliances', 108, NULL, 7, NULL, 'BrandNew', NULL, 1, 'admin', 'admin', '2021-08-16 21:13:12', '2021-08-16 21:13:12', 'http://localhost:8000/storage/2021/08/17/514725b5b0e62a079404c4bb32f9ee09932dca27.jpg', 'http://localhost:8000/storage/2021/08/17/5add4d852ef5aff56b2de0fbb3a7107cae1b0992.jpg', 'http://localhost:8000/storage/2021/08/17/b20c8aefa397c0eca8b68d9c513522730cee9eb9.jpg'),
(76, 'app008', 'Bluetooth JBL Pulse 4', NULL, 'Appliances', 115, NULL, 7, NULL, 'BrandNew', NULL, 1, 'admin', 'admin', '2021-08-16 21:18:16', '2021-08-16 21:18:16', 'http://localhost:8000/storage/2021/08/17/35ca8597d94d4b454e0b65391669cdba3b70c71a.jpg', 'http://localhost:8000/storage/2021/08/17/e0d5703be0508d349f657fcb20f1213e51d0cda2.jpg', 'http://localhost:8000/storage/2021/08/17/ffe8237f5ce69681a63209b9ad545ba9946c995e.jpg'),
(77, 'app009', 'Polymer 10.000mAh Xiaomi Mi 18W Fast Charge Power Bank 3', NULL, 'Appliances', 90, NULL, 7, NULL, 'BrandNew', NULL, 1, 'admin', 'admin', '2021-08-16 22:41:27', '2021-08-16 22:41:27', 'http://localhost:8000/storage/2021/08/17/f85e5b5e5ed8b650eb639c047866975b21f152de.jpg', 'http://localhost:8000/storage/2021/08/17/0c7f8b3f2435300c93207df018c1261dabc3d086.png', 'http://localhost:8000/storage/2021/08/17/28152f65289daf8c7285f16507f84ed869db7620.png'),
(78, 'vinsmart001', 'Vsmart Live 4', NULL, 'VSmart', 120, NULL, 4, NULL, 'BrandNew', NULL, 1, 'admin', 'admin', '2021-08-16 22:45:44', '2021-08-16 22:45:44', 'http://localhost:8000/storage/2021/08/17/6c0920c4ccc04bba39718f113938b77931a2bb47.jpg', 'http://localhost:8000/storage/2021/08/17/24fe33ea2d2ed005b11e83af0d2b9d8feb18989e.jpg', 'http://localhost:8000/storage/2021/08/17/d76839ed1229a037824c842b2e2c82afae825271.jpg'),
(79, 'vinsmart002', 'Vsmart Active 3 6GB Ram', NULL, 'VSmart', 110, NULL, 4, NULL, 'BrandNew', NULL, 1, 'admin', 'admin', '2021-08-16 22:47:38', '2021-08-16 22:47:38', 'http://localhost:8000/storage/2021/08/17/4c7a8ce1489e73a814a044fda9484457b2059931.png', 'http://localhost:8000/storage/2021/08/17/77e8b7b4126f70d2ba5161b5ed387825f481a773.png', 'http://localhost:8000/storage/2021/08/17/5b12bf3ef39b029911fd78fad732e6dd71ce1f9e.png'),
(80, 'vinsmart003', 'Vsmart Active 3 4GB Ram', NULL, 'VSmart', 192, NULL, 4, NULL, 'BrandNew', NULL, 1, 'admin', 'admin', '2021-08-16 22:50:02', '2021-08-16 22:50:02', 'http://localhost:8000/storage/2021/08/17/609b7e081ae3fca716da640da0be90d8cb911e4d.png', 'http://localhost:8000/storage/2021/08/17/19a6857d070a4b0ae73a687904cf1a60701f41c3.png', 'http://localhost:8000/storage/2021/08/17/9e8177cf23d2e5c89ffbef7489419104bb52e285.png'),
(81, 'vinsmart004', 'Vsmart Joy 3 4GB', NULL, 'VSmart', 98, NULL, 4, NULL, 'BrandNew', NULL, 1, 'admin', 'admin', '2021-08-16 22:53:27', '2021-08-16 22:53:27', 'http://localhost:8000/storage/2021/08/17/2d94d699cfbc4a26fc3a3ab32de5d2009a607767.jpg', 'http://localhost:8000/storage/2021/08/17/adb98f8c3b6f6b7858c6ca5bcdaabfdb9eaa5be5.jpg', 'http://localhost:8000/storage/2021/08/17/265ff462e37f39778517b099e825d08800b71cfc.jpg'),
(82, 'vinsmart005', 'Vsmart Star 5 4GB 64GB', NULL, 'VSmart', 98, NULL, 4, NULL, 'BrandNew', NULL, 1, 'admin', 'admin', '2021-08-16 22:59:51', '2021-08-16 22:59:51', 'http://localhost:8000/storage/2021/08/17/b2a696fa0ef1cec0f0d3c5187c48210e25a830b7.jpg', 'http://localhost:8000/storage/2021/08/17/ddddc68e835f9a7827596e3b3384eaf1775e23c1.jpg', 'http://localhost:8000/storage/2021/08/17/d9a1e958e65a2be43df7e9fa809fa5b7cdc22cf5.jpg'),
(83, 'vinsmart006', 'Vsmart Aris Pro', NULL, 'VSmart', 98, NULL, 4, NULL, 'BrandNew', NULL, 1, 'admin', 'admin', '2021-08-16 23:04:21', '2021-08-16 23:04:21', 'http://localhost:8000/storage/2021/08/17/fdb78709879909aa6e3f12aa035f76aae5f25433.jpg', 'http://localhost:8000/storage/2021/08/17/3f120c9133688a6112f68146d8f8cb4e650c0d19.jpg', 'http://localhost:8000/storage/2021/08/17/0de15d415321276d5cfbb2c041fbe7b16a9b9496.png'),
(84, 'oppo001', 'Oppo Reno5', NULL, 'Oppo', 201, NULL, 5, NULL, 'BrandNew', NULL, 1, 'admin', 'admin', '2021-08-16 23:09:21', '2021-08-16 23:09:21', 'http://localhost:8000/storage/2021/08/17/b06519c16fef0dbf8c4180c471d159374f14dc5b.jpg', 'http://localhost:8000/storage/2021/08/17/f7f0b2348acb45ce35c668e47caa3bdf903b702e.jpg', 'http://localhost:8000/storage/2021/08/17/15162bb1e298c79349c5b08cb24595323688e960.jpg'),
(85, 'oppo002', 'Oppo A93', NULL, 'Oppo', 196, NULL, 5, NULL, 'BrandNew', NULL, 1, 'admin', 'admin', '2021-08-16 23:11:09', '2021-08-16 23:11:09', 'http://localhost:8000/storage/2021/08/17/9240edf1c7271b1224da035a0057b82e54914b41.jpg', 'http://localhost:8000/storage/2021/08/17/1f3b641ed8c3e5d5aed535c32152fc742f5e4e4c.jpg', 'http://localhost:8000/storage/2021/08/17/b4c37aaac378e71586bd542eba75963578ad245b.png'),
(86, 'oppo003', 'OPPO Find X3 Pro 5G', NULL, 'Oppo', 350, NULL, 5, NULL, 'BrandNew', NULL, 1, 'admin', 'admin', '2021-08-16 23:13:03', '2021-08-16 23:13:03', 'http://localhost:8000/storage/2021/08/17/f0a28f34a056728aed87beb871f110e9c20f4514.jpg', 'http://localhost:8000/storage/2021/08/17/ff8c67b36eea7d23dc75f73fbd0ad8d847a2f6ee.jpg', 'http://localhost:8000/storage/2021/08/17/e57e70bf2197ab4e8e870bf9a953ae682d4a1c60.jpg'),
(87, 'nokia001', 'Nokia 3.4', NULL, 'Nokia', 150, NULL, 6, NULL, 'BrandNew', NULL, 1, 'admin', 'admin', '2021-08-17 05:29:09', '2021-08-17 05:29:09', 'http://localhost:8000/storage/2021/08/17/ee1b62d11365a8523564efd8d56ac0e042b1f221.jpg', 'http://localhost:8000/storage/2021/08/17/944839539a0b0cec017e243d80905bdcd95c01c8.jpg', 'http://localhost:8000/storage/2021/08/17/6c9040fc11ea8fa2b4c3decb243cb1f5cf255f2b.jpg'),
(88, 'app010', 'Apple Watch Series 6 40mm (GPS) I Authorized Reseller', NULL, 'Appliances', 280, NULL, 7, NULL, 'BrandNew', NULL, 1, 'admin', 'admin', '2021-08-17 06:19:19', '2021-08-17 06:19:19', 'http://localhost:8000/storage/2021/08/17/196475287420ac9766cb1d8fbf461f75cbedde2b.jpg', 'http://localhost:8000/storage/2021/08/17/ae321da7eea86d64edba016cb626dd654c9094b6.webp', 'http://localhost:8000/storage/2021/08/17/ed7af6d88e2c854bcbc0926b046d0d2c85d9d1a7.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sukien`
--

CREATE TABLE `sukien` (
  `id` int(11) NOT NULL,
  `sk_id` longtext DEFAULT NULL,
  `ad_id` int(11) DEFAULT NULL,
  `sp_id` varchar(200) DEFAULT NULL,
  `tensukien` varchar(100) DEFAULT NULL,
  `anhsukien` varchar(255) DEFAULT NULL,
  `mota` varchar(500) DEFAULT NULL,
  `sort_sanpham` varchar(50) DEFAULT NULL,
  `trangthai` varchar(20) DEFAULT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `nguoitao` varchar(100) DEFAULT 'admin',
  `nguoisua` varchar(100) DEFAULT 'admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sukien`
--

INSERT INTO `sukien` (`id`, `sk_id`, `ad_id`, `sp_id`, `tensukien`, `anhsukien`, `mota`, `sort_sanpham`, `trangthai`, `start`, `end`, `nguoitao`, `nguoisua`, `created_at`, `updated_at`) VALUES
(2, 'sukien002', 1, '2', 'SPECIAL PRICE FOR QUARANTINE TIME', 'frontend/images/ev2.jpg', 'The more you buy, the lower the price', 'All Products', 'Active', '2021-08-01', '2021-08-30', 'admin', 'admin', NULL, NULL),
(3, 'sukien003', 1, '39', 'SMART WATCH - BUY NOW FOR A GOOD PRICE', 'frontend/images/ev3.jpg', 'Let\'s rock with apple watch now', 'watch', 'Active', '2021-07-23', '2021-08-30', 'admin', 'admin', NULL, NULL),
(4, 'sukien004', 1, '14', 'XIAOMI REDMI SERIES - JUST $180', 'frontend/images/ev4.jpg', '18 months warranty, free shipping', 'xiaomi', 'Active', '2021-07-25', '2021-08-28', 'admin', 'admin', NULL, NULL),
(5, 'sukien005', 1, '10', 'IPHONE 12 SERIES - BUY NOW FOR A GOOD PRICE', 'frontend/images/ev5.png', 'Exchange old iphone, discount $50', 'iphone 12', 'Active', '2021-07-25', '2021-12-28', 'admin', 'admin', NULL, NULL),
(6, 'sukien006', 1, '20', 'APPLE WATCH S6 - JUST $225 (BUY NOW)', 'frontend/images/ev6.png', 'Exchange old iphone, discount $10', 'apple watch', 'Active', '2021-07-28', '2021-10-10', 'admin', 'admin', NULL, '2021-08-17 05:12:28'),
(10, 'km006', NULL, '[\"56\"]', 'Ốp diện thoại đi', 'http://localhost:8000/storage/2021/08/17/cd1d00f6de56cf318a87b5b5427a3ea3cef9e8e3.jpg', 'Giảm giá ốp điện thoại', NULL, 'Active', '2021-08-17', '2021-08-30', 'admin', 'admin', '2021-08-17 06:31:24', '2021-08-17 06:31:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhtoan`
--

CREATE TABLE `thanhtoan` (
  `id` int(11) NOT NULL,
  `phuongthuc` varchar(200) DEFAULT NULL,
  `trangthai` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thanhtoan`
--

INSERT INTO `thanhtoan` (`id`, `phuongthuc`, `trangthai`, `created_at`) VALUES
(1, 'Cash on delivery', 'Pending', '2021-08-06 16:12:34'),
(2, 'Cash on delivery', 'Pending', '2021-08-06 16:12:34'),
(3, 'Cash on delivery', 'Pending', '2021-08-06 16:12:34'),
(4, 'Cash on delivery', 'Pending', '2021-08-06 16:12:34'),
(5, 'Debit/Credit Card', 'Pending', '2021-08-07 03:46:33'),
(6, 'Cash on delivery', 'Pending', '2021-08-07 03:46:37'),
(7, 'Cash on delivery', 'Pending', '2021-08-07 04:07:16'),
(8, 'Cash on delivery', 'Pending', '2021-08-07 04:08:59'),
(9, 'Cash on delivery', 'Pending', '2021-08-07 04:10:22'),
(10, 'Cash on delivery', 'Pending', '2021-08-07 04:11:11'),
(11, 'Cash on delivery', 'Pending', '2021-08-07 10:37:10'),
(12, 'Cash on delivery', 'Pending', '2021-08-07 14:09:13'),
(13, 'Cash on delivery', 'Pending', '2021-08-09 04:50:20'),
(14, 'Cash on delivery', 'Pending', '2021-08-10 13:06:27'),
(15, 'Cash on delivery', 'Pending', '2021-08-10 14:15:22'),
(16, 'Cash on delivery', 'Pending', '2021-08-11 13:57:09'),
(17, 'Cash on delivery', 'Pending', '2021-08-11 14:24:09'),
(18, 'Cash on delivery', 'Pending', '2021-08-16 14:33:02'),
(19, 'Cash on delivery', 'Pending', '2021-08-17 06:38:09'),
(20, 'Cash on delivery', 'Pending', '2021-08-17 12:07:10'),
(21, 'Cash on delivery', 'Pending', '2021-08-17 12:07:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtin`
--

CREATE TABLE `thongtin` (
  `id` int(11) NOT NULL,
  `sp_id` int(11) DEFAULT NULL,
  `tieude` varchar(100) DEFAULT NULL,
  `quyenloi1` varchar(100) DEFAULT NULL,
  `quyenloi2` varchar(100) DEFAULT NULL,
  `quyenloi3` varchar(100) DEFAULT NULL,
  `quyenloi4` varchar(100) DEFAULT NULL,
  `baohanh` int(11) DEFAULT NULL,
  `thongso1` varchar(100) DEFAULT NULL,
  `thongso2` varchar(100) DEFAULT NULL,
  `thongso3` varchar(100) DEFAULT NULL,
  `thongso4` varchar(100) DEFAULT NULL,
  `thongso5` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thongtin`
--

INSERT INTO `thongtin` (`id`, `sp_id`, `tieude`, `quyenloi1`, `quyenloi2`, `quyenloi3`, `quyenloi4`, `baohanh`, `thongso1`, `thongso2`, `thongso3`, `thongso4`, `thongso5`, `updated_at`, `created_at`) VALUES
(51, 51, 'Samsung Galaxy Note 20 Ultra 5G (Bronze,256GB)(8GB RAM)', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 2, '8 GB RAM | 256 GB ROM | Expandable Upto 512 GB', '5.5 inch Full HD Display', '100MP Rear Camera | 12MP Front Camera', '3300 mAh Battery', 'Exynos 7870 Octa Core 1.6GHz Processor', '2021-08-16 19:18:53', '2021-08-16 19:18:53'),
(52, 52, 'Samsung Galaxy S21(White,128GB)(8GB RAM)', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 2, '8 GB RAM | 128 GB ROM | Expandable Upto 512 GB', '6.3 inch Full HD Display', '32MP Rear Camera | 16MP Front Camera', '3300 mAh Battery', 'SnapDragon 835 Octa Core 1.6GHz Processor', '2021-08-16 19:26:39', '2021-08-16 19:26:39'),
(53, 53, 'Samsung Galaxy S20 FE 256GB (Fan Edition)', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 2, '8 GB RAM | 128 GB ROM | Expandable Upto 512 GB', '6.5 inches Full HD Display', '32MP Rear Camera | 12MP Front Camera', '4500 mAh Battery', 'SnapDragon 835 Octa Core 1.6GHz Processor', '2021-08-16 19:37:15', '2021-08-16 19:37:15'),
(54, 54, 'Samsung Galaxy S21 Ultra 5G', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 2, '12 GB RAM | 128 GB ROM | Expandable Upto 512 GB', '6.55 inches Full HD Display', '108MP, f/1.8 Rear Camera | 12MP, f/2.2 Front Camera', '5000 mAh Battery', 'Exynos 2100 8 Stream', '2021-08-16 19:46:18', '2021-08-16 19:46:18'),
(55, 55, 'Samsung Galaxy A52', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 2, '12 GB RAM | 128 GB ROM | Expandable Upto 512 GB', '6.55 inches Full HD Display', '64 MP, f/1.8, 26mm, PDAF, OIS Rear Camera | 12 MP, f/2.2, 123˚ Front Camera', 'Li-Po 4500 mAh', 'Snapdragon 720G (8 nm)', '2021-08-16 19:51:31', '2021-08-16 19:51:31'),
(56, 56, 'Samsung Galaxy A32', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 2, '8 GB RAM | 64 GB ROM | Expandable Upto 256 GB', '6.3 inches Full HD Display', '64 MP, f/1.8, 26mm, PDAF, OIS Rear Camera | 12 MP, f/2.2, 123˚ Front Camera', 'Li-Po 3300 mAh', 'Snapdragon 720G (8 nm)', '2021-08-16 19:53:51', '2021-08-16 19:53:51'),
(57, 57, 'iPhone 11 I Authorized Reseller', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 2, '8 GB RAM | 64 GB ROM | Expandable Upto 256 GB', '6.1 inches Full HD Display', '12 MP, ƒ/2.2 aperture Rare Camera | 12 MP, ƒ/2.2 aperture Front Camera', '3110 mAh', 'A13 Bionic', '2021-08-16 19:57:41', '2021-08-16 19:57:41'),
(58, 58, 'iPhone 12 Pro Max I Authorized Reseller', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 2, '8 GB RAM | 64 GB ROM | Expandable Upto 256 GB', '6.7 inches Full HD Display', '12 MP, f/2.0, 52mm Rare Camera | 12 MP, f/2.2, 23mm (wide), 1/3.6\" Front Camera', '3300 mAh', 'Apple A14 Bionic (5 nm)', '2021-08-16 20:02:49', '2021-08-16 20:02:49'),
(59, 59, 'iPhone 12 I Authorized Reseller', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 2, '8 GB RAM | 64 GB ROM | Expandable Upto 128 GB', '6.7 inches Full HD Display', '12 MP, f/1.6, 26mm (wide) Rare Camera | 12 MP, f/2.2, 23mm (wide), 1/3.6\" Front Camera', '3300 mAh', 'Apple A14 Bionic (5 nm)', '2021-08-16 20:27:16', '2021-08-16 20:27:16'),
(60, 60, 'iPhone XR 128GB I Authorized Reseller', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 1, '8 GB RAM | 64 GB ROM | Expandable Upto 128 GB', '6.1 inches Full HD Display', '12MP Rare Camera | 7MP Front Camera', '2900 mAh', 'Apple A14 Bionic (5 nm)', '2021-08-16 20:29:39', '2021-08-16 20:29:39'),
(61, 61, 'iPhone 12 mini 128GB I Authorized Reseller', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 2, '8 GB RAM | 64 GB ROM | Expandable Upto 128 GB', '5.4 inches Full HD Display', '12 MP, f/1.6, 26mm (wide), 1.4µm Rare Camera | 12 MP, f/2.2, 23mm (wide), 1/3.6\" Front Camera', '3300 mAh', 'Apple A14 Bionic (5 nm)', '2021-08-16 20:31:47', '2021-08-16 20:31:47'),
(62, 62, 'iPhone 12 Pro 512GB I Authorized Reseller', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 2, '8 GB RAM | 64 GB ROM | Expandable Upto 128 GB', '6.1 inches Full HD Display', '12 MP, f/1.6, 26mm (wide), 1.4µm Rare Camera | 12 MP, f/2.2, 23mm (wide), 1/3.6\" Front Camera', '3300 mAh', 'Apple A14 Bionic (5 nm)', '2021-08-16 20:33:56', '2021-08-16 20:33:56'),
(63, 63, 'Xiaomi Redmi Note 10', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 2, '6 GB RAM | 128 GB ROM | Expandable Upto 128 GB', '6.43 inches Full HD Display', '12 MP, f/1.6, 26mm (wide), 1.4µm Rare Camera | 12 MP, f/2.2, 23mm (wide), 1/3.6\" Front Camera', 'Li-Po 5000 mAh', 'Snapdragon 678 (11 nm)', '2021-08-16 20:36:17', '2021-08-16 20:36:17'),
(64, 64, 'Xiaomi Redmi Note 10 5G', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 2, '6 GB RAM | 128 GB ROM | Expandable Upto 128 GB', '6.5 inches Full HD Display', '48 MP Rare Camera | 8MP Front Camera', 'Li-Po 5000 mAh', 'Dimensity 700 5G (7 nm)', '2021-08-16 20:40:40', '2021-08-16 20:40:40'),
(65, 65, 'Xiaomi Redmi 9T 6GB 128GB', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 2, '6 GB RAM | 128 GB ROM | Expandable Upto 128 GB', '6.53 inches Full HD Display', '48 MP, f/1.8, 26mm (wide), 1/2.0\" Rare Camera | 8 MP, f/2.0, 27mm (wide), 1/4.0\" Front Camera', 'Li-Po 6000 mAh', 'Qualcomm SM6115 Snapdragon 662 (11 nm)', '2021-08-16 20:46:21', '2021-08-16 20:46:21'),
(66, 66, 'Xiaomi POCO X3 NFC 128GB', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 2, '6 GB RAM | 128 GB ROM | Expandable Upto 128 GB', '6.53 inches Full HD Display', '48 MP, f/1.8, 26mm (wide), 1/2.0\" Rare Camera | 8 MP, f/2.0, 27mm (wide), 1/4.0\" Front Camera', 'Li-Po 6000 mAh', 'Qualcomm SM6115 Snapdragon 662 (11 nm)', '2021-08-16 20:49:19', '2021-08-16 20:49:19'),
(67, 67, 'Xiaomi Mi 11 5G 128GB', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 2, '6 GB RAM | 128 GB ROM | Expandable Upto 128 GB', '6.81 inches Full HD Display', '108 MP, f/1.9, 26mm 1/1.33\" Rare Camera | 20 MP, 27mm (wide), 1/3.4\" Front Camera', 'Li-Po 4600 mAh', 'Qualcomm SM8350 Snapdragon 888 (5 nm)', '2021-08-16 20:51:32', '2021-08-16 20:51:32'),
(68, 68, 'Xiaomi Redmi 9 4G(4GB - 64GB)', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 2, '4 GB RAM | 64 GB ROM | Expandable Upto 128 GB', '6.81 inches Full HD Display', '13 MP, f/1.8, (wide), 1/3.1\" Rare Camera | 5 MP Front Camera', 'Li-Po 5020 mAh battery, Fast charging 18W', 'Mediatek Helio G80 (12 nm)', '2021-08-16 20:57:02', '2021-08-16 20:57:02'),
(69, 69, 'Samsung Galaxy Watch 3', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 2, '360 x 360 pixels, SUPER AMOLED', '1.4 inches, 1 GB RAM', '20 - 22mm (wire width)', 'Li-Po 340 mAh battery', '48.2 gram Weight', '2021-08-16 20:59:06', '2021-08-16 20:59:06'),
(70, 70, 'Samsung Galaxy Fit 2', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 2, '360 x 360 pixels, AMOLED', '1.1 inches, 500 MB RAM', '20 - 22mm (wire width)', 'Li-Po 340 mAh battery', '35 gram Weight', '2021-08-16 21:01:38', '2021-08-16 21:01:38'),
(71, 71, 'Samsung Galaxy Watch Active 2 40mm', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 1, '360 x 360 pixels, AMOLED', '1.5 inches, 500 MB RAM', '20 - 22mm (wire width)', 'Li-Po 340 mAh battery', '35 gram Weight', '2021-08-16 21:06:29', '2021-08-16 21:06:29'),
(72, 72, 'Bluetooth Apple AirPods 2 VN/A', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 2, 'Android,iOS', 'Lightning', 'Independent use of 1 ear', '5.0 Bluetooth', '100 gram Weight', '2021-08-16 21:08:34', '2021-08-16 21:08:34'),
(73, 73, 'Apple AirPods Max', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 2, 'Android,iOS', 'Chip set Apple H1', 'Independent use of 1 ear', 'Bluetooth 5.0', '384.8 Gram Weight', '2021-08-16 21:10:23', '2021-08-16 21:10:23'),
(74, 74, 'Bluetooth JBL GO 2', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 1, 'JBL Signature Sound', 'AUX 3.5mm', 'Micro USB', 'Bluetooth 5.0', 'IPX7 (use in beach, swimming pool)', '2021-08-16 21:12:15', '2021-08-16 21:12:15'),
(75, 75, 'Bluetooth JBL Pulse 3(LB.063)', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 1, 'JBL Signature Sound', 'AUX 3.5mm', 'Micro USB', 'Bluetooth 5.0, JBL Connect +', 'IPX7 (use in beach, swimming pool), 0.96kg Weight', '2021-08-16 21:14:05', '2021-08-16 21:14:05'),
(76, 76, 'Bluetooth JBL Pulse 4', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 1, 'JBL Signature Sound', '100 Speakers (All speaker owns Party Boost+)', 'Micro USB, Type C', 'Bluetooth 5.0, JBL Connect +, JBL Portable', 'IPX7 (use in beach, swimming pool), 1,12kg Weight', '2021-08-16 21:19:05', '2021-08-16 21:19:05'),
(77, 77, 'Polymer 10.000mAh Xiaomi Mi 18W Fast Charge Power Bank 3', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 2, '1 gate Micro USB, 1 gate Type C', '2 gate Micro USB', 'Micro USB, Type C', '10000 mAh battery', '18W, 4-6 hours fullcharge', '2021-08-16 22:42:30', '2021-08-16 22:42:30'),
(78, 78, 'Vsmart Live 4', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 2, '6 GB RAM | 64 GB ROM | Expandable Upto 256 GB', '6.5 inches Full HD Display', '13MP, Making film 4K 30FPS Rare Camera | 5 MP Front Camera', 'Li-Po 5000 mAh mAh battery', 'Snapdragon 675 8 Stream', '2021-08-16 22:46:34', '2021-08-16 22:46:34'),
(79, 79, 'Vsmart Active 3 6GB Ram', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 2, '6 GB RAM | 64 GB ROM | Expandable Upto 256 GB', '6.39 inches Full HD Display', '48MP Rare Camera | 12 MP Front Camera', '4020mAh mAh battery', 'Mediatek Helio P60', '2021-08-16 22:48:28', '2021-08-16 22:48:28'),
(80, 80, 'Vsmart Active 3 4GB Ram', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 2, '6 GB RAM | 64 GB ROM | Expandable Upto 256 GB', '6.39 inches Full HD Display', '48MP Rare Camera | 12 MP Front Camera', '4020mAh mAh battery', 'Mediatek Helio P60, 1080 x 2340 pixels (FullHD+)', '2021-08-16 22:51:07', '2021-08-16 22:51:07'),
(81, 81, 'Vsmart Joy 3 4GB', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 2, '4 GB RAM | 64 GB ROM | Expandable Upto 128 GB', '6.2 inches Full HD Display', '13 MP Rare Camera | 8 MP Front Camera', 'Li-on 5000 mAh battery', 'Qualcomm Snapdragon 632', '2021-08-16 22:54:14', '2021-08-16 22:54:14'),
(82, 82, 'Vsmart Star 5 4GB 64GB', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 2, '4 GB RAM | 64 GB ROM | Expandable Upto 128 GB', '6.52 inches Full HD Display', '13 MP Rare Camera | 8 MP Front Camera', 'Li-on 5000 mAh battery', 'MediaTek Helio G35 8 Stream', '2021-08-16 23:02:57', '2021-08-16 23:02:57'),
(83, 83, 'Vsmart Aris Pro 8GB 128GB', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 2, '8 GB RAM | 128 GB ROM | Expandable Upto 256 GB', '6.52 inches Full HD Display', '4MP + 8MP + 8MP + 2MP Rare Camera | 20MP Front Camera', '4,000mAh, Quick Charge 3.0 18W', 'Snapdragon 730 8 Stream', '2021-08-16 23:05:12', '2021-08-16 23:05:12'),
(84, 84, 'Oppo Reno5', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 2, '8 GB RAM | 128 GB ROM | Expandable Upto 256 GB', '6.52 inches Full HD Display', '64 MP + 8 MP + 2 MP + 2 MP Rare Camera | 44 MP, F/2.4, Smart Sensor AI Front Camera', '3,300mAh, Quick Charge 3.0 18W', 'Snapdragon 730 8 Stream', '2021-08-16 23:10:15', '2021-08-16 23:10:15'),
(85, 85, 'Oppo A93', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 2, '8 GB RAM | 128 GB ROM | Expandable Upto 256 GB', '6.43 inches Full HD Display, Super AMOLED', '48 MP, f/1.8, 26mm (wide), 1/2.0\" Rare Camera | 44 MP, F/2.4, Smart Sensor AI Front Camera', '3,300mAh, Quick Charge 3.0 18W', 'Mediatek Helio P95 (12 nm)', '2021-08-16 23:11:52', '2021-08-16 23:11:52'),
(86, 86, 'OPPO Find X3 Pro 5G', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 1, '12 GB RAM | 256 GB ROM | Expandable Upto 512 GB', '6.7 inches Full HD Display, Super AMOLED', '50 MP, f/1.8, 1/1.56\", 1.0µm, PDAF, OIS Rare Camera | 32 MP, f/2.4, 26mm (wide), 1/2.8\" Front Camera', '4500mAh, Quick Charge 3.0 18W', 'Snapdragon 888 (5 nm)', '2021-08-16 23:20:05', '2021-08-16 23:20:05'),
(87, 87, 'Nokia 3.4', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 1, '12 GB RAM | 256 GB ROM | Expandable Upto 512 GB', '6.7 inches Full HD Display, Super AMOLED', '50 MP, f/1.8, 1/1.56\", 1.0µm, PDAF, OIS Rare Camera | 32 MP, f/2.4, 26mm (wide), 1/2.8\" Front Camera', '4500mAh, Quick Charge 3.0 18W', 'Snapdragon 888 (5 nm)', '2021-08-17 05:29:55', '2021-08-17 05:29:55'),
(88, 88, 'Apple Watch Series 6 40mm (GPS) I Authorized Reseller', 'Cash on Delivery Eligible', 'Shipping Speed to Delivery', 'EMIs from $655/month', 'Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C', 2, '448 x 368 pixels, Retina LTPO OLED', '448 x 368 pixels, Retina LTPO OLED', '448 x 368 pixels, Retina LTPO OLED', '448 x 368 pixels, Retina LTPO OLED', '448 x 368 pixels, Retina LTPO OLED', '2021-08-17 06:19:49', '2021-08-17 06:19:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(11) NOT NULL,
  `tintuc_id` varchar(50) DEFAULT NULL,
  `ad_id` int(11) DEFAULT NULL,
  `tentintuc` varchar(100) DEFAULT NULL,
  `mota` varchar(500) DEFAULT NULL,
  `nguoitao` varchar(50) DEFAULT 'admin',
  `nguoisua` varchar(50) DEFAULT 'admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
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
  `permissions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`permissions`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `permissions`) VALUES
(1, 'Hoang dada', 'hoangdada123@gmail.com', NULL, '$2y$10$0KiDeaOC0BYsyZvTFAA/FOQObisoxTNFdItG74wt1fXentnRcrRnW', 'HJMPxQ3mVm1dZ9repcn0ZvcyGPVnINeZ83uQLJzswHJo8DVmswLFVq7WfJrA', '2021-07-25 03:36:34', '2021-07-25 03:36:34', NULL),
(2, 'admin', 'admin@admin.com', NULL, '$2y$10$PPEe.pMyp.iFV2D..bLFYeI182obrhH6RVW14W4sf957VTRCdtfi6', 'pDPSM0eRxKQlNceiRG5gvyuHYOAqI3Nb5wDrtCY4Mrz25f6OcqNHSjWw6y62', '2021-08-07 03:12:40', '2021-08-07 03:12:40', '{\"platform.systems.roles\":true,\"platform.systems.users\":true,\"platform.systems.attachment\":true,\"platform.index\":true}');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `attachmentable`
--
ALTER TABLE `attachmentable`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attachmentable_attachmentable_type_attachmentable_id_index` (`attachmentable_type`,`attachmentable_id`),
  ADD KEY `attachmentable_attachment_id_foreign` (`attachment_id`);

--
-- Chỉ mục cho bảng `attachments`
--
ALTER TABLE `attachments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`danhgiaid`);

--
-- Chỉ mục cho bảng `danhmucsp`
--
ALTER TABLE `danhmucsp`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `giaohang_id` (`giaohang_id`),
  ADD KEY `khachhang_id` (`khachhang_id`),
  ADD KEY `thanhtoan_id` (`thanhtoan_id`);

--
-- Chỉ mục cho bảng `donhang_chitiet`
--
ALTER TABLE `donhang_chitiet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dh_id` (`dh_id`),
  ADD KEY `sp_id` (`sp_id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `giaohang`
--
ALTER TABLE `giaohang`
  ADD PRIMARY KEY (`shipping`);

--
-- Chỉ mục cho bảng `gopy`
--
ALTER TABLE `gopy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ad_id` (`ad_id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ad_id` (`ad_id`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sp_id` (`sp_id`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaisanpham2`
--
ALTER TABLE `loaisanpham2`
  ADD PRIMARY KEY (`loaisp`);

--
-- Chỉ mục cho bảng `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ad_id` (`ad_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhanxet`
--
ALTER TABLE `nhanxet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_users_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loaisanpham` (`loaisanpham`),
  ADD KEY `loaisanpham_2` (`loaisanpham`),
  ADD KEY `loaisp` (`loaisp`);

--
-- Chỉ mục cho bảng `sukien`
--
ALTER TABLE `sukien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thongtin`
--
ALTER TABLE `thongtin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `attachmentable`
--
ALTER TABLE `attachmentable`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `attachments`
--
ALTER TABLE `attachments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `danhgiaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `danhmucsp`
--
ALTER TABLE `danhmucsp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `donhang_chitiet`
--
ALTER TABLE `donhang_chitiet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `giaohang`
--
ALTER TABLE `giaohang`
  MODIFY `shipping` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `gopy`
--
ALTER TABLE `gopy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `nhanxet`
--
ALTER TABLE `nhanxet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT cho bảng `sukien`
--
ALTER TABLE `sukien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `attachmentable`
--
ALTER TABLE `attachmentable`
  ADD CONSTRAINT `attachmentable_attachment_id_foreign` FOREIGN KEY (`attachment_id`) REFERENCES `attachments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `gopy`
--
ALTER TABLE `gopy`
  ADD CONSTRAINT `gopy_ibfk_1` FOREIGN KEY (`ad_id`) REFERENCES `admin` (`id`);

--
-- Các ràng buộc cho bảng `role_users`
--
ALTER TABLE `role_users`
  ADD CONSTRAINT `role_users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`loaisanpham`) REFERENCES `loaisanpham` (`id`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`loaisp`) REFERENCES `loaisanpham2` (`loaisp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
