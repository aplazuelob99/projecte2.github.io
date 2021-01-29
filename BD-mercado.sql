-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema bd-proyecto
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema bd-proyecto
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `bd-proyecto` DEFAULT CHARACTER SET utf8mb4 ;
USE `bd-proyecto` ;

-- -----------------------------------------------------
-- Table `bd-proyecto`.`comercio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd-proyecto`.`comercio` (
  `Id` INT(11) NOT NULL,
  `Nombre` VARCHAR(45) NOT NULL,
  `Direccion` VARCHAR(80) NOT NULL,
  `Telefono` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`Id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `bd-proyecto`.`tipo_oferta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd-proyecto`.`tipo_oferta` (
  `Id` INT(11) NOT NULL,
  `Tipo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`Id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `bd-proyecto`.`oferta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd-proyecto`.`oferta` (
  `Id` INT(11) NOT NULL,
  `Descuento` VARCHAR(20) NOT NULL,
  `Descripcion` VARCHAR(120) NOT NULL,
  `Tipo_oferta_Id` INT(11) NOT NULL,
  `Comercio_Id` INT(11) NOT NULL,
  `Precio_puntos` INT NOT NULL,
  PRIMARY KEY (`Id`, `Tipo_oferta_Id`, `Comercio_Id`),
  INDEX `fk_Oferta_Tipo_oferta1_idx` (`Tipo_oferta_Id` ASC) ,
  INDEX `fk_Oferta_Comercio1_idx` (`Comercio_Id` ASC),
  CONSTRAINT `fk_Oferta_Comercio1`
    FOREIGN KEY (`Comercio_Id`)
    REFERENCES `bd-proyecto`.`comercio` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Oferta_Tipo_oferta1`
    FOREIGN KEY (`Tipo_oferta_Id`)
    REFERENCES `bd-proyecto`.`tipo_oferta` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `bd-proyecto`.`usuari`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd-proyecto`.`usuari` (
  `Id` INT(11) NOT NULL AUTO_INCREMENT,
  `Email` VARCHAR(45) NOT NULL,
  `Contrasenya` VARCHAR(20) NOT NULL,
  `Puntos` INT(11) NULL DEFAULT NULL,
  `admin` TINYINT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE INDEX `Email_UNIQUE` (`Email` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `bd-proyecto`.`usuari_has_descuentos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd-proyecto`.`usuari_has_descuentos` (
  `usuari_Id` INT(11) NOT NULL,
  `descuentos_Id` INT(11) NOT NULL,
  PRIMARY KEY (`usuari_Id`, `descuentos_Id`),
  INDEX `fk_usuari_has_descuentos_descuentos1_idx` (`descuentos_Id` ASC) VISIBLE,
  INDEX `fk_usuari_has_descuentos_usuari_idx` (`usuari_Id` ASC) VISIBLE,
  CONSTRAINT `fk_usuari_has_descuentos_descuentos1`
    FOREIGN KEY (`descuentos_Id`)
    REFERENCES `bd-proyecto`.`oferta` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuari_has_descuentos_usuari`
    FOREIGN KEY (`usuari_Id`)
    REFERENCES `bd-proyecto`.`usuari` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
