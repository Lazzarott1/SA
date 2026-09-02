CREATE DATABASE sa_teste;
USE sa_teste;

CREATE TABLE sensores (
    id_sensor INT AUTO_INCREMENT PRIMARY KEY,
    nome_sensor VARCHAR(100) NOT NULL,
    categoria_sensor VARCHAR(50) NOT NULL,
    tipo_sensor VARCHAR(50) NOT NULL,
    status_sensor VARCHAR(20) NOT NULL
);

CREATE TABLE usuarios(
id_usuario INT AUTO_INCREMENT PRIMARY KEY,
nome_usuario VARCHAR(200) NOT NULL,
senha VARCHAR(255) NOT NULL,
email_usuario VARCHAR(200) NOT NULL
);