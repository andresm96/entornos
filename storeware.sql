-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: storeware
-- ------------------------------------------------------
-- Server version	5.7.14

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
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (1,'Almacenamiento'),(2,'Fuentes'),(3,'Memorias'),(4,'Motherboards'),(5,'Procesadores');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `tipo_usu` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `contrasenia` varchar(45) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (1,'admin','admin','No tiene direccion','1414141414','admin@admin.com',1,'admin','admin'),(4,'cliente','cliente','No tiene direccion','3704801348','cliente@cliente.com',0,'cliente','cliente'),(7,'Mauricio','Minio','Laprida 597','4389548','mauricio@gmail.com',0,'mauri','mauri'),(10,'Julian','Poma','Sorrento 439','48562698','test@test.com',0,'neucoas','admin'),(11,'Tomas','Fiorenza','Av Sabin 487','28458745','tomas@hotmail.com',0,'tomas','tomas'),(12,'Ana','Valdes','Dorrego','28787484','valdes@gmail.com',0,'anita','anita'),(13,'Andres','Malvestic','Asd','59898','usuarioasds@gmail.com',0,'andy','andy'),(14,'test','test','no tiene','8784188','test@test.com',1,'test','test');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `precio` double NOT NULL,
  `stock` int(11) NOT NULL,
  `id_subcategoria` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`id_producto`),
  KEY `fk_idsubcat_idx` (`id_subcategoria`),
  CONSTRAINT `fk_idsubcat` FOREIGN KEY (`id_subcategoria`) REFERENCES `subcategoria` (`id_subCategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5205 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` VALUES (1101,'Toshiba 1 tb - 5200 rpm',1200,16,101,'0'),(1201,'Samsung Evo SSD 250gb',2600,24,102,'0'),(2101,'Generica ATX 500 Wats',240,56,201,'0'),(2201,'EVGA 500w 80 Plus Sata 6 Pci-e 2',1500,13,202,'0'),(3101,'Kingston Hyperx Fury 8gb Ddr3 1866 Mhz',1500,32,301,'0'),(3201,'Kingston Hyperx Fury 8gb Ddr4 2400 Mhz',1700,24,302,'0'),(4101,'Asus Prime B350m-a Ryzen Am4 / Ddr4 / M.2 Usb 3.1 Box',2000,7,401,'0'),(4201,'Gigabyte Ga-h81m-h Ddr3 1150 Usb 3.0',1200,19,402,'0'),(5101,'Amd Ryzen 7 1700 8 Cores 3.0/3.7 Am4',6600,6,501,'0'),(5201,'Intel Core I7 7700k 4.5ghz Kaby Lake',7600,8,502,'0'),(5202,'Intel Core I5 6600HQ 2.6ghz ',3462,21,502,'0'),(5204,'Western Digital 320Gb',1500,25,101,'0');
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subcategoria`
--

DROP TABLE IF EXISTS `subcategoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subcategoria` (
  `id_subCategoria` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  PRIMARY KEY (`id_subCategoria`),
  KEY `fk_id_cat_idx` (`id_categoria`),
  CONSTRAINT `fk_id_cat` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subcategoria`
--

LOCK TABLES `subcategoria` WRITE;
/*!40000 ALTER TABLE `subcategoria` DISABLE KEYS */;
INSERT INTO `subcategoria` VALUES (101,'HDD',1),(102,'SSD',1),(201,'Genericas',2),(202,'80+',2),(301,'DDR3',3),(302,'DDR4',3),(401,'AM4',4),(402,'1150',4),(501,'AMD',5),(502,'Intel',5);
/*!40000 ALTER TABLE `subcategoria` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-17 19:56:55
