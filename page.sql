-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-10-2018 a las 20:50:56
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `page`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `cod_categoria` int(11) NOT NULL,
  `descripcion` varchar(120) COLLATE utf8_latvian_ci NOT NULL,
  `urlimagen` varchar(200) COLLATE utf8_latvian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`cod_categoria`, `descripcion`, `urlimagen`) VALUES
(1, 'Autos', NULL),
(2, 'Educacion', NULL),
(3, 'Restaurantes', NULL),
(4, 'Turismo', NULL),
(5, 'Compras y Shopping', NULL),
(6, 'Electronica', NULL),
(7, 'Deportes', NULL),
(8, 'Entretenimiento y Vida Nocturna', NULL),
(9, 'Salud y Medicina', NULL),
(10, 'Servicios', NULL),
(11, 'Hoteles', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

CREATE TABLE `configuracion` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `direccion` tinytext NOT NULL,
  `geolocalizacion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `configuracion`
--

INSERT INTO `configuracion` (`id`, `titulo`, `direccion`, `geolocalizacion`) VALUES
(1, 'Arandu', 'Paraguay', '123443,12134');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenidos`
--

CREATE TABLE `contenidos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `contenido` longtext NOT NULL,
  `fecha_publicacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tipo` varchar(20) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `alias` varchar(200) NOT NULL,
  `contacto` varchar(200) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `cod_zona` int(11) DEFAULT NULL,
  `urlimagen` varchar(200) DEFAULT NULL,
  `resumen` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contenidos`
--

INSERT INTO `contenidos` (`id`, `titulo`, `contenido`, `fecha_publicacion`, `tipo`, `categoria`, `alias`, `contacto`, `direccion`, `cod_zona`, `urlimagen`, `resumen`) VALUES
(3, 'Inicio', '%3Cp%3E&nbsp;%3C/p%3E%0A%0A%3Cp%3E&nbsp;%3C/p%3E%0A%0A%3Cp%3E&nbsp;%3C/p%3E%0A%0A%3Cp%3E&nbsp;%3C/p%3E%0A', '2018-09-19 12:45:22', 'PAGE', '', '', NULL, NULL, NULL, NULL, NULL),
(12, 'Guia', '%5Bguia_de_posts1%5D%5Bguia_de_posts2%5D%5Bguia_de_posts3%5D%0A', '2018-09-20 16:22:20', 'PAGE', '', 'guia.php', NULL, '', NULL, '', ''),
(19, 'Hoteles', '%3Cp%3E%5Blistado_hoteles%5D%3C/p%3E%0A', '2018-09-20 13:33:02', 'PAGE', '', 'hotel.php', NULL, '', NULL, '', 'Listado de Hoteles'),
(20, 'Negocio', '%3Ch3%3E%3Cimg%20alt=%22Texto%22%20src=%22%20https://via.placeholder.com/800x600%22%20style=%22float:left;%20height:100px;%20margin-right:10px;%20width:100px%22%20/%3EType%20the%20title%20here%3C/h3%3E%0A%0A%3Cp%3ELorem%20ipsum%20dolor%20sit%20amet,%20consectetuer%20adipiscing%20elit.%20Maecenas%20feugiat%20consequat%20diam.%20Maecenas%20metus.%20Vivamus%20diam%20purus,%20cursus%20a,%20commodo%20non,%20facilisis%20vitae,%20nulla.%20Aenean%20dictum%20lacinia%20tortor.%20Nunc%20iaculis,%20nibh%20non%20iaculis%20aliquam,%20orci%20felis%20euismod%20neque,%20sed%20ornare%20massa%20mauris%20sed%20velit.%20Nulla%20pretium%20mi%20et%20risus.%20Fusce%20mi%20pede,%20tempor%20id,%20cursus%20ac,%20ullamcorper%20nec,%20enim.%20Sed%20tortor.%20Curabitur%20molestie.%20Duis%20velit%20augue,%20condimentum%20at,%20ultrices%20a,%20luctus%20ut,%20orci.%20Donec%20pellentesque%20egestas%20eros.%20Integer%20cursus,%20augue%20in%20cursus%20faucibus,%20eros%20pede%20bibendum%20sem,%20in%20tempus%20tellus%20justo%20quis%20ligula.%20Etiam%20eget%20tortor.%20Vestibulum%20rutrum,%20est%20ut%20placerat%20elementum,%20lectus%20nisl%20aliquam%20velit,%20tempor%20aliquam%20eros%20nunc%20nonummy%20metus.%20In%20eros%20metus,%20gravida%20a,%20gravida%20sed,%20lobortis%20id,%20turpis.%20Ut%20ultrices,%20ipsum%20at%20venenatis%20fringilla,%20sem%20nulla%20lacinia%20tellus,%20eget%20aliquet%20turpis%20mauris%20non%20enim.%20Nam%20turpis.%20Suspendisse%20lacinia.%20Curabitur%20ac%20tortor%20ut%20ipsum%20egestas%20elementum.%20Nunc%20imperdiet%20gravida%20mauris.%3C/p%3E%0A', '2018-10-03 14:49:15', 'POST', '10', 'negocio', NULL, 'Ciudad', NULL, 'https://via.placeholder.com/800x600', 'Nombre de negocio resumen'),
(21, 'Busqueda', '', '2018-10-08 18:08:43', 'PAGE', '', 'busqueda.php', NULL, '', NULL, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_latvian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id`, `nombre`) VALUES
(1, 'Carlos Avalos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) COLLATE utf8_latvian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `tipo`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) COLLATE utf8_latvian_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_latvian_ci NOT NULL,
  `id_personal` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `id_personal`, `id_tipo`) VALUES
(1, 'carlos', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zona`
--

CREATE TABLE `zona` (
  `cod_zona` int(11) NOT NULL,
  `descripcion` varchar(150) COLLATE utf8_latvian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cod_categoria`);

--
-- Indices de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contenidos`
--
ALTER TABLE `contenidos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias` (`alias`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_personal` (`id_personal`),
  ADD KEY `id_tipo` (`id_tipo`);

--
-- Indices de la tabla `zona`
--
ALTER TABLE `zona`
  ADD PRIMARY KEY (`cod_zona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `contenidos`
--
ALTER TABLE `contenidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `zona`
--
ALTER TABLE `zona`
  MODIFY `cod_zona` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`id_tipo`) REFERENCES `tipo_usuario` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_3` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
