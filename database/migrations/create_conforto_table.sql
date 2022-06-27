-- DROP TABLE IF EXISTS `airbnb-clone`.`conforto` ;
CREATE TABLE IF NOT EXISTS `airbnb-clone`.`conforto` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `descricao` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;