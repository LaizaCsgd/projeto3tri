<?php
//mover o arquivo rcebido para o destino esperado
$origem=$_FILES['foto']['tmp_name'];

$partesNome=explode(' ',$_POST['nome']);
$primeiroNome=$partesNome[0];
$sobrenome=end($partesNome);

$nomeArquivo=$primeiroNome.'.'.$sobrenome;
$extensao=explode('/', $_FILES['foto']['type']);

$destino='imagens/alunos/'.$nomeArquivo.'.'.$extensao[1];

move_uploaded_file($origem,$destino);
////////////////////////////////////////////


	//gravar os demais no csv
$matricula=$_POST['matricula'];
$nome=$_POST['nome'];
$turma=$_POST['turma'];
$email=$_POST['email'];
$foto=$destino;

	$linha="\n".$matricula.",".$nome.",".$turma.",".$email.",".$destino;

	$arquivo=fopen("dados/alunos.csv", "a+");

	fwrite($arquivo, $linha);
	fclose($arquivo);
	echo ("<meta http-equiv='refresh' content='0;url=listaAlunos.php'> ");

?>