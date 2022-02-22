-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 08:03 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `pass`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `message` text NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `message`, `Date`) VALUES
(5, 'dfd', 'sanjeevtech2@gmail.com', 9015501897, 'ddd', '2016-06-29 17:53:28'),
(6, 'dfd', 'sanjeevtech2@gmail.com', 9015501897, 'ddd', '2016-06-29 17:53:43');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `user_alias` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `programme` varchar(50) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(75) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `user_alias`, `Name`, `designation`, `programme`, `semester`, `email`, `password`, `mobile`, `date`, `status`) VALUES
(7, 'ravm5454', 'ravi', 'Associate Professior', 'B.Tech', 'iii', 'rav@gmail.com', 'ravi', 9015501897, '2016-07-13 14:30:53', 0),
(8, 'sanj9015', 'sanjeev kumar', 'Developer', 'B.tech', 'iii', 'sanjeevtech2@gmail.com', '2ddea1', 9015501897, '2016-07-13 14:37:35', 0),
(11, 'sanj9015', 'sanjeev singh', 'aaaa', 'B.tec', 'i', 'sanjeev2@gmail.com', 'dfdfd', 901550189, '2016-07-13 14:40:35', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `faculty_id` varchar(50) NOT NULL,
  `Teacher provided the course outline having weekly content plan` enum('5','4','3','2','1') NOT NULL,
  `Course objectives,learning and grading criteria are clear` enum('5','4','3','2','1') NOT NULL,
  `Course integrates course concepts with the real world` enum('5','4','3','2','1') NOT NULL,
  `Teacher is punctual,arrives on time and leaves on time` enum('5','4','3','2','1') NOT NULL,
  `Teacher is good at stimulating interest in the course content` enum('5','4','3','2','1') NOT NULL,
  `Teacher is good at explaining subject matter` enum('5','4','3','2','1') NOT NULL,
  `Teacher's presentation was clear and easy to understand` enum('5','4','3','2','1') NOT NULL,
  `Teacher is good at using innovative teaching methods/ways` enum('5','4','3','2','1') NOT NULL,
  `Teacher is available and helpful during counseling hours` enum('5','4','3','2','1') NOT NULL,
  `Teacher has competed the whole course as per course outline` enum('5','4','3','2','1') NOT NULL,
  `Teacher was always fair and impartial:` enum('5','4','3','2','1') NOT NULL,
  `Assessments conducted are clear connected to maximize learining` enum('5','4','3','2','1') NOT NULL,
  `Thoughts on the faculty` text NOT NULL,
  `sentiment` text NOT NULL,
  `postive_accuracy` double NOT NULL,
  `negative_accuracy` double NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `student_id`, `faculty_id`, `Teacher provided the course outline having weekly content plan`, `Course objectives,learning and grading criteria are clear`, `Course integrates course concepts with the real world`, `Teacher is punctual,arrives on time and leaves on time`, `Teacher is good at stimulating interest in the course content`, `Teacher is good at explaining subject matter`, `Teacher's presentation was clear and easy to understand`, `Teacher is good at using innovative teaching methods/ways`, `Teacher is available and helpful during counseling hours`, `Teacher has competed the whole course as per course outline`, `Teacher was always fair and impartial:`, `Assessments conducted are clear connected to maximize learining`, `Thoughts on the faculty`, `sentiment`, `postive_accuracy`, `negative_accuracy`, `date`) VALUES
(20, 'test@gmail.com', 'sanjeev2@gmail.com', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', 'i love his class.\r\n', 'positive', 0.585514232421, 0.414485767579, '2020-12-30'),
(23, 'ravi@gmail.com', 'rav@gmail.com', '4', '4', '2', '2', '2', '3', '2', '2', '2', '2', '2', '2', 'i dont like him.\r\n', 'negative', 0.22251719474823, 0.77748280525177, '2020-12-30'),
(24, 'sanjeevtech2@gmail.com', 'rav@gmail.com', '4', '4', '4', '3', '4', '5', '4', '4', '4', '4', '3', '3', 'He is a great teacher.\r\n', 'positive', 0.7649183368392, 0.2350816631608, '2020-12-30'),
(26, 'test2@gmail.com', 'sanjeev2@gmail.com', '4', '4', '4', '3', '3', '3', '3', '3', '3', '3', '4', '4', 'I dont think that I like his teaching style.', 'negative', 0.29775207717113, 0.70224792282887, '2020-12-30'),
(33, 'ravi@gmail.com', 'sanjeevtech2@gmail.com', '3', '5', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', 'He is a good teacher. He is very supportive.', 'positive', 0.82987340281214, 0.17012659718786, '2020-12-30');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `notice_id` int(11) NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`notice_id`, `attachment`, `subject`, `Description`, `Date`) VALUES
(8, 'AteekCV_java (1).docx', 'aaaaa', 'dfdfdfd', '2016-07-03 12:39:35');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` char(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `programme` varchar(20) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `hobbies` varchar(40) NOT NULL,
  `image` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `regid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pass`, `mobile`, `programme`, `semester`, `gender`, `hobbies`, `image`, `dob`, `regid`) VALUES
(10, 'sanjeev kumar', 'sanjeevtech2@gmail.com', '98d34c1758b15b5a359b69c2b08c5767', 9015501897, 'B.tech', 'iii', 'm', 'reading,playing', 'Jellyfish.jpg', '1961-09-15', '2147483647'),
(12, 'ravi', 'ravi@gmail.com', '63dd3e154ca6d948fc380fa576343ba6', 9015501897, 'M.Tech', 'iii', 'm', 'reading', 'Desert.jpg', '1965-10-15', '2016-07-13 15:52:01'),
(13, 'warda', 'warda@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', 32457895212, 'BCA', 'ii', 'f', 'reading', 'Koala - Copy.jpg', '1965-10-06', '2016-07-17 15:39:08'),
(14, 'test', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 989898989, 'MCA', 'i', 'm', 'reading,singin', 'Chrysanthemum.jpg', '1963-08-12', '2017-02-10 16:04:10'),
(15, 'test2', 'test2@gmail.com', 'ad0234829205b9033196ba818f7a872b', 9888888888, 'BSW', 'i', 'm', 'reading,singin', 'person.jpg', '1998-04-09', '2020-12-14 20:49:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);
ALTER TABLE `user` ADD FULLTEXT KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
