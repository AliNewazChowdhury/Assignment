-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2019 at 04:09 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--

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
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth` date NOT NULL,
  `address` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone`, `birth`, `address`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ishmam', 'Newaz', 'alinewaz33@gmail.com', '01835052747', '1996-01-08', 'West Rampura', NULL, '$2y$10$h8XImTvPlUuTTYqTg/EUtuME6qDd5AYktYf4A8qBop7tgX5CTT3Fm', 'admin', NULL, '2019-08-28 02:11:30', '2019-08-31 04:20:52'),
(2, 'Ali', 'Chy', 'ishmam505@gmail.com', '01657768889', '1993-01-31', 'rampura', NULL, '$2y$10$K91OOkqvnT909Z.o7ZzrIepOHAllFKm2KmJsYyh/nZi/frd2M8X1e', 'user', NULL, '2019-08-28 04:58:53', '2019-08-29 12:25:45'),
(3, 'Amin', 'Hasan', 'abdul@gmail.com', '01909999999', '1994-04-30', 'mohanogor', NULL, '$2y$10$Ps2tHkN5VKt7mJzRBsivwONy0jp8mQhJTzwWBXSKbdEPMMOeAzlAO', 'user', NULL, '2019-08-28 22:53:22', '2019-08-28 22:53:22'),
(4, 'Erfan', 'Zeshan', 'amin@gmail.com', '01954556543', '1993-05-01', 'mugda', NULL, '$2y$10$h9nWNqsUBSBMmtbmXneMqejIjM.FpOuJPs4Pu0za54enbYhSeDpci', 'user', NULL, '2019-08-29 10:12:30', '2019-08-29 10:12:30'),
(5, 'Saiful', 'Islam', 'nik@dom.com', '01873748735', '1980-11-30', 'rampura', NULL, '$2y$10$uC6ih37xVoWuK37/N7HIBuZ9oYrEPJNPU3WuYwgM151PcJFg/B/Ie', 'user', NULL, '2019-08-29 11:50:21', '2019-08-29 11:50:21'),
(6, 'Amir', 'Ahmed', 'abdul@gm.com', '01983449896', '2001-03-29', 'mohnogor', NULL, '$2y$10$UEiBvuLsWwh0OhefM9WwIeNAdZzvfz3eHB6RrkoeEEI5CviHO.jGS', 'user', NULL, '2019-08-29 11:52:24', '2019-08-29 11:52:24'),
(7, 'Ishmam', 'Islam', 'alinewz34@gmail.com', '01657768845', '1989-11-05', 'tejgao', NULL, '$2y$10$0U/hptmZU0e7nCHuCsOtr.0jF//Yh/m6DvgP7.vc7ePDDCqwjEiZ6', 'user', NULL, '2019-08-29 11:54:17', '2019-08-29 11:54:17'),
(8, 'Ali', 'Newaz', 'admin@localhost.local', '01835052747', '1996-01-08', 'West Rampura', NULL, '$2y$10$uill9ZO1Zb0L.ZL31vBnnuReh/bweAtNOKTKDM6aBUq2Rbr1pVRJi', 'admin', NULL, '2019-08-31 01:02:38', '2019-08-31 01:02:38'),
(13, 'Akib', 'Dihan', 'akib@gmail.com', '01657768849', '1995-10-07', 'shanti nogor', NULL, '$2y$10$.hW9sjfA5iREyfXB.zku4OUdt3YrlozTk.9dbWMETshfmtq0L1wKS', 'user', NULL, '2019-08-31 01:36:46', '2019-08-31 01:36:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
