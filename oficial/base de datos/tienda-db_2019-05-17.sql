-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 17-05-2019 a las 17:02:36
-- Versión del servidor: 5.6.35
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`127.0.0.1` PROCEDURE `change` (IN `cosa` VARCHAR(100), IN `nuevo` VARCHAR(100), IN `usuario` VARCHAR(100))  NO SQL
BEGIN
	UPDATE usarios SET cosa = nuevo where username=usuario;
    END$$

CREATE DEFINER=`root`@`127.0.0.1` PROCEDURE `rep_email` (IN `emaill` VARCHAR(100))  NO SQL
BEGIN 
SELECT * from usuarios where email = emaill;
END$$

CREATE DEFINER=`root`@`127.0.0.1` PROCEDURE `rep_user` (IN `userr` VARCHAR(100))  BEGIN 
SELECT * from usuarios where username = userr;
END$$

--
-- Funciones
--
CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `fin` (`usuario` VARCHAR(100)) RETURNS TINYINT(1) NO SQL
BEGIN
DELETE FROM `usuarios` where username = usuario; 
RETURN 1;
END$$

CREATE DEFINER=`root`@`127.0.0.1` FUNCTION `inicio` (`usuario` VARCHAR(100)) RETURNS TINYINT(1) NO SQL
BEGIN
INSERT INTO inicio VALUES(usuario, CURRENT_DATE());
RETURN 1;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio`
--

CREATE TABLE `inicio` (
  `Nombre` varchar(100) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `inicio`
--

INSERT INTO `inicio` (`Nombre`, `fecha`) VALUES
('angeles', '2019-05-17'),
('angeles', '2019-05-17'),
('angeles', '2019-05-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `categoria`, `imagen`, `nombre`, `descripcion`, `precio`) VALUES
(2, 'pastas', 'subir/1-1.jpg', 'Pasta espaguetti', 'Deliciosa pasta al dente con trozos de jamon y queso parmesano', 50),
(3, 'pastas', 'subir/2-2.jpeg', 'Pasta pené', 'Deliciosa pasta con salsa tres quesos y pollo trozeado', 55),
(4, 'pastas', 'subir/3-3.jpg', 'Pasta espaguetti', 'Deliciosa pasta con salsa verde elote y hierbas finas', 53),
(5, 'pizzas', 'subir/1.jpg', 'Pizza de queso', 'Deliciosa pizza a base de 4 quesos con hierbas finas', 80),
(7, 'pizzas', 'subir/2.jpg', 'Pizza italiana', 'Deliciosa pizza italiana con jamon aceitunas y setas ', 100),
(8, 'pizzas', 'subir/3.jpg', 'Pizza hawaiana', 'pizza hawaiana', 120),
(9, 'risotto', 'subir/pescado.jpg', 'Risotto de pescado', 'Risotto tradicional con pescado', 70),
(10, 'risotto', 'subir/pollo.jpg', 'Risotto de pollo', 'Risotto tradicional con pollo trozeado ', 65),
(11, 'risotto', 'subir/qiona.jpg', 'Risotto de quiona', 'Risotto tradicional con quinoa', 60),
(12, 'pastas', 'subir/pollo.jpg', 'asdasd', 'asdasd', 2123);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiket`
--

CREATE TABLE `tiket` (
  `id` int(255) NOT NULL,
  `id_usuario` varchar(100) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `apellidop` varchar(100) NOT NULL,
  `apellidom` varchar(100) NOT NULL,
  `metodopago` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`, `nombre`, `email`, `apellidop`, `apellidom`, `metodopago`) VALUES
(1, 'angeles', '$2y$04$LvOEvDYUal0/Lsf2FuuHJu5nQmhBNd/hPwYQAxEucyRMg2ih5m9H.', 'cordero', '74914.en@gmail.com', 'asdasd', 'asd', 'Efectivo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `tiket`
--
ALTER TABLE `tiket`
  ADD KEY `tiket_ibfk_1` (`id_producto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `tiket_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON DELETE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
