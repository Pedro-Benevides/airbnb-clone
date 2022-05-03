CREATE TABLE IF NOT EXISTS `airbnb-clone`.`acomodacao` (
    `id` INT NOT NULL,
    `tipo_acomodacao_id` INT NOT NULL,
    `usuario_id` INT NOT NULL,
    `cep` VARCHAR(45) NOT NULL,
    `rua` VARCHAR(45) NOT NULL,
    `numero` VARCHAR(45) NOT NULL,
    `cidade` VARCHAR(45) NOT NULL,
    `estado` VARCHAR(45) NOT NULL,
    `pais` VARCHAR(45) NOT NULL,
    `diaria` VARCHAR(45) NOT NULL,
    `complemento` VARCHAR(45) NULL,
    PRIMARY KEY (`id`),
    CONSTRAINT `fk_acomodacao_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `airbnb-clone`.`usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
    CONSTRAINT `fk_acomodacao_tipo_acomodacao1` FOREIGN KEY (`tipo_acomodacao_id`) REFERENCES `airbnb-clone`.`tipo_acomodacao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB;
CREATE INDEX `fk_acomodacao_usuario1_idx` ON `airbnb-clone`.`acomodacao` (`usuario_id` ASC) VISIBLE;
CREATE INDEX `fk_acomodacao_tipo_acomodacao1_idx` ON `airbnb-clone`.`acomodacao` (`tipo_acomodacao_id` ASC) VISIBLE;