<?php

	include("cabecalho.php");

	include("professores.php");

	//recupera o cod enviado via metodo GET
	$siape = $_GET['cod'];

	//chama função, passando o codigo do professor
	$professor = buscaProfessor($siape);
?>

	<div>
		<img src="<?=$professor['foto']?>">
		<h2><?=$professor['nome']?></h2>
		<p><?=$professor['email']?></p>
		
	</div>

	




<?php



	include("rodape.php")

?>