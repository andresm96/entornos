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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (1,'Admin','Admin','Cordoba 989','3412569878','admin@admin.comq',1,'admin','admin'),(10,'Julian','Poma','Sorrento 439','4865982','admin@admin.com',0,'neucoas','neucoas'),(11,'Tomas','Fiorenza','Av Sabin 487','4369563','tomas@hotmail.com',0,'tomas','tomas'),(12,'Ana','Valdes','Dorrego 878','4369587','valdes@gmail.com',0,'anita','anita'),(13,'Andres','Malvestic','Laprida 2895','3416231469','usuarioasds@gmail.com',0,'andy','andy'),(14,'Test','Test','Pellegrinni 898','3416989875','test@test.com',1,'test','test'),(15,'Gabe','Newell','Turlock 598','01156987289','gabe@newell.com',1,'gabe','newell');
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
) ENGINE=InnoDB AUTO_INCREMENT=5246 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` VALUES (2101,'Fuente Generica 450W',450,56,201,'0'),(2201,'EVGA 500W 80 Plus Sata 6 Pci-e 2',1500,13,202,'0'),(3201,'Kingston Hyperx Fury 8gb Ddr4 2400 Mhz',1700,24,302,'0'),(4201,'Gigabyte Ga-h81m-h Ddr3 1150 Usb 3.0',1200,19,402,'0'),(5101,'Amd Ryzen 7 1700 8 Cores 3.0/3.7 Am4',6600,6,501,'0'),(5201,'Intel Core I7 7700k 4.5ghz Kaby Lake',7600,8,502,'0'),(5202,'Intel Core I5 6600HQ 2.6ghz ',3462,21,502,'0'),(5204,'Disco Rigido W.D. 500GB Blue 2.5 7mm',1139,25,101,'0'),(5205,'Disco Rigido W.D. 1TB Blue Sata',1174,2,101,'0'),(5206,'Disco Rigido W.D. 1TB Blue 2.5 9mm',1300,25,101,'0'),(5207,'Disco Rigido W.D. 2TB Blue Sata',1815,5,101,'0'),(5208,'Disco Rigido W.D. 4TB Purple WD40PURX',3506,2,101,'0'),(5209,'Fuente Generica 500W',550,50,201,'0'),(5210,'Fuente Generica 600W',980,100,201,'0'),(5211,'Disco SSD Kingston UV400 120GB',1762,23,102,'0'),(5212,'SSD Western Digital Green 120GB',1780,25,102,'0'),(5213,'Disco SSD Adata U800 3D Nand 128GB',1900,25,102,'0'),(5214,'SSD Corsair Force LE 200 120GB',1922,15,102,'0'),(5215,'Disco SSD Adata U800 3D Nand 512GB',4985,2,102,'0'),(5216,'SSD Corsair M.2 MP500 Force 240GB',4900,2,102,'0'),(5217,'Disco SSD Crucial MX300 525GB',5430,1,102,'0'),(5218,'Memoria Crucial DDR3 4GB 1600Mhz',925,25,301,'0'),(5219,'Hyper X Fury DDR3 4GB 1866mhz',979,30,301,'0'),(5220,'Hyper X Fury DDR3 8GB 1866mhz',1780,10,301,'0'),(5221,'Memoria Crucial 4GB DDR4 2400mhz',925,25,302,'0'),(5222,'Memoria Adata 8GB DDR4 2133mhz',1762,23,302,'0'),(5223,'Crucial Elite DDR4 2x4GB 2666mhz',1922,20,302,'0'),(5224,'Memoria G.Skill RGB 2x8GB 3200Mhz DDR4',4628,9,302,'0'),(5225,'Memoria Corsair LPX 2x8GB 2666mhz DDR4',3808,5,302,'0'),(5226,'  Fuente XFX 400W XT 80+ Bronce',1263,56,202,'0'),(5227,'Fuente Corsair VS-550W 80Plus White',1664,35,202,'0'),(5228,'Fuente NZXT Hale82 v2 550W 80+Bronce',1635,10,202,'0'),(5229,'Fuente Evga Supernova 1000W 80+Gold',5340,4,202,'0'),(5230,'Mother Gigabyte AB350-Gaming 3 AM4',2830,10,401,'0'),(5231,'Mother Gigabyte AX370-Gaming AM4',3293,2,401,'0'),(5232,'Mother Asrock H110M-HDV R3.0 1151',1110,25,402,'0'),(5233,'Mother Gigabyte B250M-DS3H 1151',1851,25,402,'0'),(5234,'Mother Gigabyte B250M-D3H 1151',2171,59,402,'0'),(5235,'Mother Gigabyte Z270-Gaming 3 1151',3755,54,402,'0'),(5236,'Mother Asus Maximus IX Code 1151',7120,1,402,'0'),(5237,'Mother Gigabyte Z270X-Gaming K5 1151',1681,13,402,'0'),(5238,'Mother ASUS AX370 Extreme AM4 ',3599,7,401,'0'),(5239,'Micro Amd Ryzen 5 1400 Am4',3987,23,501,'0'),(5240,'Micro AMD Ryzen 5 1600 AM4',5055,23,501,'0'),(5241,'Micro Intel Celeron G3930 1151',943,42,502,'0'),(5242,'Micro Intel Pentium G4560 1151',1492,21,502,'0'),(5243,'Microprocesador Intel Core i5 7400 1151',4396,12,502,'0'),(5244,'Microprocesador Intel Core i7 7700 1151',7671,11,502,'0'),(5245,'Microprocesador Intel Core i5 7500 1151',4984,18,502,'0');
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

-- Dump completed on 2017-08-28 18:08:16
