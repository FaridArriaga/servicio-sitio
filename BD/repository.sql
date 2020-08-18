-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-08-2020 a las 02:38:31
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
  `desventaja` varchar(50) NOT NULL,
  `idInvestigacion` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilio-proveedores`
--

CREATE TABLE `domicilio-proveedores` (
  `id` int(11) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `numero` int(11) NOT NULL,
  `colonia` varchar(50) NOT NULL,
  `cp` int(11) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `rfc-proveedor` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `explicaciones-investigacion`
--

CREATE TABLE `explicaciones-investigacion` (
  `id` int(11) NOT NULL,
  `explicacion-archivo` varchar(50) NOT NULL,
  `descripcion-explicacion` varchar(1000) NOT NULL,
  `idInvestigacion` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `investigaciones`
--

CREATE TABLE `investigaciones` (
  `id` varchar(40) NOT NULL,
  `nombre_investigador` varchar(50) NOT NULL,
  `email` varchar(320) NOT NULL,
  `password_investigacion` varchar(40) NOT NULL,
  `nombres-investigacion` varchar(200) NOT NULL,
  `año` year(4) NOT NULL,
  `fecha-avance` date NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `tipo-material` varchar(60) NOT NULL,
  `clasificacion` char(5) NOT NULL,
  `fines-investigacion` varchar(1000) NOT NULL,
  `caracteristicas-material` varchar(1000) NOT NULL,
  `resumen` varchar(1000) NOT NULL,
  `introduccion` varchar(750) NOT NULL,
  `antecedentes` varchar(1000) NOT NULL,
  `objetivos` varchar(750) NOT NULL,
  `hipotesis` varchar(510) NOT NULL,
  `esquema-sintesis` varchar(200) NOT NULL,
  `desc-sintesis` varchar(1000) NOT NULL,
  `esquema-funcionamiento` varchar(200) NOT NULL,
  `desc-funcionamiento` varchar(1000) NOT NULL,
  `tipo-evaluacion` varchar(20) NOT NULL,
  `tecnicas-utiles` varchar(1000) NOT NULL,
  `justificacion-tecnicas` varchar(1000) NOT NULL,
  `nivel-certeza` varchar(20) NOT NULL,
  `metas-expectativas` varchar(1000) NOT NULL,
  `referencias` varchar(1500) NOT NULL,
  `bibliografia` varchar(1500) NOT NULL,
  `emailUsuario` varchar(320) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `investigaciones`
--

INSERT INTO `investigaciones` (`id`, `nombre_investigador`, `email`, `password_investigacion`, `nombres-investigacion`, `año`, `fecha-avance`, `titulo`, `tipo-material`, `clasificacion`, `fines-investigacion`, `caracteristicas-material`, `resumen`, `introduccion`, `antecedentes`, `objetivos`, `hipotesis`, `esquema-sintesis`, `desc-sintesis`, `esquema-funcionamiento`, `desc-funcionamiento`, `tipo-evaluacion`, `tecnicas-utiles`, `justificacion-tecnicas`, `nivel-certeza`, `metas-expectativas`, `referencias`, `bibliografia`, `emailUsuario`) VALUES
('JRIESRINCONES171597624443693', 'Investigador 1', 'correo@correo.com', '7c222fb2927d828af22f592134e8932480637c0d', '', 0000, '0000-00-00', 'Prueba1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ivan_farid@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales-investigacion`
--

CREATE TABLE `materiales-investigacion` (
  `id` int(11) NOT NULL,
  `archivo-material` varchar(200) NOT NULL,
  `descripcion-material` varchar(1000) NOT NULL,
  `idInvestigacion` varchar(40) NOT NULL
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
  `telefono` varchar(11) NOT NULL,
  `edad` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id`, `nombres`, `apellidos`, `domicilio`, `telefono`, `edad`) VALUES
('21213132', 'Juana Maria', 'Perez Godoy', 'calle 2 , colonia', '1234567891', 45);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasos-investigacion`
--

CREATE TABLE `pasos-investigacion` (
  `id` int(11) NOT NULL,
  `paso-archivo` varchar(200) NOT NULL,
  `descripcion-paso` varchar(1000) NOT NULL,
  `idInvestigacion` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` char(10) NOT NULL,
  `titulo` varchar(50) NOT NULL,
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
  `rfc` varchar(13) NOT NULL,
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamientos`
--

CREATE TABLE `tratamientos` (
  `id` int(11) NOT NULL,
  `tratamiento` text NOT NULL,
  `fecha` date NOT NULL,
  `seguimiento` text NOT NULL,
  `idPaciente` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tratamientos`
--

INSERT INTO `tratamientos` (`id`, `tratamiento`, `fecha`, `seguimiento`, `idPaciente`) VALUES
(1, 'Poner inyección', '2020-08-17', 'Ver posibles reacciones', '21213132');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `email` varchar(320) NOT NULL,
  `id` int(11) NOT NULL,
  `nombre_usuario` varchar(15) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`email`, `id`, `nombre_usuario`, `password`) VALUES
('ivan_farid@hotmail.com', 1, 'Farid', '7c222fb2927d828af22f592134e8932480637c0d');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventajas-investigacion`
--

CREATE TABLE `ventajas-investigacion` (
  `id` int(11) NOT NULL,
  `ventaja` varchar(200) NOT NULL,
  `idInvestigacion` varchar(40) NOT NULL
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
  ADD KEY `rfc-proveedor` (`rfc-proveedor`),
  ADD KEY `rfc-proveedor_2` (`rfc-proveedor`);

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
  ADD KEY `emailUsuario` (`emailUsuario`),
  ADD KEY `emailUsuario_2` (`emailUsuario`);

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
-- AUTO_INCREMENT de la tabla `tratamientos`
--
ALTER TABLE `tratamientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
