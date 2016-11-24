-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2016 a las 15:06:46
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `baseclientes`
--
CREATE DATABASE IF NOT EXISTS `baseclientes` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `baseclientes`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `baseclientes`
--

CREATE TABLE `baseclientes` (
  `nrodecuenta` int(20) DEFAULT NULL,
  `dni` int(20) DEFAULT NULL,
  `cartera` int(10) DEFAULT NULL,
  `saldo` float(20,2) DEFAULT NULL,
  `mora` int(5) DEFAULT NULL,
  `diasatraso` int(10) DEFAULT NULL,
  `domicilio` varchar(150) DEFAULT NULL,
  `codpostal` varchar(10) DEFAULT NULL,
  `distribuidor` varchar(100) DEFAULT NULL,
  `distribuidorfinal` varchar(100) DEFAULT NULL,
  `telefono` int(20) DEFAULT NULL,
  `pagominimo` float(20,2) DEFAULT NULL,
  `dnv` float(20,2) DEFAULT NULL,
  `pagosdelmes` float(20,2) DEFAULT NULL,
  `excluido` varchar(50) DEFAULT NULL,
  `pagominimo1` float(20,2) DEFAULT NULL,
  `pagominimo2` float(20,2) DEFAULT NULL,
  `pagominimo3` float(20,2) DEFAULT NULL,
  `domiciliopostal` varchar(150) DEFAULT NULL,
  `codpostal2` int(5) DEFAULT NULL,
  `distribuidorpostal` varchar(50) DEFAULT NULL,
  `numerotarjeta` bigint(25) DEFAULT NULL,
  `vencimientotarjeta` varchar(10) DEFAULT NULL,
  `apellido` varchar(15) DEFAULT NULL,
  `nombre` varchar(15) DEFAULT NULL,
  `fechanacimiento` varchar(15) DEFAULT NULL,
  `sexo` varchar(5) DEFAULT NULL,
  `estadocivil` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `cuil` int(20) DEFAULT NULL,
  `telefono2` int(20) DEFAULT NULL,
  `quieregrup` varchar(5) DEFAULT NULL,
  `refi` varchar(20) DEFAULT NULL,
  `importerefi` float(20,2) DEFAULT NULL,
  `quiereenviopostal` varchar(5) DEFAULT NULL,
  `resumenonline` varchar(5) DEFAULT NULL,
  `localidad` varchar(20) DEFAULT NULL,
  `estadodesc` varchar(20) DEFAULT NULL,
  `fechacambioestado` varchar(20) DEFAULT NULL,
  `importeultimopago` float(20,2) DEFAULT NULL,
  `fechaultimopago` varchar(10) DEFAULT NULL,
  `categoriascore` varchar(15) DEFAULT NULL,
  `vencimientolote` varchar(15) DEFAULT NULL,
  `clasificacionmatriz` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
