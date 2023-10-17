-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2023 at 06:44 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avnl_rp`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservation_categories`
--

CREATE TABLE `reservation_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` text NOT NULL,
  `name` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservation_categories`
--

INSERT INTO `reservation_categories` (`id`, `code`, `name`, `created_at`, `updated_at`) VALUES
(1, 'UR', 'Un-Reserved', NULL, NULL),
(2, 'SC', 'Scheduled Caste', NULL, NULL),
(3, 'ST', 'Scheduled Tribe', NULL, NULL),
(4, 'OBC', 'Other Backward Class', NULL, NULL),
(5, 'GEN', 'General', NULL, NULL),
(6, 'NCL', 'Non Creamy Layer', NULL, NULL),
(7, 'VH', 'Visually Handicapped', NULL, NULL),
(8, 'HH', 'Hearing Handicapped', NULL, NULL),
(9, 'OH', 'Orthopedically Handicapped', NULL, NULL),
(10, 'MD', 'Multiple Disabilities', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservation_categories`
--
ALTER TABLE `reservation_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservation_categories`
--
ALTER TABLE `reservation_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
