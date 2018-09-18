-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-09-2018 a las 14:07:54
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
(10, 'Servicios', NULL);

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
(1, 'Arandu', 'Paraguay', '123443,12133');

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
  `direccion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contenidos`
--

INSERT INTO `contenidos` (`id`, `titulo`, `contenido`, `fecha_publicacion`, `tipo`, `categoria`, `alias`, `contacto`, `direccion`) VALUES
(1, 'Articulo 1', '%3Ch2%3Eholaaaaaaas%3C/h2%3E%0A%0A%3Cp%3Eand%20opportunities%20parse,%20inclusive%20social%20enterprise%20because%20scalable%20boots%20on%20the%20ground.%20Invest%20empower%20communities%20impact%20investing;%20efficient%20empathetic%20technology%20grit%20circular.%20Philanthropy%20issue%20outcomes%20benefit%20corporation%20justice%20shared%20vocabulary%20overcome%20injustice%20overcome%20injustice.%20Benefit%20corporation%20accessibility%20deep%20dive%20shared%20vocabulary;%20peaceful%20theory%20of%20change%20social%20impact%20theory%20of%20change%20B-corp.%20Black%20lives%20matter%20white%20paper,%20big%20data,%20collaborative%20consumption%20the%20social%20impact%20boots%20on%20the%20ground%20resilient%20thought%20partnership.%20Strengthening%20infrastructure%20paradigm,%3C/p%3E%0A%0A%3Cdiv%20style=%22page-break-after:always%22%3E%3Cspan%20style=%22display:none%22%3E&nbsp;%3C/span%3E%3C/div%3E%0A%0A%3Cp%3Ecollaborate,%20grit%20social%20enterprise%20best%20practices%20humanitarian%20bandwidth.%20When%20policymaker%20justice%20state%20of%20play%20incubator%20program%20area.%20Mobilize%20innovation%20corporate%20social%20responsibility%20move%20the%20needle%20thought%20provoking%20empathetic%20ecosystem.%20Bandwidth%20sustainable%20improve%20the%20world%20venture%20philanthropy%20venture%20philanthropy.%20Capacity%20building%20challenges%20and%20opportunities%20thought%20leadership%20deep%20dive%20uplift%20shared%20vocabulary%20natural%20resources%20when%20inclusive.%20Greenwashing%20corporate%20social%20responsibility%20paradigm%20corporate%20social%20responsibility%20youth.%20Social%20entrepreneurship%20move%20the%20needle%20deep%20dive%20inspirational%20initiative%20academic%20inspire.%20Silo%20ideate;.%3C/p%3E%0A%0A%3Cp%3E&nbsp;%3C/p%3E%0A', '2018-09-18 12:02:38', 'POST', '', 'titulo_de_contenido', NULL, NULL),
(2, 'Segundo sitio pruebas', '%3Cp%3E%5Bslider_regular%5D%5Barea_cuerpo_inicio%5D%3C/p%3E%0A%0A%3Cdiv%20class=%22col-md-12%22%3E%0A%3Ch1%3E%3Ca%20href=%22http://socialgoodipsum.com/%22%3ESegundo%20Sitio%20De%20pruebas%3C/a%3E%3C/h1%3E%0A%0A%3Cp%3E&nbsp;%3C/p%3E%0A%0A%3Cdiv%20class=%22ipsum-form%22%3E%0A%3Cdiv%20class=%22output%20words%22%3E%0A%3Cdiv%20class=%22para-wrap%22%3E%0A%3Cp%3EPeaceful%20global%20human-centered%20humanitarian%20milestones.%20Game-changer;%20empathetic%20state%20of%20play%20when%20shared%20unit%20of%20analysis%20sustainable.%20Human-centered%20transparent%20mass%20incarceration%20improve%20the%20world%20program%20area.%20Challenges%20and%20opportunities%20resilient;%20fairness%20then%20fairness%20invest%20initiative.%20Shared%20value%20relief,%20program%20areas%20social%20return%20on%20investment%20social%20entrepreneurship%20social%20intrapreneurship%20transparent%20invest.%20Justice%20empathetic%20empathetic%20technology,%20thought%20leader;%20collaborative%20cities%20optimism.%20Deep%20dive;%20green%20space%20humanitarian%20social%20capital%20social%20return%20on%20investment.%20Incubator%20thought%20leadership,%20design%20thinking%20social%20entrepreneur%20but%20impact%20youth%20think%20tank%20effective.%20Collaborative%20cities%20humanitarian%20changemaker%20B-corp%20data%20academic%20challenges%20and%20opportunities%20energize%20do-gooder.%20Benefit%20corporation%20support%20problem-solvers%20mobilize%20social.%3C/p%3E%0A%3C/div%3E%0A%3C/div%3E%0A%3C/div%3E%0A%3C/div%3E%0A%0A%3Cp%3E%5Barea_cuerpo_fin%5D%3C/p%3E%0A', '2018-08-08 14:16:40', 'POST', '3', 'segundo_sitio_pruebas', NULL, NULL),
(3, 'inicio', '%3Cp%3E&nbsp;%3C/p%3E%0A%0A%3Cp%3E&nbsp;%3C/p%3E%0A%0A%3Cp%3E&nbsp;%3C/p%3E%0A%0A%3Cp%3E&nbsp;%3C/p%3E%0A', '2018-09-09 19:39:17', 'PAGE', '', '', NULL, NULL),
(6, 'prueba lalala', '%5Bslider_regular%5D%5Barea_cuerpo_inicio%5D%0A%0A%3Ch1%3EOvercome%20injustice%3C/h1%3E%0A%0A%3Cp%3Egreenwashing%20changemaker%20changemaker%20contextualize%20innovation%20global%20design%20thinking%20relief.%20Progress,%20families%20game-changer,%20vibrant%20improve%20the%20world%20the%20resistance%20milestones.%20Changemaker,%20social%20entrepreneur%20preliminary%20thinking%20technology%20or%20B-corp.%20Social%20enterprise;%20the%20resistance%20global;%20parse%20thought%20leadership%20B-corp%20social%20innovation.%20Social%20capital%20social%20intrapreneurship;%20inspire%20preliminary%20thinking%20entrepreneur%20benefit%20corporation%20NGO%20unprecedented%20challenge.%20Movements%20best%20practices%20thought%20provoking%20because%20mobilize;%20justice,%20green%20space%20policymaker%20gender%20rights.%20Think%20tank;%20citizen-centered,%20resist%20targeted,%20emerging;%20theory%20of%20change%20collaborative%20consumption.%20Radical%20disrupt%20correlation%20NGO%20venture%20philanthropy%20social%20innovation,%20grit%20efficient%20uplift.%20Peaceful%20empower,%20but%20then%20justice%20boots%20on%20the%20ground%20leverage.%20Then%20save%20the%20world%20when%20venture%20philanthropy%20collaborative%20consumption.%20Targeted%20systems%20thinking;%20inspiring%20to%20innovation.%20Effective%20radical%20game-changer%20invest%20do-gooder,%20collective%20impact%20accessibility.%20Optimism,%20energize%20justice%20relief%20social%20innovation%20social%20intrapreneurship%20inclusion%20commitment%20deep%20dive.%20Green%20space%20outcomes%20philanthropy%20data%20uplift.%20Resist%20but%20replicable%20outcomes%20do-gooder,%20the%20triple%20bottom%20line%20expose%20the.%3C/p%3E%0A%0A%5Barea_cuerpo_fin%5D%0A%0A%3Cdiv%20class=%22done-nav%22%3E&nbsp;%3C/div%3E%0A%0A%3Cdiv%3E&nbsp;%3C/div%3E%0A', '2018-08-11 13:17:07', 'POST', '', 'lolo_a', NULL, NULL),
(7, 'wow', '%3Ch3%3EThe%20standard%20Lorem%20Ipsum%20passage,%20used%20since%20the%201500s%3C/h3%3E%0A%0A%3Cp%3E&quot;Lorem%20ipsum%20dolor%20sit%20amet,%20consectetur%20adipiscing%20elit,%20sed%20do%20eiusmod%20tempor%20incididunt%20ut%20labore%20et%20dolore%20magna%20aliqua.%20Ut%20enim%20ad%20minim%20veniam,%20quis%20nostrud%20exercitation%20ullamco%20laboris%20nisi%20ut%20aliquip%20ex%20ea%20commodo%20consequat.%20Duis%20aute%20irure%20dolor%20in%20reprehenderit%20in%20voluptate%20velit%20esse%20cillum%20dolore%20eu%20fugiat%20nulla%20pariatur.%20Excepteur%20sint%20occaecat%20cupidatat%20non%20proident,%20sunt%20in%20culpa%20qui%20officia%20deserunt%20mollit%20anim%20id%20est%20laborum.&quot;%3C/p%3E%0A%0A%3Ch3%3ESection%201.10.32%20of%20&quot;de%20Finibus%20Bonorum%20et%20Malorum&quot;,%20written%20by%20Cicero%20in%2045%20BC%3C/h3%3E%0A%0A%3Cp%3E&quot;Sed%20ut%20perspiciatis%20unde%20omnis%20iste%20natus%20error%20sit%20voluptatem%20accusantium%20doloremque%20laudantium,%20totam%20rem%20aperiam,%20eaque%20ipsa%20quae%20ab%20illo%20inventore%20veritatis%20et%20quasi%20architecto%20beatae%20vitae%20dicta%20sunt%20explicabo.%20Nemo%20enim%20ipsam%20voluptatem%20quia%20voluptas%20sit%20aspernatur%20aut%20odit%20aut%20fugit,%20sed%20quia%20consequuntur%20magni%20dolores%20eos%20qui%20ratione%20voluptatem%20sequi%20nesciunt.%20Neque%20porro%20quisquam%20est,%20qui%20dolorem%20ipsum%20quia%20dolor%20sit%20amet,%20consectetur,%20adipisci%20velit,%20sed%20quia%20non%20numquam%20eius%20modi%20tempora%20incidunt%20ut%20labore%20et%20dolore%20magnam%20aliquam%20quaerat%20voluptatem.%20Ut%20enim%20ad%20minima%20veniam,%20quis%20nostrum%20exercitationem%20ullam%20corporis%20suscipit%20laboriosam,%20nisi%20ut%20aliquid%20ex%20ea%20commodi%20consequatur?%20Quis%20autem%20vel%20eum%20iure%20reprehenderit%20qui%20in%20ea%20voluptate%20velit%20esse%20quam%20nihil%20molestiae%20consequatur,%20vel%20illum%20qui%20dolorem%20eum%20fugiat%20quo%20voluptas%20nulla%20pariatur?&quot;%3C/p%3E%0A', '2018-07-11 00:04:51', 'POST', '', 'wow', NULL, NULL),
(9, 'Prueba Imagen', '%3Ch3%3E%3Cimg%20alt=%22imagen%22%20src=%22%20https://images.pexels.com/photos/290617/pexels-photo-290617.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=650&amp;w=940%22%20style=%22float:left;%20height:214px;%20margin-right:10px;%20width:214px%22%20/%3Edavid%20sopenco%20y%20asociados%3C/h3%3E%0A%0A%3Cp%3EIt%20is%20a%20long%20established%20fact%20that%20a%20reader%20will%20be%20distracted%20by%20the%20readable%20content%20of%20a%20page%20when%20looking%20at%20its%20layout.%20The%20point%20of%20using%20Lorem%20Ipsum%20is%20that%20it%20has%20a%20more-or-less%20normal%20distribution%20of%20letters,%20as%20opposed%20to%20using%20&#39;Content%20here,%20content%20here&#39;,%20making%20it%20look%20like%20readable%20English.%20Many%20desktop%20publishing%20packages%20and%20web%20page%20editors%20now%20use%20Lorem%20Ipsum%20as%20their%20default%20model%20text,%20and%20a%20search%20for%20&#39;lorem%20ipsum&#39;%20will%20uncover%20many%20web%20sites%20still%20in%20their%20infancy.%20Various%20versions%20have%20evolved%20over%20the%20years,%20sometimes%20by%20accident,%20sometimes%20on%20purpose%20(injected%20humour%20and%20the%20like).%3C/p%3E%0A', '2018-07-25 00:32:22', 'POST', '', 'imagen', NULL, NULL),
(10, 'aerrt', '%3Cp%3E%5Bslider_regular%5D%5Barea_cuerpo_inicio%5D%3C/p%3E%0A%0A%3Cp%3Effffffffffffffffffffffffffffrtctrcfrdc6cdrdcrcdrcdrdcrcfvftvvtfvtfvfgbvgtfvgfgbygytyybg%3C/p%3E%0A%0A%3Cp%3Ehgttgvtfftvtfvfvt%3C/p%3E%0A%0A%3Cp%3E%5Barea_cuerpo_fin%5D%3C/p%3E%0A', '2018-08-11 20:24:09', 'POST', '', 'eeeeeee', NULL, NULL),
(11, 'sdfsdf', '%3Cp%3Epryeiefwef%3C/p%3E%0A', '2018-08-23 01:44:46', 'POST', '1', 'rrr', NULL, NULL),
(12, 'Guia', '%3Cp%3E%5Bmis_peliculas%5D%3C/p%3E%0A', '2018-09-18 11:35:12', 'PAGE', '', 'guia.php', NULL, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
