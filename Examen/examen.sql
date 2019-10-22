-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2019 at 09:20 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examen`
--

-- --------------------------------------------------------

--
-- Table structure for table `peliculas`
--

CREATE TABLE `peliculas` (
  `peliculas_id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `año` varchar(45) NOT NULL,
  `duracion` varchar(45) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `sinopsis` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `peliculas`
--

INSERT INTO `peliculas` (`peliculas_id`, `nombre`, `año`, `duracion`, `imagen`, `sinopsis`) VALUES
(1, 'El conjuro', '2013', '112 minutos', 'https://a.wattpad.com/cover/61252379-352-k892681.jpg', 'En 1971, Roger y Carolyn Perron (Ron Livingston y Lili Taylor) son un matrimonio que se traslada con sus cinco hijas a una granja en Harrisville. El primer día como propietarios resulta ser idílico a excepción del extraño comportamiento de su perro Sadie,'),
(2, 'Viernes 13', '1980', '88 minutos', 'https://i.pinimg.com/originals/af/75/ff/af75ff456977c7fb36f44f87d3fa9c40.jpg', 'En las escenas iniciales nos encontramos en el Campamento \"Crystal Lake\" en el año 1958. Mientras todos se reúnen al calor de una fogata, Barry y Claudette se escabullen de sus amigos y se dirigen al establo sin notar que jason los asesinaria.');

-- --------------------------------------------------------

--
-- Table structure for table `rentas`
--

CREATE TABLE `rentas` (
  `rentas_id` int(11) NOT NULL,
  `peliculas_id` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `fecha_renta` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rentas`
--

INSERT INTO `rentas` (`rentas_id`, `peliculas_id`, `Username`, `fecha_renta`) VALUES
(1, 0, '', '0000-00-00'),
(2, 2, 'Moy', '2019-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `pass` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `pass`) VALUES
(3, 'Cesar', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(4, 'Moy', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(5, 'Tomas', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(6, 'Sugey', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(7, 'Damaris', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(8, 'Norman', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`peliculas_id`);

--
-- Indexes for table `rentas`
--
ALTER TABLE `rentas`
  ADD PRIMARY KEY (`rentas_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `peliculas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rentas`
--
ALTER TABLE `rentas`
  MODIFY `rentas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
