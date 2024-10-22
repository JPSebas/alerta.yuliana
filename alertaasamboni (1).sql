-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-10-2024 a las 08:51:38
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alertaasamboni`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id_administrador` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menores_desaparecidos`
--

CREATE TABLE `menores_desaparecidos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `edad` int(11) NOT NULL,
  `fecha_desaparicion` date NOT NULL,
  `descripcion` text NOT NULL,
  `contacto` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nino_desaparecido`
--

CREATE TABLE `nino_desaparecido` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `fecha_desaparicion` date NOT NULL,
  `lugar_desaparicion` varchar(100) NOT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `nino_desaparecido`
--

INSERT INTO `nino_desaparecido` (`id`, `nombre`, `apellido`, `fecha_nacimiento`, `fecha_desaparicion`, `lugar_desaparicion`, `telefono`, `correo`, `imagen`, `descripcion`) VALUES
(1, 'Sebastián', 'Reyes Poveda', '2220-02-21', '2222-02-21', 'er', '1234567892', 'reymaltraa@gmail.com', NULL, NULL),
(2, 'Sebastián', 'Reyes Poveda', '2220-02-21', '2222-02-21', 'er', '1234567892', 'reymaltraa@gmail.com', 'imagenes_productos/2.jpeg', NULL),
(3, 'Sebastián', 'Reyes Poveda', '0000-00-00', '2222-02-22', 'er', '3149124239', 'reymaltraa@gmail.com', 'imagenes_productos/3.jpg', NULL),
(4, 'Sebastián', 'Reyes Poveda', '0000-00-00', '0222-02-22', 'er', '1234567892', 'reymaltraa@gmail.com', 'imagenes_productos/4.jpeg', NULL),
(5, 'Sebastián', 'Reyes Poveda', '2222-04-23', '0000-00-00', 'er', '1234567892', 'reymaltraa@gmail.com', 'imagenes_productos/5.png', NULL),
(6, 'Sebastián', 'Reyes Poveda', '2005-02-12', '2000-09-09', 'er', '1234567892', 'reymaltraa@gmail.com', 'imagenes_productos/6.jpeg', '1wd'),
(7, 'Sebastián', 'Reyes Poveda', '1111-11-11', '1111-11-11', 'er', '1234567892', 'reymaltraa@gmail.com', 'imagenes_productos/7.png', 'kjkhjhkjhjhjhkjjjjjjjjjjjjjjjjjjjjjjjjj'),
(8, 'sara', 'Reyes Poveda', '2222-02-22', '2222-02-22', '2', '1234567892', 'reymaltraa@gmail.com', 'imagenes_productos/8.png', 'kjkl'),
(9, 'Sebastián', 'Reyes Poveda', '0222-09-12', '0222-09-12', 'jh', '3149124239', 'reymaltraa@gmail.com', 'imagenes_productos/9.png', 'hjghgjjh'),
(10, 'Sebastián', 'Reyes Poveda', '1999-02-12', '1956-12-23', 'ds', '3149124239', 'reymaltraa@gmail.com', 'imagenes_productos/10.png', 'hgffjfggghghgh'),
(11, 'Sebastián', 'Reyes Poveda', '1222-12-12', '1997-12-21', 'rrr', '3149124239', 'reymaltraa@gmail.com', 'imagenes_productos/11.png', 'h'),
(12, 'Sebastián', 'Reyes Poveda', '1111-11-13', '2222-02-12', 'ds', '3149124239', 'reymaltraa@gmail.com', 'imagenes_productos/12.png', 'hjh'),
(13, 'Sebastián', 'Reyes Poveda', '1212-11-11', '2111-03-12', 'h', '3149124239', 'reymaltraa@gmail.com', 'imagenes_productos/13.png', 'hjjggjg'),
(14, 'Sebastián', 'Reyes Poveda', '1111-11-11', '2222-02-22', 'ds', '3149124239', 'reymaltraa@gmail.com', 'imagenes_productos/14.png', 'jhjjgj'),
(15, 'Sebastián', 'Reyes Poveda', '1111-11-11', '1111-11-11', '2', '3149124239', 'reymaltraa@gmail.com', 'imagenes_productos/15.png', 'g');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `imagen` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `precio`, `imagen`) VALUES
(1, 'we111', 122, 'imagenes_productos/0.jpeg'),
(2, 'dayya', 223, 'imagenes_productos/2.jpg'),
(4, 'we111', 12, 'imagenes_productos/4.jpeg'),
(5, 'we111', 1222, 'imagenes_productos/5.jpg'),
(6, 'wderewr', 1, 'imagenes_productos/6.jpeg'),
(7, 'we111', 12, 'imagenes_productos/7.jpeg'),
(8, 'we111', 3, 'imagenes_productos/8.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `direccion` varchar(100) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `rol` enum('Usuario','Administrador') DEFAULT 'Usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `telefono`, `direccion`, `cedula`, `email`, `PASSWORD`, `rol`) VALUES
(1, 'Sebastián', 'Reyes Poveda', '3149124239', 'santa', '1223444', 'reymaltra@gmail.com', 'ed73f6b46391b95e1d03c6818a73b8b9', 'Usuario'),
(2, 'Sebastián', 'Reyes Poveda', '3149124239', 'santa', '1223444', 'reymaltra@gmail.com', '7694f4a66316e53c8cdd9d9954bd611d', 'Usuario'),
(3, 'Sebastián', 'Reyes Poveda', '3149124239', 'santa', '1223444', 'reymaltra@gmail.com', 'efad7abb323e3d4016284c8a6da076a1', 'Usuario'),
(4, 'Sebastián', 'Reyes Poveda', '1234567892', 'santa', '1223444', 'reymaltra@gmail.com', 'efad7abb323e3d4016284c8a6da076a1', 'Usuario'),
(5, 'Sebastián', 'Reyes Poveda', '3149124239', 'santa', '1223444', 'reymaltra@gmail.com', '9f8fcf8a08be0951e41c7f350cffa1c4', 'Usuario'),
(6, 'Sebastián', 'Reyes Poveda', '3149124239', 'santa', '1223444', 'josesebastianreyespoveda26@gmail.com', '9f3ac9466b0c6d2e862c4c38bd8fd82f', 'Usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `menores_desaparecidos`
--
ALTER TABLE `menores_desaparecidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nino_desaparecido`
--
ALTER TABLE `nino_desaparecido`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `menores_desaparecidos`
--
ALTER TABLE `menores_desaparecidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nino_desaparecido`
--
ALTER TABLE `nino_desaparecido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
