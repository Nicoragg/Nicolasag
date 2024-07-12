CREATE DATABASE php;
USE php;

CREATE TABLE prova_substitutiva (
    idFornecedor INT AUTO_INCREMENT PRIMARY KEY,
    razaoSocial VARCHAR(50) NOT NULL,
    nome VARCHAR(50) NOT NULL,
    cnpj CHAR(18) NOT NULL,
    responsavel VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
	ddd CHAR(3) NOT NULL,
    telefone CHAR(10) NOT NULL
);