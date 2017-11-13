<?php
//contém funções para acesso e manipulação dos dados de alunos

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

	function buscaAluno($codigo){
		$aluno = array();

	//abrir arquivo
	$dados = file("dados/alunos.csv");

	//percorrer
	foreach ($dados as $linha) {
		$colunas = explode("," , $linha);
			if ($colunas[0]==$codigo){
				$aluno['matricula'] = $colunas[0];
				$aluno['nome'] = $colunas[1];
				$aluno['turma'] = $colunas[2];
				$aluno['email'] = $colunas[3];
				$aluno['foto'] = $colunas[4];
			}
		}
	return $aluno;
}

	function listaAlunosTurma($turma){
		$alunos = array();
		$dados = file("dados/alunos.csv");

		foreach ($dados as $posicao => $linha) {
			if($posicao!=0){
				$colunas = explode("," , $linha);
				$aluno = array();

				if($colunas[2] == $turma){
				//se linha aluno atual é da turma
				
					$aluno['matricula'] = $colunas[0];
					$aluno['nome']= $colunas[1];
					$aluno['turma'] = $colunas[2];
					$aluno['email'] = $colunas[3];
					$aluno['foto'] = $colunas[4];
					$alunos[]=$aluno;

				}
			}
		}
		return $alunos;
	}