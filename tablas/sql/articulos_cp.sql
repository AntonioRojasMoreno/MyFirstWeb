-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2023 a las 17:18:42
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
-- Estructura de tabla para la tabla `articulos_cp`
--

CREATE TABLE `articulos_cp` (
  `id` int(11) NOT NULL,
  `ref` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(10) NOT NULL,
  `titulo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `articulos_cp`
--

INSERT INTO `articulos_cp` (`id`, `ref`, `precio`, `titulo`, `cantidad`) VALUES
(1, 'ma001', 580, 'Procesador Intel Core i9', 99),
(2, 'ma002', 1199, 'ASUS TUF Gaming F17 FX706HM-HX059', 99),
(3, 'ma003', 160, 'Monitor: Asus TUF Gaming VG249Q', 99),
(6, 'ma004', 1560, 'Gigabyte GeForce RTX 4090', 99),
(7, 'ma005', 630, 'Samsung QE55Q80B', 99),
(8, 'ma006', 60, 'Memoria Ram 32 GB', 99);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos_cp`
--
ALTER TABLE `articulos_cp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos_cp`
--
ALTER TABLE `articulos_cp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
