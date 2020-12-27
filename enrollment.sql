-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2020 at 02:00 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enrollment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', '01687921059', '2020-09-03 17:25:13', '2020-09-03 17:25:13');

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
(1, '2020_09_03_164347_create_admin_table_table', 1),
(2, '2020_09_07_082340_create_student_tbl_table', 2),
(3, '2020_09_09_200220_create_tbl_teachers_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

CREATE TABLE `student_tbl` (
  `student_id` int(10) UNSIGNED NOT NULL,
  `student_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_roll` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_father_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_mother_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_adderss` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_admission_year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`student_id`, `student_name`, `student_roll`, `student_father_name`, `student_mother_name`, `student_email`, `student_phone`, `student_adderss`, `student_image`, `student_password`, `student_department`, `student_admission_year`, `created_at`, `updated_at`) VALUES
(3, 'MD Fazle Rahman EVAN', '171-115-135', 'Anamur Rahman', 'Farzana Jahan', 'Evanl@gmail.com', '01687921059', 'Sylhet', 'public/student/1686774404535830.jpg', 'admin', '1', '2017-01-01', '2020-09-07 18:16:21', '2020-09-07 18:16:21'),
(4, 'MD Ahsan Habib Fahim', '171-115-134', 'MD Ashraf Miah', 'Ambia Begum', 'fahim@gmail.com', '01679542455', 'Sylhet', 'public/student/1686774185423973.jpg', 'admin', '1', '2016-12-29', '2020-09-07 18:18:05', '2020-09-07 18:18:05'),
(5, 'Naeem Ahmed', '171-115-127', 'Zahed Ahmed', 'Rubi Chy', 'naeem@gmail.com', '0156789123', 'sylhet', 'public/student/1686773948081169.jpg', 'admin', '1', '2020-09-08', '2020-09-07 18:20:41', '2020-09-07 18:20:41'),
(6, 'Saifur Rahman Rasel', '171-115-146', 'Rafiqul Islam', 'Selina Begum', 'rasel@gmail.com', '01782614627', 'Sylhet', 'public/student/1686773920835635.jpg', 'admin', '1', '2017-01-01', '2020-09-07 18:22:01', '2020-09-07 18:22:01'),
(7, 'Md. Nasim Ahmed', '171-115-122', 'Raihan Ahmed', 'Setara Begum', 'nasim@gmail.com', '019827672828', 'Zakigong', 'public/student/1686774533673578.jpg', 'admin', '5', '2018-01-22', '2020-12-22 10:39:10', '2020-12-22 10:39:10'),
(8, 'Souvik Halder', '171-115-121', 'Shishir Das', 'Setara Das', 'souvik@gmail.com', '01721332214', 'Dhaka', 'public/student/1686774715356941.jpg', 'admin', '4', '2020-01-01', '2020-12-22 10:42:03', '2020-12-22 10:42:03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teachers`
--

CREATE TABLE `tbl_teachers` (
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `teacher_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_adderss` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_teachers`
--

INSERT INTO `tbl_teachers` (`teacher_id`, `teacher_name`, `teacher_phone`, `teacher_adderss`, `teacher_department`, `teacher_image`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed', '0123456789', 'Sylhet', 'CSE', 'public/teacher/1677389067917585.jpg', NULL, NULL),
(2, 'Sorif Ahmed', '0123455678', 'Sylhet', 'BBA', 'public/teacher/1677389189297578.jpg', NULL, NULL),
(3, 'Sakib Ahmed', '012345678', 'Sylhet', 'CSE', 'public/teacher/1686775307609566.jpg', NULL, NULL),
(4, 'Sakil Ahmed', '012345678', 'Sylhet', 'ECE', 'public/teacher/1677389248520772.jpg', NULL, NULL),
(5, 'Bilal', '0123456789', 'Sylhet', 'EEE', 'public/teacher/1677389325162545.jpg', NULL, NULL),
(6, 'Shila', '012345679', 'Sylhet', 'MBA', 'public/teacher/1686775204580027.jpg', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_tbl`
--
ALTER TABLE `student_tbl`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `tbl_teachers`
--
ALTER TABLE `tbl_teachers`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `student_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_teachers`
--
ALTER TABLE `tbl_teachers`
  MODIFY `teacher_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
