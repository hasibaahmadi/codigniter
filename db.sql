-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 09:54 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `system`
--

-- --------------------------------------------------------

--
-- Table structure for table `addmision`
--

CREATE TABLE IF NOT EXISTS `addmision` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `patientId` int(11) DEFAULT NULL,
  `staffId` int(11) DEFAULT NULL,
  `wardID` int(11) DEFAULT NULL,
  `bedID` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `addmision`
--

INSERT INTO `addmision` (`id`, `date`, `time`, `patientId`, `staffId`, `wardID`, `bedID`) VALUES
(1, '2019-01-01', '00:00:00', 12, 5, 3, 2),
(2, '2019-10-15', '00:00:00', 4, 7, 2, 3),
(3, '2019-11-04', '00:00:00', 6, 4, 5, 3),
(4, '2019-11-05', '00:00:00', 6, 4, 4, 5),
(7, '2019-11-19', '13:00:00', 12, 4, 8, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(85) NOT NULL AUTO_INCREMENT,
  `departmentName` varchar(45) COLLATE utf8_persian_ci DEFAULT NULL,
  `departmentDescriptio` varchar(45) COLLATE utf8_persian_ci DEFAULT NULL,
  `numberOfEmployees` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `departmentName`, `departmentDescriptio`, `numberOfEmployees`) VALUES
(1, 'amlkd', 'doipwf', 9),
(6, 'klkfw', 'csodios', 5),
(7, 'lasck', 'csldk', 7),
(8, 'kof', 'fkp', 10);

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis`
--

CREATE TABLE IF NOT EXISTS `diagnosis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patientId` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `uploadBy` varchar(250) COLLATE utf8_persian_ci NOT NULL,
  `diagnosedby` varchar(89) COLLATE utf8_persian_ci DEFAULT NULL,
  `diagnosesSummary` longtext COLLATE utf8_persian_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=41 ;

--
-- Dumping data for table `diagnosis`
--

INSERT INTO `diagnosis` (`id`, `patientId`, `date`, `uploadBy`, `diagnosedby`, `diagnosesSummary`) VALUES
(1, 2, '2019-09-02', 'fjwlefwe', 'vndksjf', 'lsdfkjwpeopwfew;ewvdsmklnccmkdj\r\nlvdskmjfcslfewe\r\n cnxl,kfcnlsd\r\n,xlcsdfjlsk'),
(2, 1, '2019-10-08', 'jaksj', 'bbb', 'asiausa'),
(3, 5, '2019-10-04', 'udf', 'nnn', 'oiwherow'),
(4, 12, '2019-10-11', 'qwe', '', 'sfddfdssdf'),
(5, 11, '2019-10-04', 'ew', '', 'erte'),
(6, 8, '2019-10-10', 'mz', '', 'oiiiif'),
(8, 11, '2019-10-04', 'ew', 'kas', 'erte'),
(9, 32, '2019-10-17', 'hig', 'vg', 'vhuytfffffftdyt5tdtcdtde6c65ec6etfrdtt'),
(40, 6, '2019-10-22', 'mlv', 'uh', 'kjfserfre');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `date` date NOT NULL,
  `name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `fhaterName` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `address` varchar(45) COLLATE utf8_persian_ci DEFAULT NULL,
  `gender` varchar(45) COLLATE utf8_persian_ci NOT NULL,
  `age` int(12) NOT NULL,
  `typeOfEvent` varchar(55) COLLATE utf8_persian_ci NOT NULL,
  `takenthrowback` varchar(80) COLLATE utf8_persian_ci DEFAULT NULL,
  `giventhrowback` varchar(80) COLLATE utf8_persian_ci DEFAULT NULL,
  `estate` varchar(65) COLLATE utf8_persian_ci NOT NULL,
  `detectionID` int(48) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`date`, `name`, `fhaterName`, `address`, `gender`, `age`, `typeOfEvent`, `takenthrowback`, `giventhrowback`, `estate`, `detectionID`, `id`) VALUES
('2019-09-03', 'ssss', 'aaaaaaa', 'xxxxxxxx', 'female', 25, 'new', '', 'sfretsrdsrt', 'asdffghjkl', 5, 9),
('2019-09-16', 'nnnn', 'mmm', 'vvvvvvv', 'male', 50, 'Old', 'fvffxstrytsy', '', 'xgtrsytdy', 7, 10),
('2019-09-30', 'tttttttt', 'mmmmmmm', 'gggg', 'female', 55, 'Old', '', 'doiawuo', 'aaaaaaa', 5, 11),
('2019-04-10', 'Roia', 'samim', 'bharestan', 'female', 23, 'Old', NULL, NULL, 'djlfkpowf', 7, 12),
('2019-09-18', 'زینب', 'عبدالله', 'gozara', 'male', 3, 'Old', NULL, NULL, 'adsdd', 1, 13),
('2019-09-11', 'mmm', 'nnn', 'ddd', 'female', 0, 'new', 'dkjlawi', '', 'bbb', 8, 14),
('2019-10-10', 'jdv', 'jdsv', 'jds', 'female', 51, 'Old', NULL, NULL, 'kld', 6, 15),
('2019-10-02', 'da', 'dd', 'dwed', 'male', 14, 'new', NULL, NULL, 'dwq', 6, 16),
('2019-10-30', 'Roia', 'majed', 'njv', 'male', 11, 'Old', NULL, NULL, 'vds', 2, 17),
('2019-08-21', 'oij', 'jbhj', 'ifi', 'male', 42, 'new', NULL, NULL, '', 9, 18),
('2019-10-15', 'joi', 'uig', 'guy', 'female', 21, 'Old', NULL, NULL, 'uj', 1, 19);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staffID` int(58) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(47) COLLATE utf8_persian_ci DEFAULT NULL,
  `lastName` varchar(56) COLLATE utf8_persian_ci DEFAULT NULL,
  `workingTime` varchar(45) COLLATE utf8_persian_ci DEFAULT NULL,
  `departmentId` int(11) DEFAULT NULL,
  `address` varchar(45) COLLATE utf8_persian_ci NOT NULL,
  `UserName` varchar(45) COLLATE utf8_persian_ci NOT NULL,
  `UserPassword` varchar(45) COLLATE utf8_persian_ci NOT NULL,
  `staffJob` varchar(45) COLLATE utf8_persian_ci DEFAULT NULL,
  `salary` int(45) DEFAULT NULL,
  `age` int(18) DEFAULT NULL,
  `gendeer` varchar(55) COLLATE utf8_persian_ci NOT NULL,
  `photo` varchar(45) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`staffID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffID`, `firstName`, `lastName`, `workingTime`, `departmentId`, `address`, `UserName`, `UserPassword`, `staffJob`, `salary`, `age`, `gendeer`, `photo`) VALUES
(1, 'جمشید', 'کریمی', '8', 2, 'تانک مرکز', 'ali', '321', 'نرس', 18000, 22, 'mail', ''),
(2, 'drs', 'tr', '4', 5, 'hki', '', '', 'uuoi', 7000, 50, 'male', ''),
(3, 'تتنتن', 'سروری', '8', 1, 'شهرنو', 'admin', '123', 'داکتر', 25000, 7, '', ''),
(4, 'ali', 'ahmad', '5', 5, 'herat', 'ahmad', '786', 'nars', 700, 16, '', ''),
(5, 'xxx', 'zzz', '8', 3, 'ccc', 'homa', '987', 'ddd', 1000, 40, '', ''),
(6, 'msklad', 'sklad', '4', 3, 'kawl', 'mosad', '12345', 'lwa', 600, 26, '', '0'),
(7, 'sd', 'sdiuf', '8', 4, '987', '', '', 'csadc', 5000, 45, 'female', ''),
(8, 'dy', 'gf', '4', 3, 'dg', 'mosadiq', '786', 'dh', 100, 24, '', ''),
(9, 'nokiu', 'uyg', '4', 5, '2222', '', '', 'nars', 79, 40, 'male', '0'),
(10, 'ttx', 'jhy', '4', 3, 'dxr', '', '', 'dfrd', 5000, 40, 'male', ''),
(12, 'mhamod', 'mhamodi', '8', 3, 'bikrabad', 'homa', '321', 'داکتر', 25000, 43, 'mail', 'b.png'),
(13, 'lkd', 'fe', '8', 3, 'ewf', '', '', 'do', 210, 28, 'female', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `uname` varchar(40) COLLATE utf8_persian_ci NOT NULL,
  `pass` int(11) NOT NULL,
  `photo` varchar(56) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `uname`, `pass`, `photo`) VALUES
(1, 'ali', 'admin', 12345, ''),
(2, 'sohell', 'shaber', 786, ''),
(3, 'somaia', '@somaia', 786, 'fr-08.jpg'),
(4, 'ahmad', 'ahmadi', 789, 'fr-10.jpg'),
(5, 'shabir', '@shabir', 54321, 'fr-01.jpg'),
(6, 'kaber', 'admin', 1234, 'fr-01.jpg'),
(7, '', 'admin', 1212, '');

-- --------------------------------------------------------

--
-- Table structure for table `wards`
--

CREATE TABLE IF NOT EXISTS `wards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wardName` varchar(45) COLLATE utf8_persian_ci DEFAULT NULL,
  `numberOfBed` int(11) NOT NULL,
  `numberOfStaff` int(11) NOT NULL,
  `numberOfPatient` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `wards`
--

INSERT INTO `wards` (`id`, `wardName`, `numberOfBed`, `numberOfStaff`, `numberOfPatient`) VALUES
(1, 'داخله', 20, 15, 10),
(3, 'fpowej', 10, 15, 7),
(4, 'cdhs', 6, 5, 4),
(5, ' xkz', 3, 4, 2),
(6, 'slka', 6, 3, 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
