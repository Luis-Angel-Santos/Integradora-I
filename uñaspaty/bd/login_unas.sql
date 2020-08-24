-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-08-2020 a las 05:57:50
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login_unas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `nombre_producto` text NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha_elaboracion` date NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`nombre_producto`, `cantidad`, `fecha_elaboracion`, `precio`) VALUES
('Algodon', 100, '2020-08-10', 10),
('Acetona', 100, '2020-08-10', 20),
('Barniz', 100, '2020-08-01', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas_reservadas`
--

CREATE TABLE `citas_reservadas` (
  `id_cita` int(11) NOT NULL,
  `dia` date NOT NULL,
  `hora` time NOT NULL,
  `personas` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas_reservadas`
--

INSERT INTO `citas_reservadas` (`id_cita`, `dia`, `hora`, `personas`) VALUES
(1, '2020-08-20', '15:00:00', 1),
(2, '2020-08-20', '17:00:00', 1),
(3, '2020-08-30', '13:00:00', 1),
(4, '2020-08-30', '13:00:00', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientas`
--

CREATE TABLE `clientas` (
  `id_clienta` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellido_p` varchar(200) NOT NULL,
  `apellido_m` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientas`
--

INSERT INTO `clientas` (`id_clienta`, `nombre`, `apellido_p`, `apellido_m`, `email`, `pass`) VALUES
(1, 'Administradora', 'Paty', 'Luna', 'admin@gmail.com', '$2y$10$tQr2P0Xh89LJe8aje1M4v.IzQ0RWtFyrFL64ZjnQ/5z36qy/suSaS'),
(2, 'Mariana', 'Ramirez', 'Sanchez', 'mari@gmail.com', '$2y$10$2u7PYZ1bm00HIxCZ1NnYBupy4gqdcYFUalEycbwC6O308xPePQP.G'),
(3, 'Karina', 'Sanchez', 'Torres', 'kari@gmail.com', '$2y$10$5OmAl1Nn62U6SoxxzlbQBe5Emqvr3B967MkEG0GCztvCZ2y09E9xG'),
(4, 'Ramona', 'Piedras', 'Juarez', 'ejemplo@gmail.com', '$2y$10$AjEcxMrbzYdIc4.BI0ESKOlbTRHMtQrdFTMbu2I6XEKpDC/gz1eXq');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_com` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mensaje` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_com`, `nombre`, `email`, `mensaje`) VALUES
(1, 'Mariana', 'mari@gmail.com', 'Excelente atencion y resultados perfectos'),
(2, 'Ramona', 'ramo@gmail.com', 'Quede encantada con mis uñas!!!');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas_reservadas`
--
ALTER TABLE `citas_reservadas`
  ADD PRIMARY KEY (`id_cita`);

--
-- Indices de la tabla `clientas`
--
ALTER TABLE `clientas`
  ADD PRIMARY KEY (`id_clienta`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_com`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas_reservadas`
--
ALTER TABLE `citas_reservadas`
  MODIFY `id_cita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `clientas`
--
ALTER TABLE `clientas`
  MODIFY `id_clienta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_com` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
