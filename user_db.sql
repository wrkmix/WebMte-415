-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2021 at 07:42 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final-p`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_db`
--

CREATE TABLE `user_db` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_db`
--

INSERT INTO `user_db` (`id`, `username`, `password`, `email`) VALUES
(3, '11', '6512bd43d9caa6e02c990b0a82652dca', '11'),
(4, '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(5, '88', '2a38a4a9316c49e5a833517c45d31070', '88@gmail.com'),
(7, 'test5', '202cb962ac59075b964b07152d234b70', 'test5@gmail.com'),
(8, '22', 'ec02c59dee6faaca3189bace969c22d3', 'asdasd@mail.com'),
(9, '44', '3dcf9c448778a2c94e663093cadd91aa', 'asdasdas@asdas'),
(10, '1112', '827ccb0eea8a706c4c34a16891f84e7b', 'asfdhgyu@123yuiyuighjbmjn'),
(11, '1113', '827ccb0eea8a706c4c34a16891f84e7b', 'kkooiill@kkooiill');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_db`
--
ALTER TABLE `user_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_db`
--
ALTER TABLE `user_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
