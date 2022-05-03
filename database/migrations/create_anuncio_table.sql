CREATE TABLE IF NOT EXISTS `airbnb-clone`.`anuncio` (
    `id` INT NOT NULL,
    `acomodacao_id` INT NOT NULL,
    `data_inicio` DATETIME NOT NULL,
    `data_fim` DATETIME NOT NULL,
    PRIMARY KEY (`id`),
    CONSTRAINT `fk_anuncio_acomodacao1` FOREIGN KEY (`acomodacao_id`) REFERENCES `airbnb-clone`.`acomodacao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB;
CREATE INDEX `fk_anuncio_acomodacao1_idx` ON `airbnb-clone`.`anuncio` (`acomodacao_id` ASC) VISIBLE;