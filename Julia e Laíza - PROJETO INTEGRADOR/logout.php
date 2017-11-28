<?php

//inicia a sessão
session_start();

//destroi a sessao
session_destroy();

//redireciona para a página do formulário de login em zero segundos
echo('<meta http-equiv="refresh" content="0;url=deslogado.php">');