-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 09, 2017 at 01:28 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Library`
--

-- --------------------------------------------------------

--
-- Table structure for table `Author`
--

CREATE TABLE `Author` (
  `ID` int(11) NOT NULL,
  `First name` varchar(100) NOT NULL,
  `Last name` varchar(100) DEFAULT NULL,
  `Social security number` char(20) DEFAULT NULL,
  `Birth year` int(11) DEFAULT NULL,
  `Homepage` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Book`
--

CREATE TABLE `Book` (
  `Title` varchar(255) DEFAULT NULL,
  `BookID` char(13) NOT NULL,
  `Pages` int(11) DEFAULT NULL,
  `Edition` int(11) DEFAULT NULL,
  `Year` int(11) DEFAULT NULL,
  `Publisher` varchar(100) DEFAULT NULL,
  `Author` varchar(60) NOT NULL,
  `Reserved` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Book`
--

INSERT INTO `Book` (`Title`, `BookID`, `Pages`, `Edition`, `Year`, `Publisher`, `Author`, `Reserved`) VALUES
('Harry Potter', '1234678190911', 459, 2, 2009, 'Warner Pictures', 'J. K. Rowling', 0),
('Lord of The Flies', '3457291012309', 569, 1, 1985, 'Penguin Books', 'William Goulding', 1),
('Harry Potter', '34782910', 569, 2, 2009, 'Warner', 'J. K. Rowling', 1),
('Grey', '3527191233', 457, 1, 2016, ' Fifty Shades Freed', 'E. L. James', 0),
('Pride and Prejudice ', '589330112', 320, 1, 1813, 'Modern Library ', 'Jane Austen', 0),
('The Catcher in the Rye', '712529101', 340, 3, 1951, 'Little, Brown and Company', 'J. D. Salinger', 1),
('Pippi Longstocking \r\n', '75901020102', 456, 1, 1945, 'Puffin Books', ' Astrid Lindgren ', 0),
('To Kill a Mockingbird ', '765820100', 340, 3, 1960, 'Harper Perennial Modern Classics ', 'Harper Lee', 1),
('Fifty Shades of Grey ', '8385704949', 656, 1, 2012, 'Shades of Greed', 'E. L. James', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Connection`
--

CREATE TABLE `Connection` (
  `ISBN number` varchar(13) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Author`
--
ALTER TABLE `Author`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Book`
--
ALTER TABLE `Book`
  ADD PRIMARY KEY (`BookID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Author`
--
ALTER TABLE `Author`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
