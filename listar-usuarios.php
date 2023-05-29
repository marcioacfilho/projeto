<?php
include "cabecalho.php";
include "menu-sistema.php";
?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Lista de usuários</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-dark table-sm">
                <tr>
                    <td>Códigos</td>
                    <td>Nome</td>
                    <td>E-mail</td>
                    <td>Ações</td>
                </tr>
                <?php
                include "conexao.php";
                $sql_buscar = "select * from usuario";
                $todos_os_usuario = mysqli_query($conexao, $sql_buscar);
                while ($um_usuario = mysqli_fetch_assoc($todos_os_usuario)) :
                ?>
                    <tr>
                        <td> <?php echo $um_usuario["id"]; ?> </td>
                        <td> <?php echo $um_usuario["nome"]; ?> </td>
                        <td> <?php echo $um_usuario["email"]; ?> </td>
                        <td>Excluir usuário
                            <a href="excluir-usuario.php?id=<?php echo $um_usuario["id"]; ?>">
                                <img src="img/excluir.png" width="20">
                            </a>
                            <a href="ver-usuario.php?id=<?php echo $um_usuario["id"]; ?>">VER</a>
                            <a href="editar-usuario.php?id=<?php echo $um_usuario["id"]; ?>">EDITAR</a>
                        </td>
                        

                    </tr>
                <?php
                endwhile;
                mysqli_close($conexao);
                ?>
            </table>
        </div>
    </div>
</div>