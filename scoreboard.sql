-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2019 at 11:54 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latestscore`
--

-- --------------------------------------------------------

--
-- Table structure for table `scoreboard`
--

CREATE TABLE `scoreboard` (
  `username` varchar(22) NOT NULL,
  `score` varchar(22) NOT NULL,
  `timetaken` varchar(22) NOT NULL,
  `level` varchar(22) NOT NULL,
  `time` varchar(22) NOT NULL,
  `date` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scoreboard`
--

INSERT INTO `scoreboard` (`username`, `score`, `timetaken`, `level`, `time`, `date`) VALUES
('', '1000', '00:20', 'Easy', '3:08:15 AM', '5/21/2019'),
('', '800', '00:13', 'Medium', '3:08:44 AM', '5/21/2019'),
('', '600', '00:10', 'Hard', '3:09:06 AM', '5/21/2019'),
('', '300', '00:17', 'Medium', '4:37:11 AM', '5/21/2019'),
('', '300', '00:07', 'Medium', '4:38:09 AM', '5/21/2019'),
('', '500', '00:05', 'Easy', '4:40:14 AM', '5/21/2019'),
('', '500', '00:06', 'Medium', '4:40:50 AM', '5/21/2019'),
('', '100', '00:02', 'Hard', '4:41:12 AM', '5/21/2019'),
('ATChai', '1000', '05:36', 'Easy', '15:40:00 PM', '5/16/2019'),
('HAHRose', '1000', '10:00', 'Easy', '15:40:00 PM', '5/16/2019'),
('HHChow', '900', '02:00', 'Easy', '15:32:00 PM', '5/16/2019'),
('LKChung', '100', '15:00', 'Easy', '15:45:00 PM', '5/16/2019'),
('MLChai', '1000', '03:49', 'Easy', '15:34:00 PM', '5/16/2019'),
('MYHo', '1000', '04:02', 'Easy', '15:35:00 PM', '5/16/2019'),
('NWHoh', '1000', '05:27', 'Easy', '15:38:00 PM', '5/16/2019'),
('PYLim', '1000', '06:57', 'Easy', '15:45:00 PM', '5/9/2019'),
('SJHan', '1000', '07:20', 'Easy', '15:50:00 PM', '5/9/2019'),
('YLLam', '1000', '03:39', 'Easy', '15:53:00 PM', '5/9/2019');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
