<?php

// o int ...$valores pega todos os valores inteiros que forem passados como argumentos para a função e ignora ou converte o que não for inteiro
function soma(int ...$valores) {
  return array_sum($valores);
}

function somaFloat(float ...$valores) {
  return array_sum($valores);
}

function somaEConverteString(float ...$valores):string {
  return array_sum($valores);
}

// testes
echo soma(2, 45, "10", 2.3) . " com soma int<br/>";
echo somaFloat(2, 45, "10", 2.3) . " com soma float<br/>";
echo var_dump(somaEConverteString(2, 45, "10", 2.3)) . " com soma e converte em string";

?>