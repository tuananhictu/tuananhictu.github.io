-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2018 at 10:51 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qltaikhoan`
--

-- --------------------------------------------------------

--
-- Table structure for table `qltk`
--

CREATE TABLE `qltk` (
  `matk` char(11) COLLATE utf8_unicode_ci NOT NULL,
  `tentk` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `timetao` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `qltk`
--

INSERT INTO `qltk` (`matk`, `tentk`, `pass`, `fullname`, `timetao`) VALUES
('tk01', 'tuananh1', 'anh1234564', 'Hoàng Tuấn Anh 1', '2018-11-09 19:08:20'),
('tk02', 'tuananh2', 'anh12345678', 'Hoàng Tuấn Anh 2', '2018-11-09 19:08:09'),
('tk03', 'tuananh3', 'anh123', 'Hoàng Tuấn Anh 3', '2018-11-09 19:22:12'),
('tk04', 'tuananh4', 'anh123456', 'Hoàng Tuấn Anh 4', '2018-11-09 22:30:04'),
('tk05', 'tuananh5', 'anh123456', 'Hoàng Tuấn Anh', '2018-11-10 03:00:00'),
('tk06', 'tuananh3', 'anh123456', 'Hoàng Tuấn Anh 4', '2018-11-09 22:38:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `qltk`
--
ALTER TABLE `qltk`
  ADD PRIMARY KEY (`matk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
