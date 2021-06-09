-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2021 at 11:13 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `chemsem1`
--

CREATE TABLE `chemsem1` (
  `Name` varchar(50) NOT NULL,
  `PHYSICS` int(11) NOT NULL,
  `CHEMISTRY` int(11) NOT NULL,
  `M1` int(11) NOT NULL,
  `CP` int(11) NOT NULL,
  `EGR` int(11) NOT NULL,
  `ETT` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chemsem1`
--

INSERT INTO `chemsem1` (`Name`, `PHYSICS`, `CHEMISTRY`, `M1`, `CP`, `EGR`, `ETT`, `EXTRA`, `TOTAL`, `FUZZY`, `GRADE`, `REMARKS`, `CGPA`) VALUES
('Anchal', 79, 82, 77, 82, 71, 73, 0, 464, 0.77, 'A', 'Very Good', 7.7),
('Ankush', 75, 80, 74, 73, 80, 75, 0, 435, 0.75, 'A', 'Very Good', 7.5),
('Avantika', 80, 75, 80, 74, 86, 90, 0, 570, 0.82, 'A', 'Very Good', 8.2),
('Ankush', 75, 80, 74, 73, 80, 75, 0, 435, 0.75, 'A', 'Very Good', 7.5),
('Avantika', 80, 75, 80, 74, 86, 90, 0, 570, 0.82, 'A', 'Very Good', 8.2),
('sanyukta', 85, 88, 73, 80, 71, 77, 80, 553, 0.79, 'A', 'Very Good', 7.9);

-- --------------------------------------------------------

--
-- Table structure for table `chemsem2`
--

CREATE TABLE `chemsem2` (
  `Name` varchar(50) NOT NULL,
  `EEE` int(11) NOT NULL,
  `LC` int(11) NOT NULL,
  `M2` int(11) NOT NULL,
  `AM` int(11) NOT NULL,
  `DT` int(11) NOT NULL,
  `LC2` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chemsem2`
--

INSERT INTO `chemsem2` (`Name`, `EEE`, `LC`, `M2`, `AM`, `DT`, `LC2`, `EXTRA`, `TOTAL`, `FUZZY`, `GRADE`, `REMARKS`, `CGPA`) VALUES
('Suraj', 80, 75, 80, 82, 84, 75, 0, 580, 0.71, 'A', 'Very Good', 7.1),
('Sanjay ', 80, 75, 85, 90, 74, 62, 0, 530, 0.68, 'B', 'Good', 6.8),
('Ganesh', 60, 58, 65, 61, 62, 55, 0, 500, 0.62, 'B', 'Good', 6.2),
('sanyukta', 82, 79, 76, 76, 85, 73, 75, 545, 0.78, 'A', 'Very Good', 7.8);

-- --------------------------------------------------------

--
-- Table structure for table `chemsem3`
--

CREATE TABLE `chemsem3` (
  `Name` varchar(50) NOT NULL,
  `MEB` int(11) NOT NULL,
  `CEO` int(11) NOT NULL,
  `PROTOTYPING` int(11) NOT NULL,
  `PSYCHOLOGY` int(11) NOT NULL,
  `EI` int(11) NOT NULL,
  `ME` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chemsem4`
--

CREATE TABLE `chemsem4` (
  `Name` varchar(50) NOT NULL,
  `AM` int(11) NOT NULL,
  `EVS` int(11) NOT NULL,
  `MT` int(11) NOT NULL,
  `AC` int(11) NOT NULL,
  `MINOR_PROJECT` int(11) NOT NULL,
  `SE` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chemsem5`
--

CREATE TABLE `chemsem5` (
  `Name` varchar(50) NOT NULL,
  `CET` int(11) NOT NULL,
  `HT` int(11) NOT NULL,
  `MT` int(11) NOT NULL,
  `ASPEN` int(11) NOT NULL,
  `PMAS` int(11) NOT NULL,
  `PS` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chemsem6`
--

CREATE TABLE `chemsem6` (
  `Name` varchar(50) NOT NULL,
  `SP` int(11) NOT NULL,
  `CRE` int(11) NOT NULL,
  `CED` int(11) NOT NULL,
  `MINI_PROJECT` int(11) NOT NULL,
  `PE` int(11) NOT NULL,
  `PM` int(11) NOT NULL,
  `BOE` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chemsem7`
--

CREATE TABLE `chemsem7` (
  `Name` varchar(50) NOT NULL,
  `PDCI` int(11) NOT NULL,
  `SDL` int(11) NOT NULL,
  `PROJECT1` int(11) NOT NULL,
  `INTERNSHIP` int(11) NOT NULL,
  `BE` int(11) NOT NULL,
  `PDSAO` int(11) NOT NULL,
  `EE` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chemsem8`
--

CREATE TABLE `chemsem8` (
  `Name` varchar(50) NOT NULL,
  `CPT` int(11) NOT NULL,
  `PROJECT2` int(11) NOT NULL,
  `BT` int(11) NOT NULL,
  `PII` int(11) NOT NULL,
  `SOCIOLOGY` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `civilsem1`
--

CREATE TABLE `civilsem1` (
  `Name` varchar(50) NOT NULL,
  `PHYSICS` int(11) NOT NULL,
  `CHEMISTRY` int(11) NOT NULL,
  `M1` int(11) NOT NULL,
  `CP` int(11) NOT NULL,
  `EGR` int(11) NOT NULL,
  `ETT` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `civilsem2`
--

CREATE TABLE `civilsem2` (
  `Name` varchar(50) NOT NULL,
  `EEE` int(11) NOT NULL,
  `LC` int(11) NOT NULL,
  `M2` int(11) NOT NULL,
  `AM` int(11) NOT NULL,
  `DT` int(11) NOT NULL,
  `LC2` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `civilsem3`
--

CREATE TABLE `civilsem3` (
  `Name` varchar(50) NOT NULL,
  `AM` int(11) NOT NULL,
  `EVS` int(11) NOT NULL,
  `CMS` int(11) NOT NULL,
  `GET` int(11) NOT NULL,
  `SE` int(11) NOT NULL,
  `PROTOTYPING` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `civilsem4`
--

CREATE TABLE `civilsem4` (
  `Name` varchar(50) NOT NULL,
  `BDAC` int(11) NOT NULL,
  `GE` int(11) NOT NULL,
  `MINOR_PROJECT` int(11) NOT NULL,
  `PSYCHOLOGY` int(11) NOT NULL,
  `EI` int(11) NOT NULL,
  `ME` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `civilsem5`
--

CREATE TABLE `civilsem5` (
  `Name` varchar(50) NOT NULL,
  `MF` int(11) NOT NULL,
  `SA` int(11) NOT NULL,
  `CT` int(11) NOT NULL,
  `ETABS` int(11) NOT NULL,
  `CPM` int(11) NOT NULL,
  `PM` int(11) NOT NULL,
  `BOE` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `civilsem6`
--

CREATE TABLE `civilsem6` (
  `Name` varchar(50) NOT NULL,
  `DS` int(11) NOT NULL,
  `TE` int(11) NOT NULL,
  `WRE` int(11) NOT NULL,
  `MINI_PROJECT` int(11) NOT NULL,
  `ORT` int(11) NOT NULL,
  `PS` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `civilsem7`
--

CREATE TABLE `civilsem7` (
  `Name` varchar(50) NOT NULL,
  `DWSE` int(11) NOT NULL,
  `PROJECT1` int(11) NOT NULL,
  `UTP` int(11) NOT NULL,
  `INTERNSHIP` int(11) NOT NULL,
  `BS` int(11) NOT NULL,
  `FM` int(11) NOT NULL,
  `EE` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `civilsem8`
--

CREATE TABLE `civilsem8` (
  `Name` varchar(50) NOT NULL,
  `EC` int(11) NOT NULL,
  `PROJECT2` int(11) NOT NULL,
  `ANPCM` int(11) NOT NULL,
  `SMC` int(11) NOT NULL,
  `SOCIOLOGY` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `compsem1`
--

CREATE TABLE `compsem1` (
  `Name` varchar(50) NOT NULL,
  `Physics` int(3) NOT NULL,
  `Chemistry` int(3) NOT NULL,
  `M1` int(3) NOT NULL,
  `CP` int(3) NOT NULL,
  `EGR` int(3) NOT NULL,
  `ETT` int(3) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `Total` int(3) NOT NULL,
  `Fuzzy` float NOT NULL,
  `Grade` varchar(1) NOT NULL,
  `Remark` varchar(15) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compsem1`
--

INSERT INTO `compsem1` (`Name`, `Physics`, `Chemistry`, `M1`, `CP`, `EGR`, `ETT`, `EXTRA`, `Total`, `Fuzzy`, `Grade`, `Remark`, `CGPA`) VALUES
('Aakanksha', 70, 75, 80, 75, 70, 85, 75, 530, 0.76, 'A', 'Very Good', 7.57),
('Abdul', 60, 60, 50, 41, 42, 48, 49, 350, 0.5, 'B', 'Good', 5),
('Adil', 50, 40, 50, 47, 41, 40, 42, 310, 0.44, 'C', 'Satisfactory', 4.43),
('Ankush', 65, 60, 50, 45, 50, 60, 80, 410, 0.58, 'B', 'Good', 5.8),
('ashwin', 88, 79, 73, 74, 85, 87, 60, 546, 0.78, 'A', 'Very Good', 7.8),
('Avantika', 60, 61, 62, 60, 65, 61, 60, 429, 0.61, 'A', 'Very Good', 6.1),
('Awaiz', 60, 50, 70, 60, 52, 51, 40, 383, 0.55, 'B', 'Good', 5.47),
('Ekta', 40, 42, 47, 45, 48, 49, 41, 312, 0.45, 'C', 'Satisfactory', 4.46),
('Ganesh', 40, 41, 42, 45, 40, 41, 40, 289, 0.41, 'C', 'Satisfactory', 4.1),
('Gaurav', 60, 65, 60, 51, 50, 42, 50, 378, 0.54, 'B', 'Good', 5.4),
('Kartik', 50, 60, 69, 67, 65, 60, 62, 433, 0.62, 'A', 'Very Good', 6.19),
('Mayank', 65, 67, 62, 60, 65, 68, 61, 448, 0.64, 'A', 'Very Good', 6.4),
('Mitul', 60, 65, 67, 68, 69, 67, 65, 461, 0.66, 'A', 'Very Good', 6.59),
('Naitik', 42, 48, 47, 49, 40, 42, 41, 309, 0.44, 'C', 'Satisfactory', 4.41),
('Nayan', 60, 50, 45, 60, 62, 61, 58, 396, 0.57, 'B', 'Good', 5.66),
('Neha', 40, 52, 41, 40, 42, 45, 41, 301, 0.43, 'C', 'Satisfactory', 4.3),
('Niharika', 41, 42, 47, 46, 45, 41, 50, 312, 0.45, 'C', 'Satisfactory', 4.46),
('RAHUL', 80, 79, 81, 83, 84, 84, 70, 560, 0.8, 'A', 'Very Good', 8),
('Rohit Paldiwal', 55, 68, 64, 64, 63, 63, 50, 427, 0.61, 'A', 'Very Good', 6.1),
('Sagarika', 42, 45, 47, 45, 41, 60, 45, 325, 0.46, 'C', 'Satisfactory', 4.64),
('Saksham', 60, 50, 68, 70, 75, 74, 70, 467, 0.67, 'A', 'Very Good', 6.67),
('Sakshi', 41, 45, 47, 40, 40, 47, 41, 301, 0.43, 'C', 'Satisfactory', 4.3),
('Sarvesh', 70, 80, 70, 80, 65, 80, 70, 515, 0.74, 'A', 'Very Good', 7.36),
('Saurabh', 60, 50, 52, 58, 50, 60, 40, 370, 0.53, 'B', 'Good', 5.29),
('Sham', 60, 58, 62, 68, 50, 47, 60, 405, 0.58, 'B', 'Good', 5.79),
('Shankar', 70, 75, 60, 58, 60, 65, 61, 449, 0.64, 'A', 'Very Good', 6.4),
('Shardul', 88, 88, 78, 68, 85, 68, 40, 515, 0.73, 'A', 'Very Good', 7.3),
('Shivangi', 75, 75, 85, 90, 85, 85, 90, 585, 0.84, 'A', 'Very Good', 8.36),
('Shubham', 70, 74, 80, 74, 80, 90, 40, 508, 0.73, 'A', 'Very Good', 7.26),
('Suraj', 60, 65, 62, 61, 65, 60, 62, 435, 0.62, 'A', 'Very Good', 6.2),
('Swapnil', 65, 68, 69, 61, 62, 61, 68, 454, 0.65, 'A', 'Very Good', 6.49),
('Yash', 70, 75, 58, 40, 65, 40, 48, 396, 0.57, 'B', 'Good', 5.66);

-- --------------------------------------------------------

--
-- Table structure for table `compsem2`
--

CREATE TABLE `compsem2` (
  `Name` varchar(50) NOT NULL,
  `EEE` int(11) NOT NULL,
  `LC` int(11) NOT NULL,
  `M2` int(11) NOT NULL,
  `AM` int(11) NOT NULL,
  `DT` int(11) NOT NULL,
  `LC2` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(20) NOT NULL,
  `REMARK` varchar(20) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compsem2`
--

INSERT INTO `compsem2` (`Name`, `EEE`, `LC`, `M2`, `AM`, `DT`, `LC2`, `EXTRA`, `TOTAL`, `FUZZY`, `GRADE`, `REMARK`, `CGPA`) VALUES
('NIKUNJ', 79, 82, 82, 84, 83, 72, 0, 481, 0.8, 'A', 'Very Good', 8),
('Samarpan', 55, 85, 78, 89, 81, 84, 0, 471, 0.79, 'A', 'Very Good', 7.9);

-- --------------------------------------------------------

--
-- Table structure for table `compsem3`
--

CREATE TABLE `compsem3` (
  `Name` varchar(50) NOT NULL,
  `AM` int(11) NOT NULL,
  `EVS` int(11) NOT NULL,
  `DFS` int(11) NOT NULL,
  `DEM` int(11) NOT NULL,
  `SE` int(11) NOT NULL,
  `PROTOTYPING` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARK` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compsem3`
--

INSERT INTO `compsem3` (`Name`, `AM`, `EVS`, `DFS`, `DEM`, `SE`, `PROTOTYPING`, `EXTRA`, `TOTAL`, `FUZZY`, `GRADE`, `REMARK`, `CGPA`) VALUES
('RAHUL', 70, 79, 79, 73, 81, 80, 0, 462, 0.77, 'A', 'Very Good', 7.7),
('Samarpan', 70, 76, 76, 83, 85, 77, 0, 466, 0.78, 'A', 'Very Good', 7.8);

-- --------------------------------------------------------

--
-- Table structure for table `compsem4`
--

CREATE TABLE `compsem4` (
  `NAME` varchar(50) NOT NULL,
  `DSGT` int(11) NOT NULL,
  `DBMS` int(11) NOT NULL,
  `MINOR_PROJECT` int(11) NOT NULL,
  `PSYCHOLOGY` int(11) NOT NULL,
  `EI` int(11) NOT NULL,
  `ME` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARK` varchar(11) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compsem4`
--

INSERT INTO `compsem4` (`NAME`, `DSGT`, `DBMS`, `MINOR_PROJECT`, `PSYCHOLOGY`, `EI`, `ME`, `EXTRA`, `TOTAL`, `FUZZY`, `GRADE`, `REMARK`, `CGPA`) VALUES
('RAHUL', 79, 79, 79, 86, 81, 80, 0, 483, 0.8, 'A', 'Very Good', 8),
('Samarpan', 98, 73, 77, 76, 78, 80, 0, 481, 0.8, 'A', 'Very Good', 8);

-- --------------------------------------------------------

--
-- Table structure for table `compsem5`
--

CREATE TABLE `compsem5` (
  `Name` varchar(50) NOT NULL,
  `OS` int(11) NOT NULL,
  `COA` int(11) NOT NULL,
  `TOC` int(11) NOT NULL,
  `CGG` int(11) NOT NULL,
  `PYTHON` int(11) NOT NULL,
  `PM` int(11) NOT NULL,
  `CSS` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(50) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compsem5`
--

INSERT INTO `compsem5` (`Name`, `OS`, `COA`, `TOC`, `CGG`, `PYTHON`, `PM`, `CSS`, `EXTRA`, `TOTAL`, `FUZZY`, `GRADE`, `REMARKS`, `CGPA`) VALUES
('RAHUL', 82, 79, 76, 78, 76, 75, 81, 0, 547, 0.78, 'A', 'Very Good', 7.8),
('Samarpan', 79, 79, 76, 74, 81, 62, 72, 0, 523, 0.75, 'A', 'Very Good', 7.5);

-- --------------------------------------------------------

--
-- Table structure for table `compsem6`
--

CREATE TABLE `compsem6` (
  `Name` varchar(50) NOT NULL,
  `DAA` int(11) NOT NULL,
  `CD` int(11) NOT NULL,
  `CN` int(11) NOT NULL,
  `MINI_PROJECT` int(11) NOT NULL,
  `PS` int(11) NOT NULL,
  `BOE` int(11) NOT NULL,
  `CS` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(20) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compsem6`
--

INSERT INTO `compsem6` (`Name`, `DAA`, `CD`, `CN`, `MINI_PROJECT`, `PS`, `BOE`, `CS`, `EXTRA`, `TOTAL`, `FUZZY`, `GRADE`, `REMARKS`, `CGPA`) VALUES
('RAHUL', 70, 82, 83, 81, 81, 75, 83, 0, 555, 0.79, 'A', 'Very Good', 7.9),
('Samarpan', 70, 88, 76, 80, 79, 82, 79, 0, 553, 0.79, 'A', 'Very Good', 7.9),
('Samarpan', 58, 79, 77, 88, 81, 74, 68, 0, 523, 0.75, 'A', 'Very Good', 7.5);

-- --------------------------------------------------------

--
-- Table structure for table `compsem7`
--

CREATE TABLE `compsem7` (
  `Name` varchar(50) NOT NULL,
  `SETQA` int(11) NOT NULL,
  `JAVA` int(11) NOT NULL,
  `PROJECT1` int(11) NOT NULL,
  `INTERNSHIP` int(11) NOT NULL,
  `OSD` int(11) NOT NULL,
  `EE` int(11) NOT NULL,
  `EHCL` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` int(11) NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(11) NOT NULL,
  `CGPA` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compsem7`
--

INSERT INTO `compsem7` (`Name`, `SETQA`, `JAVA`, `PROJECT1`, `INTERNSHIP`, `OSD`, `EE`, `EHCL`, `EXTRA`, `TOTAL`, `FUZZY`, `GRADE`, `REMARKS`, `CGPA`) VALUES
('RAHUL', 73, 74, 88, 69, 79, 71, 75, 0, 529, 1, 'A', 'Very Good', 8),
('Samarpan', 58, 76, 74, 68, 69, 70, 84, 0, 497, 1, 'A', 'Very Good', 7),
('Samarpan', 82, 76, 81, 71, 66, 0, 0, 0, 376, 1, 'A', 'Very Good', 8);

-- --------------------------------------------------------

--
-- Table structure for table `compsem8`
--

CREATE TABLE `compsem8` (
  `Name` varchar(50) NOT NULL,
  `HCI` int(11) NOT NULL,
  `PROJECT2` int(11) NOT NULL,
  `CV` int(11) NOT NULL,
  `SOCIOLOGY` int(11) NOT NULL,
  `DF` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(11) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compsem8`
--

INSERT INTO `compsem8` (`Name`, `HCI`, `PROJECT2`, `CV`, `SOCIOLOGY`, `DF`, `EXTRA`, `TOTAL`, `FUZZY`, `GRADE`, `REMARKS`, `CGPA`) VALUES
('RAHUL', 55, 88, 77, 81, 84, 0, 384, 0.77, 'A', 'Very Good', 7.7),
('Samarpan', 82, 76, 81, 71, 66, 0, 376, 0.75, 'A', 'Very Good', 7.5);

-- --------------------------------------------------------

--
-- Table structure for table `elecsem1`
--

CREATE TABLE `elecsem1` (
  `Name` varchar(50) NOT NULL,
  `PHYSICS` int(11) NOT NULL,
  `CHEMISTRY` int(11) NOT NULL,
  `M1` int(11) NOT NULL,
  `CP` int(11) NOT NULL,
  `EGR` int(11) NOT NULL,
  `ETT` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `elecsem1`
--

INSERT INTO `elecsem1` (`Name`, `PHYSICS`, `CHEMISTRY`, `M1`, `CP`, `EGR`, `ETT`, `EXTRA`, `TOTAL`, `FUZZY`, `GRADE`, `REMARKS`, `CGPA`) VALUES
('Sarthak', 67, 70, 62, 64, 65, 59, 0, 387, 0.64, 'A', 'Very Good', 6.4);

-- --------------------------------------------------------

--
-- Table structure for table `elecsem2`
--

CREATE TABLE `elecsem2` (
  `Name` varchar(50) NOT NULL,
  `EEE` int(11) NOT NULL,
  `LC` int(11) NOT NULL,
  `M2` int(11) NOT NULL,
  `AM` int(11) NOT NULL,
  `DT` int(11) NOT NULL,
  `LC2` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `elecsem2`
--

INSERT INTO `elecsem2` (`Name`, `EEE`, `LC`, `M2`, `AM`, `DT`, `LC2`, `EXTRA`, `TOTAL`, `FUZZY`, `GRADE`, `REMARKS`, `CGPA`) VALUES
('Sarthak', 55, 68, 71, 61, 65, 71, 0, 391, 0.65, 'A', 'Very Good', 6.5);

-- --------------------------------------------------------

--
-- Table structure for table `elecsem3`
--

CREATE TABLE `elecsem3` (
  `Name` varchar(50) NOT NULL,
  `AM` int(11) NOT NULL,
  `EVS` int(11) NOT NULL,
  `SE` int(11) NOT NULL,
  `AE` int(11) NOT NULL,
  `PROTOTYPING` int(11) NOT NULL,
  `ADC` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `elecsem3`
--

INSERT INTO `elecsem3` (`Name`, `AM`, `EVS`, `SE`, `AE`, `PROTOTYPING`, `ADC`, `EXTRA`, `TOTAL`, `FUZZY`, `GRADE`, `REMARKS`, `CGPA`) VALUES
('Sarthak', 55, 67, 71, 62, 63, 74, 0, 392, 0.65, 'A', 'Very Good', 6.5);

-- --------------------------------------------------------

--
-- Table structure for table `elecsem4`
--

CREATE TABLE `elecsem4` (
  `Name` varchar(11) NOT NULL,
  `ADC` int(11) NOT NULL,
  `CT` int(11) NOT NULL,
  `MINOR_PROJECT` int(11) NOT NULL,
  `PSYCHOLOGY` int(11) NOT NULL,
  `EI` int(11) NOT NULL,
  `ME` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `elecsem5`
--

CREATE TABLE `elecsem5` (
  `Name` varchar(50) NOT NULL,
  `CS` int(11) NOT NULL,
  `GP` int(11) NOT NULL,
  `ESD` int(11) NOT NULL,
  `CN` int(11) NOT NULL,
  `ROBOTICS` int(11) NOT NULL,
  `PM` int(11) NOT NULL,
  `BOE` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` int(1) NOT NULL,
  `REMARKS` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `elecsem6`
--

CREATE TABLE `elecsem6` (
  `Name` varchar(50) NOT NULL,
  `RTOS` int(11) NOT NULL,
  `DSP` int(11) NOT NULL,
  `PEA` int(11) NOT NULL,
  `MINI_PROJECT` int(11) NOT NULL,
  `KADOR` int(11) NOT NULL,
  `PS` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(11) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `elecsem7`
--

CREATE TABLE `elecsem7` (
  `Name` varchar(50) NOT NULL,
  `VLSI` int(11) NOT NULL,
  `JAVA` int(11) NOT NULL,
  `ML` int(11) NOT NULL,
  `PROJECT1` int(11) NOT NULL,
  `INTERNSHIP` int(11) NOT NULL,
  `RV` int(11) NOT NULL,
  `SOCIOLOGY` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `elecsem8`
--

CREATE TABLE `elecsem8` (
  `Name` varchar(50) NOT NULL,
  `CE` int(11) NOT NULL,
  `PROJECT2` int(11) NOT NULL,
  `BE` int(11) NOT NULL,
  `IHPR` int(11) NOT NULL,
  `EE` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `entcsem1`
--

CREATE TABLE `entcsem1` (
  `Name` varchar(50) NOT NULL,
  `PHYSICS` int(11) NOT NULL,
  `CHEMISTRY` int(11) NOT NULL,
  `M1` int(11) NOT NULL,
  `CP` int(11) NOT NULL,
  `EGR` int(11) NOT NULL,
  `ETT` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(20) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entcsem1`
--

INSERT INTO `entcsem1` (`Name`, `PHYSICS`, `CHEMISTRY`, `M1`, `CP`, `EGR`, `ETT`, `EXTRA`, `TOTAL`, `FUZZY`, `GRADE`, `REMARKS`, `CGPA`) VALUES
('Sneha', 55, 79, 77, 74, 84, 80, 0, 448, 0.75, 'A', 'Very Good', 7.5),
('Mayur', 85, 82, 74, 78, 76, 73, 0, 467, 0.78, 'A', 'Very Good', 7.8);

-- --------------------------------------------------------

--
-- Table structure for table `entcsem2`
--

CREATE TABLE `entcsem2` (
  `Name` varchar(50) NOT NULL,
  `EEE` int(11) NOT NULL,
  `LC` int(11) NOT NULL,
  `M2` int(11) NOT NULL,
  `AM` int(11) NOT NULL,
  `DT` int(11) NOT NULL,
  `LC2` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(20) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entcsem2`
--

INSERT INTO `entcsem2` (`Name`, `EEE`, `LC`, `M2`, `AM`, `DT`, `LC2`, `EXTRA`, `TOTAL`, `FUZZY`, `GRADE`, `REMARKS`, `CGPA`) VALUES
('Sneha', 77, 90, 79, 80, 71, 77, 0, 473, 0.79, 'A', 'Very Good', 7.9),
('Mayur', 73, 70, 73, 77, 67, 69, 0, 428, 0.71, 'A', 'Very Good', 7.1);

-- --------------------------------------------------------

--
-- Table structure for table `entcsem3`
--

CREATE TABLE `entcsem3` (
  `Name` varchar(50) NOT NULL,
  `AM` int(11) NOT NULL,
  `EVS` int(11) NOT NULL,
  `SE` int(11) NOT NULL,
  `AE` int(11) NOT NULL,
  `DSA` int(11) NOT NULL,
  `PROTOTYPING` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(11) NOT NULL,
  `REMARKS` varchar(11) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entcsem3`
--

INSERT INTO `entcsem3` (`Name`, `AM`, `EVS`, `SE`, `AE`, `DSA`, `PROTOTYPING`, `EXTRA`, `TOTAL`, `FUZZY`, `GRADE`, `REMARKS`, `CGPA`) VALUES
('Mayur', 82, 88, 82, 72, 79, 75, 0, 477, 0.79, 'A', 'Very Good', 7.9);

-- --------------------------------------------------------

--
-- Table structure for table `entcsem4`
--

CREATE TABLE `entcsem4` (
  `Name` varchar(50) NOT NULL,
  `SS` int(11) NOT NULL,
  `NAT` int(11) NOT NULL,
  `MINOR_PROJECT` int(11) NOT NULL,
  `PSYCHOLOGY` int(11) NOT NULL,
  `EI` int(11) NOT NULL,
  `ME` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entcsem4`
--

INSERT INTO `entcsem4` (`Name`, `SS`, `NAT`, `MINOR_PROJECT`, `PSYCHOLOGY`, `EI`, `ME`, `EXTRA`, `TOTAL`, `FUZZY`, `GRADE`, `REMARKS`, `CGPA`) VALUES
('Mayur', 70, 81, 76, 78, 84, 76, 0, 464, 0.77, 'A', 'Very Good', 7.7);

-- --------------------------------------------------------

--
-- Table structure for table `entcsem5`
--

CREATE TABLE `entcsem5` (
  `Name` varchar(50) NOT NULL,
  `CS` int(11) NOT NULL,
  `AC` int(11) NOT NULL,
  `MA` int(11) NOT NULL,
  `ESP` int(11) NOT NULL,
  `EL` int(11) NOT NULL,
  `PM` int(11) NOT NULL,
  `BOE` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entcsem5`
--

INSERT INTO `entcsem5` (`Name`, `CS`, `AC`, `MA`, `ESP`, `EL`, `PM`, `BOE`, `EXTRA`, `TOTAL`, `FUZZY`, `GRADE`, `REMARKS`, `CGPA`) VALUES
('Mayur', 78, 76, 73, 71, 75, 77, 74, 0, 524, 0.75, 'A', 'Very Good', 7.5);

-- --------------------------------------------------------

--
-- Table structure for table `entcsem6`
--

CREATE TABLE `entcsem6` (
  `Name` varchar(50) NOT NULL,
  `DC` int(11) NOT NULL,
  `DSP` int(11) NOT NULL,
  `ATD` int(11) NOT NULL,
  `MINI_PROJECT` int(11) NOT NULL,
  `EP` int(11) NOT NULL,
  `PS` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entcsem6`
--

INSERT INTO `entcsem6` (`Name`, `DC`, `DSP`, `ATD`, `MINI_PROJECT`, `EP`, `PS`, `EXTRA`, `TOTAL`, `FUZZY`, `GRADE`, `REMARKS`, `CGPA`) VALUES
('Mayur', 77, 73, 72, 64, 74, 64, 0, 424, 0.71, 'A', 'Very Good', 7.1);

-- --------------------------------------------------------

--
-- Table structure for table `entcsem7`
--

CREATE TABLE `entcsem7` (
  `Name` varchar(50) NOT NULL,
  `VLSI_DESIGN` int(11) NOT NULL,
  `PROJECT2` int(11) NOT NULL,
  `JAVA` int(11) NOT NULL,
  `INTERNSHIP` int(11) NOT NULL,
  `ML` int(11) NOT NULL,
  `SOC_ARCHITECTURE` int(11) NOT NULL,
  `SOCIOLOGY` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(11) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entcsem7`
--

INSERT INTO `entcsem7` (`Name`, `VLSI_DESIGN`, `PROJECT2`, `JAVA`, `INTERNSHIP`, `ML`, `SOC_ARCHITECTURE`, `SOCIOLOGY`, `EXTRA`, `TOTAL`, `FUZZY`, `GRADE`, `REMARKS`, `CGPA`) VALUES
('Mayur', 70, 85, 76, 73, 66, 70, 65, 0, 505, 0.72, 'A', 'Very Good', 7.2);

-- --------------------------------------------------------

--
-- Table structure for table `entcsem8`
--

CREATE TABLE `entcsem8` (
  `Name` varchar(50) NOT NULL,
  `ACS` int(11) NOT NULL,
  `RTES` int(11) NOT NULL,
  `AI` int(11) NOT NULL,
  `EE` int(11) NOT NULL,
  `PROJECT2` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(11) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entcsem8`
--

INSERT INTO `entcsem8` (`Name`, `ACS`, `RTES`, `AI`, `EE`, `PROJECT2`, `EXTRA`, `TOTAL`, `FUZZY`, `GRADE`, `REMARKS`, `CGPA`) VALUES
('Mayur', 67, 74, 77, 71, 65, 0, 354, 0.71, 'A', 'Very Good', 7.1);

-- --------------------------------------------------------

--
-- Table structure for table `itsem1`
--

CREATE TABLE `itsem1` (
  `Name` varchar(50) NOT NULL,
  `Physics` int(11) NOT NULL,
  `Chemistry` int(11) NOT NULL,
  `M1` int(11) NOT NULL,
  `CP` int(11) NOT NULL,
  `EGR` int(11) NOT NULL,
  `ETT` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(50) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(11) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `itsem2`
--

CREATE TABLE `itsem2` (
  `Name` varchar(50) NOT NULL,
  `EEE` int(11) NOT NULL,
  `LC` int(11) NOT NULL,
  `M2` int(11) NOT NULL,
  `AM` int(11) NOT NULL,
  `DT` int(11) NOT NULL,
  `LC2` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARK` varchar(11) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `itsem3`
--

CREATE TABLE `itsem3` (
  `Name` varchar(50) NOT NULL,
  `CN` int(11) NOT NULL,
  `EI` int(11) NOT NULL,
  `ME` int(11) NOT NULL,
  `OOT` int(11) NOT NULL,
  `PROTOTYPING` int(11) NOT NULL,
  `PSYCHOLOGY` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARK` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `itsem4`
--

CREATE TABLE `itsem4` (
  `Name` varchar(50) NOT NULL,
  `AM` int(11) NOT NULL,
  `DS` int(11) NOT NULL,
  `MINOR_PROJECT` int(11) NOT NULL,
  `DBMS` int(11) NOT NULL,
  `EVS` int(11) NOT NULL,
  `SE` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARK` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `itsem5`
--

CREATE TABLE `itsem5` (
  `Name` varchar(50) NOT NULL,
  `AI` int(11) NOT NULL,
  `CT` int(11) NOT NULL,
  `INTERNSHIP` int(11) NOT NULL,
  `ML` int(11) NOT NULL,
  `BOE` int(11) NOT NULL,
  `OS` int(11) NOT NULL,
  `WT` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARK` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `itsem6`
--

CREATE TABLE `itsem6` (
  `Name` varchar(50) NOT NULL,
  `CI` int(11) NOT NULL,
  `CSA` int(11) NOT NULL,
  `MAD` int(11) NOT NULL,
  `ML` int(11) NOT NULL,
  `PS` int(11) NOT NULL,
  `MINI_PROJECT` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARK` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `itsem7`
--

CREATE TABLE `itsem7` (
  `Name` varchar(50) NOT NULL,
  `SETQA` int(11) NOT NULL,
  `OSA` int(11) NOT NULL,
  `EHCL` int(11) NOT NULL,
  `EE` int(11) NOT NULL,
  `ADV_JAVA` int(11) NOT NULL,
  `PROJECT_1` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARK` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `itsem8`
--

CREATE TABLE `itsem8` (
  `Name` varchar(50) NOT NULL,
  `DEM` int(11) NOT NULL,
  `DS` int(11) NOT NULL,
  `DF` int(11) NOT NULL,
  `SOCIOLOGY` int(11) NOT NULL,
  `PROJECT_2` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARK` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mechsem1`
--

CREATE TABLE `mechsem1` (
  `Name` varchar(50) NOT NULL,
  `PHYSICS` int(11) NOT NULL,
  `CHEMISTRY` int(11) NOT NULL,
  `M1` int(11) NOT NULL,
  `CP` int(11) NOT NULL,
  `EGR` int(11) NOT NULL,
  `ETT` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mechsem2`
--

CREATE TABLE `mechsem2` (
  `Name` varchar(50) NOT NULL,
  `EEE` int(11) NOT NULL,
  `LC` int(11) NOT NULL,
  `M2` int(11) NOT NULL,
  `AM` int(11) NOT NULL,
  `DT` int(11) NOT NULL,
  `LC2` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mechsem3`
--

CREATE TABLE `mechsem3` (
  `Name` varchar(50) NOT NULL,
  `PROTOTYPING` int(11) NOT NULL,
  `PSYCHOLOGY` int(11) NOT NULL,
  `EI` int(11) NOT NULL,
  `ME` int(11) NOT NULL,
  `TE` int(11) NOT NULL,
  `SM` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mechsem4`
--

CREATE TABLE `mechsem4` (
  `Name` varchar(50) NOT NULL,
  `AM` int(11) NOT NULL,
  `EVS` int(11) NOT NULL,
  `SE` int(11) NOT NULL,
  `FM` int(11) NOT NULL,
  `MT` int(11) NOT NULL,
  `MINOR_PROJECT` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mechsem5`
--

CREATE TABLE `mechsem5` (
  `Name` varchar(50) NOT NULL,
  `PS` int(11) NOT NULL,
  `MD` int(11) NOT NULL,
  `MAM` int(11) NOT NULL,
  `HT` int(11) NOT NULL,
  `AI` int(11) NOT NULL,
  `WPA` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mechsem6`
--

CREATE TABLE `mechsem6` (
  `Name` varchar(50) NOT NULL,
  `PM` int(11) NOT NULL,
  `BOE` int(11) NOT NULL,
  `TURBOMACHINES` int(11) NOT NULL,
  `QA` int(11) NOT NULL,
  `OR` int(11) NOT NULL,
  `MINI_PROJECT` int(11) NOT NULL,
  `FPAD` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mechsem7`
--

CREATE TABLE `mechsem7` (
  `Name` varchar(50) NOT NULL,
  `SOCIOLOGY` int(11) NOT NULL,
  `HVAC` int(11) NOT NULL,
  `PROJECT1` int(11) NOT NULL,
  `SS` int(11) NOT NULL,
  `INTERNSHIP` int(11) NOT NULL,
  `PLM` int(11) NOT NULL,
  `OM` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mechsem8`
--

CREATE TABLE `mechsem8` (
  `Name` varchar(50) NOT NULL,
  `EE` int(11) NOT NULL,
  `NVAH` int(11) NOT NULL,
  `PROJECT2` int(11) NOT NULL,
  `ERP` int(11) NOT NULL,
  `SCM` int(11) NOT NULL,
  `EXTRA` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `FUZZY` float NOT NULL,
  `GRADE` varchar(1) NOT NULL,
  `REMARKS` varchar(10) NOT NULL,
  `CGPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_acc`
--

CREATE TABLE `student_acc` (
  `Email` varchar(50) NOT NULL,
  `Pwd` varchar(25) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_acc`
--

INSERT INTO `student_acc` (`Email`, `Pwd`, `Name`) VALUES
('aarti@gmail.com', 'aarti123', 'Aarti'),
('ashwin@gmail.com', 'ashwin123', 'Ashwin'),
('rohit@gmail.com', 'rohit123', 'Rohit');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_acc`
--

CREATE TABLE `teacher_acc` (
  `Email` varchar(50) NOT NULL,
  `Pwd` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_acc`
--

INSERT INTO `teacher_acc` (`Email`, `Pwd`) VALUES
('rohit@gmail.com', 'rohit123');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`Id`, `Name`) VALUES
(24, 'rohit@gmail.com'),
(25, 'ashwin@gmail.com'),
(26, 'ashwin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `compsem1`
--
ALTER TABLE `compsem1`
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indexes for table `compsem2`
--
ALTER TABLE `compsem2`
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indexes for table `student_acc`
--
ALTER TABLE `student_acc`
  ADD PRIMARY KEY (`Email`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indexes for table `teacher_acc`
--
ALTER TABLE `teacher_acc`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
