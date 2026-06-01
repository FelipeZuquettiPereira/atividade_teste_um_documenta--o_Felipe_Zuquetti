<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("Location: ../index.php");
    exit();
}

    // O código acima verifica se a variável de sessão "usuario" está definida. Se não estiver, isso significa que o usuário não está logado, e o código redireciona para a página de login (index.php) e termina a execução do script.

include("../infra/db/connect.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $novoUsuario = $_POST['usuario'];
    $novaSenha = $_POST['senha'];

    $sql = "INSERT INTO usuarios (usuario,senha) 
    VALUES ('$novoUsuario','$novaSenha')";  

    if($conn->query($sql) === TRUE){
        echo "<script> alert('Usuário cadastrado com sucesso!')</script>";
    }else{
        echo "<script> alert('Erro ao cadastrar')</script>";
    }

};

    // O código acima verifica se o método de requisição é POST, o que indica que o formulário de cadastro foi enviado. Ele então coleta os valores do novo usuário e senha, constrói uma consulta SQL para inserir esses valores na tabela "usuarios", e executa a consulta. Se a inserção for bem-sucedida, exibe um alerta de sucesso; caso contrário, exibe um alerta de erro. Lembre-se de que este código é vulnerável a ataques de SQL Injection, e em um ambiente de produção, é altamente recomendado usar consultas preparadas para evitar esse tipo de vulnerabilidade.

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h3>Bem-Vindo! <?php echo $_SESSION["usuario"]; ?></h3>
    <a href="logout.php"> Sair</a>

    // cria as configurações iniciais da página e exibe uma mensagem de boas-vindas ao usuário logado, mostrando o nome de usuário armazenado na variável de sessão "usuario". Também inclui um link para a página de logout, permitindo que o usuário encerre a sessão quando desejar.

    <hr>
    <h4>Cadastro de Novo Usuário.</h4>
    <form method="POST">
        <label>Usuário:</label>
        <input type="text" name="usuario">
        <br>
        <label>Senha:</label>
        <input type="password" name="senha">
        <br>
        <?php
        
        // este codigo mostra o metodo de envio de informação(nesse caso é POST)

            if(isset($erro)){
                echo $erro;
            };

            // Erro
        
        ?>
        <br>
        <button type="submit">Cadastrar</button>
    </form>
    <hr>
    <?php
    
    include("components/table.php")

    // O código acima inclui um arquivo chamado "table.php" que provavelmente contém a lógica para exibir uma tabela de usuários cadastrados. Isso permite que os usuários vejam a lista de usuários existentes no sistema. Lembre-se de que, em um ambiente de produção, é importante implementar medidas de segurança adequadas para proteger as informações dos usuários e evitar vulnerabilidades como SQL Injection.

    ?>


</body>
</html>