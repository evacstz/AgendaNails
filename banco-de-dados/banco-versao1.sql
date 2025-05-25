CREATE DATABASE agendaNails;
USE agendaNails;

CREATE TABLE administrador (
	id_administrador INT PRIMARY KEY AUTO_INCREMENT,
    nome_administrador VARCHAR(45) NOT NULL,
    email VARCHAR(70) NOT NULL,
    senha VARCHAR(50) NOT NULL
);

CREATE TABLE clientes (
	id_cliente INT PRIMARY KEY AUTO_INCREMENT,
    nome_cliente VARCHAR(45) NOT NULL,
    telefone VARCHAR(20)
);

ALTER TABLE clientes
MODIFY telefone VARCHAR(20) NOT NULL;

CREATE TABLE serviços (
	id_serviço INT PRIMARY KEY AUTO_INCREMENT,
    nome_serviço VARCHAR(45) NOT NULL,
    preço DECIMAL(5, 2)
);

CREATE TABLE agendamentos (
	id_agendamento INT PRIMARY KEY AUTO_INCREMENT,
    data_agendamento DATE,
    hora_agendamento TIME,
    forma_pagamento VARCHAR(30),
    status_agendamento VARCHAR(20)
);

CREATE TABLE pagamentos (
	id_pagamento INT PRIMARY KEY AUTO_INCREMENT,
    valor_cobrado DECIMAL(5,2),
    data_pagamento DATE,
    status_pagamento VARCHAR(20)
);

//tomar nota que tenho que fazer várias alterações