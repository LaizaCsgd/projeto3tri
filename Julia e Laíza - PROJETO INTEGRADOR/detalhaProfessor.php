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
		<div class="fechar"><img src="imagens/fechar2.png"></div>
		<img id="imagem" src="<?=$professor['foto'] ?>">
		</div>
	</div>

	<section class="dados">
		<h2><?=$professor['nome']?></h2>
		<?=$professor['disciplina']?>
		<br>
		<br>
		<?=$professor['email']?>
	</section>
<?php
	include("rodape.php")
?>