<?php
$titulo = $_POST["titulo"];
$foto = $_POST["foto"];
$categoria = $_POST["categoria"];
$video = $_POST["video"];

// conexão com banco de dados
include "conexao.php";

// sql de inserção
$sql_inserir_filme = "insert into filme (titulo, foto, categoria, video) values ('$titulo' , '$foto' , '$categoria', '$video')";

// executar o sql no BD
$um_filme = mysqli_query($conexao, $sql_inserir_filme);

// fechar a conexão
mysqli_close($conexao);

header("location:cadastrar-novo-filme.php?msg=sucesso");

?>