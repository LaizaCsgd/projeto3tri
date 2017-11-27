<?php 

  include ("cabecalho.php"); 
   include("alunos.php");

 
  

?>
  <!-- colunas para centralizar -->
  <div class="coluna10">.</div>

  <!-- conteudo principal -->
  <article class="coluna80">

    <section class="lista">
        <ul>

<h1>1info1</h1>

  <?php 
 
   $lista=listaAlunosTurma('1info1'); 
    foreach ($lista as $alunos){

    echo('<li> <a href="detalhaAluno.php?cod='.$alunos['matricula'].'">'.$alunos['nome'].'</a>'.'  </li>');


    }
  

?> 

    </ul>

  </section>


  <section class="lista">
        <ul>

<h1>1info2</h1>
  <?php 
 
   $lista=listaAlunosTurma('1info2'); 
    foreach ($lista as $alunos){

    echo('<li> <a href="detalhaAluno.php?cod='.$alunos['matricula'].'">'.$alunos['nome'].'</a>'.'  </li>');


    }


?> 

    </ul>

  </section>


  <section class="lista">
        <ul>



<h1>1info3</h1>
  <?php 


   $lista=listaAlunosTurma('1info3'); 

    foreach ($lista as $alunos){

    echo('<li> <a href="detalhaAluno.php?cod='.$alunos['matricula'].'">'.$alunos['nome'].'</a>'.' </li>');


    }

?> 

    </ul>

  </section>

  



</article>

<?php 

include ("rodape.php");


?>