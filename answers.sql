-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2020 at 08:47 PM
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
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `aid` int(100) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `q_ans` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `answer`, `q_ans`) VALUES
(1, 'Staying home', 1),
(2, 'Helping the poor in our locality', 1),
(3, 'Following guidelines given by authorities', 1),
(4, 'All of the above', 1),
(5, 'Hobbies,cooking, other activities', 2),
(6, 'Watching TV all day', 2),
(7, 'Attending a friend\'s birthday party', 2),
(8, 'Going out for treks', 2),
(9, 'SARS-CoV', 3),
(10, 'SARS-CoV-2', 3),
(11, 'Covid-19', 3),
(12, 'Corona', 3),
(13, 'Drinking hot milk', 4),
(14, 'Making the house dirty', 4),
(15, 'Helping in cleaning the house', 4),
(16, 'All of the above', 4),
(17, 'Believing and spreading rumours and false information', 5),
(18, 'Watching YouTube videos', 5),
(19, 'Talking with friends over social media', 5),
(20, 'options 2 and 3', 5),
(21, 'He doesn\'t cope with stress', 6),
(22, 'Meditating, relaxing', 6),
(23, 'Music, reading, staying connected with dear ones', 6),
(24, 'Options 2 and 3', 6),
(25, 'They all are watching TV', 7),
(26, 'They all are going out for dinner', 7),
(27, 'They are fighting for each other', 7),
(28, 'They are cherishing their time together', 7),
(29, '5, 4, 3, 2', 8),
(30, '6, 4, 5', 8),
(31, '6, 5, 1', 8),
(32, 'All 6 of them', 8),
(33, '\"Do not abuse or discriminate against someone if they cough!\" We should treat everyone kindly.', 9),
(34, '\"We must shout at sick people.\" They are not humans.', 9),
(35, '\"If one is sick, one should speak loudly.\" Because it will kill coronavirus in throat.', 9),
(36, 'None of the above.', 9),
(37, 'Only old people', 10),
(38, 'Only adults', 10),
(39, 'Only teenagers', 10),
(40, 'Everyone', 10),
(41, 'Don\'t touch face without maks', 11),
(42, 'Don\'t touch face with mask', 11),
(43, 'Wash hands', 11),
(44, 'Option 1 and 2', 11),
(45, 'Plan A and C', 12),
(46, 'Plan B and D', 12),
(47, 'Plan C only', 12),
(48, 'Plan B only', 12),
(49, 'It informs us if we have come near anyone who is infected or suspected.\r\n', 13),
(50, 'It uses 5G network to track the movement of Coronavirus in air.\r\n', 13),
(51, 'It takes blood test of all users to test for coronavirus.', 13),
(52, 'It acts as a shield around a person and prevent coronavirus from affecting them.', 13),
(53, 'Soap or handwash liquid', 14),
(54, 'Hand sanitizer', 14),
(55, 'Both are equally effective\r\n', 14),
(56, 'Neither is effective', 14),
(57, 'Hydroxychloroquine', 15),
(58, 'No cure but vaccine trials are going on\r\n', 15),
(59, 'Hot water with ginger with honey', 15),
(60, 'Options 1 and 3\r\n', 15),
(61, 'True', 16),
(62, 'False', 16),
(63, 'True', 17),
(64, 'False', 17),
(65, 'pmcare@sbi', 18),
(66, 'pm-cares@sbi\r\n \r\n', 18),
(67, 'pmcares@sbi', 18),
(68, 'pmcares@rbi', 18),
(69, 'True', 19),
(70, 'False', 19),
(71, 'Ten seconds', 20),
(72, 'Fifteen seconds', 20),
(73, 'Five seconds', 20),
(74, 'Twenty seconds\r\n', 20),
(75, 'By eating garlic', 21),
(76, 'By staying home\r\n', 21),
(77, 'By exercising', 21),
(78, 'By roaming on the street', 21),
(79, 'Respect covid 19 warriors', 22),
(80, 'Do not cause harm to front line fighters', 22),
(81, 'We should follow their instructions and appreciate them', 22),
(82, 'All of the above\r\n', 22),
(83, 'Wearing masks', 23),
(84, 'Social distancing\r\n', 23),
(85, 'Avoid touching face', 23),
(86, 'Wearing full sleeve', 23),
(87, 'Wear masks.', 24),
(88, 'Do not use a trolley while shopping as it is unsafe.', 24),
(89, 'Do not fall prey to Panic-buying. Buy essentials as per need.\r\n', 24),
(90, 'Walk slowly and steadily instead of running.', 24),
(91, 'If you have all the symptoms, contact authorities immediately', 25),
(92, 'If you have doubts, you can contact Whatsapp Helpdesk', 25),
(93, 'Contact only official number immediately if you or someone you know shows symptoms', 25),
(94, 'All of the above\r\n', 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`aid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `aid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
