<?php
include "cabecalho.php";
include "listaJogos.php";
$arrayJogos = listaJogos();
if (isset($_GET['id'])) {
  $idJogo = $_GET['id'];
  foreach ($arrayJogos as $jogo) {
    if ($jogo['id']==$idJogo) {
      $jogo_encontrado = $jogo;
    }
  }
}

?>
<h1 class="jogos"><?=$jogo_encontrado['titulo'] ?></h1>
<img class="imagem" src="fotos/<?= $jogo_encontrado['foto']?>">
<section id="jogos">
  <h1 class="text3"><?=$jogo_encontrado['resenha'] ?></h1>
  <section>

    <?php

    if(isset($_GET['cont'])){

      if($_GET['cont']==0 ) {
        ?>
        <a href="detalhaJogo.php?cont=1&id=<?=$idJogo?>">
        <div class='ui labeled button' tabindex='0'>
          <div class='ui labeled button' tabindex='0'>
            <div class='ui red button'>
              <i class='heart icon'></i> Like
            </div>
            <a class='ui basic red left pointing label'>
              1,048
            </a>
          </div>
        </div>ㅤ  ㅤ  ㅤ  ㅤ  ㅤ  ㅤ  ㅤ  ㅤ  ㅤ  ㅤ  ㅤ  ㅤ  ㅤ  ㅤ
        </a>
        <?php }else{ ?>
        <a href="detalhaJogo.php?cont=0&id=<?=$idJogo?>">

        <div class='ui labeled button' tabindex='0'>
          <div class='ui blue button'>
          <i class='thumbs down outline icon'></i> Descurtir
          </div>
          <a class='ui basic blue left pointing label'>1,049</a>
        </div>  ㅤ  ㅤ  ㅤ  ㅤ  ㅤ  ㅤ  ㅤ  ㅤ  ㅤ  ㅤ  ㅤ  ㅤ  ㅤ  ㅤ
        </a>
        <?php
      }
    }else{
      $_GET['cont']=0;
    }

    ?>

    <div class="ui star rating" data-rating="4"></div>
    ㅤㅤㅤㅤㅤㅤㅤㅤ
    <a class="ui label">
      <strong> ㅤAutor:</strong> ㅤ <?=$jogo_encontrado['autor'] ?>
    </a>
    <br>
    ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ
    <a href="denuncia.php"><i class="exclamation triangle icon"></i>Denunciar</a>
  </section>



  <br>

  <?php
  echo"<br> <div class='direita'></div> </div>";
  include 'comentario.php';
  ?>

  <?php
  include"rodape.php";
  ?>