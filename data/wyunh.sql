-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015-09-11 08:58:05
-- 服务器版本： 5.6.26
-- PHP Version: 5.5.27

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
  `imgPath` text NOT NULL,
  `mp3Name` varchar(50) NOT NULL,
  `mp3Path` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `nh_img`
--

INSERT INTO `nh_img` (`id`, `imgName`, `imgPath`, `mp3Name`, `mp3Path`) VALUES
(1, '五邑大學', 'http://7xizst.com1.z0.glb.clouddn.com/post_01.jpg', '给所有知道我名字的人 - 羽·泉', 'http://7xizst.com1.z0.glb.clouddn.com/01.给所有知道我名字的人%20-%20羽·泉.mp3'),
(2, '北仰星空', 'http://7xizst.com1.z0.glb.clouddn.com/post_02.jpg', '夜空中最亮的星 - 逃跑计划', 'http://7xizst.com1.z0.glb.clouddn.com/02.夜空中最亮的星%20-%20逃跑计划.mp3'),
(3, '鴿子流雲', 'http://7xizst.com1.z0.glb.clouddn.com/post_03.jpg', '风继续吹 - 张国荣', 'http://7xizst.com1.z0.glb.clouddn.com/03.风继续吹%20-%20张国荣.mp3');

-- --------------------------------------------------------

--
-- 表的结构 `nh_user`
--

CREATE TABLE IF NOT EXISTS `nh_user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `nh_user`
--

INSERT INTO `nh_user` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

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
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
