
CREATE DATABASE aula_php;

USE aula_php;

CREATE TABLE alunos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100),
    idade INT
);


CREATE TABLE usuauarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR (100) NOT NULL,
    email VARCHAR (100) NOT NULL UNIQUE,
    senha VARCHAR (255) NOT NULL
);

INSERT INTO usuarios (nome, email, senha)
VALUES ('Admin', 'admin@admin.com', '123456')