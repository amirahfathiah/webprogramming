-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2019 at 10:59 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `search`
--

-- --------------------------------------------------------

--
-- Table structure for table `find`
--

CREATE TABLE `find` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `a_text` text NOT NULL,
  `source` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `find`
--

INSERT INTO `find` (`id`, `title`, `a_text`, `source`) VALUES
(1, 'WHAT IS ALZHEIMERS DISEASE?', 'Alzheimers disease is the most common cause of dementia. The word dementia describes a set of symptoms that can include memory loss and difficulties with thinking, problem-solving or language. These symptoms occur when the brain is damaged by certain diseases, including Alzheimers disease.\r\n\r\nAlzheimers disease, named after the doctor who first described it (Alois Alzheimer), is a physical disease that affects the brain.\r\n\r\nDuring the course of the disease, proteins build up in the brain to form structures called plaques and tangles. This leads to the loss of connections between nerve cells, and eventually to the death of nerve cells and loss of brain tissue.\r\n\r\nPeople with Alzheimers also have a shortage of some important chemicals in their brain. These chemical messengers help to transmit signals around the brain. When there is a shortage of them, the signals are not transmitted as effectively.\r\n\r\nCurrent treatments for Alzheimers disease can help boost the levels of chemical messengers in the brain, which can help with some of the symptoms. Alzheimers is a progressive disease. This means that gradually, over time, more parts of the brain are damaged. As this happens, more symptoms develop. They also become more severe.', 'HOME'),
(4, 'MILD ALZHEIMERS DISEASE (EARLY STAGE)', 'In the early stage of Alzheimers, a person may function independently. He or she may still drive, work and be part of social activities. Despite this, the person may feel as if he or she is having memory lapses, such as forgetting familiar words or the location of everyday objects.\r\n\r\nFriends, family or others close to the individual begin to notice difficulties. During a detailed medical interview, doctors may be able to detect problems in memory or concentration. Common difficulties include:\r\n\r\nProblems coming up with the right word or name\r\nTrouble remembering names when introduced to new people\r\nChallenges performing tasks in social or work settings.\r\nForgetting material that one has just read\r\nLosing or misplacing a valuable object\r\nIncreasing trouble with planning or organizing', 'HOME'),
(5, 'MODERATE ALZHEIMERS DISEASE (MIDDLE STAGE)', 'Moderate Alzheimers is typically the longest stage and can last for many years. As the disease progresses, the person with Alzheimers will require a greater level of care.\r\n\r\nDuring the moderate stage of Alzheimers, the dementia symptoms are more pronounced. A person may have greater difficulty performing tasks, such as paying bills, but they may still remember significant details about their life.\r\n\r\nYou may notice the person with Alzheimers confusing words, getting frustrated or angry, or acting in unexpected ways, such as refusing to bathe. Damage to nerve cells in the brain can make it difficult to express thoughts and perform routine tasks.\r\n\r\nAt this point, symptoms will be noticeable to others and may include:\r\n\r\nForgetfulness of events or about ones own personal history\r\nFeeling moody or withdrawn, especially in socially or mentally challenging situations\r\nBeing unable to recall their own address or telephone number or the high school or college from which they graduated\r\nConfusion about where they are or what day it is\r\nThe need for help choosing proper clothing for the season or the occasion\r\nTrouble controlling bladder and bowels in some individuals\r\nChanges in sleep patterns, such as sleeping during the day and becoming restless at night\r\nAn increased risk of wandering and becoming lost\r\nPersonality and behavioral changes, including suspiciousness and delusions or compulsive, repetitive behavior like hand-wringing or tissue shredding', 'HOME'),
(6, 'SEVERE ALZHEIMERS DISEASE (LATE STAGE)', 'In the final stage of this disease, dementia symptoms are severe. Individuals lose the ability to respond to their environment, to carry on a conversation and, eventually, to control movement. They may still say words or phrases, but communicating pain becomes difficult. As memory and cognitive skills continue to worsen, significant personality changes may take place and individuals need extensive help with daily activities.\r\n\r\nAt this stage, individuals may:\r\n\r\nNeed round-the-clock assistance with daily activities and personal care\r\nLose awareness of recent experiences as well as of their surroundings\r\nExperience changes in physical abilities, including the ability to walk, sit and, eventually, swallow\r\nHave increasing difficulty communicating\r\nBecome vulnerable to infections, especially pneumonia', 'HOME'),
(7, 'Endun Yvonne', 'Im a developer. Im working remotely on projects for clients all over the world. I have diverse set of skills ranging from design, to HTML + CSS + JavaScript, all the way to PHP and Linux Server administration.', 'ABOUT US'),
(8, 'Amirah Fathiah', 'Im a developer. Im working remotely on projects for clients all over the world. I have diverse set of skills ranging from design, to HTML + CSS + JavaScript, all the way to PHP and Linux Server administration.', 'ABOUT US'),
(9, 'Fatin Nabila', 'Im a developer. Im working remotely on projects for clients all over the world. I have diverse set of skills ranging from design, to HTML + CSS + JavaScript, all the way to PHP and Linux Server administration.', 'ABOUT US'),
(10, 'Fatin Qistina', 'Im a developer. Im working remotely on projects for clients all over the world. I have diverse set of skills ranging from design, to HTML + CSS + JavaScript, all the way to PHP and Linux Server administration.', 'ABOUT US'),
(11, 'Aqilah Basri', 'Im a developer. Im working remotely on projects for clients all over the world. I have diverse set of skills ranging from design, to HTML + CSS + JavaScript, all the way to PHP and Linux Server administration.', 'ABOUT US'),
(12, 'Abdul Bari', 'Im a developer. Im working remotely on projects for clients all over the world. I have diverse set of skills ranging from design, to HTML + CSS + JavaScript, all the way to PHP and Linux Server administration.', 'ABOUT US'),
(13, 'The Developer', 'Faculty of Computer Science and Information Technology. \r\nUniversity of Malaya \r\n50603 Kuala Lumpur\r\nMalaysia\r\n+6016-6492733\r\nourteam@gmail.com', 'CONTACT'),
(14, 'The Organization', 'Rumah Alzheimer\'s Daycare Centre\r\nNo. 6, Lorong 11/8E, Section 11\r\n46200\r\nPetaling Jaya Selangor\r\nMalaysia\r\n+603-79562008/79583008\r\noffice.adfm@gmail.com', 'CONTACT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `find`
--
ALTER TABLE `find`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `find`
--
ALTER TABLE `find`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
