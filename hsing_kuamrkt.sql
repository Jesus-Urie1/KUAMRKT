-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 14-12-2020 a las 23:39:00
-- Versión del servidor: 5.7.32
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hsing_kuamrkt`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `allproducts`
--

CREATE TABLE `allproducts` (
  `id` int(11) NOT NULL,
  `nombpro` varchar(50) DEFAULT NULL,
  `descrip` varchar(50) DEFAULT NULL,
  `precio` decimal(6,2) DEFAULT NULL,
  `esDtado` int(11) DEFAULT NULL,
  `rutimg` varchar(100) DEFAULT NULL,
  `tipo` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `allproducts`
--

INSERT INTO `allproducts` (`id`, `nombpro`, `descrip`, `precio`, `esDtado`, `rutimg`, `tipo`) VALUES
(1, 'Ribeye', 'ojoebif', 249.00, 1, 'ribeye.jpg', 'kg'),
(2, 'Tomahawk', 'tenhalcon', 469.00, 1, 'tomahawk.jpg', 'kg'),
(3, 'Carne molida de res', 'albondirres', 148.00, 1, 'molida.jpg', 'kg'),
(4, 'Chorizo', 'seahogo', 66.00, 1, 'chorizo.jpg', 'kg'),
(5, 'Alpiste', 'piste', 32.00, 1, 'alpiste.jpg', 'kg'),
(6, 'Arroz', 'arroces', 34.00, 1, 'arroz.jpg', 'kg'),
(7, 'Avena', 'sativena', 28.00, 1, 'avena.jpg', 'kg'),
(8, 'Centeno', 'centennn', 24.75, 1, 'centeno.jpg', 'kg'),
(9, 'Kamut', 'kkmut', 42.00, 1, 'kamut.jpg', 'kg'),
(11, 'Sorgo', 'asorgog', 27.00, 1, 'sorgo.jpg', 'kg'),
(12, 'Trigo', 'triggo', 24.00, 1, 'trigo.jpg', 'kg'),
(15, 'Tablet', 'tabureto', 3499.00, 1, 'tablet.jpg', ''),
(16, 'Smartwatch', 'wachaS', 425.00, 1, 'smartwatch.jpg', ''),
(17, 'Aspirina', 'aspirinaaaaaa', 45.00, 1, 'aspirina.jpg', ''),
(18, 'Agrifen', 'aaaaaaaaaaa', 35.00, 1, 'agrifen.jpg', ''),
(19, 'Hisopos', 'AAAAAAAA', 28.00, 1, 'hisopos.jpg', ''),
(20, 'Mango', 'manogo loco', 10.50, 1, 'Mangos.jpg', 'kp'),
(22, 'Uvas', 'uvas locas', 20.45, 1, 'Uvas.jpg', 'kg'),
(21, 'Platanos', 'platano loco', 10.00, 1, 'Platanos.jpg', 'kp'),
(23, 'Manzana', 'manzana loca', 8.50, 1, 'Manzanas.jpg', 'kp'),
(24, 'Naranja', 'naranjas locas', 9.50, 1, 'Naranjas.jpg', 'kp'),
(25, 'Pina', 'pinas locas', 18.90, 1, 'Pinna.jpg', ''),
(26, 'Cuerda', 'shuwshuw', 48.00, 1, 'cuerda.jpg', ''),
(27, 'Mancuernas', 'mhmm', 210.00, 1, 'mancuernas.jpg', ''),
(28, 'Pesas', 'bababooey', 350.00, 1, 'pesas.jpg', ''),
(29, 'Banda Elastica', 'bandaelassss', 127.00, 1, 'bandasElas.jpg', ''),
(30, 'Banda Resistencia', 'bandaresiss', 132.00, 1, 'bandasRes.jpg', ''),
(31, 'Barras Paralelas', 'barrasparalel', 264.00, 1, 'barrasPara.jpg', ''),
(32, 'Rodillo', 'rodilloesp', 307.00, 1, 'rodilloEsp.jpg', ''),
(34, 'Cubo Rompecabezas', 'rubiksss', 57.00, 1, 'cube.jpg', ''),
(35, 'Spinner', 'sssppiner', 72.00, 1, 'spinner.jpg', ''),
(54, 'Laptop', 'laptop hp', 6399.00, 1, 'laptop.jpg', ''),
(36, 'Tortuga de juguete', 'trotucc', 239.00, 1, 'tortuga.jpg', ''),
(37, 'Tren de juguete', 'chucuchucu', 186.00, 1, 'trenJuguete.jpg', ''),
(38, 'Crema agria', 'cremlala', 14.00, 1, 'cremaLALA.jpg', ''),
(39, 'Leche entera', 'lechemlala', 16.00, 1, 'lecheLALA.jpg', ''),
(40, 'Queso Manchego', 'manchegolala', 26.00, 1, 'quesoManLALA.jpg', ''),
(41, 'Queso Manchego Rallado', 'manchegoralala', 28.00, 1, 'quesoMarLALA.jpg', ''),
(42, 'Queso Panela', 'panelafuddd', 25.00, 1, 'quesoPanelaFUD.jpg', ''),
(43, 'Queso Crema', 'quesocremaphilly', 45.00, 1, 'quesoPhila.jpg', ''),
(44, 'Yogurt bebible', 'yogurcin', 14.00, 1, 'yogurtNestle.jpg', ''),
(45, 'Cepillo para mascotas', 'cepillin', 129.00, 1, 'cepilloMas.jpg', ''),
(46, 'Croquetas para perro', 'crocro', 30.00, 1, 'croquetasP.jpg', ''),
(47, 'Croquetas para gato', 'crocrog', 35.00, 1, 'croquetasG.jpg', ''),
(48, 'Juguetes variedad', 'jugpete', 69.00, 1, 'juguetesM.jpg', ''),
(52, 'Tapete', 'tapete gimnasio', 482.00, 1, 'tapeteGym.jpg', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carniceria`
--

CREATE TABLE `carniceria` (
  `id` int(11) NOT NULL,
  `nombpro` varchar(50) DEFAULT NULL,
  `descrip` varchar(50) DEFAULT NULL,
  `precio` decimal(6,2) DEFAULT NULL,
  `esDtado` int(11) DEFAULT NULL,
  `rutimg` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carniceria`
--

INSERT INTO `carniceria` (`id`, `nombpro`, `descrip`, `precio`, `esDtado`, `rutimg`) VALUES
(1, 'Ribeye', 'ojoebif', 249.00, 1, 'ribeye.jpg'),
(2, 'Tomahawk', 'tenhalcon', 469.00, 1, 'tomahawk.jpg'),
(3, 'Carne molida de res', 'albondirres', 148.00, 1, 'molida.jpg'),
(4, 'Chorizo', 'seahogo', 66.00, 1, 'chorizo.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cereales`
--

CREATE TABLE `cereales` (
  `id` int(11) NOT NULL,
  `nombpro` varchar(50) DEFAULT NULL,
  `descrip` varchar(50) DEFAULT NULL,
  `precio` decimal(6,2) DEFAULT NULL,
  `esDtado` int(11) DEFAULT NULL,
  `rutimg` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cereales`
--

INSERT INTO `cereales` (`id`, `nombpro`, `descrip`, `precio`, `esDtado`, `rutimg`) VALUES
(1, 'Alpiste', 'piste', 32.00, 1, 'alpiste.jpg'),
(2, 'Arroz', 'arroces', 34.00, 1, 'arroz.jpg'),
(3, 'Avena', 'sativena', 28.00, 1, 'avena.jpg'),
(4, 'Centeno', 'centennn', 24.75, 1, 'centeno.jpg'),
(5, 'Kamut', 'kkmut', 42.00, 1, 'kamut.jpg'),
(6, 'Mijo', 'mijito', 33.00, 1, 'mijo.jpg'),
(7, 'Sorgo', 'asorgog', 27.00, 1, 'sorgo.jpg'),
(8, 'Trigo', 'triggo', 24.00, 1, 'trigo.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `electronicos`
--

CREATE TABLE `electronicos` (
  `id` int(11) NOT NULL,
  `nombpro` varchar(50) DEFAULT NULL,
  `descrip` varchar(50) DEFAULT NULL,
  `precio` decimal(6,2) DEFAULT NULL,
  `esDtado` int(11) DEFAULT NULL,
  `rutimg` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `electronicos`
--

INSERT INTO `electronicos` (`id`, `nombpro`, `descrip`, `precio`, `esDtado`, `rutimg`) VALUES
(1, 'Laptop', 'ashepe', 6399.00, 1, 'laptop.jpg'),
(2, 'Tablet', 'tabureto', 3499.00, 1, 'tablet.jpg'),
(3, 'Smartwatch', 'wachaS', 425.00, 1, 'smartwatch.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `farmacia`
--

CREATE TABLE `farmacia` (
  `id` int(11) NOT NULL,
  `nombpro` varchar(50) DEFAULT NULL,
  `descrip` varchar(50) DEFAULT NULL,
  `precio` decimal(6,2) DEFAULT NULL,
  `esDtado` int(11) DEFAULT NULL,
  `rutimg` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `farmacia`
--

INSERT INTO `farmacia` (`id`, `nombpro`, `descrip`, `precio`, `esDtado`, `rutimg`) VALUES
(1, 'Aspirina', 'aspirinaaaaaa', 45.00, 1, 'aspirina.jpg'),
(2, 'Agrifen', 'aaaaaaaaaaa', 35.00, 1, 'agrifen.jpg'),
(3, 'Hisopos', 'AAAAAAAA', 28.00, 1, 'hisopos.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frutasyv`
--

CREATE TABLE `frutasyv` (
  `id` int(11) NOT NULL,
  `nombpro` varchar(50) DEFAULT NULL,
  `descrip` varchar(50) DEFAULT NULL,
  `precio` decimal(6,2) DEFAULT NULL,
  `esDtado` int(11) DEFAULT NULL,
  `rutimg` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `frutasyv`
--

INSERT INTO `frutasyv` (`id`, `nombpro`, `descrip`, `precio`, `esDtado`, `rutimg`) VALUES
(1, 'Mango', 'manogo loco', 10.50, 1, 'Mangos.jpg'),
(2, 'Platano', 'platano loco', 10.00, 1, 'Platanos.jpg'),
(3, 'Uvas', 'uvas locas', 20.45, 1, 'Uvas.jpg'),
(4, 'Manzana', 'manzana loca', 8.50, 1, 'Manzanas.jpg'),
(6, 'Naranja', 'naranjas locas', 9.50, 1, 'Naranjas.jpg'),
(8, 'Pina', 'pinas locas', 18.90, 1, 'Pinna.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gym`
--

CREATE TABLE `gym` (
  `id` int(11) NOT NULL,
  `nombpro` varchar(50) DEFAULT NULL,
  `descrip` varchar(50) DEFAULT NULL,
  `precio` decimal(6,2) DEFAULT NULL,
  `esDtado` int(11) DEFAULT NULL,
  `rutimg` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gym`
--

INSERT INTO `gym` (`id`, `nombpro`, `descrip`, `precio`, `esDtado`, `rutimg`) VALUES
(1, 'Cuerda', 'shuwshuw', 48.00, 1, 'cuerda.jpg'),
(2, 'Mancuernas', 'mhmm', 210.00, 1, 'mancuernas.jpg'),
(3, 'Pesas', 'bababooey', 350.00, 1, 'pesas.jpg'),
(4, 'Banda Elastica', 'bandaelassss', 127.00, 1, 'bandasElas.jpg'),
(5, 'Banda Resistencia', 'bandaresiss', 132.00, 1, 'bandasRes.jpg'),
(6, 'Barras Paralelas', 'barrasparalel', 264.00, 1, 'barrasPara.jpg'),
(7, 'Rodillo', 'rodilloesp', 307.00, 1, 'rodilloEsp.jpg'),
(8, 'Tapete', 'tapetegym', 482.00, 1, 'tapeteGym.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juguetes`
--

CREATE TABLE `juguetes` (
  `id` int(11) NOT NULL,
  `nombpro` varchar(50) DEFAULT NULL,
  `descrip` varchar(50) DEFAULT NULL,
  `precio` decimal(6,2) DEFAULT NULL,
  `esDtado` int(11) DEFAULT NULL,
  `rutimg` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `juguetes`
--

INSERT INTO `juguetes` (`id`, `nombpro`, `descrip`, `precio`, `esDtado`, `rutimg`) VALUES
(1, 'Cubo Rompecabezas', 'rubiksss', 57.00, 1, 'cube.jpg'),
(2, 'Spinner', 'sssppiner', 72.00, 1, 'spinner.jpg'),
(3, 'Tortuga de juguete', 'trotucc', 239.00, 1, 'tortuga.jpg'),
(4, 'Tren de juguete', 'chucuchucu', 186.00, 1, 'trenJuguete.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lacteos`
--

CREATE TABLE `lacteos` (
  `id` int(11) NOT NULL,
  `nombpro` varchar(50) DEFAULT NULL,
  `descrip` varchar(50) DEFAULT NULL,
  `precio` decimal(6,2) DEFAULT NULL,
  `esDtado` int(11) DEFAULT NULL,
  `rutimg` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lacteos`
--

INSERT INTO `lacteos` (`id`, `nombpro`, `descrip`, `precio`, `esDtado`, `rutimg`) VALUES
(1, 'Crema agria', 'cremlala', 14.00, 1, 'cremaLALA.jpg'),
(2, 'Leche entera', 'lechemlala', 16.00, 1, 'lecheLALA.jpg'),
(3, 'Queso Manchego', 'manchegolala', 26.00, 1, 'quesoManLALA.jpg'),
(4, 'Queso Manchego Rallado', 'manchegoralala', 28.00, 1, 'quesoMarLALA.jpg'),
(5, 'Queso Panela', 'panelafuddd', 25.00, 1, 'quesoPanelaFUD.jpg'),
(6, 'Queso Crema', 'quesocremaphilly', 45.00, 1, 'quesoPhila.jpg'),
(7, 'Yogurt bebible', 'yogurcin', 14.00, 1, 'yogurtNestle.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `loginkua`
--

CREATE TABLE `loginkua` (
  `id` int(11) NOT NULL,
  `nombres` varchar(200) CHARACTER SET latin1 NOT NULL,
  `apellidos` varchar(200) CHARACTER SET latin1 NOT NULL,
  `telefono` varchar(200) CHARACTER SET latin1 NOT NULL,
  `email` varchar(200) CHARACTER SET latin1 NOT NULL,
  `calle` varchar(200) CHARACTER SET latin1 NOT NULL,
  `nexterior` varchar(200) CHARACTER SET latin1 NOT NULL,
  `ninterior` varchar(200) CHARACTER SET latin1 NOT NULL,
  `cp` varchar(200) CHARACTER SET latin1 NOT NULL,
  `colonia` varchar(200) CHARACTER SET latin1 NOT NULL,
  `ecalles` varchar(200) CHARACTER SET latin1 NOT NULL,
  `referencias` varchar(200) CHARACTER SET latin1 NOT NULL,
  `clave` varchar(200) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `loginkua`
--

INSERT INTO `loginkua` (`id`, `nombres`, `apellidos`, `telefono`, `email`, `calle`, `nexterior`, `ninterior`, `cp`, `colonia`, `ecalles`, `referencias`, `clave`) VALUES
(17, 'Leroy', 'Jenkins', '3141721232', 'nivekius@ymail.com', 'Sales 420', '6', '9', '22375', 'Dolce and Gabbana', 'Aqui y alla', 'Por el kiosco', '1e096b18542f5cb71381a66ddef94fb9eab90dccba6a4661d2244fd5df41a57aa7ca7ffccde4fe86b9c9391410849bef27565d49f2dc5feb4de60720825ea12d'),
(18, 'Hector', 'Larovski', '3147146818', 'hvelasco0@ucol.mx', 'calle9', '178', '178', '28200', 'UPH', '', '', 'fa513fea5117807185e534210ff38898867b62056e4524702dad51b4b0fa36107403f9c506385e4f65d06679deb16ee7666e26067f6d970545daafd4347caf36'),
(16, 'Mario ', 'Perez', '3141234567', 'mario@prueba1.com', 'Garza', '15', '', '28185', 'Las joyas', 'Manzana y PiÃ±a', 'Casa blanca', '1f40fc92da241694750979ee6cf582f2d5d7d28e18335de05abc54d0560e0f5302860c652bf08d560252aa5e74210546f369fbbbce8c12cfc7957b2652fe9a75');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascotas`
--

CREATE TABLE `mascotas` (
  `id` int(11) NOT NULL,
  `nombpro` varchar(50) DEFAULT NULL,
  `descrip` varchar(50) DEFAULT NULL,
  `precio` decimal(6,2) DEFAULT NULL,
  `esDtado` int(11) DEFAULT NULL,
  `rutimg` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mascotas`
--

INSERT INTO `mascotas` (`id`, `nombpro`, `descrip`, `precio`, `esDtado`, `rutimg`) VALUES
(1, 'Cepillo para mascotas', 'cepillin', 129.00, 1, 'cepilloMas.jpg'),
(2, 'Croquetas para perro', 'crocro', 30.00, 1, 'croquetasP.jpg'),
(3, 'Croquetas para gato', 'crocro', 35.00, 1, 'croquetasG.jpg'),
(4, 'Juguetes variedad', 'jugpete', 69.00, 1, 'juguetesM.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `producto` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` decimal(6,2) NOT NULL,
  `cantidad` varchar(100) NOT NULL,
  `piezas_kilos` varchar(100) NOT NULL,
  `esDtado` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `producto`, `nombre`, `precio`, `cantidad`, `piezas_kilos`, `esDtado`, `email`, `fecha`) VALUES
(282, 'tablet.jpg', 'Tablet', 3499.00, '1', 'Piezas', 3, 'hvelasco0@ucol.mx', '2020-12-14'),
(283, 'cube.jpg', 'Cubo Rompecabezas', 57.00, '1', 'Piezas', 3, 'hvelasco0@ucol.mx', '2020-12-14'),
(284, 'cuerda.jpg', 'Cuerda', 48.00, '4', 'Piezas', 3, 'hvelasco0@ucol.mx', '2020-12-14'),
(286, 'cuerda.jpg', 'Cuerda', 48.00, '1', 'Piezas', 3, 'mario@prueba1.com', '2020-12-14'),
(287, 'mancuernas.jpg', 'Mancuernas', 210.00, '1', 'Piezas', 3, 'mario@prueba1.com', '2020-12-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombpro` varchar(50) DEFAULT NULL,
  `descrip` varchar(50) DEFAULT NULL,
  `precio` decimal(6,2) DEFAULT NULL,
  `esDtado` int(11) DEFAULT NULL,
  `rutimg` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombpro`, `descrip`, `precio`, `esDtado`, `rutimg`) VALUES
(7, 'Tablet', 'tablet lenovo123', 3499.00, 1, 'tablet.jpg'),
(8, 'Cuerda', 'cuerda para saltar', 48.00, 1, 'cuerda.jpg'),
(9, 'Aspirina', 'dolor de cabeza', 45.00, 1, 'aspirina.jpg'),
(12, 'Spinner', 'finger spiner crack 300 limited edition', 72.00, 1, 'spinner.jpg'),
(13, 'Mancuernas', 'mancuernas 25 lb', 210.00, 1, 'mancuernas.jpg'),
(16, 'Cubo Rompecabezas', 'Rubiks cube', 57.00, 1, 'cube.jpg'),
(17, 'Banda Resistencia', 'Banda de resistencia gimnasio', 132.00, 1, 'bandasRes.jpg'),
(20, 'Cepillo para mascotas', 'cepillin', 129.00, 1, 'cepilloMas.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `allproducts`
--
ALTER TABLE `allproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carniceria`
--
ALTER TABLE `carniceria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cereales`
--
ALTER TABLE `cereales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `electronicos`
--
ALTER TABLE `electronicos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `farmacia`
--
ALTER TABLE `farmacia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `frutasyv`
--
ALTER TABLE `frutasyv`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gym`
--
ALTER TABLE `gym`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `juguetes`
--
ALTER TABLE `juguetes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lacteos`
--
ALTER TABLE `lacteos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `loginkua`
--
ALTER TABLE `loginkua`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `allproducts`
--
ALTER TABLE `allproducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de la tabla `carniceria`
--
ALTER TABLE `carniceria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cereales`
--
ALTER TABLE `cereales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `electronicos`
--
ALTER TABLE `electronicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `farmacia`
--
ALTER TABLE `farmacia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `frutasyv`
--
ALTER TABLE `frutasyv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `gym`
--
ALTER TABLE `gym`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `juguetes`
--
ALTER TABLE `juguetes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `lacteos`
--
ALTER TABLE `lacteos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `loginkua`
--
ALTER TABLE `loginkua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=288;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
