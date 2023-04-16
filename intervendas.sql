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


-- Copiando estrutura do banco de dados para intervendas*
DROP DATABASE IF EXISTS `intervendas*`;
CREATE DATABASE IF NOT EXISTS `intervendas*` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `intervendas*`;

-- Copiando estrutura para tabela intervendas*.caixa
DROP TABLE IF EXISTS `caixa`;
CREATE TABLE IF NOT EXISTS `caixa` (
  `cod_caixa` int(11) NOT NULL AUTO_INCREMENT,
  `qt_produto` int(11) DEFAULT NULL,
  `vl_venda` decimal(10,0) DEFAULT NULL,
  `vl_subtotal` decimal(10,0) DEFAULT NULL,
  `cod_usuario` int(11) DEFAULT NULL,
  `cod_cupom` int(11) DEFAULT NULL,
  `cod_produto` int(11) DEFAULT NULL,
  `dt_venda` date DEFAULT NULL,
  PRIMARY KEY (`cod_caixa`),
  KEY `cod_produto` (`cod_produto`),
  KEY `cod_usuario` (`cod_usuario`),
  KEY `cod_cupom` (`cod_cupom`),
  CONSTRAINT `caixa_ibfk_1` FOREIGN KEY (`cod_produto`) REFERENCES `produto` (`cod_produto`),
  CONSTRAINT `caixa_ibfk_2` FOREIGN KEY (`cod_usuario`) REFERENCES `usuario` (`cod_usuario`),
  CONSTRAINT `caixa_ibfk_3` FOREIGN KEY (`cod_cupom`) REFERENCES `cupom_fiscal` (`cod_cupom`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela intervendas*.cep
DROP TABLE IF EXISTS `cep`;
CREATE TABLE IF NOT EXISTS `cep` (
  `cep` int(11) NOT NULL AUTO_INCREMENT,
  `logradouro` varchar(20) DEFAULT NULL,
  `bairro` varchar(20) DEFAULT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  `uf` char(2) DEFAULT NULL,
  PRIMARY KEY (`cep`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela intervendas*.cliente
DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `cod_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(30) DEFAULT NULL,
  `cpf_cliente` char(11) DEFAULT NULL,
  `tel_cliente` char(8) DEFAULT NULL,
  `cel_ciente` char(11) DEFAULT NULL,
  `sexo_cliente` char(1) DEFAULT NULL,
  `cep` int(11) DEFAULT NULL,
  `numero_endereco_cliente` char(4) DEFAULT NULL,
  `complemento_endereco_cliente` varchar(15) DEFAULT NULL,
  `dt_cadastramento_cliente` date DEFAULT NULL,
  `email_cliente` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`cod_cliente`),
  KEY `cep` (`cep`),
  CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`cep`) REFERENCES `cep` (`cep`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela intervendas*.cupom_fiscal
DROP TABLE IF EXISTS `cupom_fiscal`;
CREATE TABLE IF NOT EXISTS `cupom_fiscal` (
  `cod_cupom` int(11) NOT NULL AUTO_INCREMENT,
  `cod_fpgto` int(11) DEFAULT NULL,
  `valor_total` decimal(10,0) DEFAULT NULL,
  `STATUS` int(11) DEFAULT NULL,
  `data_venda` date DEFAULT NULL,
  `valor_recebido` decimal(10,0) DEFAULT NULL,
  `troco` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`cod_cupom`),
  KEY `cod_fpgto` (`cod_fpgto`),
  CONSTRAINT `cupom_fiscal_ibfk_1` FOREIGN KEY (`cod_fpgto`) REFERENCES `forma_pagamento` (`cod_fpgto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela intervendas*.devolucao
DROP TABLE IF EXISTS `devolucao`;
CREATE TABLE IF NOT EXISTS `devolucao` (
  `cod_devolucao` int(11) NOT NULL AUTO_INCREMENT,
  `cod_produto` int(11) DEFAULT NULL,
  `obs` varchar(15) DEFAULT NULL,
  `dt_devolucao` date DEFAULT NULL,
  `vl_devolucao` decimal(10,0) DEFAULT NULL,
  `qtde` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_devolucao`),
  KEY `cod_produto` (`cod_produto`),
  CONSTRAINT `devolucao_ibfk_1` FOREIGN KEY (`cod_produto`) REFERENCES `produto` (`cod_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela intervendas*.forma_pagamento
DROP TABLE IF EXISTS `forma_pagamento`;
CREATE TABLE IF NOT EXISTS `forma_pagamento` (
  `cod_fpgto` int(11) NOT NULL AUTO_INCREMENT,
  `forma_pagamento` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_fpgto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela intervendas*.fornecedor
DROP TABLE IF EXISTS `fornecedor`;
CREATE TABLE IF NOT EXISTS `fornecedor` (
  `cod_fornecedor` int(11) NOT NULL AUTO_INCREMENT,
  `nome_fornecedor` varchar(20) DEFAULT NULL,
  `cep` int(11) DEFAULT NULL,
  `numero` char(4) DEFAULT NULL,
  `complemento` varchar(10) DEFAULT NULL,
  `tel_fornecedor` char(8) DEFAULT NULL,
  `email_fornecedor` varchar(20) DEFAULT NULL,
  `nome_representante` varchar(30) DEFAULT NULL,
  `cnpj` varchar(20) DEFAULT NULL,
  `cel_representante` char(11) DEFAULT NULL,
  PRIMARY KEY (`cod_fornecedor`),
  KEY `cep` (`cep`),
  CONSTRAINT `fornecedor_ibfk_1` FOREIGN KEY (`cep`) REFERENCES `cep` (`cep`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela intervendas*.funcionario
DROP TABLE IF EXISTS `funcionario`;
CREATE TABLE IF NOT EXISTS `funcionario` (
  `cod_funcionario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_funcionario` varchar(20) DEFAULT NULL,
  `cpf_funcionario` char(11) DEFAULT NULL,
  `rg_funcionario` char(11) DEFAULT NULL,
  `tel_funcionario` char(8) DEFAULT NULL,
  `cel_funcionario` char(11) DEFAULT NULL,
  `email_funcionario` varchar(20) DEFAULT NULL,
  `numero_endereco` char(4) DEFAULT NULL,
  `complemento_endereco` varchar(10) DEFAULT NULL,
  `dt_nascimento` date DEFAULT NULL,
  `sexo_funcionario` char(1) DEFAULT NULL,
  `dt_cadastramento` date DEFAULT NULL,
  `cep` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_funcionario`),
  KEY `cep` (`cep`),
  CONSTRAINT `funcionario_ibfk_1` FOREIGN KEY (`cep`) REFERENCES `cep` (`cep`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela intervendas*.produto
DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `cod_produto` int(11) NOT NULL AUTO_INCREMENT,
  `descricao_produto` varchar(15) DEFAULT NULL,
  `localizacao_produto` varchar(30) DEFAULT NULL,
  `vl_compra_produto` decimal(10,0) DEFAULT NULL,
  `tempo_garantia_produto` date DEFAULT NULL,
  `cod_fornecedor` int(11) DEFAULT NULL,
  `qt_min_estocada` int(11) DEFAULT NULL,
  `qt_produto_estocada` int(11) DEFAULT NULL,
  `vl_venda_produto` decimal(10,0) DEFAULT NULL,
  `notafiscal_produto` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_produto`),
  KEY `cod_fornecedor` (`cod_fornecedor`),
  CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`cod_fornecedor`) REFERENCES `fornecedor` (`cod_fornecedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela intervendas*.usuario
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `cod_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(15) DEFAULT NULL,
  `senha` varchar(10) DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL,
  `cod_funcionario` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_usuario`),
  KEY `cod_funcionario` (`cod_funcionario`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`cod_funcionario`) REFERENCES `funcionario` (`cod_funcionario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
