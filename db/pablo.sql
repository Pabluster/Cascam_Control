-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-03-2015 a las 22:41:43
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `pablo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_area`
--

CREATE TABLE IF NOT EXISTS `tbl_area` (
  `id_area` int(10) NOT NULL AUTO_INCREMENT,
  `Nom_Area` varchar(20) NOT NULL,
  `Sup_Int` int(10) NOT NULL,
  PRIMARY KEY (`id_area`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tbl_area`
--

INSERT INTO `tbl_area` (`id_area`, `Nom_Area`, `Sup_Int`) VALUES
(1, 'Area testing', 1),
(2, 'Area 5', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ejecutor`
--

CREATE TABLE IF NOT EXISTS `tbl_ejecutor` (
  `id_ejecutor` int(10) NOT NULL AUTO_INCREMENT,
  `Nom_Ejecutor` varchar(50) NOT NULL,
  `RUT` varchar(12) NOT NULL,
  `Cargo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_ejecutor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tbl_ejecutor`
--

INSERT INTO `tbl_ejecutor` (`id_ejecutor`, `Nom_Ejecutor`, `RUT`, `Cargo`) VALUES
(1, 'Ejecutor 1', '22.222.222-2', 'np'),
(2, 'Ejecutor  10', '12.121.121-1', 'Maestro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_empresa`
--

CREATE TABLE IF NOT EXISTS `tbl_empresa` (
  `id_empresa` int(10) NOT NULL AUTO_INCREMENT,
  `Nom_Empresa` varchar(20) NOT NULL,
  `RUT` varchar(12) NOT NULL,
  `Giro` varchar(50) DEFAULT NULL,
  `Area` int(10) NOT NULL,
  PRIMARY KEY (`id_empresa`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tbl_empresa`
--

INSERT INTO `tbl_empresa` (`id_empresa`, `Nom_Empresa`, `RUT`, `Giro`, `Area`) VALUES
(1, 'Empresa 1', '11.111.111-1', 'np', 1),
(2, 'Empresa 4', '33.333.333-0', 'np', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_gerencia`
--

CREATE TABLE IF NOT EXISTS `tbl_gerencia` (
  `id_gerencia` int(10) NOT NULL AUTO_INCREMENT,
  `Nom_Gerencia` varchar(20) NOT NULL,
  PRIMARY KEY (`id_gerencia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tbl_gerencia`
--

INSERT INTO `tbl_gerencia` (`id_gerencia`, `Nom_Gerencia`) VALUES
(1, 'Pruebas'),
(2, 'Gerencia 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_mv_eq`
--

CREATE TABLE IF NOT EXISTS `tbl_mv_eq` (
  `Num_Interno` varchar(6) NOT NULL,
  `Patente` varchar(6) NOT NULL,
  `Km` varchar(6) DEFAULT NULL,
  `Gerencia` int(10) NOT NULL,
  `Sup_Int` int(10) NOT NULL,
  `Area` int(10) NOT NULL,
  `Empresa` int(10) NOT NULL,
  `Sn_Rf` varchar(20) NOT NULL,
  `Sn_DashBoard` varchar(20) NOT NULL,
  `Ejecutor` int(10) NOT NULL,
  `Fecha` date NOT NULL,
  PRIMARY KEY (`Num_Interno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_mv_eq`
--

INSERT INTO `tbl_mv_eq` (`Num_Interno`, `Patente`, `Km`, `Gerencia`, `Sup_Int`, `Area`, `Empresa`, `Sn_Rf`, `Sn_DashBoard`, `Ejecutor`, `Fecha`) VALUES
('CTA013', 'AABB11', '1000', 2, 1, 1, 1, '11111', '11111', 1, '2015-03-09'),
('CTA014', 'np', 'np', 2, 1, 1, 1, 'np', 'np', 1, '2015-03-09'),
('CTA015', 'AABB11', 'np', 1, 1, 1, 1, '22222', '22222', 1, '2015-03-09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_sup_int`
--

CREATE TABLE IF NOT EXISTS `tbl_sup_int` (
  `id_supint` int(10) NOT NULL AUTO_INCREMENT,
  `Nom_Sup_Int` varchar(20) NOT NULL,
  `Gerencia` int(10) NOT NULL,
  PRIMARY KEY (`id_supint`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tbl_sup_int`
--

INSERT INTO `tbl_sup_int` (`id_supint`, `Nom_Sup_Int`, `Gerencia`) VALUES
(1, 'Super Inten 1', 2),
(2, 'Super Intendencia 12', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
