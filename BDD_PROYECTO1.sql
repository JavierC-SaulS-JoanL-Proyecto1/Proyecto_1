--
-- Base de datos: `proyecto1bd`
--
CREATE DATABASE IF NOT EXISTS `proyecto1bd` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `proyecto1bd`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recursos`
--

CREATE TABLE `recursos` (
  `id_recurso` int(2) NOT NULL,
  `recurso` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `tipo` int(1) NOT NULL,
  `disponible` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id_reserva` int(11) NOT NULL,
  `fecha_entrega` datetime NOT NULL,
  `fecha_devolucion` datetime NOT NULL,
  `id_recurso_fk` int(11) NOT NULL,
  `usuario_fk` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE `tipos` (
  `id_tipo` int(11) NOT NULL,
  `tipo` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Indices de la tabla `recursos`
--
ALTER TABLE `recursos`
  ADD PRIMARY KEY (`id_recurso`),
  ADD KEY `tipo_fk` (`tipo`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `recurso_fk` (`id_recurso_fk`),
  ADD KEY `reserva_fk` (`usuario_fk`);

--
-- Indices de la tabla `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `recursos`
--
ALTER TABLE `recursos`
  ADD CONSTRAINT `tipo_fk` FOREIGN KEY (`tipo`) REFERENCES `tipos` (`id_tipo`);

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `recurso_fk` FOREIGN KEY (`id_recurso_fk`) REFERENCES `recursos` (`id_recurso`),
  ADD CONSTRAINT `reserva_fk` FOREIGN KEY (`usuario_fk`) REFERENCES `usuarios` (`usuario`);


/*----------------------------------------Tabla tipos-------------------------------------------------------------*/
INSERT INTO tipos(id_tipo, tipo) VALUES ('1','recursos_inmuebles');
INSERT INTO tipos(id_tipo, tipo) VALUES ('2','recursos_electronicos');


/*-----------------------------------------Tabla usuarios----------------------------------------------------------*/
INSERT INTO usuarios(usuario,nombre,apellido,password) VALUES	('ssole','saul','sole','123asd');
INSERT INTO usuarios(usuario,nombre,apellido,password) VALUES	('ahitler','adolfo','hitler','siegheil');
INSERT INTO usuarios(usuario,nombre,apellido,password) VALUES	('ppero','pedro','pero','123qwe');


/*-------------------------------------------Tabla recursos---------------------------------------------------------*/
INSERT INTO recursos(id_recurso,recurso,tipo,disponible) VALUES	('1','portatil-1','2',true);
INSERT INTO recursos(id_recurso,recurso,tipo,disponible) VALUES	('2','portatil-2','2',true);
INSERT INTO recursos(id_recurso,recurso,tipo,disponible) VALUES	('3','portatil-3','2',true);
INSERT INTO recursos(id_recurso,recurso,tipo,disponible) VALUES	('4','movil-1','2',true);
INSERT INTO recursos(id_recurso,recurso,tipo,disponible) VALUES	('5','movil-2','2',true);
INSERT INTO recursos(id_recurso,recurso,tipo,disponible) VALUES	('6','proyector-1','2',true);
INSERT INTO recursos(id_recurso,recurso,tipo,disponible) VALUES	('7','proyector-2','2',true);
INSERT INTO recursos(id_recurso,recurso,tipo,disponible) VALUES	('8','sala-general-1','1',true);
INSERT INTO recursos(id_recurso,recurso,tipo,disponible) VALUES	('9','sala-general-2','1',true);
INSERT INTO recursos(id_recurso,recurso,tipo,disponible) VALUES	('10','sala-general-3','1',true);
INSERT INTO recursos(id_recurso,recurso,tipo,disponible) VALUES	('11','sala-general-4','1',true);
INSERT INTO recursos(id_recurso,recurso,tipo,disponible) VALUES	('12','sala-general-4','1',true);
INSERT INTO recursos(id_recurso,recurso,tipo,disponible) VALUES	('13','sala-informatica-1','1',true);
INSERT INTO recursos(id_recurso,recurso,tipo,disponible) VALUES	('14','sala-informatica-2','1',true);
INSERT INTO recursos(id_recurso,recurso,tipo,disponible) VALUES	('15','taller-cocina','1',true);
INSERT INTO recursos(id_recurso,recurso,tipo,disponible) VALUES	('16','despacho para entrevistas 1','1',true);
INSERT INTO recursos(id_recurso,recurso,tipo,disponible) VALUES	('17','despacho para entrevistas 2','1',true);
INSERT INTO recursos(id_recurso,recurso,tipo,disponible) VALUES	('18','salon de actos','1',true);
INSERT INTO recursos(id_recurso,recurso,tipo,disponible) VALUES	('19','sala de reuniones','1',true);