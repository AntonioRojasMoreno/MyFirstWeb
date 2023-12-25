-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2023 a las 17:19:25
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
-- Estructura de tabla para la tabla `pedido_cp`
--

CREATE TABLE `pedido_cp` (
  `id` int(11) NOT NULL,
  `ref` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `cliente` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `medio` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `total` int(15) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pedido_cp`
--

INSERT INTO `pedido_cp` (`id`, `ref`, `cliente`, `estado`, `medio`, `total`, `fecha`) VALUES
(43, 'AKzLc', 'fivvH', 'Falta de pago', 'Tarjeta bancaria', 1779, '2023-06-17'),
(44, '5eBF1', 'nScCo', 'Falta de pago', 'Tarjeta bancaria', 1160, '2023-06-17'),
(45, 'ovgDw', 'WdwCt', 'Falta de pago', 'Tarjeta bancaria', 1939, '2023-06-17');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pedido_cp`
--
ALTER TABLE `pedido_cp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedido_cp`
--
ALTER TABLE `pedido_cp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
