<?php
	include("cabecalho.php");
?>

	<div class="coluna10">.</div>
	<!-- conteudo principal -->
	<article class="coluna80">
		<section class="lista">
		<h3>1info1</h3>
			<ul>

<?php
	include("disciplinas.php");
	//a função retorna um array contendo os professores
	$lista = listaOfertaTurma(2017,'1info1');

	foreach ($lista as $oferta) {

		if ($oferta[1] == '1info1') {
			print('<li>'. $oferta['cod_disciplina'].$oferta['cod_professor'].'</li>');
		}
	
	}

?>
		</ul>
		</section>

		<section class="lista">
		<h3>1info2</h3>
			<ul>
<?php
	$lista = listaOfertaTurma(2017,'1info2');

	foreach ($lista as $oferta) {
		
		if ($oferta[1] == '1info2') {
			print('<li>'. $oferta['cod_disciplina'].$oferta['cod_professor'].'</li>');
		}
	
	}
?>
	</ul>
	</section>


	<section class="lista">
	<h3>1info3</h3>
			<ul>
<?php

	$lista = listaOfertaTurma(2017,'1info3');

	foreach ($lista as $oferta) {
		
		if ($oferta[1] == '1info3') {
			print('<li>'. $oferta['cod_disciplina'].$oferta['cod_professor'].'</li>');
		}
	
	}
?>

	</ul>
		</section>
	</article>

<?php
	include("rodape.php");
?>