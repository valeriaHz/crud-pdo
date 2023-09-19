-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema agenda
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema agenda
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `agenda` DEFAULT CHARACTER SET utf8mb4 ;
USE `agenda` ;

-- -----------------------------------------------------
-- Table `agenda`.`categorias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `agenda`.`categorias` (
  `id_categoria` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre_categoria` VARCHAR(150) NOT NULL,
  PRIMARY KEY (`id_categoria`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `agenda`.`contactos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `agenda`.`contactos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(150) NOT NULL,
  `telefono` VARCHAR(15) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `categoria` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `categoria` (`categoria` ASC) VISIBLE,
  CONSTRAINT `contactos_ibfk_1`
    FOREIGN KEY (`categoria`)
    REFERENCES `agenda`.`categorias` (`id_categoria`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8mb4;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
