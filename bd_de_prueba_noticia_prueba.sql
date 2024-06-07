-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: bd_de_prueba
-- ------------------------------------------------------
-- Server version	8.3.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `noticia_prueba`
--

DROP TABLE IF EXISTS `noticia_prueba`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `noticia_prueba` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `content` text,
  `imagen` varchar(255) NOT NULL,
  `additional_content` text,
  `additional_image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noticia_prueba`
--

LOCK TABLES `noticia_prueba` WRITE;
/*!40000 ALTER TABLE `noticia_prueba` DISABLE KEYS */;
INSERT INTO `noticia_prueba` VALUES (6,'Inmuebles: cómo evolucionan en el año los precios en los diferentes barrios de Córdoba','El análisis comparativo entre los dos primeros bimestres del año fue presentado durante el segundo encuentro bimestral entre Clasificados “La Voz” y los especialistas del sector inmobiliario.','La Mesa del sector inmobiliario de Clasificados La Voz se reunió para trabajar de manera conjunta en el análisis de la información generada por el tablero interactivo de Clasificados, donde se pueden analizan más de 55.000 inmuebles publicados y su correspondiente demanda de mercado. El objetivo de la mesa es comprender el movimiento de la compra y venta de estos tipos de bienes por zonas geográficas a nivel local.\r\n\r\nEn este sentido, se realizó el segundo encuentro con los especialistas de análisis de datos del sector: Marcos Marchi, Mariana Geimonat, Javier Signorelli, Paolo Vieyra, Cristian González, Rafael Espeche, Franco Strazza y Javier Malbrán.\r\n\r\nAsimismo, la coordinación estuvo a cargo de Matías Merguerian, socio de la consultora MV Real Estate; Lucas Delgado, responsable comercial y encargado de Clasificados La Voz, y Sebastián Lazcano, gerente comercial y de Marketing de La Voz.','imagenes/pexels-neosiam-633520.jpg','Cada uno de los ejecutivos inmobiliarios llevó adelante una comparativa de precios, ofertas y demandas entre los dos primeros bimestres del año.\r\n\r\nAlberdi y Alto Alberdi. Se trata de un área influenciada de manera directa por compras a través de créditos hipotecarios. El precio de oferta de los departamentos de un dormitorio se mantuvo en U$S 42.320. Mientras que el precio de demanda tuvo una suba del 9% y terminó en U$S 40.077.\r\n\r\nEn cuanto a los departamentos de dos dormitorios, se registraron mayores subas. El precio de oferta subió 3% en relación con el bimestre anterior y quedó en U$S 67.047. Por su parte, el valor con demanda se posicionó en U$S 61.841.\r\n\r\nEn lo que respecta a casas de tres dormitorios en Alto Alberdi, el precio con demanda bajó un 10% a U$S 74.230 y el metro cuadrado cubierto también tuvo una baja del 10%, para ubicarse en U$S 491,59.\r\n\r\n“La única tipología que tuvo crecimiento fueron los departamentos de un dormitorio en Alberdi. Se proyecta una caída en las tres tipologías, creándose una burbuja inmobiliaria como se vio en el segundo semestre del 2018″, aclaró Cristian González, de Gestión Inmobiliaria.\r\n\r\nGeneral Paz. A diferencia del sector anterior, en este barrio no se realizan transacciones por líneas de crédito debido a la poca oferta de inmuebles escriturados.\r\n\r\n“Es un barrio relativamente nuevo, por lo que la mayoría de los edificios en oferta no tienen escritura y hay una ventana de cinco años desde que se termina la construcción hasta que se hace la escrituración. Esto reduce la opción de crédito”, explicó Paolo Vieyra, director de Boden Administraciones.','imagenes/pexels-karolina-grabowska-4968630.jpg'),(7,'Inmuebles: cómo evolucionan en el año los precios en los diferentes barrios de Córdoba','El análisis comparativo entre los dos primeros bimestres del año fue presentado durante el segundo encuentro bimestral entre Clasificados “La Voz” y los especialistas del sector inmobiliario.','Cada uno de los ejecutivos inmobiliarios llevó adelante una comparativa de precios, ofertas y demandas entre los dos primeros bimestres del año.\r\n\r\nAlberdi y Alto Alberdi. Se trata de un área influenciada de manera directa por compras a través de créditos hipotecarios. El precio de oferta de los departamentos de un dormitorio se mantuvo en U$S 42.320. Mientras que el precio de demanda tuvo una suba del 9% y terminó en U$S 40.077.\r\n\r\nEn cuanto a los departamentos de dos dormitorios, se registraron mayores subas. El precio de oferta subió 3% en relación con el bimestre anterior y quedó en U$S 67.047. Por su parte, el valor con demanda se posicionó en U$S 61.841.\r\n\r\nEn lo que respecta a casas de tres dormitorios en Alto Alberdi, el precio con demanda bajó un 10% a U$S 74.230 y el metro cuadrado cubierto también tuvo una baja del 10%, para ubicarse en U$S 491,59.\r\n\r\n“La única tipología que tuvo crecimiento fueron los departamentos de un dormitorio en Alberdi. Se proyecta una caída en las tres tipologías, creándose una burbuja inmobiliaria como se vio en el segundo semestre del 2018″, aclaró Cristian González, de Gestión Inmobiliaria.\r\n\r\nGeneral Paz. A diferencia del sector anterior, en este barrio no se realizan transacciones por líneas de crédito debido a la poca oferta de inmuebles escriturados.\r\n\r\n“Es un barrio relativamente nuevo, por lo que la mayoría de los edificios en oferta no tienen escritura y hay una ventana de cinco años desde que se termina la construcción hasta que se hace la escrituración. Esto reduce la opción de crédito”, explicó Paolo Vieyra, director de Boden Administraciones.','imagenes/pexels-sora-shimazaki-5668834.jpg','El precio de oferta de los departamentos de un dormitorio pasó de U$S 59.700 a U$S 60.365. La misma diferencia se produjo en el precio con demanda, que estuvo a U$S 55.645 en el último bimestre.En los departamentos de dos dormitorios, el valor de oferta fue de U$S 107.190 y con demanda, U$S 92.246.A diferencia de los primeros dos meses del año, las empresas desarrollistas comenzaron a trazar camino para la activación de cinco emprendimientos en la zona.\r\n“Venimos de dos años en los que no había ningún desarrollo y estábamos haciendo reventa. Pero ahora hay desarrollos que están por arrancar y el pozo está en un piso de U$S 60 mil″, comentó Vieyra.\r\n\r\nNueva Córdoba. Debido a la demanda, el valor del metro cuadrado en los departamentos de un dormitorio, aumentaron un 6% con respecto al primer bimestre del año. De esta manera, el metro cuadrado quedó por arriba de los U$S 1.200. Por otra parte, la brecha entre los valores ofrecidos y los demandados se achicó al 16,81%, quedando la oferta en alrededor de U$S 67.955 y lo demandado en USS 58.177.','imagenes/pexels-alex-green-5699431.jpg'),(9,'Barrio Centro: una reconversión necesaria','Qué demanda ese sector de la ciudad para salir adelante. El rol de la inversión pública y privada, en la mirada de los especialistas.','“Una posible estrategia consistiría en considerar la reconversión de esas propiedades comerciales en unidades residenciales, ya sea para vivienda permanente o temporal, aprovechando el atractivo turístico de la ciudad. Para lograr eso, los propietarios deberían impulsar modificaciones en los reglamentos de propiedad horizontal a efectos de permitir cambios de uso y subdivisión interna en unidades más pequeñas”, aporta Strazza.\r\n\r\nAdemás, las autoridades municipales deberían colaborar mediante la implementación de normativas que contemplen esas reconversiones, para asegurar los estándares de habitabilidad necesarios sin olvidar que no se trata de una construcción nueva. El equilibrio entre flexibilidad y calidad es fundamental para hacer posible esa transformación.\r\n\r\n“El cambio en las regulaciones y normativas podría motivar a los propietarios actuales o a nuevos inversores a aportar capital para reciclar y transformar estos espacios en unidades residenciales”, agrega el especialista.\r\n\r\nActualmente, ya existen varios proyectos de adaptación de hoteles tipo formato “co-living”, donde las antiguas habitaciones se han convertido en unidades funcionales, con escrituras independientes y áreas comunes de servicios.','imagenes/cba.jpeg','Otro camino a seguir pasa por generar unidades de negocios, desarrollando en esos espacios oficinas con amoblamiento, equipamiento y servicios, para el alquiler temporal o tradicional de metros cuadrados fraccionados o totales.\r\n\r\n“De esta manera se podría generar un recupero de rentabilidad, lo que la vuelve una opción más atractiva para el inversionista rentista adecuado. No sólo se estaría vendiendo la oficina, sino un negocio rentable que se genera alrededor de ella”,subraya Strazza.\r\n\r\nEn ambos casos no sólo es necesaria la adecuación, reconversión o reciclado de las unidades particulares, sino que esas reformas deben ir acompañadas de obras funcionales y estéticas en la fachada, espacios comunes y servicios generales y específicos. Esos esfuerzos, sumados a las iniciativas de los centros vecinales para recuperar la zona, las nuevas propuestas turísticas y el aumento de la densificación residencial, podrían dar lugar a un renacimiento del Centro de la ciudad de Córdoba.\r\n\r\nCARACTERÍSTICA','imagenes/pexels-pixabay-48195.jpg');
/*!40000 ALTER TABLE `noticia_prueba` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-07 11:50:49
