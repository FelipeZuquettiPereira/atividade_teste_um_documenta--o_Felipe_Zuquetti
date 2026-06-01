CREATE DATABASE sistema_simples_m1;

    // Criando o banco de dados para o sistema simples

USE sistema_simples_m1;

    // Criando a tabela de usuários

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(87) NOT NULL,
    senha VARCHAR(255) NOT NULL
);

    // Inserindo um usuário de exemplo

INSERT INTO usuarios (usuario, senha) VALUES ('admin','123');

    // O código acima cria um banco de dados chamado "sistema_simples_m1", uma tabela chamada "usuarios" com os campos "id", "usuario" e "senha", e insere um usuário de exemplo com o nome de usuário "admin" e a senha "123". Lembre-se de que, em um ambiente de produção, é importante armazenar as senhas de forma segura, usando técnicas como hashing, para proteger as informações dos usuários.