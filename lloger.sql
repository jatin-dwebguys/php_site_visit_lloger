-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 02, 2013 at 06:03 PM
-- Server version: 5.5.31
-- PHP Version: 5.3.10-1ubuntu3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lloger`
--

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `site_id`, `content`) VALUES
(5, '51d29dd2d9967', '{"l":"http:\\/\\/localhost\\/abc.html","r":"","u":"51d29dd2d9967","i":"127.0.0.1","t":"2013-07-02 17:22"}'),
(6, '51d29dd2d9967', '{"l":"http:\\/\\/localhost\\/abc.html","r":"","u":"51d29dd2d9967","i":"127.0.0.1","t":"2013-07-02 17:22"}'),
(7, '51d29dd2d9967', '{"l":"http:\\/\\/localhost\\/abc.html","r":"","u":"51d29dd2d9967","i":"127.0.0.1","t":"2013-07-02 17:22"}'),
(8, '51d29dd2d9967', '{"l":"http:\\/\\/localhost\\/abc.html","r":"","u":"51d29dd2d9967","i":"127.0.0.1","t":"2013-07-02 17:22:50"}'),
(9, '51d29dd2d9967', '{"l":"http:\\/\\/localhost\\/abc.html","r":"","u":"51d29dd2d9967","i":"127.0.0.1","t":"2013-07-02 17:49:18"}'),
(10, '51d29dd2d9967', '{"l":"http:\\/\\/localhost\\/abc.html","r":"","u":"51d29dd2d9967","i":"127.0.0.1","t":"2013-07-02 17:49:28"}'),
(11, '51d29dd2d9967', '{"l":"http:\\/\\/localhost\\/abc.html","r":"http:\\/\\/localhost\\/","u":"51d29dd2d9967","i":"127.0.0.1","t":"2013-07-02 17:55:03"}');

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE IF NOT EXISTS `sites` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`id`, `name`, `url`) VALUES
('51d29dd2d9967', 'Familug', 'http://www.familug.org/'),
('51d29dfeae8e9', 'Yoci Thailand', 'http://www.yocithailan.info/');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
