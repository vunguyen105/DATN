-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 03, 2014 at 09:55 PM
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
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lft` int(10) unsigned NOT NULL DEFAULT '0',
  `rgt` int(10) unsigned NOT NULL DEFAULT '0',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=68 ;

--
-- Dumping data for table `Categories`
--

INSERT INTO `Categories` (`id`, `name`, `lft`, `rgt`, `parent_id`) VALUES
(1, 'Maketing manager 3xxxxxx', 0, 26, 0),
(2, 'CEO 2 chắc chắn là được r mà nhỉ', 18, 19, 1),
(5, 'Sale manager 5', 21, 22, 6),
(6, 'Group A 6', 20, 23, 1),
(7, 'Group B 7', 14, 15, 1),
(9, 'tôi yêu việt nam', 8, 9, 1),
(10, 'con con mới nào', 12, 13, 1),
(11, 'Maketing manager 3 hình như được r mà', 16, 17, 1),
(12, 'tôi yêu việt nam', 10, 11, 1),
(13, 'con con mới nào xxx', 24, 25, 10),
(32, 'themmmmmmmmmmmmmmmmm', 0, 7, 0),
(36, 'mới tinh', 27, 28, 0),
(61, 'aaaaaaaaa', 29, 34, 0),
(62, 'bbbbbbbbbbbbbbbbbbbbb', 31, 32, 67),
(63, 'x', 1, 4, 32),
(64, 'nguyen', 2, 3, 63),
(65, 'nguyen1', 5, 6, 64),
(66, 'dddd', 35, 36, 0),
(67, 'huyen', 30, 33, 61);

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
  `ProName` varchar(150) CHARACTER SET ucs2 COLLATE ucs2_unicode_ci NOT NULL,
  `ProPicName` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ProPrice` int(10) DEFAULT '0',
  `ProStt` int(10) DEFAULT '1',
  `ProQuantity` int(10) DEFAULT NULL,
  `ProDesc` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `ProStt2` int(11) DEFAULT '1',
  PRIMARY KEY (`ProID`),
  KEY `fk_Product_Categories1_idx` (`CateID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`ProID`, `CateID`, `ProName`, `ProPicName`, `ProPrice`, `ProStt`, `ProQuantity`, `ProDesc`, `ProStt2`) VALUES
(0, 5, 'Áo thun', 'abc.jpg', 90, 1, NULL, 'Báo cáo đồ án tốt nghiệp: Xây dựng website bán hàng trực tuyến', 1),
(1, 1, 'Quần bò', 'sdsdd.jpg', 100, 1, 0, 'Báo cáo đồ án tốt nghiệp: Xây dựng website bán hàng trực tuyến', 1),
(22, 10, 'eqweqwe', 'e', 0, 1, 11, 'dấd', 1),
(24, 10, 'eqweqwe', 'e', 0, 1, 11, 'dấd', 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(1) DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=24 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `address`, `active`, `created`, `modified`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', '', 'admin@gmail.com                                                                                                                                                                                                                    THEME COLOR                 ', 'hoang mai ha noi', NULL, NULL, NULL),
(9, 'fsdfasdf', 'fsadfsd', 'dsfadf', 'sdfasdf', 'sdfasfds', '', NULL, NULL, NULL),
(13, 'tuanabc', '55a766d78157e74805b890f4c30173bd', 'nguyen', 'tuan', 'tuanabc@gmail.com                                                                                                                                                                                                                    THEME COLOR               ', 'ha noi', NULL, NULL, NULL),
(17, 'tuan123', 'tuan123', 'tuan', 'nguyen', 'adfasd', 'dfadsf', NULL, NULL, NULL),
(21, 'tuanvn', 'tuanvn', 'nguyen', 'tuan', 'tuanvn', 'fasdf', NULL, '2014-04-26 02:34:01', NULL),
(22, 'tuannguyenvan', '056909a218bd6867d75623add9c826c5', 'nguyen', 'tuan', 'tuan', 'tuan', NULL, '2014-04-26 02:35:48', NULL),
(23, 'tuannguyenvan', '056909a218bd6867d75623add9c826c5', 'nguyen', 'tuan', 'tuan', 'tuan', NULL, '2014-04-26 02:35:49', NULL);

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
  ADD CONSTRAINT `fk_Product_Categories1` FOREIGN KEY (`CateID`) REFERENCES `Categories` (`id`) ON UPDATE CASCADE;

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
