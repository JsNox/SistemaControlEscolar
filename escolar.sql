-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-11-2018 a las 14:42:30
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `escolar`
--
CREATE DATABASE IF NOT EXISTS `escolar` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `escolar`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `passw` varchar(20) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id_admin`, `nombre`, `passw`) VALUES
(1, 'Joel Silos', 'cuh654');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE IF NOT EXISTS `alumnos` (
  `matricula` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `id_carrera` int(10) NOT NULL,
  `grupo` varchar(10) NOT NULL,
  `turno` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`matricula`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`matricula`, `nombre`, `id_carrera`, `grupo`, `turno`, `password`) VALUES
(1, 'Joel Silos SÃ¡nchez', 1, '17A', 'Matutino', 'cuh123'),
(2, 'Alejandro Acosta', 5, '16', 'Vespertino', 'cuh231'),
(3, 'Uriel Gilberto Flores', 1, '16', 'Matutino', 'cuh421'),
(4, 'Dniela Ledezma', 1, '16', 'Matutino', 'Daniela12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE IF NOT EXISTS `calificaciones` (
  `id_calif` int(11) NOT NULL AUTO_INCREMENT,
  `id_carrera` int(10) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `calificacion` float NOT NULL,
  PRIMARY KEY (`id_calif`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `calificaciones`
--

INSERT INTO `calificaciones` (`id_calif`, `id_carrera`, `id_materia`, `id_alumno`, `calificacion`) VALUES
(1, 1, 1, 1, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE IF NOT EXISTS `carreras` (
  `id_carrera` int(11) NOT NULL AUTO_INCREMENT,
  `carrera` varchar(100) NOT NULL,
  `creditos` int(10) NOT NULL,
  PRIMARY KEY (`id_carrera`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id_carrera`, `carrera`, `creditos`) VALUES
(1, 'Sistemas computacionales', 59),
(2, 'Derecho', 50),
(3, 'Contaduria', 60),
(4, 'Psicologia', 40),
(5, 'Educacion', 50),
(6, 'Administracion y sistemas', 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE IF NOT EXISTS `docentes` (
  `id_docente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`id_docente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id_docente`, `nombre`, `pass`) VALUES
(1, 'Alvaro Ismael Jimenez Espejel', 'alvaro12345'),
(2, 'Jose Miguel', '74as5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE IF NOT EXISTS `materias` (
  `id_materia` int(11) NOT NULL AUTO_INCREMENT,
  `materia` varchar(100) NOT NULL,
  `id_carrera` int(10) NOT NULL,
  PRIMARY KEY (`id_materia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id_materia`, `materia`, `id_carrera`) VALUES
(1, 'Base de datos', 1),
(2, 'Programacion', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vincula`
--

CREATE TABLE IF NOT EXISTS `vincula` (
  `id_vinc` int(11) NOT NULL AUTO_INCREMENT,
  `id_docente` int(10) NOT NULL,
  `id_carrera` int(10) NOT NULL,
  `id_materia` int(10) NOT NULL,
  `grupo` varchar(10) NOT NULL,
  `turno` varchar(20) NOT NULL,
  `inicio` date NOT NULL,
  `final` date NOT NULL,
  PRIMARY KEY (`id_vinc`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `vincula`
--

INSERT INTO `vincula` (`id_vinc`, `id_docente`, `id_carrera`, `id_materia`, `grupo`, `turno`, `inicio`, `final`) VALUES
(2, 1, 1, 1, '16', 'Matutino', '2018-10-02', '2018-10-12'),
(3, 2, 1, 1, '17A', 'Matutino', '2018-10-01', '2018-10-17'),
(4, 2, 1, 1, '18', 'Vespertino', '2018-10-01', '2018-10-19'),
(5, 1, 1, 2, '19', 'Mixto', '2018-10-01', '2018-10-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vinc_alumnos`
--

CREATE TABLE IF NOT EXISTS `vinc_alumnos` (
  `id_reg` int(11) NOT NULL AUTO_INCREMENT,
  `id_materia` int(10) NOT NULL,
  `id_carrera` int(10) NOT NULL,
  `grupo` varchar(10) NOT NULL,
  `turno` varchar(20) NOT NULL,
  `inicio` date NOT NULL,
  `final` date NOT NULL,
  PRIMARY KEY (`id_reg`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `vinc_alumnos`
--

INSERT INTO `vinc_alumnos` (`id_reg`, `id_materia`, `id_carrera`, `grupo`, `turno`, `inicio`, `final`) VALUES
(3, 1, 1, '18', 'Mixto', '2018-10-01', '2018-10-25'),
(4, 1, 1, '17A', 'Matutino', '2018-10-01', '2018-10-18'),
(5, 0, 0, '', '', '0000-00-00', '0000-00-00'),
(6, 0, 0, '', '', '0000-00-00', '0000-00-00'),
(7, 1, 1, '16', 'Matutino', '2018-11-05', '2018-11-01');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
