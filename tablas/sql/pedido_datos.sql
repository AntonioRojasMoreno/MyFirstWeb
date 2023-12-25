-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2023 a las 17:19:38
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login_register_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_datos`
--

CREATE TABLE `pedido_datos` (
  `id` int(11) NOT NULL,
  `ref` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` int(10) NOT NULL,
  `articulo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(15) NOT NULL,
  `total` int(15) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pedido_datos`
--

INSERT INTO `pedido_datos` (`id`, `ref`, `cantidad`, `articulo`, `precio`, `total`, `fecha`) VALUES
(50, 'AKzLc', 1, 'Procesador Intel Cor', 580, 580, '2023-06-17'),
(51, 'AKzLc', 1, 'ASUS TUF Gaming F17 ', 1199, 1199, '2023-06-17'),
(52, '5eBF1', 1, 'Procesador Intel Cor', 580, 580, '2023-06-17'),
(53, '5eBF1', 1, 'Procesador Intel Cor', 580, 580, '2023-06-17'),
(54, 'ovgDw', 1, 'ASUS TUF Gaming F17 ', 1199, 1199, '2023-06-17'),
(55, 'ovgDw', 1, 'Procesador Intel Cor', 580, 580, '2023-06-17'),
(56, 'ovgDw', 1, 'Monitor: Asus TUF Ga', 160, 160, '2023-06-17');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pedido_datos`
--
ALTER TABLE `pedido_datos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedido_datos`
--
ALTER TABLE `pedido_datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
