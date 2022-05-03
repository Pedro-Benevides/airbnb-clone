CREATE TABLE IF NOT EXISTS `airbnb-clone`.`locacao` (
    `id` INT NOT NULL,
    `usuario_anfitriao_id` INT NOT NULL,
    `usuario_locatario_id` INT NOT NULL,
    `acomodacao_id` INT NOT NULL,
    `valor` INT NOT NULL,
    `valor_multa` INT NULL,
    `data_inicio` DATETIME NOT NULL,
    `data_fim` DATETIME NOT NULL,
    `checkin` TINYINT NULL,
    `cancelamento` TINYINT NULL,
    PRIMARY KEY (`id`),
    CONSTRAINT `fk_locacao_usuario_anfitriao` FOREIGN KEY (`usuario_anfitriao_id`) REFERENCES `airbnb-clone`.`usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
    CONSTRAINT `fk_locacao_acomodacao1` FOREIGN KEY (`acomodacao_id`) REFERENCES `airbnb-clone`.`acomodacao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
    CONSTRAINT `fk_locacao_usuario_locatario` FOREIGN KEY (`usuario_locatario_id`) REFERENCES `airbnb-clone`.`usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB;
CREATE INDEX `fk_locacao_usuario1_idx` ON `airbnb-clone`.`locacao` (`usuario_anfitriao_id` ASC) VISIBLE;
CREATE INDEX `fk_locacao_acomodacao1_idx` ON `airbnb-clone`.`locacao` (`acomodacao_id` ASC) VISIBLE;
CREATE INDEX `fk_locacao_usuario_locatario_idx` ON `airbnb-clone`.`locacao` (`usuario_locatario_id` ASC) VISIBLE;