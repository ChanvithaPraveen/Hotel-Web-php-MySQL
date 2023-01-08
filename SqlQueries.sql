-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 07:37 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE `login_table` (
  `user_id` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`user_id`, `username`, `email`, `password`) VALUES
(23, 'admin', 'admin@gmail.com', '0e7517141fb53f21ee439b355b5a1d0a'),
(26, 'JohnSmith', 'john.smith@example.com', '6d40e095b7f43848dc76ec017592da29'),
(27, 'MarkMaccul', 'mark.macculum@example.com', 'd1af90699f2a2c983e6ccb7bee874414'),
(28, 'SureshDev', 'suresh.dev@example.com', '43f637abd004bc0b86ea275b94484140'),
(29, 'KruzzMart', 'kruzz.mark@example.com', 'b79e9deaec5c4bc4d11728db931e3a5e');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_table`
--

CREATE TABLE `reservation_table` (
  `reservation_id` int(10) NOT NULL,
  `arrival` date DEFAULT NULL,
  `departure` date DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `adults` int(10) DEFAULT NULL,
  `children` int(10) DEFAULT NULL,
  `room_pref` varchar(255) DEFAULT NULL,
  `user_query` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation_table`
--

INSERT INTO `reservation_table` (`reservation_id`, `arrival`, `departure`, `first_name`, `last_name`, `email`, `phone`, `adults`, `children`, `room_pref`, `user_query`) VALUES
(187, '2022-02-01', '2022-02-05', 'Jane', 'Doe', 'jane.doe@example.com', 214748364, 3, 0, 'Suite', 'I would like to book a room with a balcony.'),
(188, '2022-03-01', '2022-03-05', 'Bob', 'Smith', 'bob.smith@example.com', 214748365, 2, 2, 'Standard', 'I would like to book a room that is close to the pool.'),
(189, '2022-04-01', '2022-04-05', 'Alice', 'Smith', 'alice.smith@example.com', 214748366, 1, 1, 'Royal', 'I would like to book a room that is quiet and private.'),
(190, '2022-02-01', '2022-02-05', 'Jane', 'Mart', 'jane.mart@example.com', 214748367, 3, 0, 'Suite', 'I would like to book a room with a balcony.'),
(191, '2022-03-06', '2022-03-08', 'Steve', 'Kruz', 'steve.kruz@example.com', 214748368, 2, 2, 'Standard', 'I would like to book a room that is close to the pool.'),
(192, '2022-04-01', '2022-04-05', 'Hudi', 'wales', 'hudi.wales@example.com', 214748369, 1, 1, 'Deluxe', 'I would like to book a room that is quiet and private.'),
(193, '2023-01-04', '2023-01-05', 'Adam', 'Adin', 'adam.adin@example.com', 214748370, 2, 2, 'Deluxe', 'I am okay with your service!'),
(194, '2022-04-01', '2022-04-05', 'Rio', 'Josh', 'rio.josh@example.com', 214748371, 1, 1, 'Royal', 'I would like to book a room that is quiet and private.');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers_table`
--

CREATE TABLE `subscribers_table` (
  `subscriber_id` int(10) NOT NULL,
  `subscriber_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribers_table`
--

INSERT INTO `subscribers_table` (`subscriber_id`, `subscriber_email`) VALUES
(100, 'john.adam@example.com'),
(101, 'jonathon.rio@example.com'),
(102, 'too.resco@example.com'),
(103, 'euro.top@example.com'),
(104, 'sumo.fronz@example.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_table`
--
ALTER TABLE `login_table`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `reservation_table`
--
ALTER TABLE `reservation_table`
  ADD PRIMARY KEY (`reservation_id`);

--
-- Indexes for table `subscribers_table`
--
ALTER TABLE `subscribers_table`
  ADD PRIMARY KEY (`subscriber_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_table`
--
ALTER TABLE `login_table`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `reservation_table`
--
ALTER TABLE `reservation_table`
  MODIFY `reservation_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT for table `subscribers_table`
--
ALTER TABLE `subscribers_table`
  MODIFY `subscriber_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
