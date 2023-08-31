-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2022 at 07:08 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auction`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'regular'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `role`) VALUES
(1, 'mainadmin', '$2y$10$fv5kKJam4vn5M1S4NP6ff./f.vgjRkILi4p3uwU/6ATKFG/3qvABy', 'super'),
(5, 'admin2', '$2y$10$fv5kKJam4vn5M1S4NP6ff./f.vgjRkILi4p3uwU/6ATKFG/3qvABy', 'regular'),
(6, 'admin3', '$2y$10$ROwaKseAEIPJffDmtWmI6.bWi1o1D376k9HK8uwbwOTYnfiCn/Sam', 'regular');

-- --------------------------------------------------------

--
-- Table structure for table `auctionn`
--

CREATE TABLE `auctionn` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lotNumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auctionn`
--

INSERT INTO `auctionn` (`id`, `name`, `lotNumber`) VALUES
(1, ' london', 0),
(2, ' kathmandu', 0),
(3, ' biratnagar', 334455);

-- --------------------------------------------------------

--
-- Table structure for table `carving`
--

CREATE TABLE `carving` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `auction_id` int(11) NOT NULL,
  `dimention` int(11) NOT NULL,
  `material` varchar(255) NOT NULL,
  `weight` int(11) NOT NULL,
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carving`
--

INSERT INTO `carving` (`id`, `name`, `description`, `price`, `auction_id`, `dimention`, `material`, `weight`, `status`) VALUES
(1, '  cr', '  iui', 9, 1, 9, 'first hand', 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `drawing`
--

CREATE TABLE `drawing` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `auction_id` int(11) NOT NULL,
  `dimention` int(11) NOT NULL,
  `medium` varchar(255) NOT NULL,
  `frame` varchar(255) NOT NULL,
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drawing`
--

INSERT INTO `drawing` (`id`, `name`, `description`, `price`, `auction_id`, `dimention`, `medium`, `frame`, `status`) VALUES
(1, ' drawing2', ' this his lksdjkfl', 4, 1, 4, '', 'yes', 1);

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `admin` varchar(255) DEFAULT NULL,
  `sold` tinyint(1) NOT NULL DEFAULT 0,
  `bid` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `name`, `email`, `telephone`, `admin`, `sold`, `bid`, `item_name`) VALUES
(9, 'Bijay Chaudhary', 'bijayc6001@gmail.com', '98779879', 'mainadmin', 1, 77, 'diamond'),
(10, 'gyan', 'gyan@gmail.com', '12324344', 'mainadmin', 1, 55, 'ben10'),
(11, 'Bijay Chaudhary', 'deepeshchaudhary2580@gmail.com', '9089049303', 'mainadmin', 1, 4, 'ben10'),
(12, 'Bijay Chaudhary', 'bijayc6001@gmail.com', '232323', 'mainadmin', 1, 66, 'sculpute');

-- --------------------------------------------------------

--
-- Table structure for table `painting`
--

CREATE TABLE `painting` (
  `id` int(11) NOT NULL,
  `painting_name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `type` varchar(255) NOT NULL,
  `medium` varchar(255) NOT NULL,
  `frame` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `painting`
--

INSERT INTO `painting` (`id`, `painting_name`, `details`, `price`, `status`, `type`, `medium`, `frame`, `name`) VALUES
(1, ' diamond', ' lfkjdkof', 111, 1, 'typically', '', 'yes', '0'),
(2, ' enemy', ' this ididsk', 10, 1, 'typically', '', 'yes', '0'),
(3, ' enemy', ' this ididsk', 10, 1, 'typically', '', 'yes', '0'),
(4, 'house paint', ' htisn', 1, 1, 'typically', '', 'yes', '32'),
(5, ' enemy', ' emery', 1, 1, 'acrylic', '', 'yes', '1');

-- --------------------------------------------------------

--
-- Table structure for table `photograph`
--

CREATE TABLE `photograph` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `auction_id` int(11) NOT NULL,
  `dimention` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photograph`
--

INSERT INTO `photograph` (`id`, `name`, `description`, `price`, `auction_id`, `dimention`, `type`, `status`) VALUES
(1, ' donalp', ' tuigkj', 6, 1, 7, 'first hand', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sculpture`
--

CREATE TABLE `sculpture` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `auction_id` int(11) NOT NULL,
  `dimention` int(11) NOT NULL,
  `material` varchar(255) NOT NULL,
  `weight` int(11) NOT NULL,
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sculpture`
--

INSERT INTO `sculpture` (`id`, `name`, `description`, `price`, `auction_id`, `dimention`, `material`, `weight`, `status`) VALUES
(1, ' acullppture', ' this is scpluter', 90, 1, 55, 'typically', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `special`
--

CREATE TABLE `special` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image_file` text NOT NULL,
  `offer_starting` date NOT NULL,
  `offer_ending` date NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `special`
--

INSERT INTO `special` (`id`, `name`, `image_file`, `offer_starting`, `offer_ending`, `description`) VALUES
(2, '10% Discount On Furniture', '', '2019-04-03', '2019-05-01', '10% Discount on this new sofa'),
(10, 'tet', '', '2019-05-16', '2019-05-01', 'tets'),
(11, 'test', '', '2019-05-01', '2019-05-30', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auctionn`
--
ALTER TABLE `auctionn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carving`
--
ALTER TABLE `carving`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drawing`
--
ALTER TABLE `drawing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `painting`
--
ALTER TABLE `painting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photograph`
--
ALTER TABLE `photograph`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sculpture`
--
ALTER TABLE `sculpture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `special`
--
ALTER TABLE `special`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `auctionn`
--
ALTER TABLE `auctionn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `carving`
--
ALTER TABLE `carving`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `drawing`
--
ALTER TABLE `drawing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `painting`
--
ALTER TABLE `painting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `photograph`
--
ALTER TABLE `photograph`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sculpture`
--
ALTER TABLE `sculpture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `special`
--
ALTER TABLE `special`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
