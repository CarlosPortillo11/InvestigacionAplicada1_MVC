-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 14-02-2022 a las 03:31:07
-- Versión del servidor: 10.6.5-MariaDB
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ferreteriafc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planilla`
--

DROP TABLE IF EXISTS `planilla`;
CREATE TABLE IF NOT EXISTS `planilla` (
  `vendedores` varchar(155) NOT NULL,
  `puesto` varchar(155) DEFAULT NULL,
  `producto` varchar(155) DEFAULT NULL,
  PRIMARY KEY (`vendedores`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `planilla`
--

INSERT INTO `planilla` (`vendedores`, `puesto`, `producto`) VALUES
('Mirna Elizabeth Espinoza', 'Gerente de ventas', 'Tornillos'),
('David Alexander Aguilar', 'Gerente de tiendas', 'Serrucho'),
('Mauricio Alejandro Nerio', 'Gerente de parqueo', 'Gato hidráulico'),
('David Elías Amaya', 'Gerente de jardinería', 'Manguera'),
('Carlos Emerson Portillo', 'Gerente de carritos de compra', 'Pintura'),
('José Alejandro Pérez', 'Encargado de marketing', 'Repisas'),
('Francisco Ariel Mejilla', 'Encargado de limpieza', 'Marco para sierra'),
('Adilson Miguel Gómez', 'Programador en jefe', 'Regleta'),
('Josselyn Yamileth Alvarado', 'Módelo de mercancía', 'Pegamento para zapato'),
('Alisson Fernanda', 'Jefe de recursos humanos', 'Pizarra');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
