-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.27-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para siscrud
DROP DATABASE IF EXISTS `siscrud`;
CREATE DATABASE IF NOT EXISTS `siscrud` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci */;
USE `siscrud`;

-- Copiando estrutura para tabela siscrud.aluno
DROP TABLE IF EXISTS `aluno`;
CREATE TABLE IF NOT EXISTS `aluno` (
  `matricula` int(11) NOT NULL AUTO_INCREMENT,
  `nome_aluno` varchar(50) DEFAULT NULL,
  `nome_pai` varchar(50) DEFAULT NULL,
  `nome_mae` varchar(50) DEFAULT NULL,
  `dt_nasc` date DEFAULT NULL,
  `sexo_aluno` char(1) DEFAULT NULL,
  `rg_aluno` int(11) DEFAULT NULL,
  `cpf_aluno` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`matricula`)
) ENGINE=MyISAM AUTO_INCREMENT=105 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela siscrud.disciplina
DROP TABLE IF EXISTS `disciplina`;
CREATE TABLE IF NOT EXISTS `disciplina` (
  `cod_disciplina` int(11) NOT NULL AUTO_INCREMENT,
  `nome_disciplina` varchar(30) DEFAULT NULL,
  `sigla_disciplina` varchar(30) DEFAULT NULL,
  `ch_disciplina` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_disciplina`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela siscrud.produto
DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `id_produto` int(20) NOT NULL AUTO_INCREMENT,
  `nome_produto` varchar(50) NOT NULL,
  `preco_produto` double NOT NULL,
  `qtde_produto` int(20) DEFAULT NULL,
  `qtde_min_estoque` int(20) DEFAULT NULL,
  `qtde_max_estoque` int(20) DEFAULT NULL,
  `dt_fab_produto` date DEFAULT NULL,
  `dt_valid_produto` date DEFAULT NULL,
  `obs_produto` text DEFAULT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Exportação de dados foi desmarcado.

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Exportação de dados foi desmarcado.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
