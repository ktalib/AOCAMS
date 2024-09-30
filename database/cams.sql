-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2021 at 02:27 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cams`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `a_id` int(10) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`a_id`, `uname`, `pass`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id_c` int(10) NOT NULL,
  `sc_id` int(10) NOT NULL,
  `id_s` int(10) NOT NULL,
  `title2` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `scope` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `l` varchar(100) NOT NULL,
  `p` varchar(100) NOT NULL,
  `ch` varchar(100) NOT NULL,
  `lab` varchar(100) NOT NULL,
  `lecturer` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id_c`, `sc_id`, `id_s`, `title2`, `code`, `unit`, `scope`, `level`, `l`, `p`, `ch`, `lab`, `lecturer`) VALUES
(24, 0, 0, 'Introduction to computing ', 'COM 101', '3', '', 'ND I', '2', '3', '5', 'LAB 3', 'Mr Rafael Chidi'),
(25, 0, 0, 'Introduction to Digital Electronics ', 'COM 112', '3', '', 'ND I', '2', '3', '5', 'LAB 3', 'Not Assigned'),
(26, 7, 0, 'Introduction to Programming ', 'COM 113', '3', '', 'ND I', '2', '3', '5', 'LAB 3', 'Not Assigned'),
(27, 3, 0, 'Computer programming using OO BASIC ', 'COM 211', '3', '', 'ND II', '2', '3', '5', 'LAB 3', 'Not Assigned'),
(28, 5, 0, 'Introduction to System Programming ', 'COM 212', '3', '', 'ND II', '2', '3', '5', 'LAB 3', 'Not Assigned'),
(29, 4, 0, 'Commercial Programming Language (Database) ', 'COM 213', '3', '', 'ND II', '2', '3', '5', 'LAB 3', 'Not Assigned'),
(30, 5, 0, 'Operating system I', 'COM 311', '3', '', 'HND I', '2', '3', '5', 'LAB 3', 'Not Assigned'),
(31, 4, 0, 'Database Design I', 'COM 312', '3', '', 'HND I', '3', '2', '5', 'LAB 3', 'Not Assigned'),
(32, 5, 0, 'Computer Programming Using C++', 'COM 313', '3', '', 'HND I', '2', '3', '5', 'LAB 3', 'Not Assigned'),
(33, 3, 0, 'Computer Programming Using OO PASCAL', 'Com 412', '3', '', 'HND II', '2', '3', '5', 'LAB 3', 'Not Assigned'),
(34, 8, 0, 'Project Management', 'Com 413', '3', '', 'HND II', '2', '3', '5', 'LAB 3', 'Not Assigned'),
(35, 8, 0, 'Compiler Construction', 'Com 414', '3', '', 'HND II', '2', '3', '5', 'LAB 3', 'Not Assigned');

-- --------------------------------------------------------

--
-- Table structure for table `scope_tbl`
--

CREATE TABLE `scope_tbl` (
  `sc_id` int(10) NOT NULL,
  `Title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scope_tbl`
--

INSERT INTO `scope_tbl` (`sc_id`, `Title`) VALUES
(1, 'Artificial Intelligence'),
(2, 'Networking'),
(3, 'Software Development'),
(4, 'Database Management'),
(5, 'Software Engineering'),
(6, 'Bioinformatics'),
(7, 'Information Management and Analytics'),
(8, 'Maths');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id_s` int(10) NOT NULL,
  `sc_id` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `area1` varchar(50) NOT NULL,
  `stat` varchar(50) NOT NULL DEFAULT 'Email not sent',
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id_s`, `sc_id`, `uname`, `pass`, `title`, `fname`, `lname`, `area1`, `stat`, `email`) VALUES
(49, '', 'cnnamoko', '123', 'Mr', 'Rafael', 'Chidi', 'Bioinformatics', 'Email Sent', 'chidirafael@gmail.com'),
(50, '', 'lecturer', '123', 'Mr', 'N. E', 'ACHODO ', 'Database Management', 'Email not sent', 'test@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `us_id` int(10) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`us_id`, `uname`, `pass`, `role`) VALUES
(1, 'admin', '123', '1'),
(2, 'king', '123', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id_c`);

--
-- Indexes for table `scope_tbl`
--
ALTER TABLE `scope_tbl`
  ADD PRIMARY KEY (`sc_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_s`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`us_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id_c` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `scope_tbl`
--
ALTER TABLE `scope_tbl`
  MODIFY `sc_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id_s` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `us_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
