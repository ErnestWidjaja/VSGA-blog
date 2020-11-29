-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 10:22 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vsga_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `artikelid` int(255) NOT NULL,
  `judul_artikel` text NOT NULL,
  `isi_artikel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`artikelid`, `judul_artikel`, `isi_artikel`) VALUES
(5, 'Artikel 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate faucibus elementum. Cras consequat sollicitudin lobortis. Donec ullamcorper mauris massa, convallis semper nunc consectetur eget. Integer placerat nisi sit amet tortor dictum accumsan non quis ex. Praesent volutpat posuere commodo. Integer eget nibh risus. Sed posuere porttitor efficitur. Sed semper arcu eros, et hendrerit magna ornare non. Maecenas vestibulum libero nec blandit malesuada. Vivamus posuere ac tortor maximus aliquet.'),
(6, 'Artikel 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate faucibus elementum. Cras consequat sollicitudin lobortis. Donec ullamcorper mauris massa, convallis semper nunc consectetur eget. Integer placerat nisi sit amet tortor dictum accumsan non quis ex. Praesent volutpat posuere commodo. Integer eget nibh risus. Sed posuere porttitor efficitur. Sed semper arcu eros, et hendrerit magna ornare non. Maecenas vestibulum libero nec blandit malesuada. Vivamus posuere ac tortor maximus aliquet.');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `komentarid` int(255) NOT NULL,
  `artikelid` int(255) NOT NULL,
  `judul_komentar` text NOT NULL,
  `isi_komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`komentarid`, `artikelid`, `judul_komentar`, `isi_komentar`) VALUES
(9, 5, 'Komentar 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate faucibus elementum. Cras consequat sollicitudin lobortis.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`) VALUES
(1, 'ernest', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`artikelid`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`komentarid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `artikelid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `komentarid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
