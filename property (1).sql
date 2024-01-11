-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2024 at 07:39 PM
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
-- Database: `property`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `sex` enum('male','female') NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `firstname`, `lastname`, `email`, `birthdate`, `sex`, `username`, `password`) VALUES
(5, 'David', 'Rubimbura', 'rubdavid20@gmail.com', '2024-01-17', 'male', 'david', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE `booked` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`id`, `fname`, `lname`, `email`, `tel`, `category`, `status`) VALUES
(1, 'david', 'rubimbura', 'rub@gmail.com', '0786440779', 'land', 'accept the price provided'),
(2, 'kofi', 'rub', 'rub@gmail.com', '54896956', 'house', 'negotiate on the price provided'),
(3, 'fox', 'echo', 'rub@gmail.com', '2345453', 'land', 'accept the price provided'),
(4, 'kjd', 'jg', 'ert@gmail.com', '75834657', 'land', 'accept the price provided'),
(5, 'fhdjfb', 'rubimbura', 'rub@gmail.com', '58348957', 'house', 'accept the price provided'),
(6, '', '', '', '', 'land', 'accept the price provided'),
(7, 'kabayiza kevin', '12344567890887', 'kevin@gmail.com', '567676787889', 'land', 'accept the price provided'),
(8, '', '', '', '', 'land', 'accept the price provided'),
(9, 'gjnkdls;fd', '67890567890', 'rub@gmail.com', '4567890', 'house', 'accept the price provided'),
(10, '4567890', '567890', 'ert@gmail.com', '345678', 'house', 'negotiate on the price provided'),
(11, '23456789', '345678', 'kevin@gmail.com', '345678', 'house', 'negotiate on the price provided'),
(12, 'fgdhjkdlsa', '2345678', 'ert@gmail.com', '2345678', 'house', 'negotiate on the price provided');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telnbr` varchar(255) NOT NULL,
  `comment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `username`, `email`, `telnbr`, `comment`) VALUES
(1, 'gbhh', 'rub@gmail.com', '76890', 'vghbjnkmknb hjnjnk'),
(12, 'nnj', 'rub@gmail.com', '4567890', 'gvhhjkn'),
(16, 'hjj', 'jjj@gmail.com', '89898', 'hello bro'),
(18, 'kkmk', 'kofi@gmail.com', '1233345', 'byakunze se mn '),
(24, 'ukura', 'rub@gmail.com', '077874338', 'hello,amkr ');

-- --------------------------------------------------------

--
-- Table structure for table `uploaded`
--

CREATE TABLE `uploaded` (
  `idupload` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `sector` varchar(255) NOT NULL,
  `cell` varchar(255) NOT NULL,
  `village` varchar(255) NOT NULL,
  `value` decimal(10,2) NOT NULL,
  `latitude` decimal(9,6) NOT NULL,
  `longitude` decimal(9,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uploaded`
--

INSERT INTO `uploaded` (`idupload`, `file`, `category`, `province`, `district`, `sector`, `cell`, `village`, `value`, `latitude`, `longitude`) VALUES
(1, 'images/pic11.jpeg', 'house', 'east', 'gatsibo', 'gahanga', 'mitovu', 'kanyange', 102.00, 0.000000, 0.000000),
(2, 'images/images (11).jpeg', 'land', 'west', 'Nyarugenge', 'gahanga', 'Munanira', 'gahonzi', 12.00, 0.000000, 0.000000),
(3, 'images/images (5).jpeg', 'land', 'kigali', 'Nyarugenge', 'kiramuruzi', 'Munanira', 'karama', 120.00, 0.000000, 0.000000),
(4, 'images/pic2.webp', 'house', 'north', 'musanze', 'kiramuruzi', 'mitovu', 'karama', 50.00, 0.000000, 0.000000),
(5, 'images/pic7.jpg', 'house', 'east ', 'Nyarugenge', 'nyagatare', 'murinja', 'karama', 10000000.00, 0.000000, 0.000000),
(6, 'images/pic2.webp', 'house', 'east ', 'musanze', 'nyagatare', 'murinja', 'Kanyange', 99999999.99, 0.000000, 0.000000),
(7, 'images/pic9.jpeg', 'house', 'north', 'nyagatare', 'Nyakabanda', 'murinja', 'Kanyange', 20000000.00, 0.000000, 0.000000),
(8, 'images/pic4.jpg', 'house', 'west', 'kicukiro', 'gahanga', 'mitovu', 'gahonzi', 30000000.00, 0.000000, 0.000000),
(9, 'images/images (7).jpeg', 'land', 'west', 'nyagatare', 'nyagatare', 'mitovu', 'karama', 10000000.00, 0.000000, 0.000000),
(10, 'images/images (6).jpeg', 'land', 'north', 'nyagatare', 'Nyakabanda', 'Munanira', 'Kanyange', 99999999.99, 0.000000, 0.000000),
(11, 'images/images (1).jpeg', 'land', 'kigali', 'kicukiro', 'Nyakabanda', 'Munanira', 'karama', 30000000.00, 0.000000, 0.000000),
(12, 'images/download (1).jpeg', 'land', 'north', 'kicukiro', 'kiramuruzi', 'murinja', 'gahonzi', 99999999.99, 0.000000, 0.000000),
(13, 'images/images (8).jpeg', 'land', 'east ', 'kicukiro', 'gahanga', 'rttrtrtrtr', 'gahonzi', 20000000.00, 0.000000, 0.000000),
(14, 'images/images (12).jpeg', 'land', 'west', 'nyagatare', 'kiramuruzi', 'kibondo', 'muhonzi', 50000000.00, 0.000000, 0.000000),
(15, 'images/pic6.jpeg', 'house', 'north', 'musanze', 'gahanga', 'kibondo', 'gahonzi', 99999999.99, 0.000000, 0.000000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birth` date NOT NULL,
  `sex` enum('male','female') NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `birth`, `sex`, `username`, `password`) VALUES
(1, 'claude', 'xzcvzxc', 'jjj@gmail.com', '2024-01-05', 'male', 'cc', 'scs'),
(2, 'kofi', 'david', 'kura@gmail.com', '2024-01-20', 'male', 'ukura', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booked`
--
ALTER TABLE `booked`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploaded`
--
ALTER TABLE `uploaded`
  ADD PRIMARY KEY (`idupload`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `booked`
--
ALTER TABLE `booked`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `uploaded`
--
ALTER TABLE `uploaded`
  MODIFY `idupload` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
