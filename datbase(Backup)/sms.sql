-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2018 at 02:17 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `phoneno` int(11) NOT NULL,
  `image` text NOT NULL,
  `quilification` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `fullname`, `phoneno`, `image`, `quilification`) VALUES
(1, 'nihar@gmail.com', 0, 'nihar', 123456789, '3D_Fantasy_Places_HD_0040 - Copy.jpg', 'PHP'),
(7, 'jaiveergupta95@gmail.com', 421493, 'Jaiveer Gupta', 2147483647, '300_rise_of_an_empire_2016-wallpaper-1920x1080.jpg', 'Java'),
(10, 'pankaj@gamil.com', 95, 'pankaj', 1475478754, '300_rise_of_an_empire_2016-wallpaper-1920x1080.jpg', 'Java'),
(11, 'susant@gmail.com', 0, 'susant', 147258369, '1920x1080_001 - Copy.jpg', 'Java'),
(12, 'pancham@gmail.com', 0, 'pancham', 2145789632, '1920x1080_001.jpg', 'PHP'),
(22, 'raju@gmail.com', 3665, 'raju', 2147483647, '%D0%9A%D0%BE%D1%81%D0%BC%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F-%D1%81%D1%82%D0%B0%D0%BD%D1%86%D0%B8%D1%8F-%D0%91%D0%BE%D0%BB%D1%8C%D1%88%D0%B8%D0%B5-%D0%9F%D0%BB%D0%B0%D0%BD%D0%B5%D1%82%D1%8B.jpg', 'PHP'),
(23, 'ram@gmail.com', 6, 'ram', 2147483647, '3D_Fantasy_Places_HD_0040 - Copy.jpg', 'Java'),
(24, 'kavita@gmail.com', 38, 'kavita', 2147483647, '2uelg5Gfla-1920x1080 - Copy.jpg', 'PHP'),
(25, 'web@gmil.com', 0, 'web', 2147483647, '[000007].jpg', 'Java'),
(26, 'papa@gmil.com', 0, 'papa', 2147483647, '[000011].jpg', 'PHP'),
(27, 'maa@gmil.com', 71, 'maa', 2147483647, '[000011].jpg', 'PHP'),
(28, 'com@gmail.com', 48311, 'com', 2147483647, '[000010].jpg', 'PHP'),
(29, 'varun@gmail.com', 6, 'varun', 2147483647, '[000008].jpg', 'PHP'),
(30, 'md5@gmail.com', 1, 'md5', 2147483647, '[000007].jpg', 'PHP');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `rollno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pcont` varchar(15) NOT NULL,
  `standerd` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `rollno`, `name`, `city`, `pcont`, `standerd`, `image`) VALUES
(2, 3, 'Jaiveer Gupta', 'delhi', '4754787878', 12, '3d-abstract-colorful-tree-wallpaper.jpg'),
(3, 16, 'varun kumar', 'Delhi', '8787878745', 12, '[000012].jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`,`username`),
  ADD UNIQUE KEY `username` (`username`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
