-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2019 at 11:53 AM
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
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `ID` int(11) NOT NULL,
  `f` varchar(200) NOT NULL,
  `t` varchar(200) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `s` enum('pending','accepted') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`ID`, `f`, `t`, `time`, `s`) VALUES
(10, 'hadihaidar.6.hh@gmail.com', 'mbh20@mail.aub.edu', '2019-05-08 16:15:41', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `ID` int(11) NOT NULL,
  `Post_ID` int(200) NOT NULL,
  `User` varchar(320) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

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

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `ID` int(11) NOT NULL,
  `f` varchar(320) NOT NULL,
  `t` varchar(320) NOT NULL,
  `time` datetime NOT NULL,
  `body` varchar(9999) NOT NULL,
  `r` enum('read','unread') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`ID`, `f`, `t`, `time`, `body`, `r`) VALUES
(1, 'hadihaidar.6.hh@gmail.com', 'hh@h.com', '2019-05-07 14:25:33', 'diasohfdulhw', 'unread'),
(2, 'hh@h.com', 'hadihaidar.6.hh@gmail.com', '2019-05-09 14:51:06', 'hiii', 'unread'),
(7, 'hadihaidar.6.hh@gmail.com', 'hh@h.com', '2019-05-11 22:32:21', 'test', 'unread'),
(19, 'hadihaidar.6.hh@gmail.com', 'hh@h.com', '2019-05-12 11:03:13', ' ', 'unread'),
(20, 'hadihaidar.6.hh@gmail.com', 'hh@h.com', '2019-05-12 11:03:17', ' ', 'unread'),
(21, 'hadihaidar.6.hh@gmail.com', 'hh@h.com', '2019-05-12 11:03:19', ' ', 'unread'),
(22, 'hadihaidar.6.hh@gmail.com', 'hh@h.com', '2019-05-12 11:03:21', ' ', 'unread'),
(23, 'hadihaidar.6.hh@gmail.com', 'hh@h.com', '2019-05-12 11:03:24', '', 'unread'),
(24, 'hadihaidar.6.hh@gmail.com', 'hh@h.com', '2019-05-12 11:03:26', ' ', 'unread'),
(25, 'hadihaidar.6.hh@gmail.com', 'hh@h.com', '2019-05-12 11:03:27', '', 'unread'),
(26, 'hadihaidar.6.hh@gmail.com', 'hh@h.com', '2019-05-12 11:05:06', '', 'unread'),
(27, 'hadihaidar.6.hh@gmail.com', 'hh@h.com', '2019-05-12 11:06:20', '', 'unread'),
(28, 'hadihaidar.6.hh@gmail.com', 'hh@h.com', '2019-05-12 11:07:10', '', 'unread'),
(29, 'hadihaidar.6.hh@gmail.com', 'hh@h.com', '2019-05-12 11:07:11', '', 'unread'),
(30, 'hadihaidar.6.hh@gmail.com', 'hh@h.com', '2019-05-12 11:11:48', '', 'unread'),
(31, 'hadihaidar.6.hh@gmail.com', 'hh@h.com', '2019-05-12 11:12:05', '', 'unread');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `ID` int(11) NOT NULL,
  `f` varchar(200) NOT NULL,
  `t` varchar(200) NOT NULL,
  `type` enum('accepted','Liked','commented','shared','sent') NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`ID`, `f`, `t`, `type`, `time`) VALUES
(1, 'hadihaidar.6.hh@gmail.com', 'hadihaidar.6.hh@gmail.com', 'sent', '2019-05-07 17:38:06'),
(2, 'mbh20@mail.aub.edu', 'hadihaidar.6.hh@gmail.com', 'accepted', '2019-05-08 17:38:06');

-- --------------------------------------------------------

--
-- Table structure for table `post1`
--

CREATE TABLE `post1` (
  `ID` varchar(200) NOT NULL,
  `timee` datetime NOT NULL,
  `UserEmail` varchar(320) NOT NULL,
  `status` varchar(7) NOT NULL DEFAULT 'Public',
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
  `about` varchar(9999) DEFAULT NULL,
  `image` varchar(200) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`FirstName`, `LastName`, `Email`, `County`, `Password`, `DateOfBirth`, `vkey`, `verified`, `Field`, `about`, `image`) VALUES
('Ali', 'Ammar', 'ali@ammar.com', 'lebanon', '58a2e0043ba58bd3a3fbff8fa299489d', '2000-03-23', 'f49327229718ae7158180f380769b3ab', 1, 'Eyes', 'I am Aliiiiiiii', 'default.png'),
('Hadi', 'Haidar', 'hadihaidar.6.hh@gmail.com', 'Lebanon', '58a2e0043ba58bd3a3fbff8fa299489d', '0686-06-08', '0dc4a831b2a1e44ddfffea71452f4fcb', 1, 'Eyes', 'I am hadi', '1557397390_Capture.JPG'),
('hadi', 'haidar', 'hh@h.com', 'Lebanon', '58a2e0043ba58bd3a3fbff8fa299489d', '0986-08-06', '649d05691f6baf5c625fa50dc7f20347', 1, 'bla', NULL, '1557397772_Khamsah of Nizami Or 2265 f 195.jpg'),
('hadi', 'Haidar', 'hmh75@mail.aub.edu', 'lebanon', '7669fa48f361de18ab4ac408950dbe4c', '2000-02-02', '8571a96dd41f18b753a2b427c25abacb', 0, 'Teeth', '', 'default.png'),
('Mhamad', 'Hammoud', 'm7amad1119@gmail.com', 'Lebanon', '7ddc7934873b52e18e7c41d0bce88e11', '2019-05-10', '2896c784aa666f70bdcabec2330a58e3', 0, 'ENT', '', 'default.png'),
('Mohammad', 'Hammoud', 'mbh20@mail.aub.edu', 'Lebanon', '3ae9df0f4e18f9fef3633c66defd7d49', '1212-02-12', '324d1fdeb2d0df8ada39a70f7390790e', 1, 'Heart', '', 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `PostId` (`PostId`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `post1`
--
ALTER TABLE `post1`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UserEmail` (`UserEmail`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`PostId`) REFERENCES `post1` (`ID`);

--
-- Constraints for table `post1`
--
ALTER TABLE `post1`
  ADD CONSTRAINT `post1_ibfk_1` FOREIGN KEY (`UserEmail`) REFERENCES `user` (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
