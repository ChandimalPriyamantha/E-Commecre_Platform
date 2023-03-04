-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema KarmikayaDB
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema KarmikayaDB
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `KarmikayaDB` DEFAULT CHARACTER SET utf8 ;
USE `KarmikayaDB` ;

-- -----------------------------------------------------
-- Table `KarmikayaDB`.`Catogery`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `KarmikayaDB`.`Catogery` (
  `ID` INT NOT NULL,
  `Name` VARCHAR(45) NULL,
  `Description` VARCHAR(45) NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `KarmikayaDB`.`Service`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `KarmikayaDB`.`Service` (
  `ID` INT NOT NULL,
  `Name` VARCHAR(45) NULL,
  `Detailse` VARCHAR(300) NULL,
  `Image` VARCHAR(250) NULL,
  `Catogery_ID` INT NOT NULL,
  PRIMARY KEY (`ID`, `Catogery_ID`),
  INDEX `fk_Service_Catogery_idx` (`Catogery_ID` ASC) ,
  CONSTRAINT `fk_Service_Catogery`
    FOREIGN KEY (`Catogery_ID`)
    REFERENCES `KarmikayaDB`.`Catogery` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `KarmikayaDB`.`Massage`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `KarmikayaDB`.`Massage` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Sender_ID` VARCHAR(45) NOT NULL,
  `Resiver_ID` VARCHAR(45) NOT NULL,
  `Subject` VARCHAR(45) NULL,
  `Body` VARCHAR(45) NULL,
  PRIMARY KEY (`ID`, `Sender_ID`, `Resiver_ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `KarmikayaDB`.`Consumer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `KarmikayaDB`.`Consumer` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `NIC` VARCHAR(45) NOT NULL,
  `First_Name` VARCHAR(45) NULL,
  `Lat_Name` VARCHAR(45) NULL,
  `Sex` VARCHAR(45) NULL,
  `Email` VARCHAR(45) NULL,
  `DOB` DATE NULL,
  `Password` VARCHAR(45) NULL,
  `Image_Path` VARCHAR(250) NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `KarmikayaDB`.`Admin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `KarmikayaDB`.`Admin` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `NIC` VARCHAR(45) NOT NULL,
  `First_Name` VARCHAR(45) NULL,
  `Lat_Name` VARCHAR(45) NULL,
  `Sex` VARCHAR(45) NULL,
  `Email` VARCHAR(45) NULL,
  `DOB` DATE NULL,
  `Password` VARCHAR(45) NULL,
  `Image_Path` VARCHAR(250) NULL,
  `Adress` VARCHAR(45) NULL,
  `Phone_number` VARCHAR(45) NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `KarmikayaDB`.`Worker`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `KarmikayaDB`.`Worker` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `NIC` VARCHAR(45) NOT NULL,
  `First_Name` VARCHAR(45) NULL,
  `Lat_Name` VARCHAR(45) NULL,
  `Sex` VARCHAR(45) NULL,
  `Email` VARCHAR(45) NULL,
  `DOB` DATE NULL,
  `Password` VARCHAR(45) NULL,
  `Image_Path` VARCHAR(250) NULL,
  `Jobe_Type` VARCHAR(45) NULL,
  `Jobe_Category` VARCHAR(45) NULL,
  `Joine_Date` VARCHAR(45) NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `KarmikayaDB`.`Education`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `KarmikayaDB`.`Education` (
  `ID` INT NOT NULL,
  `Type` VARCHAR(45) NULL,
  `Discription` VARCHAR(250) NULL,
  `Worker_ID` INT NOT NULL,
  PRIMARY KEY (`ID`, `Worker_ID`),
  INDEX `fk_Education_Worker1_idx` (`Worker_ID` ASC) ,
  CONSTRAINT `fk_Education_Worker1`
    FOREIGN KEY (`Worker_ID`)
    REFERENCES `KarmikayaDB`.`Worker` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `KarmikayaDB`.`Experince`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `KarmikayaDB`.`Experince` (
  `ID` INT NOT NULL,
  `Name` VARCHAR(45) NULL,
  `Description` VARCHAR(300) NULL,
  `Image_Path_01` VARCHAR(200) NULL,
  `Image_Path_02` VARCHAR(200) NULL,
  `Image_Path_03` VARCHAR(200) NULL,
  `Worker_ID` INT NOT NULL,
  PRIMARY KEY (`ID`, `Worker_ID`),
  INDEX `fk_Experince_Worker1_idx` (`Worker_ID` ASC) ,
  CONSTRAINT `fk_Experince_Worker1`
    FOREIGN KEY (`Worker_ID`)
    REFERENCES `KarmikayaDB`.`Worker` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `KarmikayaDB`.`Project`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `KarmikayaDB`.`Project` (
  `ID` INT NOT NULL,
  `Name` VARCHAR(45) NULL,
  `Description` VARCHAR(500) NULL,
  `Budget` VARCHAR(45) NULL,
  `Date` DATE NULL,
  `Time` TIME NULL,
  `Skils` VARCHAR(250) NULL,
  `Image_path` VARCHAR(200) NULL,
  `Consumer_ID` INT NOT NULL,
  PRIMARY KEY (`ID`, `Consumer_ID`),
  INDEX `fk_Project_Consumer1_idx` (`Consumer_ID` ASC) ,
  CONSTRAINT `fk_Project_Consumer1`
    FOREIGN KEY (`Consumer_ID`)
    REFERENCES `KarmikayaDB`.`Consumer` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `KarmikayaDB`.`Bid`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `KarmikayaDB`.`Bid` (
  `ID` INT NOT NULL,
  `Discription` VARCHAR(45) NULL,
  `Price_Range` VARCHAR(45) NULL,
  `Date_Time` DATETIME NULL,
  `Worker_ID` INT NOT NULL,
  `Project_ID` INT NOT NULL,
  `Project_Consumer_ID` INT NOT NULL,
  PRIMARY KEY (`ID`, `Worker_ID`, `Project_ID`, `Project_Consumer_ID`),
  INDEX `fk_Bid_Worker1_idx` (`Worker_ID` ASC) ,
  INDEX `fk_Bid_Project1_idx` (`Project_ID` ASC, `Project_Consumer_ID` ASC) ,
  CONSTRAINT `fk_Bid_Worker1`
    FOREIGN KEY (`Worker_ID`)
    REFERENCES `KarmikayaDB`.`Worker` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Bid_Project1`
    FOREIGN KEY (`Project_ID` , `Project_Consumer_ID`)
    REFERENCES `KarmikayaDB`.`Project` (`ID` , `Consumer_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `KarmikayaDB`.`Subscription`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `KarmikayaDB`.`Subscription` (
  `ID` INT NOT NULL,
  `Name` VARCHAR(45) NULL,
  `Discription` VARCHAR(45) NULL,
  `Cost` VARCHAR(45) NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `KarmikayaDB`.`Payment`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `KarmikayaDB`.`Payment` (
  `ID` INT NOT NULL,
  `Price` VARCHAR(45) NULL,
  `Activation_Code` VARCHAR(45) NULL,
  `Time_Date` DATETIME NULL,
  `Worker_ID` INT NOT NULL,
  `Subscription_ID` INT NOT NULL,
  PRIMARY KEY (`ID`, `Worker_ID`, `Subscription_ID`),
  INDEX `fk_Payment_Worker1_idx` (`Worker_ID` ASC) ,
  INDEX `fk_Payment_Subscription1_idx` (`Subscription_ID` ASC) ,
  CONSTRAINT `fk_Payment_Worker1`
    FOREIGN KEY (`Worker_ID`)
    REFERENCES `KarmikayaDB`.`Worker` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Payment_Subscription1`
    FOREIGN KEY (`Subscription_ID`)
    REFERENCES `KarmikayaDB`.`Subscription` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `KarmikayaDB`.`Address_of_worker`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `KarmikayaDB`.`Address_of_worker` (
  `ID` INT NOT NULL,
  `Recipient's name` VARCHAR(45) NULL,
  `Business's name` VARCHAR(45) NULL,
  ` ZIP code` VARCHAR(45) NULL,
  `State` VARCHAR(45) NULL,
  `Country` VARCHAR(45) NULL,
  `City` VARCHAR(45) NULL,
  `Street_address` VARCHAR(45) NULL,
  `Worker_ID` INT NOT NULL,
  PRIMARY KEY (`ID`, `Worker_ID`),
  INDEX `fk_Address_Worker1_idx` (`Worker_ID` ASC) ,
  CONSTRAINT `fk_Address_Worker1`
    FOREIGN KEY (`Worker_ID`)
    REFERENCES `KarmikayaDB`.`Worker` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `KarmikayaDB`.`Phone_Number_of_worker`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `KarmikayaDB`.`Phone_Number_of_worker` (
  `ID` INT NOT NULL,
  `Mobile_Number` VARCHAR(45) NULL,
  `Home_Number` VARCHAR(45) NULL,
  `Work_Place_Number` VARCHAR(45) NULL,
  `Worker_ID` INT NOT NULL,
  PRIMARY KEY (`ID`, `Worker_ID`),
  INDEX `fk_Phone_Number_Worker1_idx` (`Worker_ID` ASC) ,
  CONSTRAINT `fk_Phone_Number_Worker1`
    FOREIGN KEY (`Worker_ID`)
    REFERENCES `KarmikayaDB`.`Worker` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `KarmikayaDB`.`Address_of_consumer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `KarmikayaDB`.`Address_of_consumer` (
  `ID` INT NOT NULL,
  `Recipient's name` VARCHAR(45) NULL,
  `Business's name` VARCHAR(45) NULL,
  ` ZIP code` VARCHAR(45) NULL,
  `State` VARCHAR(45) NULL,
  `Country` VARCHAR(45) NULL,
  `City` VARCHAR(45) NULL,
  `Street_address` VARCHAR(45) NULL,
  `Consumer_ID` INT NOT NULL,
  PRIMARY KEY (`ID`, `Consumer_ID`),
  INDEX `fk_Consumer_Address_Consumer1_idx` (`Consumer_ID` ASC) ,
  CONSTRAINT `fk_Consumer_Address_Consumer1`
    FOREIGN KEY (`Consumer_ID`)
    REFERENCES `KarmikayaDB`.`Consumer` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `KarmikayaDB`.`Phone_Number_of_Consumer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `KarmikayaDB`.`Phone_Number_of_Consumer` (
  `ID` INT NOT NULL,
  `Mobile_Number` VARCHAR(45) NULL,
  `Home_Number` VARCHAR(45) NULL,
  `Work_Place_Number` VARCHAR(45) NULL,
  `Consumer_ID` INT NOT NULL,
  PRIMARY KEY (`ID`, `Consumer_ID`),
  INDEX `fk_Consumerr_Phone_Number_Consumer1_idx` (`Consumer_ID` ASC) ,
  CONSTRAINT `fk_Consumerr_Phone_Number_Consumer1`
    FOREIGN KEY (`Consumer_ID`)
    REFERENCES `KarmikayaDB`.`Consumer` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
