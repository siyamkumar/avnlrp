
INSERT INTO `age_criterias` (`id`, `job_posting_id`, `minAge`, `maxAge`, `created_at`, `updated_at`) VALUES
(2, 6, 35, 65, '2023-10-28 05:29:07', '2023-10-28 05:29:07'),
(3, 7, 30, 60, '2023-10-28 05:36:48', '2023-10-28 05:36:48'),
(4, 8, 30, 60, '2023-10-28 05:38:32', '2023-10-28 05:38:32'),
(5, 9, 25, 60, '2023-10-28 05:39:55', '2023-10-28 05:39:55'),
(6, 10, 25, 50, '2023-10-28 05:44:06', '2023-10-28 05:44:06'),
(7, 11, 25, 60, '2023-10-28 05:45:17', '2023-10-28 05:45:17'),
(8, 12, 30, 40, '2023-10-28 05:49:51', '2023-10-28 05:49:51'),
(9, 13, 65, 18, '2023-10-28 05:57:54', '2023-10-28 05:57:54'),
(10, 14, 35, 55, '2023-10-28 06:16:33', '2023-10-28 06:16:42'),
(11, 15, 35, 50, '2023-10-28 06:19:40', '2023-10-28 06:19:40'),
(12, 16, 25, 50, '2023-10-28 06:29:24', '2023-10-28 06:29:24'),
(13, 17, 18, 25, '2023-10-28 06:35:02', '2023-10-28 06:35:02'),
(14, 18, 18, 25, '2023-10-28 06:38:28', '2023-10-28 06:38:28'),
(15, 19, 2, 5, '2023-10-28 06:44:17', '2023-10-28 06:44:17'),
(16, 20, 0, 60, '2023-10-28 06:59:52', '2023-10-28 06:59:52'),
(17, 21, 30, 50, '2023-10-28 07:08:09', '2023-10-28 07:08:09'),
(18, 22, 40, 50, '2023-10-30 04:16:43', '2023-10-30 04:16:43'),
(19, 23, 18, 25, '2023-10-30 04:29:55', '2023-10-30 04:29:55'),
(20, 25, 25, 35, '2023-10-30 04:49:18', '2023-10-30 04:49:18'),
(21, 28, 25, 50, '2023-10-30 09:30:49', '2023-10-30 09:30:49');


INSERT INTO `application_reference_numbers` (`id`, `candidate_id`, `job_posting_id`, `arn`, `mode_of_payment`, `fee_details`, `payment_proof`, `status`, `isSubmitted`, `submitted_at`, `file_name`, `file_type`, `file_size`, `declaration_date`, `place`, `signature_path`, `isShortlisted`, `shortlist_remarks`, `reject_remarks`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 18, 6, 'AVNLCO202310618001', NULL, NULL, NULL, 'submitted', 1, NULL, NULL, NULL, NULL, '2023-10-30', 'Avadi', 'documents/18/declaration/Signature.png', NULL, NULL, NULL, '2023-10-30 05:42:31', '2023-10-30 05:48:41', NULL),
(8, 16, 13, 'VFJ2023101316002', NULL, NULL, NULL, 'submitted', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-30 05:51:06', '2023-10-30 06:23:28', NULL),
(9, 13, 9, 'EFA202310913003', NULL, NULL, NULL, 'submitted', 1, NULL, NULL, NULL, NULL, '2023-10-30', 'Avadi', 'documents/13/declaration/Signature.png', NULL, NULL, NULL, '2023-10-30 06:25:45', '2023-10-30 06:38:07', NULL),
(10, 18, 22, 'AVNLCO2023102218004', NULL, NULL, NULL, 'submitted', 1, NULL, NULL, NULL, NULL, '2023-10-25', 'Avadi', 'documents/18/declaration/Signature.png', NULL, NULL, NULL, '2023-10-30 07:05:57', '2023-10-30 07:14:44', NULL),
(11, 18, 13, 'VFJ2023101318005', NULL, NULL, NULL, 'draft', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-30 07:15:00', '2023-10-30 07:15:00', NULL),
(12, 19, 20, 'AVNLCO2023102019006', NULL, NULL, NULL, 'submitted', 1, NULL, NULL, NULL, NULL, NULL, 'goa', 'documents/19/declaration/download.png', NULL, NULL, NULL, '2023-10-30 09:41:20', '2023-10-30 09:46:30', NULL),
(13, 20, 19, 'OFMK2023101920007', NULL, NULL, 'documents/20/payment/bank statement.webp', 'submitted', 1, NULL, NULL, NULL, NULL, '2023-10-12', 'gujarath', 'documents/20/declaration/download.png', NULL, NULL, NULL, '2023-10-30 09:48:46', '2023-10-30 09:51:17', NULL),
(14, 21, 28, 'HVF2023102821008', NULL, NULL, NULL, 'shortlisted', 1, NULL, NULL, NULL, NULL, '2023-10-30', 'Haryana', 'documents/21/declaration/download.png', 1, '', NULL, '2023-10-30 09:53:11', '2023-10-30 10:46:34', NULL),
(15, 7, 6, 'AVNLCO20231067009', NULL, NULL, 'documents/7/payment/download.png', 'submitted', 1, NULL, NULL, NULL, NULL, '2023-10-30', 'chennai', 'documents/7/declaration/download.png', NULL, NULL, NULL, '2023-10-30 10:03:01', '2023-10-30 10:21:20', NULL),
(16, 7, 9, 'EFA20231097010', NULL, NULL, 'documents/7/payment/Fee Paid Receipt.png', 'submitted', 1, NULL, NULL, NULL, NULL, '2023-10-30', 'chennai', 'documents/7/declaration/download.png', NULL, NULL, NULL, '2023-10-30 10:24:47', '2023-10-30 10:41:46', NULL);


INSERT INTO `candidates` (`id`, `fullname`, `email`, `phone_no`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 'Dharmarajan', 'durairajan.dharmarajan@gmail.com', '9629712157', '2023-10-28 04:24:02', '2023-10-28 04:24:02', NULL),
(8, 'Dharmarajan', 'AndhraPradesh_GEN@gmail.com', '1234567801', '2023-10-28 09:53:26', '2023-10-28 09:53:26', NULL),
(9, 'DharmarajanA', 'AndhraPradesh_HH@gmail.com', '01234567802', '2023-10-28 09:58:47', '2023-10-28 09:58:47', NULL),
(10, 'DharmarajanB', 'AndhraPradesh_MD@gmail.com', '12345678902', '2023-10-28 10:02:21', '2023-10-28 10:02:21', NULL),
(11, 'DharmarajanC', 'AndhraPradesh_NCL@gmail.com', '1234567802', '2023-10-28 10:04:36', '2023-10-28 10:04:36', NULL),
(12, 'DharmarajanD', 'AndhraPradesh_OH@gmail.com', '01234567804', '2023-10-28 10:06:26', '2023-10-28 10:06:26', NULL),
(13, 'Thenmozhi', 'AndhraPradesh_OBC@gmail.com', '01234567805', '2023-10-28 10:10:40', '2023-10-28 10:10:40', NULL),
(14, 'ThenmozhiB', 'AndhraPradesh_SC@gmail.com', '01234567806', '2023-10-28 10:15:52', '2023-10-28 10:15:52', NULL),
(15, 'Ranjani', 'Assam_GEN@gmail.com', '01234567801', '2023-10-30 05:11:54', '2023-10-30 05:11:54', NULL),
(16, 'RanjaniA', 'Assam_HH@gmail.com', '01234567803', '2023-10-30 05:28:07', '2023-10-30 05:28:07', NULL),
(17, 'RanjaniB', 'ArunachalPradesh_SC@gmail.com', '012345678901', '2023-10-30 05:33:42', '2023-10-30 05:33:42', NULL),
(18, 'RanjaniC', 'Bihar_MD@gmail.com', '01234567812', '2023-10-30 05:39:03', '2023-10-30 05:39:03', NULL),
(19, 'thenmozhi', 'Goa@gmail.com', '+1 (275) 965-8994', '2023-10-30 09:38:50', '2023-10-30 09:38:50', NULL),
(20, 'Gujarat', 'Gujarat@gmail.com', '+1 (233) 781-2051', '2023-10-30 09:47:47', '2023-10-30 09:47:47', NULL),
(21, 'Haryana', 'Haryana@gmail.com', '+1 (275) 965-8989', '2023-10-30 09:51:56', '2023-10-30 09:51:56', NULL);

--
INSERT INTO `education_criterias` (`id`, `job_posting_id`, `min_qualification`, `desired_education`, `created_at`, `updated_at`) VALUES
(1, 6, '[\"UG\"]', 'Degree', '2023-10-28 05:29:39', '2023-10-28 05:29:39'),
(2, 7, '[\"Diploma\",\"UG\"]', 'Degree', '2023-10-28 05:36:49', '2023-10-28 05:36:49'),
(3, 8, '[\"UG\"]', 'Degree', '2023-10-28 05:38:42', '2023-10-28 05:38:42'),
(4, 9, '[\"UG\"]', 'Degree', '2023-10-28 05:39:54', '2023-10-28 05:39:54'),
(5, 11, '[\"UG\"]', 'Degree', '2023-10-28 05:45:16', '2023-10-28 05:45:16'),
(6, 12, '[\"UG\"]', 'A certificate in the relevant area', '2023-10-28 05:49:50', '2023-10-28 05:49:50'),
(7, 13, '[\"10th\",\"10th\",\"12th\",\"UG\"]', 'Degree in Human Resource', '2023-10-28 05:59:01', '2023-10-28 05:59:01'),
(8, 15, '[\"10th\",\"10th\",\"12th\",\"UG\"]', 'Degree', '2023-10-28 06:22:28', '2023-10-28 06:22:28'),
(9, 16, '[\"UG\"]', 'Proficiency in Language Hindi and English. • Good interpersonal skills • Data analysis and numerical ability • Ability to deal with senior Government and non Government stake holder and to handle confidential information. • Proficiency in MS office suit of product and technology savvy', '2023-10-28 06:29:38', '2023-10-28 06:29:38'),
(10, 17, '[\"10th\",\"10th\",\"12th\",\"Diploma\"]', 'Diploma', '2023-10-28 06:35:19', '2023-10-28 06:35:19'),
(11, 18, '[\"10th\",\"10th\",\"Diploma\"]', 'Diploma', '2023-10-28 06:39:01', '2023-10-28 06:39:01'),
(12, 19, '[\"10th\",\"10th\",\"ITI\"]', 'Diploma', '2023-10-28 06:44:47', '2023-10-28 06:44:47'),
(13, 20, '[\"10th\",\"10th\",\"PG\",\"UG\"]', 'Minimum Education', '2023-10-28 07:00:25', '2023-10-28 07:00:25'),
(14, 21, '[\"PG\",\"UG\"]', 'A certificate in the relevant area', '2023-10-28 07:08:27', '2023-10-28 07:08:27'),
(15, 22, '[\"10th\",\"10th\",\"UG\"]', 'BE', '2023-10-30 04:17:48', '2023-10-30 04:17:48'),
(16, 23, '[\"10th\",\"10th\",\"12th\",\"ITI\"]', 'ITI Diploma', '2023-10-30 04:30:23', '2023-10-30 04:30:23'),
(17, 25, '[\"10th\",\"10th\",\"12th\",\"PG\",\"UG\"]', 'Masters Degree in Computer Science and applications', '2023-10-30 04:49:46', '2023-10-30 04:49:46'),
(18, 28, '[\"10th\",\"10th\",\"12th\",\"UG\"]', 'BE (MECHANIC)', '2023-10-30 09:32:27', '2023-10-30 09:32:27');


INSERT INTO `experience_criterias` (`id`, `job_posting_id`, `minExp`, `maxExp`, `desiredExperience`, `created_at`, `updated_at`) VALUES
(1, 6, 2, 10, '10 Years', '2023-10-28 05:29:47', '2023-10-28 05:29:47'),
(2, 7, 2, 5, '5 Years', '2023-10-28 05:36:51', '2023-10-28 05:36:51'),
(3, 8, 2, 5, 'nn', '2023-10-28 05:38:41', '2023-10-28 05:38:41'),
(4, 9, 2, 5, NULL, '2023-10-28 05:39:53', '2023-10-28 05:39:53'),
(5, 11, 2, 5, '5 Years', '2023-10-28 05:45:11', '2023-10-28 05:45:11'),
(6, 12, 2, 5, '5 Years', '2023-10-28 05:49:49', '2023-10-28 05:49:49'),
(7, 13, 10, 20, 'MBA with specialised in Human Resource', '2023-10-28 05:59:38', '2023-10-28 05:59:38'),
(8, 15, 10, 15, 'our primary objective will be to enhance our HR initiatives, contributing to the overall success of our organization. By leveraging your expertise, we aim to achieve efficient and effective HR operations that positively impact our business as a whole.', '2023-10-28 06:20:23', '2023-10-28 06:22:37'),
(9, 16, 5, 8, 'MBA with specialised in Human Resource', '2023-10-28 06:29:57', '2023-10-28 06:29:57'),
(10, 18, 123321453, 123125, 'Desired Experiene', '2023-10-28 06:39:03', '2023-10-28 06:39:03'),
(11, 19, 235, 532, 'Desired Experience', '2023-10-28 06:44:45', '2023-10-28 06:44:45'),
(12, 20, 123, 324, 'MBA with specialised in Human Resource', '2023-10-28 07:00:42', '2023-10-28 07:00:42'),
(13, 21, 23, 43, 'Desired Experience', '2023-10-28 07:08:44', '2023-10-28 07:08:44'),
(14, 22, 5, 10, '5', '2023-10-30 04:18:00', '2023-10-30 04:18:00'),
(15, 23, 0, 1, 'Worked in a Factory', '2023-10-30 04:31:12', '2023-10-30 04:31:12'),
(16, 25, 3, 5, 'Good Experience in Artificial Intelligence programming ', '2023-10-30 04:51:08', '2023-10-30 04:51:08'),
(17, 28, 5, 10, 'Worked in a Factory', '2023-10-30 09:32:39', '2023-10-30 09:32:39');


INSERT INTO `experience_details` (`id`, `application_reference_number_id`, `candidate_id`, `companyName`, `postName`, `periodFrom`, `periodTo`, `payScale`, `jobType`, `ctc`, `experience_path`, `jobsSummary`, `file_name`, `file_type`, `file_size`, `isValid`, `valid_remarks`, `invalid_remarks`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 7, 18, 'XYZ Company', 'Chaiwala', '2001-01-01 00:00:00', '2005-12-31 00:00:00', 'E4', 'GovtJob', '234324', 'documents/18/experience/Experience Certificate 2.png', 'Just go to the Job,, Enjoy time.. Thats all', 'Experience Certificate 2.png', 'png', 3336, NULL, NULL, NULL, '2023-10-30 05:46:18', '2023-10-30 05:46:18', NULL),
(2, 10, 18, 'XYZ Company', 'Programmer', '2017-06-30 00:00:00', '2019-05-31 00:00:00', NULL, 'Private', '422524', NULL, 'Creative and people-oriented computer scientist with up to 2 years of working with tech startups. Advanced knowledge of', NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-30 07:13:07', '2023-10-30 07:13:07', NULL),
(3, 11, 18, 'XYZ Company', 'Chaiwala', '2013-01-30 00:00:00', '2020-01-30 00:00:00', NULL, 'Private', '50000', 'documents/18/experience/Experience-Letter.jpg', NULL, 'Experience-Letter.jpg', 'jpg', 36657, NULL, NULL, NULL, '2023-10-30 07:29:24', '2023-10-30 07:29:24', NULL),
(4, 11, 18, 'XYZ Company', 'Chaiwala', '2013-01-30 00:00:00', '2020-01-30 00:00:00', NULL, 'Private', '50000', 'documents/18/experience/Doctorate Certificate.jpg', 'yhghghg', 'Doctorate Certificate.jpg', 'jpg', 8588, NULL, NULL, NULL, '2023-10-30 09:25:09', '2023-10-30 09:25:09', NULL),
(5, 12, 19, 'Vega and Rosa Trading', 'Shellie Kelley', '2000-08-21 00:00:00', '2009-10-12 00:00:00', 'E2', 'GovtJob', NULL, NULL, 'Rem natus nemo velit', NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-30 09:44:16', '2023-10-30 09:44:40', NULL),
(6, 14, 21, 'Curtis and Sexton Co', 'Caldwell Finley', '2000-03-23 00:00:00', '2003-07-09 00:00:00', 'E5', 'GovtJob', NULL, 'documents/21/experience/Experience-Letter.jpg', 'Error soluta odit be', 'Experience-Letter.jpg', 'jpg', 36657, 1, NULL, NULL, '2023-10-30 09:54:42', '2023-10-30 10:46:01', NULL),
(7, 15, 7, 'C-N-C Park', 'Programmer', '1989-05-30 00:00:00', '1991-09-30 00:00:00', NULL, 'Private', '25000', 'documents/7/experience/Experience-Letter.jpg', 'Programming, Teaching', 'Experience-Letter.jpg', 'jpg', 36657, NULL, NULL, NULL, '2023-10-30 10:07:29', '2023-10-30 10:07:29', NULL),
(8, 15, 7, 'Thiagarajar College', 'Lecturer', '1991-10-01 00:00:00', '1995-10-30 00:00:00', 'E2', 'GovtJob', NULL, 'documents/7/experience/Experience-Letter.jpg', 'Teaching Students', 'Experience-Letter.jpg', 'jpg', 36657, NULL, NULL, NULL, '2023-10-30 10:09:11', '2023-10-30 10:09:11', NULL),
(9, 15, 7, 'Industrial Finance Corporation of India Limited', 'System Analyst', '1996-03-09 00:00:00', '2019-11-30 00:00:00', NULL, 'Private', '500000', 'documents/7/experience/Experience-Letter.jpg', 'Database Administration, Systems Administration', 'Experience-Letter.jpg', 'jpg', 36657, NULL, NULL, NULL, '2023-10-30 10:11:51', '2023-10-30 10:11:51', NULL),
(10, 16, 7, 'Aparajitha Corporate Services Pvt Ltd', 'Senior Manager', '1991-02-18 00:00:00', '2017-12-12 00:00:00', NULL, 'Private', '1500000', 'documents/7/experience/Experience-Letter.jpg', 'IT Manager', 'Experience-Letter.jpg', 'jpg', 36657, NULL, NULL, NULL, '2023-10-30 10:40:03', '2023-10-30 10:40:03', NULL);

INSERT INTO `graduation_education_details` (`id`, `candidate_id`, `application_reference_number_id`, `course_name`, `college_name`, `university_name`, `year_of_passing`, `score`, `marksheet_path`, `file_name`, `file_type`, `file_size`, `isValid`, `valid_remarks`, `invalid_remarks`, `created_at`, `updated_at`) VALUES
(1, 13, 9, 'B.sc', 'S N College', 'Madurai Kamaraj University', '2001', 70, 'documents/13/graduation/Degree Certificate.jpg', 'Degree Certificate.jpg', 'jpg', 5313, 1, NULL, NULL, '2023-10-30 06:28:14', '2023-10-30 10:55:50'),
(2, 13, 9, 'B.Sc Computer Science', 'SN College', 'Madurai Kamaraj University', '1998', 75, 'documents/13/graduation/Degree Certificate.jpg', 'Degree Certificate.jpg', 'jpg', 5313, 1, NULL, NULL, '2023-10-30 06:33:40', '2023-10-30 10:55:55'),
(3, 18, 11, 'B.Sc Computer Science', 'S N College', 'Madurai Kamaraj University', '2001', 70, 'documents/18/graduation/Degree Certificate.jpg', 'Degree Certificate.jpg', 'jpg', 5313, NULL, NULL, NULL, '2023-10-30 07:18:10', '2023-10-30 07:18:10'),
(4, 18, 11, 'B.Sc Computer Science', 'S N College', 'Madurai Kamaraj University', '2001', 70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-30 07:24:47', '2023-10-30 07:24:47'),
(5, 19, 12, 'Camille Lara', 'Joelle May', 'Shay Oneill', '1992', 78, 'documents/19/graduation/certificate.jpg', 'certificate.jpg', 'jpg', 765164, NULL, NULL, NULL, '2023-10-30 09:42:50', '2023-10-30 09:42:50'),
(6, 21, 14, 'Griffin Tanner', 'Susan Church', 'Steven William', '2016', 56, 'documents/21/graduation/certificate.jpg', 'certificate.jpg', 'jpg', 765164, 1, NULL, NULL, '2023-10-30 09:54:15', '2023-10-30 10:45:46'),
(7, 7, 15, 'B.Sc Physics', 'S.N. College', 'Madurai Kamaraj University', '1986', 58, 'documents/7/graduation/Degree Certificate.jpg', 'Degree Certificate.jpg', 'jpg', 5313, NULL, NULL, NULL, '2023-10-30 10:05:29', '2023-10-30 10:05:29'),
(8, 7, 16, 'B.Sc Physics', 'S.N. College', 'Madurai Kamaraj University', '1986', 78, 'documents/7/graduation/Degree Certificate.jpg', 'Degree Certificate.jpg', 'jpg', 5313, NULL, NULL, NULL, '2023-10-30 10:32:48', '2023-10-30 10:32:48');



INSERT INTO `higher_secondary_education_details` (`id`, `candidate_id`, `application_reference_number_id`, `school_name`, `school_board`, `year_of_passing`, `score`, `marksheet_path`, `file_name`, `file_type`, `file_size`, `isValid`, `valid_remarks`, `invalid_remarks`, `created_at`, `updated_at`) VALUES
(2, 13, 9, 'DK School', 'HSC Board', '1998', 90, 'documents/13/highersecondary/12th Marksheet.jpg', '12th Marksheet.jpg', 'jpg', 11829, 1, NULL, NULL, '2023-10-30 06:27:28', '2023-10-30 10:55:43'),
(3, 18, 10, 'DK School', 'HSC Board', '1996', 65, 'documents/18/highersecondary/12th Marksheet.jpg', '12th Marksheet.jpg', 'jpg', 11829, NULL, NULL, NULL, '2023-10-30 07:07:05', '2023-10-30 07:07:05'),
(4, 19, 12, 'Lillian Malone', 'Molestiae non neque', '1991', 89, 'documents/19/highersecondary/12th Marksheet.jpg', '12th Marksheet.jpg', 'jpg', 11829, NULL, NULL, NULL, '2023-10-30 09:42:30', '2023-10-30 09:42:30'),
(5, 20, 13, 'Iliana Rodriguez', 'Ex sit facilis non n', '1992', 58, 'documents/20/highersecondary/12th Marksheet.jpg', '12th Marksheet.jpg', 'jpg', 11829, NULL, NULL, NULL, '2023-10-30 09:49:25', '2023-10-30 09:49:25'),
(6, 21, 14, 'Adena Smith', 'Qui amet labore exp', '2013', 78, 'documents/21/highersecondary/12th Marksheet.jpg', '12th Marksheet.jpg', 'jpg', 11829, 1, NULL, NULL, '2023-10-30 09:53:51', '2023-10-30 10:45:13'),
(7, 7, 15, 'DK Govt School', 'Higher Secondary Board', '1983', 70, 'documents/7/highersecondary/12th Marksheet.jpg', '12th Marksheet.jpg', 'jpg', 11829, NULL, NULL, NULL, '2023-10-30 10:04:39', '2023-10-30 10:04:39'),
(8, 7, 16, 'HSC', 'SSC', '1983', 78, 'documents/7/highersecondary/12th Marksheet.jpg', '12th Marksheet.jpg', 'jpg', 11829, NULL, NULL, NULL, '2023-10-30 10:32:16', '2023-10-30 10:32:16');


INSERT INTO `job_postings` (`id`, `location_unit_id`, `jobPostingDate`, `jobPostingLastDate`, `jobAdvertismentNo`, `jobTitle`, `category`, `jobLocation`, `vacancy`, `tenure`, `renumeration`, `user_id`, `status`, `summary`, `isContract`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 6, '2023-10-29', '2023-11-19', '45678', 'MANAGER', NULL, NULL, 21, 2, 60000, 1, 'active', 'Accomplishes department objectives by managing staff; planning and evaluating department activities. Maintains staff by recruiting, selecting, orienting, and training employees. Ensures a safe, secure, and legal work environment. Develops personal growth opportunities.', 1, '2023-10-28 05:28:43', '2023-10-28 05:32:41', NULL),
(9, 5, '2023-10-28', '2023-11-18', '2', 'PRODUCTION ENGINEER', NULL, NULL, 2, 2, 30000, 1, 'active', 'Track all materials, equipment, and labor, and report daily production figures. Monitor the productivity of staff, materials, and equipment to ensure maximum efficiency. Keep work areas clean and organized. Assist with the development of personnel.', 1, '2023-10-28 05:39:32', '2023-10-28 05:41:27', NULL),
(11, 4, '2023-09-08', '2023-09-29', '3', 'DESIGN -ENGINEER', NULL, NULL, 7, 2, 60000, 1, 'active', 'developing concepts, graphics and layouts, including making decisions about fonts, images, readability and readers\' needs', 1, '2023-10-28 05:44:12', '2023-10-28 05:47:26', NULL),
(12, 3, '2023-09-08', '2023-09-29', '4', 'DESIGN -ENGINEER(EE)', NULL, NULL, 1, 2, 50000, 1, 'draft', 'designers generally work in studios, where they have access to equipment such as drafting tables, computers, and software', 1, '2023-10-28 05:49:23', '2023-10-28 05:49:23', NULL),
(13, 3, '2023-10-10', '2023-10-31', 'AVNL/OCT/004', 'HR Consultant', NULL, NULL, 1, 1, 110000, 1, 'active', 'Initiating and leading human resource programs and projects\r\nConducting research through various methods to identify a problematic situation or find the cause\r\nProviding advice and recommendations to HR personnel for resolution of daily issues', 1, '2023-10-28 05:57:27', '2023-10-28 06:13:12', NULL),
(14, 4, '2023-10-10', '2023-10-31', 'AVNL/OCT/005', 'Young Professional - Production', NULL, NULL, 1, 2, 40000, 1, 'draft', 'We are seeking a qualified HR Consultant to lead and oversee various human resource projects, providing valuable advice on human capital management. Your role will involve optimizing day-to-day HR processes, including recruitment, and implementing strategic HR plans and technology solutions.', 1, '2023-10-28 06:15:52', '2023-10-28 06:15:52', NULL),
(15, 4, '2023-10-10', '2023-10-31', 'AVNL/OCT/005', 'Young Professional - Production', NULL, NULL, 1, 2, 40000, 1, 'draft', 'We are seeking a qualified HR Consultant to lead and oversee various human resource projects, providing valuable advice on human capital management. Your role will involve optimizing day-to-day HR processes, including recruitment, and implementing strategic HR plans and technology solutions.', 1, '2023-10-28 06:19:16', '2023-10-28 06:19:16', NULL),
(16, 4, '2023-10-10', '2023-10-31', 'AVNL/OCT/005', 'Young Professional - Production', NULL, NULL, 1, 2, 40000, 1, 'draft', 'We are seeking a qualified HR Consultant to lead and oversee various human resource projects, providing valuable advice on human capital management. Your role will involve optimizing day-to-day HR processes, including recruitment, and implementing strategic HR plans and technology solutions.', 1, '2023-10-28 06:28:58', '2023-10-28 06:28:58', NULL),
(17, 4, '2023-10-10', '2023-10-31', 'AVNL/OCT/005', 'Young Professional - Production', NULL, NULL, 1, 2, 40000, 1, 'draft', 'We are seeking a qualified HR Consultant to lead and oversee various human resource projects, providing valuable advice on human capital management. Your role will involve optimizing day-to-day HR processes, including recruitment, and implementing strategic HR plans and technology solutions.', 1, '2023-10-28 06:30:26', '2023-10-28 06:30:26', NULL),
(18, 4, '2023-10-10', '2023-10-31', 'AVNL/OCT/005', 'Young Professional - Production', NULL, NULL, 1, 2, 40000, 1, 'draft', 'We are seeking a qualified HR Consultant to lead and oversee various human resource projects, providing valuable advice on human capital management. Your role will involve optimizing day-to-day HR processes, including recruitment, and implementing strategic HR plans and technology solutions.', 1, '2023-10-28 06:38:16', '2023-10-28 06:38:16', NULL),
(19, 4, '2023-10-10', '2023-10-31', 'AVNL/OCT/005', 'Young Professional - Production', NULL, NULL, 1, 2, 40000, 1, 'active', 'We are seeking a qualified HR Consultant to lead and oversee various human resource projects, providing valuable advice on human capital management. Your role will involve optimizing day-to-day HR processes, including recruitment, and implementing strategic HR plans and technology solutions.', 1, '2023-10-28 06:44:06', '2023-10-28 06:45:32', NULL),
(20, 6, '2023-10-31', '2023-11-21', 'AVNL/OCT/006', 'Senior Manager', NULL, NULL, 15, 123334324, 60000, 1, 'active', 'Lead and manage a team of employees, providing guidance and support as needed. Ensure that projects are completed on time, within budget, and to the required quality standards. Collaborate with other departments and stakeholders to ensure that business needs are being met.', 1, '2023-10-28 06:57:17', '2023-10-28 07:04:05', NULL),
(21, 5, '2023-05-01', '2023-05-22', 'AVNL/OCT/007', 'Company Secretary', NULL, NULL, 32, 2, 75000, 1, 'active', 'Company secretaries advise company directors about how their organisations should be directed, managed and controlled. This is also known as corporate governance and it includes ensuring that the company complies with legal and regulatory requirements such as filing accounts, holding shareholders’ meetings and keeping company documents secure.\r\n\r\nCompany secretaries are different from general secretaries or administrative staff. By law, public companies must have a company secretary, and, while private companies aren’t required to appoint one, many do because they recognise the importance of employing someone who is responsible for making sure the company is meeting legal requirements.', 1, '2023-10-28 07:06:57', '2023-10-28 07:10:54', NULL),
(22, 6, '2023-10-30', '2023-11-20', 'AVNL/OCT/007', 'Executive(Product)', NULL, NULL, 2, 2, 50000, 1, 'active', 'Executive for production department', 1, '2023-10-30 04:16:08', '2023-10-30 04:18:20', NULL),
(23, 5, '2023-10-31', '2023-11-21', 'AVNL/OCT/008', 'Trade Apprentice', NULL, NULL, 100, 1, 25000, 1, 'draft', 'The apprentices responsibilities include learning and developing practical skills, participating in classes and workshops on and offsite, observing all health and safety codes, completing tests and assignments, as well as delivering presentations to staff and other stakeholders.', 1, '2023-10-30 04:28:13', '2023-10-30 04:28:13', NULL),
(24, 5, '2023-10-31', '2023-11-21', 'AVNL/OCT/008', 'Trade Apprentice', NULL, NULL, 100, 1, 25000, 1, 'draft', 'The apprentices responsibilities include learning and developing practical skills, participating in classes and workshops on and offsite, observing all health and safety codes, completing tests and assignments, as well as delivering presentations to staff and other stakeholders.', 1, '2023-10-30 04:33:25', '2023-10-30 04:33:25', NULL),
(25, 7, '2023-10-02', '2023-10-23', 'AVNL/OCT/009', 'Prompt Manager', NULL, NULL, 2, 3, 120000, 1, 'active', 'The person should be responsible for using AI technology in our Factory in order to increase the productivity of the Employees .', 1, '2023-10-30 04:47:35', '2023-10-30 04:52:44', NULL),
(26, 7, '2023-10-28', '2023-11-18', 'HVF/01', 'ENGINNER', NULL, NULL, 5, 3, 50000, 3, 'draft', 'ENGINNER', 1, '2023-10-30 09:28:29', '2023-10-30 09:28:29', NULL),
(27, 7, '2023-10-28', '2023-11-18', 'HVF/01', 'ENGINNER', NULL, NULL, 5, 3, 50000, 3, 'draft', 'ENGINNER', 1, '2023-10-30 09:28:47', '2023-10-30 09:28:47', NULL),
(28, 7, '2023-10-28', '2023-11-18', 'HVF/01', 'ENGINNER', NULL, NULL, 5, 3, 50000, 3, 'active', 'ENGINNER', 1, '2023-10-30 09:28:59', '2023-10-30 09:33:47', NULL);

INSERT INTO `job_requirements` (`id`, `job_posting_id`, `job_specification`, `knowledge`, `skills`, `created_at`, `updated_at`) VALUES
(1, 6, 'Maintains office services by organizing office operations and procedures, preparing payroll, controlling correspondence, designing filing systems, reviewing and approving supply requisitions, and assigning and monitoring clerical functions.', 'A knowledge manager ensures everyone in your organization has the information they need. They do this by owning the ongoing governance of a knowledge base or company wiki, including its overall health and best practices.', 'Problem-solving and decision-making skills: financial planning, business acumen, and customer focus. Team management and professional development skills: influence, motivation, communication, team building, and coaching.', '2023-10-28 05:31:34', '2023-10-28 05:31:34'),
(2, 9, 'A Production Engineer works for a factory, manufacturing, production, or processing business.', 'Design and implement cost-reductive changes', ' Production Engineers report to a Production Manager or Engineering Manager.', '2023-10-28 05:40:33', '2023-10-28 05:40:33'),
(3, 11, 'Find better design professionals with better design job descriptions.', ' From graphic designers to illustrators, move fast in a competitive market.', 'graphic designer jobs and resumes are in the tens of thousands a month.', '2023-10-28 05:46:09', '2023-10-28 05:46:09'),
(4, 12, 'Design engineers identify complex design problems, conduct root-cause failure analyses, and anticipate production issues.', 'Electrical designers create electrical systems. Using their expertise on how electricity works,', 'Design engineering involves using creativity to come up with ideas that you can transform into actual products', '2023-10-28 05:51:56', '2023-10-28 05:51:56'),
(5, 13, 'A Human Resources Consultant initiates and leads HR programs and projects, conducts research to identify issues, provides advice and recommendations, formulates strategic plans, and assists in recruitment, training, and management of personnel. ', 'A Human Resources Consultant initiates and leads HR programs and projects, conducts research to identify issues, provides advice and recommendations, formulates strategic plans, and assists in recruitment, training, and management of personnel. ', 'A Human Resources Consultant initiates and leads HR programs and projects, conducts research to identify issues, provides advice and recommendations, formulates strategic plans, and assists in recruitment, training, and management of personnel. ', '2023-10-28 06:05:52', '2023-10-28 06:05:52'),
(6, 19, 'Specification', 'Knowledge', 'Skills', '2023-10-28 06:45:04', '2023-10-28 06:45:04'),
(7, 20, 'Job Specification', 'Knowledge', 'Skills', '2023-10-28 07:02:52', '2023-10-28 07:02:52'),
(8, 21, 'Job Requirement', 'Knowledge', 'Skills', '2023-10-28 07:09:02', '2023-10-28 07:09:02'),
(9, 22, 'test', 'test', 'test', '2023-10-30 04:18:09', '2023-10-30 04:18:09'),
(10, 25, 'Manage and mentor prompt engineers, providing both technical guidance and career development.\n', 'Set goals and reviews for your team, promoting growth and output.\n', 'Stay on top of latest advancements in prompt engineering and adjust team direction accordingly.', '2023-10-30 04:51:58', '2023-10-30 04:51:58'),
(11, 28, 'C V', 'BVB', 'CVVBVBV', '2023-10-30 09:32:50', '2023-10-30 09:32:50');

INSERT INTO `job_responsibilities` (`id`, `job_posting_id`, `job_responsibility`, `created_at`, `updated_at`) VALUES
(1, 6, 'Accomplishes staff results by communicating job expectations; planning, monitoring, and appraising job results. Coaches, counsels, and disciplines employees.', '2023-10-28 05:32:23', '2023-10-28 05:32:23'),
(2, 9, 'The relevant experience of a Production Engineer might include working in similar roles such as Engineering Maintenance Technician, Design and Development Engineer, or Engineering Operative.', '2023-10-28 05:40:53', '2023-10-28 05:40:53'),
(3, 11, 'working with clients\' ideas and managing their expectations.', '2023-10-28 05:46:33', '2023-10-28 05:46:33'),
(4, 12, 'Design engineering involves using creativity to come up with ideas that you can transform into actual products', '2023-10-28 05:52:03', '2023-10-28 05:52:03'),
(5, 13, 'Initiate and lead human resource programs and projects\nConduct research through various methods (data collection, surveys etc.) to identify a problematic situation or find the cause\n', '2023-10-28 06:10:10', '2023-10-28 06:10:10'),
(6, 19, 'Key Responsibilitites..', '2023-10-28 06:45:18', '2023-10-28 06:45:18'),
(7, 20, 'Key Job Responsibiltiies.\n\nManage a Team of 10 people. Ensure to deliver the projects on time.', '2023-10-28 07:03:32', '2023-10-28 07:03:32'),
(8, 21, 'Key Responsibilities', '2023-10-28 07:09:16', '2023-10-28 07:09:16'),
(9, 22, 'test', '2023-10-30 04:18:13', '2023-10-30 04:18:13'),
(10, 25, 'Manage and mentor prompt engineers, providing both technical guidance and career development.\nSet goals and reviews for your team, promoting growth and output.\nStay on top of latest advancements in prompt engineering and adjust team direction accordingly.', '2023-10-30 04:52:13', '2023-10-30 04:52:13'),
(11, 28, 'GVCVCBVGF', '2023-10-30 09:32:55', '2023-10-30 09:32:55');

-- -

INSERT INTO `location_units` (`id`, `unit_code`, `unit_name`, `address`, `about`, `created_at`, `updated_at`) VALUES
(3, 'VFJ', 'VFJ', 'VFJ', '', NULL, NULL),
(4, 'OFMK', 'OFMK', 'Yeddumailaram', 'Ordnance Factory Medak is one of the 5 Ordnance Factories under Armoured Vehicles Nigam Ltd., On 19th July, 1984 the then Prime Minister Late Smt. Indira Gandhi laid the foundation to establish the factory for indigenous production of Infantry Combat Vehicles(ICVs) at Yeddumailaram in Sangareddy District of Telangana State.', NULL, NULL),
(5, 'EFA', 'EFA', 'EFA', '', NULL, NULL),
(6, 'AVNLCO', 'AVNLCO', 'AVNLCO', 'Armoured Vehicles Nigam Limited (AVANI) (AVNL) is a new Defence PSU with its headquarters at Avadi (Chennai). It has five (05) constituent production units and has around 12,000 employees. AVNL produces battle tanks i.e. T-72, T90, MBT Arjun and Infantry Combat Vehicles, support vehicles (MPV, AERV etc.) and Defence mobility solutions (Stallion, LPTA etc.) for the armed forces and homeland security agencies. It is the current market leader in this segment. It is a new Government Company with Great Future. It offers great work environment and challenging opportunities for the professionals to prove their mettle.', '0000-00-00 00:00:00', NULL),
(7, 'HVF', 'HVF', 'Heavy Vehicles Factory, Avadi, Chennai', 'Heavy Vehicles Factory, Avadi, Chennai, produces Armed Vehicles spare parts in large quantities. The produced parts are sold to different Depots of the country', '2023-10-30 04:40:55', '2023-10-30 04:40:55'),
(8, 'MTPF', 'MTPF', 'Ambernath', 'MTPF Ambarnath, a unit of AVNL,  registered a Design Patent for the Groove Forming Machine.', '2023-10-30 04:44:02', '2023-10-30 04:44:02');





INSERT INTO `personal_details` (`id`, `candidate_id`, `reservation_category_id`, `fatherName`, `gender`, `dob`, `category`, `aadhaarNo`, `pan`, `address_line_1`, `address_line_2`, `city`, `region_state_id`, `pin_code`, `photo_path`, `sign_path`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 7, 1, 'Durairajan', 'male', '1966-06-18', NULL, '204223287005', 'ABYPD6208L', 'Plot No.11, S.E. V Nagar,', 'Narayanapuram', 'Madurai', 24, '625014', 'documents/7/profile/Dharmarajan.jpg', NULL, '2023-10-28 04:55:59', '2023-10-28 04:55:59', NULL),
(7, 8, 5, 'Durairajan', 'male', '1966-06-18', NULL, '232824217001', '1234567892', 'Plot No.11, S.E.V Nagar,', 'Narayanapuram,', 'Madurai', 1, '515001', 'documents/8/profile/Dharmarajan.jpg', NULL, '2023-10-28 09:55:33', '2023-10-28 09:55:33', NULL),
(8, 9, 8, 'Durairajan', 'male', '1970-06-18', NULL, '232824217002', '1234567892', 'Plot No.11, S.E.V Nagar,', 'Narayanapuram,', 'Madurai', 1, '515001', 'documents/9/profile/Dharmarajan.jpg', NULL, '2023-10-28 10:00:57', '2023-10-28 10:00:57', NULL),
(9, 10, 10, 'DurairajanB', 'male', '1974-06-18', NULL, '232824217003', '1234567893', 'Plot No.11, S.E.V Nagar,', 'Narayanapuram,', 'Madurai', 1, '515001', 'documents/10/profile/Dharmarajan.jpg', NULL, '2023-10-28 10:03:32', '2023-10-28 10:03:32', NULL),
(10, 11, 6, 'DurairajanC', 'male', '1975-06-18', NULL, '232824217004', '1234567894', 'Plot No.11, S.E.V Nagar,', 'Narayanapuram,', 'Madurai', 1, '515001', 'documents/11/profile/Dharmarajan.jpg', NULL, '2023-10-28 10:05:29', '2023-10-28 10:05:29', NULL),
(11, 12, 9, 'DurairajanD', 'male', '1976-06-18', NULL, '232824217005', '1234567895', 'Plot No.11, S.E.V Nagar,', 'Narayanapuram,', 'Madurai', 1, '515001', 'documents/12/profile/Dharmarajan.jpg', NULL, '2023-10-28 10:07:42', '2023-10-28 10:07:42', NULL),
(12, 13, 4, 'KaniMozhiA', 'female', '1991-01-10', NULL, '232824217006', '1234567896', 'Plot No.11, S.E.V Nagar,', 'Narayanapuram,', 'Madurai', 1, '515001', 'documents/13/profile/1587137241383.jpg', NULL, '2023-10-28 10:14:18', '2023-10-28 10:14:18', NULL),
(13, 14, 2, 'KanimozhiB', 'female', '1992-05-10', NULL, '232824217007', '1234567897', 'Plot No.11, S.E.V Nagar,', 'Narayanapuram,', 'Madurai', 1, '515001', 'documents/14/profile/1587137241383.jpg', NULL, '2023-10-28 10:16:51', '2023-10-28 10:16:51', NULL),
(14, 15, 5, 'Ranjanis Father', 'female', '1995-01-10', NULL, '232824217010', '1234567891', 'No. 7/4 , Type 4 Quarters,', 'AVNL Estate', 'Avad', 3, '781003', 'documents/15/profile/Ranjani.jpg', NULL, '2023-10-30 05:26:46', '2023-10-30 05:26:46', NULL),
(15, 16, 8, 'RanjaniA s Father', 'female', '1996-01-10', NULL, '232824217012', '1234567899', 'Type 4,  7/4 Quarters', 'HVF Estate', 'Avadi', 3, '781017', 'documents/16/profile/Ranjani.jpg', NULL, '2023-10-30 05:30:34', '2023-10-30 05:30:34', NULL),
(16, 17, 2, 'RanjaniB s Father', 'female', '1997-12-05', NULL, '232824217016', '1234567893', 'Type 4 quarters, 7/4 ,', 'HVF Estate', 'Avadi', 2, '792110', 'documents/17/profile/Ranjani.jpg', NULL, '2023-10-30 05:36:00', '2023-10-30 05:36:00', NULL),
(17, 18, 10, 'RanjaniD s father', 'female', '1998-02-01', NULL, '232824217025', '1234567894', 'Type IV Quarters,', '7/4, HVF Estate', 'Avadi', 4, '824232', 'documents/18/profile/Ranjani.jpg', NULL, '2023-10-30 05:40:48', '2023-10-30 05:40:48', NULL),
(18, 19, 4, 'Durairajan', 'female', '1994-02-28', NULL, '594572289070', 'ABYPD6788L', '3,P.R.K sharma street, Manali Market,Manali, Chennai', 'Narayanapuram', 'goa', 6, '600068', 'documents/19/profile/photo.png', NULL, '2023-10-30 09:40:26', '2023-10-30 09:40:26', NULL),
(19, 20, 1, 'Brenden Potts', 'male', '1987-03-26', NULL, '594572289056', 'ABYPD6208L', '21 Hague Extension', 'Praesentium eos plac', 'Sit et id pariatur', 7, '789456', 'documents/20/profile/photo.png', NULL, '2023-10-30 09:48:39', '2023-10-30 09:48:39', NULL),
(20, 21, 2, 'Callum Craft', 'female', '1996-01-23', NULL, '594572289025', 'fdgdg12345', '256 South Fabien Street', 'Laborum At non reru', 'Id est anim providen', 8, '789456', 'documents/21/profile/photo.png', NULL, '2023-10-30 09:53:02', '2023-10-30 09:53:02', NULL);


INSERT INTO `post_graduation_education_details` (`id`, `application_reference_number_id`, `candidate_id`, `course_name`, `college_name`, `university_name`, `year_of_passing`, `score`, `marksheet_path`, `file_name`, `file_type`, `file_size`, `isValid`, `valid_remarks`, `invalid_remarks`, `created_at`, `updated_at`) VALUES
(1, 9, 13, 'M.C.A', 'Madurai Kamaraj University', 'Madurai Kamaraj University', '2004', 85, 'documents/13/postgraduation/Additional Certificate.jpg', 'Additional Certificate.jpg', 'jpg', 6652, 1, NULL, NULL, '2023-10-30 06:32:28', '2023-10-30 10:56:02'),
(2, 9, 13, 'M.COM', 'Saraswathi Narayanan College,', 'Madurai Kamaraj University', '2006', 60, 'documents/13/postgraduation/certificate.jpg', 'certificate.jpg', 'jpg', 765164, 1, NULL, NULL, '2023-10-30 06:36:57', '2023-10-30 10:56:09'),
(3, 12, 19, 'Hermione Alvarado', 'Britanni Barnes', 'Phelan Sutton', '2014', 52, 'documents/19/postgraduation/certificate.jpg', 'certificate.jpg', 'jpg', 765164, NULL, NULL, NULL, '2023-10-30 09:43:22', '2023-10-30 09:43:22');

-- -

INSERT INTO `region_states` (`id`, `state_name`, `state_code`, `created_at`, `updated_at`) VALUES
(1, 'Andhra Pradesh', 'AP', NULL, NULL),
(2, 'Arunachal Pradesh', 'AR', NULL, NULL),
(3, 'Assam', 'AS', NULL, NULL),
(4, 'Bihar', 'BR', NULL, NULL),
(5, 'Chhattisgarh', 'CG', NULL, NULL),
(6, 'Goa', 'GA', NULL, NULL),
(7, 'Gujarat', 'GJ', NULL, NULL),
(8, 'Haryana', 'HR', NULL, NULL),
(9, 'Himachal Pradesh', 'HP', NULL, NULL),
(10, 'Jammu and Kashmir', 'JK', NULL, NULL),
(11, 'Jharkhand', 'JH', NULL, NULL),
(12, 'Karnataka', 'KA', NULL, NULL),
(13, 'Kerala', 'KL', NULL, NULL),
(14, 'Madhya Pradesh', 'MP', NULL, NULL),
(15, 'Maharashtra', 'MH', NULL, NULL),
(16, 'Manipur', 'MN', NULL, NULL),
(17, 'Meghalaya', 'ML', NULL, NULL),
(18, 'Mizoram', 'MZ', NULL, NULL),
(19, 'Nagaland', 'NL', NULL, NULL),
(20, 'Orissa', 'OR', NULL, NULL),
(21, 'Punjab', 'PB', NULL, NULL),
(22, 'Rajasthan', 'RJ', NULL, NULL),
(23, 'Sikkim', 'SK', NULL, NULL),
(24, 'Tamil Nadu', 'TN', NULL, NULL),
(25, 'Tripura', 'TR', NULL, NULL),
(26, 'Uttarakhand', 'UK', NULL, NULL),
(27, 'Uttar Pradesh', 'UP', NULL, NULL),
(28, 'West Bengal', 'WB', NULL, NULL),
(29, 'Tamil Nadu', 'TN', NULL, NULL),
(30, 'Tripura', 'TR', NULL, NULL),
(31, 'Andaman and Nicobar Islands', 'AN', NULL, NULL),
(32, 'Chandigarh', 'CH', NULL, NULL),
(33, 'Dadra and Nagar Haveli', 'DH', NULL, NULL),
(34, 'Daman and Diu', 'DD', NULL, NULL),
(35, 'Delhi', 'DL', NULL, NULL),
(36, 'Lakshadweep', 'LD', NULL, NULL),
(37, 'Pondicherry', 'PY', NULL, NULL);


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



INSERT INTO `reservation_vacancy_relaxations` (`id`, `job_posting_id`, `reservation_category_id`, `vacancy`, `created_at`, `updated_at`) VALUES
(1, 11, 2, 2, '2023-10-28 05:44:51', '2023-10-28 05:44:51'),
(2, 20, 2, 10, '2023-10-28 06:59:11', '2023-10-28 06:59:11'),
(3, 20, 3, 2, '2023-10-28 06:59:23', '2023-10-28 06:59:23'),
(4, 21, 7, 12, '2023-10-28 07:07:10', '2023-10-28 07:07:10'),
(5, 21, 6, 4, '2023-10-28 07:07:27', '2023-10-28 07:07:27'),
(6, 22, 2, 1, '2023-10-30 04:16:22', '2023-10-30 04:16:22'),
(7, 22, 1, 1, '2023-10-30 04:16:27', '2023-10-30 04:16:27'),
(8, 23, 2, 18, '2023-10-30 04:28:40', '2023-10-30 04:28:40'),
(9, 23, 3, 2, '2023-10-30 04:28:48', '2023-10-30 04:28:48'),
(10, 23, 4, 30, '2023-10-30 04:28:56', '2023-10-30 04:28:56'),
(11, 23, 7, 5, '2023-10-30 04:29:04', '2023-10-30 04:29:04'),
(12, 23, 9, 2, '2023-10-30 04:29:10', '2023-10-30 04:29:10'),
(13, 28, 2, 1, '2023-10-30 09:29:46', '2023-10-30 09:29:46'),
(14, 28, 5, 2, '2023-10-30 09:29:53', '2023-10-30 09:29:53'),
(15, 28, 7, 2, '2023-10-30 09:30:10', '2023-10-30 09:30:10');



INSERT INTO `secondary_education_details` (`id`, `candidate_id`, `application_reference_number_id`, `school_name`, `school_board`, `year_of_passing`, `score`, `marksheet_path`, `file_name`, `file_type`, `file_size`, `isValid`, `valid_remarks`, `invalid_remarks`, `created_at`, `updated_at`) VALUES
(3, 13, 9, 'DK School', 'SSC Board', '1996', 78, 'documents/13/secondary/10th Marksheet.jpg', '10th Marksheet.jpg', 'jpg', 10607, 1, NULL, NULL, '2023-10-30 06:26:54', '2023-10-30 10:55:36'),
(4, 18, 10, 'DK School', 'SSC Board', '1995', 56, 'documents/18/secondary/10th Marksheet.jpg', '10th Marksheet.jpg', 'jpg', 10607, NULL, NULL, NULL, '2023-10-30 07:06:41', '2023-10-30 07:06:41'),
(5, 18, 11, 'DK School', 'SSC Board', '1996', 90, 'documents/18/secondary/10th Marksheet.jpg', '10th Marksheet.jpg', 'jpg', 10607, NULL, NULL, NULL, '2023-10-30 07:17:40', '2023-10-30 07:17:40'),
(6, 18, 11, 'DK School', 'SSC Board', '1996', 90, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-30 07:25:09', '2023-10-30 07:25:09'),
(7, 19, 12, 'Finn Berg', 'Juliet Kirkland', '2007', 45, 'documents/19/secondary/certificate.jpg', 'certificate.jpg', 'jpg', 765164, NULL, NULL, NULL, '2023-10-30 09:42:13', '2023-10-30 09:42:13'),
(8, 20, 13, 'Rooney Fernandez', 'Perry Jimenez', '1999', 78, 'documents/20/secondary/10th Marksheet.jpg', '10th Marksheet.jpg', 'jpg', 10607, NULL, NULL, NULL, '2023-10-30 09:49:11', '2023-10-30 09:49:11'),
(9, 21, 14, 'Thor Jennings', 'Dylan Vance', '2002', 78, 'documents/21/secondary/10th Marksheet.jpg', '10th Marksheet.jpg', 'jpg', 10607, 1, NULL, NULL, '2023-10-30 09:53:30', '2023-10-30 10:44:43'),
(10, 7, 15, 'DK Govt School', 'Seconday school board', '1981', 68, 'documents/7/secondary/10th Marksheet.jpg', '10th Marksheet.jpg', 'jpg', 10607, NULL, NULL, NULL, '2023-10-30 10:03:55', '2023-10-30 10:03:55'),
(11, 7, 16, 'DK Govt School', 'SSC', '1981', 70, 'documents/7/secondary/10th Marksheet.jpg', '10th Marksheet.jpg', 'jpg', 10607, NULL, NULL, NULL, '2023-10-30 10:31:39', '2023-10-30 10:31:39');



INSERT INTO `terms_conditions` (`id`, `job_posting_id`, `job_terms`, `created_at`, `updated_at`) VALUES
(1, 9, '5+ years experience in production/industrial engineering; managerial experience a plus\nProficiency using Microsoft Suite (Excel, Access)\nKnowledge in mathematics, physics and mechanics', '2023-10-28 05:41:22', '2023-10-28 05:41:22'),
(2, 11, 'designers generally work in studios, where they have access to equipment such as drafting tables, computers, and software', '2023-10-28 05:47:03', '2023-10-28 05:47:03'),
(3, 12, 'Design engineering involves using creativity to come up with ideas that you can transform into actual products', '2023-10-28 05:52:07', '2023-10-28 05:52:07'),
(4, 13, 'We are seeking a qualified HR Consultant to lead and oversee various human resource projects, providing valuable advice on human capital management. \n', '2023-10-28 06:12:59', '2023-10-28 06:12:59'),
(5, 19, 'Terms and Conditions', '2023-10-28 06:45:30', '2023-10-28 06:45:30'),
(6, 20, 'Terms and Conditions.  is nothing.', '2023-10-28 07:03:51', '2023-10-28 07:03:51'),
(7, 21, 'Terms and Conditions', '2023-10-28 07:10:52', '2023-10-28 07:10:52'),
(8, 22, 'test', '2023-10-30 04:18:18', '2023-10-30 04:18:18'),
(9, 25, 'Manage and mentor prompt engineers, providing both technical guidance and career development.\nSet goals and reviews for your team, promoting growth and output.\nStay on top of latest advancements in prompt engineering and adjust team direction accordingly.', '2023-10-30 04:52:41', '2023-10-30 04:52:41'),
(10, 28, 'BFGFGF', '2023-10-30 09:32:59', '2023-10-30 09:32:59');



INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
    (1, 'siyam', 'avnlit@avnl.co.in', NULL, '$2y$10$A6sOAU7lOLB6Y2hWaklreO4Mo0rySN/wImRTtOqglR7hJLl3KXWvS', NULL, '2023-10-12 07:02:33', '2023-10-12 07:02:33');
(2, 'then', 'thenmozhi.p@avnl.co.in', NULL, '$2y$10$h3KZJ9Vjq6fgLsZ4Av.I9ulmGmuKKY.YfBLaoamxfIEIIxMReybp2', NULL, '2023-10-26 06:24:31', '2023-10-26 06:24:31'),
(3, 'Dharmarajan', 'thenu@avnl.co.in', NULL, '$2y$10$wWYRPMLHsAwXtteC06aPlevBE4uOwj4iOC9fGsxMW4a4VuJK8hdXq', NULL, '2023-10-27 11:21:17', '2023-10-27 11:21:17'),
(4, 'ranjani', 'ranjanimanickam@gmail.com', NULL, '$2y$10$HG48BXfe2qWKg6EeoDb6AO9UyWDjHIqd85q/NcMzTgKAX7pe7yaRy', NULL, '2023-10-30 09:26:56', '2023-10-30 09:26:56');





