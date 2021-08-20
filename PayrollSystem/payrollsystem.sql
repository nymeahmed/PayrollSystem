-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2021 at 12:44 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payrollsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` int(255) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `username`, `password`, `phone`, `email`, `address`) VALUES
(25, 'emp1', '123', '123456', 'nymeahmedhimu@gmail.com', 'Badda'),
(26, 'emp2', '12345', '1234567', 'qw@gmail.com', 'Mirpur'),
(27, 'emp3', '12345', '8888', 'a@gmail.com', 'Kuril'),
(28, 'emp4', '12345', '1234567', 'abc@abc.com', 'Gulshan'),
(29, 'emp5', '12345', '987654321', 'qw@gmail.com', 'Mohakhali');

-- --------------------------------------------------------

--
-- Table structure for table `hr`
--

CREATE TABLE `hr` (
  `id` int(255) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `username` text NOT NULL,
  `gender` text NOT NULL,
  `number` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hr`
--

INSERT INTO `hr` (`id`, `firstname`, `lastname`, `username`, `gender`, `number`, `address`, `email`, `password`) VALUES
(20, 'nyme', 'ahmed', 'nymeahmed', 'male', '01521216587', 'Dhaka', 'nymeahmedhimu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(255) NOT NULL,
  `empuname` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `payment_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `empuname`, `month`, `date`, `amount`, `payment_by`) VALUES
(3, 'emp1', 'January', '11/8/20', '3000', 'nymeahmed'),
(4, 'emp2', 'March', '11/8/20', '7000', 'nymeahmed'),
(6, 'emp2', 'April', '12/08/2020', '4000', 'nymeahmed'),
(7, 'emp3', 'May', '12/08/2020', '3000', 'nymeahmed'),
(8, 'emp4', 'June', '12/08/2020', '6500', 'nymeahmed'),
(9, 'emp5', 'July', '12/08/2020', '5000', 'nymeahmed'),
(10, 'emp3', 'June', '12/08/2020', '7000', 'himuahmed'),
(11, 'emp4', 'July', '12/08/2020', '6000', 'himuahmed'),
(12, 'emp5', 'August', '12/08/2020', '7000', 'himuahmed'),
(13, 'emp1', 'March', '12/08/2020', '6500', 'himuahmed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hr`
--
ALTER TABLE `hr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `hr`
--
ALTER TABLE `hr`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
