-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-08-2022 a las 14:25:25
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
-- Base de datos: `maxidb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productost`
--

CREATE TABLE `productost` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `categoriaG` int(11) NOT NULL,
  `categoriaP` int(11) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productost`
--

INSERT INTO `productost` (`id`, `nombre`, `descripcion`, `precio`, `categoriaG`, `categoriaP`, `tipo`) VALUES
(1, 'Refrigeradora Maggio 4 núcleos', 'Refrigeradora de cinco velocidades y ocho temperaturas diferentes, con larga durabilidad y precio accesible en relación con su precio.', '600000.00', 1, 1, 2),
(2, 'Microondas Oster', 'Microondas con opción de varios tipos de calentado.', '300000.00', 1, 1, 1),
(3, 'Cocina Atlas cuatro estufas', 'Cocina Atlas de larga durabilidad con cuatro estufas y horno con 8 temperaturas.', '570000.00', 1, 1, 2),
(4, 'Camisa negra masculina', 'Camisa negra masculina de manga larga de algodón. Se encuentra de talla S en adelante.', '15000.00', 1, 2, 1),
(5, 'Blusa amarilla femenina', 'Blusa color amarillo claro de algodón. Se encuentra de talla 12 en adelante.', '10000.00', 1, 2, 2),
(7, 'Clorox 4 litros', 'Cloro para limpieza del hogar marca Clorox de cuatro litros.', '5700.00', 1, 3, 1),
(8, '4 esponjas Scotch Brite ', 'Cuatro esponjas de cocina marca Scotch Brite.', '1500.00', 1, 3, 2),
(9, 'Ácido muriático Escud', 'Ácido muriático para limpieza de baños marca Escud de 800 mililitros.', '4500.00', 1, 3, 2),
(10, 'Desatornillador Phillips', 'Desatornillador phillips ', '2000.00', 2, 4, 1),
(11, 'Suculenta', 'Suculenta', '1000.00', 2, 5, 1),
(12, 'Gnomo de jardín', 'Gnomo de jardín', '3000.00', 2, 6, 1),
(13, 'Rodilleras', 'Rodilleras', '3000.00', 3, 7, 1),
(14, 'Bicicleta 20 ', 'Bicicleta 20 ', '600000.00', 3, 8, 1),
(15, 'Brazuca original', 'Brazuca original', '10000.00', 3, 9, 1),
(16, 'Arroz Tío Pelón 5 kg', 'Arroz Tío Pelón 5 kg', '5000.00', 4, 10, 1),
(17, 'Coca-cola 2 litros', 'Coca-cola 2 litros', '1200.00', 4, 11, 1),
(18, 'Carne molida especial', 'Carne molida especial', '3000.00', 4, 12, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productost`
--
ALTER TABLE `productost`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productost`
--
ALTER TABLE `productost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
