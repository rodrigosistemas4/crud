# crud
Crud em Php para teste de Habilidade.



Estrutura das Tabelas de Banco de Dados:

CREATE TABLE `financeiro` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_cliente` int(11) DEFAULT NULL,
  `valor` double(10,2) DEFAULT NULL,
  `descricao` text COLLATE latin1_general_ci,
  `data_vencimento` date DEFAULT NULL,
  `mora_dia` double(10,2) DEFAULT NULL,
  `banco` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `data_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updating` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;


CREATE TABLE `clientes` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `ativo` enum('true','false') COLLATE latin1_general_ci DEFAULT 'true',
  `nome` varchar(150) COLLATE latin1_general_ci DEFAULT NULL,
  `cpf` int(11) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `rg` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `email` varchar(150) COLLATE latin1_general_ci DEFAULT NULL,
  `endereco` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `numero` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `bairro` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `cidade` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `estado` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `complemento` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `cep` varchar(9) COLLATE latin1_general_ci DEFAULT NULL,
  `celular` int(9) DEFAULT NULL,
  `data_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
