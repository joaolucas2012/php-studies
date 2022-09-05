<?php

// pegando funções de um arquivo externo
require_once "../3-include-require/require-once/functions.php";

// ----------------------- TESTES --------------------------- //
$qualASuaIdade = -1;
// $qualASuaIdade = 0;
// $qualASuaIdade = 5;
// $qualASuaIdade = 12;
// $qualASuaIdade = 15;
// $qualASuaIdade = 18;
// $qualASuaIdade = 49;
// $qualASuaIdade = 65;
// $qualASuaIdade = 100;
// --------------------------------------------------------- //

// parâmetros
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

// frase resultado
$frase = "Você é ";

// condicionais
if($qualASuaIdade < 0){
  $resultado = changeLetters("Você é ", "Idade inválida", $frase);
  echo $resultado;
}else if($qualASuaIdade == "0"){
  echo $frase . "um recém-nascido";
}else if($qualASuaIdade <= $idadeCrianca){
  echo $frase . "uma criança";
}else if($qualASuaIdade >= $idadeMaior && $qualASuaIdade < $idadeMelhor){
  echo $frase . "um adulto";
}else if($qualASuaIdade >= $idadeMelhor){
  $resultado = changeLetters("é", "está na melhor idade", $frase);
  echo $resultado;
}else{
  echo $frase . "um adolescente";
}

// operador ternário
echo $qualASuaIdade >= 18 ? "<br/>Maior de idade!" : "<br/>Menor de idade!";  

?>