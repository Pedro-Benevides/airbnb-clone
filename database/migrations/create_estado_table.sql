-- DROP TABLE IF EXISTS `airbnb-clone`.`estado` ;
CREATE TABLE IF NOT EXISTS `airbnb-clone`.`estado` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(45) NOT NULL,
    `pais_id` INT NOT NULL,
    PRIMARY KEY (`id`),
    CONSTRAINT `fk_estado_pais1` FOREIGN KEY (`pais_id`) REFERENCES `airbnb-clone`.`pais` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
);