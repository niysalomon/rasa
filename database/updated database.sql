-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2017 at 12:00 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rasamembers`
--
/*CREATE DATABASE IF NOT EXISTS `rasamembers` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `rasamembers`; **/

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `amateka` varchar(1000) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `level` varchar(50) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `level`, `username`, `password`) VALUES
(5, 'Main Admin', 'kike', 'patrick'),
(6, 'Other admin', 'peti', 'peti');

-- --------------------------------------------------------

--
-- Table structure for table `choirspics`
--

CREATE TABLE `choirspics` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `photo` text NOT NULL,
  `Name` text NOT NULL,
  `choir` varchar(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `title`, `phone`, `email`) VALUES
(5, 'admin', 782396251, 'niysalomon@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(11) NOT NULL,
  `file` text NOT NULL,
  `Name` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `former` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Subject` varchar(40) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `Title` varchar(40) NOT NULL,
  `Resume` varchar(40) NOT NULL,
  `Image` varchar(1000) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Content` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `programs` (
  `id` int(11) NOT NULL,
  `Title` varchar(40) NOT NULL,
  `Paragraph` text NOT NULL,
  `date` datetime NOT NULL,
  `Day` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `Title`, `Paragraph`, `date`, `Day`) VALUES
(17, 'fellowship', 'come on time we have vistors please', '2017-04-28 11:48:35', 'Monday');

-- --------------------------------------------------------

--
-- Table structure for table `pubs`
--

CREATE TABLE `pubs` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pubs`
--

INSERT INTO `pubs` (`id`, `title`, `image`) VALUES
(4, 'Pubbbs', 'anigif.gif');

-- --------------------------------------------------------

--
-- Table structure for table `rasaformermembers`
--

CREATE TABLE `rasaformermembers` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rasaformermembers`
--

INSERT INTO `rasaformermembers` (`Id`, `firstname`, `lastname`, `gender`, `occupation`, `diocese`, `email`, `tel`, `username`, `password`, `photo`) VALUES
(5, 'Jay', 'leon', 'Male', 'leader', 'Huye', 'example@example.com', '0788702365', 'BBC', '123456', 'DSC02089.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `rasanewmebers`
--

CREATE TABLE `rasanewmebers` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(18, 'Hahah', 'Byakoze', 'Male', 'NAYOTIRAMA(butare', 'EVANGELISTE', '2500000000', 'njgor@live.com', 'CST', 'huye', 2, 'Jluc', 'zmzm', 'Facebook.png'),
(19, 'Patrick', 'NIYONGIRA', 'Male', 'YAKINI(kibungo)', 'TECHNICIAN', '0783131441', 'niyongirapatrick29@gmail.com', 'CST', 'computer science', 5, 'pati', 'Patrick123@', 'cute.jpg'),
(20, 'titi', 'niyonzima', 'Male', 'NAYOTIRAMA(butare', 'EVANGELISTE', '0783131441', 'tit@yahoo.fr', 'CST', 'comp', 4, 'titi1', 'thierry', 'Facebook.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `Id` int(16) NOT NULL,
  `name` text NOT NULL,
  `categorie` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `Video_Url` text NOT NULL,
  `icon_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`Id`, `name`, `categorie`, `year`, `Video_Url`, `icon_url`) VALUES
(8, 'choir', 'RANGURURA & BOWAZ', 2012, 'img/vids/choir1117427am__18241134__rasa.mp4', 'img/choir1117427am__182411341ChrisBrown & Rihana.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `choirspics`
--
ALTER TABLE `choirspics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `former`
--
ALTER TABLE `former`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `pubs`
--
ALTER TABLE `pubs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rasaformermembers`
--
ALTER TABLE `rasaformermembers`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `rasanewmebers`
--
ALTER TABLE `rasanewmebers`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `Id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
