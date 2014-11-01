SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `shopping_cart` ;
USE `shopping_cart` ;

-- -----------------------------------------------------
-- Table `shopping_cart`.`Customer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `shopping_cart`.`Customer` (
  `CusID` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`CusID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `shopping_cart`.`Categories`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `shopping_cart`.`Categories` (
  `CateID` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `CateName` VARCHAR(50) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  PRIMARY KEY (`CateID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `shopping_cart`.`Product`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `shopping_cart`.`Product` (
  `ProID` INT NOT NULL,
  `CateID` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`ProID`),
  INDEX `fk_Product_Categories1_idx` (`CateID` ASC),
  CONSTRAINT `fk_Product_Categories1`
    FOREIGN KEY (`CateID`)
    REFERENCES `shopping_cart`.`Categories` (`CateID`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `shopping_cart`.`Size`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `shopping_cart`.`Size` (
  `SizeID` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `SizeName` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  PRIMARY KEY (`SizeID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `shopping_cart`.`ProSize`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `shopping_cart`.`ProSize` (
  `ProSizeID` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `SizeID` INT UNSIGNED NOT NULL,
  `ProID` INT NOT NULL,
  PRIMARY KEY (`ProSizeID`),
  INDEX `fk_ProSize_Size_idx` (`SizeID` ASC),
  INDEX `fk_ProSize_Product1_idx` (`ProID` ASC),
  CONSTRAINT `fk_ProSize_Size`
    FOREIGN KEY (`SizeID`)
    REFERENCES `shopping_cart`.`Size` (`SizeID`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_ProSize_Product1`
    FOREIGN KEY (`ProID`)
    REFERENCES `shopping_cart`.`Product` (`ProID`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `shopping_cart`.`Improt`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `shopping_cart`.`Improt` (
  `ImportID` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `ProID` INT NOT NULL,
  `SizeID` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`ImportID`),
  INDEX `fk_Improt_Product1_idx` (`ProID` ASC),
  INDEX `fk_Improt_Size1_idx` (`SizeID` ASC),
  CONSTRAINT `fk_Improt_Product1`
    FOREIGN KEY (`ProID`)
    REFERENCES `shopping_cart`.`Product` (`ProID`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Improt_Size1`
    FOREIGN KEY (`SizeID`)
    REFERENCES `shopping_cart`.`Size` (`SizeID`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `shopping_cart`.`PayMethod`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `shopping_cart`.`PayMethod` (
  `PayID` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `PayType` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL,
  PRIMARY KEY (`PayID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `shopping_cart`.`Order`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `shopping_cart`.`Order` (
  `OrdID` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `PayID` INT UNSIGNED NOT NULL,
  `CusId` INT NOT NULL,
  PRIMARY KEY (`OrdID`),
  INDEX `fk_Order_PayMethod1_idx` (`PayID` ASC),
  INDEX `fk_Order_Customer1_idx` (`CusId` ASC),
  CONSTRAINT `fk_Order_PayMethod1`
    FOREIGN KEY (`PayID`)
    REFERENCES `shopping_cart`.`PayMethod` (`PayID`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Order_Customer1`
    FOREIGN KEY (`CusId`)
    REFERENCES `shopping_cart`.`Customer` (`CusID`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `shopping_cart`.`OrderDetail`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `shopping_cart`.`OrderDetail` (
  `OrdID` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `ProSizeID` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`OrdID`),
  INDEX `fk_OrderDetail_ProSize1_idx` (`ProSizeID` ASC),
  CONSTRAINT `fk_OrderDetail_ProSize1`
    FOREIGN KEY (`ProSizeID`)
    REFERENCES `shopping_cart`.`ProSize` (`ProSizeID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `shopping_cart`.`Feedback`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `shopping_cart`.`Feedback` (
  `FeedID` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `CusId` INT NOT NULL,
  PRIMARY KEY (`FeedID`),
  INDEX `fk_Feedback_Customer1_idx` (`CusId` ASC),
  CONSTRAINT `fk_Feedback_Customer1`
    FOREIGN KEY (`CusId`)
    REFERENCES `shopping_cart`.`Customer` (`CusID`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `shopping_cart`.`Admin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `shopping_cart`.`Admin` (
  `AdminID` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `UserName` VARCHAR(30) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  `Password` VARCHAR(30) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  PRIMARY KEY (`AdminID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `shopping_cart`.`Notice`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `shopping_cart`.`Notice` (
  `NotID` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `CusID` INT NOT NULL,
  `AdminID` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`NotID`),
  INDEX `fk_Notice_Customer1_idx` (`CusID` ASC),
  INDEX `fk_Notice_Admin1_idx` (`AdminID` ASC),
  CONSTRAINT `fk_Notice_Customer1`
    FOREIGN KEY (`CusID`)
    REFERENCES `shopping_cart`.`Customer` (`CusID`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Notice_Admin1`
    FOREIGN KEY (`AdminID`)
    REFERENCES `shopping_cart`.`Admin` (`AdminID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `shopping_cart`.`Rate`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `shopping_cart`.`Rate` (
  `RateID` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `CusID` INT NOT NULL,
  `ProID` INT NOT NULL,
  PRIMARY KEY (`RateID`),
  INDEX `fk_Rate_Customer1_idx` (`CusID` ASC),
  INDEX `fk_Rate_Product1_idx` (`ProID` ASC),
  CONSTRAINT `fk_Rate_Customer1`
    FOREIGN KEY (`CusID`)
    REFERENCES `shopping_cart`.`Customer` (`CusID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Rate_Product1`
    FOREIGN KEY (`ProID`)
    REFERENCES `shopping_cart`.`Product` (`ProID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `shopping_cart`.`New`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `shopping_cart`.`New` (
  `NewID` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `NewTitle` VARCHAR(200) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  PRIMARY KEY (`NewID`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
