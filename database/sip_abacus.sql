-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2026 at 07:08 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sip_abacus`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `centre_status` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `full_name`, `email`, `phone`, `pincode`, `centre_status`, `created_at`) VALUES
(1, 'Suvam Bhadra', 'suvam@gmail.com', '7439164378', '700081', 'have_centre', '2026-02-13 11:03:24'),
(2, 'Suvankar Dutta', 'suva@gmail.com', '9876543210', '700051', 'have_centre', '2026-02-15 07:03:04'),
(3, 'Samragni Biswas', 'samragni@gmail.com', '8370813555', '700010', 'new_centre', '2026-02-15 07:33:04'),
(4, 'Aditya Singh', 'adi@gmail.com', '9876543210', '700081', 'new_centre', '2026-02-19 13:21:30');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(9, 'Jhuma Bhadra', 'jhumabhadra@gmail.com', 'cbhabchbiau', '2026-03-13 19:55:55'),
(10, 'Samragni Biswas', 'samragni@gmail.com', 'I Love SIP ABACUS', '2026-03-13 19:57:16'),
(12, 'Suvam Bhadra', 'suvam@gmail.com', 'I am building this website from scratch.', '2026-03-14 04:57:58'),
(13, 'Sanjoy Das', 'sanjoy@gmail.com', 'jhbjhbj', '2026-03-14 05:14:52'),
(14, 'Samir Bhadra', 'samir@gmail.com', 'Father of Suvam Bhadra', '2026-03-14 05:15:56'),
(17, 'Aditya Singh', 'adi@gmail.com', 'My friend build this website.', '2026-03-14 06:06:27'),
(18, 'Suva Dutta', 'suva@gmail.com', 'My student', '2026-03-14 06:16:02'),
(19, 'Ram', 'ram@gmail.com', 'utgvgvk', '2026-03-14 06:17:58'),
(20, 'Suvankar Dutta', 'suvambhadra20032005@gmail.com', 'afsxccxz', '2026-03-14 16:52:56'),
(21, 'Ram', 'ram@gmail.com', 'I love SIP ABACUS', '2026-03-15 07:31:40');

-- --------------------------------------------------------

--
-- Table structure for table `our_leadership`
--

CREATE TABLE `our_leadership` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `sip_abacus_branch` varchar(100) DEFAULT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `our_leadership`
--

INSERT INTO `our_leadership` (`id`, `image_path`, `name`, `role`, `sip_abacus_branch`, `description`, `created_at`) VALUES
(2, 'Suvankarda.png', 'Suva Dutta', 'Director', 'SIP Abacus', 'Sibi is an acclaimed business leader with a long history of leading companies of great repute to pathbreaking success. He has vast experience across diverse industries including FMCG, Health Care and Entertainment domains. He was associated with renowned International organizations, such as JT International and 3M India Ltd, where he grew through the leadership ranks from General Manager to Director, managing Pan-India business opérations.\nHe has been accorded with numerous leadership awards during his career. He is also a trained professional in ‘Advanced Business Strategy’ and ‘Leaders of future’ from the world’s top business schools such as IMD Management Institute Switzerland & Ashridge Management Institute, UK. He has graduated in Electronics and Communication Engineering from Madurai Kamaraj University and has earned his MBA degree from MS University.', '2026-03-07 06:16:36'),
(3, 'Suvankarda.png', 'Rahul Sharma', 'CEO', 'SIP Academy India', 'Sarala heads Finance, Operations & Human Resources since its inception in 2003. Prior to joining SIP, she was working with ANZ Grindlays / Standard Chartered Bank for 17 years heading two retail branches in Chennai. She has done B.Com, CAIIB, Post Graduate Diploma in Management with All India Management Association & Advanced Management Program from IIM Bangalore. She says she enjoys her career with SIP, as SIP gives her freedom in her work to experiment her new ideas, provides an environment to bring out her best and pushes to keep upgrading her skills year on year!', '2026-03-07 09:32:41'),
(4, 'Arju.png', 'Rahul Sharma', 'CEO', NULL, '', '2026-03-07 10:56:41'),
(5, 'Suvankarda.png', 'Rahul Sharma', 'CEO', NULL, '', '2026-03-07 10:56:41'),
(6, 'Arju.png', 'Rahul Sharma', 'CEO', NULL, '', '2026-03-07 10:56:41'),
(7, 'Suvankarda.png', 'Rahul Sharma', 'CEO', NULL, '', '2026-03-07 10:56:41'),
(8, 'Arju.png', 'Rahul Sharma', 'CEO', NULL, '', '2026-03-07 10:56:41');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `message`, `image_path`, `created_at`) VALUES
(3, 'Aditya Singh', 'Very beautiful website', 'my-photo.jpg', '2026-02-20 09:46:05'),
(4, 'Suvankar Dutta', 'Very structured curriculum and strong support from SIP Abacus.', 'Screenshot 2026-02-20 154903.png', '2026-02-20 10:20:06'),
(7, 'Arju', 'SIP Abacus has helped our students improve concentration and mental calculation speed significantly.', 'arju.png', '2026-02-21 09:42:20'),
(12, 'ABC', 'I love abacus.', 'arju.png', '2026-02-26 13:46:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_leadership`
--
ALTER TABLE `our_leadership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `our_leadership`
--
ALTER TABLE `our_leadership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
