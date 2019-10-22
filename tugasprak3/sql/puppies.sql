-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Okt 2019 pada 09.00
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puppies`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `animals`
--

CREATE TABLE `animals` (
  `id` int(11) NOT NULL,
  `puppyname` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `breedid` int(11) DEFAULT NULL,
  `description` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `picture` varchar(256) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `animals`
--

INSERT INTO `animals` (`id`, `puppyname`, `breedid`, `description`, `price`, `picture`) VALUES
(1, 'Johnny', 4, 'Good for a farm', '100.00', 'Johnny.jpg'),
(2, 'Bully', 3, 'A fighter, excellent watchdog', '599.00', 'Bully.jpg'),
(3, 'Bo-Bo', 2, 'Suit sweet old lady', '150.00', 'Bo-Bo.jpg'),
(4, 'Albert', 6, 'Family dog', '20.00', 'Albert.jpg'),
(5, 'Fritz', 1, 'Watchdog', '129.00', 'Fritz.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `breeds`
--

CREATE TABLE `breeds` (
  `breed` int(11) NOT NULL,
  `breedname` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `temprament` varchar(45) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `breeds`
--

INSERT INTO `breeds` (`breed`, `breedname`, `temprament`) VALUES
(1, 'Doberman', 'Aggressive'),
(2, 'Poodle', 'Nervous'),
(3, 'Pitt Bull', 'Nasty'),
(4, 'Cattle Dog', 'Friendly'),
(5, 'Alsatian', 'Faithful'),
(6, 'Beagle', 'Smooches'),
(7, 'Schnauzer', 'Fluffy'),
(8, 'Jack Russell', 'Psychopathic'),
(9, 'Rat Terrier', 'Less aggressive than Jack Russel');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_breed` (`breedid`);

--
-- Indeks untuk tabel `breeds`
--
ALTER TABLE `breeds`
  ADD PRIMARY KEY (`breed`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `animals`
--
ALTER TABLE `animals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `breeds`
--
ALTER TABLE `breeds`
  MODIFY `breed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `animals`
--
ALTER TABLE `animals`
  ADD CONSTRAINT `fk_breed` FOREIGN KEY (`breedid`) REFERENCES `breeds` (`breed`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
