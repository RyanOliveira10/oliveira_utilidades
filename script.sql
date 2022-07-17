CREATE DATABASE oliveira_utilidades DEFAULT CHARACTER SET utf8;
USE oliveira_utilidades;

CREATE TABLE clientes (
    id            INT
    nome          VARCHAR(255) NOT NULL,
    sobre_nome         VARCHAR(255),
    telefone    INT NOT NULL,
    endereco         VARCHAR(255) NOT NULL,
    data          DATE NOT NULL,
PRIMARY KEY (id))
