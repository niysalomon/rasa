-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2016 at 12:14 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
CREATE DATABASE rasamembers;
--
-- Database: `rasamembers`
--
USE rasamembers;
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
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Subject` varchar(40) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `Name`, `Email`, `Subject`, `Message`) VALUES
(17, 'Ezekiel', 'example@example.com', 'Yakubiswe', 'Livus<br />\r\nLievin'),
(18, 'Foko', 'example@foco', 'hahaha', 'Livus Livus Livus Livus Livus Livus Livus Livus Livus Livus Livus Livus Livus Livus Livus Livus Livus Livus ');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pubs`
--

INSERT INTO `pubs` (`id`, `title`, `image`) VALUES
(3, 'Amakorali', 'DSC02019.JPG');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rasaformermembers`
--

INSERT INTO `rasaformermembers` (`Id`, `firstname`, `lastname`, `gender`, `occupation`, `diocese`, `email`, `tel`, `username`, `password`, `photo`) VALUES
(5, 'Jay', 'leon', 'Male', 'leader', 'Huye', 'example@example.com', '2500000000', 'BBC', '123456', 'DSC02089.JPG');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rasanewmebers`
--

INSERT INTO `rasanewmebers` (`Id`, `firstname`, `lastname`, `gender`, `cell`, `work`, `tel`, `email`, `college`, `department`, `level`, `username`, `password`, `photo`) VALUES
(1, 'Jay', 'Sandy', 'Male', 'AGAPE(kigali)', 'PROTOCOL', '2500000000', 'example@foco', 'CAVM', 'KGL', 4, 'BBC', '123456', 'DSC02089.JPG'),
(2, 'Jay', 'Leeee', 'Male', 'NAYOTIRAMA(butare', 'EVANGELISTE', '0222222222', 'niyo@gmail.com', 'CAVM', 'Huye', 4, 'Titi', '1234', 'Bowaz choir.JPG');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`Id`, `name`, `categorie`, `year`, `Video_Url`, `icon_url`) VALUES
(3, 'Jah Jah', 'Bowaz', 2014, 'img/vids/Jah Jah10161041am__17231748__Rwandownload.mp4', 'img/Jah Jah10161041am__17231748IMG_20100101_021907.jpg'),
(4, 'Have', 'Hallal', 2014, 'img/vids/Have10161052am__17231759__rasa.mp4', 'img/Have10161052am__17231759IMG_20151201_085906.jpg');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `rasaformermembers`
--
ALTER TABLE `rasaformermembers`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `rasanewmebers`
--
ALTER TABLE `rasanewmebers`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `Id` int(16) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
