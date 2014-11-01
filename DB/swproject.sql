-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2014 at 02:14 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

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
-- Table structure for table `assessmentdetail`
--

CREATE TABLE IF NOT EXISTS `assessmentdetail` (
  `Text` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `campus`
--

CREATE TABLE IF NOT EXISTS `campus` (
  `Cname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CID` int(5) NOT NULL,
  `UID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `campus`
--

INSERT INTO `campus` (`Cname`, `CID`, `UID`) VALUES
('พิษณุโลก', 1, 123);

-- --------------------------------------------------------

--
-- Table structure for table `co-requisite`
--

CREATE TABLE IF NOT EXISTS `co-requisite` (
  `CORID` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `COID` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Name_TH` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Name_EN` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Credit` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CurID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`COID`, `Name_TH`, `Name_EN`, `Credit`, `Type`, `CurID`) VALUES
('305433', 'อัลกอริทึม', 'Algorithm Analysis and Design', '3', '4', 1),
('305453', 'วิศวกรรมซอฟแวร์', 'Principle of Software Engineering', '3', '4', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `course_view`
--
CREATE TABLE IF NOT EXISTS `course_view` (
`ID` varchar(50)
,`Name` varchar(50)
,`Credit` varchar(10)
,`Section` int(10)
,`Firstname` varchar(50)
,`Lastname` varchar(50)
,`Status` varchar(50)
,`UserID` varchar(50)
);
-- --------------------------------------------------------

--
-- Table structure for table `curriculum`
--

CREATE TABLE IF NOT EXISTS `curriculum` (
  `CurID` int(10) NOT NULL,
  `CurName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `curriculum`
--

INSERT INTO `curriculum` (`CurID`, `CurName`, `DID`) VALUES
(1, 'ปริญญาตรี', 3);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `Dname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DID` int(10) NOT NULL,
  `FID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Dname`, `DID`, `FID`) VALUES
('ไฟฟ้าและคอมพิวเตอร์', 3, 35);

-- --------------------------------------------------------

--
-- Table structure for table `devoflearningoutcome`
--

CREATE TABLE IF NOT EXISTS `devoflearningoutcome` (
  `DevName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DevID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `evaluateandimprove`
--

CREATE TABLE IF NOT EXISTS `evaluateandimprove` (
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Detail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `EIID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `Fname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `FID` int(10) NOT NULL,
  `CID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`Fname`, `FID`, `CID`) VALUES
('ENGINEERING', 35, 1);

-- --------------------------------------------------------

--
-- Table structure for table `learningplan`
--

CREATE TABLE IF NOT EXISTS `learningplan` (
  `Learning` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `HowtoAssessment` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `WeekOfAssessment` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Ratio` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `objective`
--

CREATE TABLE IF NOT EXISTS `objective` (
  `Text` varchar(2000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `objective&purpose`
--

CREATE TABLE IF NOT EXISTS `objective&purpose` (
  `ObjOfDeveloping` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `ObjID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `operations`
--

CREATE TABLE IF NOT EXISTS `operations` (
  `Detial` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `Hour/semester` int(3) NOT NULL,
  `Hour/advise` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pre-requisite`
--

CREATE TABLE IF NOT EXISTS `pre-requisite` (
  `PreID` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `profile_view`
--
CREATE TABLE IF NOT EXISTS `profile_view` (
`Name` varchar(50)
,`Lastname` varchar(50)
,`Uname` varchar(50)
,`Cname` varchar(50)
,`Fname` varchar(50)
,`Dname` varchar(50)
,`CurName` varchar(50)
,`UserID` varchar(50)
);
-- --------------------------------------------------------

--
-- Table structure for table `purpose`
--

CREATE TABLE IF NOT EXISTS `purpose` (
  `Text` varchar(2000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resouces`
--

CREATE TABLE IF NOT EXISTS `resouces` (
  `Book` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `SheetImportance` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `SheetSuggestion` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `RID` int(10) NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`RID`, `Name`) VALUES
(0, 'admin'),
(1, 'teacher'),
(2, 'student');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `RoomNumber` int(50) NOT NULL,
  `Time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `search_table_view`
--
CREATE TABLE IF NOT EXISTS `search_table_view` (
`COID` varchar(50)
,`Name_EN` varchar(50)
,`Credit` varchar(10)
,`Fname` varchar(50)
,`Dname` varchar(50)
,`Uname` varchar(50)
,`Cname` varchar(50)
);
-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `SNumber` int(10) NOT NULL,
  `Student_type` int(11) NOT NULL,
  `COID` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`SNumber`, `Student_type`, `COID`) VALUES
(1, 4, '305433'),
(2, 4, '305453');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
  `Type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suboflearningoutcome`
--

CREATE TABLE IF NOT EXISTS `suboflearningoutcome` (
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `HowToTeach` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `HowToAssessment` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Level` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Subnumber` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subsection`
--

CREATE TABLE IF NOT EXISTS `subsection` (
  `Text` varchar(2000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE IF NOT EXISTS `syllabus` (
  `Make Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachdetail`
--

CREATE TABLE IF NOT EXISTS `teachdetail` (
  `Text` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachingplan`
--

CREATE TABLE IF NOT EXISTS `teachingplan` (
  `Number` int(10) NOT NULL,
  `Detial` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Lecture` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Lab` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `SelfLearning` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Activity` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Teacher` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tqf3`
--

CREATE TABLE IF NOT EXISTS `tqf3` (
  `TQF3ID` int(10) NOT NULL,
  `MakeDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE IF NOT EXISTS `university` (
  `Uname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `UID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`Uname`, `UID`) VALUES
('มหาวิทยาลัยเชียงใหม่', 111),
('มหาวิทยาลัยนเรศวร', 123);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `UserID` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Role` int(1) NOT NULL,
  `UID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Password`, `Name`, `Lastname`, `Role`, `UID`) VALUES
('222', '222', 'เดือนนะจ๊ะ', 'มาแว้วจ้า', 2, 123),
('aaa', 'aaa', 'teacher', 'abcdef', 1, 123),
('abc', '123456', 'tanapat', 'onsri', 2, 123),
('admin', 'admin', 'god', 'good', 0, 111);

-- --------------------------------------------------------

--
-- Stand-in structure for view `user_view`
--
CREATE TABLE IF NOT EXISTS `user_view` (
`UserID` varchar(50)
,`Password` varchar(50)
,`Name` varchar(50)
,`Lastname` varchar(50)
,`Status` varchar(50)
);
-- --------------------------------------------------------

--
-- Structure for view `course_view`
--
DROP TABLE IF EXISTS `course_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `course_view` AS select `co`.`COID` AS `ID`,`co`.`Name_EN` AS `Name`,`co`.`Credit` AS `Credit`,`s`.`SNumber` AS `Section`,`u`.`Name` AS `Firstname`,`u`.`Lastname` AS `Lastname`,`r`.`Name` AS `Status`,`u`.`UserID` AS `UserID` from ((((((((`course` `co` join `curriculum` `cur` on((`co`.`CurID` = `cur`.`CurID`))) join `department` `d` on((`d`.`DID` = `cur`.`DID`))) join `faculty` `f` on((`f`.`FID` = `d`.`FID`))) join `campus` `c` on((`c`.`CID` = `f`.`CID`))) join `university` `un` on((`un`.`UID` = `c`.`UID`))) join `section` `s` on((`co`.`COID` = `s`.`COID`))) join `user` `u` on((`u`.`UID` = `un`.`UID`))) join `role` `r` on((`u`.`Role` = `r`.`RID`)));

-- --------------------------------------------------------

--
-- Structure for view `profile_view`
--
DROP TABLE IF EXISTS `profile_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `profile_view` AS select `u`.`Name` AS `Name`,`u`.`Lastname` AS `Lastname`,`un`.`Uname` AS `Uname`,`c`.`Cname` AS `Cname`,`f`.`Fname` AS `Fname`,`d`.`Dname` AS `Dname`,`cur`.`CurName` AS `CurName`,`u`.`UserID` AS `UserID` from (((((`user` `u` join `university` `un`) join `campus` `c`) join `faculty` `f`) join `department` `d`) join `curriculum` `cur`) where (`u`.`UID` = `un`.`UID`);

-- --------------------------------------------------------

--
-- Structure for view `search_table_view`
--
DROP TABLE IF EXISTS `search_table_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `search_table_view` AS select `co`.`COID` AS `COID`,`co`.`Name_EN` AS `Name_EN`,`co`.`Credit` AS `Credit`,`f`.`Fname` AS `Fname`,`d`.`Dname` AS `Dname`,`un`.`Uname` AS `Uname`,`c`.`Cname` AS `Cname` from (((((`course` `co` join `curriculum` `cur` on((`co`.`CurID` = `cur`.`CurID`))) join `department` `d` on((`d`.`DID` = `cur`.`DID`))) join `faculty` `f` on((`f`.`FID` = `d`.`FID`))) join `campus` `c` on((`c`.`CID` = `f`.`CID`))) join `university` `un` on((`un`.`UID` = `c`.`UID`)));

-- --------------------------------------------------------

--
-- Structure for view `user_view`
--
DROP TABLE IF EXISTS `user_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_view` AS select `u`.`UserID` AS `UserID`,`u`.`Password` AS `Password`,`u`.`Name` AS `Name`,`u`.`Lastname` AS `Lastname`,`r`.`Name` AS `Status` from (`user` `u` join `role` `r` on((`u`.`Role` = `r`.`RID`)));

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campus`
--
ALTER TABLE `campus`
 ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `co-requisite`
--
ALTER TABLE `co-requisite`
 ADD PRIMARY KEY (`CORID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
 ADD PRIMARY KEY (`COID`);

--
-- Indexes for table `curriculum`
--
ALTER TABLE `curriculum`
 ADD PRIMARY KEY (`CurID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
 ADD PRIMARY KEY (`DID`);

--
-- Indexes for table `devoflearningoutcome`
--
ALTER TABLE `devoflearningoutcome`
 ADD PRIMARY KEY (`DevID`);

--
-- Indexes for table `evaluateandimprove`
--
ALTER TABLE `evaluateandimprove`
 ADD PRIMARY KEY (`EIID`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
 ADD PRIMARY KEY (`FID`);

--
-- Indexes for table `objective&purpose`
--
ALTER TABLE `objective&purpose`
 ADD PRIMARY KEY (`ObjID`);

--
-- Indexes for table `pre-requisite`
--
ALTER TABLE `pre-requisite`
 ADD PRIMARY KEY (`PreID`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
 ADD PRIMARY KEY (`RoomNumber`);

--
-- Indexes for table `suboflearningoutcome`
--
ALTER TABLE `suboflearningoutcome`
 ADD PRIMARY KEY (`Subnumber`);

--
-- Indexes for table `tqf3`
--
ALTER TABLE `tqf3`
 ADD PRIMARY KEY (`TQF3ID`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
 ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`UserID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
