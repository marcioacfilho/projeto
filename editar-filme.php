<?php
include "cabecalho.php";
include "menu-sistema.php";

$id = $_GET["id"];
$titulo = $categoria = $foto = $video = "";
include "conexao.php";
$sql_buscar = "select * from filme where id = $id";
$todos_os_filmes = mysqli_query($conexao, $sql_buscar);
while ($um_filme = mysqli_fetch_assoc($todos_os_filmes)) :
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
            <h6>Editar Filme Cód.: <?php echo $id; ?> </h6>
        </div>
        <div class="col-5">
            <form action="salvar-filme-editado.php?id=<?php echo $id; ?>" method="post">
                <span style="color: white; padding: 20px;">Título:</span> <input style="margin: -10px 0 10px 0;" name="titulo" value="<?php echo $titulo; ?>"><br>
                <span style="color: white; padding: 20px;">Foto:</span> <input style="margin: -10px 0 10px 0;" name="foto" value="<?php echo $foto; ?>"><br>
                <span style="color: white; padding: 20px;">Categoria:</span> <input style="margin: -10px 0 10px 0;" name="categoria" value="<?php echo $categoria; ?>"><br>
                <span style="color: white; padding: 20px;">Video:</span><input style="margin: -10px 0 10px 0;" name="video" value="<?php echo $video ?>"><br>
                <button type="submit" class="btn btn-success mt-3">Salvar</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>