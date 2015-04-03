/*
* 
*                   Sistema para control y gestion de componentes
*                                   Cas-Cam/LV
*           Desarrollado para Compañia Minera Doña Ines de Collahuasi SCM 
*
*
* * * * * * * * * * * * * * * *
* Datos de desarrollo
* *
* Nombre de Archivo db_cascam_control.sql
* Version 0.0.0 
* Fecha Creacion 20150307
* Hora Creacion 05:48:02
* * 
* Modificaciones
* *
* Version 2.0.7
* Fecha Modificacion 20150402
* Hora ultima modificacion 06:22:00
* *
* Datos del desarrollador
* *
* Nombre Pablo Figueroa Alvarez
* Mail pabluster@gmail.com
* Movil (+56-9) 4234 3378
* * * * * * * * * * * * * * * *
* Descripcion del Archivo
*
* Este documento tiene por objeto almacenar y contener
* datos necesarios para generar la creacion de tablas
* de forma directa en la DB y a la vez de insertar
* datos basicos y constantes en la DB.
* * * * * * * * * * * * * * * *
*
* la modificacion de este o parte de este puede ocacionar falla en la aplicacion
* este y todos los componentes de este sistema estan protegidos por derechos de
* porpiedad intelectual bajo la ley de derecho de autor que se encuentra regulada 
* por la Ley Chilena N° 17.336 sobre Propiedad Intelectual de 2/10/1970 y sus 
* posteriores modificaciones.
*
*   Todos los derechos reservados 
* ©Pablo Figueroa Alvarez Marzo 2015
*/

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `DB_Cascam_Control`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_gerencia`
--

CREATE TABLE IF NOT EXISTS `tbl_gerencia` (
  `id_gerencia` int(10) NOT NULL AUTO_INCREMENT,
  `Nom_Gerencia` varchar(20) NOT NULL,
  PRIMARY KEY (`id_gerencia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `tbl_gerencia`
--

INSERT INTO `tbl_gerencia` (`id_gerencia`, `Nom_Gerencia`) VALUES
(1, 'Gestion Mina'),
(2, 'Operaciones Mina'),
(3, 'Mantencion'),
(4, 'Recursos Humanos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_sup_int`
--

CREATE TABLE IF NOT EXISTS `tbl_sup_int` (
  `id_supint` int(5) NOT NULL AUTO_INCREMENT,
  `Nom_Sup_Int` varchar(20) NOT NULL,
  `id_gerencia` int(5) NOT NULL REFERENCES tbl_gerencia(id_gerencia),
  PRIMARY KEY (`id_supint`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tbl_sup_int`
--

INSERT INTO `tbl_sup_int` (`id_supint`, `Nom_Sup_Int`, `id_gerencia`) VALUES
(1, 'Planificacion y Despacho', 1),
(2, 'Perforacion y Tronadura', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_empresa_area`
--

CREATE TABLE IF NOT EXISTS `tbl_empresa_area` (
  `id_empresa_area` int(5) NOT NULL AUTO_INCREMENT,
  `Nom_Empresa` varchar(20) NOT NULL,
  `Giro` varchar(50) DEFAULT NULL,
  `id_supint` int(5) NOT NULL,
  PRIMARY KEY (`id_empresa_area`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tbl_empresa_area`
--

INSERT INTO `tbl_empresa_area` (`id_empresa_area`, `Nom_Empresa`, `Giro`, `id_supint`) VALUES
(1, 'Automatizacion Mina', 'Implementacion, desarrollo y mantencion de sistemas tecnologicos', 1),
(2, 'Despacho Mina', 'Control y gestion de la flota operativa de terreno', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ejecutor`
--

CREATE TABLE IF NOT EXISTS `tbl_ejecutor` (
  `id_ejecutor` int(5) NOT NULL AUTO_INCREMENT,
  `Nom_Ejecutor` varchar(50) NOT NULL,
  `RUT` varchar(12) NOT NULL,
  `Cargo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_ejecutor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `tbl_ejecutor`
--

INSERT INTO `tbl_ejecutor` (`id_ejecutor`, `Nom_Ejecutor`, `RUT`, `Cargo`) VALUES
(1, 'Pablo Figueroa Alvarez', '15.118.887-7', 'Tecnico Automatizacion'),
(2, 'Andres Soto Jaña', '15.840.482-6', 'Ingeniero Automatizacion'),
(3, 'Hector Veliz Araya', '14.098.241-5', 'Ingeniero Automatizacion'),
(4, 'Ricardo Vega Alvarez', '11.508.412-7', 'Ingeniero Automatizacion'),
(5, 'Leandro Plaza Galvez', '12.958.003-8', 'Tecnico Automatizacion'),
(6, 'Luis Bahamondez Vazquez', '12.187.483-0', 'Tecnico Automatizacion'),
(7, 'Roberto Tello Morales', '15.610.754-9', 'Tecnico Automatizacion'),
(8, 'Francisco Ibarra Sangueza', '15.407.144-k', 'Tecnico Automatizacion'),
(9, 'Raul Veliz Valencia', '13.016.804-3', 'Tecnico Automatizacion'),
(10, 'Alfredo Alarcon Rebolledo', '7.716.230-5', 'Tecnico Automatizacion'),
(11, 'Luis Salvatierres Julio', '15.053.874-2', 'Tecnico Automatizacion');


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_mv_eq`
--

CREATE TABLE IF NOT EXISTS `tbl_mv_eq` (
  `Num_Interno` varchar(6) NOT NULL,
  `Patente` varchar(6) NOT NULL,
  `Km` varchar(6) DEFAULT NULL,
  `Gerencia` int(5) NOT NULL REFERENCES tbl_gerencia(id_gerencia),
  `Sup_Int` int(5) NOT NULL REFERENCES tbl_sup_int(id_supint),
  `Empresa_Area` int(5) NOT NULL REFERENCES tbl_empresa_area(id_empresa_area),
  `Sn_Rf` varchar(20) NOT NULL,
  `Sn_DashBoard` varchar(20) NOT NULL,
  `Ejecutor` int(5) NOT NULL REFERENCES tbl_ejecutor(id_ejecutor),
  `Fecha` date NOT NULL,
  PRIMARY KEY (`Num_Interno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;