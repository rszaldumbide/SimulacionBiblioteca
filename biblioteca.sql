-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2023 a las 19:37:20
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogoel`
--

CREATE TABLE `catalogoel` (
  `idI` int(11) NOT NULL,
  `idEstudiante` int(11) NOT NULL,
  `idLibro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `catalogoel`
--

INSERT INTO `catalogoel` (`idI`, `idEstudiante`, `idLibro`) VALUES
(1, 1, 1),
(3, 1, 2),
(7, 2, 3),
(8, 2, 1),
(10, 1, 3),
(11, 3, 7),
(12, 5, 7),
(13, 6, 3),
(14, 3, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `idEstudiante` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `edad` int(11) NOT NULL,
  `cedula` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`idEstudiante`, `nombre`, `genero`, `edad`, `cedula`) VALUES
(1, 'Orlidan Montesdeoca', 'Masculino', 23, '1002003002'),
(2, 'Cristian Recalde', 'Masculino', 21, '1005002003'),
(3, 'Keny Mafla', 'Masculino', 21, '5001442632'),
(4, 'Marco Muñoz', 'Masculino', 22, '5001442632'),
(5, 'Abi Sanchez', 'Femenino', 20, '7005004002'),
(6, 'Josue', 'Masculino', 20, '1002003009');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `idLibro` int(11) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `editor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`idLibro`, `codigo`, `titulo`, `editor`) VALUES
(1, 'GHA412', 'Juan Alimaña', 'Hector Lavoe'),
(2, 'BG45AS1', 'La culpa es de la vaca', 'Juan Benalcazar'),
(3, 'GHD121A', 'La odisea', 'Homero J. Simpson'),
(4, 'CFD15D1', 'Cien años de Soledad', 'Gabriel García Márquez'),
(5, 'D23DD43', 'El señor de los anillos ', 'J. R. R. Tolkien'),
(6, 'FER234RF', 'Un mundo feliz', 'Aldous Huxley'),
(7, 'GB234HY', 'Crimen y castigo', 'Fiódor Dostoyevski');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contraseña` varchar(20) NOT NULL,
  `rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `usuario`, `contraseña`, `rol`) VALUES
(1, 'admin', 'admin', 'Gerente'),
(2, 'secre', 'secre', 'Secretaria');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catalogoel`
--
ALTER TABLE `catalogoel`
  ADD PRIMARY KEY (`idI`),
  ADD KEY `idEstudiante` (`idEstudiante`),
  ADD KEY `idLibro` (`idLibro`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`idEstudiante`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`idLibro`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catalogoel`
--
ALTER TABLE `catalogoel`
  MODIFY `idI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `idEstudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `idLibro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
