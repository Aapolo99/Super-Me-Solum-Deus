-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2023 a las 04:13:09
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `supermesolumdeus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `id` int(11) NOT NULL,
  `nombre_area` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallesreserva`
--

CREATE TABLE `detallesreserva` (
  `id` int(11) NOT NULL,
  `id_reserva` int(11) DEFAULT NULL,
  `id_plato` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listasprecios`
--

CREATE TABLE `listasprecios` (
  `id` int(11) NOT NULL,
  `nombre_lista` varchar(255) DEFAULT NULL,
  `plato` varchar(255) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `listasprecios`
--

INSERT INTO `listasprecios` (`id`, `nombre_lista`, `plato`, `precio`) VALUES
(1, 'Entradas', 'Sopa de langosta', '30.00'),
(2, 'Entradas', 'Carpaccio de ternera con trufa negra', '35.00'),
(3, 'Entradas', 'Tartar de atún con aguacate', '28.00'),
(4, 'Entradas', 'Foie gras con reducción de vino tinto', '40.00'),
(5, 'Entradas', 'Ostra Kumamoto al natural (plato de autor)', '7.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `ID` int(11) NOT NULL,
  `Plato` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id_reserva` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `NombreApellido` text DEFAULT NULL,
  `id_mesa` int(11) DEFAULT NULL,
  `fecha_hora` datetime DEFAULT NULL,
  `Personas` int(11) NOT NULL,
  `estado` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id_reserva`, `id_usuario`, `NombreApellido`, `id_mesa`, `fecha_hora`, `Personas`, `estado`) VALUES
(1, 2147483647, 'Adam Cassio', 1, '2023-10-21 00:00:00', 2, NULL),
(2, 2147483647, 'Adam Cassio', 2, '2023-10-23 00:00:00', 2, NULL),
(3, 2147483647, 'Adam Cassio', 5, '2023-11-10 00:00:00', 5, NULL),
(4, 2, 'Camilo Rojas', 7, '2023-10-31 00:00:00', 7, NULL),
(5, 2, 'Camilo Rojas', 8, '2023-10-23 00:00:00', 4, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `ID` int(11) NOT NULL,
  `rol` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`ID`, `rol`) VALUES
(1, 'admin'),
(2, 'estandar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `Apellido` varchar(255) DEFAULT NULL,
  `Direccion` varchar(255) DEFAULT NULL,
  `Contacto` int(10) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Contrasena` varchar(255) DEFAULT NULL,
  `ID_Rol` int(2) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `Nombre`, `Apellido`, `Direccion`, `Contacto`, `Email`, `Contrasena`, `ID_Rol`) VALUES
(2, 'Camilo', 'Rojas', 'BOGOTA', 22223, 'camilor@gmail.com', '234', 2),
(3, 'Camilo', 'Rojas', 'Bogota', 34566, 'camilors@gmail.com', '123456', 1),
(1005678499, 'Maria', 'Suarez', 'Calle 44', 345678, 'mariac@gmail.com', '1234', 2),
(1032498421, 'Adam', 'Cassio', 'Calle 12', 2147483647, 'adam@gmail.com', '12345', 1),
(1032498422, 'Edit', 'Diaz', 'Bogota', 2147483647, 'prueba@gmail.com', '12345', 2),
(1032498423, 'Prueba', 'Tres', 'X', 2147483647, 'prueba@gmail.com', '12345', 2),
(1234567890, 'Adam', 'Cassio', 'Calle 12', 1111, 'adam@gmail.com', '1234', 2),
(1234789654, 'Andres', 'Diaz', 'Calle 23', 2147483647, 'andresd@gmail.com', '12345', 2),
(2147483647, 'Cristian', 'Rodriguez', 'calle 45', 345678903, 'cristian@gmail.com', '12345', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detallesreserva`
--
ALTER TABLE `detallesreserva`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_reserva` (`id_reserva`),
  ADD KEY `id_plato` (`id_plato`);

--
-- Indices de la tabla `listasprecios`
--
ALTER TABLE `listasprecios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id_reserva`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_ID_Rol` (`ID_Rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallesreserva`
--
ALTER TABLE `detallesreserva`
  ADD CONSTRAINT `detallesreserva_ibfk_1` FOREIGN KEY (`id_reserva`) REFERENCES `reservas` (`id_reserva`),
  ADD CONSTRAINT `detallesreserva_ibfk_2` FOREIGN KEY (`id_plato`) REFERENCES `menu` (`ID`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_ID_Rol` FOREIGN KEY (`ID_Rol`) REFERENCES `roles` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
