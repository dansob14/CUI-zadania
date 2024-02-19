-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2024 at 11:42 AM
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
-- Database: `zadanie3`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `imie` text NOT NULL,
  `nazwisko` text NOT NULL,
  `oauth_token` text NOT NULL,
  `date_token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `imie`, `nazwisko`, `oauth_token`, `date_token`) VALUES
(1, 'Daniel', 'Sobolewski', 'EwCAA8l6BAAUs5+HQn0N+h2FxWzLS31ZgQVuHsYAARj5SV9MEvYhBnEB4f3djkfRJ48ckqNQYoFnwLTsT5hLy3wqp0MuhmFDyXjF4xMekkdDw0bzohuhU/IE1TkiIIeGgEKz6Fyr0KzedGD97oEUbmEOd9detK9QcijifmKAeyCRuXUd4fOC2t2a1XhlVlTHKxhnNLpQ0YJkVE9xNoHLTlnlKn8xCjOFUk1aQZ3sQ8/v8V+qXV6xAEwINFJnTz2/W8S/kl5PXsBmtFvcpDd3e2iPUkBxzwecEg6zsc600zIDdBsouSE9n2T7BsYavj8Drnt0MYYYL5r9w7yNXfocK9GhRwsVpzbesTsQqY4nZR5TX+dFtM6d2RewSPcozMYDZgAACNH0ysQDPd76UALAEteR5La6A7YSYa9vuY+ENFpwhdf+6V8P94LnCI+Czh+y0oQ5zeH8du5TzgYIb/8XXDYyI1r47lPFWulkmdWAtb6AJM5rS7FejGLL0n0K3x4HHDqE2BmIUswRmll9jo0hXBQGK7CS+keVjxtU095QnKkqVu2auwwU+K4cnDe4A0VgrulS4MFo3WFHx9+v7zAinLzq4dkzvXDuSwwnX9F58l6a/Ovbd1sysf3/mZ1K/DPTTiGiMmSq1TBX2mKwRh8CvOsp9E3QwAts46lR0m1V1RSb1MUVGMqCANywi7lZfz3Fy36s6C+svtzay+6LZlsnOFMJLXjeA+xbSnd77DNP/mdD6Mn4qjlCq6nULnKPUrpMu07RaA3+xv0674uP0If032J9Q/vu6zZHXdEl5CBRptGXTmN03aYoq239K7wNTYWzT7aOxesJlZSI5KGil6Ir+mA+69AUADPxSMQvLRn906hiYa58eVjM8Drr1Uezv9gQFtscBgfhpWlMamxwr7wrg6CJ7TSgc2VPCLk6PFV6Rf89kd76rOy77q3uE1NE7mzFYwh17zP+AbzL5Wlz42rZ1wrA8d0Iz8ehqvlJb/kvDKjj6rgw96eRmfKy1/LcD8vSK+iT6UMLBcQ+AyM7U/miViGpFLdJkEPjgW8V3O8OEC9LR/W2XlJmWV7TzzZG8MY/Opv03q0ByCNCqfEQef6/j3INnQVkdE620qLaAEuw4aSfcP+aQulCTm3YKt6QQ7Z4l8KsfYDzx+tkvCQd1zFc1IKrGM7eXoXBviHdGpeligI=', '19-02-24');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
