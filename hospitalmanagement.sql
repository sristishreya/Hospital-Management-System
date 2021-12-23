-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2021 at 12:07 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospitalmanagement`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `getPatient` (IN `id` INT)  SELECT pnam, patsym, patphn, time, docid, appbill FROM appointment WHERE id = paid$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `acno` int(11) NOT NULL,
  `descrp` varchar(30) NOT NULL,
  `tid` int(11) NOT NULL,
  `amt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`acno`, `descrp`, `tid`, `amt`) VALUES
(1232425, 'Tax', 123, 100000),
(4086, 'Construction', 689, 100000),
(1289, 'Tax', 908, 60000),
(123456, 'New', 3456, 123),
(12678, 'Funds', 4456, 4900),
(3899, 'Tax', 6908, 500000),
(12678, 'taxes', 67857, 10000),
(3908, 'Funds', 78906, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `addmedicine`
--

CREATE TABLE `addmedicine` (
  `mname` varchar(30) NOT NULL,
  `mppt` int(11) NOT NULL,
  `mquan` int(11) NOT NULL,
  `mstat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addmedicine`
--

INSERT INTO `addmedicine` (`mname`, `mppt`, `mquan`, `mstat`) VALUES
('paracetamol', 28, 50, 'available'),
('Calpol', 20, 5, 'Available'),
('Paracetamol', 30, 7, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aemail` varchar(50) NOT NULL,
  `apassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aemail`, `apassword`) VALUES
('rishab@gmail.com', 'rishab'),
('payal@gmail.com', 'payal');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `paid` int(11) NOT NULL,
  `pnam` varchar(200) NOT NULL,
  `patsym` varchar(200) NOT NULL,
  `patphn` varchar(20) NOT NULL,
  `time` time(4) NOT NULL,
  `docid` int(11) NOT NULL,
  `appbill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`paid`, `pnam`, `patsym`, `patphn`, `time`, `docid`, `appbill`) VALUES
(101, 'Sam', 'fever\r\n', '7384983888', '10:30:00.0000', 0, 10),
(202, 'Prachi', 'cold', '907966689', '12:00:00.0000', 0, 600),
(233, 'Saurav', 'Fever', '727770009', '13:00:00.0000', 123, 5000),
(47846, 'Surbhi', 'Cold', '7384983888', '10:30:00.0000', 0, 10),
(890836, 'Saharsh', 'cold', '7478087739', '12:45:00.0000', 300807, 2000),
(1212121, 'Saurav', 'cold', '9989766789', '13:00:00.0000', 123, 500),
(3566757, 'Saurav', 'hdsghf', '9989766789', '00:00:00.0000', 0, 100),
(7890123, 'Abhay Pal', 'heart disease', '7982647899', '16:00:00.0000', 0, 9000);

-- --------------------------------------------------------

--
-- Table structure for table `docsignup`
--

CREATE TABLE `docsignup` (
  `docemail` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `regisid` int(11) NOT NULL,
  `drname` varchar(200) NOT NULL,
  `special` varchar(200) NOT NULL,
  `qual` varchar(200) NOT NULL,
  `yoe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `docsignup`
--

INSERT INTO `docsignup` (`docemail`, `password`, `regisid`, `drname`, `special`, `qual`, `yoe`) VALUES
('ss@yahoo.com', '222', 12, 'a', 'mm', 'aa', 22),
('saurav@yahoo.com', 'saurav', 202, 'Saurav', 'Child Specialist', 'MBBS', 30),
('Spoorthi@gmail.com', 'spoorthi', 204, 'Spoorthi', 'Surgeon', 'MBBS', 4),
('shreya@gmail.com', 'shreya', 456, 'Shreya', 'Child Specialist', 'MBBS', 5);

-- --------------------------------------------------------

--
-- Table structure for table `inventory&stocklogin`
--

CREATE TABLE `inventory&stocklogin` (
  `iemail` varchar(40) NOT NULL,
  `ipassword` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory&stocklogin`
--

INSERT INTO `inventory&stocklogin` (`iemail`, `ipassword`) VALUES
('mandvi@gmail.com', 'mandvi'),
('saharsh@gmail.com', 'saharsh');

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `sid` int(11) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `ssal` int(11) NOT NULL,
  `sbonus` int(11) NOT NULL,
  `sstat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`sid`, `sname`, `ssal`, `sbonus`, `sstat`) VALUES
(2345, 'Ritik', 20000, 0, 'Paid'),
(4589, 'Simran', 10000, 1000, 'Paid'),
(7046, 'Akansha', 7090, 0, 'Nurse');

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE `receptionist` (
  `remail` varchar(50) NOT NULL,
  `rpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receptionist`
--

INSERT INTO `receptionist` (`remail`, `rpassword`) VALUES
('parini@gmail.com', 'parini'),
('pragya@yahoo.com', 'pragya');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `sid` int(11) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `sdate` date NOT NULL,
  `sat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`sid`, `sname`, `sdate`, `sat`) VALUES
(301, 'Sachin', '2020-12-29', 'Reception'),
(302, 'Yash', '2020-12-29', 'Operation Theator'),
(303, 'Nikhil', '2020-12-29', 'Reception'),
(304, 'Amit', '2020-12-29', 'Reception'),
(305, 'Ankita', '2020-12-29', 'Lab'),
(306, 'Satish', '2021-01-19', 'Reception');

--
-- Triggers `staff`
--
DELIMITER $$
CREATE TRIGGER `updateStaff` AFTER UPDATE ON `staff` FOR EACH ROW INSERT INTO stafftrigger VALUES(NEW.sid,NEW.sname,NEW.sat,NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `stafftrigger`
--

CREATE TABLE `stafftrigger` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `at` varchar(30) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stafftrigger`
--

INSERT INTO `stafftrigger` (`id`, `name`, `at`, `date`) VALUES
(304, 'Amit', 'OPD', '2020-12-27 11:47:17'),
(303, 'Nikhil', 'OPD', '2020-12-27 11:56:01'),
(303, 'Nikhil', 'Reception', '2020-12-27 13:03:06'),
(304, 'Amit', 'Operation Theator', '2020-12-27 16:18:44'),
(301, 'Sachin', 'OPD', '2020-12-27 23:26:02'),
(304, 'Amit', 'Reception', '2021-01-08 11:58:23'),
(301, 'Sachin', 'Reception', '2021-01-12 16:37:13');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `sholder` varchar(40) NOT NULL,
  `sno` int(11) NOT NULL,
  `stotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`sholder`, `sno`, `stotal`) VALUES
('Amit', 100, 500000),
('Muskan', 50, 7000),
('Prachi', 20, 30000),
('Ravi', 45, 60000),
('Shaswat', 89, 80000),
('Rahuk', 12, 456),
('Saurav', 123, 12300),
('Deepak', 467, 123456);

--
-- Triggers `stocks`
--
DELIMITER $$
CREATE TRIGGER `insertstocks` AFTER INSERT ON `stocks` FOR EACH ROW INSERT INTO stockstrigger VALUES(NEW.sholder,NEW.stotal,NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `stockstrigger`
--

CREATE TABLE `stockstrigger` (
  `stockholder` varchar(40) NOT NULL,
  `total` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stockstrigger`
--

INSERT INTO `stockstrigger` (`stockholder`, `total`, `date`) VALUES
('Amit', 500000, '2020-12-27 12:35:22'),
('Muskan', 7000, '2020-12-27 13:04:04'),
('Prachi', 30000, '2020-12-27 16:19:43'),
('Ravi', 60000, '2020-12-27 20:51:00'),
('Shaswat', 80000, '2020-12-27 23:21:23'),
('Rahuk', 456, '2021-01-08 10:30:52'),
('Saurav', 12300, '2021-01-08 11:57:45'),
('Deepak', 123456, '2021-01-12 16:36:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`paid`);

--
-- Indexes for table `docsignup`
--
ALTER TABLE `docsignup`
  ADD PRIMARY KEY (`regisid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`sid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
