-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2023 at 09:36 AM
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
-- Table structure for table `region_states`
--

CREATE TABLE `region_states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state_name` varchar(255) NOT NULL,
  `state_code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `region_states`
--

INSERT INTO `region_states` (`id`, `state_name`, `state_code`, `created_at`, `updated_at`) VALUES
(1, 'Andaman and Nicobar Islands', 'AN', NULL, NULL),
(2, 'Andhra Pradesh', 'AP', NULL, NULL),
(3, 'Arunachal Pradesh', 'AR', NULL, NULL),
(4, 'Assam', 'AS', NULL, NULL),
(5, 'Bihar', 'BR', NULL, NULL),
(6, 'Chandigarh', 'CH', NULL, NULL),
(7, 'Chhattisgarh', 'CG', NULL, NULL),
(8, 'Dadra and Nagar Haveli', 'DH', NULL, NULL),
(9, 'Daman and Diu', 'DD', NULL, NULL),
(10, 'Delhi', 'DL', NULL, NULL),
(11, 'Goa', 'GA', NULL, NULL),
(12, 'Gujarat', 'GJ', NULL, NULL),
(13, 'Haryana', 'HR', NULL, NULL),
(14, 'Himachal Pradesh', 'HP', NULL, NULL),
(15, 'Jammu and Kashmir', 'JK', NULL, NULL),
(16, 'Jharkhand', 'JH', NULL, NULL),
(17, 'Karnataka', 'KA', NULL, NULL),
(18, 'Kerala', 'KL', NULL, NULL),
(19, 'Lakshadweep', 'LD', NULL, NULL),
(20, 'Madhya Pradesh', 'MP', NULL, NULL),
(21, 'Maharashtra', 'MH', NULL, NULL),
(22, 'Manipur', 'MN', NULL, NULL),
(23, 'Meghalaya', 'ML', NULL, NULL),
(24, 'Mizoram', 'MZ', NULL, NULL),
(25, 'Nagaland', 'NL', NULL, NULL),
(26, 'Orissa', 'OR', NULL, NULL),
(27, 'Pondicherry', 'PY', NULL, NULL),
(28, 'Punjab', 'PB', NULL, NULL),
(29, 'Rajasthan', 'RJ', NULL, NULL),
(30, 'Sikkim', 'SK', NULL, NULL),
(31, 'Tamil Nadu', 'TN', NULL, NULL),
(32, 'Tripura', 'TR', NULL, NULL),
(33, 'Uttarakhand', 'UK', NULL, NULL),
(34, 'Uttar Pradesh', 'UP', NULL, NULL),
(35, 'West Bengal', 'WB', NULL, NULL),
(36, 'Tamil Nadu', 'TN', NULL, NULL),
(37, 'Tripura', 'TR', NULL, NULL);






--
-- Indexes for dumped tables
--

--
-- Indexes for table `region_states`
--
ALTER TABLE `region_states`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `region_states`
--
ALTER TABLE `region_states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
