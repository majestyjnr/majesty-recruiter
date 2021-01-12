-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2020 at 05:41 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recruitment_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', '1admin123', 'aidoojuniorsolomon@gmail.com'),
(2, 'adminpeter', 'peter', 'aidoojuniorsolomon@yahoo.com'),
(3, 'adminpeter', 'peter', 'aidoojuniorsolomon@yahoo.com'),
(4, 'adminpeter', 'peter', 'aidoojuniorsolomon@yahoo.com'),
(5, 'adminpeter', 'peter', 'aidoojuniorsolomon@yahoo.com'),
(6, 'adminpeter', 'peter', 'aidoojuniorsolomon@yahoo.com'),
(7, 'adminruth', 'ruth', 'aidoojuniorsolomon@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(10) NOT NULL,
  `applicant_firstname` varchar(30) NOT NULL,
  `applicant_lastname` varchar(30) NOT NULL,
  `applicant_email` varchar(30) NOT NULL,
  `applicant_contact` varchar(30) NOT NULL,
  `applicant_dob` varchar(20) NOT NULL,
  `applicant_location` varchar(30) NOT NULL,
  `job_title` varchar(20) NOT NULL,
  `job_description` varchar(300) NOT NULL,
  `highest_qualification` varchar(30) NOT NULL,
  `area_of_study` varchar(30) NOT NULL,
  `other_qualifications` varchar(50) NOT NULL,
  `academic_achievements` varchar(50) NOT NULL,
  `cv_path` varchar(200) NOT NULL,
  `letter_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `applicant_firstname`, `applicant_lastname`, `applicant_email`, `applicant_contact`, `applicant_dob`, `applicant_location`, `job_title`, `job_description`, `highest_qualification`, `area_of_study`, `other_qualifications`, `academic_achievements`, `cv_path`, `letter_path`) VALUES
(1, 'Solomon ', 'Aidoo', 'aidoojuniorsolomon@gmail.com', '0544174142', '1998-02-22', 'Accra', 'Software Engineer', 'Technically proficient and a workaholic', 'phd', 'PhD Computer Science', 'Udemy Certs', '2020 Best Programmer', 'uploads/SOLOMON AIDOO JUNIOR - My Resume.pdf', 'uploads/Solomon Aidoo Junior Scholarship Motivation Letter.docx'),
(2, 'Peter ', 'Aidoo', 'aidoojuniorsolomon@yahoo.com', '0574321997', '2000-12-01', 'Accra', 'System Analyst', 'Very hardworking', 'second degree', 'MSc Computer Science', 'Udemy Certifications', 'Leadership Awards', 'uploads/MANIFESTO.docx', 'uploads/Study Goup Timetable.pdf'),
(3, 'Victoria', 'Arthur', 'vic2578@gmail.com', '0571257822', '2002-06-11', 'New York', 'system analysis', 'workaholic  and ambitious ', 'phd', 'PhD computer science', 'IPMC Certs', 'best student in ict', 'uploads/SOLOMON AIDOO JUNIOR - My Resume.pdf', 'uploads/Study Goup Timetable.docx');

-- --------------------------------------------------------

--
-- Table structure for table `banned_users`
--

CREATE TABLE `banned_users` (
  `id` int(10) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banned_users`
--

INSERT INTO `banned_users` (`id`, `username`, `password`, `email`, `image`) VALUES
(1, 'sandy', 'sandy', 'sandy@gmail.com', ''),
(2, 'sam', 'sam', 'aidoojuniorsolomon@gmail.com', 'profile_pics/FB_IMG_1522653386797-01.jpeg'),
(3, 'solo', 'solo', 'aidoohuniorsolomon@gmail.com', 'profile_pics/FB_IMG_1522653386797-01.jpeg'),
(4, 'solo', 'solo', 'aidoohuniorsolomon@gmail.com', 'profile_pics/FB_IMG_1522653386797-01.jpeg'),
(5, 'solo', 'solo', 'aidoohuniorsolomon@gmail.com', 'profile_pics/FB_IMG_1522653386797-01.jpeg'),
(6, 'junior', 'junior', 'aidoojuniorsolomon@yahoo.com', 'profile_pics/RoundPhoto_Feb152018_132430-01.jpeg'),
(7, 'dave', 'dave', 'aidoohuniorsolomon@gmail.com', 'profile_pics/RoundPhoto_Jan272018_083220-01.jpeg'),
(8, 'sandy', 'sandy', 'sandy@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) NOT NULL,
  `job_title` varchar(40) NOT NULL,
  `vacancy` int(10) NOT NULL,
  `min_qualification` varchar(100) NOT NULL,
  `salary` int(20) DEFAULT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `job_title`, `vacancy`, `min_qualification`, `salary`, `description`) VALUES
(1, 'Software Engineer', 3, 'MSc ICT', 40000, 'Must be a hard worker'),
(2, 'DevsOP Engineer', 4, 'BSc Computer Science / Related field', 6000, 'Must have at least 1 year experience.'),
(3, 'Android Developer', 2, 'BSc Computer Science ', 5500, 'Must be conversant with Android Studio'),
(4, 'Database Adminstrator', 5, 'BSc Computer Science ', 4000, 'Must be conversant with oracle DB'),
(5, 'AI Engineer', 7, 'MSc Computer Science', 20000, 'Must have at least 2 years working experience.'),
(6, 'PHP Developer', 3, 'BSc ICT / Related field', 7000, 'At least 2 years working experience.'),
(7, 'Systems Analyst', 2, 'MSc Computer Science', 56000, 'Be posses all the characteristics of a good systems analyst.'),
(8, 'Chartered Accountant', 3, 'BBA Accounting', 6000, 'Must be have at least 3 years working experience'),
(9, 'Network Architect', 3, 'MSc ICT', 5600, 'Must have at least 2 years working experience'),
(10, 'Business Analyst', 4, 'MBA Business Administration', 7000, 'Must be innovative enough to monetize technology. ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `image`) VALUES
(1, 'medikal', 'mdk', 'mdk@gmail.com', '../profile_pics/RoundPhoto_Jan272018_083220-01.jpeg'),
(2, 'majesty', 'Majesty1@', 'aidoojuniorsolomon@gmail.com', '../profile_pics/RoundPhoto_Mar142018_173618-01-01.jpeg'),
(3, 'victoria', '257822', 'vic2578@gmail.com', '../profile_pics/Victoria 20170910_194249-01.jpeg'),
(4, 'junior', 'junior', 'aidoojuniorsolomon@yahoo.com', '..profile_pics/RoundPhoto_Feb152018_132430-01.jpeg'),
(5, 'dave', 'dave', 'aidoohuniorsolomon@gmail.com', '../profile_pics/RoundPhoto_Jan272018_083220-01.jpeg'),
(6, 'sandy', 'sandy', 'sandy@gmail.com', ''),
(7, 'atsu', 'aaa', 'atsuraymond88@yahoo.com', '../profile_pics/â€ª+233 57 650 3947â€¬ 20180202_221013-01.jpeg'),
(8, 'developer1', 'Majesty1@', 'aidoojuniorsolomon@yahoo.com', '../profile_pics/IMG_20171115_100223_259-01.jpeg'),
(9, 'peter', 'peter', 'aidoojuniorsolomon@yahoo.com', '../profile_pics/Complementary Card.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banned_users`
--
ALTER TABLE `banned_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `banned_users`
--
ALTER TABLE `banned_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
