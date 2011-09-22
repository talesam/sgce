-- phpMyAdmin SQL Dump
-- version 3.2.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Set 22, 2011 as 03:46 AM
-- Versão do Servidor: 5.1.44
-- Versão do PHP: 5.3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `sgce2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acos`
--

CREATE TABLE `acos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Extraindo dados da tabela `acos`
--

INSERT INTO `acos` VALUES(1, NULL, NULL, NULL, 'controllers', 1, 146);
INSERT INTO `acos` VALUES(2, 1, NULL, NULL, 'Cestas', 2, 7);
INSERT INTO `acos` VALUES(3, 2, NULL, NULL, 'admin_index', 3, 4);
INSERT INTO `acos` VALUES(4, 2, NULL, NULL, 'admin_gerar_cestas', 5, 6);
INSERT INTO `acos` VALUES(5, 1, NULL, NULL, 'Definicoescestas', 8, 17);
INSERT INTO `acos` VALUES(6, 5, NULL, NULL, 'admin_index', 9, 10);
INSERT INTO `acos` VALUES(7, 5, NULL, NULL, 'admin_cadastrar', 11, 12);
INSERT INTO `acos` VALUES(8, 5, NULL, NULL, 'admin_editar', 13, 14);
INSERT INTO `acos` VALUES(9, 5, NULL, NULL, 'admin_excluir', 15, 16);
INSERT INTO `acos` VALUES(10, 1, NULL, NULL, 'Encontros', 18, 27);
INSERT INTO `acos` VALUES(11, 10, NULL, NULL, 'admin_index', 19, 20);
INSERT INTO `acos` VALUES(12, 10, NULL, NULL, 'admin_cadastrar', 21, 22);
INSERT INTO `acos` VALUES(13, 10, NULL, NULL, 'admin_editar', 23, 24);
INSERT INTO `acos` VALUES(14, 10, NULL, NULL, 'admin_excluir', 25, 26);
INSERT INTO `acos` VALUES(15, 1, NULL, NULL, 'Estoques', 28, 37);
INSERT INTO `acos` VALUES(16, 15, NULL, NULL, 'admin_index', 29, 30);
INSERT INTO `acos` VALUES(17, 15, NULL, NULL, 'admin_cadastrar', 31, 32);
INSERT INTO `acos` VALUES(18, 15, NULL, NULL, 'admin_editar', 33, 34);
INSERT INTO `acos` VALUES(19, 15, NULL, NULL, 'admin_excluir', 35, 36);
INSERT INTO `acos` VALUES(20, 1, NULL, NULL, 'Familias', 38, 47);
INSERT INTO `acos` VALUES(21, 20, NULL, NULL, 'admin_index', 39, 40);
INSERT INTO `acos` VALUES(22, 20, NULL, NULL, 'admin_cadastrar', 41, 42);
INSERT INTO `acos` VALUES(23, 20, NULL, NULL, 'admin_editar', 43, 44);
INSERT INTO `acos` VALUES(24, 20, NULL, NULL, 'admin_excluir', 45, 46);
INSERT INTO `acos` VALUES(25, 1, NULL, NULL, 'Frequencias', 48, 51);
INSERT INTO `acos` VALUES(26, 25, NULL, NULL, 'admin_index', 49, 50);
INSERT INTO `acos` VALUES(27, 1, NULL, NULL, 'Logs', 52, 55);
INSERT INTO `acos` VALUES(28, 27, NULL, NULL, 'admin_index', 53, 54);
INSERT INTO `acos` VALUES(29, 1, NULL, NULL, 'Questionarios', 56, 69);
INSERT INTO `acos` VALUES(30, 29, NULL, NULL, 'admin_index', 57, 58);
INSERT INTO `acos` VALUES(31, 29, NULL, NULL, 'admin_cadastrar', 59, 60);
INSERT INTO `acos` VALUES(32, 29, NULL, NULL, 'admin_editar', 61, 62);
INSERT INTO `acos` VALUES(33, 29, NULL, NULL, 'admin_move_down', 63, 64);
INSERT INTO `acos` VALUES(34, 29, NULL, NULL, 'admin_move_up', 65, 66);
INSERT INTO `acos` VALUES(35, 29, NULL, NULL, 'admin_excluir', 67, 68);
INSERT INTO `acos` VALUES(36, 1, NULL, NULL, 'Usuarios', 70, 89);
INSERT INTO `acos` VALUES(37, 36, NULL, NULL, 'login', 71, 72);
INSERT INTO `acos` VALUES(38, 36, NULL, NULL, 'recuperarsenha', 73, 74);
INSERT INTO `acos` VALUES(39, 36, NULL, NULL, 'logout', 75, 76);
INSERT INTO `acos` VALUES(40, 36, NULL, NULL, 'admin_login', 77, 78);
INSERT INTO `acos` VALUES(41, 36, NULL, NULL, 'admin_logout', 79, 80);
INSERT INTO `acos` VALUES(42, 36, NULL, NULL, 'admin_index', 81, 82);
INSERT INTO `acos` VALUES(43, 36, NULL, NULL, 'admin_cadastrar', 83, 84);
INSERT INTO `acos` VALUES(44, 36, NULL, NULL, 'admin_editar', 85, 86);
INSERT INTO `acos` VALUES(45, 36, NULL, NULL, 'admin_excluir', 87, 88);
INSERT INTO `acos` VALUES(46, 1, NULL, NULL, 'Voluntarios', 90, 99);
INSERT INTO `acos` VALUES(47, 46, NULL, NULL, 'admin_index', 91, 92);
INSERT INTO `acos` VALUES(48, 46, NULL, NULL, 'admin_cadastrar', 93, 94);
INSERT INTO `acos` VALUES(49, 46, NULL, NULL, 'admin_editar', 95, 96);
INSERT INTO `acos` VALUES(50, 46, NULL, NULL, 'admin_excluir', 97, 98);
INSERT INTO `acos` VALUES(51, 1, NULL, NULL, 'Acl', 100, 145);
INSERT INTO `acos` VALUES(52, 51, NULL, NULL, 'Acos', 101, 108);
INSERT INTO `acos` VALUES(53, 52, NULL, NULL, 'admin_index', 102, 103);
INSERT INTO `acos` VALUES(54, 52, NULL, NULL, 'admin_empty_acos', 104, 105);
INSERT INTO `acos` VALUES(55, 52, NULL, NULL, 'admin_build_acl', 106, 107);
INSERT INTO `acos` VALUES(56, 51, NULL, NULL, 'Aros', 109, 144);
INSERT INTO `acos` VALUES(57, 56, NULL, NULL, 'admin_index', 110, 111);
INSERT INTO `acos` VALUES(58, 56, NULL, NULL, 'admin_check', 112, 113);
INSERT INTO `acos` VALUES(59, 56, NULL, NULL, 'admin_users', 114, 115);
INSERT INTO `acos` VALUES(60, 56, NULL, NULL, 'admin_update_user_role', 116, 117);
INSERT INTO `acos` VALUES(61, 56, NULL, NULL, 'admin_ajax_role_permissions', 118, 119);
INSERT INTO `acos` VALUES(62, 56, NULL, NULL, 'admin_role_permissions', 120, 121);
INSERT INTO `acos` VALUES(63, 56, NULL, NULL, 'admin_user_permissions', 122, 123);
INSERT INTO `acos` VALUES(64, 56, NULL, NULL, 'admin_empty_permissions', 124, 125);
INSERT INTO `acos` VALUES(65, 56, NULL, NULL, 'admin_clear_user_specific_permissions', 126, 127);
INSERT INTO `acos` VALUES(66, 56, NULL, NULL, 'admin_grant_all_controllers', 128, 129);
INSERT INTO `acos` VALUES(67, 56, NULL, NULL, 'admin_deny_all_controllers', 130, 131);
INSERT INTO `acos` VALUES(68, 56, NULL, NULL, 'admin_get_role_controller_permission', 132, 133);
INSERT INTO `acos` VALUES(69, 56, NULL, NULL, 'admin_grant_role_permission', 134, 135);
INSERT INTO `acos` VALUES(70, 56, NULL, NULL, 'admin_deny_role_permission', 136, 137);
INSERT INTO `acos` VALUES(71, 56, NULL, NULL, 'admin_get_user_controller_permission', 138, 139);
INSERT INTO `acos` VALUES(72, 56, NULL, NULL, 'admin_grant_user_permission', 140, 141);
INSERT INTO `acos` VALUES(73, 56, NULL, NULL, 'admin_deny_user_permission', 142, 143);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aros`
--

CREATE TABLE `aros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `aros`
--

INSERT INTO `aros` VALUES(1, NULL, 'Usuario', 2, NULL, 1, 2);
INSERT INTO `aros` VALUES(2, NULL, 'Grupo', 1, 'Admin', 3, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aros_acos`
--

CREATE TABLE `aros_acos` (
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

INSERT INTO `aros_acos` VALUES(0, 2, 1, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cestas`
--

CREATE TABLE `cestas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `familia_id` int(11) DEFAULT NULL,
  `data_gerada` datetime NOT NULL,
  `data_saida` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cestas_familias1` (`familia_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `cestas`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `cestas_estoques`
--

CREATE TABLE `cestas_estoques` (
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

CREATE TABLE `definicoescestas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `medida` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `definicoescestas`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `estoques`
--

CREATE TABLE `estoques` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `definicoescesta_id` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `complemento_qt` int(11) NOT NULL,
  `data_entrada` date NOT NULL,
  `data_vencimento` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_estoques_definicoescestas1` (`definicoescesta_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `estoques`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `familias`
--

CREATE TABLE `familias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `numero` varchar(7) NOT NULL,
  `complemento` varchar(7) DEFAULT NULL,
  `bairro` varchar(20) NOT NULL,
  `referencia` varchar(100) DEFAULT NULL,
  `telefone` varchar(13) DEFAULT NULL,
  `renda_familiar` float DEFAULT NULL,
  `renda_percapta` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `familias`
--

INSERT INTO `familias` VALUES(2, 1, 'Av. Luiz Lunardi', '590', 'fff', 'Centro', 'fff', '', NULL, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `frequencias`
--

CREATE TABLE `frequencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `familia_id` int(11) NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_frequencias_familias1` (`familia_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `frequencias`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `grupos`
--

CREATE TABLE `grupos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `grupos`
--

INSERT INTO `grupos` VALUES(1, 'Admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_logs_usuarios1` (`usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `logs`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `familia_id` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `nascimento` date NOT NULL,
  `escolaridade` varchar(50) DEFAULT NULL,
  `profissao` varchar(50) DEFAULT NULL,
  `ocupacao` varchar(60) DEFAULT NULL,
  `trabalha` tinyint(1) NOT NULL,
  `local_trabalho` varchar(50) DEFAULT NULL,
  `beneficios` tinyint(1) DEFAULT NULL,
  `companheiro` tinyint(1) NOT NULL,
  `dependente` tinyint(1) NOT NULL,
  `pai_mae` tinyint(1) DEFAULT NULL,
  `parentesco` varchar(20) DEFAULT NULL,
  `estuda` tinyint(1) NOT NULL,
  `nome_escola` varchar(60) DEFAULT NULL,
  `manequim` varchar(45) DEFAULT NULL,
  `peso` double DEFAULT NULL,
  `altura` double DEFAULT NULL,
  `situacao_nutricional` tinyint(1) NOT NULL,
  `renda` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pessoas_familias1` (`familia_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `pessoas`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `questionarios`
--

CREATE TABLE `questionarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pergunta` varchar(200) DEFAULT NULL,
  `extra` text,
  `tipo` varchar(50) DEFAULT NULL,
  `ordem` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `questionarios`
--

INSERT INTO `questionarios` VALUES(1, 'VocÃª gosta de mijar?', 'Sim, NÃ£o', 'select', 0);
INSERT INTO `questionarios` VALUES(2, 'Pergunta de muitipla escolha', 'Opcao1, Opcao2, Opcao3', 'multiple', 0);
INSERT INTO `questionarios` VALUES(3, 'O q vc faz da vida?', '', 'text', 0);
INSERT INTO `questionarios` VALUES(4, 'VocÃª Ã© gay?', '', 'checkbox', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostas`
--

CREATE TABLE `respostas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `familia_id` int(11) NOT NULL,
  `questionario_id` int(11) NOT NULL,
  `resposta` text,
  PRIMARY KEY (`id`),
  KEY `fk_respostas_familias1` (`familia_id`),
  KEY `fk_respostas_questionarios1` (`questionario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `respostas`
--

INSERT INTO `respostas` VALUES(1, 2, 1, 'Sim');
INSERT INTO `respostas` VALUES(2, 2, 2, 'Opcao1, Opcao2, Opcao3');
INSERT INTO `respostas` VALUES(3, 2, 3, 'Programo');
INSERT INTO `respostas` VALUES(4, 2, 4, 'resposta');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grupo_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `prestacao_servico` varchar(50) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `rg` varchar(10) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `numero` varchar(7) DEFAULT NULL,
  `complemento` varchar(7) DEFAULT NULL,
  `bairro` varchar(40) DEFAULT NULL,
  `cidade` varchar(40) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `telefone` varchar(13) DEFAULT NULL,
  `celular` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuarios_grupos1` (`grupo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` VALUES(2, 1, 1, '', 'Edinei L. Cipriani', 'phpedinei@gmail.com', '748a36e72fd23b6fb45711592cff2472918cdc11', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `voluntarios`
--

CREATE TABLE `voluntarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL,
  `prestacao_servico` varchar(50) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `numero` varchar(7) DEFAULT NULL,
  `complemento` varchar(7) DEFAULT NULL,
  `bairro` varchar(40) DEFAULT NULL,
  `cidade` varchar(40) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `cep` varchar(9) DEFAULT NULL,
  `telefone` varchar(13) DEFAULT NULL,
  `celular` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `voluntarios`
--


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
  ADD CONSTRAINT `fk_cestas_familias1` FOREIGN KEY (`familia_id`) REFERENCES `familias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `fk_frequencias_familias1` FOREIGN KEY (`familia_id`) REFERENCES `familias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `fk_logs_usuarios1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `pessoas`
--
ALTER TABLE `pessoas`
  ADD CONSTRAINT `fk_pessoas_familias1` FOREIGN KEY (`familia_id`) REFERENCES `familias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `respostas`
--
ALTER TABLE `respostas`
  ADD CONSTRAINT `fk_respostas_familias1` FOREIGN KEY (`familia_id`) REFERENCES `familias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_respostas_questionarios1` FOREIGN KEY (`questionario_id`) REFERENCES `questionarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuarios_grupos1` FOREIGN KEY (`grupo_id`) REFERENCES `grupos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
