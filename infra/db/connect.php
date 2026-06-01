<?php

    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "sistema_simples_m1";

    // Criando a conexão com o banco de dados

    $conn = new mysqli($host,$user,$pass,$db);

    // Verificando se a conexão foi bem sucedida

    if($conn->connect_error){
        die("Erro na conexão!");
    }else{
        echo "<script>console.log('Banco conectado com sucesso!')</script>";
    };

    // O código acima estabelece uma conexão com um banco de dados MySQL usando as credenciais fornecidas. Ele verifica se a conexão foi bem-sucedida e, em caso afirmativo, exibe uma mensagem no console do navegador. Se a conexão falhar, ele termina o script e exibe uma mensagem de erro.

?>