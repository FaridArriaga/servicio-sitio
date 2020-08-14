-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-08-2020 a las 07:59:57
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `repository`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desventajas-investigacion`
--

CREATE TABLE `desventajas-investigacion` (
  `id` int(11) NOT NULL,
  `desventaja` char(255) NOT NULL,
  `idInvestigacion` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilio-proveedores`
--

CREATE TABLE `domicilio-proveedores` (
  `id` int(11) NOT NULL,
  `calle` char(50) NOT NULL,
  `numero` int(11) NOT NULL,
  `colonia` char(50) NOT NULL,
  `cp` int(11) NOT NULL,
  `ciudad` char(100) NOT NULL,
  `pais` char(50) NOT NULL,
  `rfc-proveedor` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `explicaciones-investigacion`
--

CREATE TABLE `explicaciones-investigacion` (
  `id` int(11) NOT NULL,
  `explicacion-archivo` char(255) NOT NULL,
  `descripcion-explicacion` varchar(1000) NOT NULL,
  `idInvestigacion` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `investigaciones`
--

CREATE TABLE `investigaciones` (
  `id` char(10) NOT NULL,
  `nombre-investigador` char(255) NOT NULL,
  `email` varchar(320) NOT NULL,
  `contraseña-investigacion` char(16) NOT NULL,
  `nombres-investigacion` char(255) NOT NULL,
  `año` year(4) NOT NULL,
  `fecha-avance` date NOT NULL,
  `titulo` char(255) NOT NULL,
  `tipo-material` char(60) NOT NULL,
  `clasificacion` char(5) NOT NULL,
  `fines-investigacion` varchar(1000) NOT NULL,
  `caracteristicas-material` varchar(1000) NOT NULL,
  `resumen` varchar(1000) NOT NULL,
  `introduccion` varchar(750) NOT NULL,
  `antecedentes` varchar(1000) NOT NULL,
  `objetivos` varchar(750) NOT NULL,
  `hipotesis` varchar(510) NOT NULL,
  `esquema-sintesis` char(255) NOT NULL,
  `desc-sintesis` varchar(1000) NOT NULL,
  `esquema-funcionamiento` char(255) NOT NULL,
  `desc-funcionamiento` varchar(1000) NOT NULL,
  `tipo-evaluacion` char(20) NOT NULL,
  `tecnicas-utiles` varchar(1000) NOT NULL,
  `justificacion-tecnicas` varchar(1000) NOT NULL,
  `nivel-certeza` char(20) NOT NULL,
  `metas-expectativas` varchar(1000) NOT NULL,
  `referencias` varchar(1500) NOT NULL,
  `bibliografia` varchar(1500) NOT NULL,
  `emailUsuario` varchar(320) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales-investigacion`
--

CREATE TABLE `materiales-investigacion` (
  `id` int(11) NOT NULL,
  `archivo-material` char(255) NOT NULL,
  `descripcion-material` varchar(1000) NOT NULL,
  `idInvestigacion` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id` char(10) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(70) NOT NULL,
  `domicilio` varchar(255) NOT NULL,
  `telefono` char(11) NOT NULL,
  `edad` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasos-investigacion`
--

CREATE TABLE `pasos-investigacion` (
  `id` int(11) NOT NULL,
  `paso-archivo` char(255) NOT NULL,
  `descripcion-paso` varchar(1000) NOT NULL,
  `idInvestigacion` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` char(10) NOT NULL,
  `titulo` char(50) NOT NULL,
  `componentes` varchar(500) NOT NULL,
  `funcion` varchar(500) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `costo_compra` int(11) NOT NULL,
  `costo_venta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores-compras`
--

CREATE TABLE `proveedores-compras` (
  `rfc` char(13) NOT NULL,
  `id` int(11) NOT NULL,
  `nombre` char(25) NOT NULL,
  `telefono` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamientos`
--

CREATE TABLE `tratamientos` (
  `id` char(10) NOT NULL,
  `tratamiento` text NOT NULL,
  `fecha` date NOT NULL,
  `seguimiento` text NOT NULL,
  `idPaciente` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `email` varchar(320) NOT NULL,
  `id` int(11) NOT NULL,
  `nombre_usuario` char(15) NOT NULL,
  `password` char(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`email`, `id`, `nombre_usuario`, `password`) VALUES
('ivan_farid@hotmail.com', 1, 'Farid', '12345678');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventajas-investigacion`
--

CREATE TABLE `ventajas-investigacion` (
  `id` int(11) NOT NULL,
  `ventaja` char(255) NOT NULL,
  `idInvestigacion` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `desventajas-investigacion`
--
ALTER TABLE `desventajas-investigacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idInvestigacion` (`idInvestigacion`);

--
-- Indices de la tabla `domicilio-proveedores`
--
ALTER TABLE `domicilio-proveedores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rfc-proveedor` (`rfc-proveedor`);

--
-- Indices de la tabla `explicaciones-investigacion`
--
ALTER TABLE `explicaciones-investigacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idInvestigacion` (`idInvestigacion`);

--
-- Indices de la tabla `investigaciones`
--
ALTER TABLE `investigaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emailUsuario` (`emailUsuario`);

--
-- Indices de la tabla `materiales-investigacion`
--
ALTER TABLE `materiales-investigacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idInvestigacion` (`idInvestigacion`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pasos-investigacion`
--
ALTER TABLE `pasos-investigacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idInvestigacion` (`idInvestigacion`),
  ADD KEY `idInvestigacion_2` (`idInvestigacion`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `titulo` (`titulo`);

--
-- Indices de la tabla `proveedores-compras`
--
ALTER TABLE `proveedores-compras`
  ADD PRIMARY KEY (`rfc`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `tratamientos`
--
ALTER TABLE `tratamientos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idPaciente` (`idPaciente`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `ventajas-investigacion`
--
ALTER TABLE `ventajas-investigacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idInvestigacion` (`idInvestigacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `desventajas-investigacion`
--
ALTER TABLE `desventajas-investigacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `domicilio-proveedores`
--
ALTER TABLE `domicilio-proveedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `explicaciones-investigacion`
--
ALTER TABLE `explicaciones-investigacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `materiales-investigacion`
--
ALTER TABLE `materiales-investigacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pasos-investigacion`
--
ALTER TABLE `pasos-investigacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedores-compras`
--
ALTER TABLE `proveedores-compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ventajas-investigacion`
--
ALTER TABLE `ventajas-investigacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `desventajas-investigacion`
--
ALTER TABLE `desventajas-investigacion`
  ADD CONSTRAINT `desventajas-investigacion_ibfk_1` FOREIGN KEY (`idInvestigacion`) REFERENCES `investigaciones` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `domicilio-proveedores`
--
ALTER TABLE `domicilio-proveedores`
  ADD CONSTRAINT `domicilio-proveedores_ibfk_1` FOREIGN KEY (`rfc-proveedor`) REFERENCES `proveedores-compras` (`rfc`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `explicaciones-investigacion`
--
ALTER TABLE `explicaciones-investigacion`
  ADD CONSTRAINT `explicaciones-investigacion_ibfk_1` FOREIGN KEY (`idInvestigacion`) REFERENCES `investigaciones` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `investigaciones`
--
ALTER TABLE `investigaciones`
  ADD CONSTRAINT `investigaciones_ibfk_1` FOREIGN KEY (`emailUsuario`) REFERENCES `usuarios` (`email`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `materiales-investigacion`
--
ALTER TABLE `materiales-investigacion`
  ADD CONSTRAINT `materiales-investigacion_ibfk_1` FOREIGN KEY (`idInvestigacion`) REFERENCES `investigaciones` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `pasos-investigacion`
--
ALTER TABLE `pasos-investigacion`
  ADD CONSTRAINT `pasos-investigacion_ibfk_1` FOREIGN KEY (`idInvestigacion`) REFERENCES `investigaciones` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tratamientos`
--
ALTER TABLE `tratamientos`
  ADD CONSTRAINT `tratamientos_ibfk_1` FOREIGN KEY (`idPaciente`) REFERENCES `pacientes` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `ventajas-investigacion`
--
ALTER TABLE `ventajas-investigacion`
  ADD CONSTRAINT `ventajas-investigacion_ibfk_1` FOREIGN KEY (`idInvestigacion`) REFERENCES `investigaciones` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
