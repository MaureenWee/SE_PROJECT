-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2022 at 10:00 AM
-- Server version: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: db
--

-- --------------------------------------------------------

--
-- Table structure for table book
--

CREATE TABLE IF NOT EXISTS book (
  fullname varchar(100) NOT NULL,
  telnumber varchar(20) NOT NULL,
  baddress varchar(200) NOT NULL,
  adate varchar(20) NOT NULL,
  services varchar(100) NOT NULL,
  brand varchar(100) NOT NULL,
  aircontype varchar(100) NOT NULL,
  warranty varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table contact
--

CREATE TABLE IF NOT EXISTS contact (
  contactname varchar(100) NOT NULL,
  contactemail varchar(100) NOT NULL,
  contactsubject varchar(100) NOT NULL,
  contactmessage varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;