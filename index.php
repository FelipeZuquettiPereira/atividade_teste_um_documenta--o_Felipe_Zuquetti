<?php
    session_start();

    include("infra/db/connect.php");
// esse código é vulnerável a ataques de SQL Injection, mas é apenas um exemplo simples para fins educacionais. Em um ambiente de produção, é altamente recomendado usar consultas preparadas para evitar esse tipo de vulnerabilidade. 
    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
        $resultado = $conn->query($sql);

        if ($resultado->num_rows > 0){
            $_SESSION["usuario"] = $usuario;
            header("Location: public/home.php");
            exit();
        }else{
            $erro = "Usuário ou senha inválidos!";
        }
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Sitema de Login Simples</h1>

    <form method="POST">
        <label>Usuário:</label>
        <input type="text" name="usuario">
        <br>
        <label>Senha:</label>
        <input type="password" name="senha">
        <br>
        <?php
            // Exibe o erro, se houver
            if(isset($erro)){
                echo $erro;
            };

            // esse erro serve ara alguma coisa
        
        ?>
        <br>
        <button type="submit">Entrar</button>
        // O código acima é um exemplo simples de um sistema de login em PHP. Ele verifica as credenciais do usuário e, se forem válidas, inicia uma sessão e redireciona para a página "home.php". Se as credenciais forem inválidas, exibe uma mensagem de erro. Lembre-se de que este código é apenas para fins educacionais e não deve ser usado em produção sem as devidas medidas de segurança, como o uso de consultas preparadas para evitar SQL Injection.
    </form>

</body>
</html>