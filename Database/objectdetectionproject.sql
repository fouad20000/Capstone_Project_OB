-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2022 at 12:22 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `objectdetectionproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `licenseplate`
--

CREATE TABLE `licenseplate` (
  `Num_Detected` int(11) NOT NULL,
  `licenseplatebox` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `licenseplate`
--

INSERT INTO `licenseplate` (`Num_Detected`, `licenseplatebox`) VALUES
(12352, 'wsres1324'),
(12357, '34w45d34f53');

-- --------------------------------------------------------

--
-- Table structure for table `listlicenseplate`
--

CREATE TABLE `listlicenseplate` (
  `Num_id` int(11) NOT NULL,
  `licenseplatenumber` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listlicenseplate`
--

INSERT INTO `listlicenseplate` (`Num_id`, `licenseplatenumber`) VALUES
(1, 'wsres13243243'),
(3, '2342432'),
(4, '2432342432'),
(5, '23424323424323424324');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `userspwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `userspwd`) VALUES
(19, 'Fouad Alkadri', '218110075@psu.edu.sa', 'Fouad', '$2y$10$L6REhBEtnfKhL2/3FICayOk2BCBuGPe4LaimK0S6hTJ4DWLIfCGbG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `licenseplate`
--
ALTER TABLE `licenseplate`
  ADD PRIMARY KEY (`Num_Detected`);

--
-- Indexes for table `listlicenseplate`
--
ALTER TABLE `listlicenseplate`
  ADD PRIMARY KEY (`Num_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `licenseplate`
--
ALTER TABLE `licenseplate`
  MODIFY `Num_Detected` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12359;

--
-- AUTO_INCREMENT for table `listlicenseplate`
--
ALTER TABLE `listlicenseplate`
  MODIFY `Num_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
