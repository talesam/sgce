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
(1, 'cesta', 'Arroz', 4.00, 'kilo'),
(2, 'cesta', 'Feijão', 2.00, 'kilo');

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


