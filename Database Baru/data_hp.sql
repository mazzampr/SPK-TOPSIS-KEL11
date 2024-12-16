-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Des 2024 pada 23.26
-- Waktu pembuatan: 09 Des 2024 pada 12.56
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
(2, 'OPPO A78', '3100000', '8', '256', 'Snapdragon 680', '8', '50', '5000', '1'),
(3, 'Realme 13', '3000000', '16', '256', 'Snapdragon 685', '16', '50', '5100', '1'),
(4, 'POCO X6 5G ', '3500000', '8', '256', 'Snapdragon 7s Gen 2', '16', '64', '5100', '1'),
(5, 'POCO F6 ', '5000000', '8', '256', 'Snapdragon 8s Gen 3', '20', '50', '5000', '1'),
(6, 'Redmi Note 13 Pro 5G', '4000000', '8', '256', 'Snapdragon 7s Gen 2', '16', '200', '5100', '1'),
(7, 'Vivo Y100', '3000000', '8', '128', 'Snapdragon 4 Gen 2', '8', '50', '5000', '4'),
(8, 'Samsung Galaxy A15 5G', '2900000', '8', '256', 'Dimensity 6100', '13', '50', '5000', '1'),
(9, 'Xiaomi 13T', '6500000', '12', '256', 'Mediatek Dimensity 8300 Ultra', '20', '50', '5000', '2'),
(10, 'Infinix Note 40 Pro Plus 5G', '3800000', '12', '256', 'Dimensity 7020', '32', '108', '4600', '1'),
(11, 'Vovo', '4000000', '4', '4', 'A10 Fusion', '50', '50', '5000', '1'),
(12, 'Vovo', '4000000', '4', '4', 'A10 Fusion', '50', '50', '5000', '1'),
(13, 'VAVA', '5000000', '4', '4', 'A10 Fusion', '90', '90', '9000', '1'),
(14, 'VAVA', '5000000', '4', '4', 'A10 Fusion', '90', '90', '9000', '1'),
(15, 'VAVA', '5000000', '4', '4', 'A10 Fusion', '90', '90', '9000', '1'),
(16, 'VAVA', '5000000', '4', '4', 'A10 Fusion', '90', '90', '9000', '1'),
(17, 'VAVA', '5000000', '4', '4', 'A10 Fusion', '90', '90', '9000', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ir`
--

CREATE TABLE `ir` (
  `jumlah` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `ir`
--

INSERT INTO `ir` (`jumlah`, `nilai`) VALUES
(1, 0),
(2, 0),
(3, 0.58),
(4, 0.9),
(5, 1.12),
(6, 1.24),
(7, 1.32),
(8, 1.41),
(9, 1.45),
(10, 1.49),
(11, 1.51),
(12, 1.48),
(13, 1.56),
(14, 1.57),
(15, 1.59);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id`, `nama`) VALUES
(1, 'Harga'),
(2, 'RAM'),
(3, 'ROM'),
(4, 'Processor'),
(5, 'KameraDepan'),
(6, 'KameraBelakang'),
(7, 'Baterai'),
(8, 'Garansi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nanoreview`
--

CREATE TABLE `nanoreview` (
  `ranking` varchar(4) DEFAULT NULL,
  `chipset` varchar(26) DEFAULT NULL,
  `rating1` varchar(7) DEFAULT NULL,
  `rating2` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `nanoreview`
--

-- Struktur dari tabel `nanoreview`
--

CREATE TABLE `nanoreview` (
  `ranking` varchar(4) DEFAULT NULL,
  `chipset` varchar(26) DEFAULT NULL,
  `rating1` varchar(7) DEFAULT NULL,
  `rating2` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `nanoreview`
--

INSERT INTO `nanoreview` (`ranking`, `chipset`, `rating1`, `rating2`) VALUES
('1', 'Dimensity 9400', '98', 'A+'),
('2', 'Snapdragon 8 Elite (Gen 4)', '98', 'A+'),
('3', 'A18 Pro', '97', 'A+'),
('4', 'Apple A18', '95', 'A+'),
('5', 'Dimensity 9300 Plus', '93', 'A+'),
('6', 'Snapdragon 8 Gen 3', '93', 'A+'),
('7', 'A17 Pro', '93', 'A+'),
('8', 'Dimensity 9300', '92', 'A'),
('9', 'A16 Bionic', '90', 'A'),
('10', 'Exynos 2400', '87', 'A'),
('11', 'Exynos 2400e', '85', 'A'),
('12', 'Snapdragon 8 Gen 2', '81', 'A'),
('13', 'A15 Bionic', '81', 'A'),
('14', 'Dimensity 9200 Plus', '79', 'A'),
('15', 'Dimensity 9200', '79', 'A'),
('16', 'Snapdragon 8s Gen 3', '77', 'A'),
('17', 'Snapdragon 7 Plus Gen 3', '75', 'A'),
('18', 'Dimensity 8300', '71', 'A'),
('19', 'A14 Bionic', '71', 'A'),
('20', 'Tensor G4', '70', 'A'),
('21', 'Snapdragon 8 Plus Gen 1', '70', 'A'),
('22', 'Tensor G3', '66', 'A'),
('23', 'Dimensity 9000 Plus', '65', 'A'),
('24', 'Snapdragon 8 Gen 1', '65', 'A'),
('25', 'Exynos 2200', '63', 'B'),
('26', 'Snapdragon 7 Plus Gen 2', '62', 'B'),
('27', 'A13 Bionic', '62', 'B'),
('28', 'Dimensity 9000', '61', 'B'),
('29', 'Snapdragon 888 Plus', '57', 'B'),
('30', 'Tensor G2', '56', 'B'),
('31', 'Google Tensor', '55', 'B'),
('32', 'Snapdragon 888', '55', 'B'),
('33', 'Dimensity 8200', '54', 'B'),
('34', 'Kirin 9000', '54', 'B'),
('35', 'Exynos 2100', '53', 'B'),
('36', 'Exynos 1580', '52', 'B'),
('37', 'Dimensity 8100', '52', 'B'),
('38', 'Dimensity 7350', '50', 'B'),
('39', 'Kirin 9010', '50', 'B'),
('40', 'Snapdragon 7 Gen 3', '50', 'B'),
('41', 'Dimensity 8000', '50', 'B'),
('42', 'Snapdragon 870', '50', 'B'),
('43', 'A12 Bionic', '49', 'B'),
('44', 'Dimensity 7200 Ultra', '48', 'B'),
('45', 'Dimensity 8020', '48', 'B'),
('46', 'Dimensity 7200', '48', 'B'),
('47', 'Dimensity 1300', '48', 'B'),
('48', 'Snapdragon 865 Plus', '48', 'B'),
('49', 'Exynos 1480', '47', 'B'),
('50', 'Kirin 9000S', '47', 'B'),
('51', 'Dimensity 8050', '47', 'B'),
('52', 'Dimensity 1100', '47', 'B'),
('53', 'Dimensity 1200', '47', 'B'),
('54', 'Snapdragon 865', '47', 'B'),
('55', 'Snapdragon 7s Gen 3', '46', 'B'),
('56', 'Dimensity 7300', '45', 'B'),
('57', 'Snapdragon 782G', '44', 'B'),
('58', 'Snapdragon 7 Gen 1', '44', 'B'),
('59', 'Exynos 990', '44', 'B'),
('60', 'Kirin 990 (5G)', '44', 'B'),
('61', 'Snapdragon 778G Plus', '43', 'B'),
('62', 'Snapdragon 780G', '43', 'B'),
('63', 'Snapdragon 860', '43', 'B'),
('64', 'Dimensity 1000 Plus', '43', 'B'),
('65', 'Snapdragon 855 Plus', '43', 'B'),
('66', 'Snapdragon 7s Gen 2', '42', 'B'),
('67', 'Snapdragon 778G', '42', 'B'),
('68', 'Dimensity 7050', '41', 'B'),
('69', 'Exynos 1380', '41', 'B'),
('70', 'Snapdragon 855', '41', 'B'),
('71', 'Dimensity 7030', '40', 'B'),
('72', 'Snapdragon 6 Gen 1', '40', 'B'),
('73', 'Dimensity 1080', '40', 'B'),
('74', 'Dimensity 1050', '40', 'B'),
('75', 'Exynos 9825', '40', 'B'),
('76', 'A11 Bionic', '40', 'B'),
('77', 'Dimensity 7025', '39', 'B'),
('78', 'Dimensity 920', '39', 'B'),
('79', 'Exynos 9820', '39', 'B'),
('80', 'Dimensity 930', '38', 'B'),
('81', 'Kirin 980', '38', 'B'),
('82', 'Snapdragon 6s Gen 3', '37', 'B'),
('83', 'Dimensity 7020', '37', 'B'),
('84', 'Dimensity 900', '37', 'B'),
('85', 'Dimensity 820', '37', 'B'),
('86', 'Unisoc T820', '36', 'B'),
('87', 'Snapdragon 4 Gen 2', '36', 'B'),
('88', 'Exynos 1330', '36', 'B'),
('89', 'Kirin 820', '36', 'B'),
('90', 'Exynos 1280', '35', 'B'),
('91', 'Snapdragon 695', '35', 'B'),
('92', 'Snapdragon 765G', '35', 'B'),
('93', 'Helio G100', '34', 'C'),
('94', 'Dimensity 6080', '34', 'C'),
('95', 'Snapdragon 4 Gen 1', '34', 'C'),
('96', 'Snapdragon 750G', '34', 'C'),
('97', 'Dimensity 800', '34', 'C'),
('98', 'Exynos 980', '34', 'C'),
('99', 'Snapdragon 845', '34', 'C'),
('100', 'Unisoc T760', '33', 'C'),
('101', 'Dimensity 6300', '33', 'C'),
('102', 'Dimensity 6100 Plus', '33', 'C'),
('103', 'Helio G99', '33', 'C'),
('104', 'Snapdragon 480 Plus', '33', 'C'),
('105', 'Dimensity 810', '33', 'C'),
('106', 'Snapdragon 732G', '33', 'C'),
('107', 'Dimensity 800U', '33', 'C'),
('108', 'Dimensity 720', '33', 'C'),
('109', 'Snapdragon 720G', '33', 'C'),
('110', 'Kirin 810', '33', 'C'),
('111', 'Dimensity 6020', '32', 'C'),
('112', 'Snapdragon 480', '32', 'C'),
('113', 'Dimensity 700', '32', 'C'),
('114', 'Snapdragon 690', '32', 'C'),
('115', 'Snapdragon 730G', '32', 'C'),
('116', 'Exynos 9810', '32', 'C'),
('117', 'Snapdragon 685', '31', 'C'),
('118', 'Snapdragon 730', '31', 'C'),
('119', 'Helio G96', '30', 'C'),
('120', 'Helio G95', '30', 'C'),
('121', 'Helio G90', '30', 'C'),
('122', 'Helio G90T', '30', 'C'),
('123', 'A10 Fusion', '30', 'C'),
('124', 'Snapdragon 680', '29', 'C'),
('125', 'Snapdragon 678', '29', 'C'),
('126', 'Snapdragon 712', '29', 'C'),
('127', 'Snapdragon 835', '29', 'C'),
('128', 'Snapdragon 675', '28', 'C'),
('129', 'Kirin 970', '28', 'C'),
('130', 'Exynos 8895', '28', 'C'),
('131', 'Helio P95', '27', 'C'),
('132', 'Snapdragon 710', '27', 'C'),
('133', 'Tiger T615', '26', 'C'),
('134', 'Helio G91', '26', 'C'),
('135', 'Tiger T618', '26', 'C'),
('136', 'Apple A9', '26', 'C'),
('137', 'Snapdragon 670', '26', 'C'),
('138', 'Helio P90', '26', 'C'),
('139', 'Helio G81', '25', 'C'),
('140', 'Tiger T612', '25', 'C'),
('141', 'Tiger T616', '25', 'C'),
('142', 'Helio G88', '25', 'C'),
('143', 'Tiger T700', '25', 'C'),
('144', 'Helio G85', '25', 'C'),
('145', 'Snapdragon 662', '25', 'C'),
('146', 'Helio G80', '25', 'C'),
('147', 'Helio G70', '25', 'C'),
('148', 'Snapdragon 665', '25', 'C'),
('149', 'Unisoc T606', '24', 'D'),
('150', 'Tiger T610', '24', 'D'),
('151', 'Kirin 710F', '24', 'D'),
('152', 'Helio P65', '24', 'D'),
('153', 'Exynos 9611', '24', 'D'),
('154', 'Kirin 710A', '23', 'D'),
('155', 'Exynos 850', '23', 'D'),
('156', 'Snapdragon 460', '23', 'D'),
('157', 'Helio P70', '23', 'D'),
('158', 'Kirin 710', '23', 'D'),
('159', 'Snapdragon 821', '23', 'D'),
('160', 'Kirin 960', '23', 'D'),
('161', 'Exynos 8890', '23', 'D'),
('162', 'Exynos 9610', '23', 'D'),
('163', 'Helio G36', '22', 'D'),
('164', 'Helio G37', '22', 'D'),
('165', 'Helio G35', '22', 'D'),
('166', 'Helio P60', '22', 'D'),
('167', 'Snapdragon 660', '22', 'D'),
('168', 'Helio P35', '22', 'D'),
('169', 'Snapdragon 632', '22', 'D'),
('170', 'Helio G25', '21', 'D'),
('171', 'Snapdragon 820', '21', 'D'),
('172', 'Exynos 7904', '21', 'D'),
('173', 'Exynos 7884B', '20', 'D'),
('174', 'Exynos 7885', '20', 'D'),
('175', 'Snapdragon 439', '20', 'D'),
('176', 'Snapdragon 630', '20', 'D'),
('177', 'Helio P22', '20', 'D'),
('178', 'Snapdragon 636', '20', 'D'),
('179', 'Helio A22', '20', 'D'),
('180', 'Snapdragon 450', '18', 'D');


-- --------------------------------------------------------

--
-- Struktur dari tabel `perbandingan_kriteria`
--

CREATE TABLE `perbandingan_kriteria` (
  `id` int(11) NOT NULL,
  `kriteria1` int(11) NOT NULL,
  `kriteria2` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `perbandingan_kriteria`
--

INSERT INTO `perbandingan_kriteria` (`id`, `kriteria1`, `kriteria2`, `nilai`) VALUES
(7, 1, 2, 0.5),
(8, 1, 3, 4),
(9, 1, 4, 3),
(10, 1, 5, 2),
(11, 1, 6, 1),
(12, 1, 7, 3),
(13, 1, 8, 4),
(14, 2, 3, 1),
(15, 2, 4, 1),
(16, 2, 5, 1),
(17, 2, 6, 0.5),
(18, 2, 7, 3),
(19, 2, 8, 1),
(20, 3, 4, 0.25),
(21, 3, 5, 3),
(22, 3, 6, 2),
(23, 3, 7, 1),
(24, 3, 8, 3),
(25, 4, 5, 0.333333),
(26, 4, 6, 0.5),
(27, 4, 7, 1),
(28, 4, 8, 1),
(29, 5, 6, 4),
(30, 5, 7, 3),
(31, 5, 8, 1),
(32, 6, 7, 3),
(33, 6, 8, 0.5),
(34, 7, 8, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pv_kriteria`
--

CREATE TABLE `pv_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pv_kriteria`
--

INSERT INTO `pv_kriteria` (`id_kriteria`, `nilai`) VALUES
(1, 0.20425),
(2, 0.133524),
(3, 0.136225),
(4, 0.10261),
(5, 0.152598),
(6, 0.12249),
(7, 0.059312),
(8, 0.0889909);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ranking`
--

CREATE TABLE `ranking` (
  `id_alternatif` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_hp`
--
ALTER TABLE `data_hp`
  ADD PRIMARY KEY (`id_hp`);

--
-- Indeks untuk tabel `ir`
--
ALTER TABLE `ir`
  ADD PRIMARY KEY (`jumlah`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `perbandingan_kriteria`
--
ALTER TABLE `perbandingan_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pv_kriteria`
--
ALTER TABLE `pv_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_hp`
--
ALTER TABLE `data_hp`
  MODIFY `id_hp` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `perbandingan_kriteria`
--
ALTER TABLE `perbandingan_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
