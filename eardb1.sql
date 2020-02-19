-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 27, 2017 at 03:19 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eardb`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amateka` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `amateka`, `date`) VALUES
(1, 'No my knees and pray', '2016-10-20 12:08:24'),
(2, 'We now need to consider the relationship between data rate and signal rate (bit rate\r\nand baud rate). This relationship, of course, depends on the value of r. It also depends\r\non the data pattern. If we have a data pattern of all 1s or all Os, the signal rate may be\r\ndifferent from a data pattern of alternating Os and Is. To derive a formula for the relationship,\r\nwe need to define three cases: the worst, best, and average. The worst case is\r\nwhen we need the maximum signal rate; the best case is when we need the minimum.\r\nIn data communications, we are usually interested in the average case.', '2016-10-20 12:29:10'),
(3, 'We now need to consider the relationship between data rate and signal rate (bit rate\r\nand baud rate). This relationship, of course, depends on the value of r. It also depends\r\non the data pattern. If we have a data pattern of all 1s or all Os, the signal rate may be\r\ndifferent from a data pattern of alternating Os and Is. To derive a formula for the relationship,\r\nwe need to define three cases: the worst, best, and average. The worst case is\r\nwhen we need the maximum signal rate; the best case is when we need the minimum.\r\nIn data communications, we are usually interested in the average case.\r\n<ul>\r\n<li>Jyewe</li>\r\n<li>Nawe</li>\r\n</ul>', '2016-10-20 12:32:28'),
(4, 'Click clack', '2016-10-20 13:24:00');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(50) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `level`, `username`, `password`) VALUES
(5, 'Main Admin', 'kike', 'patrick'),
(6, 'Other admin', 'peti', 'peti');

-- --------------------------------------------------------

--
-- Table structure for table `christians`
--

CREATE TABLE IF NOT EXISTS `christians` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `gender` text NOT NULL,
  `district` text NOT NULL,
  `parish` text NOT NULL,
  `work` text NOT NULL,
  `tel` varchar(10) NOT NULL,
  `email` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `christians`
--


-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `title`, `phone`, `email`) VALUES
(5, 'admin', 782396251, 'niysalomon@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE IF NOT EXISTS `file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file` text NOT NULL,
  `Name` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `file`, `Name`, `date`) VALUES
(4, 'img/Penguins.jpg', 'penguin', '2017-04-28 11:03:33'),
(5, 'img/celestin.docx', 'celestin', '2017-04-28 11:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `former`
--

CREATE TABLE IF NOT EXISTS `former` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `occupation` varchar(40) NOT NULL,
  `tel` int(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `former`
--

INSERT INTO `former` (`Id`, `firstname`, `lastname`, `occupation`, `tel`, `email`, `level`, `username`, `password`, `photo`) VALUES
(11, 'Jayy', 'hahaha', 'EVANGELISTE', 250000000, 'nigorjeanluc@gmail.com', '4', 'Ndi', '123456', 'Facebook.png'),
(15, 'Hahah', 'Byakoze', 'EVANGELISTE', 2147483647, 'njgor@live.com', '2', 'Jluc', 'zmzm', 'Facebook.png'),
(16, 'Patrick ', 'NIYONGIRA ', 'TECHNICIAN ', 783131441, 'niyongirapatrick29@gmail.com ', '5 ', 'pati ', 'Patrick123@ ', '10885391_1520035068279810_9057779621680183854_n.jpg '),
(17, 'titi ', 'niyonzima ', 'EVANGELISTE ', 783131441, 'tit@yahoo.fr ', '4 ', 'titi1 ', 'thierry ', 'tityy.jpg ');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `photo` text NOT NULL,
  `Name` text NOT NULL,
  `choir` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `photo`, `Name`, `choir`, `date`) VALUES
(1, 'one two', 'img/pic1.JPG', 'pic1.JPG', 'BOWAZ', '2016-10-12 11:41:32'),
(2, 'Bowaz', 'img/Bowaz choir2.JPG', 'Bowaz choir2.JPG', 'BOWAZ', '2016-10-12 12:16:20'),
(3, 'Hallal', 'img/DSC01868.JPG', 'DSC01868.JPG', 'BOWAZ', '2016-10-12 12:16:39');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Subject` varchar(40) NOT NULL,
  `Message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `Name`, `Email`, `Subject`, `Message`) VALUES
(18, 'Foko', 'example@foco', 'hahaha', 'Livus Livus Livus Livus Livus Livus Livus Livus Livus Livus Livus Livus Livus Livus Livus Livus Livus Livus '),
(19, 'bnmummm', 'vhjkp@pip.com', 'ghhgh', 'ghjkojjijkl'),
(20, 'Loue', 'example@example.com', 'kkksks', 'jsjsjjsjsjjssjjsj'),
(21, 'idjjdjd', 'nigorjeanluc@gmail.com', 'jsjjsjs', 'ijkmsjsjsjsjsjjs');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(40) NOT NULL,
  `Resume` varchar(40) NOT NULL,
  `Image` varchar(1000) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Content` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `Title`, `Resume`, `Image`, `Name`, `Content`, `date`) VALUES
(3, 'Ubusabane', 'Choir RASA ', 'img/DSC02089.JPG', 'DSC02089.JPG', 'Choir RASA Choir RASA Choir RASA Choir RASA Choir RASA Choir RASA Choir RASA Choir RASA Choir RASA Choir RASA Choir RASA Choir RASA Choir RASA ', '0000-00-00 00:00:00'),
(5, 'kjkajajaj', 'annanananananannamamamamamamammamama', 'img/DSC01998.JPG', 'DSC01998.JPG', 'Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir ', '0000-00-00 00:00:00'),
(6, 'kjkajajaj', 'annanananananannamamamamamamammamama', 'img/Bowaz choir.JPG', 'Bowaz choir.JPG', 'Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir ', '0000-00-00 00:00:00'),
(7, 'kjkajajaj', 'annanananananannamamamamamamammamama', 'img/DSC01868.JPG', 'DSC01868.JPG', 'Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir ', '0000-00-00 00:00:00'),
(8, 'kjkajajaj', 'annanananananannamamamamamamammamama', 'img/DSC01989.JPG', 'DSC01989.JPG', 'Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir ', '0000-00-00 00:00:00'),
(10, 'kjkajajaj', 'annanananananannamamamamamamammamama', 'img/DSC02002.JPG', 'DSC02002.JPG', 'Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir ', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE IF NOT EXISTS `programs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(40) NOT NULL,
  `Paragraph` text NOT NULL,
  `date` datetime NOT NULL,
  `Day` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `Title`, `Paragraph`, `date`, `Day`) VALUES
(17, 'fellowship', 'come on time we have vistors please', '2017-04-28 11:48:35', 'Monday');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE IF NOT EXISTS `property` (
  `propid` int(11) NOT NULL,
  `propname` varchar(35) NOT NULL,
  `location` varchar(30) NOT NULL,
  `values` int(20) DEFAULT NULL,
  `user` varchar(30) NOT NULL,
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--


-- --------------------------------------------------------

--
-- Table structure for table `pubs`
--

CREATE TABLE IF NOT EXISTS `pubs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pubs`
--

INSERT INTO `pubs` (`id`, `title`, `image`) VALUES
(4, 'Pubbbs', 'anigif.gif');

-- --------------------------------------------------------

--
-- Table structure for table `rasaformermembers`
--

CREATE TABLE IF NOT EXISTS `rasaformermembers` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `gender` text NOT NULL,
  `district` varchar(20) NOT NULL,
  `parish` varchar(20) NOT NULL,
  `work` varchar(35) DEFAULT NULL,
  `email` text NOT NULL,
  `tel` varchar(10) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `rasaformermembers`
--

INSERT INTO `rasaformermembers` (`Id`, `firstname`, `lastname`, `gender`, `district`, `parish`, `work`, `email`, `tel`, `username`, `password`, `photo`) VALUES
(5, 'Jay', 'leon', 'Male', 'leader', 'Huye', NULL, 'example@example.com', '0788702365', 'BBC', '123456', 'DSC02089.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `reportid` int(7) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `district` varchar(20) NOT NULL,
  `parish` varchar(20) NOT NULL,
  `activity` text NOT NULL,
  `picture` text,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--


-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `Id` int(16) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `categorie` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `Video_Url` text NOT NULL,
  `icon_url` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`Id`, `name`, `categorie`, `year`, `Video_Url`, `icon_url`) VALUES
(8, 'choir', 'RANGURURA & BOWAZ', 2012, 'img/vids/choir1117427am__18241134__rasa.mp4', 'img/choir1117427am__182411341ChrisBrown & Rihana.jpg'),
(9, 'video1', 'TEHILLAH & HALLAL', 2016, 'img/vids/video10117523am__8241230__rasa.mp4', 'img/video10117523am__8241230gallry (10).JPG');
