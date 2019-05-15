-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2019 at 06:07 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `cashier`
--

CREATE TABLE `cashier` (
  `SSN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `RestaurantName` varchar(100) NOT NULL,
  `SSN` int(11) NOT NULL,
  `Shift` varchar(200) NOT NULL,
  `Salary` int(11) NOT NULL,
  `YearsOfExperiance` int(11) NOT NULL,
  `NameTag` varchar(100) NOT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gives`
--

CREATE TABLE `gives` (
  `HeadChef_SSN` int(11) NOT NULL,
  `Cashier_SSN` int(11) NOT NULL,
  `Order_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `headchef`
--

CREATE TABLE `headchef` (
  `SSN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inplaceorder`
--

CREATE TABLE `inplaceorder` (
  `TableNumber` int(11) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `onphoneorder`
--

CREATE TABLE `onphoneorder` (
  `Address` varchar(300) NOT NULL,
  `PhoneNumber` int(11) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `onphoneorder`
--

INSERT INTO `onphoneorder` (`Address`, `PhoneNumber`, `ID`) VALUES
('shwayfet', 3000000, 1557935966);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `ID` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Items` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`ID`, `Price`, `Items`) VALUES
(1557935966, 10, 'crispy');

-- --------------------------------------------------------

--
-- Table structure for table `phone number`
--

CREATE TABLE `phone number` (
  `PhoneNumber` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `NameOfMeal` varchar(200) NOT NULL,
  `HeadChef_SSN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `Name` varchar(100) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `Website` varchar(200) NOT NULL,
  `OpeningHours` time NOT NULL,
  `ClosingHours` time NOT NULL,
  `PhoneNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`Name`, `Address`, `Website`, `OpeningHours`, `ClosingHours`, `PhoneNumber`) VALUES
('Parilla', 'Bliss-Beirut', 'https://www.parilla.com', '23:00:00', '13:59:00', 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `supervises`
--

CREATE TABLE `supervises` (
  `Superviser_SSN` int(11) NOT NULL,
  `Employee_SSN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `SSN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `takes`
--

CREATE TABLE `takes` (
  `Waiter_SSN` int(11) NOT NULL,
  `Cashier_SSN` int(11) NOT NULL,
  `TableNumber` int(11) DEFAULT NULL,
  `PhoneNumber` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `waiter`
--

CREATE TABLE `waiter` (
  `SSN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cashier`
--
ALTER TABLE `cashier`
  ADD PRIMARY KEY (`SSN`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`SSN`),
  ADD KEY `RestaurantName` (`RestaurantName`);

--
-- Indexes for table `gives`
--
ALTER TABLE `gives`
  ADD PRIMARY KEY (`HeadChef_SSN`,`Cashier_SSN`,`Order_ID`),
  ADD KEY `Order_ID` (`Order_ID`),
  ADD KEY `Cashier_SSN` (`Cashier_SSN`);

--
-- Indexes for table `headchef`
--
ALTER TABLE `headchef`
  ADD PRIMARY KEY (`SSN`);

--
-- Indexes for table `inplaceorder`
--
ALTER TABLE `inplaceorder`
  ADD PRIMARY KEY (`TableNumber`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `onphoneorder`
--
ALTER TABLE `onphoneorder`
  ADD PRIMARY KEY (`PhoneNumber`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `phone number`
--
ALTER TABLE `phone number`
  ADD PRIMARY KEY (`PhoneNumber`),
  ADD KEY `Name` (`Name`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`NameOfMeal`),
  ADD KEY `HeadChef_SSN` (`HeadChef_SSN`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `supervises`
--
ALTER TABLE `supervises`
  ADD PRIMARY KEY (`Superviser_SSN`,`Employee_SSN`),
  ADD KEY `Employee_SSN` (`Employee_SSN`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`SSN`);

--
-- Indexes for table `takes`
--
ALTER TABLE `takes`
  ADD PRIMARY KEY (`Waiter_SSN`,`Cashier_SSN`),
  ADD KEY `PhoneNumber` (`PhoneNumber`);

--
-- Indexes for table `waiter`
--
ALTER TABLE `waiter`
  ADD PRIMARY KEY (`SSN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1557935967;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cashier`
--
ALTER TABLE `cashier`
  ADD CONSTRAINT `cash` FOREIGN KEY (`SSN`) REFERENCES `employee` (`SSN`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`RestaurantName`) REFERENCES `restaurant` (`Name`),
  ADD CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`RestaurantName`) REFERENCES `restaurant` (`Name`);

--
-- Constraints for table `gives`
--
ALTER TABLE `gives`
  ADD CONSTRAINT `gives_ibfk_1` FOREIGN KEY (`Order_ID`) REFERENCES `order` (`ID`),
  ADD CONSTRAINT `gives_ibfk_2` FOREIGN KEY (`Cashier_SSN`) REFERENCES `cashier` (`SSN`),
  ADD CONSTRAINT `gives_ibfk_3` FOREIGN KEY (`HeadChef_SSN`) REFERENCES `headchef` (`SSN`);

--
-- Constraints for table `headchef`
--
ALTER TABLE `headchef`
  ADD CONSTRAINT `head` FOREIGN KEY (`SSN`) REFERENCES `employee` (`SSN`);

--
-- Constraints for table `inplaceorder`
--
ALTER TABLE `inplaceorder`
  ADD CONSTRAINT `inplaceorder_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `order` (`ID`);

--
-- Constraints for table `onphoneorder`
--
ALTER TABLE `onphoneorder`
  ADD CONSTRAINT `onphoneorder_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `order` (`ID`);

--
-- Constraints for table `phone number`
--
ALTER TABLE `phone number`
  ADD CONSTRAINT `phone number_ibfk_1` FOREIGN KEY (`Name`) REFERENCES `restaurant` (`Name`);

--
-- Constraints for table `recipes`
--
ALTER TABLE `recipes`
  ADD CONSTRAINT `recipes_ibfk_1` FOREIGN KEY (`HeadChef_SSN`) REFERENCES `headchef` (`SSN`);

--
-- Constraints for table `supervises`
--
ALTER TABLE `supervises`
  ADD CONSTRAINT `supervises_ibfk_1` FOREIGN KEY (`Employee_SSN`) REFERENCES `cashier` (`SSN`),
  ADD CONSTRAINT `supervises_ibfk_2` FOREIGN KEY (`Employee_SSN`) REFERENCES `headchef` (`SSN`),
  ADD CONSTRAINT `supervises_ibfk_3` FOREIGN KEY (`Employee_SSN`) REFERENCES `waiter` (`SSN`);

--
-- Constraints for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD CONSTRAINT `supervisor` FOREIGN KEY (`SSN`) REFERENCES `employee` (`SSN`);

--
-- Constraints for table `takes`
--
ALTER TABLE `takes`
  ADD CONSTRAINT `takes_ibfk_1` FOREIGN KEY (`PhoneNumber`) REFERENCES `onphoneorder` (`PhoneNumber`),
  ADD CONSTRAINT `takes_ibfk_2` FOREIGN KEY (`Waiter_SSN`) REFERENCES `waiter` (`SSN`);

--
-- Constraints for table `waiter`
--
ALTER TABLE `waiter`
  ADD CONSTRAINT `waiter` FOREIGN KEY (`SSN`) REFERENCES `supervisor` (`SSN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
