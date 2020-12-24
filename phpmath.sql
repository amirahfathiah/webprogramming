-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2019 at 06:30 AM
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
-- Database: `phpmath`
--

-- --------------------------------------------------------

--
-- Table structure for table `guardian`
--

CREATE TABLE `guardian` (
  `Username` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Age` int(11) NOT NULL,
  `DOB` date DEFAULT NULL,
  `Relationship` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Postcode` int(11) NOT NULL,
  `City` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `PhoneNum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guardian`
--

INSERT INTO `guardian` (`Username`, `Name`, `Age`, `DOB`, `Relationship`, `Address`, `Postcode`, `City`, `State`, `PhoneNum`) VALUES
('ATChai', 'Shahzia Chissari bin Hairuzaman', 29, '1990-12-27', 'Caretaker', 'No. 6, Lorong 11/8E, Section 11', 46200, 'Petaling Jaya', 'Selangor', 177954282),
('HAHRose', 'Shahzia Chissari bin Hairuzaman', 29, '1990-12-27', 'Caretaker', 'No. 6, Lorong 11/8E, Section 11', 46200, 'Petaling Jaya', 'Selangor', 177954282),
('HHChow', 'Shahzia Chissari bin Hairuzaman', 29, '1990-12-27', 'Caretaker', 'No. 6, Lorong 11/8E, Section 11', 46200, 'Petaling Jaya', 'Selangor', 177954282),
('LKChung', 'Shahzia Chissari bin Hairuzaman', 29, '1990-12-27', 'Caretaker', 'No. 6, Lorong 11/8E, Section 11', 46200, 'Petaling Jaya', 'Selangor', 177954282),
('MLChai', 'Shahzia Chissari bin Hairuzaman', 29, '1990-12-27', 'Caretaker', 'No. 6, Lorong 11/8E, Section 11', 46200, 'Petaling Jaya', 'Selangor', 177954282),
('MYHo', 'Shahzia Chissari bin Hairuzaman', 29, '1990-12-27', 'Caretaker', 'No. 6, Lorong 11/8E, Section 11', 46200, 'Petaling Jaya', 'Selangor', 177954282),
('NWHoh', 'Shahzia Chissari bin Hairuzaman', 29, '1990-12-27', 'Caretaker', 'No. 6, Lorong 11/8E, Section 11', 46200, 'Petaling Jaya', 'Selangor', 177954282),
('Patmalosamy', 'Shahzia Chissari bin Hairuzaman', 29, '1990-12-27', 'Caretaker', 'No. 6, Lorong 11/8E, Section 11', 46200, 'Petaling Jaya', 'Selangor', 177954282),
('PETan ', 'Shahzia Chissari bin Hairuzaman', 29, '1990-12-27', 'Caretaker', 'No. 6, Lorong 11/8E, Section 11', 46200, 'Petaling Jaya', 'Selangor', 177954282),
('PYLim', 'Shahzia Chissari bin Hairuzaman', 29, '1990-12-27', 'Caretaker', 'No. 6, Lorong 11/8E, Section 11', 46200, 'Petaling Jaya', 'Selangor', 177954282),
('SJHan ', 'Shahzia Chissari bin Hairuzaman', 29, '1990-12-27', 'Caretaker', 'No. 6, Lorong 11/8E, Section 11', 46200, 'Petaling Jaya', 'Selangor', 177954282),
('YBTan', 'Shahzia Chissari bin Hairuzaman', 29, '1990-12-27', 'Caretaker', 'No. 6, Lorong 11/8E, Section 11', 46200, 'Petaling Jaya', 'Selangor', 177954282),
('YLLam', 'Shahzia Chissari bin Hairuzaman', 29, '1990-12-27', 'Caretaker', 'No. 6, Lorong 11/8E, Section 11', 46200, 'Petaling Jaya', 'Selangor', 177954282);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Username` varchar(255) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Severity` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Postcode` int(11) DEFAULT NULL,
  `State` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Username`, `Name`, `Gender`, `Age`, `DOB`, `Severity`, `Address`, `Postcode`, `State`, `City`) VALUES
('ATChai', 'Chai Ah Tan', 'Male', 83, '1944-01-01', 'Mild', 'No. 6, Lorong 11/8E, Section 11', 46200, 'Selangor', 'Petaling Jaya'),
('HAHRose', 'Rose Ho Ah Suan ', 'Female', 90, '1934-01-01', 'Mild', 'No. 6, Lorong 11/8E, Section 11', 46200, 'Selangor', 'Petaling Jaya'),
('HHChow', 'Chow Hwa Hock', 'Male', 79, '1944-01-01', 'Mild', 'No. 6, Lorong 11/8E, Section 11', 46200, 'Selangor', 'Petaling Jaya'),
('LKChung', 'Chung Lee Kheon', 'Female', 86, '1944-01-01', 'Mild', 'No. 6, Lorong 11/8E, Section 11', 46200, 'Selangor', 'Petaling Jaya'),
('MLChai', 'Chai Mok Lan ', 'Female', 75, '1944-01-01', 'Mild', 'No. 6, Lorong 11/8E, Section 11', 46200, 'Selangor', 'Petaling Jaya'),
('MYHo', 'Ho Moo Yen ', 'Female', 81, '1944-01-01', 'Mild', 'No. 6, Lorong 11/8E, Section 11', 46200, 'Selangor', 'Petaling Jaya'),
('NWHoh', 'Hoh Nyat Wah', 'Female', 79, '1944-01-01', 'Mild', 'No. 6, Lorong 11/8E, Section 11', 46200, 'Selangor', 'Petaling Jaya'),
('Patmalosamy', 'Patlomasamy', 'Female', 87, '1944-01-01', 'Severe', 'No. 6, Lorong 11/8E, Section 11', 46200, 'Selangor', 'Petaling Jaya'),
('PETan ', 'Tan Poh Ean', 'Female', 79, '1944-01-01', 'Mild', 'No. 6, Lorong 11/8E, Section 11', 46200, 'Selangor', 'Petaling Jaya'),
('PYLim', 'Lim Poh Yoke', 'Male', 70, '1944-01-01', 'Mild', 'No. 6, Lorong 11/8E, Section 11', 46200, 'Selangor', 'Petaling Jaya'),
('SJHan ', 'Han Siew Joon', 'Female', 81, '1944-01-01', 'Mild', 'No. 6, Lorong 11/8E, Section 11', 46200, 'Selangor', 'Petaling Jaya'),
('YBTan', 'Tan Ywa Bee', 'Female', 79, '1944-01-01', 'Mild', 'No. 6, Lorong 11/8E, Section 11', 46200, 'Selangor', 'Petaling Jaya'),
('YLLam', 'Lam Yoke Lin', 'Female', 87, '1944-01-01', 'Mild', 'No. 6, Lorong 11/8E, Section 11', 46200, 'Selangor', 'Petaling Jaya');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `Username` varchar(255) DEFAULT NULL,
  `Score` int(11) DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `Level` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`Username`, `Score`, `Time`, `Level`) VALUES
('ATChai', 1000, '00:15:30', 'Mild'),
('HAHRose', 12312, '00:15:30', 'Severe'),
('ATChai', 1000, '00:15:30', 'Mild'),
('HAHRose', 12312, '00:15:30', 'Severe'),
('HHChow', 12312, '00:15:30', 'Mild'),
('LKChung', 12312, '00:15:30', 'Severe'),
('HHChow', 12312, '00:15:30', 'Mild'),
('LKChung', 12312, '00:15:30', 'Severe'),
('MLChai', 12332, '00:15:30', 'Severe'),
('MYHo', 234234, '00:15:30', 'Mild'),
('MLChai', 12332, '00:15:30', 'Severe'),
('MYHo', 234234, '00:15:30', 'Mild'),
('NWHoh', 23524, '00:15:30', 'Severe'),
('PYLim', 234234, '00:15:30', 'Mild'),
('NWHoh', 23524, '00:15:30', 'Severe'),
('PYLim', 234234, '00:15:30', 'Mild'),
('SJHan ', 34543, '34:53:45', 'Mild'),
('YLLam', 453543, '00:15:30', 'Servere'),
('SJHan ', 34543, '34:53:45', 'Mild'),
('YLLam', 453543, '00:15:30', 'Severe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guardian`
--
ALTER TABLE `guardian`
  ADD PRIMARY KEY (`Username`,`PhoneNum`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD KEY `Username` (`Username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `guardian`
--
ALTER TABLE `guardian`
  ADD CONSTRAINT `guardian_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `patient` (`Username`);

--
-- Constraints for table `score`
--
ALTER TABLE `score`
  ADD CONSTRAINT `score_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `patient` (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
