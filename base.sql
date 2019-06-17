-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2019 a las 12:07:44
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `web_autogestionada`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebidas`
--

CREATE TABLE `bebidas` (
 `id` int(4) NOT NULL,
 `nombre_bebida` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
 `precio_ud` float(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bebidas`
--

INSERT INTO `bebidas` (`id`, `nombre_bebida`, `precio_ud`) VALUES
(1, 'Agua', 1.20),
(2, 'Vino Blanco', 4.90),
(3, 'Vino Tinto', 4.90),
(4, 'Cerveza', 2.50),
(5, 'Refresco', 1.90),
(6, 'Zumo', 1.90),
(7, 'Horchata', 3.50),
(8, 'Sangría', 8.50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platos`
--

CREATE TABLE `platos` (
 `id` int(4) NOT NULL,
 `nombre_plato` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
 `precio_ud` float(4,2) NOT NULL,
 `orden_plato` enum('primero','segundo','postre') COLLATE utf8_spanish_ci NOT NULL,
 `menu_activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `platos`
--

INSERT INTO `platos` (`id`, `nombre_plato`, `precio_ud`, `orden_plato`, `menu_activo`) VALUES
(1, 'Paella Valenciana', 11.95, 'primero', 1),
(2, 'Gazpacho Manchego', 9.95, 'primero', 1),
(3, 'Lasaña Vegetal', 9.95, 'primero', 1),
(4, 'Pollo al Horno', 12.90, 'segundo', 1),
(5, 'Salmón a la Plancha', 14.90, 'segundo', 1),
(6, 'Ternera en salsa verde', 18.95, 'segundo', 1),
(7, 'Tiramisú', 8.90, 'postre', 1),
(8, 'Tarta al Whisky', 9.95, 'postre', 1),
(9, 'Arroz con leche', 9.90, 'postre', 1),
(10, 'Sopa castellana', 10.90, 'primero', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bebidas`
--
ALTER TABLE `bebidas`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `platos`
--
ALTER TABLE `platos`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bebidas`
--
ALTER TABLE `bebidas`
 MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `platos`
--
ALTER TABLE `platos`
 MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



