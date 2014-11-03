-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `swproject`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `campus`
--

CREATE TABLE IF NOT EXISTS `campus` (
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `UID` int(3) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `UID` (`UID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `co-requisite`
--

CREATE TABLE IF NOT EXISTS `co-requisite` (
  `CID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `CoID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  KEY `CID` (`CID`),
  KEY `CoID` (`CoID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `ID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Name_TH` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Name_EN` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CID` int(3) NOT NULL,
  `Semester` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `CID` (`CID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `course_search_view`
--
CREATE TABLE IF NOT EXISTS `course_search_view` (
`CourseID` varchar(10)
,`CourseName` varchar(50)
,`Section` int(3)
,`Semester` varchar(10)
,`Curriculum` varchar(100)
,`Department` varchar(100)
,`Faculty` varchar(100)
,`Campus` varchar(100)
,`University` varchar(100)
);
-- --------------------------------------------------------

--
-- โครงสร้างตาราง `curriculum`
--

CREATE TABLE IF NOT EXISTS `curriculum` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DID` int(3) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `DID` (`DID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `FID` int(3) NOT NULL,
  `Pusername` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FID` (`FID`),
  KEY `FID_2` (`FID`),
  KEY `Pusername` (`Pusername`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `CID` int(5) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `CID` (`CID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=37 ;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `major`
--

CREATE TABLE IF NOT EXISTS `major` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DID` int(3) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `DID` (`DID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `manage`
--

CREATE TABLE IF NOT EXISTS `manage` (
  `CID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `PUsername` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  KEY `CID` (`CID`),
  KEY `PUsername` (`PUsername`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `pre-requisite`
--

CREATE TABLE IF NOT EXISTS `pre-requisite` (
  `CID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `PreID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  KEY `CID` (`CID`),
  KEY `PreID` (`PreID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `professor`
--

CREATE TABLE IF NOT EXISTS `professor` (
  `Username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Fname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Lname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DID` int(3) DEFAULT NULL,
  PRIMARY KEY (`Username`),
  KEY `DID` (`DID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `Susername` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `SID` int(3) NOT NULL,
  KEY `Susername` (`Susername`),
  KEY `SID` (`SID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `register_view`
--
CREATE TABLE IF NOT EXISTS `register_view` (
`Username` varchar(20)
,`ID` varchar(10)
,`Course` varchar(50)
,`section` int(3)
);
-- --------------------------------------------------------

--
-- โครงสร้างตาราง `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `CID` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Number` int(3) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `CID` (`CID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `Username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Fname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Lname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MID` int(3) NOT NULL,
  PRIMARY KEY (`Username`),
  KEY `MID` (`MID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `teach`
--

CREATE TABLE IF NOT EXISTS `teach` (
  `Pusername` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `SID` int(3) NOT NULL,
  KEY `Pusername` (`Pusername`),
  KEY `SID` (`SID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `teach_view`
--
CREATE TABLE IF NOT EXISTS `teach_view` (
`Username` varchar(20)
,`ID` varchar(10)
,`Course` varchar(50)
,`section` int(3)
);
-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tqf3`
--

CREATE TABLE IF NOT EXISTS `tqf3` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `SID` int(3) NOT NULL,
  `Pdf` longblob NOT NULL,
  `size` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `SID` (`SID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `tqf3_view`
--
CREATE TABLE IF NOT EXISTS `tqf3_view` (
`University` varchar(100)
,`Campus` varchar(100)
,`Faculty` varchar(100)
,`Department` varchar(100)
,`Curriculum` varchar(100)
,`CourseID` varchar(10)
,`CourseName` varchar(50)
,`Section` int(3)
,`TQF3` longblob
,`Size` varchar(100)
,`Type` varchar(100)
,`Semester` varchar(10)
);
-- --------------------------------------------------------

--
-- โครงสร้างตาราง `university`
--

CREATE TABLE IF NOT EXISTS `university` (
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=125 ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `user_view`
--
CREATE TABLE IF NOT EXISTS `user_view` (
`Username` varchar(20)
,`Password` varchar(20)
,`Fname` varchar(50)
,`Lname` varchar(50)
,`DID` int(11)
);
-- --------------------------------------------------------

--
-- Structure for view `course_search_view`
--
DROP TABLE IF EXISTS `course_search_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `course_search_view` AS select `co`.`ID` AS `CourseID`,`co`.`Name_EN` AS `CourseName`,`s`.`Number` AS `Section`,`co`.`Semester` AS `Semester`,`cur`.`Name` AS `Curriculum`,`d`.`Name` AS `Department`,`f`.`Name` AS `Faculty`,`ca`.`Name` AS `Campus`,`u`.`Name` AS `University` from (((((((`tqf3` `t` join `section` `s` on((`t`.`SID` = `s`.`ID`))) join `course` `co` on((`s`.`CID` = `co`.`ID`))) join `curriculum` `cur` on((`co`.`CID` = `cur`.`ID`))) join `department` `d` on((`cur`.`DID` = `d`.`ID`))) join `faculty` `f` on((`d`.`FID` = `f`.`ID`))) join `campus` `ca` on((`f`.`CID` = `ca`.`ID`))) join `university` `u` on((`ca`.`UID` = `u`.`ID`)));

-- --------------------------------------------------------

--
-- Structure for view `register_view`
--
DROP TABLE IF EXISTS `register_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `register_view` AS select `st`.`Username` AS `Username`,`c`.`ID` AS `ID`,`c`.`Name_EN` AS `Course`,`s`.`Number` AS `section` from (((`register` `r` join `student` `st` on((`r`.`Susername` = `st`.`Username`))) join `section` `s` on((`r`.`SID` = `s`.`ID`))) join `course` `c` on((`s`.`CID` = `c`.`ID`)));

-- --------------------------------------------------------

--
-- Structure for view `teach_view`
--
DROP TABLE IF EXISTS `teach_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `teach_view` AS select `p`.`Username` AS `Username`,`c`.`ID` AS `ID`,`c`.`Name_EN` AS `Course`,`s`.`Number` AS `section` from (((`teach` `t` join `professor` `p` on((`t`.`Pusername` = `p`.`Username`))) join `section` `s` on((`t`.`SID` = `s`.`ID`))) join `course` `c` on((`s`.`CID` = `c`.`ID`)));

-- --------------------------------------------------------

--
-- Structure for view `tqf3_view`
--
DROP TABLE IF EXISTS `tqf3_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tqf3_view` AS select `u`.`Name` AS `University`,`ca`.`Name` AS `Campus`,`f`.`Name` AS `Faculty`,`d`.`Name` AS `Department`,`cur`.`Name` AS `Curriculum`,`co`.`ID` AS `CourseID`,`co`.`Name_EN` AS `CourseName`,`s`.`Number` AS `Section`,`t`.`Pdf` AS `TQF3`,`t`.`size` AS `Size`,`t`.`type` AS `Type`,`co`.`Semester` AS `Semester` from (((((((`tqf3` `t` join `section` `s` on((`t`.`SID` = `s`.`ID`))) join `course` `co` on((`s`.`CID` = `co`.`ID`))) join `curriculum` `cur` on((`co`.`CID` = `cur`.`ID`))) join `department` `d` on((`cur`.`DID` = `d`.`ID`))) join `faculty` `f` on((`d`.`FID` = `f`.`ID`))) join `campus` `ca` on((`f`.`CID` = `ca`.`ID`))) join `university` `u` on((`ca`.`UID` = `u`.`ID`)));

-- --------------------------------------------------------

--
-- Structure for view `user_view`
--
DROP TABLE IF EXISTS `user_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_view` AS select `professor`.`Username` AS `Username`,`professor`.`Password` AS `Password`,`professor`.`Fname` AS `Fname`,`professor`.`Lname` AS `Lname`,`professor`.`DID` AS `DID` from `professor` union all select `student`.`Username` AS `Username`,`student`.`Password` AS `Password`,`student`.`Fname` AS `Fname`,`student`.`Lname` AS `Lname`,`student`.`MID` AS `MID` from `student`;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `campus`
--
ALTER TABLE `campus`
  ADD CONSTRAINT `campus_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `university` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `co-requisite`
--
ALTER TABLE `co-requisite`
  ADD CONSTRAINT `co-requisite_ibfk_1` FOREIGN KEY (`CID`) REFERENCES `course` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `co-requisite_ibfk_2` FOREIGN KEY (`CoID`) REFERENCES `course` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`CID`) REFERENCES `curriculum` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `curriculum`
--
ALTER TABLE `curriculum`
  ADD CONSTRAINT `curriculum_ibfk_1` FOREIGN KEY (`DID`) REFERENCES `department` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`FID`) REFERENCES `faculty` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `department_ibfk_2` FOREIGN KEY (`Pusername`) REFERENCES `professor` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `faculty`
--
ALTER TABLE `faculty`
  ADD CONSTRAINT `faculty_ibfk_1` FOREIGN KEY (`CID`) REFERENCES `campus` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `major`
--
ALTER TABLE `major`
  ADD CONSTRAINT `major_ibfk_1` FOREIGN KEY (`DID`) REFERENCES `department` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manage`
--
ALTER TABLE `manage`
  ADD CONSTRAINT `manage_ibfk_1` FOREIGN KEY (`PUsername`) REFERENCES `professor` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `manage_ibfk_2` FOREIGN KEY (`CID`) REFERENCES `course` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pre-requisite`
--
ALTER TABLE `pre-requisite`
  ADD CONSTRAINT `pre-requisite_ibfk_1` FOREIGN KEY (`CID`) REFERENCES `course` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pre-requisite_ibfk_2` FOREIGN KEY (`PreID`) REFERENCES `course` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `professor`
--
ALTER TABLE `professor`
  ADD CONSTRAINT `professor_ibfk_1` FOREIGN KEY (`DID`) REFERENCES `department` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `register`
--
ALTER TABLE `register`
  ADD CONSTRAINT `register_ibfk_1` FOREIGN KEY (`SID`) REFERENCES `section` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `register_ibfk_2` FOREIGN KEY (`Susername`) REFERENCES `student` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `section_ibfk_1` FOREIGN KEY (`CID`) REFERENCES `course` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`MID`) REFERENCES `major` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teach`
--
ALTER TABLE `teach`
  ADD CONSTRAINT `teach_ibfk_1` FOREIGN KEY (`Pusername`) REFERENCES `professor` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teach_ibfk_2` FOREIGN KEY (`SID`) REFERENCES `section` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tqf3`
--
ALTER TABLE `tqf3`
  ADD CONSTRAINT `tqf3_ibfk_1` FOREIGN KEY (`SID`) REFERENCES `section` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
