-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2023 at 06:18 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` varchar(100) NOT NULL,
  `Admin_Name` varchar(100) NOT NULL,
  `Admin_Phone_Num` varchar(100) NOT NULL,
  `Admin_IC` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `Admin_Name`, `Admin_Phone_Num`, `Admin_IC`) VALUES
('A532', 'Wardah binti Ghafor', '011-49556823', '731112-05-3254'),
('A531', 'Zack Chan', '011-25430568', '640413-01-7693');

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
('R0012', 'Science Biology', '12'),
('R0089', 'Computer Science', '2');

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `EXPERT_CV_ID` varchar(100) NOT NULL,
  `Uni_Name` varchar(100) NOT NULL,
  `Course_Name` varchar(100) NOT NULL,
  `Skills` varchar(100) NOT NULL,
  `Scholarships` varchar(100) NOT NULL,
  `Experts_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`EXPERT_CV_ID`, `Uni_Name`, `Course_Name`, `Skills`, `Scholarships`, `Experts_ID`) VALUES
('CV0001', 'University Malaysia Pahang', 'Graphic Multimedia Technology Science Computer', 'Advanced Phototshop and image editing skills', 'Jabatan Perkhidmatan Awam', 'E601'),
('CV0030', 'University of Oxford ', 'Software Engineering Science Computer ', 'Confident in HTML5 and Wordpress content management', 'USAC Scholarship', 'E602');

-- --------------------------------------------------------

--
-- Table structure for table `expert`
--

CREATE TABLE `expert` (
  `Experts_ID` varchar(100) NOT NULL,
  `Experts_Name` varchar(100) NOT NULL,
  `E_Password` varchar(100) NOT NULL,
  `Experts_Age` varchar(100) NOT NULL,
  `Experts_AcedemicStats` varchar(100) NOT NULL,
  `EXPERT_CV_ID` varchar(100) NOT NULL,
  `InteractionStatus` varchar(100) NOT NULL,
  `Experts_Socmed` varchar(100) NOT NULL,
  `PublicationID` varchar(100) NOT NULL,
  `Account_ID` varchar(100) NOT NULL,
  `ResearchID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expert`
--

INSERT INTO `expert` (`Experts_ID`, `Experts_Name`, `E_Password`, `Experts_Age`, `Experts_AcedemicStats`, `EXPERT_CV_ID`, `InteractionStatus`, `Experts_Socmed`, `PublicationID`, `Account_ID`, `ResearchID`) VALUES
('E601', 'Johan bin Razak', 'Johan12345', '23', 'PhD', 'CV0001', 'Inactive ', 'JohnW (Instagram)', 'PB1223', 'AC21031', 'R0012'),
('E602', 'Amalina binti Sufian', 'L88NA99', '24', 'Master ', 'CV0030', 'Active  ', 'Emalinnnnn_24(Instagram)', 'PB1224', 'AC21016', 'R0089');

-- --------------------------------------------------------

--
-- Table structure for table `general_users`
--

CREATE TABLE `general_users` (
  `User_ID` varchar(100) NOT NULL,
  `User_Name` varchar(100) NOT NULL,
  `User_Password` varchar(100) NOT NULL,
  `User_Age` varchar(100) NOT NULL,
  `User_Socmed` varchar(100) NOT NULL,
  `User_AcedemicStats` varchar(100) NOT NULL,
  `ResearchID` varchar(100) NOT NULL,
  `Account_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `general_users`
--

INSERT INTO `general_users` (`User_ID`, `User_Name`, `User_Password`, `User_Age`, `User_Socmed`, `User_AcedemicStats`, `ResearchID`, `Account_ID`) VALUES
('U411', 'Qistina binti Ali', 'Qis1212', '16', 'Tina_Q(Instagram)', 'SPM', 'R0012', 'AC21016'),
('U412', 'Syamsul bin Rahim', 'Syam_@123', '20', 'SSRam_20(Twitter)', 'Degree', 'R0089', 'AC21031');

-- --------------------------------------------------------

--
-- Table structure for table `publication_list`
--

CREATE TABLE `publication_list` (
  `PublicationID` varchar(100) NOT NULL,
  `PublicationTopic` varchar(100) NOT NULL,
  `Experts_ID` varchar(100) NOT NULL,
  `Total_P` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `publication_list`
--

INSERT INTO `publication_list` (`PublicationID`, `PublicationTopic`, `Experts_ID`, `Total_P`) VALUES
('PB1223', 'The anatomy of a Human Skeleton', 'E601', '50'),
('PB1224', 'Great Anatomy of Human body', 'E602', '20');

-- --------------------------------------------------------

--
-- Table structure for table `user_database`
--

CREATE TABLE `user_database` (
  `Account_ID` varchar(100) NOT NULL,
  `UserType` varchar(100) NOT NULL,
  `Experts_ID` varchar(100) NOT NULL,
  `User_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_database`
--

INSERT INTO `user_database` (`Account_ID`, `UserType`, `Experts_ID`, `User_ID`) VALUES
('AC21016', 'Staff', 'E602', 'U411'),
('AC21031', 'Student', 'E601', 'U412');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `area_of_research`
--
ALTER TABLE `area_of_research`
  ADD PRIMARY KEY (`ResearchID`);

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`EXPERT_CV_ID`),
  ADD KEY `Experts_ID` (`Experts_ID`);

--
-- Indexes for table `expert`
--
ALTER TABLE `expert`
  ADD PRIMARY KEY (`Experts_ID`),
  ADD KEY `expert_ibfk_1` (`PublicationID`),
  ADD KEY `Account_ID` (`Account_ID`),
  ADD KEY `ResearchID` (`ResearchID`),
  ADD KEY `EXPERT_CV_ID` (`EXPERT_CV_ID`);

--
-- Indexes for table `general_users`
--
ALTER TABLE `general_users`
  ADD PRIMARY KEY (`User_ID`),
  ADD KEY `Account_ID` (`Account_ID`),
  ADD KEY `ResearchID` (`ResearchID`);

--
-- Indexes for table `publication_list`
--
ALTER TABLE `publication_list`
  ADD PRIMARY KEY (`PublicationID`),
  ADD KEY `publication_list_ibfk_1` (`Experts_ID`);

--
-- Indexes for table `user_database`
--
ALTER TABLE `user_database`
  ADD PRIMARY KEY (`Account_ID`),
  ADD KEY `Experts_ID` (`Experts_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cv`
--
ALTER TABLE `cv`
  ADD CONSTRAINT `cv_ibfk_1` FOREIGN KEY (`Experts_ID`) REFERENCES `expert` (`Experts_ID`);

--
-- Constraints for table `expert`
--
ALTER TABLE `expert`
  ADD CONSTRAINT `expert_ibfk_1` FOREIGN KEY (`PublicationID`) REFERENCES `publication_list` (`PublicationID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `expert_ibfk_2` FOREIGN KEY (`Account_ID`) REFERENCES `user_database` (`Account_ID`),
  ADD CONSTRAINT `expert_ibfk_3` FOREIGN KEY (`ResearchID`) REFERENCES `area_of_research` (`ResearchID`),
  ADD CONSTRAINT `expert_ibfk_4` FOREIGN KEY (`EXPERT_CV_ID`) REFERENCES `cv` (`EXPERT_CV_ID`);

--
-- Constraints for table `general_users`
--
ALTER TABLE `general_users`
  ADD CONSTRAINT `general_users_ibfk_1` FOREIGN KEY (`Account_ID`) REFERENCES `user_database` (`Account_ID`),
  ADD CONSTRAINT `general_users_ibfk_2` FOREIGN KEY (`ResearchID`) REFERENCES `area_of_research` (`ResearchID`);

--
-- Constraints for table `publication_list`
--
ALTER TABLE `publication_list`
  ADD CONSTRAINT `publication_list_ibfk_1` FOREIGN KEY (`Experts_ID`) REFERENCES `expert` (`Experts_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_database`
--
ALTER TABLE `user_database`
  ADD CONSTRAINT `user_database_ibfk_1` FOREIGN KEY (`Experts_ID`) REFERENCES `expert` (`Experts_ID`),
  ADD CONSTRAINT `user_database_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `general_users` (`User_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
