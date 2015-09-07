-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015-08-21 10:18:22
-- 服务器版本： 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wyunh`
--

-- --------------------------------------------------------

--
-- 表的结构 `nh_img`
--

CREATE TABLE IF NOT EXISTS `nh_img` (
  `id` int(10) unsigned NOT NULL,
  `imgName` varchar(50) NOT NULL,
  `imgPath` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `nh_img`
--

INSERT INTO `nh_img` (`id`, `imgName`, `imgPath`) VALUES
(1, '五邑大學', 'http://7xizst.com1.z0.glb.clouddn.com/post_01.jpg'),
(2, '北仰星空', 'http://7xizst.com1.z0.glb.clouddn.com/post_02.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nh_img`
--
ALTER TABLE `nh_img`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nh_img`
--
ALTER TABLE `nh_img`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
