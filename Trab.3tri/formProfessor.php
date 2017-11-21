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
	<H2>Inserção de novos professores</H2>

	<form method="post" action="insereProfessor.php" enctype="multipart/form-data">
		<label for="siape">SIAPE</label>
		<input type="text" name="siape">
		<br>
		<label for="nome">Nome</label>
		<input type="text" name="nome">
		<br>
		<label for="email">Email</label>
		<input type="text" name="email">
		<br>
		<label for="disciplina">Disciplina</label>
		<input type="text" name="disciplina">
		<br>
		<label for="foto">Foto</label>
		<input type="file" name="foto">
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