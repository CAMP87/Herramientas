-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 29-11-2018 a las 23:27:25
-- Versión del servidor: 5.5.21
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `saes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `ID` int(10) NOT NULL,
  `NOM` text NOT NULL,
  `APE` text NOT NULL,
  `INS` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`ID`, `NOM`, `APE`, `INS`) VALUES
(2015600606, 'URIEL', 'ESPINOSA', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
