-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.24-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para keepit
DROP DATABASE IF EXISTS `keepit`;
CREATE DATABASE IF NOT EXISTS `keepit` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `keepit`;

-- Copiando estrutura para tabela keepit.cliente
DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cli` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `cep` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_cli`),
  KEY `cep` (`cep`),
  CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`cep`) REFERENCES `localidade` (`cep`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela keepit.cliente: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

-- Copiando estrutura para tabela keepit.inventario
DROP TABLE IF EXISTS `inventario`;
CREATE TABLE IF NOT EXISTS `inventario` (
  `id_invent` int(11) NOT NULL AUTO_INCREMENT,
  `qtde` int(11) NOT NULL,
  `id_mesa` int(11) DEFAULT NULL,
  `id_res` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_invent`),
  KEY `id_mesa` (`id_mesa`),
  KEY `id_res` (`id_res`),
  CONSTRAINT `inventario_ibfk_1` FOREIGN KEY (`id_mesa`) REFERENCES `tipo_mesa` (`id_mesa`),
  CONSTRAINT `inventario_ibfk_2` FOREIGN KEY (`id_res`) REFERENCES `restaurante` (`id_res`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela keepit.inventario: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `inventario` DISABLE KEYS */;
/*!40000 ALTER TABLE `inventario` ENABLE KEYS */;

-- Copiando estrutura para tabela keepit.localidade
DROP TABLE IF EXISTS `localidade`;
CREATE TABLE IF NOT EXISTS `localidade` (
  `cep` varchar(10) NOT NULL,
  `logradouro` varchar(100) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `uf` char(2) NOT NULL,
  PRIMARY KEY (`cep`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela keepit.localidade: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `localidade` DISABLE KEYS */;
/*!40000 ALTER TABLE `localidade` ENABLE KEYS */;

-- Copiando estrutura para tabela keepit.marca_rede
DROP TABLE IF EXISTS `marca_rede`;
CREATE TABLE IF NOT EXISTS `marca_rede` (
  `id_marca` int(11) NOT NULL AUTO_INCREMENT,
  `nome_marca` varchar(45) NOT NULL,
  `logo_marca` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_marca`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela keepit.marca_rede: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `marca_rede` DISABLE KEYS */;
/*!40000 ALTER TABLE `marca_rede` ENABLE KEYS */;

-- Copiando estrutura para tabela keepit.reserva_fixa
DROP TABLE IF EXISTS `reserva_fixa`;
CREATE TABLE IF NOT EXISTS `reserva_fixa` (
  `id_reserva` int(11) NOT NULL AUTO_INCREMENT,
  `horario` datetime NOT NULL,
  `qtde_pessoas` int(11) NOT NULL,
  `obs` text DEFAULT NULL,
  `cel_contato` varchar(15) NOT NULL,
  `situacao_reserva` char(1) NOT NULL,
  `id_res` int(11) DEFAULT NULL,
  `id_cli` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_reserva`),
  KEY `id_res` (`id_res`),
  KEY `id_cli` (`id_cli`),
  CONSTRAINT `reserva_fixa_ibfk_1` FOREIGN KEY (`id_res`) REFERENCES `restaurante` (`id_res`),
  CONSTRAINT `reserva_fixa_ibfk_2` FOREIGN KEY (`id_cli`) REFERENCES `cliente` (`id_cli`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela keepit.reserva_fixa: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `reserva_fixa` DISABLE KEYS */;
/*!40000 ALTER TABLE `reserva_fixa` ENABLE KEYS */;

-- Copiando estrutura para tabela keepit.reserva_ondemand
DROP TABLE IF EXISTS `reserva_ondemand`;
CREATE TABLE IF NOT EXISTS `reserva_ondemand` (
  `idreserva_ondemand` int(11) NOT NULL AUTO_INCREMENT,
  `qtde_pessoas` int(11) NOT NULL,
  `cel_contato` varchar(15) NOT NULL,
  `sit_reserva_ond` char(1) NOT NULL,
  `id_cli` int(11) NOT NULL,
  `id_res` int(11) NOT NULL,
  PRIMARY KEY (`idreserva_ondemand`),
  KEY `id_cli` (`id_cli`),
  KEY `id_res` (`id_res`),
  CONSTRAINT `reserva_ondemand_ibfk_1` FOREIGN KEY (`id_cli`) REFERENCES `cliente` (`id_cli`),
  CONSTRAINT `reserva_ondemand_ibfk_2` FOREIGN KEY (`id_res`) REFERENCES `restaurante` (`id_res`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela keepit.reserva_ondemand: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `reserva_ondemand` DISABLE KEYS */;
/*!40000 ALTER TABLE `reserva_ondemand` ENABLE KEYS */;

-- Copiando estrutura para tabela keepit.restaurante
DROP TABLE IF EXISTS `restaurante`;
CREATE TABLE IF NOT EXISTS `restaurante` (
  `id_res` int(11) NOT NULL AUTO_INCREMENT,
  `nome_res` varchar(100) NOT NULL,
  `nr_res` varchar(20) DEFAULT NULL,
  `comp_res` varchar(100) DEFAULT NULL,
  `tipo_sede_res` char(1) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  `cep` varchar(10) NOT NULL,
  `id_marca` int(11) NOT NULL,
  PRIMARY KEY (`id_res`),
  KEY `cep` (`cep`),
  KEY `id_marca` (`id_marca`),
  CONSTRAINT `restaurante_ibfk_1` FOREIGN KEY (`cep`) REFERENCES `localidade` (`cep`),
  CONSTRAINT `restaurante_ibfk_2` FOREIGN KEY (`id_marca`) REFERENCES `marca_rede` (`id_marca`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela keepit.restaurante: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `restaurante` DISABLE KEYS */;
/*!40000 ALTER TABLE `restaurante` ENABLE KEYS */;

-- Copiando estrutura para tabela keepit.tipo_mesa
DROP TABLE IF EXISTS `tipo_mesa`;
CREATE TABLE IF NOT EXISTS `tipo_mesa` (
  `id_mesa` int(11) NOT NULL AUTO_INCREMENT,
  `nome_estilo_mesa` varchar(45) NOT NULL,
  `lugares_mesa` int(11) NOT NULL,
  PRIMARY KEY (`id_mesa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela keepit.tipo_mesa: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tipo_mesa` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_mesa` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
