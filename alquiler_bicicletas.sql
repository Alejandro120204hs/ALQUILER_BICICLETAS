-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2025 a las 23:31:41
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alquiler_bicicletas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquiler`
--

CREATE TABLE `alquiler` (
  `id` int(11) NOT NULL,
  `id_bicicleta` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `total_a_pagar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alquiler`
--

INSERT INTO `alquiler` (`id`, `id_bicicleta`, `id_usuario`, `total_a_pagar`) VALUES
(3, 7, 6, 1),
(14, 7, 6, 1),
(15, 7, 6, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bicicletas`
--

CREATE TABLE `bicicletas` (
  `id` int(11) NOT NULL,
  `marca` varchar(60) DEFAULT NULL,
  `estado` varchar(20) DEFAULT 'Disponible',
  `precio_alquiler` int(11) DEFAULT NULL,
  `foto` varchar(200) NOT NULL,
  `color` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `bicicletas`
--

INSERT INTO `bicicletas` (`id`, `marca`, `estado`, `precio_alquiler`, `foto`, `color`) VALUES
(7, 'GWWWW', 'Disponible', 1, '../public/uploads/bicicletas/ciclaazul.jpeg', 'Azul');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciclo_paseo`
--

CREATE TABLE `ciclo_paseo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `descripcion` varchar(60) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `lugar` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ciclo_paseo`
--

INSERT INTO `ciclo_paseo` (`id`, `nombre`, `descripcion`, `fecha`, `hora`, `lugar`) VALUES
(8, 'ciclismo', 'ciclismo en el rio', '2025-10-17', '00:25:00', 'Centro villeta'),
(9, 'montaña', 'ssssssssssssssss', '2025-10-22', '15:30:00', 'sena villeta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participacion_ciclopaseo`
--

CREATE TABLE `participacion_ciclopaseo` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_ciclopaseo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `participacion_ciclopaseo`
--

INSERT INTO `participacion_ciclopaseo` (`id`, `id_usuario`, `id_ciclopaseo`) VALUES
(2, 6, 8),
(4, 6, 8),
(1, 6, 9),
(3, 7, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombres` varchar(60) NOT NULL,
  `apellidos` varchar(60) NOT NULL,
  `correo` varchar(69) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `identificacion` int(11) NOT NULL,
  `password` varchar(60) NOT NULL,
  `rol` varchar(30) DEFAULT NULL,
  `estrato` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombres`, `apellidos`, `correo`, `telefono`, `identificacion`, `password`, `rol`, `estrato`) VALUES
(4, 'Carolina', 'Sierra', 'alejandrohernandezsierra233@gmail.com', '3106081490', 52656490, 'f128a27ef94c4fbf1f05428cf047a128', 'Administrador', 0),
(6, 'Diego Alejandro', 'Hernandez Sierra', 'alejandro1202hs@gmail.com', '3213919596', 1070942496, 'd881873c952dc97c8ab8fb7b1f9f902b', 'aprendiz', 2),
(7, 'camila', 'sanchez', 'mesacamila381@gmail.com', '3224719585', 1111, '3c3f6412149eebf5bdd76c3d41d4222b', 'aprendiz', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alquiler`
--
ALTER TABLE `alquiler`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_bicicleta` (`id_bicicleta`,`id_usuario`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `bicicletas`
--
ALTER TABLE `bicicletas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ciclo_paseo`
--
ALTER TABLE `ciclo_paseo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `participacion_ciclopaseo`
--
ALTER TABLE `participacion_ciclopaseo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`,`id_ciclopaseo`),
  ADD KEY `id_ciclopaseo` (`id_ciclopaseo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alquiler`
--
ALTER TABLE `alquiler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `bicicletas`
--
ALTER TABLE `bicicletas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `ciclo_paseo`
--
ALTER TABLE `ciclo_paseo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `participacion_ciclopaseo`
--
ALTER TABLE `participacion_ciclopaseo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alquiler`
--
ALTER TABLE `alquiler`
  ADD CONSTRAINT `alquiler_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alquiler_ibfk_2` FOREIGN KEY (`id_bicicleta`) REFERENCES `bicicletas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `participacion_ciclopaseo`
--
ALTER TABLE `participacion_ciclopaseo`
  ADD CONSTRAINT `participacion_ciclopaseo_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `participacion_ciclopaseo_ibfk_2` FOREIGN KEY (`id_ciclopaseo`) REFERENCES `ciclo_paseo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
