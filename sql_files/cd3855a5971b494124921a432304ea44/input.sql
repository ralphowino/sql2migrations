<?php die(); ?>

-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 21, 2013 at 10:24 AM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `moblized`
--

-- --------------------------------------------------------

--
-- Table structure for table `mo_app_applications`
--

CREATE TABLE `mo_app_applications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `featured_app_from_date` date NOT NULL,
  `featured_app_to_date` date NOT NULL,
  `company_id` int(11) NOT NULL,
  `rating_cache` float NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `icon` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `screenshot` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mo_app_application_meta`
--

CREATE TABLE `mo_app_application_meta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `application_id` int(11) NOT NULL,
  `meta_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mo_app_application_ratings`
--

CREATE TABLE `mo_app_application_ratings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `application_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mo_app_blogs`
--

CREATE TABLE `mo_app_blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mo_app_blog_comments`
--

CREATE TABLE `mo_app_blog_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `body` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mo_app_blog_meta`
--

CREATE TABLE `mo_app_blog_meta` (
  `blog_id` int(11) NOT NULL,
  `meta_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mo_app_companies`
--

CREATE TABLE `mo_app_companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `picture_url` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mo_app_countries`
--

CREATE TABLE `mo_app_countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mo_app_logs`
--

CREATE TABLE `mo_app_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `application_id` int(11) NOT NULL,
  `action` varchar(64) NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `value_from` text NOT NULL,
  `value_to` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mo_app_meta_info`
--

CREATE TABLE `mo_app_meta_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(64) NOT NULL,
  `value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=113 ;

--
-- Dumping data for table `mo_app_meta_info`
--

INSERT INTO `mo_app_meta_info` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'app_integration', 'Facebook', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'app_integration', 'Twitter', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'app_integration', 'Quickbooks Intuit', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'app_integration', 'Salesforce', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'app_integration', 'NetSuite', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'app_integration', 'Gmail', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'app_integration', 'eBay', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'app_integration', 'Amazon', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'app_integration', 'WordPress', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'app_integration', 'Paypal', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'app_integration', 'Google Checkout', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'app_integration', 'Etsy', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'app_integration', 'Magento', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'app_integration', 'YouTube', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'app_integration', 'Giropay', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'app_integration', 'WebMoney', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'app_integration', 'Alipay', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'app_integration', 'Stripe', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'app_integration', 'Google Apps', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'app_integration', 'Mail Chimp', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'app_device_supported', 'Android Phone', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'app_device_supported', 'Android Tablet', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'app_device_supported', 'iPhone', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'app_device_supported', 'iPad', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'app_device_supported', 'Blackberry', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'app_device_supported', 'Mobile Web App', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'app_device_supported', 'Windows', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'app_device_supported', 'Windows Phone', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'app_device_supported', 'Mac', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'app_device_supported', 'Cloud', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'app_device_supported', 'Linux', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'app_country', 'Asia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'app_country', 'Australia', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'app_country', 'Canada', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'app_country', 'China', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'app_country', 'Europe', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'app_country', 'Germany', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'app_country', 'India', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'app_country', 'Japan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'app_country', 'Latin America', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'app_country', 'Middle-East', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'app_country', 'United Kingdom', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'app_country', 'United States', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'app_country', 'Mexico', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'app_country', 'Africa Nations', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'app_language', 'English', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'app_language', 'Spanish', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'app_language', 'French', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'app_language', 'Italian', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'app_language', 'German', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'app_language', 'Japanese', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'app_language', 'Chinese (T)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'app_language', 'Chinese (S)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'app_language', 'Arabic', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'app_language', 'Czech', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 'app_language', 'Danish', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'app_language', 'Dutch', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 'app_language', 'Finnish', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 'app_language', 'Hebrew', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 'app_language', 'Hungarian', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'app_language', 'Indonesian', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 'app_language', 'Korean', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'app_language', 'Norwegian', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 'app_language', 'Polish', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 'app_language', 'Portuguese', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 'app_language', 'Russian', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 'app_language', 'Swedish', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 'app_language', 'Turkish', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 'app_language', 'Ukrainian', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 'app_language', 'Taiwanese', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 'app_language', 'Thai', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 'app_price_model', 'Free Trial', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 'app_price_model', 'Freemium', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 'app_price_model', 'Single Purchase', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 'app_price_model', 'Subscription', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 'app_price_model', 'Transaction Fees', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 'app_deployment_type', 'SAAS', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 'app_deployment_type', 'Cloud', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 'app_deployment_type', 'Client Server', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 'app_deployment_type', 'Mobile App', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 'app_category', 'Affiliate Marketing Software', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 'app_category', 'Analytics Software', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 'app_category', 'Billing and Invoicing Software', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 'app_category', 'Crowd Funding', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 'app_category', 'Ecommerce Platform', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 'app_category', 'Loyalty/Rewards', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 'app_category', 'Order Management (ecommerce)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 'app_category', 'Payment Gateways', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 'app_category', 'Payment Platforms (mobile & ecommerce combined)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 'app_category', 'Point of Sale', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 'app_category', 'Shopping Carts', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 'app_category', 'Social Payments', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 'app_category', 'Ticketing (For events)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 'app_category', 'Wordpress Commerce', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 'app_category', 'Customer Service Software', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 'app_category', 'Mobile Commerce Tools', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 'app_category', 'Ecommerce Tools', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 'app_category', 'Email Marketing Software', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 'app_category', 'Landing Page Software', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 'app_category', 'Social CRM Software', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 'app_category', 'Reporting and Dashboard Software', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 'app_category', 'Online CRM Software', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 'app_category', 'Survey Software', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 'app_category', 'Inventory Management', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 'app_category', 'Accounting Software', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 'app_category', 'Inventory Management', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 'app_category', 'Digital Goods Sales', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 'app_category', 'Payment Processor (ISO)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 'app_category', 'Mobile Ordering & Delivery', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, 'app_category', 'Video Commerce', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 'blog_category', 'apps', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, 'blog_category', 'general', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `mo_app_states`
--

CREATE TABLE `mo_app_states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mo_app_users`
--

CREATE TABLE `mo_app_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `user_type` int(10) unsigned NOT NULL DEFAULT '0',
  `linkedin_uid` varchar(255) DEFAULT NULL,
  `linkedin_token` varchar(255) DEFAULT NULL,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `city` varchar(64) NOT NULL,
  `state` int(11) NOT NULL,
  `zip` varchar(16) NOT NULL,
  `country` int(11) NOT NULL,
  `phone` varchar(32) NOT NULL,
  `cellphone` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
