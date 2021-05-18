-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2021 a las 21:34:34
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sst`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adjuntos_presupuesto`
--

CREATE TABLE `adjuntos_presupuesto` (
  `id` int(11) NOT NULL,
  `no_expediente` varchar(1000) NOT NULL,
  `id_contrato` varchar(1000) NOT NULL,
  `tipo` varchar(1000) NOT NULL,
  `archivo_digital` varchar(1000) NOT NULL,
  `observaciones` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `adjuntos_presupuesto`
--

INSERT INTO `adjuntos_presupuesto` (`id`, `no_expediente`, `id_contrato`, `tipo`, `archivo_digital`, `observaciones`) VALUES
(8, '74', '35', 'nota_costos_director_subsidios', 'adjuntos_presupuesto/02-23-2021_0821pm2103658.png', 'sdsd'),
(9, '74', '35', 'nota_expediente_rendicion', 'adjuntos_presupuesto/02-23-2021_0821pm2103658.png', 'sdda'),
(10, '12-33433-4422', '38', 'nota_costos_director_subsidios', 'adjuntos_presupuesto/03-02-2021_0809pmEncuentro de permacultura 201-00.jpg', 'zxzx'),
(11, '12-33433-4422', '39', 'nota_costos_director_subsidios', 'adjuntos_presupuesto/05-18-2021_0920pmlogo.png', 'dfsf'),
(12, '12-33433-4422', '39', 'nota_costos_director_subsidios', 'adjuntos_presupuesto/05-18-2021_0920pmDIPLOMATURA GEDA (2).pdf', 'sdsdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comitente`
--

CREATE TABLE `comitente` (
  `id` int(11) NOT NULL,
  `comitente` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comitente`
--

INSERT INTO `comitente` (`id`, `comitente`) VALUES
(1, 'Pedro perez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato`
--

CREATE TABLE `contrato` (
  `id` int(255) NOT NULL,
  `no_expediente` varchar(1000) NOT NULL,
  `monto_total` varchar(1000) NOT NULL,
  `cuotas` varchar(1000) NOT NULL,
  `unidad_academica` varchar(10000) NOT NULL,
  `comitente` varchar(1000) NOT NULL,
  `unidad_ejecutora` varchar(1000) NOT NULL,
  `depto` varchar(1000) NOT NULL,
  `grupo` varchar(1000) NOT NULL,
  `laboratorio` varchar(1000) NOT NULL,
  `director` varchar(1000) NOT NULL,
  `plazo_desde` date NOT NULL,
  `plazo_hasta` date NOT NULL,
  `duracion_dias` varchar(1000) NOT NULL,
  `duracion_tiempo` varchar(1000) NOT NULL,
  `descripcion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contrato`
--

INSERT INTO `contrato` (`id`, `no_expediente`, `monto_total`, `cuotas`, `unidad_academica`, `comitente`, `unidad_ejecutora`, `depto`, `grupo`, `laboratorio`, `director`, `plazo_desde`, `plazo_hasta`, `duracion_dias`, `duracion_tiempo`, `descripcion`) VALUES
(36, '74', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2021-02-04', '2021-02-18', '1', 'meses', 'sdsd'),
(37, '12-33433-4422', '1', '1', '2', 'Pedro perez', 'OMS', 'Departamento de Cs. de la Información', 'Grupo GIEDHICS', 'Labo nada', 'Director nada', '2021-02-27', '2021-02-25', '1', 'semanas', ''),
(38, '12-33433-4422', '1', '1', '2', 'Pedro perez', 'OMS', 'Departamento de Cs. de la Información', 'Grupo GIEDHICS', 'Labo nada', 'Director nada', '2021-03-12', '2021-03-18', '1', 'semanas', 'kjhkhj'),
(39, '12-33433-4422', '1', '1', '1', 'Pedro perez', 'OMS', 'Departamento de Cs. de la Información', 'Grupo GIEDHICS', 'Labo nada', 'Director nada', '2021-05-26', '2021-05-27', '1', 'días', 'swdasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id` int(11) NOT NULL,
  `departamento` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id`, `departamento`) VALUES
(1, 'Departamento de Cs. de la Información');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `director`
--

CREATE TABLE `director` (
  `id` int(11) NOT NULL,
  `director` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `director`
--

INSERT INTO `director` (`id`, `director`) VALUES
(1, 'Director nada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expediente`
--

CREATE TABLE `expediente` (
  `id` int(255) NOT NULL,
  `fecha_ingreso` varchar(1000) NOT NULL,
  `no_expediente` varchar(1000) NOT NULL,
  `archivo_digital` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `expediente`
--

INSERT INTO `expediente` (`id`, `fecha_ingreso`, `no_expediente`, `archivo_digital`) VALUES
(99, '2021-02-04', '12-33433-4422', 'expediente/02-25-2021_0158pmEncuentro de permacultura 201-00.jpg'),
(100, '2021-03-05', '12-33433-4422', 'expediente/03-02-2021_0802pmBuscador_SISTEMA.docx'),
(101, '2021-03-12', '12-33433-4422', 'expediente/03-11-2021_0405pmPTD_DD2.pdf'),
(102, '2021-05-06', '11-11111-1111', 'expediente/05-18-2021_0828pmlogo.png'),
(103, '2021-05-06', '12-33433-4422', 'expediente/05-18-2021_0919pmlogo.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `id` int(11) NOT NULL,
  `grupo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`id`, `grupo`) VALUES
(1, 'Grupo GIEDHICS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorio`
--

CREATE TABLE `laboratorio` (
  `id` int(11) NOT NULL,
  `laboratorio` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `laboratorio`
--

INSERT INTO `laboratorio` (`id`, `laboratorio`) VALUES
(1, 'Labo nada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presupuesto`
--

CREATE TABLE `presupuesto` (
  `id` int(11) NOT NULL,
  `no_expediente` varchar(1000) NOT NULL,
  `id_contrato` varchar(1000) NOT NULL,
  `monto_total` varchar(1000) NOT NULL,
  `fondos_anio` varchar(1000) NOT NULL,
  `costos_directos` varchar(1000) NOT NULL,
  `monto_bu` varchar(1000) NOT NULL,
  `monto_bua` varchar(1000) NOT NULL,
  `monto_bue` varchar(1000) NOT NULL,
  `monto_suministro` varchar(1000) NOT NULL,
  `observaciones` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `presupuesto`
--

INSERT INTO `presupuesto` (`id`, `no_expediente`, `id_contrato`, `monto_total`, `fondos_anio`, `costos_directos`, `monto_bu`, `monto_bua`, `monto_bue`, `monto_suministro`, `observaciones`) VALUES
(7, '12-33433-4422', '38', '1', '1', '1', '1', '1', '1', '2', 'xsxd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidadejecutora`
--

CREATE TABLE `unidadejecutora` (
  `id` int(11) NOT NULL,
  `unidadejecutora` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `unidadejecutora`
--

INSERT INTO `unidadejecutora` (`id`, `unidadejecutora`) VALUES
(1, 'OMS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidades_academicas`
--

CREATE TABLE `unidades_academicas` (
  `id_ua` int(11) NOT NULL,
  `ua` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `unidades_academicas`
--

INSERT INTO `unidades_academicas` (`id_ua`, `ua`) VALUES
(1, 'Facultad de Arquitectura, Urbanismo y Diseño'),
(2, 'Facultad de Ciencias Agrarias'),
(3, 'Facultad de Ciencias de la Salud y Trabajo Social'),
(4, 'Facultad de Ciencias Económicas y Sociales'),
(5, 'Facultad de Derecho'),
(6, 'Facultad de Ciencias Exactas y Naturales'),
(7, 'Facultad de Humanidades'),
(8, 'Facultad de Ingeniería'),
(9, 'Facultad de Psicología'),
(10, 'Escuela Superior de Medicina');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adjuntos_presupuesto`
--
ALTER TABLE `adjuntos_presupuesto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comitente`
--
ALTER TABLE `comitente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `expediente`
--
ALTER TABLE `expediente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `presupuesto`
--
ALTER TABLE `presupuesto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `unidadejecutora`
--
ALTER TABLE `unidadejecutora`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `unidades_academicas`
--
ALTER TABLE `unidades_academicas`
  ADD PRIMARY KEY (`id_ua`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adjuntos_presupuesto`
--
ALTER TABLE `adjuntos_presupuesto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `comitente`
--
ALTER TABLE `comitente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `contrato`
--
ALTER TABLE `contrato`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `director`
--
ALTER TABLE `director`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `expediente`
--
ALTER TABLE `expediente`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `presupuesto`
--
ALTER TABLE `presupuesto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `unidadejecutora`
--
ALTER TABLE `unidadejecutora`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `unidades_academicas`
--
ALTER TABLE `unidades_academicas`
  MODIFY `id_ua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
