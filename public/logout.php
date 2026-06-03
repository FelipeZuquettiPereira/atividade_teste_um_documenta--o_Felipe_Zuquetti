<?php

    session_start(); // Inicia a sessão para acessar as variáveis de sessão
    session_destroy(); // Destroi a sessão, removendo todas as variáveis de sessão e encerrando a sessão atual
    header("Location: ../index.php"); // Redireciona o usuário para a página de login (index.php) após o logout
    exit(); // Encerra a execução do script para garantir que o redirecionamento ocorra imediatamente

?>

<!-- O código acima é responsável por encerrar a sessão do usuário, efetivamente fazendo o logout. Ele inicia a sessão, destrói todas as variáveis de sessão e redireciona o usuário para a página de login. É uma prática comum em sistemas de autenticação para garantir que o usuário seja desconectado de forma segura. -->