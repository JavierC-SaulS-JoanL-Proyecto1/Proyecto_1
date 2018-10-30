-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2018 at 07:19 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyecto1bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `recursos`
--

CREATE TABLE `recursos` (
  `id_recurso` int(2) NOT NULL,
  `recurso` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `tipo` int(1) NOT NULL,
  `disponible` tinyint(1) NOT NULL DEFAULT '1',
  `descripcion` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `imagen` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `recursos`
--

INSERT INTO `recursos` (`id_recurso`, `recurso`, `tipo`, `disponible`, `descripcion`, `imagen`) VALUES
(1, 'portatil-1', 2, 1, 'Portátil HP Pavilion 14-ce0004ns 14\" Intel Core i5: \r\nEstilo que te hace sentir bien.Con un diseño moderno y sofisticado, el nuevo portátil HP Pavilion ofrece el equilibrio perfecto entre rendimiento y estilo.\r\nElegante. Fino. Sorprendente. Una mezcla de dos tonos, texturas y acabados dan a este portátil un aspecto distinguido y elegante. Todos los detalles se han diseñado para generar rendimiento y estilo.\r\nEspecificaciones técnicas: Intel Core i5 8250U // Windows 10 Home // RAM de 8 GB DDR4 //  Conectores:\r\n1 USB 3.1 Type C (gen 1)\r\nUSB 3.1 Gen 1\r\n1 HDMI\r\n1 RJ-45\r\n1 Combo de auriculares y micrófono\r\n1 Lector de tarjetas SD multiformato HP', 'portatil_hp_pavilion'),
(2, 'portatil-2', 2, 1, 'Portátil ASUS VivoBook 15,6\", AMD Quad-Core E2-6110 APU:\r\nEl ASUS X540 Series incorpora procesadores AMD para poner a tu servicio rendimiento informático fluido y con gran capacidad de respuesta. Con una tarjeta gráfica integrada AMD Radeon R2, una avanzada controladora de memoria integrada en placa, 4 GB de memoria RAM y Windows 10 Home, el X540 es una plataforma ideal para la informática diaria.\r\nEspecificaciones técnicas:\r\nAMD E2 6110 // Windows 10 Home // 4 GB DDR3L // Conectores:\r\n1 USB 2.0\r\n1 USB 3.0\r\n1 USB 3.1 Gen 1\r\n1 Conector RJ45 LAN\r\n1 VGA D-Sub\r\n1 Orificio Bloqueo Kensington\r\n1 Entrada/salida línea audio (combo)', 'Asus_vivobook'),
(3, 'portatil-3', 2, 1, 'Gracias a su combinación de rendimiento y fiabilidad, el Satellite Pro R50-C de 39,6 cm (15,6”) es el portátil ideal para cualquier entorno profesional. Saca partido a las elevadas velocidades de procesamiento de la arquitectura Intel® Core™ y disfruta de la máxima fiabilidad gracias a su resistente diseño, con el que podrás hacer frente a los rigores del día a día.\r\nDiseñado teniendo en cuenta tanto al usuario ocasional como al profesional, el Satellite Pro R50- C permite trabajar en silencio, dispone de una pantalla LCD mate de alta definición e incluye un teclado de tamaño completo que mejora el rendimiento.\r\n\r\nEl Satellite Pro R50-C es el portátil más competitivo de la gama profesional de Toshiba y te permitirá cubrir todas tus necesidades empresariales.\r\nEspecificaciones técnicas:\r\nIntel Celeron 3855U // Windows 10 pro // RAM 4 GB // Conectores:\r\n3 USB 3.0\r\n1 USB 2.0\r\n1 Conector RJ45 LAN\r\n1 VGA D-Sub\r\n1 Salida de audio\r\n1 Lector de tarjetas SD multiformato TOSHIBA', 'satellite_pro_r50'),
(4, 'movil-1', 2, 1, 'Smartphone libre Huawei P20 Lite 64 GB + 4 GB Rosa:\r\nHuawei P20 Lite, pantalla de 5,84\" Full HD+, Camara principal 16 Mpx+2 Mpx y secundaria de 16 Mpx con 2LED Flash, 4GB RAM y 64GB de memoria externa, procesador HiSilicon Kirin 659, sensor de huella dactilar, tecnologia NFC, sensor de reconocimiento facial, USB Tipo C, Bateria : 3000 mAh.\r\nEspecificaciones técnicas:\r\nOcta Core HiSilicon Kirin 659 // Android 8.0 // RAM 4GB // conectores y tecnología de conexión:\r\nUSB-C\r\nNFC\r\nWi-Fi', 'huawei_p20'),
(5, 'movil-2', 2, 1, 'El Xiaomi Mi A2 Lite ya ha llegado. Después del éxito conseguido por Xiaomi con el Mi A1, el fabricante chino acaba de presentar a uno de sus sucesores: el Xiaomi Mi A2 Lite.\r\nEspecificaciones técnicas:\r\nQualcomm® Snapdragon™ 625, Octa-Core de 2.0 GHz // Android ONE // RAM 4GB // conectores y tecnología de conexión:\r\nConector de alimentación\r\nMicrófono\r\nUSB con función de carga\r\nBluetooth', 'xiaomi_mi_A2_Lite'),
(6, 'proyector-1', 2, 1, 'Proyector EPSON ya instalado preparado para la proyección por varios métodos de conexión. Métodos:\r\n  VGA X1\r\n  HDMI X2\r\n  MICRO HDMI X2', 'proyector_Epson_1'),
(7, 'proyector-2', 2, 1, 'Proyector EPSON ya instalado para aulas grandes. Métodos:\r\n  HDMI X2\r\n  MICRO HDMI X2', 'proyector_Epson_2'),
(8, 'sala-general-1', 1, 1, 'Sala general preparada para charlas locales.', 'sala_disciplinar_1'),
(9, 'sala-general-2', 1, 1, 'Sala general preparada para charlas con terceros externos.', 'sala_disciplinar_2'),
(10, 'sala-general-3', 1, 1, 'Sala general preparada para charlas locales de altos cargos.', 'sala_disciplinar_3'),
(11, 'sala-general-4', 1, 1, 'Sala general preparada para charlas con terceros externos de altos cargos.', 'sala_multidisciplinar_4'),
(12, 'sala-general-5', 1, 1, 'Sala general de emergencia preparada con varias funcionalidades para diferentes tipos de usos.', 'sala_disciplinaria_5'),
(13, 'sala-informatica-1', 1, 1, 'Sala de trabajo que dispone de varios equipos de sobremesa. Total de equipos: 40.', 'sala_informatica_1'),
(14, 'sala-informatica-2', 1, 1, 'Sala de trabajo que dispone de varios equipos de sobremesa. Total de equipos: 20.', 'sala_informatica_2'),
(15, 'taller-cocina', 1, 1, 'Taller de cocina que tiene electrodómesticos de cocina, preparados para su uso.', 'taller_cocina'),
(16, 'despacho para entrevistas 1', 1, 1, 'Despacho preparado para entrevistas.', 'sala_entrevistas_1'),
(17, 'despacho para entrevistas 2', 1, 1, 'Despacho secundario preparado para entrevistas.', 'sala_entrevista'),
(18, 'salon de actos', 1, 1, 'Salón con un total de 100 butacas preparado para charlas grandes y otras actividades de interacción.', 'salon_de_actos'),
(19, 'sala de reuniones', 1, 1, 'Sala de reunión general con una mesa redonda y asientos, penada para reuniones rápidas de de 2 a 4 personas.', 'sala_reuniones');

-- --------------------------------------------------------

--
-- Table structure for table `reserva`
--

CREATE TABLE `reserva` (
  `id_reserva` int(11) NOT NULL,
  `fecha_entrega` datetime NOT NULL,
  `fecha_devolucion` datetime NOT NULL,
  `id_recurso_fk` int(11) NOT NULL,
  `usuario_fk` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserva`
--

INSERT INTO `reserva` (`id_reserva`, `fecha_entrega`, `fecha_devolucion`, `id_recurso_fk`, `usuario_fk`) VALUES
(1, '2018-10-30 15:06:21', '2018-10-30 15:17:11', 1, 'ssole'),
(3, '2018-10-30 15:48:14', '2018-10-30 15:48:17', 9, 'ssole'),
(6, '2018-10-30 17:00:28', '2018-10-30 17:00:31', 11, 'ssole'),
(7, '2018-10-30 17:00:36', '2018-10-30 17:05:38', 15, 'ssole'),
(9, '2018-10-30 18:16:59', '2018-10-30 18:17:11', 4, 'ssole'),
(10, '2018-10-30 18:17:09', '2018-10-30 18:17:12', 1, 'ssole'),
(11, '2018-10-30 18:25:36', '2018-10-30 18:25:39', 1, 'ssole'),
(12, '2018-10-30 18:25:43', '2018-10-30 18:34:28', 1, 'ssole'),
(13, '2018-10-30 18:25:56', '2018-10-30 18:34:30', 8, 'ssole'),
(14, '2018-10-30 18:26:00', '2018-10-30 18:34:32', 3, 'ssole');

-- --------------------------------------------------------

--
-- Table structure for table `tipos`
--

CREATE TABLE `tipos` (
  `id_tipo` int(11) NOT NULL,
  `tipo` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tipos`
--

INSERT INTO `tipos` (`id_tipo`, `tipo`) VALUES
(1, 'recursos_inmuebles'),
(2, 'recursos_electronicos');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `password`, `nombre`, `apellido`) VALUES
('ssole', '123asd', 'saul', 'sole'),
('user1', '123qwe', 'user', 'usuario');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recursos`
--
ALTER TABLE `recursos`
  ADD PRIMARY KEY (`id_recurso`),
  ADD KEY `tipo_fk` (`tipo`);

--
-- Indexes for table `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `recurso_fk` (`id_recurso_fk`),
  ADD KEY `reserva_fk` (`usuario_fk`);

--
-- Indexes for table `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `recursos`
--
ALTER TABLE `recursos`
  ADD CONSTRAINT `tipo_fk` FOREIGN KEY (`tipo`) REFERENCES `tipos` (`id_tipo`);

--
-- Constraints for table `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `recurso_fk` FOREIGN KEY (`id_recurso_fk`) REFERENCES `recursos` (`id_recurso`),
  ADD CONSTRAINT `reserva_fk` FOREIGN KEY (`usuario_fk`) REFERENCES `usuarios` (`usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
