-- DROP TABLE IF EXISTS `airbnb-clone`.`tipo_acomodacao` ;
CREATE TABLE IF NOT EXISTS `airbnb-clone`.`tipo_acomodacao` (
    `id` INT NOT NULL,
    `descricao` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`id`)
);