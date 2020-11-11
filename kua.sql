-- MariaDB dump 10.17  Distrib 10.4.14-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: kua
-- ------------------------------------------------------
-- Server version	10.4.14-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `carniceria`
--

DROP TABLE IF EXISTS `carniceria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carniceria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombpro` varchar(50) DEFAULT NULL,
  `descrip` varchar(50) DEFAULT NULL,
  `precio` decimal(6,2) DEFAULT NULL,
  `esDtado` int(11) DEFAULT NULL,
  `rutimg` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carniceria`
--

LOCK TABLES `carniceria` WRITE;
/*!40000 ALTER TABLE `carniceria` DISABLE KEYS */;
INSERT INTO `carniceria` VALUES (1,'Ribeye','ojoebif',249.00,1,'ribeye.jpg'),(2,'Tomahawk','tenhalcon',469.00,1,'tomahawk.jpg'),(3,'Carne molida de res','albondirres',148.00,1,'molida.jpg'),(4,'Chorizo','seahogo',66.00,1,'chorizo.jpg');
/*!40000 ALTER TABLE `carniceria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cereales`
--

DROP TABLE IF EXISTS `cereales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cereales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombpro` varchar(50) DEFAULT NULL,
  `descrip` varchar(50) DEFAULT NULL,
  `precio` decimal(6,2) DEFAULT NULL,
  `esDtado` int(11) DEFAULT NULL,
  `rutimg` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cereales`
--

LOCK TABLES `cereales` WRITE;
/*!40000 ALTER TABLE `cereales` DISABLE KEYS */;
INSERT INTO `cereales` VALUES (1,'Alpiste','piste',32.00,1,'alpiste.jpg'),(2,'Arroz','arroces',34.00,1,'arroz.jpg'),(3,'Avena','sativena',28.00,1,'avena.jpg'),(4,'Centeno','centennn',24.75,1,'centeno.jpg'),(5,'Kamut','kkmut',42.00,1,'kamut.jpg'),(6,'Mijo','mijito',33.00,1,'mijo.jpg'),(7,'Sorgo','asorgog',27.00,1,'sorgo.jpg'),(8,'Trigo','triggo',24.00,1,'trigo.jpg');
/*!40000 ALTER TABLE `cereales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `electronicos`
--

DROP TABLE IF EXISTS `electronicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `electronicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombpro` varchar(50) DEFAULT NULL,
  `descrip` varchar(50) DEFAULT NULL,
  `precio` decimal(6,2) DEFAULT NULL,
  `esDtado` int(11) DEFAULT NULL,
  `rutimg` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `electronicos`
--

LOCK TABLES `electronicos` WRITE;
/*!40000 ALTER TABLE `electronicos` DISABLE KEYS */;
INSERT INTO `electronicos` VALUES (1,'Laptop','ashepe',6399.00,1,'laptop.jpg'),(2,'Tablet','tabureto',3499.00,1,'tablet.jpg'),(3,'Smartwatch','wachaS',425.00,1,'smartwatch.jpg');
/*!40000 ALTER TABLE `electronicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `farmacia`
--

DROP TABLE IF EXISTS `farmacia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `farmacia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombpro` varchar(50) DEFAULT NULL,
  `descrip` varchar(50) DEFAULT NULL,
  `precio` decimal(6,2) DEFAULT NULL,
  `esDtado` int(11) DEFAULT NULL,
  `rutimg` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `farmacia`
--

LOCK TABLES `farmacia` WRITE;
/*!40000 ALTER TABLE `farmacia` DISABLE KEYS */;
INSERT INTO `farmacia` VALUES (1,'Aspirina','aspirinaaaaaa',45.00,1,'aspirina.jpg'),(2,'Agrifen','aaaaaaaaaaa',35.00,1,'agrifen.jpg'),(3,'Hisopos','AAAAAAAA',28.00,1,'hisopos.jpg');
/*!40000 ALTER TABLE `farmacia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `frutasyv`
--

DROP TABLE IF EXISTS `frutasyv`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `frutasyv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombpro` varchar(50) DEFAULT NULL,
  `descrip` varchar(50) DEFAULT NULL,
  `precio` decimal(6,2) DEFAULT NULL,
  `esDtado` int(11) DEFAULT NULL,
  `rutimg` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `frutasyv`
--

LOCK TABLES `frutasyv` WRITE;
/*!40000 ALTER TABLE `frutasyv` DISABLE KEYS */;
INSERT INTO `frutasyv` VALUES (1,'Mango','manogo loco',10.50,1,'Mangos.jpg'),(2,'Platano','platano loco',10.00,1,'Platanos.jpg'),(3,'Uvas','uvas locas',20.45,1,'Uvas.jpg'),(4,'Manzana','manzana loca',8.50,1,'Manzanas.jpg'),(6,'Naranja','naranjas locas',9.50,1,'Naranjas.jpg'),(8,'Pina','pinas locas',18.90,1,'Pinna.jpg');
/*!40000 ALTER TABLE `frutasyv` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gym`
--

DROP TABLE IF EXISTS `gym`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gym` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombpro` varchar(50) DEFAULT NULL,
  `descrip` varchar(50) DEFAULT NULL,
  `precio` decimal(6,2) DEFAULT NULL,
  `esDtado` int(11) DEFAULT NULL,
  `rutimg` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gym`
--

LOCK TABLES `gym` WRITE;
/*!40000 ALTER TABLE `gym` DISABLE KEYS */;
INSERT INTO `gym` VALUES (1,'Cuerda','shuwshuw',48.00,1,'cuerda.jpg'),(2,'Mancuernas','mhmm',210.00,1,'mancuernas.jpg'),(3,'Pesas','bababooey',350.00,1,'pesas.jpg'),(4,'Banda Elastica','bandaelassss',127.00,1,'bandasElas.jpg'),(5,'Banda Resistencia','bandaresiss',132.00,1,'bandasRes.jpg'),(6,'Barras Paralelas','barrasparalel',264.00,1,'barrasPara.jpg'),(7,'Rodillo','rodilloesp',307.00,1,'rodilloEsp.jpg'),(8,'Tapete','tapetegym',482.00,1,'tapeteGym.jpg');
/*!40000 ALTER TABLE `gym` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `juguetes`
--

DROP TABLE IF EXISTS `juguetes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `juguetes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombpro` varchar(50) DEFAULT NULL,
  `descrip` varchar(50) DEFAULT NULL,
  `precio` decimal(6,2) DEFAULT NULL,
  `esDtado` int(11) DEFAULT NULL,
  `rutimg` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `juguetes`
--

LOCK TABLES `juguetes` WRITE;
/*!40000 ALTER TABLE `juguetes` DISABLE KEYS */;
INSERT INTO `juguetes` VALUES (1,'Cubo Rompecabezas','rubiksss',57.00,1,'cube.jpg'),(2,'Spinner','sssppiner',72.00,1,'spinner.jpg'),(3,'Tortuga de juguete','trotucc',239.00,1,'tortuga.jpg'),(4,'Tren de juguete','chucuchucu',186.00,1,'trenJuguete.jpg');
/*!40000 ALTER TABLE `juguetes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lacteos`
--

DROP TABLE IF EXISTS `lacteos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lacteos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombpro` varchar(50) DEFAULT NULL,
  `descrip` varchar(50) DEFAULT NULL,
  `precio` decimal(6,2) DEFAULT NULL,
  `esDtado` int(11) DEFAULT NULL,
  `rutimg` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lacteos`
--

LOCK TABLES `lacteos` WRITE;
/*!40000 ALTER TABLE `lacteos` DISABLE KEYS */;
INSERT INTO `lacteos` VALUES (1,'Crema agria','cremlala',14.00,1,'cremaLALA.jpg'),(2,'Leche entera','lechemlala',16.00,1,'lecheLALA.jpg'),(3,'Queso Manchego','manchegolala',26.00,1,'quesoManLALA.jpg'),(4,'Queso Manchego Rallado','manchegoralala',28.00,1,'quesoMarLALA.jpg'),(5,'Queso Panela','panelafuddd',25.00,1,'quesoPanelaFUD.jpg'),(6,'Queso Crema','quesocremaphilly',45.00,1,'quesoPhila.jpg'),(7,'Yogurt bebible','yogurcin',14.00,1,'yogurtNestle.jpg');
/*!40000 ALTER TABLE `lacteos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mascotas`
--

DROP TABLE IF EXISTS `mascotas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mascotas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombpro` varchar(50) DEFAULT NULL,
  `descrip` varchar(50) DEFAULT NULL,
  `precio` decimal(6,2) DEFAULT NULL,
  `esDtado` int(11) DEFAULT NULL,
  `rutimg` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mascotas`
--

LOCK TABLES `mascotas` WRITE;
/*!40000 ALTER TABLE `mascotas` DISABLE KEYS */;
INSERT INTO `mascotas` VALUES (1,'Cepillo para mascotas','cepillin',129.00,1,'cepilloMas.jpg'),(2,'Croquetas para perro','crocro',30.00,1,'croquetasP.jpg'),(3,'Croquetas para gato','crocro',35.00,1,'croquetasG.jpg'),(4,'Juguetes variedad','jugpete',69.00,1,'juguetesM.jpg');
/*!40000 ALTER TABLE `mascotas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombpro` varchar(50) DEFAULT NULL,
  `descrip` varchar(50) DEFAULT NULL,
  `precio` decimal(6,2) DEFAULT NULL,
  `esDtado` int(11) DEFAULT NULL,
  `rutimg` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'Manzana','manzana loca',8.50,1,'Manzanas.jpg'),(2,'Mango','manogo loco',10.50,1,'Mangos.jpg'),(3,'Platano','platano loco',10.00,1,'Platanos.jpg'),(4,'Uvas','uvas locas',20.45,1,'Uvas.jpg');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-10 22:38:58
