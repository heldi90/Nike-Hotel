-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2023 at 02:00 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbhotel_seescripy`
--

-- --------------------------------------------------------

--
-- Table structure for table `checklog`
--

CREATE TABLE `checklog` (
  `idLog` int(11) NOT NULL,
  `rand` text NOT NULL,
  `checkIn` text NOT NULL,
  `checkOut` text NOT NULL,
  `jmhkam` text NOT NULL,
  `namaPemesan` text NOT NULL,
  `email` text NOT NULL,
  `kodeKamar` text NOT NULL,
  `nomorP` text NOT NULL,
  `namaTamu` text NOT NULL,
  `hargaPesanKamar` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `checklog`
--

INSERT INTO `checklog` (`idLog`, `rand`, `checkIn`, `checkOut`, `jmhkam`, `namaPemesan`, `email`, `kodeKamar`, `nomorP`, `namaTamu`, `hargaPesanKamar`) VALUES
(3, '8881-BOOKING', '2023-03-07', '2023-03-07', '1', 'Ariel', 'ariel@gmail.com', 'Premium', '123456789', 'Ariel Tatum', '0'),
(7, '8049-BOOKING', '2023-03-28', '2023-03-20', '5', 'misela', 'misel7@hma.com', 'Premium', '23426662', 'Misl', '0'),
(5, '2788-BOOKING', '2023-03-31', '2023-03-28', '1', 'Saputri', 'sap@Gmail.com', 'Reguler', '25234234', 'Putri', '0'),
(6, '380-BOOKING', '2023-03-30', '2023-03-19', '2', 'suci', 'suci@gmail.com', 'Reguler', '23523525', 'suciiiiiiii', '0'),
(9, '2289-BOOKING', '2023-03-28', '2023-03-18', '1', 'Nike', 'nike@hsks.com', 'Premium', '656747253647', 'Nike Cantik', '0'),
(10, '6377-BOOKING', '2023-03-24', '2023-03-01', '1', 'asdasd', 'asdasd@asdasd', 'Reguler', '23123', 'asdasdasd', '0'),
(11, '5639-BOOKING', '2023-03-29', '2023-03-12', '1', 'ser', 'ser@asd', 'Premium', '123132', 'eda', '0');

-- --------------------------------------------------------

--
-- Table structure for table `datahotel`
--

CREATE TABLE `datahotel` (
  `id` int(11) NOT NULL,
  `fotoHotel` text NOT NULL,
  `namaHotel` text NOT NULL,
  `kodeHotel` text NOT NULL,
  `fasilitas` text NOT NULL,
  `dates` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `datahotel`
--

INSERT INTO `datahotel` (`id`, `fotoHotel`, `namaHotel`, `kodeHotel`, `fasilitas`, `dates`) VALUES
(3, '228-fasilitas1.jpg', 'Hotel Hebat Superior', '18466-TYPE', '', '13:54 01 03 2023'),
(4, '723-fasilitas2.jpg', 'Hotel Hebat Superior 2', '57941-TYPE', '', '13:54 01 03 2023'),
(6, '398-fasilitas4.jpg', 'Hotel Hebat Superior 3', '44461-TYPE', '', '13:55 01 03 2023'),
(7, '762-fasilitas6.jpg', 'Hotel Hebat Deluxe', '99172-TYPE', '', '13:55 01 03 2023');

-- --------------------------------------------------------

--
-- Table structure for table `datakamar`
--

CREATE TABLE `datakamar` (
  `id` int(11) NOT NULL,
  `fotoKamar` text NOT NULL,
  `namaKamar` text NOT NULL,
  `kodeKamar` text NOT NULL,
  `hargaKamar` text NOT NULL,
  `fasilitas` text NOT NULL,
  `jmlKamar` text NOT NULL,
  `dates` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `datakamar`
--

INSERT INTO `datakamar` (`id`, `fotoKamar`, `namaKamar`, `kodeKamar`, `hargaKamar`, `fasilitas`, `jmlKamar`, `dates`) VALUES
(10, '510-kamar4.jpg', 'Premature Bad Room', 'Premium', '3000000', '', '10', '21:03 02 03 2023'),
(9, '694-kamar3.jpg', 'Deluxe ', 'Reguler', '2000000', '', '10', '21:03 02 03 2023');

-- --------------------------------------------------------

--
-- Table structure for table `loginput`
--

CREATE TABLE `loginput` (
  `idInput` int(11) NOT NULL,
  `namaPemesan` text NOT NULL,
  `jmhKamar` text NOT NULL,
  `kdeBooking` text NOT NULL,
  `CheckIn` text NOT NULL,
  `CheckOut` text NOT NULL,
  `harga` text NOT NULL,
  `dates` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loginput`
--

INSERT INTO `loginput` (`idInput`, `namaPemesan`, `jmhKamar`, `kdeBooking`, `CheckIn`, `CheckOut`, `harga`, `dates`) VALUES
(4, 'Muhamad', '3', '84751-BOOKING', '2023-03-01', '2023-03-02', '2000000', '17:38 01 Mar 2023');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `passw` text NOT NULL,
  `role` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `passw`, `role`) VALUES
(2, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(3, 'resepsionis', 'resepsionis@gmail.com', '3aeff485f68b360d076de3d73f9247ad', 'resepsionis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checklog`
--
ALTER TABLE `checklog`
  ADD PRIMARY KEY (`idLog`);

--
-- Indexes for table `datahotel`
--
ALTER TABLE `datahotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datakamar`
--
ALTER TABLE `datakamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginput`
--
ALTER TABLE `loginput`
  ADD PRIMARY KEY (`idInput`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checklog`
--
ALTER TABLE `checklog`
  MODIFY `idLog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `datahotel`
--
ALTER TABLE `datahotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `datakamar`
--
ALTER TABLE `datakamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `loginput`
--
ALTER TABLE `loginput`
  MODIFY `idInput` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
