-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2018 at 05:13 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `larapi`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_tlp` int(20) NOT NULL,
  `longitude` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`id`, `name`, `category_id`, `alamat`, `no_tlp`, `longitude`, `latitude`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Sidiq permana', 1, 'tanggerang banten', 0, '', '', 'sedang membutuhkan darah secepatnya', '2017-12-30 18:20:43', '2017-12-24 11:04:46'),
(2, 'Anne Regina', 2, 'jakarta selatan', 97348926, '', '', 'sedang membutuhkan darah secepatnya', '2017-12-24 11:08:58', '2018-01-10 20:47:30'),
(3, 'Ahmad Rasyid Alfurqon', 2, 'Bandung', 987654321, '', '', 'saya membutuhkan darah secepatnya karena kucing saya sedang kritis', '2018-01-02 22:31:11', '2018-01-10 20:46:42'),
(4, 'Putri Andalusia', 4, 'cilegon', 798685, '', '', 'membutuhkan darah secepatnya', '2018-01-02 23:22:50', '2018-01-10 20:47:22'),
(5, 'Rahma', 3, 'jakarta selatan', 936426, '', '', 'membutuhkan darah secepat kilat', '2018-01-02 23:23:18', '2018-01-10 20:47:37'),
(6, 'muhamad irsyad', 3, 'dimana aja boleh dah', 876543214, '', '', 'yah membutuhkan darah seceptanya', '2018-01-02 23:42:15', '2018-01-04 21:42:02'),
(15, 'arfi gumilang', 2, 'serpong', 98363, '0.0374', '09783', 'butuh ajah', '2018-01-13 03:53:43', '2018-01-13 03:53:43'),
(16, 'sujono', 2, 'serpong', 98363, '0.0374', '09783', 'butuh ajah', '2018-01-13 04:39:25', '2018-01-13 04:39:25'),
(17, 'aditya felix', 6, 'depok', 98363, '0.0374', '09783', 'butuh ajah', '2018-01-15 11:51:05', '2018-01-15 11:51:05'),
(18, 'rodi', 2, 'pandeglang', 96, '0,0090', '0.9698', 'butuh darah secepatnya', '2018-01-15 12:01:53', '2018-01-15 12:01:53');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'A-', '2017-12-30 13:32:17', '2018-01-04 00:04:38'),
(2, 'AB-', '2017-12-30 13:32:17', '2018-01-04 00:04:45'),
(3, 'B-', '2017-12-26 08:00:00', '2018-01-04 00:04:54'),
(4, 'O-', '2017-12-26 08:00:00', '2018-01-04 00:05:00'),
(5, 'A+', '2018-01-23 08:00:00', '2018-01-23 08:00:00'),
(6, 'B+', '2018-01-23 08:00:00', '2018-01-23 08:00:00'),
(7, 'AB+', '2018-01-23 08:00:00', '2018-01-23 08:00:00'),
(8, 'O+', '2018-01-23 08:00:00', '2018-01-23 08:00:00');

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
(1, '2017_12_04_140040_create_users_table', 1),
(2, '2017_12_04_140205_create_password_reset_table', 1),
(3, '2017_12_04_140222_create_posts_table', 1),
(4, '2017_12_05_154338_update_users_table_add_api_token_field', 1),
(5, '2017_12_13_135035_create_category_table', 2),
(6, '2017_12_13_135200_create_product_table', 2),
(7, '2017_12_23_022154_create_type_blood_table', 3),
(8, '2017_12_23_022247_create_blood_table', 3),
(9, '2017_12_23_052734_create_category_table', 4),
(10, '2017_12_23_055710_create_category_table', 5),
(11, '2017_12_23_055739_create_blood_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

CREATE TABLE `password_reset` (
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 'ini contoh update post content orang lain', '2017-12-10 16:45:52', '2017-12-10 17:15:31'),
(3, 2, 'ini post pokonya', '2017-12-10 16:51:55', '2017-12-24 09:40:04'),
(4, 2, 'saya sedang belajar larapi ini', '2017-12-18 23:38:10', '2017-12-18 23:38:10'),
(5, 2, 'ini kontent gue', '2017-12-24 09:02:38', '2017-12-24 09:02:38'),
(6, 2, 'this is content', '2017-12-24 09:10:45', '2017-12-24 09:10:45'),
(7, 2, 'pak ini konten pak', '2017-12-27 20:33:46', '2017-12-27 20:33:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `api_token`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Putri Andalusia', 'putri@gmail.com', '$2y$10$xE9lK4pp6zIufR3Zic/mwe3TfpUwP3nb.Hce.9YhC.SH85mf6qTH2', '$2y$10$xzFMM9au5TU.C5.QUD87decLG41DrKmNugzEIJuXEE9BvhFDlnK3O', 'TCBVYKQja4EuQ6vC8hM7E755vQ3k1eCIghRCIn39KqVRK7gbJ8D2BDNfPb9q', '2017-12-10 16:38:13', '2017-12-10 16:38:13'),
(2, 'Elsyanu', 'elsyanu@gmail.com', '$2y$10$jwWbQMcKiVkdhqYEol9bqeml/pvLAWcwPMFTjbdgCrIDGbVUXM5ea', '$2y$10$wiBugOHbubjfKOI30syRfOV/dLSkOm/os/I6wpbUuOn6b9rnX7w7W', 'YvPcSKRzjUXtASNLhfnEfv9b7M23TuVGuft3x8AVRY3pma3uCZkIuJNmJdMs', '2017-12-10 16:50:13', '2017-12-10 16:50:13'),
(3, 'andaluisa putri', 'andalusia@gmail.com', '$2y$10$GdWv/oDOKy8ZzWdQUoBJieDimS0nUwAcJeOCsWeLNNl9YrtchDYN2', '$2y$10$TPBmKsIKnHsDXjgBv2H.oeVaerIdINII6ZVlqlC0UyqiNp5sQY0/u', 'KL0dBIAdxmLU4j2Ge2QwMI19wNHR8pgiHqeF5ImzOLqFWkQmsFPx8fI6kHrv', '2017-12-18 12:39:44', '2017-12-18 12:39:44'),
(4, 'nurinayah', 'nurinayah@gmail.com', '$2y$10$9Uq5.qSgj0yU9AD.fF4fCOOaPdTJCkFXoUDBf3vEKieVrnJYHmaeu', '$2y$10$yMJZ0UnKAyNBpIMic3mqQumQgIJ8uD9dPPjmny0iM/TZljQr9D0YS', NULL, '2017-12-24 09:51:48', '2017-12-24 09:51:48'),
(5, 'sidik permana', 'sidikpermana@gmail.com', '$2y$10$h1hPwR9JHltIE7EfKVp1EeC.TjBVeDjhg51lgoGFQBy2bVw8bPZ.S', '$2y$10$.wVcww1t/77Lm/6hdbn5yOP/eaC7rA9YTL/ndVrxWfqSgTqhHZlEm', 'bIjpvQTRAwSZIOB5LNQH3U9hetlIl21vJUYUY6xLLG3GjSfFNlOcqkL7XsXW', '2017-12-24 11:10:00', '2017-12-24 11:10:00'),
(6, 'helmi ismail', 'helmi@gmail.com', '$2y$10$c03FomvXmZNhcOSo3Tf31OIVq2XuFYzwg2rL61QYI5i9LHQiYPg.O', '$2y$10$gRvgrHcQg.xDI0m42N8/guP/8yaJunbVcfjA4gP/zlLLjwdNo1iHO', 'yHLOgHRoTPPMIsj9lDjcffkzPPIhj6Jm05nrD43yIS5wBafesjnZMzyb5ftV', '2017-12-27 19:14:53', '2017-12-27 19:14:53'),
(7, 'Helmi', 'xebia.game@gmail.com', '$2y$10$dilN1VmufN0/P0BtsNr.FeYCdllukpRdj32amrVylSehHEqd7qeUi', '$2y$10$2bizpbrRU8zWgvKeGxf0/OUN62T0kR1RmOqpbWcIG8W69v6eICbxq', NULL, '2017-12-27 19:17:31', '2017-12-27 19:17:31'),
(8, 'andalusia', 'andalusiaputri@gmail.com', '$2y$10$FEgdhIdhIWfnwTVpK.5PA.4HTgBZSuU5imN1eoFFasiuwv9Vmagfa', '$2y$10$wrCXxcDQFcDGzMTuQ8DgCu.2mGc5APopYuqFJrBBn3y.LA.pEfVzG', NULL, '2017-12-28 09:53:20', '2017-12-28 09:53:20'),
(9, 'gamaludin', 'gamal@gmail.com', '$2y$10$oM1jaUlItfHzY5mMNXr9IOJer715TRBT/8GoXvvsMWs3bHeg7BdZi', '$2y$10$CK9zzl8rAnZb70X2pmNNiuOVKbvpd9rP8BGXM9g6NeaZ.erqMw5Ma', NULL, '2017-12-28 10:25:39', '2017-12-28 10:25:39'),
(24, 'bambang frdy', 'bambang@gmail.com', '$2y$10$oahB/3663hg9fWhxJUisZez15mKndehImUdLTx2yfWHzp0souuwBy', '$2y$10$IG74tito25KENmJTliBkeeiJbYaENDhxrqX40hWfZVsWa6PwwUkBi', NULL, '2018-01-04 22:51:16', '2018-01-04 22:51:16'),
(25, 'Alice', 'alice@gmail.com', '$2y$10$orMsCmB9n3woAI5lvIuWcOuYSVOZg.TGRZlu4xqns8Y0ew1xbaNHO', '$2y$10$Ix3RietFbh95S19XeuzQG.GxkQf0jPPlIvyNSIwdHYSsOBP2YkIiS', NULL, '2018-01-04 23:04:43', '2018-01-04 23:04:43'),
(26, 'Xebia', 'ismail@gmail.com', '$2y$10$9Ob745f.9TCIczpsSMAYHu770uNCRSCBgtnrbmQ8PH9ryirxIPfr6', '$2y$10$92ycAu85SPLpNxoRMs/jneJkhU6o5vrJpjg9wmPSdSlmfo8vMK2fO', NULL, '2018-01-04 23:20:48', '2018-01-04 23:20:48'),
(27, 'Helcurt', 'moba@gmail.com', '$2y$10$UEoy9HII1F/.U3ElCpQ2heUTHPw8HSDApC.E5gB3XsMv3r2Fev7Dm', '$2y$10$aM5xnGsRQHGMdVmvWtdAC.yuRlLgUMjsWgqwcDDnAo/9wTxn8nNEC', NULL, '2018-01-04 23:21:54', '2018-01-04 23:21:54'),
(28, 'Xebia', 'xebia@gmail.com', '$2y$10$0gQdnU9MKvABcJibMXUq0e0IO/21dAY3RGuU/J8ZTaCogIyhUz4rO', '$2y$10$liVcbQyTarHMZJ4lB7JsH.CTXUnZwHvZhHRTHL50nFoRtubKBODDK', NULL, '2018-01-13 06:36:46', '2018-01-13 06:36:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blood_category_id_foreign` (`category_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `blood`
--
ALTER TABLE `blood`
  ADD CONSTRAINT `blood_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
