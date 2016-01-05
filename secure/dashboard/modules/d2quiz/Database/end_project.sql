-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2016 at 12:38 PM
-- Server version: 5.6.21-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `end_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer_info`
--

CREATE TABLE IF NOT EXISTS `answer_info` (
  `que_id` int(11) NOT NULL AUTO_INCREMENT,
  `ans1` varchar(45) NOT NULL,
  `ans2` varchar(45) NOT NULL,
  `ans3` varchar(45) NOT NULL,
  `ans4` varchar(45) NOT NULL,
  `true_ans` varchar(45) NOT NULL,
  PRIMARY KEY (`que_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `answer_info`
--

INSERT INTO `answer_info` (`que_id`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`) VALUES
(10, 'matter', 'big particles', 'elementary', 'ions', '4'),
(11, '1699 m', '1799 m', '1809 m ', '1609 m', '2'),
(12, '3', '4', '5', '2', '2'),
(13, 'Angstorm ', 'micron ', 'radian ', 'light year  ', '2'),
(14, 'giga', 'beta', 'mega', 'deca', '2'),
(15, '0.25', '0.50', '1', '.50', '1'),
(16, 'aqueous NaCl', 'molten NaCl', 'KOH', 'NaNO3', '1'),
(17, 'non spontaneous reaction', 'reversible reaction ', 'spontaneous reaction ', 'irreversible reaction ', '3'),
(18, 'caF2', 'NaCl', 'glass', 'All of these ', '2'),
(19, '9%', '10%', '11%', '12%', '1'),
(20, 'reflexive', 'transitive', 'trichotomy', 'symmetric', '2'),
(21, '(18,3)', '(18,-3)', '(38,9)', '(38,-9)', '4'),
(22, '(1,1)', '(1,2)', '(2,1)', '(2,2)', '1'),
(23, '(0,0)', '(1,0)', '(0,1)', '(1,1)', '2'),
(24, 'a = b', 'a != b', 'cannot be evaluated ', 'impossible ', '1'),
(25, 'q', 'q`', 'q', 'q', '3'),
(26, 'a', 'a', 'a', 'a', '3');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(45) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `user_id`, `password`) VALUES
('', 19, ''),
('a', 26, 'a'),
('aaaa', 8, 'aaaa'),
('add', 15, 'qq'),
('admin', 6, 'admin'),
('asfandyar', 3, 'hashmi'),
('aw', 23, 'aw'),
('b', 172, 'b'),
('c', 14, 'c'),
('eee', 16, 'eee'),
('f', 4, 'p'),
('j', 172, 'j'),
('m', 18, 'm'),
('moazzam', 5, 'khan'),
('moiz', 2, 'farooq'),
('moiza', 25, '12345'),
('n', 20, 'n'),
('q', 12, 'q'),
('qq', 10, 'q'),
('qwe', 24, 'aa'),
('ss', 7, 'aa'),
('t', 17, 't'),
('talha', 1, 'munir'),
('usman', 4, 'asghar'),
('z', 9, 'z'),
('zz', 13, 'z');

-- --------------------------------------------------------

--
-- Table structure for table `question_info`
--

CREATE TABLE IF NOT EXISTS `question_info` (
  `que_id` int(11) NOT NULL AUTO_INCREMENT,
  `test_id` int(11) DEFAULT NULL,
  `ques_desc` varchar(135) NOT NULL,
  PRIMARY KEY (`que_id`),
  KEY `test_id_idx` (`test_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `question_info`
--

INSERT INTO `question_info` (`que_id`, `test_id`, `ques_desc`) VALUES
(10, 2, 'In high energy physics scientist study '),
(11, 2, '1 mile is equal to '),
(12, 2, 'Number of significant figure in 0.0173 are:'),
(13, 2, 'which one of the following is not the unit of length:'),
(14, 2, 'which one is highest power multiple '),
(15, 4, 'The number of moles of CO2 which contain 8gm of O2'),
(16, 4, 'The electrolyte used in fuel cell is '),
(17, 4, 'burning of coal is an example of '),
(18, 4, 'which of the given is pseudo solid '),
(19, 4, 'Ice occupies more space than water '),
(20, 6, 'if a =b and b=c then a = c this property is called '),
(21, 6, 'if the product of complex number (4,3) and (5,-6) is'),
(22, 6, '(2,6)/(4,2)'),
(23, 6, 'multiplicative identity of complex number is '),
(24, 6, 'if a > b and b>a then'),
(25, 2, 'q'),
(26, 2, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `username` varchar(45) DEFAULT NULL,
  `test_id` int(11) NOT NULL,
  `test_date` datetime DEFAULT NULL,
  `score` int(11) NOT NULL,
  `result_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`result_id`),
  KEY `test_id2_idx` (`test_id`),
  KEY `username1_idx` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`username`, `test_id`, `test_date`, `score`, `result_id`) VALUES
('talha', 6, '2015-01-26 03:27:34', 0, 1),
('talha', 6, '2015-01-26 03:29:43', 2, 2),
('talha', 6, '2015-01-26 03:31:13', 1, 3),
('talha', 2, '2015-01-26 12:00:07', 0, 4),
('talha', 2, '2015-01-26 12:11:46', 0, 5),
('talha', 2, '2015-01-26 13:11:12', 0, 6),
('talha', 6, '2015-01-27 10:08:12', 2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `subject_info`
--

CREATE TABLE IF NOT EXISTS `subject_info` (
  `sub_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(45) NOT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `subject_info`
--

INSERT INTO `subject_info` (`sub_id`, `subject_name`) VALUES
(1, 'physics'),
(2, 'chemistry'),
(3, 'maths'),
(4, 'Biology'),
(5, 'English');

-- --------------------------------------------------------

--
-- Table structure for table `test_info`
--

CREATE TABLE IF NOT EXISTS `test_info` (
  `test_id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_id` int(11) NOT NULL,
  `test_name` varchar(45) DEFAULT NULL,
  `total_que` int(11) DEFAULT NULL,
  PRIMARY KEY (`test_id`),
  KEY `sub_id_idx` (`sub_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `test_info`
--

INSERT INTO `test_info` (`test_id`, `sub_id`, `test_name`, `total_que`) VALUES
(1, 1, 'first year', 5),
(2, 1, 'second year', 5),
(3, 2, 'first year', 5),
(4, 2, 'second year', 5),
(5, 3, 'first year ', 5),
(6, 3, 'second year', 5);

-- --------------------------------------------------------

--
-- Table structure for table `useranswer`
--

CREATE TABLE IF NOT EXISTS `useranswer` (
  `user_name` varchar(45) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `que_id` int(11) DEFAULT NULL,
  `true_ans` int(11) DEFAULT NULL,
  `your_ans` int(11) DEFAULT NULL,
  `userans_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`userans_id`),
  KEY `test_id_idx` (`test_id`),
  KEY `que_id_idx` (`que_id`),
  KEY `username_idx` (`user_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `useranswer`
--

INSERT INTO `useranswer` (`user_name`, `test_id`, `que_id`, `true_ans`, `your_ans`, `userans_id`) VALUES
('talha', 6, 20, 2, 4, 1),
('talha', 6, 21, 4, 1, 2),
('talha', 6, 22, 1, 2, 3),
('talha', 6, 23, 2, 2, 4),
('talha', 6, 24, 1, 1, 5),
('talha', 6, 20, 2, 4, 6),
('talha', 6, 21, 4, 1, 7),
('talha', 6, 22, 1, 2, 8),
('talha', 6, 23, 2, 2, 9),
('talha', 6, 24, 1, 2, 10),
('talha', 2, 10, 4, 1, 11),
('talha', 2, 11, 2, 1, 12),
('talha', 2, 12, 2, 1, 13),
('talha', 2, 13, 2, 1, 14),
('talha', 2, 14, 2, 1, 15),
('talha', 2, 10, 4, 1, 16),
('talha', 2, 11, 2, 1, 17),
('talha', 2, 12, 2, 1, 18),
('talha', 2, 14, 2, 1, 19),
('talha', 2, 10, 4, 1, 20),
('talha', 2, 11, 2, 1, 21),
('talha', 2, 12, 2, 1, 22),
('talha', 2, 13, 2, 1, 23),
('talha', 2, 14, 2, 1, 24),
('talha', 6, 20, 2, 1, 25),
('talha', 6, 21, 4, 2, 26),
('talha', 6, 22, 1, 1, 27),
('talha', 6, 23, 2, 1, 28),
('talha', 6, 24, 1, 1, 29);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `user_id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `pass` varchar(45) NOT NULL,
  `confirm_pass` varchar(45) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `username_idx` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `username`, `pass`, `confirm_pass`, `firstname`, `lastname`, `address`, `city`, `phone`, `email`) VALUES
(1, 'talha', 'munir', 'munir', 'talha', 'munir', '151/E garden town', 'Multan', '3317098137', 'talhamunir@gmail.com'),
(2, 'moiz', 'farooq', 'farooq', 'AbdulMoiz', 'Farooq', '22 Ghazali Street', 'Abbotabad', '3455900866', 'abdulmoiz@gmail.com'),
(27, 'Talha', '12345', '12345', 'Talha', 'Munir', '2', '1', '2', 'talhamunir95@gmail.com');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer_info`
--
ALTER TABLE `answer_info`
  ADD CONSTRAINT `que_id3` FOREIGN KEY (`que_id`) REFERENCES `question_info` (`que_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `question_info`
--
ALTER TABLE `question_info`
  ADD CONSTRAINT `test_id` FOREIGN KEY (`test_id`) REFERENCES `test_info` (`test_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `test_id2` FOREIGN KEY (`test_id`) REFERENCES `test_info` (`test_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `username1` FOREIGN KEY (`username`) REFERENCES `login` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `test_info`
--
ALTER TABLE `test_info`
  ADD CONSTRAINT `sub_id` FOREIGN KEY (`sub_id`) REFERENCES `subject_info` (`sub_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `useranswer`
--
ALTER TABLE `useranswer`
  ADD CONSTRAINT `que_d` FOREIGN KEY (`que_id`) REFERENCES `question_info` (`que_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `test_d` FOREIGN KEY (`test_id`) REFERENCES `test_info` (`test_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user` FOREIGN KEY (`user_name`) REFERENCES `login` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
