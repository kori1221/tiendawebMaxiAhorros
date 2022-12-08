-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-08-2022 a las 10:22:33
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
-- Base de datos: `maxidb_ofertas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productoso`
--

CREATE TABLE `productoso` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `descuento` tinyint(3) NOT NULL DEFAULT 0,
  `preciodescuento` decimal(10,2) NOT NULL,
  `categoriaG` int(11) NOT NULL,
  `categoriaP` int(11) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productoso`
--

INSERT INTO `productoso` (`id`, `nombre`, `descripcion`, `precio`, `descuento`, `preciodescuento`, `categoriaG`, `categoriaP`, `tipo`) VALUES
(1, 'Arroz Tio Pelon 99%', 'Arroz Tío Pelón 99% grano entero, 1,8 kg en oferta', '3900.00', 7, '3627.00', 0, 0, 1),
(2, 'Aceite Clover', 'Aceite Clover de Soya Galón, 4730ml\r\nAproveche este precio de oferta', '10700.00', 10, '9630.00', 0, 0, 1),
(3, 'Galleta Oreo', 'Galleta Nabisco Oreo Original 432gr\r\nContiene 12 paquetes de 4 galletas cada uno. Aproveche esta oportunidad de oferta', '1500.00', 15, '1275.00', 0, 0, 1),
(4, 'Tropical Hierbabuena', 'Refresco Tropical Limonada Hierbabuena-2500ml', '1400.00', 6, '1316.00', 0, 0, 1),
(5, 'Aromatizante Glade', 'Aromatizante Glade en Aerosol Paraíso Azul-400ml', '2100.00', 35, '1365.00', 0, 0, 1),
(6, 'Bolsa Ziploc', 'Bolsa Ziploc para Alimento Sandwich-50 unidades', '1700.00', 5, '1615.00', 0, 0, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productoso`
--
ALTER TABLE `productoso`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productoso`
--
ALTER TABLE `productoso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
