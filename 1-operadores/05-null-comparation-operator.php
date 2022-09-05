<?php 

$a = NULL;
$b = NULL;
$c = 10;
$d = 15;

// comparador de valores nulos, retorna o primeiro valor que encontrar, apenas
echo $a ?? $b ?? $c ?? $d;

?>