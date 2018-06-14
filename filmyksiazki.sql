-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 14 Cze 2018, 21:31
-- Wersja serwera: 10.1.32-MariaDB
-- Wersja PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `filmyksiazki`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksiazkifilmy`
--

CREATE TABLE `ksiazkifilmy` (
  `id` int(11) NOT NULL,
  `rodzaj` varchar(50) NOT NULL,
  `nazwa` varchar(50) NOT NULL,
  `opis` varchar(250) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `glosy` int(255) NOT NULL,
  `glosy_ujemne` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `ksiazkifilmy`
--

INSERT INTO `ksiazkifilmy` (`id`, `rodzaj`, `nazwa`, `opis`, `autor`, `glosy`, `glosy_ujemne`) VALUES
(30, 'ksiazka', 'alamakota', 'alamakota', 'asd1234', 0, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uzytkownik` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `haslo` varchar(50) NOT NULL,
  `ban` int(1) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `uzytkownik`, `email`, `haslo`, `ban`, `admin`) VALUES
(11, 'asd1234', 'v3ko123@gmail.com', '1cd8e7658bb6db26fed1ce17940b7dbd', 0, 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `ksiazkifilmy`
--
ALTER TABLE `ksiazkifilmy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `ksiazkifilmy`
--
ALTER TABLE `ksiazkifilmy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
