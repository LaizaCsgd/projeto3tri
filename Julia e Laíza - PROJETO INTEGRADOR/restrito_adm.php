<?php

include("cabecalho.php");


	session_start();

if($_SESSION['login'] =='admin' ){//se passou pelo login



?>


<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
</head>
<body>
	<h2>A página do <?=$_SESSION['nome']?></h2>
	

	<a href="formProfessor.php">Inserir novo professor</a>
	<!-- devera abrir a pagina cadastro que devera ser restrita ao adm-->

	<br>
	
	<a href="formAlunos.php">Inserir novo aluno</a>
	<!-- devera abrir a pagina cadastro que devera ser restrita ao adm-->
	
	<p>Nesta página você irá administrar as configurações do sistema...</p>

</body>
</html>
<?php

include("rodape.php");
?>

<?php

}else{
	echo('<meta http-equiv="refresh" content="0;url=deslogado.php">');
}

?>