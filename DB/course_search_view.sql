-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2014 at 11:25 AM
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
-- Structure for view `course_search_view`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `course_search_view` AS select `co`.`ID` AS `CourseID`,`co`.`Name_EN` AS `CourseName`,`s`.`Number` AS `Section`,`co`.`Semester` AS `Semester`,`cur`.`Name` AS `Curriculum`,`d`.`Name` AS `Department`,`f`.`Name` AS `Faculty`,`u`.`Name` AS `University` from (((((((`tqf3` `t` join `section` `s` on((`t`.`SID` = `s`.`ID`))) join `course` `co` on((`s`.`CID` = `co`.`ID`))) join `curriculum` `cur` on((`co`.`CID` = `cur`.`ID`))) join `department` `d` on((`cur`.`DID` = `d`.`ID`))) join `faculty` `f` on((`d`.`FID` = `f`.`ID`))) join `campus` `ca` on((`f`.`CID` = `ca`.`ID`))) join `university` `u` on((`ca`.`UID` = `u`.`ID`)));

--
-- VIEW  `course_search_view`
-- Data: None
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
