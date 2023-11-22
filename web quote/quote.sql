-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2023 at 01:19 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quote`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_quote`
--

CREATE TABLE `daftar_quote` (
  `id` int(11) NOT NULL,
  `kategori` char(20) NOT NULL,
  `author` text NOT NULL,
  `tanggal` date NOT NULL,
  `quote` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_quote`
--

INSERT INTO `daftar_quote` (`id`, `kategori`, `author`, `tanggal`, `quote`) VALUES
(40, 'Life', 'Murata Himeko ', '2019-02-20', 'So stay alive bravely'),
(50, 'Pendidikan', 'murata', '0000-00-00', 'live on Kiana'),
(53, 'Pendidikan', 'w', '0000-00-00', 'anjay code w jalan'),
(54, 'Life', 'w', '0000-00-00', 'Tutor biar ga ngebug dong puh'),
(55, 'Life', 'w', '2023-11-01', 'ehehe jadi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_quote`
--
ALTER TABLE `daftar_quote`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_quote`
--
ALTER TABLE `daftar_quote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
