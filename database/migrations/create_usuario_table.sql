-- DROP TABLE IF EXISTS `airbnb-clone`.`usuario` ;
CREATE TABLE IF NOT EXISTS `airbnb-clone`.`usuario` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `pais_id` INT NOT NULL,
    `nome` VARCHAR(45) NOT NULL,
    `cpf` VARCHAR(11) NOT NULL,
    `email` VARCHAR(45) NOT NULL,
    `senha` VARCHAR(45) NOT NULL,
    `telefone` VARCHAR(11) NULL DEFAULT NULL,
    `locatario` TINYINT NULL DEFAULT NULL,
    `anfitriao` TINYINT NULL DEFAULT NULL,
    PRIMARY KEY (`id`),
    CONSTRAINT `fk_usuario_pais1` FOREIGN KEY (`pais_id`) REFERENCES `airbnb-clone`.`pais` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB;