-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2019 at 02:15 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('sai', 'sai123'),
('saili', 'saili123');

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

CREATE TABLE `availability` (
  `roomtype` varchar(20) NOT NULL,
  `no_of_rooms` int(11) NOT NULL,
  `available_rooms` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`roomtype`, `no_of_rooms`, `available_rooms`, `price`) VALUES
('banyan', 20, 18, 2000),
('cypress', 30, 20, 2500);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `roomtype` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `fromdate`, `todate`, `roomtype`, `name`, `email`, `phone`) VALUES
(4, '2019-04-25', '2019-04-27', 'cypress', 'sai', 'sai@gmail.com', '8596456596'),
(5, '2019-04-28', '2019-04-30', 'cypress', 'saili', 'saili@gmail.com', '8596456596'),
(6, '2019-04-30', '2019-05-01', 'cypress', 'rina', 'rina@gmail.com', '9685456956'),
(7, '2019-04-27', '2019-04-30', 'banyan', 'rita', 'rita@gmail.com', '9632564565'),
(9, '2019-04-19', '2019-04-20', 'cypress', 'neha', 'neha@gmail.com', '9656456585'),
(10, '2019-04-26', '2019-04-30', 'banyan', 'kadamsai', 'kadansai2512@gmail.c', '9869192489'),
(11, '2019-04-24', '2019-04-29', 'cypress', 'tina', 'tina@gmail.com', '9685695856'),
(13, '2019-04-24', '2019-04-27', 'cypress', 'juhi', 'juhi@gmail.com', '8596859685'),
(14, '2019-04-24', '2019-04-27', 'cypress', 'priya', 'priya@gmail.com', '8596456585');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` varchar(20) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `occupancy` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_type`, `occupancy`, `price`) VALUES
('r1', 'cypress', 4, 2000),
('r10', 'banyan', 6, 2500),
('r2', 'cypress', 4, 2000),
('r3', 'cypress', 4, 2000),
('r4', 'cypress', 4, 2000),
('r5', 'cypress', 4, 2000),
('r6', 'banyan', 6, 2500),
('r7', 'banyan', 6, 2500),
('r8', 'banyan', 6, 2500),
('r9', 'banyan', 6, 2500);

-- --------------------------------------------------------

--
-- Table structure for table `t1`
--

CREATE TABLE `t1` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `recovery_email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `password_again` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t1`
--

INSERT INTO `t1` (`id`, `username`, `email`, `recovery_email`, `password`, `password_again`) VALUES
(23, 'saili', 'saili@gmail.com', 'saili@gmail.com', 'saili123', 'saili123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `availability`
--
ALTER TABLE `availability`
  ADD PRIMARY KEY (`roomtype`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `t1`
--
ALTER TABLE `t1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `t1`
--
ALTER TABLE `t1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
