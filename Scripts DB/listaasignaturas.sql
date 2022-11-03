-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2022 a las 00:35:44
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `listaasignaturas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `Codigo` varchar(8) NOT NULL,
  `Catedra` varchar(15) NOT NULL,
  `Asignatura` varchar(25) NOT NULL,
  `HT` int(2) NOT NULL,
  `HP` int(2) NOT NULL,
  `CR` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`Codigo`, `Catedra`, `Asignatura`, `HT`, `HP`, `CR`) VALUES
('INF-514', 'Programacion', 'Programacion 2', 4, 0, 4),
('INF-516', 'Programacion', 'Programacion 3', 4, 0, 4),
('INF-512', 'Programacion', 'Programacion 1', 4, 0, 4),
('INF-513', 'Programacion', 'Lab. Programacion 1', 4, 0, 4),
('INF-515', 'Programacion', 'Lab. Programacion 2', 2, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catedra`
--

CREATE TABLE `catedra` (
  `escuela` varchar(15) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recinto`
--

CREATE TABLE `recinto` (
  `Codigo` int(8) NOT NULL,
  `Escuela` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
