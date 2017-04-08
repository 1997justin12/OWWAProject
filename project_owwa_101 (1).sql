-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2017 at 04:34 PM
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
-- Table structure for table `tbl_case`
--

CREATE TABLE `tbl_case` (
  `id` int(11) NOT NULL,
  `case_number` int(11) NOT NULL,
  `case_detail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_documents`
--

CREATE TABLE `tbl_documents` (
  `id` int(11) NOT NULL,
  `case_number` int(11) NOT NULL,
  `document_detail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employer`
--

CREATE TABLE `tbl_employer` (
  `id` int(11) NOT NULL,
  `case_number` int(11) NOT NULL,
  `employer_name` varchar(100) NOT NULL,
  `employer_address` varchar(100) NOT NULL,
  `contact_number` char(11) NOT NULL,
  `tel_number` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_foreign_agency`
--

CREATE TABLE `tbl_foreign_agency` (
  `id` int(11) NOT NULL,
  `case_number` int(11) NOT NULL,
  `agency_name` varchar(100) NOT NULL,
  `tel_fox_number` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_local_agency`
--

CREATE TABLE `tbl_local_agency` (
  `id` int(11) NOT NULL,
  `case_number` int(11) NOT NULL,
  `agency_name` varchar(100) NOT NULL,
  `agency_address` varchar(100) NOT NULL,
  `tel_number` char(11) NOT NULL,
  `tel_fox_number` char(11) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `contact_contact_person` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ofw`
--

CREATE TABLE `tbl_ofw` (
  `id` int(11) NOT NULL,
  `case_number` int(11) NOT NULL,
  `family_name` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `other_name` varchar(100) NOT NULL,
  `contact_number` char(11) NOT NULL,
  `sex` enum('male','female') NOT NULL,
  `roaming_number` char(11) NOT NULL,
  `birthdate` date NOT NULL,
  `age` int(11) NOT NULL,
  `civili_status` enum('Seabase OFW','Landbase OFW') NOT NULL,
  `classification` int(11) NOT NULL,
  `work` varchar(100) NOT NULL,
  `highest_education` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `departure_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_request`
--

CREATE TABLE `tbl_request` (
  `case_number` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `assistance_sought` text NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `family_name` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `ofw_name` varchar(100) NOT NULL,
  `relation` varchar(100) NOT NULL,
  `complete_address` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `family_name`, `first_name`, `middle_name`, `ofw_name`, `relation`, `complete_address`, `contact_number`, `email_address`, `username`, `password`) VALUES
(1, 'Cedeno', 'Justin', 'Alicuban', 'Merlyn Cedeno', 'niece/nephew', 'Sitio Tamabaca Toril Davao City', '09991236068', 'cedeojustin@yahoo.com', 'jcedeno', 'gwafasko');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_case`
--
ALTER TABLE `tbl_case`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_documents`
--
ALTER TABLE `tbl_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_employer`
--
ALTER TABLE `tbl_employer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_foreign_agency`
--
ALTER TABLE `tbl_foreign_agency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_local_agency`
--
ALTER TABLE `tbl_local_agency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ofw`
--
ALTER TABLE `tbl_ofw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_request`
--
ALTER TABLE `tbl_request`
  ADD PRIMARY KEY (`case_number`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email_address`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `fullname` (`family_name`,`first_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_case`
--
ALTER TABLE `tbl_case`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_documents`
--
ALTER TABLE `tbl_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_employer`
--
ALTER TABLE `tbl_employer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_foreign_agency`
--
ALTER TABLE `tbl_foreign_agency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_ofw`
--
ALTER TABLE `tbl_ofw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_request`
--
ALTER TABLE `tbl_request`
  MODIFY `case_number` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
