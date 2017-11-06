<?php

	include("cabecalho.php");

	include("alunos.php");

	//recupera o cod enviado via metodo GET
	$matricula = $_GET['cod'];


	//chama função, passando o codigo do professor
	$aluno = buscaAluno($matricula);
	
?>
	<!-- colunas para centralizar -->
	<div class="coluna10">.</div>

	<!-- conteudo principal -->
	<article class="coluna80">


	<div class="clicavel foto" id="foto1">
		<img src="<?=$aluno['foto'] ?>">
	</div>
	<div class="modal escondido">
		<div  class="conteudo">
		<div class="fechar"><img src="imagens/fechar.png"></div>
			<img src="<?=$aluno['foto'] ?>">
		</div>
	</div>

	<section class="dados">
		<h2><?=$aluno['nome']?></h2>
		<h3><?=$aluno['email']?></h3>
	</section>


<?php
	include("rodape.php")

?>
