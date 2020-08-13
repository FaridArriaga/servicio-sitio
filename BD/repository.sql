-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-08-2020 a las 00:51:52
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
-- Estructura de tabla para la tabla `investigaciones`
--

CREATE TABLE `investigaciones` (
  `id` char(10) NOT NULL,
  `nombre-investigador` char(255) NOT NULL,
  `email` varchar(320) NOT NULL,
  `contraseña-investigacion` char(16) NOT NULL
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
  `id` int(11) NOT NULL,
  `email` varchar(320) NOT NULL,
  `nombre_usuario` char(15) NOT NULL,
  `password` char(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `nombre_usuario`, `password`) VALUES
(3, 'correo_prueba@hotmail.com', 'Farid', '12345678'),
(4, 'correo_prueba2@hotmail.com', 'Ismael', '12345678');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `domicilio-proveedores`
--
ALTER TABLE `domicilio-proveedores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rfc-proveedor` (`rfc-proveedor`);

--
-- Indices de la tabla `investigaciones`
--
ALTER TABLE `investigaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `domicilio-proveedores`
--
ALTER TABLE `domicilio-proveedores`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `domicilio-proveedores`
--
ALTER TABLE `domicilio-proveedores`
  ADD CONSTRAINT `domicilio-proveedores_ibfk_1` FOREIGN KEY (`rfc-proveedor`) REFERENCES `proveedores-compras` (`rfc`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tratamientos`
--
ALTER TABLE `tratamientos`
  ADD CONSTRAINT `tratamientos_ibfk_1` FOREIGN KEY (`idPaciente`) REFERENCES `pacientes` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
