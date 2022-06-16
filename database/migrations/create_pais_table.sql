-- DROP TABLE IF EXISTS `airbnb-clone`.`pais` ;
CREATE TABLE IF NOT EXISTS `airbnb-clone`.`pais` (
    `id` INT NOT NULL,
    `nome` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`id`)
);