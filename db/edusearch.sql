-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2023 at 07:51 PM
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
-- Database: `edusearch`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_Name` varchar(100) NOT NULL,
  `Admin_Phone_Num` varchar(100) DEFAULT NULL,
  `Admin_IC` varchar(100) DEFAULT NULL,
  `Account_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_Name`, `Admin_Phone_Num`, `Admin_IC`, `Account_ID`) VALUES
('SARA', '012', '01', 'AD21001');

-- --------------------------------------------------------

--
-- Table structure for table `area_of_research`
--

CREATE TABLE `area_of_research` (
  `ResearchID` varchar(50) NOT NULL,
  `ResearchTopic` varchar(100) NOT NULL,
  `Total_R` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `area_of_research`
--

INSERT INTO `area_of_research` (`ResearchID`, `ResearchTopic`, `Total_R`) VALUES
('RS001', 'DESIGN', '21');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(255) NOT NULL,
  `topic_id` varchar(255) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `comment` varchar(3000) NOT NULL,
  `date` date NOT NULL,
  `month` varchar(255) NOT NULL,
  `ex1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `topic_id`, `name`, `comment`, `date`, `month`, `ex1`) VALUES
(1, '3', 'user', 'test', '2023-06-11', 'Jun', ''),
(2, '3', 'user', 'test', '2023-06-11', 'Jun', ''),
(3, '3', 'user', 'test', '2023-06-11', 'Jun', ''),
(4, '3', 'user', 'hi', '2023-06-11', 'Jun', ''),
(5, '3', 'user', 'hi', '2023-06-11', 'Jun', ''),
(6, '3', 'user', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati vitae ullam earum. Quas est error aut corrupti voluptatibus officiis possimus explicabo nesciunt? Dolorem ducimus officia velit illum iusto, vel harum.', '2023-06-11', 'Jun', ''),
(7, '19', 'user', 'hello jani', '2023-06-11', 'Jun', ''),
(9, '23', 'user', 'nice post i have ever seen', '2023-06-11', 'Jun', '');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `ComplaintID` int(11) NOT NULL,
  `Complaint_Type` varchar(50) NOT NULL,
  `Complaint_Status` varchar(50) NOT NULL,
  `Total_C_Week` int(11) NOT NULL,
  `Complaint_Date` date NOT NULL,
  `c_desc` varchar(200) NOT NULL,
  `Account_ID` varchar(100) NOT NULL,
  `Admin_Name` varchar(100) NOT NULL,
  `E_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`ComplaintID`, `Complaint_Type`, `Complaint_Status`, `Total_C_Week`, `Complaint_Date`, `c_desc`, `Account_ID`, `Admin_Name`, `E_name`) VALUES
(2, 'Unsatisfied Experts\'s Feedback', '', 0, '0000-00-00', 'zayam', 'CB2003', 'SARA', 'SARA');

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `EXPERT_CV_ID` varchar(100) NOT NULL,
  `Uni_Name` varchar(100) NOT NULL,
  `Course_Name` varchar(100) NOT NULL,
  `Skills` varchar(100) NOT NULL,
  `Scholarships` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `experts`
--

CREATE TABLE `experts` (
  `E_name` varchar(100) NOT NULL,
  `E_age` int(11) DEFAULT NULL,
  `E_socmed` varchar(100) DEFAULT NULL,
  `E_uni` varchar(100) DEFAULT NULL,
  `E_course` varchar(100) DEFAULT NULL,
  `E_skill` varchar(100) DEFAULT NULL,
  `E_scholarship` varchar(100) DEFAULT NULL,
  `E_acastat` varchar(100) DEFAULT NULL,
  `Account_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experts`
--

INSERT INTO `experts` (`E_name`, `E_age`, `E_socmed`, `E_uni`, `E_course`, `E_skill`, `E_scholarship`, `E_acastat`, `Account_ID`) VALUES
('SARA', 21, '@sarady(instagram)', 'UMP', 'DESIGN', 'ADOBE', 'YAYASAN', 'DEGREE', 'EX20011');

-- --------------------------------------------------------

--
-- Table structure for table `expert_publi`
--

CREATE TABLE `expert_publi` (
  `P_ID` int(50) NOT NULL,
  `publication` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_users`
--

CREATE TABLE `general_users` (
  `User_Name` varchar(100) NOT NULL,
  `User_Age` int(11) DEFAULT NULL,
  `User_Socmed` varchar(100) DEFAULT NULL,
  `User_AcademicStats` varchar(100) DEFAULT NULL,
  `ResearchID` varchar(100) DEFAULT NULL,
  `Account_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `general_users`
--

INSERT INTO `general_users` (`User_Name`, `User_Age`, `User_Socmed`, `User_AcademicStats`, `ResearchID`, `Account_ID`) VALUES
('UMAR', 20, '@umar(instagram)', 'DEGREE', 'RS001', 'CB21001');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(255) NOT NULL,
  `topic` varchar(1000) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `date` date NOT NULL,
  `month` varchar(255) NOT NULL,
  `ex1` int(255) NOT NULL,
  `ex2` int(255) NOT NULL,
  `ex3` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `topic`, `description`, `date`, `month`, `ex1`, `ex2`, `ex3`) VALUES
(3, 'hello', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam magni laboriosam est molestias quibusdam dolorem illum nemo, perspiciatis voluptatibus voluptates! Dicta praesentium est deserunt unde aliquam, incidunt ratione ut magni!\r\n', '2023-06-09', 'Jun', 0, 0, 0),
(4, 'topic', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam magni laboriosam est molestias quibusdam dolorem illum nemo, perspiciatis voluptatibus voluptates! Dicta praesentium est deserunt unde aliquam, incidunt ratione ut magni!\r\n', '2023-06-09', 'Jun', 0, 0, 0),
(5, 'topic', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam magni laboriosam est molestias quibusdam dolorem illum nemo, perspiciatis voluptatibus voluptates! Dicta praesentium est deserunt unde aliquam, incidunt ratione ut magni!\r\n', '2023-06-08', 'Jun', 0, 0, 0),
(6, 'topic', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam magni laboriosam est molestias quibusdam dolorem illum nemo, perspiciatis voluptatibus voluptates! Dicta praesentium est deserunt unde aliquam, incidunt ratione ut magni!\r\n', '2023-06-11', 'Jun', 0, 0, 0),
(7, 'topic', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam magni laboriosam est molestias quibusdam dolorem illum nemo, perspiciatis voluptatibus voluptates! Dicta praesentium est deserunt unde aliquam, incidunt ratione ut magni!\r\n', '2023-06-07', 'Jun', 0, 0, 0),
(8, 'topic', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam magni laboriosam est molestias quibusdam dolorem illum nemo, perspiciatis voluptatibus voluptates! Dicta praesentium est deserunt unde aliquam, incidunt ratione ut magni!\r\n', '2023-06-07', 'Jun', 0, 0, 0),
(9, 'topic', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam magni laboriosam est molestias quibusdam dolorem illum nemo, perspiciatis voluptatibus voluptates! Dicta praesentium est deserunt unde aliquam, incidunt ratione ut magni!\r\n', '2023-06-06', 'Jun', 0, 0, 0),
(10, 'topic', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam magni laboriosam est molestias quibusdam dolorem illum nemo, perspiciatis voluptatibus voluptates! Dicta praesentium est deserunt unde aliquam, incidunt ratione ut magni!\r\n', '2023-06-06', 'Jun', 0, 0, 0),
(11, 'topic', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam magni laboriosam est molestias quibusdam dolorem illum nemo, perspiciatis voluptatibus voluptates! Dicta praesentium est deserunt unde aliquam, incidunt ratione ut magni!\r\n', '2023-06-06', 'Jun', 0, 0, 0),
(12, 'topic', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam magni laboriosam est molestias quibusdam dolorem illum nemo, perspiciatis voluptatibus voluptates! Dicta praesentium est deserunt unde aliquam, incidunt ratione ut magni!\r\n', '2023-06-05', 'Jun', 0, 0, 0),
(13, 'topic', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam magni laboriosam est molestias quibusdam dolorem illum nemo, perspiciatis voluptatibus voluptates! Dicta praesentium est deserunt unde aliquam, incidunt ratione ut magni!\r\n', '2023-06-05', 'Jun', 0, 0, 0),
(14, 'topic', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam magni laboriosam est molestias quibusdam dolorem illum nemo, perspiciatis voluptatibus voluptates! Dicta praesentium est deserunt unde aliquam, incidunt ratione ut magni!\r\n', '2023-06-04', 'Jun', 0, 0, 0),
(15, 'New Discussion', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam magni laboriosam est molestias quibusdam dolorem illum nemo, perspiciatis voluptatibus voluptates! Dicta praesentium est deserunt unde aliquam, incidunt ratione ut magni!\r\n', '2023-06-10', 'Jun', 0, 0, 0),
(16, 'topic', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam magni laboriosam est molestias quibusdam dolorem illum nemo, perspiciatis voluptatibus voluptates! Dicta praesentium est deserunt unde aliquam, incidunt ratione ut magni!\r\n', '2023-06-10', 'Jun', 0, 0, 0),
(17, 'topic', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam magni laboriosam est molestias quibusdam dolorem illum nemo, perspiciatis voluptatibus voluptates! Dicta praesentium est deserunt unde aliquam, incidunt ratione ut magni!\r\n', '2023-06-10', 'Jun', 0, 0, 0),
(18, 'topic', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam magni laboriosam est molestias quibusdam dolorem illum nemo, perspiciatis voluptatibus voluptates! Dicta praesentium est deserunt unde aliquam, incidunt ratione ut magni!\r\n', '2023-06-10', 'Jun', 0, 0, 0),
(19, 'hello to the topic', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam magni laboriosam est molestias quibusdam dolorem illum nemo, perspiciatis voluptatibus voluptates! Dicta praesentium est deserunt unde aliquam, incidunt ratione ut magni!\r\n', '2023-06-11', 'Jun', 0, 0, 0),
(20, 'topic', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam magni laboriosam est molestias quibusdam dolorem illum nemo, perspiciatis voluptatibus voluptates! Dicta praesentium est deserunt unde aliquam, incidunt ratione ut magni!\r\n', '2023-06-11', 'Jun', 0, 0, 0),
(21, 'My new topic', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam magni laboriosam est molestias quibusdam dolorem illum nemo, perspiciatis voluptatibus voluptates! Dicta praesentium est deserunt unde aliquam, incidunt ratione ut magni!\r\n', '2023-06-11', 'Jun', 0, 0, 0),
(22, 'Tell me about yourself.', 'This open-ended conversation starter is perfect because it invites the other person to reveal as much (or as little) about themselves as they want.', '2023-06-11', 'Jun', 0, 0, 0),
(23, 'new', 'new description', '2023-06-11', 'Jun', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reportlist`
--

CREATE TABLE `reportlist` (
  `UserActivity_ID` varchar(100) NOT NULL,
  `Total_Comments` varchar(100) NOT NULL,
  `Total_Likes` varchar(100) NOT NULL,
  `RetentionRate` float NOT NULL,
  `UserSatisfaction` varchar(100) NOT NULL,
  `KeyPerformance` float NOT NULL,
  `Engagement_Rate` float NOT NULL,
  `Report_Stat` varchar(100) NOT NULL,
  `List_Date` date NOT NULL,
  `VulnerableContent` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_database`
--

CREATE TABLE `user_database` (
  `Account_ID` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `UserType` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_database`
--

INSERT INTO `user_database` (`Account_ID`, `password`, `UserType`) VALUES
('AD21001', '122', 'admin'),
('AD21002', '123', 'admin'),
('CB2003', '123', 'guser'),
('CB21001', '123', 'guser'),
('EX20011', '123', 'expert');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_Name`),
  ADD KEY `Account_ID` (`Account_ID`);

--
-- Indexes for table `area_of_research`
--
ALTER TABLE `area_of_research`
  ADD PRIMARY KEY (`ResearchID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`ComplaintID`),
  ADD KEY `Account_ID` (`Account_ID`),
  ADD KEY `Admin_Name` (`Admin_Name`),
  ADD KEY `E_name` (`E_name`);

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`EXPERT_CV_ID`);

--
-- Indexes for table `experts`
--
ALTER TABLE `experts`
  ADD PRIMARY KEY (`E_name`),
  ADD KEY `Account_ID` (`Account_ID`);

--
-- Indexes for table `expert_publi`
--
ALTER TABLE `expert_publi`
  ADD PRIMARY KEY (`P_ID`);

--
-- Indexes for table `general_users`
--
ALTER TABLE `general_users`
  ADD PRIMARY KEY (`User_Name`),
  ADD KEY `Account_ID` (`Account_ID`),
  ADD KEY `ResearchID` (`ResearchID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reportlist`
--
ALTER TABLE `reportlist`
  ADD PRIMARY KEY (`UserActivity_ID`);

--
-- Indexes for table `user_database`
--
ALTER TABLE `user_database`
  ADD PRIMARY KEY (`Account_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `ComplaintID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expert_publi`
--
ALTER TABLE `expert_publi`
  MODIFY `P_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`Account_ID`) REFERENCES `user_database` (`Account_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `complaint`
--
ALTER TABLE `complaint`
  ADD CONSTRAINT `complaint_ibfk_1` FOREIGN KEY (`Account_ID`) REFERENCES `user_database` (`Account_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `complaint_ibfk_2` FOREIGN KEY (`Admin_Name`) REFERENCES `admin` (`Admin_Name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `complaint_ibfk_3` FOREIGN KEY (`E_name`) REFERENCES `experts` (`E_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `experts`
--
ALTER TABLE `experts`
  ADD CONSTRAINT `experts_ibfk_1` FOREIGN KEY (`Account_ID`) REFERENCES `user_database` (`Account_ID`);

--
-- Constraints for table `general_users`
--
ALTER TABLE `general_users`
  ADD CONSTRAINT `general_users_ibfk_1` FOREIGN KEY (`Account_ID`) REFERENCES `user_database` (`Account_ID`),
  ADD CONSTRAINT `general_users_ibfk_2` FOREIGN KEY (`ResearchID`) REFERENCES `area_of_research` (`ResearchID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
