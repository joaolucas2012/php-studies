<?php

// o autoload busca os nomes das classes necessárias em arquivos externos
// sempre que necessárias, desta forma:
function __autoload($nomeClasse){
  // var_dump($nomeClasse);
  require_once("$nomeClasse.php");
}

$carro = new DelRey();
$carro->acelerar(20);

?>