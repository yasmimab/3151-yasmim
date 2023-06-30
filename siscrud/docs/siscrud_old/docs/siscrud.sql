-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.24-MariaDB - mariadb.org binary distribution
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
CREATE DATABASE IF NOT EXISTS `siscrud` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `siscrud`;

-- Copiando estrutura para tabela siscrud.aluno
DROP TABLE IF EXISTS `aluno`;
CREATE TABLE IF NOT EXISTS `aluno` (
  `id_alu` int(11) NOT NULL AUTO_INCREMENT,
  `mat_alu` char(8) NOT NULL,
  `nome_alu` varchar(150) NOT NULL,
  `dt_nasc_alu` date NOT NULL,
  `rg_alu` char(12) NOT NULL,
  `cpf_alu` char(14) NOT NULL,
  `pai_alu` varchar(150) NOT NULL,
  `mae_alu` varchar(150) NOT NULL,
  PRIMARY KEY (`id_alu`),
  UNIQUE KEY `mat_alu` (`mat_alu`),
  UNIQUE KEY `mat_alu_2` (`mat_alu`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela siscrud.aluno: ~2 rows (aproximadamente)
REPLACE INTO `aluno` (`id_alu`, `mat_alu`, `nome_alu`, `dt_nasc_alu`, `rg_alu`, `cpf_alu`, `pai_alu`, `mae_alu`) VALUES
	(1, '20230001', 'Gabriel Neves', '2000-10-09', '24.543.736-3', '527.826.195-73', 'Fabio Neves', 'Sara Neves'),
	(2, '20220025', 'Bruna Monteiro', '2000-04-11', '63.827.289-7', '638.296.205-95', 'Carlos Monteiro', 'Marcela Monteiro'),
	(3, '20210020', 'Lucas Poeys Carpenter de Sant Anna', '2005-08-05', '22.222.222-2', '187.584.097-42', 'Alexandre Carpenter de Sant Anna', 'Danila Poeys Mendes de Sant Anna');

-- Copiando estrutura para tabela siscrud.disciplina
DROP TABLE IF EXISTS `disciplina`;
CREATE TABLE IF NOT EXISTS `disciplina` (
  `id_disc` int(11) NOT NULL AUTO_INCREMENT,
  `nome_disc` varchar(60) NOT NULL,
  `sigla_disc` varchar(10) NOT NULL,
  `ch_disc` int(11) NOT NULL,
  PRIMARY KEY (`id_disc`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela siscrud.disciplina: ~4 rows (aproximadamente)
REPLACE INTO `disciplina` (`id_disc`, `nome_disc`, `sigla_disc`, `ch_disc`) VALUES
	(1, 'Português', 'PORT', 2),
	(2, 'Matemática', 'MAT', 2),
	(4, 'História', 'HIST', 2),
	(6, 'Linguegem Técnica de Programação Web', 'LTPW', 4);

-- Copiando estrutura para tabela siscrud.produto
DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `id_prod` int(11) NOT NULL AUTO_INCREMENT,
  `nome_prod` varchar(50) NOT NULL,
  `preco_prod` double NOT NULL,
  `qtde_prod` int(11) DEFAULT NULL,
  `qtde_min_estoque` int(11) DEFAULT NULL,
  `qtde_max_estoque` int(11) DEFAULT NULL,
  `dt_fab_prod` date DEFAULT NULL,
  `dt_valid_prod` date DEFAULT NULL,
  `obs_prod` text DEFAULT NULL,
  PRIMARY KEY (`id_prod`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela siscrud.produto: ~3 rows (aproximadamente)
REPLACE INTO `produto` (`id_prod`, `nome_prod`, `preco_prod`, `qtde_prod`, `qtde_min_estoque`, `qtde_max_estoque`, `dt_fab_prod`, `dt_valid_prod`, `obs_prod`) VALUES
	(1, 'Coca Cola 2L', 9.5, 50, 10, 100, '2023-02-13', '2024-02-15', 'Bebida gaseficada sabor cola de 2 litros'),
	(2, 'Nissin Lámen Galinha Caipira', 1.5, 40, 5, 50, '2023-01-16', '2024-01-18', 'Macarrão Instantâneo sabor Galinha Caipira de 80 gramas'),
	(4, 'Lasanha Sadia Bolonhesa 500g', 16.5, 15, 5, 30, '2023-01-17', '2024-01-20', 'Lasanha sabor bolonhesa de 500 gramas');

-- Copiando estrutura para tabela siscrud.usuario
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` varchar(25) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `nivel` int(1) unsigned NOT NULL DEFAULT 1,
  `ativo` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`),
  KEY `nivel` (`nivel`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela siscrud.usuario: ~9 rows (aproximadamente)
REPLACE INTO `usuario` (`id`, `usuario`, `senha`, `nivel`, `ativo`) VALUES
	(1, 'freitas', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 3, 1),
	(2, 'admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 3, 1),
	(3, 'pcharmosa', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2, 1),
	(4, 'hell', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 1),
	(5, 'maria', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 3, 1),
	(6, 'adriana', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 3, 1),
	(7, 'ERERE', '8f277e029cdcd437865a39f076451784e0594b1e', 2, 1),
	(8, 'Ítalo Santos Borges', '7c4a8d09ca3762af61e59520943dc26494f8941b', 3, 1),
	(10, 'Francisco Rabello', '22999e9a46f720f8415615287219e00eea668559', 1, 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
