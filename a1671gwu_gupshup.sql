-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 20, 2023 at 02:45 PM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a1671gwu_gupshup`
--

-- --------------------------------------------------------

--
-- Table structure for table `automation_whatsapp`
--

CREATE TABLE `automation_whatsapp` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_number` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('not_sent','sent') COLLATE utf8_unicode_ci DEFAULT NULL,
  `response` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uploaded_by` int(11) DEFAULT NULL,
  `created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `password_enc` varchar(100) DEFAULT NULL,
  `phone` varchar(256) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` enum('Male','Female','','') DEFAULT NULL,
  `role` enum('superadmin','admin','user','keyperson') NOT NULL DEFAULT 'user',
  `otp` int(11) DEFAULT NULL,
  `verified_status` enum('active','inactive','','') NOT NULL DEFAULT 'inactive',
  `address` text,
  `country` int(11) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `other_state` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `other_city` varchar(256) DEFAULT NULL,
  `profession` varchar(256) DEFAULT NULL,
  `other_profession` varchar(256) DEFAULT NULL,
  `activationKey` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `password_enc`, `phone`, `age`, `gender`, `role`, `otp`, `verified_status`, `address`, `country`, `state`, `other_state`, `city`, `other_city`, `profession`, `other_profession`, `activationKey`) VALUES
(1, 'admin', 'admin', 'f1c2da7f958a6aa7245e2309144c8003', 'admin@123@321', '9910341153', 30, 'Male', 'superadmin', 7813, 'active', '1224', 101, 'New', '', NULL, NULL, 'Business', '', 'ef35816092d6618d0239ae594f0c5f05'),
(2, 'admin1', 'admin1', 'fa2c1fd5ceecba7a418f3bfd79a7f243', 'admin@321admin2', '9910341153', 20, 'Male', 'superadmin', 7813, 'active', '1224', 101, 'New', '', NULL, NULL, 'Business', '', 'ef35816092d6618d0239ae594f0c5f05');

-- --------------------------------------------------------

--
-- Table structure for table `whatsapp_contacts`
--

CREATE TABLE `whatsapp_contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(256) DEFAULT NULL,
  `contact_number` varchar(50) DEFAULT NULL,
  `status` enum('not_sent','sent') DEFAULT NULL,
  `response` varchar(256) DEFAULT NULL,
  `uploaded_by` int(11) DEFAULT NULL,
  `gupshup_status` varchar(100) DEFAULT NULL,
  `message_id` varchar(256) DEFAULT NULL,
  `created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `whatsapp_contacts`
--

INSERT INTO `whatsapp_contacts` (`id`, `name`, `contact_number`, `status`, `response`, `uploaded_by`, `gupshup_status`, `message_id`, `created`) VALUES
(9, 'Kshama', '918299125651', 'sent', NULL, 2, 'submitted', '062db52f-c9ce-4290-b482-f3bd848b23c5', '2023-09-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `automation_whatsapp`
--
ALTER TABLE `automation_whatsapp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whatsapp_contacts`
--
ALTER TABLE `whatsapp_contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `automation_whatsapp`
--
ALTER TABLE `automation_whatsapp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `whatsapp_contacts`
--
ALTER TABLE `whatsapp_contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
