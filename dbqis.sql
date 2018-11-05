-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2018 at 02:11 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbqis`
--

-- --------------------------------------------------------

--
-- Table structure for table `qpd_class`
--

CREATE TABLE `qpd_class` (
  `ClassID` int(13) NOT NULL,
  `ClassRef` varchar(50) NOT NULL,
  `PatientID` int(13) NOT NULL,
  `MedicalClass` varchar(255) NOT NULL,
  `Notes` varchar(255) NOT NULL,
  `QC` varchar(255) NOT NULL,
  `QCLicense` int(22) NOT NULL,
  `CreationDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `qpd_items`
--

CREATE TABLE `qpd_items` (
  `ItemID` int(13) NOT NULL,
  `ItemName` varchar(255) NOT NULL,
  `ItemPrice` decimal(19,2) NOT NULL,
  `ItemDescription` varchar(255) NOT NULL,
  `ItemType` varchar(50) NOT NULL,
  `CreationDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DateUpdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qpd_items`
--

INSERT INTO `qpd_items` (`ItemID`, `ItemName`, `ItemPrice`, `ItemDescription`, `ItemType`, `CreationDate`, `DateUpdate`) VALUES
(1, 'CBC', '125.00', 'Complete Blood Count', '', '2018-09-04 14:40:12', '0000-00-00 00:00:00'),
(2, 'Urinalysis', '75.00', 'Complete Urinalysis', '', '2018-09-04 14:41:08', '0000-00-00 00:00:00'),
(3, 'Fecalysis', '65.00', 'Routine Fecalysis', '', '2018-09-04 14:41:33', '0000-00-00 00:00:00'),
(4, 'Chest XRAY', '200.00', 'Chest PA', '', '2018-09-07 09:42:39', '0000-00-00 00:00:00'),
(5, 'ALORICA Basic 5', '350.00', 'CBC, Urinalysis ,Fecalysis, PE, Chest PA', 'INDUSTRIAL', '2018-10-03 09:58:10', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `qpd_labresult`
--

CREATE TABLE `qpd_labresult` (
  `LabID` int(13) NOT NULL,
  `LabRef` varchar(50) NOT NULL,
  `PatientID` int(13) NOT NULL,
  `WhiteBlood` varchar(255) NOT NULL,
  `Hemoglobin` varchar(255) NOT NULL,
  `HemoNR` varchar(255) NOT NULL,
  `Hematocrit` varchar(255) NOT NULL,
  `HemaNR` varchar(255) NOT NULL,
  `Neutrophils` varchar(255) NOT NULL,
  `Lymphocytes` varchar(255) NOT NULL,
  `Monocytes` varchar(255) NOT NULL,
  `CBCOt` varchar(255) NOT NULL,
  `EOS` varchar(10) NOT NULL,
  `BAS` varchar(10) NOT NULL,
  `CBCRBC` varchar(10) NOT NULL,
  `PLT` varchar(10) NOT NULL,
  `FBS` varchar(10) NOT NULL,
  `FBScon` varchar(10) NOT NULL,
  `BUA` varchar(10) NOT NULL,
  `BUAcon` varchar(10) NOT NULL,
  `BUN` varchar(10) NOT NULL,
  `BUNcon` varchar(10) NOT NULL,
  `CREA` varchar(10) NOT NULL,
  `CREAcon` varchar(10) NOT NULL,
  `CHOL` varchar(10) NOT NULL,
  `CHOLcon` varchar(10) NOT NULL,
  `TRIG` varchar(10) NOT NULL,
  `TRIGcon` varchar(10) NOT NULL,
  `HDL` varchar(10) NOT NULL,
  `HDLcon` varchar(10) NOT NULL,
  `LDL` varchar(10) NOT NULL,
  `LDLcon` varchar(10) NOT NULL,
  `CH` varchar(10) NOT NULL,
  `VLDL` varchar(10) NOT NULL,
  `Na` varchar(10) NOT NULL,
  `K` varchar(10) NOT NULL,
  `Cl` varchar(10) NOT NULL,
  `ALT` varchar(10) NOT NULL,
  `AST` varchar(10) NOT NULL,
  `HB` varchar(10) NOT NULL,
  `Meth` varchar(255) NOT NULL,
  `Tetra` varchar(255) NOT NULL,
  `DT` varchar(255) NOT NULL,
  `HBsAg` varchar(255) NOT NULL,
  `PregTest` varchar(255) NOT NULL,
  `SeroOt` varchar(255) NOT NULL,
  `FecColor` varchar(255) NOT NULL,
  `FecCon` varchar(255) NOT NULL,
  `FecMicro` varchar(255) NOT NULL,
  `FecOt` varchar(255) NOT NULL,
  `UriColor` varchar(255) NOT NULL,
  `UriTrans` varchar(255) NOT NULL,
  `UriPh` varchar(255) NOT NULL,
  `UriSp` varchar(255) NOT NULL,
  `UriPro` varchar(255) NOT NULL,
  `UriGlu` varchar(255) NOT NULL,
  `RBC` varchar(255) NOT NULL,
  `WBC` varchar(255) NOT NULL,
  `Bac` varchar(255) NOT NULL,
  `MThreads` varchar(255) NOT NULL,
  `ECells` varchar(255) NOT NULL,
  `Amorph` varchar(255) NOT NULL,
  `CoAx` varchar(255) NOT NULL,
  `UriOt` varchar(255) NOT NULL DEFAULT 'N/A',
  `LE` varchar(10) NOT NULL,
  `NIT` varchar(10) NOT NULL,
  `URO` varchar(10) NOT NULL,
  `BLD` varchar(10) NOT NULL,
  `KET` varchar(10) NOT NULL,
  `BIL` varchar(10) NOT NULL,
  `Received` varchar(255) NOT NULL,
  `Printed` varchar(255) NOT NULL,
  `Clinician` varchar(60) NOT NULL,
  `RMTLIC` varchar(10) NOT NULL,
  `PATHLIC` varchar(10) NOT NULL,
  `CreationDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DateUpdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `qpd_medhis`
--

CREATE TABLE `qpd_medhis` (
  `MedHisID` int(13) NOT NULL,
  `MedHisRef` varchar(50) NOT NULL,
  `PatientID` int(13) NOT NULL,
  `asth` varchar(5) NOT NULL DEFAULT 'NO',
  `tb` varchar(5) NOT NULL DEFAULT 'NO',
  `dia` varchar(5) NOT NULL DEFAULT 'NO',
  `hb` varchar(5) NOT NULL DEFAULT 'NO',
  `hp` varchar(5) NOT NULL DEFAULT 'NO',
  `kp` varchar(5) NOT NULL DEFAULT 'NO',
  `ab` varchar(5) NOT NULL DEFAULT 'NO',
  `jbs` varchar(5) NOT NULL DEFAULT 'NO',
  `pp` varchar(5) NOT NULL DEFAULT 'NO',
  `mh` varchar(5) NOT NULL DEFAULT 'NO',
  `fs` varchar(5) NOT NULL DEFAULT 'NO',
  `alle` varchar(5) NOT NULL DEFAULT 'NO',
  `ct` varchar(5) NOT NULL DEFAULT 'NO',
  `hep` varchar(5) NOT NULL DEFAULT 'NO',
  `std` varchar(5) NOT NULL DEFAULT 'NO',
  `CreationDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DateUpdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qpd_medhis`
--

INSERT INTO `qpd_medhis` (`MedHisID`, `MedHisRef`, `PatientID`, `asth`, `tb`, `dia`, `hb`, `hp`, `kp`, `ab`, `jbs`, `pp`, `mh`, `fs`, `alle`, `ct`, `hep`, `std`, `CreationDate`, `DateUpdate`) VALUES
(1, '', 2, 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'YES', 'NO', 'NO', 'NO', 'NO', 'NO', '2018-09-28 11:20:16', '2018-09-28 11:28:19');

-- --------------------------------------------------------

--
-- Table structure for table `qpd_patient`
--

CREATE TABLE `qpd_patient` (
  `PatientID` int(13) NOT NULL,
  `PatientRef` varchar(50) NOT NULL,
  `PatientType` varchar(50) NOT NULL,
  `CompanyName` varchar(100) NOT NULL,
  `Position` varchar(75) NOT NULL,
  `FirstName` varchar(40) NOT NULL,
  `MiddleName` varchar(40) NOT NULL,
  `LastName` varchar(40) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Birthdate` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Age` int(3) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `ContactNo` varchar(20) NOT NULL,
  `Notes` varchar(255) NOT NULL,
  `SID` varchar(50) NOT NULL,
  `CreationDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DateUpdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `qpd_patient`
--

INSERT INTO `qpd_patient` (`PatientID`, `PatientRef`, `PatientType`, `CompanyName`, `Position`, `FirstName`, `MiddleName`, `LastName`, `Address`, `Birthdate`, `Email`, `Age`, `Gender`, `ContactNo`, `Notes`, `SID`, `CreationDate`, `DateUpdate`) VALUES
(1, '78304512', '', 'QuestPhil', 'IT', 'Juan', 'Boy', 'Dela Cruz', 'Channel 2', '09-23-19', 'delacruzjuan@gmail.com', 110, 'Male', '09355447824', '', '', '2018-09-27 09:46:48', '0000-00-00 00:00:00'),
(2, '12345678', 'CASH', 'QPD', 'Receptionist', 'Angelica May', 'Santos', 'Villalobos', 'Pampanga', '03-21-1996', 'ange@gmail.com', 22, 'Female', '09056232324', '', '', '2018-09-28 11:15:56', '0000-00-00 00:00:00'),
(3, '82176493', '', 'Chesters Inc.', 'Staff', 'Mia', 'Simon', 'Montero', '123 Capili St. Pampanga', '08-28-1996', '-', 21, 'Female', '09251652345', '', '', '2018-09-28 15:02:08', '0000-00-00 00:00:00'),
(4, '16240837', '', 'Allied Bank', 'Staff', 'Mia', 'Avila', 'Montero', '123 Capili St. Pampanga', '08-28-1996', '-', 21, 'Female', '09251652345', '', '', '2018-09-28 15:03:34', '0000-00-00 00:00:00'),
(6, '28017395', '', 'Chesters Inc.', 'Teller', 'Hazel', 'Avila', 'Sibal', '123 Capili St. Pampanga', '08-28-1996', '-', 21, 'Female', '09056023234', '', '', '2018-09-28 15:05:44', '0000-00-00 00:00:00'),
(7, '87905423', '', 'sadsad', 'sadsad', 'asdsad', 'asdasd', 'asdasdas', 'sadsad', '08-28-1996', '-', 21, 'Female', '-', '', '', '2018-09-28 15:07:29', '0000-00-00 00:00:00'),
(8, '81469372', '', 'qwq', 'qw', 'qw', 'qw', 'qw', 'qw', '08-28-1996', '-', 21, 'Female', '-', '', '', '2018-09-28 15:25:32', '0000-00-00 00:00:00'),
(10, '27195843', '', 'dasds', 'asdsad', 'asdsad', 'asd', 'ad', 'asd', '08-28-1996', '-', 21, 'Female', '-', '', '', '2018-09-28 15:30:55', '0000-00-00 00:00:00'),
(11, '32689715', '', 'CloudStaff', 'Web Dev', 'Harry', 'Manuel', 'Potter', '-', '11-28-1996', '-', 21, 'Male', '09056023234', '', '', '2018-09-28 15:40:22', '0000-00-00 00:00:00'),
(15, '57389160', '', 'Chesters Inc.', 'WebDev', 'Emily', 'Simon', 'Sibal', '123 Capili St. Pampanga', '08-28-1996', '-', 21, 'Female', '09056023234', '', '', '2018-09-28 15:48:17', '0000-00-00 00:00:00'),
(17, '65901483', '', 'Chesters Inc.', 'WebDev', 'Hazel', 'Simon', 'Villegas', '123 Capili St. Pampanga', '08-28-1996', '-', 21, 'Female', '09056023234', '', '', '2018-09-28 15:51:52', '0000-00-00 00:00:00'),
(19, '89621537', '', 'Chesters Inc.', 'Staff', 'Emily', 'Avila', 'Villegas', '123 Capili St. Pampanga', '08-28-1996', '-', 21, 'Female', '-', '', '', '2018-09-28 15:53:14', '0000-00-00 00:00:00'),
(20, '16549283', '', 'Quest', 'Web', 'Hazel', 'P.', 'Dela Cruz', 'Pandan', '11-22-1991', 'ncshkenj@yahoo.com', 27, 'Gender', '09056023234', '', '', '2018-09-28 16:01:49', '0000-00-00 00:00:00'),
(21, '92516740', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '2018-10-01 07:45:13', '0000-00-00 00:00:00'),
(22, '57930421', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '2018-10-01 07:47:30', '0000-00-00 00:00:00'),
(23, '49218356', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '2018-10-01 08:14:48', '0000-00-00 00:00:00'),
(24, '', '', 'CCA', 'STUDENT', 'HANNA', 'ABANGAN', 'VILLEGAS', '123 ANGELES CITY', '09-08-2000', '-', 18, 'FEMALE', '09152032234', 'NONE', '', '2018-10-03 11:25:15', '0000-00-00 00:00:00'),
(25, '89276153', '', 'CCA', 'STUDENT', 'HANNA', 'ABANGAN', 'VILLEGAS', 'ANGELES CITY', '09/08/2000', '-', 18, 'FEMALE', '09156523548', 'NONE', '', '2018-10-03 11:27:38', '0000-00-00 00:00:00'),
(27, '18243905', '', 'OJHJH', 'HLKJHLKJ', 'LKJLKJLK', 'LKJLKJLK', 'LKJLKJLKJ', 'LKJLKJLKJ', '11-08-1996', '-', 21, 'LIHG', '-', '-', '', '2018-10-03 11:36:29', '0000-00-00 00:00:00'),
(28, '51798403', '', 'aaaaaaaaaaaaaa', '-', '-', '-', '-', '-', '-', '-', 0, '-', '-', '-', '', '2018-10-03 11:38:12', '0000-00-00 00:00:00'),
(29, '46197830', '', 'bbbbbbbbbbbbbbbbbbb', '-', '-', '-', '-', '-', '-', '-', 0, '-', '-', '-', '', '2018-10-03 11:41:17', '0000-00-00 00:00:00'),
(30, '47286031', '', 'ccccccccccccc', '-', '-', '-', '-', '-', '-', '-', 0, '--', '-', '-', '', '2018-10-03 11:41:46', '0000-00-00 00:00:00'),
(31, '82319074', '', 'CCA', 'STUDENT', 'HEIDI MAE', 'ABANGAN', 'VILLEGAS', 'ANGELES CITY', '06/20/2004', '-', 13, 'FEMALE', '-', '-', '', '2018-10-03 11:46:49', '0000-00-00 00:00:00'),
(32, '16382549', '', 'QPD', 'IT', 'KENJIE', 'O.', 'TIGLAO', '-', '-', '-', 0, '-', '-', '-', '', '2018-10-03 12:02:24', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `qpd_pe`
--

CREATE TABLE `qpd_pe` (
  `PExamID` int(13) NOT NULL,
  `PExamRef` varchar(50) NOT NULL,
  `PatientID` int(13) NOT NULL,
  `skin` varchar(255) NOT NULL,
  `hn` varchar(255) NOT NULL,
  `cbl` varchar(255) NOT NULL,
  `ch` varchar(255) NOT NULL,
  `abdo` varchar(255) NOT NULL,
  `extre` varchar(255) NOT NULL,
  `ot` varchar(255) NOT NULL,
  `find` varchar(255) NOT NULL,
  `Doctor` varchar(255) NOT NULL,
  `License` int(22) NOT NULL,
  `CreationDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DateUpdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qpd_pe`
--

INSERT INTO `qpd_pe` (`PExamID`, `PExamRef`, `PatientID`, `skin`, `hn`, `cbl`, `ch`, `abdo`, `extre`, `ot`, `find`, `Doctor`, `License`, `CreationDate`, `DateUpdate`) VALUES
(1, '', 2, 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', '', 'TATTOO ON (L) ARM', 'FROILAN A. CANLAS, M.D.', 82498, '2018-09-28 11:20:16', '2018-09-28 05:31:23');

-- --------------------------------------------------------

--
-- Table structure for table `qpd_trans`
--

CREATE TABLE `qpd_trans` (
  `TransactionID` int(13) UNSIGNED ZEROFILL NOT NULL,
  `TransactionRef` varchar(50) NOT NULL,
  `PatientID` int(13) NOT NULL,
  `TransactionType` varchar(50) NOT NULL,
  `Cashier` varchar(50) NOT NULL,
  `ItemID` varchar(100) NOT NULL,
  `ItemName` varchar(255) NOT NULL,
  `ItemDescription` varchar(255) NOT NULL,
  `ItemQTY` varchar(50) NOT NULL,
  `ItemPrice` varchar(255) NOT NULL,
  `Biller` varchar(50) NOT NULL,
  `LOE` int(13) NOT NULL,
  `AN` varchar(50) NOT NULL,
  `AC` varchar(50) NOT NULL,
  `Referral` varchar(50) NOT NULL,
  `Notes` varchar(255) NOT NULL,
  `SID` varchar(50) NOT NULL,
  `TotalPrice` varchar(50) NOT NULL,
  `PaidIn` varchar(50) NOT NULL,
  `Discount` varchar(50) NOT NULL,
  `PaidOut` varchar(50) NOT NULL,
  `GrandTotal` varchar(50) NOT NULL,
  `TransactionDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `qpd_trans`
--

INSERT INTO `qpd_trans` (`TransactionID`, `TransactionRef`, `PatientID`, `TransactionType`, `Cashier`, `ItemID`, `ItemName`, `ItemDescription`, `ItemQTY`, `ItemPrice`, `Biller`, `LOE`, `AN`, `AC`, `Referral`, `Notes`, `SID`, `TotalPrice`, `PaidIn`, `Discount`, `PaidOut`, `GrandTotal`, `TransactionDate`) VALUES
(0000000000062, '40689721', 1, 'CASH', 'HCAVillegas', '4', 'Chest XRAY', 'Chest PA', '1', '200.00', '', 0, '', '', '', '', '', '200.00', '0.00', '0.00', '0.00', '0.00', '2018-10-04 15:30:34'),
(0000000000063, '81679502', 20, 'CASH', 'HCAVillegas', '4', 'Chest XRAY', 'Chest PA', '1', '200.00', '', 0, '', '', '', '', '', '200.00', '0.00', '0.00', '0.00', '0.00', '2018-10-04 15:32:26'),
(0000000000064, '23786015', 20, 'CASH', 'HCAVillegas', '4', 'Chest XRAY', 'Chest PA', '1', '200.00', '', 0, '', '', '', '', '', '200.00', '0.00', '0.00', '0.00', '0.00', '2018-10-04 15:39:13'),
(0000000000065, '54712803', 1, 'CASH', 'HCAVillegas, HCAVillegas', '2, 4', 'Urinalysis, Chest XRAY', 'Complete Urinalysis, Chest PA', '2', '75.00,  200.00', '', 0, '', '', '', '', '', '275.00', '1000.00', '0.00', '725.00', '275.00', '2018-10-04 15:49:31'),
(0000000000066, '73029651', 1, 'CASH', 'HCAVillegas', '3', 'Fecalysis', 'Routine Fecalysis', '1', '65.00', '', 0, '', '', '', '', '', '65.00', '100.00', '0.00', '35.00', '65.00', '2018-10-04 16:06:15'),
(0000000000067, '91238507', 20, 'CASH', 'HCAVillegas, HCAVillegas', '4, 5', 'Chest XRAY, ALORICA Basic 5', 'Chest PA, CBC, Urinalysis ,Fecalysis, PE, Chest PA', '26', '200.00,  350.00', '', 0, '', '', '', '', '', '550.00', '600.00', '0.00', '50.00', '550.00', '2018-10-05 10:56:22'),
(0000000000068, '38617409', 20, 'CASH', 'HCAVillegas', '4', 'Chest XRAY', 'Chest PA', '1', '200.00', '', 0, '', '', '', '', '', '200.00', '500.00', '0.00', '300.00', '200.00', '2018-10-05 13:35:51'),
(0000000000069, '74352918', 20, 'CASH', 'HCAVillegas', '4', 'Chest XRAY', 'Chest PA', '1', '200.00', '', 0, '', '', '', '', '', '200.00', '1500.00', '0.00', '1300.00', '200.00', '2018-10-05 14:26:55'),
(0000000000070, '43250967', 20, 'CASH', 'HCAVillegas, HCAVillegas', '3, 4', 'Fecalysis, Chest XRAY', 'Routine Fecalysis, Chest PA', '2', '65.00,  200.00', '', 0, '', '', '', '', '', '265.00', '500.00', '0.00', '235.00', '265.00', '2018-10-05 15:32:14'),
(0000000000071, '56378019', 20, 'CASH', 'HCAVillegas, HCAVillegas, HCAVillegas', '3, 1, 4', 'Fecalysis, CBC, Chest XRAY', 'Routine Fecalysis, Complete Blood Count, Chest PA', '6', '65.00,  125.00,  200.00', '', 0, '', '', '', '', '', '390', '700.00, 700.00, 700.00', '6.50, 12.50, 0.00', '99.50, 99.50, 99.50', '175.50, 225.00, 200.00', '2018-10-06 15:47:37'),
(0000000000072, '98051637', 1, 'CASH', 'HCAVillegas, HCAVillegas', '1, 3', 'CBC, Fecalysis', 'Complete Blood Count, Routine Fecalysis', '4', '125.00,  65.00', '', 0, '', '', '', '', '', '190', '400.00, 400.00', '12.50, 0.00', '45.00, 45.00', '225.00, 130.00', '2018-10-06 15:59:56'),
(0000000000073, '91426750', 6, 'CASH', 'HCAVillegas, HCAVillegas, HCAVillegas', '1, 4, 2', 'CBC, Chest XRAY, Urinalysis', 'Complete Blood Count, Chest PA, Complete Urinalysis', '4', '125.00,  200.00,  75.00', '', 0, '', '', '', '', '', '400', '500.00, 500.00, 500.00', '12.50, 0.00, 7.50', '7.50, 7.50, 7.50', '225.00, 200.00, 67.50', '2018-10-06 16:07:05'),
(0000000000074, '27816054', 1, 'CASH', 'HCAVillegas, HCAVillegas, HCAVillegas', '1, 4, 2', 'CBC, Chest XRAY, Urinalysis', 'Complete Blood Count, Chest PA, Complete Urinalysis', '4', '125.00,  200.00,  75.00', '', 0, '', '', '', '', '', '400', '600.00, 600.00, 600.00', '12.50, 20.00, 0.00', '52.50, 52.50, 52.50', '112.50, 360.00, 75.00', '2018-10-06 16:10:00');

-- --------------------------------------------------------

--
-- Table structure for table `qpd_vital`
--

CREATE TABLE `qpd_vital` (
  `VitalsID` int(13) NOT NULL,
  `VitalsRef` varchar(50) NOT NULL,
  `PatientID` int(13) NOT NULL,
  `height` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `bmi` varchar(255) NOT NULL,
  `bp` varchar(255) NOT NULL,
  `pr` varchar(255) NOT NULL,
  `rr` varchar(255) NOT NULL,
  `uod` varchar(255) NOT NULL,
  `uos` varchar(255) NOT NULL,
  `cod` varchar(255) NOT NULL,
  `cos` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `hearing` varchar(255) NOT NULL,
  `hosp` varchar(255) NOT NULL,
  `opr` varchar(255) NOT NULL,
  `pm` varchar(255) NOT NULL,
  `smoker` varchar(255) NOT NULL,
  `ad` varchar(255) NOT NULL,
  `lmp` varchar(255) NOT NULL,
  `Notes` varchar(255) NOT NULL,
  `CreationDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DateUpdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qpd_vital`
--

INSERT INTO `qpd_vital` (`VitalsID`, `VitalsRef`, `PatientID`, `height`, `weight`, `bmi`, `bp`, `pr`, `rr`, `uod`, `uos`, `cod`, `cos`, `cv`, `hearing`, `hosp`, `opr`, `pm`, `smoker`, `ad`, `lmp`, `Notes`, `CreationDate`, `DateUpdate`) VALUES
(1, '', 2, '5ft3in', '53kg', '20/N', '120/80', '71', '19', '20/20', '20/20', '', '', '15/15', 'Normal', '-', '-', '-', '-', '-', '09-05-2018', '', '2018-09-28 11:20:16', '2018-09-28 11:26:42');

-- --------------------------------------------------------

--
-- Table structure for table `qpd_xray`
--

CREATE TABLE `qpd_xray` (
  `XrayID` int(13) NOT NULL,
  `XrayRef` varchar(50) NOT NULL,
  `PatientID` int(13) NOT NULL,
  `Comment` text NOT NULL,
  `Impression` varchar(255) NOT NULL,
  `Radiologist` varchar(255) NOT NULL,
  `QA` varchar(255) NOT NULL,
  `CreationDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DateUpdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userID` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userPass` varchar(100) NOT NULL,
  `userStatus` enum('Y','N') NOT NULL DEFAULT 'N',
  `tokenCode` varchar(100) NOT NULL,
  `class` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userID`, `userName`, `userEmail`, `userPass`, `userStatus`, `tokenCode`, `class`) VALUES
(2, 'HCAVillegas', 'questphil.it@gmail.com', 'fc964f6a31b852efce2086f2cf1c22f4', 'Y', '043667ec0b15bc6cfd95a99952195a3f', 'CashierCASH'),
(3, 'AccountCashier', 'questphil.info@gmail.com', '5d95ff5c587a28300fb70d87f2a2e5f7', 'Y', 'e8f0686061140ad8d2fcb3f0332a3975', 'CashierACCOUNT'),
(4, 'CashCashier', 'questphil.billing@gmail.com', '5d95ff5c587a28300fb70d87f2a2e5f7', 'Y', 'c06692ac60a67a5de3b9ad6150f79e91', 'CashierCASH');

-- --------------------------------------------------------

--
-- Table structure for table `temp_patient`
--

CREATE TABLE `temp_patient` (
  `PatientID` int(13) NOT NULL,
  `PatientRef` varchar(50) NOT NULL,
  `PatientType` varchar(50) NOT NULL,
  `CompanyName` varchar(100) NOT NULL,
  `Position` varchar(75) NOT NULL,
  `FirstName` varchar(40) NOT NULL,
  `MiddleName` varchar(40) NOT NULL,
  `LastName` varchar(40) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Birthdate` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Age` int(3) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `ContactNo` varchar(20) NOT NULL,
  `Notes` varchar(255) NOT NULL,
  `SID` varchar(50) NOT NULL,
  `CreationDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DateUpdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `temp_trans`
--

CREATE TABLE `temp_trans` (
  `TransactionID` int(13) UNSIGNED ZEROFILL NOT NULL,
  `TransactionRef` varchar(50) NOT NULL,
  `PatientID` int(13) NOT NULL,
  `TransactionType` varchar(50) NOT NULL,
  `Cashier` varchar(255) NOT NULL,
  `ItemID` varchar(255) NOT NULL,
  `ItemName` varchar(255) NOT NULL,
  `ItemDescription` varchar(255) NOT NULL,
  `ItemQTY` varchar(255) NOT NULL,
  `ItemPrice` varchar(255) NOT NULL,
  `Biller` varchar(50) NOT NULL,
  `LOE` int(13) NOT NULL,
  `AN` varchar(50) NOT NULL,
  `AC` varchar(50) NOT NULL,
  `Referral` varchar(50) NOT NULL,
  `Notes` varchar(255) NOT NULL,
  `SID` varchar(50) NOT NULL,
  `TotalPrice` decimal(19,2) NOT NULL,
  `GrandTotal` decimal(19,2) NOT NULL,
  `PaidIn` decimal(19,2) NOT NULL,
  `Discount` decimal(19,2) NOT NULL,
  `DiscountPer` int(11) NOT NULL,
  `PaidOut` decimal(19,2) NOT NULL,
  `PatientRef` varchar(50) NOT NULL,
  `CompanyName` varchar(100) NOT NULL,
  `Position` varchar(75) NOT NULL,
  `FirstName` varchar(40) NOT NULL,
  `MiddleName` varchar(40) NOT NULL,
  `LastName` varchar(40) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Birthdate` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Age` int(3) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `ContactNo` varchar(20) NOT NULL,
  `TransactionDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `temp_trans`
--

INSERT INTO `temp_trans` (`TransactionID`, `TransactionRef`, `PatientID`, `TransactionType`, `Cashier`, `ItemID`, `ItemName`, `ItemDescription`, `ItemQTY`, `ItemPrice`, `Biller`, `LOE`, `AN`, `AC`, `Referral`, `Notes`, `SID`, `TotalPrice`, `GrandTotal`, `PaidIn`, `Discount`, `DiscountPer`, `PaidOut`, `PatientRef`, `CompanyName`, `Position`, `FirstName`, `MiddleName`, `LastName`, `Address`, `Birthdate`, `Email`, `Age`, `Gender`, `ContactNo`, `TransactionDate`) VALUES
(0000000000179, '56378019', 0, '', 'HCAVillegas', '3', 'Fecalysis', 'Routine Fecalysis', '3', '65.00', '', 0, '', '', '', '', '', '58.50', '175.50', '700.00', '6.50', 10, '99.50', '', '', '', '', '', '', '', '', '', 0, '', '', '2018-10-06 12:55:27'),
(0000000000180, '56378019', 0, '', 'HCAVillegas', '1', 'CBC', 'Complete Blood Count', '2', '125.00', '', 0, '', '', '', '', '', '112.50', '225.00', '700.00', '12.50', 10, '99.50', '', '', '', '', '', '', '', '', '', 0, '', '', '2018-10-06 13:16:19'),
(0000000000182, '56378019', 0, '', 'HCAVillegas', '4', 'Chest XRAY', 'Chest PA', '1', '200.00', '', 0, '', '', '', '', '', '200.00', '200.00', '700.00', '0.00', 0, '99.50', '', '', '', '', '', '', '', '', '', 0, '', '', '2018-10-06 15:03:36'),
(0000000000183, '98051637', 0, '', 'HCAVillegas', '1', 'CBC', 'Complete Blood Count', '2', '125.00', '', 0, '', '', '', '', '', '112.50', '225.00', '400.00', '12.50', 10, '45.00', '', '', '', '', '', '', '', '', '', 0, '', '', '2018-10-06 15:58:13'),
(0000000000185, '98051637', 0, '', 'HCAVillegas', '3', 'Fecalysis', 'Routine Fecalysis', '2', '65.00', '', 0, '', '', '', '', '', '65.00', '130.00', '400.00', '0.00', 0, '45.00', '', '', '', '', '', '', '', '', '', 0, '', '', '2018-10-06 15:59:19'),
(0000000000186, '91426750', 0, '', 'HCAVillegas', '1', 'CBC', 'Complete Blood Count', '2', '125.00', '', 0, '', '', '', '', '', '112.50', '225.00', '500.00', '12.50', 10, '7.50', '', '', '', '', '', '', '', '', '', 0, '', '', '2018-10-06 16:00:32'),
(0000000000187, '91426750', 0, '', 'HCAVillegas', '4', 'Chest XRAY', 'Chest PA', '1', '200.00', '', 0, '', '', '', '', '', '0.00', '200.00', '500.00', '0.00', 0, '7.50', '', '', '', '', '', '', '', '', '', 0, '', '', '2018-10-06 16:03:05'),
(0000000000188, '91426750', 0, '', 'HCAVillegas', '2', 'Urinalysis', 'Complete Urinalysis', '1', '75.00', '', 0, '', '', '', '', '', '67.50', '67.50', '500.00', '7.50', 10, '7.50', '', '', '', '', '', '', '', '', '', 0, '', '', '2018-10-06 16:03:12'),
(0000000000189, '', 0, '', 'HCAVillegas', '4', 'Chest XRAY', 'Chest PA', '1', '200.00', '', 0, '', '', '', '', '', '0.00', '200.00', '0.00', '0.00', 0, '0.00', '', '', '', '', '', '', '', '', '', 0, '', '', '2018-10-06 16:07:54'),
(0000000000191, '27816054', 0, '', 'HCAVillegas', '1', 'CBC', 'Complete Blood Count', '1', '125.00', '', 0, '', '', '', '', '', '112.50', '112.50', '600.00', '12.50', 10, '52.50', '', '', '', '', '', '', '', '', '', 0, '', '', '2018-10-06 16:08:58'),
(0000000000192, '27816054', 0, '', 'HCAVillegas', '4', 'Chest XRAY', 'Chest PA', '2', '200.00', '', 0, '', '', '', '', '', '180.00', '360.00', '600.00', '20.00', 10, '52.50', '', '', '', '', '', '', '', '', '', 0, '', '', '2018-10-06 16:09:06'),
(0000000000193, '27816054', 0, '', 'HCAVillegas', '2', 'Urinalysis', 'Complete Urinalysis', '1', '75.00', '', 0, '', '', '', '', '', '0.00', '75.00', '600.00', '0.00', 0, '52.50', '', '', '', '', '', '', '', '', '', 0, '', '', '2018-10-06 16:09:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `qpd_class`
--
ALTER TABLE `qpd_class`
  ADD PRIMARY KEY (`ClassID`),
  ADD UNIQUE KEY `ClassRef_2` (`ClassRef`),
  ADD KEY `ClassRef` (`ClassRef`),
  ADD KEY `PatientID` (`PatientID`);

--
-- Indexes for table `qpd_items`
--
ALTER TABLE `qpd_items`
  ADD PRIMARY KEY (`ItemID`),
  ADD KEY `ItemID` (`ItemID`);

--
-- Indexes for table `qpd_labresult`
--
ALTER TABLE `qpd_labresult`
  ADD PRIMARY KEY (`LabID`),
  ADD UNIQUE KEY `LabRef_2` (`LabRef`),
  ADD KEY `LabRef` (`LabRef`),
  ADD KEY `PatientID` (`PatientID`);

--
-- Indexes for table `qpd_medhis`
--
ALTER TABLE `qpd_medhis`
  ADD PRIMARY KEY (`MedHisID`),
  ADD UNIQUE KEY `MedHisRef` (`MedHisRef`),
  ADD KEY `MedHisRef_2` (`MedHisRef`),
  ADD KEY `PatientID` (`PatientID`);

--
-- Indexes for table `qpd_patient`
--
ALTER TABLE `qpd_patient`
  ADD PRIMARY KEY (`PatientID`),
  ADD UNIQUE KEY `id` (`PatientID`),
  ADD UNIQUE KEY `PatientRef` (`PatientRef`),
  ADD KEY `id_2` (`PatientID`),
  ADD KEY `id_3` (`PatientID`);

--
-- Indexes for table `qpd_pe`
--
ALTER TABLE `qpd_pe`
  ADD PRIMARY KEY (`PExamID`),
  ADD UNIQUE KEY `PExamRef` (`PExamRef`),
  ADD KEY `PExamRef_2` (`PExamRef`),
  ADD KEY `PatientID` (`PatientID`);

--
-- Indexes for table `qpd_trans`
--
ALTER TABLE `qpd_trans`
  ADD PRIMARY KEY (`TransactionID`),
  ADD KEY `TransactionRef` (`TransactionRef`),
  ADD KEY `PatientID` (`PatientID`),
  ADD KEY `ItemID` (`ItemID`);

--
-- Indexes for table `qpd_vital`
--
ALTER TABLE `qpd_vital`
  ADD PRIMARY KEY (`VitalsID`),
  ADD UNIQUE KEY `VitalsRef` (`VitalsRef`),
  ADD KEY `VitalsRef_2` (`VitalsRef`),
  ADD KEY `PatientID` (`PatientID`);

--
-- Indexes for table `qpd_xray`
--
ALTER TABLE `qpd_xray`
  ADD PRIMARY KEY (`XrayID`),
  ADD UNIQUE KEY `XrayRef` (`XrayRef`),
  ADD KEY `XrayRef_2` (`XrayRef`),
  ADD KEY `PatientID` (`PatientID`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- Indexes for table `temp_patient`
--
ALTER TABLE `temp_patient`
  ADD PRIMARY KEY (`PatientID`),
  ADD UNIQUE KEY `id` (`PatientID`),
  ADD KEY `id_2` (`PatientID`),
  ADD KEY `id_3` (`PatientID`);

--
-- Indexes for table `temp_trans`
--
ALTER TABLE `temp_trans`
  ADD PRIMARY KEY (`TransactionID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `qpd_class`
--
ALTER TABLE `qpd_class`
  MODIFY `ClassID` int(13) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qpd_items`
--
ALTER TABLE `qpd_items`
  MODIFY `ItemID` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `qpd_labresult`
--
ALTER TABLE `qpd_labresult`
  MODIFY `LabID` int(13) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qpd_medhis`
--
ALTER TABLE `qpd_medhis`
  MODIFY `MedHisID` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `qpd_patient`
--
ALTER TABLE `qpd_patient`
  MODIFY `PatientID` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `qpd_pe`
--
ALTER TABLE `qpd_pe`
  MODIFY `PExamID` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `qpd_trans`
--
ALTER TABLE `qpd_trans`
  MODIFY `TransactionID` int(13) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `qpd_vital`
--
ALTER TABLE `qpd_vital`
  MODIFY `VitalsID` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `qpd_xray`
--
ALTER TABLE `qpd_xray`
  MODIFY `XrayID` int(13) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `temp_patient`
--
ALTER TABLE `temp_patient`
  MODIFY `PatientID` int(13) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temp_trans`
--
ALTER TABLE `temp_trans`
  MODIFY `TransactionID` int(13) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
