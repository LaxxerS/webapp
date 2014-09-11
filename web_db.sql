-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 11, 2014 at 01:15 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web_db`
--
CREATE DATABASE IF NOT EXISTS `web_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `web_db`;

-- --------------------------------------------------------

--
-- Table structure for table `checkout_info`
--

CREATE TABLE IF NOT EXISTS `checkout_info` (
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip_postal` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `shipping` varchar(255) NOT NULL,
  `prouduct_cost_total` int(11) NOT NULL,
  `total_selling_price` int(11) NOT NULL,
  `checkout_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`checkout_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `checkout_info`
--

INSERT INTO `checkout_info` (`first_name`, `last_name`, `email`, `address`, `country`, `city`, `state`, `zip_postal`, `phone`, `shipping`, `prouduct_cost_total`, `total_selling_price`, `checkout_id`) VALUES
('Charles', 'Major', 'user@example.com', '123, Street 2', 'Malaysia', 'Seremban', 'Negeri Sembilan', 0, 12, 'ship', 140, 169, 1),
('Charles', 'Major', 'user@example.com', '123, Street 2', 'Malaysia', 'Seremban', 'Negeri Sembilan', 0, 12, 'ship', 300, 500, 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_quantity` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_cost_price` decimal(13,2) NOT NULL,
  `product_selling_price` decimal(13,2) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_description` varchar(1000) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_quantity`, `product_name`, `product_cost_price`, `product_selling_price`, `product_image`, `product_description`) VALUES
(1, 10, 'Wool Alaskan Shirt', '80.00', '90.00', '', 'Aenean eu leo quam Pellentesque ornare sem lacinia quam venenatis vestibulu Lorem ipsum dolor sit amet'),
(2, 10, 'Homespun Flannel Shirt', '50.00', '78.00', '', 'Integer posuere erat a ante venenatis dapibus posuere velit aliquet Maecenas faucibus mollis interdum Fusce'),
(3, 10, 'Blue Cotton Coat', '60.00', '79.00', '', 'Integer posuere erat a ante venenatis dapibus posuere velit aliquet Maecenas faucibus mollis interdum Fusce'),
(4, 10, 'Boots', '200.00', '250.00', '', 'Etiam porta sem malesuada magna mollis euismod Fusce dapibus tellus ac cursus commodo tortor mauris condimentum'),
(5, 10, 'Leather Suitcase', '300.00', '499.99', '', 'Lorem ipsum dolor sit ame consectetur adipiscing elit Morbi leo risus porta ac consectetur ac vestibulum at eros'),
(6, 10, 'Wool Blanket', '150.00', '199.99', '', 'Aenean eu leo quam Pellentesque ornare sem lacinia quam venenatis vestibulum Integer posuere erat');

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
  `phone` varchar(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `gender`, `username`, `password`, `password2`, `email_address`, `signupdate`, `accounttype`, `phone`) VALUES
(1, 'Nicole', 'Minor', '', 'admin', 'cd76eac5d2152ec608f3a5b013814a91', 'cd76eac5d2152ec608f3a5b013814a91', 'admin@example.com', '2014-09-11 00:00:00', 'admin', '012-3456789'),
(2, 'Charles', 'Major', '', 'user', 'cd76eac5d2152ec608f3a5b013814a91', 'cd76eac5d2152ec608f3a5b013814a91', 'user@example.com', '2014-09-11 00:00:00', 'user', '012-3645789');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
