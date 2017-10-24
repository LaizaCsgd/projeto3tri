<?php /*

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


	<section class="foto">
		<img src="<?=$aluno['foto'] ?>">
	</section>

	<section class="dados">
		<h2><?=$aluno['nome']?></h2>
			<h3><?=$aluno['email']?></h3>
			
	</section>


<?php

	include("rodape.php")

*/
?>

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


	<section class="foto">
		<img src="<?=$aluno['foto'] ?>">
	</section>

	<section class="dados">
		<h2><?=$aluno['nome']?></h2>
		<h3><?=$aluno['email']?></h3>
			
	</section>


<?php

	include("rodape.php")

?>
