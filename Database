-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 14, 2017 at 11:57 AM
-- Server version: 5.5.51-38.2
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sonyfort_dges1`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(8) NOT NULL,
  `cat_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cat_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `chat_id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(8) NOT NULL,
  `post_content` text COLLATE utf8_unicode_ci NOT NULL,
  `post_date` datetime NOT NULL,
  `post_topic` int(8) NOT NULL,
  `post_by` int(8) NOT NULL,
  `topic_id` int(8) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Projects`
--

CREATE TABLE IF NOT EXISTS `Projects` (
  `project_id` int(200) NOT NULL,
  `project_name` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `credits` int(200) DEFAULT NULL,
  `duration` int(200) DEFAULT NULL,
  `level` int(200) DEFAULT NULL,
  `prerequisites` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(200) NOT NULL,
  `skills` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `project_skill1` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `project_skill2` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `project_skill3` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE IF NOT EXISTS `schools` (
  `name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `number_students` int(11) NOT NULL,
  `phone` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `number_teachers` int(11) NOT NULL,
  `category` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `main_language` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `specialization` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `street` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Text_Files`
--

CREATE TABLE IF NOT EXISTS `Text_Files` (
  `file_id` int(200) NOT NULL,
  `file_name` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `file_size` bigint(255) DEFAULT NULL,
  `content_type` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `file_extension` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `file_content` varbinary(60000) DEFAULT NULL,
  `project_id` int(200) NOT NULL,
  `document_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `topic_id` int(8) NOT NULL,
  `topic_subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `topic_date` datetime NOT NULL,
  `topic_cat` int(8) NOT NULL,
  `topic_by` int(8) NOT NULL,
  `cat_id` int(8) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_last` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_phone` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_street_address` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_city` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_state` varchar(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_username` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_skills` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_phone`, `user_email`, `user_street_address`, `user_city`, `user_state`, `user_username`, `user_password`, `user_skills`) VALUES
(5, 'Tony', 'Leon', '4049925982', 'knfiore@gmail.com', '123 plz work', 'plzwork', 'GA', 'tony1', '$2y$10$lhyHTUFc/bc6.eKNV5kb8OAECCVBqNfzoHSiImjtH.4i6ZVlADhAW', ''),
(6, 'Anthony', 'Leon', '4049925982', 'testing@gmail.com', '123 Testagain', 'City', 'GA', 'testing', '$2y$10$z7D8bIHv55qAxMJiEZOGA.tNxxP45NR7K24zeoRZ5gYrYkCepoFV.', ''),
(7, 'Rana', 'Agan', '6786620287', 'ragan1@student.gsu.edu', '1645 briers chute ', 'alpharetta ', 'ga', 'ragan1@student.gsu.edu', '$2y$10$2BDRpwvmvL8fZh42xsefNu9zM2Xs64fs3ofEoTCv66OTI1hT9P0SK', ''),
(8, 'Sony', 'Fortune', '123-456-8585', 'sony@mail.com', '123 Street name', 'Atlanta', 'GA', 'sony', '$2y$10$tOMKJqFY5RQYNd/SgCB8Ie1LfjGB/.9Jvqv4bOgN2I5ns9dQicYta', '');

-- --------------------------------------------------------

--
-- Table structure for table `Video_Files`
--

CREATE TABLE IF NOT EXISTS `Video_Files` (
  `project_id` int(200) NOT NULL,
  `video_id` int(200) NOT NULL,
  `videos` varbinary(60000) DEFAULT NULL,
  `video_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_size` bigint(200) DEFAULT NULL,
  `user_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`), ADD UNIQUE KEY `cat_name` (`cat_name`), ADD UNIQUE KEY `cat_name_2` (`cat_name`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `Projects`
--
ALTER TABLE `Projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `Text_Files`
--
ALTER TABLE `Text_Files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`topic_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `Video_Files`
--
ALTER TABLE `Video_Files`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Projects`
--
ALTER TABLE `Projects`
  MODIFY `project_id` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Text_Files`
--
ALTER TABLE `Text_Files`
  MODIFY `file_id` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `topic_id` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `Video_Files`
--
ALTER TABLE `Video_Files`
  MODIFY `video_id` int(200) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
