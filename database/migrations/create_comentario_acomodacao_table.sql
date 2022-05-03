CREATE TABLE IF NOT EXISTS `airbnb-clone`.`comentario_acomodacao` (
    `acomodacao_id` INT NOT NULL,
    `usuario_id` INT NOT NULL,
    `comentario` VARCHAR(45) NULL,
    PRIMARY KEY (`acomodacao_id`),
    CONSTRAINT `fk_comentario_acomodacao_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `airbnb-clone`.`usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
    CONSTRAINT `fk_comentario_acomodacao_acomodacao1` FOREIGN KEY (`acomodacao_id`) REFERENCES `airbnb-clone`.`acomodacao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB;
CREATE INDEX `fk_comentario_acomodacao_usuario1_idx` ON `airbnb-clone`.`comentario_acomodacao` (`usuario_id` ASC) VISIBLE;