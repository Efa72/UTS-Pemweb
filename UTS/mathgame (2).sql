-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Bulan Mei 2021 pada 18.57
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamepenjumlahan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mathgame`
--

CREATE TABLE `mathgame` (
  `No` int(10) NOT NULL,
  `Nama` varchar(30) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Score` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mathgame`
--

INSERT INTO `mathgame` (`No`, `Nama`, `Email`, `Score`) VALUES
(9, 'Seti', 'seti22222@gmail.com', 80),
(11, 'Efa', 'efa7200@gmail.com', 100),
(13, 'Yani', 'yani1234@gmail.com', 70),
(15, 'Tia', 'tia1234@gmail.com', 60),
(16, 'Ani', 'ani12345@gmail.com', 70),
(17, 'Andi', 'andi123@gmail.com', 50),
(18, 'Fafa', 'fafa1234@gmail.com', 50),
(19, 'Edi', 'edi1234@gmail.com', 60),
(20, 'Seno', 'seno123@gmail.com', 40),
(21, 'Reno', 'reno123@gmail.com', 30),
(22, 'Reni', 'reni123@gmail.com', 40),
(23, 'Tri', 'tri1234@gmail.com', 30),
(24, 'Era', 'era1234@gmail.com', 20),
(25, 'Yudi', 'yudi123@gamil.com', 20);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mathgame`
--
ALTER TABLE `mathgame`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mathgame`
--
ALTER TABLE `mathgame`
  MODIFY `No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
