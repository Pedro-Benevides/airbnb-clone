INSERT INTO
    `locacao` (
        `id`,
        `usuario_anfitriao_id`,
        `usuario_locatario_id`,
        `acomodacao_id`,
        `valor`,
        `valor_multa`,
        `data_inicio`,
        `data_fim`,
        `checkin`,
        `cancelamento`
    )
VALUES
    (
        1,
        2,
        1,
        1,
        233,
        30,
        '2022-06-01 00:00:00',
        '2022-06-30 00:00:00',
        0,
        0
    );