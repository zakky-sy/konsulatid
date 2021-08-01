-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2021 at 10:51 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `konsulatid`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Site Administrator'),
(2, 'user', 'Regular User');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'zakky092@gmail.com', 1, '2021-03-27 05:02:49', 1),
(2, '::1', 'zakky092@gmail.com', 1, '2021-03-27 06:37:59', 1),
(3, '::1', 'zakky092@gmail.com', 1, '2021-03-27 06:40:23', 1),
(4, '::1', '191221007@mhs.stiki.ac.id', 2, '2021-03-27 06:53:13', 1),
(5, '::1', 'zakky092@gmail.com', 1, '2021-03-27 07:00:07', 1),
(6, '::1', '191221007@mhs.stiki.ac.id', 2, '2021-03-27 07:00:17', 1),
(7, '::1', '191221007@mhs.stiki.ac.id', 2, '2021-03-27 07:02:14', 1),
(8, '::1', 'zakky092@gmail.com', 1, '2021-03-27 07:02:32', 1),
(9, '::1', 'zakky092@gmail.com', 1, '2021-03-27 07:05:43', 1),
(10, '::1', '191221007@mhs.stiki.ac.id', 2, '2021-03-27 07:09:09', 1),
(11, '::1', 'zakky092@gmail.com', 1, '2021-03-27 07:09:21', 1),
(12, '::1', '191221007@mhs.stiki.ac.id', 2, '2021-03-27 07:09:32', 1),
(13, '::1', '191221007@mhs.stiki.ac.id', 2, '2021-03-27 07:14:41', 1),
(14, '::1', 'zakky092@gmail.com', 1, '2021-03-27 07:14:51', 1),
(15, '::1', '191221007@mhs.stiki.ac.id', 2, '2021-03-27 07:15:04', 1),
(16, '::1', 'zakky092@gmail.com', 1, '2021-03-27 07:17:58', 1),
(17, '::1', '191221007@mhs.stiki.ac.id', 2, '2021-03-27 07:22:10', 1),
(18, '::1', 'zakky092@gmail.com', 1, '2021-03-27 08:19:26', 1),
(19, '::1', 'zakky092@gmail.com', 1, '2021-03-28 06:29:02', 1),
(20, '::1', 'zakky092@gmail.com', 1, '2021-03-28 06:44:50', 1),
(21, '::1', 'zakky092@gmail.com', 1, '2021-03-28 07:55:13', 1),
(22, '::1', 'zakky092@gmail.com', 1, '2021-03-28 07:56:46', 1),
(23, '::1', 'zakky092@gmail.com', 1, '2021-03-28 08:09:31', 1),
(24, '::1', '191221007@mhs.stiki.ac.id', 2, '2021-03-28 08:48:10', 1),
(25, '::1', 'zakky092@gmail.com', 1, '2021-03-28 08:49:01', 1),
(26, '::1', 'zakky092@gmail.com', 1, '2021-03-28 09:00:56', 1),
(27, '::1', '191221007@mhs.stiki.ac.id', 2, '2021-03-28 10:22:01', 1),
(28, '::1', 'zakky092@gmail.com', 1, '2021-03-28 10:22:18', 1),
(29, '::1', 'zakky092@gmail.com', 1, '2021-03-28 10:22:54', 1),
(30, '::1', 'zakky092@gmail.com', 1, '2021-03-28 11:08:52', 1),
(31, '::1', '191221007@mhs.stiki.ac.id', 2, '2021-03-28 11:13:28', 1),
(32, '::1', 'zakky092@gmail.com', 1, '2021-03-28 11:13:38', 1),
(33, '::1', '191221007@mhs.stiki.ac.id', 2, '2021-03-28 11:22:47', 1),
(34, '::1', 'zakky092@gmail.com', 1, '2021-03-28 11:23:08', 1),
(35, '::1', 'zakky092@gmail.com', 1, '2021-03-28 11:49:21', 1),
(36, '::1', '191221007@mhs.stiki.ac.id', 2, '2021-03-28 20:08:39', 1),
(37, '::1', 'zakky092@gmail.com', 1, '2021-03-28 20:08:55', 1),
(38, '::1', 'zakky092@gmail.com', 1, '2021-03-28 21:21:47', 1),
(39, '::1', '191221007@mhs.stiki.ac.id', 2, '2021-03-28 21:25:20', 1),
(40, '::1', 'zakky092@gmail.com', 1, '2021-03-28 21:28:54', 1),
(41, '::1', 'zakky092@gmail.com', 1, '2021-03-28 22:49:51', 1),
(42, '::1', 'zakky092@gmail.com', 1, '2021-03-28 22:51:01', 1),
(43, '::1', 'zakky092@gmail.com', 1, '2021-03-28 22:55:23', 1),
(44, '::1', '191221007@mhs.stiki.ac.id', 2, '2021-03-28 23:02:46', 1),
(45, '::1', 'zakky092@gmail.com', 1, '2021-03-28 23:03:19', 1),
(46, '::1', '191221007@mhs.stiki.ac.id', 2, '2021-03-28 23:06:26', 1),
(47, '::1', 'zakky092@gmail.com', 1, '2021-03-28 23:08:25', 1),
(48, '::1', 'zakky092@gmail.com', 1, '2021-03-31 14:58:06', 1),
(49, '::1', '191221007@mhs.stiki.ac.id', 2, '2021-03-31 15:35:32', 1),
(50, '::1', 'zakky092@gmail.com', 1, '2021-03-31 15:36:24', 1),
(51, '::1', 'zakky092@gmail.com', 1, '2021-04-01 06:30:57', 1),
(52, '::1', 'zakky092@gmail.com', 1, '2021-04-01 06:46:29', 1),
(53, '::1', 'zakky092@gmail.com', 1, '2021-04-01 20:51:23', 1),
(54, '::1', 'zakky092@gmail.com', 1, '2021-04-01 20:55:11', 1),
(55, '::1', 'zakky092@gmail.com', 1, '2021-04-01 21:00:52', 1),
(56, '::1', 'zakky092@gmail.com', 1, '2021-04-02 05:46:54', 1),
(57, '::1', 'zakky092@gmail.com', 1, '2021-04-02 11:12:50', 1),
(58, '::1', 'zakky092@gmail.com', 1, '2021-04-02 22:11:34', 1),
(59, '::1', '191221007@mhs.stiki.ac.id', 2, '2021-04-02 22:12:05', 1),
(60, '::1', 'zakky092@gmail.com', 1, '2021-04-02 22:12:20', 1),
(61, '::1', 'zakky092@gmail.com', 1, '2021-04-03 03:54:52', 1),
(62, '::1', 'zakky092@gmail.com', 1, '2021-04-03 09:29:21', 1),
(63, '::1', 'zakky092@gmail.com', 1, '2021-04-04 10:00:50', 1),
(64, '::1', 'zakky092@gmail.com', 1, '2021-04-04 20:18:08', 1),
(65, '::1', 'zakky092@gmail.com', 1, '2021-04-10 09:56:10', 1),
(66, '::1', 'zakky092@gmail.com', 1, '2021-04-10 11:30:00', 1),
(67, '::1', 'zakky092@gmail.com', 1, '2021-04-10 19:39:56', 1),
(68, '::1', '191221007@mhs.stiki.ac.id', 2, '2021-04-10 20:33:44', 1),
(69, '::1', '191221007@mhs.stiki.ac.id', 2, '2021-04-11 01:47:47', 1),
(70, '::1', 'zakky092@gmail.com', 1, '2021-04-11 05:26:16', 1),
(71, '::1', 'zakky092@gmail.com', 1, '2021-04-11 19:06:17', 1),
(72, '::1', 'zakky092@gmail.com', 1, '2021-04-11 22:50:09', 1),
(73, '::1', 'zakky092@gmail.com', 1, '2021-04-11 23:00:47', 1),
(74, '::1', '191221007@mhs.stiki.ac.id', 2, '2021-04-11 23:01:44', 1),
(75, '::1', 'zakky092@gmail.com', 1, '2021-04-11 23:09:32', 1),
(76, '::1', 'zakky092@gmail.com', 1, '2021-04-22 04:26:21', 1),
(77, '::1', 'zakky092@gmail.com', 1, '2021-04-22 10:20:18', 1),
(78, '::1', 'zakky092@gmail.com', 1, '2021-04-22 20:15:07', 1),
(79, '::1', '191221007@mhs.stiki.ac.id', 2, '2021-04-22 21:19:22', 1),
(80, '::1', '191221007@mhs.stiki.ac.id', 2, '2021-04-22 21:32:58', 1),
(81, '::1', 'zakky092@gmail.com', 1, '2021-04-22 21:35:39', 1),
(82, '::1', '191221007@mhs.stiki.ac.id', 2, '2021-04-22 21:54:45', 1),
(83, '::1', 'zakky092@gmail.com', 1, '2021-04-22 21:59:55', 1),
(84, '::1', 'zakky092@gmail.com', 1, '2021-05-08 03:02:08', 1),
(85, '::1', 'zakky092@gmail.com', 1, '2021-05-08 08:03:38', 1),
(86, '::1', 'zakky092@gmail.com', 1, '2021-05-08 14:11:02', 1),
(87, '::1', 'zakky092@gmail.com', 1, '2021-05-09 21:42:08', 1),
(88, '::1', 'zakky092@gmail.com', 1, '2021-05-23 06:25:39', 1),
(89, '::1', 'zakky092@gmail.com', 1, '2021-05-24 07:57:36', 1),
(90, '::1', 'zakky092@gmail.com', 1, '2021-05-30 04:39:11', 1),
(91, '::1', 'zakky092@gmail.com', 1, '2021-05-30 08:31:36', 1),
(92, '::1', 'zakky092@gmail.com', 1, '2021-06-04 21:30:14', 1),
(93, '::1', 'zakky092@gmail.com', 1, '2021-06-05 04:39:52', 1),
(94, '::1', 'zakky092@gmail.com', 1, '2021-06-05 07:37:42', 1),
(95, '::1', 'zakky092@gmail.com', 1, '2021-06-10 22:34:46', 1),
(96, '::1', 'zakky092@gmail.com', 1, '2021-06-12 06:22:52', 1),
(97, '::1', 'zakky092@gmail.com', 1, '2021-06-12 07:50:20', 1),
(98, '::1', '191221007@mhs.stiki.ac.id', 2, '2021-06-20 10:01:22', 1),
(99, '::1', 'zakky092@gmail.com', 1, '2021-06-20 10:01:41', 1),
(100, '::1', 'zakky092@gmail.com', 1, '2021-07-13 02:00:08', 1),
(101, '::1', 'zakky092@gmail.com', 1, '2021-07-13 21:37:43', 1),
(102, '::1', 'zakky092@gmail.com', 1, '2021-08-01 03:50:58', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-users', 'Manage All Users'),
(2, 'manage-profile', 'Manage User\'s Profile');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1616816796, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `umur` int(11) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `telepon` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'default.svg',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `umur`, `jenis_kelamin`, `telepon`, `alamat`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'zakky092@gmail.com', 'zakky', 'Mochammad Fachrizal Muzakky', 20, 'Laki-laki', '085546343278', 'Desa Mojorejo, Kecamatan Pungging, Kabupaten Mojokerto', 'default.svg', '$2y$10$ELwrpb28UyhtVFFY7KjFlOUmbzUVjx8DDH8kvzRTNg/QpJeS3R7M2', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-03-27 05:01:49', '2021-03-27 05:01:49', NULL),
(2, '191221007@mhs.stiki.ac.id', 'muzakky', NULL, 0, '', '', '', 'default.svg', '$2y$10$CR8L2Pt7w9To45O1coZmF.M4Uv7lbtD955gl19DXqUjPINTkNZw7C', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-03-27 06:53:06', '2021-03-27 06:53:06', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

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
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
