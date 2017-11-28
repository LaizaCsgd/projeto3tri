<?php 
//login.php

	//INICIA A SESSÃO
	session_start();

//capturando os dados enviados por POST
	$login = $_POST['login'];
	$senha = $_POST['senha'];

//admin - admin

	if($login=='admin' and $senha=='admin'){
		
		//logou como administrador e acertou a senha
		echo("Olá administrador");

		//guardando informações na sessão
		$_SESSION['nome'] = "Administrador";
		$_SESSION['login'] = "admin";

		//redireciona para a pagina do administrador
		echo('<meta http-equiv="refresh" content="0;url=restrito_adm.php">');

	}else{
		echo("Dados Inválidos");

		//redireciona para a pagina inicial
		echo('<meta http-equiv="refresh" content="0;url=publica.php">');
	}


 ?>