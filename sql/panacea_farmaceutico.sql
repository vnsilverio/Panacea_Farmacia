CREATE DATABASE panacea_farmacia;
USE panacea_farmacia;

CREATE TABLE FARMACEUTICO (
    matricula char(9) PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    sobrenome VARCHAR(100) NOT NULL,
    dt_cont DATE NOT NULL
);

