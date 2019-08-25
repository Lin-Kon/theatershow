-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2019 at 12:30 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theatershow`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'addpas');

-- --------------------------------------------------------

--
-- Table structure for table `movielist`
--

CREATE TABLE `movielist` (
  `id` int(11) NOT NULL,
  `title` varchar(999) NOT NULL,
  `description` varchar(999) NOT NULL,
  `time` time NOT NULL,
  `imgsrc` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movielist`
--

INSERT INTO `movielist` (`id`, `title`, `description`, `time`, `imgsrc`) VALUES
(11, 'khgj', 'kjhgk', '11:11:00', '3idiots.jpg'),
(12, 'asdflj', 'asdl;fkj', '14:32:00', ''),
(13, 'asdfl;j', 'asdflj', '11:11:00', 'cars_road_autumn_91074_1280x720.jpg'),
(16, '', '', '00:00:00', ''),
(17, 'Dhamaal', '', '23:11:00', 'dhamaal.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `showtime`
--

CREATE TABLE `showtime` (
  `code` varchar(20) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `showtime`
--

INSERT INTO `showtime` (`code`, `time`) VALUES
('MORNNING', '10:00:00'),
('NOON', '13:00:00'),
('AFTERNOON', '16:00:00'),
('EVENING', '19:00:00'),
('NIGHT', '22:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movielist`
--
ALTER TABLE `movielist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movielist`
--
ALTER TABLE `movielist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
