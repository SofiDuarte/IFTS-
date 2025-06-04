-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 03-06-2025 a las 00:07:25
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
-- Base de datos: `base_datos_ifts`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'dfdf'),
(2, 'Prueba'),
(3, 'Ciencia'),
(4, 'Tecnología'),
(5, 'Deportes'),
(6, 'Película'),
(7, 'prueba 2133'),
(8, 'dfsdfsdf'),
(9, 'sdsaasd'),
(10, 'dgf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `carrera` text NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `contenido` text NOT NULL,
  `resumen` text NOT NULL,
  `fecha_publicacion` datetime NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `Documento` varchar(255) DEFAULT NULL,
  `profesor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `carrera`, `titulo`, `contenido`, `resumen`, `fecha_publicacion`, `imagen`, `Documento`, `profesor_id`) VALUES
(17, 'Sistemas', 'Título ejemplo 17', 'Contenido ejemplo 17', 'Resumen 17', '2025-05-30 00:51:24', NULL, NULL, NULL),
(45, 'TIC', 'Título ejemplo 45', 'Contenido ejemplo 45', 'Resumen 45', '2025-05-30 00:51:24', NULL, NULL, NULL),
(47, 'Desarrolo de Software', 'Es un prueba', '\n                <p style=\"\"><i style=\"background-color: rgb(154, 226, 18);\"><font face=\"Georgia\">Un tigre que cuando cachorro habia sido capturado por humanos fue liberado luego de varios años de vida domestica. La vida entre los hombres no habia menguado sus fuerzas ni sus instintos; en cuanto lo liberaron, corrio a la selva. Ya en la espesura, sus hermanos teniéndolo otra vez entre ellos, le preguntaron:</font></i></p><p style=\"font-family: Roboto, sans-serif;\"><b style=\"\"><i><u>-¿Que has aprendido?</u></i></b></p><p style=\"font-family: Roboto, sans-serif;\"><b><font color=\"#e52a2a\">El tigre medito sin prisa. Quería transmitirles algún concepto sabio, trascendente. Recordó un comentario humano: \"Los tigres no son inmortales. Creen que son inmortales porque ignoran la muerte, ignoran que morirán.\"</font></b></p><p style=\"text-align: center; font-family: Roboto, sans-serif;\"><font color=\"#1a3cc1\" style=\"\">Ah, pensó el tigre para sus adentros, ese es un pensamiento que los sorprenderá: no somos inmortales, la vida no es eterna. -Aprendí esto- dijo por fin-. No somos inmortales solo ignoramos que alguna vez vamos a....</font></p><p style=\"text-align: center; font-style: italic;\"><font color=\"#1a3cc1\" style=\"\" face=\"Arial\">Los otros tigres no lo dejaron terminar de hablar, se abalanzaron sobre el, le mordieron el cuello y lo vieron desangrarse hasta morir. Es el problema de los enfermos de muerte -dijo uno de los felinos-. Se tornan resentidos y quieren contagiar a todos.\'\'</font></p><p style=\"font-style: italic;\"><font face=\"Courier New\" color=\"#488e29\"><b>Marcelo Birmajer,&nbsp;<em style=\"\">El tigre enferm</em></b></font></p>\n            ', 'Esto es para probar', '2025-05-30 06:33:07', NULL, NULL, NULL),
(48, 'Desarrolo de Software', 'Es OTRA prueba', '\r\n                <p style=\"font-family: Roboto, sans-serif; font-style: italic;\"><font color=\"#e91616\">Un tigre que cuando cachorro habia sido capturado por humanos fue liberado luego de varios años de vida domestica. La vida entre los hombres no habia menguado sus fuerzas ni sus instintos; en cuanto lo liberaron, corrio a la selva. Ya en la espesura, sus hermanos teniéndolo otra vez entre ellos, le preguntaron:</font></p><p style=\"\"><span style=\"background-color: rgb(37, 208, 80);\"><b style=\"\"><font face=\"Georgia\">-¿Que has aprendido?</font></b></span></p><p style=\"text-align: center; font-family: Roboto, sans-serif;\"><font color=\"#2416e9\" style=\"\"><u style=\"\">El tigre medito sin prisa. Quería transmitirles algún concepto sabio, trascendente. Recordó un comentario humano: \"Los tigres no son inmortales. Creen que son inmortales porque ignoran la muerte, ignoran que morirán.\"</u></font></p><p style=\"text-align: left; font-family: Roboto, sans-serif;\"><font color=\"#22b954\" style=\"\"><b>Ah, pensó el tigre para sus adentros, ese es un pensamiento que los sorprenderá: no somos inmortales, la vida no es eterna. -Aprendí esto- dijo por fin-. No somos inmortales solo ignoramos que alguna vez vamos a....</b></font></p><p style=\"text-align: right;\"><font color=\"#a21589\" style=\"\" face=\"Arial\"><u style=\"\">Los otros tigres no lo dejaron terminar de hablar, se abalanzaron sobre el, le mordieron el cuello y lo vieron desangrarse hasta morir. Es el problema de los enfermos de muerte -dijo uno de los felinos-. Se tornan resentidos y quieren contagiar a todos.\'\'</u></font></p><p style=\"text-align: left;\"><u style=\"\"><b style=\"\"><font face=\"Courier New\">Marcelo Birmajer,&nbsp;El tigre enfermo</font></b></u></p>\r\n            ', 'Seguimos probando', '2025-05-30 06:43:41', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias_categorias`
--

CREATE TABLE `noticias_categorias` (
  `noticia_id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `noticias_categorias`
--

INSERT INTO `noticias_categorias` (`noticia_id`, `categoria_id`) VALUES
(48, 2),
(17, 4),
(45, 4),
(47, 7);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profesor_id` (`profesor_id`);

--
-- Indices de la tabla `noticias_categorias`
--
ALTER TABLE `noticias_categorias`
  ADD PRIMARY KEY (`noticia_id`) USING BTREE,
  ADD KEY `categoria_id` (`categoria_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `noticias_categorias`
--
ALTER TABLE `noticias_categorias`
  ADD CONSTRAINT `noticias_categorias_ibfk_1` FOREIGN KEY (`noticia_id`) REFERENCES `noticias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `noticias_categorias_ibfk_2` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
