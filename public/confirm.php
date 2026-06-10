<?php

session_start();
if(!isset($_SESSION["usuario"])){
    header("Location: ../index.php");
    exit();
}

echo "<h2>Tem certeza que deseja excluir o usuário?</h2>";
echo "<a href='excluir.php?id=" . $_GET["id"] . "'><button >Sim</button></a>";
echo "<a href='home.php'><button >Não</button></a>";

?>
