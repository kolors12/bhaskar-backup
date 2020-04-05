-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2020 at 03:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scholl_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission_users`
--

CREATE TABLE `admission_users` (
  `adm_id` int(11) NOT NULL,
  `student_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `student_name_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date_of_birth` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date_of_birth_ar` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `age` varchar(255) CHARACTER SET utf8 NOT NULL,
  `age_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `level_of_grade` varchar(255) CHARACTER SET utf8 NOT NULL,
  `level_of_grade_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `place_of_birth` varchar(255) CHARACTER SET utf8 NOT NULL,
  `place_of_birth_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `gender` varchar(255) CHARACTER SET utf8 NOT NULL,
  `gender_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status_of_student` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status_of_student_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `father_iqama_no` varchar(255) CHARACTER SET utf8 NOT NULL,
  `father_iqama_no_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `mother_iqama_no` varchar(255) CHARACTER SET utf8 NOT NULL,
  `mother_iqama_no_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `student_iqama_no` varchar(255) CHARACTER SET utf8 NOT NULL,
  `student_iqama_no_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `father_occupation` varchar(255) CHARACTER SET utf8 NOT NULL,
  `father_occupation_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `religion` varchar(255) CHARACTER SET utf8 NOT NULL,
  `religion_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `nationality` varchar(255) CHARACTER SET utf8 NOT NULL,
  `nationality_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `residence_no` varchar(255) CHARACTER SET utf8 NOT NULL,
  `residence_no_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `father_work` varchar(255) CHARACTER SET utf8 NOT NULL,
  `father_work_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `emergency_no` varchar(255) CHARACTER SET utf8 NOT NULL,
  `emergency_no_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `last_school_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `last_school_name_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `mode_of_transportation` varchar(255) CHARACTER SET utf8 NOT NULL,
  `mode_of_transportation_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `birth_certificate` varchar(255) CHARACTER SET utf8 NOT NULL,
  `vaccination_certificate` varchar(255) CHARACTER SET utf8 NOT NULL,
  `iqama_certificate` varchar(255) CHARACTER SET utf8 NOT NULL,
  `passport_file` varchar(255) CHARACTER SET utf8 NOT NULL,
  `original_certificates` varchar(255) CHARACTER SET utf8 NOT NULL,
  `photos_childs` varchar(255) CHARACTER SET utf8 NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `date_and_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission_users`
--

INSERT INTO `admission_users` (`adm_id`, `student_name`, `student_name_ar`, `date_of_birth`, `date_of_birth_ar`, `age`, `age_ar`, `level_of_grade`, `level_of_grade_ar`, `place_of_birth`, `place_of_birth_ar`, `gender`, `gender_ar`, `status_of_student`, `status_of_student_ar`, `father_iqama_no`, `father_iqama_no_ar`, `mother_iqama_no`, `mother_iqama_no_ar`, `student_iqama_no`, `student_iqama_no_ar`, `father_occupation`, `father_occupation_ar`, `religion`, `religion_ar`, `nationality`, `nationality_ar`, `residence_no`, `residence_no_ar`, `father_work`, `father_work_ar`, `emergency_no`, `emergency_no_ar`, `last_school_name`, `last_school_name_ar`, `mode_of_transportation`, `mode_of_transportation_ar`, `birth_certificate`, `vaccination_certificate`, `iqama_certificate`, `passport_file`, `original_certificates`, `photos_childs`, `username`, `password`, `status`, `date_and_time`) VALUES
(29, 'bhaskara rao S', 'bhaskara rao S', '04/08/2020', '04/08/2020', '26', '26', '17', '17', 'srikaliam', 'srikaliam', 'Boy', 'صبي', 'Old Student', 'طالب قديم', 'ventaka ramana', 'Ventaka ramana', 'Venkata Ramana', 'فينكاتا رامانا', 'Ventaka', 'Ventaka', 'hdfghdfg', 'hdfghdfg', 'Venkata', 'فينكاتا', 'gdfgdf', 'gdfgdf', '123554', '123554', 'hfdghdfg', 'hfdghdfg', '8500630362', '8500630362', '123456', '123456', 'Agree', 'يوافق على', 'assets/birthcertificate/logo.jpg', 'assets/vaccinationcertificate/logo.jpg', 'assets/iqamacertificate/logo.jpg', 'assets/passportfile/logo.jpg', 'assets/originalcertificates/logo.jpg', 'assets/photoschilds/logo.jpg', 'bhaskarsuggu41@gmail.com', '12345', 1, '2020-04-04 07:09:35'),
(30, 'Ravi', 'رافي', '04/15/2020', '04/15/2020', '26', '26', '18', '18', 'srikaliam', 'srikaliam', 'Boy', 'صبي', 'Old Student', 'طالب قديم', 'ventaka ramana', 'Ventaka ramana', 'dfhghfg', 'dfhghfg', 'Ventaka', 'Ventaka', 'hdfghdfg', 'hdfghdfg', 'Venkata', 'فينكاتا', 'hfgdhdfg', 'hfgdhdfg', '123554', '123554', 'hfdghdfg', 'hfdghdfg', '8500630362', '8500630362', 'hfgdhfdg', 'hfgdhfdg', 'Agree', 'يوافق على', 'assets/birthcertificate/logo.jpg', 'assets/vaccinationcertificate/logo.jpg', 'assets/iqamacertificate/logo.jpg', 'assets/passportfile/logo.jpg', 'assets/originalcertificates/logo.jpg', 'assets/photoschilds/logo.jpg', 'student@gmail.com', '12345', 1, '2020-04-04 07:09:23'),
(31, 'Mahesh', 'ماهيش', '04/23/2020', '04/23/2020', '26', '26', '19', '19', 'srikaliam', 'srikaliam', 'Boy', 'صبي', 'Old Student', 'طالب قديم', 'ventaka ramana', 'Ventaka ramana', 'dfhghfg', 'dfhghfg', 'Ventaka', 'Ventaka', 'hdfghdfg', 'hdfghdfg', 'Venkata', 'فينكاتا', 'gdfgdf', 'gdfgdf', '123554', '123554', 'hfdghdfg', 'hfdghdfg', '8500630362', '8500630362', 'hfgdhfdg', 'hfgdhfdg', 'Disagree', 'تعارض', 'assets/birthcertificate/logo.jpg', 'assets/vaccinationcertificate/logo.jpg', 'assets/iqamacertificate/logo.jpg', 'assets/passportfile/logo.jpg', 'assets/originalcertificates/logo.jpg', 'assets/photoschilds/logo.jpg', 'Student3@gmail.com', '12345', 1, '2020-04-04 07:11:46'),
(32, 'umakanth', 'Umakanth', '04/15/2020', '04/15/2020', '26', '26', '17', '17', 'srikaliam', 'srikaliam', 'Boy', 'صبي', 'Old Student', 'طالب قديم', 'ventaka ramana', 'Ventaka ramana', 'dfhghfg', 'dfhghfg', 'Ventaka', 'Ventaka', 'hdfghdfg', 'hdfghdfg', 'Venkata', 'فينكاتا', 'hfgdhdfg', 'hfgdhdfg', '123554', '123554', 'hfdghdfg', 'hfdghdfg', '8500630362', '8500630362', 'hfgdhfdg', 'hfgdhfdg', 'Agree', 'يوافق على', 'assets/birthcertificate/bg.png', 'assets/vaccinationcertificate/bg.png', 'assets/iqamacertificate/bg.png', 'assets/passportfile/bg.png', 'assets/originalcertificates/bg.png', 'assets/photoschilds/bg.png', 'student2@gmail.com', '12345', 1, '2020-04-05 11:04:58');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attend_id` int(11) NOT NULL,
  `semister` varchar(255) NOT NULL,
  `semister_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `present_day` varchar(255) NOT NULL,
  `class_id` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `subject_id` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `dateandtime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(255) NOT NULL,
  `class_name_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `class_grade` varchar(255) CHARACTER SET utf8 NOT NULL,
  `class_grade_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `subjects_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `subjects_name_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `dateandtime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_id`, `class_name`, `class_name_ar`, `class_grade`, `class_grade_ar`, `subjects_name`, `subjects_name_ar`, `status`, `dateandtime`) VALUES
(17, '1st class', '1st صنف', 'A Grade', 'والصف', 'Matchs,Hindi,Science,Social', '', 1, '2020-01-24 12:14:35'),
(18, '1st class', '1st صنف', 'B Grade', 'العلامه ب', 'Matchs,Hindi,Science,Social', '', 1, '2019-12-27 03:06:24'),
(19, '2nd class', 'الدرجة الثانية', 'B Grade', 'العلامه ب', 'Matchs,Hindi,Science,Social,Telugu', '', 1, '2019-12-31 13:09:36'),
(22, '2nd class', 'الدرجة الثانية', 'C Grade', 'درجة C', 'Matchs,Social,English', '', 1, '2020-01-23 12:32:59');

-- --------------------------------------------------------

--
-- Table structure for table `classes_assign`
--

CREATE TABLE `classes_assign` (
  `cls_id` int(11) NOT NULL,
  `class_id` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `subject_id` int(12) NOT NULL,
  `resource` varchar(255) NOT NULL,
  `from_date` varchar(255) NOT NULL,
  `from_date_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `to_date` varchar(255) NOT NULL,
  `to_date_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` text NOT NULL,
  `description_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `tech_id` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `dateandtime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes_assign`
--

INSERT INTO `classes_assign` (`cls_id`, `class_id`, `student_id`, `subject_id`, `resource`, `from_date`, `from_date_ar`, `to_date`, `to_date_ar`, `description`, `description_ar`, `tech_id`, `status`, `dateandtime`) VALUES
(38, '17', '29', 9, '33', '2020-04-07', '2020-04-07', '2020-04-09', '2020-04-09', 'hi', 'مرحبا', '', 1, '2020-04-05 10:53:12'),
(39, '17', '32', 9, '33', '2020-04-07', '2020-04-07', '2020-04-09', '2020-04-09', 'hi', 'مرحبا', '', 1, '2020-04-05 10:53:12'),
(40, '17', '29', 9, '33', '2020-04-11', '2020-04-11', '2020-04-23', '2020-04-23', ' r rf ', 'ص التردد', '37', 1, '2020-04-05 10:58:11'),
(41, '18', '29', 7, '37', '2020-04-16', '2020-04-16', '2020-04-14', '2020-04-14', 'vjvvvjjh', 'vjvvvjjh', '38', 1, '2020-04-05 11:02:50');

-- --------------------------------------------------------

--
-- Table structure for table `class_schedual`
--

CREATE TABLE `class_schedual` (
  `cls_sch_id` int(11) NOT NULL,
  `schedual_day` varchar(255) CHARACTER SET utf8 NOT NULL,
  `schedual_day_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `lesson_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `lesson_name_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `class` varchar(255) CHARACTER SET utf8 NOT NULL,
  `class_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `subjects` varchar(255) CHARACTER SET utf8 NOT NULL,
  `subjects_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `to_time` varchar(255) CHARACTER SET utf8 NOT NULL,
  `to_time_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `from_time` varchar(255) CHARACTER SET utf8 NOT NULL,
  `from_time_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `caretedandtime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_schedual`
--

INSERT INTO `class_schedual` (`cls_sch_id`, `schedual_day`, `schedual_day_ar`, `lesson_name`, `lesson_name_ar`, `class`, `class_ar`, `subjects`, `subjects_ar`, `to_time`, `to_time_ar`, `from_time`, `from_time_ar`, `status`, `caretedandtime`) VALUES
(6, 'Monday', 'الإثنين', 'Prisme', 'بريزم', '19', '19', 'Matchs', 'المباريات', '12:22', '12:22', '15:33', '15:33', 1, '2020-04-04 07:26:06');

-- --------------------------------------------------------

--
-- Table structure for table `fee_transaction`
--

CREATE TABLE `fee_transaction` (
  `fee_transaction_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `total_fee` varchar(255) DEFAULT NULL,
  `credited_amount` varchar(255) DEFAULT NULL,
  `debited_amount` varchar(255) DEFAULT NULL,
  `pending_amount` varchar(255) DEFAULT NULL,
  `transaction_mode` varchar(255) DEFAULT NULL COMMENT '1-cash,2-cheque,3-wallet,4-upi',
  `payment_mode` varchar(255) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `remarks_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE `login_table` (
  `user_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `role` varchar(250) NOT NULL,
  `status` int(10) NOT NULL,
  `dateandtime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`user_id`, `emp_id`, `username`, `password`, `role`, `status`, `dateandtime`) VALUES
(8, 1, 'Admin@gmail.com', '12345', 'Admin', 0, '2020-04-04 05:57:09'),
(10, 29, 'bhaskarsuggu41@gmail.com', '12345', 'Student', 0, '2020-04-04 07:05:16'),
(11, 30, 'student@gmail.com', '12345', 'Student', 0, '2020-04-04 07:09:23'),
(12, 31, 'Student3@gmail.com', '12345', 'Student', 0, '2020-04-04 07:11:46'),
(13, 37, 'teacher1@gmail.com', '12345', 'Teacher', 0, '2020-04-05 11:09:06'),
(14, 38, 'teacher2@gmail.com', '12345', 'Teacher', 0, '2020-04-05 11:09:16'),
(15, 32, 'student2@gmail.com', '12345', 'Student', 0, '2020-04-05 07:45:39');

-- --------------------------------------------------------

--
-- Table structure for table `resource`
--

CREATE TABLE `resource` (
  `re_id` int(11) NOT NULL,
  `class_id` varchar(120) NOT NULL,
  `subject_id` varchar(120) NOT NULL,
  `topic_name` varchar(255) NOT NULL,
  `topic_name_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `url_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `description_ar` text CHARACTER SET utf8 NOT NULL,
  `document` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `dateandtime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resource`
--

INSERT INTO `resource` (`re_id`, `class_id`, `subject_id`, `topic_name`, `topic_name_ar`, `url_name`, `description`, `description_ar`, `document`, `status`, `dateandtime`) VALUES
(33, '17', '9', 'Prisme1', '', 'w3schools.com', 'Enter The Descriotn', '', 'assets/resource/logo.jpg', 1, '2020-04-05 06:35:38'),
(34, '18', '7', 'hhh', '', 'hh', 'hh', '', 'assets/resource/logo1.jpg', 1, '2020-04-05 06:34:31'),
(35, '17', '9', 'Prisme2', '', 'w3schools.com', 'Enter The Descriotn', '', 'assets/resource/logo.jpg', 1, '2020-04-05 06:35:46'),
(37, '18', '7', 'hhh2', '', 'hh', 'hh', '', 'assets/resource/logo1.jpg', 1, '2020-04-05 06:34:31'),
(38, '18', '9', 'dfsf', '', 'fsd', 'fsdfsdf', '', 'assets/resource/logo2.jpg', 1, '2020-04-05 07:12:11');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `role_name_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`, `role_name_ar`, `status`, `datetime`) VALUES
(4, 'Non-Teaching', 'غير التدريس', 1, '2019-12-18 02:15:18'),
(5, 'Teacher', 'مدرس', 1, '2019-12-17 03:11:59'),
(6, 'Principal', 'المالك', 1, '2019-12-18 02:14:33'),
(7, 'Accountant', 'محاسب', 1, '2019-12-18 02:15:34'),
(8, 'Administration', 'الادارة', 1, '2020-01-24 12:16:22');

-- --------------------------------------------------------

--
-- Table structure for table `school_schedual`
--

CREATE TABLE `school_schedual` (
  `sch_id` int(11) NOT NULL,
  `schedual_day` varchar(255) CHARACTER SET utf8 NOT NULL,
  `schedual_day_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `class` varchar(255) CHARACTER SET utf8 NOT NULL,
  `class_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `subjects` varchar(255) CHARACTER SET utf8 NOT NULL,
  `subjects_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `to_time` varchar(255) CHARACTER SET utf8 NOT NULL,
  `to_time_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `from_time` varchar(255) CHARACTER SET utf8 NOT NULL,
  `from_time_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `dateandtime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_schedual`
--

INSERT INTO `school_schedual` (`sch_id`, `schedual_day`, `schedual_day_ar`, `class`, `class_ar`, `subjects`, `subjects_ar`, `to_time`, `to_time_ar`, `from_time`, `from_time_ar`, `status`, `dateandtime`, `date_modified`) VALUES
(9, 'Tuesday', 'الثلاثاء', '22', '22', 'Hindi', 'الهندية', '01:00', '01:00', '13:01', '13:01', 1, '2020-01-06 13:27:36', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `f_name_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `l_name_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `emp_code` varchar(255) NOT NULL,
  `emp_code_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `work_no` varchar(255) NOT NULL,
  `work_no_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `personal_no` varchar(255) NOT NULL,
  `personal_no_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `work_email` varchar(255) NOT NULL,
  `work_email_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `personal_email` varchar(255) NOT NULL,
  `personal_email_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `gender` varchar(255) NOT NULL,
  `gender_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `comm_addr` longtext NOT NULL,
  `comm_addr_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `per_addr` longtext NOT NULL,
  `per_addr_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `role_in_school` varchar(255) NOT NULL COMMENT '1=principal,2=teacher,3=non-teaching,4=accountant,5=administration,6=Admin,7=student',
  `role_in_school_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `classes_to_teach` varchar(255) DEFAULT NULL,
  `classes_to_teach_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `class_teacher_for` varchar(255) DEFAULT NULL,
  `class_teacher_for_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `subjects` varchar(255) DEFAULT NULL,
  `subjects_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `currently_working` varchar(255) NOT NULL,
  `currently_working_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `username` varchar(255) NOT NULL,
  `username_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) NOT NULL,
  `password_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `profile_img` longtext DEFAULT NULL,
  `profile_name` varchar(255) DEFAULT NULL,
  `profile_name_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `device_id` varchar(255) DEFAULT NULL,
  `device_id_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `device_type` varchar(255) DEFAULT NULL,
  `device_type_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `fcm_id` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_modified` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `f_name`, `f_name_ar`, `l_name`, `l_name_ar`, `emp_code`, `emp_code_ar`, `work_no`, `work_no_ar`, `personal_no`, `personal_no_ar`, `work_email`, `work_email_ar`, `personal_email`, `personal_email_ar`, `gender`, `gender_ar`, `comm_addr`, `comm_addr_ar`, `per_addr`, `per_addr_ar`, `role_in_school`, `role_in_school_ar`, `classes_to_teach`, `classes_to_teach_ar`, `class_teacher_for`, `class_teacher_for_ar`, `subjects`, `subjects_ar`, `currently_working`, `currently_working_ar`, `username`, `username_ar`, `password`, `password_ar`, `profile_img`, `profile_name`, `profile_name_ar`, `device_id`, `device_id_ar`, `device_type`, `device_type_ar`, `fcm_id`, `status`, `date_created`, `date_modified`) VALUES
(37, 'suggu', 'سوجو', 'bhaskara Rao', 'بهاسكارا راو', '591114', '591114', '41234213', '41234213', '8400630362', '8400630362', 'Bhaskarsugu41@gmail.com', 'Bhaskarsugu41@gmail.com', 'czxCz@gmail.com', 'czxCz@gmail.com', 'Boy', 'صبي', 'Srikalam', 'سريكالام', 'Srikalam', 'سريكالام', '', '', '2nd class,1st class', 'الدرجة الثانية ، الدرجة الأولى', 'fsadfsadf', 'fsadfsadf', 'Matchs', 'المباريات', 'fsdafsdafsd', 'fsdafsdafsd', 'teacher1@gmail.com', 'teacher1@gmail.com', '', '', 'assets/staffimage/suggu.jpg', 'czxCzxC', 'czxCzxC', 'mcvm', 'MCVM', 'gsdfgdsfg', 'gsdfgdsfg', NULL, 1, '2020-04-04 12:45:32', '2020-04-05 16:44:34'),
(38, 'Virat', 'فيرات', 'Rao', 'راو', '594442', '594442', '41234213', '41234213', '8400630362', '8400630362', 'asdfsdaf@gmail.com', 'asdfsdaf@gmail.com', 'czxCz@gmail.com', 'czxCz@gmail.com', 'Boy', 'صبي', 'hydrabd', 'حيدر اباد', 'Hydrabad', 'حيدر اباد', '', '', '2nd class,2nd class', 'الدرجة الثانية ، الدرجة الثانية', '2nd classs', 'الدرجة الثانية', 'Science', 'علم', 'fsdafsdafsd', 'fsdafsdafsd', 'teacher2@gmail.com', 'teacher2@gmail.com', '', '', 'assets/staffimage/download.jpg', 'czxCzxC', 'czxCzxC', 'mcvm', 'MCVM', 'mcvmc', 'MCVMC', NULL, 1, '2020-04-04 12:47:46', '2020-04-05 16:43:03');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `subject_name_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `dateandtime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `subject_name`, `subject_name_ar`, `status`, `dateandtime`) VALUES
(3, 'Telugu', 'التيلجو', 1, '2019-12-24 16:36:40'),
(4, 'English', 'الإنجليزية', 1, '2019-12-26 15:05:42'),
(5, 'Social', 'اجتماعي', 1, '2019-12-26 15:05:50'),
(6, 'Science', 'علم', 1, '2019-12-26 15:05:57'),
(7, 'Hindi', 'الهندية', 1, '2019-12-26 15:06:03'),
(9, 'Matchs', 'Matchs', 1, '2020-01-23 12:37:03');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_meeting`
--

CREATE TABLE `teacher_meeting` (
  `tech_id` int(11) NOT NULL,
  `teacher_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `teacher_name_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `meeting_date` varchar(255) CHARACTER SET utf8 NOT NULL,
  `meeting_date_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `date_and_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_meeting`
--

INSERT INTO `teacher_meeting` (`tech_id`, `teacher_name`, `teacher_name_ar`, `meeting_date`, `meeting_date_ar`, `description`, `description_ar`, `status`, `date_and_time`) VALUES
(1, '28', '28', '01/20/2020', '2020/01/20', 'hgf dh gfdh', 'hgf dh gfdh', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_schedual`
--

CREATE TABLE `teacher_schedual` (
  `tech_sch_id` int(11) NOT NULL,
  `teacher_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `teacher_name_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `schedual_day` varchar(255) CHARACTER SET utf8 NOT NULL,
  `schedual_day_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `class` varchar(255) CHARACTER SET utf8 NOT NULL,
  `class_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `subjects` varchar(255) CHARACTER SET utf8 NOT NULL,
  `subjects_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `to_time` varchar(255) CHARACTER SET utf8 NOT NULL,
  `to_time_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `from_time` varchar(255) CHARACTER SET utf8 NOT NULL,
  `from_time_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `dateandtime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_schedual`
--

INSERT INTO `teacher_schedual` (`tech_sch_id`, `teacher_name`, `teacher_name_ar`, `schedual_day`, `schedual_day_ar`, `class`, `class_ar`, `subjects`, `subjects_ar`, `to_time`, `to_time_ar`, `from_time`, `from_time_ar`, `status`, `dateandtime`) VALUES
(37, '37', '37', 'Monday', 'الإثنين', '1st class B Grade', 'الصف B الدرجة الأولى', 'Matchs', 'المباريات', '09:00', '09:00', '09:45', '09:45', 1, '2020-04-04 07:24:20'),
(38, '37', '37', 'Monday', 'الإثنين', '1st class A Grade', 'الدرجة الأولى A Grade', 'Hindi', 'هندي', '00:23', '00:23', '12:59', '12:59', 1, '2020-04-04 07:24:49'),
(39, '38', '38', 'Tuesday', 'الثلاثاء', '2nd class C Grade', 'الدرجة الثانية درجة C', 'Hindi', 'هندي', '03:04', '03:04', '12:05', '12:05', 1, '2020-04-05 11:01:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(120) NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `user_email` varchar(120) CHARACTER SET utf8 NOT NULL,
  `gender` varchar(255) NOT NULL,
  `mobile_number` varchar(120) NOT NULL,
  `user_password` varchar(120) NOT NULL,
  `date_of_birth` varchar(250) NOT NULL,
  `desgenation` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role_type` varchar(120) NOT NULL,
  `user_status` int(11) NOT NULL DEFAULT 1,
  `date_and_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `user_email`, `gender`, `mobile_number`, `user_password`, `date_of_birth`, `desgenation`, `country`, `state`, `city`, `address`, `role_type`, `user_status`, `date_and_time`) VALUES
(1, 'Suggu', 'Bhaskara', 'Admin@gmail.com', 'Male', '8500630362', '12345', '21-06-1992', 'Software Developer', 'India', 'Andhrapradesh', 'Vizag', 'My family Homes A block 402 opp Sai Apartments. New Prame Nager Erragadda', 'Super Admin', 0, '2020-03-31 15:54:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission_users`
--
ALTER TABLE `admission_users`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attend_id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `classes_assign`
--
ALTER TABLE `classes_assign`
  ADD PRIMARY KEY (`cls_id`);

--
-- Indexes for table `class_schedual`
--
ALTER TABLE `class_schedual`
  ADD PRIMARY KEY (`cls_sch_id`);

--
-- Indexes for table `fee_transaction`
--
ALTER TABLE `fee_transaction`
  ADD PRIMARY KEY (`fee_transaction_id`);

--
-- Indexes for table `login_table`
--
ALTER TABLE `login_table`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `resource`
--
ALTER TABLE `resource`
  ADD PRIMARY KEY (`re_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `school_schedual`
--
ALTER TABLE `school_schedual`
  ADD PRIMARY KEY (`sch_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `teacher_meeting`
--
ALTER TABLE `teacher_meeting`
  ADD PRIMARY KEY (`tech_id`);

--
-- Indexes for table `teacher_schedual`
--
ALTER TABLE `teacher_schedual`
  ADD PRIMARY KEY (`tech_sch_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission_users`
--
ALTER TABLE `admission_users`
  MODIFY `adm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attend_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `classes_assign`
--
ALTER TABLE `classes_assign`
  MODIFY `cls_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `class_schedual`
--
ALTER TABLE `class_schedual`
  MODIFY `cls_sch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fee_transaction`
--
ALTER TABLE `fee_transaction`
  MODIFY `fee_transaction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_table`
--
ALTER TABLE `login_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `resource`
--
ALTER TABLE `resource`
  MODIFY `re_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `school_schedual`
--
ALTER TABLE `school_schedual`
  MODIFY `sch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teacher_meeting`
--
ALTER TABLE `teacher_meeting`
  MODIFY `tech_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher_schedual`
--
ALTER TABLE `teacher_schedual`
  MODIFY `tech_sch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
