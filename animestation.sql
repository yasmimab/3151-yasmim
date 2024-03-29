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


-- Copiando estrutura do banco de dados para animestation*
DROP DATABASE IF EXISTS `animestation*`;
CREATE DATABASE IF NOT EXISTS `animestation*` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `animestation*`;

-- Copiando estrutura para tabela animestation*.cargo
DROP TABLE IF EXISTS `cargo`;
CREATE TABLE IF NOT EXISTS `cargo` (
  `cod_cargo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `salario` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`cod_cargo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela animestation*.cep
DROP TABLE IF EXISTS `cep`;
CREATE TABLE IF NOT EXISTS `cep` (
  `cep` int(11) NOT NULL AUTO_INCREMENT,
  `logradouro` varchar(20) DEFAULT NULL,
  `bairro` varchar(20) DEFAULT NULL,
  `municipio` varchar(20) DEFAULT NULL,
  `uf` char(2) DEFAULT NULL,
  PRIMARY KEY (`cep`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela animestation*.cliente
DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `cod_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `cpf` varchar(30) DEFAULT NULL,
  `cep` int(11) DEFAULT NULL,
  `rg` varchar(11) DEFAULT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `compl_end` int(11) DEFAULT NULL,
  `nr` char(4) DEFAULT NULL,
  `telefone` char(8) DEFAULT NULL,
  `celular` char(11) DEFAULT NULL,
  PRIMARY KEY (`cod_cliente`),
  KEY `cep` (`cep`),
  CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`cep`) REFERENCES `cep` (`cep`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela animestation*.compra
DROP TABLE IF EXISTS `compra`;
CREATE TABLE IF NOT EXISTS `compra` (
  `cod_prod` int(11) DEFAULT NULL,
  `matricula` int(11) DEFAULT NULL,
  `cod_recibo` int(11) DEFAULT NULL,
  `vl_compra` decimal(10,0) DEFAULT NULL,
  `cod_cliente` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `subtotal` decimal(10,0) DEFAULT NULL,
  `nome_produto` varchar(10) DEFAULT NULL,
  KEY `cod_prod` (`cod_prod`),
  KEY `matricula` (`matricula`),
  KEY `cod_recibo` (`cod_recibo`),
  KEY `cod_cliente` (`cod_cliente`),
  CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`cod_prod`) REFERENCES `produto` (`cod_prod`),
  CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`matricula`) REFERENCES `funcionario` (`matricula`),
  CONSTRAINT `compra_ibfk_3` FOREIGN KEY (`cod_recibo`) REFERENCES `recibo` (`cod_recibo`),
  CONSTRAINT `compra_ibfk_4` FOREIGN KEY (`cod_cliente`) REFERENCES `cliente` (`cod_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela animestation*.conta
DROP TABLE IF EXISTS `conta`;
CREATE TABLE IF NOT EXISTS `conta` (
  `cod_conta` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `tipo` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`cod_conta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela animestation*.desp_forn
DROP TABLE IF EXISTS `desp_forn`;
CREATE TABLE IF NOT EXISTS `desp_forn` (
  `nr_nt_fiscal` int(11) NOT NULL AUTO_INCREMENT,
  `cnpj` int(11) DEFAULT NULL,
  `cod_conta` int(11) DEFAULT NULL,
  `dt_compra_prod` date DEFAULT NULL,
  `vl_pag` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`nr_nt_fiscal`),
  KEY `cnpj` (`cnpj`),
  KEY `cod_conta` (`cod_conta`),
  CONSTRAINT `desp_forn_ibfk_1` FOREIGN KEY (`cnpj`) REFERENCES `fornecedor` (`cnpj`),
  CONSTRAINT `desp_forn_ibfk_2` FOREIGN KEY (`cod_conta`) REFERENCES `conta` (`cod_conta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela animestation*.desp_func
DROP TABLE IF EXISTS `desp_func`;
CREATE TABLE IF NOT EXISTS `desp_func` (
  `matricula` int(11) DEFAULT NULL,
  `cod_conta` int(11) DEFAULT NULL,
  `cod_func` int(11) DEFAULT NULL,
  `cod_recibo` int(11) DEFAULT NULL,
  `valor` decimal(10,0) DEFAULT NULL,
  KEY `matricula` (`matricula`),
  KEY `cod_conta` (`cod_conta`),
  KEY `cod_recibo` (`cod_recibo`),
  CONSTRAINT `desp_func_ibfk_1` FOREIGN KEY (`matricula`) REFERENCES `funcionario` (`matricula`),
  CONSTRAINT `desp_func_ibfk_2` FOREIGN KEY (`cod_conta`) REFERENCES `conta` (`cod_conta`),
  CONSTRAINT `desp_func_ibfk_3` FOREIGN KEY (`cod_recibo`) REFERENCES `recibo` (`cod_recibo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela animestation*.desp_mci
DROP TABLE IF EXISTS `desp_mci`;
CREATE TABLE IF NOT EXISTS `desp_mci` (
  `cod_mci` int(11) DEFAULT NULL,
  `cod_conta` int(11) DEFAULT NULL,
  `valor` decimal(10,0) DEFAULT NULL,
  KEY `cod_mci` (`cod_mci`),
  KEY `cod_conta` (`cod_conta`),
  CONSTRAINT `desp_mci_ibfk_1` FOREIGN KEY (`cod_mci`) REFERENCES `mci` (`cod_mci`),
  CONSTRAINT `desp_mci_ibfk_2` FOREIGN KEY (`cod_conta`) REFERENCES `conta` (`cod_conta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela animestation*.devolucao
DROP TABLE IF EXISTS `devolucao`;
CREATE TABLE IF NOT EXISTS `devolucao` (
  `cnpj` int(11) DEFAULT NULL,
  `cod_prod` int(11) DEFAULT NULL,
  `dt_devolucao` date DEFAULT NULL,
  `vl_total` decimal(10,0) DEFAULT NULL,
  KEY `cod_prod` (`cod_prod`),
  KEY `cnpj` (`cnpj`),
  CONSTRAINT `devolucao_ibfk_1` FOREIGN KEY (`cod_prod`) REFERENCES `produto` (`cod_prod`),
  CONSTRAINT `devolucao_ibfk_2` FOREIGN KEY (`cnpj`) REFERENCES `fornecedor` (`cnpj`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela animestation*.extravio
DROP TABLE IF EXISTS `extravio`;
CREATE TABLE IF NOT EXISTS `extravio` (
  `dt_extravio` date DEFAULT NULL,
  `cod_prod` int(11) DEFAULT NULL,
  `cod_conta` int(11) DEFAULT NULL,
  `vl_total` decimal(10,0) DEFAULT NULL,
  KEY `cod_prod` (`cod_prod`),
  KEY `cod_conta` (`cod_conta`),
  CONSTRAINT `extravio_ibfk_1` FOREIGN KEY (`cod_prod`) REFERENCES `produto` (`cod_prod`),
  CONSTRAINT `extravio_ibfk_2` FOREIGN KEY (`cod_conta`) REFERENCES `conta` (`cod_conta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela animestation*.fornecedor
DROP TABLE IF EXISTS `fornecedor`;
CREATE TABLE IF NOT EXISTS `fornecedor` (
  `cnpj` int(11) NOT NULL AUTO_INCREMENT,
  `cep` int(11) DEFAULT NULL,
  `cpf` char(11) DEFAULT NULL,
  `rg` varchar(11) DEFAULT NULL,
  `dt_emis_rg` date DEFAULT NULL,
  `orgao_exp` varchar(20) DEFAULT NULL,
  `nome_empresa` varchar(30) DEFAULT NULL,
  `nome_resp` varchar(30) DEFAULT NULL,
  `telefone` char(8) DEFAULT NULL,
  `celular` char(11) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `compl_end` varchar(20) DEFAULT NULL,
  `nr` char(4) DEFAULT NULL,
  PRIMARY KEY (`cnpj`),
  KEY `cep` (`cep`),
  CONSTRAINT `fornecedor_ibfk_1` FOREIGN KEY (`cep`) REFERENCES `cep` (`cep`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela animestation*.funcionario
DROP TABLE IF EXISTS `funcionario`;
CREATE TABLE IF NOT EXISTS `funcionario` (
  `matricula` int(11) NOT NULL AUTO_INCREMENT,
  `cod_cargo` int(11) DEFAULT NULL,
  `cep` int(11) DEFAULT NULL,
  `cpf` char(11) DEFAULT NULL,
  `rg` varchar(11) DEFAULT NULL,
  `dt_emis_rg` date DEFAULT NULL,
  `orgao_exp` varchar(20) DEFAULT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `nr_cert_reserv` int(11) DEFAULT NULL,
  `nr_titulo_eleitor` int(11) DEFAULT NULL,
  `zona_eleitoral` varchar(20) DEFAULT NULL,
  `secao` varchar(20) DEFAULT NULL,
  `filiacao` varchar(20) DEFAULT NULL,
  `qualif_civil` varchar(20) DEFAULT NULL,
  `gr_de_inst` varchar(20) DEFAULT NULL,
  `nr_cart_trab` char(15) DEFAULT NULL,
  `comp_end` varchar(20) DEFAULT NULL,
  `nr` char(4) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  PRIMARY KEY (`matricula`),
  KEY `cep` (`cep`),
  CONSTRAINT `funcionario_ibfk_1` FOREIGN KEY (`cep`) REFERENCES `cep` (`cep`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela animestation*.geral
DROP TABLE IF EXISTS `geral`;
CREATE TABLE IF NOT EXISTS `geral` (
  `cod_conta` int(11) DEFAULT NULL,
  `dt_venc` date DEFAULT NULL,
  `dt_pag` date DEFAULT NULL,
  `valor` decimal(10,0) DEFAULT NULL,
  KEY `cod_conta` (`cod_conta`),
  CONSTRAINT `geral_ibfk_1` FOREIGN KEY (`cod_conta`) REFERENCES `conta` (`cod_conta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela animestation*.mci
DROP TABLE IF EXISTS `mci`;
CREATE TABLE IF NOT EXISTS `mci` (
  `cod_mci` int(11) NOT NULL AUTO_INCREMENT,
  `cod_setor` int(11) DEFAULT NULL,
  `cnpj` int(11) DEFAULT NULL,
  `classe` int(11) DEFAULT NULL,
  `capacidade` int(11) DEFAULT NULL,
  `dt_compra` date DEFAULT NULL,
  `vl_aquisicao` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`cod_mci`),
  KEY `cod_setor` (`cod_setor`),
  KEY `cnpj` (`cnpj`),
  CONSTRAINT `mci_ibfk_1` FOREIGN KEY (`cod_setor`) REFERENCES `setor` (`cod_setor`),
  CONSTRAINT `mci_ibfk_2` FOREIGN KEY (`cnpj`) REFERENCES `fornecedor` (`cnpj`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela animestation*.produto
DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `cod_prod` int(11) NOT NULL AUTO_INCREMENT,
  `nr_nt_fiscal` int(11) DEFAULT NULL,
  `cod_setor` int(11) DEFAULT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `preco_compra` decimal(10,0) DEFAULT NULL,
  `preco_venda` decimal(10,0) DEFAULT NULL,
  `qtde` int(11) DEFAULT NULL,
  `qtde_min` int(11) DEFAULT NULL,
  `tipo` varchar(15) DEFAULT NULL,
  `dt_atualizacao` date DEFAULT NULL,
  PRIMARY KEY (`cod_prod`),
  KEY `cod_setor` (`cod_setor`),
  KEY `nr_nt_fiscal` (`nr_nt_fiscal`),
  CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`cod_setor`) REFERENCES `setor` (`cod_setor`),
  CONSTRAINT `produto_ibfk_2` FOREIGN KEY (`nr_nt_fiscal`) REFERENCES `desp_forn` (`nr_nt_fiscal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela animestation*.recibo
DROP TABLE IF EXISTS `recibo`;
CREATE TABLE IF NOT EXISTS `recibo` (
  `cod_recibo` int(11) NOT NULL AUTO_INCREMENT,
  `cod_conta` int(11) DEFAULT NULL,
  `dt_recibo` date DEFAULT NULL,
  `vl_tot_recibo` decimal(10,0) DEFAULT NULL,
  `tipo` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`cod_recibo`),
  KEY `cod_conta` (`cod_conta`),
  CONSTRAINT `recibo_ibfk_1` FOREIGN KEY (`cod_conta`) REFERENCES `conta` (`cod_conta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela animestation*.setor
DROP TABLE IF EXISTS `setor`;
CREATE TABLE IF NOT EXISTS `setor` (
  `cod_setor` int(11) NOT NULL AUTO_INCREMENT,
  `corredor` int(11) DEFAULT NULL,
  `prateleira` int(11) DEFAULT NULL,
  `andar` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_setor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela animestation*.usuario
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `cod_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `matricula` int(11) DEFAULT NULL,
  `usuario` varchar(15) DEFAULT NULL,
  `senha` varchar(10) DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_usuario`),
  KEY `matricula` (`matricula`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`matricula`) REFERENCES `funcionario` (`matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
