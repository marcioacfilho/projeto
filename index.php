<?php
include "cabecalho.php";
include "menu.php";
?>

<div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner" style="width: 100%; height: 500px" >
    <div class="carousel-item active" data-bs-interval="5000">
      <img src="img/img1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/img2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/img3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/img4.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/img5.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container mt-5">
  <div class="row">
    <div class="col-12 text-center">
      <h1>SÉRIES E FILMES ILIMITADOS</h1>
    </div>
    <div class="col-12 text-center">
      <p>Bem-vindo ao nosso site de vídeos de filmes e séries! Aqui, você encontrará uma vasta coleção de conteúdo de entretenimento para desfrutar e mergulhar em histórias emocionantes.</p>
    </div>
  </div>
  <div class="row">

    <?php
    include "conexao.php";

    $sql_buscar = "select * from filme";

    $todos_os_filmes = mysqli_query($conexao, $sql_buscar);

    while ($um_filme = mysqli_fetch_assoc($todos_os_filmes)) :
    ?>

      <!--<div class="col mt-3 card bg-dark text-white">-->
      <div class="col-md-3 text-center mb-4">
        <img src="<?php echo $um_filme["foto"]; ?>" data-video="<?php echo $um_filme["video"]; ?>" onclick="handleClick(this);" class="video-thumbnail" alt="<?php echo $um_filme["titulo"]; ?>">
        <h6 class="mt-3 mb-3" style="color:<?php echo $cor; ?>"><?php echo $um_filme["categoria"]; ?></h6>
        <?php
        $cor = "";
        if (strtoupper($um_filme["categoria"]) == "") {
          $cor = "red";
        } else if (strtoupper($um_filme["categoria"]) == "") {
          $cor = "orange";
        } else if (strtoupper($um_filme["categoria"]) == "") {
          $cor = "green";
        }
        ?>
        <h5 class="mt-3 mb-3"><?php echo $um_filme["titulo"]; ?></h5>
      </div>

    <?php
    endwhile;
    mysqli_close($conexao);
    ?>

  <!-- Modal -->
  <div id="videoModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <iframe id="videoFrame" width="100%" height="400" src="" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>

<script>
  	// Função para adicionar a classe "clicked" ao clicar na imagem
	function handleClick(element) {
	  element.classList.toggle('clicked');
	}
	
    // Referências aos elementos do DOM
    const videoThumbnails = document.querySelectorAll('.video-thumbnail');
    const videoModal = document.getElementById('videoModal');
    const videoFrame = document.getElementById('videoFrame');
    const closeBtn = document.querySelector('.close');

    // URL do vídeo do YouTube
    const videoUrl = "https://www.youtube.com/embed/";

    // Função para abrir o modal e carregar o vídeo
    function openModal(videoId) {
      videoFrame.src = videoUrl + videoId;
      videoModal.style.display = 'block';
    }

    // Função para fechar o modal
    function closeModal() {
      videoFrame.src = '';
      videoModal.style.display = 'none';
    }

    // Evento de clique nas imagens para abrir o modal
    videoThumbnails.forEach(function(thumbnail) {
      thumbnail.addEventListener('click', function() {
        const videoId = this.getAttribute('data-video');
        openModal(videoId);
      });
    });

    // Evento de clique no botão para fechar o modal
    closeBtn.addEventListener('click', closeModal);

    // Evento de clique fora do modal para fechá-lo
    window.addEventListener('click', function(event) {
      if (event.target == videoModal) {
        closeModal();
      }
    });
  </script>

  </div>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<div class="rodape">

<h6>Esperamos que você aproveite ao máximo nossa plataforma e descubra novos filmes e séries que o cativarão. <br>Seja bem-vindo ao nosso site de vídeos de filmes e séries, seu destino definitivo para o melhor do entretenimento audiovisual. Divirta-se!</h6>
<br>
<p>© 2023 - MRFlix - Todos os direitos reservados</p>
<div class="redes-sociais">
  <a href="#" rel="noopener noreferrer">
    <img src="img/facebook_icon.png" alt="Facebook">
  </a>
  <a href="#" rel="noopener noreferrer">
    <img src="img/instagram_icon.png" alt="Instagram">
  </a>
  <a href="#" rel="noopener noreferrer">
    <img src="img/twitter_icon.png" alt="Twitter">
  </a>
</div>

</div>
</body>

</html>