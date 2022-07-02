-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2022 at 09:52 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myadbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE `vaccine` (
  `collegeid` int(3) NOT NULL,
  `collegename` varchar(30) NOT NULL,
  `vaccinetype` varchar(15) NOT NULL,
  `totalstudents` int(5) NOT NULL,
  `city` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccine`
--

INSERT INTO `vaccine` (`collegeid`, `collegename`, `vaccinetype`, `totalstudents`, `city`, `date`) VALUES
(200, 'RV Institute of Technology and', 'Covaxin', 120, 'Banagalore', '2021-06-17'),
(201, 'BMS College of Engineering', 'Covaxin', 120, 'Bangalore', '2021-07-10'),
(212, 'BMS College of Engineering	', 'Covaxin', 110, 'Bangalore', '2021-06-14'),
(213, 'PES University', 'Covidshield', 56, 'Bangalore', '2021-07-08'),
(214, 'MS Ramaiah Institute of Techno', 'Covidshield', 160, 'Bangalore', '2021-08-12'),
(215, 'JSS Science and Technology Uni', 'Covaxin', 120, 'Mysore', '2021-08-08'),
(216, 'University Visvesvaraya Colleg', 'Covaxin', 45, 'Bangalore', '2021-06-13'),
(217, 'Bangalore Institute of Technol', 'Covidshield', 140, 'Bangalore', '2021-07-13'),
(218, 'Dayananda Sagar College of Eng', 'Covidshield', 140, 'Bangalore', '2021-08-15'),
(219, 'KLE Technological University ', 'Covaxin', 90, 'Mysore', '2021-07-11'),
(220, 'Siddaganga Institute of Techno', 'Covidshield', 80, 'Tumkur', '2021-08-16'),
(310, ' KLE Dr M. S. SHESHGIRI COLLEG', 'Covidshield', 120, 'Belagavi', '2020-08-18'),
(311, 'CANARA ENGINEERING COLLEGE', 'Covidshield', 140, 'Mysore', '2020-07-22'),
(312, ' JAIN COLLEGE OF ENGINEERING &', 'Covaxin', 89, 'Belagavi', '2020-07-09'),
(315, ' ANGADI INSTITUTE OF TECHNOLOG', 'Covidshield', 100, 'Belagavi', '2020-06-06'),
(316, 'S G BALEKUNDRI INST. OF TECH', 'Covaxin', 180, 'Belagavi', '2021-07-08'),
(317, 'KLS Gogte Institute of Technol', 'Covidshield', 250, 'Belagavi', '2021-08-15'),
(319, 'JAIN COLLEGE OF ENGINEERING', 'Covaxin', 120, 'Belagavi', '2020-06-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vaccine`
--
ALTER TABLE `vaccine`
  ADD PRIMARY KEY (`collegeid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
