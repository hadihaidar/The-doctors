-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2019 at 07:31 AM
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
(10, 'hadihaidar.6.hh@gmail.com', 'mbh20@mail.aub.edu', '2019-05-08 16:15:41', 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `ID` int(11) NOT NULL,
  `Post_ID` varchar(300) NOT NULL,
  `User` varchar(320) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`ID`, `Post_ID`, `User`, `time`) VALUES
(11, 'hadihaidar.6.hh@gmail.com1557655345', 'hadihaidar.6.hh@gmail.com', '15:22:19'),
(25, 'hadihaidar.6.hh@gmail.com1557655319', 'hadihaidar.6.hh@gmail.com', '16:03:21'),
(26, 'hadihaidar.6.hh@gmail.com1557667265', 'hadihaidar.6.hh@gmail.com', '16:21:14'),
(27, 'mbh20@mail.aub.edu1557689817', 'hadihaidar.6.hh@gmail.com', '22:37:05');

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
(15, 'hadihaidar.6.hh@gmail.com1557655319', '1557655319_B0KC66.jpg'),
(16, 'hadihaidar.6.hh@gmail.com1557655345', '1557655345_videoplayback.mp4'),
(17, 'mbh20@mail.aub.edu1557689817', '1557689817_28379767_1974885675887460_6187616904002635368_n.jpg');

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
(33, 'hadihaidar.6.hh@gmail.com', 'mbh20@mail.aub.edu', '2019-05-12 22:25:43', 'hello', 'unread'),
(34, 'mbh20@mail.aub.edu', 'hadihaidar.6.hh@gmail.com', '2019-05-12 22:31:33', 'hey', 'unread'),
(35, 'hadihaidar.6.hh@gmail.com', 'mbh20@mail.aub.edu', '2019-05-12 22:32:30', 'how are you', 'unread'),
(36, 'mbh20@mail.aub.edu', 'hadihaidar.6.hh@gmail.com', '2019-05-12 22:32:33', 'hey', 'unread'),
(37, 'mbh20@mail.aub.edu', 'hadihaidar.6.hh@gmail.com', '2019-05-12 22:32:53', 'I\'m fine what about you', 'unread'),
(38, 'hadihaidar.6.hh@gmail.com', 'mbh20@mail.aub.edu', '2019-05-12 22:33:19', 'l7amdella kif el 3ayle', 'unread'),
(39, 'mbh20@mail.aub.edu', 'hadihaidar.6.hh@gmail.com', '2019-05-12 22:33:38', 'every body is fine kif el sho8ol', 'unread');

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
(1, 'hh@h.com', 'hadihaidar.6.hh@gmail.com', 'sent', '2019-05-07 17:38:06');

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
('hadihaidar.6.hh@gmail.com1557655319', '2019-05-12 13:01:59', 'hadihaidar.6.hh@gmail.com', 'Public', 0, 0, 'testing'),
('hadihaidar.6.hh@gmail.com1557655345', '2019-05-12 13:02:25', 'hadihaidar.6.hh@gmail.com', 'Public', 0, 0, ''),
('hadihaidar.6.hh@gmail.com1557667265', '2019-05-12 16:21:05', 'hadihaidar.6.hh@gmail.com', 'Public', 0, 0, 'this is a post'),
('mbh20@mail.aub.edu1557689817', '2019-05-12 22:36:57', 'mbh20@mail.aub.edu', 'Public', 0, 0, 'I love ahed');

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
('Hadi', 'Haidar', 'hadihaidar.6.hh@gmail.com', 'Lebanon', '58a2e0043ba58bd3a3fbff8fa299489d', '0686-06-08', '0dc4a831b2a1e44ddfffea71452f4fcb', 1, 'Eyes', 'I am hadi', '1557397390_Capture.JPG'),
('hadi', 'haidar', 'hh@h.com', 'Lebanon', '58a2e0043ba58bd3a3fbff8fa299489d', '0986-08-06', '649d05691f6baf5c625fa50dc7f20347', 1, 'bla', NULL, '1557397772_Khamsah of Nizami Or 2265 f 195.jpg'),
('hadi', 'Haidar', 'hmh75@mail.aub.edu', 'lebanon', '7669fa48f361de18ab4ac408950dbe4c', '2000-02-02', '8571a96dd41f18b753a2b427c25abacb', 0, 'Teeth', '', 'default.png'),
('Ahmad', 'haidar', 'mbh20@mail.aub.edu', 'Lebanonn', '58a2e0043ba58bd3a3fbff8fa299489d', '3333-03-31', '99a11ee2212bdc7fd805f602492e3822', 1, 'bla', NULL, 'default.png');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

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
