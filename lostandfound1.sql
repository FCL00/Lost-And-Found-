-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 02:13 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lostandfound1`
--

-- --------------------------------------------------------

--
-- Table structure for table `items_table`
--

CREATE TABLE `items_table` (
  `id` int(30) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `img_dir` varchar(200) NOT NULL,
  `found` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items_table`
--

INSERT INTO `items_table` (`id`, `item_name`, `description`, `date`, `img_dir`, `found`) VALUES
(1, 'iPhone Promax', 'Color : black and got a crack on the screen', '2021-12-06', '', 0),
(2, 'Earphone', 'Black Apple Earphone ', '2021-12-05', '', 1),
(3, 'Earphone', 'Black Apple Earphone ', '2021-12-05', '', 1),
(4, 'LV Wallet', 'brown Louis Vuitton wallet  ', '2021-12-06', '', 1),
(5, 'Handle Bag', 'Red Hawk bag with umbrella on it  ', '2021-12-02', '', 0),
(6, 'dsad', 'dasdsad', '2021-12-06', '', 0),
(7, 'MacBook Pro', 'Found by fernando Lagahit on Building 2', '2021-12-08', '', 0),
(8, 'Ryzen Laptop', 'Found by Diamond Rivero', '2021-12-09', '', 0),
(9, 'SnowBear Candy', 'Used Candy Found by Guevarra Jeffrey', '2021-12-08', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `id` int(30) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`id`, `username`, `password`, `fname`, `lname`) VALUES
(1, 'henzels', 'tabotimba', 'Henzel Marc', 'Quitaneg'),
(2, 'fernando', '123', 'Fernando', 'Lagahit'),
(3, 'Diamond', '123', 'Diamond', 'Rivero');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items_table`
--
ALTER TABLE `items_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items_table`
--
ALTER TABLE `items_table`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
