-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2023 at 07:53 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `libraryproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `fineanddues`
--

CREATE TABLE `fineanddues` (
  `serialno` int(10) NOT NULL,
  `registrationid` varchar(50) NOT NULL,
  `bookid` varchar(89) DEFAULT NULL,
  `reason` text NOT NULL,
  `amount` int(89) NOT NULL,
  `sellelmentstatus` tinyint(1) DEFAULT 0,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fineanddues`
--

INSERT INTO `fineanddues` (`serialno`, `registrationid`, `bookid`, `reason`, `amount`, `sellelmentstatus`, `message`) VALUES
(1, '5554', '2212', '1', 21, 0, '22'),
(2, '1200', '2', '1', 212, 1, '252'),
(3, '1701104425', '0', '1', 2500, 1, 'Yearly Membership Fees'),
(4, '1701104425', '2520', '2', 120, 1, 'Late Fees'),
(5, '1701104425', '2525', '1', 2500, 1, 'Yearly Membership Fees'),
(6, '1701104425', '100', '3', 1000, 1, 'Lost Book');

-- --------------------------------------------------------

--
-- Table structure for table `newbooks`
--

CREATE TABLE `newbooks` (
  `bookname` varchar(50) NOT NULL,
  `bookcategory` int(10) NOT NULL,
  `bookauthour` varchar(90) NOT NULL,
  `publishername` varchar(100) NOT NULL,
  `bookid` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newbooks`
--

INSERT INTO `newbooks` (`bookname`, `bookcategory`, `bookauthour`, `publishername`, `bookid`) VALUES
('oi', 0, 'pandu', '', '1701088702'),
('', 0, '', '', '1701088748'),
('21121', 10, '32112', '323', '1701088835'),
('Python', 10, 'Koiloi', '2525', '1701088850'),
('212212', 10, '323232', '3', '1701088932'),
('21121', 10, '32112', '323', '1701088935'),
('32323', 10, '22332', '23232', '1701088959'),
('', 0, '', '', '1701094597'),
('', 0, '', '', '1701095799'),
('', 0, '', '', '1701095904'),
('', 0, '', '', '1701095941'),
('3', 11, '2323', '322', '1701095970'),
('', 0, '', '', '1701095992'),
('', 0, '', '', '1701096001'),
('', 0, '', '', '1701104564'),
('JAVA', 11, 'REEMA TAHERJA', 'OXFORD', '1701104577'),
('', 0, '', '', '1701104656'),
('JAVA', 11, 'REEMA TAHERJA', 'OXFORD', '1701104947'),
('211211', 10, '2121211', '2232', '1701104970'),
('NOBEL ARTA', 10, 'MADAM KRRI', 'TAHERI', '1701105055'),
('', 0, '', '', '1701105180'),
('MATH', 11, '2525', '255', '1701105292'),
('DBMS', 11, 'PAL', 'PEARSON', '1701105333'),
('CHOTA BHEEM', 14, 'BHEEM', 'STAR GOLD', '1701105396'),
('ELECTRICAL ENGINEERING', 11, '25', '22', '1701105437'),
('Python', 10, 'Koiloi', '2525', '2525');

-- --------------------------------------------------------

--
-- Table structure for table `new_member_registration`
--

CREATE TABLE `new_member_registration` (
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `dob` varchar(60) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `mobileno` varchar(19) NOT NULL,
  `email` varchar(55) NOT NULL,
  `userid` varchar(44) NOT NULL,
  `password` varchar(300) NOT NULL,
  `idtype` varchar(60) NOT NULL,
  `idnumber` varchar(16) NOT NULL,
  `status` tinyint(1) DEFAULT 0,
  `rscode` varchar(40) NOT NULL,
  `acessLEVEL` int(20) NOT NULL DEFAULT 99
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `new_member_registration`
--

INSERT INTO `new_member_registration` (`firstname`, `lastname`, `dob`, `gender`, `mobileno`, `email`, `userid`, `password`, `idtype`, `idnumber`, `status`, `rscode`, `acessLEVEL`) VALUES
('admin', 'admin', '0001-01-01', 'Male', '000000', 'admin@mail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'school/collegeId', 'admin1234', 1, '1701089813', 101),
('don', 'sing', '1985-08-01', 'Male', '258741', 'don@yahoo', 'don@yahoo', '2aa7dc814054796c7e17b562d75b0b69', 'Aadhar', '10', 1, '1701087784', 100),
('Main', '2', '1980-01-25', 'Male', '85858585', 'saby@jhjq.com', 'saby@jhjq.com', '9407c826d8e3c07ad37cb2d13d1cb641', 'school/collegeId', '12345', 1, '1701087380', 99),
('staff', 'staff', '1980-05-12', 'Male', '874561230', 'staff@yahoo.com', 'staff', '1253208465b1efa876f982d8a9e73eef', 'school/collegeId', 'STAFF2525', 1, '1701104425', 99),
('Suman', 'Halder', '1985-02-22', 'Male', '258963741', 'suman@yahoo.com', 'suman@yahoo.com', '37d930c0680179aef7bd18b41ef1ea4a', 'Aadhar', '66', 1, '1701098153', 99),
('UEM', 'KOLKATA', '1985-11-01', 'Male', '100100100000000', 'uem@kolkata', 'uem', 'a591024321c5e2bdbd23ed35f0574dde', 'Aadhar', '252525', 0, '1701149628', 99);

-- --------------------------------------------------------

--
-- Table structure for table `supportmessage`
--

CREATE TABLE `supportmessage` (
  `referencenumber` varchar(100) NOT NULL,
  `customername` varchar(50) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `issuetype` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `resolvestatus` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supportmessage`
--

INSERT INTO `supportmessage` (`referencenumber`, `customername`, `emailid`, `issuetype`, `message`, `resolvestatus`) VALUES
('PM606C1701092043', 'DEEP', 'deep@yahoo.com', ' Signup', '22121', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userbookinf`
--

CREATE TABLE `userbookinf` (
  `id` int(15) NOT NULL,
  `userinfo` varchar(50) NOT NULL,
  `booknumber` varchar(99) NOT NULL,
  `status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userbookinf`
--

INSERT INTO `userbookinf` (`id`, `userinfo`, `booknumber`, `status`) VALUES
(1, '1701089813', '2525', 0),
(2, '1701104425', '1701104947', 1),
(3, '1701104425', '1701105055', 1),
(4, '1701104425', '1701105396', 0),
(5, '1701104425', '1701105292', 1),
(6, '1701104425', '1701105333', 1),
(7, '1701104425', '1701105333', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fineanddues`
--
ALTER TABLE `fineanddues`
  ADD UNIQUE KEY `serialno` (`serialno`);

--
-- Indexes for table `newbooks`
--
ALTER TABLE `newbooks`
  ADD UNIQUE KEY `bookid` (`bookid`);

--
-- Indexes for table `new_member_registration`
--
ALTER TABLE `new_member_registration`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `mobileno` (`mobileno`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `idnumber` (`idnumber`),
  ADD UNIQUE KEY `rscode` (`rscode`);

--
-- Indexes for table `supportmessage`
--
ALTER TABLE `supportmessage`
  ADD UNIQUE KEY `referencenumber` (`referencenumber`);

--
-- Indexes for table `userbookinf`
--
ALTER TABLE `userbookinf`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fineanddues`
--
ALTER TABLE `fineanddues`
  MODIFY `serialno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userbookinf`
--
ALTER TABLE `userbookinf`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
