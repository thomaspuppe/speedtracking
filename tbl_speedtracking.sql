-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
-- Server version: 5.5.15
-- PHP Version: 5.2.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_speedtracking`
--

CREATE TABLE IF NOT EXISTS `tbl_speedtracking` (
  `domain` varchar(256) CHARACTER SET latin1 DEFAULT NULL,
  `page` varchar(256) CHARACTER SET latin1 DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `browser` varchar(256) CHARACTER SET latin1 DEFAULT NULL,
  `domainlookup` int(11) DEFAULT NULL,
  `connection` int(11) DEFAULT NULL,
  `waiting` int(11) DEFAULT NULL,
  `transfer` int(11) DEFAULT NULL,
  `dombuilding` int(11) DEFAULT NULL,
  `onloadevents` int(11) DEFAULT NULL,
  `sum` bigint(20) DEFAULT NULL,
  `referer` varchar(256) CHARACTER SET latin1 DEFAULT NULL,
  `originalstring` varchar(256) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
