-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2026 at 03:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `name_book` varchar(255) NOT NULL,
  `About` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `book` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `owner`, `name_book`, `About`, `image`, `created_at`, `book`, `genre`) VALUES
(1, '', 'Thomas Joshua', 'ThmasfountThosbowyurgueikd', '65520.jpg', '2026-08-09 17:09:02', 'WIN_20260718_22_05_43_Pro.jpg', 'thomas hrlot'),
(2, '', 'Thomas Joshua', 'ThmasfountThosbowyurgueikd', '14978.jpg', '2026-08-09 17:17:17', 'WIN_20260718_22_05_41_Pro.jpg', 'thomas hrlot'),
(3, '', 'Thomas Joshua', 'ThmasfountThosbowyurgueikd', '32839.jpg', '2026-08-09 17:18:27', 'WIN_20260718_22_05_43_Pro.jpg', 'thomas hrlot'),
(4, 'Array', 'Thomas Joshua', 'ThmasfountThosbowyurgueikd', '54508.jpg', '2026-08-09 17:18:54', 'WIN_20260718_22_05_43_Pro.jpg', 'thomas hrlot'),
(5, 'Array', 'Thomas Joshua', 'ThmasfountThosbowyurgueikd', '84399.jpg', '2026-08-09 17:19:14', 'WIN_20260718_22_05_43_Pro.jpg', 'thomas hrlot'),
(6, 'Array', 'Thomas Joshua', 'ThmasfountThosbowyurgueikd', '45650.jpg', '2026-08-09 17:20:45', 'WIN_20260718_22_05_43_Pro.jpg', 'thomas hrlot'),
(7, 'Array', 'Thomas Joshua', 'ThmasfountThosbowyurgueikd', '13573.jpg', '2026-08-09 17:20:46', 'WIN_20260718_22_05_43_Pro.jpg', 'thomas hrlot'),
(8, 'Array', 'Thomas Joshua', 'ThmasfountThosbowyurgueikd', '59673.jpg', '2026-08-09 17:20:47', 'WIN_20260718_22_05_43_Pro.jpg', 'thomas hrlot'),
(9, 'Array', 'Thomas Joshua', 'ThmasfountThosbowyurgueikd', '27514.jpg', '2026-08-09 17:26:12', 'WIN_20260718_22_05_43_Pro.jpg', 'thomas hrlot'),
(10, '3', 'Thomas Joshua', 'ThmasfountThosbowyurgueikd', '85406.jpg', '2026-08-09 17:26:54', 'WIN_20260718_22_05_43_Pro.jpg', 'thomas hrlot'),
(11, '3', 'Thomasgilbert', 'ThmasfountThosbowyurgueikd', '14061.jpg', '2026-08-09 18:04:49', 'WIN_20260718_22_05_43_Pro.jpg', 'thomas hrlot'),
(12, '', 'howtobiirahr ng', 'fgrthyjhgfdfghjk,', '30393.jpg', '2026-08-09 19:17:54', 'WIN_20260721_06_55_41_Pro (2).jpg', 'fdghyjydfsghjkhgfb'),
(13, '', 'Thomas Joshua', 'ThmasfountThosbowyurgueikd', '16600.jpg', '2026-08-14 17:22:38', 'WIN_20260718_16_29_08_Pro.jpg', 'thomas hrlot'),
(14, '', 'Thomas Joshua', 'ThmasfountThosbowyurgueikd', '98563.jpg', '2026-08-14 17:24:18', 'WIN_20260718_16_29_08_Pro.jpg', 'thomas hrlot'),
(15, '', 'Thomas Joshua', 'ThmasfountThosbowyurgueikd', '76861.jpg', '2026-08-14 17:26:20', 'WIN_20260718_16_29_08_Pro.jpg', 'thomas hrlot'),
(16, '', 'Thomas Joshua', 'ThmasfountThosbowyurgueikd', '41761.jpg', '2026-08-14 17:27:38', 'WIN_20260718_16_29_08_Pro.jpg', 'thomas hrlot'),
(17, '', 'Thomas Joshua', 'ThmasfountThosbowyurgueikd', '74614.jpg', '2026-08-14 17:28:25', 'WIN_20260718_16_29_08_Pro.jpg', 'thomas hrlot'),
(18, '', 'Thomas Joshua', 'ThmasfountThosbowyurgueikd', '93574.jpg', '2026-08-14 18:32:42', 'WIN_20260718_22_05_41_Pro.jpg', 'thomas hrlot');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'Thomas Joshua', 'thomasjoshtheboss@gmail.com', '69c7e5d4d7dee36eb93ec3f6d4271bd1', '2026-08-02 15:04:50'),
(2, 'Thomas Joshua', 'thomasjoshtheboss@gmail.com', '13a0ba5d689d0c51138c70a0317eb9ad', '2026-08-02 15:28:26'),
(3, 'Thomasgilbert', 'thomasjoshtheboss@gmail.com', '25f9e794323b453885f5181f1b624d0b', '2026-08-02 15:30:40'),
(4, 'Thomas Joshua', 'thomasjoshtheboss@gmail.com', '25f9e794323b453885f5181f1b624d0b', '2026-08-14 19:06:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
