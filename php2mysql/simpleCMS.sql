-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Nov 16, 2017 at 06:51 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `simpleCMS`
--

-- --------------------------------------------------------

--
-- Table structure for table `Article`
--

CREATE TABLE `Article` (
  `ID_Article` int(11) NOT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Time` datetime DEFAULT NULL,
  `Content` text,
  `ID_Category` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Article`
--

INSERT INTO `Article` (`ID_Article`, `Title`, `Time`, `Content`, `ID_Category`) VALUES
(1, 'How to Fix Secure Connection Error in WordPress', '2017-11-02 00:00:00', 'Are you seeing Unable to establish secure connection error in WordPress? It is a common WordPress error and usually occurs when you are trying to install or update a WordPress plugin or theme from official WordPress.org directory. In this article, we will show you why', 1),
(2, 'How to Remove v=XXXX string from WordPress URLs', '2017-11-09 00:00:00', 'Are you seeing strange v=xxxx string in your WordPress URLs? Recently, one of our readers asked us how to get rid of v=xxxx string from their WordPress URLs. This string is made up of seemingly random letter and numbers added as a parameter to your', 1),
(3, 'How to Properly Add JavaScripts and Styles in WordPress', '2017-11-10 00:00:00', 'Do you want to learn how to properly add JavaScripts and CSS stylesheets in WordPress? Many DIY users often make the mistake of directly calling their scripts and stylesheets in plugins and themes. In this article, we will show you how to properly add JavaScrip', 2),
(4, 'How to Properly Add JavaScripts and Styles in WordPress', '2017-11-10 00:00:00', 'Do you want to learn how to properly add JavaScripts and CSS stylesheets in WordPress? Many DIY users often make the mistake of directly calling their scripts and stylesheets in plugins and themes. In this article, we will show you how to properly add JavaScrip', 2),
(5, 'CMS','2017-01-19 03:14:07', 'This is a story about CMS', 3);

-- --------------------------------------------------------

--
-- Table structure for table `Author`
--

CREATE TABLE `Author` (
  `ID_Author` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Adress` varchar(255) DEFAULT NULL,
  `ZIP` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Author`
--

INSERT INTO `Author` (`ID_Author`, `Name`, `Adress`, `ZIP`) VALUES
(1, 'Bjarne', 'Skovvejen', 8000),
(2, 'Kim', 'Nørregade', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE `Category` (
  `ID_Category` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`ID_Category`, `Name`) VALUES
(1, 'wordpress'),
(2, 'interaction'),
(3, 'communication'),
(4, 'design'),
(5, 'communication'),
(6, 'design');

-- --------------------------------------------------------

--
-- Table structure for table `Comment`
--

CREATE TABLE `Comment` (
  `ID_Comment` int(11) NOT NULL,
  `Content` text,
  `Name` varchar(255) DEFAULT NULL,
  `ID_Article` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Comment`
--

INSERT INTO `Comment` (`ID_Comment`, `Content`, `Name`, `ID_Article`) VALUES
(1, 'Nice article', 'BJSL', 1),
(2, 'Nice article', 'BJSL', 1),
(3, 'Nice article', 'BJSL', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Writes`
--

CREATE TABLE `Writes` (
  `ID_Author` int(11) DEFAULT NULL,
  `ID_Article` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Writes`
--

INSERT INTO `Writes` (`ID_Author`, `ID_Article`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 3),
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ZIPcode`
--

CREATE TABLE `ZIPcode` (
  `ZIP` int(11) NOT NULL DEFAULT '0',
  `City` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ZIPcode`
--

INSERT INTO `ZIPcode` (`ZIP`, `City`) VALUES
(5000, 'Odense C'),
(8000, 'Aarhus C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Article`
--
ALTER TABLE `Article`
  ADD PRIMARY KEY (`ID_Article`),
  ADD KEY `FK` (`ID_Category`);

--
-- Indexes for table `Author`
--
ALTER TABLE `Author`
  ADD PRIMARY KEY (`ID_Author`),
  ADD KEY `FK` (`ZIP`);

--
-- Indexes for table `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`ID_Category`);

--
-- Indexes for table `Comment`
--
ALTER TABLE `Comment`
  ADD PRIMARY KEY (`ID_Comment`),
  ADD KEY `FK` (`ID_Article`);

--
-- Indexes for table `Writes`
--
ALTER TABLE `Writes`
  ADD KEY `FK` (`ID_Author`,`ID_Article`);

--
-- Indexes for table `ZIPcode`
--
ALTER TABLE `ZIPcode`
  ADD PRIMARY KEY (`ZIP`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Article`
--
ALTER TABLE `Article`
  MODIFY `ID_Article` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `Author`
--
ALTER TABLE `Author`
  MODIFY `ID_Author` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Category`
--
ALTER TABLE `Category`
  MODIFY `ID_Category` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `Comment`
--
ALTER TABLE `Comment`
  MODIFY `ID_Comment` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
