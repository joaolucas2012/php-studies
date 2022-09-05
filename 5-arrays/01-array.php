<?php

$frutas = array("laranja", "abacaxi", "melancia");
$numeros = array();

for ($i = 0; $i <11; $i++){
  array_push($numeros, $i);
}

// comando que exibe o array
print_r($frutas);
echo "<hr>";
print_r($numeros);

?>