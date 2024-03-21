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
  `hind` double(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Andmete tõmmistamine tabelile `albumid`
--

INSERT INTO `albumid` (`id`, `artist`, `album`, `aasta`, `hind`) VALUES
(2, 'Onu Bell', 'Fiat', '1998', 100.20),
(3, 'Xylia', 'Y-find', '2005', 35.00),
(4, 'Vernon', 'Greenlam', '1995', 32.00),
(5, 'Phillipp', 'Greenlam', '1989', 4.00),
(6, 'Maryann', 'Cookley', '2011', 20.00),
(7, 'Madella', 'Daltfresh', '2007', 88.00),
(8, 'Estrella', 'Home Ing', '2007', 46.00),
(9, 'Melanie', 'Gembucket', '1985', 50.00),
(10, 'Maxine', 'Fix San', '1990', 14.00),
(11, 'Lynn', 'Span', '1984', 95.00),
(12, 'Fleming', 'Aerified', '2012', 80.00),
(13, 'Francisca', 'Konklab', '2001', 81.00),
(14, 'Florina', 'Fixflex', '2000', 48.00),
(15, 'Gage', 'Andalax', '2012', 85.00),
(16, 'Nefen', 'Fixflex', '2003', 24.00),
(17, 'Evan', 'Greenlam', '2000', 22.00),
(18, 'Terrijo', 'Viva', '1996', 76.00),
(19, 'Ly', 'Home Ing', '2004', 31.00),
(20, 'Bette-ann', 'Vagram', '2010', 67.00),
(21, 'Sidonnie', 'Bigtax', '2005', 8.00),
(22, 'Florette', 'Prodder', '1999', 63.00),
(23, 'Buffy', 'Voltsillam', '1999', 12.00),
(24, 'Fawn', 'Stronghold', '1995', 1.00),
(25, 'Guss', 'Lotstring', '2003', 73.00),
(26, 'Astra', 'Regrant', '2002', 97.00),
(27, 'Marjie', 'Konklux', '1990', 10.00),
(28, 'Maddy', 'Veribet', '1993', 98.00),
(29, 'Walt', 'Home Ing', '2003', 77.00),
(30, 'Artair', 'Span', '2003', 5.00),
(31, 'Donalt', 'Kanlam', '2007', 50.00),
(32, 'Juliet', 'Matsoft', '1985', 34.00),
(33, 'Janela', 'Keylex', '2010', 48.00),
(34, 'Glen', 'Quo Lux', '2001', 1.00),
(35, 'Orlando', 'Treeflex', '2002', 92.00),
(36, 'Tiler', 'Zamit', '2007', 98.00),
(37, 'Rhea', 'Cookley', '1986', 47.00),
(38, 'Basilius', 'Matsoft', '2005', 65.00),
(39, 'Farleigh', 'Bytecard', '2004', 48.00),
(40, 'Phebe', 'Trippledex', '2010', 32.00),
(41, 'Cosmo', 'Toughjoyfax', '2009', 84.00),
(42, 'Lem', 'Namfix', '2006', 43.00),
(43, 'Jilly', 'Konklux', '1995', 19.00),
(44, 'Hewitt', 'Zoolab', '1992', 82.00),
(45, 'Josepha', 'Aerified', '2001', 89.00),
(46, 'Hilton', 'Voyatouch', '2006', 72.00),
(47, 'Bevvy', 'Home Ing', '1994', 54.00),
(48, 'Aubrey', 'Holdlamis', '2004', 61.00),
(49, 'Germayne', 'Latlux', '2007', 57.00),
(50, 'Son', 'Fix San', '2010', 34.00),
(51, 'Jacob', 'Y-Solowarm', '1995', 54.00),
(52, 'Liane', 'Vagram', '1996', 53.00),
(53, 'Odell', 'Lotlux', '1990', 43.00),
(54, 'Cayla', 'Transcof', '2006', 93.00),
(55, 'Tiffi', 'Sonair', '1987', 78.00),
(56, 'Morty', 'Sub-Ex', '2005', 20.00),
(57, 'Kipper', 'Flexidy', '2008', 65.00),
(58, 'Moina', 'Bitwolf', '2008', 36.00),
(59, 'Natty', 'Solarbreeze', '1985', 1.00),
(60, 'Kelci', 'Tresom', '1984', 44.00),
(61, 'Teri', 'Keylex', '1964', 23.00),
(62, 'Lusa', 'Daltfresh', '2006', 97.00),
(63, 'Donna', 'Solarbreeze', '2007', 14.00),
(64, 'Melodee', 'Quo Lux', '1999', 54.00),
(65, 'Tera', 'Keylex', '2011', 100.00),
(66, 'Cristal', 'Sonair', '2005', 64.00),
(67, 'Natala', 'Tempsoft', '2002', 91.00),
(68, 'Eveleen', 'Sonair', '2009', 7.00),
(69, 'Alleyn', 'Andalax', '1997', 55.00),
(70, 'Sib', 'Sonair', '2008', 11.00),
(71, 'Boniface', 'Mat Lam Tam', '1992', 6.00),
(72, 'Alexandre', 'Opela', '2010', 98.00),
(73, 'Kelcy', 'Wrapsafe', '1994', 63.00),
(74, 'Hestia', 'Bigtax', '2009', 45.00),
(75, 'Jordana', 'Cardguard', '2007', 7.00),
(76, 'Janey', 'Andalax', '2006', 60.00),
(77, 'Ulick', 'Temp', '2012', 20.00),
(78, 'Fanya', 'Fintone', '1992', 21.00),
(79, 'Jocelyne', 'Bitchip', '2006', 56.00),
(80, 'Flynn', 'Home Ing', '2008', 36.00),
(81, 'Susan', 'Fix San', '2010', 62.00),
(82, 'Sibley', 'Stim', '2003', 25.00),
(83, 'Bay', 'Fintone', '2000', 14.00),
(84, 'Kiah', 'Tres-Zap', '1994', 13.00),
(85, 'Audrey', 'Stronghold', '1991', 53.00),
(86, 'Baird', 'Kanlam', '2006', 29.00),
(87, 'Tyne', 'Transcof', '1996', 60.00),
(88, 'Benyamin', 'Voltsillam', '2004', 43.00),
(89, 'Karl', 'Tampflex', '2003', 71.00),
(90, 'Sorcha', 'Gembucket', '1994', 58.00),
(91, 'Diann', 'Ronstring', '1985', 40.00),
(92, 'Ursala', 'Treeflex', '1992', 100.00),
(93, 'Ardith', 'Bamity', '1994', 29.00),
(94, 'Michaeline', 'Andalax', '2003', 36.00),
(95, 'Emanuel', 'Job', '2000', 92.00),
(96, 'Tamara', 'Ventosanzap', '2003', 19.00),
(97, 'Oby', 'Fix San', '1987', 92.00),
(98, 'Kiri', 'Zamit', '2003', 3.00),
(99, 'Garey', 'Flowdesk', '2000', 31.00),
(100, 'Gwenni', 'Tresom', '1998', 12.00),
(101, 'Hayyim', 'Overhold', '2007', 99.00),
(102, 'Teena', 'Sub-Ex', '2007', 96.00);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
