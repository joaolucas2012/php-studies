<?php
  $nome = 'fred';

  // printar nome na tela
  echo $nome;

  // descobrir o tipo da variável
  var_dump($nome);

  echo "<br/>";

  // descobre se a variavel existe
  if(isset($nome)){
    echo $nome;
  }

  // destroi a variavel na memoria
  unset($nome);
  echo $nome;

  $nome = 'João';
  $sobrenome = 'Ribeiro';

  // concatenar variaveis
  $nomeCompleto = $nome . " " . $sobrenome;
  echo $nomeCompleto;
?>