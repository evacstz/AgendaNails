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
    telefone VARCHAR(20) NOT NULL
);

CREATE TABLE servicos (
    id_servico INT PRIMARY KEY AUTO_INCREMENT,
    nome_servico VARCHAR(45) NOT NULL,
    preco DECIMAL(5, 2) NOT NULL
);

CREATE TABLE agendamentos (
    id_agendamento INT PRIMARY KEY AUTO_INCREMENT,
    data_agendamento DATE NOT NULL,
    hora_agendamento TIME NOT NULL,
    forma_pagamento VARCHAR(30),
    status_agendamento VARCHAR(20),
    id_cliente INT,
    id_serviço INT,
    id_administrador INT,
	FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente),
	FOREIGN KEY (id_serviço) REFERENCES serviços(id_serviço),
	FOREIGN KEY (id_administrador) REFERENCES administrador(id_administrador)
);

CREATE TABLE pagamentos (
    id_pagamento INT PRIMARY KEY AUTO_INCREMENT,
    valor_cobrado DECIMAL(5,2) NOT NULL,
    data_pagamento DATE,
    status_pagamento VARCHAR(20),
    id_agendamento INT,
    FOREIGN KEY (id_agendamento) REFERENCES agendamentos(id_agendamento)
);

SELECT * FROM administrador;
SELECT * FROM clientes;
SELECT * FROM serviços;
SELECT * FROM agendamentos;
SELECT * FROM pagamentos;
