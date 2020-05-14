-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 14, 2020 at 06:50 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sansnova`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id_a` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  PRIMARY KEY (`id_a`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id_a`, `username`, `password`, `name`, `lastname`, `address`, `birthday`) VALUES
(1, 'petarj', 'petarj', 'Petar', 'Jager', 'Gundiliceva 22', '1998-05-09'),
(2, 'borzeg', 'borzeg', 'Dusan', 'Zegarac', 'Beogradski put bb', '1998-10-19');

-- --------------------------------------------------------

--
-- Table structure for table `dostava`
--

DROP TABLE IF EXISTS `dostava`;
CREATE TABLE IF NOT EXISTS `dostava` (
  `id_d` int(11) NOT NULL AUTO_INCREMENT,
  `jelo_d` varchar(255) NOT NULL,
  `kolicina_d` int(15) NOT NULL,
  `pice_d` varchar(255) NOT NULL,
  `kolicina1_d` int(15) NOT NULL,
  `telefon_d` int(30) NOT NULL,
  `adresa_d` varchar(255) NOT NULL,
  `nacin_placanja_d` enum('gotovina','kartica','') NOT NULL,
  `comment_d` varchar(300) NOT NULL,
  PRIMARY KEY (`id_d`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id_f` int(11) NOT NULL AUTO_INCREMENT,
  `name_f` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `about_f` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price_f` int(6) NOT NULL,
  `picture_f` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_f`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_f`, `name_f`, `about_f`, `price_f`, `picture_f`) VALUES
(7, 'Biftek', 'Mesoo', 1000, 'biftek-agropapuk-Å¡id-2.jpg'),
(5, 'Hudgard', 'Dzeger', 443, 'Jellyfish.jpg'),
(8, 'Povrce', 'Zdrava hrana', 300, 'povrce-921.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rezervacija`
--

DROP TABLE IF EXISTS `rezervacija`;
CREATE TABLE IF NOT EXISTS `rezervacija` (
  `id_r` int(11) NOT NULL AUTO_INCREMENT,
  `name_r` varchar(20) NOT NULL,
  `phone_r` int(15) NOT NULL,
  `email_r` varchar(50) NOT NULL,
  `date_r` varchar(30) NOT NULL,
  `time_r` varchar(10) NOT NULL,
  `brojg_r` varchar(50) NOT NULL,
  `comment_r` varchar(500) NOT NULL,
  PRIMARY KEY (`id_r`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rezervacija`
--

INSERT INTO `rezervacija` (`id_r`, `name_r`, `phone_r`, `email_r`, `date_r`, `time_r`, `brojg_r`, `comment_r`) VALUES
(1, 'Aleksandar', 642859525, 'axa.v98@hotmail.rs', 'Sat May 30 2020', '20:00', '6', 'Proba'),
(2, 'Aleksandar Vorgic', 642859525, 'axa.v007@gmail.com', 'Sat May 30 2020', '09:00', '7', 'Proba1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
