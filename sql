-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 02, 2014 at 05:34 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shopping_cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE IF NOT EXISTS `Admin` (
  `AdminID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `UserName` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`AdminID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`AdminID`, `UserName`, `Password`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `Categories`
--

CREATE TABLE IF NOT EXISTS `Categories` (
  `CateID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `CateName` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`CateID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE IF NOT EXISTS `Customer` (
  `CusID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`CusID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Feedback`
--

CREATE TABLE IF NOT EXISTS `Feedback` (
  `FeedID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `CusId` int(11) NOT NULL,
  PRIMARY KEY (`FeedID`),
  KEY `fk_Feedback_Customer1_idx` (`CusId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Improt`
--

CREATE TABLE IF NOT EXISTS `Improt` (
  `ImportID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ProID` int(11) NOT NULL,
  `SizeID` int(10) unsigned NOT NULL,
  PRIMARY KEY (`ImportID`),
  KEY `fk_Improt_Product1_idx` (`ProID`),
  KEY `fk_Improt_Size1_idx` (`SizeID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `New`
--

CREATE TABLE IF NOT EXISTS `New` (
  `NewID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `NewTitle` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`NewID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Notice`
--

CREATE TABLE IF NOT EXISTS `Notice` (
  `NotID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `CusID` int(11) NOT NULL,
  `AdminID` int(10) unsigned NOT NULL,
  PRIMARY KEY (`NotID`),
  KEY `fk_Notice_Customer1_idx` (`CusID`),
  KEY `fk_Notice_Admin1_idx` (`AdminID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Order`
--

CREATE TABLE IF NOT EXISTS `Order` (
  `OrdID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `PayID` int(10) unsigned NOT NULL,
  `CusId` int(11) NOT NULL,
  PRIMARY KEY (`OrdID`),
  KEY `fk_Order_PayMethod1_idx` (`PayID`),
  KEY `fk_Order_Customer1_idx` (`CusId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `OrderDetail`
--

CREATE TABLE IF NOT EXISTS `OrderDetail` (
  `OrdID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ProSizeID` int(10) unsigned NOT NULL,
  PRIMARY KEY (`OrdID`),
  KEY `fk_OrderDetail_ProSize1_idx` (`ProSizeID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `PayMethod`
--

CREATE TABLE IF NOT EXISTS `PayMethod` (
  `PayID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `PayType` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`PayID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE IF NOT EXISTS `Product` (
  `ProID` int(11) NOT NULL,
  `CateID` int(10) unsigned NOT NULL,
  PRIMARY KEY (`ProID`),
  KEY `fk_Product_Categories1_idx` (`CateID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ProSize`
--

CREATE TABLE IF NOT EXISTS `ProSize` (
  `ProSizeID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `SizeID` int(10) unsigned NOT NULL,
  `ProID` int(11) NOT NULL,
  PRIMARY KEY (`ProSizeID`),
  KEY `fk_ProSize_Size_idx` (`SizeID`),
  KEY `fk_ProSize_Product1_idx` (`ProID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Rate`
--

CREATE TABLE IF NOT EXISTS `Rate` (
  `RateID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `CusID` int(11) NOT NULL,
  `ProID` int(11) NOT NULL,
  PRIMARY KEY (`RateID`),
  KEY `fk_Rate_Customer1_idx` (`CusID`),
  KEY `fk_Rate_Product1_idx` (`ProID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Size`
--

CREATE TABLE IF NOT EXISTS `Size` (
  `SizeID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `SizeName` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`SizeID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Feedback`
--
ALTER TABLE `Feedback`
  ADD CONSTRAINT `fk_Feedback_Customer1` FOREIGN KEY (`CusId`) REFERENCES `Customer` (`CusID`) ON UPDATE CASCADE;

--
-- Constraints for table `Improt`
--
ALTER TABLE `Improt`
  ADD CONSTRAINT `fk_Improt_Product1` FOREIGN KEY (`ProID`) REFERENCES `Product` (`ProID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Improt_Size1` FOREIGN KEY (`SizeID`) REFERENCES `Size` (`SizeID`) ON UPDATE CASCADE;

--
-- Constraints for table `Notice`
--
ALTER TABLE `Notice`
  ADD CONSTRAINT `fk_Notice_Admin1` FOREIGN KEY (`AdminID`) REFERENCES `Admin` (`AdminID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Notice_Customer1` FOREIGN KEY (`CusID`) REFERENCES `Customer` (`CusID`) ON UPDATE CASCADE;

--
-- Constraints for table `Order`
--
ALTER TABLE `Order`
  ADD CONSTRAINT `fk_Order_Customer1` FOREIGN KEY (`CusId`) REFERENCES `Customer` (`CusID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Order_PayMethod1` FOREIGN KEY (`PayID`) REFERENCES `PayMethod` (`PayID`) ON UPDATE CASCADE;

--
-- Constraints for table `OrderDetail`
--
ALTER TABLE `OrderDetail`
  ADD CONSTRAINT `fk_OrderDetail_ProSize1` FOREIGN KEY (`ProSizeID`) REFERENCES `ProSize` (`ProSizeID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Product`
--
ALTER TABLE `Product`
  ADD CONSTRAINT `fk_Product_Categories1` FOREIGN KEY (`CateID`) REFERENCES `Categories` (`CateID`) ON UPDATE CASCADE;

--
-- Constraints for table `ProSize`
--
ALTER TABLE `ProSize`
  ADD CONSTRAINT `fk_ProSize_Product1` FOREIGN KEY (`ProID`) REFERENCES `Product` (`ProID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ProSize_Size` FOREIGN KEY (`SizeID`) REFERENCES `Size` (`SizeID`) ON UPDATE CASCADE;

--
-- Constraints for table `Rate`
--
ALTER TABLE `Rate`
  ADD CONSTRAINT `fk_Rate_Customer1` FOREIGN KEY (`CusID`) REFERENCES `Customer` (`CusID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Rate_Product1` FOREIGN KEY (`ProID`) REFERENCES `Product` (`ProID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
