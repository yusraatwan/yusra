-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19 أبريل 2023 الساعة 05:11
-- إصدار الخادم: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web2`
--

-- --------------------------------------------------------

--
-- بنية الجدول `users2`
--

CREATE TABLE `users2` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` int(1) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users2`
--

INSERT INTO `users2` (`id`, `name`, `email`, `password`, `gender`, `created_at`) VALUES
(4, 'gg', 'gg@gmail.com', '123456789', 1, NULL),
(5, 'yy', 'yy@gmail.com', '123456789', 1, NULL),
(6, 'kk', 'kk@gmail.com', 'md5(123456)', 1, NULL),
(7, 'pp', 'pp@gmail.com', '25f9e794323b453885f5181f1b624d0b', 1, NULL),
(8, 'lolo', 'lolo@gmial.com', '$2y$10$KlonLFYcuiMBq3ilUQVVJ.ph/PBMu8BViM1get/pgm2', 1, NULL),
(11, 'lolo', 'lolo@gmial.com', '$2y$10$/GqKvxJPUMtWGR5yDjWdM.Btp.Jk7O5OUVSwTRZ4iQV', 1, NULL),
(12, '', '', '$2y$10$NNt/wUILtusraZdvR22g/.jb8P5fJBA740UoG26C8E3', 0, NULL),
(13, '', '', '$2y$10$a2aYJdUO6QZufb9cscsL.ux1mF.xfk3gwJU0SgHOof0', 0, NULL),
(14, 'lolo', 'lolo@gmial.com', '$2y$10$WJT6uah68HOJVlLTctRZc.n2AaMmq4wjrGh/9mXgN8i', 1, NULL),
(15, 'lolo', 'lolo@gmial.com', '$2y$10$y0zgR.Xn/q56f0WTiIb/LuRgmFDXBdP7x3xL6iZVKOi', 1, NULL),
(16, 'lolo', 'lolo@gmial.com', '$2y$10$gH9GA.mVhjiHGf4VK9L5weExoYYY7yFePx5Nb2IpnxY', 1, NULL),
(17, '', '', '$2y$10$CAGcicmRhP8csSDrMKn5KOkgVMOxhTTc04PxZpFa8t4', 0, NULL),
(18, '', '', '$2y$10$AVmxh6NqNFiPzYlek0y9yuDZuc3Vg.NPP4P9/QC.IP.', 0, NULL),
(60, '<script>document.write(\"Hello World!\")</script>', 'lolo@gmial.com', '$2y$10$NsrkGctpKPpgFpllztqZb.cejDWGaUYdI2.ZRRziN2v', 1, NULL),
(61, 'yusra', 'yusra@', '123456', 0, NULL),
(62, 'hh', 'hh@', '123456789', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users2`
--
ALTER TABLE `users2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users2`
--
ALTER TABLE `users2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
