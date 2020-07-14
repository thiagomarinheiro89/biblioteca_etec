-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.10-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para bd_etec
CREATE DATABASE IF NOT EXISTS `bd_etec` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `bd_etec`;

-- Copiando estrutura para tabela bd_etec.tb_alunos
CREATE TABLE IF NOT EXISTS `tb_alunos` (
  `matricula` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`matricula`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela bd_etec.tb_alunos: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_alunos` DISABLE KEYS */;
INSERT INTO `tb_alunos` (`matricula`, `nome`, `data_nasc`, `email`, `telefone`) VALUES
	(1, 'Aluna Teste', '1989-01-03', 'teste@teste.com.br', '1140512755'),
	(2, 'Aluna teste 2', '1982-03-30', 'teste2@teste.com.br', '123456'),
	(3, 'Aluna Teste 3', '1989-01-30', 'email3@teste.com.br', '1156987453'),
	(4, 'Thiago', '1989-01-03', 'marinheirocriacoes@gmail.com', '11 985674123');
/*!40000 ALTER TABLE `tb_alunos` ENABLE KEYS */;

-- Copiando estrutura para tabela bd_etec.tb_modulos
CREATE TABLE IF NOT EXISTS `tb_modulos` (
  `id_modulo` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) DEFAULT NULL,
  `arquivo_base` varchar(255) DEFAULT NULL,
  `ordem` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_modulo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela bd_etec.tb_modulos: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_modulos` DISABLE KEYS */;
INSERT INTO `tb_modulos` (`id_modulo`, `titulo`, `arquivo_base`, `ordem`) VALUES
	(1, 'Obras', 'livros.html', 1),
	(2, 'Emprestimos', 'Emprestimos.php', 2),
	(3, 'Usuários', 'usuarios.php', 4),
	(4, 'Alunos', 'alunos/alunos.php', 3),
	(5, 'Relatórios', 'relatorios.php', 5);
/*!40000 ALTER TABLE `tb_modulos` ENABLE KEYS */;

-- Copiando estrutura para tabela bd_etec.tb_obras
CREATE TABLE IF NOT EXISTS `tb_obras` (
  `id_obra` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_obra` varchar(50) NOT NULL DEFAULT '0',
  `autor_obra` varchar(50) NOT NULL DEFAULT '0',
  `tipo_obra` varchar(50) NOT NULL DEFAULT '0',
  `excluido` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_obra`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela bd_etec.tb_obras: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_obras` DISABLE KEYS */;
INSERT INTO `tb_obras` (`id_obra`, `titulo_obra`, `autor_obra`, `tipo_obra`, `excluido`) VALUES
	(3, 'O Senhor dos aneis a sociedade dos anel', 'J. R. R. Tolkien', 'DVD', 0),
	(5, 'O Escaravelho do Diabo', 'Lúcia Machado de Almeida', 'Livro', 0),
	(6, 'A menina e o ave encantada', 'Desconhecido', 'Livro', 0),
	(8, 'De volta ao Jogo', 'John Wick', 'DVD', 0);
/*!40000 ALTER TABLE `tb_obras` ENABLE KEYS */;

-- Copiando estrutura para tabela bd_etec.tb_usuario
CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) DEFAULT NULL,
  `login` varchar(20) DEFAULT NULL,
  `Senha` varchar(128) DEFAULT NULL,
  `ativo` tinyint(4) DEFAULT 1,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela bd_etec.tb_usuario: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_usuario` DISABLE KEYS */;
INSERT INTO `tb_usuario` (`id_usuario`, `Nome`, `login`, `Senha`, `ativo`) VALUES
	(1, 'Thiago Marinheiro', 'thiago', '123456', 1),
	(2, 'Sandra', 'sandra', '654321', 1),
	(3, 'Judith Ferreira', 'judith', '456', 1),
	(7, 'Fernanda', 'fernanda', '2356.', 1);
/*!40000 ALTER TABLE `tb_usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
