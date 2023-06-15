-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-10-2019 a las 01:20:54
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `c2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `elementos`
--

CREATE TABLE `elementos` (
  `id_elem` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `elementos`
--

INSERT INTO `elementos` (`id_elem`, `nombre`) VALUES
(1, 'PERSONAL DE P.C.'),
(2, 'PERSONAL EXTERNO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedades`
--

CREATE TABLE `novedades` (
  `id_nov` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `modo` varchar(40) NOT NULL,
  `tipo` varchar(40) NOT NULL,
  `reporte` varchar(40) NOT NULL,
  `coords` varchar(80) NOT NULL,
  `lng` varchar(50) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `delegacion` varchar(40) NOT NULL,
  `opt` varchar(40) NOT NULL,
  `unidad` varchar(40) NOT NULL,
  `elementos` varchar(10) NOT NULL,
  `elem1` varchar(40) NOT NULL,
  `elem2` varchar(40) NOT NULL,
  `elem3` varchar(40) NOT NULL,
  `elem4` varchar(40) NOT NULL,
  `arribo` time NOT NULL,
  `pon` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `novedades`
--

INSERT INTO `novedades` (`id_nov`, `fecha`, `hora`, `modo`, `tipo`, `reporte`, `coords`, `lng`, `lat`, `direccion`, `delegacion`, `opt`, `unidad`, `elementos`, `elem1`, `elem2`, `elem3`, `elem4`, `arribo`, `pon`) VALUES
(1, '2019-08-22', '15:10:00', 'Flagrancia', 'Delito de fuero Federal', 'INHALAR SUSTANCIAS TOXICAS EN VIA PUBLIC', '19.107074308956566,-99.58449434819335', '-99.58449434819335', '19.107074308956566', 'calle hidalgo 230', 'San_Pedro_Zictepec', 'La Isleta (Islote)', 'unidad1', '4', 'PERSONAL DE P.C.', 'PERSONAL DE P.C.', 'PERSONAL DE P.C.', 'PERSONAL DE P.C.', '15:15:00', 'N'),
(2, '2019-08-12', '12:00:00', 'llamada de emergencia', 'auxilio', 'EXTORSION', '19.102694735018055,-99.58415102543944', '-99.58415102543944', '19.102694735018055', 'calle morelos 125', 'Tenango de Arista', 'La Soya', 'A-206', '2', 'pol1', 'pol2', '', '', '12:05:00', 'N');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `id_rep` int(11) NOT NULL,
  `reporte` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reportes`
--

INSERT INTO `reportes` (`id_rep`, `reporte`) VALUES
(1, 'ABUSO SEXUAL'),
(2, 'ALTERACION AL ORDEN PUBLICO'),
(3, 'ATAQUE A LAS VIAS DE COMUNICACION'),
(4, 'BUSQUEDA Y LOCALIZACION'),
(5, 'COHECHO'),
(6, 'DANO EN LOS BIENES'),
(7, 'DANOS AL MEDIO AMBIENTE'),
(8, 'DELITOS CONTRA LA SALUD'),
(9, 'DETONACIONES DE ARMA DE FUEGO'),
(10, 'EMERGENCIAS DE P.C.'),
(11, 'EXTORSION'),
(12, 'HOMICIDIO'),
(13, 'INGERIR BEBIDAS EMBRIAGANTES EN VIA PUBL'),
(14, 'INHALAR SUSTANCIAS TOXICAS EN VIA PUBLICA'),
(15, 'LESIONES'),
(16, 'PERCANCE VEHICULAR'),
(17, 'PERSONA AL PISO'),
(18, 'PERSONA SIN VIDA'),
(19, 'PERSONA SOSPECHOSA'),
(20, 'PORTACION DE ARMA BLANCA'),
(21, 'PORTACION DE ARMA DE FUEGO'),
(22, 'PRIVACION ILEGAL DE LA LIBERTAD'),
(23, 'REALIZAR NECESIDADES FISIOLOGICAS EN VIA PUBLICA'),
(24, 'ROBO'),
(25, 'ROBO A CASA HABITACION'),
(26, 'ROBO A COMERCIO'),
(27, 'ROBO DE VEHICULO'),
(28, 'SECUESTRO'),
(29, 'SUICIDIO'),
(30, 'TALA CLANDESTINA'),
(31, 'VEHICULO SOSPECHOSO'),
(32, 'VIOLENCIA DE GENERO'),
(33, 'VIOLENCIA FAMILIAR'),
(34, 'OTROS REPORTES'),
(35, 'OTRAS FALTAS ADMINISTRATIVAS'),
(36, 'OTROS DELITOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidades`
--

CREATE TABLE `unidades` (
  `id_uni` int(11) NOT NULL,
  `unidad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `unidades`
--

INSERT INTO `unidades` (`id_uni`, `unidad`) VALUES
(1, 'unidad1'),
(2, 'unidad2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `usuario` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `tipo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `tipo`) VALUES
(1, 'HORUS', 'putaputa123', 'ADMINISTRADOR'),
(2, 'USER1', 'kuranay1416', 'USUARIO'),
(3, 'USER2', 'angelicamichel', 'USUARIO'),
(4, 'USER3', 'acazulcorules', 'USUARIO'),
(5, 'USERX', 'zazazayacuzayacuza', 'USUARIO'),
(9, 'yael', '3958', 'ADMINISTRADOR');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `elementos`
--
ALTER TABLE `elementos`
  ADD PRIMARY KEY (`id_elem`);

--
-- Indices de la tabla `novedades`
--
ALTER TABLE `novedades`
  ADD PRIMARY KEY (`id_nov`);

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`id_rep`);

--
-- Indices de la tabla `unidades`
--
ALTER TABLE `unidades`
  ADD PRIMARY KEY (`id_uni`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `elementos`
--
ALTER TABLE `elementos`
  MODIFY `id_elem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `novedades`
--
ALTER TABLE `novedades`
  MODIFY `id_nov` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `id_rep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `unidades`
--
ALTER TABLE `unidades`
  MODIFY `id_uni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
