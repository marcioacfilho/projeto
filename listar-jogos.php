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
                $sql_buscar = "select * from jogo";
                $todos_os_jogos = mysqli_query($conexao, $sql_buscar);
                while ($um_jogo = mysqli_fetch_assoc($todos_os_jogos)) :
                ?>
                    <tr>
                        <td> <?php echo $um_jogo["id"]; ?> </td>
                        <td> <?php echo $um_jogo["titulo"]; ?> </td>
                        <td> <?php echo $um_jogo["categoria"]; ?> </td>
                        <td>
                            <a href="excluir-jogos.php?id=<?php echo $um_jogo["id"]; ?>">
                                <img src="img/excluir.png" width="20">
                            </a>
                            <a href="ver-jogo.php?id=<?php echo $um_jogo["id"]; ?>">VER</a>
                            <a href="editar-jogo.php?id=<?php echo $um_jogo["id"]; ?>">EDITAR</a>
                        </td>
                    </tr>
                    
                <?php
                endwhile;
                mysqli_close($conexao);
                ?>
                <div>
                <button type="submit" class="btn btn-success w-25">CADASTRAR NOVO FILME</button>
                </div>
            </table>
        </div>
    </div>
</div>