-- DROP TABLE IF EXISTS `airbnb-clone`.`conforto_has_acomodacao` ;
CREATE TABLE IF NOT EXISTS `airbnb-clone`.`conforto_has_acomodacao` (
    `conforto_id` INT NOT NULL,
    `acomodacao_id` INT NOT NULL,
    PRIMARY KEY (`conforto_id`, `acomodacao_id`),
    CONSTRAINT `fk_conforto_has_acomodacao_conforto1` FOREIGN KEY (`conforto_id`) REFERENCES `airbnb-clone`.`conforto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
    CONSTRAINT `fk_conforto_has_acomodacao_acomodacao1` FOREIGN KEY (`acomodacao_id`) REFERENCES `airbnb-clone`.`acomodacao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB;