-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2023 a las 11:12:47
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tour`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `name` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=tis620 COLLATE=tis620_bin;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`name`, `clave`) VALUES
('ADMIN', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `edad` varchar(2) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `celular` varchar(12) NOT NULL,
  `transporte` varchar(2) NOT NULL,
  `comentarios` varchar(250) NOT NULL,
  `camisa` varchar(2) NOT NULL,
  `talla` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=tis620 COLLATE=tis620_bin;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id`, `nombre`, `apellidos`, `edad`, `sexo`, `ciudad`, `celular`, `transporte`, `comentarios`, `camisa`, `talla`) VALUES
(1, 'MI NOMBRE', 'MIS APELLIDOS', '56', 'OTRO', 'TIJUANA', '6632191212', 'SI', 'OTROS COMENTARIOSXD', 'NO', 'NINGUNA'),
(2, 'otro re', 'GISTRO', '35', 'FEMENINO', 'TIJUANA', '6632193232', 'SI', 'REALMENTE NO TENGO NINGUN COMENTARIO', 'NO', 'NINGUNA'),
(3, 'as ver', 'UNOS MAS', '56', 'MASCULINO', 'ROSARITO', '6632191345', 'SI', 'OTROS COMENTARIOS', 'SI', 'GRANDE');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
