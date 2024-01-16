-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 27-12-2023 a las 21:41:35
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
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario_registro`
--

CREATE TABLE `formulario_registro` (
  `id` int(11) NOT NULL,
  `tipo_documento` varchar(50) DEFAULT NULL,
  `numero_documento` varchar(50) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `fecha_nacimiento` varchar(50) DEFAULT NULL,
  `fecha_expedicion` varchar(50) DEFAULT NULL,
  `genero` varchar(50) DEFAULT NULL,
  `orientacion` varchar(50) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `nacionalidad` varchar(50) DEFAULT NULL,
  `departamento` varchar(50) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `zona` varchar(50) DEFAULT NULL,
  `campesino` varchar(50) DEFAULT NULL,
  `estrato` varchar(10) DEFAULT NULL,
  `etnia` varchar(50) DEFAULT NULL,
  `conflicto` varchar(50) DEFAULT NULL,
  `nivel_educativo` varchar(50) DEFAULT NULL,
  `discapacidad` varchar(50) DEFAULT NULL,
  `tipos_discapacidad` varchar(100) DEFAULT NULL,
  `compromiso` varchar(100) DEFAULT NULL,
  `eje_tematico` varchar(100) DEFAULT NULL,
  `tipo_formacion` varchar(50) DEFAULT NULL,
  `requisitos` text DEFAULT NULL,
  `autoriza` varchar(50) DEFAULT NULL,
  `certificada` varchar(50) DEFAULT NULL,
  `parrafo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `formulario_registro`
--

INSERT INTO `formulario_registro` (`id`, `tipo_documento`, `numero_documento`, `nombre`, `apellidos`, `fecha_nacimiento`, `fecha_expedicion`, `genero`, `orientacion`, `telefono`, `correo`, `nacionalidad`, `departamento`, `ciudad`, `zona`, `campesino`, `estrato`, `etnia`, `conflicto`, `nivel_educativo`, `discapacidad`, `tipos_discapacidad`, `compromiso`, `eje_tematico`, `tipo_formacion`, `requisitos`, `autoriza`, `certificada`, `parrafo`) VALUES
(1, 'cc', '3241234', 'Elimer', 'Rodriguez Otalora', '2023-12-15', '2023-12-16', 'masculino', 'Heterosexual', '3042155459', 'kempsh661@gmail.com', 'Colombiano', 'Nariño', 'Ancuyá', 'Cabezera Municipal', 'si', '3', 'Ingigena', 'si', 'Técnica', 'si', 'Intelectual(Cognitiva)', 'si', 'Programación', 'Virtual', 'si', 'si', 'si', 'sdafsfa'),
(2, 'cc', '4123412', 'Elimer', 'Rodriguez Otalora', '2023-12-07', '2023-12-09', 'masculino', 'Heterosexual', '3042155459', 'kempsh661@gmail.com', 'Colombiano', 'Nariño', 'Ancuyá', 'Centro Poblado', 'si', '3', 'Ingigena', 'si', 'Técnica', 'si', 'Fisica', 'si', 'Blockchain', 'Virtual', 'si', 'si', 'si', 'ZXcZXC'),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'cc', '211476', 'Elimer', 'Rodriguez Otalora', '2023-12-01', '2023-12-01', 'masculino', 'Heterosexual', '3042155459', 'kempsh661@gmail.com', 'Colombiano', 'Nariño', 'Arboleda', 'Centro Poblado', 'si', '2', 'Negro(a)', 'si', 'Pregado', 'si', 'Fisica', 'si', 'Blockchain', 'Virtual', 'si', 'si', 'si', 'hHSHhsfHS'),
(5, 'cc', '462562456', 'Elimer', 'Rodriguez Otalora', '2023-12-01', '2023-12-01', 'masculino', 'Heterosexual', '3042155459', 'kempsh661@gmail.com', 'Colombiano', 'Nariño', 'Ancuyá', 'Centro Poblado', 'si', '4', 'Mulato(a)', 'si', 'Pregado', 'si', 'Fisica', 'si', 'Blockchain', 'Virtual', 'si', 'si', 'si', 'daag'),
(6, 'cc', '57564', 'Elimer', 'Rodriguez Otalora', '2023-12-07', '2023-12-22', 'masculino', 'Heterosexual', '3042155459', 'kempsh661@gmail.com', 'Colombiano', 'Nariño', 'Ancuyá', 'Centro Poblado', 'si', '2', 'Mulato(a)', 'si', 'Media', 'si', 'Fisica', 'si', 'Blockchain', 'Virtual', 'si', 'si', 'si', 'gagsdfgagf'),
(7, 'cc', '35234646', 'Elimer', 'Rodriguez Otalora', '2023-12-07', '2023-12-13', 'masculino', 'Homosexual', '3042155459', 'kempsh661@gmail.com', 'Colombiano', 'Nariño', 'Ancuyá', 'Centro Poblado', 'si', '3', 'Negro(a)', 'si', 'Técnica', 'si', 'Visual', 'si', 'Programación', 'Virtual', 'si', 'si', 'si', 'dfhshsfdhsfh'),
(8, 'cc', '4643563456', 'Elimer', 'Rodriguez Otalora', '2023-12-01', '2023-12-08', 'masculino', 'Heterosexual', '3042155459', 'kempsh661@gmail.com', 'Colombiano', 'Nariño', 'Ancuyá', 'Centro Poblado', 'si', '4', 'Ingigena', 'si', 'Técnica', 'si', 'Fisica', 'si', 'Programación', 'Virtual', 'si', 'si', 'si', 'fhsfhsfhf'),
(9, 'cc', '56745674', 'Elimer', 'Rodriguez Otalora', '2023-12-14', '2023-12-21', 'masculino', 'Heterosexual', '3042155459', 'kempsh661@gmail.com', 'Colombiano', 'Nariño', 'Aldana', 'Centro Poblado', 'si', '3', 'Palenquero(a) de San Bacilio', 'si', 'Técnica', 'si', 'Intelectual(Cognitiva)', 'si', 'Blockchain', 'Virtual', 'si', 'si', 'si', 'ahfdhsfhsh'),
(10, 'cc', '34254325435', 'Elimer', 'Rodriguez Otalora', '2023-12-07', '2023-12-15', 'masculino', 'Heterosexual', '3042155459', 'kempsh661@gmail.com', 'Colombiano', 'Nariño', 'Arboleda', 'Centro Poblado', 'si', '3', 'Ingigena', 'si', 'Tecnológica ', 'si', 'Fisica', 'si', 'Programación', 'Virtual', 'si', 'si', 'si', 'dgadgaga'),
(11, 'cc', '35453451', 'Elimer', 'Rodriguez Otalora', '2023-12-07', '2023-12-09', 'masculino', 'Heterosexual', '3042155459', 'kempsh661@gmail.com', 'Colombiano', 'Nariño', 'Ancuyá', 'Centro Poblado', 'si', '3', 'Ingigena', 'si', 'Técnica', 'si', 'Fisica', 'si', 'Blockchain', 'Virtual', 'si', 'si', 'si', 'ahdafasf'),
(12, 'cc', '1042002629', 'Elimer', 'Rodriguez Otalora', '2023-12-06', '2023-12-22', 'masculino', 'Heterosexual', '3042155459', 'kempsh661@gmail.com', 'Colombiano', 'Cauca', 'Cajibío', 'Centro Poblado', 'si', '3', 'Negro(a)', 'si', 'Tecnológica ', 'si', 'Sordoceguera', 'si', 'Blockchain', 'Virtual', 'si', 'si', 'si', 'eagdsag'),
(13, 'cc', '2134324', 'Elimer', 'Rodriguez Otalora', '2023-12-14', '2023-12-15', 'masculino', 'Homosexual', '3042155459', 'kempsh661@gmail.com', 'Colombiano', 'Nariño', 'Ancuyá', 'Centro Poblado', 'si', '3', 'Negro(a)', 'si', 'Pregado', 'si', 'Fisica', 'si', 'Programación', 'Virtual', 'si', 'si', 'si', 'sdfadf'),
(14, 'cc', '346346347', 'Elimer', 'Rodriguez Otalora', '2023-12-01', '2023-12-02', 'masculino', 'Heterosexual', '3042155459', 'kempsh661@gmail.com', 'Colombiano', 'Nariño', 'Arboleda', 'Centro Poblado', 'si', '3', 'Ingigena', 'si', 'Técnica', 'si', 'Visual', 'si', 'Blockchain', 'Virtual', 'si', 'si', 'si', 'sdfsh'),
(15, 'cc', '4624645', 'Elimer', 'Rodriguez Otalora', '2023-12-14', '2023-12-15', 'masculino', 'Heterosexual', '3042155459', 'kempsh661@gmail.com', 'Colombiano', 'Nariño', 'Ancuyá', 'Centro Poblado', 'si', '3', 'Ingigena', 'si', 'Técnica', 'si', 'Fisica', 'si', 'Programación', 'Virtual', 'si', 'si', 'si', 'rtyr'),
(16, 'ti', '346345757', 'Elimer', 'Rodriguez Otalora', '2023-12-15', '2023-12-16', 'masculino', 'Heterosexual', '3042155459', 'kempsh661@gmail.com', 'Colombiano', 'Nariño', 'Ancuyá', 'Centro Poblado', 'si', '2', 'Palenquero(a) de San Bacilio', 'si', 'Técnica', 'si', 'Fisica', 'si', 'Blockchain', 'Virtual', 'si', 'si', 'si', 'dgaret'),
(17, 'cc', '357573', 'Elimer', 'Rodriguez Otalora', '2023-12-08', '2023-12-08', 'masculino', 'Heterosexual', '3042155459', 'kempsh661@gmail.com', 'Colombiano', 'Nariño', 'Barbacoas', 'Centro Poblado', 'si', '3', 'Ingigena', 'si', 'Técnica', 'si', 'Fisica', 'si', 'Blockchain', 'Virtual', 'si', 'si', 'si', 'reyere'),
(18, 'cc', '3511', 'Elimer', 'Rodriguez Otalora', '2023-12-22', '2023-12-23', 'masculino', 'Homosexual', '3042155459', 'kempsh661@gmail.com', 'Colombiano', 'Nariño', 'Ancuyá', 'Centro Poblado', 'si', '2', 'Ingigena', 'si', 'Técnica', 'si', 'Intelectual(Cognitiva)', 'si', 'Programación', 'Presencial/Hibrido', 'si', 'si', 'si', 'qegsdgasdga'),
(19, 'ti', '12345', 'Elimer', 'Rodriguez Otalora', '2023-12-29', '2023-12-21', 'masculino', 'Homosexual', '3042155459', 'kempsh661@gmail.com', 'Colombiano', 'Nariño', 'Arboleda', 'Centro Poblado', 'si', '4', 'Ingigena', 'si', 'Tecnológica ', 'si', 'Fisica', 'si', 'Programación', 'Virtual', 'si', 'si', 'si', 'ssgas'),
(20, 'cc', '462624', 'Elimer', 'Rodriguez Otalora', '2023-12-01', '2023-12-22', 'masculino', 'Heterosexual', '3042155459', 'kempsh661@gmail.com', 'Colombiano', 'Nariño', 'Ancuyá', 'Centro Poblado', 'si', '3', 'Ingigena', 'si', 'Media', 'si', 'Fisica', 'si', 'Blockchain', 'Virtual', 'si', 'si', 'si', 'erweryw'),
(21, 'cc', '1231425456789', 'Elimer', 'Rodriguez Otalora', '2023-12-15', '2023-12-07', 'masculino', 'Heterosexual', '3042155459', 'kempsh661@gmail.com', 'Colombiano', 'Nariño', 'Ancuyá', 'Centro Poblado', 'si', '1', 'Gitano(a) o Rrom', 'si', 'Media', 'si', 'Auditiva', 'si', 'Programación', 'Virtual', 'si', 'si', 'si', 'asdfasf'),
(22, 'cc', '1362477', 'Elimer', 'Rodriguez Otalora', '2023-12-08', '2023-12-15', 'masculino', 'Heterosexual', '3042155459', 'kempsh661@gmail.com', 'Colombiano', 'Nariño', 'Arboleda', 'Centro Poblado', 'si', '2', 'Ingigena', 'si', 'Técnica', 'si', 'Fisica', 'si', 'Programación', 'Virtual', 'si', 'si', 'si', 'r3543u'),
(23, 'cc', '1042002629', 'Elimer ', 'Rodriguez', '2023-12-14', '2023-12-21', 'masculino', 'Heterosexual', '3025235', 'kempsh661@gmail.com', 'Colombiano', 'Nariño', 'Cumbitara', 'Centro Poblado', 'si', '2', 'Ingigena', 'si', 'Media', 'no', 'Otro', 'si', 'Programación', 'Presencial/Hibrido', 'si', 'si', 'si', 'sdfasdf'),
(24, 'cc', '123135', 'Elimer ', 'Rodriguez', '2023-12-14', '2023-12-15', 'masculino', 'Homosexual', '3452', 'kempsh661@gmail.com', 'Colombiano', 'Nariño', 'Ancuyá', 'Centro Poblado', 'si', '4', 'Negro(a)', 'si', 'Maestría', 'no', NULL, 'si', 'Blockchain', 'Virtual', 'si', 'si', NULL, 'saffs'),
(25, 'cc', '3241251', 'Elimer', 'rodriguez', '2023-12-14', '2023-12-13', 'masculino', 'Heterosexual', '3413531', 'kempsh661@gmail.com', 'Colombiano', 'Nariño', 'Aldana', 'Cabezera Municipal', 'si', '1', 'Gitano(a) o Rrom', 'si', 'Basica', 'no', NULL, 'si', 'Análisis De Datos', 'Virtual', 'si', 'si', NULL, 'asdfadsf'),
(26, 'cc', '3241251', 'Elimer', 'rodriguez', '2023-12-14', '2023-12-13', 'masculino', 'Heterosexual', '3413531', 'kempsh661@gmail.com', 'Colombiano', 'Nariño', 'Aldana', 'Cabezera Municipal', 'si', '1', 'Gitano(a) o Rrom', 'si', 'Basica', 'no', NULL, 'si', 'Análisis De Datos', 'Virtual', 'si', 'si', NULL, 'asdfadsf'),
(27, 'cc', '1042002629', 'Elimer ', 'Rodriguez', '1991-06-11', '2009-08-06', 'masculino', 'Heterosexual', '304215459', 'kempsh661@gmail.com', 'Colombiano', 'Nariño', 'Aldana', 'Centro Poblado', 'no', '2', 'Ingigena', 'si', 'Media', 'no', NULL, 'si', 'Inteligencia Artificial', 'Virtual', 'si', 'si', NULL, 'si '),
(28, 'cc', '1042002629', 'Elimer ', 'Rodriguez', '1991-06-11', '2023-12-07', 'masculino', 'Heterosexual', '3042155459', 'kempsh661@gmail.com', 'Colombiano', 'Nariño', 'Barbacoas', 'Cabezera Municipal', 'si', '5', 'Negro(a)', 'si', 'Especialización', 'no', NULL, 'si', 'Blockchain', 'Virtual', 'si', 'si', NULL, 'aregfdg'),
(29, 'cc', '1042002629', 'Elimer ', 'Rodriguez', '2023-12-20', '2023-12-06', 'masculino', 'Bisexual', '23', 'kempsh661@gmail.com', 'Colombiano', 'Nariño', 'Arboleda', 'Centro Poblado', 'si', '3', 'Negro(a)', 'si', 'Pregado', 'no', NULL, 'si', 'Blockchain', 'Virtual', 'si', 'si', NULL, 'dsadsfsd');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formulario_registro`
--
ALTER TABLE `formulario_registro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `formulario_registro`
--
ALTER TABLE `formulario_registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
