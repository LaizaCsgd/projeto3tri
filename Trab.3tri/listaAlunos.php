<?php
	
	include("cabecalho.php");


	include("alunos.php");
	//a função retorna um array contendo os professores
	$lista = listaProfessores();

	foreach ($lista as $professor) {

		print('<div class="professor">');
		print('<img src="'.$professor['foto'].'">');
		print('<a href="detalhaProfessor.php?cod='. $professor['siape'].'">'.$professor['nome'].'</a>');
		print('</div>');
		
	}







	include("rodape.php");

?>