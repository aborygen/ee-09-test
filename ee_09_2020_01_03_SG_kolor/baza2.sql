-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 02 Lis 2020, 22:12
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `prognoza`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `miasta`
--

CREATE TABLE `miasta` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(30) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `miasta`
--

INSERT INTO `miasta` (`id`, `nazwa`) VALUES
(1, 'Warszawa'),
(2, 'Poznań'),
(3, 'Kraków');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pogoda`
--

CREATE TABLE `pogoda` (
  `id` int(11) NOT NULL,
  `miasta_id` int(11) DEFAULT NULL,
  `data_prognozy` date DEFAULT NULL,
  `temperatura_noc` int(11) DEFAULT NULL,
  `temperatura_dzien` int(11) DEFAULT NULL,
  `opady` int(11) DEFAULT NULL,
  `cisnienie` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `pogoda`
--

INSERT INTO `pogoda` (`id`, `miasta_id`, `data_prognozy`, `temperatura_noc`, `temperatura_dzien`, `opady`, `cisnienie`) VALUES
(1, 2, '2019-05-18', 12, 15, 30, 996),
(2, 2, '2019-05-17', 11, 15, 30, 995),
(3, 2, '2019-05-16', 11, 17, 30, 995),
(4, 2, '2019-05-15', 8, 19, 4, 1000),
(5, 2, '2019-05-14', 8, 23, 4, 1000),
(6, 2, '2019-05-13', 5, 20, 0, 1020),
(7, 2, '2019-05-12', 5, 20, 0, 1020),
(8, 2, '2019-05-11', 11, 23, 0, 1020),
(9, 1, '2019-05-17', 12, 15, 30, 995),
(10, 1, '2019-05-17', 10, 16, 20, 997),
(11, 1, '2019-05-16', 10, 17, 20, 997),
(12, 1, '2019-05-15', 8, 18, 4, 1000),
(13, 1, '2019-05-14', 7, 24, 4, 1000),
(14, 1, '2019-05-13', 7, 22, 1, 1022),
(15, 1, '2019-05-12', 5, 22, 1, 1022),
(16, 1, '2019-05-11', 10, 23, 1, 1022),
(17, 3, '2019-05-17', 14, 13, 16, 995),
(18, 3, '2019-05-17', 13, 14, 10, 997),
(19, 3, '2019-05-16', 13, 12, 15, 997),
(20, 3, '2019-05-15', 9, 12, 6, 1014),
(21, 3, '2019-05-14', 4, 12, 6, 1010),
(22, 3, '2019-05-13', 4, 15, 3, 1060),
(23, 3, '2019-05-12', 5, 18, 2, 1032),
(24, 3, '2019-05-11', 11, 19, 1, 999);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `miasta`
--
ALTER TABLE `miasta`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `pogoda`
--
ALTER TABLE `pogoda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `miasta_id` (`miasta_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `miasta`
--
ALTER TABLE `miasta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `pogoda`
--
ALTER TABLE `pogoda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `pogoda`
--
ALTER TABLE `pogoda`
  ADD CONSTRAINT `pogoda_ibfk_1` FOREIGN KEY (`miasta_id`) REFERENCES `miasta` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
