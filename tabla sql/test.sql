-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-12-2020 a las 19:52:32
-- Versión del servidor: 5.6.13
-- Versión de PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE IF NOT EXISTS `alumnos` (
  `dni` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `edad` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `curso` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Usuarios Registrados ejemplo fonsi';

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`dni`, `nombre`, `edad`, `curso`) VALUES
('2312324w', 'Lucian', '23', 'Daw2'),
('', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `name`, `password`, `email`, `phone`, `address`, `status`) VALUES
(0, 'prueba', '123123123', 'prueba@prueba.com', '343333323', 'c/p 2222', '1'),
(14, 'admin', '123123123', 'admin@admin', '454444433', 'adminadmin', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coches`
--

CREATE TABLE IF NOT EXISTS `coches` (
  `Marca` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Modelo` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Anyo` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Cambio` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Combustible` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `coches`
--

INSERT INTO `coches` (`Marca`, `Modelo`, `Anyo`, `Cambio`, `Combustible`) VALUES
('HOLA', 'ClaseC', '2015', 'AUTO', 'Diesel'),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mis_productos`
--

CREATE TABLE IF NOT EXISTS `mis_productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Genero` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Ano` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Plataforma` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `PEGI` int(30) NOT NULL,
  `Desarrollador` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `mis_productos`
--

INSERT INTO `mis_productos` (`id`, `name`, `description`, `Genero`, `Ano`, `Plataforma`, `PEGI`, `Desarrollador`, `price`, `status`) VALUES
(2, 'sdasd', '', 'Terror', '1222', 'as', 12, 'Pulaaaa', 2222.00, '1'),
(3, 'Bertranelgey', 'muy gey', 'Terror', '1222', '1212', 122, 'sadasd', 122.00, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE IF NOT EXISTS `orden` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `total_price` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_articulos`
--

CREATE TABLE IF NOT EXISTS `orden_articulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `orden`
--
ALTER TABLE `orden`
  ADD CONSTRAINT `orden_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `clientes` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `orden_articulos`
--
ALTER TABLE `orden_articulos`
  ADD CONSTRAINT `orden_articulos_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orden` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
