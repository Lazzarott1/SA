CREATE DATABASE sa_teste;
USE sa_teste;

CREATE TABLE sensores (
    id_sensor INT AUTO_INCREMENT PRIMARY KEY,
    nome_sensor VARCHAR(100) NOT NULL,
    categoria_sensor VARCHAR(50) NOT NULL,
    tipo_sensor VARCHAR(50) NOT NULL,
    status_sensor VARCHAR(20) NOT NULL
);