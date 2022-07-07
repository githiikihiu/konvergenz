-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 03, 2022 at 11:39 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `konvergenz`
--

-- --------------------------------------------------------

--
-- Table structure for table `cfk_12_16`
--

CREATE TABLE IF NOT EXISTS `cfk_12_16` (
  `ID` int(1) DEFAULT NULL,
  `COL1` varchar(10) DEFAULT NULL,
  `COL2` varchar(10) DEFAULT NULL,
  `COL3` varchar(10) DEFAULT NULL,
  `COL4` varchar(10) DEFAULT NULL,
  `COL5` varchar(10) DEFAULT NULL,
  `COL6` varchar(10) DEFAULT NULL,
  `COL7` varchar(10) DEFAULT NULL,
  `COL8` varchar(10) DEFAULT NULL,
  `COL9` varchar(10) DEFAULT NULL,
  `COL10` varchar(10) DEFAULT NULL,
  `COL11` varchar(10) DEFAULT NULL,
  `COL12` varchar(10) DEFAULT NULL,
  `COL13` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cfk_12_16`
--

INSERT INTO `cfk_12_16` (`ID`, `COL1`, `COL2`, `COL3`, `COL4`, `COL5`, `COL6`, `COL7`, `COL8`, `COL9`, `COL10`, `COL11`, `COL12`, `COL13`) VALUES
(1, 'Completed', 'Completed', 'Completed', 'Completed', 'Completed', 'Completed', 'Completed', 'Completed', 'Completed', 'Completed', 'Completed', 'Pending', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `cfk_12_16_bidders`
--

CREATE TABLE IF NOT EXISTS `cfk_12_16_bidders` (
  `ID` int(1) DEFAULT NULL,
  `company` varchar(10) DEFAULT NULL,
  `bid_bond` varchar(10) DEFAULT NULL,
  `quotation` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cfk_12_16_bidders`
--

INSERT INTO `cfk_12_16_bidders` (`ID`, `company`, `bid_bond`, `quotation`) VALUES
(NULL, 'copy cat', '5%', '6,000,000'),
(NULL, 'GG', '5%', '6200000'),
(NULL, 'DD', '6%', '4000000'),
(NULL, 'specicom', '5%', '5,500,000');

-- --------------------------------------------------------

--
-- Table structure for table `gm_12_2016_2017`
--

CREATE TABLE IF NOT EXISTS `gm_12_2016_2017` (
  `ID` int(1) DEFAULT NULL,
  `COL1` varchar(10) DEFAULT NULL,
  `COL2` varchar(10) DEFAULT NULL,
  `COL3` varchar(10) DEFAULT NULL,
  `COL4` varchar(10) DEFAULT NULL,
  `COL5` varchar(10) DEFAULT NULL,
  `COL6` varchar(10) DEFAULT NULL,
  `COL7` varchar(10) DEFAULT NULL,
  `COL8` varchar(10) DEFAULT NULL,
  `COL9` varchar(10) DEFAULT NULL,
  `COL10` varchar(10) DEFAULT NULL,
  `COL11` varchar(10) DEFAULT NULL,
  `COL12` varchar(10) DEFAULT NULL,
  `COL13` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gm_12_2016_2017`
--

INSERT INTO `gm_12_2016_2017` (`ID`, `COL1`, `COL2`, `COL3`, `COL4`, `COL5`, `COL6`, `COL7`, `COL8`, `COL9`, `COL10`, `COL11`, `COL12`, `COL13`) VALUES
(1, 'Completed', 'Completed', 'Completed', 'Completed', 'Completed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `has_12_12_16`
--

CREATE TABLE IF NOT EXISTS `has_12_12_16` (
  `ID` int(1) DEFAULT NULL,
  `COL1` varchar(10) DEFAULT NULL,
  `COL2` varchar(10) DEFAULT NULL,
  `COL3` varchar(10) DEFAULT NULL,
  `COL4` varchar(10) DEFAULT NULL,
  `COL5` varchar(10) DEFAULT NULL,
  `COL6` varchar(10) DEFAULT NULL,
  `COL7` varchar(10) DEFAULT NULL,
  `COL8` varchar(10) DEFAULT NULL,
  `COL9` varchar(10) DEFAULT NULL,
  `COL10` varchar(10) DEFAULT NULL,
  `COL11` varchar(10) DEFAULT NULL,
  `COL12` varchar(10) DEFAULT NULL,
  `COL13` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `has_12_12_16`
--

INSERT INTO `has_12_12_16` (`ID`, `COL1`, `COL2`, `COL3`, `COL4`, `COL5`, `COL6`, `COL7`, `COL8`, `COL9`, `COL10`, `COL11`, `COL12`, `COL13`) VALUES
(1, 'Completed', 'Completed', 'Completed', 'Completed', 'Completed', 'Completed', 'Completed', 'Completed', 'Completed', 'Completed', 'Completed', 'Pending', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `jc_12_16`
--

CREATE TABLE IF NOT EXISTS `jc_12_16` (
  `ID` int(1) DEFAULT NULL,
  `COL1` varchar(10) DEFAULT NULL,
  `COL2` varchar(10) DEFAULT NULL,
  `COL3` varchar(10) DEFAULT NULL,
  `COL4` varchar(10) DEFAULT NULL,
  `COL5` varchar(10) DEFAULT NULL,
  `COL6` varchar(10) DEFAULT NULL,
  `COL7` varchar(10) DEFAULT NULL,
  `COL8` varchar(10) DEFAULT NULL,
  `COL9` varchar(10) DEFAULT NULL,
  `COL10` varchar(10) DEFAULT NULL,
  `COL11` varchar(10) DEFAULT NULL,
  `COL12` varchar(10) DEFAULT NULL,
  `COL13` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jc_12_16`
--

INSERT INTO `jc_12_16` (`ID`, `COL1`, `COL2`, `COL3`, `COL4`, `COL5`, `COL6`, `COL7`, `COL8`, `COL9`, `COL10`, `COL11`, `COL12`, `COL13`) VALUES
(1, 'Completed', 'Completed', 'Completed', 'Completed', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `kcaa_12_2016_2017`
--

CREATE TABLE IF NOT EXISTS `kcaa_12_2016_2017` (
  `ID` int(1) DEFAULT NULL,
  `COL1` varchar(10) DEFAULT NULL,
  `COL2` varchar(10) DEFAULT NULL,
  `COL3` varchar(10) DEFAULT NULL,
  `COL4` varchar(10) DEFAULT NULL,
  `COL5` varchar(10) DEFAULT NULL,
  `COL6` varchar(10) DEFAULT NULL,
  `COL7` varchar(10) DEFAULT NULL,
  `COL8` varchar(10) DEFAULT NULL,
  `COL9` varchar(10) DEFAULT NULL,
  `COL10` varchar(10) DEFAULT NULL,
  `COL11` varchar(10) DEFAULT NULL,
  `COL12` varchar(10) DEFAULT NULL,
  `COL13` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kcaa_12_2016_2017`
--

INSERT INTO `kcaa_12_2016_2017` (`ID`, `COL1`, `COL2`, `COL3`, `COL4`, `COL5`, `COL6`, `COL7`, `COL8`, `COL9`, `COL10`, `COL11`, `COL12`, `COL13`) VALUES
(1, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `kcaa_12_2016_2017_bidders`
--

CREATE TABLE IF NOT EXISTS `kcaa_12_2016_2017_bidders` (
  `ID` int(7) NOT NULL AUTO_INCREMENT,
  `company` varchar(10) DEFAULT NULL,
  `bid_bond` varchar(10) DEFAULT NULL,
  `quotation` varchar(10) DEFAULT NULL,
  UNIQUE KEY `id` (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kcaa_12_2016_2017_bidders`
--

INSERT INTO `kcaa_12_2016_2017_bidders` (`ID`, `company`, `bid_bond`, `quotation`) VALUES
(1, '', '', ''),
(2, 'copy cat', '5%', 'ksh 2,000,');

-- --------------------------------------------------------

--
-- Table structure for table `kcb3232`
--

CREATE TABLE IF NOT EXISTS `kcb3232` (
  `ID` int(1) DEFAULT NULL,
  `COL1` varchar(10) DEFAULT NULL,
  `COL2` varchar(10) DEFAULT NULL,
  `COL3` varchar(10) DEFAULT NULL,
  `COL4` varchar(10) DEFAULT NULL,
  `COL5` varchar(10) DEFAULT NULL,
  `COL6` varchar(10) DEFAULT NULL,
  `COL7` varchar(10) DEFAULT NULL,
  `COL8` varchar(10) DEFAULT NULL,
  `COL9` varchar(10) DEFAULT NULL,
  `COL10` varchar(10) DEFAULT NULL,
  `COL11` varchar(10) DEFAULT NULL,
  `COL12` varchar(10) DEFAULT NULL,
  `COL13` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kcb3232`
--

INSERT INTO `kcb3232` (`ID`, `COL1`, `COL2`, `COL3`, `COL4`, `COL5`, `COL6`, `COL7`, `COL8`, `COL9`, `COL10`, `COL11`, `COL12`, `COL13`) VALUES
(1, 'Completed', 'Completed', 'Completed', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `kcb3232_bidders`
--

CREATE TABLE IF NOT EXISTS `kcb3232_bidders` (
  `ID` int(7) NOT NULL AUTO_INCREMENT,
  `company` varchar(10) DEFAULT NULL,
  `bid_bond` varchar(10) DEFAULT NULL,
  `quotation` varchar(10) DEFAULT NULL,
  UNIQUE KEY `id` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `knt_12_12_16`
--

CREATE TABLE IF NOT EXISTS `knt_12_12_16` (
  `ID` int(1) DEFAULT NULL,
  `COL1` varchar(10) DEFAULT NULL,
  `COL2` varchar(10) DEFAULT NULL,
  `COL3` varchar(10) DEFAULT NULL,
  `COL4` varchar(10) DEFAULT NULL,
  `COL5` varchar(10) DEFAULT NULL,
  `COL6` varchar(10) DEFAULT NULL,
  `COL7` varchar(10) DEFAULT NULL,
  `COL8` varchar(10) DEFAULT NULL,
  `COL9` varchar(10) DEFAULT NULL,
  `COL10` varchar(10) DEFAULT NULL,
  `COL11` varchar(10) DEFAULT NULL,
  `COL12` varchar(10) DEFAULT NULL,
  `COL13` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `knt_12_12_16`
--

INSERT INTO `knt_12_12_16` (`ID`, `COL1`, `COL2`, `COL3`, `COL4`, `COL5`, `COL6`, `COL7`, `COL8`, `COL9`, `COL10`, `COL11`, `COL12`, `COL13`) VALUES
(1, 'Pending', 'Completed', 'Completed', 'Completed', 'Pending', 'Completed', 'Completed', 'Completed', 'Completed', 'Completed', 'Completed', 'Pending', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `kplc_12_2016_2017`
--

CREATE TABLE IF NOT EXISTS `kplc_12_2016_2017` (
  `ID` int(1) DEFAULT NULL,
  `COL1` varchar(10) DEFAULT NULL,
  `COL2` varchar(10) DEFAULT NULL,
  `COL3` varchar(10) DEFAULT NULL,
  `COL4` varchar(10) DEFAULT NULL,
  `COL5` varchar(10) DEFAULT NULL,
  `COL6` varchar(10) DEFAULT NULL,
  `COL7` varchar(10) DEFAULT NULL,
  `COL8` varchar(10) DEFAULT NULL,
  `COL9` varchar(10) DEFAULT NULL,
  `COL10` varchar(10) DEFAULT NULL,
  `COL11` varchar(10) DEFAULT NULL,
  `COL12` varchar(10) DEFAULT NULL,
  `COL13` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kplc_12_2016_2017`
--

INSERT INTO `kplc_12_2016_2017` (`ID`, `COL1`, `COL2`, `COL3`, `COL4`, `COL5`, `COL6`, `COL7`, `COL8`, `COL9`, `COL10`, `COL11`, `COL12`, `COL13`) VALUES
(1, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `kq_12_19`
--

CREATE TABLE IF NOT EXISTS `kq_12_19` (
  `ID` int(1) DEFAULT NULL,
  `COL1` varchar(10) DEFAULT NULL,
  `COL2` varchar(10) DEFAULT NULL,
  `COL3` varchar(10) DEFAULT NULL,
  `COL4` varchar(10) DEFAULT NULL,
  `COL5` varchar(10) DEFAULT NULL,
  `COL6` varchar(10) DEFAULT NULL,
  `COL7` varchar(10) DEFAULT NULL,
  `COL8` varchar(10) DEFAULT NULL,
  `COL9` varchar(10) DEFAULT NULL,
  `COL10` varchar(10) DEFAULT NULL,
  `COL11` varchar(10) DEFAULT NULL,
  `COL12` varchar(10) DEFAULT NULL,
  `COL13` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kq_12_19`
--

INSERT INTO `kq_12_19` (`ID`, `COL1`, `COL2`, `COL3`, `COL4`, `COL5`, `COL6`, `COL7`, `COL8`, `COL9`, `COL10`, `COL11`, `COL12`, `COL13`) VALUES
(1, 'Completed', 'Completed', 'Completed', 'Completed', 'Completed', 'Completed', 'Completed', 'Completed', 'Completed', 'Completed', 'Completed', 'Completed', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `tender`
--

CREATE TABLE IF NOT EXISTS `tender` (
  `ID` int(7) NOT NULL AUTO_INCREMENT,
  `week` int(11) NOT NULL,
  `client_name` varchar(200) NOT NULL,
  `tender_no` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `bid_bond` varchar(20) NOT NULL,
  `site_visit_date` date NOT NULL,
  `closing_date` date NOT NULL,
  `delivery_location` varchar(100) DEFAULT NULL,
  `font_color` varchar(10) DEFAULT NULL,
  `progress` varchar(100) NOT NULL,
  `bom` varchar(100) NOT NULL,
  UNIQUE KEY `id` (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tender`
--

INSERT INTO `tender` (`ID`, `week`, `client_name`, `tender_no`, `description`, `bid_bond`, `site_visit_date`, `closing_date`, `delivery_location`, `font_color`, `progress`, `bom`) VALUES
(10, 48, 'kenya airways', 'Kq/12/19', 'supply of cctv materials', '5%', '2016-11-15', '2016-11-09', 'thika', '#228B22', '', 'kenya_airways_412717813.pdf'),
(11, 48, 'Kenya nut', 'Knt/12/12/16', 'supply of firewall', '8%', '2016-11-29', '2016-11-30', 'thika', '#228B22', '', 'Kenya_nut_543921715.jpg'),
(12, 48, 'juice industries', 'jc/12/16', 'supply of pabx', '5%', '2016-11-30', '2016-12-08', 'nairobi', '#228B22', '', ''),
(13, 48, 'hass', 'Has/12/12/16', 'structured cabling', '10%', '2016-11-30', '2016-11-30', 'nairobi', '#228B22', '', 'hass_1143182300.xlsx'),
(14, 50, 'coffee mills', 'Cfk/12/16', 'supply of computers', '4%', '2016-12-20', '2016-12-31', 'nairobi', '#228B22', '0', 'coffee_mills_210296314.xlsx'),
(15, 3, 'tourism agency', 'tr/12/2016-2017', 'supply of ict materials', '5%', '2017-01-18', '2017-02-01', 'nairobi hq', '#228B22', '0', ''),
(16, 3, 'kplc', 'kplc/12/2016-2017', 'supply of cctv materials', '5%', '2017-01-17', '2017-01-19', 'nairobi', '#FF0000', '0', ''),
(17, 3, 'general motors', 'gm/12/2016-2017', 'supply of firewall', '5%', '2017-01-25', '2017-01-31', 'nairobi', '#FF0000', '0', ''),
(18, 3, 'kcaa', 'kcaa/12/2016-2017', 'supply of computers', '4%', '2017-01-19', '2017-01-25', 'nairobi', '#228B22', '0', ''),
(19, 26, 'kcb', 'kcb3232', 'collaboration', '25000', '2018-07-12', '2018-07-31', 'hq office', '#228B22', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `tr_12_2016_2017`
--

CREATE TABLE IF NOT EXISTS `tr_12_2016_2017` (
  `ID` int(1) DEFAULT NULL,
  `COL1` varchar(10) DEFAULT NULL,
  `COL2` varchar(10) DEFAULT NULL,
  `COL3` varchar(10) DEFAULT NULL,
  `COL4` varchar(10) DEFAULT NULL,
  `COL5` varchar(10) DEFAULT NULL,
  `COL6` varchar(10) DEFAULT NULL,
  `COL7` varchar(10) DEFAULT NULL,
  `COL8` varchar(10) DEFAULT NULL,
  `COL9` varchar(10) DEFAULT NULL,
  `COL10` varchar(10) DEFAULT NULL,
  `COL11` varchar(10) DEFAULT NULL,
  `COL12` varchar(10) DEFAULT NULL,
  `COL13` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tr_12_2016_2017`
--

INSERT INTO `tr_12_2016_2017` (`ID`, `COL1`, `COL2`, `COL3`, `COL4`, `COL5`, `COL6`, `COL7`, `COL8`, `COL9`, `COL10`, `COL11`, `COL12`, `COL13`) VALUES
(1, 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending', 'pending');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
