-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2023 at 06:49 AM
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
-- Table structure for table `location_units`
--

CREATE TABLE `location_units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unit_code` varchar(255) NOT NULL,
  `unit_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `about` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location_units`
--

INSERT INTO `location_units` (`id`, `unit_code`, `unit_name`, `address`, `about`, `created_at`, `updated_at`) VALUES
(1, 'AVNLCO', 'AVNLCO', 'AVNLCO', 'Armoured Vehicles Nigam Limited (AVANI) (AVNL) is a new Defence PSU with its headquarters at Avadi (Chennai). It has five (05) constituent production units and has around 12,000 employees. AVNL produces battle tanks i.e. T-72, T90, MBT Arjun and Infantry Combat Vehicles, support vehicles (MPV, AERV etc.) and Defence mobility solutions (Stallion, LPTA etc.) for the armed forces and homeland security agencies. It is the current market leader in this segment. It is a new Government Company with Great Future. It offers great work environment and challenging opportunities for the professionals to prove their mettle.', NULL, NULL),
(2, 'HVF', 'HVF', 'HVF', '', NULL, NULL),
(3, 'EFA', 'EFA', 'EFA', '', NULL, NULL),
(4, 'VFJ', 'VFJ', 'VFJ', '', NULL, NULL),
(5, 'MTPF', 'MTPF', 'MTPF', '', NULL, NULL),
(6, 'OFMK', 'OFMK', 'Yeddumailaram', 'Ordnance Factory Medak is one of the 5 Ordnance Factories under Armoured Vehicles Nigam Ltd., On 19th July, 1984 the then Prime Minister Late Smt. Indira Gandhi laid the foundation to establish the factory for indigenous production of Infantry Combat Vehicles(ICVs) at Yeddumailaram in Sangareddy District of Telangana State.', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `location_units`
--
ALTER TABLE `location_units`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `location_units_unit_code_unique` (`unit_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `location_units`
--
ALTER TABLE `location_units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
