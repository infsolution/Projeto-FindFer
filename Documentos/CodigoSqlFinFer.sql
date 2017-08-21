-- MySQL Script generated by MySQL Workbench
-- Sáb 22 Jul 2017 22:42:10 BRT
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema FindFerDB
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `FindFerDB` ;

-- -----------------------------------------------------
-- Schema FindFerDB
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `FindFerDB` DEFAULT CHARACTER SET utf8 ;
USE `FindFerDB` ;

-- -----------------------------------------------------
-- Table `FindFerDB`.`TIPO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `FindFerDB`.`TIPO` ;

CREATE TABLE IF NOT EXISTS `FindFerDB`.`TIPO` (
  `id_tipo` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_tipo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `FindFerDB`.`MIDIA`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `FindFerDB`.`MIDIA` ;

CREATE TABLE IF NOT EXISTS `FindFerDB`.`MIDIA` (
  `id_midia` INT NOT NULL AUTO_INCREMENT,
  `endereco_midia` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_midia`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `FindFerDB`.`COORDENADA`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `FindFerDB`.`COORDENADA` ;

CREATE TABLE IF NOT EXISTS `FindFerDB`.`COORDENADA` (
  `id_cordenadas` INT NOT NULL AUTO_INCREMENT,
  `latitude` INT(11) NOT NULL,
  `longitude` INT(11) NOT NULL,
  PRIMARY KEY (`id_cordenadas`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `FindFerDB`.`USUARIO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `FindFerDB`.`USUARIO` ;

CREATE TABLE IF NOT EXISTS `FindFerDB`.`USUARIO` (
  `id_user` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `qualificacao` FLOAT NOT NULL,
  PRIMARY KEY (`id_user`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `FindFerDB`.`FEIRANTE/CLIENTE`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `FindFerDB`.`FEIRANTE/CLIENTE` ;

CREATE TABLE IF NOT EXISTS `FindFerDB`.`FEIRANTE/CLIENTE` (
  `idFeirante/Cliente` INT NOT NULL AUTO_INCREMENT,
  `data_relacionamento` DATE NOT NULL,
  PRIMARY KEY (`idFeirante/Cliente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `FindFerDB`.`PRODUTO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `FindFerDB`.`PRODUTO` ;

CREATE TABLE IF NOT EXISTS `FindFerDB`.`PRODUTO` (
  `id_produto` INT NOT NULL AUTO_INCREMENT,
  `nome_produto` VARCHAR(45) NOT NULL,
  `preco` DOUBLE NOT NULL,
  PRIMARY KEY (`id_produto`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `FindFerDB`.`ANUNCIO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `FindFerDB`.`ANUNCIO` ;

CREATE TABLE IF NOT EXISTS `FindFerDB`.`ANUNCIO` (
  `id_anuncio` INT NOT NULL,
  `titulo` VARCHAR(45) NOT NULL,
  `descricao` LONGTEXT NULL,
  `preco` DOUBLE NULL,
  `data_hora` DATETIME NULL,
  PRIMARY KEY (`id_anuncio`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `FindFerDB`.`TIPO_FEIRA`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `FindFerDB`.`TIPO_FEIRA` ;

CREATE TABLE IF NOT EXISTS `FindFerDB`.`TIPO_FEIRA` (
  `id_tipo_feira` INT NOT NULL AUTO_INCREMENT,
  `nome_tipo` VARCHAR(255) NOT NULL,
  `descricao` MEDIUMTEXT NULL,
  PRIMARY KEY (`id_tipo_feira`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `FindFerDB`.`FEIRA`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `FindFerDB`.`FEIRA` ;

CREATE TABLE IF NOT EXISTS `FindFerDB`.`FEIRA` (
  `id_feira` INT NOT NULL AUTO_INCREMENT,
  `Nome` VARCHAR(255) NULL,
  `descricao` VARCHAR(255) NULL,
  PRIMARY KEY (`id_feira`))
ENGINE = InnoDB
COMMENT = 'Feira é composta por um ou muitos feirantes, possui um perimetro, um nome, dados sociais e historicos, uma administraçao,\num vinculo com orgãos publicos.';


-- -----------------------------------------------------
-- Table `FindFerDB`.`BANCA`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `FindFerDB`.`BANCA` ;

CREATE TABLE IF NOT EXISTS `FindFerDB`.`BANCA` (
  `id_banca` INT NOT NULL AUTO_INCREMENT,
  `nome_banca` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id_banca`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `FindFerDB`.`BANCA/ANUNCIO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `FindFerDB`.`BANCA/ANUNCIO` ;

CREATE TABLE IF NOT EXISTS `FindFerDB`.`BANCA/ANUNCIO` (
  `id_feirante_anuncio` BIGINT(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_feirante_anuncio`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `FindFerDB`.`VENDA`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `FindFerDB`.`VENDA` ;

CREATE TABLE IF NOT EXISTS `FindFerDB`.`VENDA` (
  `id_venda` INT NOT NULL AUTO_INCREMENT,
  `data` DATE NOT NULL,
  `valor` DOUBLE NOT NULL,
  PRIMARY KEY (`id_venda`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `FindFerDB`.`ITEN/VENDA`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `FindFerDB`.`ITEN/VENDA` ;

CREATE TABLE IF NOT EXISTS `FindFerDB`.`ITEN/VENDA` (
  `id_item_venda` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_item_venda`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `FindFerDB`.`BANCA/VENDA`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `FindFerDB`.`BANCA/VENDA` ;

CREATE TABLE IF NOT EXISTS `FindFerDB`.`BANCA/VENDA` (
  `id_usuario_venda` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_usuario_venda`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `FindFerDB`.`PERIMETRO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `FindFerDB`.`PERIMETRO` ;

CREATE TABLE IF NOT EXISTS `FindFerDB`.`PERIMETRO` (
  `id_perimetro` INT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_perimetro`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;