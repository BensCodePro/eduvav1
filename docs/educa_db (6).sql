-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-07-2024 a las 19:25:23
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
-- Base de datos: `educa_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `articulo_id` int(11) NOT NULL,
  `titulo_articulo` varchar(255) NOT NULL,
  `detalle_articulo` text NOT NULL,
  `categoria_articulo_id` int(11) NOT NULL,
  `imagen_articulo` text NOT NULL,
  `fecha_articulo` date NOT NULL,
  `estado_articulo` varchar(255) NOT NULL DEFAULT 'Publicado',
  `autor_articulo` varchar(255) NOT NULL,
  `autor_foto` text NOT NULL,
  `cant_vista` int(11) NOT NULL DEFAULT 0,
  `cant_comentario` int(11) NOT NULL DEFAULT 0,
  `palabras_claves` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`articulo_id`, `titulo_articulo`, `detalle_articulo`, `categoria_articulo_id`, `imagen_articulo`, `fecha_articulo`, `estado_articulo`, `autor_articulo`, `autor_foto`, `cant_vista`, `cant_comentario`, `palabras_claves`) VALUES
(1, 'Dia del libro', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 1, 'b1.jpg', '2024-06-21', 'Publicado', 'Benjude', 'team1.jpg', 10, 0, 'Educa, alumno'),
(2, 'Eventos del día', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 2, 'b4.jpg', '2024-06-13', 'Publicado', 'Esther', 'team2.jpg', 20, 0, 'Eventos,Estudiantes'),
(3, 'Salida pedagogica', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 3, 'b8.jpg', '2024-06-13', 'Publicado', 'Mauricio', 'team3.jpg', 8, 0, 'ninos, escuela, eventos'),
(4, 'Ceremonia', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 4, 'b1.jpg', '2024-06-19', 'Publicado', 'Benjude', 'team1.jpg', 6, 0, 'Liceo,colegios,acta'),
(5, 'Convivencia', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 5, 'banner2.jpg', '2024-06-17', 'Publicado', 'Mauricio', 'team2.jpg', 9, 0, 'Eventos, acciones'),
(6, 'Reunion', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 6, 'b4.jpg', '2024-06-04', 'Publicado', 'Alan', 'team3.jpg', 20, 0, 'Convivencia,estudiantes, padres,apoderados'),
(7, 'Noticias', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 0, 'b1.jpg', '2024-07-08', 'Publicado', 'Benjude', 'team1.jpg', 0, 0, 'educa, prueba'),
(8, 'Noticias1', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 0, 'b1.jpg', '2024-07-11', 'Publicado', 'Benjude', 'team2.jpg', 6, 0, 'Educa, Evento'),
(9, 'Noticias 3', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 0, 'b1.jpg', '0000-00-00', 'Publicado', 'Benjude', 'team1.jpg', 0, 0, 'Educa, Dem, prueba'),
(10, 'Noticias 4', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 0, 'b1.jpg', '2024-07-04', 'Publicado', 'benjude', 'team1.jpg', 0, 0, 'Dem, educa, web'),
(11, ' Noticias5', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 0, 'b1.jpg', '2024-07-05', 'Publicado', 'Benjude', 'team1.jpg', 6, 0, 'Educa'),
(12, ' Noticias6', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 0, 'b1.jpg', '2024-07-01', 'Publicado', 'Benjude', 'team1.jpg', 30, 0, 'Educa, DEM,Convenios'),
(13, ' Noticias5', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 0, 'b1.jpg', '2024-07-05', 'Publicado', 'Benjude', 'team1.jpg', 6, 0, 'Educa'),
(14, ' Noticias6', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 0, 'b1.jpg', '2024-07-12', 'Publicado', 'Benjude', 'team1.jpg', 5, 0, 'Educa, DEM,Convenios'),
(15, 'Noticias7', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 0, 'b1.jpg', '0000-00-00', 'Publicado', 'Benjude', 'team1.jpg', 0, 0, 'Educa,Dem, Evento'),
(16, 'Noticias8', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 0, 'b1.jpg', '2024-07-11', 'Publicado', '', 'team1.jpg', 0, 0, 'Dem, educa'),
(17, 'Noticias9', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 0, 'b1.jpg', '2024-07-11', 'Publicado', 'Benjude', 'team1.jpg', 0, 0, 'Educa, Dem'),
(18, 'Noticias10', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 0, 'b1.jpg', '2024-07-11', 'Publicado', 'Benjude', 'team1.jpg', 0, 0, 'Educa, Dem, evento'),
(19, 'Noticias11', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 0, 'b1.jpg', '2024-07-05', 'Publicado', 'Benjude', 'team.jpg', 0, 0, 'Educa, dem'),
(20, 'Noticias12', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 0, 'b1.jpg', '0000-00-00', 'Publicado', 'Benjude', 'team1.jpg', 0, 0, 'Educa,dem'),
(21, 'Noticias13', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 0, 'b1.jpg', '2024-07-12', 'Publicado', 'Mauricio', 'team.jpg', 0, 0, 'Educa,Dem'),
(22, 'Noticias14', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 0, 'b1.jpg', '2024-07-18', 'Publicado', 'Benjude', 'team1.jpg', 0, 0, 'Dem,educa, evento'),
(23, 'Noticias14', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 0, 'b1.jpg', '2024-07-12', 'Publicado', 'Benjude', 'team1.jpg', 0, 0, 'Educa, Dem, Convivencia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `categoria_id` int(11) NOT NULL,
  `categoria_nombre` varchar(255) NOT NULL,
  `categoria_cant_articulo` int(11) NOT NULL,
  `total_vista_articulo` int(11) NOT NULL,
  `categoria_estado` varchar(11) NOT NULL DEFAULT 'Publicado',
  `fecha_creado` date NOT NULL,
  `creado_por` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`categoria_id`, `categoria_nombre`, `categoria_cant_articulo`, `total_vista_articulo`, `categoria_estado`, `fecha_creado`, `creado_por`) VALUES
(1, 'Convivencia', 1, 0, 'Publicado', '2024-06-21', 'Benjude'),
(2, 'PIE', 1, 0, 'Publicado', '2024-06-20', 'Alan'),
(3, 'Comunidad', 0, 0, 'Publicado', '2024-06-23', 'Mauricio'),
(4, 'Eventos', 0, 0, 'Publicado', '2024-06-10', 'Dave'),
(5, 'Cuenta Pública', 0, 0, 'Publicado', '2024-06-24', 'Benjude'),
(6, 'Baile', 0, 0, 'Publicado', '2024-06-18', 'Sebastian'),
(7, 'Educa', 0, 0, 'Publicado', '2024-07-12', 'Benjude'),
(8, 'Salud', 0, 0, 'Publicado', '2024-07-11', 'Camila');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `com_id` int(11) NOT NULL,
  `com_titulo` varchar(255) NOT NULL,
  `com_articulo_id` int(11) NOT NULL,
  `com_imagen` text NOT NULL,
  `com_detalle` varchar(255) NOT NULL,
  `com_usuario_id` int(11) NOT NULL,
  `com_autor` varchar(255) NOT NULL,
  `com_estado` varchar(255) NOT NULL DEFAULT 'noaprobado',
  `com_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`com_id`, `com_titulo`, `com_articulo_id`, `com_imagen`, `com_detalle`, `com_usuario_id`, `com_autor`, `com_estado`, `com_date`) VALUES
(1, 'Educación', 0, 'team1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare, leo viverra vehicula cursus, neque justo lacinia libero, eu aliquam velit nulla rhoncus libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed mi a nisl laoreet lobort', 0, 'Benjude', 'Aprobado', '2024-07-11'),
(2, 'Dem', 0, 'team2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare, leo viverra vehicula cursus, neque justo lacinia libero, eu aliquam velit nulla rhoncus libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed mi a nisl laoreet lobort', 0, 'Mauricio', 'Aprobado', '2024-07-11'),
(8, 'Comentario', 0, 'team1.jpg', 'Gracias por enviarme tu mensaje, tes respondo a la brevedad!', 0, 'Benjude', 'Aprobado', '2024-07-06'),
(9, 'Comentario', 0, 'team1.jpg', 'Me gusta tus comentarios Ben!', 0, 'Mauricio', 'Aprobado', '2024-07-05'),
(10, 'Comentario', 0, 'team1.jpg', 'Me gusta tus comentarios Ben!', 0, 'Mauricio', 'Aprobado', '2024-07-19'),
(11, 'Comentario', 0, 'team1.jpg', 'Me gusta tus comentarios Ben!', 0, 'Mauricio', 'Aprobado', '2024-07-12'),
(12, 'Comentario', 0, 'team1.jpg', 'Me gusta tus comentarios Ben!', 0, 'Mauricio', 'Aprobado', '2024-07-11'),
(13, 'Comentario', 0, 'team1.jpg', 'Me gusta tus comentarios Ben!', 0, 'Mauricio', 'Aprobado', '2024-07-10'),
(14, 'Comentario', 0, 'team1.jpg', 'ssdss', 0, 'Benjude', 'Aprobado', '0000-00-00'),
(15, 'Comentario', 0, 'team1.jpg', 'Este es mi mensaje porfa!', 0, 'Joseph', 'Aprobado', '0000-00-00'),
(16, 'Comentario', 0, 'team1.jpg', 'Este es mi mensaje porfa!', 0, 'Joseph', 'Aprobado', '0000-00-00'),
(32, 'Comentario', 0, 'team1.jpg', 'es mi mensaje...', 0, 'Leo', 'noaprobado', '0000-00-00'),
(33, 'Comentario', 0, 'team1.jpg', 'es mi mensaje...', 0, 'Leo', 'noaprobado', '0000-00-00'),
(34, 'Comentario', 1, 'team1.jpg', 'Hola Leo, te voy a responder en brevedad sobre tu  solicitudes!', 0, 'Benju', 'noaprobado', '0000-00-00'),
(35, 'Comentario', 1, 'team1.jpg', 'Hola Leo, te voy a responder en brevedad sobre tu  solicitudes!', 0, 'Benju', 'noaprobado', '0000-00-00'),
(36, 'Comentario', 4, 'team1.jpg', 'Este es mi comentario', 0, 'Benjude', 'noaprobado', '0000-00-00'),
(37, 'Comentario', 4, 'team1.jpg', 'Este es mi comentario', 0, 'Benjude', 'noaprobado', '0000-00-00'),
(38, 'Comentario', 4, 'team1.jpg', 'Mi nuevo mensaje...', 0, 'Joseph', 'noaprobado', '0000-00-00'),
(39, 'Comentario', 4, 'team1.jpg', 'Mi nuevo mensaje...', 0, 'Joseph', 'noaprobado', '0000-00-00'),
(40, 'Comentario', 4, 'team1.jpg', 'Mi nuevo mensaje...', 0, 'Joseph', 'noaprobado', '0000-00-00'),
(41, 'Comentario', 4, 'team1.jpg', 'Mi nuevo mensaje...', 0, 'Joseph', 'noaprobado', '0000-00-00'),
(42, 'Comentario', 4, 'team1.jpg', 'Mi nuevo mensaje...', 0, 'Joseph', 'noaprobado', '0000-00-00'),
(43, 'Comentario', 0, 'team1.jpg', 'Este es mi mensaje', 0, 'Juan', 'noaprobado', '0000-00-00'),
(44, 'Comentario', 0, 'team1.jpg', 'Este es mi mensaje', 0, 'Juan', 'noaprobado', '0000-00-00'),
(45, 'Comentario', 0, 'team1.jpg', 'Este es mi mensaje', 0, 'Juab Pablo', 'noaprobado', '0000-00-00'),
(46, 'Comentario', 0, 'team1.jpg', 'Este es mi mensaje', 0, 'Juab Pablo', 'noaprobado', '0000-00-00'),
(47, 'Comentario', 4, 'team1.jpg', 'Es un blog que me gusta bastante!', 0, 'Joseph', 'noaprobado', '0000-00-00'),
(48, 'Comentario', 4, 'team1.jpg', 'Es un blog que me gusta bastante!', 0, 'Joseph', 'noaprobado', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `curso_id` int(11) NOT NULL,
  `curso_titulo` varchar(255) NOT NULL,
  `contenido_curso` text NOT NULL,
  `categoria_curso` varchar(255) NOT NULL,
  `imagen_curso` text NOT NULL,
  `fecha_creacion` date NOT NULL,
  `estado_curso` varchar(255) NOT NULL DEFAULT 'Publicado',
  `autor_curso` text NOT NULL,
  `cant_estudiantes` int(11) NOT NULL,
  `cant_vista_curso` int(11) NOT NULL,
  `cant_comentario` int(11) NOT NULL,
  `palabras_claves` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`curso_id`, `curso_titulo`, `contenido_curso`, `categoria_curso`, `imagen_curso`, `fecha_creacion`, `estado_curso`, `autor_curso`, `cant_estudiantes`, `cant_vista_curso`, `cant_comentario`, `palabras_claves`) VALUES
(1, 'Matemática', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 'Math', 'b6.jpg', '2024-06-06', 'Publicado', 'Mauricio', 0, 0, 0, 'Algebra, Calculo,Geometria'),
(2, 'Biología', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 'Celula, Cabeza, Cuerpo', 'b5.jpg', '2024-06-19', 'Publicado', 'Benjude', 0, 0, 0, 'Cuerpo,Sanacion, Salud'),
(3, 'Programacion', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 'Web', 'b6.jpg', '2024-06-13', 'Publicado', 'Joseph', 0, 0, 0, 'Html, css, javascript'),
(4, 'Clima', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 'Ambiente', 'banner1.jpg', '2024-06-24', 'Publicado', 'Juan', 0, 0, 0, 'Clima, Humano,cooperacion'),
(5, 'Deporte', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 'Fisica', 'b8.jpg', '2024-06-26', 'Publicado', 'Sergio', 20, 0, 0, 'Deporter,Maraton, ejercicio'),
(6, 'Algebra', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 'Calculo', 'b5.jpg', '2024-06-20', 'Publicado', 'Daniel', 0, 0, 0, 'Dimencion,grado,ecuacion'),
(7, 'Convivencia', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum', 'Convivencia', 'b7.jpg', '2024-06-13', 'Publicado', 'Leo', 0, 0, 0, 'Convivencia, Eventos'),
(8, 'Idioma', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas \"Letraset\", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.', 'Idioma, comunicacion', 'banner2.jpg', '0000-00-00', 'Publicado', 'Sergio', 0, 0, 0, 'Idioma, convivencia,comunicacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `test`
--

INSERT INTO `test` (`id`, `name`) VALUES
(1, 'Benjude'),
(2, 'Esther'),
(3, 'Lauture'),
(4, 'Steve'),
(5, 'Elon');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL,
  `usuario_nombre` varchar(255) NOT NULL,
  `usuario_sobrenome` varchar(255) NOT NULL,
  `usuario_correo` varchar(255) NOT NULL,
  `usuario_password` varchar(255) NOT NULL,
  `usuario_fotos` text NOT NULL,
  `registro_en` varchar(255) NOT NULL,
  `usuario_rol` varchar(255) NOT NULL DEFAULT 'Subscribio'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `usuario_nombre`, `usuario_sobrenome`, `usuario_correo`, `usuario_password`, `usuario_fotos`, `registro_en`, `usuario_rol`) VALUES
(2, 'MauricioFuentes', 'Mauri', 'mmmfe@demtsgo.cl', '$2y$10$oF6/NUkTvqWU6Fy9M7HTHOW4S6IqRLRHi5SOtfWylAN7EAqH3buG6', 'photo', '2024-06-25 23:10:18', 'Admin'),
(3, 'JuanPablo', 'Jp', 'jpablo@demstgo.cl', '$2y$10$2.ycUu82GbXl2sSySkVRVuFkV9yPfzgqWlC0yDqNS.Gi6RvAQU0TG', 'photo', '2024-06-25 23:12:08', 'Admin'),
(5, 'Jonh Doe', 'Joe', 'jonhdoe@gmail.com', '$2y$10$gwq5WE.Ac7xS.OTd12yss.OPU0L3kUaqM5xQgaTsmA1PKByyidNJq', 'default-logo.png', '2024-06-26 02:08:10', 'Admin'),
(6, 'JonhDoe', 'Joul', 'jonhdoe@gmail.com', '$2y$10$w4fBaXB.g3vld1xISqnFWuXR0RVcSAD9BF8de6Ma0yWbFy0sTBZnW', 'default-logo.png', '2024-06-26 02:23:14', 'Admin'),
(7, 'EstherCroisy', 'Love', 'ester@gmail.com', '$2y$10$R7ybtCO631CHVjQ9XMTUw.Aomig6yp.mtkvY6tIYpcbVkr6Ltiq/m', 'default-logo.png', '2024-06-26 02:23:48', 'Admin'),
(8, 'JavieraCarrera', 'Jesi', 'jjjj@demstgo.cl', '$2y$10$nKlyp8MYJTBhIPb0YscW2eFWdRweKEucD44OceQ3WzaothY3FVwIy', 'default-logo.png', '2024-06-26 02:32:41', 'Admin'),
(9, 'JavieraCarrera', 'j1', '', '$2y$10$qqrP7XxMdSY/wGAuWOm6m.DVPXkvwChE7eOCrW3XW5o1pyJP4Oss.', 'default-logo.png', '2024-06-26 02:34:26', 'Admin'),
(10, 'JavieraCarrera', 'Jesis', 'jesi@demstgo.cl', '$2y$10$1JFpw7Pi3xtlkAnXeHGQ/uYpzA2lm.hTUI7lpA5t7KbzVTymzpIZW', 'default-logo.png', '2024-06-26 02:35:00', 'Admin'),
(11, 'JavieraCarrera', 'jet', '', '$2y$10$WQWpRoR5rU4lJwF9Gb8zY.DuCk.MoOsWgnbQE1kO06V21ZSBWxN0O', 'default-logo.png', '2024-06-26 02:35:04', 'Admin'),
(12, 'Ronald Premier', 'Pre', 'ronald@gmail.com', '$2y$10$OqW9LfSuve.3FKXFAwutW.y0YTQKF.1W8XptylPw0mTmPePiQueBe', 'default-logo.png', '2024-06-26 02:35:31', 'Admin'),
(13, 'RonaldPremier', 'pre1', 'ronald@gmail.com', '$2y$10$WTprQaYkQ8fmpL4NoY8cFOo4k0zYkN88/pv.SN8Bl65zyAla72PPS', 'default-logo.png', '2024-06-26 02:37:58', 'Subscribio'),
(14, 'RonaldPremier', '', 'ronald@gmail.com', '$2y$10$vB5EU.QcBX8Q1JBSWqtP9uCyvACD1igO2o8D.nNaphBhTc/O5hF9W', 'default-logo.png', '2024-06-26 02:46:17', 'Subscribio'),
(15, 'RonaldPremier', 'pre2', 'ronald@gmail.com', '$2y$10$vam1vqtEgL8qX3U/JDAQG.KLDBJbJPH5SVkL.K1ixkb2i/0WYwda.', 'default-logo.png', '2024-06-26 02:48:09', 'Subscribio'),
(16, 'RonaldPremier', 'pre3', 'ronald@gmail.com', '$2y$10$dfJ91/Dl2BT0oAMRllU1eezrF5rPiUrHHLPtWBvjWWka.v0/cHnhm', 'default-logo.png', '2024-06-26 02:52:51', 'Subscribio'),
(17, 'RonaldPremier', 'pre4', 'ronald@gmail.com', '$2y$10$SvxY2Z941NY/cB3dwgHFLeswfpxC7A7GdtDCVwMLE7Y.x5AfD/gMC', 'default-logo.png', '2024-06-26 02:53:25', 'Subscribio'),
(18, 'RonaldPremier', '', 'ronald@gmail.com', '$2y$10$5SJBpDfLryb.oBtNwk5H0O5C.FEaOZcYPmLPbV6TcnBMVsqEvABxK', 'default-logo.png', '2024-06-26 02:56:50', 'Subscribio'),
(19, 'RonaldPremier', 'pre5', 'ronald@gmail.com', '$2y$10$dqNOkKpZQHfZ4klbA5itruibW5ZGXDidCgRtoLIHUagMm/DNhyEIC', 'default-logo.png', '2024-06-26 02:56:54', 'Subscribio'),
(20, 'SadracPierre', 'sedra', 'sadrac@gmail.com', '$2y$10$D37b.WrW6rtphDDZodaBXex.hj/E2JtFOT83bTt8z1T4aecdBxMau', 'default-logo.png', '2024-06-26 02:57:55', 'Subscribio'),
(21, 'SadracPierre', 'Sedri', 'sadrac@gmail.com', '$2y$10$ao0rUhgWcZ8SDYECl55poOaJfJWusFFN3bKbM8aJPctYi4c3udqc2', 'default-logo.png', '2024-06-26 03:02:43', 'Subscribio'),
(22, 'DavidJean', 'dave', 'david@gmail.com', '$2y$10$R9j3TMcsrpfkva9xzeVhzeVfEk9fK5UsmVQDjhm3zQdlJUC.SxTSu', 'default-logo.png', '2024-06-26 03:03:45', 'Subscribio'),
(23, 'DavidJean', 'david@jeangmail.com', 'david@gmail.com', '$2y$10$B4zqyasN.f1us/swaUjxN.F2qph61NLBdDm8TgJ1E/pZRC1oJlujS', 'default-logo.png', '2024-06-26 03:21:23', 'Subscribio'),
(24, 'DavidJean', 'david@jeangmail.com', 'david@gmail.com', '$2y$10$PZpwFVOjVOCsilKMPGerPeHNajqRrzvZl6itm9E5u/dvtW/30pMtu', 'default-logo.png', '2024-06-26 04:10:53', 'Subscribio'),
(25, 'DavidJean', 'david@jeangmail.com', 'david@gmail.com', '$2y$10$Nrgg2tJSkKdB.g9a2UVyLuSBA3P.urqjKGY39P69l3gjjG.MCRJz6', 'default-logo.png', '2024-06-26 04:11:26', 'Subscribio'),
(38, 'SteveJob', 'Steve', 'steve@gmail.com', '5ebe2294ecd0e0f08eab7690d2a6ee69', 'default-logo.png', '2024-06-30 18:37:14', 'Subscribio'),
(42, 'Premier', 'Go', 'benjudepremier10@gamil.com', '$2y$10$DnuGZ6EwZZAytsrX5fCLO.xhlqgkyKIeEXJft0roWvixQCJtDrVRm', 'default-logo.png', 'Jun 6, 2024 at 11:56 PM', 'Subscribio'),
(46, 'Fejes', 'Jos', 'jfejes@demstgo.cl', '$2y$10$vTWjjMVDUvd3yVYUAgycS.4ti/59MdITHD2tfYTz49TFlEK2L9ZRm', 'default-logo.png', 'Jul 7, 2024 at 01:17 AM', 'Subscribio'),
(47, 'Premier', 'Kerben', 'bpremier@demstgo.cl', '$2y$10$ixqK.IpoqG5SeiSXeiuM0ux.C7/Ne2jHB6GlHMl.f2E/ElA/FCzPa', 'default-logo.png', 'Jul 7, 2024 at 01:22 AM', 'Admin'),
(48, 'RodrigoRoco', 'Rog', 'rodrigo@demstgo.cl', '$2y$10$jqrJCP3H4oqoRZKGKevlf.g3kawHSEAYIwC9yaMFyORe.1qp5.f/O', 'default-logo.png', 'Jul 7, 2024 at 01:24 AM', 'Subscribio'),
(49, 'SergioIbañez', 'Sergito', 'sergio@demstgo.cl', '$2y$10$B6T7m7thE1D2DWSu8hwfJelQFNOvboxjFcpISgSulluoFXlOV3k0i', 'default-logo.png', 'Jul 7, 2024 at 06:10 PM', 'Subscribio');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`articulo_id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`com_id`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`curso_id`);

--
-- Indices de la tabla `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `articulo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `categoria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `curso_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
