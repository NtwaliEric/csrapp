-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql112.unaux.com
-- Generation Time: Aug 19, 2020 at 01:31 AM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unaux_25787659_loginaccess`
--

-- --------------------------------------------------------

--
-- Table structure for table `christian_info`
--

CREATE TABLE `christian_info` (
  `ID` int(11) NOT NULL,
  `serv` varchar(50) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `nid` varchar(16) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `sec` varchar(255) NOT NULL,
  `cell` varchar(255) NOT NULL,
  `vill` varchar(255) NOT NULL,
  `dates` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `christian_info`
--

INSERT INTO `christian_info` (`ID`, `serv`, `fname`, `nid`, `tel`, `sec`, `cell`, `vill`, `dates`) VALUES
(1, 'Iteraniro rya 1', 'BURASANZWE Ntwali Eric', '1199380017633419', '0783160151', 'Gatenga', 'Nyanza', 'Taba', '2020-07-26 04:34:48'),
(2, 'Iteraniro rya 1', 'Didier BIKOREIMANA', '1197380133764191', '0722341516', 'Gatenga', 'Gatenga', 'Bwiza', '2020-07-26 04:35:59'),
(3, 'Iteraniro rya 1', 'NSHIMIYIMANA jean Bosco ', '119900017633419', '0783160196', 'Gatenga', 'Karambo', 'Isangano', '2020-07-26 11:29:04'),
(4, 'Iteraniro rya 1', 'Niragire olivier', '11', 'ooo', 'g', 'g', 'd', '2020-07-26 05:48:20'),
(5, 'Iteraniro rya 1', 'Bigirimana', '1197880007689654', '0788547965', 'Kinazi', 'Gahana', 'Kinazi', '2020-07-31 05:37:45'),
(6, 'Iteraniro rya 1', 'Ishimwe Edison', '1198680183987064', '0783042161', 'Nyamabuye', 'Remera', 'Biti', '2020-07-31 08:14:27'),
(7, 'Iteraniro rya 1', 'Habineza', '1199380133764196', '0783160165', 'Busasamana', 'Bigega', 'Gasharu', '2020-07-31 10:40:52'),
(8, 'Iteraniro rya 1', 'Piter', '1199324578621311', '0789531255', 'Gahanga', 'Gahanga', 'Isangano', '2020-08-15 01:56:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `christian_info`
--
ALTER TABLE `christian_info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `christian_info`
--
ALTER TABLE `christian_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
