-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 06, 2018 at 02:48 AM
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
