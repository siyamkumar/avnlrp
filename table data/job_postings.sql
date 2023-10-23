-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2023 at 06:47 AM
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
-- Table structure for table `job_postings`
--

CREATE TABLE `job_postings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jobPostingDate` date NOT NULL,
  `jobPostingLastDate` date NOT NULL,
  `jobAdvertismentNo` varchar(255) NOT NULL,
  `jobTitle` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `vacancy` int(11) NOT NULL,
  `tenure` int(11) NOT NULL,
  `renumeration` bigint(20) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'draft',
  `summary` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `location_unit_id` bigint(20) UNSIGNED NOT NULL,
  `isContract` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_postings`
--

INSERT INTO `job_postings` (`id`, `jobPostingDate`, `jobPostingLastDate`, `jobAdvertismentNo`, `jobTitle`, `category`, `vacancy`, `tenure`, `renumeration`, `user_id`, `status`, `summary`, `created_at`, `updated_at`, `deleted_at`, `location_unit_id`, `isContract`) VALUES
(1, '2023-09-08', '2023-09-29', 'OFMK/HR/024/Hiring/2023-24', 'Analysis Engineer-M', 'UR', 1, 1, 60000, 0, 'active', 'B.E / B. Tech (4year full time course) in Mechanical/Production/Manufacturing/\r\nIndustrial Engineering degree from recognized Universities /Institution/ College with\r\n55%&above for GEN/EWS/OBC(NCL) candidates and pass class for SC/ST/PWD candidates. Experience: Minimum 02 year of experience in ANSYS software.\r\n', NULL, NULL, NULL, 4, 1),
(2, '2023-09-08', '2023-09-29', 'OFMK/HR/024/Hiring/2023-24', 'Design Engineer-M', 'UR', 4, 1, 50000, 0, 'active', 'B.E/ B.Tech (4year full time course) in Engineer - M 03(UR) Mechanical/Production/Manufacturing/Industrial Engineering degree from recognized\r\nUniversities / Institution / College with 55% &above for GEN/EWS/OBC(NCL) candidates and pass Class for SC/ST/PWD Candidates.', NULL, NULL, NULL, 4, 1),
(3, '2023-09-08', '2023-09-29', 'OFMK/HR/024/Hiring/2023-24', 'Design Assistant-M', 'UR', 1, 1, 40000, 0, 'active', 'Diploma (3 or 4-year full time course) in Mechanical/Production/Manufacturing/\r\nIndustrial Engineering from recognized University/Institution/College with 55%& above\r\nfor GEN / EWS / OBC(NCL)candidates & Pass Class for SC/ ST/ PWD Candidates. Experience: Minimum 2 years of experience in AutoCAD software or Siemens NX.\r\n', NULL, NULL, NULL, 4, 1),
(4, '2023-09-08', '2023-09-29', 'OFMK/HR/024/Hiring/2023-24', 'Design Engineer-EE', 'UR', 1, 1, 50000, 0, 'active', 'B.Tech/BE in Electrical/Electrical & Electronics(4 -years full time course) from recognized University / Institution / College with 55% & above for GEN / EWS I OBC(NCL) candidates & Pass Class for SC/ ST/ PWD Candidates. Experience: Minimum 02 years pos1 qualification work experience as detailed further in this document', NULL, NULL, NULL, 4, 1),
(5, '2023-09-08', '2023-09-29', 'OFMK/HR/024/Hiring/2023-24', 'Design Assistant-E', 'UR', 1, 1, 50000, 0, 'active', 'Diploma in Electrical/Electrical &Electronics Assistant -E 01(UR) (3 or 4 years full time course) from recognized University/ Institution/ College with 55%& above for GEN / EWS I OBC(NCL) candidates & Pass Class for SC/ ST/ PWD Candidates. Desirable: M.Tech in Power Electronics', NULL, NULL, NULL, 4, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job_postings`
--
ALTER TABLE `job_postings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job_postings`
--
ALTER TABLE `job_postings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
