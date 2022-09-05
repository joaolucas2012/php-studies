<?php

$condicao = true;

// laço while
while ($condicao === true) {

  // função para gerar um número randômico de 0 a 10
  $numero = rand(0, 10);
  if ($numero === 3){
    echo "O número é igual é três!!!";
    $condicao = false;
    continue;
  }
  echo $numero . "<br/>";
}

?>