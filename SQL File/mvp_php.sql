-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 04:25 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvp_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tl` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `nik`, `nama`, `tempat`, `tl`, `gender`, `email`, `telp`) VALUES
(1, '1234561001', 'Dinda Angry', 'Bandung', '2020-12-11', 'Perempuan', 'dindawahyu@upi.edu', '088970803025'),
(2, '6754327002', 'Wahyu', 'Cimahi', '2020-12-14', 'Laki-laki', 'wah@upi.edu', '089678898545'),
(4, '7890654001', 'Ayang', 'Bandung', '2020-11-29', 'Perempuan', 'ay@gmail.com', '081321778980'),
(6, '1234567009', 'Prilla', 'Seoul', '2001-05-05', 'Perempuan', 'prillarosaria@upi.edu', '081234876235'),
(8, '8478347011', 'Jeno', 'Incheon', '2000-12-23', 'Laki-laki', 'jeno@gmail.com', '08138746239'),
(9, '8795642002', 'Mark', 'Canada', '1999-08-20', 'Laki-laki', 'mark@upi.edu', '08237218473'),
(12, '12345', 'Karina', 'Suwon', '2001-08-21', 'Perempuan', 'karina@gmail.com', '08918273182'),
(14, '273461538', 'Vernon', 'Los Angeles', '1998-07-28', 'Laki-Laki', 'vernon@gmail.com', '081231847391'),
(15, '2517252917', 'Jungkook', 'Busan', '1997-09-01', 'Laki-Laki', 'jungkook@gmail.com', '0891826228263');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
