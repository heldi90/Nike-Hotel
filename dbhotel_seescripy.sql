-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 04 Mar 2023 pada 07.18
-- Versi server: 5.6.38
-- Versi PHP: 7.4.3

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
-- Struktur dari tabel `checkLog`
--

CREATE TABLE `checkLog` (
  `idLog` int(11) NOT NULL,
  `rand` text NOT NULL,
  `checkIn` text NOT NULL,
  `checkOut` text NOT NULL,
  `jmhkam` text NOT NULL,
  `namaPemesan` text NOT NULL,
  `email` text NOT NULL,
  `kodeKamar` text NOT NULL,
  `nomorP` text NOT NULL,
  `hargaKamar` text NOT NULL,
  `namaTamu` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `checkLog`
--

INSERT INTO `checkLog` (`idLog`, `rand`, `checkIn`, `checkOut`, `jmhkam`, `namaPemesan`, `email`, `kodeKamar`, `nomorP`, `hargaKamar`, `namaTamu`) VALUES
(1, '1660-BOOKING', '2023-03-04', '2023-03-05', '2', 'Muhamad Ardiansyah', 'muhardiansyahcodes@gmail.com', 'Premium', '085817555922', '3000000', 'Tiara Putri'),
(2, '2338-BOOKING', '2023-03-02', '2023-03-03', '1', 'Bayan Amri', 'Bayan@gmmi.com', 'Reguler', '085817555923', '2000000', 'Muhamad Ardiansyah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataHotel`
--

CREATE TABLE `dataHotel` (
  `id` int(11) NOT NULL,
  `fotoHotel` text NOT NULL,
  `namaHotel` text NOT NULL,
  `kodeHotel` text NOT NULL,
  `fasilitas` text NOT NULL,
  `dates` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `dataHotel`
--

INSERT INTO `dataHotel` (`id`, `fotoHotel`, `namaHotel`, `kodeHotel`, `fasilitas`, `dates`) VALUES
(3, '228-fasilitas1.jpg', 'Hotel Hebat Superior', '18466-TYPE', '', '13:54 01 03 2023'),
(4, '723-fasilitas2.jpg', 'Hotel Hebat Superior 2', '57941-TYPE', '', '13:54 01 03 2023'),
(6, '398-fasilitas4.jpg', 'Hotel Hebat Superior 3', '44461-TYPE', '', '13:55 01 03 2023'),
(7, '762-fasilitas6.jpg', 'Hotel Hebat Deluxe', '99172-TYPE', '', '13:55 01 03 2023');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataKamar`
--

CREATE TABLE `dataKamar` (
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
-- Dumping data untuk tabel `dataKamar`
--

INSERT INTO `dataKamar` (`id`, `fotoKamar`, `namaKamar`, `kodeKamar`, `hargaKamar`, `fasilitas`, `jmlKamar`, `dates`) VALUES
(10, '510-kamar4.jpg', 'Premature Bad Room', 'Premium', '3000000', '', '10', '21:03 02 03 2023'),
(9, '694-kamar3.jpg', 'Deluxe ', 'Reguler', '2000000', '', '10', '21:03 02 03 2023');

-- --------------------------------------------------------

--
-- Struktur dari tabel `LogInput`
--

CREATE TABLE `LogInput` (
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
-- Dumping data untuk tabel `LogInput`
--

INSERT INTO `LogInput` (`idInput`, `namaPemesan`, `jmhKamar`, `kdeBooking`, `CheckIn`, `CheckOut`, `harga`, `dates`) VALUES
(4, 'Muhamad', '3', '84751-BOOKING', '2023-03-01', '2023-03-02', '2000000', '17:38 01 Mar 2023');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `passw` text NOT NULL,
  `role` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `passw`, `role`) VALUES
(2, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(3, 'resepsionis', 'resepsionis@gmail.com', '3aeff485f68b360d076de3d73f9247ad', 'resepsionis');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `checkLog`
--
ALTER TABLE `checkLog`
  ADD PRIMARY KEY (`idLog`);

--
-- Indeks untuk tabel `dataHotel`
--
ALTER TABLE `dataHotel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dataKamar`
--
ALTER TABLE `dataKamar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `LogInput`
--
ALTER TABLE `LogInput`
  ADD PRIMARY KEY (`idInput`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `checkLog`
--
ALTER TABLE `checkLog`
  MODIFY `idLog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `dataHotel`
--
ALTER TABLE `dataHotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `dataKamar`
--
ALTER TABLE `dataKamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `LogInput`
--
ALTER TABLE `LogInput`
  MODIFY `idInput` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
