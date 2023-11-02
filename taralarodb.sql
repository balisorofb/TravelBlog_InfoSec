-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2023 at 08:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblaccounts`
--

INSERT INTO `tblaccounts` (`ID`, `Name`, `Email`, `Password`, `Usertype`, `Image`, `CreatedDate`, `ModifiedDate`) VALUES
(23, 'Jayson Oquias Admin', 'dTOtMY90o1QHBWg0rvLpqy4Wkw4nvrakXZlpnt9XWV8=', '$2y$10$vP01prhrg8DkfRDyz5FaSuXcP09JqXlq9tnTvEd9RwsQAEtNlvNFi', 'admin', 'download (1).jfif', '2023-03-14', '0000-00-00'),
(24, 'Eloisa Senga User', 'Ky66mIITFyUJFUjsWqmXuBdfJrlhInm3//NG0PjYv30=', '$2y$10$2yj8j6pYPkAVGZf6BTubG.vWDeZ3zy15rz2uEK0pdLXs7zi0y6NSW', 'user', 'download.jfif', '2023-03-14', '0000-00-00'),
(25, 'Jayson Oquias', 'aVNoiSFzJ1a5DQyvChih9A==', '$2y$10$T2qxZViPPgJCPKit0NgsEe0uUsyCTHxhpJ1cXg/B/TzeGq0RzOltK', 'user', 'carousel2.png', '2023-10-23', '0000-00-00'),
(26, 'Jayson Oquias', '1DLs4Oir6v4WKwkXE+E+IQGzP/LVytvFaZfi1j2nbS4=', '$2y$10$3FYzzNfTjEJgjwfRuXNEYOdrQT.8OzutVSCGCzV3Ei.IQyEBA.JvS', 'user', 'eloisa.png', '2023-10-25', '0000-00-00'),
(27, 'STEVEN', 'SyiXl67N5VkaY7G/VGIkEg==', '$2y$10$mqyNbjMsKbahFml6LNhNTeeKDe4YgGC9JLz0h0mfT9XZIHGeiZbmO', 'admin', '1688460280691.jpg', '2023-10-26', '0000-00-00'),
(28, 'Kyungsoo', '62dO5x8Bk1Pa83EgAQ/mlA==', '$2y$10$Kdw2MNrKPb8JlH4LhuriAunQ3fMxN3X0RmOCEBnkcDo6tKrRa8GOK', 'user', '', '2023-10-26', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tblcomments`
--

CREATE TABLE `tblcomments` (
  `ID` int(11) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Comment` varchar(1000) NOT NULL,
  `rating` decimal(10,0) NOT NULL,
  `likes` int(11) NOT NULL,
  `dislikes` int(11) NOT NULL,
  `PostedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcomments`
--

INSERT INTO `tblcomments` (`ID`, `Name`, `Comment`, `rating`, `likes`, `dislikes`, `PostedDate`) VALUES
(6, 'Jayson Oquias Admin', 'Hi', 0, 0, 0, '2023-10-25');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tblcomments`
--
ALTER TABLE `tblcomments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
