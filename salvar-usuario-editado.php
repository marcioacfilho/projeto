<?php
$id = $_GET["id"];
$nome = $_POST["nome"];
$email = $_POST["email"];


include "conexao.php";

// sql de inserção
$sql_editar_usuario = "update usuario set nome='$nome', email='$email' where id = $id ";

// executar o sql no BD
$um_usuario = mysqli_query($conexao, $sql_editar_usuario);

// fechar a conexão
mysqli_close($conexao);

header("location:listar-usuarios.php?msg=sucesso");

?>