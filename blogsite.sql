-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2023 at 03:11 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblaccounts`
--

CREATE TABLE `tblaccounts` (
  `ID` int(11) NOT NULL,
  `Name` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `Password` varchar(256) NOT NULL,
  `Usertype` varchar(20) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `CreatedDate` date NOT NULL,
  `ModifiedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblaccounts`
--

INSERT INTO `tblaccounts` (`ID`, `Name`, `Email`, `Password`, `Usertype`, `Image`, `CreatedDate`, `ModifiedDate`) VALUES
(23, 'Jayson Oquias Admin', 'dTOtMY90o1QHBWg0rvLpqy4Wkw4nvrakXZlpnt9XWV8=', '$2y$10$vP01prhrg8DkfRDyz5FaSuXcP09JqXlq9tnTvEd9RwsQAEtNlvNFi', 'admin', 'download (1).jfif', '2023-03-14', '0000-00-00'),
(24, 'Eloisa Senga User', 'Ky66mIITFyUJFUjsWqmXuBdfJrlhInm3//NG0PjYv30=', '$2y$10$2yj8j6pYPkAVGZf6BTubG.vWDeZ3zy15rz2uEK0pdLXs7zi0y6NSW', 'user', 'download.jfif', '2023-03-14', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tblcomments`
--

CREATE TABLE `tblcomments` (
  `ID` int(11) NOT NULL,
  `Comment` varchar(1000) NOT NULL,
  `PostedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcomments`
--

INSERT INTO `tblcomments` (`ID`, `Comment`, `PostedDate`) VALUES
(1, 'Great Contents', '2023-01-11'),
(2, 'Hello', '2023-02-09'),
(3, 'Hi', '2023-02-09'),
(4, 'sda', '2023-03-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblaccounts`
--
ALTER TABLE `tblaccounts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcomments`
--
ALTER TABLE `tblcomments`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblaccounts`
--
ALTER TABLE `tblaccounts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tblcomments`
--
ALTER TABLE `tblcomments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
