-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 18 mei 2015 om 11:22
-- Serverversie: 5.6.16
-- PHP-versie: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `tedxpxl`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `kalender`
--

CREATE TABLE IF NOT EXISTS `kalender` (
  `event_id` int(10) NOT NULL,
  `beschrijving` text NOT NULL,
  `datum` date NOT NULL,
  `locatie` text NOT NULL,
  `start_uur` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `eind_uur` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publiek` varchar(2) NOT NULL,
  `details_event` text NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `kalender`
--

INSERT INTO `kalender` (`event_id`, `beschrijving`, `datum`, `locatie`, `start_uur`, `eind_uur`, `publiek`, `details_event`) VALUES
(1, 'Dance party', '2015-04-17', 'Hasselt', '2015-04-14 21:16:15', '0000-00-00 00:00:00', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
