-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Apr 02, 2017 at 11:24 PM
-- Server version: 5.5.38
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `forumseries`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
`id` tinyint(4) NOT NULL,
  `category_title` varchar(150) NOT NULL,
  `category_description` varchar(255) NOT NULL,
  `last_post_date` datetime DEFAULT NULL,
  `last_user_posted` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_title`, `category_description`, `last_post_date`, `last_user_posted`) VALUES
(1, 'Starting an Ecovillage?', 'Are you starting an EcoVillage? This is where you can begin discussions with others about your initiative.', NULL, NULL),
(2, 'Join an existing Eco-village.', 'Are you looking for an EcoVillage to join? This is where you can post your desires, locations, and other information.', '2017-04-02 20:41:11', 1),
(3, 'Earth Shelters & Green Homes', 'Making your own or collaborating? Get chatting here.', NULL, NULL),
(4, 'Energy & Transportation', 'Get chatting about innovative green alternatives to transport.', NULL, NULL),
(5, 'Water & Waste', 'Discuss water management initiatives, at home or on an industrial level. Surface water capture treatments, retention, attenuation, infiltration. Biological treatment, landfill, collection and transport, markets and policy, anaerobic digestion.', NULL, NULL),
(6, 'Biofuel', 'Meets the transportation needs of society, how do we implement this into our every lives. What effect is this having. ', '2017-04-02 20:17:57', 1),
(7, 'Food & Gardening', 'Home grown, small-scale, large-scale. Planting methods, tips of the trade. Nutrition, best results. ', NULL, NULL),
(8, 'Solar Energy', 'At home, solar farms, solar DIY. You name, solar conversations are here.', '2017-04-02 17:51:50', 1),
(9, 'Urban Sustainability', 'Need advice on how to cope in the big apple, check it here. ', '2017-04-02 17:36:47', 1),
(10, 'Looking for a team?', 'If you have any new ideas are looking for advice, start-ups or collabs, get talking here. ', '2017-04-02 22:05:50', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
`id` int(11) NOT NULL,
  `category_id` tinyint(4) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `post_creator` int(11) NOT NULL,
  `post_content` text NOT NULL,
  `post_date` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `topic_id`, `post_creator`, `post_content`, `post_date`) VALUES
(1, 2, 1, 1, 'hello', '2017-03-31 14:17:51'),
(2, 2, 4, 1, 'heeeeey', '2017-04-01 20:24:41'),
(3, 2, 4, 1, 'Test reply.', '2017-04-01 21:42:25'),
(4, 2, 4, 1, 'hi', '2017-04-02 00:23:59'),
(5, 12, 6, 1, 'hi', '2017-04-02 16:47:10'),
(6, 12, 6, 1, 'Heeeey just checking ', '2017-04-02 16:47:24'),
(7, 12, 7, 1, 'Test test test test test.', '2017-04-02 17:25:56'),
(8, 12, 7, 1, 'I think that testing could be really intrigueing.', '2017-04-02 17:26:14'),
(9, 12, 7, 1, 'reply', '2017-04-02 17:27:28'),
(10, 12, 7, 1, 'reply', '2017-04-02 17:28:26'),
(11, 12, 7, 1, 'reply', '2017-04-02 17:33:33'),
(12, 12, 7, 1, 'well i dont know about that because ', '2017-04-02 17:34:15'),
(13, 12, 7, 1, 'well i dont know about that because ', '2017-04-02 17:35:34'),
(14, 12, 7, 1, 'hi', '2017-04-02 17:35:54'),
(15, 18, 8, 1, '', '2017-04-02 17:36:47'),
(16, 12, 6, 1, 'heeey', '2017-04-02 17:43:26'),
(17, 12, 6, 1, 'heeeey', '2017-04-02 17:44:47'),
(18, 12, 5, 1, 'Heeey there', '2017-04-02 17:47:34'),
(19, 17, 9, 1, 'yoyoyoyo', '2017-04-02 17:51:50'),
(20, 6, 10, 1, 'This is a test topic paragraph.', '2017-04-02 20:17:57'),
(21, 2, 4, 1, '', '2017-04-02 20:41:11'),
(22, 10, 11, 1, 'new category', '2017-04-02 22:05:50');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
`id` int(11) NOT NULL,
  `category_id` tinyint(4) NOT NULL,
  `topic_title` varchar(150) NOT NULL,
  `topic_creator` int(11) NOT NULL,
  `topic_last_user` int(11) DEFAULT NULL,
  `topic_date` datetime NOT NULL,
  `topic_reply_date` datetime NOT NULL,
  `topic_views` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `category_id`, `topic_title`, `topic_creator`, `topic_last_user`, `topic_date`, `topic_reply_date`, `topic_views`) VALUES
(1, 2, 'hello', 1, 0, '2017-03-31 14:17:51', '2017-03-31 14:17:51', 0),
(2, 2, 'hello', 1, 0, '2017-04-01 20:23:07', '2017-04-01 20:23:07', 1),
(3, 2, 'hello', 1, 0, '2017-04-01 20:23:48', '2017-04-01 20:23:48', 5),
(4, 2, 'hello', 1, 1, '2017-04-01 20:24:41', '2017-04-02 20:41:11', 29),
(5, 12, 'How can you safely make your own biofuel at home?', 1, 1, '2017-04-02 16:43:57', '2017-04-02 17:47:34', 1),
(6, 12, 'How can you safely make your own biofuel at home?', 1, 1, '2017-04-02 16:47:10', '2017-04-02 17:44:47', 5),
(7, 12, 'This is a test topic.', 1, 1, '2017-04-02 17:25:56', '2017-04-02 17:35:54', 4),
(8, 18, 'Test topic', 1, NULL, '2017-04-02 17:36:47', '2017-04-02 17:36:47', 1),
(9, 17, 'Yoyoyoyo', 1, NULL, '2017-04-02 17:51:50', '2017-04-02 17:51:50', 1),
(10, 6, 'This is a test topic.', 1, NULL, '2017-04-02 20:17:57', '2017-04-02 20:17:57', 3),
(11, 10, 'New category', 1, NULL, '2017-04-02 22:05:50', '2017-04-02 22:05:50', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
`id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `forum_notification` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `forum_notification`) VALUES
(1, 'katebrooks', 'katebrooks', 'and', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
