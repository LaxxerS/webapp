-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 06, 2014 at 06:17 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `password2` varchar(32) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `signupdate` datetime NOT NULL,
  `accounttype` varchar(25) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `gender`, `username`, `password`, `password2`, `email_address`, `signupdate`, `accounttype`) VALUES
(1, 'aaaa', 'aaaa', 'female', 'aaaa', '07d22a19071a2b06e207dd38b246a8cb', '07d22a19071a2b06e207dd38b246a8cb', 'aa@hotmail.com', '2014-09-06 17:40:34', 'user'),
(2, 'aaaa', 'aaaa', 'male', 'aaaaa', '87e382e5c88a9718afb3c296127d959f', '87e382e5c88a9718afb3c296127d959f', 'aa@hotmail.com', '2014-09-06 17:45:52', 'user'),
(3, 'aaaa', 'aaaa', 'male', 'aaaaaa', '87e382e5c88a9718afb3c296127d959f', '87e382e5c88a9718afb3c296127d959f', 'aa@hotmail.com', '2014-09-06 17:46:49', 'user'),
(4, 'aaaa', 'aaaa', 'male', 'aaaaaaa', '87e382e5c88a9718afb3c296127d959f', '87e382e5c88a9718afb3c296127d959f', 'aa@hotmail.com', '2014-09-06 17:48:15', 'user'),
(5, 'aaaa', 'aaaa', 'male', 'aaaaaaaa', '87e382e5c88a9718afb3c296127d959f', '87e382e5c88a9718afb3c296127d959f', 'aa@hotmail.com', '2014-09-06 18:05:08', 'user'),
(6, 'b', 'b', 'male', 'bbbb', '87e382e5c88a9718afb3c296127d959f', '87e382e5c88a9718afb3c296127d959f', 'aa@hotmail.com', '2014-09-06 00:00:00', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
