-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Skapad: 11 feb 2013 kl 14:49
-- Serverversion: 5.5.27
-- PHP-version: 5.4.7

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
  `categoryName` varchar(50) NOT NULL,
  `categoryimage` varchar(100) NOT NULL,
  PRIMARY KEY (`categoryID`),
  KEY `imageID` (`categoryimage`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumpning av Data i tabell `category`
--

INSERT INTO `category` (`categoryID`, `categoryName`, `categoryimage`) VALUES
(1, 'LEGO', 'images/categoryImages/LEGO.jpg'),
(2, 'Lightsabers', 'images/categoryImages/fxLightsabers.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumpning av Data i tabell `page`
--

INSERT INTO `page` (`pageID`, `pageTitle`, `pageContent`, `pageImage`, `pageType`) VALUES
(1, 'Home', '<p>Welcome to our super-duper Star Wars collectibles webshop. For years we''ve been providing the leading platform for distriuting and swapping collectibles.</p>\r\n<p>Now we''re taking it to the next level with our shining new webshop. In this amazing webshop we will hunt down and sell collectibles for a low cost. Our ever changing price calculator will make your you never pay more than the current value.</p>\r\n<p class="ctaStart">So what are you waiting for? <a>Jump right in!</a></p>', 'images/pageImages/home.jpg', 'startPage'),
(2, 'About us', '<p>The web site is develop by the stunning, sexy crew Duderinos. The store manager is Dustin Roberts. Read more about him below</p> \r\n<p>Dustin Roberts finally settled down in Cincinnati Ohio where he works for Cincinnati Bell. Always a huge fan of the original Star Wars trilogy, his love of the toys and collecting habits were rekindled in 1995 when he started to see Star Wars action figures in stores again, manufactured by Kenner. He always joked that he wanted a few and then for Christmas 1996 his now ex-wife bought all that she could find as a joke gift. Dustin''s contributions to the online Star Wars community include involvement with many prominent fan based websites including: Yakface.com, www.nerf-herder.com, Rebelscum.com, R2D2central.com, and even a brief stint at the official website Starwars.com as a collecting forum moderator. Nowadays Dustin concentrates on content management for TheForce.net, while also contributing at Rebelscum.com, and continually updating his ever-growing R2-D2 collection focus at R2D2central.com. </p>', 'images/pageImages/about.jpg', 'content');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumpning av Data i tabell `product`
--

INSERT INTO `product` (`productID`, `productName`, `productManufactur`, `productCondition`, `productPrice`, `productInfo`, `productModel`, `productStock`, `productDate`, `productImage`, `categoryID`) VALUES
(1, 'Death Star 10188', 'LEGO', 'New', 499, '<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accums</p>', 'LEGO Star Wars - Death Star 10188', 2, '2013-01-12 00:00:00', 'productImages/LEGO/LGO10306.jpg', 1),
(2, 'Malevolence 9515', 'LEGO', 'Standard', 119, '<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accums</p>', 'LEGO Star Wars - Malevolence 9515', 1, '2013-01-10 00:00:00', 'productImages/LEGO/LGO10579.jpg', 1),
(3, 'Lightsaber with Removable Blade', 'Hasbro', 'Bad', 119, '<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accums</p>', 'Luke Skywalker (Blue)', 0, '2013-01-07 00:00:00', 'productImages/fxLightsabers/HAS20038.jpg', 2),
(4, 'Lightsaber with Removable Blade', 'Hasbro', 'New', 119, '<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accums</p>', 'Darth Vader', 2, '2013-01-01 00:00:00', 'productImages/fxLightsabers/HAS18784.jpg', 2);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumpning av Data i tabell `productcategory`
--

INSERT INTO `productcategory` (`produtCategoryID`, `productID`, `categoryID`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 1),
(4, 3, 2),
(5, 4, 2);

-- --------------------------------------------------------

--
-- Tabellstruktur `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `userimage` varchar(100) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `status` set('admin','black','platinum','gold','silver','green') NOT NULL,
  `gender` set('male','female') NOT NULL,
  `age` tinyint(4) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `about` longtext NOT NULL,
  `wallet` float NOT NULL DEFAULT '1000',
  PRIMARY KEY (`userID`),
  KEY `imageID` (`userimage`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumpning av Data i tabell `user`
--

INSERT INTO `user` (`userID`, `userName`, `password`, `userimage`, `fullName`, `status`, `gender`, `age`, `nationality`, `about`, `wallet`) VALUES
(1, 'Duderino', 'Duderino', 'userImages/duderino.jpg', 'Simon Quick', 'admin', 'male', 14, 'Swedish', '<p>Hello Sith and Jedis!</p>\r\n<p>My name is Simon and I am 14 Alderaan spins (if 1 spin on Alderaan is like 1 spin on Earth. I''m not sure"</p>\r\n<p>I love Star Wars and Leias golden bikinii make me feel funny in my private places</p>', 1000),
(2, 'customer', 'customer', 'userImages/customer.jpg', 'Leia Organa Solo', 'silver', 'female', 22, 'Alderaan', '<p>Leia Organa Solo (born Leia Amidala Skywalker) was, at various stages of her life, a politician, revolutionary, and Jedi Knight of the New Jedi Order.</p>\r\n<p>The daughter of Jedi Knight Anakin Skywalker and Senator Padmé Amidala of Naboo, Leia was the younger twin sister of Luke Skywalker, and, shortly after her birth, she became the adopted daughter of Bail Organa and Queen Breha of Alderaan, making her a Princess of Alderaan. An accomplished Senator, Organa Solo was most famous for her strong leadership during the Galactic Civil War and other subsequent galactic conflicts, making her one of the galaxy''s greatest heroes. Later she married Han Solo, and became the mother of their three children: Jaina, Jacen, and Anakin Solo. Around the start of the Swarm War, Leia unknowingly became a grandmother through Jacen''s daughter Allana.</p> ', 1000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
