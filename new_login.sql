-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2022 at 03:04 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `user_status` int(1) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `username`, `email`, `pass`, `user_type`, `user_status`, `time`) VALUES
(1, 'jehan', '123@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin', 1, '2022-03-03 01:51:05'),
(2, 'nimal', 'nimali@123.com', '250cf8b51c773f3f8dc8b4be867a9a02', 'manager', 1, '2022-03-03 01:53:07'),
(3, 'kamal', 'kamal@123.com', '68053af2923e00204c3ca7c6a3150cf7', 'manager', 1, '2022-03-03 01:53:46'),
(4, 'amara', 'amara@123.com', '2e65f2f2fdaf6c699b223c61b1b5ab89', 'user', 1, '2022-03-03 01:54:45'),
(5, 'some', 'some@123', '22ac3c5a5bf0b520d281c122d1490650', 'user', 1, '2022-03-03 01:55:12'),
(6, 'kamala', 'kamala@123.com', '1ce927f875864094e3906a4a0b5ece68', 'employee', 1, '2022-03-03 01:55:51'),
(7, 'nimali', 'nimali@123.com', 'caf1a3dfb505ffed0d024130f58c5cfa', 'employee', 1, '2022-03-03 01:56:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
