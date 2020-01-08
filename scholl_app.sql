-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2020 at 03:12 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

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
  `status` int(11) NOT NULL DEFAULT '1',
  `date_and_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission_users`
--

INSERT INTO `admission_users` (`adm_id`, `student_name`, `student_name_ar`, `date_of_birth`, `date_of_birth_ar`, `age`, `age_ar`, `level_of_grade`, `level_of_grade_ar`, `place_of_birth`, `place_of_birth_ar`, `gender`, `gender_ar`, `status_of_student`, `status_of_student_ar`, `father_iqama_no`, `father_iqama_no_ar`, `mother_iqama_no`, `mother_iqama_no_ar`, `student_iqama_no`, `student_iqama_no_ar`, `father_occupation`, `father_occupation_ar`, `religion`, `religion_ar`, `nationality`, `nationality_ar`, `residence_no`, `residence_no_ar`, `father_work`, `father_work_ar`, `emergency_no`, `emergency_no_ar`, `last_school_name`, `last_school_name_ar`, `mode_of_transportation`, `mode_of_transportation_ar`, `birth_certificate`, `vaccination_certificate`, `iqama_certificate`, `passport_file`, `original_certificates`, `photos_childs`, `status`, `date_and_time`) VALUES
(11, 'SUGGU VENKATA RAMANA1', 'سوغو فينكاتا رامانا', '2019-12-06', '2019/12/06', '22', '22', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'srikakulam', 'سريكاكولام', 'Boy', 'صبي', 'Old Student', 'طالب قديم', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', '', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'India', 'الهند', '532409', '532409', '08500630362', '08500630362', '8500630362', '8500630362', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Agree', 'يوافق على', 'assets/birthcertificate/Desert.jpg', '', '', '', '', '', 1, '2019-12-14 11:55:22'),
(12, 'SUGGU VENKATA RAMANA2', 'سوغو فينكاتا رامانا', '2019-12-06', '2019/12/06', '22', '22', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'srikakulam', 'سريكاكولام', 'Boy', 'صبي', 'Old Student', 'طالب قديم', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', '', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'India', 'الهند', '532409', '532409', '08500630362', '08500630362', '8500630362', '8500630362', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Agree', 'يوافق على', 'assets/birthcertificate/Desert.jpg', '', '', '', '', '', 1, '2019-12-14 11:55:27'),
(13, 'SUGGU VENKATA RAMANA3', 'سوغو فينكاتا رامانا', '2019-12-06', '2019/12/06', '22', '22', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'srikakulam', 'سريكاكولام', 'Boy', 'صبي', 'Old Student', 'طالب قديم', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', '', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'India', 'الهند', '532409', '532409', '08500630362', '08500630362', '8500630362', '8500630362', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Agree', 'يوافق على', 'assets/birthcertificate/Desert.jpg', '', '', '', '', '', 1, '2019-12-14 11:55:32'),
(14, 'SUGGU VENKATA RAMANA4', 'سوغو فينكاتا رامانا', '2019-12-06', '2019/12/06', '22', '22', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'srikakulam', 'سريكاكولام', 'Boy', 'صبي', 'Old Student', 'طالب قديم', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', '', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'India', 'الهند', '532409', '532409', '08500630362', '08500630362', '8500630362', '8500630362', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Agree', 'يوافق على', 'assets/birthcertificate/Desert.jpg', '', '', '', '', '', 1, '2019-12-14 11:55:36'),
(15, 'SUGGU VENKATA RAMANA5', 'سوغو فينكاتا رامانا', '2019-12-06', '2019/12/06', '22', '22', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'srikakulam', 'سريكاكولام', 'Boy', 'صبي', 'Old Student', 'طالب قديم', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', '', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'India', 'الهند', '532409', '532409', '08500630362', '08500630362', '8500630362', '8500630362', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Agree', 'يوافق على', 'assets/birthcertificate/Desert.jpg', '', '', '', '', '', 0, '2019-12-14 13:03:45'),
(16, 'SUGGU VENKATA RAMANA6', 'سوغو فينكاتا رامانا', '2019-12-06', '2019/12/06', '22', '22', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'srikakulam', 'سريكاكولام', 'Boy', 'صبي', 'Old Student', 'طالب قديم', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', '', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'India', 'الهند', '532409', '532409', '08500630362', '08500630362', '8500630362', '8500630362', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Agree', 'يوافق على', 'assets/birthcertificate/Desert.jpg', '', '', '', '', '', 1, '2019-12-14 11:55:43'),
(17, 'SUGGU VENKATA RAMANA7', 'سوغو فينكاتا رامانا', '2019-12-06', '2019/12/06', '22', '22', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'srikakulam', 'سريكاكولام', 'Boy', 'صبي', 'Old Student', 'طالب قديم', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', '', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'India', 'الهند', '532409', '532409', '08500630362', '08500630362', '8500630362', '8500630362', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Agree', 'يوافق على', 'assets/birthcertificate/Desert.jpg', '', '', '', '', '', 1, '2019-12-14 11:55:47'),
(18, 'SUGGU VENKATA RAMANA8', 'سوغو فينكاتا رامانا', '2019-12-06', '2019/12/06', '22', '22', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'srikakulam', 'سريكاكولام', 'Boy', 'صبي', 'Old Student', 'طالب قديم', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', '', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'India', 'الهند', '532409', '532409', '08500630362', '08500630362', '8500630362', '8500630362', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Agree', 'يوافق على', 'assets/birthcertificate/Desert.jpg', '', '', '', '', '', 0, '2019-12-14 13:03:51'),
(19, 'SUGGU VENKATA RAMANA', 'سوغو فينكاتا رامانا', '2019-12-18', '2019/12/18', '23', '23', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'srikakulam', 'سريكاكولام', 'Boy', 'صبي', 'Old Student', 'طالب قديم', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa', 'عبد العزيز عيسى', 'India', 'الهند', '532409', '532409', '08500630362', '08500630362', '08187871138', '', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Agree', 'يوافق على', 'assets/birthcertificate/Jellyfish.jpg', 'assets/vaccinationcertificate/Tulips.jpg', '', '', '', '', 1, '2019-12-14 13:09:24'),
(20, 'bhaskar rao suggu', 'باسكار راو سوغو', '2019-12-19', '2019/12/19', '23', '23', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Boy', 'صبي', 'Old Student', 'طالب قديم', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa', 'عبد العزيز عيسى', 'bhaskar', 'بهاسكار', 'India', 'الهند', '500018', '500018', '8500630362', '8500630362', '08187871138', '08187871138', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Agree', 'يوافق على', 'assets/birthcertificate/Chrysanthemum.jpg', 'assets/vaccinationcertificate/Desert.jpg', 'assets/iqamacertificate/Hydrangeas.jpg', 'assets/passportfile/Jellyfish.jpg', 'assets/originalcertificates/Koala.jpg', 'assets/photoschilds/Lighthouse.jpg', 1, '2019-12-14 13:35:23'),
(21, 'SUGGU VENKATA RAMANA', 'سوغو فينكاتا رامانا', '2019-12-11', '2019/12/11', '22', '22', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Girl', 'فتاة', 'Old Student', 'طالب قديم', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'India', 'الهند', '532409', '532409', '08500630362', '08500630362', 'fsdfsdf', 'fsdfsdf', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Agree', 'يوافق على', 'assets/birthcertificate/Desert.jpg', 'assets/vaccinationcertificate/Jellyfish.jpg', 'assets/iqamacertificate/Desert.jpg', 'assets/passportfile/Koala.jpg', 'assets/originalcertificates/Hydrangeas.jpg', 'assets/photoschilds/Koala.jpg', 1, '2019-12-14 15:19:19'),
(22, 'SUGGU VENKATA RAMANAsss', 'سوغو فينكاتا راماناس', '2019-12-12', '2019/12/12', '22', '22', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Girl', 'فتاة', 'Old Student', 'طالب قديم', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Abdulaziz Essa', 'عبد العزيز عيسى', 'Abdulaziz Essa', 'عبد العزيز عيسى', 'India', 'الهند', '532409', '532409', '08500630362', '08500630362', '08500630362', '08500630362', 'Abdulaziz Essa Ahmed', 'عبدالعزيز عيسى احمد', 'Agree', 'يوافق على', 'assets/birthcertificate/Chrysanthemum.jpg', 'assets/vaccinationcertificate/Jellyfish.jpg', 'assets/iqamacertificate/Desert.jpg', 'assets/passportfile/Jellyfish.jpg', 'assets/originalcertificates/Tulips.jpg', 'assets/photoschilds/Jellyfish.jpg', 1, '2020-01-06 14:32:02');

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
  `status` int(11) NOT NULL DEFAULT '1',
  `dateandtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_id`, `class_name`, `class_name_ar`, `class_grade`, `class_grade_ar`, `subjects_name`, `subjects_name_ar`, `status`, `dateandtime`) VALUES
(17, '1st class', '1st صنف', 'A Grade', 'والصف', 'Matchs,Hindi,Science,Social', '', 1, '2019-12-27 03:01:37'),
(18, '1st class', '1st صنف', 'B Grade', 'العلامه ب', 'Matchs,Hindi,Science,Social', '', 1, '2019-12-27 03:06:24'),
(19, '2nd class', 'الدرجة الثانية', 'B Grade', 'العلامه ب', 'Matchs,Hindi,Science,Social,Telugu', '', 1, '2019-12-31 13:09:36'),
(22, '2nd class', 'الدرجة الثانية', 'C Grade', 'درجة C', 'Matchs,Social,English', '', 1, '2019-12-31 13:13:44');

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
  `status` int(11) NOT NULL DEFAULT '1',
  `caretedandtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_schedual`
--

INSERT INTO `class_schedual` (`cls_sch_id`, `schedual_day`, `schedual_day_ar`, `lesson_name`, `lesson_name_ar`, `class`, `class_ar`, `subjects`, `subjects_ar`, `to_time`, `to_time_ar`, `from_time`, `from_time_ar`, `status`, `caretedandtime`) VALUES
(5, 'Monday', 'الإثنين', 'gdsfg ', 'gdsfg', '22', '22', 'matchs', 'matchs', '12:00', '00:00', '14:00', '14:00', 1, '2020-01-06 13:22:55');

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
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `role_name_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`, `role_name_ar`, `status`, `datetime`) VALUES
(4, 'Non-Teaching', 'غير التدريس', 1, '2019-12-18 02:15:18'),
(5, 'Teacher', 'مدرس', 1, '2019-12-17 03:11:59'),
(6, 'Principal', 'المالك', 1, '2019-12-18 02:14:33'),
(7, 'Accountant', 'محاسب', 1, '2019-12-18 02:15:34'),
(8, 'Administration', 'الادارة', 1, '2019-12-18 02:15:46');

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
  `status` int(11) NOT NULL DEFAULT '1',
  `dateandtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
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
  `role_in_school` varchar(255) NOT NULL COMMENT '1=principal,2=teacher,3=non-teaching,4=accountant,5=administration',
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
  `profile_img` longtext,
  `profile_name` varchar(255) DEFAULT NULL,
  `profile_name_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `device_id` varchar(255) DEFAULT NULL,
  `device_id_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `device_type` varchar(255) DEFAULT NULL,
  `device_type_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `fcm_id` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `f_name`, `f_name_ar`, `l_name`, `l_name_ar`, `emp_code`, `emp_code_ar`, `work_no`, `work_no_ar`, `personal_no`, `personal_no_ar`, `work_email`, `work_email_ar`, `personal_email`, `personal_email_ar`, `gender`, `gender_ar`, `comm_addr`, `comm_addr_ar`, `per_addr`, `per_addr_ar`, `role_in_school`, `role_in_school_ar`, `classes_to_teach`, `classes_to_teach_ar`, `class_teacher_for`, `class_teacher_for_ar`, `subjects`, `subjects_ar`, `currently_working`, `currently_working_ar`, `username`, `username_ar`, `password`, `password_ar`, `profile_img`, `profile_name`, `profile_name_ar`, `device_id`, `device_id_ar`, `device_type`, `device_type_ar`, `fcm_id`, `status`, `date_created`, `date_modified`) VALUES
(26, 'Suggu', 'Suggu', 'Bhaskara rao', 'بهاسكارا راو', '591114', '591114', 'bhaska', 'بهاسكار', '8500630362', '8500630362', 'bhaskarsuggu41@gmail.com', 'bhaskarsuggu41@gmail.com', 'bhaskarsuggu41@gmail.com', 'bhaskarsuggu41@gmail.com', 'Boy', 'صبي', 'hydrabad', 'حيدر أباد', 'erragadda', 'erragadda', 'Teacher', 'المالك', NULL, '', 'bhaskar', 'بهاسكار', 'Telugu,Social,Science,Matchs,Hindi', '', 'Tech Mahindra', 'تك ماهيندرا', 'suggu', 'suggu', '12345', '12345', 'assets/staffimage/Hydrangeas.jpg', 'suggu', 'suggu', '12345', '12345', 'ds', 'س', NULL, 1, '2019-12-27 11:03:09', '2020-01-03 16:21:02'),
(27, 'SUGGU', 'SUGGU', 'RAMANA', 'رامانا', 'gds', 'نظم التوزيع العالمية', '08500630362', '08500630362', '8500630362', '8500630362', 'bhaskarsuggu41@gmail.com', 'bhaskarsuggu41@gmail.com', 'bhaskarsuggu41@gmail.com', 'bhaskarsuggu41@gmail.com', 'Boy', 'صبي', 'VALLABHARAOPETA 1-83\r\nPATHIVADAPALAM', 'VALLABHARAOPETA 1-83\r\nPATHIVADAPALAM', 'VALLABHARAOPETA 1-83\r\nPATHIVADAPALAM', 'VALLABHARAOPETA 1-83\r\nPATHIVADAPALAM', 'Principal', 'المالك', '1st class,1st class,1st,1 class', '', 'ggg', 'GGG', NULL, '', 'gsd', 'GSD', '101143423331', '101143423331', 'suggu', 'suggu', 'assets/staffimage/Hydrangeas.jpg', 'gsg', 'GSG', 'bhaskarsuggu41@gmail.com', 'bhaskarsuggu41@gmail.com', 'ds', 'س', NULL, 1, '2019-12-27 11:22:33', '2019-12-27 11:22:33'),
(28, 'Suggu', 'Suggu', 'varma', 'بهاسكارا راو', '591114', '591114', 'bhaska', 'بهاسكار', '8500630362', '8500630362', 'bhaskarsuggu41@gmail.com', 'bhaskarsuggu41@gmail.com', 'bhaskarsuggu41@gmail.com', 'bhaskarsuggu41@gmail.com', 'Boy', 'صبي', 'hydrabad', 'حيدر أباد', 'erragadda', 'erragadda', 'Teacher', 'المالك', NULL, '', 'bhaskar', 'بهاسكار', 'Telugu,Social,Science,Matchs,Hindi', '', 'Tech Mahindra', 'تك ماهيندرا', 'suggu', 'suggu', '12345', '12345', 'assets/staffimage/Hydrangeas.jpg', 'suggu', 'suggu', '12345', '12345', 'ds', 'س', NULL, 1, '2019-12-27 11:03:09', '2020-01-03 16:21:02');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `subject_name_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `dateandtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
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
(9, 'matchs', 'matchs', 1, '2019-12-31 13:29:03');

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
  `status` int(11) NOT NULL DEFAULT '1',
  `dateandtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_schedual`
--

INSERT INTO `teacher_schedual` (`tech_sch_id`, `teacher_name`, `teacher_name_ar`, `schedual_day`, `schedual_day_ar`, `class`, `class_ar`, `subjects`, `subjects_ar`, `to_time`, `to_time_ar`, `from_time`, `from_time_ar`, `status`, `dateandtime`) VALUES
(27, '26', '26', 'Wednesday', 'الأربعاء', '1st class B Grade', '1st فئة ب الصف', 'Hindi', 'الهندية', '15:04', '15:04', '13:59', '13:59', 1, '2020-01-03 14:02:44'),
(28, '28', '28', 'Tuesday', 'الثلاثاء', '2nd class C Grade', '2nd فئة C الصف', 'Science', 'علم', '00:59', '00:59', '13:59', '13:59', 1, '2020-01-03 14:13:38');

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
  `user_status` int(11) NOT NULL DEFAULT '1',
  `date_and_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `user_email`, `gender`, `mobile_number`, `user_password`, `date_of_birth`, `desgenation`, `country`, `state`, `city`, `address`, `role_type`, `user_status`, `date_and_time`) VALUES
(1, 'Suggu ', 'Bhaskara rao', 'bhaskarsuggu41@gmail.com', 'Male', '8500630362', '12345', '21-06-1992', 'Software Developer', 'India', 'Andhrapradesh', 'Vizag', 'My family Homes A block 402 opp Sai Apartments. New Prame Nager Erragadda', 'Super Admin', 1, '2020-01-08 12:43:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission_users`
--
ALTER TABLE `admission_users`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`);

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
  MODIFY `adm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `class_schedual`
--
ALTER TABLE `class_schedual`
  MODIFY `cls_sch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fee_transaction`
--
ALTER TABLE `fee_transaction`
  MODIFY `fee_transaction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `school_schedual`
--
ALTER TABLE `school_schedual`
  MODIFY `sch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `teacher_schedual`
--
ALTER TABLE `teacher_schedual`
  MODIFY `tech_sch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
