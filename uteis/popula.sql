--
-- Extraindo dados da tabela `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 230),
(2, 1, NULL, NULL, 'Cestas', 2, 13),
(3, 2, NULL, NULL, 'admin_index', 3, 4),
(4, 2, NULL, NULL, 'admin_gerar_cestas', 5, 6),
(5, 1, NULL, NULL, 'Companheiros', 14, 25),
(6, 5, NULL, NULL, 'admin_index', 15, 16),
(7, 5, NULL, NULL, 'admin_cadastrar', 17, 18),
(8, 5, NULL, NULL, 'admin_editar', 19, 20),
(9, 5, NULL, NULL, 'admin_consultar', 21, 22),
(10, 5, NULL, NULL, 'admin_excluir', 23, 24),
(11, 1, NULL, NULL, 'Definicoescestas', 26, 37),
(12, 11, NULL, NULL, 'admin_index', 27, 28),
(13, 11, NULL, NULL, 'admin_cadastrar', 29, 30),
(14, 11, NULL, NULL, 'admin_editar', 31, 32),
(15, 11, NULL, NULL, 'admin_consultar', 33, 34),
(16, 11, NULL, NULL, 'admin_excluir', 35, 36),
(17, 1, NULL, NULL, 'Dependentes', 38, 49),
(18, 17, NULL, NULL, 'admin_index', 39, 40),
(19, 17, NULL, NULL, 'admin_cadastrar', 41, 42),
(20, 17, NULL, NULL, 'admin_editar', 43, 44),
(21, 17, NULL, NULL, 'admin_consultar', 45, 46),
(22, 17, NULL, NULL, 'admin_excluir', 47, 48),
(23, 1, NULL, NULL, 'Encontros', 50, 59),
(24, 23, NULL, NULL, 'admin_index', 51, 52),
(25, 23, NULL, NULL, 'admin_cadastrar', 53, 54),
(26, 23, NULL, NULL, 'admin_editar', 55, 56),
(27, 23, NULL, NULL, 'admin_excluir', 57, 58),
(28, 1, NULL, NULL, 'Estoques', 60, 71),
(29, 28, NULL, NULL, 'admin_index', 61, 62),
(30, 28, NULL, NULL, 'admin_cadastrar', 63, 64),
(31, 28, NULL, NULL, 'admin_editar', 65, 66),
(32, 28, NULL, NULL, 'admin_consultar', 67, 68),
(33, 28, NULL, NULL, 'admin_excluir', 69, 70),
(34, 1, NULL, NULL, 'Familias', 72, 89),
(35, 34, NULL, NULL, 'admin_index', 73, 74),
(36, 34, NULL, NULL, 'admin_cadastrar', 75, 76),
(37, 34, NULL, NULL, 'admin_editar', 77, 78),
(38, 34, NULL, NULL, 'admin_consultar', 79, 80),
(39, 34, NULL, NULL, 'admin_excluir', 81, 82),
(40, 1, NULL, NULL, 'Frequencias', 90, 101),
(41, 40, NULL, NULL, 'admin_index', 91, 92),
(42, 1, NULL, NULL, 'Grupos', 102, 111),
(43, 42, NULL, NULL, 'admin_index', 103, 104),
(44, 42, NULL, NULL, 'admin_cadastrar', 105, 106),
(45, 42, NULL, NULL, 'admin_editar', 107, 108),
(46, 42, NULL, NULL, 'admin_excluir', 109, 110),
(47, 1, NULL, NULL, 'Logs', 112, 115),
(48, 47, NULL, NULL, 'admin_index', 113, 114),
(49, 1, NULL, NULL, 'Questionarios', 116, 129),
(50, 49, NULL, NULL, 'admin_index', 117, 118),
(51, 49, NULL, NULL, 'admin_cadastrar', 119, 120),
(52, 49, NULL, NULL, 'admin_editar', 121, 122),
(53, 49, NULL, NULL, 'admin_move_down', 123, 124),
(54, 49, NULL, NULL, 'admin_move_up', 125, 126),
(55, 49, NULL, NULL, 'admin_excluir', 127, 128),
(56, 1, NULL, NULL, 'Usuarios', 130, 153),
(57, 56, NULL, NULL, 'login', 131, 132),
(58, 56, NULL, NULL, 'recuperarsenha', 133, 134),
(59, 56, NULL, NULL, 'logout', 135, 136),
(60, 56, NULL, NULL, 'admin_login', 137, 138),
(61, 56, NULL, NULL, 'admin_logout', 139, 140),
(62, 56, NULL, NULL, 'admin_index', 141, 142),
(63, 56, NULL, NULL, 'admin_cadastrar', 143, 144),
(64, 56, NULL, NULL, 'admin_editar', 145, 146),
(65, 56, NULL, NULL, 'admin_consultar', 147, 148),
(66, 56, NULL, NULL, 'admin_excluir', 149, 150),
(67, 1, NULL, NULL, 'Voluntarios', 154, 167),
(68, 67, NULL, NULL, 'admin_index', 155, 156),
(69, 67, NULL, NULL, 'admin_cadastrar', 157, 158),
(70, 67, NULL, NULL, 'admin_editar', 159, 160),
(71, 67, NULL, NULL, 'admin_consultar', 161, 162),
(72, 67, NULL, NULL, 'admin_excluir', 163, 164),
(73, 1, NULL, NULL, 'Acl', 168, 213),
(74, 73, NULL, NULL, 'Acos', 169, 176),
(75, 74, NULL, NULL, 'admin_index', 170, 171),
(76, 74, NULL, NULL, 'admin_empty_acos', 172, 173),
(77, 74, NULL, NULL, 'admin_build_acl', 174, 175),
(78, 73, NULL, NULL, 'Aros', 177, 212),
(79, 78, NULL, NULL, 'admin_index', 178, 179),
(80, 78, NULL, NULL, 'admin_check', 180, 181),
(81, 78, NULL, NULL, 'admin_users', 182, 183),
(82, 78, NULL, NULL, 'admin_update_user_role', 184, 185),
(83, 78, NULL, NULL, 'admin_ajax_role_permissions', 186, 187),
(84, 78, NULL, NULL, 'admin_role_permissions', 188, 189),
(85, 78, NULL, NULL, 'admin_user_permissions', 190, 191),
(86, 78, NULL, NULL, 'admin_empty_permissions', 192, 193),
(87, 78, NULL, NULL, 'admin_clear_user_specific_permissions', 194, 195),
(88, 78, NULL, NULL, 'admin_grant_all_controllers', 196, 197),
(89, 78, NULL, NULL, 'admin_deny_all_controllers', 198, 199),
(90, 78, NULL, NULL, 'admin_get_role_controller_permission', 200, 201),
(91, 78, NULL, NULL, 'admin_grant_role_permission', 202, 203),
(92, 78, NULL, NULL, 'admin_deny_role_permission', 204, 205),
(93, 78, NULL, NULL, 'admin_get_user_controller_permission', 206, 207),
(94, 78, NULL, NULL, 'admin_grant_user_permission', 208, 209),
(95, 78, NULL, NULL, 'admin_deny_user_permission', 210, 211),
(96, 34, NULL, NULL, 'admin_questionario', 83, 84),
(97, 1, NULL, NULL, 'Mantimentos', 214, 225),
(98, 97, NULL, NULL, 'admin_index', 215, 216),
(99, 97, NULL, NULL, 'admin_cadastrar', 217, 218),
(100, 97, NULL, NULL, 'admin_editar', 219, 220),
(101, 97, NULL, NULL, 'admin_excluir', 221, 222),
(102, 1, NULL, NULL, 'Respostas', 226, 227),
(103, 2, NULL, NULL, 'admin_editar', 7, 8),
(104, 40, NULL, NULL, 'admin_editar', 93, 94),
(105, 40, NULL, NULL, 'admin_cadastrar', 95, 96),
(106, 40, NULL, NULL, 'admin_consultar', 97, 98),
(107, 40, NULL, NULL, 'admin_excluir', 99, 100),
(108, 2, NULL, NULL, 'admin_rel_cestas', 9, 10),
(109, 2, NULL, NULL, 'admin_rel_itens_pendentes', 11, 12),
(110, 34, NULL, NULL, 'admin_rel_aptas', 85, 86),
(111, 34, NULL, NULL, 'admin_rel_venc_matricula', 87, 88),
(112, 1, NULL, NULL, 'Itemcestas', 228, 229),
(113, 97, NULL, NULL, 'admin_rel_venc_mantimentos', 223, 224),
(114, 56, NULL, NULL, 'admin_recuperarsenha', 151, 152),
(115, 67, NULL, NULL, 'admin_rel_voluntarios', 165, 166);

-- --------------------------------------------------------

--
-- Extraindo dados da tabela `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Grupo', 1, NULL, 1, 4),
(2, NULL, 'Grupo', 2, NULL, 5, 6),
(3, NULL, 'Grupo', 3, NULL, 7, 10),
(5, NULL, 'Grupo', 5, NULL, 11, 12),
(8, 1, 'Usuario', 4, NULL, 2, 3),
(10, 3, 'Usuario', 6, NULL, 8, 9);

-- --------------------------------------------------------

--
-- Extraindo dados da tabela `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
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
(21, 3, 63, '1', '1', '1', '1'),
(22, 3, 64, '1', '1', '1', '1'),
(23, 3, 65, '1', '1', '1', '1'),
(24, 3, 66, '1', '1', '1', '1'),
(25, 3, 68, '1', '1', '1', '1'),
(26, 3, 69, '1', '1', '1', '1'),
(27, 3, 70, '1', '1', '1', '1'),
(28, 3, 71, '1', '1', '1', '1'),
(29, 3, 72, '1', '1', '1', '1'),
(30, 3, 75, '1', '1', '1', '1'),
(31, 3, 76, '1', '1', '1', '1'),
(32, 3, 77, '1', '1', '1', '1'),
(33, 3, 79, '1', '1', '1', '1'),
(34, 3, 80, '1', '1', '1', '1'),
(35, 3, 81, '1', '1', '1', '1'),
(36, 3, 82, '1', '1', '1', '1'),
(37, 3, 83, '1', '1', '1', '1'),
(38, 3, 84, '1', '1', '1', '1'),
(39, 3, 85, '1', '1', '1', '1'),
(40, 3, 86, '1', '1', '1', '1'),
(41, 3, 87, '1', '1', '1', '1'),
(42, 3, 88, '1', '1', '1', '1'),
(43, 3, 89, '1', '1', '1', '1'),
(44, 3, 90, '1', '1', '1', '1'),
(45, 3, 91, '1', '1', '1', '1'),
(46, 3, 92, '1', '1', '1', '1'),
(47, 3, 93, '1', '1', '1', '1'),
(48, 3, 94, '1', '1', '1', '1'),
(49, 3, 95, '1', '1', '1', '1'),
(50, 3, 98, '1', '1', '1', '1'),
(51, 3, 99, '1', '1', '1', '1'),
(52, 3, 100, '1', '1', '1', '1'),
(53, 3, 101, '1', '1', '1', '1'),
(55, 3, 1, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Extraindo dados da tabela `cestas`
--

INSERT INTO `cestas` (`id`, `familia_id`, `data_gerada`, `data_saida`) VALUES
(6, 25, '2011-10-14 00:04:37', '2011-10-14'),
(7, NULL, '2011-10-14 00:20:11', NULL),
(8, NULL, '2011-10-14 00:20:11', NULL);

--
-- Extraindo dados da tabela `definicoescestas`
--

INSERT INTO `definicoescestas` (`id`, `tipo`, `nome`, `quantidade`, `medida`) VALUES
(1, 'cesta', 'Arroz', '4.00', 'kilo')
(2, 'cesta', 'Feijío', '2.00', 'kilo');

-- --------------------------------------------------------

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
-- Extraindo dados da tabela `questionarios`
--

INSERT INTO `questionarios` (`id`, `pergunta`, `tipo`, `extra`, `ordem`) VALUES
(7, 'Condiçío habitacional', 'select', 'Aluguel, Casa Pópria, Cedida', 0),
(8, 'Tipo Construçío', 'select', 'Alvenaria, Madeira, Outro', 0),
(9, 'Número de Cômodos', 'text', '', 0),
(10, 'Banheiro', 'select', 'Sim, Nío, Outro', 0),
(11, 'água encanada', 'select', 'Sim, Nío', 0),
(12, 'Esgoto Encanado', 'select', 'Sim, Nío', 0),
(13, 'Energia Eétrica', 'select', 'Sim, Nío', 0),
(14, 'Casa ou Terreno em risco?', 'select', 'Sim, Nío', 0),
(15, 'Caso resposta anterior seja "SIM", Qual?', 'text', '', 0),
(16, 'Filtro de água', 'select', 'Sim, Nío', 0),
(17, 'Horta Caseira', 'select', 'Sim, Nío', 0),
(18, 'Questões de vulnerabilidade (Conselho Tutelar, violência, presidiário, vivência de rua, abrigo):', 'obs', '', 0),
(19, 'Quem possui Identidade ', 'text', '', 0),
(20, 'Quem possui carteira de trabalho', 'text', '', 0),
(21, 'Quem possui CPF', 'text', '', 0),
(22, 'Datas encaminhamento ao Órgío responsável', 'text', '', 0),
(23, 'Quem possui certidío de nascimento', 'text', '', 0),
(24, 'Quem nío possui certidío', 'text', '', 0),
(25, 'Carteira de Vacinaçío', 'select', 'Em dia, Atrasado', 0),
(26, 'Quem está com a vacinaçío atrasada', 'text', '', 0),
(27, 'Data encaminhamento ao Posto de Saúde', 'text', '', 0),
(28, 'Ensino', 'select', 'Todas as crianças e jovens estío frequentando as aulas, Nío', 0),
(29, 'Quem nío está frequentando as aulas', 'text', '', 0),
(30, 'Data de contato com a Escola visando a reinserçío do aluno', 'text', '', 0),
(31, 'Encaminhamentos Necessários', 'text', '', 0),
(32, 'Filtro de água', 'select', 'Sim, Nío', 0),
(33, 'Limpeza da casa', 'select', 'Bom, Regular, Péssimo', 0),
(34, 'Animais Domésticos', 'multiple', 'Cachorro, Gato, Galinha, Porco, Cabrito, Cavalo, Outro', 0),
(35, 'Qual outro animal', 'text', '', 0),
(36, 'Animais estío bem cuidados', 'select', 'Sim, Nío', 0),
(37, 'Acondicionamento do Lixo', 'select', 'Bom, Ruim', 0),
(38, 'Providências Necessárias', 'obs', '', 0),
(39, 'Gravidez na Adolescência', 'select', 'Sim, Nío', 0),
(40, 'Uso métodos contraceptivos (qual?)', 'text', '', 0),
(41, 'Necessita orientaçío médica para planejamento de gravidez', 'select', 'Sim, Nío', 0),
(42, 'Data encaminhamento planej. gravidez', 'text', '', 0),
(43, 'Necessita encaminhamento ao Serviço de Psicologia', 'select', 'Sim, Nío', 0),
(44, 'Nome e motivo da pessoa a ser encaminhada para Psicologia', 'text', '', 0),
(45, 'Data encaminhamento Psicologia', 'text', '', 0),
(46, 'Necessita encaminhamento ao Conselho da Criança e Adolescente', 'select', 'Sim, Nío', 0),
(47, 'Nome e motivo da pessoa a ser encaminhada para Conselho da Criança e Adolescente', 'obs', '', 0),
(48, 'Possui curso técnico/Profissionalizante realizado', 'select', 'Sim, Nío', 0),
(49, 'Qual curso', 'text', '', 0),
(50, 'Gostaria de fazer algum outro curso, QUAL?', 'text', '', 0),
(51, 'Necessita equipamentos sociais públicos voltados para', 'multiple', 'Saúde, Lazer, Creche, Atençío p/ Idoso, Atençío p/ adolescentes', 0),
(52, 'Necessita equipamentos sociais públicos voltados para ENSINO, QUAL?', 'text', '', 0),
(53, 'Existe Organizaçío Comunitária no local', 'select', 'Sim, Nío', 0),
(54, 'Participa de Organizaçío Comunitária? QUAL TIPO?', 'text', '', 0),
(55, 'O que é mais importante para sua famí­lia neste momento? O que pretende fazer a respeito?', 'obs', '', 0),
(56, 'O que você gostaria que fosse oferecido pela instituiçío (Cursos, Materiais, Serviços etc)', 'obs', '', 0),
(57, 'Está inscrito no Bolsa Famí­lia', 'select', 'Sim, Nío', 0),
(58, 'Recebe ajuda de outra instituiçío? QUAL?', 'text', '', 0),
(59, 'Já tem cadastro na EMCASA p/ compra de lote ou casa', 'select', 'Sim, Nío', 0),
(60, 'Doenças na Famí­lia? Nome da Pessoa, Qual? ', 'obs', '', 0);

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `grupo_id`, `status`, `nome`, `email`, `senha`, `cpf`, `endereco`, `complemento`, `numero`, `bairro`, `cidade`, `uf`, `cep`, `telefone`, `celular`, `prestacao_servico`) VALUES
(4, 1, 1, 'Tales Araújo Mendonça', 'talesam@gmail.com', '9219bd604572f3be88d37830809b8ca303171e02', '054.619.336-61', 'Rua Professor Francisco Faria', '520', '101', 'Bairu', 'Juiz de Fora', 'MG', '36050-140', '(32) 3226-3307', '(32) 8801-9351', 'Informática'),
(6, 3, 1, 'Rafael Malatesta', 'faelflip@gmail.com', 'd38c69d9fb096663d1e4fd351f2a4f4a0c44e703', '999.999.999-99', '', '', '', '', '', '', '', '(32) 3273-1624', '', 'Informática');


