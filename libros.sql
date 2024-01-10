-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-10-2018 a las 23:04:10
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `brs`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `codigo` char(6) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `autor` varchar(20) DEFAULT NULL,
  `año` varchar(4) DEFAULT NULL,
  `genero` varchar(10) DEFAULT NULL,
  `sipnopsis` varchar(120) DEFAULT NULL,
  `editorial` varchar(20) DEFAULT NULL,
  `descripcion` varchar(20) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`codigo`, `nombre`, `autor`, `año`, `genero`, `sipnopsis`, `editorial`, `descripcion`, `foto`) VALUES
('LIB002', 'La Iliada', 'Homero', '1488', 'Epico', 'Exalta los orígenes del pueblo romano a través de Eneas, héroe troyano de estirpe divina.', 'Juventud', '80p, 12cm', 'iliada'),
('LIB003', 'Eneida', 'Virgilio', '1887', 'Epico', 'tiene como argumento un episodio del último año de la guerra de Troya: la cólera de Aquiles', 'Juventud', '100p, 13cm', 'Eneida'),
('LIB004', 'Ramayana', 'Valmiki', '1995', 'Epico', 'Forma parte de los Smriti hindúes (textos no revelados directamente por Dios, sino transmitidos por la tradición', 'Juventud', '120p, 12cm', 'ramayada'),
('LIB005', 'Cantar de Roldan', 'Anonimo', '1922', 'Epico', 'Difundido por los juglares en plazas y castillos, el poema constituye, al tiempo, una exaltación de los grandes valores ', 'Juventud', '111p, 13cm', 'cantar'),
('LIB006', 'Cantar del Mio Cid', 'Anonimo', '1908', 'Epico', 'El Cantar de mio Cid es un poema épico anónimo del siglo XII que refiere las hazañas de madurez del Cid, en torno al epi', 'Juventud', '130p, 14cm', 'miocid'),
('LIB007', 'Mahabharata', 'Viasa', '2006', 'Epico', 'El Mahabharata es la gran epopeya de la India. Describe el combate sin piedad que libraron las dos ramas de los Bharata', 'Juventud', '100p, 15cm', 'mahaba'),
('LIB001', 'La odisea', 'Homero', '1488', 'Epico', 'Narra las aventuras, peligros y desafíos que vivió', 'Juventud', '200p, 12cm', 'odisea'),
('LIB008', 'La Henriada', 'Voltaire', '1723', 'Epico', 'El asunto de la obra es el asedio de París, en 1589, por parte de Enrique III y Enrique de Navarra.', 'Juventud', '150p, 12cm', 'henriada'),
('LIB009', 'La Divina comedia', 'Dante Alighieri', '1321', 'Epico', 'Dante comienza su viaje imaginario,debiendo ser guiado por el poeta Virgilio para conseguir salir, atravesando el infier', 'Juventud', '200p, 12cm', 'divina'),
('LIB010', 'Don Quijote de la Mancha', 'Miguel Cervantes', '1645', 'Dramatico', ' Publicada su primera parte con el título de El ingenioso hidalgo don Quijote de la Mancha a comienzos de 1605.', 'Francisco de Robles', '210p, 12cm', 'quijote'),
('LIB011', 'Edipo Rey', 'Sófocles', 'A.C', 'Lirico', 'Rey de Tebas, hijo de Layo y Yocasta, rey y reina de Tebas respectivamente', '-----', '80p, 12cm', 'edipo'),
('LIB012', 'Hamlet', 'William Shakespeare', '1609', 'Lirico', 'Esta obra de teatro gira en torno a las tribulaciones de Hamlet, cuyo padre, el rey de Dinamarca, ha muerto.', 'satillana', '300p, 11cm', 'hamlet'),
('LIB013', 'La Filomena', 'Lope Vega', '1621', 'Epico', 'En una época en la que Góngora aún confía la difusión de sus mejores obras\r\npoéticas a copias manuscritas', 'Cocodilo', '60p, 9cm', 'filomena'),
('LIB014', 'La vida es sueño', ' Pedro Calderón Barc', '1635', 'Dramatico', 'La vieja historia de un joven príncipe desterrado por el padre que desea evitar el fatal vaticinio de las estrellas', 'Corefo', '150p, 14cm', 'vidasueño'),
('LIB015', 'Otelo', ' William Shakespeare', '1603', 'Dramatico', 'General al servicio de Venecia, ha conquistado el amor de Desdémona, hija del senador veneciano Brabantio, relatándole s', 'Santillana', '180p, 12cm', 'otelo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
