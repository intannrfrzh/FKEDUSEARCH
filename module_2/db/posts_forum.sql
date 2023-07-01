-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 07:53 AM
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
-- Database: `posts_forum`
--

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
SELECT *
FROM comments
JOIN posts ON comments.topic_id = posts.id;


SELECT comments.id, comments.comment, posts.topic, posts.description
FROM comments
JOIN posts ON comments.topic_id = posts.id;
