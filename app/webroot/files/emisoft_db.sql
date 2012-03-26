SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `emisoft` ;
CREATE SCHEMA IF NOT EXISTS `emisoft` DEFAULT CHARACTER SET latin1 ;
USE `emisoft` ;

-- -----------------------------------------------------
-- Table `emisoft`.`departamentos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `emisoft`.`departamentos` ;

CREATE  TABLE IF NOT EXISTS `emisoft`.`departamentos` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NULL DEFAULT NULL ,
  `descripcion` VARCHAR(45) NULL DEFAULT NULL ,
  `perfil` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `emisoft`.`puestos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `emisoft`.`puestos` ;

CREATE  TABLE IF NOT EXISTS `emisoft`.`puestos` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NULL DEFAULT NULL ,
  `descripcion` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `emisoft`.`usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `emisoft`.`usuarios` ;

CREATE  TABLE IF NOT EXISTS `emisoft`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(45) NULL ,
  `password` VARCHAR(200) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `emisoft`.`empleados`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `emisoft`.`empleados` ;

CREATE  TABLE IF NOT EXISTS `emisoft`.`empleados` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NULL DEFAULT NULL ,
  `apellido` VARCHAR(45) NULL DEFAULT NULL ,
  `fechaNacimiento` DATE NULL DEFAULT NULL ,
  `direccion` VARCHAR(200) NULL DEFAULT NULL ,
  `telefono` VARCHAR(45) NULL DEFAULT NULL ,
  `correo` VARCHAR(45) NULL DEFAULT NULL ,
  `usuario` VARCHAR(45) NULL DEFAULT NULL ,
  `contrasena` VARCHAR(45) NULL DEFAULT NULL ,
  `departamento_id` INT NOT NULL ,
  `puesto_id` INT NOT NULL ,
  `usuario_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_Empleado_departamento` (`departamento_id` ASC) ,
  INDEX `fk_empleados_puestos1` (`puesto_id` ASC) ,
  INDEX `fk_empleados_usuarios1` (`usuario_id` ASC) ,
  CONSTRAINT `fk_Empleado_departamento`
    FOREIGN KEY (`departamento_id` )
    REFERENCES `emisoft`.`departamentos` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_empleados_puestos1`
    FOREIGN KEY (`puesto_id` )
    REFERENCES `emisoft`.`puestos` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_empleados_usuarios1`
    FOREIGN KEY (`usuario_id` )
    REFERENCES `emisoft`.`usuarios` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `emisoft`.`categorias`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `emisoft`.`categorias` ;

CREATE  TABLE IF NOT EXISTS `emisoft`.`categorias` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NULL DEFAULT NULL ,
  `descripcion` TEXT NULL DEFAULT NULL ,
  `departamento_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_categoria_departamento1` (`departamento_id` ASC) ,
  CONSTRAINT `fk_categoria_departamento1`
    FOREIGN KEY (`departamento_id` )
    REFERENCES `emisoft`.`departamentos` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `emisoft`.`documentos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `emisoft`.`documentos` ;

CREATE  TABLE IF NOT EXISTS `emisoft`.`documentos` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NULL DEFAULT NULL ,
  `descripcion` VARCHAR(45) NULL DEFAULT NULL ,
  `etiquetas` VARCHAR(200) NULL DEFAULT NULL ,
  `fecha` VARCHAR(45) NULL DEFAULT NULL ,
  `version` VARCHAR(45) NULL DEFAULT NULL ,
  `categoria_id` INT NOT NULL ,
  `autor` VARCHAR(200) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_documentos_categorias1` (`categoria_id` ASC) ,
  CONSTRAINT `fk_documentos_categorias1`
    FOREIGN KEY (`categoria_id` )
    REFERENCES `emisoft`.`categorias` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `emisoft`.`usuarios`
-- -----------------------------------------------------
SET AUTOCOMMIT=0;
USE `emisoft`;
INSERT INTO `emisoft`.`usuarios` (`id`, `username`, `password`) VALUES (1, '1', '1');

COMMIT;
