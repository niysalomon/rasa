-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2016 at 09:59 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rasamembers`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL,
  `amateka` varchar(1000) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `amateka`, `date`) VALUES
(1, 'No my knees and pray', '2016-10-20 12:08:24'),
(2, 'We now need to consider the relationship between data rate and signal rate (bit rate\r\nand baud rate). This relationship, of course, depends on the value of r. It also depends\r\non the data pattern. If we have a data pattern of all 1s or all Os, the signal rate may be\r\ndifferent from a data pattern of alternating Os and Is. To derive a formula for the relationship,\r\nwe need to define three cases: the worst, best, and average. The worst case is\r\nwhen we need the maximum signal rate; the best case is when we need the minimum.\r\nIn data communications, we are usually interested in the average case.', '2016-10-20 12:29:10'),
(3, 'We now need to consider the relationship between data rate and signal rate (bit rate\r\nand baud rate). This relationship, of course, depends on the value of r. It also depends\r\non the data pattern. If we have a data pattern of all 1s or all Os, the signal rate may be\r\ndifferent from a data pattern of alternating Os and Is. To derive a formula for the relationship,\r\nwe need to define three cases: the worst, best, and average. The worst case is\r\nwhen we need the maximum signal rate; the best case is when we need the minimum.\r\nIn data communications, we are usually interested in the average case.\r\n<ul>\r\n<li>Jyewe</li>\r\n<li>Nawe</li>\r\n</ul>', '2016-10-20 12:32:28'),
(4, 'RASA', '2016-10-20 13:24:00');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'Patric', '1234'),
(2, 'Jay', '12345'),
(3, 'Rob', '123456'),
(4, 'Jean', 'Luc');

-- --------------------------------------------------------

--
-- Table structure for table `choirspics`
--

CREATE TABLE IF NOT EXISTS `choirspics` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `photo` text NOT NULL,
  `Name` text NOT NULL,
  `choir` varchar(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choirspics`
--

INSERT INTO `choirspics` (`id`, `title`, `photo`, `Name`, `choir`, `date`) VALUES
(1, 'one two', 'img/pic1.JPG', 'pic1.JPG', 'BOWAZ', '2016-10-12 11:41:32'),
(2, 'Bowaz', 'img/Bowaz choir2.JPG', 'Bowaz choir2.JPG', 'BOWAZ', '2016-10-12 12:16:20'),
(3, 'Hallal', 'img/DSC01868.JPG', 'DSC01868.JPG', 'BOWAZ', '2016-10-12 12:16:39');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `Id` int(11) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `phone`, `email`) VALUES
(4, 725498614, 'niyongirapatrick29@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE IF NOT EXISTS `file` (
  `id` int(11) NOT NULL,
  `file` text NOT NULL,
  `Name` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `file`, `Name`, `date`) VALUES
(1, 'img/EXERCISES dsp.docx', 'Inegalite', '2016-10-20 13:38:16'),
(2, 'img/EEE3421%20-%20Embedded%20Systems%20Marking%20Scheme.pdf', 'cash ann', '2016-10-20 13:44:44'),
(3, 'img/EXERCISES dsp.docx', 'bbb', '2016-10-20 13:45:43');

-- --------------------------------------------------------

--
-- Table structure for table `former`
--

CREATE TABLE IF NOT EXISTS `former` (
  `Id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `occupation` varchar(40) NOT NULL,
  `tel` int(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `former`
--

INSERT INTO `former` (`Id`, `firstname`, `lastname`, `occupation`, `tel`, `email`, `level`, `username`, `password`, `photo`) VALUES
(11, 'Jayy', 'hahaha', 'EVANGELISTE', 250000000, 'nigorjeanluc@gmail.com', '4', 'Ndi', '123456', 'Facebook.png'),
(15, 'Hahah', 'Byakoze', 'EVANGELISTE', 2147483647, 'njgor@live.com', '2', 'Jluc', 'zmzm', 'Facebook.png');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Subject` varchar(40) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

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
  `id` int(11) NOT NULL,
  `Title` varchar(40) NOT NULL,
  `Resume` varchar(40) NOT NULL,
  `Image` varchar(1000) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Content` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `Title`, `Resume`, `Image`, `Name`, `Content`, `date`) VALUES
(3, 'Ubusabane', 'Choir RASA ', 'img/DSC02089.JPG', 'DSC02089.JPG', 'Choir RASA Choir RASA Choir RASA Choir RASA Choir RASA Choir RASA Choir RASA Choir RASA Choir RASA Choir RASA Choir RASA Choir RASA Choir RASA ', '0000-00-00 00:00:00'),
(4, 'Certificates', 'Rasa Huye Campus Rasa Huye Campus Rasa H', 'img/DSC02019.JPG', 'DSC02019.JPG', 'Rasa Huye Campus Rasa Huye Campus Rasa Huye Campus Rasa Huye Campus Rasa Huye Campus Rasa Huye Campus Rasa Huye Campus Rasa Huye Campus Rasa Huye Campus Rasa Huye Campus Rasa Huye Campus Rasa Huye Campus Rasa Huye Campus Rasa Huye Campus Rasa Huye Campus Rasa Huye Campus Rasa Huye Campus Rasa Huye Campus Rasa Huye Campus Rasa Huye Campus Rasa Huye Campus Rasa Huye Campus Rasa Huye Campus Rasa Huye Campus ', '0000-00-00 00:00:00'),
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
  `id` int(11) NOT NULL,
  `Title` varchar(40) NOT NULL,
  `Paragraph` text NOT NULL,
  `date` datetime NOT NULL,
  `Day` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `Title`, `Paragraph`, `date`, `Day`) VALUES
(16, 'Yewe', 'This one', '2016-10-19 11:59:16', 'Saturday');

-- --------------------------------------------------------

--
-- Table structure for table `pubs`
--

CREATE TABLE IF NOT EXISTS `pubs` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pubs`
--

INSERT INTO `pubs` (`id`, `title`, `image`) VALUES
(3, 'Amakorali', 'DSC02019.JPG'),
(4, 'Pubbbs', 'anigif.gif');

-- --------------------------------------------------------

--
-- Table structure for table `rasaformermembers`
--

CREATE TABLE IF NOT EXISTS `rasaformermembers` (
  `Id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `gender` text NOT NULL,
  `occupation` text NOT NULL,
  `diocese` text NOT NULL,
  `email` text NOT NULL,
  `tel` varchar(10) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rasaformermembers`
--

INSERT INTO `rasaformermembers` (`Id`, `firstname`, `lastname`, `gender`, `occupation`, `diocese`, `email`, `tel`, `username`, `password`, `photo`) VALUES
(5, 'Jay', 'leon', 'Male', 'leader', 'Huye', 'example@example.com', '2500000000', 'BBC', '123456', 'DSC02089.JPG'),
(7, 'Jah', 'Kkssks', 'Male', 'Nyakubahwa', 'Butare', 'nigorjeanluc@gmail.com', '2500000000', 'Jay', '12345', 'A_e.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rasanewmebers`
--

CREATE TABLE IF NOT EXISTS `rasanewmebers` (
  `Id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `gender` text NOT NULL,
  `cell` text NOT NULL,
  `work` text NOT NULL,
  `tel` varchar(10) NOT NULL,
  `email` text NOT NULL,
  `college` text NOT NULL,
  `department` text NOT NULL,
  `level` int(5) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rasanewmebers`
--

INSERT INTO `rasanewmebers` (`Id`, `firstname`, `lastname`, `gender`, `cell`, `work`, `tel`, `email`, `college`, `department`, `level`, `username`, `password`, `photo`) VALUES
(5, 'Jay', 'Lee', 'Male', 'NAYOTIRAMA(butare', 'EVANGELISTE', '25039999', 'nigorjeanluc@gmail.com', 'CST', 'hhshsh', 2, 'Jay', '12345', 'IMG_20100101_021915.jpg'),
(7, 'nns', 'skskkss', 'Male', 'NAYOTIRAMA(butare', 'EVANGELISTE', '25039999', 'nigorjeanluc@gmail.com', 'CST', 'Budhddbbd', 5, 'Jah', '1234', 'IMG_20100101_021345.jpg'),
(8, 'Jst', 'nznnznz', 'Female', 'JEHOVANIS(shyogwe)', 'TECHNICIAN', '2500000000', 'nigorjeanluc@gmail.com', 'CST', 'huye', 4, 'Hypax', '123456', 'IMG_20100101_021915.jpg'),
(13, 'jsjsjsj', 'sjjsjsjs', 'Male', 'NAYOTIRAMA(butare', 'EVANGELISTE', '25039999', 'nigorjeanluc@gmail.com', 'CST', 'huye', 5, 'Jyewe', '1234567', 'Facebook.png'),
(14, 'Jayy', 'hahaha', 'Male', 'NAYOTIRAMA(butare', 'EVANGELISTE', '250000000', 'nigorjeanluc@gmail.com', 'CST', 'huye', 4, 'Ndi', '123456', 'Facebook.png'),
(15, 'jjdjdjjd', 'djdjdjdj', 'Male', 'NAYOTIRAMA(butare', 'EVANGELISTE', '250000000', 'nigorjeanluc@gmail.com', 'CST', 'huye', 5, 'Jah', '123', 'Facebook.png'),
(16, 'jjdjdjjd', 'djdjdjdj', 'Male', 'NAYOTIRAMA(butare', 'EVANGELISTE', '250000000', 'nigorjeanluc@gmail.com', 'CST', 'huye', 5, 'Jah', '123', 'Facebook.png'),
(17, 'jjsjsjs', 'ssss', 'Male', 'NAYOTIRAMA(butare', 'EVANGELISTE', '2500000000', 'nigorjeanluc@gmail.com', 'CST', 'Huye', 2, 'kkk', '123', 'Facebook.png'),
(18, 'Hahah', 'Byakoze', 'Male', 'NAYOTIRAMA(butare', 'EVANGELISTE', '2500000000', 'njgor@live.com', 'CST', 'huye', 2, 'Jluc', 'zmzm', 'Facebook.png');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `Id` int(16) NOT NULL,
  `name` text NOT NULL,
  `categorie` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `Video_Url` text NOT NULL,
  `icon_url` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`Id`, `name`, `categorie`, `year`, `Video_Url`, `icon_url`) VALUES
(6, 'Bowaz', 'RANGURURA & BOWAZ', 2016, 'img/vids/Bowaz11161027am__18231734__rasa.mp4', 'img/Bowaz11161027am__18231734IMG_20160120_051819.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `choirspics`
--
ALTER TABLE `choirspics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `former`
--
ALTER TABLE `former`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pubs`
--
ALTER TABLE `pubs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rasaformermembers`
--
ALTER TABLE `rasaformermembers`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `rasanewmebers`
--
ALTER TABLE `rasanewmebers`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `choirspics`
--
ALTER TABLE `choirspics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `former`
--
ALTER TABLE `former`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `pubs`
--
ALTER TABLE `pubs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rasaformermembers`
--
ALTER TABLE `rasaformermembers`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `rasanewmebers`
--
ALTER TABLE `rasanewmebers`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `Id` int(16) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
