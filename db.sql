-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.24-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para mmo
CREATE DATABASE IF NOT EXISTS `mmo` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `mmo`;

-- Copiando estrutura para tabela mmo.tb_users
CREATE TABLE IF NOT EXISTS `tb_users` (
  `id_user` int(11) DEFAULT NULL,
  `user_token` varchar(250) DEFAULT NULL,
  `user_complete_name` varchar(250) DEFAULT NULL,
  `user_email` varchar(250) DEFAULT NULL,
  `user_password` varchar(250) DEFAULT NULL,
  `user_cash` int(11) DEFAULT 1,
  `user_experience` double DEFAULT 0.1,
  `user_level` int(11) DEFAULT 1,
  `user_max_life` int(11) DEFAULT 100,
  `user_max_defense` int(11) DEFAULT 100,
  `user_max_mana` int(11) DEFAULT 100,
  `user_life` int(11) DEFAULT 100,
  `user_mana` int(11) DEFAULT 100
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela mmo.tb_users: ~1 rows (aproximadamente)
INSERT INTO `tb_users` (`id_user`, `user_token`, `user_complete_name`, `user_email`, `user_password`, `user_cash`, `user_experience`, `user_level`, `user_max_life`, `user_max_defense`, `user_max_mana`, `user_life`, `user_mana`) VALUES
	(NULL, 'c6b2003745cda07ed0ee52f24b4bfe41', 'EnzoBandido', '123@gmail.com', '123', 1, 0.1, 1, NULL, 100, 100, 100, 100);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
