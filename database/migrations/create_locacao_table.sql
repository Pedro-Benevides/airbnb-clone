CREATE TABLE IF NOT EXISTS `airbnb-clone`.`locacao` (
    `id` INT NOT NULL,
    `usuario_locatario_id` INT NOT NULL,
    `acomodacao_id` INT NOT NULL,
    `valor` DECIMAL NOT NULL,
    `valor_multa` DECIMAL NULL DEFAULT NULL,
    `data_inicio` DATETIME NOT NULL,
    `data_fim` DATETIME NOT NULL,
    `checkin` TINYINT NULL DEFAULT NULL,
    `cancelamento` TINYINT NULL DEFAULT NULL,
    PRIMARY KEY (`id`),
    CONSTRAINT `fk_locacao_acomodacao1` FOREIGN KEY (`acomodacao_id`) REFERENCES `airbnb-clone`.`acomodacao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
    CONSTRAINT `fk_locacao_usuario_locatario` FOREIGN KEY (`usuario_locatario_id`) REFERENCES `airbnb-clone`.`usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB;