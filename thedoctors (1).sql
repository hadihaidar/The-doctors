-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2019 at 10:51 AM
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
-- Database: `thedoctors`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(320) NOT NULL,
  `County` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `vkey` varchar(45) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `Field` varchar(100) NOT NULL,
  `about` varchar(9999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`FirstName`, `LastName`, `Email`, `County`, `Password`, `DateOfBirth`, `vkey`, `verified`, `Field`, `about`) VALUES
('Ali', 'Ammar', 'ali@ammar.com', 'lebanon', '58a2e0043ba58bd3a3fbff8fa299489d', '2000-03-23', 'f49327229718ae7158180f380769b3ab', 1, 'Eyes', 'I am Aliiiiiiii'),
('Hadi', 'Haidar', 'hadihaidar.6.hh@gmail.com', 'Lebanon', '58a2e0043ba58bd3a3fbff8fa299489d', '0686-06-08', '0dc4a831b2a1e44ddfffea71452f4fcb', 1, 'Eyes', 'I am hadi'),
('hadi', 'Haidar', 'hmh75@mail.aub.edu', 'lebanon', '7669fa48f361de18ab4ac408950dbe4c', '2000-02-02', '8571a96dd41f18b753a2b427c25abacb', 0, 'Teeth', ''),
('Mhamad', 'Hammoud', 'm7amad1119@gmail.com', 'Lebanon', '7ddc7934873b52e18e7c41d0bce88e11', '2019-05-10', '2896c784aa666f70bdcabec2330a58e3', 0, 'ENT', ''),
('Mohammad', 'Hammoud', 'mbh20@mail.aub.edu', 'Lebanon', '3ae9df0f4e18f9fef3633c66defd7d49', '1212-02-12', '324d1fdeb2d0df8ada39a70f7390790e', 0, 'Heart', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- Table structure for table `post1`
--

CREATE TABLE `post1` (
  `ID` varchar(200) NOT NULL,
  `timee` datetime NOT NULL,
  `UserEmail` varchar(320) NOT NULL,
  `status` enum('0','1','2') NOT NULL DEFAULT '1',
  `likee` int(11) NOT NULL,
  `comments` int(11) NOT NULL,
  `body` varchar(9999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post1`
--

INSERT INTO `post1` (`ID`, `timee`, `UserEmail`, `status`, `likee`, `comments`, `body`) VALUES
('hmh75@mail.aub.edu1556792775', '2019-05-02 13:26:15', 'hmh75@mail.aub.edu', '1', 0, 0, 'hello'),
('hmh75@mail.aub.edu1556792801', '2019-05-02 13:26:41', 'hmh75@mail.aub.edu', '1', 0, 0, 'hello'),
('hmh75@mail.aub.edu1556792915', '2019-05-02 13:28:35', 'hmh75@mail.aub.edu', '1', 0, 0, 'hello'),
('hmh75@mail.aub.edu1556792928', '2019-05-02 13:28:48', 'hmh75@mail.aub.edu', '1', 0, 0, 'hi'),
('hmh75@mail.aub.edu1556793004', '2019-05-02 13:30:04', 'hmh75@mail.aub.edu', '1', 0, 0, ''),
('hmh75@mail.aub.edu1556803558', '2019-05-02 16:25:58', 'hmh75@mail.aub.edu', '1', 0, 0, 'hii'),
('hmh75@mail.aub.edu1556806177', '2019-05-02 17:09:37', 'hmh75@mail.aub.edu', '1', 0, 0, 'helloooooo'),
('hmh75@mail.aub.edu1556806257', '2019-05-02 17:10:57', 'hmh75@mail.aub.edu', '1', 0, 0, ''),
('hmh75@mail.aub.edu1556806292', '2019-05-02 17:11:32', 'hmh75@mail.aub.edu', '1', 0, 0, 'ya hala'),
('hmh75@mail.aub.edu1556806586', '2019-05-02 17:16:26', 'hmh75@mail.aub.edu', '1', 0, 0, ''),
('hmh75@mail.aub.edu1556806719', '2019-05-02 17:18:39', 'hmh75@mail.aub.edu', '1', 0, 0, ''),
('hmh75@mail.aub.edu1556806864', '2019-05-02 17:21:04', 'hmh75@mail.aub.edu', '1', 0, 0, ''),
('hmh75@mail.aub.edu1556808041', '2019-05-02 17:40:41', 'hmh75@mail.aub.edu', '1', 0, 0, ''),
('hmh75@mail.aub.edu1556808626', '2019-05-02 17:50:26', 'hmh75@mail.aub.edu', '1', 0, 0, 'ghidaaa'),
('hmh75@mail.aub.edu1556808767', '2019-05-02 17:52:47', 'hmh75@mail.aub.edu', '1', 0, 0, 'ghidaaa'),
('hmh75@mail.aub.edu1556825044', '2019-05-02 22:24:04', 'hmh75@mail.aub.edu', '1', 0, 0, 'hsein ya mahdoom\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post1`
--
ALTER TABLE `post1`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UserEmail` (`UserEmail`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post1`
--
ALTER TABLE `post1`
  ADD CONSTRAINT `post1_ibfk_1` FOREIGN KEY (`UserEmail`) REFERENCES `user` (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `ID` int(11) NOT NULL,
  `PostId` varchar(200) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`ID`, `PostId`, `file`) VALUES
(6, 'hmh75@mail.aub.edu1556806719', '1556806719_Hammoud.jpeg'),
(7, 'hmh75@mail.aub.edu1556806864', '1556806864_tester.mp4'),
(8, 'hmh75@mail.aub.edu1556808041', '1556808041_Hammoud.jpeg'),
(9, 'hmh75@mail.aub.edu1556808041', '1556808041_htester.mp4'),
(10, 'hmh75@mail.aub.edu1556808626', '1556808626_htester.mp4'),
(11, 'hmh75@mail.aub.edu1556808767', '1556808767_htester.mp4'),
(12, 'hmh75@mail.aub.edu1556825044', '1556825044_Hammoud.jpeg'),
(13, 'hmh75@mail.aub.edu1556825044', '1556825044_htester.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `PostId` (`PostId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`PostId`) REFERENCES `post1` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

