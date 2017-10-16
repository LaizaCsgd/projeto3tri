<?php

	include("cabecalho.php");

	include("professores.php");

	//recupera o cod enviado via metodo GET
	$siape = $_GET['cod'];

	//chama função
	$professor = buscaProfessor($siape);

	//exibe função
	print_r($professor);







	include("rodape.php");