-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生日期: 2013 年 12 月 12 日 11:14
-- 伺服器版本: 5.6.12-log
-- PHP 版本: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `demo1`
--
CREATE DATABASE IF NOT EXISTS `demo1` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `demo1`;

-- --------------------------------------------------------

--
-- 表的結構 `aaa`
--

CREATE TABLE IF NOT EXISTS `aaa` (
  `Num` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `list` int(11) NOT NULL,
  `abc` int(11) DEFAULT NULL,
  PRIMARY KEY (`Num`),
  KEY `abc` (`abc`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=42447 ;

--
-- 轉存資料表中的資料 `aaa`
--

INSERT INTO `aaa` (`Num`, `date`, `Name`, `list`, `abc`) VALUES
(42439, '0000-00-00 00:00:00', '3dfyt', 0, 42439),
(42440, '0000-00-00 00:00:00', 'fjtftkjfkulkgy', 0, 42439),
(42442, '0000-00-00 00:00:00', '1', 0, 42442),
(42444, '0000-00-00 00:00:00', '', 0, NULL),
(42445, '0000-00-00 00:00:00', '', 0, NULL),
(42446, '0000-00-00 00:00:00', '121', 0, NULL);

--
-- 匯出資料表的 Constraints
--

--
-- 資料表的 Constraints `aaa`
--
ALTER TABLE `aaa`
  ADD CONSTRAINT `aaa_ibfk_1` FOREIGN KEY (`abc`) REFERENCES `aaa` (`num`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
