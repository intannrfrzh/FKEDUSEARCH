-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2023 at 10:42 PM
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
  `Admin_Phone_Num` varchar(100) NOT NULL,
  `Admin_IC` varchar(100) NOT NULL,
  `Account_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `area_of_research`
--

CREATE TABLE `area_of_research` (
  `ResearchID` varchar(50) NOT NULL,
  `ResearchTopic` varchar(100) NOT NULL,
  `Total_R` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(255) NOT NULL,
  `topic_id` varchar(255) NOT NULL,
  `name` varchar(10000) NOT NULL,
  `comment` mediumtext NOT NULL,
  `date` date NOT NULL,
  `month` varchar(255) NOT NULL,
  `ex1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `ComplaintID` int(11) NOT NULL,
  `Complaint_Type` varchar(50) NOT NULL,
  `Complaint_Status` varchar(50) NOT NULL,
  `Total_C_Week` int(11) NOT NULL,
  `Complaint_DateTime` datetime NOT NULL DEFAULT current_timestamp(),
  `c_desc` varchar(200) NOT NULL,
  `Account_ID` varchar(100) NOT NULL,
  `Admin_Name` varchar(100) NOT NULL,
  `E_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `E_age` int(11) NOT NULL,
  `E_socmed` varchar(100) NOT NULL,
  `E_uni` varchar(100) NOT NULL,
  `E_course` varchar(100) NOT NULL,
  `E_skill` varchar(100) NOT NULL,
  `E_scholarship` varchar(100) NOT NULL,
  `E_acastat` varchar(100) NOT NULL,
  `Account_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `User_Age` varchar(100) NOT NULL,
  `User_Socmed` varchar(100) NOT NULL,
  `User_AcademicStats` varchar(100) NOT NULL,
  `ResearchID` varchar(100) NOT NULL,
  `Account_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(255) NOT NULL,
  `topic` varchar(10000) NOT NULL,
  `description` mediumtext NOT NULL,
  `date` date NOT NULL,
  `month` varchar(255) NOT NULL,
  `ex1` int(255) NOT NULL,
  `ex2` int(255) NOT NULL,
  `ex3` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `ComplaintID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `expert_publi`
--
ALTER TABLE `expert_publi`
  MODIFY `P_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`Account_ID`) REFERENCES `login`.`user_database` (`Account_ID`);

--
-- Constraints for table `complaint`
--
ALTER TABLE `complaint`
  ADD CONSTRAINT `complaint_ibfk_1` FOREIGN KEY (`Account_ID`) REFERENCES `login`.`user_database` (`Account_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `complaint_ibfk_2` FOREIGN KEY (`Admin_Name`) REFERENCES `admin` (`Admin_Name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `complaint_ibfk_3` FOREIGN KEY (`E_name`) REFERENCES `login`.`experts` (`E_name`) ON DELETE CASCADE ON UPDATE CASCADE;

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
