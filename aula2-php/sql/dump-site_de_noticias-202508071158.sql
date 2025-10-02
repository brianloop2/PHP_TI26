/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19-11.7.2-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: site_de_noticias
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*M!100616 SET @OLD_NOTE_VERBOSITY=@@NOTE_VERBOSITY, NOTE_VERBOSITY=0 */;

--
-- Table structure for table `tb_anuncios`
--

DROP TABLE IF EXISTS `tb_anuncios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_anuncios` (
  `id_anuncio` int(11) NOT NULL AUTO_INCREMENT,
  `nome_anuncio` varchar(200) DEFAULT NULL,
  `url_destino` varchar(255) DEFAULT NULL,
  `url_imagem_banner` varchar(255) DEFAULT NULL,
  `tipo_anuncio` enum('banner','texto','video') DEFAULT NULL,
  `posicao_exibicao` varchar(50) DEFAULT NULL,
  `data_inicio` datetime DEFAULT NULL,
  `data_fim` datetime DEFAULT NULL,
  `cliques` int(11) DEFAULT NULL,
  `impressoes` int(11) DEFAULT NULL,
  `ativo` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_anuncio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_anuncios`
--

LOCK TABLES `tb_anuncios` WRITE;
/*!40000 ALTER TABLE `tb_anuncios` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_anuncios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_autores`
--

DROP TABLE IF EXISTS `tb_autores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_autores` (
  `id_autor` int(11) NOT NULL AUTO_INCREMENT,
  `nome_completo` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `biografia` text DEFAULT NULL,
  `url_foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_autor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_autores`
--

LOCK TABLES `tb_autores` WRITE;
/*!40000 ALTER TABLE `tb_autores` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_autores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_categorias`
--

DROP TABLE IF EXISTS `tb_categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_categorias` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nome_categoria` varchar(100) DEFAULT NULL,
  `url_amigavel` varchar(100) DEFAULT NULL,
  `id_categoria_pai` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_categorias`
--

LOCK TABLES `tb_categorias` WRITE;
/*!40000 ALTER TABLE `tb_categorias` DISABLE KEYS */;
INSERT INTO `tb_categorias` VALUES
(1,'Internacional','/noticias/internacional',NULL),
(2,'Nacional','/noticias/nacional',NULL),
(3,'Economia e Negócios','/noticias/nacional',NULL),
(4,'Tecnologia','/noticias/tecnologia',NULL),
(5,'Ciência e Saúde','/noticias/ciencia-saude',NULL),
(6,'Cultura e Entretenimento','/noticias/cultura-entretenimento\n\n',NULL),
(7,'Esportes','/noticias/esportes',NULL),
(8,'Educação\n\n','/noticias/educacao',NULL),
(9,'Sociedade','/noticias/sociedade',NULL),
(10,'Opinião','/noticias/opiniao\n\n',NULL);
/*!40000 ALTER TABLE `tb_categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_comentarios`
--

DROP TABLE IF EXISTS `tb_comentarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_comentarios` (
  `id_comentario` int(11) NOT NULL AUTO_INCREMENT,
  `id_noticia` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `nome_autor` varchar(100) DEFAULT NULL,
  `email_autor` varchar(150) DEFAULT NULL,
  `conteudo_comentario` text DEFAULT NULL,
  `data_comentario` datetime DEFAULT NULL,
  `status` enum('aprovado','pendente','rejeitado','span') DEFAULT NULL,
  PRIMARY KEY (`id_comentario`),
  KEY `tb_comentarios_tb_noticias_FK` (`id_noticia`),
  KEY `tb_comentarios_tb_usuarios_FK` (`id_usuario`),
  CONSTRAINT `tb_comentarios_tb_noticias_FK` FOREIGN KEY (`id_noticia`) REFERENCES `tb_noticias` (`id_noticias`),
  CONSTRAINT `tb_comentarios_tb_usuarios_FK` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuarios` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_comentarios`
--

LOCK TABLES `tb_comentarios` WRITE;
/*!40000 ALTER TABLE `tb_comentarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_comentarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_noticias`
--

DROP TABLE IF EXISTS `tb_noticias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_noticias` (
  `id_noticias` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `subtitulo` varchar(500) DEFAULT NULL,
  `conteudo` longtext DEFAULT NULL,
  `data_publicacao` datetime DEFAULT NULL,
  `data_atualizacao` datetime DEFAULT NULL,
  `url_amigavel` varchar(500) DEFAULT NULL,
  `status` enum('ativo','inativo','bloqueado') DEFAULT NULL,
  `vizualizacoes` int(11) DEFAULT NULL,
  `url_imagem_principal` varchar(255) DEFAULT NULL,
  `legenda_imagem_principal` varchar(255) DEFAULT NULL,
  `id_autor` int(11) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_noticias`),
  KEY `tb_noticias_tb_categorias_FK_1` (`id_categoria`),
  KEY `tb_noticias_tb_autores_FK` (`id_autor`),
  CONSTRAINT `tb_noticias_tb_autores_FK` FOREIGN KEY (`id_autor`) REFERENCES `tb_autores` (`id_autor`),
  CONSTRAINT `tb_noticias_tb_categorias_FK` FOREIGN KEY (`id_categoria`) REFERENCES `tb_categorias` (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_noticias`
--

LOCK TABLES `tb_noticias` WRITE;
/*!40000 ALTER TABLE `tb_noticias` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_noticias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_noticias_tags`
--

DROP TABLE IF EXISTS `tb_noticias_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_noticias_tags` (
  `id_noticia_tag` int(11) NOT NULL AUTO_INCREMENT,
  `id_noticia` int(11) DEFAULT NULL,
  `id_tag` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_noticia_tag`),
  KEY `tb_noticias_tags_tb_noticias_FK` (`id_noticia`),
  KEY `tb_noticias_tags_tb_tags_FK` (`id_tag`),
  CONSTRAINT `tb_noticias_tags_tb_noticias_FK` FOREIGN KEY (`id_noticia`) REFERENCES `tb_noticias` (`id_noticias`),
  CONSTRAINT `tb_noticias_tags_tb_tags_FK` FOREIGN KEY (`id_tag`) REFERENCES `tb_tags` (`id_tag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_noticias_tags`
--

LOCK TABLES `tb_noticias_tags` WRITE;
/*!40000 ALTER TABLE `tb_noticias_tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_noticias_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_sessao_usuarios`
--

DROP TABLE IF EXISTS `tb_sessao_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_sessao_usuarios` (
  `id_sessao` varchar(100) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `ip_endereco` varchar(45) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `data_inicio` datetime DEFAULT NULL,
  `data_fim` datetime DEFAULT NULL,
  KEY `tb_sessao_usuarios_tb_usuarios_FK` (`id_usuario`),
  CONSTRAINT `tb_sessao_usuarios_tb_usuarios_FK` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuarios` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_sessao_usuarios`
--

LOCK TABLES `tb_sessao_usuarios` WRITE;
/*!40000 ALTER TABLE `tb_sessao_usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_sessao_usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_tags`
--

DROP TABLE IF EXISTS `tb_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_tags` (
  `id_tag` int(11) NOT NULL AUTO_INCREMENT,
  `nome_tag` varchar(100) DEFAULT NULL,
  `url_amigavel` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_tag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_tags`
--

LOCK TABLES `tb_tags` WRITE;
/*!40000 ALTER TABLE `tb_tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_usuarios`
--

DROP TABLE IF EXISTS `tb_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(255) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `senha_hash` varchar(255) DEFAULT NULL,
  `data_cadastro` datetime DEFAULT NULL,
  `ultimo_acesso` datetime DEFAULT NULL,
  `status` enum('ativo','inativo','bloqueado') DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_usuarios`
--

LOCK TABLES `tb_usuarios` WRITE;
/*!40000 ALTER TABLE `tb_usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'site_de_noticias'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*M!100616 SET NOTE_VERBOSITY=@OLD_NOTE_VERBOSITY */;

-- Dump completed on 2025-08-07 11:58:34
