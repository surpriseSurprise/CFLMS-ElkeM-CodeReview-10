-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2020 at 06:05 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr10_elkem_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `cr10_elkem_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr10_elkem_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `fk_media` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `media_id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `isbn` varchar(13) DEFAULT NULL,
  `author_fn` varchar(55) DEFAULT NULL,
  `author_ln` varchar(55) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `publisher_name` varchar(55) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `type` enum('Book','CD','DVD') DEFAULT NULL,
  `stat` enum('Available','Reserved') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`media_id`, `img`, `isbn`, `author_fn`, `author_ln`, `title`, `description`, `publisher_name`, `publish_date`, `type`, `stat`) VALUES
(4, 'https://images-na.ssl-images-amazon.com/images/I/51f+ZALTr+L._SX310_BO1,204,203,200_.jpg', '9780099556091', 'Jeanette', 'Winterson', 'Why Be Happy When You Could Be Normal?', 'The shocking, heart-breaking true story behind Oranges Are Not the Only Fruit.', 'Vintage', '2012-04-12', 'Book', 'Available'),
(14, 'https://images-na.ssl-images-amazon.com/images/I/41Wj-PQvBOL._SX322_BO1,204,203,200_.jpg', '9780007232444', 'Jonathan', 'Franzen', 'The Corrections', 'After fifty years as a wife and mother, Enid Lambert is ready to have some fun.', 'Faber & Faber', '2007-07-02', 'Book', 'Available'),
(15, 'https://images-na.ssl-images-amazon.com/images/I/51e77q7TICL._SX332_BO1,204,203,200_.jpg', '978000654847', 'Jane', 'Smiley', 'Moo', 'Deep in the wheatfields of the American midwest, Moo University is in a state of disarray.', 'Flamingo', '2010-05-21', 'Book', 'Available'),
(16, 'https://m.media-amazon.com/images/I/51B9ZFreOwL.jpg', '9780141036601', 'Zadie', 'Smith', 'Swing Time', 'Two girls dream of being dancers - but only one, Tracey, has talent. ', 'Penguin', '2017-07-06', 'Book', 'Available'),
(17, 'https://images-na.ssl-images-amazon.com/images/I/51xEZp9nLZL._SX319_BO1,204,203,200_.jpg', '9780552998765', 'Armistead', 'Maupin', 'Tales Of The City', 'Mary Ann Singleton, looking for a modification in her life, moves to the city and lives at 28 Barbary Lane, San Francisco. ', 'Black Swan', '1984-05-25', 'Book', 'Available'),
(18, 'https://images-na.ssl-images-amazon.com/images/I/51REAz2hQFL._SX325_BO1,204,203,200_.jpg', '9780349408095', 'Amanda', 'Palmer', 'The Art of Asking', 'When we really see each other, we want to help each other.', 'Piatkus', '2014-11-11', 'Book', 'Available'),
(21, 'https://images-na.ssl-images-amazon.com/images/I/51ebySM84JL._AC_SX425_.jpg', 'B008JFQU0W', 'Amanda', 'Palmer', 'Theatre is Evil', 'Arguably her most pop-influenced album yet, Theatre Is Evil showcases powerful vocals and talented songwriting.', 'Import', '2017-03-20', 'CD', 'Reserved'),
(38, 'https://images-na.ssl-images-amazon.com/images/I/517gLJox8lL._AC_.jpg', 'B000002H5I', 'Tracy', 'Chapman', 'Tracy Chapman', 'One of the most striking debut albums ever released, this disc instantly established Chapman as a musical force.', 'Rhino', '1988-04-11', 'CD', 'Reserved'),
(39, 'https://images-na.ssl-images-amazon.com/images/I/81F5W8q416L._AC_SY445_.jpg', 'B083MQCPK2', 'Ljubomir', 'Stefanov', 'Honeyland', 'In a deserted Macedonian village, Hatidze, a 50-something woman, trudges up a hillside to check her bee colonies.', 'Dogwoof', '2020-02-24', 'DVD', 'Reserved'),
(40, 'https://images-na.ssl-images-amazon.com/images/I/81KSFK1VGCL._AC_SY445_.jpg', 'B06VVMS299', 'Theodore', 'Melfi', 'Hidden Figures', 'The incredible untold true story of Katherine Johnson, Dorothy Vaughan & Mary Jackson, brilliant African-American women working at NASA.', '20th Century Fox', '2017-07-03', 'DVD', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `p_id` int(11) NOT NULL,
  `paddress` varchar(55) DEFAULT NULL,
  `psize` varchar(55) DEFAULT NULL,
  `fk_media` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`p_id`, `paddress`, `psize`, `fk_media`) VALUES
(1, 'New York', 'medium', 4),
(2, 'London', 'medium', 14),
(3, 'London', 'small', 15),
(4, 'New York', 'big', 16),
(5, 'New York', 'medium', 17),
(6, 'London', 'small', 18),
(7, 'New York', 'medium', 21),
(8, 'Los Angeles', 'big', 38),
(9, 'London', 'small', 39),
(10, 'Los Angeles', 'big', 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`),
  ADD KEY `fk_media` (`fk_media`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`media_id`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `fk_media` (`fk_media`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `author`
--
ALTER TABLE `author`
  ADD CONSTRAINT `author_ibfk_1` FOREIGN KEY (`fk_media`) REFERENCES `media` (`media_id`);

--
-- Constraints for table `publisher`
--
ALTER TABLE `publisher`
  ADD CONSTRAINT `publisher_ibfk_1` FOREIGN KEY (`fk_media`) REFERENCES `media` (`media_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
