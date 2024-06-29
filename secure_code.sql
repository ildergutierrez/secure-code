-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2024 a las 04:29:29
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `secure code`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `csharp`
--

CREATE TABLE `csharp` (
  `id` int(100) NOT NULL,
  `id_Autor` int(11) NOT NULL,
  `Autor` varchar(70) NOT NULL,
  `Nombre` varchar(80) NOT NULL,
  `Descripcion` varchar(600) NOT NULL,
  `Lenguaje` varchar(16) NOT NULL,
  `Acceso` varchar(800) NOT NULL,
  `clic` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `java`
--

CREATE TABLE `java` (
  `id` int(100) NOT NULL,
  `id_Autor` int(11) NOT NULL,
  `Autor` varchar(70) NOT NULL,
  `Nombre` varchar(80) NOT NULL,
  `Descripcion` varchar(600) NOT NULL,
  `Lenguaje` varchar(16) NOT NULL,
  `Acceso` varchar(800) NOT NULL,
  `clic` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `img` varchar(600) NOT NULL,
  `cuerpo` varchar(800) NOT NULL,
  `ruta` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `img`, `cuerpo`, `ruta`) VALUES
(1, 'La inteligencia artificial nos llevará a niveles mayores de productividad: Mintic', 'https://www.elespectador.com/resizer/yfCzCWWhay7_-zdTINWq0uN0lZo=/920x613/filters:quality(60):format(jpeg)/www.elespectador.com/resizer/x-YsVOdRHHFP5ys1c_8n8aFLl90=/arc-anglerfish-arc2-prod-elespectador/public/UUP4QK7D6REVNAEXOGZS6F3GP4.jpg', 'La inteligencia artificial tiene un alto potencial disruptivo. La capacidad que ha demostrado la IA generativa, con casos tan puntuales como Chat GPT, Gemini y Copilot (como lo es redactar textos, crear imágenes y hacer otro tipo de tareas en segundos y que a los humanos les puede tomar horas) es tan solo una muestra de lo que puede hacer este nuevo boom tecnológico.', 'https://www.elespectador.com/economia/la-inteligencia-artificial-nos-llevara-a-niveles-mayores-de-productividad-mintic/'),
(2, 'La guerra por la música generada con IA sigue escalando: las grandes discográficas han demandado a Suno AI y Udio', 'https://i.blogs.es/1ad6b7/musica-portada/1200_800.jpeg', 'La Asociación de la Industria Discográfica de Estados Unidos (RIAA) ha demandado a Suno y Udio por infracción de derechos de autor. El escrito señala que las mencionadas compañías utilizaron décadas de material de diversos sellos discográficos para entrenar algoritmos de inteligencia artificial (IA) capaces de generar música sintética con potencial para “saturar el mercado”.', 'https://www.xataka.com/robotica-e-ia/guerra-musica-generada-ia-sigue-escalando-grandes-discograficas-han-demandado-a-suno-ai-udio'),
(3, 'NVIDIA venderá sus GPU para IA en Oriente Medio a pesar de las sanciones. Representa una oportunidad para China', 'https://i.blogs.es/1c3e80/nvidia-ap/1200_800.jpeg', 'Las sanciones a China aprobadas por el Gobierno de EEUU han dañado el negocio de algunas grandes compañías tecnológicas, como ASML, Intel, AMD o NVIDIA. La demanda de GPU para inteligencia artificial (IA) es tan alta que esta última empresa continúa creciendo con un ritmo abrumador, pero lo cierto es que no puede vender a sus clientes chinos buena parte de sus GPU. Y, curiosamente, las sanciones no solo condicionan sus negocios en China; también restringen las ventas que puede llevar a cabo en otras regiones del planeta.', 'https://www.xataka.com/robotica-e-ia/nvidia-vendera-sus-gpu-para-ia-oriente-medio-a-pesar-sanciones-representa-oportunidad-para-china'),
(4, 'Cómo funciona el dispositivo implantado por primera vez en el mundo en el cráneo de un niño para controlar la epilepsia', 'https://ichef.bbci.co.uk/ace/ws/800/cpsprodpb/7451/live/8b1e8470-3220-11ef-a044-9d4367d5b599.jpg.webp', 'Un niño con epilepsia severa se convirtió en el primer paciente del mundo en probar un nuevo dispositivo colocado en su cráneo para controlar las convulsiones.', 'https://www.bbc.com/mundo/articles/cw8881n91zjo'),
(5, 'Asistentes virtuales: la voz del amo', 'https://imagenes.elpais.com/resizer/v2/PS4WVC32LRGXPHIGT2NDROXOOY.jpeg?auth=396c43c2ce3fdcafc56a74a36545a884e76fc7e8e8f3e5343792aa9dc75d9708&width=828&height=466&focal=2299%2C1407', 'El mayor triunfo de los asistentes virtuales es que nos dan la sensación de que alguien, en este mundo en que no somos relevantes más que como parte de una clientela, nos escucha, atiende y obedece', 'https://elpais.com/noticias/tecnologia/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicidad`
--

CREATE TABLE `publicidad` (
  `id` int(100) NOT NULL,
  `Empresa` varchar(60) NOT NULL,
  `Url` varchar(800) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `clic` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Fecha_L` date NOT NULL,
  `Pagos` int(1) NOT NULL,
  `Forma_de_Pago` int(2) NOT NULL,
  `dias` int(4) NOT NULL,
  `Mensualidad` int(10) NOT NULL,
  `ultimopago` date NOT NULL,
  `empleado` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `publicidad`
--

INSERT INTO `publicidad` (`id`, `Empresa`, `Url`, `imagen`, `clic`, `Fecha`, `Fecha_L`, `Pagos`, `Forma_de_Pago`, `dias`, `Mensualidad`, `ultimopago`, `empleado`) VALUES
(1, 'Chers Aguachica', 'https://www.instagram.com/chers_aguachica/', 'chers_aguachica_instagran.gif', 2, '2024-06-18', '2024-07-18', 1, 0, 0, 0, '0000-00-00', 0),
(2, 'Chers Aguachica', 'https://www.facebook.com/chersaguachica', 'chers_aguachica.gif', 2, '2024-06-18', '2024-07-18', 1, 0, 0, 0, '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `python`
--

CREATE TABLE `python` (
  `id` int(100) NOT NULL,
  `id_Autor` int(11) NOT NULL,
  `Autor` varchar(70) NOT NULL,
  `Nombre` varchar(80) NOT NULL,
  `Descripcion` varchar(600) NOT NULL,
  `Lenguaje` varchar(16) NOT NULL,
  `Acceso` varchar(800) NOT NULL,
  `clic` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(60) DEFAULT NULL,
  `Correo` varchar(80) DEFAULT NULL,
  `contrasena` varchar(3000) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Ingreso` date NOT NULL,
  `verificacion` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `csharp`
--
ALTER TABLE `csharp`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `java`
--
ALTER TABLE `java`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `publicidad`
--
ALTER TABLE `publicidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `python`
--
ALTER TABLE `python`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `csharp`
--
ALTER TABLE `csharp`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `java`
--
ALTER TABLE `java`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `publicidad`
--
ALTER TABLE `publicidad`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `python`
--
ALTER TABLE `python`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
