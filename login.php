<?php
/*- criar a conexão com BD
- select na tabela de usuarios com o email e a senha como filtro
- verificar se foi retornado alguma informação
    - se voltar informação é pq usuario e senha existem, mandar pro painel
    - se não retornou nada, não existe usuario ou senha, mandar pra pag. inicial
   
- fechar a conexão*/

$email = $_POST["email"];
$senha = $_POST["senha"];

include "conexao.php";

$sql_buscar_usuario = "select * from usuario where email = '$email' and senha = '" . md5($senha) . "'"; 

$um_usuario = mysqli_query($conexao, $sql_buscar_usuario);

if ($um_usuario->num_rows > 0) {
    header("location:painel.php");
} else {
    header("location:index.php?msg=erro");
}
mysqli_close($conexao);