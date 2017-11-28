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
	<section class="esquerda">.</section>
	<section class="centro"><h1 class="central">VOCÊ JÁ ESTÁ CONECTADO</h1></section>
	<section class="direita">.</section>
</body>
</html>
<?php

include("rodape.php");

}else{

?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<section class="esquerda">.</section>
	<section class="centro"><h1 class="central">SE CONECTE PARA TER ACESSO</h1></section>
	<section class="direita">.</section>
</body>
</html>





<?php
}

?>