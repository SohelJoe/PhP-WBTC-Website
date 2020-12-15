-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2020 at 06:03 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wbtc`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus_route`
--

CREATE TABLE `bus_route` (
  `route_no` varchar(20) NOT NULL,
  `route_type` varchar(20) NOT NULL,
  `source` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `via_route` varchar(250) DEFAULT NULL,
  `frequency` varchar(10) DEFAULT NULL,
  `dpre_time` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_route`
--

INSERT INTO `bus_route` (`route_no`, `route_type`, `source`, `destination`, `via_route`, `frequency`, `dpre_time`) VALUES
('C8', 'local', 'Barasat', 'Joka', 'Madhyamgram,Eco Park, Tollygaunge', '30 Min', '8:30 AM'),
('E17', 'long', 'Barasat', 'Digha', 'Esplanade, Kolaghat', '2 in a Day', '7 AM & 11 AM'),
('D8', 'local', 'Barasat', 'Basuriya', 'Kazipara, Kadambagachi, Golabari', '45 Mins', '7 AM'),
('E45', 'long', 'Barasat', 'Amta', 'None', '4 Hours', '9 AM'),
('C29', 'local', 'Barasat', 'Barrakpore', 'Hela Botala, Nilgaunge', '45 Min', '8 AM');

-- --------------------------------------------------------

--
-- Table structure for table `fare_list`
--

CREATE TABLE `fare_list` (
  `route_no` varchar(20) NOT NULL,
  `fare` int(5) NOT NULL,
  `fare_chart` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fare_list`
--

INSERT INTO `fare_list` (`route_no`, `fare`, `fare_chart`) VALUES
('C8', 44, 'NONE'),
('E17', 250, 'NONE'),
('D8', 52, 'NONE'),
('E45', 170, 'NONE');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(14, 'Secure', 'secure@secure.com', '$2y$10$.WM.HR69hThBmAJb05GdGOMMVw.TPBWnrqDo71t55lcg0zBqHvhem'),
(15, 'sh', 'email@gmail.com', '$2y$10$PZpamXl9PRQ8hHZ7WEBF/eB0f6mAtJf6I5K6ccQIS6zU8Sfm95a..'),
(16, 'gh', 'zxavmnvhb@gmail', '$2y$10$/CS28rKmNikCaWTwDPWR5uidoqKa8vM1lFoSB3A6n4VbciWUY62KO'),
(17, 'cxz', 'secure@csecure.com', '$2y$10$texCD.rm77xQtI3CoddcWOFcaarILUgNvzQJMhkhp8ShFGxp/xucm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus_route`
--
ALTER TABLE `bus_route`
  ADD PRIMARY KEY (`route_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
