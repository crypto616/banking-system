-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 07:40 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cadence bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `account_num` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact_num` varchar(15) NOT NULL,
  `location` varchar(30) NOT NULL,
  `current_balance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `name`, `account_num`, `email`, `contact_num`, `location`, `current_balance`) VALUES
(1, 'Rhythm Sharma', '62760724', 'srhythm2020@gmail.com', '8708537023', 'Kurukshetra', 1234740),
(2, 'Harshit Raj', '62760712', 'hraj07@gmail.com', '8607623649', 'Kurukshetra', 56550),
(3, 'Ishwar Baisla', '62761223', 'ishwar2303@gmail.com', '9821671707', 'Delhi', 396880),
(4, 'Tapas Baranwal', '62762016', 'tapas@bernol@gmail.com', '9017527234', 'Gurgaon', 1715140),
(5, 'Pankaj Gautam', '62761426', 'pankajg@mail.com', '7088360659', 'Ghaziabad', 971961),
(6, 'Bhawana Sharma', '62764919', 'bhanu192@gmail.com', '991548916', 'Noida', 1042070),
(7, 'Vipul Sharma', '62762415', 'vipulnav@gmail.com', '9034321325', 'Hisar', 1098740),
(8, 'Namrta Sharma', '62761112', 'namrta@gmail.com', '8295576486', 'Pune', 269364),
(9, 'Preeti Bhardwaj', '62760305', 'pbhardwaj@gmail.com', '8872366366', 'Amritsar', 330500),
(10, 'Divya Sharma', '62762119', 'ds1912@gmail.com', '8743658041', 'Faridabad', 1299700);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
