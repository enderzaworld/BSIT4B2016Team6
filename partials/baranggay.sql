-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2016 at 01:54 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `baranggay`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `acc_id` int(11) NOT NULL AUTO_INCREMENT,
  `acc_user` varchar(255) NOT NULL,
  `acc_pass` varchar(255) NOT NULL,
  `acc_type` int(11) NOT NULL DEFAULT '2' COMMENT '1-admin,2-user,3-guest',
  `info_name` varchar(255) NOT NULL,
  `info_address` varchar(255) NOT NULL,
  `info_citizenship` varchar(255) NOT NULL,
  `info_sex` varchar(10) NOT NULL,
  `info_civil_status` varchar(30) NOT NULL,
  `info_birthdate` timestamp NOT NULL,
  `info_birthplace` varchar(255) NOT NULL,
  `info_height` int(11) NOT NULL,
  `info_weight` int(11) NOT NULL,
  `info_may_trabaho` int(1) NOT NULL COMMENT '0-wala, 1-meron',
  `info_trabaho` varchar(255) NOT NULL,
  `info_sahod` int(11) NOT NULL,
  `info_tin_no` int(11) NOT NULL,
  `info_contact_no` varchar(255) NOT NULL,
  `info_contact_person` varchar(255) NOT NULL,
  `info_contact_person_no` varchar(255) NOT NULL,
  PRIMARY KEY (`acc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`acc_id`, `acc_user`, `acc_pass`, `acc_type`, `info_name`, `info_address`, `info_citizenship`, `info_sex`, `info_civil_status`, `info_birthdate`, `info_birthplace`, `info_height`, `info_weight`, `info_may_trabaho`, `info_trabaho`, `info_sahod`, `info_tin_no`, `info_contact_no`, `info_contact_person`, `info_contact_person_no`) VALUES
(1, 'admin', 'admin', 1, '', '', '', '', '', '0000-00-00 00:00:00', '', 0, 0, 0, '', 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `audit_trail`
--

CREATE TABLE IF NOT EXISTS `audit_trail` (
  `at_id` int(11) NOT NULL AUTO_INCREMENT,
  `at_message` text NOT NULL,
  `acc_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`at_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `clearance`
--

CREATE TABLE IF NOT EXISTS `clearance` (
  `c_id` int(11) NOT NULL DEFAULT '0',
  `acc_id` int(11) DEFAULT NULL,
  `c_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `c_amount` int(11) NOT NULL,
  `c_ctc_no` int(11) NOT NULL,
  `c_l_name` varchar(255) NOT NULL,
  `c_f_name` varchar(255) NOT NULL,
  `c_m_name` varchar(255) NOT NULL,
  `c_birthplace` varchar(255) NOT NULL,
  `c_gender` varchar(10) NOT NULL,
  `c_age` int(11) NOT NULL,
  `c_civil_status` varchar(30) NOT NULL,
  `c_length_of_stay_years` int(11) NOT NULL,
  `c_length_of_stay_months` int(11) NOT NULL,
  `c_birthday` timestamp NOT NULL,
  `c_father` varchar(255) NOT NULL,
  `c_mother` varchar(255) NOT NULL,
  `c_barangay` varchar(255) NOT NULL,
  `c_street` varchar(255) NOT NULL,
  `c_house_no` varchar(255) NOT NULL,
  `c_cellphone_no` varchar(255) NOT NULL,
  `c_telephone_no` varchar(255) NOT NULL,
  `c_purpose` varchar(255) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `indigency`
--

CREATE TABLE IF NOT EXISTS `indigency` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `acc_id` int(11) DEFAULT NULL,
  `i_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `i_l_name` varchar(255) NOT NULL,
  `i_f_name` varchar(255) NOT NULL,
  `i_m_name` varchar(255) NOT NULL,
  `i_civil_status` varchar(30) NOT NULL,
  `i_gender` varchar(10) NOT NULL,
  `i_age` int(11) NOT NULL,
  `i_ml_name` varchar(255) NOT NULL,
  `i_mm_name` varchar(255) NOT NULL,
  `i_barangay` varchar(255) NOT NULL,
  `i_street` varchar(255) NOT NULL,
  `i_house_no` varchar(255) NOT NULL,
  `i_cellphone_no` text NOT NULL,
  `i_length_of_stay_years` int(11) NOT NULL,
  `i_length_of_stay_months` int(11) NOT NULL,
  `i_purpose` varchar(255) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sotoda`
--

CREATE TABLE IF NOT EXISTS `sotoda` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `acc_id` int(11) DEFAULT NULL,
  `s_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `s_name` varchar(255) NOT NULL,
  `s_tel_no` varchar(255) NOT NULL,
  `s_address` varchar(255) NOT NULL,
  `s_religion` varchar(255) NOT NULL,
  `s_date_of_birth` varchar(255) NOT NULL,
  `s_place_of_birth` varchar(255) NOT NULL,
  `s_age` int(11) NOT NULL,
  `s_sex` varchar(10) NOT NULL,
  `s_civil_status` varchar(255) NOT NULL,
  `s_occupation` varchar(255) NOT NULL,
  `s_spouse_name` varchar(255) NOT NULL,
  `s_spouse_occupation` varchar(255) NOT NULL,
  `s_name_of_drivers/address/drivers_sidecar` text NOT NULL,
  `s_body_no_for_tru` varchar(255) NOT NULL,
  `s_plate_no` varchar(255) NOT NULL,
  `s_muffler` int(11) NOT NULL,
  `s_headlight` int(11) NOT NULL,
  `s_signal_light` int(11) NOT NULL,
  `s_trash_can` int(11) NOT NULL,
  `s_inspector_name` int(11) NOT NULL COMMENT 'signiture',
  `s_inspection_datetime` timestamp NOT NULL,
  `s_ctc_no` int(11) NOT NULL,
  `s_place_of_issue` varchar(255) NOT NULL,
  `s_issued_on` timestamp NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
