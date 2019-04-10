-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-04-2019 a las 22:54:32
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ova`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alternativa`
--

CREATE TABLE `alternativa` (
  `alternativa_id` int(11) NOT NULL,
  `alternativa_cont` text NOT NULL,
  `alternativa_respuesta` tinyint(4) NOT NULL,
  `pregunta_pregunta_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE `calificacion` (
  `calificaciones_id` int(11) NOT NULL,
  `calificacion_nota` int(11) DEFAULT NULL,
  `estudiante_estudiante_id` int(11) NOT NULL,
  `lectura_lectura_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `curso_id` int(11) NOT NULL,
  `curso_nombre` varchar(45) NOT NULL,
  `tipo_curso_tipo_curso_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`curso_id`, `curso_nombre`, `tipo_curso_tipo_curso_id`) VALUES
(1, 'Francés fácil', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_has_estudiante`
--

CREATE TABLE `curso_has_estudiante` (
  `curso_curso_id` int(11) NOT NULL,
  `estudiante_estudiante_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `estudiante_id` int(11) NOT NULL,
  `estudiante_nombre` varchar(45) NOT NULL,
  `estudiante_correo` varchar(100) NOT NULL,
  `estudiante_pass` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idioma`
--

CREATE TABLE `idioma` (
  `idioma_key` varchar(3) NOT NULL,
  `idioma_nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `idioma`
--

INSERT INTO `idioma` (`idioma_key`, `idioma_nombre`) VALUES
('en', 'ingles'),
('es', 'espanol'),
('fr', 'frances'),
('it', 'italiano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lectura`
--

CREATE TABLE `lectura` (
  `lectura_id` int(11) NOT NULL,
  `lectura_titulo` varchar(100) NOT NULL,
  `lectura_contenido` text NOT NULL,
  `lectura_pronunciacion` text,
  `curso_curso_id` int(11) NOT NULL,
  `idioma_idioma_key` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `lectura`
--

INSERT INTO `lectura` (`lectura_id`, `lectura_titulo`, `lectura_contenido`, `lectura_pronunciacion`, `curso_curso_id`, `idioma_idioma_key`) VALUES
(1, 'A París', 'Pardon, monsieur. Ou est le métro St. Michel ?%Le métro St Michel ? Attendez une minute . . . %Nous Sommes au Boulevard St. Michel. La fontaine est la-bas.%Oui, d’accord. Mais ou le métro, s’il vous plaît ?%Mais bien sûr ! Voila la Seine, et voici le pont%C’est joli ; mais s’il vous plait . . . %Ce n’est pas a gauche, alors c’est a droite.%Voila . Le metro est a droite ! %Mais vous etes sur?%Non. Je suis touriste aussi !', NULL, 1, 'fr');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE `pregunta` (
  `pregunta_id` int(11) NOT NULL,
  `pregunta_enunciado` text NOT NULL,
  `lectura_lectura_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesion_log`
--

CREATE TABLE `sesion_log` (
  `sesion_log_id` int(11) NOT NULL,
  `sesion_log_inicio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sesion_log_fin` timestamp NULL DEFAULT NULL,
  `estudiante_estudiante_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_curso`
--

CREATE TABLE `tipo_curso` (
  `tipo_curso_id` int(11) NOT NULL,
  `tipo_curso_nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_curso`
--

INSERT INTO `tipo_curso` (`tipo_curso_id`, `tipo_curso_nombre`) VALUES
(1, 'fr-en');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `traduccion`
--

CREATE TABLE `traduccion` (
  `traduccion_id` int(11) NOT NULL,
  `traduccion_titulo` varchar(100) NOT NULL,
  `traduccion_cont` text NOT NULL,
  `traduccion_tipo` char(1) NOT NULL COMMENT 'Me indica si es una traduccion literal o una traduccion con sentido\n',
  `lectura_lectura_id` int(11) NOT NULL,
  `idioma_idioma_key` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `traduccion`
--

INSERT INTO `traduccion` (`traduccion_id`, `traduccion_titulo`, `traduccion_cont`, `traduccion_tipo`, `lectura_lectura_id`, `idioma_idioma_key`) VALUES
(1, 'A Paris', 'Disculpe señor. ¿Dónde está el metro de St. Michel?% El metro de St Michel? Espera un minuto . . Estamos en el Boulevard St. Michel. La fuente está ahí.% Sí, está bien. ¿Pero dónde está el metro, por favor? ¡Pero claro! Aquí está el Sena, y aquí está el puente. Es bonito; pero por favor . . % No queda, así que está bien.% Voila. El metro está a la derecha! % Pero estas en?% No. ¡Soy un turista también!', 'I', 1, 'es'),
(2, 'A Paris', 'Perdón el Sr. donde es el metro San Miguel el metro San Miguel esperan unos minutos nosotros están al Bulevar San Miguel la fuente está la-basOui de acuerdo pero dónde el metro por favor pero por supuesto he aquí el Sena y ahí tienes el pontC\' es bonitos pero por favor no es a la izquierda entonces es a la derecha he aquí el metro está a la derecha sino son sobre no yo son turista también', 'L', 1, 'es');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alternativa`
--
ALTER TABLE `alternativa`
  ADD PRIMARY KEY (`alternativa_id`),
  ADD KEY `fk_alternativa_pregunta1_idx` (`pregunta_pregunta_id`);

--
-- Indices de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD PRIMARY KEY (`calificaciones_id`),
  ADD KEY `fk_calificaciones_estudiante1_idx` (`estudiante_estudiante_id`),
  ADD KEY `fk_calificaciones_lectura1_idx` (`lectura_lectura_id`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`curso_id`),
  ADD KEY `fk_curso_tipo_curso1_idx` (`tipo_curso_tipo_curso_id`);

--
-- Indices de la tabla `curso_has_estudiante`
--
ALTER TABLE `curso_has_estudiante`
  ADD PRIMARY KEY (`curso_curso_id`,`estudiante_estudiante_id`),
  ADD KEY `fk_curso_has_estudiante_estudiante1_idx` (`estudiante_estudiante_id`),
  ADD KEY `fk_curso_has_estudiante_curso1_idx` (`curso_curso_id`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`estudiante_id`);

--
-- Indices de la tabla `idioma`
--
ALTER TABLE `idioma`
  ADD PRIMARY KEY (`idioma_key`);

--
-- Indices de la tabla `lectura`
--
ALTER TABLE `lectura`
  ADD PRIMARY KEY (`lectura_id`),
  ADD KEY `fk_lectura_curso1_idx` (`curso_curso_id`),
  ADD KEY `fk_lectura_idioma1_idx` (`idioma_idioma_key`);

--
-- Indices de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`pregunta_id`),
  ADD KEY `fk_pregunta_lectura1_idx` (`lectura_lectura_id`);

--
-- Indices de la tabla `sesion_log`
--
ALTER TABLE `sesion_log`
  ADD PRIMARY KEY (`sesion_log_id`),
  ADD KEY `fk_sesion_log_estudiante_idx` (`estudiante_estudiante_id`);

--
-- Indices de la tabla `tipo_curso`
--
ALTER TABLE `tipo_curso`
  ADD PRIMARY KEY (`tipo_curso_id`);

--
-- Indices de la tabla `traduccion`
--
ALTER TABLE `traduccion`
  ADD PRIMARY KEY (`traduccion_id`),
  ADD KEY `fk_traduccion_lectura1_idx` (`lectura_lectura_id`),
  ADD KEY `fk_traduccion_idioma1_idx` (`idioma_idioma_key`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alternativa`
--
ALTER TABLE `alternativa`
  MODIFY `alternativa_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  MODIFY `calificaciones_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `curso_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `estudiante_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lectura`
--
ALTER TABLE `lectura`
  MODIFY `lectura_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  MODIFY `pregunta_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sesion_log`
--
ALTER TABLE `sesion_log`
  MODIFY `sesion_log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `traduccion`
--
ALTER TABLE `traduccion`
  MODIFY `traduccion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alternativa`
--
ALTER TABLE `alternativa`
  ADD CONSTRAINT `fk_alternativa_pregunta1` FOREIGN KEY (`pregunta_pregunta_id`) REFERENCES `pregunta` (`pregunta_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD CONSTRAINT `fk_calificaciones_estudiante1` FOREIGN KEY (`estudiante_estudiante_id`) REFERENCES `estudiante` (`estudiante_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_calificaciones_lectura1` FOREIGN KEY (`lectura_lectura_id`) REFERENCES `lectura` (`lectura_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `fk_curso_tipo_curso1` FOREIGN KEY (`tipo_curso_tipo_curso_id`) REFERENCES `tipo_curso` (`tipo_curso_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `curso_has_estudiante`
--
ALTER TABLE `curso_has_estudiante`
  ADD CONSTRAINT `fk_curso_has_estudiante_curso1` FOREIGN KEY (`curso_curso_id`) REFERENCES `curso` (`curso_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_curso_has_estudiante_estudiante1` FOREIGN KEY (`estudiante_estudiante_id`) REFERENCES `estudiante` (`estudiante_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `lectura`
--
ALTER TABLE `lectura`
  ADD CONSTRAINT `fk_lectura_curso1` FOREIGN KEY (`curso_curso_id`) REFERENCES `curso` (`curso_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_lectura_idioma1` FOREIGN KEY (`idioma_idioma_key`) REFERENCES `idioma` (`idioma_key`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD CONSTRAINT `fk_pregunta_lectura1` FOREIGN KEY (`lectura_lectura_id`) REFERENCES `lectura` (`lectura_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sesion_log`
--
ALTER TABLE `sesion_log`
  ADD CONSTRAINT `fk_sesion_log_estudiante` FOREIGN KEY (`estudiante_estudiante_id`) REFERENCES `estudiante` (`estudiante_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `traduccion`
--
ALTER TABLE `traduccion`
  ADD CONSTRAINT `fk_traduccion_idioma1` FOREIGN KEY (`idioma_idioma_key`) REFERENCES `idioma` (`idioma_key`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_traduccion_lectura1` FOREIGN KEY (`lectura_lectura_id`) REFERENCES `lectura` (`lectura_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
