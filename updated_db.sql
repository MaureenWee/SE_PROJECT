-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 18, 2022 at 03:46 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`admin_id`, `username`, `phone`, `email`, `password`) VALUES
(1, 'test', NULL, 'test@yahoo.com', '$2y$12$IvnXxRyCtn82QM5x/XUYHuhYeXDei/IswqjKjVmkqZeMHFv1uLiJ.');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` bigint(10) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `telnumber` varchar(20) NOT NULL,
  `baddress` varchar(200) NOT NULL,
  `adate` varchar(20) NOT NULL,
  `services` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `aircontype` varchar(100) NOT NULL,
  `warranty` varchar(100) NOT NULL,
  `booking_status` int(10) NOT NULL COMMENT '0 - Pending, 1 - Approved, 2 - Declined'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `fullname`, `telnumber`, `baddress`, `adate`, `services`, `brand`, `aircontype`, `warranty`, `booking_status`) VALUES
(1, 'Alexis Esperas ASico', '09222222222', 'Loans', '05/05/2022', 'Aircon Cleaning', 'Fujidenzo', 'Split Type', 'In-Warranty', 1),
(2, 'Alexis Esperas ASico', '09222222222', 'Loans', '05/05/2022', 'Aircon Cleaning', 'Fujidenzo', 'Split Type', 'In-Warranty', 0),
(4, 'Alexis Escobar', '12312312312', 'Loan shark', '05/11/2022', 'Aircon Cleaning', 'Asahi', 'Split Type', 'In-Warranty', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` bigint(20) NOT NULL,
  `contactname` varchar(100) NOT NULL,
  `contactemail` varchar(100) NOT NULL,
  `contactsubject` varchar(100) NOT NULL,
  `contactmessage` varchar(100) NOT NULL,
  `is_read` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contactname`, `contactemail`, `contactsubject`, `contactmessage`, `is_read`) VALUES
(1, 'Hi', 'Hello@hello.copm', 'MAthemateks', 'misdeasd', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
