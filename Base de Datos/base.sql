CREATE DATABASE  IF NOT EXISTS `helpdesk` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `helpdesk`;
-- MySQL dump 10.13  Distrib 5.7.24, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: helpdesk
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.22-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `t_cat_roles`
--

DROP TABLE IF EXISTS `t_cat_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_cat_roles` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(245) NOT NULL,
  `descripcion` varchar(245) DEFAULT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_cat_roles`
--

LOCK TABLES `t_cat_roles` WRITE;
/*!40000 ALTER TABLE `t_cat_roles` DISABLE KEYS */;
INSERT INTO `t_cat_roles` VALUES (1,'cliente','Es un cliente'),(2,'admin','Es Admin');
/*!40000 ALTER TABLE `t_cat_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_persona`
--

DROP TABLE IF EXISTS `t_persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_persona` (
  `id_persona` int(11) NOT NULL AUTO_INCREMENT,
  `paterno` varchar(245) NOT NULL,
  `materno` varchar(245) DEFAULT NULL,
  `nombre` varchar(245) NOT NULL,
  `fecha_nacimiento` varchar(245) NOT NULL,
  `sexo` varchar(2) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `correo` varchar(245) DEFAULT NULL,
  `fechaInsert` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id_persona`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_persona`
--

LOCK TABLES `t_persona` WRITE;
/*!40000 ALTER TABLE `t_persona` DISABLE KEYS */;
INSERT INTO `t_persona` VALUES (1,'gomez','ruiz','luis carlos','2001-01-21','m','3012429249','luiscarlosgomez335@gmail.com','2022-02-03 20:10:29');
/*!40000 ALTER TABLE `t_persona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_usuarios`
--

DROP TABLE IF EXISTS `t_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `id_rol` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `usuario` varchar(245) NOT NULL,
  `password` varchar(245) NOT NULL,
  `ubicacion` text DEFAULT NULL,
  `activo` int(11) NOT NULL DEFAULT 1,
  `fecha_insert` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `fkPersona_idx` (`id_persona`),
  KEY `fkRoles_idx` (`id_rol`),
  CONSTRAINT `fkPersona` FOREIGN KEY (`id_persona`) REFERENCES `t_persona` (`id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fkRoles` FOREIGN KEY (`id_rol`) REFERENCES `t_cat_roles` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_usuarios`
--

LOCK TABLES `t_usuarios` WRITE;
/*!40000 ALTER TABLE `t_usuarios` DISABLE KEYS */;
INSERT INTO `t_usuarios` VALUES (1,2,1,'admin','d033e22ae348aeb5660fc2140aec35850c4da997','Administrativa',1,NULL),(2,1,1,'cliente','d94019fd760a71edf11844bb5c601a4de95aacaf','administrativo',1,NULL);
/*!40000 ALTER TABLE `t_usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'helpdesk'
--

--
-- Dumping routines for database 'helpdesk'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-02-04  7:45:31
