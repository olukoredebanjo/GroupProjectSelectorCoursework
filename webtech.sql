-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2017 at 05:09 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `ID` int(11) NOT NULL,
  `USERNAME` varchar(255) NOT NULL,
  `CHATDATE` varchar(255) NOT NULL,
  `MSG` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`ID`, `USERNAME`, `CHATDATE`, `MSG`) VALUES
(1, 'Ahmed', '2017-03-24 00:20:03', 'Hello'),
(2, 'Ahmed', '2017-03-24 00:28:09', 'hi'),
(3, 'Ahmed', '2017-03-24 00:28:42', 'hi'),
(4, 'Ahmed', '2017-03-24 00:29:05', 'how are you?'),
(5, 'Uche', '2017-03-24 00:30:17', 'Hello'),
(6, 'Uche', '2017-03-24 00:30:36', 'hello'),
(7, 'Ahmed', '2017-03-24 00:30:55', 'are you good?'),
(8, 'Uche', '2017-03-24 00:31:27', 'yes'),
(9, 'Ahmed', '2017-03-24 00:31:55', 'fine'),
(10, 'Uche', '2017-03-24 00:32:10', 'ok'),
(11, 'Ahmed', '2017-03-24 01:00:12', 'Alrigh'),
(12, '', '2017-03-24 01:11:55', 'hey'),
(13, 'doro', '2017-03-24 01:19:06', 'hello'),
(14, 'AliABu', '2017-03-24 10:48:02', 'hello');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
