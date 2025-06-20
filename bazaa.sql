-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2022 at 08:54 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bazaa`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminn`
--

CREATE TABLE `adminn` (
  `id` int(11) NOT NULL,
  `adminName` varchar(100) NOT NULL,
  `apassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminn`
--

INSERT INTO `adminn` (`id`, `adminName`, `apassword`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `aerodrom`
--

CREATE TABLE `aerodrom` (
  `idAerodroma` int(100) NOT NULL,
  `imeAerodroma` varchar(50) NOT NULL,
  `lokacijaAerodroma` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aerodrom`
--

INSERT INTO `aerodrom` (`idAerodroma`, `imeAerodroma`, `lokacijaAerodroma`) VALUES
(3, 'Tivat', 'Maroko'),
(4, 'Nis', 'Srbija'),
(5, 'Budapest', 'Madjarska'),
(6, 'Budapest1', 'Madjarska');

-- --------------------------------------------------------

--
-- Table structure for table `avioprevoznik`
--

CREATE TABLE `avioprevoznik` (
  `idAvioPrevoznika` int(100) NOT NULL,
  `imeAvioPrevoznika` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `avioprevoznik`
--

INSERT INTO `avioprevoznik` (`idAvioPrevoznika`, `imeAvioPrevoznika`) VALUES
(6, 'Lufthansa'),
(7, 'Turkish Airlines'),
(8, 'Wizz Air'),
(9, 'Ryanair'),
(10, 'Austrian'),
(11, 'Swiss'),
(12, 'FlyDubai'),
(13, 'Air-Serbia');

-- --------------------------------------------------------

--
-- Table structure for table `bukiranje`
--

CREATE TABLE `bukiranje` (
  `ID` int(11) NOT NULL,
  `TipLeta` varchar(40) NOT NULL,
  `Vreme` time NOT NULL,
  `Datum` date NOT NULL,
  `DatumPovratka` date NOT NULL,
  `brojLeta` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `IME_KLASE` varchar(40) NOT NULL,
  `BOOK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `let`
--

CREATE TABLE `let` (
  `idLeta` int(100) NOT NULL,
  `idavioprevoznika` int(100) NOT NULL,
  `idAviona` int(30) NOT NULL,
  `aerodrom1_id` int(30) NOT NULL,
  `aerodrom2_id` int(30) NOT NULL,
  `pocetnoVreme` datetime NOT NULL,
  `VremeSletanja` datetime NOT NULL,
  `sedista` int(11) NOT NULL,
  `cena` double NOT NULL,
  `datum_pravljena` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `let`
--

INSERT INTO `let` (`idLeta`, `idavioprevoznika`, `idAviona`, `aerodrom1_id`, `aerodrom2_id`, `pocetnoVreme`, `VremeSletanja`, `sedista`, `cena`, `datum_pravljena`) VALUES
(2, 12, 1234, 4, 3, '2022-06-01 23:00:00', '2022-06-02 02:01:00', 120, 500, '2022-05-30 22:42:37');

-- --------------------------------------------------------

--
-- Table structure for table `putnici`
--

CREATE TABLE `putnici` (
  `ID_PUTNIKA` int(11) NOT NULL,
  `IME_PUTNIKA` varchar(40) NOT NULL,
  `PREZIME_PUTNIKA` varchar(40) NOT NULL,
  `USERNAME` varchar(40) NOT NULL,
  `PASSWORD` varchar(40) NOT NULL,
  `CONF_PASSWORD` varchar(40) NOT NULL,
  `POL` varchar(10) NOT NULL,
  `GODINE` int(11) NOT NULL,
  `EMAIL` varchar(40) NOT NULL,
  `TELEFON` int(11) NOT NULL,
  `BROJ_PASOSA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `putnici`
--

INSERT INTO `putnici` (`ID_PUTNIKA`, `IME_PUTNIKA`, `PREZIME_PUTNIKA`, `USERNAME`, `PASSWORD`, `CONF_PASSWORD`, `POL`, `GODINE`, `EMAIL`, `TELEFON`, `BROJ_PASOSA`) VALUES
(1, 'Nikola', 'Stojanovic', 'dzono00', 'Nikola123', 'Nikola123', 'Musko', 21, 'nikola.stojanovic2110@gmail.com', 600718528, 126465),
(6, 'Marko', 'Jankovic', 'makili', 'Jelena123', 'Jelena123', 'Musko', 25, 'Jeckobgd@gmail.com', 489164546, 1096498495),
(7, 'Andjela', 'Cekovic', 'andji', 'andji123', 'andji123', 'Zensko', 25, 'andjela@gmail.com', 2147483647, 894849489);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminn`
--
ALTER TABLE `adminn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aerodrom`
--
ALTER TABLE `aerodrom`
  ADD PRIMARY KEY (`idAerodroma`);

--
-- Indexes for table `avioprevoznik`
--
ALTER TABLE `avioprevoznik`
  ADD PRIMARY KEY (`idAvioPrevoznika`);

--
-- Indexes for table `bukiranje`
--
ALTER TABLE `bukiranje`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `let`
--
ALTER TABLE `let`
  ADD PRIMARY KEY (`idLeta`);

--
-- Indexes for table `putnici`
--
ALTER TABLE `putnici`
  ADD PRIMARY KEY (`ID_PUTNIKA`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminn`
--
ALTER TABLE `adminn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aerodrom`
--
ALTER TABLE `aerodrom`
  MODIFY `idAerodroma` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `avioprevoznik`
--
ALTER TABLE `avioprevoznik`
  MODIFY `idAvioPrevoznika` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `bukiranje`
--
ALTER TABLE `bukiranje`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `let`
--
ALTER TABLE `let`
  MODIFY `idLeta` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `putnici`
--
ALTER TABLE `putnici`
  MODIFY `ID_PUTNIKA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
