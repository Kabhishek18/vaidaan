-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 19, 2020 at 05:17 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaidaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `id` int(11) NOT NULL,
  `cat_name` text NOT NULL,
  `cat_status` enum('0','1') NOT NULL DEFAULT '0',
  `cat_delete` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`id`, `cat_name`, `cat_status`, `cat_delete`) VALUES
(1, 'jewellery', '0', '0'),
(2, 'clothing', '0', '0'),
(3, 'bags', '0', '0'),
(4, 'footwear', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `page_name` text NOT NULL,
  `page_description` text NOT NULL,
  `page_parent` text NOT NULL,
  `page_status` enum('0','1') NOT NULL DEFAULT '0',
  `page_delete` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `page_name`, `page_description`, `page_parent`, `page_status`, `page_delete`) VALUES
(1, 'designer', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text\r\n', 'About Us', '0', '0'),
(2, 'craftsmanship', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text\r\n', 'About Us', '0', '0'),
(3, 'packaging', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text\r\n', 'About Us', '0', '0'),
(4, 'store locator', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text\r\n', 'About Us', '0', '0'),
(5, 'collections', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text\r\n', 'LookBook', '0', '0'),
(6, 'press & media', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text\r\n', 'LookBook', '0', '0'),
(7, 'celebrity closet', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text\r\n', 'LookBook', '0', '0'),
(8, 'blogger favourite', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text\r\n', 'LookBook', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `product_finish` text NOT NULL,
  `product_occas` text NOT NULL,
  `product_collection` text NOT NULL,
  `product_type` text NOT NULL,
  `product_description` text NOT NULL,
  `product_info` text NOT NULL,
  `product_customise` text NOT NULL,
  `review_id` int(11) NOT NULL,
  `product_status` enum('0','1') NOT NULL DEFAULT '0',
  `product_delete` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `review_name` text NOT NULL,
  `review_star` int(11) NOT NULL,
  `review_product_id` text NOT NULL,
  `review_status` enum('0','1') NOT NULL,
  `review_delete` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subcat`
--

CREATE TABLE `subcat` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_name` text NOT NULL,
  `subcat_staus` enum('0','1') NOT NULL DEFAULT '0',
  `subcat_delete` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcat`
--

INSERT INTO `subcat` (`id`, `cat_id`, `subcat_name`, `subcat_staus`, `subcat_delete`) VALUES
(1, 1, 'earrings', '0', '0'),
(2, 1, 'hoops', '0', '0'),
(3, 1, 'studs', '0', '0'),
(4, 1, 'necklaces', '0', '0'),
(5, 1, 'bracelets', '0', '0'),
(6, 1, 'rings', '0', '0'),
(7, 1, 'head pieces', '0', '0'),
(8, 1, 'brooches', '0', '0'),
(9, 1, 'belts', '0', '0'),
(10, 1, 'anklets', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_token` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_type` enum('0','1','2') NOT NULL DEFAULT '0',
  `user_status` enum('0','1') NOT NULL DEFAULT '0',
  `user_delete` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_token`, `user_name`, `user_password`, `user_email`, `user_image`, `user_type`, `user_status`, `user_delete`) VALUES
(1, '6b964c51-9bac-2ea2-62fd-ecdb9370a312', 'developer', '60896becdc575be18bae1c606845db31', 'kabhishek18@gmail.com', 'a:14:{s:9:\"file_name\";s:12:\"user-041.jpg\";s:9:\"file_type\";s:10:\"image/jpeg\";s:9:\"file_path\";s:41:\"/home/krab/sites/vaidaan/resource/upload/\";s:9:\"full_path\";s:53:\"/home/krab/sites/vaidaan/resource/upload/user-041.jpg\";s:8:\"raw_name\";s:8:\"user-041\";s:9:\"orig_name\";s:11:\"user-04.jpg\";s:11:\"client_name\";s:11:\"user-04.jpg\";s:8:\"file_ext\";s:4:\".jpg\";s:9:\"file_size\";d:30.120000000000000994759830064140260219573974609375;s:8:\"is_image\";b:1;s:11:\"image_width\";i:300;s:12:\"image_height\";i:300;s:10:\"image_type\";s:4:\"jpeg\";s:14:\"image_size_str\";s:24:\"width=\"300\" height=\"300\"\";}', '0', '0', '0'),
(3, 'cc2556d5-9089-ddf9-21b4-fe58463febc0', 'test', '60896becdc575be18bae1c606845db31', 'test@gmail.com', 'a:14:{s:9:\"file_name\";s:12:\"user-041.jpg\";s:9:\"file_type\";s:10:\"image/jpeg\";s:9:\"file_path\";s:41:\"/home/krab/sites/vaidaan/resource/upload/\";s:9:\"full_path\";s:53:\"/home/krab/sites/vaidaan/resource/upload/user-041.jpg\";s:8:\"raw_name\";s:8:\"user-041\";s:9:\"orig_name\";s:11:\"user-04.jpg\";s:11:\"client_name\";s:11:\"user-04.jpg\";s:8:\"file_ext\";s:4:\".jpg\";s:9:\"file_size\";d:30.120000000000000994759830064140260219573974609375;s:8:\"is_image\";b:1;s:11:\"image_width\";i:300;s:12:\"image_height\";i:300;s:10:\"image_type\";s:4:\"jpeg\";s:14:\"image_size_str\";s:24:\"width=\"300\" height=\"300\"\";}', '1', '0', '0'),
(4, 'cb8b7e99-b693-aed8-ff86-173906136665\r\n\r\n', 'user', '60896becdc575be18bae1c606845db31', 'user@gmail.com', 'a:14:{s:9:\"file_name\";s:12:\"user-041.jpg\";s:9:\"file_type\";s:10:\"image/jpeg\";s:9:\"file_path\";s:41:\"/home/krab/sites/vaidaan/resource/upload/\";s:9:\"full_path\";s:53:\"/home/krab/sites/vaidaan/resource/upload/user-041.jpg\";s:8:\"raw_name\";s:8:\"user-041\";s:9:\"orig_name\";s:11:\"user-04.jpg\";s:11:\"client_name\";s:11:\"user-04.jpg\";s:8:\"file_ext\";s:4:\".jpg\";s:9:\"file_size\";d:30.120000000000000994759830064140260219573974609375;s:8:\"is_image\";b:1;s:11:\"image_width\";i:300;s:12:\"image_height\";i:300;s:10:\"image_type\";s:4:\"jpeg\";s:14:\"image_size_str\";s:24:\"width=\"300\" height=\"300\"\";}', '2', '0', '0'),
(5, '461bf1fa-af5c-d20d-c4fd-f9da0ea4f492', 'Raj', 'developer@1234', 'raj@gmail.com', 'a:14:{s:9:\"file_name\";s:12:\"user-041.jpg\";s:9:\"file_type\";s:10:\"image/jpeg\";s:9:\"file_path\";s:41:\"/home/krab/sites/vaidaan/resource/upload/\";s:9:\"full_path\";s:53:\"/home/krab/sites/vaidaan/resource/upload/user-041.jpg\";s:8:\"raw_name\";s:8:\"user-041\";s:9:\"orig_name\";s:11:\"user-04.jpg\";s:11:\"client_name\";s:11:\"user-04.jpg\";s:8:\"file_ext\";s:4:\".jpg\";s:9:\"file_size\";d:30.120000000000000994759830064140260219573974609375;s:8:\"is_image\";b:1;s:11:\"image_width\";i:300;s:12:\"image_height\";i:300;s:10:\"image_type\";s:4:\"jpeg\";s:14:\"image_size_str\";s:24:\"width=\"300\" height=\"300\"\";}', '2', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcat`
--
ALTER TABLE `subcat`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `subcat` ADD FULLTEXT KEY `subcat_name` (`subcat_name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_token` (`user_token`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcat`
--
ALTER TABLE `subcat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
