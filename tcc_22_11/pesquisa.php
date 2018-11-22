
<?php
include("cabecalho.php");
include("funcoes.php");

$arrayJogos = listaJogos();
$contador = 0;
foreach ($arrayJogos as $jogo){
		$pesquisa=$_POST['pesquisa'];
		$pesquisou=pesquisa($pesquisa);
			if ($jogo['titulo']==$pesquisou["nome"]) {
				?>
				<a href="detalhaJogo.php?cont=0&id=<?=$jogo['id'] ?>"> <?=$pesquisou["nome"]?></a>
				<?php
				exit();
			}else{

		}
}
?>




