-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 12, 2020 at 11:12 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blue-pen`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

DROP TABLE IF EXISTS `assignments`;
CREATE TABLE IF NOT EXISTS `assignments` (
  `user_id` int(11) NOT NULL,
  `assign_id` int(11) NOT NULL AUTO_INCREMENT,
  `assign_name` text NOT NULL,
  `ink_color` varchar(5) NOT NULL,
  `submission_datetime` timestamp NOT NULL,
  `delivery_date` date NOT NULL,
  `amount` int(11) NOT NULL,
  `soa_assigned` tinyint(1) DEFAULT '0',
  `soa_written` tinyint(1) DEFAULT '0',
  `soa_paid` tinyint(1) DEFAULT '0',
  `soa_completed` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`assign_id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`user_id`, `assign_id`, `assign_name`, `ink_color`, `submission_datetime`, `delivery_date`, `amount`, `soa_assigned`, `soa_written`, `soa_paid`, `soa_completed`) VALUES
(2, 2, 'bhavyaharia100@gmail.comSpeech.pdf', 'Black', '2020-04-24 14:36:15', '2020-04-27', 0, 1, 1, 1, 1),
(2, 3, 'bhavyaharia100@gmail.comBE Fees.pdf', 'Blue', '2020-04-24 14:36:51', '2020-04-27', 0, 1, 1, 1, 1),
(4, 4, 'admin@bluepen.comSpeech.pdf', 'Blue', '2020-04-25 14:05:19', '2020-04-29', 0, 1, 1, 1, 1),
(4, 5, 'admin@bluepen.comBE Fees.pdf', 'Black', '2020-04-25 14:11:49', '2020-04-29', 0, 1, 1, 1, 1),
(4, 6, 'admin@bluepen.comSpeech.pdf', 'Blue', '2020-04-25 14:17:48', '2020-04-29', 0, 1, 1, 1, 1),
(6, 31, 'bhavyaharia100@gmail.comTE_BE-Comp_Engg_CBCGS_Syllabus.pdf', 'Blue', '2020-04-28 14:39:46', '2020-05-05', 894, 0, 0, 0, 0),
(6, 29, 'bhavyaharia100@gmail.comSpeech.pdf', 'Blue', '2020-04-28 14:37:56', '2020-05-05', 6, 0, 0, 0, 0),
(6, 28, 'bhavyaharia100@gmail.comSpeech.pdf', 'Blue', '2020-04-28 14:33:18', '2020-05-05', 6, 0, 0, 0, 0),
(6, 12, 'bhavyaharia100@gmail.comSpeech.pdf', 'Blue', '2020-04-28 13:14:38', '2020-05-05', 1, 0, 0, 0, 0),
(6, 13, 'bhavyaharia100@gmail.comSpeech.pdf', 'Blue', '2020-04-28 13:15:25', '2020-05-05', 6, 0, 0, 0, 0),
(6, 14, 'bhavyaharia100@gmail.comSpeech.pdf', 'Blue', '2020-04-28 13:15:52', '2020-05-05', 6, 0, 0, 0, 0),
(6, 15, 'bhavyaharia100@gmail.comSpeech.pdf', 'Blue', '2020-04-28 13:16:09', '2020-05-05', 6, 0, 0, 0, 0),
(6, 30, 'bhavyaharia100@gmail.comSpeech.pdf', 'Blue', '2020-04-28 14:39:22', '2020-05-05', 6, 0, 0, 0, 0),
(6, 17, 'bhavyaharia100@gmail.comTE_BE-Comp_Engg_CBCGS_Syllabus.pdf', 'Blue', '2020-04-28 13:18:50', '2020-05-05', 894, 0, 0, 0, 0),
(6, 18, 'bhavyaharia100@gmail.comTE_BE-Comp_Engg_CBCGS_Syllabus.pdf', 'Blue', '2020-04-28 13:18:56', '2020-05-05', 894, 0, 0, 0, 0),
(6, 19, 'bhavyaharia100@gmail.comTE_BE-Comp_Engg_CBCGS_Syllabus.pdf', 'Blue', '2020-04-28 13:19:04', '2020-05-05', 894, 0, 0, 0, 0),
(6, 20, 'bhavyaharia100@gmail.comTE_BE-Comp_Engg_CBCGS_Syllabus.pdf', 'Blue', '2020-04-28 13:19:31', '2020-05-05', 894, 0, 0, 0, 0),
(6, 21, 'bhavyaharia100@gmail.comSpeech.pdf', 'Blue', '2020-04-28 13:25:57', '2020-05-05', 6, 0, 0, 0, 0),
(6, 22, 'bhavyaharia100@gmail.comSpeech.pdf', 'Blue', '2020-04-28 13:30:41', '2020-05-05', 6, 0, 0, 0, 0),
(6, 23, 'bhavyaharia100@gmail.comSpeech.pdf', 'Blue', '2020-04-28 13:33:43', '2020-05-05', 6, 0, 0, 0, 0),
(6, 24, 'bhavyaharia100@gmail.comSpeech.pdf', 'Blue', '2020-04-28 13:39:05', '2020-05-05', 6, 0, 0, 0, 0),
(6, 25, 'bhavyaharia100@gmail.comSpeech.pdf', 'Blue', '2020-04-28 13:41:26', '2020-05-05', 6, 0, 0, 0, 0),
(6, 26, 'bhavyaharia100@gmail.comSpeech.pdf', 'Blue', '2020-04-28 13:43:02', '2020-05-05', 6, 0, 0, 0, 0),
(6, 27, 'bhavyaharia100@gmail.comSpeech.pdf', 'Blue', '2020-04-28 13:43:43', '2020-05-05', 6, 0, 0, 0, 0),
(6, 32, 'bhavyaharia100@gmail.comTE_BE-Comp_Engg_CBCGS_Syllabus.pdf', 'Black', '2020-04-28 14:42:02', '2020-05-05', 894, 0, 0, 0, 0),
(6, 33, 'bhavyaharia100@gmail.comTE_BE-Comp_Engg_CBCGS_Syllabus.pdf', 'Blue', '2020-04-28 14:42:30', '2020-05-05', 894, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `des` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `tags` varchar(1024) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `des_writer` varchar(1024) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `link` varchar(1024) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `main` varchar(256) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `img1` varchar(256) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `img2` varchar(256) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `img3` varchar(256) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `des`, `tags`, `name`, `des_writer`, `link`, `main`, `img1`, `img2`, `img3`, `date`) VALUES
(2, 'dsfsdv', 'gff', 'nature;adventure;', 'Garba', 'te377', 'www.jay.com', 'Capture.PNG', 'Capture1.PNG', 'Capture2.PNG', 'Capture4.PNG', '2012-05-20'),
(3, 'dejyh', 'gff', 'nature;adventure;', 'a', 'te377', 'www.jay.com', 'Capture6.PNG', 'Capture7.PNG', 'Capture8.PNG', 'CaptureDATA.PNG', '2012-05-20'),
(4, 'dejyh', 'gff', 'nature;adventure;', 'a', 'te377', 'www.jay.com', 'Capture6.PNG', 'Capture7.PNG', 'Capture8.PNG', 'CaptureDATA.PNG', '2012-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(512) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

DROP TABLE IF EXISTS `tests`;
CREATE TABLE IF NOT EXISTS `tests` (
  `u_id` int(11) NOT NULL,
  `assign_name` text NOT NULL,
  `ink_color` varchar(5) NOT NULL,
  `timestamp` timestamp NOT NULL,
  `deliverydate` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`u_id`, `assign_name`, `ink_color`, `timestamp`, `deliverydate`) VALUES
(2, 'bhavyaharia100@gmail.comSpeech.pdf', 'Black', '0000-00-00 00:00:00', '2020-04-27'),
(2, 'bhavyaharia100@gmail.comSpeech.pdf', 'Blue', '2020-04-24 14:15:33', '2020-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `college` varchar(128) NOT NULL,
  `email` varchar(256) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `address` varchar(512) NOT NULL,
  `password` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `college`, `email`, `mobile`, `address`, `password`) VALUES
(1, 'testfirstname', 'testlastname', '', 'test@gmail.com', 9876543210, 'testaddress', ''),
(6, 'Bhavya', 'Haria', 'SAKEC', 'bhavyaharia100@gmail.com', 9619305482, 'B-42,B-002, Dayanand Society, Opp. Lifeline Hospital, Gokuldham, Goregaon (East)', '$2y$10$IhDxlZxQRKExV5p4zZGu9ulLROzAvynEB/dRl.n.iXy18LimuYbyO'),
(4, 'admin', 'admin', '', 'admin@bluepen.com', 9619305482, 'blue pen', '$2y$10$hG4e9Zpp/Pu6pvM64cpIGutZZKnXEDWWbgcLl9TVipBsl4Buq0BaK'),
(5, 'abc', 'xyz', 'sakec', 'tes@gmail.com', 9619305488, 'sdkdjfsiusu', '$2y$10$Qjn7hzkoDzmxtzUOJgE2IOV2N8sgIQ98ZJRvbijqHc7b0kOezmbdK');

-- --------------------------------------------------------

--
-- Table structure for table `writer`
--

DROP TABLE IF EXISTS `writer`;
CREATE TABLE IF NOT EXISTS `writer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(256) NOT NULL,
  `file` text NOT NULL,
  `address` varchar(2048) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `writer`
--

INSERT INTO `writer` (`id`, `firstname`, `lastname`, `mobile`, `email`, `file`, `address`) VALUES
(15, 'Bhavya', 'Haria', 9619305482, 'bhavyaharia100@gmail.com', 'bhavyaharia100@gmail.comSpeech.pdf', 'address');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
