<?php

include("cabecalho.php");

	session_start();


//ISSET- está definida? Ela existe, tem valor?
	
if(	isset($_SESSION['login']) and $_SESSION['login'] == "admin" ){//se passou pelo login



?>

<!DOCTYPE html>
<html>
<head>
	<title>restrito adm</title>
</head>
<body>
	<H2>Inserção de novos Alunos</H2>

	<form method="post" action="insereAluno.php">
		<label for="matricula">Matricula</label>
		<input type="text" name="matricula">
		<br>
		<label for="nome">Nome</label>
		<input type="text" name="nome">
		<br>
		<label for="turma">Turma</label>
		<input type="text" name="turma">
		<br>
		<label for="email">Email</label>
		<input type="text" name="email">
		<br>
		<label for="foto">Foto</label>
		<input type="text" name="foto">
		<br>
		<input type="submit" value="gravar">
	</form>

</body>
</html>

<?php

include("rodape.php");

}else{
	echo('<meta http-equiv="refresh" content="0;url=deslogado.php">');
}

include("rodape.php");
?>