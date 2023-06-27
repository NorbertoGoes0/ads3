CREATE DATABASE meu_banco_de_dados;
USE meu_banco_de_dados;

CREATE TABLE aluno (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(500) DEFAULT NULL,
    sobrenome varchar(500) DEFAULT NULL,
    email varchar(500) DEFAULT NULL,
    PRIMARY KEY (id)
);
