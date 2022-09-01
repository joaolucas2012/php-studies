<?php

$a = 50;
$b = 35;
$c = 35;

// operador nave espacial
echo "Coparando: " . $a . ", " . $b . ", " . $c . "<br/><br/>";
echo "O da esquerda é maior: ";
var_dump($a <=> $b);
echo "<br/> O da direita é maior: ";
var_dump($b <=> $a);
echo "<br/> Os dois são iguais: ";
var_dump($b <=> $c);

/* Ele compara as duas variáveis (maior, igual ou menor, de uma só vez):
  Se a for maior que b -> retorna 1
  Se a for igual a b -> retorna 0
  Se a for menor que b -> retorna -1
*/

?>