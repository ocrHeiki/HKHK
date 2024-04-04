-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Loomise aeg: Märts 21, 2024 kell 03:12 PL
-- Serveri versioon: 10.4.32-MariaDB
-- PHP versioon: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Andmebaas: `muusikapood`
--

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `albumid`
--

CREATE TABLE `albumid` (
  `id` int(10) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `album` varchar(255) NOT NULL,
  `aasta` year(4) NOT NULL,
  `hind` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Andmete tõmmistamine tabelile `albumid`
--

INSERT INTO `albumid` (`id`, `artist`, `album`, `aasta`, `hind`) VALUES
(1, 'Onu Bella', 'Fiat', '1998', 110.20),
(2, 'Camila', 'Tampflex', '1992', 80.45),
(3, 'Candra', 'Tempsoft', '1984', 74.20),
(4, 'Dinah', 'Sonair', '2008', 68.71),
(5, 'Dorisa', 'Cardify', '1992', 89.67),
(6, 'Sile', 'Zoolab', '1992', 82.32),
(7, 'Bo', 'Greenlam', '1993', 71.27),
(8, 'Alford', 'Sonair', '1975', 95.37),
(9, 'Ulick', 'Lotstring', '2010', 40.98),
(10, 'Ralf', 'Redhold', '1992', 55.93),
(11, 'Nevsa', 'Biodex', '2010', 14.62),
(12, 'Quinta', 'Gembucket', '1995', 57.02),
(13, 'Osborn', 'Zontrax', '2010', 53.33),
(14, 'Jerrie', 'Alphazap', '2006', 48.66),
(15, 'Abbie', 'Stronghold', '2007', 90.13),
(16, 'Zola', 'Biodex', '1994', 65.16),
(17, 'Brynn', 'Stronghold', '2009', 91.57),
(18, 'Mata', 'Stronghold', '1995', 80.02),
(19, 'Ag', 'Stringtough', '1997', 48.56),
(20, 'Morgen', 'Bytecard', '1990', 22.66),
(21, 'Bernice', 'Voltsillam', '2002', 97.91),
(22, 'Stearne', 'Bitwolf', '1992', 42.33),
(23, 'Adamo', 'Quo Lux', '2011', 81.22),
(24, 'Saxe', 'Kanlam', '2007', 72.65),
(25, 'Meg', 'Stringtough', '2009', 23.68),
(26, 'Elmo', 'Tres-Zap', '1995', 25.26),
(27, 'Arch', 'Biodex', '1970', 2.86),
(28, 'Pincas', 'Stronghold', '1996', 76.64),
(29, 'Land', 'Lotlux', '1994', 93.76),
(30, 'Shay', 'Wrapsafe', '2003', 94.34),
(31, 'Anderson', 'Temp', '2007', 86.73),
(32, 'Jorey', 'Tin', '2004', 53.73),
(33, 'Germaine', 'Tampflex', '2003', 76.54),
(34, 'Sheela', 'Tempsoft', '2010', 75.84),
(35, 'Hildagarde', 'Bitchip', '2012', 20.53),
(36, 'Brandice', 'Wrapsafe', '2007', 90.06),
(37, 'Danyelle', 'Fix San', '2004', 92.60),
(38, 'Jedidiah', 'Latlux', '1992', 94.40),
(39, 'Mollie', 'Aerified', '2003', 26.91),
(40, 'Haley', 'Duobam', '1988', 6.21),
(41, 'Elizabet', 'Alphazap', '2003', 99.34),
(42, 'Yuri', 'Cookley', '2012', 39.24),
(43, 'Janaye', 'Bytecard', '2000', 4.18),
(44, 'Cathie', 'Lotlux', '2003', 36.48),
(45, 'Marthena', 'Wrapsafe', '2011', 20.46),
(46, 'Kerry', 'Tresom', '2011', 40.93),
(47, 'Trula', 'Y-Solowarm', '2008', 27.52),
(48, 'Alford', 'Zathin', '2001', 95.03),
(49, 'Mignonne', 'Tin', '2003', 27.32),
(50, 'Maurizia', 'Otcom', '2004', 66.72),
(51, 'Teodoro', 'Sonsing', '2010', 81.88),
(52, 'Falito', 'Greenlam', '2010', 99.96),
(53, 'Alexandros', 'Matsoft', '2008', 63.26),
(54, 'Yevette', 'Sonsing', '2005', 9.56),
(55, 'Darius', 'Otcom', '1998', 19.31),
(56, 'Laird', 'Holdlamis', '1999', 77.45),
(57, 'Cullin', 'Daltfresh', '1994', 36.92),
(58, 'Stuart', 'Redhold', '1998', 45.74),
(59, 'Aleda', 'Cardify', '2008', 19.68),
(60, 'Laraine', 'Viva', '2006', 70.14),
(61, 'Chrystal', 'Trippledex', '2012', 36.48),
(62, 'Nancy', 'Ventosanzap', '2006', 33.44),
(63, 'Bobby', 'Otcom', '2010', 52.62),
(64, 'Stanleigh', 'Lotstring', '1999', 95.04),
(65, 'Mortimer', 'Vagram', '2008', 48.30),
(66, 'Tabbatha', 'Konklab', '2006', 14.07),
(67, 'Bren', 'Stronghold', '1995', 3.36),
(68, 'Wilek', 'Tin', '2006', 50.79),
(69, 'Elliot', 'Konklux', '2004', 52.02),
(70, 'Bary', 'Overhold', '1991', 98.39),
(71, 'Luther', 'Job', '2003', 27.90),
(72, 'Modesty', 'Asoka', '1992', 14.43),
(73, 'Tracie', 'Duobam', '1993', 72.23),
(74, 'Cary', 'Veribet', '2009', 89.08),
(75, 'Martha', 'Wrapsafe', '1993', 70.11),
(76, 'Janette', 'Bigtax', '1984', 36.54),
(77, 'Nick', 'Ventosanzap', '1999', 30.00),
(78, 'Udell', 'Namfix', '1999', 16.86),
(79, 'Susi', 'Voyatouch', '2003', 29.03),
(80, 'Barde', 'Stringtough', '2004', 13.82),
(81, 'Bondie', 'Subin', '1999', 37.58),
(82, 'Milty', 'Veribet', '2008', 17.05),
(83, 'Valencia', 'Gembucket', '2006', 87.54),
(84, 'Pippo', 'Ronstring', '1994', 30.47),
(85, 'Shaylah', 'Konklab', '2012', 86.62),
(86, 'Trudey', 'Home Ing', '1997', 86.08),
(87, 'Ilaire', 'Treeflex', '1988', 38.08),
(88, 'Ring', 'Prodder', '2010', 70.11),
(89, 'Torrence', 'Voyatouch', '1993', 38.01),
(90, 'Brandi', 'Transcof', '1970', 81.65),
(91, 'Gerrard', 'Duobam', '1997', 93.57),
(92, 'Harlen', 'It', '2010', 61.87),
(93, 'Viva', 'Bamity', '2005', 93.64),
(94, 'Waylin', 'Temp', '2001', 85.54),
(95, 'Emeline', 'Treeflex', '1991', 38.46),
(96, 'Melessa', 'Bamity', '2013', 99.10),
(97, 'Essie', 'Bitchip', '1969', 20.99),
(98, 'Gorden', 'Zathin', '2008', 48.39),
(99, 'Serge', 'Asoka', '2002', 40.53),
(100, 'Noami', 'Greenlam', '1998', 90.15),
(101, 'James', 'Kanlam', '1973', 2.04);

--
-- Indeksid tõmmistatud tabelitele
--

--
-- Indeksid tabelile `albumid`
--
ALTER TABLE `albumid`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT tõmmistatud tabelitele
--

--
-- AUTO_INCREMENT tabelile `albumid`
--
ALTER TABLE `albumid`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;