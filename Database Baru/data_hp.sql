-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Des 2024 pada 06.33
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_hp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_hp`
--

CREATE TABLE `data_hp` (
  `id_hp` int(4) NOT NULL,
  `nama_hp` varchar(256) NOT NULL,
  `harga_hp` varchar(64) NOT NULL,
  `ram_hp` varchar(64) NOT NULL,
  `memori_hp` varchar(64) NOT NULL,
  `processor_hp` varchar(64) NOT NULL,
  `kamera_depan` varchar(64) NOT NULL,
  `kamera_belakang` varchar(10) NOT NULL,
  `baterai` varchar(10) NOT NULL,
  `garansi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `data_hp`
--

INSERT INTO `data_hp` (`id_hp`, `nama_hp`, `harga_hp`, `ram_hp`, `memori_hp`, `processor_hp`, `kamera_depan`, `kamera_belakang`, `baterai`, `garansi`) VALUES
(1, 'Samsung Galaxy A54 5G', '4400000', '8', '256', 'Exynos 1380', '32', '50', '5000', '1'),
(2, 'OPPO A78', '3100000', '8', '256', 'Snapdragon 680', '8', '50', '5000', '1'),
(3, 'Realme 13', '3000000', '16', '256', 'Snapdragon 685', '16', '50', '5100', '1'),
(4, 'POCO X6 5G ', '3500000', '8', '256', 'Snapdragon 7s Gen 2', '16', '64', '5100', '1'),
(5, 'POCO F6 ', '5000000', '8', '256', 'Snapdragon 8s Gen 3', '20', '50', '5000', '1'),
(6, 'Redmi Note 13 Pro 5G', '4000000', '8', '256', 'Snapdragon 7s Gen 2', '16', '200', '5100', '1'),
(7, 'Vivo Y100', '3000000', '8', '128', 'Snapdragon 4 Gen 2', '8', '50', '5000', '4'),
(8, 'Samsung Galaxy A15 5G', '2900000', '8', '256', 'Dimensity 6100', '13', '50', '5000', '1'),
(9, 'Xiaomi 13T', '6500000', '12', '256', 'Mediatek Dimensity 8300 Ultra', '20', '50', '5000', '2'),
(10, 'Infinix Note 40 Pro Plus 5G', '3800000', '12', '256', 'Dimensity 7020', '32', '108', '4600', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_hp`
--
ALTER TABLE `data_hp`
  ADD PRIMARY KEY (`id_hp`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_hp`
--
ALTER TABLE `data_hp`
  MODIFY `id_hp` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
