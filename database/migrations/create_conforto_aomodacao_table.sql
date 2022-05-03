CREATE TABLE IF NOT EXISTS `airbnb-clone`.`conforto_acomodacao` (
    `id` INT NOT NULL,
    `acomodacao_id` INT NOT NULL,
    `descricao` VARCHAR(45) NULL,
    PRIMARY KEY (`id`),
    CONSTRAINT `fk_conforto_acomodacao_acomodacao1` FOREIGN KEY (`acomodacao_id`) REFERENCES `airbnb-clone`.`acomodacao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB;
CREATE INDEX `fk_conforto_acomodacao_acomodacao1_idx` ON `airbnb-clone`.`conforto_acomodacao` (`acomodacao_id` ASC) VISIBLE;