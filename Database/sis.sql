-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2015 at 03:25 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(2) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(20) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_password`, `admin_email`) VALUES
(1, 'admin', 'pass', 'email@example.comm'),
(2, 'ashik', '1122', 'asd@hotmail.com'),
(5, 'Pintu ', '112233', 'ASD@gmail.com'),
(6, 'Hasib', '12345', 'hasib.al.hasan@gmail.com'),
(7, 'Saba', '12345', 'saba@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `d_name` varchar(50) NOT NULL,
  `d_password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `d_name`, `d_password`) VALUES
(1, 'Dr. Silpy', '1234'),
(2, 'Dr. Ajijul Haque', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `problem` varchar(500) NOT NULL,
  `solution` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `age`, `sex`, `phone`, `problem`, `solution`) VALUES
(2, 'Ashik', 23, '35', '0172', 'problem', 'sa'),
(5, 'Pintu', 28, '70', '0172093', 'Fever', 'Paracitamal twice a day after meal');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
