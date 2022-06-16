-- DROP TABLE IF EXISTS `airbnb-clone`.`comentario_acomodacao` ;
CREATE TABLE IF NOT EXISTS `airbnb-clone`.`comentario_acomodacao` (
    `acomodacao_id` INT NOT NULL,
    `usuario_id` INT NOT NULL,
    `comentario` VARCHAR(255) NOT NULL,
    -- INDEX `fk_comentario_acomodacao_usuario1_idx` (`usuario_id` ASC) VISIBLE,
    -- PRIMARY KEY (`acomodacao_id`),
    CONSTRAINT `fk_comentario_acomodacao_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `airbnb-clone`.`usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
    CONSTRAINT `fk_comentario_acomodacao_acomodacao1` FOREIGN KEY (`acomodacao_id`) REFERENCES `airbnb-clone`.`acomodacao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB;