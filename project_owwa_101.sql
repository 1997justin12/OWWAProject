-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2017 at 04:13 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_owwa_101`
--

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` enum('president','vice president','secretary') NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `request_form`
--

CREATE TABLE `request_form` (
  `id` int(11) NOT NULL,
  `date_filed` datetime NOT NULL,
  `date_endorsed` datetime NOT NULL,
  `last_action_date` datetime NOT NULL,
  `number_action_month` int(11) NOT NULL,
  `case_officer` int(11) NOT NULL,
  `assistance_needed` int(11) NOT NULL,
  `action_taken` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `locator_number` int(11) NOT NULL,
  `name_ofw` int(11) NOT NULL,
  `gender` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `name_employer` int(11) NOT NULL,
  `address_employer` int(11) NOT NULL,
  `number_ofw` int(11) NOT NULL,
  `foreign_agency` int(11) NOT NULL,
  `local_agency` int(11) NOT NULL,
  `job_category` int(11) NOT NULL,
  `jobsite` int(11) NOT NULL,
  `case_request` int(11) NOT NULL,
  `name_request` int(11) NOT NULL,
  `contact_number_request` int(11) NOT NULL,
  `address_request` int(11) NOT NULL,
  `province_request` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `password` (`password`);

--
-- Indexes for table `request_form`
--
ALTER TABLE `request_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `officer`
--
ALTER TABLE `officer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `request_form`
--
ALTER TABLE `request_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
