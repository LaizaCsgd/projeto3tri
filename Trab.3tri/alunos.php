<?php

	function listaAlunos(){
		$alunos = array();
		$dados = file("dados/alunos.csv");

		foreach ($dados as $posicao => $linha) {
			if($posicao!=0){
				$colunas = explode("," , $linha);

				$aluno = array();
				$aluno['matricula'] = $colunas[0];
				$aluno['nome']= $colunas[1];
				$aluno['turma'] = $colunas[2];
				$aluno['email'] = $colunas[3];
				$aluno['foto'] = $colunas[4];
				$alunos[]=$aluno;
			}
		}
		return $alunos;
	}

	$teste = listaAlunos();

	print_r($teste);