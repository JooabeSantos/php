<?php

    include('Exemplo.php');
    //instacia de objeto!
    $exemplo = new Exemplo();
    $exemplo->setVar1('Joabe');
    echo $exemplo->pegaVar1();
   // $exemplo->va1 = 'jojo'  erro por estar privado
   // $exemplo->var2 = 'Joabe';
   echo '<hr>';
   $exemplo2 = new Exemplo;
   $exemplo2->setVar1('joj');
   echo $exemplo2->pegaVar1();

   // $exemplo2->var2 = 'Santos';

    
   // echo $exemplo->var2;
    //echo '<br>';
  //  echo $exemplo2->var2;
   // echo '<hr>';


   // echo $exemplo->var3;
   echo Exemplo::$var3; // não tem como adicionar nada
   echo '<hr>';
   Exemplo::metodoEstatico();
?>