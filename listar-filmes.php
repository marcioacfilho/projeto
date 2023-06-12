<?php
include "cabecalho.php";
include "menu-sistema.php";
?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Lista de Filmes</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-dark table-sm">
                <tr>
                    <td>Códigos</td>
                    <td>Título</td>
                    <td>Categorias</td>
                    <td>Ações</td>
                </tr>
                <?php
                include "conexao.php";
                $sql_buscar = "select * from filme";
                $todos_os_filmes = mysqli_query($conexao, $sql_buscar);
                while ($um_filme = mysqli_fetch_assoc($todos_os_filmes)) :
                ?>
                    <tr>
                        <td> <?php echo $um_filme["id"]; ?> </td>
                        <td> <?php echo $um_filme["titulo"]; ?> </td>
                        <td> <?php echo $um_filme["categoria"]; ?> </td>
                        <td>
                            <a href="excluir-filmes.php?id=<?php echo $um_filme["id"]; ?>">
                                <img src="img/excluir.png" width="20">
                            </a>
                            <a href="ver-filme.php?id=<?php echo $um_filme["id"]; ?>">VER</a>
                            <a href="editar-filme.php?id=<?php echo $um_filme["id"]; ?>">EDITAR</a>
                        </td>
                    </tr>
                    
                <?php
                endwhile;
                mysqli_close($conexao);
                ?>
                <form action="cadastrar-novo-filme.php" method="post" class="d-flex">
                <button type="submit" class="btn btn-success w-25">CADASTRAR NOVO FILME</button>
                </form>
            </table>
        </div>
    </div>
</div>