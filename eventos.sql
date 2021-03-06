-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-01-2019 a las 14:42:46
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `eventos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `descripcion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `descripcion`) VALUES
(230, 'Civicos'),
(231, 'Culturales'),
(232, 'Deportivos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contador_total`
--

CREATE TABLE `contador_total` (
  `id_cont_total` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `conteo_dia` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cont_civ`
--

CREATE TABLE `cont_civ` (
  `id_cont_civ` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `cuenta` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cont_civ`
--

INSERT INTO `cont_civ` (`id_cont_civ`, `fecha`, `cuenta`) VALUES
(10, '2019-01-06', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cont_cult`
--

CREATE TABLE `cont_cult` (
  `id_cont_cult` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `cuenta` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cont_cult`
--

INSERT INTO `cont_cult` (`id_cont_cult`, `fecha`, `cuenta`) VALUES
(1, '2019-01-06', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cont_dep`
--

CREATE TABLE `cont_dep` (
  `id_cont_dep` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `cuenta` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cont_dep`
--

INSERT INTO `cont_dep` (`id_cont_dep`, `fecha`, `cuenta`) VALUES
(1, '2019-01-06', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id_evento` int(11) NOT NULL,
  `Nombre` text NOT NULL,
  `descripcion` text NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `lugar` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `Fecha_fin` date NOT NULL,
  `Horario` time NOT NULL,
  `img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id_evento`, `Nombre`, `descripcion`, `id_categoria`, `lugar`, `fecha`, `Fecha_fin`, `Horario`, `img`) VALUES
(2, 'Regata de la revolución', 'Carrera de veleros', 232, 'Club de Vela la Peña', '2018-11-17', '2018-11-17', '10:00:00', ''),
(3, 'Regata ProValle', 'Carrera de veleros', 232, 'Club de Vela Santa M', '2018-12-01', '2018-12-01', '10:00:00', ''),
(6, 'XV Festival de las almas', 'Festival', 231, 'Valle de Bravo', '2018-11-09', '2018-12-06', '10:30:00', ''),
(7, 'Honores a la bandera', 'Conmemoración de la revolución', 230, 'Valle de Bravo', '2018-12-05', '2018-12-05', '12:00:00', ''),
(8, 'Copa de la Champage', 'Campeonato de velero', 232, 'Club Náutico Avándar', '2018-11-01', '2018-11-02', '10:30:00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_persona` int(30) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido_patern` varchar(20) NOT NULL,
  `Apellido_matern` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `Nombre`, `Apellido_patern`, `Apellido_matern`, `email`, `pass`) VALUES
(1, 'Jesus', 'Ramirez', 'Ocampo', 'mutsotool@gmail.com', '1'),
(3, 'Valeri', 'Flores', 'Carretero', 'valeri@gmail.com', '123'),
(4, 'Valeria', 'Sanchez', 'Rodriguez', 'isc_valeria@tesvb.edu.mx', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba`
--

CREATE TABLE `prueba` (
  `id_prueba` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prueba`
--

INSERT INTO `prueba` (`id_prueba`, `Nombre`) VALUES
(1, 'asdas'),
(3, 'nombreactua'),
(4, 'dasdada'),
(5, 'nombres'),
(6, 'registro'),
(8, 'registro1'),
(9, 'empleado4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `descripción` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `descripción`) VALUES
(200, 'Administrador'),
(201, 'Empleado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `contador_total`
--
ALTER TABLE `contador_total`
  ADD PRIMARY KEY (`id_cont_total`);

--
-- Indices de la tabla `cont_civ`
--
ALTER TABLE `cont_civ`
  ADD PRIMARY KEY (`id_cont_civ`);

--
-- Indices de la tabla `cont_cult`
--
ALTER TABLE `cont_cult`
  ADD PRIMARY KEY (`id_cont_cult`);

--
-- Indices de la tabla `cont_dep`
--
ALTER TABLE `cont_dep`
  ADD PRIMARY KEY (`id_cont_dep`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id_evento`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `prueba`
--
ALTER TABLE `prueba`
  ADD PRIMARY KEY (`id_prueba`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contador_total`
--
ALTER TABLE `contador_total`
  MODIFY `id_cont_total` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cont_civ`
--
ALTER TABLE `cont_civ`
  MODIFY `id_cont_civ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `cont_cult`
--
ALTER TABLE `cont_cult`
  MODIFY `id_cont_cult` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cont_dep`
--
ALTER TABLE `cont_dep`
  MODIFY `id_cont_dep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id_persona` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `prueba`
--
ALTER TABLE `prueba`
  MODIFY `id_prueba` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
