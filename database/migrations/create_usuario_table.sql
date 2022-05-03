CREATE TABLE IF NOT EXISTS `airbnb-clone`.`usuario` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `cartao_id` INT NULL,
    `nome` VARCHAR(45) NOT NULL,
    `cpf` VARCHAR(45) NOT NULL,
    `país` VARCHAR(45) NOT NULL,
    `email` VARCHAR(45) NOT NULL,
    `senha` VARCHAR(45) NOT NULL,
    `telefone` VARCHAR(45) NULL,
    `locatario` TINYINT NULL,
    `anfitriao` TINYINT NULL,
    PRIMARY KEY (`id`),
    CONSTRAINT `fk_usuario_cartao1` FOREIGN KEY (`cartao_id`) REFERENCES `airbnb-clone`.`cartao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB;
CREATE UNIQUE INDEX `id_UNIQUE` ON `airbnb-clone`.`usuario` (`id` ASC) VISIBLE;
CREATE INDEX `fk_usuario_cartao1_idx` ON `airbnb-clone`.`usuario` (`cartao_id` ASC) VISIBLE;