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

<?php

	
	include("professores.php");
	//a função retorna um array contendo os professores
	$lista = buscaProfessor($siape);

	

		print('

			<section class="foto">
				<img src="imagens/pessoa.png">
			</section>

			<section class="dados">
				<p>Nome: '.$lista["nome"].'</p>
				<p>Email: '.$lista["email"].'</p>
				<p>Disciplinas: Fundamento de Informática</p>
				<p>Sala: B7</p>

			</section>
	


			');
	

?>


<?php

	include("rodape.php")

?>