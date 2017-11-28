<?php 
session_start();

include('cabecalho.php');

if (isset($_SESSION['login'])) {

?>

</<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="insereAluno.php" enctype="multipart/form-data">

	<label for="matricula">Matricula</label>
	<input type="text" name="matricula">
		
	<label for="nome">Nome</label>
	<input type="text" name="nome">

	<label for="turma">turma</label>
	<input type="turma" name="turma">

	<label for="email">E-mail</label>
	<input type="text" name="email">

	<label for="foto">Foto</label>
	<input type="file" name="foto">

	<input type="submit" name="cadastrar">

	</form>
</body>
</html>



<?php	

}else{
	?>
	<h2>Acesso negado</h2>
<?php
}
?>