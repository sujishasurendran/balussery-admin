-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 15, 2020 at 05:31 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

DROP TABLE IF EXISTS `banner`;
CREATE TABLE IF NOT EXISTS `banner` (
  `banner_id` int(11) NOT NULL AUTO_INCREMENT,
  `banner_title` varchar(500) NOT NULL,
  `banner_image` varchar(500) NOT NULL,
  PRIMARY KEY (`banner_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_title`, `banner_image`) VALUES
(15, 'ghfghf', '1608053360-carusel1.jpg'),
(16, 'ytytyt', '1608053368-image.png'),
(17, 'ttrtr', '1608053383-carusel2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `post_img` varchar(500) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `title`, `description`, `post_img`) VALUES
(1, 'gg', 'ghfghf', '1608046396-image.jpg'),
(2, 'ttyty', 'ftfff', '1608046427-post8.png'),
(3, 'yyyut', 'yyutyt', '1608047391-image.jpg'),
(4, 'tyyt', 'rtr5r', '1608047564-post8.png'),
(5, 'trrtyrtyr', 'rtrtr', '1608047618-post9.png'),
(6, 'tyutyuty', 'ttyuty', '1608047862-image.png'),
(7, 'fgfgf', 'ggf', '1608049460-image2.jpg'),
(8, 'tyutyut', 'yuuu', '1608049595-image2.jpg'),
(9, 'tuyt', 'yyu', '1608049607-image.jpg'),
(10, 'tuyt', 'tftyft', '1608049622-post9.png'),
(11, 'gghg', 'ghh', '1608049636-image2.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
