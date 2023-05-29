<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

// conexão com banco de dados
include "conexao.php";

// sql de inserção
$sql_inserir_usuario = "insert into usuario (nome, email, senha) values ('$nome' , '$email' ,'" . md5($senha) ."')";

// executar o sql no BD
$um_usuario = mysqli_query($conexao, $sql_inserir_usuario);

// fechar a conexão
mysqli_close($conexao);

header("location:novo-usuario.php?msg=sucesso");

?>