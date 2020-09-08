-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 17, 2018 at 07:15 PM
-- Server version: 5.6.20-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admin_ann`
--

CREATE TABLE IF NOT EXISTS `admin_ann` (
  `sem` int(2) NOT NULL,
  `ann_notes` varchar(500) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_ann`
--

INSERT INTO `admin_ann` (`sem`, `ann_notes`, `date`) VALUES
(1, ' asdsad', '2018-11-13');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `st_usn` int(10) NOT NULL,
  `st_name` varchar(20) NOT NULL,
  `sem` int(2) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `staff_name` varchar(20) NOT NULL,
  `att_persent` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`st_usn`, `st_name`, `sem`, `sub_name`, `staff_name`, `att_persent`) VALUES
(0, 'test1', 2, 'Unix_and_Shell_Programming', 'darshan raj', 30),
(7, 'rfesdf', 2, 'Computer_Organization', 'darshan raj', 20),
(3, 'test1', 2, 'Computer_Organization', 'santosh', 30),
(3, 'test1', 2, 'Unix_and_Shell_Programming', 'darshan raj', 30),
(9, 'sadasd', 2, 'Unix_and_Shell_Programming', 'darshan raj', 30),
(1, 'SANTOSH', 1, 'Engineering_Mathematics_III', 'darshan raj', 80),
(1, 'SANTOSH', 1, 'Analog_and_Digital_Electronics', 'santosh', 30),
(1, 'SANTOSH', 1, 'Data_Structures_and_Applications', 'TEST_TEACH', 80);

-- --------------------------------------------------------

--
-- Table structure for table `class_announcement`
--

CREATE TABLE IF NOT EXISTS `class_announcement` (
  `staff_name` varchar(20) NOT NULL,
  `sem` int(2) NOT NULL,
  `acc_notes` text NOT NULL,
  `time` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_announcement`
--

INSERT INTO `class_announcement` (`staff_name`, `sem`, `acc_notes`, `time`) VALUES
('darshan raj', 1, 'dasfdasfgasfdrwedwads', '2018-11-12'),
('santosh', 2, 'dsadwaewqesadas', '2018-11-12'),
('darshan raj', 0, 'dsafasfasdsa', '2018-11-13');

-- --------------------------------------------------------

--
-- Table structure for table `fd_class`
--

CREATE TABLE IF NOT EXISTS `fd_class` (
  `st_usn` int(10) NOT NULL,
  `sem` varchar(2) NOT NULL,
  `st_name` varchar(20) NOT NULL,
  `staff_name` varchar(20) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `q1` varchar(15) NOT NULL,
  `q2` varchar(15) NOT NULL,
  `q3` varchar(15) NOT NULL,
  `q4` varchar(15) NOT NULL,
  `q5` varchar(15) NOT NULL,
  `q6` varchar(15) NOT NULL,
  `q7` varchar(15) NOT NULL,
  `q8` varchar(15) NOT NULL,
  `q9` varchar(15) NOT NULL,
  `q10` varchar(15) NOT NULL,
  `q11` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fd_class`
--

INSERT INTO `fd_class` (`st_usn`, `sem`, `st_name`, `staff_name`, `sub_name`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`) VALUES
(9, '2', 'sadasd', 'darshan raj', 'Unix_and_Shell_Programming', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR'),
(1, '1', 'SANTOSH', 'TEST_TEACH', 'Data_Structures_and_Applications', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR'),
(0, '', '', 'santosh', 'Analog_and_Digital_Electronics', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR'),
(1, '1', 'SANTOSH', 'darshan raj', 'Engineering_Mathematics_III', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR'),
(0, '', '', 'santosh', 'Analog_and_Digital_Electronics', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR'),
(1, '1', 'SANTOSH', 'santosh', 'Analog_and_Digital_Electronics', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR', 'POOR');

-- --------------------------------------------------------

--
-- Table structure for table `ia_marks`
--

CREATE TABLE IF NOT EXISTS `ia_marks` (
  `student_usn` int(10) NOT NULL,
  `student_name` varchar(20) NOT NULL,
  `sem` int(2) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `staff_name` varchar(20) NOT NULL,
  `TEST1` int(2) NOT NULL,
  `TEST2` int(2) NOT NULL,
  `FINALIA` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ia_marks`
--

INSERT INTO `ia_marks` (`student_usn`, `student_name`, `sem`, `sub_name`, `staff_name`, `TEST1`, `TEST2`, `FINALIA`) VALUES
(4, 'admin', 2, 'Computer_Organization', 'darshan raj', 10, 15, 13),
(9, 'sadasd', 2, 'Unix_and_Shell_Programming', 'darshan raj', 20, 10, 15),
(7, 'rfesdf', 2, 'Unix_and_Shell_Programming', 'darshan raj', 20, 10, 15),
(0, '', 1, '', 'darshan raj', 0, 0, 0),
(1, 'SANTOSH', 1, 'Engineering_Mathematics_III', 'darshan raj', 10, 10, 10),
(1, 'SANTOSH', 1, 'Analog_and_Digital_Electronics', 'santosh', 20, 20, 20),
(1, 'SANTOSH', 1, 'Data_Structures_and_Applications', 'TEST_TEACH', 10, 15, 13);

-- --------------------------------------------------------

--
-- Table structure for table `sem1`
--

CREATE TABLE IF NOT EXISTS `sem1` (
  `sub_name` varchar(50) NOT NULL,
  `sub_code` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem1`
--

INSERT INTO `sem1` (`sub_name`, `sub_code`) VALUES
('Engineering_Mathematics_III', '15MAT31'),
('Analog_and_Digital_Electronics', '15CS32'),
('Data_Structures_and_Applications', '15CS33');

-- --------------------------------------------------------

--
-- Table structure for table `sem2`
--

CREATE TABLE IF NOT EXISTS `sem2` (
  `sub_name` varchar(50) NOT NULL,
  `sub_code` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem2`
--

INSERT INTO `sem2` (`sub_name`, `sub_code`) VALUES
('Computer_Organization', '15CS34'),
('Unix_and_Shell_Programming', '15CS35'),
('Discrete_Mathematical_structures', '15CS36');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
`staff_id` int(5) NOT NULL,
  `staff_name` varchar(20) NOT NULL,
  `staff_mail` varchar(50) NOT NULL,
  `staff_phone` int(10) NOT NULL,
  `staff_pass` text NOT NULL,
  `staff_dob` date NOT NULL,
  `staff_gender` varchar(6) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `staff_mail`, `staff_phone`, `staff_pass`, `staff_dob`, `staff_gender`) VALUES
(1, 'santosh', 'santosh@gmail.com', 895642137, 'admin', '2018-11-26', 'male'),
(2, 'darshan raj', 'darshan@gmail.com', 2147483647, 'admin', '1998-11-21', 'male'),
(3, 'TEST_TEACH', 'test@gmail.com', 78988546, 'admin', '1997-10-10', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
`st_usn` int(10) NOT NULL,
  `st_name` varchar(20) NOT NULL,
  `st_mail` varchar(50) NOT NULL,
  `st_password` varchar(20) NOT NULL,
  `st_father` varchar(20) NOT NULL,
  `st_mother` varchar(20) NOT NULL,
  `st_parentsmail` varchar(50) NOT NULL,
  `st_dob` date NOT NULL,
  `phone` int(10) NOT NULL,
  `st_sem` varchar(2) NOT NULL,
  `Branch` varchar(50) NOT NULL,
  `gender` char(5) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`st_usn`, `st_name`, `st_mail`, `st_password`, `st_father`, `st_mother`, `st_parentsmail`, `st_dob`, `phone`, `st_sem`, `Branch`, `gender`) VALUES
(1, 'SANTOSH', 'sagar132@gmail.com', 'sdasd', 'santu_father', 'santu_mother', 'par@gmail.com', '1997-11-14', 514554352, '1', 'cs', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `st_comp`
--

CREATE TABLE IF NOT EXISTS `st_comp` (
  `st_usn` int(11) NOT NULL,
  `st_name` varchar(11) NOT NULL,
  `staff_name` varchar(20) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `sem` int(2) NOT NULL,
  `date` date NOT NULL,
  `Comp_notes` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `st_comp`
--

INSERT INTO `st_comp` (`st_usn`, `st_name`, `staff_name`, `sub_name`, `sem`, `date`, `Comp_notes`) VALUES
(9, 'sadasd', 'darshan raj', 'Computer_Organization', 2, '2018-11-13', ' dasdsadsad'),
(9, 'sadasd', 'darshan raj', 'Discrete_Mathematical_structures', 2, '2018-11-15', ' asdasdsadas'),
(9, 'sadasd', 'darshan raj', 'Computer_Organization', 2, '2018-11-15', ' 8+95');

-- --------------------------------------------------------

--
-- Table structure for table `sub_allocate`
--

CREATE TABLE IF NOT EXISTS `sub_allocate` (
  `staff_id` int(5) NOT NULL,
  `staff_name` varchar(20) NOT NULL,
  `sem` varchar(5) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `sub_code` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
 ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`st_usn`), ADD UNIQUE KEY `st_password` (`st_password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
MODIFY `staff_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
MODIFY `st_usn` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
