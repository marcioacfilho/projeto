<?php
include "cabecalho.php";
include "menu-sistema.php";

$id = $_GET["id"];
$nome = $email = "";
include "conexao.php";
$sql_buscar = "select * from usuario where id = $id";
$todos_os_usuario = mysqli_query($conexao, $sql_buscar);
while ($um_usuario = mysqli_fetch_assoc($todos_os_usuario)) :
    $nome = $um_usuario["nome"];
    $email = $um_usuario["email"];
    
endwhile;
mysqli_close($conexao);
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h6>Editar usuario Cód.: <?php echo $id; ?> </h6>
        </div>
        <div class="col-12">
            <form action="salvar-usuario-editado.php?id=<?php echo $id; ?>" method="post">
                Nome: <input name="nome" value="<?php echo $nome; ?>">
                E-mail: <input name="email" value="<?php echo $email; ?>">
                
                <button type="submit">Salvar</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>