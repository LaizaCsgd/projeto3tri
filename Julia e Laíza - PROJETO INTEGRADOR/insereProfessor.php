<?php
include('cabecalho.php');

if (isset($_SESSION['login'])) {
//mover o arquivo rcebido para o destino esperado

$origem=$_FILES['foto']['tmp_name'];

$partesNome=explode(' ',$_POST['nome']);
$primeiroNome=$partesNome[0];
$sobrenome=end($partesNome);

$nomeArquivo=$primeiroNome.'.'.$sobrenome;
$extensao=explode('/', $_FILES['foto']['type']);

$destino='imagens/professores/'.$nomeArquivo.'.'.$extensao[1];

move_uploaded_file($origem,$destino);
////////////////////////////////////////////

//gravar os demais no csv
$siape=$_POST['siape'];
$nome=$_POST['nome'];
$email=$_POST['email'];
$disciplina=$_POST['disciplina'];
$foto=$destino;

	$linha="\n".$siape.",".$nome.",".$email.",".$disciplina.",".$destino;

	$arquivo=fopen("dados/professores.csv", "a+");

	fwrite($arquivo, $linha);
	fclose($arquivo);
	echo ("<meta http-equiv='refresh' content='0;url=listaProfessores.php'> ");

}else{
	?>
	<h2>Acesso negado</h2>
<?php
}

include('rodape.php');
?>