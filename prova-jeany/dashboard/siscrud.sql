-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.25-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para siscrud
DROP DATABASE IF EXISTS `siscrud`;
CREATE DATABASE IF NOT EXISTS `siscrud` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `siscrud`;

-- Copiando estrutura para tabela siscrud.aluno
DROP TABLE IF EXISTS `aluno`;
CREATE TABLE IF NOT EXISTS `aluno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `pai` varchar(50) DEFAULT NULL,
  `mae` varchar(50) DEFAULT NULL,
  `rg` varchar(50) DEFAULT NULL,
  `cpf` varchar(50) DEFAULT NULL,
  `nasc` date DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela siscrud.aluno: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `aluno` DISABLE KEYS */;
REPLACE INTO `aluno` (`id`, `nome`, `pai`, `mae`, `rg`, `cpf`, `nasc`) VALUES
	(3, 'Daniel', 'carlos', 'lilian', '234', '544657', '2023-03-01'),
	(4, 'laura', 'marcus', 'katia', '7654', '4875', '2023-03-13'),
	(5, 'Pedro Carvalho Barcellos', 'Marcelo Barcellos', 'Sandra Carvalho', '1111111', '299728943-83', '2006-05-08');
/*!40000 ALTER TABLE `aluno` ENABLE KEYS */;

-- Copiando estrutura para tabela siscrud.disciplina
DROP TABLE IF EXISTS `disciplina`;
CREATE TABLE IF NOT EXISTS `disciplina` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `sigla` varchar(10) NOT NULL,
  `ch` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela siscrud.disciplina: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `disciplina` DISABLE KEYS */;
REPLACE INTO `disciplina` (`id`, `nome`, `sigla`, `ch`) VALUES
	(5, 'Geografia', 'GEO', '195'),
	(6, 'Matemática', 'MAT', '200'),
	(10, 'Português', 'PORT', '180'),
	(11, 'História', 'HIS', '250'),
	(12, 'Filosofia', 'FILO', '1'),
	(13, 'Biologia', 'BIO', '1');
/*!40000 ALTER TABLE `disciplina` ENABLE KEYS */;

-- Copiando estrutura para tabela siscrud.produto
DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_prod` varchar(20) DEFAULT NULL,
  `qtd_prod` int(11) DEFAULT NULL,
  `preco_prod` int(11) DEFAULT NULL,
  `max_prod` int(11) DEFAULT NULL,
  `min_prod` int(11) DEFAULT NULL,
  `dt_valid_prod` date DEFAULT NULL,
  `dt_fab_prod` date DEFAULT NULL,
  `obs` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela siscrud.produto: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
REPLACE INTO `produto` (`id`, `nome_prod`, `qtd_prod`, `preco_prod`, `max_prod`, `min_prod`, `dt_valid_prod`, `dt_fab_prod`, `obs`) VALUES
	(3, 'ruffle', 15, 5, 800, 1, '2025-03-20', '2022-06-23', ''),
	(4, 'álbum love yourself', 1, 500, 10, 1, '2050-04-02', '2018-04-01', 'cuide com carinho');
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;

-- Copiando estrutura para tabela siscrud.usuario
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `usuario` varchar(25) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nivel` int(1) unsigned NOT NULL DEFAULT 1,
  `ativo` tinyint(1) NOT NULL DEFAULT 1,
  `dt_cadastro` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`),
  KEY `nivel` (`nivel`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela siscrud.usuario: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
REPLACE INTO `usuario` (`id`, `nome`, `usuario`, `senha`, `email`, `nivel`, `ativo`, `dt_cadastro`) VALUES
	(1, 'Davis de Freitas', 'freitas', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'davis@hotmail.com', 3, 1, '2023-04-27 14:26:47'),
	(2, 'Jarvis', 'admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'jarvis@ironman.com', 3, 1, '2021-11-24 19:31:10'),
	(3, 'Penelope', 'pcharmosa', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'penelope@gmail.com', 2, 1, '2021-11-24 18:55:00'),
	(4, 'Hulk Hell', 'hell', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'hell@hot.com', 1, 1, '2021-11-24 19:00:24'),
	(5, 'Maria da Silva', 'maria', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'maria@xmail.com', 3, 1, '2021-11-11 00:00:00'),
	(6, 'Adriana da Silva', 'adriana', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'adriana@xmail.com', 3, 1, '2021-11-24 00:00:00'),
	(7, 'Yasmim', 'mcyaya', '93cabe08023b3520b4d3c2f305971f664a018b22', 'yasmim@gmail.com', 2, 1, '2023-04-27 00:00:00');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
