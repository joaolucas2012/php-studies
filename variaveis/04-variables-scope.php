<?php
  $nome = "João";

  // função no php
  function teste(){
    // para acessar uma variavel fora do escopo da função
    global $nome;
    echo $nome;
  }
  // chamada de função
  teste();
  
  function teste2(){
    $nome = "Marina";
    echo "<br/>" . $nome . " Agora no teste 2";
  }

  teste2();

  ?>