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
	include("alunos.php");
	//a função retorna um array contendo os professores
	$lista = listaAlunosTurma('1info1');

	foreach ($lista as $aluno) {
	print('<li><a href="detalhaAluno.php?cod='. $aluno['matricula'].'">'.$aluno['nome'].'</a> - '.$aluno['email'].'</li>');
	}

?>
		</ul>
		</section>

		<section class="lista">
		<h3>1info2</h3>
		<ul>
<?php
	$lista = listaAlunosTurma('1info2');

	foreach ($lista as $aluno) {
	print('<li><a href="detalhaAluno.php?cod='. $aluno['matricula'].'">'.$aluno['nome'].'</a> - '.$aluno['email'].'</li>');
	}
?>
	</ul>
	</section>

	<section class="lista">
	<h3>1info3</h3>
	<ul>
<?php
	$lista = listaAlunosTurma('1info3');

	foreach ($lista as $aluno) {
	print('<li><a href="detalhaAluno.php?cod='. $aluno['matricula'].'">'.$aluno['nome'].'</a> - '.$aluno['email'].'</li>');
	}
?>
	</ul>
	</section>
	</article>
<?php
	include("rodape.php");
?>