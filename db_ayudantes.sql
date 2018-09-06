-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-08-2018 a las 00:41:45
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_ayudantes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direcciones`
--

CREATE TABLE `direcciones` (
  `id` int(11) NOT NULL,
  `id_web` varchar(30) NOT NULL,
  `direccion` varchar(60) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `direcciones`
--

INSERT INTO `direcciones` (`id`, `id_web`, `direccion`) VALUES
(8, 'carloswebs', 'calle venezuela-sector E'),
(18, 'test', 'direccion'),
(19, 'casw', 'caswww');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `id` int(11) NOT NULL,
  `id_web` varchar(30) NOT NULL,
  `Horario` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`id`, `id_web`, `Horario`) VALUES
(6, 'carloswebs', 'Horario: 08:00 a 16:00, Lu, Ma'),
(7, 'carloswebs', 'Horario: 02:00 a 16:01, Mi'),
(9, 'carloswebs', 'Horario: 02:02 a 14:02, Ju, Vi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `loginattempts`
--

CREATE TABLE `loginattempts` (
  `IP` varchar(20) NOT NULL,
  `Attempts` int(11) NOT NULL,
  `LastLogin` datetime NOT NULL,
  `Username` varchar(65) DEFAULT NULL,
  `ID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `loginattempts`
--

INSERT INTO `loginattempts` (`IP`, `Attempts`, `LastLogin`, `Username`, `ID`) VALUES
('::1', 5, '2018-08-06 22:43:25', 'ss', 1),
('::1', 5, '2018-08-06 22:44:30', 'sss', 2),
('::1', 5, '2018-08-06 22:44:35', 'sssqqw', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `members`
--

CREATE TABLE `members` (
  `id` char(23) NOT NULL,
  `username` varchar(65) NOT NULL DEFAULT '',
  `password` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `mod_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Keyget` varchar(23) NOT NULL,
  `timelast` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `email`, `verified`, `mod_timestamp`, `Keyget`, `timelast`) VALUES
('230665a94ad03b82dd', 'carlosr', '$2y$10$pSG8OHZe0q.vBVj1doNVLe6FO.8JkQokY9yfrLs8DuAd2KoTLucUe', 'rodriguezcarlo@gmail.com', 1, '2018-02-27 00:57:39', '', '0000-00-00'),
('16821697215b11d92bd01c6', 'usuario', '$2y$10$YOR5/wTqZjAEPCBLS6d9ZuxcsDmyRRb38duF7Y/a.LL3ZkOTc5He.', 'test@test.xxx', 0, '2018-06-01 23:39:15', '', '0000-00-00'),
('18832517725b11f421f2c61', 'usuario2', '$2y$10$U7JE4kfl5KH8p5dTNrooLOJwOtNA567c9FMNxSdShLf2M2TUvUmDO', 'com27@gmail.com', 0, '2018-06-02 01:34:17', '', '0000-00-00'),
('13650324605b12d083dcb4b', 'ayudantes_vene', '$2y$10$XdLD5mAqfiI44NQivWn30e5hrzFQT7di1G4L8O1d3A/3J5RpmeiYO', 'rodriguezcarlos9716@gmail.com', 0, '2018-06-02 17:14:35', '', '0000-00-00'),
('255825b5ba7f38fb5f', 'ca', '$2y$10$1NSCy2U3oj/w.bZtSazNXuzxmFQckI/LaHINbLCC1gCwiVvdG4FCu', 'carlosplata416s@gmail.com', 0, '2018-07-27 23:17:07', '', '0000-00-00'),
('45395b5ba819cfb70', 'xas', '$2y$10$Nv0421Pupn4/9iAa.71FfuDpKa6GMAmxQA60hGhQCJ5Ed233ciQDq', 'carlosplata416ss@gmail.com', 0, '2018-07-27 23:17:46', '', '0000-00-00'),
('54895b5bc1e2d6105', 'casw', '$2y$10$WMo.Yar5xOmH8RBZekiQdu3iyafAwudNVI1raHU2fLybiEm1ht9gC', 'carlosplata41ss6@gmail.com', 0, '2018-07-28 01:07:47', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes_sociales`
--

CREATE TABLE `redes_sociales` (
  `id` int(11) NOT NULL,
  `id_web` varchar(30) NOT NULL,
  `tipo_red` varchar(30) CHARACTER SET utf8 NOT NULL,
  `nombre_red` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `redes_sociales`
--

INSERT INTO `redes_sociales` (`id`, `id_web`, `tipo_red`, `nombre_red`) VALUES
(14, 'carloswebs', 'Facebook', ' carlos rodriguez'),
(15, 'carloswebs', 'Twiter', ' rodriguez_carlos'),
(16, 'carloswebs', 'Linkedin', ' tec_carlos'),
(25, 'test', 'Facebook', ' facebook'),
(26, 'test', 'Twiter', ' twitter'),
(27, 'test', 'Linkedin', ' linkedin'),
(28, 'casw', 'Facebook', ' sdww'),
(29, 'casw', 'Facebook', ' wdawdwa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `id_web` varchar(30) NOT NULL,
  `servicio` varchar(30) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefonos`
--

CREATE TABLE `telefonos` (
  `id` int(11) NOT NULL,
  `id_web` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `telefonos`
--

INSERT INTO `telefonos` (`id`, `id_web`, `telefono`) VALUES
(1, 'test', 'Tlf: +50428479454'),
(2, 'casw', 'Tlf: 04161988033');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `web`
--

CREATE TABLE `web` (
  `nombre_web` varchar(30) NOT NULL,
  `id_usuario` varchar(30) CHARACTER SET utf8 NOT NULL,
  `URL` varchar(65) NOT NULL,
  `tipo_uso` int(5) NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8 NOT NULL,
  `apellido` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `apellido2` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `categoria` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `logo` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `color_de_fondo` varchar(30) CHARACTER SET utf8 NOT NULL,
  `descripcion` text CHARACTER SET utf8,
  `estilo` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `web`
--

INSERT INTO `web` (`nombre_web`, `id_usuario`, `URL`, `tipo_uso`, `nombre`, `apellido`, `apellido2`, `telefono`, `categoria`, `logo`, `color_de_fondo`, `descripcion`, `estilo`) VALUES
('carloswebs', '230665a94ad03b82dd', '/web_modular/carloswebs', 1, 'asdasd', 'rodrigues', NULL, '04147013685', NULL, NULL, '#a6712d', NULL, 'plantilla1'),
('test', '16821697215b11d92bd01c6', '/test', 1, 'nombre', 'apellido', NULL, NULL, '2', NULL, '#a6712d', NULL, 'plantilla1'),
('bonita', '18832517725b11f421f2c61', '/bonita', 1, 'usuario edl carmen', 'perez', NULL, NULL, NULL, NULL, '#a6712d', NULL, 'plantilla1'),
('c', '13650324605b12d083dcb4b', '/c', 1, 'asdasd', 'rodrigues', NULL, NULL, NULL, NULL, '#a6712d', NULL, 'plantilla1'),
('ca', '255825b5ba7f38fb5f', '/ca', 1, 'Nohe ruiz', 'sdsd', NULL, NULL, NULL, NULL, '#a6712d', NULL, 'plantilla1'),
('xas', '45395b5ba819cfb70', '/xas', 1, 'carlos', 'sdsd', 'koli', NULL, NULL, NULL, '#a6712d', NULL, 'plantilla4'),
('casw', '54895b5bc1e2d6105', '/casw', 1, 'carlos', 'sdsd', 'sdsd', NULL, NULL, NULL, '#a6712d', NULL, 'plantilla4');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_web` (`id_web`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_web` (`id_web`);

--
-- Indices de la tabla `loginattempts`
--
ALTER TABLE `loginattempts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Username` (`Username`);

--
-- Indices de la tabla `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Indices de la tabla `redes_sociales`
--
ALTER TABLE `redes_sociales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_web` (`id_web`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_web` (`id_web`);

--
-- Indices de la tabla `telefonos`
--
ALTER TABLE `telefonos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `web`
--
ALTER TABLE `web`
  ADD PRIMARY KEY (`nombre_web`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `loginattempts`
--
ALTER TABLE `loginattempts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `redes_sociales`
--
ALTER TABLE `redes_sociales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `telefonos`
--
ALTER TABLE `telefonos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
