-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         10.1.10-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para bancosangre
CREATE DATABASE IF NOT EXISTS `bancosangre` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `bancosangre`;


-- Volcando estructura para tabla bancosangre.bancodesangre
CREATE TABLE IF NOT EXISTS `bancodesangre` (
  `id_ban` int(11) NOT NULL AUTO_INCREMENT,
  `id_usu` int(10) unsigned NOT NULL,
  `direccion_ban` varchar(45) DEFAULT NULL,
  `tipoinstitucion_ban` varchar(45) DEFAULT NULL,
  `tipobanco_ban` varchar(45) DEFAULT NULL,
  `numerocamas_ban` varchar(45) DEFAULT NULL,
  `responsable_ban` varchar(45) DEFAULT NULL,
  `cargo_ban` varchar(45) DEFAULT NULL,
  `correo_ban` varchar(45) DEFAULT NULL,
  `telefono_ban` varchar(45) DEFAULT NULL,
  `celular_ban` varchar(45) DEFAULT NULL,
  `listaetiquetas_ban` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_ban`),
  UNIQUE KEY `id_ban_UNIQUE` (`id_ban`),
  KEY `fk_bancodesangre_usuario1_idx` (`id_usu`),
  CONSTRAINT `fk_bancodesangre_usuario1` FOREIGN KEY (`id_usu`) REFERENCES `usuario` (`id_usu`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bancosangre.bancodesangre: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `bancodesangre` DISABLE KEYS */;
/*!40000 ALTER TABLE `bancodesangre` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
