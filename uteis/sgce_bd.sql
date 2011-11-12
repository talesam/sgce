-- phpMyAdmin SQL Dump
-- version 3.4.5deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 11/11/2011 às 23h50min
-- Versão do Servidor: 5.1.58
-- Versão do PHP: 5.3.6-13ubuntu3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `sgce_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=117 ;

--
-- Extraindo dados da tabela `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 232),
(2, 1, NULL, NULL, 'Cestas', 2, 15),
(3, 2, NULL, NULL, 'admin_index', 3, 4),
(4, 2, NULL, NULL, 'admin_gerar_cestas', 5, 6),
(5, 1, NULL, NULL, 'Companheiros', 16, 27),
(6, 5, NULL, NULL, 'admin_index', 17, 18),
(7, 5, NULL, NULL, 'admin_cadastrar', 19, 20),
(8, 5, NULL, NULL, 'admin_editar', 21, 22),
(9, 5, NULL, NULL, 'admin_consultar', 23, 24),
(10, 5, NULL, NULL, 'admin_excluir', 25, 26),
(11, 1, NULL, NULL, 'Definicoescestas', 28, 39),
(12, 11, NULL, NULL, 'admin_index', 29, 30),
(13, 11, NULL, NULL, 'admin_cadastrar', 31, 32),
(14, 11, NULL, NULL, 'admin_editar', 33, 34),
(15, 11, NULL, NULL, 'admin_consultar', 35, 36),
(16, 11, NULL, NULL, 'admin_excluir', 37, 38),
(17, 1, NULL, NULL, 'Dependentes', 40, 51),
(18, 17, NULL, NULL, 'admin_index', 41, 42),
(19, 17, NULL, NULL, 'admin_cadastrar', 43, 44),
(20, 17, NULL, NULL, 'admin_editar', 45, 46),
(21, 17, NULL, NULL, 'admin_consultar', 47, 48),
(22, 17, NULL, NULL, 'admin_excluir', 49, 50),
(23, 1, NULL, NULL, 'Encontros', 52, 61),
(24, 23, NULL, NULL, 'admin_index', 53, 54),
(25, 23, NULL, NULL, 'admin_cadastrar', 55, 56),
(26, 23, NULL, NULL, 'admin_editar', 57, 58),
(27, 23, NULL, NULL, 'admin_excluir', 59, 60),
(28, 1, NULL, NULL, 'Estoques', 62, 73),
(29, 28, NULL, NULL, 'admin_index', 63, 64),
(30, 28, NULL, NULL, 'admin_cadastrar', 65, 66),
(31, 28, NULL, NULL, 'admin_editar', 67, 68),
(32, 28, NULL, NULL, 'admin_consultar', 69, 70),
(33, 28, NULL, NULL, 'admin_excluir', 71, 72),
(34, 1, NULL, NULL, 'Familias', 74, 91),
(35, 34, NULL, NULL, 'admin_index', 75, 76),
(36, 34, NULL, NULL, 'admin_cadastrar', 77, 78),
(37, 34, NULL, NULL, 'admin_editar', 79, 80),
(38, 34, NULL, NULL, 'admin_consultar', 81, 82),
(39, 34, NULL, NULL, 'admin_excluir', 83, 84),
(40, 1, NULL, NULL, 'Frequencias', 92, 103),
(41, 40, NULL, NULL, 'admin_index', 93, 94),
(42, 1, NULL, NULL, 'Grupos', 104, 113),
(43, 42, NULL, NULL, 'admin_index', 105, 106),
(44, 42, NULL, NULL, 'admin_cadastrar', 107, 108),
(45, 42, NULL, NULL, 'admin_editar', 109, 110),
(46, 42, NULL, NULL, 'admin_excluir', 111, 112),
(47, 1, NULL, NULL, 'Logs', 114, 117),
(48, 47, NULL, NULL, 'admin_index', 115, 116),
(49, 1, NULL, NULL, 'Questionarios', 118, 131),
(50, 49, NULL, NULL, 'admin_index', 119, 120),
(51, 49, NULL, NULL, 'admin_cadastrar', 121, 122),
(52, 49, NULL, NULL, 'admin_editar', 123, 124),
(53, 49, NULL, NULL, 'admin_move_down', 125, 126),
(54, 49, NULL, NULL, 'admin_move_up', 127, 128),
(55, 49, NULL, NULL, 'admin_excluir', 129, 130),
(56, 1, NULL, NULL, 'Usuarios', 132, 155),
(57, 56, NULL, NULL, 'login', 133, 134),
(58, 56, NULL, NULL, 'recuperarsenha', 135, 136),
(59, 56, NULL, NULL, 'logout', 137, 138),
(60, 56, NULL, NULL, 'admin_login', 139, 140),
(61, 56, NULL, NULL, 'admin_logout', 141, 142),
(62, 56, NULL, NULL, 'admin_index', 143, 144),
(63, 56, NULL, NULL, 'admin_cadastrar', 145, 146),
(64, 56, NULL, NULL, 'admin_editar', 147, 148),
(65, 56, NULL, NULL, 'admin_consultar', 149, 150),
(66, 56, NULL, NULL, 'admin_excluir', 151, 152),
(67, 1, NULL, NULL, 'Voluntarios', 156, 169),
(68, 67, NULL, NULL, 'admin_index', 157, 158),
(69, 67, NULL, NULL, 'admin_cadastrar', 159, 160),
(70, 67, NULL, NULL, 'admin_editar', 161, 162),
(71, 67, NULL, NULL, 'admin_consultar', 163, 164),
(72, 67, NULL, NULL, 'admin_excluir', 165, 166),
(73, 1, NULL, NULL, 'Acl', 170, 215),
(74, 73, NULL, NULL, 'Acos', 171, 178),
(75, 74, NULL, NULL, 'admin_index', 172, 173),
(76, 74, NULL, NULL, 'admin_empty_acos', 174, 175),
(77, 74, NULL, NULL, 'admin_build_acl', 176, 177),
(78, 73, NULL, NULL, 'Aros', 179, 214),
(79, 78, NULL, NULL, 'admin_index', 180, 181),
(80, 78, NULL, NULL, 'admin_check', 182, 183),
(81, 78, NULL, NULL, 'admin_users', 184, 185),
(82, 78, NULL, NULL, 'admin_update_user_role', 186, 187),
(83, 78, NULL, NULL, 'admin_ajax_role_permissions', 188, 189),
(84, 78, NULL, NULL, 'admin_role_permissions', 190, 191),
(85, 78, NULL, NULL, 'admin_user_permissions', 192, 193),
(86, 78, NULL, NULL, 'admin_empty_permissions', 194, 195),
(87, 78, NULL, NULL, 'admin_clear_user_specific_permissions', 196, 197),
(88, 78, NULL, NULL, 'admin_grant_all_controllers', 198, 199),
(89, 78, NULL, NULL, 'admin_deny_all_controllers', 200, 201),
(90, 78, NULL, NULL, 'admin_get_role_controller_permission', 202, 203),
(91, 78, NULL, NULL, 'admin_grant_role_permission', 204, 205),
(92, 78, NULL, NULL, 'admin_deny_role_permission', 206, 207),
(93, 78, NULL, NULL, 'admin_get_user_controller_permission', 208, 209),
(94, 78, NULL, NULL, 'admin_grant_user_permission', 210, 211),
(95, 78, NULL, NULL, 'admin_deny_user_permission', 212, 213),
(96, 34, NULL, NULL, 'admin_questionario', 85, 86),
(97, 1, NULL, NULL, 'Mantimentos', 216, 227),
(98, 97, NULL, NULL, 'admin_index', 217, 218),
(99, 97, NULL, NULL, 'admin_cadastrar', 219, 220),
(100, 97, NULL, NULL, 'admin_editar', 221, 222),
(101, 97, NULL, NULL, 'admin_excluir', 223, 224),
(102, 1, NULL, NULL, 'Respostas', 228, 229),
(103, 2, NULL, NULL, 'admin_editar', 7, 8),
(104, 40, NULL, NULL, 'admin_editar', 95, 96),
(105, 40, NULL, NULL, 'admin_cadastrar', 97, 98),
(106, 40, NULL, NULL, 'admin_consultar', 99, 100),
(107, 40, NULL, NULL, 'admin_excluir', 101, 102),
(108, 2, NULL, NULL, 'admin_rel_cestas', 9, 10),
(109, 2, NULL, NULL, 'admin_rel_itens_pendentes', 11, 12),
(110, 34, NULL, NULL, 'admin_rel_aptas', 87, 88),
(111, 34, NULL, NULL, 'admin_rel_venc_matricula', 89, 90),
(112, 1, NULL, NULL, 'Itemcestas', 230, 231),
(113, 97, NULL, NULL, 'admin_rel_venc_mantimentos', 225, 226),
(114, 56, NULL, NULL, 'admin_recuperarsenha', 153, 154),
(115, 67, NULL, NULL, 'admin_rel_voluntarios', 167, 168),
(116, 2, NULL, NULL, 'admin_consultar', 13, 14);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Grupo', 1, NULL, 1, 4),
(2, NULL, 'Grupo', 2, NULL, 5, 6),
(3, NULL, 'Grupo', 3, NULL, 7, 8),
(5, NULL, 'Grupo', 5, NULL, 9, 10),
(8, 1, 'Usuario', 4, NULL, 2, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(11) NOT NULL,
  `aro_id` int(11) NOT NULL,
  `aco_id` int(11) NOT NULL,
  `_create` char(2) DEFAULT NULL,
  `_read` char(2) DEFAULT NULL,
  `_update` char(2) DEFAULT NULL,
  `_delete` char(2) DEFAULT NULL,
  PRIMARY KEY (`id`,`aro_id`,`aco_id`),
  KEY `fk_aros_has_acos_acos1` (`aco_id`),
  KEY `fk_aros_has_acos_aros1` (`aro_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(0, 2, 3, '1', '1', '1', '1'),
(0, 2, 6, '1', '1', '1', '1'),
(0, 2, 7, '1', '1', '1', '1'),
(0, 2, 8, '1', '1', '1', '1'),
(0, 2, 9, '1', '1', '1', '1'),
(0, 2, 10, '1', '1', '1', '1'),
(0, 2, 18, '1', '1', '1', '1'),
(0, 2, 19, '1', '1', '1', '1'),
(0, 2, 20, '1', '1', '1', '1'),
(0, 2, 21, '1', '1', '1', '1'),
(0, 2, 22, '1', '1', '1', '1'),
(0, 2, 29, '1', '1', '1', '1'),
(0, 2, 32, '1', '1', '1', '1'),
(0, 2, 35, '1', '1', '1', '1'),
(0, 2, 36, '1', '1', '1', '1'),
(0, 2, 37, '1', '1', '1', '1'),
(0, 2, 38, '1', '1', '1', '1'),
(0, 2, 39, '1', '1', '1', '1'),
(0, 2, 41, '1', '1', '1', '1'),
(0, 2, 50, '1', '1', '1', '1'),
(0, 2, 51, '1', '1', '1', '1'),
(0, 2, 52, '1', '1', '1', '1'),
(0, 2, 53, '1', '1', '1', '1'),
(0, 2, 54, '1', '1', '1', '1'),
(0, 2, 55, '1', '1', '1', '1'),
(0, 2, 57, '1', '1', '1', '1'),
(0, 2, 59, '1', '1', '1', '1'),
(0, 2, 60, '1', '1', '1', '1'),
(0, 2, 61, '1', '1', '1', '1'),
(0, 2, 62, '1', '1', '1', '1'),
(0, 2, 65, '1', '1', '1', '1'),
(0, 2, 68, '1', '1', '1', '1'),
(0, 2, 71, '1', '1', '1', '1'),
(0, 2, 96, '1', '1', '1', '1'),
(0, 2, 104, '1', '1', '1', '1'),
(0, 2, 105, '1', '1', '1', '1'),
(0, 2, 106, '1', '1', '1', '1'),
(0, 2, 107, '1', '1', '1', '1'),
(0, 2, 110, '1', '1', '1', '1'),
(0, 2, 111, '1', '1', '1', '1'),
(0, 2, 114, '1', '1', '1', '1'),
(0, 2, 116, '1', '1', '1', '1'),
(0, 3, 7, '-1', '-1', '-1', '-1'),
(0, 3, 8, '-1', '-1', '-1', '-1'),
(0, 3, 10, '-1', '-1', '-1', '-1'),
(0, 3, 19, '-1', '-1', '-1', '-1'),
(0, 3, 20, '-1', '-1', '-1', '-1'),
(0, 3, 22, '-1', '-1', '-1', '-1'),
(0, 3, 36, '-1', '-1', '-1', '-1'),
(0, 3, 37, '-1', '-1', '-1', '-1'),
(0, 3, 39, '-1', '-1', '-1', '-1'),
(0, 3, 43, '-1', '-1', '-1', '-1'),
(0, 3, 44, '-1', '-1', '-1', '-1'),
(0, 3, 45, '-1', '-1', '-1', '-1'),
(0, 3, 46, '-1', '-1', '-1', '-1'),
(0, 3, 48, '-1', '-1', '-1', '-1'),
(0, 3, 50, '-1', '-1', '-1', '-1'),
(0, 3, 51, '-1', '-1', '-1', '-1'),
(0, 3, 52, '-1', '-1', '-1', '-1'),
(0, 3, 53, '-1', '-1', '-1', '-1'),
(0, 3, 54, '-1', '-1', '-1', '-1'),
(0, 3, 55, '-1', '-1', '-1', '-1'),
(0, 3, 96, '-1', '-1', '-1', '-1'),
(0, 3, 104, '-1', '-1', '-1', '-1'),
(0, 3, 105, '-1', '-1', '-1', '-1'),
(0, 3, 107, '-1', '-1', '-1', '-1'),
(0, 3, 110, '-1', '-1', '-1', '-1'),
(0, 3, 111, '-1', '-1', '-1', '-1'),
(0, 3, 115, '-1', '-1', '-1', '-1'),
(0, 5, 3, '1', '1', '1', '1'),
(0, 5, 6, '1', '1', '1', '1'),
(0, 5, 9, '1', '1', '1', '1'),
(0, 5, 18, '1', '1', '1', '1'),
(0, 5, 21, '1', '1', '1', '1'),
(0, 5, 29, '1', '1', '1', '1'),
(0, 5, 32, '1', '1', '1', '1'),
(0, 5, 35, '1', '1', '1', '1'),
(0, 5, 38, '1', '1', '1', '1'),
(0, 5, 41, '1', '1', '1', '1'),
(0, 5, 57, '1', '1', '1', '1'),
(0, 5, 59, '1', '1', '1', '1'),
(0, 5, 60, '1', '1', '1', '1'),
(0, 5, 61, '1', '1', '1', '1'),
(0, 5, 62, '1', '1', '1', '1'),
(0, 5, 65, '1', '1', '1', '1'),
(0, 5, 68, '1', '1', '1', '1'),
(0, 5, 71, '1', '1', '1', '1'),
(0, 5, 106, '1', '1', '1', '1'),
(0, 5, 114, '1', '1', '1', '1'),
(0, 5, 116, '1', '1', '1', '1'),
(1, 1, 1, '1', '1', '1', '1'),
(2, 2, 103, '-1', '-1', '-1', '-1'),
(3, 3, 3, '1', '1', '1', '1'),
(4, 3, 4, '1', '1', '1', '1'),
(5, 3, 12, '1', '1', '1', '1'),
(6, 3, 13, '1', '1', '1', '1'),
(7, 3, 14, '1', '1', '1', '1'),
(8, 3, 15, '1', '1', '1', '1'),
(9, 3, 16, '1', '1', '1', '1'),
(10, 3, 29, '1', '1', '1', '1'),
(11, 3, 30, '1', '1', '1', '1'),
(12, 3, 31, '1', '1', '1', '1'),
(13, 3, 32, '1', '1', '1', '1'),
(14, 3, 33, '1', '1', '1', '1'),
(15, 3, 57, '1', '1', '1', '1'),
(16, 3, 58, '1', '1', '1', '1'),
(17, 3, 59, '1', '1', '1', '1'),
(18, 3, 60, '1', '1', '1', '1'),
(19, 3, 61, '1', '1', '1', '1'),
(20, 3, 62, '1', '1', '1', '1'),
(21, 3, 63, '-1', '-1', '-1', '-1'),
(22, 3, 64, '-1', '-1', '-1', '-1'),
(23, 3, 65, '1', '1', '1', '1'),
(24, 3, 66, '-1', '-1', '-1', '-1'),
(25, 3, 68, '1', '1', '1', '1'),
(26, 3, 69, '-1', '-1', '-1', '-1'),
(27, 3, 70, '-1', '-1', '-1', '-1'),
(28, 3, 71, '1', '1', '1', '1'),
(29, 3, 72, '-1', '-1', '-1', '-1'),
(30, 3, 75, '-1', '-1', '-1', '-1'),
(31, 3, 76, '-1', '-1', '-1', '-1'),
(32, 3, 77, '-1', '-1', '-1', '-1'),
(33, 3, 79, '-1', '-1', '-1', '-1'),
(34, 3, 80, '-1', '-1', '-1', '-1'),
(35, 3, 81, '-1', '-1', '-1', '-1'),
(36, 3, 82, '-1', '-1', '-1', '-1'),
(37, 3, 83, '-1', '-1', '-1', '-1'),
(38, 3, 84, '-1', '-1', '-1', '-1'),
(39, 3, 85, '-1', '-1', '-1', '-1'),
(40, 3, 86, '-1', '-1', '-1', '-1'),
(41, 3, 87, '-1', '-1', '-1', '-1'),
(42, 3, 88, '-1', '-1', '-1', '-1'),
(43, 3, 89, '-1', '-1', '-1', '-1'),
(44, 3, 90, '-1', '-1', '-1', '-1'),
(45, 3, 91, '-1', '-1', '-1', '-1'),
(46, 3, 92, '-1', '-1', '-1', '-1'),
(47, 3, 93, '-1', '-1', '-1', '-1'),
(48, 3, 94, '-1', '-1', '-1', '-1'),
(49, 3, 95, '-1', '-1', '-1', '-1'),
(50, 3, 98, '1', '1', '1', '1'),
(51, 3, 99, '1', '1', '1', '1'),
(52, 3, 100, '1', '1', '1', '1'),
(53, 3, 101, '1', '1', '1', '1'),
(55, 3, 1, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cestas`
--

CREATE TABLE IF NOT EXISTS `cestas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `familia_id` int(11) DEFAULT NULL,
  `data_gerada` datetime NOT NULL,
  `data_saida` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cestas_pessoas1` (`familia_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `definicoescestas`
--

CREATE TABLE IF NOT EXISTS `definicoescestas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `quantidade` decimal(6,2) NOT NULL,
  `medida` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `definicoescestas`
--

INSERT INTO `definicoescestas` (`id`, `tipo`, `nome`, `quantidade`, `medida`) VALUES
(1, 'cesta', 'Arroz', '4.00', 'kilo'),
(2, 'cesta', 'FeijÃ£o', '2.00', 'kilo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoques`
--

CREATE TABLE IF NOT EXISTS `estoques` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `definicoescesta_id` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `complemento_qt` decimal(6,2) NOT NULL,
  `data_entrada` date NOT NULL,
  `data_vencimento` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_estoques_definicoescestas1` (`definicoescesta_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `familias`
--

CREATE TABLE IF NOT EXISTS `familias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `parente_id` int(11) DEFAULT NULL,
  `escolaridade` varchar(50) DEFAULT NULL,
  `profissao` varchar(100) DEFAULT NULL,
  `ocupacao` varchar(100) DEFAULT NULL,
  `local_trabalho` varchar(50) DEFAULT NULL,
  `beneficios` tinyint(1) DEFAULT NULL,
  `parentesco` varchar(50) DEFAULT NULL,
  `situacao` int(11) NOT NULL,
  `nome_escola` varchar(60) DEFAULT NULL,
  `manequim` varchar(45) DEFAULT NULL,
  `peso` decimal(6,2) DEFAULT NULL,
  `altura` decimal(6,2) DEFAULT NULL,
  `situacao_nutricional` tinyint(1) NOT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `nascimento` date NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `numero` varchar(7) DEFAULT NULL,
  `complemento` varchar(7) DEFAULT NULL,
  `bairro` varchar(40) NOT NULL,
  `referencia` varchar(100) DEFAULT NULL,
  `cidade` varchar(40) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `cep` varchar(9) DEFAULT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `renda` decimal(12,2) DEFAULT NULL,
  `renda_familiar` decimal(12,2) DEFAULT NULL,
  `renda_percapta` decimal(12,2) DEFAULT NULL,
  `companheiro` tinyint(1) NOT NULL,
  `dependente` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `frequencias`
--

CREATE TABLE IF NOT EXISTS `frequencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `familia_id` int(11) NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_frequencias_pessoas1` (`familia_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupos`
--

CREATE TABLE IF NOT EXISTS `grupos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `grupos`
--

INSERT INTO `grupos` (`id`, `nome`) VALUES
(1, 'Administrador'),
(2, 'Coordenador'),
(3, 'Estoquista'),
(5, 'Consultor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itemcestas`
--

CREATE TABLE IF NOT EXISTS `itemcestas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cesta_id` int(11) NOT NULL,
  `estoque_id` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_itemcestas_cestas1` (`cesta_id`),
  KEY `fk_itemcestas_estoques1` (`estoque_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `descricao` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_logs_usuarios1` (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `logs`
--

INSERT INTO `logs` (`id`, `usuario_id`, `data`, `descricao`) VALUES
(1, 4, '2011-11-11 23:47:06', 'Cadastrou usuÃ¡rio: RogÃ©rio Amorim Gomes'),
(2, 4, '2011-11-11 23:49:04', 'Excluiu usuÃ¡rio: RogÃ©rio Amorim Gomes'),
(3, 4, '2011-11-11 23:49:09', 'Excluiu usuÃ¡rio: Rafael Malatesta'),
(4, 4, '2011-11-11 23:50:05', 'Modificou usuÃ¡rio: Tales AraÃºjo MendonÃ§a');

-- --------------------------------------------------------

--
-- Estrutura da tabela `questionarios`
--

CREATE TABLE IF NOT EXISTS `questionarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pergunta` varchar(200) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `extra` text,
  `ordem` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=61 ;

--
-- Extraindo dados da tabela `questionarios`
--

INSERT INTO `questionarios` (`id`, `pergunta`, `tipo`, `extra`, `ordem`) VALUES
(7, 'CondiÃ§Ã­o habitacional', 'select', 'Aluguel, Casa PÃ³pria, Cedida', 0),
(8, 'Tipo ConstruÃ§Ã­o', 'select', 'Alvenaria, Madeira, Outro', 0),
(9, 'NÃºmero de CÃ´modos', 'text', '', 0),
(10, 'Banheiro', 'select', 'Sim, NÃ­o, Outro', 0),
(11, 'Ã¡gua encanada', 'select', 'Sim, NÃ­o', 0),
(12, 'Esgoto Encanado', 'select', 'Sim, NÃ­o', 0),
(13, 'Energia EÃ©trica', 'select', 'Sim, NÃ­o', 0),
(14, 'Casa ou Terreno em risco?', 'select', 'Sim, NÃ­o', 0),
(15, 'Caso resposta anterior seja "SIM", Qual?', 'text', '', 0),
(16, 'Filtro de Ã¡gua', 'select', 'Sim, NÃ­o', 0),
(17, 'Horta Caseira', 'select', 'Sim, NÃ­o', 0),
(18, 'QuestÃµes de vulnerabilidade (Conselho Tutelar, violÃªncia, presidiÃ¡rio, vivÃªncia de rua, abrigo):', 'obs', '', 0),
(19, 'Quem possui Identidade ', 'text', '', 0),
(20, 'Quem possui carteira de trabalho', 'text', '', 0),
(21, 'Quem possui CPF', 'text', '', 0),
(22, 'Datas encaminhamento ao Ã“rgÃ­o responsÃ¡vel', 'text', '', 0),
(23, 'Quem possui certidÃ­o de nascimento', 'text', '', 0),
(24, 'Quem nÃ­o possui certidÃ­o', 'text', '', 0),
(25, 'Carteira de VacinaÃ§Ã­o', 'select', 'Em dia, Atrasado', 0),
(26, 'Quem estÃ¡ com a vacinaÃ§Ã­o atrasada', 'text', '', 0),
(27, 'Data encaminhamento ao Posto de SaÃºde', 'text', '', 0),
(28, 'Ensino', 'select', 'Todas as crianÃ§as e jovens estÃ­o frequentando as aulas, NÃ­o', 0),
(29, 'Quem nÃ­o estÃ¡ frequentando as aulas', 'text', '', 0),
(30, 'Data de contato com a Escola visando a reinserÃ§Ã­o do aluno', 'text', '', 0),
(31, 'Encaminhamentos NecessÃ¡rios', 'text', '', 0),
(32, 'Filtro de Ã¡gua', 'select', 'Sim, NÃ­o', 0),
(33, 'Limpeza da casa', 'select', 'Bom, Regular, PÃ©ssimo', 0),
(34, 'Animais DomÃ©sticos', 'multiple', 'Cachorro, Gato, Galinha, Porco, Cabrito, Cavalo, Outro', 0),
(35, 'Qual outro animal', 'text', '', 0),
(36, 'Animais estÃ­o bem cuidados', 'select', 'Sim, NÃ­o', 0),
(37, 'Acondicionamento do Lixo', 'select', 'Bom, Ruim', 0),
(38, 'ProvidÃªncias NecessÃ¡rias', 'obs', '', 0),
(39, 'Gravidez na AdolescÃªncia', 'select', 'Sim, NÃ­o', 0),
(40, 'Uso mÃ©todos contraceptivos (qual?)', 'text', '', 0),
(41, 'Necessita orientaÃ§Ã­o mÃ©dica para planejamento de gravidez', 'select', 'Sim, NÃ­o', 0),
(42, 'Data encaminhamento planej. gravidez', 'text', '', 0),
(43, 'Necessita encaminhamento ao ServiÃ§o de Psicologia', 'select', 'Sim, NÃ­o', 0),
(44, 'Nome e motivo da pessoa a ser encaminhada para Psicologia', 'text', '', 0),
(45, 'Data encaminhamento Psicologia', 'text', '', 0),
(46, 'Necessita encaminhamento ao Conselho da CrianÃ§a e Adolescente', 'select', 'Sim, NÃ­o', 0),
(47, 'Nome e motivo da pessoa a ser encaminhada para Conselho da CrianÃ§a e Adolescente', 'obs', '', 0),
(48, 'Possui curso tÃ©cnico/Profissionalizante realizado', 'select', 'Sim, NÃ­o', 0),
(49, 'Qual curso', 'text', '', 0),
(50, 'Gostaria de fazer algum outro curso, QUAL?', 'text', '', 0),
(51, 'Necessita equipamentos sociais pÃºblicos voltados para', 'multiple', 'SaÃºde, Lazer, Creche, AtenÃ§Ã­o p/ Idoso, AtenÃ§Ã­o p/ adolescentes', 0),
(52, 'Necessita equipamentos sociais pÃºblicos voltados para ENSINO, QUAL?', 'text', '', 0),
(53, 'Existe OrganizaÃ§Ã­o ComunitÃ¡ria no local', 'select', 'Sim, NÃ­o', 0),
(54, 'Participa de OrganizaÃ§Ã­o ComunitÃ¡ria? QUAL TIPO?', 'text', '', 0),
(55, 'O que Ã© mais importante para sua famÃ­Â­lia neste momento? O que pretende fazer a respeito?', 'obs', '', 0),
(56, 'O que vocÃª gostaria que fosse oferecido pela instituiÃ§Ã­o (Cursos, Materiais, ServiÃ§os etc)', 'obs', '', 0),
(57, 'EstÃ¡ inscrito no Bolsa FamÃ­Â­lia', 'select', 'Sim, NÃ­o', 0),
(58, 'Recebe ajuda de outra instituiÃ§Ã­o? QUAL?', 'text', '', 0),
(59, 'JÃ¡ tem cadastro na EMCASA p/ compra de lote ou casa', 'select', 'Sim, NÃ­o', 0),
(60, 'DoenÃ§as na FamÃ­Â­lia? Nome da Pessoa, Qual? ', 'obs', '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostas`
--

CREATE TABLE IF NOT EXISTS `respostas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `familia_id` int(11) NOT NULL,
  `questionario_id` int(11) NOT NULL,
  `resposta` text,
  PRIMARY KEY (`id`),
  KEY `fk_respostas_questionarios1` (`questionario_id`),
  KEY `fk_respostas_pessoas1` (`familia_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grupo_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(140) NOT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `complemento` varchar(7) DEFAULT NULL,
  `numero` varchar(7) DEFAULT NULL,
  `bairro` varchar(40) DEFAULT NULL,
  `cidade` varchar(40) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `cep` varchar(9) DEFAULT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `celular` varchar(14) DEFAULT NULL,
  `prestacao_servico` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuarios_grupos1` (`grupo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `grupo_id`, `status`, `nome`, `email`, `senha`, `cpf`, `endereco`, `complemento`, `numero`, `bairro`, `cidade`, `uf`, `cep`, `telefone`, `celular`, `prestacao_servico`) VALUES
(4, 1, 1, 'Tales AraÃºjo MendonÃ§a', 'talesam@gmail.com', '9219bd604572f3be88d37830809b8ca303171e02', '054.619.336-61', 'Rua Professor Francisco Faria', '101', '520', 'Bairu', 'Juiz de Fora', 'MG', '36050-140', '(32) 3226-3307', '(32) 8801-9351', 'InformÃ¡tica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `voluntarios`
--

CREATE TABLE IF NOT EXISTS `voluntarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `numero` varchar(7) DEFAULT NULL,
  `complemento` varchar(7) DEFAULT NULL,
  `bairro` varchar(40) DEFAULT NULL,
  `cidade` varchar(40) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `cep` varchar(9) DEFAULT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `celular` varchar(14) DEFAULT NULL,
  `prestacao_servico` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `aros_acos`
--
ALTER TABLE `aros_acos`
  ADD CONSTRAINT `fk_aros_has_acos_aros1` FOREIGN KEY (`aro_id`) REFERENCES `aros` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_aros_has_acos_acos1` FOREIGN KEY (`aco_id`) REFERENCES `acos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `cestas`
--
ALTER TABLE `cestas`
  ADD CONSTRAINT `fk_cestas_pessoas1` FOREIGN KEY (`familia_id`) REFERENCES `familias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `estoques`
--
ALTER TABLE `estoques`
  ADD CONSTRAINT `fk_estoques_definicoescestas1` FOREIGN KEY (`definicoescesta_id`) REFERENCES `definicoescestas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `frequencias`
--
ALTER TABLE `frequencias`
  ADD CONSTRAINT `fk_frequencias_pessoas1` FOREIGN KEY (`familia_id`) REFERENCES `familias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `itemcestas`
--
ALTER TABLE `itemcestas`
  ADD CONSTRAINT `fk_itemcestas_cestas1` FOREIGN KEY (`cesta_id`) REFERENCES `cestas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_itemcestas_estoques1` FOREIGN KEY (`estoque_id`) REFERENCES `estoques` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `fk_logs_usuarios1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `respostas`
--
ALTER TABLE `respostas`
  ADD CONSTRAINT `fk_respostas_questionarios1` FOREIGN KEY (`questionario_id`) REFERENCES `questionarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_respostas_pessoas1` FOREIGN KEY (`familia_id`) REFERENCES `familias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuarios_grupos1` FOREIGN KEY (`grupo_id`) REFERENCES `grupos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
