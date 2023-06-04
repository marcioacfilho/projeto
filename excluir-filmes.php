<?php
$id = $_GET["id"];

include "conexao.php";

$sql_excluir_filme = "delete from filme where id = $id";

$um_excluido = mysqli_query($conexao, $sql_excluir_filme);

mysqli_close($conexao);

header("location:listar-filmes.php?msg=excluido");
?>