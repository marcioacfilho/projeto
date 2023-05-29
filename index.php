<?php
include "cabecalho.php";
include "menu.php";
?>

<div class="banner container-fluid bnner">
  <div id="carouselExample" class="carousel slide carousel-fade">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/banner10.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/banner11.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/banner12.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

<div class="container mt-5">
  <div class="row">
    <div class="col-12 text-center">
      <h1>SÉRIES E FILMES ILIMITADOS</h1>
    </div>
    <div class="col-12 text-center">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem omnis dolorum voluptates ea consequatur magnam, labore voluptas repellat quidem voluptatem, mollitia eaque aut iure nesciunt, at architecto distinctio. Error, consequuntur?</p>
    </div>
  </div>
  <div class="row">
    <!-- <div class="col-3 text-center">
      <img src="img/jogo04.jpg" class="img-fluid">
      <h3>Nome do jogo</h3>
      <a href="nomedojogo.php" class="btn btn-primary">VER MAIS</a>
    </div>

    <div class="col-3 text-center">
      <img src="img/jogo12.jpg" class="img-fluid">
      <h3>Nome do jogo</h3>
      <a href="nomedojogo.php" class="btn btn-primary">VER MAIS</a>
    </div>

    <div class="col-3 text-center">
      <img src="img/jogo15.jpg" class="img-fluid">
      <h3>Nome do jogo</h3>
      <a href="nomedojogo.php" class="btn btn-primary">VER MAIS</a>
    </div>  -->

    <?php
    include "conexao.php";

    $sql_buscar = "select * from jogo";

    $todos_os_jogos = mysqli_query($conexao, $sql_buscar);

    while ($um_jogo = mysqli_fetch_assoc($todos_os_jogos)) :
    ?>

      <!--<div class="col mt-3 card bg-dark text-white">-->
      <div class="col-md-3 text-center mb-4">
        <img src="<?php echo $um_jogo["foto"]; ?>" class="img-fluid" style="object-fit: cover; height: 150px; width: 100%; object-position: top center;">
        <h6 class="mt-3 mb-3" style="color:<?php echo $cor; ?>"><?php echo $um_jogo["categoria"]; ?></h6>
        <?php
        $cor = "";
        if (strtoupper($um_jogo["categoria"]) == "JOGO DE FPS") {
          $cor = "red";
        } else if (strtoupper($um_jogo["categoria"]) == "JOGO DE LUTA") {
          $cor = "orange";
        } else if (strtoupper($um_jogo["categoria"]) == "JOGO DE HISTORIA") {
          $cor = "green";
        }
        ?>
        <h5 class="mt-3 mb-3"><?php echo $um_jogo["titulo"]; ?></h5>
        <a href="<?php echo $um_jogo["video"]; ?>" class="btn btn-danger">VER MAIS</a>
      </div>
    <?php
    endwhile;
    mysqli_close($conexao);
    ?>

  </div>
  <div class="row mt-5">
    <div class="col-12 text-center">
      <h2>Quer assistir? Informe seu email para criar ou reiniciar sua assinatura.</h2>
    </div>
    <form>
  <div class="form-group col-md-4">
    <label for="exampleInputEmail1">E-mail</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <br>
  <button type="submit" class="btn btn-danger">Enviar > </button>
</form>
    

  </div>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>