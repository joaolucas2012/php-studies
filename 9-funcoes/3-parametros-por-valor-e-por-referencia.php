<?php

$a = 10;

// passagem de parametro por valor
function trocaValorReferencia(&$a) {
  $a += 20;
  return $a;
}

// passagem de parametro por referencia (usa o & antes do parametro)
function trocaValor($a) {
  $a += 50;
  return $a;
}


echo trocaValor($a);
echo "<br/>";
echo trocaValorReferencia($a);
echo "<br/>";
echo $a;

?>