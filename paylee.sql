-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2023 at 02:50 PM
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
-- Database: `paylee`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `employee_id` int(10) NOT NULL,
  `bankid` int(10) NOT NULL,
  `bankname` varchar(100) NOT NULL,
  `bankbranch` varchar(100) NOT NULL,
  `branchid` int(100) NOT NULL,
  `bankloanmonthlyinstalment` int(100) NOT NULL,
  `banksavings` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`employee_id`, `bankid`, `bankname`, `bankbranch`, `branchid`, `bankloanmonthlyinstalment`, `banksavings`) VALUES
(1, 123, 'equity', 'south', 144, 14345, 200);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` varchar(10) NOT NULL,
  `department_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`) VALUES
('FIN', 'Finance'),
('ITDept', 'IT Department'),
('SOB', 'School Of Business'),
('SOE', 'School Of Engineering'),
('SOS', 'School Of Science'),
('SStaff', 'Support Staff');

-- --------------------------------------------------------

--
-- Table structure for table `dependants`
--

CREATE TABLE `dependants` (
  `employee_id` int(10) NOT NULL,
  `namedep` varchar(100) NOT NULL,
  `agedep` int(3) NOT NULL,
  `relationdep` varchar(100) NOT NULL,
  `phone_nodep` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dependants`
--

INSERT INTO `dependants` (`employee_id`, `namedep`, `agedep`, `relationdep`, `phone_nodep`) VALUES
(1, 'mnm', 13, 'son', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE `employee_details` (
  `employee_id` int(100) NOT NULL,
  `department_id` varchar(100) NOT NULL,
  `fulname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `age` int(2) NOT NULL,
  `phone` int(12) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `job` text NOT NULL,
  `hire` date NOT NULL,
  `account` varchar(100) NOT NULL,
  `kra` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_details`
--

INSERT INTO `employee_details` (`employee_id`, `department_id`, `fulname`, `email`, `age`, `phone`, `gender`, `job`, `hire`, `account`, `kra`) VALUES
(1, 'SOS', 'ann ', 'paylee@gmail.com', 21, 795426090, 'female', 'admin', '2012-01-21', 'a1232333', 'A2222222');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `employee_id` int(4) NOT NULL,
  `password` varchar(8) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `next_of_kin`
--

CREATE TABLE `next_of_kin` (
  `employee_id` int(10) NOT NULL,
  `namekin` varchar(100) NOT NULL,
  `agekin` int(3) NOT NULL,
  `relationkin` varchar(10) NOT NULL,
  `phone_no` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `next_of_kin`
--

INSERT INTO `next_of_kin` (`employee_id`, `namekin`, `agekin`, `relationkin`, `phone_no`) VALUES
(1, 'maura', 20, 'sister', 11111222);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `employee_id` int(10) NOT NULL,
  `department_id` varchar(10) NOT NULL,
  `job` varchar(100) NOT NULL,
  `basicpay` int(10) NOT NULL,
  `houseallowances` int(10) NOT NULL,
  `medallowances` int(10) NOT NULL,
  `grosspay` int(10) NOT NULL,
  `NHIF` int(10) NOT NULL,
  `NSSF` int(10) NOT NULL,
  `damages` int(10) NOT NULL,
  `pension` int(10) NOT NULL,
  `totdeduc` int(10) NOT NULL,
  `netsal` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bankid`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `dependants`
--
ALTER TABLE `dependants`
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `employee_details`
--
ALTER TABLE `employee_details`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `next_of_kin`
--
ALTER TABLE `next_of_kin`
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD KEY `employee_id` (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_details`
--
ALTER TABLE `employee_details`
  MODIFY `employee_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bank`
--
ALTER TABLE `bank`
  ADD CONSTRAINT `bank_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee_details` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dependants`
--
ALTER TABLE `dependants`
  ADD CONSTRAINT `dependants_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee_details` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee_details`
--
ALTER TABLE `employee_details`
  ADD CONSTRAINT `employee_details_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee_details` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `next_of_kin`
--
ALTER TABLE `next_of_kin`
  ADD CONSTRAINT `next_of_kin_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee_details` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `salary_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee_details` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
