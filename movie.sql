-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2024 at 06:05 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `mid` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `rdate` varchar(5) NOT NULL,
  `runtime` varchar(4) NOT NULL,
  `decription` varchar(400) NOT NULL,
  `viewers` int(10) DEFAULT 1,
  `imgpath` text NOT NULL,
  `videopath` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`mid`, `name`, `genre`, `rdate`, `runtime`, `decription`, `viewers`, `imgpath`, `videopath`) VALUES
(1, 'The Invisible Guest', 'Thriller', '2016', '106', 'A successful entrepreneur accused of murder and a witness preparation expert have less than three hours to come up with an impregnable defense.', 18, 'The-Invisible_Guest.jpg', 'The Invisible Guest.mp4'),
(8, 'Identity', 'Mystery', '2003', '91', 'Stranded at a desolate Nevada motel during a nasty rain storm, ten strangers become acquainted with each other when they realize that they\'re being killed off one by one.', 51, 'Identity.jpg', 'Identity (2003).mp4'),
(11, 'forgotten', 'Thriller', '2017', '109', 'When his abducted brother returns seemingly a different man with no memory of the past 19 days, Jin-seok chases after the truth behind the kidnapping', 14, 'Forgotten.jpg', 'Forgotten.mp4'),
(12, 'the usual suspects', 'Thriller', '1995', '106', 'The sole survivor of a pier shoot-out tells the story of how a notorious criminal influenced the events that began with five criminals meeting in a seemingly random police lineup.', 4, 'The-Usual-Suspects.jpg', 'The Usual Suspects.mp4'),
(13, 'before sunrise', 'Romance', '1995', '105', 'A young man and woman meet on a train in Europe, and wind up spending one evening together in Vienna. Unfortunately, both know that this will probably be their only night together.', 9, 'Before-Sunrise.jpg', 'Before Sunrise.mp4'),
(14, 'the departed', 'crime', '2006', '151', 'An undercover cop and a mole in the police attempt to identify each other while infiltrating an Irish gang in South Boston.', 30, 'the-departed.jpg', 'The Departed (2005).mp4'),
(15, 'fight club', 'thriller', '1999', '139', 'An insomniac office worker and a devil-may-care soap maker form an underground fight club that evolves into much more.', 12, 'fight-club.jpg', 'Fight Club (1999).mp4'),
(16, 'forrest gump', 'drama', '1994', '142', 'The presidencies of Kennedy and Johnson, the Vietnam War, the Watergate scandal and other historical events unfold from the perspective of an Alabama man with an IQ of 75, whose only desire is to be reunited with his childhood sweetheart.', 40, 'forrest-gump.jpg', 'forrest gump.mp4'),
(17, 'interstellar', 'scifi', '2014', '169', 'When Earth becomes uninhabitable in the future, a farmer and ex-NASA pilot, Joseph Cooper, is tasked to pilot a spacecraft, along with a team of researchers, to find a new planet for humans.', 29, 'interstaller.jpg', 'Interstellar.mp4'),
(18, ' the sixth sense', 'horror', '1999', '107', 'Malcolm Crowe, a child psychologist, starts treating a young boy, Cole, who encounters dead people and convinces him to help them. In turn, Cole helps Malcolm reconcile with his estranged wife.', 47, 'sixth-sense.jpg', 'The Sixth Sense.mp4'),
(19, 'Spider-Man: Across the Spider-Verse\r\n', 'action', '2023', '136', 'Miles Morales catapults across the Multiverse, where he encounters a team of Spider-People charged with protecting its very existence. When the heroes clash on how to handle a new threat, Miles must redefine what it means to be a hero.', 12, 'spiderman.jpeg', 'SPIDER-MAN- ACROSS THE SPIDER-VERSE.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rating_id` int(10) NOT NULL,
  `mid` int(11) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `rate_count` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `id` int(100) NOT NULL,
  `username` varchar(25) NOT NULL,
  `passwd` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `DOB` varchar(10) NOT NULL,
  `mid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`id`, `username`, `passwd`, `name`, `phone`, `email`, `DOB`, `mid`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin', '8692849041', 'admin@gmail.com', '25/04/1998', 19),
(5, 'nayeem@gmail.com', '1234', 'ai_nayeem', '1234287564', 'nayeem@gmail.com', '16/09/1996', 19),
(10, 'kuet@gmail.com', 'qwert', 'walter white', '1122334455', 'kuet@gmail.com', '14/05/2010', 19),
(11, '', '', ' ', '', '', '//', 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rating_id`),
  ADD KEY `mid` (`mid`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `mid` (`mid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `mid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rating_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user1`
--
ALTER TABLE `user1`
  ADD CONSTRAINT `user1_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `movies` (`mid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
