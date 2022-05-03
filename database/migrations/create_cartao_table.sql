CREATE TABLE IF NOT EXISTS `airbnb-clone`.`cartao` (
    `id` INT NOT NULL,
    `numero` VARCHAR(45) NOT NULL,
    `titular` VARCHAR(45) NOT NULL,
    `vencimento` DATE NOT NULL,
    `cvv` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;