-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2019 at 11:41 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `province` varchar(25) NOT NULL,
  `reason` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `fname`, `lname`, `email`, `contact_no`, `province`, `reason`) VALUES
(4, 'MINAL', 'PATEL', 'ptlminal9800@gmail.com', 2147483647, 'ON', 'Someone else is using my account credentials');

-- --------------------------------------------------------

--
-- Table structure for table `create_events`
--

CREATE TABLE `create_events` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `event_title` varchar(50) NOT NULL,
  `type` varchar(25) NOT NULL,
  `keywords` varchar(45) NOT NULL,
  `organise_name` varchar(25) NOT NULL,
  `location` varchar(25) NOT NULL,
  `event_date` date NOT NULL,
  `event_time` varchar(50) NOT NULL,
  `event_created_date` date NOT NULL,
  `event_type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `questions` varchar(100) NOT NULL,
  `answers` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE `forums` (
  `id` int(11) NOT NULL,
  `comment_details` varchar(100) NOT NULL,
  `reply_to` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `open_events`
--

CREATE TABLE `open_events` (
  `event_id` int(11) NOT NULL,
  `seats_available` int(11) NOT NULL,
  `seats_filled` int(11) NOT NULL,
  `total_Seats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paid_events`
--

CREATE TABLE `paid_events` (
  `create_id` int(11) NOT NULL,
  `fees` int(11) NOT NULL,
  `total_seats` int(11) NOT NULL,
  `seats_available` int(11) NOT NULL,
  `total_registered` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `id` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` int(10) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `newsletter` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_registered`
--

CREATE TABLE `user_registered` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `seats_booked` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_events`
--
ALTER TABLE `create_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK` (`user_id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forums`
--
ALTER TABLE `forums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreignkey` (`user_id`),
  ADD KEY `foreignkey_event_table` (`event_id`);

--
-- Indexes for table `open_events`
--
ALTER TABLE `open_events`
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `paid_events`
--
ALTER TABLE `paid_events`
  ADD KEY `forigen_key_event` (`create_id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_registered`
--
ALTER TABLE `user_registered`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk|usrReg` (`user_id`),
  ADD KEY `fk|eventReg` (`event_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `create_events`
--
ALTER TABLE `create_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forums`
--
ALTER TABLE `forums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_registered`
--
ALTER TABLE `user_registered`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `create_events`
--
ALTER TABLE `create_events`
  ADD CONSTRAINT `FK` FOREIGN KEY (`user_id`) REFERENCES `sign_up` (`id`);

--
-- Constraints for table `forums`
--
ALTER TABLE `forums`
  ADD CONSTRAINT `foreignkey` FOREIGN KEY (`user_id`) REFERENCES `sign_up` (`id`),
  ADD CONSTRAINT `foreignkey_event_table` FOREIGN KEY (`event_id`) REFERENCES `create_events` (`id`);

--
-- Constraints for table `open_events`
--
ALTER TABLE `open_events`
  ADD CONSTRAINT `open_events_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `create_events` (`id`);

--
-- Constraints for table `paid_events`
--
ALTER TABLE `paid_events`
  ADD CONSTRAINT `forigen_key_event` FOREIGN KEY (`create_id`) REFERENCES `create_events` (`id`);

--
-- Constraints for table `user_registered`
--
ALTER TABLE `user_registered`
  ADD CONSTRAINT `fk|eventReg` FOREIGN KEY (`event_id`) REFERENCES `sign_up` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
