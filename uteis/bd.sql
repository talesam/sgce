-- phpMyAdmin SQL Dump
-- version 3.3.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Out 05, 2011 as 12:34 AM
-- Versão do Servidor: 5.1.54
-- Versão do PHP: 5.3.5-1ubuntu7.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `sgce`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=103 ;

--
-- Extraindo dados da tabela `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 204),
(2, 1, NULL, NULL, 'Cestas', 2, 7),
(3, 2, NULL, NULL, 'admin_index', 3, 4),
(4, 2, NULL, NULL, 'admin_gerar_cestas', 5, 6),
(5, 1, NULL, NULL, 'Companheiros', 8, 19),
(6, 5, NULL, NULL, 'admin_index', 9, 10),
(7, 5, NULL, NULL, 'admin_cadastrar', 11, 12),
(8, 5, NULL, NULL, 'admin_editar', 13, 14),
(9, 5, NULL, NULL, 'admin_consultar', 15, 16),
(10, 5, NULL, NULL, 'admin_excluir', 17, 18),
(11, 1, NULL, NULL, 'Definicoescestas', 20, 31),
(12, 11, NULL, NULL, 'admin_index', 21, 22),
(13, 11, NULL, NULL, 'admin_cadastrar', 23, 24),
(14, 11, NULL, NULL, 'admin_editar', 25, 26),
(15, 11, NULL, NULL, 'admin_consultar', 27, 28),
(16, 11, NULL, NULL, 'admin_excluir', 29, 30),
(17, 1, NULL, NULL, 'Dependentes', 32, 43),
(18, 17, NULL, NULL, 'admin_index', 33, 34),
(19, 17, NULL, NULL, 'admin_cadastrar', 35, 36),
(20, 17, NULL, NULL, 'admin_editar', 37, 38),
(21, 17, NULL, NULL, 'admin_consultar', 39, 40),
(22, 17, NULL, NULL, 'admin_excluir', 41, 42),
(23, 1, NULL, NULL, 'Encontros', 44, 53),
(24, 23, NULL, NULL, 'admin_index', 45, 46),
(25, 23, NULL, NULL, 'admin_cadastrar', 47, 48),
(26, 23, NULL, NULL, 'admin_editar', 49, 50),
(27, 23, NULL, NULL, 'admin_excluir', 51, 52),
(28, 1, NULL, NULL, 'Estoques', 54, 65),
(29, 28, NULL, NULL, 'admin_index', 55, 56),
(30, 28, NULL, NULL, 'admin_cadastrar', 57, 58),
(31, 28, NULL, NULL, 'admin_editar', 59, 60),
(32, 28, NULL, NULL, 'admin_consultar', 61, 62),
(33, 28, NULL, NULL, 'admin_excluir', 63, 64),
(34, 1, NULL, NULL, 'Familias', 66, 79),
(35, 34, NULL, NULL, 'admin_index', 67, 68),
(36, 34, NULL, NULL, 'admin_cadastrar', 69, 70),
(37, 34, NULL, NULL, 'admin_editar', 71, 72),
(38, 34, NULL, NULL, 'admin_consultar', 73, 74),
(39, 34, NULL, NULL, 'admin_excluir', 75, 76),
(40, 1, NULL, NULL, 'Frequencias', 80, 83),
(41, 40, NULL, NULL, 'admin_index', 81, 82),
(42, 1, NULL, NULL, 'Grupos', 84, 93),
(43, 42, NULL, NULL, 'admin_index', 85, 86),
(44, 42, NULL, NULL, 'admin_cadastrar', 87, 88),
(45, 42, NULL, NULL, 'admin_editar', 89, 90),
(46, 42, NULL, NULL, 'admin_excluir', 91, 92),
(47, 1, NULL, NULL, 'Logs', 94, 97),
(48, 47, NULL, NULL, 'admin_index', 95, 96),
(49, 1, NULL, NULL, 'Questionarios', 98, 111),
(50, 49, NULL, NULL, 'admin_index', 99, 100),
(51, 49, NULL, NULL, 'admin_cadastrar', 101, 102),
(52, 49, NULL, NULL, 'admin_editar', 103, 104),
(53, 49, NULL, NULL, 'admin_move_down', 105, 106),
(54, 49, NULL, NULL, 'admin_move_up', 107, 108),
(55, 49, NULL, NULL, 'admin_excluir', 109, 110),
(56, 1, NULL, NULL, 'Usuarios', 112, 133),
(57, 56, NULL, NULL, 'login', 113, 114),
(58, 56, NULL, NULL, 'recuperarsenha', 115, 116),
(59, 56, NULL, NULL, 'logout', 117, 118),
(60, 56, NULL, NULL, 'admin_login', 119, 120),
(61, 56, NULL, NULL, 'admin_logout', 121, 122),
(62, 56, NULL, NULL, 'admin_index', 123, 124),
(63, 56, NULL, NULL, 'admin_cadastrar', 125, 126),
(64, 56, NULL, NULL, 'admin_editar', 127, 128),
(65, 56, NULL, NULL, 'admin_consultar', 129, 130),
(66, 56, NULL, NULL, 'admin_excluir', 131, 132),
(67, 1, NULL, NULL, 'Voluntarios', 134, 145),
(68, 67, NULL, NULL, 'admin_index', 135, 136),
(69, 67, NULL, NULL, 'admin_cadastrar', 137, 138),
(70, 67, NULL, NULL, 'admin_editar', 139, 140),
(71, 67, NULL, NULL, 'admin_consultar', 141, 142),
(72, 67, NULL, NULL, 'admin_excluir', 143, 144),
(73, 1, NULL, NULL, 'Acl', 146, 191),
(74, 73, NULL, NULL, 'Acos', 147, 154),
(75, 74, NULL, NULL, 'admin_index', 148, 149),
(76, 74, NULL, NULL, 'admin_empty_acos', 150, 151),
(77, 74, NULL, NULL, 'admin_build_acl', 152, 153),
(78, 73, NULL, NULL, 'Aros', 155, 190),
(79, 78, NULL, NULL, 'admin_index', 156, 157),
(80, 78, NULL, NULL, 'admin_check', 158, 159),
(81, 78, NULL, NULL, 'admin_users', 160, 161),
(82, 78, NULL, NULL, 'admin_update_user_role', 162, 163),
(83, 78, NULL, NULL, 'admin_ajax_role_permissions', 164, 165),
(84, 78, NULL, NULL, 'admin_role_permissions', 166, 167),
(85, 78, NULL, NULL, 'admin_user_permissions', 168, 169),
(86, 78, NULL, NULL, 'admin_empty_permissions', 170, 171),
(87, 78, NULL, NULL, 'admin_clear_user_specific_permissions', 172, 173),
(88, 78, NULL, NULL, 'admin_grant_all_controllers', 174, 175),
(89, 78, NULL, NULL, 'admin_deny_all_controllers', 176, 177),
(90, 78, NULL, NULL, 'admin_get_role_controller_permission', 178, 179),
(91, 78, NULL, NULL, 'admin_grant_role_permission', 180, 181),
(92, 78, NULL, NULL, 'admin_deny_role_permission', 182, 183),
(93, 78, NULL, NULL, 'admin_get_user_controller_permission', 184, 185),
(94, 78, NULL, NULL, 'admin_grant_user_permission', 186, 187),
(95, 78, NULL, NULL, 'admin_deny_user_permission', 188, 189),
(96, 34, NULL, NULL, 'admin_questionario', 77, 78),
(97, 1, NULL, NULL, 'Mantimentos', 192, 201),
(98, 97, NULL, NULL, 'admin_index', 193, 194),
(99, 97, NULL, NULL, 'admin_cadastrar', 195, 196),
(100, 97, NULL, NULL, 'admin_editar', 197, 198),
(101, 97, NULL, NULL, 'admin_excluir', 199, 200),
(102, 1, NULL, NULL, 'Respostas', 202, 203);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Grupo', 1, NULL, 1, 6),
(2, NULL, 'Grupo', 2, NULL, 7, 8),
(3, NULL, 'Grupo', 3, NULL, 9, 10),
(5, NULL, 'Grupo', 5, NULL, 11, 12),
(7, 1, 'Usuario', 3, NULL, 2, 3),
(8, 1, 'Usuario', 4, NULL, 4, 5);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(0, 1, 1, '1', '1', '1', '1');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8998 ;

--
-- Extraindo dados da tabela `cestas`
--

INSERT INTO `cestas` (`id`, `familia_id`, `data_gerada`, `data_saida`) VALUES
(1, NULL, '2011-09-29 22:42:02', NULL),
(2, NULL, '2011-09-29 22:42:02', NULL),
(3, NULL, '2011-09-29 22:42:02', NULL),
(4, NULL, '2011-09-29 22:42:02', NULL),
(5, NULL, '2011-09-29 22:42:02', NULL),
(6, NULL, '2011-09-29 22:42:02', NULL),
(7, NULL, '2011-09-29 22:42:02', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cestas_estoques`
--

CREATE TABLE IF NOT EXISTS `cestas_estoques` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cesta_id` int(11) NOT NULL,
  `estoque_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`cesta_id`,`estoque_id`),
  KEY `fk_cestas_has_estoques_cestas1` (`cesta_id`),
  KEY `fk_cestas_has_estoques_estoques1` (`estoque_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `cestas_estoques`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `definicoescestas`
--

CREATE TABLE IF NOT EXISTS `definicoescestas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `medida` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `definicoescestas`
--

INSERT INTO `definicoescestas` (`id`, `tipo`, `nome`, `quantidade`, `medida`) VALUES
(1, 'cesta', 'arroz', 5, 'kilo'),
(2, 'cesta', 'feijao', 3, 'kilo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoques`
--

CREATE TABLE IF NOT EXISTS `estoques` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `definicoescesta_id` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `complemento_qt` int(11) NOT NULL,
  `data_entrada` date NOT NULL,
  `data_vencimento` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_estoques_definicoescestas1` (`definicoescesta_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `estoques`
--

INSERT INTO `estoques` (`id`, `definicoescesta_id`, `quantidade`, `complemento_qt`, `data_entrada`, `data_vencimento`) VALUES
(1, 1, 1, 1, '2011-09-29', '2011-10-29'),
(2, 1, 10, 1, '2011-09-29', '2011-12-29'),
(3, 1, 5, 2, '2011-09-29', '2011-10-29'),
(4, 2, 15, 1, '2011-09-29', '2011-11-29');

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
  `parentesco` int(11) DEFAULT NULL,
  `situacao` int(11) NOT NULL,
  `nome_escola` varchar(60) DEFAULT NULL,
  `manequim` varchar(45) DEFAULT NULL,
  `peso` double DEFAULT NULL,
  `altura` double DEFAULT NULL,
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
  `cep` varchar(10) DEFAULT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `renda` float DEFAULT NULL,
  `renda_familiar` float DEFAULT NULL,
  `renda_percapta` float DEFAULT NULL,
  `companheiro` tinyint(1) NOT NULL,
  `dependente` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `familias`
--

INSERT INTO `familias` (`id`, `nome`, `parente_id`, `escolaridade`, `profissao`, `ocupacao`, `local_trabalho`, `beneficios`, `parentesco`, `situacao`, `nome_escola`, `manequim`, `peso`, `altura`, `situacao_nutricional`, `cpf`, `nascimento`, `endereco`, `numero`, `complemento`, `bairro`, `referencia`, `cidade`, `uf`, `cep`, `telefone`, `renda`, `renda_familiar`, `renda_percapta`, `companheiro`, `dependente`) VALUES
(1, 'Tales AraÃºjo MendonÃ§a2', NULL, '4', 'Estudante', 'Pensador', 'Casa', 1, NULL, 1, NULL, NULL, NULL, NULL, 0, '123.456.789-09', '1969-12-31', 'Rua Professor Francisco Faria', '520', '101', 'Bairu', 'Perto da Mercearia Mont Serrat', 'Juiz de Fora', NULL, NULL, '(33) 3333-3333', NULL, 10, 0.25, 1, 1),
(2, 'Mariazinha do bole bole', 1, '1', 'pedreiro', 'pedriro', 'casa', 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '1969-12-31', '', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0),
(4, 'chaves', NULL, '0', 'nenhuma', 'nenhuma', 'nenhum', 0, NULL, 0, NULL, NULL, NULL, NULL, 0, '999.999.999-99', '0000-00-00', 'vila chaviana', '1', 'barril', 'patio', 'do lado da escada', 'tangamandÃ¡pio', NULL, NULL, '(32) 1234-567', NULL, 1, 100, 1, 1),
(5, 'chiquinha', 4, 'analfabeto', 'nenhuma', 'nenhuma', 'aaa', 1, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '0000-00-00', '', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0),
(6, 'inhonho', 4, 'analfabeto', NULL, 'servente', NULL, NULL, 3, 0, 'lucy de castro', '38/39', 200, 1, 0, NULL, '2011-09-29', '', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, 1),
(7, 'aaaaa', 1, '0', 'teste', 'nada', 'alguma coisa', 0, NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '1969-12-31', '', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `frequencias`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `grupos`
--

CREATE TABLE IF NOT EXISTS `grupos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

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
-- Estrutura da tabela `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_logs_usuarios1` (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `logs`
--

INSERT INTO `logs` (`id`, `usuario_id`, `data`, `descricao`) VALUES
(1, 3, '2011-10-04 16:06:50', 'Modificou voluntÃ¡rio: seu barriga'),
(2, 3, '2011-10-04 16:34:46', 'Cadastrou usuÃ¡rio: Tales AraÃºjo MendonÃ§a'),
(3, 4, '2011-10-04 23:44:07', 'Modificou usuÃ¡rio: Tales AraÃºjo MendonÃ§a'),
(4, 3, '2011-10-04 23:45:00', 'Modificou usuÃ¡rio: Tales AraÃºjo MendonÃ§a');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `questionarios`
--

INSERT INTO `questionarios` (`id`, `pergunta`, `tipo`, `extra`, `ordem`) VALUES
(1, 'VocÃª gosta de sorvete?', 'checkbox', '', 0),
(2, 'Quais animais vc tem em casa?', 'multiple', 'LeÃ£o, Cavalo, Anta, Porco, Vaca, Puta', 0),
(3, 'Descreva como foi descobrir que Ã© gay.', 'text', '', 0),
(4, 'Qual Ã© a cor da sua namorda?', 'select', 'Preta, Branca, Loira, Morena', 0),
(6, 'Vc tem um carro?', 'checkbox', '', 0),
(7, 'Escolha uma cor', 'select', 'Preto, Branca, Amarelo', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `respostas`
--

INSERT INTO `respostas` (`id`, `familia_id`, `questionario_id`, `resposta`) VALUES
(1, 1, 1, NULL),
(2, 1, 2, 'Cavalo, Porco, Puta'),
(3, 1, 3, ''),
(4, 1, 4, 'Preta'),
(5, 1, 6, NULL),
(6, 1, 7, 'Preto');

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
  `cpf` varchar(14) NOT NULL,
  `rg` varchar(10) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `complemento` varchar(7) DEFAULT NULL,
  `numero` varchar(7) DEFAULT NULL,
  `bairro` varchar(40) DEFAULT NULL,
  `cidade` varchar(40) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `cep` varchar(9) DEFAULT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `celular` varchar(14) DEFAULT NULL,
  `prestacao_servico` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuarios_grupos1` (`grupo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `grupo_id`, `status`, `nome`, `email`, `senha`, `cpf`, `rg`, `endereco`, `complemento`, `numero`, `bairro`, `cidade`, `uf`, `cep`, `telefone`, `celular`, `prestacao_servico`) VALUES
(3, 1, 1, 'Edinei L. Cipriani', 'phpedinei@gmail.com', '748a36e72fd23b6fb45711592cff2472918cdc11', '058.234.749-11', NULL, 'Av Luiz Lunardi ', '', '890', 'Centro', 'Xaxim', 'SC', '89825-000', '(49) 3329-352', '(49) 8421-352', ''),
(4, 1, 1, 'Tales AraÃºjo MendonÃ§a', 'talesam@gmail.com', '9219bd604572f3be88d37830809b8ca303171e02', '054.619.336-61', NULL, 'Rua Professor Francisco Faria', '520', '101', 'Bairu', 'Juiz de Fora', 'MG', '36050-140', '(32) 3226-3307', '(32) 8801-9351', 'InformÃ¡tica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `voluntarios`
--

CREATE TABLE IF NOT EXISTS `voluntarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL,
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
  `prestacao_servico` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `voluntarios`
--

INSERT INTO `voluntarios` (`id`, `status`, `nome`, `email`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `cep`, `telefone`, `celular`, `prestacao_servico`) VALUES
(2, 1, 'seu barriga', 'barriga@chaves.com.br', 'acapulco street', '101', 'apto', 'centro', 'cheveslandia', 'RJ', '36120-000', '(11) 1111-1111', '(22) 2222-2222', 'cobranÃ§as');

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
-- Restrições para a tabela `cestas_estoques`
--
ALTER TABLE `cestas_estoques`
  ADD CONSTRAINT `fk_cestas_has_estoques_cestas1` FOREIGN KEY (`cesta_id`) REFERENCES `cestas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cestas_has_estoques_estoques1` FOREIGN KEY (`estoque_id`) REFERENCES `estoques` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
