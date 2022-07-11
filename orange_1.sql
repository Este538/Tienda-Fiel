-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-07-2022 a las 15:23:34
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
-- Base de datos: `orange`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `ClaveProducto` int(11) NOT NULL,
  `ClaveUsuario` char(10) NOT NULL,
  `Costo` double DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mis_productos`
--

CREATE TABLE `mis_productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `precio` float(10,2) NOT NULL,
  `creado` datetime NOT NULL,
  `modificado` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `mis_productos`
--

INSERT INTO `mis_productos` (`id`, `nombre`, `descripcion`, `precio`, `creado`, `modificado`, `status`) VALUES
(1, 'Limon Persa', 'Producto extremadamente raro y muy cotizado en el mercado, aproveche.', 15.00, '2021-08-17 08:21:25', '2022-08-17 08:21:25', '1'),
(2, 'Naranja Agria', 'No te atrevas a ponerle mayonesa a la cochinita pibil y mejor ponle Naranja Agria para esos domingos relajantes.', 25.00, '2016-08-17 08:45:35', '2022-08-17 08:21:25', '1'),
(3, 'Mandarina gris', 'Una rareza preparada para ser puesta en un altar a tu paladar, vengale que se va y no vuelve.', 15.00, '2016-08-17 08:43:21', '2022-08-17 08:21:25', '1'),
(4, 'China Fresca', 'El producto mas dulce que puedes probar en todo el mundo, calidad asegurada.', 25.00, '2016-08-17 08:21:25', '2019-08-17 08:21:25', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE `orden` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `precio_total` float(10,2) NOT NULL,
  `creado` datetime NOT NULL,
  `modificado` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `orden`
--

INSERT INTO `orden` (`id`, `customer_id`, `precio_total`, `creado`, `modificado`, `status`) VALUES
(6, 1, 205.00, '2022-07-11 09:42:57', '2022-07-11 09:42:57', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_articulos`
--

CREATE TABLE `orden_articulos` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `cantidad` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `orden_articulos`
--

INSERT INTO `orden_articulos` (`id`, `order_id`, `product_id`, `cantidad`) VALUES
(1, 6, 9, 1),
(2, 6, 8, 1),
(3, 6, 7, 1),
(4, 6, 12, 3),
(5, 6, 2, 1),
(6, 6, 4, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ClaveProducto` int(11) NOT NULL,
  `NProveedor` varchar(50) NOT NULL,
  `NProducto` varchar(50) NOT NULL,
  `Precio` double DEFAULT NULL,
  `Existencia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ClaveProducto`, `NProveedor`, `NProducto`, `Precio`, `Existencia`) VALUES
(1, 'Gomez Horacio', 'Limon persa', 12, 1),
(2, 'Saliente Victoria', 'Naranja negra', 6, 1),
(3, 'Aquiles Rodrigo', 'Toronja verde', 24, 1),
(4, 'Sollozo Lluvia', 'Limon persa', 45, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ClaveUsuario` char(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(25) NOT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `Contrasena` varchar(50) DEFAULT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ClaveUsuario`, `Nombre`, `Apellido`, `Correo`, `Contrasena`, `img`) VALUES
('0123456789', 'Admi', 'nistrador', 'Admi@gmail.com', 'admi', '163839059965721772_1495258247283339_1485541845231468544_n.jpg'),
('1322963375', 'Iván', 'Cetina', 'ivanjecu@gmail.com', '773d1902bd70e49aa76eab6a00c647e8', '1657410901Eimud68WsAAbwYn.jpg'),
('534545007', 'Iván', 'Cetina', 'ivanjecu@hotmail.com', '773d1902bd70e49aa76eab6a00c647e8', '165741101215b991b0076dc923b4c47d349047eb3e.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`ClaveUsuario`,`ClaveProducto`),
  ADD KEY `ClaveProducto` (`ClaveProducto`);

--
-- Indices de la tabla `mis_productos`
--
ALTER TABLE `mis_productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indices de la tabla `orden_articulos`
--
ALTER TABLE `orden_articulos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ClaveProducto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ClaveUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mis_productos`
--
ALTER TABLE `mis_productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `orden_articulos`
--
ALTER TABLE `orden_articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ClaveProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`ClaveUsuario`) REFERENCES `usuarios` (`ClaveUsuario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `carrito_ibfk_2` FOREIGN KEY (`ClaveProducto`) REFERENCES `productos` (`ClaveProducto`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
