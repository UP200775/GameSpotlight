-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-07-2023 a las 00:51:46
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
-- Base de datos: `gamespotlight`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `email`, `password`) VALUES
(102, 'ferki1', 'up200994@alumnos.upa.edu.mx', '$2y$10$6.8A.siTmnbKiVXN18KqHef4k3UJbXwF0IrLw5o6037fpxTIXS.Qi'),
(103, 'ferki', 'portaalu1@hotmail.com', '$2y$10$3ohFbHekvoxrwLYewwkb0eiRQTbox/UHPL513BfUbvSK7Dl3qmlFu'),
(105, 'ferki1ee', 'portaalu11@hotmail.com', '$2y$10$akBQ8Xrm.DyJAuSQ.n0oUeKqzYJfkH/Uc9j/Hk0R.h0yOI2QQIVn.'),
(107, 'Fernando Yael De La Torre Rangelasdsadsd', 'up200994222@alumnos.upa.edu.mx', '$2y$10$dIe6gWpeAvsYhaMGeVBjmOobml0n1iUFRaeZGzU3XhuIaT.kNFX2G'),
(108, 'ferki11', 'up2009945@alumnos.upa.edu.mx', '$2y$10$htcj6BSxT8LLZ8i2emuGS.lXqMfe1H73SXjrGR96PS0cMcqQFTtRO'),
(109, 'root', 'MYSQL_ROOT@gmail.com', '$2y$10$3P6n08dYoI1TXEVzhNFdKOkTfheo.VGhH3Xcl491betz3N0qZGjMa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
