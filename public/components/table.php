<h4>Usuários Cadastrados</h4>

<table border="1" cellpadding="3"> // O código acima cria uma tabela HTML com bordas e espaçamento entre as células. A tabela será usada para exibir os usuários cadastrados no sistema.

    <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Senha</th>
    </tr> //

    <?php
    
    $sqlTodosUsuarios = "SELECT * FROM usuarios"; // Seleciona todos os registros da tabela "usuarios" do banco de dados. A consulta SQL é armazenada na variável $sqlTodosUsuarios.

    $resultadoTodosUsuarios = $conn->query($sqlTodosUsuarios); // Executa a consulta SQL usando o objeto de conexão $conn e armazena o resultado na variável $resultadoTodosUsuarios. O método query() é usado para enviar a consulta ao banco de dados e obter os resultados.

    // o query é o metodo de consulta do banco de dados, ele executa a consulta SQL e retorna um objeto que contém os resultados da consulta. O resultado pode ser iterado para acessar os dados retornados.

    while($linha = $resultadoTodosUsuarios->fetch_assoc()){

    // o fetch_assoc é um método que retorna a próxima linha do resultado da consulta como um array associativo, onde as chaves do array correspondem aos nomes das colunas da tabela. O loop while continua enquanto houver linhas para serem retornadas, permitindo que cada usuário seja exibido na tabela HTML.

        echo "  <tr>
                    <td>". $linha['id'] . "</td>
                    <td>". $linha['usuario'] . "</td>
                    <td>". $linha['senha'] . "</td>
                    <td> <a href='editar.php?id=". $linha['id'] ."'>Editar</a> </td>
                    <td> <a href='delete.php?id=". $linha['id'] ."'>Deletar</a> </td>
                </tr>
        ";
            // o echo é usado para imprimir o código HTML que representa uma linha da tabela para cada usuário encontrado no banco de dados. Ele utiliza a sintaxe de concatenação de strings para inserir os valores das colunas "id", "usuario" e "senha" na estrutura da tabela. Cada linha da tabela é criada dentro do loop while, garantindo que todos os usuários sejam exibidos corretamente.

    }
    
    ?>

    


</table>