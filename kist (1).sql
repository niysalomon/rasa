-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 25, 2018 at 09:15 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kist`
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `level`, `username`, `password`) VALUES
(5, 'Main Admin', 'salo', 'niyo'),
(6, 'Other admin', 'peti', 'peti');

-- --------------------------------------------------------

--
-- Table structure for table `christian`
--

CREATE TABLE IF NOT EXISTS `christian` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
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
  `user` text NOT NULL,
  `pass` text NOT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `christian`
--

INSERT INTO `christian` (`Id`, `firstname`, `lastname`, `gender`, `cell`, `work`, `tel`, `email`, `college`, `department`, `level`, `user`, `pass`, `photo`) VALUES
(1, 'Nshimiyimana', 'eden', 'Male', 'umusingi', 'postrasa', '0781218382', 'yggd@gmail.com', 'cst', 'civel engineering', 3, 'eden', 'asinat', '1515188593786.jpg'),
(2, 'NIYIGIRA     ', 'Salomon     ', ' ', 'wakup     ', 'rasa     ', '0782396251', 'niysalomon@gmail.com     ', ' ', 'computer science     ', 3, 'salo   ', 'salo     ', '216237173.jpg'),
(3, 'Niyigira ', 'simon ', ' ', 'Holy ', 'rasa ', '4444444444', 'niyigirasalomon@gmail.com ', ' ', 'civil eng ', 4, 'sim ', 'sim ', '216237173.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `communication`
--

CREATE TABLE IF NOT EXISTS `communication` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `resume` text NOT NULL,
  `comm` text NOT NULL,
  `dates` text NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `communication`
--

INSERT INTO `communication` (`id`, `resume`, `comm`, `dates`, `name`) VALUES
(1, 'gfhjgfhjgfjugfjgf', 'fjgfjjgfjgfjgfjgfj', '14/08/2017', 'salomon'),
(2, 'jksdgfusdaftasfr', 'aegftrgftrgftrgftrsufhjefr', '14/08/2017', 'ingoma');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `title`, `phone`, `email`) VALUES
(5, 'admin', 782396251, 'niysalomon@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `dfile`
--

CREATE TABLE IF NOT EXISTS `dfile` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `file` text NOT NULL,
  `Name` text NOT NULL,
  `date` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `dfile`
--

INSERT INTO `dfile` (`id`, `file`, `Name`, `date`) VALUES
(1, 'img/CameraZOOM-20161102180344222.jpg', 'exam', '2017-07-18 09:14:06');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `file`, `Name`, `date`) VALUES
(1, 'img/CameraZOOM-20161020103434778.jpg', 'akadoc', '2017-07-18 08:57:09');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `photo`, `Name`, `choir`, `date`) VALUES
(1, 'rasa', 'img/_MG_2372.JPG', '_MG_2372.JPG', 'choir', '0000-00-00 00:00:00'),
(2, 'rasa', 'img/_MG_2366.JPG', '_MG_2366.JPG', 'dean', '0000-00-00 00:00:00'),
(3, 'rasa', 'img/_MG_2377.JPG', '_MG_2377.JPG', 'christians', '0000-00-00 00:00:00'),
(4, 'rasa', 'img/_MG_2399.JPG', '_MG_2399.JPG', 'christians', '0000-00-00 00:00:00'),
(5, 'rasa', 'img/_MG_2615.JPG', '_MG_2615.JPG', 'christians', '0000-00-00 00:00:00'),
(6, 'rasa', 'img/_MG_2410.JPG', '_MG_2410.JPG', 'choir', '0000-00-00 00:00:00'),
(7, 'rasa', 'img/_MG_2364.JPG', '_MG_2364.JPG', 'christians', '0000-00-00 00:00:00'),
(8, 'rasa', 'img/_MG_2392.JPG', '_MG_2392.JPG', 'christians', '0000-00-00 00:00:00'),
(9, 'rasa', 'img/_MG_2404.JPG', '_MG_2404.JPG', 'christians', '0000-00-00 00:00:00'),
(10, 'rasa', 'img/_MG_2407.JPG', '_MG_2407.JPG', 'christians', '0000-00-00 00:00:00'),
(11, 'rasa', 'img/_MG_2416.JPG', '_MG_2416.JPG', 'christians', '0000-00-00 00:00:00'),
(12, 'rasa', 'img/_MG_2618.JPG', '_MG_2618.JPG', 'christians', '0000-00-00 00:00:00');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `Name`, `Email`, `Subject`, `Message`) VALUES
(1, '', '', '', ''),
(2, '', '', '', ''),
(3, '', '', '', ''),
(4, '', '', '', ''),
(5, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `Title` text NOT NULL,
  `Resume` text NOT NULL,
  `Image` text NOT NULL,
  `Name` text NOT NULL,
  `Content` text NOT NULL,
  `date` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `Title`, `Resume`, `Image`, `Name`, `Content`, `date`) VALUES
(1, 'hand over', 'gutanga hand over hagati yabayobozi', 'img/_MG_2372.JPG', '_MG_2372.JPG', 'udsguiguidshfdhs\r\njfhgiodfhgi\r\njfhudfghu\r\njhvifh', '2018-02-22 12:22:31'),
(2, 'guhererekana ', 'guhererekana hagati yabayobozi ba rasa', 'img/_MG_2397.JPG', '_MG_2397.JPG', 'huugdfugduifhdifugdyusfguidysgfyudfg\r\ndhfuufgfigsfuif\r\nkdshfuigfuifguf\r\njdgfudgfuifguf\r\nhjdgfudsgfudigfu', '2018-02-22 12:23:47'),
(3, 'uko handover yabaye', 'byari kwitariki ya 14/10/2017', 'img/_MG_2378.JPG', '_MG_2378.JPG', 'hgfgdsufgdsufgdsu\r\nkdhfiogsdufgsifteiu\r\nfhgiohdgioghg\r\nkdhfiodgsfuds', '2018-02-22 12:27:39'),
(4, 'uko rasa nyarugenge imeze', 'rasa nyarugenge iri gutera imbere', 'img/_MG_2618.JPG', '_MG_2618.JPG', 'kdhfidfiokshfgdggfudjksfygdysfudusgf\r\njkgfdisgfhodfgdusfkgdsfugayujdggyf\r\njugduigfuodfgydgfuifg\r\njdgfudsfgdsufhsfiysdfhds\r\njfgduifgduifdfufgjfuf', '2018-02-22 12:28:49'),
(5, 'dean of student ashima rasa', 'umuyobozi w''abanyeshuri muri kaminuza y''urwnda isahami rya nyarugenge ashimira rasa', 'img/_MG_2366.JPG', '_MG_2366.JPG', 'jkgduifhwejopufheiogufuoeifhgdiufof\r\njgfuigdfojklfhopweguiewuegf\r\nidhfoidgfodslfhoudfjifdfd\r\njdgfdgsfuodfiod', '2018-02-22 12:30:29');

-- --------------------------------------------------------

--
-- Table structure for table `newspics`
--

CREATE TABLE IF NOT EXISTS `newspics` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `photo` text NOT NULL,
  `Name` text NOT NULL,
  `content` text NOT NULL,
  `date` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `newspics`
--

INSERT INTO `newspics` (`id`, `title`, `photo`, `Name`, `content`, `date`) VALUES
(1, ' Inama ya Synode', 'img/Imp4.jpg', 'Imp4.jpg', '', '14/08/2017'),
(2, ' Inama ya Synode', 'img/Imp4.jpg', 'Imp4.jpg', 'abantu bitabiriye inama ya synode', '14/08/2017'),
(6, 'Cathederal St Paul nshya', 'img/Cathedera st Paul.jpg', 'Cathedera st Paul.jpg', 'inyubako', '14/08/2017');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `postall`
--

INSERT INTO `postall` (`id`, `paragraph`, `photo`, `image`, `dates`, `fields`) VALUES
(1, 'Boys and girls brigade in EAR Byumba Diocese\r\nBoys and girls brigade is a Christian disciplined and uniformed group that helps youth to become followers of our lord Jesus Christ with an aim of extending Christians kingdom among the youth, the group helps them to  have a sense of responsibility through self control and find true enrichment in life.\r\nIts mandate is to mould the children into wholesome characters mentally, physically and spiritually. The children are taught how to be independent in other words to see an opportunity and to seize it. They are trained in a military fashion in order to give them the military discipline in carrying out the duties and responsibilities bestowed upon them.\r\nbrigade covering the same age group also aims at promotion of habits of obedience, reverence, discipline, self respect and all that tends towards a true Christian manliness\r\nThe boys and girls brigade through various activities gives the children an opportunity to develop mind, body and spirit in preparation for a life of useful Christian service and witness. This is through their Saturday meetings at the church compound at 3:00pm.\r\nCollectively it tends to shape the children in four aspects namely spiritual, education, social and physical aspects. We strongly believe in yielding young individuals who will be strengthened to face any challenges of their present days', 'gallry (10).JPG', 'img/gallry (10).JPG', '13/07/2017', 'bgbrigade'),
(2, 'Duties and responsabilities of Boys and Girls Brigade\r\ni)    Training\r\nIn order to mould the boys and girls to the levels required, the trainers are initially trained in various aspects of handling of the youth in a military style that invokes discipline.\r\nii)   Promotion of Missionary work\r\nThe young people are also taught in a manner to mould them spiritually through seminars and retreats\r\niv)    Social Economic Requirements\r\nAs the group is trained in a military style it is noted that it would be difficult to include the physically challenged, but plans are underway to see how they can be addressed.\r\nv)   Information Communication Technology\r\nThis is an area that is being addressed as it would be unwise to to be left behind in the current technological advancement', 'DSC_4937.JPG', 'img/DSC_4937.JPG', '13/07/2017', 'bgbrigade'),
(3, 'Mission Beliefs:\r\nWe are the choice for disciplined youth\r\nWe provide fun, meaningful with our changing world. and challenging activities\r\nWe teach, preach Christianity, and live it.\r\nWe are committed to serve the community.\r\nWe are enterprising, in tune\r\nWe engage our stockholders\r\nWe are for promotion of education, relief of poverty, and protection of childrenâ€™s rights.\r\nWe are served and led by the volunteers.', 'DSC_3106.JPG', 'img/DSC_3106.JPG', '13/07/2017', 'bgbrigade'),
(4, 'Food security livestock: 600 beneficiaries received through associations 600 cows and 2000 beneficiaries received 2000 goats, Cows artificial insemination and 52 hectors were prepared where, 308,153 trees for consumable fruit, erosion protection, animals feeding were planted. \r\nIGP(Income Generating Program) and management of associations and cooperatives, 600 people have received agricultural support of different seeds like 18610 kilos of Irish potatoes, 2260 mushroom, cabbage, carrots, and onions;', 'Amashirahamwe  (3).JPG', 'img/Amashirahamwe  (3).JPG', '13/07/2017', 'agriculture'),
(5, 'a lot of areas used to exploit through in agriculture', 'Ubuhinzi  (1).JPG', 'img/Ubuhinzi  (1).JPG', '13/07/2017', 'agriculture'),
(6, 'this is muhura parish', 'Muhura  (1).JPG', 'img/Muhura  (1).JPG', '13/07/2017', 'muhura'),
(7, 'we praise the Lord through in singing', 'DSC07388.JPG', 'img/DSC07388.JPG', '13/07/2017', 'choir'),
(8, 'mvura nkuvure progra', 'Socioterapy.JPG', 'img/Socioterapy.JPG', '13/07/2017', 'sociotherapy'),
(9, 'Elites of Church in Ear Byumba Diocese', '_DSC0179.JPG', 'img/_DSC0179.JPG', '13/07/2017', 'elites'),
(10, 'youth union make different activities', 'gallry (11).jpg', 'img/gallry (11).jpg', '13/07/2017', 'youth'),
(11, 'Ear Byumba Diocese start in 1991', 'hist.JPG', 'img/hist.JPG', '13/07/2017', 'aboutus'),
(12, 'Cathederal Saint Paul Byumba', 'eglise.JPG', 'img/eglise.JPG', '13/07/2017', 'byumba'),
(13, 'this is Muyumbo District', 'Paruwasi Muyumbu.JPG', 'img/Paruwasi Muyumbu.JPG', '13/07/2017', 'muyumbo'),
(14, 'Rukizi Parish in Mukono District', 'Paruwasi Rukizi.JPG', 'img/Paruwasi Rukizi.JPG', '13/07/2017', 'mukono'),
(15, 'Pastor in Rutare District', 'rutare (3).jpg', 'img/rutare (3).jpg', '13/07/2017', 'rutare'),
(16, 'Kigarama is on of This', 'allparish.jpg', 'img/allparish.jpg', '13/07/2017', 'kigarama'),
(17, 'Ngarama is one of this', 'allparish.jpg', 'img/allparish.jpg', '13/07/2017', 'ngarama'),
(18, 'Korozanya programs', 'Korozanya Compassion.JPG', 'img/Korozanya Compassion.JPG', '13/07/2017', 'livestock'),
(19, 'saving groups in Ear Byumba', 'IMG_3860.JPG', 'img/IMG_3860.JPG', '13/07/2017', 'savings'),
(20, 'care to children by feeding them and giving them what they want', 'Caps.PNG', 'img/Caps.PNG', '13/07/2017', 'hannah'),
(21, 'we spread water in different areas', 'amazi.JPG', 'img/amazi.JPG', '13/07/2017', 'health'),
(22, 'this is kibali program that help Diocese in different areas', 'run (1).JPG', 'img/run (1).JPG', '13/07/2017', 'run'),
(23, 'Friend of Byumba that give different helps', 'IMG_0104.JPG', 'img/IMG_0104.JPG', '13/07/2017', 'friends'),
(24, 'Mothers''Union is an anglican female christians organisation that has objectives of making families that depends on christ.\r\nNow Mother''s Union has 3200 members, it works in all 42parishs and 4 sub-parishs that are in Ear Byumba. Mothers''Union has 45 branchs all together. \r\n\r\n\r\nM.U has 5 Objectives which are the following:\r\n1. to get mariage with thier partners and to encourage other families.\r\n2. to care children for getting grown conneted christ\r\n3. increasing unit of christians through in praying,song for God and other activities characterise christianity\r\n4. to protect peoples''behaviours and to fight against any thing that can make families to be chaked, and get developed.\r\n5. To help and support the families that are in riskzones.', 'gallry (23).JPG', 'img/gallry (23).JPG', '14/07/2017', 'mothersunion'),
(25, 'Hannah Ministry, an autonomous organisation within the Anglican diocese of Byumba in Northern Rwanda, wishes to encourage individuals, churches, business groups, grant-making trusts and other specialty organizations to commit to three year sponsorships of child-headed orphan families. The sponsorship will be administered by the UK charity, Friends of Byumba Trust , set up to encourage such humanitarian initiatives within the Byumba area.\r\nSponsorship programs\r\nHannah Ministry has identified and is already providing a modicum of support to about 200 child-led orphan family units in the Byumba area.\r\n12 family units have received sponsorship resulting from spontaneous initiatives from individual foreign donors. In some sense these sponsorships have been a pilot programme, enabling the team to develop and refine the sponsorship proposal which it now wishes to make available to the rest of the families by making a concerted effort to find additional sponsors.', 'hnnah (1).JPG', 'img/hnnah (1).JPG', '18/07/2017', 'hannah'),
(26, 'The Hannah Ministry programmes aim to achieve the following by the provision of practical support:\r\n- Empower the oldest child to take responsibility for his or her brothers and sisters to create a child-led family unit.\r\n- Counseling and personal and group therapy (with other family unit leaders)\r\n- Regular coaching and support in planning for the needs of the unit.\r\n- Provision of vocational training designed to the skills and aptitude of each family leader.\r\n-Provide basic needs to the family unit.\r\n- Basic food needs.\r\n- Clothing.\r\n- Accommodation (often providing a roof, windows and doors on walls built by the children and their neighbours).\r\n- Social insurance to cover sickness and health needs.\r\n- Manpower to create and work on garden plots to grow foodstuffs making a large contribution towards achieving self-sufficiency in food.\r\n- Release the pressure on the family unit of treatment of children infected with HIV/AIDS\r\n- Free provision of nourishing meals in the central Hannah Ministry facility in order to strengthen the body to enable effective drug treatment.\r\n', 'FUV1.jpg', 'img/FUV1.jpg', '18/07/2017', 'hannah'),
(27, 'The sponsorship package, to which Hannah Ministry asks each sponsor to commit is as follows. Sponsorship can either be individual, or as a group, so long as all members of the group commits to it:\r\n\r\n- A pledge of Â£20 per month over three years to be paid by Standing Order into the Friends of Byumba Trust. (The three year pledged commitment is important, so that the recipient family does not feel rejected by frequent changes in stand-in parents)\r\n-  UK tax-paying sponsors are encouraged to make their pledges by Gift Aid. Funds derived from covenant tax recovery received by Friends of Byumba Trust will be used to support the Hannah Ministry team, infrastructure and operating costs in Byumba. All the pledged sums will be used to support the needs of the child-led families. (However, since the precise needs of family units will vary, the actual use of the funds to each family will be at the discretion of the Hannah Ministry staff)\r\n-  Provision by the sponsor of photographs and a brief resume (in the format provided) of the sponsor and its members.\r\n-  Each 6 months, the sponsor will receive an updated photo, together with letter (with translation) from the members of the family unit, together with a short report on progress, issues, challenges from a Hannah Ministry staff member.\r\n- Every year, each sponsor will receive a summary copy of the Hannah Ministry Annual. Report, highlighting issues, progress and financial situation of the ministry as a whole\r\n-  Sponsors are encouraged to correspond and send updated photos as they wish, and the staff undertake to make such material readily available to the children.\r\n- Six months before the end of the three year sponsorship period, Hannah Ministry will supply the sponsor with an assessment of the state of self-sufficiency of the family, together with an assessment of the need for any further sponsorship, and at what level (without any obligation on the sponsor to continue with sponsorship support).\r\n\r\n', 'hannah.jpg', 'img/hannah.jpg', '18/07/2017', 'hannah'),
(28, 'THE ORIGINS OF ORGANISATION.\r\nUWAMARIYA Victoire was born on 26/07/1978, and passed away on 08/05/2015.\r\n\r\nIn her life time she was characterized by the love of God and those that He created:\r\n- She has achieved a lot in the Anglican Church of Rwanda Byumba Diocese , in the community and in the area of evangelism:\r\n- She strived for the development of girls and women for she was even the President of Mothers Union in the Diocese.\r\n- She fought against the Child violence in school and in the families through FVA.\r\n- he helped many orphans and single mothers through HANAH Ministry.\r\n- She worked hard to protect and help the needy people.\r\n- In the area of health she was the chair person of the Board of Byumba Hospital and a chair person of the social commission at Gicumbi District.\r\n- She made a research on the life of the elderly people and on how they can be supported in their last days.\r\nIn Education she started a model school:King Salomon Academy\r\n\r\nGENERAL OBJECTIVES OF  ORGANISATION\r\nIn memory of the late of Victoire Uwamariya, the main objective of this organisation  is to promote the wellbeing of the people need, especially those in situations that they are unable to overcome for themselves.\r\nSPECIFIC OBJECTIVES OF THE ORGANISATION\r\n-To help the children in need through education and other areas of life.\r\n-To help the women in their own and family development.\r\n-To contribute to the fight for the children''s rights.\r\n-To support the nursery Education.\r\n-To care for the needy in general.\r\n   CHARACTERISTICS OF THE ORGANISATION\r\n-The  Uwamariya Victoire Organisation will work in the same way as all other NGOs and Non Profit organizations, it will be governed by the same law that governs these organization.\r\n-The Headquarters of an organisation will be in Gicumbi District and can be transferred to another area or have branches according to the growth of the foundation\r\n- Uwamariya Victoire Organisation is a Christian Organization. \r\n\r\n', 'vicky.JPG', 'img/vicky.JPG', '21/07/2017', 'ouv'),
(29, 'THE MEMBERS OF THE ORGANOSATION.\r\n- Individual people who would like to continue the work of Victoire Uwamariya,\r\n- Associations and Organizations that would like to promote the wellbeing of the people (moral Person)\r\n\r\nVISION OF THE ORGANISATION\r\nThe Vision of this Foundation comes from Victoireâ€™s idea where she wanted to see people equipped holistically.\r\nMISSION OF THE ORGANISATION\r\nThe Mission of this Foundation is to work for the peopleâ€™s development, wellbeing, culture and religious, in order to enable people have people built holistically.\r\n', 'UVF.JPG', 'img/UVF.JPG', '21/07/2017', 'ouv');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `Title`, `Paragraph`, `date`, `Day`) VALUES
(1, '', '', '0000-00-00 00:00:00', ''),
(2, '', '', '0000-00-00 00:00:00', ''),
(3, 'fweert', 'er,date', '2017-08-12 14:18:11', 'Saturday'),
(4, '05hr-06hr  (Buracyeye)', 'RASA members in\r\nkist2, Audy 4', '2018-02-22 12:39:45', 'Monday'),
(5, '12h45-13hhr45 (Amasengesho)', 'Worship team(Camp kgl)', '2018-02-22 12:40:54', 'Monday'),
(6, '05hr-06hr(Buracyeye)', 'RASA members(kist2, Audy 4)', '2018-02-22 16:41:21', 'Tuesday'),
(7, '12h45-13hhr45 (Lunch Hour)', 'RASA members(kist2, Audy 4)', '2018-02-22 16:42:48', 'Tuesday'),
(8, '17hr-18hr00(Choir practice)', 'Call on Jesus(behind kist4)', '2018-02-22 16:43:45', 'Tuesday'),
(9, '05hr-06hr  (Buracyeye)', 'RASA members(kist2, Audy 4)', '2018-02-22 16:44:42', 'Wednesday'),
(10, '12h45-13hhr45 (Amasengesho)', 'intercesors+Rasa members(P307)', '2018-02-22 16:45:29', 'Wednesday'),
(11, '18hr00-19h00(Amasengesho)', 'intercesors+Rasa members(behind kist4)', '2018-02-22 16:46:53', 'Wednesday'),
(12, '21hr00-22h00(Burije)', 'RASA members(RASA Office)', '2018-02-22 16:47:46', 'Wednesday'),
(13, '05hr-06hr  (Buracyeye)', 'RASA members(kist2, Audy 4)', '2018-02-22 16:48:40', 'Thursday'),
(14, '17hr-19hr00(Rehearsals)', 'Call on Jesus(Cathederal)', '2018-02-22 16:49:24', 'Thursday'),
(15, '05hr-06hr(Buracyeye)', 'RASA members(kist2, Audy 4)', '2018-02-22 16:50:19', 'Friday'),
(16, '17h-19h00(Rehearsals)', 'Jackin worship Team(p016)', '2018-02-22 16:51:13', 'Friday'),
(17, '20hr-22h00(Service)', 'RASA members(p016)', '2018-02-22 16:51:57', 'Friday'),
(18, '05hr-06hr  (Buracyeye)', 'RASA members(kist2, Audy 4)', '2018-02-22 16:52:41', 'Saturday'),
(19, '16hr-18hr00(Rehearsals)', 'Call on Jesus(kist2, Audy 4)', '2018-02-22 16:53:28', 'Saturday'),
(20, '18hr00-19h00(Practice)', 'Drama Team(kist2, Audy 4)', '2018-02-22 16:54:19', 'Saturday'),
(21, '19hr-21hr00(Amasengesho)', 'intercesors(Cathederal)', '2018-02-22 16:55:10', 'Saturday'),
(22, '08h00-12hr00(Service)', 'RASA members(kist2, Audy 4)', '2018-02-22 16:55:53', 'Sunday');

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pubs`
--

INSERT INTO `pubs` (`id`, `title`, `image`) VALUES
(2, 'KING SALOMON ACADEMY', 'king.gif'),
(5, 'cdfc byumba', 'centre.gif');

-- --------------------------------------------------------

--
-- Table structure for table `vid`
--

CREATE TABLE IF NOT EXISTS `vid` (
  `description` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `fileextension` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vid`
--

INSERT INTO `vid` (`description`, `filename`, `fileextension`) VALUES
('$description', '$name', '$fileextension');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`Id`, `name`, `categorie`, `year`, `Video_Url`, `icon_url`) VALUES
(1, 'Ibiriho ubu by Healing Worship team (Official Video) 2016', 'choir', 2016, 'img/vids/Ibiriho ubu by Healing Worship team (Official Video) 2016.mp4', 'img/nn.jpg'),
(2, 'Inzira z''Imana by Healing Worship Team(Official Video) 2016', 'choir', 2016, 'img/vids/Inzira z''Imana by Healing Worship Team(Official Video) 2016.mp4', 'img/_MG_2395.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE IF NOT EXISTS `views` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `dates` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=825 ;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`id`, `dates`) VALUES
(1, '17/07/2017'),
(2, '17/07/2017'),
(3, '17/07/2017'),
(4, '17/07/2017'),
(5, '17/07/2017'),
(6, '17/07/2017'),
(7, '17/07/2017'),
(8, '17/07/2017'),
(9, '17/07/2017'),
(10, '17/07/2017'),
(11, '17/07/2017'),
(12, '17/07/2017'),
(13, '17/07/2017'),
(14, '17/07/2017'),
(15, '17/07/2017'),
(16, '17/07/2017'),
(17, '17/07/2017'),
(18, '17/07/2017'),
(19, '17/07/2017'),
(20, '17/07/2017'),
(21, '17/07/2017'),
(22, '17/07/2017'),
(23, '18/07/2017'),
(24, '18/07/2017'),
(25, '18/07/2017'),
(26, '18/07/2017'),
(27, '18/07/2017'),
(28, '18/07/2017'),
(29, '18/07/2017'),
(30, '18/07/2017'),
(31, '18/07/2017'),
(32, '18/07/2017'),
(33, '18/07/2017'),
(34, '18/07/2017'),
(35, '18/07/2017'),
(36, '18/07/2017'),
(37, '18/07/2017'),
(38, '18/07/2017'),
(39, '18/07/2017'),
(40, '18/07/2017'),
(41, '18/07/2017'),
(42, '18/07/2017'),
(43, '18/07/2017'),
(44, '18/07/2017'),
(45, '18/07/2017'),
(46, '18/07/2017'),
(47, '19/07/2017'),
(48, '19/07/2017'),
(49, '19/07/2017'),
(50, '19/07/2017'),
(51, '19/07/2017'),
(52, '19/07/2017'),
(53, '19/07/2017'),
(54, '19/07/2017'),
(55, '19/07/2017'),
(56, '19/07/2017'),
(57, '19/07/2017'),
(58, '19/07/2017'),
(59, '19/07/2017'),
(60, '19/07/2017'),
(61, '19/07/2017'),
(62, '19/07/2017'),
(63, '19/07/2017'),
(64, '19/07/2017'),
(65, '19/07/2017'),
(66, '19/07/2017'),
(67, '19/07/2017'),
(68, '19/07/2017'),
(69, '19/07/2017'),
(70, '19/07/2017'),
(71, '19/07/2017'),
(72, '19/07/2017'),
(73, '19/07/2017'),
(74, '19/07/2017'),
(75, '19/07/2017'),
(76, '19/07/2017'),
(77, '19/07/2017'),
(78, '20/07/2017'),
(79, '20/07/2017'),
(80, '20/07/2017'),
(81, '20/07/2017'),
(82, '20/07/2017'),
(83, '20/07/2017'),
(84, '20/07/2017'),
(85, '20/07/2017'),
(86, '20/07/2017'),
(87, '20/07/2017'),
(88, '20/07/2017'),
(89, '20/07/2017'),
(90, '20/07/2017'),
(91, '20/07/2017'),
(92, '20/07/2017'),
(93, '20/07/2017'),
(94, '20/07/2017'),
(95, '20/07/2017'),
(96, '20/07/2017'),
(97, '20/07/2017'),
(98, '20/07/2017'),
(99, '20/07/2017'),
(100, '20/07/2017'),
(101, '20/07/2017'),
(102, '20/07/2017'),
(103, '21/07/2017'),
(104, '21/07/2017'),
(105, '21/07/2017'),
(106, '21/07/2017'),
(107, '21/07/2017'),
(108, '21/07/2017'),
(109, '21/07/2017'),
(110, '21/07/2017'),
(111, '21/07/2017'),
(112, '21/07/2017'),
(113, '21/07/2017'),
(114, '23/07/2017'),
(115, '23/07/2017'),
(116, '23/07/2017'),
(117, '23/07/2017'),
(118, '23/07/2017'),
(119, '23/07/2017'),
(120, '23/07/2017'),
(121, '23/07/2017'),
(122, '23/07/2017'),
(123, '23/07/2017'),
(124, '23/07/2017'),
(125, '23/07/2017'),
(126, '23/07/2017'),
(127, '23/07/2017'),
(128, '23/07/2017'),
(129, '23/07/2017'),
(130, '23/07/2017'),
(131, '23/07/2017'),
(132, '23/07/2017'),
(133, '24/07/2017'),
(134, '24/07/2017'),
(135, '24/07/2017'),
(136, '24/07/2017'),
(137, '24/07/2017'),
(138, '24/07/2017'),
(139, '24/07/2017'),
(140, '24/07/2017'),
(141, '24/07/2017'),
(142, '24/07/2017'),
(143, '24/07/2017'),
(144, '24/07/2017'),
(145, '24/07/2017'),
(146, '24/07/2017'),
(147, '24/07/2017'),
(148, '24/07/2017'),
(149, '24/07/2017'),
(150, '24/07/2017'),
(151, '24/07/2017'),
(152, '24/07/2017'),
(153, '24/07/2017'),
(154, '24/07/2017'),
(155, '24/07/2017'),
(156, '24/07/2017'),
(157, '24/07/2017'),
(158, '24/07/2017'),
(159, '24/07/2017'),
(160, '24/07/2017'),
(161, '24/07/2017'),
(162, '24/07/2017'),
(163, '24/07/2017'),
(164, '24/07/2017'),
(165, '24/07/2017'),
(166, '24/07/2017'),
(167, '24/07/2017'),
(168, '24/07/2017'),
(169, '24/07/2017'),
(170, '24/07/2017'),
(171, '24/07/2017'),
(172, '24/07/2017'),
(173, '24/07/2017'),
(174, '24/07/2017'),
(175, '24/07/2017'),
(176, '24/07/2017'),
(177, '24/07/2017'),
(178, '24/07/2017'),
(179, '24/07/2017'),
(180, '24/07/2017'),
(181, '24/07/2017'),
(182, '24/07/2017'),
(183, '24/07/2017'),
(184, '24/07/2017'),
(185, '24/07/2017'),
(186, '24/07/2017'),
(187, '24/07/2017'),
(188, '25/07/2017'),
(189, '25/07/2017'),
(190, '25/07/2017'),
(191, '25/07/2017'),
(192, '25/07/2017'),
(193, '25/07/2017'),
(194, '25/07/2017'),
(195, '25/07/2017'),
(196, '25/07/2017'),
(197, '25/07/2017'),
(198, '25/07/2017'),
(199, '26/07/2017'),
(200, '26/07/2017'),
(201, '26/07/2017'),
(202, '26/07/2017'),
(203, '26/07/2017'),
(204, '26/07/2017'),
(205, '26/07/2017'),
(206, '26/07/2017'),
(207, '27/07/2017'),
(208, '27/07/2017'),
(209, '27/07/2017'),
(210, '27/07/2017'),
(211, '27/07/2017'),
(212, '27/07/2017'),
(213, '31/07/2017'),
(214, '31/07/2017'),
(215, '31/07/2017'),
(216, '31/07/2017'),
(217, '31/07/2017'),
(218, '31/07/2017'),
(219, '31/07/2017'),
(220, '31/07/2017'),
(221, '31/07/2017'),
(222, '31/07/2017'),
(223, '31/07/2017'),
(224, '31/07/2017'),
(225, '31/07/2017'),
(226, '31/07/2017'),
(227, '31/07/2017'),
(228, '31/07/2017'),
(229, '31/07/2017'),
(230, '31/07/2017'),
(231, '31/07/2017'),
(232, '31/07/2017'),
(233, '31/07/2017'),
(234, '31/07/2017'),
(235, '31/07/2017'),
(236, '31/07/2017'),
(237, '31/07/2017'),
(238, '31/07/2017'),
(239, '31/07/2017'),
(240, '31/07/2017'),
(241, '31/07/2017'),
(242, '31/07/2017'),
(243, '31/07/2017'),
(244, '31/07/2017'),
(245, '31/07/2017'),
(246, '31/07/2017'),
(247, '31/07/2017'),
(248, '31/07/2017'),
(249, '31/07/2017'),
(250, '31/07/2017'),
(251, '31/07/2017'),
(252, '31/07/2017'),
(253, '31/07/2017'),
(254, '31/07/2017'),
(255, '02/08/2017'),
(256, '02/08/2017'),
(257, '02/08/2017'),
(258, '02/08/2017'),
(259, '02/08/2017'),
(260, '02/08/2017'),
(261, '02/08/2017'),
(262, '02/08/2017'),
(263, '02/08/2017'),
(264, '02/08/2017'),
(265, '02/08/2017'),
(266, '02/08/2017'),
(267, '02/08/2017'),
(268, '02/08/2017'),
(269, '02/08/2017'),
(270, '02/08/2017'),
(271, '02/08/2017'),
(272, '02/08/2017'),
(273, '02/08/2017'),
(274, '02/08/2017'),
(275, '02/08/2017'),
(276, '02/08/2017'),
(277, '02/08/2017'),
(278, '03/08/2017'),
(279, '03/08/2017'),
(280, '04/08/2017'),
(281, '04/08/2017'),
(282, '04/08/2017'),
(283, '04/08/2017'),
(284, '04/08/2017'),
(285, '04/08/2017'),
(286, '04/08/2017'),
(287, '04/08/2017'),
(288, '04/08/2017'),
(289, '04/08/2017'),
(290, '04/08/2017'),
(291, '04/08/2017'),
(292, '04/08/2017'),
(293, '04/08/2017'),
(294, '04/08/2017'),
(295, '04/08/2017'),
(296, '04/08/2017'),
(297, '04/08/2017'),
(298, '04/08/2017'),
(299, '04/08/2017'),
(300, '04/08/2017'),
(301, '04/08/2017'),
(302, '04/08/2017'),
(303, '04/08/2017'),
(304, '04/08/2017'),
(305, '04/08/2017'),
(306, '04/08/2017'),
(307, '04/08/2017'),
(308, '04/08/2017'),
(309, '04/08/2017'),
(310, '05/08/2017'),
(311, '05/08/2017'),
(312, '05/08/2017'),
(313, '05/08/2017'),
(314, '05/08/2017'),
(315, '05/08/2017'),
(316, '05/08/2017'),
(317, '05/08/2017'),
(318, '05/08/2017'),
(319, '05/08/2017'),
(320, '05/08/2017'),
(321, '05/08/2017'),
(322, '05/08/2017'),
(323, '05/08/2017'),
(324, '05/08/2017'),
(325, '05/08/2017'),
(326, '07/08/2017'),
(327, '07/08/2017'),
(328, '07/08/2017'),
(329, '07/08/2017'),
(330, '07/08/2017'),
(331, '07/08/2017'),
(332, '07/08/2017'),
(333, '07/08/2017'),
(334, '07/08/2017'),
(335, '07/08/2017'),
(336, '07/08/2017'),
(337, '07/08/2017'),
(338, '07/08/2017'),
(339, '07/08/2017'),
(340, '07/08/2017'),
(341, '07/08/2017'),
(342, '07/08/2017'),
(343, '07/08/2017'),
(344, '07/08/2017'),
(345, '07/08/2017'),
(346, '07/08/2017'),
(347, '07/08/2017'),
(348, '07/08/2017'),
(349, '07/08/2017'),
(350, '07/08/2017'),
(351, '07/08/2017'),
(352, '07/08/2017'),
(353, '07/08/2017'),
(354, '07/08/2017'),
(355, '07/08/2017'),
(356, '07/08/2017'),
(357, '07/08/2017'),
(358, '07/08/2017'),
(359, '08/08/2017'),
(360, '08/08/2017'),
(361, '08/08/2017'),
(362, '08/08/2017'),
(363, '08/08/2017'),
(364, '08/08/2017'),
(365, '08/08/2017'),
(366, '08/08/2017'),
(367, '08/08/2017'),
(368, '08/08/2017'),
(369, '08/08/2017'),
(370, '08/08/2017'),
(371, '08/08/2017'),
(372, '08/08/2017'),
(373, '08/08/2017'),
(374, '09/08/2017'),
(375, '09/08/2017'),
(376, '09/08/2017'),
(377, '09/08/2017'),
(378, '09/08/2017'),
(379, '09/08/2017'),
(380, '09/08/2017'),
(381, '09/08/2017'),
(382, '09/08/2017'),
(383, '10/08/2017'),
(384, '10/08/2017'),
(385, '10/08/2017'),
(386, '10/08/2017'),
(387, '10/08/2017'),
(388, '10/08/2017'),
(389, '10/08/2017'),
(390, '10/08/2017'),
(391, '10/08/2017'),
(392, '10/08/2017'),
(393, '11/08/2017'),
(394, '11/08/2017'),
(395, '11/08/2017'),
(396, '11/08/2017'),
(397, '11/08/2017'),
(398, '11/08/2017'),
(399, '11/08/2017'),
(400, '11/08/2017'),
(401, '11/08/2017'),
(402, '11/08/2017'),
(403, '11/08/2017'),
(404, '11/08/2017'),
(405, '11/08/2017'),
(406, '11/08/2017'),
(407, '11/08/2017'),
(408, '11/08/2017'),
(409, '11/08/2017'),
(410, '11/08/2017'),
(411, '11/08/2017'),
(412, '11/08/2017'),
(413, '11/08/2017'),
(414, '11/08/2017'),
(415, '11/08/2017'),
(416, '11/08/2017'),
(417, '11/08/2017'),
(418, '11/08/2017'),
(419, '11/08/2017'),
(420, '11/08/2017'),
(421, '11/08/2017'),
(422, '12/08/2017'),
(423, '12/08/2017'),
(424, '12/08/2017'),
(425, '12/08/2017'),
(426, '12/08/2017'),
(427, '12/08/2017'),
(428, '12/08/2017'),
(429, '12/08/2017'),
(430, '12/08/2017'),
(431, '12/08/2017'),
(432, '14/08/2017'),
(433, '14/08/2017'),
(434, '14/08/2017'),
(435, '14/08/2017'),
(436, '14/08/2017'),
(437, '14/08/2017'),
(438, '14/08/2017'),
(439, '14/08/2017'),
(440, '14/08/2017'),
(441, '14/08/2017'),
(442, '14/08/2017'),
(443, '14/08/2017'),
(444, '14/08/2017'),
(445, '14/08/2017'),
(446, '14/08/2017'),
(447, '14/08/2017'),
(448, '14/08/2017'),
(449, '14/08/2017'),
(450, '14/08/2017'),
(451, '14/08/2017'),
(452, '14/08/2017'),
(453, '14/08/2017'),
(454, '14/08/2017'),
(455, '14/08/2017'),
(456, '15/08/2017'),
(457, '15/08/2017'),
(458, '15/08/2017'),
(459, '16/08/2017'),
(460, '16/08/2017'),
(461, '16/08/2017'),
(462, '19/08/2017'),
(463, '19/08/2017'),
(464, '19/08/2017'),
(465, '21/08/2017'),
(466, '21/08/2017'),
(467, '21/08/2017'),
(468, '22/08/2017'),
(469, '22/08/2017'),
(470, '22/08/2017'),
(471, '22/08/2017'),
(472, '22/08/2017'),
(473, '22/08/2017'),
(474, '22/08/2017'),
(475, '22/08/2017'),
(476, '22/08/2017'),
(477, '22/08/2017'),
(478, '22/08/2017'),
(479, '22/08/2017'),
(480, '22/08/2017'),
(481, '22/08/2017'),
(482, '22/08/2017'),
(483, '22/08/2017'),
(484, '22/08/2017'),
(485, '22/08/2017'),
(486, '22/08/2017'),
(487, '22/08/2017'),
(488, '22/08/2017'),
(489, '22/08/2017'),
(490, '22/08/2017'),
(491, '22/08/2017'),
(492, '22/08/2017'),
(493, '23/08/2017'),
(494, '24/08/2017'),
(495, '24/08/2017'),
(496, '24/08/2017'),
(497, '24/08/2017'),
(498, '24/08/2017'),
(499, '24/08/2017'),
(500, '24/08/2017'),
(501, '24/08/2017'),
(502, '25/08/2017'),
(503, '25/08/2017'),
(504, '25/08/2017'),
(505, '25/08/2017'),
(506, '25/08/2017'),
(507, '25/08/2017'),
(508, '25/08/2017'),
(509, '25/08/2017'),
(510, '25/08/2017'),
(511, '25/08/2017'),
(512, '25/08/2017'),
(513, '25/08/2017'),
(514, '25/08/2017'),
(515, '25/08/2017'),
(516, '25/08/2017'),
(517, '25/08/2017'),
(518, '25/08/2017'),
(519, '25/08/2017'),
(520, '25/08/2017'),
(521, '25/08/2017'),
(522, '25/08/2017'),
(523, '25/08/2017'),
(524, '25/08/2017'),
(525, '28/08/2017'),
(526, '28/08/2017'),
(527, '28/08/2017'),
(528, '28/08/2017'),
(529, '28/08/2017'),
(530, '28/08/2017'),
(531, '28/08/2017'),
(532, '28/08/2017'),
(533, '29/08/2017'),
(534, '29/08/2017'),
(535, '29/08/2017'),
(536, '29/08/2017'),
(537, '29/08/2017'),
(538, '29/08/2017'),
(539, '29/08/2017'),
(540, '29/08/2017'),
(541, '29/08/2017'),
(542, '29/08/2017'),
(543, '30/08/2017'),
(544, '30/08/2017'),
(545, '30/08/2017'),
(546, '30/08/2017'),
(547, '31/08/2017'),
(548, '31/08/2017'),
(549, '31/08/2017'),
(550, '02/09/2017'),
(551, '02/09/2017'),
(552, '02/09/2017'),
(553, '02/09/2017'),
(554, '02/09/2017'),
(555, '02/09/2017'),
(556, '02/09/2017'),
(557, '02/09/2017'),
(558, '02/09/2017'),
(559, '02/09/2017'),
(560, '02/09/2017'),
(561, '02/09/2017'),
(562, '02/09/2017'),
(563, '02/09/2017'),
(564, '02/09/2017'),
(565, '02/09/2017'),
(566, '02/09/2017'),
(567, '02/09/2017'),
(568, '02/09/2017'),
(569, '02/09/2017'),
(570, '02/09/2017'),
(571, '02/09/2017'),
(572, '02/09/2017'),
(573, '02/09/2017'),
(574, '02/09/2017'),
(575, '02/09/2017'),
(576, '02/09/2017'),
(577, '02/09/2017'),
(578, '02/09/2017'),
(579, '02/09/2017'),
(580, '02/09/2017'),
(581, '02/09/2017'),
(582, '02/09/2017'),
(583, '02/09/2017'),
(584, '02/09/2017'),
(585, '02/09/2017'),
(586, '02/09/2017'),
(587, '02/09/2017'),
(588, '02/09/2017'),
(589, '02/09/2017'),
(590, '02/09/2017'),
(591, '02/09/2017'),
(592, '02/09/2017'),
(593, '02/09/2017'),
(594, '02/09/2017'),
(595, '02/09/2017'),
(596, '02/09/2017'),
(597, '02/09/2017'),
(598, '02/09/2017'),
(599, '02/09/2017'),
(600, '02/09/2017'),
(601, '02/09/2017'),
(602, '02/09/2017'),
(603, '02/09/2017'),
(604, '02/09/2017'),
(605, '02/09/2017'),
(606, '04/09/2017'),
(607, '04/09/2017'),
(608, '04/09/2017'),
(609, '04/09/2017'),
(610, '04/09/2017'),
(611, '04/09/2017'),
(612, '04/09/2017'),
(613, '04/09/2017'),
(614, '04/09/2017'),
(615, '04/09/2017'),
(616, '04/09/2017'),
(617, '04/09/2017'),
(618, '04/09/2017'),
(619, '04/09/2017'),
(620, '04/09/2017'),
(621, '04/09/2017'),
(622, '04/09/2017'),
(623, '04/09/2017'),
(624, '04/09/2017'),
(625, '04/09/2017'),
(626, '04/09/2017'),
(627, '04/09/2017'),
(628, '04/09/2017'),
(629, '04/09/2017'),
(630, '04/09/2017'),
(631, '04/09/2017'),
(632, '04/09/2017'),
(633, '04/09/2017'),
(634, '04/09/2017'),
(635, '04/09/2017'),
(636, '04/09/2017'),
(637, '04/09/2017'),
(638, '04/09/2017'),
(639, '04/09/2017'),
(640, '04/09/2017'),
(641, '04/09/2017'),
(642, '04/09/2017'),
(643, '04/09/2017'),
(644, '04/09/2017'),
(645, '04/09/2017'),
(646, '04/09/2017'),
(647, '05/09/2017'),
(648, '05/09/2017'),
(649, '05/09/2017'),
(650, '05/09/2017'),
(651, '05/09/2017'),
(652, '05/09/2017'),
(653, '05/09/2017'),
(654, '05/09/2017'),
(655, '05/09/2017'),
(656, '05/09/2017'),
(657, '05/09/2017'),
(658, '05/09/2017'),
(659, '05/09/2017'),
(660, '05/09/2017'),
(661, '05/09/2017'),
(662, '05/09/2017'),
(663, '05/09/2017'),
(664, '05/09/2017'),
(665, '05/09/2017'),
(666, '05/09/2017'),
(667, '05/09/2017'),
(668, '05/09/2017'),
(669, '05/09/2017'),
(670, '05/09/2017'),
(671, '05/09/2017'),
(672, '05/09/2017'),
(673, '05/09/2017'),
(674, '05/09/2017'),
(675, '05/09/2017'),
(676, '05/09/2017'),
(677, '05/09/2017'),
(678, '05/09/2017'),
(679, '05/09/2017'),
(680, '05/09/2017'),
(681, '05/09/2017'),
(682, '05/09/2017'),
(683, '05/09/2017'),
(684, '05/09/2017'),
(685, '05/09/2017'),
(686, '05/09/2017'),
(687, '05/09/2017'),
(688, '05/09/2017'),
(689, '05/09/2017'),
(690, '05/09/2017'),
(691, '05/09/2017'),
(692, '05/09/2017'),
(693, '05/09/2017'),
(694, '05/09/2017'),
(695, '05/09/2017'),
(696, '05/09/2017'),
(697, '05/09/2017'),
(698, '05/09/2017'),
(699, '05/09/2017'),
(700, '05/09/2017'),
(701, '05/09/2017'),
(702, '05/09/2017'),
(703, '05/09/2017'),
(704, '05/09/2017'),
(705, '05/09/2017'),
(706, '05/09/2017'),
(707, '05/09/2017'),
(708, '06/09/2017'),
(709, '06/09/2017'),
(710, '06/09/2017'),
(711, '06/09/2017'),
(712, '06/09/2017'),
(713, '06/09/2017'),
(714, '06/09/2017'),
(715, '06/09/2017'),
(716, '06/09/2017'),
(717, '06/09/2017'),
(718, '06/09/2017'),
(719, '06/09/2017'),
(720, '06/09/2017'),
(721, '06/09/2017'),
(722, '06/09/2017'),
(723, '06/09/2017'),
(724, '06/09/2017'),
(725, '06/09/2017'),
(726, '06/09/2017'),
(727, '06/09/2017'),
(728, '06/09/2017'),
(729, '06/09/2017'),
(730, '06/09/2017'),
(731, '06/09/2017'),
(732, '06/09/2017'),
(733, '06/09/2017'),
(734, '06/09/2017'),
(735, '06/09/2017'),
(736, '06/09/2017'),
(737, '06/09/2017'),
(738, '06/09/2017'),
(739, '06/09/2017'),
(740, '06/09/2017'),
(741, '06/09/2017'),
(742, '06/09/2017'),
(743, '06/09/2017'),
(744, '06/09/2017'),
(745, '06/09/2017'),
(746, '06/09/2017'),
(747, '06/09/2017'),
(748, '06/09/2017'),
(749, '06/09/2017'),
(750, '06/09/2017'),
(751, '06/09/2017'),
(752, '06/09/2017'),
(753, '06/09/2017'),
(754, '06/09/2017'),
(755, '06/09/2017'),
(756, '06/09/2017'),
(757, '07/09/2017'),
(758, '07/09/2017'),
(759, '07/09/2017'),
(760, '07/09/2017'),
(761, '07/09/2017'),
(762, '07/09/2017'),
(763, '07/09/2017'),
(764, '07/09/2017'),
(765, '07/09/2017'),
(766, '07/09/2017'),
(767, '07/09/2017'),
(768, '07/09/2017'),
(769, '07/09/2017'),
(770, '07/09/2017'),
(771, '07/09/2017'),
(772, '07/09/2017'),
(773, '07/09/2017'),
(774, '07/09/2017'),
(775, '07/09/2017'),
(776, '07/09/2017'),
(777, '07/09/2017'),
(778, '07/09/2017'),
(779, '07/09/2017'),
(780, '07/09/2017'),
(781, '07/09/2017'),
(782, '07/09/2017'),
(783, '07/09/2017'),
(784, '07/09/2017'),
(785, '07/09/2017'),
(786, '07/09/2017'),
(787, '07/09/2017'),
(788, '07/09/2017'),
(789, '07/09/2017'),
(790, '07/09/2017'),
(791, '07/09/2017'),
(792, '07/09/2017'),
(793, '07/09/2017'),
(794, '07/09/2017'),
(795, '07/09/2017'),
(796, '08/09/2017'),
(797, '08/09/2017'),
(798, '08/09/2017'),
(799, '08/09/2017'),
(800, '08/09/2017'),
(801, '08/09/2017'),
(802, '08/09/2017'),
(803, '08/09/2017'),
(804, '09/09/2017'),
(805, '09/09/2017'),
(806, '09/09/2017'),
(807, '09/09/2017'),
(808, '09/09/2017'),
(809, '09/09/2017'),
(810, '09/09/2017'),
(811, '11/09/2017'),
(812, '11/09/2017'),
(813, '15/09/2017'),
(814, '15/09/2017'),
(815, '30/09/2017'),
(816, '04/10/2017'),
(817, '04/10/2017'),
(818, '04/10/2017'),
(819, '04/10/2017'),
(820, '06/10/2017'),
(821, '06/10/2017'),
(822, '09/10/2017'),
(823, '09/10/2017'),
(824, '10/10/2017');
