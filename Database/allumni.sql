-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 27, 2019 at 01:14 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `allumni`
--
CREATE DATABASE IF NOT EXISTS `allumni` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `allumni`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_update`
--

CREATE TABLE IF NOT EXISTS `admin_update` (
  `sr_no` int(11) NOT NULL,
  `admin_fname` varchar(10) NOT NULL,
  `admin_lname` varchar(10) NOT NULL,
  `admin_email` varchar(30) NOT NULL,
  `admin_mob` int(10) NOT NULL,
  `admin_dob` int(10) NOT NULL,
  `admin_course` varchar(15) NOT NULL,
  `admin_gender` varchar(10) NOT NULL,
  `admin_picture` varchar(300) NOT NULL,
  `admin_address` varchar(30) NOT NULL,
  `admin_city` varchar(20) NOT NULL,
  `admin_role` varchar(20) NOT NULL,
  `admin_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feed_id` int(10) NOT NULL AUTO_INCREMENT,
  `feed_name` varchar(20) NOT NULL,
  `feed_address` varchar(30) NOT NULL,
  `feed_email` varchar(30) NOT NULL,
  `feed_query` varchar(500) NOT NULL,
  PRIMARY KEY (`feed_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `feed_name`, `feed_address`, `feed_email`, `feed_query`) VALUES
(27, 'gauri', 'baramati', 'vanvegauri1@gmail.com', 'hi'),
(32, 'saie', 'Mahad', 'vadkesaie11@gmail.com', 'dattakala is my favourite college'),
(33, 'saie', 'Mahad', 'vadkesaie11@gmail.com', 'dattakala is my favourite college');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `sr_no` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `std_name` varchar(30) NOT NULL,
  `post_title` varchar(150) NOT NULL,
  `post_disc` varchar(5000) DEFAULT NULL,
  `post_date` varchar(100) NOT NULL,
  `post_status` varchar(12) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`sr_no`, `email`, `std_name`, `post_title`, `post_disc`, `post_date`, `post_status`) VALUES
(26, '', '', 'Admission for hotel management....', 'Dattakala Polytechnic swami chincholi bhigwan...\r\n', '2019-03-25', '2'),
(28, '', '', 'Best Computer courses to study to get jobs easily!!!!', 'Students must choose courses wisely. One must always choose courses that promise jobs. Jobs are limited nowadays. But the competition for jobs is ever increasing! This has led to unemployment of large number of qualified young men and women. This is where computer courses come handy. These computer courses are usually completed in less time. Further, they guarantee easy jobs. Here, I will introduce to you some best computer courses (job opportunity wise).\r\ncomputer courses to get a job\r\n\r\nWikimedia Commons\r\n\r\nIndia is fast growing in the field of IT (Information Technology). According to some reports, the revenue generated from IT exports in the year 2012 was more than $100 Billion! Thus IT offers great opportunities.', '2019-03-25', '1'),
(35, '', '', 'Hardware & Network Engineer', 'Aforeserve.com Ltd 97 reviews Gandhidham, Gujarat +1 location â‚¹8,000 - â‚¹10,000 a month Hardware Networking Configuration. Freshers can also apply. Basic Server Support.... Apply securely with Indeed Resume ', 'Monday 25th of March 2019 02:47:36 PM', '2'),
(36, 'vadkesaie@gmail.com', '', 'df;lsdkf;dsvfv', 'fddfb', 'Wednesday 27th of March 2019 10:28:24 AM', '1'),
(37, 'poonamdede@gmail.com', '', 'dattakala polytechnic..', 'computer students...', 'Wednesday 27th of March 2019 11:51:03 AM', '1'),
(38, 'poonamdede@gmail.com', 'poonam dede', 'dattakala polytechnic..', 'admission open for students', 'Wednesday 27th of March 2019 12:01:16 PM', '1'),
(39, 'vanve@gmail.com', 'Gauri Vanve', 'dk', 'computer', 'Wednesday 27th of March 2019 12:03:23 PM', '1');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `sr_no` int(10) NOT NULL AUTO_INCREMENT,
  `std_fname` varchar(50) NOT NULL,
  `std_lname` varchar(50) NOT NULL,
  `std_email` varchar(50) NOT NULL,
  `std_mobile` varchar(10) NOT NULL,
  `std_dob` varchar(20) NOT NULL,
  `std_course` varchar(50) NOT NULL,
  `std_gender` varchar(30) NOT NULL,
  `std_address` varchar(50) NOT NULL,
  `std_city` varchar(50) NOT NULL,
  `std_type` varchar(30) NOT NULL,
  `std_password` varchar(50) NOT NULL,
  `std_picture` varchar(255) NOT NULL,
  `std_question` varchar(300) NOT NULL,
  `std_ans` varchar(100) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`sr_no`, `std_fname`, `std_lname`, `std_email`, `std_mobile`, `std_dob`, `std_course`, `std_gender`, `std_address`, `std_city`, `std_type`, `std_password`, `std_picture`, `std_question`, `std_ans`) VALUES
(8, 'Saie', 'vadke', 'vadkesaie@gmail.com', '9075044778', '2019-03-13', 'Computer', 'Female', 'bilt bhigwan', 'baramati', 'Allumni student', 'saie', 'clg_logo11.png_Monday25thofMarch2019111852AM.png', 'Current student', 'reo'),
(9, 'punam', 'saykar', 'saykarpunam99@gmail.com', '2147483647', '2019-03-27', 'E&TC', 'Female', 'rashin ', 'bhigwan', 'Allumni student', 'punam', 'face.jpg_Monday25thofMarch2019085127AM.jpg', 'Current student', 'punam'),
(10, 'gauri', 'vanve', 'vanve@gmail.com', '2147483647', '2019-03-29', 'Electrical', 'Female', 'baramati', 'baramati', 'Current Student', 'gauri', 'login.png_Monday25thofMarch2019085306AM.png', 'Current student', 'gauri'),
(11, 'kishor', 'kumbhar', 'kishorkumbhar13899@gmail.com', '2147483647', '2019-03-23', 'Mechanical', 'Male', 'xczc', 'zxz', 'Allumni student', 'kishor', 'clg_logo11.png_Monday25thofMarch2019091123AM.png', 'Current student', 'kishor'),
(12, 'poonam', 'dede', 'poonamdede@gmail.com', '9960141484', '1999-03-21', 'Computer', 'Female', 'baramati', 'baramati', 'Allumni student', 'poonam', 'poonam', 'Current student', 'poonam');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `mob` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `update`
--

CREATE TABLE IF NOT EXISTS `update` (
  `std_fname` varchar(30) NOT NULL,
  `std_lname` varchar(20) NOT NULL,
  `std_email` varchar(30) NOT NULL,
  `std_mobile` int(10) NOT NULL,
  `std_dob` varchar(20) NOT NULL,
  `std_course` varchar(30) NOT NULL,
  `std_gender` varchar(10) NOT NULL,
  `std_picture` varchar(255) NOT NULL,
  `std_address` varchar(30) NOT NULL,
  `std_city` varchar(30) NOT NULL,
  `std_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `update_status`
--

CREATE TABLE IF NOT EXISTS `update_status` (
  `sr_no` int(10) NOT NULL AUTO_INCREMENT,
  `std_email` varchar(34) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_workarea` varchar(50) NOT NULL,
  `company_position` varchar(50) NOT NULL,
  `company_organization` varchar(50) NOT NULL,
  `company_salary` int(50) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `update_status`
--

INSERT INTO `update_status` (`sr_no`, `std_email`, `company_name`, `company_workarea`, `company_position`, `company_organization`, `company_salary`) VALUES
(1, 'vadkesaie@gmail.com', 'Dattakala Shikshan Sanstha', 'PHP', 'Designer', 'dattakala', 12323);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
