<?php
include "cabecalho.php";
include "banner.php";
?>
<div class="container">
    <h2 class="display-5">Melhores avaliações</h2>
 
    <div class="row mb-5">
        <?php
        /*inicio de conexão com BD*/
        $servidor = 'localhost';
        $bd = 'bd_filmes';
        $usuario = 'root';
        $senha = '';

        $conexao = mysqli_connect($servidor, $usuario, $senha, $bd);
        if(!$conexao){
            die("deu ruim" . mysqli_connect_error());
        }

        echo "deu bom"
        ?>

        <div class="col-3">
            <img src="img/filme1.webp" class="img-fluid">
            <h3>Jurassic Park</h3>
            <span>⭐ 10/10</span>
        </div>
        
    </div>
 
    <div class="row mt-5">
        <div class="col-6">
          <img src="img/banner.jpg" class="img-fluid">
        </div>
        <div class="col-6 align-content-center">
            <p class="fs-5 fw-light">Presos em uma armadilha motal, uma equipe nada convencional de anti-heróis embarca em uma missão perigosa que os força a confrontar os cantos mais sombrios de suas vidas</p>
            <a href="https://www.youtube.com/watch?v=Maly0D2FTDc" class="btn btn-success btn-lg">ASSISTA AO TRAILER AGORA</a>
        </div>
    </div>
 
    <div class="row mt-5">
       
        <div class="col-6 align-content-center">
            <p class="fs-5 fw-light">Presos em uma armadilha motal, uma equipe nada convencional de anti-heróis embarca em uma missão perigosa que os força a confrontar os cantos mais sombrios de suas vidas</p>
            <a href="https://www.youtube.com/watch?v=Maly0D2FTDc" class="btn btn-success btn-lg">ASSISTA AO TRAILER AGORA</a>
        </div>
        <div class="col-6">
          <img src="img/banner.jpg" class="img-fluid">
        </div>
    </div>


    <!-- Button trigger modal -->
<button type="button" class="btn btn-warning bt-lg mt-5 fs-5 fw-bold text-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Precisa de Ajuda? Clique aqui!
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Ajuda 📣</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>entrem em contato através dos nossos canais de comunicação</p>
        <p>E-mail: suportefilmes@gmail.com <br> WhatsApp: (11)707052147 <br><a href="contato.php">Formulário</a></p>
      </div>
      
    </div>
  </div>
</div>



<!-- Modal de avaliação -->
<div class="modal fade" id="avaliarFilmeModal" tabindex="-1" aria-labelledby="avaliarFilmeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="avaliarFilmeModalLabel">Avalie um Filme 🎬</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
        <form action="avaliar.php" method="POST">
          <div class="mb-3">
            <label for="filme" class="form-label">Nome do Filme</label>
            <input type="text" class="form-control" id="filme" name="filme" required>
          </div>
          <div class="mb-3">
            <label for="nota" class="form-label">Nota (0 a 10)</label>
            <input type="number" class="form-control" id="nota" name="nota" min="0" max="10" step="0.1" required>
          </div>
          <div class="mb-3">
            <label for="comentario" class="form-label">Comentário</label>
            <textarea class="form-control" id="comentario" name="comentario" rows="3" placeholder="Conte o que achou do filme..."></textarea>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Enviar Avaliação</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="meuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Ajuda 📣</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>entrem em contato através dos nossos canais de comunicação</p>
        <p>E-mail: suportefilmes@gmail.com <br> WhatsApp: (11)707052147 <br><a href="contato.php">Formulário</a></p>
      </div>
      
    </div>
  </div>
</div>

<!-- Botão para abrir o modal -->
<button type="button" class="btn btn-warning bt-lg mt-5 fs-5 fw-bold text-bold" data-bs-toggle="modal" data-bs-target="#avaliarFilmeModal">
  Quero avaliar um filme
</button>


</div>
<?php include "rodape.php"; ?>