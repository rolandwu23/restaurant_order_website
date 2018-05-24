-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 23, 2018 at 01:52 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assign`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_order`
--

CREATE TABLE `assign_order` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phno` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `age` int(20) NOT NULL,
  `item` varchar(30) NOT NULL,
  `quantity` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_order`
--

INSERT INTO `assign_order` (`id`, `name`, `phno`, `email`, `age`, `item`, `quantity`) VALUES
(37, 'Aung', 123, 'aung@gmail.com', 12, 'burger', 1),
(38, 'Yolo', 123, 'fdsa', 0, 'dfa', 0),
(39, 'aung', 98, 'ut', 0, 'fries', 8),
(43, 'YoloYay', 34, 'dsa', 3, 'sandwich', 4),
(44, 'YoloYay', 34, 'dsa', 3, 'sandwich', 4),
(124, 'Hey', 123, 'Hey', 123, 'burger', 123),
(125, 'Hey', 123, 'Hey', 123, 'burger', 123),
(126, 'oo', 2, 'oo@gmail.com', 1, 'burger', 123),
(129, 'aung', 12, 'aung@gmail.com', 12, 'burger', 1),
(132, 'Hey', 123, 'hey@gmail.com', 12, 'burger', 12),
(134, 'Hello', 12, 'Hello@gmail.com', 12, 'burger', 12),
(136, 'Uo', 124, 'Uo@gmail.com', 12, 'burger', 12),
(137, 'das', 0, 'dfsa', 0, 'burger', 0),
(147, 'gg', 0, 'gg', 0, 'burger', 0),
(148, 'gg', 0, 'gg', 0, 'burger', 1),
(149, 'tt', 0, 'tt', 0, 'sandwich', 1),
(150, 'yy', 123, 'yy@gmail.com', 12, 'burger', 1),
(151, 'uu', 23, 'uu@gmail.com', 12, 'fries', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign_order`
--
ALTER TABLE `assign_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign_order`
--
ALTER TABLE `assign_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
