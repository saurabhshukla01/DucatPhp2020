-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2020 at 06:19 AM
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
-- Database: `pro6`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `date`) VALUES
(1, 'admin', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', '2020-07-02 12:52:42');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cname`, `image`, `date`) VALUES
(4, 'Apple', '2085999867.jpg', '2020-07-17 08:08:04'),
(5, 'oppo', '1139206652.jpg', '2020-07-17 07:58:22'),
(7, 'Samsung', '1274933381.jpg', '2020-07-15 07:47:41');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `procat` varchar(255) NOT NULL,
  `mobile_name` varchar(150) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `processor` varchar(255) NOT NULL,
  `operating_system` varchar(255) NOT NULL,
  `ram` varchar(255) NOT NULL,
  `internal_memory` varchar(255) NOT NULL,
  `camera` varchar(255) NOT NULL,
  `display` varchar(255) NOT NULL,
  `battery` varchar(255) NOT NULL,
  `colour` varchar(255) NOT NULL,
  `warranty` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `procat`, `mobile_name`, `price`, `quantity`, `discount`, `processor`, `operating_system`, `ram`, `internal_memory`, `camera`, `display`, `battery`, `colour`, `warranty`, `image`, `date`) VALUES
(6, '4', 'Apple iphone X', 64999, 20, 15, 'octa core', 'ios', '8GB', '256GB', '12 + 12MP', '5\" inch', '4000 mah', 'Black', '1 year', '5f0f08773abed.jpg', '2020-07-23 08:04:26'),
(7, '4', 'Apple iphone 6s', 35000, 20, 15, 'octa core', 'ios', '8GB', '256GB', '12 + 12MP', '5\" inch', '4000 mah', 'Black', '1 year', '5f198444ce5ac.jpg', '2020-07-23 07:06:20'),
(8, '5', 'Oppo F5', 35000, 20, 15, 'octa core', 'Android', '8GB', '256GB', '12 + 12MP', '5\" inch', '4000 mah', 'Black', '1 year', '5f19845d0b9fd.jpg', '2020-07-23 07:06:45'),
(9, '7', 'Samsung Galaxy S9', 65000, 20, 15, 'octa core', 'Android', '8GB', '256GB', '12 + 12MP', '5\" inch', '4000 mah', 'Gold', '1 year', '5f198475beae3.jpg', '2020-07-23 07:07:09'),
(10, '7', 'Samsung Galaxy J8', 34584, 20, 15, 'octa core', 'Android', '8GB', '256GB', '12 + 12MP', '5\" inch', '4000 mah', 'Black', '1 year', '5f1984912c943.jpg', '2020-07-23 08:04:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile`, `address`, `city`, `pincode`, `image`, `date`) VALUES
(1, 'Saurabh Shukla', 'saurabh@gmail.com', '12345678', '2147483647', 'Noida', 'Uttar Pradesh', 122000, '40812689.jpg', '2020-08-01 04:12:55'),
(3, 'ABC', 'abc@gmail.com', '12345678', '99887766554', 'Noida', 'Noida', 987788, '276333420.jpg', '2020-08-01 04:17:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cname` (`cname`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
