<?php
	include("cabecalho.php");
	include("professores.php");

	//recupera o cod enviado via metodo GET
	$siape = $_GET['cod'];
	//chama função, passando o codigo do professor
	$professor = buscaProfessor($siape);
?>
	<!-- colunas para centralizar -->
	<div class="coluna10">.</div>
	<!-- conteudo principal -->
	<article class="coluna80">

	<div class="clicavel foto" id="foto1">
		<img src="<?=$professor['foto'] ?>">
	</div>
	<div class="modal escondido">
		<div  class="conteudo">
		<div class="fechar"><img src="imagens/fechar.png"></div>
		<img id="imagem" src="<?=$professor['foto'] ?>">
		</div>
	</div>

	<section class="dados">
		<h2><?=$professor['nome']?></h2>
		<h3><?=$professor['disciplina']?></h3>
		<h3><?=$professor['email']?></h3>
	</section>
<?php
	include("rodape.php")

	//opção sem jquery a partir da coluna80 até section dados
	/*<section class="foto">
		<img src="<?=$professor['foto'] ?>">
	</section>*/
?>