--
-- Dumping data for table `pais`
--
INSERT INTO `pais` (`id`, `name`)
VALUES (1, 'Brazil'),
  (2, 'Argentina'),
  (3, 'Portugual'),
  (4, 'França'),
  (5, 'Espanha'),
  (6, 'Inglaterra'),
  (7, 'Japão'),
  (8, 'Venezuela'),
  (9, 'Colombia'),
  (10, 'Paraguai');
--
-- Dumping data for table `estado`
--
INSERT INTO `estado` (`id`, `name`, `pais_id`)
VALUES (1, 'Bahia', 1),
  (2, 'São Paulo', 1),
  (3, 'Rio de Janeiro', 1),
  (4, 'Goiás', 1),
  (5, 'Porto', 3),
  (6, 'Braga', 3),
  (7, 'Vila Real', 3),
  (8, 'Centre', 4),
  (9, 'Picardie', 4),
  (10, 'Lorraine', 4);
--
-- Dumping data for table `cidade`
--
INSERT INTO `cidade` (`id`, `name`, `estado_id`)
VALUES (1, 'Salvador', 1),
  (2, 'Feira de Santana', 1),
  (3, 'Camaçari', 1),
  (4, 'Campinas', 2),
  (5, 'São José dos Campos', 2);
--
-- Dumping data for table `usuario`
--
INSERT INTO `usuario` (
    `id`,
    `pais_id`,
    `nome`,
    `cpf`,
    `email`,
    `senha`,
    `telefone`,
    `locatario`,
    `anfitriao`
  )
VALUES (
    1,
    1,
    'Rafael R C da Cruz',
    '08999664425',
    'rafaelzinhoccruz@gmail.com',
    '5677d452446e5ed52045d65c9a59b65a',
    '5571993929545',
    0,
    1
  ),
  (
    2,
    1,
    'Pedro Benevides',
    '09899794497',
    'pvsbenevides197@gmail.com',
    'a9f53070058cd464c2528bfdf143dd46',
    '5571988958804',
    1,
    1
  );
--
-- Dumping data for table `tipo_acomodacao`
--
INSERT INTO `tipo_acomodacao` (`id`, `name`)
VALUES (1, 'Casa '),
  (2, 'Quarto'),
  (3, 'Apartamento');
--
-- Dumping data for table `acomodacao`
--
INSERT INTO `acomodacao` (
    `id`,
    `tipo_acomodacao_id`,
    `usuario_id`,
    `cidade_id`,
    `cep`,
    `rua`,
    `numero`,
    `complemento`,
    `diaria`,
    `imagem_interior`,
    `imagem_frontal`,
    `imagem_adicional`,
    `descricao`,
    `capacidade`
  )
VALUES (
    1,
    1,
    1,
    1,
    41950880,
    'Rua Barão do Triunfo',
    333,
    'Atras da academia',
    155,
    '',
    '',
    '',
    'Apartamento com boa vista para praia e bem ventilado',
    '5'
  ),
  (
    2,
    2,
    2,
    1,
    41678097,
    'Rua do Comando',
    223,
    'Em frete a farmacia',
    55,
    '',
    '',
    '',
    'Quarto bem localizado, vizinhança tranquila e sem barulhos a noite',
    '2'
  );
--
-- Dumping data for table `comentario_acomodacao`
--
INSERT INTO `comentario_acomodacao` (`acomodacao_id`, `usuario_id`, `comentario`)
VALUES (1, 1, 'Muito Confortavel'),
  (1, 2, 'Adorei a estadia'),
  (2, 1, 'Boa localização');
--
-- Dumping data for table `anuncio`
--
INSERT INTO `anuncio` (
    `id`,
    `acomodacao_id`,
    `data_inicio`,
    `data_fim`,
    `valor`
  )
VALUES (
    1,
    1,
    '2022-06-01 00:00:00',
    '2022-06-30 00:00:00',
    '222'
  );
--
-- Dumping data for table `conforto`
--
INSERT INTO `conforto` (`id`, `descricao`)
VALUES (1, 'Wi-fi'),
  (2, 'Chuveiro Elétrico'),
  (3, 'Ar Condicionado');
-- Dumping data for table `cartao`
INSERT INTO `cartao` (
    `id`,
    `numero`,
    `titular`,
    `vencimento`,
    `cvv`,
    `usuario_id`
  )
VALUES (
    1,
    '4567 5674 4566 4568',
    'RAFAEL R C CRUZ',
    '2025-05-01',
    '134',
    1
  );
--
-- Dumping data for table `locacao`
--
INSERT INTO `locacao` (
    `id`,
    `usuario_locatario_id`,
    `acomodacao_id`,
    `valor`,
    `valor_multa`,
    `data_inicio`,
    `data_fim`,
    `checkin`,
    `cancelamento`
  )
VALUES (
    1,
    2,
    1,
    233,
    30,
    '2022-06-01 00:00:00',
    '2022-06-30 00:00:00',
    0,
    0
  );
--
-- Dumping data for table `conforto_has_acomodacao`
--
INSERT INTO `conforto_has_acomodacao` (`conforto_id`, `acomodacao_id`)
VALUES (1, 1),
  (1, 2),
  (3, 1),
  (3, 2);