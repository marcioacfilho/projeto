<?php
include "cabecalho.php";
include "menu.php";
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Cadastrar novo filme</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form method="post" action="salvar-filme.php">
                
                <input name="titulo" required placeholder="titulo"><br>
                <input name="foto" required placeholder="foto"><br>
                <input name="categoria" required placeholder="categoria"><br>
                <input name="video" required placeholder="video"><br>

                <button type="submit" class="btn btn-success mt-3">salvar filme</button>


                <div class="row">
                    <div class="col">
                        <?php
                        $mensagem = $_GET["msg"] ?? "";
                        if ($mensagem == "sucesso") {
                            echo "<div class='alert alert-success col-3 mt-3' role='alert'> Filme cadastrado com sucesso!</div> ";
                        }
                        ?>
                    </div>
                </div>

            </form>

        </div>

    </div>
</div>