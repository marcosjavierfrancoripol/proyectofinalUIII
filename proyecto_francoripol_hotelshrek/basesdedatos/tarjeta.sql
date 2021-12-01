-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2021 a las 18:49:21
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdshrek`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjeta`
--

CREATE TABLE `tarjeta` (
  `titular` varchar(100) NOT NULL,
  `numerodetar` int(100) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `cvv` int(100) NOT NULL,
  `caducidad` date NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `codigo_postal` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tarjeta`
--

INSERT INTO `tarjeta` (`titular`, `numerodetar`, `marca`, `cvv`, `caducidad`, `direccion`, `codigo_postal`) VALUES
('', 0, '', 0, '0000-00-00', '', 0),
('aa', 12344, 'hola', 123, '2021-12-31', 'calle royale', 1234543),
('francis', 12344, 'hola', 123, '2021-12-15', 'calle chuchos', 1234543),
('marcos', 123434, 'hola', 123, '2021-12-23', 'calle chucho', 12345),
('marcw', 1, 'hola', 123, '2021-12-16', 'calle chucho', 123);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  ADD PRIMARY KEY (`titular`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
