-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2023 at 01:09 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flatmates`
--

-- --------------------------------------------------------

--
-- Table structure for table `aadhar_card`
--

CREATE TABLE `aadhar_card` (
  `u_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `card_no` bigint(100) NOT NULL,
  `phone_number` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aadhar_card`
--

INSERT INTO `aadhar_card` (`u_id`, `name`, `card_no`, `phone_number`) VALUES
('FM_1001', 'mathan', 111111111111, 8870469532),
('FM_1002', 'nithi', 222222222222, 9976203099),
('FM_1003', 'abi', 333333333333, 7902871839),
('FM_1004', 'kavi', 444444444444, 9626457971),
('FM_1005', 'arun', 555555555555, 6383504650),
('FM_1006', 'sri', 666666666666, 6382436280),
('FM_1007', 'ritch', 777777777777, 9360800689),
('FM_1008', 'sanjay', 888888888888, 9994922037),
('FM_1009', 'ram', 999999999999, 9698897920),
('FM_1010', 'gowtham', 1, 7871218265);

-- --------------------------------------------------------

--
-- Table structure for table `admin_log`
--

CREATE TABLE `admin_log` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `new_house`
--

CREATE TABLE `new_house` (
  `u_id` varchar(200) NOT NULL,
  `house_no` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `members` varchar(100) NOT NULL,
  `rent` varchar(100) NOT NULL,
  `about` varchar(200) NOT NULL,
  `description` varchar(300) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zipcode` bigint(100) NOT NULL,
  `BHK` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `new_house`
--

INSERT INTO `new_house` (`u_id`, `house_no`, `address`, `members`, `rent`, `about`, `description`, `city`, `state`, `zipcode`, `BHK`, `image`) VALUES
('FM_1001', 'ssssssssss', '12e3', '33', '1221323', 'mathan', 'weqwdsdedwe', 'madurai', 'tamilnadu', 123456, '5bhk', 'img1-removebg-preview.png'),
('FM_1002', 'ssssssssss', '12e3', '33', '1221323', 'mathan', 'weqwdsdedwe', 'madurai', 'tamilnadu', 123456, '5bhk', 'img1-removebg-preview.png'),
('FM_1003', 'ssssssssss', '12e3', '33', '1221323', 'mathan', 'weqwdsdedwe', 'madurai', 'tamilnadu', 123456, '5bhk', 'img1-removebg-preview.png');

-- --------------------------------------------------------

--
-- Table structure for table `owner_reg`
--

CREATE TABLE `owner_reg` (
  `u_id` varchar(100) NOT NULL,
  `r_no` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `house_no` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `photo_img` varchar(100) NOT NULL,
  `house_doc` varchar(100) NOT NULL,
  `aadhar_doc` varchar(100) NOT NULL,
  `aadhar_no` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `owner_reg`
--

INSERT INTO `owner_reg` (`u_id`, `r_no`, `name`, `email`, `phone_no`, `password`, `occupation`, `house_no`, `address`, `city`, `state`, `photo_img`, `house_doc`, `aadhar_doc`, `aadhar_no`) VALUES
('', 1, 'nithi', 'nitheshwaran003@gmail.com', 0, '123', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tenant_reg`
--

CREATE TABLE `tenant_reg` (
  `u_id` varchar(100) NOT NULL,
  `r_no` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `photo_img` varchar(100) NOT NULL,
  `smartcard_doc` varchar(100) NOT NULL,
  `aadhar_doc` varchar(100) NOT NULL,
  `aadhar_no` int(12) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `voter_id`
--

CREATE TABLE `voter_id` (
  `u_id` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `card_no` varchar(20) NOT NULL,
  `phone_number` bigint(10) NOT NULL,
  `area` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voter_id`
--

INSERT INTO `voter_id` (`u_id`, `name`, `card_no`, `phone_number`, `area`) VALUES
('FM_1001', 'mathan', '111111111111', 8870469532, 'kanyakumari'),
('FM_1002', 'nithi', '222222222222', 9976203099, 'dharmaburi'),
('FM_1003', 'abi', '333333333333', 7902871839, 'kanyakumari'),
('FM_1004', 'kavi', '444444444444', 9626457971, 'trichy'),
('FM_1005', 'arun', '555555555555', 6383504650, 'ramnadu'),
('FM_1006\r\n', 'sri', '666666666666', 6382436280, 'Perambalur'),
('FM_1007', 'ritch', '777777777777', 9360800689, 'trichy'),
('FM_1008', 'sanjay', '888888888888', 9994922037, 'Bangalore'),
('FM_1009', 'ram', '999999999999', 9698897920, 'madurai'),
('FM_1010', 'gowtham', '111122223333', 7871218265, 'madurai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_log`
--
ALTER TABLE `admin_log`
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `new_house`
--
ALTER TABLE `new_house`
  ADD UNIQUE KEY `u_id` (`u_id`);

--
-- Indexes for table `owner_reg`
--
ALTER TABLE `owner_reg`
  ADD PRIMARY KEY (`name`),
  ADD UNIQUE KEY `r_no` (`r_no`),
  ADD UNIQUE KEY `3` (`phone_no`),
  ADD UNIQUE KEY `2` (`aadhar_no`),
  ADD UNIQUE KEY `1` (`email`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `r_no_2` (`r_no`);

--
-- Indexes for table `voter_id`
--
ALTER TABLE `voter_id`
  ADD UNIQUE KEY `u_id` (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `owner_reg`
--
ALTER TABLE `owner_reg`
  MODIFY `r_no` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
