-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.9-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para db_ecodata
CREATE DATABASE IF NOT EXISTS `db_ecodata` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_ecodata`;


-- Volcando estructura para tabla db_ecodata.accesos
CREATE TABLE IF NOT EXISTS `accesos` (
  `Id_Accesos` int(11) NOT NULL AUTO_INCREMENT,
  `IdUsuario_Acceso` int(11) NOT NULL,
  `Fecha_Acceso` varchar(20) NOT NULL,
  `Hora_Acceso` varchar(20) NOT NULL,
  `IP_Acceso` varchar(20) NOT NULL,
  PRIMARY KEY (`Id_Accesos`),
  KEY `IdUsuario_Acceso` (`IdUsuario_Acceso`),
  CONSTRAINT `accesos_ibfk_1` FOREIGN KEY (`IdUsuario_Acceso`) REFERENCES `usuarios` (`Id_Usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla db_ecodata.accesos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `accesos` DISABLE KEYS */;
/*!40000 ALTER TABLE `accesos` ENABLE KEYS */;


-- Volcando estructura para tabla db_ecodata.ciudades
CREATE TABLE IF NOT EXISTS `ciudades` (
  `Id_Ciudad` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Ciudad` varchar(20) NOT NULL,
  PRIMARY KEY (`Id_Ciudad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla db_ecodata.ciudades: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `ciudades` DISABLE KEYS */;
/*!40000 ALTER TABLE `ciudades` ENABLE KEYS */;


-- Volcando estructura para tabla db_ecodata.datosrecogidos
CREATE TABLE IF NOT EXISTS `datosrecogidos` (
  `Id_Datos` int(11) NOT NULL AUTO_INCREMENT,
  `Valor_Datos` decimal(10,2) NOT NULL,
  `Fecha_Datos` date NOT NULL,
  `Hora_Datos` time NOT NULL,
  PRIMARY KEY (`Id_Datos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla db_ecodata.datosrecogidos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `datosrecogidos` DISABLE KEYS */;
/*!40000 ALTER TABLE `datosrecogidos` ENABLE KEYS */;


-- Volcando estructura para tabla db_ecodata.estado_usuario
CREATE TABLE IF NOT EXISTS `estado_usuario` (
  `Id_Estado` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Estado` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id_Estado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla db_ecodata.estado_usuario: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `estado_usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `estado_usuario` ENABLE KEYS */;


-- Volcando estructura para tabla db_ecodata.metodo
CREATE TABLE IF NOT EXISTS `metodo` (
  `Id_Metodo` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Met` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_Metodo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla db_ecodata.metodo: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `metodo` DISABLE KEYS */;
/*!40000 ALTER TABLE `metodo` ENABLE KEYS */;


-- Volcando estructura para tabla db_ecodata.modulo
CREATE TABLE IF NOT EXISTS `modulo` (
  `Id_Modulo` int(11) NOT NULL AUTO_INCREMENT,
  `Mac_Mod` varchar(50) NOT NULL,
  `IP_Mod` varchar(20) NOT NULL,
  `Longitud_Mod` varchar(30) NOT NULL,
  `Latitud_Mod` varchar(30) NOT NULL,
  `Direccion_Mod` varchar(150) NOT NULL,
  `Usuario_Mod` varchar(50) NOT NULL,
  `Clave_Mod` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_Modulo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla db_ecodata.modulo: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `modulo` DISABLE KEYS */;
/*!40000 ALTER TABLE `modulo` ENABLE KEYS */;


-- Volcando estructura para tabla db_ecodata.pagos
CREATE TABLE IF NOT EXISTS `pagos` (
  `Id_Pago` int(11) NOT NULL,
  `IdPersona_Pag` int(11) NOT NULL,
  `IdMetodo_Pag` int(11) NOT NULL,
  `Fecha_Pag` datetime NOT NULL,
  `Comprobante_Pag` varchar(50) NOT NULL,
  `Estado_Pag` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id_Pago`),
  KEY `FK_pagos_metodo` (`IdMetodo_Pag`),
  KEY `FK_pagos_persona` (`IdPersona_Pag`),
  CONSTRAINT `FK_pagos_metodo` FOREIGN KEY (`IdMetodo_Pag`) REFERENCES `metodo` (`Id_Metodo`),
  CONSTRAINT `FK_pagos_persona` FOREIGN KEY (`IdPersona_Pag`) REFERENCES `persona` (`Id_Persona`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla db_ecodata.pagos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `pagos` DISABLE KEYS */;
/*!40000 ALTER TABLE `pagos` ENABLE KEYS */;


-- Volcando estructura para tabla db_ecodata.persona
CREATE TABLE IF NOT EXISTS `persona` (
  `Id_Persona` int(11) NOT NULL AUTO_INCREMENT,
  `IdCiudad_Persona` int(11) NOT NULL,
  `Nombre_Persona` varchar(50) NOT NULL,
  `APaterno_Persona` varchar(50) NOT NULL,
  `AMaterno_Persona` varchar(50) NOT NULL,
  `Genero_Persona` char(1) NOT NULL,
  `Dni_Persona` varchar(8) NOT NULL,
  `Telefono_Persona` varchar(10) NOT NULL,
  `Email_Persona` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_Persona`),
  KEY `IdCiudad_Persona` (`IdCiudad_Persona`),
  CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`IdCiudad_Persona`) REFERENCES `ciudades` (`Id_Ciudad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla db_ecodata.persona: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;


-- Volcando estructura para tabla db_ecodata.sensores
CREATE TABLE IF NOT EXISTS `sensores` (
  `Id_Sensores` int(11) NOT NULL AUTO_INCREMENT,
  `IdTipo_Sen` int(11) NOT NULL,
  `IdCiudad_Sen` int(11) NOT NULL,
  `IdModulo_Sen` int(11) NOT NULL,
  `Nombre_Sen` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_Sensores`),
  KEY `IdTipo_Sensores` (`IdTipo_Sen`),
  KEY `IdCiudad` (`IdCiudad_Sen`),
  KEY `FK_sensores_sensores` (`IdModulo_Sen`),
  CONSTRAINT `FK_sensores_sensores` FOREIGN KEY (`IdModulo_Sen`) REFERENCES `sensores` (`Id_Sensores`),
  CONSTRAINT `sensores_ibfk_1` FOREIGN KEY (`IdTipo_Sen`) REFERENCES `tipossensores` (`Id_TipoSensor`),
  CONSTRAINT `sensores_ibfk_2` FOREIGN KEY (`IdCiudad_Sen`) REFERENCES `ciudades` (`Id_Ciudad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla db_ecodata.sensores: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `sensores` DISABLE KEYS */;
/*!40000 ALTER TABLE `sensores` ENABLE KEYS */;


-- Volcando estructura para tabla db_ecodata.solicitudes
CREATE TABLE IF NOT EXISTS `solicitudes` (
  `Id_Solicitud` int(11) NOT NULL AUTO_INCREMENT,
  `Numero_Solicitud` varchar(10) NOT NULL,
  `Fecha_Solicitud` date NOT NULL,
  `Hora_Solicitud` time NOT NULL,
  `IP_Solicitud` varchar(40) NOT NULL,
  PRIMARY KEY (`Id_Solicitud`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla db_ecodata.solicitudes: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `solicitudes` DISABLE KEYS */;
/*!40000 ALTER TABLE `solicitudes` ENABLE KEYS */;


-- Volcando estructura para tabla db_ecodata.tipossensores
CREATE TABLE IF NOT EXISTS `tipossensores` (
  `Id_TipoSensor` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_TipoSensor` varchar(50) NOT NULL,
  `RangoIni_TipoSensor` int(11) NOT NULL,
  `RangoFin_TipoSensor` int(11) NOT NULL,
  PRIMARY KEY (`Id_TipoSensor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla db_ecodata.tipossensores: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tipossensores` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipossensores` ENABLE KEYS */;


-- Volcando estructura para tabla db_ecodata.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `Id_Usuario` int(11) NOT NULL AUTO_INCREMENT,
  `IdEstado_Usu` int(11) NOT NULL,
  `IdPersona_Usu` int(11) NOT NULL,
  `Login_Usu` varchar(15) DEFAULT NULL,
  `Password_Usu` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_Usuario`),
  KEY `IdEstado_Usu` (`IdEstado_Usu`),
  KEY `IdPersona_Usu` (`IdPersona_Usu`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`IdEstado_Usu`) REFERENCES `estado_usuario` (`Id_Estado`),
  CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`IdPersona_Usu`) REFERENCES `persona` (`Id_Persona`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla db_ecodata.usuarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;


-- Volcando estructura para tabla db_ecodata.visitas
CREATE TABLE IF NOT EXISTS `visitas` (
  `Id_Visitas` int(11) NOT NULL AUTO_INCREMENT,
  `IP_Visita` varchar(20) NOT NULL,
  `Fecha_Visita` date NOT NULL,
  `Hora_Visita` time NOT NULL,
  PRIMARY KEY (`Id_Visitas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla db_ecodata.visitas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `visitas` DISABLE KEYS */;
/*!40000 ALTER TABLE `visitas` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
