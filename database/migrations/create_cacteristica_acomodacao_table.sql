CREATE TABLE IF NOT EXISTS `airbnb-clone`.`caracteristica_acomodacao` (
    `acomodacao_id` INT NOT NULL,
    `descricao` VARCHAR(45) NOT NULL,
    `capacidade` VARCHAR(45) NOT NULL,
    `image` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`acomodacao_id`),
    CONSTRAINT `fk_tipo_acomodacao_acomodacao` FOREIGN KEY (`acomodacao_id`) REFERENCES `airbnb-clone`.`acomodacao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB;
CREATE INDEX `fk_tipo_acomodacao_acomodacao_idx` ON `airbnb-clone`.`caracteristica_acomodacao` (`acomodacao_id` ASC) VISIBLE;