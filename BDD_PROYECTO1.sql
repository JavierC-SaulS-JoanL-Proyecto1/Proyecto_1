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
  `id_recurso` int(4) NOT NULL,
  `recurso` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `tipo` int(1) NOT NULL,
  `disponible` tinyint(1) NOT NULL DEFAULT '1',
  `descripcion` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `imagen` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id_reserva` int(4) NOT NULL,
  `fecha_entrega` datetime NOT NULL,
  `fecha_devolucion` datetime NOT NULL,
  `id_recurso_fk` int(4) NOT NULL,
  `usuario_fk` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE `tipos` (
  `id_tipo` int(4) NOT NULL,
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
INSERT INTO recursos(id_recurso,recurso,tipo,disponible,descripcion,imagen) VALUES	('1','portatil-1','2',true,'Portátil HP Pavilion 14-ce0004ns 14" Intel Core i5: 
Estilo que te hace sentir bien.Con un diseño moderno y sofisticado, el nuevo portátil HP Pavilion ofrece el equilibrio perfecto entre rendimiento y estilo.
Elegante. Fino. Sorprendente. Una mezcla de dos tonos, texturas y acabados dan a este portátil un aspecto distinguido y elegante. Todos los detalles se han diseñado para generar rendimiento y estilo.
Especificaciones técnicas: Intel Core i5 8250U // Windows 10 Home // RAM de 8 GB DDR4 //  Conectores:
1 USB 3.1 Type C (gen 1)
USB 3.1 Gen 1
1 HDMI
1 RJ-45
1 Combo de auriculares y micrófono
1 Lector de tarjetas SD multiformato HP','portatilhp');
INSERT INTO recursos(id_recurso,recurso,tipo,disponible,descripcion,imagen) VALUES	('2','portatil-2','2',true,'Portátil ASUS VivoBook 15,6", AMD Quad-Core E2-6110 APU:
El ASUS X540 Series incorpora procesadores AMD para poner a tu servicio rendimiento informático fluido y con gran capacidad de respuesta. Con una tarjeta gráfica integrada AMD Radeon R2, una avanzada controladora de memoria integrada en placa, 4 GB de memoria RAM y Windows 10 Home, el X540 es una plataforma ideal para la informática diaria.
Especificaciones técnicas:
AMD E2 6110 // Windows 10 Home // 4 GB DDR3L // Conectores:
1 USB 2.0
1 USB 3.0
1 USB 3.1 Gen 1
1 Conector RJ45 LAN
1 VGA D-Sub
1 Orificio Bloqueo Kensington
1 Entrada/salida línea audio (combo)','portatilasus');
INSERT INTO recursos(id_recurso,recurso,tipo,disponible,descripcion,imagen) VALUES	('3','portatil-3','2',true,'Gracias a su combinación de rendimiento y fiabilidad, el Satellite Pro R50-C de 39,6 cm (15,6”) es el portátil ideal para cualquier entorno profesional. Saca partido a las elevadas velocidades de procesamiento de la arquitectura Intel® Core™ y disfruta de la máxima fiabilidad gracias a su resistente diseño, con el que podrás hacer frente a los rigores del día a día.
Diseñado teniendo en cuenta tanto al usuario ocasional como al profesional, el Satellite Pro R50- C permite trabajar en silencio, dispone de una pantalla LCD mate de alta definición e incluye un teclado de tamaño completo que mejora el rendimiento.

El Satellite Pro R50-C es el portátil más competitivo de la gama profesional de Toshiba y te permitirá cubrir todas tus necesidades empresariales.
Especificaciones técnicas:
Intel Celeron 3855U // Windows 10 pro // RAM 4 GB // Conectores:
3 USB 3.0
1 USB 2.0
1 Conector RJ45 LAN
1 VGA D-Sub
1 Salida de audio
1 Lector de tarjetas SD multiformato TOSHIBA','portatiltoshiba');
INSERT INTO recursos(id_recurso,recurso,tipo,disponible,descripcion,imagen) VALUES	('4','movil-1','2',true,'Smartphone libre Huawei P20 Lite 64 GB + 4 GB Rosa:
Huawei P20 Lite, pantalla de 5,84" Full HD+, Camara principal 16 Mpx+2 Mpx y secundaria de 16 Mpx con 2LED Flash, 4GB RAM y 64GB de memoria externa, procesador HiSilicon Kirin 659, sensor de huella dactilar, tecnologia NFC, sensor de reconocimiento facial, USB Tipo C, Bateria : 3000 mAh.
Especificaciones técnicas:
Octa Core HiSilicon Kirin 659 // Android 8.0 // RAM 4GB // conectores y tecnología de conexión:
USB-C
NFC
Wi-Fi','smartphoneHuaweiP20');
INSERT INTO recursos(id_recurso,recurso,tipo,disponible,descripcion,imagen) VALUES	('5','movil-2','2',true,'El Xiaomi Mi A2 Lite ya ha llegado. Después del éxito conseguido por Xiaomi con el Mi A1, el fabricante chino acaba de presentar a uno de sus sucesores: el Xiaomi Mi A2 Lite.
Especificaciones técnicas:
Qualcomm® Snapdragon™ 625, Octa-Core de 2.0 GHz // Android ONE // RAM 4GB // conectores y tecnología de conexión:
Conector de alimentación
Micrófono
USB con función de carga
Bluetooth','XiaomiA2');
INSERT INTO recursos(id_recurso,recurso,tipo,disponible,descripcion,imagen) VALUES	('6','proyector-1','2',true,'Proyector EPSON ya instalado preparado para la proyección por varios métodos de conexión. Métodos:
  VGA X1
  HDMI X2
  MICRO HDMI X2','Epson1');
INSERT INTO recursos(id_recurso,recurso,tipo,disponible,descripcion,imagen) VALUES	('7','proyector-2','2',true,'Proyector EPSON ya instalado para aulas grandes. Métodos:
  HDMI X2
  MICRO HDMI X2','Epson2');
INSERT INTO recursos(id_recurso,recurso,tipo,disponible,descripcion,imagen) VALUES	('8','sala-general-1','1',true,'Sala general preparada para charlas locales.','Sala1');
INSERT INTO recursos(id_recurso,recurso,tipo,disponible,descripcion,imagen) VALUES	('9','sala-general-2','1',true,'Sala general preparada para charlas con terceros externos.','Sala2');
INSERT INTO recursos(id_recurso,recurso,tipo,disponible,descripcion,imagen) VALUES	('10','sala-general-3','1',true,'Sala general preparada para charlas locales de altos cargos.','Sala3');
INSERT INTO recursos(id_recurso,recurso,tipo,disponible,descripcion,imagen) VALUES	('11','sala-general-4','1',true,'Sala general preparada para charlas con terceros externos de altos cargos.','Sala4');
INSERT INTO recursos(id_recurso,recurso,tipo,disponible,descripcion,imagen) VALUES	('12','sala-general-5','1',true,'Sala general de emergencia preparada con varias funcionalidades para diferentes tipos de usos.','Sala5');
INSERT INTO recursos(id_recurso,recurso,tipo,disponible,descripcion,imagen) VALUES	('13','sala-informatica-1','1',true,'Sala de trabajo que dispone de varios equipos de sobremesa. Total de equipos: 40.','Sala-informatica1');
INSERT INTO recursos(id_recurso,recurso,tipo,disponible,descripcion,imagen) VALUES	('14','sala-informatica-2','1',true,'Sala de trabajo que dispone de varios equipos de sobremesa. Total de equipos: 20.','Sala-informatica2');
INSERT INTO recursos(id_recurso,recurso,tipo,disponible,descripcion,imagen) VALUES	('15','taller-cocina','1',true,'Taller de cocina que tiene electrodómesticos de cocina, preparados para su uso.','taller-cocina');
INSERT INTO recursos(id_recurso,recurso,tipo,disponible,descripcion,imagen) VALUES	('16','despacho para entrevistas 1','1',true,'Despacho preparado para entrevistas.','despacho-entrevistas');
INSERT INTO recursos(id_recurso,recurso,tipo,disponible,descripcion,imagen) VALUES	('17','despacho para entrevistas 2','1',true,'Despacho secundario preparado para entrevistas.','despacho-entrevistas2');
INSERT INTO recursos(id_recurso,recurso,tipo,disponible,descripcion,imagen) VALUES	('18','salon de actos','1',true,'Salón con un total de 100 butacas preparado para charlas grandes y otras actividades de interacción.','Salon-actos');
INSERT INTO recursos(id_recurso,recurso,tipo,disponible,descripcion,imagen) VALUES	('19','sala de reuniones','1',true,'Sala de reunión general con una mesa redonda y asientos, penada para reuniones rápidas de de 2 a 4 personas.','Salon-reuniones');