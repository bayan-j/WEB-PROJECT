-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 31 مايو 2023 الساعة 01:48
-- إصدار الخادم: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homeservdb`
--

-- --------------------------------------------------------

--
-- بنية الجدول `ho_requests`
--

CREATE TABLE `ho_requests` (
  `r_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `kindOfjob` varchar(255) NOT NULL,
  `typeOfjob` varchar(255) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `Duration` varchar(255) NOT NULL,
  `enter_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `ho_requests`
--

INSERT INTO `ho_requests` (`r_id`, `user_id`, `kindOfjob`, `typeOfjob`, `availability`, `Duration`, `enter_date`) VALUES
(1, 1, 'Painter', 'full time', 'night', '9pm-12am', '2023-05-31 00:45:39');

-- --------------------------------------------------------

--
-- بنية الجدول `selected_request`
--

CREATE TABLE `selected_request` (
  `sel_id` bigint(20) NOT NULL,
  `ho_user_id` bigint(20) NOT NULL,
  `hk_user_id` bigint(20) NOT NULL,
  `req_id` bigint(20) NOT NULL,
  `price` varchar(50) NOT NULL,
  `status` enum('Pending','Accepted','Rejected','') NOT NULL,
  `rate` double NOT NULL DEFAULT 0,
  `review` varchar(4000) NOT NULL,
  `enter_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `selected_request`
--

INSERT INTO `selected_request` (`sel_id`, `ho_user_id`, `hk_user_id`, `req_id`, `price`, `status`, `rate`, `review`, `enter_date`) VALUES
(1, 1, 2, 1, '100', 'Accepted', 3, 'you are amazing', '2023-05-31 00:47:41');

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `fname` varchar(55) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `h_type` varchar(255) NOT NULL,
  `passwords` varchar(50) NOT NULL,
  `userID` varchar(50) DEFAULT NULL,
  `age` varchar(22) DEFAULT NULL,
  `phone` varchar(22) DEFAULT NULL,
  `Gender` varchar(22) DEFAULT NULL,
  `city` varchar(33) DEFAULT NULL,
  `comment` varchar(4444) DEFAULT NULL,
  `imgfile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `h_type`, `passwords`, `userID`, `age`, `phone`, `Gender`, `city`, `comment`, `imgfile`) VALUES
(1, 'deem', 'salah', 'deem@hotmail.com', 'ho', '123', NULL, NULL, NULL, NULL, 'Abha', NULL, ''),
(2, 'saad', 'h', 'saad@hotmail.com', 'hk', '123', '123', '30', '0508218048', 'Male', 'Riyadh', 'iam good', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ho_requests`
--
ALTER TABLE `ho_requests`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `selected_request`
--
ALTER TABLE `selected_request`
  ADD PRIMARY KEY (`sel_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ho_requests`
--
ALTER TABLE `ho_requests`
  MODIFY `r_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `selected_request`
--
ALTER TABLE `selected_request`
  MODIFY `sel_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
