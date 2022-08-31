<?php

// tipos basicos de variáveis
  $nome = "Hcode";
  $site = "www.hcode.com.br";
  $ano = 1990;
  $salario = 5500.99;
  $bloqueado = false;

  // array
  $frutas = array("abacaxi", "laranja", "manga");

  // posição do array
  $frase = "frutas[1]" . ": " . $frutas[1] . "<br/>";
  echo $frase;

  // data
  $nascimento = new DateTime();
  var_dump($nascimento);

  echo "<br/>";

  // abrir arquivo no php
  $arquivo = fopen("exemplo-01.php", "r");
  var_dump($arquivo);

  // null
  $nulo = null;

?>