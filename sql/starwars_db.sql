-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Värd: localhost
-- Skapad: 14 jan 2013 kl 09:33
-- Serverversion: 5.5.25
-- PHP-version: 5.4.4

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

CREATE TABLE `category` (
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
(2, 'Fx Lightsabers', 'images/categoryImages/fxLightsabers.jpg');

-- --------------------------------------------------------

--
-- Tabellstruktur `image`
--

CREATE TABLE `image` (
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

CREATE TABLE `page` (
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

CREATE TABLE `product` (
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
(1, 'LEGO Star Wars - Death Star 10188', 'LEGO', 'New', 499, '<p>NOTE - This product ships only to the USA - Orders placed with shipping addresses outside the USA will be cancelled.</p>\r\n<p>\r\n3803 pieces<br />\r\nAges 14+<br />\r\nBattle inside the Death Star™!<br />\r\n</p>\r\n<p>Recreate the action and adventure of the Star Wars™ movies with the ultimate Death Star playset! This amazingly detailed battle station features an incredible array of minifigure-scale scenes, moving parts, characters and accessories from Episodes IV and VI on its multiple decks, including the Death Star control room, rotating turbolaser turrets, hangar bay with TIE Advanced starfighter, tractor beam controls, Emperor’s throne room, detention block, firing laser cannon, Imperial conference chamber, droid maintenance facility, and the powerful Death Star superlaser…plus much more! Swing across the chasm with Luke and Leia, face danger in the crushing trash compactor, and duel with Darth Vader for the fate of the galaxy!<p>\r\n\r\n<ul>\r\n<li>* Includes 24 minifigures and droids, plus all-new Dianoga™ trash compactor monster!</li>\r\n<li>* Includes 6 new and exclusive minifigures and droids only found in this set: Luke Skywalker™ (Stormtrooper™ outfit), Han Solo™ (Stormtrooper outfit), Assassin Droid™, Interrogation Droid, Death Star Droid and 2 Death Star Troopers™!</li>\r\n<li>* Also includes Luke Skywalker, Han Solo, Obi-Wan Kenobi™, C-3PO™, R2-D2™, Princess Leia™, Chewbacca™, Luke Skywalker (Jedi Knight), Darth Vader™, Grand Moff Tarkin™, Emperor Palpatine™, 2 Stormtroopers, 2 Emperor''s Royal Guards™, R2-Q5™, and mouse droid!.</li>\r\n<li>Movie-authentic Death Star environments include the Superlaser control room and target monitor, Imperial conference chamber, TIE Advanced hangar bay with moving launch rack, Emperor''s throne room, droid maintenance room, detention block, trash compactor, and much more!</li>\r\n<li>Rescue Princess Leia from the detention block cell, then escape through the secret hatch to the trash compactor below!</li>\r\n<li>Reenact the final duel between Luke Skywalker and Darth Vader in the Emperor''s Throne Room!</li>\r\n<li>Death Star measures 16” (41cm) tall and 16½” (42cm) wide!</li>\r\n<li>TIE Advanced measures 3½" (9cm) wide!</li>\r\n</ul>\r\n\r\n<p>Product Number: LGO10306<br>\r\nShipping Weight: 24.96 pounds</p>', 'LEGO Star Wars - Death Star 10188', 2, '2013-01-12 00:00:00', 'produtImages/LEGO/LGO10306.jpg', 1),
(2, 'LEGO Star Wars - Malevolence 9515', 'LEGO', 'Standard', 119, '<p>NOTE - This product ships only to the USA - Orders placed with shipping addresses outside the USA will be cancelled.</p>\r\n\r\n<p>Product Number: LGO10579<br>\r\nShipping Weight: 5.40 pounds</p>\r\n\r\n<p>This item is in Standard Grade Condition:<br />\r\nThe item is brand new, in mint condition, and sealed inside its packaging.<br />\r\nPackaging condition is verified to be 80% mint (C8) or better.<br />\r\nStandard Grade items are suitable to display in the package, or to open.</p>', 'LEGO Star Wars - Malevolence 9515', 1, '2013-01-10 00:00:00', 'productImages/LEGO/LGO10579.jpg', 1),
(3, 'FX Lightsaber with Removable Blade - Luke Skywalke', 'Hasbro', 'Bad', 119, '<p>Product Number: HAS20038<br />\r\nShipping Weight: 4.12 pounds</p>\r\n\r\n<p>This item is in Standard Grade Condition:<br />\r\nThe item is brand new, in mint condition, and sealed inside its packaging.<br />\r\nPackaging condition is verified to be 80% mint (C8) or better.<br />\r\nStandard Grade items are suitable to display in the package, or to open.</p>\r\n', 'Luke Skywalker (Blue)', 0, '2013-01-07 00:00:00', 'productImages/fxLightsabers/HAS20038.jpg', 2),
(4, 'FX Lightsaber with Removable Blade - Darth Vader', 'Hasbro', 'New', 119, '<p>The FX Lightsaber with Removable Blade: Darth Vader version features a removable polycarbonate blade with igniting/glowing with LED-powered power-up and power-down lights effects, and motion sensor controlled sound effects---power-up, power-down, idle, movement, and clash---digitally recorded from the movie. The Darth Vader FX Lightsaber requires, but does not include, batteries, and is accompanied by a display stand. Requiring substantial strength and dexterity, the lightsaber, once a ceremonial weapon, was utilized primarily by the likes of Jedi and Sith warriors. Whereas lightsaber hilts were tailored according to wielders’ preference, the blade itself was comprised of plasma energy bound by a force containment field. Sustained by a mechanized life support system and prosthetics, the battered and disfigured Sith Lord Darth Vader is both the apprentice and enforcer of Emperor Palpatine, however, his Imperial caseload is compromised by his desire to capture and recruit his offspring Luke Skywalker. Initially caught off-guard by Luke’s willing surrender to the Imperials as a gesture intended to prompt the redemption of Anakin Skywalker, Vader dueled against his son while the cackling Palpatine eagerly looked on.</p>\r\n\r\n<p>Product Number: HAS18784<br />\r\nShipping Weight: 5.00 pounds </p>', 'Darth Vader', 2, '2013-01-01 00:00:00', 'productImages/fxLightsabers/HAS18784.jpg', 2);

-- --------------------------------------------------------

--
-- Tabellstruktur `productcategory`
--

CREATE TABLE `productcategory` (
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

CREATE TABLE `user` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `userimage` varchar(100) NOT NULL,
  PRIMARY KEY (`userID`),
  KEY `imageID` (`userimage`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumpning av Data i tabell `user`
--

INSERT INTO `user` (`userID`, `userName`, `password`, `userimage`) VALUES
(1, 'Duderino', 'Duderino', 'userImages/duderino.jpg'),
(2, 'customer', 'customer', 'userImages/customer.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
