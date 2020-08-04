-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2020 at 09:20 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doncorleone`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `firstname`, `lastname`, `username`, `email`, `address`, `birthday`, `password`, `picture`) VALUES
(1, 'Aleksandar', 'Vorgic', 'aleksandarvorgic', 'aleksandar.vorgic@gmail.com', 'Beogradski put bb', '1998-05-05', 'aleksandar', 'aleksandar.jpg'),
(2, 'Petar', 'Jager', 'petarjager', 'petar.jager@gmail.com', 'Gundiliceva 22', '1998-05-09', 'petar', 'petar.jpg'),
(3, 'Dusan', 'Zegarac', 'dusanzegarac', 'dusan.zegarac@gmail.com', 'Beogradski put bb', '1998-10-19', 'dusan', '');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `ID` int(11) NOT NULL,
  `food_ID` int(11) NOT NULL,
  `food_amount` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `payment` enum('cash','card') NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`ID`, `food_ID`, `food_amount`, `firstname`, `lastname`, `phone`, `address`, `payment`, `comment`) VALUES
(3, 2, 2, 'Adam', 'Horvat', '012/345-67-89', 'Adresa bb', 'card', 'Pozurite'),
(4, 5, 3, 'Adam', 'Horvat', '012/345-67-89', 'Adresa bb', 'cash', 'Test'),
(6, 3, 3, 'Adam', 'Horvat', '01234567/9', 'adresa bb', 'cash', 'komentar');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`ID`, `name`, `description`, `price`, `picture`) VALUES
(2, 'Mesano meso', 'Mesano meso sadrzi....', 930, 'mesano_meso.jpg'),
(3, 'Biftek', 'Opis bifteka', 1200, 'biftek.jpg'),
(4, 'Cevapcici sa lukom', 'Porcija cevapcica sa lukom se sastoji od 10 cevapa', 640, 'cevapi.jpg'),
(5, 'Spagete Karbonate', 'spagete opis...', 550, 'spagete.jpg'),
(6, 'Piletina sa susamom', 'Opis ovog jela...', 650, 'piletina.jpg'),
(7, 'Pizza Margarita', 'Opis pice', 490, 'pizza.jpg'),
(11, 'Pasulj', 'pasulj opis', 300, 'pasulj.jpg'),
(13, 'Sarma', 'sarma opis', 300, 'pasulj.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `ID` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `dateOfReservation` date NOT NULL,
  `timeOfReservation` time NOT NULL,
  `numberOfGuests` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`ID`, `firstname`, `lastname`, `email`, `phone`, `dateOfReservation`, `timeOfReservation`, `numberOfGuests`, `comment`) VALUES
(2, 'Adam', 'Horvat', '01234567/9', 'adam.horvat@gmail.com', '2020-07-26', '20:12:00', 5, 'komentar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_delivery_menu` (`food_ID`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `FK_delivery_menu` FOREIGN KEY (`food_ID`) REFERENCES `menu` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
