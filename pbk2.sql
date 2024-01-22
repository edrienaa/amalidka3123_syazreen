-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2022 at 08:15 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pbk2`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `program` varchar(3) NOT NULL,
  `cgpa` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `gender`, `program`, `cgpa`) VALUES
(2, 'Tracey Fillis Fuluz', 'F', 'MTA', '3.79'),
(3, 'Amalie Sturt', 'F', 'HSK', '1.12'),
(4, 'Noelyn Mixture', 'F', 'HSK', '3.13'),
(5, 'Lenci Ghidiniz', 'M', 'MTA', '2.92'),
(6, 'Sol Ambroise', 'F', 'HBP', '2.75'),
(7, 'Roy Baugham', 'M', 'HSK', '3.36'),
(8, 'Saleem Seivertsen', 'M', 'BPP', '3.12'),
(9, 'Ransell Hinners', 'M', 'BKP', '3.13'),
(10, 'Auguste Harkus', 'F', 'BPR', '1.41'),
(11, 'Pate Elsmere', 'M', 'BPR', '2.41'),
(12, 'Vittoria Barnwall', 'F', 'KSK', '1.69'),
(13, 'Kennan Gayter', 'M', 'HBP', '1.68'),
(14, 'Kelvin Dabney', 'M', 'BAK', '2.82'),
(15, 'Alec Stean', 'M', 'BAK', '3.95'),
(16, 'Sunny Dilland', 'F', 'HBP', '2.95');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=328;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
