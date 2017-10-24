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


	<section class="foto">
		<img src="<?=$professor['foto'] ?>">
	</section>

	<section class="dados">
		<h2><?=$professor['nome']?></h2>
			<h3><?=$professor['email']?></h3>
			<h3>Disciplinas: </h3>
			<h3>Sala: </h3>
	</section>


<?php

	include("rodape.php")

?>