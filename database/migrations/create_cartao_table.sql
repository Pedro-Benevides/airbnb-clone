CREATE TABLE IF NOT EXISTS `airbnb-clone`.`cartao` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `numero` VARCHAR(45) NOT NULL,
    `titular` VARCHAR(45) NOT NULL,
    `vencimento` DATE NOT NULL,
    `cvv` VARCHAR(45) NOT NULL,
    `usuario_id` INT NOT NULL,
    PRIMARY KEY (`id`),
    CONSTRAINT `fk_cartao_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `airbnb-clone`.`usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB;