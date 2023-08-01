-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 28, 2020 at 06:40 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hamzahoy_zombiemath`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `grade` int(11) NOT NULL,
  `skill` varchar(200) NOT NULL,
  `question` varchar(250) NOT NULL,
  `answer` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `grade`, `skill`, `question`, `answer`) VALUES
(9, 3, 'addition', '10+50', '60'),
(12, 3, 'addition', '100+500', '600'),
(13, 3, 'addition', '50+90', '140'),
(14, 1, 'addition', '1+1', '2'),
(16, 1, 'subtraction', '3-1', '2'),
(17, 1, 'addition', '1+8', '9'),
(18, 1, 'subtraction', '4-3', '1'),
(19, 1, 'subtraction', '5-1', '4'),
(21, 1, 'multiplication', '2*2', '4'),
(22, 1, 'multiplication', '3*1', '3'),
(23, 1, 'multiplication', '2*1', '2'),
(24, 1, 'division', '2/2', '1'),
(25, 1, 'equation', 'What Comes After 10?', '11'),
(26, 1, 'equation', 'What Comes After 2?', '3'),
(27, 1, 'equation', 'What Comes After 6?', '7'),
(28, 1, 'pattern', '1, ?, 3, 4', '2'),
(29, 1, 'pattern', '10, 20, ?, 40', '30'),
(30, 2, 'addition', '7+5', '12'),
(31, 2, 'addition', '18+4', '22'),
(32, 2, 'subtraction', '9-1', '8'),
(33, 2, 'subtraction', '14-5', '9'),
(34, 2, 'multiplication', '3*6', '18'),
(35, 2, 'multiplication', '2*7', '14'),
(36, 2, 'division', '10/2', '5'),
(37, 2, 'division', '20/5', '4'),
(38, 2, 'equation', 'What Comes Between 7 & 9?', '8'),
(39, 2, 'equation', 'What Comes Between 19 & 21?', '20'),
(40, 2, 'pattern', '5, 10, ?, 20', '15'),
(41, 2, 'pattern', '8, 16, ?, 32', '24'),
(42, 3, 'subtraction', '56-32', '24'),
(43, 3, 'subtraction', '78-28', '50'),
(44, 3, 'multiplication', '5*8', '40'),
(45, 3, 'multiplication', '7*7', '49'),
(46, 3, 'division', '8/4', '2'),
(47, 3, 'division', '10/5', '2'),
(50, 3, 'equation', '99+11+10', '120'),
(51, 3, 'equation', '4+9+3', '16'),
(52, 4, 'addition', '123+98', '221'),
(53, 4, 'addition', '121+92', '213'),
(54, 4, 'subtraction', '132-98', '34'),
(55, 4, 'subtraction', '128-84', '44'),
(56, 4, 'multiplication', '5*12', '60'),
(57, 4, 'multiplication', '12*3', '36'),
(58, 4, 'division', '25/5', '5'),
(59, 4, 'division', '322/2', '166'),
(60, 4, 'equation', '3+2-3+5', '7'),
(61, 4, 'equation', '5+10-2-4+3', '12'),
(62, 4, 'pattern', '13, 15, ?, 19', '17'),
(63, 4, 'pattern', '44, 48, 52, ?', '56'),
(64, 3, 'pattern', '1, 4, 7, ?', '11'),
(65, 3, 'pattern', '11, 16, ?, 26', '21'),
(66, 5, 'addition', '503+132', '635'),
(67, 5, 'addition', '772+91', '863'),
(68, 5, 'subtraction', '321-232', '89'),
(69, 5, 'subtraction', '456-6', '450'),
(70, 5, 'multiplication', '66*55', '3630'),
(71, 5, 'multiplication', '321*3', '963'),
(72, 5, 'division', '66/3', '22'),
(73, 5, 'division', '45/3', '15'),
(74, 6, 'addition', '1322+1244', '2566'),
(75, 6, 'addition', '4543+2345', '6888'),
(76, 5, 'equation', '3/4 = 9/?', '12'),
(77, 5, 'equation', '50/25 = 100/?', '50'),
(78, 5, 'pattern', '11, ?, 33, 44', '22'),
(79, 5, 'pattern', '55, 110, 165, ?', '220'),
(80, 6, 'subtraction', '675-175', '500'),
(81, 6, 'subtraction', '677-77', '600'),
(82, 6, 'multiplication', '34*35', '1190'),
(83, 6, 'multiplication', '77*88', '6776'),
(84, 6, 'division', '75/2', '37.5'),
(85, 6, 'division', '66/4', '16.5'),
(86, 6, 'equation', 'Square of 12?', '144'),
(87, 6, 'equation', 'Square of 25?', '625'),
(88, 6, 'pattern', '13, 26, ?, 52', '39'),
(89, 6, 'pattern', '114, 228, ?, 456', '342'),
(90, 1, 'equation', 'what comes before 6', '5'),
(91, 6, 'equation', 'what comes after 10', '11'),
(92, 2, 'subtraction', '33 - 11', '22'),
(96, 2, 'addition', '4+5', '9'),
(97, 3, 'subtraction', '4-3', '1'),
(99, 1, 'subtraction', '8-4', '4'),
(100, 3, 'addition', '30+50', '90'),
(101, 3, 'addition', '120+500', '620'),
(102, 3, 'addition', '50+30', '80'),
(103, 1, 'addition', '6+1', '7'),
(104, 1, 'subtraction', '5-4', '1'),
(105, 1, 'addition', '4+8', '12'),
(106, 1, 'subtraction', '7-3', '4'),
(107, 1, 'subtraction', '6-1', '5'),
(108, 1, 'multiplication', '2*8', '16'),
(109, 1, 'multiplication', '4*1', '4'),
(110, 1, 'multiplication', '6*1', '6'),
(111, 1, 'division', '6/2', '3'),
(112, 1, 'equation', 'What Comes After 14?', '15'),
(113, 1, 'equation', 'What Comes After 8?', '9'),
(114, 1, 'equation', 'What Comes After 19?', '20'),
(115, 1, 'pattern', '3, ?, 5, 6', '4'),
(116, 1, 'pattern', '40, 50, ?, 70', '60'),
(117, 2, 'addition', '7+7', '14'),
(118, 2, 'addition', '17+7', '24'),
(119, 2, 'addition', '20+4', '24'),
(120, 2, 'subtraction', '18-5', '13'),
(121, 2, 'multiplication', '7*6', '56'),
(122, 2, 'multiplication', '2*8', '16'),
(123, 2, 'division', '80/2', '40'),
(124, 2, 'division', '200/5', '40'),
(125, 2, 'equation', 'What Comes Between 11 & 13?', '12'),
(126, 2, 'equation', 'What Comes Between 798 & 800?', '799'),
(127, 2, 'pattern', '15, 25, ?, 45', '35'),
(128, 2, 'pattern', '9, 18, ?, 36', '27'),
(129, 3, 'subtraction', '53-32', '21'),
(130, 3, 'subtraction', '70-28', '42'),
(131, 3, 'multiplication', '9*8', '72'),
(132, 3, 'multiplication', '12*7', '84'),
(133, 3, 'division', '80/4', '20'),
(134, 3, 'division', '1000/5', '200'),
(135, 3, 'equation', '99+13+10', '122'),
(136, 3, 'equation', '4+9+5', '18'),
(137, 4, 'addition', '133+98', '231'),
(138, 4, 'addition', '129+92', '221'),
(139, 4, 'subtraction', '130-98', '32'),
(140, 4, 'subtraction', '120-84', '36'),
(141, 4, 'multiplication', '9*12', '108'),
(142, 4, 'multiplication', '19*3', '57'),
(143, 4, 'division', '2500/5', '500'),
(144, 4, 'division', '324/2', '162'),
(145, 4, 'equation', '3+2-3+8', '10'),
(146, 4, 'equation', '5+10-2-4+3+9', '21'),
(147, 4, 'pattern', '13, 17, ?, 25', '29'),
(148, 4, 'pattern', '84, 88, 92, ?', '96'),
(149, 3, 'pattern', '0, 5, 10, ?', '15'),
(150, 3, 'pattern', '11, 21, ?, 41', '31'),
(151, 5, 'addition', '506+132', '638'),
(152, 5, 'addition', '772+873', '1645'),
(153, 5, 'subtraction', '321-299', '22'),
(154, 5, 'subtraction', '809-766', '43'),
(155, 5, 'multiplication', '69*78', '5382'),
(156, 5, 'multiplication', '3215*3', '9645'),
(157, 5, 'division', '336/3', '112'),
(158, 5, 'division', '453/3', '151'),
(159, 6, 'addition', '8322+8244', '16566'),
(160, 6, 'addition', '3983+8937', '12920'),
(161, 5, 'equation', '32/64 = 8/?', '4'),
(162, 5, 'equation', '72/36 = 200/?', '100'),
(163, 5, 'pattern', '102, ?, 118, 126', '110'),
(164, 5, 'pattern', '75,120, 165, ?', '210'),
(165, 6, 'subtraction', '902-175', '727'),
(166, 6, 'subtraction', '993-727', '266'),
(167, 6, 'multiplication', '97*35', '3395'),
(168, 6, 'multiplication', '103*88', '9064'),
(169, 6, 'division', '109/2', '54.5'),
(170, 6, 'division', '78/8', '9.75'),
(171, 6, 'equation', 'Square of 25?', '625'),
(172, 6, 'equation', 'Square of 6?', '36'),
(173, 6, 'pattern', '23, 46, ?, 92', '69'),
(174, 6, 'pattern', '120, 240, ?, 480', '360'),
(175, 1, 'equation', 'what comes before 98', '97'),
(176, 6, 'equation', 'what comes after 132', '133'),
(177, 2, 'subtraction', '38 - 11', '27'),
(178, 2, 'addition', '4+9', '13'),
(179, 3, 'subtraction', '29-3', '26'),
(180, 1, 'subtraction', '4-4', '0'),
(181, 1, 'subtraction', '8-7', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `registered`) VALUES
(1, 'admin', '*BCDB46F9759BC3C7C2679D4E81145B53EE616059', 'Administrator', '2020-06-01 12:32:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_user_login_key` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
