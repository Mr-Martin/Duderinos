-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Värd: localhost
-- Skapad: 10 jan 2013 kl 13:51
-- Serverversion: 5.5.24-log
-- PHP-version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `starwars_db`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `categoryID` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` int(11) NOT NULL,
  `categoryimage` varchar(100) NOT NULL,
  PRIMARY KEY (`categoryID`),
  KEY `imageID` (`categoryimage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellstruktur `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `imageID` int(11) NOT NULL AUTO_INCREMENT,
  `imageName` varchar(50) NOT NULL,
  `imagePath` varchar(100) NOT NULL,
  `imageDate` datetime NOT NULL,
  `imageDescription` text NOT NULL,
  `productImageID` int(11) NOT NULL,
  `categoryImageID` int(11) NOT NULL,
  `userImageID` int(11) NOT NULL,
  PRIMARY KEY (`imageID`),
  KEY `productImageID` (`productImageID`,`categoryImageID`,`userImageID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellstruktur `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `pageID` int(11) NOT NULL AUTO_INCREMENT,
  `pageTitle` varchar(70) NOT NULL,
  `pageContent` longtext NOT NULL,
  `pageImage` varchar(100) NOT NULL,
  `pageType` varchar(50) NOT NULL,
  PRIMARY KEY (`pageID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellstruktur `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `productID` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(50) NOT NULL,
  `productManufactur` varchar(50) NOT NULL,
  `productCondition` varchar(50) NOT NULL,
  `productPrice` float NOT NULL,
  `productInfo` mediumtext NOT NULL,
  `productModel` varchar(50) NOT NULL,
  `productStock` int(11) NOT NULL,
  `productDate` datetime NOT NULL,
  `productImage` varchar(100) NOT NULL,
  `categoryID` int(11) NOT NULL,
  PRIMARY KEY (`productID`),
  KEY `imageID` (`productImage`),
  KEY `categoryID` (`categoryID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellstruktur `productcategory`
--

CREATE TABLE IF NOT EXISTS `productcategory` (
  `produtCategoryID` int(11) NOT NULL AUTO_INCREMENT,
  `productID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  PRIMARY KEY (`produtCategoryID`),
  KEY `productID` (`productID`,`categoryID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellstruktur `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `userimage` varchar(100) NOT NULL,
  PRIMARY KEY (`userID`),
  KEY `imageID` (`userimage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
