-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-08-2022 a las 20:29:49
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `anei`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ahorro`
--

CREATE TABLE `ahorro` (
  `cedula_ahorro` bigint(20) NOT NULL,
  `valor_ahorro` bigint(20) NOT NULL,
  `fecha_ahorro` date NOT NULL,
  `hora_ahorro` time NOT NULL,
  `nombre_ahorro` varchar(40) NOT NULL,
  `codigo_ahorro` varchar(40) NOT NULL,
  `kilos_ahorro` bigint(20) NOT NULL,
  `cantidad_ahorro` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisisfisico`
--

CREATE TABLE `analisisfisico` (
  `codigo_analisisfisico` varchar(40) NOT NULL,
  `fecha_analisisfisico` date NOT NULL,
  `almendra_total` float(10,1) NOT NULL,
  `almendra_sana` float(10,1) NOT NULL,
  `broca` float(10,1) NOT NULL,
  `broca_punto` float(10,1) NOT NULL,
  `negro` float(10,1) NOT NULL,
  `vinagre` float(10,1) NOT NULL,
  `humedad` float(10,1) NOT NULL,
  `factor` float(10,1) NOT NULL,
  `observaciones_analisisfisico` varchar(40) NOT NULL,
  `almendra_sana1` float(10,1) NOT NULL,
  `almendra_total1` float(10,1) NOT NULL,
  `broca1` float(10,1) NOT NULL,
  `broca_punto1` float(10,1) NOT NULL,
  `negro1` float(10,1) NOT NULL,
  `vinagre1` float(10,1) NOT NULL,
  `numero` bigint(20) NOT NULL,
  `nombre_analisisfisico` varchar(40) NOT NULL,
  `evaluado` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisissensorial`
--

CREATE TABLE `analisissensorial` (
  `codigo_sensorial` varchar(40) NOT NULL,
  `fecha_sensorial` date NOT NULL,
  `puntaje_scaa` float(10,1) NOT NULL,
  `acidez` varchar(40) NOT NULL,
  `notas` varchar(40) NOT NULL,
  `numero` bigint(20) NOT NULL,
  `nombre_sensorial` varchar(40) NOT NULL,
  `cedula_sensorial` bigint(20) NOT NULL,
  `evaluado` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asociados`
--

CREATE TABLE `asociados` (
  `nombre_usuario` varchar(40) NOT NULL,
  `municipio` varchar(40) NOT NULL,
  `vereda` varchar(40) NOT NULL,
  `finca` varchar(40) NOT NULL,
  `fecha_registro` date NOT NULL,
  `cedula_usuario` bigint(20) NOT NULL,
  `codigo_up` varchar(40) NOT NULL,
  `estatus` varchar(40) NOT NULL,
  `contacto` bigint(20) NOT NULL,
  `cupo_cafe` bigint(20) NOT NULL,
  `tipo_vinculacion` varchar(40) NOT NULL,
  `cupo_cacao` bigint(20) NOT NULL,
  `numero` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `cedula` bigint(20) NOT NULL,
  `producto` varchar(40) NOT NULL,
  `unidad` varchar(10) NOT NULL,
  `marca` varchar(40) NOT NULL,
  `numero_estopas` bigint(20) NOT NULL,
  `estado_estopas` varchar(40) NOT NULL,
  `numero_sacos` bigint(20) NOT NULL,
  `estado_sacos` varchar(40) NOT NULL,
  `observaciones` varchar(40) NOT NULL,
  `fecha_compra` date NOT NULL,
  `kilos_brutos` bigint(20) NOT NULL,
  `kilos_netos` bigint(20) NOT NULL,
  `municipio_compra` varchar(40) NOT NULL,
  `tipo_grano` varchar(40) NOT NULL,
  `latas_compra` bigint(20) NOT NULL,
  `numero` bigint(20) NOT NULL,
  `nombre_compra` varchar(40) NOT NULL,
  `evaluado` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `controlsecadora`
--

CREATE TABLE `controlsecadora` (
  `cod_secadora` bigint(20) NOT NULL,
  `fecha_secadora` date NOT NULL,
  `hora_secadora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `liquidacion`
--

CREATE TABLE `liquidacion` (
  `codigo_liquidacion` varchar(40) NOT NULL,
  `precio_dia` bigint(20) NOT NULL,
  `rendimiento` bigint(20) NOT NULL,
  `bonificacion` bigint(20) NOT NULL,
  `prima` bigint(20) NOT NULL,
  `precio_final` bigint(20) NOT NULL,
  `subtotal` bigint(20) NOT NULL,
  `fecha_liquidacion` date NOT NULL,
  `hora_liquidacion` time NOT NULL,
  `politica` varchar(40) NOT NULL,
  `observaciones_liquidacion` varchar(40) NOT NULL,
  `dian` float(20,1) NOT NULL,
  `asociados` bigint(20) NOT NULL,
  `neto_pagar` bigint(20) NOT NULL,
  `ahorro` bigint(20) NOT NULL,
  `total_ahorro` bigint(20) NOT NULL,
  `kilos_liquidacion` bigint(20) NOT NULL,
  `cedula_liquidacion` bigint(20) NOT NULL,
  `aporte` bigint(20) NOT NULL,
  `numero` bigint(20) NOT NULL,
  `nombre_liquidacion` varchar(40) NOT NULL,
  `producto_liquidacion` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noasociados`
--

CREATE TABLE `noasociados` (
  `cedula_noasociados` bigint(20) NOT NULL,
  `centro_acopio` varchar(40) NOT NULL,
  `fecha_noasociado` date NOT NULL,
  `nombres_completos` varchar(60) NOT NULL,
  `contacto_noasociado` bigint(20) NOT NULL,
  `tipo_cliente` varchar(40) NOT NULL,
  `municipio_noasociado` varchar(40) NOT NULL,
  `vereda_noasociado` varchar(40) NOT NULL,
  `finca_noasociado` varchar(40) NOT NULL,
  `producion_noasociado` float(10,1) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `tipo` varchar(40) NOT NULL,
  `precio` bigint(20) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  `prima_producto` bigint(20) NOT NULL,
  `politica` varchar(40) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `numero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultadosecado`
--

CREATE TABLE `resultadosecado` (
  `codigo_resultado` varchar(40) NOT NULL,
  `fecha_resultado` date NOT NULL,
  `cantidad_resultado` bigint(20) NOT NULL,
  `costo_resultado` bigint(20) NOT NULL,
  `costo_total_resultado` bigint(20) NOT NULL,
  `observaciones_resultado` varchar(40) NOT NULL,
  `tipo_pago` varchar(40) NOT NULL,
  `tipograno_resultado` varchar(40) NOT NULL,
  `numero` bigint(20) NOT NULL,
  `nombre_resultado` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `retiro`
--

CREATE TABLE `retiro` (
  `cedula_retiro` bigint(20) NOT NULL,
  `fecha_retiro` date NOT NULL,
  `hora_retiro` time NOT NULL,
  `valor_retiro` bigint(20) NOT NULL,
  `nombre_retiro` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secado`
--

CREATE TABLE `secado` (
  `producto_secado` varchar(40) NOT NULL,
  `numero_latas` bigint(20) NOT NULL,
  `fecha_secado` date NOT NULL,
  `tipo_usuario` varchar(40) NOT NULL,
  `observaciones_secado` varchar(40) NOT NULL,
  `humedad_secado` varchar(40) NOT NULL,
  `codigo_secado` varchar(40) NOT NULL,
  `cedula_secado` bigint(20) NOT NULL,
  `municipio_secado` varchar(40) NOT NULL,
  `tiposecado_resultado` varchar(40) NOT NULL,
  `numero` bigint(20) NOT NULL,
  `nombre_secado` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secadora`
--

CREATE TABLE `secadora` (
  `codigo_secadora` bigint(20) NOT NULL,
  `codigo_producto` varchar(40) NOT NULL,
  `cantidad_secadora` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `cedula_turno` bigint(20) NOT NULL,
  `municipio_turno` varchar(40) NOT NULL,
  `fecha_turno` date NOT NULL,
  `hora_turno` time NOT NULL,
  `turno` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombres` varchar(40) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `municipio` varchar(40) NOT NULL,
  `cedula` bigint(20) NOT NULL,
  `usuario` varchar(40) NOT NULL,
  `clave` varchar(40) NOT NULL,
  `rol` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ahorro`
--
ALTER TABLE `ahorro`
  ADD PRIMARY KEY (`codigo_ahorro`);

--
-- Indices de la tabla `analisisfisico`
--
ALTER TABLE `analisisfisico`
  ADD PRIMARY KEY (`codigo_analisisfisico`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `analisissensorial`
--
ALTER TABLE `analisissensorial`
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `asociados`
--
ALTER TABLE `asociados`
  ADD PRIMARY KEY (`codigo_up`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`marca`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `controlsecadora`
--
ALTER TABLE `controlsecadora`
  ADD PRIMARY KEY (`cod_secadora`);

--
-- Indices de la tabla `liquidacion`
--
ALTER TABLE `liquidacion`
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `noasociados`
--
ALTER TABLE `noasociados`
  ADD PRIMARY KEY (`cedula_noasociados`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`numero`);

--
-- Indices de la tabla `resultadosecado`
--
ALTER TABLE `resultadosecado`
  ADD PRIMARY KEY (`codigo_resultado`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `secado`
--
ALTER TABLE `secado`
  ADD PRIMARY KEY (`codigo_secado`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `analisisfisico`
--
ALTER TABLE `analisisfisico`
  MODIFY `numero` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `analisissensorial`
--
ALTER TABLE `analisissensorial`
  MODIFY `numero` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `asociados`
--
ALTER TABLE `asociados`
  MODIFY `numero` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `numero` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT de la tabla `controlsecadora`
--
ALTER TABLE `controlsecadora`
  MODIFY `cod_secadora` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT de la tabla `liquidacion`
--
ALTER TABLE `liquidacion`
  MODIFY `numero` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT de la tabla `noasociados`
--
ALTER TABLE `noasociados`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `resultadosecado`
--
ALTER TABLE `resultadosecado`
  MODIFY `numero` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de la tabla `secado`
--
ALTER TABLE `secado`
  MODIFY `numero` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
