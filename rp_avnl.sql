--
-- Dumping data for table `age_criterias`
--

INSERT INTO `age_criterias` (`id`, `job_posting_id`, `minAge`, `maxAge`, `created_at`, `updated_at`) VALUES
(1, 6, 25, 35, '2023-10-13 12:10:33', '2023-10-17 06:03:32'),
(2, 7, 30, 47, '2023-10-23 08:52:19', '2023-10-30 05:13:45'),
(3, 8, 18, 30, '2023-10-23 10:09:48', '2023-10-23 10:09:48'),
(4, 10, 18, 21, '2023-10-23 10:15:51', '2023-10-23 11:41:10'),
(5, 11, 18, 20, '2023-10-23 11:27:58', '2023-10-23 11:27:58'),
(6, 12, 21, 50, '2023-10-26 09:09:46', '2023-10-26 09:09:46');

-- --------------------------------------------------------
--
-- Dumping data for table `application_reference_numbers`
--

INSERT INTO `application_reference_numbers` (`id`, `candidate_id`, `job_posting_id`, `arn`, `mode_of_payment`, `fee_details`, `payment_proof`, `status`, `isSubmitted`, `submitted_at`, `file_name`, `file_type`, `file_size`, `declaration_date`, `place`, `signature_path`, `isShortlisted`, `shortlist_remarks`, `reject_remarks`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 6, 'AVNLCO20231061001', NULL, 'WQERT33158855', NULL, 'shortlisted', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '', NULL, '2023-10-20 09:09:39', '2023-10-23 09:14:59', NULL),
(2, 1, 3, 'OFMK20231031002', NULL, NULL, NULL, 'draft', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-23 05:10:46', '2023-10-23 05:10:46', NULL),
(3, 4, 1, 'OFMK20231014003', NULL, NULL, NULL, 'draft', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-23 06:36:43', '2023-10-23 06:36:43', NULL),
(4, 5, 2, 'OFMK20231025004', NULL, NULL, NULL, 'draft', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-23 06:46:36', '2023-10-23 06:46:36', NULL),
(5, 5, 1, 'OFMK20231015005', NULL, NULL, NULL, 'draft', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-23 06:46:55', '2023-10-23 06:46:55', NULL),
(6, 6, 1, 'OFMK20231016006', NULL, NULL, NULL, 'submitted', 1, NULL, NULL, NULL, NULL, '2023-10-01', NULL, 'documents/6/declaration/marksheet.jpg', NULL, NULL, NULL, '2023-10-23 09:23:53', '2023-10-23 09:40:14', NULL),
(7, 6, 2, 'OFMK20231026007', NULL, NULL, NULL, 'draft', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-23 09:43:09', '2023-10-23 09:43:09', NULL),
(8, 1, 11, 'OFMK202310111008', NULL, NULL, 'documents/1/payment/marksheet.jpg', 'submitted', 1, NULL, NULL, NULL, NULL, '2023-10-26', 'Chennai', 'documents/1/declaration/photo.png', NULL, NULL, NULL, '2023-10-26 08:27:39', '2023-10-26 08:57:30', NULL),
(9, 8, 1, 'OFMK20231018009', NULL, NULL, NULL, 'draft', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-27 09:37:22', '2023-10-27 09:37:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `fullname`, `email`, `phone_no`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Justin Bender', 'lutevusezy@mailinator.com', '+1 (706) 906-4239', '2023-10-18 12:22:24', '2023-10-18 12:22:24', NULL),
(2, 'Justin Bender', 'lutevusezy@mailinator.com', '+1 (706) 906-4239', '2023-10-18 12:23:18', '2023-10-18 12:23:18', NULL),
(3, 'Chester Reese', 'harigejupa@mailinator.com', '+1 (605) 567-6716', '2023-10-23 06:33:31', '2023-10-23 06:33:31', NULL),
(4, 'Nomlanga Barrera', 'wajarejo@mailinator.com', '+1 (448) 346-1002', '2023-10-23 06:34:18', '2023-10-23 06:34:18', NULL),
(5, 'Leo Howe', 'hitekixet@mailinator.com', '+1 (739) 784-1325', '2023-10-23 06:46:03', '2023-10-23 06:46:03', NULL),
(6, 'Dharmarajan', 'durairajan.dharmarajan@gmail.com', '9629712157', '2023-10-23 09:21:04', '2023-10-23 09:21:04', NULL),
(8, 'srinivasan', 'srinivasanr@avnl.co.in', '9013961069', '2023-10-27 09:08:06', '2023-10-27 09:08:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `education_criterias`
--


INSERT INTO `education_criterias` (`id`, `job_posting_id`, `min_qualification`, `desired_education`, `created_at`, `updated_at`) VALUES
(5, 6, '[\"10th\",\"10th\",\"UG\",\"PG\",\"12th\"]', 'asda dassd f sdfsd', '2023-10-17 06:44:40', '2023-10-17 09:56:50'),
(6, 7, '[\"10th\",\"10th\",\"12th\",\"UG\",\"PG\"]', 'Desired Qualification is any Degree', '2023-10-23 08:52:53', '2023-10-30 04:49:34'),
(7, 10, '[\"10th\",\"10th\",\"12th\",\"UG\",\"PG\"]', 'Desired Qualification is any Degree', '2023-10-23 10:27:55', '2023-10-23 11:41:42'),
(8, 11, '[\"10th\",\"10th\",\"12th\",\"UG\",\"PG\"]', NULL, '2023-10-23 11:28:36', '2023-10-23 11:28:36'),
(9, 12, '[\"10th\",\"10th\",\"12th\",\"UG\",\"PG\"]', 'asda dassd f sdfsd', '2023-10-26 09:09:53', '2023-10-26 09:09:57');

-- --------------------------------------------------------

-- Dumping data for table `experience_criterias`
--

INSERT INTO `experience_criterias` (`id`, `job_posting_id`, `minExp`, `maxExp`, `desiredExperience`, `created_at`, `updated_at`) VALUES
(2, 6, 25, 32, 'asd', '2023-10-17 09:54:13', '2023-10-17 09:58:07'),
(3, 7, 5, 10, 'Experience in Teaching field', '2023-10-23 08:53:34', '2023-10-23 08:53:34'),
(4, 9, 12, 10, 'Experience in Training people', '2023-10-23 10:15:02', '2023-10-23 10:15:02'),
(5, 10, 2, 4, 'Experience in Teaching field', '2023-10-23 10:28:17', '2023-10-23 10:28:17'),
(6, 11, 4, 4, NULL, '2023-10-23 11:28:45', '2023-10-23 11:28:45'),
(7, 12, 5, 10, NULL, '2023-10-26 09:10:04', '2023-10-26 09:10:04');

-- --------------------------------------------------------

--
-- Table structure for table `experience_details`
--

CREATE TABLE `experience_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `application_reference_number_id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` bigint(20) UNSIGNED NOT NULL,
  `companyName` varchar(255) DEFAULT NULL,
  `postName` varchar(255) DEFAULT NULL,
  `periodFrom` varchar(255) DEFAULT NULL,
  `periodTo` varchar(255) DEFAULT NULL,
  `payScale` varchar(255) DEFAULT NULL,
  `jobType` varchar(255) DEFAULT NULL,
  `ctc` varchar(255) DEFAULT NULL,
  `experience_path` varchar(255) DEFAULT NULL,
  `jobsSummary` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `file_type` varchar(255) DEFAULT NULL,
  `file_size` bigint(20) UNSIGNED DEFAULT NULL,
  `isValid` tinyint(1) DEFAULT NULL,
  `valid_remarks` longtext DEFAULT NULL,
  `invalid_remarks` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experience_details`
--

INSERT INTO `experience_details` (`id`, `application_reference_number_id`, `candidate_id`, `companyName`, `postName`, `periodFrom`, `periodTo`, `payScale`, `jobType`, `ctc`, `experience_path`, `jobsSummary`, `file_name`, `file_type`, `file_size`, `isValid`, `valid_remarks`, `invalid_remarks`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 1, 'ssww', 'eerar', '2019-12-30 00:00:00', '2023-10-11 00:00:00', NULL, 'GovtJob', '50000', 'documents/1/experience/Blank.jpg', 'asda sd adadsds a', 'Blank.jpg', 'jpg', 2275, NULL, NULL, NULL, '2023-10-23 05:13:37', '2023-10-23 05:13:37', NULL),
(2, 3, 4, 'Rodriquez and Price Co', 'Isaiah Weeks', '2013-06-20 00:00:00', '2016-05-04 00:00:00', NULL, 'Private', '66666', 'documents/4/experience/marksheet.jpg', 'Ut corrupti aute ne', 'marksheet.jpg', 'jpg', 765164, NULL, NULL, NULL, '2023-10-23 06:44:24', '2023-10-23 06:44:24', NULL),
(3, 6, 6, 'XYZ Company,', 'Trainer', '0001-02-01 00:00:00', '2023-10-23 00:00:00', 'E6', 'GovtJob', NULL, 'documents/6/experience/marksheet.jpg', 'Jobs Summary', 'marksheet.jpg', 'jpg', 765164, 1, NULL, NULL, '2023-10-23 09:38:34', '2023-10-26 11:23:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `graduation_education_details`
--

CREATE TABLE `graduation_education_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` bigint(20) UNSIGNED NOT NULL,
  `application_reference_number_id` bigint(20) UNSIGNED NOT NULL,
  `course_name` varchar(255) DEFAULT NULL,
  `college_name` varchar(255) DEFAULT NULL,
  `university_name` varchar(255) DEFAULT NULL,
  `year_of_passing` year(4) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `marksheet_path` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `file_type` varchar(255) DEFAULT NULL,
  `file_size` bigint(20) UNSIGNED DEFAULT NULL,
  `isValid` tinyint(1) DEFAULT NULL,
  `valid_remarks` longtext DEFAULT NULL,
  `invalid_remarks` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `higher_secondary_education_details`
--

CREATE TABLE `higher_secondary_education_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` bigint(20) UNSIGNED NOT NULL,
  `application_reference_number_id` bigint(20) UNSIGNED NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `school_board` varchar(255) NOT NULL,
  `year_of_passing` year(4) NOT NULL,
  `score` int(11) NOT NULL,
  `marksheet_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `iti_diploma_details`
--

CREATE TABLE `iti_diploma_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `application_reference_number_id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` bigint(20) UNSIGNED NOT NULL,
  `courseName` varchar(255) NOT NULL,
  `collegeName` varchar(255) NOT NULL,
  `universityName` varchar(255) NOT NULL,
  `year_of_passing` year(4) NOT NULL,
  `score` int(11) NOT NULL,
  `marksheet_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_postings`
--

CREATE TABLE `job_postings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location_unit_id` bigint(20) UNSIGNED NOT NULL,
  `jobPostingDate` date DEFAULT NULL,
  `jobPostingLastDate` date DEFAULT NULL,
  `jobAdvertismentNo` varchar(255) DEFAULT NULL,
  `jobTitle` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `jobLocation` varchar(255) DEFAULT NULL,
  `vacancy` int(11) DEFAULT NULL,
  `tenure` int(11) DEFAULT NULL,
  `renumeration` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(255) DEFAULT 'draft',
  `summary` longtext DEFAULT NULL,
  `isContract` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_postings`
--

INSERT INTO `job_postings` (`id`, `location_unit_id`, `jobPostingDate`, `jobPostingLastDate`, `jobAdvertismentNo`, `jobTitle`, `category`, `jobLocation`, `vacancy`, `tenure`, `renumeration`, `user_id`, `status`, `summary`, `isContract`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 4, '2023-09-08', '2023-10-31', 'OFMK/HR/024/Hiring/2023-24', 'Analysis Engineer-M', 'UR', NULL, 1, 1, 60000, 0, 'active', 'B.E / B. Tech (4year full time course) in Mechanical/Production/Manufacturing/\r\nIndustrial Engineering degree from recognized Universities /Institution/ College with\r\n55%&above for GEN/EWS/OBC(NCL) candidates and pass class for SC/ST/PWD candidates. Experience: Minimum 02 year of experience in ANSYS software.\r\n', 1, NULL, NULL, NULL),
(2, 4, '2023-09-08', '2023-10-31', 'OFMK/HR/024/Hiring/2023-24', 'Design Engineer-M', 'UR', NULL, 4, 1, 50000, 0, 'active', 'B.E/ B.Tech (4year full time course) in Engineer - M 03(UR) Mechanical/Production/Manufacturing/Industrial Engineering degree from recognized\r\nUniversities / Institution / College with 55% &above for GEN/EWS/OBC(NCL) candidates and pass Class for SC/ST/PWD Candidates.', 1, NULL, NULL, NULL),
(3, 4, '2023-09-08', '2023-10-31', 'OFMK/HR/024/Hiring/2023-24', 'Design Assistant-M', 'UR', NULL, 1, 1, 40000, 0, 'active', 'Diploma (3 or 4-year full time course) in Mechanical/Production/Manufacturing/\r\nIndustrial Engineering from recognized University/Institution/College with 55%& above\r\nfor GEN / EWS / OBC(NCL)candidates & Pass Class for SC/ ST/ PWD Candidates. Experience: Minimum 2 years of experience in AutoCAD software or Siemens NX.\r\n', 1, NULL, NULL, NULL),
(4, 4, '2023-09-08', '2023-09-29', 'OFMK/HR/024/Hiring/2023-24', 'Design Engineer-EE', 'UR', NULL, 1, 1, 50000, 0, 'active', 'B.Tech/BE in Electrical/Electrical & Electronics(4 -years full time course) from recognized University / Institution / College with 55% & above for GEN / EWS I OBC(NCL) candidates & Pass Class for SC/ ST/ PWD Candidates. Experience: Minimum 02 years pos1 qualification work experience as detailed further in this document', 1, NULL, NULL, NULL),
(5, 4, '2023-09-08', '2023-09-29', 'OFMK/HR/024/Hiring/2023-24', 'Design Assistant-E', 'UR', NULL, 1, 1, 50000, 0, 'active', 'Diploma in Electrical/Electrical &Electronics Assistant -E 01(UR) (3 or 4 years full time course) from recognized University/ Institution/ College with 55%& above for GEN / EWS I OBC(NCL) candidates & Pass Class for SC/ ST/ PWD Candidates. Desirable: M.Tech in Power Electronics', 1, NULL, NULL, NULL),
(6, 6, '2010-09-20', '2010-10-11', 'QWERT/DH/7577/777', 'Developer', NULL, NULL, 20, 2, 75000, 1, 'active', 'fadf  adasd fds fsd fds fafasd', 1, '2023-10-13 06:11:01', '2023-10-20 07:01:36', NULL),
(7, 4, '1977-10-26', '1977-11-16', '1983', '1989', NULL, NULL, 1, 44, 201258, 1, 'draft', 'Sit eum sit beatae a', 1, '2023-10-23 06:17:58', '2023-10-23 06:17:58', NULL),
(10, 7, '2023-10-23', '2023-11-13', '10/2023/12345', 'PHP Trainer', NULL, NULL, 2, 2, 80000, 1, 'active', 'Train Candidates for programming', 1, '2023-10-23 10:15:42', '2023-10-23 11:43:22', NULL),
(11, 4, '2023-10-24', '2023-11-14', 'AVNL/OCT/123', 'Programmer', NULL, NULL, 10, 3, 64500, 1, 'active', 'Test Data', 1, '2023-10-23 11:26:34', '2023-10-23 11:30:48', NULL),
(12, 6, '2023-10-31', '2023-11-21', 'QWERT/DH/7577/777', 'Developer - Python', NULL, NULL, 1, 1, 20000, 1, 'active', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus lacinia dolor a mauris cras amet.', 1, '2023-10-26 09:03:30', '2023-10-26 09:17:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_requirements`
--

CREATE TABLE `job_requirements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_posting_id` bigint(20) UNSIGNED NOT NULL,
  `job_specification` varchar(255) NOT NULL,
  `knowledge` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_requirements`
--

INSERT INTO `job_requirements` (`id`, `job_posting_id`, `job_specification`, `knowledge`, `skills`, `created_at`, `updated_at`) VALUES
(1, 6, 'some specification to be included', 'some knowledge to be included', 'some skills to be included', '2023-10-17 11:19:08', '2023-10-17 11:26:06'),
(2, 10, 'specialized in PHP', 'Extensive knowledge in  programming', 'Able to handle projects independently', '2023-10-23 10:21:44', '2023-10-23 10:21:44'),
(3, 11, 'asdfdasfaf', 'sfjksadckascn', 'sdafkjaskdf', '2023-10-23 11:29:02', '2023-10-23 11:29:02'),
(4, 12, 'asd', 'asd', 'asd', '2023-10-26 09:13:35', '2023-10-26 09:13:35'),
(5, 7, 'wtsdffd', 'sdfs', 'sdfsdf', '2023-10-30 05:13:52', '2023-10-30 05:13:52');

-- --------------------------------------------------------

--
-- Table structure for table `job_responsibilities`
--

CREATE TABLE `job_responsibilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_posting_id` bigint(20) UNSIGNED NOT NULL,
  `job_responsibility` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_responsibilities`
--

INSERT INTO `job_responsibilities` (`id`, `job_posting_id`, `job_responsibility`, `created_at`, `updated_at`) VALUES
(1, 6, 'asdsad das dasd asdasd asd 123456', '2023-10-17 11:34:08', '2023-10-17 11:34:58'),
(2, 10, 'To train the new candidates\nFind errors in  programs\nSolve the issues', '2023-10-23 10:22:38', '2023-10-23 10:22:38'),
(3, 11, 'sdfakscasckalsdjkfjekscks', '2023-10-23 11:29:08', '2023-10-23 11:29:08'),
(4, 12, 'asdasd', '2023-10-26 09:13:54', '2023-10-26 09:13:54'),
(5, 7, 'asdasd da das as as das asd asd', '2023-10-30 05:14:00', '2023-10-30 05:14:00');

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
(3, 'VFJ', 'VFJ', 'VFJ', 'asdas', NULL, '2023-10-20 04:55:42'),
(4, 'OFMK', 'OFMK', 'Yeddumailaram', 'Ordnance Factory Medak is one of the 5 Ordnance Factories under Armoured Vehicles Nigam Ltd., On 19th July, 1984 the then Prime Minister Late Smt. Indira Gandhi laid the foundation to establish the factory for indigenous production of Infantry Combat Vehicles(ICVs) at Yeddumailaram in Sangareddy District of Telangana State.', NULL, NULL),
(5, 'EFA', 'EFA', 'EFA', '', NULL, NULL),
(6, 'AVNLCO', 'AVNLCO', 'AVNLCO', 'Armoured Vehicles Nigam Limited (AVANI) (AVNL) is a new Defence PSU with its headquarters at Avadi (Chennai). It has five (05) constituent production units and has around 12,000 employees. AVNL produces battle tanks i.e. T-72, T90, MBT Arjun and Infantry Combat Vehicles, support vehicles (MPV, AERV etc.) and Defence mobility solutions (Stallion, LPTA etc.) for the armed forces and homeland security agencies. It is the current market leader in this segment. It is a new Government Company with Great Future. It offers great work environment and challenging opportunities for the professionals to prove their mettle.', '0000-00-00 00:00:00', NULL),
(7, '135', 'AVNL', 'Ministry of Defence, HVF Road', 'AVNL Corporate office', '2023-10-20 04:58:42', '2023-10-23 09:18:44'),
(8, '136', '136', 'Trichy office', 'Test Data', '2023-10-23 09:19:23', '2023-10-23 09:19:23');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_17_063749_create_candidates_table', 1),
(6, '2023_08_17_072606_create_verification_codes_table', 1),
(7, '2023_08_19_171547_create_region_states_table', 1),
(8, '2023_08_20_145423_create_location_units_table', 1),
(9, '2023_08_21_073829_create_reservation_categories_table', 1),
(10, '2023_08_21_085939_create_job_postings_table', 1),
(11, '2023_08_22_111754_create_age_criterias_table', 1),
(12, '2023_08_23_141639_create_application_reference_numbers_table', 1),
(13, '2023_08_31_174213_create_personal_details_table', 1),
(14, '2023_09_01_153119_create_secondary_education_details_table', 1),
(15, '2023_09_01_153120_create_higher_secondary_education_details_table', 1),
(16, '2023_09_11_103558_create_graduation_education_details_table', 1),
(17, '2023_09_11_112523_create_post_graduation_education_details_table', 1),
(18, '2023_09_11_134459_create_iti_diploma_details_table', 1),
(19, '2023_09_11_141640_create_experience_details_table', 1),
(20, '2023_09_12_144753_create_reservation_vacancy_relaxations_table', 1),
(21, '2023_09_12_144800_create_reservation_age_relaxations_table', 1),
(22, '2023_09_14_161821_create_education_criterias_table', 1),
(24, '2023_09_21_113211_create_job_requirements_table', 1),
(25, '2023_09_21_120658_create_job_responsibilities_table', 1),
(26, '2023_09_21_121845_create_terms_conditions_table', 1),
(28, '2023_09_14_165858_create_experience_criterias_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` bigint(20) UNSIGNED NOT NULL,
  `reservation_category_id` bigint(20) UNSIGNED NOT NULL,
  `fatherName` varchar(255) NOT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `aadhaarNo` varchar(255) DEFAULT NULL,
  `pan` varchar(255) DEFAULT NULL,
  `address_line_1` varchar(255) DEFAULT NULL,
  `address_line_2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `region_state_id` bigint(20) UNSIGNED NOT NULL,
  `pin_code` varchar(255) DEFAULT NULL,
  `photo_path` varchar(255) DEFAULT NULL,
  `sign_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`id`, `candidate_id`, `reservation_category_id`, `fatherName`, `gender`, `dob`, `category`, `aadhaarNo`, `pan`, `address_line_1`, `address_line_2`, `city`, `region_state_id`, `pin_code`, `photo_path`, `sign_path`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 8, 'Ryan Jackson', 'male', '1979-01-22', NULL, '197619761976', 'ESTF112345', '564 Cowley Parkway', 'Aliqua Neque aut si', 'Non ab in at eveniet', 24, '700012', 'documents/1/profile/donts.png', NULL, '2023-10-20 09:09:22', '2023-10-26 08:57:06', NULL),
(2, 4, 2, 'Orli Schwartz', 'female', '1983-02-04', NULL, '594572289060', 'arzpt6217e', '501 Fabien Avenue', 'Voluptatem ipsum cu', 'Deleniti quaerat nis', 8, '621005', 'documents/4/profile/photo.png', NULL, '2023-10-23 06:36:39', '2023-10-23 06:36:39', NULL),
(3, 5, 8, 'Jaden Bush', 'male', '1999-11-14', NULL, '594572289061', 'arzpt6217e', '141 South Oak Road', 'Non et hic est volu', 'Neque ducimus aperi', 7, '621005', NULL, NULL, '2023-10-23 06:46:34', '2023-10-23 06:46:34', NULL),
(4, 6, 7, 'Durairajan', 'male', '1968-06-18', NULL, '232352027005', 'ABYPD6208L', 'Type IV, 6/4, AVNL Estate', 'HVF Road,', 'AVADI', 29, '600075', 'documents/6/profile/photo.png', NULL, '2023-10-23 09:23:08', '2023-10-23 10:00:06', NULL),
(5, 8, 1, 'Owen Greer', 'male', '2003-01-03', NULL, '594572289068', 'arzpt6217e', '67 White Fabien Freeway', 'Omnis reprehenderit', 'Officia voluptas ex', 23, '621005', 'documents/8/profile/photo.png', NULL, '2023-10-27 09:23:44', '2023-10-27 09:23:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_graduation_education_details`
--

CREATE TABLE `post_graduation_education_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `application_reference_number_id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` bigint(20) UNSIGNED NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `college_name` varchar(255) NOT NULL,
  `university_name` varchar(255) NOT NULL,
  `year_of_passing` year(4) NOT NULL,
  `score` int(11) NOT NULL,
  `marksheet_path` varchar(255) NOT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `file_type` varchar(255) DEFAULT NULL,
  `file_size` bigint(20) UNSIGNED DEFAULT NULL,
  `isValid` tinyint(1) DEFAULT NULL,
  `valid_remarks` longtext DEFAULT NULL,
  `invalid_remarks` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `reservation_age_relaxations`
--

CREATE TABLE `reservation_age_relaxations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_posting_id` bigint(20) UNSIGNED NOT NULL,
  `reservation_category_id` bigint(20) UNSIGNED NOT NULL,
  `upper_relaxation` int(11) NOT NULL,
  `lower_relaxation` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `reservation_vacancy_relaxations`
--

CREATE TABLE `reservation_vacancy_relaxations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_posting_id` bigint(20) UNSIGNED NOT NULL,
  `reservation_category_id` bigint(20) UNSIGNED NOT NULL,
  `vacancy` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservation_vacancy_relaxations`
--

INSERT INTO `reservation_vacancy_relaxations` (`id`, `job_posting_id`, `reservation_category_id`, `vacancy`, `created_at`, `updated_at`) VALUES
(11, 6, 1, 1, '2023-10-18 12:04:57', '2023-10-18 12:04:57'),
(12, 6, 4, 1, '2023-10-18 12:05:15', '2023-10-19 11:55:33'),
(13, 6, 5, 14, '2023-10-18 12:06:32', '2023-10-18 12:09:24'),
(15, 6, 3, 1, '2023-10-19 11:55:38', '2023-10-19 11:55:38'),
(16, 6, 6, 2, '2023-10-19 11:55:41', '2023-10-19 11:55:41'),
(18, 11, 1, 5, '2023-10-23 11:27:30', '2023-10-23 11:27:30'),
(19, 10, 1, 1, '2023-10-23 11:40:38', '2023-10-23 11:40:38'),
(20, 10, 2, 1, '2023-10-23 11:40:45', '2023-10-23 11:40:45');

-- --------------------------------------------------------

--
-- Table structure for table `secondary_education_details`
--

CREATE TABLE `secondary_education_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` bigint(20) UNSIGNED NOT NULL,
  `application_reference_number_id` bigint(20) UNSIGNED NOT NULL,
  `school_name` varchar(255) DEFAULT NULL,
  `school_board` varchar(255) DEFAULT NULL,
  `year_of_passing` year(4) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `marksheet_path` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `file_type` varchar(255) DEFAULT NULL,
  `file_size` bigint(20) UNSIGNED DEFAULT NULL,
  `isValid` tinyint(1) DEFAULT NULL,
  `valid_remarks` longtext DEFAULT NULL,
  `invalid_remarks` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `secondary_education_details`
--

INSERT INTO `secondary_education_details` (`id`, `candidate_id`, `application_reference_number_id`, `school_name`, `school_board`, `year_of_passing`, `score`, `marksheet_path`, `file_name`, `file_type`, `file_size`, `isValid`, `valid_remarks`, `invalid_remarks`, `created_at`, `updated_at`) VALUES
(1, 4, 3, 'Akeem Short', 'Melanie Mclaughlin', '1976', 77, 'documents/4/secondary/marksheet.jpg', 'marksheet.jpg', 'jpg', 765164, NULL, NULL, NULL, '2023-10-23 06:41:10', '2023-10-23 06:41:10'),
(2, 6, 6, 'DKHS School', 'SSC Board', '1981', 68, 'documents/6/secondary/marksheet.jpg', 'marksheet.jpg', 'jpg', 765164, 1, NULL, NULL, '2023-10-23 09:27:05', '2023-10-26 11:22:06');

-- --------------------------------------------------------

--
-- Table structure for table `terms_conditions`
--

CREATE TABLE `terms_conditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_posting_id` bigint(20) UNSIGNED NOT NULL,
  `job_terms` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms_conditions`
--

INSERT INTO `terms_conditions` (`id`, `job_posting_id`, `job_terms`, `created_at`, `updated_at`) VALUES
(1, 6, 'sdfadf adf sdf asdasd asd ', '2023-10-17 11:43:30', '2023-10-17 11:44:40'),
(2, 10, 'Candidate should join immediately\ntenure is for two years only', '2023-10-23 10:27:26', '2023-10-23 10:27:26'),
(3, 11, 'dsdkcsdkcmsdf', '2023-10-23 11:30:37', '2023-10-23 11:30:37'),
(4, 7, 'asdasd', '2023-10-30 04:52:18', '2023-10-30 04:52:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'siyam', 'avnlit@avnl.co.in', NULL, '$2y$10$A6sOAU7lOLB6Y2hWaklreO4Mo0rySN/wImRTtOqglR7hJLl3KXWvS', NULL, '2023-10-12 07:02:33', '2023-10-12 07:02:33');

-- --------------------------------------------------------

--
-- Table structure for table `verification_codes`
--

CREATE TABLE `verification_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` bigint(20) UNSIGNED NOT NULL,
  `otp` varchar(255) DEFAULT NULL,
  `expire_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `verification_codes`
--

INSERT INTO `verification_codes` (`id`, `candidate_id`, `otp`, `expire_at`, `created_at`, `updated_at`) VALUES
(1, 1, '509862', '2023-10-18 12:23:08', '2023-10-18 12:22:24', '2023-10-18 12:23:08'),
(2, 2, '355264', '2023-10-18 12:33:18', '2023-10-18 12:23:18', '2023-10-18 12:23:18'),
(3, 1, '932862', '2023-10-20 09:08:39', '2023-10-20 09:08:36', '2023-10-20 09:08:39'),
(4, 1, '434667', '2023-10-23 04:49:24', '2023-10-23 04:49:21', '2023-10-23 04:49:24'),
(5, 1, '374195', '2023-10-23 05:33:28', '2023-10-23 05:33:25', '2023-10-23 05:33:28'),
(6, 1, '874874', '2023-10-23 06:32:59', '2023-10-23 06:32:55', '2023-10-23 06:32:59'),
(7, 3, '466948', '2023-10-23 06:33:35', '2023-10-23 06:33:31', '2023-10-23 06:33:35'),
(8, 4, '374610', '2023-10-23 06:34:22', '2023-10-23 06:34:18', '2023-10-23 06:34:22'),
(9, 5, '805698', '2023-10-23 06:46:07', '2023-10-23 06:46:03', '2023-10-23 06:46:07'),
(10, 6, '812859', '2023-10-23 09:21:13', '2023-10-23 09:21:04', '2023-10-23 09:21:13'),
(11, 6, '561982', '2023-10-23 09:47:58', '2023-10-23 09:47:51', '2023-10-23 09:47:58'),
(12, 6, '858943', '2023-10-23 09:53:02', '2023-10-23 09:52:54', '2023-10-23 09:53:02'),
(13, 6, '757853', '2023-10-23 09:58:46', '2023-10-23 09:57:45', '2023-10-23 09:58:46'),
(14, 6, '519967', '2023-10-23 11:13:02', '2023-10-23 11:12:55', '2023-10-23 11:13:02'),
(15, 1, '978704', '2023-10-26 08:27:27', '2023-10-26 08:27:24', '2023-10-26 08:27:27'),
(16, 1, '703828', '2023-10-26 08:56:24', '2023-10-26 08:56:22', '2023-10-26 08:56:24'),
(17, 1, '188235', '2023-10-26 11:39:15', '2023-10-26 11:39:10', '2023-10-26 11:39:15'),
(18, 7, '295278', '2023-10-27 09:05:07', '2023-10-27 09:04:58', '2023-10-27 09:05:07'),
(19, 8, '755025', '2023-10-27 09:09:39', '2023-10-27 09:08:06', '2023-10-27 09:09:39'),
(20, 1, '419483', '2023-10-27 09:44:10', '2023-10-27 09:44:04', '2023-10-27 09:44:10'),
(21, 6, '552484', '2023-10-27 09:45:56', '2023-10-27 09:45:48', '2023-10-27 09:45:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `age_criterias`
--
ALTER TABLE `age_criterias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application_reference_numbers`
--
ALTER TABLE `application_reference_numbers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `application_reference_numbers_arn_unique` (`arn`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education_criterias`
--
ALTER TABLE `education_criterias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience_criterias`
--
ALTER TABLE `experience_criterias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience_details`
--
ALTER TABLE `experience_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `graduation_education_details`
--
ALTER TABLE `graduation_education_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `higher_secondary_education_details`
--
ALTER TABLE `higher_secondary_education_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iti_diploma_details`
--
ALTER TABLE `iti_diploma_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_postings`
--
ALTER TABLE `job_postings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_requirements`
--
ALTER TABLE `job_requirements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_responsibilities`
--
ALTER TABLE `job_responsibilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location_units`
--
ALTER TABLE `location_units`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `location_units_unit_code_unique` (`unit_code`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `personal_details`
--
ALTER TABLE `personal_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_graduation_education_details`
--
ALTER TABLE `post_graduation_education_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `region_states`
--
ALTER TABLE `region_states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation_age_relaxations`
--
ALTER TABLE `reservation_age_relaxations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation_categories`
--
ALTER TABLE `reservation_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation_vacancy_relaxations`
--
ALTER TABLE `reservation_vacancy_relaxations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `secondary_education_details`
--
ALTER TABLE `secondary_education_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms_conditions`
--
ALTER TABLE `terms_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `verification_codes`
--
ALTER TABLE `verification_codes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `age_criterias`
--
ALTER TABLE `age_criterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `application_reference_numbers`
--
ALTER TABLE `application_reference_numbers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `education_criterias`
--
ALTER TABLE `education_criterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `experience_criterias`
--
ALTER TABLE `experience_criterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `experience_details`
--
ALTER TABLE `experience_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `graduation_education_details`
--
ALTER TABLE `graduation_education_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `higher_secondary_education_details`
--
ALTER TABLE `higher_secondary_education_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iti_diploma_details`
--
ALTER TABLE `iti_diploma_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_postings`
--
ALTER TABLE `job_postings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `job_requirements`
--
ALTER TABLE `job_requirements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `job_responsibilities`
--
ALTER TABLE `job_responsibilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `location_units`
--
ALTER TABLE `location_units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_details`
--
ALTER TABLE `personal_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `post_graduation_education_details`
--
ALTER TABLE `post_graduation_education_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `region_states`
--
ALTER TABLE `region_states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `reservation_age_relaxations`
--
ALTER TABLE `reservation_age_relaxations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation_categories`
--
ALTER TABLE `reservation_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reservation_vacancy_relaxations`
--
ALTER TABLE `reservation_vacancy_relaxations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `secondary_education_details`
--
ALTER TABLE `secondary_education_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `terms_conditions`
--
ALTER TABLE `terms_conditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `verification_codes`
--
ALTER TABLE `verification_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
