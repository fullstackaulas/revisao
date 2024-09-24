drop database if exists aulaRevisao;

create database aulaRevisao;
use aulaRevisao;

CREATE TABLE `aulaRevisao`.`chamada` (`id` INT NOT NULL AUTO_INCREMENT , `nome` VARCHAR(125) NOT NULL , `email` VARCHAR(125) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

INSERT INTO `chamada` (`id`, `nome`, `email`) VALUES (NULL, 'matheus', 'matheus.rubens@hotmail.com'), (NULL, 'joao', 'joao@hotmail.com')