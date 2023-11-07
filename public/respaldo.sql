-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: teziuapp
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.28-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `festividades`
--

DROP TABLE IF EXISTS `festividades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `festividades` (
  `festividad_id` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `nombre_festividad` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `atracciones` varchar(255) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`festividad_id`),
  KEY `users_id` (`users_id`),
  CONSTRAINT `festividades_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `festividades`
--

LOCK TABLES `festividades` WRITE;
/*!40000 ALTER TABLE `festividades` DISABLE KEYS */;
INSERT INTO `festividades` VALUES (1,1,'Feria del taco','Descripción Festividad 1',100,'tacos gratis','2023-10-28'),(2,1,'Recorrido de la Virgen del Carmen','Descripción Festividad 1',0,'Danzas','2023-06-07'),(3,1,'Feria de teziutlan','Descripción Festividad 1',100,'Juegos Mecanicos','2023-08-13'),(4,1,'Encuentro de Pueblos Magicos','Descripción Festividad 1',0,'Musica y comida','2023-10-13'),(5,1,'Aniversario de la fundación de teziutlán','Descripción Festividad 1',0,'Encuentros musicales','2023-08-15');
/*!40000 ALTER TABLE `festividades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gastronomia`
--

DROP TABLE IF EXISTS `gastronomia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gastronomia` (
  `gastronomia_id` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `nombre_restaurante` varchar(255) DEFAULT NULL,
  `tipo_comida` varchar(255) DEFAULT NULL,
  `tipo_cocina` varchar(255) DEFAULT NULL,
  `capacidad` int(11) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  PRIMARY KEY (`gastronomia_id`),
  KEY `users_id` (`users_id`),
  CONSTRAINT `gastronomia_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gastronomia`
--

LOCK TABLES `gastronomia` WRITE;
/*!40000 ALTER TABLE `gastronomia` DISABLE KEYS */;
INSERT INTO `gastronomia` VALUES (1,2,'Restaurante las brasas','Comida tipica Mexicana','cocina de vanguardia',250,'Dirección Restaurante 1','111-222-3333','Descripción Restaurante 1'),(2,2,'Restaurante los quetzales','Comida Mexicana','alta cocina',300,'Dirección Restaurante 1','222-333-4444','Descripción Restaurante 2'),(3,2,'Restaurante mi viejo cafe','Desayunos y comida mexicana','alta cocina',200,'Dirección Restaurante 1','333-444-5555','Descripción Restaurante 3'),(4,2,'tlayoreria las tres Marias','Comida tradicional Mexicana','cocina tradicional',150,'Dirección Restaurante 1','444-555-6666','Descripción Restaurante 4'),(5,2,'El Santuario','Desayuno y comida internacional','cocina de vanguardia',50,'Dirección Restaurante 2','555-666-7777','Descripción Restaurante 5');
/*!40000 ALTER TABLE `gastronomia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hotel_gastronomia`
--

DROP TABLE IF EXISTS `hotel_gastronomia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hotel_gastronomia` (
  `hotel_id` int(11) DEFAULT NULL,
  `gastronomia_id` int(11) DEFAULT NULL,
  KEY `hotel_id` (`hotel_id`),
  KEY `gastronomia_id` (`gastronomia_id`),
  CONSTRAINT `hotel_gastronomia_ibfk_1` FOREIGN KEY (`hotel_id`) REFERENCES `hoteles` (`hotel_id`),
  CONSTRAINT `hotel_gastronomia_ibfk_2` FOREIGN KEY (`gastronomia_id`) REFERENCES `gastronomia` (`gastronomia_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hotel_gastronomia`
--

LOCK TABLES `hotel_gastronomia` WRITE;
/*!40000 ALTER TABLE `hotel_gastronomia` DISABLE KEYS */;
/*!40000 ALTER TABLE `hotel_gastronomia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hoteles`
--

DROP TABLE IF EXISTS `hoteles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hoteles` (
  `hotel_id` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `nombre_hotel` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `precio_hospedaje` double DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `estrellas` int(11) DEFAULT NULL,
  PRIMARY KEY (`hotel_id`),
  KEY `users_id` (`users_id`),
  CONSTRAINT `hoteles_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hoteles`
--

LOCK TABLES `hoteles` WRITE;
/*!40000 ALTER TABLE `hoteles` DISABLE KEYS */;
INSERT INTO `hoteles` VALUES (1,1,'Hotel central','Av. Miguel Hidalgo No. 801 Centro, 73800 Teziutlán, México –','123-456-7890',230,'El Hotel Central se encuentra en el centro de Teziutlán, Puebla, alberga un restaurante que sirve desayunos gratuitos y un gimnasio equipado',4),(2,1,'Hotel talavera','Calle Hidalgo #1302 esquina con Calle Mina, colonia centro, 73800','987-654-3210',354.4,'El Hotel Talavera Teziutlan se encuentra en Teziutlán y cuenta con terraza. Cuenta con restaurante, servicio de habitaciones, recepción 24 horas y WiFi gratuita',5),(3,1,'Hotel colonial','centro de Teziutlán','123-456-2687',2650.8,'El Hotel Colonial cuenta con restaurante y se encuentra en el centro de Teziutlán, a solo 30 metros de la histórica catedral. ',5),(4,1,'Hotel suites teziutlan','León Guzmán 303, 73800 Teziutlán, México ','987-654-3210',350,'El Hotel Suites Teziutlan ofrece estudios y apartamentos funcionales con conexión Wi-Fi gratuita y zona de cocina en el centro de Teziutlán.',5),(5,1,'Hotel danini','centro de Teziutlán','231-578-7890',298.9,'El Hotel Danini se encuentra en Teziutlán y ofrece jardín, salón compartido, restaurante y bar. Este hotel de 4 estrellas ofrece WiFi gratuita, servicio de habitaciones y recepción 24 horas.',5);
/*!40000 ALTER TABLE `hoteles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lugaresturisticos`
--

DROP TABLE IF EXISTS `lugaresturisticos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lugaresturisticos` (
  `lugar_id` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `nombre_lugar` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `ubicacion` varchar(255) DEFAULT NULL,
  `horario` varchar(255) DEFAULT NULL,
  `costo_entrada` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`lugar_id`),
  KEY `users_id` (`users_id`),
  CONSTRAINT `lugaresturisticos_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lugaresturisticos`
--

LOCK TABLES `lugaresturisticos` WRITE;
/*!40000 ALTER TABLE `lugaresturisticos` DISABLE KEYS */;
INSERT INTO `lugaresturisticos` VALUES (1,3,'Santuario El Carmen','Esta capilla está construida sobre un pequeño cerro y está ubicada en el barrio del mismo nombre, uno de los más antiguos y tradicionales de Teziutlán. Fue construida en el siglo XVIII, de tipo colonial renacentista clásico. ','Ubicación Lugar 1','Horario Lugar 1',0.00),(2,3,'Paseo Altagracia','Éste espacio de recreación rinde homenaje a una heroína Teziuteca que, tras años en el olvido la historia le da el lugar que merece.','Ubicación Lugar 1','Horario Lugar 1',10.00),(3,3,'Antiguo Pueblo Minero','La naturaleza y el tiempo se encargaron de inundar los túneles y sepultar las historias de las duras jornadas de trabajo.','Ubicación Lugar 1','Horario Lugar 1',10.00),(4,3,'Mercado Victoria','Este importante centro de abastos fue uno de los mas modernos de su época, y concentraba en un solo lugar la venta de frutas, verduras, carnicería, ropa y alimentos preparados con los tradicionales comedores.','Ubicación Lugar 1','Horario Lugar 1',0.00),(5,3,'Plaza de Toros','El pueblo Teziuteco junto con su presidente municipal Sr. Silverio Gómez P. y el gobernador del estado se organizan y planean la construcción de una nueva plaza de toros, misma que se inauguraría oficialmente el 1° de enero de 1954, partiendo plaza Juan Silveti y Jorge Aguilar “el Ranchero”, cortando en dicho festejo un total de cuatro orejas y un rabo.','Ubicación Lugar 1','Horario Lugar 1',0.00),(6,3,'Casa de la Cultura','La “Casa Toral” como se le conoció en la segunda mitad del Siglo XX es una de las antiguas casonas más antiguas y emblemáticas del centro de Teziutlán. Construida a principios del Siglo XIX, conserva todas lás características de la arquitectura serrana, contando con locales comerciales que daban a la calle, en la planta baja un amplio patio, bodegas, establos y casa habitación en la planta alta. ','Ubicación Lugar 1','Horario Lugar 1',0.00),(7,3,'Ruta del Cafe','La experiencia incluye una visita a las fincas productoras, cuyos propietarios se han preocupado por capacitarse para mostrar a sus visitantes el proceso del café, iniciando el recorrido por todo el proceso cafetalero','Ubicación Lugar 1','Horario Lugar 1',15.00),(8,3,'Bosque de Niebla','El ejido Atoluca es custodiado por 83 ejidatarios, de los cuales 26 son mujeres, 37 hombres y 20 posesionarios. Cuenta con 1,250 hectáreas de bosque mesófilo, de las cuales el 75% es área protegida y el 25% está dividido en parcelas con cultivos como aguacate, blue berries, limón, durazno, café y maíz.','Ubicación Lugar 1','Horario Lugar 1',10.00),(9,3,'Anturalia','Anturalia es una Asociación Civil de mujeres de la comunidad de Coyopol, en la Junta Auxiliar de San Juan Acateno, dedicadas al cultivo y venta del Anturio, flor importada de los Paises Bajos. Cuentan con cuatro variedades, rosa, roja, champagne y momens, logrando la comercialización de estas flores a través de una florería local que se encarga de su distribución.','Ubicación Lugar 1','Horario Lugar 1',20.00),(10,3,'Rancho escondido','Rancho Escondido es un espacio 100% natural que promueve la producción orgánica y economía sustentable bajo 5 líneas temáticas: educación y esparcimiento, tradiciones y cultura, usos y costumbres en las labores del campo, gastronomía local, y fruticultura y cultivos alternativos.','Ubicación Lugar 2','Horario Lugar 2',30.00);
/*!40000 ALTER TABLE `lugaresturisticos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lugaresturisticos_festividades`
--

DROP TABLE IF EXISTS `lugaresturisticos_festividades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lugaresturisticos_festividades` (
  `lugar_id` int(11) DEFAULT NULL,
  `festividad_id` int(11) DEFAULT NULL,
  KEY `lugar_id` (`lugar_id`),
  KEY `festividad_id` (`festividad_id`),
  CONSTRAINT `lugaresturisticos_festividades_ibfk_1` FOREIGN KEY (`lugar_id`) REFERENCES `lugaresturisticos` (`lugar_id`),
  CONSTRAINT `lugaresturisticos_festividades_ibfk_2` FOREIGN KEY (`festividad_id`) REFERENCES `festividades` (`festividad_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lugaresturisticos_festividades`
--

LOCK TABLES `lugaresturisticos_festividades` WRITE;
/*!40000 ALTER TABLE `lugaresturisticos_festividades` DISABLE KEYS */;
/*!40000 ALTER TABLE `lugaresturisticos_festividades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `profiles` (
  `profile_id` int(11) NOT NULL AUTO_INCREMENT,
  `profile` varchar(20) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`profile_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profiles`
--

LOCK TABLES `profiles` WRITE;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
INSERT INTO `profiles` VALUES (1,'Administrador1','Administrador de hoteles',1,'2023-08-29 09:00:03',NULL,NULL),(2,'Administrador2','Administrador de Gastronomia',1,'2023-08-29 09:00:03',NULL,NULL),(3,'Administrador3','Administrador de lugares turisticos',1,'2023-08-29 09:00:03',NULL,NULL),(4,'Administrador4','Administrador de festividades',1,'2023-08-29 09:00:03',NULL,NULL),(5,'Administrador1','Administrador de hoteles',1,'2023-08-29 09:00:03',NULL,NULL),(6,'Administrador2','Administrador de Gastronomia',1,'2023-08-29 09:00:03',NULL,NULL),(7,'Administrador3','Administrador de lugares turisticos',1,'2023-08-29 09:00:03',NULL,NULL),(8,'Administrador4','Administrador de festividades',1,'2023-08-29 09:00:03',NULL,NULL);
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userinfo`
--

DROP TABLE IF EXISTS `userinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `userinfo` (
  `userinfo_id` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `lastname` varchar(80) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`userinfo_id`),
  KEY `users_id` (`users_id`),
  CONSTRAINT `userinfo_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userinfo`
--

LOCK TABLES `userinfo` WRITE;
/*!40000 ALTER TABLE `userinfo` DISABLE KEYS */;
INSERT INTO `userinfo` VALUES (1,NULL,'Maria','Pilar','2000-08-01','m','2312324724','trabajador de TeziuApp','maria@gmail',1,'2023-10-14 10:20:00',NULL,NULL),(2,NULL,'Jesus','Sanchez','2004-09-14','h','2311386236','trabajador de TeziuApp','jesus@gmail',1,'2023-10-13 10:10:00',NULL,NULL),(3,NULL,'Jose','Roque','1985-02-23','h','2312066656','trabajador de TeziuApp','jose@gmail',1,'2023-09-12 10:13:00',NULL,NULL),(4,NULL,'Francisco','Morales','1993-03-15','h','231206687','trabajador de TeziuApp','francisco@gmail',1,'2023-09-04 10:06:00',NULL,NULL),(5,NULL,'Juan','Martinez','1999-10-06','h','2312077756','trabajador de TeziuApp','juan@gmail',1,'2023-10-10 10:06:00',NULL,NULL),(6,NULL,'Rodolfo','contreras','2001-12-10','h','2312098156','trabajador de TeziuApp','rodolfo@gmail',1,'2023-09-05 10:15:00',NULL,NULL),(7,NULL,'Fernanda','Hernandez','2001-09-26','m','2312024856','trabajador de TeziuApp','fernanda@gmail',1,'2023-10-14 10:22:00',NULL,NULL),(8,NULL,'Pedro','Cruz','1989-01-05','h','2312083456','trabajador de TeziuApp','pedro@gmail',1,'2023-10-15 10:26:00',NULL,NULL);
/*!40000 ALTER TABLE `userinfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `users_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `profile` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`users_id`),
  KEY `profile` (`profile`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`profile`) REFERENCES `profiles` (`profile_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Mari','1234',1,1,'2023-08-29 09:40:00',NULL,NULL),(2,'chucho','1234',1,2,'2023-08-29 09:40:00',NULL,NULL),(3,'pepe','1234',1,3,'2023-08-29 09:40:00',NULL,NULL),(4,'paco','1234',1,4,'2023-08-29 09:40:00',NULL,NULL),(5,'juanito','1234',1,4,'2023-08-29 09:40:00',NULL,NULL),(6,'rodo','1234',1,3,'2023-08-29 09:40:00',NULL,NULL),(7,'fer','1234',1,2,'2023-08-29 09:40:00',NULL,NULL),(8,'peter','1234',1,1,'2023-08-29 09:40:00',NULL,NULL),(9,'Mari','1234',1,1,'2023-08-29 09:40:00',NULL,NULL),(10,'chucho','1234',1,2,'2023-08-29 09:40:00',NULL,NULL),(11,'pepe','1234',1,3,'2023-08-29 09:40:00',NULL,NULL),(12,'paco','1234',1,4,'2023-08-29 09:40:00',NULL,NULL),(13,'juanito','1234',1,4,'2023-08-29 09:40:00',NULL,NULL),(14,'rodo','1234',1,3,'2023-08-29 09:40:00',NULL,NULL),(15,'fer','1234',1,2,'2023-08-29 09:40:00',NULL,NULL),(16,'peter','1234',1,1,'2023-08-29 09:40:00',NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-07  1:53:49
