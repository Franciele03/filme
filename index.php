<?php
include "cabecalho.php";
include "banner.php";
?>
<div class="container">
    <h2 class="display-5">Melhores avaliações</h2>
 
    <div class="row mb-5">
        <?php
        /* inicio da conexão com BD */
        $servidor = 'localhost';
        $bd = 'bd_filmes';
        $usuario = 'root';
        $senha = '';
 
        $conexao = mysqli_connect($servidor, $usuario, $senha, $bd);
 
        if(!$conexao){
            die("deu ruim" . mysqli_connect_error());
        }
 
        /* Fim da conexão com o DB */
 
        $sql = "select * from filmes";
        $resultado = mysqli_query($conexao, $sql);
       // echo "<pre>";
       // print_r($resultado);
        //echo "parou aqui";
        //exit();
        //echo "nem chegou aqui";
        while($linha = mysqli_fetch_assoc($resultado)){
          ?>
        <div class="col-3">
            <img src="<?=$linha['foto'];?>" class="img-fluid">
            <h3><?=$linha['titulo'];?></h3>
            <h3><?=$linha['categoria'];?></h3>
            <h3 span>⭐ 10/</span><?=$linha['avaliacao'];?></h3>
        </div>
        <?php
      }
 
        ?>
       
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
<button type="button" class="btn btn-warning btn-lg mt-5 fs-5 fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Precisa de ajuda? Clique aqui!
</button>
 
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Ajuda 💭</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <p>entrem em contato Atraves dos nossos canais de comunicação</p>
         <p>E-mail: suportefilmes@gmail.com <br> Whatsapp: (11)707052147 <br><a href="contato.php">Formulário de contato</a></p>
      </div>
    </div>
  </div>
</div>
 
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg mt-5 fs-5 fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal2">
  Venha conhecer nosso site
</button>
 
<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModal2Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModal2Label">Sobre o site 🎬</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <p>Descubra, explore e acompanhe os melhores filmes de todos os gêneros em um só lugar. No CineTime, você encontra sinopses, trailers, elenco, avaliações e todas as informações que precisa para escolher o próximo filme da sua lista. Dos clássicos do cinema às últimas estreias, nossa plataforma foi feita para apaixonados por filmes como você!</p>
         <a href="listadenoticias.php">Formulario de Informações</a></p>
      </div>
    </div>
  </div>
</div>
</div>
<?php include "rodape.php"; ?>
 