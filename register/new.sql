-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2021 at 10:45 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `new`
--

CREATE TABLE `new` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `addr` text NOT NULL,
  `mobile` text NOT NULL,
  `dob` text NOT NULL,
  `username` text NOT NULL,
  `passwd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new`
--

INSERT INTO `new` (`id`, `fname`, `addr`, `mobile`, `dob`, `username`, `passwd`) VALUES
(2, 'abhi', 'new pune road,mumbai', '8878789899', '2021-12-08', 'abhi', 'as232'),
(107, 'bbb', 'sadasd', '6575756757', '2021-12-17', 'abhi', '1234'),
(108, 'asdfs', 'edfsdsf', '23324234', '2021-12-13', 'md5fgdg', 'md51234'),
(112, 'weadaad', 'afssgsdges', '2143242342', '2021-12-25', 'fsfsf', '202cb962ac59075b964b07152d234b70'),
(113, 'adsadfsfds', 'dsfefdsfasf', '5546455466', '2021-12-16', 'asdfsdfs', 'e1786209a2d2e4846d90c4ce56ace0d9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `new`
--
ALTER TABLE `new`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `new`
--
ALTER TABLE `new`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
