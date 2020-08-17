-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2020 at 03:26 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ducatwfh_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `gender` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `gender`, `city`) VALUES
(1, 'saurabh', 'saurabh@gmail.com', '12345678', 'male', 'Noida'),
(2, 'vipin', 'vipin@gmail.com', '12345678', 'Male', 'Noida'),
(3, 'saurabh.shukla', 'saurabh.shukla@gmail.com', '12345678', 'Male', 'Noida');

-- --------------------------------------------------------

--
-- Table structure for table `insertdb`
--

CREATE TABLE `insertdb` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `job_title` varchar(50) NOT NULL,
  `salary` int(11) NOT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insertdb`
--

INSERT INTO `insertdb` (`id`, `name`, `mobile`, `email`, `job_title`, `salary`, `address`) VALUES
(10, 'sohan', 1234567890, 'sohan@gmail.com', 'JE', 20999, 'noida 137'),
(11, 'rammohan', 1234567890, 'ramkumar053@gmail.com', 'JE', 20999, 'noida 137'),
(12, 'arjunkumar', 1234567890, 'arjunkumar@gmail.com', 'JE', 20999, 'noida 137'),
(13, 'abc', 1234567890, 'abc@gmail.com', 'JE', 20999, 'noida 137'),
(14, 'abc', 1234567890, 'abc@gmail.com', 'JE', 20999, 'noida 137'),
(15, 'abc123', 1234567890, 'abc123@gmail.com', 'JE', 20999, 'noida 137'),
(16, 'shyam kumar shukla', 1234567890, 'shymkumr@gmail.com', 'JE', 20999, 'noida 137'),
(17, 'kumarvinay', 1234567890, 'vk@gmail.com', 'JE', 20999, 'noida 137'),
(18, 'john', 1234567890, 'john@example.com', 'JE', 20999, 'noida 137'),
(19, 'Mary', 1234567890, 'mary@example.com', 'JE', 20999, 'noida 137'),
(20, 'Julie', 1234567890, 'julie@example.com', 'JE', 20999, 'noida 137'),
(21, 'john', 1234567890, 'john@example.com', 'JE', 20999, 'noida 137'),
(22, 'Mary', 1234567890, 'mary@example.com', 'JE', 20999, 'noida 137'),
(23, 'Julie', 1234567890, 'julie@example.com', 'JE', 20999, 'noida 137'),
(24, 'ram123', 1234567890, 'ram@gmail.com', 'JE', 20999, 'noida 137'),
(25, 'John vinay', 1234567890, 'johnvinay@example.com', 'JE', 20999, 'noida 137'),
(26, 'John vinay', 1234567890, 'johnvinay@example.com', 'JE', 20999, 'noida 137'),
(27, 'John', 1234567890, 'john@example.com', 'JE', 20999, 'noida 137'),
(28, 'Moe', 1234567890, 'mor@example.com', 'JE', 20999, 'noida 137'),
(29, 'Julie', 1234567890, 'julie@example.com', 'JE', 20999, 'noida 137'),
(30, 'ram vinay', 2147483647, 'sona.vipin@gmail.com', 'HE', 9800, 'Noida');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rollno` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `class` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `rollno`, `address`, `class`) VALUES
(29, 'ram kumar vinay', 1082, 'Dehli', '21'),
(30, 'ram', 1080, 'Delhi', '2'),
(31, 'ram', 12134, 'Noida', '10');

-- --------------------------------------------------------

--
-- Table structure for table `test_db`
--

CREATE TABLE `test_db` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `job title` varchar(50) NOT NULL,
  `salary` int(11) NOT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_db`
--

INSERT INTO `test_db` (`id`, `name`, `mobile`, `email`, `job title`, `salary`, `address`) VALUES
(1, 'Doe', 1234567890, 'lovekuamr@gmail.com', 'JE', 20999, 'noida 137'),
(2, 'love', 1234567890, 'lovekuamr@gmail.com', 'JE', 20999, 'noida 137'),
(3, 'soniya', 1234567890, 'soniya@gmail.com', 'JE', 20999, 'noida 137'),
(4, 'Doe', 1234567890, 'lovekuamr@gmail.com', 'JE', 20999, 'noida 137'),
(5, 'love', 1234567890, 'lovekuamr@gmail.com', 'JE', 20999, 'noida 137'),
(6, 'soniya', 1234567890, 'soniya@gmail.com', 'JE', 20999, 'noida 137'),
(7, 'soniya', 1234567890, 'soniya@gmail.com', 'JE', 20999, 'noida 137'),
(8, 'home', 1234567890, 'home@gmail.com', 'JE', 20999, 'noida 137'),
(9, 'kumarvinay', 1234567890, 'kumarvinay@gmail.com', 'JE', 20999, 'noida 137'),
(10, 'sohan', 1234567890, 'sohan@gmail.com', 'JE', 20999, 'noida 137'),
(11, 'rammohan', 1234567890, 'ramkumar053@gmail.com', 'JE', 20999, 'noida 137'),
(12, 'arjunkumar', 1234567890, 'arjunkumar@gmail.com', 'JE', 20999, 'noida 137'),
(13, 'abc', 1234567890, 'abc@gmail.com', 'JE', 20999, 'noida 137'),
(14, 'abc', 1234567890, 'abc@gmail.com', 'JE', 20999, 'noida 137'),
(15, 'abc123', 1234567890, 'abc123@gmail.com', 'JE', 20999, 'noida 137'),
(16, 'shyam kumar shukla', 1234567890, 'shymkumr@gmail.com', 'JE', 20999, 'noida 137'),
(17, 'kumarvinay', 1234567890, 'vk@gmail.com', 'JE', 20999, 'noida 137'),
(18, 'john', 1234567890, 'john@example.com', 'JE', 20999, 'noida 137'),
(19, 'Mary', 1234567890, 'mary@example.com', 'JE', 20999, 'noida 137'),
(20, 'Julie', 1234567890, 'julie@example.com', 'JE', 20999, 'noida 137'),
(21, 'john', 1234567890, 'john@example.com', 'JE', 20999, 'noida 137'),
(22, 'Mary', 1234567890, 'mary@example.com', 'JE', 20999, 'noida 137'),
(23, 'Julie', 1234567890, 'julie@example.com', 'JE', 20999, 'noida 137'),
(24, 'ram123', 1234567890, 'ram@gmail.com', 'JE', 20999, 'noida 137'),
(25, 'John vinay', 1234567890, 'johnvinay@example.com', 'JE', 20999, 'noida 137'),
(26, 'John vinay', 1234567890, 'johnvinay@example.com', 'JE', 20999, 'noida 137'),
(27, 'John', 1234567890, 'john@example.com', 'JE', 20999, 'noida 137'),
(28, 'Moe', 1234567890, 'mor@example.com', 'JE', 20999, 'noida 137'),
(29, 'Julie', 1234567890, 'julie@example.com', 'JE', 20999, 'noida 137'),
(30, 'maria', 1234567890, 'maria@example.com', 'JE', 20999, 'noida 137');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insertdb`
--
ALTER TABLE `insertdb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `insertdb`
--
ALTER TABLE `insertdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
