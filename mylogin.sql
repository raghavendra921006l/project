-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2016 at 08:13 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mylogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `subject_id` int(20) NOT NULL,
  `question_id` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `subject_id`, `question_id`) VALUES
(1, 'i can''t understand pls...explain more', 1, 1),
(2, 'i cannot understand os???', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `confirmation_code` varchar(50) NOT NULL,
  `is_admin` int(11) NOT NULL,
  `profile_photo` varchar(70) NOT NULL,
  `register_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `firstname`, `lastname`, `email`, `pwd`, `status`, `confirmation_code`, `is_admin`, `profile_photo`, `register_date`) VALUES
(29, 'Alan', 'Wake', 'alanwake@gmail.com', '12345', 1, '', 0, 'alanwake@gmail.com.jpg', '2016-07-17 07:00:00'),
(56, 'Shyam', 'Sunder', 'sundershyam51@gmail.com', '123', 1, '21879', 1, 'sundershyam51@gmail.com.jpg', '2015-07-17 07:00:00'),
(59, 'Sahani', 'Sahai', 'ssahai199@gmail.com', '12345', 1, '24872', 0, 'ssahai199@gmail.com.jpg', '2016-07-20 08:01:13');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `short_answer` text NOT NULL,
  `long_answer` text NOT NULL,
  `subject_id` varchar(50) NOT NULL,
  `active` int(10) NOT NULL,
  `login_id` int(20) NOT NULL,
  `featured` smallint(1) NOT NULL,
  `asked` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `asked_by` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `subject_id` (`subject_id`),
  KEY `subject_id_2` (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `short_answer`, `long_answer`, `subject_id`, `active`, `login_id`, `featured`, `asked`, `asked_by`) VALUES
(6, 'What is Compiler Design', 'Compiler design principles provide an in-depth view of translation and optimization process. Compiler design covers basic translation mechanism and error detection & recovery. It includes lexical, syntax, and semantic analysis as front end, and code generation and optimization as back-ends.', 'A compiler translates the code written in one language to some other language without changing the meaning of the program. It is also expected that a compiler should make the target code efficient and optimized in terms of time and space.\r\n\r\nCompiler design principles provide an in-depth view of translation and optimization process. Compiler design covers basic translation mechanism and error detection & recovery. It includes lexical, syntax, and semantic analysis as front end, and code generation and optimization as back-end.', '1', 1, 56, 1, '0000-00-00 00:00:00', 0),
(7, 'Compiler-Architecture', 'Known as the front-end of the compiler, the analysis phase of the compiler reads the source program, divides it into core parts and then checks for lexical, grammar and syntax errors.', 'Analysis Phase\r\nKnown as the front-end of the compiler, the analysis phase of the compiler reads the source program, divides it into core parts and then checks for lexical, grammar and syntax errors.The analysis phase generates an intermediate representation of the source program and symbol table, which should be fed to the Synthesis phase as input.\r\nSynthesis Phase\r\nKnown as the back-end of the compiler, the synthesis phase generates the target program with the help of intermediate source code representation and symbol table.\r\n\r\nA compiler can have many phases and passes.\r\n\r\nPass : A pass refers to the traversal of a compiler through the entire program.\r\n\r\nPhase : A phase of a compiler is a distinguishable stage, which takes input from the previous stage, processes and yields output that can be used as input for the next stage. A pass can have more than one phase.', '1', 1, 56, 1, '0000-00-00 00:00:00', 0),
(8, 'what is as as', 'sdsadsa', '<p>dsdsd</p>\r\n', '63', 1, 0, 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `question_paper`
--

CREATE TABLE IF NOT EXISTS `question_paper` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `degree` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `year` varchar(30) NOT NULL,
  `active` int(10) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `question_paper`
--

INSERT INTO `question_paper` (`id`, `degree`, `subject`, `year`, `active`, `user_id`) VALUES
(2, 'Mca 4th sem', 'Theory Of Computation', '2014', 1, '56'),
(3, 'Mca 5th Sem', 'Toc', '2012', 1, '56');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `active` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`, `description`, `user_id`, `active`) VALUES
(1, 'Theory Of Computation', 'A toc translates the code written in one language to some other language without changing the meaning of the program.', '56', 1),
(2, 'Programming in C++', 'c++ A compiler translates the code written in one language to some other language without changing the meaning of the program.', '56', 1),
(60, 'C Programming', 'C programming is a popular programming language used for creating system and application software. ... This C programming tutorial is intended for beginners who do not have any prior knowledge or have very little knowledge of computer programming.', '', 1),
(61, 'Relational DBMS', 'A relational database management system (RDBMS) is a database management system (DBMS) that is based on the relational model as invented by E. F. Codd, of IBM''s San Jose Research Laboratory. In 2015, many of the databases in widespread use are based on the relational database model.', '', 1),
(62, 'Graph Theory', 'In mathematics and computer science, graph theory is the study of graphs, which are mathematical structures used to model pairwise relations between objects', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `technical_zone`
--

CREATE TABLE IF NOT EXISTS `technical_zone` (
  `id` int(40) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `video_url` varchar(300) NOT NULL,
  `active` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `technical_zone`
--

INSERT INTO `technical_zone` (`id`, `title`, `video_url`, `active`) VALUES
(3, 'videos', '<iframe width="310" height="210" src="https://www.youtube.com/embed/yQaAGmHNn9s" frameborder="0" allowfullscreen></iframe>', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
