<?php
$id = $_GET["id"];
$titulo = $_POST["titulo"];
$foto = $_POST["foto"];
$video = $_POST["video"];
$categoria = $_POST["categoria"];

include "conexao.php";

// sql de inserção
$sql_editar_filme = "update filme set titulo='$titulo', foto='$foto' , video = '$video' , categoria = '$categoria' where id = $id ";

// executar o sql no BD
$um_filme = mysqli_query($conexao, $sql_editar_filme);

// fechar a conexão
mysqli_close($conexao);

header("location:listar-filmes.php?msg=sucesso");

?>