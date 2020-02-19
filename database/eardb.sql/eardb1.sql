-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 11, 2017 at 04:06 AM
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
-- Table structure for table `bfiles`
--

CREATE TABLE IF NOT EXISTS `bfiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file` text NOT NULL,
  `Name` text NOT NULL,
  `date` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `bfiles`
--

INSERT INTO `bfiles` (`id`, `file`, `Name`, `date`) VALUES
(1, 'img/Ubuhamya 1.jpg', 'ubuhamya', '2017-07-10 05:18:28'),
(2, 'img/Sports Kit letter.pdf', 'sport', '2017-07-10 05:18:43'),
(3, 'img/_DSC0060.JPG', 'ishuri', '2017-07-10 20:47:22');

-- --------------------------------------------------------

--
-- Table structure for table `christians`
--

CREATE TABLE IF NOT EXISTS `christians` (
  `cid` int(255) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `bdat` text NOT NULL,
  `fath` varchar(255) NOT NULL,
  `moth` varchar(555) NOT NULL,
  `prov` varchar(255) NOT NULL,
  `dist` varchar(255) NOT NULL,
  `sect` varchar(255) NOT NULL,
  `cell` varchar(255) NOT NULL,
  `distr` varchar(255) NOT NULL,
  `parish` varchar(255) NOT NULL,
  `lochurch` varchar(255) DEFAULT NULL,
  `tel` text,
  `photo` text,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `christians`
--

INSERT INTO `christians` (`cid`, `fname`, `lname`, `gender`, `bdat`, `fath`, `moth`, `prov`, `dist`, `sect`, `cell`, `distr`, `parish`, `lochurch`, `tel`, `photo`) VALUES
(1, 'niyigira', 'salomon', 'Female', '2222222222', 'erwer', 'ewrewe', 'SOUTHERN', 'Ruhango', 'eretet', 'ertetr', 'Ruhango', '', 'retertr', '0782396251', '1029-sankara.jpg'),
(2, 'kalou', 'salomon', 'Female', '2222222222', 'erwer', 'ewrewe', 'SOUTHERN', 'Nyanza', 'eretet', 'ertetr', 'Muhura', 'Nyagatare', 'retertr', '0782396251', '3c5db5a12c5529d464d80bee47b028d3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `communication`
--

CREATE TABLE IF NOT EXISTS `communication` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `comm` text NOT NULL,
  `dates` text NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `communication`
--

INSERT INTO `communication` (`id`, `comm`, `dates`, `name`) VALUES
(1, 'hyjugfjgfjghj', '07/07/2017', 'salo'),
(2, 'dasdasfsafsafsadfasfsafsafasdf', '07/07/2017', 'sar');

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
-- Table structure for table `districts`
--

CREATE TABLE IF NOT EXISTS `districts` (
  `Did` int(15) NOT NULL AUTO_INCREMENT,
  `Dname` varchar(30) NOT NULL,
  PRIMARY KEY (`Did`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`Did`, `Dname`) VALUES
(1, 'Muhura'),
(2, 'Byumba'),
(3, 'drfgthujkolijhg'),
(4, 'bjbjhjmhj'),
(5, 'hyhy'),
(6, 'hyhy'),
(7, 'KARAMA'),
(8, 'KARAMA'),
(9, 'KARAMA'),
(10, 'RUTARE'),
(11, 'RUTARE'),
(12, 'RUTARE'),
(13, 'rutare');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `file`, `Name`, `date`) VALUES
(5, 'img/celestin.docx', 'celestin', '2017-04-28 11:04:13'),
(6, 'img/Ubuhamya 2.jpg', 'kkkkk', '2017-07-09 07:51:16'),
(7, 'img/Sports Kit letter.pdf', 'ghjgj', '2017-07-09 07:51:25'),
(8, 'img/Ubuhamya 2.jpg', 'gfhjtr', '2017-07-09 07:51:33'),
(9, 'img/Ubuhamya 2.jpg', 'ghgftrh', '2017-07-09 07:51:41'),
(10, 'img/Ubuhamya 2.jpg', 'gtfrhtr', '2017-07-09 07:51:48'),
(11, 'img/Ubuhamya 1.jpg', 'gtrhgftrh', '2017-07-09 07:51:55'),
(12, 'img/Ubuhamya 1.jpg', 'tgrhgtrhtr', '2017-07-09 07:52:03'),
(14, 'img/Ubuhamya 1.jpg', 'ubuhamya', '2017-07-10 05:17:19'),
(15, 'img/_DSC0060.JPG', 'nnnnnnnnnn', '2017-07-10 20:30:15');

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
-- Table structure for table `localchurch`
--

CREATE TABLE IF NOT EXISTS `localchurch` (
  `loid` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  PRIMARY KEY (`loid`),
  KEY `pid` (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `localchurch`
--


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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `Title`, `Resume`, `Image`, `Name`, `Content`, `date`) VALUES
(3, 'Ubusabane', 'Choir RASA ', 'img/DSC02089.JPG', 'DSC02089.JPG', 'Choir RASA Choir RASA Choir RASA Choir RASA Choir RASA Choir RASA Choir RASA Choir RASA Choir RASA Choir RASA Choir RASA Choir RASA Choir RASA ', '0000-00-00 00:00:00'),
(5, 'kjkajajaj', 'annanananananannamamamamamamammamama', 'img/DSC01998.JPG', 'DSC01998.JPG', 'Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RAA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir ', '0000-00-00 00:00:00'),
(6, 'kjkajajaj', 'annanananananannamamamamamamammamama', 'img/Bowaz choir.JPG', 'Bowaz choir.JPG', 'Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir ', '0000-00-00 00:00:00'),
(7, 'kjkajajaj', 'annanananananannamamamamamamammamama', 'img/DSC01868.JPG', 'DSC01868.JPG', 'Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir ', '0000-00-00 00:00:00'),
(8, 'kjkajajaj', 'annanananananannamamamamamamammamama', 'img/DSC01989.JPG', 'DSC01989.JPG', 'Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir Choir RASA Choir RASA Choir RASA Choir RASA Choir ', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `parishs`
--

CREATE TABLE IF NOT EXISTS `parishs` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(255) DEFAULT NULL,
  `Did` int(11) DEFAULT NULL,
  PRIMARY KEY (`pid`),
  KEY `Did` (`Did`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `parishs`
--

INSERT INTO `parishs` (`pid`, `pname`, `Did`) VALUES
(8, 'karama', 1);

-- --------------------------------------------------------

--
-- Table structure for table `postall`
--

CREATE TABLE IF NOT EXISTS `postall` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `paragraph` text NOT NULL,
  `photo` text NOT NULL,
  `image` text NOT NULL,
  `dates` text NOT NULL,
  `fields` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `postall`
--

INSERT INTO `postall` (`id`, `paragraph`, `photo`, `image`, `dates`, `fields`) VALUES
(2, '                              E-learning in Medical Education\r\nE-learning to include all forms of electronically-mediated teaching. In other words, it is teaching and learning that is facilitated via information and communications technology (ICT), both inside and outside the classroom.\r\nBlended learning, A mixing of different learning environments and approaches that often includes both face-to face classroom methods and computer mediated activities in and/or outside the classroom\r\nPure e-learning / Fully-online, Complete reliance on e-learning materials for use without any face-to-face classroom methods. The nuanced difference between pure e-learning and fully-online tends to refer to the delivery platform. Fully online implies reliance on a web-based solution while pure e-learning is independent of the delivery platform.\r\nComputer-based training, The use of instructional material presented by means of a computer or computer system to enhance instruction and facilitate interactive learning.\r\nE-teaching, Involves the use of electronic instructional materials in both face-to-face and virtual classroom situations, and often nurtures interaction with information, materials, and ideas.\r\nAs a conclusion E-learning in medical education Improve rural healthcare, reduce transportation, Increase access to specialists, support isolated doctors, overcome Dr shortages, deliver education, facilitate research, Increase quality of care and efficiency, reduce operating costs of clinical services, reduce administrative costs, enable new modes of care\r\n', '3c5db5a12c5529d464d80bee47b028d3.jpg', 'img/3c5db5a12c5529d464d80bee47b028d3.jpg', '30/06/2017', 'Mothersunion'),
(5, 'Ingendo; Communication; Abashyitsi; Umukozi; Imirima (Hashakwe amakuru ahagije kugira ngo agezwe kuri Diosezi maze bishobore guhuzwa havanwemo igikwiriye) Tuzanabivugaho munama yâ€™ubutahaIngendo; Communication; Abashyitsi; Umukozi; Imirima (Hashakwe amakuru ahagije kugira ngo agezwe kuri Diosezi maze bishobore guhuzwa havanwemo igikwiriye) Tuzanabivugaho munama yâ€™ubutahaIngendo; Communication; Abashyitsi; Umukozi; Imirima (Hashakwe amakuru ahagije kugira ngo agezwe kuri Diosezi maze bishobore guhuzwa havanwemo igikwiriye) Tuzanabivugaho munama yâ€™ubutaha', '_DSC0024.JPG', 'img/_DSC0024.JPG', '06/07/2017', 'ouv'),
(6, 'Ingendo; Communication; Abashyitsi; Umukozi; Imirima (Hashakwe amakuru ahagije kugira ngo agezwe kuri Diosezi maze bishobore guhuzwa havanwemo igikwiriye) Tuzanabivugaho munama yâ€™ubutahaIngendo; Communication; Abashyitsi; Umukozi; Imirima (Hashakwe amakuru ahagije kugira ngo agezwe kuri Diosezi maze bishobore guhuzwa havanwemo igikwiriye) Tuzanabivugaho munama yâ€™ubutahaIngendo; Communication; Abashyitsi; Umukozi; Imirima (Hashakwe amakuru ahagije kugira ngo agezwe kuri Diosezi maze bishobore guhuzwa havanwemo igikwiriye) Tuzanabivugaho munama yâ€™ubutaha', '_DSC0024.JPG', 'img/_DSC0024.JPG', '06/07/2017', 'ouv'),
(7, '1. Madamu Kanzayire Jaqueline  utuye mu Karere ka Gicumbi Umurenge wa Byumba ufite  irangamuntu nomero   1198170109288071 nâ€™icyangombwa cyâ€™ubucuruzi nomero   RCA 236/KIG                   yiyemeje  kugurisha  E.A.R Diysezi ya Byumba  ingurube 140 ( ishashi125 nâ€™ibisekurume 15 ) mu umushinga  wayo wo kuzamura ubushobozi bwâ€™ingo hatangwa ingurube ku mafaranga  ibihumbi ijana na mirongo inani (180 000 ) ingurube  imwe.\r\n\r\n2. Izo   ngurube E.A.R D/Byumba  izishyura  ari  uko  zigeze  kubagenerwabikorwa  bakorana\r\n\r\n    nâ€™umushinga   bari  ahateganijwe.\r\n\r\n3. Dore  uko  inngurube igomba  kuba  imeze :\r\nâ€¢	Kuba  igeze  mu  gihe  cyo  kwima /kwimya  cyangwa  yarimye niba ari ishashi.\r\nâ€¢	Kuba  ari  nta  busembwa  na  buke  buyigaragaraho\r\nâ€¢	Kuba ari ubwoko bwa large white\r\n\r\n4. Ugurisha  ingurube  agomba  kuba  ahari  mu gihe  cyo  kuzitanga, kuko  abagenerwabikorwa \r\n     iyo  banenze  ingurube igurishwa, ugurisha  arayisubirana , hishyurwa  gusa  izatwawe\r\n     nâ€™ababagenerwabikorwa.\r\n\r\n5. Hari  igihe  itungo  ridahita  rigaragaza  uburwayi  inyuma, izapfa  cyangwa \r\n    ikabugaragaza  mu  gihe  cyâ€™iminsi  4  iguzwe, uwayigurishije  arayisubirana , iyo \r\n    ipfuye  arayishyura ( kuyisimbuza)  nta  yandi  mananiza  niyo yaba  yarishyuwe yose.\r\n\r\n6. Ingurube  zizatangwa  mu mu gihe cyâ€˜ukwezi kumwe uhereye \r\n', '_DSC0466.JPG', 'img/_DSC0466.JPG', '10/07/2017', 'buildings'),
(8, '1. Madamu Kanzayire Jaqueline  utuye mu Karere ka Gicumbi Umurenge wa Byumba ufite  irangamuntu nomero   1198170109288071 nâ€™icyangombwa cyâ€™ubucuruzi nomero   RCA 236/KIG                   yiyemeje  kugurisha  E.A.R Diysezi ya Byumba  ingurube 140 ( ishashi125 nâ€™ibisekurume 15 ) mu umushinga  wayo wo kuzamura ubushobozi bwâ€™ingo hatangwa ingurube ku mafaranga  ibihumbi ijana na mirongo inani (180 000 ) ingurube  imwe.\r\n\r\n2. Izo   ngurube E.A.R D/Byumba  izishyura  ari  uko  zigeze  kubagenerwabikorwa  bakorana\r\n\r\n    nâ€™umushinga   bari  ahateganijwe.\r\n\r\n3. Dore  uko  inngurube igomba  kuba  imeze :\r\nâ€¢	Kuba  igeze  mu  gihe  cyo  kwima /kwimya  cyangwa  yarimye niba ari ishashi.\r\nâ€¢	Kuba  ari  nta  busembwa  na  buke  buyigaragaraho\r\nâ€¢	Kuba ari ubwoko bwa large white\r\n\r\n4. Ugurisha  ingurube  agomba  kuba  ahari  mu gihe  cyo  kuzitanga, kuko  abagenerwabikorwa \r\n     iyo  banenze  ingurube igurishwa, ugurisha  arayisubirana , hishyurwa  gusa  izatwawe\r\n     nâ€™ababagenerwabikorwa.\r\n\r\n5. Hari  igihe  itungo  ridahita  rigaragaza  uburwayi  inyuma, izapfa  cyangwa \r\n    ikabugaragaza  mu  gihe  cyâ€™iminsi  4  iguzwe, uwayigurishije  arayisubirana , iyo \r\n    ipfuye  arayishyura ( kuyisimbuza)  nta  yandi  mananiza  niyo yaba  yarishyuwe yose.\r\n\r\n6. Ingurube  zizatangwa  mu mu gihe cyâ€˜ukwezi kumwe uhereye \r\n', 'aubex.JPG', 'img/aubex.JPG', '10/07/2017', 'buildings');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `programs`
--


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
-- Table structure for table `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `rid` int(255) NOT NULL AUTO_INCREMENT,
  `dates` text NOT NULL,
  `planact` text NOT NULL,
  `doneact` text NOT NULL,
  `nodoneact` text NOT NULL,
  `noplanact` text NOT NULL,
  `prob` text NOT NULL,
  `sugg` text NOT NULL,
  `observ` text NOT NULL,
  `worker` text NOT NULL,
  `post` text NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`rid`, `dates`, `planact`, `doneact`, `nodoneact`, `noplanact`, `prob`, `sugg`, `observ`, `worker`, `post`, `comment`) VALUES
(1, '29/06/2017', 'sdfghjkl;', 'dfguio', 'sdfyui', 'sdfgjklsdf', 'rtrtyuiuytrtuiutr', 'yuiuytrrtyuioiuytr', 'tyuioiuytrdtyuiooiuy', '', 'iuytdrtyuioiuy', 'tyuioiuyttyui'),
(2, '29/06/2017', 'fghjkl', 'ghjk`', 'tyuio', 'fghio', 'fghi', 'fgyui', 'fgyuio', '', 'fghjkl', 'fghjk'),
(3, '29/06/2017', 'fghjkl', 'ghjk`', 'tyuio', 'fghio', 'fghi', 'fgyui', 'fgyuio', 'fghio', 'fghjkl', 'fghjk'),
(4, '29/05/2017', 'rthujk', 'fghjk', 'fghk', 'fghjk', 'fgui', 'gui', 'gui', 'yui', 'fgu', 'fgu'),
(7, '29/06/2017', '\r\nMy first time in university was good; it started with induction week where the former school representative tried to show us some parts of our school. We saw boys and girls hostels, restaurant, playgrounds library, classrooms, toilets, ICT help desk and some other offices. In this week also we elected our class representative and created whatsapp group where we share our ideas and get some useful information. Also our university organized a party for welcoming the newcomers where we enjoyed seeing very talented students in many aspects. Not only those but also every morning our school leaders came every morning before class to tell us about some opportunities that are offered to our university. This was among my splendid time in my studies raison why I wish every secondary school student to work hard in order to reach university.\r\n\r\nMy first time in university was good; it started with induction week where the former school representative tried to show us some parts of our school. We saw boys and girls hostels, restaurant, playgrounds library, classrooms, toilets, ICT help desk and some other offices. In this week also we elected our class representative and created whatsapp group where we share our ideas and get some useful information. Also our university organized a party for welcoming the newcomers where we enjoyed seeing very talented students in many aspects. Not only those but also every morning our school leaders came every morning before class to tell us about some opportunities that are offered to our university. This was among my splendid time in my studies raison why I wish every secondary school student to work hard in order to reach university.\r\n', '\r\nMy first time in university was good; it started with induction week where the former school representative tried to show us some parts of our school. We saw boys and girls hostels, restaurant, playgrounds library, classrooms, toilets, ICT help desk and some other offices. In this week also we elected our class representative and created whatsapp group where we share our ideas and get some useful information. Also our university organized a party for welcoming the newcomers where we enjoyed seeing very talented students in many aspects. Not only those but also every morning our school leaders came every morning before class to tell us about some opportunities that are offered to our university. This was among my splendid time in my studies raison why I wish every secondary school student to work hard in order to reach university.\r\n\r\nMy first time in university was good; it started with induction week where the former school representative tried to show us some parts of our school. We saw boys and girls hostels, restaurant, playgrounds library, classrooms, toilets, ICT help desk and some other offices. In this week also we elected our class representative and created whatsapp group where we share our ideas and get some useful information. Also our university organized a party for welcoming the newcomers where we enjoyed seeing very talented students in many aspects. Not only those but also every morning our school leaders came every morning before class to tell us about some opportunities that are offered to our university. This was among my splendid time in my studies raison why I wish every secondary school student to work hard in order to reach university.\r\n', '\r\nMy first time in university was good; it started with induction week where the former school representative tried to show us some parts of our school. We saw boys and girls hostels, restaurant, playgrounds library, classrooms, toilets, ICT help desk and some other offices. In this week also we elected our class representative and created whatsapp group where we share our ideas and get some useful information. Also our university organized a party for welcoming the newcomers where we enjoyed seeing very talented students in many aspects. Not only those but also every morning our school leaders came every morning before class to tell us about some opportunities that are offered to our university. This was among my splendid time in my studies raison why I wish every secondary school student to work hard in order to reach university.\r\n\r\nMy first time in university was good; it started with induction week where the former school representative tried to show us some parts of our school. We saw boys and girls hostels, restaurant, playgrounds library, classrooms, toilets, ICT help desk and some other offices. In this week also we elected our class representative and created whatsapp group where we share our ideas and get some useful information. Also our university organized a party for welcoming the newcomers where we enjoyed seeing very talented students in many aspects. Not only those but also every morning our school leaders came every morning before class to tell us about some opportunities that are offered to our university. This was among my splendid time in my studies raison why I wish every secondary school student to work hard in order to reach university.\r\n', '\r\nMy first time in university was good; it started with induction week where the former school representative tried to show us some parts of our school. We saw boys and girls hostels, restaurant, playgrounds library, classrooms, toilets, ICT help desk and some other offices. In this week also we elected our class representative and created whatsapp group where we share our ideas and get some useful information. Also our university organized a party for welcoming the newcomers where we enjoyed seeing very talented students in many aspects. Not only those but also every morning our school leaders came every morning before class to tell us about some opportunities that are offered to our university. This was among my splendid time in my studies raison why I wish every secondary school student to work hard in order to reach university.\r\n\r\nMy first time in university was good; it started with induction week where the former school representative tried to show us some parts of our school. We saw boys and girls hostels, restaurant, playgrounds library, classrooms, toilets, ICT help desk and some other offices. In this week also we elected our class representative and created whatsapp group where we share our ideas and get some useful information. Also our university organized a party for welcoming the newcomers where we enjoyed seeing very talented students in many aspects. Not only those but also every morning our school leaders came every morning before class to tell us about some opportunities that are offered to our university. This was among my splendid time in my studies raison why I wish every secondary school student to work hard in order to reach university.\r\n', '\r\nMy first time in university was good; it started with induction week where the former school representative tried to show us some parts of our school. We saw boys and girls hostels, restaurant, playgrounds library, classrooms, toilets, ICT help desk and some other offices. In this week also we elected our class representative and created whatsapp group where we share our ideas and get some useful information. Also our university organized a party for welcoming the newcomers where we enjoyed seeing very talented students in many aspects. Not only those but also every morning our school leaders came every morning before class to tell us about some opportunities that are offered to our university. This was among my splendid time in my studies raison why I wish every secondary school student to work hard in order to reach university.\r\n\r\nMy first time in university was good; it started with induction week where the former school representative tried to show us some parts of our school. We saw boys and girls hostels, restaurant, playgrounds library, classrooms, toilets, ICT help desk and some other offices. In this week also we elected our class representative and created whatsapp group where we share our ideas and get some useful information. Also our university organized a party for welcoming the newcomers where we enjoyed seeing very talented students in many aspects. Not only those but also every morning our school leaders came every morning before class to tell us about some opportunities that are offered to our university. This was among my splendid time in my studies raison why I wish every secondary school student to work hard in order to reach university.\r\n', '\r\nMy first time in university was good; it started with induction week where the former school representative tried to show us some parts of our school. We saw boys and girls hostels, restaurant, playgrounds library, classrooms, toilets, ICT help desk and some other offices. In this week also we elected our class representative and created whatsapp group where we share our ideas and get some useful information. Also our university organized a party for welcoming the newcomers where we enjoyed seeing very talented students in many aspects. Not only those but also every morning our school leaders came every morning before class to tell us about some opportunities that are offered to our university. This was among my splendid time in my studies raison why I wish every secondary school student to work hard in order to reach university.\r\n\r\nMy first time in university was good; it started with induction week where the former school representative tried to show us some parts of our school. We saw boys and girls hostels, restaurant, playgrounds library, classrooms, toilets, ICT help desk and some other offices. In this week also we elected our class representative and created whatsapp group where we share our ideas and get some useful information. Also our university organized a party for welcoming the newcomers where we enjoyed seeing very talented students in many aspects. Not only those but also every morning our school leaders came every morning before class to tell us about some opportunities that are offered to our university. This was among my splendid time in my studies raison why I wish every secondary school student to work hard in order to reach university.\r\n', '\r\nMy first time in university was good; it started with induction week where the former school representative tried to show us some parts of our school. We saw boys and girls hostels, restaurant, playgrounds library, classrooms, toilets, ICT help desk and some other offices. In this week also we elected our class representative and created whatsapp group where we share our ideas and get some useful information. Also our university organized a party for welcoming the newcomers where we enjoyed seeing very talented students in many aspects. Not only those but also every morning our school leaders came every morning before class to tell us about some opportunities that are offered to our university. This was among my splendid time in my studies raison why I wish every secondary school student to work hard in order to reach university.\r\n\r\nMy first time in university was good; it started with induction week where the former school representative tried to show us some parts of our school. We saw boys and girls hostels, restaurant, playgrounds library, classrooms, toilets, ICT help desk and some other offices. In this week also we elected our class representative and created whatsapp group where we share our ideas and get some useful information. Also our university organized a party for welcoming the newcomers where we enjoyed seeing very talented students in many aspects. Not only those but also every morning our school leaders came every morning before class to tell us about some opportunities that are offered to our university. This was among my splendid time in my studies raison why I wish every secondary school student to work hard in order to reach university.\r\n', 'salomo', 'it', '\r\nMy first time in university was good; it started with induction week where the former school representative tried to show us some parts of our school. We saw boys and girls hostels, restaurant, playgrounds library, classrooms, toilets, ICT help desk and some other offices. In this week also we elected our class representative and created whatsapp group where we share our ideas and get some useful information. Also our university organized a party for welcoming the newcomers where we enjoyed seeing very talented students in many aspects. Not only those but also every morning our school leaders came every morning before class to tell us about some opportunities that are offered to our university. This was among my splendid time in my studies raison why I wish every secondary school student to work hard in order to reach university.\r\n\r\nMy first time in university was good; it started with induction week where the former school representative tried to show us some parts of our school. We saw boys and girls hostels, restaurant, playgrounds library, classrooms, toilets, ICT help desk and some other offices. In this week also we elected our class representative and created whatsapp group where we share our ideas and get some useful information. Also our university organized a party for welcoming the newcomers where we enjoyed seeing very talented students in many aspects. Not only those but also every morning our school leaders came every morning before class to tell us about some opportunities that are offered to our university. This was among my splendid time in my studies raison why I wish every secondary school student to work hard in order to reach university.\r\n'),
(8, '29/06/2017', '', '', '', '', '', '', '', '', '', ''),
(9, '30/06/2017', '', '', '', '', '', '', '', '', '', ''),
(10, '30/06/2017', '                              E-learning in Medical Education\r\nE-learning to include all forms of electronically-mediated teaching. In other words, it is teaching and learning that is facilitated via information and communications technology (ICT), both inside and outside the classroom.\r\nBlended learning, A mixing of different learning environments and approaches that often includes both face-to face classroom methods and computer mediated activities in and/or outside the classroom\r\nPure e-learning / Fully-online, Complete reliance on e-learning materials for use without any face-to-face classroom methods. The nuanced difference between pure e-learning and fully-online tends to refer to the delivery platform. Fully online implies reliance on a web-based solution while pure e-learning is independent of the delivery platform.\r\nComputer-based training, The use of instructional material presented by means of a computer or computer system to enhance instruction and facilitate interactive learning.\r\nE-teaching, Involves the use of electronic instructional materials in both face-to-face and virtual classroom situations, and often nurtures interaction with information, materials, and ideas.\r\nAs a conclusion E-learning in medical education Improve rural healthcare, reduce transportation, Increase access to specialists, support isolated doctors, overcome Dr shortages, deliver education, facilitate research, Increase quality of care and efficiency, reduce operating costs of clinical services, reduce administrative costs, enable new modes of care\r\n', '                              E-learning in Medical Education\r\nE-learning to include all forms of electronically-mediated teaching. In other words, it is teaching and learning that is facilitated via information and communications technology (ICT), both inside and outside the classroom.\r\nBlended learning, A mixing of different learning environments and approaches that often includes both face-to face classroom methods and computer mediated activities in and/or outside the classroom\r\nPure e-learning / Fully-online, Complete reliance on e-learning materials for use without any face-to-face classroom methods. The nuanced difference between pure e-learning and fully-online tends to refer to the delivery platform. Fully online implies reliance on a web-based solution while pure e-learning is independent of the delivery platform.\r\nComputer-based training, The use of instructional material presented by means of a computer or computer system to enhance instruction and facilitate interactive learning.\r\nE-teaching, Involves the use of electronic instructional materials in both face-to-face and virtual classroom situations, and often nurtures interaction with information, materials, and ideas.\r\nAs a conclusion E-learning in medical education Improve rural healthcare, reduce transportation, Increase access to specialists, support isolated doctors, overcome Dr shortages, deliver education, facilitate research, Increase quality of care and efficiency, reduce operating costs of clinical services, reduce administrative costs, enable new modes of care\r\n                              E-learning in Medical Education\r\nE-learning to include all forms of electronically-mediated teaching. In other words, it is teaching and learning that is facilitated via information and communications technology (ICT), both inside and outside the classroom.\r\nBlended learning, A mixing of different learning environments and approaches that often includes both face-to face classroom methods and computer mediated activities in and/or outside the classroom\r\nPure e-learning / Fully-online, Complete reliance on e-learning materials for use without any face-to-face classroom methods. The nuanced difference between pure e-learning and fully-online tends to refer to the delivery platform. Fully online implies reliance on a web-based solution while pure e-learning is independent of the delivery platform.\r\nComputer-based training, The use of instructional material presented by means of a computer or computer system to enhance instruction and facilitate interactive learning.\r\nE-teaching, Involves the use of electronic instructional materials in both face-to-face and virtual classroom situations, and often nurtures interaction with information, materials, and ideas.\r\nAs a conclusion E-learning in medical education Improve rural healthcare, reduce transportation, Increase access to specialists, support isolated doctors, overcome Dr shortages, deliver education, facilitate research, Increase quality of care and efficiency, reduce operating costs of clinical services, reduce administrative costs, enable new modes of care\r\n', '                              E-learning in Medical Education\r\nE-learning to include all forms of electronically-mediated teaching. In other words, it is teaching and learning that is facilitated via information and communications technology (ICT), both inside and outside the classroom.\r\nBlended learning, A mixing of different learning environments and approaches that often includes both face-to face classroom methods and computer mediated activities in and/or outside the classroom\r\nPure e-learning / Fully-online, Complete reliance on e-learning materials for use without any face-to-face classroom methods. The nuanced difference between pure e-learning and fully-online tends to refer to the delivery platform. Fully online implies reliance on a web-based solution while pure e-learning is independent of the delivery platform.\r\nComputer-based training, The use of instructional material presented by means of a computer or computer system to enhance instruction and facilitate interactive learning.\r\nE-teaching, Involves the use of electronic instructional materials in both face-to-face and virtual classroom situations, and often nurtures interaction with information, materials, and ideas.\r\nAs a conclusion E-learning in medical education Improve rural healthcare, reduce transportation, Increase access to specialists, support isolated doctors, overcome Dr shortages, deliver education, facilitate research, Increase quality of care and efficiency, reduce operating costs of clinical services, reduce administrative costs, enable new modes of care\r\n', '                              E-learning in Medical Education\r\nE-learning to include all forms of electronically-mediated teaching. In other words, it is teaching and learning that is facilitated via information and communications technology (ICT), both inside and outside the classroom.\r\nBlended learning, A mixing of different learning environments and approaches that often includes both face-to face classroom methods and computer mediated activities in and/or outside the classroom\r\nPure e-learning / Fully-online, Complete reliance on e-learning materials for use without any face-to-face classroom methods. The nuanced difference between pure e-learning and fully-online tends to refer to the delivery platform. Fully online implies reliance on a web-based solution while pure e-learning is independent of the delivery platform.\r\nComputer-based training, The use of instructional material presented by means of a computer or computer system to enhance instruction and facilitate interactive learning.\r\nE-teaching, Involves the use of electronic instructional materials in both face-to-face and virtual classroom situations, and often nurtures interaction with information, materials, and ideas.\r\nAs a conclusion E-learning in medical education Improve rural healthcare, reduce transportation, Increase access to specialists, support isolated doctors, overcome Dr shortages, deliver education, facilitate research, Increase quality of care and efficiency, reduce operating costs of clinical services, reduce administrative costs, enable new modes of care\r\n', '                              E-learning in Medical Education\r\nE-learning to include all forms of electronically-mediated teaching. In other words, it is teaching and learning that is facilitated via information and communications technology (ICT), both inside and outside the classroom.\r\nBlended learning, A mixing of different learning environments and approaches that often includes both face-to face classroom methods and computer mediated activities in and/or outside the classroom\r\nPure e-learning / Fully-online, Complete reliance on e-learning materials for use without any face-to-face classroom methods. The nuanced difference between pure e-learning and fully-online tends to refer to the delivery platform. Fully online implies reliance on a web-based solution while pure e-learning is independent of the delivery platform.\r\nComputer-based training, The use of instructional material presented by means of a computer or computer system to enhance instruction and facilitate interactive learning.\r\nE-teaching, Involves the use of electronic instructional materials in both face-to-face and virtual classroom situations, and often nurtures interaction with information, materials, and ideas.\r\nAs a conclusion E-learning in medical education Improve rural healthcare, reduce transportation, Increase access to specialists, support isolated doctors, overcome Dr shortages, deliver education, facilitate research, Increase quality of care and efficiency, reduce operating costs of clinical services, reduce administrative costs, enable new modes of care\r\n                              E-learning in Medical Education\r\nE-learning to include all forms of electronically-mediated teaching. In other words, it is teaching and learning that is facilitated via information and communications technology (ICT), both inside and outside the classroom.\r\nBlended learning, A mixing of different learning environments and approaches that often includes both face-to face classroom methods and computer mediated activities in and/or outside the classroom\r\nPure e-learning / Fully-online, Complete reliance on e-learning materials for use without any face-to-face classroom methods. The nuanced difference between pure e-learning and fully-online tends to refer to the delivery platform. Fully online implies reliance on a web-based solution while pure e-learning is independent of the delivery platform.\r\nComputer-based training, The use of instructional material presented by means of a computer or computer system to enhance instruction and facilitate interactive learning.\r\nE-teaching, Involves the use of electronic instructional materials in both face-to-face and virtual classroom situations, and often nurtures interaction with information, materials, and ideas.\r\nAs a conclusion E-learning in medical education Improve rural healthcare, reduce transportation, Increase access to specialists, support isolated doctors, overcome Dr shortages, deliver education, facilitate research, Increase quality of care and efficiency, reduce operating costs of clinical services, reduce administrative costs, enable new modes of care\r\n', '                              E-learning in Medical Education\r\nE-learning to include all forms of electronically-mediated teaching. In other words, it is teaching and learning that is facilitated via information and communications technology (ICT), both inside and outside the classroom.\r\nBlended learning, A mixing of different learning environments and approaches that often includes both face-to face classroom methods and computer mediated activities in and/or outside the classroom\r\nPure e-learning / Fully-online, Complete reliance on e-learning materials for use without any face-to-face classroom methods. The nuanced difference between pure e-learning and fully-online tends to refer to the delivery platform. Fully online implies reliance on a web-based solution while pure e-learning is independent of the delivery platform.\r\nComputer-based training, The use of instructional material presented by means of a computer or computer system to enhance instruction and facilitate interactive learning.\r\nE-teaching, Involves the use of electronic instructional materials in both face-to-face and virtual classroom situations, and often nurtures interaction with information, materials, and ideas.\r\nAs a conclusion E-learning in medical education Improve rural healthcare, reduce transportation, Increase access to specialists, support isolated doctors, overcome Dr shortages, deliver education, facilitate research, Increase quality of care and efficiency, reduce operating costs of clinical services, reduce administrative costs, enable new modes of care\r\n', '                              E-learning in Medical Education\r\nE-learning to include all forms of electronically-mediated teaching. In other words, it is teaching and learning that is facilitated via information and communications technology (ICT), both inside and outside the classroom.\r\nBlended learning, A mixing of different learning environments and approaches that often includes both face-to face classroom methods and computer mediated activities in and/or outside the classroom\r\nPure e-learning / Fully-online, Complete reliance on e-learning materials for use without any face-to-face classroom methods. The nuanced difference between pure e-learning and fully-online tends to refer to the delivery platform. Fully online implies reliance on a web-based solution while pure e-learning is independent of the delivery platform.\r\nComputer-based training, The use of instructional material presented by means of a computer or computer system to enhance instruction and facilitate interactive learning.\r\nE-teaching, Involves the use of electronic instructional materials in both face-to-face and virtual classroom situations, and often nurtures interaction with information, materials, and ideas.\r\nAs a conclusion E-learning in medical education Improve rural healthcare, reduce transportation, Increase access to specialists, support isolated doctors, overcome Dr shortages, deliver education, facilitate research, Increase quality of care and efficiency, reduce operating costs of clinical services, reduce administrative costs, enable new modes of care\r\n', 'tom', 'accountant', '                              E-learning in Medical Education\r\nE-learning to include all forms of electronically-mediated teaching. In other words, it is teaching and learning that is facilitated via information and communications technology (ICT), both inside and outside the classroom.\r\nBlended learning, A mixing of different learning environments and approaches that often includes both face-to face classroom methods and computer mediated activities in and/or outside the classroom\r\nPure e-learning / Fully-online, Complete reliance on e-learning materials for use without any face-to-face classroom methods. The nuanced difference between pure e-learning and fully-online tends to refer to the delivery platform. Fully online implies reliance on a web-based solution while pure e-learning is independent of the delivery platform.\r\nComputer-based training, The use of instructional material presented by means of a computer or computer system to enhance instruction and facilitate interactive learning.\r\nE-teaching, Involves the use of electronic instructional materials in both face-to-face and virtual classroom situations, and often nurtures interaction with information, materials, and ideas.\r\nAs a conclusion E-learning in medical education Improve rural healthcare, reduce transportation, Increase access to specialists, support isolated doctors, overcome Dr shortages, deliver education, facilitate research, Increase quality of care and efficiency, reduce operating costs of clinical services, reduce administrative costs, enable new modes of care\r\n'),
(11, '06/07/2017', '', '', '', '', '', '', '', '', '', ''),
(12, '06/07/2017', '', '', '', '', '', '', '', '', '', ''),
(13, '06/07/2017', 'fdfghjkhjfd', 'gffhjjgf', 'dsfghjk', 'xdfg,', 'gh', 'klhjk', 'hjk', 'jkhklgjuklsdfui', 'fgdfg', 'jkdvcxgvxcjklvgbxcu\r\nvkvhjcxklvh'),
(14, '06/07/2017', '', '', '', '', '', '', '', '', '', ''),
(15, '06/07/2017', '', '', '', '', '', '', '', '', '', ''),
(16, '06/07/2017', '', '', '', '', '', '', '', '', '', ''),
(17, '06/07/2017', '', '', '', '', '', '', '', '', '', ''),
(18, '06/07/2017', '', '', '', '', '', '', '', '', '', ''),
(19, '06/07/2017', '', '', '', '', '', '', '', '', '', ''),
(20, '06/07/2017', '', '', '', '', '', '', '', '', '', ''),
(21, '06/07/2017', '', '', '', '', '', '', '', '', '', ''),
(22, '06/07/2017', '', '', '', '', '', '', '', '', '', ''),
(23, '06/07/2017', '', '', '', '', '', '', '', '', '', ''),
(24, '06/07/2017', 'sfhydfhgftrhfsdagfsdBikomeze kunonosorwa hanyuma bigezwe mubiro bya Diyosezi (kureba uko bungana nâ€™icyakorerwamo) \r\nIbyemezo byose bijyanye no kugurisha cyangwa no gutanga ubutaka bwâ€™itorero bifatwa na Synode kuko Synode ariyo nyiribintu. \r\nDiyosezi kwandika ibyibutsa amaparuwasi\r\nBikomeze kunonosorwa hanyuma bigezwe mubiro bya Diyosezi (kureba uko bungana nâ€™icyakorerwamo) \r\nIbyemezo byose bijyanye no kugurisha cyangwa no gutanga ubutaka bwâ€™itorero bifatwa na Synode kuko Synode ariyo nyiribintu. \r\nDiyosezi kwandika ibyibutsa amaparuwasi\r\nBikomeze kunonosorwa hanyuma bigezwe mubiro bya Diyosezi (kureba uko bungana nâ€™icyakorerwamo) \r\nIbyemezo byose bijyanye no kugurisha cyangwa no gutanga ubutaka bwâ€™itorero bifatwa na Synode kuko Synode ariyo nyiribintu. \r\nDiyosezi kwandika ibyibutsa amaparuwasi\r\n', 'asdfsdfgdasfdBikomeze kunonosorwa hanyuma bigezwe mubiro bya Diyosezi (kureba uko bungana nâ€™icyakorerwamo) \r\nIbyemezo byose bijyanye no kugurisha cyangwa no gutanga ubutaka bwâ€™itorero bifatwa na Synode kuko Synode ariyo nyiribintu. \r\nDiyosezi kwandika ibyibutsa amaparuwasi\r\nBikomeze kunonosorwa hanyuma bigezwe mubiro bya Diyosezi (kureba uko bungana nâ€™icyakorerwamo) \r\nIbyemezo byose bijyanye no kugurisha cyangwa no gutanga ubutaka bwâ€™itorero bifatwa na Synode kuko Synode ariyo nyiribintu. \r\nDiyosezi kwandika ibyibutsa amaparuwasi\r\nBikomeze kunonosorwa hanyuma bigezwe mubiro bya Diyosezi (kureba uko bungana nâ€™icyakorerwamo) \r\nIbyemezo byose bijyanye no kugurisha cyangwa no gutanga ubutaka bwâ€™itorero bifatwa na Synode kuko Synode ariyo nyiribintu. \r\nDiyosezi kwandika ibyibutsa amaparuwasi\r\n', 'sgsdgfsdvgfBikomeze kunonosorwa hanyuma bigezwe mubiro bya Diyosezi (kureba uko bungana nâ€™icyakorerwamo) \r\nIbyemezo byose bijyanye no kugurisha cyangwa no gutanga ubutaka bwâ€™itorero bifatwa na Synode kuko Synode ariyo nyiribintu. \r\nDiyosezi kwandika ibyibutsa amaparuwasi\r\nBikomeze kunonosorwa hanyuma bigezwe mubiro bya Diyosezi (kureba uko bungana nâ€™icyakorerwamo) \r\nIbyemezo byose bijyanye no kugurisha cyangwa no gutanga ubutaka bwâ€™itorero bifatwa na Synode kuko Synode ariyo nyiribintu. \r\nDiyosezi kwandika ibyibutsa amaparuwasi\r\nBikomeze kunonosorwa hanyuma bigezwe mubiro bya Diyosezi (kureba uko bungana nâ€™icyakorerwamo) \r\nIbyemezo byose bijyanye no kugurisha cyangwa no gutanga ubutaka bwâ€™itorero bifatwa na Synode kuko Synode ariyo nyiribintu. \r\nDiyosezi kwandika ibyibutsa amaparuwasi\r\nBikomeze kunonosorwa hanyuma bigezwe mubiro bya Diyosezi (kureba uko bungana nâ€™icyakorerwamo) \r\nIbyemezo byose bijyanye no kugurisha cyangwa no gutanga ubutaka bwâ€™itorero bifatwa na Synode kuko Synode ariyo nyiribintu. \r\nDiyosezi kwandika ibyibutsa amaparuwasi\r\n', 'gsdgfsdfsdfBikomeze kunonosorwa hanyuma bigezwe mubiro bya Diyosezi (kureba uko bungana nâ€™icyakorerwamo) \r\nIbyemezo byose bijyanye no kugurisha cyangwa no gutanga ubutaka bwâ€™itorero bifatwa na Synode kuko Synode ariyo nyiribintu. \r\nDiyosezi kwandika ibyibutsa amaparuwasi\r\nBikomeze kunonosorwa hanyuma bigezwe mubiro bya Diyosezi (kureba uko bungana nâ€™icyakorerwamo) \r\nIbyemezo byose bijyanye no kugurisha cyangwa no gutanga ubutaka bwâ€™itorero bifatwa na Synode kuko Synode ariyo nyiribintu. \r\nDiyosezi kwandika ibyibutsa amaparuwasi\r\nBikomeze kunonosorwa hanyuma bigezwe mubiro bya Diyosezi (kureba uko bungana nâ€™icyakorerwamo) \r\nIbyemezo byose bijyanye no kugurisha cyangwa no gutanga ubutaka bwâ€™itorero bifatwa na Synode kuko Synode ariyo nyiribintu. \r\nDiyosezi kwandika ibyibutsa amaparuwasi\r\n', 'dfsgsdfdsBikomeze kunonosorwa hanyuma bigezwe mubiro bya Diyosezi (kureba uko bungana nâ€™icyakorerwamo) \r\nIbyemezo byose bijyanye no kugurisha cyangwa no gutanga ubutaka bwâ€™itorero bifatwa na Synode kuko Synode ariyo nyiribintu. \r\nDiyosezi kwandika ibyibutsa amaparuwasi\r\nBikomeze kunonosorwa hanyuma bigezwe mubiro bya Diyosezi (kureba uko bungana nâ€™icyakorerwamo) \r\nIbyemezo byose bijyanye no kugurisha cyangwa no gutanga ubutaka bwâ€™itorero bifatwa na Synode kuko Synode ariyo nyiribintu. \r\nDiyosezi kwandika ibyibutsa amaparuwasi\r\nBikomeze kunonosorwa hanyuma bigezwe mubiro bya Diyosezi (kureba uko bungana nâ€™icyakorerwamo) \r\nIbyemezo byose bijyanye no kugurisha cyangwa no gutanga ubutaka bwâ€™itorero bifatwa na Synode kuko Synode ariyo nyiribintu. \r\nDiyosezi kwandika ibyibutsa amaparuwasi\r\nBikomeze kunonosorwa hanyuma bigezwe mubiro bya Diyosezi (kureba uko bungana nâ€™icyakorerwamo) \r\nIbyemezo byose bijyanye no kugurisha cyangwa no gutanga ubutaka bwâ€™itorero bifatwa na Synode kuko Synode ariyo nyiribintu. \r\nDiyosezi kwandika ibyibutsa amaparuwasi\r\n', 'gfsdgfsdgfdsgfBikomeze kunonosorwa hanyuma bigezwe mubiro bya Diyosezi (kureba uko bungana nâ€™icyakorerwamo) \r\nIbyemezo byose bijyanye no kugurisha cyangwa no gutanga ubutaka bwâ€™itorero bifatwa na Synode kuko Synode ariyo nyiribintu. \r\nDiyosezi kwandika ibyibutsa amaparuwasi\r\nBikomeze kunonosorwa hanyuma bigezwe mubiro bya Diyosezi (kureba uko bungana nâ€™icyakorerwamo) \r\nIbyemezo byose bijyanye no kugurisha cyangwa no gutanga ubutaka bwâ€™itorero bifatwa na Synode kuko Synode ariyo nyiribintu. \r\nDiyosezi kwandika ibyibutsa amaparuwasi\r\nBikomeze kunonosorwa hanyuma bigezwe mubiro bya Diyosezi (kureba uko bungana nâ€™icyakorerwamo) \r\nIbyemezo byose bijyanye no kugurisha cyangwa no gutanga ubutaka bwâ€™itorero bifatwa na Synode kuko Synode ariyo nyiribintu. \r\nDiyosezi kwandika ibyibutsa amaparuwasi\r\n', 'gdsfgdsBikomeze kunonosorwa hanyuma bigezwe mubiro bya Diyosezi (kureba uko bungana nâ€™icyakorerwamo) \r\nIbyemezo byose bijyanye no kugurisha cyangwa no gutanga ubutaka bwâ€™itorero bifatwa na Synode kuko Synode ariyo nyiribintu. \r\nDiyosezi kwandika ibyibutsa amaparuwasi\r\nBikomeze kunonosorwa hanyuma bigezwe mubiro bya Diyosezi (kureba uko bungana nâ€™icyakorerwamo) \r\nIbyemezo byose bijyanye no kugurisha cyangwa no gutanga ubutaka bwâ€™itorero bifatwa na Synode kuko Synode ariyo nyiribintu. \r\nDiyosezi kwandika ibyibutsa amaparuwasi\r\nBikomeze kunonosorwa hanyuma bigezwe mubiro bya Diyosezi (kureba uko bungana nâ€™icyakorerwamo) \r\nIbyemezo byose bijyanye no kugurisha cyangwa no gutanga ubutaka bwâ€™itorero bifatwa na Synode kuko Synode ariyo nyiribintu. \r\nDiyosezi kwandika ibyibutsa amaparuwasi\r\nBikomeze kunonosorwa hanyuma bigezwe mubiro bya Diyosezi (kureba uko bungana nâ€™icyakorerwamo) \r\nIbyemezo byose bijyanye no kugurisha cyangwa no gutanga ubutaka bwâ€™itorero bifatwa na Synode kuko Synode ariyo nyiribintu. \r\nDiyosezi kwandika ibyibutsa amaparuwasi\r\n', 'pridance', 'gsdfgsadhsg', 'Bikomeze kunonosorwa hanyuma bigezwe mubiro bya Diyosezi (kureba uko bungana nâ€™icyakorerwamo) \r\nIbyemezo byose bijyanye no kugurisha cyangwa no gutanga ubutaka bwâ€™itorero bifatwa na Synode kuko Synode ariyo nyiribintu. \r\nDiyosezi kwandika ibyibutsa amaparuwasi\r\nBikomeze kunonosorwa hanyuma bigezwe mubiro bya Diyosezi (kureba uko bungana nâ€™icyakorerwamo) \r\nIbyemezo byose bijyanye no kugurisha cyangwa no gutanga ubutaka bwâ€™itorero bifatwa na Synode kuko Synode ariyo nyiribintu. \r\nDiyosezi kwandika ibyibutsa amaparuwasi\r\nBikomeze kunonosorwa hanyuma bigezwe mubiro bya Diyosezi (kureba uko bungana nâ€™icyakorerwamo) \r\nIbyemezo byose bijyanye no kugurisha cyangwa no gutanga ubutaka bwâ€™itorero bifatwa na Synode kuko Synode ariyo nyiribintu. \r\nDiyosezi kwandika ibyibutsa amaparuwasi\r\nBikomeze kunonosorwa hanyuma bigezwe mubiro bya Diyosezi (kureba uko bungana nâ€™icyakorerwamo) \r\nIbyemezo byose bijyanye no kugurisha cyangwa no gutanga ubutaka bwâ€™itorero bifatwa na Synode kuko Synode ariyo nyiribintu. \r\nDiyosezi kwandika ibyibutsa amaparuwasi\r\n'),
(25, '06/07/2017', '', '', '', '', '', '', '', '', '', ''),
(26, '07/07/2017', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `reports` (`rid`, `dates`, `planact`, `doneact`, `nodoneact`, `noplanact`, `prob`, `sugg`, `observ`, `worker`, `post`, `comment`) VALUES
(27, '07/07/2017', 'ngorane duhura nazo  mu gukemura ibibazo byâ€™abagenerwa bikorwa  , cyane cyane  nko muri progarame tugira    yâ€™isana mitima  ( sociotherapy ) , aho  abantu tubafasha  gukemurana ibibazo ( MVURA NKUVURE ( Sociotherapy )  ),  ariko baka bafite  ubumenyi buke mu mu mategeko  yâ€™imikoreshereze  yâ€™ubutaka, imicungire yâ€™imitungo wâ€™abashakanye  , impano nâ€™izungura;  ihohoterwa rishingiye ku gitsina. Ku bwiyo  mpamvu  , nâ€™ubwo bahanwa  ubufasha , ibibazo ntibikemuka neza  kubera kubura  ubwo bumenyi, ibyo bigatuma  ibibazo bitarangira neza mu miryango  naho batuye   .  Mu  urubyiruko nâ€™abasigajwe inyuma nâ€™amateka   nabo dufasha (Kwinjiza abasigajwe inyuma nâ€™amateka mwâ€™iterambere  ( Integration sociale et economique )   bigaragara ko bahura  nâ€™ibibazo  bigendanye no kutamenya uburenganzira bwabo (  uburenganzira bwa muntu ) bityo bigatuma kenshi bahura ningorane  zâ€™ihohoterwa . \r\n                                                                                             Madamu Perezida, mu buryo bwo gukemura ibibazo byâ€™abagenerwa bikorwa  mu kazi kacu  kaburi munsi, twasanze   bahawe  amahugurwa  arebana : \r\n1.	Itegeko rigenga imikoreshereze yâ€™ubutaka mu Rwanda\r\n2.	Itegeko ryerekeye imicungire yâ€™umutungo wâ€™abashyingiranywe , impano nâ€™izungura\r\n3.	Itegeko rihana ihohoterwa irya ari ryose rishingiye ku gitsina\r\n4.	Uburenganzira bwâ€™umwana mu mategeko yâ€™u Rwanda no mu Masezerano Mpuzamahanga.\r\n5.	Uburenganzira bwa Muntu na\r\nngorane duhura nazo  mu gukemura ibibazo byâ€™abagenerwa bikorwa  , cyane cyane  nko muri progarame tugira    yâ€™isana mitima  ( sociotherapy ) , aho  abantu tubafasha  gukemurana ibibazo ( MVURA NKUVURE ( Sociotherapy )  ),  ariko baka bafite  ubumenyi buke mu mu mategeko  yâ€™imikoreshereze  yâ€™ubutaka, imicungire yâ€™imitungo wâ€™abashakanye  , impano nâ€™izungura;  ihohoterwa rishingiye ku gitsina. Ku bwiyo  mpamvu  , nâ€™ubwo bahanwa  ubufasha , ibibazo ntibikemuka neza  kubera kubura  ubwo bumenyi, ibyo bigatuma  ibibazo bitarangira neza mu miryango  naho batuye   .  Mu  urubyiruko nâ€™abasigajwe inyuma nâ€™amateka   nabo dufasha (Kwinjiza abasigajwe inyuma nâ€™amateka mwâ€™iterambere  ( Integration sociale et economique )   bigaragara ko bahura  nâ€™ibibazo  bigendanye no kutamenya uburenganzira bwabo (  uburenganzira bwa muntu ) bityo bigatuma kenshi bahura ningorane  zâ€™ihohoterwa . \r\n                                                                                             Madamu Perezida, mu buryo bwo gukemura ibibazo byâ€™abagenerwa bikorwa  mu kazi kacu  kaburi munsi, twasanze   bahawe  amahugurwa  arebana : \r\n1.	Itegeko rigenga imikoreshereze yâ€™ubutaka mu Rwanda\r\n2.	Itegeko ryerekeye imicungire yâ€™umutungo wâ€™abashyingiranywe , impano nâ€™izungura\r\n3.	Itegeko rihana ihohoterwa irya ari ryose rishingiye ku gitsina\r\n4.	Uburenganzira bwâ€™umwana mu mategeko yâ€™u Rwanda no mu Masezerano Mpuzamahanga.\r\n5.	Uburenganzira bwa Muntu na\r\n', 'ngorane duhura nazo  mu gukemura ibibazo byâ€™abagenerwa bikorwa  , cyane cyane  nko muri progarame tugira    yâ€™isana mitima  ( sociotherapy ) , aho  abantu tubafasha  gukemurana ibibazo ( MVURA NKUVURE ( Sociotherapy )  ),  ariko baka bafite  ubumenyi buke mu mu mategeko  yâ€™imikoreshereze  yâ€™ubutaka, imicungire yâ€™imitungo wâ€™abashakanye  , impano nâ€™izungura;  ihohoterwa rishingiye ku gitsina. Ku bwiyo  mpamvu  , nâ€™ubwo bahanwa  ubufasha , ibibazo ntibikemuka neza  kubera kubura  ubwo bumenyi, ibyo bigatuma  ibibazo bitarangira neza mu miryango  naho batuye   .  Mu  urubyiruko nâ€™abasigajwe inyuma nâ€™amateka   nabo dufasha (Kwinjiza abasigajwe inyuma nâ€™amateka mwâ€™iterambere  ( Integration sociale et economique )   bigaragara ko bahura  nâ€™ibibazo  bigendanye no kutamenya uburenganzira bwabo (  uburenganzira bwa muntu ) bityo bigatuma kenshi bahura ningorane  zâ€™ihohoterwa . \r\n                                                                                             Madamu Perezida, mu buryo bwo gukemura ibibazo byâ€™abagenerwa bikorwa  mu kazi kacu  kaburi munsi, twasanze   bahawe  amahugurwa  arebana : \r\n1.	Itegeko rigenga imikoreshereze yâ€™ubutaka mu Rwanda\r\n2.	Itegeko ryerekeye imicungire yâ€™umutungo wâ€™abashyingiranywe , impano nâ€™izungura\r\n3.	Itegeko rihana ihohoterwa irya ari ryose rishingiye ku gitsina\r\n4.	Uburenganzira bwâ€™umwana mu mategeko yâ€™u Rwanda no mu Masezerano Mpuzamahanga.\r\n5.	Uburenganzira bwa Muntu na\r\nngorane duhura nazo  mu gukemura ibibazo byâ€™abagenerwa bikorwa  , cyane cyane  nko muri progarame tugira    yâ€™isana mitima  ( sociotherapy ) , aho  abantu tubafasha  gukemurana ibibazo ( MVURA NKUVURE ( Sociotherapy )  ),  ariko baka bafite  ubumenyi buke mu mu mategeko  yâ€™imikoreshereze  yâ€™ubutaka, imicungire yâ€™imitungo wâ€™abashakanye  , impano nâ€™izungura;  ihohoterwa rishingiye ku gitsina. Ku bwiyo  mpamvu  , nâ€™ubwo bahanwa  ubufasha , ibibazo ntibikemuka neza  kubera kubura  ubwo bumenyi, ibyo bigatuma  ibibazo bitarangira neza mu miryango  naho batuye   .  Mu  urubyiruko nâ€™abasigajwe inyuma nâ€™amateka   nabo dufasha (Kwinjiza abasigajwe inyuma nâ€™amateka mwâ€™iterambere  ( Integration sociale et economique )   bigaragara ko bahura  nâ€™ibibazo  bigendanye no kutamenya uburenganzira bwabo (  uburenganzira bwa muntu ) bityo bigatuma kenshi bahura ningorane  zâ€™ihohoterwa . \r\n                                                                                             Madamu Perezida, mu buryo bwo gukemura ibibazo byâ€™abagenerwa bikorwa  mu kazi kacu  kaburi munsi, twasanze   bahawe  amahugurwa  arebana : \r\n1.	Itegeko rigenga imikoreshereze yâ€™ubutaka mu Rwanda\r\n2.	Itegeko ryerekeye imicungire yâ€™umutungo wâ€™abashyingiranywe , impano nâ€™izungura\r\n3.	Itegeko rihana ihohoterwa irya ari ryose rishingiye ku gitsina\r\n4.	Uburenganzira bwâ€™umwana mu mategeko yâ€™u Rwanda no mu Masezerano Mpuzamahanga.\r\n5.	Uburenganzira bwa Muntu na\r\n', 'ngorane duhura nazo  mu gukemura ibibazo byâ€™abagenerwa bikorwa  , cyane cyane  nko muri progarame tugira    yâ€™isana mitima  ( sociotherapy ) , aho  abantu tubafasha  gukemurana ibibazo ( MVURA NKUVURE ( Sociotherapy )  ),  ariko baka bafite  ubumenyi buke mu mu mategeko  yâ€™imikoreshereze  yâ€™ubutaka, imicungire yâ€™imitungo wâ€™abashakanye  , impano nâ€™izungura;  ihohoterwa rishingiye ku gitsina. Ku bwiyo  mpamvu  , nâ€™ubwo bahanwa  ubufasha , ibibazo ntibikemuka neza  kubera kubura  ubwo bumenyi, ibyo bigatuma  ibibazo bitarangira neza mu miryango  naho batuye   .  Mu  urubyiruko nâ€™abasigajwe inyuma nâ€™amateka   nabo dufasha (Kwinjiza abasigajwe inyuma nâ€™amateka mwâ€™iterambere  ( Integration sociale et economique )   bigaragara ko bahura  nâ€™ibibazo  bigendanye no kutamenya uburenganzira bwabo (  uburenganzira bwa muntu ) bityo bigatuma kenshi bahura ningorane  zâ€™ihohoterwa . \r\n                                                                                             Madamu Perezida, mu buryo bwo gukemura ibibazo byâ€™abagenerwa bikorwa  mu kazi kacu  kaburi munsi, twasanze   bahawe  amahugurwa  arebana : \r\n1.	Itegeko rigenga imikoreshereze yâ€™ubutaka mu Rwanda\r\n2.	Itegeko ryerekeye imicungire yâ€™umutungo wâ€™abashyingiranywe , impano nâ€™izungura\r\n3.	Itegeko rihana ihohoterwa irya ari ryose rishingiye ku gitsina\r\n4.	Uburenganzira bwâ€™umwana mu mategeko yâ€™u Rwanda no mu Masezerano Mpuzamahanga.\r\n5.	Uburenganzira bwa Muntu na\r\nngorane duhura nazo  mu gukemura ibibazo byâ€™abagenerwa bikorwa  , cyane cyane  nko muri progarame tugira    yâ€™isana mitima  ( sociotherapy ) , aho  abantu tubafasha  gukemurana ibibazo ( MVURA NKUVURE ( Sociotherapy )  ),  ariko baka bafite  ubumenyi buke mu mu mategeko  yâ€™imikoreshereze  yâ€™ubutaka, imicungire yâ€™imitungo wâ€™abashakanye  , impano nâ€™izungura;  ihohoterwa rishingiye ku gitsina. Ku bwiyo  mpamvu  , nâ€™ubwo bahanwa  ubufasha , ibibazo ntibikemuka neza  kubera kubura  ubwo bumenyi, ibyo bigatuma  ibibazo bitarangira neza mu miryango  naho batuye   .  Mu  urubyiruko nâ€™abasigajwe inyuma nâ€™amateka   nabo dufasha (Kwinjiza abasigajwe inyuma nâ€™amateka mwâ€™iterambere  ( Integration sociale et economique )   bigaragara ko bahura  nâ€™ibibazo  bigendanye no kutamenya uburenganzira bwabo (  uburenganzira bwa muntu ) bityo bigatuma kenshi bahura ningorane  zâ€™ihohoterwa . \r\n                                                                                             Madamu Perezida, mu buryo bwo gukemura ibibazo byâ€™abagenerwa bikorwa  mu kazi kacu  kaburi munsi, twasanze   bahawe  amahugurwa  arebana : \r\n1.	Itegeko rigenga imikoreshereze yâ€™ubutaka mu Rwanda\r\n2.	Itegeko ryerekeye imicungire yâ€™umutungo wâ€™abashyingiranywe , impano nâ€™izungura\r\n3.	Itegeko rihana ihohoterwa irya ari ryose rishingiye ku gitsina\r\n4.	Uburenganzira bwâ€™umwana mu mategeko yâ€™u Rwanda no mu Masezerano Mpuzamahanga.\r\n5.	Uburenganzira bwa Muntu na\r\nngorane duhura nazo  mu gukemura ibibazo byâ€™abagenerwa bikorwa  , cyane cyane  nko muri progarame tugira    yâ€™isana mitima  ( sociotherapy ) , aho  abantu tubafasha  gukemurana ibibazo ( MVURA NKUVURE ( Sociotherapy )  ),  ariko baka bafite  ubumenyi buke mu mu mategeko  yâ€™imikoreshereze  yâ€™ubutaka, imicungire yâ€™imitungo wâ€™abashakanye  , impano nâ€™izungura;  ihohoterwa rishingiye ku gitsina. Ku bwiyo  mpamvu  , nâ€™ubwo bahanwa  ubufasha , ibibazo ntibikemuka neza  kubera kubura  ubwo bumenyi, ibyo bigatuma  ibibazo bitarangira neza mu miryango  naho batuye   .  Mu  urubyiruko nâ€™abasigajwe inyuma nâ€™amateka   nabo dufasha (Kwinjiza abasigajwe inyuma nâ€™amateka mwâ€™iterambere  ( Integration sociale et economique )   bigaragara ko bahura  nâ€™ibibazo  bigendanye no kutamenya uburenganzira bwabo (  uburenganzira bwa muntu ) bityo bigatuma kenshi bahura ningorane  zâ€™ihohoterwa . \r\n                                                                                             Madamu Perezida, mu buryo bwo gukemura ibibazo byâ€™abagenerwa bikorwa  mu kazi kacu  kaburi munsi, twasanze   bahawe  amahugurwa  arebana : \r\n1.	Itegeko rigenga imikoreshereze yâ€™ubutaka mu Rwanda\r\n2.	Itegeko ryerekeye imicungire yâ€™umutungo wâ€™abashyingiranywe , impano nâ€™izungura\r\n3.	Itegeko rihana ihohoterwa irya ari ryose rishingiye ku gitsina\r\n4.	Uburenganzira bwâ€™umwana mu mategeko yâ€™u Rwanda no mu Masezerano Mpuzamahanga.\r\n5.	Uburenganzira bwa Muntu na\r\n', 'ngorane duhura nazo  mu gukemura ibibazo byâ€™abagenerwa bikorwa  , cyane cyane  nko muri progarame tugira    yâ€™isana mitima  ( sociotherapy ) , aho  abantu tubafasha  gukemurana ibibazo ( MVURA NKUVURE ( Sociotherapy )  ),  ariko baka bafite  ubumenyi buke mu mu mategeko  yâ€™imikoreshereze  yâ€™ubutaka, imicungire yâ€™imitungo wâ€™abashakanye  , impano nâ€™izungura;  ihohoterwa rishingiye ku gitsina. Ku bwiyo  mpamvu  , nâ€™ubwo bahanwa  ubufasha , ibibazo ntibikemuka neza  kubera kubura  ubwo bumenyi, ibyo bigatuma  ibibazo bitarangira neza mu miryango  naho batuye   .  Mu  urubyiruko nâ€™abasigajwe inyuma nâ€™amateka   nabo dufasha (Kwinjiza abasigajwe inyuma nâ€™amateka mwâ€™iterambere  ( Integration sociale et economique )   bigaragara ko bahura  nâ€™ibibazo  bigendanye no kutamenya uburenganzira bwabo (  uburenganzira bwa muntu ) bityo bigatuma kenshi bahura ningorane  zâ€™ihohoterwa . \r\n                                                                                             Madamu Perezida, mu buryo bwo gukemura ibibazo byâ€™abagenerwa bikorwa  mu kazi kacu  kaburi munsi, twasanze   bahawe  amahugurwa  arebana : \r\n1.	Itegeko rigenga imikoreshereze yâ€™ubutaka mu Rwanda\r\n2.	Itegeko ryerekeye imicungire yâ€™umutungo wâ€™abashyingiranywe , impano nâ€™izungura\r\n3.	Itegeko rihana ihohoterwa irya ari ryose rishingiye ku gitsina\r\n4.	Uburenganzira bwâ€™umwana mu mategeko yâ€™u Rwanda no mu Masezerano Mpuzamahanga.\r\n5.	Uburenganzira bwa Muntu na\r\nngorane duhura nazo  mu gukemura ibibazo byâ€™abagenerwa bikorwa  , cyane cyane  nko muri progarame tugira    yâ€™isana mitima  ( sociotherapy ) , aho  abantu tubafasha  gukemurana ibibazo ( MVURA NKUVURE ( Sociotherapy )  ),  ariko baka bafite  ubumenyi buke mu mu mategeko  yâ€™imikoreshereze  yâ€™ubutaka, imicungire yâ€™imitungo wâ€™abashakanye  , impano nâ€™izungura;  ihohoterwa rishingiye ku gitsina. Ku bwiyo  mpamvu  , nâ€™ubwo bahanwa  ubufasha , ibibazo ntibikemuka neza  kubera kubura  ubwo bumenyi, ibyo bigatuma  ibibazo bitarangira neza mu miryango  naho batuye   .  Mu  urubyiruko nâ€™abasigajwe inyuma nâ€™amateka   nabo dufasha (Kwinjiza abasigajwe inyuma nâ€™amateka mwâ€™iterambere  ( Integration sociale et economique )   bigaragara ko bahura  nâ€™ibibazo  bigendanye no kutamenya uburenganzira bwabo (  uburenganzira bwa muntu ) bityo bigatuma kenshi bahura ningorane  zâ€™ihohoterwa . \r\n                                                                                             Madamu Perezida, mu buryo bwo gukemura ibibazo byâ€™abagenerwa bikorwa  mu kazi kacu  kaburi munsi, twasanze   bahawe  amahugurwa  arebana : \r\n1.	Itegeko rigenga imikoreshereze yâ€™ubutaka mu Rwanda\r\n2.	Itegeko ryerekeye imicungire yâ€™umutungo wâ€™abashyingiranywe , impano nâ€™izungura\r\n3.	Itegeko rihana ihohoterwa irya ari ryose rishingiye ku gitsina\r\n4.	Uburenganzira bwâ€™umwana mu mategeko yâ€™u Rwanda no mu Masezerano Mpuzamahanga.\r\n5.	Uburenganzira bwa Muntu na\r\nngorane duhura nazo  mu gukemura ibibazo byâ€™abagenerwa bikorwa  , cyane cyane  nko muri progarame tugira    yâ€™isana mitima  ( sociotherapy ) , aho  abantu tubafasha  gukemurana ibibazo ( MVURA NKUVURE ( Sociotherapy )  ),  ariko baka bafite  ubumenyi buke mu mu mategeko  yâ€™imikoreshereze  yâ€™ubutaka, imicungire yâ€™imitungo wâ€™abashakanye  , impano nâ€™izungura;  ihohoterwa rishingiye ku gitsina. Ku bwiyo  mpamvu  , nâ€™ubwo bahanwa  ubufasha , ibibazo ntibikemuka neza  kubera kubura  ubwo bumenyi, ibyo bigatuma  ibibazo bitarangira neza mu miryango  naho batuye   .  Mu  urubyiruko nâ€™abasigajwe inyuma nâ€™amateka   nabo dufasha (Kwinjiza abasigajwe inyuma nâ€™amateka mwâ€™iterambere  ( Integration sociale et economique )   bigaragara ko bahura  nâ€™ibibazo  bigendanye no kutamenya uburenganzira bwabo (  uburenganzira bwa muntu ) bityo bigatuma kenshi bahura ningorane  zâ€™ihohoterwa . \r\n                                                                                             Madamu Perezida, mu buryo bwo gukemura ibibazo byâ€™abagenerwa bikorwa  mu kazi kacu  kaburi munsi, twasanze   bahawe  amahugurwa  arebana : \r\n1.	Itegeko rigenga imikoreshereze yâ€™ubutaka mu Rwanda\r\n2.	Itegeko ryerekeye imicungire yâ€™umutungo wâ€™abashyingiranywe , impano nâ€™izungura\r\n3.	Itegeko rihana ihohoterwa irya ari ryose rishingiye ku gitsina\r\n4.	Uburenganzira bwâ€™umwana mu mategeko yâ€™u Rwanda no mu Masezerano Mpuzamahanga.\r\n5.	Uburenganzira bwa Muntu na\r\n', 'ngorane duhura nazo  mu gukemura ibibazo byâ€™abagenerwa bikorwa  , cyane cyane  nko muri progarame tugira    yâ€™isana mitima  ( sociotherapy ) , aho  abantu tubafasha  gukemurana ibibazo ( MVURA NKUVURE ( Sociotherapy )  ),  ariko baka bafite  ubumenyi buke mu mu mategeko  yâ€™imikoreshereze  yâ€™ubutaka, imicungire yâ€™imitungo wâ€™abashakanye  , impano nâ€™izungura;  ihohoterwa rishingiye ku gitsina. Ku bwiyo  mpamvu  , nâ€™ubwo bahanwa  ubufasha , ibibazo ntibikemuka neza  kubera kubura  ubwo bumenyi, ibyo bigatuma  ibibazo bitarangira neza mu miryango  naho batuye   .  Mu  urubyiruko nâ€™abasigajwe inyuma nâ€™amateka   nabo dufasha (Kwinjiza abasigajwe inyuma nâ€™amateka mwâ€™iterambere  ( Integration sociale et economique )   bigaragara ko bahura  nâ€™ibibazo  bigendanye no kutamenya uburenganzira bwabo (  uburenganzira bwa muntu ) bityo bigatuma kenshi bahura ningorane  zâ€™ihohoterwa . \r\n                                                                                             Madamu Perezida, mu buryo bwo gukemura ibibazo byâ€™abagenerwa bikorwa  mu kazi kacu  kaburi munsi, twasanze   bahawe  amahugurwa  arebana : \r\n1.	Itegeko rigenga imikoreshereze yâ€™ubutaka mu Rwanda\r\n2.	Itegeko ryerekeye imicungire yâ€™umutungo wâ€™abashyingiranywe , impano nâ€™izungura\r\n3.	Itegeko rihana ihohoterwa irya ari ryose rishingiye ku gitsina\r\n4.	Uburenganzira bwâ€™umwana mu mategeko yâ€™u Rwanda no mu Masezerano Mpuzamahanga.\r\n5.	Uburenganzira bwa Muntu na\r\nngorane duhura nazo  mu gukemura ibibazo byâ€™abagenerwa bikorwa  , cyane cyane  nko muri progarame tugira    yâ€™isana mitima  ( sociotherapy ) , aho  abantu tubafasha  gukemurana ibibazo ( MVURA NKUVURE ( Sociotherapy )  ),  ariko baka bafite  ubumenyi buke mu mu mategeko  yâ€™imikoreshereze  yâ€™ubutaka, imicungire yâ€™imitungo wâ€™abashakanye  , impano nâ€™izungura;  ihohoterwa rishingiye ku gitsina. Ku bwiyo  mpamvu  , nâ€™ubwo bahanwa  ubufasha , ibibazo ntibikemuka neza  kubera kubura  ubwo bumenyi, ibyo bigatuma  ibibazo bitarangira neza mu miryango  naho batuye   .  Mu  urubyiruko nâ€™abasigajwe inyuma nâ€™amateka   nabo dufasha (Kwinjiza abasigajwe inyuma nâ€™amateka mwâ€™iterambere  ( Integration sociale et economique )   bigaragara ko bahura  nâ€™ibibazo  bigendanye no kutamenya uburenganzira bwabo (  uburenganzira bwa muntu ) bityo bigatuma kenshi bahura ningorane  zâ€™ihohoterwa . \r\n                                                                                             Madamu Perezida, mu buryo bwo gukemura ibibazo byâ€™abagenerwa bikorwa  mu kazi kacu  kaburi munsi, twasanze   bahawe  amahugurwa  arebana : \r\n1.	Itegeko rigenga imikoreshereze yâ€™ubutaka mu Rwanda\r\n2.	Itegeko ryerekeye imicungire yâ€™umutungo wâ€™abashyingiranywe , impano nâ€™izungura\r\n3.	Itegeko rihana ihohoterwa irya ari ryose rishingiye ku gitsina\r\n4.	Uburenganzira bwâ€™umwana mu mategeko yâ€™u Rwanda no mu Masezerano Mpuzamahanga.\r\n5.	Uburenganzira bwa Muntu na\r\n', 'ngorane duhura nazo  mu gukemura ibibazo byâ€™abagenerwa bikorwa  , cyane cyane  nko muri progarame tugira    yâ€™isana mitima  ( sociotherapy ) , aho  abantu tubafasha  gukemurana ibibazo ( MVURA NKUVURE ( Sociotherapy )  ),  ariko baka bafite  ubumenyi buke mu mu mategeko  yâ€™imikoreshereze  yâ€™ubutaka, imicungire yâ€™imitungo wâ€™abashakanye  , impano nâ€™izungura;  ihohoterwa rishingiye ku gitsina. Ku bwiyo  mpamvu  , nâ€™ubwo bahanwa  ubufasha , ibibazo ntibikemuka neza  kubera kubura  ubwo bumenyi, ibyo bigatuma  ibibazo bitarangira neza mu miryango  naho batuye   .  Mu  urubyiruko nâ€™abasigajwe inyuma nâ€™amateka   nabo dufasha (Kwinjiza abasigajwe inyuma nâ€™amateka mwâ€™iterambere  ( Integration sociale et economique )   bigaragara ko bahura  nâ€™ibibazo  bigendanye no kutamenya uburenganzira bwabo (  uburenganzira bwa muntu ) bityo bigatuma kenshi bahura ningorane  zâ€™ihohoterwa . \r\n                                                                                             Madamu Perezida, mu buryo bwo gukemura ibibazo byâ€™abagenerwa bikorwa  mu kazi kacu  kaburi munsi, twasanze   bahawe  amahugurwa  arebana : \r\n1.	Itegeko rigenga imikoreshereze yâ€™ubutaka mu Rwanda\r\n2.	Itegeko ryerekeye imicungire yâ€™umutungo wâ€™abashyingiranywe , impano nâ€™izungura\r\n3.	Itegeko rihana ihohoterwa irya ari ryose rishingiye ku gitsina\r\n4.	Uburenganzira bwâ€™umwana mu mategeko yâ€™u Rwanda no mu Masezerano Mpuzamahanga.\r\n5.	Uburenganzira bwa Muntu na\r\nngorane duhura nazo  mu gukemura ibibazo byâ€™abagenerwa bikorwa  , cyane cyane  nko muri progarame tugira    yâ€™isana mitima  ( sociotherapy ) , aho  abantu tubafasha  gukemurana ibibazo ( MVURA NKUVURE ( Sociotherapy )  ),  ariko baka bafite  ubumenyi buke mu mu mategeko  yâ€™imikoreshereze  yâ€™ubutaka, imicungire yâ€™imitungo wâ€™abashakanye  , impano nâ€™izungura;  ihohoterwa rishingiye ku gitsina. Ku bwiyo  mpamvu  , nâ€™ubwo bahanwa  ubufasha , ibibazo ntibikemuka neza  kubera kubura  ubwo bumenyi, ibyo bigatuma  ibibazo bitarangira neza mu miryango  naho batuye   .  Mu  urubyiruko nâ€™abasigajwe inyuma nâ€™amateka   nabo dufasha (Kwinjiza abasigajwe inyuma nâ€™amateka mwâ€™iterambere  ( Integration sociale et economique )   bigaragara ko bahura  nâ€™ibibazo  bigendanye no kutamenya uburenganzira bwabo (  uburenganzira bwa muntu ) bityo bigatuma kenshi bahura ningorane  zâ€™ihohoterwa . \r\n                                                                                             Madamu Perezida, mu buryo bwo gukemura ibibazo byâ€™abagenerwa bikorwa  mu kazi kacu  kaburi munsi, twasanze   bahawe  amahugurwa  arebana : \r\n1.	Itegeko rigenga imikoreshereze yâ€™ubutaka mu Rwanda\r\n2.	Itegeko ryerekeye imicungire yâ€™umutungo wâ€™abashyingiranywe , impano nâ€™izungura\r\n3.	Itegeko rihana ihohoterwa irya ari ryose rishingiye ku gitsina\r\n4.	Uburenganzira bwâ€™umwana mu mategeko yâ€™u Rwanda no mu Masezerano Mpuzamahanga.\r\n5.	Uburenganzira bwa Muntu na\r\n', 'ngorane duhura nazo  mu gukemura ibibazo byâ€™abagenerwa bikorwa  , cyane cyane  nko muri progarame tugira    yâ€™isana mitima  ( sociotherapy ) , aho  abantu tubafasha  gukemurana ibibazo ( MVURA NKUVURE ( Sociotherapy )  ),  ariko baka bafite  ubumenyi buke mu mu mategeko  yâ€™imikoreshereze  yâ€™ubutaka, imicungire yâ€™imitungo wâ€™abashakanye  , impano nâ€™izungura;  ihohoterwa rishingiye ku gitsina. Ku bwiyo  mpamvu  , nâ€™ubwo bahanwa  ubufasha , ibibazo ntibikemuka neza  kubera kubura  ubwo bumenyi, ibyo bigatuma  ibibazo bitarangira neza mu miryango  naho batuye   .  Mu  urubyiruko nâ€™abasigajwe inyuma nâ€™amateka   nabo dufasha (Kwinjiza abasigajwe inyuma nâ€™amateka mwâ€™iterambere  ( Integration sociale et economique )   bigaragara ko bahura  nâ€™ibibazo  bigendanye no kutamenya uburenganzira bwabo (  uburenganzira bwa muntu ) bityo bigatuma kenshi bahura ningorane  zâ€™ihohoterwa . \r\n                                                                                             Madamu Perezida, mu buryo bwo gukemura ibibazo byâ€™abagenerwa bikorwa  mu kazi kacu  kaburi munsi, twasanze   bahawe  amahugurwa  arebana : \r\n1.	Itegeko rigenga imikoreshereze yâ€™ubutaka mu Rwanda\r\n2.	Itegeko ryerekeye imicungire yâ€™umutungo wâ€™abashyingiranywe , impano nâ€™izungura\r\n3.	Itegeko rihana ihohoterwa irya ari ryose rishingiye ku gitsina\r\n4.	Uburenganzira bwâ€™umwana mu mategeko yâ€™u Rwanda no mu Masezerano Mpuzamahanga.\r\n5.	Uburenganzira bwa Muntu na\r\nngorane duhura nazo  mu gukemura ibibazo byâ€™abagenerwa bikorwa  , cyane cyane  nko muri progarame tugira    yâ€™isana mitima  ( sociotherapy ) , aho  abantu tubafasha  gukemurana ibibazo ( MVURA NKUVURE ( Sociotherapy )  ),  ariko baka bafite  ubumenyi buke mu mu mategeko  yâ€™imikoreshereze  yâ€™ubutaka, imicungire yâ€™imitungo wâ€™abashakanye  , impano nâ€™izungura;  ihohoterwa rishingiye ku gitsina. Ku bwiyo  mpamvu  , nâ€™ubwo bahanwa  ubufasha , ibibazo ntibikemuka neza  kubera kubura  ubwo bumenyi, ibyo bigatuma  ibibazo bitarangira neza mu miryango  naho batuye   .  Mu  urubyiruko nâ€™abasigajwe inyuma nâ€™amateka   nabo dufasha (Kwinjiza abasigajwe inyuma nâ€™amateka mwâ€™iterambere  ( Integration sociale et economique )   bigaragara ko bahura  nâ€™ibibazo  bigendanye no kutamenya uburenganzira bwabo (  uburenganzira bwa muntu ) bityo bigatuma kenshi bahura ningorane  zâ€™ihohoterwa . \r\n                                                                                             Madamu Perezida, mu buryo bwo gukemura ibibazo byâ€™abagenerwa bikorwa  mu kazi kacu  kaburi munsi, twasanze   bahawe  amahugurwa  arebana : \r\n1.	Itegeko rigenga imikoreshereze yâ€™ubutaka mu Rwanda\r\n2.	Itegeko ryerekeye imicungire yâ€™umutungo wâ€™abashyingiranywe , impano nâ€™izungura\r\n3.	Itegeko rihana ihohoterwa irya ari ryose rishingiye ku gitsina\r\n4.	Uburenganzira bwâ€™umwana mu mategeko yâ€™u Rwanda no mu Masezerano Mpuzamahanga.\r\n5.	Uburenganzira bwa Muntu na\r\n', 'izina', 'icyo ashinzwe', 'ngorane duhura nazo  mu gukemura ibibazo byâ€™abagenerwa bikorwa  , cyane cyane  nko muri progarame tugira    yâ€™isana mitima  ( sociotherapy ) , aho  abantu tubafasha  gukemurana ibibazo ( MVURA NKUVURE ( Sociotherapy )  ),  ariko baka bafite  ubumenyi buke mu mu mategeko  yâ€™imikoreshereze  yâ€™ubutaka, imicungire yâ€™imitungo wâ€™abashakanye  , impano nâ€™izungura;  ihohoterwa rishingiye ku gitsina. Ku bwiyo  mpamvu  , nâ€™ubwo bahanwa  ubufasha , ibibazo ntibikemuka neza  kubera kubura  ubwo bumenyi, ibyo bigatuma  ibibazo bitarangira neza mu miryango  naho batuye   .  Mu  urubyiruko nâ€™abasigajwe inyuma nâ€™amateka   nabo dufasha (Kwinjiza abasigajwe inyuma nâ€™amateka mwâ€™iterambere  ( Integration sociale et economique )   bigaragara ko bahura  nâ€™ibibazo  bigendanye no kutamenya uburenganzira bwabo (  uburenganzira bwa muntu ) bityo bigatuma kenshi bahura ningorane  zâ€™ihohoterwa . \r\n                                                                                             Madamu Perezida, mu buryo bwo gukemura ibibazo byâ€™abagenerwa bikorwa  mu kazi kacu  kaburi munsi, twasanze   bahawe  amahugurwa  arebana : \r\n1.	Itegeko rigenga imikoreshereze yâ€™ubutaka mu Rwanda\r\n2.	Itegeko ryerekeye imicungire yâ€™umutungo wâ€™abashyingiranywe , impano nâ€™izungura\r\n3.	Itegeko rihana ihohoterwa irya ari ryose rishingiye ku gitsina\r\n4.	Uburenganzira bwâ€™umwana mu mategeko yâ€™u Rwanda no mu Masezerano Mpuzamahanga.\r\n5.	Uburenganzira bwa Muntu na\r\nngorane duhura nazo  mu gukemura ibibazo byâ€™abagenerwa bikorwa  , cyane cyane  nko muri progarame tugira    yâ€™isana mitima  ( sociotherapy ) , aho  abantu tubafasha  gukemurana ibibazo ( MVURA NKUVURE ( Sociotherapy )  ),  ariko baka bafite  ubumenyi buke mu mu mategeko  yâ€™imikoreshereze  yâ€™ubutaka, imicungire yâ€™imitungo wâ€™abashakanye  , impano nâ€™izungura;  ihohoterwa rishingiye ku gitsina. Ku bwiyo  mpamvu  , nâ€™ubwo bahanwa  ubufasha , ibibazo ntibikemuka neza  kubera kubura  ubwo bumenyi, ibyo bigatuma  ibibazo bitarangira neza mu miryango  naho batuye   .  Mu  urubyiruko nâ€™abasigajwe inyuma nâ€™amateka   nabo dufasha (Kwinjiza abasigajwe inyuma nâ€™amateka mwâ€™iterambere  ( Integration sociale et economique )   bigaragara ko bahura  nâ€™ibibazo  bigendanye no kutamenya uburenganzira bwabo (  uburenganzira bwa muntu ) bityo bigatuma kenshi bahura ningorane  zâ€™ihohoterwa . \r\n                                                                                             Madamu Perezida, mu buryo bwo gukemura ibibazo byâ€™abagenerwa bikorwa  mu kazi kacu  kaburi munsi, twasanze   bahawe  amahugurwa  arebana : \r\n1.	Itegeko rigenga imikoreshereze yâ€™ubutaka mu Rwanda\r\n2.	Itegeko ryerekeye imicungire yâ€™umutungo wâ€™abashyingiranywe , impano nâ€™izungura\r\n3.	Itegeko rihana ihohoterwa irya ari ryose rishingiye ku gitsina\r\n4.	Uburenganzira bwâ€™umwana mu mategeko yâ€™u Rwanda no mu Masezerano Mpuzamahanga.\r\n5.	Uburenganzira bwa Muntu na\r\n');

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

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE IF NOT EXISTS `workers` (
  `wid` int(255) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(555) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `distr` varchar(255) NOT NULL,
  `parish` varchar(255) NOT NULL,
  `lochurch` varchar(255) DEFAULT NULL,
  `post` varchar(255) NOT NULL,
  `tel` text NOT NULL,
  `email` text,
  `user` text NOT NULL,
  `pass` text NOT NULL,
  `photo` text,
  PRIMARY KEY (`wid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`wid`, `fname`, `lname`, `gender`, `distr`, `parish`, `lochurch`, `post`, `tel`, `email`, `user`, `pass`, `photo`) VALUES
(1, 'niyigira', 'salomon', 'Male', 'Byumba', 'Huye', 'retertr', 'weqwe', '0782396251', 'niysalomon@gmail.com', 'salo', 'salo', '3c5db5a12c5529d464d80bee47b028d3.jpg'),
(3, 'kananag', 'jclaude', 'Male', 'Byumba', 'Ruhango', 'kagarama', 'umutera', '0786626534', 'dsfdfd@gamil.com', 'king', 'king', 'agafoto.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `localchurch`
--
ALTER TABLE `localchurch`
  ADD CONSTRAINT `localchurch_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `parishs` (`pid`);

--
-- Constraints for table `parishs`
--
ALTER TABLE `parishs`
  ADD CONSTRAINT `parishs_ibfk_1` FOREIGN KEY (`Did`) REFERENCES `districts` (`Did`);
