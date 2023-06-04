<?php
include "cabecalho.php";
include "menu-sistema.php";

$id = $_GET["id"];
$titulo = $categoria = $foto = $video = "";
include "conexao.php";
$sql_buscar = "select * from jogo where id = $id";
$todos_os_filmes = mysqli_query($conexao, $sql_buscar);
while($um_filme = mysqli_fetch_assoc($todos_os_filmes)):
    $titulo = $um_filme["titulo"];
    $categoria = $um_filme["categoria"];
    $video = $um_filme["video"];
    $foto = $um_filme["foto"];
endwhile;
mysqli_close($conexao);
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h6>Detalhe do filme Cód.: <?php echo $id;?> </h6>
        </div>
        <div class="col-12">
            <h3>Título: <?php echo $titulo;?> </h3>
            <p><img src="<?php echo $foto;?>" width="300"></p>
            <p>Categoria: <?php echo $categoria;?> </p>
            <p><a href="<?php echo $video;?>">Ver o vídeo</a></p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>