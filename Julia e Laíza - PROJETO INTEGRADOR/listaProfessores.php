<?php //abre


  include ("cabecalho.php"); 
   include ("professores.php");

   $lista= listaProfessores(); 
//fecha
?>


  <!-- colunas para centralizar -->
  <div class="coluna10">.</div>

  <!-- conteudo principal -->
  <article class="coluna80">

    <section class="lista">
        <ul>

 
  <?php 



    foreach ($lista as $professor){

    echo('<li> <a href="detalhaProfessor.php?cod='.$professor['siape'].'">'.$professor ['nome'].'</a> - '.$professor['email'].'</li>'); 
    }
   
  ?> 
    </ul>
  </section>
</article>

<?php 

include ("rodape.php");

?>


    
        
      





  
  	