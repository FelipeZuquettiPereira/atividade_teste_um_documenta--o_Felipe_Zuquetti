CREATE DATABASE sistema_simples_m1;

    <!--Criando o banco de dados para o sistema simples-->

USE sistema_simples_m1;

<!--Criando a tabela de usuários-->

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(87) NOT NULL,
    senha VARCHAR(255) NOT NULL
);

<!--Inserindo um usuário de exemplo-->

INSERT INTO usuarios (usuario, senha) VALUES ('admin','123');

