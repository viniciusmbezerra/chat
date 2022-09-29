-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema chat
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema chat
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `chat` DEFAULT CHARACTER SET utf8 ;
USE `chat` ;

-- -----------------------------------------------------
-- Table `chat`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `chat`.`usuario` (
  `idusuario` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NULL,
  `email` VARCHAR(100) NULL,
  `senha` VARCHAR(45) NULL,
  PRIMARY KEY (`idusuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `chat`.`grupo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `chat`.`grupo` (
  `idgrupo` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `descricao` VARCHAR(100) NULL,
  PRIMARY KEY (`idgrupo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `chat`.`usuario_has_grupo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `chat`.`usuario_has_grupo` (
  `fk_idusuario` INT NOT NULL,
  `fk_idgrupo` INT NOT NULL,
  PRIMARY KEY (`fk_idusuario`, `fk_idgrupo`),
  CONSTRAINT `fk_usuario_has_grupo_usuario`
    FOREIGN KEY (`fk_idusuario`)
    REFERENCES `chat`.`usuario` (`idusuario`),
  CONSTRAINT `fk_usuario_has_grupo_grupo1`
    FOREIGN KEY (`fk_idgrupo`)
    REFERENCES `chat`.`grupo` (`idgrupo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `chat`.`mensagem`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `chat`.`mensagem` (
  `idmensagem` INT NOT NULL AUTO_INCREMENT,
  `conteudo` VARCHAR(1000) NULL,
  `fk_idusuario` INT NOT NULL,
  `fk_idgrupo` INT NOT NULL,
  PRIMARY KEY (`idmensagem`, `fk_idusuario`, `fk_idgrupo`),
  CONSTRAINT `fk_mensagem_usuario1`
    FOREIGN KEY (`fk_idusuario`)
    REFERENCES `chat`.`usuario` (`idusuario`),
  CONSTRAINT `fk_mensagem_grupo1`
    FOREIGN KEY (`fk_idgrupo`)
    REFERENCES `chat`.`grupo` (`idgrupo`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
