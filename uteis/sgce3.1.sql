SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';


-- -----------------------------------------------------
-- Table `grupos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `grupos` ;

CREATE  TABLE IF NOT EXISTS `grupos` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(200) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `usuarios` ;

CREATE  TABLE IF NOT EXISTS `usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `grupo_id` INT NOT NULL ,
  `status` TINYINT(1)  NOT NULL ,
  `nome` VARCHAR(60) NOT NULL ,
  `email` VARCHAR(50) NOT NULL ,
  `senha` VARCHAR(140) NOT NULL ,
  `cpf` VARCHAR(14) NULL ,
  `endereco` VARCHAR(100) NULL ,
  `complemento` VARCHAR(7) NULL ,
  `numero` VARCHAR(7) NULL ,
  `bairro` VARCHAR(40) NULL ,
  `cidade` VARCHAR(40) NULL ,
  `uf` VARCHAR(2) NULL ,
  `cep` VARCHAR(9) NULL ,
  `telefone` VARCHAR(14) NULL ,
  `celular` VARCHAR(14) NULL ,
  `prestacao_servico` VARCHAR(50) NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_usuarios_grupos1` (`grupo_id` ASC) ,
  CONSTRAINT `fk_usuarios_grupos1`
    FOREIGN KEY (`grupo_id` )
    REFERENCES `grupos` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `logs`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `logs` ;

CREATE  TABLE IF NOT EXISTS `logs` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `usuario_id` INT NOT NULL ,
  `data` DATETIME NOT NULL ,
  `descricao` VARCHAR(80) NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_logs_usuarios1` (`usuario_id` ASC) ,
  CONSTRAINT `fk_logs_usuarios1`
    FOREIGN KEY (`usuario_id` )
    REFERENCES `usuarios` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `definicoescestas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `definicoescestas` ;

CREATE  TABLE IF NOT EXISTS `definicoescestas` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `tipo` VARCHAR(45) NOT NULL ,
  `nome` VARCHAR(45) NOT NULL ,
  `quantidade` DECIMAL(6,2) NOT NULL ,
  `medida` VARCHAR(20) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `estoques`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `estoques` ;

CREATE  TABLE IF NOT EXISTS `estoques` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `definicoescesta_id` INT NOT NULL ,
  `quantidade` INT NOT NULL ,
  `complemento_qt` DECIMAL(6,2) NOT NULL ,
  `data_entrada` DATE NOT NULL ,
  `data_vencimento` DATE NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_estoques_definicoescestas1` (`definicoescesta_id` ASC) ,
  CONSTRAINT `fk_estoques_definicoescestas1`
    FOREIGN KEY (`definicoescesta_id` )
    REFERENCES `definicoescestas` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `familias`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `familias` ;

CREATE  TABLE IF NOT EXISTS `familias` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(60) NOT NULL ,
  `parente_id` INT NULL ,
  `escolaridade` VARCHAR(50) NULL ,
  `profissao` VARCHAR(100) NULL ,
  `ocupacao` VARCHAR(100) NULL ,
  `local_trabalho` VARCHAR(50) NULL ,
  `beneficios` TINYINT(1)  NULL ,
  `parentesco` VARCHAR(50) NULL ,
  `situacao` INT NOT NULL ,
  `nome_escola` VARCHAR(60) NULL ,
  `manequim` VARCHAR(45) NULL ,
  `peso` DECIMAL(6,2) NULL ,
  `altura` DECIMAL(6,2) NULL ,
  `situacao_nutricional` TINYINT(1)  NOT NULL ,
  `cpf` VARCHAR(14) NULL ,
  `nascimento` DATE NOT NULL ,
  `endereco` VARCHAR(100) NOT NULL ,
  `numero` VARCHAR(7) NULL ,
  `complemento` VARCHAR(7) NULL ,
  `bairro` VARCHAR(40) NOT NULL ,
  `referencia` VARCHAR(100) NULL ,
  `cidade` VARCHAR(40) NULL ,
  `uf` VARCHAR(2) NULL ,
  `cep` VARCHAR(9) NULL ,
  `telefone` VARCHAR(14) NULL ,
  `renda` DECIMAL(12,2) NULL ,
  `renda_familiar` DECIMAL(12,2) NULL ,
  `renda_percapta` DECIMAL(12,2) NULL ,
  `companheiro` TINYINT(1)  NOT NULL ,
  `dependente` TINYINT(1)  NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cestas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cestas` ;

CREATE  TABLE IF NOT EXISTS `cestas` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `familia_id` INT NULL ,
  `data_gerada` DATETIME NOT NULL ,
  `data_saida` DATE NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_cestas_pessoas1` (`familia_id` ASC) ,
  CONSTRAINT `fk_cestas_pessoas1`
    FOREIGN KEY (`familia_id` )
    REFERENCES `familias` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `questionarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `questionarios` ;

CREATE  TABLE IF NOT EXISTS `questionarios` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `pergunta` VARCHAR(200) NULL ,
  `tipo` VARCHAR(50) NULL ,
  `extra` TEXT NULL ,
  `ordem` INT NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `frequencias`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `frequencias` ;

CREATE  TABLE IF NOT EXISTS `frequencias` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `familia_id` INT NOT NULL ,
  `codigo` VARCHAR(10) NOT NULL ,
  `data` DATE NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_frequencias_pessoas1` (`familia_id` ASC) ,
  CONSTRAINT `fk_frequencias_pessoas1`
    FOREIGN KEY (`familia_id` )
    REFERENCES `familias` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cestas_estoques`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cestas_estoques` ;

CREATE  TABLE IF NOT EXISTS `cestas_estoques` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `cesta_id` INT NOT NULL ,
  `estoque_id` INT NOT NULL ,
  PRIMARY KEY (`id`, `cesta_id`, `estoque_id`) ,
  INDEX `fk_cestas_has_estoques_cestas1` (`cesta_id` ASC) ,
  INDEX `fk_cestas_has_estoques_estoques1` (`estoque_id` ASC) ,
  CONSTRAINT `fk_cestas_has_estoques_cestas1`
    FOREIGN KEY (`cesta_id` )
    REFERENCES `cestas` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cestas_has_estoques_estoques1`
    FOREIGN KEY (`estoque_id` )
    REFERENCES `estoques` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `respostas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `respostas` ;

CREATE  TABLE IF NOT EXISTS `respostas` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `familia_id` INT NOT NULL ,
  `questionario_id` INT NOT NULL ,
  `resposta` TEXT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_respostas_questionarios1` (`questionario_id` ASC) ,
  INDEX `fk_respostas_pessoas1` (`familia_id` ASC) ,
  CONSTRAINT `fk_respostas_questionarios1`
    FOREIGN KEY (`questionario_id` )
    REFERENCES `questionarios` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_respostas_pessoas1`
    FOREIGN KEY (`familia_id` )
    REFERENCES `familias` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `acos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `acos` ;

CREATE  TABLE IF NOT EXISTS `acos` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `parent_id` INT NULL ,
  `model` VARCHAR(255) NULL ,
  `foreign_key` INT NULL ,
  `alias` VARCHAR(255) NULL ,
  `lft` INT NULL ,
  `rght` INT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `aros`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `aros` ;

CREATE  TABLE IF NOT EXISTS `aros` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `parent_id` INT NULL ,
  `model` VARCHAR(255) NULL ,
  `foreign_key` INT NULL ,
  `alias` VARCHAR(255) NULL ,
  `lft` INT NULL ,
  `rght` INT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `aros_acos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `aros_acos` ;

CREATE  TABLE IF NOT EXISTS `aros_acos` (
  `id` INT NOT NULL ,
  `aro_id` INT NOT NULL ,
  `aco_id` INT NOT NULL ,
  `_create` CHAR(2) NULL ,
  `_read` CHAR(2) NULL ,
  `_update` CHAR(2) NULL ,
  `_delete` CHAR(2) NULL ,
  PRIMARY KEY (`id`, `aro_id`, `aco_id`) ,
  INDEX `fk_aros_has_acos_acos1` (`aco_id` ASC) ,
  INDEX `fk_aros_has_acos_aros1` (`aro_id` ASC) ,
  CONSTRAINT `fk_aros_has_acos_aros1`
    FOREIGN KEY (`aro_id` )
    REFERENCES `aros` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_aros_has_acos_acos1`
    FOREIGN KEY (`aco_id` )
    REFERENCES `acos` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `voluntarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `voluntarios` ;

CREATE  TABLE IF NOT EXISTS `voluntarios` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(60) NOT NULL ,
  `email` VARCHAR(50) NULL ,
  `endereco` VARCHAR(100) NULL ,
  `numero` VARCHAR(7) NULL ,
  `complemento` VARCHAR(7) NULL ,
  `bairro` VARCHAR(40) NULL ,
  `cidade` VARCHAR(40) NULL ,
  `uf` VARCHAR(2) NULL ,
  `cep` VARCHAR(9) NULL ,
  `telefone` VARCHAR(14) NULL ,
  `celular` VARCHAR(14) NULL ,
  `prestacao_servico` VARCHAR(50) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `itemcestas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `itemcestas` ;

CREATE  TABLE IF NOT EXISTS `itemcestas` (
  `id` INT NOT NULL ,
  `cesta_id` INT NOT NULL ,
  `estoque_id` INT NOT NULL ,
  `quantidade` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_itemcestas_cestas1` (`cesta_id` ASC) ,
  INDEX `fk_itemcestas_estoques1` (`estoque_id` ASC) ,
  CONSTRAINT `fk_itemcestas_cestas1`
    FOREIGN KEY (`cesta_id` )
    REFERENCES `cestas` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_itemcestas_estoques1`
    FOREIGN KEY (`estoque_id` )
    REFERENCES `estoques` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
