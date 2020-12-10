-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2020 at 05:43 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maba`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `role` varchar(100) NOT NULL,
  `accepted` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `gender`, `address`, `contact`, `role`, `accepted`) VALUES
(1, 'admin', 'laravue87', 'admin', 'man', 'jl.road', '082137556774', 'admin', '1'),
(2, 'maba', 'maba123', 'mahasiswa maba baru', 'woman', 'jl.michi', '0899547363', 'maba', '1'),
(3, 'brandal123', 'brandal123', 'brandal', 'man', 'jl. road michi', '08213543', 'maba', '0'),
(4, 'rajin123', 'rajin123', 'rajin', 'woman', 'jl. jalan', '089777', 'maba', '1'),
(16, 'asd', 'asd', 'bambang', 'man', 'asd', 'asd', 'maba', '0'),
(17, 'mashiro123', 'mashiro123', 'mashiro', 'woman', 'Road. blueberry', '838383', 'maba', '1'),
(19, 'asd', 'asd', 'hikari', 'woman', 'jl. pisang', '08134123', 'maba', '1'),
(20, 'nana123', 'nana123', 'nana', 'woman', 'Road. blackberry', '848484', 'maba', '1'),
(23, 'asd', 'asd', 'hikari', 'woman', 'asd', 'asd', 'maba', '0'),
(24, 'yuna123', 'asd', 'yuuna', 'woman', 'jl. stroberry', '949494', 'maba', '0'),
(26, 'asd', 'asd', 'korona', 'woman', 'asd', 'asd', 'maba', '?'),
(29, 'asd', 'asd', 'asada', 'woman', 'asd', 'asd', 'maba', '1'),
(31, 'asd', 'asd', 'hinata', 'woman', 'asd', '', 'maba', '1'),
(32, 'asd', 'asd', 'ruru', 'woman', 'asd', 'asd', 'maba', '?'),
(33, 'asd', 'asd', 'suya', 'woman', 'maou jo', '09302930', 'maba', '?'),
(68, 'sukebe', 'asd', 'tamaki', 'woman', 'daihachi', '123123', 'maba', '?'),
(69, 'asd', 'asd', 'iris', 'woman', 'asd', 'asd', 'maba', '1'),
(70, 'asd', 'asd', 'yurina', 'man', 'asd', 'asd', 'maba', '?'),
(71, 'touka123', 'touka123', 'touka', 'woman', 'asdasd', '123123', 'maba', '1'),
(72, '123', '123', '123', 'woman', '123', '123', 'maba', '?'),
(73, 'shiina123', 'asd', 'shiina', 'woman', 'asd', 'asd', 'maba', '?'),
(74, 'aoba123', 'aoba123', 'aoba', 'woman', 'asd', '123', 'maba', '1'),
(75, 'chino123', 'chino123', 'chino', 'woman', 'rabbit house', '123', 'maba', '1'),
(76, 'cocoa123', 'cocoa123', 'cocoa', 'woman', 'rabbit house', '3333', 'maba', '1'),
(77, 'maria123', 'maria123', 'maria', 'woman', 'asd12', '123123', 'maba', '?'),
(78, 'hojou123', 'hojou123', 'hojou', 'woman', 'asd', '123', 'maba', '?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
