-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2019 at 09:20 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psg`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `apply_id` int(100) NOT NULL,
  `event_id` int(100) NOT NULL,
  `ddate` varchar(100) NOT NULL,
  `reginum` varchar(100) NOT NULL,
  `detail` varchar(800) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `camp`
--

CREATE TABLE `camp` (
  `camp_id` int(100) NOT NULL,
  `camp_title` varchar(500) NOT NULL,
  `organised_by` varchar(500) NOT NULL,
  `date` varchar(100) NOT NULL,
  `pic` varchar(900) NOT NULL,
  `detail` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camp`
--

INSERT INTO `camp` (`camp_id`, `camp_title`, `organised_by`, `date`, `pic`, `detail`) VALUES
(3, 'hello', 'Night', '22/3/1999', 'hh.jpg', 'kkkkk');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `row_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `subj` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(3000) NOT NULL,
  `startdate` varchar(100) NOT NULL,
  `enddate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `details`, `startdate`, `enddate`) VALUES
(1, 'Debugging', 'hello', '12/1/2019', '14/1/2019');

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE `gallary` (
  `camp_id` int(100) NOT NULL,
  `pic_id` int(100) NOT NULL,
  `title` varchar(400) NOT NULL,
  `pic` varchar(800) NOT NULL,
  `details` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`camp_id`, `pic_id`, `title`, `pic`, `details`) VALUES
(2, 3, 'Robert', 'c2.jpg', 'Use the links below to explore the site contents. You\'ll find some content translated into other languages, but the primary documentation language is English.'),
(2, 4, 'Chitra', 'c4.jpg', 'For general questions about MediaWiki see the communication page or ask at the support desk.'),
(2, 5, 'devapriya', 'c5.jpg', 'I began working for the Wikimedia Foundation in December 2013. Before being part of this awesome project, I spent time working in JavaScrip'),
(2, 6, 'buvaneswari', 'c6.jpg', ' work for or provide services to the Wikimedia Foundation, and this is the account I try to use for edits or statements I make in that role. However, the Foundation does not vet all my activity, so edits, statements, or other contributions made by this account may not reflect the views of the Foundation.'),
(3, 7, 'hello', '20140906_174422.jpg', 'jjjjjj'),
(3, 8, 'hello', '20140903_164421.jpg', 'kkk');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `detail` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `detail`) VALUES
(1, 'christmas', 'wish you merry christmas'),
(2, 'new year', 'wish you happy new year'),
(3, 'admin', 'admin\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(100) NOT NULL,
  `reginum` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pic` varchar(2000) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `degree` varchar(20) NOT NULL,
  `department` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `shift` varchar(2) NOT NULL,
  `dateofbirth` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `reginum`, `name`, `pic`, `gender`, `degree`, `department`, `year`, `shift`, `dateofbirth`, `mobile`, `email`, `password`) VALUES
(11, '15BCS130', 'Afreedth', 'IMG_1283.jpg', 'male', 'MCA', 'Computer Science', 'III', 'Ni', '1997-12-04', '9987654321', 'aishwarya@gmail.com', 'praveen');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `typeofuser` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `pwd`, `typeofuser`) VALUES
('admin', 'admin', 'Admin'),
('user', 'user', 'General'),
('Praveen', '1234', 'Admin'),
('sachin', '1234', 'General');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`apply_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `camp`
--
ALTER TABLE `camp`
  ADD PRIMARY KEY (`camp_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`row_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallary`
--
ALTER TABLE `gallary`
  ADD PRIMARY KEY (`pic_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reginum` (`reginum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `apply_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `camp`
--
ALTER TABLE `camp`
  MODIFY `camp_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `row_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallary`
--
ALTER TABLE `gallary`
  MODIFY `pic_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
