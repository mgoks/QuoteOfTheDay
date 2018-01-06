-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 06, 2018 at 02:55 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quote_of_the_day`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL,
  `quote` text NOT NULL,
  `by` varchar(100) NOT NULL,
  `from` varchar(1000) NOT NULL,
  `year` int(11) NOT NULL,
  `image-link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `quote`, `by`, `from`, `year`, `image-link`) VALUES
(0, 'test', 'test', 'test', 0, 'test'),
(0, 'test', 'test', '0', 0, 'test'),
(0, '', '', '', 0, ''),
(0, '', '', '', 0, ''),
(0, 'ask bir sudur', '', '', 0, ''),
(0, 'ask bir sudur/ic ic kudur', 'anonim', '0', 0, 'http://i0.heptarlaydi.com/image/show/390/560/0/ask-bir-sudur-ic-ic-kudur.jpg?v=20140917143709'),
(0, '', 'asda', '3', 0, 'ada'),
(0, '', 'asda', '3', 0, 'ada'),
(0, '', '', '', 0, ''),
(0, 'quote', 'by', '3', 0, 'google.com/image.jpg'),
(0, 'falan filan', '', '', 0, ''),
(0, 'falan filan', '', '', 0, ''),
(0, 'falan filan', '', '', 0, ''),
(0, 'falan filan', '', '', 0, ''),
(0, 'falan filan', '', '', 0, ''),
(0, 'falan filan', '', '', 0, ''),
(0, 'falan filan', '', '', 0, ''),
(0, '', '', '', 0, 'http://www.stephenhicks.org/wp-content/uploads/2013/03/nietzsche-uniform-1864.jpg'),
(0, '', '', '', 0, 'http://www.stephenhicks.org/wp-content/uploads/2013/03/nietzsche-uniform-1864.jpg'),
(0, '', '', '', 0, ''),
(0, 'lkamlkdams', ';lakd;laskd', '9', 0, 'http://i0.kym-cdn.com/entries/icons/original/000/019/616/41584.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` int(11) NOT NULL,
  `by` varchar(100) NOT NULL,
  `from` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `quote` text NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `by`, `from`, `year`, `quote`, `image`) VALUES
(2, 'Friedrich Nietzsche', 'his book \'Twilight of Idols\'', 1888, 'What does not kill me, makes me stronger.', 'https://upload.wikimedia.org/wikipedia/commons/1/1b/Nietzsche187a.jpg'),
(1, 'Mustafa Kemal Ataturk', 'his speech at a meeting of teachers in Samsun, Turkey', 0, 'For everything in the world - for civilization, for life, for success - the truest guide is knowledge and science. To seek a guide other than knowledge and science is [a mark of] heedlessness, ignorance, and aberration.', 'https://upload.wikimedia.org/wikipedia/commons/a/a8/Ataturk1930s.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
