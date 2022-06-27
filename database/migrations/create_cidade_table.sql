-- DROP TABLE IF EXISTS `airbnb-clone`.`cidade` ;
CREATE TABLE IF NOT EXISTS `airbnb-clone`.`cidade` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(45) NOT NULL,
    `estado_id` INT NOT NULL,
    PRIMARY KEY (`id`),
    CONSTRAINT `fk_cidade_estado1` FOREIGN KEY (`estado_id`) REFERENCES `airbnb-clone`.`estado` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
);