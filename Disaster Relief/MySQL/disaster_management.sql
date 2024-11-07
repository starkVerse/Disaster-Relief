-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 05, 2024 at 07:05 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `disaster_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `accepted_posts`
--

CREATE TABLE `accepted_posts` (
  `serial_no` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(256) NOT NULL,
  `post` text NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `date` date NOT NULL,
  `completed` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accepted_posts`
--

INSERT INTO `accepted_posts` (`serial_no`, `post_id`, `user_id`, `user_name`, `post`, `latitude`, `longitude`, `date`, `completed`) VALUES
(26, 71, 2, 'tab', 'We are a family of four. Need dry foods and drinking water', 23.75087, 90.4036921, '2024-06-04', 'NO'),
(27, 72, 17, 'Nayma', 'Lost all my things in a river erosion. Urgently in need of relief aids\r\n\r\nThings required:\r\n\r\n1. Dry clothes\r\n2. Drinking Water\r\n3. Hay and grass for cow\r\n4. Dry foods', 23.7516057, 90.4096224, '2024-06-04', 'NO'),
(29, 75, 15, 'dipto', 'Victim of Remal. Lost all my belongings in the cyclone. Please need relief aid. Provide me with 2 Kg rice, lentils, dry clothes (medium size), 2 file paracetamol', 23.8401096, 90.3575943, '2024-06-05', 'NO'),
(30, 76, 15, 'dipto', 'We are a family of five. We are victims of Remal. Our house and cattle shed got destroyed. We are in need of relief aid\r\n\r\nPlease provide us with:\r\n1. Drinking water\r\n2. 1 kg puffed rice\r\n3. 3 kg hay and grass for our cattles\r\n4. Dry clothes for my 3yr and 5yr child', 23.8461333, 90.3654296, '2024-06-05', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `admin_data`
--

CREATE TABLE `admin_data` (
  `admin_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email_add` text NOT NULL,
  `phone_number` text NOT NULL,
  `passwords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_data`
--

INSERT INTO `admin_data` (`admin_id`, `user_name`, `email_add`, `phone_number`, `passwords`) VALUES
(2, 'tab', 'tab@yahoo.com', '123125235', '1234'),
(3, 'taz', 'taz@yahoo.com', '01975623322', '1234'),
(4, 'tou', 'tou@yahoo.com', '01575223344', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `notification_data`
--

CREATE TABLE `notification_data` (
  `serial_no` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(256) NOT NULL,
  `notification` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notification_data`
--

INSERT INTO `notification_data` (`serial_no`, `user_id`, `user_name`, `notification`, `date`) VALUES
(11, 15, 'dipto', 'Your post was accepted by the admin', '2024-05-24'),
(12, 15, 'dipto', 'Your post was declined by the admin', '2024-05-24'),
(18, 15, 'dipto', 'Your request has been accepted by tab', '2024-05-24'),
(19, 2, 'tab', 'Your post was declined by the admin', '2024-05-24'),
(20, 2, 'tab', 'Your post was accepted by the admin', '2024-05-24'),
(21, 2, 'tab', 'Your request has been accepted by dipto', '2024-05-24'),
(22, 2, 'tab', 'Your post was accepted by the admin', '2024-05-26'),
(23, 2, 'tab', 'Your request has been accepted by dipto', '2024-05-26'),
(24, 2, 'tab', 'Your request has been accepted by dipto', '2024-05-26'),
(25, 2, 'tab', 'Your request has been accepted by dipto', '2024-05-26'),
(26, 2, 'tab', 'Your post was accepted by the admin', '2024-05-28'),
(27, 2, 'tab', 'Your request has been accepted by dipto', '2024-05-28'),
(28, -1, 'admin', 'Intense disaster at Dhaka: Rainfall', '2024-05-28'),
(29, -1, 'admin', 'Intense disaster will occur at Dhaka: Rainfall', '2024-05-28'),
(30, -1, 'admin', 'Intense disaster will occur at Dhaka: Rainfall', '2024-05-28'),
(31, -1, 'admin', 'Very Severe disaster will occur at Barishal: Flood', '2024-05-28'),
(32, 2, 'tab', 'Your post was declined by the admin', '2024-05-28'),
(33, 2, 'tab', 'Your post was declined by the admin', '2024-05-28'),
(34, -1, 'admin', 'Severe disaster will occur at Cox Bazar: Tsunami which is creating 4-meter size waves will hit the coastal area within the next two days ', '2024-05-28'),
(35, 2, 'tab', 'Your post was accepted by the admin', '2024-06-04'),
(36, 17, 'Nayma', 'Your post was accepted by the admin', '2024-06-04'),
(37, 16, 'Suchi', 'Your post was accepted by the admin', '2024-06-04'),
(38, 16, 'Suchi', 'Your request has been accepted by tab', '2024-06-05'),
(39, 15, 'dipto', 'Your post was declined by the admin', '2024-06-05'),
(40, 2, 'tab', 'Your post was declined by the admin', '2024-06-05'),
(41, 15, 'dipto', 'Your post was accepted by the admin', '2024-06-05'),
(42, 15, 'dipto', 'Your post was accepted by the admin', '2024-06-05'),
(43, 17, 'Nayma', 'Your request has been accepted by tab', '2024-06-05');

-- --------------------------------------------------------

--
-- Table structure for table `relief_posts`
--

CREATE TABLE `relief_posts` (
  `serial_no` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `post` longtext NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `relief_posts`
--

INSERT INTO `relief_posts` (`serial_no`, `user_id`, `user_name`, `post`, `latitude`, `longitude`, `date`) VALUES
(77, 15, 'dipto', 'Victim of Earthquake. Our house got destroyed. Need relief support. Please contact me through my phone number: 019915556666', 23.8461333, 90.3654296, '2024-06-05'),
(78, 2, 'tab', 'hello. I dont need anything. You are welcome', 23.8461333, 90.3654296, '2024-06-05');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(256) NOT NULL,
  `email_add` text NOT NULL,
  `phone_number` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`user_id`, `user_name`, `email_add`, `phone_number`, `password`) VALUES
(2, 'tab', 'tabeeb@tab.com', '01911223344', '1234'),
(15, 'dipto', 'dipto@gmail.com', '01975621231', '1234'),
(16, 'Suchi', 'suchi@gmail.com', '01675623344', '1234'),
(17, 'Nayma', 'nayma@gmail.com', '01975622244', '1234'),
(18, 'Sakib', 'sakib@gmail.com', '01776623344', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accepted_posts`
--
ALTER TABLE `accepted_posts`
  ADD PRIMARY KEY (`serial_no`);

--
-- Indexes for table `admin_data`
--
ALTER TABLE `admin_data`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `notification_data`
--
ALTER TABLE `notification_data`
  ADD PRIMARY KEY (`serial_no`);

--
-- Indexes for table `relief_posts`
--
ALTER TABLE `relief_posts`
  ADD PRIMARY KEY (`serial_no`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accepted_posts`
--
ALTER TABLE `accepted_posts`
  MODIFY `serial_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `admin_data`
--
ALTER TABLE `admin_data`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notification_data`
--
ALTER TABLE `notification_data`
  MODIFY `serial_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `relief_posts`
--
ALTER TABLE `relief_posts`
  MODIFY `serial_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
