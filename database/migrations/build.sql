SET @OLD_UNIQUE_CHECKS = @@UNIQUE_CHECKS,
  UNIQUE_CHECKS = 0;
SET @OLD_FOREIGN_KEY_CHECKS = @@FOREIGN_KEY_CHECKS,
  FOREIGN_KEY_CHECKS = 0;
SET @OLD_SQL_MODE = @@SQL_MODE,
  SQL_MODE = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';
-- -----------------------------------------------------
-- Schema airbnb-clone
-- -----------------------------------------------------
-- DROP SCHEMA IF EXISTS `airbnb-clone` ;
-- -----------------------------------------------------
-- Schema airbnb-clone
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `airbnb-clone` DEFAULT CHARACTER SET utf8;
USE `airbnb-clone`;
-- -----------------------------------------------------
-- Table `airbnb-clone`.`cartao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `airbnb-clone`.`cartao` (
  `id` INT NOT NULL,
  `numero` VARCHAR(45) NOT NULL,
  `titular` VARCHAR(45) NOT NULL,
  `vencimento` DATE NOT NULL,
  `cvv` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;
-- -----------------------------------------------------
-- Table `airbnb-clone`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `airbnb-clone`.`usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cartao_id` INT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `cpf` VARCHAR(45) NOT NULL,
  `pais` VARCHAR(45) NOT NULL,
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
-- -----------------------------------------------------
-- Table `airbnb-clone`.`tipo_acomodacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `airbnb-clone`.`tipo_acomodacao` (
  `id` INT NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
);
-- -----------------------------------------------------
-- Table `airbnb-clone`.`acomodacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `airbnb-clone`.`acomodacao` (
  `id` INT NOT NULL,
  `tipo_acomodacao_id` INT NOT NULL,
  `usuario_id` INT NOT NULL,
  `cep` VARCHAR(45) NOT NULL,
  `rua` VARCHAR(45) NOT NULL,
  `numero` VARCHAR(45) NOT NULL,
  `cidade` VARCHAR(45) NOT NULL,
  `estado` VARCHAR(45) NOT NULL,
  `pais` VARCHAR(45) NOT NULL,
  `diaria` VARCHAR(45) NOT NULL,
  `complemento` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_acomodacao_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `airbnb-clone`.`usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_acomodacao_tipo_acomodacao1` FOREIGN KEY (`tipo_acomodacao_id`) REFERENCES `airbnb-clone`.`tipo_acomodacao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB;
CREATE INDEX `fk_acomodacao_usuario1_idx` ON `airbnb-clone`.`acomodacao` (`usuario_id` ASC) VISIBLE;
CREATE INDEX `fk_acomodacao_tipo_acomodacao1_idx` ON `airbnb-clone`.`acomodacao` (`tipo_acomodacao_id` ASC) VISIBLE;
-- -----------------------------------------------------
-- Table `airbnb-clone`.`caracteristica_acomodacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `airbnb-clone`.`caracteristica_acomodacao` (
  `acomodacao_id` INT NOT NULL,
  `descricao` VARCHAR(45) NOT NULL,
  `capacidade` VARCHAR(45) NOT NULL,
  `image` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`acomodacao_id`),
  CONSTRAINT `fk_tipo_acomodacao_acomodacao` FOREIGN KEY (`acomodacao_id`) REFERENCES `airbnb-clone`.`acomodacao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB;
CREATE INDEX `fk_tipo_acomodacao_acomodacao_idx` ON `airbnb-clone`.`caracteristica_acomodacao` (`acomodacao_id` ASC) VISIBLE;
-- -----------------------------------------------------
-- Table `airbnb-clone`.`conforto_acomodacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `airbnb-clone`.`conforto_acomodacao` (
  `id` INT NOT NULL,
  `acomodacao_id` INT NOT NULL,
  `descricao` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_conforto_acomodacao_acomodacao1` FOREIGN KEY (`acomodacao_id`) REFERENCES `airbnb-clone`.`acomodacao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB;
CREATE INDEX `fk_conforto_acomodacao_acomodacao1_idx` ON `airbnb-clone`.`conforto_acomodacao` (`acomodacao_id` ASC) VISIBLE;
-- -----------------------------------------------------
-- Table `airbnb-clone`.`comentario_acomodacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `airbnb-clone`.`comentario_acomodacao` (
  `acomodacao_id` INT NOT NULL,
  `usuario_id` INT NOT NULL,
  `comentario` VARCHAR(45) NULL,
  PRIMARY KEY (`acomodacao_id`),
  CONSTRAINT `fk_comentario_acomodacao_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `airbnb-clone`.`usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_comentario_acomodacao_acomodacao1` FOREIGN KEY (`acomodacao_id`) REFERENCES `airbnb-clone`.`acomodacao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB;
CREATE INDEX `fk_comentario_acomodacao_usuario1_idx` ON `airbnb-clone`.`comentario_acomodacao` (`usuario_id` ASC) VISIBLE;
-- -----------------------------------------------------
-- Table `airbnb-clone`.`anuncio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `airbnb-clone`.`anuncio` (
  `id` INT NOT NULL,
  `acomodacao_id` INT NOT NULL,
  `data_inicio` DATETIME NOT NULL,
  `data_fim` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_anuncio_acomodacao1` FOREIGN KEY (`acomodacao_id`) REFERENCES `airbnb-clone`.`acomodacao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB;
CREATE INDEX `fk_anuncio_acomodacao1_idx` ON `airbnb-clone`.`anuncio` (`acomodacao_id` ASC) VISIBLE;
-- -----------------------------------------------------
-- Table `airbnb-clone`.`locacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `airbnb-clone`.`locacao` (
  `id` INT NOT NULL,
  `usuario_anfitriao_id` INT NOT NULL,
  `usuario_locatario_id` INT NOT NULL,
  `acomodacao_id` INT NOT NULL,
  `valor` INT NOT NULL,
  `valor_multa` INT NULL,
  `data_inicio` DATETIME NOT NULL,
  `data_fim` DATETIME NOT NULL,
  `checkin` TINYINT NULL,
  `cancelamento` TINYINT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_locacao_usuario_anfitriao` FOREIGN KEY (`usuario_anfitriao_id`) REFERENCES `airbnb-clone`.`usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_locacao_acomodacao1` FOREIGN KEY (`acomodacao_id`) REFERENCES `airbnb-clone`.`acomodacao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_locacao_usuario_locatario` FOREIGN KEY (`usuario_locatario_id`) REFERENCES `airbnb-clone`.`usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB;
CREATE INDEX `fk_locacao_usuario1_idx` ON `airbnb-clone`.`locacao` (`usuario_anfitriao_id` ASC) VISIBLE;
CREATE INDEX `fk_locacao_acomodacao1_idx` ON `airbnb-clone`.`locacao` (`acomodacao_id` ASC) VISIBLE;
CREATE INDEX `fk_locacao_usuario_locatario_idx` ON `airbnb-clone`.`locacao` (`usuario_locatario_id` ASC) VISIBLE;
SET SQL_MODE = @OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS = @OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS = @OLD_UNIQUE_CHECKS;