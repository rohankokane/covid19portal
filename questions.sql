-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2020 at 08:46 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `q_ans` int(200) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `question`, `q_ans`, `img`) VALUES
(1, 'The image shows the Police helping the homeless. How can we help the Police? ', 4, ''),
(2, 'According to this image, how can we utilise time during lockdown ?', 5, ''),
(3, 'The official name of this virus is:', 10, ''),
(4, 'What are these children engaging themselves in?', 15, ''),
(5, 'This is the most important time to be aware and AVOID ________________.', 17, ''),
(6, 'How does the person in circle cope with stress and maintain good mental health?', 24, ''),
(7, 'What do all these families have in common?', 28, ''),
(8, 'Choose the numbers showing correct method of coughing:', 30, ''),
(9, 'What message is conveyed here? Why is it important?', 33, ''),
(10, 'These people can get infected by coronavirus:', 40, ''),
(11, 'Choose correct description of image:', 44, ''),
(12, 'Which plan to choose after lockdown is over?', 45, ''),
(13, 'How does Aarogya Setu App help in tracking down spreading of Coronavirus?', 49, ''),
(14, 'Which one of these two is proven to be more effective?', 53, ''),
(15, 'What is the cure for Coronavirus?(As of 8th May 2020)', 58, ''),
(16, 'As shown in the image, such a weather will kill coronavirus.', 62, ''),
(17, 'It takes at least these many days to develop symptoms of coronavirus.', 64, ''),
(18, 'Below is the official QR code for PM\'s fund. What is the correct UPI ID?', 66, ''),
(19, 'This is an effective method of killing coronavirus in the mouth and throat.', 70, ''),
(20, 'One should wash hands for at least _______.', 74, ''),
(21, 'In the image below, how is the family protecting itself from coronavirus?', 76, ''),
(22, 'What message is conveyed by this image?', 82, ''),
(23, 'Which health advisory is NOT followed in this image?', 84, ''),
(24, 'What would you advise the person in this image?', 89, ''),
(25, 'Choose the correct description of the image:', 94, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
