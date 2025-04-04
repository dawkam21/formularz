-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2025 at 10:44 AM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_contact`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tbl_deletedusers`
--

CREATE TABLE `tbl_deletedusers` (
  `id` int(9) NOT NULL,
  `fldEmail` varchar(255) NOT NULL,
  `fldPhone` varchar(11) NOT NULL,
  `fldFirstName` varchar(60) NOT NULL,
  `fldLastName` varchar(60) NOT NULL,
  `fldPassword` varchar(60) NOT NULL,
  `fldBirthDate` date NOT NULL,
  `fldBirthPlace` varchar(60) NOT NULL,
  `fldWeight` int(3) NOT NULL,
  `fldHeight` int(3) NOT NULL,
  `fldSex` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_deletedusers`
--

INSERT INTO `tbl_deletedusers` (`id`, `fldEmail`, `fldPhone`, `fldFirstName`, `fldLastName`, `fldPassword`, `fldBirthDate`, `fldBirthPlace`, `fldWeight`, `fldHeight`, `fldSex`) VALUES
(1, 'lala@gmail.com', '111222333', 'lalal', 'lalal', '$2y$10$IkXif1KnOfX5WcJZ/4zTRet8cpvtBFPf1JNzy8x3Toy85EW20cUFK', '2019-12-11', 'lalala', 45, 150, 'Kobieta'),
(4, 'glewan@gmail.com', '555000999', 'Grzegorz', 'Lewandowski', '$2y$10$syNsogpd3AOmj3XNIv78Y.YCQlRXCvhSXEknzFfX08qfVt.jUjhkG', '1976-09-23', 'Gdynia', 90, 189, 'Mężczyzna'),
(14, 'kbrzez@gmail.com', '500600500', 'Kama', 'Brzezińska', '$2y$10$jYtvj3fiwz3AeAOkxseoAe6hn9FX/C25ZkOIwLP4RugqHVPdw5fQO', '1979-09-08', 'Poznań', 70, 178, 'Inny'),
(17, 'znowak@onet.pl', '700200300', 'Zbigniew', 'Nowak', '$2y$10$mMVAPyppWaQyrioktNMP0uBindl2gv1FU5NPl6LNQT.gbLTaV3Cwm', '1986-05-04', 'Poznań', 80, 175, 'Mężczyzna'),
(18, 'kadam@int.pl', '400400300', 'Karol', 'Adamski', '$2y$10$T/hjm9U6nAXya5pdCj.f6uiQQ2.2qYMXzGlEmVckIWRKBXTXrbHPG', '2001-02-28', 'Hel', 89, 187, 'Mężczyzna'),
(19, 'jzagorny@gmail.com', '202030030', 'Jan', 'Zagórny', '$2y$10$yHvYzoMFq5pUsBj/UYulb./gj2YQdCja5UJBQW5Ap24zLtas7Kl86', '1997-05-05', 'Jurata', 60, 160, 'Inny'),
(20, 'dkaminski@gmail.com', '929333444', 'Dawid', 'Kamiński', '$2y$10$i2f6iJxJGoFu9qdI77y5DuoN5C/oP3hyCy/XP7zFbt4cDSgL1MK3.', '1997-09-21', 'Bydgoszcz', 70, 178, 'Mężczyzna'),
(21, 'agaw@gmail.com', '202030300', 'Andrzej', 'Gawrych', '$2y$10$icJ6p1fXKtmWw2gNtVKc6emRQetee5eqi/4IV.ajti6BE2G6CbNzq', '1950-05-02', 'Zielona Góra', 86, 186, 'Mężczyzna');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `fldEmail` varchar(255) NOT NULL,
  `fldPhone` varchar(11) NOT NULL,
  `fldFirstName` varchar(60) NOT NULL,
  `fldLastName` varchar(60) NOT NULL,
  `fldPassword` varchar(60) NOT NULL,
  `fldBirthDate` date NOT NULL,
  `fldBirthPlace` varchar(60) NOT NULL,
  `fldWeight` int(3) NOT NULL,
  `fldHeight` int(3) NOT NULL,
  `fldSex` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `fldEmail`, `fldPhone`, `fldFirstName`, `fldLastName`, `fldPassword`, `fldBirthDate`, `fldBirthPlace`, `fldWeight`, `fldHeight`, `fldSex`) VALUES
(2, 'anowak@gmail.com', '999333111', 'Aniela', 'Nowak', '$2y$10$CKdSp/FMOu/sseo4OxUpAeb4ixeNDcRReMW2VaXrpqfByZGXL5dra', '1995-12-21', 'Wrocław', 67, 168, 'Kobieta'),
(3, 'awisniewski@gmail.com', '777999000', 'Anton', 'Wiśniewski', '$2y$10$85ZhJYm8PZZdVj9Sw/8XNeS4wQrj/iGKgdlAwBthuusx5VCIFmw6W', '1990-11-02', 'Toruń', 80, 176, 'Mężczyzna'),
(5, 'hwojcik@gmail.com', '777888999', 'Hellwig', 'Wójcik', '$2y$10$FyIyAvYqfaqWTqA6SQQvQekcrLG88Fu7Ep9uVMHqbA7ikA2XJYsLe', '1999-06-23', 'Warszawa', 98, 167, 'Inny'),
(6, 'awoniak@gmail.com', '999222999', 'Ala', 'Woniak', '$2y$10$e3xdMfeclQKhatYazL6iw.U91a5S5uW5MbZWLobKD/Z9y4v312/Hu', '2000-01-01', 'Szczecin', 76, 170, 'Kobieta'),
(7, 'twojc@gmail.com', '111222111', 'Tamara', 'Wojciechowska', '$2y$10$gRWFKUjk5oePjH6FKWzxqOlN3DNtH3xBG1EuKrggCu3V8E9N2gGjG', '1989-03-03', 'Łódź', 65, 176, 'Kobieta'),
(8, 'mdabr@int.pl', '776777466', 'Miłosz', 'Dąbrowski', '$2y$10$bfYSD0cgeVu1gY0ULXVHWeSLpk757Ab6SfRzM8/wqaqLBsVm24JTW', '1980-07-09', 'Elbląg', 80, 180, 'Mężczyzna'),
(9, 'jszym@onet.pl', '990990990', 'Jurand', 'Szymański', '$2y$10$ULwqdKWI0KS5KqnCO3Fd9.maDxKoXtq282AKbSZFDuNQhD0qJEF6W', '1976-08-24', 'Bydgoszcz', 89, 175, 'Mężczyzna'),
(10, 'fslawicki@gmail.com', '766355466', 'Flawian', 'Sławicki', '$2y$10$VYLE7qc7LfywrEHotQ.ykOP0dz81BuhF4kWIVGWJj561U6DIeAZI6', '2001-04-05', 'Gdańsk', 84, 174, 'Inny'),
(11, 'tprzybyl@int.pl', '200300500', 'Teodozja', 'Przybylska', '$2y$10$oPV0EwOCmdbyvgUIMqht3u3yqZWisyJWGBmD7RRChbL9BKuAZl68a', '1960-10-10', 'Kraków', 70, 160, 'Kobieta'),
(12, 'pbor@onet.pl', '800100200', 'Patrycja', 'Borowska', '$2y$10$JZxiJEF1c8ejZDb8hJCOgecUbabfc9Ze18vBZ7e5gGUiKD9d9q0pm', '1998-03-15', 'Toruń', 60, 169, 'Kobieta'),
(13, 'rlewa@gmail.com', '300200333', 'Robert', 'Lewandowski', '$2y$10$Wv2XNfPoBqaPHVcCcG12X.Z0pBReQIo9xovwLG8DMbxxqxoy40Pcu', '1976-04-25', 'Golub-Dobrzyń', 78, 176, 'Mężczyzna'),
(15, 'aziolko@int.pl', '600500400', 'Arkady', 'Ziółkowski', '$2y$10$.qt3mLLeXvMC4ru1D61xtuLQKcVyMs5Jmd/qmUGcO3RViMwZDZ2ru', '2004-03-02', 'Częstochowa', 80, 191, 'Mężczyzna'),
(16, 'amilik@gmail.com', '900900900', 'Arkadiusz', 'Milik', '$2y$10$vIuiv2xBV8b9NkZsocNhEObX7Nt64U.FIES/3XyuGfKyyFhowHBAG', '1994-06-07', 'Grudziądz', 76, 179, 'Mężczyzna'),
(22, 'jbednarek@gmail.com', '243443434', 'Jakub', 'Bednarek', '$2y$10$19t4l/brSupd0tl4yH53TOQMApmPST1EK82Akk0AeQqy.ZKSwwzju', '1990-03-03', 'Toruń', 80, 180, 'Mężczyzna'),
(33, 'cyprian.putek@onet.pl', '184514627', 'Cyprian', 'Putek', '$2y$10$gF6cW1GC7dDyQE4efLerNHu9GCLgR0OVSnBovCzfAPxj5eZffTYIK', '1990-10-21', 'Warszawa', 50, 196, 'M'),
(34, 'fryderyk.sobieszczyk@hotmail.com', '828148932', 'Fryderyk', 'Sobieszczyk', '$2y$10$IuhvPU1S8LvJnOng0wVJY08YMNb5ZqlRtva1JyiNbUnAvwSWJfdjM', '1980-12-26', 'Lublin', 73, 198, 'M'),
(35, 'sara.gryciuk@gmail.com', '957015430', 'Sara', 'Gryciuk', '$2y$10$PqPEBqUhArQEPcyLasnipuaUkxRFZXe1cb51JJRzhbuXMZ5f0pKGy', '1988-07-31', 'Warszawa', 65, 186, 'K'),
(36, 'andrzej.armatys@onet.pl', '718227824', 'Andrzej', 'Armatys', '$2y$10$tvukFhF4vTYYojmLVOkVEUVB5INM1MjeBsrdFtCdZe11MFCIX3BYO', '1996-07-15', 'Łódź', 83, 188, 'M'),
(37, 'wiktor.kamieniak@o2.pl', '834657871', 'Wiktor', 'Kamieniak', '$2y$10$tDjdg3vSFkpBBGjxrzuLWOefQrSO42uKiv7RyK6txXYPZTQGOAwwl', '1977-08-11', 'Szczecin', 65, 164, 'M'),
(38, 'kaja.jancewicz@hotmail.com', '098393010', 'Kaja', 'Jancewicz', '$2y$10$n6Eoie0gVZ2cuVixkZVYkBzPoBrUBHtYDZw69CrxG7YXipN2Ig00r', '1990-07-04', 'Katowice', 64, 154, 'K'),
(39, 'dominik.dywan@gmail.com', '183473829', 'Dominik', 'Dywan', '$2y$10$Vq4jB6nBvbdFo9xb50OXirZRiRBaepZITGgrscAXCg4KbFpiAMozP', '1992-10-18', 'Katowice', 86, 180, 'M'),
(40, 'ida.długajczyk@yahoo.com', '631165667', 'Ida', 'Długajczyk', '$2y$10$f8eGF9IyDN8pbWvTMVTucHYkWCRNYdWCscmc5F9HpUlwW1uhw3U3x', '1974-11-28', 'Kielce', 105, 196, 'K'),
(41, 'wojciech.chalimoniuk@onet.pl', '065133387', 'Wojciech', 'Chalimoniuk', '$2y$10$8EE5GXTeLYHteOtLAQvc1v9r86eNwXQ7iLWceWwxJLQ6xVJGyOphT', '1988-01-14', 'Wrocław', 58, 177, 'M'),
(42, 'cyprian.filiks@yahoo.com', '731781080', 'Cyprian', 'Filiks', '$2y$10$ExIqqB9r4Eh0C3BfQ0tveH30S5NXFhmiXbIwXILft9SGVZe8NBQv2', '1993-09-21', 'Lublin', 55, 198, 'M'),
(43, 'alicja.wójcik@o2.pl', '456123789', 'Alicja', 'Wójcik', '$2y$10$gF6cW1GC7dDyQE4efLerNHu9GCLgR0OVSnBovCzfAPxj5eZffTYIK', '1998-05-03', 'Poznań', 54, 162, 'K'),
(44, 'mikołaj.szewczyk@hotmail.com', '333444555', 'Mikołaj', 'Szewczyk', '$2y$10$IuhvPU1S8LvJnOng0wVJY08YMNb5ZqlRtva1JyiNbUnAvwSWJfdjM', '1983-09-12', 'Gdańsk', 89, 182, 'M'),
(45, 'zofia.dąbrowska@gmail.com', '666777888', 'Zofia', 'Dąbrowska', '$2y$10$PqPEBqUhArQEPcyLasnipuaUkxRFZXe1cb51JJRzhbuXMZ5f0pKGy', '1979-02-28', 'Bydgoszcz', 62, 168, 'K'),
(46, 'krzysztof.woźniak@onet.pl', '123987456', 'Krzysztof', 'Woźniak', '$2y$10$tvukFhF4vTYYojmLVOkVEUVB5INM1MjeBsrdFtCdZe11MFCIX3BYO', '1991-11-11', 'Radom', 78, 175, 'M'),
(47, 'natalia.kaczmarek@yahoo.com', '852963741', 'Natalia', 'Kaczmarek', '$2y$10$tDjdg3vSFkpBBGjxrzuLWOefQrSO42uKiv7RyK6txXYPZTQGOAwwl', '1987-04-05', 'Częstochowa', 59, 160, 'K'),
(48, 'patryk.jaworski@o2.pl', '147258369', 'Patryk', 'Jaworski', '$2y$10$n6Eoie0gVZ2cuVixkZVYkBzPoBrUBHtYDZw69CrxG7YXipN2Ig00r', '2000-01-01', 'Gdynia', 95, 190, 'M'),
(49, 'magdalena.lewandowska@onet.pl', '369258147', 'Magdalena', 'Lewandowska', '$2y$10$Vq4jB6nBvbdFo9xb50OXirZRiRBaepZITGgrscAXCg4KbFpiAMozP', '1982-06-30', 'Sosnowiec', 68, 172, 'K'),
(50, 'tomasz.pawlak@gmail.com', '258147369', 'Tomasz', 'Pawlak', '$2y$10$f8eGF9IyDN8pbWvTMVTucHYkWCRNYdWCscmc5F9HpUlwW1uhw3U3x', '1975-03-17', 'Rzeszów', 102, 185, 'M'),
(51, 'karolina.michalak@hotmail.com', '753159486', 'Karolina', 'Michalak', '$2y$10$8EE5GXTeLYHteOtLAQvc1v9r86eNwXQ7iLWceWwxJLQ6xVJGyOphT', '1994-08-22', 'Opole', 57, 158, 'K'),
(52, 'sebastian.zając@yahoo.com', '951753824', 'Sebastian', 'Zając', '$2y$10$ExIqqB9r4Eh0C3BfQ0tveH30S5NXFhmiXbIwXILft9SGVZe8NBQv2', '1986-12-24', 'Białystok', 88, 192, 'M'),
(53, 'ewa.kowalczyk@o2.pl', '357159852', 'Ewa', 'Kowalczyk', '$2y$10$gF6cW1GC7dDyQE4efLerNHu9GCLgR0OVSnBovCzfAPxj5eZffTYIK', '1997-07-07', 'Toruń', 63, 166, 'K'),
(54, 'marcin.sokołowski@onet.pl', '456852793', 'Marcin', 'Sokołowski', '$2y$10$IuhvPU1S8LvJnOng0wVJY08YMNb5ZqlRtva1JyiNbUnAvwSWJfdjM', '1981-09-09', 'Kielce', 77, 178, 'M'),
(55, 'agnieszka.witkowska@gmail.com', '268415937', 'Agnieszka', 'Witkowska', '$2y$10$PqPEBqUhArQEPcyLasnipuaUkxRFZXe1cb51JJRzhbuXMZ5f0pKGy', '1999-04-18', 'Olsztyn', 60, 155, 'K'),
(56, 'damian.górski@hotmail.com', '394857621', 'Damian', 'Górski', '$2y$10$tvukFhF4vTYYojmLVOkVEUVB5INM1MjeBsrdFtCdZe11MFCIX3BYO', '1993-10-31', 'Zielona Góra', 91, 184, 'M'),
(57, 'weronika.dudek@yahoo.com', '619283745', 'Weronika', 'Dudek', '$2y$10$tDjdg3vSFkpBBGjxrzuLWOefQrSO42uKiv7RyK6txXYPZTQGOAwwl', '1984-05-25', 'Gliwice', 66, 163, 'K'),
(58, 'marek.kwiatkowski@o2.pl', '785412963', 'Marek', 'Kwiatkowski', '$2y$10$n6Eoie0gVZ2cuVixkZVYkBzPoBrUBHtYDZw69CrxG7YXipN2Ig00r', '1978-02-14', 'Zabrze', 84, 176, 'M'),
(59, 'joanna.nowicka@onet.pl', '321654987', 'Joanna', 'Nowicka', '$2y$10$Vq4jB6nBvbdFo9xb50OXirZRiRBaepZITGgrscAXCg4KbFpiAMozP', '1995-11-09', 'Bielsko-Biała', 70, 170, 'K'),
(60, 'łukasz.adamczyk@gmail.com', '159753486', 'Łukasz', 'Adamczyk', '$2y$10$f8eGF9IyDN8pbWvTMVTucHYkWCRNYdWCscmc5F9HpUlwW1uhw3U3x', '1989-06-12', 'Rybnik', 79, 181, 'M'),
(61, 'monika.król@hotmail.com', '486275139', 'Monika', 'Król', '$2y$10$8EE5GXTeLYHteOtLAQvc1v9r86eNwXQ7iLWceWwxJLQ6xVJGyOphT', '1976-08-08', 'Tychy', 55, 159, 'K'),
(62, 'rafał.jasiński@yahoo.com', '753951486', 'Rafał', 'Jasiński', '$2y$10$ExIqqB9r4Eh0C3BfQ0tveH30S5NXFhmiXbIwXILft9SGVZe8NBQv2', '1990-03-27', 'Koszalin', 93, 187, 'M'),
(63, 'kinga.ostrowska@o2.pl', '369852147', 'Kinga', 'Ostrowska', '$2y$10$gF6cW1GC7dDyQE4efLerNHu9GCLgR0OVSnBovCzfAPxj5eZffTYIK', '1983-01-19', 'Legnica', 67, 171, 'K'),
(64, 'artur.pietrzak@onet.pl', '258369147', 'Artur', 'Pietrzak', '$2y$10$IuhvPU1S8LvJnOng0wVJY08YMNb5ZqlRtva1JyiNbUnAvwSWJfdjM', '1998-07-23', 'Grudziądz', 82, 183, 'M'),
(65, 'justyna.marciniak@gmail.com', '147258396', 'Justyna', 'Marciniak', '$2y$10$PqPEBqUhArQEPcyLasnipuaUkxRFZXe1cb51JJRzhbuXMZ5f0pKGy', '1985-12-05', 'Słupsk', 61, 161, 'K'),
(66, 'kamil.zawadzki@hotmail.com', '396147258', 'Kamil', 'Zawadzki', '$2y$10$tvukFhF4vTYYojmLVOkVEUVB5INM1MjeBsrdFtCdZe11MFCIX3BYO', '1974-04-16', 'Jaworzno', 97, 191, 'M'),
(67, 'barbara.sobczak@yahoo.com', '753159486', 'Barbara', 'Sobczak', '$2y$10$tDjdg3vSFkpBBGjxrzuLWOefQrSO42uKiv7RyK6txXYPZTQGOAwwl', '1992-10-10', 'Jastrzębie-Zdrój', 69, 169, 'K'),
(68, 'paweł.kalinowski@o2.pl', '852963741', 'Paweł', 'Kalinowski', '$2y$10$n6Eoie0gVZ2cuVixkZVYkBzPoBrUBHtYDZw69CrxG7YXipN2Ig00r', '1987-06-28', 'Nowy Sącz', 80, 177, 'M'),
(69, 'dominika.baran@onet.pl', '321654987', 'Dominika', 'Baran', '$2y$10$Vq4jB6nBvbdFo9xb50OXirZRiRBaepZITGgrscAXCg4KbFpiAMozP', '1994-09-14', 'Siedlce', 58, 156, 'K'),
(70, 'robert.czarnecki@gmail.com', '159357486', 'Robert', 'Czarnecki', '$2y$10$f8eGF9IyDN8pbWvTMVTucHYkWCRNYdWCscmc5F9HpUlwW1uhw3U3x', '1979-11-30', 'Piła', 94, 189, 'M'),
(71, 'kamila.sikora@hotmail.com', '753486159', 'Kamila', 'Sikora', '$2y$10$8EE5GXTeLYHteOtLAQvc1v9r86eNwXQ7iLWceWwxJLQ6xVJGyOphT', '1991-05-21', 'Płock', 62, 164, 'K'),
(72, 'michał.borkowski@yahoo.com', '486275139', 'Michał', 'Borkowski', '$2y$10$ExIqqB9r4Eh0C3BfQ0tveH30S5NXFhmiXbIwXILft9SGVZe8NBQv2', '1988-03-08', 'Suwałki', 87, 182, 'M'),
(73, 'aleksandra.rutkowska@o2.pl', '369147258', 'Aleksandra', 'Rutkowska', '$2y$10$gF6cW1GC7dDyQE4efLerNHu9GCLgR0OVSnBovCzfAPxj5eZffTYIK', '1996-02-29', 'Elbląg', 56, 157, 'K'),
(74, 'dariusz.maciejewski@onet.pl', '258147369', 'Dariusz', 'Maciejewski', '$2y$10$IuhvPU1S8LvJnOng0wVJY08YMNb5ZqlRtva1JyiNbUnAvwSWJfdjM', '1980-07-19', 'Tarnów', 89, 178, 'M'),
(75, 'marzena.lis@gmail.com', '147369258', 'Marzena', 'Lis', '$2y$10$PqPEBqUhArQEPcyLasnipuaUkxRFZXe1cb51JJRzhbuXMZ5f0pKGy', '1977-04-12', 'Chełm', 71, 167, 'K'),
(76, 'grzegorz.mazur@hotmail.com', '369258147', 'Grzegorz', 'Mazur', '$2y$10$tvukFhF4vTYYojmLVOkVEUVB5INM1MjeBsrdFtCdZe11MFCIX3BYO', '1993-01-25', 'Przemyśl', 92, 185, 'M'),
(77, 'iwona.kubiak@yahoo.com', '258369147', 'Iwona', 'Kubiak', '$2y$10$tDjdg3vSFkpBBGjxrzuLWOefQrSO42uKiv7RyK6txXYPZTQGOAwwl', '1984-08-07', 'Zamość', 64, 163, 'K'),
(78, 'radosław.wróbel@o2.pl', '753159486', 'Radosław', 'Wróbel', '$2y$10$n6Eoie0gVZ2cuVixkZVYkBzPoBrUBHtYDZw69CrxG7YXipN2Ig00r', '1999-12-31', 'Leszno', 81, 179, 'M'),
(79, 'dorota.krupa@onet.pl', '357159852', 'Dorota', 'Krupa', '$2y$10$Vq4jB6nBvbdFo9xb50OXirZRiRBaepZITGgrscAXCg4KbFpiAMozP', '1986-06-15', 'Stalowa Wola', 59, 160, 'K'),
(80, 'kazimierz.sawicki@gmail.com', '951753824', 'Kazimierz', 'Sawicki', '$2y$10$f8eGF9IyDN8pbWvTMVTucHYkWCRNYdWCscmc5F9HpUlwW1uhw3U3x', '1973-09-05', 'Kalisz', 98, 190, 'M'),
(81, 'aneta.michalska@hotmail.com', '619283745', 'Aneta', 'Michalska', '$2y$10$8EE5GXTeLYHteOtLAQvc1v9r86eNwXQ7iLWceWwxJLQ6xVJGyOphT', '1995-10-22', 'Wałbrzych', 63, 165, 'K'),
(82, 'mirosław.duda@yahoo.com', '394857621', 'Mirosław', 'Duda', '$2y$10$ExIqqB9r4Eh0C3BfQ0tveH30S5NXFhmiXbIwXILft9SGVZe8NBQv2', '1981-03-17', 'Tczew', 85, 180, 'M'),
(83, 'ewelina.laskowska@o2.pl', '456852793', 'Ewelina', 'Laskowska', '$2y$10$gF6cW1GC7dDyQE4efLerNHu9GCLgR0OVSnBovCzfAPxj5eZffTYIK', '1997-04-04', 'Świętochłowice', 66, 168, 'K'),
(84, 'stanisław.kowal@onet.pl', '123987456', 'Stanisław', 'Kowal', '$2y$10$IuhvPU1S8LvJnOng0wVJY08YMNb5ZqlRtva1JyiNbUnAvwSWJfdjM', '1982-11-11', 'Siemianowice Śląskie', 90, 184, 'M'),
(85, 'renata.górecka@gmail.com', '666777888', 'Renata', 'Górecka', '$2y$10$PqPEBqUhArQEPcyLasnipuaUkxRFZXe1cb51JJRzhbuXMZ5f0pKGy', '1978-07-07', 'Zgierz', 57, 159, 'K'),
(86, 'tadeusz.baranowski@hotmail.com', '333444555', 'Tadeusz', 'Baranowski', '$2y$10$tvukFhF4vTYYojmLVOkVEUVB5INM1MjeBsrdFtCdZe11MFCIX3BYO', '1990-05-18', 'Pabianice', 88, 181, 'M'),
(87, 'sylwia.jabłońska@yahoo.com', '852963741', 'Sylwia', 'Jabłońska', '$2y$10$tDjdg3vSFkpBBGjxrzuLWOefQrSO42uKiv7RyK6txXYPZTQGOAwwl', '1989-08-29', 'Gniezno', 60, 162, 'K'),
(88, 'leszek.mazurek@o2.pl', '753951486', 'Leszek', 'Mazurek', '$2y$10$n6Eoie0gVZ2cuVixkZVYkBzPoBrUBHtYDZw69CrxG7YXipN2Ig00r', '1976-12-24', 'Ostrołęka', 96, 188, 'M'),
(89, 'marta.konieczna@onet.pl', '357159486', 'Marta', 'Konieczna', '$2y$10$Vq4jB6nBvbdFo9xb50OXirZRiRBaepZITGgrscAXCg4KbFpiAMozP', '1994-02-14', 'Pruszków', 70, 170, 'K'),
(90, 'jacek.sowa@gmail.com', '159357486', 'Jacek', 'Sowa', '$2y$10$f8eGF9IyDN8pbWvTMVTucHYkWCRNYdWCscmc5F9HpUlwW1uhw3U3x', '1983-10-09', 'Legionowo', 84, 176, 'M'),
(91, 'urszula.wilk@hotmail.com', '753486159', 'Urszula', 'Wilk', '$2y$10$8EE5GXTeLYHteOtLAQvc1v9r86eNwXQ7iLWceWwxJLQ6xVJGyOphT', '1991-09-03', 'Żory', 58, 158, 'K'),
(92, 'ryszard.krajewski@yahoo.com', '486275139', 'Ryszard', 'Krajewski', '$2y$10$ExIqqB9r4Eh0C3BfQ0tveH30S5NXFhmiXbIwXILft9SGVZe8NBQv2', '1975-06-28', 'Bełchatów', 93, 183, 'M');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `tbl_deletedusers`
--
ALTER TABLE `tbl_deletedusers`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_deletedusers`
--
ALTER TABLE `tbl_deletedusers`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
